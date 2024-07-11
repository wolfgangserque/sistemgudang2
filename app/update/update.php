<?php
include('../../config/config.php');
$id= $_POST['id'];
$nama_barang= $_POST['nama_barang'];
$supplier= $_POST['supplier'];
$uom= $_POST['uom'];
$masuk= $_POST['masuk'];
$keluar= $_POST['keluar'];
$stokfisik= $_POST['stok_fisik'];

$query=mysqli_query($koneksi,"UPDATE tb_gudang_aktif SET nama_barang='$nama_barang', supplier='$supplier', uom='$uom', masuk='$masuk', keluar='$keluar', stok_fisik='$stokfisik' WHERE id='$id'");

header('location: ../index.php?page=data-stok-aktif');
?>