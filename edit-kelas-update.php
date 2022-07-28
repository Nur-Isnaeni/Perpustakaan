<?php
include('connection.php');

$id_kelas = $_POST['id'];
$nama_kelas = $_POST['nama_kelas'];

$update = mysqli_query($connect, "UPDATE kelas SET nama_kelas='$nama_kelas' WHERE id='$id_kelas'");
if ($update){
    header('location:kelas.php');
}else{
    echo "GAGAL";
}
