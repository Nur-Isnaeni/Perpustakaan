<?php

include('connection.php');
$id_kelas = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM kelas WHERE id='$id_kelas'");
if ($delete){
    header('location:kelas.php');
}else{
    echo "GAGAL";
}
