-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 02:49 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `amail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `createadmin` varchar(11) DEFAULT NULL,
  `createcourse` varchar(11) DEFAULT NULL,
  `createstudent` varchar(11) DEFAULT NULL,
  `createfaculty` varchar(11) DEFAULT NULL,
  `managestudent` varchar(11) DEFAULT NULL,
  `managecourse` varchar(11) DEFAULT NULL,
  `managefaculty` varchar(11) DEFAULT NULL,
  `manageexam` varchar(11) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `amail`, `apass`, `createadmin`, `createcourse`, `createstudent`, `createfaculty`, `managestudent`, `managecourse`, `managefaculty`, `manageexam`, `role`) VALUES
(1, 'shuvamsengupta58824@gmail.com', '123', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'super'),
(6, 'demo@gmail.com', '123', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL),
(7, 'ms@gmail.com', '123', 'No', 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'No', NULL),
(8, 'mc@gmail.com', '123', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', NULL),
(12, 'cc@gmail.com', '123', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL),
(11, 'prithwi@gmail.com', '123', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'No', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `aid` int(11) NOT NULL,
  `adesc` text NOT NULL,
  `atopic` text NOT NULL,
  `amarks` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(70) NOT NULL,
  `ctotsem` int(11) NOT NULL,
  `ctotyear` int(11) NOT NULL,
  `ctotcapacity` int(11) NOT NULL,
  `ctotfees` int(11) NOT NULL,
  `csemfees` int(11) NOT NULL,
  `cshort` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `ctotsem`, `ctotyear`, `ctotcapacity`, `ctotfees`, `csemfees`, `cshort`) VALUES
(1, 'Masters in Computer Science', 4, 2, 23, 40000, 10000, 'MSc CS'),
(2, 'Masters in Information Technology', 4, 2, 12, 40000, 10000, 'MSc IT');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `fid` int(11) NOT NULL,
  `fimage` varchar(100) DEFAULT NULL,
  `fname` varchar(30) NOT NULL,
  `fqualification` varchar(30) NOT NULL,
  `fphone` bigint(10) NOT NULL,
  `femail` varchar(30) NOT NULL,
  `faddress` varchar(100) DEFAULT NULL,
  `fpass` varchar(50) NOT NULL,
  `fdesig` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`fid`, `fimage`, `fname`, `fqualification`, `fphone`, `femail`, `faddress`, `fpass`, `fdesig`) VALUES
(3, 'http://localhost/Website Projects/Dept Site 2.0/Faculties/Photo/Nibir Borpuzari.png', 'Shuvam Sengupta', 'Bsc IT', 9957588243, 'shuvamsengupta58824@gmail.com', ' abcd', '123', 'Associate Professor'),
(4, 'http://localhost/Website Projects/Dept Site 2.0/Faculties/Photo/Kaylanbrat Medhi.png', 'Shuvam', 'Bsc IT', 9957588243, '', '  sssssssssss', '123', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `vision` text,
  `mission` text,
  `history` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`vision`, `mission`, `history`) VALUES
('To evolve as a centre of excellence by contributing scientific and knowledge based education in the fields of Computer Science and Information Technology with deep passion, culture and ethical values towards the betterment of the society.\r\nTo evolve as a centre of excellence by contributing scientific and knowledge based education in the fields of Computer Science and Information Technology with deep passion, culture and ethical values towards the betterment of the society.', 'To provide quality education to meet the need of the profession and society. To enrich the technical knowledge of the students in diversified areas of Computer Science and Information Technology by adopting student-centric and outcome-based education with state of art infrastructure. To enhance the quality and quantity of R&D activities in cutting edge of Computer Science and Information Technologies through joining hands with new technologies', 'The department was founded in the year 1985. It started a one-year Post Graduate Diploma Course in Computer Science and Applications with thirty seats in 1986 under the headship of Prof. Malay Dutta. At that time there were only a few institutions in the entire country offering post graduate courses in Computer Science. The objectives of the course were to produce Computer Programmers, Research Scholars, Teachers, Instructors, Computer Professionals. The course continued till 2000. Ph.D program in the department was also started immediately after its inception. In January 2001 the department started a two-year MSc program in Computer Science after obtaining formal approval from UGC replacing the PGDCSA course, with a student intake of 15 per batch. The capacity was later on increased to 30. In 2005 the Department started a second M.Sc program - MSc in Information Technology together with the existing MSc programme in Computer Science.');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `nid` int(11) NOT NULL,
  `ntitle` varchar(100) NOT NULL,
  `ndate` date NOT NULL,
  `nimage` varchar(100) DEFAULT NULL,
  `ndesc` varchar(300) NOT NULL,
  `nurl` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`nid`, `ntitle`, `ndate`, `nimage`, `ndesc`, `nurl`) VALUES
(1, 'dsssss', '2021-02-03', '', ' Write Yoursssssssssss Description Here ', 'ssssssssssssss'),
(2, 'GU Seminar', '2021-02-27', 'Photo Homepage app.png', 'SEminar will held o 28hygygy', 'www.gmail.com'),
(3, 'SEminar', '2021-03-15', 'App First Screen.png', ' Write Yossssssssssur Description Here ', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `smail` varchar(50) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `smobile` bigint(20) NOT NULL,
  `spass` varchar(10) NOT NULL,
  `Simage` varchar(40) DEFAULT NULL,
  `squalification` varchar(40) NOT NULL,
  `Current_semester` int(5) NOT NULL,
  `saddress` varchar(100) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `gname` varchar(50) DEFAULT NULL,
  `gphone` bigint(20) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `sub1` varchar(100) DEFAULT NULL,
  `sub2` varchar(100) DEFAULT NULL,
  `sub3` varchar(100) DEFAULT NULL,
  `sub4` varchar(100) DEFAULT NULL,
  `sub5` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `sname`, `smail`, `gender`, `smobile`, `spass`, `Simage`, `squalification`, `Current_semester`, `saddress`, `fname`, `mname`, `gname`, `gphone`, `cid`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`) VALUES
(3, 'Shuvam Sengupta', 'shuvamsengupta58824@gmail.com', 'Male', 9957588243, '123', 'Photo/male_default.jpg', 'Bsc IT', 1, '  Guwahati', 'Sekhar Sengupta', 'Bobby Sengupta', 'Bobby Sengupta', 9957588243, 1, 'CSC1016', 'CSC1026', 'CSC1036', 'CSC1046', 'CSC1056');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `code` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_type` varchar(100) NOT NULL,
  `sem` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `fid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`code`, `s_name`, `s_type`, `sem`, `cid`, `fid`) VALUES
('CSC1016', 'Advanced Concepts in OOP', 'Core', 1, 1, NULL),
('INF1016', 'Advanced Concepts in OOP', 'Core', 1, 2, NULL),
('CSC1026', 'Advanced Computer Organization and Architecture', 'Core', 1, 1, NULL),
('INF1026', 'Advanced Computer Organization and Architecture', 'Core', 1, 2, 3),
('CSC1036', 'Operating System', 'Core', 1, 1, 3),
('INF1036', 'Operating System', 'Core', 1, 2, 3),
('CSC1046', 'Mathematical Foundations of Computer Science', 'Core', 1, 1, NULL),
('INF1046', 'Mathematical Foundations of Computer Science', 'Core', 1, 2, NULL),
('CSC1056', 'Advanced DBMS', 'Core', 1, 1, NULL),
('INF1056', 'Advanced DBMS', 'Core', 1, 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `amail` (`amail`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `smail` (`smail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
