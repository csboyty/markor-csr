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
  `slug` varchar(32) NOT NULL DEFAULT '' COMMENT '别名',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='分类表';

#
# Dumping data for table category
#
LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` VALUES (1,'艺术家荣誉','艺术家荣誉',0);
INSERT INTO `category` VALUES (2,'艺术家动态','艺术家动态',0);
INSERT INTO `category` VALUES (3,'快乐美术教室','快乐美术教室',0);
INSERT INTO `category` VALUES (4,'历年活动','历年活动',3);
INSERT INTO `category` VALUES (5,'捐赠名单','捐赠名单',3);
INSERT INTO `category` VALUES (6,'教师培训','教师培训',0);
INSERT INTO `category` VALUES (7,'历年活动','历年活动',6);
INSERT INTO `category` VALUES (8,'教师感言','教师感言',6);
INSERT INTO `category` VALUES (9,'教师作品','教师作品',6);
INSERT INTO `category` VALUES (10,'志愿者活动','志愿者活动',0);
INSERT INTO `category` VALUES (11,'历年活动','历年活动',10);
INSERT INTO `category` VALUES (12,'志愿者感言','志愿者感言',10);
INSERT INTO `category` VALUES (13,'志愿者培训','志愿者培训',10);
INSERT INTO `category` VALUES (14,'儿童画','儿童画',0);
INSERT INTO `category` VALUES (15,'儿童画征集','儿童画征集',14);
INSERT INTO `category` VALUES (16,'爱心产品','爱心产品',14);
INSERT INTO `category` VALUES (17,'儿童画视频','儿童画视频',14);
INSERT INTO `category` VALUES (18,'高校奖学金活动','高校奖学金活动',0);
INSERT INTO `category` VALUES (19,'大学生作品','大学生作品',0);
INSERT INTO `category` VALUES (20,'实习生','实习生招募',0);
INSERT INTO `category` VALUES (21,'实习生感言','实习生感言',20);
INSERT INTO `category` VALUES (22,'招聘','招聘',20);
INSERT INTO `category` VALUES (23,'艺术传承','艺术传承',0);
INSERT INTO `category` VALUES (24,'人物故事','人物故事',0);
INSERT INTO `category` VALUES (25,'第四届“我的童话世界”儿童绘画作品征集活动“美丽家乡”','第四届“我的童话世界”儿童绘画作品征集活动“美丽家乡”',15);
INSERT INTO `category` VALUES (26,'视频','视频',0);
INSERT INTO `category` VALUES (27,'微信头条','微信头条',0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table post
#

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `thumb` varchar(128) DEFAULT NULL COMMENT '缩略图',
  `bg_image` varchar(128) DEFAULT NULL,
  `title` varchar(32) DEFAULT NULL,
  `excerpt` varchar(512) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(32) DEFAULT NULL,
  `content` mediumtext,
  `memo` varchar(255) DEFAULT NULL COMMENT '备注，主要放url，职务等',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

#
# Dumping data for table post
#
LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;

INSERT INTO `post` VALUES (2,1,1,'http://7xqx6h.com1.z0.glb.clouddn.com/2930745470072.jpg',NULL,NULL,'YII 快速创建项目GII Yii 是一个基于组件、纯OOP的、用于开发大型 Web 应用的...模型类建好之后,我们就可以',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (3,2,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11722998098776.png','http://7xqx6h.com1.z0.glb.clouddn.com/10257625463533.jpg','动态1','测试数据测试数据测试数据测试数据','2016-06-16',NULL,'<p>ssssdddddddddddddd</p>','1');
INSERT INTO `post` VALUES (4,4,1,'http://7xqx6h.com1.z0.glb.clouddn.com/2930752317134.png',NULL,'测试数据32222','单打独斗','2016-06-10',NULL,'                    <p>ddd</p>',NULL);
INSERT INTO `post` VALUES (6,5,1,NULL,NULL,NULL,NULL,NULL,NULL,'<table style=\"height: 231px;\" width=\"607\">\n<tbody>\n<tr>\n<td>1</td>\n<td>2</td>\n<td>4</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>6</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>\n</tr>\n<tr>\n<td>2</td>\n<td>&nbsp;</td>\n<td>8</td>\n</tr>\n</tbody>\n</table>',NULL);
INSERT INTO `post` VALUES (7,7,1,'http://7xqx6h.com1.z0.glb.clouddn.com/14653778476290.png',NULL,'ddddd','aaaa','2016-06-25',NULL,'<p>dddddddddd</p>',NULL);
INSERT INTO `post` VALUES (8,8,1,'http://7xqx6h.com1.z0.glb.clouddn.com/8794172057466.png',NULL,NULL,'展览当日，几十平米的“新通道”项目展区直观呈现了在保护侗锦、 及传统手工艺等国家级非物质文化遗产过程中所取得的成果， 一件件作品将侗族传统文化艺术元素融入现代生活中，创新的形式与内容将人们引入到一个充满艺术与传统的世界中。',NULL,'dd',NULL,'ddd');
INSERT INTO `post` VALUES (9,9,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4397088989034.png',NULL,'ssssss','333',NULL,'2ddd','www',NULL);
INSERT INTO `post` VALUES (10,13,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11725592171936.png',NULL,'测试数据','测试数据测试数据测试数据测试数据测试数据测试数据',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (11,25,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4397111960022.png',NULL,'测试数据',NULL,NULL,'xxxx',NULL,NULL);
INSERT INTO `post` VALUES (12,18,1,'http://7xqx6h.com1.z0.glb.clouddn.com/5862854014736.png',NULL,'清华大学','作为美克美家“艺术·家”企业社会责任项目的新起点，美克美家于2009年12月10日在清华大学美术学院启动了“艺术·家”奖学金项目暨第一届“艺术·家”奖学金颁奖仪式，5名在校本科生凭借优异的成绩与突出的艺术创作理念获得美克美家提供的奖学金。\n截至目前，已有X名清华学生获得“艺术·家”奖学金。',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (13,23,1,'http://7xqx6h.com1.z0.glb.clouddn.com/1465716913645.jpg',NULL,'addd','adfadf','2016-06-11',NULL,'<p>aaaaaaaaaaaaddddddddddddddddd</p>','dadfff');
INSERT INTO `post` VALUES (14,24,1,'http://7xqx6h.com1.z0.glb.clouddn.com/2931437075738.png',NULL,'湖南侗族文化','这里是摘要','2016-06-18','杨苗','<p>dadffffffffff<span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span><span style=\"font-size: 11px;\">dadffffffffff</span></p>',NULL);
INSERT INTO `post` VALUES (15,27,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11726394070616.jpg',NULL,'dfakjfdlkajldfa',NULL,NULL,NULL,NULL,'http://www.baidu.com');
INSERT INTO `post` VALUES (16,27,1,'http://7xqx6h.com1.z0.glb.clouddn.com/10260604323438.png',NULL,'第二条数据',NULL,NULL,NULL,NULL,'http://www.163.com');
INSERT INTO `post` VALUES (17,26,1,'http://7xqx6h.com1.z0.glb.clouddn.com/13192248271023.jpg',NULL,'第一个视频',NULL,'2016-06-17',NULL,NULL,'<iframe height=498 width=510 src=\"http://player.youku.com/embed/XMTYwODE0MjIxMg==\" frameborder=0 allowfullscreen></iframe>');
INSERT INTO `post` VALUES (18,18,1,'http://7xqx6h.com1.z0.glb.clouddn.com/1466040432091.jpg',NULL,'同济大学','作为美克美家“艺术·家”企业社会责任项目在华东地区启动的首站，2009年12月22日，美克美家参加了同济大学举行的“2009年同济大学社会捐赠奖学金颁奖典礼”，5名在校本科生获得了美克美家提供的奖学金资助。\n截至目前，已有X名同济学生获得“艺术·家”奖学金。',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (19,1,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4398200787339.jpg',NULL,NULL,'杰出艺术家',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (20,1,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4398200866548.jpg',NULL,NULL,'齐白石大奖',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (21,1,1,'http://7xqx6h.com1.z0.glb.clouddn.com/5864267934052.jpg',NULL,NULL,'金鸡百花',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (22,2,1,'http://7xqx6h.com1.z0.glb.clouddn.com/2932136750004.jpg','http://7xqx6h.com1.z0.glb.clouddn.com/10262478703512.jpg','美克美家，艺术.家','美克美家，艺术.家美克美家，艺术.家美克美家，艺术.家美克美家，艺术.家美克美家，艺术.家美克美家，艺术.家','2016-06-16',NULL,'<p>美克美家，艺术.家美克美家，艺术.家美克美家，艺术.家美克美家，艺术.家美克美家，艺术.家</p>','0');
INSERT INTO `post` VALUES (23,2,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4398432707808.jpg','http://7xqx6h.com1.z0.glb.clouddn.com/2932288497082.jpg','动态2','动态2动态2动态2动态2','2016-06-16',NULL,'<p>动态2动态2动态2动态2动态2动态2动态2</p>','1');
INSERT INTO `post` VALUES (24,2,1,'http://7xqx6h.com1.z0.glb.clouddn.com/7330721823670.png','http://7xqx6h.com1.z0.glb.clouddn.com/5864577476716.jpg','动态3','动态3','2016-06-18',NULL,'<p>动态3动态3动态3动态3动态3动态3动态3</p>','1');
INSERT INTO `post` VALUES (25,2,1,'http://7xqx6h.com1.z0.glb.clouddn.com/10263011177951.jpg','http://7xqx6h.com1.z0.glb.clouddn.com/2932288915232.jpg','动态4','动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4','2016-06-10',NULL,'<p>动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4动态4</p>','0');
INSERT INTO `post` VALUES (26,4,1,'http://7xqx6h.com1.z0.glb.clouddn.com/10263012009796.png',NULL,'快乐美术教师历年活动1','快乐美术教师历年活动1快乐美术教师历年活动1快乐美术教师历年活动1','2016-06-10',NULL,'<p>快乐美术教师历年活动1快乐美术教师历年活动1快乐美术教师历年活动1快乐美术教师历年活动1</p>',NULL);
INSERT INTO `post` VALUES (27,4,1,'http://7xqx6h.com1.z0.glb.clouddn.com/1466144634844.jpg',NULL,'快乐美术教师历年活动2','快乐美术教师历年活动2快乐美术教师历年活动2','2016-06-16',NULL,'<p>快乐美术教师历年活动2快乐美术教师历年活动2快乐美术教师历年活动2快乐美术教师历年活动2</p>',NULL);
INSERT INTO `post` VALUES (28,4,1,'http://7xqx6h.com1.z0.glb.clouddn.com/7330723359885.png',NULL,'快乐美术教师历年活动3','快乐美术教师历年活动3','2016-06-10',NULL,'<p>快乐美术教师历年活动3快乐美术教师历年活动3快乐美术教师历年活动3快乐美术教师历年活动3快乐美术教师历年活动3</p>',NULL);
INSERT INTO `post` VALUES (29,7,1,'http://7xqx6h.com1.z0.glb.clouddn.com/7330723485070.png',NULL,'教师培训历年活动1','教师培训历年活动1','2016-06-17',NULL,'<p>教师培训历年活动1教师培训历年活动1教师培训历年活动1教师培训历年活动1</p>',NULL);
INSERT INTO `post` VALUES (30,7,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11729157810432.jpg',NULL,'教师培训历年活动2','教师培训历年活动2','2016-06-15',NULL,'<p>教师培训历年活动2教师培训历年活动2教师培训历年活动2教师培训历年活动2教师培训历年活动2教师培训历年活动2教师培训历年活动2教师培训历年活动2教师培训历年活动2教师培训历年活动2教师培训历年活动2</p>',NULL);
INSERT INTO `post` VALUES (31,7,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4398434241084.png',NULL,'教师培训历年活动3','教师培训历年活动3','2016-06-09',NULL,'<p>教师培训历年活动3教师培训历年活动3教师培训历年活动3教师培训历年活动3教师培训历年活动3教师培训历年活动3教师培训历年活动3教师培训历年活动3教师培训历年活动3教师培训历年活动3</p>',NULL);
INSERT INTO `post` VALUES (32,7,1,'http://7xqx6h.com1.z0.glb.clouddn.com/14661447674980.jpg',NULL,'教师培训历年活动4','教师培训历年活动4','2016-06-01',NULL,'<p>教师培训历年活动4教师培训历年活动4教师培训历年活动4教师培训历年活动4</p>',NULL);
INSERT INTO `post` VALUES (33,8,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4398434504262.jpg',NULL,NULL,'教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言教师1感言',NULL,'教师1',NULL,'职务1');
INSERT INTO `post` VALUES (34,8,1,'http://7xqx6h.com1.z0.glb.clouddn.com/10263014597647.png',NULL,NULL,'教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言',NULL,'教师2',NULL,'职务2');
INSERT INTO `post` VALUES (35,8,1,'http://7xqx6h.com1.z0.glb.clouddn.com/14661449655350.jpg',NULL,NULL,'教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言教师2感言',NULL,'教师3',NULL,'职务3');
INSERT INTO `post` VALUES (36,9,1,'http://7xqx6h.com1.z0.glb.clouddn.com/10263025191195.jpg',NULL,'教师作品1','教师作品1教师作品1教师作品1教师作品1教师作品1教师作品1教师作品1教师作品1',NULL,'教师1',NULL,NULL);
INSERT INTO `post` VALUES (37,9,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4398439465563.png',NULL,'教师作品2','教师作品2教师作品2教师作品2教师作品2教师作品2教师作品2教师作品2教师作品2教师作品2教师作品2',NULL,'教师2',NULL,NULL);
INSERT INTO `post` VALUES (38,9,1,'http://7xqx6h.com1.z0.glb.clouddn.com/13195318962339.jpg',NULL,'教师作品3','教师作品3教师作品3教师作品3教师作品3教师作品3教师作品3教师作品3教师作品3教师作品3',NULL,'教师3',NULL,NULL);
INSERT INTO `post` VALUES (39,11,1,'http://7xqx6h.com1.z0.glb.clouddn.com/5864586558268.jpg',NULL,'志愿者历年活动1','志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1','2016-06-11',NULL,'<p>志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1志愿者历年活动1</p>',NULL);
INSERT INTO `post` VALUES (40,11,1,'http://7xqx6h.com1.z0.glb.clouddn.com/8796880023420.png',NULL,'志愿者历年活动2','志愿者历年活动2志愿者历年活动2志愿者历年活动2','2016-06-09',NULL,'<p>志愿者历年活动2志愿者历年活动2志愿者历年活动2志愿者历年活动2志愿者历年活动2志愿者历年活动2志愿者历年活动2志愿者历年活动2志愿者历年活动2</p>',NULL);
INSERT INTO `post` VALUES (41,11,1,'http://7xqx6h.com1.z0.glb.clouddn.com/1466147209628.png',NULL,'志愿者历年活动3','志愿者历年活动2','2016-06-11',NULL,'<p>志愿者历年活动2志愿者历年活动2志愿者历年活动2志愿者历年活动2</p>',NULL);
INSERT INTO `post` VALUES (42,11,1,'http://7xqx6h.com1.z0.glb.clouddn.com/14661472401210.jpg',NULL,'志愿者历年活动4','志愿者历年活动4','2016-06-15',NULL,'<p>志愿者历年活动4志愿者历年活动4志愿者历年活动4</p>',NULL);
INSERT INTO `post` VALUES (43,12,1,'http://7xqx6h.com1.z0.glb.clouddn.com/10263031331098.png',NULL,NULL,'志愿者感言志愿者感言志愿者感言志愿者感言1',NULL,'志愿者感言1',NULL,'职务1');
INSERT INTO `post` VALUES (44,12,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11729178845520.jpg',NULL,NULL,'志愿者感言2志愿者感言2志愿者感言2志愿者感言2',NULL,'志愿者感言2',NULL,'职务2');
INSERT INTO `post` VALUES (45,12,1,'http://7xqx6h.com1.z0.glb.clouddn.com/5864589659596.png',NULL,NULL,'志愿者感言3志愿者感言3志愿者感言3志愿者感言3志愿者感言3',NULL,'志愿者感言3',NULL,'职务3');
INSERT INTO `post` VALUES (46,12,1,'http://7xqx6h.com1.z0.glb.clouddn.com/13195326862206.jpg',NULL,NULL,'志愿者感言4志愿者感言4志愿者感言4志愿者感言4',NULL,'志愿者感言4',NULL,'职务4');
INSERT INTO `post` VALUES (47,13,1,'http://7xqx6h.com1.z0.glb.clouddn.com/14661478357030.png',NULL,'志愿者培训1','志愿者培训1志愿者培训1志愿者培训1志愿者培训1志愿者培训1志愿者培训1',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (48,13,1,'http://7xqx6h.com1.z0.glb.clouddn.com/1466147908348.jpg',NULL,'志愿者培训2','志愿者培训2志愿者培训2志愿者培训2志愿者培训2志愿者培训2志愿者培训2',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (49,13,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4398443866725.jpg',NULL,'志愿者培训4','志愿者培训4志愿者培训4志愿者培训4志愿者培训4志愿者培训4志愿者培训4志愿者培训4',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (50,18,1,'http://7xqx6h.com1.z0.glb.clouddn.com/13195332072693.png',NULL,'四川美术学院','2010年7月8日，“川美人畅想未来，共创造美好明天”的美克美家主题海报设计竞赛作品结果揭晓，美克美家由此开始“艺术·家”奖学金项目启动在西南地区的第一站，10名川美学生获得奖学金。\n截至目前，已有X名川美学生获得“艺术·家”奖学金。',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (51,18,1,'http://7xqx6h.com1.z0.glb.clouddn.com/13195334070504.jpg',NULL,'湖南大学','因湖南大学长期构建的“公益助学+就业+创业”的教育新模式与美克美家“艺术·家”奖学金的理念不谋而合，2010年11月4日美克美家与其设计艺术学院和建筑学院达成“艺术·家”奖学金项目合作。\n截至目前，已有X名湖大学生获得“艺术·家”奖学金。',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (52,18,1,'http://7xqx6h.com1.z0.glb.clouddn.com/8796889568688.jpg',NULL,'中国美术学院','为进一步加强高校与企业间的沟通和交流，推动教育事业的发展，2014年X月X日，美克美家在中国美术学院设立了“美克美家艺术·家奖学金”。 \n截至目前，已有X名中国美院学生获得“艺术·家”奖学金。',NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (53,25,1,'http://7xqx6h.com1.z0.glb.clouddn.com/14661484212830.jpg',NULL,'第二个数据',NULL,NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (54,25,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11729187901208.jpg',NULL,'数据3',NULL,NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (55,0,1,'',NULL,'数据4',NULL,NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (56,25,1,'http://7xqx6h.com1.z0.glb.clouddn.com/10263042235152.jpg',NULL,'担当的达到法定',NULL,NULL,NULL,NULL,NULL);
INSERT INTO `post` VALUES (57,16,1,'http://7xqx6h.com1.z0.glb.clouddn.com/10263042984530.png',NULL,'作品1','作品1作品1作品1作品1作品1',NULL,'作品1',NULL,NULL);
INSERT INTO `post` VALUES (58,16,1,'http://7xqx6h.com1.z0.glb.clouddn.com/2932298038252.jpg',NULL,'作品2','作品2作品2作品2作品2作品2作品2',NULL,'作品2',NULL,NULL);
INSERT INTO `post` VALUES (59,16,1,'http://7xqx6h.com1.z0.glb.clouddn.com/1466149042221.png',NULL,'作品3','作品3作品3作品3作品3作品3作品3作品3作品3作品3',NULL,'作品3',NULL,NULL);
INSERT INTO `post` VALUES (60,16,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11729192568080.png',NULL,'作品4','作品4作品4作品4作品4作品4作品4作品4',NULL,'作品4',NULL,NULL);
INSERT INTO `post` VALUES (61,17,1,'http://7xqx6h.com1.z0.glb.clouddn.com/1466149199180.jpg',NULL,'视频1',NULL,'2016-03-09',NULL,NULL,'<iframe height=498 width=510 src=\"http://player.youku.com/embed/XMTYwNTc5NzcyOA==\" frameborder=0 allowfullscreen></iframe>');
INSERT INTO `post` VALUES (62,17,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4398447679407.jpg',NULL,'视频2',NULL,'2016-06-10',NULL,NULL,'<iframe height=498 width=510 src=\"http://player.youku.com/embed/XMTYwNTc5NzcyOA==\" frameborder=0 allowfullscreen></iframe>');
INSERT INTO `post` VALUES (63,17,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11729193997072.jpg',NULL,'视频3',NULL,'2016-06-10',NULL,NULL,'<iframe height=498 width=510 src=\"http://player.youku.com/embed/XMTYwNTc5NzcyOA==\" frameborder=0 allowfullscreen></iframe>');
INSERT INTO `post` VALUES (64,26,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11729194350416.jpg',NULL,'视频5666',NULL,'2016-06-10',NULL,NULL,'<iframe height=498 width=510 src=\"http://player.youku.com/embed/XMTYxMDk5NjI3Mg==\" frameborder=0 allowfullscreen></iframe>');
INSERT INTO `post` VALUES (65,26,1,'http://7xqx6h.com1.z0.glb.clouddn.com/13195346412114.jpg',NULL,'视频3',NULL,'2016-06-09',NULL,NULL,'<iframe height=498 width=510 src=\"http://player.youku.com/embed/XMTYwNTc5NzcyOA==\" frameborder=0 allowfullscreen></iframe>');
INSERT INTO `post` VALUES (66,27,1,'http://7xqx6h.com1.z0.glb.clouddn.com/13195347131448.png',NULL,'远方',NULL,NULL,NULL,NULL,'http://baidu.com');
INSERT INTO `post` VALUES (67,19,1,'http://7xqx6h.com1.z0.glb.clouddn.com/8796899437470.png',NULL,'作品1','作品1作品1作品1作品1作品1作品1',NULL,'作品1作品1',NULL,NULL);
INSERT INTO `post` VALUES (68,19,1,'http://7xqx6h.com1.z0.glb.clouddn.com/2932299856836.png',NULL,'作品2','作品2作品2作品2作品2',NULL,'作品2',NULL,NULL);
INSERT INTO `post` VALUES (69,19,1,'http://7xqx6h.com1.z0.glb.clouddn.com/14661499541560.jpg',NULL,'作品3','作品3作品3作品3作品3作品3作品3作品3作品3作品3',NULL,'作品3',NULL,NULL);
INSERT INTO `post` VALUES (70,19,1,'http://7xqx6h.com1.z0.glb.clouddn.com/7330749899420.jpg',NULL,'作品4','作品4作品4作品4作品4作品4作品4作品4',NULL,'作品4',NULL,NULL);
INSERT INTO `post` VALUES (71,21,1,'http://7xqx6h.com1.z0.glb.clouddn.com/4398449996916.png',NULL,NULL,'实习生感言1实习生感言1实习生感言1实习生感言1实习生感言1',NULL,'实习生感言1',NULL,'实习生感言1');
INSERT INTO `post` VALUES (72,21,1,'http://7xqx6h.com1.z0.glb.clouddn.com/2932300366458.jpg',NULL,NULL,'阿杜发到付的发的大飞的飞',NULL,'达到法定',NULL,'啊打发');
INSERT INTO `post` VALUES (73,21,1,'http://7xqx6h.com1.z0.glb.clouddn.com/14661503991280.jpg',NULL,NULL,'啊打发到辅导费短发的地方 打发 按时发 阿发达飞',NULL,'阿杜发到付',NULL,'啊打发');
INSERT INTO `post` VALUES (74,21,1,'http://7xqx6h.com1.z0.glb.clouddn.com/2932300996082.png',NULL,NULL,'敖东阿打发打发的啊打发打发的',NULL,'啊打发',NULL,'阿的发达ad');
INSERT INTO `post` VALUES (75,23,1,'http://7xqx6h.com1.z0.glb.clouddn.com/7330753403660.jpg',NULL,'新通道.三江源','对艺术地区的国家级非物质遗产手工艺进\n行重点记录和影响创作，研究了解康巴与\n安多藏区的宗教与游牧文化，建筑与传统\n手工艺文化资源。','2016-06-07',NULL,'<p>对艺术地区的国家级非物质遗产手工艺进</p>\n<p>行重点记录和影响创作，研究了解康巴与</p>\n<p>安多藏区的宗教与游牧文化，建筑与传统</p>\n<p>手工艺文化资源。</p>','comdesignlab.com/newchannel');
INSERT INTO `post` VALUES (76,23,1,'http://7xqx6h.com1.z0.glb.clouddn.com/14661507248760.png',NULL,'新通道.花瑶花','对当地机具特色的民族文化及手工技艺进\n行了解、采集，通过多种手段分别对花瑶\n挑花、滩头年画、造纸工艺、竹编工艺进\n行详细的记录。','2016-06-14',NULL,'<p><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\">对当地机具特色的民族文化及手工技艺进</span><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\" /><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\">行了解、采集，通过多种手段分别对花瑶</span><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\" /><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\">挑花、滩头年画、造纸工艺、竹编工艺进</span><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\" /><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\">行详细的记录。</span></p>','comdesignlab.com/newchannel');
INSERT INTO `post` VALUES (77,23,1,'http://7xqx6h.com1.z0.glb.clouddn.com/11729206621656.png',NULL,'米兰展','展览用实物、图片等多种手法，展示了大\n量当地少数民族传统文化样式，以及师生\n们制作的既有民族特性又有现代气息的系\n列设计作品。','2016-06-09',NULL,'<p><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\">展览用实物、图片等多种手法，展示了大</span><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\" /><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\">量当地少数民族传统文化样式，以及师生</span><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\" /><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\">们制作的既有民族特性又有现代气息的系</span><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\" /><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 25px; white-space: nowrap;\">列设计作品。</span></p>','baidu.com');
INSERT INTO `post` VALUES (78,24,1,'http://7xqx6h.com1.z0.glb.clouddn.com/7330754365355.png',NULL,'“新通道”里的老太太','一把剪刀，一张烟盒纸，一位从未受过教育、从未拿笔写过字的中国农村老太太，随手便能剪出一个个漂亮的图案与形象，其所有的素材都是源自乡村日常生活，而她所呈现的技艺...','2016-06-16','xxx','<p><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; text-decoration: inherit; text-shadow: inherit; line-height: 25px; vertical-align: inherit; border: none; padding: 0px; -webkit-text-stroke-width: initial; -webkit-text-stroke-color: #000000; background-image: none;\">这样的老人，我们不知道全世界还有几个？她的离去可能伴随着一项传统手工艺巅峰的消逝，如果我们再不去做些什么，未来我们甚至会捕捉不到这项人类手工艺文明曾经的辉煌痕迹，这一切只能沦为民间的传说。<br /><br />她太聪明了！简陋的生产条件；一个剪刀，一张烟盒纸，一位从未受过教育从未拿过笔，没有写过字的中国农村老太太随手便能剪出一个个漂亮的形象，图案，她所有的素材都是源自乡村日常生活。其作品所呈现的华丽技术、艺术创造力和艺术价值已经达到了顶尖的状态。<br /><br />这位已至耄耋之年的老人便是剪纸传人覃时清，如今她早已经不再是个人艺术修为达到最高峰的年龄了，由于身体的衰老，年轻时候的代表作如今已无法在老人的手中再现。<br /><br />2006年，湖南大学设计艺术学院副院长季铁在一个展览上看到了老人的几篇剪纸，当时便深受震撼，感觉太神奇了，但是并未找到老人。直到2011年在与美克美家开展&ldquo;新通道&rdquo;项目合作时，才真正下很大功夫，花费很长的时间在通道旁边的一个村子里找到了老人。</span></p>\n<p style=\"color: #808080; font-family: Arial; text-decoration: inherit; text-shadow: inherit; vertical-align: inherit; border: none; padding: 0px; margin: 0px; -webkit-text-stroke-width: initial; -webkit-text-stroke-color: #000000; min-height: 14px; background-image: none;\">&nbsp;</p>',NULL);
INSERT INTO `post` VALUES (79,24,1,'http://7xqx6h.com1.z0.glb.clouddn.com/7330754784950.png',NULL,'为爱情','上世纪80年代初，为了身患重病的妻子，酉阳当地偶尔做木匠活、平时便下田务农的农民冷定祥，在听说跳戏可“消灾祈福”“妻子的病会好转”之后，决定正式学习阳戏，没曾想一坚持就是二三十年。',NULL,'冷定祥','<p><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; line-height: 25px; -webkit-text-stroke-color: #000000;\">土地平旷，屋舍俨然，有良田美池桑竹之属。阡陌交通，鸡犬相闻。其中往来种作，男女衣着，悉如外人。黄发垂髫，并怡然自乐。&mdash;&mdash;1500年前，《桃花源记》</span><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; line-height: 25px; -webkit-text-stroke-color: #000000;\" /><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; line-height: 25px; -webkit-text-stroke-color: #000000;\" /><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; line-height: 25px; -webkit-text-stroke-color: #000000;\">白日脱下戏装你是农民，晚上穿上戏装便变身大艺术家&mdash;&mdash;2013年，酉阳阳戏班成员生活日记。</span><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; line-height: 25px; -webkit-text-stroke-color: #000000;\" /><br style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; line-height: 25px; -webkit-text-stroke-color: #000000;\" /><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; line-height: 25px; -webkit-text-stroke-color: #000000;\">&ldquo;世界上有两个桃花源，一个在您心中，一个在酉阳&rdquo;。1500 多年前，东晋陶渊明把田园生活引进了中国诗坛，为中国诗歌的发展开辟了一片新天地；渗透在艺术上，产生了真朴淡远的艺术境界和冲淡自然的美学风格。千百年来，他的品格，他的诗歌，他的田园，连同他的那份悠然，一并成为后世诗人与读者崇拜和研究的对象。其笔下的桃花源的安宁和乐、生活自由平等影响颇深。直至今日，在中国人们还是用桃花源来描述理想的生活环境和生活状态。据说经过多方面考证，大酉洞与陶渊明《桃花源记》原型相似。</span></p>\n<p><span style=\"color: #808080; font-family: Arial, Helvetica, sans-serif; line-height: 25px; -webkit-text-stroke-color: #000000;\"><img src=\"http://7xqx6h.com1.z0.glb.clouddn.com/4398452985570.jpg\" alt=\"\" width=\"1920\" height=\"600\" /></span></p>',NULL);
INSERT INTO `post` VALUES (80,2,1,'http://7xqx6h.com1.z0.glb.clouddn.com/2932776511030.png','http://7xqx6h.com1.z0.glb.clouddn.com/7331941297925.jpg','xxxxxx','xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx','2016-06-05',NULL,'<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>','0');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table recruit
#

DROP TABLE IF EXISTS `recruit`;
CREATE TABLE `recruit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(32) NOT NULL DEFAULT '',
  `job_require` varchar(512) NOT NULL DEFAULT '' COMMENT '岗位要求',
  `internship_require` varchar(512) NOT NULL DEFAULT '' COMMENT '实习要求',
  `address` varchar(64) NOT NULL DEFAULT '' COMMENT '实习地点',
  `date` date NOT NULL DEFAULT '0000-00-00' COMMENT '日期',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '编写者',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='招聘信息';

#
# Dumping data for table recruit
#
LOCK TABLES `recruit` WRITE;
/*!40000 ALTER TABLE `recruit` DISABLE KEYS */;

INSERT INTO `recruit` VALUES (1,'设计顾问助理','进行店面产品介绍，通过了解各种顾 客的类型与个性，进行入户家居设计， 协助设计顾问为客户提供优秀的设计方案','本科学历，艺术类相关专业，有亲和力和良好的沟通能力。 热爱艺术和公益事业，思想敏锐、视角独特，在校大学二年级（含）以上的学生，至少能连续实习1.5个月','北京，重庆，长沙','2016-09-09',1);
INSERT INTO `recruit` VALUES (2,'商品展示助理','与视觉效果设计人员和商品管理人员沟通，协调店内商品的陈列展示；协助进行店面设计和展示的更新以及设计；能够结合商品销售状况，对产品陈设方式提出建议；完善店面公共环境区域陈设','本科学历，艺术类相关专业，有亲和力和良好的沟通能力。 热爱艺术和公益事业，思想敏锐、视角独特，在校大学二年级（含）以上的学生，至少能连续实习1.5个月','北京，重庆，长沙','2016-06-09',1);
INSERT INTO `recruit` VALUES (3,'平面设计助理','协助设计人员进行平面广告、店面宣传物料、手册、互动广告以及网站的维护设计等等','本科学历，艺术类相关专业，有亲和力和良好的沟通能力。 热爱艺术和公益事业，思想敏锐、视角独特，在校大学二年级（含）以上的学生，至少能连续实习1.5个月','北京，重庆，长沙','2016-06-08',1);
/*!40000 ALTER TABLE `recruit` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

#
#  Foreign keys for table recruit
#

ALTER TABLE `recruit`
ADD CONSTRAINT `recruit_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);


/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
