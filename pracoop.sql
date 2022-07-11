-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2022 at 04:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pracoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `empTbl`
--

CREATE TABLE `empTbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `pNum` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empTbl`
--

INSERT INTO `empTbl` (`id`, `firstName`, `lastName`, `pNum`, `address`) VALUES
(1, 'James', 'Walker', '806-448-3095', 'Florida'),
(2, 'Tim', 'Arnold', '409-634-9863', 'Texas'),
(3, 'Nicolas', 'Gibson', '845-653-7985', 'New York'),
(4, 'Christian', 'Alsop', '940-616-4019', 'California'),
(5, 'Frank', 'Burgess', '218-248-4130', 'Minnesota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empTbl`
--
ALTER TABLE `empTbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empTbl`
--
ALTER TABLE `empTbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
