-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 06:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `email`) VALUES
(1, 'tia', '1234', 'Tia Anata', 'TiaAnata@gmail.com'),
(2, 'sep', '1234', 'Sep Sarip', 'SepSarip@gmail.com'),
(3, 'andi', '1234', 'Andi Rizki', 'AndiRizki@gmail.com'),
(4, 'john', '1234', 'John Doe', 'john.doe@gmail.com'),
(5, 'jane', '1234', 'Jane Doe', 'jane.doe@gmail.com'),
(6, 'alex', '1234', 'Alex Smith', 'alex.smith@gmail.com'),
(7, 'emily', '1234', 'Emily Johnson', 'emily.johnson@gmail.com'),
(8, 'michael', '1234', 'Michael Scott', 'michael.scott@gmail.com'),
(9, 'sarah', '1234', 'Sarah Connor', 'sarah.connor@gmail.com'),
(10, 'chris', '1234', 'Chris Evans', 'chris.evans@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `deskripsi`, `harga`, `stok`) VALUES
(1, 'Paramex Nyeri Otot (1 Box/25 Strip)', 'Meredakan Nyeri dan Peradangan pada Sendi Otot', 42000.00, 30),
(2, 'Tolak Angin + honey (1 Box / 12 Sachet)', 'Mengobati gejala masuk angin, seperti mual, perut kembung, sakit perut, pusing', 45000.00, 30),
(3, 'Panadol Flu & Batuk (10 Kaplet)', 'Meredakan gejala flu seperti demam, sakit kepala, hidung tersumbat, bersin-bersin, disertai dengan batuk tidak berdahak.', 15500.00, 25),
(4, 'OBH Combi Plus Batuk Flu Menthol 100 ml', 'Untuk meredakan batuk yang disertai gejala-gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin.', 15000.00, 40),
(5, 'Bodrex Migra 1 Folding Box isi 25 Blister', 'Mengatasi gejala sakit kepala sebelah (migrain) yang berdenyut-denyut', 65000.00, 15),
(6, 'Decolgen', 'Obat ini dapat digunakan untuk meredakan sakit kepala, hidung tersumbat, dan bersin. Meredakan nyeri/sakit, menurunkan panas/demam, melegakan Hidung tersumbat', 47000.00, 25),
(7, 'Wellness', 'Multivitamin dan Mineral digunakan untuk membantu memelihara kesehatan tubuh.', 78000.00, 30),
(8, 'Combantrin dewasa 250mg', 'Mengatasi cacing kremi (Enterobius vermicularis), cacing gelang (Ascaris lumbricoides), cacing tambang (Ancylostoma duodenale), Cacing tambang (Necator americanus), cacing Trichostrongyfus colubriformis dan Trichostrongylus orientalls.', 18000.00, 50),
(9, 'IMBOOST EXTRA VIT C & D3', 'Bermanfaat untuk membantu memelihara daya tahan tubuh', 40000.00, 30),
(10, 'Welmove Suplemen Makanan Strip', 'Menstimulasi pembentukan tulang rawan sendi.', 28000.00, 15),
(11, 'Enervon C Botol isi 30 tablet', 'Suplemen vitamin untuk membantu menjaga daya tahan tubuh', 35000.00, 15),
(12, 'Tolaklinu Herbal 1 Pak 5 Sachet Pcs', 'Membantu meredakan pegal linu dan nyeri sendi', 14500.00, 20),
(13, 'Betadine', 'Salep antiseptik untuk membunuh kuman penyebab infeksi pada luka seperti luka bakar, luka sunat, lika tergores, dan luka kecil lainnya.', 16000.00, 6),
(14, 'Neozep Forte 1box', 'Meredakan gejala flu', 63000.00, 10),
(15, 'Vital Ear Oil', 'Obat tetes telinga yang berfungsi membersihkan kotoran yang mengendap pada telinga di bagian dalam', 15000.00, 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_produk`, `jumlah_barang`, `tanggal_transaksi`) VALUES
(1, 1, 1, 3, '2024-01-14 02:13:38'),
(2, 3, 2, 4, '2024-01-14 02:20:38'),
(3, 7, 9, 3, '2024-01-14 02:58:02'),
(4, 6, 15, 5, '2024-01-14 02:58:02'),
(5, 8, 6, 4, '2024-01-14 03:44:56'),
(6, 2, 14, 7, '2024-01-14 03:45:52'),
(7, 10, 12, 10, '2024-01-14 03:45:52'),
(8, 5, 4, 5, '2024-01-14 03:51:04'),
(9, 9, 10, 5, '2024-01-14 03:51:04'),
(10, 4, 8, 3, '2024-01-14 03:52:03'),
(11, 8, 5, 5, '2024-01-14 03:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `alamat`) VALUES
(1, 'Ali', '1234', 'Ali Susilo', 'ali.susilo@gmail.com', 'Jl. Merdeka No. 123, Kelurahan Menteng, Kecamatan Menteng, Jakarta Pusat, DKI Jakarta, 10310'),
(2, 'Budi', '1234', 'Budi Setiawan', 'budi.setiawan@gmail.com', 'Jl. Raya Cemara 7A, Kelurahan Cemara, Kecamatan Ngampilan, Kota Yogyakarta, Daerah Istimewa Yogyakarta, 55281'),
(3, 'Citra', '1234', 'Citra Indah', 'citra.indah@gmail.com', 'Komplek Permata Hijau Blok C2, Kelurahan Permata Hijau, Kecamatan Kebayoran Lama, Jakarta Selatan, DKI Jakarta, 12210'),
(4, 'Dewi', '1234', 'Dewi Lestari', 'dewi.lestari@gmail.com', 'Jl. Jendral Sudirman 45, Kelurahan Sudirman, Kecamatan Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan, 70114'),
(5, 'Eka', '1234', 'Eka Cahyani', 'eka.cahyani@gmail.com', 'Perumahan Pondok Indah Blok D3, Kelurahan Pondok Indah, Kecamatan Kebayoran Lama, Jakarta Selatan, DKI Jakarta, 12340'),
(6, 'Fandi', '1234', 'Fandi Pratama', 'fandi.pratama@gmail.com', 'Jl. Pahlawan Kusuma Bangsa 8, Kelurahan Pahlawan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat, 16123'),
(7, 'Galih', '1234', 'Galih Wijaya', 'galih.wijaya@gmail.com', 'Komplek Taman Indah C14, Kelurahan Taman Indah, Kecamatan Balikpapan Barat, Kota Balikpapan, Kalimantan Timur, 76124'),
(8, 'Hana', '1234', 'Hana Sari', 'hana.sari@gmail.com', 'Jl. Diponegoro No. 87, Kelurahan Diponegoro, Kecamatan Banjarmasin Barat, Kota Banjarmasin, Kalimantan Selatan, 70233'),
(9, 'Indra', '1234', 'Indra Kusuma', 'indra.kusuma@gmail.com', 'Perumahan Anggrek Blok F2, Kelurahan Anggrek, Kecamatan Medan Selayang, Kota Medan, Sumatera Utara, 20131'),
(10, 'Joko', '1234', 'Joko Susanto', 'joko.susanto@gmail.com', 'Jl. Kartini No. 15, Kelurahan Kartini, Kecamatan Semarang Selatan, Kota Semarang, Jawa Tengah, 50133'),
(11, 'mamation', '1234', 'mamation', 'mamation@gmail.com', 'depok'),
(12, 'killa', '1234', 'Killa Zain', 'killazain@gmail.com', 'jalan mekar merah depok '),
(13, 'nugi', '1234', 'Nugi Nugra', 'nuginugra@gmail.com', 'jalan kasablangka nomor 7 depok ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
