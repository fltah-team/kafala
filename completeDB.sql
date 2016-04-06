-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2016 at 05:13 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `username`, `password`, `type`) VALUES
(21, 'nn2', 'un2', 's', 1),
(24, 'rrrrrr', 'rrrrr', 'rrrrrrr', 3);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `qualifier_name` varchar(500) NOT NULL,
  `organizaton` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `preacherID` varchar(10) NOT NULL,
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
  `family_id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `father_first_name` varchar(50) NOT NULL,
  `father_middle_name` varchar(50) NOT NULL,
  `father_last_name` varchar(50) NOT NULL,
  `father_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `social_state` int(50) NOT NULL,
  `father_dead_date` date NOT NULL,
  `fatjer_dead_cause` varchar(50) NOT NULL,
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
  `male_memebers_no` int(11) NOT NULL,
  `female_memebers_no` int(11) NOT NULL,
  `memebr_id` int(11) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  `head_dep_name` varchar(50) NOT NULL,
  `head_dep_date` date NOT NULL,
  UNIQUE KEY `family_id` (`family_id`),
  KEY `memebr_id` (`memebr_id`),
  KEY `id` (`family_id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family`
--


-- --------------------------------------------------------

--
-- Table structure for table `family_member`
--

CREATE TABLE IF NOT EXISTS `family_member` (
  `family_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  KEY `family_id` (`family_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family_member`
--


-- --------------------------------------------------------

--
-- Table structure for table `f_member`
--

CREATE TABLE IF NOT EXISTS `f_member` (
  `member_id` int(11) NOT NULL,
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

--
-- Dumping data for table `f_member`
--


-- --------------------------------------------------------

--
-- Table structure for table `orphan`
--

CREATE TABLE IF NOT EXISTS `orphan` (
  `id` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
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
  `mother_state` varchar(5) NOT NULL,
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
  `sisters_no` int(20) NOT NULL,
  `brothers_no` int(20) NOT NULL,
  `sibiling` varchar(50) NOT NULL,
  `studing_state` varchar(50) NOT NULL,
  `nonstuding_cause` varchar(50) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `level` int(10) NOT NULL,
  `year` int(10) NOT NULL,
  `quran_parts` int(10) NOT NULL,
  `health_state` varchar(50) NOT NULL,
  `ill_cause` varchar(50) NOT NULL,
  `data_entery_name` varchar(50) NOT NULL,
  `data_entery_date` date NOT NULL,
  `head_dep_name` varchar(50) NOT NULL,
  `head_dep_date` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orphan`
--


-- --------------------------------------------------------

--
-- Table structure for table `preacher`
--

CREATE TABLE IF NOT EXISTS `preacher` (
  `id` varchar(10) NOT NULL,
  `type` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `meddle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `last_4th_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `male_memebers_no` int(10) NOT NULL,
  `female_memebers_no` int(10) NOT NULL,
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
  `head_dep_name` varchar(50) NOT NULL,
  `head_dep_date` date NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `residence_state` (`residence_state`),
  KEY `warranty_organization` (`warranty_organization`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `preacher`
--


-- --------------------------------------------------------

--
-- Table structure for table `sibiling`
--

CREATE TABLE IF NOT EXISTS `sibiling` (
  `id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `state` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sibiling`
--


-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `numberOFSponsored` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sponsor`
--


-- --------------------------------------------------------

--
-- Table structure for table `sponsorship`
--

CREATE TABLE IF NOT EXISTS `sponsorship` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `saving` int(11) NOT NULL,
  `date` date NOT NULL,
  `sponsor` int(11) NOT NULL,
  `month_no` int(11) NOT NULL,
  KEY `sponsor` (`sponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `sponsorship`
--


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


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
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
  `head_dep_name` varchar(50) NOT NULL,
  `head_dep_date` date NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `warranty_organization` (`warranty_organization`),
  KEY `residence_state` (`residence_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`preacherID`) REFERENCES `preacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_id` FOREIGN KEY (`memebr_id`) REFERENCES `family_member` (`family_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `family_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`),
  ADD CONSTRAINT `sponsorship_id` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `f_member`
--
ALTER TABLE `f_member`
  ADD CONSTRAINT `f_member_ibfk_1` FOREIGN KEY (`familyID`) REFERENCES `family` (`family_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_id` FOREIGN KEY (`member_id`) REFERENCES `family_member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_sponsor_id` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
