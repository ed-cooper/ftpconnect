<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->setFrom('contact@ftpconnect.tk', 'Mailer');
$mail->addAddress('chooper100.scratch@gmail.com', 'Joe User');     // Add a recipient

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