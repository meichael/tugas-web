<h2>DAFTAR PENGEMBALIAN</h2>
<a href="menuA.php?menu=tmbkembali" class="tambah">Tambah Pengembalian</a>
<br />
<div>
	<table border="1" cellpadding="1" cellspacing="1">
    <tr>
    	
    	<th>Id Kembali</th>
		<th>Id Pinjam</th>
    	<th>Tanggal Kembali</th>
    	<th>Edit</th>
    	<th>Hapus</th>
    </tr>
    <?php
    	$data=mysql_query("SELECT * from pengembalian");
        if ($data === FALSE){
        	die(mysql_error());
        }
    	$no=1;
        while($hasil=mysql_fetch_array($data)){
        	echo '
        	<tr>
        		
        		<td>'.$hasil['Idkembali'].'</td>
        		<td>'.$hasil['Idpinjam'].'</td>
        		<td>'.$hasil['Tglkembali'].'</td>
        		<td><a class="btn" onclick="edit('.$hasil['Idkembali'].',\''.$hasil['Idpinjam'].'\',\''.$hasil['Tglkembali'].'\')">Edit</a></td>
        		<td><a class="btn" onclick="hapus('.$hasil['Idkembali'].')">Hapus</a></td>
        	</tr>
        	';
        	$no++;
		}
    ?>
 </table>
</div>
<script>
	function hapus(content){
		var stat = confirm("Apakah anda yakin ingin menghapus data tersebut ?");
				if(stat){
					location.href = 'menuA.php?hapusKembali='+content;
				}
	}
	function edit(id,idpinjam,tglkembali){
		location.href = 'menuA.php?menu=edtkembali&id='+id+'&idpinjam='+idpinjam+'&tglkembali='+tglkembali;
	}
	 
</script>