<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>
<a href="<?= site_url('auth/logout') ?>">Log out</a>

<?php echo form_open_multipart('upload/do_upload');?>

<label for="userfile">Image File:</label>
<input type="file" name="userfile" size="20" />
<label for="title">Title:</label>
<input type="text" name="title" /><br />

<span>This item is sold:</span>
<input type="checkbox" name="isSold" value="true"><br />

<input type="submit" value="upload" />

</form>

</body>
</html>