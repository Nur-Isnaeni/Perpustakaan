<?php

include('connection.php');
$id_peminjaman = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM peminjaman WHERE id='$id_peminjaman'");
if ($delete){
    header('location:peminjaman.php');
}else{
    echo "GAGAL";
}
