<?php

include("config.php");

if( isset($_GET['id'])){

    $id = $_GET['id'];

    if ($_GET['typ'] == "brg") {
        $sql = "DELETE FROM barang WHERE KodeBarang=$id";
    } else if ($_GET['typ'] == "pl") {
        $sql = "DELETE FROM pelanggan WHERE NoPelanggan=$id";
    } else if ($_GET['typ'] == "pj") {
        $sql = "DELETE FROM penjualan WHERE faktur=$id";
    }
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: index.php?status=succesful&act=Deleted');
    } else {
        die("😢 Something wrong with System: Cant delete");
    }
} else {
    die("😢 No Access, Sorry");
}
