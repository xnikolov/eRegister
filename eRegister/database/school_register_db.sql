-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20 май 2019 в 15:13
-- Версия на сървъра: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_register_db`
--

-- --------------------------------------------------------

--
-- Структура на таблица `test_marks`
--

DROP TABLE IF EXISTS `test_marks`;
CREATE TABLE IF NOT EXISTS `test_marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `class` varchar(8) CHARACTER SET utf8 NOT NULL,
  `class_number` int(11) NOT NULL,
  `marks_ongoing` varchar(10) NOT NULL,
  `mark_term_one` varchar(10) NOT NULL,
  `mark_term_two` varchar(10) NOT NULL,
  `final_mark` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `test_marks`
--

INSERT INTO `test_marks` (`id`, `first_name`, `last_name`, `class`, `class_number`, `marks_ongoing`, `mark_term_one`, `mark_term_two`, `final_mark`) VALUES
(11, 'Гергана', 'Димитрова', '8 В', 8, '2 4 3', '5', '4', '4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
