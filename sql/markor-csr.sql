# MySQL-Front 5.1  (Build 3.57)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: markor-csr
# ------------------------------------------------------
# Server version 5.5.25a

DROP DATABASE IF EXISTS `markor-csr`;
CREATE DATABASE `markor-csr` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `markor-csr`;

#
# Source for table category
#

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `slug` varchar(32) NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

#
# Dumping data for table category
#
LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table post
#

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL DEFAULT '',
  `excerpt` varchar(255) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `create_at` date NOT NULL DEFAULT '0000-00-00',
  `author` varchar(32) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `bg_image` varchar(255) NOT NULL DEFAULT '',
  `video_url` varchar(255) NOT NULL DEFAULT '' COMMENT '视频地址',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `organization` varchar(64) NOT NULL DEFAULT '',
  `job` varchar(32) NOT NULL DEFAULT '' COMMENT '岗位',
  `isTop` int(11) NOT NULL DEFAULT '0' COMMENT '是否精选',
  `link` varchar(128) NOT NULL DEFAULT '' COMMENT '跳转地址',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Dumping data for table post
#
LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;

/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table user
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `role` varchar(15) NOT NULL DEFAULT 'user',
  `auth_key` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Dumping data for table user
#
LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` VALUES (1,'admin@163.com','$2y$13$xeZCUNWFePqVsFG/g7oWgu5vM2a/teY3x5un1uNSFnUxzGSW8S6Vy','ADMIN','ft_9Jmc5JerGFqzwZSppx73an-FbVVHr');
INSERT INTO `user` VALUES (2,'super_admin@163.com','$2y$13$xeZCUNWFePqVsFG/g7oWgu5vM2a/teY3x5un1uNSFnUxzGSW8S6Vy','SUPER_ADMIN','ft_9Jmc5JerGFqzwZSppx73an-FbVVHd');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

#
#  Foreign keys for table post
#

ALTER TABLE `post`
ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);


/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
