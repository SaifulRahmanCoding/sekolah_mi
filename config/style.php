<?php
$s_dMinor = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM data_minor"));
$pecah_path_dMinor = (empty($s_dMinor['logo'])) ? "" : explode('../../', $s_dMinor['logo']);
?>
<!-- favicon -->
<link rel="shortcut icon" href="<?php echo (empty($s_dMinor['logo'])) ? "assets/img/no_image.jpg" : "$pecah_path_dMinor[1]"; ?>">
<!-- include bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- include style costum -->
<link rel="stylesheet" href="assets/css/style.css">
<!-- include fontawesome -->
<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/font-awesome-backup/css/all.css">


<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">