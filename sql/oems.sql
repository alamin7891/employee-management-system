-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Mar 31, 2022 at 12:38 AM
=======
-- Generation Time: Mar 29, 2022 at 08:43 AM
>>>>>>> db3485be30a96784a8b411d37c21b8ec1c521ed0
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_code` varchar(10) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_code`, `department_name`, `created_by`) VALUES
(1, 'fin001', 'Finance', ''),
(2, 'hrm001', 'Human Resource', ''),
(3, 'P0001', 'Production', ''),
(4, 'PC001', 'Packaging', ''),
(5, 'mrk0001', 'Marketing', '');

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `department_code` varchar(15) NOT NULL,
  `department` varchar(30) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `salary` int(20) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`id`, `employee_id`, `firstname`, `lastname`, `email`, `gender`, `department_code`, `department`, `designation`, `salary`, `degree`, `phone`, `address`) VALUES
<<<<<<< HEAD
(1, 'emp002', 'Alamin', 'Hossain', 'alamin@gmail.com', 'Male', 'acc0001', 'Accounts', 'accounts', 25000, 'register', '01612168726', 'jatrabari, Dhaka'),
(3, 'emp004', 'Shanto', 'Shikdar', 'shanto@gmail.com', 'Male', '', 'P0001', 'Incharge', 20000, '', '015454852', 'Mirpur, Dhaka');
=======
(1, 'emp002', 'Alamin', 'Hossain', 'alamin@gmail.com', 'Male', 'acc0001', 'Accounts', 'accounts', 25000, 'register', '01612168726', 'jatrabari, Dhaka');
>>>>>>> db3485be30a96784a8b411d37c21b8ec1c521ed0

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave`
--

CREATE TABLE `emp_leave` (
  `id` int(11) NOT NULL,
  `employee_code` varchar(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `leave_type_code` varchar(20) NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `department_code` varchar(15) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_days` varchar(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_leave`
--

INSERT INTO `emp_leave` (`id`, `employee_code`, `employee_name`, `leave_type_code`, `leave_type`, `department_code`, `department`, `designation`, `start_date`, `end_date`, `total_days`, `comment`) VALUES
(1, 'emp002', 'Alamin Hossain', 'CL', 'Casual Leave', '\r\nacc0001', 'Accounts', 'accounts', '0000-00-00', '0000-00-00', '8', 'gdsgfdsgsd'),
(2, 'emp002', 'Alamin Hossain', 'ML', 'Maternity Leave', '\r\nacc0001', 'Accounts', 'accounts', '0000-00-00', '0000-00-00', '8', 'hdfghfh'),
(3, '', '', 'please Select One', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(4, 'emp002', 'Alamin Hossain', 'please Select One', '', '\r\nacc0001', 'Accounts', 'accounts', '0000-00-00', '0000-00-00', '', ''),
(5, 'emp004', 'Shanto Shikdar', 'AL', 'Annual Leave', '\r\n', 'P0001', 'Incharge', '0000-00-00', '0000-00-00', '', ''),
(6, 'emp004', 'Shanto Shikdar', 'SL', 'Sick Leave', '\r\n', 'P0001', 'Incharge', '0000-00-00', '0000-00-00', '', ''),
(7, '', '', 'please Select One', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(8, '', '', 'please Select One', '', '', '', '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `salary_slip`
--

CREATE TABLE `salary_slip` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `department_code` varchar(50) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `month` varchar(15) NOT NULL,
  `basic_salary` int(11) NOT NULL,
  `festival` varchar(50) NOT NULL,
  `meal_allowance` varchar(15) NOT NULL,
  `bonus` int(11) NOT NULL,
  `loan` int(11) NOT NULL,
  `house_rent` int(11) NOT NULL,
  `total_allowances` int(11) NOT NULL,
  `total_deduction` int(11) NOT NULL,
  `net_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_slip`
--

INSERT INTO `salary_slip` (`id`, `employee_id`, `employee_name`, `department_code`, `department_name`, `designation`, `month`, `basic_salary`, `festival`, `meal_allowance`, `bonus`, `loan`, `house_rent`, `total_allowances`, `total_deduction`, `net_salary`) VALUES
(1, '', '1', '', 'Finance', '', 'February', 0, '', '', 0, 0, 0, 0, 0, 0),
(2, '', '1', '', 'Finance', '', 'February', 0, '', '', 0, 0, 0, 0, 0, 0),
(3, '', 'emp002', '', 'Human Resource', 'accounts', 'February', 0, '750', '1800', 200, 2500, 500, 0, 0, 0),
(4, 'emp002', 'Alamin Hossain', '\r\nacc0001', 'Accounts', 'accounts', '', 25000, '56', '656', 656, 45, 54, 1368, 99, 26269);

-- --------------------------------------------------------

--
-- Table structure for table `salary_slip`
--

CREATE TABLE `salary_slip` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `department_code` varchar(50) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `month` varchar(15) NOT NULL,
  `basic_salary` int(11) NOT NULL,
  `festival` varchar(50) NOT NULL,
  `meal_allowance` varchar(15) NOT NULL,
  `bonus` int(11) NOT NULL,
  `loan` int(11) NOT NULL,
  `house_rent` int(11) NOT NULL,
  `total_allowances` int(11) NOT NULL,
  `total_deduction` int(11) NOT NULL,
  `net_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_slip`
--

INSERT INTO `salary_slip` (`id`, `employee_id`, `employee_name`, `department_code`, `department_name`, `designation`, `month`, `basic_salary`, `festival`, `meal_allowance`, `bonus`, `loan`, `house_rent`, `total_allowances`, `total_deduction`, `net_salary`) VALUES
(1, '', '1', '', 'Finance', '', 'February', 0, '', '', 0, 0, 0, 0, 0, 0),
(2, '', '1', '', 'Finance', '', 'February', 0, '', '', 0, 0, 0, 0, 0, 0),
(3, '', 'emp002', '', 'Human Resource', 'accounts', 'February', 0, '750', '1800', 200, 2500, 500, 0, 0, 0),
(4, '', 'emp002', '\r\nacc0001', 'Accounts', 'accounts', '', 25000, '750', '', 0, 0, 0, 0, 0, 0),
(5, '', '', '', '', '', '', 0, '', '', 0, 0, 0, 0, 0, 0),
(6, '', '', '', '', '', '', 0, '', '', 0, 0, 0, 0, 0, 0),
(7, '', 'emp002', '\r\nacc0001', 'Accounts', 'accounts', '', 25000, '100', '122', 110, 250, 120, 332, 370, 24962);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_slip`
--
ALTER TABLE `salary_slip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `empinfo`
--
ALTER TABLE `empinfo`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> db3485be30a96784a8b411d37c21b8ec1c521ed0

--
-- AUTO_INCREMENT for table `emp_leave`
--
ALTER TABLE `emp_leave`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> db3485be30a96784a8b411d37c21b8ec1c521ed0

--
-- AUTO_INCREMENT for table `salary_slip`
--
ALTER TABLE `salary_slip`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> db3485be30a96784a8b411d37c21b8ec1c521ed0
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
