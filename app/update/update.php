<?php
include('../../config/config.php');

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$supplier = $_POST['supplier'];
$uom = $_POST['uom'];
$masuk = $_POST['masuk'];
$keluar = $_POST['keluar'];
$barang_keluar = $_POST['barang_keluar'];
$stokfisik_awal = $_POST['stokfisik_awal'];

$stokfisik_awal = (int) $stokfisik_awal;
$barang_keluar = (int) $barang_keluar;

$sisa_stok = $stokfisik_awal - $barang_keluar;

$query = mysqli_query($koneksi, "UPDATE tb_gudang_aktif SET nama_barang='$nama_barang', supplier='$supplier', uom='$uom', masuk='$masuk', keluar='$keluar', stok_fisik='$sisa_stok' WHERE id='$id'");

header('location: ../index.php?page=data-stok-aktif');
?>
