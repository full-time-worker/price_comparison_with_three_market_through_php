-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 10:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(13, 'Juwel', 'juwel@gmail.com', 'bsisfsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `e_location` mediumtext NOT NULL,
  `d_location` mediumtext NOT NULL,
  `e_location2` mediumtext NOT NULL,
  `d_location2` mediumtext NOT NULL,
  `e_location3` mediumtext NOT NULL,
  `d_location3` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `e_location`, `d_location`, `e_location2`, `d_location2`, `e_location3`, `d_location3`) VALUES
(8, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.044546453113!2d101.58538211414569!3d3.082785754418222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c5b13df2b0b%3A0xdb3b8d640e8d8f01!2sAEON%20BiG%20Subang%20Jaya!5e0!3m2!1sen!2sbd!4v1586283318942!5m2!1sen!2sbd\"  width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'AEON BiG Subang Jaya', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4078056.9857609374!2d99.79666317269736!3d3.4761558046930308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb64a0b3ba529%3A0x4e68d962b705938e!2sHeroMarket!5e0!3m2!1sen!2sbd!4v1586284194442!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'LG05-08 Festival Putrajaya, Jalan P3c, Presint 3, 62100, Wilayah Persekutuan Putrajaya, Malaysia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.96674942172!2d101.5957866141457!3d3.1034903542986076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c175abba219%3A0x884ee05a8e21ccf4!2sGiant%20Mall%20Kelana%20Jaya!5e0!3m2!1sen!2sbd!4v1586283502853!5m2!1sen!2sbd\"  width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Giant Mall Kelana Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `mr_id` int(255) NOT NULL,
  `mr1` varchar(255) NOT NULL,
  `mr2` varchar(255) NOT NULL,
  `mr3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`mr_id`, `mr1`, `mr2`, `mr3`) VALUES
(12, 'banner.png', 'Banner-1920x900.jpg', 'wosiwosi-hero-banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_img` varchar(50) NOT NULL,
  `m_one` int(50) NOT NULL,
  `m_tow` int(50) NOT NULL,
  `m_three` int(50) NOT NULL,
  `post_author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_img`, `m_one`, `m_tow`, `m_three`, `post_author`) VALUES
(26, 'Alpro-Milk', '5e888c3acaadc.jpg', 32, 53, 64, 'admin'),
(27, 'Banana', '5e888cd63c6f7.jpg', 35, 86, 68, 'admin'),
(28, 'Arla-Milk', '5e888ce7126c1.jpg', 35, 25, 78, 'admin'),
(29, 'Granny-Smith', '5e888cf6868fe.jpg', 34, 89, 34, 'admin'),
(30, 'Lemon', '5e888d0736677.jpg', 65, 65, 98, 'admin'),
(31, 'Vine-Tomato', '5e888d16e45f7.jpg', 43, 89, 45, 'admin'),
(32, 'Yellow-Onion', '5e888d289affe.jpg', 58, 57, 78, 'admin'),
(33, 'Plum', '5e888dc12c964.jpg', 64, 87, 23, 'admin'),
(34, 'Carrots', '5e888e290d770.jpg', 56, 36, 65, 'admin'),
(35, 'Pink-Lady', '5e8ad3ed87175.jpg', 435, 24, 532, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` int(2) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `role`, `password`) VALUES
(41, 'admin', 'admin', 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`mr_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `mr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
