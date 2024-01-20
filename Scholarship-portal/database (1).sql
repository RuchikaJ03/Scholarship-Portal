-- phpMyAdmin SQL Dump
-- version 5.2.2-dev+20230323.56d19eb4aa
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 03:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Firstname`, `Lastname`, `username`, `password`, `email`, `pic`) VALUES
('x', 'y', 'xyz', '123', 'xyz@gmail.com', 'Screenshot (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(50) NOT NULL,
  `Internship` varchar(50) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Stipend` varchar(50) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `Internship`, `Duration`, `Stipend`, `Link`) VALUES
(1, 'Web Development Internship in Mumbai at Apex Group', '6 Months', 'Rs 3,000-7,000 /month', 'webdevelop.php'),
(2, 'Graphic Design part time job/internship at Mumbai ', '3 Months', 'Rs 7,000-15,000 /month', 'GraphicDesign.php'),
(3, 'Backend Development Internship in Pune, Mumbai at ', '6 Months', 'Rs 10,000-20,000 /month', 'Backenddevelop.php');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(100) NOT NULL,
  `Scholarship` varchar(100) NOT NULL,
  `EligibilityCriteria` varchar(100) NOT NULL,
  `Awards` varchar(100) NOT NULL,
  `Link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `Scholarship`, `EligibilityCriteria`, `Awards`, `Link`) VALUES
(1, 'Aditya Birla Capital COVID Scholarship Program', 'For Class 1 to 12', 'Upto INR 30000', 'Aditya-Birla.php'),
(2, 'HDFC Bank Parivartan’s ECS Scholarship 2022-23', '\r\nThe students must be currently studying in Classes 1 to 12 in a private,', 'For Class 1 to 6 - INR 15,000 | For Class 7 to 12 - INR 18,000', 'HDFC.php'),
(3, 'Keep India Smiling Foundational Scholarship & Mentorship Programme', 'Must have passed Class 10 board examination in 2022', 'INR 20,000 per annum for 2 years', 'Colgate.php'),
(4, 'SBI', '12th Pass', 'Upto INR 20000', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Lastname`, `username`, `password`, `DOB`, `email`, `Address`, `pic`) VALUES
(1, 'A', 'J', 'abc', '123', '2000-01-13', 'xyz@gmail.com', 'XYZ Mumbai', ''),
(2, 'x', 'y', 'xyz', '123', '2002-04-09', 'abc@gmail.com', '', 'p.jpg'),
(4, 'Nisha', 'Ade', 'Nisha', '123', '0000-00-00', 'xyz@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Scholarship` (`Scholarship`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
