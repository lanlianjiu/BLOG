/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yiiblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-01 17:52:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `feeds`
-- ----------------------------
DROP TABLE IF EXISTS `feeds`;
CREATE TABLE `feeds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of feeds
-- ----------------------------
INSERT INTO `feeds` VALUES ('1', '1', '无聊飒飒背景阿塞拜疆按时到货', '1495632476');
INSERT INTO `feeds` VALUES ('2', '1', '无聊飒飒背景阿塞拜疆按时到货2', '1495632476');
INSERT INTO `feeds` VALUES ('3', '1', '1495632476', '1495632476');
INSERT INTO `feeds` VALUES ('4', '1', '1495632476', '1495632476');
INSERT INTO `feeds` VALUES ('5', '1', '1495632476', '1495632476');
INSERT INTO `feeds` VALUES ('6', '1', '1495632476', '1495632476');
INSERT INTO `feeds` VALUES ('7', '1', '1495632476', '1495632476');
INSERT INTO `feeds` VALUES ('8', '1', '1495632476', '1495632476');
INSERT INTO `feeds` VALUES ('9', '1', '1495632476', '1495632476');
INSERT INTO `feeds` VALUES ('10', '1495632476', '1495632476', '1495632476');
INSERT INTO `feeds` VALUES ('11', '1', '55555555555', '1495632476');
