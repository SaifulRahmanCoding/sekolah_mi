<?php
require_once('../../assets/koneksi.php');
require('../cekLogin.php');

$jenis = $_GET['jenis'];

if ($jenis == "ucapan") {

    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    // mengambil data file upload
    $files = $_FILES['foto'];
    $path = "../../assets/img/ucapan/";

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

    $select = mysqli_query($db, "SELECT * FROM ucapan");
    $jml = mysqli_num_rows($select);
    if ($jml == 0) {
        $query = mysqli_query($db, "INSERT INTO ucapan(foto,judul,konten) VALUES ('$filepath','$judul','$konten')");
    } else {
        if ($files['name'] == "") {
            $query = mysqli_query($db, "UPDATE ucapan SET judul='$judul',konten='$konten'");
        } else {
            $query = mysqli_query($db, "UPDATE ucapan SET foto='$filepath', judul='$judul',konten='$konten'");
        }
    }
} elseif ($jenis == "seo") {
    $author = $_POST['author'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];
    $robots_index = $_POST['robots_index'];
    $robots_follow = $_POST['robots_follow'];

    $select = mysqli_query($db, "SELECT * FROM seo");
    $jml = mysqli_num_rows($select);

    if ($jml == 0) {
        $query = mysqli_query($db, "INSERT INTO seo(author,description,keywords,robots_index,robots_follow) VALUES ('$author','$description','$keywords','$robots_index','$robots_follow')");
    } else {
        $query = mysqli_query($db, "UPDATE seo SET author='$author',description='$description',keywords='$keywords',robots_index='$robots_index',robots_follow='$robots_follow'");
    }
} elseif ($jenis == "visiMisi") {
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];
    $tujuan = $_POST['tujuan'];

    $select = mysqli_query($db, "SELECT * FROM visi_misi");
    $jml = mysqli_num_rows($select);

    if ($jml == 0) {
        $query = mysqli_query($db, "INSERT INTO visi_misi(visi,misi,tujuan) VALUES ('$visi','$misi','$tujuan')");
    } else {
        $query = mysqli_query($db, "UPDATE visi_misi SET visi='$visi',misi='$misi',tujuan='$tujuan'");
    }
} elseif ($jenis == "about") {
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];

    // mengambil data file upload
    $files = $_FILES['foto'];
    $path = "../../assets/img/about/";

    // file upload
    if (!empty($files['name'])) {
        $filepath = $path . $files['name'];
        $upload = move_uploaded_file($files['tmp_name'], $filepath);
    } else {
        $upload = false;
    }

    // menangani error saat mengupload
    if ($upload = false) {
        $filepath = '../../assets/img/no_image.jpg';
    }

    $select = mysqli_query($db, "SELECT * FROM about");
    $jml = mysqli_num_rows($select);
    if ($jml == 0) {
        $query = mysqli_query($db, "INSERT INTO about(foto,keterangan,judul) VALUES ('$filepath','$keterangan','$judul')");
    } else {
        if ($files['name'] == "" && $judul == "") {
            $query = mysqli_query($db, "UPDATE about SET keterangan='$keterangan'");
        } elseif ($files['name'] == "") {
            $query = mysqli_query($db, "UPDATE about SET judul = '$judul',keterangan='$keterangan'");
        } else {
            $query = mysqli_query($db, "UPDATE about SET foto='$filepath',keterangan='$keterangan'");
        }
    }
} elseif ($jenis == "dataMinor") {
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // mengambil data file upload
    $files = $_FILES['logo'];
    $path = "../../assets/img/logo/";

    // file upload
    if (!empty($files['name'])) {
        $filepath = $path . $files['name'];
        $upload = move_uploaded_file($files['tmp_name'], $filepath);
    } else {
        $upload = false;
    }

    // menangani error saat mengupload
    if ($upload = false) {
        $filepath = '../../assets/img/no_image.jpg';
    }

    $select = mysqli_query($db, "SELECT * FROM data_minor");
    $jml = mysqli_num_rows($select);
    if ($jml == 0) {
        $query = mysqli_query($db, "INSERT INTO data_minor(logo,telp,email,alamat) VALUES ('$filepath','$telp','$email','$alamat')");
    } else {
        if ($files['name'] == "") {
            $query = mysqli_query($db, "UPDATE data_minor SET telp='$telp',email = '$email',alamat='$alamat'");
        } else {
            $query = mysqli_query($db, "UPDATE data_minor SET logo='$filepath',telp='$telp',email = '$email',alamat='$alamat'");
        }
    }
}

if ($query == false) { ?>
    <script type="text/javascript">
        alert("Gagal Mengubah Data");
        window.location.href = "../pengaturanLain.php";
    </script>
<? } else { ?>
    <script type="text/javascript">
        alert("Sukses Mengubah Data");
        window.location.href = "../pengaturanLain.php";
    </script>
<?php }
?>