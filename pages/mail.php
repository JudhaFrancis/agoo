<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // SMTP Settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Gmail SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'agootechnology@gmail.com'; // Your email
    $mail->Password   = 'xpzmjypkdhgzpnvz'; // Your Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465; // Use SSL port

    // Gmail's port for TLS (587) or SSL (465)

    // Email Headers
    $mail->setFrom('agootechnology@gmail.com', 'Agoos');
    $mail->addAddress('sheela@itoi.org', 'Sheela'); // Recipient email and name

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = 'This is a test email sent using <b>PHPMailer</b> via Gmail SMTP with an App Password.';
    print_r($mail);
    exit;
    // Send Email
    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    $mail->SMTPDebug = 3; // Increase debug level for more details
    $mail->Debugoutput = 'html';
    echo "Mailer Error: {$mail->ErrorInfo}";
}
