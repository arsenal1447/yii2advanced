/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-05-16 16:33:19
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
  `cat_alias` varchar(32) CHARACTER SET utf8 DEFAULT '0',
  `cat_type` varchar(32) CHARACTER SET utf8 DEFAULT '0',
  `cat_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_count` int(11) DEFAULT '0',
  `cat_order` int(11) DEFAULT '0',
  `cat_status` tinyint(4) DEFAULT '0',
  `cat_deld` tinyint(2) DEFAULT '0',
  `cat_create` int(11) DEFAULT NULL,
  `cat_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_cat
-- ----------------------------
INSERT INTO `ad_cat` VALUES ('1', '分享', '0', '', 'topic_category', null, '0', '0', '0', '0', '1459149917', '1459149917');
INSERT INTO `ad_cat` VALUES ('2', '意甲', '1', 'yijia', 'topic_category', null, '0', '0', '0', '0', '1459149917', '1459149917');
INSERT INTO `ad_cat` VALUES ('3', '西甲', '1', 'xijia', 'topic_category', null, '0', '0', '0', '0', '1459153381', '1459153381');
INSERT INTO `ad_cat` VALUES ('4', '德甲', '1', 'dejia', 'topic_category', null, '0', '0', '0', '0', '1459153393', '1459153393');
INSERT INTO `ad_cat` VALUES ('5', '八卦', '1', 'bagua', 'topic_category', null, '0', '0', '0', '0', '1459153401', '1459153401');
INSERT INTO `ad_cat` VALUES ('6', '法甲', '1', 'fajia', 'topic_category', null, '0', '0', '0', '0', '1459153411', '1459220868');
INSERT INTO `ad_cat` VALUES ('7', '英超', '1', 'yingchao', 'blog_category', null, '0', '0', '0', '0', '1459221834', '1459221834');

-- ----------------------------
-- Table structure for `ad_donate`
-- ----------------------------
DROP TABLE IF EXISTS `ad_donate`;
CREATE TABLE `ad_donate` (
  `donate_id` int(11) NOT NULL AUTO_INCREMENT,
  `donate_user_id` int(11) NOT NULL,
  `donate_status` tinyint(1) DEFAULT '1',
  `donate_description` varchar(255) DEFAULT NULL,
  `donate_qr_code` varchar(255) DEFAULT NULL,
  `donate_create` int(11) DEFAULT NULL,
  `donate_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`donate_id`),
  KEY `donate_user_id` (`donate_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_donate
-- ----------------------------

-- ----------------------------
-- Table structure for `ad_nav`
-- ----------------------------
DROP TABLE IF EXISTS `ad_nav`;
CREATE TABLE `ad_nav` (
  `nav_id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(255) DEFAULT '0' COMMENT '名称',
  `nav_alias` varchar(255) DEFAULT '0' COMMENT '变量（别名）',
  `nav_order` int(11) unsigned DEFAULT '99' COMMENT '项目排序',
  `nav_create` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `nav_update` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`nav_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_nav
-- ----------------------------
INSERT INTO `ad_nav` VALUES ('1', '百度', '百度', '1', '0', '0');

-- ----------------------------
-- Table structure for `ad_nav_url`
-- ----------------------------
DROP TABLE IF EXISTS `ad_nav_url`;
CREATE TABLE `ad_nav_url` (
  `url_id` int(11) NOT NULL AUTO_INCREMENT,
  `url_nav_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '导航分类ID',
  `url_title` varchar(255) NOT NULL COMMENT '标题',
  `url_url` varchar(225) NOT NULL COMMENT '链接',
  `url_description` varchar(255) DEFAULT NULL COMMENT '描述',
  `url_order` int(11) unsigned NOT NULL DEFAULT '99' COMMENT '项目排序',
  `url_user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `url_create` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `url_update` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`url_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_nav_url
-- ----------------------------
INSERT INTO `ad_nav_url` VALUES ('1', '0', '百度标题', 'www.baidu.com', '百度一下 你就完了', '1', '0', '0', '0');
INSERT INTO `ad_nav_url` VALUES ('2', '1', 'xx', 'xx', 'xxx', '2', '6', '1462782283', '0');
INSERT INTO `ad_nav_url` VALUES ('3', '1', 'aa', 'aa', 'aasssss', '22', '6', '1462782339', '1462782439');

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
  `notice_deld` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_notice
-- ----------------------------
INSERT INTO `ad_notice` VALUES ('1', '1', '8', '56', '1', 'new_comment', 'dsadasdasd', '0', '1461914141', null, '0');
INSERT INTO `ad_notice` VALUES ('2', '1', '5', '56', '1', 'new_comment', 'dsadasdasd', '0', '1461914142', '1462935261', '1');
INSERT INTO `ad_notice` VALUES ('3', '7', '1', '56', '2', 'new_comment', 'fsdgfsdfssfsdfsfdfsdfsdfsdfsdfsdfgggggggggg', '1', '1461914153', '1462785982', '1');
INSERT INTO `ad_notice` VALUES ('4', '7', '8', '56', '2', 'new_comment', 'fsdgfsdfssfsdfsfdfsdfsdfsdfsdfsdfgggggggggg', '0', '1461914153', null, '0');
INSERT INTO `ad_notice` VALUES ('5', '7', '5', '56', '2', 'new_comment', 'fsdgfsdfssfsdfsfdfsdfsdfsdfsdfsdfgggggggggg', '0', '1461914153', '1462935261', '1');
INSERT INTO `ad_notice` VALUES ('6', '7', '1', '56', '1', 'new_comment', 'ddddddd', '1', '1461914278', '1462785982', '1');
INSERT INTO `ad_notice` VALUES ('7', '7', '8', '56', '1', 'new_comment', 'ddddddd', '0', '1461914278', null, '0');
INSERT INTO `ad_notice` VALUES ('8', '7', '5', '56', '1', 'new_comment', 'ddddddd', '0', '1461914279', '1462935261', '1');
INSERT INTO `ad_notice` VALUES ('9', '1', '8', '56', '2', 'new_comment', 'uuuuu', '0', '1461914290', null, '0');
INSERT INTO `ad_notice` VALUES ('10', '1', '5', '56', '2', 'new_comment', 'uuuuu', '0', '1461914291', '1462935261', '1');
INSERT INTO `ad_notice` VALUES ('11', '1', '7', '56', '2', 'new_comment', 'uuuuu', '0', '1461914291', '1462416771', '1');
INSERT INTO `ad_notice` VALUES ('12', '7', '1', '57', '4', 'new_comment', '我是b1 我来回复了', '0', '1462352327', '1462785982', '1');
INSERT INTO `ad_notice` VALUES ('13', '1', '7', '57', '5', 'new_comment', '哎呦  不错哦 ', '0', '1462352354', '1462416771', '1');
INSERT INTO `ad_notice` VALUES ('14', '1', '5', '40', '6', 'new_comment', '订单', '0', '1462354822', '1462935261', '1');
INSERT INTO `ad_notice` VALUES ('15', '1', '14', '119', '0', 'at_tweet', '[@hhhh](/member/hhhh) ddddddd', '0', '1463123000', null, '0');

-- ----------------------------
-- Table structure for `ad_post`
-- ----------------------------
DROP TABLE IF EXISTS `ad_post`;
CREATE TABLE `ad_post` (
  `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_meta_id` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(32) CHARACTER SET utf8 DEFAULT '0',
  `post_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `post_cate_id` int(11) NOT NULL,
  `post_author` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `post_image` varchar(200) CHARACTER SET utf8 DEFAULT '0',
  `post_excerpt` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  `post_tags` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  `post_user_id` int(11) NOT NULL,
  `post_content` text CHARACTER SET utf8 NOT NULL,
  `post_create` int(11) NOT NULL,
  `post_update` int(11) NOT NULL,
  `post_order` int(11) DEFAULT '0',
  `post_favorite_count` int(11) DEFAULT '0',
  `post_hate_count` int(11) DEFAULT '0',
  `post_thanks_count` int(11) DEFAULT '0',
  `post_follow_count` int(11) DEFAULT '0',
  `post_like_count` int(11) DEFAULT '0',
  `post_view_count` int(11) DEFAULT '0',
  `post_status` tinyint(4) DEFAULT '0',
  `post_deld` tinyint(2) DEFAULT '0',
  `post_reply_count` int(11) DEFAULT '0',
  `post_last_user_id` int(11) DEFAULT '0',
  `post_last_comment_user_name` varchar(32) CHARACTER SET utf8 DEFAULT '0',
  `post_last_comment_time` int(11) DEFAULT '0',
  `post_user_name` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_post
-- ----------------------------
INSERT INTO `ad_post` VALUES ('1', '0', 'topic', 'aaaaeeeeeeeeggg', '3', '0', '0', '0', '0', '1', '2222eeeeekkkkkkk', '1458894631', '1458895193', '0', '0', '0', '0', '0', '0', '10', '0', '1', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('2', '0', 'topic', 'wwww', '2', '0', '0', '0', '0', '1', 'dddddd', '1458894837', '1459136526', '0', '0', '0', '0', '0', '0', '10', '0', '1', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('3', '0', 'topic', '我是第三条的标题', '6', '0', '0', '0', '0', '1', '<p>vvvvvffff</p>', '1459136552', '1459220514', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('4', '0', 'topic', 'ddddddd', '3', '0', '0', '0', '0', '1', '<p><strong>asdfasfasdasdasdasd</strong></p><p><strong><img src=\"/uploads/ueditor/php/upload/image/20160328/1459144074872426.jpg\" title=\"1459144074872426.jpg\" alt=\"TB2cseGbFXXXXbxXpXXXXXXXXXX_!!887197785.jpg_160x160(2).jpg\"/></strong></p>', '1459144018', '1461036134', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('5', '0', 'topic', 'eeee', '4', '0', '0', '0', '0', '1', '<p><img src=\"/uploads/ueditor/php/upload/image/20160328/1459144089771301.jpg\" title=\"1459144089771301.jpg\" alt=\"TB230xCbFXXXXcQXXXXXXXXXXXX-887197785.jpg_160x160.jpg\"/></p>', '1459144091', '1459144091', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('6', '0', 'topic', 'PDO防注入原理分析以及使用PDO的注意事项', '5', '0', '0', '0', '0', '1', '<p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\"><span style=\"font-size: 10.5000pt; font-family: &#39;宋体&#39;;\">为了彻底搞清楚php与mysql&nbsp;server通讯的细节，我特别使用了wireshark抓包进行研究之,安装wireshak之后，我们设置过滤条件为tcp.port==3306,&nbsp;如下图：<br/><img width=\"200px\" src=\"http://dl.iteye.com/upload/attachment/0082/1266/cfa06567-b3c0-3976-a33f-83273f7a6622.jpg\" alt=\"\"/><br/>&nbsp;</span></p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\">&nbsp;</p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\">&nbsp;</p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\">&nbsp;</p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\"><span style=\"font-size: 10.5000pt; font-family: &#39;宋体&#39;;\">如此只显示与mysql&nbsp;3306端口的通信数据，避免不必要的干扰。</span></p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\"><span style=\"font-size: 10.5000pt; font-family: &#39;宋体&#39;;\">特别要注意的是wireshak基于wincap驱动，不支持本地环回接口的侦听（即使用php连接本地mysql的方法是无法侦听的），请连接其它机器（桥接网络的虚拟机也可）的MySQL进行测试。</span></p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\">&nbsp;</p><p style=\"margin-bottom: 0pt; margin-top: 0pt;\" class=\"p0\"><span style=\"font-size: 10.5000pt; font-family: &#39;宋体&#39;;\">然后运行我们的PHP程序，侦听结果如下，我们发现，PHP只是简单地将SQL直接发送给MySQL&nbsp;Server&nbsp;:</span></p><p><br/></p>', '1459146259', '1459406866', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('7', '0', 'topic', '阿森纳', '2', '0', '0', '0', '0', '1', '<p>sss</p>', '1459158237', '1459158237', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('8', '0', 'topic', '555委屈委屈我', '5', '0', '0', '0', '0', '1', '<p>ddddd</p>', '1459158652', '1459235079', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('9', '0', 'topic', 'jjjj', '6', '0', '0', '0', '0', '1', '<p>ggggg</p>', '1459159275', '1459159275', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('10', '0', 'topic', 'yyy', '5', '0', '0', '0', '0', '1', '<p>yyyyy</p>', '1459159426', '1459159524', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('11', '0', 'topic', 'hhhh', '4', '0', '0', '0', '0', '1', '<p>dddddd&nbsp;<img width=\"200px\" src=\"/uploads/ueditor/php/upload/image/20160328/1459173535219978.jpg\" title=\"1459173535219978.jpg\" alt=\"081850014334.jpg\"/></p>', '1459172712', '1459406823', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('12', '0', 'topic', '哎呦 不错哦', '5', '0', '0', '0', '0', '1', '<p>是的是的撒 &nbsp;<img width=\"100px\" src=\"/uploads/ueditor/php/upload/image/20160328/1459173178140498.jpg\" title=\"1459173178140498.jpg\" alt=\"414_1309235_3b90f87867b75a9.jpg\"/></p>', '1459173181', '1459173619', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('13', '0', 'topic', 'sdadasd', '3', '0', '0', '0', '0', '1', '<p>dasdas</p>', '1459173743', '1459173743', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('14', '0', 'topic', 'sadasdsa', '4', '0', '0', '0', '0', '1', '<p>dasdasdasdas</p>', '1459173773', '1459173773', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('15', '0', 'topic', 'ggg', '7', '0', '0', '0', '0', '1', '<p>gfgdfg</p>', '1459222189', '1459222189', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('16', '0', 'topic', '我是123456', '6', '0', '0', '0', '0', '2', '<p>大三大四</p>', '1459232099', '1459232099', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('17', '0', 'topic', 'dadasd', '3', '0', '0', '0', '0', '2', '<p>sadasdasd</p>', '1459316768', '1459316768', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('18', '0', 'topic', '今日头条', '4', '0', '0', '0', '0', '1', '<p>大三大四 &nbsp;<img src=\"/uploads/ueditor/php/upload/image/20160331/1459406910841185.jpg\" title=\"1459406910841185.jpg\" alt=\"1459406910841185.jpg\" width=\"57\" height=\"70\" border=\"0\" vspace=\"0\" style=\"width: 57px; height: 70px;\"/></p>', '1459406935', '1459406960', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('19', '0', 'topic', '周杰伦', '2', '0', '0', '0', '0', '5', '<p>阿诗丹顿</p>', '1459413374', '1459413374', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('20', '0', 'topic', 'fffffff', '4', '0', '0', '0', '0', '1', '<p>fffff</p>', '1459937111', '1459937111', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('21', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460966360', '1460966360', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('22', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460966382', '1460966382', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('23', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460966397', '1460966397', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('24', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460966442', '1460966442', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('25', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460966568', '1460966568', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('26', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460966785', '1460966785', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('27', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460966894', '1460966894', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('28', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460966920', '1460966920', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('29', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460966949', '1460966949', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '1', 'zxx123', '2016', '0');
INSERT INTO `ad_post` VALUES ('30', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '1', '<p>cccc</p>', '1460967047', '1460967047', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '1', 'zxx123', '2016', '0');
INSERT INTO `ad_post` VALUES ('31', '0', 'topic', 'ttt', '4', '0', '0', '0', '0', '1', '<p>ttttt</p>', '1460967085', '1460967085', '0', '0', '0', '0', '0', '0', '10', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('32', '0', 'topic', 'ttt', '4', '0', '0', '0', '0', '1', '<p>ttttt</p>', '1460967128', '1460967128', '0', '0', '0', '0', '0', '0', '10', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('33', '0', 'topic', 'ttt', '4', '0', '0', '0', '0', '1', '<p>ttttt</p>', '1460967467', '1460967467', '0', '0', '0', '0', '0', '0', '10', '1', '0', '0', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('34', '0', 'topic', '喔喔dddd', '6', '0', '0', '0', '0', '1', '<p><img width=\"200px\" height=\"200px\" src=\"/uploads/ueditor/php/upload/image/20160419/1461036191970710.png\" title=\"1461036191970710.png\" alt=\"QQ截图20140721124138.png\"/>ddddd</p><p><br/></p><p>sssssss</p>', '1461036221', '1461036349', '0', '0', '0', '0', '0', '0', '10', '1', '0', '0', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('35', '0', 'topic', '我是百度首页的截图', '4', '0', '0', '0', '0', '1', '<p>cccccc<br/></p><p><br/></p><p><img width=\"200px\" height=\"200px;\" src=\"/uploads/ueditor/php/upload/image/20160419/1461047957927334.png\" title=\"1461047957927334.png\" alt=\"QQ图片20160419143753.png\"/></p><p><br/></p><p><br/></p><p>dddddd</p><p><br/></p><p><br/></p><p>哈哈哈哈</p>', '1461047999', '1461048080', '0', '0', '0', '0', '0', '0', '10', '1', '0', '0', '8', 'abc', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('36', '0', 'topic', '正式第一帖,编辑标题2', '4', '0', '0', '0', '0', '1', '<p><span id=\"content_all\">本书是分布式系统领域的经典著作，由阿里巴巴高级技术专家“阿里日照”（OceanBase核心开发人\r\n员）撰写，阳振坤、章文嵩、杨卫华、汪源、余锋（褚霸）、赖春波等来自阿里、新浪、网易和百度的资深技术专家联袂推荐。理论方面，不仅讲解了大规模分布式\r\n存储系统的核心技术和基本原理，而且对谷歌、亚马逊、微软和阿里巴巴等国际型大互联网公司的大规模分布式存储系统进行了分析；实战方面，首先通过对阿里巴\r\n巴的分布式数据库OceanBase的实现细节的深入剖析完整地展示了大规模分布式存储系统的架构与设计过程，然后讲解了大规模分布式存储技术在云计算和\r\n大数据领域的实践与应用。<br/>　　本书内容分为四个部分：基础篇——分布式存储系统的基础知识，包含单机存储系统的知识，如数据模型、事务与并发控\r\n制、故障恢复、存储引擎、压缩/解压缩等；分布式系统的数据分布、复制、一致性、容错、可扩展性等。范型篇——介绍谷歌、亚马逊、微软、阿里巴巴等著名互\r\n联网公司的大规模分布式存储系统架构，涉及分布式文件系统、分布式键值系统、分布式表格系统以及分布式数据库技术等。实践篇——以阿里巴巴的分布式数据库\r\nOceanBase为例，详细介绍分布式数据库内部实现，以及实践过程中的经验。专题篇——介绍分布式系统的主要应用：云存储和大数据，这些是近年来的热\r\n门领域，本书介绍了云存储平台、技术与安全，以及大数据的概念、流式计算、实时分析等。</span></p>', '1461305640', '1461305893', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('37', '0', 'topic', '表情IP化是变现路径吗', '7', '0', '0', '0', '0', '1', '<p>承认与否，表情包所掀起的浪潮正在波及全民。在今年开年那场喧嚣的Facebook表情包大战中，内地网友充分显示出了他们的创造能力与表情包存储量的丰富。表情包是一个等待挖掘的巨大蓝海， 尽管尚未发觉足够的金块。</p>', '1461307197', '1461307197', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '1', 'zxx123', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('38', '0', 'topic', '浏览器中因cookie设置HttpOnly标志引起的安全问题', '7', '0', '0', '0', '0', '1', '<p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">1、简介</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">如果cookie设置了HttpOnly标志，可以在发生XSS时避免JavaScript读取cookie，这也是HttpOnly被引入的原因。但这种方式能防住攻击者吗?HttpOnly标志可以防止cookie被“读取”，那么能不能防止被“写”呢?答案是否定的，那么这里面就有文章可做了，因为已证明有些浏览器的HttpOnly标记可以被JavaScript写入覆盖，而这种覆盖可能被攻击者利用发动session fixation攻击。本文主题就是讨论这种技术。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; text-align: center; background-color: rgb(248, 248, 248);\"><a href=\"http://s9.51cto.com/wyfs02/M02/24/12/wKioL1NLf3exhfqOAAEHYZITmUA763.jpg\" target=\"_blank\" style=\"color: rgb(0, 66, 118);\"><img class=\"fit-image\" border=\"0\" alt=\"浏览器中因cookie设置HttpOnly标志引起的安全问题\" src=\"/ueditor/php/upload/image/20160422/1461316121301652.jpg\" width=\"498\" height=\"256\" style=\"border: 0px;\"/></a></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">2、用JavaScript覆盖cookie中的HttpOnly标志</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">当JavaScript可以覆盖cookie中的HttpOnly标志时，攻击者如果发现网站的XSS漏洞，就可以利用HttpOnly cookie发动session fixation攻击(更多关于session fixation攻击的内容可以参考笔者之前的文章[1])。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">session fixation攻击的后果是攻击者可以冒充受害者，因为其知道受害者的session ID。这里假设当成功登录应用后session不会重新生成。现实也确实是这样的，但浏览器不应该允许JavaScript覆盖HttpOnly标志，因为这种覆盖可能与某些应用程序登录成功后不会重新生成会话这一特性结合，发动session fixation攻击。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">那么登录成功后如果重新生成session ID的话安全性是怎么样的呢?还能被攻击者利用吗?登录之后，攻击者通过设置用户的session为攻击者正在使用的session，将用户切换为攻击者自己的帐户。受害者以为其正在使用自己的帐户，实际上一些敏感信息已经泄露给攻击者了。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">3、允许JavaScript覆盖HttpOnly cookie的浏览器</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">经笔者证实，以下浏览器允许JavaScript覆盖HttpOnly cookies：</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Safari</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Opera Mobile</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Opera Mini</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">BlackBerry browser</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Konqueror browser</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">该问题已经(于2014年2月14日)提交给相应的厂商。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">IE、Firefix和Opera(标准安装版本)不容易受到上述攻击影响。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">4、厂商的回复</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Opera公司已经确认该问题在Opera Mobile和Opera Mini中存在，决定在Opera Mini中修复该问题(修复日期还未确定)。尽管Opera Mobile当前在Google Play中可以下载，但Opera公司认为该版本已经过时，因此决定不对其进行修改(他们建议替换为Opera for Android版本，该版本可以防止JavaScript覆盖HttpOnly cookie)。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">黑莓公司回复说已经宣布于2014年4月后不再对PlayBook Tablet的操作系统(笔者当时测试时使用的系统)进行支持，因此不会修复该问题。但是由于该问题是在支持结束声明之前提交的，他们决定将我加入到黑莓安全事件响应小组的感谢名单中(根据他们的规定，笔者的名字会在2014年4月底才会被加入)[2]。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">Konqueror确认了该问题，但可能不会去修复。该bug的信息可以在KDE Bugtracking系统中找到[3]。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">该问题两个月前提交给了苹果公司，但从未收到任何反馈。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">5、漏洞利用</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">以下是部分示例代码：</p><pre style=\"margin-top: 0px; margin-bottom: 1em; padding: 0px; color: rgb(51, 51, 51); font-family: &#39;Courier New&#39;, monospace; font-size: 12px; width: 591.016px; overflow: auto; line-height: 28px; background-color: rgb(230, 230, 230);\">&lt;?&nbsp;setcookie(&#39;cookie1&#39;,++$_COOKIE[&#39;cookie1&#39;],time()+2592000,&#39;/&#39;,&#39;&#39;,0,1);&nbsp;&nbsp;setcookie(&#39;cookie2&#39;,++$_COOKIE[&#39;cookie2&#39;],time()+2592000,&#39;/&#39;,&#39;&#39;,0,0);&nbsp;&nbsp;?&gt;&nbsp;&lt;HTML&gt;&nbsp;&lt;?&nbsp;print&nbsp;&quot;Cookie1:&quot;.$_COOKIE[&#39;cookie1&#39;].&quot;&lt;br&gt;&quot;;&nbsp;&nbsp;print&nbsp;&quot;Cookie2:&quot;.$_COOKIE[&#39;cookie2&#39;];&nbsp;&nbsp;?&gt;&nbsp;&lt;script&gt;alert(document.cookie);&lt;/script&gt;&nbsp;&lt;script&gt;document.cookie=&#39;cookie1=100;expires=Thu,&nbsp;2&nbsp;Aug&nbsp;2014&nbsp;20:00:00&nbsp;UTC;&nbsp;path=/&#39;;&lt;/script&gt;&nbsp;&lt;/HTML&gt;</pre><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">过程如下：运行这段代码，之后可以看到cookie1(设置了HttpOnly标志)已经被JavaScript写入覆盖了。</p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\"><strong style=\"text-align: center;\">6、总结</strong></p><p style=\"margin-top: 10px; margin-bottom: 10px; padding: 0px; color: rgb(51, 51, 51); text-indent: 28px; font-family: 宋体; font-size: 14px; line-height: 28px; white-space: normal; background-color: rgb(248, 248, 248);\">HttpOnly标志的引入是为了防止设置了该标志的cookie被JavaScript读取，但事实证明设置了这种cookie在某些浏览器中却能被JavaScript覆盖，可被攻击者利用来发动session fixation攻击。该问题被提出后，得到了相关厂商的响应。最后，本文给出了一段利用演示代码。</p><p><br/></p>', '1461316124', '1461316124', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '8', 'abc', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('39', '0', 'topic', '我是zxx123发的帖子', '2', '0', '0', '0', '0', '1', '<p>我是zxx123的内容</p>', '1461551163', '1461551163', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '8', 'abc', '2016', 'zxx123');
INSERT INTO `ad_post` VALUES ('40', '0', 'topic', '我是zxx123的标题2', '4', '0', '0', '0', '0', '1', '<p>我是zxx123的内容2</p>', '1461554266', '1462787889', '0', '0', '0', '0', '0', '0', '10', '0', '1', '0', '6', 'admin', '1462787889', 'zxx123');
INSERT INTO `ad_post` VALUES ('41', '0', 'topic', '我是zhou', '2', '0', '0', '0', '0', '5', '<p>订单多的<br/></p>', '1461555263', '1461555263', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'zhou');
INSERT INTO `ad_post` VALUES ('42', '0', 'topic', '我是zhou', '2', '0', '0', '0', '0', '5', '<p>订单多的<br/></p>', '1461555296', '1461555296', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'zhou');
INSERT INTO `ad_post` VALUES ('43', '0', 'topic', '我是zhou', '2', '0', '0', '0', '0', '5', '<p>订单多的<br/></p>', '1461555300', '1461555300', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '8', 'abc', '2016', 'zhou');
INSERT INTO `ad_post` VALUES ('44', '0', 'topic', '我是abc的帖子', '2', '0', '0', '0', '0', '8', '<p>谁谁谁</p>', '1461556082', '1461556082', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'abc');
INSERT INTO `ad_post` VALUES ('45', '0', 'topic', '大幅度的', '5', '0', '0', '0', '0', '8', '<p>订单多的</p>', '1461563142', '1461563142', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'abc');
INSERT INTO `ad_post` VALUES ('46', '0', 'topic', '大幅度的', '5', '0', '0', '0', '0', '8', '<p>订单多的</p>', '1461563158', '1461563158', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'abc');
INSERT INTO `ad_post` VALUES ('47', '0', 'topic', '是顶顶顶顶', '3', '0', '0', '0', '0', '8', '<p>订单多的的观点发鬼地方</p>', '1461563205', '1461563205', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'abc');
INSERT INTO `ad_post` VALUES ('48', '0', 'topic', '444', '4', '0', '0', '0', '0', '8', '<p>44444</p>', '1461563392', '1461563392', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'abc');
INSERT INTO `ad_post` VALUES ('49', '0', 'topic', '444', '4', '0', '0', '0', '0', '8', '<p>44444</p>', '1461563449', '1461563449', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'abc');
INSERT INTO `ad_post` VALUES ('50', '0', 'topic', '444', '4', '0', '0', '0', '0', '8', '<p>44444</p>', '1461563465', '1461563465', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'abc');
INSERT INTO `ad_post` VALUES ('51', '0', 'topic', '我是标题i', '4', '0', '0', '0', '0', '8', '<p>44444</p>', '1461563519', '1461564384', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '8', 'abc', '1461564384', 'abc');
INSERT INTO `ad_post` VALUES ('52', '0', 'topic', '习近平考察安徽金寨:扶贫要进一步完善兜底措施', '7', '0', '0', '0', '0', '8', '<h1 id=\"artibodyTitle\" cid=\"51928\" docid=\"fxrprek3191869\" style=\"margin: 0px; padding: 0px; font-size: 36px; color: rgb(51, 51, 51); line-height: 50px;\">习近平考察安徽金寨:扶贫要进一步完善兜底措施</h1><p><a title=\"分享到新浪微博\" class=\"sinaminiblog\" style=\"color: rgb(51, 51, 51); padding: 0px; height: 36px; display: block; zoom: 1; vertical-align: middle; cursor: pointer; margin: 0px 10px 0px 0px; opacity: 1; float: left; width: 78px; background-image: url(&quot;http://n.sinaimg.cn/news/090e8200/20151217/shareIcon2.jpg&quot;); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: no-repeat;\"></a><a title=\"分享到微信\" class=\"bshare-weixin\" style=\"color: rgb(51, 51, 51); padding: 0px; height: 36px; display: block; zoom: 1; vertical-align: middle; cursor: pointer; margin: 0px 10px 0px 0px; opacity: 1; float: left; width: 78px; background-image: url(&quot;http://n.sinaimg.cn/news/090e8200/20151217/shareIcon2.jpg&quot;); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: -88px 0px; background-repeat: no-repeat;\"></a><a class=\"qzone\" title=\"分享到QQ空间\" style=\"color: rgb(51, 51, 51); padding: 0px; height: 36px; display: block; zoom: 1; vertical-align: middle; cursor: pointer; margin: 0px 10px 0px 0px; opacity: 1; float: left; width: 100px; background-image: url(&quot;http://n.sinaimg.cn/news/090e8200/20151217/shareIcon2.jpg&quot;); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: -176px 0px; background-repeat: no-repeat;\"></a></p><p><span class=\"page-tool-i page-tool-s\" title=\"分享\" style=\"height: 36px; float: left; padding: 0px 14px 0px 0px; border: 0px none; -webkit-user-select: none; position: relative; margin: 0px;\"><a id=\"shareArticleButton\" style=\"color: rgb(51, 51, 51); display: block; width: 40px; height: 40px; position: relative; margin: 0px; text-indent: -9999em; padding: 0px; background-image: url(&quot;http://n.sinaimg.cn/news/090e8200/20151116/shareIcon.jpg&quot;); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: -150px 0px; background-repeat: no-repeat;\">分享</a></span><span class=\"page-tool-i page-tool-c page-tool-share\" title=\"评论\" style=\"height: 36px; float: left; padding: 0px 14px 0px 0px; border-width: 0px 0px 0px 1px; border-style: none none none solid; border-left-color: rgb(204, 204, 204); -webkit-user-select: none; position: relative; cursor: pointer; margin: 0px;\"><span id=\"commentCount1\" style=\"float: left; position: relative; margin: 0px 18px 0px 0px; line-height: 36px; color: rgb(255, 133, 0); font-size: 36px; height: 36px; padding-left: 15px; font-family: &#39;Arial black&#39;;\">1.3W<span class=\"pinglun\" style=\"color: rgb(85, 85, 85); height: 36px; font-size: 14px; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; padding-left: 5px;\">评论</span></span><a suda-uatrack=\"key=index_news_content&amp;value=comment_click\" style=\"color: rgb(51, 51, 51); display: block; width: 40px; height: 36px; position: relative; margin-top: 0px; text-indent: -9999em; float: left; background-image: url(&quot;http://n.sinaimg.cn/news/090e8200/20151116/shareIcon.jpg&quot;); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: -200px 0px; background-repeat: no-repeat;\"></a></span></p><p><span class=\"time-source\" id=\"navtimeSource\" style=\"font-size: 18px; color: rgb(51, 51, 51); position: absolute; right: 0px; top: 0px; line-height: 36px; height: 36px;\">2016年04月24日23:09	<span style=\"padding-left: 15px;\"><span data-sudaclick=\"media_name\"><a href=\"http://news.xinhuanet.com/politics/2016-04/24/c_1118719708.htm\" target=\"_blank\" rel=\"nofollow\" style=\"color: rgb(51, 51, 51); text-decoration: none;\">新华网</a></span></span></span></p><h3 id=\"smallBodyTitle\" style=\"margin: 0px; padding: 0px; position: absolute; top: 0px; left: 12px; width: 390px; font-size: 16px; color: rgb(51, 51, 51); overflow: hidden; white-space: nowrap; text-overflow: ellipsis;\"><br/></h3><p><a title=\"分享到新浪微博\" class=\"sinaminiblog\" style=\"color: rgb(51, 51, 51); padding: 0px 5px; height: 30px; display: block; zoom: 1; vertical-align: middle; cursor: pointer; margin: 0px; opacity: 1; float: left; width: 30px; background: url(&quot;http://n.sinaimg.cn/news/090e8200/20151117/shareIconSmall.png&quot;) 0px 0px no-repeat;\"></a><a title=\"分享到微信\" class=\"bshare-weixin\" style=\"color: rgb(51, 51, 51); padding: 0px 5px; height: 30px; display: block; zoom: 1; vertical-align: middle; cursor: pointer; margin: 0px; opacity: 1; float: left; width: 30px; background: url(&quot;http://n.sinaimg.cn/news/090e8200/20151117/shareIconSmall.png&quot;) -40px 0px no-repeat;\"></a><a title=\"分享到QQ好友\" class=\"bshare-qzone\" style=\"color: rgb(51, 51, 51); padding: 0px 5px; height: 30px; display: block; zoom: 1; vertical-align: middle; cursor: pointer; margin: 0px; opacity: 1; float: left; width: 30px; background: url(&quot;http://n.sinaimg.cn/news/090e8200/20151218/qqIcon.jpg&quot;) 0px 0px no-repeat;\"></a></p><p><span class=\"page-tool-i page-tool-s\" title=\"分享\" style=\"height: 30px; float: left; padding: 0px; border: 0px none; -webkit-user-select: none; position: relative; margin: 0px;\"><a id=\"shareArticleButton2\" style=\"color: rgb(51, 51, 51); display: block; width: 40px; height: 40px; position: relative; margin: 0px; text-indent: -9999em; padding: 0px; background: url(&quot;http://n.sinaimg.cn/news/090e8200/20151117/shareIconSmall.png&quot;) -120px 0px no-repeat;\">分享</a></span><span class=\"page-tool-i page-tool-c page-tool-share\" id=\"pageToolShare\" title=\"评论\" style=\"height: 30px; float: left; padding: 0px 10px 0px 0px; border: 0px none; -webkit-user-select: none; position: relative; cursor: pointer; margin: 0px;\"><a suda-uatrack=\"key=index_news_content&amp;value=comment_roll_click\" style=\"color: rgb(51, 51, 51); display: block; width: 40px; height: 36px; position: relative; margin-top: 0px; text-indent: -9999em; float: left; background: url(&quot;http://n.sinaimg.cn/news/090e8200/20151117/shareIconSmall.png&quot;) -160px 0px no-repeat;\"></a><span id=\"commentCount1M\" style=\"float: left; position: relative; margin: 0px; line-height: 40px; color: rgb(51, 51, 51); font-size: 14px; height: 30px;\">1.3W</span></span></p><p><img alt=\"习近平考察安徽金寨\" src=\"/ueditor/php/upload/image/20160425/1461564655134383.jpg\" style=\"margin: 0px auto; padding: 0px; border: none; display: block;\"/><span class=\"img_descr\" style=\"line-height: 20px; display: inline-block; zoom: 1; color: rgb(102, 102, 102); padding: 15px 0px 0px; margin: 5px auto; font-size: 14px;\">习近平考察安徽金寨</span></p><p><img alt=\"习近平考察安徽金寨\" src=\"/ueditor/php/upload/image/20160425/1461564656895190.jpg\" style=\"margin: 0px auto; padding: 0px; border: none; display: block;\"/><span class=\"img_descr\" style=\"line-height: 20px; display: inline-block; zoom: 1; color: rgb(102, 102, 102); padding: 15px 0px 0px; margin: 5px auto; font-size: 14px;\">习近平考察安徽金寨</span></p><p><img alt=\"习近平考察安徽金寨\" src=\"/ueditor/php/upload/image/20160425/1461564656627618.jpg\" style=\"margin: 0px auto; padding: 0px; border: none; display: block;\"/><span class=\"img_descr\" style=\"line-height: 20px; display: inline-block; zoom: 1; color: rgb(102, 102, 102); padding: 15px 0px 0px; margin: 5px auto; font-size: 14px;\">习近平考察安徽金寨</span></p><p><img alt=\"习近平考察安徽金寨\" src=\"/ueditor/php/upload/image/20160425/1461564656689842.jpg\" style=\"margin: 0px auto; padding: 0px; border: none; display: block;\"/><span class=\"img_descr\" style=\"line-height: 20px; display: inline-block; zoom: 1; color: rgb(102, 102, 102); padding: 15px 0px 0px; margin: 5px auto; font-size: 14px;\">习近平考察安徽金寨</span></p><p><img alt=\"习近平考察安徽金寨\" src=\"/ueditor/php/upload/image/20160425/1461564656118651.jpg\" style=\"margin: 0px auto; padding: 0px; border: none; display: block;\"/><span class=\"img_descr\" style=\"line-height: 20px; display: inline-block; zoom: 1; color: rgb(102, 102, 102); padding: 15px 0px 0px; margin: 5px auto; font-size: 14px;\">习近平考察安徽金寨</span></p><p><img alt=\"习近平考察安徽金寨\" src=\"/ueditor/php/upload/image/20160425/1461564656415643.jpg\" style=\"margin: 0px auto; padding: 0px; border: none; display: block;\"/><span class=\"img_descr\" style=\"line-height: 20px; display: inline-block; zoom: 1; color: rgb(102, 102, 102); padding: 15px 0px 0px; margin: 5px auto; font-size: 14px;\">习近平考察安徽金寨</span></p><p><img alt=\"习近平考察安徽金寨\" src=\"/ueditor/php/upload/image/20160425/1461564656156334.jpg\" style=\"margin: 0px auto; padding: 0px; border: none; display: block;\"/><span class=\"img_descr\" style=\"line-height: 20px; display: inline-block; zoom: 1; color: rgb(102, 102, 102); padding: 15px 0px 0px; margin: 5px auto; font-size: 14px;\">习近平考察安徽金寨</span></p><p><img alt=\"习近平考察安徽金寨\" src=\"/ueditor/php/upload/image/20160425/1461564656108607.jpg\" style=\"margin: 0px auto; padding: 0px; border: none; display: block;\"/><span class=\"img_descr\" style=\"line-height: 20px; display: inline-block; zoom: 1; color: rgb(102, 102, 102); padding: 15px 0px 0px; margin: 5px auto; font-size: 14px;\">习近平考察安徽金寨</span></p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　新华网北京4月24日电 4月24日，习近平到安徽考察，前往金寨县向革命烈士纪念塔敬献花篮。上午11时30分许，习近平总书记的身影出现在安徽省六安市金寨县红军广场。金寨，地处大别山腹地，被誉为“红军的摇篮、将军的故乡”。霏霏细雨中，习近平向烈士纪念塔敬献花篮。随后，瞻仰了红军纪念堂，参观了金寨县革命博物馆。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　<strong>　村民陈泽平对总书记说：党的这个政策好，我欢迎</strong></p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　金寨县是国家级首批重点贫困县，2011年被确定为大别山片区扶贫攻坚重点县。24日下午，习近平来到金寨县花石乡大湾村走访村民，同当地干部群众共商脱贫攻坚大计。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　走进村民陈泽平家两间简陋的房子，总书记仔细察看，询问家里的情况。身体还好吗？这个季节屋里还有点冷吧？家里种几亩地？种的茶叶几年能收获？养了几头猪？猪肉价格还可以吧？总书记问得十分细致。看到床边堆着几包稻谷，总书记说，这里又住人又是仓库啊，并问陈泽平，存的粮食够吃多长时间。总书记还指着屋顶说：“这里拉的电线可有点乱啊。”村干部递上《建档立卡贫困户基本情况调查表》。“移民直补”“公益林补贴”“计生奖”“劳务收入”……总书记一边念着表格上的项目，一边向陈泽平了解贫困户搬迁等支出和补贴情况，问他愿不愿意搬迁到山下去。陈泽平回答说：“党的这个政策好，我欢迎。”</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　<strong>习近平：扶贫机制要进一步完善兜底措施</strong></p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　安徽省花石乡大湾村，68岁的贫困户汪能保看到习近平总书记沿着石阶走向他家，快步迎了上去，紧紧握住总书记的手，激动不已。总书记说：“老汪你好，来看望你们。”汪能保说，做梦都没想到您会到家里来，共产党政策好，给我们带来好多福分啊！习近平拿起桌上的扶贫手册，一边看一边询问老汪家的情况。听说老汪爱人有高血压，一年药费要花两三千块钱，习近平说，因病致贫、因残致贫问题时有发生，扶贫机制要进一步完善兜底措施，在医保、新农合方面给予更多扶持。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　<strong>习近平：一路奔波而来，就是要了解扶贫实际情况，让老区人民过上幸福美好生活</strong></p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　总书记一连走进大湾村5户农家，听取村民对实施光伏发电扶贫项目、种植茶叶、发展养殖业以及移民搬迁等的想法，了解省市县开展扶贫工作的具体做法和取得的成效。他对乡亲们说，我这次专门来看望大家。从北京坐了1个半小时飞机到合肥，又坐了1个半小时汽车到金寨，再用1个多小时进山来到你们这里，就是要了解农村脱贫特别是革命老区扶贫的真实情况。习近平要求各级党委和政府要怀着对人民的热爱、按照党中央提出的精准扶贫要求，打好脱贫攻坚战，让老区人民过上幸福美好生活。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　<strong>习近平：不能忘了老区，老区人民养育了我们</strong></p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　习近平对大湾村的乡亲们说，在地方工作时，我一直抓老区建设，同老区很有感情。全面建成小康社会，一个不能少，特别是不能忘了老区。无论是革命战争年代还是改革开放新时期，老区人民为党和国家作出了巨大贡献。老区人民对党无限忠诚、无比热爱。老区精神积淀着红色基因。在今天奔小康的路上，老区人民同样展现出了强烈的奉献奋斗精神。经过数十年发展，老区建设取得了很大成绩。但是，放在全国范围内横向比较还有不小差距。党中央高度重视老少边穷地区尤其是集中连片贫困地区的扶贫工作，要通过实施精准扶贫，确保2020年实现全面建成小康社会目标是过硬的。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　<strong>　习近平：采取稳定脱贫措施，建立长效扶贫机制</strong></p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　雨后初霁，安徽省花石乡大湾村，在村民陈泽申的小院里，习近平总书记同乡亲们围坐在一起拉家常。听乡亲们说脱贫措施，如建立光伏发电站、种植茶叶、发展养殖业等，习近平表示，要脱贫也要致富，产业扶贫至关重要，产业要适应发展需要，因地制宜、创新完善。听说陈泽申的孙子即将高考，习近平详细询问了孩子的学习情况。他说，要做好教育扶贫，不能让孩子们输在起跑线上，教育跟不上世世代代落后，学一技之长才能有更好保障。习近平强调，打好扶贫攻坚战，要采取稳定脱贫措施，建立长效扶贫机制，把扶贫工作锲而不舍抓下去。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　<strong>习近平：扶贫做好建档立卡工作</strong></p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em;\">　　花石乡大湾村，一场别开生面的座谈会。大湾村第一书记、扶贫工作队队长余静来自金寨县中医院，她向总书记讲述了自己的扶贫历程。“这段时光是我一生的宝贵财富，扶贫不止是经济上的帮扶，还要真心实意给予关心。”她说，村里现在有建档立卡贫困户174户415人，“大湾村一户不脱贫，我坚决不撤岗”。习近平详细询问扶贫工作队干部配备和工作措施，他说，做好精准扶贫，建档立卡制度要坚持，依靠群众精准找到和帮助贫困户。（新华视点微博报道 新华社记者霍小光，摄影：新华社记者李学仁、李涛）</p><p><br/></p>', '1461564676', '1461564676', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '1', 'zxx123', '2016', 'abc');
INSERT INTO `ad_post` VALUES ('53', '0', 'topic', '中纪委：有公职党员不得经商 一般党员不受限  分享 2,122评论  2016年', '3', '0', '0', '0', '0', '5', '<span class=\"time-source\" id=\"navtimeSource\" style=\"font-size: 18px; color: rgb(51, 51, 51); position: absolute; right: 0px; top: 0px; line-height: 36px; height: 36px;\">04月25日09:43	<span style=\"padding-left: 15px;\">综合</span></span><h3 id=\"smallBodyTitle\" style=\"margin: 0px; padding: 0px; position: absolute; top: 0px; left: 12px; width: 390px; font-size: 16px; color: rgb(51, 51, 51); overflow: hidden; white-space: nowrap; text-overflow: ellipsis;\">中纪委：有公职党员不得经商 一般党员不受限</h3><p><span class=\"page-tool-i page-tool-s\" title=\"分享\" style=\"height: 30px; float: left; padding: 0px; border: 0px none; -webkit-user-select: none; position: relative; margin: 0px;\"><a id=\"shareArticleButton2\" style=\"color: rgb(51, 51, 51); text-decoration: none; display: block; width: 40px; height: 40px; position: relative; margin: 0px; text-indent: -9999em; padding: 0px; background: url(&quot;http://n.sinaimg.cn/news/090e8200/20151117/shareIconSmall.png&quot;) -120px 0px no-repeat;\">分享</a></span><span class=\"page-tool-i page-tool-c page-tool-share\" id=\"pageToolShare\" title=\"评论\" style=\"height: 30px; float: left; padding: 0px 10px 0px 0px; border: 0px none; -webkit-user-select: none; position: relative; cursor: pointer; margin: 0px;\"><span id=\"commentCount1M\" style=\"float: left; position: relative; margin: 0px; line-height: 40px; color: rgb(51, 51, 51); font-size: 14px; height: 30px;\">2,122</span></span></p><p><ins class=\"sinaads sinaads-fail\" data-ad-pdps=\"PDPS000000056819\" data-ad-status=\"done\" data-ad-offset-left=\"460\" data-ad-offset-top=\"270\" style=\"margin-top: 10px;\"></ins></p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　【条例原文】第八十八条 违反有关规定从事营利活动，有下列行为之一，情节较轻的，给予警告或者严重警告处分；情节较重的，给予撤销党内职务或者留党察看处分；情节严重的，给予开除党籍处分：</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　（一）经商办企业的；</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　（二）拥有非上市公司（企业）的股份或者证券的；</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　（三）买卖股票或者进行其他证券投资的；</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　（四）从事有偿中介活动的；</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　（五）在国（境）外注册公司或者投资入股的；</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　（六）有其他违反有关规定从事营利活动的。</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　【模拟案例】胡某，某市农业局局长，中共党员。一年，胡某的大学同学李某来到胡某所在城市，打算在这里成立一家贸易公司。由于人生地不熟，李某找到胡某，请他出谋划策。在合计的过程中，胡某觉得这是一个赚钱良机，便决定和李某合伙。随后，胡某出资50万元，以其弟弟身份，与李某合伙注册了一家公司。在之后两年多时间里，胡某一直参与公司经营，获利数十万元。</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　现实中，个别党员干部违反有关规定，一边在公家上班，拿着工资；一边自己经商办企业，当起老板。这种行为看起来一举两得，却有违《中国共产党纪律处分条例》，终将得不偿失。</p><p><ins class=\"sinaads sinaads-done\" id=\"Sinads49447\" data-ad-pdps=\"PDPS000000044086\" data-ad-status=\"done\" data-ad-offset-left=\"0\" data-ad-offset-top=\"0\" style=\"display: block; overflow: hidden; text-decoration: none;\"><ins style=\"text-decoration: none; margin: 0px auto; width: 300px; display: block; position: relative;\"></ins></ins></p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　“具有公职身份的党员干部经商、办企业，会大量占用工作时间和精力，且容易导致以权谋私、损公肥私，危害正常的社会经济秩序。”湖北省纪委案件审理室干部孙永军表示，一段时间以来，党和国家都禁止党员领导干部和公职人员经商、办企业。2010年实施的《中国共产党党员领导干部廉洁从政若干准则》、2011年印发的《〈中国共产党党员领导干部廉洁从政若干准则〉实施办法》以及原《党纪处分条例》和公务员法都有类似的规定。新修订的《党纪处分条例》第八十八条在原条例基础上进一步修改完善，作出了更为明确的禁止性规定。</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　值得注意的是，《党纪处分条例》第八十八条，并不禁止党员正常的经商办企业行为。“第八十八条规范的主体主要是党和国家机关中具有公职身份的党员，一般党员通过诚实劳动，经商办企业，并不违反本条规定。”孙永军说。</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　“本案中，胡某身为市农业局局长，属于具有公职身份的党员领导干部，其假借亲属名义与他人一起开办公司，并长期参与公司经营活动，属于明显的违规经商办企业行为。”孙永军表示，应当按照《党纪处分条例》第八十八条的规定，视其情节、造成的后果，对其进行相应的党纪处分。</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em;\">　　“身份即是责任。”专家建议，具有公职身份的党员特别是党员领导干部，一定要认清自己的职责使命，全心全意为人民服务，绝不能为了一己私利，做“既当官，又经商”的“赔本”买卖。（本报记者 张磊）</p><p><br/></p>', '1461564813', '1461564813', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '8', 'abc', '2016', 'zhou');
INSERT INTO `ad_post` VALUES ('54', '0', 'topic', '济南原书记王敏讲心路历程:人前是人 人后是鬼', '4', '0', '0', '0', '0', '8', '<p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;\">台上一套，台下一套；说一套，做一套；人前是人，人后是鬼”。山东省委原常委、济南市委原书记王敏对自己贪腐心路历程的描述不可谓没有代表性。伪装、伪诚、伪善的贪官嘴脸令人痛恨，也让人警醒。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;\">　　中央在县处级以上领导干部中开展“三严三实”专题教育，着力解决的问题之一就是“无视党的政治纪律和政治规矩，对党不忠诚、做人不老实，阳奉阴违、自行其是，心中无党纪、眼里无国法等问题”，剑指伪善，击中时弊。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;\">　　阳奉阴违，“两面”为人为官，累己害人。“伪善”面子好、里子差，有时比“无善”更可怕。“伪善”迷惑人、毒害人，也传染人，你装腔作势，他装聋作哑；你打幌子，他卖狗皮膏药；你“话到嘴边留半句”，他“未可全抛一片心”……人人“不识庐山真面目”，怀揣小九九，一味觅投机，自以为十分聪明，实际上一伪丧百诚。去伪</p><p><br/></p>', '1461565041', '1461565041', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '1', 'zxx123', '2016', 'abc');
INSERT INTO `ad_post` VALUES ('55', '0', 'topic', '外媒:印尼近期第2次扣留中国渔船 称其正被通缉', '2', '0', '0', '0', '0', '5', '<p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em; color: rgb(0, 0, 0); font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;\">参考消息网4月25日报道 外媒称，印尼官员24日说，该国海军扣留了一艘悬挂中国国旗、被国际刑警组织通缉的渔船。</p><p style=\"margin: 15px 0px; padding: 0px; font-size: 16px; line-height: 2em; color: rgb(0, 0, 0); font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;\">　　据德新社4月24日报道，印尼海军发言人埃迪·苏芝普托表示，两艘军舰在距司马威约29海里（约合54公里——本网注）的印尼海域扣押了这艘在逃船只。</p><p><br/></p>', '1461565183', '1461565183', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '8', 'abc', '2016', 'zhou');
INSERT INTO `ad_post` VALUES ('56', '0', 'topic', '阿拉伯联军称约800名恐怖分子在也门被消灭', '3', '0', '0', '0', '0', '1', '<p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;\">原标题：阿拉伯联军称约800名恐怖分子在也门被消灭</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;\">　　中新网4月25日电 据法新社报道，阿拉伯联军于当地时间25日表示，至少有800名“基地”组织武装分子在也门南部的军事进攻中被消灭。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; line-height: 2em; font-family: &#39;Microsoft YaHei&#39;, u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53; white-space: normal;\">　　报道称，联军指挥官在一份声明中指出，在这800人中，有些还是武装分子的头目。另外，还有一些武装分子在军事打击中逃跑。</p><p><br/></p>', '1461565393', '1462354777', '0', '0', '0', '0', '0', '0', '10', '0', '1', '0', '1', 'zxx123', '1462354777', 'zxx123');
INSERT INTO `ad_post` VALUES ('57', '0', 'topic', '订单的', '2', '0', '0', '0', '0', '1', '<p>谁谁谁哈哈哈哈</p>', '1461565524', '1462354490', '0', '0', '0', '0', '0', '0', '10', '0', '1', '0', '1', 'zxx123', '1462354490', 'zxx123');
INSERT INTO `ad_post` VALUES ('58', '0', 'topic', '我是b1的帖子', '5', '0', '0', '0', '0', '7', '<p>柔柔弱弱人</p>', '1461566621', '1461566621', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '1', 'zxx123', '2016', 'b1');
INSERT INTO `ad_post` VALUES ('59', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', 'dddd', '1461824943', '1461824943', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('60', '0', 'tweet', 'd', '2', '0', '0', '0', '0', '7', 'dddd', '1461824965', '1461824965', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('61', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', '哈哈哈哈', '1461826263', '1461826263', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('62', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', '哎呦 不错哦', '1461826313', '1461826313', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('63', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', '阿牛有  ', '1461826590', '1461826590', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('64', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', '订单多的', '1461826644', '1461826644', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('65', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', '哈哈哈哈', '1461826992', '1461826992', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('66', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', '顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶', '1461827085', '1461827085', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('67', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', 'uuuu ', '1461827232', '1461827232', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('68', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', '哈哈哈哈 ', '1461827246', '1461827246', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('69', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', '谁谁谁', '1461831794', '1461831794', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('70', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', '7777', '1461831832', '1461831832', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('71', '0', 'tweet', '', '3', '0', '0', '0', '0', '1', '一一以以一i', '1461832231', '1461832231', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'zxx123');
INSERT INTO `ad_post` VALUES ('72', '0', 'topic', 'fff', '4', '0', '0', '0', '0', '7', 'ffff', '1461901265', '1462352000', '0', '0', '0', '0', '0', '0', '10', '0', '1', '0', '7', 'b1', '1462352000', 'b1');
INSERT INTO `ad_post` VALUES ('73', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', 'ssss', '1461912043', '1461912043', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('74', '0', 'tweet', '', '2', '0', '0', '0', '0', '7', 'ddddd', '1461912154', '1461912154', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('75', '0', 'tweet', '', '1', '0', '0', '0', '0', '7', 'ddddd', '1461914470', '1461914470', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b1');
INSERT INTO `ad_post` VALUES ('76', '0', 'topic', 'erwer', '4', '0', '0', '0', '0', '7', 'rrrrrr', '1462515331', '1462515331', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'b123');
INSERT INTO `ad_post` VALUES ('77', '0', 'topic', 'php', '2', '0', '0', '0', '0', '14', 'PHP\r\nPHP是一门伟大的语言，PHP是网站开发最好的语言。雷雪松的博客PHP栏目主要包含PHP常用的技巧、PHP基本的函数、PHP编程、实用PHP框架以及流行的PHP CMS内容管理系统等。', '1462871350', '1462871613', '0', '0', '0', '0', '0', '0', '10', '0', '1', '0', '14', 'hhhh', '1462871613', 'hhhh');
INSERT INTO `ad_post` VALUES ('78', '0', 'topic', 'gggg', '3', '0', '0', '0', '0', '14', 'ggggg', '1462871373', '1462871373', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'hhhh');
INSERT INTO `ad_post` VALUES ('79', '0', 'topic', 'yyyyyyyyyyy', '4', '0', '0', '0', '0', '14', 'yyyyyyyyyyy', '1462871624', '1462871624', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'hhhh');
INSERT INTO `ad_post` VALUES ('80', '0', 'topic', '拜仁慕尼黑', '4', '0', '0', '0', '0', '14', 'jjjjjjjjj', '1462874313', '1462874313', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'hhhh');
INSERT INTO `ad_post` VALUES ('81', '0', 'topic', 'ffffff', '3', '0', '0', '0', '0', '1', 'fffff', '1462932451', '1462932845', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '1', 'zxx123', '1462932845', 'zxx123');
INSERT INTO `ad_post` VALUES ('82', '0', 'topic', 'kkkkk', '3', '0', '0', '0', '0', '1', 'gggg', '1462944671', '1462944671', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'zxx123');
INSERT INTO `ad_post` VALUES ('83', '0', 'topic', '7777', '2', '0', '0', '0', '0', '1', 'dddddd', '1462945759', '1462945759', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'zxx123');
INSERT INTO `ad_post` VALUES ('84', '0', 'topic', 'ddd', '4', '0', '0', '0', '0', '1', 'ssss', '1462946277', '1462946277', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'zxx123');
INSERT INTO `ad_post` VALUES ('85', '0', 'topic', 'ffff', '5', '0', '0', '0', '0', '1', 'sss', '1462946393', '1462946393', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', 'zxx123');
INSERT INTO `ad_post` VALUES ('86', '0', 'topic', 'i am a title', '4', '0', '0', '0', '0', '1', 'i am the content', '1462953658', '1462953658', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1462953658', '0');
INSERT INTO `ad_post` VALUES ('87', '0', 'topic', 'i am a title', '4', '0', '0', '0', '0', '1', 'i am the content', '1462953688', '1462953688', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1462953688', '0');
INSERT INTO `ad_post` VALUES ('88', '0', 'topic', 'i am a title', '4', '0', '0', '0', '0', '1', 'i am the content', '1462953724', '1462953724', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1462953724', '0');
INSERT INTO `ad_post` VALUES ('89', '0', 'topic', 'dddddssssss', '3', '0', '0', '0', '0', '1', 'dddddddd', '1462954076', '1462954076', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1462954076', '0');
INSERT INTO `ad_post` VALUES ('90', '0', 'topic', 'eee', '3', '0', '0', '0', '0', '1', 'dddd', '1462955922', '1462955922', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1462955922', '0');
INSERT INTO `ad_post` VALUES ('91', '0', 'topic', 'dd', '3', '0', '0', '0', '0', '1', 'ddd', '1462956072', '1462956072', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2', '0', '0', '1462956072', '0');
INSERT INTO `ad_post` VALUES ('92', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'sssssss', '1462961073', '1462961073', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('93', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'hhhhh', '1462961091', '1462961091', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('94', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'dddddd', '1462961104', '1462961104', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('95', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'sddd', '1462961170', '1462961170', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('96', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '444444444', '1462961256', '1462961256', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('97', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '33333333', '1462961302', '1462961302', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('98', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'dddd', '1462961318', '1462961318', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('99', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'sssss', '1463016984', '1463016984', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('100', '0', 'topic', '阿森纳 黑贝重伤九个月', '7', '0', '0', '0', '0', '1', '\r\n```php\r\necho 123\r\n```\r\ndasdasd', '1463017970', '1463017970', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2', '0', '0', '1463017970', '0');
INSERT INTO `ad_post` VALUES ('101', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '123456789', '1463111754', '1463111754', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('102', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '000000', '1463116655', '1463116655', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('103', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '6666yyyyy', '1463116796', '1463116796', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('104', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'hhhh', '1463116956', '1463116956', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('105', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'hhhh', '1463117017', '1463117017', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('106', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'ddd', '1463117200', '1463117200', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('107', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'uuuuu', '1463117211', '1463117211', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('108', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'ggggg', '1463117431', '1463117431', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('109', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'dddd', '1463117464', '1463117464', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('110', '0', 'topic', 'dddd', '3', '0', '0', '0', '0', '1', 'vvvvvvv', '1463117550', '1463117550', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463117550', '0');
INSERT INTO `ad_post` VALUES ('111', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'fggggg', '1463117790', '1463117790', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('112', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'fggggg', '1463117812', '1463117812', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('113', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '订单多的', '1463117861', '1463117861', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('114', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '快快快', '1463118171', '1463118171', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('115', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '反反复复 ', '1463118178', '1463118178', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('116', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '来了来了', '1463118184', '1463118184', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('117', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '通天塔通天塔替她替他', '1463118699', '1463120282', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('118', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '卡卡卡卡', '1463118760', '1463120027', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('119', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', '[@hhhh](/member/hhhh) ddddddd', '1463123000', '1463123000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('120', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'dddd', '1463123547', '1463123547', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('121', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'ddddd', '1463123550', '1463123550', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('122', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'gggg', '1463123555', '1463123555', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('123', '0', 'topic', 'ddddd', '5', '0', '0', '0', '0', '1', 'sdasdas', '1463126767', '1463126767', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463126767', '0');
INSERT INTO `ad_post` VALUES ('124', '0', 'topic', 'mmm', '3', '0', '0', '0', '0', '1', 'mmmmm', '1463128661', '1463128661', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463128661', '0');
INSERT INTO `ad_post` VALUES ('125', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'fff', '1463130248', '1463130248', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('126', '0', 'tweet', '', '0', '0', '0', '0', '0', '1', 'ffffffdddd', '1463130253', '1463130253', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `ad_post` VALUES ('127', '0', 'topic', 'ddd', '4', '0', '0', '0', '0', '1', 'vvvvv\n> 本文由 [zxx123](http://www.getyii.com/member/zxx123) 创作，采用 [知识共享署名 3.0 中国大陆许可协议](http://creativecommons.org/licenses/by/3.0/cn) 进行许可。\n可自由转载、引用，但需署名作者且注明文章出处。', '1463132091', '1463132091', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463132091', '0');
INSERT INTO `ad_post` VALUES ('128', '0', 'topic', 'ggg', '4', '0', '0', '0', '0', '1', 'dddd\n> 本文由 [zxx123](http://www.getyii.com/member/zxx123) 创作，采用 [知识共享署名 3.0 中国大陆许可协议](http://creativecommons.org/licenses/by/3.0/cn) 进行许可。\n可自由转载、引用，但需署名作者且注明文章出处。', '1463132119', '1463132119', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463132119', '0');
INSERT INTO `ad_post` VALUES ('129', '0', 'topic', 'ddd', '3', '0', '0', '0', 'uuuu', '1', 'ffff\n> 本文由 [zxx123](http://www.getyii.com/member/zxx123) 创作，采用 [知识共享署名 3.0 中国大陆许可协议](http://creativecommons.org/licenses/by/3.0/cn) 进行许可。\n可自由转载、引用，但需署名作者且注明文章出处。', '1463133095', '1463133095', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463133095', '0');
INSERT INTO `ad_post` VALUES ('130', '0', 'topic', '阿森纳喜获亚军', '7', '0', '0', '0', '亚军,英超,高兴', '7', '如题\n> 本文由 [b123](http://www.getyii.com/member/b123) 创作，采用 [知识共享署名 3.0 中国大陆许可协议](http://creativecommons.org/licenses/by/3.0/cn) 进行许可。\n可自由转载、引用，但需署名作者且注明文章出处。', '1463385786', '1463385786', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463385786', '0');
INSERT INTO `ad_post` VALUES ('131', '0', 'topic', '再次测试一次', '7', '0', '0', '0', '哎呦不错哦,英超', '7', '哈哈哈\n> 本文由 [b123](http://www.getyii.com/member/b123) 创作，采用 [知识共享署名 3.0 中国大陆许可协议](http://creativecommons.org/licenses/by/3.0/cn) 进行许可。\n可自由转载、引用，但需署名作者且注明文章出处。', '1463385929', '1463385929', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463385929', '0');
INSERT INTO `ad_post` VALUES ('132', '0', 'topic', 'disacnci', '3', '0', '0', '0', '', '7', 'ddddd', '1463386106', '1463386106', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463386106', '0');
INSERT INTO `ad_post` VALUES ('133', '0', 'topic', 'dddd', '4', '0', '0', '0', '', '7', 'ddddd', '1463386179', '1463386179', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463386179', '0');
INSERT INTO `ad_post` VALUES ('134', '0', 'topic', 'ffff', '3', '0', '0', '0', '', '7', 'fffgggg', '1463386274', '1463386274', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1463386274', '0');

-- ----------------------------
-- Table structure for `ad_post_tag`
-- ----------------------------
DROP TABLE IF EXISTS `ad_post_tag`;
CREATE TABLE `ad_post_tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(20) DEFAULT NULL COMMENT '名称',
  `tag_count` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '计数',
  `tag_create` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `tag_update` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_post_tag
-- ----------------------------
INSERT INTO `ad_post_tag` VALUES ('1', 'mytag', '5', '1462953620', '1462953620');
INSERT INTO `ad_post_tag` VALUES ('2', 'ac', '1', '1462954076', '1462954076');
INSERT INTO `ad_post_tag` VALUES ('3', 'tr', '1', '1462954076', '1462954076');
INSERT INTO `ad_post_tag` VALUES ('4', 'gb', '1', '1462954076', '1462954076');
INSERT INTO `ad_post_tag` VALUES ('5', 'fg', '1', '1462955922', '1462955922');
INSERT INTO `ad_post_tag` VALUES ('6', 'fhj', '1', '1462955922', '1462955922');
INSERT INTO `ad_post_tag` VALUES ('7', 'dddddd', '1', '1462956072', '1462956072');
INSERT INTO `ad_post_tag` VALUES ('8', 'hhhh', '1', '1462956072', '1462956072');
INSERT INTO `ad_post_tag` VALUES ('9', 'asdasdasd', '1', '1463017970', '1463017970');
INSERT INTO `ad_post_tag` VALUES ('10', 'sss', '1', '1463117550', '1463117550');
INSERT INTO `ad_post_tag` VALUES ('11', 'uuuu', '1', '1463133095', '1463133095');
INSERT INTO `ad_post_tag` VALUES ('12', '亚军', '1', '1463385786', '1463385786');
INSERT INTO `ad_post_tag` VALUES ('13', '英超', '2', '1463385786', '1463385786');
INSERT INTO `ad_post_tag` VALUES ('14', '高兴', '1', '1463385786', '1463385786');
INSERT INTO `ad_post_tag` VALUES ('15', '哎呦不错哦', '1', '1463385929', '1463385929');

-- ----------------------------
-- Table structure for `ad_reply`
-- ----------------------------
DROP TABLE IF EXISTS `ad_reply`;
CREATE TABLE `ad_reply` (
  `reply_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reply_post_id` int(11) NOT NULL,
  `reply_content` text CHARACTER SET utf8 NOT NULL,
  `reply_create` int(11) DEFAULT NULL,
  `reply_user_id` int(11) NOT NULL,
  `reply_ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_user_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `reply_like_count` int(11) DEFAULT '0',
  `reply_title` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `reply_update` int(11) DEFAULT '0',
  `reply_support` int(11) DEFAULT '0',
  `reply_against` int(11) DEFAULT '0',
  `reply_floor` int(11) DEFAULT '0',
  `reply_note` varchar(50) CHARACTER SET utf8 DEFAULT '0',
  `reply_deld` tinyint(4) DEFAULT '0',
  `reply_status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_reply
-- ----------------------------
INSERT INTO `ad_reply` VALUES ('1', '56', 'ddddddd', '1461914277', '7', '127.0.0.1', 'b1', '0', '0', '0', '0', '0', '0', '0', '1', '1');
INSERT INTO `ad_reply` VALUES ('2', '56', 'uuuuu', '1461914290', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '1', '1');
INSERT INTO `ad_reply` VALUES ('3', '72', '反反复复', '1462351647', '7', '127.0.0.1', 'b1', '0', '0', '0', '0', '0', '0', '0', '1', '1');
INSERT INTO `ad_reply` VALUES ('4', '57', '我是b1 我来回复了', '1462352327', '7', '127.0.0.1', 'b1', '0', '0', '0', '0', '0', '0', '0', '1', '1');
INSERT INTO `ad_reply` VALUES ('5', '57', '哎呦  不错哦 ', '1462352353', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '1', '1');
INSERT INTO `ad_reply` VALUES ('6', '40', '订单', '1462354821', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '1', '1');
INSERT INTO `ad_reply` VALUES ('7', '76', 'rrrrrr', '1462515331', '7', null, 'b123', '0', 'erwer', '1462515331', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('8', '76', 'jjjjj', '1462516241', '7', '127.0.0.1', 'b123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('9', '77', 'PHP\r\nPHP是一门伟大的语言，PHP是网站开发最好的语言。雷雪松的博客PHP栏目主要包含PHP常用的技巧、PHP基本的函数、PHP编程、实用PHP框架以及流行的PHP CMS内容管理系统等。', '1462871350', '14', null, 'hhhh', '0', 'php', '1462871350', '0', '0', '0', '0', '1', '1');
INSERT INTO `ad_reply` VALUES ('10', '78', 'ggggg', '1462871373', '14', null, 'hhhh', '0', 'gggg', '1462871373', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('11', '79', '11111111111', '1462872250', '14', '127.0.0.1', 'hhhh', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('12', '79', '11111111111', '1462872265', '14', '127.0.0.1', 'hhhh', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('13', '79', '11111111111', '1462872493', '14', '127.0.0.1', 'hhhh', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('14', '79', 'gggg', '1462873244', '14', '127.0.0.1', 'hhhh', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('15', '79', 'ggg', '1462873370', '14', '127.0.0.1', 'hhhh', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('16', '79', 'ggg', '1462873514', '14', '127.0.0.1', 'hhhh', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('17', '79', 'ggg', '1462873633', '14', '127.0.0.1', 'hhhh', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('18', '80', '哈哈哈哈', '1462874393', '14', '127.0.0.1', 'hhhh', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('19', '81', 'aaaaaaa', '1462932461', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('20', '81', 'aaaaaaa', '1462932600', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('21', '81', 'aaaaaaa', '1462932671', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('22', '81', 'aaaaaaa', '1462932738', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('23', '81', 'aaaaaaa', '1462932768', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('24', '81', 'aaaaaaa', '1462932810', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('25', '81', 'aaaaaaa', '1462932834', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('26', '81', 'bbbb', '1462932839', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('27', '81', 'cccccc', '1462932845', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('28', '91', 'sdasdasdas', '1462958248', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('29', '91', 'dddddddd', '1462958513', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('30', '91', 'dddddddd', '1462958552', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('31', '91', 'dddddddd', '1462958643', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('32', '91', 'dddddddd', '1462958706', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('33', '91', 'dddddddd', '1462958784', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('34', '91', 'dddddddd', '1462958970', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('35', '91', 'dddddddd', '1462959104', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('36', '91', 'dddddddd', '1462959123', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('37', '91', 'dddddddd', '1462959139', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('38', '91', 'kkkkkk', '1462960425', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('39', '90', 'jjj', '1462960438', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('40', '100', 'dddd', '1463031488', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `ad_reply` VALUES ('41', '100', 'hhhh', '1463031496', '1', '127.0.0.1', 'zxx123', '0', '0', '0', '0', '0', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for `ad_right_link`
-- ----------------------------
DROP TABLE IF EXISTS `ad_right_link`;
CREATE TABLE `ad_right_link` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `link_title` varchar(255) NOT NULL COMMENT '标题',
  `link_url` varchar(225) DEFAULT NULL,
  `link_image` varchar(255) DEFAULT NULL COMMENT '图片链接',
  `link_content` varchar(255) DEFAULT NULL COMMENT '内容',
  `link_type` int(5) DEFAULT NULL COMMENT '展示类别',
  `link_created_user` varchar(32) NOT NULL COMMENT '创建人',
  `link_create` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `link_update` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`link_id`),
  KEY `type_index` (`link_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_right_link
-- ----------------------------

-- ----------------------------
-- Table structure for `ad_session`
-- ----------------------------
DROP TABLE IF EXISTS `ad_session`;
CREATE TABLE `ad_session` (
  `id` varchar(40) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `idx_expire` (`expire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_session
-- ----------------------------
INSERT INTO `ad_session` VALUES ('dc7oao19qub7dbv00fpktkma94', '1463387744', 0x5F5F666C6173687C613A303A7B7D5F5F69647C733A313A2236223B);
INSERT INTO `ad_session` VALUES ('olsnap78pr5eupqbaforc5vrm1', '1463389037', 0x5F5F666C6173687C613A303A7B7D5F5F72657475726E55726C7C733A313A222F223B71725F74696D655F62656E63687C613A313A7B733A31323A2261667465725F656E636F6465223B643A313436333338363237392E30313830363B7D5F5F69647C733A313A2237223B);

-- ----------------------------
-- Table structure for `ad_user`
-- ----------------------------
DROP TABLE IF EXISTS `ad_user`;
CREATE TABLE `ad_user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_avatar` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  `user_passhash` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_tagline` varchar(40) CHARACTER SET utf8 DEFAULT '0',
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
  `user_view_count` int(11) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_user
-- ----------------------------
INSERT INTO `ad_user` VALUES ('1', 'zxx123', 'XNo3TETKevft6xmta3heGIsRkhjVclKq.jpg', '$2y$13$PEm7VNw5ApXrUbdT1OE/l..BbF.2zFxWJLBuC9ChYnsZ8zpFLL8ya', '0', '297208251@qq.com', '1458637332', '1462785958', '127.0.0.1', '哎呦不错哦', '10', '0', 'aYOOl2ZOT95Y2YlZ5ZwTON_y8jwgvdoc', '', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('2', 'zxx123456', '0', '$2y$13$Hz8.xi2c3K21ETvzxndFU.Et4J6aHL4xmH4Scc0ZUXhxhYF0XvA9K', '0', '89203299@qq.com', '1458702633', '1458719856', '127.0.0.1', '0', '10', '0', '74HSYguDlqW7VlgngIJoHkvq0a8HATQj', null, '10', '0', '0');
INSERT INTO `ad_user` VALUES ('3', 'zxx123456789', '0', '$2y$13$lzRDSnYGTb4prlzuwNYAzugWt91Nrk.PclFFZsXFAUYF1rdHmJohi', '0', '297208251@qq.com', '1458702664', '1459848986', '127.0.0.1', '0', '10', '1', 'jVtryq7r0L3EIEMLM-b-xKt9ZySzNaLB', '0', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('4', 'zhou123', '0', '$2y$13$U7M8MXazZ08GWGf1En6VreFkZjUi1VGEiNkXI4yDFmdvhgZQhtmNq', '0', '89203299@qq.com', '1458704684', '1458704684', '127.0.0.1', '0', '10', '0', 'ZGJo0sUaGeb6TZZUGN-NcG7sIcAFCrH0', '0', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('5', 'zhou', '0', '$2y$13$LF1tWQg6SEYsTT0Gcj1E0Ojpcpk6MkoNp4atfRZf46ArS2831rnFG', '0', 'zhou@qq.com', '1459413352', '1462935261', '127.0.0.1', '周杰伦 哎呦 不错哦 fffff', '10', '0', 'DjGz9-xIyEShxvnuWpcNgRcB3mo3ysSS', '0', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('6', 'admin', '0', '$2y$13$EhOsRRMZ/M4ExlW5MU1Ot.IgdU6hH51ZsaQjbHcn9R8KYyb5juwme', '0', 'admin@qq.com', '1459848774', '1459848870', '127.0.0.1', '系统管理员', '10', '0', 'RPIFqqC8qO5WNyyZnubtS5aPagfEGfXE', '0', '30', '0', '0');
INSERT INTO `ad_user` VALUES ('7', 'b123', 'uxJ9UZzYFJXJYX_IOh4vheIWjQRFNzRm.jpg', '$2y$13$A3/8.w5R9BXDKHKn0bg4dORnxHziyZItFau.MdBDX4bNdiWE1NQku', '0', 'b123@qq.com', '1460018291', '1462437731', '127.0.0.1', '0', '10', '0', 'RGmrOErhwFTsp3oZjm1igsZPt-pOHSO4', '0', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('8', 'abc', '0', '$2y$13$L6sD6PrQSyPIj/gvguQgJef99mFvALGE1kiR7Wr/MrjeAbm0sYWHi', '0', 'abc@qq.com', '1461217665', '1461217665', '127.0.0.1', '0', '10', '0', 'WyUQVQLLKUS4vUH_EKruOR26ZUBXkX4Q', '0', '10', '4', '0');
INSERT INTO `ad_user` VALUES ('9', 'cccc', '0', '$2y$13$RqoaRpVbRdt9UL7xz3Z.SOFrwc7rBXdghfmoaOniykroq3CzET1SC', '0', 'cccc@qq.com', '1462851436', '1462851436', '0', '0', '0', '0', 'nDR5coC9Yp7Wrr5GNoWGZ18QP0tedHTF', '0', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('10', 'bbbb', '0', '$2y$13$rIqs7lA7GFq9sn1cTvfiq./wLBhMYFIjDkk4QwFSHhzNOhbURImfy', '0', 'bbbb@qq.com', '1462851533', '1462851533', '0', '0', '0', '0', 'beNWSuIpLKV7ZvMrqYogPNh4JHD-Ko0m', '0', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('11', 'dddd', '0', '$2y$13$OhQa2h8MzxbxMbZxct8oCeHH3/.itYWFVcmVhylXZAO1O9PFLm6Ii', '0', 'dddd@qq.com', '1462851573', '1462851573', '0', '0', '10', '0', 'Qouu26y1nGXDcQeefrovy1ZZSXcndjII', '0', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('12', 'eeee', '0', '$2y$13$QUalxH2Ds1rwYME.ktdXTeGW.MSQl2i9TSaOkrXaIbPIhh1.hRxSy', '0', 'eeee@qq.com', '1462851914', '1462851914', '0', '0', '10', '0', 'LGZIHqoQKkrM8k0WqTch4qOsyiUQAOmP', '0', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('13', 'gggg', '0', '$2y$13$8LlZBCOvO3IiI6fTewRfMedn9NSmFMarv1YLkcgWho6OhvBOrYR5W', '0', 'gggg@qq.com', '1462862148', '1462862148', '0', '0', '10', '0', 'IjXiuuxbn3qXZgYNuIC9jdgMROmkA9GR', '0', '10', '0', '0');
INSERT INTO `ad_user` VALUES ('14', 'hhhh', '0', '$2y$13$wMvbhU8uswW8eT6jMC04peOMV4U.btdKgkeMMK2JcQFAlbCTiE9iG', '0', 'hhhh@qq.com', '1462869795', '1462869795', '0', '0', '10', '0', 'e9dlAzxhj65afRWoDl6V52UO6OhCe2qt', '0', '10', '1', '0');

-- ----------------------------
-- Table structure for `ad_user_account`
-- ----------------------------
DROP TABLE IF EXISTS `ad_user_account`;
CREATE TABLE `ad_user_account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_user_id` int(11) unsigned DEFAULT NULL COMMENT '用户ID',
  `account_provider` varchar(100) NOT NULL DEFAULT '' COMMENT '授权提供商',
  `account_client_id` varchar(255) NOT NULL,
  `account_data` text NOT NULL,
  `account_create` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`account_id`),
  KEY `account_client_id` (`account_client_id`),
  KEY `account_user_id` (`account_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_user_account
-- ----------------------------

-- ----------------------------
-- Table structure for `ad_user_info`
-- ----------------------------
DROP TABLE IF EXISTS `ad_user_info`;
CREATE TABLE `ad_user_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_user_id` int(11) unsigned NOT NULL,
  `info_info` varchar(255) DEFAULT '0' COMMENT '会员简介',
  `info_github` varchar(100) DEFAULT '0' COMMENT 'GitHub 帐号',
  `info_website` varchar(100) DEFAULT '0' COMMENT '个人主页',
  `info_company` varchar(40) DEFAULT '0' COMMENT '公司',
  `info_location` varchar(10) DEFAULT '0' COMMENT '城市',
  `info_view_count` int(11) DEFAULT '0' COMMENT '个人主页浏览次数',
  `info_comment_count` int(11) DEFAULT '0' COMMENT '发布评论数',
  `info_post_count` int(11) DEFAULT '0' COMMENT '发布文章数',
  `info_thanks_count` int(11) DEFAULT '0' COMMENT '被感谢次数',
  `info_like_count` int(11) DEFAULT '0' COMMENT '被赞次数',
  `info_hate_count` int(11) DEFAULT '0' COMMENT '喝倒彩次数',
  `info_login_count` int(11) DEFAULT '1' COMMENT '登录次数',
  `info_prev_login_time` int(11) unsigned DEFAULT '0' COMMENT '上次登录时间',
  `info_prev_login_ip` varchar(32) DEFAULT '0' COMMENT '上次登录IP',
  `info_last_login_time` int(11) unsigned DEFAULT '0' COMMENT '最后登录时间',
  `info_last_login_ip` varchar(32) DEFAULT '0' COMMENT '最后登录IP',
  `info_session_id` varchar(100) DEFAULT NULL,
  `info_create` int(11) unsigned DEFAULT '0',
  `info_update` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_user_info
-- ----------------------------
INSERT INTO `ad_user_info` VALUES ('1', '1', null, null, null, null, null, '24', '10', '12', '1', '1', '1', '23', '1463380743', '127.0.0.1', '1463384895', '127.0.0.1', '95d2de6v4nhachbnmlla74ait1', '1461143981', '1463384895');
INSERT INTO `ad_user_info` VALUES ('2', '7', '哎呦不错哦', 'github.com/zxx1988328', 'www.baidu.com', '百度公司', '北京市海淀区', '1', '0', '5', '0', '0', '0', '2', '0', '0', '1463385035', '127.0.0.1', 'olsnap78pr5eupqbaforc5vrm1', '0', '1463385035');
INSERT INTO `ad_user_info` VALUES ('3', '13', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1462862149', '127.0.0.1', '1462862149', '127.0.0.1', null, '1462862149', '1462862149');
INSERT INTO `ad_user_info` VALUES ('4', '12', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2', '0', '0', '1462869667', '127.0.0.1', 'rp0lbr9nr52682nk8c26jvko21', '0', '1462869667');
INSERT INTO `ad_user_info` VALUES ('5', '14', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2', '1462869795', '127.0.0.1', '1462869795', '127.0.0.1', 'b9c6gvme1n38ljf42oonsbn535', '1462869795', '1462869795');
INSERT INTO `ad_user_info` VALUES ('6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '0', '0');
INSERT INTO `ad_user_info` VALUES ('7', '3', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '0', '0');
INSERT INTO `ad_user_info` VALUES ('8', '4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '0', '0');
INSERT INTO `ad_user_info` VALUES ('9', '5', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '0', '0');
INSERT INTO `ad_user_info` VALUES ('10', '6', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '4', '1463362141', '127.0.0.1', '1463385681', '127.0.0.1', 'dc7oao19qub7dbv00fpktkma94', '0', '1463385681');
INSERT INTO `ad_user_info` VALUES ('11', '8', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '0', '0');
INSERT INTO `ad_user_info` VALUES ('12', '9', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '0', '0');
INSERT INTO `ad_user_info` VALUES ('13', '10', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '0', '0');
INSERT INTO `ad_user_info` VALUES ('14', '11', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '0', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ad_user_meta
-- ----------------------------
INSERT INTO `ad_user_meta` VALUES ('1', '1', 'like', null, '37', 'topic', '1461312310');
INSERT INTO `ad_user_meta` VALUES ('2', '5', 'follow', null, '37', 'topic', '1461314180');
INSERT INTO `ad_user_meta` VALUES ('3', '1', 'follow', null, '38', 'topic', '1461316142');
INSERT INTO `ad_user_meta` VALUES ('4', '5', 'follow', null, '38', 'topic', '1461316222');
INSERT INTO `ad_user_meta` VALUES ('5', '5', 'follow', null, '39', 'topic', '1461551225');
INSERT INTO `ad_user_meta` VALUES ('6', '5', 'follow', null, '40', 'topic', '1461554608');
INSERT INTO `ad_user_meta` VALUES ('7', '5', 'follow', null, '41', 'topic', '1461555263');
INSERT INTO `ad_user_meta` VALUES ('8', '5', 'follow', null, '42', 'topic', '1461555296');
INSERT INTO `ad_user_meta` VALUES ('9', '5', 'follow', null, '43', 'topic', '1461555301');
INSERT INTO `ad_user_meta` VALUES ('10', '8', 'follow', null, '43', 'topic', '1461555745');
INSERT INTO `ad_user_meta` VALUES ('11', '8', 'follow', null, '44', 'topic', '1461556082');
INSERT INTO `ad_user_meta` VALUES ('12', '8', 'follow', null, '49', 'topic', '1461563449');
INSERT INTO `ad_user_meta` VALUES ('13', '8', 'follow', null, '50', 'topic', '1461563465');
INSERT INTO `ad_user_meta` VALUES ('14', '8', 'follow', null, '51', 'topic', '1461563519');
INSERT INTO `ad_user_meta` VALUES ('15', '1', 'follow', null, '51', 'topic', '1461563562');
INSERT INTO `ad_user_meta` VALUES ('16', '8', 'follow', null, '38', 'topic', '1461564538');
INSERT INTO `ad_user_meta` VALUES ('17', '8', 'follow', null, '39', 'topic', '1461564552');
INSERT INTO `ad_user_meta` VALUES ('18', '8', 'follow', null, '52', 'topic', '1461564677');
INSERT INTO `ad_user_meta` VALUES ('19', '1', 'follow', null, '52', 'topic', '1461564707');
INSERT INTO `ad_user_meta` VALUES ('20', '5', 'follow', null, '53', 'topic', '1461564813');
INSERT INTO `ad_user_meta` VALUES ('21', '8', 'follow', null, '53', 'topic', '1461564851');
INSERT INTO `ad_user_meta` VALUES ('22', '8', 'follow', null, '54', 'topic', '1461565041');
INSERT INTO `ad_user_meta` VALUES ('23', '1', 'follow', null, '54', 'topic', '1461565145');
INSERT INTO `ad_user_meta` VALUES ('24', '5', 'follow', null, '55', 'topic', '1461565184');
INSERT INTO `ad_user_meta` VALUES ('25', '8', 'follow', null, '55', 'topic', '1461565224');
INSERT INTO `ad_user_meta` VALUES ('26', '1', 'follow', null, '56', 'topic', '1461565393');
INSERT INTO `ad_user_meta` VALUES ('27', '8', 'follow', null, '56', 'topic', '1461565418');
INSERT INTO `ad_user_meta` VALUES ('28', '5', 'follow', null, '56', 'topic', '1461565441');
INSERT INTO `ad_user_meta` VALUES ('29', '1', 'follow', null, '57', 'topic', '1461565524');
INSERT INTO `ad_user_meta` VALUES ('30', '7', 'follow', null, '58', 'topic', '1461566621');
INSERT INTO `ad_user_meta` VALUES ('31', '1', 'like', null, '58', 'topic', '1461566637');
INSERT INTO `ad_user_meta` VALUES ('32', '7', 'follow', null, '59', 'topic', '1461824943');
INSERT INTO `ad_user_meta` VALUES ('33', '7', 'follow', null, '60', 'topic', '1461824965');
INSERT INTO `ad_user_meta` VALUES ('34', '7', 'follow', null, '61', 'topic', '1461826263');
INSERT INTO `ad_user_meta` VALUES ('35', '7', 'follow', null, '62', 'topic', '1461826313');
INSERT INTO `ad_user_meta` VALUES ('36', '7', 'follow', null, '63', 'topic', '1461826590');
INSERT INTO `ad_user_meta` VALUES ('37', '7', 'follow', null, '64', 'topic', '1461826645');
INSERT INTO `ad_user_meta` VALUES ('38', '7', 'follow', null, '65', 'topic', '1461826993');
INSERT INTO `ad_user_meta` VALUES ('39', '7', 'follow', null, '66', 'topic', '1461827086');
INSERT INTO `ad_user_meta` VALUES ('40', '7', 'follow', null, '67', 'tweet', '1461827232');
INSERT INTO `ad_user_meta` VALUES ('41', '7', 'follow', null, '68', 'tweet', '1461827247');
INSERT INTO `ad_user_meta` VALUES ('42', '7', 'follow', null, '69', 'tweet', '1461831794');
INSERT INTO `ad_user_meta` VALUES ('43', '7', 'follow', null, '70', 'tweet', '1461831832');
INSERT INTO `ad_user_meta` VALUES ('44', '1', 'follow', null, '71', 'tweet', '1461832231');
INSERT INTO `ad_user_meta` VALUES ('45', '1', 'follow', null, '58', 'topic', '1461837238');
INSERT INTO `ad_user_meta` VALUES ('46', '5', 'follow', null, '58', 'topic', '1461897327');
INSERT INTO `ad_user_meta` VALUES ('47', '7', 'follow', null, '72', 'topic', '1461901265');
INSERT INTO `ad_user_meta` VALUES ('48', '7', 'follow', null, '73', 'tweet', '1461912044');
INSERT INTO `ad_user_meta` VALUES ('49', '7', 'follow', null, '74', 'tweet', '1461912155');
INSERT INTO `ad_user_meta` VALUES ('50', '7', 'follow', null, '56', 'topic', '1461914153');
INSERT INTO `ad_user_meta` VALUES ('51', '7', 'follow', null, '75', 'tweet', '1461914470');
INSERT INTO `ad_user_meta` VALUES ('52', '7', 'follow', null, '57', 'topic', '1462352327');
INSERT INTO `ad_user_meta` VALUES ('53', '1', 'follow', null, '40', 'topic', '1462354822');
INSERT INTO `ad_user_meta` VALUES ('54', '7', 'follow', null, '76', 'topic', '1462515332');
INSERT INTO `ad_user_meta` VALUES ('55', '14', 'follow', null, '77', 'topic', '1462871350');
INSERT INTO `ad_user_meta` VALUES ('56', '14', 'follow', null, '78', 'topic', '1462871373');
INSERT INTO `ad_user_meta` VALUES ('57', '14', 'follow', null, '79', 'topic', '1462871625');
INSERT INTO `ad_user_meta` VALUES ('58', '14', 'follow', null, '80', 'topic', '1462874313');
INSERT INTO `ad_user_meta` VALUES ('59', '1', 'follow', null, '81', 'topic', '1462932452');
INSERT INTO `ad_user_meta` VALUES ('60', '1', 'follow', null, '82', 'topic', '1462944671');
INSERT INTO `ad_user_meta` VALUES ('61', '1', 'follow', null, '83', 'topic', '1462945759');
INSERT INTO `ad_user_meta` VALUES ('62', '1', 'follow', null, '84', 'topic', '1462946277');
INSERT INTO `ad_user_meta` VALUES ('63', '1', 'follow', null, '85', 'topic', '1462946393');
INSERT INTO `ad_user_meta` VALUES ('64', '1', 'follow', null, '86', 'topic', '1462953658');
INSERT INTO `ad_user_meta` VALUES ('65', '1', 'follow', null, '87', 'topic', '1462953688');
INSERT INTO `ad_user_meta` VALUES ('66', '1', 'follow', null, '88', 'topic', '1462953724');
INSERT INTO `ad_user_meta` VALUES ('67', '1', 'follow', null, '89', 'topic', '1462954076');
INSERT INTO `ad_user_meta` VALUES ('68', '1', 'follow', null, '90', 'topic', '1462955923');
INSERT INTO `ad_user_meta` VALUES ('69', '1', 'follow', null, '91', 'topic', '1462956072');
INSERT INTO `ad_user_meta` VALUES ('70', '1', 'follow', null, '92', 'tweet', '1462961073');
INSERT INTO `ad_user_meta` VALUES ('71', '1', 'follow', null, '93', 'tweet', '1462961091');
INSERT INTO `ad_user_meta` VALUES ('72', '1', 'follow', null, '94', 'tweet', '1462961104');
INSERT INTO `ad_user_meta` VALUES ('73', '1', 'follow', null, '95', 'tweet', '1462961170');
INSERT INTO `ad_user_meta` VALUES ('74', '1', 'follow', null, '96', 'tweet', '1462961256');
INSERT INTO `ad_user_meta` VALUES ('75', '1', 'follow', null, '97', 'tweet', '1462961302');
INSERT INTO `ad_user_meta` VALUES ('76', '1', 'follow', null, '98', 'tweet', '1462961318');
INSERT INTO `ad_user_meta` VALUES ('77', '1', 'follow', null, '99', 'tweet', '1463016984');
INSERT INTO `ad_user_meta` VALUES ('78', '1', 'follow', null, '100', 'topic', '1463017970');
INSERT INTO `ad_user_meta` VALUES ('79', '1', 'follow', null, '101', 'tweet', '1463111754');
INSERT INTO `ad_user_meta` VALUES ('80', '1', 'follow', null, '102', 'tweet', '1463116655');
INSERT INTO `ad_user_meta` VALUES ('81', '1', 'follow', null, '103', 'tweet', '1463116796');
INSERT INTO `ad_user_meta` VALUES ('82', '1', 'follow', null, '104', 'tweet', '1463116957');
INSERT INTO `ad_user_meta` VALUES ('83', '1', 'follow', null, '105', 'tweet', '1463117017');
INSERT INTO `ad_user_meta` VALUES ('84', '1', 'follow', null, '106', 'tweet', '1463117200');
INSERT INTO `ad_user_meta` VALUES ('85', '1', 'follow', null, '107', 'tweet', '1463117211');
INSERT INTO `ad_user_meta` VALUES ('86', '1', 'follow', null, '108', 'tweet', '1463117431');
INSERT INTO `ad_user_meta` VALUES ('87', '1', 'follow', null, '109', 'tweet', '1463117464');
INSERT INTO `ad_user_meta` VALUES ('88', '1', 'follow', null, '110', 'topic', '1463117550');
INSERT INTO `ad_user_meta` VALUES ('89', '1', 'follow', null, '111', 'tweet', '1463117790');
INSERT INTO `ad_user_meta` VALUES ('90', '1', 'follow', null, '112', 'tweet', '1463117812');
INSERT INTO `ad_user_meta` VALUES ('91', '1', 'follow', null, '113', 'tweet', '1463117861');
INSERT INTO `ad_user_meta` VALUES ('92', '1', 'follow', null, '114', 'tweet', '1463118171');
INSERT INTO `ad_user_meta` VALUES ('93', '1', 'follow', null, '115', 'tweet', '1463118178');
INSERT INTO `ad_user_meta` VALUES ('94', '1', 'follow', null, '116', 'tweet', '1463118184');
INSERT INTO `ad_user_meta` VALUES ('95', '1', 'follow', null, '117', 'tweet', '1463118699');
INSERT INTO `ad_user_meta` VALUES ('96', '1', 'follow', null, '118', 'tweet', '1463118760');
INSERT INTO `ad_user_meta` VALUES ('97', '1', 'follow', null, '119', 'tweet', '1463123000');
INSERT INTO `ad_user_meta` VALUES ('98', '1', 'follow', null, '120', 'tweet', '1463123547');
INSERT INTO `ad_user_meta` VALUES ('99', '1', 'follow', null, '121', 'tweet', '1463123551');
INSERT INTO `ad_user_meta` VALUES ('100', '1', 'follow', null, '122', 'tweet', '1463123555');
INSERT INTO `ad_user_meta` VALUES ('101', '1', 'follow', null, '123', 'topic', '1463126767');
INSERT INTO `ad_user_meta` VALUES ('102', '1', 'follow', null, '124', 'topic', '1463128661');
INSERT INTO `ad_user_meta` VALUES ('103', '1', 'follow', null, '125', 'tweet', '1463130249');
INSERT INTO `ad_user_meta` VALUES ('104', '1', 'follow', null, '126', 'tweet', '1463130253');
INSERT INTO `ad_user_meta` VALUES ('105', '1', 'follow', null, '127', 'topic', '1463132092');
INSERT INTO `ad_user_meta` VALUES ('106', '1', 'follow', null, '128', 'topic', '1463132119');
INSERT INTO `ad_user_meta` VALUES ('107', '1', 'follow', null, '129', 'topic', '1463133095');
INSERT INTO `ad_user_meta` VALUES ('108', '7', 'follow', null, '130', 'topic', '1463385786');
INSERT INTO `ad_user_meta` VALUES ('109', '7', 'follow', null, '131', 'topic', '1463385929');
INSERT INTO `ad_user_meta` VALUES ('110', '7', 'follow', null, '132', 'topic', '1463386106');
INSERT INTO `ad_user_meta` VALUES ('111', '7', 'follow', null, '133', 'topic', '1463386179');
INSERT INTO `ad_user_meta` VALUES ('112', '7', 'follow', null, '134', 'topic', '1463386274');

-- ----------------------------
-- Table structure for `merit`
-- ----------------------------
DROP TABLE IF EXISTS `merit`;
CREATE TABLE `merit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL COMMENT '用户ID',
  `username` varchar(20) DEFAULT NULL COMMENT '用户名',
  `type` int(2) DEFAULT '1' COMMENT '类型 1:积分 2:声望 3:徽章',
  `merit` int(11) DEFAULT NULL COMMENT '总值',
  `created_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of merit
-- ----------------------------
INSERT INTO `merit` VALUES ('2', '1', 'zxx123', '1', '2', '1463384969', '1463384969');
INSERT INTO `merit` VALUES ('3', '7', 'b123', '1', '12', '1463385035', '1463386274');

-- ----------------------------
-- Table structure for `merit_log`
-- ----------------------------
DROP TABLE IF EXISTS `merit_log`;
CREATE TABLE `merit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL COMMENT '用户ID',
  `username` varchar(20) DEFAULT NULL COMMENT '用户名',
  `merit_template_id` int(11) unsigned DEFAULT NULL COMMENT '模板ID',
  `type` int(2) DEFAULT '1' COMMENT '类型 1:积分 2:声望 3:徽章',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `action_type` int(2) DEFAULT '2' COMMENT '操作类型 1减去 2新增',
  `increment` int(11) unsigned DEFAULT NULL COMMENT '变化值',
  `created_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `user_id` (`user_id`),
  KEY `merit_template_id` (`merit_template_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of merit_log
-- ----------------------------
INSERT INTO `merit_log` VALUES ('1', '1', 'zxx123', '1', '1', '登陆: +2积分', '2', '2', '1463384969');
INSERT INTO `merit_log` VALUES ('2', '7', 'b123', '1', '1', '登陆: +2积分', '2', '2', '1463385035');
INSERT INTO `merit_log` VALUES ('3', '7', 'b123', '2', '1', '发帖奖励: +10积分', '2', '10', '1463386274');

-- ----------------------------
-- Table structure for `merit_template`
-- ----------------------------
DROP TABLE IF EXISTS `merit_template`;
CREATE TABLE `merit_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(2) DEFAULT '1' COMMENT '类型 1:积分 2:声望 3:徽章',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `unique_id` varchar(255) NOT NULL COMMENT 'action uniqueId',
  `method` int(2) DEFAULT '2' COMMENT '请求方式 1 get 2 post',
  `event` int(2) DEFAULT '0' COMMENT '事件 0:不绑定',
  `action_type` int(2) DEFAULT '2' COMMENT '操作类型 1减去 2新增',
  `rule_key` int(2) DEFAULT '0' COMMENT '规则类型 0:不限制 1:按天限制 2:按次限制',
  `rule_value` int(11) DEFAULT '0' COMMENT '规则值',
  `increment` int(11) unsigned DEFAULT NULL COMMENT '变化值',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态 0暂停 1开启',
  `created_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `unique_id` (`unique_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of merit_template
-- ----------------------------
INSERT INTO `merit_template` VALUES ('1', '1', '登陆', 'Site/Login', '2', '0', '2', '1', '100', '2', '1', '1462846226', '1462847456');
INSERT INTO `merit_template` VALUES ('2', '1', '发帖奖励', 'ad-post/create', '2', '0', '2', '1', '100', '10', '1', '1463385716', '1463386088');

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

-- ----------------------------
-- Table structure for `search_log`
-- ----------------------------
DROP TABLE IF EXISTS `search_log`;
CREATE TABLE `search_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL COMMENT '用户ID',
  `keyword` varchar(255) NOT NULL DEFAULT '' COMMENT '搜索关键词',
  `created_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `keyword` (`keyword`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of search_log
-- ----------------------------

-- ----------------------------
-- Table structure for `setting`
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `code` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `store_range` varchar(255) DEFAULT NULL,
  `store_dir` varchar(255) DEFAULT NULL,
  `value` text,
  `sort_order` int(11) NOT NULL DEFAULT '50',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `code` (`code`),
  KEY `sort_order` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=5114 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('11', '0', 'info', 'group', '', '', '', '50');
INSERT INTO `setting` VALUES ('21', '0', 'basic', 'group', '', '', '', '50');
INSERT INTO `setting` VALUES ('31', '0', 'smtp', 'group', '', '', '', '50');
INSERT INTO `setting` VALUES ('41', '0', 'account', 'group', '', '', '', '50');
INSERT INTO `setting` VALUES ('4114', '41', 'googleLogin', 'select', '0,1', '', '1', '50');
INSERT INTO `setting` VALUES ('1111', '11', 'siteName', 'text', '', '', '贴的传说', '50');
INSERT INTO `setting` VALUES ('1112', '11', 'siteTitle', 'text', '', '', 'Your Site Title', '50');
INSERT INTO `setting` VALUES ('1113', '11', 'siteKeyword', 'text', '', '', 'Your Site Keyword', '50');
INSERT INTO `setting` VALUES ('2111', '21', 'timezone', 'select', '-12,-11,-10,-9,-8,-7,-6,-5,-4,-3.5,-3,-2,-1,0,1,2,3,3.5,4,4.5,5,5.5,5.75,6,6.5,7,8,9,9.5,10,11,12', '', '8', '50');
INSERT INTO `setting` VALUES ('2112', '21', 'commentCheck', 'select', '0,1', '', '1', '50');
INSERT INTO `setting` VALUES ('3111', '31', 'smtpHost', 'text', '', '', 'localhost', '50');
INSERT INTO `setting` VALUES ('3112', '31', 'smtpPort', 'text', '', '', '', '50');
INSERT INTO `setting` VALUES ('3113', '31', 'smtpUser', 'text', '', '', '', '50');
INSERT INTO `setting` VALUES ('3114', '31', 'smtpPassword', 'password', '', '', '', '50');
INSERT INTO `setting` VALUES ('3115', '31', 'smtpMail', 'text', '', '', '', '50');
INSERT INTO `setting` VALUES ('4111', '41', 'githubLogin', 'select', '0,1', '', '1', '50');
INSERT INTO `setting` VALUES ('4112', '41', 'githubClientId', 'text', '', '', '9c8d914b20682278aac5', '50');
INSERT INTO `setting` VALUES ('4113', '41', 'githubClientSecret', 'text', '', '', '0237782d08299c40fcd31c4dd664147915f96a27', '50');
INSERT INTO `setting` VALUES ('1114', '11', 'siteAnalytics', 'text', '', '', 'Your Site Analytics', '50');
INSERT INTO `setting` VALUES ('4115', '41', 'googleClientId', 'text', '', '', '', '50');
INSERT INTO `setting` VALUES ('4116', '41', 'googleClientSecret', 'text', '', '', '', '50');
INSERT INTO `setting` VALUES ('4117', '41', 'weiboLogin', 'select', '0,1', '', '1', '50');
INSERT INTO `setting` VALUES ('4118', '41', 'weiboClientId', 'text', '', '', '', '50');
INSERT INTO `setting` VALUES ('4119', '41', 'weiboClientSecret', 'text', '', '', '', '50');
INSERT INTO `setting` VALUES ('4120', '41', 'qqLogin', 'select', '0,1', '', '1', '50');
INSERT INTO `setting` VALUES ('4121', '41', 'qqClientId', 'text', '', '', '', '50');
INSERT INTO `setting` VALUES ('4122', '41', 'qqClientSecret', 'text', '', '', '', '50');

-- ----------------------------
-- Table structure for `__user_info`
-- ----------------------------
DROP TABLE IF EXISTS `__user_info`;
CREATE TABLE `__user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `info` varchar(255) DEFAULT NULL COMMENT '会员简介',
  `github` varchar(100) DEFAULT NULL COMMENT 'GitHub 帐号',
  `website` varchar(100) DEFAULT NULL COMMENT '个人主页',
  `company` varchar(40) DEFAULT NULL COMMENT '公司',
  `location` varchar(10) DEFAULT NULL COMMENT '城市',
  `view_count` int(11) DEFAULT '0' COMMENT '个人主页浏览次数',
  `comment_count` int(11) DEFAULT '0' COMMENT '发布评论数',
  `post_count` int(11) DEFAULT '0' COMMENT '发布文章数',
  `thanks_count` int(11) DEFAULT '0' COMMENT '被感谢次数',
  `like_count` int(11) DEFAULT '0' COMMENT '被赞次数',
  `hate_count` int(11) DEFAULT '0' COMMENT '喝倒彩次数',
  `login_count` int(11) DEFAULT '1' COMMENT '登录次数',
  `prev_login_time` int(11) unsigned NOT NULL COMMENT '上次登录时间',
  `prev_login_ip` varchar(32) NOT NULL COMMENT '上次登录IP',
  `last_login_time` int(11) unsigned NOT NULL COMMENT '最后登录时间',
  `last_login_ip` varchar(32) NOT NULL COMMENT '最后登录IP',
  `session_id` varchar(100) DEFAULT NULL,
  `created_at` int(11) unsigned NOT NULL,
  `updated_at` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of __user_info
-- ----------------------------
INSERT INTO `__user_info` VALUES ('7', '7', 'xxx', 'xx', 'xx', 'xx', 'xx', '0', '0', '0', '0', '0', '0', '1', '1461217665', '127.0.0.1', '1461217665', '127.0.0.1', 'xx', '1461217665', '1461217665');
