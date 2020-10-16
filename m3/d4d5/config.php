<?php

$server = "localhost"; // Isi Host
$user = "root"; // Isi User
$password = ""; // Isi Password
$database = "regis_siswa"; // Isi Nama Database

$db = mysqli_connect($server, $user, $password, $database);

if (!$db)
    die("Can't connected to DB: " . mysqli_connect_error());
?>