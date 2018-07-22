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
  `da_additional_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`da_booking_id`,`da_detail`),
  CONSTRAINT `FK_d_additonal_booking_d_booking` FOREIGN KEY (`da_booking_id`) REFERENCES `d_booking` (`db_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_additonal_booking: ~60 rows (approximately)
DELETE FROM `d_additonal_booking`;
/*!40000 ALTER TABLE `d_additonal_booking` DISABLE KEYS */;
INSERT INTO `d_additonal_booking` (`da_booking_id`, `da_detail`, `da_name`, `da_price`, `da_additional_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(2, 1, 'asdas', 1000000, 1, '2018-07-22 10:14:02', '2018-07-22 10:14:02', '1', '1'),
	(2, 2, 'dasd', 1000000, 1, '2018-07-22 10:14:02', '2018-07-22 10:14:02', '1', '1'),
	(2, 3, 'asdasdas', 1000000, 1, '2018-07-22 10:14:02', '2018-07-22 10:14:02', '1', '1'),
	(2, 4, 'dasd', 200000, 2, '2018-07-22 10:14:02', '2018-07-22 10:14:02', '1', '1'),
	(2, 5, 'asdas', 260000, 3, '2018-07-22 10:14:02', '2018-07-22 10:14:02', '1', '1'),
	(2, 6, 'dasd', 260000, 3, '2018-07-22 10:14:02', '2018-07-22 10:14:02', '1', '1'),
	(3, 1, 'asdd', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 2, 'asd', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 3, 'asdasd', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 4, '123123', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 5, '12wqdawdas', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 6, '12312dsa', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 7, 'asdas', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 8, 'd12d1', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 9, 'dsadas', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 10, 'sadas', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 11, 'dasda', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 12, 'sad12', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 13, 'asd', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 14, 'cxvasd', 1000000, 1, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 15, 'asdd', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 16, 'asd', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 17, 'asdasd', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 18, '123123', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 19, '12wqdawdas', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 20, '12312dsa', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 21, 'asdas', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 22, 'd12d1', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 23, 'dsadas', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 24, 'sadas', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 25, 'd12', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 26, 'dasda', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 27, 'sad12', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 28, 'asd', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 29, 'cxvasd', 200000, 2, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 30, 'asdd', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 31, 'asd', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 32, 'asdasd', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 33, '123123', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 34, '12wqdawdas', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 35, '12312dsa', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 36, 'asdas', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 37, 'd12d1', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 38, 'dsadas', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 39, 'sadas', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 40, 'd12', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 41, 'dasda', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 42, 'sad12', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 43, 'asd', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(3, 44, 'cxvasd', 260000, 3, '2018-07-22 10:17:35', '2018-07-22 10:17:35', '1', '1'),
	(4, 1, 'asd', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 2, 'asd', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 3, 'asdas', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 4, 'sdfsd', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 5, 'fasf', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 6, 'asdfasdghsdf', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 7, 'qwe', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 8, '21eawcsdaf', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 9, 'avcvcxv', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 10, 'wedads', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 11, 'fcxvdc', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 12, 'sdf', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 13, 'sadfas', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 14, 'vsdfasfa', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 15, '32fwfsedfsd', 1000000, 1, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 16, 'asd', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 17, 'asd', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 18, 'asdas', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 19, 'sdfsd', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 20, 'fasf', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 21, 'asdfasdghsdf', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 22, 'qwe', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 23, '21eawcsdaf', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 24, 'avcvcxv', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 25, 'wedads', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 26, 'fcxvdc', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 27, 'sdf', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 28, 'sadfas', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 29, 'vsdfasfa', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 30, '32fwfsedfsd', 200000, 2, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 31, 'asd', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 32, 'asd', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 33, 'asdas', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 34, 'sdfsd', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 35, 'fasf', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 36, 'asdfasdghsdf', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 37, 'qwe', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 38, '21eawcsdaf', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 39, 'avcvcxv', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 40, 'wedads', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 41, 'fcxvdc', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 42, 'sdf', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 43, 'sadfas', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 44, 'vsdfasfa', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1'),
	(4, 45, '32fwfsedfsd', 260000, 3, '2018-07-22 10:20:25', '2018-07-22 10:20:25', '1', '1');
/*!40000 ALTER TABLE `d_additonal_booking` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_booking
CREATE TABLE IF NOT EXISTS `d_booking` (
  `db_id` int(11) NOT NULL,
  `db_users` int(11) DEFAULT NULL,
  `db_intinerary_id` int(11) DEFAULT NULL,
  `db_detail_intinerary_id` int(11) DEFAULT NULL,
  `db_name` varchar(50) DEFAULT NULL,
  `db_pax` int(11) DEFAULT NULL,
  `db_remark` mediumtext,
  `db_total_additional` double DEFAULT NULL,
  `db_total_room` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`db_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_booking: ~6 rows (approximately)
DELETE FROM `d_booking`;
/*!40000 ALTER TABLE `d_booking` DISABLE KEYS */;
INSERT INTO `d_booking` (`db_id`, `db_users`, `db_intinerary_id`, `db_detail_intinerary_id`, `db_name`, `db_pax`, `db_remark`, `db_total_additional`, `db_total_room`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 8, 1, 'asd', 3, 'asdasdasdsa', 0, 21000000, '2018-07-22 10:13:20', '2018-07-22 10:13:20', 1, 1),
	(2, 1, 8, 1, 'asdasdas', 3, 'asdsa', 3720000, 21000000, '2018-07-22 10:14:01', '2018-07-22 10:14:01', 1, 1),
	(3, 1, 8, 1, 'asd', 15, 'asdas', 20900000, 105000000, '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(4, 1, 8, 1, 'asda', 15, 'asdf', 21900000, 104000000, '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1);
/*!40000 ALTER TABLE `d_booking` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_party_name
CREATE TABLE IF NOT EXISTS `d_party_name` (
  `dp_booking_id` int(11) NOT NULL,
  `dp_detail` int(11) NOT NULL,
  `dp_fam_name` varchar(50) DEFAULT NULL,
  `dp_name` varchar(50) DEFAULT NULL,
  `dp_price` double NOT NULL,
  `dp_bed` varchar(50) DEFAULT NULL,
  `dp_image` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`dp_booking_id`,`dp_detail`),
  CONSTRAINT `FK_d_party_name_d_booking` FOREIGN KEY (`dp_booking_id`) REFERENCES `d_booking` (`db_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_party_name: ~23 rows (approximately)
DELETE FROM `d_party_name`;
/*!40000 ALTER TABLE `d_party_name` DISABLE KEYS */;
INSERT INTO `d_party_name` (`dp_booking_id`, `dp_detail`, `dp_fam_name`, `dp_name`, `dp_price`, `dp_bed`, `dp_image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'asd', 'asda', 7000000, 'Triple', 'booking/asd_asda_1_1.jpg', '2018-07-22 10:13:20', '2018-07-22 10:13:20', 1, 1),
	(1, 2, 'asd', 'sdasdasdas', 7000000, 'Triple', 'booking/asd_sdasdasdas_1_2.jpg', '2018-07-22 10:13:20', '2018-07-22 10:13:20', 1, 1),
	(1, 3, 'asd', 'asdas', 7000000, 'Triple', 'booking/asd_asdas_1_3.jpg', '2018-07-22 10:13:20', '2018-07-22 10:13:20', 1, 1),
	(2, 1, 'asdas', 'asdas', 7000000, 'Triple', 'booking/asdas_asdas_2_1.jpg', '2018-07-22 10:14:01', '2018-07-22 10:14:01', 1, 1),
	(2, 2, 'asdas', 'dasd', 7000000, 'Triple', 'booking/asdas_dasd_2_2.jpg', '2018-07-22 10:14:01', '2018-07-22 10:14:01', 1, 1),
	(2, 3, 'asdas', 'asdasdas', 7000000, 'Triple', 'booking/asdas_asdasdas_2_3.jpg', '2018-07-22 10:14:01', '2018-07-22 10:14:01', 1, 1),
	(3, 1, 'sadas', 'asdd', 7000000, 'Triple', 'booking/sadas_asdd_3_1.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 2, 'sadas', 'asd', 7000000, 'Triple', 'booking/sadas_asd_3_2.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 3, 'sadas', 'asdasd', 7000000, 'Triple', 'booking/sadas_asdasd_3_3.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 4, 'asdasda', '123123', 7000000, 'Triple', 'booking/asdasda_123123_3_4.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 5, 'asdasda', '12wqdawdas', 7000000, 'Triple', 'booking/asdasda_12wqdawdas_3_5.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 6, 'asdasda', '12312dsa', 7000000, 'Triple', 'booking/asdasda_12312dsa_3_6.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 7, 'asdasdas', 'asdas', 7000000, 'Triple', 'booking/asdasdas_asdas_3_7.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 8, 'asdasdas', 'd12d1', 7000000, 'Triple', 'booking/asdasdas_d12d1_3_8.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 9, 'asdasdas', 'dsadas', 7000000, 'Triple', 'booking/asdasdas_dsadas_3_9.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 10, 'asdad12', 'sadas', 7000000, 'Triple', 'booking/asdad12_sadas_3_10.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 11, 'asdad12', 'd12', 7000000, 'Triple', 'booking/asdad12_d12_3_11.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 12, 'asdad12', 'dasda', 7000000, 'Triple', 'booking/asdad12_dasda_3_12.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 13, 'dssada', 'sad12', 7000000, 'Triple', 'booking/dssada_sad12_3_13.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 14, 'dssada', 'asd', 7000000, 'Triple', 'booking/dssada_asd_3_14.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(3, 15, 'dssada', 'cxvasd', 7000000, 'Triple', 'booking/dssada_cxvasd_3_15.jpg', '2018-07-22 10:17:35', '2018-07-22 10:17:35', 1, 1),
	(4, 1, 'asdas', 'asd', 7000000, 'Triple', 'booking/asdas_asd_4_1.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 2, 'asdas', 'asd', 7000000, 'Triple', 'booking/asdas_asd_4_2.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 3, 'asdas', 'asdas', 7000000, 'Triple', 'booking/asdas_asdas_4_3.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 4, 'asdasssffd', 'sdfsd', 7000000, 'Triple', 'booking/asdasssffd_sdfsd_4_4.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 5, 'asdasssffd', 'fasf', 7000000, 'Triple', 'booking/asdasssffd_fasf_4_5.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 6, 'asdasssffd', 'asdfasdghsdf', 7000000, 'Triple', 'booking/asdasssffd_asdfasdghsdf_4_6.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 7, 'fsdvdfv', 'qwe', 7000000, 'Triple', 'booking/fsdvdfv_qwe_4_7.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 8, 'fsdvdfv', '21eawcsdaf', 7000000, 'Triple', 'booking/fsdvdfv_21eawcsdaf_4_8.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 9, 'fsdvdfv', 'avcvcxv', 7000000, 'Triple', 'booking/fsdvdfv_avcvcxv_4_9.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 10, 'asdcsadva', 'wedads', 7000000, 'Triple', 'booking/asdcsadva_wedads_4_10.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 11, 'asdcsadva', 'fcxvdc', 7000000, 'Triple', 'booking/asdcsadva_fcxvdc_4_11.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 12, 'asdcsadva', 'sdf', 7000000, 'Triple', 'booking/asdcsadva_sdf_4_12.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 13, 'fdsvcadfvd', 'sadfas', 7000000, 'Double/Twin + CwB', 'booking/fdsvcadfvd_sadfas_4_13.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 14, 'fdsvcadfvd', 'vsdfasfa', 7000000, 'Double/Twin + CwB', 'booking/fdsvcadfvd_vsdfasfa_4_14.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1),
	(4, 15, 'fdsvcadfvd', '32fwfsedfsd', 6000000, 'Double/Twin + CwB', 'booking/fdsvcadfvd_32fwfsedfsd_4_15.jpg', '2018-07-22 10:20:25', '2018-07-22 10:20:25', 1, 1);
/*!40000 ALTER TABLE `d_party_name` ENABLE KEYS */;

-- Dumping structure for table lavensia.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.migrations: ~3 rows (approximately)
DELETE FROM `migrations`;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional: ~3 rows (approximately)
DELETE FROM `m_additional`;
/*!40000 ALTER TABLE `m_additional` DISABLE KEYS */;
INSERT INTO `m_additional` (`ma_id`, `ma_name`, `ma_desc`, `ma_price`, `ma_created_at`, `ma_updated_at`) VALUES
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional_intinerary: ~5 rows (approximately)
DELETE FROM `m_additional_intinerary`;
/*!40000 ALTER TABLE `m_additional_intinerary` DISABLE KEYS */;
INSERT INTO `m_additional_intinerary` (`mai_id`, `intinerary_mi_id`, `additional_ma_id`) VALUES
	(4, 7, 1),
	(5, 7, 2),
	(20, 8, 1),
	(21, 8, 2),
	(22, 8, 3);
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
DELETE FROM `m_category`;
/*!40000 ALTER TABLE `m_category` DISABLE KEYS */;
INSERT INTO `m_category` (`mc_id`, `mc_name`, `mc_created_at`, `mc_updated_at`) VALUES
	(1, 'ASIA', '2018-07-16 23:57:37', '2018-07-16 23:57:39'),
	(2, 'EROPA', '2018-07-16 23:57:51', '2018-07-16 23:57:52'),
	(3, 'LOKAL', '2018-07-16 23:57:59', '2018-07-16 23:58:00');
/*!40000 ALTER TABLE `m_category` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_detail_intinerary
CREATE TABLE IF NOT EXISTS `m_detail_intinerary` (
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
  `md_term` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`md_intinerary_id`,`md_detail`),
  UNIQUE KEY `md_nota` (`md_nota`),
  CONSTRAINT `FK_m_detail_intinerary_m_intinerary` FOREIGN KEY (`md_intinerary_id`) REFERENCES `m_intinerary` (`mi_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_detail_intinerary: ~10 rows (approximately)
DELETE FROM `m_detail_intinerary`;
/*!40000 ALTER TABLE `m_detail_intinerary` DISABLE KEYS */;
INSERT INTO `m_detail_intinerary` (`md_intinerary_id`, `md_detail`, `md_nota`, `md_seat`, `md_seat_remain`, `md_start`, `md_end`, `md_adult_price`, `md_child_price`, `md_infant_price`, `md_child_w_price`, `md_term`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(4, 1, 'TR0718/004/001', 45, 45, '2018-07-17', '2018-07-17', 2333333, 3232323, 2323232, NULL, '2323232323', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi'),
	(5, 3, 'TR0718/005/003', 60, 60, '2018-07-25', '2018-08-03', 1300000000, 1000000000, 700000000, NULL, 'Bila membawa anak lebih dari 1 harap konfirmasi dahulu', '2018-07-17 17:09:12', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 4, 'TR0718/005/004', 23, 20, '2018-07-18', '2018-07-18', 2323232, 2323232, 2323232, NULL, '32323232', '2018-07-18 12:58:13', '2018-07-18 12:59:38', 'adi', 'adi'),
	(5, 5, 'TR0718/005/005', 25, 25, '2018-07-18', '2018-07-22', 12500000, 10000000, 5000000, NULL, 'xxx', '2018-07-18 12:59:38', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 6, 'TR0718/005/006', 50, 50, '2018-07-21', '2018-07-31', 12500000, 10000000, 5500000, NULL, 'bawa jajan bagi bagi ketemennya', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(6, 1, 'TR0718/006/001', 23, 23, '2018-07-18', '2018-07-18', 23232, 2323, 3232, 23232, '23232', '2018-07-18 14:43:32', '2018-07-18 14:46:21', 'adi', 'adi'),
	(6, 2, 'TR0718/006/002', 23, 23, '2018-07-18', '2018-07-22', 232333, 333333, 111111, 333222, 'xxx', '2018-07-18 14:46:21', '2018-07-18 14:46:21', 'adi', 'adi'),
	(7, 1, 'TR0718/007/001', 23, 23, '2018-07-19', '2018-07-21', 232323, 232323, 2323, 232332, 'xxx', '2018-07-18 17:48:15', '2018-07-18 18:31:18', 'adi', 'adi'),
	(7, 2, 'TR0718/007/002', 23, 23, '2018-07-19', '2018-07-19', 232323, 232323, 323232, 232323, '23232', '2018-07-18 17:48:15', '2018-07-18 18:31:18', 'adi', 'adi'),
	(8, 1, 'TR0718/008/001', 50, 50, '2018-07-19', '2018-07-21', 7000000, 5000000, 3000000, 6000000, 'Harus mematuhi peraturan', '2018-07-20 12:52:20', '2018-07-20 12:59:22', 'adi', 'adi');
/*!40000 ALTER TABLE `m_detail_intinerary` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_intinerary
CREATE TABLE IF NOT EXISTS `m_intinerary` (
  `mi_id` int(11) NOT NULL,
  `mi_nota` varchar(50) NOT NULL,
  `mi_name` varchar(300) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `mi_image` varchar(50) DEFAULT NULL,
  `mi_highlight` mediumtext,
  `mi_by` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mi_id`),
  UNIQUE KEY `mi_nota` (`mi_nota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_intinerary: ~5 rows (approximately)
DELETE FROM `m_intinerary`;
/*!40000 ALTER TABLE `m_intinerary` DISABLE KEYS */;
INSERT INTO `m_intinerary` (`mi_id`, `mi_nota`, `mi_name`, `category_id`, `mi_image`, `mi_highlight`, `mi_by`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(4, 'TR0718/004', 'xxxxxxxx', 1, 'itinerary/TR0718-004.jpg', 'xxxxx', 'xxss', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi'),
	(5, 'TR0718/005', 'TOUR THE NEW BEIJING SHANGHAI HUANGSHAN', 1, 'itinerary/TR0718-005.jpg', 'Great Wall, Tian An Men, Forbidden City, Nanjing Road, Dll', 'Singapore Airlines', '2018-07-17 15:46:46', '2018-07-18 13:10:48', 'adi', 'adi'),
	(6, 'TR0718/006', 'sadsad', 2, 'itinerary/TR0718-006.jpg', 'dssad', 'dsadsad', '2018-07-18 14:43:32', '2018-07-18 14:46:21', 'adi', 'adi'),
	(7, 'TR0718/007', 'xxx', 2, 'itinerary/TR0718-007.jpg', 'xxx', 'xxx', '2018-07-18 17:48:15', '2018-07-18 18:31:17', 'adi', 'adi'),
	(8, 'TR0718/008', 'JALAN JALAN KE SINGAPORE', 1, 'itinerary/TR0718-008.jpg', 'KE SINGAPORE', 'xxx', '2018-07-18 18:34:40', '2018-07-20 12:59:22', 'adi', 'adi');
/*!40000 ALTER TABLE `m_intinerary` ENABLE KEYS */;

-- Dumping structure for table lavensia.m_schedule
CREATE TABLE IF NOT EXISTS `m_schedule` (
  `ms_intinerary_id` int(11) NOT NULL,
  `ms_detail` int(11) NOT NULL,
  `ms_caption` varchar(50) DEFAULT NULL,
  `ms_description` mediumtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ms_intinerary_id`,`ms_detail`),
  CONSTRAINT `FK_m_schedule_m_intinerary` FOREIGN KEY (`ms_intinerary_id`) REFERENCES `m_intinerary` (`mi_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_schedule: ~18 rows (approximately)
DELETE FROM `m_schedule`;
/*!40000 ALTER TABLE `m_schedule` DISABLE KEYS */;
INSERT INTO `m_schedule` (`ms_intinerary_id`, `ms_detail`, `ms_caption`, `ms_description`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(4, 1, '2323', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi'),
	(4, 2, '2323', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi'),
	(5, 1, 'SURABAYA – SINGAPORE – SHANGHA | NO MEAL', 'Berkumpul di Juanda Surabaya / Cengkareng Jakarta untuk penerbangan ke Beijing dengan transit terlebih dahulu di Singapore. Tiba di Beijing diantar ke hotel untuk istirahat.', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 2, 'BEIJING | B / L / D', 'Tour mengunjungi Great Wall di pintu Joyungguan , Photo Stop di Bird Nest & Water Cube Building dan dilanjutkan makan malam Bebek Peking yang terkenal.', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 3, 'BEIJING | B / L / D', 'Tour ke Tian An Men yang merupakan lapangan di pusat kota Beijing yang terkenal, kemudian ke Forbidden City yang merupakan pusat pemerintahan jaman kekaisaran, dilanjutkan ke WangFujing yang merupakan pusat pertokoan terkenal di Beijing.', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 4, 'BEIJING – HUANGSHAN | B / L / D', 'Naik Bullet Train Ke Huangshan, tiba di Tunxi yang terletak di khaki Huangshan dan pegunungan dilanjutkan berjalan jalan di Tunxi Old Street yang merupakan pusat kota kuno di Tunxi.', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 5, 'HUANGSHAN | B / L / D', 'Menikmati keindahan Gunung Huangshan yang merupakan tempat pembuatan film Croaching Tiger Hidden Dragon yang dibintangi oleh Cho Yun Fat & Michelle Yeoh.', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 6, 'HUANGSHAN – SHANGHAI | B / L / D', 'Berkunjung ke Shanghai Fim Park yang merupakan replika Shanghai jaman kuno dan pusat pembuatan film.', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 7, 'SHANGHAI – SINGAPORE | B / L / D', 'Tour ke The Bund-Pusat bisnis sejak jaman dulu, dilanjutkan ke Nanjing Road – Pusat Pertokoan terkemuka di Shanghai, dan Chenghuangmiao untuk melihat kota kuno Shanghai. Malam hari diantar ke Airport.', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 8, 'SINGAPORE – SURABAYA', 'Transit di Singapore untuk penerbangan kembali ke Surabaya / Jakarta. Terima kasih atas kepercayaan yang diberikan kepada LAVENSIA.', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(6, 1, 'ASD232', '2asdasdas', '2018-07-18 14:46:21', '2018-07-18 14:46:21', 'adi', 'adi'),
	(6, 2, '232323', '232', '2018-07-18 14:46:21', '2018-07-18 14:46:21', 'adi', 'adi'),
	(7, 1, 'XXX', 'xxx', '2018-07-18 18:31:17', '2018-07-18 18:31:17', 'adi', 'adi'),
	(7, 2, 'XXX', 'xxx', '2018-07-18 18:31:18', '2018-07-18 18:31:18', 'adi', 'adi'),
	(7, 3, 'XXX', 'xxx', '2018-07-18 18:31:18', '2018-07-18 18:31:18', 'adi', 'adi'),
	(7, 4, 'XXX', 'xxx', '2018-07-18 18:31:18', '2018-07-18 18:31:18', 'adi', 'adi'),
	(8, 1, 'GATHERING', 'Berkumpul dulu diseberang kalimantan', '2018-07-20 12:59:22', '2018-07-20 12:59:22', 'adi', 'adi'),
	(8, 2, 'GOJEK', 'Gojek sampai singapore', '2018-07-20 12:59:22', '2018-07-20 12:59:22', 'adi', 'adi');
/*!40000 ALTER TABLE `m_schedule` ENABLE KEYS */;

-- Dumping structure for table lavensia.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table lavensia.role
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  KEY `role_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.role: ~2 rows (approximately)
DELETE FROM `role`;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`role_id`, `role_name`, `created_at`, `update_at`) VALUES
	(1, 'ADMIN', '2018-07-13 00:54:50', '2018-07-13 00:54:51'),
	(2, 'AGENT', '2018-07-13 00:55:03', '2018-07-13 00:55:04');
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
  `studies` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.users: ~3 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `password`, `username`, `birthday`, `phone`, `email`, `address`, `studies`, `education`, `class`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'adi', '$2y$10$bTFFCxRtCVNNRMygHy9qCuRD8ejUyMrxnunNlxwq1w/i191mSXXLW', 'dewa17a', NULL, NULL, 'dewa17a@gmail.com', NULL, NULL, NULL, NULL, 2, 'IHyjaw5r0tykJbGthO8d0CDxQtVUL3MV1WsXcs8VVWMXPqcTLUVYsjO2zZ94', '2018-07-12 17:52:15', '2018-07-12 17:52:15'),
	(2, 'adi', '$2y$10$bTFFCxRtCVNNRMygHy9qCuRD8ejUyMrxnunNlxwq1w/i191mSXXLW', 'teses', NULL, NULL, 'a@gmail.com', NULL, NULL, NULL, NULL, 2, 'oWxRve1a9qVO8tgiwHNAqp9tDGzWgdiW8kcAW0nRezRw2RuGKV4xeJRkAgin', '2018-07-12 17:52:15', '2018-07-12 17:52:15'),
	(3, 'adi', '$2y$10$bVwcj838opIS/FHpGLWZiOuKgB3g5BJllZWzOsWXsgLU0Qwxfe9m.', 'dewa17aa', NULL, NULL, 'dewa17aa@gmail.com', NULL, NULL, NULL, NULL, 2, 'GipeeG6KOGFeuv2XCsLWN2i4cTzYPDg7ZXeNmVoCHVRxK6nJbCqqcduUSQYf', '2018-07-15 08:11:17', '2018-07-15 08:11:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
