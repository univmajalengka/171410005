<?php 
 include 'connection.php';
  $Nom= $_POST['Nomor']; 
  $kdbrg = $_POST['kode_brg'];
  $Hrg = $_POST['Harga'];
  $Jml = $_POST['Jumlah'];
  $Total = $_POST['Total'];
  $mysqli  = "INSERT INTO data_transaksi (Nomor,kode_brg,kode_brg,Harga,Jumlah,Total)
  VALUES ('$Nom', '$kdbrg', '$Hrg', '$Jml', '$Total' )";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {
    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_data_transaksi.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>