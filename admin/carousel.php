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
    <title>Data Carousel</title>
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
            <h5>Carousel</h5>
            <p class="mb-4">Anda Dapat Mengubah Data Slider Yang Ada Pada Tampilan Awal Website</p>

            <a class="btn btn-primary btn-sm mb-3" href="#carouselModal" data-bs-toggle="modal">Tambah Data</a>
            <?php require('komponen/modal-add-carousel.php'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" style="max-width: 40px;">No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Sub Judul</th>
                            <th scope="col" style="min-width: 110px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $select = mysqli_query($db, "SELECT * FROM carousel ORDER BY id DESC");
                        $jml = mysqli_num_rows($select);
                        $i = 1;
                        foreach ($select as $carousel) { ?>
                            <tr>
                                <th scope="row"><?php echo $i++ ?></th>
                                <?php
                                $pecah_path = explode('../../', $carousel['foto']);
                                ?>
                                <td><img src="<?php echo "../$pecah_path[1]" ?>" alt="..."></td>
                                <td><?php echo $carousel['judul'] ?></td>
                                <td><?php echo $carousel['sub_judul'] ?></td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="#editCarouselModal<?php echo $carousel['id'] ?>" data-bs-toggle="modal"><i class="fa fa-edit"></i></a> &nbsp|&nbsp
                                    <a href="controllers/carouselControllers.php?opsi=delete&id=<?php echo $carousel['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                                <?php require('komponen/modal-edit-carousel.php'); ?>
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