-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2022 at 10:27 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

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
(1, 'saqlain@gmail.com', 'saqlain123', '2022-10-19 03:00:01', '2022-10-19 03:00:01');

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
  `status` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `btnText`, `btnLink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'banner.jpg', 'SIGN UP', 'http://localhost:8000/registration', 1, '2022-11-19 12:19:48', '2022-11-28 05:13:58'),
(2, 'banner2.jpg', 'CONTACT US', 'http://localhost:8000/contact', 1, '2022-11-19 12:25:08', '2022-11-28 05:15:42'),
(4, 'banner3.jpg', 'SHOP NOW', 'http://localhost:8000/category', 1, '2022-11-19 12:41:03', '2022-11-28 20:41:04'),
(7, 'banner4.jpg', 'ABOUT US', 'http://localhost:8000/about', 1, '2022-11-27 20:21:20', '2022-11-28 05:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `image`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Greeting Cards', 'category6.jpeg', 1, '2022-11-28 05:42:57', '2022-11-28 05:42:57'),
(7, 'Gift Items', 'category5.jpg', 1, '2022-10-19 20:50:43', '2022-11-28 05:41:56'),
(9, 'Beauty Products', 'category3.jpg', 1, '2022-11-07 06:08:00', '2022-11-28 05:26:07'),
(11, 'Women Purse', 'category1.jpg', 1, '2022-11-17 20:31:26', '2022-11-28 05:33:15'),
(13, 'Men\"s Products', 'category4.jpg', 1, '2022-11-25 06:36:36', '2022-11-28 05:39:20'),
(15, 'Files and More', 'category7.jpg', 1, '2022-11-28 05:50:45', '2022-11-28 05:50:45');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `city`, `status`, `created_at`, `updated_at`) VALUES
(1, 'muhammad Ali', 'mali@gmail.com', 'cyber123', 'karachi', 1, '2022-11-11 01:37:50', '2022-11-11 01:37:50'),
(2, 'zubair', 'zubi@gmail.com', 'zubi1234', 'lahore', 1, '2022-11-15 10:36:02', '2022-11-15 10:36:02'),
(3, 'Saqlain Dawood', 'saqlain@gmail.com', 'jjk;gfbkj', 'karachi', 1, NULL, NULL),
(4, 'shabbir', 'shabbir@gmail.com', 'gfrty654', 'islamabad', 1, '2022-11-26 05:51:29', '2022-11-26 05:51:29'),
(5, 'hasnain', 'hasnain!@gmail.cpm', 'cyber234', 'Multan', 1, '2022-11-26 21:31:53', '2022-11-26 21:31:53'),
(6, 'ibad', 'ibad@gmail.com', '12345678', 'khi', 1, '2022-11-29 05:24:39', '2022-11-29 05:24:39');

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
(3, '2022_10_19_091916_create_categories_table', 2),
(4, '2022_11_07_154850_create_products_table', 3),
(5, '2022_11_11_013501_create_customers_table', 4),
(6, '2022_11_19_155629_create_banners_table', 5);

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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decript` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(255) NOT NULL,
  `code` int(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryId`, `name`, `image`, `decript`, `price`, `status`, `code`, `created_at`, `updated_at`) VALUES
(1, 9, 'Enchanter Perfume Pink', 'female1.jpg', 'Enchanter Perfume with pink roses\r\nlong lasting  fragrance', '750', 1, 1001, '2022-11-08 21:41:36', '2022-11-28 11:27:54'),
(2, 9, 'Enchanter Perfume Yellow', 'female3.jpg', 'Enchanter Beauty And soothing perfume for females\r\nwith Yellow roses falvor', '750', 1, 1002, '2022-11-09 05:24:09', '2022-11-28 11:07:00'),
(5, 9, 'Enchanter Perfume Tulip', 'female2.jpg', 'Enchanter tulip flavor perfume with long lasting soothing \r\nfragrance purple touch', '750', 1, 1003, '2022-11-19 23:41:02', '2022-11-28 11:29:44'),
(7, 9, 'Enchanter Lotion Red', 'female7.jpg', 'Red flowers moisturizing body lotion for beauty\r\ngives feminine touch to skin', '650', 1, 1004, '2022-11-25 06:35:09', '2022-11-28 11:31:53'),
(8, 9, 'Enchanter Lotion Pale', 'female6.jpg', 'Yellow flowers moisturizing body lotion for beauty gives feminine touch to skin', '650', 1, 1005, '2022-11-28 11:34:15', '2022-11-28 11:34:15'),
(9, 9, 'Enchanter Lotion Pink', 'female5.jpg', 'Pink Roses moisturizing body lotion for beauty gives feminine touch to skin', '650', 1, 1006, '2022-11-28 11:37:09', '2022-11-28 11:38:14'),
(10, 11, 'Velvet Purse', 'purse1.jpg', 'Light skin color purse for females\r\nwith golden zips and shiny surface hand bag', '1600', 1, 1007, '2022-11-28 11:41:17', '2022-11-29 04:23:21'),
(11, 11, 'Black Lined Purse', 'purse2.jpg', 'Black leather purse females fashion fascinating\r\n lining design with multiple pouches inside hand bag', '1900', 1, 1008, '2022-11-28 11:44:11', '2022-11-29 04:24:49'),
(12, 11, 'Pink Feather', 'purse5.png', 'Bright pink feather touch purse having a smooth slimmery touch\r\nwith golden edges at hand bag', '2200', 1, 1009, '2022-11-28 11:48:54', '2022-11-29 04:25:37'),
(13, 11, 'Leather Skin', 'purse3.jpg', 'Bright color leather purse having a smooth touch with beauty \r\nlooking hand bag new style', '2100', 1, 1010, '2022-11-28 11:52:31', '2022-11-29 04:26:34'),
(14, 14, 'Greeting Birthday Card', 'card9.jpg', 'A beautiful greeting card for your closest one \r\nwishing card with greetings', '150', 1, 1011, '2022-11-28 11:59:53', '2022-11-28 11:59:53'),
(15, 14, 'Anniversary Greeting Card', 'card3.jpg', 'Greeting cards for your closest one with all the best wishes\r\nin that with glitters', '170', 1, 1012, '2022-11-28 12:03:27', '2022-11-28 12:03:27'),
(16, 14, 'Greeting Birthday Card', 'card4.jpg', 'Greeting cards for your closest one with all the best wishes in that with glitters', '140', 1, 1013, '2022-11-28 12:07:03', '2022-11-28 12:07:03'),
(17, 14, 'Best Wishes Card', 'card2.jpg', 'Greeting cards for your closest one with all the best wishes in that with glitters', '180', 1, 1014, '2022-11-28 12:07:58', '2022-11-28 12:07:58'),
(18, 14, 'Best Wishes Card', 'card8.jpg', 'Greeting cards for your closest one with all the best wishes in that with glitters', '140', 1, 1015, '2022-11-28 12:08:45', '2022-11-28 12:08:45'),
(19, 14, 'New Year Card', 'card6.jpg', 'Greeting cards for your closest one with all the best wishes in that with glitters', '120', 1, 1016, '2022-11-28 12:09:28', '2022-11-28 12:09:28'),
(20, 14, 'New Year Card', 'card5.jpg', 'Greeting cards for your closest one with all the best wishes in that with glitters', '120', 1, 1017, '2022-11-28 12:10:39', '2022-11-28 12:10:39'),
(21, 14, 'New Year Card', 'card7.jpg', 'Greeting cards for your closest one with all the best wishes in that with glitters', '130', 1, 1018, '2022-11-28 12:11:39', '2022-11-28 12:11:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
