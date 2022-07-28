<?php

include('connection.php');
$nama_kelas = $_POST['nama_kelas'];

$insert = mysqli_query($connect, "INSERT INTO kelas SET nama_kelas='$nama_kelas'");
if ($insert){
    header('location:kelas.php');
}else{
    echo "GAGAL";
}
