<?php
// contact-submit.php
// Dedicated endpoint for contact form POSTs. Returns JSON for AJAX or redirects for normal posts.

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

// Accept POST only; for non-POST, show a small JSON message for AJAX or a 405
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if (is_ajax_request()) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    } else {
        http_response_code(405);
        echo 'Method Not Allowed';
    }
    exit;
}

// Load environment-driven config
require_once __DIR__ . '/includes/config.php';

// quick environment sanity checks
if (MAIL_DEBUG_ENABLED) {
    error_log('[contact-submit.php] MAIL_DEBUG_ENABLED is ON');
}

error_log('[contact-submit.php] POST received. AJAX=' . (is_ajax_request() ? '1' : '0'));

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
    error_log('[contact-submit.php] Validation failed: ' . json_encode(['email' => $email, 'first' => $first_name, 'last' => $last_name]));
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

// Send via PHPMailer (SMTP per environment configuration). If no SMTP config
// is provided, fall back to native mail() so the code works in minimal envs.
try {
    require_once __DIR__ . '/includes/PHPMailer/src/PHPMailer.php';
    require_once __DIR__ . '/includes/PHPMailer/src/SMTP.php';
    require_once __DIR__ . '/includes/PHPMailer/src/Exception.php';

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    // Use config constants from includes/config.php
    $smtp_host = MAIL_SMTP_HOST;
    $smtp_port = MAIL_SMTP_PORT ?: 587;
    $smtp_user = MAIL_SMTP_USER;
    // Support either MAIL_SMTP_PASSWORD or RABECC_SMTP_PASSWORD env var (backward compatible)
    $smtp_password = defined('MAIL_SMTP_PASSWORD') ? MAIL_SMTP_PASSWORD : '';
    // Allow an alternate environment-specific name used elsewhere in this project
    $alt = getenv('RABECC_SMTP_PASSWORD');
    if ($alt !== false && $alt !== '') {
        $smtp_password = $alt;
    }
    // Normalize password: remove whitespace and any leading colon the user may have pasted
    $smtp_password = ltrim(preg_replace('/\s+/', '', (string)$smtp_password), ':');
    $smtp_secure = MAIL_SMTP_SECURE; // 'tls' or 'ssl' or ''

    $use_smtp = !empty($smtp_host) && !empty($smtp_user) && !empty($smtp_password);

    if ($use_smtp) {
        $mail->isSMTP();
        $mail->Host = $smtp_host;
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_user;
        $mail->Password = $smtp_password;

        // choose encryption
        if (strtolower($smtp_secure) === 'ssl') {
            $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
            // common SSL port
            $mail->Port = $smtp_port ?: 465;
        } else {
            // default to STARTTLS
            $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $smtp_port ?: 587;
        }

        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = MAIL_DEBUG_ENABLED ? 2 : 0;

        // If debug enabled, write debug lines to our mail log (avoid exposing to users)
        if (MAIL_DEBUG_ENABLED) {
            $mail->Debugoutput = function($str, $level) {
                @file_put_contents(MAIL_DEBUG_LOG, date('c') . " [$level] $str\n", FILE_APPEND);
            };
        } else {
            // keep debug quiet
            $mail->Debugoutput = 'error_log';
        }

        // Relax TLS settings when necessary (for local/test environments).
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ];
    } else {
        // No SMTP configured; use mail() transport via PHPMailer (best-effort fallback)
        $mail->isMail();
        $mail->CharSet = 'UTF-8';
    }

    // Determine from address: prefer explicit from address from env, otherwise SMTP user
    $from_addr = MAIL_FROM_ADDRESS ?: ($smtp_user ?: 'site@' . ($_SERVER['SERVER_NAME'] ?? 'localhost'));
    $from_name = MAIL_FROM_NAME ?: 'RABEC Website';
    $mail->setFrom($from_addr, $from_name);
    $mail->addAddress($to);
    $mail->addReplyTo($email, $first_name . ' ' . $last_name);

    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body    = $body;

    // Pre-flight: if SMTP is requested, but openssl isn't available in the Apache SAPI,
    // warn and fall back to mail(). This helps portability between hosts.
    if ($use_smtp && !extension_loaded('openssl')) {
        error_log('[contact-submit.php] OpenSSL extension missing in PHP SAPI; falling back to mail()');
        // Force mail() fallback
        $mail->isMail();
    }

    $mail->send();
    error_log('[contact-submit.php] PHPMailer->send() succeeded for ' . $email . ' -> ' . $to);
    contact_respond(true, 'Thank you for your message! We will get back to you within 24 hours.');

} catch (\PHPMailer\PHPMailer\Exception $e) {
    error_log('[contact-submit.php] PHPMailer Exception: ' . $e->getMessage());
    $headers = "From: rabecc50@gmail.com\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $sent = @mail($to, $subject, $body, $headers);
    if ($sent) {
        error_log('[contact-submit.php] Native mail() fallback succeeded for ' . $email . ' -> ' . $to);
        contact_respond(true, 'Thank you for your message! We will get back to you within 24 hours.');
    } else {
        error_log('[contact-submit.php] Native mail() fallback FAILED for ' . $email . ' -> ' . $to);
        contact_respond(false, 'There was an error sending your message.');
    }
} catch (\Exception $e) {
    error_log('[contact-submit.php] General Exception: ' . $e->getMessage());
    $headers = "From: rabecc50@gmail.com\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $sent = @mail($to, $subject, $body, $headers);
    if ($sent) {
        error_log('[contact-submit.php] Native mail() fallback succeeded for ' . $email . ' -> ' . $to);
        contact_respond(true, 'Thank you for your message! We will get back to you within 24 hours.');
    } else {
        error_log('[contact-submit.php] Native mail() fallback FAILED for ' . $email . ' -> ' . $to);
        contact_respond(false, 'There was an error sending your message.');
    }
}

