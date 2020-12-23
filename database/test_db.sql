-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2020 at 04:52 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.2.34-8+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int NOT NULL,
  `owner` char(40) NOT NULL,
  `date` date NOT NULL,
  `v1` double(10,4) NOT NULL DEFAULT '0.0000',
  `v2` double(10,4) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `owner`, `date`, `v1`, `v2`) VALUES
(1, 'owners-1', '2020-12-23', 91.1451, 91.1452),
(2, 'owners-2', '2020-12-23', 91.1451, 91.1452),
(3, 'owners-3', '2020-12-23', 91.1451, 91.1452),
(4, 'owners-4', '2020-12-23', 91.1451, 91.1452),
(5, 'owners-5', '2020-12-23', 91.1451, 91.1452);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `v1` (`v1`),
  ADD KEY `v2` (`v2`),
  ADD KEY `date` (`date`),
  ADD KEY `owner` (`owner`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
