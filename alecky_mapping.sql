-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 10:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alecky_mapping`
--

-- --------------------------------------------------------

--
-- Table structure for table `deceaseds`
--

CREATE TABLE `deceaseds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` decimal(5,2) DEFAULT 123.45,
  `longitude` decimal(5,2) DEFAULT 123.45,
  `next_kin_full_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_kin_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `burial_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eulogy` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `death_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `death_cert` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting ',
  `cemetery_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deceaseds`
--

INSERT INTO `deceaseds` (`id`, `full_names`, `latitude`, `longitude`, `next_kin_full_names`, `next_kin_phone_number`, `burial_date`, `picture`, `eulogy`, `birth_date`, `death_date`, `death_cert`, `status`, `cemetery_id`, `created_at`, `updated_at`) VALUES
(1, 'Richard otieno', '2.36', '38.00', 'Richard Aoko', '0722998877', '2022-01-19', 'IMG-20200428-WA0049-1642111449.jpg', 'My husband was such a wonderful man. I\'m not sure I can really express just how much I will miss him. Not only was he a wonderful husband, but a wonderful father, grandfather, best friend, colleague ...and so much more.\r\n\r\nPaul’s ability to make everyone feel comfortable, secure and loved were his greatest strengths. It has been nearly 40 years since we were first married and I look back over those years with so much happiness.\r\n\r\nI remember the first time I saw him - I looked over the room at the dance hall on a Saturday night and saw this handsome young man. I was too shy initially to even hold his eye contact, but I did look out for him every Saturday night. Eventually, he introduced himself to me; we danced, we laughed and we fell in love.\r\n\r\nPaul was always such a gentleman – well mannered and polite, but always quick with a witty remark. His joviality and good nature attracted people the moment he walked in the room, and no one could forget his raucous and contagious laugh.', '2022-01-17 14:21:54.638274', '2022-01-17 14:21:54.638274', '', 'waiting ', 'OPKJHBGFES', '2022-01-13 19:04:12', '2022-01-13 19:04:12'),
(2, 'chekdjdjjd', '4.00', '43.00', 'derfrfr', '0722993384', '2022-01-19', 'IMG-20200430-WA0002-1642116442.jpg', 'Dad grew up in the country, on a dairy farm a few hours from Melbourne called Toora and was surrounded by sheep, farm animals and beautiful landscape. But his love for the written word drew him to the ‘big smoke’ to study literature at Trinity College in Melbourne. He said his passion came from his grandfather who used read endlessly to him. Stories that even as an adult he loved dearly and would read to us when we were kids. His favourites were Moby Dick and Tom Sawyer. \r\n\r\nMy parents met at Trinity College and after graduating, decided to get married. Two years later I was born, followed by my brother Charlie a year after that.\r\n\r\nDad was always so caring and giving to us children. Even when we ran in and out of his office a million times interrupting his writing, Dad never got too angry. He would usher us away with suggestions of how we could occupy ourselves – always with creative and new ideas.\r\n\r\nDad was also inspirational to us, with his passion for music. He loved most types, but his favourite was Neil Diamond. On Sunday afternoons, we would gather in the lounge room and Dad would put on his ‘album of the week’. He would pull Mum in his arms and dance around the room while we clapped hands and giggled... and then it was our turn. Dad would grab us both and swing us up and around until we were sick with laughter and dizziness. The fun we had on those Sundays, I will never forget.', '2022-01-17 14:21:54.638274', '2022-01-17 14:21:54.638274', '', 'waiting ', '98JHYT43SM', '2022-01-13 20:27:23', '2022-01-13 20:27:23'),
(3, 'Check Names', '0.36', '37.75', 'Testing Names', '0732831212', '2022-01-16', 'IMG_20210210_214623-1642170278.jpg', 'Being the youngest of three, William was always special to his sisters, Michelle and Andrea. They would dress him up and take him out for walks in the pram – they were just so excited to have a little brother and when he started school, they became fiercely protective of him.\r\n\r\nAs William grew from a boy into a teenager, I could see the man that he would become - strong, steadfast and assured. He loved school and loved his sports. Every afternoon after school, he would race down to the oval to kick the ball around with his mates. When he became captain of the soccer team, we were so proud. He was always competitive, but humble. It was such an endearing quality.\r\n\r\nWilliam and I had some wonderful times together. After the girls had left home to go to university, the two of us would go camping together at the weekends. William loved camping – he loved the adventure and simplicity of it. After a day of fishing and swimming, we would set up camp and spend hours talking about life. It was those conversations that I will never forget. I was watching a teenager grow into a young man - a young man with so much enthusiasm and with so many plans for the future.\r\n\r\nRecently, all he talked about was the overseas trip he had planned with his mates after they finished their HSCs. He couldn\'t wait to go over to Asia to have what he called “his amazing Asian adventure”. But he also looked forward to studying to become a teacher – a vocation that was a perfect choice for William as he was a gentle soul, unwavering in his patience, and with a real desire to help others.\r\n\r\nWilliam was adored by his friends and family and it is testament to him how many of you are here today to farewell our boy. Not only was he a loving son and brother, he was a kind and giving friend. Someone who was always a pleasure to be around. \r\n\r\nTo have lost William is heartbreaking – it has come as such a shock to us all. His life was far too brief.\r\n\r\nMy family wishes to express our heartfelt thanks to all those who have given their support, compassion and love throughout this very difficult time. I know in my heart that he would not want us to grieving for too long. Rather, William would want us all to remember the good times we all shared with him.', '2022-01-17 14:21:54.638274', '2022-01-17 14:21:54.638274', '', 'waiting ', '98765GFCBV', '2022-01-14 11:24:39', '2022-01-14 11:24:39'),
(4, 'richard Steven', '0.37', '36.20', 'next of kin chehe', '0722992288', '2022-01-20', 'constantia-1642446736.jpg', 'eulogy written here', '2022-01-15 21:00:00.000000', '2022-01-16 21:00:00.000000', 'olkiu76', 'confirmed', 'GB0PUOWJU3', '2022-01-17 16:12:18', '2022-01-18 03:58:59'),
(5, 'Muthomi Njuki', '0.54', '37.46', 'kemaka kenee', '0733992211', '2022-02-05', 'WIN_20210724_12_11_11_Pro-1642457272.jpg', 'dedededededed', '2022-01-11 21:00:00.000000', '2022-01-16 21:00:00.000000', 'oli8765', 'confirmed', 'BVZT1EW3BQ', '2022-01-17 19:07:53', '2022-01-17 19:07:53');

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
-- Table structure for table `map_locations`
--

CREATE TABLE `map_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deceased_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `map_locations`
--

INSERT INTO `map_locations` (`id`, `section_id`, `deceased_id`, `location_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 123, 'available', '2021-12-06 17:17:13', '2021-12-06 17:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `map_sections`
--

CREATE TABLE `map_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slots_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `map_sections`
--

INSERT INTO `map_sections` (`id`, `section_name`, `slots_available`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Meru', '87', 'in Meru COunty', '2021-12-06 17:04:12', '2021-12-06 17:04:12');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_30_171522_laratrust_setup_tables', 1),
(6, '2021_11_30_081634_create_map_sections_table', 1),
(8, '2021_12_06_085226_create_map_locations_table', 2),
(10, '2021_11_30_083441_create_deceaseds_table', 3);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-12-06 16:15:58', '2021-12-06 16:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 3),
(12, 3),
(13, 3),
(14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(2, 'user', 'User', 'User', '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(3, 'role_name', 'Role Name', 'Role Name', '2021-12-06 16:15:58', '2021-12-06 16:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`, `team_id`) VALUES
(1, 1, 'App\\Models\\User', NULL),
(2, 2, 'App\\Models\\User', NULL),
(3, 3, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'vnsmusyoki@gmail.com', NULL, '$2y$10$AoW5N3Ihh5Hfykn3ApYMfuL3TeZqoWCU/K/eyZ3.qEgPPmZ73EHPS', 'WIN_20210526_14_29_50_Pro-1642496365.jpg', 'PPqY69erRd9wpInXxWhkYJ0HWxNZ8o48RB2HHGFXaVqy4aKRZ8UTUozPMLaM', '2021-12-06 16:15:58', '2022-01-18 05:59:25'),
(2, 'User', 'user@app.com', NULL, '$2y$10$vFzW4BVHdB6MA7dJ0MiRBusE4U.dLUhj2ig0lY05U2tR1mfAnYvhW', NULL, NULL, '2021-12-06 16:15:58', '2021-12-06 16:15:58'),
(3, 'Role Name', 'role_name@app.com', NULL, '$2y$10$HHh236Czm2P1K4nwTu1xwOqAuD8y4bvhsU7sPPLDTKYecXX9Q34rC', NULL, NULL, '2021-12-06 16:15:58', '2021-12-06 16:15:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deceaseds`
--
ALTER TABLE `deceaseds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `map_locations`
--
ALTER TABLE `map_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map_locations_section_id_foreign` (`section_id`),
  ADD KEY `map_locations_deceased_id_foreign` (`deceased_id`);

--
-- Indexes for table `map_sections`
--
ALTER TABLE `map_sections`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD UNIQUE KEY `permission_user_user_id_permission_id_user_type_team_id_unique` (`user_id`,`permission_id`,`user_type`,`team_id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD UNIQUE KEY `role_user_user_id_role_id_user_type_team_id_unique` (`user_id`,`role_id`,`user_type`,`team_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `deceaseds`
--
ALTER TABLE `deceaseds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `map_locations`
--
ALTER TABLE `map_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map_sections`
--
ALTER TABLE `map_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `map_locations`
--
ALTER TABLE `map_locations`
  ADD CONSTRAINT `map_locations_deceased_id_foreign` FOREIGN KEY (`deceased_id`) REFERENCES `deceaseds` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `map_locations_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `map_sections` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
