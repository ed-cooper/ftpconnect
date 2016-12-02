<?php
$allow_ssl = function_exists("ftp_ssl_connect");
?>
<form method="post" id="loginform" action="/api/login.php">
    <h3>Get started:</h3>
    <div class="form-group">
        <label for="txtftphost" class="control-label">FTP Host:</label>
        <input type="text" class="form-control" id="txtftphost" name="ftphost" />
    </div>
    <div class="form-group">
        <label for="txtuser" class="control-label">FTP Username:</label>
        <input type="text" class="form-control" id="txtuser" name="user" />
    </div>
    <div class="form-group">
        <label for="txtpass" class="control-label">FTP Password:</label>
        <input type="password" class="form-control" id="txtpass" name="pass" />
    </div>
    <div class="form-group">
        <label class="control-label <?php if (!$allow_ssl) { echo "disabled"; }?>">
            <input type="checkbox" id="chkssl" name="ftpssl" <?php echo ($allow_ssl ? "checked" : "disabled") ?> />
            Use FTP over SSL
        </label>
    </div>
    <input type="submit" class="btn-submit" value="Go"/>
</form>