<?php
include("config.php");

if (isset($_POST['edit'])) {
    $id = $_POST['id'];

    if ($_POST['command'] == "brg") {
        $address = $_POST['nama'];
        $religion = $_POST['price'];

        $sql = "UPDATE barang SET NamaBarang='$address', HargaBarang='$religion' WHERE KodeBarang=$id";
    } else if ($_POST['command'] == "pl") {
        $address = $_POST['nama'];
        $religion = $_POST['alamat'];

        $sql = "UPDATE pelanggan SET NamaPelanggan='$address', Alamat='$religion' WHERE NoPelanggan=$id";
    } else if ($_POST['command'] == "pj") {
        $address = $_POST['pelanggan'];
        $religion = $_POST['address'];

        $sql = "UPDATE penjualan SET NoPelanggan='$address', TanggalPenjualan='$religion' WHERE faktur=$id";
    }

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=succesful&act=Edited');
    } else {
        header('Location: index.php?status=err&act=Edited');
        die("😢 Something wrong with data");
    }
} else {
    die("😢 No Access, Sorry");
}
