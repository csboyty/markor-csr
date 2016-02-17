/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;


DROP DATABASE IF EXISTS `markorcsr`;
CREATE DATABASE `markorcsr` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `markorcsr`;
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `slug` varchar(32) NOT NULL DEFAULT '',
  `parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

INSERT INTO `category` VALUES (1,'艺术家.成果','艺术家.成果',0);
INSERT INTO `category` VALUES (2,'艺术家.动态','艺术家.动态',0);
INSERT INTO `category` VALUES (3,'项目清单','项目清单',0);
INSERT INTO `category` VALUES (4,'快乐美术教师捐赠','快乐美术教师捐赠',0);
INSERT INTO `category` VALUES (5,'志愿者活动','志愿者活动',0);
INSERT INTO `category` VALUES (6,'儿童画征集&产品开发','儿童画征集&产品开发',0);
INSERT INTO `category` VALUES (7,'教师培训','教师培训',0);
INSERT INTO `category` VALUES (8,'奖学金活动','奖学金活动',0);
INSERT INTO `category` VALUES (9,'大学生感言','大学生感言',0);
INSERT INTO `category` VALUES (10,'实习生','实习生',0);
INSERT INTO `category` VALUES (11,'爱心产品','爱心产品',1);
INSERT INTO `category` VALUES (12,'学生作品','学生作品',1);
INSERT INTO `category` VALUES (13,'捐赠名单','捐赠名单',4);
INSERT INTO `category` VALUES (14,'活动感言','活动感言',4);
INSERT INTO `category` VALUES (15,'历年活动','历年活动',4);
INSERT INTO `category` VALUES (16,'志愿者感言','志愿者感言',5);
INSERT INTO `category` VALUES (17,'历年活动','历年活动',5);
INSERT INTO `category` VALUES (18,'小学生感言','小学生感言',6);
INSERT INTO `category` VALUES (19,'以往作品','以往作品',6);
INSERT INTO `category` VALUES (20,'征集函','征集函',6);
INSERT INTO `category` VALUES (21,'培训反馈','培训反馈',7);
INSERT INTO `category` VALUES (22,'历年活动','历年活动',7);
INSERT INTO `category` VALUES (23,'实习生风采','实习生风采',10);
INSERT INTO `category` VALUES (24,'招募岗位','招募岗位',10);
INSERT INTO `category` VALUES (25,'视频','视频',0);
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
  `video_url` varchar(255) NOT NULL DEFAULT '',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `post` VALUES (1,'xxxx','','<p>xxxxxx</p>','2016-02-15','','http://7xqx6h.com1.z0.glb.clouddn.com/1455503259529.jpg','','',8,1);
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `role` varchar(15) NOT NULL DEFAULT 'user',
  `auth_key` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `user` VALUES (1,'admin@163.com','$2y$13$xeZCUNWFePqVsFG/g7oWgu5vM2a/teY3x5un1uNSFnUxzGSW8S6Vy','ADMIN','ft_9Jmc5JerGFqzwZSppx73an-FbVVHr');

ALTER TABLE `post`
ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
