-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 12:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virunga`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `commenter_name` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commenter_name`, `comment`) VALUES
(1, 'Pascal', 'Hi where are you located\r\n'),
(2, 'ABIZEYIMANA', 'Thank you for the service!'),
(3, 'wilson', 'hi happy with services'),
(4, 'mugisha', 'can you reschedule my ticket?'),
(5, 'mukunzi', 'hello, counting on you!');

-- --------------------------------------------------------

--
-- Table structure for table `confirmedtickets`
--

CREATE TABLE `confirmedtickets` (
  `id` int(11) NOT NULL,
  `route` varchar(200) NOT NULL,
  `passenger` varchar(200) NOT NULL,
  `ticketid` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `traveldate` varchar(200) NOT NULL,
  `traveltime` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirmedtickets`
--

INSERT INTO `confirmedtickets` (`id`, `route`, `passenger`, `ticketid`, `price`, `traveldate`, `traveltime`, `phone`) VALUES
(15, 'Rubavu to Kigali', 'ABIZEYIMANA  Pascal', '1006877', '3000', '2024-08-22', '15:12', '0790095020'),
(16, 'Rubavu to Kigali', 'IZERIMANA  Yve', '1009319', '3000', '2024-08-15', '23:09', '0790095020');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Admin', 'Admin1');

-- --------------------------------------------------------

--
-- Table structure for table `reservedtickets`
--

CREATE TABLE `reservedtickets` (
  `id` int(11) NOT NULL,
  `route` varchar(200) NOT NULL,
  `passenger` varchar(200) NOT NULL,
  `ticketid` varchar(10) NOT NULL,
  `price` varchar(100) NOT NULL,
  `traveldate` varchar(100) NOT NULL,
  `traveltime` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservedtickets`
--

INSERT INTO `reservedtickets` (`id`, `route`, `passenger`, `ticketid`, `price`, `traveldate`, `traveltime`, `phone`) VALUES
(27, 'Kigali to Gicumbi', 'ABIZEYIMANA  Pascal', '1003842', '1000', '2024-10-24', '08:30', '0790095020'),
(28, 'Kigali to Gicumbi', 'UWASE Brenda', '1008164', '1000', '2024-10-17', '10:30', '07900957870'),
(29, 'Kigali to Gicumbi', 'MUGISHA Emma', '1000964', '1000', '2024-10-18', '09:00', '250790095020'),
(30, 'Kigali to Gicumbi', 'IZERIMANA Yve', '1003601', '1000', '2024-10-25', '08:00', '250790095020'),
(32, 'Kigali to Gicumbi', 'MURUNGI Shadia', '1002817', '1000', '2024-10-25', '10:00', '0790095020'),
(36, 'Rubavu to Kigali', 'IRAKOZE ', '1007664', '3000', '2024-10-10', '11:30', '0790095020'),
(39, 'Gicumbi to Kigali', 'ISIMBI Briella', '1008026', '1000', '2024-10-17', '10:30', '250790095020'),
(40, 'Kigali to Gicumbi', 'MUKUNZI Chrstine', '1006443', '1000', '2024-10-17', '10:00', '0790095020'),
(42, 'Kigali to Rubavu', 'UWERA Scovia', '1004411', '1000', '2024-10-17', '09:30', '0790095020'),
(43, 'Kigali to Musanze', 'MUTABARUKA Jean De Dieu', '1006802', '1700', '2024-10-15', '11:00', '0790095020'),
(46, 'Kigali to Gicumbi', 'ABATONI Peace', '1007291', '1000', '2024-10-26', '11:00', '0790095020');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `from` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `distance` varchar(100) NOT NULL,
  `time` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `from`, `destination`, `distance`, `time`, `price`) VALUES
(1, 'Kigali', 'Gicumbi', '74', '120', '1650'),
(2, 'Kigali', 'Musanze', '170', '300', '2980'),
(3, 'Kigali', 'Rubavu', '240', '310', '4600'),
(4, 'Rubavu', 'Kigali', '240', '310', '4600'),
(5, 'Musanze', 'Kigali', '170', '300', '2980'),
(6, 'Gicumbi', 'Kigali', '74', '120', '1650');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmedtickets`
--
ALTER TABLE `confirmedtickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservedtickets`
--
ALTER TABLE `reservedtickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `confirmedtickets`
--
ALTER TABLE `confirmedtickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservedtickets`
--
ALTER TABLE `reservedtickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
