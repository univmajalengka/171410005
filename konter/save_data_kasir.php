<?php 
 include 'connection.php';
  $kdksr= $_POST['Kode_ksr']; 
  $Nmksr = $_POST['Nama_ksr'];
  $Pass = $_POST['Password_ksr'];
  $mysqli  = "INSERT INTO data_kasir (Kode_ksr,Nama_ksr,Password_ksr) VALUES ('$kdksr', '$Nmksr', '$Pass')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_data_ksr.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>