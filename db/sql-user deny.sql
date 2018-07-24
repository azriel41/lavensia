-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for lavensia
CREATE DATABASE IF NOT EXISTS `lavensia` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lavensia`;

-- Dumping structure for table lavensia.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `studies` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `co_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `password`, `username`, `birthday`, `phone`, `email`, `address`, `studies`, `education`, `class`, `role_id`, `remember_token`, `created_at`, `updated_at`, `co_name`, `co_phone`, `co_email`, `co_address`, `mg_name`, `mg_phone`, `mg_email`, `image`) VALUES
	(4, 'Deny Prasetyo', '$2y$10$RJp9p2Y4x7f2SuC.5wCchu9pw8ZHzx9uA76PxYMJrHk8BHA8O9.L6', 'deny', NULL, '089999999999', 'denyprasetyo41@gmail.com', 'Jl wonorejo inda timur 3a no 66', NULL, NULL, NULL, 2, NULL, '2018-07-24 02:35:21', '2018-07-24 02:35:21', 'PT . GUARD SEEKER', '03141902211', 'guardseeker@gmail.com', 'Jl. wonorejo indah timurr', 'Deny Prasetyo', '0821231211231', 'denyprasetyo41@gmail.com', '4.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
