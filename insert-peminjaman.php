<?php
include('connection.php');

$siswa_id = $_POST['siswa_id'];
$buku_id = $_POST['buku_id'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];

$insert = mysqli_query($connect, "INSERT INTO peminjaman SET siswa_id='$siswa_id', buku_id='$buku_id', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian'");
if ($insert){
    header('location:peminjaman.php');
}else{
    echo "GAGAL";
}
