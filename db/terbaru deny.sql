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

-- Dumping data for table lavensia.d_additonal_booking: ~4 rows (approximately)
/*!40000 ALTER TABLE `d_additonal_booking` DISABLE KEYS */;
INSERT INTO `d_additonal_booking` (`da_booking_id`, `da_detail`, `da_name`, `da_price`, `da_status`, `da_additional_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'Yae', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 2, 'Mei', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 3, 'Theresa', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 4, 'Kallen', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 5, 'Keslana', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 6, 'Kiana', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 7, 'Wahyudi', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 8, 'Victoria', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 9, 'Riska', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 10, 'Bocah', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 11, 'Ngapa', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 12, 'Ya', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 13, 'Galih', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 14, 'Ratna', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 15, 'Sinta', 1000000, 'Waiting List', 1, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 16, 'Yae', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 17, 'Mei', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 18, 'Theresa', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 19, 'Kallen', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 20, 'Keslana', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 21, 'Kiana', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 22, 'Wahyudi', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 23, 'Victoria', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 24, 'Riska', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 25, 'Bocah', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 26, 'Ngapa', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 27, 'Ya', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 28, 'Galih', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 29, 'Ratna', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 30, 'Sinta', 200000, 'Waiting List', 2, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 31, 'Yae', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 32, 'Mei', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 33, 'Theresa', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 34, 'Kallen', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 35, 'Keslana', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 36, 'Kiana', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 37, 'Wahyudi', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 38, 'Victoria', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 39, 'Riska', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 40, 'Bocah', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 41, 'Ngapa', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 42, 'Ya', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 43, 'Galih', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 44, 'Ratna', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(1, 45, 'Sinta', 260000, 'Waiting List', 3, '2018-07-23 14:14:32', '2018-07-23 14:14:32', '1', '1'),
	(3, 1, 'Dadang', 1000000, 'Waiting List', 1, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 2, 'AS', 1000000, 'Waiting List', 1, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 3, 'dada', 1000000, 'Waiting List', 1, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 4, 'dadai', 1000000, 'Waiting List', 1, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 5, 'dadau', 1000000, 'Waiting List', 1, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 6, 'Dadang', 200000, 'Waiting List', 2, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 7, 'AS', 200000, 'Waiting List', 2, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 8, 'dada', 200000, 'Waiting List', 2, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 9, 'dadai', 200000, 'Waiting List', 2, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 10, 'dadau', 200000, 'Waiting List', 2, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 11, 'Dadang', 260000, 'Waiting List', 3, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 12, 'AS', 260000, 'Waiting List', 3, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 13, 'dada', 260000, 'Waiting List', 3, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 14, 'dadai', 260000, 'Waiting List', 3, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(3, 15, 'dadau', 260000, 'Waiting List', 3, '2018-07-23 14:52:47', '2018-07-23 14:52:47', '1', '1'),
	(4, 1, 'Anjh', 1000000, 'Waiting List', 1, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(4, 2, 'Anjhasd', 1000000, 'Waiting List', 1, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(4, 3, 'asd', 1000000, 'Waiting List', 1, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(4, 4, 'asdasd', 1000000, 'Waiting List', 1, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(4, 5, 'Anjhasd', 200000, 'Waiting List', 2, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(4, 6, 'asd', 200000, 'Waiting List', 2, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(4, 7, 'asdasd', 200000, 'Waiting List', 2, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(4, 8, 'Anjhasd', 260000, 'Waiting List', 3, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(4, 9, 'asd', 260000, 'Waiting List', 3, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(4, 10, 'asdasd', 260000, 'Waiting List', 3, '2018-07-23 14:55:48', '2018-07-23 14:55:48', '1', '1'),
	(5, 1, 'Tese', 1000000, 'Waiting List', 1, '2018-07-23 14:57:26', '2018-07-23 14:57:26', '1', '1'),
	(5, 2, 'dsa', 1000000, 'Waiting List', 1, '2018-07-23 14:57:26', '2018-07-23 14:57:26', '1', '1'),
	(5, 3, 'asd', 200000, 'Waiting List', 2, '2018-07-23 14:57:26', '2018-07-23 14:57:26', '1', '1'),
	(5, 4, 'Tese', 260000, 'Waiting List', 3, '2018-07-23 14:57:26', '2018-07-23 14:57:26', '1', '1'),
	(5, 5, 'asd', 260000, 'Waiting List', 3, '2018-07-23 14:57:26', '2018-07-23 14:57:26', '1', '1'),
	(6, 1, 'asd', 1000000, 'Waiting List', 1, '2018-07-23 14:58:28', '2018-07-23 14:58:28', '1', '1'),
	(6, 2, 'ASdasd', 1000000, 'Waiting List', 1, '2018-07-23 14:58:28', '2018-07-23 14:58:28', '1', '1'),
	(6, 3, 'ASdasd', 260000, 'Waiting List', 3, '2018-07-23 14:58:28', '2018-07-23 14:58:28', '1', '1');
/*!40000 ALTER TABLE `d_additonal_booking` ENABLE KEYS */;

-- Dumping structure for table lavensia.d_booking
CREATE TABLE IF NOT EXISTS `d_booking` (
  `db_id` int(11) NOT NULL,
  `db_users` int(11) DEFAULT NULL,
  `db_intinerary_id` int(11) DEFAULT NULL,
  `db_status` enum('Waiting List','Holding Confirm','Hx By Agent','Hx By System') DEFAULT 'Waiting List',
  `db_name` varchar(50) DEFAULT NULL,
  `db_pax` int(11) DEFAULT NULL,
  `db_remark` mediumtext,
  `db_total_additional` double DEFAULT NULL,
  `db_total_room` double DEFAULT NULL,
  `db_total` double DEFAULT NULL,
  `db_total_remain` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`db_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_booking: ~5 rows (approximately)
/*!40000 ALTER TABLE `d_booking` DISABLE KEYS */;
INSERT INTO `d_booking` (`db_id`, `db_users`, `db_intinerary_id`, `db_status`, `db_name`, `db_pax`, `db_remark`, `db_total_additional`, `db_total_room`, `db_total`, `db_total_remain`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 10, 'Waiting List', 'Sejahtera', 15, 'Check', 21900000, 101000000, NULL, NULL, '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(3, 1, 10, 'Waiting List', 'Kencana', 5, 'Tes', 7300000, 34000000, NULL, NULL, '2018-07-23 14:52:47', '2018-07-23 14:52:47', 1, 1),
	(4, 1, 10, 'Waiting List', 'Siskamling', 5, 'asdasd', 5380000, 35000000, NULL, NULL, '2018-07-23 14:55:47', '2018-07-23 14:55:47', 1, 1),
	(5, 1, 10, 'Waiting List', 'Tes', 3, 'asd', 2720000, 21000000, NULL, NULL, '2018-07-23 14:57:26', '2018-07-23 14:57:26', 1, 1),
	(6, 1, 11, 'Waiting List', 'Tes', 3, 'asdasd', 2260000, 36963936, NULL, NULL, '2018-07-23 14:58:28', '2018-07-23 14:58:28', 1, 1);
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

-- Dumping data for table lavensia.d_party_name: ~31 rows (approximately)
/*!40000 ALTER TABLE `d_party_name` DISABLE KEYS */;
INSERT INTO `d_party_name` (`dp_booking_id`, `dp_detail`, `dp_fam_name`, `dp_name`, `dp_price`, `dp_bed`, `dp_image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'Yae Sakura', 'Yae', 7000000, 'Double/Twin + Invent', 'booking/Yae Sakura_Yae_1_1.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 2, 'Yae Sakura', 'Mei', 7000000, 'Double/Twin + Invent', 'booking/Yae Sakura_Mei_1_2.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 3, 'Yae Sakura', 'Theresa', 3000000, 'Double/Twin + Invent', 'booking/Yae Sakura_Theresa_1_3.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 4, 'Mei', 'Kallen', 7000000, 'Triple', 'booking/Mei_Kallen_1_4.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 5, 'Mei', 'Keslana', 7000000, 'Triple', 'booking/Mei_Keslana_1_5.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 6, 'Mei', 'Kiana', 7000000, 'Triple', 'booking/Mei_Kiana_1_6.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 7, 'Wahyudi', 'Wahyudi', 7000000, 'Triple', 'booking/Wahyudi_Wahyudi_1_7.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 8, 'Wahyudi', 'Victoria', 7000000, 'Triple', 'booking/Wahyudi_Victoria_1_8.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 9, 'Wahyudi', 'Riska', 7000000, 'Triple', 'booking/Wahyudi_Riska_1_9.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 10, 'Suparman', 'Bocah', 7000000, 'Triple', 'booking/Suparman_Bocah_1_10.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 11, 'Suparman', 'Ngapa', 7000000, 'Triple', 'booking/Suparman_Ngapa_1_11.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 12, 'Suparman', 'Ya', 7000000, 'Triple', 'booking/Suparman_Ya_1_12.jpg', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 13, 'Galih', 'Galih', 7000000, 'Triple', 'booking/Galih_Galih_1_13.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 14, 'Galih', 'Ratna', 7000000, 'Triple', 'booking/Galih_Ratna_1_14.png', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(1, 15, 'Galih', 'Sinta', 7000000, 'Triple', 'booking/Galih_Sinta_1_15.jpg', '2018-07-23 14:14:32', '2018-07-23 14:14:32', 1, 1),
	(3, 1, 'Sasha', 'Dadang', 7000000, 'Double', 'booking/Sasha_Dadang_3_1.jpg', '2018-07-23 14:52:47', '2018-07-23 14:52:47', 1, 1),
	(3, 2, 'Sasha', 'AS', 7000000, 'Double', 'booking/Sasha_AS_3_2.jpg', '2018-07-23 14:52:47', '2018-07-23 14:52:47', 1, 1),
	(3, 3, 'dada', 'dada', 7000000, 'Double/Twin + CwB', 'booking/dada_dada_3_3.jpg', '2018-07-23 14:52:47', '2018-07-23 14:52:47', 1, 1),
	(3, 4, 'dada', 'dadai', 7000000, 'Double/Twin + CwB', 'booking/dada_dadai_3_4.jpg', '2018-07-23 14:52:47', '2018-07-23 14:52:47', 1, 1),
	(3, 5, 'dada', 'dadau', 6000000, 'Double/Twin + CwB', 'booking/dada_dadau_3_5.jpg', '2018-07-23 14:52:47', '2018-07-23 14:52:47', 1, 1),
	(4, 1, 'aBra', 'Anjh', 7000000, 'Double', 'booking/aBra_Anjh_4_1.jpg', '2018-07-23 14:55:47', '2018-07-23 14:55:47', 1, 1),
	(4, 2, 'aBra', 'Anjhasd', 7000000, 'Double', 'booking/aBra_Anjhasd_4_2.jpg', '2018-07-23 14:55:47', '2018-07-23 14:55:47', 1, 1),
	(4, 3, 'As', 'asd', 7000000, 'Triple', 'booking/As_asd_4_3.jpg', '2018-07-23 14:55:47', '2018-07-23 14:55:47', 1, 1),
	(4, 4, 'As', 'asdasd', 7000000, 'Triple', 'booking/As_asdasd_4_4.jpg', '2018-07-23 14:55:47', '2018-07-23 14:55:47', 1, 1),
	(4, 5, 'As', 'dsaasdasda', 7000000, 'Triple', 'booking/As_dsaasdasda_4_5.jpg', '2018-07-23 14:55:47', '2018-07-23 14:55:47', 1, 1),
	(5, 1, 'Tes', 'Tese', 7000000, 'Triple', 'booking/Tes_Tese_5_1.jpg', '2018-07-23 14:57:26', '2018-07-23 14:57:26', 1, 1),
	(5, 2, 'Tes', 'asd', 7000000, 'Triple', 'booking/Tes_asd_5_2.png', '2018-07-23 14:57:26', '2018-07-23 14:57:26', 1, 1),
	(5, 3, 'Tes', 'dsa', 7000000, 'Triple', 'booking/Tes_dsa_5_3.jpg', '2018-07-23 14:57:26', '2018-07-23 14:57:26', 1, 1),
	(6, 1, 'Tesad', 'asd', 12321312, 'Triple', 'booking/Tesad_asd_6_1.jpg', '2018-07-23 14:58:28', '2018-07-23 14:58:28', 1, 1),
	(6, 2, 'Tesad', 'ASdasd', 12321312, 'Triple', 'booking/Tesad_ASdasd_6_2.jpg', '2018-07-23 14:58:28', '2018-07-23 14:58:28', 1, 1),
	(6, 3, 'Tesad', 'aasd', 12321312, 'Triple', 'booking/Tesad_aasd_6_3.jpg', '2018-07-23 14:58:28', '2018-07-23 14:58:28', 1, 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional: ~3 rows (approximately)
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_additional_intinerary: ~5 rows (approximately)
/*!40000 ALTER TABLE `m_additional_intinerary` DISABLE KEYS */;
INSERT INTO `m_additional_intinerary` (`mai_id`, `intinerary_mi_id`, `additional_ma_id`) VALUES
	(4, 7, 1),
	(5, 7, 2),
	(23, 8, 1),
	(24, 8, 2),
	(25, 8, 3);
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
INSERT INTO `m_category` (`mc_id`, `mc_name`, `mc_created_at`, `mc_updated_at`) VALUES
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
  `md_term` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`md_id`,`md_intinerary_id`),
  UNIQUE KEY `md_nota` (`md_nota`),
  KEY `FK_m_detail_intinerary_m_intinerary` (`md_intinerary_id`),
  CONSTRAINT `FK_m_detail_intinerary_m_intinerary` FOREIGN KEY (`md_intinerary_id`) REFERENCES `m_intinerary` (`mi_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_detail_intinerary: ~11 rows (approximately)
/*!40000 ALTER TABLE `m_detail_intinerary` DISABLE KEYS */;
INSERT INTO `m_detail_intinerary` (`md_id`, `md_intinerary_id`, `md_detail`, `md_nota`, `md_seat`, `md_seat_remain`, `md_start`, `md_end`, `md_adult_price`, `md_child_price`, `md_infant_price`, `md_child_w_price`, `md_term`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 4, 1, 'TR0718/004/001', 45, NULL, '2018-07-17', '2018-07-17', 2333333, 3232323, 2323232, NULL, '2323232323', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi'),
	(2, 5, 3, 'TR0718/005/003', 60, NULL, '2018-07-25', '2018-08-03', 1300000000, 1000000000, 700000000, NULL, 'Bila membawa anak lebih dari 1 harap konfirmasi dahulu', '2018-07-17 17:09:12', '2018-07-18 13:10:48', 'adi', 'adi'),
	(3, 5, 4, 'TR0718/005/004', 23, NULL, '2018-07-18', '2018-07-18', 2323232, 2323232, 2323232, NULL, '32323232', '2018-07-18 12:58:13', '2018-07-18 12:59:38', 'adi', 'adi'),
	(4, 5, 5, 'TR0718/005/005', 25, NULL, '2018-07-18', '2018-07-22', 12500000, 10000000, 5000000, NULL, 'xxx', '2018-07-18 12:59:38', '2018-07-18 13:10:48', 'adi', 'adi'),
	(5, 5, 6, 'TR0718/005/006', 50, NULL, '2018-07-21', '2018-07-31', 12500000, 10000000, 5500000, NULL, 'bawa jajan bagi bagi ketemennya', '2018-07-18 13:10:48', '2018-07-18 13:10:48', 'adi', 'adi'),
	(6, 6, 1, 'TR0718/006/001', 23, NULL, '2018-07-18', '2018-07-18', 23232, 2323, 3232, 23232, '23232', '2018-07-18 14:43:32', '2018-07-18 14:46:21', 'adi', 'adi'),
	(7, 6, 2, 'TR0718/006/002', 23, NULL, '2018-07-18', '2018-07-22', 232333, 333333, 111111, 333222, 'xxx', '2018-07-18 14:46:21', '2018-07-18 14:46:21', 'adi', 'adi'),
	(8, 7, 1, 'TR0718/007/001', 23, NULL, '2018-07-19', '2018-07-21', 232323, 232323, 2323, 232332, 'xxx', '2018-07-18 17:48:15', '2018-07-18 18:31:18', 'adi', 'adi'),
	(9, 7, 2, 'TR0718/007/002', 23, NULL, '2018-07-19', '2018-07-19', 232323, 232323, 323232, 232323, '23232', '2018-07-18 17:48:15', '2018-07-18 18:31:18', 'adi', 'adi'),
	(10, 8, 1, 'TR0718/008/001', 50, NULL, '2018-07-19', '2018-07-21', 7000000, 5000000, 3000000, 6000000, 'Harus mematuhi peraturan', '2018-07-20 12:52:20', '2018-07-23 13:41:16', 'adi', 'adi'),
	(11, 8, 2, 'TR0718/008/002', 50, NULL, '2018-07-23', '2018-07-26', 12321312, 8566566, 3232333, 10000000, 'asdasdasdas', '2018-07-23 13:41:16', '2018-07-23 13:41:16', 'adi', 'adi');
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
/*!40000 ALTER TABLE `m_intinerary` DISABLE KEYS */;
INSERT INTO `m_intinerary` (`mi_id`, `mi_nota`, `mi_name`, `category_id`, `mi_image`, `mi_highlight`, `mi_by`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(4, 'TR0718/004', 'xxxxxxxx', 1, 'itinerary/TR0718-004.jpg', 'xxxxx', 'xxss', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi'),
	(5, 'TR0718/005', 'TOUR THE NEW BEIJING SHANGHAI HUANGSHAN', 1, 'itinerary/TR0718-005.jpg', 'Great Wall, Tian An Men, Forbidden City, Nanjing Road, Dll', 'Singapore Airlines', '2018-07-17 15:46:46', '2018-07-18 13:10:48', 'adi', 'adi'),
	(6, 'TR0718/006', 'sadsad', 2, 'itinerary/TR0718-006.jpg', 'dssad', 'dsadsad', '2018-07-18 14:43:32', '2018-07-18 14:46:21', 'adi', 'adi'),
	(7, 'TR0718/007', 'xxx', 2, 'itinerary/TR0718-007.jpg', 'xxx', 'xxx', '2018-07-18 17:48:15', '2018-07-18 18:31:17', 'adi', 'adi'),
	(8, 'TR0718/008', 'JALAN JALAN KE SINGAPORE', 1, 'itinerary/TR0718-008.jpg', 'KE SINGAPORE', 'xxx', '2018-07-18 18:34:40', '2018-07-23 13:41:16', 'adi', 'adi');
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
	(8, 1, 'GATHERING', 'Berkumpul dulu diseberang kalimantan', '2018-07-23 13:41:16', '2018-07-23 13:41:16', 'adi', 'adi'),
	(8, 2, 'GOJEK', 'Gojek sampai singapore', '2018-07-23 13:41:16', '2018-07-23 13:41:16', 'adi', 'adi');
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
  KEY `role_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lavensia.role: ~2 rows (approximately)
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

-- Dumping data for table lavensia.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `password`, `username`, `birthday`, `phone`, `email`, `address`, `studies`, `education`, `class`, `role_id`, `remember_token`, `created_at`, `updated_at`, `co_name`, `co_phone`, `co_email`, `co_address`, `mg_name`, `mg_phone`, `mg_email`, `image`) VALUES
	(4, 'Deny Prasetyo', '$2y$10$RJp9p2Y4x7f2SuC.5wCchu9pw8ZHzx9uA76PxYMJrHk8BHA8O9.L6', 'deny', NULL, '089999999999', 'denyprasetyo41@gmail.com', 'Jl wonorejo inda timur 3a no 66', NULL, NULL, NULL, 2, NULL, '2018-07-24 02:35:21', '2018-07-24 02:35:21', 'PT . GUARD SEEKER', '03141902211', 'guardseeker@gmail.com', 'Jl. wonorejo indah timurr', 'Deny Prasetyo', '0821231211231', 'denyprasetyo41@gmail.com', '4.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
