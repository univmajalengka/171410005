<!DOCTYPE html>
<html>
<head>
	<title>Input Barang</title>
</head>
<body>
<form method="post" action="save_barang.php">
<input type="text" name="kode_brg" placeholder="kode_brg">
<input type="text" name="Nama_barang" placeholder="Nama_barang">
<input type="text" name="Harga_barang" placeholder="Harga_barang">
<input type="text" name="Jumlah_barang" placeholder="Jumlah_barang">
<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
include 'view_data_barang.php';
?>
</body>
</html>