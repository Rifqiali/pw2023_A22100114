-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 10:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp3`
--

-- --------------------------------------------------------

--
-- Table structure for table `kaset`
--

CREATE TABLE `kaset` (
  `Id` int(11) NOT NULL,
  `Nama_Peminjam` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Cd` varchar(255) NOT NULL,
  `Tgl_peminjaman` varchar(255) NOT NULL,
  `Tgl_pengembalian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kaset`
--

INSERT INTO `kaset` (`Id`, `Nama_Peminjam`, `Alamat`, `Cd`, `Tgl_peminjaman`, `Tgl_pengembalian`) VALUES
(1111, 'Kamalluddin', 'Panyingkiran', 'Best of Slow Rock', '14-09-2019', '18-09-2019'),
(1112, 'Euncep', 'Tegal Kalong', 'Rockmantic Song', '22-10-2019', '29-10-2019'),
(1113, 'Rizal', 'Kebonkol', 'Queen', '10-08-2019', '17-08-2019'),
(1114, 'Francissca', 'Angkrek', 'Best of Love Song', '24-08-2019', '31-08-2019'),
(1115, 'Hana Nur Fauziah', 'Karapyak', 'Best of BTS', '01-12-2019', '07-12-2019'),
(1116, 'Anastasya', 'Perum Angkrek Regency', 'One Direction', '08-07-2019', '14-07-2019'),
(1117, 'Amanda Nabilla', 'Pangeran Santri', 'Instrumental Saxophone', '22-06-2019', '28-06-2019'),
(1118, 'Fakhrulrazi', 'Rancapurut', 'Best of The Beast Iron Maiden', '17-05-2019', '22-05-2019'),
(1119, 'Syahrul', 'Ketib', 'Genesis', '01-07-2019', '06-07-2019'),
(1120, 'Salsabilla Nur ', 'Mekarsari', 'Madonna, Britney Spears, Whitney Houstson', '08-02-2019', '16-01-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kaset`
--
ALTER TABLE `kaset`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
