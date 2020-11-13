<?php
include('config.php');

if (!isset($_GET['id'])) {
    header('Location: index.php');
}

$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM penjualan WHERE faktur=$id";
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
            <?php
            $sql = "SELECT * FROM pelanggan";
            $query = mysqli_query($db, $sql);
            ?>
            <h3>📄 Form Edit Penjualan</h3>
            <form action="edit.php" method="POST" onsubmit="return validate()">
                <input type="text" name="command" id="command" value="pj" hidden>
                <input type="text" name="id" id="id" class="form-control" value="<?= $siswa['faktur'] ?>" hidden>
                <div class="form-group">
                    <label for="pelanggan">Pelanggan</label>
                    <select class="form-control" name="pelanggan" id="pelanggan">
                        <?php while ($pelanggan = mysqli_fetch_array($query)) { ?>
                            <option value="<?= $pelanggan['NoPelanggan'] ?>"><?= $pelanggan['NamaPelanggan'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" name="address" id="address" class="form-control" value="<?= $siswa['TanggalPenjualan'] ?>">
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