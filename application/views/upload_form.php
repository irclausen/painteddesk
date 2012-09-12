<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>
<a href="<?= site_url('auth/logout') ?>">Log out</a>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="text" name="title" />

<input type="submit" value="upload" />

</form>

</body>
</html>