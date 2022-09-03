<?php require_once('assets/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('komponen/seo.php'); ?>
    <title>Dokumentasi</title>
    <?php require('config/style.php'); ?>
</head>

<body>
    <!-- Header -->
    <?php
    require('komponen/header.php');
    require('komponen/offcanvas.php');
    ?>
    <!-- End Header -->

    <!-- Dokumentasi -->
    <div id="content" class="dokumentasi my-5" data-aos="fade-up">

        <div class="container">

            <div class="section-header">
                <h3 class="fw-bolder">Dokumentasi</h3>
                <p>Hasil Dokumentasi Dari Beberapa Kegiatan Yang Ada di MI Nurul Hikmah</p>
            </div>

            <div class="container-fluid p-0" data-aos="fade-up" data-aos-delay="200">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                    <div class="row g-0 dokumentasi-container">
                        <?php
                        $s_dokumentasi = mysqli_query($db, "SELECT * FROM dokumentasi ORDER BY id DESC");

                        foreach ($s_dokumentasi as $dokumentasi) {
                            $pecah_path_dokumentasi = explode('../../', $dokumentasi['foto']);
                        ?>
                            <div class="col-xl-3 col-md-4 col-6 dokumentasi-item filter-app" data-aos="zoom-in" data-aos-delay="200">
                                <img src="<?php echo $pecah_path_dokumentasi[1] ?>" class="img-fluid" alt="...">
                                <div class="dokumentasi-info d-flex justify-content-center">
                                    <a href="<?php echo $pecah_path_dokumentasi[1] ?>" title="<?php echo $dokumentasi['ket'] ?>" data-gallery="dokumentasi-gallery" class="glightbox preview-link px-4 py-3 text-decoration-none" style="border: 1px solid whitesmoke;">Lihat</a>
                                </div>
                            </div><!-- End Dokumentasi Item -->

                        <?php } ?>

                    </div><!-- End Dokumentasi Container -->

                </div>

            </div>
        </div>
    </div><!-- End Portfolio Section -->

    <!-- Footer -->
    <?php require('komponen/footer.php'); ?>
    <!-- End Footers -->
    <?php require('config/script.php'); ?>
</body>

</html>