<?php
/**
 * RABEC Emergency Care Consultancy - Contact Form Handler
 * 
 * This script processes the contact form submissions from contact.php
 * It validates the input, sends an email notification, and redirects the user
 * with appropriate success or error messages.
 */

// Start session for any future session-based features
session_start();

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php?error=invalid_request');
    exit();
}

// Sanitize and validate input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Initialize variables
$errors = [];
$first_name = sanitize_input($_POST['first_name'] ?? '');
$last_name = sanitize_input($_POST['last_name'] ?? '');
$email = sanitize_input($_POST['email'] ?? '');
$phone = sanitize_input($_POST['phone'] ?? '');
$organization = sanitize_input($_POST['organization'] ?? '');
$service_interest = sanitize_input($_POST['service_interest'] ?? '');
$message = sanitize_input($_POST['message'] ?? '');
$contact_method = sanitize_input($_POST['contact_method'] ?? 'email');

// Validate required fields
if (empty($first_name)) {
    $errors[] = 'First name is required.';
}

if (empty($last_name)) {
    $errors[] = 'Last name is required.';
}

if (empty($email)) {
    $errors[] = 'Email address is required.';
} elseif (!validate_email($email)) {
    $errors[] = 'Please enter a valid email address.';
}

if (empty($message)) {
    $errors[] = 'Message is required.';
}

// If there are validation errors, redirect back with error
if (!empty($errors)) {
    header('Location: contact.php?error=validation&details=' . urlencode(implode(', ', $errors)));
    exit();
}

// Prepare email content
$to = 'info@rabec-consultancy.com'; // Change this to your actual email
$subject = 'New Contact Form Submission - RABEC Consultancy';
$full_name = $first_name . ' ' . $last_name;

// Create email body
$email_body = "New contact form submission from the RABEC website:\n\n";
$email_body .= "Name: " . $full_name . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Phone: " . ($phone ?: 'Not provided') . "\n";
$email_body .= "Organization: " . ($organization ?: 'Not provided') . "\n";
$email_body .= "Service of Interest: " . ($service_interest ?: 'Not specified') . "\n";
$email_body .= "Preferred Contact Method: " . ucfirst($contact_method) . "\n";
$email_body .= "Message:\n" . $message . "\n\n";
$email_body .= "Form submitted on: " . date('Y-m-d H:i:s') . "\n";
$email_body .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

// Email headers
$headers = "From: noreply@rabecc.com\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Attempt to send email
$mail_sent = false;

try {
    $mail_sent = mail($to, $subject, $email_body, $headers);
} catch (Exception $e) {
    error_log('Contact form mail error: ' . $e->getMessage());
}

// Log the submission (optional - for record keeping)
$log_entry = date('Y-m-d H:i:s') . " - Contact form submission from: " . $email . " (" . $full_name . ")\n";
error_log($log_entry, 3, 'contact_submissions.log');

// Auto-reply email to the user
$auto_reply_subject = 'Thank you for contacting RABEC Emergency Care Consultancy';
$auto_reply_body = "Dear " . $first_name . ",\n\n";
$auto_reply_body .= "Thank you for reaching out to RABEC Emergency Care Consultancy. We have received your message and appreciate your interest in our services.\n\n";
$auto_reply_body .= "Our team will review your inquiry and respond within 24 hours during business days. If you have an urgent matter, please call our emergency consultation hotline at +1 (555) 123-4567.\n\n";
$auto_reply_body .= "Here's a summary of what you submitted:\n";
$auto_reply_body .= "- Service of Interest: " . ($service_interest ?: 'General inquiry') . "\n";
$auto_reply_body .= "- Preferred Contact Method: " . ucfirst($contact_method) . "\n\n";
$auto_reply_body .= "We look forward to helping you enhance your emergency care services.\n\n";
$auto_reply_body .= "Best regards,\n";
$auto_reply_body .= "The RABEC Consultancy Team\n\n";
$auto_reply_body .= "---\n";
$auto_reply_body .= "RABEC Emergency Care Consultancy\n";
$auto_reply_body .= "123 Healthcare Avenue, Medical District\n";
$auto_reply_body .= "Phone: +1 (555) 123-4567\n";
$auto_reply_body .= "Email: info@rabecc.com\n";
$auto_reply_body .= "Website: www.rabec-consultancy.com";

$auto_reply_headers = "From: RABEC Consultancy <info@rabecc.com>\r\n";
$auto_reply_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$auto_reply_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send auto-reply
try {
    mail($email, $auto_reply_subject, $auto_reply_body, $auto_reply_headers);
} catch (Exception $e) {
    error_log('Contact form auto-reply error: ' . $e->getMessage());
}

// Redirect based on email success
if ($mail_sent) {
    // Success - redirect with success message
    header('Location: contact.php?success=1');
} else {
    // Error - redirect with error message
    header('Location: contact.php?error=mail_failed');
}

exit();
?>