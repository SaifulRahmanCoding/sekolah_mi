<div id="sidebar" class="handphone">
    <nav id="NavControll" class="side-nav mt-3">
        <ul class="nav flex-column">
            <li>
                <a href="index.php" class="nav-link text-decoration-none text-dark d-flex align-items-center py-1 ps-3 mb-1 active"> <i class="fa fa-home me-2"></i> Dashboard</a>
            </li>
            <li>
                <a href="carousel.php" class="nav-link text-decoration-none text-dark d-flex align-items-center py-1 ps-3 mb-1"> <i class="fa fa-database me-2"></i> Carousel</a>
            </li>
            <li>
                <a href="guru.php" class="nav-link text-decoration-none text-dark d-flex align-items-center py-1 ps-3 mb-1"> <i class="fa fa-database me-2"></i> Data Guru</a>
            </li>
            <li>
                <a href="pengumuman.php" class="nav-link text-decoration-none text-dark d-flex align-items-center py-1 ps-3 mb-1"> <i class="fa fa-database me-2"></i> Data Pengumuman</a>
            </li>
            <li>
                <a href="dokumentasi.php" class="nav-link text-decoration-none text-dark d-flex align-items-center py-1 ps-3 mb-1"> <i class="fa fa-database me-2"></i> Data Dokumentasi</a>
            </li>
            <li>
                <a href="pengaturanLain.php" class="nav-link text-decoration-none text-dark d-flex align-items-center py-1 ps-3 mb-1"> <i class="fa fa-cogs me-2"></i> Pengaturan Lain</a>
            </li>
            <li>
            </li>
        </ul>
    </nav>
    <div class="akun-admin">
        <div class="dropdown ps-3">
            <img src="../assets/img/avatar.jpg" alt="" class="my-2">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                <?php echo ucwords($_SESSION['nama']); ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a href="newUser.php" class="dropdown-item"> <i class="fa fa-user-alt"></i> Buat Akun</a></li>
                <li><a href="logout.php" class="dropdown-item"> <i class="fa fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>