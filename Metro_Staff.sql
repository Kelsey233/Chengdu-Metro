-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2018 at 03:08 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1-log
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2201613130227`
--

-- --------------------------------------------------------

--
-- Table structure for table `Metro_Staff`
--

CREATE TABLE `Metro_Staff` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Metro_Staff`
--

INSERT INTO `Metro_Staff` (`id`, `name`, `gender`, `age`, `position`) VALUES
(1, 'Mike', 'Male', 28, 'Manager'),
(2, 'Lily', 'Female', 27, 'Manager'),
(3, 'Jack', 'Male', 25, 'Manager'),
(4, 'Rose', 'Female', 24, 'Manager'),
(5, 'Sam', 'Male', 30, 'Cleanner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Metro_Staff`
--
ALTER TABLE `Metro_Staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Metro_Staff`
--
ALTER TABLE `Metro_Staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
