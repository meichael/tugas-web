<html>
<head>
	<title>Tambah Buku Admin</title>
</head>
<body>
<form action="tambahBuku.php" method="post">
	<p class="content"><font face="arial"><font size="3" color="black">
<td>Id buku</td>
<td>:</td>
  <td><input type=text name=id size=15>
 <td>Judul Buku</td>
<td>:</td>
  <td><input type=text name=judul size=15>
 <td>Penerbit</td>
<td>:</td>
  <td><input type=text name=penerbit size=15>
  <td>Tahun</td>
<td>:</td>
  <td><input type=number name=tahun size=15>
  <td>Jumlah</td>
<td>:</td>
  <td><input type=number name=jumlah size=15>
 
  
 <tr>
   <td><input type="reset" name=hapus value=Hapus>
   <input type="submit" name=tambah value=Tambah_Data></td>
  </tr>
  <tr>
         <td width="50%"></td>
         <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="Id buku,Nama buku"></td>
         <td><input type="submit" id="submit" value="cari"></td>
  </tr>
	
		<div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	           
   	            <th align="center" width="30%">Id buku</th>
   	            <th width="20%">Judul Buku</th>
   	            <th width="15%">Penerbit</th>
				<th width="15%">Tahun</th>
				<th width="15%">Jumlah</th>
   	            
              </tr>
            </thead>
            
            
            </tbody>
          </table>
          </div>
	
  
  
  </body>
</html>