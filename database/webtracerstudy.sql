-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2022 at 02:09 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtracerstudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tracer`
--

CREATE TABLE `tb_tracer` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(5) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status_nikah` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `tahun_angkatan` varchar(255) NOT NULL,
  `tanggal_lulus` date NOT NULL,
  `kerja_sebelum_lulus` varchar(255) NOT NULL,
  `pengalaman_akademik` varchar(255) NOT NULL,
  `mulai_cari_kerja` varchar(255) NOT NULL,
  `jenis_pekerjaan_saat_ini` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tracer`
--

INSERT INTO `tb_tracer` (`id`, `nama`, `umur`, `jenis_kelamin`, `status_nikah`, `alamat`, `pendidikan`, `tahun_angkatan`, `tanggal_lulus`, `kerja_sebelum_lulus`, `pengalaman_akademik`, `mulai_cari_kerja`, `jenis_pekerjaan_saat_ini`, `foto`) VALUES
(1, 'Dadang S', 23, 'laki-laki', 'menikah', 'aadsdsa', 'S2', '2323', '2022-12-21', 'Ya, di lembaga formal dan sesuai dengan bidang yang ditekuni', 'Asisten Kuliah', 'Sebelum Lulus', 'Sesuai Bidang', 'arsitekturmodel.drawio (2).png'),
(2, 'Mobil', 23, 'laki-laki', 'belum_menikah', 'dasdassa', 'S2dsa', '2323', '2022-12-27', 'Ya, di lembaga formal dan sesuai dengan bidang yang ditekuni', 'Asisten Kuliah', 'Setelah Lulus', 'Sesuai Bidang', 'frame (10).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tracer`
--
ALTER TABLE `tb_tracer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tracer`
--
ALTER TABLE `tb_tracer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
