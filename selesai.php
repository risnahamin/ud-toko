<?php include 'header.php'; ?>
<br><br><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Berhasil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        /* Styling untuk card */
        .card {
            width: 80%; /* Mengurangi lebar card agar sesuai dengan layar */
            margin: 20px auto; /* Menambahkan margin atas dan bawah untuk pemisahan dari header */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            text-align: center;
        }

        /* Styling untuk tombol */
        .btn-maroon {
            background-color: #800000;
            border: none; /* Menghilangkan border dari tombol */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-bottom: 10px; /* Menambahkan margin bawah untuk pemisahan antar tombol */
            margin-top: 10px;
            display: inline-block;
        }

        .btn-maroon:hover,
        .btn-maroon:focus,
        .btn-maroon:active,
        .btn-maroon.active {
            background-color: #660000;
            color: #fff;
            text-decoration: none;
        }

        /* Mengatur tampilan di perangkat mobile */
        @media (max-width: 768px) {
            .card {
                width: 90%; /* Menyesuaikan lebar card untuk layar yang lebih kecil */
            }
        }
    </style>
</head>

<body>
    <!-- Konten Card di luar Container Header -->
    <div class="card">
        <h2 class="bg-success" style="padding: 10px;">Checkout Berhasil</h2>
        <p>Terimakasih Sudah Berbelanja di Toko Kami. Pesananmu sedang diproses.</p>
        <p>Silahkan Chat admin untuk Melakukan pembayaran melalui via WhatsApp dibawah ini:</p>
        <a href="https://wa.me/6281234567890" target="_blank" class="btn-maroon">Bayar via WhatsApp</a>
        <a href="produk.php" class="btn-maroon">belanja lagi</a>
    </div>
    <br><br><br><br>

    <!-- Footer atau Konten Lainnya -->
    <?php include 'footer.php'; ?>

    
</body>

</html>
