<?php
include('config.php');
include('template/header.php');
?>

<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-auto shadow-lg pt-3 rounded">
            <h3>✨Siswa yang Terdaftar</h3>
            <?php
            if (isset($_GET['status'])) {
                if (isset($_GET['act'])) {
                    if ($_GET['status'] == 'Successful' || $_GET['act'] == 'Edited' || $_GET['act'] == 'Created'|| $_GET['act'] == 'Deleted') { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            Good, Siswa <strong><?= $_GET['status'] ?></strong> <?= $_GET['act'] ?> 😊
                        </div>
                    <?php
                    } else { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            Bad, Siswa <strong>cant</strong> <?= $_GET['act'] ?> 😭
                        </div>
            <?php
                    }
                }
            }
            ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <?php
                    $sql = "SELECT * FROM siswa";
                    $query = mysqli_query($db, $sql);
                    $total = mysqli_num_rows($query);
                    $i = 0;
                    ?>
                    <caption>👩‍🎓👨‍🎓Total Siswa: <strong><?= $total ?> Siswa</strong></caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Sekolah Asal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($siswa = mysqli_fetch_array($query)) {
                            $i++; ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $siswa['name'] ?></td>
                                <td><?= $siswa['address'] ?></td>
                                <td><?= $siswa['gender'] ?></td>
                                <td><?= $siswa['religion'] ?></td>
                                <td><?= $siswa['school'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $siswa['id']?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php?id=<?= $siswa['id']?>" class="btn btn-danger btn-sm ml-3">Delete</a>
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

<?php include('template/footer.php') ?>