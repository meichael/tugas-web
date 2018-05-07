
	
<?php
if(isset($_POST['save'])){
	$kodea= $_POST['kodea'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$anggota->edit($_GET['kodea'],$kodea,$nama,$keterangan);

}



?>

<h2>EDIT ANGGOTA</h2>
<a href="menuA.php?menu=anggota" class="tambah">Kembali</a>
<br />
<div>
	<form name="edt" action="" method="post">
		<p>KodeA: <input type="number" name="kodea" required="" /></p>
		<p>Nama : <input type="text" name="nama" required="" /></p>
		<p>Keterangan : <input type="text" name="keterangan" required="" /></p>
		<button name="save" type="submit">Simpan</button>
	</form>
</div>
<?php
if(isset($_GET['kodea'])){
	echo "
		<script>
			document.forms['edt']['kodea'].value = ".$_GET['kodea'].";
			document.forms['edt']['nama'].value = '".$_GET['nama']."';
			document.forms['edt']['keterangan'].value = '".$_GET['keterangan']."';
			
		</script>
	";
}
?>