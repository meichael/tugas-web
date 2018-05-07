<?php
require 'koneksi.php';
class Anggota {
	
		
	function hapus($kodea) {
		$sql = "DELETE FROM anggota WHERE KodeA = '".$kodea."'";
		$success = mysql_query($sql);
		if($success){
			echo'
		<script>
			alert("Data berhasil dihapus");
			location.href="menuA.php?menu=anggota";
		</script>';
		}else{
			echo'
		<script>
			alert("Data yang anda masukkan salah !");
			location.href="menuA.php?menu=anggota";
		</script>';
		}
		
	}
	
	function tambah($kodea, $nama, $keterangan){
		$sql =  "INSERT INTO anggota(KodeA,Nama,Keterangan)VALUES('".$kodea."','".$nama."','".$keterangan."')";
		$success = mysql_query($sql);
		if($success){
			echo'
		<script>
			alert("Data berhasil ditambah");
			location.href="menuA.php?menu=anggota";
		</script>';
		}else{
			echo'
		<script>
			alert("Data yang anda masukkan salah !");
			location.href="menuA.php";
		</script>';
		}
		
	}
	
	function edit($kodeaLama,$kodea,$nama,$keterangan){
		$sql = "UPDATE anggota SET KodeA='$kodea', Nama = '$nama', Keterangan = '$keterangan' Where KodeA= '$kodeaLama'";
		if($success){
			echo'
		<script>
			alert("Data berhasil diedit");
			location.href="menuA.php?menu=anggota";
		</script>';
		}else{
			echo'
		<script>
			alert("Data tidak berhasil diedit !");
			location.href="menuA.php?menu=anggota";
		</script>';
		}
	}	
}


class Buku {
	function tambah($idbuku,$judul_buku,$penerbit,$tahun,$jumlah){
		$sql = "INSERT INTO buku(Idbuku,Judul_buku,Penerbit,Tahun,Jumlah)VALUES('".$idbuku."','".$judul_buku."','".$penerbit."','".$tahun."','".$jumlah."')";
		$success = mysql_query($sql);
		if($success){
			echo'
				<script>
					alert("Data berhasil ditambah");
					location.href="menuA.php?menu=buku";
				</script>
			';
		}else{
			echo'
		<script>
			alert("Data yang anda masukkan salah !");
			location.href="menuA.php?menu=buku";
		</script>';
		}
	}
	function hapus($id){
		$sql = "DELETE FROM buku WHERE Idbuku = '".$id."'";
		$success = mysql_query($sql);
		if($success){
			echo'
		<script>
			alert("Data berhasil dihapus");
			location.href="menuA.php?menu=buku";
		</script>';
		}else{
			echo'
		<script>
			alert("Data yang anda masukkan salah !");
			location.href="menuA.php?menu=buku";
		</script>';
		}
	}
	function edit($idOld,$id,$judul,$penerbit,$tahun,$jumlah){
		$sql = "UPDATE buku SET Idbuku = '$id', Judul_buku = '$judul', Penerbit = '$penerbit',Tahun = '$tahun', Jumlah = '$jumlah' Where IdBuku = '$idOld'";
		$success = mysql_query($sql);
		if($success){
			echo'
		<script>
			alert("Data berhasil diedit");
			location.href="menuA.php?menu=buku";
		</script>';
		}else{
			echo'
		<script>
			alert("Data tidak berhasil diedit !");
			location.href="menuA.php?menu=buku";
		</script>';
		}
	}
}

class Pinjam {
	function tambah($id,$nim,$idbuku,$jumlahbuku,$penerbit,$tglpinjam,$tglkembali){
		$sql = "INSERT INTO peminjaman (Idpinjam,NIM,Idbuku,Jumlahbuku,Penerbit,Tglpinjam,Tglkembali)VALUES('".$id."','".$nim."','".$idbuku."','".$jumlahbuku."','".$penerbit."','".$tglpinjam."','".$tglkembali."')";
		$success = mysql_query($sql);
		if($success){
			echo'
				<script>
					alert("Data berhasil ditambah");
					location.href="menuA.php?menu=pinjam";
				</script>
			';
		}else{
			echo'
		<script>
			alert("Data yang anda masukkan salah !");
			location.href="menuA.php?menu=pinjam";
		</script>';
		}
	}
	function hapus($id){
		$sql = "DELETE FROM peminjaman WHERE Idpinjam = '".$id."'";
		$success = mysql_query($sql);
		if($success){
			echo'
		<script>
			alert("Data berhasil dihapus");
			location.href="menuA.php?menu=pinjam";
		</script>';
		}else{
			echo'
		<script>
			alert("Data yang anda masukkan salah !");
			location.href="menuA.php?menu=pinjam";
		</script>';
		}
	}
	function edit($idOld,$id,$nim,$idbuku,$jumlahbuku,$tglpinjam,$tglkembali,$penerbit){
		$sql = "UPDATE peminjaman SET Idpinjam = '$id',NIM = '$nim', Idbuku = '$idbuku', Jumlahbuku = '$jumlahbuku', Penerbit = '$penerbit',Tglpinjam = '$tglpinjam', Tglkembali = '$tglkembali' Where Idpinjam = '$idOld'";
		$success = mysql_query($sql);
		if($success){
			echo'
		<script>
			alert("Data berhasil diedit");
			location.href="menuA.php?menu=pinjam";
		</script>';
		}else{
			echo'
		<script>
			alert("Data tidak berhasil diedit !");
			location.href="menuA.php?menu=pinjam";
		</script>';
		}
	}
}

class Kembali {
	function tambah($id,$tglkembali){
		$sql = "INSERT INTO pengembalian (Idpinjam,Tglkembali)VALUES('".$id."','".$tglkembali."')";
		$success = mysql_query($sql);
		if($success){
			echo'
				<script>
					alert("Data berhasil ditambah");
					location.href="menuA.php?menu=kembali";
				</script>
			';
		}else{
			echo'
		<script>
			alert("Data yang anda masukkan salah !");
			location.href="menuA.php?menu=kembali";
		</script>';
		}
	}
	function hapus($id){
		$sql = "DELETE FROM pengembalian WHERE Idkembali = '".$id."'";
		$success = mysql_query($sql);
		if($success){
			echo'
		<script>
			alert("Data berhasil dihapus");
			location.href="menuA.php?menu=kembali";
		</script>';
		}else{
			echo'
		<script>
			alert("Data yang anda masukkan salah !");
			location.href="menuA.php?menu=kembali";
		</script>';
		}
	}
	function edit($idOld,$id,$tglkembali){
		$sql = "UPDATE pengembalian SET Idpinjam = '$id',tglkembali = '$tglkembali' Where Idkembali = '$idOld'";
		$success = mysql_query($sql);
		if($success){
			echo'
		<script>
			alert("Data berhasil diedit");
			location.href="menuA.php?menu=kembali";
		</script>';
		}else{
			echo'
		<script>
			alert("Data tidak berhasil diedit !");
			location.href="menuA.php?menu=kembali";
		</script>';
		}
	}
}

?>