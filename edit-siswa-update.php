<?php
include('connection.php');

$id_siswa = $_POST['id'];
$nama_siswa = $_POST['nama_siswa'];

$update = mysqli_query($connect, "UPDATE siswa SET nama_siswa='$nama_siswa' WHERE id='$id_siswa'");
if ($update){
    header('location:siswa.php');
}else{
    echo "GAGAL";
}
