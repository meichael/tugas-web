<?php
include("class/tb.php");

?>

<h2>TAMBAH BUKU</h2>
<a href="menuA.php?menu=buku" class="tambah">Kembali</a>
<br />
<div>
	<form action="" method="post">
		
		<p>Id Buku : <input type="number" name="idbuku" required="" /></p>
		<p>Judul Buku : <input type="text" name="judul" required="" /></p>
		<p>Penerbit : <input type="text" name="penerbit" required="" /></p>
		<p>Tahun : <input type="number" name="tahun" required="" /></p>
		<p>Jumlah : <input type="number" name="jumlah" required="" /></p>
		
		<button name="save" type="submit">Simpan</button>
	</form>
</div>