-- --------------------------------------------------------
-- Host:                         www.oke-trip.com
-- Server version:               10.1.31-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table oketripc_lavensia.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '4',
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table oketripc_lavensia.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `password`, `username`, `birthday`, `phone`, `email`, `address`, `role_id`, `remember_token`, `image`, `co_name`, `co_phone`, `co_address`, `co_email`, `mg_name`, `mg_phone`, `mg_email`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'master', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'master', NULL, '9897878', 'oketrip1@gmail.com', 'admin1', 1, 'yb0VdsUjqvdvsPp8WBdek1ihkI5BAZWxOTuGSB8wcN1BD4Bn2MCE9SL49NMg', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF'),
	(2, 'supervisor', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'supervisor', NULL, '9897878', 'oketrip2@gmail.com', 'admin1', 2, 'yb0VdsUjqvdvsPp8WBdek1ihkI5BAZWxOTuGSB8wcN1BD4Bn2MCE9SL49NMg', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF'),
	(3, 'admin', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'admin', NULL, '9897878', 'oketrip3@gmail.com', 'admin1', 3, 'yb0VdsUjqvdvsPp8WBdek1ihkI5BAZWxOTuGSB8wcN1BD4Bn2MCE9SL49NMg', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF'),
	(4, 'master agen', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'master_agen', NULL, '9897878', 'agen_master@gmail.com', 'admin1', 4, 'yb0VdsUjqvdvsPp8WBdek1ihkI5BAZWxOTuGSB8wcN1BD4Bn2MCE9SL49NMg', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF'),
	(5, 'agen', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'agen', NULL, '9897878', 'agen@gmail.com', 'admin1', 4, 'yb0VdsUjqvdvsPp8WBdek1ihkI5BAZWxOTuGSB8wcN1BD4Bn2MCE9SL49NMg', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
