-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2016 at 08:00 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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

CREATE TABLE `booking` (
  `ID_BOOKING` int(11) NOT NULL,
  `ID_CUSTOMER` int(11) NOT NULL,
  `ID_MEJA` int(11) NOT NULL,
  `TANGGAL_BOOKING` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `d_transaksi`
--

CREATE TABLE `d_transaksi` (
  `ID_TRANSAKSI` int(6) NOT NULL,
  `ID_MENU` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d_trans_promo`
--

CREATE TABLE `d_trans_promo` (
  `ID_TRANSAKSI` int(6) NOT NULL,
  `ID_PROMO` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h_transaksi`
--

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

CREATE TABLE `kategori` (
  `ID_KATEGORI` int(3) NOT NULL,
  `NAMA_KATEGORI` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `ID_MEJA` int(11) NOT NULL,
  `KAPASITAS_MEJA` int(2) NOT NULL,
  `STATUS_MEJA` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID_MENU` int(6) NOT NULL,
  `ID_KATEGORI` int(3) NOT NULL,
  `NAMA_MENU` varchar(100) DEFAULT NULL,
  `HARGA` int(7) DEFAULT NULL,
  `DESKRIPSI` varchar(100) DEFAULT NULL,
  `STATUS_MENU` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `ID_PROMO` int(6) NOT NULL,
  `NAMA_PROMO` varchar(50) DEFAULT NULL,
  `DESKRIPSI_PROMO` varchar(100) DEFAULT NULL,
  `POTONGAN_HARGA` int(6) DEFAULT NULL,
  `MINIMAL_PEMBELIAN` int(1) DEFAULT NULL,
  `STATUS_PROMO` int(1) DEFAULT NULL
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
  ADD PRIMARY KEY (`ID_TRANSAKSI`,`ID_PROMO`),
  ADD KEY `FK_D_TRANS_PROMO2` (`ID_PROMO`);

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
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`ID_PROMO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID_BOOKING` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `ID_COURIER` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_CUSTOMER` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `h_transaksi`
--
ALTER TABLE `h_transaksi`
  MODIFY `ID_TRANSAKSI` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ID_KATEGORI` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `ID_MEJA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_MENU` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `ID_PROMO` int(6) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `FK_D_TRANS_PROMO` FOREIGN KEY (`ID_TRANSAKSI`) REFERENCES `h_transaksi` (`ID_TRANSAKSI`),
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
