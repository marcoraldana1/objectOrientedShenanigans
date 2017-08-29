-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 02:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `resID` int(11) NOT NULL AUTO_INCREMENT,
  `custName` varchar(50) NOT NULL,
  `custPhone` varchar(10) DEFAULT NULL,
  `partySize` int(11) NOT NULL,
  `resDate` varchar(10) NOT NULL,
  `resTime` varchar(10) NOT NULL,
  `storeNum` varchar(25) NOT NULL,
  PRIMARY KEY (`resID`),
  KEY `restostoreFK` (`storeNum`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`resID`, `custName`, `custPhone`, `partySize`, `resDate`, `resTime`, `storeNum`) VALUES
(1, 'Bob the Builder', '555Build', 8, '8/30/2017', '6:00 PM', '101'),
(2, 'Pinky Pie Pony', '555Pink', 4, '8/25/17', '5:00 PM', '100'),
(3, 'Hello Kitty', '555Hello', 2, '9/05/17', '12:30 PM', '100');

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE IF NOT EXISTS `servers` (
  `serverID` varchar(15) NOT NULL,
  `storeNum` varchar(25) NOT NULL,
  `serverFName` varchar(50) NOT NULL,
  `serverLName` varchar(50) NOT NULL,
  PRIMARY KEY (`serverID`),
  KEY `servertostoreFK` (`storeNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`serverID`, `storeNum`, `serverFName`, `serverLName`) VALUES
('5284', '100', 'Molly', 'McGreggor'),
('7361', '100', 'Kieran', 'O\'Connel'),
('8349', '100', 'Braiden', 'O\'Conner'),
('9358', '100', 'Caitlyn', 'McBeth');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `storeID` varchar(25) NOT NULL,
  `num2pTables` int(11) DEFAULT NULL,
  `num4pTables` int(11) DEFAULT NULL,
  `num6pTables` int(11) DEFAULT NULL,
  `num8pTables` int(11) DEFAULT NULL,
  PRIMARY KEY (`storeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`storeID`, `num2pTables`, `num4pTables`, `num6pTables`, `num8pTables`) VALUES
('100', 4, 4, 2, 1),
('101', 6, 4, 2, 0),
('102', 4, 6, 4, 2),
('103', 6, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userRole` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userLogin` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `storeNum` varchar(25) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `usertostoreFK` (`storeNum`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userRole`, `userName`, `userLogin`, `userPassword`, `storeNum`) VALUES
(1, 'Host', 'Sara', 'Sara123', 'imawesome', '100'),
(2, 'Manager', 'Mr. Big', 'BigBusiness', 'BigMoney', '100'),
(3, 'Server', 'Server Station 1', 'serverstation1', 'letmein', '100');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `restostoreFK` FOREIGN KEY (`storeNum`) REFERENCES `store` (`storeID`);

--
-- Constraints for table `servers`
--
ALTER TABLE `servers`
  ADD CONSTRAINT `servertostoreFK` FOREIGN KEY (`storeNum`) REFERENCES `store` (`storeID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `usertostoreFK` FOREIGN KEY (`storeNum`) REFERENCES `store` (`storeID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
