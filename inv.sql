-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 05:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `inv_main`
--

CREATE TABLE `inv_main` (
  `inv_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `create_dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inv_main`
--

INSERT INTO `inv_main` (`inv_id`, `name`, `create_dt`) VALUES
(15, 'TurtleT', '2021-05-12 11:10:33'),
(16, 'Turtl', '2021-05-12 11:13:50'),
(17, 'สถาพร', '2021-05-12 11:38:29'),
(18, 'TurtleT', '2021-05-12 11:49:32'),
(19, 'เนตรนภา', '2021-05-12 11:50:11'),
(20, 'เนตรนภา', '2021-05-12 11:51:47'),
(21, 'admin', '2021-05-12 11:51:55'),
(22, 'TurtleT', '2021-05-12 15:22:08'),
(23, 'สถาพร พืมขุนทด', '2021-05-12 15:36:53'),
(24, 'admin', '2021-05-12 15:37:14'),
(25, 'ASD', '2021-05-13 09:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `inv_sub`
--

CREATE TABLE `inv_sub` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(200) NOT NULL,
  `create_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `inv_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inv_sub`
--

INSERT INTO `inv_sub` (`sub_id`, `sub_name`, `create_dt`, `inv_id`) VALUES
(19, 'asd', '2021-05-13 09:10:06', 15),
(20, 'asd', '2021-05-13 09:10:18', 16),
(21, 'asd', '2021-05-13 09:10:33', 17),
(22, 'asd', '2021-05-13 09:20:02', 15),
(23, 'asd', '2021-05-13 09:23:39', 15),
(24, 'asd', '2021-05-13 09:28:16', 15),
(25, 'asd', '2021-05-13 09:34:58', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_main`
--
ALTER TABLE `inv_main`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `inv_sub`
--
ALTER TABLE `inv_sub`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_main`
--
ALTER TABLE `inv_main`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `inv_sub`
--
ALTER TABLE `inv_sub`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
