<?php
include('connection.php');

$id_peminjaman = $_POST['id'];
$siswa_id = $_POST['nama_siswa'];
$buku_id = $_POST['nama_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];

$update = mysqli_query($connect, "UPDATE peminjaman SET siswa_id='$siswa_id', buku_id='$buku_id', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian' WHERE id='$id_peminjaman'");
if ($update){
    header('location:peminjaman.php');
}else{
    echo "GAGAL";
}
