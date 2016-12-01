<?php
// Get document root
$doc_root = "";
if (is_dir($_SERVER['DOCUMENT_ROOT'])) {
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
} else {
    // Document root is invalid, kill page to prevent script injection
    die("Document root is invalid.<br/>Please contact me at chooper100.scratch@gmail.com if this error persists.");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Page title -->
        <title>FTP Connect - The free and simple FTP client for you</title>
        
        <!-- SEO -->
        <meta name="description" content="FTP Connect - The free and simple FTP client for you">
        <meta name="keywords" content="FTP,free,online,FTP client">
        <meta name="author" content="Chooper100">
        
        <!-- General meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <!-- Styles -->
        <link href='/assets/css/home.css' rel='stylesheet' type='text/css'>
        
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        
        <!--Scripts-->
        <script src="/assets/js/home.js" async></script>
    </head>
    <body>
        <?php include_once($doc_root.'/parts/analyticstracking.php') ?>
        <div id="start">
            <div id="start-left">
                <h1>FTP Connect</h1>
                <h2>The free and simple FTP client for you</h2>
            </div>
            <?php include $doc_root.'/parts/loginform.php'; ?>
            <div id="start-down-container">
                <a data-scroll href="#main">
                    <i id="start-down" class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div id="main">
            <?php
                $html = '<div id="no-https" class="message">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    <b>You are not using HTTPS:</b>
                    For better security, click <a href="https://ftpconnect.tk">here</a> to
                    go to the https version of this site.
                    </div>';
                if (isset($_SERVER['HTTPS'])) {
                    if ($_SERVER['HTTPS'] !== 'on') {
                        echo $html;
                    }
                } else {
                    echo $html;
                }
            ?>
            <div id="early-access" class="message">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <b>Warning - Early access project:</b>
                This project could contain broken or missing features
            </div>
            
        </div>
        <?php include $doc_root.'/parts/footer.php'; ?>
        <script src="/smooth-scroll/smooth-scroll.min.js"></script>
        <script>
            // Initialise smooth scroll
            smoothScroll.init({
                speed: 400,
                easing: 'easeOutQuad'
            });
        </script>
    </body>
</html>	
