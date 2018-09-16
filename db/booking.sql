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
	(1, '180900001', 1, '323', 25, 'Hold By System', 'ER312', NULL, 4, 1, 2, 'fewfwexcd', 2641000, 499180, NULL, NULL, 33333, NULL, 1, 3106847, 3106847, 1, '2018-09-16 11:00:59', '2018-09-16 11:35:40', 1);
/*!40000 ALTER TABLE `d_booking` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
