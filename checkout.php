<?php
include 'header.php';
$kd = mysqli_real_escape_string($conn, $_GET['kode_cs']);
$cs = mysqli_query($conn, "SELECT * FROM customer WHERE kode_customer = '$kd'");
$rows = mysqli_fetch_assoc($cs);
?>

<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Produk Kami</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		.btn-maroon {
			background-color: #800000;
			border-color: #800000;
			color: white;
		}

		.btn-maroon:hover,
		.btn-maroon:focus,
		.btn-maroon:active,
		.btn-maroon.active {
			background-color: #fff;
			border-color: #660000;
			color: #800000;
		}

		/* Media Query untuk Perangkat Mobile */
		@media (max-width: 768px) {
			.table-responsive {
				display: none;
			}

			.list-responsive {
				display: block;
			}
		}

		@media (min-width: 769px) {
			.list-responsive {
				display: none;
			}
		}

		.list-item {
			display: flex;
			flex-direction: column;
			border: 1px solid #ddd;
			margin-bottom: 10px;
			padding: 10px;
			border-radius: 5px;
		}

		.list-item div {
			margin-bottom: 5px;
		}

		.list-item div:last-child {
			margin-bottom: 0;
		}
	</style>
</head>

<body>
	<div class="container" style="padding-bottom: 200px">
		<h2 style="width: 100%; border-bottom: 4px solid #ff8680"><b>Checkout</b></h2>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<h4>Daftar Pesanan</h4>
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Qty</th>
							<th>Sub Total</th>
						</tr>
						<?php
						$result = mysqli_query($conn, "SELECT * FROM keranjang WHERE kode_customer = '$kd'");
						$no = 1;
						$hasil = 0;
						while ($row = mysqli_fetch_assoc($result)) {
						?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $row['nama_produk']; ?></td>
								<td>Rp.<?= number_format($row['harga']); ?></td>
								<td><?= $row['qty']; ?></td>
								<td>Rp.<?= number_format($row['harga'] * $row['qty']);  ?></td>
							</tr>
						<?php
							$total = $row['harga'] * $row['qty'];
							$hasil += $total;
							$no++;
						}
						?>
						<tr>
							<td colspan="5" style="text-align: right; font-weight: bold;">Grand Total = <?= number_format($hasil); ?></td>
						</tr>
					</table>
				</div>

				<!-- Tampilan Daftar untuk Mobile -->
				<div class="list-responsive">
					<?php
					$result = mysqli_query($conn, "SELECT * FROM keranjang WHERE kode_customer = '$kd'");
					$no = 1;
					$hasil = 0;
					while ($row = mysqli_fetch_assoc($result)) {
					?>
						<div class="list-item">
							<div><strong>No:</strong> <?= $no; ?></div>
							<div><strong>Nama:</strong> <?= $row['nama_produk']; ?></div>
							<div><strong>Harga:</strong> Rp.<?= number_format($row['harga']); ?></div>
							<div><strong>Qty:</strong> <?= $row['qty']; ?></div>
							<div><strong>Sub Total:</strong> Rp.<?= number_format($row['harga'] * $row['qty']);  ?></div>
						</div>
					<?php
						$total = $row['harga'] * $row['qty'];
						$hasil += $total;
						$no++;
					}
					?>
					<div style="text-align: right; font-weight: bold;">Grand Total = <?= number_format($hasil); ?></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-sm-12 bg-success">
				<h5>Pastikan Pesanan Anda Sudah Benar</h5>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 col-sm-12 bg-warning">
				<h5>Isi Form Di Bawah Ini</h5>
			</div>
		</div>
		<br>
		<form action="proses/order.php" method="POST">
			<input type="hidden" name="kode_cs" value="<?= $kd; ?>">
			<div class="form-group">
				<label for="exampleInputEmail1">Nama</label>
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?= $rows['nama']; ?>" readonly>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputPassword1">Provinsi</label>
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Provinsi" name="prov">
					</div>
				</div>

				<div class="col-md-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputPassword1">Kota</label>
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kota" name="kota">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputPassword1">Alamat</label>
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="almt">
					</div>
				</div>

				<div class="col-md-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputPassword1">Kode Pos</label>
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kode Pos" name="kopos">
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-maroon"><i class="glyphicon glyphicon-shopping-cart"></i> Order Sekarang</button>
			<a href="keranjang.php" class="btn btn-maroon">Cancel</a>
		</form>
	</div>

	<?php
	include 'footer.php';
	?>
</body>

</html>
