<?php
session_start();
include 'koneksi.php';
if (isset($_POST['tambah'])) {
    $id = uniqid();
    $id_user = $_SESSION['id_user'];
    $nama = $_POST['nama_warkop'];
    $nohp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $peta = $_POST['peta'];

    $query_input = mysqli_query($koneksi, "INSERT INTO data_warkop VALUES(md5('$id'),'$id_user','$nama','$nohp','$alamat','$peta')");

    if ($query_input) {
        echo '<script>alert("data user berhasil diinput")
                window.location.href="../admin/dashboard.php";
            </script>';
    } else {

        echo '<script>alert("data user Gagal diinput")
        window.location.href="../admin/dashboard.php";
            </script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
