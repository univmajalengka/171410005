<!DOCTYPE html>
<html>
<head>
	<title>Input data penjualan</title>
</head>
<body>
<form method="post" action="save_data_penjualan.php">
<input type="text" name="faktur" placeholder="faktur">
<input type="date" name="tanggal" placeholder="tanggal">
<input type="text" name="jml_harga" placeholder="jml_harga">
<input type="text" name="jml_item" placeholder="jml_item">
<input type="text" name="dibayar" placeholder="dibayar">
<input type="text" name="jml_kembali" placeholder="jml_kembali">
<input type="text" name="kode_ksr" placeholder="kode_ksr">
<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
// include 'view_barang_fak.php';
?>
</body>
</html>