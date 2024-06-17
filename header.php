<?php
session_start();
include 'koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>FURNITURE-UD SURGAUM</title>
    <link rel="icon" href="image/home/logo1.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
        @media (max-width: 767px) {
            .navbar-header {
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: center;
            }
            .navbar-form {
                display: none;
                position: absolute;
                top: 50px;
                right: 10px;
                width: 90%;
                background: white;
                z-index: 1000;
                border: 1px solid #ddd;
                padding: 10px;
            }
            .navbar-form.active {
                display: flex;
            }
            .navbar-form .form-control {
                width: 100%;
            }
            .search-icon {
                display: inline-block;
                cursor: pointer;
            }
        }
        @media (min-width: 768px) {
            .search-icon {
                display: none;
            }
            .navbar-form {
                display: inline-block !important;
            }
        }

        body {
            padding-top: 70px; /* Sesuaikan jika perlu untuk navbar yang tetap */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="padding: 5px; z-index: 3;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:#007bff; display: flex; align-items: center; text-decoration: none;">
                <img src="image/home/logo-ud.png" alt="Logo" style="height: 45px; margin-right: 10px;">
            </a>
            <div class="search-icon" onclick="toggleSearch()">
                <i class="glyphicon glyphicon-search"></i>
            </div>
            <form class="navbar-form" action="search.php" method="GET" id="searchForm">
                <div class="form-group">
                    <input type="text" class="form-control" name="query" placeholder="Cari produk...">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="manual.php">Manual Aplikasi</a></li>
                <?php
                if (isset($_SESSION['kd_cs'])) {
                    $kode_cs = $_SESSION['kd_cs'];
                    $cek = mysqli_query($conn, "SELECT kode_produk from keranjang where kode_customer = '$kode_cs' ");
                    $value = mysqli_num_rows($cek);
                ?>
                    <li><a href="keranjang.php"><i class="glyphicon glyphicon-shopping-cart"></i> <b>[ <?= $value ?> ]</b></a></li>
                <?php
                } else {
                    echo "<li><a href='keranjang.php'><i class='glyphicon glyphicon-shopping-cart'></i> [0]</a></li>";
                }
                if (!isset($_SESSION['user'])) {
                ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Akun <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="user_login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </li>
                <?php
                } else {
                ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?= $_SESSION['user']; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="riwayat.php">Riwayat belanja Anda</a></li>
                            <li><a href="proses/logout.php">Log Out</a></li>
                        </ul>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<script>
    function toggleSearch() {
        var searchForm = document.getElementById('searchForm');
        searchForm.classList.toggle('active');
        document.addEventListener('click', closeSearchOnClickOutside);
    }

    function closeSearchOnClickOutside(event) {
        var searchForm = document.getElementById('searchForm');
        var searchIcon = document.querySelector('.search-icon');
        if (!searchForm.contains(event.target) && !searchIcon.contains(event.target)) {
            searchForm.classList.remove('active');
            document.removeEventListener('click', closeSearchOnClickOutside);
        }
    }
</script>
<!-- Sertakan hanya satu versi Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
