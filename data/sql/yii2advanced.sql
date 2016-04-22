/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-04-22 17:21:56
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
  `notice_create` int(11) DEFAULT NULL,
  `notice_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_notice
-- ----------------------------
INSERT INTO `ad_notice` VALUES ('1', '1', '5', '37', '141', 'new_comment', 'ddddd', '0', '1461316014', null);
INSERT INTO `ad_notice` VALUES ('2', '1', '5', '37', '142', 'new_comment', 'ddddd', '0', '1461316054', null);
INSERT INTO `ad_notice` VALUES ('3', '5', '1', '38', '145', 'new_comment', 'hhhhhh', '0', '1461316222', null);
INSERT INTO `ad_notice` VALUES ('4', '5', '1', '38', '146', 'new_comment', 'yyyyyy', '0', '1461316477', null);
INSERT INTO `ad_notice` VALUES ('5', '1', '5', '38', '147', 'new_comment', '顶顶顶顶顶', '0', '1461316522', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
INSERT INTO `ad_post` VALUES ('29', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460966949', '1460966949', '10', '0', '0', '18', '1', 'zxx123', '2016', '0');
INSERT INTO `ad_post` VALUES ('30', 'topic', 'gggg', '3', '1', '<p>cccc</p>', '1460967047', '1460967047', '10', '0', '0', '38', '1', 'zxx123', '2016', '0');
INSERT INTO `ad_post` VALUES ('31', 'topic', 'ttt', '4', '1', '<p>ttttt</p>', '1460967085', '1460967085', '10', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('32', 'topic', 'ttt', '4', '1', '<p>ttttt</p>', '1460967128', '1460967128', '10', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('33', 'topic', 'ttt', '4', '1', '<p>ttttt</p>', '1460967467', '1460967467', '10', '1', '0', '3', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('34', 'topic', '喔喔dddd', '6', '1', '<p><img width=\"200px\" height=\"200px\" src=\"/uploads/ueditor/php/upload/image/20160419/1461036191970710.png\" title=\"1461036191970710.png\" alt=\"QQ截图20140721124138.png\"/>ddddd</p><p><br/></p><p>sssssss</p>', '1461036221', '1461036349', '10', '1', '0', '1', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('35', 'topic', '我是百度首页的截图', '4', '1', '<p>cccccc<br/></p><p><br/></p><p><img width=\"200px\" height=\"200px;\" src=\"/uploads/ueditor/php/upload/image/20160419/1461047957927334.png\" title=\"1461047957927334.png\" alt=\"QQ图片20160419143753.png\"/></p><p><br/></p><p><br/></p><p>dddddd</p><p><br/></p><p><br/></p><p>哈哈哈哈</p>', '1461047999', '1461048080', '10', '1', '0', '5', '8', 'abc', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('36', 'topic', '正式第一帖,编辑标题2', '4', '1', '<p><span id=\"content_all\">本书是分布式系统领域的经典著作，由阿里巴巴高级技术专家“阿里日照”（OceanBase核心开发人\r\n员）撰写，阳振坤、章文嵩、杨卫华、汪源、余锋（褚霸）、赖春波等来自阿里、新浪、网易和百度的资深技术专家联袂推荐。理论方面，不仅讲解了大规模分布式\r\n存储系统的核心技术和基本原理，而且对谷歌、亚马逊、微软和阿里巴巴等国际型大互联网公司的大规模分布式存储系统进行了分析；实战方面，首先通过对阿里巴\r\n巴的分布式数据库OceanBase的实现细节的深入剖析完整地展示了大规模分布式存储系统的架构与设计过程，然后讲解了大规模分布式存储技术在云计算和\r\n大数据领域的实践与应用。<br/>　　本书内容分为四个部分：基础篇——分布式存储系统的基础知识，包含单机存储系统的知识，如数据模型、事务与并发控\r\n制、故障恢复、存储引擎、压缩/解压缩等；分布式系统的数据分布、复制、一致性、容错、可扩展性等。范型篇——介绍谷歌、亚马逊、微软、阿里巴巴等著名互\r\n联网公司的大规模分布式存储系统架构，涉及分布式文件系统、分布式键值系统、分布式表格系统以及分布式数据库技术等。实践篇——以阿里巴巴的分布式数据库\r\nOceanBase为例，详细介绍分布式数据库内部实现，以及实践过程中的经验。专题篇——介绍分布式系统的主要应用：云存储和大数据，这些是近年来的热\r\n门领域，本书介绍了云存储平台、技术与安全，以及大数据的概念、流式计算、实时分析等。</span></p>', '1461305640', '1461305893', '10', '0', '0', '1', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('37', 'topic', '表情IP化是变现路径吗', '7', '1', '<p>承认与否，表情包所掀起的浪潮正在波及全民。在今年开年那场喧嚣的Facebook表情包大战中，内地网友充分显示出了他们的创造能力与表情包存储量的丰富。表情包是一个等待挖掘的巨大蓝海， 尽管尚未发觉足够的金块。</p>', '1461307197', '1461307197', '10', '0', '0', '61', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('38', 'topic', '浏览器中因cookie设置HttpOnly标志引起的安全问题', '7', '1', '<p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">1、简介</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">如果cookie设置了HttpOnly标志，可以在发生XSS时避免JavaScript读取cookie，这也是HttpOnly被引入的原因。但这种方式能防住攻击者吗?HttpOnly标志可以防止cookie被“读取”，那么能不能防止被“写”呢?答案是否定的，那么这里面就有文章可做了，因为已证明有些浏览器的HttpOnly标记可以被JavaScript写入覆盖，而这种覆盖可能被攻击者利用发动session fixation攻击。本文主题就是讨论这种技术。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(248, 248, 248);\"><a href=\"http://s9.51cto.com/wyfs02/M02/24/12/wKioL1NLf3exhfqOAAEHYZITmUA763.jpg\" target=\"_blank\" style=\"color: rgb(0, 66, 118);\"><img class=\"fit-image\" border=\"0\" alt=\"浏览器中因cookie设置HttpOnly标志引起的安全问题\" src=\"/ueditor/php/upload/image/20160422/1461316121301652.jpg\" width=\"498\" height=\"256\" style=\"border: 0px;\"/></a></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">2、用JavaScript覆盖cookie中的HttpOnly标志</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">当JavaScript可以覆盖cookie中的HttpOnly标志时，攻击者如果发现网站的XSS漏洞，就可以利用HttpOnly cookie发动session fixation攻击(更多关于session fixation攻击的内容可以参考笔者之前的文章[1])。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">session fixation攻击的后果是攻击者可以冒充受害者，因为其知道受害者的session ID。这里假设当成功登录应用后session不会重新生成。现实也确实是这样的，但浏览器不应该允许JavaScript覆盖HttpOnly标志，因为这种覆盖可能与某些应用程序登录成功后不会重新生成会话这一特性结合，发动session fixation攻击。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">那么登录成功后如果重新生成session ID的话安全性是怎么样的呢?还能被攻击者利用吗?登录之后，攻击者通过设置用户的session为攻击者正在使用的session，将用户切换为攻击者自己的帐户。受害者以为其正在使用自己的帐户，实际上一些敏感信息已经泄露给攻击者了。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">3、允许JavaScript覆盖HttpOnly cookie的浏览器</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">经笔者证实，以下浏览器允许JavaScript覆盖HttpOnly cookies：</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Safari</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Opera Mobile</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Opera Mini</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">BlackBerry browser</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Konqueror browser</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">该问题已经(于2014年2月14日)提交给相应的厂商。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">IE、Firefix和Opera(标准安装版本)不容易受到上述攻击影响。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">4、厂商的回复</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Opera公司已经确认该问题在Opera Mobile和Opera Mini中存在，决定在Opera Mini中修复该问题(修复日期还未确定)。尽管Opera Mobile当前在Google Play中可以下载，但Opera公司认为该版本已经过时，因此决定不对其进行修改(他们建议替换为Opera for Android版本，该版本可以防止JavaScript覆盖HttpOnly cookie)。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">黑莓公司回复说已经宣布于2014年4月后不再对PlayBook Tablet的操作系统(笔者当时测试时使用的系统)进行支持，因此不会修复该问题。但是由于该问题是在支持结束声明之前提交的，他们决定将我加入到黑莓安全事件响应小组的感谢名单中(根据他们的规定，笔者的名字会在2014年4月底才会被加入)[2]。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Konqueror确认了该问题，但可能不会去修复。该bug的信息可以在KDE Bugtracking系统中找到[3]。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">该问题两个月前提交给了苹果公司，但从未收到任何反馈。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">5、漏洞利用</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">以下是部分示例代码：</p><pre style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; color: rgb(51, 51, 51); font-family: &#39;Courier New&#39;, monospace; font-size: 12px; width: 591.016px; overflow: auto; line-height: 28px; background-color: rgb(230, 230, 230);\">&lt;?&nbsp;setcookie(&#39;cookie1&#39;,++$_COOKIE[&#39;cookie1&#39;],time()+2592000,&#39;/&#39;,&#39;&#39;,0,1);&nbsp;&nbsp;setcookie(&#39;cookie2&#39;,++$_COOKIE[&#39;cookie2&#39;],time()+2592000,&#39;/&#39;,&#39;&#39;,0,0);&nbsp;&nbsp;?&gt;&nbsp;&lt;HTML&gt;&nbsp;&lt;?&nbsp;print&nbsp;&quot;Cookie1:&quot;.$_COOKIE[&#39;cookie1&#39;].&quot;&lt;br&gt;&quot;;&nbsp;&nbsp;print&nbsp;&quot;Cookie2:&quot;.$_COOKIE[&#39;cookie2&#39;];&nbsp;&nbsp;?&gt;&nbsp;&lt;script&gt;alert(document.cookie);&lt;/script&gt;&nbsp;&lt;script&gt;document.cookie=&#39;cookie1=100;expires=Thu,&nbsp;2&nbsp;Aug&nbsp;2014&nbsp;20:00:00&nbsp;UTC;&nbsp;path=/&#39;;&lt;/script&gt;&nbsp;&lt;/HTML&gt;</pre><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">过程如下：运行这段代码，之后可以看到cookie1(设置了HttpOnly标志)已经被JavaScript写入覆盖了。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">6、总结</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">HttpOnly标志的引入是为了防止设置了该标志的cookie被JavaScript读取，但事实证明设置了这种cookie在某些浏览器中却能被JavaScript覆盖，可被攻击者利用来发动session fixation攻击。该问题被提出后，得到了相关厂商的响应。最后，本文给出了一段利用演示代码。</p><p><br/></p>', '1461316124', '1461316124', '10', '0', '0', '4', '1', 'zxx123', '2016', 'zxx123');

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
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
INSERT INTO `ad_reply` VALUES ('48', '30', '反反复复', '1461233038', '1', null, 'zxx123', 'gggg', '1461233038', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('49', '30', '反反复复', '1461233073', '1', null, 'zxx123', 'gggg', '1461233073', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('50', '30', '反反复复', '1461287478', '1', null, 'zxx123', 'gggg', '1461287478', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('51', '30', '反反复复', '1461287735', '1', null, 'zxx123', 'gggg', '1461287735', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('52', '30', '反反复复', '1461288882', '1', null, 'zxx123', 'gggg', '1461288882', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('53', '30', 'kkkkkkkkkkkk', '1461292050', '1', null, 'zxx123', 'gggg', '1461292050', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('54', '30', 'kkkkkkkkkkkk', '1461292069', '1', null, 'zxx123', 'gggg', '1461292069', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('55', '30', 'kkkkkkkkkkkk', '1461292394', '1', null, 'zxx123', 'gggg', '1461292394', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('56', '30', 'kkkkkkkkkkkk', '1461292450', '1', null, 'zxx123', 'gggg', '1461292450', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('57', '30', 'kkkkkkkkkkkk', '1461292503', '1', null, 'zxx123', 'gggg', '1461292503', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('58', '30', 'kkkkkkkkkkkk', '1461292684', '1', null, 'zxx123', 'gggg', '1461292684', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('59', '30', 'oooooo', '1461292689', '1', null, 'zxx123', 'gggg', '1461292689', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('60', '30', '9999999999999', '1461292703', '1', null, 'zxx123', 'gggg', '1461292703', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('61', '29', 'oooo', '1461294697', '1', null, 'zxx123', 'gggg', '1461294697', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('62', '29', 'oooo', '1461294712', '1', null, 'zxx123', 'gggg', '1461294712', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('63', '29', 'oooo', '1461296483', '1', null, 'zxx123', 'gggg', '1461296483', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('64', '29', 'oooo', '1461296533', '1', null, 'zxx123', 'gggg', '1461296533', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('65', '29', 'oooo', '1461296590', '1', null, 'zxx123', 'gggg', '1461296590', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('66', '29', 'oooo', '1461296647', '1', null, 'zxx123', 'gggg', '1461296647', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('67', '29', 'oooo', '1461296971', '1', null, 'zxx123', 'gggg', '1461296971', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('68', '29', 'oooo', '1461297283', '1', null, 'zxx123', 'gggg', '1461297283', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('69', '29', 'oooo', '1461303293', '1', null, 'zxx123', 'gggg', '1461303293', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('70', '29', 'oooo', '1461303397', '1', null, 'zxx123', 'gggg', '1461303397', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('71', '29', 'oooo', '1461303414', '1', null, 'zxx123', 'gggg', '1461303414', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('72', '29', 'oooo', '1461303487', '1', null, 'zxx123', 'gggg', '1461303487', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('73', '29', 'oooo', '1461303501', '1', null, 'zxx123', 'gggg', '1461303501', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('74', '29', 'oooo', '1461303517', '1', null, 'zxx123', 'gggg', '1461303517', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('75', '29', 'oooo', '1461303539', '1', null, 'zxx123', 'gggg', '1461303539', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('76', '29', 'oooo', '1461304985', '1', null, 'zxx123', 'gggg', '1461304985', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('77', '29', 'oooo', '1461305591', '1', null, 'zxx123', 'gggg', '1461305591', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('78', '29', 'oooo', '1461305601', '1', null, 'zxx123', 'gggg', '1461305601', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('79', '36', '<p><span id=\"content_all\">本书是分布式系统领域的经典著作，由阿里巴巴高级技术专家“阿里日照”（OceanBase核心开发人\r\n员）撰写，阳振坤、章文嵩、杨卫华、汪源、余锋（褚霸）、赖春波等来自阿里、新浪、网易和百度的资深技术专家联袂推荐。理论方面，不仅讲解了大规模分布式\r\n存储系统的核心技术和基本原理，而且对谷歌、亚马逊、微软和阿里巴巴等国际型大互联网公司的大规模分布式存储系统进行了分析；实战方面，首先通过对阿里巴\r\n巴的分布式数据库OceanBase的实现细节的深入剖析完整地展示了大规模分布式存储系统的架构与设计过程，然后讲解了大规模分布式存储技术在云计算和\r\n大数据领域的实践与应用。<br/>　　本书内容分为四个部分：基础篇——分布式存储系统的基础知识，包含单机存储系统的知识，如数据模型、事务与并发控\r\n制、故障恢复、存储引擎、压缩/解压缩等；分布式系统的数据分布、复制、一致性、容错、可扩展性等。范型篇——介绍谷歌、亚马逊、微软、阿里巴巴等著名互\r\n联网公司的大规模分布式存储系统架构，涉及分布式文件系统、分布式键值系统、分布式表格系统以及分布式数据库技术等。实践篇——以阿里巴巴的分布式数据库\r\nOceanBase为例，详细介绍分布式数据库内部实现，以及实践过程中的经验。专题篇——介绍分布式系统的主要应用：云存储和大数据，这些是近年来的热\r\n门领域，本书介绍了云存储平台、技术与安全，以及大数据的概念、流式计算、实时分析等。</span></p>', '1461305640', '1', null, 'zxx123', '正式第一帖', '1461305640', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('80', '36', '订单多的', '1461307158', '1', null, 'zxx123', '正式第一帖,编辑标题2', '1461307158', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('81', '37', '<p>承认与否，表情包所掀起的浪潮正在波及全民。在今年开年那场喧嚣的Facebook表情包大战中，内地网友充分显示出了他们的创造能力与表情包存储量的丰富。表情包是一个等待挖掘的巨大蓝海， 尽管尚未发觉足够的金块。</p>', '1461307197', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461307197', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('82', '37', '沙发', '1461307525', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461307525', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('83', '37', '沙发', '1461311114', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461311114', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('84', '37', '沙发', '1461311178', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461311178', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('85', '37', '沙发', '1461311716', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461311716', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('86', '37', '沙发', '1461311902', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461311902', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('87', '37', '沙发', '1461312039', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312039', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('88', '37', '沙发', '1461312153', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312153', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('89', '37', '沙发', '1461312269', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312269', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('90', '37', '沙发', '1461312310', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312310', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('91', '37', '沙发', '1461312342', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312342', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('92', '37', '沙发', '1461312359', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312359', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('93', '37', '沙发', '1461312374', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312374', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('94', '37', '沙发', '1461312489', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312489', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('95', '37', '沙发', '1461312657', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312657', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('96', '37', '沙发', '1461312694', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312694', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('97', '37', '沙发', '1461312739', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312739', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('98', '37', '沙发', '1461312811', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312811', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('99', '37', '沙发', '1461312834', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312834', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('100', '37', 'sssssss', '1461312906', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312906', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('101', '37', 'oo', '1461312931', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312931', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('102', '37', 'uuuu', '1461312945', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461312945', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('103', '37', 'uuuu', '1461313715', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461313715', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('104', '37', 'uuuu', '1461313718', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461313718', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('105', '37', 'uuuu', '1461314011', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461314011', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('106', '37', 'uuuu', '1461314019', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461314019', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('107', '37', 'uuuu', '1461314060', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461314060', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('108', '37', 'dddddd', '1461314180', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314180', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('109', '37', 'dddddd', '1461314211', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314211', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('110', '37', 'dddddd', '1461314248', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314248', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('111', '37', 'dddddd', '1461314296', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314296', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('112', '37', 'dddddd', '1461314402', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314402', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('113', '37', 'dddddd', '1461314415', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314415', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('114', '37', 'dddddd', '1461314450', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314450', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('115', '37', 'dddddd', '1461314516', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314516', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('116', '37', 'dddddd', '1461314554', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314554', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('117', '37', 'dddddd', '1461314615', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314615', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('118', '37', 'dddddd', '1461314630', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314630', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('119', '37', 'dddddd', '1461314670', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314670', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('120', '37', 'dddddd', '1461314752', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314752', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('121', '37', 'dddddd', '1461314800', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314800', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('122', '37', 'dddddd', '1461314852', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314852', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('123', '37', 'dddddd', '1461314904', '5', null, 'zhou', '表情IP化是变现路径吗', '1461314904', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('124', '37', 'ddddd', '1461315318', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315318', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('125', '37', 'ddddd', '1461315522', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315522', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('126', '37', 'ddddd', '1461315537', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315537', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('127', '37', 'ddddd', '1461315555', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315555', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('128', '37', 'ddddd', '1461315570', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315570', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('129', '37', 'ddddd', '1461315580', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315580', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('130', '37', 'ddddd', '1461315591', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315591', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('131', '37', 'ddddd', '1461315612', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315612', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('132', '37', 'ddddd', '1461315626', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315626', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('133', '37', 'ddddd', '1461315681', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315681', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('134', '37', 'ddddd', '1461315719', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315719', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('135', '37', 'ddddd', '1461315734', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315734', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('136', '37', 'ddddd', '1461315841', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315841', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('137', '37', 'ddddd', '1461315879', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315879', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('138', '37', 'ddddd', '1461315922', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315922', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('139', '37', 'ddddd', '1461315943', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315943', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('140', '37', 'ddddd', '1461315991', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461315991', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('141', '37', 'ddddd', '1461316014', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461316014', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('142', '37', 'ddddd', '1461316054', '1', null, 'zxx123', '表情IP化是变现路径吗', '1461316054', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('143', '38', '<p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">1、简介</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">如果cookie设置了HttpOnly标志，可以在发生XSS时避免JavaScript读取cookie，这也是HttpOnly被引入的原因。但这种方式能防住攻击者吗?HttpOnly标志可以防止cookie被“读取”，那么能不能防止被“写”呢?答案是否定的，那么这里面就有文章可做了，因为已证明有些浏览器的HttpOnly标记可以被JavaScript写入覆盖，而这种覆盖可能被攻击者利用发动session fixation攻击。本文主题就是讨论这种技术。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(248, 248, 248);\"><a href=\"http://s9.51cto.com/wyfs02/M02/24/12/wKioL1NLf3exhfqOAAEHYZITmUA763.jpg\" target=\"_blank\" style=\"color: rgb(0, 66, 118);\"><img class=\"fit-image\" border=\"0\" alt=\"浏览器中因cookie设置HttpOnly标志引起的安全问题\" src=\"/ueditor/php/upload/image/20160422/1461316121301652.jpg\" width=\"498\" height=\"256\" style=\"border: 0px;\"/></a></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">2、用JavaScript覆盖cookie中的HttpOnly标志</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">当JavaScript可以覆盖cookie中的HttpOnly标志时，攻击者如果发现网站的XSS漏洞，就可以利用HttpOnly cookie发动session fixation攻击(更多关于session fixation攻击的内容可以参考笔者之前的文章[1])。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">session fixation攻击的后果是攻击者可以冒充受害者，因为其知道受害者的session ID。这里假设当成功登录应用后session不会重新生成。现实也确实是这样的，但浏览器不应该允许JavaScript覆盖HttpOnly标志，因为这种覆盖可能与某些应用程序登录成功后不会重新生成会话这一特性结合，发动session fixation攻击。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">那么登录成功后如果重新生成session ID的话安全性是怎么样的呢?还能被攻击者利用吗?登录之后，攻击者通过设置用户的session为攻击者正在使用的session，将用户切换为攻击者自己的帐户。受害者以为其正在使用自己的帐户，实际上一些敏感信息已经泄露给攻击者了。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">3、允许JavaScript覆盖HttpOnly cookie的浏览器</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">经笔者证实，以下浏览器允许JavaScript覆盖HttpOnly cookies：</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Safari</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Opera Mobile</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Opera Mini</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">BlackBerry browser</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Konqueror browser</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">该问题已经(于2014年2月14日)提交给相应的厂商。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">IE、Firefix和Opera(标准安装版本)不容易受到上述攻击影响。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">4、厂商的回复</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Opera公司已经确认该问题在Opera Mobile和Opera Mini中存在，决定在Opera Mini中修复该问题(修复日期还未确定)。尽管Opera Mobile当前在Google Play中可以下载，但Opera公司认为该版本已经过时，因此决定不对其进行修改(他们建议替换为Opera for Android版本，该版本可以防止JavaScript覆盖HttpOnly cookie)。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">黑莓公司回复说已经宣布于2014年4月后不再对PlayBook Tablet的操作系统(笔者当时测试时使用的系统)进行支持，因此不会修复该问题。但是由于该问题是在支持结束声明之前提交的，他们决定将我加入到黑莓安全事件响应小组的感谢名单中(根据他们的规定，笔者的名字会在2014年4月底才会被加入)[2]。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Konqueror确认了该问题，但可能不会去修复。该bug的信息可以在KDE Bugtracking系统中找到[3]。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">该问题两个月前提交给了苹果公司，但从未收到任何反馈。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">5、漏洞利用</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">以下是部分示例代码：</p><pre style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; color: rgb(51, 51, 51); font-family: &#39;Courier New&#39;, monospace; font-size: 12px; width: 591.016px; overflow: auto; line-height: 28px; background-color: rgb(230, 230, 230);\">&lt;?&nbsp;setcookie(&#39;cookie1&#39;,++$_COOKIE[&#39;cookie1&#39;],time()+2592000,&#39;/&#39;,&#39;&#39;,0,1);&nbsp;&nbsp;setcookie(&#39;cookie2&#39;,++$_COOKIE[&#39;cookie2&#39;],time()+2592000,&#39;/&#39;,&#39;&#39;,0,0);&nbsp;&nbsp;?&gt;&nbsp;&lt;HTML&gt;&nbsp;&lt;?&nbsp;print&nbsp;&quot;Cookie1:&quot;.$_COOKIE[&#39;cookie1&#39;].&quot;&lt;br&gt;&quot;;&nbsp;&nbsp;print&nbsp;&quot;Cookie2:&quot;.$_COOKIE[&#39;cookie2&#39;];&nbsp;&nbsp;?&gt;&nbsp;&lt;script&gt;alert(document.cookie);&lt;/script&gt;&nbsp;&lt;script&gt;document.cookie=&#39;cookie1=100;expires=Thu,&nbsp;2&nbsp;Aug&nbsp;2014&nbsp;20:00:00&nbsp;UTC;&nbsp;path=/&#39;;&lt;/script&gt;&nbsp;&lt;/HTML&gt;</pre><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">过程如下：运行这段代码，之后可以看到cookie1(设置了HttpOnly标志)已经被JavaScript写入覆盖了。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">6、总结</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">HttpOnly标志的引入是为了防止设置了该标志的cookie被JavaScript读取，但事实证明设置了这种cookie在某些浏览器中却能被JavaScript覆盖，可被攻击者利用来发动session fixation攻击。该问题被提出后，得到了相关厂商的响应。最后，本文给出了一段利用演示代码。</p><p><br/></p>', '1461316124', '1', null, 'zxx123', '浏览器中因cookie设置HttpOnly标志引起的安全问题', '1461316124', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('144', '38', '哎呦不错哦  好屌哦', '1461316142', '1', null, 'zxx123', '浏览器中因cookie设置HttpOnly标志引起的安全问题', '1461316142', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('145', '38', 'hhhhhh', '1461316221', '5', null, 'zhou', '浏览器中因cookie设置HttpOnly标志引起的安全问题', '1461316221', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('146', '38', 'yyyyyy', '1461316476', '5', null, 'zhou', '浏览器中因cookie设置HttpOnly标志引起的安全问题', '1461316476', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_reply` VALUES ('147', '38', '顶顶顶顶顶', '1461316522', '1', null, 'zxx123', '浏览器中因cookie设置HttpOnly标志引起的安全问题', '1461316522', '0', '0', '0', '0', '0', '0');

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
  `user_notice_count` int(11) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_user
-- ----------------------------
INSERT INTO `ad_user` VALUES ('1', 'zxx123', '$2y$13$PEm7VNw5ApXrUbdT1OE/l..BbF.2zFxWJLBuC9ChYnsZ8zpFLL8ya', '297208251@qq.com', '1458637332', '1460703637', '127.0.0.1', '哎呦不错哦', '10', '0', 'aYOOl2ZOT95Y2YlZ5ZwTON_y8jwgvdoc', '', '0', '2');
INSERT INTO `ad_user` VALUES ('2', 'zxx123456', '$2y$13$Hz8.xi2c3K21ETvzxndFU.Et4J6aHL4xmH4Scc0ZUXhxhYF0XvA9K', '89203299@qq.com', '1458702633', '1458719856', '127.0.0.1', '0', '10', '0', '74HSYguDlqW7VlgngIJoHkvq0a8HATQj', null, '1', '0');
INSERT INTO `ad_user` VALUES ('3', 'zxx123456789', '$2y$13$lzRDSnYGTb4prlzuwNYAzugWt91Nrk.PclFFZsXFAUYF1rdHmJohi', '297208251@qq.com', '1458702664', '1459848986', '127.0.0.1', '0', '10', '1', 'jVtryq7r0L3EIEMLM-b-xKt9ZySzNaLB', '0', '1', '0');
INSERT INTO `ad_user` VALUES ('4', 'zhou123', '$2y$13$U7M8MXazZ08GWGf1En6VreFkZjUi1VGEiNkXI4yDFmdvhgZQhtmNq', '89203299@qq.com', '1458704684', '1458704684', '127.0.0.1', '0', '10', '0', 'ZGJo0sUaGeb6TZZUGN-NcG7sIcAFCrH0', '0', '1', '0');
INSERT INTO `ad_user` VALUES ('5', 'zhou', '$2y$13$LF1tWQg6SEYsTT0Gcj1E0Ojpcpk6MkoNp4atfRZf46ArS2831rnFG', 'zhou@qq.com', '1459413352', '1461316357', '127.0.0.1', '周杰伦 哎呦 不错哦 fffff', '10', '0', 'DjGz9-xIyEShxvnuWpcNgRcB3mo3ysSS', '0', '2', '2');
INSERT INTO `ad_user` VALUES ('6', 'admin', '$2y$13$EhOsRRMZ/M4ExlW5MU1Ot.IgdU6hH51ZsaQjbHcn9R8KYyb5juwme', 'admin@qq.com', '1459848774', '1459848870', '127.0.0.1', '系统管理员', '10', '0', 'RPIFqqC8qO5WNyyZnubtS5aPagfEGfXE', '0', '1', '0');
INSERT INTO `ad_user` VALUES ('7', 'b1', '$2y$13$A3/8.w5R9BXDKHKn0bg4dORnxHziyZItFau.MdBDX4bNdiWE1NQku', 'b1@qq.com', '1460018291', '1460018291', '127.0.0.1', '0', '10', '0', 'RGmrOErhwFTsp3oZjm1igsZPt-pOHSO4', '0', '1', '0');
INSERT INTO `ad_user` VALUES ('8', 'abc', '$2y$13$L6sD6PrQSyPIj/gvguQgJef99mFvALGE1kiR7Wr/MrjeAbm0sYWHi', 'abc@qq.com', '1461217665', '1461217665', '127.0.0.1', '0', '10', '0', 'WyUQVQLLKUS4vUH_EKruOR26ZUBXkX4Q', '0', '1', '0');

-- ----------------------------
-- Table structure for `ad_user_meta`
-- ----------------------------
DROP TABLE IF EXISTS `ad_user_meta`;
CREATE TABLE `ad_user_meta` (
  `meta_id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_user_id` int(11) NOT NULL,
  `meta_type` varchar(50) CHARACTER SET utf8 DEFAULT '0',
  `meta_value` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `meta_target_id` int(100) DEFAULT '0',
  `meta_target_type` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `meta_create` int(11) NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_user_meta
-- ----------------------------
INSERT INTO `ad_user_meta` VALUES ('1', '1', 'follow', null, '37', 'topic', '1461312310');
INSERT INTO `ad_user_meta` VALUES ('2', '5', 'follow', null, '37', 'topic', '1461314180');
INSERT INTO `ad_user_meta` VALUES ('3', '1', 'follow', null, '38', 'topic', '1461316142');
INSERT INTO `ad_user_meta` VALUES ('4', '5', 'follow', null, '38', 'topic', '1461316222');

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
