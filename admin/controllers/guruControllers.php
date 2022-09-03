<?php
require_once('../../assets/koneksi.php');
require('../cekLogin.php');
$opsi = $_GET['opsi'];

if ($opsi == "input") {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    // mengambil data file upload
    $files = $_FILES['foto'];
    $path = "../../assets/img/guru/";

    // file upload
    if (!empty($files['name'])) {
        $filepath = $path . $files['name'];
        $upload = move_uploaded_file($files['tmp_name'], $filepath);
    } else {
        $upload = false;
    }

    // menangani error saat mengupload
    if ($upload = false) {
        $filepath = '../../assets/img/avatar.jpg';
    }

    $query = "INSERT INTO guru(nama,jabatan,foto) VALUES ('{$nama}','{$jabatan}','{$filepath}')";

    // mengeksekusi MySQL Query
    $insert = mysqli_query($db, $query);

    // menangani ketika error pada saat eksekusi query
    if ($insert == false) { ?>
        <script type="text/javascript">
            alert("Gagal Menambah Data");
            window.location.href = "../guru.php";
        </script>
    <? } else {
        header("Location: ../guru.php");
    }
} elseif ($opsi == "edit") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    // eksekusi Query
    $result = mysqli_query($db, "SELECT * FROM guru WHERE id = '{$id}'");

    // fetching data
    foreach ($result as $guru) {
        $fotoLama = $guru['foto'];
    }
    // mengambil data file upload
    $files = $_FILES['foto'];
    $path = "../../assets/img/guru/";

    // menangani file upload
    if (!empty($files['name'])) {
        $filepath = $path . $files['name'];
        $upload = move_uploaded_file($files['tmp_name'], $filepath);

        if (file_exists($fotoLama)) {
            unlink($fotoLama); //hapus foto lama
        }
    } else {
        $filepath = $fotoLama;
        $upload =  false;
    }

    // menangani error saat mengupload
    if ($upload = false) {
        $filepath = '../../assets/img/avatar.jpg';
    }
    $update = mysqli_query($db, "UPDATE guru SET foto='$filepath',nama='$nama',jabatan='$jabatan' WHERE id = '$id'");


    if ($update == false) { ?>
        <script type="text/javascript">
            alert("Gagal Mengubah Data");
            window.location.href = "../guru.php";
        </script>
    <? } else {
        header("Location: ../guru.php");
    }
} elseif ($opsi == "delete") {
    $id = $_GET['id'];
    $delete = mysqli_query($db, "DELETE FROM guru WHERE id = '$id'");

    if ($delete == false) { ?>
        <script type="text/javascript">
            alert("Gagal Hapus Data");
            window.location.href = "../guru.php";
        </script>
<? } else {
        $max_id = mysqli_fetch_assoc(mysqli_query($db, "SELECT max(id) as max_id FROM guru"));
        $ai = $max_id['max_id'] + 1;
        mysqli_query($db, "ALTER TABLE guru auto_increment = $ai");

        header("Location: ../guru.php");
    }
}
