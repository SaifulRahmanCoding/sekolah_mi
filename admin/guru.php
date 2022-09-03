<?php
require_once('../assets/koneksi.php');
require('cekLogin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <?php require('config/style.php'); ?>
</head>

<body class="bg-light">
    <!-- header -->
    <?php require('komponen/header.php'); ?>
    <!-- end header -->

    <!-- sidebar -->
    <?php require('komponen/sidebar.php'); ?>
    <!-- end sidebar -->

    <!-- content -->
    <div id="content" class="content">
        <div class="container-content mx-2 mx-md-3 mx-lg-4 pt-4">
            <h5>Guru</h5>
            <p class="mb-4">Anda Dapat Mengubah Data Guru Yang Mengajar Untuk Keperluan Informasi Teanga Pengajar Pada Website</p>

            <a class="btn btn-primary btn-sm mb-3" href="#guruModal" data-bs-toggle="modal">Tambah Data</a>
            <?php require('komponen/modal-add-guru.php'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" style="max-width: 40px;">No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col" style="min-width: 110px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $select = mysqli_query($db, "SELECT * FROM guru ORDER BY id DESC");
                        $jml = mysqli_num_rows($select);
                        $i = 1;
                        foreach ($select as $guru) { ?>
                            <tr>
                                <th scope="row"><?php echo $i++ ?></th>
                                <?php
                                $pecah_path = explode('../../', $guru['foto']);
                                ?>
                                <td><img src="<?php echo "../$pecah_path[1]" ?>" alt="..."></td>
                                <td><?php echo $guru['nama'] ?></td>
                                <td><?php echo $guru['jabatan'] ?></td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="#editGuruModal<?php echo $guru['id'] ?>" data-bs-toggle="modal"><i class="fa fa-edit"></i></a> &nbsp|&nbsp
                                    <a href="controllers/guruControllers.php?opsi=delete&id=<?php echo $guru['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                                <?php require('komponen/modal-edit-guru.php'); ?>
                            </tr>
                        <?php }
                        if ($jml == 0) { ?>
                            <tr>
                                <td colspan="5" class="text-center">Data Masih Kosong!</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- end content -->

    <?php require('config/script.php'); ?>
</body>

</html>