<?php
include("connection.php");
?>
<h3 align="center">Data Kasir</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>kode Kasir</th>
        <th>Nama Kasir</th>
        <th>Password Kasir</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM data_kasir WHERE Kode_ksr='$_GET[Kode_ksr]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[Kode_ksr]";?></td>
        <td><?php echo"$r[Nama_ksr]";?></td>
        <td><?php echo"$r[Password_ksr]";?></td>        
    </tr>
<?php 
$no++;
} ?>
</table>
</div>