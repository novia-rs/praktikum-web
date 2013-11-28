-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2013 at 03:37 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` double NOT NULL,
  `kd_prodi` int(3) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `kd_prodi`, `nama`, `alamat`) VALUES
(11111, 334, 'Ifanatun Nadhiroh', 'Malang'),
(11122, 344, 'Ika Rizki', 'Lumajang'),
(12234, 334, 'Elsa Dwi', 'Situbondo'),
(12344, 344, 'Novi Adi', 'Batu'),
(22222, 344, 'Indri Widiyarti', 'Lumajang'),
(54321, 344, 'Rizka Rahmania', 'Malang'),
(123456, 334, 'Sigma Akhiria', 'Ponorogo');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa2`
--

CREATE TABLE IF NOT EXISTS `mahasiswa2` (
  `nim` double NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa2`
--

INSERT INTO `mahasiswa2` (`nim`, `nama`, `alamat`, `nama_prodi`) VALUES
(0, '', '', ''),
(11111, 'Ifanatun Nadhiroh', 'Malang', 'Pendidikan Teknik Informatika'),
(11122, 'Ika Rizki', 'Lumajang', 'Pendidikan Teknik Elektro'),
(12234, 'Elsa Dwi', 'Situbondo', 'Pendidikan Teknik Informatika'),
(12344, 'Novi Adi', 'Batu', 'Pendidikan Teknik Elektro'),
(22222, 'Indri Widiyarti', 'Lumajang', 'Pendidikan Teknik Elektro'),
(54321, 'Rizka Rahmania', 'Malang', 'Pendidikan Teknik Elektro'),
(123456, 'Sigma Akhiria', 'Ponorogo', 'Pendidikan Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `kd_prodi` int(3) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `nama_prodi`) VALUES
(334, 'Pendidikan Teknik Informatika'),
(344, 'Pendidikan Teknik Elektro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
