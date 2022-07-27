<?php
include('connection.php');

$id_buku = $_POST['id'];
$nama_buku = $_POST['nama_buku'];

$update = mysqli_query($connect, "UPDATE buku SET nama_buku='$nama_buku' WHERE id='$id_buku'");
if ($update){
    header('location:index.php');
}else{
    echo "GAGAL";
}
