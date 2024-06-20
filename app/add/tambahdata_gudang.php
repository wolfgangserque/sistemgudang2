<?php
include('../../config/config.php');
$nama_barang= $_GET['nama_barang'];
$nama_merk= $_GET['nama_merk'];
$stokfisik= $_GET['stok_fisik'];
$masuk= $_GET['masuk'];
$keluar= $_GET['keluar'];
$query=mysqli_query($koneksi, "INSERT INTO tb_stock_op(id,nama_barang,nama_merk,stok_fisik,masuk,keluar) VALUES ('','$nama_barang','$nama_merk','$stokfisik','$masuk','$keluar')");
header('location: ../index.php?page=data-stok-gudang');
?>