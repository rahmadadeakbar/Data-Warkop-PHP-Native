<?php


include('koneksi.php');
//cek dahulu, jika tombol simpan di klik
if (isset($_POST['update'])) {




    $id = $_POST['id_warkop'];
    $nama       = $_POST['nama_warkop'];
    $nohp      = $_POST['no_hp'];
    $alamat        = $_POST['alamat'];
    $peta    = $_POST['peta'];


    $update = mysqli_query($koneksi, "UPDATE data_warkop SET nama_warkop='$nama',no_hp='$nohp', alamat='$alamat', peta='$peta' WHERE id_warkop='$id'") or die(mysqli_error());


    if ($update) {

        echo '<script>
		alert("data berhasil di update")
		window.location.href="../admin/dashboard.php";
		</script>';
    } else {

        echo '<script>
		alert("data gagal di update")
		window.location.href="../admin/edit_data.php";
		</script>';
    }
} else {


    echo '<script>window.history.back()</script>';
}
