-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2019 at 01:39 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `madicounsel`
--
CREATE DATABASE `madicounsel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `madicounsel`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admid`, `email`, `password`) VALUES
(1, 'admin@gmail', 'admin'),
(2, 'admin@gmail', 'admin'),
(3, 'admin@gmail', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ansid` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL,
  `regid` int(11) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`ansid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ansid`, `qid`, `regid`, `answer`, `date`) VALUES
(1, 1, 0, 'kya oga agh', '2019-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `docid` int(11) NOT NULL,
  `regid` int(11) NOT NULL,
  `doa` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(13) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appid`, `docid`, `regid`, `doa`, `status`, `date`) VALUES
(1, 6, 9, '', 'N', '2019-08-09'),
(2, 6, 0, '', 'y', '2019-08-09'),
(3, 6, 0, '2019-08-20', 'y', '2019-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `massage` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`contid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contid`, `name`, `email`, `mobile`, `massage`, `date`) VALUES
(1, 'Macculam', 'kon@gmail.com', '1234455667', 'CSK WIN THE IPL 2020', '2019-08-09'),
(2, 'Macculam', 'kon@gmail.com', '1234455667', 'CSK WIN THE IPL 2020', '2019-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `file` varchar(200) NOT NULL,
  `fees` varchar(80) NOT NULL,
  `timing` varchar(20) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`docid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`docid`, `name`, `fname`, `gender`, `email`, `password`, `mobile`, `specialist`, `address`, `file`, `fees`, `timing`, `date`) VALUES
(5, 'sertetjjkuik7tedgv', 'dhoni', 'male', 'tum@gmail.com', '9876', '8787006508', 'Neurlogists', 'chlo', '1526887806Dr.AjayAggarwal-InternalMedicien.jpg', '25', '12:24:56', '2019-08-08 15:5'),
(4, 'vivek', 'dhoni', 'male', 'tum@gmail.com', '9876', '7390936983', '', '', '1519383531Dr.SameerShrivastava.jpg', '', '', '2019-08-08 13:1'),
(6, 'macculam', 'dhoni', 'male', 'kon@gmail.com', '2312', '7390936983', 'Sargan', 'azamgarh', '1526887806Dr.AjayAggarwal-InternalMedicien.jpg', '10', '12:24:56', '2019-08-09 02:4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedid` int(11) NOT NULL AUTO_INCREMENT,
  `patid` varchar(60) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`feedid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedid`, `patid`, `feedback`, `date`) VALUES
(30, '9', 'efrui', '2019-08-09'),
(31, '1', 'hiii', '2019-08-10'),
(32, '1', 'feedack', '2019-08-10'),
(33, '1', 'hello', '2019-08-10'),
(28, '', 'kgyujkuiou', '2019-08-09'),
(29, '1', 'kgyujkuiou', '2019-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE IF NOT EXISTS `tbl_patient` (
  `patid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` varchar(60) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `date` varchar(12) NOT NULL,
  PRIMARY KEY (`patid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`patid`, `name`, `fname`, `gender`, `email`, `password`, `mobile`, `address`, `pincode`, `date`) VALUES
(1, 'dhoni', 'aadad', 'male', 'dk@gmail.com', '12345', '987654321', 'sonbhadhra', '987654321', '2019-08-04 2'),
(20, 'dhoni', 'sck', 'male', 'hum@gamil.com', '54321', '8787006508', 'nhr k par chlo', '98765', '2019-08-08 1'),
(17, 'dhoni', 'vd', 'male', 'dk@gmail.com', '12345', '987654321', 'tum', '10987', '2019-08-07'),
(9, 'dhoni', 'aadad', 'male', 'hum@gmial.com', '9090', '987654321', 'ssdffgffvc', '123456', '2019-08-06'),
(23, 'sandeep', 'csk', 'male', '', '', '', '', '', '2019-08-08 1'),
(24, 'sandeep', 'csk', 'male', '', '', '', '', '', '2019-08-08 1'),
(18, 'dhoni', 'vd', 'male', 'dk@gmail.com', '12345', '987654321', 'tum', '10987', '2019-08-07'),
(19, 'dhoni', 'csk', 'male', 'tum@gmail.com', '12345', '7390936895', 'rukl rha aavt h e', '8765432', '2019-08-08 1'),
(25, 'sandeep', 'dhoni', 'male', '', '', '', '', '', '2019-08-08 1'),
(26, 'sandeep', 'csk', 'male', 'hum@gamil.com', '12345', '8726348232', 'azm', '0547', '2019-08-09 0'),
(27, '', '', '', '', '', '', '', '', '2019-08-09 0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `regid` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`qid`, `regid`, `question`, `date`) VALUES
(1, 1, '', '2019-08-10'),
(2, 1, 'hellow', '2019-08-10');
