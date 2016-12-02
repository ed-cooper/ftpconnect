<?php
// Mark output as json
header('Content-Type: application/json');

// Create output

$success = false;
$message = "";
$data = [
    "success" => & $success,
    "message" => & $message
];

// Get document root

$doc_root = "";
if (is_dir($_SERVER['DOCUMENT_ROOT'])) {
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
} else {
    // Document root is invalid; kill page to prevent script injection
    
    $message = "Document root is invalid. Please contact me at "
               . "chooper100.scratch@gmail.com if this error persists.";
    
    die(json_encode($data));
}

// Validate request

require $doc_root . '/api/request-validator.php';
$request_error = IsBadRequest(0, "POST", ["user", "pass", "ftphost"]);
if ($request_error) {
    // Request is invalid; kill page
    
    $message = "Bad request: ".$request_error;
    
    die(json_encode($data));
}

// Get inputs

$ftp_user_name = $_POST["user"];
$ftp_user_pass = $_POST["pass"];
$ftp_server = $_POST["ftphost"];

// Create ftp connection

$conn_id = false;

if (isset($_POST["ftpssl"]) && $_POST["ftpssl"] === "on") {
    // Use FTP over SSL
    
    // Check function exits
    
    if (function_exists("ftp_ssl_connect")) {
        // Function exists; begin connection
        
        $conn_id = @ftp_ssl_connect($ftp_server);
    } else {
        // Function doesn't exist; display failiure message
        
        $message = "FTP over SSL not supported";
    }
} else {
    // Use standard FTP
    $conn_id = @ftp_connect($ftp_server);
}

// Test connection was made

if ($conn_id) {
    // Successfully connected
    
    // Login
    if (@ftp_login($conn_id, $ftp_user_name, $ftp_user_pass)) {
        // User successfully logged in

        $success = true;
        $message = "Login successful";
    } else {
        // Login failed

        $message = "Username or password incorrect";
    }

    // Close the FTP connection
    ftp_close($conn_id);
} else {
    // Connection failed
    
    // Only update message if not already set
    if ($message === "") {
        $message = "Could not connect to $ftp_server";
    }
}

// Write json output

echo json_encode($data);