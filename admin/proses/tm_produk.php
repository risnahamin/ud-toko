<?php 
include '../../koneksi/koneksi.php';

// Generate kode bom
$kode = mysqli_query($conn, "SELECT kode_bom FROM bom_produk ORDER BY kode_bom DESC");
$data = mysqli_fetch_assoc($kode);
if($data['kode_bom'] == null){
	$format = "B0001";
} else {
	$num = substr($data['kode_bom'], 1, 4);
	$add = (int) $num + 1;
	$format = "B" . str_pad($add, 4, "0", STR_PAD_LEFT);
}

$kode = $_POST['kode'];
$nm_produk = $_POST['nama'];
$harga = $_POST['harga'];
$desk = $_POST['desk'];
$nama_gambar = $_FILES['files']['name'];
$size_gambar = $_FILES['files']['size'];
$tmp_file = $_FILES['files']['tmp_name'];
$eror = $_FILES['files']['error'];
$type = $_FILES['files']['type'];

// BOM
$kd_material = isset($_POST['material']) ? $_POST['material'] : [];
$keb = isset($_POST['keb']) ? $_POST['keb'] : [];

if($eror === 4){
	echo "
	<script>
	alert('TIDAK ADA GAMBAR YANG DIPILIH');
	window.location = '../tm_produk.php';
	</script>
	";
	die;
}

$ekstensiGambar = array('jpg','jpeg','png');
$ekstensiGambarValid = explode(".", $nama_gambar);
$ekstensiGambarValid = strtolower(end($ekstensiGambarValid));

if(!in_array($ekstensiGambarValid, $ekstensiGambar)){
	echo "
	<script>
	alert('EKSTENSI GAMBAR HARUS JPG, JPEG, PNG');
	window.location = '../tm_produk.php';
	</script>
	";
	die;
}

if($size_gambar > 1000000){
	echo "
	<script>
	alert('UKURAN GAMBAR TERLALU BESAR');
	window.location = '../tm_produk.php';
	</script>
	";
	die;
}

$namaGambarBaru = uniqid() . "." . $ekstensiGambarValid;

if (move_uploaded_file($tmp_file, "../../image/produk/".$namaGambarBaru)) {

	$result = mysqli_query($conn, "INSERT INTO produk (kode_produk, nama, image, deskripsi, harga) VALUES ('$kode', '$nm_produk', '$namaGambarBaru', '$desk', '$harga')");

	if($result) {
		$filter = array_filter($kd_material);
		$jml = count($filter) - 1;
		for ($no = 0; $no <= $jml; $no++) {
			mysqli_query($conn, "INSERT INTO bom_produk (kode_bom, kode_bk, kode_produk, nama_produk, kebutuhan) VALUES ('$format', '$kd_material[$no]', '$kode', '$nm_produk', '$keb[$no]')");
		}
		echo "
		<script>
		alert('PRODUK BERHASIL DITAMBAHKAN');
		window.location = '../m_produk.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert('GAGAL MENAMBAHKAN PRODUK');
		window.location = '../tm_produk.php';
		</script>
		";
	}
} else {
	echo "
	<script>
	alert('GAGAL MENGUPLOAD GAMBAR');
	window.location = '../tm_produk.php';
	</script>
	";
}

?>
