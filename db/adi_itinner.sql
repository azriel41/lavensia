-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table lavensia.m_detail_intinerary
CREATE TABLE IF NOT EXISTS `m_detail_intinerary` (
  `md_intinerary_id` int(11) NOT NULL,
  `md_detail` int(11) NOT NULL,
  `md_nota` varchar(50) NOT NULL,
  `md_seat` int(11) NOT NULL,
  `md_seat_remain` int(11) DEFAULT NULL,
  `md_start` date DEFAULT NULL,
  `md_end` date DEFAULT NULL,
  `md_adult_price` int(11) DEFAULT NULL,
  `md_child_price` int(11) DEFAULT NULL,
  `md_infant_price` int(11) DEFAULT NULL,
  `md_term` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`md_intinerary_id`,`md_detail`),
  CONSTRAINT `FK_m_detail_intinerary_m_intinerary` FOREIGN KEY (`md_intinerary_id`) REFERENCES `m_intinerary` (`mi_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_detail_intinerary: ~4 rows (approximately)
/*!40000 ALTER TABLE `m_detail_intinerary` DISABLE KEYS */;
REPLACE INTO `m_detail_intinerary` (`md_intinerary_id`, `md_detail`, `md_nota`, `md_seat`, `md_seat_remain`, `md_start`, `md_end`, `md_adult_price`, `md_child_price`, `md_infant_price`, `md_term`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'TR0718/001/001', 50, NULL, '2018-07-17', '2018-07-28', 12500000, 12000000, 11500000, 'harus bawa uang lebih', '2018-07-17 07:57:22', '2018-07-17 07:57:22', 'adi', 'adi'),
	(1, 2, 'TR0718/001/002', 50, NULL, '2018-07-17', '2018-07-31', 25000000, 20000000, 17500000, 'bawa uang jajan', '2018-07-17 07:57:22', '2018-07-17 07:57:22', 'adi', 'adi'),
	(2, 1, 'TR0718/002/001', 55, NULL, '2018-07-17', '2018-07-17', 343434, 3343434, 34343434, '34343434343', '2018-07-17 08:00:51', '2018-07-17 08:00:51', 'adi', 'adi'),
	(3, 1, 'TR0718/003/001', 45, NULL, '2018-07-17', '2018-07-17', 4544545, 4545454, 454555, '3434343', '2018-07-17 08:30:28', '2018-07-17 08:30:28', 'adi', 'adi'),
	(4, 1, 'TR0718/004/001', 45, 45, '2018-07-17', '2018-07-17', 2333333, 3232323, 2323232, '2323232323', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi');
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
  PRIMARY KEY (`mi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table lavensia.m_intinerary: ~1 rows (approximately)
/*!40000 ALTER TABLE `m_intinerary` DISABLE KEYS */;
REPLACE INTO `m_intinerary` (`mi_id`, `mi_nota`, `mi_name`, `category_id`, `mi_image`, `mi_highlight`, `mi_by`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 'TR0718/001', 'TOUR THE NEW BEIJING SHANGHAI HUANGSHAN', 1, 'itinerary/TR0718-001.jpg', 'Great Wall, Tian An Men, Forbidden City, Nanjing Road, Dll', 'Singapore Airlines', '2018-07-17 07:57:21', '2018-07-17 07:57:21', 'adi', 'adi'),
	(2, 'TR0718/002', 'xxxx', 1, 'itinerary/TR0718-002.jpg', 'xxxx', 'xxxx', '2018-07-17 08:00:51', '2018-07-17 08:00:51', 'adi', 'adi'),
	(3, 'TR0718/003', 'xxxxx', 1, 'itinerary/TR0718-003.jpg', 'xxxxxx', 'xxxxxx', '2018-07-17 08:30:28', '2018-07-17 08:30:28', 'adi', 'adi'),
	(4, 'TR0718/004', 'xxxxxxxx', 1, 'itinerary/TR0718-004.jpg', 'xxxxx', 'xxss', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi');
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

-- Dumping data for table lavensia.m_schedule: ~9 rows (approximately)
/*!40000 ALTER TABLE `m_schedule` DISABLE KEYS */;
REPLACE INTO `m_schedule` (`ms_intinerary_id`, `ms_detail`, `ms_caption`, `ms_description`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
	(1, 1, 'SURABAYA – SINGAPORE – SHANGHA | No Meal', 'Berkumpul di Juanda Surabaya / Cengkareng Jakarta untuk penerbangan ke Beijing dengan transit terlebih dahulu di Singapore. Tiba di Beijing diantar ke hotel untuk istirahat.', '2018-07-17 07:57:21', '2018-07-17 07:57:21', 'adi', 'adi'),
	(1, 2, 'BEIJING | B / L / D', 'Tour mengunjungi Great Wall di pintu Joyungguan , Photo Stop di Bird Nest & Water Cube Building dan dilanjutkan makan malam Bebek Peking yang terkenal.', '2018-07-17 07:57:21', '2018-07-17 07:57:21', 'adi', 'adi'),
	(1, 3, 'BEIJING | B / L / D', 'Tour ke Tian An Men yang merupakan lapangan di pusat kota Beijing yang terkenal, kemudian ke Forbidden City yang merupakan pusat pemerintahan jaman kekaisaran, dilanjutkan ke WangFujing yang merupakan pusat pertokoan terkenal di Beijing.', '2018-07-17 07:57:21', '2018-07-17 07:57:21', 'adi', 'adi'),
	(2, 1, 'xxxx', 'xxxx', '2018-07-17 08:00:51', '2018-07-17 08:00:51', 'adi', 'adi'),
	(2, 2, 'xxxxx', 'xxxx', '2018-07-17 08:00:51', '2018-07-17 08:00:51', 'adi', 'adi'),
	(3, 1, 'xxxx', 'xxxxx', '2018-07-17 08:30:28', '2018-07-17 08:30:28', 'adi', 'adi'),
	(3, 2, 'xxxx', 'xxxxx', '2018-07-17 08:30:28', '2018-07-17 08:30:28', 'adi', 'adi'),
	(4, 1, '2323', '23232323232', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi'),
	(4, 2, '2323', '232323232', '2018-07-17 09:10:30', '2018-07-17 09:10:30', 'adi', 'adi');
/*!40000 ALTER TABLE `m_schedule` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
