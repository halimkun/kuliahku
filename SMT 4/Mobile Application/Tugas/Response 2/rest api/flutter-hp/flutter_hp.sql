-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2021 at 04:25 AM
-- Server version: 10.5.10-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flutter_hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idhp` int(11) NOT NULL,
  `tipehp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layarhp` double DEFAULT NULL,
  `prochp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meminthp` int(11) DEFAULT NULL,
  `ramhp` int(11) DEFAULT NULL,
  `bathp` int(11) DEFAULT NULL,
  `hargahp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idhp`, `tipehp`, `layarhp`, `prochp`, `meminthp`, `ramhp`, `bathp`, `hargahp`) VALUES
(1, 'Redmi Note 8', 6.3, 'Snapdragon 665', 64, 4, 4000, 2250000),
(2, 'Redmi 4X', 5, 'Snapdragon 435', 16, 2, 4100, 1358000),
(3, 'Redmi 3S', 5, 'Snapdragon 430', 16, 2, 4100, 985000),
(4, 'Oppo Neo 5 (2015)', 4.5, 'MT6582', 8, 1, 2000, 590000),
(10, 'Test 1 - edited 2', 5.3, 'Snapdragon 665', 64, 4, 4500, 2230000),
(11, 'test 2 - edited 1', 5, 'G761', 64, 6, 5000, 5000000),
(12, 'test 3', 6, 'Snapdrag 989', 128, 12, 9000, 8000000),
(13, 'Test 4', 6, 'Dragon 999', 512, 64, 12000, 19000000),
(14, 'test 5 ', 5, 'Bal 989', 64, 4, 5000, 2000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idhp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idhp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
