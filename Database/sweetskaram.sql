-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 10:29 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweetskaram`
--

-- --------------------------------------------------------

--
-- Table structure for table `savouries`
--

CREATE TABLE `savouries` (
  `id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `250gm` int(11) NOT NULL,
  `500gm` int(11) NOT NULL,
  `1kg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `savouries`
--

INSERT INTO `savouries` (`id`, `name`, `image`, `250gm`, `500gm`, `1kg`) VALUES
('sk-3', 'Murukku', 'savour.jpg', 100, 150, 200);

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `250gm` int(11) NOT NULL,
  `500gm` int(11) NOT NULL,
  `1kg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `name`, `image`, `250gm`, `500gm`, `1kg`) VALUES
('1506284169660566795', 'sad', 'laddu.jpg', 123, 123, 123);

-- --------------------------------------------------------

--
-- Table structure for table `sweets`
--

CREATE TABLE `sweets` (
  `id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `250gm` int(11) NOT NULL,
  `500gm` int(11) NOT NULL,
  `1kg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sweets`
--

INSERT INTO `sweets` (`id`, `name`, `image`, `250gm`, `500gm`, `1kg`) VALUES
('1506284065488058718', 'Laddu', 'laddu.jpg', 250, 500, 300),
('15063745871316606720', 'Badam Roll', 'badamRoll.jpg', 300, 400, 500),
('15063746122116476011', 'Carrot Mysoorpa', 'carrotMysoorpa.jpg', 100, 200, 300),
('4564841321456', 'Special Laddu', 'laddu.jpg', 100, 200, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `savouries`
--
ALTER TABLE `savouries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sweets`
--
ALTER TABLE `sweets`
  ADD PRIMARY KEY (`id`(10));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
