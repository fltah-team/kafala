-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 08:42 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `last_sponsorship_date` date NOT NULL,
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
  `house_no` varchar(500) NOT NULL,
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
  `last_sponsorship_date` date NOT NULL,
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
  `house_no` varchar(500) NOT NULL,
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
  `house_no` varchar(100) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `last_sponsorship_date` date NOT NULL,
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
  `house_no` varchar(500) NOT NULL,
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
  `last_sponsorship_date` date NOT NULL,
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
  `house_no` varchar(500) NOT NULL,
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
-- Table structure for table `notify`
--

DROP TABLE IF EXISTS `notify`;
CREATE TABLE IF NOT EXISTS `notify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(1000) NOT NULL,
  `ufrom` varchar(100) NOT NULL,
  `uto` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uto` (`uto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `text`, `ufrom`, `uto`, `type`) VALUES
(2, 'nooooooooooo', 'dd', 'ee', 1);

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
  `house_no` varchar(500) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `last_sponsorship_date` date NOT NULL,
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
  `house_no` varchar(500) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sibiling`
--

DROP TABLE IF EXISTS `sibiling`;
CREATE TABLE IF NOT EXISTS `sibiling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orphan_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `state` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `orphan_id` (`orphan_id`),
  KEY `orphan_id_2` (`orphan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `last_date` date NOT NULL,
  `sponsored` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sponsor` (`sponsor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `sponsorships`
--

DROP TABLE IF EXISTS `sponsorships`;
CREATE TABLE IF NOT EXISTS `sponsorships` (
  `sponsorship` int(11) NOT NULL,
  `sponsored` int(11) NOT NULL,
  `type` int(10) NOT NULL,
  KEY `sponsorship` (`sponsorship`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  UNIQUE KEY `id_4` (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `last_sponsorship_date` date NOT NULL,
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
  `house_no` varchar(500) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD CONSTRAINT `family_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
  ADD CONSTRAINT `f_orphan_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_sponsorship_organization` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `finalpreacher`
--
ALTER TABLE `finalpreacher`
  ADD CONSTRAINT `f_pracher_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_preacher_sponsor_id` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `orphan_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sponsorship_organization` FOREIGN KEY (`warranty_organization`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
