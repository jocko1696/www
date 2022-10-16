-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2022 at 08:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sara-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user-id` int(11) NOT NULL,
  `item-id` int(11) NOT NULL,
  `table-name` varchar(255) NOT NULL,
  `selected-size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `items-price` float(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `man-accessories`
--

DROP TABLE IF EXISTS `man-accessories`;
CREATE TABLE IF NOT EXISTS `man-accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `man-accessories`
--

INSERT INTO `man-accessories` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`) VALUES
(1, 'COMBINED BRAIDED WOVEN BELT', 'POLYESTER 100% LATEX 31%', 26.99, 'KM', 'images/man-accessories/1.jpg', 'images/man-accessories/2.jpg', '', ''),
(2, 'BASIC BELT WITH METALLIC BUCKLE', 'LEATHER 100%', 32.99, 'KM', 'images/man-accessories/3.jpg', 'images/man-accessories/4.jpg', '', ''),
(3, 'COMBINED BRAIDED WOVEN BELT', 'POLYESTER 100% LATEX 31%', 26.99, 'KM', 'images/man-accessories/5.jpg', 'images/man-accessories/6.jpg', '', ''),
(4, 'BASIC BELT WITH METALLIC BUCKLE', 'LEATHER 100%', 32.99, 'KM', 'images/man-accessories/7.jpg', 'images/man-accessories/8.jpg', '', ''),
(5, 'BASIC BELT WITH METALLIC BUCKLE', 'LEATHER 100%', 32.99, 'KM', 'images/man-accessories/9.jpg', 'images/man-accessories/10.jpg', '', ''),
(6, 'MEDIUM NYLON BAG WITH ZIPPER CLOSURE', 'POLYESTER 75% POLYURETHANE 25%', 38.99, 'KM', 'images/man-accessories/13.jpg', 'images/man-accessories/12.jpg', '', ''),
(7, 'BELT BAG WITH FRONT POCKET', 'POLYESTER 100%', 30.99, 'KM', 'images/man-accessories/15.jpg', 'images/man-accessories/14.jpg', '', ''),
(8, 'COMBINED BRAIDED WOVEN BELT', 'POLYESTER 100% LATEX 31%', 26.99, 'KM', 'images/man-accessories/18.jpg', 'images/man-accessories/17.jpg', '', ''),
(9, 'COMBINED BRAIDED WOVEN BELT', 'POLYESTER 100% LATEX 31%', 26.99, 'KM', 'images/man-accessories/20.jpg', 'images/man-accessories/21.jpg', '', ''),
(10, 'BRAIDED LEATHER BELT WITH METALLIC BUCKLE', '100% BOVINE LEATHER', 32.99, 'KM', 'images/man-accessories/33.jpg', 'images/man-accessories/32.jpg', '', ''),
(11, 'WASHED EFFECT BASEBALL CAP. BACK CLOSURE WITH VELCRO', '100% COTTON', 24.99, 'KM', 'images/man-accessories/27.jpg', 'images/man-accessories/26.jpg', '', ''),
(12, 'WASHED EFFECT BASEBALL CAP. BACK CLOSURE WITH VELCRO', '100% COTTON', 24.99, 'KM', 'images/man-accessories/23.jpg', 'images/man-accessories/22.jpg', '', ''),
(13, 'WASHED EFFECT BASEBALL CAP. BACK CLOSURE WITH VELCRO', '100% COTTON', 24.99, 'KM', 'images/man-accessories/25.jpg', 'images/man-accessories/24.jpg', '', ''),
(14, 'PLAIN LINEN BERET. LINEN 100%', '100% LINEN', 24.99, 'KM', 'images/man-accessories/28.jpg', 'images/man-accessories/29.jpg', '', ''),
(15, 'PLAIN LINEN BERET. LINEN 100%', '100% LINEN', 24.99, 'KM', 'images/man-accessories/30.jpg', 'images/man-accessories/31.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `man-jackets`
--

DROP TABLE IF EXISTS `man-jackets`;
CREATE TABLE IF NOT EXISTS `man-jackets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `s` tinyint(4) NOT NULL,
  `m` tinyint(4) NOT NULL,
  `l` tinyint(4) NOT NULL,
  `xl` tinyint(4) NOT NULL,
  `xxl` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `man-jackets`
--

INSERT INTO `man-jackets` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'ECO-QUILTED JACKET WITH FRONT ZIPPER CLOSURE AND FUNNEL NECK', '100% NYLON', 70.99, 'KM', 'images/man-jackets/4.jpg', 'images/man-jackets/3.jpg', 'images/man-jackets/2.jpg', 'images/man-jackets/1.jpg', 1, 0, 1, 1, 0),
(2, 'ECO-QUILTED JACKET WITH FRONT ZIPPER CLOSURE AND FUNNEL NECK', '100% NYLON', 70.99, 'KM', 'images/man-jackets/8.jpg', 'images/man-jackets/7.jpg', 'images/man-jackets/6.jpg', 'images/man-jackets/5.jpg', 1, 0, 0, 0, 0),
(3, 'ECO PADDED VEST WITH FUNNEL NECK AND FRONT ZIP CLOSURE', '100% NYLON', 38.99, 'KM', 'images/man-jackets/20.jpg', 'images/man-jackets/19.jpg', 'images/man-jackets/18.jpg', 'images/man-jackets/17.jpg', 1, 1, 1, 1, 0),
(4, 'ECO PADDED VEST WITH FUNNEL NECK AND FRONT ZIP CLOSURE', '100% NYLON', 38.99, 'KM', 'images/man-jackets/12.jpg', 'images/man-jackets/11.jpg', 'images/man-jackets/10.jpg', 'images/man-jackets/9.jpg', 1, 1, 1, 1, 0),
(5, 'ECO PADDED VEST WITH FUNNEL NECK AND FRONT ZIP CLOSURE', '100% NYLON', 38.99, 'KM', 'images/man-jackets/16.jpg', 'images/man-jackets/15.jpg', 'images/man-jackets/14.jpg', 'images/man-jackets/13.jpg', 1, 0, 0, 0, 0),
(6, 'NAUTICAL JACKET WITH HOOD AND FRONT ZIPPER CLOSURE', 'POLYESTER 100%', 70.99, 'KM', 'images/man-jackets/24.jpg', 'images/man-jackets/23.jpg', 'images/man-jackets/22.jpg', 'images/man-jackets/21.jpg', 1, 0, 1, 1, 0),
(7, 'SHORT JACKET WITH FUNNEL COLLAR AND FRONT ZIPPER CLOSURE', 'POLYESTER 58% COTTON 42%', 78.99, 'KM', 'images/man-jackets/28.jpg', 'images/man-jackets/27.jpg', 'images/man-jackets/26.jpg', 'images/man-jackets/25.jpg', 1, 0, 0, 0, 0),
(8, 'SHORT LIGHTWEIGHT PARKA WITH HOOD', '100% COTTON', 192.99, 'KM', 'images/man-jackets/32.jpg', 'images/man-jackets/31.jpg', 'images/man-jackets/30.jpg', 'images/man-jackets/29.jpg', 1, 0, 1, 1, 0),
(9, 'SHORT LIGHTWEIGHT PARKA WITH HOOD', '100% COTTON', 192.99, 'KM', 'images/man-jackets/36.jpg', 'images/man-jackets/35.jpg', 'images/man-jackets/34.jpg', 'images/man-jackets/33.jpg', 1, 0, 0, 1, 1),
(10, 'SHORT LIGHTWEIGHT JACKET', 'POLYESTER 58% COTTON 42%', 50.99, 'KM', 'images/man-jackets/40.jpg', 'images/man-jackets/39.jpg', 'images/man-jackets/38.jpg', 'images/man-jackets/37.jpg', 1, 0, 1, 1, 0),
(11, 'PLAIN TRENCH COAT WITH FRONT BUTTONS CLOSURE', 'POLYESTER 100%', 138.99, 'KM', 'images/man-jackets/54.jpg', 'images/man-jackets/53.jpg', 'images/man-jackets/52.jpg', 'images/man-jackets/51.jpg', 1, 1, 1, 1, 0),
(12, 'SHORT LIGHTWEIGHT PARKA WITH HOOD. FRONT ZIPPER AND BUTTONS CLOSURE', 'POLYESTER 84% COTTON 16%', 138.99, 'KM', 'images/man-jackets/57.jpg', 'images/man-jackets/56.jpg', 'images/man-jackets/55.jpg', 'images/man-jackets/54.jpg', 1, 0, 1, 1, 0),
(13, 'SAHARAN LINEN JACKET WITH FRONT BUTTONS CLOSURE', 'POLYESTER 84% COTTON 16%', 118.99, 'KM', 'images/man-jackets/61.jpg', 'images/man-jackets/60.jpg', 'images/man-jackets/59.jpg', 'images/man-jackets/58.jpg', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `man-shirts`
--

DROP TABLE IF EXISTS `man-shirts`;
CREATE TABLE IF NOT EXISTS `man-shirts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `s` tinyint(4) NOT NULL,
  `m` tinyint(4) NOT NULL,
  `l` tinyint(4) NOT NULL,
  `xl` tinyint(4) NOT NULL,
  `xxl` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `man-shirts`
--

INSERT INTO `man-shirts` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'REGULAR FIT SHIRT WITH SHIRT COLLAR AND LONG SLEEVE', 'COTTON 60% POLYESTER 40%', 34.99, 'KM', 'images/man-shirts/4.jpg', 'images/man-shirts/3.jpg', 'images/man-shirts/2.jpg', 'images/man-shirts/1.jpg', 1, 0, 0, 0, 0),
(2, 'PRINTED SHIRT WITH SHIRT COLLAR AND FRONT BUTTON CLOSURE', 'COTTON 60% POLYESTER 40%', 34.99, 'KM', 'images/man-shirts/8.jpg', 'images/man-shirts/7.jpg', 'images/man-shirts/6.jpg', 'images/man-shirts/5.jpg', 1, 0, 0, 0, 0),
(3, 'SLIM FIT LONG-SLEEVED SHIRT WITH BUTTONED COLLAR', 'COTTON 100%', 38.99, 'KM', 'images/man-shirts/12.jpg', 'images/man-shirts/11.jpg', 'images/man-shirts/10.jpg', 'images/man-shirts/9.jpg', 0, 0, 0, 0, 0),
(4, 'REGULAR FIT SHIRT WITH SHIRT COLLAR AND LONG SLEEVE', 'COTTON 60% POLYESTER 40%', 34.99, 'KM', 'images/man-shirts/16.jpg', 'images/man-shirts/15.jpg', 'images/man-shirts/14.jpg', 'images/man-shirts/13.jpg', 1, 0, 1, 1, 0),
(5, 'REGULAR FIT SHIRT WITH SHIRT COLLAR AND LONG SLEEVE', 'COTTON 60% POLYESTER 40%', 34.99, 'KM', 'images/man-shirts/85.jpg', 'images/man-shirts/83.jpg', 'images/man-shirts/84.jpg', 'images/man-shirts/82.jpg', 1, 1, 1, 1, 0),
(6, 'PRINTED SHIRT WITH SHIRT COLLAR AND FRONT BUTTON CLOSURE', 'COTTON 60% POLYESTER 40%', 34.99, 'KM', 'images/man-shirts/20.jpg', 'images/man-shirts/19.jpg', 'images/man-shirts/18.jpg', 'images/man-shirts/17.jpg', 1, 1, 1, 1, 1),
(7, 'LONG SLEEVED CHECK CHECK SHIRT WITH BUTTONED COLLAR', 'COTTON 100%', 34.99, 'KM', 'images/man-shirts/24.jpg', 'images/man-shirts/23.jpg', 'images/man-shirts/23.jpg', 'images/man-shirts/22.jpg', 1, 1, 1, 1, 1),
(8, 'LONG SLEEVED CHECK CHECK SHIRT WITH BUTTONED COLLAR', 'COTTON 100%', 34.99, 'KM', 'images/man-shirts/28.jpg', 'images/man-shirts/27.jpg', 'images/man-shirts/27.jpg', 'images/man-shirts/26.jpg', 1, 0, 1, 1, 0),
(9, 'LONG SLEEVED CHECK CHECK SHIRT WITH BUTTONED COLLAR', 'COTTON 100%', 34.99, 'KM', 'images/man-shirts/32.jpg', 'images/man-shirts/31.jpg', 'images/man-shirts/30.jpg', 'images/man-shirts/29.jpg', 1, 1, 1, 1, 1),
(10, ' STRIPED LINEN SHIRT WITH SHIRT COLLAR', 'LINEN 55% COTTON 45%', 38.99, 'KM', 'images/man-shirts/36.jpg', 'images/man-shirts/35.jpg', 'images/man-shirts/34.jpg', 'images/man-shirts/33.jpg', 1, 0, 1, 1, 0),
(11, 'REGULAR FIT LINEN SHIRT WITH SHIRT COLLAR', 'LINEN 65% COTTON 35%', 38.99, 'KM', 'images/man-shirts/40.jpg', 'images/man-shirts/39.jpg', 'images/man-shirts/38.jpg', 'images/man-shirts/37.jpg', 1, 0, 1, 1, 0),
(12, 'REGULAR FIT LINEN SHIRT WITH SHIRT COLLAR', 'LINEN 65% COTTON 35%', 38.99, 'KM', 'images/man-shirts/53.jpg', 'images/man-shirts/52.jpg', 'images/man-shirts/51.jpg', 'images/man-shirts/50.jpg', 1, 1, 1, 1, 1),
(13, 'STRIPED SHIRT WITH MAO COLLAR AND LONG SLEEVE', 'LINEN 65% COTTON 35%', 38.99, 'KM', 'images/man-shirts/49.jpg', 'images/man-shirts/48.jpg', 'images/man-shirts/47.jpg', 'images/man-shirts/46.jpg', 1, 0, 0, 0, 0),
(14, 'LINEN OVERSHIRT WITH SHIRT COLLAR. FRONT POCKETS', 'COTTON 77% LINEN 23%', 46.99, 'KM', 'images/man-shirts/45.jpg', 'images/man-shirts/44.jpg', 'images/man-shirts/43.jpg', 'images/man-shirts/42.jpg', 1, 0, 1, 1, 0),
(15, 'REGULAR LINEN FIT SHIRT WITH BUTTONED COLLAR', 'LINEN 65% COTTON 35%', 38.99, 'KM', 'images/man-shirts/57.jpg', 'images/man-shirts/56.jpg', 'images/man-shirts/55.jpg', 'images/man-shirts/54.jpg', 1, 0, 1, 1, 0),
(16, 'SHORT SLEEVED SHIRT WITH MAO COLLAR', 'COTTON 100%', 34.99, 'KM', 'images/man-shirts/61.jpg', 'images/man-shirts/60.jpg', 'images/man-shirts/58.jpg', 'images/man-shirts/59.jpg', 1, 0, 1, 1, 0),
(17, 'SHORT SLEEVED SHIRT WITH MAO COLLAR', 'COTTON 100%', 34.99, 'KM', 'images/man-shirts/65.jpg', 'images/man-shirts/64.jpg', 'images/man-shirts/63.jpg', 'images/man-shirts/62.jpg', 1, 1, 1, 1, 1,
(18, 'SHORT SLEEVED SHIRT WITH MAO COLLAR', 'COTTON 100%', 34.99, 'KM', 'images/man-shirts/69.jpg', 'images/man-shirts/68.jpg', 'images/man-shirts/66.jpg', 'images/man-shirts/67.jpg', 1, 0, 0, 0, 0),
(19, 'PRINTED VOILE SHIRT', 'VISCOSA 100%', 30.99, 'KM', 'images/man-shirts/81.jpg', 'images/man-shirts/80.jpg', 'images/man-shirts/78.jpg', 'images/man-shirts/79.jpg', 1, 0, 0, 0, 0),
(20, 'FLORAL SHIRT COLLAR AND FRONT BUTTONS CLOSURE', 'VISCOSA 100%', 34.99, 'KM', 'images/man-shirts/72.jpg', 'images/man-shirts/71.jpg', 'images/man-shirts/70.jpg', 'images/man-shirts/73.jpg', 1, 0, 0, 0, 0),
(21, 'FLORAL SHIRT COLLAR AND FRONT BUTTONS CLOSURE', 'VISCOSA 100%', 34.99, 'KM', 'images/man-shirts/76.jpg', 'images/man-shirts/77.jpg', 'images/man-shirts/a.jpg', 'images/man-shirts/74.jpg', 1, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `man-shoes`
--

DROP TABLE IF EXISTS `man-shoes`;
CREATE TABLE IF NOT EXISTS `man-shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `size-37` tinyint(4) NOT NULL,
  `size-38` tinyint(4) NOT NULL,
  `size-39` tinyint(4) NOT NULL,
  `size-40` tinyint(4) NOT NULL,
  `size-41` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `man-shoes`
--

INSERT INTO `man-shoes` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `size-37`, `size-38`, `size-39`, `size-40`, `size-41`) VALUES
(1, 'RUNNING SHOES WITH LACE CLOSURE. RUBBER IN SOLE', 'SYNTHETIC 100%', 52.99, 'KM', 'images/man-shoes/1.jpg', 'images/man-shoes/2.jpg', 'images/man-shoes/3.jpg', 'images/man-shoes/4.jpg', 1, 1, 1, 1, 1),
(2, 'SUEDE EFFECT FLAT SNEAKERS WITH LACE CLOSURE', 'SYNTHETIC 100%', 52.99, 'KM', 'images/man-shoes/5.jpg', 'images/man-shoes/6.jpg', 'images/man-shoes/7.jpg', 'images/man-shoes/8.jpg', 1, 0, 1, 1, 0),
(3, 'FLAT CANVAS SNEAKERS. LACE CLOSURE', 'SYNTHETIC 100%', 34.99, 'KM', 'images/man-shoes/9.jpg', 'images/man-shoes/10.jpg', 'images/man-shoes/11.jpg', 'images/man-shoes/12.jpg', 1, 0, 0, 0, 0),
(4, 'FLAT CANVAS SNEAKERS WITH LACE CLOSURE. CONTRASTING REAR DETAIL', 'TEXTILE 100%', 30.99, 'KM', 'images/man-shoes/13.jpg', 'images/man-shoes/14.jpg', 'images/man-shoes/15.jpg', 'images/man-shoes/16.jpg', 1, 0, 1, 1, 0),
(5, 'FLAT LACE-UP SNEAKERS WITH CONTRASTING SIDE STRIPE', 'TEXTILE 100%', 38.99, 'KM', 'images/man-shoes/20.jpg', 'images/man-shoes/19.jpg', 'images/man-shoes/18.jpg', 'images/man-shoes/17.jpg', 0, 0, 0, 0, 0),
(6, 'FLAT STRIPED FLIP FLOPS', 'TEXTILE 100%', 18.99, 'KM', 'images/man-shoes/24.jpg', 'images/man-shoes/23.jpg', 'images/man-shoes/22.jpg', 'images/man-shoes/21.jpg', 1, 1, 0, 0, 0),
(7, 'FLAT STRIPED FLIP FLOPS', 'TEXTILE 100%', 18.99, 'KM', 'images/man-shoes/28.jpg', 'images/man-shoes/27.jpg', 'images/man-shoes/26.jpg', 'images/man-shoes/25.jpg', 1, 1, 0, 0, 0),
(8, 'FLAT STRIPED ESPARDINE', 'TEXTILE 100%', 24.99, 'KM', 'images/man-shoes/29.jpg', 'images/man-shoes/30.jpg', 'images/man-shoes/31.jpg', 'images/man-shoes/32.jpg', 1, 1, 1, 1, 1),
(9, 'FLAT STRIPED ESPARDINE', 'TEXTILE 100%', 24.99, 'KM', 'images/man-shoes/36.jpg', 'images/man-shoes/35.jpg', 'images/man-shoes/34.jpg', 'images/man-shoes/33.jpg', 1, 1, 0, 0, 0),
(10, 'FLAT STRIPED ESPARDINE', 'TEXTILE 100%', 24.99, 'KM', 'images/man-shoes/37.jpg', 'images/man-shoes/38.jpg', 'images/man-shoes/39.jpg', 'images/man-shoes/40.jpg', 1, 0, 0, 0, 0),
(11, 'FLAT STRIPED ESPARDINE', 'TEXTILE 100%', 24.99, 'KM', 'images/man-shoes/42.jpg', 'images/man-shoes/43.jpg', 'images/man-shoes/44.jpg', 'images/man-shoes/45.jpg', 1, 1, 0, 0, 1),
(12, 'FLAT STRIPED ESPARDINE', 'TEXTILE 100%', 24.99, 'KM', 'images/man-shoes/47.jpg', 'images/man-shoes/48.jpg', 'images/man-shoes/49.jpg', 'images/man-shoes/50.jpg', 1, 1, 0, 0, 1),
(13, 'FLAT STRIPED ESPARDINE', 'TEXTILE 100%', 24.99, 'KM', 'images/man-shoes/51.jpg', 'images/man-shoes/52.jpg', 'images/man-shoes/53.jpg', 'images/man-shoes/54.jpg', 1, 1, 1, 1, 1),
(14, 'FLAT STRIPED ESPARDINE', 'TEXTILE 100%', 24.99, 'KM', 'images/man-shoes/58.jpg', 'images/man-shoes/57.jpg', 'images/man-shoes/56.jpg', 'images/man-shoes/55.jpg',1, 1, 1, 1, 1),
(15, 'BIO FLAT SANDAL WITH DOUBLE BUCKLE', '100% BOVINE LEATHER%', 38.99, 'KM', 'images/man-shoes/62.jpg', 'images/man-shoes/61.jpg', 'images/man-shoes/60.jpg', 'images/man-shoes/59.jpg', 1, 0, 0, 0, 0),
(16, 'SUEDE EFFECT SNEAKER WITH LACE CLOSURE', ' SYNTHETIC 100%', 50.99, 'KM', 'images/man-shoes/63.jpg', 'images/man-shoes/64.jpg', 'images/man-shoes/65.jpg', 'images/man-shoes/66.jpg',1, 1, 1, 1, 1),
(17, 'MOCASINE STYLE ESPADRENA', ' TEXTILE 100%', 30.99, 'KM', 'images/man-shoes/70.jpg', 'images/man-shoes/69.jpg', 'images/man-shoes/68.jpg', 'images/man-shoes/67.jpg', 1, 0, 0, 0, 0),
(18, 'MOCASINE STYLE ESPADRENA', ' TEXTILE 100%', 30.99, 'KM', 'images/man-shoes/70.jpg', 'images/man-shoes/69.jpg', 'images/man-shoes/68.jpg', 'images/man-shoes/67.jpg', 1, 0, 1, 1, 0),
(19, 'SUEDE EFFECT ESPARDENA WITH LACE', 'TEXTILE 100%', 30.99, 'KM', 'images/man-shoes/74.jpg', 'images/man-shoes/73.jpg', 'images/man-shoes/72.jpg', 'images/man-shoes/71.jpg', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `man-t-shirts`
--

DROP TABLE IF EXISTS `man-t-shirts`;
CREATE TABLE IF NOT EXISTS `man-t-shirts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `s` tinyint(4) NOT NULL,
  `m` tinyint(4) NOT NULL,
  `l` tinyint(4) NOT NULL,
  `xl` tinyint(4) NOT NULL,
  `xxl` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `man-t-shirts`
--

INSERT INTO `man-t-shirts` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'SLEEVED T-SHIRT WITH ROUND NECK', '100% COTTON', 14.99, 'KM', 'images/man-t-shirts/2.jpg', 'images/man-t-shirts/3.jpg', 'images/man-t-shirts/4.jpg', 'images/man-t-shirts/1.jpg', 1, 1, 1, 1, 1),
(2, 'SLEEVED T-SHIRT WITH ROUND NECK', '100% COTTON', 14.99, 'KM', 'images/man-t-shirts/6.jpg', 'images/man-t-shirts/7.jpg', 'images/man-t-shirts/8.jpg', 'images/man-t-shirts/5.jpg', 1, 0, 1, 1, 0),
(3, 'SLEEVED T-SHIRT WITH ROUND NECK', '100% COTTON', 14.99, 'KM', 'images/man-t-shirts/10.jpg', 'images/man-t-shirts/11.jpg', 'images/man-t-shirts/12.jpg', 'images/man-t-shirts/9.jpg', 1, 0, 1, 1, 0),
(4, 'SLEEVED T-SHIRT WITH ROUND NECK', '100% COTTON', 14.99, 'KM', 'images/man-t-shirts/14.jpg', 'images/man-t-shirts/15.jpg', 'images/man-t-shirts/16.jpg', 'images/man-t-shirts/13.jpg', 1, 0, 1, 1, 0),
(5, 'PLAIN SHORT SLEEVED T-SHIRT WITH ROUND NECK', '100% COTTON', 8.99, 'KM', 'images/man-t-shirts/18.jpg', 'images/man-t-shirts/17.jpg', 'images/man-t-shirts/19.jpg', 'images/man-t-shirts/a.jpg', 1, 1, 1, 1, 1),
(6, 'PLAIN SHORT SLEEVED T-SHIRT WITH ROUND NECK', '100% COTTON', 8.99, 'KM', 'images/man-t-shirts/22.jpg', 'images/man-t-shirts/23.jpg', 'images/man-t-shirts/24.jpg', 'images/man-t-shirts/21.jpg', 1, 0, 0, 0, 0),
(7, 'SHORT SLEEVE T-SHIRT WITH V NECK', '100% COTTON', 8.99, 'KM', 'images/man-t-shirts/26.jpg', 'images/man-t-shirts/27.jpg', 'images/man-t-shirts/28.jpg', 'images/man-t-shirts/25.jpg', 1, 1, 0, 0, 0),
(8, 'SHORT SLEEVE T-SHIRT WITH MESSAGE ON FRONT', 'COTTON 95% VISCOSE 5%', 18.99, 'KM', 'images/man-t-shirts/30.jpg', 'images/man-t-shirts/31.jpg', 'images/man-t-shirts/32.jpg', 'images/man-t-shirts/29.jpg', 1, 1, 0, 0, 1),
(9, 'STRIPED T-SHIRT WITH SHORT SLEEVE AND ROUND NECK', '100% COTTON', 14.99, 'KM', 'images/man-t-shirts/34.jpg', 'images/man-t-shirts/35.jpg', 'images/man-t-shirts/36.jpg', 'images/man-t-shirts/33.jpg', 1, 0, 0, 0, 0),
(10, 'LONG SLEEVED SHIRT WITH ROUND NECK AND BUTTON CLOSURE', 'COTTON 60% POLYESTER 40%', 18.99, 'KM', 'images/man-t-shirts/38.jpg', 'images/man-t-shirts/39.jpg', 'images/man-t-shirts/40.jpg', 'images/man-t-shirts/37.jpg', 1, 0, 1, 1, 0),
(11, 'LONG SLEEVED SHIRT WITH ROUND NECK AND BUTTON CLOSURE', 'COTTON 60% POLYESTER 40%', 18.99, 'KM', 'images/man-t-shirts/42.jpg', 'images/man-t-shirts/43.jpg', 'images/man-t-shirts/44.jpg', 'images/man-t-shirts/41.jpg', 1, 1, 1, 1, 1),
(12, 'LONG SLEEVED SHIRT WITH ROUND NECK AND BUTTON CLOSURE', 'COTTON 60% POLYESTER 40%', 18.99, 'KM', 'images/man-t-shirts/46.jpg', 'images/man-t-shirts/47.jpg', 'images/man-t-shirts/48.jpg', 'images/man-t-shirts/45.jpg', 1, 1, 1, 1, 1),
(13, 'SHORT SLEEVE ROUND NECK T-SHIRT WITH PRINTED DRAWING', '100% COTTON', 14.99, 'KM', 'images/man-t-shirts/50.jpg', 'images/man-t-shirts/51.jpg', 'images/man-t-shirts/52.jpg', 'images/man-t-shirts/49.jpg', 1, 0, 0, 0, 0),
(14, 'PLAIN T-SHIRT WITH SHORT SLEEVE AND V NECK', '100% COTTON', 8.99, 'KM', 'images/man-t-shirts/54.jpg', 'images/man-t-shirts/55.jpg', 'images/man-t-shirts/56.jpg', 'images/man-t-shirts/53.jpg', 1, 1, 1, 1, 1),
(15, 'PLAIN T-SHIRT WITH SKIRT. BOX NECK. FRONT POCKET', '100% COTTON', 18.99, 'KM', 'images/man-t-shirts/58.jpg', 'images/man-t-shirts/59.jpg', 'images/man-t-shirts/60.jpg', 'images/man-t-shirts/57.jpg', 1, 1, 1, 1, 1),
(16, 'PLAIN T-SHIRT WITH SKIRT. BOX NECK. FRONT POCKET', '100% COTTON', 18.99, 'KM', 'images/man-t-shirts/66.jpg', 'images/man-t-shirts/67.jpg', 'images/man-t-shirts/68.jpg', 'images/man-t-shirts/65.jpg', 1, 0, 1, 1, 0),
(17, 'PLAIN T-SHIRT WITH SKIRT. BOX NECK. FRONT POCKET', '100% COTTON', 18.99, 'KM', 'images/man-t-shirts/73.jpg', 'images/man-t-shirts/74.jpg', 'images/man-t-shirts/76.jpg', 'images/man-t-shirts/75.jpg', 1, 0, 1, 1, 0),
(18, 'SHORT SLEEVE T-SHIRT WITH FRONT POCKET', '100% COTTON', 18.99, 'KM', 'images/man-t-shirts/78.jpg', 'images/man-t-shirts/79.jpg', 'images/man-t-shirts/80.jpg', 'images/man-t-shirts/77.jpg', 1, 0, 1, 1, 0),
(19, 'SHORT SLEEVE T-SHIRT WITH FRONT POCKET', '100% COTTON', 18.99, 'KM', 'images/man-t-shirts/82.jpg', 'images/man-t-shirts/83.jpg', 'images/man-t-shirts/84.jpg', 'images/man-t-shirts/81.jpg', 1, 1, 1, 1, 1),
(20, 'SHORT SLEEVED TEXTURED T-SHIRT WITH ROUND NECK', '100% COTTON', 18.99, 'KM', 'images/man-t-shirts/86.jpg', 'images/man-t-shirts/87.jpg', 'images/man-t-shirts/88.jpg', 'images/man-t-shirts/85.jpg', 1, 1, 1, 1, 1),
(21, 'SHORT SLEEVE T-SHIRT WITH WOVEN STRIPE. BOX NECK', 'COTTON 60% POLYESTER 40%', 24.99, 'KM', 'images/man-t-shirts/90.jpg', 'images/man-t-shirts/91.jpg', 'images/man-t-shirts/92.jpg', 'images/man-t-shirts/89.jpg', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `man-trousers`
--

DROP TABLE IF EXISTS `man-trousers`;
CREATE TABLE IF NOT EXISTS `man-trousers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `s` tinyint(4) NOT NULL,
  `m` tinyint(4) NOT NULL,
  `l` tinyint(4) NOT NULL,
  `xl` tinyint(4) NOT NULL,
  `xxl` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `man-trousers`
--

INSERT INTO `man-trousers` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'DENIM TROUSERS WITH BUTTON AND ZIPPER CLOSURE', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/4.jpg', 'images/man-trousers/3.jpg', 'imagesman-trousers/2.jpg', 'images/man-trousers/1.jpg', 1, 0, 1, 1, 0),
(2, 'DENIM TROUSERS WITH BUTTON AND ZIPPER CLOSURE', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/8.jpg', 'images/man-trousers/7.jpg', 'imagesman-trousers/6.jpg', 'images/man-trousers/5.jpg', 1, 0, 0, 0, 0),
(3, 'REGULAR FIT STRAIGHT DENIM WITH BUTTON AND ZIPPER CLOSURE', ' COTTON 100%', 34.99, 'KM', 'images/man-trousers/13.jpg', 'images/man-trousers/12.jpg', 'imagesman-trousers/11.jpg', 'images/man-trousers/10.jpg', 1, 1, 1, 0, 0),
(4, 'REGULAR FIT STRAIGHT DENIM WITH BUTTON AND ZIPPER CLOSURE', ' COTTON 100%', 34.99, 'KM', 'images/man-trousers/17.jpg', 'images/man-trousers/16.jpg', 'images/man-trousers/15.jpg', 'images/man-trousers/14.jpg', 1, 0, 0, 0, 0),
(5, 'REGULAR FIT STRAIGHT DENIM WITH BUTTON AND ZIPPER CLOSURE', ' COTTON 100%', 34.99, 'KM', 'images/man-trousers/22.jpg', 'images/man-trousers/21.jpg', 'images/man-trousers/20.jpg', 'images/man-trousers/19.jpg', 1, 0, 1, 0, 0),
(6, 'REGULAR FIT STRAIGHT DENIM WITH BUTTON AND ZIPPER CLOSURE', ' COTTON 100%', 34.99, 'KM', 'images/man-trousers/27.jpg', 'images/man-trousers/26.jpg', 'images/man-trousers/25.jpg', 'images/man-trousers/24.jpg', 1, 1, 1, 1, 0),
(7, 'SLIM DENIM\r\nSLIM FIT JEANS WITH FIVE POCKETS', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/27.jpg', 'images/man-trousers/26.jpg', 'imagesman-trousers/25.jpg', 'images/man-trousers/24.jpg', 1, 0, 0, 0, 0),
(8, 'SLIM DENIM\r\nSLIM FIT JEANS WITH FIVE POCKETS', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/34.jpg', 'images/man-trousers/33.jpg', 'imagesman-trousers/32.jpg', 'images/man-trousers/31.jpg', 1, 1, 0, 0, 1),
(9, 'SLIM DENIM\r\nSLIM FIT JEANS WITH FIVE POCKETS', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/38.jpg', 'images/man-trousers/37.jpg', 'imagesman-trousers/36.jpg', 'images/man-trousers/35.jpg', 1, 1, 0, 0, 1),
(10, 'SLIM DENIM\r\nSLIM FIT JEANS WITH FIVE POCKETS', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/34.jpg', 'images/man-trousers/33.jpg', 'imagesman-trousers/32.jpg', 'images/man-trousers/31.jpg', 1, 1, 0, 0, 0),
(11, 'SLIM DENIM\r\nSLIM FIT JEANS WITH FIVE POCKETS', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/42.jpg', 'images/man-trousers/41.jpg', 'imagesman-trousers/40.jpg', 'images/man-trousers/39.jpg', 1, 1, 0, 0, 1),
(12, 'SLIM DENIM\r\nSLIM FIT JEANS WITH FIVE POCKETS', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/46.jpg', 'images/man-trousers/45.jpg', 'imagesman-trousers/44.jpg', 'images/man-trousers/43.jpg', 1, 1, 1, 1, 0),
(13, 'SLIM DENIM\r\nSLIM FIT JEANS WITH FIVE POCKETS', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/50.jpg', 'images/man-trousers/49.jpg', 'imagesman-trousers/48.jpg', 'images/man-trousers/47.jpg', 1, 0, 0, 0, 0),
(14, 'CHINO PANTS\r\nREGULAR FIT CHINO WITH POCKETS AND BUTTON AND ZIPPER CLOSURE', 'COTTON 98% ELASTANE 2%', 38.99, 'KM', 'images/man-trousers/54.jpg', 'images/man-trousers/53.jpg', 'imagesman-trousers/52.jpg', 'images/man-trousers/51.jpg', 1, 1, 0, 1, 0),
(15, 'CHINO PANTS\r\nREGULAR FIT CHINO WITH POCKETS AND BUTTON AND ZIPPER CLOSURE', 'COTTON 98% ELASTANE 2%', 38.99, 'KM', 'images/man-trousers/58.jpg', 'images/man-trousers/57.jpg', 'imagesman-trousers/56.jpg', 'images/man-trousers/55.jpg', 1, 1, 0, 0, 1),
(16, 'NATURAL DENIM\r\nDENIM TROUSERS WITH POCKETS AND FRONT ZIPPER CLOSURE', 'COTTON 99% ELASTANE 1%', 38.99, 'KM', 'images/man-trousers/64.jpg', 'images/man-trousers/63.jpg', 'imagesman-trousers/62.jpg', 'images/man-trousers/61.jpg', 1, 0, 1, 1, 0),
(17, 'LONG CARGO TROUSERS WITH BUTTON AND ZIPPER CLOSURE', 'COTTON 98% ELASTANE 2%', 38.99, 'KM', 'images/man-trousers/69.jpg', 'images/man-trousers/68.jpg', 'imagesman-trousers/66.jpg', 'images/man-trousers/67.jpg', 1, 1, 0, 0, 1),
(18, 'CARGO PANTS\r\nLONG TROUSERS WITH BUTTON AND ZIPPER CLOSURE', 'COTTON 98% ELASTANE 2%', 38.99, 'KM', 'images/man-trousers/71.jpg', 'images/man-trousers/70.jpg', 'imagesman-trousers/72.jpg', 'images/man-trousers/73.jpg', 1, 0, 1, 1, 0),
(19, 'CARGO PANTS\r\nLONG TROUSERS WITH BUTTON AND ZIPPER CLOSURE', 'COTTON 98% ELASTANE 2%', 38.99, 'KM', 'images/man-trousers/77.jpg', 'images/man-trousers/76.jpg', 'imagesman-trousers/75.jpg', 'images/man-trousers/74.jpg', 1, 0, 0, 0, 0),
(20, 'TROUSERS WITH BUTTON AND ZIPPER CLOSURE AND LACE CLOSURE', 'COTTON 100%', 50.99, 'KM', 'images/man-trousers/81.jpg', 'images/man-trousers/80.jpg', 'imagesman-trousers/79.jpg', 'images/man-trousers/78.jpg', 1, 0, 1 0, 0),
(21, 'TROUSERS WITH BUTTON AND ZIPPER CLOSURE AND LACE CLOSURE', 'COTTON 100%', 50.99, 'KM', 'images/man-trousers/85.jpg', 'images/man-trousers/83.jpg', 'imagesman-trousers/82.jpg', 'images/man-trousers/84.jpg', 1, 0, 1, 1, 0),
(22, 'TROUSERS WITH BUTTON AND ZIPPER CLOSURE AND LACE CLOSURE', 'COTTON 100%', 50.99, 'KM', 'images/man-trousers/89.jpg', 'images/man-trousers/88.jpg', 'imagesman-trousers/86.jpg', 'images/man-trousers/87.jpg', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(400) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `first-name` varchar(255) NOT NULL,
  `last-name` varchar(25) NOT NULL,
  `status` varchar(100) NOT NULL,
  `is-guest` tinyint(4) NOT NULL,
  `user-image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `e-mail`, `first-name`, `last-name`, `status`, `is-guest`, `user-image`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Admin', 'Admin', 'admin', 0, 'images\\users\\4.jpg'),
(2, 'anja', '61b997d3a204c94f95aecba4ce929702', 'anja.jovicic@gmail.com', 'Anja', 'Jovicic', 'user', 0, 'images\\users\\2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `woman-accessories`
--

DROP TABLE IF EXISTS `woman-accessories`;
CREATE TABLE IF NOT EXISTS `woman-accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `woman-accessories`
--

INSERT INTO `woman-accessories` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'LARGE EARRINGS WITH CRYSTAL APPLIQUÉ', 'OTHER MATERIALS 100%', 16.99, 'KM', 'images/woman-accessories/1.jpg', 'images/woman-accessories/2.jpg', '', '',1, 1, 0, 0, 0),
(2, 'TRIPLE CHAIN BRACELET', 'OTHER MATERIALS 100%', 18.99, 'KM', 'images/woman-accessories/3.jpg', 'images/woman-accessories/4.jpg', '', '',1, 1, 0, 0, 0),
(3, 'DOUBLE CRYSTAL RING', 'OTHER MATERIALS 100%', 14.99, 'KM', 'images/woman-accessories/5.jpg', 'images/woman-accessories/6.jpg', '', '',1, 0, 1, 1, 0),
(4, 'BRAIDED RING WITH STRASS APPLIQUE', 'OTHER MATERIALS 100%', 14.99, 'KM', 'images/woman-accessories/7.jpg', 'images/woman-accessories/8.jpg', '', ''),
(5, 'SNAKE RING WITH STRASS FOR LITTLE FINGER', 'OTHER MATERIALS 100%', 14.99, 'KM', 'images/woman-accessories/9.jpg', 'images/woman-accessories/10.jpg', '', '',1, 1, 1, 1, 1),
(6, 'BRAIDED RING WITH STRASS APPLIQUE', 'OTHER MATERIALS 100%', 14.99, 'KM', 'images/woman-accessories/7.jpg', 'images/woman-accessories/8.jpg', '', ''),
(7, 'GOLD RING WITH STONE FOR THE LITTLE FINGER', 'OTHER MATERIALS 100%', 10.99, 'KM', 'images/woman-accessories/11.jpg', 'images/woman-accessories/12.jpg', '', '',1, 1, 0, 0, 0),
(8, 'ORDER SET\r\nSET OF NECKLACE AND EARRINGS WITH RHINESTONES', 'OTHER MATERIALS 100%', 26.99, 'KM', 'images/woman-accessories/13.jpg', 'images/woman-accessories/14.jpg', '', '',1, 0, 1, 1, 0),
(9, 'TWISTED STEEL CHAIN\r\nGOLDEN TWISTED CHAIN', 'OTHER MATERIALS 100%', 14.99, 'KM', 'images/woman-accessories/15.jpg', 'images/woman-accessories/16.jpg', '', '',1, 0, 1, 1, 0),
(10, 'DOUBLE LEAF SET OF NECKLACE AND EARRINGS WITH CHARMS', 'OTHER MATERIALS 100%', 26.99, 'KM', 'images/woman-accessories/17.jpg', 'images/woman-accessories/18.jpg', '', '',1, 0, 0, 0, 0),
(11, 'RAYS SET OF CHAIN AND EARRING WITH LIGHTNING REASON', 'OTHER MATERIALS 100%', 22.99, 'KM', 'images/woman-accessories/19.jpg', 'images/woman-accessories/20.jpg', '', '',1, 0, 0, 0, 0),
(12, 'DOUBLE STAR SET OF PENDANT AND EARRINGS WITH STARS WITH STRASS', 'OTHER MATERIALS 100%', 26.99, 'KM', 'images/woman-accessories/23.jpg', 'images/woman-accessories/24.jpg', '', '',1, 1, 1, 1, 1),
(13, 'CIRCULAR PENDANT WITH ZIRCONIA APPLIQUE', 'OTHER MATERIALS 100%', 8.99, 'KM', 'images/woman-accessories/25.jpg', 'images/woman-accessories/26.jpg', '', '',1, 1, 1, 1, 1),
(14, 'DIE-CUT BUTTERFLY PENDANT', 'OTHER MATERIALS 100%', 8.99, 'KM', 'images/woman-accessories/27.jpg', 'images/woman-accessories/28.jpg', '', '',1, 1, 1, 1, 1),
(15, 'CRYSTAL DRAGONFLY PENDANT', 'OTHER MATERIALS 100%', 8.99, 'KM', 'images/woman-accessories/29.jpg', 'images/woman-accessories/30.jpg', '', '',1, 1, 1, 1, 1),
(16, 'DIE-CUT SKULL PENDANT', 'OTHER MATERIALS 100%', 8.99, 'KM', 'images/woman-accessories/31.jpg', 'images/woman-accessories/32.jpg', '', '',1, 0, 1, 1, 0),
(17, 'SNAKE RING WITH STRASS FOR LITTLE FINGER', 'OTHER MATERIALS 100%', 7.99, 'KM', 'images/woman-accessories/33.jpg', 'images/woman-accessories/44.jpg', '', '',1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `woman-dresses-skirts`
--

DROP TABLE IF EXISTS `woman-dresses-skirts`;
CREATE TABLE IF NOT EXISTS `woman-dresses-skirts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `s` tinyint(4) NOT NULL,
  `m` tinyint(4) NOT NULL,
  `l` tinyint(4) NOT NULL,
  `xl` tinyint(4) NOT NULL,
  `xxl` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `woman-dresses-skirts`
--

INSERT INTO `woman-dresses-skirts` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'RED TEXTURED JUMPSUIT\r\nV NECK DRESS WITH CONTRASTING TRIMMING', 'TEXTILE 95% ELASTANE 5%', 58.99, 'KM', 'images/woman-dresses-skirts/1.jpg', 'images/woman-dresses-skirts/2.jpg', 'images/woman-dresses-skirts/4.jpg', 'images/woman-dresses-skirts/3.jpg', 1, 1, 1, 1, 1),
(2, 'FITTED DRESS WITH LONG SLEEVE AND PRINTED SQUARE NECK', 'POLYESTER 62% VISCOSE 33% ELASTANE 5%', 78.99, 'KM', 'images/woman-dresses-skirts/6.jpg', 'images/woman-dresses-skirts/7.jpg', 'images/woman-dresses-skirts/8.jpg', 'images/woman-dresses-skirts/5.jpg', 1, 1, 1, 1, 1),
(3, ' MIDI DRESS WITH HIGH NECK AND BACK ZIP CLOSURE', 'POLYESTER 100%', 78.99, 'KM', 'images/woman-dresses-skirts/9.jpg', 'images/woman-dresses-skirts/10.jpg', 'images/woman-dresses-skirts/11.jpg', 'images/woman-dresses-skirts/12.jpg', 1, 1, 1, 1, 1),
(4, 'SHORT FLORAL \r\nDRESS WITH V NECKLINE', 'POLYESTER 100%', 58.99, 'KM', 'images/woman-dresses-skirts/13.jpg', 'images/woman-dresses-skirts/14.jpg', 'images/woman-dresses-skirts/15.jpg', 'images/woman-dresses-skirts/16.jpg', 1, 0, 0, 0, 0),
(5, 'STRIPED MIDI SKIRT WITH ADJUSTABLE BELT AND SIDE ZIPPER', 'POLYESTER 95% ELASTANE 5%', 39.98, 'KM', 'images/woman-dresses-skirts/17.jpg', 'images/woman-dresses-skirts/18.jpg', 'images/woman-dresses-skirts/19.jpg', 'images/woman-dresses-skirts/20.jpg', 1, 0, 0, 0, 0),
(6, 'FLOWERED MINI DRESS WITH ROUND NECK AND WIDE SLEEVE', 'POLYESTER 100%', 98.99, 'KM', 'images/woman-dresses-skirts/21.jpg', 'images/woman-dresses-skirts/22.jpg', 'images/woman-dresses-skirts/23.jpg', 'images/woman-dresses-skirts/24.jpg', 1, 1, 0, 0, 0),
(7, 'SHORT DRESS WITH FRONT KNOT AND V NECKLINE', 'POLYESTER 63% VISCOSE 33% ELASTANE 4%', 70.99, 'KM', 'images/woman-dresses-skirts/25.jpg', 'images/woman-dresses-skirts/26.jpg', 'images/woman-dresses-skirts/27.jpg', 'images/woman-dresses-skirts/28.jpg', 0, 0, 0, 0, 0),
(8, 'SHORT STRAIGHT DRESS WITH SHIRT COLLAR', 'POLYESTER 95% ELASTANE 5%', 78.99, 'KM', 'images/woman-dresses-skirts/29.jpg', 'images/woman-dresses-skirts/30.jpg', 'images/woman-dresses-skirts/31.jpg', 'images/woman-dresses-skirts/32.jpg', 1, 1, 0, 0, 0),
(9, 'SHORT STRAIGHT DRESS WITH SHIRT COLLAR', 'POLYESTER 95% ELASTANE 5%', 78.99, 'KM', 'images/woman-dresses-skirts/33.jpg', 'images/woman-dresses-skirts/34.jpg', 'images/woman-dresses-skirts/35.jpg', 'images/woman-dresses-skirts/36.jpg', 1, 1, 1, 1, 1),
(10, 'FLOWING SATIN SKIRT WITH RUBBER WAIST', 'POLYESTER 100%', 70.99, 'KM', 'images/woman-dresses-skirts/41.jpg', 'images/woman-dresses-skirts/42.jpg', 'images/woman-dresses-skirts/44.jpg', 'images/woman-dresses-skirts/43.jpg',1, 1, 1, 1, 1),
(11, 'MINI DRESS WITH A ROUND NECK AND A V-NECKLINE ', 'VISCOSE 100%', 90.99, 'KM', 'images/woman-dresses-skirts/45.jpg', 'images/woman-dresses-skirts/46.jpg', 'images/woman-dresses-skirts/47.jpg', 'images/woman-dresses-skirts/48.jpg', 0, 0, 0, 0, 0),
(12, 'LONG STRIPPES DRESS', 'POLYESTER 100%', 50.99, 'KM', 'mages/woman-dresses-skirts/49.jpg', 'images/woman-dresses-skirts/50.jpg', 'images/woman-dresses-skirts/52.jpg', 'images/woman-dresses-skirts/51.jpg', 0, 0, 0, 0, 0),
(13, 'POPLIN DRESS WITH A HIGH ROUND NECK AND LONG SLEEVE ', '100% COTTON', 78.99, 'KM', 'images/woman-dresses-skirts/56.jpg', 'images/woman-dresses-skirts/55.jpg', 'images/woman-dresses-skirts/54.jpg', 'images/woman-dresses-skirts/57.jpg', 1, 1, 1, 1, 1),
(14, 'TWEED MINI SKIRT WITH BACK ZIPPER CLOSURE', 'POLYESTER 95% OTHER FIBERS 5%', 50.99, 'KM', 'images/woman-dresses-skirts/62.jpg', 'images/woman-dresses-skirts/63.jpg', 'images/woman-dresses-skirts/64.jpg', 'images/woman-dresses-skirts/65.jpg', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `woman-jackets`
--

DROP TABLE IF EXISTS `woman-jackets`;
CREATE TABLE IF NOT EXISTS `woman-jackets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `s` tinyint(4) NOT NULL,
  `m` tinyint(4) NOT NULL,
  `l` tinyint(4) NOT NULL,
  `xl` tinyint(4) NOT NULL,
  `xxl` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `woman-jackets`
--

INSERT INTO `woman-jackets` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'LONG BOMBER\r\nBOMBER JACKET ', 'POLYESTER 100%', 40.99, 'KM', 'images/woman-jackets/1.jpg', 'images/woman-jackets/3.jpg', 'images/woman-jackets/2.jpg', 'images/woman-jackets/4.jpg', 1, 1, 1, 1, 1),
(2, 'SHORT BOMBER JACKET ', 'POLYESTER 50% COTTON 43% POLYAMIDE 7%', 138.99, 'KM', 'images/woman-jackets/5.jpg', 'images/woman-jackets/7.jpg', 'images/woman-jackets/8.jpg', 'images/woman-jackets/6.jpg', 1, 1, 1, 1, 1),
(3, 'VICHY CHECK JACKET', 'COTTON 57% VISCOSE 43%', 78.99, 'KM', 'images/woman-jackets/9.jpg', 'images/woman-jackets/10.jpg', 'images/woman-jackets/12.jpg', 'images/woman-jackets/11.jpg', 0, 0, 0, 0, 0),
(4, 'OVERSIZED COLLAR PARKA', 'POLYESTER 48% COTTON 44% POLYAMIDE 8%', 138.99, 'KM', 'images/woman-jackets/13.jpg', 'images/woman-jackets/14.jpg', 'images/woman-jackets/15.jpg', 'images/woman-jackets/16.jpg', 1, 1, 1, 1, 1),
(5, 'SHORT JACKET WITH BUTTONS', 'COTTON 90% POLYESTER 10%', 98.99, 'KM', 'images/woman-jackets/21.jpg', 'images/woman-jackets/22.jpg', 'images/woman-jackets/24.jpg', 'images/woman-jackets/23.jpg', 1, 1, 0, 0, 0),
(6, 'STRUCTURED JACKET WITH LAPELS AND BUTTONS', 'ALGODÓN 90% POLIESTER 10%', 100.99, 'KM', 'images/woman-jackets/25.jpg', 'images/woman-jackets/26.jpg', 'images/woman-jackets/27.jpg', 'images/woman-jackets/28.jpg', 1, 1, 0, 0, 0),
(7, 'TEXTURED COAT', 'ALGODÓN 75% POLIESTER 25%', 138.99, 'KM', 'images/woman-jackets/29.jpg', 'images/woman-jackets/30.jpg', 'images/woman-jackets/31.jpg', 'images/woman-jackets/32.jpg', 1, 1, 0, 0, 0),
(8, 'TEXTURED COAT', 'ALGODÓN 75% POLIESTER 25%', 138.99, 'KM', 'images/woman-jackets/35.jpg', 'images/woman-jackets/34.jpg', 'images/woman-jackets/33.jpg', 'images/woman-jackets/36.jpg', 1, 0, 1, 1, 0),
(9, 'DOUBLE BREASTED JACKET WITH SHOULDER PADS', 'POLYESTER 100%', 138.99, 'KM', 'images/woman-jackets/37.jpg', 'images/woman-jackets/38.jpg', 'images/woman-jackets/40.jpg', 'images/woman-jackets/39.jpg', 1, 0, 1, 1, 0),
(10, 'SHORT TWEED JACKET', 'POLYESTER 100%', 100.99, 'KM', 'images/woman-jackets/41.jpg', 'images/woman-jackets/42.jpg', 'images/woman-jackets/43.jpg', 'images/woman-jackets/44.jpg', 1, 0, 0, 0, 0),
(11, 'LACE-UP JACKET', 'VISCOSA 95% POLIAMIDA 5%', 118.99, 'KM', 'images/woman-jackets/45.jpg', 'images/woman-jackets/46.jpg', 'images/woman-jackets/47.jpg', 'images/woman-jackets/48.jpg', 1, 0, 0, 0, 0),
(12, 'RED LINEN JACKET', 'VISCOSE 54% LINEN 35% NYLON 11%', 118.99, 'KM', 'images/woman-jackets/49.jpg', 'images/woman-jackets/50.jpg', 'images/woman-jackets/51.jpg', 'images/woman-jackets/52.jpg', 1, 0, 1, 1, 0),
(13, 'DOUBLE BREASTED JACKET WITH SHOULDER PADS', 'POLYESTER 100%', 138.99, 'KM', 'images/woman-jackets/53.jpg', 'images/woman-jackets/54.jpg', 'images/woman-jackets/55.jpg', 'images/woman-jackets/56.jpg', 1, 1, 0, 0, 0),
(14, 'STRAIGHT JACKET WITHOUT LAPELS ', 'POLYESTER 100%', 118.99, 'KM', 'images/woman-jackets/57.jpg', 'images/woman-jackets/58.jpg', 'images/woman-jackets/59.jpg', 'images/woman-jackets/a.jpg', 1, 1, 0, 0, 0),
(15, 'CHECK JACKET WITH LAPELS AND FRONT BUTTONS ', 'POLYESTER 63% VISCOSE 34% ELASTANE 3%', 118.99, 'KM', 'images/woman-jackets/60.jpg', 'images/woman-jackets/61.jpg', 'images/woman-jackets/63.jpg', 'images/woman-jackets/62.jpg', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `woman-shirts`
--

DROP TABLE IF EXISTS `woman-shirts`;
CREATE TABLE IF NOT EXISTS `woman-shirts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `s` tinyint(4) NOT NULL,
  `m` tinyint(4) NOT NULL,
  `l` tinyint(4) NOT NULL,
  `xl` tinyint(4) NOT NULL,
  `xxl` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `woman-shirts`
--

INSERT INTO `woman-shirts` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'TOP WITH HOLE SLEEVE AND ROUND NECK WITH BUTTONS ON THE FRONT', 'VISCOSE 70% POLYESTER 25% ELASTANE 5%', 50.99, 'KM', 'images/woman-shirts/1.jpg', 'images/woman-shirts/2.jpg', 'images/woman-shirts/3.jpg', 'images/woman-shirts/4.jpg', 1, 0, 0, 0, 0),
(2, 'LONG SLEEVE BODY WITH ROUND NECK AND BACK SLIT', 'POLYESTER 95% ELASTANE 5%', 38.99, 'KM', 'images/woman-shirts/6.jpg', 'images/woman-shirts/5.jpg', 'images/woman-shirts/7.jpg', 'images/woman-shirts/8.jpg', 1, 1, 0, 0, 0),
(3, 'EMBROIDERED PLEATED T-SHIRT\r\n', 'POLYESTER 100%', 26.99, 'KM', '', '', '', '', 1, 1, 0, 0, 0),
(4, 'TOP WITH HOLE SLEEVE AND ROUND NECK WITH BUTTONS ON THE FRONT', 'VISCOSE 70% POLYESTER 25% ELASTANE 5%', 50.99, 'KM', 'images/woman-shirts/1.jpg', 'images/woman-shirts/2.jpg', 'images/woman-shirts/3.jpg', 'images/woman-shirts/4.jpg', 1, 0, 0, 0, 0),
(5, 'LONG SLEEVE BODY WITH ROUND NECK AND BACK SLIT', 'POLYESTER 95% ELASTANE 5%', 38.99, 'KM', 'images/woman-shirts/6.jpg', 'images/woman-shirts/5.jpg', 'images/woman-shirts/7.jpg', 'images/woman-shirts/8.jpg', 0, 0, 0, 0, 0),
(6, 'EMBROIDERED PLEATED T-SHIRT\r\n', 'POLYESTER 100%', 26.99, 'KM', 'images/woman-shirts/14.jpg', 'images/woman-shirts/13.jpg', 'images/woman-shirts/15.jpg', 'images/woman-shirts/16.jpg', 1, 0, 0, 0, 0),
(7, 'LONG SLEEVE BODY WITH ROUND NECK AND BACK SLIT', 'POLYESTER 95% ELASTANE 5%', 38.99, 'KM', 'images/woman-shirts/17.jpg', 'images/woman-shirts/18.jpg', 'images/woman-shirts/20.jpg', 'images/woman-shirts/19.jpg', 0, 0, 0, 0, 0),
(8, 'BASIC PRINTED T-SHIRT', '100% COTTON', 14.99, 'KM', 'images/woman-shirts/21.jpg', 'images/woman-shirts/22.jpg', 'images/woman-shirts/24.jpg', 'images/woman-shirts/23.jpg', 1, 1, 0, 0, 0),
(9, 'BASIC PRINTED T-SHIRT', '100% COTTON', 14.99, 'KM', 'images/woman-shirts/25.jpg', 'images/woman-shirts/26.jpg', 'images/woman-shirts/28.jpg', 'images/woman-shirts/27.jpg', 1, 1, 0, 0, 0),
(10, 'BASIC PRINTED T-SHIRT', '100% COTTON', 14.99, 'KM', 'images/woman-shirts/29.jpg', 'images/woman-shirts/30.jpg', 'images/woman-shirts/31.jpg', 'images/woman-shirts/32.jpg', 1, 1, 1, 1, 1),
(11, 'EMBROIDERED BUTTONS T-SHIRT', '100% COTTON', 18.99, 'KM', 'images/woman-shirts/37.jpg', 'images/woman-shirts/38.jpg', 'images/woman-shirts/39.jpg', 'images/woman-shirts/40.jpg', 1, 1, 1, 1, 1),
(12, 'EMBROIDERED BUTTONS T-SHIRT', '100% COTTON', 18.99, 'KM', 'images/woman-shirts/41.jpg', 'images/woman-shirts/42.jpg', 'images/woman-shirts/43.jpg', 'images/woman-shirts/44.jpg', 1, 0, 1, 1, 0),
(13, 'EMBROIDERED BUTTONS T-SHIRT', '100% COTTON', 18.99, 'KM', 'images/woman-shirts/45.jpg', 'images/woman-shirts/46.jpg', 'images/woman-shirts/47.jpg', 'images/woman-shirts/48.jpg', 1, 0, 1, 1, 0),
(14, 'EMBROIDERED BUTTONS T-SHIRT', '100% COTTON', 18.99, 'KM', 'images/woman-shirts/49.jpg', 'images/woman-shirts/50.jpg', 'images/woman-shirts/51.jpg', 'images/woman-shirts/52.jpg', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `woman-shoes`
--

DROP TABLE IF EXISTS `woman-shoes`;
CREATE TABLE IF NOT EXISTS `woman-shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `size-37` tinyint(4) NOT NULL,
  `size-38` tinyint(4) NOT NULL,
  `size-39` tinyint(4) NOT NULL,
  `size-40` tinyint(4) NOT NULL,
  `size-41` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `woman-shoes`
--

INSERT INTO `woman-shoes` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `size-37`, `size-38`, `size-39`, `size-40`, `size-41`) VALUES
(1, 'BALLERINA WITH TOE IN TECHNICAL FABRIC', 'UPPER: 100% TEXTILE LINING: 100% SYNTHETIC-TEXTILE SOLE: 100% SYNTHETIC', 28.99, 'KM', 'images/woman-shoes/1.jpg', 'images/woman-shoes/2.jpg', 'images/woman-shoes/3.jpg', 'images/woman-shoes/4.jpg', 1, 0, 0, 0, 0),
(2, 'BASIC MARY JANE\r\nHEEL SHOE WITH BRACELET AND BUCKLE CLOSURE', 'UPPER: SYNTHETIC 100% LINING: TEXTILE-SYNTHETIC 100% SOLE: SYNTHETIC 100%', 50.99, 'KM', 'images/woman-shoes/5.jpg', 'images/woman-shoes/7.jpg', 'images/woman-shoes/6.jpg', 'images/woman-shoes/8.jpg', 0, 0, 0, 0, 0),
(3, 'BASIC FLAT BALLERINA WITH CROCODILE TEXTURE', 'TEXTILE 60% SYNTHETIC 40%', 24.99, 'KM', 'images/woman-shoes/9.jpg', 'images/woman-shoes/10.jpg', 'images/woman-shoes/11.jpg', 'images/woman-shoes/a.jpg', 1, 0, 1, 1, 0),
(4, 'BASIC SMOOTH BALLERINA WITH COMBINED FABRIC TOE', 'SYNTHETIC 80% TEXTILE 20% Heel: TC1 cms', 24.99, 'KM', 'images/woman-shoes/12.jpg', 'images/woman-shoes/13.jpg', 'images/woman-shoes/14.jpg', 'images/woman-shoes/15.jpg', 1, 0, 1, 1, 0),
(5, 'BASIC SMOOTH BALLERINA WITH COMBINED FABRIC TOE', 'SYNTHETIC 80% TEXTILE 20% Heel: TC1 cms', 24.99, 'KM', 'images/woman-shoes/16.jpg', 'images/woman-shoes/17.jpg', 'images/woman-shoes/18.jpg', 'images/woman-shoes/19.jpg', 1, 0, 1, 1, 0),
(6, 'PYTHON BALLERINA\r\nANIMAL PRINT ', 'TEXTILE 100% Heel: TC1 cms', 32.99, 'KM', 'images/woman-shoes/20.jpg', 'images/woman-shoes/21.jpg', 'images/woman-shoes/22.jpg', 'images/woman-shoes/23.jpg', 1, 0, 0, 0, 0),
(7, 'PYTHON BALLERINA\r\nANIMAL PRINT ', 'TEXTILE 100% Heel: TC1 cms', 32.99, 'KM', 'images/woman-shoes/24.jpg', 'images/woman-shoes/26.jpg', 'images/woman-shoes/25.jpg', 'images/woman-shoes/27.jpg', 1, 1, 0, 0, 0),
(8, 'BIKER STYLE ANKLE BOOTS WITH DIE-CUT DETAILS', 'TEXTILE 100% Heel: TC1 cms', 52.99, 'KM', 'images/woman-shoes/28.jpg', 'images/woman-shoes/29.jpg', 'images/woman-shoes/30.jpg', 'images/woman-shoes/31.jpg', 0, 0, 0, 0, 0),
(9, 'FLAT ANKLE BOOT', 'TEXTILE 100% Heel: TC3.5 cm', 58.99, 'KM', 'images/woman-shoes/32.jpg', 'images/woman-shoes/33.jpg', 'images/woman-shoes/34.jpg', 'images/woman-shoes/35.jpg', 1, 0, 1, 1, 0),
(10, 'BIKER ANKLE BOOTS', 'TEXTILE 100% Heel: TC5.5 cm', 50.99, 'KM', 'images/woman-shoes/36.jpg', 'images/woman-shoes/37.jpg', 'images/woman-shoes/38.jpg', 'images/woman-shoes/39.jpg', 1, 0, 1, 1, 0),
(11, 'BALLERINA BASIC STITCHING BALLERINA', 'SINTHETIC 100% Heel: TC1 cms', 24.99, 'KM', 'images/woman-shoes/40.jpg', 'images/woman-shoes/41.jpg', 'images/woman-shoes/42.jpg', 'images/woman-shoes/43.jpg', 1, 1, 1, 1, 1),
(12, 'BASIC SHOE WITH RAFFIA HEEL', 'TEXTIL 100%', 50.99, 'KM', 'images/woman-shoes/45.jpg', 'images/woman-shoes/44.jpg', 'images/woman-shoes/46.jpg', 'images/woman-shoes/47.jpg', 1, 1, 1, 1, 1),
(13, 'BASIC OPEN STILETTO HEEL SHOE', 'TEXTILE 100% Heel: TC8 cms', 50.99, 'KM', 'images/woman-shoes/48.jpg', 'images/woman-shoes/49.jpg', 'images/woman-shoes/50.jpg', 'images/woman-shoes/51.jpg', 1, 0, 0, 0, 0),
(14, 'SPORTY BLOCKS WITH RUBBER TRACK SOLE', 'TEXTILE 100% ', 58.99, 'KM', 'images/woman-shoes/52.jpg', 'images/woman-shoes/53.jpg', 'images/woman-shoes/54.jpg', 'images/woman-shoes/55.jpg', 1, 1, 0, 0, 0),
(15, 'SPORTY BLOCKS WITH RUBBER TRACK SOLE', 'TEXTILE 100% ', 58.99, 'KM', 'images/woman-shoes/56.jpg', 'images/woman-shoes/57.jpg', 'images/woman-shoes/58.jpg', 'images/woman-shoes/59.jpg', 1, 1, 1, 1, 1),
(16, 'SPORTS SOFT CORAL SPORTS', 'TEXTILE 100% ', 48.99, 'KM', 'images/woman-shoes/60.jpg', 'images/woman-shoes/61.jpg', 'images/woman-shoes/62.jpg', 'images/woman-shoes/63.jpg', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `woman-t-shirts`
--

DROP TABLE IF EXISTS `woman-t-shirts`;
CREATE TABLE IF NOT EXISTS `woman-t-shirts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(5,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `s` tinyint(4) NOT NULL,
  `m` tinyint(4) NOT NULL,
  `l` tinyint(4) NOT NULL,
  `xl` tinyint(4) NOT NULL,
  `xxl` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `woman-t-shirts`
--

INSERT INTO `woman-t-shirts` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'PLAIN TOP WITH V NECK AND HOLE SLEEVE.', 'VISCOSA 60% POLIESTER 25% NYLON 15%', 50.99, 'KM', 'images/women-t-shirts/1.jpg', 'images/women-t-shirts/2.jpg', 'images/women-t-shirts/4.jpg', 'images/women-t-shirts/3.jpg', 1, 1, 1, 1, 1),
(3, 'PLAIN TOP WITH V NECK AND HOLE SLEEVE.', 'VISCOSA 60% POLIESTER 25% NYLON 15%', 50.99, 'KM', 'images/women-t-shirts/7.jpg', 'images/women-t-shirts/8.jpg', 'images/women-t-shirts/6.jpg', 'images/women-t-shirts/5.jpg', 1, 1, 1, 1, 1),
(4, 'CUT OUT DRAPED STRAPLESS TOP', 'VISCOSA 65% POLIAMIDA 35%', 35.98, 'KM', 'images/women-t-shirts/11.jpg', 'images/women-t-shirts/12.jpg', 'images/women-t-shirts/9.jpg', 'images/women-t-shirts/10.jpg', 1, 0, 0, 0, 0),
(5, 'CUT OUT DRAPED STRAPLESS TOP', 'VISCOSA 65% POLIAMIDA 35%', 35.98, 'KM', 'images/women-t-shirts/15.jpg', 'images/women-t-shirts/16.jpg', 'images/women-t-shirts/13.jpg', 'images/women-t-shirts/14.jpg', 1, 0, 0, 0, 0),
(6, 'STRAPPED TOP WITH BUCKLE', 'VISCOSE 65% POLYAMIDE 35%', 30.99, 'KM', 'images/women-t-shirts/17.jpg', 'images/women-t-shirts/19.jpg', 'images/women-t-shirts/20.jpg', 'images/women-t-shirts/18.jpg', 1, 0, 0, 0, 0),
(7, 'STRAPPED TOP WITH BUCKLE', 'VISCOSE 65% POLYAMIDE 35%', 30.99, 'KM', 'images/women-t-shirts/24.jpg', 'images/women-t-shirts/23.jpg', 'images/women-t-shirts/21.jpg', 'images/women-t-shirts/22.jpg', 1, 1, 0, 0, 0),
(8, 'SEQUINED YOKE T-SHIRT ', '100% COTTON', 18.99, 'KM', 'images/women-t-shirts/25.jpg', 'images/women-t-shirts/26.jpg', 'images/women-t-shirts/27.jpg', 'images/women-t-shirts/28.jpg', 1, 1, 0, 0, 0),
(9, 'SEQUINED YOKE T-SHIRT ', '100% COTTON', 18.99, 'KM', 'images/women-t-shirts/30.jpg', 'images/women-t-shirts/31.jpg', 'images/women-t-shirts/29.jpg', 'images/women-t-shirts/32.jpg', 1, 1, 0, 0, 0),
(10, 'SEQUINED YOKE T-SHIRT ', '100% COTTON', 18.99, 'KM', 'images/women-t-shirts/34.jpg', 'images/women-t-shirts/33.jpg', 'images/women-t-shirts/35.jpg', 'images/women-t-shirts/36.jpg', 1, 1, 1, 1, 1),
(11, 'CUT OUT DRAPED STRAPLESS TOP', 'VISCOSA 65% POLIAMIDA 35%', 35.98, 'KM', 'images/women-t-shirts/15.jpg', 'images/women-t-shirts/16.jpg', 'images/women-t-shirts/13.jpg', 'images/women-t-shirts/14.jpg', 1, 1, 1, 1, 1),
(12, 'STRAPPED TOP WITH BUCKLE', 'VISCOSE 65% POLYAMIDE 35%', 30.99, 'KM', 'images/women-t-shirts/17.jpg', 'images/women-t-shirts/19.jpg', 'images/women-t-shirts/20.jpg', 'images/women-t-shirts/18.jpg', 1, 0, 0, 0, 0),
(13, 'STRAPPED TOP WITH BUCKLE', 'VISCOSE 65% POLYAMIDE 35%', 30.99, 'KM', 'images/women-t-shirts/24.jpg', 'images/women-t-shirts/23.jpg', 'images/women-t-shirts/21.jpg', 'images/women-t-shirts/22.jpg', 1, 1, 0, 0, 0),
(14, 'SEQUINED YOKE T-SHIRT ', '100% COTTON', 18.99, 'KM', 'images/women-t-shirts/25.jpg', 'images/women-t-shirts/26.jpg', 'images/women-t-shirts/27.jpg', 'images/women-t-shirts/28.jpg', 1, 1, 0, 0, 0),
(15, 'SEQUINED YOKE T-SHIRT ', '100% COTTON', 18.99, 'KM', 'images/women-t-shirts/30.jpg', 'images/women-t-shirts/31.jpg', 'images/women-t-shirts/29.jpg', 'images/women-t-shirts/32.jpg', 1, 0, 1, 1, 0),
(16, 'SEQUINED YOKE T-SHIRT ', '100% COTTON', 18.99, 'KM', 'images/women-t-shirts/34.jpg', 'images/women-t-shirts/33.jpg', 'images/women-t-shirts/35.jpg', 'images/women-t-shirts/36.jpg', 1, 0, 1, 1, 0),
(17, 'T-SHIRT WITH TWEED DETAIL\r\n', '100% COTTON', 14.99, 'KM', 'images/women-t-shirts/38.jpg', 'images/women-t-shirts/37.jpg', 'images/women-t-shirts/39.jpg', 'images/women-t-shirts/40.jpg', 1, 0, 0, 0, 0),
(18, 'T-SHIRT WITH TWEED DETAIL\r\n', '100% COTTON', 14.99, 'KM', 'images/women-t-shirts/42.jpg', 'images/women-t-shirts/41.jpg', 'images/women-t-shirts/43.jpg', 'images/women-t-shirts/44.jpg', 1, 0, 0, 0, 0),
(19, 'T-SHIRT WITH TWEED DETAIL', '100% COTTON', 14.99, 'KM', 'images/women-t-shirts/46.jpg', 'images/women-t-shirts/45.jpg', 'images/women-t-shirts/47.jpg', 'images/women-t-shirts/48.jpg', 1, 0, 1, 1, 0),
(20, 'SHORT SLEEVE BODY WITH DIE-CUT DETAIL', '100% COTTON', 27.98, 'KM', 'images/women-t-shirts/50.jpg', 'images/women-t-shirts/51.jpg', 'images/women-t-shirts/49.jpg', 'images/women-t-shirts/52.jpg', 1, 0, 1, 1, 0),
(21, 'SHORT SLEEVE BODY WITH DIE-CUT DETAIL', '100% COTTON', 27.98, 'KM', 'images/women-t-shirts/54.jpg', 'images/women-t-shirts/53.jpg', 'images/women-t-shirts/55.jpg', 'images/women-t-shirts/65.jpg', 1, 1, 1, 1, 1),
(22, 'COLOR BLOC T-SHIRT WITH SHORT SLEEVE AND ROUND NECK', '100% COTTON', 10.99, 'KM', 'images/women-t-shirts/58.jpg', 'images/women-t-shirts/57.jpg', 'images/women-t-shirts/59.jpg', '', 1, 1, 1, 1, 1),
(23, 'COLOR BLOC T-SHIRT WITH SHORT SLEEVE AND ROUND NECK', '100% COTTON', 10.99, 'KM', 'images/women-t-shirts/61.jpg', 'images/women-t-shirts/60.jpg', 'images/women-t-shirts/62.jpg', 'images/women-t-shirts/63.jpg', 1, 1, 1, 1, 1),
(24, 'SHORT SLEEVE T-SHIRT WITH POSITIONAL PRINT', '100% COTTON', 14.99, 'KM', 'images/women-t-shirts/68.jpg', 'images/women-t-shirts/67.jpg', 'images/women-t-shirts/66.jpg', 'images/women-t-shirts/71.jpg', 1, 0, 0, 0, 0),
(25, 'SHORT SLEEVE T-SHIRT WITH POSITIONAL PRINT', '100% COTTON', 14.99, 'KM', 'images/women-t-shirts/73.jpg', 'images/women-t-shirts/74.jpg', 'images/women-t-shirts/72.jpg', 'images/women-t-shirts/75.jpg', 1, 0, 0, 0, 0),
(26, 'SHORT SLEEVE T-SHIRT WITH POSITIONAL PRINT', '100% COTTON', 14.99, 'KM', 'images/women-t-shirts/77.jpg', 'images/women-t-shirts/78.jpg', 'images/women-t-shirts/79.jpg', 'images/women-t-shirts/76.jpg', 1, 1, 0, 0, 0),
(27, 'STRIPED T-SHIRT WITH SHORT SLEEVE AND FRONT LACES', '100% COTTON', 10.99, 'KM', 'images/women-t-shirts/82.jpg', 'images/women-t-shirts/83.jpg', 'images/women-t-shirts/84.jpg', 'images/women-t-shirts/81.jpg', 1, 1, 1, 1, 1),
(28, 'METALLIC CROSSOVER TOP WITH V NECKLINE', 'POLYESTER 100%', 35.98, 'KM', 'images/women-t-shirts/89.jpg', 'images/women-t-shirts/90.jpg', 'images/women-t-shirts/88.jpg', 'images/women-t-shirts/87.jpg', 1, 1, 1, 1, 1),
(29, 'BASIC PLEATED T-SHIRT WITH A ROUND NECK AND SHORT SLEEVE WITH RUFFLE DETAILS', 'POLYESTER 100%', 18.99, 'KM', 'images/women-t-shirts/104.jpg', 'images/women-t-shirts/103.jpg', 'images/women-t-shirts/101.jpg', 'images/women-t-shirts/100.jpg', 1, 0, 0, 0, 0),
(30, 'BASIC PLEATED T-SHIRT WITH A ROUND NECK AND SHORT SLEEVE WITH RUFFLE DETAILS', 'POLYESTER 100%', 18.99, 'KM', 'images/women-t-shirts/108.jpg', 'images/women-t-shirts/109.jpg', 'images/women-t-shirts/107.jpg', 'images/women-t-shirts/106.jpg', 1, 0, 1, 1, 0),
(31, 'T-SHIRT WITH RIBBONS, SQUARE NECK AND SHORT SLEEVE', '100% COTTON', 18.99, 'KM', 'images/women-t-shirts/113.jpg', 'images/women-t-shirts/112.jpg', 'images/women-t-shirts/114.jpg', 'images/women-t-shirts/111.jpg', 1, 0, 1, 1, 0),
(32, 'T-SHIRT WITH RIBBONS, SQUARE NECK AND SHORT SLEEVE', '100% COTTON', 18.99, 'KM', 'images/women-t-shirts/119.jpg', 'images/women-t-shirts/118.jpg', 'images/women-t-shirts/120.jpg', 'images/women-t-shirts/117.jpg', 1, 0, 1, 1, 0),
(33, 'BASIC MESSAGE T-SHIRT\r\n', '100% COTTON', 10.99, 'KM', 'images/women-t-shirts/125.jpg', 'images/women-t-shirts/124.jpg', 'images/women-t-shirts/127.jpg', 'images/women-t-shirts/123.jpg', 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `woman-trousers`
--

DROP TABLE IF EXISTS `woman-trousers`;
CREATE TABLE IF NOT EXISTS `woman-trousers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item-name` varchar(255) NOT NULL,
  `item-description` varchar(500) NOT NULL,
  `item-price` float(10,2) NOT NULL,
  `item-currency` varchar(5) NOT NULL,
  `item-image1` varchar(255) NOT NULL,
  `item-image2` varchar(255) NOT NULL,
  `item-image3` varchar(255) NOT NULL,
  `item-image4` varchar(255) NOT NULL,
  `s` tinyint(4) NOT NULL,
  `m` tinyint(4) NOT NULL,
  `l` tinyint(4) NOT NULL,
  `xl` tinyint(4) NOT NULL,
  `xxl` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `woman-trousers`
--

INSERT INTO `woman-trousers` (`id`, `item-name`, `item-description`, `item-price`, `item-currency`, `item-image1`, `item-image2`, `item-image3`, `item-image4`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 'HIGH-WAISTED PRINT TROUSERS', 'POLYESTER 99% ELASTANE 1%', 34.99, 'KM', 'images/woman-trousers/5.jpg', 'images/woman-trousers/3.jpg', 'images/woman-trousers/2.jpg', 'images/woman-trousers/1.jpg', 1, 1, 0, 0, 0),
(2, 'STRAIGHT BASIC TROUSERS', 'COTTON 98% ELASTANE 2%', 34.99, 'KM', 'images/woman-trousers/6.jpg', 'images/woman-trousers/7.jpg', 'images/woman-trousers/8.jpg', 'images/woman-trousers/9.jpg', 1, 1, 0, 0, 0),
(3, 'TROUSERS WITH TIE AT THE WAIST', 'POLYESTER 100%', 38.99, 'KM', 'images/woman-trousers/13.jpg', 'images/woman-trouserss/10.jpg', 'images/woman-trousers/11.jpg', 'images/woman-trousers/12.jpg', 1, 1, 1, 1, 1),
(4, 'HIGH-WAISTED PRINT TROUSERS', 'POLYESTER 99% ELASTANE 1%', 34.99, 'KM', 'images/woman-trousers/15.jpg', 'images/woman-trousers/16.jpg', 'images/woman-trousers/17.jpg', 'images/woman-trousers/18.jpg', 1, 1, 1, 1, 1),
(5, 'SLIM SKINNY JEANS', 'COTTON 95% POLYESTER 3% ELASTANE 2%', 58.99, 'KM', 'images/woman-trousers/20.jpg', 'images/woman-trousers/21.jpg', 'images/woman-trousers/22.jpg', 'images/woman-trousers/23.jpg', 1, 0, 0, 0, 0),
(6, 'PLAIN STRAIGHT TROUSERS WITH BUTTON ', 'VISCOSE 95% POLYAMIDE 5%', 70.99, 'KM', 'images/woman-trousers/25.jpg', 'images/woman-trousers/26.jpg', 'images/woman-trousers/a.jpg', 'images/woman-trousers/27.jpg', 1, 0, 0, 0, 0),
(7, 'HIGH-RISE PLEATED WIDE LEG TROUSERS ', 'POLYESTER 100%', 35.99, 'KM', 'images/woman-trousers/29.jpg', 'images/woman-trousers/31.jpg', 'images/woman-trousers/32.jpg', 'images/woman-trousers/33.jpg', 1, 0, 1, 1, 0),
(8, 'PLAIN PIRATE TROUSERS WITH HOOK AND ZIPPER', 'POLYESTER 100%', 116.99, 'KM', 'images/woman-trousers/38.jpg', 'images/woman-trousers/39.jpg', 'images/woman-trousers/40.jpg', 'images/woman-trousers/41.jpg', 1, 0, 1, 1, 0),
(9, 'HIGH-RISE TROUSERS WITH KNITTED WIDE LEG', 'VISCOSE 60% POLYESTER 25% NYLON 15%\r\n', 58.99, 'KM', 'images/woman-trousers/42.jpg', 'images/woman-trousers/43.jpg', 'images/woman-trousers/44.jpg', 'images/woman-trousers/45.jpg', 1, 1, 1, 1, 1),
(10, 'STRAIGHT SUIT TROUSERS', 'POLIESTER 94% ELASTANO 6%', 70.99, 'KM', 'images/woman-trousers/51.jpg', 'images/woman-trousers/52.jpg', 'images/woman-trousers/53.jpg', 'images/woman-trousers/54.jpg', 1, 1, 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
