<?php
// Get display name of page for user
$displayname = ucwords(str_replace("-", " ", $_GET['resource']));
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Title -->
        <title>FTP Connect - <?php echo $displayname ?></title>
        
        <!-- SEO -->
        <meta name="description" content="FTP Connect - Legal">
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
        <script src="/assets/js/generic.js"></script>
    </head>
    <body>
        <?php include_once($_SERVER['DOCUMENT_ROOT'].'/parts/analyticstracking.php') ?>
        <div id="header">
            <h1>
                <?php 
                    echo $displayname;
                ?>
            </h1>
        </div>
        <div id="main">
            <?php
                include $_SERVER['DOCUMENT_ROOT'].'/content/'.$_GET['resource'].'.php';
            ?>
        </div>
        <?php
            include $_SERVER['DOCUMENT_ROOT'].'/parts/footer.php';
        ?>
    </body>
</html>