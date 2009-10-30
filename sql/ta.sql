# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 127.0.0.1
# Database:             ta
# Server version:       5.1.23-rc-community
# Server OS:            Win32
# Target-Compatibility: MySQL 5.0
# Extended INSERTs:     Y
# max_allowed_packet:   1048576
# HeidiSQL version:     3.0 Revision: 572
# --------------------------------------------------------

/*!40100 SET CHARACTER SET cp1251*/;


#
# Database structure for database 'ta'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `ta` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `ta`;


#
# Table structure for table 'acos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;



#
# Dumping data for table 'acos'
#

/*!40000 ALTER TABLE `acos` DISABLE KEYS*/;
LOCK TABLES `acos` WRITE;
REPLACE INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES ('1',NULL,'',NULL,'controllers',1,66),
	('2',1,NULL,NULL,'Users',2,25),
	('3',2,NULL,NULL,'index',3,4),
	('4',2,NULL,NULL,'login',5,6),
	('5',2,NULL,NULL,'logout',7,8),
	('6',2,NULL,NULL,'reg',9,10),
	('7',2,NULL,NULL,'password_reset',11,12),
	('8',2,NULL,NULL,'edit',13,14),
	('9',2,NULL,NULL,'delete',15,16),
	('10',2,NULL,NULL,'view',17,18),
	('11',2,NULL,NULL,'acoset',19,20),
	('12',2,NULL,NULL,'aroset',21,22),
	('13',2,NULL,NULL,'permset',23,24),
	('14',1,NULL,NULL,'Pages',26,29),
	('15',14,NULL,NULL,'display',27,28),
	('16',1,NULL,NULL,'Brands',30,53),
	('17',16,NULL,NULL,'index',31,32),
	('18',16,NULL,NULL,'view',33,34),
	('19',16,NULL,NULL,'add',35,36),
	('20',16,NULL,NULL,'edit',37,38),
	('21',16,NULL,NULL,'delete',39,40),
	('22',1,NULL,NULL,'Groups',54,65),
	('23',22,NULL,NULL,'index',55,56),
	('24',22,NULL,NULL,'view',57,58),
	('25',22,NULL,NULL,'add',59,60),
	('26',22,NULL,NULL,'edit',61,62),
	('27',22,NULL,NULL,'delete',63,64),
	('28',16,'Brands','6','Brand::6',41,42),
	('29',16,'Brands','7','Brand::7',43,44),
	('30',16,'Brands','8','Brand::8',45,46),
	('31',16,'Brands','9','Brand::9',47,48),
	('32',16,'Brands','10','Brand::10',49,50),
	('33',16,'Brands','11','Brand::11',51,52);
UNLOCK TABLES;
/*!40000 ALTER TABLE `acos` ENABLE KEYS*/;


#
# Table structure for table 'aros'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;



#
# Dumping data for table 'aros'
#

/*!40000 ALTER TABLE `aros` DISABLE KEYS*/;
LOCK TABLES `aros` WRITE;
REPLACE INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES ('1',NULL,'Group','1','admin',1,4),
	('2',NULL,'Group','2','user',5,10),
	('3',NULL,'Group','2','user2',11,12),
	('4',NULL,'Group','2','user3',13,14),
	('5',NULL,'Group','2','user4',15,16),
	('6',NULL,'Group','2','user5',17,18),
	('7',1,'User','1','',2,3),
	('8',2,'User','2','',6,7),
	('9',NULL,'Group','3','',19,20),
	('10',2,'User','3','',8,9);
UNLOCK TABLES;
/*!40000 ALTER TABLE `aros` ENABLE KEYS*/;


#
# Table structure for table 'aros_acos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `aros_acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



#
# Dumping data for table 'aros_acos'
#

/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS*/;
LOCK TABLES `aros_acos` WRITE;
REPLACE INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES ('1','1','1','1','1','1','1'),
	('2','2','18','-1','-1','-1','-1'),
	('3','2','1','1','1','1','1'),
	('4','2','16','-1','-1','-1','-1'),
	('5','2','20','1','1','1','1'),
	('6','2','19','1','1','1','1'),
	('7','2','28','0','1','0','0'),
	('8','10','28','1','1','1','1');
UNLOCK TABLES;
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS*/;


#
# Table structure for table 'brands'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(250) DEFAULT NULL,
  `logo` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;



#
# Dumping data for table 'brands'
#

/*!40000 ALTER TABLE `brands` DISABLE KEYS*/;
LOCK TABLES `brands` WRITE;
REPLACE INTO `brands` (`id`, `name`, `url`, `logo`, `created`, `modified`) VALUES ('9','first','1234','asdf','2008-11-14 17:41:14','2008-11-14 17:41:14'),
	('10','first','1234','asdf','2008-11-14 17:42:02','2008-11-14 17:42:02'),
	('11','second','sd','va','2008-11-14 17:42:17','2008-11-14 17:42:17');
UNLOCK TABLES;
/*!40000 ALTER TABLE `brands` ENABLE KEYS*/;


#
# Table structure for table 'groups'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;



#
# Dumping data for table 'groups'
#

/*!40000 ALTER TABLE `groups` DISABLE KEYS*/;
LOCK TABLES `groups` WRITE;
REPLACE INTO `groups` (`id`, `name`) VALUES ('1','admin'),
	('2','user'),
	('3','guest');
UNLOCK TABLES;
/*!40000 ALTER TABLE `groups` ENABLE KEYS*/;


#
# Table structure for table 'users'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `group_id` int(11) NOT NULL DEFAULT '0',
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(50) DEFAULT NULL,
  `address` text,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;



#
# Dumping data for table 'users'
#

/*!40000 ALTER TABLE `users` DISABLE KEYS*/;
LOCK TABLES `users` WRITE;
REPLACE INTO `users` (`id`, `username`, `group_id`, `password`, `email`, `phone`, `address`, `active`, `created`, `birthday`) VALUES ('1','kondrat',1,'c129b324aee662b04eccf68babba85851346dff9','',NULL,NULL,1,NULL,NULL),
	('2','user',2,'c129b324aee662b04eccf68babba85851346dff9','',NULL,NULL,0,'2008-11-13 16:26:46',NULL),
	('3','admin',2,'c129b324aee662b04eccf68babba85851346dff9','',NULL,NULL,0,'2008-11-13 22:11:55',NULL);
UNLOCK TABLES;
/*!40000 ALTER TABLE `users` ENABLE KEYS*/;
