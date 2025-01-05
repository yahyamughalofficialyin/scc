-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 08:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaheencodecrafters`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(500) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `AddedBy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` varchar(500) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `AddedBy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` varchar(500) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `employeeCount` varchar(200) DEFAULT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `AddedBy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` varchar(500) NOT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phoneNumber` varchar(500) DEFAULT NULL,
  `cnic` varchar(50) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `departmentId` varchar(500) DEFAULT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `AddedBy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectimage`
--

CREATE TABLE `projectimage` (
  `id` varchar(500) NOT NULL,
  `projectId` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `AddedBy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` varchar(500) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `startDate` varchar(500) DEFAULT NULL,
  `endDate` varchar(500) DEFAULT NULL,
  `departmentId` varchar(500) DEFAULT NULL,
  `clientId` varchar(500) DEFAULT NULL,
  `assignedTo` varchar(500) DEFAULT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `AddedBy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(500) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `AddedBy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `timeAdded`, `AddedBy`) VALUES
('', 'Yahya', 'Mughal', 'ysreality@gmail.com', '+923132952131', '$2y$10$SqyBgBtF.IlhW3txi0ptROyJ2pTU1i6XPpFzk/SFs8GpXJ/5kVeYi', '2024-10-28 20:09:11', NULL),
('295d391f', 'Yahya', 'Mughal', 'shaheencodecraftershunyaar@com', '23', '$2y$10$xa.IKlb4jvsaLQhcCNLFd.GlvcURqM6fIGmHw8DwQtw3B7zb2FOb2', '2024-10-28 21:14:30', NULL),
('3d114e13', 'Yahya', 'Mughal', 'ysrealityhunyaar@gmail.com', '12', '$2y$10$o954VuECezIVXsWscHSe4uu/HepTOxoYSbA4doXYUg8g0QTrXDTrC', '2024-10-28 21:12:48', NULL),
('52e303cd', 'Yahya', 'Mughal', 'yahyamughalofficiallyin@gmail.com', '+923330450101', '$2y$10$yzyz4TrEVSgDql/sTsxJi.VQgY2XfwrQcmCjYDTA/6cQK2h18XnbO', '2024-10-28 20:57:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departmentId` (`departmentId`);

--
-- Indexes for table `projectimage`
--
ALTER TABLE `projectimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projectId` (`projectId`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departmentId` (`departmentId`),
  ADD KEY `clientId` (`clientId`),
  ADD KEY `assignedTo` (`assignedTo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`departmentId`) REFERENCES `department` (`id`);

--
-- Constraints for table `projectimage`
--
ALTER TABLE `projectimage`
  ADD CONSTRAINT `projectimage_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `projects` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`departmentId`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`clientId`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `projects_ibfk_3` FOREIGN KEY (`assignedTo`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
