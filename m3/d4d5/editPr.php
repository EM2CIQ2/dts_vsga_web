<?php
include("config.php");

if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $religion = $_POST['religion'];
    $school = $_POST['school'];

    $sql = "UPDATE siswa SET name='$name', address='$address', religion='$religion', school='$school' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=succesful&act=Edited');
    } else {
        header('Location: index.php?status=err&act=Edited');
        die("😢 Something wrong with data");
    }


} else {
    die("😢 No Access, Sorry");
}