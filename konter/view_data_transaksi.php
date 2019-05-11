<?php
include("connection.php");
?>
<h3 align="center">Data Transaksi</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM data_transaksi");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[kode_brg]";?></td>
        <td><?php echo"$r[Harga]";?></td>
        <td><?php echo"$r[Jumlah]";?></td>
        <td><?php echo"$r[Total]";?></td>
        <td><a href="data_transaksi_detail.php?kode_brg=<?php echo "$r[kode_brg]";?>">Detail</a></td>
    </tr>
<?php 
$no++;
} ?>
</table>
</div>