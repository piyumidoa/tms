-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2015 at 02:35 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply_leave`
--

CREATE TABLE IF NOT EXISTS `tbl_apply_leave` (
  `apply_leav_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `apply_date` date NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `leave_type` varchar(10) NOT NULL,
  `leave_days` double NOT NULL,
  `leave_approve` tinyint(1) NOT NULL,
  `leav_approv_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`apply_leav_id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `tbl_apply_leave`
--

INSERT INTO `tbl_apply_leave` (`apply_leav_id`, `emp_id`, `apply_date`, `leave_from`, `leave_to`, `leave_type`, `leave_days`, `leave_approve`, `leav_approv_by`) VALUES
(10, 3083, '2014-08-30', '2014-09-02', '2014-09-04', 'Casual', 2, 1, 'Mrs K.Jayapathma'),
(12, 2309, '2014-08-29', '2014-09-01', '2015-03-02', 'Casual', 1, 1, 'Mrs K.Jayapathma'),
(15, 3620, '2015-03-05', '2015-03-06', '2015-03-09', 'Sick', 1, 1, 'Mrs K.Jayapathma'),
(17, 2594, '2015-03-05', '2015-03-09', '2015-03-11', 'Casual', 2, 1, 'Mrs K.Jayapathma'),
(19, 3620, '2015-03-07', '2015-03-16', '2015-03-17', 'Sick', 1, 0, 'Mr. K.Jayapathma'),
(20, 3213, '2015-06-30', '2015-07-01', '2015-07-02', 'Casual', 0.5, 1, 'Miss. K.Jayapathma'),
(24, 5755, '2015-07-01', '2015-07-13', '2015-07-14', 'Casual', 1, 1, 'Mr. K.Jayapathma'),
(26, 0, '2015-07-26', '0000-00-00', '0000-00-00', '', 0, 0, NULL),
(27, 0, '2015-07-26', '0000-00-00', '0000-00-00', '', 0, 0, NULL),
(28, 0, '2015-07-26', '0000-00-00', '0000-00-00', '', 0, 0, NULL),
(29, 3091, '2015-07-26', '2015-07-01', '2015-07-02', 'Casual', 1, 1, 'Miss. K.Jayapathma'),
(30, 3213, '2015-07-26', '2015-07-07', '2015-07-08', 'Sick', 1, 1, 'Miss. K.Jayapathma'),
(32, 2111, '2015-08-14', '2015-08-17', '2015-08-19', 'Casual', 1, 1, 'Mr. S.T.Jayasuriya'),
(33, 3339, '2015-08-14', '2015-08-18', '2015-08-20', 'Casual', 2, 1, 'Miss. K.Jayapathma'),
(34, 3624, '2015-08-15', '2015-08-19', '2015-08-20', 'Duty', 0.5, 0, NULL),
(35, 2111, '2015-08-21', '2015-09-02', '2015-09-03', 'Duty', 1, 1, 'Miss. K.Jayapathma'),
(36, 2145, '2015-08-21', '2015-09-07', '2015-09-09', 'Casual', 2, 1, 'Miss. K.Jayapathma'),
(37, 3213, '2015-08-21', '2015-09-01', '2015-09-02', 'Sick', 1, 1, 'Miss. K.Jayapathma'),
(39, 3091, '2015-08-21', '2015-08-26', '2015-08-28', 'Casual', 2, 1, 'Miss. K.Jayapathma'),
(40, 2222, '2015-08-21', '2015-09-09', '2015-09-09', 'Casual', 0.5, 1, 'Miss. K.Jayapathma'),
(41, 2396, '2015-08-29', '2015-08-31', '2015-09-01', 'Sick', 1, 1, 'Miss. K.Jayapathma'),
(42, 2396, '2015-08-29', '2015-09-21', '2015-09-23', 'Sick', 2, 1, 'Miss. K.Jayapathma'),
(43, 2111, '2015-08-29', '2015-10-01', '2015-10-01', 'Sick', 0.5, 1, 'Miss. K.Jayapathma'),
(44, 2247, '2015-08-29', '2015-09-03', '2015-09-04', 'Sick', 1, 0, NULL),
(45, 3213, '2015-08-29', '2015-09-14', '2015-09-15', 'Casual', 1, 0, NULL),
(46, 2222, '2015-08-29', '2015-10-05', '2015-10-07', 'Sick', 2, 0, NULL),
(48, 3091, '2015-08-29', '2015-09-16', '2015-09-16', 'Casual', 0.5, 0, NULL),
(49, 2248, '2015-08-29', '2015-09-21', '2015-09-23', 'Casual', 2, 1, 'Miss. K.Jayapathma'),
(51, 2248, '2015-08-29', '2015-10-19', '2015-10-21', 'Sick', 2, 0, NULL),
(53, 3339, '2015-08-29', '2015-08-31', '2015-09-01', 'Sick', 1, 0, NULL),
(54, 2594, '2015-08-29', '2015-09-30', '2015-12-31', 'Maternity', 84, 0, NULL),
(55, 2396, '2015-08-29', '2015-09-23', '2015-09-24', 'Sick', 1, 0, NULL),
(56, 2567, '2015-08-29', '2015-08-31', '2015-09-09', 'Sick', 7, 0, NULL),
(57, 2187, '2015-08-29', '2015-10-01', '2015-10-02', 'Sick', 1, 0, NULL),
(58, 2879, '2015-08-29', '2015-10-14', '2015-10-15', 'Casual', 1, 0, NULL),
(59, 3444, '2015-08-29', '2015-10-05', '2015-10-05', 'Sick', 0.5, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `dep_id` varchar(50) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `dep_head` varchar(50) NOT NULL,
  `dep_phone` varchar(10) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`dep_id`, `dep_name`, `dep_head`, `dep_phone`) VALUES
('D01', 'Personal Department', 'Deputy Commissioner', '0812222578'),
('D02', 'Revenue Department', 'Chief Municipal Accountant', '0812229807'),
('D03', 'Salary Department', 'Chief Municipal Accountant', '0816589458'),
('D04', 'Fire Department', 'Deputy Commissioner', '0812222275'),
('D05', 'Internal Audit', 'Commissioner', '0812222234'),
('D06', 'Salary Department', 'Chief Municipal Accountant', '0812223475'),
('D07', 'Book Keeping Department', 'Chief Municipal Accountant', '0812222556'),
('D08', 'Works Department ', 'Chief Engineer', '0812227896'),
('D09', 'Planning Department', 'Deputy Commissioner', '0812222785'),
('D10', 'Finance Department', 'Chief Municipal Accountant', '0812223421'),
('D11', 'Flying Squad', 'Commissioner', '0812222234'),
('D12', 'Book keeping department', 'Chief Municipal Accountant', '0812224356'),
('D13', 'Solid Wastage Service ', 'Medical Officer of Health', '0812222934'),
('D14', 'Health Department', 'Medical Officer of Health', '0812222576'),
('D15', 'Land Department', 'Deputy Commissioner', '0812220967'),
('D16', 'Library Services Department', 'Deputy Commissioner', '0816579235');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dependant`
--

CREATE TABLE IF NOT EXISTS `tbl_dependant` (
  `depen_id` int(11) NOT NULL AUTO_INCREMENT,
  `depen_name` varchar(50) NOT NULL,
  `depen_gender` tinyint(1) NOT NULL,
  `depen_dob` date NOT NULL,
  `relation_name` varchar(15) NOT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`depen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_dependant`
--

INSERT INTO `tbl_dependant` (`depen_id`, `depen_name`, `depen_gender`, `depen_dob`, `relation_name`, `emp_id`) VALUES
(2, 'Shashini', 1, '2013-07-06', 'Daughter', 3213),
(3, 'Dilshani', 1, '2013-08-06', 'Daughter', 2594),
(4, 'Dayani Pererra', 0, '2014-05-04', 'Daughter', 3634),
(5, 'Dayani', 1, '2014-05-04', 'Sister', 3634),
(6, 'Saleem', 0, '2013-07-06', 'Son', 3896),
(7, 'Suranga Perera', 0, '2000-07-06', 'Son', 3444),
(8, 'Sonakshi', 1, '1997-08-19', 'Daughter', 2222),
(9, 'Amit Wanigasekara', 0, '2004-08-12', 'Son', 2222),
(10, 'Shriyani', 0, '2006-08-21', 'Daughter', 2222),
(12, 'Sudarika', 0, '2014-11-09', 'Daughter', 2145),
(13, 'Malik', 0, '2015-05-04', 'Son', 3896),
(14, 'Sheela', 0, '2014-11-09', 'Daughter', 2145),
(20, 'Madhumitha', 1, '2004-05-04', 'Daughter', 2154),
(21, 'Madhushani', 0, '2006-09-18', 'Daughter', 2154),
(22, 'Nirasha', 1, '1991-08-10', 'Daughter', 3333),
(23, 'Amit ', 0, '1990-08-03', 'Son', 3333),
(24, 'Dinushi', 0, '1995-10-10', 'Daughter', 3333),
(25, 'T.Chandrasena', 1, '1960-08-17', 'Wife', 3333),
(26, 'Eranga', 0, '1972-08-03', 'Husband', 3212),
(27, 'Pradeep', 0, '2006-08-03', 'Son', 2247),
(28, 'Maneesha', 1, '2005-08-10', 'Daughter', 2248),
(29, 'Sunil', 1, '2008-08-11', 'Son', 2248),
(30, 'Amila', 1, '2006-08-03', 'Daughter', 2396),
(31, 'Shanika', 1, '2009-08-12', 'Daughter', 2396),
(32, 'Thilini', 1, '2012-08-03', 'Daughter', 2187),
(33, 'Nishantha', 0, '2000-08-23', 'Son', 2879),
(34, 'Nissanka', 0, '2004-10-15', 'Son', 2879);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_initials` varchar(200) NOT NULL,
  `emp_gender` tinyint(4) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_nic` varchar(11) NOT NULL,
  `emp_marit_status` tinyint(4) NOT NULL,
  `dep_id` varchar(11) NOT NULL,
  `emp_inc_date` date NOT NULL,
  `job_id` varchar(50) NOT NULL,
  `emp_appoint_status` varchar(20) NOT NULL,
  `emp_appoint_date` date NOT NULL,
  `job_grade` varchar(10) NOT NULL,
  `emp_status` varchar(12) NOT NULL,
  `emp_status_date` date NOT NULL,
  `emp_address` varchar(150) NOT NULL,
  `emp_home_phone` int(12) DEFAULT NULL,
  `emp_mobile` int(12) NOT NULL,
  `emp_email` varchar(50) DEFAULT NULL,
  `emp_title` varchar(5) NOT NULL,
  `emp_epf_no` varchar(10) NOT NULL,
  `emp_waop_no` varchar(10) NOT NULL,
  `emp_appdate_kmc` date NOT NULL,
  `emp_pfno` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`,`emp_status_date`),
  UNIQUE KEY `emp_nic` (`emp_nic`),
  KEY `job_id` (`job_id`),
  KEY `dep_id` (`dep_id`),
  KEY `dep_id_2` (`dep_id`),
  KEY `job_id_2` (`job_id`),
  KEY `dep_id_3` (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`emp_id`, `emp_name`, `emp_initials`, `emp_gender`, `emp_dob`, `emp_nic`, `emp_marit_status`, `dep_id`, `emp_inc_date`, `job_id`, `emp_appoint_status`, `emp_appoint_date`, `job_grade`, `emp_status`, `emp_status_date`, `emp_address`, `emp_home_phone`, `emp_mobile`, `emp_email`, `emp_title`, `emp_epf_no`, `emp_waop_no`, `emp_appdate_kmc`, `emp_pfno`) VALUES
(2111, 'T.Fernando', 'Tia Fernando', 1, '1988-08-14', '881254369V', 0, 'D03', '2016-08-13', 'Sri Lanka Administrative Service ', 'Permanent', '2010-08-13', '3-I', 'Employed', '2010-08-13', '                No.12/1, Galaha Road,\r\nKandy', 812223487, 771234523, 'tia123@gmail.com', 'Miss.', '', '', '2010-08-13', 'CPC/KMC/D/01/10/08/123'),
(2145, 'S.T.Jayasuriya', 'Siyaneris Titus Jayasuriya', 0, '1990-01-01', '901234567V', 1, 'D01', '2016-07-28', 'Medical Officer Of Health', 'Permanent', '2015-07-28', '3-II', 'Employed', '2015-07-28', '                                                        No.100,Uggalla,\r\nKandy', 815684505, 772331223, 'jayasuriya@gmail.com', 'Mr.', '', 'M/345625', '2015-07-28', 'CPC/KMC/D/10/09/1234'),
(2154, 'C.K.Hapuaracchchi', 'Chandani Kumari Hapuarachchi', 1, '1978-08-10', '781245658V', 1, 'D14', '2015-09-15', 'Food Inspector', 'Permanent', '2000-09-15', '2-II', 'Employed', '2009-09-15', 'No.56/1, Madawala Road,\r\nKatugastota', 814579632, 772549863, 'chandanik@hotmail.com', 'Mrs.', '', 'F/321112', '2009-09-15', 'CPC/KMC/D/10/23/09/2010'),
(2187, 'C.N.Perera', 'Chaturika Nipuni Perera', 1, '1984-12-11', '848246892V', 1, 'D16', '2015-12-12', 'Librarian ', 'Permanent', '2005-12-12', '2-II', 'Employed', '2005-12-12', 'No.26/6, Ranawana Road,\r\nKandy', 815684507, 789648632, 'chathunp@hotmail.com', 'Mrs.', '', 'F/359756', '2005-12-12', 'CPC/KMC/D/10/24/12/2005'),
(2222, 'P. Wanigasekara', 'Padma Wanigasekara', 1, '1960-08-12', '606523982V', 1, 'D14', '2015-12-12', 'Pharmacist', 'Permanent', '1990-12-12', '2-I', 'Employed', '1990-12-12', '                        No.48,Katugastota Road,\r\nKandy', 812547893, 723697842, 'padma@yahoo.com', 'Mrs.', '', 'F/325203', '1990-12-12', 'CPC/KMC/D/06/44/03/1990'),
(2247, 'N.Herath', 'Nishantha Herath', 0, '1983-09-16', '831286924V', 1, 'D02', '2016-10-25', 'Revenue Inspector', 'Permanent', '2010-10-25', '3-I', 'Employed', '2010-10-25', '        No.28, Kandy', 816597532, 779863511, 'herth@yahoo.com', 'Mr.', '', '', '2010-10-25', 'CPC/KMC/D/15/41/10/2010'),
(2248, 'T.Kekulandala', 'Thilini Kekulandala', 1, '1974-10-25', '748479315V', 1, 'D02', '2015-12-15', 'Statistics Officer', 'Permanent', '2005-12-15', '2-I', 'Employed', '2005-12-15', 'No.49, Peradeniya Road,\r\nKandy        ', 816894527, 729876589, 'thili@rocketmail.com', 'Mrs.', '', '', '2010-10-15', 'CPC/KMC/D/11/65/12/2010'),
(2396, 'K.Fernando', 'Kasun Fernando', 0, '1975-08-10', '751249763V', 1, 'D08', '2015-10-08', 'Chief Engineer', 'Permanent', '1999-10-08', '2-I', 'Employed', '1999-10-08', '        No.27, Kandy', 816597324, 723257271, 'kzfer@gmail.com', 'Mr.', '', 'M/345624', '1999-10-08', 'CPC/KMC/D/15/62/10/1999'),
(2567, 'N.Kumara', 'Nalin Kumara', 0, '1980-08-10', '803431259V', 0, 'D05', '2015-10-06', 'Computer Data Analyst', 'Permanent', '2005-10-06', '3-I', 'Employed', '2005-10-06', 'No.326,Kurunegala Road,\r\nKatugastota', 815684505, 781249632, 'kumara.n@gmail.com', 'Mr.', '', 'M/345659', '2005-10-06', 'CPC/KMC/D/05/12/10/2005'),
(2594, 'K.Jayapathma', 'Kasuni Jayapathma', 1, '1985-07-16', '857458252V', 0, 'D15', '2016-08-07', 'Engineer Civil ', 'Permanent', '2009-12-11', '3-I', 'Employed', '2009-12-11', '                                                                No.87, Peradeniya Rd,\r\nKandy', 817453690, 778945635, 'andr@gmail.com', 'Mrs.', '', 'F/112025', '2009-12-11', 'CPC/KMC/D/09/10/12/2009'),
(2879, 'N.Weerasooriya', 'Nuwan Weerasooriya', 0, '1970-08-10', '702148693V', 1, 'D07', '2015-09-14', 'Chief Municipal Accountant', 'Permanent', '1990-09-14', 'I-III', 'Employed', '1990-09-14', '        No.43, Wattaranthenna Road,\r\nKatugastota', 816597891, 719863257, 'nuwan@gmail.com', 'Mr.', '', 'M/342577', '1990-09-14', 'CPC/KMC/D/07/26/09/1990'),
(3091, 'A.Ziyad', 'Ahamad Ziyad', 0, '1980-08-05', '803431234V', 0, 'D06', '2016-08-07', 'Sri Lanka Administrative Service ', 'Substitute', '2006-01-03', '2-I', 'Employed', '2006-01-03', '                                                                                No:71/1,Mahakubura,\r\nNawalapitiya. ', 815429075, 773896124, 'ziyad00@gmail.com', 'Mr.', '', '', '2006-01-03', 'CPC/KMC/D/06/44/01/2006'),
(3212, 'E.Silva', 'Erangani De Silva', 1, '1976-08-03', '761248931V', 1, 'D10', '2016-08-04', 'Technical Officer Mechanic', 'Permanent', '2000-08-04', '2-II', 'Employed', '2000-08-04', 'No.91/A, Halloluwa', 813597624, 789453219, 'era.sil@gmail.com', 'Mrs.', '', 'F/325120', '2002-08-05', 'CPC/KMC/D/15/46/08/2000'),
(3213, 'M.Arunasalam', 'Murugesu Arunasalam', 0, '1988-04-03', '881256878V', 1, 'D13', '2016-08-07', 'Chief Municipal Accountant', 'Permanent', '2009-10-25', '3-I', 'Employed', '2009-09-25', '                                No.23,Galaha Road,kandy', 817453690, 778945635, 'murug@gmail.com', 'Mr.', '', 'M/345627', '2009-09-25', 'CPC/KMC/D/12/25/09/2009'),
(3264, 'D.Gamage', 'Dharmasena Gamage', 0, '1963-08-13', '632202547V', 0, 'D09', '2015-08-14', 'Translator ', 'Permanent', '1990-08-14', '2-I', 'Employed', '1990-08-14', '                        No.43/11, Peradeniya Road, Kandy', 817896254, 723489657, 'gamage@gmail.com', 'Mr.', '', 'M/345127', '1990-08-14', 'CPC/KMC/D12/25/08/1990'),
(3333, 'N.H.Chandrasena', 'Nalin Hapuarachchige Chandrasena', 0, '1959-08-04', '594783512V', 1, 'D11', '2015-12-06', 'Sri Lanka Administrative Service ', 'Permanent', '1984-12-06', 'I-', 'Employed', '1984-12-06', 'No.67/A, Weerakon Garden, Kandy', 813259732, 772357891, 'nhchandra@rocketmail.com', 'Mr.', '', 'M/346327', '1984-12-06', 'CPC/KMC/D/11/65/12/1984'),
(3339, 'B.Dissanayake', 'Boomika Dissanayake', 1, '1986-06-02', '861456987V', 0, 'D04', '2016-08-07', 'Chief Fire Brigade Officer ', 'Permanent', '2015-08-07', '2-I', 'Employed', '2015-06-07', '                                        No.21,Katugastota Road,Kandy', 814569823, 756984125, 'boomi@yahoo.com', 'Miss.', '', '', '2015-06-07', 'CPC/KMC/D/10/06/15/1458'),
(3444, 'A.Perera', 'Athula Perera', 0, '1963-09-16', '632604977V', 1, 'D12', '2016-08-07', 'Management Assistant Service', 'Permanent', '2014-04-16', '3-II', 'Employed', '2014-04-04', '        No.123,Kandy                                             ', 815692148, 778953317, 'aperera@hotmail.com', 'Mr.', '', '', '2014-07-29', 'CPC/KMC/D/11/65/12/2014'),
(3634, 'D.N.Perera', 'Dhasun Nalin Perera', 0, '1983-06-04', '834529076V', 1, 'D07', '2016-08-07', 'Management Assistant service', 'Casual', '2015-08-07', '2-II', 'Transferred', '2007-01-05', '                                No:453,Katugastota,\r\nKandy', 813427643, 764387623, 'Nalin9@gmail.com', 'Mr', '', '', '2007-01-05', 'CPC/KMC/D/08/66/01/2007'),
(3896, 'M.Kamal', 'Mohamed  Kamal', 0, '1981-06-06', '816529856V', 1, 'D10', '2016-08-07', 'Management Assistant Service', 'Permanent', '2006-01-03', '2-I', 'Employed', '2006-01-03', '                No:234,Deegavapitiya,\r\nAmpara', 813876327, 725631897, 'kamal11@gmail.com', 'Mr.', '', '', '2006-01-03', 'CPC/KMC/D 08/88/01/2006');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp_img`
--

CREATE TABLE IF NOT EXISTS `tbl_emp_img` (
  `emp_id` int(11) NOT NULL,
  `emp_img_path` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_emp_img`
--

INSERT INTO `tbl_emp_img` (`emp_id`, `emp_img_path`) VALUES
(2111, '2111.jpg'),
(2145, '2145.jpg'),
(2154, '2154.jpg'),
(2187, '2187.jpg'),
(2222, '2222.jpg'),
(2247, '2247.jpg'),
(2248, '2248.jpg'),
(2345, '2345.jpg'),
(2396, '2396.jpg'),
(2567, '2567.jpg'),
(2594, '2594.jpg'),
(2879, '2879.jpg'),
(3083, '3083.jpg'),
(3091, '3091.jpg'),
(3212, '3212.jpg'),
(3213, '3213.jpg'),
(3264, '3264.jpg'),
(3333, '3333.jpg'),
(3339, '3339.jpg'),
(3425, '3425.jpg'),
(3444, '3444.jpg'),
(3634, '3634.jpg'),
(3896, '3896.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE IF NOT EXISTS `tbl_holiday` (
  `holy_id` int(11) NOT NULL AUTO_INCREMENT,
  `holy_date` date NOT NULL,
  `holy_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`holy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tbl_holiday`
--

INSERT INTO `tbl_holiday` (`holy_id`, `holy_date`, `holy_desc`) VALUES
(1, '2014-01-14', 'Thai Pongal'),
(3, '2014-01-15', 'Duruthu Full Moon Poya Day'),
(5, '2014-02-14', 'Navam Full Moon Poya Day'),
(7, '2014-03-16', 'Medin Full Moon Poya Day'),
(9, '2014-04-14', 'Sinhala And Tamil New Year Day'),
(13, '2014-05-14', 'Vesak Full Moon Poya Day'),
(15, '2014-06-12', 'Poson Full Moon Poya Day'),
(17, '2014-06-12', 'Poson Full Moon Poya Day'),
(19, '2014-07-29', 'Id-Ul-Fithr- Ramazan day'),
(27, '2015-02-03', 'Navam Full Moon Poya Day'),
(29, '2015-12-25', 'Christmas Day'),
(31, '2015-07-18', 'Eid-Ul-Fithr'),
(32, '2015-08-29', 'Nikini Full Moon Poya Day'),
(33, '2015-09-24', 'Eid-Ul-Fithr'),
(34, '2015-01-15', 'Thai Pongal'),
(35, '2015-04-14', 'Sinhala Tamil New Year'),
(36, '2015-09-27', 'Binara Full Moon Poya Day'),
(37, '2015-10-27', 'Vap Full Moon Poya Day'),
(38, '2015-10-25', 'Il Full Moon Poya Day'),
(39, '2015-12-24', 'Uduvap Full Moon Poya Day'),
(40, '2015-11-25', 'Il Full Moon Poya Day'),
(41, '2015-02-04', 'Independance Day');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday_type`
--

CREATE TABLE IF NOT EXISTS `tbl_holiday_type` (
  `holiday_id` int(11) NOT NULL AUTO_INCREMENT,
  `holiday_name` varchar(50) NOT NULL,
  PRIMARY KEY (`holiday_id`),
  UNIQUE KEY `holiday_name` (`holiday_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_holiday_type`
--

INSERT INTO `tbl_holiday_type` (`holiday_id`, `holiday_name`) VALUES
(5, 'Bak Full Moon Poya Day'),
(10, 'Binara Full Moon Poya Day'),
(21, 'Deepavali'),
(2, 'Duruthu Full Moon Poya Day'),
(15, 'Eid-Ul-Alha'),
(14, 'Eid-Ul-Fithr'),
(8, 'Esala Full Moon Poya Day'),
(12, 'Il Full Moon Poya Day'),
(22, 'Independance Day'),
(16, 'Maha Shivarathri Day'),
(4, 'Medin Full Moon Poya Day'),
(3, 'Navam Full Moon Poya Day'),
(9, 'Nikini Full Moon Poya Day'),
(7, 'Poson Full Moon Poya Day'),
(18, 'Sinhala Tamil New Year'),
(1, 'Thai Pongal'),
(13, 'Uduvap Full Moon Poya Day'),
(11, 'Vap Full Moon Poya Day'),
(6, 'Vesak Full Moon Poya Day');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE IF NOT EXISTS `tbl_job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(45) DEFAULT NULL,
  `job_desc` varchar(45) DEFAULT NULL,
  `job_no_emp` int(11) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`job_id`, `job_title`, `job_desc`, `job_no_emp`) VALUES
(11, 'Sri Lanka Administrative Service ', '', 4),
(19, 'Engineer Civil ', '', 2),
(22, 'Medical Officer Of Health', '', 1),
(25, 'Chief Fire Brigade Officer ', '', 1),
(27, 'City Analyst', '', 1),
(30, 'Chief Management Assistant ', '', 19),
(32, 'Translator ', '', 1),
(34, 'Revenue Inspector', '', 1),
(36, 'Revenue Inspector', '', 9),
(41, 'Technical Officer Mechanic', '', 2),
(43, 'Pharmacist', '', 1),
(45, 'Technical Officer Draughtsman', '', 5),
(47, 'Public Health Inspector', '', 2),
(49, 'Food Inspector', '', 2),
(51, 'Computer Data Analyst', '', 2),
(53, 'Market Superintendent', '', 1),
(55, 'Statistics Officer', '', 1),
(57, 'Ayurvedic Medical Officer', '', 7),
(59, 'Public Health Nurse', '', 4),
(62, 'Librarian ', '', 3),
(64, 'Fireman', '', 3),
(66, 'Mechanical Fireman', '', 6),
(69, 'Market Inspector', '', 1),
(71, 'Relief Officer', '', 3),
(73, 'Architect', '', 2),
(75, 'Market Supervisior', '', 2),
(82, 'Land Officer', '', 1),
(83, 'Commissioner', '', 1),
(84, 'Deputy Commissioner', NULL, 1),
(85, 'Chief Municipal Accountant', NULL, 1),
(87, 'Chief Engineer', NULL, 1),
(88, 'Management Assistant Service', NULL, 5),
(89, 'Management Assistant Service', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leav_type`
--

CREATE TABLE IF NOT EXISTS `tbl_leav_type` (
  `leave_type_casual` double DEFAULT NULL,
  `leave_type_sick` double DEFAULT NULL,
  `leave_type_maternity` double DEFAULT NULL,
  `leave_type_other` double DEFAULT NULL,
  `leave_type_year` year(4) NOT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `emp_id_3` (`emp_id`),
  KEY `emp_id` (`emp_id`),
  KEY `emp_id_2` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leav_type`
--

INSERT INTO `tbl_leav_type` (`leave_type_casual`, `leave_type_sick`, `leave_type_maternity`, `leave_type_other`, `leave_type_year`, `emp_id`) VALUES
(21, 24, 0, 0, 0000, 2111),
(21, 24, 0, 0, 0000, 2145),
(21, 24, 0, 0, 0000, 2154),
(21, 24, 84, 0, 0000, 2187),
(21, 24, 0, 0, 0000, 2222),
(21, 24, 0, 0, 0000, 2247),
(21, 24, 0, 0, 0000, 2248),
(21, 24, 0, 0, 0000, 2396),
(21, 24, 0, 0, 0000, 2567),
(21, 24, 84, 0, 0000, 2594),
(21, 24, 0, 0, 0000, 2879),
(21, 24, 0, 0, 0000, 3091),
(21, 24, 0, 0, 0000, 3212),
(21, 24, 0, 0, 0000, 3213),
(21, 24, 0, 0, 0000, 3264),
(21, 24, 0, 0, 0000, 3333),
(21, 24, 0, 0, 0000, 3339),
(21, 24, 0, 0, 0000, 3444),
(21, 24, 0, 0, 0000, 3634),
(21, 24, 0, 0, 2013, 3896);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qualification`
--

CREATE TABLE IF NOT EXISTS `tbl_qualification` (
  `qual_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(4) NOT NULL,
  `qual_name` varchar(45) NOT NULL,
  `qual_date` date NOT NULL,
  `qual_lang` varchar(45) NOT NULL,
  `qual_desc` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`qual_id`),
  KEY `emp_id_idx` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `tbl_qualification`
--

INSERT INTO `tbl_qualification` (`qual_id`, `emp_id`, `qual_name`, `qual_date`, `qual_lang`, `qual_desc`) VALUES
(14, 3634, 'G.C.E.Ordinary Level', '2010-12-01', 'Sinhala', ''),
(15, 3213, 'G.C.E.Ordinary Level', '1982-12-03', 'Tamil', ''),
(16, 3896, 'G.C.E.Ordinary Level', '2000-12-12', 'Tamil', ''),
(17, 3896, 'G.C.E Advanced Level', '2003-04-04', 'Tamil', ''),
(18, 3444, 'G.C.E.Ordinary Level', '2000-12-12', 'Sinhala', ''),
(19, 3444, 'G.C.E Advanced Level', '2003-04-04', 'Sinhala', ''),
(20, 3444, 'H.N.D', '2008-04-04', 'English', 'English'),
(21, 2145, 'G.C.E.Ordinary Level', '1998-12-04', 'Sinhala', ''),
(22, 2594, 'G.C.E.Ordinary Level', '2000-12-12', 'Sinhala', ''),
(23, 2145, 'Diploma', '2003-05-06', 'English', 'English Diploma'),
(24, 2594, 'Diploma', '2005-04-04', 'English', 'Computer Science'),
(41, 2145, 'G.C.E Advanced Level', '2015-08-30', 'Sinhala', ''),
(42, 2594, 'Diploma', '2015-04-06', 'Tamil', 'Tamil'),
(43, 3213, 'G.C.E Advanced Level', '2008-04-04', 'Tamil', ''),
(44, 2154, 'G.C.E.Ordinary Level', '1996-12-10', 'Sinhala', ''),
(45, 2154, 'G.C.E Advanced Level', '1998-08-04', 'Sinhala', ''),
(46, 3333, 'G.C.E.Ordinary Level', '1975-12-04', 'Sinhala', ''),
(47, 3333, 'G.C.E Advanced Level', '1978-08-03', 'Sinhala', ''),
(48, 3333, 'Degree', '1983-08-16', 'Sinhala', 'BA(Hons)'),
(49, 3333, 'Diploma', '1986-08-11', 'Tamil', ''),
(50, 3212, 'G.C.E.Ordinary Level', '1984-12-05', 'Sinhala', ''),
(51, 2247, 'G.C.E.Ordinary Level', '1999-12-20', 'Sinhala', ''),
(52, 2247, 'G.C.E Advanced Level', '2002-08-05', 'Sinhala', ''),
(53, 2247, 'Excellency Level I', '2012-08-03', 'Tamil', ''),
(54, 2248, 'G.C.E.Ordinary Level', '1990-12-04', 'Sinhala', ''),
(55, 2248, 'G.C.E Advanced Level', '1993-08-04', 'Sinhala', ''),
(56, 2248, 'Excellency Level I', '2015-08-03', 'Tamil', ''),
(57, 2248, 'Diploma', '2012-08-17', 'English', ''),
(58, 2396, 'G.C.E.Ordinary Level', '1990-12-03', 'Sinhala', ''),
(59, 2396, 'Diploma', '1992-08-10', 'Tamil', ''),
(60, 2396, 'G.C.E Advanced Level', '1994-08-11', 'Sinhala', ''),
(61, 2396, 'Excellency Level I', '2008-08-10', 'English', ''),
(62, 2187, 'G.C.E.Ordinary Level', '1992-12-03', 'Sinhala', ''),
(63, 2187, 'Diploma', '2000-08-03', 'English', 'Library Management'),
(64, 2187, 'G.C.E Advanced Level', '1994-08-30', 'Sinhala', ''),
(65, 2879, 'G.C.E.Ordinary Level', '1986-12-11', 'Sinhala', ''),
(66, 2879, 'G.C.E Advanced Level', '1989-08-10', 'Sinhala', ''),
(67, 2879, 'Degree', '1995-08-19', 'Sinhala', 'Bsc in Management'),
(68, 3264, 'G.C.E.Ordinary Level', '1979-08-10', 'Sinhala', ''),
(69, 3264, 'Excellency Level II', '1992-12-03', 'Tamil', ''),
(70, 3264, 'Excellency Level I', '1996-08-12', 'English', ''),
(71, 3339, 'G.C.E.Ordinary Level', '2002-12-04', 'Sinhala', ''),
(72, 3339, 'G.C.E Advanced Level', '2005-04-12', 'Sinhala', ''),
(73, 2222, 'G.C.E.Ordinary Level', '1976-12-10', 'Sinhala', ''),
(74, 2222, 'G.C.E Advanced Level', '1980-08-03', 'Sinhala', ''),
(75, 2222, 'Excellency Level II', '1985-08-25', 'Sinhala', 'Short Hand and Typing'),
(76, 2111, 'G.C.E.Ordinary Level', '2014-12-10', 'English', ''),
(77, 2111, 'G.C.E Advanced Level', '2007-08-10', 'English', ''),
(78, 2111, 'Excellency Level I', '0210-08-25', 'Sinhala', ''),
(79, 2567, 'G.C.E.Ordinary Level', '1996-12-10', 'English', ''),
(80, 2567, 'G.C.E Advanced Level', '1996-08-04', 'English', ''),
(81, 2567, 'Degree', '2001-01-10', 'English', 'Bsc in Software Engineering'),
(82, 3091, 'G.C.E.Ordinary Level', '1996-12-10', 'Tamil', ''),
(83, 3091, 'G.C.E Advanced Level', '1999-08-10', 'Tamil', ''),
(84, 3091, 'Degree', '2004-05-03', 'Tamil', 'BA(Hons)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qual_type`
--

CREATE TABLE IF NOT EXISTS `tbl_qual_type` (
  `qual_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `qual_type_name` varchar(50) NOT NULL,
  `qual_type_desc` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`qual_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_qual_type`
--

INSERT INTO `tbl_qual_type` (`qual_type_id`, `qual_type_name`, `qual_type_desc`) VALUES
(4, 'G.C.E Advanced Level', 'Pass all subjects'),
(11, 'H.N.D', 'Higher National Diploma'),
(12, 'G.C.E.Ordinary Level', 'Pass 6 subjects with Language and Mathematics'),
(13, 'Diploma', ''),
(18, 'Degree', '3 years degree approved by the UGC'),
(19, 'Excellency Level I', ''),
(20, 'Excellency Level II', ''),
(21, 'Excellency Level III', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_relationship`
--

CREATE TABLE IF NOT EXISTS `tbl_relationship` (
  `relation_id` int(11) NOT NULL AUTO_INCREMENT,
  `relation_name` varchar(20) NOT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_relationship`
--

INSERT INTO `tbl_relationship` (`relation_id`, `relation_name`) VALUES
(1, 'Son'),
(2, 'Brother'),
(3, 'Father'),
(4, 'Husband'),
(5, 'Mother'),
(6, 'Sister'),
(7, 'Wife'),
(8, 'Daughter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE IF NOT EXISTS `tbl_salary` (
  `salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `salary_basic` double NOT NULL,
  `salary_epf_cont` double NOT NULL,
  `salary_inc` double NOT NULL,
  `salary_waop` double NOT NULL,
  `salary_marital` double NOT NULL,
  `salary_agra` double NOT NULL,
  `salary_col` double NOT NULL,
  `salary_spec_allow` double NOT NULL,
  `salary_alwother` double NOT NULL,
  `salary_code` varchar(20) NOT NULL,
  `salary_loan_dist` double NOT NULL,
  `salary_loan_hous` double NOT NULL,
  `salary_loan_other` double NOT NULL,
  `sal_mith` double NOT NULL,
  `sal_ounion` double NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `emp_id_2` (`emp_id`),
  KEY `emp_id` (`emp_id`),
  KEY `salary_id` (`salary_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2146 ;

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`salary_id`, `emp_id`, `salary_basic`, `salary_epf_cont`, `salary_inc`, `salary_waop`, `salary_marital`, `salary_agra`, `salary_col`, `salary_spec_allow`, `salary_alwother`, `salary_code`, `salary_loan_dist`, `salary_loan_hous`, `salary_loan_other`, `sal_mith`, `sal_ounion`) VALUES
(94, 2111, 14200, 0, 145, 0, 1136, 125, 7200, 2130, 10000, 'MP 1-2006-A', 0, 0, 0, 0, 0),
(10, 2145, 14200, 0, 225, 1136, 0, 125, 7200, 2130, 10000, 'PL 1-2006-A', 0, 0, 0, 300, 500),
(98, 2154, 27000, 0, 640, 2160, 2160, 125, 7200, 5400, 10000, 'PL 1-2006-A', 0, 0, 0, 0, 0),
(105, 2187, 22040, 0, 240, 1763.2, 1763.2, 125, 7200, 4408, 10000, 'PL 2-2006-A', 0, 0, 0, 225, 350),
(96, 2222, 28020, 0, 540, 650, 2000, 120, 7200, 10000, 10000, 'MP 2-2006-A', 0, 0, 0, 250, 350),
(103, 2247, 18400, 0, 240, 0, 1472, 125, 7200, 3680, 10000, 'RS 1-2006-A', 0, 0, 0, 225, 350),
(102, 2248, 18200, 0, 240, 1456, 1456, 125, 7200, 3640, 10000, 'PL 1-2006-A', 0, 0, 0, 225, 325),
(104, 2396, 42250, 0, 650, 3380, 0, 125, 7200, 8450, 10000, 'RS 1-2006-A', 0, 0, 0, 225, 350),
(99, 2567, 18000, 0, 240, 1440, 0, 125, 7200, 3600, 10000, 'MN 2-2006-A', 0, 0, 0, 0, 0),
(67, 2594, 14000, 0, 100, 1120, 0, 125, 8000, 2100, 5000, 'MN 7-2006-A', 0, 0, 0, 225, 350),
(106, 2879, 27460, 0, 750, 2196.8, 2196.8, 125, 7200, 5492, 10000, 'MP 2-2006-A', 0, 0, 0, 225, 350),
(44, 3091, 15000, 1200, 100, 1200, 1200, 125, 7200, 3000, 0, 'MN 3-2006-A', 0, 0, 0, 0, 0),
(101, 3212, 19000, 0, 240, 1520, 1520, 125, 7200, 3800, 10000, 'MT 1-2006-A', 0, 0, 0, 0, 0),
(82, 3213, 21160, 0, 100, 1692.8, 1692.8, 125, 7200, 4232, 10000, 'MT 1-2006-A', 0, 14000, 0, 0, 0),
(97, 3264, 28460, 0, 640, 2276.8, 2276.8, 125, 7200, 5692, 10000, 'RS 2-2006-A', 0, 0, 0, 260, 400),
(100, 3333, 53060, 0, 1050, 4244.8, 4244.8, 125, 7200, 10612, 10000, 'MN 7-2006-A', 0, 0, 0, 0, 0),
(92, 3339, 14200, 0, 225, 1136, 0, 125, 7200, 2130, 10000, 'RS 1-2006-A', 0, 0, 0, 0, 0),
(55, 3444, 12780, 0, 100, 0, 0, 125, 7200, 1917, 10000, 'MN 1-2006-A', 0, 0, 0, 0, 0),
(86, 3634, 14620, 0, 100, 1169.6, 1169.6, 125, 7200, 2193, 10000, 'SL 1-2006-A', 0, 0, 0, 0, 0),
(42, 3896, 15100, 0, 640, 0, 1208, 125, 7200, 3020, 10000, 'MN 3-2006-A', 0, 0, 0, 225, 350);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sal_type`
--

CREATE TABLE IF NOT EXISTS `tbl_sal_type` (
  `sal_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `sal_type_code` varchar(11) NOT NULL,
  `sal_initial` double NOT NULL,
  `sal_ini_yrs` int(11) NOT NULL,
  `sal_slab_fst` double NOT NULL,
  `sal_fst_yrs` int(11) NOT NULL,
  `sal_slab_snd` double NOT NULL,
  `sal_snd_yrs` int(11) NOT NULL,
  `sal_slab_trd` double NOT NULL,
  `sal_trd_yrs` int(11) NOT NULL,
  `sal_slab_forth` double NOT NULL,
  `sal_forth_yrs` int(11) NOT NULL,
  `sal_slab_fifth` double NOT NULL,
  `sal_maximum` double NOT NULL,
  PRIMARY KEY (`sal_type_id`),
  UNIQUE KEY `sal_type_code` (`sal_type_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_sal_type`
--

INSERT INTO `tbl_sal_type` (`sal_type_id`, `sal_type_code`, `sal_initial`, `sal_ini_yrs`, `sal_slab_fst`, `sal_fst_yrs`, `sal_slab_snd`, `sal_snd_yrs`, `sal_slab_trd`, `sal_trd_yrs`, `sal_slab_forth`, `sal_forth_yrs`, `sal_slab_fifth`, `sal_maximum`) VALUES
(3, 'PL 1-2006-A', 11730, 10, 120, 10, 130, 10, 145, 12, 160, 0, 0, 17600),
(4, 'MN 1-2006-A', 13120, 10, 145, 11, 170, 10, 240, 10, 320, 0, 0, 22040),
(5, 'MN 2-2006-A', 13990, 10, 145, 11, 170, 6, 240, 14, 320, 0, 0, 23230),
(6, 'MT 1-2006-A', 14425, 10, 145, 11, 170, 6, 240, 14, 320, 0, 0, 23665),
(7, 'MN 7-2006-A', 20030, 11, 365, 18, 500, 0, 0, 0, 0, 0, 0, 33045),
(9, 'TS 1-2006-A', 13120, 10, 145, 5, 180, 0, 0, 0, 0, 0, 0, 15470),
(10, 'MP 1-2006-A', 16820, 12, 320, 13, 360, 10, 550, 0, 0, 0, 0, 30840),
(11, 'RS 1-2006-A', 14280, 7, 145, 10, 180, 17, 240, 0, 0, 0, 0, 21175),
(12, 'RS 2-2006-A', 15850, 7, 180, 2, 240, 8, 320, 17, 375, 0, 0, 26525),
(13, 'MP 2-2006-A', 26990, 9, 650, 9, 790, 0, 0, 0, 0, 0, 0, 39950),
(14, 'PL 2-2006-A', 12210, 10, 130, 10, 145, 10, 160, 10, 170, 0, 0, 18600),
(15, 'SL 1-2006-A', 22000, 10, 240, 5, 640, 5, 1100, 10, 1540, 5, 0, 53000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_role` int(2) NOT NULL,
  `user_status` int(2) NOT NULL,
  `user_last_login` datetime DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `user_role` (`user_role`),
  KEY `emp_id` (`emp_id`),
  KEY `emp_id_2` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`, `user_role`, `user_status`, `user_last_login`, `emp_id`) VALUES
(2145, 'jayasuriya', '0f5cb7b56b8c9a15ab4a1f9cb0b170de', 2, 1, NULL, 2145),
(2396, 'kasun', 'a7ec7f64c1a11102a16ed9ba938d20a8', 1, 1, NULL, 2396),
(2594, 'Jaya', '43f464b84d40094858ca9e0a77bf7cb8', 1, 1, NULL, 2594),
(3212, 'user111', '0c534ed3fff7d2bfd32ee19d84644e3f', 3, 1, '0000-00-00 00:00:00', 3212),
(3264, 'gamage', '996863f1ea9363700631332014f051f5', 1, 0, NULL, 3264),
(3333, 'Chandrasena', '9a3b711aeb11a9e6fbf3393f5353afbf', 2, 1, NULL, 3333),
(3444, 'Perera', '6ff776400acab21780ab646de757ebba', 3, 1, NULL, 3444),
(3634, 'Nalin', '7f6e76a9cde1849d566239e15c334aab', 3, 0, '0000-00-00 00:00:00', 3634),
(3896, 'Kamal', 'aa63b0d5d950361c05012235ab520512', 1, 1, '0000-00-00 00:00:00', 3896);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usrlog`
--

CREATE TABLE IF NOT EXISTS `tbl_usrlog` (
  `logId` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`logId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=176 ;

--
-- Dumping data for table `tbl_usrlog`
--

INSERT INTO `tbl_usrlog` (`logId`, `user_id`, `login_time`) VALUES
(2, 2594, '2015-03-22 18:19:23'),
(4, 3083, '2015-07-03 01:59:38'),
(6, 2594, '2015-03-24 20:06:54'),
(8, 2594, '2015-03-24 15:16:02'),
(10, 2594, '2015-03-25 20:57:28'),
(12, 2594, '2015-03-25 15:16:07'),
(14, 2594, '2015-03-25 18:00:09'),
(16, 2594, '2015-03-25 18:21:21'),
(18, 2594, '2015-03-25 18:45:23'),
(20, 2594, '2015-03-25 18:59:52'),
(22, 2594, '2015-03-27 11:43:37'),
(24, 2594, '2015-03-28 19:22:35'),
(26, 2594, '2015-03-30 09:10:36'),
(28, 2594, '2007-01-01 17:05:53'),
(30, 2594, '2015-04-02 17:08:55'),
(32, 2594, '2015-04-02 17:47:23'),
(34, 2594, '2015-04-03 13:33:11'),
(36, 2594, '2015-04-03 17:04:00'),
(38, 2594, '2015-04-07 15:54:03'),
(40, 2594, '2015-04-07 08:18:01'),
(42, 2594, '2015-04-08 16:06:55'),
(44, 2594, '2015-04-10 17:11:24'),
(46, 2594, '2007-01-01 16:27:54'),
(48, 2594, '2015-05-01 19:04:20'),
(50, 2594, '2015-05-21 09:52:03'),
(52, 2594, '2007-01-01 17:44:55'),
(54, 2594, '2015-06-09 17:32:36'),
(56, 2594, '2015-06-12 09:22:09'),
(58, 2594, '2015-06-12 09:48:42'),
(60, 2594, '2015-06-14 19:12:50'),
(62, 2594, '2015-06-14 17:40:21'),
(64, 2594, '2015-06-15 13:22:19'),
(66, 2594, '2015-06-15 13:35:56'),
(68, 2594, '2015-06-15 17:25:20'),
(70, 2594, '2015-06-19 11:21:30'),
(72, 2594, '2015-06-22 11:07:34'),
(74, 2594, '2015-06-23 17:33:41'),
(76, 2594, '2015-06-24 08:29:45'),
(78, 2594, '2015-06-27 16:03:55'),
(80, 2594, '2015-07-02 10:50:09'),
(82, 3083, '2015-07-03 10:54:09'),
(84, 3896, '2015-07-03 11:04:58'),
(86, 2594, '2015-07-03 12:16:40'),
(88, 3896, '2015-07-06 19:54:24'),
(90, 2594, '2015-07-07 10:36:53'),
(92, 3896, '2015-07-09 10:23:18'),
(94, 3896, '2015-07-10 16:02:56'),
(96, 3896, '2015-07-12 19:41:13'),
(97, 3896, '2015-07-13 10:39:22'),
(98, 3896, '2015-07-13 13:11:53'),
(99, 3896, '2015-07-14 10:10:46'),
(100, 3896, '2015-07-16 13:55:31'),
(101, 2594, '2015-07-16 14:04:43'),
(102, 2594, '2015-07-16 15:59:18'),
(103, 2594, '2015-07-16 16:03:32'),
(104, 2594, '2015-07-16 17:00:53'),
(105, 2594, '2015-07-17 09:20:18'),
(106, 2594, '2015-07-19 18:09:41'),
(107, 3212, '2015-07-19 18:12:08'),
(108, 2594, '2015-07-19 08:45:26'),
(109, 2594, '2015-07-23 13:19:41'),
(110, 3212, '2015-07-23 17:09:31'),
(111, 2594, '2015-07-23 17:09:42'),
(112, 2594, '2015-07-26 11:43:15'),
(113, 2594, '2015-07-27 19:08:54'),
(114, 2594, '2015-07-27 17:11:51'),
(115, 2594, '2015-07-27 17:41:34'),
(116, 2594, '2015-07-28 08:25:53'),
(117, 3896, '2015-07-29 19:03:18'),
(118, 2594, '2015-07-29 19:01:56'),
(119, 3896, '2015-07-30 09:10:35'),
(120, 2594, '2015-08-02 09:10:17'),
(121, 2594, '2015-08-02 09:20:30'),
(122, 2594, '2015-08-05 19:50:08'),
(123, 2594, '2015-08-05 09:32:22'),
(124, 3896, '2015-08-05 09:32:35'),
(125, 2594, '2015-08-05 15:12:05'),
(126, 2594, '2015-08-05 17:43:32'),
(127, 2594, '2015-08-08 16:16:37'),
(128, 2594, '2015-08-10 16:39:13'),
(129, 2594, '2015-08-13 17:31:06'),
(130, 3896, '2015-08-14 15:53:35'),
(131, 2594, '2015-08-14 18:33:43'),
(132, 3264, '2015-08-14 18:41:49'),
(133, 2145, '2015-08-14 08:02:32'),
(134, 2145, '2015-08-15 18:01:12'),
(135, 2145, '2015-08-15 18:08:26'),
(136, 2145, '2015-08-15 18:09:17'),
(137, 2145, '2015-08-15 18:19:01'),
(138, 2145, '2015-08-19 18:13:44'),
(139, 3896, '2015-08-19 18:22:10'),
(140, 3896, '2015-08-19 18:28:23'),
(141, 2145, '2015-08-19 18:30:32'),
(142, 2145, '2015-08-19 09:01:12'),
(143, 3212, '2015-08-19 09:01:46'),
(144, 2594, '2015-08-21 16:00:11'),
(145, 2594, '2015-08-21 10:32:11'),
(146, 2145, '2015-08-22 09:58:05'),
(147, 2145, '2015-08-22 12:32:30'),
(148, 2145, '2015-08-22 16:07:16'),
(149, 2145, '2015-08-23 12:40:08'),
(150, 2145, '2015-08-24 09:33:46'),
(151, 2145, '2015-08-24 16:36:20'),
(152, 2145, '2015-08-24 08:12:27'),
(153, 2145, '2015-08-25 09:56:24'),
(154, 2145, '2015-08-25 15:46:43'),
(155, 3212, '2015-08-25 16:59:03'),
(156, 2594, '2015-08-25 17:04:39'),
(157, 2145, '2015-08-25 17:22:23'),
(158, 2145, '2015-08-26 09:52:00'),
(159, 3333, '2015-08-26 09:53:47'),
(160, 3212, '2015-08-26 10:50:16'),
(161, 3333, '2015-08-26 10:58:53'),
(162, 3896, '2015-08-26 10:59:24'),
(163, 3896, '2015-08-26 17:22:40'),
(164, 3896, '2015-08-27 16:33:16'),
(165, 3896, '2015-08-28 16:12:31'),
(166, 3896, '2015-08-29 11:37:52'),
(167, 3896, '2015-08-29 11:38:36'),
(168, 3333, '2015-08-29 11:39:24'),
(169, 2594, '2015-08-29 11:39:43'),
(170, 3333, '2015-08-29 11:42:02'),
(171, 2145, '2015-08-29 11:44:43'),
(172, 2594, '2015-08-29 11:52:32'),
(173, 2594, '2015-08-29 16:39:54'),
(174, 2396, '2015-08-29 18:18:53'),
(175, 2396, '2015-08-29 19:16:12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  ADD CONSTRAINT `emp_id` FOREIGN KEY (`emp_id`) REFERENCES `tbl_employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
