/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50090
Source Host           : 127.0.0.1:3306
Source Database       : ebs

Target Server Type    : MYSQL
Target Server Version : 50090
File Encoding         : 65001

Date: 2014-02-07 16:00:08
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `my_admin`
-- ----------------------------
DROP TABLE IF EXISTS `my_admin`;
CREATE TABLE `my_admin` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `lasttime` datetime default NULL,
  `lastip` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_admin
-- ----------------------------
INSERT INTO `my_admin` VALUES ('3', 'admin', '61e857a5131a2e0c0d62be3f9fad8896', '2014-02-07 15:47:55', '127.0.0.1');

-- ----------------------------
-- Table structure for `my_baoming`
-- ----------------------------
DROP TABLE IF EXISTS `my_baoming`;
CREATE TABLE `my_baoming` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `createtime` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_baoming
-- ----------------------------

-- ----------------------------
-- Table structure for `my_config`
-- ----------------------------
DROP TABLE IF EXISTS `my_config`;
CREATE TABLE `my_config` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(40) default NULL,
  `value` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_config
-- ----------------------------
INSERT INTO `my_config` VALUES ('1', 'currtime', '2014-02-07 15:57:58');
INSERT INTO `my_config` VALUES ('2', 'name', '多慧');
INSERT INTO `my_config` VALUES ('3', 'web', 'http://127.0.0.1/duohui/');
INSERT INTO `my_config` VALUES ('4', 'title', '多慧');
INSERT INTO `my_config` VALUES ('5', 'keywords', '');
INSERT INTO `my_config` VALUES ('6', 'description', '');
INSERT INTO `my_config` VALUES ('7', 'address', '大连市大连市大连市大连市大连市');
INSERT INTO `my_config` VALUES ('8', 'tel', '15140000000（先生）');
INSERT INTO `my_config` VALUES ('9', 'fax', '0411-88888111');
INSERT INTO `my_config` VALUES ('10', 'mail', 'vickyxinying@163.com');
INSERT INTO `my_config` VALUES ('11', 'down', '大连多慧企业顾问有限公司&nbsp; 版权所有&nbsp;&nbsp;  备案号：xxxxxxxxxxx');
INSERT INTO `my_config` VALUES ('12', 'zczx', '15140000001（先生）');
INSERT INTO `my_config` VALUES ('16', 'qq2', '22222');
INSERT INTO `my_config` VALUES ('15', 'qq1', '111111111');
INSERT INTO `my_config` VALUES ('17', 'gonggao', '大连多慧会计师事务所、大连名惠 工程咨询有限公司、大连多慧企业 顾问有限公司是以中国注册会计师、 特大型企业财务总监、中国注册咨 询工程师、各类工程咨询专家为核 心，经国家发改委和辽宁省财政厅 批准组建的一个专门为各类企业提 供大连审计、验资、资产评估；编 制可行性研究报告、节能评估报告； 组织专家评审；大连代理记账、财 务咨询、涉税服务等三十几项业务 的咨询服务机构。为企业提供“一 站式”全方位服务。 ');

-- ----------------------------
-- Table structure for `my_info`
-- ----------------------------
DROP TABLE IF EXISTS `my_info`;
CREATE TABLE `my_info` (
  `id` int(11) NOT NULL auto_increment,
  `ic_id` int(11) default NULL,
  `p_ic_id` varchar(11) default 'x',
  `name` varchar(255) default NULL,
  `other` text,
  `hit` int(11) default '0',
  `number` int(11) default '0',
  `createtime` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `photo` varchar(222) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_info
-- ----------------------------

-- ----------------------------
-- Table structure for `my_info_cate`
-- ----------------------------
DROP TABLE IF EXISTS `my_info_cate`;
CREATE TABLE `my_info_cate` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(60) default NULL,
  `number` int(11) default '0',
  `p_id` varchar(11) default 'x',
  `photo` varchar(111) default NULL,
  `other` longtext,
  `sort` int(1) default '1',
  `hidden` int(11) default '0' COMMENT '0:显示 1:不显示',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_info_cate
-- ----------------------------

-- ----------------------------
-- Table structure for `my_info_cate1`
-- ----------------------------
DROP TABLE IF EXISTS `my_info_cate1`;
CREATE TABLE `my_info_cate1` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(60) default NULL,
  `number` int(11) default '0',
  `p_id` varchar(11) default 'x',
  `photo` varchar(111) default NULL,
  `other` longtext,
  `sort` int(1) default '1' COMMENT '1.文章，2列表',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_info_cate1
-- ----------------------------

-- ----------------------------
-- Table structure for `my_info_cate2`
-- ----------------------------
DROP TABLE IF EXISTS `my_info_cate2`;
CREATE TABLE `my_info_cate2` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(60) default NULL,
  `number` int(11) default '0',
  `p_id` varchar(11) default 'x',
  `photo` varchar(111) default NULL,
  `other` longtext,
  `sort` int(1) default '1' COMMENT '1.文章，2列表',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_info_cate2
-- ----------------------------

-- ----------------------------
-- Table structure for `my_message`
-- ----------------------------
DROP TABLE IF EXISTS `my_message`;
CREATE TABLE `my_message` (
  `id` int(11) NOT NULL auto_increment,
  `ic_id` varchar(11) default NULL,
  `name` varchar(100) default NULL,
  `phone` varchar(30) default NULL,
  `other` longtext,
  `createtime` timestamp NULL default CURRENT_TIMESTAMP,
  `address` varchar(222) default NULL,
  `youbian` varchar(222) default NULL,
  `duty` varchar(222) default NULL,
  `person` varchar(222) default NULL,
  `tel` varchar(222) default NULL,
  `yewufanwei` varchar(222) default NULL,
  `zhuyaochanpin` varchar(222) default NULL,
  `zhuyingdiqu` varchar(222) default NULL,
  `dlzhuyaoshangpin` varchar(222) default NULL,
  `gongsichengli` varchar(222) default NULL,
  `yuangongzongshu` varchar(222) default NULL,
  `money` varchar(222) default NULL,
  `mary` varchar(1) default NULL,
  `sex` varchar(1) default NULL,
  `mail` varchar(222) default NULL,
  `num` varchar(222) default NULL,
  `nation` varchar(222) default NULL,
  `edu` varchar(222) default NULL,
  `edut` varchar(111) default NULL,
  `foreign` varchar(111) default NULL,
  `party` varchar(111) default NULL,
  `status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_message
-- ----------------------------

-- ----------------------------
-- Table structure for `my_photo`
-- ----------------------------
DROP TABLE IF EXISTS `my_photo`;
CREATE TABLE `my_photo` (
  `id` int(11) NOT NULL auto_increment,
  `pc_id` int(11) default NULL,
  `name` varchar(60) default NULL,
  `photo` varchar(20) default NULL,
  `fun` varchar(100) default NULL,
  `other` text,
  `up` tinyint(1) default '0',
  `number` int(11) default '0',
  `createtime` timestamp NULL default CURRENT_TIMESTAMP,
  `hit` int(11) default '0',
  `from` varchar(60) default NULL,
  `jieshao` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_photo
-- ----------------------------

-- ----------------------------
-- Table structure for `my_photo1`
-- ----------------------------
DROP TABLE IF EXISTS `my_photo1`;
CREATE TABLE `my_photo1` (
  `id` int(11) NOT NULL auto_increment,
  `pc_id` int(11) default NULL,
  `name` varchar(60) default NULL,
  `photo` varchar(20) default NULL,
  `fun` varchar(100) default NULL,
  `other` text,
  `up` tinyint(1) default '0',
  `number` int(11) default '0',
  `createtime` timestamp NULL default CURRENT_TIMESTAMP,
  `hit` int(11) default NULL,
  `from` varchar(60) default NULL,
  `jieshao` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_photo1
-- ----------------------------

-- ----------------------------
-- Table structure for `my_photo_cate`
-- ----------------------------
DROP TABLE IF EXISTS `my_photo_cate`;
CREATE TABLE `my_photo_cate` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(60) default NULL,
  `number` int(11) default '0',
  `pid` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_photo_cate
-- ----------------------------

-- ----------------------------
-- Table structure for `my_read`
-- ----------------------------
DROP TABLE IF EXISTS `my_read`;
CREATE TABLE `my_read` (
  `id` int(9) NOT NULL auto_increment,
  `newsid` int(9) default '0',
  `num` int(9) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_read
-- ----------------------------

-- ----------------------------
-- Table structure for `my_showmess`
-- ----------------------------
DROP TABLE IF EXISTS `my_showmess`;
CREATE TABLE `my_showmess` (
  `id` int(11) NOT NULL auto_increment,
  `ic_id` varchar(10) default NULL,
  `p_ic_id` varchar(10) default NULL,
  `ic_sort` varchar(20) default NULL,
  `photo1` varchar(30) default NULL,
  `photo2` varchar(30) default NULL,
  `name` varchar(50) default NULL,
  `mail` varchar(222) default NULL,
  `tel` varchar(222) default NULL,
  `url` varchar(222) default NULL,
  `age` varchar(222) default NULL,
  `address` varchar(255) default NULL,
  `person` int(10) default NULL,
  `photo` varchar(222) default NULL,
  `createtime` timestamp NULL default CURRENT_TIMESTAMP,
  `number` int(10) default '0',
  `other` longtext,
  `hot` int(1) default '0',
  `wage` varchar(255) default NULL,
  `deadline` varchar(255) default NULL,
  `fax` varchar(255) default NULL,
  `zipcode` int(11) default NULL,
  `f_id` int(11) default NULL,
  `phone` varchar(30) default NULL,
  `other1` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_showmess
-- ----------------------------

-- ----------------------------
-- Table structure for `my_url`
-- ----------------------------
DROP TABLE IF EXISTS `my_url`;
CREATE TABLE `my_url` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(40) default NULL,
  `url` varchar(100) default NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_url
-- ----------------------------
