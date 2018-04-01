/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yiiblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-01 17:52:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `label_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_valid` smallint(11) unsigned zerofill DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`,`is_valid`) USING BTREE,
  KEY `P_1_U_idx` (`user_id`),
  CONSTRAINT `P_1_U` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `P_2_C` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', '121232', '34', '<p>34<br/></p>', '', '2', '1', 'test888', '00000000000', '1495632476', '1495632476');
INSERT INTO `posts` VALUES ('8', '1232131', '2342424', '<p>2342424<br/></p>', '/image/20170525/1495720316627704.png', '2', '1', 'test888', '00000000001', '1495722849', '1495722849');
INSERT INTO `posts` VALUES ('9', '234366', '666', '<p>666<br/></p>', '/image/20170525/1495724919106469.png', '1', '1', 'test888', '00000000001', '1495724925', '1495724925');
INSERT INTO `posts` VALUES ('10', '5555', '555', '<p>555<br/></p>', '', '1', '1', 'test888', '00000000001', '1495725033', '1495725033');
INSERT INTO `posts` VALUES ('11', '1232131', '33', '<p>33<br/></p>', '', '2', '1', 'test888', '00000000001', '1495725263', '1495725263');
INSERT INTO `posts` VALUES ('12', '33355', '56456', '<p>56456<br/></p>', '', '1', '1', 'test888', '00000000001', '1495726161', '1495726161');
INSERT INTO `posts` VALUES ('13', '44444', '44444', '<p>44444<br/></p>', '', '2', '1', 'test888', '00000000001', '1495726964', '1495726964');
INSERT INTO `posts` VALUES ('14', '77766', '7777', '<p>7777<br/></p>', '', '2', '1', 'test888', '00000000001', '1495727820', '1495727820');
INSERT INTO `posts` VALUES ('19', '77788', '88787', '<p>88787<br/></p>', '/image/20170526/1495805986930820.jpg', '1', '1', 'test888', '00000000001', '1495809005', '1495809005');
INSERT INTO `posts` VALUES ('20', '测试闫妮2', '色分别是大部分是病毒被粉丝U盾不服is的bfUI不少地方比四点半覅不死i1iuibuibibiubsi1家具不具备基本解决看不见不积跬步', '<p>色分别是大部分是病毒被粉丝U盾不服is的bfUI不少地方比四点半覅不死i1iuibuibibiubsi1家具不具备基本解决看不见不积跬步<br/></p>', '', '3', '1', 'test', '00000000001', '1498373085', '1498373085');
