-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rooms_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StartTime` date NOT NULL,
  `EndTime` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `bookings` (`id`, `rooms_id`, `name`, `email`, `phone`, `country`, `address`, `StartTime`, `EndTime`, `created_at`, `updated_at`) VALUES
(1,	5,	'陳冠宇',	'kevin@gmail.com',	'0968566123',	'台灣',	'台中市西屯區河南路二段466號',	'2019-01-03',	'2019-01-03',	'2019-01-02 08:23:25',	'2019-01-02 08:23:25'),
(2,	3,	'陳姿婷',	'vivian@gmail.com',	'0958366789',	'台灣',	'台中市西屯區黎明路三段246號',	'2019-01-04',	'2019-01-04',	'2019-01-02 08:24:53',	'2019-01-02 08:24:53'),
(3,	2,	'張宏偉',	'honwei@gmail.com',	'0975122546',	'台灣',	'台中市西區精誠路294號',	'2019-01-05',	'2019-01-05',	'2019-01-02 08:25:59',	'2019-01-02 08:25:59'),
(4,	6,	'鄭一緯',	'ivan@gmail.com',	'0978933191',	'台灣',	'台中市西屯區西屯路三段157號',	'2019-01-05',	'2019-01-05',	'2019-01-02 08:27:04',	'2019-01-02 08:27:04'),
(13,	5,	'鄭一緯',	'ivan@gmail.com',	'0978933191',	'台灣',	'台中市西屯區西屯路三段157號',	'2019-01-05',	'2019-01-05',	'2019-01-02 08:28:46',	'2019-01-02 08:28:46');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5,	'2014_10_12_000000_create_users_table',	1),
(6,	'2014_10_12_100000_create_password_resets_table',	1),
(7,	'2018_12_15_165030_create_bookings_table',	1),
(8,	'2018_12_26_183511_create_rooms_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `pic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `rooms` (`id`, `name`, `price`, `pic`, `created_at`, `updated_at`) VALUES
(1,	'小管(雙人房)',	2000,	'',	NULL,	NULL),
(2,	'花枝丸(雙人房)',	3000,	'',	NULL,	NULL),
(3,	'土魠(四人房)',	5000,	'',	NULL,	NULL),
(4,	'紅魽(四人房)',	6000,	'',	NULL,	NULL),
(5,	'垵米(四人房)',	7000,	'',	NULL,	NULL),
(6,	'石斑(六人房)',	10000,	'',	NULL,	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2019-01-02 16:30:38
