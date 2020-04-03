-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 06:16 AM
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
(9, 'antique-1297675.png', 'cannon-1529973_960_720.png', 'gun-1482610_960_720.png');

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
(18, 'This is title One', '5e7ca990dcebf.jpg', 10, 15, 20, 'hello'),
(19, 'This is title two ', '5e7ca9a89f56f.jpg', 15, 11, 16, 'hello'),
(20, 'This is title three', '5e7ca9bac58f6.jpg', 15, 15, 13, 'hello'),
(21, 'Title of Bisnu Boss ', '5e7cbdb9d0a64.jpg', 5, 6, 4, 'hello'),
(22, 'Title of Shipu boss', '5e7d037d8937e.jpg', 10, 14, 15, 'hello'),
(23, 'title of Sojib Boss', '5e81b7dc7f786.jpg', 10, 11, 9, 'hello'),
(24, 'titlte of naim', '5e8216fcc5e31.jpg', 15, 14, 16, 'hello'),
(25, 'Car', '5e85ee5c6d2ef.png', 3453, 234, 8754, 'admin');

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
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `mr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
