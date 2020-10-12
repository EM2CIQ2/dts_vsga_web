<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['add'])){

    // ambil data dari formulir
    $name = $_POST['name'];
    $color = $_POST['color'];
    $amount = $_POST['amount'];

    // buat query
    $sql = "INSERT INTO product (nama_merk, warna, jumlah) VALUE ('$name', '$color', '$amount')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>