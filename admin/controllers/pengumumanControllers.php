<?php
require_once('../../assets/koneksi.php');
require('../cekLogin.php');
$opsi = $_GET['opsi'];

if ($opsi == "input") {
    $judul = $_POST['judul'];
    $keterangan = $_POST['ket'];
    $tanggal = $_POST['tanggal'];
    $jam_awal = $_POST['jam_awal'];
    $jam_akhir = $_POST['jam_akhir'];
    $jenis = $_POST['jenis'];
    
    $query = "INSERT INTO pengumuman(judul,keterangan,tanggal,jam_awal,jam_akhir,jenis) VALUES ('{$judul}','{$keterangan}','{$tanggal}','{$jam_awal}','{$jam_akhir}','{$jenis}')";

    // mengeksekusi MySQL Query
    $insert = mysqli_query($db, $query);

    // menangani ketika error pada saat eksekusi query
    if ($insert == false) { ?>
        <script type="text/javascript">
            alert("Gagal Menambah Data");
            window.location.href = "../pengumuman.php";
        </script>
    <? } else {
        header("Location: ../pengumuman.php");
    }
} elseif ($opsi == "edit") {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $keterangan = $_POST['ket'];
    $tanggal = $_POST['tanggal'];
    $jam_awal = $_POST['jam_awal'];
    $jam_akhir = $_POST['jam_akhir'];
    $jenis = $_POST['jenis'];
    
    $update = mysqli_query($db, "UPDATE pengumuman SET judul='$judul',tanggal='$tanggal',jam_awal='$jam_awal',jam_akhir='$jam_akhir',keterangan='$keterangan',jenis='$jenis' WHERE id = '$id'");

    if ($update == false) { ?>
        <script type="text/javascript">
            alert("Gagal Mengubah Data");
            window.location.href = "../pengumuman.php";
        </script>
    <? } else {
        header("Location: ../pengumuman.php");
    }
} elseif ($opsi == "delete") {
    $id = $_GET['id'];
    $delete = mysqli_query($db, "DELETE FROM pengumuman WHERE id = '$id'");

    if ($delete == false) { ?>
        <script type="text/javascript">
            alert("Gagal Hapus Data");
            window.location.href = "../pengumuman.php";
        </script>
<? } else {
        $max_id = mysqli_fetch_assoc(mysqli_query($db, "SELECT max(id) as max_id FROM pengumuman"));
        $ai = $max_id['max_id'] + 1;
        mysqli_query($db, "ALTER TABLE pengumuman auto_increment =$ai");

        header("Location: ../pengumuman.php");
    }
}
