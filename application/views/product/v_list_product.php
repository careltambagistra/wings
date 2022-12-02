<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"><?= $header ?></h1>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<section class="content">
		<div class="card card-info">
			<div class="card-footer">
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th style="text-align:center">Product Name</th>
								<th style="text-align:center">Price</th>
								<th style="text-align:center">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($products as $a) {
							?>
								<tr>
									<td style="text-align:center"><?= $a->product_name ?></td>
									<td style="text-align:center"><?= currency($a->price) ?></td>
									<td style="text-align:center">
										
									<a href="<?= site_url('ProductList/details/') . $a->product_code ?>" class="btn btn-sm btn-primary" title="Details"><i class="glyphicon glyphicon-pencil"></i> Details</a>
									<a href="<?= site_url('ProductList/report/') . $a->product_code ?>" class="btn btn-sm btn-primary" title="Report"><i class="glyphicon glyphicon-pencil"></i> Report</a>
									</td>
								</tr>
							<?php

							}
							?>
						</tbody>
					</table>
				</div>
			</div>
	</section>
</div>
<script>
	$(function() {
		$(".tombolHapus").on("click", function() {
			var id = $(this).data('id');
			SwalDelete(id);
		});
	});

	function SwalDelete(id) {
		Swal.fire({
			title: ' Hapus Data Transaksi Ini?',
			text: " ",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#20B2AA',
			cancelButtonColor: '#FF7F00',
			confirmButtonText: 'Hapus Data ',
			showLoaderOnConfirm: true,
			preConfirm: function() {
				return new Promise(function(resolve) {
					var url = "saldo/proses_hapus/"
					$.ajax({
						url: '<?= base_url() ?>' + url + id,
						type: "POST",
					})
							.done(function(id) {
								window.location.replace("<?= site_url("Transaksi") ?>");
								Swal.fire('Hapus Data Berhasil', 'Data Anda Telah Terhapus!', 'success')
							})
							.fail(function() {
								Swal.fire('Maaf', 'Data Anda Sudah Masuk proses Transaksi', 'error')
							});
				});
			},
		});
	}
</script>
