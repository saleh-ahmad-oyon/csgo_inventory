-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2016 at 01:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('94577123463894b63bcf8a9fbe02f308784a024b', '::1', 1475272589, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353237323537393b),
('85b322163b4e2bbea46d076e4901d4498968a4b0', '::1', 1475272762, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353237323630303b),
('011dc4970250daffd3e89a9b2b698b98b562228e', '::1', 1475272923, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353237323932333b),
('f99c35e68d21cee10dfadd98a35af179842c9066', '::1', 1475273472, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353237333237343b),
('ddf20eaec49ad1ed987f1b8574ffdb5a8b70d4ac', '::1', 1475273693, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353237333639333b),
('288c009f98a5881346fd3cf5080c60ef8fc9ab3a', '::1', 1475274467, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353237343230383b),
('305d98e8cc57296ef8bf550c17382b363afb94da', '::1', 1475274742, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353237343734323b),
('5dd19d81247f1477951b0c24728cc64d5d0fa522', '::1', 1475315999, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353331353938383b),
('5f5176b3210f0464e2cf85520dafb50a99f22818', '::1', 1475316002, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353331363030323b),
('9c9cd5b3d3e091fcf0006cb8b8cc9838ac03d400', '::1', 1475317440, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353331373433393b),
('17038dd5f2fac37fdf3e35670c364741d853534c', '::1', 1475318374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353331383337343b),
('1ba3d9e7d7734d018c593873a9168833a087a39a', '::1', 1475319767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353331393533383b),
('a1f2cc840cec921b124600d7658f47a17b2d5ff5', '::1', 1475320208, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332303230383b),
('3d3d733b94c95d136521a84a4cdb039a89b735a2', '::1', 1475320777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332303637393b);

-- --------------------------------------------------------

--
-- Table structure for table `pistol`
--

CREATE TABLE `pistol` (
  `id` int(11) NOT NULL,
  `p_skin` text,
  `p_exterior` text,
  `p_float` float DEFAULT NULL,
  `p_pic` text,
  `p_alternatePic` text,
  `p_marketPrice` text,
  `p_grade` text,
  `p_collectionLink` text,
  `p_collection` text,
  `p_name` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pistol`
--

INSERT INTO `pistol` (`id`, `p_skin`, `p_exterior`, `p_float`, `p_pic`, `p_alternatePic`, `p_marketPrice`, `p_grade`, `p_collectionLink`, `p_collection`, `p_name`) VALUES
(1, 'Forest Leaves', 'Minimal Wear', 0.125781, 'images/Pistol/USP-S/Forest_Leaves_MW.png', 'Forest Leaves', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Forest%20Leaves%20(Minimal%20Wear)', 'Industrial Grade Pistol', 'other_collections/safehouse', 'The Safehouse Collection', 'usps'),
(2, 'Overgrowth', 'Field-Tested', 0.201775, 'images/Pistol/USP-S/Overgrowth_FT.png', 'Overgrowth', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Overgrowth%20(Field-Tested)', 'Restricted Pistol', NULL, 'The Bravo Collection', 'usps'),
(3, 'Serum', 'Factory New', 0.0528872, 'images/Pistol/USP-S/Serum_FN.png', 'Serum', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Serum%20(Factory%20New)', 'Classified Pistol', NULL, 'The Arms Deal 2 Collection', 'usps'),
(4, 'StatTrak Guardian', 'Field-Tested', 0.158824, 'images/Pistol/USP-S/Guardian_FT.png', 'Guardian', 'http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20USP-S%20%7C%20Guardian%20(Field-Tested)', 'StatTrak Restricted Pistol', NULL, 'The Phoenix Collection', 'usps'),
(5, 'Caiman', 'Field-Tested', 0.174921, 'images/Pistol/USP-S/Caiman_FT.png', 'Caiman', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Caiman%20(Field-Tested)', 'Classified Pistol', NULL, 'The Huntsman Collection', 'usps'),
(6, 'Orion', 'Field-Tested', 0.152902, 'images/Pistol/USP-S/Orion_FT.png', 'Orion', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Orion%20(Field-Tested)', 'Classified Pistol', NULL, 'The Huntsman Collection', 'usps'),
(7, 'Night Ops', 'Minimal Wear', 0.0720617, 'images/Pistol/USP-S/Night_Ops_MW.png', 'Night Ops', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Night%20Ops%20(Minimal%20Wear)', 'Mil-Spec Grade Pistol', NULL, 'The Lake Collection', 'usps'),
(8, 'Royal Blue', 'Field-Tested', 0.314763, 'images/Pistol/USP-S/Royal_Blue_FT.png', 'Royal Blue', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Royal%20Blue%20(Field-Tested)', 'Industrial Grade Pistol', NULL, 'The Cobblestone Collection', 'usps'),
(9, 'Blood Tiger', 'Minimal Wear', 0.139987, 'images/Pistol/USP-S/Blood_Tiger_MW.png', 'Blood Tiger', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Blood%20Tiger%20(Minimal%20Wear)', 'Mil-Spec Grade Pistol', NULL, 'The eSports 2014 Summer Collection', 'usps'),
(10, 'Guardian', 'Factory New', 0.0320219, 'images/Pistol/USP-S/Guardian_FN.png', 'Guardian', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Guardian%20(Factory%20New)', 'Restricted Pistol', NULL, 'The Phoenix Collection', 'usps'),
(11, 'Torque', 'Factory New', 0.0479418, 'images/Pistol/USP-S/Torque_FN.png', 'Torque', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Torque%20(Factory%20New)', 'Mil-Spec Grade Pistol', NULL, 'The Falchion Collection', 'usps');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `pistol`
--
ALTER TABLE `pistol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pistol`
--
ALTER TABLE `pistol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
