-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2021 at 11:58 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darwill`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `assigned_office_id` int NOT NULL,
  `customer_firstname` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_lastname` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_zipcode` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_last_purchase` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `assigned_office_id`, `customer_firstname`, `customer_lastname`, `customer_address`, `customer_zipcode`, `date_of_last_purchase`, `created_at`, `updated_at`) VALUES
(1, 2, 'Jack', 'Black', '135 Pine Dr.', '63232', '2020-10-02', '2021-05-14 22:58:32', '2021-05-14 22:58:32'),
(2, 36, 'Jane', 'White', '452 Maple Ave.', '60808', '2018-06-14', '2021-05-14 23:00:24', '2021-05-14 23:00:24'),
(3, 43, 'Janice', 'Brown', '112 Fur St.', '70893', '2019-04-24', '2021-05-14 23:02:13', '2021-05-14 23:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_14_170427_create_office_territories_table', 1),
(5, '2021_05_14_170652_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `office_territories`
--

DROP TABLE IF EXISTS `office_territories`;
CREATE TABLE IF NOT EXISTS `office_territories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `owner_id` int NOT NULL,
  `office_id` int NOT NULL,
  `office_address` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_hours` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_phone_number` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `assigned_zipcode` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_territories`
--

INSERT INTO `office_territories` (`id`, `owner_id`, `office_id`, `office_address`, `office_hours`, `office_phone_number`, `assigned_zipcode`, `created_at`, `updated_at`) VALUES
(1, 213, 2, '123 Main St', '9-5', '555-555-5555', '60808', '2021-05-14 22:30:36', '2021-05-14 22:30:36'),
(2, 213, 2, '123 Main St', '9-5', '555-555-5555', '60831', '2021-05-14 22:32:57', '2021-05-14 22:32:57'),
(3, 213, 2, '123 Main St', '9-5', '555-555-5555', '60834', '2021-05-14 22:33:58', '2021-05-14 22:33:58'),
(4, 213, 54, '456 Main St', '8-4', '444-444-4444', '63232', '2021-05-14 22:34:10', '2021-05-14 22:35:59'),
(5, 213, 54, '456 Main St', '8-4', '444-444-4444', '63432', '2021-05-14 22:37:09', '2021-05-14 22:37:09'),
(6, 300, 32, '789 Oak St', '8-4', '333-333-3333', '78645', '2021-05-14 22:38:48', '2021-05-14 22:38:48'),
(7, 300, 32, '789 Oak St', '8-4', '333-333-3333', '76854', '2021-05-14 22:39:50', '2021-05-14 22:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
