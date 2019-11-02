-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2019 at 05:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dino-task`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_programmer`
--

CREATE TABLE `table_programmer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `prog_lan` varchar(255) NOT NULL,
  `laptop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_programmer`
--

INSERT INTO `table_programmer` (`id`, `name`, `email`, `website`, `comment`, `gender`, `prog_lan`, `laptop`) VALUES
(1, 'Ujjal Chowdhury', 'ujjal.0011@yahoo.com', 'https://www.facebook.com/ujjal.0011', 'comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....comment....', 'male', 'C, Java, Scala', 'lenovo'),
(2, 'Alfred Romel', 'romel.htm@hotmail.com', 'www.romel.com', 'welcome to the world that I have long studied.', 'male', 'C, C++', 'asus'),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_programmer`
--
ALTER TABLE `table_programmer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_programmer`
--
ALTER TABLE `table_programmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
