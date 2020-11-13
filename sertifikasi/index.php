<?php
include('config.php');
include('templates/header.php');
?>

<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-auto shadow-lg pt-3 rounded">
            <?php
            if (isset($_GET['status'])) {
                if (isset($_GET['act'])) {
                    if ($_GET['status'] == 'Successful' || $_GET['act'] == 'Edited' || $_GET['act'] == 'Created' || $_GET['act'] == 'Deleted') { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            Good, Action <strong><?= $_GET['status'] ?></strong> <?= $_GET['act'] ?> 😊
                        </div>
                    <?php
                    } else { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            Bad, Action <strong>cant</strong> <?= $_GET['act'] ?> 😭
                        </div>
            <?php
                    }
                }
            }
            ?>
            <h3>List Barang</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <?php
                    $sql = "SELECT * FROM barang";
                    $query = mysqli_query($db, $sql);
                    $total = mysqli_num_rows($query);
                    ?>
                    <caption>Total Barang: <strong><?= $total ?></strong></caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($brg = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?= $brg['KodeBarang'] ?></td>
                                <td><?= $brg['NamaBarang'] ?></td>
                                <td><?= $brg['HargaBarang'] ?></td>
                                <td>
                                    <a href="editBr.php?id=<?= $brg['KodeBarang'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php?id=<?= $brg['KodeBarang'] ?>&typ=brg" class="btn btn-danger btn-sm ml-3">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <h3>List Pelanggan</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <?php
                    $sql = "SELECT * FROM pelanggan";
                    $query = mysqli_query($db, $sql);
                    $total = mysqli_num_rows($query);
                    ?>
                    <caption>Jumlah Pelanggan: <strong><?= $total ?></strong></caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($pl = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?= $pl['NoPelanggan'] ?></td>
                                <td><?= $pl['NamaPelanggan'] ?></td>
                                <td><?= $pl['Alamat'] ?></td>
                                <td>
                                    <a href="editPl.php?id=<?= $pl['NoPelanggan'] ?>&typ=pl" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php?id=<?= $pl['NoPelanggan'] ?>&typ=pl" class="btn btn-danger btn-sm ml-3">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <h3>List Penjualan</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <?php
                    $sql = "SELECT * FROM penjualan";
                    $query = mysqli_query($db, $sql);
                    $total = mysqli_num_rows($query);
                    ?>
                    <caption>Total Barang: <strong><?= $total ?></strong></caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Faktur</th>
                            <th scope="col">Pelanggan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($pj = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?= $pj['faktur'] ?></td>
                                <td><?= $pj['NoPelanggan'] ?></td>
                                <td><?= $pj['TanggalPenjualan'] ?></td>
                                <td>
                                    <a href="editPj.php?id=<?= $pj['faktur'] ?>&typ=pj" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php?id=<?= $pj['faktur'] ?>&typ=pj" class="btn btn-danger btn-sm ml-3">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('templates/footer.php') ?>