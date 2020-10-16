<?php

include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: index.php?status=succesful&act=Deleted');
    } else {
        die("😢 Something wrong with System: Cant delete");
    }
} else {
    die("😢 No Access, Sorry");
}
