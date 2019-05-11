<?php 
 include 'connection.php';
  $kdj = $_POST['kode_detail_jual'];
  $kdbrg = $_POST['kode_brg'];
  $fak = $_POST['faktur'];
  $jmljual = $_POST['jml_jual'];
  $mysqli  = "INSERT INTO detail_jual (kode_detail_jual,kode_brg,faktur,jml_jual) VALUES ('$kdj', '$kdbrg', '$fak', '$jmljual')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_data_detail_jual.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>