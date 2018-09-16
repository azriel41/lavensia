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

-- Dumping structure for table oketripc_lavensia.d_additonal_booking
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

-- Dumping data for table oketripc_lavensia.d_additonal_booking: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_additonal_booking` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_additonal_booking` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.d_booking
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

-- Dumping data for table oketripc_lavensia.d_booking: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_booking` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_booking` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.d_history_bayar
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

-- Dumping data for table oketripc_lavensia.d_history_bayar: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_history_bayar` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_history_bayar` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.d_history_bayar_d
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table oketripc_lavensia.d_history_bayar_d: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_history_bayar_d` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_history_bayar_d` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.d_intinerary_temp_detail
CREATE TABLE IF NOT EXISTS `d_intinerary_temp_detail` (
  `itd_id` int(11) NOT NULL,
  PRIMARY KEY (`itd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table oketripc_lavensia.d_intinerary_temp_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_intinerary_temp_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_intinerary_temp_detail` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.d_party_name
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

-- Dumping data for table oketripc_lavensia.d_party_name: ~6 rows (approximately)
/*!40000 ALTER TABLE `d_party_name` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_party_name` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.d_tour_leader
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

-- Dumping data for table oketripc_lavensia.d_tour_leader: ~0 rows (approximately)
/*!40000 ALTER TABLE `d_tour_leader` DISABLE KEYS */;
REPLACE INTO `d_tour_leader` (`tl_id`, `tl_name`, `tl_alamat`, `tl_phone`, `tl_passport`, `tl_exp_date`, `tl_issuing`, `tl_gender`, `tl_birth_date`, `tl_birth_place`, `tl_image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 't4', '3e3r44444444', '3e454', '3e3r44444444', '2018-09-15', 'fede5454', 'female', '2018-09-15', 'fed5454545', 'tour_leader/PHOTO_1.jpg', '2018-09-15 12:23:07', '2018-09-15 14:11:38', 'few', 'few');
/*!40000 ALTER TABLE `d_tour_leader` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table oketripc_lavensia.migrations: ~3 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, '2014_10_12_000000_create_users_table', 1),
	(17, '2014_10_12_100000_create_password_resets_table', 1),
	(18, '2018_07_12_172920_role', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.m_additional
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

-- Dumping data for table oketripc_lavensia.m_additional: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_additional` DISABLE KEYS */;
REPLACE INTO `m_additional` (`ma_id`, `ma_name`, `ma_desc`, `ma_price`, `ma_created_at`, `ma_updated_at`, `ma_image`) VALUES
	(6, 'FPG Insurance', 'XXX', 51000, '2018-09-15 16:28:21', '2018-09-15 16:28:21', '1.jpg'),
	(7, 'Alcazar Show Pattaya', 'xx', 370000, '2018-09-15 16:28:57', '2018-09-15 16:28:57', '7.jpg'),
	(8, 'Madame Tussaud Bangkok', 'xx', 370000, '2018-09-15 16:29:30', '2018-09-15 16:29:30', '8.jpg');
/*!40000 ALTER TABLE `m_additional` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.m_additional_intinerary
CREATE TABLE IF NOT EXISTS `m_additional_intinerary` (
  `mai_id` int(11) NOT NULL AUTO_INCREMENT,
  `intinerary_mi_id` int(11) DEFAULT NULL,
  `additional_ma_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

-- Dumping data for table oketripc_lavensia.m_additional_intinerary: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_additional_intinerary` DISABLE KEYS */;
REPLACE INTO `m_additional_intinerary` (`mai_id`, `intinerary_mi_id`, `additional_ma_id`) VALUES
	(76, 1, 6),
	(77, 1, 7);
/*!40000 ALTER TABLE `m_additional_intinerary` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.m_category
CREATE TABLE IF NOT EXISTS `m_category` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(200) DEFAULT NULL,
  `mc_created_at` timestamp NULL DEFAULT NULL,
  `mc_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table oketripc_lavensia.m_category: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_category` DISABLE KEYS */;
REPLACE INTO `m_category` (`mc_id`, `mc_name`, `mc_created_at`, `mc_updated_at`) VALUES
	(6, 'Thailand', '2018-09-15 16:24:52', '2018-09-15 16:24:52'),
	(7, 'United Arab Emirates', '2018-09-15 16:25:19', '2018-09-15 16:25:19');
/*!40000 ALTER TABLE `m_category` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.m_detail_intinerary
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table oketripc_lavensia.m_detail_intinerary: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_detail_intinerary` DISABLE KEYS */;
REPLACE INTO `m_detail_intinerary` (`md_id`, `md_intinerary_id`, `md_detail`, `md_nota`, `md_seat`, `md_seat_remain`, `md_start`, `md_end`, `md_adult_price`, `md_child_price`, `md_infant_price`, `md_child_w_price`, `md_dp`, `md_final`, `md_tata_tertib`, `md_tour_leader`, `md_agent_com`, `md_tip`, `md_tips`, `md_visa`, `md_tax`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(23, 1, 1, 'TR180915/001/001', 21, 20, '2018-09-21', '2018-09-24', 4950000, 4550000, 2000000, 4950000, 3000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-15 16:42:28', '2018-09-15 16:42:28', 'admin1', 'admin1'),
	(24, 1, 2, 'TR180915/001/002', 21, 20, '2018-09-28', '2018-10-01', 4950000, 4550000, 2000000, 4950000, 3000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-15 16:42:28', '2018-09-15 16:42:28', 'admin1', 'admin1');
/*!40000 ALTER TABLE `m_detail_intinerary` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.m_flight_detail
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

-- Dumping data for table oketripc_lavensia.m_flight_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_flight_detail` DISABLE KEYS */;
REPLACE INTO `m_flight_detail` (`fd_intinerary_id`, `fd_detail`, `fd_nomor`, `fd_tanggal`, `fd_route`, `fd_time`) VALUES
	(1, 1, 'BI 795', '2018-09-29', 'SUB-BKK', '06.10-09.25');
/*!40000 ALTER TABLE `m_flight_detail` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.m_hak_akses
CREATE TABLE IF NOT EXISTS `m_hak_akses` (
  `mh_id` int(11) NOT NULL AUTO_INCREMENT,
  `mh_level` varchar(50) DEFAULT NULL,
  `mh_menu` varchar(50) DEFAULT NULL,
  `mh_aksi` enum('true','false') DEFAULT NULL,
  `mh_aktif` enum('true','false') DEFAULT NULL,
  `mh_created_at` timestamp NULL DEFAULT NULL,
  `mh_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table oketripc_lavensia.m_hak_akses: ~8 rows (approximately)
/*!40000 ALTER TABLE `m_hak_akses` DISABLE KEYS */;
REPLACE INTO `m_hak_akses` (`mh_id`, `mh_level`, `mh_menu`, `mh_aksi`, `mh_aktif`, `mh_created_at`, `mh_updated_at`) VALUES
	(1, '1', 'master agent', 'true', 'true', '2018-09-09 19:47:48', '2018-09-09 19:47:49'),
	(2, '1', 'master category', 'true', 'true', '2018-09-09 20:08:15', '2018-09-09 20:08:18'),
	(3, '1', 'master additional', 'true', 'true', '2018-09-09 20:08:44', '2018-09-09 20:08:45'),
	(4, '1', 'master intinerary', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(5, '1', 'master leader', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(6, '1', 'approve itinerary', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(7, '1', 'booking list', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04'),
	(8, '1', 'booking detail', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04');
/*!40000 ALTER TABLE `m_hak_akses` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.m_intinerary
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

-- Dumping data for table oketripc_lavensia.m_intinerary: ~1 rows (approximately)
/*!40000 ALTER TABLE `m_intinerary` DISABLE KEYS */;
REPLACE INTO `m_intinerary` (`mi_id`, `mi_nota`, `mi_name`, `mi_term`, `mi_status`, `category_id`, `mi_image`, `mi_pdf`, `mi_highlight`, `mi_by`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 'TR180915/001', '4D3N BANGKOK-PATTAYA', 'xx', 'ACTIVE', 6, 'itinerary/PHOTO_TR180915-001.jpg', 'itinerary/PDF_TR180915-001.pdf', 'WAT ARUN ; SILVER LAKE GRAPE FARM', 'ROYAL BRUNEI', '2018-09-15 16:42:28', '2018-09-15 16:42:43', 'admin1', 'admin1');
/*!40000 ALTER TABLE `m_intinerary` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.m_schedule
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

-- Dumping data for table oketripc_lavensia.m_schedule: ~4 rows (approximately)
/*!40000 ALTER TABLE `m_schedule` DISABLE KEYS */;
REPLACE INTO `m_schedule` (`ms_intinerary_id`, `ms_detail`, `ms_caption`, `ms_description`, `ms_bld`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'SURABAYA - BANGKOK', 'Berkumpul di Juanda International Airport untuk berangkat bersama menuju Suvarnabhumi Airport Bangkok. Setibanya di Bangkok, anda diajak berwisata di Wat Arun dengan menggunakan ferry menyusuri sungai Chaopraya, kuil terkenal di Thailand dan didalamnya terdapat pasar terbuka dengan souvenir khas Thailand yang terkenal sangat murah. Setelah itu dilanjutkan ke MBK Mall. Lalu ke Museum Madame Tussaud (optional tour), dimana kita dapat berfoto dengan patung-patung artis terkenal di museum patung lilin. Lalu berwisata kuliner khas Thailand di Asiatique Night Market. Setelah itu check-in hotel untuk beristirahat.', 'b & L on board', '2018-09-15 16:42:28', '2018-09-15 16:42:28', 'admin1', 'admin1'),
	(1, 2, 'BANGKOK - PATTAYA', 'Setelah makan pagi, mengujungi Gems Factory ISO 9002. Tidak ketinggalan untuk berbelanja di Chatuchak Weekend Market pasar tradisional terbesar di Bangkok. Setelah itu perjalanan menuju Pattaya, mengunjungi Silver Lake Grape Farm, melihat indahnya kebun anggur. Lalu ke Lazer Buddha untuk melihat patung Buddha yang dipahat dengan laser. Kemudian ke Alcazar Show (optional tour), melihat pertunjukan ladyboys. Kemudian check-in hotel.', 'B / L / D', '2018-09-15 16:42:28', '2018-09-15 16:42:28', 'admin1', 'admin1'),
	(1, 3, 'PATTAYA - BANGKOK', 'Hari ini, kita bersantai di Hard Rock Merchandise dan Pantai Pattaya utk berfoto bersama untuk kenang-kenangan. Setelah itu perjalanan menuju ke Bangkok, mampir di Honey Bee Product Shop. Setibanya di Bangkok, anda diajak berbelanja di Platinum Mall (Mangga Dua-nya Bangkok) dan berdoa di Four Faces Buddha ( bagi yang berminat ). Setelah itu mengunjungi Choco Ville (European style garden).Check-in hotel.', 'B / L / D', '2018-09-15 16:42:28', '2018-09-15 16:42:28', 'admin1', 'admin1'),
	(1, 4, 'BANGKOK - SURABAYA', 'Setelah makan pagi, diajak berkunjung dan berbelanja cokelat di Chocolate Factory hingga tiba saatnya untuk diantar menuju ke bandara dan kembali ke Surabaya. Sampai bertemu di lain kesempatan…', 'B /L & D ON BOARD', '2018-09-15 16:42:28', '2018-09-15 16:42:28', 'admin1', 'admin1');
/*!40000 ALTER TABLE `m_schedule` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table oketripc_lavensia.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table oketripc_lavensia.role
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table oketripc_lavensia.role: ~4 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
REPLACE INTO `role` (`role_id`, `role_name`, `created_at`, `update_at`) VALUES
	(1, 'MASTER ADMIN', '2018-07-13 00:55:03', '2018-07-13 00:55:04'),
	(2, 'SUPER ADMIN', '2018-07-13 00:55:03', '2018-07-13 00:55:04'),
	(3, 'ADMIN', '2018-07-13 00:54:50', '2018-07-13 00:54:51'),
	(4, 'AGENT', '2018-07-13 00:55:03', '2018-07-13 00:55:04');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table oketripc_lavensia.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `password`, `username`, `birthday`, `phone`, `email`, `address`, `role_id`, `remember_token`, `image`, `co_name`, `co_phone`, `co_address`, `co_email`, `mg_name`, `mg_phone`, `mg_email`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'admin1', '$2y$10$hIwtTGJEmZw8y9fIu6GIyusu4qJpsTiJrDohEBwc9e73Uh4noXBwW', 'admin1', NULL, '9897878', 'oketrip1@gmail.com', 'admin1', 1, 'yb0VdsUjqvdvsPp8WBdek1ihkI5BAZWxOTuGSB8wcN1BD4Bn2MCE9SL49NMg', '10.jpg', 'admin1', '9889798', 'admin1', 'admin1@gmail.com', 'admin1', '989898', 'admin1@gmail.com', '2018-09-15 14:58:53', '2018-09-15 16:47:48', 'AKTIF');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
