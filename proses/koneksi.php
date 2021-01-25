<?php
$localhost = 'localhost';
$user = 'root';
$password = '';
$db = 'warkop';

$koneksi = mysqli_connect($localhost, $user, $password, $db);
if ($koneksi) {
    // echo 'konek';
} else {
    echo "<script>alert('koneksi ke database gagal')</script>";
}
