-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 06:06 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kakang`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ACCOUNT_ID` int(10) NOT NULL,
  `USER_TYPE` varchar(10) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `EMAILADDRESS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ACCOUNT_ID`, `USER_TYPE`, `USERNAME`, `PASSWORD`, `EMAILADDRESS`) VALUES
(1, 'ADMIN', 'afaf', 'afafa', 'afafa@gmail.com'),
(2, 'ADMIN', 'lebronjames', '23', 'lebron@gmail.com'),
(3, 'ADMIN', 'maria14', '14', 'maria@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `EVALUATION_ID` int(10) NOT NULL,
  `EVALUATION_TOOL_ID` int(10) NOT NULL,
  `SCALE_ID` int(10) NOT NULL,
  `RATING` int(20) NOT NULL,
  `OTHER_COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_tool`
--

CREATE TABLE `evaluation_tool` (
  `EVALUATION_TOOL_ID` int(10) NOT NULL,
  `EVALUATION_TYPE` int(5) NOT NULL,
  `CHARACTERISTIC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_tool`
--

INSERT INTO `evaluation_tool` (`EVALUATION_TOOL_ID`, `EVALUATION_TYPE`, `CHARACTERISTIC`) VALUES
(1, 1, 'Knows the nature of his/her assigned job and related duties'),
(2, 1, 'Has adequate knowledge and understanding in all phases of his/her job.'),
(3, 1, 'Plans and organizes his/her job well.'),
(4, 1, 'Has accurate orderly and neat output.'),
(5, 1, 'Accomplishes more than the amount of work required.'),
(6, 1, 'Is creative in approaching tasks and problems.'),
(7, 1, 'Is prudent in handling information.'),
(8, 2, 'Shows interest in the conduct of office activities'),
(9, 2, 'Is hardworking and industrious.'),
(10, 2, 'Is diligent in the performance of his/her task.'),
(11, 2, 'Establishes and maintains harmonious relationships with co-workers.'),
(12, 2, 'Has self-confindence.'),
(13, 2, 'Generally respectful and accommodating towards clients.'),
(14, 2, 'Is highly dependable.'),
(15, 2, 'Reports to office on time.'),
(16, 2, 'Follow school policies.');

-- --------------------------------------------------------

--
-- Table structure for table `scale`
--

CREATE TABLE `scale` (
  `SCALE_ID` int(10) NOT NULL,
  `SCALE_DESC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scale`
--

INSERT INTO `scale` (`SCALE_ID`, `SCALE_DESC`) VALUES
(1, 'Poor'),
(2, 'Below Satisfactory'),
(3, 'Satisfactory'),
(4, 'Very Satisfactory'),
(5, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `wolar_application`
--

CREATE TABLE `wolar_application` (
  `WOLAR_ID` int(10) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `NICKNAME` varchar(20) NOT NULL,
  `CIVILSTATUS` varchar(10) NOT NULL,
  `GENDER` text NOT NULL,
  `AGE` int(10) NOT NULL,
  `TRIBE` varchar(10) NOT NULL,
  `RELIGION` varchar(15) NOT NULL,
  `DATE_OF_BIRTH` text NOT NULL,
  `PLACE_OF_BIRTH` varchar(30) NOT NULL,
  `HIGH_SCHOOL` varchar(30) NOT NULL,
  `YEAR_GRADUATED_HIGH_SCHOOL` int(5) NOT NULL,
  `HIGH_SCHOOL_GRADE` int(10) NOT NULL,
  `HONORS_AWARD_RECEIVED` varchar(15) NOT NULL,
  `NCAE_GRADE` int(11) NOT NULL,
  `COLLEGE_UNIVERSITY_LAST_ATTENDED` varchar(20) NOT NULL,
  `TERM_YEAR_LAST_ATTENDED` varchar(20) NOT NULL,
  `COURSE_MAJOR` varchar(20) NOT NULL,
  `YEAR_LEVEL` varchar(15) NOT NULL,
  `WAG_TOTAL_UNITS_EARNED` int(11) NOT NULL,
  `CURRENT_ADDRESS` varchar(50) NOT NULL,
  `PROVINCIAL_ADDRESS` varchar(50) NOT NULL,
  `PHONENUMBER` text NOT NULL,
  `MOBILENUMBER` text NOT NULL,
  `EMAILADDRESS` text NOT NULL,
  `FINANCIAL_SUPPORT_NAME1` varchar(30) NOT NULL,
  `RELATION1` varchar(10) NOT NULL,
  `MONTHLY_SUPPORT1` int(10) NOT NULL,
  `FINANCIAL_SUPPORT_NAME2` varchar(30) NOT NULL,
  `RELATION2` varchar(10) NOT NULL,
  `MONTHLY_SUPPORT2` int(5) NOT NULL,
  `FINANCIAL_SUPPORT_NAME3` varchar(30) NOT NULL,
  `RELATION3` varchar(10) NOT NULL,
  `MONTHLY_SUPPORT3` int(5) NOT NULL,
  `WORK_EXPERIENCE` text NOT NULL,
  `FATHER` varchar(50) NOT NULL,
  `FATHER_OCCUPATION` varchar(40) NOT NULL,
  `FATHER_CONTACT_NUMBER` text NOT NULL,
  `MOTHER` varchar(50) NOT NULL,
  `MOTHER_OCCUPATION` varchar(40) NOT NULL,
  `MOTHER_CONTACT_NUMBER` text NOT NULL,
  `GUARDIAN` varchar(50) NOT NULL,
  `GUARDIAN_OCCUPATION` varchar(40) NOT NULL,
  `GUARDIAN_CONTACT_NUMBER` text NOT NULL,
  `LIVING_WITH_PARENTS` varchar(5) NOT NULL,
  `WORKING_WITH_GUARDIAN` varchar(5) NOT NULL,
  `NUMBER_OF_SIBLINGS` int(2) NOT NULL,
  `ALL_SIBLINGS_LIVING` varchar(5) NOT NULL,
  `NAME_OF_SIBLINGS` text NOT NULL,
  `SIBLINGS_AGE` text NOT NULL,
  `GRADE_YEAR_OCCUPATION` text NOT NULL,
  `REF_NAME1` varchar(30) NOT NULL,
  `REF_OCCUPATION1` varchar(20) NOT NULL,
  `REF_CONTACT_NUMBER1` text NOT NULL,
  `REF_NAME2` varchar(30) NOT NULL,
  `REF_OCCUPATION2` varchar(20) NOT NULL,
  `REF_CONTACT_NUMBER2` text NOT NULL,
  `REF_NAME3` varchar(30) NOT NULL,
  `REF_OCCUPATION3` varchar(20) NOT NULL,
  `REF_CONTACT_NUMBER3` text NOT NULL,
  `HEAR` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wolar_application`
--

INSERT INTO `wolar_application` (`WOLAR_ID`, `NAME`, `NICKNAME`, `CIVILSTATUS`, `GENDER`, `AGE`, `TRIBE`, `RELIGION`, `DATE_OF_BIRTH`, `PLACE_OF_BIRTH`, `HIGH_SCHOOL`, `YEAR_GRADUATED_HIGH_SCHOOL`, `HIGH_SCHOOL_GRADE`, `HONORS_AWARD_RECEIVED`, `NCAE_GRADE`, `COLLEGE_UNIVERSITY_LAST_ATTENDED`, `TERM_YEAR_LAST_ATTENDED`, `COURSE_MAJOR`, `YEAR_LEVEL`, `WAG_TOTAL_UNITS_EARNED`, `CURRENT_ADDRESS`, `PROVINCIAL_ADDRESS`, `PHONENUMBER`, `MOBILENUMBER`, `EMAILADDRESS`, `FINANCIAL_SUPPORT_NAME1`, `RELATION1`, `MONTHLY_SUPPORT1`, `FINANCIAL_SUPPORT_NAME2`, `RELATION2`, `MONTHLY_SUPPORT2`, `FINANCIAL_SUPPORT_NAME3`, `RELATION3`, `MONTHLY_SUPPORT3`, `WORK_EXPERIENCE`, `FATHER`, `FATHER_OCCUPATION`, `FATHER_CONTACT_NUMBER`, `MOTHER`, `MOTHER_OCCUPATION`, `MOTHER_CONTACT_NUMBER`, `GUARDIAN`, `GUARDIAN_OCCUPATION`, `GUARDIAN_CONTACT_NUMBER`, `LIVING_WITH_PARENTS`, `WORKING_WITH_GUARDIAN`, `NUMBER_OF_SIBLINGS`, `ALL_SIBLINGS_LIVING`, `NAME_OF_SIBLINGS`, `SIBLINGS_AGE`, `GRADE_YEAR_OCCUPATION`, `REF_NAME1`, `REF_OCCUPATION1`, `REF_CONTACT_NUMBER1`, `REF_NAME2`, `REF_OCCUPATION2`, `REF_CONTACT_NUMBER2`, `REF_NAME3`, `REF_OCCUPATION3`, `REF_CONTACT_NUMBER3`, `HEAR`) VALUES
(9, 'KAKANG GAYAPAN GUICHAPIN', 'KAKANG', 'Married', 'Male', 23, 'ILONGGO', 'ROMAN CATHOLIC', '2018-11-23', 'COTABATO CITY', 'NOTRE OF COTABATO CITY', 2018, 90, 'WITH HONOR', 88, '', '', '', '', 0, 'COTABATO CITY', 'COTABATO CITY', 'COTABATO CITY', '12345678909', 'KAKANG@GMAIL.COM', 'SAMPLE', 'SAMPLE', 20000, 'SAMPLE', 'SAMPLE', 20000, 'SAMPLE', 'SAMPLE', 20000, 'WER NA U', 'SAMPLE', 'SAMPLE', '12345678909', 'SAMPLE', 'SAMPLE', '12345678909', 'SAMPLE', 'SAMPLE', '12345678909', 'Yes', 'Yes', 2, 'Yes', '1. ME\r\n2. ME\r\n3. ME                        ', '11\r\n11\r\n11                 ', '2018\r\n2018\r\n2018', 'SAMPLE', 'SAMPLE', '12345678909', 'SAMPLE', 'SAMPLE', '12345678909', 'SAMPLE', 'SAMPLE', '12345678909', ''),
(10, 'KAKANG GAYAPAN GUICHAPIN', 'KAKANG', 'Married', 'Male', 23, 'ILONGGO', 'ROMAN CATHOLIC', '2018-11-23', 'COTABATO CITY', 'NOTRE OF COTABATO CITY', 2018, 90, 'WITH HONOR', 88, '', '', '', '', 0, 'COTABATO CITY', 'COTABATO CITY', 'COTABATO CITY', '12345678909', 'KAKANG@GMAIL.COM', 'SAMPLE', 'SAMPLE', 20000, 'SAMPLE', 'SAMPLE', 20000, 'SAMPLE', 'SAMPLE', 20000, 'WER NA U', 'SAMPLE', 'SAMPLE', '12345678909', 'SAMPLE', 'SAMPLE', '12345678909', 'SAMPLE', 'SAMPLE', '12345678909', 'Yes', 'Yes', 2, 'Yes', '1. ME\r\n2. ME\r\n3. ME                        ', '11\r\n11\r\n11                 ', '2018\r\n2018\r\n2018', 'SAMPLE', 'SAMPLE', '', 'SAMPLE', 'SAMPLE', '12345678909', 'SAMPLE', 'SAMPLE', '12345678909', ''),
(11, 'KAKANG GAYAPAN GUICHAPIN', 'KAKANG', 'Married', 'Male', 23, 'ILONGGO', 'ROMAN CATHOLIC', '2018-11-23', 'COTABATO CITY', 'NOTRE OF COTABATO CITY', 2018, 90, 'WITH HONOR', 88, '', '', '', '', 0, 'COTABATO CITY', 'COTABATO CITY', 'COTABATO CITY', '12345678909', 'KAKANG@GMAIL.COM', 'SAMPLE', 'SAMPLE', 20000, 'SAMPLE', 'SAMPLE', 20000, 'SAMPLE', 'SAMPLE', 20000, 'WER NA U', 'SAMPLE', 'SAMPLE', '12345678909', 'SAMPLE', 'SAMPLE', '12345678909', 'SAMPLE', 'SAMPLE', '12345678909', 'Yes', 'Yes', 2, 'Yes', '1. ME\r\n2. ME\r\n3. ME                        ', '11\r\n11\r\n11                 ', '2018\r\n2018\r\n2018', 'SAMPLE', 'SAMPLE', '', 'SAMPLE', 'SAMPLE', '', 'SAMPLE', 'SAMPLE', '', 'Staff of Notre Dame University,Existing WOLARS,Administrator of NDU');

-- --------------------------------------------------------

--
-- Table structure for table `wolar_registration`
--

CREATE TABLE `wolar_registration` (
  `WOLAR_REG_ID` int(10) NOT NULL,
  `ID_NUMBER` int(10) NOT NULL,
  `FIRSTNAME` varchar(40) NOT NULL,
  `MIDDLENAME` varchar(40) NOT NULL,
  `LASTNAME` varchar(40) NOT NULL,
  `AGE` int(5) NOT NULL,
  `GENDER` text NOT NULL,
  `COURSE_YEAR` varchar(20) NOT NULL,
  `DEPARTMENT` varchar(30) NOT NULL,
  `ASSIGNED_OFFICE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wolar_registration`
--

INSERT INTO `wolar_registration` (`WOLAR_REG_ID`, `ID_NUMBER`, `FIRSTNAME`, `MIDDLENAME`, `LASTNAME`, `AGE`, `GENDER`, `COURSE_YEAR`, `DEPARTMENT`, `ASSIGNED_OFFICE`) VALUES
(1, 0, 'gayapan', 'guichapin', '22', 0, 'BSIT 4', '', 'librarian', ''),
(2, 14500, 'kakang', 'gayapan', 'guichapin', 21, 'Male', 'BSIT -2 ', '', 'library');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`EVALUATION_ID`),
  ADD KEY `EVALUATION_TOOL_ID` (`EVALUATION_TOOL_ID`),
  ADD KEY `SCALE_ID` (`SCALE_ID`);

--
-- Indexes for table `evaluation_tool`
--
ALTER TABLE `evaluation_tool`
  ADD PRIMARY KEY (`EVALUATION_TOOL_ID`);

--
-- Indexes for table `scale`
--
ALTER TABLE `scale`
  ADD PRIMARY KEY (`SCALE_ID`);

--
-- Indexes for table `wolar_application`
--
ALTER TABLE `wolar_application`
  ADD PRIMARY KEY (`WOLAR_ID`);

--
-- Indexes for table `wolar_registration`
--
ALTER TABLE `wolar_registration`
  ADD PRIMARY KEY (`WOLAR_REG_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ACCOUNT_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `EVALUATION_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluation_tool`
--
ALTER TABLE `evaluation_tool`
  MODIFY `EVALUATION_TOOL_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `scale`
--
ALTER TABLE `scale`
  MODIFY `SCALE_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wolar_application`
--
ALTER TABLE `wolar_application`
  MODIFY `WOLAR_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wolar_registration`
--
ALTER TABLE `wolar_registration`
  MODIFY `WOLAR_REG_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
