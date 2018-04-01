/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yiiblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-01 17:53:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `relation_post_tags`
-- ----------------------------
DROP TABLE IF EXISTS `relation_post_tags`;
CREATE TABLE `relation_post_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of relation_post_tags
-- ----------------------------
INSERT INTO `relation_post_tags` VALUES ('1', '19', '1');
INSERT INTO `relation_post_tags` VALUES ('2', '19', '2');
INSERT INTO `relation_post_tags` VALUES ('3', '20', '3');
INSERT INTO `relation_post_tags` VALUES ('4', '20', '4');
