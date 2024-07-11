<?php
include('../../config/config.php');
$id= $_POST['id'];
$nama_barang= $_POST['nama_barang'];
$nama_merk= $_POST['nama_merk'];
$stokfisik= $_POST['stok_fisik'];
$keluar= $_POST['keluar'];
$masuk= $_POST['masuk'];

$query=mysqli_query($koneksi,"UPDATE tb_stock_op SET nama_barang='$nama_barang', nama_merk='$nama_merk', stok_fisik='$stokfisik', masuk='$masuk', keluar='$keluar' WHERE id='$id'");

header('location: ../index.php?page=data-stok-gudang');
?>