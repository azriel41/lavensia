-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

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

-- Dumping data for table lavensia.d_additonal_booking: ~14 rows (approximately)
/*!40000 ALTER TABLE `d_additonal_booking` DISABLE KEYS */;
REPLACE INTO `d_additonal_booking` (`da_booking_id`, `da_detail`, `da_name`, `da_price`, `da_status`, `da_additional_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'TES', 1000000, 'Waiting List', 1, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 2, 'TES1', 1000000, 'Waiting List', 1, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 3, 'TES2', 1000000, 'Waiting List', 1, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 4, 'D12S12SSA', 1000000, 'Waiting List', 1, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 5, 'DW1', 1000000, 'Waiting List', 1, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 6, 'D2QX1', 1000000, 'Waiting List', 1, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 7, 'WDX', 1000000, 'Waiting List', 1, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 8, 'CSDV', 200000, 'Waiting List', 2, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 9, 'FGB', 200000, 'Waiting List', 2, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 10, 'SDVCFDS', 200000, 'Waiting List', 2, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 11, 'TES', 260000, 'Waiting List', 3, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 12, 'TES1', 260000, 'Waiting List', 3, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 13, 'TES2', 260000, 'Waiting List', 3, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6'),
	(1, 14, 'D12S12SSA', 260000, 'Waiting List', 3, '2018-09-01 15:09:47', '2018-09-01 15:09:47', NULL, '6');
/*!40000 ALTER TABLE `d_additonal_booking` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_booking
CREATE TABLE IF NOT EXISTS `d_booking` (
  `db_id` int(11) NOT NULL,
  `db_kode_transaksi` varchar(50) NOT NULL,
  `db_users` int(11) DEFAULT NULL,
  `db_telp` int(20) DEFAULT NULL,
  `db_intinerary_id` int(11) DEFAULT NULL,
  `db_status` enum('Waiting List','Holding Confirm','Hx By Agent','Hx By System','Hold') DEFAULT 'Waiting List',
  `db_name` varchar(50) DEFAULT NULL,
  `db_pdf` varchar(50) DEFAULT NULL,
  `db_total_adult` int(11) DEFAULT NULL,
  `db_total_child` int(11) DEFAULT NULL,
  `db_total_infant` int(11) DEFAULT NULL,
  `db_remark` mediumtext,
  `db_total_additional` double DEFAULT NULL,
  `db_total_room` double DEFAULT NULL,
  `db_handle_by` int(11) DEFAULT NULL,
  `db_total` double DEFAULT NULL,
  `db_total_remain` double DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`db_id`),
  UNIQUE KEY `db_kode_transaksi` (`db_kode_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_booking: ~1 rows (approximately)
/*!40000 ALTER TABLE `d_booking` DISABLE KEYS */;
REPLACE INTO `d_booking` (`db_id`, `db_kode_transaksi`, `db_users`, `db_telp`, `db_intinerary_id`, `db_status`, `db_name`, `db_pdf`, `db_total_adult`, `db_total_child`, `db_total_infant`, `db_remark`, `db_total_additional`, `db_total_room`, `db_handle_by`, `db_total`, `db_total_remain`, `updated_by`, `created_at`, `updated_at`, `created_by`) VALUES
	(1, '180900001', 6, 2431223, 4, 'Holding Confirm', 'TES', 'booking/180900001_DETAIL_TOUR_1.jpg', 7, 1, 3, 'ASDSA', 8640000, 1455552, 6, 10095552, 10095552, 6, '2018-09-01 14:03:43', '2018-09-01 15:09:46', 6);
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

-- Dumping data for table lavensia.d_history_bayar: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_history_bayar` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_history_bayar_d: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_history_bayar_d` DISABLE KEYS */;
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
  `dp_room` int(11) DEFAULT NULL,
  `dp_reference` varchar(300) DEFAULT NULL,
  `dp_status_person` varchar(300) DEFAULT NULL,
  `dp_image` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dp_booking_id`,`dp_detail`),
  CONSTRAINT `FK_d_party_name_d_booking` FOREIGN KEY (`dp_booking_id`) REFERENCES `d_booking` (`db_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_party_name: ~11 rows (approximately)
/*!40000 ALTER TABLE `d_party_name` DISABLE KEYS */;
REPLACE INTO `d_party_name` (`dp_booking_id`, `dp_detail`, `dp_bed`, `dp_name`, `dp_passport`, `dp_exp_date`, `dp_issuing`, `dp_gender`, `dp_birth_date`, `dp_birth_place`, `dp_room`, `dp_reference`, `dp_status_person`, `dp_image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'doubletwin&cnb', 'TES', 'asd', '2018-09-26', 'ASD', 'male', '2018-09-26', 'ASD', 1, 'ASD', 'adult', 'booking/180900001_tes_1_1.jpg', '2018-09-01 14:03:43', '2018-09-01 15:09:46', '6', '6'),
	(1, 2, 'doubletwin&cnb', 'TES1', 'sad', '2018-09-01', 'DSADSA', 'male', '2018-09-01', 'ASDSA', 1, 'ASD', 'adult', 'booking/180900001_tes1_1_2.jpg', '2018-09-01 14:03:43', '2018-09-01 15:09:46', '6', '6'),
	(1, 3, 'doubletwin&cnb', 'TES2', 'asdsa', '2018-09-01', 'DSAD', 'male', '2018-09-01', 'SADAS', 1, 'SAD', 'child', 'booking/180900001_tes2_1_3.jpg', '2018-09-01 14:03:43', '2018-09-01 15:09:46', '6', '6'),
	(1, 4, 'doubletwin&cnb', 'D12S12SSA', 'dwsaDASDA', '2018-09-01', 'ASDAS', 'male', '2018-09-01', 'SADSA', 1, 'ASD', 'baby', 'booking/180900001_d12s12ssa_1_4.jpg', '2018-09-01 14:03:43', '2018-09-01 15:09:46', '6', '6'),
	(1, 5, 'double', 'DW1', 'XW1DWSDASCX', '2018-09-01', 'SAXSA', 'male', '2018-09-01', '1WDX1WD', 2, 'X', 'adult', 'booking/180900001_DW1_1_5.jpg', '2018-09-01 14:03:43', '2018-09-01 15:09:46', '6', '6'),
	(1, 6, 'double', 'D2QX1', 'XW1DWD', '2018-09-01', 'DXW1XW1', 'female', '2018-09-01', 'D1WX', 2, 'D1W', 'adult', 'booking/180900001_D2QX1_1_6.jpg', '2018-09-01 14:03:43', '2018-09-01 15:09:46', '6', '6'),
	(1, 7, 'double', 'WDX', 'S1WD', '2018-09-01', 'X1WD', 'male', '2018-09-01', 'SDA', 2, 'WF', 'baby', 'booking/180900001_WDX_1_7.jpg', '2018-09-01 14:03:43', '2018-09-01 15:09:46', '6', '6'),
	(1, 8, 'single', 'CSDV', 'ewqd', '2018-09-01', 'SVDSV', 'male', '2018-09-01', 'CDSV', 5, 'DSCDS', 'adult', 'booking/180900001_csdv_1_8.jpg', '2018-09-01 14:41:06', '2018-09-01 15:09:46', '6', '6'),
	(1, 9, 'single', 'FGB', 'gfbfg', '2018-09-01', 'VFAERG', 'female', '2018-09-01', 'DGDA', 7, 'FADG', 'adult', 'booking/180900001_fgb_1_9.jpg', '2018-09-01 15:09:46', '2018-09-01 15:09:46', '6', '6'),
	(1, 10, 'single', 'SDF', 'vfdgf', '2018-09-01', 'BFDGB', 'male', '2018-09-01', 'HBGFDBFDG', 8, 'FDGJN', 'adult', 'booking/180900001_sdf_1_10.jpg', '2018-09-01 15:09:46', '2018-09-01 15:09:46', '6', '6'),
	(1, 11, 'single', 'SDVCFDS', 'vgsdac', '2018-09-01', 'SDAF', 'male', '2018-09-01', 'FDS', 8, 'ASDVCSD', 'baby', 'booking/180900001_sdvcfds_1_11.jpg', '2018-09-01 15:09:47', '2018-09-01 15:09:47', '6', '6');
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
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_additional` DISABLE KEYS */;
REPLACE INTO `m_additional` (`ma_id`, `ma_name`, `ma_desc`, `ma_price`, `ma_created_at`, `ma_updated_at`) VALUES
	(1, 'Assurance', 'Dipersembahkan oleh prudencial', 1000000, '2018-07-15 19:14:27', '2018-07-15 19:14:27'),
	(2, 'Coming Soon', 'xxx', 200000, '2018-07-18 21:34:26', '2018-07-18 21:34:28'),
	(3, 'Scraty', 'xxx', 260000, '2018-07-18 21:34:45', '2018-07-18 21:34:47');
/*!40000 ALTER TABLE `m_additional` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_additional_intinerary
CREATE TABLE IF NOT EXISTS `m_additional_intinerary` (
  `mai_id` int(11) NOT NULL AUTO_INCREMENT,
  `intinerary_mi_id` int(11) DEFAULT NULL,
  `additional_ma_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional_intinerary: ~8 rows (approximately)
/*!40000 ALTER TABLE `m_additional_intinerary` DISABLE KEYS */;
REPLACE INTO `m_additional_intinerary` (`mai_id`, `intinerary_mi_id`, `additional_ma_id`) VALUES
	(19, 1, 1),
	(20, 1, 3),
	(57, 3, 1),
	(58, 3, 2),
	(59, 3, 3),
	(63, 2, 1),
	(64, 2, 2),
	(65, 2, 3);
/*!40000 ALTER TABLE `m_additional_intinerary` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_category
CREATE TABLE IF NOT EXISTS `m_category` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(200) DEFAULT NULL,
  `mc_created_at` timestamp NULL DEFAULT NULL,
  `mc_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_category: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_category` DISABLE KEYS */;
REPLACE INTO `m_category` (`mc_id`, `mc_name`, `mc_created_at`, `mc_updated_at`) VALUES
	(1, 'ASIA', '2018-07-16 23:57:37', '2018-07-16 23:57:39'),
	(2, 'EROPA', '2018-07-16 23:57:51', '2018-07-16 23:57:52'),
	(3, 'LOKAL', '2018-07-16 23:57:59', '2018-07-16 23:58:00');
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
  `md_final` varchar(100) DEFAULT NULL,
  `md_tata_tertib` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`md_id`,`md_intinerary_id`),
  UNIQUE KEY `md_nota` (`md_nota`),
  KEY `FK_m_detail_intinerary_m_intinerary` (`md_intinerary_id`),
  CONSTRAINT `FK_m_detail_intinerary_m_intinerary` FOREIGN KEY (`md_intinerary_id`) REFERENCES `m_intinerary` (`mi_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_detail_intinerary: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_detail_intinerary` DISABLE KEYS */;
REPLACE INTO `m_detail_intinerary` (`md_id`, `md_intinerary_id`, `md_detail`, `md_nota`, `md_seat`, `md_seat_remain`, `md_start`, `md_end`, `md_adult_price`, `md_child_price`, `md_infant_price`, `md_child_w_price`, `md_dp`, `md_final`, `md_tata_tertib`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(3, 2, 1, 'TR0718/002/001', 10, 9, '2018-07-18', '2018-07-31', 12500000, 10000000, 5000000, 12500000, 0, NULL, NULL, '2018-07-30 20:01:54', '2018-09-01 15:37:56', 'adi', 'strrr'),
	(4, 2, 2, 'TR0718/002/002', 15, 14, '2018-07-27', '2018-07-29', 23232, 323232, 323232, 23232, 0, 'detail_itin/FINAL_4.pdf', 'detail_itin/TATA_TERTIB_4.pdf', '2018-07-30 20:01:54', '2018-09-01 18:53:39', 'adi', 'strrr'),
	(10, 3, 1, 'TR180825/003/001', 10, 9, '2018-08-25', '2018-08-25', 5555555, 3232333, 2323233, 2332323, 15000000, NULL, NULL, '2018-08-25 01:09:24', '2018-08-25 01:09:24', 'adi', 'adi');
/*!40000 ALTER TABLE `m_detail_intinerary` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_flight_detail
CREATE TABLE IF NOT EXISTS `m_flight_detail` (
  `fd_intinerary_id` int(11) NOT NULL,
  `fd_detail` int(11) NOT NULL,
  `fd_nomor` varchar(100) DEFAULT NULL,
  `fd_tanggal` date DEFAULT NULL,
  `fd_route` varchar(100) DEFAULT NULL,
  `fd_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`fd_detail`,`fd_intinerary_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_flight_detail: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_flight_detail` DISABLE KEYS */;
REPLACE INTO `m_flight_detail` (`fd_intinerary_id`, `fd_detail`, `fd_nomor`, `fd_tanggal`, `fd_route`, `fd_time`) VALUES
	(2, 1, 'TES', '2018-08-25', 'TES', 'tes'),
	(3, 1, 'TES', '2018-08-23', 'TES', '13:13'),
	(2, 2, 'TES1', '2018-07-23', 'TES1', 'tes1');
/*!40000 ALTER TABLE `m_flight_detail` ENABLE KEYS */;

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

-- Dumping data for table lavensia.m_intinerary: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_intinerary` DISABLE KEYS */;
REPLACE INTO `m_intinerary` (`mi_id`, `mi_nota`, `mi_name`, `mi_term`, `category_id`, `mi_image`, `mi_pdf`, `mi_highlight`, `mi_by`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(2, 'TR0718/002', 'TAMASYA KE THAILAND', 'harap mematuhi peraturan', 1, 'itinerary/TR0718-002.jpg', '', 'PATTAYA, GOA, PANTAI', 'AIRASIA', '2018-07-30 20:01:54', '2018-09-01 15:37:56', 'adi', 'strrr'),
	(3, 'TR180825/003', 'TES', 'tes', 2, 'itinerary/PHOTO_TR180825-003.png', 'itinerary/PDF_TR180825-003.pdf', 'TES', 'TES', '2018-08-25 01:09:24', '2018-08-25 01:09:24', 'adi', 'adi');
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

-- Dumping data for table lavensia.m_schedule: ~26 rows (approximately)
/*!40000 ALTER TABLE `m_schedule` DISABLE KEYS */;
REPLACE INTO `m_schedule` (`ms_intinerary_id`, `ms_detail`, `ms_caption`, `ms_description`, `ms_bld`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(2, 1, 'KUMPUL', 'berkumpul di bandara juanda', 'b', '2018-09-01 15:37:56', '2018-09-01 15:37:56', 'strrr', 'strrr'),
	(2, 2, 'BERANGKAT', 'berangkat menggunakan airasia', 'b/l/d', '2018-09-01 15:37:56', '2018-09-01 15:37:56', 'strrr', 'strrr'),
	(2, 3, 'ISTIRAHAT DI HOTEL', 'istirahat untuk melanjutkan wisata esok hari', 'B/L/D', '2018-09-01 15:37:56', '2018-09-01 15:37:56', 'strrr', 'strrr'),
	(2, 4, 'KE PATTAYA', 'ke kawasan pattaya', 'B/L/D', '2018-09-01 15:37:56', '2018-09-01 15:37:56', 'strrr', 'strrr'),
	(2, 5, 'KE GOA', 'ke goa arit', 'B/L/D', '2018-09-01 15:37:56', '2018-09-01 15:37:56', 'strrr', 'strrr'),
	(2, 6, 'KE PANTAI', 'ke pantai', 'B/L/D', '2018-09-01 15:37:56', '2018-09-01 15:37:56', 'strrr', 'strrr'),
	(2, 7, 'PULANG', 'mari pulang', 'B/L/D', '2018-09-01 15:37:56', '2018-09-01 15:37:56', 'strrr', 'strrr'),
	(3, 1, 'TES', 'tes', 'tes', '2018-08-25 01:09:24', '2018-08-25 01:09:24', 'adi', 'adi'),
	(4, 1, '2323', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.', NULL, '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi'),
	(4, 2, '2323', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.', NULL, '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi'),
	(5, 1, 'SURABAYA – SINGAPORE – SHANGHA | NO MEAL', 'Berkumpul di Juanda Surabaya / Cengkareng Jakarta untuk penerbangan ke Beijing dengan transit terlebih dahulu di Singapore. Tiba di Beijing diantar ke hotel untuk istirahat.', NULL, '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 2, 'BEIJING | B / L / D', 'Tour mengunjungi Great Wall di pintu Joyungguan , Photo Stop di Bird Nest & Water Cube Building dan dilanjutkan makan malam Bebek Peking yang terkenal.', NULL, '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 3, 'BEIJING | B / L / D', 'Tour ke Tian An Men yang merupakan lapangan di pusat kota Beijing yang terkenal, kemudian ke Forbidden City yang merupakan pusat pemerintahan jaman kekaisaran, dilanjutkan ke WangFujing yang merupakan pusat pertokoan terkenal di Beijing.', NULL, '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 4, 'BEIJING – HUANGSHAN | B / L / D', 'Naik Bullet Train Ke Huangshan, tiba di Tunxi yang terletak di khaki Huangshan dan pegunungan dilanjutkan berjalan jalan di Tunxi Old Street yang merupakan pusat kota kuno di Tunxi.', NULL, '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 5, 'HUANGSHAN | B / L / D', 'Menikmati keindahan Gunung Huangshan yang merupakan tempat pembuatan film Croaching Tiger Hidden Dragon yang dibintangi oleh Cho Yun Fat & Michelle Yeoh.', NULL, '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 6, 'HUANGSHAN – SHANGHAI | B / L / D', 'Berkunjung ke Shanghai Fim Park yang merupakan replika Shanghai jaman kuno dan pusat pembuatan film.', NULL, '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 7, 'SHANGHAI – SINGAPORE | B / L / D', 'Tour ke The Bund-Pusat bisnis sejak jaman dulu, dilanjutkan ke Nanjing Road – Pusat Pertokoan terkemuka di Shanghai, dan Chenghuangmiao untuk melihat kota kuno Shanghai. Malam hari diantar ke Airport.', NULL, '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 8, 'SINGAPORE – SURABAYA', 'Transit di Singapore untuk penerbangan kembali ke Surabaya / Jakarta. Terima kasih atas kepercayaan yang diberikan kepada LAVENSIA.', NULL, '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(6, 1, 'ASD232', '2asdasdas', NULL, '2018-07-18 14:46:21', '2018-07-18 14:46:21', 'adi', 'adi'),
	(6, 2, '232323', '232', NULL, '2018-07-18 14:46:21', '2018-07-18 14:46:21', 'adi', 'adi'),
	(7, 1, 'XXX', 'xxx', NULL, '2018-07-18 18:31:17', '2018-07-18 18:31:17', 'adi', 'adi'),
	(7, 2, 'XXX', 'xxx', NULL, '2018-07-18 18:31:18', '2018-07-18 18:31:18', 'adi', 'adi'),
	(7, 3, 'XXX', 'xxx', NULL, '2018-07-18 18:31:18', '2018-07-18 18:31:18', 'adi', 'adi'),
	(7, 4, 'XXX', 'xxx', NULL, '2018-07-18 18:31:18', '2018-07-18 18:31:18', 'adi', 'adi'),
	(8, 1, 'GATHERING', 'Berkumpul dulu diseberang kalimantan', NULL, '2018-07-23 13:41:16', '2018-07-23 13:41:16', 'adi', 'adi'),
	(8, 2, 'GOJEK', 'Gojek sampai singapore', NULL, '2018-07-23 13:41:16', '2018-07-23 13:41:16', 'adi', 'adi');
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
REPLACE INTO `role` (`role_id`, `role_name`, `created_at`, `update_at`) VALUES
	(1, 'MASTER ADMIN', '2018-07-13 00:55:03', '2018-07-13 00:55:04'),
	(2, 'SUPER ADMIN', '2018-07-13 00:55:03', '2018-07-13 00:55:04'),
	(3, 'ADMIN', '2018-07-13 00:54:50', '2018-07-13 00:54:51'),
	(4, 'AGENT', '2018-07-13 00:55:03', '2018-07-13 00:55:04');
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

-- Dumping data for table lavensia.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `password`, `username`, `birthday`, `phone`, `email`, `address`, `role_id`, `remember_token`, `image`, `co_name`, `co_phone`, `co_address`, `co_email`, `mg_name`, `mg_phone`, `mg_email`, `created_at`, `updated_at`, `status`) VALUES
	(4, 'Asep Hidayat', '$2y$10$yPxkV6VDgkodh1FDsMDvv.LKugCI/Mb5j9UvI2JFxRkS7z87ID7MG', 'deny', NULL, '089999999999', 'ASEP@GMAIL.COM', 'Jl gatau dimana', 4, 'sejCeZDM7B0ftS3775qjbY4WJmHClHQcgj3wvFO5ZH8b6XbIeyOEaUEsTYGB', '4.jpg', 'PT . GUARD SEEKER', '03141902211', 'Jl . Wonorejo indah timur 3a no 66', 'guardseeker@gmail.com', 'Deny Prasetyo', '0821231211231', 'denyprasetyo41@gmail.com', '2018-07-18 03:57:46', '2018-07-18 03:57:46', 'TIDAK AKTIF'),
	(5, 'adi', '$2y$10$H9Zl8Xryj2dDqF70veRjUe7nGhMDCFy7pC7O4wSqNSqjybicHIH32', 'dewa17a', NULL, '23232', 'dewa17a@gmail.com', 'tes', 2, NULL, '5.jpg', 'TES', '818181881', 'xxx', 'dewww', 'tes', '232323', 'dewa', '2018-07-30 19:46:46', '2018-07-30 19:46:46', 'TIDAK AKTIF'),
	(6, 'strrr', '$2y$10$Pbx5qDFnsLhiM6i3MNADQeRa6b940ZN06wUsz88MpdDC3XLPAyJuW', 'developer', NULL, '232321', 'dewa17aaaaa@gmail.com', 'xzc12312', 4, NULL, '6.jpg', NULL, NULL, NULL, NULL, 'asdas', '12312', NULL, '2018-08-31 23:46:52', '2018-08-31 23:46:52', 'TIDAK AKTIF');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
