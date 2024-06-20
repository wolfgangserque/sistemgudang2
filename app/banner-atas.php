<?php
include("../config/config.php");
$query1= mysqli_query($koneksi, "SELECT count(id) AS jumlahbrang FROM tb_gudang_aktif");
$view1 = mysqli_fetch_array($query1);

$query2= mysqli_query($koneksi, "SELECT count(id) AS jumlahbrang2 FROM tb_stock_op");
$view2 = mysqli_fetch_array($query2);

?>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl- col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Barang di Gudang
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><h1><?php echo $view1['jumlahbrang']?></h1></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Pending Requests Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                           Jumlah Barang di Stock Operasional</div>
                           <div class="h5 mb-0 font-weight-bold text-gray-800"><h1><?php echo $view2['jumlahbrang2']?></h1></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    