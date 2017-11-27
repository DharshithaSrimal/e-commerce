-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2017 at 04:24 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_cat`
--

DROP TABLE IF EXISTS `main_cat`;
CREATE TABLE IF NOT EXISTS `main_cat` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_cat`
--

INSERT INTO `main_cat` (`cat_id`, `cat_name`) VALUES
(2, 'Electronic'),
(3, 'Automobile Parts'),
(4, 'Articles'),
(5, 'Beautycare'),
(16, 'Gift Cards');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_name` text NOT NULL,
  `cat_id` int(10) NOT NULL,
  `sub_cat_id` int(10) NOT NULL,
  `pro_img1` text NOT NULL,
  `pro_img2` text NOT NULL,
  `pro_img3` text NOT NULL,
  `pro_img4` text NOT NULL,
  `pro_feature1` text NOT NULL,
  `pro_feature2` text NOT NULL,
  `pro_feature3` text NOT NULL,
  `pro_feature4` text NOT NULL,
  `pro_feature5` text NOT NULL,
  `pro_price` text NOT NULL,
  `pro_model` text,
  `pro_warranty` text NOT NULL,
  `pro_keyword` text NOT NULL,
  `pro_added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `cat_id`, `sub_cat_id`, `pro_img1`, `pro_img2`, `pro_img3`, `pro_img4`, `pro_feature1`, `pro_feature2`, `pro_feature3`, `pro_feature4`, `pro_feature5`, `pro_price`, `pro_model`, `pro_warranty`, `pro_keyword`, `pro_added_date`) VALUES
(1, '', 2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-06-16 20:23:34'),
(2, '', 2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-06-16 20:25:06'),
(3, '', 2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-06-16 20:27:00'),
(4, '', 2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-06-16 20:29:05'),
(5, '', 2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-06-16 20:31:00'),
(6, 'asa', 2, 2, 'IMG-20170410-WA0000.jpg', '18835491_1937879516237710_7390642076430039876_n.jpg', '', '', '', '', '', '', '', '', '', '', '', '2017-06-16 20:32:00'),
(7, 'selfie stick', 2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-19 12:24:35'),
(8, 'fv', 2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-20 01:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

DROP TABLE IF EXISTS `sub_cat`;
CREATE TABLE IF NOT EXISTS `sub_cat` (
  `sub_cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `sub_cat_name` text NOT NULL,
  `cat_id` int(10) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_cat_id`, `sub_cat_name`, `cat_id`) VALUES
(1, 'Television', 2),
(2, 'Television', 2),
(3, 'Television', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
