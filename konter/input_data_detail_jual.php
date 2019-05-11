<!DOCTYPE html>
<html>
<head>
	<title>Input data detail jual</title>
</head>
<body>
<form method="post" action="save_data_detail_jual.php">
<input type="text" name="kode_detail_jual" placeholder="kode_detail_jual">
<input type="text" name="kode_brg" placeholder="kode_brg">
<input type="text" name="faktur" placeholder="faktur">
<input type="text" name="jml_jual" placeholder="jml_jual">
<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<hr>
<?php 
include 'view_data_detail_jual.php';
?>
</body>
</html>