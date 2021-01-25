<?php
include 'koneksi.php';

$id = $_GET['id'];

$query_delete = mysqli_query($koneksi, "DELETE FROM data_warkop WHERE id_warkop='$id'");
if ($query_delete) {
    echo "<script>alert('data berhasil dihapus')
            window.location.href='../admin/dashboard.php';
        </script>";
} else {
    echo "<script>alert('data gagal dihapus')
    window.location.href='../admin/dashboard.php';
    </script>";

    echo '<script>window.history.back()</script>';
}
