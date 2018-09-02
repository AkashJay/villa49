-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2017 at 08:05 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_Id` int(11) NOT NULL,
  `A_Name` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `E_mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_Id`, `A_Name`, `Password`, `Contact_No`, `E_mail`) VALUES
(1, 'Udaya', '123', '0777555463', 'smusuwe@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `bookdate` date NOT NULL,
  `leavedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `name`, `contact_no`, `email`, `bookdate`, `leavedate`) VALUES
(11, 'akask', '0772472635', 'akash@gmail.com', '2016-12-23', '2016-12-21'),
(12, 'sandul', '0772499304', 'sadhul.deelaka@gmail.com', '2016-12-08', '2016-12-09'),
(13, 'sandul', '0772499304', 'sadhul.deelaka@gmail.com', '2016-12-08', '2016-12-09'),
(14, 'sandul', '0772499304', 'sadhul.deelaka@gmail.com', '2016-12-08', '2016-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `image`, `type`, `description`, `price`, `book`) VALUES
('1', 'images/s.jpg', 'Full House', 'There are three clean and comfortable bedrooms (standard/deluxe/twin) with A/C or non A/C. You can be comfort with our bed sheets and towels. Full equipped kitchen.', 500000, 0),
('2', 'images/ga2.jpg', 'Standard Room', 'A/C or none A/C clean room with a queen size bed and attached bathroom. We are facilitating you with room services.Full equipped kitchen', 2500, 0),
('3', 'images/ga7.jpg', 'Deluxe Room', 'A/C or none A/C clean room with a king size bed and attached bathroom. We are facilitating you with room services.Full equipped kitchen', 1100, 0),
('4', 'images/ga5.jpg', 'Twin Room', 'A/C or none A/C clean room with two separated beds and attached bathroom. We are facilitating you with room services.Full equipped kitchen', 1500, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_Id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
