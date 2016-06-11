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

/*Table structure for table `contact_us` */

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `contact_us` */

insert  into `contact_us`(`id`,`name`,`phone`,`email`,`subject`,`message`,`created_at`) values (1,'dsdv',NULL,'rahulalampotta@gmail.com','asdcasdv','asvasv',NULL),(2,'dsdv Testt',NULL,'rahulalampotta@gmail.com','asdcasdv','asvasv','2016-06-04 21:03:31');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `donation_history` */

insert  into `donation_history`(`id`,`user_id`,`date`) values (1,10,'2016-02-08'),(2,10,'2016-05-04'),(3,1,'2016-06-11'),(4,1,'2016-06-11');

/*Table structure for table `login_history` */

DROP TABLE IF EXISTS `login_history`;

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `login_at` timestamp NULL DEFAULT NULL,
  `logout_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `login_history` */

insert  into `login_history`(`id`,`user_id`,`login_at`,`logout_at`) values (1,4,'2016-05-29 18:42:13',NULL),(2,4,'2016-06-04 18:58:48',NULL),(3,4,'2016-06-05 11:52:48','2016-06-05 14:21:51'),(4,10,'2016-06-05 14:22:50','2016-06-05 14:24:22'),(5,10,'2016-06-05 14:24:36','2016-06-05 14:45:40'),(6,35,'2016-06-05 14:49:59',NULL),(7,10,'2016-06-10 18:30:33',NULL),(8,10,'2016-06-11 08:01:42',NULL),(9,3,'2016-06-11 10:16:32',NULL),(10,10,'2016-06-11 16:41:56','2016-06-11 16:44:24'),(11,3,'2016-06-11 16:44:42','2016-06-11 18:14:45'),(12,1,'2016-06-11 18:15:03',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `members` */

insert  into `members`(`id`,`name`,`dob`,`phone`,`blood_group_id`,`user_id`,`created_at`,`availability`) values (1,'a','2016-06-01',NULL,3,35,'2016-06-05 19:07:42',1),(2,'Arun','1999-10-13',NULL,5,35,'2016-06-05 19:07:42',1),(3,'Josw','2016-06-01',NULL,8,35,'2016-06-05 19:07:42',1),(4,'GPTC','1970-01-01',NULL,0,35,'2016-06-05 19:10:47',1),(5,'Rahul R P','2016-06-01',NULL,5,35,'2016-06-05 19:11:39',0),(6,'dfFF','2016-06-01',NULL,3,35,'2016-06-05 19:21:59',1),(7,'Amii','2016-06-09',NULL,6,35,'2016-06-05 19:22:46',1),(12,'Jose M','2004-06-29','8989898989',6,3,'2016-06-11 21:05:57',1),(13,'Manu Nair','1990-01-30','2232323232',6,3,'2016-06-11 21:06:16',1),(14,'Kishore','2006-10-25','6565898989',7,3,'2016-06-11 21:06:34',0);

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`blood_group_id`,`name`,`email`,`password`,`phone`,`gender`,`dob`,`address`,`avg_no_employees`,`location`,`state_id`,`district_id`,`img`,`created_at`,`status`,`user_type`,`availability`) values (1,NULL,'Admin','admin@mail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9809534216','male','2016-05-14',NULL,NULL,'Tvm',1,1,NULL,'2016-05-29 18:57:29',1,1,0),(3,NULL,'Organization','org@mail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','898989899',NULL,'1970-01-01','lOrem ipsum dummy dolor sit amet','20',NULL,1,13,NULL,'2016-05-29 21:30:39',1,3,1),(4,2,'asf','saf@esfwe.ytjrt','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','98789789','male','2016-05-02',NULL,NULL,'lo',1,12,NULL,'2016-05-29 22:10:51',2,2,1),(5,4,'Raju','raju@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898653200','male','1991-02-27',NULL,NULL,'Trivandrum',1,7,NULL,'2016-06-04 22:25:11',1,2,1),(6,5,'Jose','jose1@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:16',2,2,1),(7,6,'Jose2','jose2@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:17',1,2,0),(8,6,'Jose3','jose3@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:17',1,2,1),(9,4,'Jose','jose4@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:17',1,2,0),(10,5,'Janu L','janu@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1993-08-05',NULL,NULL,'Kollam',1,13,'7fb7ad66161361ba656444dc9ada7d19.jpg','2016-06-04 22:26:17',1,2,1),(11,5,'Jose6','jose6@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:17',1,2,1),(12,2,'Jose7','jose7@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:17',1,2,0),(13,6,'Jose8','jose8@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:17',1,2,1),(14,1,'Jose9','jose9@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:17',1,2,1),(15,5,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:17',1,2,1),(16,4,'Jose10','jose10@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:17',1,2,1),(17,3,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(18,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(19,2,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(20,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(21,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(22,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(23,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(24,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(25,5,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(26,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(27,4,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(28,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(29,3,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:18',1,2,1),(30,3,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:19',1,2,1),(31,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:19',1,2,1),(32,1,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:19',1,2,1),(33,6,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:19',1,2,1),(34,2,'Jose','jose@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','9898989890','male','1975-07-10',NULL,NULL,'Kollam',1,12,NULL,'2016-06-04 22:26:19',1,2,1),(35,NULL,'GPTC','gptc@gmail.com','WBZN3CFJXPc2ScxZq7LE3G3e17i1GGBZj9fArPBaApk','1234567890',NULL,NULL,'Lorem ipsum dummy doolorr','360',NULL,1,2,NULL,'2016-06-05 18:19:50',1,3,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
