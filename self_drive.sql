-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 04:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `self_drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_booking`
--

CREATE TABLE `car_booking` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_booking`
--

INSERT INTO `car_booking` (`id`, `city`, `start_date`, `end_date`, `start_time`, `end_time`) VALUES
(1, 'surat', '2023-10-09', '2023-10-16', '20:03', '23:06'),
(2, 'surat', '2023-10-13', '2023-10-19', '15:57', '15:58'),
(3, '', '0000-00-00', '0000-00-00', '', ''),
(4, 'surat', '0000-00-00', '2023-10-16', '20:44', '20:44'),
(5, 'surat', '2023-10-16', '2023-10-16', '20:44', '20:44'),
(6, 'surat', '2023-10-16', '2023-10-16', '20:50', '20:50'),
(7, 'surat', '2023-10-16', '2023-10-16', '20:55', '20:55'),
(8, 'surat', '2023-10-16', '2023-10-16', '20:57', '20:57'),
(9, 'surat', '2023-10-16', '2023-10-16', '20:59', '20:59'),
(10, 'surat', '2023-10-16', '2023-10-26', '20:59', '20:59'),
(11, 'surat', '2023-10-18', '2023-10-18', '20:21', '00:21'),
(12, 'surat', '2023-10-17', '2023-10-31', '20:35', '20:36'),
(13, 'surat', '2023-10-18', '2023-10-19', '20:23', '20:23'),
(14, '', '0000-00-00', '0000-00-00', '', ''),
(15, 'surat', '2023-10-19', '2023-10-21', '14:40', '14:40'),
(16, 'surat', '2023-10-21', '0000-00-00', '17:14', ''),
(17, 'surat', '2023-10-21', '0000-00-00', '17:14', ''),
(18, 'surat', '2023-10-21', '2023-10-21', '17:14', '19:39'),
(19, 'surat', '2023-10-22', '2023-10-22', '09:17', '09:17'),
(20, 'surat', '2023-10-22', '2023-10-22', '09:30', '09:31'),
(21, 'surat', '2023-10-22', '2023-10-22', '09:52', '09:52'),
(22, 'surat', '2023-10-22', '2023-10-22', '11:11', '11:11'),
(23, 'surat', '0000-00-00', '0000-00-00', '', ''),
(24, 'surat', '2023-10-22', '0000-00-00', '12:42', ''),
(25, 'surat', '2023-10-22', '2023-10-22', '12:42', '12:42'),
(26, 'surat', '2023-10-22', '2023-10-22', '12:46', '12:46'),
(27, 'surat', '0000-00-00', '0000-00-00', '', ''),
(28, 'surat', '2023-10-22', '2023-10-22', '12:49', '12:49'),
(29, 'surat', '2023-10-22', '2023-10-24', '12:49', '15:49'),
(30, 'surat', '2023-10-22', '2023-10-24', '12:49', '17:49'),
(31, 'surat', '2023-10-22', '2023-10-23', '15:09', ''),
(32, 'surat', '2023-10-22', '2023-10-23', '15:09', '06:11'),
(33, 'surat', '2023-10-22', '2023-10-22', '16:04', '16:04'),
(34, 'surat', '2023-10-22', '2023-10-22', '16:29', '16:29'),
(35, 'surat', '2023-10-22', '2023-10-22', '16:36', '19:38'),
(36, 'surat', '2023-10-22', '2023-10-22', '16:50', '16:50'),
(37, 'surat', '2023-10-22', '2023-10-22', '17:01', '17:01'),
(38, 'surat', '2023-10-22', '2023-10-22', '17:04', '17:04'),
(39, 'surat', '2023-10-22', '2023-10-22', '18:06', '18:07'),
(40, 'surat', '2023-10-22', '2023-10-22', '18:31', '18:31'),
(41, 'surat', '2023-10-22', '2023-10-24', '18:31', '08:33'),
(42, 'surat', '2023-11-08', '2023-11-14', '10:50', '10:48'),
(43, 'surat', '0000-00-00', '0000-00-00', '15:43', '13:43'),
(44, 'surat', '0000-00-00', '0000-00-00', '15:51', '15:51'),
(45, 'surat', '0000-00-00', '0000-00-00', '15:51', '13:51'),
(46, 'surat', '0000-00-00', '0000-00-00', '15:51', '13:51'),
(47, 'surat', '0000-00-00', '0000-00-00', '16:2', '13:51'),
(48, 'surat', '0000-00-00', '0000-00-00', '16:2', '13:51');

-- --------------------------------------------------------

--
-- Table structure for table `car_booking_data`
--

CREATE TABLE `car_booking_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobileno` varchar(40) NOT NULL,
  `addar_card` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `driving_license` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `drop_facility` int(11) NOT NULL DEFAULT 0,
  `car_id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_booking_data`
--

INSERT INTO `car_booking_data` (`id`, `name`, `mobileno`, `addar_card`, `pan_card`, `driving_license`, `user_id`, `drop_facility`, `car_id`, `city`, `start_date`, `end_date`, `created_at`) VALUES
(17, '', '5648646486', '1_addar_img_20200603_151554.jpg', '1_pan_screenshot2020-09-17215232_14.jpg', '1_pan_screenshot2020-09-17215200_14.jpg', 1, 1, 3, 'surat', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-10-22 17:50:54'),
(18, '', '5648646486', '1_addar_screenshot2020-09-17215232_3.jpg', '1_pan_screenshot2020-09-17215232_15.jpg', '1_pan_img_20200603_151554.jpg', 1, 1, 3, 'surat', '2023-10-22 15:09:00', '2023-10-23 06:11:00', '2023-10-22 17:50:54'),
(19, '', '5648646486', '1_addar_screenshot2020-09-17215200_12.jpg', '1_pan_screenshot2020-09-17215232_16.jpg', '1_pan_screenshot2020-09-17215200_15.jpg', 1, 1, 3, 'surat', '2023-10-22 18:06:00', '2023-10-22 18:07:00', '2023-10-22 18:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `car_features`
--

CREATE TABLE `car_features` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `bag_allow` int(12) NOT NULL,
  `age` int(12) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `km` varchar(255) NOT NULL,
  `car_image` varchar(255) NOT NULL,
  `pickup_address` varchar(255) NOT NULL,
  `seater` varchar(255) NOT NULL,
  `gear` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_features`
--

INSERT INTO `car_features` (`id`, `car_name`, `bag_allow`, `age`, `fuel`, `km`, `car_image`, `pickup_address`, `seater`, `gear`, `price`) VALUES
(3, 'honda', 4, 18, '900', '900', 'honda_car1_3.jpg', 'katargam', '2', 'Menual', '2300.00'),
(4, 'suv', 4, 18, 'level to level', '900', 'suv_car2.jpg', 'katargam', '2', 'Auto', '2600.00'),
(5, 'honda', 4, 18, '900', 'rrth', 'honda_car1_4.jpg', 'katargam', '2', 'Menual', '2760'),
(6, 'honda', 4, 18, '900', 'rrth', 'honda_car1_5.jpg', 'katargam', '2', 'Menual', '2550'),
(7, 'honda', 4, 18, '900', 'rrth', 'honda_car1_6.jpg', 'katargam', '2', 'Menual', '1200'),
(8, 'honda', 4, 18, '900', 'rrth', 'honda_car1_7.jpg', 'katargam', '2', 'Menual', '2300.00'),
(9, 'honda', 4, 18, '900', 'rrth', 'honda_car1_8.jpg', 'katargam', '2', 'Menual', '2300.00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `phone_no`, `password`) VALUES
(1, 'neel@gmail.com', '', '1980fa3bbff704c8bec1b7196cf7dfbc');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_booking`
--
ALTER TABLE `car_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_booking_data`
--
ALTER TABLE `car_booking_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_features`
--
ALTER TABLE `car_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_booking`
--
ALTER TABLE `car_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `car_booking_data`
--
ALTER TABLE `car_booking_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `car_features`
--
ALTER TABLE `car_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
