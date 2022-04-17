-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 10:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2203_sinauka-putrisekar-peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barang` varchar(25) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `nama_barang` varchar(75) NOT NULL,
  `jumlah_barang` varchar(15) NOT NULL,
  `status_akun` enum('tersedia','disimpan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barang`, `kode_matkul`, `nama_barang`, `jumlah_barang`, `status_akun`) VALUES
('KD-001', 'IF001', 'Kapasitor', '10', ''),
('KD-002', 'IF001', 'Resistor v2', '10', 'tersedia'),
('KD-003', 'IF001', 'Resistor v23', '1', 'tersedia'),
('KD-004', 'IF001', 'Pengujian with radio edit', '100', 'disimpan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerusakan`
--

CREATE TABLE `tb_kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `jenis` enum('rendah','sedang','parah') NOT NULL,
  `keterangan` varchar(120) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kerusakan`
--

INSERT INTO `tb_kerusakan` (`id_kerusakan`, `id_petugas`, `id_peminjaman`, `kode_barang`, `jenis`, `keterangan`, `foto`, `created_at`) VALUES
(1, 1, 1, 'KD-001', 'parah', 'Terbakar akibat shor', '1650183493-625bcd4537c52.jpg', '2022-04-17 08:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konfigurasi`
--

CREATE TABLE `tb_konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `maksimal_jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `prodi` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kelompok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`NIM`, `nama`, `prodi`, `kelas`, `kelompok`) VALUES
('1931130011', 'Dwi Putri Rahayu', 'Telekomunikasi ', '3A', '1'),
('1931130012', 'Sekar Tanjung', 'Telekomunikasi ', '3A', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `kode_matkul` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `semester` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`kode_matkul`, `nama`, `semester`, `created_at`) VALUES
('IF001', 'Pengukuran Listrik Proyek 2', 5, '2022-04-03 08:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `tanggal_awal` datetime NOT NULL,
  `tanggal_berakhir` datetime NOT NULL,
  `status` enum('dipinjam','sebagian','selesai') NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `qrcode` varchar(75) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_peminjaman`, `NIM`, `tanggal_awal`, `tanggal_berakhir`, `status`, `keterangan`, `qrcode`, `created_at`) VALUES
(1, '1931130011', '2022-04-17 04:44:31', '2022-04-17 04:44:31', 'dipinjam', 'Harap dipercepat peminjammnya', '625bba6fef682-1.png', '2022-04-17 03:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman_detail`
--

CREATE TABLE `tb_peminjaman_detail` (
  `id_peminjaman_detail` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjaman_detail`
--

INSERT INTO `tb_peminjaman_detail` (`id_peminjaman_detail`, `id_peminjaman`, `kode_barang`, `jumlah`) VALUES
(1, 1, 'KD-001', 1),
(2, 1, 'KD-002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `nama` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `id_user`, `NIP`, `nama`) VALUES
(1, 1, '1868135063', 'Joko Sujadmiko');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status akun` enum('aktif','nonaktif') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`, `status akun`, `created_at`, `update_at`) VALUES
(1, 'admin', '$argon2i$v=19$m=65536,t=4,p=1$SEdxS3NYLmhCU2dwLlFJSw$urLr24Dj++BAUd2DvWM3INn+ko94N+LC71Zy4DLC7uQ', 'aktif', '2022-03-19 03:37:01', '2022-04-03 07:16:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `tb_peminjaman_detail`
--
ALTER TABLE `tb_peminjaman_detail`
  ADD PRIMARY KEY (`id_peminjaman_detail`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_peminjaman_detail`
--
ALTER TABLE `tb_peminjaman_detail`
  MODIFY `id_peminjaman_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD CONSTRAINT `tb_kerusakan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`),
  ADD CONSTRAINT `tb_kerusakan_ibfk_3` FOREIGN KEY (`kode_barang`) REFERENCES `tb_barang` (`kode_barang`),
  ADD CONSTRAINT `tb_kerusakan_ibfk_4` FOREIGN KEY (`id_peminjaman`) REFERENCES `tb_peminjaman` (`id_peminjaman`);

--
-- Constraints for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_mahasiswa` (`NIM`);

--
-- Constraints for table `tb_peminjaman_detail`
--
ALTER TABLE `tb_peminjaman_detail`
  ADD CONSTRAINT `tb_peminjaman_detail_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tb_barang` (`kode_barang`);

--
-- Constraints for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
