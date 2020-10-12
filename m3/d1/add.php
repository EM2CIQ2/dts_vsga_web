<?php
  require('templates/header.php');
  require('templates/navigation.php');
?>

<div class="container mt-3">
  <h3 class="text-center">Tambah Barang</h3>
  <div class="row justify-content-md-center">
    <div class="col col-md-4 pb-2 border border-primary rounded">
      <form action="addProcess.php" method="post">
        <div class="form-group">
          <label for="name">Nama Merk</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="color">Warna</label>
          <input type="text" name="color" id="color" class="form-control">
        </div>
        <div class="form-group">
          <label for="amount">Jumlah</label>
          <input type="number" name="amount" id="amount" class="form-control">
        </div>
        <div class="row">
          <div class="col-sm-6">
            <button type="reset" class="btn btn-danger btn-block">Reset</button>
          </div>
          <div class="col-sm-6">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?= require('templates/footer.php') ?>