-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 02:02 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hailcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionNo` char(10) NOT NULL,
  `phoneNo` char(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `amount` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionNo`, `phoneNo`, `date`, `amount`) VALUES
('1', '0123456789', '2020-02-05 07:30:00', 200.00),
('2', '0123456789', '2020-02-07 14:30:00', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `phoneNo` char(10) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `balance` double(10,2) DEFAULT NULL,
  `point` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`phoneNo`, `firstName`, `lastName`, `email`, `password`, `balance`, `point`) VALUES
('0123456786', 'Alden', 'Lee', 'aldenlee@gmail.com', 'aaaaaaaa', 2.20, 200),
('0123456787', 'James', 'Wong', 'jameswong@gmail.com', 'aaaaaaaa', 77.20, 500),
('0123456788', 'Cindy', 'Wong', 'cindywong@gmail.com', 'aaaaaaaa', 422.20, 1024),
('0123456789', 'Lucas', 'Lim', 'lucaslim@gmail.com', 'aaaaaaaa', 43.60, 2322);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionNo`),
  ADD KEY `transactionNo` (`transactionNo`),
  ADD KEY `phoneNo` (`phoneNo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`phoneNo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `phoneNo` FOREIGN KEY (`phoneNo`) REFERENCES `user` (`phoneNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
