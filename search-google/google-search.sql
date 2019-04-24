-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 05:09 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `google-search`
--

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `keyword_id` int(11) NOT NULL,
  `keyword_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE `url` (
  `url_id` int(11) NOT NULL,
  `url_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_keyword_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`url_id`, `url_link`, `url_keyword_id`) VALUES
(203, '\"https://www.youtube.com/user/AAA', 0),
(204, 'null', 0),
(205, 'https://www.aaascholarships.org/', 0),
(206, 'https://careers.calif.aaa.com/job-search-results/', 0),
(207, 'https://www.aaascholarships.org/parents/florida/', 0),
(208, 'https://www.mass.gov/rmv-services-at-aaa', 0),
(209, 'https://www.americanavalancheassociation.org/', 0),
(210, 'https://play.google.com/store/apps/details?id=com.aaa.android.discounts\"', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`keyword_id`);

--
-- Indexes for table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`url_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `url`
--
ALTER TABLE `url`
  MODIFY `url_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
