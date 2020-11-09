-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2020 at 12:25 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Xinyue_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `name`, `email`, `url`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`) VALUES
(1, 'cloudy', '', '', 12.00, '2020-11-06 22:59:34', '2020-11-08 22:59:34', 'Weather', 'News1.jpg', 'Weather.jpg', 'Weatherth.jpg', 'Weather'),
(2, 'Rainy', '', '', 12.00, '2020-11-06 23:59:34', '2020-11-08 22:59:34', 'Weather', 'News2.jpg', 'Weather2.jpg', 'Weatherth2.jpg', 'weather'),
(3, 'Sunny', '', '', 13.00, '2020-11-06 23:07:08', '2020-11-08 23:07:08', 'Weather', 'News3.jpg', 'Weather3.jpg', 'Weatherth3.jpg', 'Weather'),
(4, 'Strawberry', '', '', 15.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit ', 'fruit.jpg', 'fruite1.jpg', 'fruitth1.jpg', 'fruit '),
(5, 'Apple', '', '', 12.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit ', 'fruit.jpg', 'fruit2.jpg', 'fruitth2.jpg', 'fruit '),
(6, 'Banana', '', '', 22.00, '0000-00-00 00:00:00', '2020-11-09 00:23:33', 'fruit ', 'fruit.jpg', 'fruit3.jpg', 'fruitth3.jpg', 'fruit '),
(7, 'Lichi', '', '', 22.00, '0000-00-00 00:00:00', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit3.jpg', 'fruitth3.jpg', 'fruit'),
(8, 'Orange', '', '', 22.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit4.jpg', 'fruitth4.jpg', 'fruit'),
(9, 'Huolongguo', '', '', 22.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit5.jpg', 'fruitth5.jpg', 'fruit'),
(10, 'Longyan', '', '', 22.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit6.jpg', 'fruitth6.jpg', 'fruit'),
(11, 'Peach', '', '', 23.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit7.jpg', 'fruitth7.jpg', 'fruit'),
(12, 'Yunxiang', '', '', 24.00, '0000-00-00 00:00:00', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit8.jpg', 'fruitth8.jpg', 'fruit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
