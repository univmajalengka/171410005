<!DOCTYPE html>
<html>
<head>
	<title>Input data transaksi</title>
</head>
<body>
<form method="post" action="save_data_transaksi.php">
<input type="text" name="Nomor" placeholder="Nomor">
<input type="text" name="kode_brg" placeholder="kode_brg">
<input type="text" name="Harga" placeholder="Harga">
<input type="text" name="Jumlah" placeholder="Jumlah">
<input type="text" name="Total" placeholder="Total">
<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
include 'view_data_transaksi.php';
?>
</body>
</html>