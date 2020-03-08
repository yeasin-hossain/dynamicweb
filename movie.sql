-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 04:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `menubar`
--

CREATE TABLE `menubar` (
  `id` int(11) NOT NULL,
  `menu1` varchar(15) NOT NULL,
  `menu2` varchar(15) NOT NULL,
  `menu3` varchar(15) NOT NULL,
  `menu4` varchar(15) NOT NULL,
  `menu5` varchar(15) NOT NULL,
  `menu6` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menubar`
--

INSERT INTO `menubar` (`id`, `menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `menu6`) VALUES
(1, 'Shanto Rahman', 'Home', 'About us', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `topbar`
--

CREATE TABLE `topbar` (
  `id` int(11) NOT NULL,
  `heading` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topbar`
--

INSERT INTO `topbar` (`id`, `heading`) VALUES
(1, 'this is my heading');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menubar`
--
ALTER TABLE `menubar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topbar`
--
ALTER TABLE `topbar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menubar`
--
ALTER TABLE `menubar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
