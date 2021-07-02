-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 يوليو 2021 الساعة 05:09
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotbase`
--

-- --------------------------------------------------------

--
-- بنية الجدول `mobilebase`
--

CREATE TABLE `mobilebase` (
  `Forward` tinyint(1) NOT NULL DEFAULT 0,
  `Leftt` tinyint(1) NOT NULL DEFAULT 0,
  `Rightt` tinyint(1) NOT NULL DEFAULT 0,
  `Backward` tinyint(1) NOT NULL DEFAULT 0,
  `Stop` tinyint(1) NOT NULL DEFAULT 0,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `mobilebase`
--

INSERT INTO `mobilebase` (`Forward`, `Leftt`, `Rightt`, `Backward`, `Stop`, `ID`) VALUES
(1, 0, 0, 0, 0, 1),
(0, 0, 0, 0, 1, 2),
(0, 0, 1, 0, 0, 3),
(0, 0, 0, 0, 1, 4),
(0, 1, 0, 0, 0, 5),
(0, 0, 0, 0, 1, 6),
(0, 0, 1, 0, 0, 7),
(0, 0, 0, 1, 0, 8),
(0, 0, 0, 0, 1, 9),
(0, 0, 0, 1, 0, 10),
(0, 0, 1, 0, 0, 11),
(0, 1, 0, 0, 0, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobilebase`
--
ALTER TABLE `mobilebase`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobilebase`
--
ALTER TABLE `mobilebase`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
