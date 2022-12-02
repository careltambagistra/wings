<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Dosen</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets_login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets_login/css/main.css">
	<script src="<?= base_url(); ?>assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
</head>
<body>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
			<?php $this->load->view($page) ?>
		</div>
	</div>
</div>
<!--===============================================================================================-->
<script src="<?= base_url(); ?>assets_login/vendor/animsition/js/animsition.min.js"></script>
<script src="<?= base_url(); ?>assets_login/vendor/bootstrap/js/popper.js"></script>
<script src="<?= base_url(); ?>assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets_login/vendor/select2/select2.min.js"></script>
<script src="<?= base_url(); ?>assets_login/vendor/daterangepicker/moment.min.js"></script>
<script src="<?= base_url(); ?>assets_login/vendor/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url(); ?>assets_login/vendor/countdowntime/countdowntime.js"></script>
<script src="<?= base_url(); ?>assets_login/js/main.js"></script>
<script src="<?= base_url(); ?>assets_login/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script>
	$(function () {
		$('#form-login').validate()
	})
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</body>
</html>
