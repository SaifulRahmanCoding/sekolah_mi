<div id="main-ket-sekolah" class="py-1">
    <div class="container">
        <div class="ket-sekolah d-flex align-items-center">
            <span class="ps-lg-2 py-1"><i class="icon-phone"></i> &nbsp&nbsp</span><a href="tel:<?php echo (empty($s_dMinor['telp'])) ? "" : $s_dMinor['telp']; ?>" class="me-4 text-decoration-none"><?php echo (empty($s_dMinor['telp'])) ? "" : $s_dMinor['telp']; ?></a>
            <span class="top-email"><i class="icon-envelope-open"></i> &nbsp&nbsp</span> <a href="mailto:<?php echo (empty($s_dMinor['email'])) ? "" : $s_dMinor['email']; ?>" class="text-decoration-none"><?php echo (empty($s_dMinor['email'])) ? "" : $s_dMinor['email']; ?></a>
            <i class="icon-location-pin ms-auto me-2"></i>
            <p class="m-0"><?php echo (empty($s_dMinor['alamat'])) ? "" : $s_dMinor['alamat']; ?></p>
        </div>
    </div>
</div>
<div id="header" class="bg-white sticky-top shadow-sm">
    <div class="container">
        <nav class="navbar d-inline">
            <div class="top-header d-flex align-items-center">
                <img src="<?php echo (empty($s_dMinor['logo'])) ? "assets/img/no_image.jpg" : "$pecah_path_dMinor[1]"; ?>" alt="..." class="py-2 me-1">
                <h3 class="m-0 ps-2 me-auto fw-bolder">MI Nurul Hikmah Silolembu</h3>
                <ul class="nav-list">
                    <li><a href="index.php#" class="px-lg-2 mx-1 text-decoration-none text-dark"> Home </a></li>
                    <li><a href="index.php#pengumuman" class="px-lg-2 mx-1 text-decoration-none text-dark"> Pengumuman </a></li>
                    <li><a href="index.php#guru" class="px-lg-2 mx-1 text-decoration-none text-dark"> Guru </a></li>
                    <li><a href="dokumentasi.php" class="px-lg-2 mx-1 text-decoration-none text-dark"> Dokumentasi </a></li>
                    <li><a href="about.php" class="px-lg-2 mx-1 text-decoration-none text-dark"> About </a></li>
                </ul>
                <button class="bars btn ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </div>
</div>