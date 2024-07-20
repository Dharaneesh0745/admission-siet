-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 08:49 AM
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
-- Table structure for table `umis`
--

CREATE TABLE `umis` (
  `EmisId` bigint(20) NOT NULL,
  `Salutation` varchar(10) NOT NULL,
  `StudName` varchar(50) NOT NULL,
  `StudDOB` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `BloodGroup` varchar(4) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Religion` varchar(50) NOT NULL,
  `Community` varchar(50) NOT NULL,
  `Caste` varchar(50) NOT NULL,
  `AadhaarNumber` bigint(20) NOT NULL,
  `FirstGraduate` varchar(4) NOT NULL,
  `SpecialAdmissionQuota` varchar(4) NOT NULL,
  `DifferentlyAbled` varchar(4) NOT NULL,
  `MobileNumber` bigint(20) NOT NULL,
  `P_Country` varchar(50) NOT NULL,
  `P_State` varchar(50) NOT NULL,
  `P_LocationType` varchar(10) NOT NULL,
  `P_District` varchar(50) NOT NULL,
  `P_Taluk` varchar(50) NOT NULL,
  `P_Village` varchar(50) NOT NULL,
  `P_Block` varchar(50) NOT NULL,
  `P_VillagePanchayat` varchar(50) NOT NULL,
  `P_PostalAddress` varchar(250) NOT NULL,
  `C_Country` varchar(50) NOT NULL,
  `C_State` varchar(50) NOT NULL,
  `C_LocationType` varchar(10) NOT NULL,
  `C_District` varchar(50) NOT NULL,
  `C_Taluk` varchar(50) NOT NULL,
  `C_Village` varchar(50) NOT NULL,
  `C_Block` varchar(50) NOT NULL,
  `C_VillagePanchayat` varchar(50) NOT NULL,
  `C_PostalAddress` varchar(250) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `FatherOccupation` varchar(75) NOT NULL,
  `MotherName` varchar(50) NOT NULL,
  `MotherOccupation` varchar(75) NOT NULL,
  `GuardianName` varchar(50) NOT NULL,
  `Orphan` varchar(5) NOT NULL,
  `AnnualFamilyIncome` int(11) NOT NULL,
  `ParentMobileNumber` bigint(20) NOT NULL,
  `AccountNumber` bigint(20) NOT NULL,
  `IfscCode` varchar(50) NOT NULL,
  `BankName` varchar(75) NOT NULL,
  `BankBranch` varchar(75) NOT NULL,
  `City` varchar(75) NOT NULL,
  `AcademicYearJoining` varchar(75) NOT NULL,
  `StreamType` varchar(15) NOT NULL,
  `CourseType` varchar(50) NOT NULL,
  `Course` varchar(75) NOT NULL,
  `Branch` varchar(75) NOT NULL,
  `ModeOfStudy` int(15) NOT NULL,
  `DateOfAdmission` date NOT NULL,
  `TypeOfAdmission` varchar(20) NOT NULL,
  `RegistrationNumber` bigint(20) NOT NULL,
  `LateralEntry` varchar(5) NOT NULL,
  `Hosteller` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `umis`
--
ALTER TABLE `umis`
  ADD PRIMARY KEY (`MobileNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
