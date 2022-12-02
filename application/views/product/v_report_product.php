<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report Penjualan</title>
	<style type="text/css">
		html {
			font-family: "Verdana, Arial";
		}

		.content {
			width: 100%;
			font-size: 5px;
			padding: 5px
		}

		.title {
			text-align: center;
			font-size: 13px;
			padding-bottom: 8px;
			border-bottom: 1px solid;
		}

		.head {
			margin-top: 5px;
			margin-bottom: 10px;
			padding-bottom: 10px;
			border-bottom: 1px solid;
		}

		table {
			width: 100%;
			font-size: 10px;
		}

		.thanks {
			/* margin-top: 10px; */
			padding-top: 12px;
			padding-bottom: 8px;
			text-align: center;
			font-size: 10px;
			border-top: 1px solid;
		}

		@media print {
			@page {
				width: 90mm;
				margin: 0mm
			}
		}
	</style>
</head>

<body onload="window.print()">
<div class="content">
	<div class="title">
		<b>Report Penjualan</b>
	</div>
	<div class="head">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
				<th style="text-align:center">Product Code</th>
				<th style="text-align:center">Product Name</th>
				<th style="text-align:center">Discount</th>
				<th style="text-align:center">Price</th>
				<th style="text-align:center">Dimension</th>
				<th style="text-align:center">Unit</th>
			</tr>
			</thead>
			<tbody>
				<tr>
					<td style="text-align:center"><?= $report->product_code ?></td>
					<td style="text-align:center"><?= $report->product_name ?></td>
					<td style="text-align:center"><?= currency($report->discount) ?></td>
					<td style="text-align:center"><?= currency($report->price) ?></td>
					<td style="text-align:center"><?= $report->dimension ?></td>
					<td style="text-align:center"><?= $report->unit ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

</body>

</html>
