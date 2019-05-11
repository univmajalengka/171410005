<!DOCTYPE html>
<html>
<head>
	<title>Input Data Kasir</title>
</head>
<body>
<form method="post" action="save_data_kasir.php">
<input type="text" name="Kode_ksr" placeholder="Kode_ksr">
<input type="text" name="Nama_ksr" placeholder="Nama_ksr">
<input type="password" name="Password_ksr" placeholder="Password_ksr">
<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
include 'view_data_kasir.php';
?>
</body>
</html>