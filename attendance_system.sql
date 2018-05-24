-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2015 at 01:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `AttID` int(20) NOT NULL AUTO_INCREMENT,
  `EmpID` int(10) NOT NULL,
  `Prensent` int(1) NOT NULL,
  `AttDate` date NOT NULL,
  PRIMARY KEY (`AttID`),
  KEY `EmpID` (`EmpID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`AttID`, `EmpID`, `Prensent`, `AttDate`) VALUES
(1, 2, 1, '2014-12-01'),
(2, 6, 1, '2014-12-01'),
(3, 2, 1, '2014-12-02'),
(4, 6, 1, '2014-12-02'),
(5, 3, 1, '2014-12-03'),
(6, 6, 1, '2014-12-03'),
(8, 3, 1, '2014-12-16'),
(9, 6, 1, '2014-12-16'),
(10, 9, 1, '2014-12-29'),
(11, 7, 1, '2014-12-29'),
(12, 10, 1, '2014-12-29'),
(13, 2, 1, '2014-12-29'),
(14, 3, 1, '2014-12-29'),
(15, 11, 1, '2014-12-29'),
(16, 8, 1, '2014-12-29'),
(17, 6, 1, '2014-12-29'),
(18, 9, 1, '2014-12-30'),
(19, 7, 1, '2014-12-30'),
(20, 3, 1, '2014-12-30'),
(21, 11, 1, '2014-12-30'),
(22, 8, 1, '2014-12-30'),
(23, 6, 1, '2014-12-30'),
(24, 2, 1, '2014-12-17'),
(25, 3, 1, '2014-12-17'),
(26, 11, 1, '2014-12-17'),
(27, 8, 1, '2014-12-17'),
(28, 9, 1, '2014-12-27'),
(29, 9, 1, '2014-12-24'),
(30, 7, 1, '2014-12-24'),
(31, 10, 1, '2014-12-24'),
(32, 3, 1, '2014-12-24'),
(33, 11, 1, '2014-12-24'),
(34, 8, 1, '2014-12-24'),
(35, 6, 1, '2014-12-24'),
(36, 9, 1, '2014-12-04'),
(37, 7, 1, '2014-12-04'),
(38, 10, 1, '2014-12-04'),
(39, 2, 1, '2014-12-04'),
(40, 3, 1, '2014-12-04'),
(41, 8, 1, '2014-12-04'),
(42, 6, 1, '2014-12-04'),
(43, 18, 1, '2015-03-31'),
(44, 17, 1, '2015-03-31'),
(45, 19, 1, '2015-03-31'),
(46, 18, 1, '2015-04-11'),
(47, 17, 1, '2015-04-11'),
(48, 19, 1, '2015-04-11'),
(49, 20, 1, '2015-04-11'),
(50, 18, 1, '2015-04-10'),
(51, 17, 1, '2015-04-10'),
(52, 19, 1, '2015-04-10'),
(53, 20, 1, '2015-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail`
--

CREATE TABLE IF NOT EXISTS `employee_detail` (
  `EmpID` int(10) NOT NULL AUTO_INCREMENT,
  `EmpName` varchar(255) NOT NULL,
  `LEmpName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `EmpState` varchar(255) NOT NULL,
  `AccNo` varchar(20) NOT NULL,
  `BbName` varchar(255) NOT NULL,
  `BName` varchar(255) NOT NULL,
  `UserName` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `EmpAddress` text NOT NULL,
  `EmpMobile` varchar(15) NOT NULL,
  `EmpEmail` varchar(50) NOT NULL,
  `EmpBirthdate` date NOT NULL,
  `EmpBloodGroup` varchar(5) NOT NULL,
  `EmpTechnology` varchar(20) NOT NULL,
  PRIMARY KEY (`EmpID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `employee_detail`
--

INSERT INTO `employee_detail` (`EmpID`, `EmpName`, `LEmpName`, `Gender`, `EmpState`, `AccNo`, `BbName`, `BName`, `UserName`, `Password`, `EmpAddress`, `EmpMobile`, `EmpEmail`, `EmpBirthdate`, `EmpBloodGroup`, `EmpTechnology`) VALUES
(17, 'venu', 'Gopal', 'Male', 'Karnataka', '1515151515155', 'Chikkaballapur', 'Bank of India', 'venu', 'venu', 'bommenahalli', '8496030319', 'venugopalbgbhodh@gmail.com', '1996-03-07', 'A+', 'CS'),
(18, 'Mani', 'Kanta', 'Male', 'CS', '14541556241', 'Chickaballapur', 'State Bank of Mysore', 'manikanta', 'mani', 'kondamari', '8970064981', 'manikanta@gmai.coml', '1995-06-01', 'O+', 'EE'),
(19, 'venukumar', 'kv', 'Male', 'CS', '100025010005640', 'Chikkaballapur', 'Bank of Baroda', 'venu@gmail.com', '123456', 'chinthamni', '9781582469', 'venu@gmail.com', '1997-03-31', 'B+', 'CS'),
(20, 'Padmesh', 'Raj', 'Male', 'CS', '12131221121', 'Chintamani', 'Canara', 'padmesh', 'padmesh', 'Murgmalla', '9748532610', 'padmesh@gmail.com', '1996-03-14', 'A+', 'CP'),
(21, 'Shreyas', 'Raju', 'Male', 'Karnataka', '759840155878', 'Chikkaballapur', 'State Bank of India', 'shreyas', 'raj', 'Chikkaballapur', '7846946795', 'shreyasgovindaraj@gmail.com', '1996-07-19', 'O+', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `increment_detail`
--

CREATE TABLE IF NOT EXISTS `increment_detail` (
  `IncID` int(20) NOT NULL AUTO_INCREMENT,
  `EmpID` int(20) NOT NULL,
  `Salary` int(20) NOT NULL,
  `IncrementDate` date NOT NULL,
  PRIMARY KEY (`IncID`),
  KEY `EmpID` (`EmpID`),
  KEY `EmpID_2` (`EmpID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `increment_detail`
--

INSERT INTO `increment_detail` (`IncID`, `EmpID`, `Salary`, `IncrementDate`) VALUES
(1, 7, 10000, '2015-01-01'),
(2, 2, 120000, '2015-01-01'),
(3, 6, 300000, '2015-01-01'),
(4, 3, 30000, '2015-01-01'),
(5, 9, 300, '2015-01-01'),
(6, 8, 50000, '2015-01-01'),
(7, 10, 6500, '2015-01-31'),
(8, 6, 310000, '2015-02-01'),
(9, 3, 31000, '2015-02-01'),
(10, 9, 3300, '2015-02-01'),
(11, 2, 122000, '2015-02-01'),
(12, 8, 70000, '2015-02-01'),
(13, 7, 11000, '2015-02-01'),
(14, 11, 44000, '2015-01-31'),
(15, 20, 50000, '2015-05-01'),
(16, 20, 62200, '2015-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `salary_detail`
--

CREATE TABLE IF NOT EXISTS `salary_detail` (
  `SalaryID` int(20) NOT NULL AUTO_INCREMENT,
  `EmpID` int(20) NOT NULL,
  `JoinDate` date NOT NULL,
  `EmpType` varchar(20) NOT NULL,
  `CurrentSalary` int(10) NOT NULL,
  `IncrementAmount` int(10) NOT NULL,
  `IncrementAfter` int(5) NOT NULL,
  `IncrementDate` date NOT NULL,
  `LastSalary` int(10) NOT NULL,
  `LastIncrement` date NOT NULL,
  PRIMARY KEY (`SalaryID`),
  KEY `EmpID` (`EmpID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `salary_detail`
--

INSERT INTO `salary_detail` (`SalaryID`, `EmpID`, `JoinDate`, `EmpType`, `CurrentSalary`, `IncrementAmount`, `IncrementAfter`, `IncrementDate`, `LastSalary`, `LastIncrement`) VALUES
(1, 7, '2014-12-01', 'trainee', 12000, 1000, 1, '2015-03-01', 11000, '2015-02-01'),
(2, 2, '2014-12-01', 'employee', 124000, 2000, 1, '2015-03-01', 122000, '2015-02-01'),
(3, 3, '2014-12-01', 'trainee', 32000, 1000, 1, '2015-03-01', 31000, '2015-02-01'),
(4, 6, '2014-12-01', 'employee', 320000, 10000, 1, '2015-03-01', 310000, '2015-02-01'),
(5, 9, '2014-12-01', 'trainee', 6300, 3000, 1, '2015-03-01', 3300, '2015-02-01'),
(6, 10, '2014-12-01', 'trainee', 6800, 300, 1, '2015-03-03', 6500, '2015-01-31'),
(7, 8, '2014-12-01', 'employee', 90000, 20000, 1, '2015-03-01', 70000, '2015-02-01'),
(8, 11, '2014-12-01', 'trainee', 48000, 4000, 1, '2015-03-03', 44000, '2015-01-31'),
(9, 17, '0000-00-00', 'employee', 15000, 5000, 6, '2015-09-01', 15000, '2015-03-01'),
(10, 19, '2015-03-01', 'employee', 15000, 5000, 6, '2015-10-01', 15000, '2015-03-01'),
(11, 20, '0000-00-00', 'employee', 74400, 12200, 1, '2015-07-01', 62200, '2015-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`UserID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`) VALUES
(2, 'admin', 'admin');
