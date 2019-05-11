<?php 
 include 'connection.php';
  $id  = $_POST['id_user']; 
  $user  = $_POST['username'];
  $pass  = $_POST['password'];
  $lev  = $_POST['level'];
  $mysqli  = "INSERT INTO user (id_user,username,password,level) VALUES ('$id', '$user', '$pass', '$lev')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_user.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>