<?php
include("connection.php");
?>
<h3 align="center">User</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No</th>
        <th>ID User</th>
        <th>Username</th>
        <th>Password Kawin</th>
        <th>Level</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM user");
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
        <td><a href="user_detail.php?id_userl=<?php echo $r['id_user'];?>">Detail</a></td>
    </tr>
<?php 
$no++;
} ?>
</table>
</div>