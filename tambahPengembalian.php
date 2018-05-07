<?php
include("class/tpengembalian.php");
?>

<h2>TAMBAH PENGEMBALIAN</h2>
<a href="menuA.php?menu=kembali" class="tambah">Kembali</a>
<br />
<div>
	<form action="" method="post">		
		<p>Id Pinjam: <input type="number" name="idpinjam" required="" /></p>
		<p>Tanggal Kembali: <input type="date" name="tglkembali" required="" /></p>
		<button name="save" type="submit">Simpan</button>
	</form>
</div>