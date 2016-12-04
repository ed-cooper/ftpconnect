<!DOCTYPE html>
<html>
    <head>
        <!-- Page title -->
        <title>FTP Connect IDE</title>
    </head>
    <body>
        <?php
        require '../api/sessionmanager.php';
        
        SessionManager::sessionStart('FTP');
        
        $conn_id = false;

        if ($_SESSION['ssl']) {
            // Use FTP over SSL

            // Check function exits

            if (function_exists("ftp_ssl_connect")) {
                // Function exists; begin connection

                $conn_id = @ftp_ssl_connect($_SESSION['host']);
            } else {
                // Function doesn't exist; display failiure message

                $message = "FTP over SSL not supported";
            }
        } else {
            // Use standard FTP
            $conn_id = @ftp_connect($_SESSION['host']);
        }
        
        if ($conn_id) {
            // Successfully connected

            // Login
            if (@ftp_login($conn_id, $_SESSION['user'], $_SESSION['pass'])) {
                // User successfully logged in
                var_dump(ftp_rawlist($conn_id, ftp_pwd($conn_id), true));

            }
        }
        ?>
    </body>
</html>