-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2016 at 06:31 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kafala`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `username`, `password`, `type`) VALUES
(68, 'dfhggh fgh fgh', 'lkjh', '1bbd886460827015e5d605ed44252251', 4),
(69, 'أبي حامد إدريس', 'أبي', '1bbd886460827015e5d605ed44252251', 4),
(70, 'fgh', 'fgh', 'e11170b8cbd2d74102651cb967fa28e5', 4),
(71, 'fgh', 'fgsgsd', 'e11170b8cbd2d74102651cb967fa28e5', 4),
(72, 'fgh', 'dsg', 'e11170b8cbd2d74102651cb967fa28e5', 4),
(73, 'fgh', 'jhkdsg', 'adbc91a43e988a3b5b745b8529a90b61', 4),
(74, 'aonf', 'dnkf', '134fb0bf3bdd54ee9098f4cbc4351b9a', 4),
(75, 'aonf', 'fgdf8', '134fb0bf3bdd54ee9098f4cbc4351b9a', 4),
(76, 'lkhsfjk', 'skjlkflasdl', '664fae06a748e656511d55b59fc6f85e', 4),
(77, 'lkhsfjk', 'kljhlkjhl', '16f16bb4490a1e00dc110e5699f05b0c', 4);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `qualifier_name` varchar(500) NOT NULL,
  `organizaton` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `preacherID` int(10) NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `preacherID` (`preacherID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `experience`
--


-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `family_id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `saving` int(11) NOT NULL,
  `father_first_name` varchar(50) NOT NULL,
  `father_middle_name` varchar(50) NOT NULL,
  `father_last_name` varchar(50) NOT NULL,
  `father_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `social_state` int(50) NOT NULL,
  `father_dead_date` date NOT NULL,
  `father_dead_cause` varchar(50) NOT NULL,
  `father_work` varchar(50) NOT NULL,
  `supporter_first_name` varchar(50) NOT NULL,
  `supporter_meddle_name` varchar(50) NOT NULL,
  `supporter_last_name` varchar(50) NOT NULL,
  `supporter_4th_name` varchar(50) NOT NULL,
  `supporter_birth_date` date NOT NULL,
  `supporter_sex` varchar(6) NOT NULL,
  `supporter_state` varchar(50) NOT NULL,
  `supporter_relation` varchar(50) NOT NULL,
  `supporter_work` varchar(50) NOT NULL,
  `residence_state` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `section` int(11) NOT NULL,
  `house_no` int(11) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  UNIQUE KEY `family_id` (`family_id`),
  KEY `id` (`family_id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `family`
--


-- --------------------------------------------------------

--
-- Table structure for table `finalfamily`
--

CREATE TABLE IF NOT EXISTS `finalfamily` (
  `family_id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `saving` int(11) NOT NULL,
  `father_first_name` varchar(50) NOT NULL,
  `father_middle_name` varchar(50) NOT NULL,
  `father_last_name` varchar(50) NOT NULL,
  `father_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `social_state` int(50) NOT NULL,
  `father_dead_date` date NOT NULL,
  `father_dead_cause` varchar(50) NOT NULL,
  `father_work` varchar(50) NOT NULL,
  `supporter_first_name` varchar(50) NOT NULL,
  `supporter_meddle_name` varchar(50) NOT NULL,
  `supporter_last_name` varchar(50) NOT NULL,
  `supporter_4th_name` varchar(50) NOT NULL,
  `supporter_birth_date` date NOT NULL,
  `supporter_sex` varchar(6) NOT NULL,
  `supporter_state` varchar(50) NOT NULL,
  `supporter_relation` varchar(50) NOT NULL,
  `supporter_work` varchar(50) NOT NULL,
  `residence_state` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `section` int(11) NOT NULL,
  `house_no` int(11) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  `head_dep_name` varchar(100) NOT NULL,
  `head_dep_date` date NOT NULL,
  UNIQUE KEY `family_id` (`family_id`),
  KEY `id` (`family_id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `finalfamily`
--


-- --------------------------------------------------------

--
-- Table structure for table `finalorphan`
--

CREATE TABLE IF NOT EXISTS `finalorphan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `saving` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `meddle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `last_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `mother_first_name` varchar(50) NOT NULL,
  `mother_middle_name` varchar(50) NOT NULL,
  `mother_last_name` varchar(50) NOT NULL,
  `mother_4th_name` varchar(50) NOT NULL,
  `mother_Birth_date` date NOT NULL,
  `mother_state` varchar(100) NOT NULL,
  `father_dead_date` date NOT NULL,
  `father_dead_cause` varchar(100) NOT NULL,
  `father_work` varchar(100) NOT NULL,
  `residence_state` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `section` int(10) NOT NULL,
  `house_no` int(50) NOT NULL,
  `phone1` int(20) NOT NULL,
  `phone2` int(20) NOT NULL,
  `studing_state` varchar(50) NOT NULL,
  `nonstuding_cause` varchar(50) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `quran_parts` int(10) NOT NULL,
  `health_state` varchar(50) NOT NULL,
  `ill_cause` varchar(50) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  `head_dep_name` varchar(100) NOT NULL,
  `head_dep_date` date NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `finalorphan`
--


-- --------------------------------------------------------

--
-- Table structure for table `finalpreacher`
--

CREATE TABLE IF NOT EXISTS `finalpreacher` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `saving` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `meddle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `last_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `male_members_no` int(10) NOT NULL,
  `female_members_no` int(10) NOT NULL,
  `residence_state` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `section` int(10) NOT NULL,
  `house_no` int(10) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `qualify_name` varchar(50) NOT NULL,
  `qualify_date` varchar(50) NOT NULL,
  `qualify_rating` varchar(50) NOT NULL,
  `quran_parts` int(11) NOT NULL,
  `Issuer` varchar(50) NOT NULL,
  `current_work` varchar(50) NOT NULL,
  `Joining_Date` date NOT NULL,
  `health_state` varchar(50) NOT NULL,
  `ill_cause` varchar(50) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  `head_dep_name` varchar(100) NOT NULL,
  `head_dep_date` date NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `residence_state` (`residence_state`),
  KEY `warranty_organization` (`warranty_organization`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `finalpreacher`
--


-- --------------------------------------------------------

--
-- Table structure for table `finalstudent`
--

CREATE TABLE IF NOT EXISTS `finalstudent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `saving` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `meddle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `last_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `father_dead_date` date NOT NULL,
  `father_dead_cause` varchar(100) NOT NULL,
  `father_work` varchar(100) NOT NULL,
  `sisters_no` int(20) NOT NULL,
  `brothers_no` int(20) NOT NULL,
  `residence_state` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `section` int(20) NOT NULL,
  `house_no` int(20) NOT NULL,
  `phone1` int(20) NOT NULL,
  `phone2` int(20) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `uni_name` varchar(100) NOT NULL,
  `level` int(20) NOT NULL,
  `year` int(20) NOT NULL,
  `last_result` varchar(100) NOT NULL,
  `quran_parts` int(20) NOT NULL,
  `study_year_no` int(20) NOT NULL,
  `study_date_start` year(4) NOT NULL,
  `expected_grad` year(4) NOT NULL,
  `health_state` varchar(50) NOT NULL,
  `ill_cause` varchar(50) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  `head_dep_name` varchar(100) NOT NULL,
  `head_dep_date` date NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `finalstudent`
--


-- --------------------------------------------------------

--
-- Table structure for table `f_member`
--

CREATE TABLE IF NOT EXISTS `f_member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `study_level` varchar(50) NOT NULL,
  `health_state` varchar(50) NOT NULL,
  `familyID` int(11) NOT NULL,
  KEY `id` (`member_id`),
  KEY `familyID` (`familyID`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `f_member`
--


-- --------------------------------------------------------

--
-- Table structure for table `orphan`
--

CREATE TABLE IF NOT EXISTS `orphan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `saving` int(11) NOT NULL,
  `last_sponsorship_date` date NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `meddle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `last_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `mother_first_name` varchar(50) NOT NULL,
  `mother_middle_name` varchar(50) NOT NULL,
  `mother_last_name` varchar(50) NOT NULL,
  `mother_4th_name` varchar(50) NOT NULL,
  `mother_Birth_date` date NOT NULL,
  `mother_state` varchar(100) NOT NULL,
  `father_dead_date` date NOT NULL,
  `father_dead_cause` varchar(100) NOT NULL,
  `father_work` varchar(100) NOT NULL,
  `residence_state` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `section` int(10) NOT NULL,
  `house_no` int(50) NOT NULL,
  `phone1` int(20) NOT NULL,
  `phone2` int(20) NOT NULL,
  `studing_state` varchar(50) NOT NULL,
  `nonstuding_cause` varchar(50) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `quran_parts` int(10) NOT NULL,
  `health_state` varchar(50) NOT NULL,
  `ill_cause` varchar(50) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `orphan`
--

INSERT INTO `orphan` (`id`, `state`, `warranty_organization`, `saving`, `last_sponsorship_date`, `first_name`, `meddle_name`, `last_name`, `last_4th_name`, `birth_date`, `sex`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_4th_name`, `mother_Birth_date`, `mother_state`, `father_dead_date`, `father_dead_cause`, `father_work`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `studing_state`, `nonstuding_cause`, `school_name`, `level`, `year`, `quran_parts`, `health_state`, `ill_cause`, `data_entery_name`, `data_entery_date`) VALUES
(7, '', 1, 616, '2016-04-25', '16-04-22', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 1, '', '', 0, 0, 0, 0, '', '', '', '', '', 0, '', '', '', '0000-00-00'),
(8, '', 2, 596, '2016-04-25', '16-04-22', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 1, '', '', 0, 0, 0, 0, '', '', '', '', '', 0, '', '', '', '0000-00-00'),
(9, '1', 1, 176, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', '', '', '', '', 1, '1', '', 'user', '2023-04-16'),
(10, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', '', '', '', '', 1, '1', 'لا يوجد', 'user', '2023-04-16'),
(11, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '0', '', '', '', '', 1, '0', '', 'user', '2023-04-16'),
(12, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '0', '', 'لا يوجد', 'لا يوجد', 'لا يوجد', 1, '0', '', 'user', '2023-04-16'),
(13, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '0', 'السبب', 'لا يوجد', 'لا يوجد', 'لا يوجد', 1, '0', '', 'user', '2023-04-16'),
(14, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '0', 'السبب', 'لا يوجد', 'لا يوجد', 'لا يوجد', 1, '0', '', 'user', '2023-04-16'),
(15, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '0', 'السبب', 'لا يوجد', 'لا يوجد', 'لا يوجد', 1, '0', '', 'user', '2023-04-16'),
(16, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '0', 'السبب', 'لا يوجد', 'لا يوجد', 'لا يوجد', 1, '0', '', 'user', '2023-04-16'),
(17, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '0', 'السبب', 'لا يوجد', 'لا يوجد', 'لا يوجد', 1, '0', 'المرض', 'user', '2023-04-16'),
(18, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', 'لا يوجد', '', '', '', 1, '1', 'لا يوجد', 'user', '2023-04-16'),
(19, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', 'لا يوجد', '', '', '', 1, '1', 'لا يوجد', 'user', '2023-04-16'),
(20, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', 'لا يوجد', '', '', '', 1, '0', '', 'user', '2023-04-16'),
(21, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', 'لا يوجد', '', '', '', 1, '1', 'لا يوجد', 'user', '2023-04-16'),
(22, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', 'لا يوجد', '', '', '', 1, '1', 'لا يوجد', 'user', '2023-04-16'),
(23, '1', 1, 166, '2016-04-25', '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', 'لا يوجد', '', '', '', 1, '0', 'sadfsdf', 'user', '2023-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `preacher`
--

CREATE TABLE IF NOT EXISTS `preacher` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `saving` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `meddle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `last_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `male_members_no` int(10) NOT NULL,
  `female_members_no` int(10) NOT NULL,
  `residence_state` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `section` int(10) NOT NULL,
  `house_no` int(10) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `qualify_name` varchar(50) NOT NULL,
  `qualify_date` varchar(50) NOT NULL,
  `qualify_rating` varchar(50) NOT NULL,
  `quran_parts` int(11) NOT NULL,
  `Issuer` varchar(50) NOT NULL,
  `current_work` varchar(50) NOT NULL,
  `Joining_Date` date NOT NULL,
  `health_state` varchar(50) NOT NULL,
  `ill_cause` varchar(50) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `residence_state` (`residence_state`),
  KEY `warranty_organization` (`warranty_organization`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `preacher`
--

INSERT INTO `preacher` (`id`, `type`, `state`, `warranty_organization`, `saving`, `first_name`, `meddle_name`, `last_name`, `last_4th_name`, `birth_date`, `sex`, `male_members_no`, `female_members_no`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `qualify_name`, `qualify_date`, `qualify_rating`, `quran_parts`, `Issuer`, `current_work`, `Joining_Date`, `health_state`, `ill_cause`, `data_entery_name`, `data_entery_date`) VALUES
(1, 0, 'state rrrrrrrrrrr', 1, 1, 'first name', 's name', ' l name', ' 4 name', '2000-12-10', 'female', 1, 2, 1, 'khartoum', 'mamoorah', 1, 5, 18, 200, 'sss', '2000-12-10', 'very good ', 4, '44', '0', '2000-12-10', 'health state', 'health', 'ddddd', '2000-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `sibiling`
--

CREATE TABLE IF NOT EXISTS `sibiling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orphan_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `state` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `orphan_id` (`orphan_id`),
  KEY `orphan_id_2` (`orphan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `sibiling`
--

INSERT INTO `sibiling` (`id`, `orphan_id`, `name`, `sex`, `birth_date`, `state`) VALUES
(5, 23, 'dfhgfh', '0', '1950-01-01', '1'),
(6, 23, 'dfhgfh', '0', '1950-01-01', '1'),
(7, 23, 'dfhgfh', '0', '1950-01-01', '1'),
(8, 23, 'dfhgfh', '0', '1950-01-01', '1'),
(9, 23, 'خالد', '0', '1950-01-01', '1'),
(10, 23, 'خالد', '0', '1950-01-01', '1'),
(11, 23, 'خالد', '0', '1950-01-01', '1'),
(12, 23, 'Hpl]', '0', '1950-01-01', '1'),
(13, 23, 'أبي', '0', '1950-01-01', '1'),
(14, 23, 'أحمد', '0', '1950-01-01', '1'),
(15, 23, 'أحمد', '0', '1950-01-01', '1'),
(16, 23, 'خالدأحمد', '0', '1950-01-01', '1'),
(17, 23, 'خالدأحمد', '0', '1950-01-01', '1'),
(18, 23, 'Hpl]', '0', '1950-01-01', '1'),
(19, 23, 'أحمد', '0', '1950-01-01', '1'),
(20, 23, 'أحمد', '0', '1950-01-01', '1'),
(21, 23, 'بلاأحمد', '0', '1950-01-01', '1'),
(22, 23, 'بلاأحمد', '0', '1950-01-01', '1'),
(23, 23, 'بلاأحمد', '0', '1950-01-01', '1'),
(24, 7, '', '0', '1950-01-01', '1'),
(25, 7, '', '0', '1950-01-01', '1'),
(26, 7, '''lfk'';', '0', '1950-01-01', '1'),
(27, 7, '''lfk'';', '0', '1950-01-01', '1'),
(28, 7, '''lfk'';', '0', '1950-01-01', '1'),
(29, 7, 'lolo', '0', '1950-01-01', '1'),
(30, 7, '', '0', '1950-01-01', '1'),
(31, 7, 'llll', '0', '1950-01-01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `numberOFSponsored` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `name`, `numberOFSponsored`) VALUES
(1, 'jjj', 5),
(2, 'df', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship`
--

CREATE TABLE IF NOT EXISTS `sponsorship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `saving` int(11) NOT NULL,
  `sponsor` int(11) NOT NULL,
  `month_no` int(11) NOT NULL,
  `sponsored` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sponsor` (`sponsor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `sponsorship`
--

INSERT INTO `sponsorship` (`id`, `amount`, `date`, `saving`, `sponsor`, `month_no`, `sponsored`) VALUES
(50, 100, '0000-00-00', 100, 1, 1, 1),
(51, 100, '0000-00-00', 100, 1, 1, 2),
(52, 90, '2016-04-21', 10, 1, 1, 1),
(53, 0, '2016-04-21', 11, 1, 1, 3),
(54, 0, '2016-04-21', 1, 1, 1, 1),
(55, 0, '2016-04-21', 1, 1, 1, 1),
(56, 0, '2016-04-21', 50, 1, 1, 1),
(57, 0, '2016-04-21', 50, 1, 1, 1),
(58, 0, '2016-04-22', 1, 1, 1, 1),
(59, 0, '2016-04-22', 1, 1, 1, 1),
(60, 0, '2016-04-22', 1, 1, 1, 1),
(62, 0, '2016-04-22', 1, 1, 1, 1),
(63, 0, '2016-04-22', 1, 1, 1, 1),
(64, -10, '2016-04-22', 11, 1, 1, 1),
(65, -10, '2016-04-22', 11, 1, 1, 1),
(66, -10, '2016-04-22', 11, 1, 1, 1),
(67, 89, '2016-04-22', 11, 1, 1, 1),
(68, 89, '2016-04-22', 11, 1, 1, 1),
(69, 89, '2016-04-22', 11, 1, 1, 1),
(70, 89, '2016-04-22', 11, 1, 1, 2),
(71, 0, '2016-04-22', 50, 1, 1, 1),
(72, 0, '2016-04-22', 50, 1, 1, 1),
(73, 0, '2016-04-22', 50, 1, 1, 1),
(74, 0, '2016-04-22', 50, 1, 1, 1),
(75, 0, '2016-04-22', 50, 1, 1, 1),
(76, 0, '2016-04-22', 50, 1, 1, 1),
(77, 0, '2016-04-22', 50, 1, 1, 1),
(78, 0, '2016-04-22', 50, 1, 1, 1),
(79, 0, '2016-04-22', 50, 1, 1, 1),
(80, 0, '2016-04-22', 50, 1, 1, 1),
(81, 0, '2016-04-22', 50, 1, 1, 1),
(82, 91, '2016-04-23', 10, 1, 1, 1),
(83, 91, '2016-04-23', 10, 1, 1, 1),
(84, 91, '2016-04-23', 10, 1, 1, 1),
(85, 91, '2016-04-23', 10, 1, 1, 1),
(86, 91, '2016-04-23', 10, 1, 1, 1),
(87, 0, '2016-04-25', 12, 1, 1, 1),
(88, 0, '2016-04-25', 12, 1, 1, 1),
(89, 0, '2016-04-25', 12, 1, 1, 1),
(90, 0, '2016-04-25', 12, 1, 1, 1),
(91, 0, '2016-04-25', 12, 1, 1, 1),
(92, 0, '2016-04-25', 12, 1, 1, 1),
(93, 0, '2016-04-25', 12, 1, 1, 1),
(94, 0, '2016-04-25', 12, 1, 1, 1),
(95, 0, '2016-04-25', 12, 1, 1, 1),
(96, 0, '2016-04-25', 12, 1, 1, 1),
(97, 11, '2016-04-25', 1, 1, 1, 1),
(98, 11, '2016-04-25', 1, 1, 1, 1),
(99, 11, '2016-04-25', 1, 1, 1, 1),
(100, 11, '2016-04-25', 1, 1, 1, 1),
(101, 11, '2016-04-25', 1, 1, 1, 1),
(102, 11, '2016-04-25', 1, 1, 1, 1),
(103, 11, '2016-04-25', 1, 1, 1, 1),
(104, 11, '2016-04-25', 1, 1, 1, 1),
(105, 11, '2016-04-25', 1, 1, 1, 1),
(106, 11, '2016-04-25', 1, 1, 1, 1),
(107, 11, '2016-04-25', 1, 1, 1, 1),
(108, 11, '2016-04-25', 1, 1, 1, 1),
(109, 11, '2016-04-25', 1, 1, 1, 1),
(110, 11, '2016-04-25', 1, 1, 1, 1),
(111, 11, '2016-04-25', 1, 1, 1, 1),
(112, 11, '2016-04-25', 1, 1, 1, 1),
(113, 11, '2016-04-25', 1, 1, 1, 1),
(114, 11, '2016-04-25', 1, 1, 1, 1),
(115, 11, '2016-04-25', 1, 1, 1, 1),
(116, 11, '2016-04-25', 1, 1, 1, 1),
(117, 11, '2016-04-25', 1, 1, 1, 1),
(118, 11, '2016-04-25', 1, 1, 1, 1),
(119, 11, '2016-04-25', 1, 1, 1, 1),
(120, 11, '2016-04-25', 1, 1, 1, 1),
(121, 11, '2016-04-25', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sponsorships`
--

CREATE TABLE IF NOT EXISTS `sponsorships` (
  `sponsorship` int(11) NOT NULL,
  `sponsored` int(11) NOT NULL,
  KEY `sponsorship` (`sponsorship`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sponsorships`
--

INSERT INTO `sponsorships` (`sponsorship`, `sponsored`) VALUES
(82, 7),
(82, 8),
(82, 9),
(82, 10),
(82, 11),
(82, 12),
(82, 13),
(82, 14),
(82, 15),
(82, 16),
(82, 17),
(82, 18),
(82, 19),
(82, 20),
(82, 21),
(82, 22),
(83, 7),
(82, 23),
(83, 8),
(84, 7),
(83, 9),
(85, 7),
(84, 8),
(86, 7),
(83, 10),
(85, 8),
(84, 9),
(86, 8),
(83, 11),
(85, 9),
(84, 10),
(86, 9),
(83, 12),
(85, 10),
(84, 11),
(86, 10),
(83, 13),
(85, 11),
(86, 11),
(84, 12),
(83, 14),
(85, 12),
(86, 12),
(84, 13),
(83, 15),
(85, 13),
(86, 13),
(84, 14),
(83, 16),
(85, 14),
(86, 14),
(84, 15),
(83, 17),
(85, 15),
(84, 16),
(86, 15),
(83, 18),
(85, 16),
(84, 17),
(86, 16),
(83, 19),
(85, 17),
(86, 17),
(84, 18),
(83, 20),
(84, 19),
(85, 18),
(86, 18),
(83, 21),
(85, 19),
(84, 20),
(86, 19),
(83, 22),
(84, 21),
(85, 20),
(86, 20),
(83, 23),
(84, 22),
(85, 21),
(86, 21),
(84, 23),
(85, 22),
(86, 22),
(85, 23),
(86, 23),
(87, 7),
(87, 8),
(87, 9),
(87, 10),
(87, 11),
(87, 12),
(87, 13),
(87, 14),
(87, 15),
(87, 16),
(87, 17),
(87, 18),
(87, 19),
(87, 20),
(87, 21),
(87, 22),
(87, 23),
(88, 7),
(88, 8),
(88, 9),
(88, 10),
(88, 11),
(88, 12),
(88, 13),
(88, 14),
(88, 15),
(88, 16),
(88, 17),
(88, 18),
(88, 19),
(88, 20),
(88, 21),
(88, 22),
(88, 23),
(89, 7),
(89, 8),
(89, 9),
(89, 10),
(89, 11),
(89, 12),
(89, 13),
(89, 14),
(89, 15),
(89, 16),
(89, 17),
(89, 18),
(89, 19),
(89, 20),
(89, 21),
(89, 22),
(89, 23),
(90, 7),
(90, 8),
(90, 9),
(90, 10),
(90, 11),
(90, 12),
(90, 13),
(90, 14),
(90, 15),
(90, 16),
(90, 17),
(90, 18),
(90, 19),
(90, 20),
(90, 21),
(90, 22),
(90, 23),
(91, 7),
(91, 8),
(91, 9),
(91, 10),
(91, 11),
(91, 12),
(91, 13),
(91, 14),
(91, 15),
(91, 16),
(91, 17),
(91, 18),
(91, 19),
(91, 20),
(91, 21),
(91, 22),
(91, 23),
(92, 7),
(92, 8),
(92, 9),
(92, 10),
(92, 11),
(92, 12),
(92, 13),
(92, 14),
(92, 15),
(92, 16),
(92, 17),
(92, 18),
(92, 19),
(92, 20),
(92, 21),
(92, 22),
(92, 23),
(93, 7),
(93, 8),
(93, 9),
(93, 10),
(93, 11),
(93, 12),
(93, 13),
(93, 14),
(93, 15),
(93, 16),
(93, 17),
(93, 18),
(93, 19),
(93, 20),
(93, 21),
(93, 22),
(93, 23),
(94, 7),
(94, 8),
(94, 9),
(94, 10),
(94, 11),
(94, 12),
(94, 13),
(94, 14),
(94, 15),
(94, 16),
(94, 17),
(94, 18),
(94, 19),
(94, 20),
(94, 21),
(94, 22),
(94, 23),
(95, 7),
(95, 8),
(95, 9),
(95, 10),
(95, 11),
(95, 12),
(95, 13),
(95, 14),
(95, 15),
(95, 16),
(95, 17),
(95, 18),
(95, 19),
(95, 20),
(95, 21),
(95, 22),
(95, 23),
(96, 7),
(96, 8),
(96, 9),
(96, 10),
(96, 11),
(96, 12),
(96, 13),
(96, 14),
(96, 15),
(96, 16),
(96, 17),
(96, 18),
(96, 19),
(96, 20),
(96, 21),
(96, 22),
(96, 23),
(97, 7),
(97, 8),
(97, 9),
(97, 10),
(97, 11),
(97, 12),
(97, 13),
(97, 14),
(97, 15),
(97, 16),
(97, 17),
(97, 18),
(97, 19),
(97, 20),
(97, 21),
(97, 22),
(97, 23),
(98, 7),
(98, 8),
(98, 9),
(98, 10),
(98, 11),
(98, 12),
(98, 13),
(98, 14),
(98, 15),
(98, 16),
(98, 17),
(98, 18),
(98, 19),
(98, 20),
(98, 21),
(98, 22),
(98, 23),
(99, 7),
(99, 8),
(99, 9),
(99, 10),
(99, 11),
(99, 12),
(99, 13),
(99, 14),
(99, 15),
(99, 16),
(99, 17),
(99, 18),
(99, 19),
(99, 20),
(99, 21),
(99, 22),
(99, 23),
(100, 7),
(100, 8),
(100, 9),
(100, 10),
(100, 11),
(100, 12),
(100, 13),
(100, 14),
(100, 15),
(100, 16),
(100, 17),
(100, 18),
(100, 19),
(100, 20),
(100, 21),
(100, 22),
(100, 23),
(101, 7),
(101, 8),
(101, 9),
(101, 10),
(101, 11),
(101, 12),
(101, 13),
(101, 14),
(101, 15),
(101, 16),
(101, 17),
(101, 18),
(101, 19),
(101, 20),
(101, 21),
(101, 22),
(101, 23),
(102, 7),
(102, 8),
(102, 9),
(102, 10),
(102, 11),
(102, 12),
(102, 13),
(102, 14),
(102, 15),
(102, 16),
(102, 17),
(102, 18),
(102, 19),
(102, 20),
(102, 21),
(102, 22),
(102, 23),
(103, 7),
(103, 8),
(103, 9),
(103, 10),
(103, 11),
(103, 12),
(103, 13),
(103, 14),
(103, 15),
(103, 16),
(103, 17),
(103, 18),
(103, 19),
(103, 20),
(103, 21),
(103, 22),
(103, 23),
(104, 7),
(104, 8),
(104, 9),
(104, 10),
(104, 11),
(104, 12),
(104, 13),
(104, 14),
(104, 15),
(104, 16),
(104, 17),
(104, 18),
(104, 19),
(104, 20),
(104, 21),
(104, 22),
(104, 23),
(105, 7),
(105, 8),
(105, 9),
(105, 10),
(105, 11),
(105, 12),
(105, 13),
(105, 14),
(105, 15),
(105, 16),
(105, 17),
(105, 18),
(105, 19),
(105, 20),
(105, 21),
(105, 22),
(105, 23),
(106, 7),
(106, 8),
(106, 9),
(106, 10),
(106, 11),
(106, 12),
(106, 13),
(106, 14),
(106, 15),
(106, 16),
(106, 17),
(106, 18),
(106, 19),
(106, 20),
(106, 21),
(106, 22),
(106, 23),
(107, 7),
(107, 8),
(107, 9),
(107, 10),
(107, 11),
(107, 12),
(107, 13),
(107, 14),
(107, 15),
(107, 16),
(107, 17),
(107, 18),
(107, 19),
(107, 20),
(107, 21),
(107, 22),
(107, 23),
(108, 7),
(108, 8),
(108, 9),
(108, 10),
(108, 11),
(108, 12),
(108, 13),
(108, 14),
(108, 15),
(108, 16),
(108, 17),
(108, 18),
(108, 19),
(108, 20),
(108, 21),
(108, 22),
(108, 23),
(109, 7),
(109, 8),
(109, 9),
(109, 10),
(109, 11),
(109, 12),
(109, 13),
(109, 14),
(109, 15),
(109, 16),
(109, 17),
(109, 18),
(109, 19),
(109, 20),
(109, 21),
(109, 22),
(109, 23),
(110, 7),
(110, 8),
(110, 9),
(110, 10),
(110, 11),
(110, 12),
(110, 13),
(110, 14),
(110, 15),
(110, 16),
(110, 17),
(110, 18),
(110, 19),
(110, 20),
(110, 21),
(110, 22),
(110, 23),
(111, 7),
(111, 8),
(111, 9),
(111, 10),
(111, 11),
(111, 12),
(111, 13),
(111, 14),
(111, 15),
(111, 16),
(111, 17),
(111, 18),
(111, 19),
(111, 20),
(111, 21),
(111, 22),
(111, 23),
(112, 7),
(112, 8),
(112, 9),
(112, 10),
(112, 11),
(112, 12),
(112, 13),
(112, 14),
(112, 15),
(112, 16),
(112, 17),
(112, 18),
(112, 19),
(112, 20),
(112, 21),
(112, 22),
(112, 23),
(113, 7),
(113, 8),
(113, 9),
(113, 10),
(113, 11),
(113, 12),
(113, 13),
(113, 14),
(113, 15),
(113, 16),
(113, 17),
(113, 18),
(113, 19),
(113, 20),
(113, 21),
(113, 22),
(113, 23),
(114, 7),
(114, 8),
(114, 9),
(114, 10),
(114, 11),
(114, 12),
(114, 13),
(114, 14),
(114, 15),
(114, 16),
(114, 17),
(114, 18),
(114, 19),
(114, 20),
(114, 21),
(114, 22),
(114, 23),
(115, 7),
(115, 8),
(115, 9),
(115, 10),
(115, 11),
(115, 12),
(115, 13),
(115, 14),
(115, 15),
(115, 16),
(115, 17),
(115, 18),
(115, 19),
(115, 20),
(115, 21),
(115, 22),
(115, 23),
(116, 7),
(116, 8),
(116, 9),
(116, 10),
(116, 11),
(116, 12),
(116, 13),
(116, 14),
(116, 15),
(116, 16),
(116, 17),
(116, 18),
(116, 19),
(116, 20),
(116, 21),
(116, 22),
(116, 23),
(117, 7),
(117, 8),
(117, 9),
(117, 10),
(117, 11),
(117, 12),
(117, 13),
(117, 14),
(117, 15),
(117, 16),
(117, 17),
(117, 18),
(117, 19),
(117, 20),
(117, 21),
(117, 22),
(117, 23),
(118, 7),
(118, 8),
(118, 9),
(118, 10),
(118, 11),
(118, 12),
(118, 13),
(118, 14),
(118, 15),
(118, 16),
(118, 17),
(118, 18),
(118, 19),
(118, 20),
(118, 21),
(118, 22),
(118, 23),
(119, 7),
(119, 8),
(119, 9),
(119, 10),
(119, 11),
(119, 12),
(119, 13),
(119, 14),
(119, 15),
(119, 16),
(119, 17),
(119, 18),
(119, 19),
(119, 20),
(119, 21),
(119, 22),
(119, 23),
(120, 7),
(120, 8),
(120, 9),
(120, 10),
(120, 11),
(120, 12),
(120, 13),
(120, 14),
(120, 15),
(120, 16),
(120, 17),
(120, 18),
(120, 19),
(120, 20),
(120, 21),
(120, 22),
(120, 23),
(121, 7),
(121, 8),
(121, 9),
(121, 10),
(121, 11),
(121, 12),
(121, 13),
(121, 14),
(121, 15),
(121, 16),
(121, 17),
(121, 18),
(121, 19),
(121, 20),
(121, 21),
(121, 22),
(121, 23);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 'khartoum');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `saving` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `meddle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `last_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `father_dead_date` date NOT NULL,
  `father_dead_cause` varchar(100) NOT NULL,
  `father_work` varchar(100) NOT NULL,
  `sisters_no` int(20) NOT NULL,
  `brothers_no` int(20) NOT NULL,
  `residence_state` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `section` int(20) NOT NULL,
  `house_no` int(20) NOT NULL,
  `phone1` int(20) NOT NULL,
  `phone2` int(20) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `uni_name` varchar(100) NOT NULL,
  `level` int(20) NOT NULL,
  `year` int(20) NOT NULL,
  `last_result` varchar(100) NOT NULL,
  `quran_parts` int(20) NOT NULL,
  `study_year_no` int(20) NOT NULL,
  `study_date_start` year(4) NOT NULL,
  `expected_grad` year(4) NOT NULL,
  `health_state` varchar(50) NOT NULL,
  `ill_cause` varchar(50) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `state`, `warranty_organization`, `saving`, `first_name`, `meddle_name`, `last_name`, `last_4th_name`, `birth_date`, `sex`, `father_dead_date`, `father_dead_cause`, `father_work`, `sisters_no`, `brothers_no`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `school_name`, `uni_name`, `level`, `year`, `last_result`, `quran_parts`, `study_year_no`, `study_date_start`, `expected_grad`, `health_state`, `ill_cause`, `data_entery_name`, `data_entery_date`) VALUES
(2, '', 2, 0, '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 0, 0, 1, '', '', 0, 0, 0, 0, '', '', 0, 0, '', 0, 0, 0000, 0000, '', '', '', '0000-00-00'),
(3, 'state of sudan ', 1, 1, 'first name', 's name', ' l name', ' 4 name', '2000-12-10', 'female', '2000-12-10', 'accedent', 'work', 2, 5, 1, 'khartoum', 'mamoorah', 1, 5, 18, 200, '0', ' ', 1, 2, ' ', 3, 1, 2000, 2000, 'health state', 'health', 'ddddd', '2000-12-10');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `f_preacher_id` FOREIGN KEY (`preacherID`) REFERENCES `finalpreacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preacher_id` FOREIGN KEY (`preacherID`) REFERENCES `preacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`),
  ADD CONSTRAINT `sponsor` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsorship` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `finalfamily`
--
ALTER TABLE `finalfamily`
  ADD CONSTRAINT `f_family_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_sponsor` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `finalorphan`
--
ALTER TABLE `finalorphan`
  ADD CONSTRAINT `f_sponsorship_organization` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `finalpreacher`
--
ALTER TABLE `finalpreacher`
  ADD CONSTRAINT `f_preacher_sponsor_id` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_preacher_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `finalstudent`
--
ALTER TABLE `finalstudent`
  ADD CONSTRAINT `f_student_sponsor_id` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_student_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `f_member`
--
ALTER TABLE `f_member`
  ADD CONSTRAINT `family` FOREIGN KEY (`familyID`) REFERENCES `family` (`family_id`),
  ADD CONSTRAINT `f_family` FOREIGN KEY (`familyID`) REFERENCES `finalfamily` (`family_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orphan`
--
ALTER TABLE `orphan`
  ADD CONSTRAINT `sponsorship_organization` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `preacher`
--
ALTER TABLE `preacher`
  ADD CONSTRAINT `preacher_sponsor_id` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preacher_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sponsorship`
--
ALTER TABLE `sponsorship`
  ADD CONSTRAINT `sponsorship_fk` FOREIGN KEY (`sponsor`) REFERENCES `sponsor` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sponsorships`
--
ALTER TABLE `sponsorships`
  ADD CONSTRAINT `sponsorships_ibfk_1` FOREIGN KEY (`sponsorship`) REFERENCES `sponsorship` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_sponsor_id` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
