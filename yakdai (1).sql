-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2019 at 10:16 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yakdai`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `cus_image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `cus_image`, `created_date`) VALUES
(1, 'piti', 'laooo', '02097778968', 'img/cus/zGhIbxzghPrTOKjYoYMX.jpg', '2019-11-18 09:42:09'),
(2, 'piti', 'laooo', '02097778968', 'img/cus/OXY3pgbWvhZnM9yvpzJE.jpg', '2019-11-18 09:43:40'),
(3, 'por', 'sssss', '02097778968', 'img/cus/fwk6sSA2ISCJNDY7beAJ.jpg', '2019-11-18 09:54:47'),
(4, 'son', 'u ban', '999999', 'img/cus/L0mSBLkL9GwVJJrvzyUW.jpg', '2019-11-18 10:02:46'),
(5, 'humnoy', 'laosss', '1111111', 'img/cus/pjvWemTJW31f0wvXnZHX.jpg', '2019-11-18 10:04:54'),
(6, 'lao', 'sssss', '12345', 'img/cus/9NlWfRfmk8yAR3d6wv08.jpg', '2019-11-18 10:06:29'),
(7, 'son', 'okok', '999999', 'img/cus/ghou9xkjEm3bxH5j2tom.jpg', '2019-11-20 08:23:45'),
(8, 'ປິຕິ ພັນທະສົມບັດ', 'ວຽງຈັນ', '99999999', 'img/cus/P20GLRRIvHJDswKaKyL9.jpg', '2019-11-20 08:30:41'),
(9, 'hahah', 'haha', '888888', 'img/cus/VS1M4Ppm26PDzxWUf7YF.jpg', '2019-11-25 13:35:36'),
(10, 'ທົດລອງງ', 'ລາວ', '1019199191', 'img/cus/qUIGSYy14kUt1SxgEhzy.jpg', '2019-11-25 13:43:37'),
(11, 'ປໍ', 'ລາວ', '11111', 'img/cus/KDeopVsWOJe30zAYPDfm.jpg', '2019-11-25 14:01:11'),
(12, 'ລາວ', 'ລາວວ', '9900', 'img/cus/Nq1DuefxbWJPwSjIPeWj.jpg', '2019-11-25 14:21:11'),
(13, 'QR', 'haha', '100110', 'img/cus/lf7SKeWa4CZgZ8AmT5pC.png', '2019-11-25 14:29:33'),
(14, 'hahahah', 'aaaa', '646466', 'img/cus/j97mi1GLeVXKG6us31pW.jpg', '2019-11-25 15:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) UNSIGNED NOT NULL,
  `cus_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `pro_size` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_order` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_date` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_order` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `cus_id`, `pro_id`, `number`, `pro_size`, `product_id`, `detail`, `status`, `date_order`, `update_date`, `create_order`) VALUES
(20, 8, 8, 8, 'b', NULL, 'b', 'ກໍາລັງຈັດຊື້', '21-11-2019', '22-11-2019', '2019-11-21 14:51:26'),
(21, 8, 8, 8, 'vb', NULL, 'b', 'ກໍາລັງຈັດຊື້', '21-11-2019', '22-11-2019', '2019-11-21 14:51:39'),
(22, 8, 8, 8, '้', NULL, 'ใหให', 'ກໍາລັງຈັດຊື້', '21-11-2019', '22-11-2019', '2019-11-21 15:04:42'),
(23, 8, 6, 8, 'ื', NULL, NULL, 'ກໍາລັງຈັດຊື້', '21-11-2019', '22-11-2019', '2019-11-21 15:05:16'),
(24, 8, 9, 9, 'ื', NULL, 'ส', 'ກໍາລັງຈັດຊື້', '21-11-2019', '22-11-2019', '2019-11-21 15:11:29'),
(25, 8, 8, 8, 'v', NULL, 'jaj', 'ກໍາລັງຈັດຊື້', '22-11-2019', '22-11-2019', '2019-11-22 10:18:05'),
(26, 8, 14, 12, 'hahah', NULL, 'bab', 'ກໍາລັງຈັດຊື້', '22-11-2019', '22-11-2019', '2019-11-22 10:18:45'),
(27, 8, 13, 10, '10', NULL, 'jj', 'ກໍາລັງສັ່ງ', '22-11-2019', NULL, '2019-11-22 11:11:33'),
(28, 8, 6, 1, 'w', NULL, 'f', 'ກໍາລັງຈັດຊື້', '22-11-2019', NULL, '2019-11-22 11:15:57'),
(29, 8, 6, 6, 'v', NULL, 'v', 'ກໍາລັງສັ່ງ', '22-11-2019', NULL, '2019-11-22 13:35:15'),
(30, 8, 13, 1, 'bb', NULL, 'bb', 'ກໍາລັງຈັດຊື້', '22-11-2019', NULL, '2019-11-22 13:35:41'),
(31, 10, 14, 10, '10', NULL, 'ເຄຄຄ', 'ກໍາລັງຈັດຊື້', '25-11-2019', '25-11-2019', '2019-11-25 13:51:03'),
(32, 10, 14, 1, 'ຮ', NULL, 'ເຄຄ', 'ກໍາລັງຈັດຊື້', '25-11-2019', NULL, '2019-11-25 13:52:00'),
(33, 9, 19, 10, 'hah', NULL, 'jaj', 'ກໍາລັງສັ່ງ', '25-11-2019', NULL, '2019-11-25 16:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_payment`
--

CREATE TABLE `order_payment` (
  `id` int(11) UNSIGNED NOT NULL,
  `cus_id` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_payment`
--

INSERT INTO `order_payment` (`id`, `cus_id`, `number`, `total_price`, `created_date`) VALUES
(8, '8', 16, 120000, '2019-11-21 14:52:01'),
(9, '8', 8, 60000, '2019-11-21 15:04:51'),
(10, '8', 8, 1011, '2019-11-21 15:06:06'),
(11, '8', 9, 1666, '2019-11-22 09:58:31'),
(12, '8', 12, 22000, '2019-11-22 11:09:19'),
(13, '10', 10, 22000, '2019-11-25 13:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `pro_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_pro` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `price_old` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `delivery_price` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `detail` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `type_pro`, `number`, `price_old`, `price_sale`, `delivery_price`, `address`, `image`, `status`, `create_at`, `detail`) VALUES
(12, 'hh', 'hhh', 1000, 700000, 1000000, 10000, '55', 'img/iKrrIvwTRFFcNCK7Ya3e.jpg', 'ຈັດຊື້ສໍາເລັດ', '2019-11-18 09:31:38', '666'),
(13, 'por', 'qq', 777777, 99999, 99999, 99999, 'ggg', 'img/Gaysc9EYnL3hGy1PxHnw.jpg', 'ສີນຄ້າຮອດສາງລາວ', '2019-11-18 10:54:29', 'aaa'),
(14, 'ນ້ຳປັ່ນ', 'ນ້ຳ', 112364, 20000, 900000, 10000, 'ລາວ', 'img/f7P3f1ivgp8T2LEHhOUS.jpg', 'ຈັດຊື້ສໍາເລັດ', '2019-11-20 09:48:39', 'ເຄຄ'),
(15, 'jjj', 'xx', 11, 555, 666, 9000, 'aaa', 'img/f7P3f1ivgp8T2LEHhOUS.jpg', 'ກໍາລັງສັ່ງ', '2019-11-25 15:53:10', 'haha'),
(16, 'ອຳພອນ', 'ຄົນ', 10000, 3000, 6000, 1000, 'ລາວ', 'img/kUDOntRTEGNonkDbuVYO.jpg', 'ຈັດຊື້ສໍາເລັດ', '2019-11-25 15:55:44', NULL),
(17, 'ເບຍຍຍອາເມຊອນ', 'ຄົນ', 12234, 90000, 3000, 10000, 'ລາວ', 'img/CcsMZIV74YSzZQoTPfxE.jpg', 'ກໍາລັງສັ່ງ', '2019-11-25 15:57:48', NULL),
(18, 'ເທດດດກກ', 'ຄົນ', 6666, 6000, 1000055, 10000, 'ລາວ', 'img/UNfiCCKkvtAULU2F5Vk4.jpg', 'ສີນຄ້າຮອດສາງລາວ', '2019-11-25 15:58:43', NULL),
(19, 'iphone 11', '100', 969399, 55, 55, 333, 'lao', 'img/2wnFucpZcuyYBKV9s4yK.png', 'ຈັດຊື້ສໍາເລັດ', '2019-11-25 16:04:50', 'okok'),
(20, 'MacBook', 'computer', 9999, 1000000, 3000000, 100000, NULL, 'img/g3pLKjd2aBkSzEKWzwRu.jpg', 'ຈັດຊື້ສໍາເລັດ', '2019-12-04 10:36:11', NULL),
(21, 'ສາຍແລນ', 'computer', 10, 1000000, 2000000, 100000, 'ລາວ', 'img/PFZ6eEfAgY3ZXB40wFIN.jpg', 'ກໍາລັງສັ່ງ', '2019-12-04 10:38:18', 'ເຄຄ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `address`, `phone`, `created_date`) VALUES
(1, 'piti', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2019-11-18 08:11:54'),
(2, 'piti', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2019-11-18 08:28:09'),
(3, 'piti', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2019-11-18 08:32:38'),
(4, 'piti', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2019-11-18 08:33:58'),
(5, 'piti', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, '2019-11-18 08:34:08'),
(6, 'por', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2019-11-18 09:02:36'),
(7, 'haha', '202cb962ac59075b964b07152d234b70', 'lao', '999999', '2019-11-18 09:04:02'),
(8, 'son', '202cb962ac59075b964b07152d234b70', 'lao', '123', '2019-11-20 09:21:14'),
(9, 'por', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2019-11-26 09:58:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payment`
--
ALTER TABLE `order_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order_payment`
--
ALTER TABLE `order_payment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
