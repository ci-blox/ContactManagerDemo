-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- Comments:                     Replace table prefix IGO_ with your own.
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ci_blox.igo_contacts
CREATE TABLE IF NOT EXISTS `igo_contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) unsigned DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `modified_by` int(11) unsigned DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `salutation` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone_home` varchar(100) DEFAULT NULL,
  `phone_mobile` varchar(100) DEFAULT NULL,
  `phone_work` varchar(100) DEFAULT NULL,
  `phone_other` varchar(100) DEFAULT NULL,
  `phone_fax` varchar(100) DEFAULT NULL,
  `addr_street` varchar(150) DEFAULT NULL,
  `addr_city` varchar(100) DEFAULT NULL,
  `addr_state` varchar(100) DEFAULT NULL,
  `addr_postalcode` varchar(20) DEFAULT NULL,
  `addr_country` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `account_name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_contacts_last_first` (`last_name`,`first_name`,`deleted`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_blox.igo_contacts: ~1 rows (approximately)
/*!40000 ALTER TABLE `igo_contacts` DISABLE KEYS */;
INSERT INTO `igo_contacts` (`id`, `created_on`, `created_by`, `modified_on`, `modified_by`, `deleted`, `salutation`, `first_name`, `last_name`, `title`, `photo`, `phone_home`, `phone_mobile`, `phone_work`, `phone_other`, `phone_fax`, `addr_street`, `addr_city`, `addr_state`, `addr_postalcode`, `addr_country`, `birthdate`, `account_name`) VALUES
	(1, '2017-02-01 00:00:00', 0, '2017-02-01 00:00:00', 0, 0, 'Mr.', 'Sample', 'Contact', '', '', '8475555240', '8475555240', '8475555240', '8475555240', '8475551212', '91 Main Dr', 'Grayslake', 'Illinois', '60030', 'United States', '0000-00-00', ''),
/*!40000 ALTER TABLE `igo_contacts` ENABLE KEYS */;

-- Dumping data for table ci_blox.igo_sec_permissions: ~3 rows (approximately)
/*!40000 ALTER TABLE `igo_sec_permissions` DISABLE KEYS */;
INSERT INTO `igo_sec_permissions` (`permission_id`, `name`, `description`, `status`) VALUES
	(126, 'Contacts.Admin.Manage', 'Allow users to manage the contacts', 'active'),
	(127, 'Contacts.Admin.Delete', 'Allow users access to delete contacts', 'active'),
	(128, 'Contacts.Admin.Create', 'Allow users to add new contacts', 'active');
/*!40000 ALTER TABLE `igo_sec_permissions` ENABLE KEYS */;

-- Dumping data for table ci_blox.igo_sec_role_permissions: ~3 rows (approximately)
/*!40000 ALTER TABLE `igo_sec_role_permissions` DISABLE KEYS */;
INSERT INTO `igo_sec_role_permissions` (`role`, `permission_id`) VALUES
	('admin', 126),
	('admin', 127),
	('admin', 128);
/*!40000 ALTER TABLE `igo_sec_role_permissions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
