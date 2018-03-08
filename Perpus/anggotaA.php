<html>
<head>
	<title>Anggota form Admin</title>
</head>
<body>
<form action="tambahAnggota.php" method="post">
	<p class="content"><font face="arial"><font size="3" color="black">
<td>Id Anggota</td>
<td>:</td>
  <td><input type=text name=id size=15>
  
 <td>Nama Anggota</td>
<td>:</td>
  <td><input type=text name=nama size=15>

  
 <tr>
   <td><input type="reset" name=hapus value=Hapus>
   <input type="submit" name=tambah value=Tambah_Data></td>
  </tr>
  <tr>
         <td width="50%"></td>
         <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="id,Nama"></td>
         <td><input type="submit" id="submit" value="cari"></td>
  </tr>
  
     <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="30%">Id</th>
   	            <th width="20%">Nama anggota</th>
   	            <th width="15%">Status</th>
   	          
              </tr>
            </thead>
            
            
            </tbody>
          </table>
          </div>
 </body>
</html>