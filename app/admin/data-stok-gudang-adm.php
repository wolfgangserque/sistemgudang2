<div class="container-fluid">

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. -->
    <!-- For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Stok Gudang</h6>
    </div>
    <div class="card-body">


        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Nama Merk</th>
                        <th>Stok Fisik</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php

                    $no=0;
                    $query= mysqli_query($koneksi, "SELECT * FROM tb_stock_op");
                    while($barang = mysqli_fetch_array($query)){
                        $no++
                    ?>

                <tr>

                    <td><?php echo $no;?></td>
                    <td><?php echo $barang['nama_barang'];?></td>
                    <td><?php echo $barang['nama_merk'];?></td>
                    <td><?php echo $barang['stok_fisik'];?></td>
                    <td><?php echo $barang['masuk'];?></td>
                    <td><?php echo $barang['keluar'];?></td>

                   
                </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



</div>



<script>
  function hapus_data(data_id){
    // alert('ok');
    // window.location=("delete/hapus_data.php?id="+data_id);
//     Swal.fire({
//     title: "Good job!",
//     text: "You clicked the button!",
//     icon: "success"
// });

    Swal.fire({
      title: "Apakah anda ingin menghapus?",
      // showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: "Yap betul",
      // denyButtonText: `Don't save`
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location=("delete/hapus_data2.php?id="+data_id);
      } 
    })

  }
  </script>
