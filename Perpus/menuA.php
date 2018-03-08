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
			<div class="home">
				<a class="item" href="menuA.php?home=petugasA"><p>Petugas</p></a>
				<a class="item" href="menuA.php?home=anggotaA"><p>Anggota</p></a>
				<a class="item" href="menuA.php?home=bukuA"><p>Buku</p></a>
				<a class="item" href="menuA.php?home=pinjamA"><p>Peminjaman</p></a>
				<a class="item" href="menuA.php?home=kembaliA"><p>Pengembalian</p></a>
				<a class="item" href="menuA.php?home=laporan"><p>Laporan</p></a>
				<a class="item" onclick="logout()"><p>Keluar</p></a>
			</div>
		
	</div>
	
	<div class="konten">
	<?php
	if(isset($_GET['home'])){
		switch($_GET['home']){
		case "petugasA" 	:
			include 'petugasA.php';
			break;
		case "anggotaA" 	:
			include 'anggotaA.php';
			break;
		case "bukuA" 	:
			include 'bukuA.php';
			break;
		case "pinjamA" 	:
			include 'pinjamA.php';
			break;
		case "kembaliA"	:
			include 'kembaliA.php';
			break;
		case "laporan"	:
			include 'laporan.php';
			break;
		case "tmbpinjam":
			include 'tambahPinjam.php';
			break;
		case "tmbanggota":
			include 'tambahAnggota.php';
			break;
		case "tmbbuku"	:
			include 'tambahBuku.php';
			break;
		case "tmbkembali"	:
			include 'tambahPengembalian.php';
			break;
		default			:
	}
	}else{
		include 'awal.php';
	}
	
	
	?>
	
		
	</div>
	
	
	
	//<script>
		function logout(){
				var log = confirm("Apakah anda yakin ingin logout ?");
				if(log){
					window.location.href = 'menu.php';
				}
			}
		 
	//</script>
	</body>
</html>