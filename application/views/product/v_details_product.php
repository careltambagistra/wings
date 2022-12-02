<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">

				</div>

			</div>
		</div>
	</div>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<input readonly type="text" class="form-control" id="product-name"
											   name="nama" value="<?= $detail->product_name ?>" >
									</div>
									<div class="form-group">
										<input readonly type="text" class="form-control form-control-sm" id="discount"
											   name="discount" value="<?= currency($detail->discount) ?>">
									</div>
                                    <div class="form-group">
										<input readonly type="text" class="form-control form-control-sm" id="price"
											   name="price" value="<?= currency($detail->price) ?>">
									</div>
                                    <div class="form-group">
										<input readonly type="text" class="form-control form-control-sm" id="dimension"
											   name="dimension" value="<?= $detail->dimension ?>">
									</div>
                                    <div class="form-group">
										<input readonly type="text" class="form-control form-control-sm" id="unit"
											   name="unit" value="<?= $detail->unit ?>">
									</div>
								</div>
							</div>
							<input type="hidden" id="id" name="id"
								   value="<?= $detail->product_code; ?>"/>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  -->
</div>