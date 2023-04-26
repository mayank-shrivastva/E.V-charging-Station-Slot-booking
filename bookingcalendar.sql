-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 06:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingcalendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `code`) VALUES
(1, 'admin', 'mayankshrivastva7@gmail.com', 'df780a97b7d6a8f779f14728bccd3c4c', ''),
(2, 'admin', 'shrivastva.mayank27@gmail.com', 'df780a97b7d6a8f779f14728bccd3c4c', '');

-- --------------------------------------------------------

--
-- Table structure for table `c1`
--

CREATE TABLE `c1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `carmodel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `carnumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c1`
--

INSERT INTO `c1` (`id`, `name`, `carmodel`, `email`, `owner_email`, `date`, `timeslot`, `carnumber`) VALUES
(1, 'Mayank kumar Shrivastva', 'MG ZS EV', 'shrivastva.mayank27@gmail.com', 'aryan.singh_cs20@gla.ac.in', '2023-04-23', '09:00AM-10:00AM', 'HR26DQ7854'),
(2, 'Mayank kumar Shrivastva', 'MG ZS EV', 'shrivastva.mayank27@gmail.com', 'aryan.singh_cs20@gla.ac.in', '2023-04-28', '23:00PM-00:00AM', 'HR26DQ7854'),
(3, 'Mayank kumar Shrivastva', 'Tata Tiago EV', 'shrivastva.mayank27@gmail.com', 'mayank.shrivastva_cs21@gla.ac.in', '2023-04-24', '09:00AM-10:00AM', 'HR26DQ5551');

-- --------------------------------------------------------

--
-- Table structure for table `cardetails`
--

CREATE TABLE `cardetails` (
  `id` int(11) NOT NULL,
  `car name` varchar(244) NOT NULL,
  `car number` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `email id` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardetails`
--

INSERT INTO `cardetails` (`id`, `car name`, `car number`, `mobile`, `email id`, `price`, `book`) VALUES
(1, 'Tata Tiago EV', 'HR26DQ5551', 8126155501, 'mayank.shrivastva_cs21@gla.ac.in', 200, 'car1'),
(2, 'Kia EV6', 'HR26DQ6789', 9315228104, 'Himanshudubey802@gmail.com', 250, 'car2'),
(3, 'MG ZS EV', 'HR26DQ7854', 9667585514, 'aryan.singh_cs20@gla.ac.in', 250, 'car3');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `owner name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `GST_number` int(11) NOT NULL,
  `station_address` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `owner name`, `email`, `password`, `GST_number`, `station_address`, `code`) VALUES
(1, 'Maynak Kumar', 'Himanshudubey802@gmail.com', 'df780a97b7d6a8f779f14728bccd3c4c', 2147483647, 'l-18 shyam park near nawda metro uttam nagar new delhi', ''),
(2, 'Maynak Kumar', 'aryan.singh_cs20@gla.ac.in', 'df780a97b7d6a8f779f14728bccd3c4c', 2147483647, 'l-18 shyam park near nawda metro uttam nagar new delhi', ''),
(3, 'Maynak Kumar', 'mayank.shrivastva_cs21@gla.ac.in', 'df780a97b7d6a8f779f14728bccd3c4c', 2147483647, 'Saraswat Motors Station', '');

-- --------------------------------------------------------

--
-- Table structure for table `s1`
--

CREATE TABLE `s1` (
  `id` int(11) NOT NULL,
  `station` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `vnumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s1`
--

INSERT INTO `s1` (`id`, `station`, `name`, `email`, `owner_email`, `date`, `timeslot`, `vnumber`) VALUES
(2, 'Yahhvi Charging Station (Vrindavan)', 'ks', 'shrivastva.mayank27@gmail.com', 'aryan.singh_cs20@gla.ac.in', '2023-04-27', '16:00PM-17:00PM', 'asdfghjkl'),
(3, 'Saraswat Motors Station( Lohvan)', 'uf', 'shrivastva.mayank27@gmail.com', 'mayank.shrivastva_cs21@gla.ac.in', '2023-04-27', '11:00AM-12:00PM', 'fgfg'),
(4, 'Yahhvi Charging Station (Vrindavan)', 'Mayank kumar Shrivastva', 'shrivastva.mayank27@gmail.com', 'aryan.singh_cs20@gla.ac.in', '2023-04-28', '11:00AM-12:00PM', 'wertyuiop['),
(8, 'AARGO Charging Station (Kosi Kalan)', 'Mayank kumar Shrivastva', 'shrivastva.mayank27@gmail.com', 'Himanshudubey802@gmail.com', '2023-04-24', '10:00AM-11:00AM', 'fghj'),
(9, 'AARGO Charging Station (Kosi Kalan)', 'Mayank kumar Shrivastva', 'shrivastva.mayank27@gmail.com', 'Himanshudubey802@gmail.com', '2023-04-24', '11:00AM-12:00PM', '234567'),
(10, 'AARGO Charging Station (Kosi Kalan)', 'Mayank kumar Shrivastva', 'shrivastva.mayank27@gmail.com', 'Himanshudubey802@gmail.com', '2023-04-25', '23:00PM-00:00AM', 'bnm'),
(11, 'AARGO Charging Station (Kosi Kalan)', 'ks', 'mayank.shrivastva_cs21@gla.ac.in', 'Himanshudubey802@gmail.com', '2023-04-26', '11:00AM-12:00PM', 'DL4SD6987');

-- --------------------------------------------------------

--
-- Table structure for table `stationdetail`
--

CREATE TABLE `stationdetail` (
  `id` int(11) NOT NULL,
  `station-name` varchar(255) NOT NULL,
  `mobile-number` bigint(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stationdetail`
--

INSERT INTO `stationdetail` (`id`, `station-name`, `mobile-number`, `address`, `email`, `book`) VALUES
(1, 'AARGO Charging Station', 9315229435, 'Kosi Kalan', 'Himanshudubey802@gmail.com', 'station1/index.php'),
(2, 'Yahhvi Charging Station', 8126166896, 'Vrindavan', 'aryan.singh_cs20@gla.ac.in', 'station2/index.php'),
(3, 'Saraswat Motors Station\n', 9548628618, ' Lohvan', 'mayank.shrivastva_cs21@gla.ac.in', 'station3/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `code`) VALUES
(1, 'Mayank kumar Shrivastva', 'shrivastva.mayank27@gmail.com', 'df780a97b7d6a8f779f14728bccd3c4c', ''),
(2, 'ks', 'mayank.shrivastva_cs21@gla.ac.in', 'df780a97b7d6a8f779f14728bccd3c4c', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c1`
--
ALTER TABLE `c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1`
--
ALTER TABLE `s1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stationdetail`
--
ALTER TABLE `stationdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c1`
--
ALTER TABLE `c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cardetails`
--
ALTER TABLE `cardetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s1`
--
ALTER TABLE `s1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stationdetail`
--
ALTER TABLE `stationdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
