-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 09:11 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `resID` int(11) NOT NULL,
  `custName` varchar(50) NOT NULL,
  `custPhone` varchar(10) DEFAULT NULL,
  `partySize` int(11) NOT NULL,
  `resDate` varchar(10) NOT NULL,
  `resTime` varchar(10) NOT NULL,
  `storeNum` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `servers` (
  `serverID` varchar(15) NOT NULL,
  `storeNum` varchar(25) NOT NULL,
  `serverFName` varchar(50) NOT NULL,
  `serverLName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`serverID`, `storeNum`, `serverFName`, `serverLName`) VALUES
('5284', '100', 'Molly', 'McGreggor'),
('7361', '100', 'Kieran', 'O''Connel'),
('8349', '100', 'Braiden', 'O''Conner'),
('9358', '100', 'Caitlyn', 'McBeth');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `storeID` varchar(25) NOT NULL,
  `num2pTables` int(11) DEFAULT NULL,
  `num4pTables` int(11) DEFAULT NULL,
  `num6pTables` int(11) DEFAULT NULL,
  `num8pTables` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`storeID`, `num2pTables`, `num4pTables`, `num6pTables`, `num8pTables`) VALUES
('100', 4, 10, 6, 2),
('101', 6, 4, 2, 0),
('102', 7, 9, 5, 1),
('103', 7, 12, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userRole` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userLogin` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `storeNum` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userRole`, `userName`, `userLogin`, `userPassword`, `storeNum`) VALUES
(1, 'Host', 'Sara', 'Sara123', 'imawesome', '100'),
(2, 'Manager', 'Mr. Big', 'BigBusiness', 'BigMoney', '100'),
(3, 'Server', 'Server Station 1', 'serverstation1', 'letmein', '100'),
(4, 'Manager', 'Tom O''Henry', 'BigO', 'guiness1', '101'),
(5, 'Manager', 'Robbie', 'RMurphy', 'rugbyRules', '102'),
(6, 'Manager', 'Kevin', 'Killian1', 'red99', '103');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`resID`),
  ADD KEY `restostoreFK` (`storeNum`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`serverID`),
  ADD KEY `servertostoreFK` (`storeNum`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`storeID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `usertostoreFK` (`storeNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `resID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
