<?php
require_once('assets/koneksi.php');
require('assets/library/ubahTanggal.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('komponen/seo.php'); ?>
    <title>MI Nurul Hikmah</title>
    <?php require('config/style.php'); ?>
</head>

<body class="bg-light">
    <!-- Header -->
    <?php
    require('komponen/header.php');
    require('komponen/offcanvas.php');
    ?>
    <!-- End Header -->

    <!-- Content -->
    <div id="content">
        <?php require('komponen/carousel.php'); ?>
        <!-- main-content -->
        <div class="main-content">
            <div class="kata-kata pb-5 mb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8 p-2" data-aos="zoom-out">
                            <?php
                            $s_ucapan = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM ucapan"));
                            $pecah_path_carousel = (empty($s_ucapan['foto'])) ? "" : explode('../../', $s_ucapan['foto']);
                            ?>
                            <h2 class="judul-sambutan mb-3 fw-bolder"><?php echo (empty($s_ucapan['judul'])) ? "-" : $s_ucapan['judul']; ?></h2>
                            <p class="body-sambutan"><?php echo (empty($s_ucapan['konten'])) ? "-" : $s_ucapan['konten']; ?></p>
                        </div>
                        <div class="foto-kepsek col-12 col-md-4 p-2 d-flex justify-content-center" data-aos="zoom-out" data-aos-delay="200">
                            <img src="<?php echo (empty($s_ucapan['foto'])) ? "assets/img/avatar.jpg" : $pecah_path_carousel[1]; ?>" alt="gambar error">
                        </div>
                    </div>
                </div>
            </div>

            <!-- visi misi -->
            <div class="visi-misi py-5 bg-white">
                <div class="container">
                    <?php
                    $visiMisi = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM visi_misi"));

                    $array_visi = explode(',', $visiMisi['visi']);
                    $array_misi = explode(',', $visiMisi['misi']);
                    $array_tujuan = explode(',', $visiMisi['tujuan']);
                    ?>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 my-5" data-aos="zoom-out">
                            <h4 class="text-center fw-bolder m-0">Visi</h4>
                            <div class="line-bawah text-center" style="position:relative; top: -20px;">
                                <span style="border-bottom: 3px solid green;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                            </div>
                            <ul>
                                <?php
                                foreach ($array_visi as $visi) { ?>
                                    <li><?php echo $visi; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 my-5" data-aos="zoom-out" data-aos-delay="300">
                            <h4 class="text-center fw-bolder m-0">Misi</h4>
                            <div class="line-bawah text-center" style="position:relative; top: -20px;">
                                <span style="border-bottom: 3px solid green;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                            </div>
                            <ul>
                                <?php
                                foreach ($array_misi as $misi) { ?>
                                    <li><?php echo $misi ?></li>
                                <?php } ?>

                            </ul>
                        </div>
                        <div class="col-12 col-md-6 my-5" data-aos="zoom-out" data-aos-delay="400">
                            <h4 class="text-center fw-bolder m-0">Tujuan</h4>
                            <div class="line-bawah text-center" style="position:relative; top: -20px;">
                                <span style="border-bottom: 3px solid green;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                            </div>
                            <ul>
                                <?php
                                foreach ($array_tujuan as $tujuan) { ?>
                                    <li><?php echo $tujuan ?></li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End visi misi -->

            <!-- pengumuman -->
            <div id="pengumuman" class="pengumuman py-5 bg-light">
                <div class="container">

                    <div class="row">
                        <?php
                        $s_pengumuman = mysqli_query($db, "SELECT * FROM pengumuman ORDER BY id DESC");

                        foreach ($s_pengumuman as $pengumuman) {
                            $pecah_tgl = explode('-', $pengumuman['tanggal']);
                            $bilangTanggal = explode(' ', ubahTanggal($pengumuman['tanggal']));

                            $bg_jenis = ($pengumuman['jenis'] == "pengumuman") ? "#eabd0a" : "#095385";

                            $start = explode(':', $pengumuman['jam_awal']);
                            $end = explode(':', $pengumuman['jam_akhir']);

                            $jam_awal = "$start[0]:$start[1]";
                            $jam_akhir = "$end[0]:$end[1]";
                        ?>

                            <div class="data-pengumuman row pb-4 mb-4 ms-2 col-12 col-md-6" data-aos="fade-up">
                                <div class="col-3 d-flex justify-content-center align-items-center">
                                    <div class="wrap-tgl p-2">
                                        <div class="wrap-dalam-tgl text-center p-2">
                                            <h4 class="fw-bolder m-0"><?php echo $pecah_tgl[2] ?></h4>
                                            <span><?php echo "$bilangTanggal[1] $bilangTanggal[2]" ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 ps-3">
                                    <h4 class="fw-bolder"><?php echo $pengumuman['judul'] ?></h4>
                                    <span class="jam-pengumuman"><?php echo ($pengumuman['jam_awal'] == "00:00:00" and $pengumuman['jam_akhir'] == "00:00:00") ? "" : $jam_awal . " - " . $jam_akhir . " WIB" ?></span>
                                    <p><?php echo $pengumuman['keterangan'] ?></p>
                                    <span class="px-2 pt-1 pb-2 rounded text-white shadow" style="background-color: <?php echo $bg_jenis ?>;"><?php echo ucwords($pengumuman['jenis']) ?></span>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
            <!-- End pengumuman -->

            <!-- Guru -->
            <div id="guru" class="bg-white py-5 mt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <h2 class="text-center fw-bolder mb-5">Tenaga Pengajar</h2>
                        <?php
                        $s_guru = mysqli_query($db, "SELECT * FROM guru LIMIT 0,3");
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

                        <div class="text-center my-5">
                            <a href="guru.php" class="btn btn-outline-dark px-4">Lihat Lebih &nbsp<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End guru -->
        </div>
        <!-- end main-conten -->
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <?php require('komponen/footer.php'); ?>
    <!-- End Footers -->

    <?php require('config/script.php'); ?>
</body>

</html>