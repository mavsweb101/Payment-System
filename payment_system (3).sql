-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 09:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `leve` int(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`leve`, `password`, `username`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id_viewCLASS` int(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `registration` varchar(255) NOT NULL,
  `tuition` varchar(255) NOT NULL,
  `laboratory` varchar(255) NOT NULL,
  `library` varchar(255) NOT NULL,
  `entrance` varchar(255) NOT NULL,
  `counceling` varchar(255) NOT NULL,
  `falp` varchar(255) NOT NULL,
  `med_dental` varchar(255) NOT NULL,
  `univsbo` varchar(255) NOT NULL,
  `univorgan` varchar(255) NOT NULL,
  `journal` varchar(255) NOT NULL,
  `fine` varchar(255) NOT NULL,
  `athletics` varchar(255) NOT NULL,
  `pe` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `nstp` varchar(255) NOT NULL,
  `sociocultural` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id_viewCLASS`, `course`, `year`, `registration`, `tuition`, `laboratory`, `library`, `entrance`, `counceling`, `falp`, `med_dental`, `univsbo`, `univorgan`, `journal`, `fine`, `athletics`, `pe`, `id`, `nstp`, `sociocultural`, `total`) VALUES
(1, 'BSA', '1st Year', '1', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '49'),
(11, 'BSIT', '1st Year', '1', '1', '1', '1', '2', '1', '2', '1', '2', '12', '12', '21', '12', '12', '12', '12', '2', '107'),
(12, 'BSE', '1st Year', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '23'),
(13, 'BSIT', '2nd Year', '1', '55', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '131');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classname`
--

CREATE TABLE `tbl_classname` (
  `id` int(155) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_classname`
--

INSERT INTO `tbl_classname` (`id`, `course`, `year`) VALUES
(1, 'BSIT', 'BSIT'),
(2, 'BSIT', 'BSIT'),
(3, 'BSIT', 'BSIT'),
(4, 'BSIT', 'BSIT'),
(5, 'BSIT', 'BSIT'),
(6, 'BSIT', 'BSIT'),
(7, 'BSA', '1st Year'),
(8, 'BSE', '1st Year'),
(9, 'BSE', '2nd Year'),
(10, 'BSE', '2nd Year'),
(11, 'BEE', '1st Year');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regularstudentinfo`
--

CREATE TABLE `tbl_regularstudentinfo` (
  `id_reg` int(255) NOT NULL,
  `reg_classification` varchar(255) NOT NULL,
  `school_year` varchar(255) NOT NULL,
  `semmester` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_regularstudentinfo`
--

INSERT INTO `tbl_regularstudentinfo` (`id_reg`, `reg_classification`, `school_year`, `semmester`, `course`, `major`, `fname`, `gname`, `mname`) VALUES
(2, 'First Year', '4`', 'Second', 'fwe', 'jhh', 'hjh', 'hjh', 'hjh'),
(1, 'First Year', '2019', 'Second', 'BSE', 'ENGLISH', 'AGUSTIN', 'JEANWEL', 'Pasc'),
(1, 'First Year', '2019', 'Second', 'BSE', 'ENGLISH', 'AGUSTIN', 'JEANWEL', 'Pasc'),
(3, 'First Year', '2018', 'Second', 'BSA', 'Crop Scie', 'Pascual', 'Marvin', 'Pascual'),
(4, 'Second Year', '2', 'First', 'BSIT', 'lkkhjh', 'jhjhj', 'h', 'jhj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regularstudentsubject`
--

CREATE TABLE `tbl_regularstudentsubject` (
  `id_subUnit` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`leve`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_viewCLASS`);

--
-- Indexes for table `tbl_classname`
--
ALTER TABLE `tbl_classname`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `leve` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id_viewCLASS` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_classname`
--
ALTER TABLE `tbl_classname`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
