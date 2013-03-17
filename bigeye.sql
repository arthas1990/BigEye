-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2012 at 09:57 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bigeye`
--

-- --------------------------------------------------------

--
-- Table structure for table `langcat`
--

CREATE TABLE IF NOT EXISTS `langcat` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NameInEN` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ForeignName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `langcat`
--

INSERT INTO `langcat` (`ID`, `NameInEN`, `ForeignName`) VALUES
(1, 'Persian', 'فارسی'),
(2, 'English', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ModuleName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModuleDetails` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModuleProgrammer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModuleVersion` decimal(2,1) NOT NULL,
  `ModuleWorkingVersion` decimal(2,1) NOT NULL,
  `ModuleURL` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModuleIcon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`ID`, `ModuleName`, `ModuleDetails`, `ModuleProgrammer`, `ModuleVersion`, `ModuleWorkingVersion`, `ModuleURL`, `ModuleIcon`) VALUES
(1, 'mdl_halt', 'with this module you can restart or shutdown your server', 'Morteza Soltanabadiy', '1.0', '1.0', 'http://www.rahawebdesign.com', 'icon/shut_icon.png'),
(2, 'mdl_dir', 'with this module you can easily get a list of your files in the server', 'Morteza Soltanabadiy', '1.0', '1.0', 'http://www.rahawebdesign.com', 'icon/dir_icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `string`
--

CREATE TABLE IF NOT EXISTS `string` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `langID` int(10) unsigned NOT NULL,
  `String` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
