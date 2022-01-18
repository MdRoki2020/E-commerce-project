-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 09:22 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs-x`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `submit` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`id`, `product_id`, `product_category`, `name`, `city`, `district`, `thana`, `phone`, `email`, `quantity`, `submit`) VALUES
(6, 1, 'electronics', 'bristy', 'rangpur', 'Nilphamari', 'Taragonj', '01717453205', 'bristy@gmail.com', 'six', '2021-11-06 20:48:56'),
(7, 13, 'offers', 'Tithee', 'rajshahi', 'Dinajpur', 'Bhirampur (...)', '01642861758', 'tithee@gmail.com', 'six', '2021-11-12 02:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `submit` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `submit`) VALUES
(1, 'mroki815@gmail.com', '1234', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `orginal_price` int(11) NOT NULL,
  `product_price` int(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `product_title`, `product_category`, `product_desc`, `product_image`, `orginal_price`, `product_price`, `time`) VALUES
(12, 'Harpic', 'offers', 'Harpic Toilet And Lizol Surface Cleaner Liquid', '770276100.webp', 130, 119, '2021-11-12 02:48:00'),
(13, 'Disinfectant', 'offers', 'dhamakaa !! 99.99% clean and jurms protections', '492303240.webp', 255, 235, '2021-11-12 02:49:10'),
(14, 'Hand Wash', 'offers', 'Dettol Disinfectant Surface Spray Best Offers', '630824767.webp', 350, 299, '2021-11-12 02:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_category`, `product_title`, `product_desc`, `product_image`, `product_price`, `time`) VALUES
(17, 'electronics', 'cannon 600D', '600D is more beautyfull Structural design, clear picture quality and better user expreanced', '1931550069.jpeg', 30000, '2021-11-07 23:19:45'),
(18, 'electronics', 'oppo f15', 'made by japan body and ultra sensor detection', '1578320291.jpg', 20000, '2021-11-07 23:23:08'),
(19, 'electronics', 'Frize', 'singre frize is one of the best frize in bangladesh, its totally made by coper consender ,, and 1 year warnty', '161359461.jpg', 44300, '2021-11-07 23:37:51'),
(23, 'electronics', 'SINGER FRIDGE', 'this fridge made by Australia, Totally making by coper consender', '457532693.jpg', 42000, '2021-11-15 02:08:21'),
(24, 'electronics', 'Electronics Bracelet', 'This Bracelect Produce By Microsoft, its count your walking step,blood tep,hardbit and many more work ', '1604479968.jpg', 12000, '2021-11-15 02:13:14'),
(25, 'electronics', 'computer', 'core i7 , gamming processor with much more fetures ,its border less monitor', '1814635000.jpg', 54400, '2021-11-15 02:16:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
