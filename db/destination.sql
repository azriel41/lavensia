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

-- Dumping structure for table lavensia.m_destination
CREATE TABLE IF NOT EXISTS `m_destination` (
  `d_id` int(11) NOT NULL,
  `d_detail` int(11) NOT NULL,
  `d_category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`d_id`,`d_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_destination: ~4 rows (approximately)
/*!40000 ALTER TABLE `m_destination` DISABLE KEYS */;
REPLACE INTO `m_destination` (`d_id`, `d_detail`, `d_category_id`) VALUES
	(2, 1, 6),
	(2, 2, 7),
	(3, 1, 6),
	(3, 2, 7);
/*!40000 ALTER TABLE `m_destination` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
