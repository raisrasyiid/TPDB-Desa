-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 12:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidigdes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'test'),
(2, 'aaa', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventaris`
--

CREATE TABLE `tbl_inventaris` (
  `id_inventaris` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `keadaan` enum('baik','tidak baik') NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_inventaris`
--

INSERT INTO `tbl_inventaris` (`id_inventaris`, `id_user`, `nama`, `jumlah`, `keadaan`, `gambar`) VALUES
(8, 2, 'kursi', 6, 'baik', 'kursi4.png'),
(9, 1, 'kipas angin', 4, 'baik', 'kipas.png'),
(10, 18, 'kursi', 15, 'baik', 'kursi5.png'),
(14, 35, 'meja', 2, 'baik', 'meja7.png'),
(16, 36, 'meja', 1, 'baik', 'meja8.png'),
(17, 36, 'kursi rusak', 7, 'tidak baik', 'kursi_rusak3.png'),
(18, 36, 'kipas', 2, 'baik', 'kipas7.png'),
(19, 36, 'kursi rusak', 7, 'tidak baik', 'kursi_rusak4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_midtrans`
--

CREATE TABLE `tbl_midtrans` (
  `order_id` char(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `gross_amount` int(255) NOT NULL,
  `payment_type` varchar(13) NOT NULL,
  `transaction_time` varchar(19) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `va_number` varchar(30) NOT NULL,
  `pdf_url` text NOT NULL,
  `status_code` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_midtrans`
--

INSERT INTO `tbl_midtrans` (`order_id`, `nama`, `nama_desa`, `paket`, `gross_amount`, `payment_type`, `transaction_time`, `bank`, `va_number`, `pdf_url`, `status_code`) VALUES
('1678047515', 'cek', 'cek', 'lite', 20000, 'bank_transfer', '2023-12-06 22:31:22', 'bca', '13843206605', 'https://app.sandbox.midtrans.com/snap/v1/transactions/6f231dd9-7de2-4eec-ac15-aa4146ce1e88/pdf', '201'),
('4458204', 'test', 'test', 'premium', 50000, 'bank_transfer', '2023-12-06 22:36:42', 'bca', '13843183353', 'https://app.sandbox.midtrans.com/snap/v1/transactions/dd3b981a-bfb1-43d5-b2dc-cde5d469cd52/pdf', '201'),
('756685196', 'rasyiid', 'desa hihi', 'lite', 50000, 'bank_transfer', '2023-12-05 19:55:43', 'bca', '13843034762', 'https://app.sandbox.midtrans.com/snap/v1/transactions/b1ca8ced-d1e2-48bc-8e8a-29a92cb2ed78/pdf', '201'),
('760350626', 'rais', 'desa test', 'exslusive', 100000, 'bank_transfer', '2023-12-06 22:17:34', 'bca', '13843269893', 'https://app.sandbox.midtrans.com/snap/v1/transactions/b4e2a7f6-aa6d-4758-8720-4e5c9cd0c134/pdf', '201');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `id_penduduk` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`id_penduduk`, `id_user`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`) VALUES
(1, 2, '1234', 'ahmad', 'laki-laki', 'yogyakarta', '2023-11-09', 'islam', 'yogyakarta'),
(3, 1, '3456678', 'agus santoso', 'laki-laki', 'yk', '2023-11-16', 'islam', 'desa jabung'),
(4, 2, '1111222', 'sasa', 'perempuan', 'solo', '2023-11-11', 'islam', 'japan'),
(6, 18, '3123456', 'Ahmad Rais Rasyiid', 'laki-laki', 'Solo', '2023-12-01', 'islam', 'jakarta'),
(7, 1, '3714798021003', 'Zasinda Yasmine Anastasya Balini', 'perempuan', 'Purwakarta', '2023-12-09', 'kristen', 'Purwakarta'),
(11, 35, '45678', 'rasyiid', 'laki-laki', 'solo', '2023-12-02', 'islam', 'yogyakarta'),
(13, 36, '78889', 'salsa', 'perempuan', 'jakarta', '2023-12-08', 'islam', 'yogyakarta'),
(15, 36, '4444', 'aaa', 'laki-laki', '444', '2023-12-02', 'kristen', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat`
--

CREATE TABLE `tbl_surat` (
  `id_surat` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_penduduk` int(10) NOT NULL,
  `jenis_surat` varchar(20) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_surat`
--

INSERT INTO `tbl_surat` (`id_surat`, `id_user`, `id_penduduk`, `jenis_surat`, `keperluan`, `tanggal`, `status`) VALUES
(1, 1, 1, 'domisili', 'kerja paksa', '2023-11-08', 'selesai'),
(5, 1, 7, 'domisili', 'lamar kerja', '2023-12-01', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `status_pembayaran` varchar(15) NOT NULL,
  `tenggat_waktu` date NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_user`, `status_pembayaran`, `tenggat_waktu`, `status`) VALUES
(19, 18, 'sudah bayar', '2023-12-01', 'Y'),
(95, 36, 'sudah bayar', '2023-12-06', 'Y'),
(96, 36, 'belum bayar', '2023-12-06', 'N'),
(98, 36, 'belum bayar', '2023-12-06', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_desa`) VALUES
(1, 'admin', 'admin123', 'desa jabung'),
(2, 'aaa', 'aaa', 'aaa'),
(18, 'cek', 'cek', 'cek'),
(35, 'rais', '123', 'desa test'),
(36, 'test', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_midtrans`
--
ALTER TABLE `tbl_midtrans`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  MODIFY `id_inventaris` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  MODIFY `id_penduduk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  ADD CONSTRAINT `tbl_inventaris_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD CONSTRAINT `tbl_penduduk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  ADD CONSTRAINT `tbl_surat_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `tbl_penduduk` (`id_penduduk`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_surat_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
