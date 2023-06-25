-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 01:29 PM
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
-- Table structure for table `orphans`
--

CREATE TABLE `orphans` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `current_country` varchar(100) NOT NULL,
  `current_district` varchar(100) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `registration_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orphans`
--

INSERT INTO `orphans` (`id`, `first_name`, `last_name`, `date_of_birth`, `current_country`, `current_district`, `guardian`, `registration_date`) VALUES
(2, 'Mason Norman', 'Carol Sullivan', '06-Aug-1989', 'Quis minim sit ex o', ' Debitis et laborum ', 'Eos possimus venia', '2023-03-09 19:52:33.460724'),
(10, 'Patience Hines', 'Jessica Figueroa', '21-Jun-2000', 'Anim exercitationem ', ' Reiciendis veritatis', 'Sit non aut dolor e', '2023-03-10 07:47:50.998195'),
(12, 'Teagan Mcknight', 'Lunea Stafford', '30-Dec-1992', 'Accusamus non ut quo', ' Accusantium qui eos', 'Et consequuntur ea o', '2023-03-10 07:49:43.661723'),
(14, 'Eve Ramirez', 'Ashton Valentine', '17-Sep-1971', '  Ea proident eu culp', ' Dolore sit quaerat v', 'Nihil provident sim', '2023-03-10 07:50:05.881900'),
(15, 'Shelby Barbra', 'Zelenia Warren', '22-Jan-1981', '  Libero quasi vitae a', ' Dolorem facere modi ', 'Molestiae magna alia', '2023-03-10 08:24:21.388233'),
(16, 'Kakuru', 'Amos', '15-Mar-2018', 'Zambia', ' Kashasha', 'Ibrahimovic', '2023-05-08 19:05:34.624641'),
(17, 'Kavani', 'Ednson', '30-Dec-2019', 'Equador', ' Ontario', 'Ibra', '2023-05-08 19:07:35.287223'),
(20, 'Dustin Norman', 'Dorian Abbasa', '07-Dec-2005', '  Doloremque dolorem c', ' Magni et laborum qua', 'Ipsam repudiandae te', '2023-05-08 19:27:32.660530'),
(21, 'Ivory Pandora', 'Calista Cantrell', '11-Dec-2000', '  Corrupti hic nisi f', ' Ea dolore pariatur ', 'Aspernatur ea aut qu', '2023-05-08 19:27:46.445219'),
(22, 'Susan', 'Susan', '30-Dec-2019', '  Uganda', ' Ibanda', 'Kahunga', '2023-05-09 13:21:35.195763'),
(23, 'Hategyekamukama', 'Norman', '15-Mar-2018', 'uganda', ' Consectetur eum volu', 'Saepe laborum libero', '2023-06-15 23:30:21.820860'),
(29, 'Urban', 'Banturaki', '20-4-2020', 'Kenya', 'ntungamo', 'Mathew', '0000-00-00 00:00:00.000000'),
(30, 'Urban', 'Bantu', '23-5-2021', 'Zimbabwe', 'Bukoto', 'Acheng', '0000-00-00 00:00:00.000000'),
(32, 'Byarugaba', 'Ssali', '2023-06-01', '  England', 'kakoba', 'Bebe cool', '2023-06-16 10:18:49.812548');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orphans`
--
ALTER TABLE `orphans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orphans`
--
ALTER TABLE `orphans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
