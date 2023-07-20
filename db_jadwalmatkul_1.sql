-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 08:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jadwalmatkul`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nip`, `nidn`, `nama_dosen`, `alamat`, `telepon`, `username`, `password`) VALUES
(1, '198003062003122002', '1234567', 'Ni Wayan Wisswani, ST., MT', 'Jl Suka-Suka', '0883283820', 'Dwiss', '123'),
(2, '198005312005011003', '12345678', 'Wayan Candra Winetra, S.Kom., M.Kom', 'Jl.Bunga Mawar', '0829389933', 'Dwinetra', '12'),
(3, '197609042006042001', '123456789', ' Ni Gusti Ayu Putu Harry Saptarini, S.Kom., M.Cs', 'Jl.Soka', '0827383739', 'Dharry', '1234'),
(4, '198504132014042001', '1234567890', 'Putu Indah Ciptayani,S.Kom.,M.Cs', 'Jl. Denpasar', '08863929091012', 'Dpic', '12'),
(5, '233984903923903', '23456', 'Ni Ketut Pradnyani Gayatri Sarja, S.Kom., M.Kom', 'Jl. Jimbaran', '0763293794', 'Dpradnya', '111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL,
  `nama_ruangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kode_kelas`, `nama_ruangan`) VALUES
(1, 'K1_MI', 'Manajemen Informatika'),
(2, 'K2_TO', 'Teknik Otomasi'),
(3, 'K3_TL', 'Teknik Listrik'),
(4, 'K4_TRPL', 'Teknologi Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelolajadwal`
--

CREATE TABLE `tb_kelolajadwal` (
  `id_kelolajadwal` int(11) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelolajadwal`
--

INSERT INTO `tb_kelolajadwal` (`id_kelolajadwal`, `nama_dosen`, `hari`, `kode_kelas`, `nama_matkul`, `nama_prodi`, `waktu_mulai`, `waktu_selesai`) VALUES
(8, 'Ni Wayan Wisswani, ST., MT', 'Senin', 'K1_MI', 'Rekayasa Kebutuhan Perangkat Lunak', 'D3 Manajemen Informatika', '08:00:00', '09:40:00'),
(9, ' Ni Gusti Ayu Putu Harry Saptarini, S.Kom., M.Cs', 'Senin', 'K1_MI', 'Metode dan Model Pengembangan Perangkat Lunak', 'D4 Teknologi Rekayasa Perangkat Lunak', '08:00:00', '09:40:00'),
(10, 'Wayan Candra Winetra, S.Kom., M.Kom', 'Senin', 'K2_TO', 'Rekayasa Kebutuhan Perangkat Lunak', 'D3 Teknik Listrik', '12:00:00', '09:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(50) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`id_matkul`, `kode_matkul`, `nama_matkul`) VALUES
(1, 'MKK-43515', 'Rekayasa Kebutuhan Perangkat Lunak'),
(2, 'MPB-43502', 'Ide Kreatif dan Kewirausahaan'),
(3, 'MPB-43517', 'Metode dan Model Pengembangan Perangkat Lunak'),
(4, 'MKK-43516', 'Pemrograman Web Lanjut'),
(5, 'MKK-43518', 'Database Administrator'),
(6, 'MKK-43514', 'Pemrograman  Berorientasi Obyek II');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'D3 Manajemen Informatika'),
(2, 'D3 Teknik Listrik'),
(3, 'D4 Teknik Otomasi'),
(4, 'D4 Teknologi Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rangewaktu`
--

CREATE TABLE `tb_rangewaktu` (
  `id_waktu` int(11) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rangewaktu`
--

INSERT INTO `tb_rangewaktu` (`id_waktu`, `hari`, `waktu_mulai`, `waktu_selesai`) VALUES
(1, 'Senin', '08:00:00', '09:40:00'),
(2, 'Senin', '12:00:00', '15:20:00'),
(3, 'Selasa', '08:00:00', '11:20:00'),
(4, 'Selasa', '12:00:00', '15:20:00'),
(5, 'Rabu', '08:00:00', '12:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(59) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'hilmi', 'hilmi', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_kelolajadwal`
--
ALTER TABLE `tb_kelolajadwal`
  ADD PRIMARY KEY (`id_kelolajadwal`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_rangewaktu`
--
ALTER TABLE `tb_rangewaktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kelolajadwal`
--
ALTER TABLE `tb_kelolajadwal`
  MODIFY `id_kelolajadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
