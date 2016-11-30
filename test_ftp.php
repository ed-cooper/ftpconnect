<?php
$ftp_user_name = $_POST["user"];
$ftp_user_pass = $_POST["pass"];
$ftp_server = $_POST["ftphost"];

if (isset($_POST["ftpssl"]) && $_POST["ftpssl"] == "on") {
    // Use FTP over SSL
    echo "Using ftp over ssl\r\n";
    $conn_id = ftp_ssl_connect($ftp_server) or die("Could not connect to $ftp_server");
} else {
    // User selected standard FTP
    echo "Not using ftp over ssl\r\n";
    $conn_id = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
}

$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

if (!$login_result) {
    // PHP will already have raised an E_WARNING level message in this case
    die("can't login");
}

// Output base directory name
echo ftp_pwd($conn_id); // /

// close the ssl connection
ftp_close($conn_id);

?>