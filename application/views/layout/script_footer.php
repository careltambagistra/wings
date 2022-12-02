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
<script src="<?= base_url(); ?>assets_dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>assets_dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assets_dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets_dashboard/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>assets_dashboard/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets_dashboard/dist/js/demo.js"></script>

<script>
	$(function () {
		/** add active class and stay opened when selected */
		var url = window.location;

// for sidebar menu entirely but not cover treeview
		$('ul.nav-sidebar a').filter(function () {
			return this.href == url;
		}).addClass('active');

// for treeview
		$('ul.nav-treeview a').filter(function () {
			return this.href == url;
		}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

	});
</script>
<script>
  $(function() {
    $(".example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
