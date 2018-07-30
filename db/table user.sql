-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.32-MariaDB - mariadb.org binary distribution
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
  `role_id` int(11) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_phone` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_phone` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mg_email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('AKTIF','TIDAK AKTIF') COLLATE utf8mb4_unicode_ci DEFAULT 'TIDAK AKTIF',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `password`, `username`, `birthday`, `phone`, `email`, `address`, `role_id`, `remember_token`, `image`, `co_name`, `co_phone`, `co_address`, `co_email`, `mg_name`, `mg_phone`, `mg_email`, `created_at`, `updated_at`, `status`) VALUES
	(4, 'Asep Hidayat', '$2y$10$yPxkV6VDgkodh1FDsMDvv.LKugCI/Mb5j9UvI2JFxRkS7z87ID7MG', 'deny', NULL, '089999999999', 'ASEP@GMAIL.COM', 'Jl gatau dimana', 4, 'WxMTpurVLxvoCPEVGV1Dwv0n0TR3GwfKABzusqjzT9F2m5508ZgARtez0YFg', '4.jpg', 'PT . GUARD SEEKER', '03141902211', 'Jl . Wonorejo indah timur 3a no 66', 'guardseeker@gmail.com', 'Deny Prasetyo', '0821231211231', 'denyprasetyo41@gmail.com', '2018-07-18 03:57:46', '2018-07-18 03:57:46', 'TIDAK AKTIF');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
