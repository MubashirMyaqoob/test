-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 09:27 PM
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
-- Table structure for table `webmentainnace`
--

CREATE TABLE `webmentainnace` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `text` varchar(500) NOT NULL,
  `additionaltext` varchar(200) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webmentainnace`
--

INSERT INTO `webmentainnace` (`id`, `img`, `heading`, `text`, `additionaltext`, `position`) VALUES
(3, 'images/logo.png', '', '', '', 'logo'),
(4, 'images/logo2.png', '', 'Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat.', '0123 456 789', 'footerw1'),
(5, 'images/', '012 United Kingdom.', 'NO. 342 - London Oxford Street.', '032 3456 7890', 'footerw2'),
(6, 'images/GRS_6825.webp', 'UP TO 50% OFF', 'Maboriosam in a nesciung eget magnae <br>dapibus disting tloctio in the find it pereri<br>odiy maboriosm.', 'Shirt For Man', 'islider'),
(7, 'images/572_9111_5f711fc1-5bcc-4d1f-bccf-dc038c1ce303.webp', 'Beatutyful Dress For Women', 'Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien.', '$1200 <s>$1890</s>', 'cownarea'),
(8, 'images/572_9243.webp', '', 'Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.', 'ABOUT US', 'aslider'),
(9, 'images/GRS_6876.webp', 'Jewellery', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'who we are', 'acownarea'),
(11, 'images/I1379CO-999-980.webp', 'cosmetics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'what we sale', 'acownarea1'),
(12, 'images/meidum1.webp', 'COSMETIC COLLECTONS', 'COSMETIC ITEMS<br>\r\nUP TO', '60%', 'mediumbanner1'),
(13, 'images/medium2.webp', 'JEWELLERY COLLECTONS', 'JEWELLERY ITEMS<br>\r\nUP TO', '70%', 'mediumbanner2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webmentainnace`
--
ALTER TABLE `webmentainnace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webmentainnace`
--
ALTER TABLE `webmentainnace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
