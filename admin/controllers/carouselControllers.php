<?php
require_once('../../assets/koneksi.php');
require('../cekLogin.php');
$opsi = $_GET['opsi'];

if ($opsi == "input") {
    $judul = $_POST['judul'];
    $sub_judul = $_POST['sub_judul'];

    // mengambil data file upload
    $files = $_FILES['foto'];
    $path = "../../assets/img/carousel/";

    // file upload
    if (!empty($files['name'])) {
        $filepath = $path . $files['name'];
        $upload = move_uploaded_file($files['tmp_name'], $filepath);
    } else {
        $upload = false;
    }

    // menangani error saat mengupload
    if ($upload = false) {
        $filepath = '../../assets/img/carousel/default.jpg';
    }

    $query = "INSERT INTO carousel(judul,sub_judul,foto) VALUES ('{$judul}','{$sub_judul}','{$filepath}')";

    // mengeksekusi MySQL Query
    $insert = mysqli_query($db, $query);

    // menangani ketika error pada saat eksekusi query
    if ($insert == false) { ?>
        <script type="text/javascript">
            alert("Gagal Menambah Data");
            window.location.href = "../carousel.php";
        </script>
    <? } else {
        header("Location: ../carousel.php");
    }
} elseif ($opsi == "edit") {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $sub_judul = $_POST['sub_judul'];

    // eksekusi Query
    $result = mysqli_query($db, "SELECT * FROM carousel WHERE id = '{$id}'");

    // fetching data
    foreach ($result as $carousel) {
        $fotoLama = $carousel['foto'];
    }
    // mengambil data file upload
    $files = $_FILES['foto'];
    $path = "../../assets/img/carousel/";

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
        $barang['foto'] = '../../assets/img/carousel/halaman-MINH.JPG';
        $filepath = $barang['foto'];
    }
    $update = mysqli_query($db, "UPDATE carousel SET foto='$filepath',judul='$judul',sub_judul='$sub_judul' WHERE id = '$id'");

    
    if ($update == false) { ?>
        <script type="text/javascript">
            alert("Gagal Mengubah Data");
            window.location.href = "../carousel.php";
        </script>
    <? } else {
        header("Location: ../carousel.php");
    }

} elseif ($opsi == "delete") {
    $id = $_GET['id'];
    $delete = mysqli_query($db, "DELETE FROM carousel WHERE id = '$id'");
    if ($delete == false) { ?>
        <script type="text/javascript">
            alert("Gagal Hapus Data");
            window.location.href = "../carousel.php";
        </script>
<? } else {
        $max_id = mysqli_fetch_assoc(mysqli_query($db, "SELECT max(id) as max_id FROM carousel"));
        $ai = $max_id['max_id'] + 1;
        mysqli_query($db, "ALTER TABLE carousel auto_increment = $ai");

        header("Location: ../carousel.php");
    }
}
