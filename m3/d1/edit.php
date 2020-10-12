<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['no']) ){
    header('Location: index.php');
}

//ambil id dari query string
$no = $_GET['no'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM product WHERE no=$no";
$query = mysqli_query($db, $sql);
$item = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
require('templates/header.php');
require('templates/navigation.php');
?>

<div class="container mt-3">
  <h3 class="text-center">Tambah Barang</h3>
  <div class="row justify-content-md-center">
    <div class="col col-md-4 pb-2 border border-primary rounded">
      <form action="editProcess.php" method="post">
        <input name="no" id="no" value="<?= $item['no'] ?>" hidden>
        <div class="form-group">
          <label for="name">Nama Merk</label>
          <input type="text" name="name" id="name" class="form-control" value="<?= $item['nama_merk']?>" >
        </div>
        <div class="form-group">
          <label for="color">Warna</label>
          <input type="text" name="color" id="color" class="form-control" value="<?= $item['warna'] ?>">
        </div>
        <div class="form-group">
          <label for="amount">Jumlah</label>
          <input type="number" name="amount" id="amount" class="form-control" value="<?= $item['jumlah'] ?>">
        </div>
        <div class="row">
          <div class="col-sm-6">
            <button type="reset" class="btn btn-danger btn-block">Reset</button>
          </div>
          <div class="col-sm-6">
            <button type="submit" name="edit" class="btn btn-primary btn-block">Edit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?= require('templates/footer.php') ?>