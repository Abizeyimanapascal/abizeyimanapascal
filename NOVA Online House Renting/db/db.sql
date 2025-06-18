-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 04:19 PM
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
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`) VALUES
('admin1');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentid` int(11) NOT NULL,
  `commentername` varchar(200) NOT NULL,
  `commenteremail` varchar(200) NOT NULL,
  `commenterphone` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentid`, `commentername`, `commenteremail`, `commenterphone`, `comment`) VALUES
(4, 'Alias', 'alias@gmail.com', '0790095020', '                                \r\n     trying again                        ');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `house_type` varchar(200) NOT NULL,
  `house_image` varchar(200) NOT NULL,
  `house_image2` varchar(200) NOT NULL,
  `house_image3` varchar(200) NOT NULL,
  `house_location` varchar(200) NOT NULL,
  `house_description` mediumtext NOT NULL,
  `year_built` varchar(100) NOT NULL,
  `num_beds` varchar(200) NOT NULL,
  `num_bathrooms` varchar(30) NOT NULL,
  `house_price` varchar(200) NOT NULL,
  `ownername` varchar(200) NOT NULL,
  `owneremail` varchar(200) NOT NULL,
  `ownerphone` varchar(200) NOT NULL,
  `uploaddate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(200) NOT NULL DEFAULT 'waiting',
  `approvaldate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `house_type`, `house_image`, `house_image2`, `house_image3`, `house_location`, `house_description`, `year_built`, `num_beds`, `num_bathrooms`, `house_price`, `ownername`, `owneremail`, `ownerphone`, `uploaddate`, `status`, `approvaldate`) VALUES
(56, 'Apartment', 'a2.jpg', 'twin-room.png', 'c5.jpg', 'Cyuve Sector', 'Best apartment', '2023', '2', '4', '200000', 'Pascal Blaise', 'pascal@gmail.com', '0789128038', '2024-10-11', 'approved', '2024-10-14 00:00:00'),
(57, 'Loft', 'm6.jpg', 'b6.jpg', 'b1.jpg', 'Muhoza Sector', 'Good For rent', '2017', '6', '2', '100066', 'MUGABO blaise', 'balise@gmail.com', '0789734256', '2024-10-11', 'approved', '2024-10-14 00:00:00'),
(58, 'Duplex', 'm2.jpg', 'b3.jpg', 'b2.jpg', 'Kinigi Sector', 'good for family', '2015', '4', '5', '80000', 'INEZA Briella', 'briella@gmail.com', '073928153', '2024-10-11', 'approved', '2024-10-14 00:00:00'),
(59, 'Single Family', 'm1.jpeg', 'b2.jpg', 'c5.jpg', 'Kinigi Sector', 'best for familyu', '2020', '4', '3', '70000', 'UWASE Brenda', 'brenda@gmail.com', '0790089624', '2024-10-11', 'approved', '2024-10-14 00:00:00'),
(60, 'Single Family', 'm7.jpg', 'c6.jpg', 'c4.png', 'Muhoza Sector', 'best for living house', '2019', '4', '6', '230000', 'MUGISHA Emma', 'emma@gmail.com', '079234156', '2024-10-11', 'approved', '2024-10-14 00:00:00'),
(61, 'Townhouse', 'm5.jpg', 'b8.png', 'b10.jpg', 'Cyuve Sector', 'good in summer', '2021', '6', '3', '200000', 'NKURUNZIZA James', 'james@gmail.com', '072134567', '2024-10-11', 'approved', '2024-10-14 00:00:00'),
(62, 'Condo', 'a1.jpg', 'c11.jpg', 'c3.jpg', 'Cyuve Sector', 'best fo vaccance', '2016', '7', '4', '500000', 'UWASE Grolia', 'grolia@gmail.com', '0721345671', '2024-10-11', 'approved', '2024-10-14 00:00:00'),
(63, 'Single Family', 'm3.jpg', 'b9.jpg', 'b9.jpg', 'Kinigi Sector', 'best for family', '2018', '5', '2', '150001', 'IZERIMANA Yve', 'yve@gmail.com', '0789654321', '2024-10-11', 'approved', '2024-10-14 00:00:00'),
(70, 'Apartment', 'b10.jpg', 'b6.jpg', 'c6.jpg', 'Kinigi Sector', 'Good For rent', '2023', '6', '3', '230000', 'ABIZEYIMANA Pascal', 'abizeyimanapascal0@gmail.com', '0790095020', '2024-10-12', 'approved', '2024-10-14 00:00:00'),
(75, 'Condo', 'rwfm.jpg', '1dJOOJlJT6Ra5uTHm8poPEWErEBcwT7qCVdnrNwM.jpg', 'steel.jpg', 'Kinigi Sector', 'good for family', '2018', '5', '2', '100000', 'ABIZEYIMANA Pascal', 'abizeyimanapascal0@gmail.com', '0790095020', '2024-10-14', 'approved', '2024-10-14 00:00:00'),
(76, 'Studio apartment', 'factory.jpg', '1568391249-45-swan-hydrosol-ltd.jpg', 'aaaaa.png', 'Kinigi Sector', 'Good For rent', '2000', '5', '3', '80000', 'ABIZEYIMANA Pascal', 'abizeyimanapascal0@gmail.com', '0790095020', '2024-10-14', 'approved', '2024-10-14 00:00:00'),
(77, 'Duplex', 'steel.jpg', 'factory.jpg', 'steel.jpg', 'Kinigi Sector', 'good for family', '2018', '2', '3', '200000', 'ABIZEYIMANA Pascal', 'abizeyimanapascal0@gmail.com', '0790095020', '2024-10-14', 'approved', '2024-10-14 16:02:28'),
(78, 'Townhouse', 'images.jpg', 'aaaaa.png', 'steel.jpg', 'Cyuve Sector', 'good for family', '2023', '6', '3', '80000', 'ABIZEYIMANA Pascal', 'abizeyimanapascal0@gmail.com', '0790095020', '2024-10-14', 'approved', '2024-10-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `oid` int(11) NOT NULL,
  `house_id` int(100) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_email` varchar(200) NOT NULL,
  `client_phone` varchar(200) NOT NULL,
  `client_location` varchar(200) NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `house_id`, `client_name`, `client_email`, `client_phone`, `client_location`, `orderdate`) VALUES
(48, 62, 'ABATONI Peace', 'peace@gmail.com', '0790095020', 'Kayonza', '2024-10-12 22:25:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `pid` (`house_id`),
  ADD KEY `owner` (`client_name`),
  ADD KEY `owner_2` (`client_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`house_id`) REFERENCES `house` (`house_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
