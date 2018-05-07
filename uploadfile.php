<?php
	$file = $_FILES["berkas"];
	
	$nama			= $file["name"];
	$pos_sementara	= $file ["tmp_name"];
	$jenis			= $file["type"];
	$ukuran			= $file["size"];
	
	$pos_akhir = "file/".$nama;
	
	if(copy($pos_sementara,$pos_akhir))
		echo "Berkas telah di upload ke ${pos_akhir}";
	else
		echo "Berkas gagal di upload";
?>