<?php
include("menuFungsi.php");
$anggota = new Anggota();
$buku = new Buku();
$pinjam = new Pinjam();
$kembali = new Kembali();


if(isset($_GET['hapusAnggota'])){
	$kodea = $_GET['hapusAnggota'];
	$anggota->hapus($kodea);
}
if(isset($_GET['hapusBuku'])){
	$id = $_GET['hapusBuku'];
	$buku->hapus($id);
}
if(isset($_GET['hapusPinjam'])){
	$id = $_GET['hapusPinjam'];
	$pinjam->hapus($id);
}
if(isset($_GET['hapusKembali'])){
	$id = $_GET['hapusKembali'];
	$kembali->hapus($id);
}
?>
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
			.btn {
				cursor: pointer;
				color: #002dff;
			}
			.btn :hover {
				color: #002dff;
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
				<a class="item" href="menuA.php?menu=anggota"><p>Anggota</p></a>
				<a class="item" href="menuA.php?menu=buku"><p>Buku</p></a>
				<a class="item" href="menuA.php?menu=pinjam"><p>Peminjaman</p></a>
				<a class="item" href="menuA.php?menu=kembali"><p>Pengembalian</p></a>
				<a class="item" href="menuA.php?menu=upload"><p>Upload File</p></a>
				<a class="item" onclick="logout()"><p>Keluar</p></a>
			</div>
		
	</div>
	
	<div class="konten">
	<?php
	if(isset($_GET['menu'])){
		switch($_GET['menu']){
		case "anggota" 	:
			include 'anggota.php';
			break;
		case "buku" 	:
			include 'bukuA.php';
			break;
		case "pinjam" 	:
			include 'pinjam.php';
			break;
		case "kembali"	:
			include 'kembali.php';
			break;
		case "upload"	:
			include 'upload.php';
			break;
		case "edtkembali"	:
			include 'edtPengembalian.php';
			break;
		case "tmbpinjam":
			include 'tambahPinjam.php';
			break;
		case "edtpinjam":
			include 'edtpinjam.php';
			break;
		case "tmbanggota":
			include 'tambahAnggota.php';
			break;
		case "edtanggota":
			include 'edtAnggota.php';
			break;
		case "tmbbuku"	:
			include 'tambahBuku.php';
			break;
		case "edtbuku"	:
			include 'edtBuku.php';
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
	<script>
		function logout(){
				var log = confirm("Apakah anda yakin ingin logut ?");
				if(log){
					window.location.href = 'indeex.php';
				}
			}
		
	</script>
	</body>
</html>