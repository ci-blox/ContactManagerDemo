-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- Comments:                     Replace table prefix IGO_ with your own.
-- --------------------------------------------------------

-- table ci_blox.igo_contacts
DROP TABLE IF EXISTS `igo_contacts`;

DELETE FROM `igo_sec_role_permissions` WHERE `permission_id` IN
(
  SELECT `permission_id` FROM `igo_sec_permissions` WHERE `name` IN 
	('Contacts.Admin.Manage', 
	 'Contacts.Admin.Delete', 
	 'Contacts.Admin.Create' );
);

DELETE FROM `igo_sec_permissions` WHERE `name` IN 
	('Contacts.Admin.Manage', 
	 'Contacts.Admin.Delete', 
	 'Contacts.Admin.Create' );
