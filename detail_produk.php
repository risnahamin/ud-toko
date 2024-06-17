<?php
include 'header.php';
$kode = mysqli_real_escape_string($conn, $_GET['produk']);
$result = mysqli_query($conn, "SELECT * FROM produk WHERE kode_produk = '$kode'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

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
		}

		@media (max-width: 767px) {
			h2 {
				font-size: 20px;
			}

			.table {
				font-size: 14px;
			}

			.table td {
				display: block;
				width: 100%;
				text-align: left;
			}

			.table input {
				width: 100%;
			}

			.thumbnail img {
				width: 100%;
			}

			.btn-maroon {
				width: 100%;
				margin-bottom: 10px;
			}
		}
	</style>
</head>

<body>
	<br><br><br><br>
	<div class="container">
		<h2 style="width: 100%; border-bottom: 4px solid #800000"><b>Detail produk</b></h2>
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="image/produk/<?= $row['image']; ?>" width="400">
				</div>
			</div>

			<div class="col-md-8">
				<form action="proses/add.php" method="GET">
					<input type="hidden" name="kd_cs" value="<?= $kode_cs; ?>">
					<input type="hidden" name="produk" value="<?= $kode;  ?>">
					<input type="hidden" name="hal" value="2">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><b>Nama</b></td>
								<td><?= $row['nama']; ?></td>
							</tr>
							<tr>
								<td><b>Harga</b></td>
								<td>Rp.<?= number_format($row['harga']); ?></td>
							</tr>
							<tr>
								<td><b>Deskripsi</b></td>
								<td><?= $row['deskripsi'];  ?></td>
							</tr>
							<tr>
								<td><b>Jumlah</b></td>
								<td><input class="form-control" type="number" min="1" name="jml" value="1" style="width: 155px;"></td>
							</tr>
						</tbody>
					</table>
					<?php
					if (isset($_SESSION['user'])) {
					?>
						<button type="submit" class="btn btn-maroon"><i class="glyphicon glyphicon-shopping-cart"></i> Tambahkan ke Keranjang</button>
					<?php
					} else {
					?>
						<a href="keranjang.php" class="btn btn-maroon"><i class="glyphicon glyphicon-shopping-cart"></i> Tambahkan ke Keranjang</a>
					<?php
					}
					?>
					<a href="index.php" class="btn btn-maroon"> Kembali Belanja</a>
				</form>
			</div>
		</div>
	</div>
	<br><br>
</body>

</html>

<?php
include 'footer.php';
?>
