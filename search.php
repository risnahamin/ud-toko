<?php
include 'header.php';

if (isset($_GET['query'])) {
    $query = mysqli_real_escape_string($conn, $_GET['query']);
    $stmt = $conn->prepare("SELECT * FROM produk WHERE nama LIKE ? OR deskripsi LIKE ?");
    $searchTerm = "%$query%";
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card-img-top {
            height: 200px; /* Tinggi gambar disesuaikan */
            object-fit: cover; /* Gambar di-fill */
        }
        .btn-detail {
            background-color: #800000; /* Warna merah maroon */
            border-color: #800000; /* Warna merah maroon */
            color: white; /* Warna teks putih */
        }
        .btn-detail:hover {
            background-color: #8B0000; /* Warna merah maroon yang lebih gelap */
            border-color: #8B0000; /* Warna merah maroon yang lebih gelap */
            color: white; /* Warna teks putih */
        }

    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Hasil Pencarian untuk "<?php echo htmlspecialchars($query); ?>"</h2>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="image/produk/<?php echo $row['image']; ?>" alt="<?php echo $row['nama']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nama']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rp. <?php echo number_format($row['harga']); ?></h6>
                            <a href="detail_produk.php?produk=<?php echo $row['kode_produk']; ?>" class="btn btn-primary btn-sm btn-detail">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php if (mysqli_num_rows($result) == 0) { ?>
            <div class="alert alert-warning mt-3" role="alert">
                Tidak ada hasil yang ditemukan untuk "<?php echo htmlspecialchars($query); ?>".
            </div>
        <?php } ?>
    </div>

  

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</body>
</html>
