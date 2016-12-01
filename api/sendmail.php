<?php
// Mark output as json
header('Content-Type: application/json');

// Get document root
$doc_root = "";
if (is_dir($_SERVER['DOCUMENT_ROOT'])) {
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
} else {
    // Document root is invalid; kill page to prevent script injection 
    die(json_encode(
            [ 
                "success" => false,
                "message" => "Document root is invalid. Please contact me at "
                             . "chooper100.scratch@gmail.com if this error persists."
            ]
    ));
}

// Load phpmailer
require $doc_root . '/phpmailer/PHPMailerAutoload.php';

// Create output
$success = false;
$message = "";
$data = [
    "success" => & $success,
    "message" => & $message
];

// Create new mail object
$mail = new PHPMailer;

// Set email headers
$mail->Sender = 'contact@ftpconnect.tk'; // Sender must be a valid ftpconnect.tk email
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('contact@ftpconnect.tk', 'FTP Connect Contact Team');

// Don't use HTML (to avoid script injection)
$mail->isHTML(false);

// Set message subject and body
$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['message'];

// Send mail
if($mail->send()) {
    $success = true;
    $message = "Message sent successfully";
} else {
    $message = "Error: " . $mail->ErrorInfo;
}

// Output result
echo json_encode($data);
?>