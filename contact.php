<?php
$page_title = "Contact Us";
$meta_description = "Get in touch with RABEC Emergency Care Consultancy for professional consultancy services and expert guidance.";

// Helper to detect AJAX
function is_ajax_request() {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') return true;
    if (!empty($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) return true;
    if (!empty($_POST['ajax']) && $_POST['ajax'] === '1') return true;
    return false;
}

// Helper to respond for both normal and AJAX requests
function contact_respond($success, $message) {
    if (is_ajax_request()) {
        header('Content-Type: application/json');
        echo json_encode(['success' => (bool)$success, 'message' => $message]);
        exit;
    }
    if ($success) {
        header('Location: contact.php?success=1');
    } else {
        header('Location: contact.php?error=1');
    }
    exit;
}

// Handle form submission and send email
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log('[contact.php] POST received. AJAX=' . (is_ajax_request() ? '1' : '0'));
    // Simple validation and sanitization
    $first_name = isset($_POST['first_name']) ? trim($_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $organization = isset($_POST['organization']) ? trim($_POST['organization']) : '';
    $service_interest = isset($_POST['service_interest']) ? trim($_POST['service_interest']) : '';
    $message_body = isset($_POST['message']) ? trim($_POST['message']) : '';

    // prevent header injection
    $clean = function($str){ return str_replace(array("\r", "\n"), array(' ', ' '), $str); };
    $first_name = $clean($first_name);
    $last_name = $clean($last_name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $phone = $clean($phone);
    $organization = $clean($organization);
    $service_interest = $clean($service_interest);
    $message_body = $clean($message_body);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $first_name === '' || $last_name === '' || $message_body === '') {
        error_log('[contact.php] Validation failed: ' . json_encode(['email' => $email, 'first' => $first_name, 'last' => $last_name]));
        contact_respond(false, 'Validation failed. Please check required fields.');
    }

    $to = 'info@rabecc.com';
    $subject = "Website Contact: " . ($service_interest ?: 'General Inquiry');
    $body = "New contact form submission:\n\n";
    $body .= "Name: {$first_name} {$last_name}\n";
    $body .= "Email: {$email}\n";
    if ($phone) $body .= "Phone: {$phone}\n";
    if ($organization) $body .= "Organization: {$organization}\n";
    if ($service_interest) $body .= "Service Interest: {$service_interest}\n";
    $body .= "\nMessage:\n{$message_body}\n";

    // Use centralized config for mail settings
    require_once __DIR__ . '/includes/config.php';

    try {
        require_once __DIR__ . '/includes/PHPMailer/src/PHPMailer.php';
        require_once __DIR__ . '/includes/PHPMailer/src/SMTP.php';
        require_once __DIR__ . '/includes/PHPMailer/src/Exception.php';

        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

        // If SMTP host and credentials are configured, use SMTP transport
        if (defined('MAIL_SMTP_HOST') && MAIL_SMTP_HOST !== '' && defined('MAIL_SMTP_USER') && MAIL_SMTP_USER !== '') {
            $mail->isSMTP();
            $mail->Host = MAIL_SMTP_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = MAIL_SMTP_USER;
            $mail->Password = MAIL_SMTP_PASSWORD;
            $mail->Port = MAIL_SMTP_PORT ?: 587;

            // Select encryption if provided
            if (defined('MAIL_SMTP_SECURE') && in_array(MAIL_SMTP_SECURE, ['ssl', 'tls'], true)) {
                $mail->SMTPSecure = (MAIL_SMTP_SECURE === 'ssl') ? \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS : \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            }

            // Debugging
            $mail->SMTPDebug = (defined('MAIL_DEBUG_ENABLED') && MAIL_DEBUG_ENABLED) ? 2 : 0;
            $mail->Debugoutput = 'error_log';

        } else {
            // Fall back to PHP mail()
            $mail->isMail();
        }

        // Recipients and content
        $fromAddress = (defined('MAIL_FROM_ADDRESS') && MAIL_FROM_ADDRESS !== '') ? MAIL_FROM_ADDRESS : (defined('MAIL_SMTP_USER') ? MAIL_SMTP_USER : 'site@' . ($_SERVER['SERVER_NAME'] ?? 'localhost'));
        $fromName = defined('MAIL_FROM_NAME') ? MAIL_FROM_NAME : 'Website';

        $mail->setFrom($fromAddress, $fromName);
        $mail->addAddress($to);
        $mail->addReplyTo($email, $first_name . ' ' . $last_name);

        $mail->CharSet = 'UTF-8';
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        error_log('[contact.php] Mail sent via PHPMailer for ' . $email . ' -> ' . $to);
        contact_respond(true, 'Thank you for your message! We will get back to you within 24 hours.');

    } catch (\PHPMailer\PHPMailer\Exception $e) {
        // Log PHPMailer error and try native mail() as a final fallback
        error_log('[contact.php] PHPMailer Exception: ' . $e->getMessage());

        $headers = "From: " . (defined('MAIL_FROM_ADDRESS') && MAIL_FROM_ADDRESS !== '' ? MAIL_FROM_ADDRESS : 'site@rabecc.com') . "\r\n";
        $headers .= "Reply-To: {$email}\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $sent = @mail($to, $subject, $body, $headers);
        if ($sent) {
            error_log('[contact.php] Native mail() fallback succeeded for ' . $email . ' -> ' . $to);
            contact_respond(true, 'Thank you for your message! We will get back to you within 24 hours.');
        } else {
            error_log('[contact.php] Native mail() fallback FAILED for ' . $email . ' -> ' . $to);
            contact_respond(false, 'There was an error sending your message.');
        }
    }
}

// Display success or error messages
$message = '';
$message_type = '';

if (isset($_GET['success']) && $_GET['success'] == '1') {
    $message = 'Thank you for your message! We will get back to you within 24 hours.';
    $message_type = 'success';
} elseif (isset($_GET['error'])) {
    $message = 'There was an error sending your message. Please try again or contact us directly.';
    $message_type = 'error';
}

// Configure the page header
$header_config = [
    'title' => 'Contact Us',
    'subtitle' => 'Ready to transform your emergency care services? Connect with our expert consultancy team and discover how RABEC can help save more lives',
    'background_image' => 'assets/images/equipment/StockCake-Medical Professional Care_1758320631.jpg',
    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>',
    'badge_text' => 'Get In Touch',
    'gradient_from' => 'green-800',
    'gradient_via' => 'teal-800',
    'gradient_to' => 'blue-800',
    'cta_text' => 'Emergency Consultation Available',
    'cta_link' => '#contact-form',
    'cta_icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>'
];
// Include global header (outputs <head> and navigation) before the page header
include 'includes/header.php';
// Then render the page header section which shows the large header image / hero
include 'includes/page-header.php';
?>

<!-- Contact Information & Form -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Success/Error Message -->
        <?php if ($message): ?>
        <div class="mb-8 fade-in">
            <div class="<?php echo $message_type === 'success' ? 'bg-primary-teal border-teal-400 text-green-800' : 'bg-red-100 border-red-400 text-red-800'; ?> border px-4 py-3 rounded-lg">
                <p class="font-medium"><?php echo htmlspecialchars($message); ?></p>
            </div>
        </div>
        <?php endif; ?>

        <!-- Floating toast notification (auto-shown when $message is set) -->
        <div id="contact-toast" class="fixed top-6 right-6 z-50 hidden" role="status" aria-live="polite">
            <div id="contact-toast-inner" class="max-w-sm w-80 rounded-lg shadow-lg overflow-hidden border bg-white">
                <div class="flex items-start p-4">
                    <div id="contact-toast-icon" class="flex-shrink-0 mr-3 w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                        <!-- icon filled by JS -->
                    </div>
                    <div class="flex-1">
                        <p id="contact-toast-title" class="font-semibold text-gray-900">Status</p>
                        <p id="contact-toast-body" class="text-sm text-gray-700 mt-1"></p>
                    </div>
                    <button id="contact-toast-close" class="ml-3 text-gray-500 hover:text-gray-700" aria-label="Close">&times;</button>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="fade-in">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Get In Touch</h2>
                
                <!-- Contact Cards -->
                <div class="space-y-6">
                    <!-- Office Location -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary-teal rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Our Office</h3>
                            <p class="text-gray-600">
                                Kayiwa's Galleria<br>
                                Room L1-K02<br>
                                Edward Avenue, Masaka City<br>
                                
                            </p>
                        </div>
                    </div>
                    
                    <!-- Phone -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary-teal rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Phone</h3>
                            <p class="text-gray-600">
                                <a href="tel:+256788515052" class="hover:text-primary-teal transition-colors">+256 (788) 515-052</a><br>
                                <span class="text-sm text-gray-500">Monday - Friday, 8:00 AM - 6:00 PM EAT</span>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary-teal rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                            <p class="text-gray-600">
                                <a href="mailto:info@rabecc.com" class="hover:text-primary-teal transition-colors">info@rabecc.com</a><br>
                                <span class="text-sm text-gray-500">We respond within 24 hours</span>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Emergency Contact -->
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary-teal rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Emergency Consultation</h3>
                            <p class="text-gray-600">
                                <a href="tel:+256788515052" class="hover:text-primary-teal transition-colors">+256 (788) 515-052</a><br>
                                <span class="text-sm text-gray-500">24/7 emergency consultation hotline</span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- additional information removed to keep page light -->
            </div>
            
            <!-- Contact Form -->
            <div class="fade-in">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Send Us a Message</h2>
                
                <form id="contact-form" action="contact-submit" method="POST" class="space-y-6">
                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-teal focus:border-transparent transition-colors">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-teal focus:border-transparent transition-colors">
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-teal focus:border-transparent transition-colors">
                    </div>
                    
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-teal focus:border-transparent transition-colors">
                    </div>
                    
                    <!-- Organization -->
                    <div>
                        <label for="organization" class="block text-sm font-medium text-gray-700 mb-2">Organization/Hospital</label>
                        <input type="text" id="organization" name="organization" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-teal focus:border-transparent transition-colors">
                    </div>
                    
                    <!-- Service Interest -->
                    <div>
                        <label for="service_interest" class="block text-sm font-medium text-gray-700 mb-2">Service of Interest</label>
                        <select id="service_interest" name="service_interest" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-teal focus:border-transparent transition-colors">
                            <option value="">Select a service</option>
                            <option value="EDIS Solutions">EDIS Solutions</option>
                            <option value="Equipment Procurement">Equipment Procurement</option>
                            <option value="Training Programs">Training Programs</option>
                            <option value="Policy Review">Policy Review</option>
                            <option value="Mentorship">Mentorship</option>
                            <option value="Student Support">Student Support</option>
                            <option value="Workforce Development">Workforce Development</option>
                            <option value="General Consultation">General Consultation</option>
                        </select>
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="5" required 
                                  placeholder="Please describe your needs, current challenges, or questions you have about our services..."
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-teal focus:border-transparent transition-colors resize-vertical"></textarea>
                    </div>
                    
                    <!-- Preferred Contact Method -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Contact Method</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="contact_method" value="email" checked 
                                       class="text-primary-teal focus:ring-primary-teal border-gray-300">
                                <span class="ml-2 text-gray-700">Email</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="contact_method" value="phone" 
                                       class="text-primary-teal focus:ring-primary-teal border-gray-300">
                                <span class="ml-2 text-gray-700">Phone</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div>
                        <button type="submit" 
                                class="w-full bg-primary-teal text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-teal-400 transition-colors focus:outline-none focus:ring-2 focus:ring-primary-teal focus:ring-offset-2">
                            Send Message
                        </button>
                    </div>
                    
                    <!-- Privacy Notice -->
                    <p class="text-sm text-gray-500">
                        By submitting this form, you agree to our privacy policy. We will never share your information with third parties and will only use it to respond to your inquiry.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map section removed to keep contact page light -->

<?php include 'includes/footer.php'; ?>
<script>
// Toast helper for contact form
(function(){
    var message = <?php echo json_encode($message); ?>;
    var type = <?php echo json_encode($message_type); ?>; // 'success' or 'error' or ''
    if (!message) return;

    var toast = document.getElementById('contact-toast');
    var toastBody = document.getElementById('contact-toast-body');
    var toastTitle = document.getElementById('contact-toast-title');
    var toastIcon = document.getElementById('contact-toast-icon');
    var closeBtn = document.getElementById('contact-toast-close');

    toastBody.textContent = message;
    if (type === 'success') {
        toastTitle.textContent = 'Message Sent';
        toastIcon.innerHTML = '<svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
        toastIcon.className = 'flex-shrink-0 mr-3 w-10 h-10 rounded-full bg-green-50 flex items-center justify-center';
    } else {
        toastTitle.textContent = 'Send Failed';
        toastIcon.innerHTML = '<svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
        toastIcon.className = 'flex-shrink-0 mr-3 w-10 h-10 rounded-full bg-red-50 flex items-center justify-center';
    }

    // show
    toast.classList.remove('hidden');
    toast.classList.add('animate-fade-in');

    // auto-dismiss after 6s
    var auto = setTimeout(hideToast, 6000);

    closeBtn.addEventListener('click', function(){
        clearTimeout(auto);
        hideToast();
    });

    function hideToast(){
        toast.classList.add('opacity-0');
        setTimeout(function(){
            toast.style.display = 'none';
        }, 300);
    }
})();
</script>
<script>
// AJAX submit for contact form
document.addEventListener('DOMContentLoaded', function(){
    // Select the contact form by id so the handler always attaches
    var form = document.getElementById('contact-form');
    if (!form) return;

    form.addEventListener('submit', function(e){
        e.preventDefault();
        var data = new FormData(form);
        data.append('ajax','1');

    fetch('contact-submit', {
            method: 'POST',
            body: data,
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        }).then(function(res){
            // If the server redirected to an HTML page instead of returning JSON
            // trying to parse will fail — handle that gracefully below.
            return res.json();
        }).then(function(json){
            // Show toast using existing DOM elements
            var toast = document.getElementById('contact-toast');
            var toastBody = document.getElementById('contact-toast-body');
            var toastTitle = document.getElementById('contact-toast-title');
            var toastIcon = document.getElementById('contact-toast-icon');
            var closeBtn = document.getElementById('contact-toast-close');

            toastBody.textContent = json.message || (json.success ? 'Message sent' : 'Error');
            if (json.success) {
                toastTitle.textContent = 'Message Sent';
                toastIcon.innerHTML = '<svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
                toastIcon.className = 'flex-shrink-0 mr-3 w-10 h-10 rounded-full bg-green-50 flex items-center justify-center';
                form.reset();
            } else {
                toastTitle.textContent = 'Send Failed';
                toastIcon.innerHTML = '<svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
                toastIcon.className = 'flex-shrink-0 mr-3 w-10 h-10 rounded-full bg-red-50 flex items-center justify-center';
            }

            toast.classList.remove('hidden');
            var auto = setTimeout(function(){ toast.style.display='none'; }, 6000);
            closeBtn.onclick = function(){ clearTimeout(auto); toast.style.display='none'; };
        }).catch(function(err){
            console.error('Contact submit error', err);
            // Fallback: if JSON couldn't be parsed (server redirected), show a user-friendly message
            var toast = document.getElementById('contact-toast');
            var toastBody = document.getElementById('contact-toast-body');
            var toastTitle = document.getElementById('contact-toast-title');
            var toastIcon = document.getElementById('contact-toast-icon');
            var closeBtn = document.getElementById('contact-toast-close');

            toastBody.textContent = 'Unable to send message. Please try again later.';
            toastTitle.textContent = 'Send Failed';
            toastIcon.innerHTML = '<svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
            toastIcon.className = 'flex-shrink-0 mr-3 w-10 h-10 rounded-full bg-red-50 flex items-center justify-center';
            toast.classList.remove('hidden');
            var auto = setTimeout(function(){ toast.style.display='none'; }, 6000);
            closeBtn.onclick = function(){ clearTimeout(auto); toast.style.display='none'; };
        });
    });
});
</script>
