-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 02:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nodemcu_ldr`
--

-- --------------------------------------------------------

--
-- Table structure for table `nodemcu_ldr_table`
--

CREATE TABLE `nodemcu_ldr_table` (
  `NO` int(11) NOT NULL,
  `Ldr` varchar(45) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nodemcu_ldr_table`
--

INSERT INTO `nodemcu_ldr_table` (`NO`, `Ldr`, `Date`, `Time`) VALUES
(1, '250', '2022-08-02', '18:44:28'),
(2, '1', '2022-08-02', '18:51:17'),
(3, '1', '2022-08-02', '18:51:47'),
(4, '1', '2022-08-02', '18:52:06'),
(5, '1', '2022-08-02', '18:52:21'),
(6, '1', '2022-08-02', '18:52:36'),
(7, '1', '2022-08-02', '18:52:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nodemcu_ldr_table`
--
ALTER TABLE `nodemcu_ldr_table`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nodemcu_ldr_table`
--
ALTER TABLE `nodemcu_ldr_table`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
