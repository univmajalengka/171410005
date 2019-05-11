<?php
include("connection.php");
?>
<h3 align="center">Data Barang</h3>
<div class="table-responsive">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>kode barang</th>
        <th>Nama barang</th>
        <th>Harga barang</th>
        <th>Jumlah barang</th>           
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM data_barang WHERE kode_brg='$_GET[kode_brg]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[kode_brg]";?></td>
        <td><?php echo"$r[Nama_barang]";?></td>
        <td><?php echo"$r[Harga_barang]";?></td>
        <td><?php echo"$r[Jumlah_barang]";?></td>            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>