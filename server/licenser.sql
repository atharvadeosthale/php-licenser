-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2019 at 08:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licenser`
--

-- --------------------------------------------------------

--
-- Table structure for table `license_keys`
--

CREATE TABLE `license_keys` (
  `id` int(11) NOT NULL,
  `license_key` text NOT NULL,
  `package_name` text NOT NULL,
  `domain_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `license_keys`
--

INSERT INTO `license_keys` (`id`, `license_key`, `package_name`, `domain_name`) VALUES
(1, 'somelicensekey', 'somepackage', 'localhost'),
(2, 'license2', 'package2', 'localhost');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `license_keys`
--
ALTER TABLE `license_keys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `license_keys`
--
ALTER TABLE `license_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
