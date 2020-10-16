<?php
include('config.php');
require('templates/header.php');
require('templates/navigation.php');
?>


<div class="container mt-3">
  <div class="row justify-content-md-center">
    <div class="col col-md-auto">
    <?php
       if (isset($_GET['status'])) {
        if ($_GET['status'] == 'sukses') { ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>
            Menambah Data Baru <strong>Sukses!</strong>
          </div>
          <?php
        } else {?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>
            Menambah Data Baru <strong>Gagal!</strong>
          </div>
          <?php
        }
      }
      ?>
      <h3 class="text-center mb-3">List Barang</h3>
      <table class="table table-striped table-responsive border text-center">
        <thead>
          <tr>
            <th>No</th>
            <th>Merk</th>
            <th>Warna</th>
            <th>Jumlah</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM product";
          $query = mysqli_query($db, $sql);

          while ($product = mysqli_fetch_array($query)) { 
            $delete = "delete.php?no=".$product['no'];
            $edit = "edit.php?no=".$product['no'];
            
            ?>
            <tr>
              <td><?= $product['no'] ?></td>
              <td><?= $product['nama_merk'] ?></td>
              <td><?= $product['warna'] ?></td>
              <td><?= $product['jumlah'] ?></td>
              <td><a href="<?= $edit ?>" class="btn btn-warning">Edit</a> <a href="<?= $delete ?>" class="btn btn-danger ml-2">Delete</a></td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?= require('templates/footer.php') ?>