<?php 
 include 'connection.php';
  $kdbrg = $_POST['kode_brg']; 
  $Nmbrg  = $_POST['Nama_barang'];
  $Hrgbrg  = $_POST['Harga_barang'];
  $jmlbrg  = $_POST['Jumlah_barang'];
  $mysqli  = "INSERT INTO data_barang (kode_brg,Nama_barang,Harga_barang,Jumlah_barang) VALUES ('$kdbrg', '$Nmbrg', '$Hrgbrg', '$jmlbrg')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_barang.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>
