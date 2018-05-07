<h2>DAFTAR BUKU</h2>

<br />
<div>
	<table border="1" cellpadding="1" cellspacing="1">
    <tr>
    	
    	<th>Id Buku</th>
		<th>Judul</th>
    	<th>Penerbit</th>
    	<th>Tahun</th>
    	<th>Jumlah</th>
    </tr>
    <?php
    require 'koneksi.php';
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
        	</tr>
        	';
        	
		}
    ?>
 </table>
	
</div>