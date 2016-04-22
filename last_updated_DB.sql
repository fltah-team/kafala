-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2016 at 09:12 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `username`, `password`, `type`) VALUES
(68, 'dfhggh fgh fgh', 'lkjh', '1bbd886460827015e5d605ed44252251', 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`family_id`, `state`, `warranty_organization`, `father_first_name`, `father_middle_name`, `father_last_name`, `father_4th_name`, `birth_date`, `sex`, `social_state`, `father_dead_date`, `father_dead_cause`, `father_work`, `supporter_first_name`, `supporter_meddle_name`, `supporter_last_name`, `supporter_4th_name`, `supporter_birth_date`, `supporter_sex`, `supporter_state`, `supporter_relation`, `supporter_work`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `data_entery_name`, `data_entery_date`) VALUES
(2, 'state', 1, 'first name', 's name', ' l name', ' 4 name', '2000-12-10', 'female', 5, '2000-12-10', 'accedent', 'work', 'dd', 'dd', 'dd', 'dd', '2000-12-10', 'male', '5', 'dd', 'dd', 1, 'khartoum', 'mamoorah', 1, 5, 18, 200, 'ddddd', '2000-12-10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orphan`
--

INSERT INTO `orphan` (`id`, `state`, `warranty_organization`, `first_name`, `meddle_name`, `last_name`, `last_4th_name`, `birth_date`, `sex`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_4th_name`, `mother_Birth_date`, `mother_state`, `father_dead_date`, `father_dead_cause`, `father_work`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `studing_state`, `nonstuding_cause`, `school_name`, `level`, `year`, `quran_parts`, `health_state`, `ill_cause`, `data_entery_name`, `data_entery_date`) VALUES
(2, 'statetttttttttooottt', 1, 'ameenah', 's name', ' l name', ' 4 name', '2000-12-10', 'female', 'm f name', 'm m name', ' m l name', ' m 4 name', '2000-12-10', 'state', '2000-12-10', 'accedent', 'work', 1, 'khartoum', 'mamoorah', 1, 5, 18, 200, 'stud', 'work', 'ff', '1', '2', 3, 'health state', 'health', 'ddddd', '2000-12-10'),
(3, 'state', 1, 'first name', 's name', ' l name', ' 4 name', '2000-12-10', 'female', 'm f name', 'm m name', ' m l name', ' m 4 name', '2000-12-10', 'state', '2000-12-10', 'accedent', 'work', 1, 'khartoum', 'mamoorah', 1, 5, 18, 200, 'stud', 'work', 'ff', '1', '2', 3, 'health state', 'health', 'ddddd', '2000-12-10'),
(4, '1', 1, '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', '', '', '', '', 1, '1', '', 'user', '2019-04-16'),
(5, '1', 1, '', '', '', '', '1997-01-01', '1', '', '', '', '', '1950-01-01', 'متزوجة', '1950-01-01', '', '', 1, '', '', 0, 0, 0, 0, '1', '', '', '', '', 1, '1', '', 'user', '2019-04-16'),
(6, '1', 1, 'خالد', 'محمد', 'صالح ', 'أحمد', '1997-01-01', '1', 'امنة', 'محمد', 'احمد', 'حامد', '1950-01-01', 'متزوجة', '1950-01-01', 'المرض', 'مزارع', 1, 'القضارف', 'الوحدة', 450, 520, 99991, 9992, '1', 'انه يدرس', 'المدرسة', 'المحرلة', 'لالصف', 1, '1', 'نوع المرض', 'user', '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `preacher`
--

CREATE TABLE IF NOT EXISTS `preacher` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `warranty_organization` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `preacher`
--


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
  KEY `orphan_id` (`orphan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sibiling`
--

INSERT INTO `sibiling` (`id`, `orphan_id`, `name`, `sex`, `birth_date`, `state`) VALUES
(1, 6, '', '0', '1950-01-01', '1'),
(2, 6, '', '0', '1950-01-01', '1'),
(3, 6, '', '0', '1950-01-01', '1'),
(4, 6, '', '0', '1950-01-01', '1'),
(5, 6, '', '0', '1950-01-01', '1'),
(6, 6, '', '0', '1950-01-01', '1'),
(7, 6, '', '0', '1950-01-01', '1'),
(8, 6, 'dgfh', '1', '1950-01-01', '1'),
(9, 4, '', '0', '1950-01-01', '1'),
(10, 4, '', '0', '1950-01-01', '1'),
(11, 4, '', '0', '1950-01-01', '1'),
(12, 4, '', '0', '1950-01-01', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `sponsorship`
--

INSERT INTO `sponsorship` (`id`, `amount`, `date`, `saving`, `sponsor`, `month_no`, `sponsored`) VALUES
(1, 90, '2016-04-21', 10, 1, 1, 1),
(2, 90, '2016-04-21', 10, 1, 1, 1),
(3, 10, '2016-04-21', 1, 1, 1, 1),
(4, 100, '0000-00-00', 100, 1, 1, 1),
(5, 100, '0000-00-00', 100, 1, 1, 1),
(6, 100, '0000-00-00', 100, 1, 1, 1),
(7, 100, '0000-00-00', 100, 1, 1, 1),
(8, 100, '0000-00-00', 100, 1, 1, 1),
(9, 100, '0000-00-00', 100, 1, 1, 1),
(10, 100, '0000-00-00', 100, 1, 1, 1),
(11, 100, '0000-00-00', 100, 1, 1, 1),
(12, 100, '0000-00-00', 100, 1, 1, 1),
(13, 100, '0000-00-00', 100, 1, 1, 1),
(14, 100, '0000-00-00', 100, 1, 1, 1),
(15, 100, '0000-00-00', 100, 1, 1, 1),
(16, 100, '0000-00-00', 100, 1, 1, 1),
(17, 100, '0000-00-00', 100, 1, 1, 1),
(18, 100, '0000-00-00', 100, 1, 1, 1),
(19, 100, '0000-00-00', 100, 1, 1, 1),
(20, 100, '0000-00-00', 100, 1, 1, 1),
(21, 100, '0000-00-00', 100, 1, 1, 1),
(22, 100, '0000-00-00', 100, 1, 1, 1),
(23, 100, '0000-00-00', 100, 1, 1, 1),
(24, 100, '0000-00-00', 100, 1, 1, 1),
(25, 100, '0000-00-00', 100, 1, 1, 1),
(26, 100, '0000-00-00', 100, 1, 1, 1),
(27, 100, '0000-00-00', 100, 1, 1, 1),
(28, 100, '0000-00-00', 100, 1, 1, 1),
(29, 100, '0000-00-00', 100, 1, 1, 1),
(30, 100, '0000-00-00', 100, 1, 1, 1),
(31, 100, '0000-00-00', 100, 1, 1, 1),
(32, 100, '0000-00-00', 100, 1, 1, 1),
(33, 100, '0000-00-00', 100, 1, 1, 1),
(34, 100, '0000-00-00', 100, 1, 1, 1),
(35, 100, '0000-00-00', 100, 1, 1, 1),
(36, 100, '0000-00-00', 100, 1, 1, 1),
(37, 100, '0000-00-00', 100, 1, 1, 1),
(38, 100, '0000-00-00', 100, 1, 1, 1),
(39, 100, '0000-00-00', 100, 1, 1, 1),
(40, 100, '0000-00-00', 100, 1, 1, 1),
(41, 100, '0000-00-00', 100, 1, 1, 1),
(42, 100, '0000-00-00', 100, 1, 1, 1),
(43, 100, '0000-00-00', 100, 1, 1, 1),
(44, 100, '0000-00-00', 100, 1, 1, 1),
(45, 100, '0000-00-00', 100, 1, 1, 1),
(46, 100, '0000-00-00', 100, 1, 1, 1),
(47, 100, '0000-00-00', 100, 1, 1, 1),
(48, 100, '0000-00-00', 100, 1, 1, 1),
(49, 100, '0000-00-00', 100, 1, 1, 1),
(50, 100, '0000-00-00', 100, 1, 1, 1),
(51, 100, '0000-00-00', 100, 1, 1, 2),
(52, 90, '2016-04-21', 10, 1, 1, 1),
(53, 0, '2016-04-21', 11, 1, 1, 3),
(54, 0, '2016-04-21', 1, 1, 1, 1),
(55, 0, '2016-04-21', 1, 1, 1, 1),
(56, 0, '2016-04-21', 50, 1, 1, 1),
(57, 0, '2016-04-21', 50, 1, 1, 1);

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
(49, 2),
(49, 3),
(49, 4),
(49, 5),
(49, 6),
(50, 2),
(50, 3),
(50, 4),
(50, 5),
(50, 6),
(51, 2),
(52, 2),
(52, 3),
(52, 4),
(52, 5),
(52, 6),
(54, 2),
(54, 3),
(54, 4),
(54, 5),
(54, 6),
(55, 2),
(55, 3),
(55, 4),
(55, 5),
(55, 6),
(56, 2),
(56, 3),
(56, 4),
(56, 5),
(56, 6),
(57, 2),
(57, 3),
(57, 4),
(57, 5),
(57, 6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `state`, `warranty_organization`, `first_name`, `meddle_name`, `last_name`, `last_4th_name`, `birth_date`, `sex`, `father_dead_date`, `father_dead_cause`, `father_work`, `sisters_no`, `brothers_no`, `residence_state`, `city`, `District`, `section`, `house_no`, `phone1`, `phone2`, `school_name`, `uni_name`, `level`, `year`, `last_result`, `quran_parts`, `study_year_no`, `study_date_start`, `expected_grad`, `health_state`, `ill_cause`, `data_entery_name`, `data_entery_date`) VALUES
(2, '', 2, '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 0, 0, 1, '', '', 0, 0, 0, 0, '', '', 0, 0, '', 0, 0, 0000, 0000, '', '', '', '0000-00-00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `preacher_id` FOREIGN KEY (`preacherID`) REFERENCES `preacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`);

--
-- Constraints for table `f_member`
--
ALTER TABLE `f_member`
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
  ADD CONSTRAINT `preacher_sponsor_id` FOREIGN KEY (`id`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preacher_state_id` FOREIGN KEY (`residence_state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sibiling`
--
ALTER TABLE `sibiling`
  ADD CONSTRAINT `orphan_id` FOREIGN KEY (`orphan_id`) REFERENCES `orphan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
