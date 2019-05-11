<?php
include("connection.php");
?>
<h3 align="center">Data User</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>id_user</th>
        <th>username</th>
        <th>password</th>
        <th>level</th>           
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM user WHERE id_user='$_GET[id_user]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_user]";?></td>
        <td><?php echo"$r[username]";?></td>
        <td><?php echo"$r[password]";?></td>
        <td><?php echo"$r[level]";?></td>            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>