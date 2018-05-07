<?php
 include("class/ta.php");
?>

<h2>TAMBAH ANGGOTA</h2>
<a href="menuA.php?menu=anggota" class="tambah">Kembali</a>
<br />
<div>
	<form action="" method="post">
		<p>NIM	: <input type="number" name="kodea" required="" /></p>
		<p>Nama : <input type="text" name="nama" required="" /></p>
		<p>Keterangan : <input type="text" name="keterangan" required="" /></p>
		
		<button name="save" type="submit">Simpan</button>
	</form>
</div>