<?php
if(isset($_POST['save'])){
	$idpinjam = $_POST['idpinjam'];
	$nim = $_POST['nim'];
	$idbuku = $_POST['idbuku'];
	$jumlahbuku = $_POST['jumlahbuku'];
	$penerbit = $_POST['penerbit'];
	$tglpinjam = $_POST['tglpinjam'];
	$tglkembali = $_POST['tglkembali'];
	
	$pinjam->edit($_GET['id'],$idpinjam,$nim,$idbuku,$jumlahbuku,$penerbit,$tglpinjam,$tglkembali);
	
	
	

}

?>

<h2>EDIT PEMINJAMAN</h2>
<a href="menuA.php?menu=pinjam" class="tambah">Kembali</a>
<br />
<div>
	<form name="edt" action="" method="post">
		<p>Id Pinjam: <input type="number" name="idpinjam" required="" /></p>
		<p>NIM	: <input type="number" name="nim" required="" /></p>
		<p>Id Buku : <input type="number" name="idbuku" required="" /></p>
		<p>Jumlah Buku : <input type="number" name="jumlahbuku" required="" /></p>
		<p>Penerbit<input type="text" name="penerbit" required="" /></p>
		<p>Tanggal Pinjam<input type="date" name="tglpinjam" required="" /></p>
		<p>Tanggal Kembali<input type="date" name="tglkembali" required="" /></p>
		
		<button name="save" type="submit">Simpan</button>
	</form>
</div>
<?php
if(isset($_GET['id'])){
	echo "
		<script>
			document.forms['edt']['idpinjam'].value = ".$_GET['id'].";
			document.forms['edt']['nim'].value = ".$_GET['nim'].";
			document.forms['edt']['idbuku'].value = '".$_GET['idbuku']."';
			document.forms['edt']['jumlahbuku'].value = '".$_GET['jumlahbuku']."';	
			document.forms['edt']['penerbit'].value = '".$_GET['penerbit']."';
			document.forms['edt']['tglpinjam'].value = '".$_GET['tglpinjam']."';
			document.forms['edt']['tglkembali'].value = '".$_GET['tglkembali']."';
			
			
		</script>
	";
}
?>