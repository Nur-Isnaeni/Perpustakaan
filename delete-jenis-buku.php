<?php

include('connection.php');
$id_jenis = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM jenis_buku WHERE id='$id_jenis'");
if ($delete){
    header('location:jenis-buku.php');
}else{
    echo "GAGAL";
}
