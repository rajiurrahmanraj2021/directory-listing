-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 05:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bugfinderadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_access` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `image`, `phone`, `address`, `admin_access`, `last_login`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$.sO9kLAurqjCYnUatIQeDuwxOqPC7KWPKEIOy5rYf8sGMm0zkLdZm', '627a4928ec4a51652181288.jpg', '+5641 455646', 'TX, USA', '[\"admin.dashboard\",\"admin.staff\",\"admin.storeStaff\",\"admin.updateStaff\",\"admin.identify-form\",\"admin.identify-form.store\",\"admin.identify-form.store\",\"admin.scheduleManage\",\"admin.planList\",\"admin.store.schedule\",\"admin.update.schedule\",\"admin.planCreate\",\"admin.planEdit\",\"admin.plans-active\",\"admin.plans-inactive\",\"admin.referral-commission\",\"admin.referral-commission.store\",\"admin.transaction\",\"admin.transaction.search\",\"admin.investments\",\"admin.investments.search\",\"admin.commissions\",\"admin.commissions.search\",\"admin.users\",\"admin.users.search\",\"admin.email-send\",\"admin.user.transaction\",\"admin.user.fundLog\",\"admin.user.withdrawal\",\"admin.user.commissionLog\",\"admin.user.referralMember\",\"admin.user.plan-purchaseLog\",\"admin.user.userKycHistory\",\"admin.kyc.users.pending\",\"admin.kyc.users\",\"admin.user-edit\",\"admin.user-multiple-active\",\"admin.user-multiple-inactive\",\"admin.send-email\",\"admin.user.userKycHistory\",\"admin.user-balance-update\",\"admin.payment.methods\",\"admin.deposit.manual.index\",\"admin.deposit.manual.create\",\"admin.edit.payment.methods\",\"admin.deposit.manual.edit\",\"admin.payment.pending\",\"admin.payment.log\",\"admin.payment.search\",\"admin.payment.action\",\"admin.payout-method\",\"admin.payout-log\",\"admin.payout-request\",\"admin.payout-log.search\",\"admin.payout-method.create\",\"admin.payout-method.edit\",\"admin.payout-action\",\"admin.ticket\",\"admin.ticket.view\",\"admin.ticket.reply\",\"admin.ticket.delete\",\"admin.subscriber.index\",\"admin.subscriber.sendEmail\",\"admin.subscriber.remove\",\"admin.basic-controls\",\"admin.email-controls\",\"admin.email-template.show\",\"admin.sms.config\",\"admin.sms-template\",\"admin.notify-config\",\"admin.notify-template.show\",\"admin.notify-template.edit\",\"admin.basic-controls.update\",\"admin.email-controls.update\",\"admin.email-template.edit\",\"admin.sms-template.edit\",\"admin.notify-config.update\",\"admin.notify-template.update\",\"admin.language.index\",\"admin.language.create\",\"admin.language.edit\",\"admin.language.keywordEdit\",\"admin.language.delete\",\"admin.manage.theme\",\"admin.logo-seo\",\"admin.breadcrumb\",\"admin.template.show\",\"admin.content.index\",\"admin.content.create\",\"admin.logoUpdate\",\"admin.seoUpdate\",\"admin.breadcrumbUpdate\",\"admin.content.show\",\"admin.content.delete\"]', '2022-09-28 05:03:15', 1, '3WkwWXKSfMr9qYJS1T9XMXtCPlbm126SzRlFuu1elxS4mtnHMpeoTXViqUtc', '2021-12-17 10:00:01', '2022-09-27 23:03:15'),
(2, 'Staff', 'staff', 'staff@staff.com', '$2y$10$wnKJKURjEzNQ90OEvNleG.jbM5h9mFd5ZuuMfj.Mzr/DU8fM5.PPm', NULL, '+9454 4541541', NULL, '[\"admin.dashboard\",\"admin.staff\",\"admin.storeStaff\",\"admin.updateStaff\",\"admin.identify-form\",\"admin.identify-form.store\",\"admin.identify-form.store\",\"admin.scheduleManage\",\"admin.planList\",\"admin.store.schedule\",\"admin.update.schedule\",\"admin.planCreate\",\"admin.planEdit\",\"admin.plans-active\",\"admin.plans-inactive\",\"admin.referral-commission\",\"admin.referral-commission.store\",\"admin.transaction\",\"admin.transaction.search\",\"admin.investments\",\"admin.investments.search\",\"admin.commissions\",\"admin.commissions.search\",\"admin.users\",\"admin.users.search\",\"admin.email-send\",\"admin.user.transaction\",\"admin.user.fundLog\",\"admin.user.withdrawal\",\"admin.user.commissionLog\",\"admin.user.referralMember\",\"admin.user.plan-purchaseLog\",\"admin.user.userKycHistory\",\"admin.kyc.users.pending\",\"admin.kyc.users\",\"admin.user-edit\",\"admin.user-multiple-active\",\"admin.user-multiple-inactive\",\"admin.send-email\",\"admin.user.userKycHistory\",\"admin.user-balance-update\",\"admin.payment.methods\",\"admin.deposit.manual.index\",\"admin.deposit.manual.create\",\"admin.edit.payment.methods\",\"admin.deposit.manual.edit\",\"admin.payment.pending\",\"admin.payment.log\",\"admin.payment.search\",\"admin.payment.action\",\"admin.payout-method\",\"admin.payout-log\",\"admin.payout-request\",\"admin.payout-log.search\",\"admin.payout-method.create\",\"admin.payout-method.edit\",\"admin.payout-action\",\"admin.ticket\",\"admin.ticket.view\",\"admin.ticket.reply\",\"admin.ticket.delete\",\"admin.subscriber.index\",\"admin.subscriber.sendEmail\",\"admin.subscriber.remove\",\"admin.basic-controls\",\"admin.email-controls\",\"admin.email-template.show\",\"admin.sms.config\",\"admin.sms-template\",\"admin.notify-config\",\"admin.notify-template.show\",\"admin.notify-template.edit\",\"admin.basic-controls.update\",\"admin.email-controls.update\",\"admin.email-template.edit\",\"admin.sms-template.edit\",\"admin.notify-config.update\",\"admin.notify-template.update\",\"admin.language.index\",\"admin.language.create\",\"admin.language.edit\",\"admin.language.keywordEdit\",\"admin.language.delete\",\"admin.manage.theme\",\"admin.logo-seo\",\"admin.breadcrumb\",\"admin.template.show\",\"admin.content.index\",\"admin.content.create\",\"admin.logoUpdate\",\"admin.seoUpdate\",\"admin.breadcrumbUpdate\",\"admin.content.show\",\"admin.content.delete\"]', NULL, 1, NULL, '2022-05-25 21:29:03', '2022-05-25 21:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `image`, `created_at`, `updated_at`) VALUES
(9, 7, '632e8a5ab87ba1663994458.jpg', '2022-09-23 22:40:59', '2022-09-23 22:40:59'),
(10, 8, '632e8a8bb06e21663994507.jpg', '2022-09-23 22:41:47', '2022-09-23 22:41:47'),
(11, 9, '632e8aaa451161663994538.jpg', '2022-09-23 22:42:18', '2022-09-23 22:42:18'),
(12, 9, '632e8acc70a871663994572.jpg', '2022-09-23 22:42:52', '2022-09-23 22:42:52'),
(13, 7, '632e8aee381bd1663994606.jpg', '2022-09-23 22:43:26', '2022-09-23 22:43:26'),
(14, 10, '632e8b174df701663994647.jpg', '2022-09-23 22:44:07', '2022-09-23 22:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `created_at`, `updated_at`) VALUES
(7, '2022-09-23 22:34:24', '2022-09-23 22:34:24'),
(8, '2022-09-23 22:35:57', '2022-09-23 22:35:57'),
(9, '2022-09-23 22:36:53', '2022-09-23 22:36:53'),
(10, '2022-09-23 22:38:34', '2022-09-23 22:38:34'),
(11, '2022-09-23 22:38:57', '2022-09-23 22:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category_details`
--

CREATE TABLE `blog_category_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category_details`
--

INSERT INTO `blog_category_details` (`id`, `blog_category_id`, `language_id`, `name`, `created_at`, `updated_at`) VALUES
(9, 7, 1, 'Drink &amp; Food', '2022-09-23 22:34:24', '2022-09-24 00:37:33'),
(10, 7, 18, 'Bebida &amp; Comida', '2022-09-23 22:34:52', '2022-09-24 00:37:40'),
(11, 8, 1, 'Albums', '2022-09-23 22:35:57', '2022-09-23 22:35:57'),
(12, 8, 18, 'Álbumes', '2022-09-23 22:36:25', '2022-09-23 22:36:25'),
(13, 9, 1, 'Dress', '2022-09-23 22:36:53', '2022-09-23 22:36:53'),
(14, 9, 18, 'Vestido', '2022-09-23 22:37:40', '2022-09-23 22:37:40'),
(15, 10, 1, 'Events', '2022-09-23 22:38:34', '2022-09-23 22:38:34'),
(16, 10, 18, 'Eventos', '2022-09-23 22:38:46', '2022-09-23 22:38:46'),
(17, 11, 1, 'Festivals', '2022-09-23 22:38:57', '2022-09-23 22:38:57'),
(18, 11, 18, 'Festivals', '2022-09-23 22:39:08', '2022-09-23 22:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `blog_id`, `language_id`, `author`, `title`, `details`, `created_at`, `updated_at`) VALUES
(9, 9, 1, 'Moderator', 'Best Luxury Switzerland Tours &amp; Travel Packages', '\"<p><span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.<\\/span><br \\/><\\/p>\"', '2022-09-23 22:40:59', '2022-09-23 22:40:59'),
(10, 10, 1, 'Admin', 'Best Luxury Switzerland Tours &amp; Travel Packages', '\"<p><span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.<\\/span><br \\/><\\/p>\"', '2022-09-23 22:41:48', '2022-09-23 22:41:48'),
(11, 11, 1, 'Admin', 'Best Luxury Switzerland Tours &amp; Travel Packages', '\"<p><span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.<\\/span><br \\/><\\/p>\"', '2022-09-23 22:42:18', '2022-09-23 22:42:18'),
(12, 12, 1, 'Editor', 'Best Luxury Switzerland Tours &amp; Travel Packages', '\"<p><span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.<\\/span><br \\/><\\/p>\"', '2022-09-23 22:42:52', '2022-09-23 22:42:52'),
(13, 13, 1, 'Admin', 'Best Luxury Switzerland Tours &amp; Travel Packages', '\"<p><span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.<\\/span><br \\/><\\/p>\"', '2022-09-23 22:43:26', '2022-09-23 22:43:26'),
(14, 14, 1, 'Moderator', 'Best Luxury Switzerland Tours &amp; Travel Packages', '\"<p><span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.<\\/span><br \\/><\\/p>\"', '2022-09-23 22:44:07', '2022-09-23 22:44:07'),
(24, 14, 18, 'Moderator', 'Los mejores tours y paquetes de viaje de lujo en Suiza', '\"Lorem ipsum dolor sit amet consectetur, adipisicing elit. \\u00a1Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.\"', '2022-09-23 23:50:11', '2022-09-23 23:52:42'),
(25, 12, 18, 'Editor', 'Los mejores tours y paquetes de viaje de lujo en Suiza', '\"<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. \\u00a1Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.<br \\/><\\/p>\"', '2022-09-23 23:53:59', '2022-09-23 23:53:59'),
(26, 10, 18, 'Admin', 'Los mejores tours y paquetes de viaje de lujo en Suiza', '\"<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. \\u00a1Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.<br \\/><\\/p>\"', '2022-09-23 23:54:22', '2022-09-23 23:54:22'),
(27, 9, 18, 'Moderator', 'Los mejores tours y paquetes de viaje de lujo en Suiza', '\"<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. \\u00a1Sequi, consectetur excepturi ipsam obcaecati laudantium repellat quidem dolor! Quam, saepe aspernatur in delectus rerum et porro iste illum, atque voluptatem voluptatum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima eum reiciendis eos error provident magni ducimus doloremque consequatur doloribus praesentium, pariatur, adipisci, repellat ipsam dolorum quidem omnis corporis nobis illum.<br \\/><\\/p>\"', '2022-09-23 23:55:15', '2022-09-23 23:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `configures`
--

CREATE TABLE `configures` (
  `id` int(11) UNSIGNED NOT NULL,
  `site_title` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `time_zone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fraction_number` int(11) DEFAULT NULL,
  `paginate` int(11) DEFAULT NULL,
  `email_verification` tinyint(1) NOT NULL DEFAULT 0,
  `email_notification` tinyint(1) NOT NULL DEFAULT 0,
  `sms_verification` tinyint(1) NOT NULL DEFAULT 0,
  `sms_notification` tinyint(1) NOT NULL DEFAULT 0,
  `sender_email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_email_name` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_configuration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_notification` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `error_log` tinyint(1) NOT NULL,
  `strong_password` tinyint(1) NOT NULL,
  `registration` tinyint(1) NOT NULL,
  `address_verification` tinyint(1) NOT NULL,
  `identity_verification` tinyint(1) NOT NULL,
  `maintenance` tinyint(1) NOT NULL,
  `is_active_cron_notification` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configures`
--

INSERT INTO `configures` (`id`, `site_title`, `base_color`, `time_zone`, `currency`, `currency_symbol`, `theme`, `fraction_number`, `paginate`, `email_verification`, `email_notification`, `sms_verification`, `sms_notification`, `sender_email`, `sender_email_name`, `email_description`, `email_configuration`, `push_notification`, `created_at`, `updated_at`, `error_log`, `strong_password`, `registration`, `address_verification`, `identity_verification`, `maintenance`, `is_active_cron_notification`) VALUES
(1, 'Bug Finder', '#ffdd00', 'UTC', 'USD', '$', 'deepblue', 0, 20, 1, 1, 0, 0, 'support@mail.com', 'Bug Finder', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n    \r\n        \r\n            \r\n            \r\n            \r\n            \r\n        \r\n\r\n        \r\n            \r\n                \r\n                    \r\n                        <h1>\r\n                            </h1><h1></h1><p style=\"font-style:normal;font-weight:normal;color:rgb(68,168,199);font-size:36px;font-family:bitter, georgia, serif;text-align:center;\"> <br /></p>\r\n                        \r\n\r\n                        \r\n\r\n                            <p><strong>Hello [[name]],</strong></p>\r\n                            <p><strong>[[message]]</strong></p>\r\n                            <p><br /></p>\r\n                        \r\n\r\n                    \r\n                \r\n            \r\n\r\n            \r\n                \r\n                    \r\n                        <p style=\"font-style:normal;font-weight:normal;color:#ffffff;font-size:16px;font-family:bitter, georgia, serif;text-align:center;\">\r\n                            2021 ©  All Right Reserved\r\n                        </p>\r\n                    \r\n                \r\n            \r\n\r\n        \r\n\r\n\r\n        \r\n            \r\n            \r\n            \r\n            \r\n        \r\n    \r\n', '{\"name\":\"smtp\",\"smtp_host\":\"smtp.mailtrap.io\",\"smtp_port\":\"2525\",\"smtp_encryption\":\"tls\",\"smtp_username\":\"asdadas\",\"smtp_password\":\"asdadas\"}', 1, NULL, '2022-09-25 05:58:44', 0, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'counter', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(8, 'counter', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(9, 'counter', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(10, 'counter', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(15, 'service', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(16, 'service', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(17, 'service', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(23, 'faq', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(24, 'faq', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(25, 'faq', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(27, 'faq', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(33, 'support', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(34, 'support', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(56, 'social', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(58, 'social', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(59, 'social', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(60, 'social', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(61, 'blog', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(62, 'blog', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(63, 'blog', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(64, 'feature', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(65, 'feature', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(66, 'feature', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(67, 'why-chose-us', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(68, 'why-chose-us', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(69, 'why-chose-us', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(70, 'why-chose-us', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(71, 'why-chose-us', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(72, 'why-chose-us', '2021-12-17 09:59:33', '2021-12-17 09:59:33'),
(83, 'jubayer', '2022-09-18 02:03:55', '2022-09-18 02:03:55'),
(84, 'team-member', '2022-09-18 05:01:33', '2022-09-18 05:01:33'),
(85, 'team-member', '2022-09-18 05:02:53', '2022-09-18 05:02:53'),
(86, 'team-member', '2022-09-18 05:09:29', '2022-09-18 05:09:29'),
(92, 'testimonial', '2022-09-20 00:55:05', '2022-09-20 00:55:05'),
(93, 'testimonial', '2022-09-20 00:57:09', '2022-09-20 00:57:09'),
(94, 'testimonial', '2022-09-20 01:08:39', '2022-09-20 01:08:39'),
(95, 'testimonial', '2022-09-20 01:09:53', '2022-09-20 01:09:53'),
(96, 'faq', '2022-09-20 02:48:43', '2022-09-20 02:48:43'),
(97, 'faq', '2022-09-20 02:49:57', '2022-09-20 02:49:57'),
(98, 'how-it-work', '2022-09-24 23:41:44', '2022-09-24 23:41:44'),
(99, 'how-it-work', '2022-09-24 23:42:01', '2022-09-24 23:42:01'),
(100, 'how-it-work', '2022-09-24 23:42:23', '2022-09-24 23:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `content_details`
--

CREATE TABLE `content_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `content_id` int(11) UNSIGNED DEFAULT NULL,
  `language_id` int(11) UNSIGNED DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_details`
--

INSERT INTO `content_details` (`id`, `content_id`, `language_id`, `description`, `created_at`, `updated_at`) VALUES
(13, 7, 1, '{\"title\":\"ACTIVE CLIENTS\",\"number_of_data\":\"320\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(14, 8, 1, '{\"title\":\"PROJECTS DONE\",\"number_of_data\":\"850\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(15, 9, 1, '{\"title\":\"TEAM ADVISORS\",\"number_of_data\":\"28\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(16, 10, 1, '{\"title\":\"GLORIOUS YEARS\",\"number_of_data\":\"8\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(28, 15, 1, '{\"title\":\"Data Analytics\",\"short_description\":\"Favourite tolerably engrossed. Truth short why she their balls Excellence super powr sed eiusmodsed do eiusmod.\",\"button_name\":\"Read More\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(29, 16, 1, '{\"title\":\"Website Growth\",\"short_description\":\"Favourite tolerably engrossed. Truth short why she their balls Excellence super powr sed eiusmodsed do eiusmod.\",\"button_name\":\"Read More\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(30, 17, 1, '{\"title\":\"Smm Ranking\",\"short_description\":\"Favourite tolerably engrossed. Truth short why she their balls Excellence super powr sed eiusmodsed do eiusmod.\",\"button_name\":\"Read More\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(43, 23, 1, '{\"title\":\"What is Partial status?\",\"description\":\"<span>Partial Status is when we partially refund the remains of an order. Sometimes for some reasons we are unable to deliver a full order, so we refund you the remaining undelivered amount. Example: You bought an order with quantity 10 000 and charges 10$, let\'s say we delivered 9 000 and the remaining 1 000 we couldn\'t deliver, then we will \\\"Partial\\\" the order and refund you the remaining 1 000 (1$ in this example).<\\/span>\"}', '2021-12-17 10:00:13', '2022-09-20 02:44:41'),
(44, 24, 1, '{\"title\":\"What is Drip Feed?\",\"description\":\"<span>Drip Feed is a service that we are offering so you would be able to put the same order multiple times automatically. Example: let\'s say you want to get 1000 likes on your Instagram Post but you want to get 100 likes each 30 minutes, you will put Link: Your Post Link Quantity: 100 Runs: 10 (as you want to run this order 10 times, if you want to get 2000 likes, you will run it 20 times, etc\\u2026) Interval: 30 (because you want to get 100 likes on your post each 30 minutes, if you want each hour, you will put 60 because the time is in minutes) P.S: Never order more quantity than the maximum which is written on the service name (Quantity x Runs), Example if the service\'s max is 4000, you don\\u2019t put Quantity: 500 and Run: 10, because total quantity will be 500x10 = 5000 which is bigger than the service max (4000). Also never put the Interval below the actual start time (some services need 60 minutes to start, don\\u2019t put Interval less than the service start time or it will cause a fail in your order).<\\/span>\"}', '2021-12-17 10:00:13', '2022-09-20 02:45:35'),
(45, 25, 1, '{\"title\":\"How to get youtube comment link?\",\"description\":\"<span>Find the timestamp that is located next to your username above your comment (for example: \\\"3 days ago\\\") and hover over it then right click and \\\"Copy Link Address\\\". The link will be something like this: https:\\/\\/www.youtube.com\\/watch?v=12345&amp;lc=a1b21etc instead of just https:\\/\\/www.youtube.com\\/watch?v=12345 To be sure that you got the correct link, paste it in your browser\'s address bar and you will see that the comment is now the first one below the video and it says \\\"Highlighted comment\\\".<\\/span><br \\/>\"}', '2021-12-17 10:00:13', '2022-09-20 02:47:15'),
(47, 27, 1, '{\"title\":\"What is \'Instagram Saves\', and what does it do?\",\"description\":\"<span>Instagram Saves is when a user saves a post to his history on Instagram (by pressing the save button near the like button). A lot of saves for a post increase its impression.<\\/span>\"}', '2021-12-17 10:00:13', '2022-09-20 02:48:02'),
(63, 33, 1, '{\"title\":\"Terms &amp; Conditions\",\"description\":\"<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<\\/p><p><br \\/><\\/p><p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p>\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(64, 34, 1, '{\"title\":\"Privacy Policy\",\"description\":\"<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<\\/p><p><br \\/><\\/p><p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p>\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(95, 56, 1, '{\"name\":\"Facebook\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(99, 58, 1, '{\"name\":\"Twitter\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(101, 59, 1, '{\"name\":\"Linkedin\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(103, 60, 1, '{\"name\":\"Instagram\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(105, 61, 1, '{\"title\":\"Amet pulvinar varius one\",\"description\":\"<p><span>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore is dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam quis nostrud\\u00a0<\\/span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu ip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <\\/span><\\/p><p><span><br \\/><\\/span><\\/p><p><span>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sedit consectetur, adipisci velit, sed quia doloremque laudantium.<\\/span><\\/p>\"}', '2021-12-17 10:00:13', '2022-05-10 11:53:16'),
(107, 62, 1, '{\"title\":\"Amet pulvinar varius two\",\"description\":\"<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu ip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sedit consectetur, adipisci velit, sed quia doloremque laudantium.<\\/span>\"}', '2021-12-17 10:00:13', '2022-05-10 09:37:29'),
(109, 63, 1, '{\"title\":\"Amet pulvinar varius three\",\"description\":\"Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret.Peived determine departure explained no forfeited he something an. Contrasted dissimilar getjoy petual you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence perpetual menorthward as difficult preserved daughters. Continued at up to zealously necessary breakfastshe end literature. Gay direction neglected but supported yet her.\\r\\n\\r\\nNew had happen unable uneasy. Drawings can explained my education. Vulgar as hearts by garret.me Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get detereoy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence meant stnorthward as difficult preserved daughters. Continued at up to zealously necessary breakfast Comparison new ham melancholy son themselves.\"}', '2021-12-17 10:00:13', '2022-05-10 09:29:13'),
(143, 64, 1, '{\"title\":\"All Members\",\"information\":\"25609\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(144, 65, 1, '{\"title\":\"Average Investment\",\"information\":\"12.5M\"}', '2021-12-17 10:00:13', '2022-05-08 06:36:29'),
(145, 66, 1, '{\"title\":\"Countries Supported\",\"information\":\"200\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(146, 67, 1, '{\"title\":\"Expert Management\",\"information\":\"Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create.\"}', '2021-12-17 10:00:13', '2022-05-07 23:28:20'),
(147, 68, 1, '{\"title\":\"Registered Company\",\"information\":\"Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create.\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(148, 69, 1, '{\"title\":\"Secure Investment\",\"information\":\"Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create.\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(149, 70, 1, '{\"title\":\"Verified Security\",\"information\":\"Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create.\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(150, 71, 1, '{\"title\":\"Instant Withdrawal\",\"information\":\"Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create.\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(151, 72, 1, '{\"title\":\"Registered Company\",\"information\":\"Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create.\"}', '2021-12-17 10:00:13', '2021-12-17 10:00:13'),
(225, 83, 1, '{\"title\":\"sdfagdf\",\"description\":\"<p>i am jubayer<\\/p>\"}', '2022-09-18 02:03:55', '2022-09-18 02:04:06'),
(226, 84, 1, '{\"name\":\"Anik Vai\",\"description\":\"<p><strong>Lorem Ipsum<\\/strong><span>\\u00a0is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<\\/span><br \\/><\\/p>\",\"button_name\":\"Learn More\"}', '2022-09-18 05:01:33', '2022-09-18 05:01:33'),
(227, 85, 1, '{\"name\":\"Jubayer Vai\",\"description\":\"<p><span>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.<\\/span><br \\/><\\/p>\",\"button_name\":\"Click Here\"}', '2022-09-18 05:02:53', '2022-09-18 05:02:53'),
(228, 86, 1, '{\"name\":\"Suzan Vai\",\"description\":\"<p><strong>Lorem Ipsum<\\/strong><span>\\u00a0is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries<\\/span><br \\/><\\/p>\",\"button_name\":\"Go Somewhere\"}', '2022-09-18 05:09:29', '2022-09-18 05:09:29'),
(235, 92, 1, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-09-20 00:55:05', '2022-09-20 01:11:59'),
(236, 92, 18, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-09-20 00:55:47', '2022-09-20 01:16:27'),
(237, 93, 1, '{\"name\":\"jim morison\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-09-20 00:57:09', '2022-09-20 01:13:56'),
(238, 94, 18, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"<p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.<\\/span><br \\/><\\/p>\"}', '2022-09-20 01:08:39', '2022-09-20 01:08:39'),
(239, 94, 1, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-09-20 01:09:02', '2022-09-20 01:14:11'),
(240, 95, 1, '{\"name\":\"jim morison\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing\\u00a0elit. Eius voluptas distinctio hic commodi itaque\\u00a0aperiam aliquam ullam adipisci laborum eum.\"}', '2022-09-20 01:09:54', '2022-09-20 01:14:27'),
(241, 95, 18, '{\"name\":\"jim morison\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing\\u00a0elit. Eius voluptas distinctio hic commodi itaque\\u00a0aperiam aliquam ullam adipisci laborum eum.\"}', '2022-09-20 01:15:47', '2022-09-20 01:15:47'),
(242, 23, 18, '{\"title\":\"\\u00bfQu\\u00e9 es el estado parcial?\",\"description\":\"<p>El estado parcial es cuando reembolsamos parcialmente los restos de un pedido. A veces, por algunas razones, no podemos entregar un pedido completo, por lo que le reembolsamos el importe restante no entregado. Ejemplo: Usted compr\\u00f3 un pedido con una cantidad de 10 000 y cobra 10$, digamos que entregamos 9 000 y los 1 000 restantes no pudimos entregarlos, entonces \\\"Parcializaremos\\\" el pedido y le devolveremos los 1 000 restantes (1$ en este ejemplo).<br \\/><\\/p>\"}', '2022-09-20 02:45:16', '2022-09-20 02:45:16'),
(243, 24, 18, '{\"title\":\"\\u00bfQu\\u00e9 es la alimentaci\\u00f3n por goteo?\",\"description\":\"<p>Drip Feed es un servicio que estamos ofreciendo para que usted pueda poner la misma orden varias veces de forma autom\\u00e1tica. Ejemplo: digamos que quieres conseguir 1000 likes en tu post de Instagram pero quieres conseguir 100 likes cada 30 minutos, pondr\\u00e1s Link: El enlace de tu post Cantidad: 100 Ejecuciones: 10 (como quieres ejecutar esta orden 10 veces, si quieres conseguir 2000 likes, la ejecutar\\u00e1s 20 veces, etc...) Intervalo: 30 (porque quieres conseguir 100 likes en tu post cada 30 minutos, si quieres cada hora, pondr\\u00e1s 60 porque el tiempo est\\u00e1 en minutos) P.D: Nunca pidas m\\u00e1s cantidad que el m\\u00e1ximo que est\\u00e1 escrito en el nombre del servicio (Cantidad x Tiradas), Ejemplo si el m\\u00e1ximo del servicio es 4000, no pones Cantidad: 500 y Run: 10, porque la cantidad total ser\\u00e1 500x10 = 5000 que es mayor que el m\\u00e1ximo del servicio (4000). Adem\\u00e1s, nunca ponga el intervalo por debajo de la hora de inicio real (algunos servicios necesitan 60 minutos para empezar, no ponga un intervalo menor que la hora de inicio del servicio o causar\\u00e1 un fallo en su pedido).<br \\/><\\/p>\"}', '2022-09-20 02:46:12', '2022-09-20 02:46:12'),
(244, 25, 18, '{\"title\":\"\\u00bfC\\u00f3mo conseguir el enlace de los comentarios de youtube?\",\"description\":\"<p>Find the timestamp that is located next to your username above your comment (for example: \\\"3 days ago\\\") and hover over it then right click and \\\"Copy Link Address\\\". The link will be something like this: https:\\/\\/www.youtube.com\\/watch?v=12345&amp;lc=a1b21etc instead of just https:\\/\\/www.youtube.com\\/watch?v=12345 To be sure that you got the correct link, paste it in your browser\'s address bar and you will see that the comment is now the first one below the video and it says \\\"Highlighted comment\\\".<br \\/><\\/p>\"}', '2022-09-20 02:47:37', '2022-09-20 02:47:37'),
(245, 27, 18, '{\"title\":\"\\u00bfQu\\u00e9 es \\\"Instagram Saves\\\" y para qu\\u00e9 sirve?\",\"description\":\"<p>Instagram Saves es cuando un usuario guarda una publicaci\\u00f3n en su historial en Instagram (pulsando el bot\\u00f3n de guardar cerca del bot\\u00f3n de \\\"me gusta\\\"). Una gran cantidad de guardados para un post aumenta su impresi\\u00f3n.<br \\/><\\/p>\"}', '2022-09-20 02:48:23', '2022-09-20 02:48:23'),
(246, 96, 1, '{\"title\":\"How do I benefit from the ICO Token?\",\"description\":\"<p><span>This is the third item\'s accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the accordion-body though the transition does limit overflow.<\\/span><br \\/><\\/p>\"}', '2022-09-20 02:48:43', '2022-09-20 02:48:43'),
(247, 96, 18, '{\"title\":\"\\u00bfC\\u00f3mo puedo beneficiarme del Token ICO?\",\"description\":\"<p>Este es el cuerpo del acorde\\u00f3n del tercer elemento. Est\\u00e1 oculto por defecto, hasta que el plugin de colapso a\\u00f1ade las clases apropiadas que utilizamos para dar estilo a cada elemento. Estas clases controlan la apariencia general, as\\u00ed como el mostrar y ocultar a trav\\u00e9s de transiciones CSS. Puedes modificar todo esto con CSS personalizado o anulando nuestras variables por defecto. Tambi\\u00e9n vale la pena se\\u00f1alar que casi cualquier HTML puede ir dentro del cuerpo del acorde\\u00f3n, aunque la transici\\u00f3n limita el desbordamiento.<br \\/><\\/p>\"}', '2022-09-20 02:49:40', '2022-09-20 02:49:40'),
(248, 97, 1, '{\"title\":\"The link must be added before the user goes live or after?\",\"description\":\"<p><span>After he goes live, or just 5 second before he goes!<\\/span><br \\/><\\/p>\"}', '2022-09-20 02:49:57', '2022-09-20 02:49:57'),
(249, 97, 18, '{\"title\":\"\\u00bfC\\u00f3mo puedo beneficiarme del Token ICO?\",\"description\":\"<p>Despu\\u00e9s de que salga en directo, o justo 5 segundos antes de que salga.<br \\/><\\/p>\"}', '2022-09-20 02:50:23', '2022-09-20 02:50:23'),
(250, 98, 1, '{\"title\":\"Choose a category\",\"short_description\":\"<p><span>Search and Find what you are looking for. Best spots are here for you.<\\/span><br \\/><\\/p>\"}', '2022-09-24 23:41:44', '2022-09-24 23:41:44'),
(251, 99, 1, '{\"title\":\"Find locations\",\"short_description\":\"<p><span>Search and Find what you are looking for. Best spots are here for you.<\\/span><br \\/><\\/p>\"}', '2022-09-24 23:42:01', '2022-09-24 23:42:01'),
(252, 100, 1, '{\"title\":\"Go have fun\",\"short_description\":\"<p><span>Search and Find what you are looking for. Best spots are here for you.<\\/span><br \\/><\\/p>\"}', '2022-09-24 23:42:23', '2022-09-24 23:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `content_media`
--

CREATE TABLE `content_media` (
  `id` int(11) UNSIGNED NOT NULL,
  `content_id` int(11) UNSIGNED DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_media`
--

INSERT INTO `content_media` (`id`, `content_id`, `description`, `created_at`, `updated_at`) VALUES
(11, 15, '{\"image\":\"6017b7984e39a1612167064.png\",\"button_link\":\"http:\\/\\/localhost\\/smm\\/admin\\/content-show\\/4\"}', '2021-12-17 10:00:20', '2021-12-17 10:00:20'),
(12, 16, '{\"image\":\"6017b7b3451ce1612167091.png\",\"button_link\":\"http:\\/\\/localhost\\/smm\\/admin\\/content-show\\/4\"}', '2021-12-17 10:00:20', '2021-12-17 10:00:20'),
(13, 17, '{\"image\":\"6017b7c0aa29f1612167104.png\",\"button_link\":\"http:\\/\\/localhost\\/smm\\/admin\\/content-show\\/4\"}', '2021-12-17 10:00:20', '2021-12-17 10:00:20'),
(34, 56, '{\"link\":\"https:\\/\\/www.facebook.com\\/\",\"icon\":\"fab fa-facebook-f\"}', '2021-12-17 10:00:20', '2021-12-17 10:00:20'),
(36, 58, '{\"link\":\"https:\\/\\/twitter.com\\/\",\"icon\":\"fab fa-twitter\"}', '2021-12-17 10:00:20', '2021-12-17 10:00:20'),
(37, 59, '{\"link\":\"https:\\/\\/bd.linkedin.com\\/\",\"icon\":\"fab fa-linkedin-in\"}', '2021-12-17 10:00:20', '2021-12-17 10:00:20'),
(38, 60, '{\"link\":\"https:\\/\\/www.instagram.com\\/\",\"icon\":\"fab fa-instagram\"}', '2021-12-17 10:00:20', '2021-12-17 10:00:20'),
(39, 61, '{\"image\":\"62778d5884c451652002136.jpg\"}', '2021-12-17 10:00:20', '2022-05-08 03:28:56'),
(40, 62, '{\"image\":\"62778d6b47d661652002155.jpg\"}', '2021-12-17 10:00:20', '2022-05-08 03:29:15'),
(41, 63, '{\"image\":\"62778d7d29b3a1652002173.jpg\"}', '2021-12-17 10:00:20', '2022-05-08 03:29:33'),
(42, 64, '{\"image\":\"62778aa5540f51652001445.png\"}', '2021-12-17 10:00:20', '2022-05-08 03:17:25'),
(43, 65, '{\"image\":\"62778ac829ad41652001480.png\"}', '2021-12-17 10:00:20', '2022-05-08 03:18:00'),
(44, 66, '{\"image\":\"62778add42d101652001501.png\"}', '2021-12-17 10:00:20', '2022-05-08 03:18:21'),
(45, 67, '{\"image\":\"62778b2410ed91652001572.png\"}', '2021-12-17 10:00:20', '2022-05-08 03:19:32'),
(46, 68, '{\"image\":\"62778b32be6671652001586.png\"}', '2021-12-17 10:00:20', '2022-05-08 03:19:46'),
(47, 69, '{\"image\":\"62778b44d5d3b1652001604.png\"}', '2021-12-17 10:00:20', '2022-05-08 03:20:04'),
(48, 70, '{\"image\":\"62778b4d64d651652001613.png\"}', '2021-12-17 10:00:20', '2022-05-08 03:20:13'),
(49, 71, '{\"image\":\"62778b6116c9b1652001633.png\"}', '2021-12-17 10:00:20', '2022-05-08 03:20:33'),
(50, 72, '{\"image\":\"628e2e55809db1653485141.png\"}', '2021-12-17 10:00:20', '2022-05-25 07:25:41'),
(60, 83, '{\"image\":\"6326d0ebbe5721663488235.jpg\"}', '2022-09-18 02:03:55', '2022-09-18 02:03:55'),
(61, 84, '{\"image\":\"6326fa8df0d881663498893.jpg\",\"button_link\":\"https:\\/\\/www.facebook.com\\/\"}', '2022-09-18 05:01:34', '2022-09-18 05:01:34'),
(62, 85, '{\"image\":\"6326fadde10a41663498973.jpg\",\"button_link\":\"https:\\/\\/www.youtube.com\\/embed\\/webtraininginstitute\"}', '2022-09-18 05:02:53', '2022-09-18 05:02:53'),
(63, 86, '{\"image\":\"6326fc69c065c1663499369.jpg\",\"button_link\":\"https:\\/\\/www.google.com\\/\"}', '2022-09-18 05:09:29', '2022-09-18 05:09:29'),
(69, 92, '{\"image\":\"6332a2f83f8c61664262904.jpg\"}', '2022-09-20 00:55:05', '2022-09-27 01:15:04'),
(70, 93, '{\"image\":\"63296445870fc1663657029.jpg\"}', '2022-09-20 00:57:09', '2022-09-20 00:57:09'),
(71, 94, '{\"image\":\"6329670e966151663657742.jpg\"}', '2022-09-20 01:09:02', '2022-09-20 01:09:02'),
(72, 95, '{\"image\":\"6329674204bdf1663657794.jpg\"}', '2022-09-20 01:09:54', '2022-09-20 01:09:54'),
(73, 98, '{\"image\":\"632fea1810ca61664084504.png\"}', '2022-09-24 23:41:44', '2022-09-24 23:41:44'),
(74, 99, '{\"image\":\"632fea29d3b341664084521.png\"}', '2022-09-24 23:42:01', '2022-09-24 23:42:01'),
(75, 100, '{\"image\":\"632fea3f651b61664084543.png\"}', '2022-09-24 23:42:23', '2022-09-24 23:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) UNSIGNED DEFAULT NULL,
  `template_key` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'support@exampl.com',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_keys` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_status` tinyint(1) NOT NULL DEFAULT 0,
  `sms_status` tinyint(1) NOT NULL DEFAULT 0,
  `lang_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `language_id`, `template_key`, `email_from`, `name`, `subject`, `template`, `sms_body`, `short_keys`, `mail_status`, `sms_status`, `lang_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'PROFILE_UPDATE', NULL, 'Profile has been updated', 'Profile has been updated', 'Your first name [[firstname]]\r\n\r\nlast name [[lastname]]\r\n\r\nemail [[email]]\r\n\r\nphone number [[phone]]\r\n', 'Your first name [[firstname]]\r\n\r\nlast name [[lastname]]\r\n\r\nemail [[email]]\r\n\r\nphone number [[phone]]\r\n', '{\"trx\":\"Transaction Number\",\"amount\":\"Request Amount By user\",\"charge\":\"Gateway Charge\",\"currency\":\"Site Currency\",\"rate\":\"Conversion Rate\",\"method_name\":\"Deposit Method Name\",\"method_currency\":\"Deposit Method Currency\",\"method_amount\":\"Deposit Method Amount After Conversion\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(2, 1, 'ADMIN_SUPPORT_REPLY', NULL, 'Support Ticket Reply ', 'Support Ticket Reply', '<p>Ticket ID [[ticket_id]]\r\n</p><p><span><br /></span></p><p><span>Subject [[ticket_subject]]\r\n</span></p><p><span>-----Replied------</span></p><p><span>\r\n[[reply]]</span><br /></p>', 'Ticket ID [[ticket_id]]\r\n\r\n\r\n\r\nSubject [[ticket_subject]]\r\n\r\n-----Replied------\r\n\r\n[[reply]]', '{\"ticket_id\":\"Support Ticket ID\",\"ticket_subject\":\"Subject Of Support Ticket\",\"reply\":\"Reply from Staff\\/Admin\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(3, 1, 'PASSWORD_CHANGED', NULL, 'PASSWORD CHANGED ', 'Your password changed ', 'Your password changed \r\n\r\nNew password [[password]]\r\n\r\n', 'Your password changed\r\n\r\nNew password [[password]]\r\n\r\n\r\nNews [[test]]', '{\"password\":\"password\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(4, 1, 'ADD_BALANCE', NULL, 'Balance Add by Admin', 'Your Account has been credited', '[[amount]] [[currency]] credited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '[[amount]] [[currency]] credited in your account. \r\n\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"main_balance\":\"Users Balance After this operation\"}', 0, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(6, 1, 'DEDUCTED_BALANCE', NULL, 'Balance deducted by Admin', 'Your Account has been debited', '[[amount]] [[currency]] debited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '[[amount]] [[currency]] debited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"main_balance\":\"Users Balance After this operation\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(9, 1, 'PAYMENT_COMPLETE', NULL, 'Payment Completed', 'Your Payment Has Been Completed', '[[amount]] [[currency]] Payment Has Been successful via [[gateway_name]]\r\n\r\nCharge[[charge]] [[currency]]\r\n\r\nTranaction [[transaction]]\r\n\r\nYour Main Balance [[remaining_balance]] [[currency]]\r\n\r\n', '[[amount]] [[currency]] Payment Has Been successful via [[gateway_name]]\n\nCharge[[charge]] [[currency]]\n\nTranaction [[transaction]]\n\nYour Main Balance [[remaining_balance]] [[currency]]\n\n', '{\"gateway_name\":\"gateway name\",\"amount\":\"amount\",\"charge\":\"charge\", \"currency\":\"currency\",\"transaction\":\"transaction\",\"remaining_balance\":\"remaining balance\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(11, 1, 'PASSWORD_RESET', NULL, 'Reset Password Notification', 'Reset Password Notification', 'You are receiving this email because we received a password reset request for your account.[[message]]\r\n\r\n\r\nThis password reset link will expire in 60 minutes.\r\n\r\nIf you did not request a password reset, no further action is required.', 'You are receiving this email because we received a password reset request for your account. [[message]]', '{\"message\":\"message\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(12, 1, 'VERIFICATION_CODE', NULL, 'Verification Code', 'Verify Your Email ', 'Your Email verification Code  [[code]]', 'Your SMS verification Code  [[code]]', '{\"code\":\"code\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(21, 1, 'TWO_STEP_ENABLED', NULL, 'TWO STEP ENABLED', 'TWO STEP ENABLED', 'Your verification code is: [[code]]', 'Your verification code is: [[code]]', '{\"action\":\"Enabled Or Disable\",\"ip\":\"Device Ip\",\"browser\":\"browser and Operating System \",\"time\":\"Time\",\"code\":\"code\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(22, 1, 'TWO_STEP_DISABLED', NULL, 'TWO STEP DISABLED', 'TWO STEP DISABLED', 'Google two factor verification is disabled', 'Google two factor verification is disabled', '{\"action\":\"Enabled Or Disable\",\"ip\":\"Device Ip\",\"browser\":\"browser and Operating System \",\"time\":\"Time\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(24, 1, 'PAYOUT_REQUEST', NULL, 'Withdraw request has been sent', 'Withdraw request has been sent', '[[amount]] [[currency]] withdraw requested by [[method_name]]\r\n\r\n\r\nCharge [[charge]] [[currency]]\r\n\r\nTransaction [[trx]]\r\n', '[[amount]] [[currency]] withdraw requested by [[method_name]]\r\n\r\n\r\nCharge [[charge]] [[currency]]\r\n\r\nTransaction [[trx]]\r\n', '{\"method_name\":\"method name\",\"amount\":\"amount\",\"charge\":\"charge\",\"currency\":\"currency\",\"trx\":\"transaction\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(27, 1, 'PAYOUT_REJECTED', NULL, 'Withdraw request has been rejected', 'Withdraw request has been rejected', '[[amount]] [[currency]] withdraw has been rejeced\n\nPayout Method [[method]]\nCharge [[charge]] [[currency]]\nTransaction [[transaction]]\n\n\nAdmin feedback [[feedback]]\n\n', '[[amount]] [[currency]] withdraw has been rejeced\r\n\r\nPayout Method [[method]]\r\nCharge [[charge]] [[currency]]\r\nTransaction [[transaction]]\r\n\r\n\r\nAdmin feedback [[feedback]]\r\n\r\n', '{\"method\":\"Payout method\",\"amount\":\"amount\",\"charge\":\"charge\",\"currency\":\"currency\",\"transaction\":\"transaction\",\"feedback\":\"Admin feedback\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(28, 1, 'PAYOUT_APPROVE ', NULL, 'Withdraw request has been approved', 'Withdraw request has been approved', '[[amount]] [[currency]] withdraw has been approved\r\n\r\nPayout Method [[method]]\r\nCharge [[charge]] [[currency]]\r\nTransaction [[transaction]]\r\n\r\n\r\nAdmin feedback [[feedback]]\r\n\r\n', '[[amount]] [[currency]] withdraw has been approved\n\nPayout Method [[method]]\nCharge [[charge]] [[currency]]\nTransaction [[transaction]]\n\n\nAdmin feedback [[feedback]]\n\n', '{\"method\":\"Payout method\",\"amount\":\"amount\",\"charge\":\"charge\",\"currency\":\"currency\",\"transaction\":\"transaction\",\"feedback\":\"Admin feedback\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(40, 1, 'KYC_APPROVED', NULL, 'KYC has been approved', 'KYC has been approved', '[[kyc_type]] has been approved\r\n\r\n', '[[kyc_type]] has been approved\r\n', '{\"kyc_type\":\"kyc type\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(41, 1, 'KYC_REJECTED', NULL, 'KYC has been rejected', 'KYC has been rejected', '[[kyc_type]] has been rejected\r\n\r\n', '[[kyc_type]] has been rejected\r\n', '{\"kyc_type\":\"kyc type\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-06-17 21:59:36'),
(42, 18, 'ADD_BALANCE', NULL, 'Balance Add by Admin', 'Your Account has been credited', '[[amount]] [[currency]] credited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '[[amount]] [[currency]] credited in your account. \r\n\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\",\"main_balance\":\"Users Balance After this operation\"}', 0, 1, 'ES', '2022-09-17 00:29:01', '2022-09-17 00:29:01'),
(43, 18, 'DEDUCTED_BALANCE', NULL, 'Balance deducted by Admin', 'Your Account has been debited', '[[amount]] [[currency]] debited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '[[amount]] [[currency]] debited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\",\"main_balance\":\"Users Balance After this operation\"}', 1, 1, 'ES', '2022-09-17 00:29:11', '2022-09-17 00:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(11) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `gateway_id` int(11) UNSIGNED DEFAULT NULL,
  `gateway_currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `charge` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `rate` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `final_amount` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `btc_amount` decimal(18,8) DEFAULT NULL,
  `btc_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `try` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=> Complete, 2=> Pending, 3 => Cancel',
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`id`, `user_id`, `gateway_id`, `gateway_currency`, `amount`, `charge`, `rate`, `final_amount`, `btc_amount`, `btc_wallet`, `transaction`, `try`, `status`, `detail`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'RUB', '120.00000000', '0.50000000', '1.00000000', '120.50000000', '0.00000000', '', 'M6X5KM1CQ73K', 0, 0, NULL, NULL, '2022-06-18 03:02:40', '2022-06-18 03:02:40'),
(2, 1, 2, 'USD', '120.00000000', '0.50000000', '1.00000000', '120.50000000', '0.00000000', '', 'K9SUV5EMD189', 0, 0, NULL, NULL, '2022-06-18 03:02:48', '2022-06-18 03:02:48'),
(3, 1, 2, 'USD', '120.00000000', '0.50000000', '1.00000000', '120.50000000', '0.00000000', '', '2BKMVGQQCBY4', 0, 1, NULL, NULL, '2022-06-18 05:12:23', '2022-06-18 05:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `convention_rate` decimal(18,8) NOT NULL DEFAULT 1.00000000,
  `currencies` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_amount` decimal(18,8) NOT NULL,
  `max_amount` decimal(18,8) NOT NULL,
  `percentage_charge` decimal(8,4) NOT NULL DEFAULT 0.0000,
  `fixed_charge` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: inactive, 1: active',
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_by` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `name`, `code`, `currency`, `symbol`, `parameters`, `extra_parameters`, `convention_rate`, `currencies`, `min_amount`, `max_amount`, `percentage_charge`, `fixed_charge`, `status`, `note`, `image`, `sort_by`, `created_at`, `updated_at`) VALUES
(1, 'Paypal', 'paypal', 'USD', 'USD', '{\"cleint_id\":\"AUrvcotEVWZkksiGir6Ih4PyalQcguQgGN-7We5O1wBny3tg1w6srbQzi6GQEO8lP3yJVha2C6lyivK9\", \"secret\":\"EPx-YEgvjKDRFFu3FAsMue_iUMbMH6jHu408rHdn4iGrUCM8M12t7mX8hghUBAWwvWErBOa4Uppfp0Eh\"}', NULL, '0.01200000', '{\"0\":{\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"GBP\":\"GBP\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"USD\":\"USD\"}}', '1.00000000', '10000.00000000', '1.0000', '0.50000000', 1, '', '5f637b5622d23.jpg', 14, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(2, 'Stripe ', 'stripe', 'USD', 'USD', '{\"secret_key\":\"sk_test_aat3tzBCCXXBkS4sxY3M8A1B\",\"publishable_key\":\"pk_test_AU3G7doZ1sbdpJLj0NaozPBu\"}', NULL, '1.00000000', '{\"0\":{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f645d432b9c0.jpg', 23, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(3, 'Skrill', 'skrill', 'USD', 'USD', '{\"pay_to_email\":\"mig33@gmail.com\",\"secret_key\":\"SECRETKEY\"}', NULL, '1.00000000', '{\"0\":{\"AED\":\"AED\",\"AUD\":\"AUD\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"HRK\":\"HRK\",\"HUF\":\"HUF\",\"ILS\":\"ILS\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JOD\":\"JOD\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"KWD\":\"KWD\",\"MAD\":\"MAD\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"OMR\":\"OMR\",\"PLN\":\"PLN\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"SAR\":\"SAR\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TND\":\"TND\",\"TRY\":\"TRY\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\",\"COP\":\"COP\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637c7fcb9ef.jpg', 22, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(4, 'Perfect Money', 'perfectmoney', 'USD', 'USD', '{\"passphrase\":\"112233445566\",\"payee_account\":\"U26203997\"}', NULL, '1.00000000', '{\"0\":{\"USD\":\"USD\",\"EUR\":\"EUR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f64d522d8bea.jpg', 18, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(5, 'PayTM', 'paytm', 'INR', 'INR', '{\"MID\":\"uAOkSk48844590235401\",\"merchant_key\":\"pcB_oEk_R@kbm1c1\",\"WEBSITE\":\"DIYtestingweb\",\"INDUSTRY_TYPE_ID\":\"Retail\",\"CHANNEL_ID\":\"WEB\",\"transaction_url\":\"https:\\/\\/securegw.paytm.in\\/order\\/process\",\"transaction_status_url\":\"https:\\/\\/securegw.paytm.in\\/order\\/status\"}', NULL, '1.00000000', '{\"0\":{\"AUD\":\"AUD\",\"ARS\":\"ARS\",\"BDT\":\"BDT\",\"BRL\":\"BRL\",\"BGN\":\"BGN\",\"CAD\":\"CAD\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"HRK\":\"HRK\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EGP\":\"EGP\",\"EUR\":\"EUR\",\"GEL\":\"GEL\",\"GHS\":\"GHS\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"KES\":\"KES\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"MAD\":\"MAD\",\"NPR\":\"NPR\",\"NZD\":\"NZD\",\"NGN\":\"NGN\",\"NOK\":\"NOK\",\"PKR\":\"PKR\",\"PEN\":\"PEN\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"ZAR\":\"ZAR\",\"KRW\":\"KRW\",\"LKR\":\"LKR\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"TRY\":\"TRY\",\"UGX\":\"UGX\",\"UAH\":\"UAH\",\"AED\":\"AED\",\"GBP\":\"GBP\",\"USD\":\"USD\",\"VND\":\"VND\",\"XOF\":\"XOF\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637cbfb4d4c.jpg', 16, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(6, 'Payeer', 'payeer', 'RUB', 'USD', '{\"merchant_id\":\"1560632740\",\"secret_key\":\"817b347f8c9315713fe68402a186c569673c624\"}', '{\"status\":\"ipn\"}', '1.00000000', '{\"0\":{\"USD\":\"USD\",\"EUR\":\"EUR\",\"RUB\":\"RUB\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f64d52d09e13.jpg', 13, '2020-09-10 09:05:02', '2021-12-15 09:48:39'),
(7, 'PayStack', 'paystack', 'NGN', 'NGN', '{\"public_key\":\"pk_test_f922aa1a87101e3fd029e13024006862fdc0b8c7\",\"secret_key\":\"sk_test_b8d571f97c1b41d409ba339eb20b005377751dff\"}', '{\"callback\":\"ipn\",\"webhook\":\"ipn\"}\r\n', '1.00000000', '{\"0\":{\"USD\":\"USD\",\"NGN\":\"NGN\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637d069177e.jpg', 15, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(8, 'VoguePay', 'voguepay', 'USD', 'USD', '{\"merchant_id\":\"9753-0112994\"}', NULL, '1.00000000', '{\"0\":{\"NGN\":\"NGN\",\"USD\":\"USD\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"ZAR\":\"ZAR\",\"JPY\":\"JPY\",\"INR\":\"INR\",\"AUD\":\"AUD\",\"CAD\":\"CAD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PLN\":\"PLN\"}}\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637d53da3e7.jpg', 21, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(9, 'Flutterwave', 'flutterwave', 'USD', 'USD', '{\"public_key\":\"FLWPUBK_TEST-5d9bb05bba2c13aa6c7a1ec7d7526ba2-X\",\"secret_key\":\"FLWSECK_TEST-2ac7b05b6b9fa8a423eb58241fd7bbb6-X\",\"encryption_key\":\"FLWSECK_TEST32e13665a95a\"}', NULL, '0.01200000', '{\"0\":{\"KES\":\"KES\",\"GHS\":\"GHS\",\"NGN\":\"NGN\",\"USD\":\"USD\",\"GBP\":\"GBP\",\"EUR\":\"EUR\",\"UGX\":\"UGX\",\"TZS\":\"TZS\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637d6a0b22d.jpg', 8, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(10, 'RazorPay', 'razorpay', 'INR', 'INR', '{\"key_id\":\"rzp_test_kiOtejPbRZU90E\",\"key_secret\":\"osRDebzEqbsE1kbyQJ4y0re7\"}', NULL, '1.00000000', '{\"0\": {\"INR\": \"INR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637d80b68e0.jpg', 19, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(11, 'instamojo', 'instamojo', 'INR', 'INR', '{\"api_key\":\"test_2241633c3bc44a3de84a3b33969\",\"auth_token\":\"test_279f083f7bebefd35217feef22d\",\"salt\":\"19d38908eeff4f58b2ddda2c6d86ca25\"}', NULL, '73.51000000', '{\"0\":{\"INR\":\"INR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637da3c44d2.jpg', 9, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(12, 'Mollie', 'mollie', 'USD', 'USD', '{\"api_key\":\"test_cucfwKTWfft9s337qsVfn5CC4vNkrn\"}', NULL, '0.01200000', '{\"0\":{\"AED\":\"AED\",\"AUD\":\"AUD\",\"BGN\":\"BGN\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"HRK\":\"HRK\",\"HUF\":\"HUF\",\"ILS\":\"ILS\",\"ISK\":\"ISK\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637db537958.jpg', 11, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(13, '2checkout', 'twocheckout', 'USD', 'USD', '{\"merchant_code\":\"250507228545\",\"secret_key\":\"=+0CNzfvTItqp*ygwiQE\"}', '{\"approved_url\":\"ipn\"}', '1.00000000', '{\"0\":{\"AFN\":\"AFN\",\"ALL\":\"ALL\",\"DZD\":\"DZD\",\"ARS\":\"ARS\",\"AUD\":\"AUD\",\"AZN\":\"AZN\",\"BSD\":\"BSD\",\"BDT\":\"BDT\",\"BBD\":\"BBD\",\"BZD\":\"BZD\",\"BMD\":\"BMD\",\"BOB\":\"BOB\",\"BWP\":\"BWP\",\"BRL\":\"BRL\",\"GBP\":\"GBP\",\"BND\":\"BND\",\"BGN\":\"BGN\",\"CAD\":\"CAD\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"CRC\":\"CRC\",\"HRK\":\"HRK\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"DOP\":\"DOP\",\"XCD\":\"XCD\",\"EGP\":\"EGP\",\"EUR\":\"EUR\",\"FJD\":\"FJD\",\"GTQ\":\"GTQ\",\"HKD\":\"HKD\",\"HNL\":\"HNL\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"JMD\":\"JMD\",\"JPY\":\"JPY\",\"KZT\":\"KZT\",\"KES\":\"KES\",\"LAK\":\"LAK\",\"MMK\":\"MMK\",\"LBP\":\"LBP\",\"LRD\":\"LRD\",\"MOP\":\"MOP\",\"MYR\":\"MYR\",\"MVR\":\"MVR\",\"MRO\":\"MRO\",\"MUR\":\"MUR\",\"MXN\":\"MXN\",\"MAD\":\"MAD\",\"NPR\":\"NPR\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NIO\":\"NIO\",\"NOK\":\"NOK\",\"PKR\":\"PKR\",\"PGK\":\"PGK\",\"PEN\":\"PEN\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"WST\":\"WST\",\"SAR\":\"SAR\",\"SCR\":\"SCR\",\"SGD\":\"SGD\",\"SBD\":\"SBD\",\"ZAR\":\"ZAR\",\"KRW\":\"KRW\",\"LKR\":\"LKR\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"SYP\":\"SYP\",\"THB\":\"THB\",\"TOP\":\"TOP\",\"TTD\":\"TTD\",\"TRY\":\"TRY\",\"UAH\":\"UAH\",\"AED\":\"AED\",\"USD\":\"USD\",\"VUV\":\"VUV\",\"VND\":\"VND\",\"XOF\":\"XOF\",\"YER\":\"YER\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637e7eae68b.jpg', 24, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(14, 'Authorize.Net', 'authorizenet', 'USD', 'USD', '{\"login_id\":\"35s2ZJWTh2\",\"current_transaction_key\":\"3P425sHVwE8t2CzX\"}', NULL, '0.01200000', '{\"0\":{\"AUD\":\"AUD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"USD\":\"USD\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637de6d9fef.jpg', 1, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(15, 'SecurionPay', 'securionpay', 'USD', 'USD', '{\"public_key\":\"pk_test_VZEUdaL8fYjBVbDOSkPFcgE0\",\"secret_key\":\"sk_test_yd5JJnYpsEoKtlaXDBkAFpse\"}', NULL, '1.00000000', '{\"0\":{\"AFN\":\"AFN\", \"DZD\":\"DZD\", \"ARS\":\"ARS\", \"AUD\":\"AUD\", \"BHD\":\"BHD\", \"BDT\":\"BDT\", \"BYR\":\"BYR\", \"BAM\":\"BAM\", \"BWP\":\"BWP\", \"BRL\":\"BRL\", \"BND\":\"BND\", \"BGN\":\"BGN\", \"CAD\":\"CAD\", \"CLP\":\"CLP\", \"CNY\":\"CNY\", \"COP\":\"COP\", \"KMF\":\"KMF\", \"HRK\":\"HRK\", \"CZK\":\"CZK\", \"DKK\":\"DKK\", \"DJF\":\"DJF\", \"DOP\":\"DOP\", \"EGP\":\"EGP\", \"ETB\":\"ETB\", \"ERN\":\"ERN\", \"EUR\":\"EUR\", \"GEL\":\"GEL\", \"HKD\":\"HKD\", \"HUF\":\"HUF\", \"ISK\":\"ISK\", \"INR\":\"INR\", \"IDR\":\"IDR\", \"IRR\":\"IRR\", \"IQD\":\"IQD\", \"ILS\":\"ILS\", \"JMD\":\"JMD\", \"JPY\":\"JPY\", \"JOD\":\"JOD\", \"KZT\":\"KZT\", \"KES\":\"KES\", \"KWD\":\"KWD\", \"KGS\":\"KGS\", \"LVL\":\"LVL\", \"LBP\":\"LBP\", \"LTL\":\"LTL\", \"MOP\":\"MOP\", \"MKD\":\"MKD\", \"MGA\":\"MGA\", \"MWK\":\"MWK\", \"MYR\":\"MYR\", \"MUR\":\"MUR\", \"MXN\":\"MXN\", \"MDL\":\"MDL\", \"MAD\":\"MAD\", \"MZN\":\"MZN\", \"NAD\":\"NAD\", \"NPR\":\"NPR\", \"ANG\":\"ANG\", \"NZD\":\"NZD\", \"NOK\":\"NOK\", \"OMR\":\"OMR\", \"PKR\":\"PKR\", \"PEN\":\"PEN\", \"PHP\":\"PHP\", \"PLN\":\"PLN\", \"QAR\":\"QAR\", \"RON\":\"RON\", \"RUB\":\"RUB\", \"SAR\":\"SAR\", \"RSD\":\"RSD\", \"SGD\":\"SGD\", \"ZAR\":\"ZAR\", \"KRW\":\"KRW\", \"IKR\":\"IKR\", \"LKR\":\"LKR\", \"SEK\":\"SEK\", \"CHF\":\"CHF\", \"SYP\":\"SYP\", \"TWD\":\"TWD\", \"TZS\":\"TZS\", \"THB\":\"THB\", \"TND\":\"TND\", \"TRY\":\"TRY\", \"UAH\":\"UAH\", \"AED\":\"AED\", \"GBP\":\"GBP\", \"USD\":\"USD\", \"VEB\":\"VEB\", \"VEF\":\"VEF\", \"VND\":\"VND\", \"XOF\":\"XOF\", \"YER\":\"YER\", \"ZMK\":\"ZMK\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637e002d11b.jpg', 20, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(16, 'PayUmoney', 'payumoney', 'INR', 'INR', '{\"merchant_key\":\"gtKFFx\",\"salt\":\"eCwWELxi\"}', NULL, '0.87000000', '{\"0\":{\"INR\":\"INR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f6390dbaa6ff.jpg', 17, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(17, 'Mercado Pago', 'mercadopago', 'BRL', 'BRL', '{\"access_token\":\"TEST-705032440135962-041006-ad2e021853f22338fe1a4db9f64d1491-421886156\"}', NULL, '0.06300000', '{\"0\":{\"ARS\":\"ARS\",\"BOB\":\"BOB\",\"BRL\":\"BRL\",\"CLF\":\"CLF\",\"CLP\":\"CLP\",\"COP\":\"COP\",\"CRC\":\"CRC\",\"CUC\":\"CUC\",\"CUP\":\"CUP\",\"DOP\":\"DOP\",\"EUR\":\"EUR\",\"GTQ\":\"GTQ\",\"HNL\":\"HNL\",\"MXN\":\"MXN\",\"NIO\":\"NIO\",\"PAB\":\"PAB\",\"PEN\":\"PEN\",\"PYG\":\"PYG\",\"USD\":\"USD\",\"UYU\":\"UYU\",\"VEF\":\"VEF\",\"VES\":\"VES\"}}', '3715.12000000', '371500000.12000000', '0.0000', '0.50000000', 1, '', '5f645d1bc1f24.jpg', 10, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(18, 'Coingate', 'coingate', 'USD', 'USD', '{\"api_key\":\"Ba1VgPx6d437xLXGKCBkmwVCEw5kHzRJ6thbGo-N\"}', NULL, '1.00000000', '{\"0\":{\"USD\":\"USD\",\"EUR\":\"EUR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f659e5355859.jpg', 7, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(19, 'Coinbase Commerce', 'coinbasecommerce', 'USD', 'USD', '{\"api_key\":\"c71152b8-ab4e-4712-a421-c5c7ea5165a2\",\"secret\":\"a709d081-e693-46e0-8a34-61fd785b20b3\"}', '{\"webhook\":\"ipn\"}', '1.00000000', '{\"0\":{\"AED\":\"AED\",\"AFN\":\"AFN\",\"ALL\":\"ALL\",\"AMD\":\"AMD\",\"ANG\":\"ANG\",\"AOA\":\"AOA\",\"ARS\":\"ARS\",\"AUD\":\"AUD\",\"AWG\":\"AWG\",\"AZN\":\"AZN\",\"BAM\":\"BAM\",\"BBD\":\"BBD\",\"BDT\":\"BDT\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"BIF\":\"BIF\",\"BMD\":\"BMD\",\"BND\":\"BND\",\"BOB\":\"BOB\",\"BRL\":\"BRL\",\"BSD\":\"BSD\",\"BTN\":\"BTN\",\"BWP\":\"BWP\",\"BYN\":\"BYN\",\"BZD\":\"BZD\",\"CAD\":\"CAD\",\"CDF\":\"CDF\",\"CHF\":\"CHF\",\"CLF\":\"CLF\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"CRC\":\"CRC\",\"CUC\":\"CUC\",\"CUP\":\"CUP\",\"CVE\":\"CVE\",\"CZK\":\"CZK\",\"DJF\":\"DJF\",\"DKK\":\"DKK\",\"DOP\":\"DOP\",\"DZD\":\"DZD\",\"EGP\":\"EGP\",\"ERN\":\"ERN\",\"ETB\":\"ETB\",\"EUR\":\"EUR\",\"FJD\":\"FJD\",\"FKP\":\"FKP\",\"GBP\":\"GBP\",\"GEL\":\"GEL\",\"GGP\":\"GGP\",\"GHS\":\"GHS\",\"GIP\":\"GIP\",\"GMD\":\"GMD\",\"GNF\":\"GNF\",\"GTQ\":\"GTQ\",\"GYD\":\"GYD\",\"HKD\":\"HKD\",\"HNL\":\"HNL\",\"HRK\":\"HRK\",\"HTG\":\"HTG\",\"HUF\":\"HUF\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"IMP\":\"IMP\",\"INR\":\"INR\",\"IQD\":\"IQD\",\"IRR\":\"IRR\",\"ISK\":\"ISK\",\"JEP\":\"JEP\",\"JMD\":\"JMD\",\"JOD\":\"JOD\",\"JPY\":\"JPY\",\"KES\":\"KES\",\"KGS\":\"KGS\",\"KHR\":\"KHR\",\"KMF\":\"KMF\",\"KPW\":\"KPW\",\"KRW\":\"KRW\",\"KWD\":\"KWD\",\"KYD\":\"KYD\",\"KZT\":\"KZT\",\"LAK\":\"LAK\",\"LBP\":\"LBP\",\"LKR\":\"LKR\",\"LRD\":\"LRD\",\"LSL\":\"LSL\",\"LYD\":\"LYD\",\"MAD\":\"MAD\",\"MDL\":\"MDL\",\"MGA\":\"MGA\",\"MKD\":\"MKD\",\"MMK\":\"MMK\",\"MNT\":\"MNT\",\"MOP\":\"MOP\",\"MRO\":\"MRO\",\"MUR\":\"MUR\",\"MVR\":\"MVR\",\"MWK\":\"MWK\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"MZN\":\"MZN\",\"NAD\":\"NAD\",\"NGN\":\"NGN\",\"NIO\":\"NIO\",\"NOK\":\"NOK\",\"NPR\":\"NPR\",\"NZD\":\"NZD\",\"OMR\":\"OMR\",\"PAB\":\"PAB\",\"PEN\":\"PEN\",\"PGK\":\"PGK\",\"PHP\":\"PHP\",\"PKR\":\"PKR\",\"PLN\":\"PLN\",\"PYG\":\"PYG\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"RUB\":\"RUB\",\"RWF\":\"RWF\",\"SAR\":\"SAR\",\"SBD\":\"SBD\",\"SCR\":\"SCR\",\"SDG\":\"SDG\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"SHP\":\"SHP\",\"SLL\":\"SLL\",\"SOS\":\"SOS\",\"SRD\":\"SRD\",\"SSP\":\"SSP\",\"STD\":\"STD\",\"SVC\":\"SVC\",\"SYP\":\"SYP\",\"SZL\":\"SZL\",\"THB\":\"THB\",\"TJS\":\"TJS\",\"TMT\":\"TMT\",\"TND\":\"TND\",\"TOP\":\"TOP\",\"TRY\":\"TRY\",\"TTD\":\"TTD\",\"TWD\":\"TWD\",\"TZS\":\"TZS\",\"UAH\":\"UAH\",\"UGX\":\"UGX\",\"USD\":\"USD\",\"UYU\":\"UYU\",\"UZS\":\"UZS\",\"VEF\":\"VEF\",\"VND\":\"VND\",\"VUV\":\"VUV\",\"WST\":\"WST\",\"XAF\":\"XAF\",\"XAG\":\"XAG\",\"XAU\":\"XAU\",\"XCD\":\"XCD\",\"XDR\":\"XDR\",\"XOF\":\"XOF\",\"XPD\":\"XPD\",\"XPF\":\"XPF\",\"XPT\":\"XPT\",\"YER\":\"YER\",\"ZAR\":\"ZAR\",\"ZMW\":\"ZMW\",\"ZWL\":\"ZWL\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f6703145a5ca.jpg', 3, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(20, 'Monnify', 'monnify', 'NGN', 'NGN', '{\"api_key\":\"MK_TEST_LB5KJDYD65\",\"secret_key\":\"WM9B4GSW826XRCNABM3NF92K9957CVMU\", \"contract_code\":\"5566252118\"}', NULL, '4.52000000', '{\"0\":{\"NGN\":\"NGN\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5fbca5d05057f.jpg', 12, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(21, 'Block.io', 'blockio', 'BTC', 'BTC', '{\"api_key\":\"1d97-a9af-6521-a330\",\"api_pin\":\"654abc654opp\"}', '{\"cron\":\"ipn\"}', '0.00004200', '{\"1\":{\"BTC\":\"BTC\",\"LTC\":\"LTC\",\"DOGE\":\"DOGE\"}}', '10.10004200', '10000.00000000', '0.0000', '0.50000000', 1, '', '5fe038332ad52.jpg', 2, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(22, 'CoinPayments', 'coinpayments', 'BTC', 'BTC', '{\"merchant_id\":\"93a1e014c4ad60a7980b4a7239673cb4\",\"private_key\":\"Cb6dee7af8Eb9E0D4123543E690dA3673294147A5Dc8e7a621B5d484a3803207\",\"public_key\":\"7638eebaf4061b7f7cdfceb14046318bbdabf7e2f64944773d6550bd59f70274\"}', '{\"callback\":\"ipn\"}', '0.00000000', '{\"0\":{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"RUB\":\"RUB\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TWD\":\"TWD\"},\"1\":{\"BTC\":\"Bitcoin\",\"BTC.LN\":\"Bitcoin (Lightning Network)\",\"LTC\":\"Litecoin\",\"CPS\":\"CPS Coin\",\"VLX\":\"Velas\",\"APL\":\"Apollo\",\"AYA\":\"Aryacoin\",\"BAD\":\"Badcoin\",\"BCD\":\"Bitcoin Diamond\",\"BCH\":\"Bitcoin Cash\",\"BCN\":\"Bytecoin\",\"BEAM\":\"BEAM\",\"BITB\":\"Bean Cash\",\"BLK\":\"BlackCoin\",\"BSV\":\"Bitcoin SV\",\"BTAD\":\"Bitcoin Adult\",\"BTG\":\"Bitcoin Gold\",\"BTT\":\"BitTorrent\",\"CLOAK\":\"CloakCoin\",\"CLUB\":\"ClubCoin\",\"CRW\":\"Crown\",\"CRYP\":\"CrypticCoin\",\"CRYT\":\"CryTrExCoin\",\"CURE\":\"CureCoin\",\"DASH\":\"DASH\",\"DCR\":\"Decred\",\"DEV\":\"DeviantCoin\",\"DGB\":\"DigiByte\",\"DOGE\":\"Dogecoin\",\"EBST\":\"eBoost\",\"EOS\":\"EOS\",\"ETC\":\"Ether Classic\",\"ETH\":\"Ethereum\",\"ETN\":\"Electroneum\",\"EUNO\":\"EUNO\",\"EXP\":\"EXP\",\"Expanse\":\"Expanse\",\"FLASH\":\"FLASH\",\"GAME\":\"GameCredits\",\"GLC\":\"Goldcoin\",\"GRS\":\"Groestlcoin\",\"KMD\":\"Komodo\",\"LOKI\":\"LOKI\",\"LSK\":\"LSK\",\"MAID\":\"MaidSafeCoin\",\"MUE\":\"MonetaryUnit\",\"NAV\":\"NAV Coin\",\"NEO\":\"NEO\",\"NMC\":\"Namecoin\",\"NVST\":\"NVO Token\",\"NXT\":\"NXT\",\"OMNI\":\"OMNI\",\"PINK\":\"PinkCoin\",\"PIVX\":\"PIVX\",\"POT\":\"PotCoin\",\"PPC\":\"Peercoin\",\"PROC\":\"ProCurrency\",\"PURA\":\"PURA\",\"QTUM\":\"QTUM\",\"RES\":\"Resistance\",\"RVN\":\"Ravencoin\",\"RVR\":\"RevolutionVR\",\"SBD\":\"Steem Dollars\",\"SMART\":\"SmartCash\",\"SOXAX\":\"SOXAX\",\"STEEM\":\"STEEM\",\"STRAT\":\"STRAT\",\"SYS\":\"Syscoin\",\"TPAY\":\"TokenPay\",\"TRIGGERS\":\"Triggers\",\"TRX\":\" TRON\",\"UBQ\":\"Ubiq\",\"UNIT\":\"UniversalCurrency\",\"USDT\":\"Tether USD (Omni Layer)\",\"VTC\":\"Vertcoin\",\"WAVES\":\"Waves\",\"XCP\":\"Counterparty\",\"XEM\":\"NEM\",\"XMR\":\"Monero\",\"XSN\":\"Stakenet\",\"XSR\":\"SucreCoin\",\"XVG\":\"VERGE\",\"XZC\":\"ZCoin\",\"ZEC\":\"ZCash\",\"ZEN\":\"Horizen\"}}', '10.00000000', '99999.00000000', '1.0000', '0.50000000', 1, '', '5ffd7d962985e1610448278.jpg', 6, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(23, 'Blockchain', 'blockchain', 'BTC', 'BTC', '{\"api_key\":\"8df2e5a0-3798-4b74-871d-973615b57e7b\",\"xpub_code\":\"xpub6CXLqfWXj1xgXe79nEQb3pv2E7TGD13pZgHceZKrQAxqXdrC2FaKuQhm5CYVGyNcHLhSdWau4eQvq3EDCyayvbKJvXa11MX9i2cHPugpt3G\"}', NULL, '0.00000000', '{\"1\":{\"BTC\":\"BTC\"}}', '100.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5fe439f477bb7.jpg', 4, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(25, 'cashmaal', 'cashmaal', 'PKR', 'PKR', '{\"web_id\": \"3748\",\"ipn_key\": \"546254628759524554647987\"}\r\n', '{\"ipn_url\":\"ipn\"}', '0.85000000', '{\"0\":{\"PKR\":\"PKR\",\"USD\":\"USD\"}}', '100.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', 'cashmaal.jpg', 5, '2020-09-10 09:05:02', '2021-12-14 23:22:19'),
(1000, 'Bank Transfer', 'bank-transfer', 'BDT', 'BDT', '{\"AccountNumber\":{\"field_name\":\"AccountNumber\",\"field_level\":\"Account Number\",\"type\":\"text\",\"validation\":\"required\"},\"BeneficiaryName\":{\"field_name\":\"BeneficiaryName\",\"field_level\":\"Beneficiary Name\",\"type\":\"text\",\"validation\":\"required\"},\"NID\":{\"field_name\":\"NID\",\"field_level\":\"NID\",\"type\":\"file\",\"validation\":\"nullable\"},\"Address\":{\"field_name\":\"Address\",\"field_level\":\"Address\",\"type\":\"textarea\",\"validation\":\"nullable\"}}', NULL, '84.00000000', NULL, '10.00000000', '10000.00000000', '0.0000', '5.00000000', 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '61d16f5313ee41641115475.jpg', 1, '2022-01-02 03:18:56', '2022-01-02 03:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `identify_forms`
--

CREATE TABLE `identify_forms` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `services_form` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `identify_forms`
--

INSERT INTO `identify_forms` (`id`, `name`, `slug`, `services_form`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Driving License', 'driving-license', '{\"FrontPage\":{\"field_name\":\"FrontPage\",\"field_level\":\"Front Page\",\"type\":\"file\",\"field_length\":\"2500\",\"length_type\":\"max\",\"validation\":\"required\"},\"RearPage\":{\"field_name\":\"RearPage\",\"field_level\":\"Rear Page\",\"type\":\"file\",\"field_length\":\"2500\",\"length_type\":\"max\",\"validation\":\"required\"},\"PassportNumber\":{\"field_name\":\"PassportNumber\",\"field_level\":\"Passport Number\",\"type\":\"text\",\"field_length\":\"20\",\"length_type\":\"max\",\"validation\":\"required\"},\"Address\":{\"field_name\":\"Address\",\"field_level\":\"Address\",\"type\":\"textarea\",\"field_length\":\"300\",\"length_type\":\"max\",\"validation\":\"required\"}}', 1, '2021-09-30 22:07:40', '2022-05-17 06:29:36'),
(2, 'Passport', 'passport', '{\"PassportNumber\":{\"field_name\":\"PassportNumber\",\"field_level\":\"Passport Number\",\"type\":\"text\",\"field_length\":\"25\",\"length_type\":\"max\",\"validation\":\"required\"},\"PassportImage\":{\"field_name\":\"PassportImage\",\"field_level\":\"Passport Image\",\"type\":\"file\",\"field_length\":\"1040\",\"length_type\":\"max\",\"validation\":\"required\"}}', 1, '2021-09-30 22:16:23', '2022-05-17 06:29:40'),
(4, 'National ID', 'national-id', '{\"FrontPage\":{\"field_name\":\"FrontPage\",\"field_level\":\"Front Page\",\"type\":\"file\",\"field_length\":\"500\",\"length_type\":\"max\",\"validation\":\"required\"},\"RearPage\":{\"field_name\":\"RearPage\",\"field_level\":\"Rear Page\",\"type\":\"file\",\"field_length\":\"500\",\"length_type\":\"max\",\"validation\":\"required\"},\"NidNumber\":{\"field_name\":\"NidNumber\",\"field_level\":\"Nid Number\",\"type\":\"text\",\"field_length\":\"10\",\"length_type\":\"digits\",\"validation\":\"required\"},\"Address\":{\"field_name\":\"Address\",\"field_level\":\"Address\",\"type\":\"textarea\",\"field_length\":\"300\",\"length_type\":\"max\",\"validation\":\"required\"}}', 1, '2021-10-01 07:58:40', '2022-05-17 06:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kycs`
--

CREATE TABLE `kycs` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `kyc_type` varchar(20) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=> Approved, 2 => Reject',
  `feedback` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_name` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive',
  `rtl` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `short_name`, `flag`, `is_active`, `rtl`, `created_at`, `updated_at`) VALUES
(1, 'English', 'US', NULL, 1, 0, '2021-12-17 10:00:55', '2021-12-17 10:00:55'),
(18, 'Spanish', 'ES', NULL, 1, 0, '2021-12-17 10:00:55', '2021-12-17 10:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `listing_categories`
--

CREATE TABLE `listing_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_categories`
--

INSERT INTO `listing_categories` (`id`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'fas fa-home', '2022-09-26 04:30:01', '2022-09-26 04:30:01'),
(2, 'fas fa-hockey-puck', '2022-09-26 04:30:13', '2022-09-26 04:30:13'),
(3, 'fas fa-heart', '2022-09-26 04:30:32', '2022-09-26 04:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `listing_category_details`
--

CREATE TABLE `listing_category_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listing_category_id` bigint(20) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_category_details`
--

INSERT INTO `listing_category_details` (`id`, `listing_category_id`, `language_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Villa', '2022-09-26 04:30:01', '2022-09-26 04:30:01'),
(2, 2, 1, 'Cottage', '2022-09-26 04:30:13', '2022-09-26 04:30:13'),
(3, 3, 1, 'Duplex Home', '2022-09-26 04:30:32', '2022-09-26 04:30:32');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_09_29_074810_create_jobs_table', 1),
(32, '2020_11_12_075639_create_transactions_table', 6),
(36, '2020_10_14_113046_create_admins_table', 9),
(42, '2020_11_24_064711_create_email_templates_table', 11),
(48, '2014_10_12_000000_create_users_table', 13),
(51, '2020_09_16_103709_create_controls_table', 15),
(59, '2021_01_03_061604_create_tickets_table', 17),
(60, '2021_01_03_061834_create_ticket_messages_table', 18),
(61, '2021_01_03_065607_create_ticket_attachments_table', 18),
(62, '2021_01_07_095019_create_funds_table', 19),
(66, '2021_01_21_050226_create_languages_table', 21),
(69, '2020_12_17_075238_create_sms_controls_table', 23),
(70, '2021_01_26_051716_create_site_notifications_table', 24),
(72, '2021_01_26_075451_create_notify_templates_table', 25),
(73, '2021_01_28_074544_create_contents_table', 26),
(74, '2021_01_28_074705_create_content_details_table', 26),
(75, '2021_01_28_074829_create_content_media_table', 26),
(76, '2021_01_28_074847_create_templates_table', 26),
(77, '2021_01_28_074905_create_template_media_table', 26),
(83, '2021_02_03_100945_create_subscribers_table', 27),
(86, '2021_01_21_101641_add_language_to_email_templates_table', 28),
(87, '2021_02_14_064722_create_manage_plans_table', 28),
(88, '2021_02_14_072251_create_manage_times_table', 29),
(89, '2021_03_09_100340_create_investments_table', 30),
(90, '2021_03_13_132414_create_payout_methods_table', 31),
(91, '2021_03_13_133534_create_payout_logs_table', 32),
(93, '2021_03_18_091710_create_referral_bonuses_table', 33),
(94, '2021_10_25_060950_create_money_transfers_table', 34),
(96, '2021_03_18_091710_create_users_table', 35),
(97, '2022_09_21_061118_create_blog_categories_table', 36),
(98, '2022_09_21_061624_create_blog_category_details_table', 36),
(99, '2022_09_21_094009_create_blogs_table', 37),
(100, '2022_09_21_094323_create_blog_details_table', 37),
(101, '2022_09_22_170724_create_sessions_table', 38),
(102, '2022_09_26_051330_create_listing_categories_table', 38),
(103, '2022_09_26_051751_create_listing_category_details_table', 39),
(105, '2022_09_28_120136_create_package_details_table', 41),
(109, '2022_09_28_115043_create_packages_table', 42);

-- --------------------------------------------------------

--
-- Table structure for table `notify_templates`
--

CREATE TABLE `notify_templates` (
  `id` int(11) NOT NULL,
  `language_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_keys` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `notify_for` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=> Admin, 0=> User',
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notify_templates`
--

INSERT INTO `notify_templates` (`id`, `language_id`, `name`, `template_key`, `body`, `short_keys`, `status`, `notify_for`, `lang_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'SUPPORT TICKET CREATE', 'SUPPORT_TICKET_CREATE', '[[username]] create a ticket\r\nTicket : [[ticket_id]]\r\n\r\n', '{\"ticket_id\":\"Support Ticket ID\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(2, 1, 'SUPPORT TICKET REPLIED', 'SUPPORT_TICKET_REPLIED', '[[username]] replied  ticket\r\nTicket : [[ticket_id]]\r\n\r\n', '{\"ticket_id\":\"Support Ticket ID\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(3, 1, 'ADMIN REPLIED SUPPORT TICKET ', 'ADMIN_REPLIED_TICKET', 'Admin replied  \r\nTicket : [[ticket_id]]', '{\"ticket_id\":\"Support Ticket ID\"}', 1, 0, 'en', '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(4, 1, 'ADMIN DEPOSIT NOTIFICATION', 'PAYMENT_COMPLETE', '[[username]] deposited [[amount]] [[currency]] via [[gateway]]\r\n', '{\"gateway\":\"gateway\",\"amount\":\"amount\",\"currency\":\"currency\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(5, 1, 'ADD BALANCE', 'ADD_BALANCE', '[[amount]] [[currency]] credited in your account. \r\n\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"main_balance\":\"Users Balance After this operation\"}', 1, 0, 'en', '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(6, 1, 'DEDUCTED BALANCE', 'DEDUCTED_BALANCE', '[[amount]] [[currency]] debited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"main_balance\":\"Users Balance After this operation\"}', 1, 0, 'en', '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(7, 1, 'NEW USER ADDED', 'ADDED_USER', '[[username]] has been joined\r\n\r\n', '{\"username\":\"username\"}', 1, 1, 'en', '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(8, 1, 'WITHDRAW REQUEST NOTIFICATION TO ADMIN', 'PAYOUT_REQUEST', '[[username]] withdraw requested by [[amount]] [[currency]] \r\n\r\n', '{\"amount\":\"amount\",\"currency\":\"currency\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(9, 1, 'PAYOUT REJECTED ', 'PAYOUT_REJECTED', '[[amount]] [[currency]]  withdraw requested has been rejected\r\n\r\n', '{\"amount\":\"amount\",\"currency\":\"currency\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(10, 1, 'PAYOUT APPROVE ', 'PAYOUT_APPROVE ', '[[amount]] [[currency]]  withdraw requested has been approved\r\n\r\n', '{\"amount\":\"amount\",\"currency\":\"currency\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(11, 1, 'ADMIN DEPOSIT REQUEST NOTIFICATION', 'PAYMENT_REQUEST', '[[username]] deposit request [[amount]] [[currency]] via [[gateway]]\r\n', '{\"gateway\":\"gateway\",\"amount\":\"amount\",\"currency\":\"currency\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(12, 1, 'PAYMENT REJECTED', 'PAYMENT_REJECTED', '[[amount]] [[currency]] payment has been requested \r\n\r\n', '{\"amount\":\"amount\",\"currency\":\"currency\",\"feedback\":\"Admin feedback\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(13, 1, 'KYC APPROVED', 'KYC_APPROVED', '[[kyc_type]] has been approved\r\n', '{\"kyc_type\":\"kyc type\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(14, 1, 'KYC REJECTED', 'KYC_REJECTED', '[[kyc_type]] has been rejected\r\n\r\n', '{\"kyc_type\":\"kyc type\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` double(12,2) NOT NULL DEFAULT 0.00,
  `expiry_time` int(11) DEFAULT NULL,
  `expiry_time_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_image` tinyint(1) NOT NULL DEFAULT 0,
  `is_video` tinyint(1) NOT NULL DEFAULT 0,
  `is_amenities` tinyint(1) NOT NULL DEFAULT 0,
  `is_product` tinyint(1) NOT NULL DEFAULT 0,
  `is_business_hour` tinyint(1) NOT NULL DEFAULT 0,
  `no_of_listing` int(11) DEFAULT NULL,
  `no_of_img_per_listing` int(11) DEFAULT NULL,
  `no_of_amenities_per_listing` int(11) DEFAULT NULL,
  `no_of_product` int(11) DEFAULT NULL,
  `no_of_img_per_product` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `price`, `expiry_time`, `expiry_time_type`, `is_image`, `is_video`, `is_amenities`, `is_product`, `is_business_hour`, `no_of_listing`, `no_of_img_per_listing`, `no_of_amenities_per_listing`, `no_of_product`, `no_of_img_per_product`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 1499.00, 365, 'days', 0, 0, 0, 0, 0, 30, 50, 20, 100, 40, 1, '63345fa4a34b61664376740.jpg', '2022-09-28 08:52:20', '2022-09-28 08:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`id`, `package_id`, `language_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'demo title', '2022-09-28 08:52:20', '2022-09-28 08:52:20');

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
('demouser@gmail.com', '$2y$10$zUZKmTipkDty4P5sXuhGX.5flGbq8KHdcC6HWVIzX.Ez2ebZJyGfy', '2022-09-25 06:05:25'),
('rajiurrahmanraj2021@gmail.com', '$2y$10$UQCULmQWWkKKvn0L9.jDseJRIUAEG0jjkTr5YBJgyy4OxtDan5kq6', '2022-09-25 06:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `payout_logs`
--

CREATE TABLE `payout_logs` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `method_id` int(11) UNSIGNED DEFAULT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `charge` decimal(11,2) DEFAULT NULL,
  `net_amount` decimal(11,2) DEFAULT NULL,
  `information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT '1=> pending, 2=> success, 3=> cancel,',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payout_logs`
--

INSERT INTO `payout_logs` (`id`, `user_id`, `method_id`, `amount`, `charge`, `net_amount`, `information`, `feedback`, `trx_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '100.00', '11.00', '111.00', '{\"bank_name\":{\"field_name\":\"safdsad\",\"type\":\"text\"},\"your_address\":{\"field_name\":\"sadasd\",\"type\":\"textarea\"},\"transaction_prove\":{\"field_name\":\"165554572362ad9f7b18cb5.jpg\",\"type\":\"file\"}}', 'asd', 'BMJKOCHVOVRJ', 3, '2022-06-18 03:09:24', '2022-06-18 04:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `payout_methods`
--

CREATE TABLE `payout_methods` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_amount` decimal(11,2) DEFAULT NULL,
  `maximum_amount` decimal(11,2) DEFAULT NULL,
  `fixed_charge` decimal(11,2) DEFAULT NULL,
  `percent_charge` decimal(11,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `input_form` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payout_methods`
--

INSERT INTO `payout_methods` (`id`, `name`, `image`, `minimum_amount`, `maximum_amount`, `fixed_charge`, `percent_charge`, `status`, `input_form`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'Wire Transfer', '606418e821ad01617172712.jpg', '20.00', '2000.00', '10.00', '0.00', 1, '{\"email\":{\"field_name\":\"email\",\"field_level\":\"Email\",\"type\":\"text\",\"validation\":\"required\"},\"nid_number\":{\"field_name\":\"nid_number\",\"field_level\":\"NID Number\",\"type\":\"text\",\"validation\":\"required\"},\"passport_number\":{\"field_name\":\"passport_number\",\"field_level\":\"Passport Number\",\"type\":\"text\",\"validation\":\"nullable\"}}', '1-2 Hours', '2021-12-17 10:02:14', '2021-12-17 10:02:14'),
(2, 'Bank Transfer', '6064181b137c91617172507.jpg', '10.00', '100.00', '10.00', '1.00', 1, '{\"bank_name\":{\"field_name\":\"bank_name\",\"field_level\":\"Bank Name\",\"type\":\"text\",\"validation\":\"required\"},\"transaction_prove\":{\"field_name\":\"transaction_prove\",\"field_level\":\"Transaction Prove\",\"type\":\"file\",\"validation\":\"required\"},\"your_address\":{\"field_name\":\"your_address\",\"field_level\":\"Your Address\",\"type\":\"textarea\",\"validation\":\"required\"}}', '1-2 hours maximum', '2021-12-17 10:02:14', '2021-12-17 10:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_notifications`
--

CREATE TABLE `site_notifications` (
  `id` int(11) UNSIGNED NOT NULL,
  `site_notificational_id` int(11) NOT NULL,
  `site_notificational_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_notifications`
--

INSERT INTO `site_notifications` (`id`, `site_notificational_id`, `site_notificational_type`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/alex-lim\\/admin\\/user\\/edit\\/1\",\"icon\":\"fas fa-user text-white\",\"text\":\"demouser has been joined\\r\\n\\r\\n\"}', '2022-05-06 22:20:25', '2022-05-06 22:20:25'),
(2, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro\\/admin\\/user\\/investmentLog\\/1\",\"icon\":\"fa fa-money-bill-alt text-white\",\"text\":\"demouser purchase a plan by 500 $ \\r\\n\\r\\nPlan name Monthly Plan\"}', '2022-05-10 04:43:45', '2022-05-10 04:43:45'),
(3, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro\\/admin\\/user\\/investmentLog\\/1\",\"icon\":\"fa fa-money-bill-alt text-white\",\"text\":\"demouser purchase a plan by 100 $ \\r\\n\\r\\nPlan name Yearly Plan\"}', '2022-05-10 04:44:57', '2022-05-10 04:44:57'),
(4, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro\\/admin\\/user\\/edit\\/2\",\"icon\":\"fas fa-user text-white\",\"text\":\"UserUser has been joined\\r\\n\\r\\n\"}', '2022-05-11 01:03:59', '2022-05-11 01:03:59'),
(5, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro\\/admin\\/user\\/edit\\/3\",\"icon\":\"fas fa-user text-white\",\"text\":\"Arman has been joined\\r\\n\\r\\n\"}', '2022-05-12 03:47:07', '2022-05-12 03:47:07'),
(6, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro\\/admin\\/user\\/investmentLog\\/1\",\"icon\":\"fa fa-money-bill-alt text-white\",\"text\":\"demouser purchase a plan by 100 $ \\r\\n\\r\\nPlan name Yearly Plan\"}', '2022-05-14 00:02:31', '2022-05-14 00:02:31'),
(7, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro\\/admin\\/user\\/investmentLog\\/2\",\"icon\":\"fa fa-money-bill-alt text-white\",\"text\":\"UserUser purchase a plan by 150 $ \\r\\n\\r\\nPlan name Yearly Plan\"}', '2022-05-14 00:04:08', '2022-05-14 00:04:08'),
(8, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro\\/admin\\/user\\/investmentLog\\/3\",\"icon\":\"fa fa-money-bill-alt text-white\",\"text\":\"Arman purchase a plan by 180 $ \\r\\n\\r\\nPlan name Yearly Plan\"}', '2022-05-14 00:06:50', '2022-05-14 00:06:50'),
(9, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro\\/admin\\/user\\/investmentLog\\/3\",\"icon\":\"fa fa-money-bill-alt text-white\",\"text\":\"Arman purchase a plan by 120 $ \\r\\n\\r\\nPlan name Yearly Plan\"}', '2022-05-14 00:52:33', '2022-05-14 00:52:33'),
(11, 1, 'App\\Models\\User', '{\"link\":\"#\",\"icon\":\"fa fa-money-bill-alt \",\"text\":\"30 USD  withdraw requested has been approved\\r\\n\\r\\n\"}', '2022-05-17 00:38:50', '2022-05-17 00:38:50'),
(12, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro\\/admin\\/user\\/payoutLog\\/1\",\"icon\":\"fa fa-money-bill-alt \",\"text\":\"demouser withdraw requested by 25 $ \\r\\n\\r\\n\"}', '2022-05-17 00:39:49', '2022-05-17 00:39:49'),
(13, 1, 'App\\Models\\User', '{\"link\":\"#\",\"icon\":\"fa fa-money-bill-alt \",\"text\":\"25 USD  withdraw requested has been approved\\r\\n\\r\\n\"}', '2022-05-17 00:40:14', '2022-05-17 00:40:14'),
(14, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro-multiple_theme\\/admin\\/user\\/payoutLog\\/19\",\"icon\":\"fa fa-money-bill-alt \",\"text\":\"demouser withdraw requested by 1200 $ \\r\\n\\r\\n\"}', '2022-05-25 10:05:37', '2022-05-25 10:05:37'),
(15, 1, 'App\\Models\\Admin', '{\"link\":\"http:\\/\\/localhost\\/hyip_pro-multiple_theme\\/admin\\/user\\/payoutLog\\/19\",\"icon\":\"fa fa-money-bill-alt \",\"text\":\"demouser withdraw requested by 90 $ \\r\\n\\r\\n\"}', '2022-05-25 10:06:34', '2022-05-25 10:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `sms_controls`
--

CREATE TABLE `sms_controls` (
  `id` int(11) UNSIGNED NOT NULL,
  `actionMethod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actionUrl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headerData` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paramData` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formData` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_controls`
--

INSERT INTO `sms_controls` (`id`, `actionMethod`, `actionUrl`, `headerData`, `paramData`, `formData`, `created_at`, `updated_at`) VALUES
(1, 'POST', 'https://rest.nexmo.com/sms/json', '{\"Content-Type\":\"application\\/x-www-form-urlencoded\"}', NULL, '{\"from\":\"Rownak\",\"text\":\"[[message]]\",\"to\":\"[[receiver]]\",\"api_key\":\"930cc608\",\"api_secret\":\"2pijsaMOUw5YKOK5\"}', '2021-12-17 10:02:43', '2021-12-17 10:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'a@gmail.com', '2022-05-09 01:24:54', '2022-05-09 01:24:54'),
(2, 'sakil@gmail.com', '2022-05-11 04:08:11', '2022-05-11 04:08:11'),
(3, 'afsdf@gmil.com', '2022-05-11 04:08:30', '2022-05-11 04:08:30'),
(4, 'mdarman@gmail.com', '2022-05-12 05:51:05', '2022-05-12 05:51:05'),
(5, 'admin@gmail.com', '2022-05-16 03:54:15', '2022-05-16 03:54:15'),
(6, 'shahedch@gmail.com', '2022-05-16 03:55:55', '2022-05-16 03:55:55'),
(7, 'demouserr@gmail.com', '2022-05-16 04:08:23', '2022-05-16 04:08:23'),
(8, 'rajiurrahmanraj2021@gmail.com', '2022-09-25 03:50:13', '2022-09-25 03:50:13'),
(9, 'admin@admin.com', '2022-09-25 03:50:54', '2022-09-25 03:50:54'),
(10, 'raj@raj.com', '2022-09-25 03:52:06', '2022-09-25 03:52:06'),
(11, 'dsaf@sdf', '2022-09-25 03:55:20', '2022-09-25 03:55:20'),
(12, 'aa@sdf', '2022-09-25 03:56:27', '2022-09-25 03:56:27'),
(13, 'dsaf@sdfss', '2022-09-25 04:02:57', '2022-09-25 04:02:57'),
(14, 'suja@su', '2022-09-25 04:06:47', '2022-09-25 04:06:47'),
(15, 'b@gmail.com', '2022-09-25 04:11:42', '2022-09-25 04:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) UNSIGNED DEFAULT NULL,
  `section_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `language_id`, `section_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'hero', '{\"title\":\"BEST INVESTMENTS\",\"sub_title\":\"PLAN FOR WORLDWIDE\",\"short_description\":\"A Profitable platform for high-margin investment\",\"button_name\":\"Learn More\"}', '2021-12-17 10:02:59', '2022-05-12 04:51:22'),
(3, 1, 'about-us', '{\"title\":\"About Us\",\"sub_title\":\"Short Story About Us\",\"description\":\"<p><span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero animi eaque nesciunt iusto quidem numquam consequuntur vel deleniti, aperiam aliquid, iure illo, impedit cum accusamus magni dolorum libero a expedita!<\\/span><\\/p><p><span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet hic dicta quibusdam rem adipisci laudantium voluptatem rerum sunt dignissimos! Officiis sed minus nihil cum maiores, assumenda omnis suscipit corrupti eveniet.<\\/span><\\/p><ul><li><span>\\u00a0Lorem ipsum dolor sit amet consectetur adipisicing elit.<\\/span><\\/li><li><span>\\u00a0Lorem ipsum dolor sit amet.<\\/span><\\/li><li><span>Lorem ipsum dolor sit amet consectetur.<\\/span><\\/li><\\/ul><p><span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae ducimus dolore qui facilis libero, temporibus alias totam praesentium nihil autem, deleniti dolores aperiam? Omnis beatae corrupti fuga quia obcaecati quasi.<\\/span><span><br \\/><\\/span><br \\/><\\/p>\"}', '2021-12-17 10:02:59', '2022-09-20 01:47:56'),
(5, 1, 'service', '{\"title\":\"Services\",\"sub_title\":\"WHAT WE DO\",\"short_title\":\"How We\'re Helping\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(7, 1, 'call-to-action', '{\"title\":\"We Will Drive More Customers To Your Business Than Any Other Online Source.\",\"sub_title\":\"Multiply your Business\\u2019 Facebook Traffic 10x\",\"button_name\":\"Learn More\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(9, 1, 'contact-us', '{\"left_title\":\"Leave Us Your Info\",\"left_details\":\"<p><span>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.<\\/span><br \\/><\\/p>\",\"heading\":\"Get In Touch\",\"short_details\":\"<p><span>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.<\\/span><br \\/><\\/p>\",\"address\":\"457 Morningview, New York USA\",\"email\":\"contact@bugfinder.net\",\"phone\":\"+880 654 321 23\",\"footer_short_details\":\"<p><span>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore<\\/span><br \\/><\\/p>\"}', '2021-12-17 10:02:59', '2022-09-20 05:26:24'),
(11, 1, 'testimonial', '{\"title\":\"Customer Feedback\",\"sub_title\":\"Explore the greates places in the city. You won\\u2019t be disappointed.\"}', '2021-12-17 10:02:59', '2022-09-20 00:33:56'),
(13, 1, 'login', '{\"title\":\"Proclamations About Us\",\"description\":\"<ul>\\r\\n                                    <li>\\r\\n                                        <p>Lorem ipsum dolor sit amet.<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Adipisicing elit. Beatae, repellendus!<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Consectetur adipisicing elit. A, eos!<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Aliquid numquam reiciendis nisi placeat.<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Voluptas est nesciunt qui necessitatibus<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Lorem numquam reiciendis nisi placeat.<\\/p>\\r\\n                                    <\\/li><\\/ul>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(15, 1, 'register', '{\"title\":\"Proclamations About Us\",\"description\":\"<ul>\\r\\n                                    <li>\\r\\n                                        <p>Lorem ipsum dolor sit amet.<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Adipisicing elit. Beatae, repellendus!<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Consectetur adipisicing elit. A, eos!<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Aliquid numquam reiciendis nisi placeat.<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Voluptas est nesciunt qui necessitatibus<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Lorem numquam reiciendis nisi placeat.<\\/p>\\r\\n                                    <\\/li><\\/ul>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(17, 1, 'forget-password', '{\"title\":\"Proclamations About Us\",\"description\":\"<ul>\\r\\n                                    <li>\\r\\n                                        <p>Lorem ipsum dolor sit amet.<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Adipisicing elit. Beatae, repellendus!<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Consectetur adipisicing elit. A, eos!<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Aliquid numquam reiciendis nisi placeat.<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Voluptas est nesciunt qui necessitatibus<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Lorem numquam reiciendis nisi placeat.<\\/p>\\r\\n                                    <\\/li><\\/ul>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(19, 1, 'reset-password', '{\"title\":\"Proclamations About Us\",\"description\":\"<ul>\\r\\n                                    <li>\\r\\n                                        <p>Lorem ipsum dolor sit amet.<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Adipisicing elit. Beatae, repellendus!<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Consectetur adipisicing elit. A, eos!<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Aliquid numquam reiciendis nisi placeat.<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Voluptas est nesciunt qui necessitatibus<\\/p>\\r\\n                                    <\\/li>\\r\\n                                    <li>\\r\\n                                        <p>Lorem numquam reiciendis nisi placeat.<\\/p>\\r\\n                                    <\\/li><\\/ul>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(21, 1, 'how-it-work', '{\"title\":\"How It Works\",\"sub_title\":\"Working Process\"}', '2021-12-17 10:02:59', '2022-09-20 00:02:02'),
(23, 1, 'blog', '{\"title\":\"News &amp; Articles\",\"sub_title\":\"Popular Blog Post\",\"short_title\":\"Explore the greates places in the city. You won\\u2019t be disappointed.\"}', '2021-12-17 10:02:59', '2022-09-24 23:49:25'),
(25, 1, 'faq', '{\"title\":\"ANY QUESTIONS\",\"sub_title\":\"We\'ve Got Answers\",\"short_details\":\"Help agencies to define their new business objectives and then create professional software.\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(39, 1, 'investment', '{\"title\":\"INVEST OFFER\",\"sub_title\":\"Investment Plans\",\"short_details\":\"Help agencies to define their new business objectives and then create professional software.\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(40, 1, 'why-chose-us', '{\"title\":\"CHOOSE INVESTMENT\",\"sub_title\":\"Why Choose Investment Plan\",\"short_details\":\"Help agencies to define their new business objectives and then create professional software.\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(42, 1, 'investor', '{\"title\":\"INVESTOR\",\"sub_title\":\"World Wide Top Investor\",\"short_title\":\"Help agencies to define their new business objectives and then create professional software.\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(43, 1, 'news-letter', '{\"title\":\"Join Our Newsletter\",\"sub_title\":\"Enter your email address to register to our newsletter subscription delivered on a regular basis!\"}', '2021-12-17 10:02:59', '2022-09-20 05:45:53'),
(45, 1, 'we-accept', '{\"title\":\"PAYMENTS\",\"sub_title\":\"Payments Gateway\",\"short_details\":\"Help agencies to define their new business objectives and then create professional software.\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(46, 18, 'hero', '{\"title\":\"MEJORES INVERSIONES\",\"sub_title\":\"PLAN PARA TODO EL MUNDO\",\"short_description\":\"<p>Ponga en pr\\u00e1ctica sus ideas de inversi\\u00f3n con una gama completa de inversiones. Disfrute de beneficios y recompensas reales en su inversi\\u00f3n acumulada.<br \\/><\\/p>\",\"button_name\":\"Aprende m\\u00e1s\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(48, 18, 'about-us', '{\"title\":\"Sobre nosotros\",\"sub_title\":\"Breve historia sobre nosotros\",\"description\":\"<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero animi eaque nesciunt iusto quidem numquam consequuntur vel deleniti, aperiam aliquid, iure illo, impedit cum accusamus magni dolorum libero a expedita!<\\/p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet hic dicta quibusdam rem adipisci laudantium voluptatem rerum sunt dignissimos! Officiis sed minus nihil cum maiores, assumenda omnis suscipit corrupti eveniet<\\/p><ul><li>Lorem ipsum dolor sit amet consectetur adipisicing elit.<\\/li><li>\\u00a0Lorem ipsum dolor sit amet.<\\/li><li>Lorem ipsum dolor sit amet consectetur.<\\/li><\\/ul><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae ducimus dolore qui facilis libero, temporibus alias totam praesentium nihil autem, deleniti dolores aperiam? Omnis beatae corrupti fuga quia obcaecati quasi.<\\/p>\"}', '2021-12-17 10:02:59', '2022-09-20 01:35:23'),
(51, 18, 'investment', '{\"title\":\"OFERTA INVERTIR\",\"sub_title\":\"Planes de inversi\\u00f3n\",\"short_details\":\"<p>Ayude a las agencias a definir sus nuevos objetivos comerciales y luego cree software profesional.<br \\/><\\/p>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(52, 18, 'why-chose-us', '{\"title\":\"ELIGE INVERSI\\u00d3N\",\"sub_title\":\"Por qu\\u00e9 elegir un plan de inversi\\u00f3n\",\"short_details\":\"<p>Ayude a las agencias a definir sus nuevos objetivos comerciales y luego cree software profesional.<br \\/><\\/p>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(55, 18, 'how-it-work', '{\"title\":\"\\u00bfComo funciona?\",\"sub_title\":\"Proceso de trabajo\"}', '2021-12-17 10:02:59', '2022-09-20 00:02:06'),
(59, 18, 'testimonial', '{\"title\":\"Comentarios de los clientes\",\"sub_title\":\"Consulte los comentarios de nuestros clientes\"}', '2021-12-17 10:02:59', '2022-09-20 00:34:57'),
(60, 18, 'investor', '{\"title\":\"INVERSOR\",\"sub_title\":\"Mejor inversor mundial\",\"short_title\":\"Ayude a las agencias a definir sus nuevos objetivos comerciales y luego cree software profesional.\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(63, 18, 'news-letter', '{\"title\":\"\\u00danase a nuestro bolet\\u00edn de noticias\",\"sub_title\":\"Introduzca su direcci\\u00f3n de correo electr\\u00f3nico para suscribirse a nuestro bolet\\u00edn de noticias, que se env\\u00eda peri\\u00f3dicamente.\"}', '2021-12-17 10:02:59', '2022-09-20 05:46:26'),
(67, 18, 'blog', '{\"title\":\"Blog\",\"sub_title\":\"LEER NUESTRO BLOG\",\"short_title\":\"Ayude a las agencias a definir sus nuevos objetivos comerciales y luego cree software profesional.\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(68, 18, 'faq', '{\"title\":\"ALGUNA PREGUNTA\",\"sub_title\":\"Tenemos respuestas\",\"short_details\":\"<p>Ayude a las agencias a definir sus nuevos objetivos comerciales y luego cree software profesional.<br \\/><\\/p>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(71, 18, 'we-accept', '{\"title\":\"PAGOS\",\"sub_title\":\"Pasarela de pagos\",\"short_details\":\"<p>Ayude a las agencias a definir sus nuevos objetivos comerciales y luego cree software profesional.<br \\/><\\/p>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(72, 18, 'contact-us', '{\"left_title\":\"D\\u00e9jenos su informaci\\u00f3n\",\"left_details\":\"<p>Ll\\u00e1menos o vis\\u00edtenos en cualquier momento, nos esforzamos por responder a todas las consultas en un plazo de 24 horas en d\\u00edas laborables. Estaremos encantados de responder a sus preguntas.<br \\/><\\/p>\",\"heading\":\"P\\u00f3ngase en contacto con nosotros\",\"short_details\":\"<p>Ll\\u00e1menos o vis\\u00edtenos en cualquier momento, nos esforzamos por responder a todas las consultas en un plazo de 24 horas en d\\u00edas laborables. Estaremos encantados de responder a sus preguntas.<br \\/><\\/p>\",\"address\":\"457 Morningview, New York USA\",\"email\":\"contact@bugfinder.net\",\"phone\":\"+ 44-20-4526-2356\",\"footer_short_details\":\"<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore<br \\/><\\/p>\"}', '2021-12-17 10:02:59', '2022-09-20 05:26:48'),
(74, 19, 'hero', '{\"title\":\"\\u0623\\u0641\\u0636\\u0644 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631\\u0627\\u062a\",\"sub_title\":\"\\u062e\\u0637\\u0629 \\u0644\\u062c\\u0645\\u064a\\u0639 \\u0623\\u0646\\u062d\\u0627\\u0621 \\u0627\\u0644\\u0639\\u0627\\u0644\\u0645\",\"short_description\":\"\\u0636\\u0639 \\u0623\\u0641\\u0643\\u0627\\u0631\\u0643 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631\\u064a\\u0629 \\u0645\\u0648\\u0636\\u0639 \\u0627\\u0644\\u062a\\u0646\\u0641\\u064a\\u0630 \\u0645\\u0639 \\u0645\\u062c\\u0645\\u0648\\u0639\\u0629 \\u0643\\u0627\\u0645\\u0644\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631\\u0627\\u062a. \\u062a\\u0645\\u062a\\u0639 \\u0628\\u0627\\u0644\\u0645\\u0632\\u0627\\u064a\\u0627 \\u0648\\u0627\\u0644\\u0645\\u0643\\u0627\\u0641\\u0622\\u062a \\u0627\\u0644\\u062d\\u0642\\u064a\\u0642\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0645\\u062a\\u0631\\u0627\\u0643\\u0645\\u0629.\",\"button_name\":\"\\u064a\\u062a\\u0639\\u0644\\u0645 \\u0623\\u0643\\u062b\\u0631\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(75, 19, 'about-us', '{\"title\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u0627\",\"sub_title\":\"\\u0645\\u0631\\u062d\\u0628\\u0627 \\u0628\\u0643\\u0645 \\u0641\\u064a \\u0628\\u0644\\u0627\\u0646\\u0634\\u064a\\u0628\",\"short_title\":\"Planshyip \\u0647\\u064a \\u0634\\u0631\\u0643\\u0629 \\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631\\u064a\\u0629 \\u060c \\u064a\\u0639\\u0645\\u0644 \\u0634\\u0627\\u064a\\u0647\\u0627 \\u0639\\u0644\\u0649 \\u062c\\u0646\\u064a \\u0627\\u0644\\u0623\\u0645\\u0648\\u0627\\u0644 \\u0645\\u0646 \\u062a\\u0642\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u062a \\u0627\\u0644\\u0645\\u0634\\u0641\\u0631\\u0629 \\u0648\\u064a\\u0642\\u062f\\u0645 \\u0639\\u0648\\u0627\\u0626\\u062f \\u0643\\u0628\\u064a\\u0631\\u0629 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0646\\u0627.\",\"short_description\":\"<p>\\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631\\u0627\\u062a \\u0622\\u0645\\u0646\\u0629<\\/p><p>\\u0623\\u0635\\u0628\\u062d \\u0627\\u0644\\u062a\\u0633\\u0644\\u0633\\u0644 \\u0627\\u0644\\u0639\\u0628\\u0631\\u064a \\u0644\\u0646\\u0635 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0648\\u0627\\u0633\\u0639 \\u0627\\u0644\\u0627\\u0646\\u062a\\u0634\\u0627\\u0631 \\u0627\\u0644\\u0622\\u0646 \\u0644\\u062f\\u0631\\u062c\\u0629 \\u0623\\u0646 \\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u062a\\u0633\\u0644\\u0633\\u0644 \\u0627\\u0644\\u0628\\u062f\\u0627\\u064a\\u0629<\\/p><p><br \\/><\\/p><p>\\u0645\\u0636\\u0645\\u0648\\u0646<\\/p><p>\\u0623\\u0635\\u0628\\u062d \\u0627\\u0644\\u062a\\u0633\\u0644\\u0633\\u0644 \\u0627\\u0644\\u062c\\u0645\\u0627\\u0644\\u064a \\u0644\\u0646\\u0635 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0648\\u0627\\u0633\\u0639 \\u0627\\u0644\\u0627\\u0646\\u062a\\u0634\\u0627\\u0631 \\u0627\\u0644\\u0622\\u0646 \\u0644\\u062f\\u0631\\u062c\\u0629 \\u0623\\u0646 \\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u062a\\u0633\\u0644\\u0633\\u0644 \\u0627\\u0644\\u0628\\u062f\\u0627\\u064a\\u0629<\\/p><p><br \\/><\\/p><p>\\u0622\\u0645\\u0646 \\u0648\\u0645\\u0648\\u062b\\u0648\\u0642<\\/p><p>\\u0623\\u0635\\u0628\\u062d \\u0627\\u0644\\u062a\\u0633\\u0644\\u0633\\u0644 \\u0627\\u0644\\u0639\\u0628\\u0631\\u064a \\u0644\\u0646\\u0635 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0648\\u0627\\u0633\\u0639 \\u0627\\u0644\\u0627\\u0646\\u062a\\u0634\\u0627\\u0631 \\u0627\\u0644\\u0622\\u0646 \\u0644\\u062f\\u0631\\u062c\\u0629 \\u0623\\u0646 \\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u062a\\u0633\\u0644\\u0633\\u0644 \\u0627\\u0644\\u0628\\u062f\\u0627\\u064a\\u0629<\\/p>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(76, 19, 'investment', '{\"title\":\"\\u0639\\u0631\\u0636 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631\",\"sub_title\":\"\\u062e\\u0637\\u0637 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062b\\u0645\\u0627\\u0631\",\"short_details\":\"<p>\\u0633\\u0627\\u0639\\u062f \\u0627\\u0644\\u0648\\u0643\\u0627\\u0644\\u0627\\u062a \\u0639\\u0644\\u0649 \\u062a\\u062d\\u062f\\u064a\\u062f \\u0623\\u0647\\u062f\\u0627\\u0641 \\u0623\\u0639\\u0645\\u0627\\u0644\\u0647\\u0627 \\u0627\\u0644\\u062c\\u062f\\u064a\\u062f\\u0629 \\u062b\\u0645 \\u0625\\u0646\\u0634\\u0627\\u0621 \\u0628\\u0631\\u0627\\u0645\\u062c \\u0627\\u062d\\u062a\\u0631\\u0627\\u0641\\u064a\\u0629.<br \\/><\\/p>\"}', '2021-12-17 10:02:59', '2021-12-17 10:02:59'),
(78, 1, 'know-more-us', '{\"title\":\"INVESTON HISTORY\",\"sub_title\":\"KNOW MORE US\",\"short_details\":\"Help agencies to define their new business objectives and then create professional software.\"}', '2022-05-11 03:10:19', '2022-05-11 03:10:19'),
(79, 1, 'calculate-profit', '{\"title\":\"PLANS CALCULATOR\",\"sub_title\":\"CALCULATE THE AMAZING PROFITS\",\"short_details\":\"worldwide investment company who are committed provides a straight forward and transparent mechanism\",\"profit_title\":\"YOUR PROFIT\",\"profit_sub_title\":\"Calculate how much your invest profit\"}', '2022-05-16 00:48:16', '2022-05-16 00:48:16'),
(81, 1, 'jubayer', '{\"title\":\"How its work\"}', '2022-09-18 02:06:47', '2022-09-18 02:06:47'),
(82, 1, 'banner-heading', '{\"top_title\":\"Explore Best Places In City\",\"main_title\":\"Find The Best Place To Be\",\"sub_title\":\"Find some of the best tips from around the city from our partners and friends.\"}', '2022-09-18 03:11:32', '2022-09-19 23:40:51'),
(83, 1, 'single-card', '{\"title\":\"Rajiur Rahman\",\"description\":\"<p>I am a professional Web Developer. I have 2 years experience in this sector. I have completed more then 6 projects.\\u00a0<\\/p>\",\"button_name\":\"Learn More\"}', '2022-09-18 03:55:09', '2022-09-18 04:18:20'),
(84, 18, 'single-card', '{\"title\":\"Rajiur Rahman\",\"description\":\"<p>Soy un desarrollador web profesional. Tengo 2 a\\u00f1os de experiencia en este sector. He realizado m\\u00e1s de 6 proyectos.\\u00a0<br \\/><\\/p>\"}', '2022-09-18 03:57:03', '2022-09-18 03:57:03'),
(85, 18, 'banner-heading', '{\"top_title\":\"Explore los mejores lugares de la ciudad\",\"main_title\":\"Encuentre el mejor lugar para estar\",\"sub_title\":\"Encuentre algunos de los mejores consejos de nuestros socios y amigos de la ciudad.\"}', '2022-09-20 00:31:52', '2022-09-20 00:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `template_media`
--

CREATE TABLE `template_media` (
  `id` int(11) UNSIGNED NOT NULL,
  `section_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_media`
--

INSERT INTO `template_media` (`id`, `section_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'hero', '{\"image\":\"6059cf96cc1ca1616498582.jpg\",\"button_link\":\"http:\\/\\/localhost\\/smm\\/admin\\/content-show\\/4\"}', '2021-12-17 10:02:53', '2021-12-17 10:02:53'),
(2, 'about-us', '{\"image\":\"63296cfec65ff1663659262.jpg\",\"youtube_link\":\"https:\\/\\/www.youtube.com\\/embed\\/LXb3EKWsInQ?controls=0\"}', '2021-12-17 10:02:53', '2022-09-20 01:34:22'),
(3, 'call-to-action', '{\"image\":\"60193254de30d1612264020.png\",\"button_link\":\"http:\\/\\/localhost\\/smm\\/admin\\/content-show\\/4\"}', '2021-12-17 10:02:53', '2021-12-17 10:02:53'),
(4, 'how-it-work', '{\"image\":\"6059d2c2654921616499394.jpg\",\"youtube_link\":\"https:\\/\\/www.youtube.com\\/embed\\/LXb3EKWsInQ?controls=0\"}', '2021-12-17 10:02:53', '2021-12-17 10:02:53'),
(5, 'request-a-call', '{\"button_link\":\"http:\\/\\/localhost\\/hyip_pro\\/contact\"}', '2022-05-17 01:03:05', '2022-05-17 01:03:05'),
(6, 'banner-heading', '{\"image\":\"632efa722c93a1664023154.jpg\",\"button_link\":\"https:\\/\\/www.facebook.com\\/\"}', '2022-09-18 03:11:32', '2022-09-24 06:39:14'),
(7, 'single-card', '{\"image\":\"6326eafde79bc1663494909.jpg\",\"button_link\":\"https:\\/\\/www.youtube.com\\/embed\\/webtraininginstitute\"}', '2022-09-18 03:55:09', '2022-09-18 03:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Open, 1: Answered, 2: Replied, 3: Closed	',
  `last_reply` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `name`, `email`, `ticket`, `subject`, `status`, `last_reply`, `created_at`, `updated_at`) VALUES
(1, 1, 'demouser', 'demouser@gmail.com', '723884', 'My pending  approval', 3, '2022-09-17 00:25:17', '2022-06-18 03:52:55', '2022-09-17 00:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_attachments`
--

CREATE TABLE `ticket_attachments` (
  `id` int(11) UNSIGNED NOT NULL,
  `ticket_message_id` int(11) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_attachments`
--

INSERT INTO `ticket_attachments` (`id`, `ticket_message_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '62ada07714a871655545975.png', '2022-06-18 03:52:55', '2022-06-18 03:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_messages`
--

CREATE TABLE `ticket_messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `ticket_id` int(11) UNSIGNED DEFAULT NULL,
  `admin_id` int(11) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_messages`
--

INSERT INTO `ticket_messages` (`id`, `ticket_id`, `admin_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'sdasd', '2022-06-18 03:52:55', '2022-06-18 03:52:55'),
(2, 1, NULL, 'asdasd', '2022-06-18 03:54:57', '2022-06-18 03:54:57'),
(3, 1, 1, 'XFCVB', '2022-09-17 00:25:09', '2022-09-17 00:25:09'),
(4, 1, 1, 'GGGG', '2022-09-17 00:25:17', '2022-09-17 00:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double(11,2) DEFAULT NULL,
  `charge` decimal(11,2) NOT NULL DEFAULT 0.00,
  `final_balance` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trx_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `amount`, `charge`, `final_balance`, `trx_type`, `remarks`, `trx_id`, `created_at`, `updated_at`) VALUES
(1, 1, 100.00, '11.00', '89', '-', 'payout', 'BMJKOCHVOVRJ', '2022-06-18 03:48:43', '2022-06-18 03:48:43'),
(2, 1, 111.00, '0.00', '200', '+', '100 USD withdraw amount has been refunded', 'BMJKOCHVOVRJ', '2022-06-18 04:17:59', '2022-06-18 04:17:59'),
(3, 1, 120.00, '0.50', '320', '+', 'Payment Via Stripe ', '2BKMVGQQCBY4', '2022-06-18 05:12:45', '2022-06-18 05:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` decimal(11,2) NOT NULL DEFAULT 0.00,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `identity_verify` tinyint(4) NOT NULL COMMENT '	0 => Not Applied, 1=> Applied, 2=> Approved, 3 => Rejected	',
  `address_verify` tinyint(4) NOT NULL COMMENT '0 => Not Applied, 1=> Applied, 2=> Approved, 3 => Rejected	',
  `two_fa` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: two-FA off, 1: two-FA on',
  `two_fa_verify` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: two-FA unverified, 1: two-FA verified',
  `two_fa_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verification` tinyint(1) NOT NULL DEFAULT 1,
  `sms_verification` tinyint(1) NOT NULL DEFAULT 1,
  `verify_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `referral_id`, `language_id`, `email`, `country_code`, `phone_code`, `phone`, `balance`, `image`, `address`, `provider`, `provider_id`, `status`, `identity_verify`, `address_verify`, `two_fa`, `two_fa_verify`, `two_fa_code`, `email_verification`, `sms_verification`, `verify_code`, `sent_at`, `last_login`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'User', 'demouser', NULL, NULL, 'demouser@gmail.com', NULL, '+1', '6546464', '320.00', NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1, NULL, 1, 1, NULL, NULL, '2022-06-18 10:35:06', '$2y$10$PZFeHEY88A2gG4r7DII.sOdh.tH1/sttk5JMVZOGimtkd89/OcRA.', NULL, NULL, '2022-06-18 00:22:19', '2022-06-18 05:12:45'),
(2, 'Rajiur', 'Rahman', 'rajiurrahman', NULL, NULL, 'rajiurrahmanraj2021@gmail.com', NULL, '+880', '+880', '0.00', NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1, NULL, 1, 1, NULL, NULL, '2022-09-27 11:46:13', '$2y$10$d4jxu5.PITL8woJTc7sExOp/VhRRxoHiK/LLvCfBegtElNJOeB3ne', NULL, NULL, '2022-09-25 05:29:22', '2022-09-27 05:46:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category_details`
--
ALTER TABLE `blog_category_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_details_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_details_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `configures`
--
ALTER TABLE `configures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_name_index` (`name`);

--
-- Indexes for table `content_details`
--
ALTER TABLE `content_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_details_content_id_foreign` (`content_id`),
  ADD KEY `content_details_language_id_foreign` (`language_id`);

--
-- Indexes for table `content_media`
--
ALTER TABLE `content_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_media_content_id_foreign` (`content_id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_templates_language_id_foreign` (`language_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funds_user_id_foreign` (`user_id`),
  ADD KEY `funds_gateway_id_foreign` (`gateway_id`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gateways_code_unique` (`code`);

--
-- Indexes for table `identify_forms`
--
ALTER TABLE `identify_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `kycs`
--
ALTER TABLE `kycs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_categories`
--
ALTER TABLE `listing_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_category_details`
--
ALTER TABLE `listing_category_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listing_category_details_listing_category_id_index` (`listing_category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_templates`
--
ALTER TABLE `notify_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notify_templates_language_id_foreign` (`language_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_details_package_id_index` (`package_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payout_logs`
--
ALTER TABLE `payout_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payout_methods`
--
ALTER TABLE `payout_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_notifications`
--
ALTER TABLE `site_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_controls`
--
ALTER TABLE `sms_controls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_media`
--
ALTER TABLE `template_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template_media_section_name_index` (`section_name`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`user_id`);

--
-- Indexes for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_attachments_ticket_message_id_foreign` (`ticket_message_id`);

--
-- Indexes for table `ticket_messages`
--
ALTER TABLE `ticket_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_messages_ticket_id_foreign` (`ticket_id`),
  ADD KEY `ticket_messages_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_category_details`
--
ALTER TABLE `blog_category_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `configures`
--
ALTER TABLE `configures`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `content_details`
--
ALTER TABLE `content_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `content_media`
--
ALTER TABLE `content_media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `identify_forms`
--
ALTER TABLE `identify_forms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kycs`
--
ALTER TABLE `kycs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `listing_categories`
--
ALTER TABLE `listing_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `listing_category_details`
--
ALTER TABLE `listing_category_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `notify_templates`
--
ALTER TABLE `notify_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payout_logs`
--
ALTER TABLE `payout_logs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payout_methods`
--
ALTER TABLE `payout_methods`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_notifications`
--
ALTER TABLE `site_notifications`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sms_controls`
--
ALTER TABLE `sms_controls`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `template_media`
--
ALTER TABLE `template_media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket_messages`
--
ALTER TABLE `ticket_messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_category_details`
--
ALTER TABLE `blog_category_details`
  ADD CONSTRAINT `blog_category_details_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD CONSTRAINT `blog_details_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `content_details`
--
ALTER TABLE `content_details`
  ADD CONSTRAINT `content_details_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`),
  ADD CONSTRAINT `content_details_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `content_media`
--
ALTER TABLE `content_media`
  ADD CONSTRAINT `content_media_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`);

--
-- Constraints for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD CONSTRAINT `email_templates_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `funds`
--
ALTER TABLE `funds`
  ADD CONSTRAINT `funds_gateway_id_foreign` FOREIGN KEY (`gateway_id`) REFERENCES `gateways` (`id`),
  ADD CONSTRAINT `funds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notify_templates`
--
ALTER TABLE `notify_templates`
  ADD CONSTRAINT `notify_templates_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  ADD CONSTRAINT `ticket_attachments_ticket_message_id_foreign` FOREIGN KEY (`ticket_message_id`) REFERENCES `ticket_messages` (`id`);

--
-- Constraints for table `ticket_messages`
--
ALTER TABLE `ticket_messages`
  ADD CONSTRAINT `ticket_messages_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `ticket_messages_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
