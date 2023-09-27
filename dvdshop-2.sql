-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2023 at 09:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `actorname` varchar(20) NOT NULL,
  `actor nickname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `movies shown` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`actorname`, `actor nickname`, `gender`, `age`, `movies shown`) VALUES
('Batman', 'Bat', 'Male', 40, 'DC'),
('Thor Sorn ', 'Klinniam', 'female', 30, 'Hoon Payon');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `moviename` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `price` int(10) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `movieid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`moviename`, `date`, `price`, `detail`, `movieid`) VALUES
('Hoon Payon', '2023-09-20', 150, 'Each type of robot There are different ways of doing it. Made to protect or made to be evil', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_name` varchar(50) NOT NULL,
  `o_lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `o_movie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_name`, `o_lastname`, `email`, `o_movie`) VALUES
('dawd', 'wqd', 'fefefmf', 'Hoon Payon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `lastname`, `address`, `phone`) VALUES
('2', 'ABCDE', 'A', 'BKK', '12345'),
('234', 'agr', 'argrw', 'fzgzdzf', '4314134'),
('3', 'Pha', 'Wai', 'BKK', '95250823'),
('34', 'atre', 'ewtrw', 't4qta', '43524'),
('5', 'sey', 'seg', 'e64', '340345'),
('54', 'esgr', 'egse', 'gers', '2535');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`movies shown`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`moviename`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
