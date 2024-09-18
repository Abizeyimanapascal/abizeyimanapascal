-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2024 at 06:50 PM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentreg`
--

CREATE TABLE `studentreg` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `DOBday` varchar(100) NOT NULL,
  `DOBmonth` varchar(100) NOT NULL,
  `DOByear` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `classxboard` varchar(100) NOT NULL,
  `classxpercent` varchar(100) NOT NULL,
  `classxyearofpass` varchar(100) NOT NULL,
  `classxiiboard` varchar(100) NOT NULL,
  `classxiipercent` varchar(100) NOT NULL,
  `classxiiyearofpass` varchar(100) NOT NULL,
  `graduationboard` varchar(100) NOT NULL,
  `graduationpercent` varchar(100) NOT NULL,
  `graduationyearofpass` varchar(100) NOT NULL,
  `mastersboard` varchar(100) NOT NULL,
  `masterspercent` varchar(100) NOT NULL,
  `mastersyearofpass` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`id`, `firstname`, `lastname`, `DOBday`, `DOBmonth`, `DOByear`, `email`, `mobilenumber`, `gender`, `address`, `city`, `pincode`, `state`, `country`, `hobbies`, `classxboard`, `classxpercent`, `classxyearofpass`, `classxiiboard`, `classxiipercent`, `classxiiyearofpass`, `graduationboard`, `graduationpercent`, `graduationyearofpass`, `mastersboard`, `masterspercent`, `mastersyearofpass`, `course`) VALUES
(3, 'KABARUNGI', 'Margret', '8', '9', '2015', 'margret@gmail.com', '07886536562', 'female', 'kigali', 'gikondo', '000', 'USA', 'Rwanda', 'singing,,', 'AAA', '12', '2002', 'BBB', '67', '2003', 'CCC', '51', '2004', 'DDD', '92', '2005', 'BCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentreg`
--
ALTER TABLE `studentreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentreg`
--
ALTER TABLE `studentreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
