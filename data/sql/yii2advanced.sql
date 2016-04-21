/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-04-21 17:18:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ad_admin`
-- ----------------------------
DROP TABLE IF EXISTS `ad_admin`;
CREATE TABLE `ad_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_passhash` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_role` tinyint(4) DEFAULT NULL,
  `admin_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_create` int(11) NOT NULL,
  `admin_logintime` int(11) NOT NULL,
  `admin_ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `admin_nickname` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `admin_status` tinyint(8) NOT NULL DEFAULT '0',
  `admin_deld` tinyint(2) NOT NULL DEFAULT '0',
  `admin_authkey` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password_reset_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_admin
-- ----------------------------
INSERT INTO `ad_admin` VALUES ('5', 'a5', '$2y$13$1VmZ7zBewkySUicNgELbBu9GdctLDEBRqNr9zv4HR3Z5B6Er1E4f2', '1', '1@qq.com', '1458791319', '1460006972', '127.0.0.1', '0', '10', '0', 'yzVYsNCe9saBlZdTuC9EZELzSdwj3gJo', '0');
INSERT INTO `ad_admin` VALUES ('6', 'mananger', '$2y$13$ilguCyjlR6Ltmi4ZLydo5e1iFg9/w0omVD1bybWjx.F9KSlrn8Vhy', '1', '2@qq.com', '1458791433', '1459908246', '127.0.0.1', '0', '1', '0', 'ZEy3D_ZgJAVFqQNpf_wwvn9QdoEIR3el', '0');
INSERT INTO `ad_admin` VALUES ('7', 'player1', '$2y$13$rtoXLYaR26RtSXOqqcEjpO2QTnqpqmloFrSLmpzidGetDgxUo8Mre', '1', '3@qq.com', '1458799532', '1459908240', '127.0.0.1', '0', '1', '0', 'zRl_eEYxtZ6bzlWhMm1i9epUD1YAfkCB', '0');
INSERT INTO `ad_admin` VALUES ('8', 'player2', '$2y$13$XUr/kp8TLPCSTKlexZg5cucB7NsiYu9KMJUddkWHPZ0.R7GmHkGOe', '1', '3@qq.com4', '1458799591', '1459908234', '127.0.0.1', '0', '1', '0', 'F085uu31BpBFZF3SapUFppSLd46SJ8U0', '0');
INSERT INTO `ad_admin` VALUES ('9', 'player3', '$2y$13$TVdMOwbUhbKhq7tkfhtyA.4/sRIdVAk9VOcNxmGSOLkN7JnTgpa0e', '1', '5@qq.com', '1458799940', '1459908226', '127.0.0.1', '0', '1', '0', 'oaUy3xpAalztRhFzGfaPbQ8QXOeecYN9', '0');
INSERT INTO `ad_admin` VALUES ('10', 'aaa', '$2y$13$p8OcsQzP.HCVwDZ7ActvN.FITkx7s.Jji9DzU.F4/UHe8mv4YWLwq', '1', 'a@qq.com', '1458804356', '1459994702', '127.0.0.1', '0', '10', '0', 'QQXwvNvb-wW8mfffTFym6vQ9ZnzbH-3p', '0');
INSERT INTO `ad_admin` VALUES ('11', 'qqq', '$2y$13$OpeLwLZVlKiWmZtNxe9fcORuh7fwUlkNlOhe03psv8Sfpu.cEWDra', '1', 'q@qq.com', '1458893811', '1458893811', '127.0.0.1', '0', '10', '0', 'whiFA3UlZIoNHE_wUjpc579wsJgOTCOR', '0');
INSERT INTO `ad_admin` VALUES ('12', 'bbb', '$2y$13$sg5E4cd.WXWRc4myL0VY2u53MYuluyd1g7Y7s9Ur3DWeqwBwzehwO', '1', 'bbb@qq.com', '1459502977', '1459908217', '127.0.0.1', '0', '10', '0', 'u1mJnAqAS-E2qs-Z6ruJgeW9yeYZaAtr', '0');
INSERT INTO `ad_admin` VALUES ('13', 'dddd', '$2y$13$Gsumm.YdXIjsl7nFXzgLm.MDYxHVGr2fG/D9l.RTJVSP5OGa3T6s6', '1', 'ddd@qq.com', '1459503536', '1459503536', '127.0.0.1', '0', '10', '0', 'eWW_9Eob_bXwDVAjqiNcODTSDGmk70yh', '0');
INSERT INTO `ad_admin` VALUES ('14', 'eee', '$2y$13$5X6ke3tUp3j1uolON4oyW.utsVVDz6IlFhhQqyEbpktq4s06eMmlu', '1', 'ddd@qq.com', '1459503634', '1459503634', '127.0.0.1', '0', '10', '0', 'wQ2qHpv1xd10p-yBZKi-LDoySUqR8Tfi', '0');
INSERT INTO `ad_admin` VALUES ('15', 'fff', '$2y$13$92gT93Xup0tkISSoDIMtcuL0EeNwZtpQC24LZYa1lA6EaoJfBdahq', '1', 'bbb@qq.com', '1459503657', '1459503657', '127.0.0.1', '0', '10', '0', 'znnLaMfBW4rGCurWfp3fzMp6LwEhMwCG', '0');
INSERT INTO `ad_admin` VALUES ('16', 'hhh', '$2y$13$8VncsqPjvIo/GcazFn2RGO7BhEs7Hp6lrtvCU94gom0a/wsMMc2ai', '1', 'bbb@qq.com', '1459504464', '1459504464', '127.0.0.1', '0', '10', '0', 'JoXQF5PeBHUeVBgiwYtzpZJtCoxuRNPQ', '0');
INSERT INTO `ad_admin` VALUES ('17', 'ccc', '$2y$13$yTDpOrDjcQO2MYxNHQGDUOfCdjSFaKPoL2JsVcrSDEOUJlHQw6UEe', '1', 'ccc@qq.com', '1459505298', '1459505298', '127.0.0.1', '0', '10', '0', 'A6cWQIwrNS-ojwK9IKxwBlRMkDD82Fd-', '0');
INSERT INTO `ad_admin` VALUES ('18', 'admin', '$2y$13$hljt/JSAQQCa3XKZqysdYuVqH02wMGkiMFeMHlLMWjLJY1VQws4Y.', '1', 'admin@qq.com', '1459907288', '1459907288', '127.0.0.1', '0', '10', '0', '4ysvmHCtAf0AXdZ0fu0CFjZZlfmOJlIP', '0');
INSERT INTO `ad_admin` VALUES ('19', 'a6', '$2y$13$n03q16btEKFugRTj3NRY6effUavDnXbaqMQ2kixSB9cVEN98XwFG2', '1', 'a6@qq.com', '1459998976', '1459998976', '127.0.0.1', '0', '10', '0', 'QqgvpGktVsJN0WIGyLCQcjQMH8v5Oq9A', '0');
INSERT INTO `ad_admin` VALUES ('20', 'a7', '$2y$13$ZSlXKqIhCga5SvOhYq2UdOGotqMs41Qgbl7T.jhHQITxqxJ9.skXq', '2', 'a7@qq.com', '1460000031', '1460000048', '127.0.0.1', '0', '10', '0', '25hD5d37-U9WSFo3Yq9koh7-_8RnNucq', '0');
INSERT INTO `ad_admin` VALUES ('21', 'a1', '$2y$13$1Y3Y3uqXb9mDiZzgtRmm4eYDE0PtP0HXeBn1gkrzYdBgYF9nVW1mO', '1', 'a1@Qq.com', '1460000890', '1460000890', '127.0.0.1', '0', '10', '0', 'IIOZtfPCVVqZu0kNrbPyhChdzos0Rhrr', '0');

-- ----------------------------
-- Table structure for `ad_auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `ad_auth_assignment`;
CREATE TABLE `ad_auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_auth_assignment
-- ----------------------------
INSERT INTO `ad_auth_assignment` VALUES ('admin', '1', '1460021751');
INSERT INTO `ad_auth_assignment` VALUES ('admin_level_0', '1', '1460087257');
INSERT INTO `ad_auth_assignment` VALUES ('admin_level_0', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('admin_level_1', '1', '1460087269');
INSERT INTO `ad_auth_assignment` VALUES ('admin_level_1', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('admin_level_2', '1', '1460087269');
INSERT INTO `ad_auth_assignment` VALUES ('author', '2', '1460021751');
INSERT INTO `ad_auth_assignment` VALUES ('author', '8', '1461217665');
INSERT INTO `ad_auth_assignment` VALUES ('custom_level_0', '1', '1460087269');
INSERT INTO `ad_auth_assignment` VALUES ('custom_level_0', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('custom_level_1', '1', '1460087269');
INSERT INTO `ad_auth_assignment` VALUES ('custom_level_1', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('member_level_0', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('member_level_1', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('member_level_2', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('member_level_3', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('member_level_4', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('member_level_5', '7', '1460108945');
INSERT INTO `ad_auth_assignment` VALUES ('member_level_6', '7', '1460108946');
INSERT INTO `ad_auth_assignment` VALUES ('special_level_0', '1', '1460087276');
INSERT INTO `ad_auth_assignment` VALUES ('special_level_0', '7', '1460108946');
INSERT INTO `ad_auth_assignment` VALUES ('special_levle_1', '1', '1460087277');
INSERT INTO `ad_auth_assignment` VALUES ('special_levle_1', '7', '1460108946');

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
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `ad_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `ad_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_auth_item
-- ----------------------------
INSERT INTO `ad_auth_item` VALUES ('admin', '1', 'dd1', null, null, '1460021750', '1460021750');
INSERT INTO `ad_auth_item` VALUES ('author', '1', 'dd2', null, null, '1460021750', '1460021750');
INSERT INTO `ad_auth_item` VALUES ('createPost', '2', 'Create a post', null, null, '1460021750', '1460021750');
INSERT INTO `ad_auth_item` VALUES ('fsdf', '1', 'sdfsdf', null, 's:11:\"s:4:\"ssss\";\";', '1460098416', '1460098416');
INSERT INTO `ad_auth_item` VALUES ('sss', '1', 'sss', null, 's:4:\"ssss\";', '1460098372', '1460098372');
INSERT INTO `ad_auth_item` VALUES ('ssss', '1', 'sss', null, 's:0:\"\";', '1460098349', '1460098349');
INSERT INTO `ad_auth_item` VALUES ('updateOwnPost', '2', 'Update own post', 'isAuthor', null, '1460021751', '1460021751');
INSERT INTO `ad_auth_item` VALUES ('updatePost', '2', 'Update post', null, null, '1460021750', '1460021750');
INSERT INTO `ad_auth_item` VALUES ('角色1', '1', '11', null, 's:1:\"1\";', '1460699264', '1460699264');
INSERT INTO `ad_auth_item` VALUES ('角色2', '1', 'ss', null, 's:2:\"ss\";', '1460701080', '1460701080');
INSERT INTO `ad_auth_item` VALUES ('角色3', '1', 'ss', null, 's:2:\"ss\";', '1460702163', '1460702163');
INSERT INTO `ad_auth_item` VALUES ('黄金会员', '1', '就是叼的很', null, 's:0:\"\";', '1460100936', '1460100936');

-- ----------------------------
-- Table structure for `ad_auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `ad_auth_item_child`;
CREATE TABLE `ad_auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_auth_item_child
-- ----------------------------
INSERT INTO `ad_auth_item_child` VALUES ('admin', 'author');
INSERT INTO `ad_auth_item_child` VALUES ('author', 'createPost');
INSERT INTO `ad_auth_item_child` VALUES ('group_admin', 'fsdf');
INSERT INTO `ad_auth_item_child` VALUES ('group_admin', 'sss');
INSERT INTO `ad_auth_item_child` VALUES ('group_admin', 'ssss');
INSERT INTO `ad_auth_item_child` VALUES ('author', 'updateOwnPost');
INSERT INTO `ad_auth_item_child` VALUES ('admin', 'updatePost');
INSERT INTO `ad_auth_item_child` VALUES ('updateOwnPost', 'updatePost');
INSERT INTO `ad_auth_item_child` VALUES ('group_member', '角色1');
INSERT INTO `ad_auth_item_child` VALUES ('group_member', '角色2');
INSERT INTO `ad_auth_item_child` VALUES ('group_admin', '角色3');
INSERT INTO `ad_auth_item_child` VALUES ('group_member', '黄金会员');

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
INSERT INTO `ad_auth_rule` VALUES ('isAuthor', 'O:21:\"app\\models\\AuthorRule\":3:{s:4:\"name\";s:8:\"isAuthor\";s:9:\"createdAt\";i:1460021751;s:9:\"updatedAt\";i:1460021751;}', '1460021751', '1460021751');

-- ----------------------------
-- Table structure for `ad_cat`
-- ----------------------------
DROP TABLE IF EXISTS `ad_cat`;
CREATE TABLE `ad_cat` (
  `cat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `cat_parent` tinyint(4) DEFAULT '0',
  `cat_deld` tinyint(2) DEFAULT '0',
  `cat_status` tinyint(4) DEFAULT '0',
  `cat_create` int(11) DEFAULT NULL,
  `cat_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_cat
-- ----------------------------
INSERT INTO `ad_cat` VALUES ('1', '英超', '0', '0', '0', null, null);
INSERT INTO `ad_cat` VALUES ('2', '意甲', '0', '0', '0', '1459149917', '1459149917');
INSERT INTO `ad_cat` VALUES ('3', '西甲', '0', '0', '0', '1459153381', '1459153381');
INSERT INTO `ad_cat` VALUES ('4', '德甲', '0', '0', '0', '1459153393', '1459153393');
INSERT INTO `ad_cat` VALUES ('5', '八卦', '0', '0', '0', '1459153401', '1459153401');
INSERT INTO `ad_cat` VALUES ('6', '法甲', '0', '0', '0', '1459153411', '1459220868');
INSERT INTO `ad_cat` VALUES ('7', '测试分类', '0', '0', '0', '1459221834', '1459221834');

-- ----------------------------
-- Table structure for `ad_notice`
-- ----------------------------
DROP TABLE IF EXISTS `ad_notice`;
CREATE TABLE `ad_notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_from_user_id` int(11) NOT NULL,
  `notice_user_id` int(11) NOT NULL,
  `notice_post_id` int(11) NOT NULL,
  `notice_comment_id` int(11) DEFAULT '0',
  `notice_type` varchar(100) CHARACTER SET utf8 NOT NULL,
  `notice_data` text COLLATE utf8_unicode_ci,
  `notice_status` tinyint(1) NOT NULL,
  `notice_create` int(11) NOT NULL,
  `notice_update` int(11) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_notice
-- ----------------------------

-- ----------------------------
-- Table structure for `ad_post`
-- ----------------------------
DROP TABLE IF EXISTS `ad_post`;
CREATE TABLE `ad_post` (
  `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_type` varchar(32) CHARACTER SET utf8 DEFAULT '0',
  `post_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `post_cateid` int(11) NOT NULL,
  `post_user` int(11) NOT NULL,
  `post_content` text CHARACTER SET utf8 NOT NULL,
  `post_create` int(11) NOT NULL,
  `post_update` int(11) NOT NULL,
  `post_viewcount` int(11) DEFAULT '0',
  `post_status` tinyint(4) DEFAULT '0',
  `post_deld` tinyint(2) DEFAULT '0',
  `post_replycount` int(11) DEFAULT '0',
  `post_last_user_id` int(11) DEFAULT '0',
  `post_last_user_name` varchar(32) CHARACTER SET utf8 DEFAULT '0',
  `post_last_update` int(11) DEFAULT '0',
  `post_user_name` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_post
-- ----------------------------
INSERT INTO `ad_post` VALUES ('1', 'topic', 'aaaaeeeeeeeeggg', '3', '1', '2222eeeeekkkkkkk', '1458894631', '1458895193', '10', '0', '1', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('2', 'topic', 'wwww', '2', '1', 'dddddd', '1458894837', '1459136526', '10', '0', '1', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('3', 'topic', '我是第三条的标题', '6', '1', '<p>vvvvvffff</p>', '1459136552', '1459220514', '10', '0', '0', '2', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('4', 'topic', 'ddddddd', '3', '1', '<p><strong>asdfasfasdasdasdasd</strong></p><p><strong><img src=\"/uploads/ueditor/php/upload/image/20160328/1459144074872426.jpg\" title=\"1459144074872426.jpg\" alt=\"TB2cseGbFXXXXbxXpXXXXXXXXXX_!!887197785.jpg_160x160(2).jpg\"/></strong></p>', '1459144018', '1461036134', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('5', 'topic', 'eeee', '4', '1', '<p><img src=\"/uploads/ueditor/php/upload/image/20160328/1459144089771301.jpg\" title=\"1459144089771301.jpg\" alt=\"TB230xCbFXXXXcQXXXXXXXXXXXX-887197785.jpg_160x160.jpg\"/></p>', '1459144091', '1459144091', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('6', 'topic', 'PDO防注入原理分析以及使用PDO的注意事项', '5', '1', '<p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\"><span style=\"font-size: 10.5000pt; font-family: &#39;宋体&#39;;\">为了彻底搞清楚php与mysql&nbsp;server通讯的细节，我特别使用了wireshark抓包进行研究之,安装wireshak之后，我们设置过滤条件为tcp.port==3306,&nbsp;如下图：<br/><img width=\"200px\" src=\"http://dl.iteye.com/upload/attachment/0082/1266/cfa06567-b3c0-3976-a33f-83273f7a6622.jpg\" alt=\"\"/><br/>&nbsp;</span></p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\">&nbsp;</p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\">&nbsp;</p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\">&nbsp;</p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\"><span style=\"font-size: 10.5000pt; font-family: &#39;宋体&#39;;\">如此只显示与mysql&nbsp;3306端口的通信数据，避免不必要的干扰。</span></p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\"><span style=\"font-size: 10.5000pt; font-family: &#39;宋体&#39;;\">特别要注意的是wireshak基于wincap驱动，不支持本地环回接口的侦听（即使用php连接本地mysql的方法是无法侦听的），请连接其它机器（桥接网络的虚拟机也可）的MySQL进行测试。</span></p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\">&nbsp;</p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\"><span style=\"font-size: 10.5000pt; font-family: &#39;宋体&#39;;\">然后运行我们的PHP程序，侦听结果如下，我们发现，PHP只是简单地将SQL直接发送给MySQL&nbsp;Server&nbsp;:</span></p><p><br/></p>', '1459146259', '1459406866', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('7', 'topic', '阿森纳', '2', '1', '<p>sss</p>', '1459158237', '1459158237', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('8', 'topic', '555委屈委屈我', '5', '1', '<p>ddddd</p>', '1459158652', '1459235079', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('9', 'topic', 'jjjj', '6', '1', '<p>ggggg</p>', '1459159275', '1459159275', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('10', 'topic', 'yyy', '5', '1', '<p>yyyyy</p>', '1459159426', '1459159524', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('11', 'topic', 'hhhh', '4', '1', '<p>dddddd&nbsp;<img width=\"200px\" src=\"/uploads/ueditor/php/upload/image/20160328/1459173535219978.jpg\" title=\"1459173535219978.jpg\" alt=\"081850014334.jpg\"/></p>', '1459172712', '1459406823', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('12', 'topic', '哎呦 不错哦', '5', '1', '<p>是的是的撒 &nbsp;<img width=\"100px\" src=\"/uploads/ueditor/php/upload/image/20160328/1459173178140498.jpg\" title=\"1459173178140498.jpg\" alt=\"414_1309235_3b90f87867b75a9.jpg\"/></p>', '1459173181', '1459173619', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('13', 'topic', 'sdadasd', '3', '1', '<p>dasdas</p>', '1459173743', '1459173743', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('14', 'topic', 'sadasdsa', '4', '1', '<p>dasdasdasdas</p>', '1459173773', '1459173773', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('15', 'topic', 'ggg', '7', '1', '<p>gfgdfg</p>', '1459222189', '1459222189', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('16', 'topic', '我是123456', '6', '2', '<p>大三大四</p>', '1459232099', '1459232099', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('17', 'topic', 'dadasd', '3', '2', '<p>sadasdasd</p>', '1459316768', '1459316768', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('18', 'topic', '今日头条', '4', '1', '<p>大三大四 &nbsp;<img src=\"/uploads/ueditor/php/upload/image/20160331/1459406910841185.jpg\" title=\"1459406910841185.jpg\" alt=\"1459406910841185.jpg\" width=\"57\" height=\"70\" border=\"0\" vspace=\"0\" style=\"width: 57px; height: 70px;\"/></p>', '1459406935', '1459406960', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('19', 'topic', '周杰伦', '2', '5', '<p>阿诗丹顿</p>', '1459413374', '1459413374', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('20', 'topic', 'fffffff', '4', '1', '<p>fffff</p>', '1459937111', '1459937111', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('21', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966360', '1460966360', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('22', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966382', '1460966382', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('23', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966397', '1460966397', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('24', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966442', '1460966442', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('25', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966568', '1460966568', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('26', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966785', '1460966785', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('27', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966894', '1460966894', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('28', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966920', '1460966920', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('29', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966949', '1460966949', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('30', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460967047', '1460967047', '10', '0', '0', '27', '1', 'zxx123', '2016', '0');
INSERT INTO `ad_post` VALUES ('31', 'topic', 'ttt', '4', '1', '<p>ttttt</p>', '1460967085', '1460967085', '10', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('32', 'topic', 'ttt', '4', '1', '<p>ttttt</p>', '1460967128', '1460967128', '10', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('33', 'topic', 'ttt', '4', '1', '<p>ttttt</p>', '1460967467', '1460967467', '10', '1', '0', '3', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('34', 'topic', '喔喔dddd', '6', '1', '<p><img width=\"200px\" height=\"200px\" src=\"/uploads/ueditor/php/upload/image/20160419/1461036191970710.png\" title=\"1461036191970710.png\" alt=\"QQ截图20140721124138.png\"/>ddddd</p><p><br/></p><p>sssssss</p>', '1461036221', '1461036349', '10', '1', '0', '1', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('35', 'topic', '我是百度首页的截图', '4', '1', '<p>cccccc<br/></p><p><br/></p><p><img width=\"200px\" height=\"200px;\" src=\"/uploads/ueditor/php/upload/image/20160419/1461047957927334.png\" title=\"1461047957927334.png\" alt=\"QQ图片20160419143753.png\"/></p><p><br/></p><p><br/></p><p>dddddd</p><p><br/></p><p><br/></p><p>哈哈哈哈</p>', '1461047999', '1461048080', '10', '1', '0', '5', '8', 'abc', '2016', 'zxx123');

-- ----------------------------
-- Table structure for `ad_reply`
-- ----------------------------
DROP TABLE IF EXISTS `ad_reply`;
CREATE TABLE `ad_reply` (
  `reply_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reply_post` int(11) NOT NULL,
  `reply_content` text CHARACTER SET utf8 NOT NULL,
  `reply_create` int(11) DEFAULT NULL,
  `reply_user` int(11) NOT NULL,
  `reply_ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_user_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `reply_title` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `reply_update` int(11) NOT NULL,
  `reply_support` int(11) DEFAULT '0',
  `reply_against` int(11) DEFAULT '0',
  `reply_floor` int(11) DEFAULT '0',
  `reply_note` varchar(50) CHARACTER SET utf8 DEFAULT '0',
  `reply_deld` tinyint(4) DEFAULT '0',
  `reply_status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_reply
-- ----------------------------
INSERT INTO `ad_reply` VALUES ('1', '33', '<p>ttttt</p>', '1460967467', '1', null, 'zxx123', 'ttt', '1460967467', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('2', '33', '擦擦擦擦', '2016', '1', null, 'zxx123', 'ttt', '2016', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('3', '33', '擦擦擦擦', '2016', '1', null, 'zxx123', 'ttt', '2016', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('4', '33', '擦擦擦擦', '1460971156', '1', null, 'zxx123', 'ttt', '1460971156', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('5', '33', '擦擦擦擦', '1460971234', '1', null, 'zxx123', 'ttt', '1460971234', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('6', '33', '擦擦擦擦', '1460971250', '1', null, 'zxx123', 'ttt', '1460971250', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('7', '33', '擦擦擦擦', '1460971275', '1', null, 'zxx123', 'ttt', '1460971275', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('8', '33', '擦擦擦擦', '1460971301', '1', null, 'zxx123', 'ttt', '1460971301', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('9', '33', '积极', '1460971337', '1', null, 'zxx123', 'ttt', '1460971337', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('10', '33', '有意愿', '1460971568', '1', null, 'zxx123', 'ttt', '1460971568', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('11', '3', '谁谁谁', '1460971830', '1', null, 'zxx123', '我是第三条的标题', '1460971830', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('12', '3', 'ddd', '1461031800', '1', null, 'zxx123', '我是第三条的标题', '1461031800', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('13', '34', '<p><img width=\"200px\" height=\"200px\" src=\"/uploads/ueditor/php/upload/image/20160419/1461036191970710.png\" title=\"1461036191970710.png\" alt=\"QQ截图20140721124138.png\"/></p><p>gggg</p>', '1461036221', '1', null, 'zxx123', '喔喔', '1461036221', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('14', '34', 'aiyou  bucuo ', '1461036231', '1', null, 'zxx123', '喔喔', '1461036231', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('15', '35', '<p>cccccc<br/></p><p><br/></p><p><img width=\"200px\" height=\"200px;\" src=\"/uploads/ueditor/php/upload/image/20160419/1461047957927334.png\" title=\"1461047957927334.png\" alt=\"QQ图片20160419143753.png\"/></p><p><br/></p><p><br/></p><p>dddddd</p>', '1461047999', '1', null, 'zxx123', '我是百度首页的截图', '1461047999', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('16', '35', '咳咳咳咳咳', '1461048026', '1', null, 'zxx123', '我是百度首页的截图', '1461048026', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('17', '35', 'zxxxx', '1461218512', '8', null, 'abc', '我是百度首页的截图', '1461218512', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('18', '35', 'ddddd', '1461219283', '8', null, 'abc', '我是百度首页的截图', '1461219283', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('19', '35', 'hhhhh', '1461219289', '8', null, 'abc', '我是百度首页的截图', '1461219289', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('20', '35', 'hoooooooooooooo', '1461219341', '8', null, 'abc', '我是百度首页的截图', '1461219341', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('21', '30', '哦哦哦', '1461222794', '1', null, 'zxx123', 'gggg', '1461222794', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('22', '30', '哦哦哦', '1461223638', '1', null, 'zxx123', 'gggg', '1461223638', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('23', '30', '哦哦哦', '1461223979', '1', null, 'zxx123', 'gggg', '1461223979', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('24', '30', '哦哦哦', '1461224074', '1', null, 'zxx123', 'gggg', '1461224074', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('25', '30', '哦哦哦', '1461224176', '1', null, 'zxx123', 'gggg', '1461224176', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('26', '30', '哦哦哦', '1461225839', '1', null, 'zxx123', 'gggg', '1461225839', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('27', '30', '哦哦哦', '1461226048', '1', null, 'zxx123', 'gggg', '1461226048', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('28', '30', '哦哦哦', '1461226926', '1', null, 'zxx123', 'gggg', '1461226926', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('29', '30', '哦哦哦', '1461226941', '1', null, 'zxx123', 'gggg', '1461226941', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('30', '30', '哦哦哦', '1461227036', '1', null, 'zxx123', 'gggg', '1461227036', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('31', '30', '哦哦哦', '1461227049', '1', null, 'zxx123', 'gggg', '1461227049', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('32', '30', '哦哦哦', '1461227067', '1', null, 'zxx123', 'gggg', '1461227067', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('33', '30', '哦哦哦', '1461227074', '1', null, 'zxx123', 'gggg', '1461227074', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('34', '30', '哦哦哦', '1461227136', '1', null, 'zxx123', 'gggg', '1461227136', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('35', '30', '哦哦哦', '1461227164', '1', null, 'zxx123', 'gggg', '1461227164', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('36', '30', '哦哦哦', '1461227180', '1', null, 'zxx123', 'gggg', '1461227180', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('37', '30', '哦哦哦', '1461227383', '1', null, 'zxx123', 'gggg', '1461227383', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('38', '30', '哦哦哦', '1461227464', '1', null, 'zxx123', 'gggg', '1461227464', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('39', '30', '哦哦哦', '1461227495', '1', null, 'zxx123', 'gggg', '1461227495', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('40', '30', '哦哦哦', '1461228234', '1', null, 'zxx123', 'gggg', '1461228234', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('41', '30', '哦哦哦', '1461228251', '1', null, 'zxx123', 'gggg', '1461228251', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('42', '30', '哦哦哦', '1461228392', '1', null, 'zxx123', 'gggg', '1461228392', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('43', '30', '哦哦哦', '1461228422', '1', null, 'zxx123', 'gggg', '1461228422', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('44', '30', '哦哦哦', '1461228435', '1', null, 'zxx123', 'gggg', '1461228435', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('45', '30', '哦哦哦', '1461228457', '1', null, 'zxx123', 'gggg', '1461228457', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('46', '30', '哦哦哦', '1461228482', '1', null, 'zxx123', 'gggg', '1461228482', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('47', '30', '哦哦哦', '1461228674', '1', null, 'zxx123', 'gggg', '1461228674', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `ad_user`
-- ----------------------------
DROP TABLE IF EXISTS `ad_user`;
CREATE TABLE `ad_user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
  `user_role` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_user
-- ----------------------------
INSERT INTO `ad_user` VALUES ('1', 'zxx123', '$2y$13$PEm7VNw5ApXrUbdT1OE/l..BbF.2zFxWJLBuC9ChYnsZ8zpFLL8ya', '297208251@qq.com', '1458637332', '1460703637', '127.0.0.1', '哎呦不错哦', '10', '0', 'aYOOl2ZOT95Y2YlZ5ZwTON_y8jwgvdoc', '', '0');
INSERT INTO `ad_user` VALUES ('2', 'zxx123456', '$2y$13$Hz8.xi2c3K21ETvzxndFU.Et4J6aHL4xmH4Scc0ZUXhxhYF0XvA9K', '89203299@qq.com', '1458702633', '1458719856', '127.0.0.1', '0', '10', '0', '74HSYguDlqW7VlgngIJoHkvq0a8HATQj', null, '1');
INSERT INTO `ad_user` VALUES ('3', 'zxx123456789', '$2y$13$lzRDSnYGTb4prlzuwNYAzugWt91Nrk.PclFFZsXFAUYF1rdHmJohi', '297208251@qq.com', '1458702664', '1459848986', '127.0.0.1', '0', '10', '1', 'jVtryq7r0L3EIEMLM-b-xKt9ZySzNaLB', '0', '1');
INSERT INTO `ad_user` VALUES ('4', 'zhou123', '$2y$13$U7M8MXazZ08GWGf1En6VreFkZjUi1VGEiNkXI4yDFmdvhgZQhtmNq', '89203299@qq.com', '1458704684', '1458704684', '127.0.0.1', '0', '10', '0', 'ZGJo0sUaGeb6TZZUGN-NcG7sIcAFCrH0', '0', '1');
INSERT INTO `ad_user` VALUES ('5', 'zhou', '$2y$13$3QtCxoSrbBKlXrr5QsRxf.EPzvmMXbT46Zs./tASC7.eU5ORXruRq', 'zhou@qq.com', '1459413352', '1460015211', '127.0.0.1', '周杰伦 哎呦 不错哦 fffff', '10', '0', 'DjGz9-xIyEShxvnuWpcNgRcB3mo3ysSS', '0', '2');
INSERT INTO `ad_user` VALUES ('6', 'admin', '$2y$13$EhOsRRMZ/M4ExlW5MU1Ot.IgdU6hH51ZsaQjbHcn9R8KYyb5juwme', 'admin@qq.com', '1459848774', '1459848870', '127.0.0.1', '系统管理员', '10', '0', 'RPIFqqC8qO5WNyyZnubtS5aPagfEGfXE', '0', '1');
INSERT INTO `ad_user` VALUES ('7', 'b1', '$2y$13$A3/8.w5R9BXDKHKn0bg4dORnxHziyZItFau.MdBDX4bNdiWE1NQku', 'b1@qq.com', '1460018291', '1460018291', '127.0.0.1', '0', '10', '0', 'RGmrOErhwFTsp3oZjm1igsZPt-pOHSO4', '0', '1');
INSERT INTO `ad_user` VALUES ('8', 'abc', '$2y$13$L6sD6PrQSyPIj/gvguQgJef99mFvALGE1kiR7Wr/MrjeAbm0sYWHi', 'abc@qq.com', '1461217665', '1461217665', '127.0.0.1', '0', '10', '0', 'WyUQVQLLKUS4vUH_EKruOR26ZUBXkX4Q', '0', '1');

-- ----------------------------
-- Table structure for `ad_user_meta`
-- ----------------------------
DROP TABLE IF EXISTS `ad_user_meta`;
CREATE TABLE `ad_user_meta` (
  `meta_id` int(11) NOT NULL,
  `meta_user_id` int(11) NOT NULL,
  `meta_type` varchar(50) CHARACTER SET utf8 DEFAULT '0',
  `meta_value` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `meta_target_id` int(100) DEFAULT '0',
  `meta_target_type` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `meta_create` int(11) NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_user_meta
-- ----------------------------

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1459933607');
INSERT INTO `migration` VALUES ('m140506_102106_rbac_init', '1459933612');
