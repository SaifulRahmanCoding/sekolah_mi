

<?php
session_start();
require('assets/src/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Naive Bayes</title>
</head>

<body>
    <!-- header -->
    <div id="header" class="wrapper sticky-top bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="logo d-flex justify-content-start align-items-center py-2">
                    <img src="assets/src/img/logo.png" alt="">
                    <span class="fs-3 ms-2">Naive Bayes</span>
                    <!-- button -->
                    <button class="bars btn ms-auto mx-sm-4 mt-1" onclick="toggleSide()"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- content -->
    <div>
        <!-- sidebar -->
        <div id="sidebar" class="handphone">
            <nav id="NavControll" class="side-nav mt-3">
                <ul class="nav flex-column">
                    <li><a href="#" class="nav-link text-decoration-none text-dark d-flex align-items-center py-2 ps-3 mb-2 active"> <i class="fa fa-database me-2"></i> Data Training</a></li>
                    <li><a href="#dataTesting" class="nav-link text-decoration-none text-dark d-flex align-items-center py-2 ps-3 mb-2"> <i class="fa fa-database me-2"></i> Data Testing</a></li>
                    <li><a href="#hitung" class="nav-link text-decoration-none text-dark d-flex align-items-center py-2 ps-3 mb-2"> <i class="fas fa-calculator me-2"></i> Hitung</a></li>
                    <?php if (isset($_GET['aksi'])) : ?>
                        <li><a href="#tabelPrediksi" class="nav-link text-decoration-none text-dark d-flex align-items-center py-2 ps-3 mb-2 active"> <i class="fas fa-table me-2"></i> Tabel Prediksi</a></li>
                    <?php endif; ?>
                    <li>
                        <!-- Button trigger modal -->
                        <a href="#bantuan" data-bs-toggle="modal" class="nav-link text-decoration-none text-dark d-flex align-items-center py-2 ps-3 mb-2"> <i class="fas fa-question-circle me-2"></i> Bantuan </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Modal Bantuan -->
        <?php require('modal-bantuan.php'); ?>
        <!-- end sidebar -->

        <!-- body content -->
        <div id="body-content" class="body-content">
            <div class="container-body-content mx-2 mx-md-3 mx-lg-4 pt-4">

                <!-- DATA TRAINING -->
                <div id="dataTraining">
                    <div class="head">
                        <h4 class="d-inline">Data Training</h4>
                        <?php
                        require('modal-import-training.php');
                        require('modal-hapus-training.php');
                        ?>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-light table-bordered table-sm">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Outlook</th>
                                    <th scope="col">Temperature</th>
                                    <th scope="col">Humidity</th>
                                    <th scope="col">Windy</th>
                                    <th scope="col">Play</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select = mysqli_query($db, "SELECT * FROM tb_training");
                                $count_row = mysqli_num_rows($select);
                                if ($count_row == 0) { ?>
                                    <tr>
                                        <td colspan="6" class="text-center"> Data Masih Kosong !!! </td>
                                    </tr>
                                <?php }

                                $i = 1;
                                foreach ($select as $training) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $training['outlook']; ?></td>
                                        <td><?php echo $training['temperature']; ?></td>
                                        <td><?php echo $training['humidity']; ?></td>
                                        <td><?php echo $training['windy']; ?></td>
                                        <?php
                                        $color_play = ($training['play'] == "yes") ? "#bcf8c0" : "#fec0c1";
                                        ?>
                                        <td style="background-color: <?php echo $color_play ?> !important;"><?php echo $training['play']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END DATA TRAINING -->

                <!-- DATA TESTING -->
                <div id="dataTesting">
                    <div class="head">
                        <h4 class="d-inline">Data Testing</h4>
                        <?php
                        require('modal-import-testing.php');
                        require('modal-hapus-testing.php');
                        ?>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-light table-bordered table-sm">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Outlook</th>
                                    <th scope="col">Temperature</th>
                                    <th scope="col">Humidity</th>
                                    <th scope="col">Windy</th>
                                    <th scope="col">Play</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select = mysqli_query($db, "SELECT * FROM tb_testing");
                                $count_row = mysqli_num_rows($select);
                                if ($count_row == 0) { ?>
                                    <tr>
                                        <td colspan="6" class="text-center"> Data Masih Kosong !!! </td>
                                    </tr>
                                <?php }

                                $i = 1;
                                foreach ($select as $training) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $training['outlook']; ?></td>
                                        <td><?php echo $training['temperature']; ?></td>
                                        <td><?php echo $training['humidity']; ?></td>
                                        <td><?php echo $training['windy']; ?></td>
                                        <?php
                                        $color_play = ($training['play'] == "yes") ? "#bcf8c0" : "#fec0c1";
                                        ?>
                                        <td style="background-color: <?php echo $color_play ?> !important;"><?php echo $training['play']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END DATA TESTING -->

                <!-- HITUNG -->
                <div id="hitung" class="mb-5">
                    <div class="head">
                        <h4 class="d-inline"> Hitung</h4>
                        <?php
                        // kondisi jika data testing kosong
                        if ($count_row > 0) { ?>
                            <a href="?aksi=hitung#hitung" class="btn btn-outline-primary btn-sm ms-3"> <i class="fas fa-calculator"></i> Hitung</a>
                        <?php } ?>
                        <a href="?#hitung" class="btn btn-outline-danger btn-sm mx-3"> <i class="fas fa-redo"></i> Reset Hitungan</a>
                    </div>
                    <?php
                    $hitung = (isset($_GET['aksi'])) ? $_GET['aksi'] : "";
                    if (!empty($hitung)) {
                        require('controllers/hitung.php');
                    } ?>
                </div>
                <!-- END HITUNG -->

            </div>
        </div>
        <!-- end body content -->

    </div>
    <!-- end content -->

    <!-- footer -->
    <div id="footer" class="footer py-1">
        <div class="container-fluid d-flex justify-content-center">
            <span class="text-light">Copyright By Saiful Rahman - 2022</span>
        </div>
    </div>
    <!-- end footer -->

    <?php require('config/script.php'); ?>
</body>