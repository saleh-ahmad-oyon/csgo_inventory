-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2016 at 05:58 PM
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
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `type` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `image` text,
  `url` text,
  `a_condition` varchar(55) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `type`, `name`, `image`, `url`, `a_condition`, `date`) VALUES
(1, '1', 'Operation Bravo Challenge Coin', 'achievements/Operation Bravo.png', NULL, 'Bronze', NULL),
(2, '1', 'Operation Phoenix Challenge Coin', 'achievements/Operation Phoenix.png', NULL, 'Bronze', NULL),
(3, '1', 'Operation Breakout Coin', 'achievements/Operation Breakout.png', NULL, 'Gold', '2014-07-05'),
(4, '1', 'Operation Vanguard Coin', 'achievements/Operation Vanguard.png', NULL, 'Gold', '2014-11-15'),
(5, '1', 'Operation Bloodhound Coin', 'achievements/Operation Bloodhound.png', NULL, 'Gold', '2015-05-27'),
(7, '1', 'Operation Wildfire Coin', 'achievements/Operation Wildfire.png', NULL, 'Gold', '2016-02-18'),
(8, '2', 'ESL One Katowice 2015', 'achievements/katowice 2015.png', NULL, 'Silver', NULL),
(9, '2', 'ESL One Cologne 2015', 'achievements/cologne 2015.png', NULL, 'Silver', NULL),
(10, '2', 'Cluj-Napoca 2015', 'achievements/Cluj-Napoca 2015.png', NULL, 'Silver', NULL),
(11, '2', 'Columbus 2016 Pick''Em Trophy', 'achievements/Columbus 2016.png', NULL, 'Bronze', NULL),
(12, '2', 'Cologne 2016 Pick''Em Trophy', 'achievements/Cologne 2016.png', NULL, 'Gold', NULL),
(13, '3', '2015 Service Medal', 'achievements/2015 Service Medal.png', NULL, NULL, '2015-09-30'),
(14, '3', '2016 Service Medal', 'achievements/2016 Service Medal.png', NULL, NULL, '2016-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `achievement_type`
--

CREATE TABLE `achievement_type` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement_type`
--

INSERT INTO `achievement_type` (`id`, `name`) VALUES
(1, 'Operation Challenge Coin'),
(2, 'Pick''Em Challenge Trophy'),
(3, 'Service Medal');

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
('1ba3d9e7d7734d018c593873a9168833a087a39a', '::1', 1475319767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353331393533383b),
('a1f2cc840cec921b124600d7658f47a17b2d5ff5', '::1', 1475320208, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332303230383b),
('3d3d733b94c95d136521a84a4cdb039a89b735a2', '::1', 1475320957, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332303637393b),
('cedba99c5a82f4bad1398a8ee7f6b5e0e860b2f6', '::1', 1475321984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332313833333b),
('afb20f004ad805aef18c5ee1dbc6a5a7b6750ee3', '::1', 1475322403, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332323238373b),
('462371fb2e530c383bb3249838d0166208dc3ec1', '::1', 1475322995, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332323734343b),
('7b73b2b177f6b0750be9a64f395b5ff96388c319', '::1', 1475325762, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332353532343b),
('6eba83a552d00ea9d3c90b4dd7ef414190e3ce34', '::1', 1475326201, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332363138373b),
('7fec0d8b00a684ea2949bb32271b9ef4af18fa23', '::1', 1475326832, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332363534333b),
('1889532b5f0aae3395f30c1dadb7d8d923a20f32', '::1', 1475326963, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332363836303b),
('6f35b0658579fe302add5947a55b8f102ddb57b1', '::1', 1475327238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332373139363b),
('006992b7ad8a295300e65fc8c630fd6debcbf298', '::1', 1475327585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332373535313b),
('ff3d7e67686cb69c63ae966f96fc1e139dfb8b5b', '::1', 1475328614, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332383532363b),
('242b71d6f56bc0e6e265d0eaa2f7ce3fa037464a', '::1', 1475329140, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353332383837323b),
('c95e577473495afce6a8f383059b2083f4ac9cd0', '::1', 1475434597, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353433343539373b),
('21f152fe18193688fd8af7acdfc9da8f22d91486', '::1', 1475434613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353433343631333b),
('a8098121c62f5c5bfd0b04922d5d33a37320f46a', '::1', 1475435283, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353433353238333b),
('85a545d58576c44c456e3185b01c5890172c719c', '::1', 1475437498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353433373439313b),
('1bed8d512868ff1638be63a8387a4f002f6fed63', '::1', 1475437970, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353433373933313b),
('ff6c6639f33fa399089930e0d605e485c7685b43', '::1', 1475439098, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353433393034383b),
('0104681cf43521d88a4195c7c5e62f379bd66b37', '::1', 1475680166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353638303136353b),
('b40a014c040b233f1a7c96284eaae4a4b7d969e7', '::1', 1475680189, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353638303138393b),
('fad1b728b436556610cb6778db605979fc433059', '::1', 1475680889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353638303836313b),
('f5efbf3f98f44366110c3d285d96d835e45c1312', '::1', 1475682979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353638323639383b),
('65c2f0e8185592f7b701a7f8a6988a8a7163d5d6', '::1', 1475683012, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353638333031323b);

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
(11, 'Torque', 'Factory New', 0.0479418, 'images/Pistol/USP-S/Torque_FN.png', 'Torque', 'http://steamcommunity.com/market/listings/730/USP-S%20%7C%20Torque%20(Factory%20New)', 'Mil-Spec Grade Pistol', NULL, 'The Falchion Collection', 'usps'),
(12, 'Granite Marbleized', 'Field-Tested', 0.35375, 'images/Pistol/P2000/Granite_Marbleized_FT.png', 'Granite Marbleized', 'http://steamcommunity.com/market/listings/730/P2000%20%7C%20Granite%20Marbleized%20(Field-Tested)', 'Industrial Grade Pistol', NULL, 'The Italy Collection', 'p2000'),
(13, 'Amber Fade', 'Factory New', 0.0696962, 'images/Pistol/P2000/Amber_Fade_FN.png', 'Amber Fade', 'http://steamcommunity.com/market/listings/730/P2000%20%7C%20Amber%20Fade%20(Factory%20New)', 'Restricted Pistol', NULL, 'The Dust 2 Collection', 'p2000'),
(14, 'Coach Class', 'Minimal Wear', 0.142641, 'images/Pistol/P2000/Coach_Class_MW.png', 'Coach Class', 'http://steamcommunity.com/market/listings/730/P2000%20%7C%20Coach%20Class%20(Minimal%20Wear)', 'Industrial Grade Pistol', NULL, 'The Baggage Collection', 'p2000'),
(15, 'Ivory', 'Well-Worn', 0.434352, 'images/Pistol/P2000/Ivory_WW.png', 'Ivory', 'http://steamcommunity.com/market/listings/730/P2000%20%7C%20Ivory%20(Well-Worn)', 'Mil-Spec Grade Pistol', NULL, 'The Breakout Collection', 'p2000'),
(16, 'StatTrak Pulse', 'Minimal Wear', 0.112938, 'images/Pistol/P2000/Pulse_MW.png', 'Pulse', 'http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20P2000%20%7C%20Pulse%20(Minimal%20Wear)', 'StatTrak Mil-Spec Grade Pistol', NULL, 'The Huntsman Collection', 'p2000'),
(17, 'Amber Fade', 'Factory New', 0.0274636, 'images/Pistol/P2000/Amber_Fade_FN.png', 'Amber Fade', 'http://steamcommunity.com/market/listings/730/P2000%20%7C%20Amber%20Fade%20(Factory%20New)', 'Restricted Pistol', NULL, 'The Dust 2 Collection', 'p2000'),
(18, 'Chainmail', 'Factory New', 0.0663492, 'images/Pistol/P2000/Chainmail_MW.png', 'Chainmail', 'http://steamcommunity.com/market/listings/730/P2000%20%7C%20Chainmail%20(Factory%20New)', 'Mil-Spec Grade Pistol', NULL, 'The Cobblestone Collection', 'p2000'),
(19, 'StatTrak Imperial', 'Factory New', 0.051673, 'images/Pistol/P2000/Red_FragCam_FN.png', 'Red FragCam', 'http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20P2000%20%7C%20Imperial%20(Factory%20New)', 'StatTrak Mil-Spec Grade Pistol', NULL, 'The Revolver Case Collection', 'p2000'),
(20, 'StatTrak Bunsen Burner', 'Field-Tested', 0.258438, 'images/Pistol/Glock-18/Bunsen_Burner_FT.png', 'StatTrak Bunsen Burner', 'http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20Glock-18%20%7C%20Bunsen%20Burner%20(Field-Tested)', 'StatTrak Mil-Spec Grade Pistol', NULL, 'The Falchion Collection', 'glock18'),
(21, 'Death Rattle', 'Minimal Wear', 0.139786, 'images/Pistol/Glock-18/Death_Rattle_MW.png', 'Death Rattle', 'http://steamcommunity.com/market/listings/730/Glock-18%20%7C%20Death%20Rattle%20(Minimal%20Wear)', 'Industrial Grade Pistol', NULL, 'The Bank Collection', 'glock18'),
(22, 'Catacombs', 'Factory New', 0.0667438, 'images/Pistol/Glock-18/Catacombs_FN.png', 'Catacombs', 'http://steamcommunity.com/market/listings/730/Glock-18%20%7C%20Catacombs%20(Factory%20New)', 'Mil-Spec Grade Pistol', NULL, 'The Chroma Collection', 'glock18'),
(23, 'Blue Fissure', 'Field-Tested', 0.270321, 'images/Pistol/Glock-18/Blue_Fissure_FT.png', 'Blue Fissure', 'http://steamcommunity.com/market/listings/730/Glock-18%20%7C%20Blue%20Fissure%20(Field-Tested)', 'Mil-Spec Grade Pistol', NULL, 'The Arms Deal 3 Collection', 'glock18'),
(24, 'Night', 'Field-Tested', 0.242185, 'images/Pistol/Glock-18/night_ft.png', 'Night', 'http://steamcommunity.com/market/listings/730/Glock-18%20%7C%20Night%20(Field-Tested)', 'Industrial Grade Pistol', NULL, 'The Overpass Collection', 'glock18'),
(25, 'Candy Apple', 'Minimal Wear', 0.104188, 'images/Pistol/Glock-18/Candy_Apple_MW.png', 'Candy Apple', 'http://steamcommunity.com/market/listings/730/Glock-18%20%7C%20Candy%20Apple%20(Minimal%20Wear)', 'Mil-Spec Grade Pistol', NULL, 'The Italy Collection', 'glock18'),
(26, 'StatTrak Grinder', 'Minimal Wear', 0.0821578, 'images/Pistol/Glock-18/Grinder_MW.png', 'StatTrak Grinder', 'http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20Glock-18%20%7C%20Grinder%20(Minimal%20Wear)', 'StatTrak Restricted Pistol', NULL, 'The Vanguard Collection', 'glock18'),
(27, 'Water Elemental', 'Field-Tested', 0.254065, 'images/Pistol/Glock-18/Water_Elemental_FT.png', 'Water Elemental', 'http://steamcommunity.com/market/listings/730/Glock-18%20%7C%20Water%20Elemental%20(Field-Tested)', 'Classified Pistol', NULL, 'The Breakout Collection', 'glock18'),
(28, 'Steel Disruption', 'Minimal Wear', 0.0841354, 'images/Pistol/Glock-18/Steel_Disruption_MW.png', 'Steel Disruption', 'http://steamcommunity.com/market/listings/730/Glock-18%20%7C%20Steel%20Disruption%20(Minimal%20Wear)', 'Restricted Pistol', NULL, 'The eSports 2014 Summer Collection', 'glock18'),
(29, 'Sand Dune', 'Battle-Scarred', 0.697234, 'images/Pistol/Glock-18/Sand_Dune_BS.png', 'Sand Dune', 'http://steamcommunity.com/market/listings/730/Glock-18%20%7C%20Sand%20Dune%20(Battle-Scarred)', 'Industrial Grade Pistol', NULL, 'The Alpha Collection', 'glock18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievement_type`
--
ALTER TABLE `achievement_type`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `achievement_type`
--
ALTER TABLE `achievement_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pistol`
--
ALTER TABLE `pistol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
