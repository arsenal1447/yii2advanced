/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-03-23 17:15:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ad_auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `ad_auth_assignment`;
CREATE TABLE `ad_auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `ad_auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `ad_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_auth_assignment
-- ----------------------------

-- ----------------------------
-- Table structure for `ad_auth_item`
-- ----------------------------
DROP TABLE IF EXISTS `ad_auth_item`;
CREATE TABLE `ad_auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `ad_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `ad_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_auth_item
-- ----------------------------

-- ----------------------------
-- Table structure for `ad_auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `ad_auth_item_child`;
CREATE TABLE `ad_auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `ad_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `ad_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ad_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `ad_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_auth_item_child
-- ----------------------------

-- ----------------------------
-- Table structure for `ad_auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `ad_auth_rule`;
CREATE TABLE `ad_auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `ad_user`
-- ----------------------------
DROP TABLE IF EXISTS `ad_user`;
CREATE TABLE `ad_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_passhash` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_create` int(11) NOT NULL,
  `user_logintime` int(11) NOT NULL,
  `user_ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_nickname` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `user_status` tinyint(8) NOT NULL DEFAULT '0',
  `user_deld` tinyint(2) NOT NULL DEFAULT '0',
  `user_authkey` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password_reset_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_user
-- ----------------------------
INSERT INTO `ad_user` VALUES ('1', 'zxx123', '$2y$13$JtAiks0lmsBeLL1qA3YNBeNk/fkQp6Ql3g9WvuACwIwzHMQLHPbae', '297208251@qq.com', '1458637332', '1458719589', '127.0.0.1', '0', '10', '0', 'aYOOl2ZOT95Y2YlZ5ZwTON_y8jwgvdoc', null);
INSERT INTO `ad_user` VALUES ('2', 'zxx123456', '$2y$13$Hz8.xi2c3K21ETvzxndFU.Et4J6aHL4xmH4Scc0ZUXhxhYF0XvA9K', '89203299@qq.com', '1458702633', '1458719856', '127.0.0.1', '0', '10', '0', '74HSYguDlqW7VlgngIJoHkvq0a8HATQj', null);
INSERT INTO `ad_user` VALUES ('3', 'zxx123456789', '$2y$13$lzRDSnYGTb4prlzuwNYAzugWt91Nrk.PclFFZsXFAUYF1rdHmJohi', '297208251@qq.com', '1458702664', '1458702664', '127.0.0.1', '0', '10', '0', 'jVtryq7r0L3EIEMLM-b-xKt9ZySzNaLB', '0');
INSERT INTO `ad_user` VALUES ('4', 'zhou123', '$2y$13$U7M8MXazZ08GWGf1En6VreFkZjUi1VGEiNkXI4yDFmdvhgZQhtmNq', '89203299@qq.com', '1458704684', '1458704684', '127.0.0.1', '0', '10', '0', 'ZGJo0sUaGeb6TZZUGN-NcG7sIcAFCrH0', '0');