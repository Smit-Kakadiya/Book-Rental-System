-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 01:55 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `8000664165255`
--

CREATE TABLE `8000664165255` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `qua` varchar(20) DEFAULT NULL,
  `due` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `checkout` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8000664165255`
--

INSERT INTO `8000664165255` (`id`, `status`, `qua`, `due`, `checkout`) VALUES
(2, 'ON RENT', '1', '2019-05-09 09:54:33', 1),
(3, 'ON RENT', '1', '2019-04-30 18:30:00', 1),
(5, 'ON RENT', '1', '2019-04-10 18:30:00', 1),
(14, 'ON RENT', '1', '2019-05-06 18:41:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `8153832282255`
--

CREATE TABLE `8153832282255` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `qua` varchar(20) DEFAULT NULL,
  `due` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `checkout` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8153832282255`
--

INSERT INTO `8153832282255` (`id`, `status`, `qua`, `due`, `checkout`) VALUES
(2, 'ON RENT', '1', '2019-05-06 20:49:21', 1),
(14, 'ON RENT', '1', '2019-05-06 18:30:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `9898242240255`
--

CREATE TABLE `9898242240255` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `qua` varchar(20) DEFAULT NULL,
  `due` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `checkout` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9898242240255`
--

INSERT INTO `9898242240255` (`id`, `status`, `qua`, `due`, `checkout`) VALUES
(1, 'ON RENT', '1', '2019-05-09 11:21:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookcp`
--

CREATE TABLE `bookcp` (
  `id` int(10) NOT NULL,
  `img` longblob NOT NULL,
  `bname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `quant` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `cat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookcp`
--

INSERT INTO `bookcp` (`id`, `img`, `bname`, `author`, `quant`, `price`, `cat`) VALUES
(1, 0x646f776e6c6f61642e6a7067, 'Programming In C', ' E Balagurusami', '11', '50', 1),
(2, 0x646f776e6c6f6164322e6a7067, 'O.O.P. With C++', 'E Balagurusami', '33', '45', 1),
(3, 0x646f776e6c6f6164332e6a7067, 'O.O.P. With Java', 'Danny Poo', '28', '40', 1),
(4, 0x646f776e6c6f6164342e6a7067, 'Php The Complete Reference', 'Steven Holzner', '30', '50', 1),
(5, 0x646f776e6c6f6164352e6a7067, 'Dot Net Technology', 'Damini Grover', '7', '50', 1),
(13, 0x6d312e6a7067, 'Element of Mech. Engineering', 'S.S. Sastri', '15', '50', 2),
(14, 0x6d322e6a7067, 'Theroy Of Machine', 'J.P Hadiya', '30', '60', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cprice` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cartid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `number`, `email`, `password`, `cartid`) VALUES
(11, 'Dhruval', '8000664165', 'dhruval.goti@yahoo.in', '123456789', '8000664165255'),
(13, 'Smit', '9898242240', 'smkakdiya201@gmail.com', '1234abcd', '9898242240255'),
(12, 'Yash', '8153832282', 'yashsohagia32@gmail.com', '255abcde', '8153832282255');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `name` varchar(40) NOT NULL,
  `number` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id` int(40) NOT NULL,
  `book` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`name`, `number`, `email`, `address`, `id`, `book`, `date`) VALUES
('admin', '9898242240', 'uvqefeio@themailpro.net', 'KAKADIYA SMIT MANSUKHBHAI ,\r\nC.201 SHUKAN APARTMENT, NEAR PARSURAM GARDEN, HONEY PARK ROAD, ADAJAN\r\nSURAT,\r\nSurat,\r\nGujarat,\r\npincode: 395009', 10, ' \r\n	Programming In C<br>	', '2019-05-09 11:16:48.666711'),
('admin', '9898242240', 'uvqefeio@themailpro.net', 'KAKADIYA SMIT MANSUKHBHAI ,\r\nC.201 SHUKAN APARTMENT, NEAR PARSURAM GARDEN, HONEY PARK ROAD, ADAJAN\r\nSURAT,\r\nSurat,\r\nGujarat,\r\npincode: 395009', 11, ' \r\n	Programming In C<br>	', '2019-05-09 11:22:07.064796');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `8000664165255`
--
ALTER TABLE `8000664165255`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `8153832282255`
--
ALTER TABLE `8153832282255`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9898242240255`
--
ALTER TABLE `9898242240255`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookcp`
--
ALTER TABLE `bookcp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `unique` (`id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookcp`
--
ALTER TABLE `bookcp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
