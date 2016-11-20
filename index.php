<!DOCTYPE html>
<html>
    <head>
        <!-- Page title -->
        <title>FTP Connect</title>
        
        <!-- SEO -->
        <meta name="description" content="FTP Connect, the free, online FTP client designed for you">
        <meta name="keywords" content="FTP,free,online,FTP client">
        <meta name="author" content="Chooper100">
        
        <!-- General meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <!-- Styles -->
        <link href='/assets/css/home.css' rel='stylesheet' type='text/css'>
        
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        
        <!--Scripts-->
        <script src="/assets/js/home.js"></script>
    </head>
    <body>
        <div id="start">
            <h1>FTP Connect</h1>
            <h2>The simple and free FTP client to use!</h2>
            <h3>Get started:</h3>
            <form method="post" action="test_ftp.php">
                <div class="input-group">
                    <label for="txtftphost">FTP Host:</label>
                    <input type="text" id="txtftphost" name="ftphost"/>
                </div>
                <div class="input-group">
                    <label for="txtuser">FTP Username:</label>
                    <input type="text" id="txtuser" name="user"/>
                </div>
                <div class="input-group">
                    <label for="txtpass">FTP Password:</label>
                    <input type="password" id="txtpass" name="pass"/>
                </div>
                <input type="submit" value="Go"/>
            </form>
            <b>Warning: Currently only uses standard FTP connection over http!</b>
        </div>
        <div id="footer">
            <a href="/legal">Legal</a>
        </div>
    </body>
</html>	
