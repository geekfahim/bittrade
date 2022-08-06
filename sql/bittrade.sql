-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 04:40 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bittrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `phone`, `dashboard_style`, `remember_token`, `acnt_type_active`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Tester', 'Test', 'sarkar.rakesh80@gmail.com', NULL, '$2y$10$CfQ36bsmsIUuOJQB/bs1OexgANknVZsO4J7CwwKkBC8iUFCoF2e1u', '3444444', 'light', NULL, 'active', 'active', 'Super Admin', '2021-03-10 12:55:53', '2021-07-21 06:45:11'),
(2, 'Admin', 'test', 'admin@happ.com', NULL, '$2y$10$ly8phqbtzKvYoeT.axkZdu98ckXBnmEKmzVogLLy90a.8ROKV0eze', '99494948', 'Dark', NULL, 'active', NULL, 'Admin', '2021-03-11 13:05:41', '2021-03-11 14:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_refered` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_activated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `earnings` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agent`, `total_refered`, `total_activated`, `earnings`, `created_at`, `updated_at`) VALUES
(1, '23', '1', '0', '0', '2021-04-14 16:02:07', '2021-04-14 16:02:07'),
(2, '30', '1', '0', '0', '2021-04-18 09:55:51', '2021-04-18 09:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `ref_key`, `title`, `description`, `created_at`, `updated_at`) VALUES
(5, 'SMsJr1', 'TESTIMONIALS', 'Don\'t take our word for it, here\'s what some of our clients have to say about us', '2020-08-22 11:13:00', '2020-08-22 11:37:15'),
(6, 'toe3Ew', 'Trade in the Moment', 'Put your investing ideas into action with a full range of investments.Enjoy real benefits and rewards on Online Trade.', '2020-08-22 11:29:36', '2020-08-22 11:29:36'),
(7, 'jJwh78', 'We process withdrawal request Promptly', 'Put your investing ideas into action with a full range of investments.Enjoy real benefits and rewards on Online Trade.', '2020-08-22 11:30:22', '2020-08-22 11:30:22'),
(8, 'SLxaB2', 'Invest in the future', 'Put your investing ideas into action with a full range of investments.Enjoy real benefits and rewards on Online Trade.', '2020-08-22 11:30:55', '2020-08-22 11:30:55'),
(9, 'BkP8pH', 'Trade on the Go', 'Trading on the go has be simplified and easy to go', '2020-08-22 11:31:38', '2020-08-22 11:31:38'),
(10, 'W6gTBN', 'Buy,sell,trade,invest has been simplified', 'Put your investing ideas into action with a full range of investments.Enjoy real benefits and rewards on Online Trade.', '2020-08-22 11:31:55', '2020-08-22 11:31:55'),
(11, 'anvs8c', 'About', 'online trade is your no1 cryptocurrency investment portfolio management system', '2020-08-22 11:32:29', '2020-08-22 11:32:29'),
(12, 'epJ4LI', 'we Innovate', 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit', '2020-08-22 11:33:32', '2020-08-22 11:33:32'),
(13, '5hbB6X', 'LINCENSE CERTIFIED', 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit,', '2020-08-22 11:33:55', '2020-08-22 11:33:55'),
(14, 'Zrhm3I', 'WE ARE PROFESSIONAL', 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit,', '2020-08-22 11:34:11', '2020-08-22 11:34:11'),
(15, 'yTKhlt', 'SAVINGS AND INVESTMENT', 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit,', '2020-08-22 11:34:26', '2020-08-22 11:34:26'),
(16, 'u0Ervr', 'OUR SERVICES', 'Why you should Choose us', '2020-08-22 11:34:56', '2020-08-22 11:34:56'),
(17, 'Dwu6Bv', 'STABLE AND PROFITABLE', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', '2020-08-22 11:35:22', '2020-08-22 11:35:22'),
(18, 'eMo1d2', 'INSTANT AND SECURE WITHDRAWALS', 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata', '2020-08-22 11:35:42', '2020-08-22 11:35:42'),
(19, 'kEJPm3', 'REFERRALS PROGRAM', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', '2020-08-22 11:35:59', '2020-08-22 11:35:59'),
(20, 'bBSnFV', 'MULTI CURRENCY SUPPORT', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2020-08-22 11:36:17', '2020-08-22 11:36:17'),
(21, 'DUK9pc', '24/7 CUSTOMER SUPPORT', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', '2020-08-22 11:36:31', '2020-08-22 11:36:31'),
(22, 'VaeiMW', 'ULTIMATE SECURITY', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', '2020-08-22 11:36:49', '2020-08-22 11:36:49'),
(23, 'vr6Xw0', 'OUR INVESTMENT PLAN', 'Choose how you want to invest with us', '2020-08-22 11:37:43', '2020-08-22 11:37:43'),
(25, 'OtEicb', 'LATEST TRANSACTIONS', 'Our goal is to simplify investing so that anyone can be an investor. With this in mind, we hand-pick the investments we offer on our platform.', '2020-08-22 11:38:06', '2020-08-22 11:38:06'),
(26, 'OLZt1I', 'FREQUENTLY ASKED QUESTIONS', 'Our goal is to simplify investing so that anyone can be an investor. With this in mind, we hand-pick the investments we offer on our platforms.', '2020-08-22 11:38:56', '2021-03-12 14:29:50'),
(27, 'U7zpEj', 'WE ACCEPT', 'we accept', '2020-08-22 11:39:43', '2020-08-22 11:39:43'),
(29, '9sNF7G', 'CONTACT US', 'Send us a message and we\'ll respond as soon as possible', '2020-08-22 11:40:06', '2020-08-22 11:40:06'),
(30, '52GPRA', 'ADDRESS', 'No 10 Mission Road, Nigeria', '2020-08-22 11:40:19', '2020-08-22 11:40:19'),
(31, '0EXbji', 'PHONE NUMBER', '+234 9xxxxxxxx', '2020-08-22 11:40:36', '2020-09-14 10:13:57'),
(32, 'HLgyaQ', 'EMAIL', 'support@bittrade.biz', '2020-08-22 11:41:14', '2021-04-14 03:53:12'),
(33, 'ETsdbc', 'Website Description in Footer', 'Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.', '2020-08-22 11:42:05', '2020-08-22 11:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `cp_transactions`
--

CREATE TABLE `cp_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Item_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_paid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_tele_id` int(11) DEFAULT NULL,
  `amount1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_p_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_pv_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_m_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_ipn_secret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_debug_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cp_transactions`
--

INSERT INTO `cp_transactions` (`id`, `txn_id`, `item_name`, `Item_number`, `amount_paid`, `user_plan`, `user_id`, `user_tele_id`, `amount1`, `amount2`, `currency1`, `currency2`, `status`, `status_text`, `type`, `cp_p_key`, `cp_pv_key`, `cp_m_id`, `cp_ipn_secret`, `cp_debug_email`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jdjjjkdkd', 'kkdhdjjdjjkd', 'Victory ID', 'dhhdhd', 'support@onlintrade.com', '2021-03-11 12:46:45', '2021-03-15 12:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `uname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `txn_id`, `user`, `uname`, `amount`, `payment_mode`, `plan`, `status`, `proof`, `created_at`, `updated_at`) VALUES
(2, NULL, 23, NULL, '100', 'Bitcoin', NULL, 'Pending', NULL, '2021-04-14 11:07:05', '2021-04-14 11:07:05'),
(3, NULL, 53, NULL, '500', 'Credit Card', NULL, 'Processed', 'Stripe', '2021-05-26 07:07:45', '2021-05-26 07:07:45'),
(4, NULL, 53, NULL, '1', 'Bank transfer', 2, 'Pending', NULL, '2021-06-12 12:30:53', '2021-06-12 12:30:53'),
(5, NULL, 65, NULL, '100', 'Credit Card', NULL, 'Processed', 'Stripe', '2021-07-19 10:54:56', '2021-07-19 10:54:56');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `ref_key`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, '8yZ6FC', 'How can i withdraw', 'This is how to withdraw', '2021-03-11 14:31:42', '2021-03-11 14:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `img_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `ref_key`, `title`, `description`, `img_path`, `created_at`, `updated_at`) VALUES
(3, '57VnOE', 'Slider1', 'This is carosel 1', 'upload-2.jpg1617292439', '2020-08-23 12:08:38', '2021-04-01 15:53:59'),
(4, 'dC6ZaA', 'Slider2', 'This is slider 2', '2.jpg', '2020-08-23 12:09:00', '2020-08-23 12:09:00'),
(5, '9kHash', 'Slider3', 'This is slider 3', '3.jpg', '2020-08-23 12:09:16', '2020-08-23 12:09:16'),
(6, 'CcW52g', 'Slider4', 'This is Slider 4', '4.jpg', '2020-08-23 12:09:38', '2020-08-23 12:09:38'),
(7, '96i7xH', 'Slider5', 'This is slider 5', '5.jpg', '2020-08-23 12:09:55', '2020-08-23 12:09:55'),
(8, 'DPd1Kn', 'Testimonial 1', 'Testimonial 1', 'testimonial-1.jpg', '2020-08-23 12:24:52', '2020-08-23 12:24:52'),
(9, 'ZqCgDz', 'Testimonial 2', 'Testimonial 2', 'testimonial-2.jpg', '2020-08-23 12:25:07', '2020-08-25 14:57:06'),
(10, 'zNNAgD', 'Testimonial 3', 'Testimonial 3', 'testimonial-3.jpg', '2020-08-23 12:25:22', '2020-08-23 12:25:22'),
(11, '2v0Ut5', 'Testimonial 4', 'Testimonial 4', 'GyDN8Rtestimonial-4.jpg1617380709', '2020-08-23 12:25:37', '2021-04-02 16:25:09'),
(12, '4Rp9Wz', 'Testimonial 5', 'Testimonial 5', 'upload-testimonial-5.jpg1617356092', '2020-08-23 12:25:54', '2021-04-02 09:34:52'),
(13, 'tXf1Zz', 'Testimonial 1', 'Testimonial 1', 'QmSJjKtestimonial-1.jpg1617381068', '2020-08-25 14:52:57', '2021-04-02 16:31:08');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_09_142220_create_sessions_table', 1),
(7, '2021_03_10_082445_create_admins_table', 1),
(8, '2021_03_10_082519_create_agents_table', 1),
(9, '2021_03_10_082715_create_assets_table', 1),
(10, '2021_03_10_082817_create_contents_table', 1),
(11, '2021_03_10_083110_create_cp_transactions_table', 1),
(12, '2021_03_10_083324_create_deposits_table', 1),
(13, '2021_03_10_083400_create_faqs_table', 1),
(14, '2021_03_10_083510_create_images_table', 1),
(15, '2021_03_10_083557_create_mt4_details_table', 1),
(16, '2021_03_10_083627_create_notifications_table', 1),
(17, '2021_03_10_083824_create_plans_table', 1),
(18, '2021_03_10_083850_create_settings_table', 1),
(19, '2021_03_10_083936_create_testimonies_table', 1),
(20, '2021_03_10_084009_create_tp__transactions_table', 1),
(21, '2021_03_10_084031_create_upgrades_table', 1),
(22, '2021_03_10_084120_create_userlogs_table', 1),
(23, '2021_03_10_084140_create_user_plans_table', 1),
(24, '2021_03_10_084235_create_wdmethods_table', 1),
(25, '2021_03_10_084300_create_withdrawals_table', 1),
(26, '2021_05_15_141402_add_ref_id_to_users_table', 2),
(27, '2021_05_26_160811_create_transfers_table', 3),
(28, '2021_06_13_080032_add_shopping_wallet_bal_in_users_table', 4),
(29, '2021_06_13_080439_create_shopping_wallet_histories_table', 4),
(30, '2021_07_20_170326_create_mobile_recharges_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_recharges`
--

CREATE TABLE `mobile_recharges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operator` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `amount_inr` decimal(10,2) NOT NULL DEFAULT '0.00',
  `amount_usd` decimal(10,2) NOT NULL DEFAULT '0.00',
  `location_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `note` text COLLATE utf8mb4_unicode_ci,
  `response` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_recharges`
--

INSERT INTO `mobile_recharges` (`id`, `user_id`, `country`, `country_code`, `phone`, `operator`, `currency`, `amount`, `amount_inr`, `amount_usd`, `location_code`, `location_name`, `status`, `note`, `response`, `created_at`, `updated_at`) VALUES
(1, 65, 'IN', '+91', '7845204615', '200', 'INR', '10.00', '10.00', '0.13', 'TN', NULL, 1, 'Get Talktime of Rs. 7.47. Validity : 0 Days. Talk time : 7.47', '{\"id\":17896,\"date\":\"2021-07-21 07:51:06\",\"custom_identifier\":\"1\",\"recipient_phone\":\"917845204615\",\"country_code\":\"IN\",\"operator_id\":200,\"operator_name\":\"Airtel India\",\"requested_amount\":10,\"requested_amount_currency_code\":\"INR\",\"delivered_amount\":10,\"delivered_amount_currency_code\":\"INR\",\"discount\":\"0.05\",\"discount_currency_code\":\"INR\",\"sender_phone\":\"918001871770\",\"pin_details\":null,\"balance_info\":{\"oldBalance\":69086.54,\"newBalance\":69076.59,\"currencyCode\":\"INR\",\"currencyName\":\"Indian Rupee\",\"updatedAt\":\"2021-07-21 11:51:06\"}}', '2021-07-21 06:21:06', '2021-07-21 06:21:07'),
(2, 65, 'IN', '+91', '7845204615', '200', 'INR', '10.00', '10.00', '0.13', 'TN', NULL, 1, 'Get Talktime of Rs. 7.47. Validity : 0 Days. Talk time : 7.47', '{\"id\":17897,\"date\":\"2021-07-21 07:55:30\",\"custom_identifier\":\"2\",\"recipient_phone\":\"917845204615\",\"country_code\":\"IN\",\"operator_id\":200,\"operator_name\":\"Airtel India\",\"requested_amount\":10,\"requested_amount_currency_code\":\"INR\",\"delivered_amount\":10,\"delivered_amount_currency_code\":\"INR\",\"discount\":\"0.05\",\"discount_currency_code\":\"INR\",\"sender_phone\":\"918001871770\",\"pin_details\":null,\"balance_info\":{\"oldBalance\":69076.59,\"newBalance\":69066.64,\"currencyCode\":\"INR\",\"currencyName\":\"Indian Rupee\",\"updatedAt\":\"2021-07-21 11:55:30\"}}', '2021-07-21 06:25:30', '2021-07-21 06:25:31'),
(3, 65, 'IN', '+91', '7845204615', '200', 'INR', '10.00', '10.00', '0.13', 'TN', NULL, 2, 'Get Talktime of Rs. 7.47. Validity : 0 Days. Talk time : 7.47', NULL, '2021-07-21 06:27:37', '2021-07-21 06:27:37'),
(4, 65, 'IN', '+91', '7845204615', '200', 'INR', '10.00', '10.00', '0.13', 'TN', NULL, 1, 'Get Talktime of Rs. 7.47. Validity : 0 Days. Talk time : 7.47', '{\"id\":17898,\"date\":\"2021-07-21 07:58:52\",\"custom_identifier\":\"4\",\"recipient_phone\":\"917845204615\",\"country_code\":\"IN\",\"operator_id\":200,\"operator_name\":\"Airtel India\",\"requested_amount\":10,\"requested_amount_currency_code\":\"INR\",\"delivered_amount\":10,\"delivered_amount_currency_code\":\"INR\",\"discount\":\"0.05\",\"discount_currency_code\":\"INR\",\"sender_phone\":\"918001871770\",\"pin_details\":null,\"balance_info\":{\"oldBalance\":69066.64,\"newBalance\":69056.69,\"currencyCode\":\"INR\",\"currencyName\":\"Indian Rupee\",\"updatedAt\":\"2021-07-21 11:58:53\"}}', '2021-07-21 06:28:53', '2021-07-21 06:28:54'),
(5, 65, 'IN', '+91', '7845204615', '200', 'INR', '10.00', '10.00', '0.13', 'TN', NULL, 1, 'Get Talktime of Rs. 7.47. Validity : 0 Days. Talk time : 7.47', '{\"id\":3122836,\"date\":\"2021-07-21 08:06:43\",\"custom_identifier\":\"5\",\"recipient_phone\":\"917845204615\",\"country_code\":\"IN\",\"operator_id\":200,\"operator_name\":\"Airtel India\",\"requested_amount\":10,\"requested_amount_currency_code\":\"INR\",\"delivered_amount\":10,\"delivered_amount_currency_code\":\"INR\",\"discount\":\"0.05\",\"discount_currency_code\":\"INR\",\"sender_phone\":\"918001871770\",\"pin_details\":null,\"balance_info\":{\"oldBalance\":5780.82,\"newBalance\":5770.87,\"currencyCode\":\"INR\",\"currencyName\":\"Indian Rupee\",\"updatedAt\":\"2021-07-21 12:06:43\"}}', '2021-07-21 06:36:43', '2021-07-21 06:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `mt4_details`
--

CREATE TABLE `mt4_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `mt4_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mt4_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leverage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(2, 9, 'This is a new mail Victory, kindly apprehiend', '2021-03-12 12:38:30', '2021-03-12 12:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('qywas@mailinator.com', '$2y$10$y2Upwqdg5IiKiw62JYOW9ubWih7Q.85BN9BWT6oz2J1pv4bsI2QiK', '2021-05-21 10:43:46');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gift` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_return` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_interval` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `price`, `min_price`, `max_price`, `minr`, `maxr`, `gift`, `expected_return`, `type`, `increment_interval`, `increment_type`, `increment_amount`, `expiration`, `created_at`, `updated_at`) VALUES
(1, 'Starter', '50', '50', '50', '60', '70', '0', NULL, 'Main', 'Hourly', 'Fixed', '4', 'One month', '2021-03-11 11:10:23', '2021-03-23 10:03:34'),
(2, 'Basic', '150', '150', '150', '175', '200', '10', NULL, 'Main', 'Monthly', 'Percentage', 'no', 'One month', '2021-04-14 10:47:42', '2021-04-14 10:48:16'),
(3, 'Business', '1000', '1000', '5000', '1%', '1.2%', '25', NULL, 'Main', 'Daily', 'Percentage', '1.5%', 'One year', '2021-04-14 10:51:19', '2021-04-14 10:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9dlKEDBNd7rCx4h2O1tIGmOxgMS2TeOpDGhSubex', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQWVHZXhiN05wMWJJZENPanp1c2pZcEFpSFA1MTNGc0xWa0p1S21vciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3QvYml0dHJhZGUvYWRtaW4vZGFzaGJvYXJkL3BsYW5zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1626890683),
('g0HAjpT6OuuGclotMNsNBtjpFNYTMpo2mEbxQ10S', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR2FIU3E2SXZ4a2dSM3N3VFZpYzdGY2FjbVQ3Tjk0M0pRYW1sMzRKMyI7czo3OiJtZXNzYWdlIjtzOjExOiJOb3QgYWxsb3dlZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjE6e2k6MDtzOjc6Im1lc3NhZ2UiO319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3QvYml0dHJhZGUvYWRtaW5sb2dpbi9kYXNoYm9hcmQiO319', 1626886709),
('If6hiweKxCABduS540Sg4ZVmqDO5x9GXiBmZsVSS', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRG9jQ1BRMXJreVRITVBvQjlXbWR2MWlYdjBIdUZtTE9CSjNSUEt2MyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NToiaHR0cDovL2xvY2FsaG9zdC9iaXR0cmFkZS9kYXNoYm9hcmQvcmVmZXJ1c2VyIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3QvYml0dHJhZGUvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1626890426),
('MH4TeNxyMpSYLF2FGaqUqJftlShsLcjvQ7tw6gFE', 65, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiekdCak81aktOUkhEOUJ5eFdJNGJheFYwTThrVTNOcWdsd3FaUzNaVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9sb2NhbGhvc3QvYml0dHJhZGUvZGFzaGJvYXJkL3JlZmVydXNlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY1O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkMnRPN0Z3YTZ4bFZQc2ZWMHlYdG9TT3BjQVlxS0MvU043UlMvZnpGUllOY3c0a0ZWVm44THUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDJ0TzdGd2E2eGxWUHNmVjB5WHRvU09wY0FZcUtDL1NON1JTL2Z6RlJZTmN3NGtGVlZuOEx1IjtzOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1626870652),
('pba16vRYOOSc5wXW1H3PPJcM8Z3rcwMyoN002d5N', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiamdIQkpRb25BQVkybWo2UTFxeXZGS2JWUk83cXQ4ZjBsNUhDWlRyTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3QvYml0dHJhZGUvYWRtaW4vZGFzaGJvYXJkL3NldHRpbmdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1626886707);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltc_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_s_k` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_p_k` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_cs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_ci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekend_trade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_translate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_bonus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `files_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawk_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_2fa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_kyc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_with` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_verification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `withdrawal_option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'auto',
  `dashboard_option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_preference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_annoc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_fee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthlyfee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quarterlyfee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearlyfee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newupdate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `description`, `currency`, `s_currency`, `bank_name`, `account_name`, `account_number`, `eth_address`, `btc_address`, `ltc_address`, `payment_mode`, `location`, `s_s_k`, `s_p_k`, `pp_cs`, `pp_ci`, `keywords`, `site_title`, `site_address`, `logo`, `favicon`, `trade_mode`, `weekend_trade`, `google_translate`, `contact_email`, `referral_commission`, `referral_commission1`, `referral_commission2`, `referral_commission3`, `referral_commission4`, `referral_commission5`, `signup_bonus`, `files_key`, `tawk_to`, `enable_2fa`, `enable_kyc`, `enable_with`, `enable_verification`, `withdrawal_option`, `dashboard_option`, `site_preference`, `enable_annoc`, `commission_type`, `commission_fee`, `monthlyfee`, `quarterlyfee`, `yearlyfee`, `newupdate`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Bittrade', 'We are online', '$', 'USD', 'International BNK', 'Admin account c', '99388383', 'sdjkbhfff', '38F5V4MpStLoda2W9S3VrGRsiDJyNcGqz1', 'jjhhdhdhd', '123567', 'Local', 'sk_test_4eC39HqLyjWDarjtT1zdp7dc', 'pk_test_TYooMQauvdEDq54NiTphI7jx', 'jijdjkdkdk', 'iidjdjdj', 'Bittrade, forex, cfd,', 'Welcome to Bittrade', 'https://www.bittrade.biz', 'KHJ9q3favicon.png1618340684', 'lcv44afavicon.png1618340463', 'on', 'true', 'on', 'support@bittrade.biz', '10', '7', '5', '3', '2', '1', '2', 'OT_viXHf', 'tawk to code', 'no', 'yes', 'false', 'false', 'manual', 'dark', 'Web dashboard only', 'off', NULL, NULL, '5', '25', '100', 'Welcome to Bittrade version 3 with a lot of Security Features', NULL, NULL, '2021-04-18 18:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_wallet_histories`
--

CREATE TABLE `shopping_wallet_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-Added,2-Withdraw,3-Used for Shopping',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `to_deduct` decimal(10,2) DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txn_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - Pending, 1 - Completed, 2 - Failed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_wallet_histories`
--

INSERT INTO `shopping_wallet_histories` (`id`, `type`, `user_id`, `amount`, `to_deduct`, `payment_mode`, `proof`, `txn_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 53, '10.00', NULL, 'Credit Card', 'Stripe', NULL, 1, '2021-06-13 03:10:51', '2021-06-13 03:10:51'),
(2, 1, 53, '25.00', NULL, 'Credit Card', 'Stripe', NULL, 1, '2021-06-13 03:12:52', '2021-06-13 03:12:52'),
(3, 1, 53, '5.00', NULL, 'Bank transfer', 'zyeJvLGifts-under-1K.jpg1623574534', NULL, 1, '2021-06-13 03:25:34', '2021-06-13 03:46:27'),
(5, 1, 53, '10.00', NULL, 'Credit Card', 'Stripe', NULL, 1, '2021-06-13 05:30:44', '2021-06-13 05:30:44'),
(6, 1, 53, '25.00', NULL, 'Bitcoin', NULL, NULL, 1, '2021-06-13 05:35:36', '2021-06-13 05:36:15'),
(7, 1, 53, '15.00', NULL, 'Admin', '', NULL, 1, '2021-06-14 11:24:19', '2021-06-14 11:24:19'),
(8, 1, 53, '15.00', NULL, 'Admin', '', NULL, 1, '2021-06-14 11:24:50', '2021-06-14 11:24:50'),
(9, 1, 53, '10.00', NULL, 'Admin', '', NULL, 1, '2021-06-14 11:25:24', '2021-06-14 11:25:24'),
(10, 2, 53, '25.00', NULL, 'Admin', '', NULL, 1, '2021-06-14 11:25:45', '2021-06-14 11:25:45'),
(11, 1, 53, '10.00', NULL, 'Admin', '', NULL, 1, '2021-06-14 11:29:02', '2021-06-14 11:29:02'),
(12, 2, 53, '10.00', NULL, 'Admin', '', NULL, 1, '2021-06-14 11:32:05', '2021-06-14 11:32:05'),
(13, 2, 53, '75.00', NULL, 'Admin', '', NULL, 1, '2021-06-14 11:32:37', '2021-06-14 11:32:37'),
(14, 1, 53, '100.00', NULL, 'Admin', '', NULL, 1, '2021-06-14 11:35:02', '2021-06-14 11:35:02'),
(15, 1, 65, '100.00', NULL, 'Credit Card', 'Stripe', NULL, 1, '2021-07-20 11:53:31', '2021-07-20 11:53:31'),
(16, 2, 65, '0.13', NULL, 'Mobile Recharge', NULL, NULL, 1, '2021-07-21 06:21:07', '2021-07-21 06:21:07'),
(17, 2, 65, '0.13', NULL, 'Mobile Recharge', NULL, NULL, 1, '2021-07-21 06:25:31', '2021-07-21 06:25:31'),
(18, 2, 65, '0.13', NULL, 'Mobile Recharge', NULL, NULL, 1, '2021-07-21 06:28:54', '2021-07-21 06:28:54'),
(19, 2, 65, '0.13', NULL, 'Mobile Recharge', NULL, NULL, 1, '2021-07-21 06:37:08', '2021-07-21 06:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `what_is_said` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `ref_key`, `position`, `name`, `what_is_said`, `picture`, `created_at`, `updated_at`) VALUES
(2, 'mZVhqO', 'Principal', 'Sarah Ona', 'I love this platform', 'upload-testimonial-1.jpg1617292794', '2021-04-01 15:00:56', '2021-04-01 15:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `tp__transactions`
--

CREATE TABLE `tp__transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tp__transactions`
--

INSERT INTO `tp__transactions` (`id`, `plan`, `user`, `amount`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Starter', 9, '50', 'Plan purchase', '2021-03-11 11:29:46', '2021-03-11 11:29:46'),
(2, 'Credit', 13, '100', 'Deposit', '2021-03-11 13:53:32', '2021-03-11 13:53:32'),
(3, 'Credit', 9, '10', 'Deposit', '2021-03-11 13:53:57', '2021-03-11 13:53:57'),
(4, 'Credit', 9, '10', 'Ref_Bonus', '2021-03-11 13:55:43', '2021-03-11 13:55:43'),
(5, 'Starter', 9, '20', 'ROI', '2021-03-11 14:03:06', '2021-03-11 14:03:06'),
(6, 'Credit', 9, '50', 'Deposit', '2021-03-12 13:34:08', '2021-03-12 13:34:08'),
(7, 'Credit', 18, '100', 'Deposit', '2021-03-19 12:58:10', '2021-03-19 12:58:10'),
(8, 'Credit', 19, '100', 'Deposit', '2021-03-22 09:33:39', '2021-03-22 09:33:39'),
(9, 'Starter', 19, '50', 'Plan purchase', '2021-03-22 09:34:27', '2021-03-22 09:34:27'),
(10, 'Starter', 53, '50', 'Plan purchase', '2021-05-26 07:08:04', '2021-05-26 07:08:04'),
(11, 'Basic', 53, '150', 'Plan purchase', '2021-05-26 07:12:24', '2021-05-26 07:12:24'),
(12, 'Credit', 53, '15', 'Shopping_Wallet', '2021-06-14 11:24:50', '2021-06-14 11:24:50'),
(13, 'Credit', 53, '10', 'Shopping_Wallet', '2021-06-14 11:25:24', '2021-06-14 11:25:24'),
(14, 'Credit reversal', 53, '25', 'Shopping_Wallet', '2021-06-14 11:25:45', '2021-06-14 11:25:45'),
(15, 'Credit', 53, '10', 'Shopping_Wallet', '2021-06-14 11:29:02', '2021-06-14 11:29:02'),
(16, 'Credit reversal', 53, '10', 'Shopping_Wallet', '2021-06-14 11:32:06', '2021-06-14 11:32:06'),
(17, 'Credit reversal', 53, '75', 'Shopping_Wallet', '2021-06-14 11:32:38', '2021-06-14 11:32:38'),
(18, 'Credit', 53, '100', 'Shopping_Wallet', '2021-06-14 11:35:02', '2021-06-14 11:35:02'),
(19, 'Starter', 65, '50', 'Plan purchase', '2021-07-19 10:55:20', '2021-07-19 10:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user_id` bigint(20) UNSIGNED NOT NULL,
  `to_user_id` bigint(20) UNSIGNED NOT NULL,
  `send_amount` decimal(10,2) NOT NULL,
  `receive_amount` decimal(10,2) NOT NULL,
  `admin_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `otp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp_expiry_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 - Pending, 1 - Completed, 2 - Failed',
  `transfer_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `from_user_id`, `to_user_id`, `send_amount`, `receive_amount`, `admin_amount`, `otp`, `otp_expiry_at`, `status`, `transfer_at`, `created_at`, `updated_at`) VALUES
(1, 53, 54, '10.00', '9.50', '0.50', '411977', NULL, 2, NULL, '2021-05-25 10:58:43', '2021-05-27 02:33:31'),
(2, 53, 54, '10.00', '9.50', '0.50', '217003', NULL, 1, NULL, '2021-05-26 11:24:45', '2021-05-26 11:25:00'),
(3, 53, 54, '25.00', '23.75', '1.25', '306120', NULL, 1, NULL, '2021-05-26 11:31:54', '2021-05-26 11:45:20'),
(4, 53, 54, '10.00', '9.50', '0.50', '634923', NULL, 1, NULL, '2021-05-26 11:45:39', '2021-05-26 11:45:57'),
(5, 53, 54, '11.00', '10.45', '0.55', '731140', NULL, 1, NULL, '2021-05-26 11:52:53', '2021-05-26 11:53:07'),
(6, 53, 54, '10.00', '9.50', '0.50', '797261', NULL, 1, NULL, '2021-05-27 07:58:16', '2021-05-27 07:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `upgrades`
--

CREATE TABLE `upgrades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) DEFAULT NULL,
  `times` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `dob` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltc_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_bal` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shopping_wallet_bal` decimal(10,2) NOT NULL DEFAULT '0.00',
  `roi` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ref_bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `signup_bonus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_trade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_released` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ref_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_verify` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entered_at` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `trade_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `act_session` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `dob`, `address`, `country`, `phone`, `dashboard_style`, `bank_name`, `account_name`, `account_number`, `acnt_type_active`, `btc_address`, `eth_address`, `ltc_address`, `plan`, `user_plan`, `account_bal`, `shopping_wallet_bal`, `roi`, `bonus`, `ref_bonus`, `signup_bonus`, `auto_trade`, `bonus_released`, `ref_by`, `ref_link`, `ref_id`, `id_card`, `passport`, `account_verify`, `entered_at`, `activated_at`, `last_growth`, `status`, `trade_mode`, `act_session`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(19, 'Test User', 'test1234@happ.com', '2021-03-19 13:11:26', '$2y$10$0IGp/nq4pK.IrYc4KjID1uWyNUqGKKmlc6c7ScUy7a08eMYWHoPyS', NULL, NULL, '1998-06-18', 'Midreds', 'Nigeria', '8377373', 'dark', NULL, NULL, NULL, NULL, 'jhjdhhdhdhhdhd', NULL, NULL, '1', '2', '360.00', '0.00', '0.00', '0.00', '60.00', '0', NULL, '0.00', NULL, 'http://127.0.0.1:8000/ref/19', 'abc123', 'upload-2.jpg1617297783', 'upload-4.jpg1617297783', 'Under review', '2021-03-22 10:34:28', NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-03-19 13:10:29', '2021-07-19 10:54:56'),
(21, 'abcd', 'sarkar.rakesh80@gmail.com', NULL, '$2y$10$Vu2m6wT2Mxrh.VSCJlpffe9qFUp8iWW2ehgpIcWrqJ44LCfnOYZP.', NULL, NULL, NULL, NULL, 'India', '8001871770', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-14 02:29:20', '2021-04-14 02:40:03'),
(22, 'xgfhxfh', 'vckharwar@gmail.com', '2021-04-14 02:40:03', '$2y$10$1EHRYuL6POpf52988GZjJ.Q1onBO1V/a0gxMjw3KYHOCQCPTt4Cku', NULL, NULL, NULL, NULL, 'India', '+917666887133', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-14 02:38:24', '2021-04-14 02:40:03'),
(23, 'abcd', 'daniel.go4trip@gmail.com', '2021-04-14 02:40:48', '$2y$10$mtOT7w.JElSZsp6WPZvz9.ACqv7PVGRbSAH64yBRzMHsCfzdPq5HO', NULL, NULL, NULL, NULL, 'India', '8001871770', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-14 02:38:46', '2021-05-04 15:51:10'),
(24, 'bittrade', 'sarkar.mitali2008@gmail.com', '2021-04-14 14:57:48', '$2y$10$RyhLgWJ3IrD0qDUStPc18OqnGoVej.E7aJBa1U.2jnwkWzVx/11w.', NULL, NULL, NULL, NULL, 'India', '123456789', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', '23', 'https://www.bittrade.biz/ref/24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-14 14:55:35', '2021-04-14 16:02:07'),
(25, 'Md Omar Faruk', 'smartworldbd5@gmail.com', '2021-04-15 06:52:13', '$2y$10$TH.YYezaFFNe1e/f0YnmduStJQG9.XvC0e8FoT26Hu9zdg80ZYsJu', NULL, NULL, NULL, NULL, 'Bangladesh', '+8801673000030', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', '30', 'https://www.bittrade.biz/ref/25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-15 06:50:53', '2021-04-18 09:55:51'),
(26, 'Best', 'taniaislammun+7@gmail.com', NULL, '$2y$10$w3ayOS454nfZBRWfhbzLi.2rE9RuUWEOr6AUoB1lgwgbC3c4Nyhee', NULL, NULL, NULL, NULL, 'Australia', '01787443344', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-15 12:37:43', '2021-04-15 19:16:42'),
(27, 'Taohidul Islam Tusar', 'taohidulislamtusar@gmail.com', '2021-04-17 07:35:40', '$2y$10$8Qikalb6Mj2HRLaKGVkhFeqkmgB6vXt5SxqQv26qhWnTIIXEiKKfS', NULL, NULL, '1999-12-15', 'West Jafrabad, Puranbazar Chandpur', 'Bangladesh', '+8801860534881', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/27', NULL, 'TLir1dScreenshot_20210410-201842.png1618646765', 'TLir1dScreenshot_20210410-201901.png1618646765', 'Under review', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-17 07:32:44', '2021-04-19 17:07:47'),
(28, 'Sudipta', 'sudiptabera887@gmail.com', '2021-04-17 09:45:25', '$2y$10$IBYZYVFnxdj9412D.JREX.1ESp5HCTLmzFSoq0Rt7sXNiXLblyQ1S', NULL, NULL, NULL, NULL, 'India', '8167547178', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-17 09:43:42', '2021-04-17 09:45:25'),
(29, 'Parvez Sarker', 'parvezsarker76@gmail.com', '2021-04-17 10:09:54', '$2y$10$BzpscFTNWTK8CJZ1US9.KuPOiKs2f8z6/u/lXEsmSczumxCvEC.MK', NULL, NULL, NULL, NULL, 'Bangladesh', '01819017302', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-17 10:08:30', '2021-04-17 10:09:54'),
(30, 'WonderMunna', 'wondermunna1@gmail.com', '2021-04-18 01:42:26', '$2y$10$NqdmLjQ0o9cVQPBWv1vJduV2hOnlatR5JSKZKMpvuGxhL95iHzqKu', NULL, NULL, NULL, NULL, 'Bangladesh', '+8801303132390', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 01:40:23', '2021-04-18 01:42:27'),
(31, 'Md Abul hasim', 'mdabulhasim680@gmail.com', '2021-04-27 18:06:31', '$2y$10$045Tn2SmEqZfuh4KKII0duzENXDuFuQSEshon0elHqmTaFvDYEA.m', NULL, NULL, NULL, NULL, 'Bangladesh', '01715253593', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 01:57:34', '2021-04-27 18:10:32'),
(32, 'MD Kamrul Hasan Lemon', 'hmkamrulcant88@gmail.com', '2021-04-18 02:09:57', '$2y$10$kJ7s/IlbsY2JiAXV6ueRBeXfGO55zJYtH/bHqdCqZHFhbevBPTYTi', NULL, NULL, NULL, NULL, 'Bangladesh', '01860951244', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 02:08:33', '2021-04-18 02:09:57'),
(33, 'MD. FORHAD HOSSAIN', 'forhadofficial406@gmail.com', NULL, '$2y$10$wrUHkZJ.nXN9exxgLP15/eE9L0KRev17ZO095a2dJOvjAWshdzUoG', NULL, NULL, NULL, NULL, 'Bangladesh', '01837909983', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 02:34:06', '2021-04-18 05:14:42'),
(34, 'Md Abul Hasim', 'mdabulhasim4550@gmail.com', NULL, '$2y$10$Sqp.kTRzphCz62ng9zBZG.NxMQvdfiKoTJ7OfzrzE./blEKq2cwPG', NULL, NULL, NULL, NULL, 'Bangladesh', '+441715253593', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 12:35:41', '2021-04-18 12:39:23'),
(35, 'Mr Apon', 'mhmtradingco77@gmail.com', NULL, '$2y$10$AxqenR3.lZheWbz.rzb/AegPovQsDbKBkO/810OeJrOXo8qVd6wyq', NULL, NULL, NULL, NULL, 'Bangladesh', '01812662777', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 13:06:05', '2021-04-18 13:07:28'),
(36, 'Broken', 'sawon7202@gmail.com', NULL, '$2y$10$uPUrybAkBjKISFAXzE4iWOkOb/XFaylC0DCNVLsrTPpGnOii09LT.', NULL, NULL, NULL, NULL, 'Bangladesh', '01727319642', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 13:29:34', '2021-04-18 14:07:46'),
(37, 'Md alam mia', 'rafiqulalom1988@gmail.com', '2021-04-18 14:07:46', '$2y$10$EdvY55F4xuRU1iegoiNlxORWNuQ5Tiu06pUJiKHuwaoslTLg0zKOm', NULL, NULL, NULL, NULL, 'Bangladesh', '01777 948315', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 14:03:36', '2021-04-18 14:07:46'),
(38, 'Md Delwar Hossen', 'hossendeluar90@gmail.com', '2021-04-18 16:07:07', '$2y$10$FcgDDxO3j71Idn2Avl0CaePRIZ0RKFjgdI5TcoRJl8cmOdgaUtHcC', NULL, NULL, NULL, NULL, 'Bangladesh', '01686628528', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 16:05:12', '2021-04-18 16:07:07'),
(39, 'Abdul Kader', 'abdulkader161513@gmail.com', '2021-04-18 16:09:16', '$2y$10$NZCEaKJsVd.u3KKRA7i3Pu0tV8U9jWogEk11rxAJy.gE4vhJVsLNW', NULL, NULL, NULL, NULL, 'Bangladesh', '01318549919', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 16:07:19', '2021-04-18 16:09:17'),
(40, 'Sourav Halder', 'souvoroy@gmail.com', '2021-04-18 17:05:49', '$2y$10$ZJ542ba2JasGUX8JLlhEzuRPiSyOSmankZlK/TY.WCDhGmCNjFsnS', NULL, NULL, NULL, NULL, 'Andorra', '08768271988', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-18 17:04:18', '2021-04-18 17:05:49'),
(41, 'Norbel Lebron', 'nlebron1983@gmail.com', '2021-04-19 22:47:01', '$2y$10$zpwUL9dfUuXhqpUCPyXo6e4gjl8E8ua9RsxCk64UukaE.6EBcybDe', NULL, NULL, NULL, NULL, 'United States of America', '7873617353', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.00', '0.00', '0.00', '2.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-19 22:45:18', '2021-04-19 22:47:47'),
(42, 'Jacob Zahra', 'gracealicejoy@gmail.com', NULL, '$2y$10$SwsD3Wi.Yf/IoadCxjFOVOtoe6cYRJpzh4dm/.SvGtmcrIStZyKl.', NULL, NULL, NULL, NULL, 'Australia', '+61402716695', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.00', '0.00', '0.00', '2.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-22 17:50:24', '2021-04-23 17:52:04'),
(43, 'MT.bơ', 'ngaovc99@gmail.com', '2021-04-24 21:34:11', '$2y$10$qclfmNsGmY/pm3oXNX0EkeP.9Y/skw3TjnkBKaP2sQMkrWVMpFP6W', NULL, NULL, NULL, NULL, NULL, '0819143323', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.00', '0.00', '0.00', '2.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-24 21:10:20', '2021-04-24 21:34:11'),
(44, 'Thettun', 'canecanechit@gmail.com', '2021-04-26 00:35:36', '$2y$10$RiDJAziaXXAEVCdPmfrO1.xWXmvOsIXTSIj9qPfPqOWTrG2ab2Ohi', NULL, NULL, NULL, NULL, 'Myanmar', '959769834760', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.00', '0.00', '0.00', '2.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-26 00:33:57', '2021-04-26 00:35:36'),
(45, 'Md Zahir', 'sykatilgamos2001@gmail.com', '2021-04-27 16:51:17', '$2y$10$6qmZpk57L5mV6IUpJ3yeWezLe7x5V.93zHxqnoEyjSbuvJHQ2OgQe', NULL, NULL, NULL, NULL, 'Bangladesh', '01633073424', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.00', '0.00', '0.00', '2.00', '0.00', '0', NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-04-27 16:49:10', '2021-04-27 16:51:18'),
(46, 'Constance Callahan', 'bowawe@mailinator.com', NULL, '$2y$10$RPqDfOZLu2Nix2SccTT2UuYO1S4sMuOxVVVcsNaYRpYpdMJ7wz/F2', NULL, NULL, NULL, NULL, 'East Timor', '+1 (197) 497-2259', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '1', 'https://www.bittrade.biz/ref/LSDRFF', 'LSDRFF', NULL, NULL, NULL, NULL, NULL, NULL, 'blocked', NULL, NULL, NULL, NULL, NULL, '2021-05-15 08:50:10', '2021-05-20 10:14:22'),
(47, 'Thane Hanson', 'lyvuqe@mailinator.com', NULL, '$2y$10$2YYb8rTtZ5tDsNRVNfzBZeius18KNN11lqu44V0thtWJNRGgzCv5O', NULL, NULL, NULL, NULL, 'Sudan', '+1 (796) 305-7529', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '46', 'https://www.bittrade.biz/ref/1CI02N', '1CI02N', NULL, NULL, NULL, NULL, NULL, NULL, 'blocked', NULL, NULL, NULL, NULL, NULL, '2021-05-15 08:52:41', '2021-05-20 10:14:22'),
(48, 'Shannon Hardy', 'reharybysa@mailinator.com', NULL, '$2y$10$cdhkB.TWcerfP34hVnNvneDcP7EpKBNDWfRHxqTd382TKwTp972FO', NULL, NULL, NULL, NULL, 'Bosnia & Herzegovina', '+1 (243) 457-1653', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/THJSZ9', 'THJSZ9', NULL, NULL, NULL, NULL, NULL, NULL, 'blocked', NULL, NULL, NULL, NULL, NULL, '2021-05-20 09:37:16', '2021-05-20 10:14:22'),
(49, 'Thaddeus Mcmillan', 'vewibuxen@mailinator.com', NULL, '$2y$10$IFCtZPZSUU0hFCHLaht63.rgtpSWZS0RnMCPMrhuBpUb6hVWjWSgS', NULL, NULL, NULL, NULL, 'Indonesia', '+1 (862) 705-9668', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/RAW0CS', 'RAW0CS', NULL, NULL, NULL, NULL, NULL, NULL, 'blocked', NULL, NULL, NULL, NULL, NULL, '2021-05-20 09:39:21', '2021-05-24 06:01:54'),
(50, 'Joy Richard', 'qywas@mailinator.com', '2021-05-20 10:14:21', '$2y$10$UgBtgvwVgvA.8MIvTvry.eeGfmfAifiaMAccEqT25m6l0VzOB37D2', NULL, NULL, NULL, NULL, 'Malawi', '+1 (213) 232-4146', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/NT3DRJ', 'NT3DRJ', NULL, NULL, NULL, NULL, NULL, NULL, 'blocked', NULL, NULL, '3qLui3O0P11CrYBj5dSScYYKHH2iVBG8zmwPjRaWkbWThom9hqKJ7gNQUd2i', NULL, NULL, '2021-05-20 09:47:01', '2021-05-24 06:01:54'),
(51, 'Halee Graves', 'xafugy@mailinator.com', NULL, '$2y$10$4OEGIv9CwGdGaOZnd8Fu5eV62pBnj8bBQ6i7UXohO3xkIpE5O.2SK', NULL, NULL, NULL, NULL, 'Mauritius', '+1 (402) 306-8472', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/CZ6W6L', 'CZ6W6L', NULL, NULL, NULL, NULL, NULL, NULL, 'blocked', NULL, NULL, NULL, NULL, NULL, '2021-05-20 11:38:03', '2021-05-24 06:01:54'),
(52, 'Halla Swanson', 'fylatyfas@mailinator.com', NULL, '$2y$10$W/9.UYkrv64Oqt51JPPIYO8Gw3daPEfTzWhtRISw73I4ECnqJyTVy', NULL, NULL, NULL, NULL, 'Ghana', '+1 (873) 106-8774', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4.00', '0.00', '0.00', '4.00', '0.00', 'received', NULL, '0.00', '19', 'https://www.bittrade.biz/ref/DGHIYC', 'DGHIYC', NULL, NULL, NULL, NULL, NULL, NULL, 'blocked', NULL, NULL, NULL, NULL, NULL, '2021-05-26 06:29:56', '2021-05-26 06:48:20'),
(53, 'Helen Wilder', 'vivek@gmail.com', '2021-05-26 06:46:15', '$2y$10$LDRlHdUSounZJTZDibCu.u.CZDD0o5HkyEjRMOu/FG1ylfYystosa', NULL, NULL, NULL, NULL, 'Ireland', '+1 (723) 209-5503', 'dark', 'Hedwig Pacheco', 'Dolan Hammond', 'Ad adipisci tenetur', NULL, 'Molestiae sit qui n', 'Enim deserunt tempor', 'Maxime eaque dolorem', '2', '2', '114.00', '100.00', '0.00', '2.00', '0.00', 'received', NULL, '0.00', '19', 'https://www.bittrade.biz/ref/MO1T9Y', 'MO1T9Y', 'OZL56hNew Project.jpg1622033256', 'OZL56hNew Project.jpg1622033256', 'Verified', '2021-05-26 12:42:24', NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-26 06:41:27', '2021-06-14 11:35:02'),
(54, 'Noel Johns', 'vovikaf@mailinator.com', NULL, '$2y$10$CARVpO4htuaUvk1ykWPs2u6cW4NMuzSsvVMNUuOwvrgdz8QjrdyzS', NULL, NULL, NULL, NULL, 'Hong Kong', '+1 (969) 714-1404', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '74.70', '0.00', '0.00', '2.00', '0.00', 'received', NULL, '0.00', '19', 'https://www.bittrade.biz/ref/KEINWD', 'KEINWD', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-26 10:22:53', '2021-05-27 07:58:35'),
(55, 'Kellie Horne', 'juxojowafo@mailinator.com', NULL, '$2y$10$K0piUg8zk5zOy79nFK8L1.p1qKhvWIJVsWdRtUmM4c2UK./8ulSG2', NULL, NULL, NULL, NULL, 'El Salvador', '+1 (759) 417-5853', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/TVFYRM', 'TVFYRM', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-27 08:24:20', '2021-06-12 10:47:12'),
(56, 'Cairo Cannon', 'musesirytu@mailinator.com', NULL, '$2y$10$o2MHRL5NblpxGybkPvSYaenrWFxqQJPvTslVexx7qL4J07KVQkCuS', NULL, NULL, NULL, NULL, 'Ukraine', '+1 (525) 704-8311', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/2M6MSF', '2M6MSF', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-27 08:27:33', '2021-06-12 10:47:12'),
(57, 'Cairo Cannon', 'musesirytu1@mailinator.com', NULL, '$2y$10$U1XjZUGFaJPW172eYe338.xmOFYwVLWEJj8JayKOf.hp3ryOWv4Zy', NULL, NULL, NULL, NULL, 'Bahrain', '+1 (525) 704-8311', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/RKLRJG', 'RKLRJG', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-27 08:28:00', '2021-06-12 10:47:12'),
(58, 'Cairo Cannon', 'musesirytu2@mailinator.com', NULL, '$2y$10$vm2tS3HgyzAlnVZF3uWWsOrSvfREpK2qYUB5xPUkCUGmfHThPBVxu', NULL, NULL, NULL, NULL, 'Austria', '+1 (525) 704-8311', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/IOS4FF', 'IOS4FF', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-27 08:29:03', '2021-06-12 10:47:12'),
(59, 'Cairo Cannon', 'musesirytu3@mailinator.com', NULL, '$2y$10$Yo/7DRlmrw6cdF9Qrr029.AXLBvv/1AevPYEJeJFuQBJFYjXJqxq2', NULL, NULL, NULL, NULL, 'Bahrain', '+1 (525) 704-8311', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/QHHKKB', 'QHHKKB', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-27 08:36:08', '2021-06-12 10:47:12'),
(60, 'Cairo Cannon', 'musesirytu32@mailinator.com', NULL, '$2y$10$vJrQrTVktNYF2Wb8Ul4gPuRMzK9K7ZW.CWBxiJj4/mEi4ZBmPZ5ja', NULL, NULL, NULL, NULL, 'Azerbaijan', '+1 (525) 704-8311', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/STVQFV', 'STVQFV', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-27 08:36:35', '2021-06-12 10:47:12'),
(61, 'Cairo Cannon', 'musesirytu232@mailinator.com', NULL, '$2y$10$BPUqLTMDGUIZmNEo1Z37wu0O.WTqF0CVH6VUX2iNuHGItGSQWZUs6', NULL, NULL, NULL, NULL, 'Aruba', '+1 (525) 704-8311', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/GBZIM2', 'GBZIM2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-27 08:38:02', '2021-06-12 10:47:12'),
(62, 'Kareem Moore', 'zuxiv@mailinator.com', NULL, '$2y$10$uxKP3TXB8e3O.bMTJJdf8OeuSDav0CpHCDYBaAWbzG5yw59s646dm', NULL, NULL, NULL, NULL, 'Latvia', '+1 (464) 108-6485', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '19', 'https://www.bittrade.biz/ref/8IMW9A', '8IMW9A', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-27 08:38:27', '2021-06-12 10:47:12'),
(63, 'Garrison Arnold', 'zebacip@mailinator.com', NULL, '$2y$10$NDWFxVBa6jNogiodOuPN1ehFzIpaxTVa42A27iwywJ0LPLsBUaYgO', NULL, NULL, NULL, NULL, NULL, '24', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/63', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-28 08:49:26', '2021-05-28 08:49:26'),
(64, 'Quintessa Palmer', 'jivudexe@mailinator.com', NULL, '$2y$10$Y1omLv8TOHGAll6YXHf3P.moJEgU/8FGtnXd.3oqlSdF5PiIuILHu', NULL, NULL, NULL, NULL, NULL, '34', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', NULL, 'https://www.bittrade.biz/ref/9CXUR2', '9CXUR2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-05-28 08:52:43', '2021-05-28 08:52:43'),
(65, 'Andrew Mays', 'wyziwy@mailinator.com', '2021-07-19 15:49:34', '$2y$10$2tO7Fwa6xlVPsfV0yXtoSOpcAYqKC/SN7RS/fzFRYNcw4kFVVn8Lu', NULL, NULL, NULL, NULL, 'Trinidad & Tobago', '+1 (489) 858-9489', 'dark', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '52.00', '99.48', '0.00', '2.00', '0.00', 'received', NULL, '0.00', '19', 'https://www.bittrade.biz/ref/PKBD8T', 'PKBD8T', NULL, NULL, NULL, '2021-07-19 16:25:21', NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '2021-07-19 10:18:29', '2021-07-21 06:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `plan`, `user`, `amount`, `activate`, `active`, `inv_duration`, `expire_date`, `activated_at`, `last_growth`, `created_at`, `updated_at`) VALUES
(1, 1, 53, '50', NULL, 'yes', 'One month', NULL, '2021-05-26 12:38:05', '2021-05-26 12:38:05', '2021-05-26 07:08:05', '2021-05-26 07:08:05'),
(2, 2, 53, '150', NULL, 'yes', 'One month', NULL, '2021-05-26 12:42:24', '2021-05-26 12:42:24', '2021-05-26 07:12:24', '2021-05-26 07:12:24'),
(3, 1, 65, '50', NULL, 'yes', 'One month', NULL, '2021-07-19 16:25:20', '2021-07-19 16:25:20', '2021-07-19 10:55:20', '2021-07-19 10:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `wdmethods`
--

CREATE TABLE `wdmethods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charges_fixed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charges_percentage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wdmethods`
--

INSERT INTO `wdmethods` (`id`, `name`, `minimum`, `maximum`, `charges_fixed`, `charges_percentage`, `duration`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bitcoin', '25', '10000', '0', '12', 'Instant', 'withdrawal', 'enabled', '2021-03-11 11:53:32', '2021-03-11 11:53:32'),
(2, 'Ethereum', '25', '2100', '0', '12', 'Instant', 'withdrawal', 'enabled', '2021-03-22 10:36:03', '2021-03-22 10:36:03'),
(3, 'Litecoin', '25', '10000', '0', '12', 'Instant', 'withdrawal', 'enabled', '2021-03-22 10:36:33', '2021-03-22 10:36:33'),
(4, 'Bank transfer', '25', '2100', '0', '12', 'Instant', 'withdrawal', 'enabled', '2021-03-22 10:37:08', '2021-05-26 10:13:22'),
(5, 'Wallet', '10', '10000', '0', '5', 'instant', 'transfer', 'enabled', '2021-05-26 15:43:55', '2021-05-26 15:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `uname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_deduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `txn_id`, `user`, `uname`, `amount`, `to_deduct`, `status`, `payment_mode`, `created_at`, `updated_at`) VALUES
(1, NULL, 53, NULL, '100', '112', 'Processed', 'Bitcoin', '2021-05-26 07:19:23', '2021-05-26 07:19:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_recharges`
--
ALTER TABLE `mobile_recharges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_recharges_user_id_foreign` (`user_id`);

--
-- Indexes for table `mt4_details`
--
ALTER TABLE `mt4_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_wallet_histories`
--
ALTER TABLE `shopping_wallet_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_wallet_histories_user_id_foreign` (`user_id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp__transactions`
--
ALTER TABLE `tp__transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transfers_from_user_id_foreign` (`from_user_id`),
  ADD KEY `transfers_to_user_id_foreign` (`to_user_id`);

--
-- Indexes for table `upgrades`
--
ALTER TABLE `upgrades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_plans`
--
ALTER TABLE `user_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wdmethods`
--
ALTER TABLE `wdmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mobile_recharges`
--
ALTER TABLE `mobile_recharges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mt4_details`
--
ALTER TABLE `mt4_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shopping_wallet_histories`
--
ALTER TABLE `shopping_wallet_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tp__transactions`
--
ALTER TABLE `tp__transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upgrades`
--
ALTER TABLE `upgrades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wdmethods`
--
ALTER TABLE `wdmethods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobile_recharges`
--
ALTER TABLE `mobile_recharges`
  ADD CONSTRAINT `mobile_recharges_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shopping_wallet_histories`
--
ALTER TABLE `shopping_wallet_histories`
  ADD CONSTRAINT `shopping_wallet_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transfers`
--
ALTER TABLE `transfers`
  ADD CONSTRAINT `transfers_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transfers_to_user_id_foreign` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
