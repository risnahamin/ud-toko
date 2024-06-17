-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2024 pada 09.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backup`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$AIy0X1Ep6alaHDTofiChGeqq7k/d1Kc8vKQf1JZo0mKrzkkj6M626');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bom_produk`
--

CREATE TABLE `bom_produk` (
  `kode_bom` varchar(100) NOT NULL,
  `kode_bk` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `kebutuhan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bom_produk`
--

INSERT INTO `bom_produk` (`kode_bom`, `kode_bk`, `kode_produk`, `nama_produk`, `kebutuhan`) VALUES
('B0001', 'M0002', 'P0001', 'Roti Sobek', '-'),
('B0001', 'M0001', 'P0001', 'Roti Sobek', '-'),
('B0001', 'M0003', 'P0001', 'Roti Sobek', '-'),
('B0002', 'M0001', 'P0002', 'Maryam', '-'),
('B0002', 'M0005', 'P0002', 'Maryam', '-'),
('B0002', 'M0002', 'P0002', 'Maryam', '-'),
('B0003', 'M0002', 'P0003', 'Kue tart coklat', '-'),
('B0003', 'M0001', 'P0003', 'Kue tart coklat', '-'),
('B0003', 'M0005', 'P0003', 'Kue tart coklat', '-'),
('B0004', 'M0001', 'P0005', 'Lemari Pakain', ''),
('B0004', 'M0002', 'P0005', 'Lemari Pakain', ''),
('B0004', 'M0009', 'P0005', 'Lemari Pakain', ''),
('B0004', 'M0010', 'P0005', 'Lemari Pakain', ''),
('B0005', 'M0001', 'P0006', 'Lemari Pakaian Modern', '-'),
('B0005', 'M0002', 'P0006', 'Lemari Pakaian Modern', '-'),
('B0005', 'M0005', 'P0006', 'Lemari Pakaian Modern', '-'),
('B0005', 'M0006', 'P0006', 'Lemari Pakaian Modern', '-'),
('B0005', 'M0007', 'P0006', 'Lemari Pakaian Modern', '-'),
('B0005', 'M0008', 'P0006', 'Lemari Pakaian Modern', '-'),
('B0005', 'M0010', 'P0006', 'Lemari Pakaian Modern', '-'),
('B0006', 'M0001', 'P0007', 'Lemari Pakain Elegan', '-'),
('B0006', 'M0002', 'P0007', 'Lemari Pakain Elegan', '-'),
('B0006', 'M0005', 'P0007', 'Lemari Pakain Elegan', '-'),
('B0006', 'M0007', 'P0007', 'Lemari Pakain Elegan', '-'),
('B0006', 'M0008', 'P0007', 'Lemari Pakain Elegan', '-'),
('B0006', 'M0009', 'P0007', 'Lemari Pakain Elegan', '-'),
('B0006', 'M0010', 'P0007', 'Lemari Pakain Elegan', '-'),
('B0007', 'M0001', 'P0008', 'Meja kantor/belajar', ''),
('B0007', 'M0002', 'P0008', 'Meja kantor/belajar', ''),
('B0007', 'M0005', 'P0008', 'Meja kantor/belajar', ''),
('B0007', 'M0007', 'P0008', 'Meja kantor/belajar', ''),
('B0007', 'M0010', 'P0008', 'Meja kantor/belajar', ''),
('B0008', 'M0001', 'P0009', 'Meja belajar 2', '-'),
('B0008', 'M0002', 'P0009', 'Meja belajar 2', '-'),
('B0008', 'M0005', 'P0009', 'Meja belajar 2', '-'),
('B0008', 'M0007', 'P0009', 'Meja belajar 2', '-'),
('B0008', 'M0008', 'P0009', 'Meja belajar 2', '-'),
('B0008', 'M0010', 'P0009', 'Meja belajar 2', '-'),
('B0009', 'M0001', 'P0010', 'Meja Belajar 3', '-'),
('B0009', 'M0002', 'P0010', 'Meja Belajar 3', '-'),
('B0009', 'M0005', 'P0010', 'Meja Belajar 3', '-'),
('B0009', 'M0007', 'P0010', 'Meja Belajar 3', '-'),
('B0009', 'M0008', 'P0010', 'Meja Belajar 3', '-'),
('B0009', 'M0010', 'P0010', 'Meja Belajar 3', '-'),
('B0010', 'M0001', 'P0011', 'Meja Makan 2', '-'),
('B0010', 'M0002', 'P0011', 'Meja Makan 2', '-'),
('B0010', 'M0009', 'P0011', 'Meja Makan 2', '-'),
('B0010', 'M0007', 'P0011', 'Meja Makan 2', '-'),
('B0010', 'M0008', 'P0011', 'Meja Makan 2', '-'),
('B0011', 'M0001', 'P0012', 'Meja Kayu', '-'),
('B0011', 'M0002', 'P0012', 'Meja Kayu', '-'),
('B0011', 'M0005', 'P0012', 'Meja Kayu', '-'),
('B0011', 'M0007', 'P0012', 'Meja Kayu', '-'),
('B0011', 'M0008', 'P0012', 'Meja Kayu', '-'),
('B0011', 'M0010', 'P0012', 'Meja Kayu', '-'),
('B0012', 'M0001', 'P0013', 'Meja Kayu 3', ''),
('B0012', 'M0002', 'P0013', 'Meja Kayu 3', ''),
('B0012', 'M0005', 'P0013', 'Meja Kayu 3', ''),
('B0012', 'M0006', 'P0013', 'Meja Kayu 3', ''),
('B0012', 'M0007', 'P0013', 'Meja Kayu 3', ''),
('B0012', 'M0008', 'P0013', 'Meja Kayu 3', ''),
('B0012', 'M0010', 'P0013', 'Meja Kayu 3', ''),
('B0013', 'M0001', 'P0014', 'kursi kayu model 2', '-'),
('B0013', 'M0002', 'P0014', 'kursi kayu model 2', '-'),
('B0013', 'M0005', 'P0014', 'kursi kayu model 2', '-'),
('B0013', 'M0007', 'P0014', 'kursi kayu model 2', '-'),
('B0013', 'M0008', 'P0014', 'kursi kayu model 2', '-'),
('B0013', 'M0010', 'P0014', 'kursi kayu model 2', '-'),
('B0014', 'M0001', 'P0015', 'kursi kayu model 3', ''),
('B0014', 'M0002', 'P0015', 'kursi kayu model 3', ''),
('B0014', 'M0005', 'P0015', 'kursi kayu model 3', ''),
('B0014', 'M0006', 'P0015', 'kursi kayu model 3', ''),
('B0014', 'M0007', 'P0015', 'kursi kayu model 3', ''),
('B0014', 'M0008', 'P0015', 'kursi kayu model 3', ''),
('B0014', 'M0009', 'P0015', 'kursi kayu model 3', ''),
('B0015', 'M0001', 'P0016', 'kursi kayu model 4', ''),
('B0015', 'M0002', 'P0016', 'kursi kayu model 4', ''),
('B0015', 'M0005', 'P0016', 'kursi kayu model 4', ''),
('B0015', 'M0006', 'P0016', 'kursi kayu model 4', ''),
('B0015', 'M0007', 'P0016', 'kursi kayu model 4', ''),
('B0015', 'M0008', 'P0016', 'kursi kayu model 4', ''),
('B0015', 'M0009', 'P0016', 'kursi kayu model 4', ''),
('B0016', 'M0001', 'P0017', 'Jendela Kayu model 1', '-'),
('B0016', 'M0002', 'P0017', 'Jendela Kayu model 1', '-'),
('B0016', 'M0003', 'P0017', 'Jendela Kayu model 1', '-'),
('B0016', 'M0001', 'P0017', 'Jendela Kayu model 1', '-'),
('B0016', 'M0005', 'P0017', 'Jendela Kayu model 1', '-'),
('B0016', 'M0006', 'P0017', 'Jendela Kayu model 1', '-'),
('B0016', 'M0007', 'P0017', 'Jendela Kayu model 1', '-'),
('B0016', 'M0008', 'P0017', 'Jendela Kayu model 1', '-'),
('B0016', 'M0009', 'P0017', 'Jendela Kayu model 1', '-'),
('B0016', 'M0010', 'P0017', 'Jendela Kayu model 1', '-'),
('B0017', 'M0001', 'P0018', 'Jendela Kayu model2', ''),
('B0017', 'M0004', 'P0018', 'Jendela Kayu model2', ''),
('B0017', 'M0005', 'P0018', 'Jendela Kayu model2', ''),
('B0017', 'M0007', 'P0018', 'Jendela Kayu model2', ''),
('B0017', 'M0008', 'P0018', 'Jendela Kayu model2', ''),
('B0017', 'M0010', 'P0018', 'Jendela Kayu model2', ''),
('B0018', 'M0001', 'P0019', 'Jendela Kayu model3', ''),
('B0018', 'M0004', 'P0019', 'Jendela Kayu model3', ''),
('B0018', 'M0005', 'P0019', 'Jendela Kayu model3', ''),
('B0018', 'M0006', 'P0019', 'Jendela Kayu model3', ''),
('B0018', 'M0007', 'P0019', 'Jendela Kayu model3', ''),
('B0018', 'M0008', 'P0019', 'Jendela Kayu model3', ''),
('B0018', 'M0009', 'P0019', 'Jendela Kayu model3', ''),
('B0018', 'M0010', 'P0019', 'Jendela Kayu model3', ''),
('B0019', 'M0001', 'P0020', 'Jendela Kayu model4', ''),
('B0019', 'M0004', 'P0020', 'Jendela Kayu model4', ''),
('B0019', 'M0005', 'P0020', 'Jendela Kayu model4', ''),
('B0019', 'M0006', 'P0020', 'Jendela Kayu model4', ''),
('B0019', 'M0007', 'P0020', 'Jendela Kayu model4', ''),
('B0019', 'M0008', 'P0020', 'Jendela Kayu model4', ''),
('B0019', 'M0009', 'P0020', 'Jendela Kayu model4', ''),
('B0019', 'M0010', 'P0020', 'Jendela Kayu model4', ''),
('B0020', 'M0001', 'P0021', 'Pintu Kayu Model 1', ''),
('B0020', 'M0005', 'P0021', 'Pintu Kayu Model 1', ''),
('B0020', 'M0006', 'P0021', 'Pintu Kayu Model 1', ''),
('B0020', 'M0007', 'P0021', 'Pintu Kayu Model 1', ''),
('B0020', 'M0008', 'P0021', 'Pintu Kayu Model 1', ''),
('B0020', 'M0009', 'P0021', 'Pintu Kayu Model 1', ''),
('B0020', 'M0010', 'P0021', 'Pintu Kayu Model 1', ''),
('B0021', 'M0001', 'P0022', 'Pintu Kayu Model 2', ''),
('B0021', 'M0005', 'P0022', 'Pintu Kayu Model 2', ''),
('B0021', 'M0006', 'P0022', 'Pintu Kayu Model 2', ''),
('B0021', 'M0007', 'P0022', 'Pintu Kayu Model 2', ''),
('B0021', 'M0008', 'P0022', 'Pintu Kayu Model 2', ''),
('B0021', 'M0009', 'P0022', 'Pintu Kayu Model 2', ''),
('B0021', 'M0010', 'P0022', 'Pintu Kayu Model 2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `kode_customer` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`kode_customer`, `nama`, `email`, `username`, `password`, `telp`) VALUES
('C0002', 'Rafi Akbar', 'a.rafy@gmail.com', 'rafi', '$2y$10$/UjGYbisTPJhr8MgmT37qOXo1o/HJn3dhafPoSYbOlSN1E7olHIb.', '0856748564'),
('C0003', 'Nagita Silvana', 'bambang@gmail.com', 'Nagita', '$2y$10$47./qEeA/y3rNx3UkoKmkuxoAtmz4ebHSR0t0Bc.cFEEg7cK34M3C', '087804616097'),
('C0004', 'Nadiya', 'nadiya@gmail.com', 'nadiya', '$2y$10$6wHH.7rF1q3JtzKgAhNFy.4URchgJC8R.POT1osTAWmasDXTTO7ZG', '0898765432'),
('C0005', 'costumer', 'costumer@gmail.com', 'costumer', '$2y$10$mUVSOXRC6veekchaMxIYF.q8yVFfjf.l7KVZZyVJqWaikJVmA8ew2', '082347522450'),
('C0006', 'Rumodar', 'rumodarsaria@gmail.com', 'Saria', '$2y$10$SBssPyDpDlVdeWs2JxH2hOduqrpD1yIbE136QMODB3bHCf4orD/3O', '082238288173');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `kode_bk` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`kode_bk`, `nama`, `qty`, `satuan`, `harga`, `tanggal`) VALUES
('M0001', 'Kayu', '50', 'Perbatang/Perlembar', 250000, '2024-05-26'),
('M0002', 'Paku', '1000', 'kg', 15000, '2024-05-26'),
('M0003', 'Cermin', '30', 'Perpotong', 200000, '2024-05-26'),
('M0004', 'Kaca', '150', 'Perpotong', 150000, '2024-05-26'),
('M0005', 'Cat', '10', 'Perliter', 80000, '2024-05-26'),
('M0006', 'Dempul Kayu', '5', 'Pcs', 8000, '2024-05-26'),
('M0007', 'Lem Kayu', '5', 'gr', 65000, '2024-05-26'),
('M0008', 'Amplas Meteran', '10', 'Meter', 9000, '2024-05-26'),
('M0009', 'cat finishing ', '5', 'Perliter', 40000, '2024-05-26'),
('M0010', 'Scrup', '40', 'Pcs', 10000, '2024-05-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `kode_customer` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `kode_customer`, `kode_produk`, `nama_produk`, `qty`, `harga`) VALUES
(16, 'C0003', 'P0002', 'Maryam', 5, 15000),
(17, 'C0003', 'P0003', 'Kue tart coklat', 2, 100000),
(51, 'C0006', 'P0001', 'Lemari 4 Pintu', 2, 8000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama`, `image`, `deskripsi`, `harga`) VALUES
('P0001', 'Lemari 4 Pintu', '6652b514a4120.png', 'Lemari ini sangat cocok untuk digunakan di kamar tidur utama atau ruang penyimpanan lainnya, memberikan 4 ruang penyimpanan yang luas dan ada 4 mini lemari kecil dibagian bawah serta berfungsi sebagai cermin besar yang praktis. Dengan desain klasik dan material kayu yang kuat, lemari ini tidak hanya fungsional tetapi juga menambah nilai estetika pada ruangan.\r\n																																																', 8000000),
('P0002', 'Meja Kerja Elegan', '6652c6d73449c.png', '				Cocok untuk digunakan di kantor atau ruang kerja di rumah, memberikan kesan profesional sekaligus kenyamanan maksimal. Dengan desain yang elegan dan fungsional, meja ini adalah pilihan tepat untuk meningkatkan produktivitas dan gaya kerja Anda.\r\n																											', 800000),
('P0003', 'Meja Makan', '665ae2cb57a73.png', '								Meja Makan tidak hanya berfungsi sebagai tempat untuk makan, tetapi juga sebagai pusat berkumpul dan berinteraksi dalam rumah Anda. Dengan kombinasi sempurna antara desain yang estetis dan fungsi yang maksimal, meja ini akan menjadi pilihan favorit di ruang makan Anda.\r\n																		', 1000000),
('P0004', 'Kursi kayu model 1', '6652ceead1426.png', '								Kursi kayu ini memiliki desain klasik dan elegan dengan sandaran lengkung dan sandaran tangan yang nyaman. Kursi ini terbuat dari kayu mahoni berkualitas tinggi yang kokoh dan tahan lama. Kursi ini juga memiliki finishing natural yang halus dan indah.						', 165000),
('P0005', 'Lemari Pakain', '6652d0c384eb4.png', 'Lemari Pakaian kayu berwarna coklat tua dengan desain sederhana dan klasik. Lemari ini memiliki enam pintu ayun dan beberapa laci. Lemari ini terbuat dari kayu dan memiliki finishing yang halus dan mengkilap.\r\n			', 5000000),
('P0006', 'Lemari Baju Modern', '6652d42829c4a.png', '				Kehadiran Lemari pakaian dengan 2 pintu dengan warna hitam elegan yang menenangkan dan tenteram,menciptakan rasa ketenangan di ruang mana pun.			', 5500000),
('P0007', 'Lemari Pakain 2', '6652d5ba6e4df.png', 'Setiap inci dari lemari pakaian megah ini menjadi saksi keterampilan dan dedikasi para penciptanya.Bengkel tukang kayu yang tepat,hasil akhir yang sempurna,dan detail desain yang cermat menunjukkan semangat dan keahlian para pengrajin.Ini bukan sekedar perabot; itu adalah sebuah karya seni,sebuah bukti keindahan pengerjaan yang abadi.\r\n						', 5000000),
('P0008', 'Meja kantor/belajar', '6652d7e9ae20c.png', 'Di balik eksterior meja yang sederhana terdapat banyak fitur fungsional yang dirancang untuk meningkatkan produktivitas dan pengorganisasian. Beberapa lemari berukuran kecil, tersembunyi di balik ramping,bagian depan minimalis,menawarkan penyimpanan rahasia untuk persediaan penting,menjaga ruang kerja bebas dari kekacauan dan efisien.\r\n			', 650000),
('P0009', 'Meja belajar 2', '6652db082b143.png', '				Meja ini berpadu sempurna dengan berbagai gaya interior,dari rumah pertanian pedesaan hingga minimalis modern. Dapat digunakan sebagai meja belajar/meja kerja.Kaki-kaki yang kokoh memastikan meja ini akan tetap stabil dan bebas goyangan, bahkan ketika penuh dengan buku ataupun labtob			', 1000000),
('P0010', 'Meja Belajar 3', '6652dc2388c4a.png', '				Di balik eksterior meja yang sederhana terdapat banyak fitur fungsional yang dirancang untuk meningkatkan produktivitas dan pengorganisasian. Dua laci berukuran kecil dan satu laci berukuran besar, tersembunyi di balik bagian depan yang ramping dan minimalis, menawarkan penyimpanan rahasia untuk persediaan penting, menjaga ruang kerja bebas dari kekacauan dan efisien.\r\n						', 680000),
('P0011', 'Meja makan 2', '6652de285437a.png', 'Meja berbentuk persegi panjang dan permukaannya halus dan dipoles. Tekstur kayu yang terlihat pada permukaan meja memberikan kesan natural dan rustic. Tepi meja agak membulat, menambah estetika keseluruhannya.\r\n									', 700000),
('P0012', 'Meja Kayu 2', '6652dff662fb5.png', '				Dengan ukurannya yang besar,meja ini dapat menampung keluarga besar atau sekelompok teman dengan nyaman.Ini sempurna untuk mengadakan makan malam liburan,malam permainan,atau sekadar menikmati hidangan bersama orang-orang terkasih.\r\n						', 1500000),
('P0013', 'Meja Kayu 3', '6652e21f40245.png', 'Desain meja yang sederhana menjadikannya meja serbaguna yang dapat digunakan untuk berbagai keperluan,termasuk makan,bekerja,atau belajar.Konstruksinya yang kokoh memastikannya tahan terhadap keausan penggunaan sehari-hari,menjadikannya tambahan yang berharga untuk rumah mana pun.\r\n			', 1800000),
('P0014', 'kursi kayu model 2', '665ae4f32fb8c.png', '				Kursi kayu ini memiliki desain yang klasik dan elegan dengan sandaran lengkung dan sandaran tangan yang nyaman. Kursi ini terbuat dari kayu berkualitas tinggi yang kokoh dan tahan lama. Kursi ini juga memiliki finishing yang halus dan indah.\r\n						', 180000),
('P0015', 'kursi kayu model 3', '665af5773f286.png', 'Kursi kayu ini memiliki desain klasik dan elegan dengan sandaran lengkung dan sandaran tangan yang nyaman. Kursi ini terbuat dari kayu jati berkualitas tinggi yang kokoh dan tahan lama. Kursi ini juga memiliki finishing natural yang halus dan indah\r\n			', 150000),
('P0016', 'kursi kayu model 4', '665af670c09a3.png', 'Kursi kayu ini memiliki desain klasik dan elegan dengan sandaran lengkung dan sandaran tangan yang nyaman. Kursi ini terbuat dari kayu jati berkualitas tinggi yang kokoh dan tahan lama. Kursi ini juga memiliki finishing natural yang halus dan indah.', 165000),
('P0017', 'Jendela Kayu model1', '665af7e341a1e.png', '				Jendela kayu ini memiliki desain klasik dan elegan dengan bingkai putih yang bersih dan rapi. Jendela ini terbuat dari kayu berkualitas tinggi yang kokoh dan tahan lama. Jendela ini juga memiliki kaca yang tebal dan bening yang memberikan pemandangan yang jelas dan terang.			', 800000),
('P0018', 'Jendela Kayu model2', '665af98c429bd.png', 'Jendela kayu ini memiliki desain klasik dan elegan dengan bingkai putih yang bersih dan rapi. Jendela ini terbuat dari kayu jati berkualitas tinggi yang kokoh dan tahan lama. Jendela ini juga memiliki kaca yang tebal dan bening yang memberikan pemandangan yang jelas dan terang.\r\n			', 650000),
('P0019', 'Jendela Kayu model3', '665afa804e00a.png', 'Jendela kayu ini memiliki desain klasik dan elegan dengan bingkai putih yang bersih dan rapi. Jendela ini terbuat dari kayu jati berkualitas tinggi yang kokoh dan tahan lama. Jendela ini juga memiliki kaca yang tebal dan bening yang memberikan pemandangan yang jelas dan terang.\r\n			', 650000),
('P0020', 'Jendela Kayu model4', '665afb4264ff1.png', 'Jendela kayu ini memiliki desain klasik dan elegan dengan bingkai putih yang bersih dan rapi. Jendela ini terbuat dari kayu berkualitas tinggi yang kokoh dan tahan lama. Jendela ini juga memiliki kaca yang tebal dan bening yang memberikan pemandangan yang jelas dan terang.\r\n			', 900000),
('P0021', 'Pintu Kayu Model 1', '665afcc511cae.png', 'Pintu kayu cantik ini terbuat dari kayu jati berkualitas tinggi yang kokoh dan tahan lama.  Pintu ini memiliki finishing natural yang halus dan memberikan kesan hangat dan ramah. Pegangan pintu terbuat dari stainless steel yang kuat dan nyaman digunakan.			', 1500000),
('P0022', 'Pintu Kayu Model 2', '665afded2f78f.png', 'Pintu kayu klasik ini memiliki desain yang elegan dan minimalis dengan finishing natural yang halus. Pintu ini terbuat dari kayu jati berkualitas tinggi yang kokoh dan tahan lama. Pintu ini tidak memiliki kaca, sehingga memberikan privasi yang lebih baik.', 2000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id_order` int(11) NOT NULL,
  `invoice` varchar(200) NOT NULL,
  `kode_customer` varchar(200) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kode_pos` varchar(200) NOT NULL,
  `terima` varchar(200) NOT NULL,
  `tolak` varchar(200) NOT NULL,
  `cek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`id_order`, `invoice`, `kode_customer`, `kode_produk`, `nama_produk`, `qty`, `harga`, `status`, `tanggal`, `provinsi`, `kota`, `alamat`, `kode_pos`, `terima`, `tolak`, `cek`) VALUES
(28, 'INV0001', 'C0005', 'P0004', 'Kursi kayu model 1', 1, 165000, 'Pesanan Baru', '2024-06-02', 'ambon', 'ambon', 'jln sakti', '123456', '2', '1', 0),
(29, 'INV0002', 'C0005', 'P0003', 'Meja Makan', 1, 1000000, '0', '2024-06-02', 'ambon', 'ambon', 'jln sakti', '123456', '1', '0', 0),
(30, 'INV0003', 'C0005', 'P0004', 'Kursi kayu model 1', 1, 165000, 'Pesanan Baru', '2024-06-02', 'ambon', 'ambon', 'jln sakti', '123456', '2', '1', 0),
(31, 'INV0004', 'C0005', 'P0002', 'Meja Kerja Elegan', 1, 800000, '0', '2024-06-02', 'ambon', 'ambon', '', '123456', '1', '0', 0),
(32, 'INV0005', 'C0005', 'P0005', 'Lemari Pakain', 1, 5000000, '0', '2024-06-02', 'ambon', 'ambon', 'jln sakti', '123456', '1', '0', 0),
(33, 'INV0006', 'C0005', 'P0001', 'Lemari 4 Pintu', 1, 8000000, '0', '2024-06-02', 'ambon', 'ambon', 'jln sakti', '123456', '1', '0', 0),
(34, 'INV0007', 'C0005', 'P0007', 'Lemari Pakain 2', 1, 5000000, 'Pesanan Baru', '2024-06-02', 'ambon', 'ambon', 'jln sakti', '123456', '2', '1', 0),
(35, 'INV0008', 'C0006', 'P0001', 'Lemari 4 Pintu', 1, 8000000, '0', '2024-06-02', 'maluku', 'ambon', 'jalan bary', '89898', '1', '0', 0),
(36, 'INV0009', 'C0006', 'P0004', 'Kursi kayu model 1', 1, 165000, 'Pesanan Baru', '2424-06-02', 'maluku', 'ambon', 'Jl.jederal sudirman', '082238', '0', '0', 0),
(37, 'INV0010', 'C0006', 'P0015', 'kursi kayu model 3', 1, 150000, 'Pesanan Baru', '2424-06-08', 'maluku', 'ambon', 'Jl.jederal sudirman', '89898', '0', '0', 0),
(38, 'INV0011', 'C0006', 'P0003', 'Meja Makan', 1, 1000000, 'Pesanan Baru', '2424-06-08', 'maluku', 'jakarta', 'jalan bary', '082238', '0', '0', 0),
(39, 'INV0012', 'C0006', 'P0003', 'Meja Makan', 1, 1000000, 'Pesanan Baru', '2424-06-08', 'maluku', 'ambon', 'jalan bary', '082238', '0', '0', 0),
(40, 'INV0013', 'C0006', 'P0020', 'Jendela Kayu model4', 1, 900000, 'Pesanan Baru', '2424-06-08', 'maluku', 'jakarta', 'Jl.jederal sudirman', '89898', '0', '0', 0),
(41, 'INV0014', 'C0006', 'P0004', 'Kursi kayu model 1', 1, 165000, 'Pesanan Baru', '2424-06-08', 'DKI Jakarta', 'ambon', 'Jl.Tanah Merah Indah 1', '89898', '0', '0', 0),
(42, 'INV0015', 'C0006', 'P0015', 'kursi kayu model 3', 1, 150000, 'Pesanan Baru', '2424-06-08', 'maluku', 'ambon', 'jalan bary', '89898', '0', '0', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_cancel`
--

CREATE TABLE `report_cancel` (
  `id_report_cancel` int(11) NOT NULL,
  `id_order` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_inventory`
--

CREATE TABLE `report_inventory` (
  `id_report_inv` int(11) NOT NULL,
  `kode_bk` varchar(100) NOT NULL,
  `nama_bahanbaku` varchar(100) NOT NULL,
  `jml_stok_bk` int(11) NOT NULL,
  `tanggal` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_omset`
--

CREATE TABLE `report_omset` (
  `id_report_omset` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_omset` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report _penjualan`
--

CREATE TABLE `report _penjualan` (
  `id_report_sell` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jumlah_terjual` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_produksi`
--

CREATE TABLE `report_produksi` (
  `id_report_prd` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_profit`
--

CREATE TABLE `report_profit` (
  `id_report_profit` int(11) NOT NULL,
  `kode_bom` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `jumlah` varchar(11) NOT NULL,
  `total_profit` varchar(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kode_customer`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`kode_bk`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `report_cancel`
--
ALTER TABLE `report_cancel`
  ADD PRIMARY KEY (`id_report_cancel`);

--
-- Indeks untuk tabel `report_inventory`
--
ALTER TABLE `report_inventory`
  ADD PRIMARY KEY (`id_report_inv`);

--
-- Indeks untuk tabel `report_omset`
--
ALTER TABLE `report_omset`
  ADD PRIMARY KEY (`id_report_omset`);

--
-- Indeks untuk tabel `report _penjualan`
--
ALTER TABLE `report _penjualan`
  ADD PRIMARY KEY (`id_report_sell`);

--
-- Indeks untuk tabel `report_produksi`
--
ALTER TABLE `report_produksi`
  ADD PRIMARY KEY (`id_report_prd`);

--
-- Indeks untuk tabel `report_profit`
--
ALTER TABLE `report_profit`
  ADD PRIMARY KEY (`id_report_profit`),
  ADD UNIQUE KEY `kode_bom` (`kode_bom`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `report_cancel`
--
ALTER TABLE `report_cancel`
  MODIFY `id_report_cancel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report_inventory`
--
ALTER TABLE `report_inventory`
  MODIFY `id_report_inv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report_omset`
--
ALTER TABLE `report_omset`
  MODIFY `id_report_omset` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report _penjualan`
--
ALTER TABLE `report _penjualan`
  MODIFY `id_report_sell` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report_produksi`
--
ALTER TABLE `report_produksi`
  MODIFY `id_report_prd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report_profit`
--
ALTER TABLE `report_profit`
  MODIFY `id_report_profit` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
