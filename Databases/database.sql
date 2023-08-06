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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Norman', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
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
