-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 05:45 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trms`
--

-- --------------------------------------------------------

--
-- Table structure for table `newstudent`
--

CREATE TABLE `newstudent` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `oldschool` varchar(200) NOT NULL,
  `grade` varchar(300) NOT NULL,
  `chra` varchar(300) NOT NULL,
  `num` varchar(300) NOT NULL,
  `birth` varchar(300) NOT NULL,
  `cinc` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newstudent`
--

INSERT INTO `newstudent` (`id`, `name`, `fname`, `oldschool`, `grade`, `chra`, `num`, `birth`, `cinc`, `address`) VALUES
(1, 'fdgg', 'gdfgsg', 'fgdg', 'fsgf', 'gfdsfgg', 'gdfdsfg', 'gsdfgsdfgd', 'fdgdfg', 'gsdfgsdf'),
(2, 'amir khan', 'amir khan', 'preal', 'bs computer', 'bad', ' 035464783', '12/23/1999', '12/23/1999', 'chokra '),
(3, 'MUHAMMAD SHAYAN', 'Shayan', 'jdsfjsdfkj', '10', 'dsfhasjf', ' 3873475698', '2022-08-02', '345556', 'DARAKI BANDA'),
(5, 'fdgg', 'gdfgsg', 'fgdg', 'fsgf', 'gfdsfgg', '3873475698', '2022-08-01', 'fdgdfg', 'gsdfgsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Amin', 'admin', 3329134564, 'shayan@gmail.com ', '21232f297a57a5a743894a0e4a801fc3', '2019-10-04 06:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblquery`
--

CREATE TABLE `tblquery` (
  `id` int(11) NOT NULL,
  `teacherId` int(11) DEFAULT NULL,
  `fName` varchar(200) DEFAULT NULL,
  `emailId` varchar(200) DEFAULT NULL,
  `mobileNumber` bigint(10) DEFAULT NULL,
  `Query` mediumtext,
  `queryDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `teacherNote` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblquery`
--

INSERT INTO `tblquery` (`id`, `teacherId`, `fName`, `emailId`, `mobileNumber`, `Query`, `queryDate`, `teacherNote`) VALUES
(2, 1, 'Amit Kumar', 'amitk43@gmail.com', 1122336655, 'This is for testing purpose. Test Query', '2022-03-12 10:03:49', 'This is for testing. Test notes'),
(3, 2, 'shayan khattak', 'shayan111khattak@gmail.com', 1234567890, 'sir we need notes', '2022-08-03 11:08:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `ID` int(10) NOT NULL,
  `Subject` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`ID`, `Subject`, `CreationDate`) VALUES
(2, 'Physics', '2019-10-07 06:11:19'),
(3, 'Chemistry', '2019-10-07 06:11:32'),
(4, 'Biology', '2019-10-07 06:11:41'),
(5, 'Hindi', '2019-10-07 06:11:49'),
(6, 'English', '2019-10-07 06:11:56'),
(7, 'Science', '2019-10-07 06:12:06'),
(8, 'Social Science', '2019-10-07 06:12:19'),
(9, 'Accounts', '2019-10-07 06:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Picture` varchar(200) NOT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Qualifications` varchar(120) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `TeacherSub` varchar(120) DEFAULT NULL,
  `description` mediumtext,
  `teachingExp` varchar(10) DEFAULT NULL,
  `JoiningDate` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isPublic` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`ID`, `Name`, `Picture`, `Email`, `MobileNumber`, `password`, `Qualifications`, `Address`, `TeacherSub`, `description`, `teachingExp`, `JoiningDate`, `RegDate`, `isPublic`) VALUES
(1, 'Noshad khan', '171bb7da1ad6f5b744af8e1693225e661647076737.png', 'noshad@gmail.com', 1234567890, '9e95f6d797987b7da0fb293a760fe57e', 'B.Tech, M.tech', 'karak city', 'Chemistry', 'NA', '5', '2022-01-04', '2022-03-05 12:41:37', 0),
(2, 'B bilal', 'ab3573aee1c828e56e86941316af36171659504635.jpg', 'bilal@Gmail.com', 1425369874, 'f925916e2754e5e03f75dd58a5733251', 'BSC, MSC', 'Metha khel karak', 'Science', 'NA', '10', '2018-01-03', '2022-03-12 08:02:21', 1),
(3, 'Shayan', 'a36301517b535f02f70f8877f46a7c5e1659503814.jpg', 'shayan@gmail.com', 332913456, '1234', 'bs in computer science', 'ghundi mir khan khel karak', 'Operating System (OS)', 'i am the expert of the computer science', '3', '2022-08-19', '2022-08-03 05:14:39', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newstudent`
--
ALTER TABLE `newstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblquery`
--
ALTER TABLE `tblquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newstudent`
--
ALTER TABLE `newstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblquery`
--
ALTER TABLE `tblquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
