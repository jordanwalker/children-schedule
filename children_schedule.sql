/*
SQLyog Ultimate v9.63 
MySQL - 5.5.16 : Database - children_schedule
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`children_schedule` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `children_schedule`;

/*Table structure for table `change` */

DROP TABLE IF EXISTS `change`;

CREATE TABLE `change` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `child_id` int(12) NOT NULL,
  `time` time NOT NULL,
  `status` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `change` */

/*Table structure for table `child` */

DROP TABLE IF EXISTS `child`;

CREATE TABLE `child` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `unique` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `eye_color` varchar(50) NOT NULL,
  `hair_color` varchar(50) NOT NULL,
  `race` varchar(255) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `social` int(9) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`unique`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `child` */

/*Table structure for table `day` */

DROP TABLE IF EXISTS `day`;

CREATE TABLE `day` (
  `id` int(11) NOT NULL,
  `arrival` datetime NOT NULL,
  `departure` datetime NOT NULL,
  `datetime` datetime NOT NULL,
  `summary` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `day` */

/*Table structure for table `eat` */

DROP TABLE IF EXISTS `eat`;

CREATE TABLE `eat` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `child_id` int(12) NOT NULL,
  `food_id` int(12) NOT NULL,
  `start` time NOT NULL,
  `stop` time NOT NULL,
  `amount` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `food_id` (`food_id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `eat` */

/*Table structure for table `food` */

DROP TABLE IF EXISTS `food`;

CREATE TABLE `food` (
  `id` int(12) NOT NULL,
  `child_id` int(12) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `arrival` time NOT NULL,
  `departure` time NOT NULL,
  `instructions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `food` */

/*Table structure for table `health` */

DROP TABLE IF EXISTS `health`;

CREATE TABLE `health` (
  `id` int(12) NOT NULL DEFAULT '0',
  `child_id` int(12) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `medication` varchar(255) NOT NULL,
  `pediatrician` varchar(255) NOT NULL,
  `duration` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `health` */

/*Table structure for table `sleep` */

DROP TABLE IF EXISTS `sleep`;

CREATE TABLE `sleep` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `child_id` int(12) NOT NULL,
  `start` time NOT NULL,
  `stop` time NOT NULL,
  `temperature` varchar(5) NOT NULL,
  `humidity` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sleep` */

/*Table structure for table `supplies` */

DROP TABLE IF EXISTS `supplies`;

CREATE TABLE `supplies` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `child_id` int(12) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `supplies` */

/*Table structure for table `watch` */

DROP TABLE IF EXISTS `watch`;

CREATE TABLE `watch` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `child_id` int(12) NOT NULL,
  `signs` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `events` varchar(255) NOT NULL,
  `oral_intake` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `watch` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
