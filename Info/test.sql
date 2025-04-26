-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 04:21 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `Sr` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `admissionNumber` int(50) NOT NULL,
  `studentId` int(50) NOT NULL,
  `semester` int(50) NOT NULL,
  `year` int(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pinCode` int(50) NOT NULL,
  `photoUpload` text NOT NULL,
  `aadharCard` text NOT NULL,
  `panCard` text NOT NULL,
  `markSheet` text NOT NULL,
  `document` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`Sr`, `firstName`, `lastName`, `admissionNumber`, `studentId`, `semester`, `year`, `gender`, `age`, `dob`, `phone`, `email`, `address`, `city`, `state`, `pinCode`, `photoUpload`, `aadharCard`, `panCard`, `markSheet`, `document`) VALUES
(1, 'Kareena', 'd', 2147483647, 2147483647, 5, 2025, 'Female', 20, '2005-06-26', 2147483647, 'ka@gmail.com', 'B-147,J.J colony\r\nSector 16, Noida, Uttar pardesh, Gautam Buddha Nagar', 'Noida', 'Uttar Pradesh', 201301, 'DAte sheet 6sem.pdf', 'BCA 6SEm.pdf', 'BAJMC 4th.pdf', 'BAJMC 4th.pdf', 'BAJMC 4th.pdf'),
(2, 'Kareena', 'd', 2147483647, 2147483647, 5, 2025, 'Female', 20, '2005-06-26', 2147483647, 'ka@gmail.com', 'B-147,J.J colony\r\nSector 16, Noida, Uttar pardesh, Gautam Buddha Nagar', 'Noida', 'Uttar Pradesh', 201301, 'DAte sheet 6sem.pdf', 'BCA 6SEm.pdf', 'BAJMC 4th.pdf', 'BAJMC 4th.pdf', 'BAJMC 4th.pdf'),
(3, 'hussain', 'alam', 53220456, 2147483647, 5, 2024, 'Male', 23, '2002-02-26', 2147483647, 'hussain@gmail.com', 'B-147,J.J colony\r\nSector 16, Noida, Uttar pardesh, Gautam Buddha Nagar', 'Noida', 'Uttar Pradesh', 201301, 'pattern.jpg', 'file_1738219528_4024_ECOMMERCESALLYABUS.docx', 'BCA 6SEm.pdf', 'Karina 1st resume.pdf', 'Bill.docx'),
(4, 'hussain', 'alam', 53220456, 2147483647, 5, 2024, 'Male', 23, '2002-02-26', 2147483647, 'hussain@gmail.com', 'B-147,J.J colony\r\nSector 16, Noida, Uttar pardesh, Gautam Buddha Nagar', 'Noida', 'Uttar Pradesh', 201301, 'pattern.jpg', 'file_1738219528_4024_ECOMMERCESALLYABUS.docx', 'BCA 6SEm.pdf', 'Karina 1st resume.pdf', 'Bill.docx'),
(5, 'hussain', 'alam', 53220456, 2147483647, 5, 2024, 'Male', 23, '2002-02-26', 2147483647, 'hussain@gmail.com', 'B-147,J.J colony\r\nSector 16, Noida, Uttar pardesh, Gautam Buddha Nagar', 'Noida', 'Uttar Pradesh', 201301, 'pattern.jpg', 'file_1738219528_4024_ECOMMERCESALLYABUS.docx', 'BCA 6SEm.pdf', 'Karina 1st resume.pdf', 'Bill.docx'),
(6, 'hussain', 'alam', 53220456, 2147483647, 5, 2024, 'Male', 23, '2002-02-26', 2147483647, 'hussain@gmail.com', 'B-147,J.J colony\r\nSector 16, Noida, Uttar pardesh, Gautam Buddha Nagar', 'Noida', 'Uttar Pradesh', 201301, 'pattern.jpg', 'file_1738219528_4024_ECOMMERCESALLYABUS.docx', 'BCA 6SEm.pdf', 'Karina 1st resume.pdf', 'Bill.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
