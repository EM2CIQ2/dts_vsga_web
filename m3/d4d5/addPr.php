<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $school = $_POST['school'];

    // buat query
    $sql = "INSERT INTO siswa (name, address, gender, religion, school) VALUE (
        '$name', '$address', '$gender', '$religion', '$school'
    )";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        header('Location: index.php?status=successful&act=Created');
    } else {
        header('Location: index.php?status=err&act=Created');
    }
} else {
    die("😢 No Access, Sorry");
}

?>