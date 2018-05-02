-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 01:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `uid` int(11) NOT NULL,
  `DATE` datetime NOT NULL,
  `USER` char(50) NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`uid`, `DATE`, `USER`, `MESSAGE`) VALUES
(70, '2017-03-19 14:01:03', '3', 'I STRONGLY DISAGREE FROM YOU!'),
(71, '2017-03-19 14:33:41', '10', 'hi every one'),
(74, '2017-03-19 17:32:45', '11', 'hey'),
(75, '2017-03-21 00:37:09', '15', 'waiting for more videos in future from this channel ! #Excited'),
(76, '2017-03-21 08:46:02', '16', 'hii\r\n\r\n'),
(77, '2017-03-22 19:01:23', '17', 'hi'),
(85, '2017-04-27 09:54:24', '1', 'hey there'),
(86, '2017-05-19 17:56:37', '1', 'Helooooooooooooooooooooo'),
(87, '2017-05-22 18:17:10', '1', 'hiiiiiiiiiiiiiiiiiiiiiiiii by'),
(88, '2017-11-26 11:38:02', '1', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `commentuser`
--

CREATE TABLE `commentuser` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userid` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `liked` int(11) DEFAULT NULL,
  `disliked` int(11) DEFAULT NULL,
  `Society` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentuser`
--

INSERT INTO `commentuser` (`id`, `name`, `userid`, `password`, `liked`, `disliked`, `Society`) VALUES
(1, 'NITIN', 'NITIN', '12345', 1, 0, NULL),
(2, 'PK', 'PK', '0000', 0, 1, NULL),
(3, 'PRASHANT', 'PRASHANT', '123', 1, NULL, NULL),
(10, 'parikshit', 'bobby', '3333', 1, NULL, NULL),
(11, 'pranjal', 'jal021', '777', NULL, NULL, NULL),
(12, 'n', 'HOODA', '2', NULL, NULL, NULL),
(13, 'prateek', 'java', '147', 1, 0, NULL),
(15, 'nitin', 'tintin', '99999', 1, NULL, NULL),
(16, 'piyush', 'rao', '0001', 1, NULL, NULL),
(18, 'rakshit', 'rak001', 'gupta', NULL, NULL, NULL),
(22, 'a', 'a', 'a', NULL, NULL, NULL),
(23, 'anuj', 'anuj', 'anuj', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `documents` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `userid`, `documents`) VALUES
(13, 2, 1),
(14, 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `commentuser`
--
ALTER TABLE `commentuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `commentuser`
--
ALTER TABLE `commentuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
