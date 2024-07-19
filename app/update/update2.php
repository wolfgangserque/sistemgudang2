<?php
include('../../config/config.php');

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$nama_merk = $_POST['nama_merk'];
$stokfisik_awal = $_POST['stokfisik_awal'];
$keluar = $_POST['keluar'];
$barang_keluar = $_POST['barang_keluar'];
$masuk= $_POST['masuk'];
$stokfisik_awal = (int) $stokfisik_awal;
$barang_keluar = (int) $barang_keluar;

$sisa_stok = $stokfisik_awal - $barang_keluar;

$query = mysqli_query($koneksi, "UPDATE tb_stock_op SET nama_barang='$nama_barang', nama_merk='$nama_merk', stok_fisik='$sisa_stok', keluar='$keluar' WHERE id='$id'");

header('location: ../index.php?page=data-stok-gudang');
?>
