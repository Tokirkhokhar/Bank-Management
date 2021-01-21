-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 07:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clients`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `Client_id` int(3) NOT NULL,
  `Name` text NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `Bank Balance` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Client_id`, `Name`, `E-mail`, `Bank Balance`) VALUES
(101, 'Khushi Patel', 'kd027@gmail.com', 10023000),
(102, 'Vrund Patel', 'vd12@gmail.com', 1002000),
(103, 'Tokir Khokhar', 'tk97@gmail.com', 1204100),
(104, 'Vahid Khokhar', 'vh56@gmail.com', 100278),
(105, 'Rugved khoshiya', 'grey78@gmail.com', 1036600),
(106, 'Rushit Patel', 'rp54@gmail.com', 1002450),
(107, 'Mukes kachiya', 'mk76@gmail.com', 1006600),
(108, 'Jay Patel', 'jp88@gmail.com', 1003640),
(109, 'Niles chag', 'nc57@g,ail.com', 1026600),
(110, 'Jignesh parmar', 'jp75@gmail.com', 1365500),
(111, 'Nitin radhu', 'nr99@gmail.com', 1000660);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `Transfer_amount` int(10) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `Transfer_amount`, `date_time`) VALUES
(1, 'Khushi Patel', 'Vrund Patel', 483, '2021-01-20 21:12:36'),
(2, 'Tokir Khokhar', 'Khushi Patel', 864, '2021-01-20 21:12:36'),
(3, 'Jay Pate', 'Niles chag', 8465, '2021-01-20 21:13:56'),
(4, 'Rushit Patel', 'Jay Patel', 889, '2021-01-20 21:13:56'),
(5, 'Vrund Patel', 'Mukes kachiya', 6951, '2021-01-20 21:17:24'),
(6, 'Jignesh parmar', 'Rugved khoshiya', 4256, '2021-01-20 21:18:06'),
(7, 'Vrund Patel', 'Tokir Khokhar', 450, '2021-01-20 22:41:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Client_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `Client_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
