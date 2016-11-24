<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->setFrom('contact@ftpconnect.tk', 'FTP Connect'); // From email must be a ftpconnect.tk email
$mail->addReplyTo($_POST['email'], $_POST['name']);
$mail->addAddress('contact@ftpconnect.tk', 'FTP Connect');

// Don't use HTML (to avoid script injection)
$mail->isHTML(false);

$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>