<?php require_once('assets/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('komponen/seo.php'); ?>
    <title>About</title>
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
    <div id="content" class="about">
        <div class="container my-5">
            <div class="row">
                <?php
                $s_about = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM about"));
                $pecah_path_about = (empty($s_about['foto'])) ? "" : explode('../../', $s_about['foto']);
                ?>
                <div class="col-12 col-md-6 my-4 my-md-0" data-aos="zoom-in">
                    <img src="<?php echo (empty($s_about['foto'])) ? "assets/img/no_image.jpg" : "$pecah_path_about[1]"; ?>" alt="">
                </div>
                <div class="col-12 col-md-6 px-4 pb-4" data-aos="zoom-in">
                    <h3 class="text-center fw-bolder mb-3"><?php echo (empty($s_about['judul'])) ? "" : $s_about['judul']; ?></h3>

                    <?php
                    if (!empty($s_about['keterangan'])) {
                        $ket = explode('/n', $s_about['keterangan']);
                    } else {
                        $ket = $s_about['keterangan'];
                    }
                    foreach ($ket as $keterangan) { ?>
                        <p><?php echo $keterangan ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- Footer -->
    <?php require('komponen/footer.php'); ?>
    <!-- End Footers -->
    <?php require('config/script.php'); ?>
</body>

</html>