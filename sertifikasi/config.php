<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "penjualanbarang";

$db = mysqli_connect($server, $user, $password, $database);

if (!$db)
    die("Koneksi database error: " . mysqli_connect_error());
