-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 01:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `email`, `phone`, `password`, `avatar`, `provider_id`, `email_verified_at`, `birth_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jacob Matthews', 'gahi@nomail.com', NULL, '$2y$10$krMJi6aPP85AAqNVpgoD9O5uPyt7S6uAUdjKqn/Hi4mUQo4Ky3OQm', NULL, NULL, NULL, NULL, NULL, '2022-10-29 15:10:29', NULL),
(2, 'Maia Daniel', 'fipebi@nomail.com', NULL, '$2y$10$ZBtJBB7ZWyLry3IZT0fHneazo3C11A7DydkELBKgZs6gJtjI.4IAK', NULL, NULL, NULL, NULL, NULL, '2022-10-29 15:12:15', NULL),
(3, 'Maia Daniel', 'fipebi@nomail.com', NULL, '$2y$10$9Wo/UI1V9gOASIHyVCjDo.r7pMWG9aLGi/kX7cNFonC8NVTfXdtsm', NULL, NULL, NULL, NULL, NULL, '2022-10-29 15:13:11', NULL),
(4, 'Emmanuel Calhoun', 'zobifoza@nomail.com', NULL, '$2y$10$ejgBbyBvw3R5fd4bFLTjz.vY6WX2xGuaz1aEVbTQlspaXI/3pEzG6', NULL, NULL, NULL, NULL, NULL, '2022-10-29 15:22:27', NULL),
(5, 'Emmanuel Calhoun', 'zobifoza@nomail.com', NULL, '$2y$10$zc7u.M9xYYIWTqAca2DFAuMOTGudX262/bNQthRV6U1SMPQVu8Sdy', NULL, NULL, NULL, NULL, NULL, '2022-10-29 15:26:11', NULL),
(6, 'Harlan Bruce', 'jaqyka@nomail.com', NULL, '$2y$10$t8NAnjdMbPluLw6JVq6gR.nm7Cq6LUhXEEUL/D1zY9qVdZN97TllG', NULL, NULL, NULL, NULL, NULL, '2022-10-29 15:52:59', NULL),
(7, 'Lois Sexton', 'lahynino@nomail.com', NULL, '$2y$10$uhqK.3ICUnRLj4u4jav77e2OSgfNdigjUdvVZM01rDjAZl09sZZu6', NULL, NULL, NULL, NULL, NULL, '2022-10-29 15:53:52', NULL),
(8, 'Lois Sexton', 'lahynino@nomail.com', NULL, '$2y$10$EVJDWTcQtyoHFFRM9XyDdumcHVeRw7ORDsWzTfpbtHBhIPamcEZFG', NULL, NULL, NULL, NULL, NULL, '2022-10-29 15:54:33', NULL),
(9, 'Lois Harrington', 'medihynal@nomail.com', NULL, '$2y$10$APrsxQrItnR4tOesrLhH6OQfPP0uSM1XCnXg5XEJ/9pIofyWGt26.', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:03:23', '2022-10-29 16:03:23'),
(10, 'Ferris Solomon', 'dahypowo@nomail.com', NULL, '$2y$10$/fkOXKZOzrc8zkFhvyA3GuLM7t1HkJdB7VFvHhC4DPPd1Mi0jDl9i', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:06:01', '2022-10-29 16:06:01'),
(11, 'Cade Delgado', 'xalojefad@nomail.com', NULL, '$2y$10$2pybh.DijGsa8.PqGF.wyeg8mmu6GcBaiJc1FciQnN.c2BT.EiIqa', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:06:47', '2022-10-29 16:06:47'),
(12, 'Uriel Stone', 'vevody@nomail.com', NULL, '$2y$10$Lnnm7eBUhOG3Ch.WH6jG2eneic/0393GZwPoiXcXegbwzNPBoDCFW', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:12:33', '2022-10-29 16:12:33'),
(13, 'Laith Morin', 'xuzaly@nomail.com', NULL, '$2y$10$/iJo6CuHTXbaLdF6kcA5WehC7x4s8ZpR9JyxtgeMggbpf5z2Qyfna', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:15:24', '2022-10-29 16:15:24'),
(14, 'Sophia Glenn', 'howicih@nomail.com', NULL, '$2y$10$CrDwcawoYlhOJ2ViobDg7.FU1EgPusMN0XUX/dNtVTpmbRdPmFVEW', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:24:38', '2022-10-29 16:24:38'),
(15, 'Sophia Glenn', 'howicih@nomail.com', NULL, '$2y$10$LRYb9hA2J10GtD5UQEGlGeIqI4yy4PvPAqzccUrtcGO2l4.EKnfKK', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:25:06', '2022-10-29 16:25:06'),
(16, 'Cora Sullivan', 'cite@nomail.com', NULL, '$2y$10$hZEgDyT4PYc1CsDdq8rqouR1Hx3VXMhopdFu.JkBVy42DaCK0XxM2', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:25:15', '2022-10-29 16:25:15'),
(17, 'Cora Sullivan', 'cite@nomail.com', NULL, '$2y$10$xXaPjHDqnsTKaD6XmYpXx.fwy/bYxvaL8b.LlDeG/47p9dgVluLL6', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:26:18', '2022-10-29 16:26:18'),
(18, 'Oliver Bell', 'syjezileta@nomail.com', NULL, '$2y$10$CCz1Pl.2cY46j.9733EpYu9Z/Zln9kxrsUb9/DPT2L2zqx0/nvw6u', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:26:26', '2022-10-29 16:26:26'),
(19, 'Arden Thomas', 'jagyboguv@nomail.com', NULL, '$2y$10$NrR9gK2pt5eCoHGv2b55ZuPp6UUbb3g8X.HrHIiSCd1RqhwQBytaK', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:39:36', '2022-10-29 16:39:36'),
(20, 'Lavinia Brock', 'kihe@nomail.com', NULL, '$2y$10$zq9EfKpJ/pHmxK.uCiJPbOYru8zhAkpbr.8RjEhKpc3DWmmB2WCAW', NULL, NULL, NULL, NULL, NULL, '2022-10-29 17:07:06', '2022-10-29 17:07:06'),
(21, 'Ahmed Hewitt', 'kuhifugu@nomail.com', NULL, '$2y$10$lvQmxaa7Wy7QshLqxiAqNemHLga81TNzX.x3O4acbnfCszUzhLUIW', NULL, NULL, NULL, NULL, NULL, '2022-10-29 17:10:12', '2022-10-29 17:10:12'),
(22, 'Rabiul Islam', 'abcd@gmail.com', NULL, '$2y$10$B7jAvesSU6Ik7ICMrEeDZ.F7a6hXA4QWmTRd5qTUCrGy4EkDHMKie', NULL, NULL, NULL, NULL, NULL, '2022-10-29 17:11:13', '2022-10-29 17:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `phone`, `password`, `avatar`, `provider_id`, `email_verified_at`, `birth_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Keefe Greer', 'jawah@nomail.com', NULL, '$2y$10$.Hddm1YBPdnxFEQ6b0O/h.PXCK1zHJkHoFTyf8Dr5Ai1nxt/l9dt2', NULL, NULL, NULL, NULL, NULL, '2022-10-29 16:30:53', '2022-10-29 16:30:53');

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
(5, '2022_10_29_165637_create_candidates_table', 1),
(6, '2022_10_29_221632_create_companies_table', 2);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Steel Mann', 'tuzuh@nomail.com', NULL, NULL, '$2y$10$fWdify/V0lTLnRys0/4QOeSTjm/cGT0jYExReaLzC6QrhjY/CdMe2', NULL, NULL, '2022-10-29 15:43:54', '2022-10-29 15:43:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
