/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yiiblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-01 17:52:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `post_extends`
-- ----------------------------
DROP TABLE IF EXISTS `post_extends`;
CREATE TABLE `post_extends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `browser` int(11) NOT NULL,
  `collect` int(11) NOT NULL,
  `praise` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of post_extends
-- ----------------------------
INSERT INTO `post_extends` VALUES ('1', '19', '4', '0', '0', '0');
INSERT INTO `post_extends` VALUES ('2', '13', '1', '0', '0', '0');
INSERT INTO `post_extends` VALUES ('3', '14', '3', '0', '0', '0');
INSERT INTO `post_extends` VALUES ('4', '12', '1', '0', '0', '0');
INSERT INTO `post_extends` VALUES ('5', '10', '1', '0', '0', '0');
INSERT INTO `post_extends` VALUES ('6', '20', '31', '0', '0', '0');
