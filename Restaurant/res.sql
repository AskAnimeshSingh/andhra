-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2023 at 11:13 AM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `res`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_stocks`
--

CREATE TABLE `add_stocks` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `unit` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `stock_received_from` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `birthday` date DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` enum('admin','user','kitchen','staff') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_id` bigint DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `email`, `password`, `phone`, `bio`, `birthday`, `img`, `type`, `branch_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '$2y$10$cgOL3JHHtUqtG6VCcqbhmOGT/K4OeDs.n9N9aJQCS6r9L0R0X8iuC', '8009610334', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias minus quod dignissimos.', NULL, NULL, 'admin', NULL, 1, '2022-11-11 01:08:50', '2023-10-05 23:52:44'),
(2, 'Himanshu', 'Mehta', 'himanshu@gmail.com', '$2y$10$cgOL3JHHtUqtG6VCcqbhmOGT/K4OeDs.n9N9aJQCS6r9L0R0X8iuC', '2525252552', '<p><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; text-align: left; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left; orphans: 2; text-indent: 0px; widows: 2; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify;\"><font face=\"Open Sans, Arial, sans-serif\"><b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</b></font><br></p></div>', NULL, '/public/assets/admin/assets/img/default_cate.jpeg', 'kitchen', NULL, 1, '2023-02-01 01:47:39', '2023-10-11 00:01:57'),
(3, 'Mahender Singh', 'Mahender Singh', 'mahender@gmail.com', '$2y$10$cgOL3JHHtUqtG6VCcqbhmOGT/K4OeDs.n9N9aJQCS6r9L0R0X8iuC', '5435165464', NULL, NULL, '/public/assets/admin/assets/img/default_cate.jpeg', 'admin', NULL, 1, '2023-02-01 08:21:46', '2023-02-15 01:30:13'),
(4, 'qwerty', 'qwerty', 'admin@gmail.com', '$2y$10$BmtoiBjc3.GA/3qRaq3FQunOuMSj4HtNJYeolBvqxWSb8nhTKbaCa', '1234567890', NULL, NULL, '/public/assets/admin/assets/img/admin/167714260063f72a4814e8d.jpg', 'admin', 2, 1, '2023-02-23 03:26:40', '2023-02-23 03:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by_id` bigint UNSIGNED NOT NULL,
  `created_date` date NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `description`, `created_by_id`, `created_date`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sample blog', '<p><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; text-align: left; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>', 1, '2023-02-23', '/public/assets/admin/assets/img/blog/167713777163f7176b81d2d.jpg', 1, '2023-02-23 02:06:11', '2023-02-23 02:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `booking_tables`
--

CREATE TABLE `booking_tables` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_fee` double NOT NULL,
  `dollor` tinyint NOT NULL DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `phone`, `address`, `delivery_fee`, `dollor`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Branch 1', '9965768294', 'Dibrugarh west', 30, 1, 1, '2023-03-20 07:03:04', '2023-03-20 07:04:01'),
(2, 'Branch 2', '9996557284', 'Dibrugarh East', 20, 1, 1, '2023-03-20 07:03:54', '2023-03-20 07:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `cate_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `cate_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Burger', '/public/assets/admin/assets/img/category/1679036588641410ac1f579.jpg', 1, '2023-03-17 01:33:08', '2023-03-17 01:33:08'),
(2, 'Pizza', '/public/assets/admin/assets/img/category/1679036675641411030be79.jpg', 1, '2023-03-17 01:34:35', '2023-03-17 01:34:35'),
(3, 'Chinese', '/public/assets/admin/assets/img/category/167903672364141133cf568.jpg', 1, '2023-03-17 01:35:23', '2023-03-17 01:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_fee` double NOT NULL,
  `dollor` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL COMMENT '0 = active, 1 = inactive',
  `phone` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `first_name`, `last_name`, `image`, `email`, `status`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'Anita', 'Verma', '/public/uploads/chef/img/1683185850645360ba3828a.jpg', 'anita@gmail.com', 0, 123456859, '2023-05-04 02:06:56', '2023-05-04 02:14:30'),
(3, 'Sanjay', 'Mishra', '/public/uploads/chef/img/16831868126453647ced23f.jpg', 'sanjay@gmail.com', 0, 5632635154, '2023-05-04 02:23:32', '2023-05-04 02:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` bigint UNSIGNED NOT NULL,
  `sub_cate_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `combopacks`
--

CREATE TABLE `combopacks` (
  `id` bigint UNSIGNED NOT NULL,
  `package_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `price` double(8,2) NOT NULL,
  `tax` double(8,2) NOT NULL DEFAULT '0.00',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `combopacks`
--

INSERT INTO `combopacks` (`id`, `package_name`, `start_date`, `end_date`, `status`, `price`, `tax`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Chinese Platter', '2023-03-17', '2023-05-31', 1, 30.00, 5.00, '/public/assets/admin/assets/img/combo/167904329464142ade257ab.jpg', '2023-03-17 03:24:54', '2023-03-17 03:24:54'),
(2, 'Test combo', '2023-03-30', '2023-05-31', 1, 60.00, 2.00, '/public/assets/admin/assets/img/combo/16801759386425734274343.png', '2023-03-30 06:02:18', '2023-03-30 06:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `combo_products`
--

CREATE TABLE `combo_products` (
  `id` bigint UNSIGNED NOT NULL,
  `pack_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `combo_products`
--

INSERT INTO `combo_products` (`id`, `pack_id`, `product_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 1, '2023-03-17 03:24:54', '2023-03-17 03:24:54'),
(2, 2, 1, 1, '2023-03-30 06:02:18', '2023-03-30 06:02:18'),
(3, 2, 3, 1, '2023-03-30 06:02:18', '2023-03-30 06:02:18'),
(4, 2, 4, 1, '2023-03-30 06:02:18', '2023-03-30 06:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `coupon_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `discount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `product_id`, `start_date`, `end_date`, `status`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'NEW', NULL, '2023-03-17', '2023-07-31', 1, 10.00, '2023-03-17 03:38:18', '2023-03-17 03:38:18'),
(2, 'TEST', NULL, '2023-04-18', '2023-06-30', 1, 5.00, '2023-04-18 06:32:08', '2023-04-18 06:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `name`, `email`, `phone`, `password`, `branch_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Delivery Guy 2', 'delivery2@gmail.com', '9965572842', '$2y$10$3xmFaKzToLhLbp6Dvh426.A0Er03wSxG95XGeRFbmUhVJ1HKjoK9K', 1, '/public/assets/admin/assets/img/delivery/1679317410641859a2e514a.png', 1, '2023-03-20 07:33:06', '2023-03-20 07:33:31'),
(2, 'Delivery Dev', 'del@gmail.com', '7678192083', '$2y$10$za84j7cmKMUQDzGyG947OuGuQfnfQnwD4KTTovUB/dB1H.fBiGXHq', 1, '/assets/admin/assets/img/delivery/1681797381643e310577a18.png', 1, '2023-03-20 07:34:49', '2023-04-18 02:32:31'),
(3, 'Delivery Guy 3', 'delivery3@gmail.com', '9965768293', '$2y$10$cr/YiEq4FHY0li3y.dr2U.qs9OGqkeM7BAiYw4Eh1glkdA8kfN1Xi', 2, '/public/assets/admin/assets/img/delivery/167931762564185a79e964a.png', 1, '2023-03-20 07:37:06', '2023-03-20 07:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_charges`
--

CREATE TABLE `delivery_charges` (
  `id` bigint NOT NULL,
  `charges` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_charges`
--

INSERT INTO `delivery_charges` (`id`, `charges`, `status`, `created_at`, `updated_at`) VALUES
(1, '11.00', 1, '2023-03-23 05:38:42', '2023-03-23 02:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission` double NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_purchases`
--

CREATE TABLE `food_purchases` (
  `id` bigint UNSIGNED NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `supplier_id` bigint UNSIGNED NOT NULL,
  `invoice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payment_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_item` bigint UNSIGNED DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `total_amnt` double NOT NULL,
  `due_amnt` double NOT NULL,
  `paid_amnt` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_purchase_histories`
--

CREATE TABLE `food_purchase_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `food_purchase_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `qty` double NOT NULL,
  `price` double NOT NULL,
  `total_price` double NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` mediumint DEFAULT NULL,
  `back_logo_col` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_foot_col` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_col` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` double(8,2) DEFAULT '0.00',
  `discount` double(8,2) NOT NULL DEFAULT '0.00',
  `timezone` time DEFAULT NULL,
  `bill_head` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_foot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_foot` int DEFAULT NULL,
  `order_detail` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beep_sound` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_table` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_delivery_addresses`
--

CREATE TABLE `home_delivery_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bussiness_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cross_street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ind_grps`
--

CREATE TABLE `ind_grps` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ind_grps`
--

INSERT INTO `ind_grps` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Veg Toppings', 1, '2023-03-17 01:52:23', '2023-03-17 01:52:23'),
(2, 'Non Veg Toppings', 1, '2023-03-17 01:52:34', '2023-03-17 01:52:34'),
(3, 'Crust', 1, '2023-03-17 01:56:17', '2023-03-17 01:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `ind_items`
--

CREATE TABLE `ind_items` (
  `id` bigint UNSIGNED NOT NULL,
  `ind_grp_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ind_items`
--

INSERT INTO `ind_items` (`id`, `ind_grp_id`, `name`, `unit`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'New Hand Tossed', '10', 1, '2023-03-17 01:58:22', '2023-03-17 01:58:22'),
(2, 3, '100% Wheat Thin Crust', '10', 1, '2023-03-17 01:58:55', '2023-03-17 01:58:55'),
(3, 3, 'Fresh Pan Pizza', '10', 1, '2023-03-17 01:59:26', '2023-03-17 01:59:26'),
(4, 3, 'Cheese Brust', '10', 1, '2023-03-17 01:59:42', '2023-03-17 01:59:42'),
(5, 3, 'Classic Hand Tossed', '10', 1, '2023-03-17 02:00:02', '2023-03-17 02:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_purchase`
--

CREATE TABLE `ingredient_purchase` (
  `id` int NOT NULL,
  `branch_id` int DEFAULT NULL,
  `supplier_id` int DEFAULT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `purchase_date` varchar(255) DEFAULT NULL,
  `description` tinytext,
  `payment_type` enum('cash','cc') DEFAULT NULL,
  `total_amount` decimal(11,2) DEFAULT NULL,
  `paid_amount` decimal(11,2) DEFAULT NULL,
  `due_amount` decimal(11,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_stocks`
--

CREATE TABLE `ingredient_stocks` (
  `id` int NOT NULL,
  `ingredients_purchase_id` int DEFAULT NULL,
  `branch_id` int NOT NULL,
  `ingredient_id` int NOT NULL,
  `stock` int NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `heading` text,
  `message` text,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `discount` double(8,2) DEFAULT '0.00',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `product_id`, `start_date`, `end_date`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Festival Special', 1, '2023-03-17', '2023-06-30', 10.00, 1, '2023-03-17 03:28:33', '2023-03-17 03:28:33'),
(2, 'Festival Offer', 2, '2023-03-17', '2023-06-30', 5.00, 1, '2023-03-17 03:29:26', '2023-03-17 03:29:26'),
(3, 'Festive Season', 4, '2023-03-17', '2023-07-31', 20.00, 1, '2023-03-17 06:02:41', '2023-03-17 06:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickup_addresses`
--

CREATE TABLE `pickup_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `store_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint UNSIGNED NOT NULL,
  `heading1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer3` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer4` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer5` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer6` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer7` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading8` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer8` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading9` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer9` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `heading1`, `answer1`, `heading2`, `answer2`, `heading3`, `answer3`, `heading4`, `answer4`, `heading5`, `answer5`, `heading6`, `answer6`, `heading7`, `answer7`, `heading8`, `answer8`, `heading9`, `answer9`, `created_at`, `updated_at`) VALUES
(1, 'heading1', 'answer1', 'heading2', 'answer2', 'heading3', 'answer3', 'heading4', 'answer4', 'heading5', 'answer5', 'heading6', 'answer6', 'heading7', 'answer7', 'heading8', 'answer8', 'heading9', 'answer9', '2023-03-21 07:55:19', '2023-03-21 07:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` bigint UNSIGNED NOT NULL,
  `staff_id` bigint UNSIGNED NOT NULL,
  `module` int DEFAULT NULL,
  `submodule` int DEFAULT NULL,
  `access` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `qty` int NOT NULL DEFAULT '0',
  `price` double(8,2) NOT NULL,
  `tax` double(8,2) NOT NULL DEFAULT '0.00',
  `status` tinyint NOT NULL DEFAULT '1',
  `category` bigint UNSIGNED NOT NULL,
  `sub_category` bigint UNSIGNED DEFAULT NULL,
  `child_category` bigint UNSIGNED DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon` tinyint NOT NULL DEFAULT '0',
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `has_varients` tinyint(1) DEFAULT NULL,
  `has_properties` tinyint(1) DEFAULT NULL,
  `default_varients` int DEFAULT NULL,
  `default_toppings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `default_crust` int DEFAULT NULL
) ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_img`, `product_des`, `qty`, `price`, `tax`, `status`, `category`, `sub_category`, `child_category`, `size`, `type`, `addon`, `extra`, `created_at`, `updated_at`, `has_varients`, `has_properties`, `default_varients`, `default_toppings`, `default_crust`) VALUES
(1, 'Potato Tikki Burger', '/public/assets/admin/assets/img/product_image/167903954764141c3b95199.jpg', 'Flavorful  potato tikki with tomato, onion and homemade sauce( no cheese )', 0, 15.00, 2.00, 1, 1, 1, NULL, NULL, NULL, 0, NULL, '2023-03-17 02:22:27', '2023-03-17 02:22:27', 0, 0, 0, '', 0),
(2, 'Classic chicken burger', '/public/assets/admin/assets/img/product_image/167903965764141ca9d5ae1.jpg', 'A classic chicken burger with crispy chicken patty', 0, 20.00, 3.00, 1, 1, 2, NULL, NULL, NULL, 0, NULL, '2023-03-17 02:24:17', '2023-03-17 02:24:17', 0, 0, 0, '', 0),
(3, 'Margherita Pizza', '/public/assets/admin/assets/img/product_image/167903986164141d7538d21.jpg', 'Classic delight with 100% real mozzarella cheese', 0, 20.00, 3.00, 1, 2, 3, NULL, NULL, NULL, 0, NULL, '2023-03-17 02:27:41', '2023-03-17 02:27:41', 1, 1, 0, '', 0),
(4, 'Pepper Barbecue Chicken Pizza', '/public/assets/admin/assets/img/product_image/167904002564141e192264b.jpg', 'Pepper barbecue chicken for that extra zing', 0, 25.00, 5.00, 1, 2, 4, NULL, NULL, NULL, 0, NULL, '2023-03-17 02:30:25', '2023-03-17 02:30:25', 1, 1, 0, '', 0),
(5, 'Noodles', '/public/assets/admin/assets/img/product_image/1679040536641420186ff43.jpg', 'Classic noodles on go', 0, 10.00, 1.00, 1, 3, 5, NULL, NULL, NULL, 0, NULL, '2023-03-17 02:38:56', '2023-03-17 02:38:56', 0, 0, 0, '', 0),
(6, 'Chicken Momo', '/public/assets/admin/assets/img/product_image/167904058464142048d396f.jpg', 'Hot steamed momos', 0, 9.00, 1.00, 1, 3, 6, NULL, NULL, NULL, 0, NULL, '2023-03-17 02:39:44', '2023-03-17 02:39:44', 0, 0, 0, '', 0),
(7, 'Coffee', '/public/assets/admin/assets/img/product_image/16811214116433e08379eef.png', 'coffee', 0, 100.00, 1.00, 1, 3, NULL, NULL, NULL, NULL, 0, NULL, '2023-04-10 04:40:11', '2023-04-10 04:40:11', 1, 0, 0, '', 0),
(8, 'Supreme Pizza', '/public/assets/admin/assets/img/product_image/1681892298643fa3ca9275f.webp', 'When you can’t decide which toppings to get, it’s time for the supreme pizza. The “supreme” refers to the litany of toppings that come scattered on these pies, from sausage to vegetables to pepperoni. And it’s the combination of the flavors that really makes it sing.', 0, 100.00, 2.00, 1, 2, 4, NULL, NULL, NULL, 0, NULL, '2023-04-19 02:48:18', '2023-04-27 06:37:48', 1, 1, 2, '[\"15\",\"5\",\"20\",\"24\"]', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_add_ons`
--

CREATE TABLE `product_add_ons` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `variant` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_extras`
--

CREATE TABLE `product_extras` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `extra_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_properties`
--

CREATE TABLE `product_properties` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `properties_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_properties`
--

INSERT INTO `product_properties` (`id`, `product_id`, `properties_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(2, 4, 2, '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(3, 4, 3, '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(8, 8, 2, '2023-06-09 04:39:16', '2023-06-09 04:39:16'),
(9, 8, 3, '2023-06-09 04:39:16', '2023-06-09 04:39:16'),
(10, 8, 4, '2023-06-09 04:39:16', '2023-06-09 04:39:16'),
(11, 8, 5, '2023-06-09 04:39:16', '2023-06-09 04:39:16'),
(12, 8, 6, '2023-06-09 04:39:16', '2023-06-09 04:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_toppings`
--

CREATE TABLE `product_toppings` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `ingredients_id` bigint UNSIGNED NOT NULL,
  `ingredents_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_toppings`
--

INSERT INTO `product_toppings` (`id`, `product_id`, `ingredients_id`, `ingredents_price`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '5.00', '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(2, 3, 2, '10.00', '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(3, 3, 3, '15.00', '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(4, 3, 4, '20.00', '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(5, 3, 5, '10.00', '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(6, 4, 1, '5.00', '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(7, 4, 2, '10.00', '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(8, 4, 3, '15.00', '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(9, 4, 4, '20.00', '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(10, 4, 5, '10.00', '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(11, 8, 1, '10.00', '2023-04-19 02:48:18', '2023-04-19 02:48:18'),
(12, 8, 2, '20.00', '2023-04-19 02:48:18', '2023-04-19 02:48:18'),
(13, 8, 3, '30.00', '2023-04-19 02:48:18', '2023-04-19 02:48:18'),
(14, 8, 4, '40.00', '2023-04-19 02:48:18', '2023-04-19 02:48:18'),
(15, 9, 2, '2.00', '2023-06-09 04:38:29', '2023-06-09 04:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `varients_id` bigint UNSIGNED NOT NULL,
  `varients_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `varients_id`, `varients_price`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '20.00', '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(2, 3, 2, '30.00', '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(3, 3, 3, '40.00', '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(4, 3, 4, '45.00', '2023-03-17 02:27:41', '2023-03-17 02:27:41'),
(5, 4, 1, '25.00', '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(6, 4, 2, '35.00', '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(7, 4, 3, '45.00', '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(8, 4, 4, '50.00', '2023-03-17 02:30:25', '2023-03-17 02:30:25'),
(9, 7, 2, '100.00', '2023-04-10 04:40:11', '2023-04-10 04:40:11'),
(10, 7, 3, '200.00', '2023-04-10 04:40:11', '2023-04-10 04:40:11'),
(15, 8, 1, '100.00', '2023-06-09 04:39:16', '2023-06-09 04:39:16'),
(16, 8, 2, '200.00', '2023-06-09 04:39:16', '2023-06-09 04:39:16'),
(17, 8, 3, '300.00', '2023-06-09 04:39:16', '2023-06-09 04:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Add Veg Toppings', 1, NULL, NULL),
(3, 'Add Non-Veg Toppings', 1, NULL, NULL),
(4, 'Cheese', 1, NULL, NULL),
(5, 'Sauces', 1, NULL, NULL),
(6, 'Add Slice Toppings', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `properties_items`
--

CREATE TABLE `properties_items` (
  `id` bigint UNSIGNED NOT NULL,
  `properties_id` bigint DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `is_multiple` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties_items`
--

INSERT INTO `properties_items` (`id`, `properties_id`, `name`, `price`, `is_multiple`, `status`, `created_at`, `updated_at`) VALUES
(5, 3, 'Peri - Peri Chicken', '2.00', 0, 1, '2023-03-17 02:02:27', '2023-03-17 02:02:27'),
(6, 3, 'Barbecue Chicken', '5.00', 0, 1, '2023-03-17 02:02:54', '2023-03-17 02:02:54'),
(7, 3, 'Grilled Chicken Rasher', '5.00', 0, 1, '2023-03-17 02:03:30', '2023-03-17 02:03:30'),
(8, 3, 'Chicken Sausages', '10.00', 0, 1, '2023-03-17 02:03:53', '2023-03-17 02:03:53'),
(9, 3, 'Chicken Tikka', '10.00', 0, 1, '2023-03-17 02:04:14', '2023-03-17 02:04:14'),
(10, 3, 'Chicken Pepperoni', '10.00', 0, 1, '2023-03-17 02:04:50', '2023-03-17 02:04:50'),
(11, 3, 'Chicken Keema', '5.00', 0, 1, '2023-03-17 02:05:02', '2023-03-17 02:05:02'),
(12, 2, 'Grilled Mushrooms', '1.00', 0, 1, '2023-03-17 02:16:18', '2023-03-17 02:16:18'),
(13, 2, 'Onion', '1.00', 0, 1, '2023-03-17 02:16:32', '2023-03-17 02:16:32'),
(14, 2, 'Paneer', '2.00', 0, 1, '2023-03-17 02:16:42', '2023-03-17 02:16:42'),
(15, 2, 'Red Pepper', '1.00', 0, 1, '2023-03-17 02:17:14', '2023-03-17 02:17:14'),
(16, 2, 'Jalapeno', '2.00', 0, 1, '2023-03-17 02:17:34', '2023-03-17 02:17:34'),
(17, 2, 'Black Olives', '3.00', 0, 1, '2023-03-17 02:17:48', '2023-03-17 02:17:48'),
(18, 2, 'Tomato', '1.00', 0, 1, '2023-03-17 02:18:06', '2023-03-17 02:18:06'),
(19, 2, 'Capsicum', '1.00', 0, 1, '2023-03-17 02:18:28', '2023-03-17 02:18:28'),
(20, 4, 'Cheddar', '7.00', 0, 1, '2023-04-19 01:59:14', '2023-04-19 01:59:14'),
(21, 4, 'Mozzarella', '10.00', 0, 1, '2023-04-19 01:59:34', '2023-04-19 01:59:34'),
(22, 4, 'Ricotta', '5.00', 0, 1, '2023-04-19 01:59:49', '2023-04-19 01:59:49'),
(23, 4, 'Parmesan', '10.00', 0, 1, '2023-04-19 02:00:12', '2023-04-19 02:00:12'),
(24, 5, 'Spicy Red Sauces', '5.00', 0, 1, '2023-04-19 02:43:00', '2023-04-19 02:43:00'),
(25, 5, 'Peppery Red Sauce', '4.00', 0, 1, '2023-04-19 02:43:14', '2023-04-19 02:43:14'),
(26, 5, 'Sweet Pizza Sauces', '3.00', 0, 1, '2023-04-19 02:43:30', '2023-04-19 02:43:30'),
(27, 5, 'Pesto Sauce', '10.00', 0, 1, '2023-04-19 02:43:48', '2023-04-19 02:43:48'),
(28, 5, 'BBQ Sauce', '4.00', 0, 1, '2023-04-19 02:44:12', '2023-04-19 02:44:12'),
(29, 5, 'Mayonnaise', '2.00', 0, 1, '2023-04-19 02:44:28', '2023-04-19 02:44:28'),
(30, 6, 'Chicken Fry', '2.00', 0, 1, '2023-06-09 04:41:05', '2023-06-09 04:41:05'),
(31, 6, 'Paneer', '2.00', 0, 1, '2023-06-09 07:11:16', '2023-06-09 07:11:16'),
(32, 6, 'Capsicum & Onion', '2.00', 0, 1, '2023-06-09 07:11:36', '2023-06-09 07:11:36'),
(33, 6, 'Sweet Corn', '1.00', 0, 1, '2023-06-09 07:11:59', '2023-06-09 07:11:59'),
(34, 6, 'Farmhouse', '2.00', 0, 1, '2023-06-09 07:12:10', '2023-06-09 07:12:10'),
(35, 6, 'Peri Peri Chicken', '2.00', 0, 1, '2023-06-09 07:12:37', '2023-06-09 07:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `properties_sides_in_cart`
--

CREATE TABLE `properties_sides_in_cart` (
  `id` bigint NOT NULL,
  `usercart_id` bigint NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `property_id` bigint NOT NULL,
  `sides` varchar(20) NOT NULL,
  `is_extra` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties_sides_in_cart`
--

INSERT INTO `properties_sides_in_cart` (`id`, `usercart_id`, `product_id`, `property_id`, `sides`, `is_extra`, `created_at`, `updated_at`) VALUES
(7, 136, NULL, 14, 'right', 0, '2023-06-30 17:25:11', '2023-06-30 17:25:11'),
(8, 136, NULL, 15, 'left', 0, '2023-06-30 17:25:11', '2023-06-30 17:25:11'),
(9, 136, NULL, 7, 'whole', 0, '2023-06-30 17:25:11', '2023-06-30 17:25:11'),
(10, 137, NULL, 12, 'left', 0, '2023-06-30 22:03:22', '2023-06-30 22:03:22'),
(11, 137, NULL, 13, 'right', 0, '2023-06-30 22:03:22', '2023-06-30 22:03:22'),
(12, 138, NULL, 15, 'quarter', 0, '2023-07-03 19:35:46', '2023-07-03 19:35:46'),
(13, 139, NULL, 15, 'whole', 0, '2023-08-14 00:27:12', '2023-08-14 00:27:12'),
(14, 139, NULL, 6, 'whole', 0, '2023-08-14 00:27:12', '2023-08-14 00:27:12'),
(15, 139, NULL, 7, 'right', 0, '2023-08-14 00:27:12', '2023-08-14 00:27:12'),
(16, 139, NULL, 21, 'whole', 0, '2023-08-14 00:27:12', '2023-08-14 00:27:12'),
(17, 139, NULL, 26, 'right', 0, '2023-08-14 00:27:12', '2023-08-14 00:27:12'),
(18, 140, NULL, 15, 'left', 0, '2023-08-14 00:31:52', '2023-08-14 00:31:52'),
(19, 140, NULL, 5, 'whole', 0, '2023-08-14 00:31:52', '2023-08-14 00:31:52'),
(20, 140, NULL, 7, 'right', 0, '2023-08-14 00:31:52', '2023-08-14 00:31:52'),
(21, 140, NULL, 9, 'left', 0, '2023-08-14 00:31:52', '2023-08-14 00:31:52'),
(22, 140, NULL, 21, 'right', 0, '2023-08-14 00:31:52', '2023-08-14 00:31:52'),
(23, 141, NULL, 15, 'left', 0, '2023-08-14 00:32:11', '2023-08-14 00:32:11'),
(24, 141, NULL, 5, 'whole', 0, '2023-08-14 00:32:11', '2023-08-14 00:32:11'),
(25, 141, NULL, 7, 'right', 0, '2023-08-14 00:32:11', '2023-08-14 00:32:11'),
(26, 141, NULL, 9, 'left', 0, '2023-08-14 00:32:11', '2023-08-14 00:32:11'),
(27, 141, NULL, 21, 'right', 0, '2023-08-14 00:32:11', '2023-08-14 00:32:11'),
(28, 141, NULL, 24, 'whole', 0, '2023-08-14 00:32:11', '2023-08-14 00:32:11'),
(29, 142, NULL, 15, 'whole', 0, '2023-08-30 06:06:35', '2023-08-30 06:06:35'),
(30, 142, NULL, 5, 'whole', 0, '2023-08-30 06:06:35', '2023-08-30 06:06:35'),
(31, 142, NULL, 20, 'whole', 0, '2023-08-30 06:06:35', '2023-08-30 06:06:35'),
(32, 142, NULL, 24, 'whole', 0, '2023-08-30 06:06:35', '2023-08-30 06:06:35'),
(33, 143, NULL, 15, 'whole', 0, '2023-08-30 06:06:58', '2023-08-30 06:06:58'),
(34, 143, NULL, 5, 'whole', 0, '2023-08-30 06:06:58', '2023-08-30 06:06:58'),
(35, 143, NULL, 20, 'whole', 0, '2023-08-30 06:06:58', '2023-08-30 06:06:58'),
(36, 143, NULL, 24, 'whole', 0, '2023-08-30 06:06:58', '2023-08-30 06:06:58'),
(37, 143, NULL, 31, 'whole', 0, '2023-08-30 06:06:58', '2023-08-30 06:06:58'),
(38, 145, NULL, 14, 'whole', 0, '2023-08-30 06:37:31', '2023-08-30 06:37:31'),
(39, 145, NULL, 8, 'right', 0, '2023-08-30 06:37:31', '2023-08-30 06:37:31'),
(40, 146, NULL, 15, 'whole', 0, '2023-08-30 08:28:30', '2023-08-30 08:28:30'),
(41, 146, NULL, 5, 'whole', 0, '2023-08-30 08:28:30', '2023-08-30 08:28:30'),
(42, 146, NULL, 20, 'whole', 0, '2023-08-30 08:28:30', '2023-08-30 08:28:30'),
(43, 146, NULL, 24, 'whole', 0, '2023-08-30 08:28:30', '2023-08-30 08:28:30'),
(44, 147, NULL, 15, 'whole', 0, '2023-09-14 06:05:33', '2023-09-14 06:05:33'),
(45, 147, NULL, 5, 'whole', 0, '2023-09-14 06:05:33', '2023-09-14 06:05:33'),
(46, 147, NULL, 7, 'left', 0, '2023-09-14 06:05:33', '2023-09-14 06:05:33'),
(47, 147, NULL, 8, 'right', 0, '2023-09-14 06:05:33', '2023-09-14 06:05:33'),
(48, 147, NULL, 20, 'whole', 0, '2023-09-14 06:05:33', '2023-09-14 06:05:33'),
(49, 147, NULL, 22, 'left', 0, '2023-09-14 06:05:33', '2023-09-14 06:05:33'),
(50, 147, NULL, 23, 'right', 0, '2023-09-14 06:05:33', '2023-09-14 06:05:33'),
(51, 147, NULL, 24, 'whole', 0, '2023-09-14 06:05:33', '2023-09-14 06:05:33'),
(52, 148, NULL, 15, 'whole', 0, '2023-09-14 06:13:23', '2023-09-14 06:13:23'),
(53, 148, NULL, 5, 'whole', 0, '2023-09-14 06:13:23', '2023-09-14 06:13:23'),
(54, 148, NULL, 7, 'left', 0, '2023-09-14 06:13:23', '2023-09-14 06:13:23'),
(55, 148, NULL, 8, 'right', 0, '2023-09-14 06:13:23', '2023-09-14 06:13:23'),
(56, 148, NULL, 20, 'whole', 0, '2023-09-14 06:13:23', '2023-09-14 06:13:23'),
(57, 148, NULL, 24, 'whole', 0, '2023-09-14 06:13:23', '2023-09-14 06:13:23'),
(58, 148, NULL, 26, 'left', 0, '2023-09-14 06:13:23', '2023-09-14 06:13:23'),
(59, 148, NULL, 27, 'right', 0, '2023-09-14 06:13:23', '2023-09-14 06:13:23'),
(60, 148, NULL, 32, 'whole', 0, '2023-09-14 06:13:23', '2023-09-14 06:13:23'),
(61, 150, NULL, 15, 'whole', 0, '2023-09-14 08:48:43', '2023-09-14 08:48:43'),
(62, 150, NULL, 5, 'whole', 0, '2023-09-14 08:48:43', '2023-09-14 08:48:43'),
(63, 150, NULL, 6, 'left', 0, '2023-09-14 08:48:43', '2023-09-14 08:48:43'),
(64, 150, NULL, 7, 'right', 0, '2023-09-14 08:48:43', '2023-09-14 08:48:43'),
(65, 150, NULL, 20, 'whole', 0, '2023-09-14 08:48:43', '2023-09-14 08:48:43'),
(66, 150, NULL, 22, 'left', 0, '2023-09-14 08:48:43', '2023-09-14 08:48:43'),
(67, 150, NULL, 23, 'quarter', 0, '2023-09-14 08:48:43', '2023-09-14 08:48:43'),
(68, 150, NULL, 24, 'whole', 0, '2023-09-14 08:48:43', '2023-09-14 08:48:43'),
(69, 150, NULL, 27, 'whole', 0, '2023-09-14 08:48:43', '2023-09-14 08:48:43'),
(70, 151, NULL, 14, 'left', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(71, 151, NULL, 15, 'whole', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(72, 151, NULL, 16, 'right', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(73, 151, NULL, 5, 'whole', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(74, 151, NULL, 6, 'left', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(75, 151, NULL, 7, 'right', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(76, 151, NULL, 20, 'whole', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(77, 151, NULL, 21, 'left', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(78, 151, NULL, 22, 'right', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(79, 151, NULL, 24, 'whole', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(80, 151, NULL, 25, 'left', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(81, 151, NULL, 26, 'right', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(82, 151, NULL, 31, 'right', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(83, 151, NULL, 32, 'left', 0, '2023-09-21 05:38:24', '2023-09-21 05:38:24'),
(84, 152, NULL, 15, 'whole', 0, '2023-09-21 09:23:27', '2023-09-21 09:23:27'),
(85, 152, NULL, 5, 'whole', 0, '2023-09-21 09:23:27', '2023-09-21 09:23:27'),
(86, 152, NULL, 20, 'whole', 0, '2023-09-21 09:23:27', '2023-09-21 09:23:27'),
(87, 152, NULL, 24, 'whole', 0, '2023-09-21 09:23:27', '2023-09-21 09:23:27'),
(88, 153, NULL, 12, 'quarter', 0, '2023-09-21 09:34:16', '2023-09-21 09:34:16'),
(89, 153, NULL, 13, 'whole', 0, '2023-09-21 09:34:16', '2023-09-21 09:34:16'),
(90, 153, NULL, 14, 'right', 0, '2023-09-21 09:34:16', '2023-09-21 09:34:16'),
(91, 153, NULL, 15, 'left', 0, '2023-09-21 09:34:16', '2023-09-21 09:34:16'),
(92, 153, NULL, 5, 'whole', 0, '2023-09-21 09:34:16', '2023-09-21 09:34:16'),
(93, 153, NULL, 6, 'left', 0, '2023-09-21 09:34:16', '2023-09-21 09:34:16'),
(94, 153, NULL, 7, 'right', 0, '2023-09-21 09:34:16', '2023-09-21 09:34:16'),
(95, 153, NULL, 8, 'quarter', 0, '2023-09-21 09:34:16', '2023-09-21 09:34:16'),
(96, 154, NULL, 15, 'whole', 0, '2023-09-22 00:37:43', '2023-09-22 00:37:43'),
(97, 154, NULL, 5, 'whole', 0, '2023-09-22 00:37:43', '2023-09-22 00:37:43'),
(98, 154, NULL, 20, 'whole', 0, '2023-09-22 00:37:43', '2023-09-22 00:37:43'),
(99, 154, NULL, 24, 'whole', 0, '2023-09-22 00:37:43', '2023-09-22 00:37:43'),
(100, 155, NULL, 13, 'right', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(101, 155, NULL, 14, 'left', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(102, 155, NULL, 15, 'whole', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(103, 155, NULL, 5, 'whole', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(104, 155, NULL, 6, 'left', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(105, 155, NULL, 20, 'whole', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(106, 155, NULL, 21, 'right', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(107, 155, NULL, 24, 'whole', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(108, 155, NULL, 25, 'quarter', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(109, 155, NULL, 30, 'left', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(110, 155, NULL, 31, 'right', 0, '2023-09-22 06:54:53', '2023-09-22 06:54:53'),
(111, 156, NULL, 14, 'left', 0, '2023-09-22 06:55:16', '2023-09-22 06:55:16'),
(112, 156, NULL, 15, 'right', 0, '2023-09-22 06:55:16', '2023-09-22 06:55:16'),
(113, 156, NULL, 7, 'left', 0, '2023-09-22 06:55:16', '2023-09-22 06:55:16'),
(114, 156, NULL, 9, 'right', 0, '2023-09-22 06:55:16', '2023-09-22 06:55:16'),
(115, 158, NULL, 13, 'left', 0, '2023-09-22 08:33:35', '2023-09-22 08:33:35'),
(116, 158, NULL, 14, 'whole', 0, '2023-09-22 08:33:35', '2023-09-22 08:33:35'),
(117, 158, NULL, 15, 'right', 0, '2023-09-22 08:33:35', '2023-09-22 08:33:35'),
(118, 158, NULL, 6, 'left', 0, '2023-09-22 08:33:35', '2023-09-22 08:33:35'),
(119, 158, NULL, 7, 'right', 0, '2023-09-22 08:33:35', '2023-09-22 08:33:35'),
(120, 159, NULL, 15, 'whole', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(121, 159, NULL, 5, 'whole', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(122, 159, NULL, 6, 'left', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(123, 159, NULL, 7, 'right', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(124, 159, NULL, 20, 'whole', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(125, 159, NULL, 21, 'quarter', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(126, 159, NULL, 24, 'whole', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(127, 159, NULL, 25, 'left', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(128, 159, NULL, 26, 'right', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(129, 159, NULL, 31, 'left', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(130, 159, NULL, 32, 'quarter', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(131, 159, NULL, 33, 'right', 0, '2023-09-23 01:44:00', '2023-09-23 01:44:00'),
(132, 160, 4, 14, 'left', 0, '2023-09-23 02:37:53', '2023-09-23 02:37:53'),
(133, 160, 4, 15, 'right', 0, '2023-09-23 02:37:53', '2023-09-23 02:37:53'),
(134, 160, 4, 6, 'whole', 0, '2023-09-23 02:37:53', '2023-09-23 02:37:53'),
(135, 160, 4, 7, 'left', 0, '2023-09-23 02:37:53', '2023-09-23 02:37:53'),
(136, 160, 4, 8, 'right', 0, '2023-09-23 02:37:53', '2023-09-23 02:37:53'),
(137, 170, 3, 13, 'whole', 0, '2023-09-23 04:41:51', '2023-09-23 04:41:51'),
(138, 170, 3, 14, 'left', 0, '2023-09-23 04:41:51', '2023-09-23 04:41:51'),
(139, 170, 3, 15, 'right', 0, '2023-09-23 04:41:51', '2023-09-23 04:41:51'),
(140, 171, 4, 13, 'left', 0, '2023-09-23 04:42:14', '2023-09-23 04:42:14'),
(141, 171, 4, 14, 'whole', 0, '2023-09-23 04:42:14', '2023-09-23 04:42:14'),
(142, 171, 4, 6, 'right', 0, '2023-09-23 04:42:14', '2023-09-23 04:42:14'),
(143, 171, 4, 7, 'whole', 0, '2023-09-23 04:42:14', '2023-09-23 04:42:14'),
(144, 172, 8, 14, 'left', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(145, 172, 8, 15, 'whole', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(146, 172, 8, 5, 'quarter', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(147, 172, 8, 6, 'right', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(148, 172, 8, 20, 'whole', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(149, 172, 8, 21, 'left', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(150, 172, 8, 24, 'whole', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(151, 172, 8, 25, 'right', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(152, 172, 8, 31, 'left', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(153, 172, 8, 32, 'whole', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(154, 172, 8, 33, 'right', 0, '2023-09-23 04:42:45', '2023-09-23 04:42:45'),
(155, 173, 4, 12, 'right', 0, '2023-09-23 08:34:48', '2023-09-23 08:34:48'),
(156, 173, 4, 13, 'left', 0, '2023-09-23 08:34:48', '2023-09-23 08:34:48'),
(157, 173, 4, 14, 'whole', 0, '2023-09-23 08:34:48', '2023-09-23 08:34:48'),
(158, 173, 4, 15, 'quarter', 0, '2023-09-23 08:34:48', '2023-09-23 08:34:48'),
(159, 173, 4, 5, 'right', 0, '2023-09-23 08:34:48', '2023-09-23 08:34:48'),
(160, 173, 4, 6, 'left', 0, '2023-09-23 08:34:48', '2023-09-23 08:34:48'),
(161, 173, 4, 7, 'whole', 0, '2023-09-23 08:34:48', '2023-09-23 08:34:48'),
(162, 173, 4, 8, 'quarter', 0, '2023-09-23 08:34:48', '2023-09-23 08:34:48'),
(163, 174, 8, 13, 'quarter', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(164, 174, 8, 15, 'whole', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(165, 174, 8, 5, 'whole', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(166, 174, 8, 6, 'quarter', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(167, 174, 8, 20, 'whole', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(168, 174, 8, 21, 'right', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(169, 174, 8, 24, 'whole', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(170, 174, 8, 26, 'left', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(171, 174, 8, 31, 'quarter', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(172, 174, 8, 32, 'quarter', 0, '2023-09-23 08:35:25', '2023-09-23 08:35:25'),
(173, 177, 3, 13, 'left', 0, '2023-10-06 02:57:04', '2023-10-06 02:57:04'),
(174, 177, 3, 14, 'whole', 0, '2023-10-06 02:57:04', '2023-10-06 02:57:04'),
(175, 177, 3, 15, 'right', 0, '2023-10-06 02:57:04', '2023-10-06 02:57:04'),
(176, 178, 4, 14, 'whole', 0, '2023-10-06 02:57:20', '2023-10-06 02:57:20'),
(177, 178, 4, 6, 'left', 0, '2023-10-06 02:57:20', '2023-10-06 02:57:20'),
(178, 178, 4, 7, 'right', 0, '2023-10-06 02:57:20', '2023-10-06 02:57:20'),
(179, 179, 8, 15, 'whole', 0, '2023-10-06 02:57:35', '2023-10-06 02:57:35'),
(180, 179, 8, 5, 'whole', 0, '2023-10-06 02:57:35', '2023-10-06 02:57:35'),
(181, 179, 8, 20, 'whole', 0, '2023-10-06 02:57:35', '2023-10-06 02:57:35'),
(182, 179, 8, 24, 'whole', 0, '2023-10-06 02:57:35', '2023-10-06 02:57:35'),
(183, 179, 8, 31, 'right', 0, '2023-10-06 02:57:35', '2023-10-06 02:57:35'),
(184, 179, 8, 32, 'left', 0, '2023-10-06 02:57:35', '2023-10-06 02:57:35'),
(185, 185, 3, 14, 'right', 0, '2023-10-06 10:23:36', '2023-10-06 10:23:36'),
(186, 185, 3, 15, 'left', 0, '2023-10-06 10:23:36', '2023-10-06 10:23:36'),
(187, 186, 4, 14, 'left', 0, '2023-10-06 10:23:54', '2023-10-06 10:23:54'),
(188, 186, 4, 8, 'right', 0, '2023-10-06 10:23:54', '2023-10-06 10:23:54'),
(189, 189, 4, 13, 'left', 0, '2023-10-06 10:31:52', '2023-10-06 10:31:52'),
(190, 189, 4, 16, 'right', 0, '2023-10-06 10:31:52', '2023-10-06 10:31:52'),
(191, 189, 4, 7, 'whole', 0, '2023-10-06 10:31:52', '2023-10-06 10:31:52'),
(192, 192, 4, 15, 'right', 0, '2023-10-06 12:21:21', '2023-10-06 12:21:21'),
(193, 192, 4, 6, 'left', 0, '2023-10-06 12:21:21', '2023-10-06 12:21:21'),
(194, 192, 4, 7, 'whole', 0, '2023-10-06 12:21:21', '2023-10-06 12:21:21'),
(195, 192, 4, 8, 'whole', 0, '2023-10-06 12:21:21', '2023-10-06 12:21:21'),
(196, 195, 4, 14, 'whole', 0, '2023-10-07 00:39:07', '2023-10-07 00:39:07'),
(197, 195, 4, 6, 'left', 0, '2023-10-07 00:39:07', '2023-10-07 00:39:07'),
(198, 195, 4, 8, 'right', 0, '2023-10-07 00:39:07', '2023-10-07 00:39:07'),
(199, 197, 4, 14, 'left', 0, '2023-10-08 06:06:06', '2023-10-08 06:06:06'),
(200, 197, 4, 15, 'right', 0, '2023-10-08 06:06:06', '2023-10-08 06:06:06'),
(201, 197, 4, 7, 'whole', 0, '2023-10-08 06:06:06', '2023-10-08 06:06:06'),
(202, 198, 4, 14, 'whole', 0, '2023-10-11 11:56:33', '2023-10-11 11:56:33'),
(203, 198, 4, 6, 'left', 0, '2023-10-11 11:56:33', '2023-10-11 11:56:33'),
(204, 198, 4, 8, 'right', 0, '2023-10-11 11:56:33', '2023-10-11 11:56:33'),
(205, 199, 8, 13, 'right', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18'),
(206, 199, 8, 14, 'left', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18'),
(207, 199, 8, 15, 'whole', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18'),
(208, 199, 8, 5, 'whole', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18'),
(209, 199, 8, 20, 'whole', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18'),
(210, 199, 8, 21, 'right', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18'),
(211, 199, 8, 22, 'left', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18'),
(212, 199, 8, 24, 'whole', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18'),
(213, 199, 8, 31, 'left', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18'),
(214, 199, 8, 32, 'right', 0, '2023-10-11 11:57:18', '2023-10-11 11:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` bigint NOT NULL,
  `symbol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double(8,2) NOT NULL,
  `alignment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `currency`, `symbol`, `rate`, `alignment`, `status`, `created_at`, `updated_at`) VALUES
(2, 'rupees', 11, '@', 6.00, 'qwert', 1, '2022-12-05 23:13:10', '2022-12-07 00:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smtps`
--

CREATE TABLE `smtps` (
  `id` bigint UNSIGNED NOT NULL,
  `mailer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `port` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `encryption` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smtps`
--

INSERT INTO `smtps` (`id`, `mailer`, `host`, `port`, `name`, `password`, `encryption`, `address`, `created_at`, `updated_at`) VALUES
(1, 'dfyj', 'dfgh', 'fghj', 'sdfgh', 'dfghjk', 'fghjk', 'fgfghj', '2022-12-08 01:47:03', '2022-12-08 01:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `stock_inventries`
--

CREATE TABLE `stock_inventries` (
  `id` bigint UNSIGNED NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `stock` double NOT NULL,
  `price` double NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `cate_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pure Veg', 1, '/public/assets/admin/assets/img/sub_category/1679036836641411a473cb2.jpg', 1, '2023-03-17 01:37:16', '2023-03-17 01:37:16'),
(2, 'Chicken', 1, '/public/assets/admin/assets/img/sub_category/1679036884641411d440e37.jpg', 1, '2023-03-17 01:38:04', '2023-03-17 01:38:04'),
(3, 'Veg berbeque Pizza', 2, '/public/assets/admin/assets/img/sub_category/1679036985641412398e79f.jpg', 1, '2023-03-17 01:39:45', '2023-03-30 04:00:33'),
(4, 'Non Veg Pizza', 2, '/public/assets/admin/assets/img/sub_category/16790370336414126974e3c.jpg', 1, '2023-03-17 01:40:33', '2023-03-17 01:40:33'),
(5, 'Noodles', 3, '/public/assets/admin/assets/img/sub_category/1679037152641412e0d6eb1.jpg', 1, '2023-03-17 01:42:32', '2023-03-17 01:42:32'),
(6, 'Momos', 3, '/public/assets/admin/assets/img/sub_category/16790371966414130c4fb65.jpg', 1, '2023-03-17 01:43:16', '2023-03-17 01:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `guest_capacity` int NOT NULL,
  `status` enum('open','check_in','seated','check_out','dirty') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_details`
--

CREATE TABLE `table_details` (
  `id` bigint UNSIGNED NOT NULL,
  `book_table_id` bigint UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_num` int NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint UNSIGNED NOT NULL,
  `heading1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer3` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer4` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `heading1`, `answer1`, `heading2`, `answer2`, `heading3`, `answer3`, `heading4`, `answer4`, `created_at`, `updated_at`) VALUES
(1, 'heading1', 'answer1', 'heading2', 'answer2', 'heading3', 'answer3', 'heading4', 'answer4', '2023-03-21 08:27:34', '2023-03-21 08:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp_verify` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcm` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `otp_verify`, `dob`, `age`, `address`, `fcm`, `created_at`, `updated_at`) VALUES
(1, 'Shah', 'test@gmail.com', NULL, NULL, NULL, '8009610334', '1234', '1970-01-01', '15-25', 'no issue in address hgghjg', NULL, '2022-12-14 23:55:09', '2023-02-20 04:03:23'),
(2, 'Test', 'user@gmail.com', NULL, '$2y$10$ngFDnG9kSISUzWmux7FKHOy9rp0yOKaWs.iQHogtcNK7Xor6a5RqO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-14 12:21:29', '2023-01-14 12:21:29'),
(7, NULL, NULL, NULL, NULL, NULL, '1234567890', '1234', NULL, NULL, NULL, NULL, '2023-02-15 04:18:22', '2023-02-27 00:14:22'),
(8, 'Test', 'user1@gmail.com', NULL, '$2y$10$alVWQCIHiwUpZpVEor2xtOa9CaeWCfg458Akzm2CeJ/aDYWwazfFa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-16 06:47:29', '2023-02-16 06:47:29'),
(9, NULL, NULL, NULL, NULL, NULL, '8998989989', '1234', NULL, NULL, NULL, NULL, '2023-02-22 02:25:37', '2023-02-22 02:25:37'),
(10, NULL, NULL, NULL, NULL, NULL, '9540040448', '1234', NULL, NULL, NULL, NULL, '2023-02-23 01:08:42', '2023-02-23 06:29:35'),
(11, 'Debasish Bhattacharjee', 'deb_bhatt200811@yahoo.com', NULL, 'password', NULL, '7678192082', '1234', '1994-11-04', '29', 'Cross_street11, Dibrugarh', NULL, '2023-03-05 22:45:37', '2023-10-11 00:02:17'),
(12, NULL, NULL, NULL, NULL, NULL, '9965768294', '1234', NULL, NULL, NULL, NULL, '2023-03-23 02:09:47', '2023-03-23 02:14:55'),
(13, NULL, NULL, NULL, NULL, NULL, '9996557284', '1234', NULL, NULL, NULL, NULL, '2023-03-29 08:01:37', '2023-08-29 23:57:20'),
(14, NULL, NULL, NULL, NULL, NULL, '7678182082', '1234', NULL, NULL, NULL, NULL, '2023-03-30 07:39:27', '2023-03-30 07:39:27'),
(15, NULL, NULL, NULL, NULL, NULL, '7678192000', '1234', NULL, NULL, NULL, NULL, '2023-03-31 01:13:03', '2023-03-31 01:13:03'),
(16, NULL, NULL, NULL, NULL, NULL, '5435165464', '1234', NULL, NULL, NULL, NULL, '2023-06-09 02:27:43', '2023-06-09 02:27:43'),
(17, NULL, NULL, NULL, NULL, NULL, '6383598271', '1234', NULL, NULL, NULL, NULL, '2023-06-09 03:38:13', '2023-06-09 03:38:13'),
(18, NULL, NULL, NULL, NULL, NULL, '2345678909', '1234', NULL, NULL, NULL, NULL, '2023-06-09 03:41:11', '2023-06-09 03:41:11'),
(19, NULL, NULL, NULL, NULL, NULL, '9953920493', '1234', NULL, NULL, NULL, NULL, '2023-06-12 02:17:52', '2023-06-12 02:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apartment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cross_street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `city`, `state`, `house`, `street`, `apartment`, `cross_street`, `instruction`, `created_at`, `updated_at`) VALUES
(1, 11, 'Dibrugarh, Ind...', 'Assam', 'House No 11', 'Bashbari Pather', 'Apartment 20', 'Cross Streat 20', ';sdvlshvh', '2023-03-17 08:56:39', '2023-03-17 08:56:39'),
(2, 11, 'Guwahati', 'Assam', 'House No 12', 'Bashbari Pather Guwa', 'Apartment 22', 'Cross Streat 22', 'I need it in an  hour', '2023-03-19 00:28:24', '2023-03-19 00:28:24'),
(3, 13, 'Guwahati, Assam, Ind...', 'Assam', 'House No 11', 'Bashbari Pather', 'Apartment 23', 'Cross Streat 23', 'noooooooo', '2023-03-29 08:35:56', '2023-03-29 08:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_carts`
--

CREATE TABLE `user_carts` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `combo_id` bigint DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `qty` int NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount_percent` decimal(10,2) DEFAULT NULL,
  `discounted_price` decimal(10,2) DEFAULT NULL,
  `tax` double(8,2) DEFAULT '0.00',
  `status` tinyint NOT NULL DEFAULT '1',
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `varients` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `toppings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE `variations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variations`
--

INSERT INTO `variations` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Regular', 1, '2023-03-17 02:18:57', '2023-03-17 02:18:57'),
(2, 'Medium', 1, '2023-03-17 02:19:05', '2023-03-17 02:19:05'),
(3, 'Large', 1, '2023-03-17 02:19:10', '2023-03-17 02:19:10'),
(4, 'Extra Large', 1, '2023-03-17 02:19:19', '2023-03-17 02:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `waiters`
--

CREATE TABLE `waiters` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_orders`
--

CREATE TABLE `web_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `delivery_user_id` bigint DEFAULT NULL,
  `shipping_address` bigint DEFAULT NULL,
  `delivery_type` enum('Home Delivery','Take Away') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Home Delivery',
  `payment_mode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_amount` double(8,2) NOT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `discount_value` decimal(10,2) DEFAULT NULL,
  `txn_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('READY','COMPLETED','PENDING','CANCELLED','DISPATCHED','COOKING') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `payment_status` enum('PAID','PENDING') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `coupon_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  `cookingstart` timestamp NULL DEFAULT NULL,
  `endcooking` timestamp NULL DEFAULT NULL,
  `delivery_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_orders`
--

INSERT INTO `web_orders` (`id`, `user_id`, `delivery_user_id`, `shipping_address`, `delivery_type`, `payment_mode`, `pay_amount`, `tax`, `discount_value`, `txn_id`, `invoice_id`, `status`, `payment_status`, `coupon_code`, `delivery_charge`, `cookingstart`, `endcooking`, `delivery_time`, `created_at`, `updated_at`) VALUES
(47, 11, NULL, 1, 'Home Delivery', 'Cash', 437.81, '12.46', '48.65', '1696580879651fc50f0c2e4', '1696580879651fc50f0c2d532', 'READY', 'PENDING', 'new', '11.00', '2023-10-06 07:36:20', '2023-10-06 08:28:58', NULL, '2023-10-06 08:27:59', '2023-10-06 08:27:59'),
(48, 11, NULL, 1, 'Take Away', 'Cash', 389.83, '9.15', '43.31', '169660765765202da96e19d', '169660765765202da96e18135', 'READY', 'PENDING', 'new', '11.00', '2023-10-06 10:25:56', '2023-10-06 10:26:19', NULL, '2023-10-06 15:54:17', '2023-10-06 15:54:17'),
(49, 11, NULL, 1, 'Home Delivery', 'Cash', 273.90, '4.90', '0.00', '169660812565202f7d4d147', '169660812565202f7d4d13b35', 'READY', 'PENDING', NULL, '11.00', '2023-10-06 10:32:33', '2023-10-06 10:35:27', NULL, '2023-10-06 16:02:05', '2023-10-06 16:02:05'),
(50, 11, NULL, 1, 'Home Delivery', 'Cash', 196.65, '4.65', '0.00', '1696614692652049243211a', '1696614692652049243210f14', 'READY', 'PENDING', NULL, '11.00', '2023-10-06 12:26:37', '2023-10-06 12:27:20', NULL, '2023-10-06 17:51:32', '2023-10-06 17:51:32'),
(51, 11, NULL, 1, 'Home Delivery', 'Cash', 273.62, '6.62', '0.00', '16966589596520f60f19f5b', '16966589596520f60f19f5139', 'READY', 'PENDING', NULL, '11.00', '2023-10-07 12:15:56', '2023-10-07 12:49:15', NULL, '2023-10-07 06:09:19', '2023-10-07 06:09:19'),
(52, 11, NULL, 1, 'Home Delivery', 'Cash', 364.19, '9.19', '0.00', '169702545965268db3e6d7e', '169702545965268db3e6d7424', 'READY', 'PENDING', NULL, '11.00', '2023-10-11 11:59:24', '2023-10-11 11:59:53', NULL, '2023-10-11 11:57:39', '2023-10-11 11:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `web_order_products`
--

CREATE TABLE `web_order_products` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `cart_id` bigint DEFAULT NULL,
  `qty` int NOT NULL,
  `base_price` double(8,2) NOT NULL,
  `discount_percent` decimal(10,2) DEFAULT NULL,
  `price_before_discount` decimal(10,2) NOT NULL,
  `normal_price` decimal(10,2) DEFAULT NULL,
  `tax_percent` decimal(10,2) DEFAULT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `combo_pack_id` bigint DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `varients` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `toppings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `chef_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `web_order_products`
--

INSERT INTO `web_order_products` (`id`, `user_id`, `product_id`, `cart_id`, `qty`, `base_price`, `discount_percent`, `price_before_discount`, `normal_price`, `tax_percent`, `order_id`, `combo_pack_id`, `type`, `extra`, `varients`, `properties`, `toppings`, `chef_id`, `created_at`, `updated_at`) VALUES
(109, 11, 6, 175, 1, 9.00, '0.00', '9.00', '9.00', '1.00', 47, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-10-06 08:27:59', '2023-10-06 08:27:59'),
(110, 11, 2, 176, 1, 20.00, '0.00', '20.00', '20.00', '3.00', 47, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2023-10-06 08:27:59', '2023-10-06 08:27:59'),
(111, 11, 3, 177, 1, 20.00, '0.00', '20.00', '34.00', '3.00', 47, NULL, NULL, NULL, '1', '[\"13\",\"14\",\"15\"]', '[\"2\"]', 2, '2023-10-06 08:27:59', '2023-10-06 08:27:59'),
(112, 11, 4, 178, 1, 35.00, '0.00', '35.00', '62.00', '5.00', 47, NULL, NULL, NULL, '2', '[\"14\",\"6\",\"7\"]', '[\"3\"]', 2, '2023-10-06 08:27:59', '2023-10-06 08:27:59'),
(113, 11, 8, 179, 1, 200.00, '0.00', '200.00', '249.00', '2.00', 47, NULL, NULL, NULL, '2', '[\"15\",\"5\",\"20\",\"24\",\"31\",\"32\"]', '[\"3\"]', 3, '2023-10-06 08:27:59', '2023-10-06 08:27:59'),
(114, 11, NULL, 180, 1, 60.00, '0.00', '60.00', '60.00', '2.00', 47, 2, 'combo', NULL, NULL, NULL, NULL, 3, '2023-10-06 08:27:59', '2023-10-06 08:27:59'),
(115, 11, NULL, 181, 1, 30.00, '0.00', '30.00', '30.00', '5.00', 47, 1, 'combo', NULL, NULL, NULL, NULL, 2, '2023-10-06 08:27:59', '2023-10-06 08:27:59'),
(116, 11, 6, 182, 1, 9.00, '0.00', '9.00', '9.00', '1.00', 48, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-10-06 15:54:17', '2023-10-06 15:54:17'),
(117, 11, 2, 183, 1, 20.00, '0.00', '20.00', '20.00', '3.00', 48, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2023-10-06 15:54:17', '2023-10-06 15:54:17'),
(118, 11, 7, 184, 1, 200.00, '0.00', '200.00', '200.00', '1.00', 48, NULL, NULL, NULL, '3', '', '', 3, '2023-10-06 15:54:17', '2023-10-06 15:54:17'),
(119, 11, 3, 185, 1, 30.00, '0.00', '30.00', '48.00', '3.00', 48, NULL, NULL, NULL, '2', '[\"14\",\"15\"]', '[\"3\"]', 2, '2023-10-06 15:54:17', '2023-10-06 15:54:17'),
(120, 11, 4, 186, 1, 45.00, '0.00', '45.00', '77.00', '5.00', 48, NULL, NULL, NULL, '3', '[\"14\",\"8\"]', '[\"4\"]', 2, '2023-10-06 15:54:17', '2023-10-06 15:54:17'),
(121, 11, NULL, 187, 1, 60.00, '0.00', '60.00', '60.00', '2.00', 48, 2, 'combo', NULL, NULL, NULL, NULL, 3, '2023-10-06 15:54:17', '2023-10-06 15:54:17'),
(122, 11, 7, 188, 1, 200.00, '0.00', '200.00', '200.00', '1.00', 49, NULL, NULL, NULL, '3', '', '', 2, '2023-10-06 16:02:05', '2023-10-06 16:02:05'),
(123, 11, 4, 189, 1, 50.00, '0.00', '50.00', '58.00', '5.00', 49, NULL, NULL, NULL, '4', '[\"13\",\"16\",\"7\"]', '', 3, '2023-10-06 16:02:05', '2023-10-06 16:02:05'),
(124, 11, 7, 190, 1, 100.00, '0.00', '100.00', '100.00', '1.00', 50, NULL, NULL, NULL, '2', '', '', 2, '2023-10-06 17:51:32', '2023-10-06 17:51:32'),
(125, 11, 5, 191, 1, 10.00, '0.00', '10.00', '10.00', '1.00', 50, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2023-10-06 17:51:32', '2023-10-06 17:51:32'),
(126, 11, 4, 192, 1, 35.00, '0.00', '35.00', '71.00', '5.00', 50, NULL, NULL, NULL, '2', '[\"15\",\"6\",\"7\",\"8\"]', '[\"3\"]', 2, '2023-10-06 17:51:32', '2023-10-06 17:51:32'),
(127, 11, 2, 193, 1, 20.00, '0.00', '20.00', '20.00', '3.00', 51, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-10-07 06:09:19', '2023-10-07 06:09:19'),
(128, 11, 7, 194, 1, 100.00, '0.00', '100.00', '100.00', '1.00', 51, NULL, NULL, NULL, '2', '', '', 3, '2023-10-07 06:09:19', '2023-10-07 06:09:19'),
(129, 11, 4, 195, 1, 45.00, '0.00', '45.00', '77.00', '5.00', 51, NULL, NULL, NULL, '3', '[\"14\",\"6\",\"8\"]', '[\"3\"]', 2, '2023-10-07 06:09:19', '2023-10-07 06:09:19'),
(130, 11, NULL, 196, 1, 60.00, '0.00', '60.00', '60.00', '2.00', 51, 2, 'combo', NULL, NULL, NULL, NULL, 3, '2023-10-07 06:09:19', '2023-10-07 06:09:19'),
(131, 11, 4, 198, 1, 45.00, '0.00', '45.00', '77.00', '5.00', 52, NULL, NULL, NULL, '3', '[\"14\",\"6\",\"8\"]', '[\"3\"]', 2, '2023-10-11 11:57:39', '2023-10-11 11:57:39'),
(132, 11, 8, 199, 1, 200.00, '0.00', '200.00', '267.00', '2.00', 52, NULL, NULL, NULL, '2', '[\"13\",\"14\",\"15\",\"5\",\"20\",\"21\",\"22\",\"24\",\"31\",\"32\"]', '[\"3\"]', 3, '2023-10-11 11:57:39', '2023-10-11 11:57:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_stocks`
--
ALTER TABLE `add_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_created_by_id_foreign` (`created_by_id`);

--
-- Indexes for table `booking_tables`
--
ALTER TABLE `booking_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_categories_cate_id_foreign` (`cate_id`),
  ADD KEY `child_categories_sub_cate_id_foreign` (`sub_cate_id`);

--
-- Indexes for table `combopacks`
--
ALTER TABLE `combopacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo_products`
--
ALTER TABLE `combo_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `combo_products_pack_id_foreign` (`pack_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_product_id_foreign` (`product_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deliveries_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food_purchases`
--
ALTER TABLE `food_purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_purchases_branch_id_foreign` (`branch_id`),
  ADD KEY `food_purchases_supplier_id_foreign` (`supplier_id`),
  ADD KEY `food_purchases_food_item_foreign` (`food_item`);

--
-- Indexes for table `food_purchase_histories`
--
ALTER TABLE `food_purchase_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_purchase_histories_food_purchase_id_foreign` (`food_purchase_id`),
  ADD KEY `food_purchase_histories_branch_id_foreign` (`branch_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_delivery_addresses`
--
ALTER TABLE `home_delivery_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_delivery_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `ind_grps`
--
ALTER TABLE `ind_grps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ind_items`
--
ALTER TABLE `ind_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient_purchase`
--
ALTER TABLE `ingredient_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient_stocks`
--
ALTER TABLE `ingredient_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_product_id_foreign` (`product_id`);

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
-- Indexes for table `pickup_addresses`
--
ALTER TABLE `pickup_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pickup_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `privileges_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_foreign` (`category`),
  ADD KEY `products_sub_category_foreign` (`sub_category`),
  ADD KEY `products_child_category_foreign` (`child_category`);

--
-- Indexes for table `product_add_ons`
--
ALTER TABLE `product_add_ons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_add_ons_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_extras`
--
ALTER TABLE `product_extras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_extras_product_id_foreign` (`product_id`),
  ADD KEY `product_extras_extra_id_foreign` (`extra_id`);

--
-- Indexes for table `product_properties`
--
ALTER TABLE `product_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_extras_product_id_foreign` (`product_id`),
  ADD KEY `product_extras_extra_id_foreign` (`properties_id`);

--
-- Indexes for table `product_toppings`
--
ALTER TABLE `product_toppings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_extras_product_id_foreign` (`product_id`),
  ADD KEY `product_extras_extra_id_foreign` (`ingredients_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_extras_product_id_foreign` (`product_id`),
  ADD KEY `product_extras_extra_id_foreign` (`varients_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties_items`
--
ALTER TABLE `properties_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties_sides_in_cart`
--
ALTER TABLE `properties_sides_in_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_details`
--
ALTER TABLE `table_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_carts`
--
ALTER TABLE `user_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_carts_product_id_foreign` (`product_id`),
  ADD KEY `user_carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_orders`
--
ALTER TABLE `web_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `web_orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `web_order_products`
--
ALTER TABLE `web_order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `web_order_products_user_id_foreign` (`user_id`),
  ADD KEY `web_order_products_product_id_foreign` (`product_id`),
  ADD KEY `web_order_products_order_id_foreign` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_stocks`
--
ALTER TABLE `add_stocks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_tables`
--
ALTER TABLE `booking_tables`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combopacks`
--
ALTER TABLE `combopacks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `combo_products`
--
ALTER TABLE `combo_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_delivery_addresses`
--
ALTER TABLE `home_delivery_addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ind_grps`
--
ALTER TABLE `ind_grps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ind_items`
--
ALTER TABLE `ind_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ingredient_purchase`
--
ALTER TABLE `ingredient_purchase`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredient_stocks`
--
ALTER TABLE `ingredient_stocks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickup_addresses`
--
ALTER TABLE `pickup_addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_add_ons`
--
ALTER TABLE `product_add_ons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_extras`
--
ALTER TABLE `product_extras`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_properties`
--
ALTER TABLE `product_properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_toppings`
--
ALTER TABLE `product_toppings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `properties_items`
--
ALTER TABLE `properties_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `properties_sides_in_cart`
--
ALTER TABLE `properties_sides_in_cart`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_details`
--
ALTER TABLE `table_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_carts`
--
ALTER TABLE `user_carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `web_orders`
--
ALTER TABLE `web_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `web_order_products`
--
ALTER TABLE `web_order_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_created_by_id_foreign` FOREIGN KEY (`created_by_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD CONSTRAINT `child_categories_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `child_categories_sub_cate_id_foreign` FOREIGN KEY (`sub_cate_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `combo_products`
--
ALTER TABLE `combo_products`
  ADD CONSTRAINT `combo_products_pack_id_foreign` FOREIGN KEY (`pack_id`) REFERENCES `combopacks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `coupons_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `home_delivery_addresses`
--
ALTER TABLE `home_delivery_addresses`
  ADD CONSTRAINT `home_delivery_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pickup_addresses`
--
ALTER TABLE `pickup_addresses`
  ADD CONSTRAINT `pickup_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `privileges`
--
ALTER TABLE `privileges`
  ADD CONSTRAINT `privileges_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_child_category_foreign` FOREIGN KEY (`child_category`) REFERENCES `child_categories` (`id`),
  ADD CONSTRAINT `products_sub_category_foreign` FOREIGN KEY (`sub_category`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `product_add_ons`
--
ALTER TABLE `product_add_ons`
  ADD CONSTRAINT `product_add_ons_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_extras`
--
ALTER TABLE `product_extras`
  ADD CONSTRAINT `product_extras_extra_id_foreign` FOREIGN KEY (`extra_id`) REFERENCES `extras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_extras_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_carts`
--
ALTER TABLE `user_carts`
  ADD CONSTRAINT `user_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `user_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `web_orders`
--
ALTER TABLE `web_orders`
  ADD CONSTRAINT `web_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `web_order_products`
--
ALTER TABLE `web_order_products`
  ADD CONSTRAINT `web_order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `web_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `web_order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `web_order_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
