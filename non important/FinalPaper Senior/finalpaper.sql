-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 11:57 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalpaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`) VALUES
('admin', 'admin'),
('saeed', 'khattak');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `id` int(11) NOT NULL,
  `jTitle` varchar(100) NOT NULL,
  `jkeyWords` varchar(100) NOT NULL,
  `jDescription` varchar(100) NOT NULL,
  `jLoc` varchar(100) NOT NULL,
  `jOrg` varchar(100) NOT NULL,
  `jSalary` varchar(100) NOT NULL,
  `jDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`id`, `jTitle`, `jkeyWords`, `jDescription`, `jLoc`, `jOrg`, `jSalary`, `jDate`) VALUES
(1, 'Php Developer', 'HTML, Java Script, jQuery, AJAX, AngularJS,', 'Write well designed, testable, efficient code by using best software development practices,\r\nCreate ', 'Lahore, Pakistan', 'Netsol', '75K', '10/08/2016'),
(2, 'Data Analyst', 'Data Pre-processing, R Programming, Python, Hadoop, Hive and Pig', 'Confirms project requirements by studying user requirements; conferring with others on project team.', 'Lahore, Pakistan', 'i2i', '150K', '10/08/2016'),
(3, 'Data Scientist', 'Data Extraction, Data Pre-processing, R Programming, Python, Hadoop, Hive and Pig', 'Selecting features, building and optimizing classifiers using machine learning techniques\r\nData mini', 'Peshawar, Pakistan', 'oracle', '250K', '10/08/2016'),
(4, 'Java Developer', 'Java, AWT, SPRING, JSP, Servlets, J2EE', 'Defines site objectives by analyzing user requirements; envisioning system features and functionalit', 'Karachi, Pakistan', 'sun', '100K', '10/08/2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
