<?php
include("connection.php");
?>
<h3 align="center">Data Barang</h3>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Jumlah Barang</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM data_barang");
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
        <td><a href="data_barang_detail.php?kode_brg=<?php echo "$r[kode_brg]";?>">Detail</a></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>