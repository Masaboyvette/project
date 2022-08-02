-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 07:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `ahuva` char(10) NOT NULL,
  `ahujya` char(10) NOT NULL,
  `amasaha` time NOT NULL,
  `itariki` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `ahuva`, `ahujya`, `amasaha`, `itariki`) VALUES
(30, 'ruhango', 'kigali', '00:00:06', '2022-08-17'),
(31, 'muhanga', 'kigali', '00:00:06', '2022-08-30'),
(32, 'muhanga', 'kigali', '00:00:06', '2022-08-23'),
(33, 'ruhango', 'nyanza', '00:00:05', '2022-08-23'),
(34, 'muhanga', '', '00:00:00', '0000-00-00'),
(35, 'muhanga', 'ruhango', '05:30:00', '2022-08-30'),
(36, 'muhanga', 'kigali', '06:00:00', '2022-08-12'),
(37, '', '', '00:00:00', '0000-00-00'),
(38, '', '', '00:00:00', '0000-00-00'),
(39, '', '', '00:00:00', '0000-00-00'),
(40, 'ruhango', 'wrwrwr', '00:00:00', '0122-12-23'),
(41, 'ruhango', 'kigali', '05:30:00', '2022-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `conductor`
--

CREATE TABLE `conductor` (
  `id` int(11) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `telnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conductor`
--

INSERT INTO `conductor` (`id`, `adress`, `name`, `telnumber`) VALUES
(1, 'rooom1', 'yvette', 789017110),
(2, 'huye', 'mutembanshunshu', 789017110),
(3, 'huye', 'mutembanshunshu', 789017110),
(4, 'Hopeiradukunda1@gmail.com', 'Account', 789017110);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `id` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `UserName` varchar(4) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`) VALUES
(4, 'yvette', 'mukeshimana', '0', 'Hopeiradukunda1@gmail.com', '123'),
(5, 'hope', 'iradukunda', 'yvet', 'mukeshimanayvette2@gmail.com', '1234'),
(6, 'hope', 'iradukunda', 'yvet', 'yvettemukeshimana01@gmail.com', '123'),
(7, 'UserName', 'name', 'Yvet', 'Hopeiradukunda1@gmail.com', '234567'),
(8, 'UserName', 'name', 'Yvet', 'Hopeiradukunda1@gmail.com', '234567'),
(9, 'masabo', 'yves', 'yves', 'Hopeiradukunda1@gmail.com', '124'),
(10, 'YVETTE', 'mukeshimana', 'Yvet', 'Hopeiradukunda1@gmail.com', '1234'),
(11, 'YVETTE', 'mukeshimana', 'Yvet', 'Hopeiradukunda1@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `amaunt` int(11) NOT NULL,
  `accauntno` int(15) NOT NULL,
  `telephoneno` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `amaunt`, `accauntno`, `telephoneno`, `date`) VALUES
(2, 12344, 122, 222, '0000-00-00'),
(3, 12344, 122, 222, '0000-00-00'),
(4, 12344, 122, 222, '0000-00-00'),
(5, 12344, 122, 222, '0000-00-00'),
(6, 12345678, 789017110, 1000, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
