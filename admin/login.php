<?php
// filter error ketika $_GET['error'] tidak ada
if (empty($_GET['error'])) { $_GET['error']=""; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Login</title>
	<?php require('config/style.php'); ?>
</head>
<body style="background-image: url('../assets/img/login.jpg'); background-size: cover;">
	<div id="login" class="d-flex flex-column justify-content-center align-items-center">

		<div class="box col-10 col-md-5 col-lg-3 bg-white shadow rounded px-4 py-4 pb-5">
			<!-- logo -->
			<div id="logo" class="text-center">
				<img src="../assets/img/logo/logo-mi.jpg" alt="...">
				<h5 class="mt-1 mb-4 fw-bolder">MI Nurul Hikmah</h5>
			</div>
			
			<form action="controllers/akunControllers.php?opsi=login" method="POST">

				<div class="input-group pb-2">
					<span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
					<input name="username" id="username" type="username" class="form-control bg-light <?php echo ($_GET['error']=="username") ? "is-invalid" : "" ?>" placeholder="username" value="<?php echo (isset($_GET['username'])) ? $_GET['username'] : "" ?>" required>
				</div>
				<!-- pesan error -->
				<?php if($_GET['error']=="username") : ?>
					<div class="p-1 fst-italic" style="font-size:11px; color:#FF3F3F;">
						*Username Belum Terdaftar
					</div>
				<?php endif; ?>

				<div class="input-group mt-2">
					<span class="input-group-text" id="basic-addon1">🔒︎</span>
					
					<input name="password" id="password" type="password" class="form-control bg-light <?php echo ($_GET['error']=="password") ? "is-invalid" : "" ?>" placeholder="Password" required>
				</div>
				<!-- pesan error -->
				<?php if($_GET['error']=="password") : ?>
					<div class="p-1 fst-italic" style="font-size:11px; color:#FF3F3F;">
						*Password Salah
					</div>
				<?php endif; ?>

				<div class="d-flex justify-content-center">
					<input name="submit" type="submit" value="Login" class="col-12 btn btn-success mt-4">
				</div>
			</form>
		</div>
	</div>
</body>
</html>