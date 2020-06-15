-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 11:19 AM
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
(1, 'ON RENT', '1', '2019-05-10 11:04:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `9374556479255`
--

CREATE TABLE `9374556479255` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `qua` varchar(20) DEFAULT NULL,
  `due` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `checkout` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `9601550947255`
--

CREATE TABLE `9601550947255` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `qua` varchar(20) DEFAULT NULL,
  `due` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `checkout` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9601550947255`
--

INSERT INTO `9601550947255` (`id`, `status`, `qua`, `due`, `checkout`) VALUES
(2, 'ON RENT', '1', '2019-05-10 16:14:31', 1),
(3, 'ON RENT', '1', '2019-05-10 16:14:31', 1),
(13, 'ON RENT', '1', '2019-05-10 16:14:31', 1),
(14, 'ON RENT', '1', '2019-05-10 16:14:31', 1);

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
(1, 'ON RENT', '1', '2019-05-10 17:30:34', 1),
(2, 'ON RENT', '1', '2019-05-10 17:30:35', 1),
(4, 'ON RENT', '1', '2019-05-23 05:27:47', 1),
(13, 'ON RENT', '1', '2019-05-10 17:32:46', 1),
(14, 'ON RENT', '1', '2019-05-10 17:32:47', 1),
(27, 'ON RENT', '1', '2019-05-11 03:56:13', 1);

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
  `cat` int(20) NOT NULL,
  `publisher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookcp`
--

INSERT INTO `bookcp` (`id`, `img`, `bname`, `author`, `quant`, `price`, `cat`, `publisher`) VALUES
(1, 0x646f776e6c6f61642e6a7067, 'Programming In C', ' E Balagurusami', '23', '50', 1, ' Mc Grow Hill'),
(2, 0x646f776e6c6f6164322e6a7067, 'O.O.P. With C++', ' E Balagurusami', '20', '45', 1, ' Mc Grow Hill'),
(3, 0x646f776e6c6f6164332e6a7067, 'O.O.P. With Java', 'Danny Poo', '19', '40', 1, 'Atul Prakashan'),
(4, 0x646f776e6c6f6164342e6a7067, 'Php The Complete Reference', 'Steven Holzner', '23', '50', 1, 'Atul Prakashan'),
(5, 0x646f776e6c6f6164352e6a7067, 'Dot Net Technology', 'Damini Grover', '1', '50', 1, 'I R  production'),
(13, 0x6d312e6a7067, 'Element of Mech. Engineering', 'S.S. Sastri', '6', '50', 2, 'Oracle press'),
(14, 0x6d322e6a7067, 'Theroy Of Machine', 'J.P Hadiya', '25', '60', 2, 'Atul Prakashan'),
(25, 0x696d616765732d322e6a706567, 'Structural Analysis - 2', 'DR. D.P. Soni', '50', '60', 5, 'Atul Prakashan'),
(27, 0x393738393335323833353238372e6a70672e706e67, '	 Basic electronic', 'H.D. Mehta', '48', '50', 3, 'S chand'),
(28, 0x696d616765732e6a706567, 'Advance Surveying', 'DR. R. P. Rethaliya', '50', '50', 5, 'Atul Prakashan');

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
(14, 'Adit Patel', '9601550947', 'adit@gmail.com', '1234abcd', '9601550947255'),
(11, 'Dhruval', '8000664165', 'dhruval.goti@yahoo.in', '123456789', '8000664165255'),
(15, 'rajesh patel', '9374556479', 'rajupatel12@gmail.com', '1234abcd', '9374556479255'),
(13, 'Smit', '9898242240', 'smkakdiya201@gmail.com', '1234abcd', '9898242240255'),
(12, 'Yash', '8153832282', 'yashsohagia32@gmail.com', '255abcde', '8153832282255');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `name` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id` varchar(20) NOT NULL,
  `book` varchar(200) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`name`, `number`, `email`, `address`, `id`, `book`, `date`, `total`) VALUES
('Smit Kakadiya', '9898242240', 'smkakdiya@yahoo.com', '312 SP Hostel, Near BVM COllege, VVNagar', '', ' \r\n	Programming In C', '2019-05-10 17:28:53.174038', '110'),
('Adit Patel', '9601550947', 'adit466@gmail.com', '201 Nest Prime Boys Hostel, Near DhobiGhat, Vallabh Vidhyanagar', '', ' \r\n	Programming In C', '2019-05-10 17:30:35.182956', '95'),
('Yash H. Sohagia', '8849912564', 'yashsohagia15@hotmai', 'A21 Madhav Gurulul Near GCET College Vallabh VIdhyalaya', '', ' \r\n	Element of Mech. EngineeringTheroy Of Machine	', '2019-05-10 17:32:47.152030', '110'),
('Smit', '9898242240', 'smkakdiya201@gmail.c', 'Room Number T10, Maruti Sadan ostel, Near Water Drainage Station, VV Nagar', '', ' \r\n		 Basic electronic	', '2019-05-11 03:56:13.399565', '50'),
('Smit', '9898242240', 'smkakdiya201@gmail.c', 'KAKADIYA SMIT MANSUKHBHAI ,\r\nC.201 SHUKAN APARTMENT, NEAR PARSURAM GARDEN, HONEY PARK ROAD, ADAJAN\r\nSURAT,\r\nSurat,\r\nGujarat,\r\npincode: 395009', '', ' \r\n	Php The Complete Reference	', '2019-05-23 05:27:47.949306', '50');

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
-- Indexes for table `9374556479255`
--
ALTER TABLE `9374556479255`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9601550947255`
--
ALTER TABLE `9601550947255`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookcp`
--
ALTER TABLE `bookcp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
