-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 08:45 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trash`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL auto_increment,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pword` varchar(30) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `email`, `pword`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_register`
--

CREATE TABLE `complaint_register` (
  `cid` int(11) NOT NULL auto_increment,
  `trash_id` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `location` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complaint_register`
--

INSERT INTO `complaint_register` (`cid`, `trash_id`, `phone`, `email`, `location`, `problem`, `cdate`, `status`) VALUES
(1, 'tra101', '9876543123', 'sathya@gmail.com', 'trichy', 'bin is in damage', '2019/03/23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(11) NOT NULL auto_increment,
  `emp_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `trash_id` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `emp_id`, `name`, `mobile`, `address`, `designation`, `email`, `trash_id`, `password`, `status`) VALUES
(1, 'emp123', 'priya', '9876543232', 'trichy', 'Trash incharge', 'priya@gmail.com', 'tra123', '123', 0),
(2, 'emp102', 'anu', '8976545432', 'trichy', 'trash incharge', 'anu@gmail.com', 'Tra102', '123', 0),
(3, 'stf103', 'prakash', '8934256717', 'Trichy', 'incharge', 'prakash@gmail.com', 'tra103', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `tid` int(11) NOT NULL auto_increment,
  `trash_id` varchar(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `land_mark` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `incharge` varchar(25) default NULL,
  `phone` varchar(25) default NULL,
  `level` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`tid`, `trash_id`, `city`, `street`, `land_mark`, `address`, `photo`, `incharge`, `phone`, `level`, `status`) VALUES
(1, 'tra101', 'Kulithalai', 'Periyar nagar', 'Subham mahal', '12', 'trash1.jpg', 'priya', '9876543232', '300', 0),
(2, 'Tra102', 'Trichy', 'college road', 'rock fort', '23', 'trash.jpg', 'anu', '8976545432', '0', 0),
(3, 'tra103', 'trichy', 'bazzar street', 'rockfort', '45', 'trash.jpg', 'prakash', '8934256717', '3000', 0);
