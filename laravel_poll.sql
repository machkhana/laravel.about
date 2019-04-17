-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 08:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel.poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpolls`
--

CREATE TABLE `addpolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repair` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likegorgia_1` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_2` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_3` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_4` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_5` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_6` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_7` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_8` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_9` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_10` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_11` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_12` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_13` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_14` tinyint(1) NOT NULL DEFAULT '0',
  `likegorgia_15` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addpolls`
--

INSERT INTO `addpolls` (`id`, `created_at`, `updated_at`, `sex`, `idnumber`, `username`, `surname`, `birthday`, `address`, `mobile`, `repair`, `likegorgia_1`, `likegorgia_2`, `likegorgia_3`, `likegorgia_4`, `likegorgia_5`, `likegorgia_6`, `likegorgia_7`, `likegorgia_8`, `likegorgia_9`, `likegorgia_10`, `likegorgia_11`, `likegorgia_12`, `likegorgia_13`, `likegorgia_14`, `likegorgia_15`) VALUES
(4, '2019-04-02 09:12:31', '2019-04-02 09:12:31', 'მდედრობითი', '123123123', 'wertwert', 'dfgsdfg', '2019-04-04', 'Georgia', '595062602', 'კი', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '2019-04-02 09:14:37', '2019-04-02 09:14:37', 'მდედრობითი', '123123123', 'admin', 'dfgsdfg', '2019-04-18', 'გე', '591086042', 'კი', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `likecategories`
--

CREATE TABLE `likecategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `catname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likecategories`
--

INSERT INTO `likecategories` (`id`, `created_at`, `updated_at`, `catname`, `sort`) VALUES
(1, '2019-04-02 03:53:18', '2019-04-08 04:50:09', 'აბაზანა/კერამიკა', 1),
(2, '2019-04-02 03:53:52', '2019-04-02 03:53:52', 'სამშენებლო', 2),
(3, '2019-04-02 03:54:04', '2019-04-02 03:54:04', 'გათბობა', 3),
(4, '2019-04-02 08:08:11', '2019-04-02 08:08:11', 'ხელსაწყოები', 4),
(5, '2019-04-02 08:08:20', '2019-04-02 08:08:20', 'ბაღი', 5),
(6, '2019-04-02 08:08:30', '2019-04-02 08:08:30', 'ელექტროობა', 6),
(7, '2019-04-02 08:09:07', '2019-04-02 08:09:07', 'ლამინატი', 7),
(8, '2019-04-02 08:11:45', '2019-04-02 08:11:45', 'კარ-ფანჯარა', 8),
(9, '2019-04-02 08:11:57', '2019-04-02 08:11:57', 'შპალერი', 9),
(10, '2019-04-02 08:12:11', '2019-04-02 08:12:11', 'ლაქ საღებავები', 10),
(11, '2019-04-02 08:12:23', '2019-04-02 08:12:23', 'საყოფაცხოვრებო', 11),
(12, '2019-04-02 08:12:40', '2019-04-02 08:12:40', 'სახურავი', 12),
(13, '2019-04-02 08:13:45', '2019-04-02 08:13:45', 'ავეჯი', 13),
(14, '2019-04-02 08:13:56', '2019-04-02 08:13:56', 'ტექსტილი', 14),
(15, '2019-04-02 08:14:03', '2019-04-02 08:14:03', 'სხვა', 15);

-- --------------------------------------------------------

--
-- Table structure for table `likepollresults`
--

CREATE TABLE `likepollresults` (
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likepollresults`
--

INSERT INTO `likepollresults` (`poll_id`, `cat_id`) VALUES
(5, 2),
(5, 5),
(5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2019_03_31_084815_create_addpoll_table', 1),
(27, '2014_10_12_000000_create_users_table', 2),
(28, '2014_10_12_100000_create_password_resets_table', 2),
(29, '2019_03_31_091426_create_addpolls_table', 2),
(30, '2019_04_01_164102_create_likecategories_table', 2),
(31, '2019_04_02_093037_create_likepollresults_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Giorgi Machkhaneli', 'g.machkhaneli@gmail.com', NULL, '$2y$10$hCavgB9VQ/5nDbljfPj3SOUzekhw0XVWqHqkvHO1CqUf0rdcl3Jva', NULL, '2019-04-02 03:52:56', '2019-04-02 03:52:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpolls`
--
ALTER TABLE `addpolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likecategories`
--
ALTER TABLE `likecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likepollresults`
--
ALTER TABLE `likepollresults`
  ADD PRIMARY KEY (`poll_id`,`cat_id`),
  ADD KEY `likepollresults_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpolls`
--
ALTER TABLE `addpolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likecategories`
--
ALTER TABLE `likecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likepollresults`
--
ALTER TABLE `likepollresults`
  ADD CONSTRAINT `likepollresults_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `likecategories` (`id`),
  ADD CONSTRAINT `likepollresults_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `addpolls` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
