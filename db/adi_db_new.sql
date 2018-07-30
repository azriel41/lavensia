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

-- Dumping structure for table lavensia.d_booking
CREATE TABLE IF NOT EXISTS `d_booking` (
  `db_id` int(11) NOT NULL,
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
  PRIMARY KEY (`db_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.d_booking: ~1 rows (approximately)
/*!40000 ALTER TABLE `d_booking` DISABLE KEYS */;
REPLACE INTO `d_booking` (`db_id`, `db_users`, `db_telp`, `db_intinerary_id`, `db_status`, `db_name`, `db_total_adult`, `db_total_child`, `db_total_infant`, `db_remark`, `db_total_additional`, `db_total_room`, `db_total`, `db_total_remain`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 13123123, 10, 'Waiting List', 'asd', 2, 0, 2, NULL, 2920000, 20000000, 22920000, 22920000, '2018-07-29 13:59:35', '2018-07-29 13:59:35', 1, 1);
/*!40000 ALTER TABLE `d_booking` ENABLE KEYS */;

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

-- Dumping data for table lavensia.d_party_name: ~4 rows (approximately)
/*!40000 ALTER TABLE `d_party_name` DISABLE KEYS */;
REPLACE INTO `d_party_name` (`dp_booking_id`, `dp_detail`, `dp_bed`, `dp_name`, `dp_passport`, `dp_exp_date`, `dp_issuing`, `dp_gender`, `dp_birth_date`, `dp_birth_place`, `dp_reference`, `dp_image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'Single', 'asdsa', 'asxwaxda', '2018-07-18', 'asxwd', 'male', '2018-07-18', '12d12', 'asdsad', 'b', '2018-07-29 13:59:35', '2018-07-29 13:59:35', NULL, NULL),
	(1, 2, 'Single', 'asd', '12dsadc', '2018-07-28', 'dsasx', 'male', '2018-07-22', 'qwafdascf', 'was', 'o', '2018-07-29 13:59:35', '2018-07-29 13:59:35', NULL, NULL),
	(1, 3, 'Single', 'as', 'dasd12', '2018-07-16', 'asdas', 'male', '2018-07-20', '1dsac', 'dasd', 'o', '2018-07-29 13:59:35', '2018-07-29 13:59:35', NULL, NULL),
	(1, 4, 'Single', 'asdas', 'd12ds', '2018-07-29', 'asd123vfsd', 'female', '2018-07-28', 'wfgfdg', 'fsd', 'k', '2018-07-29 13:59:35', '2018-07-29 13:59:35', NULL, NULL);
/*!40000 ALTER TABLE `d_party_name` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
