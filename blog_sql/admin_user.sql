/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yiiblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-01 17:52:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `auth_key` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_vaidate_token` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL,
  `avator` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vip_1v` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL COMMENT '会员表',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('1', 'admin', '2aF4Cn7blkSOrr-NgdL5nmAC6cLFUfZx', '$2y$13$afRlhaEVAIjOt6Yr07uCxeyn3vfjSXW8rNSaFijBbD.h7uthz0rOm', null, null, '123456@qq.com', '0', '10', null, '0', '1494753615', '1494753615');
