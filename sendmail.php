<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->setFrom('contact@ftpconnect.tk', 'FTP Connect'); // From email must be a ftpconnect.tk email
$mail->addReplyTo($_POST['email'], 'Test');
$mail->addAddress('contact@ftpconnect.tk', 'FTP Connect');     // Add a recipient

$mail->isHTML(false);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>