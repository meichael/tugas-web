<html>
<head>
	<title><h2>Peminjaman</h2></title>
</head>
<body>
<form action="tambahpinjam.php" method="post">
	<p class="content"><font face="arial"><font size="3" color="black">

<td>Id pinjam</td>
<td>:</td>
<td><input type=text name=idP size=15>
 
 <td>Id anggota</td>
<td>:</td>
  <td><input type=text name=idA size=15>
 
  <td>Judul Buku</td>
<td>:</td>
  <td><input type=text name=judul size=15>
  
 <td>Tanggal pinjam</td>
<td>:</td>
  <td><input type=date name=tglpinjam size=15>
  
  <td>Tanggal kembali</td>
<td>:</td>
  <td><input type=date name=tglkembali size=15>
 <br>
 <td>Penerbit</td>
<td>:</td>
  <td><input type=text name=penerbit size=15>
 </br>
 <tr>
   <td><input type="reset" name=hapus value=Hapus>
   <input type="submit" name=tambah value=Tambah_Data></td>
  </tr>

		
		<div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
				<th align="center" width="4%">Id pinjam</th>
   	            <th  width="4%">Id anggota</th>
   	            <th width="20%">Judul Buku</th>
   	            <th width="15%">Tanggal pinjam</th>
				<th width="15%">Tanggal kembali</th>
				<th width="20%">Penerbit</th>
   	            
              </tr>
            </thead>
            
            
            </tbody>
          </table>
          </div>
	
  
  
  </body>
</html>