-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 09:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordertabel`
--

CREATE TABLE `ordertabel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `worknumber` int(11) NOT NULL,
  `cellnumber` int(11) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `paymentmethod` varchar(200) NOT NULL,
  `productid` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productsize` varchar(100) NOT NULL,
  `productsku` varchar(100) NOT NULL,
  `productquantity` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordertabel`
--

INSERT INTO `ordertabel` (`id`, `name`, `email`, `worknumber`, `cellnumber`, `dob`, `message`, `paymentmethod`, `productid`, `productname`, `productsize`, `productsku`, `productquantity`, `total`, `address`) VALUES
(5, 'admin', 'Admin@gmail.com', 123456, 123546, '2023-02-09', 'gfhgfhgfhfggfghff', 'Cash On Delivery', '3,2,1', 'Total Control Foundation,Matte Lipstick,Enamel Nail Paint', 'm,l,s', 'F-001,L-003,N-004', '3,5,1', '$ 900.00', '123 street london'),
(6, 'admin', 'Admin@gmail.com', 456789, 147585, '2023-02-02', 'adsasdsdasdaassdaasd', 'PayPal', '2,1,3', 'Total Control Foundation,Matte Lipstick,Enamel Nail Paint,Enamel Nail Paint', 'm,l,s,s', 'F-001,L-003,N-004,N-003', '3,5,1,1', '$ 1,000.00', '123 karachi'),
(7, 'admin', 'Admin@gmail.com', 2147483647, 2147483647, '2023-02-22', '34543543345435345345', 'Cash On Delivery', '5,4,7', 'Total Control Foundation,Matte Lipstick,Enamel Nail Paint,Enamel Nail Paint,Mineral Blusher', 'm,l,s,s,s', 'F-001,L-003,N-004,N-003,S-003', '3,5,1,1,2', '$ 1,200.00', '123 street dubai'),
(8, 'admin', 'Admin@gmail.com', 1332, 1232313121, '2023-02-06', 'asdasdsadasdasd', 'Cash On Delivery', '12', ' Matte Lipstick', 's', 'L-002', '1', '$ 100.00', '123 karachi'),
(9, 'sadasd', 'Admin@gmail.com', 2147483647, 2147483647, '2023-02-09', '123213123123', 'PayPal', '12', ' Matte Lipstick', 's', 'L-002', '1', '$ 100.00', 'asdasd'),
(10, 'mubashir', 'mubashir@gmail.com', 54645646, 1236789, '2023-02-01', 'asdsdadsdsasda', 'Cash On Delivery', '19', 'Enamel Nail Paint', 'm', 'N-004', '3', '$ 300.00', 'sdadassadad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordertabel`
--
ALTER TABLE `ordertabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordertabel`
--
ALTER TABLE `ordertabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
