<?php 
include '../../koneksi/koneksi.php';

echo "Memulai skrip<br>";

// Validasi apakah parameter 'inv' ada
if (!isset($_GET['inv']) || empty($_GET['inv'])) {
    die("No invoice number provided.");
}

$inv = $_GET['inv'];

echo "Invoice number: $inv<br>";

// Gunakan prepared statement untuk menghindari SQL injection
$stmt = $conn->prepare("SELECT * FROM produksi WHERE invoice = ?");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param('s', $inv);
$execute_result = $stmt->execute();
if ($execute_result === false) {
    die("Execute failed: " . $stmt->error);
}
$result = $stmt->get_result();
if ($result === false) {
    die("Get result failed: " . $stmt->error);
}

echo "Query executed successfully.<br>";

while($row = mysqli_fetch_assoc($result)){
    $kodep = $row['kode_produk'];
    echo "Kode produk: $kodep<br>";
    
    $t_bom = mysqli_query($conn, "SELECT * FROM bom_produk WHERE kode_produk = '$kodep'");
    if ($t_bom === false) {
        die("Error fetching BOM: " . mysqli_error($conn));
    }

    while($row1 = mysqli_fetch_assoc($t_bom)){
        $kodebk = $row1['kode_bk'];
        echo "Kode bahan baku: $kodebk<br>";
        
        $inventory = mysqli_query($conn, "SELECT * FROM inventory WHERE kode_bk = '$kodebk'");
        if ($inventory === false) {
            die("Error fetching inventory: " . mysqli_error($conn));
        }
        $r_inv = mysqli_fetch_assoc($inventory);
        if ($r_inv === false) {
            die("Error fetching inventory result: " . mysqli_error($conn));
        }

        // Konversi nilai ke integer/float
        $kebutuhan = (int)$row1['kebutuhan'];    
        $qtyorder = (int)$row['qty'];
        $inven = (int)$r_inv['qty'];
        
        $bom = ($kebutuhan * $qtyorder);
        $hasil = $inven - $bom;

        echo "Mengurangi inventory: $kodebk, dari $inven menjadi $hasil<br>";

        $update_inventory = mysqli_query($conn, "UPDATE inventory SET qty = '$hasil' WHERE kode_bk = '$kodebk'");
        if ($update_inventory === false) {
            die("Error updating inventory: " . mysqli_error($conn));
        }

        if($update_inventory){
            $update_produksi = mysqli_query($conn, "UPDATE produksi SET terima = '1', status = '0' WHERE invoice = '$inv'");
            if ($update_produksi === false) {
                die("Error updating produksi: " . mysqli_error($conn));
            }

            echo "
            <script>
            alert('PESANAN BERHASIL DITERIMA, BAHAN BAKU TELAH DIKURANGKAN');
            window.location = '../produksi.php';
            </script>
            ";
        }
    }
}
echo "Selesai<br>";
?>
