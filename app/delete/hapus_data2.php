<?php

include('../../config/config.php');
$id=$_GET['id'];

$query=mysqli_query($koneksi, "DELETE FROM tb_stock_op WHERE id='$id'");
header('Location: ../index.php?page=data-stok-gudang')

?>