-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 02:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `star_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(7, 'Baju Wanita'),
(9, 'Jam Tangan'),
(11, 'Tas'),
(16, 'Baju Pria');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(2, 16, 'baju 1', 150000, 'gQbTgeSmh6j7FSeUJHH6.png', 'baju pria', 'tersedia'),
(3, 16, 'baju 3', 200000, 'yTsG3MRFyVz5Gcb5lfnb.png', 'baju pria', 'tersedia'),
(4, 16, 'baju 5', 500000, '0hAYEonBhy0LBukM2OTg.png', 'baju pria', 'tersedia'),
(5, 7, 'baju 2', 500000, 'Rxz3raXXWD2cKLO1IwML.png', 'baju wanita', 'tersedia'),
(6, 7, 'baju 4', 280000, '5yskf75iTl8c1HvwopFC.png', 'baju wanita', 'tersedia'),
(7, 9, 'jam 1', 150000, 'jdJP26u59VNcaTpVEAXL.png', 'jam tangan ', 'tersedia'),
(8, 9, 'jam 2', 150000, 'wBTfeF0AsJZLkHme34tO.png', 'jam tangan', 'tersedia'),
(9, 9, 'jam 3', 160000, 'd2gyzwufBpMYwGwQQd2K.png', 'jam tangan', 'tersedia'),
(10, 9, 'jam 4', 150000, 'UxYqU2DvKTU6nOINaJg0.png', 'jam tangan', 'tersedia'),
(11, 9, 'jam 5', 170000, 'bGUIx5t0QGRhp53C66kG.png', 'jam tangan', 'tersedia'),
(12, 16, 'baju 6', 250000, 'KjSLl8eDNFKYCNRuWatu.png', 'baju pria', 'tersedia'),
(13, 16, 'baju 7', 190000, 'pyqcgNmqiDIymH5oLakh.png', 'baju pria', 'tersedia'),
(14, 7, 'baju 8', 80000, 'pBzei2bMnC8tFkTdqrHB.png', 'baju wanita', 'tersedia'),
(15, 11, 'tas 1', 190000, 'VEaGdR4Gmjly8907oyL5.png', 'tas wanita', 'tersedia'),
(16, 11, 'tas 2', 200000, 'zGvkGDAPtTAY8aNSWkCS.png', 'tas wanita', 'tersedia'),
(17, 11, 'tas 3', 300000, 'fYRBmIxpKZ8eLj3XbyaP.png', 'tas wanita', 'tersedia'),
(18, 11, 'tas 4', 350000, 'FZs6QAiini3p6QNABx20.png', 'tas pria', 'tersedia'),
(19, 11, 'tas 5', 120000, 'PQVAhCbM7mdM4DtvGExl.png', 'tas pria', 'tersedia'),
(20, 11, 'tas 6', 80000, 'EVhKuJg9w6kxEzx6t3wu.png', 'tas pria', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, NULL, NULL),
(2, 'admin', '$2a$09$a4x5wNeht.eUVifcJ0mf1eWm0glzClbFu0PbfRX6t.zmVl5nOnagu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
