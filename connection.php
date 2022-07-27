<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'perpustakaan';
$connect = mysqli_connect($server, $username, $password, $database );

if (!$connect){
    exit('failed');
}