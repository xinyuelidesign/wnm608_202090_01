-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 04:26 PM
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
  `description` text NOT NULL,
  `quantity` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `name`, `email`, `url`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`, `quantity`) VALUES
(1, 'Cloudy', '', '', 12.00, '2020-11-06 22:59:34', '2020-11-08 22:59:34', 'Weather', 'News1.jpg', 'Weather.jpg', 'Weatherth.jpg', 'Story: On a cloudy day, a bunny is sleeping in a soft cloud. That\'s why the cloud is becoming heavier and heavier.\r\n\r\n\r\nHot: on the front of the shirt. ', '123'),
(3, 'Sunny', '', '', 13.00, '2020-11-06 23:07:08', '2020-11-08 23:07:08', 'Weather', 'News3.jpg', 'Weather3.jpg', 'Weatherth3.jpg', 'Story: On a sunny day, a fox is playing and enjoying the sunshine. It looks like a fairy under the sun.\r\n\r\nHot: Back of the shirt', '123'),
(4, 'Strawberry', '', '', 15.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit ', 'fruit.jpg', 'fruite1.jpg', 'fruitth1.jpg', 'Story: If we hold each other\'s hand. In a hopeless place, we can support each other to stand up again; on a good day, we can share joys with each other.\r\n\r\nHot: Front of the shirt.', ''),
(5, 'Apple', '', '', 12.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit ', 'fruit.jpg', 'fruit2.jpg', 'fruitth2.jpg', 'Story: Maybe she\'s snow-white or just a girl who loves apples.\r\nHot: Back of the shirt.', ''),
(6, 'Banana', '', '', 22.00, '0000-00-00 00:00:00', '2020-11-09 00:23:33', 'fruit ', 'fruit.jpg', 'fruit3.jpg', 'fruitth3.jpg', 'Story: He loves bananas. \r\nHot: Front of the shirt.', ''),
(7, 'Lichi', '', '', 22.00, '0000-00-00 00:00:00', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit9.jpg', 'fruitth9.jpg', 'Story: Holding a kerosene lamp slowing walking through the darkness. \r\nHot: Front of the shirt. ', ''),
(8, 'Orange', '', '', 22.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit4.jpg', 'fruitth4.jpg', 'Story: He loves peach, but more into her. \r\nHot: Back of the shirt. ', ''),
(9, 'Huolongguo', '', '', 22.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit5.jpg', 'fruitth5.jpg', 'Story: A poor Aztec woman lost her way in the desert. She saw the flashing red light in her hallucinations, which was the light of dragon fruit.\r\nHot: Front of the shirt.', ''),
(10, 'Longyan', '', '', 22.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit6.jpg', 'fruitth6.jpg', 'Story: Longyan is the hero\'s name who killed a dragon and dig out its eyes.\r\nHot: Front of the shirt.', ''),
(11, 'Peach', '', '', 23.00, '2020-11-09 00:23:33', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit7.jpg', 'fruitth7.jpg', 'Story: She loves orange, but more into him. \r\nHot: Back of the shirt. ', ''),
(12, 'Yunxiang', '', '', 24.00, '0000-00-00 00:00:00', '2020-11-09 00:23:33', 'fruit', 'fruit.jpg', 'fruit8.jpg', 'fruitth8.jpg', 'Story: Yunxiang is a kind of magical Chinese spice, it can make people forget the worry. In old times, people often put it in a sachet to pray for their families.\r\nHot: Front right of the shirt. ', ''),
(14, 'Rainy', '', '', 12.00, '2020-12-09 17:18:36', '2020-12-09 17:18:36', 'Weather', 'News2.jpg', 'Weather2.jpg', 'Weatherth2.jpg', '#Cat #Moon #Rainyday', '3732');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
