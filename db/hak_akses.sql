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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table oketripc_lavensia.m_hak_akses: ~4 rows (approximately)
/*!40000 ALTER TABLE `m_hak_akses` DISABLE KEYS */;
REPLACE INTO `m_hak_akses` (`mh_id`, `mh_level`, `mh_menu`, `mh_aksi`, `mh_aktif`, `mh_created_at`, `mh_updated_at`) VALUES
	(1, '2', 'master agent', 'true', 'true', '2018-09-09 19:47:48', '2018-09-09 19:47:49'),
	(2, '2', 'master category', 'true', 'true', '2018-09-09 20:08:15', '2018-09-09 20:08:18'),
	(3, '2', 'master additional', 'true', 'true', '2018-09-09 20:08:44', '2018-09-09 20:08:45'),
	(4, '2', 'master intinerary', 'true', 'true', '2018-09-09 20:09:03', '2018-09-09 20:09:04');
/*!40000 ALTER TABLE `m_hak_akses` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
