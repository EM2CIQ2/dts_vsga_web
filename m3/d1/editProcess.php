<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $no = $_POST['no'];
    $name = $_POST['name'];
    $color = $_POST['color'];
    $amount = $_POST['amount'];

    // buat query update
    $sql = "UPDATE product SET nama_merk='$name', warna='$color', jumlah='$amount' WHERE no=$no";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>