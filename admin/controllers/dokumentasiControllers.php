<?php
require_once('../../assets/koneksi.php');
require('../cekLogin.php');
$opsi = $_GET['opsi'];

if ($opsi == "input") {
    $keterangan = $_POST['keterangan'];

    // mengambil data file upload
    $files = $_FILES['foto'];
    $path = "../../assets/img/dokumentasi/";

    // file upload
    if (!empty($files['name'])) {
        $filepath = $path . $files['name'];
        $upload = move_uploaded_file($files['tmp_name'], $filepath);
    } else {
        $upload = false;
    }

    // menangani error saat mengupload
    if ($upload = false) {
        $filepath = '../../assets/img/dokumentasi/default.jpg';
    }

    $query = "INSERT INTO dokumentasi(ket,foto) VALUES ('{$keterangan}','{$filepath}')";

    // mengeksekusi MySQL Query
    $insert = mysqli_query($db, $query);

    // menangani ketika error pada saat eksekusi query
    if ($insert == false) { ?>
        <script type="text/javascript">
            alert("Gagal Menambah Data");
            window.location.href = "../dokumentasi.php";
        </script>
    <? } else {
        header("Location: ../dokumentasi.php");
    }
} elseif ($opsi == "edit") {
    $id = $_POST['id'];
    $keterangan = $_POST['keterangan'];

    // eksekusi Query
    $result = mysqli_query($db, "SELECT * FROM dokumentasi WHERE id = '{$id}'");

    // fetching data
    foreach ($result as $dokumentasi) {
        $fotoLama = $dokumentasi['foto'];
    }
    // mengambil data file upload
    $files = $_FILES['foto'];
    $path = "../../assets/img/dokumentasi/";

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
        $filepath = '../../assets/img/dokumentasi/default.jpg';
    }
    $update = mysqli_query($db, "UPDATE dokumentasi SET foto='$filepath',ket='$keterangan' WHERE id = '$id'");


    if ($update == false) { ?>
        <script type="text/javascript">
            alert("Gagal Mengubah Data");
            window.location.href = "../dokumentasi.php";
        </script>
    <? } else {
        header("Location: ../dokumentasi.php");
    }
} elseif ($opsi == "delete") {
    $id = $_GET['id'];
    $delete = mysqli_query($db, "DELETE FROM dokumentasi WHERE id = '$id'");

    if ($delete == false) { ?>
        <script type="text/javascript">
            alert("Gagal Hapus Data");
            window.location.href = "../dokumentasi.php";
        </script>
<? } else {
        $max_id = mysqli_fetch_assoc(mysqli_query($db, "SELECT max(id) as max_id FROM dokumentasi"));
        $ai = $max_id['max_id'] + 1;
        mysqli_query($db, "ALTER TABLE dokumentasi auto_increment = $ai");

        header("Location: ../dokumentasi.php");
    }
}
