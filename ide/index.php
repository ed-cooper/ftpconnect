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
        
        var_dump($_SESSION);
        ?>
    </body>
</html>