<html>
	<head>
		<title>Upload File</title>
	</head>
	<body>
	<form action="uploadfile.php" method="post" enctype="multipart/form-data">
		<label for="berkas">Pilih file</label>
		<input type="file" name="berkas" accept="file*"/>
		<input type="submit" value="UPLOAD" />
	</form>
</body>
</html>