<?php

include('connection.php');
$nama_siswa = $_POST['nama_siswa'];
$kelas_id = $_POST['kelas_id'];


$insert = mysqli_query($connect, "INSERT INTO siswa SET nama_siswa='$nama_siswa', kelas_id='$kelas_id'");
if ($insert){
    header('location:siswa.php');
}else{
    echo "GAGAL";
}
