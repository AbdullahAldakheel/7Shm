-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2018 at 07:49 PM
-- Server version: 5.6.41
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adukhiel_7shm`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `img` blob NOT NULL,
  `jname` varchar(64) NOT NULL,
  `ename` varchar(64) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `approve` varchar(64) NOT NULL,
  `date` varchar(64) NOT NULL,
  `com` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='This Table for posts';

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `title`, `body`, `img`, `jname`, `ename`, `comment`, `approve`, `date`, `com`) VALUES
(43, ' test (again)', '1221 2112 21', 0x3773686d2e6a7067, 'Abdulaziz', 'etest', 'Waiting for review', 'Yes', 'Thursday 29th of November 2018 03:16:41 PM', ''),
(44, ' Test (Damn)', '123', 0x323031382d31312d31365f32306830345f32392e706e67, 'Abdulaziz', '', 'Waiting for review', 'No', 'Thursday 29th of November 2018 04:29:10 PM', ''),
(42, ' Welcome To Our 7Shm', '7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm 7shm ', 0x3773686d2e6a7067, 'jtest', 'etest', 'Waiting for review', 'Yes', 'Thursday 29th of November 2018 03:16:32 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(45, 'Abdullah', '123', 'Admin'),
(46, 'Jtest', '12345', 'Journalist'),
(47, 'Etest', '123', 'Editor'),
(50, 'Abdulaziz', '123', 'Journalist'),
(54, 'Mohammed', '123', 'Editor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
