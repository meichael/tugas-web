<?php
 include("class/tpinjam.php");
?>

<h2>TAMBAH PEMINJAMAN</h2>
<a href="menuA.php?menu=pinjam" class="tambah">Kembali</a>
<br />
<div>
	<form action="" method="post">
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