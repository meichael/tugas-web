<?php
if(isset($_POST['save'])){
	$idpinjam = $_POST['idpinjam'];	
	$tglkembali = $_POST['tglkembali'];
	$kembali->edit($_GET['id'],$idpinjam,$tglkembali);
}

?>

<h2>EDIT PENGEMBALIAN</h2>
<a href="menuA.php?menu=kembali" class="tambah">Kembali</a>
<br />
<div>
	<form name="edt" action="" method="post">		
		<p>Id Pinjam: <input type="number" name="idpinjam" required="" /></p>
		<p>Tanggal Kembali: <input type="date" name="tglkembali" required="" /></p>
		<button name="save" type="submit">Simpan</button>
	</form>
</div>
<?php
if(isset($_GET['id'])){
	echo "
		<script>
			document.forms['edt']['idpinjam'].value = ".$_GET['idpinjam'].";
			document.forms['edt']['tglkembali'].value = '".$_GET['tglkembali']."';			
		</script>
	";
}
?>