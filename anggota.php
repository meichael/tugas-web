<h2>DAFTAR ANGGOTA</h2>
<a href="menuA.php?menu=tmbanggota" class="tambah">Tambah Anggota</a>
<br />
<div>
	<table border="1" cellpadding="1" cellspacing="1">
    <tr>
    	
		<th>KodeA</th>
    	<th>NAMA ANGGOTA</th>
		<th>KETERANGAN</th>
    	<th>EDIT</th>
    	<th>HAPUS</th>
    	
    </tr>
    <?php
    	$dataAnggota=mysql_query("SELECT * from anggota");
        if ($dataAnggota === FALSE){
        	die(mysql_error());
        }
    	$no=1;
        while($hasil=mysql_fetch_array($dataAnggota)){
        	echo '
        	<tr>
        		
        		<td>'.$hasil['KodeA'].'</td>
        		<td>'.$hasil['Nama'].'</td>
				<td>'.$hasil['Keterangan'].'</td>
        		<td><a class="btn" onclick="edit('.$hasil['KodeA'].',\''.$hasil['Nama'].'\',\''.$hasil['Keterangan'].'\')">Edit</a></td>
        		<td><a class="btn" onclick="hapus('.$hasil['KodeA'].')">Hapus</a></td>
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
					location.href = 'menuA.php?hapusAnggota='+content;
				}
	}
	
	function edit(kodea,nama,keterangan){
		location.href = 'menuA.php?menu=edtanggota&kodea='+kodea+'&nama='+nama+'&keterangan='+keterangan;
	}
	 
</script>
