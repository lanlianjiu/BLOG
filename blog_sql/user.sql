/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yiiblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-01 17:53:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'test', '2aF4Cn7blkSOrr-NgdL5nmAC6cLFUfZx', '$2y$13$afRlhaEVAIjOt6Yr07uCxeyn3vfjSXW8rNSaFijBbD.h7uthz0rOm', 'BsF3tN-g8stfw8QNU1G08mRV3CcpkBPf_1498364564', null, '123456@qq.com', '0', '10', null, '0', '1494753615', '1498364564');
INSERT INTO `user` VALUES ('2', 'test01', 'JfB2pHXFulOwYT56QTPXmXT6Tk-v_K-I', '$2y$13$pbMtt.q5MQMY5DEDszlCru2xMb4JGxhzhyBB1tvZ8KRv7g5XEM78a', null, null, '234234@qq.com', '0', '10', null, '0', '1494758236', '1494758236');
