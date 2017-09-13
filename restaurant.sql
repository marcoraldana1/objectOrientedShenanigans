-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 12:03 PM
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
('1453', '100', 'Kiera', 'O''Donnell'),
('2287', '101', 'Garrett', 'Finigan'),
('2356', '102', 'Moira', 'Braden'),
('2688', '102', 'Saoirse', 'Shovlin'),
('2965', '103', 'Rian', 'Carr'),
('3469', '101', 'Keelan', 'Dwyer'),
('4265', '103', 'Keira', 'O''Loughlin'),
('4367', '102', 'Tierney', 'O''Brien'),
('5284', '100', 'Molly', 'McGreggor'),
('5389', '101', 'Alana', 'Agnew'),
('6345', '102', 'Grady', 'O''Fallon'),
('6378', '101', 'Riley', 'Fitzsimmons'),
('7361', '100', 'Kieran', 'O''Connel'),
('8349', '100', 'Braiden', 'O''Conner'),
('8643', '103', 'Paddy', 'McGuiness'),
('9358', '100', 'Caitlyn', 'McBeth'),
('9574', '103', 'Siobhan', 'Hoolihan');

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
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `tableID` varchar(12) NOT NULL,
  `seatingCapacity` varchar(5) NOT NULL,
  `serverID` varchar(6) DEFAULT NULL,
  `isOccupied` tinyint(1) NOT NULL DEFAULT '0',
  `storeNum` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`tableID`, `seatingCapacity`, `serverID`, `isOccupied`, `storeNum`) VALUES
('1', '2', '5284', 0, '100'),
('1', '2', NULL, 0, '101'),
('1', '8', NULL, 0, '102'),
('1', '8', NULL, 0, '103'),
('10', '4', '8349', 0, '100'),
('10', '4', NULL, 0, '101'),
('10', '2', NULL, 0, '102'),
('10', '2', NULL, 0, '103'),
('11', '4', NULL, 0, '100'),
('11', '4', NULL, 0, '101'),
('11', '2', NULL, 0, '102'),
('11', '2', NULL, 0, '103'),
('12', '4', NULL, 0, '100'),
('12', '4', NULL, 0, '101'),
('12', '4', NULL, 0, '102'),
('12', '4', NULL, 0, '103'),
('13', '4', NULL, 0, '100'),
('13', '4', NULL, 0, '101'),
('13', '4', NULL, 0, '102'),
('13', '4', NULL, 0, '103'),
('14', '6', NULL, 0, '100'),
('14', '4', NULL, 0, '101'),
('14', '4', NULL, 0, '102'),
('14', '4', NULL, 0, '103'),
('15', '6', NULL, 0, '100'),
('15', '6', NULL, 0, '101'),
('15', '4', NULL, 0, '102'),
('15', '4', NULL, 0, '103'),
('16', '6', NULL, 0, '100'),
('16', '6', NULL, 0, '101'),
('16', '2', NULL, 0, '102'),
('16', '2', NULL, 0, '103'),
('17', '6', '5284', 0, '100'),
('17', '6', NULL, 0, '101'),
('17', '6', NULL, 0, '102'),
('17', '6', NULL, 0, '103'),
('18', '8', NULL, 0, '100'),
('18', '6', NULL, 0, '101'),
('18', '6', NULL, 0, '102'),
('18', '6', NULL, 0, '103'),
('19', '6', NULL, 0, '100'),
('19', '8', NULL, 0, '101'),
('19', '6', NULL, 0, '102'),
('19', '6', NULL, 0, '103'),
('2', '2', '9358', 0, '100'),
('2', '2', NULL, 0, '101'),
('2', '4', NULL, 0, '102'),
('2', '4', NULL, 0, '103'),
('20', '4', NULL, 0, '100'),
('20', '4', NULL, 0, '101'),
('20', '6', NULL, 0, '102'),
('20', '4', NULL, 0, '103'),
('21', '6', NULL, 0, '100'),
('21', '4', NULL, 0, '101'),
('21', '4', NULL, 0, '102'),
('21', '4', NULL, 0, '103'),
('22', '8', NULL, 0, '100'),
('22', '4', NULL, 0, '101'),
('22', '6', NULL, 0, '102'),
('22', '4', NULL, 0, '103'),
('23', '4', NULL, 0, '103'),
('3', '2', NULL, 0, '100'),
('3', '2', NULL, 0, '101'),
('3', '4', NULL, 0, '102'),
('3', '4', NULL, 0, '103'),
('4', '2', NULL, 0, '100'),
('4', '2', NULL, 0, '101'),
('4', '4', NULL, 0, '102'),
('4', '4', NULL, 0, '103'),
('5', '4', '9358', 0, '100'),
('5', '8', NULL, 0, '101'),
('5', '4', NULL, 0, '102'),
('5', '4', NULL, 0, '103'),
('6', '4', NULL, 0, '100'),
('6', '4', NULL, 0, '101'),
('6', '2', '4367', 0, '102'),
('6', '2', NULL, 0, '103'),
('7', '4', '1453', 0, '100'),
('7', '4', NULL, 0, '101'),
('7', '2', NULL, 0, '102'),
('7', '2', NULL, 0, '103'),
('8', '4', NULL, 0, '100'),
('8', '4', NULL, 0, '101'),
('8', '2', NULL, 0, '102'),
('8', '2', NULL, 0, '103'),
('9', '4', NULL, 0, '100'),
('9', '4', NULL, 0, '101'),
('9', '2', NULL, 0, '102'),
('9', '2', NULL, 0, '103');

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
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`tableID`,`storeNum`),
  ADD KEY `fk_servers` (`serverID`),
  ADD KEY `fk_store` (`storeNum`);

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
-- Constraints for table `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `fk_servers` FOREIGN KEY (`serverID`) REFERENCES `servers` (`serverID`),
  ADD CONSTRAINT `fk_store` FOREIGN KEY (`storeNum`) REFERENCES `store` (`storeID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `usertostoreFK` FOREIGN KEY (`storeNum`) REFERENCES `store` (`storeID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
