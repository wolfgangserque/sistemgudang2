<div class="container-fluid">

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. -->
    <!-- For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Stok Operasional</h6>
    </div>
    <div class="card-body">
    <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#modal-lg">Tambah Data</button>


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
                        <th>Aksi</th>
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

                    <td>
                    <a onclick="hapus_data(<?php echo $barang['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="index.php?page=edit-data-2&& id=<?php echo $barang['id'];?>" class="btn btn-sm btn-success">Sunting</a>
                    </td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Form Input Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>

        <form method="get" action="add/tambahdata_gudang.php">
          <div class="modal-body">  
          <div class="row">
                <div class="col">
                <label>Nama Barang</label>
                <input type="text" class="form-control" placeholder="..." name="nama_barang" required>
                </div>
            
                <div class="col">
                <label>Nama Merk</label>
                <input type="text" class="form-control" placeholder="..." name="nama_merk" required>
                </div>

                <div class="col">
                <label>Stok Fisik</label>
                <input type="text" class="form-control" placeholder=".." name="stok_fisik" required>
                </div>

                <div class="col">
                <label>Date In</label>
                <input type="date" class="form-control" name="masuk" required>
                </div>

                <!-- <div class="col">
                <label>Date Out</label>
                <input type="date" class="form-control" name="keluar" required>
                </div> -->

             

          </div>
          </div>
       

      <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary">Simpan</button>
      
      </div>
      </div>
      </form>

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
