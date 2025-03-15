/*Michael Makowski, 3/15/24, IT202:006, Phase 2 Assignment, mm2538@njit.edu*/
-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Mar 15, 2025 at 09:04 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mm2538`
--

-- --------------------------------------------------------

--
-- Table structure for table `HomeApplianceCategories`
--

CREATE TABLE IF NOT EXISTS `HomeApplianceCategories` (
  `HomeApplianceCategoryID` int(11) NOT NULL,
  `HomeApplianceCategoryCode` varchar(255) NOT NULL,
  `HomeApplianceCategoryName` varchar(255) NOT NULL,
  `AisleNumber` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `HomeApplianceCategories`
--

INSERT INTO `HomeApplianceCategories` (`HomeApplianceCategoryID`, `HomeApplianceCategoryCode`, `HomeApplianceCategoryName`, `AisleNumber`, `DateCreated`) VALUES
(100, 'RFG', 'Refridgerators', 1, '2025-03-14 22:25:25'),
(110, 'RRFG', 'Russian Refridgerator', 2, '2025-03-14 22:25:26'),
(200, 'WSH', 'Washing Machines', 2, '2025-03-14 22:25:26'),
(300, 'MCR', 'Microwave Ovens', 3, '2025-03-14 22:25:28'),
(400, 'CFM', 'Coffee Makers', 4, '2025-03-14 22:25:29'),
(500, 'APF', 'Air Purifiers', 5, '2025-03-14 22:25:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HomeApplianceCategories`
--
ALTER TABLE `HomeApplianceCategories`
 ADD PRIMARY KEY (`HomeApplianceCategoryID`), ADD UNIQUE KEY `HomeApplianceCategoryCode` (`HomeApplianceCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
