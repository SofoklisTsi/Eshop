-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 06:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `BDate` date NOT NULL,
  `Phone` int(20) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `StreetNumber` int(4) NOT NULL,
  `City` varchar(50) NOT NULL,
  `PostalCode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Email`, `Password`, `FName`, `LName`, `BDate`, `Phone`, `Street`, `StreetNumber`, `City`, `PostalCode`) VALUES
('lol@yahoo.gr', '1q2w#E$R', 'Lola', 'Suranova', '1995-02-12', 123, 'sssss', 123, 'Germany', 15543),
('lola@yahoo.gr', '1q2w3e$R', 'Lolita', 'Arba', '1999-12-31', 2147483647, 'strau', 765, 'Espana', 87869),
('qwer@yahoo.gr', '1q2w3e$R', 'sof', 'tsi', '1998-12-12', 123123, '213123', 123123, '12321312', 1233),
('qwertpl@yahoo.gr', '12qw!@QW', 'sof', 'ts', '1999-12-02', 2147483647, 'dfdfdf', 0, 'dfdfdf', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `travelorder`
--

CREATE TABLE `travelorder` (
  `OrderID` int(20) NOT NULL,
  `ProductID` varchar(3) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateOfOrder` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travelorder`
--

INSERT INTO `travelorder` (`OrderID`, `ProductID`, `Email`, `DateOfOrder`) VALUES
(21, '#06', 'lola@yahoo.gr', '2022-01-18'),
(25, '#03', 'qwer@yahoo.gr', '2022-01-19'),
(26, '#01', 'lol@yahoo.gr', '2023-01-08'),
(27, '#10', 'qwertpl@yahoo.gr', '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `travelpackage`
--

CREATE TABLE `travelpackage` (
  `ProductID` varchar(3) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `PhotoURL` varchar(80) NOT NULL,
  `FromCity` varchar(20) NOT NULL,
  `ToCity` varchar(20) NOT NULL,
  `FromDate` date NOT NULL,
  `ToDate` date NOT NULL,
  `Duration` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travelpackage`
--

INSERT INTO `travelpackage` (`ProductID`, `Price`, `Quantity`, `PhotoURL`, `FromCity`, `ToCity`, `FromDate`, `ToDate`, `Duration`) VALUES
('#01', '328,40€', 27, '../Images_and_Icons/Destinations/Balladolid.jfif', 'Athens', 'Balladolid', '2022-01-01', '2022-02-02', '31 Days'),
('#02', '258,40€', 48, '../Images_and_Icons/Destinations/Barcelona.jpg', 'Athens', 'Barcelona', '2022-02-02', '2022-03-03', '31 Days'),
('#03', '614,95€', 12, '../Images_and_Icons/Destinations/Cadiz.jpg', 'Athens', 'Cadiz', '2022-01-05', '2022-01-10', '5 Days'),
('#04', '327,87€', 46, '../Images_and_Icons/Destinations/Granada.jfif', 'Athens', 'Granada', '2022-02-05', '2022-02-10', '5 Days'),
('#05', '102,87€', 78, '../Images_and_Icons/Destinations/Jaen.jfif', 'Athens', 'Jaen', '2022-01-10', '2022-01-20', '10 Days'),
('#06', '997,00€', 9, '../Images_and_Icons/Destinations/Madrid.jfif', 'Athens', 'Madrid', '2022-02-10', '2022-02-20', '10 Days'),
('#07', '222,34€', 46, '../Images_and_Icons/Destinations/Malaga.jfif', 'Athens', 'Malaga', '2022-03-15', '2022-03-26', '11 Days'),
('#08', '444,11€', 34, '../Images_and_Icons/Destinations/Rota.jpg', 'Athens', 'Rota', '2022-04-15', '2022-04-26', '11 Days'),
('#09', '386,99€', 9, '../Images_and_Icons/Destinations/Salamanca.jfif', 'Athens', 'Salamanca', '2023-01-01', '2023-01-05', '4 Days'),
('#10', '1.414,90€', 3, '../Images_and_Icons/Destinations/Sevilla.jpg', 'Athens', 'Sevilla', '2022-10-23', '2023-01-10', '80 Days'),
('#11', '179,42€', 31, '../Images_and_Icons/Destinations/Soria.jfif', 'Athens', 'Soria', '2023-04-01', '2023-04-03', '2 Days'),
('#12', '246,99€', 0, '../Images_and_Icons/Destinations/Zaragoza.jfif', 'Athens', 'Zaragoza', '2023-02-01', '2023-04-01', '2 Months');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `travelorder`
--
ALTER TABLE `travelorder`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `Email` (`Email`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `travelpackage`
--
ALTER TABLE `travelpackage`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travelorder`
--
ALTER TABLE `travelorder`
  MODIFY `OrderID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `travelorder`
--
ALTER TABLE `travelorder`
  ADD CONSTRAINT `travelorder_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `client` (`Email`),
  ADD CONSTRAINT `travelorder_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `travelpackage` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
