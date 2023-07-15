-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 02:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kotharao`
--

-- --------------------------------------------------------

--
-- Table structure for table `corpus`
--

CREATE TABLE `corpus` (
  `id` int(11) NOT NULL,
  `Bangla` text NOT NULL,
  `Hajong` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `corpus`
--

INSERT INTO `corpus` (`id`, `Bangla`, `Hajong`) VALUES
(3, 'à¦†à¦®à¦¿ à¦­à¦¾à¦¤ à¦–à¦¾à¦¬à§‹à¥¤', 'à¦®à§Ÿ à¦¬à¦¾à¦¤ à¦–à¦¾à¦¬à§‹à¥¤'),
(10, 'i am good', 'how you?'),
(92, 'hey ', 'hey'),
(93, 'what is this', 'an ant'),
(94, 'i', 'u'),
(95, 'à¦¬à¦¾à¦‚à¦²à¦¾', 'à¦¹à¦¾à¦œà¦‚');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corpus`
--
ALTER TABLE `corpus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corpus`
--
ALTER TABLE `corpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
