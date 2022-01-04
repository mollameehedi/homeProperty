-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 08:27 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonem`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bradcrumb_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `bradcrumb_title`, `heading`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Capitalizing on the Unique Qualities', 'Lorem Ipsum roin gravida nibh vel velit auctor aliollicitudin, lorem quis bibendum auctor nisi elit consequat mollit ipsum, nec sagittis elit. Duis sed odio vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit proident. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed nisil ut non est mauris vitae erat consequat auctor eu in elit.', '1.jpg', '2021-03-18 17:24:11', '2021-03-18 17:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallary_headings`
--

CREATE TABLE `gallary_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallary_headings`
--

INSERT INTO `gallary_headings` (`id`, `sub_heading`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'design', 'Property Gallery', '2021-03-18 16:01:05', '2021-03-18 16:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallary_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallary_photo`, `created_at`, `updated_at`) VALUES
(9, '9.jpg', '2021-03-19 16:59:42', '2021-03-19 16:59:42'),
(10, '10.jpg', '2021-03-19 16:59:48', '2021-03-19 16:59:48'),
(11, '11.jpg', '2021-03-19 16:59:53', '2021-03-19 16:59:54'),
(12, '12.jpg', '2021-03-19 16:59:59', '2021-03-19 17:00:00'),
(14, '14.jpg', '2021-03-19 17:00:20', '2021-03-19 17:00:20'),
(15, '15.jpg', '2021-03-19 17:00:28', '2021-03-19 17:00:28'),
(16, '16.jpg', '2021-03-19 17:55:28', '2021-03-19 17:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `heading`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(4, 'Into The Nature', 'great location -  best prıce', '4.png', '2021-03-19 16:20:25', '2021-03-19 16:20:26'),
(5, 'into the eco village', 'great location - best prıce', '5.png', '2021-03-19 16:24:53', '2021-03-19 16:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `house_details`
--

CREATE TABLE `house_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_details`
--

INSERT INTO `house_details` (`id`, `house_sub_heading`, `house_heading`, `house_description`, `created_at`, `updated_at`) VALUES
(1, 'title', 'INTERESTED IN A SHOWING?', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur cum rerum incidunt dolores quam minima consequuntur tenetur eum sit, deserunt, distinctio cumque ipsa aut quasi? Ducimus dolorem et corporis unde sed, quod maxime odio officiis quaerat odit eius repudiandae quae est debitis omnis sint fugiat vitae autem! Itaque, perspiciatis? Quo cumque doloribus consequatur quibusdam porro repudiandae voluptatem quidem quisquam tempora dolorem ipsa aut deserunt numquam, minus esse molestiae earum veniam animi possimus placeat optio quos qui a? Suscipit officiis in natus tempore cupiditate recusandae odio laboriosam alias voluptatem doloremque! Eos, ex dolorum voluptate sit labore dolor ad dolore cupiditate corporis accusantium culpa porro, aut perspiciatis quos laborum. Debitis assumenda inventore, at saepe quia ab quos maiores eum dolores excepturi dolorem consectetur molestias placeat eaque praesentium reprehenderit numquam quis! Velit laboriosam nesciunt rem tempora deleniti nulla cupiditate, aliquid unde in quisquam vitae qui ut ex animi consequuntur facilis illum amet suscipit.', '2021-03-18 17:55:50', '2021-03-18 18:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `class`, `info`, `created_at`, `updated_at`) VALUES
(2, 'fas fa-map-marker-alt', 'Northern Stockholm, Sweden', '2021-03-18 18:44:30', '2021-03-19 17:07:24'),
(3, 'fas fa-envelope', 'admin@gmail.com', '2021-03-19 17:08:37', NULL),
(4, 'fas fa-phone-alt', '(+880) 1992409030', '2021-03-19 17:09:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, '1.png', '2021-03-15 18:35:09', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_16_003346_create_logos_table', 2),
(5, '2021_03_16_010153_create_home_banners_table', 3),
(6, '2021_03_17_220702_create_youtube_links_table', 4),
(7, '2021_03_17_225116_create_youtube_link_headings_table', 5),
(8, '2021_03_17_232035_create_working_services_table', 6),
(9, '2021_03_17_232544_create_working_service_headings_table', 6),
(10, '2021_03_18_213921_create_gallary_headings_table', 7),
(11, '2021_03_18_213937_create_gallries_table', 7),
(12, '2021_03_18_214201_create_galleries_table', 8),
(13, '2021_03_18_221224_create_testimonial_headings_table', 9),
(14, '2021_03_18_221234_create_testimonials_table', 9),
(15, '2021_03_18_231526_create_about_details_table', 10),
(16, '2021_03_18_234819_create_house_details_table', 11),
(17, '2021_03_19_001418_create_social_media_table', 12),
(18, '2021_03_19_003614_create_infos_table', 13),
(19, '2021_03_20_000427_create_schedules_table', 14),
(20, '2021_03_20_003018_create_subscribers_table', 15),
(21, '2021_03_20_010040_create_opening_houres_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `opening_houres`
--

CREATE TABLE `opening_houres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opening_schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opening_houres`
--

INSERT INTO `opening_houres` (`id`, `opening_schedule`, `created_at`, `updated_at`) VALUES
(3, 'Monday – Thursday : 10AM to 6PM', '2021-03-19 19:15:28', '2021-03-19 19:17:48'),
(5, 'Friday – Saturday : 11AM to 4PM', '2021-03-19 19:20:47', NULL),
(6, 'Sunday : Close', '2021-03-19 19:20:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `class`, `link`, `created_at`, `updated_at`) VALUES
(2, 'fab fa-facebook-f', '#', '2021-03-18 18:26:06', '2021-03-18 18:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '2021-03-19 18:36:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designtaion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designtaion`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(2, 'Developer Zahid', 'web application developer', 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt', '2.jpg', '2021-03-18 16:51:26', '2021-03-18 16:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_headings`
--

CREATE TABLE `testimonial_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_headings`
--

INSERT INTO `testimonial_headings` (`id`, `sub_heading`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'HAPPY CUSTOMERS', 'Testimonials', '2021-03-18 16:21:54', '2021-03-18 17:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$A5YzugGuYRKC5Pp1.1jH4uJ50bE2498YDPVqjabhVzmOHtdPpFeXO', 'default.jpg', NULL, '2021-03-15 18:25:32', '2021-03-15 18:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `working_services`
--

CREATE TABLE `working_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `working_services`
--

INSERT INTO `working_services` (`id`, `title`, `link_title`, `link_url`, `thumbnail`, `created_at`, `updated_at`) VALUES
(2, 'Explore Our', 'Amenities', 'gallery', '2.jpg', '2021-03-17 18:26:58', '2021-03-17 18:26:58'),
(3, 'The Building', 'Overview', 'overview', '3.jpg', '2021-03-19 16:55:06', '2021-03-19 16:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `working_service_headings`
--

CREATE TABLE `working_service_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `working_service_headings`
--

INSERT INTO `working_service_headings` (`id`, `sub_heading`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'About', 'We Are Working In Your Service', '2021-03-17 18:16:42', '2021-03-17 18:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `youtube_links`
--

CREATE TABLE `youtube_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtube_links`
--

INSERT INTO `youtube_links` (`id`, `link`, `thumbnail`, `created_at`, `updated_at`) VALUES
(4, 'https://www.youtube.com/watch?v=DQ63F7pfIF0', 'default.jpg', '2021-03-19 16:28:48', '2021-03-19 16:39:02'),
(6, 'https://www.youtube.com/watch?v=DQ63F7pfIF0', '6.jpg', '2021-03-19 16:41:12', '2021-03-19 18:47:35'),
(7, 'https://www.youtube.com/watch?v=DQ63F7pfIF0', '7.jpg', '2021-03-19 16:41:15', '2021-03-19 18:47:24'),
(8, 'https://www.youtube.com/watch?v=DQ63F7pfIF0', '8.jpg', '2021-03-19 16:41:18', '2021-03-19 18:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `youtube_link_headings`
--

CREATE TABLE `youtube_link_headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtube_link_headings`
--

INSERT INTO `youtube_link_headings` (`id`, `heading`, `sub_heading`, `created_at`, `updated_at`) VALUES
(1, 'Watch Video', 'OUR WORK', '2021-03-17 17:14:47', '2021-03-17 18:23:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary_headings`
--
ALTER TABLE `gallary_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_details`
--
ALTER TABLE `house_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_houres`
--
ALTER TABLE `opening_houres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_headings`
--
ALTER TABLE `testimonial_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `working_services`
--
ALTER TABLE `working_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_service_headings`
--
ALTER TABLE `working_service_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube_links`
--
ALTER TABLE `youtube_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube_link_headings`
--
ALTER TABLE `youtube_link_headings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallary_headings`
--
ALTER TABLE `gallary_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `house_details`
--
ALTER TABLE `house_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `opening_houres`
--
ALTER TABLE `opening_houres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial_headings`
--
ALTER TABLE `testimonial_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `working_services`
--
ALTER TABLE `working_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `working_service_headings`
--
ALTER TABLE `working_service_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `youtube_links`
--
ALTER TABLE `youtube_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `youtube_link_headings`
--
ALTER TABLE `youtube_link_headings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
