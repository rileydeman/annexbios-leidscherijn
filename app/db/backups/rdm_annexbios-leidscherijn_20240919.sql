-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2024 at 03:15 PM
-- Server version: 8.0.39
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdm_annexbios-leidscherijn`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie-agenda`
--

CREATE TABLE `movie-agenda` (
  `ma_id` int NOT NULL,
  `ma_movieId` int NOT NULL,
  `ma_date` date NOT NULL,
  `ma_startTime` time NOT NULL,
  `ma_createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ma_lastModified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ma_deletedDate` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordered-tickets`
--

CREATE TABLE `ordered-tickets` (
  `ot_id` int NOT NULL,
  `ot_movieId` int NOT NULL,
  `ot_row` int NOT NULL,
  `ot_chair` int NOT NULL,
  `ot_customer-first-name` text NOT NULL,
  `ot_customer-last-name` text NOT NULL,
  `ot_customer-email` text NOT NULL,
  `ot_price` decimal(10,0) NOT NULL,
  `ot_payment-methodId` int NOT NULL,
  `ot_typeId` int NOT NULL,
  `ot_statusId` int NOT NULL,
  `ot_createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ot_lastModified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ot_deletedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment-methods`
--

CREATE TABLE `payment-methods` (
  `pm_id` int NOT NULL,
  `pm_name` text NOT NULL,
  `pm_img` text NOT NULL,
  `pm_createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pm_lastModified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pm_deletedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket-status`
--

CREATE TABLE `ticket-status` (
  `ts_id` int NOT NULL,
  `ts_name` text NOT NULL,
  `ts_createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ts_lastModified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ts_deletedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket-types`
--

CREATE TABLE `ticket-types` (
  `tt_id` int DEFAULT NULL,
  `tt_name` text NOT NULL,
  `tt_price` decimal(10,0) NOT NULL,
  `tt_createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tt_lastModified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tt_deletedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie-agenda`
--
ALTER TABLE `movie-agenda`
  ADD PRIMARY KEY (`ma_id`);

--
-- Indexes for table `ordered-tickets`
--
ALTER TABLE `ordered-tickets`
  ADD PRIMARY KEY (`ot_id`);

--
-- Indexes for table `payment-methods`
--
ALTER TABLE `payment-methods`
  ADD PRIMARY KEY (`pm_id`);

--
-- Indexes for table `ticket-status`
--
ALTER TABLE `ticket-status`
  ADD PRIMARY KEY (`ts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie-agenda`
--
ALTER TABLE `movie-agenda`
  MODIFY `ma_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordered-tickets`
--
ALTER TABLE `ordered-tickets`
  MODIFY `ot_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment-methods`
--
ALTER TABLE `payment-methods`
  MODIFY `pm_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket-status`
--
ALTER TABLE `ticket-status`
  MODIFY `ts_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
