-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 05:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `al_taras`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv_block`
--

CREATE TABLE `adv_block` (
  `id` int(10) UNSIGNED NOT NULL,
  `adv_blog_1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adv_blog_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adv_blog_view_1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adv_blog_view_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `phone`, `l_name`, `f_name`, `summary`, `created_at`, `updated_at`) VALUES
(1, 'yazan.khayal@gmail.com', '+972599327008', 'Khayal', 'Yazan', 'dsadas', '2021-01-18 12:58:48', '2021-01-18 12:58:48'),
(2, 'yazan.khayal@gmail.com', '+972599327008', 'Khayal', 'Yazan', 'dsa', '2021-01-18 12:59:04', '2021-01-18 12:59:04'),
(3, 'yazan.khayal@gmail.com', '+972599327008', 'Khayal', 'Yazan', 'dsadsa', '2021-01-18 14:29:45', '2021-01-18 14:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `email_setting`
--

CREATE TABLE `email_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encrption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_setting`
--

INSERT INTO `email_setting` (`id`, `active`, `email`, `password`, `driver`, `host`, `port`, `encrption`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-18 16:34:57', '2021-01-18 16:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'ARAMCO.jpg', '2021-01-18 10:41:53', '2021-01-18 10:41:53'),
(2, 'client1.jpg', '2021-01-18 10:41:54', '2021-01-18 10:41:54'),
(3, 'client3.jpg', '2021-01-18 10:41:54', '2021-01-18 10:41:54'),
(4, 'client4.png', '2021-01-18 10:41:55', '2021-01-18 10:41:55'),
(5, 'client2.jpg', '2021-01-18 10:41:55', '2021-01-18 10:41:55'),
(6, 'HALLIBURTON.png', '2021-01-18 10:41:55', '2021-01-18 10:41:55'),
(7, 'SABIC.jpg', '2021-01-18 10:41:55', '2021-01-18 10:41:55'),
(8, 'SAR.png', '2021-01-18 10:41:56', '2021-01-18 10:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `hp_contact_us`
--

CREATE TABLE `hp_contact_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hours` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hp_contact_us`
--

INSERT INTO `hp_contact_us` (`id`, `whatsapp`, `fax`, `phone`, `email`, `address`, `facebook`, `twitter`, `instagram`, `hours`, `pinterest`, `iframe`, `created_at`, `updated_at`) VALUES
(1, '966505845453', '05525872845', '96638288321', 'abdulaziz@altarssfirst.com', 'Altarss First Industrial Services 18th Street', '#', '#', '#', '1:00AM to 6:00PM', '#', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12042.09030311691!2d28.9412191!3d41.01382175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2str!4v1578522842202!5m2!1sar!2str\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '2020-03-27 19:39:53', '2021-01-18 11:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `hp_contents`
--

CREATE TABLE `hp_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_summary` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_summary2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upload/contents/no.png',
  `avatar2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upload/contents/no.png',
  `avatar3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upload/contents/no.png',
  `avatar4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upload/contents/no.png',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hp_contents`
--

INSERT INTO `hp_contents` (`id`, `active`, `name`, `sub_name`, `summary`, `sub_summary`, `summary1`, `sub_summary2`, `video`, `link`, `avatar1`, `avatar2`, `avatar3`, `avatar4`, `type`, `user_id`, `language_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'WELCOME TO INDUSTRIS...!', NULL, 'Leader in power Automation', NULL, NULL, NULL, NULL, NULL, 'upload/slider/1610964227.jpg', 'upload/contents/no.png', 'upload/contents/no.png', 'upload/contents/no.png', 'slider', 1, 1, '2021-01-18 10:03:47', '2021-01-18 10:03:47'),
(2, 0, 'WELCOME TO INDUSTRIS...!', NULL, 'Leader in power Automation', NULL, NULL, NULL, NULL, 'https://www.instagram.com/', 'upload/slider/1610964281.jpg', 'upload/contents/no.png', 'upload/contents/no.png', 'upload/contents/no.png', 'slider', 1, 1, '2021-01-18 10:04:41', '2021-01-18 11:44:56'),
(3, 0, NULL, NULL, '<h4 style=\"box-sizing: inherit; font-family: Roboto, sans-serif; line-height: 24px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(3, 19, 43); font-size: 16px; background-color: rgb(255, 209, 0);\">OUR STORY</h4><h2 style=\"box-sizing: inherit; font-family: Roboto, sans-serif; font-weight: 900; line-height: 56px; margin-right: 0px; margin-bottom: 45px; margin-left: 0px; color: rgb(3, 19, 43); font-size: 50px; background-color: rgb(255, 209, 0);\">A Few Words About Us.</h2><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37); background-color: rgb(255, 209, 0);\">Al Tarss Trading Establishment is looking forward to become the leader in its business by providing basic materials for maintenance and operating, and is keen to serve its customers and meet their desires with the best services, the highest products quality , and accurate achievement, and is also keen to give then additional features in services and prices.</p><h2 style=\"box-sizing: inherit; line-height: 56px; margin-right: 0px; margin-bottom: 45px; margin-left: 0px; background-color: rgb(255, 209, 0);\"><font color=\"#03132b\" face=\"Roboto, sans-serif\"><span style=\"font-size: 50px;\"><b>Our mission.</b></span></font></h2><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37); background-color: rgb(255, 209, 0);\">We aim to make clients happy by selling the best products at the best prices, in a friendly, fun atmosphere. Our rating has remained at 100% with excellent and positive feedbacks. We are constantly adding new products.</p>\r\n<h2 style=\"box-sizing: inherit; line-height: 56px; margin-right: 0px; margin-bottom: 45px; margin-left: 0px; background-color: rgb(255, 209, 0);\"><font color=\"#03132b\" face=\"Roboto, sans-serif\"><span style=\"font-size: 50px;\"><b>What we do.</b></span></font></h2><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37); background-color: rgb(255, 209, 0);\">With teams of experienced professionals we give multiple solutions to our clients around the world. Our professionals deliver high-touch services to help clients every step they take.</p>', NULL, NULL, NULL, NULL, 'https://www.youtube.com/watch?v=SyRchIzIq9I', 'upload/about/1610965996.jpg', 'upload/contents/no.png', 'upload/contents/no.png', 'upload/contents/no.png', 'about', 1, 1, '2021-01-18 10:33:16', '2021-01-18 10:35:05'),
(4, 0, NULL, NULL, '<h3 style=\"box-sizing: inherit; font-family: Roboto, sans-serif; margin-right: 0px; margin-bottom: 18px; margin-left: 0px; color: rgb(3, 19, 43); font-size: 30px;\">Why we’re different</h3><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">As fellow entrepreneurs, we understand the need for space which gives your business room</p><ul class=\"unstyle\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 60px; margin-left: 0px; padding-left: 0px; list-style: none; color: rgb(37, 37, 37); font-family: Roboto, sans-serif;\"><li style=\"box-sizing: inherit; padding: 4px 0px;\"><i class=\"icon ion-md-checkmark-circle\" style=\"box-sizing: inherit; color: rgb(255, 209, 0); margin-right: 10px;\"></i><a href=\"file:///C:/Users/Napster/Documents/Mostql17_1/templates.thememodern.com/industris/index.html#\" style=\"box-sizing: inherit; color: rgb(3, 19, 43); text-decoration: underline; transition: all 0.3s linear 0s;\">Flexible solutions</a></li><li style=\"box-sizing: inherit; padding: 4px 0px;\"><i class=\"icon ion-md-checkmark-circle\" style=\"box-sizing: inherit; color: rgb(255, 209, 0); margin-right: 10px;\"></i><a href=\"file:///C:/Users/Napster/Documents/Mostql17_1/templates.thememodern.com/industris/index.html#\" style=\"box-sizing: inherit; color: rgb(3, 19, 43); text-decoration: underline; transition: all 0.3s linear 0s;\">Free technology</a></li><li style=\"box-sizing: inherit; padding: 4px 0px;\"><i class=\"icon ion-md-checkmark-circle\" style=\"box-sizing: inherit; color: rgb(255, 209, 0); margin-right: 10px;\"></i><a href=\"file:///C:/Users/Napster/Documents/Mostql17_1/templates.thememodern.com/industris/index.html#\" style=\"box-sizing: inherit; color: rgb(3, 19, 43); text-decoration: underline; transition: all 0.3s linear 0s;\">Improved operating conditions</a></li><li style=\"box-sizing: inherit; padding: 4px 0px;\"><i class=\"icon ion-md-checkmark-circle\" style=\"box-sizing: inherit; color: rgb(255, 209, 0); margin-right: 10px;\"></i><a href=\"file:///C:/Users/Napster/Documents/Mostql17_1/templates.thememodern.com/industris/index.html#\" style=\"box-sizing: inherit; color: rgb(3, 19, 43); text-decoration: underline; transition: all 0.3s linear 0s;\">Transparent costs</a></li></ul><p><a href=\"file:///C:/Users/Napster/Documents/Mostql17_1/templates.thememodern.com/industris/index.html#\" class=\"btn btn-primary\" style=\"box-sizing: inherit; background: rgb(255, 209, 0); color: rgb(39, 32, 35); text-decoration: none; transition: all 0.3s linear 0s; font-size: 16px; padding: 18px 22px; line-height: 1.42857; margin-bottom: 0px; white-space: nowrap; font-family: Roboto, sans-serif; font-weight: 500; border-color: transparent; min-width: 150px; border-radius: 0px;\">Get a quote</a><br></p>', NULL, NULL, NULL, NULL, NULL, 'upload/contents/no.png', 'upload/contents/no.png', 'upload/contents/no.png', 'upload/contents/no.png', 'fact', 1, 1, '2021-01-18 10:42:40', '2021-01-18 10:42:40'),
(5, 0, NULL, NULL, '<div class=\"col-md-6 align-self-center\" style=\"box-sizing: inherit; min-height: 1px; padding-left: 15px; padding-right: 15px; float: left; width: 600px; color: rgb(37, 37, 37); font-family: Roboto, sans-serif;\"><h3 style=\"box-sizing: inherit; font-family: Roboto, sans-serif; margin-right: 0px; margin-bottom: 18px; margin-left: 0px; color: rgb(3, 19, 43); font-size: 30px;\">Recruitment</h3><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px;\">We are looking for smart individuals who want to have a positive impact on the world. If that’s you, visit our Careers page or send us a<br style=\"box-sizing: inherit;\">CV at:&nbsp;<a class=\"text-second\" href=\"file:///C:/Users/Napster/Documents/Mostql17_1/templates.thememodern.com/industris/index.html#\" style=\"box-sizing: inherit; text-decoration: none; transition: all 0.3s linear 0s; color: rgb(0, 174, 239) !important;\">Industris@mail.com</a></p><div class=\"industris-space-30\" style=\"box-sizing: inherit; height: 30px;\"></div><a href=\"file:///C:/Users/Napster/Documents/Mostql17_1/templates.thememodern.com/industris/index.html#\" class=\"btn btn-primary btn-m-r\" style=\"box-sizing: inherit; background: rgb(255, 209, 0); color: rgb(39, 32, 35); text-decoration: none; transition: all 0.3s linear 0s; font-size: 16px; padding: 18px 22px; line-height: 1.42857; margin-bottom: 0px; white-space: nowrap; font-family: Roboto, sans-serif; font-weight: 500; border-color: transparent; min-width: 150px; border-radius: 0px; margin-right: 10px;\">Join us</a>&nbsp;<a href=\"file:///C:/Users/Napster/Documents/Mostql17_1/templates.thememodern.com/industris/index.html#\" class=\"btn btn-border\" style=\"box-sizing: inherit; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(112, 112, 112); text-decoration: none; transition: all 0.3s linear 0s; font-size: 16px; padding: 18px 22px; line-height: 1.42857; margin-bottom: 0px; white-space: nowrap; font-family: Roboto, sans-serif; font-weight: 500; border-color: rgb(54, 54, 54); min-width: 150px; border-radius: 0px;\">Our team</a><div class=\"industris-space-sm\" style=\"box-sizing: inherit;\"></div></div><div><br></div>', NULL, NULL, NULL, NULL, NULL, 'upload/about/1610966679.jpg', 'upload/contents/no.png', 'upload/contents/no.png', 'upload/contents/no.png', 'special', 1, 1, '2021-01-18 10:43:08', '2021-01-18 10:44:39'),
(6, 0, 'Oils', NULL, 'Motor oil is a lubricant used in internal combustion engines, which power cars, motorcycles, lawnmowers', NULL, NULL, NULL, NULL, NULL, 'upload/faq/1610966791.PNG', 'upload/contents/no.png', 'upload/contents/no.png', 'upload/contents/no.png', 'faq', 1, 1, '2021-01-18 10:46:31', '2021-01-18 12:44:53'),
(7, 0, 'Tie-down Materials', NULL, 'A wide style range of bands and clamps to fit a specific application like - Bulk package preformed clamps', NULL, NULL, NULL, NULL, NULL, 'upload/faq/1610966815.PNG', 'upload/contents/no.png', 'upload/contents/no.png', 'upload/contents/no.png', 'faq', 1, 1, '2021-01-18 10:46:55', '2021-01-18 10:46:55'),
(8, 0, 'Synthetic Oil', NULL, 'Synthetic oil is used as a substitute for petroleum-refined oils when operating in extreme temperature. Aircraft jet engines,', NULL, NULL, NULL, NULL, NULL, 'upload/faq/1610966835.PNG', 'upload/contents/no.png', 'upload/contents/no.png', 'upload/contents/no.png', 'faq', 1, 1, '2021-01-18 10:47:15', '2021-01-18 10:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `hp_contents_translate`
--

CREATE TABLE `hp_contents_translate` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_summary` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_summary2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `hp_contents_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no.png',
  `select` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `dir`, `avatar`, `select`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'upload/language/1610963670.PNG', 1, '2020-03-27 19:39:53', '2021-01-18 09:54:30');

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
(3, '2019_12_14_085606_create_language_table', 1),
(4, '2019_12_14_111650_create_setting_table', 1),
(5, '2019_12_19_082552_create_post_table', 1),
(6, '2019_12_19_082615_create_post_translate_table', 1),
(7, '2019_12_21_080720_create_newsletter_table', 1),
(8, '2019_12_21_142229_create_contact_us_table', 1),
(9, '2020_01_01_114058_create_category_table', 1),
(10, '2020_01_01_114129_create_category_translate_table', 1),
(11, '2020_01_08_095519_create_setting_translate_table', 1),
(12, '2020_01_25_092006_create_testimonials_table', 1),
(13, '2020_01_26_122955_create_hp_contact_us_table', 1),
(14, '2020_02_06_083243_create_hp_contents_table', 1),
(15, '2020_02_06_083448_create_hp_contents_translate_table', 1),
(16, '2020_02_10_102941_create_testimonials_translate_table', 1),
(17, '2020_02_10_160717_create_partners_table', 1),
(18, '2020_02_27_101430_create_products_table', 1),
(19, '2020_02_27_101455_create_products_translate_table', 1),
(20, '2020_02_27_101556_create_products_gallery_table', 1),
(21, '2020_02_27_101628_create_products_request_table', 1),
(22, '2020_03_17_113322_create_gallery_table', 1),
(23, '2020_03_23_082914_create_email_setting_table', 1),
(24, '2020_03_23_083057_create_scripts_setting_table', 1),
(25, '2020_03_25_111638_create_adv_block_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'yazan.khayal@gmail.com', '2021-01-18 12:59:50', '2021-01-18 12:59:50'),
(2, 'yazan.khdayal@gmail.com', '2021-01-18 13:00:00', '2021-01-18 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no.png',
  `user_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `type`, `tags`, `summary`, `featured`, `avatar`, `user_id`, `language_id`, `created_at`, `updated_at`) VALUES
(1, 'Five Predictions for IoT in 2019 and beyond', '1', 'Telenor Connexion has worked with analysts from Stockholm-based consultin', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">Telenor Connexion has worked with analysts from Stockholm-based consulting firm Northstream to identify five major trends related to the Internet of Things (IoT) and digital transformation.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">Everyone knows connectivity and digitalization are transforming the global economy – but where will biggest impact be felt? That is the big question Telenor Connexion hopes to answer with the release of their new report: Five Predictions for IoT.The report is now available for download from the Telenor Connexion website.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">“Beyond simply connecting products, Telenor Connexion is dedicated to helping our customers identify the business value in connectivity,” says Mats Lundquist, CEO at Telenor Connexion. “This report is part of that commitment, designed to help enterprises find their way in an evolving business landscape.”</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">Each prediction is accompanied by a supporting article written by the market analysts at Northstream. These articles include citations from research along with examples of emerging, real-life use-cases. From presenting strategies for the monetization of IoT data to identifying opportunities for collaborations across industries, below is summary of the predictions:</p>', 1, 'upload/posts/1610966397.jpg', 1, 1, '2021-01-18 10:39:57', '2021-01-18 10:39:59'),
(2, 'Five Predictions for IoT in 2019 and beyond', '1', 'Telenor Connexion has worked with analysts from Stockholm-based consultin', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">Telenor Connexion has worked with analysts from Stockholm-based consulting firm Northstream to identify five major trends related to the Internet of Things (IoT) and digital transformation.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">Everyone knows connectivity and digitalization are transforming the global economy – but where will biggest impact be felt? That is the big question Telenor Connexion hopes to answer with the release of their new report: Five Predictions for IoT.The report is now available for download from the Telenor Connexion website.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">“Beyond simply connecting products, Telenor Connexion is dedicated to helping our customers identify the business value in connectivity,” says Mats Lundquist, CEO at Telenor Connexion. “This report is part of that commitment, designed to help enterprises find their way in an evolving business landscape.”</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">Each prediction is accompanied by a supporting article written by the market analysts at Northstream. These articles include citations from research along with examples of emerging, real-life use-cases. From presenting strategies for the monetization of IoT data to identifying opportunities for collaborations across industries, below is summary of the predictions:</p>', 1, 'upload/posts/1610966429.jpg', 1, 1, '2021-01-18 10:39:57', '2021-01-18 10:40:29'),
(3, 'Five Predictions for IoT in 2019 and beyond', '1', 'Telenor Connexion has worked with analysts from Stockholm-based consultin', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">Telenor Connexion has worked with analysts from Stockholm-based consulting firm Northstream to identify five major trends related to the Internet of Things (IoT) and digital transformation.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">Everyone knows connectivity and digitalization are transforming the global economy – but where will biggest impact be felt? That is the big question Telenor Connexion hopes to answer with the release of their new report: Five Predictions for IoT.The report is now available for download from the Telenor Connexion website.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">“Beyond simply connecting products, Telenor Connexion is dedicated to helping our customers identify the business value in connectivity,” says Mats Lundquist, CEO at Telenor Connexion. “This report is part of that commitment, designed to help enterprises find their way in an evolving business landscape.”</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-family: Raleway, sans-serif; line-height: 26px; color: rgb(37, 37, 37);\">Each prediction is accompanied by a supporting article written by the market analysts at Northstream. These articles include citations from research along with examples of emerging, real-life use-cases. From presenting strategies for the monetization of IoT data to identifying opportunities for collaborations across industries, below is summary of the predictions:</p>', 1, 'upload/posts/1610966435.jpg', 1, 1, '2021-01-18 10:39:57', '2021-01-18 10:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `post_translate`
--

CREATE TABLE `post_translate` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'products/no.png',
  `summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `files` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_products` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sub_name`, `avatar`, `summary`, `language_id`, `created_at`, `updated_at`, `files`, `related_products`) VALUES
(1, 'Business Units', 'Our Service can be broadly defined under the following categories:', 'upload/products/11610967109.jpg', '<div style=\"language:ar-EG;margin-top:4.0pt;margin-bottom:0pt;margin-left:.4in;\r\ntext-indent:-.28in;text-align:justify;text-justify:inter-ideograph;direction:\r\nltr;unicode-bidi:embed;mso-line-break-override:none;word-break:normal;\r\npunctuation-wrap:hanging\"><span style=\"font-size:20.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size:20.0pt;\r\nfont-family:Calibri;mso-ascii-font-family:Calibri;mso-fareast-font-family:+mn-ea;\r\nmso-bidi-font-family:Calibri;mso-fareast-theme-font:minor-fareast;color:#7030A0;\r\nmso-font-kerning:12.0pt;language:en-US;font-weight:bold;mso-style-textfill-type:\r\nsolid;mso-style-textfill-fill-color:#7030A0;mso-style-textfill-fill-alpha:100.0%\">Supply\r\nChain Management: </span><span style=\"font-size: 18pt; font-family: Calibri;\">Altarss</span><span style=\"font-size: 18pt; font-family: Calibri;\"> uses\r\nits resources around the globe to procure all the industrial equipment, spares,\r\nsupplies and deliver to the client’s location. With the support of our Sister\r\ncompany </span><span style=\"font-size: 18pt; font-family: Calibri;\">Altarss</span><span style=\"font-size: 18pt; font-family: Calibri;\">\r\nTrading, we manage to give a comprehensive supply solution to our client</span></div><div style=\"language:ar-EG;margin-top:4.0pt;margin-bottom:0pt;margin-left:.4in;\r\ntext-indent:-.28in;text-align:justify;text-justify:inter-ideograph;direction:\r\nltr;unicode-bidi:embed;mso-line-break-override:none;word-break:normal;\r\npunctuation-wrap:hanging\"><br></div><div style=\"language:ar-EG;margin-top:4.0pt;margin-bottom:0pt;margin-left:.4in;\r\ntext-indent:-.28in;text-align:justify;text-justify:inter-ideograph;direction:\r\nltr;unicode-bidi:embed;mso-line-break-override:none;word-break:normal;\r\npunctuation-wrap:hanging\"><p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:20.0pt;font-family:Calibri;mso-ascii-font-family:Calibri;\r\nmso-fareast-font-family:+mn-ea;mso-bidi-font-family:Calibri;mso-fareast-theme-font:\r\nminor-fareast;color:#7030A0;mso-font-kerning:12.0pt;language:en-US;font-weight:\r\nbold;mso-style-textfill-type:solid;mso-style-textfill-fill-color:#7030A0;\r\nmso-style-textfill-fill-alpha:100.0%\">Industrial Services: </span><span style=\"font-size: 18pt; font-family: Calibri;\">Provides\r\nextensive and specialized industrial services. We deploys a high caliber of\r\nengineers to manage its projects with a workforce that is capable of executing\r\nspecialized engineering work</span></p><p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><br></p><p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\">\r\n\r\n<p style=\"language:ar-EG;margin-top:0pt;margin-bottom:0pt;margin-left:0in;\r\ntext-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:\r\nembed;mso-line-break-override:none;word-break:normal;punctuation-wrap:hanging\"></p>\r\n\r\n<p style=\"language:ar-EG;margin-top:0pt;margin-bottom:0pt;margin-left:0in;\r\ntext-align:left;direction:ltr;unicode-bidi:embed;mso-line-break-override:none;\r\nword-break:normal;punctuation-wrap:hanging\"></p></p><p style=\"language:ar-EG;margin-top:0pt;margin-bottom:0pt;margin-left:0in;\r\ntext-align:justify;text-justify:inter-ideograph;direction:ltr;unicode-bidi:\r\nembed;mso-line-break-override:none;word-break:normal;punctuation-wrap:hanging\"><span style=\"font-size:20.0pt;font-family:Calibri;mso-ascii-font-family:Calibri;\r\nmso-fareast-font-family:+mn-ea;mso-bidi-font-family:Calibri;mso-fareast-theme-font:\r\nminor-fareast;color:#7030A0;mso-font-kerning:12.0pt;language:en-US;font-weight:\r\nbold;mso-style-textfill-type:solid;mso-style-textfill-fill-color:#7030A0;\r\nmso-style-textfill-fill-alpha:100.0%\">Business Consultancy: </span><span style=\"font-size:18.0pt;font-family:Calibri;mso-ascii-font-family:Calibri;\r\nmso-fareast-font-family:+mn-ea;mso-bidi-font-family:Calibri;mso-fareast-theme-font:\r\nminor-fareast;color:black;mso-color-index:1;mso-font-kerning:12.0pt;language:\r\nen-US;mso-style-textfill-type:solid;mso-style-textfill-fill-themecolor:text1;\r\nmso-style-textfill-fill-color:black;mso-style-textfill-fill-alpha:100.0%\">Provides\r\nconsultancy for the international companies for business setups and support\r\nthem for execution of project through arranging required resources. Also do </span><span style=\"font-size:18.0pt;font-family:&quot;Times New Roman&quot;;mso-ascii-font-family:\r\n&quot;Times New Roman&quot;;mso-fareast-font-family:+mn-ea;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-theme-font:minor-fareast;color:black;mso-color-index:1;mso-font-kerning:\r\n12.0pt;language:en-US;mso-style-textfill-type:solid;mso-style-textfill-fill-themecolor:\r\ntext1;mso-style-textfill-fill-color:black;mso-style-textfill-fill-alpha:100.0%\">authorized\r\nrepresentation<span style=\"mso-spacerun:yes\">&nbsp; </span></span></p></div>', 1, '2021-01-18 10:51:49', '2021-01-18 13:22:07', '1610967078641portfolio-1.jpg,1610967078643portfolio-2.jpg,1610967078644portfolio-3.jpg,1610967078645portfolio-4.jpg', '2,3,4'),
(2, 'Supply Chain Management', 'GCCo uses its resources around the globe to procure all the industrial equipment, spares, supplies and deliver to the client’s location', 'upload/products/11610967202.jpg', '<div style=\"language:ar-EG;margin-top:4.0pt;margin-bottom:0pt;margin-left:.4in;\r\ntext-indent:-.28in;text-align:justify;text-justify:inter-ideograph;direction:\r\nltr;unicode-bidi:embed;mso-line-break-override:none;word-break:normal;\r\npunctuation-wrap:hanging\"><div style=\"language:ar-EG;margin-top:4.0pt;margin-bottom:0pt;margin-left:.4in;\r\ntext-indent:-.28in;text-align:left;direction:ltr;unicode-bidi:embed;mso-line-break-override:\r\nnone;word-break:normal;punctuation-wrap:hanging\"><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:20.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 20pt; font-family: Calibri; font-weight: bold;\">Procurement:\r\n</span><span style=\"font-size: 17pt; font-family: Calibri;\">GCCo</span><span style=\"font-size: 17pt; font-family: Calibri;\"> uses\r\nits resources around the globe to procure all the industrial equipment, spares,\r\nsupplies and deliver to the client’s location&nbsp;&nbsp;\r\n</span></div>\r\n\r\n<p style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"></p>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:20.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 20pt; font-family: Calibri; font-weight: bold;\">Consultancy:\r\n</span><span style=\"font-size: 17pt; font-family: Calibri;\">Analysis\r\nof the client requirements and suggest the required equipment, spares and\r\nservices to be procured </span></div>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><!--[if ppt]--><span style=\"font-size:20.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;\r\nmso-color-index:4;font-family:&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><!--[endif]--></div>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:20.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 20pt; font-family: Calibri; font-weight: bold;\">Turnkey\r\nSupply Solutions and Services: </span><span style=\"font-size: 17pt; font-family: Calibri;\">Undertakes turnkey supply\r\nassignments in association with its technical and solution partners from around\r\nthe globe both for domestic and international clients.&nbsp;&nbsp; </span></div>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><!--[if ppt]--><span style=\"font-size:20.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;\r\nmso-color-index:4;font-family:&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><!--[endif]--></div>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:20.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><u><span style=\"font-size: 20pt; font-family: Calibri; font-weight: bold;\">Solutions</span></u></div>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:15.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\nArial;font-size:68%\">•</span></span><span style=\"font-size: 15pt; font-family: Calibri;\">Managed Contract Supplies\r\n(MRO)&nbsp; </span></div>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:15.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\nArial;font-size:68%\">•</span></span><span style=\"font-size: 15pt; font-family: Calibri;\">Authorized Factory\r\nRepresentation&nbsp; </span></div>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:15.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\nArial;font-size:68%\">•</span></span><span style=\"font-size: 15pt; font-family: Calibri;\">Industrial Supplies &amp;\r\nSolutions&nbsp; </span></div>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:15.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\nArial;font-size:68%\">•</span></span><span style=\"font-size: 15pt; font-family: Calibri;\">Reverse Engineering of Parts&nbsp; </span></div>\r\n\r\n<div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><!--[if ppt]--><span style=\"font-size:19.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;\r\nmso-color-index:4;font-family:&quot;Wingdings 3&quot;;font-size:68%\">}</span></span></div><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><u><span style=\"font-size: 18pt; font-family: Calibri; font-weight: bold;\">Product\r\nLine</span></u></p>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Telecom\r\nequipment and spares</span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Railways\r\nhardware and electronics</span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Automation\r\nProducts, Instrumentations &amp; Controls </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Electrical\r\nEquipment Products and Supplies </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Mechanical\r\nEquipment &amp; Spare Parts </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Fire\r\n&amp; Safety </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Laboratory\r\nInstruments &amp; Supplies </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Reverse\r\nEngineering of hard to find Spare Parts </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Tools\r\n(Mechanical &amp; Electrical) </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 16pt; font-family: Calibri;\">Transmission\r\n&amp; Distribution Consumables&nbsp; and&nbsp; More</span></div>\r\n\r\n<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"></p><!--[endif]--></div></div></div>', 1, '2021-01-18 10:51:54', '2021-01-18 10:53:22', ',1610967175363portfolio-7.jpg,1610967175364portfolio-8.jpg,1610967175365portfolio-9.jpg', NULL),
(3, 'Industrial Services', 'Provides extensive installation services. We deploys a high calibre of engineers to manage .', 'upload/products/11610967273.jpg', '<p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size: 18pt; font-family: Calibri;\">Provides extensive installation\r\nservices. We deploys a high calibre of engineers to manage its projects with a\r\nworkforce that is capable of executing specialized engineering work. We provide\r\ndistinct services right from installation, inspection support to individually\r\nexecuting the project. Following are some of the services catered to name..</span></p><p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><br></p><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 18pt; font-family: Calibri;\">MEP Installation ( Mechanical,\r\nElectrical and Plumbing)</span></div><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 18pt; font-family: Calibri;\">Installation of Fire fighting and\r\nfire suppression system</span></div><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 18pt; font-family: Calibri;\">Testing &amp; commissioning of\r\nElectro-Mechanical Equipments</span></div><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 18pt; font-family: Calibri;\">Process equipment, facilities,\r\npiping control, instrumentation &amp; DCS</span></div><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 18pt; font-family: Calibri;\">Installation support services for\r\nRailways which include Measuring devices, signalling systems, Railway vehicle\r\nsystem Installation support and more</span></div><p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 18pt; font-family: Calibri;\">Supply of professional&nbsp; Manpower and rental of Heavy equipment\r\narrangements</span></div>', 1, '2021-01-18 10:53:25', '2021-01-18 10:54:33', ',1610967245627portfolio-img-2.jpg,1610967245629portfolio-img-3.jpg,1610967245630portfolio-img-8.jpg', NULL),
(4, 'Business Consultancy', 'The great opportunities has been developed in the region with lots of Government initiatives which  leads  international companies  to  look  into the expansion plan into the region', 'upload/products/11610967319.jpg', '<p style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size: 14pt; font-family: Calibri;\">The great opportunities has been\r\ndeveloped in the region with lots of Government initiatives which&nbsp; leads&nbsp;\r\ninternational companies&nbsp; to&nbsp; look&nbsp;\r\ninto the expansion plan into the region,. </span><span style=\"font-size: 14pt; font-family: Calibri;\">Someof</span><span style=\"font-size: 14pt; font-family: Calibri;\"> the\r\nhighlights are as below..</span></p><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:14.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 14pt; font-family: Calibri;\">Saudi Arabia launched Vision 2030,\r\na comprehensive plan aimed at growing and diversifying the Kingdom’s economy</span></div><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:14.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 14pt; font-family: Calibri;\">Vision 2030 is also opening up\r\ninvestment opportunities for companies of all scales and sizes. Saudi Arabia\r\naims to increase SME GDP contribution from 20% to 35%, offering tailored\r\nprograms and operating licenses for domestic and international entrepreneurs</span></div><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:14.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 14pt; font-family: Calibri;\">Saudi Arabia enjoys a strategic\r\nnatural location linking three continents, creating a central focal point for\r\nall international investors and providing connections to half of the world’s\r\npopulation within 5 hours travel</span></div><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:14.0pt\"><span style=\"mso-special-format:bullet;color:#727CA3;mso-color-index:4;font-family:\r\n&quot;Wingdings 3&quot;;font-size:68%\">}</span></span><span style=\"font-size: 14pt; font-family: Calibri;\">More and more…….</span></div><p style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"></p><p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><div style=\"margin-top: 4pt; margin-bottom: 0pt; margin-left: 0.4in; text-indent: -0.28in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><p style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:16.0pt;\r\nfont-family:Calibri;mso-ascii-font-family:Calibri;mso-fareast-font-family:+mn-ea;\r\nmso-bidi-font-family:Calibri;mso-fareast-theme-font:minor-fareast;color:#7030A0;\r\nmso-font-kerning:12.0pt;language:en-US;font-weight:bold;mso-style-textfill-type:\r\nsolid;mso-style-textfill-fill-color:#7030A0;mso-style-textfill-fill-alpha:100.0%\">Our\r\ncompany enjoy a local presence and with good network of resources, we provide a\r\ncomprehensive services for the international companies in field of\r\nmanufacturing services by providing consultancy for…</span></p>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:14.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 14pt; font-family: Calibri;\">Business\r\nsetups </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:14.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 14pt; font-family: Calibri;\">support\r\nfor execution of projects through arranging required resources. </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:14.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 14pt; font-family: Calibri;\">Authorized\r\n</span><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;;\">representation\r\n</span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:14.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;;\">Formation\r\nof JVs , -by becoming a business partner and also resourcing appropriate\r\npartners </span></div>\r\n\r\n<div style=\"margin-top: 0pt; margin-bottom: 0pt; margin-left: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:14.0pt\"><span style=\"mso-special-format:bullet;font-family:Arial\">•</span></span><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;;\">And\r\nmore</span></div><!--[endif]--></div>', 1, '2021-01-18 10:54:36', '2021-01-18 10:55:19', ',1610967307884portfolio-img-9.jpg,1610967313684portfolio-img-4.jpg,1610967313685portfolio-img-5.jpg,1610967313687portfolio-img-6.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_translate`
--

CREATE TABLE `products_translate` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scripts_setting`
--

CREATE TABLE `scripts_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `js` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/',
  `fav` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no.png',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no.png',
  `bunner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no.png',
  `avatar1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no.png',
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `services` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `summary`, `public`, `fav`, `avatar`, `bunner`, `avatar1`, `language_id`, `created_at`, `updated_at`, `services`, `footer`) VALUES
(1, 'Al Taraess Trading', 'We provide geotechnical engineering and construction inspection services for a wide variety of transportation.', '/', 'upload/setting/1610969709.png', 'upload/setting/1610969705.png', 'upload/setting/1610975182.jpg', 'upload/setting/1610969713.png', 1, '2020-03-27 19:39:53', '2021-01-18 13:06:22', 'upload/setting/1610973127.jpg', 'upload/setting/1610973133.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translate`
--

CREATE TABLE `setting_translate` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'products/no.png',
  `summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `avatar`, `summary`, `bio`, `language_id`, `created_at`, `updated_at`) VALUES
(1, 'Emilia Clarke', 'upload/testimonials/1610966241.png', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.', 'Manager Avenger company', 1, '2021-01-18 10:37:21', '2021-01-18 10:37:21'),
(2, 'Emilia Clarke', 'upload/testimonials/1610966261.png', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.', 'Manager Avenger company', 1, '2021-01-18 10:37:21', '2021-01-18 10:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_translate`
--

CREATE TABLE `testimonials_translate` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `testimonials_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$YTEUMkG6YQaveEGAQsYnsu25qWRI96RiwZwrJkisLnz5su0t5ppzq', 1, 'upload/avatar/1610963634.png', 'bZQALEICJ22JudVPBMrpcvFqVyMJ2hRNVd8EHYAxELcRA79oFjXCBXHGh2Pa', '2021-01-18 09:17:35', '2021-01-18 09:53:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adv_block`
--
ALTER TABLE `adv_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_setting`
--
ALTER TABLE `email_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hp_contact_us`
--
ALTER TABLE `hp_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hp_contents`
--
ALTER TABLE `hp_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hp_contents_user_id_index` (`user_id`),
  ADD KEY `hp_contents_language_id_index` (`language_id`);

--
-- Indexes for table `hp_contents_translate`
--
ALTER TABLE `hp_contents_translate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hp_contents_translate_language_id_index` (`language_id`),
  ADD KEY `hp_contents_translate_hp_contents_id_index` (`hp_contents_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_id_index` (`user_id`),
  ADD KEY `post_language_id_index` (`language_id`);

--
-- Indexes for table `post_translate`
--
ALTER TABLE `post_translate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_translate_post_id_index` (`post_id`),
  ADD KEY `post_translate_language_id_index` (`language_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_language_id_index` (`language_id`);

--
-- Indexes for table `products_translate`
--
ALTER TABLE `products_translate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_translate_products_id_index` (`products_id`),
  ADD KEY `products_translate_language_id_index` (`language_id`);

--
-- Indexes for table `scripts_setting`
--
ALTER TABLE `scripts_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_language_id_index` (`language_id`);

--
-- Indexes for table `setting_translate`
--
ALTER TABLE `setting_translate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_translate_setting_id_index` (`setting_id`),
  ADD KEY `setting_translate_language_id_index` (`language_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_language_id_index` (`language_id`);

--
-- Indexes for table `testimonials_translate`
--
ALTER TABLE `testimonials_translate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_translate_language_id_index` (`language_id`),
  ADD KEY `testimonials_translate_testimonials_id_index` (`testimonials_id`);

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
-- AUTO_INCREMENT for table `adv_block`
--
ALTER TABLE `adv_block`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_setting`
--
ALTER TABLE `email_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hp_contact_us`
--
ALTER TABLE `hp_contact_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hp_contents`
--
ALTER TABLE `hp_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hp_contents_translate`
--
ALTER TABLE `hp_contents_translate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_translate`
--
ALTER TABLE `post_translate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_translate`
--
ALTER TABLE `products_translate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scripts_setting`
--
ALTER TABLE `scripts_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_translate`
--
ALTER TABLE `setting_translate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials_translate`
--
ALTER TABLE `testimonials_translate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hp_contents`
--
ALTER TABLE `hp_contents`
  ADD CONSTRAINT `hp_contents_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hp_contents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hp_contents_translate`
--
ALTER TABLE `hp_contents_translate`
  ADD CONSTRAINT `hp_contents_translate_hp_contents_id_foreign` FOREIGN KEY (`hp_contents_id`) REFERENCES `hp_contents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hp_contents_translate_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_translate`
--
ALTER TABLE `post_translate`
  ADD CONSTRAINT `post_translate_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_translate_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_translate`
--
ALTER TABLE `products_translate`
  ADD CONSTRAINT `products_translate_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_translate_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting`
--
ALTER TABLE `setting`
  ADD CONSTRAINT `setting_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translate`
--
ALTER TABLE `setting_translate`
  ADD CONSTRAINT `setting_translate_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `setting_translate_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `setting` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonials_translate`
--
ALTER TABLE `testimonials_translate`
  ADD CONSTRAINT `testimonials_translate_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `testimonials_translate_testimonials_id_foreign` FOREIGN KEY (`testimonials_id`) REFERENCES `testimonials` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
