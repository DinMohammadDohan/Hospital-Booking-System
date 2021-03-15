-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2021 at 08:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `pid` int(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `phoneno` int(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `appdate` int(50) NOT NULL,
  `appt` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`pid`, `name`, `email`, `gender`, `age`, `phoneno`, `dept`, `appdate`, `appt`) VALUES
(1, 'Jannat', '17-34717-2@student.aiub.edu', 'Female', 21, 5, 'Cardiologist', 2021, 8),
(87, 'Jannat', '17-34717-2@student.aiub.edu', 'Female', 21, 9, 'Eye Specialist', 2021, 2),
(999, 'Jannat', '17-34717-2@student.aiub.edu', 'Female', 21, 99, 'Cardiologist', 2021, 44);

-- --------------------------------------------------------

--
-- Table structure for table `doctorreg`
--

CREATE TABLE `doctorreg` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorreg`
--

INSERT INTO `doctorreg` (`id`, `fname`, `lname`, `email`, `username`, `password`, `cpassword`, `gender`, `DOB`) VALUES
(2, 'Shuvro', 'Mamun', 'dinmdohan813@gmail.com', 'shuvro13', '12345', '12345', 'male', '2021-01-14'),
(3, 'Mahmudul', 'Hasan', '17-34465-2@student.aiub.edu', 'asd1', '123456', '123456', 'male', '2021-01-13'),
(50, 'Din Mohammad', 'Dohan', '17-34465-2@student.aiub.edu', 'dohan1', '123456', '123456', 'Male', '2021-01-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `doctorreg`
--
ALTER TABLE `doctorreg`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
