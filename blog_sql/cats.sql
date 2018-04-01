/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yiiblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-01 17:52:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cats`
-- ----------------------------
DROP TABLE IF EXISTS `cats`;
CREATE TABLE `cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_name` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cats
-- ----------------------------
INSERT INTO `cats` VALUES ('3', '吐槽');
INSERT INTO `cats` VALUES ('1', '建议类');
INSERT INTO `cats` VALUES ('2', '投诉类');
