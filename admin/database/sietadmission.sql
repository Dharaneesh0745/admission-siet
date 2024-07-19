-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 07:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sietadmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiryform`
--

CREATE TABLE `enquiryform` (
  `StudentName` varchar(50) DEFAULT NULL,
  `StudentMobileNo` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `StudentEmailId` varchar(20) DEFAULT NULL,
  `EmisId` int(25) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `FatherName` varchar(50) DEFAULT NULL,
  `ParentsMobileNo` int(11) DEFAULT NULL,
  `FatherOccupation` varchar(20) DEFAULT NULL,
  `Nationality` varchar(20) DEFAULT NULL,
  `Religion` varchar(20) DEFAULT NULL,
  `Community` varchar(40) DEFAULT NULL,
  `District` varchar(20) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `Pincode` int(6) DEFAULT NULL,
  `Village` varchar(30) DEFAULT NULL,
  `ApproachedBy` varchar(50) DEFAULT NULL,
  `FacultyName` varchar(50) DEFAULT NULL,
  `RecommandedStudentName` varchar(50) DEFAULT NULL,
  `RecommandedStudentYear` varchar(10) DEFAULT NULL,
  `RecommandedStudentDepartment` varchar(50) DEFAULT NULL,
  `SeekingAdmission` varchar(50) DEFAULT NULL,
  `Board` varchar(20) DEFAULT NULL,
  `SchoolName10` varchar(50) DEFAULT NULL,
  `MediumOfInstruction10` varchar(10) DEFAULT NULL,
  `Mark10` int(4) DEFAULT NULL,
  `SchoolName12` varchar(50) DEFAULT NULL,
  `MediumOfInstruction12` varchar(10) DEFAULT NULL,
  `Group12` varchar(50) DEFAULT NULL,
  `MathsMark` int(4) DEFAULT NULL,
  `PhysicsMark` int(4) DEFAULT NULL,
  `ChemistryMark` int(4) DEFAULT NULL,
  `RegisterNo12` int(15) DEFAULT NULL,
  `Mark12` int(4) DEFAULT NULL,
  `Cutoff` float DEFAULT NULL,
  `NameOfInstituion` varchar(50) DEFAULT NULL,
  `NameOfDiplomaCourse` varchar(20) DEFAULT NULL,
  `PercentageDiploma` varchar(5) DEFAULT NULL,
  `NameOfTheCollege` varchar(50) DEFAULT NULL,
  `NameOfUGcourse` varchar(20) DEFAULT NULL,
  `CGPA` float DEFAULT NULL,
  `Sport` varchar(4) DEFAULT NULL,
  `SportName` varchar(20) DEFAULT NULL,
  `DeptChoice1` varchar(50) DEFAULT NULL,
  `DeptChoice2` varchar(50) DEFAULT NULL,
  `DeptChoice3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiryform`
--
ALTER TABLE `enquiryform`
  ADD PRIMARY KEY (`StudentMobileNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
