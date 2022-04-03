-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 06:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr12_mount_everest_katek`
--
CREATE DATABASE IF NOT EXISTS `be15_cr12_mount_everest_katek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be15_cr12_mount_everest_katek`;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `locname` varchar(50) NOT NULL,
  `img` varchar(500) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `description` varchar(500) NOT NULL,
  `longitude` decimal(11,7) NOT NULL,
  `latitude` decimal(11,7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `locname`, `img`, `price`, `description`, `longitude`, `latitude`) VALUES
(1, 'Vienna', 'https://cdn.pixabay.com/photo/2019/08/13/17/17/building-4403839__340.jpg', '1250.99', 'Vienna is the national capital, largest city, and one of nine states of Austria. Vienna is Austrias most populous city, with about 2 million inhabitants (2.6 million within the metropolitan area, nearly one third of the countrys population), and its cultural, economic, and political center. It is the 6th-largest city by population within city limits in the European Union.', '16.3634490', '48.2100330'),
(2, 'Moscow', 'https://cdn.pixabay.com/photo/2018/12/13/14/24/the-kremlin-3872941__340.jpg', '999.99', 'Moscow is the capital and largest city of Russia. The city stands on the Moskva River in Central Russia, with a population estimated at 12.4 million residents within the city limits, over 17 million residents in the urban area, and over 20 million residents in the metropolitan area.', '37.6184230', '55.7512440'),
(3, 'Paris', 'https://cdn.pixabay.com/photo/2021/08/14/01/58/museum-6544420__340.jpg', '1450.99', 'Since the 17th century, Paris has been one of the worlds major centres of finance, diplomacy, commerce, fashion, gastronomy, science, and arts, and has sometimes been referred to as the capital of the world.', '2.3490140', '48.8647160'),
(4, 'Amsterdam', 'https://cdn.pixabay.com/photo/2016/01/19/19/26/amsterdam-1150319__340.jpg', '1100.99', 'Found within the Dutch province of North Holland, Amsterdam is colloquially referred to as the Venice of the North, due to the large number of canals which form a UNESCO World Heritage Site.', '4.8970700', '52.3779560'),
(5, 'New York', 'https://cdn.pixabay.com/photo/2016/10/16/13/06/new-york-1745089__340.jpg', '2500.99', 'New York City has been described as the cultural, financial, and media capital of the world, significantly influencing commerce, entertainment, research, technology, education, politics, tourism, dining, art, fashion, and sports, and is the most photographed city in the world.', '-73.9352420', '40.7306100'),
(6, 'Sydney', 'https://cdn.pixabay.com/photo/2014/05/26/09/58/sydney-opera-house-354375__480.jpg', '3500.99', 'Sydney is the capital city of the state of New South Wales, and the most populous city in Australia and Oceania. Located on Australia\'s east coast, the metropolis surrounds Port Jackson and extends about 70 km (43.5 mi) on its periphery towards the Blue Mountains to the west, Hawkesbury to the north, the Royal National Park to the south and Macarthur to the south-west.', '151.2099000', '-33.8651430'),
(7, 'Minsk', 'https://cdn.pixabay.com/photo/2020/01/19/10/19/house-4777283__340.jpg', '850.99', 'Minsk is the capital and the largest city of Belarus, located on the Svislach and the now subterranean Niamiha rivers. As the capital, Minsk has a special administrative status in Belarus and is the administrative centre of Minsk Region (voblasć) and Minsk District (rajon).', '27.5674440', '0.0000000'),
(9, 'Rome', 'https://cdn.pixabay.com/photo/2020/11/24/19/34/colosseum-5773684__340.jpg', '1150.99', 'Rome is the capital city of Italy. It is also the capital of the Lazio region, the centre of the Metropolitan City of Rome, and a special comune named Comune di Roma Capitale. With 2,860,009 residents in 1,285 km2 (496.1 sq mi), Rome is the countrys most populated comune and the third most populous city in the European Union by population within city limits.', '12.4963660', '41.9027820');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
