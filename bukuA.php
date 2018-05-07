<h2>DAFTAR BUKU</h2>
<a href="menuA.php?menu=tmbbuku" class="tambah">Tambah Buku</a>
<br />
<div>
	<table border="1" cellpadding="1" cellspacing="1">
    <tr>
    	
    	<th>Id Buku</th>
		<th>Judul</th>
    	<th>Penerbit</th>
    	<th>Tahun</th>
    	<th>Jumlah</th>
    	<th>Edit</th>
    	<th>Hapus</th>
    </tr>
    <?php
    	$dataBuku=mysql_query("SELECT * from buku");
        if ($dataBuku === FALSE){
        	die(mysql_error());
        }
    	$no=1;
        while($hasil=mysql_fetch_array($dataBuku)){
        	echo '
        	<tr>
        		
        		<td>'.$hasil['Idbuku'].'</td>
        		<td>'.$hasil['Judul_buku'].'</td>
        		<td>'.$hasil['Penerbit'].'</td>
        		<td>'.$hasil['Tahun'].'</td>
        		<td>'.$hasil['Jumlah'].'</td>
        		<td><a class="btn" onclick="edit('.$hasil['Idbuku'].',\''.$hasil['Judul_buku'].'\',\''.$hasil['Penerbit'].'\',\''.$hasil['Tahun'].'\',\''.$hasil['Jumlah'].'\')">Edit</a></td>
        		<td><a class="btn" onclick="hapus('.$hasil['Idbuku'].')">Hapus</a></td>
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
					location.href = 'menuA.php?hapusBuku='+content;
				}
	}
	function edit(id,judul,penerbit,tahun,jumlah){
		location.href = 'menuA.php?menu=edtbuku&id='+id+'&judul='+judul+'&penerbit='+penerbit+'&tahun='+tahun+'&jumlah='+jumlah;
	}
	 
</script>