-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2024 at 03:57 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatives`
--

CREATE TABLE `alternatives` (
  `id` bigint UNSIGNED NOT NULL,
  `criteria_id` bigint UNSIGNED NOT NULL,
  `tourism_object_id` bigint UNSIGNED NOT NULL,
  `alternative_value` decimal(10,1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatives`
--

INSERT INTO `alternatives` (`id`, `criteria_id`, `tourism_object_id`, `alternative_value`, `created_at`, `updated_at`) VALUES
(10, 4, 4, 2.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(11, 5, 4, 1.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(12, 6, 4, 1.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(13, 7, 4, 1.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(14, 8, 4, 4.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(15, 9, 4, 2.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(16, 10, 4, 4.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(17, 11, 4, 5.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(18, 12, 4, 2.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(19, 13, 4, 2.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(20, 14, 4, 1.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(21, 15, 4, 4.0, '2024-06-12 18:05:10', '2024-06-12 18:05:10'),
(22, 4, 5, 2.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(23, 5, 5, 2.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(24, 6, 5, 1.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(25, 7, 5, 5.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(26, 8, 5, 3.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(27, 9, 5, 5.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(28, 10, 5, 3.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(29, 11, 5, 2.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(30, 12, 5, 1.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(31, 13, 5, 3.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(32, 14, 5, 2.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(33, 15, 5, 1.0, '2024-06-12 18:06:20', '2024-06-12 18:06:20'),
(34, 4, 6, 3.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(35, 5, 6, 3.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(36, 6, 6, 2.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(37, 7, 6, 1.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(38, 8, 6, 2.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(39, 9, 6, 2.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(40, 10, 6, 3.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(41, 11, 6, 3.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(42, 12, 6, 1.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(43, 13, 6, 1.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(44, 14, 6, 1.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(45, 15, 6, 2.0, '2024-06-12 18:06:56', '2024-06-12 18:06:56'),
(46, 4, 7, 1.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(47, 5, 7, 5.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(48, 6, 7, 3.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(49, 7, 7, 3.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(50, 8, 7, 1.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(51, 9, 7, 3.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(52, 10, 7, 2.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(53, 11, 7, 2.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(54, 12, 7, 2.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(55, 13, 7, 1.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(56, 14, 7, 4.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(57, 15, 7, 3.0, '2024-06-12 18:07:34', '2024-06-12 18:07:34'),
(58, 4, 8, 2.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(59, 5, 8, 1.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(60, 6, 8, 4.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(61, 7, 8, 2.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(62, 8, 8, 3.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(63, 9, 8, 3.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(64, 10, 8, 1.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(65, 11, 8, 1.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(66, 12, 8, 2.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(67, 13, 8, 2.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(68, 14, 8, 2.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(69, 15, 8, 5.0, '2024-06-12 18:08:13', '2024-06-12 18:08:13'),
(70, 4, 9, 4.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(71, 5, 9, 1.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(72, 6, 9, 2.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(73, 7, 9, 1.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(74, 8, 9, 1.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(75, 9, 9, 1.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(76, 10, 9, 2.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(77, 11, 9, 1.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(78, 12, 9, 1.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(79, 13, 9, 3.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(80, 14, 9, 2.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(81, 15, 9, 1.0, '2024-06-12 18:08:47', '2024-06-12 18:08:47'),
(82, 4, 10, 1.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(83, 5, 10, 2.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(84, 6, 10, 1.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(85, 7, 10, 2.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(86, 8, 10, 4.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(87, 9, 10, 1.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(88, 10, 10, 1.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(89, 11, 10, 3.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(90, 12, 10, 5.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(91, 13, 10, 5.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(92, 14, 10, 1.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(93, 15, 10, 1.0, '2024-06-12 18:09:16', '2024-06-12 18:09:16'),
(94, 4, 11, 1.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(95, 5, 11, 4.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(96, 6, 11, 5.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(97, 7, 11, 3.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(98, 8, 11, 3.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(99, 9, 11, 2.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(100, 10, 11, 1.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(101, 11, 11, 4.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(102, 12, 11, 3.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(103, 13, 11, 2.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(104, 14, 11, 1.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(105, 15, 11, 2.0, '2024-06-12 18:10:01', '2024-06-12 18:10:01'),
(106, 4, 12, 5.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(107, 5, 12, 2.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(108, 6, 12, 2.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(109, 7, 12, 3.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(110, 8, 12, 2.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(111, 9, 12, 2.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(112, 10, 12, 4.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(113, 11, 12, 5.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(114, 12, 12, 2.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(115, 13, 12, 1.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(116, 14, 12, 2.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(117, 15, 12, 3.0, '2024-06-12 18:10:48', '2024-06-12 18:10:48'),
(118, 4, 13, 4.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(119, 5, 13, 1.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(120, 6, 13, 1.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(121, 7, 13, 4.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(122, 8, 13, 1.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(123, 9, 13, 3.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(124, 10, 13, 2.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(125, 11, 13, 3.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(126, 12, 13, 1.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(127, 13, 13, 2.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(128, 14, 13, 1.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(129, 15, 13, 4.0, '2024-06-12 18:11:28', '2024-06-12 18:11:28'),
(130, 4, 14, 2.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(131, 5, 14, 2.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(132, 6, 14, 1.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(133, 7, 14, 5.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(134, 8, 14, 2.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(135, 9, 14, 5.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(136, 10, 14, 1.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(137, 11, 14, 1.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(138, 12, 14, 3.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(139, 13, 14, 3.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(140, 14, 14, 4.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(141, 15, 14, 2.0, '2024-06-12 18:12:07', '2024-06-12 18:12:07'),
(142, 4, 15, 1.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(143, 5, 15, 3.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(144, 6, 15, 3.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(145, 7, 15, 4.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(146, 8, 15, 1.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(147, 9, 15, 4.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(148, 10, 15, 5.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(149, 11, 15, 2.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(150, 12, 15, 2.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(151, 13, 15, 5.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(152, 14, 15, 2.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38'),
(153, 15, 15, 1.0, '2024-06-12 18:12:38', '2024-06-12 18:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id`, `name`, `attribute`, `created_at`, `updated_at`) VALUES
(4, 'Temperatur', 'BENEFIT', '2024-06-12 16:43:32', '2024-06-13 15:29:00'),
(5, 'Ketersediaan Air', 'BENEFIT', '2024-06-12 16:43:41', '2024-06-12 16:43:41'),
(6, 'Ketersediaan Oksigen', 'BENEFIT', '2024-06-12 16:43:50', '2024-06-12 16:43:50'),
(7, 'Media Perakaran', 'BENEFIT', '2024-06-12 16:44:03', '2024-06-12 16:44:03'),
(8, 'Gambut', 'COST', '2024-06-12 16:44:13', '2024-06-12 16:44:36'),
(9, 'Retensi Hara', 'BENEFIT', '2024-06-12 16:44:22', '2024-06-12 16:44:22'),
(10, 'Toksisitas', 'COST', '2024-06-12 16:45:05', '2024-06-12 16:45:05'),
(11, 'Sodisitas', 'COST', '2024-06-12 16:45:19', '2024-06-12 16:45:19'),
(12, 'Bahaya Sufidik', 'COST', '2024-06-12 16:45:32', '2024-06-12 16:45:32'),
(13, 'Bahaya Erosi', 'COST', '2024-06-12 16:45:44', '2024-06-12 16:45:44'),
(14, 'Bahaya Banjir', 'COST', '2024-06-12 16:45:54', '2024-06-12 16:45:54'),
(15, 'Penyiapan Lahan', 'COST', '2024-06-12 16:46:03', '2024-06-12 16:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_analyses`
--

CREATE TABLE `criteria_analyses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteria_analyses`
--

INSERT INTO `criteria_analyses` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 1, '2024-06-12 17:35:47', '2024-06-12 17:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_analysis_details`
--

CREATE TABLE `criteria_analysis_details` (
  `id` bigint UNSIGNED NOT NULL,
  `criteria_analysis_id` bigint UNSIGNED NOT NULL,
  `criteria_id_first` bigint UNSIGNED NOT NULL,
  `criteria_id_second` bigint UNSIGNED NOT NULL,
  `comparison_value` decimal(10,9) NOT NULL DEFAULT '1.000000000',
  `comparison_result` decimal(10,9) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteria_analysis_details`
--

INSERT INTO `criteria_analysis_details` (`id`, `criteria_analysis_id`, `criteria_id_first`, `criteria_id_second`, `comparison_value`, `comparison_result`, `created_at`, `updated_at`) VALUES
(163, 4, 4, 4, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(164, 4, 4, 5, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(165, 4, 4, 6, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(166, 4, 4, 7, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(167, 4, 4, 8, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(168, 4, 4, 9, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(169, 4, 4, 10, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(170, 4, 4, 11, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(171, 4, 4, 12, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(172, 4, 4, 13, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(173, 4, 4, 14, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(174, 4, 4, 15, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(175, 4, 5, 4, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(176, 4, 5, 5, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(177, 4, 5, 6, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(178, 4, 5, 7, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(179, 4, 5, 8, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(180, 4, 5, 9, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(181, 4, 5, 10, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(182, 4, 5, 11, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(183, 4, 5, 12, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(184, 4, 5, 13, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(185, 4, 5, 14, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(186, 4, 5, 15, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(187, 4, 6, 4, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(188, 4, 6, 5, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(189, 4, 6, 6, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(190, 4, 6, 7, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(191, 4, 6, 8, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(192, 4, 6, 9, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(193, 4, 6, 10, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(194, 4, 6, 11, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(195, 4, 6, 12, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(196, 4, 6, 13, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(197, 4, 6, 14, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(198, 4, 6, 15, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(199, 4, 7, 4, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(200, 4, 7, 5, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(201, 4, 7, 6, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(202, 4, 7, 7, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(203, 4, 7, 8, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(204, 4, 7, 9, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(205, 4, 7, 10, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(206, 4, 7, 11, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(207, 4, 7, 12, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(208, 4, 7, 13, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(209, 4, 7, 14, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(210, 4, 7, 15, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(211, 4, 8, 4, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(212, 4, 8, 5, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(213, 4, 8, 6, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(214, 4, 8, 7, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(215, 4, 8, 8, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(216, 4, 8, 9, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(217, 4, 8, 10, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(218, 4, 8, 11, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(219, 4, 8, 12, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(220, 4, 8, 13, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(221, 4, 8, 14, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(222, 4, 8, 15, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(223, 4, 9, 4, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(224, 4, 9, 5, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(225, 4, 9, 6, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(226, 4, 9, 7, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(227, 4, 9, 8, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(228, 4, 9, 9, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(229, 4, 9, 10, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(230, 4, 9, 11, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(231, 4, 9, 12, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(232, 4, 9, 13, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(233, 4, 9, 14, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(234, 4, 9, 15, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(235, 4, 10, 4, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(236, 4, 10, 5, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(237, 4, 10, 6, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(238, 4, 10, 7, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(239, 4, 10, 8, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(240, 4, 10, 9, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(241, 4, 10, 10, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(242, 4, 10, 11, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(243, 4, 10, 12, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(244, 4, 10, 13, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(245, 4, 10, 14, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(246, 4, 10, 15, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(247, 4, 11, 4, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(248, 4, 11, 5, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(249, 4, 11, 6, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(250, 4, 11, 7, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(251, 4, 11, 8, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(252, 4, 11, 9, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(253, 4, 11, 10, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(254, 4, 11, 11, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(255, 4, 11, 12, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(256, 4, 11, 13, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(257, 4, 11, 14, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(258, 4, 11, 15, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(259, 4, 12, 4, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(260, 4, 12, 5, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(261, 4, 12, 6, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(262, 4, 12, 7, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(263, 4, 12, 8, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(264, 4, 12, 9, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(265, 4, 12, 10, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(266, 4, 12, 11, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(267, 4, 12, 12, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(268, 4, 12, 13, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(269, 4, 12, 14, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(270, 4, 12, 15, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(271, 4, 13, 4, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(272, 4, 13, 5, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(273, 4, 13, 6, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(274, 4, 13, 7, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(275, 4, 13, 8, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(276, 4, 13, 9, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(277, 4, 13, 10, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(278, 4, 13, 11, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(279, 4, 13, 12, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(280, 4, 13, 13, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(281, 4, 13, 14, 4.000000000, 4.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(282, 4, 13, 15, 3.000000000, 3.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(283, 4, 14, 4, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(284, 4, 14, 5, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(285, 4, 14, 6, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(286, 4, 14, 7, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(287, 4, 14, 8, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(288, 4, 14, 9, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(289, 4, 14, 10, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(290, 4, 14, 11, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(291, 4, 14, 12, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(292, 4, 14, 13, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(293, 4, 14, 14, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(294, 4, 14, 15, 2.000000000, 2.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(295, 4, 15, 4, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(296, 4, 15, 5, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(297, 4, 15, 6, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(298, 4, 15, 7, 1.000000000, 0.250000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(299, 4, 15, 8, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(300, 4, 15, 9, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(301, 4, 15, 10, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(302, 4, 15, 11, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(303, 4, 15, 12, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(304, 4, 15, 13, 1.000000000, 0.333333333, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(305, 4, 15, 14, 1.000000000, 0.500000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51'),
(306, 4, 15, 15, 1.000000000, 1.000000000, '2024-06-12 17:35:47', '2024-06-12 17:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_03_22_080106_create_tourism_objects_table', 1),
(4, '2022_03_22_080154_create_criterias_table', 1),
(5, '2022_03_22_080517_create_criteria_analyses_table', 1),
(6, '2022_03_22_080613_create_criteria_analysis_details', 1),
(7, '2022_03_22_080924_create_preventive_values_table', 1),
(8, '2022_03_22_081038_create_alternatives_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `preventive_values`
--

CREATE TABLE `preventive_values` (
  `id` bigint UNSIGNED NOT NULL,
  `criteria_analysis_id` bigint UNSIGNED NOT NULL,
  `criteria_id` bigint UNSIGNED NOT NULL,
  `value` decimal(10,9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preventive_values`
--

INSERT INTO `preventive_values` (`id`, `criteria_analysis_id`, `criteria_id`, `value`, `created_at`, `updated_at`) VALUES
(19, 4, 4, 0.182532862, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(20, 4, 5, 0.162671904, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(21, 4, 6, 0.120447880, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(22, 4, 7, 0.113956672, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(23, 4, 8, 0.084442382, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(24, 4, 9, 0.064733571, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(25, 4, 10, 0.068040612, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(26, 4, 11, 0.056071410, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(27, 4, 12, 0.051035868, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(28, 4, 13, 0.040508473, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(29, 4, 14, 0.029431232, '2024-06-12 17:39:51', '2024-06-12 17:39:51'),
(30, 4, 15, 0.026127126, '2024-06-12 17:39:51', '2024-06-12 17:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `tourism_objects`
--

CREATE TABLE `tourism_objects` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourism_objects`
--

INSERT INTO `tourism_objects` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(4, 'Karet', 'A1', '2024-06-12 16:46:47', '2024-06-12 16:46:47'),
(5, 'Kelapa', 'A2', '2024-06-12 16:46:56', '2024-06-12 16:46:56'),
(6, 'Kelapa Sawit', 'A3', '2024-06-12 16:47:05', '2024-06-12 16:47:05'),
(7, 'Kopi', 'A4', '2024-06-12 16:47:14', '2024-06-12 16:47:14'),
(8, 'kakao', 'A5', '2024-06-12 16:47:21', '2024-06-12 16:47:21'),
(9, 'cengkeh', 'A6', '2024-06-12 16:47:31', '2024-06-12 16:47:31'),
(10, 'Teh', 'A7', '2024-06-12 16:47:40', '2024-06-12 16:47:40'),
(11, 'Tembakau', 'A8', '2024-06-12 16:47:51', '2024-06-12 16:47:51'),
(12, 'Tebu', 'A9', '2024-06-12 16:47:59', '2024-06-12 16:47:59'),
(13, 'Kapas', 'A10', '2024-06-12 16:48:08', '2024-06-12 16:48:08'),
(14, 'Kapuk', 'A11', '2024-06-12 16:48:18', '2024-06-12 16:48:18'),
(15, 'Melino', 'A12', '2024-06-12 16:48:35', '2024-06-12 16:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'superadmin', 'superadmin@spk.com', '$2y$10$BC2iRcMYjnRJ4q7CZN8rauehspfX2YPpSq5zJHE2ufMdYiBy0CRja', 'SUPERADMIN', '2024-06-11 21:58:38', '2024-06-11 21:58:38'),
(2, 'supertes', 'supertes', 'tes@gmail.com', '$2a$12$firIdU7ZYRZuoCc/aop6IulmirAyDtQvs5.wci2rs44JSpBTg/88i', 'SUPERADMIN', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternatives_criteria_id_foreign` (`criteria_id`),
  ADD KEY `alternatives_tourism_object_id_foreign` (`tourism_object_id`);

--
-- Indexes for table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `criterias_name_unique` (`name`);

--
-- Indexes for table `criteria_analyses`
--
ALTER TABLE `criteria_analyses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_analyses_user_id_foreign` (`user_id`);

--
-- Indexes for table `criteria_analysis_details`
--
ALTER TABLE `criteria_analysis_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_analysis_details_criteria_analysis_id_foreign` (`criteria_analysis_id`),
  ADD KEY `criteria_analysis_details_criteria_id_first_foreign` (`criteria_id_first`),
  ADD KEY `criteria_analysis_details_criteria_id_second_foreign` (`criteria_id_second`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preventive_values`
--
ALTER TABLE `preventive_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preventive_values_criteria_analysis_id_foreign` (`criteria_analysis_id`),
  ADD KEY `preventive_values_criteria_id_foreign` (`criteria_id`);

--
-- Indexes for table `tourism_objects`
--
ALTER TABLE `tourism_objects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tourism_objects_name_unique` (`name`),
  ADD UNIQUE KEY `tourism_objects_address_unique` (`address`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `criteria_analyses`
--
ALTER TABLE `criteria_analyses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `criteria_analysis_details`
--
ALTER TABLE `criteria_analysis_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `preventive_values`
--
ALTER TABLE `preventive_values`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tourism_objects`
--
ALTER TABLE `tourism_objects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternatives`
--
ALTER TABLE `alternatives`
  ADD CONSTRAINT `alternatives_criteria_id_foreign` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alternatives_tourism_object_id_foreign` FOREIGN KEY (`tourism_object_id`) REFERENCES `tourism_objects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `criteria_analyses`
--
ALTER TABLE `criteria_analyses`
  ADD CONSTRAINT `criteria_analyses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `criteria_analysis_details`
--
ALTER TABLE `criteria_analysis_details`
  ADD CONSTRAINT `criteria_analysis_details_criteria_analysis_id_foreign` FOREIGN KEY (`criteria_analysis_id`) REFERENCES `criteria_analyses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `criteria_analysis_details_criteria_id_first_foreign` FOREIGN KEY (`criteria_id_first`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `criteria_analysis_details_criteria_id_second_foreign` FOREIGN KEY (`criteria_id_second`) REFERENCES `criterias` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `preventive_values`
--
ALTER TABLE `preventive_values`
  ADD CONSTRAINT `preventive_values_criteria_analysis_id_foreign` FOREIGN KEY (`criteria_analysis_id`) REFERENCES `criteria_analyses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `preventive_values_criteria_id_foreign` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
