-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 08:49 AM
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
-- Database: `sietadmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserName` varchar(20) DEFAULT NULL,
  `UserEmailId` varchar(30) NOT NULL,
  `UserPassword` varchar(20) NOT NULL,
  `UserCorrectPassword` varchar(20) NOT NULL,
  `UserType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserName`, `UserEmailId`, `UserPassword`, `UserCorrectPassword`, `UserType`) VALUES
('qqw', 'cb=e@gmail.com', '11', '', 'admin'),
('qqw', 'cbe@gmail.com', '11', '', 'admin'),
('Dhi', 'codesynth.ai@gmail.com', '11', '', ''),
('dharaneesh', 'dharaneesh0745@gmail.com', '11', '', 'admin'),
('Dhoni', 'dhoni@gmail.com', '12345678', '', ''),
('rr', 'dni@gmail.com', '11', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `enquiryform2`
--

CREATE TABLE `enquiryform2` (
  `id` int(255) NOT NULL,
  `StudentName` varchar(50) DEFAULT NULL,
  `StudentMobileNo` bigint(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `StudentEmailId` varchar(25) DEFAULT NULL,
  `EmisId` bigint(25) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `FatherName` varchar(50) DEFAULT NULL,
  `ParentsMobileNo` bigint(11) DEFAULT NULL,
  `FatherOccupation` varchar(50) DEFAULT NULL,
  `Nationality` varchar(50) DEFAULT NULL,
  `Religion` varchar(50) DEFAULT NULL,
  `Community` varchar(10) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `Pincode` int(7) DEFAULT NULL,
  `Village` varchar(50) DEFAULT NULL,
  `ApproachedBy` varchar(50) DEFAULT NULL,
  `FacultyName` varchar(50) DEFAULT NULL,
  `RecommendedStudentName` varchar(50) DEFAULT NULL,
  `RecommendedStudentYear` varchar(20) DEFAULT NULL,
  `RecommendedStudentDepartment` varchar(50) DEFAULT NULL,
  `SeekingAdmission` varchar(50) DEFAULT NULL,
  `BoardUG` varchar(50) DEFAULT NULL,
  `BoardPG` varchar(50) DEFAULT NULL,
  `BoardLE` varchar(50) DEFAULT NULL,
  `SchoolName10UG` varchar(50) DEFAULT NULL,
  `SchoolName10PG` varchar(50) DEFAULT NULL,
  `SchoolName10LE` varchar(50) DEFAULT NULL,
  `SchoolName12UG` varchar(50) DEFAULT NULL,
  `SchoolName12PG` varchar(50) DEFAULT NULL,
  `SchoolName12LE` varchar(50) DEFAULT NULL,
  `TotalMark10UG` int(4) DEFAULT NULL,
  `TotalMark10PG` int(4) DEFAULT NULL,
  `TotalMark10LE` int(4) DEFAULT NULL,
  `TotalMark12UG` int(4) DEFAULT NULL,
  `TotalMark12PG` int(4) DEFAULT NULL,
  `TotalMark12LE` int(4) DEFAULT NULL,
  `MediumOfInstruction10UG` varchar(50) DEFAULT NULL,
  `MediumOfInstruction10PG` varchar(50) DEFAULT NULL,
  `MediumOfInstruction10LE` varchar(50) DEFAULT NULL,
  `MediumOfInstruction12UG` varchar(50) DEFAULT NULL,
  `MediumOfInstruction12PG` varchar(50) DEFAULT NULL,
  `MediumOfInstruction12LE` varchar(50) DEFAULT NULL,
  `Group12UG` varchar(50) DEFAULT NULL,
  `Group12PG` varchar(50) DEFAULT NULL,
  `Group12LE` varchar(50) DEFAULT NULL,
  `NameOfInstitution` varchar(50) DEFAULT NULL,
  `DeptChoice1UG` varchar(50) DEFAULT NULL,
  `DeptChoice1PG` varchar(50) DEFAULT NULL,
  `DeptChoice1LE` varchar(50) DEFAULT NULL,
  `DeptChoice2PG` varchar(50) DEFAULT NULL,
  `DeptChoice2UG` varchar(50) DEFAULT NULL,
  `DeptChoice2LE` varchar(50) DEFAULT NULL,
  `DeptChoice3UG` varchar(50) DEFAULT NULL,
  `DeptChoice3PG` varchar(50) DEFAULT NULL,
  `DeptChoice3LE` varchar(50) DEFAULT NULL,
  `PhysicsMark` int(4) DEFAULT NULL,
  `ChemistryMark` int(4) DEFAULT NULL,
  `MathsMark` int(4) DEFAULT NULL,
  `CutOff` float DEFAULT NULL,
  `RegisterNo12` int(15) DEFAULT NULL,
  `CGPA` float DEFAULT NULL,
  `NameOfUGcourse` varchar(20) DEFAULT NULL,
  `NameOfDiplomaCourse` varchar(50) DEFAULT NULL,
  `PercentageDiploma` varchar(5) DEFAULT NULL,
  `NameOfTheCollege` varchar(50) DEFAULT NULL,
  `Sport` varchar(20) DEFAULT NULL,
  `SportName` varchar(20) DEFAULT NULL,
  `SportLevel` varchar(20) DEFAULT NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserEmailId`);

--
-- Indexes for table `enquiryform2`
--
ALTER TABLE `enquiryform2`
  ADD PRIMARY KEY (`StudentMobileNo`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiryform2`
--
ALTER TABLE `enquiryform2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
