-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 09:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_uses`
--

CREATE TABLE `about_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_uses`
--

INSERT INTO `about_uses` (`id`, `image`, `heading`, `paragraph`, `created_at`, `updated_at`) VALUES
(1, 'img/about.jpg', 'Innovative Way To Learn', 'Aliquyam accusam clita nonumy ipsum\n             sit sea clita ipsum clita, ipsum dolores amet voluptua\n              duo dolores et sit ipsum rebum, sadipscing et erat eirmod\n              diam kasd labore clita est. Diam sanctus gubergren sit rebum\n              clita amet, sea est sea vero sed et. Sadipscing labore tempor\n              at sit dolor clita\n              consetetur diam. Diam ut diam tempor no et,\n              lorem dolore invidunt no nonumy stet ea labore, dolor justo et\n               sit gubergren diam sed sed no ipsum.\n            Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet', '2023-12-11 04:50:34', '2023-12-11 04:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `s_code`, `due_date`, `created_at`, `updated_at`) VALUES
(2, '3023', '23-12-2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '2345', '12-12-2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `attempteds`
--

CREATE TABLE `attempteds` (
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Brett Leuschke PhD', 'img/cat-1.jpg', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(2, 'Dion Konopelski MD', 'img/cat-1.jpg', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(3, 'Kiera Dooley I', 'img/cat-1.jpg', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(4, 'Flavio Runolfsson III', 'img/cat-1.jpg', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(5, 'Ofelia Marquardt', 'img/cat-1.jpg', '2023-12-11 04:50:35', '2023-12-11 04:50:35'),
(6, 'Rita Stamm', 'img/cat-1.jpg', '2023-12-11 04:50:35', '2023-12-11 04:50:35'),
(7, 'Jasmin Doyle', 'img/cat-1.jpg', '2023-12-11 04:50:35', '2023-12-11 04:50:35'),
(8, 'Mr. Berta Jakubowski II', 'img/cat-1.jpg', '2023-12-11 04:50:35', '2023-12-11 04:50:35'),
(9, 'Dr. Jimmy Nikolaus V', 'img/cat-1.jpg', '2023-12-11 04:50:35', '2023-12-11 04:50:35'),
(10, 'Prof. Brandy Bechtelar', 'img/cat-1.jpg', '2023-12-11 04:50:35', '2023-12-11 04:50:35'),
(11, 'Autumn Wunsch V', 'img/cat-1.jpg', '2023-12-11 04:50:35', '2023-12-11 04:50:35'),
(12, 'Esta Hudson I', 'img/cat-1.jpg', '2023-12-11 04:50:35', '2023-12-11 04:50:35'),
(13, 'Conner Jast', 'img/cat-1.jpg', '2023-12-11 04:50:35', '2023-12-11 04:50:35'),
(14, 'Travis Willms', 'img/cat-1.jpg', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(15, 'Cullen Donnelly', 'img/cat-1.jpg', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(16, 'Dr. Jaida Rogahn Sr.', 'img/cat-1.jpg', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(17, 'Cassandra Dare', 'img/cat-1.jpg', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(18, 'Mrs. Lora Oberbrunner PhD', 'img/cat-1.jpg', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(19, 'Prof. Cynthia Lockman Sr.', 'img/cat-1.jpg', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(20, 'Dr. Anibal Rolfson', 'img/cat-1.jpg', '2023-12-11 04:50:36', '2023-12-11 04:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `chat_rooms`
--

CREATE TABLE `chat_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `book` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `category_id`, `book`, `img`, `format`, `created_at`, `updated_at`) VALUES
(1, 'Jermaine Nienow', 9, NULL, NULL, '1', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(2, 'Prof. Nicklaus Little I', 13, NULL, NULL, '1', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(3, 'Burnice Collier II', 15, NULL, NULL, '1', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(4, 'Grace Lebsack', 10, NULL, NULL, '1', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(5, 'Vena Heathcote', 13, NULL, NULL, '1', '2023-12-11 04:50:36', '2023-12-11 04:50:36'),
(6, 'Alexane Marvin', 5, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(7, 'Xander Lowe', 18, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(8, 'Lon Pollich', 15, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(9, 'Dr. Ibrahim Wilderman PhD', 1, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(10, 'Velda Casper I', 7, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(11, 'Coty Tillman', 10, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(12, 'Rhett Maggio', 2, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(13, 'Aurelio Gottlieb V', 2, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(14, 'Renee Daugherty', 6, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(15, 'Linnie Tromp', 20, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(16, 'Alta Schamberger', 1, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(17, 'Destini Kohler PhD', 12, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(18, 'Broderick Thompson', 2, NULL, NULL, '1', '2023-12-11 04:50:37', '2023-12-11 04:50:37'),
(19, 'Tiana Flatley', 5, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(20, 'Mireille Hill', 18, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(21, 'Winfield Bergstrom', 1, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(22, 'Jaylen Ritchie', 3, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(23, 'Rhett Rowe', 18, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(24, 'Autumn Rau', 12, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(25, 'Ryan Towne', 17, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(26, 'Mrs. Sally Quitzon Jr.', 13, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(27, 'Augustus Watsica', 13, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(28, 'Audrey Crist IV', 3, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(29, 'Nils Green', 6, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(30, 'Alycia Zieme', 7, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(31, 'Reta Smith', 12, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(32, 'Murl Brakus', 6, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(33, 'Mr. Corbin Pfeffer', 7, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(34, 'Eleazar Simonis', 7, NULL, NULL, '1', '2023-12-11 04:50:38', '2023-12-11 04:50:38'),
(35, 'Katherine Watsica', 14, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(36, 'Deanna Parisian', 6, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(37, 'Jimmy Kutch', 5, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(38, 'Dr. Rafael Aufderhar DVM', 14, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(39, 'Meghan Carroll', 10, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(40, 'Mr. Sherman Rohan DVM', 13, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(41, 'Jena Schamberger', 19, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(42, 'Giuseppe Metz MD', 13, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(43, 'Prof. Felton Terry IV', 1, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(44, 'Prof. Dennis Kutch', 19, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(45, 'Prof. Lisandro Runte', 15, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(46, 'Prof. Hattie Baumbach', 19, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(47, 'Orlo Kling', 9, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(48, 'Ernesto Jast', 11, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(49, 'Sophia Wolf PhD', 18, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(50, 'Prof. Giles Connelly PhD', 10, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(51, 'Peter Jakubowski', 19, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(52, 'Javier Maggio', 6, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(53, 'Mazie Rippin', 9, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(54, 'Guido Runte', 9, NULL, NULL, '1', '2023-12-11 04:50:39', '2023-12-11 04:50:39'),
(55, 'Llewellyn Yost Jr.', 5, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(56, 'Hans Carter', 17, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(57, 'Rod Schaefer V', 11, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(58, 'Miss Hallie Mann DDS', 11, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(59, 'Roselyn Trantow V', 20, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(60, 'Pearl Klein', 3, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(61, 'Coleman Cormier II', 17, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(62, 'Lukas Rath', 15, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(63, 'Felicia Nicolas', 12, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(64, 'Mr. Brandt Kozey', 4, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(65, 'Maxwell Schoen', 12, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(66, 'Lorena Gerhold', 19, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(67, 'Dr. Elva Gleichner Sr.', 16, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(68, 'Miss Theresia Pacocha', 1, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(69, 'Reinhold Larson', 17, NULL, NULL, '1', '2023-12-11 04:50:40', '2023-12-11 04:50:40'),
(70, 'Juston Lehner', 13, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(71, 'Kylie Sauer', 11, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(72, 'Dr. Jeramy Kirlin', 3, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(73, 'Brown Mayer MD', 17, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(74, 'Cassidy Watsica V', 14, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(75, 'Demarcus Turcotte', 19, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(76, 'Dr. Ashlee Romaguera DVM', 6, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(77, 'Kurtis Nienow', 12, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(78, 'Bertram Hermann', 1, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(79, 'Dr. Fredrick Jones III', 16, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(80, 'Miss Anika O\'Hara', 16, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(81, 'Ashly Hansen', 14, NULL, NULL, '1', '2023-12-11 04:50:41', '2023-12-11 04:50:41'),
(82, 'Laurie Hirthe', 2, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(83, 'Marlin Leffler', 12, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(84, 'Damaris Kreiger', 18, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(85, 'Lexie Pagac', 17, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(86, 'Dr. Raina Nader', 20, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(87, 'Ms. Sadie O\'Conner I', 6, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(88, 'Neoma Legros', 18, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(89, 'Cristobal Terry', 11, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(90, 'Prof. Alexzander Predovic Sr.', 4, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(91, 'Shayne Thompson', 18, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(92, 'Salvatore Kuhn PhD', 14, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(93, 'German Larson V', 1, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(94, 'Kylie Leannon', 7, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(95, 'Dewitt Rohan', 17, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(96, 'Sabina Kassulke', 5, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(97, 'Braulio Bartoletti', 8, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(98, 'Troy Johns', 7, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(99, 'Zackary Kuhlman', 8, NULL, NULL, '1', '2023-12-11 04:50:42', '2023-12-11 04:50:42'),
(100, 'Alba Crona', 10, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(101, 'Raymond Flatley', 13, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(102, 'Wilber Wilkinson', 15, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(103, 'Ocie Lind', 13, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(104, 'Dr. Eugene Stehr', 20, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(105, 'Howard Kuhic', 13, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(106, 'Dr. Angelica Turner II', 9, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(107, 'Hipolito Cremin', 3, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(108, 'Lon Willms', 14, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(109, 'Sage Ritchie DDS', 2, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(110, 'Miss Roberta Schaefer', 19, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(111, 'Prof. Koby Corkery DDS', 3, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(112, 'Mrs. Mya Beatty', 13, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(113, 'Xander Walsh', 18, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(114, 'Mr. Rocio Bechtelar', 20, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(115, 'Rogers Leuschke', 17, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(116, 'Taylor Beer', 8, NULL, NULL, '1', '2023-12-11 04:50:43', '2023-12-11 04:50:43'),
(117, 'Maureen Rosenbaum', 4, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(118, 'Libbie Haley', 4, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(119, 'Dr. Ward Dach DDS', 9, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(120, 'Anna Hyatt III', 6, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(121, 'Prof. Virgie Gleason DVM', 15, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(122, 'Prof. Rico Cartwright', 8, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(123, 'Andres Bartoletti', 13, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(124, 'Ron Breitenberg', 17, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(125, 'Mr. Marcel O\'Kon III', 15, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(126, 'Isac Bailey', 19, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(127, 'Dorcas Emmerich II', 20, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(128, 'Devan Lang', 17, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(129, 'Edwina Gibson', 12, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(130, 'Robb Nitzsche', 6, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(131, 'Imelda Ratke', 18, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(132, 'Jessika Gleichner', 11, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(133, 'Laney Larkin', 13, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(134, 'Meghan Sawayn', 20, NULL, NULL, '1', '2023-12-11 04:50:44', '2023-12-11 04:50:44'),
(135, 'Cary Harvey', 6, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(136, 'Kraig Lesch V', 4, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(137, 'Prof. Dell Hills MD', 9, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(138, 'Dr. Clay Abshire PhD', 2, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(139, 'Prof. Breana Terry DVM', 5, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(140, 'Dr. Idella Little DVM', 12, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(141, 'Mafalda Satterfield', 8, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(142, 'Miss Ines Monahan DVM', 3, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(143, 'Marisa Powlowski IV', 16, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(144, 'Salma Hoppe', 19, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(145, 'Daren Block', 10, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(146, 'Dan Hayes V', 5, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(147, 'Angus Gislason I', 1, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(148, 'Ms. Antonetta Sawayn II', 6, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(149, 'Savanah Kemmer', 16, NULL, NULL, '1', '2023-12-11 04:50:45', '2023-12-11 04:50:45'),
(150, 'Thomas Feeney', 20, NULL, NULL, '1', '2023-12-11 04:50:46', '2023-12-11 04:50:46'),
(151, 'Erwin Robel DVM', 15, NULL, NULL, '1', '2023-12-11 04:50:46', '2023-12-11 04:50:46'),
(152, 'Miss Blanca Durgan', 8, NULL, NULL, '1', '2023-12-11 04:50:46', '2023-12-11 04:50:46'),
(153, 'Miss Carlee Hagenes', 4, NULL, NULL, '1', '2023-12-11 04:50:47', '2023-12-11 04:50:47'),
(154, 'Prof. Nicklaus Stanton', 2, NULL, NULL, '1', '2023-12-11 04:50:48', '2023-12-11 04:50:48'),
(155, 'Mona Keeling IV', 1, NULL, NULL, '1', '2023-12-11 04:50:48', '2023-12-11 04:50:48'),
(156, 'Prof. August Huels', 9, NULL, NULL, '1', '2023-12-11 04:50:49', '2023-12-11 04:50:49'),
(157, 'Vincenza Funk', 8, NULL, NULL, '1', '2023-12-11 04:50:49', '2023-12-11 04:50:49'),
(158, 'Yessenia Will', 16, NULL, NULL, '1', '2023-12-11 04:50:49', '2023-12-11 04:50:49'),
(159, 'Reggie Conn', 20, NULL, NULL, '1', '2023-12-11 04:50:49', '2023-12-11 04:50:49'),
(160, 'Magdalena Koch', 8, NULL, NULL, '1', '2023-12-11 04:50:50', '2023-12-11 04:50:50'),
(161, 'Aglae Padberg', 13, NULL, NULL, '1', '2023-12-11 04:50:50', '2023-12-11 04:50:50'),
(162, 'Blair Eichmann', 3, NULL, NULL, '1', '2023-12-11 04:50:50', '2023-12-11 04:50:50'),
(163, 'Milton Harris MD', 9, NULL, NULL, '1', '2023-12-11 04:50:51', '2023-12-11 04:50:51'),
(164, 'Prof. Alisha O\'Reilly III', 12, NULL, NULL, '1', '2023-12-11 04:50:51', '2023-12-11 04:50:51'),
(165, 'Adelbert D\'Amore', 15, NULL, NULL, '1', '2023-12-11 04:50:52', '2023-12-11 04:50:52'),
(166, 'Monroe Bartoletti', 7, NULL, NULL, '1', '2023-12-11 04:50:52', '2023-12-11 04:50:52'),
(167, 'Raphael Schulist', 13, NULL, NULL, '1', '2023-12-11 04:50:52', '2023-12-11 04:50:52'),
(168, 'Meagan Christiansen', 18, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(169, 'Alda Paucek', 2, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(170, 'Mr. Celestino Treutel', 10, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(171, 'Bethel Kutch', 9, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(172, 'Devonte Zieme', 10, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(173, 'Haven Koelpin', 2, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(174, 'Gayle Fritsch', 6, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(175, 'Dr. Dayton Hettinger', 16, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(176, 'Nathan Kihn', 14, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(177, 'Yasmin Larkin III', 5, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(178, 'Dr. Schuyler Kertzmann I', 19, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(179, 'Prof. Vinnie Kunde DDS', 20, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(180, 'Corrine Prohaska Sr.', 20, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(181, 'Mr. Laverne Brakus', 3, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(182, 'Woodrow Ortiz', 18, NULL, NULL, '1', '2023-12-11 04:50:54', '2023-12-11 04:50:54'),
(183, 'Mrs. Brenna King', 16, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(184, 'Vallie Welch', 10, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(185, 'Rickey Towne', 7, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(186, 'Mr. Kellen Ankunding', 9, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(187, 'Brycen Adams DVM', 2, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(188, 'Garnet Dooley', 3, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(189, 'Mr. Lowell Schaefer', 11, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(190, 'Vincenzo Schiller', 3, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(191, 'Angus Prohaska', 9, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(192, 'Maybell Kilback', 16, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(193, 'Dr. Faye Schulist I', 3, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(194, 'Cortney Runolfsdottir', 1, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(195, 'Mr. Mike Okuneva', 1, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(196, 'Boyd Klein', 3, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(197, 'Steve Wuckert', 15, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(198, 'Oleta Stark', 18, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(199, 'Maximilian Runte', 13, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55'),
(200, 'Millie Durgan', 16, NULL, NULL, '1', '2023-12-11 04:50:55', '2023-12-11 04:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `e_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_date` date NOT NULL,
  `e_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `e_name`, `e_img`, `e_date`, `e_time`, `created_at`, `updated_at`) VALUES
(1, 'Sammy Ernser', '0', '1970-06-30', '11:41:20', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(2, 'Miss Nadia Marquardt MD', '0', '2015-12-08', '15:27:28', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(3, 'Mr. Raphael Kuphal', '0', '1978-07-31', '23:28:25', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(4, 'Baron Prohaska', '0', '1982-09-25', '09:54:31', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(5, 'Adah Stoltenberg', '0', '1998-04-09', '13:55:55', '2023-12-11 04:50:56', '2023-12-11 04:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `user_id`, `guardian_name`, `guardian_no`, `created_at`, `updated_at`) VALUES
(1, '1', 'Mrs.olaniyi', 'olait768@gmail.com', '2023-12-11 05:44:29', '2023-12-11 05:44:29'),
(2, '1', 'Mr. Jude', 'olait768@gmail.com', '2023-12-11 10:49:46', '2023-12-11 10:49:46'),
(3, '1', 'Mr. Jude', 'olait768@gmail.com', '2023-12-13 11:51:17', '2023-12-13 11:51:17'),
(4, '4', 'Mr. Jude', 'olait768@gmail.com', '2023-12-13 11:53:24', '2023-12-13 11:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `name`, `age`, `department`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Cloyd Kulas', 6, 'Aut impedit dolores dolor ab molestiae quia impedit fugiat.', '1', '2023-12-11 04:50:32', '2023-12-11 04:50:32'),
(2, 'Johnathon Swift', 23, 'Vel in possimus voluptas labore consectetur.', '1', '2023-12-11 04:50:32', '2023-12-11 04:50:32'),
(3, 'Roselyn Jacobson', 40, 'Sequi ipsam dolorem perspiciatis deleniti.', '1', '2023-12-11 04:50:32', '2023-12-11 04:50:32'),
(4, 'Mylene Sporer DVM', 100, 'Autem harum dicta nostrum rem laboriosam voluptatem.', '1', '2023-12-11 04:50:32', '2023-12-11 04:50:32'),
(5, 'Karl Crooks', 44, 'Harum ut maiores similique consequatur eum.', '1', '2023-12-11 04:50:32', '2023-12-11 04:50:32'),
(6, 'Adell Auer', 50, 'Ducimus vero voluptatibus aut dolor autem.', '1', '2023-12-11 04:50:33', '2023-12-11 04:50:33'),
(7, 'Mittie Berge PhD', 90, 'Totam aperiam illo totam et.', '1', '2023-12-11 04:50:33', '2023-12-11 04:50:33'),
(8, 'Edd Streich', 29, 'Ut et doloremque deleniti culpa pariatur delectus est.', '1', '2023-12-11 04:50:33', '2023-12-11 04:50:33'),
(9, 'Emmet Beatty', 79, 'Omnis id cum fuga dolore.', '1', '2023-12-11 04:50:33', '2023-12-11 04:50:33'),
(10, 'Elena Beatty', 85, 'Facere perferendis id et sint vel quo aut.', '1', '2023-12-11 04:50:33', '2023-12-11 04:50:33'),
(11, 'Weston Batz', 87, 'Eligendi quia necessitatibus et et distinctio nesciunt.', '1', '2023-12-11 04:50:33', '2023-12-11 04:50:33'),
(12, 'Nathaniel Tillman DVM', 5, 'Rerum corporis optio magni velit tenetur placeat.', '1', '2023-12-11 04:50:33', '2023-12-11 04:50:33'),
(13, 'Alvina McGlynn', 28, 'Dolor sunt minus vitae eaque facilis assumenda sit.', '1', '2023-12-11 04:50:33', '2023-12-11 04:50:33'),
(14, 'Geraldine Schroeder', 37, 'Aliquid debitis magni tenetur id eos quae ducimus.', '1', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(15, 'Haley Boyle', 31, 'Sit numquam ipsum modi aut provident velit qui.', '1', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(16, 'Graciela Bosco II', 42, 'Quaerat eius amet ut.', '1', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(17, 'Andy Daugherty', 77, 'Odit officia magni officia non blanditiis natus.', '1', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(18, 'Prof. Shania Dach', 97, 'Animi mollitia soluta occaecati dolore.', '1', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(19, 'Percy Feeney', 22, 'Ratione eos quaerat quibusdam optio ab et.', '1', '2023-12-11 04:50:34', '2023-12-11 04:50:34'),
(20, 'Lupe Schumm', 8, 'Nesciunt hic voluptatem eum non.', '1', '2023-12-11 04:50:34', '2023-12-11 04:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(401, '2014_10_12_000000_create_users_table', 1),
(402, '2014_10_12_100000_create_password_resets_table', 1),
(403, '2019_08_19_000000_create_failed_jobs_table', 1),
(404, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(405, '2022_06_08_211318_create_about_uses_table', 1),
(406, '2022_06_09_100347_create_categories_table', 1),
(407, '2022_06_10_134023_create_courses_table', 1),
(408, '2023_06_05_195731_create_migration_table', 1),
(409, '2023_06_06_105359_create_listings_table', 1),
(410, '2023_07_18_195458_create_registrations_table', 1),
(411, '2023_07_24_110854_create_ratings_table', 1),
(412, '2023_08_10_184549_create_replies_table', 1),
(413, '2023_08_10_190246_create_comments_table', 1),
(414, '2023_10_23_191853_create_notifies_table', 1),
(415, '2023_11_21_154711_teacher_controller', 1),
(416, '2023_11_23_120221_create_guardians_table', 1),
(417, '2023_11_23_230357_create_pending_fees_table', 1),
(418, '2023_11_26_182807_create_events_table', 1),
(419, '2023_11_26_220925_create_performances_table', 1),
(420, '2023_11_27_154817_create_activities_table', 1),
(421, '2023_11_27_155952_create_questions_table', 1),
(422, '2023_11_27_162010_create_attempteds_table', 1),
(423, '2023_11_27_170308_create_subjects_table', 1),
(424, '2023_11_29_142154_create_suggestions_table', 1),
(425, '2023_11_29_145034_create_chat_rooms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifies`
--

CREATE TABLE `notifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notify_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notify_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notify_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifies`
--

INSERT INTO `notifies` (`id`, `notify_type`, `notify_id`, `notify_message`, `created_at`, `updated_at`) VALUES
(1, '0', '1', 'new student registered', '2023-12-11 05:44:34', '2023-12-11 05:44:34'),
(2, '0', '3', 'new student registered', '2023-12-13 11:51:33', '2023-12-13 11:51:33'),
(3, '0', '4', 'new student registered', '2023-12-13 11:53:28', '2023-12-13 11:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pending_fees`
--

CREATE TABLE `pending_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pending_fees`
--

INSERT INTO `pending_fees` (`id`, `description`, `term`, `session`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Doloremque dignissimos omnis architecto.', 'Mr. Jensen Hegmann III', '1998', '3099', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(2, 'Commodi eveniet et aperiam culpa aut ad et maiores.', 'Verdie Grant I', '1992', '6245', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(3, 'Ut dolores sed soluta ullam molestiae.', 'Prof. Sylvan Trantow', '1972', '2779', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(4, 'Eum in facere rerum aut cum nihil non.', 'Dr. Angie Walter', '1971', '5274', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(5, 'Earum commodi cumque dolores exercitationem fugit et qui.', 'Nat Jast', '1981', '3796', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(6, 'Aliquam rerum nihil non enim in ea tenetur.', 'Ms. Marlee Lebsack DDS', '2016', '6909', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(7, 'Nihil assumenda reprehenderit consequatur nemo nesciunt.', 'Webster Schaden', '1996', '4328', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(8, 'Ipsum ea culpa velit nulla.', 'Harmony Stark', '1985', '3466', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(9, 'Quis rerum reprehenderit tempora mollitia.', 'Prof. Trisha Schmidt', '1998', '4560', '2023-12-11 04:50:56', '2023-12-11 04:50:56'),
(10, 'Et omnis quis totam debitis quo quos.', 'Samara Stracke', '1988', '3977', '2023-12-11 04:50:56', '2023-12-11 04:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `performances`
--

CREATE TABLE `performances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_avg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_avg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `performances`
--

INSERT INTO `performances` (`id`, `user_id`, `subject`, `ca`, `exam`, `first_term`, `second_term`, `third_term`, `session_avg`, `subject_position`, `grade_remark`, `class_avg`, `created_at`, `updated_at`) VALUES
(1, '1', 'Odit magni.', '10', '16', '18', '15', '15', '57', '27', '15', '69', '2023-12-11 04:50:57', '2023-12-11 04:50:57'),
(2, '1', 'Amet maxime.', '36', '32', '8', '10', '9', '97', '18', '12', '31', '2023-12-11 04:50:57', '2023-12-11 04:50:57'),
(3, '1', 'Dicta.', '38', '16', '2', '4', '5', '71', '11', '11', '5', '2023-12-11 04:50:57', '2023-12-11 04:50:57'),
(4, '1', 'Commodi tempore.', '31', '38', '15', '12', '8', '74', '25', '3', '17', '2023-12-11 04:50:57', '2023-12-11 04:50:57'),
(5, '1', 'Laboriosam id.', '5', '13', '2', '19', '7', '13', '14', '17', '73', '2023-12-11 04:50:57', '2023-12-11 04:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `questions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `s_code`, `questions`, `opt_a`, `opt_b`, `opt_c`, `opt_d`, `created_at`, `updated_at`) VALUES
(1, '3023', 'what is your name', 'olaitan', 'samuel', 'ayobami', 'abiodun', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2345', 'where are you from?', 'oyo', 'osun', 'ibadan', 'ekiti', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star_rated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `course_id`, `star_rated`, `created_at`, `updated_at`) VALUES
(1, '2', '93', '2', '2023-12-11 11:13:48', '2023-12-11 11:13:48'),
(2, '1', '35', '4', '2023-12-12 19:48:02', '2023-12-12 19:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '1', '14', '2023-12-11 05:44:34', '2023-12-11 05:44:34'),
(2, '3', '14', '2023-12-13 11:51:33', '2023-12-13 11:51:33'),
(3, '4', '14', '2023-12-13 11:53:28', '2023-12-13 11:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sname`, `s_code`, `instruction`, `duration`, `created_at`, `updated_at`) VALUES
('Mathematics', '3023', 'Answer all question', '30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('English Language', '2345', 'Answer all question', '20', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggestion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `club` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `course`, `user`, `email`, `student_id`, `gender`, `DOB`, `Phone_no`, `home_address`, `nationality`, `club`, `hobby`, `email_verified_at`, `password`, `passport`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'osamay', '14', '1', 'olait768@gmail.com', 'osa-00000', 'male', '1198-01-01', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$8nivAiQlxSNU.YCiU71kWuqL.JM9ret3u9Wv93jtWuyNgttO.bk4i', 'passport/nJnCpdlWQhk9hTlyybxd3Xzc1T7gaDQFIHPpGYuM.jpg', NULL, '2023-12-11 05:44:29', '2023-12-11 05:44:29'),
(2, 'ugoch', '1', '1', 'danieljude554@gmail.com', 'osa-00001', 'male', '2000-06-14', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$/HGEavXiAJPLt2DNNbot5eKEF95wBVQT0/ucrAOI0dZSLQUxGwTtm', 'passport/cTndq4LtoEl4dpPExddfANnVy1Es3Yrfa0gddD0e.jpg', NULL, '2023-12-11 10:49:46', '2023-12-11 10:49:46'),
(4, 'osamay', '14', '1', 'olait@gmail.com', 'osa-00002', 'male', '1198-01-01', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$4rmXubm25dhr7qpAywEZwu70qOcqBQYDpW6Wb/0lrqG4QKPl/z6T6', 'passport/LfiJPzTsM1kv79kJ4fQHSb6OYks7PrKKFrYq05c8.jpg', NULL, '2023-12-13 11:53:24', '2023-12-13 11:53:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_uses`
--
ALTER TABLE `about_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_rooms`
--
ALTER TABLE `chat_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_foreign` (`category_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifies`
--
ALTER TABLE `notifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pending_fees`
--
ALTER TABLE `pending_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performances`
--
ALTER TABLE `performances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_uses`
--
ALTER TABLE `about_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `chat_rooms`
--
ALTER TABLE `chat_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migration`
--
ALTER TABLE `migration`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT for table `notifies`
--
ALTER TABLE `notifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending_fees`
--
ALTER TABLE `pending_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `performances`
--
ALTER TABLE `performances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
