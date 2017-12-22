-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2017 at 09:20 AM
-- Server version: 10.1.29-MariaDB-1~xenial
-- PHP Version: 5.6.32-1+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sinau`
--

CREATE TABLE `tbl_sinau` (
  `id` int(12) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `umur` varchar(200) NOT NULL,
  `jk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sinau`
--

INSERT INTO `tbl_sinau` (`id`, `nama`, `umur`, `jk`) VALUES
(2, 'wedus', '11', 'lanang'),
(3, 'aA', '2', 'a'),
(4, 'saa', '33', 'vsds'),
(5, 'tahu', '20', 'kontol'),
(6, 'tahu', '10', 'usu'),
(7, 'ghg', 'hg', 'hgh'),
(8, 'jkjk', 'jkjk', 'jkj'),
(9, 'coba data', 'coba data', 'coba data'),
(10, 'coba1', 'coba1', 'coba1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sinau`
--
ALTER TABLE `tbl_sinau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sinau`
--
ALTER TABLE `tbl_sinau`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
