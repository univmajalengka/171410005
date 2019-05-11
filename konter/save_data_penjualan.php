<?php 
 include 'connection.php';
  $fak= $_POST['faktur']; 
  $tgl = $_POST['tanggal'];
  $jmlhrg = $_POST['jml_harga'];
  $jmlitem = $_POST['jml_item'];
  $dibayar = $_POST['dibayar'];
  $jmlkmbli = $_POST['jml_kembali'];
  $kdksr = $_POST['kode_ksr'];
  $mysqli  = "INSERT INTO data_penjualan (faktur,tanggal,jml_harga,jml_item,dibayar,jml_kembali,kode_ksr) VALUES ('$fak', '$tgl', '$jmlhrg', '$jmlitem', '$dibayar', '$jmlkmbli', '$kdksr')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_data_penjualan.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>