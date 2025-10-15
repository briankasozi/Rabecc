<?php
// Simple PHPMailer test send page for debugging (development only)
require_once __DIR__ . '/includes/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/includes/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/includes/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$to = 'info@rabecc.com';
$subject = 'PHPMailer Test Send';
$body = "This is a test message from contact-test.php\n" . date('c');

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rabecc50@gmail.com';
    // App password (spaces removed) provided by user
    $mail->Password = getenv('RABECC_SMTP_PASSWORD') ?: 'mxvotvhucfemfgdr';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';

    $mail->setFrom('site@rabecc.com', 'RABEC Test');
    $mail->addAddress($to);
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $body;

    $mail->send();
    echo "Message sent successfully.";
} catch (\PHPMailer\PHPMailer\Exception $e) {
    echo "PHPMailer Exception: " . htmlspecialchars($e->getMessage());
}

