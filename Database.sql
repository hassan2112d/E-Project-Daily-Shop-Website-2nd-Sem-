-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2022 at 11:36 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myecomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'saqlain@gmail.com', 'saqlain123', '2022-12-02 10:19:49', '2022-12-02 10:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btnText` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btnLink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `btnText`, `btnLink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'banner.jpg', 'Shop NOw', 'http://localhost:8000/category', 1, '2022-12-02 05:26:59', '2022-12-02 05:26:59'),
(2, 'banner4.jpg', 'Contact Us', 'http://localhost:8000/contact', 1, '2022-12-02 05:32:06', '2022-12-02 05:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(225) NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Beauty Product', 1, 'category3.jpg', '2022-12-02 05:31:01', '2022-12-02 05:31:01'),
(2, 'Women purse', 1, 'category1.jpg', '2022-12-02 05:38:30', '2022-12-02 05:38:30'),
(3, 'greeting cards', 1, 'category6.jpeg', '2022-12-02 05:52:08', '2022-12-02 05:52:08'),
(4, 'MENS ITEM', 1, 'category4.jpg', '2022-12-02 06:05:52', '2022-12-02 06:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `city`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hassan', 'hassan@gmail.com', 'cyber123', 'karachi', 1, '2022-12-02 05:33:48', '2022-12-02 05:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_10_19_023812_create_admins_table', 1),
(3, '2022_10_19_091916_create_categories_table', 1),
(4, '2022_11_07_154850_create_products_table', 1),
(5, '2022_11_11_013501_create_customers_table', 1),
(6, '2022_11_19_155629_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryId` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decript` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryId`, `name`, `decript`, `price`, `image`, `code`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'Enchanter Lotion', 'Enchanter body lotion red', '780', 'female7.jpg', 100, '2022-12-02 05:42:27', '2022-12-02 05:42:27', 1),
(2, 2, 'Purse', 'Best Material Purse', '899', 'purse1.jpg', 107, '2022-12-02 05:45:18', '2022-12-02 05:45:18', 1),
(3, 2, 'Purse', 'Best material Purse', '899', 'purse3.jpg', 110, '2022-12-02 05:48:19', '2022-12-02 05:48:19', 1),
(4, 2, 'Purse', 'Best material Purse', '899', 'purse2.jpg', 111, '2022-12-02 05:49:12', '2022-12-02 05:49:12', 1),
(7, 3, 'Wedding Card', 'Happy Anniversory', '299', 'card3.jpg', 115, '2022-12-02 05:57:27', '2022-12-02 05:57:27', 1),
(6, 2, 'Purse', 'Best Material Purse', '899', 'purse5.png', 113, '2022-12-02 05:50:18', '2022-12-02 05:50:18', 1),
(8, 3, 'New Year Card', 'New Year Card', '299', 'card6.jpg', 120, '2022-12-02 05:59:30', '2022-12-02 05:59:30', 1),
(9, 3, 'New Year Card', 'New Year Card', '299', 'card5.jpg', 121, '2022-12-02 06:00:04', '2022-12-02 06:00:04', 1),
(10, 1, 'Perfume', 'Enchanter Perfume', '599', 'female2.jpg', 122, '2022-12-02 06:01:39', '2022-12-02 06:01:39', 1),
(11, 1, 'Perfume', 'Enchanter Perfume', '599', 'female3.jpg', 124, '2022-12-02 06:03:07', '2022-12-02 06:03:07', 1),
(12, 1, 'Perfume', 'Enchanter Perfume', '599', 'female1.jpg', 126, '2022-12-02 06:03:34', '2022-12-02 06:03:34', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
