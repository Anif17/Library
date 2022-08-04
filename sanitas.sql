-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 05:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'anif@gmail.com', 'anif17'),
(3, 'harith@gmail.com', 'Harith02'),
(4, 'amri@gmail.com', 'amri32'),
(5, 'Yeong@gmail.com', 'Yeong12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `cust_id` int(20) NOT NULL,
  `cust_pass` varchar(250) NOT NULL,
  `cust_name` varchar(80) DEFAULT NULL,
  `cust_address` varchar(250) DEFAULT NULL,
  `cust_phone` varchar(20) DEFAULT NULL,
  `cust_email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`cust_id`, `cust_pass`, `cust_name`, `cust_address`, `cust_phone`, `cust_email`) VALUES
(234533, 'anif2002', 'Muhammad Anif Bin Zulkifli', '38 Jalan Ros Merah 2/7 Taman Jaya, 81100 Johor Bahru, Johor', '0193294736', 'Anif@gmail.com'),
(234534, 'hjh12', 'Hjh Nurarisha Zulkhairie', '28 3 Jln Usj 9/5P Taman Seafield Jaya Petaling Jaya,\r\n47620 Petaling Jaya,\r\nSelangor.', '0129382212', 'Nurarisha@gmail.com'),
(234535, 'see12', 'Seetho Kean Tiak', '861 Jln Klian Intan Buntong\r\n30100 Ipoh,\r\nPerak.', '0128382827', 'Seetho@gmail.com'),
(234536, 'ram32', 'Nandakumar Ramasamy a/l Devaraj', 'Jalan 1/38B off Jalan Segambut, Mukim Batu,\r\n50480 Wilayah Persekutuan,\r\nKuala Lumpur.', '0139283942', 'Nandakumar@gmail.com'),
(234541, '321123', 'Yeong Ki Liong', 'Jalan SS7/2, Kelana Jaya, 47301, Petaling Jaya.\r\n\r\n', '0192842834', 'Yeong@gmail.com'),
(234542, 'teotan', 'Teo Tan Sha ', '440 G Lrg 9 Off Jalan Ang Cheng Ho Kuching, 93100 Kuching, Sarawak', '0178234653', 'TeoSha@gmail.com'),
(234551, 'arisya95', 'Nur Arisya binti Sanorhizam Wahid', '67, Jalan 6X, Lembah Mahkota, 87021 Layang-Layang, Labuan', '0192834422', 'Arisya@gmail.com'),
(234552, 'Nur43', 'Nur Mas binti Zamran', 'No. 4-4, Lorong 4, USJ 50H, 66675 Kuantan, Pahang', '0139482365', 'Nur@gmail.com'),
(234553, 'Shamizul44', 'Shamizul Anwar bin Nik Nazhan', 'No. 9-4, Lorong 8, Taman Desa Casa, 62125 Precinct 19, Putrajaya', '0192837446', 'Shamizul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orddetail`
--

CREATE TABLE `tb_orddetail` (
  `ordDetail_id` int(20) NOT NULL,
  `cust_id` int(20) NOT NULL,
  `prod_id` int(20) NOT NULL,
  `ordDetail_qnty` int(10) DEFAULT NULL,
  `ordDetail_price` decimal(6,2) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_orddetail`
--

INSERT INTO `tb_orddetail` (`ordDetail_id`, `cust_id`, `prod_id`, `ordDetail_qnty`, `ordDetail_price`, `status`) VALUES
(111, 234533, 11293, 1, '42.20', 'success'),
(119, 234533, 11295, 1, '42.20', 'success'),
(120, 234533, 11298, 1, '54.80', 'success'),
(122, 234533, 11294, 1, '42.20', 'success'),
(124, 234533, 11293, 1, '42.20', 'success'),
(125, 234533, 11294, 1, '42.20', 'success'),
(126, 234533, 11295, 1, '42.20', 'success'),
(130, 234551, 11293, 1, '42.20', 'pending'),
(131, 234551, 11296, 1, '29.30', 'pending'),
(133, 234533, 11295, 1, '42.20', 'pending'),
(134, 234533, 11321, 1, '72.20', 'pending'),
(135, 234533, 11301, 1, '26.20', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `prod_id` int(20) NOT NULL,
  `prod_name` varchar(80) DEFAULT NULL,
  `prod_quantity` int(20) DEFAULT NULL,
  `prod_price` decimal(5,2) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`prod_id`, `prod_name`, `prod_quantity`, `prod_price`, `image`) VALUES
(11293, 'Loreal Extraordinary Oil (High Shine) 100ml -Pink', 198, '42.20', 'loreal_f1.jpg'),
(11294, 'Loreal Extraordinary Oil (Dry Hair) 100ml -Brown', 192, '42.20', 'loreal_f2.jpg'),
(11295, 'Loreal Extraordinary Oil (Normal Or Dry Hair) 100ml -Gold', 200, '42.20', 'loreal_f3.jpg'),
(11296, 'Loreal Fall Resist 3X Hair Mask 200ml', 191, '29.30', 'loreal_f4.jpg'),
(11297, 'Loreal Revitalift Night Cream 50ml', 197, '62.30', 'loreal_f5.jpg'),
(11298, 'Loreal Revitalift Day Cream Spf23/Spf35 50ml', 200, '54.80', 'loreal_f6.jpg'),
(11299, 'Loreal Pro Youth Mask Brightening', 195, '8.20', 'loreal_f7.jpg'),
(11300, 'Loreal Revitalift Wht Anti-Wrinkle + Spot Corrector Spf18 Cream 50ml', 200, '41.50', 'loreal_f8.jpg'),
(11301, 'Loreal Gentle Lip & Make Up Remover 125ml', 199, '26.20', 'loreal_f9.jpg'),
(11302, 'Loreal Revitalift Anti Wrinkle Aqua-Milky Toner 200ml', 200, '41.50', 'loreal_f10.jpg'),
(11303, 'Loreal Men Expert Hydra Power Watery Foaming Gel 100ml', 200, '18.90', 'loreal_f11.jpg'),
(11321, 'Loreal Revitalift Laser X3 Day Cream 50ml', 199, '72.20', 'loreal_f12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tb_orddetail`
--
ALTER TABLE `tb_orddetail`
  ADD PRIMARY KEY (`ordDetail_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `cust_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234555;

--
-- AUTO_INCREMENT for table `tb_orddetail`
--
ALTER TABLE `tb_orddetail`
  MODIFY `ordDetail_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `prod_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11323;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_orddetail`
--
ALTER TABLE `tb_orddetail`
  ADD CONSTRAINT `tb_orddetail_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `tb_customer` (`cust_id`),
  ADD CONSTRAINT `tb_orddetail_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `tb_product` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
