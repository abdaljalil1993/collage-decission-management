-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jul 26, 2021 at 12:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oday`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpost`
--

CREATE TABLE `addpost` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `post` text NOT NULL,
  `dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addpost`
--

INSERT INTO `addpost` (`id`, `title`, `post`, `dt`) VALUES
(1, 'ddd', 'dddddddddd', '2021-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `col`
--

CREATE TABLE `col` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `col`
--

INSERT INTO `col` (`id`, `name`) VALUES
(1, 'hasbat');

-- --------------------------------------------------------

--
-- Table structure for table `collage`
--
-- Error reading structure for table oday.collage: #1932 - Table 'oday.collage' doesn't exist in engine
-- Error reading data for table oday.collage: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `oday`.`collage`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `council`
--

CREATE TABLE `council` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `col` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `council`
--

INSERT INTO `council` (`id`, `name`, `col`) VALUES
(1, 'IEF Collage Council', NULL),
(2, 'Presedant Council', NULL),
(3, 'fff', NULL),
(4, 'Hamak', NULL),
(5, 'hasbat', NULL),
(6, 'rtc', 'hasbat');

-- --------------------------------------------------------

--
-- Table structure for table `decision`
--

CREATE TABLE `decision` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `depend` text NOT NULL,
  `takelook` text NOT NULL,
  `delibration` text NOT NULL,
  `username` text NOT NULL,
  `dt` varchar(200) NOT NULL,
  `conc` text DEFAULT NULL,
  `state` text NOT NULL DEFAULT 'wait'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `decision`
--

INSERT INTO `decision` (`id`, `subject`, `depend`, `takelook`, `delibration`, `username`, `dt`, `conc`, `state`) VALUES
(1, 'ssssssssss', 'sssssssssssssss', 'sssssssssssssss', 'del', 'ahmad ', '2021-05-23', NULL, 'accepted'),
(2, 'f', 'f', 'f', 'del', 'ahmad ', '2021-07-20', 'Presedant Council', 'archived'),
(3, 'dec1-2021', '20200soahh', 'ppajsciha khosahcnak j jpoj op jpo upj poj pu uh ok', 'del', 'ahmad ', '2021-07-21', 'IEF Collage Council', 'accepted'),
(4, 'y', 'y', 'y', 'del', 'ahmad ', '2021-07-21', 'IEF Collage Council', 'approved'),
(5, 'qwerqdsa', 'asdasdasdasdas', 'dsasdasdasd\r\nasdasdasdas', 'del', 'oday', '2021-07-25', 'rtc', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `email`, `subject`, `message`, `dt`) VALUES
(1, 'oday', 'oday@gmail.com', 'test', 'testtttttttt', '2021-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--
-- Error reading structure for table oday.sections: #1932 - Table 'oday.sections' doesn't exist in engine
-- Error reading data for table oday.sections: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `oday`.`sections`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL DEFAULT 'doctor',
  `section` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `name`, `email`, `password`, `type`, `section`) VALUES
(1, 'admin', 'admin@admin', 'admin', 'admin', NULL),
(2, 'oday', 'o@o', 'o', 'doctor', 'IEF Collage Council'),
(3, 'ahmad ', 'a@a', '123', 'employee', 'IEF Collage Council'),
(4, 'ghaith', 'gh@gh', 'gh', 'doctor', 'IEF Collage Council'),
(5, 'q', 'q@q', 'q', 'doctor', 'Presedant Council'),
(6, 'oday', 'od@od', 'od', 'employee', 'hasbat'),
(7, 'oday', 'oday@gmail.com', 'oday', 'employee', 'rtc'),
(8, 'fadi', 'f@ff', 'f', 'doctor', 'rtc');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `decid` text NOT NULL,
  `dt` int(11) NOT NULL,
  `vote` text NOT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `uname`, `decid`, `dt`, `vote`, `note`) VALUES
(7, 'ghaith', '1', 2021, 'agree', NULL),
(8, 'ghaith', '1', 2021, 'agree', NULL),
(9, 'ghaith', '1', 2021, 'agree', ''),
(10, 'ghaith', '1', 2021, 'agree', ''),
(11, 'ghaith', '1', 2021, 'agree', ''),
(12, 'ghaith', '1', 2021, 'disagree', ''),
(13, 'ghaith', '1', 2021, 'agree', ''),
(14, 'ghaith', '1', 2021, 'disagree', 'dsaaaaaaaaaaaaa'),
(15, 'ghaith', '1', 2021, 'discuss', 'dsaaaaaaaaaaaaa'),
(16, 'ghaith', '2', 2021, 'agree', ''),
(17, 'ghaith', '4', 2021, 'disagree', ''),
(18, 'fadi', '5', 2021, 'agree', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpost`
--
ALTER TABLE `addpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `col`
--
ALTER TABLE `col`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `council`
--
ALTER TABLE `council`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decision`
--
ALTER TABLE `decision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpost`
--
ALTER TABLE `addpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `col`
--
ALTER TABLE `col`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `council`
--
ALTER TABLE `council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `decision`
--
ALTER TABLE `decision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
