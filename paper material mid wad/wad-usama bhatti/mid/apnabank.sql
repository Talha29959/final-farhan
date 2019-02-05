-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2017 at 05:28 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apnabank`
--
CREATE DATABASE IF NOT EXISTS `apnabank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `apnabank`;

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `Date` date NOT NULL,
  `Voucher` int(255) NOT NULL,
  `FromBankAcc` varchar(255) NOT NULL,
  `ToBankAcc` varchar(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  PRIMARY KEY (`Voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `debit`
--

CREATE TABLE IF NOT EXISTS `debit` (
  `Date` date NOT NULL,
  `Voucher` int(255) NOT NULL,
  `FromBankAcc` varchar(255) NOT NULL,
  `ToBankAcc` varchar(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  PRIMARY KEY (`Voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
