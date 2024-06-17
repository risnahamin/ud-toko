<?php
include 'header.php';

// pesanan baru 
$result1 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE terima = 0 and tolak = 0");
$jml1 = mysqli_num_rows($result1);

// pesanan dibatalkan/ditolak
$result2 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  tolak = 1");
$jml2 = mysqli_num_rows($result2);

// pesanan diterima
$result3 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  terima = 1");
$jml3 = mysqli_num_rows($result3);
?>

<style>
    /* CSS for background image */
    body {
        background-image: url('../image/home/7.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        font-family: 'Poppins', sans-serif;
        color: #fff;
    }

    .container {
        margin-top: 50px;
    }

    .card {
        background-color: #800000;
        color: #fff;
        padding: 20px;
        text-align: center;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
        margin-bottom: 20px; /* Add margin-bottom for spacing between cards */
    }

    .card:hover {
        transform: scale(1.02);
    }

    .card h4 {
        margin-bottom: 20px;
        font-weight: bold;
    }

    .card h4 small {
        font-size: 14px;
        color: #fff;
    }

    .card .count {
        font-size: 56pt;
        color: #fff;
        font-weight: bold;
        margin-bottom: 0;
    }

    .icon {
        font-size: 48pt;
        color: #fff;
    }

    /* Media query for mobile view */
    @media (max-width: 768px) {
        .card {
            padding: 15px;
        }

        .card h4, .card h4 small {
            font-size: 20px; /* Increase font size for better readability on mobile */
        }

        .card .count {
            font-size: 36pt; /* Adjust the count font size */
        }

        .icon {
            font-size: 50pt; /* Adjust the icon font size */
        }
    }
</style>

    
    

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <i class="fas fa-shopping-cart icon"></i>
                <h4>PESANAN BARU</h4>
                <h4 class="count"><?= $jml1; ?></h4>
                <h4><small>Belum diproses</small></h4>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <i class="fas fa-times-circle icon"></i>
                <h4>PESANAN DIBATALKAN</h4>
                <h4 class="count"><?= $jml2; ?></h4>
                <h4><small>Ditolak</small></h4>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <i class="fas fa-check-circle icon"></i>
                <h4>PESANAN DITERIMA</h4>
                <h4 class="count"><?= $jml3; ?></h4>
                <h4><small>Sudah diproses</small></h4>
            </div>
        </div>
    </div>
</div>


