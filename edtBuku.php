<?php
if(isset($_POST['save'])){
	$idbuku = $_POST['idbuku'];
	$judul_buku = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];
	$jumlah = $_POST['jumlah'];
	
	$buku->edit($_GET['id'],$idbuku,$judul_buku,$penerbit,$tahun,$jumlah);
}



?>

<h2>EDIT BUKU</h2>
<a href="menuA.php?menu=buku" class="tambah">Kembali</a>
<br />
<div>
	<form name="edt" action="" method="post">
		
		<p>Id Buku : <input type="number" name="idbuku" required="" /></p>
		<p>Judul Buku : <input type="text" name="judul" required="" /></p>
		<p>Penerbit : <input type="text" name="penerbit" required="" /></p>
		<p>Tahun : <input type="number" name="tahun" required="" /></p>
		<p>Jumlah : <input type="number" name="jumlah" required="" /></p>
		
		<button name="save" type="submit">Simpan</button>
	</form>
</div>
<?php
if(isset($_GET['id'])){
	echo "
		<script>
			document.forms['edt']['idbuku'].value = ".$_GET['id'].";
			document.forms['edt']['judul'].value = '".$_GET['judul']."';
			document.forms['edt']['penerbit'].value = '".$_GET['penerbit']."';
			document.forms['edt']['tahun'].value = ".$_GET['tahun'].";
			document.forms['edt']['jumlah'].value = ".$_GET['jumlah'].";
			
		</script>
	";
}
?>