-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 05:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `muctieu`
--

CREATE TABLE `muctieu` (
  `ID` int(11) NOT NULL,
  `mucdich` text NOT NULL,
  `thutuc` text NOT NULL,
  `tansuat` text NOT NULL,
  `STT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `muctieu2`
--

CREATE TABLE `muctieu2` (
  `STT` int(11) NOT NULL,
  `mucdich` text NOT NULL,
  `donvi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muctieu2`
--

INSERT INTO `muctieu2` (`STT`, `mucdich`, `donvi`) VALUES
(34, '', ''),
(35, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `muctieu`
--
ALTER TABLE `muctieu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `stt` (`STT`);

--
-- Indexes for table `muctieu2`
--
ALTER TABLE `muctieu2`
  ADD PRIMARY KEY (`STT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `muctieu`
--
ALTER TABLE `muctieu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `muctieu2`
--
ALTER TABLE `muctieu2`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
