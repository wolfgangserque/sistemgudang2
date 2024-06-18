<?php
include('../../config/config.php');
$nama_barang= $_GET['nama_barang'];
$supplier= $_GET['supplier'];
$uom= $_GET['uom'];
$masuk= $_GET['masuk'];
$keluar= $_GET['keluar'];
$stokfisik= $_GET['stok_fisik'];
$query=mysqli_query($koneksi, "INSERT INTO tb_gudang_aktif(id,nama_barang,supplier,uom,masuk,keluar,stok_fisik) VALUES ('','$nama_barang','$supplier','$uom','$masuk','$keluar','$stokfisik')");
header('location: ../index.php?page=data-stok-aktif');
?>