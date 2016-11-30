-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 03:22 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdpdb`
--
CREATE DATABASE IF NOT EXISTS `sdpdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sdpdb`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `ID_BOOKING` int(11) NOT NULL,
  `ID_CUSTOMER` int(11) NOT NULL,
  `ID_MEJA` int(11) DEFAULT NULL,
  `TANGGAL_BOOKING` datetime NOT NULL,
  `QTY` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID_BOOKING`, `ID_CUSTOMER`, `ID_MEJA`, `TANGGAL_BOOKING`, `QTY`) VALUES
(1, 2, 0, '2016-11-08 04:20:55', 2),
(3, 2, 0, '2016-11-02 05:25:40', 2),
(4, 2, 0, '2016-11-21 02:25:18', 2),
(5, 2, 0, '2016-11-10 02:50:47', 2),
(6, 2, 0, '2016-11-09 09:45:51', 2),
(7, 2, 0, '2016-11-09 09:45:21', 2),
(8, 2, 0, '2016-10-31 04:20:13', 2),
(9, 2, 0, '2016-11-07 04:20:47', 2),
(10, 2, 0, '2016-11-07 04:20:47', 2),
(11, 2, 0, '2016-11-02 05:25:45', 2),
(12, 2, 0, '2016-11-08 04:20:08', 2),
(13, 2, 0, '2016-11-09 09:45:50', 2),
(14, 2, 0, '2016-11-10 09:45:21', 2),
(15, 2, 0, '2016-11-08 04:30:12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `content_website`
--

DROP TABLE IF EXISTS `content_website`;
CREATE TABLE `content_website` (
  `ID_CONTENT` varchar(255) NOT NULL,
  `ISI_CONTENT` varchar(1000) NOT NULL,
  `SHOW_CONTENT` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_website`
--

INSERT INTO `content_website` (`ID_CONTENT`, `ISI_CONTENT`, `SHOW_CONTENT`) VALUES
('ABOUT_CONTENT', 'Our team of highly qualified professionals headed by an experienced Chef. Lnim ad minim veniam, quis nostrud.<br /><br />\r\n\r\nExercitation ullamco laboris nisi ut aliquip ex ea commodo. Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla  do tempore ercitationem ut labore. et dolore magna aliqua.', 1),
('ABOUT_HEADER', 'SPECIALIZES IN NON-VEG , 65, THANTHURI, SANDWICH, 65 SMOKED SANDWICH.', 1),
('ADDRESS_CONTACT', ' #12 Fifth main street, NY 10307, USA', 1),
('EMAIL_CONTACT', 'info@thespicelounge.com', 1),
('HOME_ADDRESS', '\r\n						#12 FIFTH MAIN STREET<br> NY 10307, USA.', 1),
('HOME_PHONE', '&nbsp;&nbsp;+1 123 456 7890				', 1),
('LINK_FB', 'http://www.facebook.com', 1),
('LINK_GPLUS', 'http://www.googleplus.com', 1),
('LINK_LINKEDIN', 'https://www.linkedin.com/uas/login', 1),
('LINK_PINTEREST', 'https://www.pinterest.com/login/', 1),
('LINK_TWITTER', 'http://www.twitter.com', 1),
('PHONE_CONTACT', '&nbsp;&nbsp;+ 1 123 456 7890', 1),
('UPCOMING_EVENTS', '<?=base_url();?>/assets/img/event1.jpg', 1),
('ICON', 'assets/img/Untitled-1.ico', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

DROP TABLE IF EXISTS `courier`;
CREATE TABLE `courier` (
  `ID_COURIER` int(6) NOT NULL,
  `USERNAME_COURIER` varchar(25) DEFAULT NULL,
  `PASSWORD_COURIER` varchar(25) DEFAULT NULL,
  `NAMA_COURIER` varchar(100) DEFAULT NULL,
  `NO_TELP_COURIER` varchar(20) DEFAULT NULL,
  `STATUS_COURIER` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `ID_CUSTOMER` int(6) NOT NULL,
  `USERNAME_CUSTOMER` varchar(50) DEFAULT NULL,
  `PASSWORD_CUSTOMER` varchar(100) DEFAULT NULL,
  `EMAIL_CUSTOMER` varchar(100) DEFAULT NULL,
  `AUTH_KEY` varchar(100) DEFAULT NULL,
  `NAMA_CUSTOMER` varchar(50) DEFAULT NULL,
  `ALAMAT_CUSTOMER` varchar(100) DEFAULT NULL,
  `KOTA_CUSTOMER` varchar(50) DEFAULT NULL,
  `NO_TELP_CUSTOMER` varchar(20) DEFAULT NULL,
  `STATUS_CUSTOMER` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID_CUSTOMER`, `USERNAME_CUSTOMER`, `PASSWORD_CUSTOMER`, `EMAIL_CUSTOMER`, `AUTH_KEY`, `NAMA_CUSTOMER`, `ALAMAT_CUSTOMER`, `KOTA_CUSTOMER`, `NO_TELP_CUSTOMER`, `STATUS_CUSTOMER`) VALUES
(1, 'effendy', 'effendy', 'tancejang@gmail.com', 'asd7f89a7sd98f79adsas8df798dsa7f9', 'Effendy Hadi Sutanto', 'Jl Darmo', 'Surabaya', '01239123', 1),
(2, 'Asd', 'na5DMaz53MAA6', 'satrijoniklas@yahoo.com', 'naCaUAzJEXS8c', 'Bernard Niklas S.', 'Jl. Dr. Wahidin 30, Surabaya', 'Surabaya', '081938529999', 1);

-- --------------------------------------------------------

--
-- Table structure for table `d_transaksi`
--

DROP TABLE IF EXISTS `d_transaksi`;
CREATE TABLE `d_transaksi` (
  `ID_TRANSAKSI` int(6) NOT NULL,
  `ID_MENU` int(6) NOT NULL,
  `JUMLAH` int(5) NOT NULL,
  `SUBTOTAL` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d_trans_promo`
--

DROP TABLE IF EXISTS `d_trans_promo`;
CREATE TABLE `d_trans_promo` (
  `ID_TRANS` int(6) NOT NULL,
  `ID_PROMO` int(6) NOT NULL,
  `JUMLAH` int(3) NOT NULL,
  `SUBPOTONGAN` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `ID_GALLERY` int(6) NOT NULL,
  `LINK_GALLERY` text NOT NULL,
  `NAME_GALLERY` varchar(255) NOT NULL,
  `SHOW_GALLERY` int(1) NOT NULL,
  `STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID_GALLERY`, `LINK_GALLERY`, `NAME_GALLERY`, `SHOW_GALLERY`, `STATUS`) VALUES
(1, 'assets/img/cooking_competition.jpg', 'Cooking Competition Final', 1, 1),
(2, 'assets/img/cooking_competition_food.jpg', 'Cooking Competition Food from Contestant', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_home`
--

DROP TABLE IF EXISTS `gallery_home`;
CREATE TABLE `gallery_home` (
  `ID_GALLERY_HOME` int(6) NOT NULL,
  `LINK_GALLERY_HOME` text NOT NULL,
  `SHOW_GALLERY_HOME` int(1) NOT NULL,
  `STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_home`
--

INSERT INTO `gallery_home` (`ID_GALLERY_HOME`, `LINK_GALLERY_HOME`, `SHOW_GALLERY_HOME`, `STATUS`) VALUES
(1, 'assets/img/1.jpg', 1, 1),
(2, 'assets/img/20.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `h_transaksi`
--

DROP TABLE IF EXISTS `h_transaksi`;
CREATE TABLE `h_transaksi` (
  `ID_TRANSAKSI` int(6) NOT NULL,
  `ID_COURIER` int(6) NOT NULL,
  `ID_CUSTOMER` int(6) NOT NULL,
  `TANGGAL_TRANSAKSI` datetime DEFAULT NULL,
  `STATUS_TRANSAKSI` tinyint(1) DEFAULT NULL,
  `TOTAL_TRANSAKSI` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `ID_KATEGORI` int(3) NOT NULL,
  `NAMA_KATEGORI` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_KATEGORI`, `NAMA_KATEGORI`) VALUES
(1, 'appetizers'),
(2, 'Soups & Salads'),
(3, 'Lunch & Dinner'),
(4, 'Event Packages');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

DROP TABLE IF EXISTS `meja`;
CREATE TABLE `meja` (
  `ID_MEJA` int(11) NOT NULL,
  `KAPASITAS_MEJA` int(2) NOT NULL,
  `STATUS_MEJA` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `ID_MENU` int(6) NOT NULL,
  `ID_KATEGORI` int(3) NOT NULL,
  `NAMA_MENU` varchar(100) DEFAULT NULL,
  `LINK_PICTURE` varchar(255) NOT NULL,
  `HARGA` int(7) DEFAULT NULL,
  `DESKRIPSI` varchar(100) DEFAULT NULL,
  `STATUS_MENU` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID_MENU`, `ID_KATEGORI`, `NAMA_MENU`, `LINK_PICTURE`, `HARGA`, `DESKRIPSI`, `STATUS_MENU`) VALUES
(1, 1, 'Satay Salads', 'assets/img/1.jpg', 35000, 'Choice of chicken or beef marinated in thai herbs served with peanut sauce and cucumber salad.', 1),
(2, 1, 'Curry Puff', 'assets/img/20.jpg', 27500, 'Puff pastry stuffed with ground chicken, onion, potatoes and currry powder with cucumber salad.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

DROP TABLE IF EXISTS `news_events`;
CREATE TABLE `news_events` (
  `ID_NEWS_EVENTS` int(6) NOT NULL,
  `DATE_START_EVENT` date NOT NULL,
  `DATE_END_EVENT` date NOT NULL,
  `TIME_START_EVENT` time NOT NULL,
  `TIME_END_EVENT` time NOT NULL,
  `HEADER_EVENT` varchar(255) NOT NULL,
  `CONTENT_EVENT` text NOT NULL,
  `SHOW_NEWS_EVENTS` int(1) NOT NULL,
  `STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opening_hours`
--

DROP TABLE IF EXISTS `opening_hours`;
CREATE TABLE `opening_hours` (
  `ID_OPENING_HOURS` int(6) NOT NULL,
  `DAY_OPENED` varchar(255) NOT NULL,
  `TIME_OPENED` varchar(255) NOT NULL,
  `SHOW_OPENING_HOURS` int(1) NOT NULL,
  `STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`ID_OPENING_HOURS`, `DAY_OPENED`, `TIME_OPENED`, `SHOW_OPENING_HOURS`, `STATUS`) VALUES
(1, 'MON - FRI', '9:00am - 4:00pm', 1, 1),
(2, 'SAT', '9:00am - 2:00pm', 1, 1),
(3, 'SUN', '8:30am - 1:00pm', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo` (
  `ID_PROMO` int(6) NOT NULL,
  `NAMA_PROMO` varchar(50) DEFAULT NULL,
  `DESKRIPSI_PROMO` varchar(100) DEFAULT NULL,
  `POTONGAN_HARGA` int(6) DEFAULT NULL,
  `ID_MENU` int(6) DEFAULT NULL,
  `STATUS_PROMO` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `today_special_header`
--

DROP TABLE IF EXISTS `today_special_header`;
CREATE TABLE `today_special_header` (
  `ID_SPECIAL_HEADER` int(6) NOT NULL,
  `NAME_SPECIAL_HEADER` varchar(255) NOT NULL,
  `SHOW_SPECIAL_HEADER` int(1) NOT NULL,
  `STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID_BOOKING`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`ID_COURIER`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_CUSTOMER`);

--
-- Indexes for table `d_transaksi`
--
ALTER TABLE `d_transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`,`ID_MENU`),
  ADD KEY `FK_D_TRANSAKSI2` (`ID_MENU`);

--
-- Indexes for table `d_trans_promo`
--
ALTER TABLE `d_trans_promo`
  ADD PRIMARY KEY (`ID_TRANS`,`ID_PROMO`),
  ADD KEY `FK_D_TRANS_PROMO2` (`ID_PROMO`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID_GALLERY`);

--
-- Indexes for table `gallery_home`
--
ALTER TABLE `gallery_home`
  ADD PRIMARY KEY (`ID_GALLERY_HOME`);

--
-- Indexes for table `h_transaksi`
--
ALTER TABLE `h_transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `FK_CUST_HTRANS` (`ID_CUSTOMER`),
  ADD KEY `FK_TRANSAKSI_COURIER` (`ID_COURIER`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`ID_MEJA`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_MENU`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_KATEGORI`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`ID_NEWS_EVENTS`);

--
-- Indexes for table `opening_hours`
--
ALTER TABLE `opening_hours`
  ADD PRIMARY KEY (`ID_OPENING_HOURS`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`ID_PROMO`);

--
-- Indexes for table `today_special_header`
--
ALTER TABLE `today_special_header`
  ADD PRIMARY KEY (`ID_SPECIAL_HEADER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID_BOOKING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `ID_COURIER` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_CUSTOMER` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID_GALLERY` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery_home`
--
ALTER TABLE `gallery_home`
  MODIFY `ID_GALLERY_HOME` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `h_transaksi`
--
ALTER TABLE `h_transaksi`
  MODIFY `ID_TRANSAKSI` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ID_KATEGORI` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `ID_MEJA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_MENU` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `ID_NEWS_EVENTS` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opening_hours`
--
ALTER TABLE `opening_hours`
  MODIFY `ID_OPENING_HOURS` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `ID_PROMO` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `today_special_header`
--
ALTER TABLE `today_special_header`
  MODIFY `ID_SPECIAL_HEADER` int(6) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `d_transaksi`
--
ALTER TABLE `d_transaksi`
  ADD CONSTRAINT `FK_D_TRANSAKSI` FOREIGN KEY (`ID_TRANSAKSI`) REFERENCES `h_transaksi` (`ID_TRANSAKSI`),
  ADD CONSTRAINT `FK_D_TRANSAKSI2` FOREIGN KEY (`ID_MENU`) REFERENCES `menu` (`ID_MENU`);

--
-- Constraints for table `d_trans_promo`
--
ALTER TABLE `d_trans_promo`
  ADD CONSTRAINT `FK_D_TRANS_PROMO` FOREIGN KEY (`ID_TRANS`) REFERENCES `h_transaksi` (`ID_TRANSAKSI`),
  ADD CONSTRAINT `FK_D_TRANS_PROMO2` FOREIGN KEY (`ID_PROMO`) REFERENCES `promo` (`ID_PROMO`);

--
-- Constraints for table `h_transaksi`
--
ALTER TABLE `h_transaksi`
  ADD CONSTRAINT `FK_CUST_HTRANS` FOREIGN KEY (`ID_CUSTOMER`) REFERENCES `customer` (`ID_CUSTOMER`),
  ADD CONSTRAINT `FK_TRANSAKSI_COURIER` FOREIGN KEY (`ID_COURIER`) REFERENCES `courier` (`ID_COURIER`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori` (`ID_KATEGORI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
