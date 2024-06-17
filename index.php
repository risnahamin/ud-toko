<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
</head>

<body>

    <!-- IMAGE -->
    <div class="container-fluid" style="margin: 0;padding: 0;">
        <div class="image">
            <img src="image/home/3.jpeg">
            <div class="image-overlay">
                <div class="image-content">
                    <h1 class="animate__animated animate__fadeInDown">Selamat Datang di Dunia Furniture Kami</h1>
                    <p class="animate__animated animate__fadeInDown" style="font-size: 17px;">Temukan Koleksi Terbaik & Hadirkan Ketenangan <br> di Rumah Anda</p><br>
                    <a href="user_login.php" style="padding: 10px 20px; background-color: #800000; color: #ffffff; text-decoration: none; border-radius: 5px; display: inline-block; font-size: 20px; transition: background-color 0.3s ease; border: 2px solid #800000;">
                        Shop Now
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right" style="width: 12px; height: 25px; vertical-align: middle; margin-left: 5px;">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Fitur -->
    <div class="container">
        <div class="section-title"></div>
        <h2 style="text-align: center; margin-top: 50px;"><b>Kenapa Memilih Kami?</b></h2>
        <br>
        <div class="custom-card-container">
            <div class="custom-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box icon" viewBox="0 0 16 16">
                    <path d="M8.643.757a1.5 1.5 0 0 1-1.286 0L1.68 2.737 8 5.383l6.32-2.646-5.677-1.98zM16 4.383l-5.657 2.37v6.204l5.657-2.371V4.383zM9 9.57V3.818l5-2v6.254l-5 2zm-.354 6.642-5-2.304V7.254l5 2.167v6.791zm-.293-7.166-5.354-2.29V2.383l5.354 2.29v4.473z" />
                </svg>
                <h5 class="custom-card-title">Pilihan Luas</h5>
                <p class="custom-card-text">Temukan berbagai macam pilihan furnitur untuk ruang luas Anda.</p>
            </div>
            <div class="custom-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-brush icon" viewBox="0 0 16 16">
                    <path d="M15.825.54a3.12 3.12 0 0 0-4.414 0L10.1 1.852l4.146 4.147 1.313-1.313a3.12 3.12 0 0 0 0-4.414l-.734-.734zm-6.04 1.874l1.181-1.182L2.308 7.73l-.59 2.654a2 2 0 0 0 2.518 2.518l2.654-.59 7.657-7.657-1.182-1.181L5.657 11.52l-1.472.328.328-1.472 7.208-7.208z" />
                </svg>
                <h5 class="custom-card-title">Desain Unik</h5>
                <p class="custom-card-text">Dapatkan desain furnitur unik yang cocok dengan gaya Anda.</p>
            </div>
            <div class="custom-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-truck icon" viewBox="0 0 16 16">
                    <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h8A1.5 1.5 0 0 1 11 1.5V4h1a1 1 0 0 1 .99.858L14 7.68V12h.5a.5.5 0 0 1 0 1H14v1.5a.
                    5.5 0 0 1-1 0V13H3v1.5a.5.5 0 0 1-1 0V13H.5a.5.5 0 0 1 0-1H1V7.5H.5a.5.5 0 0 1 0-1H1V1.5zM2 7.5V12h9V7.68L12.21 5H11v3.5a.5.5 0 0 1-1 0V1.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5V7.5zm3.5 5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zM3 14.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0zM13 14.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm-2-.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0z" />
                </svg>
                <h5 class="custom-card-title">Pengiriman Cepat</h5>
                <p class="custom-card-text">Nikmati pengiriman cepat untuk setiap pembelian di toko kami.</p>
            </div>
        </div>
    </div>

    <!-- PRODUK TERBARU -->
    <div class="container">
        <div class="section-title"></div>
        <h1 style=" width: 100%; border-bottom: 4px solid #800000; margin-top: 80px"></h1>
        <h2 style="text-align: center; margin-top: 50px;"><b>Produk Kami</b></h2>
        <br>
        <div class="row">
            <?php
            // Assuming connection to the database is already established
            $result = mysqli_query($conn, "SELECT * FROM produk LIMIT 4"); // Menampilkan hanya 4 produk
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="image/produk/<?= $row['image']; ?>">
                        <div class="caption">
                            <h3><?= $row['nama']; ?></h3>
                            <h4>Rp.<?= number_format($row['harga']); ?></h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-maroon btn-block">Detail</a>
                                </div>
                                <?php if (isset($_SESSION['kd_cs'])) { ?>
                                    <div class="col-md-6">
                                        <a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-maroon btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-6">
                                        <a href="keranjang.php" class="btn btn-maroon btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- Tombol untuk melihat produk berikutnya -->
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="produk.php" class="btn btn-maroon btn-lg" style="margin-top: 20px; font-size: 15px">Lihat Produk Lainnya <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right" style="		width: 12px; height: 25px; vertical-align: middle; margin-left: 5px">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg></a>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <?php include 'footer.php'; ?>

   

</body>

</html>