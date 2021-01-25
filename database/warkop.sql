-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 05:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warkop`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_warkop`
--

CREATE TABLE `data_warkop` (
  `id_warkop` varchar(40) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `nama_warkop` varchar(40) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `peta` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_warkop`
--

INSERT INTO `data_warkop` (`id_warkop`, `id_user`, `nama_warkop`, `no_hp`, `alamat`, `peta`) VALUES
('710f9daf0a7f723d0a8d83e0b7ae91b1', '96a3be3cf272e017046d1b2674a52bd3', 'Zakir', '89292', 'sasas', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15883.94107148191!2d95.3782388!3d5.5691948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x757cba24b00f4f0a!2sDek%20Boy%20Coffe!5e0!3m2!1sen!2sid!4v1611255613405!5m2!1sen!2sid\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `level`) VALUES
('96a3be3cf272e017046d1b2674a52bd3', 'zulkiram', 'zulkiram', 'zul@zul', '1cf440e0df367e8a74becfa88ba0595a', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_warkop`
--
ALTER TABLE `data_warkop`
  ADD PRIMARY KEY (`id_warkop`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
