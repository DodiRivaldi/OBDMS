/*
SQLyog Community v10.11 
MySQL - 5.6.17 : Database - odbms
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`odbms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `odbms`;

/*Table structure for table `blood_groups` */

DROP TABLE IF EXISTS `blood_groups`;

CREATE TABLE `blood_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `blood_groups` */

insert  into `blood_groups`(`id`,`name`) values (1,'A+'),(2,'A-'),(3,'B+'),(4,'B-'),(5,'AB+'),(6,'AB-'),(7,'O+'),(8,'O-');


DROP TABLE IF EXISTS `contact_us`;

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

/*Data for the table `contact_us` */

/*Table structure for table `districts` */

DROP TABLE IF EXISTS `districts`;

CREATE TABLE `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `districts` */

insert  into `districts`(`id`,`name`,`state_id`) values (1,'	Alappuzha',1),(2,'Ernakulam',1),(3,'Idukki',1),(4,'Kannur',1),(5,'Kasargod',1),(6,'Kollam',1),(7,'	Kottayam',1),(8,'Kozhikode',1),(9,'Malappuram',1),(10,'Palakkad',1),(11,'Pathanamthitta',1),(12,'Thiruvananthapuram',1),(13,'	Thrissur',1),(14,'	Wayanad',1);

/*Table structure for table `donation_history` */

DROP TABLE IF EXISTS `donation_history`;

CREATE TABLE `donation_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


/*Table structure for table `login_history` */

DROP TABLE IF EXISTS `login_history`;

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `login_at` timestamp NULL DEFAULT NULL,
  `logout_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `blood_group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'organization',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `availability` int(2) NOT NULL DEFAULT '1' COMMENT '0-unavailable, 1-available',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


/*Table structure for table `states` */

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `states` */

insert  into `states`(`id`,`name`) values (1,'Kerala');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blood_group_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `avg_no_employees` varchar(10) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '0->pending, 1->active, 2->blocked',
  `user_type` int(2) NOT NULL DEFAULT '2' COMMENT '1-admin, 2-user, 3-organization',
  `availability` int(2) DEFAULT '1' COMMENT '0-unavailable, 1-available',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`blood_group_id`,`name`,`email`,`password`,`phone`,`gender`,`dob`,`address`,`avg_no_employees`,`location`,`state_id`,`district_id`,`img`,`created_at`,`status`,`user_type`,`availability`) values (1,1,'Admin','admin@mail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9809534216','male','2000-05-14',NULL,NULL,'Tvm',1,1,'','2016-05-29 18:57:29',1,1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
