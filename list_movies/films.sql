-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 12:14 AM
-- Server version: 5.5.25
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `list_films`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `styles` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `releases` date NOT NULL,
  `created_at` date NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`styles`,`releases`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `description`, `styles`, `image`, `releases`, `created_at`, `update_at`) VALUES
(1, 'wert', 'wret', 'wertqewr', '../public/images/simpatichnye-sovy.jpg', '2020-10-01', '2020-10-04', '2020-10-04 18:06:08'),
(2, '', '', '', '../public/images/simpatichnye-sovy.jpg', '0000-00-00', '2020-10-04', '2020-10-04 14:44:58'),
(3, '', '', '', '../public/images/simpatichnye-sovy.jpg', '0000-00-00', '2020-10-04', '2020-10-04 14:45:05'),
(6, '', '', '', '../public/images/simpatichnye-sovy.jpg', '0000-00-00', '2020-10-04', '2020-10-04 17:57:11'),
(7, 'ds', 's', 'sd', '../public/images/simpatichnye-sovy.jpg', '2020-10-01', '2020-10-04', '2020-10-04 17:41:55');

--
-- Triggers `films`
--
DROP TRIGGER IF EXISTS `films`;
DELIMITER //
CREATE TRIGGER `films` BEFORE INSERT ON `films`
 FOR EACH ROW SET NEW.created_at = IFNULL(NEW.created_at, NOW())
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
