-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 09:31 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evotedb`
--
CREATE DATABASE IF NOT EXISTS `evotedb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `evotedb`;

-- --------------------------------------------------------

--
-- Table structure for table `tblboardmem`
--

CREATE TABLE IF NOT EXISTS `tblboardmem` (
  `boardMemID` int(11) NOT NULL AUTO_INCREMENT,
  `boardMember` varchar(255) NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  PRIMARY KEY (`boardMemID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tblboardmem`
--

INSERT INTO `tblboardmem` (`boardMemID`, `boardMember`, `electionName`, `electionYear`) VALUES
(1, 'sdsds', 'we', '2018'),
(2, 'vbcvb', 'we', '2018'),
(3, 'ddqereee', 'we', '2018'),
(4, 'jgxztu', 'we', '2018'),
(5, 'gg', 'we', '2018'),
(6, 'uyuy', 'we', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tblcouncilor`
--

CREATE TABLE IF NOT EXISTS `tblcouncilor` (
  `counID` int(11) NOT NULL AUTO_INCREMENT,
  `councilor` varchar(255) NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  PRIMARY KEY (`counID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tblcouncilor`
--

INSERT INTO `tblcouncilor` (`counID`, `councilor`, `electionName`, `electionYear`) VALUES
(1, 'php lord <3', 'hara eon ah', '2018'),
(2, 'php Lord ?', 'hzjhxjz', '2018'),
(3, 'raaaaa', 'hzjhxjz', '2018'),
(4, 'yohooooo', 'hzjhxjz', '2018'),
(5, 'kwANDO', 'hzjhxjz', '2018'),
(6, 'panahon', 'hzjhxjz', '2018'),
(7, 'panahon', 'hzjhxjz', '2018'),
(8, 'panahon', 'hzjhxjz', '2018'),
(9, 'okay hay', 'hzjhxjz', '2018'),
(10, 'okay hay', 'hzjhxjz', '2018'),
(11, 'okay hay', 'hzjhxjz', '2018'),
(12, 'okay hay', 'hzjhxjz', '2018'),
(13, 'nanana', 'hzjhxjz', '2018'),
(14, 'nanana', 'hzjhxjz', '2018'),
(15, 'jujuju', 'hzjhxjz', '2018'),
(16, 'jujuju', 'hzjhxjz', '2018'),
(17, 'councoun', 'New Elect', '2018'),
(18, 'fgfd', 'hays bago', '2018'),
(19, 'fgfd65', 'hays bago', '2018'),
(20, 'dsdss', 'hays bago', '2018'),
(21, 'vurayatuwi', 'another', '2018'),
(22, 'vasfaduri', 'another', '2018'),
(23, 'vinjuratikasi', 'another', '2018'),
(24, 'vulatiruri', 'another', '2018'),
(25, 'sada', 'g', '2018'),
(26, 'sdada', 'g', '2018'),
(27, 'asdwq', 'we', '2018'),
(28, 'fgfdgdf', 'we', '2018'),
(29, 'dfspoi', 'we', '2018'),
(30, 'dadsdsa', 'we', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tblelectname`
--

CREATE TABLE IF NOT EXISTS `tblelectname` (
  `electNameID` int(11) NOT NULL AUTO_INCREMENT,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  PRIMARY KEY (`electNameID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tblelectname`
--

INSERT INTO `tblelectname` (`electNameID`, `electionName`, `electionYear`) VALUES
(1, 'Another Elect', '2018'),
(2, '	\r\nagain', '2018'),
(3, 'Hhahaha', '2018'),
(4, '	\r\nThis na', '2018'),
(5, 'Uman Abi', '2018'),
(6, 'Next!', '2018'),
(7, 'hzjhxjz', '2018'),
(8, 'New Elect', '2018'),
(9, 'hays bago', '2018'),
(10, 'another', '2018'),
(11, 'd', '2018'),
(57, 'we', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tblgov`
--

CREATE TABLE IF NOT EXISTS `tblgov` (
  `govID` int(11) NOT NULL AUTO_INCREMENT,
  `governor` varchar(255) NOT NULL,
  `govDepartment` varchar(255) NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  PRIMARY KEY (`govID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `tblgov`
--

INSERT INTO `tblgov` (`govID`, `governor`, `govDepartment`, `electionName`, `electionYear`) VALUES
(1, 'adfdfdfd', 'HMTM', 'hara eon ah', '2018'),
(2, 'asas', 'BASE', 'hara eon ah', '2018'),
(3, 'hays', 'BASE', 'hzjhxjz', '2018'),
(4, 'be? ad?', 'BEAD', 'hzjhxjz', '2018'),
(5, 'sing Cream?', 'CRIMSING', 'hzjhxjz', '2018'),
(6, 'TM card', 'HMTM', 'hzjhxjz', '2018'),
(7, 'eh?', 'ICS', 'hzjhxjz', '2018'),
(8, 'wahaw', 'BASE', 'hzjhxjz', '2018'),
(9, 'lalalla', 'CRIMSING', 'hzjhxjz', '2018'),
(10, 'gogogog', 'BEAD', 'hzjhxjz', '2018'),
(11, 'lalolaolao', 'BEAD', 'hzjhxjz', '2018'),
(12, 'lalolaolao', 'BEAD', 'hzjhxjz', '2018'),
(13, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(14, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(15, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(16, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(17, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(18, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(19, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(20, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(21, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(22, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(23, 'John Humbert Duran', 'ICS', 'hzjhxjz', '2018'),
(24, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(25, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(26, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(27, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(28, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(29, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(30, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(31, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(32, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(33, 'five five five', 'CRIMSING', 'hzjhxjz', '2018'),
(34, 'jayjay', 'BEAD', 'hzjhxjz', '2018'),
(35, 'jayjay', 'BEAD', 'hzjhxjz', '2018'),
(36, 'jayjay', 'BEAD', 'hzjhxjz', '2018'),
(37, 'luhhh', 'CRIMSING', 'New Elect', '2018'),
(38, 'qaaa', 'BASE', 'hays bago', '2018'),
(39, 'qaaa3', 'BEAD', 'hays bago', '2018'),
(40, 'qaaa35', 'CRIMSING', 'hays bago', '2018'),
(41, 'wasafo', 'BASE', 'another', '2018'),
(42, 'wekava', 'BEAD', 'another', '2018'),
(43, 'wilasiko', 'CRIMSING', 'another', '2018'),
(44, 'wanbaza', 'HMTM', 'another', '2018'),
(45, 'sdsds', 'BASE', 'g', '2018'),
(46, 'sdfsd', 'ICS', 'g', '2018'),
(47, 'mhjkj', 'HMTM', 'g', '2018'),
(48, 'tryr', 'ICS', 'g', '2018'),
(49, 'sdsd', 'BEAD', 'we', '2018'),
(50, 'dsds', 'CRIMSING', 'we', '2018'),
(51, 'dsad', 'HMTM', 'we', '2018'),
(52, 'dsdsds', 'ICS', 'we', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tblpres`
--

CREATE TABLE IF NOT EXISTS `tblpres` (
  `presID` int(11) NOT NULL AUTO_INCREMENT,
  `president` varchar(255) NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  `electNum` varchar(255) NOT NULL,
  PRIMARY KEY (`presID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `tblpres`
--

INSERT INTO `tblpres` (`presID`, `president`, `electionName`, `electionYear`, `electNum`) VALUES
(1, 'John Humbert Duran', '', '', ''),
(2, 'Hello', '', '', ''),
(3, 'Sample', '', '', ''),
(4, 'okay', '', '', ''),
(5, 'Samp', '', '', ''),
(6, 'Another', 'Another Elect', '', ''),
(7, 'okay ', 'again', '', ''),
(8, 'uman', 'Hhahaha', '2018', ''),
(9, 'okay okay', 'This na ', '2018', ''),
(10, 'Hara Gid ', 'Uman Abi', '2018', ''),
(11, 'hayyyayyaya', 'geeeee', '2018', ''),
(12, 'hayhay', 'heyhey', '2018', ''),
(13, 'dada', 'sasas', '2018', ''),
(14, 'wer', 'xcbgdfxf', '2018', ''),
(15, 'hay salamat', 'frsds', '2018', ''),
(16, 'is it', 'hara eon ah', '2018', ''),
(17, 'JOhn Humbert', 'Next!', '2018', ''),
(22, 'Duran', 'Next!', '2018', ''),
(23, 'John', 'Next!', '2018', ''),
(24, 'John', 'Next!', '2018', ''),
(25, 'hey', 'hzjhxjz', '2018', ''),
(26, 'joe', 'hzjhxjz', '2018', ''),
(27, 'heyhey', 'hzjhxjz', '2018', ''),
(28, 'heyhey', 'hzjhxjz', '2018', ''),
(29, 'heyhey', 'hzjhxjz', '2018', ''),
(30, 'huk', 'hzjhxjz', '2018', ''),
(31, 'huk', 'hzjhxjz', '2018', ''),
(32, 'huk', 'hzjhxjz', '2018', ''),
(33, 'huk', 'hzjhxjz', '2018', ''),
(34, 'huk', 'hzjhxjz', '2018', ''),
(35, 'huk', 'hzjhxjz', '2018', ''),
(36, 'huk', 'hzjhxjz', '2018', ''),
(37, 'geeee', 'hzjhxjz', '2018', ''),
(38, 'geeee', 'hzjhxjz', '2018', ''),
(39, 'geeee', 'hzjhxjz', '2018', ''),
(40, 'geeee', 'hzjhxjz', '2018', ''),
(41, 'sound', 'hzjhxjz', '2018', ''),
(42, 'sound', 'hzjhxjz', '2018', ''),
(43, 'sound', 'hzjhxjz', '2018', ''),
(44, 'sound', 'hzjhxjz', '2018', ''),
(45, 'sound', 'hzjhxjz', '2018', ''),
(46, 'sound', 'hzjhxjz', '2018', ''),
(47, 'sound', 'hzjhxjz', '2018', ''),
(48, 'sound', 'hzjhxjz', '2018', ''),
(49, 'sound', 'hzjhxjz', '2018', ''),
(50, 'sound', 'hzjhxjz', '2018', ''),
(51, 'sound', 'hzjhxjz', '2018', ''),
(52, 'sound', 'hzjhxjz', '2018', ''),
(53, 'sound', 'hzjhxjz', '2018', ''),
(54, 'sound', 'hzjhxjz', '2018', ''),
(55, 'sound', 'hzjhxjz', '2018', ''),
(56, 'sound', 'hzjhxjz', '2018', ''),
(57, 'sound', 'hzjhxjz', '2018', ''),
(58, 'sound', 'hzjhxjz', '2018', ''),
(59, 'sound', 'hzjhxjz', '2018', ''),
(60, 'sound', 'hzjhxjz', '2018', ''),
(61, 'heyhey', 'New Elect', '2018', ''),
(62, 'hahha', 'New Elect', '2018', ''),
(63, 'hay', 'hays bago', '2018', ''),
(64, 'ho', 'hays bago', '2018', ''),
(65, 'weerer', 'hays bago', '2018', ''),
(66, 'el pres', 'another', '2018', ''),
(67, 'juaj', 'another', '2018', ''),
(68, 'juja', 'another', '2018', ''),
(69, 'jijo', 'another', '2018', ''),
(70, 'gug', 'iiii', '2018', ''),
(71, 'gugp', 'iiii', '2018', ''),
(72, 'bbg', 'iiii', '2018', ''),
(73, 'wawww', 'waw', '2018', ''),
(74, 'wawwww', 'waw', '2018', ''),
(75, 'wawwwwwew', 'waw', '2018', ''),
(76, 'dsda', 'waw', '2018', ''),
(77, 'sfsfs', '134567', '2018', ''),
(78, 'sddsds', '134567', '2018', ''),
(79, 'iyuiyu', '134567', '2018', ''),
(80, 'we', '134567', '2018', ''),
(81, 'luh luh', 'hehehe', '2018', ''),
(82, 'huy', 'g', '2018', ''),
(83, 'huyar', 'g', '2018', ''),
(84, 'fdfdfd', 'p', '2018', ''),
(85, 'as', 'p', '2018', ''),
(86, 'oka', 'd', '2018', ''),
(87, 'duhh', 'we', '2018', ''),
(88, 'luhh', 'we', '2018', ''),
(89, 'lolololo', 'we', '2018', ''),
(90, 'fdfd', 'we', '2018', ''),
(91, 'aas', 'we', '2018', ''),
(92, 'sasas', 'we', '2018', ''),
(93, 'dsdsds', 'we', '2018', ''),
(94, 'sasawq', 'we', '2018', ''),
(95, 'yuyuy', 'we', '2018', ''),
(96, 'jfghfhgf', 'we', '2018', ''),
(97, 'tytyt', 'we', '2018', ''),
(98, 'yuyuyuy', 'we', '2018', ''),
(99, 'bghfs', 'we', '2018', ''),
(100, 'youuuuu', 'we', '2018', ''),
(101, 'ehhh', 'we', '2018', ''),
(102, 'wake up', 'we', '2018', ''),
(103, 'kk', 'we', '2018', ''),
(104, 'luhhh', 'we', '2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsecretary`
--

CREATE TABLE IF NOT EXISTS `tblsecretary` (
  `secID` int(11) NOT NULL AUTO_INCREMENT,
  `secretary` varchar(255) NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  PRIMARY KEY (`secID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tblsecretary`
--

INSERT INTO `tblsecretary` (`secID`, `secretary`, `electionName`, `electionYear`) VALUES
(1, 'okay Secretary', 'hara eon ah', '2018'),
(2, 'yeah yeah', 'hzjhxjz', '2018'),
(3, 'oh hey', 'hzjhxjz', '2018'),
(4, 'another', 'hzjhxjz', '2018'),
(5, 'hyhyhy', 'hzjhxjz', '2018'),
(6, 'hyhyhy', 'hzjhxjz', '2018'),
(7, 'yeahyeah', 'New Elect', '2018'),
(8, 'yeahyeah', 'New Elect', '2018'),
(9, 'sec', 'hays bago', '2018'),
(10, 'sec2', 'hays bago', '2018'),
(11, 'sec1', 'hays bago', '2018'),
(12, 'julaba', 'another', '2018'),
(13, 'jalula', 'another', '2018'),
(14, 'jinjokala', 'another', '2018'),
(15, 'kukana', 'another', '2018'),
(16, 'dsdsds', '134567', '2018'),
(17, 'dhq', 'g', '2018'),
(18, 'sfs', 'g', '2018'),
(19, 'ssss', 'we', '2018'),
(20, 'lkjljkl', 'we', '2018'),
(21, 'azcg', 'we', '2018'),
(22, 'trerazs', 'we', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tblsenator`
--

CREATE TABLE IF NOT EXISTS `tblsenator` (
  `senID` int(11) NOT NULL AUTO_INCREMENT,
  `senator` varchar(255) NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  PRIMARY KEY (`senID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tblsenator`
--

INSERT INTO `tblsenator` (`senID`, `senator`, `electionName`, `electionYear`) VALUES
(1, 'okay sen a tor', 'hara eon ah', '2018'),
(2, 'senate haha', 'hzjhxjz', '2018'),
(3, 'uman Pah?', 'hzjhxjz', '2018'),
(4, 'lalalala', 'New Elect', '2018'),
(5, 'luhhhh', 'hays bago', '2018'),
(6, 'luhhhh1', 'hays bago', '2018'),
(7, 'ohhh', 'hays bago', '2018'),
(8, 'rakukola', 'another', '2018'),
(9, 'rikalilo', 'another', '2018'),
(10, 'resfakuja', 'another', '2018'),
(11, 'ramnuwi', 'another', '2018'),
(12, 'fsdfs', 'g', '2018'),
(13, 'sds', 'g', '2018'),
(14, 'dfdfds', 'we', '2018'),
(15, 'vbnbn', 'we', '2018'),
(16, 'bnfa', 'we', '2018'),
(17, 'ds', 'we', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbltreasurer`
--

CREATE TABLE IF NOT EXISTS `tbltreasurer` (
  `treasID` int(11) NOT NULL AUTO_INCREMENT,
  `treasurer` varchar(255) NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  PRIMARY KEY (`treasID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbltreasurer`
--

INSERT INTO `tbltreasurer` (`treasID`, `treasurer`, `electionName`, `electionYear`) VALUES
(1, 'Nice Treasurer', 'hara eon ah', '2018'),
(2, 'Nice Treasurer', 'hara eon ah', '2018'),
(3, 'mah', 'hzjhxjz', '2018'),
(4, 'olala', 'hzjhxjz', '2018'),
(5, 'gammmm', 'hzjhxjz', '2018'),
(6, 'gammmm', 'hzjhxjz', '2018'),
(7, 'pooottt', 'New Elect', '2018'),
(8, 'geee', 'hays bago', '2018'),
(9, 'geee1', 'hays bago', '2018'),
(10, 'geee2', 'hays bago', '2018'),
(11, 'ehhh', 'hays bago', '2018'),
(12, 'samana', 'another', '2018'),
(13, 'subabi', 'another', '2018'),
(14, 'sukali', 'another', '2018'),
(15, 'sanjiko', 'another', '2018'),
(16, 'fdsd', 'g', '2018'),
(17, 'fsd', 'g', '2018'),
(18, 'fdfdd', 'we', '2018'),
(19, 'bvbnvbn', 'we', '2018'),
(20, 'vbnv', 'we', '2018'),
(21, 'asaacxc', 'we', '2018'),
(22, 'asdsd', 'we', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentId` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `attempt` varchar(255) NOT NULL,
  `log_time` varchar(255) NOT NULL,
  `account_type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `studentId`, `firstName`, `middleName`, `lastName`, `department`, `course`, `year`, `attempt`, `log_time`, `account_type`) VALUES
(1, '435', 'sample', 'sample', 'sample', 'BASE', ' BSE ', 'First Year', '', '', 2),
(2, '435', 'sample', 'sample', 'sample', 'CRIMSING', ' BSCrim ', 'Second Year', '', '', 2),
(3, '123', 'John Humbert', 'Tandog', 'Duran', 'ICS', ' BSIT ', 'Fourth Year', '3', '06:28 PM', 2),
(4, '133', 'sam', 'sam', 'sam', 'ICS', ' ACT ', 'Fourth Year', '', '', 2),
(9, '99898989', 'Update', 'asas', 'asasa', 'CRIMSING', ' BSN ', 'Second Year', '1', '', 2),
(10, '43', 'sdsd', 'sdsd', 'sds', '', ' PolSci', 'Third Year', '', '', 2),
(11, '76876786', 'bago man da ', 'sasas', 'sfgxvxc', 'BASE', ' BSE ', 'Fourth Year', '', '', 2),
(13, '8686', 'dsds', 'asasas', 'sdsd', '', ' BSC ', 'Fourth Year', '', '', 2),
(14, '434', 'qwq', 'qwq', 'wqwqw', 'HMTM', ' BSTM ', 'First Year', '', '', 2),
(16, '111111', 'sasa', 'sasas', 'asas', '', ' Select Department First ', 'Third Year', '', '', 2),
(17, '1313133333', 'sasa', 'sasa', 'sasas', '', ' Select Department First ', 'Third Year', '', '', 2),
(18, '44555555', 'sasas', 'sasasa', 'asasa', '', ' Select Department First ', 'Third Year', '', '', 2),
(19, '76767', 'dsdsds', 'asasa', 'sasa', '', ' Select Department First ', 'Second Year', '', '', 2),
(20, '655', '4', 'dsds', 'dsdsds', '', ' BSCrim ', '', '', '', 2),
(21, 'dfdf', 'fdfd', 'dfd', 'fdfd', '', ' BSBA ', '', '', '', 2),
(22, 'sds', 'sd', 'sdsd', 'sdsd', 'CRIMSING', ' BSCrim ', 'Second Year', '', '', 2),
(23, 'sdds', 'sds', 'dsdsd', 'sds', '', ' BSBA ', '', '', '', 2),
(26, 'asasasa', 'asa', 'sfdf', 'dfd', '', ' BSCrim ', '', '', '', 2),
(27, 'dsds', 'dsds', 'dsds', 'dsds', '', ' BSBA ', '', '', '', 2),
(28, 'ewe', 'ewew', 'wew', 'wewew', '', ' BSBA ', 'Select Year', '', '', 2),
(29, '767575', 'sds', 'dsd', 'sdsds', '', ' BSA ', '', '', '', 2),
(31, 'fdg', 'hfghfhf', 'hfgh', 'fghfgh', '', ' BSBA ', 'Fourth Year', '', '', 2),
(32, 'sdfdf6565', '656565', '64tf', 'dfddf', '', ' BSCrim ', 'First Year', '', '', 2),
(33, 'sdsd', 'sdsds', 'dsdsd', 'sdsdsd', '', ' BSCrim ', 'Second Year', '', '', 2),
(34, 'fd644', 'sda', 'dada', 'adad', '', ' BSHM ', 'Second Year', '', '', 2),
(35, 'we4rtet4', 'waewea', 'weawe', 'awewaea', '', ' BSBA ', 'Second Year', '', '', 2),
(36, 'w31wewae', 'ada', 'dad', 'dddddddddda', '', ' BSBA ', 'Second Year', '', '', 2),
(37, 'df', 'dsdf', 'dd', 'dd', '', ' BSCrim ', 'Third Year', '', '', 2),
(38, 'dfdt45454sdf', 'fd', 'sfd', 'sdfd', '', ' BSN ', 'First Year', '', '', 2),
(39, 'sa', 'asa', 'a', 'sasasa', '', ' BSBA ', 'Third Year', '', '', 2),
(40, '45454', 'sdsd', 'dsds', 'dsds', '', ' BSBA ', 'Second Year', '', '', 2),
(41, '54545', 'sdf', 'fsdf', 'fd', '', ' BSBA ', 'Third Year', '', '', 2),
(42, '54544', 'sfs', 'sdfs', 'fdf', '', ' BSCrim ', 'Third Year', '', '', 2),
(43, '653', 'da', 'dada', 'da', '', ' BSCrim ', 'Fourth Year', '', '', 2),
(44, '65656565', 'ds44ds', 'dsd3sd', 'd3sds', '', ' BSHM ', 'Fourth Year', '', '', 2),
(45, '77777771', 'dfdfdf', 'dfdfd', 'dfdfdf', '', ' BSTM ', 'Fourth Year', '', '', 2),
(46, '45466767', 'sdsdsd', 'dsds', 'dsdsd', '', ' BSBA ', 'Second Year', '', '', 2),
(47, '44444444', 'sds', 'dsdsds', 'dsds', '', ' BSBA ', 'Second Year', '', '', 2),
(48, '56576566', 'dsdsd', 'dsds', 'dsds', '', ' BSCrim ', 'Third Year', '', '', 2),
(49, '13131333', 'eses', 'dsdsds', 'dsds', '', ' BSE ', 'Third Year', '', '', 2),
(50, '6656565', 'fsfd', 'fdfd', 'fdfdf', '', ' BSHM ', 'Third Year', '', '', 2),
(51, '556', 'dsds', 'dsdsd', 'sdsds', '', ' BSBA ', 'Fourth Year', '', '', 2),
(52, '665', 'sdsd', 'sdsds', 'sdsd', '', ' BSCrim ', 'Third Year', '', '', 2),
(53, '3435', 'sdsd', 'sdsds', 'dsds', '', ' BSBA ', 'Second Year', '', '', 2),
(54, '7676', 'fdfd', 'fdfd', 'fdfdf', '', ' BSHM ', 'Third Year', '', '', 2),
(55, '656', 'fdf', 'dfdf', 'dfdf', '', ' BSCrim ', 'Third Year', '', '', 2),
(56, '65', 'sds', 'dsdsd', 'sdsd', '', ' BSHM ', 'Second Year', '', '', 2),
(57, '65644646', 'sdsds', 'dsds', 'dsdsd', '', ' BSA ', 'Fourth Year', '', '', 2),
(58, '45455555', 'sdsd', 'sds', 'sdsds', '', ' BSN ', 'Third Year', '', '', 2),
(59, '11133313', 'sdsdsd', 'sdsds', 'dsdsds', '', ' BSN ', 'First Year', '', '', 2),
(60, '65675676', 'fdgfgdf', 'gdfgdf', 'gdfgfdgdfgd', '', ' BSBA ', 'Second Year', '', '', 2),
(61, '76568786', 'rtyrtyrtyrtytryrty', 'dssdf', 'dfdddd', '', ' BSCrim ', 'Third Year', '', '', 2),
(62, '45654646', 'sdfs', 'dfsdfs', 'fdsd', '', ' BSCrim ', 'Third Year', '', '', 2),
(63, '75675675', 'dfdfdfd', 'fdfdfd', 'fdfdfdfd', '', ' BSN ', 'First Year', '', '', 2),
(64, '76766666', 'dsdsd', 'sdsds', 'dsds', '', ' BSA ', 'Third Year', '', '', 2),
(65, '76756756', 'fsdfd', 'fdfsdf', 'dsdfsdf', '', ' PolSci ', 'Third Year', '', '', 2),
(66, '66655565', 'rfsdfgfhjug', 'hjsfsdf', 'sdfsdfd', '', ' ACT ', 'First Year', '', '', 2),
(67, '64575767', 'dfdfd', 'rtdfdfd', 'sfsfs', '', ' BSCrim ', 'Second Year', '', '', 2),
(68, '65656566', 'dfdfd', 'fdfd', 'fdfd', '', ' BSBA ', 'Fourth Year', '', '', 2),
(69, '91089189', 'New', 'Voter', 'Test', '', 'BSA', 'First Year', '', '', 2),
(70, '87676736', 'Juan', 'Dela', 'Cruz', 'BASE', ' PolSci ', 'Second Year', '', '', 2),
(71, '77879877', 'sdfsdff', 'dfd', 'sdfsdf', 'CRIMSING', ' BSCrim ', 'Third Year', '', '', 2),
(72, '98989898', 'dda', 'dad', 'dad', 'BASE', ' BSE ', 'Third Year', '', '', 2),
(73, '78787878', 'bago', 'kjsl', 'lklkls', 'ICS', ' BSCS ', 'Third Year', '', '', 2),
(74, '87778818', 'again', 'asasa', 'asa', 'HMTM', ' BSTM ', 'First Year', '', '', 2),
(75, 'admin', 'admin', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblvgov`
--

CREATE TABLE IF NOT EXISTS `tblvgov` (
  `vGovID` int(11) NOT NULL AUTO_INCREMENT,
  `viceGovernor` varchar(255) NOT NULL,
  `viceGovDepartment` varchar(255) NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  PRIMARY KEY (`vGovID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tblvgov`
--

INSERT INTO `tblvgov` (`vGovID`, `viceGovernor`, `viceGovDepartment`, `electionName`, `electionYear`) VALUES
(1, 'sdsdas', 'CRIMSING', 'hara eon ah', '2018'),
(2, 'liahhhhhh', 'BASE', 'hzjhxjz', '2018'),
(3, 'wont wor', 'BEAD', 'hzjhxjz', '2018'),
(4, 'myyyyyaaayayah', 'CRIMSING', 'hzjhxjz', '2018'),
(5, 'yahoooo!!', 'HMTM', 'hzjhxjz', '2018'),
(6, 'anytthing for you', 'ICS', 'hzjhxjz', '2018'),
(7, 'sing', 'HMTM', 'hzjhxjz', '2018'),
(8, 'me to ', 'BASE', 'hzjhxjz', '2018'),
(9, 'sleep', 'CRIMSING', 'hzjhxjz', '2018'),
(10, 'now', 'BEAD', 'hzjhxjz', '2018'),
(11, 'vgvgvgvgvg', 'BASE', 'New Elect', '2018'),
(12, 'vgvgvgvgvg', 'BASE', 'New Elect', '2018'),
(13, 'detuo', 'HMTM', 'hays bago', '2018'),
(14, 'detuo7', 'ICS', 'hays bago', '2018'),
(15, 'detuo71', 'ICS', 'hays bago', '2018'),
(16, 'zakuya', 'ICS', 'another', '2018'),
(17, 'zebeba', 'HMTM', 'another', '2018'),
(18, 'ziszisa', 'CRIMSING', 'another', '2018'),
(19, 'zolapira', 'BEAD', 'another', '2018'),
(20, 'dfdf', 'CRIMSING', 'g', '2018'),
(21, 'sas', 'CRIMSING', 'g', '2018'),
(22, 'xcx', 'CRIMSING', 'g', '2018'),
(23, 'trtr', 'BEAD', 'g', '2018'),
(24, 'sdsds', 'BEAD', 'we', '2018'),
(25, 'cxc', 'BEAD', 'we', '2018'),
(26, 'dswaw', 'HMTM', 'we', '2018'),
(27, 'sada', 'BASE', 'we', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tblvpres`
--

CREATE TABLE IF NOT EXISTS `tblvpres` (
  `vPresID` int(11) NOT NULL AUTO_INCREMENT,
  `vicePresident` varchar(255) NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `electionYear` varchar(255) NOT NULL,
  PRIMARY KEY (`vPresID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `tblvpres`
--

INSERT INTO `tblvpres` (`vPresID`, `vicePresident`, `electionName`, `electionYear`) VALUES
(1, 'okay okay', 'hara eon ah', '2018'),
(2, 'okay okay two', 'hara eon ah', '2018'),
(3, 'hey?', 'hzjhxjz', '2018'),
(4, 'kay', 'hzjhxjz', '2018'),
(5, 'kelly', 'hzjhxjz', '2018'),
(6, 'jay', 'hzjhxjz', '2018'),
(7, 'jaywon', 'hzjhxjz', '2018'),
(8, 'kort', 'hzjhxjz', '2018'),
(9, 'kort', 'hzjhxjz', '2018'),
(10, 'kort', 'hzjhxjz', '2018'),
(11, 'kort', 'hzjhxjz', '2018'),
(12, 'kort', 'hzjhxjz', '2018'),
(13, 'op', 'hzjhxjz', '2018'),
(14, 'op', 'hzjhxjz', '2018'),
(15, 'op', 'hzjhxjz', '2018'),
(16, 'op', 'hzjhxjz', '2018'),
(17, 'hag', 'hzjhxjz', '2018'),
(18, 'hag', 'hzjhxjz', '2018'),
(19, 'hag', 'hzjhxjz', '2018'),
(20, 'geeass', 'hzjhxjz', '2018'),
(21, 'geeass', 'hzjhxjz', '2018'),
(22, 'geeass', 'hzjhxjz', '2018'),
(23, 'geeass', 'hzjhxjz', '2018'),
(24, 'geeass', 'hzjhxjz', '2018'),
(25, 'geeass', 'hzjhxjz', '2018'),
(26, 'geeass', 'hzjhxjz', '2018'),
(27, 'geeass', 'hzjhxjz', '2018'),
(28, 'geeass', 'hzjhxjz', '2018'),
(29, 'geeass', 'hzjhxjz', '2018'),
(30, 'geeass', 'hzjhxjz', '2018'),
(31, 'geeass', 'hzjhxjz', '2018'),
(32, 'geeass', 'hzjhxjz', '2018'),
(33, 'geeass', 'hzjhxjz', '2018'),
(34, 'geeass', 'hzjhxjz', '2018'),
(35, 'geeass', 'hzjhxjz', '2018'),
(36, 'geeass', 'hzjhxjz', '2018'),
(37, 'geeass', 'hzjhxjz', '2018'),
(38, 'geeass', 'hzjhxjz', '2018'),
(39, 'geeass', 'hzjhxjz', '2018'),
(40, 'geeass', 'hzjhxjz', '2018'),
(41, 'geeass', 'hzjhxjz', '2018'),
(42, 'lowlow', 'New Elect', '2018'),
(43, 'vpres', 'hays bago', '2018'),
(44, 'vpres1', 'hays bago', '2018'),
(45, 'vpres3', 'hays bago', '2018'),
(46, 'jongjing', 'another', '2018'),
(47, 'jakula', 'another', '2018'),
(48, 'jamuja', 'another', '2018'),
(49, 'jikulo', 'another', '2018'),
(50, 'jmahs', 'iiii', '2018'),
(51, 'jmahsasas', 'iiii', '2018'),
(52, 'dada', 'iiii', '2018'),
(53, 'lala', 'iiii', '2018'),
(54, 'avdbd', 'waw', '2018'),
(55, 'dfdfd', 'waw', '2018'),
(56, 'dfdfdfsds', 'waw', '2018'),
(57, 'vbnbg', 'waw', '2018'),
(58, 'ghfghf', '134567', '2018'),
(59, 'dsds', '134567', '2018'),
(60, 'dsdsjhjhj', '134567', '2018'),
(61, 'luhuhuh', 'g', '2018'),
(62, 'fs', 'g', '2018'),
(63, 'asdfsadsd', 'we', '2018'),
(64, 'deded', 'we', '2018'),
(65, 'dsasd', 'we', '2018'),
(66, 'sad', 'we', '2018');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
