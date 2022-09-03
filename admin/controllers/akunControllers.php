<?php
require_once('../../assets/koneksi.php');
// require('../../cekLogin.php');

// dapatken variable opsi
$opsi = $_GET['opsi'];

// opsi menambah akun/user
if ($opsi == "input") {

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        echo "error username <a href='../newUser.php'>Kembali</a>";
    }
    // batas
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        echo "error password <a href='../newUser.php'>Kembali</a>";
    }
    // batas
    if (isset($_POST['repassword'])) {
        $repassword = $_POST['repassword'];
    } else {
        echo "error re-password <a href='../newUser.php'>Kembali</a>";
    }

    // pengecekan password dan konfirmasi password
    if ($password != $repassword) {
        header("Location: ../newUser.php?error=repassword&username={$username}");
        exit();
    } else {
        $password = hash("sha256", $password);
    }

    // menyiapkan Query MySQL untuk dieksekusi
    $query = "INSERT INTO user (username,password) VALUES ('$username','$password')";
    // mengeksekusi MySQL Query
    $insert = mysqli_query($db, $query);

    // menangani ketika error pada saat eksekusi query
    if ($insert == false) { ?>
        <script type='text/javascript'>
            alert('Gagal Menambah Data');
            window.location.href = "../newUser.php";
        </script>
    <?php } else {
        header("Location: ../newUser.php?hasil=sukses&usernamedone={$username}");
    }
}

// update username dan username
if ($opsi == "update") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        echo "id tidak ditemukan";
    }
    // batas
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        echo "username tidak ditemukan";
    }
    // batas
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        echo "username tidak ditemukan";
    }
    $query = "UPDATE user SET username = '$username', username = '$username' WHERE id = $id";
    $update = mysqli_query($db, $query);

    if ($update == false) { ?>
        <script type='text/javascript'>
            alert('Gagal Mengubah Data User <?php echo $username ?>');
            window.location.href = "../akun.php";
        </script>
    <?php } else { ?>
        <script type='text/javascript'>
            alert('Sukses Mengubah Data User <?php echo $username ?>');
            window.location.href = "../akun.php";
        </script>
    <?php }
}

// ubah password
if ($opsi == "updatePass") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        echo "id tidak ditemukan";
    }
    // batas
    if (isset($_POST['pass_lama'])) {
        $pass_lama = $_POST['pass_lama'];
    } else {
        echo "pass_lama tidak ditemukan";
    }
    // batas
    if (isset($_POST['pass_baru'])) {
        $pass_baru = $_POST['pass_baru'];
    } else {
        echo "pass_baru tidak ditemukan";
    }
    // hasing password
    $pass_lama = hash("sha256", $pass_lama);

    $query = "SELECT password FROM user WHERE id=$id";
    $result = mysqli_query($db, $query);
    $Cpass = mysqli_fetch_assoc($result);

    if ($Cpass['password'] != $pass_lama) { ?>
        <script type='text/javascript'>
            alert('Password Gagal Diubah, Karena Password Lama Tidak Sesuai Dengan Yang Anda Masukkan');
            window.location.href = "../akun.php";
        </script>

        <?php } else {

        $pass_baru = hash("sha256", $pass_baru);

        $query = "UPDATE user SET password = '$pass_baru' WHERE id = $id";
        $update = mysqli_query($db, $query);

        if ($update == false) { ?>
            <script type='text/javascript'>
                alert('Gagal Mengubah Password User');
                window.location.href = "../akun.php";
            </script>
            <?php } else {
            if ($sessionid == $id) {
                // menghapus semua session yang telah didefinisikan
                session_destroy();
                // mengarahkan menuju halaman login
            ?>
                <script type='text/javascript'>
                    alert('Sukses Mengubah Password User');
                    alert('Silahkan Login Kembali, Karena Password Yang Anda Ubah Adalah Akun Yang Sedang Anda Gunakan');
                    window.location.href = "../login.php";
                </script>
            <?php
            } else { ?>
                <!-- menuju menu akun -->
                <script type='text/javascript'>
                    alert('Sukses Mengubah Password User');
                    window.location.href = "../akun.php";
                </script>
        <?php
            }
        }
    }
}
// opsi menghapus akun/user
if ($opsi == "delete") {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        echo "error id <a href='../akun.php'>Kembali</a>";
    }

    $query = "DELETE FROM user WHERE id = $id";
    $delete = mysqli_query($db, $query);

    // panggil data id_penduduk paling terakhir
    $query = "SELECT id,username FROM user ORDER BY id DESC";
    $result = mysqli_query($db, $query);
    $id_desc = mysqli_fetch_assoc($result);
    // jumlahkan data id_penduduk terakhir
    $ai = $id_desc['id'] + 1;

    // tetapkan auto incremet baru agar kembali terurut dari data sembelumnya
    $query = "ALTER TABLE user auto_increment=$ai";
    mysqli_query($db, $query);

    if ($delete == false) { ?>
        <script type='text/javascript'>
            alert('Gagal Menghapus Data User <?php echo $id_desc['username'] ?>');
            window.location.href = "../akun.php";
        </script>
    <?php } else { ?>
        <script type='text/javascript'>
            window.location.href = "../akun.php";
        </script>
<?php }
}
// login
if ($opsi == "login") {

    // mamvalidasi inputan
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        echo "username error";
    }

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        echo "password error";
    }
    // hasing password
    $password = hash("sha256", $password);

    // menyiapkan Query MySQL untuk dieksekusi
    $query = "SELECT * FROM user WHERE username='{$username}'";

    // mengekesekusi MySQL Query
    $result = mysqli_query($db, $query);

    // karena pemanggilan data hanya satu, maka menggunakan syntax di bawah ini. (intinya tidak menggunkan perulangan foreach)
    $data = mysqli_fetch_assoc($result);

    if (is_null($data)) {
        header("Location: ../login.php?error=username");
    } else if ($data['password'] != $password) {
        header("Location: ../login.php?error=password&username={$username}");
    } else {
        // memulai fungsi SESSION, session hanya dapat digunakan setelah fungsi ini
        session_start();

        // status login dikonfirmasi benar
        $_SESSION['status'] = true;

        $_SESSION['nama'] = $data['username'];

        header('Location: ../index.php');
    }
}
?>