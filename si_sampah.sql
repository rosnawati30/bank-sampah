-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 05:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berat_sementara`
--

CREATE TABLE `berat_sementara` (
  `id_berat` int(11) NOT NULL,
  `berat` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berat_sementara`
--

INSERT INTO `berat_sementara` (`id_berat`, `berat`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `id_nasabah` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `total_sampah` float NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `nama`, `alamat`, `total_sampah`, `created_at`) VALUES
(1, 'Fitri Sagita', 'Jl. Batu', 0, '2024-05-23 00:00:00'),
(2, 'Ilham Kurniawan', 'Jl. Pegangsaan Timur No. 81 RT 05/RW 01 Depok, Indonesia', 0, '2024-05-26 15:04:58'),
(3, 'Shierra Intan Anggari', 'Gg. Rotasi Berat No. 48, Jakarta', 0.5, '2024-05-26 17:18:23'),
(4, 'Rikza Akmal Habibi', 'Jl. Nusa Satu', 0, '2024-05-27 19:19:00'),
(5, 'Fedya Ayesha', 'Gg. Bumi Pertiwi', 0, '2024-05-27 19:20:31'),
(6, 'Rosnawati', 'Jl. Kemerdekaan Jakarta', 0, '2024-05-27 19:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `id_sampah` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`id_sampah`, `item`, `kode`, `harga`, `created_at`) VALUES
(1, 'Emberan', 'Emb', 1190, '2024-05-27 19:34:31'),
(2, 'Emberan Injek', 'Inj', 1750, '2024-05-27 19:34:31'),
(3, 'Emberan Naso', 'Nas', 2800, '2024-05-27 19:34:31'),
(4, 'Gelas A', 'GB', 2800, '2024-05-27 19:34:31'),
(5, 'Gelas B', 'GK', 1400, '2024-05-27 19:34:31'),
(6, 'Plastik Bening', 'PB', 525, '2024-05-27 19:34:31'),
(7, 'Kresek/Asoy', 'Asy', 175, '2024-05-27 19:34:31'),
(8, 'Pet A', 'BB', 2590, '2024-05-27 19:34:31'),
(9, 'Pet B', 'BK', 1610, '2024-05-27 19:34:31'),
(10, 'Pet Warna', 'BW', 420, '2024-05-27 19:34:31'),
(11, 'Tutup Botol', 'TB', 2100, '2024-05-27 19:34:31'),
(12, 'Tutup Galon', 'TG', 3500, '2024-05-27 19:34:31'),
(13, 'Mika Tipis/PVC', 'MT/PVC', 500, '2024-05-27 19:34:31'),
(14, 'Bimoli/Selofan', 'Bim', 350, '2024-05-27 19:34:32'),
(15, 'Yakult/Impek', 'Ykl/Imp', 350, '2024-05-27 19:34:32'),
(16, 'Kristal', 'Krs', 2450, '2024-05-27 19:34:32'),
(17, 'Ale-ale', 'Ale', 1050, '2024-05-27 19:34:32'),
(18, 'Paralon', 'Prl', 910, '2024-05-27 19:34:32'),
(19, 'Disk - CD', 'CD', 4200, '2024-05-27 19:34:32'),
(20, 'Galon Aqua', 'GA', 4900, '2024-05-27 19:34:32'),
(21, 'Duplex', 'Dup', 420, '2024-05-27 19:34:32'),
(22, 'Kardus', 'Kar', 910, '2024-05-27 19:34:32'),
(23, 'Kertas Semen', 'Ksem', 1400, '2024-05-27 19:34:32'),
(24, 'Koran A', 'KorB', 910, '2024-05-27 19:34:32'),
(25, 'Majalah', 'Mjl', 700, '2024-05-27 19:34:32'),
(26, 'Putihan', 'KP', 1050, '2024-05-27 19:34:32'),
(27, 'Putihan Warna', 'KW', 910, '2024-05-27 19:34:32'),
(28, 'Buku', 'Buk', 840, '2024-05-27 19:34:32'),
(29, 'Tetrapack', 'Tpack', 500, '2024-05-27 19:34:32'),
(30, 'Botol Beling', 'Bbel', 280, '2024-05-27 19:34:32'),
(31, 'Alumunium Pocari', 'AlmPoc', 8400, '2024-05-27 19:34:32'),
(32, 'Alumunium Panci', 'AlmPnc', 9800, '2024-05-27 19:34:32'),
(33, 'Besi A', 'BsA', 2800, '2024-05-27 19:34:32'),
(34, 'Besi Kabin', 'BsCb', 2100, '2024-05-27 19:34:32'),
(35, 'Besi B - Stal', 'BsStal', 2100, '2024-05-27 19:34:32'),
(36, 'Besi Karempong', 'BKpg', 1260, '2024-05-27 19:34:32'),
(37, 'Kaleng', 'Klg', 1540, '2024-05-27 19:34:32'),
(38, 'Kuningan', 'Kun', 21000, '2024-05-27 19:34:32'),
(39, 'Tembaga', 'Tbg', 52500, '2024-05-27 19:34:32'),
(40, 'Kawat', 'Kwt', 700, '2024-05-27 19:34:32'),
(41, 'Kabel Isi', 'KablIsi', 1750, '2024-05-27 19:34:32'),
(42, 'Accu', 'Accu', 5600, '2024-05-27 19:34:32'),
(43, 'Seng', 'Sg', 1050, '2024-05-27 19:34:32'),
(44, 'AC 2PK 1 set', 'AC 2', 280000, '2024-05-27 19:34:32'),
(45, 'AC 1PK 1 set', 'AC1', 157500, '2024-05-27 19:34:32'),
(46, 'AC 3/4PK 1 set', 'AC3/4', 157500, '2024-05-27 19:34:32'),
(47, 'AC 1/2PK 1 set', 'AC1/2', 700, '2024-05-27 19:34:32'),
(48, 'TV Tabung', 'TVTbg', 700, '2024-05-27 19:34:32'),
(49, 'Mesin Cuci', 'MC', 1400, '2024-05-27 19:34:32'),
(50, 'Monitor LCD/Elektronik', 'Elc', 1400, '2024-05-27 19:34:32'),
(51, 'Setrika', 'Strk', 1400, '2024-05-27 19:34:32'),
(52, 'M. Air', 'Mair', 1400, '2024-05-27 19:34:32'),
(53, 'Rice Cooker', 'RC', 1400, '2024-05-27 19:34:32'),
(54, 'Dispenser', 'Dpsr', 1400, '2024-05-27 19:34:32'),
(55, 'DVD', 'DVD', 1400, '2024-05-27 19:34:32'),
(56, 'Kipas Angin', 'Fan', 1400, '2024-05-27 19:34:32'),
(57, 'Gabrukan', 'Gbrk', 700, '2024-05-27 19:34:32'),
(58, 'Minyak Jelantah', 'Jlth', 5000, '2024-05-27 19:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `berat` float NOT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `id_sampah` int(11) DEFAULT NULL,
  `id_nasabah` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `berat`, `total_harga`, `id_sampah`, `id_nasabah`, `created_at`, `updated_at`) VALUES
(1, 0.5, 420, 28, 3, '2024-05-27 13:54:43', '2024-05-27 13:54:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berat_sementara`
--
ALTER TABLE `berat_sementara`
  ADD PRIMARY KEY (`id_berat`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id_sampah`),
  ADD UNIQUE KEY `KODE` (`kode`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_sampah` (`id_sampah`),
  ADD KEY `id_nasabah` (`id_nasabah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berat_sementara`
--
ALTER TABLE `berat_sementara`
  MODIFY `id_berat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id_nasabah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_nasabah` FOREIGN KEY (`id_nasabah`) REFERENCES `nasabah` (`id_nasabah`),
  ADD CONSTRAINT `id_sampah` FOREIGN KEY (`id_sampah`) REFERENCES `sampah` (`id_sampah`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
