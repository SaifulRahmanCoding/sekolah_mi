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
    <title>Pengaturan Lain</title>
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
        <div class="container-content p-Lain mx-2 mx-md-3 mx-lg-4 pt-4">
            <h5>Pengaturan Lain</h5>
            <p class="mb-4">Pengaturan Lain Merupakan Pengaturan Data Yang Hanya Dapat Diperbaharui atau Diupdate Saja Tanpa Bisa Menghapus Maupun Menambah Data Yang Ada</p>
            <div class="row justify-content-center">

                <a href="#ucapanModal" class="shadow m-3 px-3 py-2 col-12 col-md-3 text-decoration-none text-dark" data-bs-toggle="modal"><i class="fa fa-cog"></i>&nbsp&nbsp Ucapan Landing Page</a>
                <a href="#visiMisiModal" class="shadow m-3 px-3 py-2 col-12 col-md-3 text-decoration-none text-dark" data-bs-toggle="modal"><i class="fa fa-cog"></i>&nbsp&nbsp Visi, Misi & Tujuan</a>
                <a href="#aboutModal" class="shadow m-3 px-3 py-2 col-12 col-md-3 text-decoration-none text-dark" data-bs-toggle="modal"><i class="fa fa-cog"></i>&nbsp&nbsp About</a>
                <a href="#seoModal" class="shadow m-3 px-3 py-2 col-12 col-md-3 text-decoration-none text-dark" data-bs-toggle="modal"><i class="fa fa-cog"></i>&nbsp&nbsp S.E.O</a>
                <a href="#dataMinor" class="shadow m-3 px-3 py-2 col-12 col-md-3 text-decoration-none text-dark" data-bs-toggle="modal"><i class="fa fa-cog"></i>&nbsp&nbsp Data Minor Website</a>

            </div>

            <?php
            require('komponen/modal-ucapan.php');
            require('komponen/modal-seo.php');
            require('komponen/modal-visiMisi.php');
            require('komponen/modal-about.php');
            require('komponen/modal-data-minor.php');
            ?>

        </div>
    </div>
    <!-- end content -->

    <?php require('config/script.php'); ?>
</body>

</html>