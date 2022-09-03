<?php
require_once('../assets/koneksi.php');
require('cekLogin.php');

// untuk paging
$halaman = 5; //batasan halaman
$page = isset($_GET['halaman']) ? (int)$_GET["halaman"] : 1;
$mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokumentasi</title>
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
            <h5>Dokumentasi</h5>
            <p class="mb-4">Anda Dapat Mengubah Data Berupa Foto Dokumentasi Pada Website di Sini</p>

            <a class="btn btn-primary btn-sm mb-3" href="#dokumentasiModal" data-bs-toggle="modal">Tambah Data</a>
            <?php require('komponen/modal-add-dokumentasi.php'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" style="max-width: 40px;">No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col" style="min-width: 110px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $select = mysqli_query($db, "SELECT * FROM dokumentasi ORDER BY id DESC LIMIT $mulai, $halaman");
                        $jml = mysqli_num_rows($select);

                        (isset($_GET['halaman'])) ? $i = (((int)$_GET["halaman"] - 1) * 5) + 1 : $i = 1;
                        foreach ($select as $dokumentasi) { ?>
                            <tr>
                                <th scope="row"><?php echo $i++ ?></th>
                                <?php
                                $pecah_path = explode('../../', $dokumentasi['foto']);
                                ?>
                                <td><img src="<?php echo "../$pecah_path[1]" ?>" alt="..."></td>
                                <td><?php echo $dokumentasi['ket'] ?></td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="#editDokumentasiModal<?php echo $dokumentasi['id'] ?>" data-bs-toggle="modal"><i class="fa fa-edit"></i></a> &nbsp|&nbsp
                                    <a href="controllers/dokumentasiControllers.php?opsi=delete&id=<?php echo $dokumentasi['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                                <?php require('komponen/modal-edit-dokumentasi.php'); ?>
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

            <div class="layerPage m-3">
                <?php
                $sql = mysqli_query($db, "SELECT * FROM dokumentasi");
                $total = mysqli_num_rows($sql);
                $pages = ceil($total / $halaman);

                // batas page tampil
                $limitpageshow = 1;

                // kondisi disable tombol sebelumnya
                $hilangP = ($page == 1) ? 'disabled' : ' ';

                // kondisi disable tombol selanjutnya
                $hilangN = ($page == $pages) ? 'disabled' : ' ';


                ?>
                <nav aria-label="pagging">
                    <ul class="pagination">
                        <?php if ($page > 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="?halaman=1"><i class="fa fa-angle-double-left"></i></a>
                            </li>
                        <?php } ?>

                        <li class="page-item <?php echo $hilangP ?>">
                            <?php $previouspage = $page - 1; ?>
                            <a class="page-link" href="?halaman=<?php echo $previouspage; ?>" aria-disabled="true"><i class="fa fa-angle-left"></i></a>
                        </li>

                        <!-- menampilkan pages -->
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $page; ?>"><?php echo $page; ?></a></li>

                        <li class="page-item <?php echo $hilangN ?>">
                            <?php $nextpage = $page + 1; ?>
                            <a class="page-link" href="?halaman=<?php echo $nextpage; ?>"><i class="fa fa-angle-right"></i></a>
                        </li>

                        <?php if ($page < $pages) { ?>
                            <li class="page-item">
                                <a class="page-link" href="?halaman=<?php echo $pages ?>"><i class="fa fa-angle-double-right"></i></a>
                            </li>
                        <?php } ?>

                    </ul>
                    <p>Page: <?php echo $page ?> of <?php echo $pages ?></p>
                </nav>
            </div>
        </div>
    </div>
    <!-- end content -->

    <?php require('config/script.php'); ?>
</body>

</html>