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

-- Dumping structure for table lavensia.d_additonal_booking
CREATE TABLE IF NOT EXISTS `d_additonal_booking` (
  `da_booking_id` int(11) NOT NULL,
  `da_detail` int(11) NOT NULL,
  `da_name` varchar(50) DEFAULT NULL,
  `da_price` double DEFAULT NULL,
  `da_status` enum('Waiting List','Holding Confirm','hx by agent','hx by system') DEFAULT 'Waiting List',
  `da_additional_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`da_booking_id`,`da_detail`),
  CONSTRAINT `FK_d_additonal_booking_d_booking` FOREIGN KEY (`da_booking_id`) REFERENCES `d_booking` (`db_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_additonal_booking: ~11 rows (approximately)
/*!40000 ALTER TABLE `d_additonal_booking` DISABLE KEYS */;
INSERT INTO `d_additonal_booking` (`da_booking_id`, `da_detail`, `da_name`, `da_price`, `da_status`, `da_additional_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'Bambang', 1000000, 'Waiting List', 1, '2018-07-30 13:19:30', '2018-07-30 13:19:30', '5', '5'),
	(1, 2, 'sitai', 200000, 'Waiting List', 2, '2018-07-30 13:19:30', '2018-07-30 13:19:30', '5', '5'),
	(1, 3, 'sitai', 260000, 'Waiting List', 3, '2018-07-30 13:19:30', '2018-07-30 13:19:30', '5', '5'),
	(1, 4, 'sutai', 260000, 'Waiting List', 3, '2018-07-30 13:19:30', '2018-07-30 13:19:30', '5', '5'),
	(2, 1, 'ts', 1000000, 'Waiting List', 1, '2018-07-30 17:38:15', '2018-07-30 17:38:15', '5', '5'),
	(2, 2, 'ts', 200000, 'Waiting List', 2, '2018-07-30 17:38:15', '2018-07-30 17:38:15', '5', '5'),
	(2, 3, 'ts', 260000, 'Waiting List', 3, '2018-07-30 17:38:15', '2018-07-30 17:38:15', '5', '5'),
	(3, 1, '232', 1000000, 'Waiting List', 1, '2018-08-03 14:50:07', '2018-08-03 14:50:07', '5', '5'),
	(4, 1, 'xxx', 1000000, 'Waiting List', 1, '2018-08-03 15:06:41', '2018-08-03 15:06:41', '5', '5'),
	(4, 2, 'baby', 1000000, 'Waiting List', 1, '2018-08-03 15:06:41', '2018-08-03 15:06:41', '5', '5'),
	(4, 3, 'baby', 260000, 'Waiting List', 3, '2018-08-03 15:06:42', '2018-08-03 15:06:42', '5', '5'),
	(5, 1, 'xx', 1000000, 'Waiting List', 1, '2018-08-09 10:42:27', '2018-08-09 10:42:27', '4', '4'),
	(6, 1, '1', 1000000, 'Waiting List', 1, '2018-08-10 10:03:06', '2018-08-10 10:03:06', '4', '4'),
	(7, 1, 'aNTO', 100000, 'Waiting List', 4, '2018-08-10 11:46:51', '2018-08-10 11:46:51', '6', '6');
/*!40000 ALTER TABLE `d_additonal_booking` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_booking
CREATE TABLE IF NOT EXISTS `d_booking` (
  `db_id` int(11) NOT NULL,
  `db_kode_transaksi` varchar(50) NOT NULL,
  `db_users` int(11) DEFAULT NULL,
  `db_telp` int(20) DEFAULT NULL,
  `db_intinerary_id` int(11) DEFAULT NULL,
  `db_status` enum('Waiting List','Holding Confirm','Hx By Agent','Hx By System') DEFAULT 'Waiting List',
  `db_name` varchar(50) DEFAULT NULL,
  `db_total_adult` int(11) DEFAULT NULL,
  `db_total_child` int(11) DEFAULT NULL,
  `db_total_infant` int(11) DEFAULT NULL,
  `db_remark` mediumtext,
  `db_total_additional` double DEFAULT NULL,
  `db_total_room` double DEFAULT NULL,
  `db_total` double DEFAULT NULL,
  `db_total_remain` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `db_handle_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`db_id`),
  UNIQUE KEY `db_kode_transaksi` (`db_kode_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_booking: ~6 rows (approximately)
/*!40000 ALTER TABLE `d_booking` DISABLE KEYS */;
INSERT INTO `d_booking` (`db_id`, `db_kode_transaksi`, `db_users`, `db_telp`, `db_intinerary_id`, `db_status`, `db_name`, `db_total_adult`, `db_total_child`, `db_total_infant`, `db_remark`, `db_total_additional`, `db_total_room`, `db_total`, `db_total_remain`, `created_at`, `updated_at`, `created_by`, `updated_by`, `db_handle_by`) VALUES
	(1, '180700001', 5, 81812323, 3, 'Waiting List', 'siti', 2, 0, 1, 'zzz', 1720000, 30000000, 31720000, 31720000, '2018-07-30 13:19:30', '2018-08-10 07:56:36', 5, 5, '4'),
	(2, '180700002', 5, 898982, 3, 'Waiting List', 'Tes', 2, 0, 0, 'ss', 1460000, 25000000, 26460000, 26460000, '2018-07-30 17:38:15', '2018-08-10 12:00:02', 5, 5, '6'),
	(3, '180800003', 5, NULL, 1, 'Waiting List', NULL, 1, 0, 1, 'sad', 1000000, 10000000, 11000000, 11000000, '2018-08-03 14:50:06', '2018-08-03 14:50:06', 5, 5, NULL),
	(4, '180800004', 5, NULL, 3, 'Waiting List', '', 1, 0, 1, 'xx', 2260000, 17500000, 19760000, 19760000, '2018-08-03 15:06:41', '2018-08-03 15:06:41', 5, 5, NULL),
	(5, '180800005', 4, 1, 10, 'Waiting List', 'ASEP HIDAYAT', 1, 0, 0, 'xxxxxxxxxxxx', 1000000, 10000000, 11000000, 11000000, '2018-08-09 10:42:27', '2018-08-09 10:42:27', 4, 4, '4'),
	(6, '180800006', 4, 81111111, 10, 'Waiting List', 'GEGE OLD', 1, 0, 0, 'xxx', 1000000, 10000000, 11000000, 11000000, '2018-08-10 10:03:06', '2018-08-10 10:03:06', 4, 4, NULL),
	(7, '180800007', 6, 122, 11, 'Waiting List', 'ANTO', 1, 0, 0, 'XXX', 100000, 5200000, 5300000, 5300000, '2018-08-10 11:46:51', '2018-08-10 11:55:31', 6, 6, '6');
/*!40000 ALTER TABLE `d_booking` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_history_bayar
CREATE TABLE IF NOT EXISTS `d_history_bayar` (
  `dh_id` int(11) NOT NULL,
  `dh_booking_id` int(11) DEFAULT NULL,
  `dh_total_payment` double DEFAULT NULL,
  `dh_payment_method` enum('dp','fp') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_history_bayar: ~5 rows (approximately)
/*!40000 ALTER TABLE `d_history_bayar` DISABLE KEYS */;
INSERT INTO `d_history_bayar` (`dh_id`, `dh_booking_id`, `dh_total_payment`, `dh_payment_method`, `created_at`, `updated_at`) VALUES
	(1, 2, 15000000, 'dp', '2018-07-30 17:39:18', '2018-07-30 17:39:18'),
	(2, 3, 6000000, 'dp', '2018-08-03 15:01:49', '2018-08-03 15:01:49'),
	(3, 5, 6000000, 'dp', '2018-08-09 14:12:14', '2018-08-09 14:12:14'),
	(4, 6, 9000000, 'dp', '2018-08-10 10:05:01', '2018-08-10 10:05:01'),
	(5, 6, 11000000, 'dp', '2018-08-10 10:06:21', '2018-08-10 10:06:21'),
	(6, 7, 3000000, 'dp', '2018-08-10 11:51:11', '2018-08-10 11:51:11');
/*!40000 ALTER TABLE `d_history_bayar` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_history_bayar_d
CREATE TABLE IF NOT EXISTS `d_history_bayar_d` (
  `dhd_id` int(11) NOT NULL AUTO_INCREMENT,
  `dhd_history_id` int(11) DEFAULT NULL,
  `dhd_bank` varchar(50) DEFAULT NULL,
  `dhd_nominal` double DEFAULT NULL,
  `dhd_nama_rekening` varchar(50) DEFAULT NULL,
  `dhd_image` varchar(100) DEFAULT NULL,
  `dhd_tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dhd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_history_bayar_d: ~6 rows (approximately)
/*!40000 ALTER TABLE `d_history_bayar_d` DISABLE KEYS */;
INSERT INTO `d_history_bayar_d` (`dhd_id`, `dhd_history_id`, `dhd_bank`, `dhd_nominal`, `dhd_nama_rekening`, `dhd_image`, `dhd_tanggal`, `created_at`, `updated_at`) VALUES
	(1, 1, 'tes', 15000000, 'tes', 'history_bayar/BAYAR_PERTAMA_180700002_1.jpg', '2018-07-31', '2018-07-30 17:39:18', '2018-07-30 17:39:18'),
	(2, 2, 'BCA', 3000000, 'BAMBANG', 'history_bayar/BAYAR_PERTAMA_180800003_2.jpg', '2018-08-03', '2018-08-03 15:01:49', '2018-08-03 15:01:49'),
	(3, 2, 'BNI', 3000000, 'HRD', 'history_bayar/BAYAR_PERTAMA_180800003_2.jpg', '2018-08-03', '2018-08-03 15:01:49', '2018-08-03 15:01:49'),
	(4, 3, '1111', 6000000, '6564', 'history_bayar/BAYAR_PERTAMA_180800005_3.jpg', '2018-08-09', '2018-08-09 14:12:15', '2018-08-09 14:12:15'),
	(5, 4, 'X', 9000000, 'X', 'history_bayar/BAYAR_PERTAMA_180800006_4.jpg', '2018-08-10', '2018-08-10 10:05:01', '2018-08-10 10:05:01'),
	(6, 5, 'X', 11000000, 'X', 'history_bayar/BAYAR_PERTAMA_180800006_5.jpg', '2018-08-10', '2018-08-10 10:06:21', '2018-08-10 10:06:21'),
	(7, 6, 'ANTO', 3000000, 'ANTO', 'history_bayar/BAYAR_PERTAMA_180800007_6.jpg', '2018-08-10', '2018-08-10 11:51:11', '2018-08-10 11:51:11');
/*!40000 ALTER TABLE `d_history_bayar_d` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_intinerary_temp_detail
CREATE TABLE IF NOT EXISTS `d_intinerary_temp_detail` (
  `itd_id` int(11) NOT NULL,
  PRIMARY KEY (`itd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_intinerary_temp_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_intinerary_temp_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_intinerary_temp_detail` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_party_name
CREATE TABLE IF NOT EXISTS `d_party_name` (
  `dp_booking_id` int(11) NOT NULL,
  `dp_detail` int(11) NOT NULL,
  `dp_bed` varchar(50) DEFAULT NULL,
  `dp_name` varchar(50) DEFAULT NULL,
  `dp_passport` varchar(50) DEFAULT NULL,
  `dp_exp_date` date NOT NULL,
  `dp_issuing` varchar(50) DEFAULT NULL,
  `dp_gender` enum('male','female') DEFAULT NULL,
  `dp_birth_date` date NOT NULL,
  `dp_birth_place` varchar(50) DEFAULT NULL,
  `dp_reference` varchar(300) DEFAULT NULL,
  `dp_image` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dp_booking_id`,`dp_detail`),
  CONSTRAINT `FK_d_party_name_d_booking` FOREIGN KEY (`dp_booking_id`) REFERENCES `d_booking` (`db_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_party_name: ~9 rows (approximately)
/*!40000 ALTER TABLE `d_party_name` DISABLE KEYS */;
INSERT INTO `d_party_name` (`dp_booking_id`, `dp_detail`, `dp_bed`, `dp_name`, `dp_passport`, `dp_exp_date`, `dp_issuing`, `dp_gender`, `dp_birth_date`, `dp_birth_place`, `dp_reference`, `dp_image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'Twin', 'sitai', 'SDF312E', '2018-07-19', 'xx', 'male', '2018-07-19', 'xxx', 'xx', 'b', '2018-07-30 13:19:30', '2018-07-30 13:19:30', '2', '2'),
	(1, 2, 'Twin', 'sutai', 'xxxx', '2018-07-19', 'xxx', 'female', '2018-07-19', 'asd', 'asd', 'o', '2018-07-30 13:19:30', '2018-07-30 13:19:30', '2', '2'),
	(1, 3, 'Twin', 'Bambang', '12d1dssd', '2018-07-19', 'xxx', 'male', '2018-07-19', 'xxx', 'xxx', 'o', '2018-07-30 13:19:30', '2018-07-30 13:19:30', '2', '2'),
	(2, 1, 'Double', 'ts', '23213', '2018-07-11', 'sad21', 'male', '2018-07-11', 'tsad', 'd23', 'b', '2018-07-30 17:38:15', '2018-07-30 17:38:15', '5', '5'),
	(2, 2, 'Double', 'sad1', 'sdawd', '2018-07-11', 'ad12', 'female', '2018-07-11', 'adqwad', 'asdsq', 'o', '2018-07-30 17:38:15', '2018-07-30 17:38:15', '5', '5'),
	(3, 1, 'Single', '232', '232', '2018-08-29', 'sd', 'male', '2018-07-31', '232', 'xzc', 'b', '2018-08-03 14:50:07', '2018-08-03 14:50:07', '5', '5'),
	(3, 2, 'Single', '23', '23', '2018-08-28', '232', 'male', '2018-08-22', '3232', '3232', 'o', '2018-08-03 14:50:07', '2018-08-03 14:50:07', '5', '5'),
	(4, 1, 'Single', 'XXX', '123w21s', '2018-08-23', 'SXCQS', 'male', '2018-08-22', '21DSSAD', 'ASASD', 'b', '2018-08-03 15:06:41', '2018-08-03 15:06:41', '5', '5'),
	(4, 2, 'Single', 'BABY', 'wqe1dd', '2018-08-29', 'VB', 'male', '2016-08-17', 'SDFSD', 'BABY', 'o', '2018-08-03 15:06:41', '2018-08-03 15:06:41', '5', '5'),
	(5, 1, 'Single', 'XX', '1', '2018-08-09', '1', 'male', '2018-08-23', '1', '1', 'b', '2018-08-09 10:42:27', '2018-08-09 10:42:27', '4', '4'),
	(6, 1, 'Single', '1', '1', '2018-08-28', '1', 'male', '2018-08-09', '1', '1', 'b', '2018-08-10 10:03:06', '2018-08-10 10:03:06', '4', '4'),
	(7, 1, 'Single', 'ANTO', '12121212', '2018-08-01', '-', 'male', '2018-08-01', 'SURABAYA', '-', 'b', '2018-08-10 11:46:51', '2018-08-10 11:46:51', '6', '6');
/*!40000 ALTER TABLE `d_party_name` ENABLE KEYS */;

-- Dumping structure for table lavensia.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.migrations: ~3 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, '2014_10_12_000000_create_users_table', 1),
	(17, '2014_10_12_100000_create_password_resets_table', 1),
	(18, '2018_07_12_172920_role', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_additional
CREATE TABLE IF NOT EXISTS `m_additional` (
  `ma_id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_name` varchar(50) DEFAULT NULL,
  `ma_desc` varchar(250) DEFAULT NULL,
  `ma_price` double DEFAULT NULL,
  `ma_created_at` timestamp NULL DEFAULT NULL,
  `ma_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ma_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional: ~1 rows (approximately)
/*!40000 ALTER TABLE `m_additional` DISABLE KEYS */;
INSERT INTO `m_additional` (`ma_id`, `ma_name`, `ma_desc`, `ma_price`, `ma_created_at`, `ma_updated_at`) VALUES
	(23, 'Assurance', 'Dipersembahkan oleh prudencial', 1000000, '2018-07-15 12:14:27', '2018-07-15 12:14:27');
/*!40000 ALTER TABLE `m_additional` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_additional_intinerary
CREATE TABLE IF NOT EXISTS `m_additional_intinerary` (
  `mai_id` int(11) NOT NULL AUTO_INCREMENT,
  `intinerary_mi_id` int(11) DEFAULT NULL,
  `additional_ma_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional_intinerary: ~6 rows (approximately)
/*!40000 ALTER TABLE `m_additional_intinerary` DISABLE KEYS */;
INSERT INTO `m_additional_intinerary` (`mai_id`, `intinerary_mi_id`, `additional_ma_id`) VALUES
	(6, 2, 1),
	(7, 2, 2),
	(8, 2, 3),
	(19, 1, 1),
	(20, 1, 3),
	(23, 3, 1),
	(24, 4, 4);
/*!40000 ALTER TABLE `m_additional_intinerary` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_category
CREATE TABLE IF NOT EXISTS `m_category` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(200) DEFAULT NULL,
  `mc_created_at` timestamp NULL DEFAULT NULL,
  `mc_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_category: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_category` DISABLE KEYS */;
INSERT INTO `m_category` (`mc_id`, `mc_name`, `mc_created_at`, `mc_updated_at`) VALUES
	(1, 'ASIA', '2018-07-16 16:57:37', '2018-07-16 16:57:39'),
	(2, 'EROPA', '2018-07-16 16:57:51', '2018-07-16 16:57:52'),
	(3, 'LOKAL', '2018-07-16 16:57:59', '2018-07-16 16:58:00');
/*!40000 ALTER TABLE `m_category` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_detail_intinerary
CREATE TABLE IF NOT EXISTS `m_detail_intinerary` (
  `md_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_intinerary_id` int(11) NOT NULL,
  `md_detail` int(11) NOT NULL,
  `md_nota` varchar(50) NOT NULL,
  `md_seat` int(11) NOT NULL,
  `md_seat_remain` int(11) DEFAULT NULL,
  `md_start` date DEFAULT NULL,
  `md_end` date DEFAULT NULL,
  `md_adult_price` double DEFAULT NULL,
  `md_child_price` double DEFAULT NULL,
  `md_infant_price` double DEFAULT NULL,
  `md_child_w_price` double DEFAULT NULL,
  `md_dp` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`md_id`,`md_intinerary_id`),
  UNIQUE KEY `md_nota` (`md_nota`),
  KEY `FK_m_detail_intinerary_m_intinerary` (`md_intinerary_id`),
  CONSTRAINT `FK_m_detail_intinerary_m_intinerary` FOREIGN KEY (`md_intinerary_id`) REFERENCES `m_intinerary` (`mi_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_detail_intinerary: ~5 rows (approximately)
/*!40000 ALTER TABLE `m_detail_intinerary` DISABLE KEYS */;
INSERT INTO `m_detail_intinerary` (`md_id`, `md_intinerary_id`, `md_detail`, `md_nota`, `md_seat`, `md_seat_remain`, `md_start`, `md_end`, `md_adult_price`, `md_child_price`, `md_infant_price`, `md_child_w_price`, `md_dp`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(3, 2, 1, 'TR0718/002/001', 10, 10, '2018-07-18', '2018-07-31', 12500000, 10000000, 5000000, 12500000, NULL, '2018-07-30 13:01:54', '2018-08-03 15:06:41', 'adi', 'adi'),
	(4, 2, 2, 'TR0718/002/002', 15, 15, '2018-07-27', '2018-07-29', 23232, 323232, 323232, 23232, NULL, '2018-07-30 13:01:54', '2018-07-30 13:04:43', 'adi', 'adi'),
	(7, 1, 1, 'TR0718/001/001', 21, 21, '2018-07-30', '2018-07-30', 10000000, 9000000, 0, 9000000, 121212, '2018-08-07 12:47:23', '2018-08-07 12:48:01', 'adi', 'adi'),
	(8, 1, 2, 'TR0718/001/002', 10, 10, '2018-07-30', '2018-07-30', 9000000, 8000000, 0, 8000000, 1212121, '2018-08-07 12:47:23', '2018-08-07 12:48:01', 'adi', 'adi'),
	(9, 1, 3, 'TR0718/001/003', 13, 13, '2018-08-31', '2018-08-08', 22222, 22222, 23333, 22222, 22222, '2018-08-07 12:48:01', '2018-08-07 12:48:01', 'adi', 'adi'),
	(10, 3, 1, 'LCV0818/003/001', 20, 20, '2018-08-09', '2018-08-09', 10000000, 8000000, 0, 8000000, 8000000, '2018-08-09 07:49:45', '2018-08-10 10:03:06', 'Asep Hidayat', 'Asep Hidayat'),
	(11, 4, 1, 'LCV0818/004/001', 12, 12, '2018-08-10', '2018-08-12', 5200000, 5000000, 0, 4000000, 3000000, '2018-08-10 11:40:38', '2018-08-10 11:46:51', 'DENY PRASETYO', 'DENY PRASETYO');
/*!40000 ALTER TABLE `m_detail_intinerary` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_intinerary
CREATE TABLE IF NOT EXISTS `m_intinerary` (
  `mi_id` int(11) NOT NULL,
  `mi_nota` varchar(50) NOT NULL,
  `mi_name` varchar(300) DEFAULT NULL,
  `mi_term` mediumtext,
  `category_id` int(11) DEFAULT NULL,
  `mi_image` varchar(50) DEFAULT NULL,
  `mi_pdf` varchar(50) NOT NULL,
  `mi_highlight` mediumtext,
  `mi_by` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mi_id`),
  UNIQUE KEY `mi_nota` (`mi_nota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_intinerary: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_intinerary` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_intinerary` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_schedule
CREATE TABLE IF NOT EXISTS `m_schedule` (
  `ms_intinerary_id` int(11) NOT NULL,
  `ms_detail` int(11) NOT NULL,
  `ms_caption` varchar(50) DEFAULT NULL,
  `ms_description` mediumtext,
  `ms_bld` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ms_intinerary_id`,`ms_detail`),
  CONSTRAINT `FK_m_schedule_m_intinerary` FOREIGN KEY (`ms_intinerary_id`) REFERENCES `m_intinerary` (`mi_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_schedule: ~31 rows (approximately)
/*!40000 ALTER TABLE `m_schedule` DISABLE KEYS */;
INSERT INTO `m_schedule` (`ms_intinerary_id`, `ms_detail`, `ms_caption`, `ms_description`, `ms_bld`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, '1XXX', 'xxxxxxxxx', 'b', '2018-08-07 12:48:01', '2018-08-07 12:48:01', 'adi', 'adi'),
	(1, 2, '2XXX', 'cccccccccc', 'b', '2018-08-07 12:48:01', '2018-08-07 12:48:01', 'adi', 'adi'),
	(1, 3, '3XXXX', 'vvvvvvvvvvvv', 'b', '2018-08-07 12:48:01', '2018-08-07 12:48:01', 'adi', 'adi'),
	(2, 1, 'KUMPUL', 'berkumpul di bandara juanda', 'b', '2018-07-30 13:04:42', '2018-07-30 13:04:42', 'adi', 'adi'),
	(2, 2, 'BERANGKAT', 'berangkat menggunakan airasia', 'b/l/d', '2018-07-30 13:04:43', '2018-07-30 13:04:43', 'adi', 'adi'),
	(2, 3, 'ISTIRAHAT DI HOTEL', 'istirahat untuk melanjutkan wisata esok hari', 'B/L/D', '2018-07-30 13:04:43', '2018-07-30 13:04:43', 'adi', 'adi'),
	(2, 4, 'KE PATTAYA', 'ke kawasan pattaya', 'B/L/D', '2018-07-30 13:04:43', '2018-07-30 13:04:43', 'adi', 'adi'),
	(2, 5, 'KE GOA', 'ke goa arit', 'B/L/D', '2018-07-30 13:04:43', '2018-07-30 13:04:43', 'adi', 'adi'),
	(2, 6, 'KE PANTAI', 'ke pantai', 'B/L/D', '2018-07-30 13:04:43', '2018-07-30 13:04:43', 'adi', 'adi'),
	(2, 7, 'PULANG', 'mari pulang', 'B/L/D', '2018-07-30 13:04:43', '2018-07-30 13:04:43', 'adi', 'adi'),
	(3, 1, 'SURABAYA – BRUNEI – BANGKOK', 'Berkumpul di Juanda International Airport untuk berangkat bersama menuju Bangkok (via Brunei). Sesampainya di Brunei, mengunjungi Royal Regalia Museum, Omar Ali Saifuddin Mosque, Jame Asr Bolkiah Mosque, dan The Mall Brunei. Setelah itu pengantaran kembali ke Brunei Airport untuk penerbangan menuju ke Bangkok. Setibanya di Bangkok menuju ke hotel untuk check in.', 'B on board', '2018-08-09 07:49:45', '2018-08-09 07:49:45', 'Asep Hidayat', 'Asep Hidayat'),
	(3, 2, 'BANGKOK', 'Hari ini acara bebas yang dapat anda gunakan untuk berdoa di 4 Face Buddha untuk merayakan ulang tahunnya, setelah itu kita dapat berbelanja di Platinum Mall dekat hotel', 'B fast hotel', '2018-08-09 07:49:45', '2018-08-09 07:49:45', 'Asep Hidayat', 'Asep Hidayat'),
	(3, 3, 'BANGKOK – PATTAYA', 'Setelah makan pagi, kita akan menuju Wat Arun untuk berbelanja barang barang khas Thailand. Tidak lupa untuk mengunjungi Golden Buddha dimana terdapat Patung Buddha terbesar di dunia dengan  berat 5,5 Ton. Perjalanan dilanjutkan menuju Pattaya. Setibanya di Pattaya kita akan mengunjungi Sanctuary of Truth dimana kita dapat berdoa disana. Dan singgah di Bee Farm, setelah itu makan malam dan check in hotel.', 'B / L / D', '2018-08-09 07:49:45', '2018-08-09 07:49:45', 'Asep Hidayat', 'Asep Hidayat'),
	(4, 1, 'SURABAYA – BANGKOK', 'Berkumpul di Juanda International Airport untuk berangkat bersama menuju Suvarnabhumi Airport Bangkok. Setibanya di Bangkok, anda diajak berwisata di Wat Arun dengan menggunakan ferry menyusuri sungai Chaopraya, kuil terkenal di Thailand dan didalamnya terdapat pasar terbuka dengan souvenir khas Thailand yang terkenal sangat murah. Lalu anda diajak berbelanja di Platinum Mall (Mangga Dua-nya Bangkok) dan berdoa di Four Faces Buddha ( bagi yang berminat ). Lalu berwisata kuliner khas Thailand di Asiatique Night Market. Setelah itu check-in hotel untuk beristirahat.', 'B & L on board', '2018-08-10 11:40:38', '2018-08-10 11:40:38', 'DENY PRASETYO', 'DENY PRASETYO'),
	(4, 2, 'BANGKOK – SURABAYA', 'Setelah makan pagi, diajak berkunjung dan berbelanja cokelat di Chocolate Factory hingga tiba saatnya untuk diantar menuju ke bandara dan kembali ke Surabaya. Sampai bertemu di lain kesempatan…', 'B & L ON BOARD', '2018-08-10 11:40:38', '2018-08-10 11:40:38', 'DENY PRASETYO', 'DENY PRASETYO'),
	(5, 1, 'SURABAYA – SINGAPORE – SHANGHA | NO MEAL', 'Berkumpul di Juanda Surabaya / Cengkareng Jakarta untuk penerbangan ke Beijing dengan transit terlebih dahulu di Singapore. Tiba di Beijing diantar ke hotel untuk istirahat.', NULL, '2018-07-18 06:10:48', '2018-07-18 06:10:48', 'adi', 'adi'),
	(5, 2, 'BEIJING | B / L / D', 'Tour mengunjungi Great Wall di pintu Joyungguan , Photo Stop di Bird Nest & Water Cube Building dan dilanjutkan makan malam Bebek Peking yang terkenal.', NULL, '2018-07-18 06:10:48', '2018-07-18 06:10:48', 'adi', 'adi'),
	(5, 3, 'BEIJING | B / L / D', 'Tour ke Tian An Men yang merupakan lapangan di pusat kota Beijing yang terkenal, kemudian ke Forbidden City yang merupakan pusat pemerintahan jaman kekaisaran, dilanjutkan ke WangFujing yang merupakan pusat pertokoan terkenal di Beijing.', NULL, '2018-07-18 06:10:48', '2018-07-18 06:10:48', 'adi', 'adi'),
	(5, 4, 'BEIJING – HUANGSHAN | B / L / D', 'Naik Bullet Train Ke Huangshan, tiba di Tunxi yang terletak di khaki Huangshan dan pegunungan dilanjutkan berjalan jalan di Tunxi Old Street yang merupakan pusat kota kuno di Tunxi.', NULL, '2018-07-18 06:10:48', '2018-07-18 06:10:48', 'adi', 'adi'),
	(5, 5, 'HUANGSHAN | B / L / D', 'Menikmati keindahan Gunung Huangshan yang merupakan tempat pembuatan film Croaching Tiger Hidden Dragon yang dibintangi oleh Cho Yun Fat & Michelle Yeoh.', NULL, '2018-07-18 06:10:48', '2018-07-18 06:10:48', 'adi', 'adi'),
	(5, 6, 'HUANGSHAN – SHANGHAI | B / L / D', 'Berkunjung ke Shanghai Fim Park yang merupakan replika Shanghai jaman kuno dan pusat pembuatan film.', NULL, '2018-07-18 06:10:48', '2018-07-18 06:10:48', 'adi', 'adi'),
	(5, 7, 'SHANGHAI – SINGAPORE | B / L / D', 'Tour ke The Bund-Pusat bisnis sejak jaman dulu, dilanjutkan ke Nanjing Road – Pusat Pertokoan terkemuka di Shanghai, dan Chenghuangmiao untuk melihat kota kuno Shanghai. Malam hari diantar ke Airport.', NULL, '2018-07-18 06:10:48', '2018-07-18 06:10:48', 'adi', 'adi'),
	(5, 8, 'SINGAPORE – SURABAYA', 'Transit di Singapore untuk penerbangan kembali ke Surabaya / Jakarta. Terima kasih atas kepercayaan yang diberikan kepada LAVENSIA.', NULL, '2018-07-18 06:10:48', '2018-07-18 06:10:48', 'adi', 'adi'),
	(6, 1, 'ASD232', '2asdasdas', NULL, '2018-07-18 07:46:21', '2018-07-18 07:46:21', 'adi', 'adi'),
	(6, 2, '232323', '232', NULL, '2018-07-18 07:46:21', '2018-07-18 07:46:21', 'adi', 'adi'),
	(7, 1, 'XXX', 'xxx', NULL, '2018-07-18 11:31:17', '2018-07-18 11:31:17', 'adi', 'adi'),
	(7, 2, 'XXX', 'xxx', NULL, '2018-07-18 11:31:18', '2018-07-18 11:31:18', 'adi', 'adi'),
	(7, 3, 'XXX', 'xxx', NULL, '2018-07-18 11:31:18', '2018-07-18 11:31:18', 'adi', 'adi'),
	(7, 4, 'XXX', 'xxx', NULL, '2018-07-18 11:31:18', '2018-07-18 11:31:18', 'adi', 'adi'),
	(8, 1, 'GATHERING', 'Berkumpul dulu diseberang kalimantan', NULL, '2018-07-23 06:41:16', '2018-07-23 06:41:16', 'adi', 'adi'),
	(8, 2, 'GOJEK', 'Gojek sampai singapore', NULL, '2018-07-23 06:41:16', '2018-07-23 06:41:16', 'adi', 'adi');
/*!40000 ALTER TABLE `m_schedule` ENABLE KEYS */;

-- Dumping structure for table lavensia.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table lavensia.role
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.role: ~4 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`role_id`, `role_name`, `created_at`, `update_at`) VALUES
	(1, 'MASTER ADMIN', '2018-07-12 17:55:03', '2018-07-12 17:55:04'),
	(2, 'SUPER ADMIN', '2018-07-12 17:55:03', '2018-07-12 17:55:04'),
	(3, 'ADMIN', '2018-07-12 17:54:50', '2018-07-12 17:54:51'),
	(4, 'AGENT', '2018-07-12 17:55:03', '2018-07-12 17:55:04');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `password`, `username`, `birthday`, `phone`, `email`, `address`, `role_id`, `remember_token`, `image`, `co_name`, `co_phone`, `co_address`, `co_email`, `mg_name`, `mg_phone`, `mg_email`, `created_at`, `updated_at`, `status`) VALUES
	(4, 'Asep Hidayat', '$2y$10$yPxkV6VDgkodh1FDsMDvv.LKugCI/Mb5j9UvI2JFxRkS7z87ID7MG', 'deny', NULL, '089999999999', 'ASEP@GMAIL.COM', 'Jl gatau dimana', 4, 'xR6Foq3fts6I2OT2VG4ITIfUgV6ahFUywfX2V0QTCeAWPcon6zkoPtBbfvgZ', '4.jpg', 'PT . GUARD SEEKER', '03141902211', 'Jl . Wonorejo indah timur 3a no 66', 'guardseeker@gmail.com', 'Deny Prasetyo', '0821231211231', 'denyprasetyo41@gmail.com', '2018-07-17 20:57:46', '2018-08-10 10:39:49', 'AKTIF'),
	(5, 'adi', '$2y$10$H9Zl8Xryj2dDqF70veRjUe7nGhMDCFy7pC7O4wSqNSqjybicHIH32', 'dewa17a', NULL, NULL, 'dewa17a@gmail.com', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-30 12:46:46', '2018-07-30 12:46:46', 'TIDAK AKTIF'),
	(6, 'DENY PRASETYO', '$2y$10$i.y1MOIh9NGMGpGp4g0ZD.tZGtu3/Rmj8JcMnuoG5ym.0aZxyxGTC', 'denypras', NULL, '6288888888888', 'denyprasetyo4121@gmail.com', 'Jl. antah berantah', 4, 'g8GabKFbdwgrC331vOOx2NfQ5MYLjIo2EfzdwyoOaGNo0WzX9D1lboKzAw7y', '6.jpg', 'PT . Alamraya', '62824311111111', 'Jl. Wonorejo indah timur', 'alamraya@gmail.com', 'Endang', '62811111111111', 'endang@gmail.com', '2018-08-10 11:18:33', '2018-08-10 11:21:24', 'AKTIF');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
