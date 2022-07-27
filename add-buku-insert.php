<?php

include('connection.php');
$nama_buku = $_POST['nama_buku'];

$insert= mysqli_query($connect, "INSERT INTO buku SET nama_buku='$nama_buku'");
if ($insert){
    header('location:index.php');
}else{
    echo "GAGAL";
}
