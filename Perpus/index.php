<?php
	include("login.php");
	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$login = new Login($user,$pass);
		$login->petugas();
	}
?>
<html>
	<head>
		<title>Login Petugas</title>
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
		<form method="POST">
		<div class="login">
			<h1 align="center">Petugas</h1>
			<input type="text" id="input" class="Input-text" name="user" placeholder="masukkan username">
			<br>
			<input type="password" id="input" class="Input-text" name="pass" placeholder="masukkan password">
			<br>
			<input type="submit" id="input" class="Input-btn" name="login" value="Login"/>
		</div>
		</form>
	</body>
</html>
	