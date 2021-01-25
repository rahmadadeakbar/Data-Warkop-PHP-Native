<?php
include 'header.php';
?>

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="https://image.winudf.com/v2/image/b25oZS5saXNhLm51ci5jYXJpX3dhcmtvcF9pY29uXzE1MzU0ODQ4NzVfMDE4/icon.png?w=170&fakeurl=1" width="30" height="30" class="d-inline-block align-top" alt="">
        Lokasi Warkop by KLP 11
    </a>
    <a class="navbar-brand" href="../proses/logout.php">
        Logout
    </a>


</nav>


<div class="container">

    <?php

    $id = $_GET['id'];

    $show = mysqli_query($koneksi, "SELECT * FROM data_warkop WHERE id_warkop='$id'");


    if (mysqli_num_rows($show) == 0) {

        echo '<script>window.history.back()</script>';
    } else {

        $data = mysqli_fetch_assoc($show); ?>


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Update Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../proses/edit_data.php" method="POST">
                            <input type="hidden" name="id_warkop" value="<?= $data['id_warkop']; ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Warkop</label>
                                <input type="text" name="nama_warkop" class="form-control" value="<?= $data['nama_warkop'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Warkop">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No Hp</label>
                                <input type="number" name="no_hp" class="form-control" value="<?= $data['no_hp'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No HP">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"><?= $data['alamat'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Embaded Map</label>
                                <textarea class="form-control" name="peta" id="exampleFormControlTextarea1" rows="3"><?= $data['peta'] ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    <?php }
    ?>

    <br>
    <br>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Admin</th>
                <th>Nama Warkop</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Peta</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $show_query = mysqli_query($koneksi, "SELECT 
            u.username,
            d.nama_warkop,
            d.no_hp, 
            d.alamat,
            d.peta,
            d.id_warkop 
            FROM data_warkop d 
            LEFT JOIN user u ON u.id_user = d.id_user ");
            if (mysqli_num_rows($show_query) == 0) {
                echo '<tr><td>Tidak ada data</td></tr>';
            } else {
                $no = 1;
                while ($data = mysqli_fetch_assoc($show_query)) {
            ?>

                    <tr>
                        <td>
                            <?= $no ?>
                        </td>
                        <td>
                            <?= $data['username'] ?>
                        </td>
                        <td>
                            <?= $data['nama_warkop'] ?>
                        </td>
                        <td>
                            <?= $data['no_hp'] ?>
                        </td>
                        <td>
                            <?= $data['alamat'] ?>
                        </td>

                        <td>
                            <?= $data['peta'] ?>
                        </td>
                        <td><a href="edit_data.php?id=<?php echo $data['id_warkop'] ?>" class="btn btn-info btn-xs">Edit</a> <a href="../proses/proses_hapus.php?id=<?php echo $data['id_warkop'] ?>" class="btn btn-danger btn-xs">Hapus</a></td>
                    </tr>
            <?php
                    $no++;
                }
            }
            ?>
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Admin</th>
                <th>Nama Warkop</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Peta</th>
                <th>Aksi</th>
            </tr>
        </tfoot> -->
    </table>





</div>







<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../aset/dist/js/bootstrap.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script>
    $('#myModal').modal('show');
</script>
</body>

</html>