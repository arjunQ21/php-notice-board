-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 05:06 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notices`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `made_by` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `made_by`, `title`, `body`, `time`) VALUES
(6, 'Arjun Adhikari', 'About this site   ', 'jf			', '2019-10-14 07:57:18'),
(8, 'bishnu adhikari', 'belgium  new                      ', 'this is capital of belgium', '2019-10-07 15:33:49'),
(9, 'Anonymous', 'test long body ', 'Edited from s5				', '2019-10-07 15:39:49'),
(11, 'Test', 'From s5', 'This was uploaded from s5', '2019-10-06 15:18:41'),
(12, 'D', 'S', 'F', '2019-10-06 15:38:04'),
(13, 'Shyam Khadka', 'Regarding Water Problem ', '					This is to notify all the staff members of this office that water will soon be supplied from Rs.50 jars, imported from Hemja, Penguin Swimming Pool.				', '2019-10-09 14:12:58'),
(15, 'r', 'r ', 'r				', '2019-10-07 15:32:49'),
(16, 'Mote', 'Mot', '					Y				ma ekdam mote xu				', '2019-10-14 07:56:41'),
(17, 'AIYANA KOIRALA', 'hello ', '					hello friend				', '2019-10-26 14:43:51'),
(18, 'Alson', 'Hello  ', '					nioce work!				', '2019-10-26 14:46:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
