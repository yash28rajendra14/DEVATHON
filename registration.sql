-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 02:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE `registration1` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`id`, `name`, `email`, `password`, `gender`, `address`, `contact`, `type`, `status`) VALUES
(1, 'shubham ', 'shubh@gmail.com', '12', 'male', 'nager', '1234', 'admin', '1'),
(6, 'Riya Kholi', 'riya@gmail.com', '11', 'female', 'nager', '123', 'public', '1'),
(7, 'pratik ', 'gdgd', '12', 'male', 'eweqweqw', '12345', 'public', '1'),
(9, 'udit trivedi', 'ydi@gmail.com', '1', 'male', 'Dewassss', '22', 'public', '1'),
(10, 'udit trivedi', 'ydi@gmail.com', '1', 'male', 'Dewassss', '22', 'public', '0'),
(11, 'Akash', 'akash@gmail.com', '12', 'male', 'bangali ', '11', 'admin', '1'),
(25, 'shubham ', 'shubh@gmail.com', '12@', 'male', 'nager', '1234', 'public', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration1`
--
ALTER TABLE `registration1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration1`
--
ALTER TABLE `registration1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
