<?php

include('connection.php');
$id_buku = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM buku WHERE id='$id_buku'");
if ($delete){
    header('location:index.php');
}else{
    echo "GAGAL";
}
