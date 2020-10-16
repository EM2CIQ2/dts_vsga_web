<?php
include('config.php');

if( !isset($_GET['id']) ){
  header('Location: index.php');
}

$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
  die("👿 Where are you found these data?");
}

include('template/header.php')
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 shadow-lg p-3 bg-success rounded" id="form-register">
      <h3>📄 Form Pendaftaran Siswa</h3>
      <form action="editPr.php" method="POST">
        <input type="text" name="id" id="id" class="form-control" value="<?= $siswa['id'] ?>" hidden>
        <div class="form-group">
          <input type="text" name="name" id="name" class="form-control" value="<?= $siswa['name'] ?>">
        </div>
        <div class="form-group">
          <textarea class="form-control" name="address" id="address" rows="2"><?= $siswa['address'] ?></textarea>
        </div>
        <div class="form-group mt-2">
          <label for="">Agama</label>
          <select class="form-control" name="religion" id="religion">
            <option value="Islam"<?= $siswa['religion'] == 'Islam' ? 'selected="selected"': '';?> >Islam</option>
            <option value="Kristen"<?= $siswa['religion'] == 'Kristen' ? 'selected="selected"': '';?> >Kristen</option>
            <option value="Katholik"<?= $siswa['religion'] == 'Katholik' ? 'selected="selected"': '';?> >Katholik</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="school" id="school" class="form-control" value="<?= $siswa['school'] ?>">
        </div>
        <div class="row">
          <div class="col-sm-6">
            <button type="reset" class="btn btn-danger btn-block">🔄 Reset</button>
          </div>
          <div class="col-sm-6">
            <button type="submit" name="edit" class="btn btn-warning btn-block">🤜 Edit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include('template/footer.php') ?>