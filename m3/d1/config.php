<?php

$server = "localhost"; // Isi Host
$user = "root"; // Isi User
$password = ""; // Isi Password
$database = "toko_cat"; // Isi Nama Database

$db = mysqli_connect($server, $user, $password, $database);

if (!$db)
    die("Gagal terhubung pada Database: " . mysqli_connect_error());
?>