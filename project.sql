-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 08:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$ahDXez8TYI2kpcwdxjusuu3seTfc.kAsKplazCR.GkxBkUUBu6u82', '012345678', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `title`, `content`, `img_banner`, `status`, `created_at`, `updated_at`) VALUES
(1, 'banner', 'About Payna Store', 'Welcome to my shop', 'uploads/banner\\1610522758banner-3.jpg', 1, '2021-01-04 11:55:46', '2021-01-13 00:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `slug`, `title`, `content`, `img_blog`, `id_admin`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Emu Oil For Anti Wrinkle', 'emu-oil-for-anti-wrinkle', 'Emu Oil For Anti Wrinkle', '<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-size: 14px; line-height: 1.88; color: #777777; font-family: Montserrat, sans-serif; background-color: #ffffff;\">Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus. Nulla facilisi. Duis aliquet, eros in auctor aliquam, tortor justo laoreet nisi, nec pulvinar lectus diam nec libero. Nullam sit amet dia</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-size: 14px; line-height: 1.88; color: #777777; font-family: Montserrat, sans-serif; background-color: #ffffff;\">Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend, ex risus gravida purus, sed finibus tortor nisi maximus orci. Etiam vel sollicitudin nisi. In ipsum tortor, vulputate nec est in, pharetra malesuada diam. Praesent ullamcorper lacinia ultrices. Etiam semper cursus mi, id tempor neque porta non. Praesent nec faucibus risus. Morbi aliquam hendrerit felis, eu cursus orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ante, id porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem, ut rhoncus tortor tincidunt eget. Phasellus eros massa, molestie id molestie a, maximus id tortor. Aenean sit amet arcu varius, elementum sapien ut, tristique est.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-size: 14px; line-height: 1.88; color: #777777; font-family: Montserrat, sans-serif; background-color: #ffffff;\"><img title=\"blog-details-2.jpg\" src=\"data:image/jpeg;base64,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\" alt=\"\" width=\"344\" height=\"351\" /></p>\r\n<h1 style=\"margin: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 70px; line-height: 90px; background-color: #ffffff; text-align: left;\">Lorem Ipsum</h1>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-size: 14px; line-height: 1.88; color: #777777; font-family: Montserrat, sans-serif; background-color: #ffffff;\"><strong style=\"margin: 0px; padding: 0px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-size: 14px; line-height: 1.88; color: #777777; font-family: Montserrat, sans-serif; background-color: #ffffff;\">&nbsp;</p>', 'uploads/blog\\1610739860blog-3.jpg', '1', 1, '2021-01-15 12:44:20', '2021-01-15 12:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(4, 'NIKE', 'nike', 'NIKE', 1, '2021-01-14 13:40:31', '2021-01-14 13:40:31'),
(5, 'GUCCI', 'gucci', 'GUCCI', 1, '2021-01-14 13:40:45', '2021-01-14 13:40:45'),
(6, 'BALENCIAGA', 'balenciaga', 'BALENCIAGA', 1, '2021-01-14 13:40:55', '2021-01-14 13:46:56'),
(7, 'ADIDAS', 'adidas', 'ADIDAS', 1, '2021-01-14 13:41:23', '2021-01-14 13:41:23'),
(8, 'FAKE', 'fake', 'FAKE', 1, '2021-01-14 13:41:36', '2021-01-14 13:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'áo len', 'ao-len', 'áo len', 1, '2021-01-14 13:34:32', '2021-01-14 13:34:32'),
(2, 'áo sơ mi', 'ao-so-mi', 'áo sơ mi', 1, '2021-01-14 13:34:55', '2021-01-14 13:34:55'),
(3, 'váy nữ', 'vay-nu', 'váy nữ', 1, '2021-01-14 13:35:37', '2021-01-14 13:35:37'),
(4, 'áo khoác', 'ao-khoac', 'áo khoác', 1, '2021-01-14 13:36:18', '2021-01-14 13:36:18'),
(5, 'đồ ngủ', 'do-ngu', 'đồ ngủ', 1, '2021-01-14 13:36:59', '2021-01-14 13:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `contact-users`
--

CREATE TABLE `contact-users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `address`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bkap', '0123554331', '238 Hoàng Quốc Việt,Cầu Giấy,Hà Nội', 'vthuong@gmail.com', 1, '2021-01-13 04:06:19', '2021-01-13 04:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact_users`
--

CREATE TABLE `contact_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_users`
--

INSERT INTO `contact_users` (`id`, `name`, `phone`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'thuong123', '0123456789', 'admin@gmail.com', 'sdaasdassd', '2021-01-13 04:59:49', '2021-01-13 04:59:49');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pro` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '12', 'uploads/logo\\1610524396logo.png', 1, '2021-01-13 00:53:16', '2021-01-13 00:53:16');

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
(4, '2020_12_29_171553_create_categories_table', 1),
(5, '2020_12_29_183119_create_brands_table', 1),
(6, '2020_12_29_193358_create_admins_table', 1),
(7, '2020_12_30_072236_create_products_table', 1),
(8, '2020_12_30_072348_create_product_images_table', 1),
(9, '2021_01_01_175301_create_product_details_table', 1),
(10, '2021_01_01_203141_create_size_table', 1),
(12, '2021_01_01_205457_create_sizes_table', 2),
(13, '2021_01_04_091342_create_banners_table', 3),
(14, '2021_01_06_110146_create_contacts_table', 4),
(15, '2021_01_06_135415_create_logos_table', 5),
(16, '2021_01_07_044944_create_blogs_table', 5),
(25, '2021_01_09_212810_create_orders_table', 6),
(26, '2021_01_09_220851_create_order_details_table', 6),
(27, '2021_01_11_080315_create_wishlists_table', 7),
(29, '2021_01_12_075449_create_feddbacks_table', 8),
(31, '2021_01_12_090746_create_feedback_table', 9),
(37, '2021_01_12_094426_create_feedback_table', 10),
(38, '2021_01_13_115720_create_contact_users_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` float NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `name`, `address`, `phone`, `total_price`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'thưởng', 'nam trực nam định', '0987654321', 578600, 'giao hàng trong giờ hành chính', 4, '2021-01-15 14:05:13', '2021-01-15 14:21:12'),
(2, 2, 'vũ văn thưởng', 'nam dinh', '0987654321', 390500, NULL, 0, '2021-01-15 20:11:58', '2021-01-15 20:11:58'),
(3, 2, 'vũ văn thưởng', 'nam dinh', '0987654321', 396000, NULL, 4, '2021-01-15 20:29:59', '2021-01-15 20:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_order` bigint(20) UNSIGNED NOT NULL,
  `id_pro_detail` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `id_order`, `id_pro_detail`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 135000.00, 2, '2021-01-15 14:05:13', '2021-01-15 14:05:13'),
(3, 2, 1, 135000.00, 1, '2021-01-15 20:11:58', '2021-01-15 20:11:58'),
(4, 2, 16, 220000.00, 1, '2021-01-15 20:11:58', '2021-01-15 20:11:58'),
(5, 3, 39, 90000.00, 4, '2021-01-15 20:29:59', '2021-01-15 20:29:59');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `avatar`, `slug`, `cat_id`, `brand_id`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'áo len bằng vải mềm', 'ALM', 'uploads/product\\1610657583hm-4-pro-1.jpg', 'ao-len-bang-vai-mem', 1, 5, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914  123 translation by H. Rackham.', 1, '2021-01-14 13:53:03', '2021-01-15 12:30:32'),
(2, 'Áo len nữ thu đông', 'ALN', 'uploads/product\\1610732094hm-4-pro-2.jpg', 'ao-len-nu-thu-dong', 1, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 10:34:54', '2021-01-15 10:34:54'),
(3, 'Áo sơ mi nữ form rộng', 'ASM', 'uploads/product\\1610732483hm-4-pro-3.jpg', 'ao-so-mi-nu-form-rong', 2, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 10:38:51', '2021-01-15 10:41:23'),
(4, 'Áo sơ mi cotton mỏng', 'ASMCT', 'uploads/product\\1610732441hm-1-pro-1.jpg', 'ao-so-mi-cotton-mong', 2, 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 10:40:41', '2021-01-15 11:19:23'),
(5, 'Váy dài', 'VAY', 'uploads/product\\1610732597hm-1-pro-2.jpg', 'vay-dai', 3, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 10:43:17', '2021-01-15 10:43:17'),
(6, 'Áo khoác cổ cao', 'AK', 'uploads/product\\1610733789hm-1-pro-3.jpg', 'ao-khoac-co-cao', 4, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 11:03:09', '2021-01-15 11:03:09'),
(7, 'Đầm nữ cao cấp thắt eo', 'DN', 'uploads/product\\1610734017hm-1-pro-4.jpg', 'dam-nu-cao-cap-that-eo', 3, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 11:06:57', '2021-01-15 11:06:57'),
(8, 'Bộ Pijama nữ mặc nhà', 'PJM', 'uploads/product\\1610734304hm-1-pro-5.jpg', 'bo-pijama-nu-mac-nha', 5, 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 11:11:44', '2021-01-15 11:19:13'),
(9, 'Váy thời trang freesize', 'VAY03', 'uploads/product\\1610735494hm-1-pro-8.jpg', 'vay-thoi-trang-freesize', 3, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 11:16:58', '2021-01-15 11:31:34'),
(10, 'Váy hoa satin', 'VH02', 'uploads/product\\1610735519hm-4-pro-6.jpg', 'vay-hoa-satin', 3, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 11:24:10', '2021-01-15 11:31:59'),
(11, 'ÁO KHOÁC BÒ JEANS NỮ', 'AK02', 'uploads/product\\1610736605hm-4-pro-7.jpg', 'ao-khoac-bo-jeans-nu', 4, 8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-01-15 11:50:05', '2021-01-15 11:50:05'),
(12, 'quần jogger', 'QJ', 'uploads/product\\1610767645b-details-prev.jpg', 'quan-jogger', 1, 5, 'aisdgasihdoasndkasd', 1, '2021-01-15 20:27:25', '2021-01-15 20:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pro` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `discount` double(8,2) NOT NULL,
  `sale_price` float NOT NULL,
  `quantity` int(11) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_size` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `id_pro`, `sku`, `price`, `discount`, `sale_price`, `quantity`, `status`, `id_size`, `created_at`, `updated_at`) VALUES
(1, 1, 'ALML', 150000, 10.00, 135000, 47, 1, 1, '2021-01-14 13:55:13', '2021-01-15 20:11:58'),
(2, 1, 'ALMM', 150000, 10.00, 135000, 50, 1, 2, '2021-01-14 13:55:35', '2021-01-14 13:55:35'),
(3, 1, 'ALMX', 150000, 20.00, 120000, 50, 1, 3, '2021-01-14 13:55:46', '2021-01-14 13:55:46'),
(4, 2, 'ALNL', 129000, 10.00, 116100, 100, 1, 1, '2021-01-15 12:04:54', '2021-01-15 12:04:54'),
(5, 2, 'ALNM', 129000, 0.00, 129000, 100, 1, 2, '2021-01-15 12:08:12', '2021-01-15 12:08:12'),
(6, 2, 'ALNX', 129000, 20.00, 103200, 100, 1, 3, '2021-01-15 12:08:33', '2021-01-15 12:08:33'),
(7, 2, 'ALNXL', 129000, 9.00, 117390, 100, 1, 4, '2021-01-15 12:08:46', '2021-01-15 12:08:46'),
(8, 3, 'ASML', 320000, 0.00, 320000, 50, 1, 1, '2021-01-15 12:10:00', '2021-01-15 12:10:00'),
(9, 3, 'ASMM', 320000, 0.00, 320000, 50, 1, 2, '2021-01-15 12:10:15', '2021-01-15 12:10:15'),
(10, 3, 'ASMX', 320000, 20.00, 256000, 50, 1, 3, '2021-01-15 12:10:27', '2021-01-15 12:10:27'),
(12, 4, 'ASMCTL', 390000, 0.00, 390000, 200, 1, 1, '2021-01-15 12:13:04', '2021-01-15 12:13:04'),
(13, 4, 'ASMCTM', 390000, 0.00, 390000, 200, 1, 2, '2021-01-15 12:13:13', '2021-01-15 12:13:13'),
(14, 4, 'ASMCTX', 390000, 0.00, 390000, 200, 1, 3, '2021-01-15 12:13:22', '2021-01-15 12:13:22'),
(15, 4, 'ASMCTXL', 390000, 0.00, 390000, 200, 1, 4, '2021-01-15 12:13:32', '2021-01-15 12:13:32'),
(16, 5, 'VAYL', 220000, 0.00, 220000, 49, 1, 1, '2021-01-15 12:14:01', '2021-01-15 20:11:58'),
(17, 5, 'VAYX', 220000, 0.00, 220000, 50, 1, 3, '2021-01-15 12:14:13', '2021-01-15 12:14:13'),
(18, 5, 'VAYXL', 220000, 0.00, 220000, 50, 1, 4, '2021-01-15 12:14:26', '2021-01-15 12:14:26'),
(19, 7, 'DNL', 111000, 0.00, 111000, 50, 1, 1, '2021-01-15 12:15:10', '2021-01-15 12:15:10'),
(20, 7, 'DNX', 111000, 0.00, 111000, 50, 1, 3, '2021-01-15 12:15:19', '2021-01-15 12:15:19'),
(21, 7, 'DNXL', 111000, 0.00, 111000, 50, 1, 4, '2021-01-15 12:15:26', '2021-01-15 12:15:26'),
(22, 9, 'VAY03L', 150000, 0.00, 150000, 50, 1, 1, '2021-01-15 12:15:47', '2021-01-15 12:15:47'),
(23, 9, 'VAY03X', 150000, 0.00, 150000, 50, 1, 3, '2021-01-15 12:15:53', '2021-01-15 12:15:53'),
(24, 9, 'VAY03XL', 150000, 0.00, 150000, 50, 1, 4, '2021-01-15 12:16:04', '2021-01-15 12:16:04'),
(25, 10, 'VH02L', 130000, 47.00, 68900, 100, 1, 1, '2021-01-15 12:16:54', '2021-01-15 12:16:54'),
(26, 10, 'VH02M', 130000, 30.00, 91000, 100, 1, 2, '2021-01-15 12:17:05', '2021-01-15 12:17:05'),
(27, 10, 'VH02X', 130000, 0.00, 130000, 100, 1, 3, '2021-01-15 12:17:14', '2021-01-15 12:17:14'),
(28, 10, 'VH02XL', 130000, 0.00, 130000, 100, 1, 4, '2021-01-15 12:17:20', '2021-01-15 12:17:20'),
(29, 6, 'AKL', 1000000, 10.00, 900000, 50, 1, 1, '2021-01-15 12:17:44', '2021-01-15 12:17:44'),
(30, 6, 'AKM', 1000000, 10.00, 900000, 50, 1, 2, '2021-01-15 12:17:53', '2021-01-15 12:17:53'),
(31, 6, 'AKXL', 1000000, 0.00, 1000000, 50, 1, 4, '2021-01-15 12:19:05', '2021-01-15 12:19:05'),
(32, 11, 'AK02L', 697000, 68.00, 223040, 50, 1, 1, '2021-01-15 12:19:44', '2021-01-15 12:19:44'),
(33, 11, 'AK02M', 697000, 50.00, 348500, 50, 1, 2, '2021-01-15 12:19:56', '2021-01-15 12:19:56'),
(34, 11, 'AK02X', 697000, 20.00, 557600, 50, 1, 3, '2021-01-15 12:20:08', '2021-01-15 12:20:08'),
(35, 11, 'AK02XL', 697000, 0.00, 697000, 50, 1, 4, '2021-01-15 12:20:18', '2021-01-15 12:20:18'),
(36, 8, 'PJML', 150000, 35.00, 97500, 50, 1, 1, '2021-01-15 12:21:25', '2021-01-15 12:21:25'),
(37, 8, 'PJMM', 150000, 20.00, 120000, 50, 1, 2, '2021-01-15 12:21:47', '2021-01-15 12:21:47'),
(38, 8, 'PJMXL', 150000, 10.00, 135000, 50, 1, 4, '2021-01-15 12:22:01', '2021-01-15 12:22:01'),
(39, 12, 'QJ01', 100000, 10.00, 90000, 46, 1, 1, '2021-01-15 20:28:47', '2021-01-15 20:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pro` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `id_pro`, `created_at`, `updated_at`) VALUES
(1, 'uploads/product\\1610657583hm-4-pro-1-2.jpg', 1, '2021-01-14 13:53:03', '2021-01-14 13:53:03'),
(2, 'uploads/product\\1610657583hm-4-pro-4.jpg', 1, '2021-01-14 13:53:03', '2021-01-14 13:53:03'),
(3, 'uploads/product\\1610657583hm-4-pro-4-2.jpg', 1, '2021-01-14 13:53:03', '2021-01-14 13:53:03'),
(4, 'uploads/product\\1610732094hm-4-pro-2-2.jpg', 2, '2021-01-15 10:34:54', '2021-01-15 10:34:54'),
(5, 'uploads/product\\1610732094hm-4-pro-4.jpg', 2, '2021-01-15 10:34:54', '2021-01-15 10:34:54'),
(6, 'uploads/product\\1610732094hm-4-pro-4-2.jpg', 2, '2021-01-15 10:34:54', '2021-01-15 10:34:54'),
(8, 'uploads/product\\1610732441hm-1-pro-1-2.jpg', 4, '2021-01-15 10:40:41', '2021-01-15 10:40:41'),
(9, 'uploads/product\\1610732483compare-2.jpg', 3, '2021-01-15 10:41:23', '2021-01-15 10:41:23'),
(10, 'uploads/product\\1610732597hm-1-pro-2-2.jpg', 5, '2021-01-15 10:43:17', '2021-01-15 10:43:17'),
(11, 'uploads/product\\1610733789b-large-1.jpg', 6, '2021-01-15 11:03:09', '2021-01-15 11:03:09'),
(12, 'uploads/product\\1610733789b-large-2.jpg', 6, '2021-01-15 11:03:09', '2021-01-15 11:03:09'),
(13, 'uploads/product\\1610733789b-large-3.jpg', 6, '2021-01-15 11:03:09', '2021-01-15 11:03:09'),
(14, 'uploads/product\\1610734017hm-1-pro-4-2.jpg', 7, '2021-01-15 11:06:57', '2021-01-15 11:06:57'),
(15, 'uploads/product\\1610734304hm-1-pro-5-2.jpg', 8, '2021-01-15 11:11:44', '2021-01-15 11:11:44'),
(17, 'uploads/product\\1610735050hm-4-pro-6-2.jpg', 10, '2021-01-15 11:24:10', '2021-01-15 11:24:10'),
(19, 'uploads/product\\1610735494b-large-6.jpg', 9, '2021-01-15 11:31:34', '2021-01-15 11:31:34'),
(20, 'uploads/product\\1610735494b-large-7.jpg', 9, '2021-01-15 11:31:34', '2021-01-15 11:31:34'),
(21, 'uploads/product\\1610735494b-large-8.jpg', 9, '2021-01-15 11:31:34', '2021-01-15 11:31:34'),
(22, 'uploads/product\\1610736605compare-1.jpg', 11, '2021-01-15 11:50:05', '2021-01-15 11:50:05'),
(23, 'uploads/product\\1610767645blog-3col-3.jpg', 12, '2021-01-15 20:27:25', '2021-01-15 20:27:25'),
(24, 'uploads/product\\1610767645blog-3col-4.jpg', 12, '2021-01-15 20:27:25', '2021-01-15 20:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'L', 1, NULL, NULL),
(2, 'M', 1, NULL, NULL),
(3, 'X', 1, NULL, NULL),
(4, 'XL', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phone`, `gender`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'thuong123', 'admin@gmail.com', 'nam trực nam định', '0123456789', 1, NULL, '$2y$10$tkLUzQpktjC6H4ae3v1PXeZjo1FG0CXKOc/n7f7f9yEdnGNZazOHW', NULL, '2021-01-08 05:38:12', '2021-01-09 01:46:51'),
(2, 'vũ văn thưởng', 'vthuong@gmail.com', 'nam dinh', '0987654321', 1, NULL, '$2y$10$0wirLqWlnchJssTyw02vROhbyk9evfOos9mCBstF.2CuLUpKxOK9C', NULL, '2021-01-09 15:54:59', '2021-01-09 15:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_pro` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `id_user`, `id_pro`, `status`, `created_at`, `updated_at`) VALUES
(7, 1, 125, 1, '2021-01-12 14:05:31', '2021-01-12 14:05:31'),
(8, 1, 128, 1, '2021-01-12 14:05:34', '2021-01-12 14:05:34'),
(9, 1, 123, 1, '2021-01-12 14:15:54', '2021-01-12 14:15:54'),
(10, 1, 121, 1, '2021-01-12 14:34:34', '2021-01-12 14:34:34'),
(11, 2, 4, 1, '2021-01-15 14:03:46', '2021-01-15 14:03:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact-users`
--
ALTER TABLE `contact-users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_users`
--
ALTER TABLE `contact_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_id_pro_foreign` (`id_pro`),
  ADD KEY `feedback_id_user_foreign` (`id_user`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id_user_foreign` (`id_user`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_id_order_foreign` (`id_order`),
  ADD KEY `order_details_id_pro_detail_foreign` (`id_pro_detail`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_details_id_pro_foreign` (`id_pro`),
  ADD KEY `fk_pro_size` (`id_size`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_id_pro_foreign` (`id_pro`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_id_user_foreign` (`id_user`),
  ADD KEY `wishlists_id_pro_foreign` (`id_pro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact-users`
--
ALTER TABLE `contact-users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_users`
--
ALTER TABLE `contact_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_id_pro_foreign` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `feedback_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_id_pro_detail_foreign` FOREIGN KEY (`id_pro_detail`) REFERENCES `product_details` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `fk_pro_size` FOREIGN KEY (`id_size`) REFERENCES `sizes` (`id`),
  ADD CONSTRAINT `product_details_id_pro_foreign` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_id_pro_foreign` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_id_pro_foreign` FOREIGN KEY (`id_pro`) REFERENCES `product_details` (`id`),
  ADD CONSTRAINT `wishlists_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
