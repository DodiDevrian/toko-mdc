-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2022 at 03:41 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19882872_db_mdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `tgl_chat` date NOT NULL,
  `waktu_chat` time(5) NOT NULL,
  `isi_chat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(15) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `kurir` varchar(20) NOT NULL,
  `nomor` bigint(15) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `id_user`, `nama`, `alamat`, `kurir`, `nomor`, `tgl_pesan`, `gambar`, `status`) VALUES
(26, 4, 'Dodi Devrian Andrianto', 'Bandar Jaya', 'SiCepat', 85788113563, '2022-11-18', 'bank-bca12.png', 'Menunggu Validasi'),
(27, 4, 'Yusuf', 'Bandar Mataram', 'SiCepat', 86726351617, '2022-11-18', 'bank-bca13.png', 'Selesai Validasi'),
(31, 4, 'Dodi Devrian Andrianto', 'Bandar Jaya', 'JNE', 89627283728, '2022-11-22', 'Tanah_Basah_Hujan.jpeg', 'Selesai Validasi'),
(34, 13, 'ayu feblira gersy', 'teluk betung bandar lampung', 'GoSend', 85809637670, '2022-11-24', 'WhatsApp_Image_2022-06-27_at_11_35_18.jpeg', 'Selesai Validasi'),
(37, 4, 'Samsudin', 'Tanggerang', 'JNT', 89627283728, '2022-11-25', 'mugiwara-logo-303FD55C54-seeklogo_com.png', 'Menunggu Validasi'),
(38, 15, 'Muhammad Asyroful Nur Maulana Yusuf', 'PERUM 1 GPM Blok F.500 RT001 RW008, MATARAMA UDIK,  BANDAR MATARAM, LAMPUNG TENGAH, LAMPUNG', 'JNE', 85267228032, '2022-11-25', 'C2(SERIAL_MONITOR).jpg', 'Selesai Validasi');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `jumlah` int(25) NOT NULL,
  `harga` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_produk`, `nama_produk`, `tgl_pesan`, `jumlah`, `harga`) VALUES
(28, 25, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-18', 2, 300000),
(29, 25, 19, 'Printer Canon Full Color', '2022-11-18', 2, 1200000),
(30, 25, 20, 'Headset Gaming Rexus Thundervox RGB', '2022-11-18', 1, 200000),
(31, 26, 15, 'Acer Predator Helios T500', '2022-11-18', 1, 35000000),
(32, 26, 19, 'Printer Canon Full Color', '2022-11-18', 1, 1200000),
(33, 26, 20, 'Headset Gaming Rexus Thundervox RGB', '2022-11-18', 1, 200000),
(34, 27, 19, 'Printer Canon Full Color', '2022-11-18', 1, 1200000),
(35, 27, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-18', 1, 300000),
(36, 28, 15, 'Acer Predator Helios T500', '2022-11-20', 1, 35000000),
(37, 29, 28, 'Acer Predator Helios T500', '2022-11-21', 2, 30000000),
(38, 30, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-21', 1, 300000),
(39, 30, 15, 'Acer Predator Helios T500', '2022-11-21', 1, 35000000),
(40, 31, 15, 'Acer Predator Helios T500', '2022-11-22', 1, 35000000),
(41, 31, 19, 'Printer Canon Full Color', '2022-11-22', 1, 1200000),
(42, 32, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-24', 1, 300000),
(43, 33, 15, 'Acer Predator Helios T500', '2022-11-24', 1, 35000000),
(44, 34, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-24', 1, 300000),
(45, 35, 18, 'Tinta Printer Conon Full Color Premium', '2022-11-24', 1, 300000),
(46, 36, 24, 'Acer Predator Helios T800', '2022-11-25', 1, 20000000),
(47, 37, 25, 'asxa', '2022-11-25', 1, 30000000),
(48, 38, 20, 'Headset Gaming Rexus Thundervox RGB', '2022-11-25', 1, 200000),
(49, 38, 30, 'Flashdisk acer 16gb', '2022-11-25', 1, 120000);

--
-- Triggers `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE produk SET stok=stok-NEW.jumlah
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(4) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `merek` varchar(10) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `masa_garansi` varchar(15) NOT NULL,
  `detail_produk` longtext NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `merek`, `harga`, `stok`, `masa_garansi`, `detail_produk`, `kategori`, `gambar`) VALUES
(14, 'Acer Aspire 3 A314-35 ', 'ACER', '6000000', 3, '1 Tahun', '<p>Intel Celeron N5100 14\"</p>\r\n\r\n<p>RAM 4 GB DDR4 SSD 256 GB</p>\r\n\r\n<p>Windows 11 Home</p>\r\n\r\n<p>Warna : Pink, Electric Blue, Pure Silver</p>\r\n', 'Laptop', 'WhatsApp_Image_2022-11-25_at_20_21_36.jpeg'),
(15, 'Acer Aspire 3 AMD  Athlon 3050u', 'Acer', '5500000', 0, '1 Tahun', '<p>AMD Radeon Graphics 14&quot;</p>\r\n\r\n<p>RAM 4 GB DDR4 SSD 256 GB</p>\r\n\r\n<p>Windows 11 Home + OHS</p>\r\n\r\n<p>Warna : Black, Pure Silver</p>\r\n', 'Laptop', 'WhatsApp_Image_2022-11-25_at_20_41_54.jpeg'),
(18, 'Tinta Botol Printer Canon Full Color Premium', 'Blueprint', '100000', 2, '3 Hari', '<p>Tinta Botol untuk printer Canon, tersedia pilihan  warna :</p>\r\n\r\n<ul>\r\n	<li>Black</li>\r\n	<li>Yellow</li>\r\n	<li>Cyan</li>\r\n	<li>Magenta </li>\r\n</ul>\r\n', 'Komponen', 'IMG-20221107-WA0092.jpg'),
(19, 'Printer Canon PIXMA MG2570S', 'Canon', '1300000', 2, '1 Tahun', '<p>Printer Canon for Print, Scan dan Fotokopi</p>\r\n', 'Printer', 'printer_canon_MG2570S.jpg'),
(20, 'Headset Gaming Dareu EH416s', 'DAREU', '180000', 2, '1 Minggu', '<p>Headset kabel untuk Gaming dengan kualitas suara yang&nbsp;<strong>luar biasa</strong></p>\r\n', 'Aksesoris', 'Headphone_Dareu_EH416s.jpg'),
(24, 'Asus E410MAO', 'ASUS', '6000000', 3, '2 Tahun', '<p>Intel Celeron N54020 14\"</p>\r\n\r\n<p>RAM 4 GB DDR4 SSD 512 GB</p>\r\n\r\n<p>Windows 11 Home + OHS</p>\r\n\r\n<p>Warna : Putih, Biru, Pink</p>\r\n', 'Laptop', 'WhatsApp_Image_2022-11-26_at_11_25_10.jpeg'),
(25, 'Headphone Gaming X6', 'OVLENG', '150000', 2, '1 Minggu', '<p>Headphone kabel Gaming dengan kualitas suara yang bagus</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0087.jpg'),
(26, 'Tinta Botol Epson BL003 Full Color Premium', 'Blueprint', '130000', 5, '3 Hari', '<p>Tinta Botol untuk printer Epson, tersedia pilihan&nbsp; warna :</p>\r\n\r\n<ul>\r\n	<li>Black</li>\r\n	<li>Yellow</li>\r\n	<li>Cyan</li>\r\n	<li>Magenta</li>\r\n</ul>\r\n', 'Komponen', 'IMG-20221107-WA0019.jpg'),
(28, 'Tinta Botol Epson BL664 Full Color Premium', 'Blueprint', '130000', 4, '3 Hari', '<p>Tinta Botol untuk printer Epson, tersedia pilihan  warna :</p>\r\n\r\n<ul>\r\n	<li>Black</li>\r\n	<li>Yellow</li>\r\n	<li>Cyan</li>\r\n	<li>Magenta</li>\r\n</ul>\r\n', 'Komponen', 'IMG-20221107-WA0043.jpg'),
(29, 'Tinta Botol Epson T6642 Full Color Premium', 'EPSON', '130000', 2, '3 Hari', '<p>Tinta Botol untuk printer Epson, tersedia pilihan  warna :</p>\r\n\r\n<ul>\r\n	<li>Black</li>\r\n	<li>Yellow</li>\r\n	<li>Cyan</li>\r\n	<li>Magenta</li>\r\n</ul>\r\n', 'Komponen', 'IMG-20221107-WA0094.jpg'),
(30, 'Flashdisk Acer 16gb', 'Acer', '120000', 3, '6 Bulan', '<p>Flashdisk kapasitas besar</p>\r\n', 'Aksesoris', 'Fd_acer_16gb.jpg'),
(31, 'Flashdisk Acer 32gb', 'ACER', '155000', 3, '6 Bulan', '<p>flashdisk ori dengan kapasitas besar</p>\r\n', 'Aksesoris', 'Fd_acer_32gb.jpg'),
(32, 'Flashdisk Toshiba 4gb', 'TOSHIBA', '40000', 5, '1 Minggu', '<p>Flashdisk Murah</p>\r\n', 'Aksesoris', 'Fd_Toshiba_4gb.jpg'),
(33, 'Flashdisk Toshiba 8gb', 'TOSHIBA', '55000', 8, '1 Minggu', '<p>flashdisk murah&nbsp;</p>\r\n', 'Aksesoris', 'Fd_Toshiba_8gb.jpg'),
(34, 'Flashdisk Toshiba 16gb', 'TOSHIBA', '60000', 13, '1 Minggu', '<p>flashdisk murah</p>\r\n', 'Aksesoris', 'Fd_Toshiba_16gb.jpg'),
(35, 'Flashdisk V-Gen 8gb', 'V-GeN', '80000', 5, '6 Bulan', '<p>Flashdisk Murah Kualitas Ori</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0072.jpg'),
(36, 'Flashdisk V-Gen 16gb', 'V-GeN', '100000', 5, '6 Bulan', '<p>Flashdisk Murah Kualitas Ori</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0016.jpg'),
(37, 'Flashdisk V-Gen 32gb', 'V-GeN', '150000', 5, '6 Bulan', '<p>Flashdisk Murah Kualitas Ori</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0096.jpg'),
(38, 'Flashdisk SanDisk 8gb', 'SanDisk', '80000', 5, '6 Bulan', '<p>Flashdisk Murah Kualitas Ori</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0070.jpg'),
(39, 'Flashdisk SanDisk 16gb', 'SanDisk', '100000', 5, '6 Bulan', '<p>Flashdisk Murah dengan Kualitas Ori dan Muatan Besar</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0085.jpg'),
(40, 'Flashdisk SanDisk 32gb', 'SanDisk', '150000', 5, '6 Bulan', '<p>Flashdisk Murah dengan Kualitas Ori dan Muatan Besar</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0077.jpg'),
(41, 'Gaming Headset LB-01', 'AULA', '150000', 3, '1 Minggu', '<p>Headset kabel Gaming dengan kualitas suara yang bagus</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0039.jpg'),
(42, 'Headset Gaming Stereo Sound RG-H602', 'RAPTOR', '180000', 0, '1 Minggu', '<p>Headset kabel Gaming dengan kualitas suara yang bagus</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0100.jpg'),
(43, 'Stereo Headphone MDR-XB450AP', 'JBL', '50000', 0, '3 Hari', '<p>Headphone kabel standard dengan harga murah</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0050.jpg'),
(44, 'Bluetooth Stereo Headphone JETE-01 SERIES', 'JETE', '250000', 2, '1 Minggu', '<p>Headphone bluetooth dengan kualitas suara&nbsp; bagus dan daya tahan baterai yang tinggi</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0032.jpg'),
(45, 'Sterreo Earphone Classic Series', 'JETE', '40000', 0, '3 Hari', '<p>Earphone kabel murah dengan kualitas suara&nbsp; bagus</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0067.jpg'),
(46, 'Sterreo Earphone Classic2 Series', 'JETE', '50000', 2, '3 Hari', '<p>Earphone kabel murah dengan kualitas suara&nbsp; bagus</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0020.jpg'),
(47, 'Mousepad Standard', 'Tidak ada ', '30000', 30, 'Tidak Ada Garan', '<p>Mousepad standard tidak mudah bergeser dan tebal</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0014.jpg'),
(48, 'Mousepad Gaming Goliathus', 'Logilily', '80000', 2, '3 Hari', '<p>Mousepad dengan karakter gaming yang besar dan tidak mudah bergeser dan tebal</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0040.jpg'),
(49, 'Mouse Wireless Standard SY-2804', 'M-TECH', '85000', 15, '3 Hari', '<p>Mouse Wireless Standard dengan kualitas bagus</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0081.jpg'),
(50, 'Mouse  Wireless Tortuga Mini Candy', 'Digigear', '85000', 10, '3 Hari', '<p>Mouse Wireless Ori dengan pilihan warna serta kualitas bagus dan terdapat bonus baterai.</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0076.jpg'),
(51, 'Mouse Wireless Silent C10', 'NYK', '100000', 10, '3 Hari', '<p>Mouse Wireless Orii Silent dengan pilihan warna serta kualitas bagus dan terdapat bonus baterai.</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0029.jpg'),
(52, 'Mouse Wireless ROBOT M210', 'ROBOT', '100000', 15, '3 Hari', '<p>Mouse Wireless Ori dengan pilihan warna serta kualitas bagus dan terdapat bonus baterai.</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0044.jpg'),
(53, 'Mouse Wireless ROBOT M230', 'ROBOT', '120000', 15, '3 Hari', '<p>Mouse Wireless Ori dengan pilihan warna dan karakter yang lucu disertai dengan kualitas yang bagus dan terdapat bonus baterai.</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0046.jpg'),
(54, 'Mouse Kabel B100', 'Logitech', '75000', 10, '3 Hari', '<p>Mouse Kabel Ori&nbsp; murah dengan kualitas bagus&nbsp;</p>\r\n', 'Aksesoris', 'IMG-20221107-WA0066.jpg'),
(55, 'Acer Aspire 3 AMD 3020e', 'Acer', '5000000', 2, '1 Tahun', '<p>AMD Radeon Graphics 14&quot;</p>\r\n\r\n<p>RAM 4 GB DDR4 SSD 256 GB</p>\r\n\r\n<p>Windows 11 Home + OHS</p>\r\n\r\n<p>Warna : Black</p>\r\n', 'Laptop', 'WhatsApp_Image_2022-11-25_at_20_30_38.jpeg'),
(56, 'Asus A516MAO ', 'ASUS', '5000000', 1, '2 Tahun', '<p>Intel Celeron N4020 15.6&quot;</p>\r\n\r\n<p>RAM 4 GB DDR4 SSD 256 GB</p>\r\n\r\n<p>Windows 11 Home + OHS</p>\r\n\r\n<p>Warna : Silver</p>\r\n', 'Laptop', 'WhatsApp_Image_2022-11-26_at_11_27_24.jpeg'),
(57, 'Lenovo IdeaPad 3 14ADA05 Athlon Silver 3050', 'LENOVO', '6500000', 0, '1 Tahun', '<p>AMD Radeon Graphics Athlon Silver 3050 14&quot;</p>\r\n\r\n<p>RAM 8 GB DDR4 SSD 256 GB</p>\r\n\r\n<p>Windows 11 Home + OHS</p>\r\n\r\n<p>Warna : Silver, Grey</p>\r\n', 'Laptop', 'WhatsApp_Image_2022-11-26_at_12_04_44.jpeg'),
(58, 'Lenovo IdeaPad 3 14ADA05 Athlon 3020e', 'LENOVO', '5000000', 1, '1 Tahun', '<p>AMD Radeon Graphics Athlon 3020 14&quot;</p>\r\n\r\n<p>RAM 4 GB DDR4 SSD 256 GB</p>\r\n\r\n<p>Windows 11 Home + OHS</p>\r\n\r\n<p>Warna : Silver, Grey</p>\r\n', 'Laptop', 'WhatsApp_Image_2022-11-26_at_12_18_54.jpeg'),
(59, 'Lenovo IdeaPad 1 11IGL05', 'LENOVO', '4000000', 0, '1 Tahun', '<p>Intel Celeron N4020 11.6&quot;</p>\r\n\r\n<p>RAM 4 GB DDR4 SSD 256 GB</p>\r\n\r\n<p>Windows 11 Home + OHS</p>\r\n\r\n<p>Warna : Silver</p>\r\n', 'Laptop', 'WhatsApp_Image_2022-11-26_at_12_37_20.jpeg'),
(60, 'HP 14s-fq0576AU', 'HP', '7800000', 2, '1 Tahun', '<p>AMD Ryzen 3 3250U 14&quot;</p>\r\n\r\n<p>RAM 8 GB DDR4 SSD 512 GB</p>\r\n\r\n<p>Windows 11 Home + OHS</p>\r\n\r\n<p>Warna : Silver</p>\r\n', 'Laptop', 'WhatsApp_Image_2022-11-26_at_12_46_31.jpeg'),
(61, 'Printer Epson L3210', 'EPSON', '2700000', 3, '1 Tahun', '<p>Printer Epson for Print, Scan dan Fotokopi</p>\r\n', 'Printer', 'printer_epson_L3210.jpg'),
(62, 'Printer HP 1216', 'HP', '800000', 0, '1 Tahun', '<p>Printer Hp hanya untuk print</p>\r\n', 'Printer', 'printer_hp_1216.jpg'),
(63, 'Printer HP 2337', 'HP', '1100000', 2, '1 Tahun', '<p>Printer Hp for Print, Scan dan Fotokopi</p>\r\n', 'Printer', 'printer_hp_2337.jpg'),
(64, 'Tinta Botol Epson 003 Full Color Premium', 'EPSON', '130000', 0, '3 Hari', '<p>Tinta Botol untuk printer Epson, tersedia pilihan&nbsp; warna :</p>\r\n\r\n<ul>\r\n	<li>Black</li>\r\n	<li>Yellow</li>\r\n	<li>Cyan</li>\r\n	<li>Magenta</li>\r\n</ul>\r\n', 'Komponen', 'IMG-20221107-WA0057.jpg'),
(65, 'WEB CAM FULL HD', 'Tidak ada ', '200000', 0, '3 Hari', '<p>Web Cam External Full HD for PC&nbsp;</p>\r\n', 'Komponen', 'IMG-20221107-WA0034.jpg'),
(66, 'WEB CAM HD 720P', 'Tidak ada ', '150000', 2, '3 Hari', '<p>Web Cam External HD&nbsp; 720P for PC atau Laptop</p>\r\n', 'Komponen', 'IMG-20221107-WA0101.jpg'),
(67, 'Softcase Laptop dengan bahan anti air', 'Tidak ada ', '130000', 10, 'Tidak Ada Garan', '<p>Softcase Laptop Anti Air dengan beraneka ragam karakter yang lucu</p>\r\n', 'Komponen', 'IMG-20221107-WA0052.jpg'),
(68, 'Softcase Laptop dengan Bahan Kain', 'Tidak ada ', '100000', 5, 'Tidak Ada Garan', '<p>Softcase Laptop dengan beraneka ragam karakter yang lucu</p>\r\n', 'Komponen', 'IMG-20221107-WA0038.jpg'),
(69, 'Gamepad Single Transparan ST88', 'EYOTA', '100000', 7, '3 Hari', '<p>Stik gamepad single transparan for PC atau Laptop</p>\r\n', 'Komponen', 'IMG-20221107-WA0013.jpg'),
(70, 'Gamepad Double Transparan MT-830D', 'M-TECH', '120000', 7, '3 Hari', '<p>Stik Gamepad Double Transparan for PC atau Laptop</p>\r\n', 'Komponen', 'IMG-20221107-WA0058.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(4) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_wa` bigint(15) NOT NULL,
  `tanggal` date NOT NULL,
  `barang` varchar(10) NOT NULL,
  `keluhan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `biaya` int(15) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `id_user`, `nama`, `alamat`, `no_wa`, `tanggal`, `barang`, `keluhan`, `status`, `biaya`, `gambar`) VALUES
(13, 4, 'Yusuf', 'Bandar', 85267228032, '2022-11-16', 'Laptop Ker', 'Laptop Kayak Taik', 'Selesai Diproses', 50000, 'Tanah_Kering_Hujan.jpeg'),
(14, 4, 'Heruk', 'Riau', 82284569653, '2022-11-17', 'Printer', 'Printernya Kocak', 'Sedang Diproses', 50000, 'Tanah_Basah_Hujan.jpeg'),
(17, 13, 'ayu feblira gersy', 'teluk betung', 81617744902, '2022-11-24', 'Laptop', 'tidak bisa tampil', 'Belum Diproses', 0, 'gagal.png'),
(18, 12, 'Dina Cindi Pangestu', 'Bandar Jaya', 88878675849, '2022-11-24', 'Laptop', 'LCD rusak', 'Belum Diproses', 0, 'Asus_a416ma.jpg'),
(21, 0, 'Samsudin', 'Pringsewu ', 823788897456, '2022-11-24', 'Printer', 'Tinta tidak keluar', 'Sedang Diproses', 100000, 'printer.jpg'),
(22, 4, 'Ahmad Jajuri', 'Lampung', 8972162512, '2022-11-24', 'Laptop', 'Keyboard eror', 'Belum Diproses', 0, 'screenshot-20221105-021023-chrome-6365567e8db7a867251a59642.jpg'),
(23, 13, 'ayu feblira gersy', 'teluk betung', 81617744902, '2022-11-24', 'Aksesoris', 'gktau kenapa', 'Belum Diproses', 0, 'Screenshot_(14).png'),
(24, 15, 'Muhammad Asyroful Nur Maulana Yusuf', 'Jln Pegangsaan Timur No.456 Lampung Selatan', 85267228032, '2022-11-25', 'Laptop', 'Laptop nya gk bisa hidup total selalu black screen.', 'Selesai Diproses', 5000000, 'C2(SERIAL_MONITOR).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `password`, `role`) VALUES
(1, 'dodidevv', 'Dodi Devrian', '1111111', '1'),
(5, 'owner', 'Nur Saad', '12345678', '0'),
(8, 'admin2', 'Dedek Mardedek', '1111111', '1'),
(10, 'opang', 'opang', '123', '2'),
(12, 'dinacindi', 'Dina Cindi Pangestu', 'dinacindi19', '2'),
(13, 'ayufg01', 'Ayu Feblira Gersy', 'ayufg01', '2'),
(14, 'opang123', 'opang', '1234567', '2'),
(15, 'evaaras', 'Muhammad Asyroful Nur Maulana Yusuf', 'yanstirta12', '2'),
(16, 'dinacp', 'Dina Cindi Pangestu', '87654321', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
