# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: teach-it
# Generation Time: 2019-04-10 05:54:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `content`, `user_id`, `course_id`, `created_at`, `updated_at`)
VALUES
	(1,'First message!',1,3,'2019-04-10 05:07:33','2019-04-10 05:07:33'),
	(2,'2nd message!!',1,3,'2019-04-10 05:10:08','2019-04-10 05:10:08'),
	(4,'Hey dududue',2,3,'2019-04-10 05:26:15','2019-04-10 05:26:15'),
	(5,'ddd',2,3,'2019-04-10 05:35:07','2019-04-10 05:35:07'),
	(6,'cooooool',2,3,'2019-04-10 05:36:24','2019-04-10 05:36:24'),
	(7,'niceece',2,3,'2019-04-10 05:36:41','2019-04-10 05:36:41'),
	(8,'nieineine',2,3,'2019-04-10 05:36:46','2019-04-10 05:36:46'),
	(9,'fudge\n',2,3,'2019-04-10 05:38:01','2019-04-10 05:38:01'),
	(10,'niceniei',2,3,'2019-04-10 05:38:28','2019-04-10 05:38:28'),
	(11,'eee',2,3,'2019-04-10 05:38:48','2019-04-10 05:38:48'),
	(12,'kkkkk',2,3,'2019-04-10 05:39:25','2019-04-10 05:39:25'),
	(13,'eee',2,3,'2019-04-10 05:39:45','2019-04-10 05:39:45'),
	(14,'ddd',2,3,'2019-04-10 05:41:44','2019-04-10 05:41:44'),
	(15,'wowowowo',2,3,'2019-04-10 05:42:09','2019-04-10 05:42:09'),
	(16,'eeee',2,3,'2019-04-10 05:43:52','2019-04-10 05:43:52'),
	(17,'eee',2,3,'2019-04-10 05:45:19','2019-04-10 05:45:19'),
	(18,'working!!!!',2,3,'2019-04-10 05:45:42','2019-04-10 05:45:42'),
	(19,'working',2,3,'2019-04-10 05:45:48','2019-04-10 05:45:48'),
	(20,'dd',2,3,'2019-04-10 05:45:51','2019-04-10 05:45:51'),
	(21,'eeee',2,3,'2019-04-10 05:48:20','2019-04-10 05:48:20'),
	(22,'nice',2,3,'2019-04-10 05:48:24','2019-04-10 05:48:24'),
	(23,'swwweet',2,3,'2019-04-10 05:51:11','2019-04-10 05:51:11'),
	(24,'hopefully this works!',1,3,'2019-04-10 05:51:37','2019-04-10 05:51:37'),
	(25,'omg its working!!!!! :)',2,3,'2019-04-10 05:51:53','2019-04-10 05:51:53'),
	(26,'another test',1,4,'2019-04-10 05:52:22','2019-04-10 05:52:22'),
	(27,'dddd',2,3,'2019-04-10 05:52:43','2019-04-10 05:52:43'),
	(28,'nice\n',2,3,'2019-04-10 05:52:51','2019-04-10 05:52:51');

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
