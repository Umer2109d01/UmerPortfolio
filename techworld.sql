-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2022 at 11:49 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', '2022-09-30 05:42:36', '2022-09-30 05:42:36'),
(2, 'Computer', '2022-09-30 05:42:42', '2022-09-30 05:42:42'),
(3, 'Tablet', '2022-10-01 02:39:03', '2022-10-01 02:39:03'),
(4, 'Accessories', '2022-10-01 02:39:16', '2022-10-01 02:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `Cont_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Con_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Con_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Con_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Con_message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Cont_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Cont_id`, `Con_name`, `Con_email`, `Con_number`, `Con_message`, `created_at`, `updated_at`) VALUES
(3, 'Umer', 'umer@gmail.com', '0323252514', 'Message good', '2022-09-28 03:30:03', '2022-09-28 03:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `continuecarttbls`
--

DROP TABLE IF EXISTS `continuecarttbls`;
CREATE TABLE IF NOT EXISTS `continuecarttbls` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `continuecarttbls`
--

INSERT INTO `continuecarttbls` (`id`, `productid`, `name`, `subtotal`, `created_at`, `updated_at`, `address`, `number`) VALUES
(9, 32, 'Umer Farooq', 'Total Rs129400', '2022-10-14 05:33:33', '2022-10-14 05:33:33', 'garden karachi', 535634463),
(15, 13, 'Samiullah', 'Total Rs72000', '2022-10-14 09:59:52', '2022-10-14 09:59:52', 'karachi', 123456789),
(16, 25, 'Samiullah', 'Total Rs22500', '2022-10-14 17:04:18', '2022-10-14 17:04:18', 'Ranchorline Hoti Market', 42342342);

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_09_09_114019_create_signups_table', 1),
(5, '2022_09_13_122530_create_categories_table', 1),
(6, '2022_09_13_123651_create_products_table', 1),
(7, '2022_09_13_124955_create_orders_table', 1),
(8, '2022_09_13_125031_create_contacts_table', 1),
(9, '2022_09_13_125126_create_admins_table', 1),
(10, '2022_10_13_125305_create_continuecarttbls_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `O_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `O_custname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `O_ordername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`O_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('umer@gmail.com', '$2y$10$1m2RlSx87uRScS26grNve.QlrH2KlxRbum/YEdc8Nb.8waCQKGFV.', '2022-09-28 04:38:20');

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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(1900) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_cat_id_foreign` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `image`, `type`, `desc`, `cat_id`, `created_at`, `updated_at`) VALUES
(26, 'WD Blue 1TB PC Mobile Hard Disk Drive - (New | Pulled-Out) WD10SPZX', 5900, 30, '1203946664.20product.jpg', 'NEW', 'Built to WD’s high standards of quality and reliability, WD Blue mobile hard drives offer the features that are ideal for your everyday mobile computing needs.  128MB Cache 5400 rpm Interface SATA 6Gb/s Form Factor 2.5 Inch', 4, '2022-10-12 04:30:19', '2022-10-12 04:30:19'),
(15, 'Lenovo ThinkPad T14 G3 i5', 35000, 12, '871090904.9product.jpg', 'NEW', 'Intel Core i5 12th Gen 3.3 / 4.4 Ghz, 14\" Screen, 16 GB RAM, 512 GB SSD, Fingerprint, Intel Integrated Graphics, No Optical Drive, Windows 10 Professional, 2.65 lbs', 1, '2022-10-10 03:21:14', '2022-10-10 03:21:14'),
(14, 'Xiaomi Pad 5 - (256GB) :1y', 76900, 8, '1166583952.8product.jpg', 'NEW', '11.0\" Android Phone, 6 GB RAM, 256 GB Storage, 1600 x 2560 pixels, Single Camera: 13 MP, Selfie: 8 MP, 8720 mAh Battery, 511 g', 3, '2022-10-10 03:19:23', '2022-10-10 03:19:23'),
(18, 'Ease G24I28 24″ 16:9 280 Hz IPS Fast Gaming Monitor', 46999, 13, '968591439.12product.jpg', 'NEW', 'The EASE G24I28-280HZ Prime can draw up to 280 frames per second, which reduces eye fatigue overwhelmingly compared to a typical 60-frame monitor, allowing you to experience an overwhelming difference in the game', 2, '2022-10-10 03:27:59', '2022-10-10 03:27:59'),
(20, 'HP ProBook 450 G9 Laptop - Intel Core i7', 110000, 19, '631552899.14product.jpg', 'NEW', 'Intel Core i7-1255U (12 MB L3 cache, 10 Cores, 12 Threads) 8 GB DDR4-3200 MHz RAM, 512 GB PCIe® NVMe™ SSD Intel Iris Xe Graphics 15.6\" HD Display', 1, '2022-10-12 02:21:54', '2022-10-12 02:21:54'),
(23, 'Asus TUF Dash F15 FX517ZM Gaming Laptop - ...', 274900, 12, '1313418712.17product.jpg', 'NEW', 'Clean lines define the look and feel of the n...  Intel Core i7-12650H Processor 16GB DDR5, 512GB M.2 NVMe™ PCIe® 3.0 SSD NVIDIA® GeForce RTX 3060 Laptop GPU, Backlit Chiclet Keyboard 15.6\" FHD IPS 144Hz, Windows 11 Home', 1, '2022-10-12 04:20:43', '2022-10-12 04:20:43'),
(24, 'HP ENVY x360 15-EW0023DX Touchscreen Lapto...', 225000, 10, '270747158.18product.jpg', 'NEW', 'Intel Evo platform powered by 12th Generation Intel Core i7-1255U 16 GB DDR4-3200 MHz RAM, 512 GB PCIe NVMe M.2 SSD Intel Iris Xe Graphics, Backlit keyboard Windows 11 Home, 15.6\" FHD IPS Touchscreen', 1, '2022-10-12 04:21:49', '2022-10-12 04:21:49'),
(27, 'A4Tech OP-330S Wired USB Mouse', 750, 30, '509361861.21product.jpg', 'NEW', 'The A4tech optical wheel Mouse with hyper-fast scrolling for increased productivity. A nearly frictionless scroll wheel lets you fly through long documents and Web pages with a single flick. Experience smoother cursor control on virtually any surface. Contoured design gives you more support and control.', 4, '2022-10-12 04:32:40', '2022-10-12 04:32:40'),
(28, 'MERCUSYS MS105G 5-Port Gigabit Desktop Switch', 2300, 15, '1808945624.22product.jpg', 'NEW', 'Five 10/100/1,000 Mbps auto-negotiation RJ45 ports with auto MDI / MDIX supported.  Easily wired network expansion Compact design for flexible arrangement Plug and play setup, no configuration required Green Ethernet technology saves power by up to 82%', 4, '2022-10-12 04:36:46', '2022-10-12 04:36:46'),
(29, 'Gigabyte Memory 8GB 2666MHz DDR4 - GP-GR26C16S8K1HU408', 6900, 15, '1133120680.23product.jpg', 'NEW', 'The GIGABYTE Memory kit is built on a ten-layer, sophisticatedly engineered PCB that ensures the stability and high performance of the selected Ics.  Frequency:DDR4-2666 MHz Timing:16-16-16-35 Voltage:1.2V Profile: XMP 2.0', 4, '2022-10-12 04:38:22', '2022-10-12 04:38:22'),
(32, 'ViewSonic VP2468a 24\" ColorPro Monitor - F...', 73500, 14, '657770918.26product.jpg', 'NEW', 'The ViewSonic® VP2468a is a 24’’ (23.8\" viewa...  23.8\" IPS Full HD (1920x1080) LED Reduce Clutter with Single-Cable Solution Anti-glare, Hard coating (3H) Professional Color Processing', 2, '2022-10-13 07:02:58', '2022-10-13 07:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'umer', 'umer@gmail.com', NULL, '$2y$10$YN63K4bpnVne0wz6AHDYVuY/939jLrQG6ThbdE40FQ5WtYBafgV1S', NULL, 1, '2022-09-28 04:26:57', '2022-09-28 04:26:57'),
(2, 'Umer Farooq', 'umer@aptechgdn.net', NULL, '$2y$10$ZhHR.a5bgocp6KDTMabzoO/f.15c6m4aV2UoQ8isaU53Ei3h.EBAW', NULL, 0, '2022-10-08 07:36:57', '2022-10-08 07:36:57'),
(4, 'Samiullah', 'sami@gmail.com', NULL, '$2y$10$xm9Vz3UQfwHbcPcV1VOk9u//4J4wIJgW0Rpg78wIb8X2uj1t.3kvS', NULL, 1, '2022-10-12 04:51:08', '2022-10-12 04:51:08'),
(5, 'Babar', 'babar@gmail.com', NULL, '$2y$10$3fdHdhysFJWN77i3MXwlMe5Trv0kuFV3CTvSFtH0/hmwCcfR.VUdC', NULL, 1, '2022-10-14 18:46:46', '2022-10-14 18:46:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
