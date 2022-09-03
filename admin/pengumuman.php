<?php
require_once('../assets/koneksi.php');
require('cekLogin.php');
require('../assets/library/ubahTanggal.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengumuman</title>
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
            <h5>Pengemuman</h5>
            <p class="mb-4">Anda Dapat Mengubah (Menambah, Mengedit dan Menghapus) Data Pengumuman Maupun Agenda di Sini</p>

            <a class="btn btn-primary btn-sm mb-3" href="#pengumumanModal" data-bs-toggle="modal">Tambah Data</a>
            <?php require('komponen/modal-add-pengumuman.php'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" style="max-width: 40px;">No</th>
                            <th scope="col" style="min-width: 150px;">Judul</th>
                            <th scope="col" style="min-width: 200px;">Keterangan</th>
                            <th scope="col" style="min-width: 100px;">Tanggal</th>
                            <th scope="col" style="min-width: 150px;">Jam</th>
                            <th scope="col">Jenis</th>
                            <th scope="col" style="min-width: 110px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $select = mysqli_query($db, "SELECT * FROM pengumuman ORDER BY id DESC");
                        $jml = mysqli_num_rows($select);
                        $i = 1;
                        foreach ($select as $pengumuman) {
                            $tanggal = $pengumuman['tanggal'];
                            $jam_awal = $pengumuman['jam_awal'];
                            $jam_akhir = $pengumuman['jam_akhir'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i++ ?></th>
                                <td><?php echo $pengumuman['judul'] ?></td>
                                <td><?php echo $pengumuman['keterangan'] ?></td>
                                <td><?php echo ubahTanggal($tanggal) ?></td>
                                <td><?php echo ($jam_awal == "00:00:00" AND $jam_akhir == "00:00:00") ? "-" : "$jam_awal - $jam_akhir" ; ?></td>
                                <td><?php echo $pengumuman['jenis'] ?></td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="#editPengumumanModal<?php echo $pengumuman['id'] ?>" data-bs-toggle="modal"><i class="fa fa-edit"></i></a> &nbsp|&nbsp
                                    <a href="controllers/pengumumanControllers.php?opsi=delete&id=<?php echo $pengumuman['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                                <?php require('komponen/modal-edit-pengumuman.php'); ?>
                            </tr>
                        <?php }
                        if ($jml == 0) { ?>
                            <tr>
                                <td colspan="7" class="text-center">Data Masih Kosong!</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- end content -->

    <?php require('config/script.php'); ?>
</body>

</html>