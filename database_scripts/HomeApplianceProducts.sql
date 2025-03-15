/*Michael Makowski, 3/15/24, IT202:006, phase 2 Assignment, mm2538@njit.edu*/
-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Mar 15, 2025 at 09:07 AM
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
-- Table structure for table `HomeApplianceProducts`
--

CREATE TABLE IF NOT EXISTS `HomeApplianceProducts` (
  `HomeApplianceProductID` int(11) NOT NULL,
  `HomeApplianceProductCode` varchar(10) NOT NULL,
  `HomeApplianceProductName` varchar(255) NOT NULL,
  `HomeApplianceDescription` text NOT NULL,
  `OnSale` varchar(10) NOT NULL,
  `HomeApplianceCategoryID` int(11) NOT NULL,
  `HomeApplianceWholesalePrice` decimal(10,2) NOT NULL,
  `HomeApplianceListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `HomeApplianceProducts`
--

INSERT INTO `HomeApplianceProducts` (`HomeApplianceProductID`, `HomeApplianceProductCode`, `HomeApplianceProductName`, `HomeApplianceDescription`, `OnSale`, `HomeApplianceCategoryID`, `HomeApplianceWholesalePrice`, `HomeApplianceListPrice`, `DateCreated`) VALUES
(1000, 'SAMSUNG', 'Samsung Refridgerator', '31 cu. ft. Mega Capacity 3-Door French Door Refridgerator with Four Types of Ice in Stainless Steel.', 'Yes', 100, 1598.00, 1698.00, '2025-03-14 22:58:21'),
(1020, 'GALANZ', 'Galanz Top Freezer Retro Refrigerator', '12.0 cu. ft Top Freezer Retro Refrigeratior with Dual Door True Freezer. Frost Free in Red.', 'Yes', 100, 699.00, 799.00, '2025-03-15 04:33:12'),
(1050, 'CAFE', 'Cafe Configurable French Door Smart Refrigerator', 'Choose a finish and customizable hardware to complement any style. LED lighting spotlights foods inside the refrigerator and freezer.', 'Yes', 100, 3509.00, 4309.00, '2025-03-15 05:01:21'),
(2000, 'GE', 'GE Top Load Washer', '4.5 cu. ft. Top Load Washer in White with Cold Plus and Wash Boost.', 'Yes', 200, 578.00, 799.00, '2025-03-14 22:58:22'),
(2010, 'HOTPOINT', 'Hotpoint Top Load Washer', '4.0 cu.ft. Top Load Washer in White. Also has Cold Plus and Water Level Control.', 'Yes', 200, 599.00, 699.00, '2025-03-15 04:38:36'),
(2030, 'MAYTAG', 'Maytag Top load Washer', '4.5 cu. ft. Top Load Washer. Comes in White.', 'No', 200, 799.00, 899.00, '2025-03-15 04:46:42'),
(3000, 'VISSANI', 'Vissani Countertop Convection Microwave', '1.5 cu. ft. Countertop Convection Microwave in Fingerprint Resistant Stainless Steel with Air Fryer and Sensor Cooking.', 'Yes', 300, 129.00, 229.00, '2025-03-14 22:58:23'),
(3010, 'PANASONIC', 'Panasonic Countertop Microwave', '2.2 cu. ft. Countertop Microwave in Stainless Steel. Built-in with Cyclonic Wave Inverter Technology and Sensor Cook.', 'No', 300, 279.00, 379.00, '2025-03-15 04:49:32'),
(3020, 'MAGIC CHEF', 'Magic Chef Countertop Microwave', '0.9 cu. ft. 900-Watt Coutnertop Microwave. Built-in Stainless Steel.', 'Yes', 300, 69.00, 109.00, '2025-03-15 04:51:22'),
(4000, 'HAMILTON', 'Hamilton Beach Black Drop Coffee Maker', 'BrewStation 12- Cup Programmable Black Drip Coffee Maker with Removable Water Reservoir.', 'No', 400, 39.00, 59.00, '2025-03-14 22:58:25'),
(4010, 'KEURIG', 'Keurig K-Select Single Serve Coffee Maker', 'K-Select Matte Black Single Serve Coffee Maker. Comes with an Automatic Shut-Off', 'No', 400, 129.99, 189.99, '2025-03-15 04:53:46'),
(4020, 'BUNN', 'BUNN Axiom Automatic Commercial Coffee Maker', 'Axiom 15-3 3L 12-Cup Automatic Commercial Coffee Maker. 3 Lower Warmers, 38700.0002.', 'No', 400, 863.00, 963.00, '2025-03-15 04:55:19'),
(5000, 'LEVOIT', 'LEVOIT True HEPA Air Purifier', 'VortexAir True HEPA Air Purifier, 220 Sq Ft.', 'No', 500, 69.00, 99.00, '2025-03-14 22:58:26'),
(5010, 'HONEYWELL', 'Honeywell QuietClean Air Purifier', 'Honeywell QueietClean Tower Air Purifier with permanent washable filters. Also has a dimmer feature with touch control for simplified operation.', 'No', 500, 154.99, 194.99, '2025-03-15 04:57:22'),
(5020, 'DYSON', 'Dyson Purifier', 'Dyson Purifier Cool Gen1 TP10. Purifies and cools you with 10 speed settings.', 'No', 500, 429.99, 519.99, '2025-03-15 04:58:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HomeApplianceProducts`
--
ALTER TABLE `HomeApplianceProducts`
 ADD PRIMARY KEY (`HomeApplianceProductID`), ADD UNIQUE KEY `HomeApplianceProductCode` (`HomeApplianceProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
