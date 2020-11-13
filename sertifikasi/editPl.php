<?php
include('config.php');

if (!isset($_GET['id'])) {
    header('Location: index.php');
}

$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pelanggan WHERE NoPelanggan=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("👿 Where are you found these data?");
}

include('templates/header.php')
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow-lg p-3 bg-success rounded" id="form-register">
            <h3>📄 Form Edit Pelanggan</h3>
            <form action="edit.php" method="POST" onsubmit="return validate()">
                <input type="text" name="command" id="command" value="pl" hidden>
                <input type="text" name="id" id="id" class="form-control" value="<?= $siswa['NoPelanggan'] ?>" hidden>
                <div class="form-group">
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $siswa['NamaPelanggan'] ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $siswa['Alamat'] ?>">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="reset" class="btn btn-danger btn-block shadow-md">🔄 Reset</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" name="edit" class="btn btn-primary btn-block shadow-md">🤜 Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('templates/footer.php') ?>