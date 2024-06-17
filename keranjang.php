<?php
include 'header.php';
if (isset($_POST['submit1'])) {
	$id_keranjang = $_POST['id'];
	$qty = $_POST['qty'];

	$edit = mysqli_query($conn, "UPDATE keranjang SET qty = '$qty' where id_keranjang = '$id_keranjang'");
	if ($edit) {
		echo "
		<script>
		alert('KERANJANG BERHASIL DIPERBARUI');
		window.location = 'keranjang.php';
		</script>
		";
	}
} else if (isset($_GET['del'])) {
	$id_keranjang = $_GET['id'];
	$del = mysqli_query($conn, "DELETE FROM keranjang WHERE id_keranjang = '$id_keranjang'");
	if ($del) {
		echo "
		<script>
		alert('1 PRODUK DIHAPUS');
		window.location = 'keranjang.php';
		</script>
		";
	}
}
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
        /* Warna Maroon */
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

    @media (min-width: 769px) {
        .img-responsive {
            max-width: 100%;
            height: auto;
        }
        
        .table td img {
            max-width: 150px; /* Sesuaikan ukuran sesuai kebutuhan */
            height: auto;
        }
    }

    @media (max-width: 768px) {
        .action-buttons,
        .product-actions {
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }

        .action-buttons .btn,
        .product-actions .btn {
            margin-bottom: 10px;
        }

        .table thead {
            display: none;
        }

        .table tbody tr {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .table tbody td {
            display: block;
            width: 100%;
            text-align: right;
        }

        .table tbody td::before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
        }
    }

    .table-responsive {
        margin-bottom: 15px;
    }

    .img-responsive {
        width: 100%;
        height: auto;
        object-fit: contain; /* Memastikan gambar sesuai dalam sel tabel */
    }
</style>

</head>

<body>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notifikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalMessage">
        <!-- Pesan akan ditampilkan di sini -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- content -->

	<div class="container" style="padding-bottom: 300px;">
		<h2 style=" width: 100%; border-bottom: 4px solid #ff8680"><b>Keranjang</b></h2>
		<div class="table-responsive">
			<table class="table table-striped">
				<?php
				if (isset($_SESSION['user'])) {
					$kode_cs = $_SESSION['kd_cs'];
					// CEK JUMLAH KERANJANG
					$cek = mysqli_query($conn, "SELECT * FROM keranjang WHERE kode_customer = '$kode_cs'");
					$jml = mysqli_num_rows($cek);

					if ($jml > 0) {
				?>
						<br>
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Image</th>
								<th scope="col">Nama</th>
								<th scope="col">Harga</th>
								<th scope="col">Qty</th>
								<th scope="col">SubTotal</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php
						if (isset($_SESSION['kd_cs'])) {
							$kode_cs = $_SESSION['kd_cs'];

							$result = mysqli_query($conn, "SELECT k.id_keranjang as keranjang, k.kode_produk as kd, k.nama_produk as nama, k.qty as jml, p.image as gambar, p.harga as hrg FROM keranjang k join produk p on k.kode_produk=p.kode_produk WHERE kode_customer = '$kode_cs'");
							$no = 1;
							$hasil = 0;
							while ($row = mysqli_fetch_assoc($result)) {

						?>
								<tbody>
									<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
										<input type="hidden" name="id" value="<?php echo $row['keranjang']; ?>">
										<tr>
											<th scope="row" data-label="No"><?= $no; ?></th>
											<td data-label="Image"><img src="image/produk/<?= $row['gambar']; ?>" class="img-responsive"></td>
											<td data-label="Nama"><?= $row['nama']; ?></td>
											<td data-label="Harga">Rp.<?= number_format($row['hrg']); ?></td>
											<td data-label="Qty"><input type="number" name="qty" class="form-control text-center" value="<?= $row['jml']; ?>"></td>
											<td data-label="SubTotal">Rp.<?= number_format($row['hrg'] * $row['jml']); ?></td>
											<td data-label="Action" class="product-actions">
												<button type="submit" name="submit1" class="btn btn-warning">Update</button>
												<a href="keranjang.php?del=1&id=<?= $row['keranjang']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus ?')">Delete</a>
											</td>
										</tr>
									</form>
							<?php
								$sub = $row['hrg'] * $row['jml'];
								$hasil += $sub;
								$no++;
							}
						}
							?>

							<tr>
								<td colspan="7" style="text-align: right; font-weight: bold;">Grand Total = Rp.<?= number_format($hasil); ?></td>
							</tr>
							<tr>
								<td colspan="7" style="text-align: right; font-weight: bold;" class="action-buttons">
									<a href="index.php" class="btn btn-maroon">Lanjutkan Belanja</a>
									<a href="checkout.php?kode_cs=<?= $kode_cs; ?>" class="btn btn-maroon">Checkout</a>
								</td>
							</tr>
					<?php
					} else {
						echo "
							<tr>
							<th scope='col'>No</th>
							<th scope='col'>Image</th>
							<th scope='col'>Nama</th>
							<th scope='col'>Harga</th>
							<th scope='col'>Qty</th>
							<th scope='col'>SubTotal</th>
							<th scope='col'>Action</th>
							</tr>
							<tr>
							<td colspan='7' class='text-center bg-warning'><h5><b>KERANJANG BELANJA ANDA KOSONG </b></h5></td>
							</tr>
							";
					}
				} else {
					echo "<tr>
						<td colspan='7' class='text-center bg-danger'><h5><b>SILAHKAN LOGIN TERLEBIH DAHULU SEBELUM BERBELANJA</b></h5></td>
						</tr>";
				}
					?>
								</tbody>
			</table>
		</div>
	</div>

	<?php
	include 'footer.php';
	?>
</body>

</html>
