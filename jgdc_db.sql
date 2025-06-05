-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 08:57 PM
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
-- Database: `jgdc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissionLvl` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`email`, `password`, `permissionLvl`) VALUES
('adminPassword0@gmail.com', '$2y$10$F6OFyrpK7Z4HrGTwim059OW30HxZBY1AVD0fyD5Tn.e4F49uwDFga', 2),
('heaven21@gmail.com', '$2y$10$RD3EkJ5PwOQESDiy.i21S.xbHQPuyqd7PuzPVCcJg6h56PT.7SmO.', 0),
('john123@gmail.com', '$2y$10$UZRkYxJYjEVLYuxD13LACuRQbc/nZFGB5xtmHIdE69S7n0rSq4kAO', 1),
('john@gmail.com', '$2y$10$q7edMADhw9uBYl6iZkBxUe3ZPg21bQeyU6c9qv2eZDh3h.sbN4w8G', 0),
('userPassword0@gmail.com', '$2y$10$kvNL7gw5H17J./Ocp6d7f.amyMRpCgKnmL4uyhO7zQYwMsp3xzFQO', 0),
('ven123@gmail.com', '$2y$10$SUnv/F449Au38cn54lvtfuK8kRdPNasjOzaAOgU/g7W8JXfq753Ra', 0);

-- --------------------------------------------------------

--
-- Table structure for table `account_info`
--

CREATE TABLE `account_info` (
  `account_ID` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`account_ID`, `fname`, `lname`, `contactNo`, `email`) VALUES
(1, 'admin', 'qtqt', '9123456789', 'adminPassword0@gmail.com'),
(2, 'Taro', 'Yamada', '9876543219', 'userPassword0@gmail.com'),
(3, 'heaven', 'dumaop', '9098039218', 'john@gmail.com'),
(4, 'john', 'john', '9098039218', 'john123@gmail.com'),
(5, 'john', 'heaven', '909090909', 'heaven21@gmail.com'),
(6, 'ven', 'dumaop', '9098039218', 'ven123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_ID` int(10) NOT NULL,
  `account_ID` int(10) NOT NULL,
  `service` enum('clean','pasta','d_crown','wisdom') NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `state` enum('pending','accepted','past','completed','declined','cancelled','missed') NOT NULL,
  `branch` enum('s_simon','mexico') NOT NULL,
  `note` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_ID`, `account_ID`, `service`, `date`, `time`, `state`, `branch`, `note`) VALUES
(1, 3, 'pasta', '2024-05-14', '09:00:00', 'cancelled', 'mexico', ''),
(2, 3, 'clean', '2024-05-29', '12:30:00', 'accepted', 's_simon', ''),
(3, 4, 'wisdom', '2024-05-10', '12:30:00', 'accepted', 's_simon', ''),
(4, 3, 'pasta', '2024-05-22', '09:00:00', 'accepted', 's_simon', ''),
(5, 3, 'd_crown', '2024-05-15', '15:30:00', 'accepted', 's_simon', ''),
(6, 5, 'clean', '2024-05-22', '12:30:00', 'accepted', 's_simon', ''),
(7, 6, 'd_crown', '2024-05-24', '13:30:00', 'accepted', 's_simon', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `account_info`
--
ALTER TABLE `account_info`
  ADD PRIMARY KEY (`account_ID`),
  ADD KEY `EmFK` (`email`) USING BTREE;

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_ID`),
  ADD KEY `AccountIdFK` (`account_ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_info`
--
ALTER TABLE `account_info`
  MODIFY `account_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_info`
--
ALTER TABLE `account_info`
  ADD CONSTRAINT `EmFK` FOREIGN KEY (`email`) REFERENCES `accounts` (`email`);

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `AccountIdFK` FOREIGN KEY (`account_ID`) REFERENCES `account_info` (`account_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
