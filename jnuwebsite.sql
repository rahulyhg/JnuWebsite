-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2015 at 10:51 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jnuwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `Id` int(11) NOT NULL,
  `TeacherId` int(11) NOT NULL,
  `DesignationId` int(11) NOT NULL,
  `Birography` text NOT NULL,
  `Message` text NOT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `basedata`
--

CREATE TABLE `basedata` (
  `Id` int(11) NOT NULL,
  `Value` varchar(255) NOT NULL,
  `GenericName` varchar(255) NOT NULL,
  `Category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basedata`
--

INSERT INTO `basedata` (`Id`, `Value`, `GenericName`, `Category`) VALUES
(1, 'admin', 'User Role', 1),
(2, 'teacher', 'User Role', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Id` int(11) NOT NULL,
  `Degree` varchar(255) NOT NULL,
  `DepartmentId` int(11) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Chairmen` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `Id` int(11) NOT NULL,
  `Value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `ImagePath` varchar(255) NOT NULL,
  `IsPublished` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DeanId` int(11) NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Id` int(11) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` text NOT NULL,
  `IsPublished` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(11) NOT NULL,
  `Value` varchar(100) NOT NULL,
  `ParentId` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_event`
--

CREATE TABLE `news_event` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Descripton` text,
  `ImagePath` varchar(255) NOT NULL,
  `Caption` text,
  `Date` date NOT NULL,
  `IsActive` bit(1) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `IsMarque` bit(1) NOT NULL,
  `IsPinned` bit(1) NOT NULL,
  `IsHighlighted` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `research_colla`
--

CREATE TABLE `research_colla` (
  `Id` int(11) NOT NULL,
  `UniversityName` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `LogoPath` varchar(255) NOT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DesignationId` int(11) NOT NULL,
  `DepartmentId` int(11) NOT NULL,
  `ImagePath` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `Title` varchar(255) NOT NULL,
  `GeneralInformation` text NOT NULL,
  `Resources` text NOT NULL,
  `ImagePath` varchar(255) NOT NULL,
  `Objective` text NOT NULL,
  `ViceChancelorId` int(11) NOT NULL,
  `VcSpeech` text NOT NULL,
  `Contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DesignationId` int(11) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `UserName`, `Password`, `FullName`, `Email`, `DesignationId`, `Contact`, `Role`) VALUES
(1, 'nishith', '123456', 'Imtiaz Zaman Nishith', 'nishith1416@gmail.com', 0, '01717423733', 1),
(2, 'nahid', '123456', 'Nafiul Alam Nahid', 'nahid@gmail.com', 0, '01713298185', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `basedata`
--
ALTER TABLE `basedata`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news_event`
--
ALTER TABLE `news_event`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `research_colla`
--
ALTER TABLE `research_colla`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `basedata`
--
ALTER TABLE `basedata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_event`
--
ALTER TABLE `news_event`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `research_colla`
--
ALTER TABLE `research_colla`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
