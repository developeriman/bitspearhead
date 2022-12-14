-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 06:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitspearhead`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appnext_brand`
--

CREATE TABLE `tbl_appnext_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand_logo`
--

CREATE TABLE `tbl_brand_logo` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_brand_logo`
--

INSERT INTO `tbl_brand_logo` (`id`, `brand_logo`, `created_at`, `updated_at`) VALUES
(2, '1670917440.png', '2022-12-13 01:19:36', '2022-12-13 01:44:00'),
(3, '1670916042.png', '2022-12-13 01:20:42', '2022-12-13 01:20:42'),
(4, '1670916054.png', '2022-12-13 01:20:54', '2022-12-13 01:20:54'),
(5, '1670916065.jpeg', '2022-12-13 01:21:05', '2022-12-13 01:21:05'),
(6, '1670916075.png', '2022-12-13 01:21:15', '2022-12-13 01:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_espn_cricinfo_brand`
--

CREATE TABLE `tbl_espn_cricinfo_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gupshup_brand`
--

CREATE TABLE `tbl_gupshup_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imo_brand`
--

CREATE TABLE `tbl_imo_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inf_makt_brand`
--

CREATE TABLE `tbl_inf_makt_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_likee_brand`
--

CREATE TABLE `tbl_likee_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mcanvas_brand`
--

CREATE TABLE `tbl_mcanvas_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pokkt_brand`
--

CREATE TABLE `tbl_pokkt_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ss_story`
--

CREATE TABLE `tbl_ss_story` (
  `id` int(11) NOT NULL,
  `ss_card` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ss_title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adveritser_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `platform_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `campaign_objective` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `campaign_module` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `campaign_duration` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content_image` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content_video` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dynamically_input_field` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ss_story`
--

INSERT INTO `tbl_ss_story` (`id`, `ss_card`, `ss_title`, `adveritser_name`, `platform_name`, `campaign_objective`, `campaign_module`, `campaign_duration`, `content_image`, `content_video`, `dynamically_input_field`, `created_at`, `updated_at`) VALUES
(6, '1670936926.PNG', 'Succss card title', 'Adveritser Name', 'Platform name', 'Campaign objective', 'Campaign module', 'Campaign duration', '1670936926.png', '1670936926.mp4', NULL, '2022-12-13 07:08:46', '2022-12-13 07:08:46'),
(7, '1670936957.png', 'ss', 'd', 'd', 'd', 'd', '4', '1670936957.PNG', '1670936957.PNG', NULL, '2022-12-13 07:09:17', '2022-12-13 07:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ss_story_attr`
--

CREATE TABLE `tbl_ss_story_attr` (
  `id` int(11) NOT NULL,
  `ss_story_id` int(11) DEFAULT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dynamic_field` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ss_story_attr`
--

INSERT INTO `tbl_ss_story_attr` (`id`, `ss_story_id`, `title`, `dynamic_field`, `created_at`, `updated_at`) VALUES
(17, 4, 'Platform', 'POKKT', '2022-12-12 22:54:54', '2022-12-12 22:54:54'),
(18, 4, 'Placement', 'Rewarded Ad', '2022-12-12 22:54:54', '2022-12-12 22:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usertype` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `usertype`, `status`, `created_at`, `updated_at`) VALUES
(1, 'iman', 'hossain', 'iman', 'iman@gmail.com', '$2y$10$93kOpFFvlxQ0q04JrMBNeebs4wOVQ6US0IEIwh44foLQHcvADeK/S', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yahoo_brand`
--

CREATE TABLE `tbl_yahoo_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zizmek_brand`
--

CREATE TABLE `tbl_zizmek_brand` (
  `id` int(11) NOT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appnext_brand`
--
ALTER TABLE `tbl_appnext_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brand_logo`
--
ALTER TABLE `tbl_brand_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_espn_cricinfo_brand`
--
ALTER TABLE `tbl_espn_cricinfo_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gupshup_brand`
--
ALTER TABLE `tbl_gupshup_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_imo_brand`
--
ALTER TABLE `tbl_imo_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inf_makt_brand`
--
ALTER TABLE `tbl_inf_makt_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_likee_brand`
--
ALTER TABLE `tbl_likee_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mcanvas_brand`
--
ALTER TABLE `tbl_mcanvas_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pokkt_brand`
--
ALTER TABLE `tbl_pokkt_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ss_story`
--
ALTER TABLE `tbl_ss_story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ss_story_attr`
--
ALTER TABLE `tbl_ss_story_attr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_yahoo_brand`
--
ALTER TABLE `tbl_yahoo_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_zizmek_brand`
--
ALTER TABLE `tbl_zizmek_brand`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appnext_brand`
--
ALTER TABLE `tbl_appnext_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_brand_logo`
--
ALTER TABLE `tbl_brand_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_espn_cricinfo_brand`
--
ALTER TABLE `tbl_espn_cricinfo_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gupshup_brand`
--
ALTER TABLE `tbl_gupshup_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_imo_brand`
--
ALTER TABLE `tbl_imo_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_inf_makt_brand`
--
ALTER TABLE `tbl_inf_makt_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_likee_brand`
--
ALTER TABLE `tbl_likee_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mcanvas_brand`
--
ALTER TABLE `tbl_mcanvas_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pokkt_brand`
--
ALTER TABLE `tbl_pokkt_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ss_story`
--
ALTER TABLE `tbl_ss_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_ss_story_attr`
--
ALTER TABLE `tbl_ss_story_attr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_yahoo_brand`
--
ALTER TABLE `tbl_yahoo_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_zizmek_brand`
--
ALTER TABLE `tbl_zizmek_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
