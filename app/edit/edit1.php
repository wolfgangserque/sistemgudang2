<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_gudang_aktif WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>

<div class="container-fluid">
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Edit Data</h3>
    </div>
    <div class="card-body">
      <form method='post' action='update/update.php' enctype="multipart/form-data">

        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name='nama_barang' value="<?php echo $view['nama_barang'];?>">
              <input type="text" class="form-control" placeholder="id" name='id' value="<?php echo $view['id'];?>" hidden>
            </div>
          </div>

         
        

          <div class="col-sm-4">
            <div class="form-group">
              <label>Supplier</label>
              <input type="text" class="form-control" placeholder="Supplier" name='supplier' value="<?php echo $view['supplier'];?>">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Satuan</label>
              <input type="text" class="form-control" placeholder="Nama" name='uom' value="<?php echo $view['uom'];?>">
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Masuk</label>
              <input type="date" class="form-control" placeholder="Tanggal" name='masuk' value="<?php echo $view['masuk'];?>">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Total Stok Fisik Saat Ini</label>
              <input type="text" class="form-control" placeholder="Stok Fisik" name='stok_fisik' value="<?php echo $view['stok_fisik'];?>" disabled>
              <input type="hidden" name="stokfisik_awal" value="<?php echo $view['stok_fisik'];?>">
            </div>
          </div>


          <div class="col-sm-4">
            <div class="form-group">
              <label>Keluar</label>
              <input type="date" class="form-control" placeholder="Tanggal" name='keluar' value="<?php echo $view['keluar'];?>">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Barang yang mau dikeluarkan</label>
              <input type="text" class="form-control" placeholder="Masukan Jumlah" name='barang_keluar'>
            </div>
          </div>
        </div>

        <!-- Tambahkan input tersembunyi untuk stok_fisik -->
        <input type="hidden" name="stokfisik_awal" value="<?php echo $view['stok_fisik']; ?>">

        <div class="row">
          <button type="submit" class="btn btn-sm btn-info mt-3">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
</section>
