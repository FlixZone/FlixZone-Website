-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 10:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flixzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mega-accounts`
--

CREATE TABLE `mega-accounts` (
  `id` int(10) NOT NULL,
  `file_name` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `recovery_key` varchar(400) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `mega-accounts`
--

INSERT INTO `mega-accounts` (`id`, `file_name`, `email`, `password`, `recovery_key`, `created_at`, `updated_at`) VALUES
(2, 'sex in the home', 'hex@voltaer.com', 'hex@voltaer.com', 'hex@voltaer.com', '2019-01-12 14:39:20', '2019-01-12 14:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `the_movie_db_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mega_link` varchar(500) NOT NULL DEFAULT '',
  `mega_key` varchar(500) NOT NULL,
  `torrent_file` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `the_movie_db_id`, `name`, `mega_link`, `mega_key`, `torrent_file`, `created_at`, `updated_at`) VALUES
(4, 449459, 'THE VANISHING', 'https://mega.nz/#!MFcgxKjb!', 'qJJ_5WD4LynAR9qAHwZyML0oPQujGdl0ZwwPk9IeIcE', 'the-vanishing-2018_1080p_1547294608.torrent', '2019-01-12 06:33:29', '2019-01-12 06:33:29'),
(5, 47933, 'INDEPENDENCE DAY: RESURGENCE', 'https://mega.nz/#!NAk3SSTI!', '1eICFA9ZPsxOjO-_MdgE5VTXjaBjpkaszp7TD6L0FkQ', 'independence-day-resurgence-2016_1080p_1547294817.torrent', '2019-01-12 06:36:58', '2019-01-12 06:36:58'),
(6, 561362, 'RUST CREEK', 'https://mega.nz/#!wYEQRIrY!', 's-2KaKw5QuKD1cqDKee6vG6wv60HNbE8vGb5FLvOnsE', 'rust-creek-2018_1080p_1547295053.torrent', '2019-01-12 06:40:53', '2019-01-12 06:40:53'),
(7, 562685, 'MARS: INSIDE SPACEX', 'https://mega.nz/#!tQ8VECRY!', 'GByEk34V1C5b_m0tIlqS_jTd1_Ci6z_LGcIZGIl5YGU', 'mars-inside-spacex-2018_1080p_1547295226.torrent', '2019-01-12 06:43:46', '2019-01-12 06:43:46'),
(8, 475094, 'THE CAPTAIN', 'https://mega.nz/#!EM0hXKZD!', 'aXjdWK3NWWZb--dNVdUkcUIEi6F2b44QTVJ98o09vcw', 'bodeln-fran-emsland-2017_1080p_1547295428.torrent', '2019-01-12 06:47:08', '2019-01-12 06:47:08'),
(9, 527952, 'ANUNNAKI', 'https://mega.nz/#!MFtRFaAY!', 'Te8bS1fpV5FizRWPs9ybqKt_k5MkLI2SO4OI0uFuzi4', 'anunnaki-2017_1080p_1547295526.torrent', '2019-01-12 06:48:46', '2019-01-12 06:48:46'),
(10, 573632, 'The Last Boy', 'https://mega.nz/#!JosAXACJ!', 'PD7aIQT2ES4BVV3XpSM3xXVFLOPUaYCeCEBPNAZrjPU', '', '2019-01-12 12:05:42', '2019-01-12 12:05:42'),
(11, 506902, 'Loophole', 'https://mega.nz/#!cF1BwCBS!', '1kZ5HDf48LQjqb3x6l_7jeE3xKMN-GbK7HeL5rf3spE', 'loophole-2019_720p_1547315370.torrent', '2019-01-12 12:07:57', '2019-01-12 12:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', NULL, '2019-01-12 15:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `tvshows`
--

CREATE TABLE `tvshows` (
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_image`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'Vasu', 'vasuratanpara@gmail.com', 'IMG_20170602_1547231082.jpg', 1, '$2y$10$d7Ddbq3zOe6BSEm3oa0OgOsyS55zdYO0q3gxTAeUJ.4XBB5UyY0je', 'KnmqIPXOLOIpTmtB8zJpIQQaCEZNa2fxMWlz5YLWAwIZT6iHJAYmEKVySKFc', '2019-01-11 12:54:42', '2019-01-12 15:43:09'),
(13, 'Ramakant Gambhava', 'ramakantgambhava@gmail.com', '123 - Copy_1547274228.png', 1, '$2y$10$DhzlLvM.5bZ45bqqi70uqubXxcwcI90gy7pQNj6Q5giUMm4kGfGJm', NULL, '2019-01-12 00:53:48', '2019-01-12 00:53:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mega-accounts`
--
ALTER TABLE `mega-accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tvshows`
--
ALTER TABLE `tvshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mega-accounts`
--
ALTER TABLE `mega-accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tvshows`
--
ALTER TABLE `tvshows`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
