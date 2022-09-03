<?php
// kalau pakai offline
$db = new mysqli("localhost","root","","sekolah_mi");
// cek koneksi
if ($db->connect_error) {
	echo "Gagal menyambungkan ke MySQL : ".$db->connect_error;
	exit();
}
?>