<?php
include('connection.php');

$id_jenis = $_POST['id'];
$label = $_POST['label'];

$update = mysqli_query($connect, "UPDATE jenis_buku SET label='$label' WHERE id='$id_jenis'");
if ($update){
    header('location:jenis-buku.php');
}else{
    echo "GAGAL";
}
