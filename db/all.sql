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

-- Dumping data for table lavensia.d_additonal_booking: ~8 rows (approximately)
/*!40000 ALTER TABLE `d_additonal_booking` DISABLE KEYS */;
REPLACE INTO `d_additonal_booking` (`da_booking_id`, `da_detail`, `da_name`, `da_price`, `da_status`, `da_additional_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'EWR', 51000, 'Waiting List', 6, '2018-09-16 11:27:27', '2018-09-16 11:27:27', NULL, '1'),
	(1, 2, 'EWR', 370000, 'Waiting List', 7, '2018-09-16 11:27:27', '2018-09-16 11:27:27', NULL, '1'),
	(1, 3, 'WD', 370000, 'Waiting List', 7, '2018-09-16 11:27:27', '2018-09-16 11:27:27', NULL, '1'),
	(1, 4, 'EWR', 370000, 'Waiting List', 8, '2018-09-16 11:27:27', '2018-09-16 11:27:27', NULL, '1'),
	(1, 5, 'WD', 370000, 'Waiting List', 8, '2018-09-16 11:27:27', '2018-09-16 11:27:27', NULL, '1'),
	(1, 6, 'DSFDFD', 370000, 'Waiting List', 8, '2018-09-16 11:27:27', '2018-09-16 11:27:27', NULL, '1'),
	(1, 7, 'FWEFCREFEW', 370000, 'Waiting List', 8, '2018-09-16 11:27:27', '2018-09-16 11:27:27', NULL, '1'),
	(1, 8, 'FWE', 370000, 'Waiting List', 8, '2018-09-16 11:27:27', '2018-09-16 11:27:27', NULL, '1');
/*!40000 ALTER TABLE `d_additonal_booking` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_booking
CREATE TABLE IF NOT EXISTS `d_booking` (
  `db_id` int(11) NOT NULL,
  `db_kode_transaksi` varchar(50) NOT NULL,
  `db_users` int(11) DEFAULT NULL,
  `db_telp` varchar(50) DEFAULT NULL,
  `db_intinerary_id` int(11) DEFAULT NULL,
  `db_status` enum('Waiting List','Holding Confirm','Hx By Agent','Hx By System','Hold','Hold By System') DEFAULT 'Waiting List',
  `db_name` varchar(50) DEFAULT NULL,
  `db_pdf` varchar(50) DEFAULT NULL,
  `db_total_adult` int(11) DEFAULT NULL,
  `db_total_child` int(11) DEFAULT NULL,
  `db_total_infant` int(11) DEFAULT NULL,
  `db_remark` mediumtext,
  `db_total_additional` double DEFAULT NULL,
  `db_total_room` double DEFAULT NULL,
  `db_tax` double DEFAULT NULL,
  `db_visa` double DEFAULT NULL,
  `db_agent_com` double DEFAULT NULL,
  `db_tips` double DEFAULT NULL,
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
REPLACE INTO `d_booking` (`db_id`, `db_kode_transaksi`, `db_users`, `db_telp`, `db_intinerary_id`, `db_status`, `db_name`, `db_pdf`, `db_total_adult`, `db_total_child`, `db_total_infant`, `db_remark`, `db_total_additional`, `db_total_room`, `db_tax`, `db_visa`, `db_agent_com`, `db_tips`, `db_handle_by`, `db_total`, `db_total_remain`, `updated_by`, `created_at`, `updated_at`, `created_by`) VALUES
	(1, '180900001', 1, '323', 25, 'Hold By System', 'ER312', NULL, 4, 1, 2, 'fewfwexcd', 2641000, 499180, NULL, NULL, 33333, NULL, 1, 3106847, 106847, 1, '2018-09-16 11:00:59', '2018-09-16 11:43:15', 1);
/*!40000 ALTER TABLE `d_booking` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_history_bayar
CREATE TABLE IF NOT EXISTS `d_history_bayar` (
  `dh_id` int(11) NOT NULL,
  `dh_booking_id` int(11) DEFAULT NULL,
  `dh_total_payment` double DEFAULT NULL,
  `dh_payment_method` enum('dp','fp') DEFAULT NULL,
  `dh_status_payment` enum('RELEASED','APPROVE') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_history_bayar: ~2 rows (approximately)
/*!40000 ALTER TABLE `d_history_bayar` DISABLE KEYS */;
REPLACE INTO `d_history_bayar` (`dh_id`, `dh_booking_id`, `dh_total_payment`, `dh_payment_method`, `dh_status_payment`, `created_at`, `updated_at`) VALUES
	(1, 1, 3000000, 'dp', 'APPROVE', '2018-09-16 11:35:40', '2018-09-16 11:43:15');
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
  PRIMARY KEY (`dhd_id`),
  KEY `FK_d_history_bayar_d_d_history_bayar` (`dhd_history_id`),
  CONSTRAINT `FK_d_history_bayar_d_d_history_bayar` FOREIGN KEY (`dhd_history_id`) REFERENCES `d_history_bayar` (`dh_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_history_bayar_d: ~1 rows (approximately)
/*!40000 ALTER TABLE `d_history_bayar_d` DISABLE KEYS */;
REPLACE INTO `d_history_bayar_d` (`dhd_id`, `dhd_history_id`, `dhd_bank`, `dhd_nominal`, `dhd_nama_rekening`, `dhd_image`, `dhd_tanggal`, `created_at`, `updated_at`) VALUES
	(2, 1, '2323', 3, '2323', 'history_bayar/BAYAR_PERTAMA_180900001_1.png', '2018-09-16', '2018-09-16 11:35:40', '2018-09-16 11:35:40');
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

-- Dumping data for table lavensia.d_party_name: ~7 rows (approximately)
/*!40000 ALTER TABLE `d_party_name` DISABLE KEYS */;
REPLACE INTO `d_party_name` (`dp_booking_id`, `dp_detail`, `dp_bed`, `dp_name`, `dp_passport`, `dp_exp_date`, `dp_issuing`, `dp_gender`, `dp_birth_date`, `dp_birth_place`, `dp_room`, `dp_reference`, `dp_status_person`, `dp_image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'single', 'EWR', 'EWREW', '2018-09-16', 'EWC', 'male', '2018-09-16', 'WEVWE', 1, 'WV', 'adult', 'booking/180900001_ewr_1_1.png', '2018-09-16 11:00:59', '2018-09-16 11:27:27', '1', '1'),
	(1, 2, 'single', 'WD', 'asda', '2018-09-16', 'DSAD', 'female', '2018-09-16', 'ADSA', 1, 'DSS', 'baby', 'booking/180900001_wd_1_2.png', '2018-09-16 11:12:38', '2018-09-16 11:27:27', '1', '1'),
	(1, 3, 'doubletwin&cwb', 'DSFDFD', 'fdvcdv', '2018-09-16', 'FDV', 'male', '2018-09-16', 'VFDV', 3, 'VFD', 'adult', 'booking/180900001_dsfdfd_1_3.png', '2018-09-16 11:14:39', '2018-09-16 11:27:27', '1', '1'),
	(1, 4, 'doubletwin&cwb', 'FWEFCREFEW', 'ewvcw', '2018-09-16', 'FDSV', 'male', '2018-09-16', 'BFDVB', 3, 'EVERR', 'adult', 'booking/180900001_fwefcrefew_1_4.png', '2018-09-16 11:14:39', '2018-09-16 11:27:27', '1', '1'),
	(1, 5, 'doubletwin&cwb', 'FWE', 'vfgea', '2018-09-16', 'SDFDSF', 'male', '2018-09-16', 'FDSFD', 3, 'DSFASD', 'child', 'booking/180900001_fwe_1_5.png', '2018-09-16 11:14:39', '2018-09-16 11:27:27', '1', '1'),
	(1, 6, 'single', 'DF', 'sdfsd', '2018-09-16', 'VSDVC', 'male', '2018-09-16', 'DS', 5, 'DVDS', 'adult', 'booking/180900001_df_1_6.png', '2018-09-16 11:19:04', '2018-09-16 11:27:27', '1', '1'),
	(1, 7, 'single', 'SFDSD', 'vsd', '2018-09-16', 'DSF', 'female', '2018-09-16', 'SDFSD', 5, 'DVDSV', 'baby', 'booking/180900001_sfdsd_1_7.png', '2018-09-16 11:19:04', '2018-09-16 11:27:27', '1', '1');
/*!40000 ALTER TABLE `d_party_name` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_tour_leader
CREATE TABLE IF NOT EXISTS `d_tour_leader` (
  `tl_id` int(11) NOT NULL,
  `tl_name` varchar(50) DEFAULT NULL,
  `tl_alamat` varchar(50) DEFAULT NULL,
  `tl_phone` varchar(50) DEFAULT NULL,
  `tl_passport` varchar(50) DEFAULT NULL,
  `tl_exp_date` date NOT NULL,
  `tl_issuing` varchar(50) DEFAULT NULL,
  `tl_gender` enum('male','female') DEFAULT NULL,
  `tl_birth_date` date NOT NULL,
  `tl_birth_place` varchar(50) DEFAULT NULL,
  `tl_image` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table lavensia.d_tour_leader: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_tour_leader` DISABLE KEYS */;
REPLACE INTO `d_tour_leader` (`tl_id`, `tl_name`, `tl_alamat`, `tl_phone`, `tl_passport`, `tl_exp_date`, `tl_issuing`, `tl_gender`, `tl_birth_date`, `tl_birth_place`, `tl_image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 't4', '3e3r44444444', '3e454', '3e3r44444444', '2018-09-15', 'fede5454', 'female', '2018-09-15', 'fed5454545', 'tour_leader/PHOTO_1.jpg', '2018-09-15 12:23:07', '2018-09-15 14:11:38', 'few', 'few');
/*!40000 ALTER TABLE `d_tour_leader` ENABLE KEYS */;

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
  `ma_desc` varchar(1000) DEFAULT NULL,
  `ma_price` double DEFAULT NULL,
  `ma_created_at` timestamp NULL DEFAULT NULL,
  `ma_updated_at` timestamp NULL DEFAULT NULL,
  `ma_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ma_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_additional` DISABLE KEYS */;
REPLACE INTO `m_additional` (`ma_id`, `ma_name`, `ma_desc`, `ma_price`, `ma_created_at`, `ma_updated_at`, `ma_image`) VALUES
	(6, 'FPG Insurance', 'XXX', 51000, '2018-09-15 16:28:21', '2018-09-15 16:28:21', '1.jpg'),
	(7, 'Alcazar Show Pattaya', 'xx', 370000, '2018-09-15 16:28:57', '2018-09-15 16:28:57', '7.jpg'),
	(8, 'Madame Tussaud Bangkok', 'xx', 370000, '2018-09-15 16:29:30', '2018-09-15 16:29:30', '8.jpg');
/*!40000 ALTER TABLE `m_additional` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_additional_intinerary
CREATE TABLE IF NOT EXISTS `m_additional_intinerary` (
  `mai_id` int(11) NOT NULL AUTO_INCREMENT,
  `intinerary_mi_id` int(11) DEFAULT NULL,
  `additional_ma_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional_intinerary: ~11 rows (approximately)
/*!40000 ALTER TABLE `m_additional_intinerary` DISABLE KEYS */;
REPLACE INTO `m_additional_intinerary` (`mai_id`, `intinerary_mi_id`, `additional_ma_id`) VALUES
	(76, 1, 6),
	(77, 1, 7),
	(78, 2, 6),
	(79, 2, 7),
	(80, 2, 8),
	(84, 3, 6),
	(85, 3, 7),
	(86, 3, 8),
	(87, 4, 6),
	(88, 4, 7),
	(89, 4, 8);
/*!40000 ALTER TABLE `m_additional_intinerary` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_category
CREATE TABLE IF NOT EXISTS `m_category` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(200) DEFAULT NULL,
  `mc_created_at` timestamp NULL DEFAULT NULL,
  `mc_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_category: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_category` DISABLE KEYS */;
REPLACE INTO `m_category` (`mc_id`, `mc_name`, `mc_created_at`, `mc_updated_at`) VALUES
	(6, 'Thailand', '2018-09-15 16:24:52', '2018-09-15 16:24:52'),
	(7, 'United Arab Emirates', '2018-09-15 16:25:19', '2018-09-15 16:25:19'),
	(8, 'Taiwan', '2018-09-16 12:05:56', '2018-09-16 12:05:56');
/*!40000 ALTER TABLE `m_category` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_destination
CREATE TABLE IF NOT EXISTS `m_destination` (
  `d_id` int(11) NOT NULL,
  `d_detail` int(11) NOT NULL,
  `d_category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`d_id`,`d_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_destination: ~6 rows (approximately)
/*!40000 ALTER TABLE `m_destination` DISABLE KEYS */;
REPLACE INTO `m_destination` (`d_id`, `d_detail`, `d_category_id`) VALUES
	(2, 1, 6),
	(2, 2, 7),
	(3, 1, 6),
	(3, 2, 7),
	(4, 1, 6),
	(4, 2, 7);
/*!40000 ALTER TABLE `m_destination` ENABLE KEYS */;

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
  `md_tour_leader` int(11) DEFAULT NULL,
  `md_agent_com` double DEFAULT NULL,
  `md_tip` double DEFAULT NULL,
  `md_tips` double DEFAULT NULL,
  `md_visa` double DEFAULT NULL,
  `md_tax` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`md_id`,`md_intinerary_id`),
  UNIQUE KEY `md_nota` (`md_nota`),
  KEY `FK_m_detail_intinerary_m_intinerary` (`md_intinerary_id`),
  CONSTRAINT `FK_m_detail_intinerary_m_intinerary` FOREIGN KEY (`md_intinerary_id`) REFERENCES `m_intinerary` (`mi_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_detail_intinerary: ~4 rows (approximately)
/*!40000 ALTER TABLE `m_detail_intinerary` DISABLE KEYS */;
REPLACE INTO `m_detail_intinerary` (`md_id`, `md_intinerary_id`, `md_detail`, `md_nota`, `md_seat`, `md_seat_remain`, `md_start`, `md_end`, `md_adult_price`, `md_child_price`, `md_infant_price`, `md_child_w_price`, `md_dp`, `md_final`, `md_tata_tertib`, `md_tour_leader`, `md_agent_com`, `md_tip`, `md_tips`, `md_visa`, `md_tax`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(25, 2, 1, 'TR180916/002/001', 21, 15, '2018-09-16', '2018-09-16', 32323, 232, 23333, 323222, 2323333, 'detail_itin/FINAL_25.jpg', 'detail_itin/TATA_TERTIB_25.png', 1, 33333, 33333, NULL, NULL, NULL, '2018-09-16 02:39:23', '2018-09-16 11:27:27', 'admin1', 'admin1'),
	(26, 3, 1, 'TR180916/003/001', 21, 20, '2018-09-16', '2018-09-16', 4324, 0, 2354235, 4234, 32432, NULL, NULL, NULL, 4324, NULL, 324, 23, NULL, '2018-09-16 02:42:03', '2018-09-16 02:42:03', 'admin1', 'admin1'),
	(27, 3, 2, 'TR180916/003/002', 332323, 332322, '2018-09-16', '2018-09-16', 3333333, 323, 3123232, 32, 123123, NULL, NULL, NULL, 22222, NULL, 123123, 321, NULL, '2018-09-16 02:42:03', '2018-09-16 02:42:03', 'admin1', 'admin1'),
	(28, 4, 1, 'TR180916/004/001', 21, 20, '2018-09-16', '2018-09-18', 10000000, 3400000, 2500000, 10000000, 4000000, NULL, NULL, NULL, 200000, NULL, 500000, 1500000, NULL, '2018-09-16 10:44:04', '2018-09-16 10:44:04', 'admin1', 'admin1');
/*!40000 ALTER TABLE `m_detail_intinerary` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_flight_detail
CREATE TABLE IF NOT EXISTS `m_flight_detail` (
  `fd_intinerary_id` int(11) NOT NULL,
  `fd_detail` int(11) NOT NULL,
  `fd_nomor` varchar(100) DEFAULT NULL,
  `fd_tanggal` date DEFAULT NULL,
  `fd_route` varchar(100) DEFAULT NULL,
  `fd_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`fd_detail`,`fd_intinerary_id`),
  KEY `FK_m_flight_detail_m_intinerary` (`fd_intinerary_id`),
  CONSTRAINT `FK_m_flight_detail_m_intinerary` FOREIGN KEY (`fd_intinerary_id`) REFERENCES `m_intinerary` (`mi_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_flight_detail: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_flight_detail` DISABLE KEYS */;
REPLACE INTO `m_flight_detail` (`fd_intinerary_id`, `fd_detail`, `fd_nomor`, `fd_tanggal`, `fd_route`, `fd_time`) VALUES
	(2, 1, 'EREW', '2018-09-16', 'EWRWE', 'rwe'),
	(3, 1, '213', '2018-09-16', '12312', '312'),
	(4, 1, 'TES', '2018-09-16', 'TES', 'tes');
/*!40000 ALTER TABLE `m_flight_detail` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_hak_akses
CREATE TABLE IF NOT EXISTS `m_hak_akses` (
  `mh_id` int(11) NOT NULL AUTO_INCREMENT,
  `mh_level` varchar(50) DEFAULT NULL,
  `mh_menu` varchar(50) DEFAULT NULL,
  `mh_aksi` enum('true','false') DEFAULT NULL,
  `mh_aktif` enum('true','false') DEFAULT NULL,
  `mh_created_at` timestamp NULL DEFAULT NULL,
  `mh_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_hak_akses: ~14 rows (approximately)
/*!40000 ALTER TABLE `m_hak_akses` DISABLE KEYS */;
REPLACE INTO `m_hak_akses` (`mh_id`, `mh_level`, `mh_menu`, `mh_aksi`, `mh_aktif`, `mh_created_at`, `mh_updated_at`) VALUES
	(1, '1', 'master agent', 'true', 'true', '2018-09-09 19:47:48', '2018-09-09 19:47:49'),
	(2, '1', 'master category', 'true', 'true', '2018-09-09 20:08:15', '2018-09-09 20:08:18'),
	(3, '1', 'master additional', 'true', 'true', '2018-09-09 20:08:44', '2018-09-09 20:08:45'),
	(4, '1', 'master intinerary', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(5, '1', 'master leader', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(6, '1', 'approve itinerary', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(7, '1', 'booking list', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(8, '1', 'booking detail', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(9, '1', 'approve master agent', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(10, '3', 'master category', 'true', 'true', '2018-09-09 20:08:15', '2018-09-09 20:08:18'),
	(11, '3', 'master additional', 'true', 'true', '2018-09-09 20:08:44', '2018-09-09 20:08:45'),
	(12, '3', 'master intinerary', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(13, '1', 'hapus itinerary', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(14, '1', 'edit itinerary', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04');
/*!40000 ALTER TABLE `m_hak_akses` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_intinerary
CREATE TABLE IF NOT EXISTS `m_intinerary` (
  `mi_id` int(11) NOT NULL,
  `mi_nota` varchar(50) NOT NULL,
  `mi_name` varchar(300) DEFAULT NULL,
  `mi_term` mediumtext,
  `mi_status` varchar(50) DEFAULT 'NOT ACTIVE',
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

-- Dumping data for table lavensia.m_intinerary: ~3 rows (approximately)
/*!40000 ALTER TABLE `m_intinerary` DISABLE KEYS */;
REPLACE INTO `m_intinerary` (`mi_id`, `mi_nota`, `mi_name`, `mi_term`, `mi_status`, `category_id`, `mi_image`, `mi_pdf`, `mi_highlight`, `mi_by`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(2, 'TR180916/002', 'RERE', 'erer', 'ACTIVE', NULL, 'itinerary/PHOTO_TR180916-002.jpg', 'itinerary/PDF_TR180916-002.png', 'RER', 'ERERE', '2018-09-16 02:39:23', '2018-09-16 10:12:18', 'admin1', 'admin1'),
	(3, 'TR180916/003', '3RE21', '321', 'NOT ACTIVE', NULL, 'itinerary/PHOTO_TR180916-003.jpg', 'itinerary/PDF_TR180916-003.jpg', '3E21', '312312', '2018-09-16 02:42:03', '2018-09-16 02:42:03', 'admin1', 'admin1'),
	(4, 'TR180916/004', 'PATTAYA', 'asdasdasdasdas', 'ACTIVE', NULL, 'itinerary/PHOTO_TR180916-004.JPG', 'itinerary/PDF_TR180916-004.png', 'PATTAYA', 'AIRASIA', '2018-09-16 10:44:04', '2018-09-16 10:49:32', 'admin1', 'admin1');
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

-- Dumping data for table lavensia.m_schedule: ~4 rows (approximately)
/*!40000 ALTER TABLE `m_schedule` DISABLE KEYS */;
REPLACE INTO `m_schedule` (`ms_intinerary_id`, `ms_detail`, `ms_caption`, `ms_description`, `ms_bld`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(2, 1, 'ER', 'ewr', 'EWREW', '2018-09-16 02:39:23', '2018-09-16 02:39:23', 'admin1', 'admin1'),
	(2, 2, 'WREW', 'rewre', 'FEWF', '2018-09-16 02:39:23', '2018-09-16 02:39:23', 'admin1', 'admin1'),
	(3, 1, '312', '12312', '3213', '2018-09-16 02:42:03', '2018-09-16 02:42:03', 'admin1', 'admin1'),
	(4, 1, 'TES', 'tes', 'TES', '2018-09-16 10:44:04', '2018-09-16 10:44:04', 'admin1', 'admin1');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `password`, `username`, `birthday`, `phone`, `email`, `address`, `role_id`, `remember_token`, `image`, `co_name`, `co_phone`, `co_address`, `co_email`, `mg_name`, `mg_phone`, `mg_email`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'master', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'master', NULL, '9897878', 'oketrip1@gmail.com', 'admin1', 1, 'bAJYZdrLux16fuXZYgNrnJGDEVP08JrI5RPtbVEZ5ERGMRPZEyvFZSNLSpeO', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF'),
	(2, 'supervisor', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'supervisor', NULL, '9897878', 'oketrip2@gmail.com', 'admin1', 2, 'yb0VdsUjqvdvsPp8WBdek1ihkI5BAZWxOTuGSB8wcN1BD4Bn2MCE9SL49NMg', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF'),
	(3, 'admin', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'admin', NULL, '9897878', 'oketrip3@gmail.com', 'admin1', 3, 'NCbl6UXZ6oAKHwRao1rOsmwdMJS3yKn6qNamt6JzSjsLL1CwokhiFIQiN9yu', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF'),
	(4, 'master agen', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'master_agen', NULL, '9897878', 'agen_master@gmail.com', 'admin1', 4, 'bEnkEaJgFPZBEMwoQo79v9BwneJXZDwPcPPceAl0ZYkgYMlAanwpawcZ6IED', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF'),
	(5, 'agen', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'agen', NULL, '9897878', 'agen@gmail.com', 'admin1', 4, 'yb0VdsUjqvdvsPp8WBdek1ihkI5BAZWxOTuGSB8wcN1BD4Bn2MCE9SL49NMg', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
