<div class="container-fluid">

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. -->
    <!-- For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Stok Aktif</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Supplier</th>
                        <th>UOM</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Stok Fisik</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php

                    $no=0;
                    $query= mysqli_query($koneksi, "SELECT * FROM tb_gudang_aktif");
                    while($barang = mysqli_fetch_array($query)){
                        $no++
                    ?>

                <tr>

                    <td><?php echo $no;?></td>
                    <td><?php echo $barang['nama_barang'];?></td>
                    <td><?php echo $barang['supplier'];?></td>
                    <td><?php echo $barang['uom'];?></td>
                    <td><?php echo $barang['masuk'];?></td>
                    <td><?php echo $barang['keluar'];?></td>
                    <td><?php echo $barang['stok_fisik'];?></td>

                   
                </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



</div>

