-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 06:28 AM
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
-- Database: `oems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `department` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `department`, `degree`, `phone`, `address`) VALUES
(1, 'Waliul', 'Hasan', 'hasan@gmail.com', '', 'Male', 'CSE', 'BSC', '01524587972', 'North badda'),
(13, 'Alamin', 'Hossain', 'alamin@gmail.com', '', 'Male', 'CSE', 'BSC', '01654646456', 'Modhubagh'),
(14, 'Sayed', 'Rana', 'rana@gmail.com', '', 'Male', 'CSE', 'BSC', '6465464654', 'Kuril'),
(15, 'Masum', 'Billal', 'masum@gmail.com', '', 'Male', 'CSE', 'BSC', '878775454', 'Kakrail'),
(16, 'Md alamin', 'hossain', 'mdalamin@gmail.com', '', 'Male', 'CSE', 'BSC', '654645651', 'Jatrabari'),
(17, 'Waliul', 'Hasan', 'hasan1@gmail.com', '', 'Male', 'CSE', 'BSC', '01524587972', 'North badda'),
(18, 'Waliul', 'Hasan', 'hasan2@gmail.com', '', 'Male', 'CSE', 'BSC', '01524587972', 'North badda'),
(19, 'Waliul', 'Hasan', 'hasan3@gmail.com', '', 'Male', 'CSE', 'BSC', '01524587972', 'North badda'),
(20, 'Waliul', 'Hasan', 'hasan4@gmail.com', '', 'Male', 'CSE', 'BSC', '01524587972', 'North badda'),
(23, 'Chapai', 'murshidabad', 'chapai@murshidabad.com', '', 'Female', 'Nai', 'Dhandabaj', '02114598', 'Dilhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `empinfo`
--
ALTER TABLE `empinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
