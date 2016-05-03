-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 03:08 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kafala`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `qualifier_name` varchar(500) NOT NULL,
  `organizaton` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `preacherID` int(10) NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `preacherID` (`preacherID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

DROP TABLE IF EXISTS `family`;
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
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  UNIQUE KEY `family_id` (`family_id`),
  KEY `id` (`family_id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `finalfamily`
--

DROP TABLE IF EXISTS `finalfamily`;
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
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  `head_dep_name` varchar(100) NOT NULL,
  `head_dep_date` date NOT NULL,
  UNIQUE KEY `family_id` (`family_id`),
  KEY `id` (`family_id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `finalorphan`
--

DROP TABLE IF EXISTS `finalorphan`;
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
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `finalorphan`
--

INSERT INTO `finalorphan` (`id`, `state`, `warranty_organization`, `saving`, `first_name`, `meddle_name`, `last_name`, `last_4th_name`, `birth_date`, `sex`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_4th_name`, `mother_Birth_date`, `mother_state`, `father_dead_date`, `father_dead_cause`, `father_work`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `studing_state`, `nonstuding_cause`, `school_name`, `level`, `year`, `quran_parts`, `health_state`, `ill_cause`, `data_entery_name`, `data_entery_date`, `head_dep_name`, `head_dep_date`) VALUES
(4, '2', 1, 1, 'أحمد', 'محمد', 'أبوبكر', 'خالد', '2030-04-16', '1', 'صفية', 'احمد', 'علي', 'محمد', '2030-04-16', 'متزوجة', '2030-04-16', 'مرض', 'مزارع', 1, 'الكلاكة', 'بانت', 5, 5, '91', '92', '1', 'لا يوجد', 'المرحلة', 'المرحلة', 'المرحلة', 1, '1', 'لا يوجد', 'user', '2030-04-16', 'admin', '2016-04-30'),
(5, '2', 1, 1, 'أحمد', 'محمد', 'أبوبكر', 'خالد', '2030-04-16', '1', 'صفية', 'احمد', 'علي', 'محمد', '2030-04-16', '1', '2030-04-16', 'مرض', 'مزارع', 1, 'الكلاكة', 'بانت', 5, 5, '91', '92', '1', 'لا يوجد', 'المرحلة', '0', '0', 1, '1', 'لا يوجد', 'user', '2001-05-16', 'admin', '2016-04-30'),
(6, '2', 1, 1, 'أحمد', 'محمد', 'أبوبكر', 'خالد', '2030-04-16', '1', 'صفية', 'احمد', 'علي', 'محمد', '2030-04-16', 'متزوجة', '2030-04-16', 'مرض', 'مزارع', 1, 'الكلاكة', 'بانت', 5, 5, '91', '92', '1', 'لا يوجد', 'المرحلة', 'المرحلة', 'المرحلة', 1, '1', 'لا يوجد', 'user', '2030-04-16', 'admin', '2016-04-30'),
(7, '2', 1, 1, 'أحمد خالد', 'محمد', 'أبوبكر', 'خالد', '2030-04-16', '1', 'صفية', 'احمد', 'علي', 'محمد', '2030-04-16', '1', '2030-04-16', 'مرض', 'مزارع', 1, 'الكلاكة', 'بانت', 5, 5, '91', '92', '1', 'لا يوجد', 'المرحلة', '0', '0', 1, '1', 'لا يوجد', 'user', '2001-05-16', 'admin', '2016-04-30'),
(8, '3', 1, 0, 'خالدددد5465', 'محمد', 'أبوبكر', 'خالد', '2001-05-16', '1', 'صفية', 'احمد', 'علي', 'محمد', '2001-05-16', '1', '2001-05-16', 'مرض', 'مزارع', 1, 'الكلاكة', 'بانت', 5, 5, '91', '92', '1', 'لا يوجد', 'المرحلة', 'admin', '0', 1, '1', 'لا يوجد', 'user', '2001-05-16', 'admin', '2016-05-01'),
(9, '2', 1, 1, 'خالدددد', 'محمد', 'أبوبكر', 'خالد', '2001-05-16', '1', 'صفية', 'احمد', 'علي', 'محمد', '2001-05-16', '1', '2001-05-16', 'مرض', 'مزارع', 1, 'الكلاكة', 'بانت', 5, 5, '91', '92', '1', 'لا يوجد', 'المرحلة', '', '0', 1, '1', 'لا يوجد', 'user', '2001-05-16', 'admin', '2016-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `finalpreacher`
--

DROP TABLE IF EXISTS `finalpreacher`;
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
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `finalstudent`
--

DROP TABLE IF EXISTS `finalstudent`;
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
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `uni_name` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `f_member`
--

DROP TABLE IF EXISTS `f_member`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orphan`
--

DROP TABLE IF EXISTS `orphan`;
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
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orphan`
--

INSERT INTO `orphan` (`id`, `state`, `warranty_organization`, `saving`, `last_sponsorship_date`, `first_name`, `meddle_name`, `last_name`, `last_4th_name`, `birth_date`, `sex`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_4th_name`, `mother_Birth_date`, `mother_state`, `father_dead_date`, `father_dead_cause`, `father_work`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `studing_state`, `nonstuding_cause`, `school_name`, `level`, `year`, `quran_parts`, `health_state`, `ill_cause`, `data_entery_name`, `data_entery_date`) VALUES
(1, '3', 2, 11, '2016-04-30', 'nam1', 'name2', 'name3', 'name4', '2012-12-12', '', 'mn1', 'mn2', 'mn3', 'mn4', '2011-11-11', '1', '2010-10-10', 'وفاة', 'عمل', 1, 'مد', 'حي', 0, 0, '991', '992', '1', 'لا يوجد', 'لا يوجد', '0', '0', 1, '1', 'لا يوجد', 'user', '2030-04-16'),
(2, '1', 1, 11, '2016-04-30', '', '', '', '', '1990-01-01', '1', '', '', '', '', '1960-01-01', '1', '1995-01-01', '', '', 1, '', '', 0, 0, '0', '0', '1', 'لا يوجد', '', '', '', 0, '1', 'لا يوجد', 'user', '2001-05-16'),
(3, '1', 1, 11, '2016-04-30', '', '', '', '', '1990-01-01', '', 'dssdf', 'dsf', 'fds', 'fds', '1960-01-01', '1', '1995-01-01', '', '', 1, '', '', 0, 0, '0', '0', '1', 'لا يوجد', '', '', '', 0, '1', 'لا يوجد', 'user', '2030-04-16'),
(4, '1', 1, 11, '2016-04-30', '', '', '', '', '1990-01-01', '', '', '', '', '', '1960-01-01', '1', '1995-01-01', '', '', 1, '', '', 0, 0, '0', '0', '1', 'لا يوجد', '', '', '', 0, '1', 'لا يوجد', 'user', '2030-04-16'),
(5, '2', 1, 11, '2016-04-30', 'أحمد', 'محمد', 'أبوبكر', 'خالد', '2030-04-16', '1', 'صفية', 'احمد', 'علي', 'محمد', '2030-04-16', '1', '2030-04-16', 'مرض', 'مزارع', 1, 'الكلاكة', 'بانت', 5, 5, '91', '92', '1', 'لا يوجد', 'المرحلة', '0', '', 1, '1', 'لا يوجد', 'user', '2001-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `preacher`
--

DROP TABLE IF EXISTS `preacher`;
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
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `preacher`
--

INSERT INTO `preacher` (`id`, `type`, `state`, `warranty_organization`, `saving`, `first_name`, `meddle_name`, `last_name`, `last_4th_name`, `birth_date`, `sex`, `male_members_no`, `female_members_no`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `qualify_name`, `qualify_date`, `qualify_rating`, `quran_parts`, `Issuer`, `current_work`, `Joining_Date`, `health_state`, `ill_cause`, `data_entery_name`, `data_entery_date`) VALUES
(1, 0, 'state rrrrrrrrrrr', 1, 1, 'first name', 's name', ' l name', ' 4 name', '2000-12-10', 'female', 1, 2, 1, 'khartoum', 'mamoorah', 1, 5, '18', '200', 'sss', '2000-12-10', 'very good ', 4, '44', '0', '2000-12-10', 'health state', 'health', 'ddddd', '2000-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `sibiling`
--

DROP TABLE IF EXISTS `sibiling`;
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
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sibiling`
--

INSERT INTO `sibiling` (`id`, `orphan_id`, `name`, `sex`, `birth_date`, `state`) VALUES
(5, 23, 'dfhgfh', '0', '1950-01-01', '1'),
(6, 23, 'dfhgfh', '0', '1950-01-01', '1'),
(7, 23, 'dfhgfh', '0', '1950-01-01', '1'),
(8, 23, 'dfhgfh', '0', '1950-01-01', '1'),
(9, 23, 'خالد', '0', '1950-01-01', '1'),
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
(31, 7, 'llll', '0', '1950-01-01', '1'),
(32, 7, '', '0', '1950-01-01', '1'),
(33, 0, '', '', '0000-00-00', ''),
(34, 7, 'أحمد', '0', '1950-01-01', '1'),
(35, 7, 'أحمد', '0', '1950-01-01', '1'),
(36, 7, 'أحمد', '0', '1950-01-01', '1'),
(37, 7, 'أحمد', '0', '1950-01-01', '1'),
(38, 7, 'fghfghfghdfh', '0', '1950-01-01', '1'),
(39, 7, 'خالد', '0', '1950-01-01', '1'),
(40, 7, 'الحمد لله', '0', '1950-01-01', '1'),
(41, 7, 'الحمد لله', '0', '1950-01-01', '1'),
(42, 7, 'ohg]', '0', '1950-01-01', '1'),
(43, 7, 'محمد', '0', '1950-01-01', '1'),
(44, 37, 'خالد', '0', '1950-01-01', '1'),
(45, 37, 'خالدة', '0', '1950-01-01', '1'),
(46, 37, 'مريم', '0', '1950-01-01', '1'),
(47, 27, 'dkldfg', '0', '1950-01-01', '1'),
(48, 27, 'أحمد', '0', '1950-01-01', '1'),
(49, 27, 'شسبىمش', '0', '1950-01-01', '1'),
(50, 27, 'مكلسمنلسيمبشطبش', '0', '1950-01-01', '1'),
(51, 27, 'dfghdfh', '0', '1950-01-01', '1'),
(52, 27, 'dhfdh', '0', '1950-01-01', '1'),
(53, 27, 'dhfdhdfg', '0', '1950-01-01', '1'),
(54, 27, 'أحمد', '0', '1950-01-01', '1'),
(55, 27, 'خالد', '0', '1950-01-01', '1'),
(56, 37, 'إدريس', '0', '1950-01-01', '1'),
(93, 10, 'أحمد', '1', '1972-05-06', '3'),
(94, 10, 'أحمد', '0', '1972-05-06', '3'),
(95, 10, 'أحمد', '1', '1972-05-06', '3');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

DROP TABLE IF EXISTS `sponsor`;
CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `numberOFSponsored` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `sponsorship`;
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
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf32;

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
(121, 11, '2016-04-25', 1, 1, 1, 1),
(122, 90, '2016-04-30', 10, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sponsorships`
--

DROP TABLE IF EXISTS `sponsorships`;
CREATE TABLE IF NOT EXISTS `sponsorships` (
  `sponsorship` int(11) NOT NULL,
  `sponsored` int(11) NOT NULL,
  KEY `sponsorship` (`sponsorship`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
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

DROP TABLE IF EXISTS `student`;
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
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `uni_name` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `state`, `warranty_organization`, `saving`, `first_name`, `meddle_name`, `last_name`, `last_4th_name`, `birth_date`, `sex`, `father_dead_date`, `father_dead_cause`, `father_work`, `sisters_no`, `brothers_no`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `school_name`, `uni_name`, `level`, `year`, `last_result`, `quran_parts`, `study_year_no`, `study_date_start`, `expected_grad`, `health_state`, `ill_cause`, `data_entery_name`, `data_entery_date`) VALUES
(3, 'state of sudan ', 1, 1, 'first name', 's name', ' l name', ' 4 name', '2000-12-10', 'female', '2000-12-10', 'accedent', 'work', 2, 5, 1, 'khartoum', 'mamoorah', 1, 5, '18', '200', '0', ' ', '1', '2', ' ', 3, 1, 2000, 2000, 'health state', 'health', 'ddddd', '2000-12-10');

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
  ADD CONSTRAINT `finalorphan_ibfk_1` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`);

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
  ADD CONSTRAINT `f_family` FOREIGN KEY (`familyID`) REFERENCES `finalfamily` (`family_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `family` FOREIGN KEY (`familyID`) REFERENCES `family` (`family_id`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
