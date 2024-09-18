-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2024 at 05:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `fullname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`fullname`, `email`, `phone`, `location`, `message`) VALUES
('pascal', 'abizeyimanapascal222007314@gmail.com', '0790095020', 'gikondo', 'hi'),
('pascal', 'abapascal500@gmail.com', '0790095020', 'gikondo', 'hi'),
('pascal', 'abizeyimanapascal222007314@gmail.com', '0790095020', 'gikondo', 'hhh');

-- --------------------------------------------------------

--
-- Table structure for table `gikondo`
--

CREATE TABLE `gikondo` (
  `regnumber` varchar(20) NOT NULL,
  `names` varchar(100) NOT NULL,
  `course` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gikondo`
--

INSERT INTO `gikondo` (`regnumber`, `names`, `course`) VALUES
('', '', ''),
('1', '1', 'FRONTEND  AWS  '),
('111', 's', 'AWS,'),
('122121', 'ee', 'BACKEND  FRONTEND  '),
('212', 'pascal', ''),
('22', 'a', 'FRONTEND,'),
('222', 'pq', 'AWS,'),
('222007314', 'pascal', 'BACKEND  FRONTEND  AWS  '),
('2221', 'ww', 'BACKEND,AWS,'),
('2222', 's', 'FRONTEND,'),
('23', 'ss', ''),
('35454', 'tyty', 'BACKEND  FRONTEND  AWS  ');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `fullname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`fullname`, `email`, `phone`, `item`, `address`, `date`) VALUES
('murenzi', 'sibomanafelix892@gmail.com', '0780595884', 'Grilled Salmon', 'gikondo', '2024-05-15'),
('ABIZEYIMANA Pascal', 'abizeyimanapascal222007314@gmail.com', '0790095020', 'Classic Mojito', 'kgl', '2024-05-23'),
('UWASE Brenda', 'Brenda@gmail.com', '0790095020', 'Orange Delight', 'kgl', '2024-05-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gikondo`
--
ALTER TABLE `gikondo`
  ADD PRIMARY KEY (`regnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
