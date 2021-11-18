/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.17-MariaDB : Database - estore_rep
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`estore_rep` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `estore_rep`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (7,'2014_10_12_000000_create_users_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2021_09_09_153041_create_ref_product_table_table',2),(10,'2021_09_09_154041_create_ref_category_sub_table',2),(11,'2021_09_09_155040_create_ref_brand_table',3),(12,'2021_09_09_155219_create_product_table',3),(13,'2021_09_09_155316_create_product_history_table',3),(14,'2021_09_09_155338_create_product_details_table',3),(15,'2021_09_09_155401_create_product_details_history_table',3),(16,'2014_10_12_100000_create_password_resets_table',4),(17,'2021_11_13_101913_create_user_table',5),(18,'2021_11_13_102550_create_user_activity_history_table',6),(19,'2021_11_13_144915_create_users_activity_history_table',7),(20,'2021_11_13_145809_create_users_table',8),(21,'2021_11_13_153442_create_users_activity_history_table',9);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned NOT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qnty` int(11) NOT NULL,
  `sts` tinyint(4) NOT NULL DEFAULT 1,
  `e_by` int(10) unsigned NOT NULL,
  `e_dt` datetime NOT NULL,
  `u_by` int(10) unsigned NOT NULL,
  `u_dt` datetime NOT NULL,
  `d_by` int(10) unsigned NOT NULL,
  `d_dt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product` */

/*Table structure for table `product_details` */

DROP TABLE IF EXISTS `product_details`;

CREATE TABLE `product_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sts` tinyint(4) NOT NULL DEFAULT 1,
  `e_by` int(10) unsigned NOT NULL,
  `e_dt` datetime NOT NULL,
  `u_by` int(10) unsigned NOT NULL,
  `u_dt` datetime NOT NULL,
  `d_by` int(10) unsigned NOT NULL,
  `d_dt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_details` */

/*Table structure for table `product_details_history` */

DROP TABLE IF EXISTS `product_details_history`;

CREATE TABLE `product_details_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_details__id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sts` tinyint(4) NOT NULL DEFAULT 1,
  `e_by` int(10) unsigned NOT NULL,
  `e_dt` datetime NOT NULL,
  `u_by` int(10) unsigned NOT NULL,
  `u_dt` datetime NOT NULL,
  `d_by` int(10) unsigned NOT NULL,
  `d_dt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_details_history` */

/*Table structure for table `product_history` */

DROP TABLE IF EXISTS `product_history`;

CREATE TABLE `product_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `cat_id` int(10) unsigned NOT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qnty` int(11) NOT NULL,
  `sts` tinyint(4) NOT NULL DEFAULT 1,
  `e_by` int(10) unsigned NOT NULL,
  `e_dt` datetime NOT NULL,
  `u_by` int(10) unsigned NOT NULL,
  `u_dt` datetime NOT NULL,
  `d_by` int(10) unsigned NOT NULL,
  `d_dt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_history` */

/*Table structure for table `ref_brand` */

DROP TABLE IF EXISTS `ref_brand`;

CREATE TABLE `ref_brand` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(10) unsigned NOT NULL,
  `sts` tinyint(4) NOT NULL DEFAULT 1,
  `e_by` int(10) unsigned NOT NULL,
  `e_dt` datetime NOT NULL,
  `u_by` int(10) unsigned NOT NULL,
  `u_dt` datetime NOT NULL,
  `d_by` int(10) unsigned NOT NULL,
  `d_dt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ref_brand` */

/*Table structure for table `ref_category_sub` */

DROP TABLE IF EXISTS `ref_category_sub`;

CREATE TABLE `ref_category_sub` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sts` tinyint(4) NOT NULL DEFAULT 1,
  `e_by` int(10) unsigned NOT NULL,
  `e_dt` datetime NOT NULL,
  `u_by` int(10) unsigned NOT NULL,
  `u_dt` datetime NOT NULL,
  `d_by` int(10) unsigned NOT NULL,
  `d_dt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ref_category_sub` */

/*Table structure for table `ref_product_category` */

DROP TABLE IF EXISTS `ref_product_category`;

CREATE TABLE `ref_product_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(10) unsigned NOT NULL,
  `sts` tinyint(4) NOT NULL DEFAULT 1,
  `e_by` int(10) unsigned NOT NULL,
  `e_dt` datetime NOT NULL,
  `u_by` int(10) unsigned NOT NULL,
  `u_dt` datetime NOT NULL,
  `d_by` int(10) unsigned NOT NULL,
  `d_dt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ref_product_category` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`) values (1,'Admin'),(2,'Supar Admin'),(3,'Sub Admin');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sts` tinyint(4) DEFAULT NULL,
  `e_dt` datetime DEFAULT NULL,
  `u_by` int(11) DEFAULT NULL,
  `u_dt` datetime DEFAULT NULL,
  `d_by` datetime DEFAULT NULL,
  `d_dt` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`text_pass`,`role`,`contact`,`date_of_birth`,`sts`,`e_dt`,`u_by`,`u_dt`,`d_by`,`d_dt`,`created_at`,`updated_at`) values (1,'Admin','admin@gmail.com',NULL,'$2y$10$CGTGuQxac1PhINzn0pO.AekR7CdK70xGi2NGHCa..lxX3CvpFOjlq','123456789',1,'01713869303','2021-11-01',1,NULL,NULL,NULL,NULL,NULL,NULL,'2021-11-18 14:24:04'),(10,'Fazley Rabbi','fazleyrabbicse@gmail.com',NULL,'$2y$10$M/DWx.pzIEAoK4tCQzEo6uy763/ep7fZWNFvnh61LPF3IdtJH2ChW','123456789',2,'01713869303','2021-11-02',1,NULL,NULL,NULL,NULL,NULL,'2021-11-13 15:52:10','2021-11-18 15:07:56'),(11,'FR','fr@gmail.com',NULL,'$2y$10$lf6TXh0lE3VkN4yW8t8ZoeeY1w9G8IT10OkLp.PjoSFit6Z4QoyRK','123456789',3,'01713869303','2021-11-18',1,NULL,NULL,NULL,NULL,NULL,'2021-11-13 15:57:09','2021-11-18 15:11:46'),(12,'gfdgsd','shakil@afafga.gfd',NULL,'$2y$10$qdPctvCJ.qebZ8JfsvZ2QeZZCgA5.Gl27mfPvASS3Z7L6g4RNVWwW','123456789',3,'01236547895','2021-11-18',1,NULL,NULL,NULL,NULL,NULL,'2021-11-13 16:23:43','2021-11-18 15:11:52'),(13,'Joy Karmakar','joy@gmail.com',NULL,'$2y$10$0h3nsnBeKfV.h7N54YZdoO4vsQIfjAkncAdRfUnkC.dw2ajv99tcy','123456789',1,'01713869303','2021-11-11',1,NULL,NULL,NULL,NULL,NULL,'2021-11-15 16:15:53','2021-11-18 17:08:15'),(14,'Miraj','miraj@gmail.com',NULL,'$2y$10$bjc0WZEwtqHamSBbU0WCKOLqo3dy3nBvpmDuo76s2bA7C3fCTtcjC','123456789',3,'01712876714','2021-11-16',1,NULL,NULL,NULL,NULL,NULL,'2021-11-15 17:19:51','2021-11-18 17:11:29'),(15,'ad','afa@faf.fs',NULL,'$2y$10$Rcj88Wl3R.MIueP8n3I0sOEh4YnTr.zBQpANFyGGKW12k7KF/MP/u','123456789',NULL,'01713869303','2021-11-01',0,NULL,NULL,NULL,NULL,NULL,'2021-11-18 15:41:11','2021-11-18 15:41:11'),(16,'asd','asd@gmail.com',NULL,'$2y$10$MmKBFWMAH4VsDemTXozHfOteC2ZRrla14tPFarwPoFWN3WnMmLsmC','123456789',NULL,'01713869303','2021-11-01',0,NULL,NULL,NULL,NULL,NULL,'2021-11-18 15:42:50','2021-11-18 15:42:50');

/*Table structure for table `users_activity_history` */

DROP TABLE IF EXISTS `users_activity_history`;

CREATE TABLE `users_activity_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `activities_Id` int(11) DEFAULT NULL,
  `activities_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activities_dt` datetime DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sys_link_cat_id` int(11) DEFAULT NULL,
  `sys_link_group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users_activity_history` */

insert  into `users_activity_history`(`id`,`activities_Id`,`activities_by`,`activities_dt`,`ip`,`table_name`,`sys_link_cat_id`,`sys_link_group_id`,`created_at`,`updated_at`) values (4,NULL,NULL,NULL,'::1','user',NULL,NULL,'2021-11-13 15:52:10','2021-11-13 15:52:10'),(5,NULL,NULL,NULL,'192.168.0.246','user',NULL,NULL,'2021-11-13 15:57:09','2021-11-13 15:57:09'),(6,NULL,NULL,NULL,'127.0.0.1','user',NULL,NULL,'2021-11-13 16:23:43','2021-11-13 16:23:43'),(7,NULL,NULL,NULL,'127.0.0.1','user',NULL,NULL,'2021-11-15 16:15:53','2021-11-15 16:15:53'),(8,NULL,NULL,NULL,'127.0.0.1','user',NULL,NULL,'2021-11-15 17:19:52','2021-11-15 17:19:52'),(9,NULL,NULL,NULL,'127.0.0.1','user',NULL,NULL,'2021-11-18 15:41:11','2021-11-18 15:41:11'),(10,NULL,NULL,NULL,'127.0.0.1','user',NULL,NULL,'2021-11-18 15:42:51','2021-11-18 15:42:51');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
