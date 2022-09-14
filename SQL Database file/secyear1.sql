-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 08:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secyear1`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(100) NOT NULL,
  `drugname` varchar(100) NOT NULL,
  `ndc` int(11) NOT NULL,
  `expirationdate` date NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `drugname`, `ndc`, `expirationdate`, `quantity`) VALUES
(1, 'Crocin', 245678911, '2023-12-02', 10),
(3, 'Dolo-650', 12, '2025-02-02', 10),
(4, 'norflox', 12, '2025-02-02', 10),
(5, 'CETZINE', 852369741, '2024-12-25', 50);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(100) NOT NULL,
  `drugname` varchar(100) NOT NULL,
  `ndc` int(15) NOT NULL,
  `expirationdate` date NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `drugname`, `ndc`, `expirationdate`, `quantity`) VALUES
(0, 'Combiflam', 10235687, '2011-06-05', 20);

-- --------------------------------------------------------

--
-- Table structure for table `meds`
--

CREATE TABLE `meds` (
  `ID` int(100) NOT NULL,
  `Drug Name` int(100) NOT NULL,
  `National Drug Code (NDC)` int(11) NOT NULL,
  `Quantity` int(225) NOT NULL,
  `Expiration Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reqmeds`
--

CREATE TABLE `reqmeds` (
  `id` int(100) NOT NULL,
  `drugname` varchar(100) NOT NULL,
  `ndc` int(11) NOT NULL,
  `expirationdate` date NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reqmeds`
--

INSERT INTO `reqmeds` (`id`, `drugname`, `ndc`, `expirationdate`, `quantity`) VALUES
(0, 'Combiflam', 10235687, '2023-08-05', 10),
(1, 'Benadryl', 1025245, '2028-08-05', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meds`
--
ALTER TABLE `meds`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reqmeds`
--
ALTER TABLE `reqmeds`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
