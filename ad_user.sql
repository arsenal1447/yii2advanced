/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-03-22 15:24:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ad_user`
-- ----------------------------
DROP TABLE IF EXISTS `ad_user`;
CREATE TABLE `ad_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_passhash` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_create` int(11) NOT NULL,
  `user_logintime` int(11) NOT NULL,
  `user_ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_nickname` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `user_status` tinyint(8) NOT NULL DEFAULT '0',
  `user_deld` tinyint(2) NOT NULL DEFAULT '0',
  `user_authkey` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_user
-- ----------------------------
