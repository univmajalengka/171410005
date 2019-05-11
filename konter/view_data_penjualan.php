<?php
include("connection.php");
?>
<h3 align="center">Data Penjulan</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No</th>
        <th>Faktur</th>
        <th>Tanggal</th>
        <th>Jumlah Harga</th>
        <th>Jumlah Item</th>
        <th>Dibayar</th>
        <th>Jumlah Kembali</th>
        <th>Kode Kasir</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM data_penjualan");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[faktur]";?></td>
        <td><?php echo"$r[tanggal]";?></td>
        <td><?php echo"$r[jml_harga]";?></td>
        <td><?php echo"$r[jml_item]";?></td>
        <td><?php echo"$r[dibayar]";?></td>
        <td><?php echo"$r[jml_kembali]";?></td>
        <td><?php echo"$r[kode_ksr]";?></td>
        <td><a href="data_penjualan_detail.php?faktur=<?php echo "$r[faktur]";?>">Detail</a></td>
    </tr>
<?php 
$no++;
} ?>
</table>
</div>