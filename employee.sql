-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 11:54 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(5) NOT NULL,
  `empname` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `empname`, `status`, `date`, `sector`) VALUES
(1, 'Bikram Khan', 'Fullday', '18-01-2017', 'Testing'),
(2, 'Sekhar Dhar', 'Halfday', '18-01-2017', 'Testing'),
(3, 'Bikram Khan', 'Halfday', '19-01-2017', 'Testing'),
(4, 'Sekhar Dhar', 'Halfday', '19-01-2017', 'Testing'),
(5, 'Bikram Khan', 'Absent', '20-01-2017', 'Testing'),
(6, 'Sekhar Dhar', 'Fullday', '20-01-2017', 'Testing'),
(7, 'Bikram Khan', 'Fullday', '01-12-2016', 'Testing'),
(8, 'Sekhar Dhar', 'Fullday', '01-12-2016', 'Testing'),
(9, 'Bikram Khan', 'Fullday', '02-12-2016', 'Testing'),
(10, 'Sekhar Dhar', 'Fullday', '02-12-2016', 'Testing'),
(11, 'Bikram Khan', 'Halfday', '03-12-2016', 'Testing'),
(12, 'Sekhar Dhar', 'Fullday', '03-12-2016', 'Testing'),
(13, 'Bikram Khan', 'Fullday', '04-12-2016', 'Testing'),
(14, 'Sekhar Dhar', 'Fullday', '04-12-2016', 'Testing'),
(15, 'Bikram Khan', 'Halfday', '05-12-2016', 'Testing'),
(16, 'Sekhar Dhar', 'Halfday', '05-12-2016', 'Testing'),
(17, 'Bikram Khan', 'Fullday', '06-12-2016', 'Testing'),
(18, 'Sekhar Dhar', 'Halfday', '06-12-2016', 'Testing'),
(19, 'Bikram Khan', 'Fullday', '07-12-2016', 'Testing'),
(20, 'Sekhar Dhar', 'Fullday', '07-12-2016', 'Testing'),
(21, 'Bikram Khan', 'Halfday', '08-12-2016', 'Testing'),
(22, 'Sekhar Dhar', 'Halfday', '08-12-2016', 'Testing'),
(23, 'Bikram Khan', 'Halfday', '11-12-2016', 'Testing'),
(24, 'Sekhar Dhar', 'Fullday', '11-12-2016', 'Testing'),
(25, 'Soumen Manna', 'Fullday', '11-12-2016', 'Recruting'),
(26, 'Abir Hazra', 'Fullday', '02-12-2016', 'Managing'),
(27, 'Abir Hazra', 'Fullday', '18-01-2017', 'Managing'),
(28, 'Bikram Khan', '', '11-01-2017', 'Testing'),
(29, 'Bikram Khan', '', '13-12-2016', 'Testing'),
(30, 'Sekhar Dhar', '', '13-12-2016', 'Testing'),
(31, 'Dibakar Das', 'Halfday', '11-12-2016', 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `pf` varchar(50) DEFAULT NULL,
  `esi` varchar(50) DEFAULT NULL,
  `date_of_joining` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `designation`, `salary`, `sector`, `pf`, `esi`, `date_of_joining`) VALUES
(1, 'Sohel Shekh', 'Developer', '20000', 'Developing', '5', '1.75', '12-05-2014'),
(2, 'Bikram Khan', 'Tester', '18000', 'Testing', '8', '1.25', '20-05-2016'),
(3, 'Soumen Manna', 'HR', '25000', 'Recruting', '15', '2.5', '20-12-2014'),
(4, 'Sekhar Dhar', 'Tester', '35000', 'Testing', '2.5', '1.75', '12-05-2010'),
(5, 'Dibakar Das', 'Manager', '35000', 'Marketing', '15', '2.5', '12-05-2010'),
(6, 'Abir Hazra', 'Superviser', '40000', 'Managing', '8', '3.5', '20-07-2008');

-- --------------------------------------------------------

--
-- Table structure for table `salarydetails`
--

CREATE TABLE `salarydetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `paid_on` varchar(50) DEFAULT NULL,
  `salary_month_year` varchar(50) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `empname` varchar(50) DEFAULT NULL,
  `totalday` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `estsalaray` varchar(50) DEFAULT NULL,
  `pfcal` varchar(50) DEFAULT NULL,
  `esical` varchar(50) DEFAULT NULL,
  `totalsalary` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salarydetails`
--

INSERT INTO `salarydetails` (`id`, `paid_on`, `salary_month_year`, `sector`, `empname`, `totalday`, `salary`, `estsalaray`, `pfcal`, `esical`, `totalsalary`, `status`) VALUES
(9, '19-01-2017', '12-2016', 'Managing', 'Abir Hazra', '1', '40000', '1290', '103', '45', '1232', 'paid'),
(8, '19-01-2017', '12-2016', 'Managing', 'Abir Hazra', '1', '40000', '1290', '103', '45', '1232', 'paid'),
(7, '19-01-2017', '12-2016', 'Testing', 'Sekhar Dhar', '7.5', '35000', '8467', '211', '148', '8404', 'paid'),
(6, '19-01-2017', '12-2016', 'Testing', 'Bikram Khan', '7', '18000', '4064', '325', '50', '3789', 'paid'),
(10, '19-01-2017', '12-2016', 'Managing', 'Abir Hazra', '1', '40000', '1290', '103', '45', '1232', 'paid'),
(11, '19-01-2017', '12-2016', 'Managing', 'Abir Hazra', '1', '40000', '1290', '103', '45', '1232', 'paid'),
(12, '19-01-2017', '12-2016', 'Testing', 'Bikram Khan', '7', '18000', '4064', '325', '50', '3789', 'paid'),
(13, '19-01-2017', '12-2016', 'Testing', 'Bikram Khan', '7', '18000', '4064', '325', '50', '3789', 'paid'),
(14, '19-01-2017', '12-2016', 'Testing', 'Sekhar Dhar', '7.5', '35000', '8467', '211', '148', '8404', 'paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salarydetails`
--
ALTER TABLE `salarydetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `salarydetails`
--
ALTER TABLE `salarydetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
