-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 04:58 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(30) NOT NULL,
  `Kelas` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tanggal_pendaftaran` varchar(25) NOT NULL,
  `tempat_tanggal_lahir` varchar(40) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `Jenis_Kelamin`, `Kelas`, `alamat`, `tanggal_pendaftaran`, `tempat_tanggal_lahir`, `agama`) VALUES
(1, 'Kemal', 'Laki-Laki', 'VII A', 'Jl. Bode wetan Cirebon', '', '', ''),
(2, 'Trisno', 'Laki-laki', 'VII B', 'Kedawung', '', '', ''),
(9, '12', ' 12', '12', '12', '', '', ''),
(10, 'mario', ' laki laki', '5', '12 12 12', '', '', ''),
(11, 'bnmbnm', ' bnmbnm', 'qw', 'bnmbnm', '12 12 12', '', ''),
(12, 'jkljk', ' jkljkl', 'jkljkl', 'jkljl', 'jkljkl', '', ''),
(13, 'test', ' tes', 'tes', 'tes', 'tes', 'tes', ''),
(14, '99', ' 99', '99', '99', '99', '99', '99'),
(15, '888', ' 888', '888', '888', '888', '888', '888'),
(16, '99999', ' 999999', '999999', '99999', '9999', '999999', '99999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
