<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SISTEM INFORMASI PERPUSTAKAAN</title>
		<style>
			body {
				height: 100%;
				margin: 0px 0px 0px 0px;
			}
		
			.judul {
				width: 100%;
				height: 60px;
				display: block;
				position: fixed;
				background-color: #141014;
				padding:20px 0px 20px 0px;
				text-align: center;
			}
			
			.sidebar {
				float: left;
				width: 180px;
				position: fixed;
				top: 100px;
				left: 0px;
				height: 100%;
				display: inline-block;
				background-color: #5d5d5d;
				padding: 20px 20px 20px 20px
			}
			
			.konten {
				text-align: center;
				height: 100%;
				position: fixed;
				top: 100px;
				left:220px; 
				width: 85%;
				float: left;
				display: block;
				background-color: #bbbbbb;
				overflow: scroll;
				padding: 20px 20px 20px 20px;
			}
			
			#nama {
				font-size: 50px;
				color: white;
				vertical-align: middle;
			}
			
			.item {
				font-size: 25px;
				color: white;
			}
			.item :hover {
				cursor: pointer;
			}
			a {
				text-decoration: none;
			}
			
			table {
				margin: auto;
				width: 80%;
				border-collapse: collapse;
			}
			
			
		</style>
	</head>
	<body>
	
	<div class="judul">
		<font id="nama">SISTEM INFORMASI PERPUSTAKAAN</font>
		
	</div>
		<div class="sidebar">
			<div class="menu">
				<a class="item" href="menu.php?menu=buku"><p>Buku</p></a>
				<a class="item" onclick="logout()"><p>Keluar</p></a>
			</div>
		
	</div>
	
	<div class="konten">
	<?php
	if(isset($_GET['menu'])){
		switch($_GET['menu']){
		case "buku" 	:
			include 'buku.php';
			break;
		default			:
	}
	}else{
		include 'awal.php';
	}
	
	
	?>
	
		
	</div>
	<script>
		function logout(){
				var log = confirm("Apakah anda yakin ingin logut ?");
				if(log){
					window.location.href = 'index.php';
				}
			}
		
	</script>
	</body>
</html>