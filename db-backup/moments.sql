-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2017 at 07:08 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moments`
--
CREATE DATABASE IF NOT EXISTS `moments` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moments`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `client_logo`
--

CREATE TABLE IF NOT EXISTS `client_logo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `client_logo`
--

INSERT INTO `client_logo` (`id`, `name`, `image`) VALUES
(1, 'Adani', '1_clientImage.jpg'),
(2, 'Anjli Jewelers', '2_clientImage.jpg'),
(3, 'Araldite', '3_clientImage.jpg'),
(4, 'Bharat Petrolium', '4_clientImage.jpg'),
(5, 'Colors', '5_clientImage.jpg'),
(6, 'HDFC BANK', '6_clientImage.jpg'),
(7, 'Hyundai', '7_clientImage.jpg'),
(8, 'Jito', '8_clientImage.jpg'),
(9, 'ONGC', '9_clientImage.jpg'),
(10, 'RAK', '10_clientImage.jpg'),
(11, 'Rasna', '11_clientImage.jpg'),
(12, 'Sanskar Villa', '12_clientImage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE IF NOT EXISTS `folder` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `type_id`, `name`) VALUES
(14, 2, 'Wedding Services'),
(15, 2, 'Sangeet'),
(16, 2, 'Wedding Planner'),
(17, 2, 'Exhibitions'),
(18, 2, 'Events'),
(19, 1, 'Celebrity and Artist'),
(20, 2, 'Corporate Events'),
(21, 1, 'Corporate Events'),
(22, 1, 'Religious Events'),
(23, 1, 'Builder Site Launching'),
(24, 1, 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `folder_id` int(20) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `type_id`, `folder_id`, `image`) VALUES
(1, 2, 14, '1_folderimage.jpg'),
(2, 2, 14, '2_folderimage.jpg'),
(3, 2, 14, '3_folderimage.jpg'),
(4, 2, 15, '4_folderimage.jpg'),
(5, 2, 15, '5_folderimage.jpg'),
(6, 2, 15, '6_folderimage.jpg'),
(7, 2, 16, '7_folderimage.jpg'),
(8, 2, 17, '8_folderimage.jpg'),
(9, 2, 17, '9_folderimage.jpg'),
(10, 2, 18, '10_folderimage.jpg'),
(11, 2, 20, '11_folderimage.jpg'),
(12, 1, 19, '12_folderimage.jpg'),
(13, 1, 23, '13_folderimage.jpg'),
(14, 1, 23, '14_folderimage.jpg'),
(15, 1, 24, '15_folderimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `image`, `details`) VALUES
(1, 'Mr. Rakeshbhai Shah (Ex. President- GCC)', '1_testImage.jpg', 'Just wanted to say thank you for all that you did for our wedding. The flowers turned out beautifully- even more than we had imagined. I got lot of compliments on the wedding centerpieces! The Hospitality management was great. You are so patient with us. I really appreciate all you did!'),
(2, 'Mr. Juhin Ajmera (CA)', '2_testImage.jpg', 'Thank you to you and your entire team for making our Sangeet awesome! We had people dancing who haven''t  danced in years. The energy, the outfits, the lights- it was all magnificent! You guys made our Sangeet incredible. It would not have been the same without you'),
(3, 'Mr. Vinay Desai  (State Executive-BJYM Gujarat)', '3_testImage.jpg', 'Wow! Fantastic! We have never seen anything like this before, these all are compliments that we got from our guests. All credit goes to you and your team. Use of technology in Entertainment, was the best part in our Reception, You''re truly best Wedding designer.'),
(4, 'Mr. Jayesh Desai (Rajhans Group)', '4_testImage.jpg', 'Thank you for making our Wedding day such an unforgettable experience! You were so amazingly attentive, punctual & professional throughout the entire process to make sure our needs were being met on our Special day. You hold a special place in our hearts.'),
(5, 'Ms. Drashti Shah (Brand Manager- HCG Cancer Centre)', '5_testImage.jpg', 'Thank you so much for everything it was like dream come true for me. A big thank you to you and your team. Every arrangements were fantastic. We are so much happy. Thanks once again.'),
(6, 'Mr. Asit Doshi (President-WAPTAG)', '6_testImage.JPG', 'Kudos! To the entire team of Moments Event & Entertainment. The entire mechanism of WAPTAG WATER EXPO 2017 was not possible without you guys. It was an innovative and an enthusiastic event. All responsibilities taken by you were well performed. We got the satisfying experience with you. You are family to WAPTAG, Keep it up & Keep going.'),
(7, 'Mr. Paras Doshi (MD- Scarlet)', '7_testImage.jpg', 'We are associated with Moments Event & Entertainment since last 4 to 5 years and we are satisfied with them. They always deliver beyond our expectation. I highly recommended them without any doubt. Good luck & all the best for future!!');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Video'),
(2, 'Image');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
