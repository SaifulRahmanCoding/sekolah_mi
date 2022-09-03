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
    <title>Dashboard Admin</title>
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
            <h5>Dashboard</h5>
            <p class="mb-4">Selamat Datang di Menu Admin, Anda Dapat Mengubah Data Yang Berkaitan Dengan Website di Sini.</p>

            <div class="row">
                <div class="col-12 col-md-6 px-3 mb-4">
                    <div class="cek-web shadow pb-2">
                        <div class="img-cek-web p-5 mb-2"></div>
                        <a href="../index.php" target="_blank" class="m-3 text-decoration-none">Cek Website Anda <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 px-3 mb-4">
                    <div class="cek-database shadow pb-2">
                    <div class="img-cek-database p-5 mb-2"></div>
                        <a href="../../phpmyadmin/index.php?route=/database/structure&db=sekolah_mi" target="_blank" class="m-3 text-decoration-none">Cek Database <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- footer -->
    <div id="footer" class="footer py-1">
        <div class="container-fluid">
            <span class="text-dark">Copyright By Saiful Rahman - 2022</span>
        </div>
    </div>
    <!-- end footer -->

    <?php require('config/script.php'); ?>
</body>

</html>