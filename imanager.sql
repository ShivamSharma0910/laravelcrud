-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 10:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imanager`
--

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
(4, '2021_03_25_071116_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(20) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `salary` varchar(11) NOT NULL,
  `uprofilepic` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fname`, `lname`, `email`, `age`, `startdate`, `salary`, `uprofilepic`, `created_at`, `updated_at`) VALUES
(1, 'jack', 'vinsent', 'jackv121@gmail.com', '1996-02-02', '2021-02-02', '180000', '/assets/images/jlmnq88wFDDT_ppl5.jpg', '2021-04-02 02:01:06', '2021-04-02 02:01:06'),
(2, 'mack', 'john', 'mack211@gmail.com', '1988-02-04', '2020-01-02', '100000', '/assets/images/CfpJY85Zs0DO_pp3.jpg', '2021-04-02 02:02:05', '2021-04-02 02:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_address`
--

CREATE TABLE `tbl_user_address` (
  `a_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_address`
--

INSERT INTO `tbl_user_address` (`a_id`, `address`, `city`, `country`, `id`, `created_at`, `updated_at`) VALUES
(1, 'Indra Nagar', 'Lucknow', 'India', 1, '2021-04-02 15:51:17', '2021-04-02 15:51:17'),
(2, 'Agra Cantt.', 'Agra', 'India', 2, '2021-04-02 15:51:17', '2021-04-02 15:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shivam', 'Sharma', 'shivam.upmanyu12@gmail.com', NULL, '$2y$10$9FKoihNux3HQ3.y.EWM.GOXyN1iwQV6ZO8DmFx2EooKl27xtMDP6a', NULL, '2021-03-25 03:46:58', '2021-03-25 03:46:58'),
(3, 'Shivam', 'Sharma', 'shivam.upmanyu11@gmail.com', NULL, '$2y$10$OzqJ00JRcQVkx5SJhgrz9eY84PbYYNnXdU.PKO0MzTGqCYxwLsSPq', NULL, '2021-03-25 03:54:37', '2021-03-25 03:54:37'),
(4, 'ashi', 'Sharma', 'ashi@121gmail.com', NULL, '$2y$10$bmdqsD8gVIReRmMXfcs6LOlyPY7bOn9NqHE85TdqG1o2KBb/YjKEG', NULL, '2021-03-25 03:56:15', '2021-03-25 03:56:15'),
(5, 'vipin', 'sir', 'vipin@1211gmail.com', NULL, '$2y$10$WVAmgCjk.A3aZqPafXtUy.7NFudz.Kv78wAjpCR3MN3zzxB1FqxX.', NULL, '2021-03-25 04:12:57', '2021-03-25 04:12:57'),
(7, 'Shivam', 'Sharma', 'abhiraj@121gmail.com', NULL, '$2y$10$hw/osCO1kU6HSO.dzUuaDOUwKMdKov9.P6vJK0gKVkVuXjudooDuW', NULL, '2021-03-25 04:16:56', '2021-03-25 04:16:56'),
(8, 'adi', 'Sharma', 'aditya@121gmail.com', NULL, '$2y$10$cL2wtu6hB7icxiEZv.vJBeIrzSOKCCJ1.ydmXojhZsUQ1YC6stVXW', NULL, '2021-03-25 04:17:54', '2021-03-25 04:17:54'),
(9, 'vibhor', 'gupta', 'vibhor@121gmail.com', NULL, '$2y$10$f5Wxr4Fgz6TmG52h2I5/bescJzlThnWEJanrwU72CgEJ5DUBLN.Vm', NULL, '2021-03-25 04:48:15', '2021-03-25 04:48:15'),
(10, 'Shivam', 'Sharma', 'shiv1212@gmail.com', NULL, '$2y$10$.KnFWQ09WZpfMFGYA7OtGeZY3Z0IytsDs1iKXsvp2tKgrgKlOSuOS', NULL, '2021-03-25 05:49:58', '2021-03-25 05:49:58'),
(11, 'raman', 'sharma', 'ramu@121gmail.com', NULL, '$2y$10$dByi9dRaZSq1KOKw2MHqVOyA0zXbehoC1KDFefdVmp.2RZYVUHWo6', NULL, '2021-03-26 03:22:41', '2021-03-26 03:22:41'),
(12, 'arti', 'pal', 'artipal@121gmail.com', NULL, '$2y$10$yrIDX.WL2we9ip2pVsMpMOJiPLo13hjKMscv1utCnHXAkcFIoy/by', NULL, '2021-04-02 04:07:42', '2021-04-02 04:07:42');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_user_address`
--
ALTER TABLE `tbl_user_address`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `foreignkey` (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user_address`
--
ALTER TABLE `tbl_user_address`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_user_address`
--
ALTER TABLE `tbl_user_address`
  ADD CONSTRAINT `foreignkey` FOREIGN KEY (`id`) REFERENCES `tbl_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
