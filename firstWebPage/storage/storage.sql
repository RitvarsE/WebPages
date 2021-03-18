-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for storage
CREATE DATABASE IF NOT EXISTS `storage` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `storage`;

-- Dumping structure for table storage.flowers
CREATE TABLE IF NOT EXISTS `flowers` (
  `flower` varchar(30) NOT NULL,
  `price` int(5) NOT NULL,
  `amount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table storage.flowers: ~4 rows (approximately)
/*!40000 ALTER TABLE `flowers` DISABLE KEYS */;
INSERT INTO `flowers` (`flower`, `price`, `amount`) VALUES
	('Tulip', 5, 75),
	('Orchid', 10, 100),
	('Rose', 10, 300),
	('Daisy', 5, 100);
/*!40000 ALTER TABLE `flowers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
