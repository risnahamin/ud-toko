<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Footer with Background Color and White Text</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style>
		footer {
			background-color: #410805;
			/* Warna latar belakang footer */
			color: #fff;
			/* Warna teks putih */
		}

		.footer-content {
			padding-bottom: 50px;
		}

		.footer-heading {
			color: #fff;
			/* Warna teks heading putih */
		}

		.footer-menu a {
			color: #fff;
			/* Warna teks link putih */
			text-decoration: none;
			/* Menghapus garis bawah */
		}

		.footer-menu a:hover {
			color: #d4d4d4;
			/* Warna teks link saat hover */
		}
	</style>
</head>

<body>
	<footer>
		<div class="container footer-content">
			<div class="row">
				<div class="col-md-4">
					<h3 class="footer-heading"><b>FURNITURE-UD SURGAUM</b></h3>
					<p>Jl. Tanah Merah Indah 1 No.10C</p>
					<p><i class="glyphicon glyphicon-earphone"></i> +6287804616097</p>
					<p><i class="glyphicon glyphicon-envelope"></i> furniturud@gmail.com</p>
				</div>
				<div class="col-md-4 footer-menu"><br>
					<h5><b>Menu</b></h5>
					<p><a href="produk.php">Produk</a></p>
					<p><a href="about.php">Tentang kami</a></p>
					<p><a href="#">Hubungi Kami</a></p>
				</div>
				<div class="col-md-4">
					<!-- Optional content for the third column -->
				</div>
			</div>
		</div>

	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function() {
			$(document).click(function(event) {
				var clickover = $(event.target);
				var _opened = $(".navbar-collapse").hasClass("in");
				if (_opened === true && !clickover.hasClass("navbar-toggle")) {
					$(".navbar-toggle").click();
				}
			});
		});
	</script>
</body>

</html>