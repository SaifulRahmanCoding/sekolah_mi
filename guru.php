<?php require_once('assets/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('komponen/seo.php'); ?>
    <title>Tenaga Pengajar</title>
    <?php require('config/style.php'); ?>
</head>

<body>
    <!-- Header -->
    <?php
    require('komponen/header.php');
    require('komponen/offcanvas.php');
    ?>
    <!-- End Header -->

    <!-- content -->
    <div id="content" class="my-5">
        <div class="container">
            <h3 class="fw-bolder mt-5 mb-4">Tenaga Pengajar</h3>
            <div class="row justify-content-center">
                <?php
                $s_guru = mysqli_query($db, "SELECT * FROM guru");
                foreach ($s_guru as $guru) {
                    $pecah_path_guru = explode('../../', $guru['foto']);
                ?>
                    <div class="card mb-3 shadow-sm mx-2" style="max-width: 18rem;" data-aos="zoom-in">
                        <div class="card-body text-center">
                            <img src="<?php echo $pecah_path_guru[1] ?>" alt="">
                            <h5 class="card-title fw-bolder mt-3"><?php echo $guru['nama'] ?></h5>
                        </div>
                        <div class="card-footer bg-transparent text-center">
                            <span><?php echo $guru['jabatan'] ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- End content -->

    <!-- Footer -->
    <?php require('komponen/footer.php'); ?>
    <!-- End Footers -->
    <?php require('config/script.php'); ?>
</body>

</html>