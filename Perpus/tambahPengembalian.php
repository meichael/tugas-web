<?php

$Local=$_POST['idP'];
$IdKem=$_POST['idK'];
$TanggalK=$_POST['tglkembali'];



echo " $Local,$IdKem,$TanggalK<br>";


?>
<html>
	<head>
		<title>terima data</title>
	</head>
	<body>
	<h3><?php	echo $Local; ?>,<?php echo $IdKem; ?>,<?php echo $TanggalK; ?>
	<a href="menuA.php">Kembali ke Home</a>
	</body>
</html>
