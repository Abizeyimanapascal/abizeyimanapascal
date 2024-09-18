-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2024 at 10:16 AM
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
-- Database: `emarket`
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
('admin');

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
(1, 'ABIZEYIMANA Pascal', 'abizeyimanapascal0@gmail.com', '0790095020', '                                \r\n                             a'),
(2, 'Brenda', 'brenda@gmail.com', '0790095021', ' hihihihih');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `oid` int(11) NOT NULL,
  `pid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `orderquantity` int(11) NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT current_timestamp(),
  `orderstatus` varchar(100) NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `pid`, `username`, `owner`, `orderquantity`, `orderdate`, `orderstatus`) VALUES
(15, 19, '@pascal', '@brenda', 500, '2024-09-02 19:20:58', 'accepted'),
(17, 17, '@pascal', '@yve', 60, '2024-09-02 19:49:15', 'accepted'),
(18, 16, '@pascal', '@yve', 78, '2024-09-02 19:49:22', 'accepted'),
(19, 18, '@brenda', '@yve', 50, '2024-09-02 19:49:46', 'waiting'),
(20, 18, 'Enock', '@yve', 1, '2024-09-02 23:53:36', 'accepted'),
(21, 17, '@pascal', '@yve', 20, '2024-09-05 18:06:39', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productimage` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `productdescription` varchar(200) NOT NULL,
  `productquantity` varchar(200) NOT NULL,
  `productunit` varchar(200) NOT NULL,
  `productprice` varchar(200) NOT NULL,
  `paymentmode` varchar(200) NOT NULL,
  `uploaddate` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'not approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `productname`, `productimage`, `username`, `productdescription`, `productquantity`, `productunit`, `productprice`, `paymentmode`, `uploaddate`, `status`) VALUES
(15, 'Sweet patatoes', 'sweetp.jpg', '@yve', 'Sweet potatoes are a must-try! Their rich flavor and versatility will elevate your meals—don’t miss ', '12000', 'kg', '300', 'MoMo', '02/09/2024 17:54:48', 'approved'),
(16, 'Pumpkins', 'pumb.webp', '@yve', 'Try our pumpkins for a rich, sweet flavor and vibrant color—perfect for soups, pies, and more', '300', 'kg', '600', 'MoMo', '02/09/2024 17:58:47', 'approved'),
(17, 'banana', 'banana.webp', '@yve', 'Bananas are a tasty, nutritious snack full of energy-boosting potassium—perfect for a quick, healthy', '700', 'kg', '50', 'MoMo', '02/09/2024 17:59:40', 'not approved'),
(18, 'matoke', 'matoke.jpeg', '@yve', 'Matoke offers a unique, delicious flavor and hearty texture—perfect for savory dishes and a nutritio', '9000', 'kg', '200', 'MoMo', '02/09/2024 18:00:39', 'approved'),
(19, 'Sorghum', 'sorghum.jpg', '@brenda', 'Sorghum is a nutritious, versatile grain with a mild flavor. Ideal for salads, soups, and baking!', '10023', 'kg', '670', 'MoMo', '02/09/2024 18:52:11', 'approved'),
(20, 'beans', 'beans1.jpg', '@yve', 'Bananas are a tasty, nutritious snack full of energy-boosting potassium—perfect for a quick, healthy', '1000', 'kg', '500', 'MoMo', '05/09/2024 19:33:03', 'approved'),
(22, 'Irish potatoes', 'patatoes.jpg', '@brenda', 'potatoes are a must-try! Their rich flavor and versatility will elevate your meals—don’t miss ', '50000', 'kg', '400', 'MoMo', '08/09/2024 20:07:08', 'approved'),
(23, 'Pinaples', 'pinaples.jpg', '@brenda', 'Pineapple is a tropical delight with a sweet, tangy flavor—perfect for fresh eats, smoothies, and a ', '1000', 'kg', '300', 'MoMo', '08/09/2024 20:08:16', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phonenumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `email`, `password`, `country`, `state`, `address`, `phonenumber`) VALUES
('UWASE  Brenda', '@brenda', 'uwasebrenda@gmail.com', 'brenda1', 'Rwanda', 'Matimba', 'Nyagatare', '0780095020'),
('ABIZEYIMANA Pascal', '@pascal', 'abizeyimanapascal0@gmail.com', 'pascal1', 'Rwanda', 'Kigali', 'Kigali,Gikondo', '0790095020'),
('IZERIMANA  Yve', '@yve', 'yve@gmail.com', 'yve1', 'Rwanda', 'Nyagatare', 'Musheri', '0790095023'),
('Iradukunda Enock', 'Enock', 'enockiradukunda4@gmail.com', 'Karugwira@1', 'Rwanda', 'Nyagatare', 'Kigali', '0789117171');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `username` (`username`),
  ADD KEY `owner` (`owner`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`owner`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
