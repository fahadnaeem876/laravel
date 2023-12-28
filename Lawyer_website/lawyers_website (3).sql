-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 08:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyers_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(2, 'asad', 'asad1234@gmail.com', '123'),
(4, 'Fahad', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `lawyer_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` int(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `lawyer_email` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`lawyer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `lawyer_name`, `lawyer_email`, `request`, `massage`) VALUES
(6, 'fahad Shah', 'fahad@gmail.com', 2147483647, 'L209 sector 5A2 north Karachi', '03151018419', 'zahid@gmail.com', '', 'zahid'),
(11, 'fahad Shah', 'fahad@gmail.com', 2147483647, 'L209 sector 5A2 north Karachi', 'lawyer', 'lawyer1@gmail.com', 'REJECT', 'request'),
(12, 'fahad Shah', 'fahad@gmail.com', 2147483647, 'L209 sector 5A2 north Karachi', 'Sharukh', 'lawyer3@gmail.com', 'ACCEPT', 'request'),
(13, 'fahad Shah', 'fahad@gmail.com', 2147483647, 'L209 sector 5A2 north Karachi', 'Talha', 'lawyer2@gmail.com', '', 'please'),
(19, 'Saad', 'customer@gmail.com', 2147483647, 'New North Karachi', 'Sharukh', 'lawyer3@gmail.com', 'REJECT', 'please');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_address`, `customer_phone`, `customer_img`) VALUES
(35, 'fahad Shah', 'fahad@gmail.com', '123', 'L209 sector 5A2 north Karachi h', '03151018419', 'upload/2520.jpg'),
(37, 'Saad', 'customer@gmail.com', '123', 'New North Karachi', '031510184193', 'upload/1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `lawyer_id` int(11) NOT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `lawyer_email` varchar(255) NOT NULL,
  `lawyer_password` varchar(255) NOT NULL,
  `lawyer_address` varchar(255) NOT NULL,
  `lawyer_phone` int(255) NOT NULL,
  `lawyer_experties` varchar(255) NOT NULL,
  `lawyer_qualification` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `lawyer_img` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`lawyer_id`, `lawyer_name`, `lawyer_email`, `lawyer_password`, `lawyer_address`, `lawyer_phone`, `lawyer_experties`, `lawyer_qualification`, `gender`, `lawyer_img`, `services`, `detail`) VALUES
(12, 'lawyer 6', 'lawyer6@gmail.com', '123', 'L209 sector 5A2 north Karachi', 2147483647, 'Criminal', 'Master', 'Male', 'upload/1.jpeg', 'Taxation Department Heads', 'The overseas education and immigration services division of Mumtaz & Associates was started by Mr Bilal Zahoor, a respected figure in the academic circles, who has more than 8 years experience at the senior management level in education and carrier counseling companies.'),
(13, 'Fawad Hussain', 'lawyer1@gmail.com', '123', 'North karachi', 2147483647, 'Properties', 'Master', 'Male', 'upload/images.jpeg', 'Taxation Department Head', 'Law firms generally practice in all areas of law and are often seen advising clients on large cross-border business transactions and engaging in complex litigation. Our lawyers are expert advocates. engaging in complex litigation. Our lawyers  in all areas of law.'),
(14, ' Roshan Zamir', 'lawyer2@gmail.com', '123', 'L209 sector 5A2 north Karachi', 2147483647, 'Robberies', 'Master', 'Male', 'upload/348s.jpg', 'Taxation Department Head', 'Law founded in 1990 as a tax and legal advisor and is headed by Mr Roshan Zameer Attorney-Law, which continues to this day, and the company is made up of well-known barristers, lawyers and high courts. Mr Roshan Zameer Attorney-Law, which continues to this day.'),
(15, 'Nawaz Osmani', 'lawyer3@gmail.com', '123', ' 7th Floor, Office Towers', 2147483647, 'Affi Davit', 'Master', 'Male', 'upload/images (1).jpeg', 'Taxation Department Head', 'A. Nawaz Osmani Law Associates is a Best Legal Services provider and leading Law Firm / Lawyers in Karachi, Pakistan having legal facilities across Pakistan with supported Global friends presence');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `lawyer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
