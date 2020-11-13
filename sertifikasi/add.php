<?php

include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['add'])) {
    if ($_POST['command'] == "brg") {
        $kode = $_POST['kode'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        // buat query
        $sql = "INSERT INTO barang (KodeBarang, NamaBarang, HargaBarang) VALUE (
        '$kode', '$name', '$price'
        )";
    } else if ($_POST['command'] == "pl") {
        $kode = $_POST['nomer'];
        $name = $_POST['name'];
        $price = $_POST['alamat'];

        // buat query
        $sql = "INSERT INTO pelanggan (NoPelanggan, NamaPelanggan, Alamat) VALUE (
        '$kode', '$name', '$price'
        )";
    } else if ($_POST['command'] == "pj") {
        $kode = $_POST['faktur'];
        $name = $_POST['pelanggan'];
        $price = $_POST['date'];

        // buat query
        $sql = "INSERT INTO penjualan (faktur, NoPelanggan, TanggalPenjualan) VALUE (
        '$kode', '$name', '$price'
        )";
    }
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        header('Location: index.php?status=successful&act=Created');
    } else {
        header('Location: index.php?status=err&act=Created');
    }
} else {
    die("😢 No Access, Sorry");
}
