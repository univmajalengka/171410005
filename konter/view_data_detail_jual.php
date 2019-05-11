<?php
include("connection.php");
?>
<h3 align="center">Data Detail jual</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No</th>
        <th>Kode Detail Jual</th>
        <th>Kode Barang</th>
        <th>Faktur</th>
        <th>Jumlah Jual</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM detail_jual");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[kode_detail_jual]";?></td>
        <td><?php echo"$r[kode_brg]";?></td>
        <td><?php echo"$r[faktur]";?></td>
        <td><?php echo"$r[jml_jual]";?></td>
        <td><a href="data_detail_jual.php?kode_detail_jual=<?php echo $r['kode_detail_jual'];?>">Detail</a></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>