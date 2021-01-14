-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 01:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_system`
--

CREATE TABLE `admin_system` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_system`
--

INSERT INTO `admin_system` (`id`, `username`, `password`, `name`, `phone`, `email`, `status`) VALUES
(1, 'admin', 'pass', 'admin', '', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_list`
--

CREATE TABLE `data_list` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `id_card` char(14) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `pay` int(7) NOT NULL,
  `confirm` text COLLATE utf8_unicode_ci NOT NULL,
  `confirm_date` datetime NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_list`
--

INSERT INTO `data_list` (`id`, `name`, `id_card`, `address`, `age`, `pay`, `confirm`, `confirm_date`, `date`) VALUES
(1, 'wascharapon akkhahad', '2147483647', 'Khonkhean\r\nKhonkhean', 13, 0, 'Yes', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(2, 'wascharapon akkhahad', '1409700131887', 'Khonkhean\r\nKhonkhean', 13, 800, 'Yes', '2021-01-14 00:00:00', '2021-01-14 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_system`
--
ALTER TABLE `admin_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_list`
--
ALTER TABLE `data_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_system`
--
ALTER TABLE `admin_system`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_list`
--
ALTER TABLE `data_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
