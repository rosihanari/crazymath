/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : crazymath

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-04-25 13:23:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `scores`
-- ----------------------------
DROP TABLE IF EXISTS `scores`;
CREATE TABLE `scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `playtime` datetime DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of scores
-- ----------------------------
INSERT INTO `scores` VALUES ('2', 'rosihanari', '30', '2019-04-08 10:26:22', 'myfoto.jpg');
INSERT INTO `scores` VALUES ('3', 'rosihanari', '0', '2019-04-08 10:26:51', 'myfoto.jpg');
INSERT INTO `scores` VALUES ('4', 'rosihanari', '0', '2019-04-08 10:27:11', 'myfoto.jpg');
INSERT INTO `scores` VALUES ('5', 'rosihanari', '-5', '2019-04-08 10:27:34', 'myfoto.jpg');
