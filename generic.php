<?php
// Get display name of page for user
$displayname = ucwords(str_replace("-", " ", $_GET['resource']));

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
        <!-- Title -->
        <title>FTP Connect - <?php echo $displayname ?></title>
        
        <!-- SEO -->
        <meta name="description" content="FTP Connect - <?php echo $displayname ?>">
        <meta name="keywords" content="FTP,free,online,legal">
        <meta name="author" content="Chooper100">
        
        <!-- General meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <!-- Styles -->
        <link href='/assets/css/generic.css' rel='stylesheet' type='text/css'>
        
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab' rel='stylesheet' type='text/css'>
        
        <!--Scripts-->
        <!--<script src="/assets/js/generic.js" async></script>-->
    </head>
    <body>
        <?php include_once($doc_root.'/parts/analyticstracking.php') ?>
        <div id="header">
            <h1>
                <?php 
                    echo $displayname;
                ?>
            </h1>
        </div>
        <div id="main">
            <?php
                include $doc_root.'/content/'.$_GET['resource'].'.php';
            ?>
        </div>
        <?php
            include $doc_root.'/parts/footer.php';
        ?>
    </body>
</html>