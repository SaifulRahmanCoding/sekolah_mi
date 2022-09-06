<?php
// kalau pakai offline
$db = new mysqli("localhost","root","","sekolah_mi");

// $db = mysqli_connect("sql201.ezyro.com", "ezyro_32519759", "adbx88pam0lja", "ezyro_32519759_sekolah_mi");
// cek koneksi
if ($db->connect_error) {
	echo "Gagal menyambungkan ke MySQL : ".$db->connect_error;
	exit();
}
?>