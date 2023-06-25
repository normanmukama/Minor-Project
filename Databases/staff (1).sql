-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 01:30 PM
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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `lastname`, `email`, `role`, `contact`, `password`, `reg_date`) VALUES
(5, 'George', 'Garrison', 'pywypitafu@mailinator.com', 'hoju@mailinator.com', 0, 'Pa$$w0rd!', '2023-04-23'),
(8, 'Ankunda', 'Hope', 'ankundahope@gmail.com', 'Stakeholder', 2147483647, 'hope', '2023-05-08'),
(9, 'Byamugisha', 'Simon', 'byamugisha@gmail.com', 'resident director', 2147483647, 'simon', '2023-05-08'),
(10, 'Mugisha', 'Rymond', 'rymon@gmail.com', 'Accountant', 2147483647, 'rymon', '2023-05-08'),
(11, 'Susan', 'Susan', 'susan@gmail.com', 'Director', 2147483647, 'susan', '2023-05-09'),
(12, 'Ritah', 'Ritah2', 'ritha@gmail.com', 'ritah@gmail.com', 2147483647, 'norman', '2023-05-09'),
(13, 'Karugaba', 'Simon', 'karugabasimon@gmail.com', 'Boda B', 2147483647, 'rtyuiu', '2023-05-13'),
(14, 'Mbaine', 'Henry', 'mbainehenry@gmail.com', 'Manager', 7665444, '', '2023-05-19'),
(15, 'Hategyekamukama', 'Norman', 'normanmukama11@gmail.com', 'Chief of Staff', 2147483647, '12345', '2023-05-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
