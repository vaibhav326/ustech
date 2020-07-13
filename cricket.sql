-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2020 at 10:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`),
  KEY `subject` (`subject_id`,`subject_type`),
  KEY `causer` (`causer_id`,`causer_type`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'App\\Role model has been created', 1, 'App\\Role', NULL, NULL, '[]', '2020-07-11 13:46:43', '2020-07-11 13:46:43'),
(2, 'default', 'App\\Role model has been created', 2, 'App\\Role', NULL, NULL, '[]', '2020-07-11 13:46:58', '2020-07-11 13:46:58'),
(3, 'default', 'App\\Team model has been created', 1, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:09:05', '2020-07-11 14:09:05'),
(4, 'default', 'App\\Team model has been created', 2, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:09:46', '2020-07-11 14:09:46'),
(5, 'default', 'App\\Team model has been created', 3, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:10:05', '2020-07-11 14:10:05'),
(6, 'default', 'App\\Team model has been created', 4, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:10:20', '2020-07-11 14:10:20'),
(7, 'default', 'App\\Team model has been updated', 4, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:12:13', '2020-07-11 14:12:13'),
(8, 'default', 'App\\Team model has been updated', 4, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:13:34', '2020-07-11 14:13:34'),
(9, 'default', 'App\\Team model has been created', 5, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:14:14', '2020-07-11 14:14:14'),
(10, 'default', 'App\\Team model has been created', 6, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:15:10', '2020-07-11 14:15:10'),
(11, 'default', 'App\\Team model has been created', 7, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:15:26', '2020-07-11 14:15:26'),
(12, 'default', 'App\\Team model has been created', 8, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:15:59', '2020-07-11 14:15:59'),
(13, 'default', 'App\\Team model has been created', 9, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:18:17', '2020-07-11 14:18:17'),
(14, 'default', 'App\\Team model has been updated', 9, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:18:17', '2020-07-11 14:18:17'),
(15, 'default', 'App\\Team model has been updated', 7, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:20:04', '2020-07-11 14:20:04'),
(16, 'default', 'App\\Team model has been updated', 7, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:20:04', '2020-07-11 14:20:04'),
(17, 'default', 'App\\Team model has been updated', 8, 'App\\Team', NULL, NULL, '[]', '2020-07-11 14:39:17', '2020-07-11 14:39:17'),
(18, 'default', 'App\\Player model has been created', 1, 'App\\Player', NULL, NULL, '[]', '2020-07-11 15:00:49', '2020-07-11 15:00:49'),
(19, 'default', 'App\\Player model has been created', 2, 'App\\Player', NULL, NULL, '[]', '2020-07-11 15:01:28', '2020-07-11 15:01:28'),
(20, 'default', 'App\\Player model has been updated', 2, 'App\\Player', NULL, NULL, '[]', '2020-07-11 15:01:28', '2020-07-11 15:01:28'),
(21, 'default', 'App\\Player model has been deleted', 1, 'App\\Player', NULL, NULL, '[]', '2020-07-11 15:01:33', '2020-07-11 15:01:33'),
(22, 'default', 'App\\Player model has been deleted', 2, 'App\\Player', NULL, NULL, '[]', '2020-07-11 15:01:37', '2020-07-11 15:01:37'),
(23, 'default', 'App\\Player model has been created', 3, 'App\\Player', NULL, NULL, '[]', '2020-07-11 15:02:05', '2020-07-11 15:02:05'),
(24, 'default', 'App\\Player model has been updated', 3, 'App\\Player', NULL, NULL, '[]', '2020-07-11 15:02:05', '2020-07-11 15:02:05'),
(25, 'default', 'App\\Player model has been updated', 3, 'App\\Player', NULL, NULL, '[]', '2020-07-11 15:33:09', '2020-07-11 15:33:09'),
(26, 'default', 'App\\Player model has been updated', 3, 'App\\Player', NULL, NULL, '[]', '2020-07-11 15:33:22', '2020-07-11 15:33:22'),
(27, 'default', 'App\\PlayerHistory model has been created', 1, 'App\\PlayerHistory', NULL, NULL, '[]', '2020-07-12 07:59:07', '2020-07-12 07:59:07'),
(28, 'default', 'App\\PlayerHistory model has been created', 2, 'App\\PlayerHistory', NULL, NULL, '[]', '2020-07-12 08:06:56', '2020-07-12 08:06:56'),
(29, 'default', 'App\\Player model has been created', 4, 'App\\Player', NULL, NULL, '[]', '2020-07-12 08:27:47', '2020-07-12 08:27:47'),
(30, 'default', 'App\\Player model has been updated', 4, 'App\\Player', NULL, NULL, '[]', '2020-07-12 08:27:47', '2020-07-12 08:27:47'),
(31, 'default', 'App\\Team model has been updated', 9, 'App\\Team', NULL, NULL, '[]', '2020-07-12 08:28:14', '2020-07-12 08:28:14'),
(32, 'default', 'App\\Team model has been updated', 8, 'App\\Team', NULL, NULL, '[]', '2020-07-12 08:28:22', '2020-07-12 08:28:22'),
(33, 'default', 'App\\Team model has been created', 10, 'App\\Team', NULL, NULL, '[]', '2020-07-12 15:00:43', '2020-07-12 15:00:43'),
(34, 'default', 'App\\Team model has been updated', 10, 'App\\Team', NULL, NULL, '[]', '2020-07-12 15:00:43', '2020-07-12 15:00:43'),
(35, 'default', 'App\\Team model has been created', 11, 'App\\Team', NULL, NULL, '[]', '2020-07-12 15:01:01', '2020-07-12 15:01:01'),
(36, 'default', 'App\\Team model has been updated', 11, 'App\\Team', NULL, NULL, '[]', '2020-07-12 15:01:01', '2020-07-12 15:01:01'),
(37, 'default', 'App\\Match model has been created', 1, 'App\\Match', NULL, NULL, '[]', '2020-07-12 15:26:33', '2020-07-12 15:26:33'),
(38, 'default', 'App\\Match model has been created', 2, 'App\\Match', NULL, NULL, '[]', '2020-07-12 15:27:18', '2020-07-12 15:27:18'),
(39, 'default', 'App\\Match model has been created', 3, 'App\\Match', NULL, NULL, '[]', '2020-07-12 15:30:28', '2020-07-12 15:30:28'),
(40, 'default', 'App\\Match model has been created', 4, 'App\\Match', NULL, NULL, '[]', '2020-07-12 15:30:48', '2020-07-12 15:30:48'),
(41, 'default', 'App\\Match model has been created', 5, 'App\\Match', NULL, NULL, '[]', '2020-07-12 15:32:02', '2020-07-12 15:32:02'),
(42, 'default', 'App\\Match model has been deleted', 4, 'App\\Match', NULL, NULL, '[]', '2020-07-12 15:40:15', '2020-07-12 15:40:15'),
(43, 'default', 'App\\Match model has been deleted', 5, 'App\\Match', NULL, NULL, '[]', '2020-07-12 15:40:54', '2020-07-12 15:40:54'),
(44, 'default', 'App\\Match model has been deleted', 2, 'App\\Match', NULL, NULL, '[]', '2020-07-12 15:41:51', '2020-07-12 15:41:51'),
(45, 'default', 'App\\Match model has been deleted', 1, 'App\\Match', NULL, NULL, '[]', '2020-07-12 15:42:57', '2020-07-12 15:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_1` int(11) DEFAULT NULL,
  `team_2` int(11) DEFAULT NULL,
  `match_date` date DEFAULT NULL,
  `season_id` int(11) DEFAULT NULL,
  `venue` text,
  `toss_winner` int(11) DEFAULT NULL,
  `toss_decision` text,
  `win_type` text,
  `win_margin` int(11) DEFAULT NULL,
  `outcome_type` text,
  `match_winner` int(11) DEFAULT NULL,
  `man_of_the_match` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `team_1`, `team_2`, `match_date`, `season_id`, `venue`, `toss_winner`, `toss_decision`, `win_type`, `win_margin`, `outcome_type`, `match_winner`, `man_of_the_match`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 11, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-12 15:30:28', '2020-07-12 15:30:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2016_01_01_193651_create_roles_permissions_tables', 2),
(3, '2018_08_01_183154_create_pages_table', 2),
(4, '2018_08_04_122319_create_settings_table', 2),
(5, '2020_07_11_191430_create_activity_log_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) DEFAULT NULL,
  `first_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `image_uri` varchar(55) DEFAULT NULL,
  `jersey_no` varchar(55) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `batting_hand` varchar(55) DEFAULT NULL,
  `bowling_skill` varchar(55) DEFAULT NULL,
  `country` text,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `team_id`, `first_name`, `last_name`, `image_uri`, `jersey_no`, `dob`, `batting_hand`, `bowling_skill`, `country`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 9, 'Sachin', 'Td', 'favicon.ico', '212', NULL, 'Left', 'Right', 'India', NULL, NULL, '2020-07-11 15:02:05', '2020-07-11 15:33:22', NULL),
(4, 8, 'Dravid', 'dravid', 'favicon.ico', '123', NULL, 'test', 'df', 'india', NULL, NULL, '2020-07-12 08:27:47', '2020-07-12 08:27:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `player_histories`
--

DROP TABLE IF EXISTS `player_histories`;
CREATE TABLE IF NOT EXISTS `player_histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player_id` int(11) NOT NULL,
  `no_of_matches` varchar(91) DEFAULT NULL,
  `no_of_runs` decimal(10,0) DEFAULT NULL,
  `hightest_score` decimal(10,0) DEFAULT NULL,
  `no_of_fifties` int(11) DEFAULT NULL,
  `no_of_hundreds` int(11) DEFAULT NULL,
  `no_of_awards` int(11) DEFAULT NULL,
  `no_of_mom` int(11) DEFAULT NULL,
  `no_of_matches_batting` varchar(55) DEFAULT NULL,
  `no_of_matches_bowling` varchar(55) DEFAULT NULL,
  `batting_avg` int(11) DEFAULT NULL,
  `bowling_avg` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_histories`
--

INSERT INTO `player_histories` (`id`, `player_id`, `no_of_matches`, `no_of_runs`, `hightest_score`, `no_of_fifties`, `no_of_hundreds`, `no_of_awards`, `no_of_mom`, `no_of_matches_batting`, `no_of_matches_bowling`, `batting_avg`, `bowling_avg`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 4, '10', '12', '12', 12, 12, 556, 12, '12', NULL, 12, 12, NULL, NULL, '2020-07-12 08:06:56', '2020-07-12 14:06:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `player_match`
--

DROP TABLE IF EXISTS `player_match`;
CREATE TABLE IF NOT EXISTS `player_match` (
  `match_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `role` text,
  `team_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`match_id`,`player_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

DROP TABLE IF EXISTS `points`;
CREATE TABLE IF NOT EXISTS `points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `team_match_total` int(11) DEFAULT NULL,
  `team_match_win` int(11) DEFAULT NULL,
  `team_match_loss` int(11) DEFAULT NULL,
  `team_average` int(11) DEFAULT NULL,
  `team_total_points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `group_id`, `team_id`, `team_match_total`, `team_match_win`, `team_match_loss`, `team_average`, `team_total_points`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 10, 5, 2, 1, 0, 12, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', '2020-07-11 13:46:42', '2020-07-11 13:46:42'),
(2, 'User', 'user', '2020-07-11 13:46:58', '2020-07-11 13:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_user_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `logo_uri` varchar(55) DEFAULT NULL,
  `club_state` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `logo_uri`, `club_state`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`) VALUES
(10, 'Bangladesh', 'favicon.ico', 'Bangla', '2020-07-12 15:00:43', '2020-07-12 15:00:43', NULL, NULL, NULL),
(11, 'Australoa', 'favicon.ico', 'aus', '2020-07-12 15:01:01', '2020-07-12 15:01:01', NULL, NULL, NULL),
(8, 'pak', 'favicon.ico', 'up', '2020-07-11 14:15:59', '2020-07-12 08:28:22', NULL, NULL, NULL),
(9, 'india', 'favicon.ico', 'up', '2020-07-11 14:18:17', '2020-07-12 08:28:14', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
