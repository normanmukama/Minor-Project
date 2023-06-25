-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 01:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `address`, `email`, `password`, `reg_date`) VALUES
(19, 'kanyamuhanga', 'Najuna', 'Guardian', 'kanyamuhanga@gmail.com', '12345', '2023-04-22 21:12:13'),
(21, 'Akorabirungi', 'Lutgard', 'Donor', 'akorabirungi@gmail.com', 'lutgard', '2023-05-04 09:02:37'),
(24, 'Katarina', 'Catheline', 'Donor', 'catheline@gmail.com', '657744844833', '2023-05-19 08:13:31'),
(26, 'Arinaitwe', 'Braison', 'Donor', 'arinaitwe@gmail.com', 'zxcvbn', '2023-05-20 11:14:22'),
(27, 'Romeru', 'Lukaku', 'Guardian', 'lukaku@gmail.com', 'poiuyt', '2023-05-20 11:16:17'),
(29, 'Nahabwe', 'Daphine', 'Donor', 'daphine@gmail.com', 'wwwwwww', '2023-05-20 11:21:18'),
(30, 'Hategyekamukama', 'Norman', 'Guardian', 'normanmukama11@gmail.com', '1233456789', '2023-05-25 08:00:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
