<?php

include('../../config/config.php');
$id=$_GET['id'];

$query=mysqli_query($koneksi, "DELETE FROM tb_gudang_aktif WHERE id='$id'");
header('Location: ../index.php?page=data-stok-a')

?>