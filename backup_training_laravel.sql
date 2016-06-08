/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.13-MariaDB : Database - laravel_base
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel_base` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `laravel_base`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_post_id_foreign` (`post_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `comments` */

insert  into `comments`(`id`,`created_at`,`updated_at`,`content`,`seen`,`user_id`,`post_id`) values (1,'2016-06-08 07:14:42','2016-06-08 07:14:42','<p>COMMENTS</p>\r\n\r\n<p>COMMENTS</p>\r\n\r\n<p>COMMENTS</p>\r\n\r\n<p>COMMENTS</p>\r\n\r\n<p>COMMENTS</p>\r\n\r\n<p>COMMENTS</p>\r\n\r\n<p>COMMENTS</p>\r\n\r\n<p>COMMENTS</p>\r\n',0,6,1);

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `contacts` */

insert  into `contacts`(`id`,`name`,`email`,`text`,`seen`,`created_at`,`updated_at`) values (1,'Tiến Văn Nguyễn','tiennv02@gmail.com','Si vous désirez nous laisser un message veuillez remplir le formulaire suivant :\r\n',0,'2016-06-07 07:14:07','2016-06-07 07:14:07'),(2,'Tiến Văn Nguyễn','tiennv02@gmail.com','Si vous désirez nous laisser un message veuillez remplir le formulaire suivant :\r\n',0,'2016-06-07 07:18:04','2016-06-07 07:18:04'),(3,'Tiến Văn Nguyễn','tiennv02@gmail.com','Si vous désirez nous laisser un message veuillez remplir le formulaire suivant :\r\nSi vous désirez nous laisser un message veuillez remplir le formulaire suivant :\r\n\r\nSi vous désirez nous laisser un message veuillez remplir le formulaire suivant :\r\n\r\n',0,'2016-06-07 07:21:18','2016-06-07 07:21:18'),(4,'Tiến Văn Nguyễn','tiennv02@gmail.com','1',0,'2016-06-07 07:27:04','2016-06-07 07:27:04'),(5,'Tiến Văn Nguyễn','tiennv02@gmail.com','If you wish to send a message please fill this form :\r\n',0,'2016-06-07 07:32:47','2016-06-07 07:32:47'),(6,'Tiến Văn Nguyễn','tiennv02@gmail.com','If you wish to send a message please fill this form :\r\n',0,'2016-06-07 07:51:47','2016-06-07 07:51:47'),(7,'Tiến Văn Nguyễn','tiennv02@gmail.com','If you wish to send a message please fill this form :\r\n',0,'2016-06-07 07:51:58','2016-06-07 07:51:58'),(8,'Tiến Văn Nguyễn','tiennv02@gmail.com','546',0,'2016-06-07 07:58:02','2016-06-07 07:58:02'),(9,'Tiến Văn Nguyễn','tiennv02@gmail.com','If you wish to send a message please fill this form :\r\n',0,'2016-06-07 08:07:16','2016-06-07 08:07:16'),(10,'Tiến Văn Nguyễn','tiennv02@gmail.com','If you wish to send a message please fill this form :\r\n',0,'2016-06-07 08:23:13','2016-06-07 08:23:13'),(11,'Tiến Văn Nguyễn','tiennv02@gmail.com','876',0,'2016-06-07 08:24:56','2016-06-07 08:24:56'),(12,'Tiến Văn Nguyễn','tiennv02@gmail.com','If you wish to send a message please fill this form :\r\n',0,'2016-06-07 08:31:40','2016-06-07 08:31:40'),(13,'Tiến Văn Nguyễn','tiennv02@gmail.com','f',0,'2016-06-07 08:33:02','2016-06-07 08:33:02'),(14,'Tiến Văn Nguyễn','tiennv02@gmail.com','If you wish to send a message please fill this form :\r\n',0,'2016-06-07 08:34:15','2016-06-07 08:34:15'),(15,'Tiến Văn Nguyễn','tiennv02@gmail.com','5',0,'2016-06-07 08:35:13','2016-06-07 08:35:13'),(16,'Tiến Văn Nguyễn','tiennv02@gmail.com','f',0,'2016-06-07 08:40:30','2016-06-07 08:40:30'),(17,'Tiến Văn Nguyễn','tiennv02@gmail.com','f',0,'2016-06-07 09:08:42','2016-06-07 09:08:42'),(18,'Tiến Văn Nguyễn','tiennv02@gmail.com','f',0,'2016-06-07 09:15:47','2016-06-07 09:15:47'),(19,'Tiến Văn Nguyễn','tiennv02@gmail.com','request_request',0,'2016-06-07 09:20:32','2016-06-07 09:20:32'),(20,'Tiến Văn Nguyễn','tiennv02@gmail.com','Tiến Văn Nguyễn',0,'2016-06-07 09:48:28','2016-06-07 09:48:28'),(21,'Tiến Văn Nguyễn','tiennv02@gmail.com','0',0,'2016-06-07 09:49:07','2016-06-07 09:49:07'),(22,'Tiến Văn Nguyễn','tiennv02@gmail.com','g',0,'2016-06-07 09:52:32','2016-06-07 09:52:32'),(23,'Tiến Văn Nguyễn','tiennv02@gmail.com','8',0,'2016-06-07 10:09:58','2016-06-07 10:09:58'),(24,'Tiến Văn Nguyễn','tiennv02@gmail.com','If you wish to send a message please fill this form :\r\n',0,'2016-06-07 10:11:11','2016-06-07 10:11:11'),(25,'Tiến Văn Nguyễn','tiennv02@gmail.com','Your message',0,'2016-06-07 10:11:53','2016-06-07 10:11:53'),(26,'Tiến Văn Nguyễn','tiennv02@gmail.com','If you wish to send a message please fill this form :\r\n',0,'2016-06-07 10:17:25','2016-06-07 10:17:25');

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descriptions` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`id`,`name`,`email`,`descriptions`,`created_at`,`updated_at`) values (1,'Nguyen Van A','anv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(2,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(3,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(4,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(5,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(6,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(7,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(8,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(9,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(10,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(11,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(12,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(13,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(14,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(15,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(16,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(17,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(18,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(19,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(20,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(21,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(22,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(23,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(24,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(25,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30'),(26,'Nguyen Van B','bnv@laravel_training.com','laravel_training.com','2016-06-06 10:10:10','2016-06-06 20:20:30');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2014_10_21_105844_create_roles_table',1),('2014_10_21_110325_create_foreign_keys',1),('2014_10_24_205441_create_contact_table',1),('2014_10_26_172107_create_posts_table',1),('2014_10_26_172631_create_tags_table',1),('2014_10_26_172904_create_post_tag_table',1),('2014_10_26_222018_create_comments_table',1),('2016_05_29_190327_create_customers_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `post_tag` */

DROP TABLE IF EXISTS `post_tag`;

CREATE TABLE `post_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tag_post_id_foreign` (`post_id`),
  KEY `post_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `post_tag` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`created_at`,`updated_at`,`title`,`slug`,`summary`,`content`,`seen`,`active`,`user_id`) values (1,'2016-06-06 00:00:00','2016-06-06 00:00:00','Returning Strings From Routes','1','However, for most routes and controller actions, you will be returning a full Illuminate\\Http\\Response instance or a view. Returning a full Response instance allows you to customize the response\'s HTTP status code and headers. A Response instance inherits from the Symfony\\Component\\HttpFoundation\\Response class, providing a variety of methods for building HTTP responses:\r\n\r\n','However, for most routes and controller actions, you will be returning a full Illuminate\\Http\\Response instance or a view. Returning a full Response instance allows you to customize the response\'s HTTP status code and headers. A Response instance inherits from the Symfony\\Component\\HttpFoundation\\Response class, providing a variety of methods for building HTTP responses:\r\n\r\n',0,1,6),(2,'2016-05-05 00:00:00','2016-05-05 00:00:00','The most basic response from a Laravel route is a string:','2','The most basic response from a Laravel route is a string:','The most basic response from a Laravel route is a string:',0,1,6);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`title`,`slug`,`created_at`,`updated_at`) values (1,'admin','user',NULL,NULL);

/*Table structure for table `tags` */

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tag` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_tag_unique` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tags` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `valid` tinyint(1) NOT NULL DEFAULT '0',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`role_id`,`seen`,`valid`,`confirmed`,`confirmation_code`,`created_at`,`updated_at`,`remember_token`) values (6,'register','tiennv02@gmail.com','$2y$10$NraFPVO14qay1jyOzQ8FseMZVPm857MTi3f6rRhpeXrNiLCiLtHuG',1,0,0,1,NULL,'2016-06-08 06:51:25','2016-06-08 08:39:40','flBJyvx9kRqXARH7J38cUQ5ttTUjyWuaS5EqK7F4YJIr9NB2wAivnXadGWvn');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
