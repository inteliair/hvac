<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.mail.me.com'; // SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'micahmckinleyy@me.com'; // SMTP username
    $mail->Password   = 'ibak-ubbp-qrdr-cbbo';   // SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587; // Enable TLS encryption, `ssl` also accepted

    // Sender info
    $mail->setFrom('micahmckinleyy@me.com', 'InteliAir');

    // Recipient
    $mail->addAddress('recipient@example.com');

    // Content
    $mail->isHTML(false); // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];

    // Send email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
