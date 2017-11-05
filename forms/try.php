<html>
<head>
<title>PHP microsoft docx file Upload script</title>
</head>
<body>
<form enctype="multipart/form-data"
    action="process.php" method="post">
<p><input type="hidden" name="MAX_FILE_SIZE" value="1000000" /> <input
    type="file" name="file" /><br />
<input type="submit" value="upload!" /></p>
</form>
</body>
</html>