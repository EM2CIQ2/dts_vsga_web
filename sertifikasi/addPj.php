<?php
include('templates/header.php');
include('config.php');
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 shadow-lg p-3 bg-success rounded" id="form-register">
            <?php
            $sql = "SELECT * FROM pelanggan";
            $query = mysqli_query($db, $sql);
            ?>
            <h3>📄 Form Input Penjualan</h3>
            <form action="add.php" method="POST" onsubmit="return validate()">
                <input type="text" name="command" id="command" value="pj" hidden>
                <div class="form-group">
                    <input type="text" name="faktur" id="faktur" class="form-control" placeholder="Masukkan Faktur">
                </div>
                <div class="form-group">
                    <label for="pelanggan">Pelanggan</label>
                    <select class="form-control" name="pelanggan" id="pelanggan">
                        <?php while ($pelanggan = mysqli_fetch_array($query)) {?>
                            <option value="<?= $pelanggan['NoPelanggan'] ?>"><?= $pelanggan['NamaPelanggan'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" name="date" id="date" class="form-control" placeholder="Masukkan Tanggal">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="reset" class="btn btn-danger btn-block shadow-md">🔄 Reset</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" name="add" class="btn btn-primary btn-block shadow-md">🤜 Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('templates/footer.php') ?>