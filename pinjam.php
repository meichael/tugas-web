<h2>DAFTAR PEMINJAMAN</h2>
<a href="menuA.php?menu=tmbpinjam" class="tambah">Tambah Peminjaman</a>
<br />
<div>
	<table border="1" cellpadding="1" cellspacing="1">
    <tr>
    	<th>Id Pinjam</th>
		<th>NIM</th>
    	<th>Id Buku</th>
		<th>Jumlah Buku</th>
		<th>Penerbit</th>
    	<th>Tanggal Peminjaman</th>
    	<th>Tanggal Pengembalian</th>
    	
    	<th>Edit</th>
    	<th>Hapus</th>
    </tr>
    <?php
    	$dataPinjam=mysql_query("SELECT * from peminjaman");
        if ($dataPinjam === FALSE){
        	die(mysql_error());
        }
    	$no=1;
        while($hasil=mysql_fetch_array($dataPinjam)){
        	echo '
        	<tr>
        		
        		<td>'.$hasil['Idpinjam'].'</td>
        		<td>'.$hasil['NIM'].'</td>
        		<td>'.$hasil['Idbuku'].'</td>
				<td>'.$hasil['Jumlahbuku'].'</td>
				<td>'.$hasil['Penerbit'].'</td>
        		<td>'.$hasil['Tglpinjam'].'</td>
        		<td>'.$hasil['Tglkembali'].'</td>
        		<td><a class="btn" onclick="edit('.$hasil['Idpinjam'].',\''.$hasil['NIM'].'\',\''.$hasil['Idbuku'].'\',\''.$hasil['Jumlahbuku'].'\',\''.$hasil['Penerbit'].'\',\''.$hasil['Tglpinjam'].'\',\''.$hasil['Tglkembali'].'\')">Edit</a></td>
        		<td><a class="btn" onclick="hapus('.$hasil['Idpinjam'].')">Hapus</a></td>
        	</tr>
        	';
        	 
		}
    ?>
 </table>
</div>
<script>
	function hapus(content){
		var stat = confirm("Apakah anda yakin ingin menghapus data tersebut ?");
				if(stat){
					location.href = 'menuA.php?hapusPinjam='+content;
				}
	}
	function edit(id,nim,idbuku,jumlahbuku,penerbit,tglpinjam,tglkembali){
		location.href = 'menuA.php?menu=edtpinjam&id='+id+'&nim='+nim+'&idbuku='+idbuku+'&jumlahbuku='+jumlahbuku+'&penerbit='+penerbit+'&tglpinjam='+tglpinjam+'&tglkembali='+tglkembali;
	}
	 
</script>