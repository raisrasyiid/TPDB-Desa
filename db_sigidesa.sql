-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 04:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sigidesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int(4) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `koordinator` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(4) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `penulis` varchar(10) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `isi_artikel` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desa`
--

CREATE TABLE `tbl_desa` (
  `id_desa` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `alamat_desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `visi` varchar(50) NOT NULL,
  `misi` varchar(50) NOT NULL,
  `tentang` varchar(100) NOT NULL,
  `sejarah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` int(4) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk_hukum`
--

CREATE TABLE `tbl_produk_hukum` (
  `id_hukum` int(4) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `data_hukum` varchar(100) NOT NULL,
  `infografis` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id_sosmed` int(4) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistik`
--

CREATE TABLE `tbl_statistik` (
  `id_statistik` int(4) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `gmbr_kependudukan` varchar(50) NOT NULL,
  `gmbr_pendidikan` varchar(50) NOT NULL,
  `gmbr_apbdesa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `id_subscribe` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `paket` varchar(20) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `tenggat_waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_support`
--

CREATE TABLE `tbl_support` (
  `id_support` int(4) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wilayah`
--

CREATE TABLE `tbl_wilayah` (
  `id_wilayah` int(4) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `luas` varchar(50) NOT NULL,
  `dusun` varchar(10) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id_wisata` int(4) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'rais', 'rais', 'admin'),
(3, 'aaaa', 'bbb', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD UNIQUE KEY `id_desa` (`id_desa`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD UNIQUE KEY `id_desa` (`id_desa`);

--
-- Indexes for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `id_desa` (`id_desa`);

--
-- Indexes for table `tbl_produk_hukum`
--
ALTER TABLE `tbl_produk_hukum`
  ADD PRIMARY KEY (`id_hukum`),
  ADD UNIQUE KEY `id_desa` (`id_desa`);

--
-- Indexes for table `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id_sosmed`),
  ADD UNIQUE KEY `id_desa` (`id_desa`);

--
-- Indexes for table `tbl_statistik`
--
ALTER TABLE `tbl_statistik`
  ADD PRIMARY KEY (`id_statistik`),
  ADD UNIQUE KEY `id_desa` (`id_desa`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`id_subscribe`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_support`
--
ALTER TABLE `tbl_support`
  ADD PRIMARY KEY (`id_support`),
  ADD UNIQUE KEY `id_desa` (`id_desa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  ADD PRIMARY KEY (`id_wilayah`),
  ADD UNIQUE KEY `id_desa` (`id_desa`);

--
-- Indexes for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD UNIQUE KEY `id_desa` (`id_desa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  MODIFY `id_desa` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_pegawai` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_produk_hukum`
--
ALTER TABLE `tbl_produk_hukum`
  MODIFY `id_hukum` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id_sosmed` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_statistik`
--
ALTER TABLE `tbl_statistik`
  MODIFY `id_statistik` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `id_subscribe` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_support`
--
ALTER TABLE `tbl_support`
  MODIFY `id_support` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  MODIFY `id_wilayah` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id_wisata` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD CONSTRAINT `tbl_agenda_ibfk_1` FOREIGN KEY (`id_agenda`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD CONSTRAINT `tbl_desa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD CONSTRAINT `tbl_pegawai_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_produk_hukum`
--
ALTER TABLE `tbl_produk_hukum`
  ADD CONSTRAINT `tbl_produk_hukum_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD CONSTRAINT `tbl_sosmed_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_statistik`
--
ALTER TABLE `tbl_statistik`
  ADD CONSTRAINT `tbl_statistik_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD CONSTRAINT `tbl_subscribe_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_support`
--
ALTER TABLE `tbl_support`
  ADD CONSTRAINT `tbl_support_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  ADD CONSTRAINT `tbl_wilayah_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD CONSTRAINT `tbl_wisata_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tbl_desa` (`id_desa`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
