-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 07:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webacademydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `User_id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Comment` text(300) NOT NULL,
  `Comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`User_id`, `Name`, `Email`, `Comment`, `Comment_date`) VALUES
(1, 'userA', 'email@a.com', 'What do you think about my work?', '2017-10-28 07:45:13'),
(2, 'userB', 'email@B.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in cursus quam. Aliquam porttitor enim vel tortor efficitur consectetur. Ut mauris ante, varius eget vestibulum fringilla, rhoncus eu arcu.', '2017-10-28 07:45:49'),
(3, 'userC', 'email@c.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in cursus quam. Aliquam porttitor enim vel tortor efficitur consectetur. Ut mauris ante, varius eget vestibulum fringilla, rhoncus eu arcu.', '2017-10-28 07:49:16'),
(4, 'userD', 'email@d.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in cursus quam. Aliquam porttitor enim vel tortor efficitur consectetur. Ut mauris ante, varius eget vestibulum fringilla, rhoncus eu arcu.', '2017-10-28 07:49:40'),
(5, 'userV', 'email@V.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in cursus quam. Aliquam porttitor enim vel tortor efficitur consectetur. Ut mauris ante, varius eget vestibulum fringilla, rhoncus eu arcu.', '2017-10-28 07:50:17'),
(6, 'userV', 'email@V.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in cursus quam. Aliquam porttitor enim vel tortor efficitur consectetur. Ut mauris ante, varius eget vestibulum fringilla, rhoncus eu arcu.', '2017-10-28 07:55:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `Name` (`Name`),
  ADD KEY `Comment_date` (`Comment_date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `User_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
