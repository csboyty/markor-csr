USE `markor-csr`;

alter table setting drop column qiniu_marker;
alter table setting drop column last_time;

#
# Source for table to_download
#

DROP TABLE IF EXISTS `to_download`;
CREATE TABLE `to_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='待下载文件表';
