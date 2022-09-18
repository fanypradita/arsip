/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.16-MariaDB : Database - dblogin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dblogin` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dblogin`;

/*Table structure for table `forum_login` */

DROP TABLE IF EXISTS `forum_login`;

CREATE TABLE `forum_login` (
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `forum_login` */

insert  into `forum_login`(`username`,`password`) values 
('fany','11111'),
('fany','11111'),
('fany','4dd76702f6dd1b5a69b84457817ce60c'),
('fany','4dd76702f6dd1b5a69b84457817ce60c');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
