-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 12:01 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hhz_arena`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Lapangan Basket', 'Lapangan Basket indoor di HHZ Arena merupakan lapangan basket indoor yang terletak di bagian  timur kawasan HHZ Arena.\n                Ukuran : 28 meter x 15 meter.\n                Fasilitas lainnya: 2 Ruang Ganti, Toilet, Mushola, dan AC', 500000, '2021-12-05 03:36:40', '2021-12-05 03:36:40'),
(2, 'Lapangan Tennis', 'Lapangan Tennis Outdoor HHZ Arena terletak di sebelah Lapangan Basket. Tata ruang lapangan tenis sudah menggunakan standar internasional (23,77 m x 10,97 m).', 600000, '2021-12-05 03:36:41', '2021-12-05 03:36:41'),
(3, 'Lapangan Futsal', 'Lapangan Futsal Indoor HHZ Arena terletak pada gedung Alvin di area barat kawasan HHZ Arena. Lapangan Futsal ini berenis lantai Vinyl yang memiliki tiga lapisan, yaitu compact layer, glass fiber, dan printing layer dengan ketebalan 6mm. Lapangan futsal ini berstandar internasional dan memiliki kapasitas penonton sampai 1000 orang.', 500000, '2021-12-05 03:36:41', '2021-12-05 03:36:41'),
(4, 'Lapangan Sepakbola', 'Lapangan Sepak Bola HHZ Arena merupakan salah satu Lapangan Sepakbola yang menggunakan ukuran standar internasional untuk sepak bola . Jenis rumput yang digunakan untuk lapangan ini adalah rumput alam bernama Zoysia japonica, rumput alam terbaik berstandar internasional.\n                Ukuran : 100 x 68 meter\n                Fasilitas : mushola, ruang ganti pemain, dan toilet. Lapangan ini juga dilengkapi dengan tribun top-down.', 300000, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(5, 'Lapangan Badminton', 'Lapangan Badminton HHZ Arena merupakan lapangan badminton indoor yang berstandar internasional dengan ukurannya juga yang mengikuti standar internasional dengan ukuran arena 25 x 50 m. Lapangan ini dilengkapi dengan sound system dan fasilitas pendukung lainnya. Lapangan badminton HHZ Arena yang berjumlah 4 lapangan juga dilengkapi tribun yang mengelilingi ketiga lapangan tersebut dengan 5000 kursi yang siap menjadi tempat penyelenggaraan event berskala nasional maupun internasional.', 500000, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(6, 'Ballroom', 'Selain arena olahraga yang fantastik, HHZ Arena juga memiliki ballroom megah yang berada di Gedung Pewe. Ballroom ini dapat digunakan untuk berbagai macam event, seperti pernikahan, gathering, dan lainnya. HHZ Arena ballroom dapat menampung hingga 5000 orang.', 100000000, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(7, 'Lapangan Softball', 'Lapangan Softball di HHZ Arena merupakan lapangan softball terbesar dan terbaru di Indonesia yang sudah menggunakan standar internasional. Jenis rumput yang digunakan untuk lapangan baseball adalah rumput alam bernama Zoysia japonica, rumput alam terbaik bertaraf internasional.\n                Ukuran :16,76 -18,29 m\n                Fasilitas :Lapangan ini dilengkapi dengan tribun, ruang ganti, toilet dan mushola.', 500000, '2021-12-05 03:36:42', '2021-12-05 03:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `facility_id`, `created_at`, `updated_at`) VALUES
(1, 'basket1.jpeg', 1, '2021-12-05 03:36:41', '2021-12-05 03:36:41'),
(2, 'basket2.jpeg', 1, '2021-12-05 03:36:41', '2021-12-05 03:36:41'),
(3, 'tenis1.png', 2, '2021-12-05 03:36:41', '2021-12-05 03:36:41'),
(4, 'tenis2.png', 2, '2021-12-05 03:36:41', '2021-12-05 03:36:41'),
(5, 'tenis3.png', 2, '2021-12-05 03:36:41', '2021-12-05 03:36:41'),
(6, 'futsal.jpg', 3, '2021-12-05 03:36:41', '2021-12-05 03:36:41'),
(7, 'sepakbola1.png', 4, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(8, 'sepakbola2.png', 4, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(9, 'badminton.jpeg', 5, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(10, 'ballroom.jpeg', 6, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(11, 'ballroom.jpg', 6, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(12, 'softball1.jpeg', 7, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(13, 'softball2.jpeg', 7, '2021-12-05 03:36:42', '2021-12-05 03:36:42'),
(14, 'softball3.jpeg', 7, '2021-12-05 03:36:43', '2021-12-05 03:36:43');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2021_12_04_015204_create_permission_tables', 1),
(14, '2021_12_04_020836_create_facilities_table', 1),
(15, '2021_12_04_090008_create_requests_table', 1),
(16, '2021_12_04_091159_create_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 8);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'users.index', 'web', '2021-12-05 03:36:35', '2021-12-05 03:36:35'),
(2, 'users.create', 'web', '2021-12-05 03:36:35', '2021-12-05 03:36:35'),
(3, 'users.store', 'web', '2021-12-05 03:36:35', '2021-12-05 03:36:35'),
(4, 'users.show', 'web', '2021-12-05 03:36:35', '2021-12-05 03:36:35'),
(5, 'users.edit', 'web', '2021-12-05 03:36:35', '2021-12-05 03:36:35'),
(6, 'users.update', 'web', '2021-12-05 03:36:35', '2021-12-05 03:36:35'),
(7, 'users.destroy', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(8, 'facilities.index', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(9, 'facilities.create', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(10, 'facilities.store', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(11, 'facilities.edit', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(12, 'facilities.update', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(13, 'facilities.destroy', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(14, 'images.destroy', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(15, 'requests.index', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(16, 'requests.destroy', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(17, 'logout.perform', 'web', '2021-12-05 03:36:36', '2021-12-05 03:36:36'),
(18, 'imagess.destroy', 'web', '2021-12-05 03:36:37', '2021-12-05 03:36:37'),
(19, 'requests.approve', 'web', '2021-12-05 03:36:37', '2021-12-05 03:36:37'),
(20, 'requests.reject', 'web', '2021-12-05 03:36:37', '2021-12-05 03:36:37'),
(21, 'facilities.list', 'web', '2021-12-05 03:36:37', '2021-12-05 03:36:37'),
(22, 'facilities.detail', 'web', '2021-12-05 03:36:37', '2021-12-05 03:36:37'),
(23, 'requests.create', 'web', '2021-12-05 03:36:38', '2021-12-05 03:36:38'),
(24, 'requests.store', 'web', '2021-12-05 03:36:38', '2021-12-05 03:36:38'),
(25, 'requests.list', 'web', '2021-12-05 03:36:38', '2021-12-05 03:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `facility_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `date`, `start`, `end`, `facility_id`, `user_id`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, '2021-12-12', 18, 22, 6, 6, 1, '2021-12-05 03:58:13', '2021-12-05 03:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-12-05 03:36:34', '2021-12-05 03:36:34'),
(2, 'management', 'web', '2021-12-05 03:36:34', '2021-12-05 03:36:34'),
(3, 'user', 'web', '2021-12-05 03:36:34', '2021-12-05 03:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(15, 1),
(15, 2),
(16, 1),
(17, 1),
(17, 2),
(17, 3),
(18, 2),
(19, 2),
(20, 2),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'Hydra', 'hhz@admin.com', NULL, '$2y$10$LQ6ptJW6rZFb06q.uWNBjunGzuwg56kKX/R.59fdQqPEHNVeITLna', NULL, '2021-12-05 03:36:38', '2021-12-05 03:36:38'),
(2, 'Groovy', 'hhz@mng.com', NULL, '$2y$10$13PNl7/.XJFS9KTcdwt7LO24MQo6TQ.5pUY7vyJXXGk7nULwiRTD.', NULL, '2021-12-05 03:36:39', '2021-12-05 03:36:39'),
(3, 'Alvin Octavianus', 'alvin@gmail.com', NULL, '$2y$10$vcKww3oq3YECDe78Fm3slO3YmO6bTG2zS4m.JJORvxr936wZsW/je', NULL, '2021-12-05 03:36:39', '2021-12-05 03:36:39'),
(4, 'Reyhan Wijaya', 'reyhan@gmail.com', NULL, '$2y$10$vj9bQNcd/kTo3Pnq9FK9wujCzicg.OzkZDhcCTqpwbRi47ed6zWt6', NULL, '2021-12-05 03:36:39', '2021-12-05 03:36:39'),
(5, 'Adrian Cahyadi', 'adrian@gmail.com', NULL, '$2y$10$tQvxTdqJW/lfecqJdhan3.hFEbhVlyaPcvuujFwFi0TnIkioU2zpi', NULL, '2021-12-05 03:36:39', '2021-12-05 03:36:39'),
(6, 'Necoles Fong', 'necoles@gmail.com', NULL, '$2y$10$SXExmIcM919qCXUE2AQVwOfF3oGRMN/6UzdiLMp32JjW63Bt99tbe', NULL, '2021-12-05 03:36:40', '2021-12-05 03:36:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_facility_id_foreign` (`facility_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_facility_id_foreign` (`facility_id`),
  ADD KEY `requests_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`),
  ADD CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
