-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 10:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gov`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `title` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Dashboard', 'icon-chart-bar', '/', NULL, NULL, NULL),
(2, 0, 2, 'Admin', 'icon-server', '', NULL, NULL, NULL),
(3, 2, 3, 'Users', 'icon-users', 'auth/users', NULL, NULL, NULL),
(4, 2, 4, 'Roles', 'icon-user', 'auth/roles', NULL, NULL, NULL),
(5, 2, 5, 'Permission', 'icon-ban', 'auth/permissions', NULL, NULL, NULL),
(6, 2, 6, 'Menu', 'icon-bars', 'auth/menu', NULL, NULL, NULL),
(7, 2, 7, 'Operation log', 'icon-history', 'auth/logs', NULL, NULL, NULL),
(8, 0, 0, 'brandings', 'icon-bold', 'brandings', '*', '2024-08-27 05:26:16', '2024-08-27 05:26:16'),
(9, 0, 0, 'landings', 'icon-align-center', 'landings', '*', '2024-08-27 05:26:48', '2024-08-27 05:26:48'),
(10, 0, 7, 'Helpers', 'icon-cogs', '', NULL, '2024-08-27 05:27:29', '2024-08-27 05:27:29'),
(11, 10, 8, 'Scaffold', 'icon-keyboard', 'helpers/scaffold', NULL, '2024-08-27 05:27:29', '2024-08-27 05:27:29'),
(12, 10, 9, 'Database terminal', 'icon-database', 'helpers/terminal/database', NULL, '2024-08-27 05:27:29', '2024-08-27 05:27:29'),
(13, 10, 10, 'Laravel artisan', 'icon-terminal', 'helpers/terminal/artisan', NULL, '2024-08-27 05:27:29', '2024-08-27 05:27:29'),
(14, 10, 11, 'Routes', 'icon-list-alt', 'helpers/routes', NULL, '2024-08-27 05:27:29', '2024-08-27 05:27:29'),
(15, 0, 12, 'Media manager', 'icon-file', 'media', NULL, '2024-08-27 05:54:28', '2024-08-27 05:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `admin_operation_log`
--

CREATE TABLE `admin_operation_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `method` varchar(10) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `input` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_operation_log`
--

INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-27 05:24:38', '2024-08-27 05:24:38'),
(2, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:24:57', '2024-08-27 05:24:57'),
(3, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-27 05:25:01', '2024-08-27 05:25:01'),
(4, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2024-08-27 05:25:45', '2024-08-27 05:25:45'),
(5, 1, 'admin/auth/menu', 'POST', '127.0.0.1', '{\"parent_id\":\"0\",\"search_terms\":null,\"title\":\"brandings\",\"icon\":\"icon-bold\",\"uri\":\"brandings\",\"roles\":[\"1\",null],\"permission\":\"*\",\"_token\":\"6VnJESZKattEPmbT18P5W12PHyB4THG4xnPMCW32\"}', '2024-08-27 05:26:16', '2024-08-27 05:26:16'),
(6, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2024-08-27 05:26:16', '2024-08-27 05:26:16'),
(7, 1, 'admin/auth/menu', 'POST', '127.0.0.1', '{\"parent_id\":\"0\",\"search_terms\":null,\"title\":\"landings\",\"icon\":\"icon-align-center\",\"uri\":\"landings\",\"roles\":[\"1\",null],\"permission\":\"*\",\"_token\":\"6VnJESZKattEPmbT18P5W12PHyB4THG4xnPMCW32\"}', '2024-08-27 05:26:48', '2024-08-27 05:26:48'),
(8, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2024-08-27 05:26:49', '2024-08-27 05:26:49'),
(9, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2024-08-27 05:26:51', '2024-08-27 05:26:51'),
(10, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:26:56', '2024-08-27 05:26:56'),
(11, 1, 'admin/brandings/create', 'GET', '127.0.0.1', '[]', '2024-08-27 05:26:57', '2024-08-27 05:26:57'),
(12, 1, 'admin/brandings', 'POST', '127.0.0.1', '{\"favicon_file_del_\":\"new\\/silver-jubilee.png,\",\"_token\":\"6VnJESZKattEPmbT18P5W12PHyB4THG4xnPMCW32\"}', '2024-08-27 05:27:21', '2024-08-27 05:27:21'),
(13, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:27:21', '2024-08-27 05:27:21'),
(14, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:27:32', '2024-08-27 05:27:32'),
(15, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:27:41', '2024-08-27 05:27:41'),
(16, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:27:43', '2024-08-27 05:27:43'),
(17, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:27:43', '2024-08-27 05:27:43'),
(18, 1, 'admin/landings/create', 'GET', '127.0.0.1', '[]', '2024-08-27 05:27:44', '2024-08-27 05:27:44'),
(19, 1, 'admin/landings', 'POST', '127.0.0.1', '{\"title_en\":\"It is an honor and pleasure to welcome all visitors to the website\",\"title_ar\":\"\\u064a\\u0633\\u0631\\u0646\\u064a \\u0623\\u0646 \\u0623\\u0631\\u062d\\u0628 \\u0628\\u0643\\u0645 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0627\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0644\\u0648\\u0632\\u0627\\u0631\\u0629 \\u0627\\u0644\\u062a\\u0646\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0627\\u062c\\u062a\\u0645\\u0627\\u0639\\u064a\\u0629\",\"subtitle_en\":\"Website Opening\",\"subtitle_ar\":\"\\u0627\\u0641\\u062a\\u062a\\u0627\\u062d\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0648\\u0642\\u0639\",\"cta_en\":\"Reach Out\",\"cta_ar\":\"\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0645\\u0639\\u0646\\u0627\",\"_token\":\"6VnJESZKattEPmbT18P5W12PHyB4THG4xnPMCW32\"}', '2024-08-27 05:30:52', '2024-08-27 05:30:52'),
(20, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:30:52', '2024-08-27 05:30:52'),
(21, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:31:02', '2024-08-27 05:31:02'),
(22, 1, 'admin/brandings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:31:04', '2024-08-27 05:31:04'),
(23, 1, 'admin/brandings/1', 'PUT', '127.0.0.1', '{\"_token\":\"6VnJESZKattEPmbT18P5W12PHyB4THG4xnPMCW32\",\"_method\":\"PUT\"}', '2024-08-27 05:31:18', '2024-08-27 05:31:18'),
(24, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:31:18', '2024-08-27 05:31:18'),
(25, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:31:20', '2024-08-27 05:31:20'),
(26, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:31:49', '2024-08-27 05:31:49'),
(27, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-27 05:51:51', '2024-08-27 05:51:51'),
(28, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:51:56', '2024-08-27 05:51:56'),
(29, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:00', '2024-08-27 05:52:00'),
(30, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:42', '2024-08-27 05:52:42'),
(31, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:45', '2024-08-27 05:52:45'),
(32, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:48', '2024-08-27 05:52:48'),
(33, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:49', '2024-08-27 05:52:49'),
(34, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:49', '2024-08-27 05:52:49'),
(35, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:50', '2024-08-27 05:52:50'),
(36, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:50', '2024-08-27 05:52:50'),
(37, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:51', '2024-08-27 05:52:51'),
(38, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:51', '2024-08-27 05:52:51'),
(39, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:52', '2024-08-27 05:52:52'),
(40, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:52', '2024-08-27 05:52:52'),
(41, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:53', '2024-08-27 05:52:53'),
(42, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:53', '2024-08-27 05:52:53'),
(43, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:54', '2024-08-27 05:52:54'),
(44, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:55', '2024-08-27 05:52:55'),
(45, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:55', '2024-08-27 05:52:55'),
(46, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:56', '2024-08-27 05:52:56'),
(47, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:56', '2024-08-27 05:52:56'),
(48, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:52:57', '2024-08-27 05:52:57'),
(49, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:53:14', '2024-08-27 05:53:14'),
(50, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:53:24', '2024-08-27 05:53:24'),
(51, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:54:26', '2024-08-27 05:54:26'),
(52, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:54:30', '2024-08-27 05:54:30'),
(53, 1, 'admin/media', 'GET', '127.0.0.1', '[]', '2024-08-27 05:54:32', '2024-08-27 05:54:32'),
(54, 1, 'admin/media', 'GET', '127.0.0.1', '{\"path\":\"\\/uploads\",\"fn\":\"selectFile\"}', '2024-08-27 05:54:35', '2024-08-27 05:54:35'),
(55, 1, 'admin/media', 'GET', '127.0.0.1', '{\"path\":\"\\/uploads\\/images\",\"fn\":\"selectFile\"}', '2024-08-27 05:54:36', '2024-08-27 05:54:36'),
(56, 1, 'admin/media/download', 'GET', '127.0.0.1', '{\"file\":\"uploads\\/images\\/1.png\"}', '2024-08-27 05:54:38', '2024-08-27 05:54:38'),
(57, 1, 'admin/media', 'GET', '127.0.0.1', '[]', '2024-08-27 05:54:43', '2024-08-27 05:54:43'),
(58, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:54:45', '2024-08-27 05:54:45'),
(59, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:54:47', '2024-08-27 05:54:47'),
(60, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:54:52', '2024-08-27 05:54:52'),
(61, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-27 05:55:06', '2024-08-27 05:55:06'),
(62, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:55:43', '2024-08-27 05:55:43'),
(63, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 05:57:12', '2024-08-27 05:57:12'),
(64, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:57:37', '2024-08-27 05:57:37'),
(65, 1, 'admin/landings', 'GET', '127.0.0.1', '{\"_export_\":\"all\"}', '2024-08-27 05:57:43', '2024-08-27 05:57:43'),
(66, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-27 05:57:54', '2024-08-27 05:57:54'),
(67, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2024-08-27 05:57:56', '2024-08-27 05:57:56'),
(68, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_export_\":\"all\"}', '2024-08-27 05:58:00', '2024-08-27 05:58:00'),
(69, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '[]', '2024-08-27 05:58:17', '2024-08-27 05:58:17'),
(70, 1, 'admin/auth/permissions', 'GET', '127.0.0.1', '[]', '2024-08-27 05:58:18', '2024-08-27 05:58:18'),
(71, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2024-08-27 05:58:19', '2024-08-27 05:58:19'),
(72, 1, 'admin/helpers/scaffold', 'GET', '127.0.0.1', '[]', '2024-08-27 05:58:22', '2024-08-27 05:58:22'),
(73, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 05:58:23', '2024-08-27 05:58:23'),
(74, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-27 07:51:01', '2024-08-27 07:51:01'),
(75, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-27 07:51:08', '2024-08-27 07:51:08'),
(76, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 07:51:17', '2024-08-27 07:51:17'),
(77, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 07:51:19', '2024-08-27 07:51:19'),
(78, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-27 07:51:45', '2024-08-27 07:51:45'),
(79, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2024-08-27 07:51:50', '2024-08-27 07:51:50'),
(80, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2024-08-27 07:52:40', '2024-08-27 07:52:40'),
(81, 1, 'admin/auth/menu/8/edit', 'GET', '127.0.0.1', '[]', '2024-08-27 07:52:45', '2024-08-27 07:52:45'),
(82, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2024-08-27 07:52:48', '2024-08-27 07:52:48'),
(83, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2024-08-27 07:53:15', '2024-08-27 07:53:15'),
(84, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2024-08-27 07:54:21', '2024-08-27 07:54:21'),
(85, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2024-08-27 07:54:32', '2024-08-27 07:54:32'),
(86, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2024-08-27 07:54:56', '2024-08-27 07:54:56'),
(87, 1, 'admin/auth/setting', 'GET', '127.0.0.1', '[]', '2024-08-27 07:55:24', '2024-08-27 07:55:24'),
(88, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-27 07:55:38', '2024-08-27 07:55:38'),
(89, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 08:01:14', '2024-08-27 08:01:14'),
(90, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 08:01:46', '2024-08-27 08:01:46'),
(91, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 08:01:51', '2024-08-27 08:01:51'),
(92, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 08:02:02', '2024-08-27 08:02:02'),
(93, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-27 08:02:07', '2024-08-27 08:02:07'),
(94, 1, 'admin/media', 'GET', '127.0.0.1', '[]', '2024-08-27 08:02:21', '2024-08-27 08:02:21'),
(95, 1, 'admin/media', 'GET', '127.0.0.1', '[]', '2024-08-27 08:02:32', '2024-08-27 08:02:32'),
(96, 1, 'admin/media', 'GET', '127.0.0.1', '[]', '2024-08-27 08:03:00', '2024-08-27 08:03:00'),
(97, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-28 06:30:54', '2024-08-28 06:30:54'),
(98, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-28 06:31:04', '2024-08-28 06:31:04'),
(99, 1, 'admin/brandings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-28 06:31:14', '2024-08-28 06:31:14'),
(100, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-08-28 06:31:26', '2024-08-28 06:31:26'),
(101, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-08-28 06:31:32', '2024-08-28 06:31:32'),
(102, 1, 'admin/media', 'GET', '127.0.0.1', '[]', '2024-08-28 06:34:12', '2024-08-28 06:34:12'),
(103, 1, 'admin/auth/logout', 'GET', '127.0.0.1', '[]', '2024-08-28 06:40:36', '2024-08-28 06:40:36'),
(104, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-28 06:49:33', '2024-08-28 06:49:33'),
(105, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-28 06:49:41', '2024-08-28 06:49:41'),
(106, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-28 06:49:49', '2024-08-28 06:49:49'),
(107, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-28 06:50:02', '2024-08-28 06:50:02'),
(108, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-28 06:50:07', '2024-08-28 06:50:07'),
(109, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-08-28 06:50:27', '2024-08-28 06:50:27'),
(110, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-08-28 06:53:21', '2024-08-28 06:53:21'),
(111, 1, 'admin/brandings', 'GET', '127.0.0.1', '{\"_export_\":\"all\"}', '2024-08-28 06:53:23', '2024-08-28 06:53:23'),
(112, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-09-04 04:08:50', '2024-09-04 04:08:50'),
(113, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-09-04 04:08:56', '2024-09-04 04:08:56'),
(114, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-09-04 04:09:08', '2024-09-04 04:09:08'),
(115, 1, 'admin/landings/1/edit', 'GET', '127.0.0.1', '[]', '2024-09-04 04:09:18', '2024-09-04 04:09:18'),
(116, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-09-04 04:17:56', '2024-09-04 04:17:56'),
(117, 1, 'admin/media', 'GET', '127.0.0.1', '[]', '2024-09-04 04:18:00', '2024-09-04 04:18:00'),
(118, 1, 'admin/media', 'GET', '127.0.0.1', '{\"path\":\"\\/uploads\",\"fn\":\"selectFile\"}', '2024-09-04 04:18:03', '2024-09-04 04:18:03'),
(119, 1, 'admin/media', 'GET', '127.0.0.1', '{\"path\":\"\\/uploads\\/images\",\"fn\":\"selectFile\"}', '2024-09-04 04:18:04', '2024-09-04 04:18:04'),
(120, 1, 'admin/media', 'GET', '127.0.0.1', '{\"path\":\"\\/uploads\",\"fn\":\"selectFile\"}', '2024-09-04 04:18:26', '2024-09-04 04:18:26'),
(121, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-09-04 04:18:28', '2024-09-04 04:18:28'),
(122, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-09-04 04:21:03', '2024-09-04 04:21:03'),
(123, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-09-04 04:24:47', '2024-09-04 04:24:47'),
(124, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-09-04 04:24:50', '2024-09-04 04:24:50'),
(125, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-09-04 05:15:50', '2024-09-04 05:15:50'),
(126, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-09-04 05:16:14', '2024-09-04 05:16:14'),
(127, 1, 'admin/landings', 'GET', '127.0.0.1', '[]', '2024-09-04 06:23:19', '2024-09-04 06:23:19'),
(128, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-09-04 09:21:20', '2024-09-04 09:21:20'),
(129, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-09-04 09:21:24', '2024-09-04 09:21:24'),
(130, 1, 'admin/brandings/1/edit', 'GET', '127.0.0.1', '[]', '2024-09-04 09:21:30', '2024-09-04 09:21:30'),
(131, 1, 'admin/brandings/1', 'PUT', '127.0.0.1', '{\"logo01_file_del_\":\"images\\/MOHUP_1.png,\",\"_token\":\"mw66B5xAfMRy8uIQSBuu49JNu1BFWDSLgL9uFbIC\",\"_method\":\"PUT\"}', '2024-09-04 09:21:41', '2024-09-04 09:21:41'),
(132, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-09-04 09:21:41', '2024-09-04 09:21:41'),
(133, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-09-04 09:21:44', '2024-09-04 09:21:44'),
(134, 1, 'admin/brandings/1/edit', 'GET', '127.0.0.1', '[]', '2024-09-04 09:21:46', '2024-09-04 09:21:46'),
(135, 1, 'admin/brandings/1', 'PUT', '127.0.0.1', '{\"_token\":\"mw66B5xAfMRy8uIQSBuu49JNu1BFWDSLgL9uFbIC\",\"_method\":\"PUT\"}', '2024-09-04 09:21:51', '2024-09-04 09:21:51'),
(136, 1, 'admin/brandings', 'GET', '127.0.0.1', '[]', '2024-09-04 09:21:51', '2024-09-04 09:21:51'),
(137, 1, 'admin', 'GET', '127.0.0.1', '[]', '2024-09-05 05:52:38', '2024-09-05 05:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `http_method` varchar(255) DEFAULT NULL,
  `http_path` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
(1, 'All permission', '*', '', '*', NULL, NULL),
(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL),
(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL),
(6, 'Admin helpers', 'ext.helpers', '', '/helpers/*', '2024-08-27 05:27:29', '2024-08-27 05:27:29'),
(7, 'Media manager', 'ext.media-manager', '', '/media*', '2024-08-27 05:54:28', '2024-08-27 05:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2024-08-27 05:20:56', '2024-08-27 05:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_menu`
--

CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_menu`
--

INSERT INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(1, 8, NULL, NULL),
(1, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_permissions`
--

CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_permissions`
--

INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_users`
--

CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_users`
--

INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(190) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$QR9jSHsju994hEK.q3Q4ceBPNhiKS0AkJSAsrOhTXmOxOMDpUK3/.', 'Administrator', NULL, NULL, '2024-08-27 05:20:56', '2024-08-27 05:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_permissions`
--

CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branding`
--

CREATE TABLE `branding` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo01` varchar(255) DEFAULT NULL,
  `logo02` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branding`
--

INSERT INTO `branding` (`id`, `logo01`, `logo02`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'images/mosd_ar_1.png', NULL, 'images/MOHUP (1)_1.png', '2024-08-27 05:27:21', '2024-09-04 09:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing`
--

CREATE TABLE `landing` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `subtitle_en` varchar(255) DEFAULT NULL,
  `subtitle_ar` varchar(255) DEFAULT NULL,
  `cta_en` varchar(255) DEFAULT NULL,
  `cta_ar` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`id`, `title_en`, `title_ar`, `subtitle_en`, `subtitle_ar`, `cta_en`, `cta_ar`, `background`, `created_at`, `updated_at`) VALUES
(1, 'It is an honor and pleasure to welcome all visitors to the website', 'يسرني أن أرحب بكم في الموقع الالكتروني لوزارة التنمية الاجتماعية', 'Website Opening', 'افتتاحية الموقع', 'Reach Out', 'تواصل معنا', 'images/bahrain1-3_1.jpg', '2024-08-27 05:30:52', '2024-08-27 05:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_01_04_173148_create_admin_tables', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_08_26_074903_create_branding_table', 1),
(7, '2024_08_26_121548_create_landing_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_operation_log_user_id_index` (`user_id`);

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permissions_name_unique` (`name`),
  ADD UNIQUE KEY `admin_permissions_slug_unique` (`slug`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_roles_name_unique` (`name`),
  ADD UNIQUE KEY `admin_roles_slug_unique` (`slug`);

--
-- Indexes for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  ADD KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`);

--
-- Indexes for table `admin_role_permissions`
--
ALTER TABLE `admin_role_permissions`
  ADD KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`);

--
-- Indexes for table `admin_role_users`
--
ALTER TABLE `admin_role_users`
  ADD KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`username`);

--
-- Indexes for table `admin_user_permissions`
--
ALTER TABLE `admin_user_permissions`
  ADD KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`);

--
-- Indexes for table `branding`
--
ALTER TABLE `branding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `landing`
--
ALTER TABLE `landing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branding`
--
ALTER TABLE `branding`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landing`
--
ALTER TABLE `landing`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
