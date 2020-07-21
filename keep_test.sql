-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 08:04 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keeper`
--

-- --------------------------------------------------------

--
-- Table structure for table `keep_test`
--

CREATE TABLE `keep_test` (
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `website_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keep_test`
--

INSERT INTO `keep_test` (`username`, `password`, `website_url`) VALUES
('shubhika_gupta', 'Password', 'www.dddd.com'),
('demo789', 'demo789', 'www.demo.com'),
('demodemo', 'Password', 'www.django.com'),
('shubhikagupta1234@gm', 'demo789', 'www.google.com'),
('shubhikagupta1234@gm', 'Password', 'www.google1.com'),
('shubhikagupta1234@gm', 'Password', 'www.google12.com'),
('shubhikagupta1234@gm', 'Password', 'www.google122.com'),
('shubhika_gupta', 'Password', 'www.google12_2.com'),
('shubhika_gupta', 'shubhika12345', 'www.ludo.in'),
('demo123', 'demo@123', 'www.shubhika.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keep_test`
--
ALTER TABLE `keep_test`
  ADD PRIMARY KEY (`website_url`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
