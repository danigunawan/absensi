-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2015 at 01:46 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `ipk` double NOT NULL,
  `jurusan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `ipk`, `jurusan`) VALUES
('M0002', 'Hakko Bio Richard', 3, 'Manajemen Informatika'),
('M0003', 'Dede Rizki Ramadhan', 2.8, 'Manajemen Informatika'),
('M0004', 'Anton Sugianto', 3.2, 'Teknik Informatika'),
('M0005', 'Ujang Walim', 3.1, 'Sistem Informasi'),
('M0016', 'Dony', 3, 'Teknik Industri'),
('M0100', 'Dimas', 3.1, 'Psikologi'),
('M0016', 'Dion', 3, 'Teknik Industri'),
('M0016', 'Mayang', 3, 'Teknik Industri'),
('M0016', 'Susi', 3, 'Teknik Industri'),
('M0016', 'Niqo', 3, 'Teknik Industri'),
('M0016', 'Esbeye', 3, 'Teknik Industri'),
('M0016', 'Joko', 3, 'Teknik Industri'),
('M0016', 'Jaka', 3, 'Teknik Industri'),
('M0016', 'Wira', 3, 'Teknik Industri'),
('M0016', 'Maradona', 3, 'Teknik Industri'),
('M0016', 'Ujang', 3, 'Teknik Industri'),
('M0016', 'Sugiarto', 3, 'Teknik Industri'),
('M0016', 'Karman', 3, 'Teknik Industri'),
('M0016', 'Anto', 3, 'Teknik Industri'),
('M0016', 'Rosada', 3, 'Teknik Industri'),
('M0016', 'Bima', 3, 'Teknik Industri'),
('M0016', 'Lusi', 3, 'Teknik Industri'),
('M0016', 'Ipul', 3, 'Teknik Industri'),
('M0016', 'Erik', 3, 'Teknik Industri'),
('M0016', 'Siffa', 3, 'Teknik Industri'),
('M0016', 'Sebastian', 3, 'Teknik Industri'),
('M0016', 'George', 3, 'Teknik Industri'),
('M0016', 'Richard', 3, 'Teknik Industri'),
('M0016', 'Dony', 3, 'Teknik Industri');
