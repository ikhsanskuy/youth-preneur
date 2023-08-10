-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 01, 2022 at 01:35 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '*57CC0A7C58CBADED385FA8008C9043AD335D9621');

-- --------------------------------------------------------

--
-- Table structure for table `sm`
--

CREATE TABLE `sm` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sm`
--

INSERT INTO `sm` (`id`, `name`, `email`, `notelp`, `gender`, `instansi`, `timestamp`) VALUES
(2, 'e', 'ikhsanusaly147@gmail.com', '43', 'male', 'gjegn', '2022-07-19 15:09:37'),
(3, 'ifeifh', 'huh@g.c', '89347981', 'male', 'ufheuf', '2022-07-19 15:53:47'),
(4, 'fijri', 'iji@g.c', '949892', 'male', 'ifjir', '2022-07-20 14:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `ts`
--

CREATE TABLE `ts` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ts`
--

INSERT INTO `ts` (`id`, `name`, `email`, `notelp`, `gender`, `instansi`, `timestamp`) VALUES
(1, 'Muh Ikhsansyach Kudus Nusaly', 'ikhsanusaly147@gmail.com', '41094', 'male', 'fjewiof', '2022-07-19 15:06:11'),
(2, 'fejf', 'jj@g.c', '9841', 'male', 'iefheio', '2022-07-19 15:06:11'),
(3, 'kjn', 'uijo@g.c', '3190', 'male', 'fe', '2022-07-19 15:06:58'),
(4, 'r', 'r@g.c', '242', 'male', 'fdf', '2022-07-19 15:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `ws`
--

CREATE TABLE `ws` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ws`
--

INSERT INTO `ws` (`id`, `name`, `email`, `notelp`, `gender`, `instansi`, `timestamp`) VALUES
(1, 'fijie', 'fjne@g.c', '094912', 'male', 'fjneiuf', '2022-07-19 15:06:39'),
(3, 'e', 'e@g.c', '54', 'male', 'fkg', '2022-07-19 15:09:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sm`
--
ALTER TABLE `sm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts`
--
ALTER TABLE `ts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ws`
--
ALTER TABLE `ws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sm`
--
ALTER TABLE `sm`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ts`
--
ALTER TABLE `ts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ws`
--
ALTER TABLE `ws`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
