<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $header ?></title>
	
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets_dashboard/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet"
		href="<?= base_url(); ?>assets_dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets_dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets_dashboard/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets_dashboard/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet"
		href="<?= base_url(); ?>assets_dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets_dashboard/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets_dashboard/plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<script src="<?= base_url(); ?>assets_dashboard/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?= base_url(); ?>assets_dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
	
	
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<?php $this->load->view('layout/navbar'); ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view('layout/sidebar'); ?>
		<!--/.sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<?php $this->load->view($page); ?>
		<!-- /.content-wrapper -->

		<!-- Footer -->
		<?php $this->load->view('layout/footer'); ?>
		<!-- /.footer -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->

	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)

	</script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url(); ?>assets_dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?= base_url(); ?>assets_dashboard/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?= base_url(); ?>assets_dashboard/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?= base_url(); ?>assets_dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url(); ?>assets_dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?= base_url(); ?>assets_dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?= base_url(); ?>assets_dashboard/plugins/moment/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets_dashboard/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script
		src="<?= base_url(); ?>assets_dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
	</script>
	<!-- Summernote -->
	<script src="<?= base_url(); ?>assets_dashboard/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?= base_url(); ?>assets_dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
	</script>
	<!-- AdminLTE App -->
	<script src="<?= base_url(); ?>assets_dashboard/dist/js/adminlte.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?= base_url(); ?>assets_dashboard/dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url(); ?>assets_dashboard/dist/js/demo.js"></script>
</body>

</html>
