/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50734
Source Host           : localhost:3306
Source Database       : melewar

Target Server Type    : MYSQL
Target Server Version : 50734
File Encoding         : 65001

Date: 2023-06-17 19:36:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dessert
-- ----------------------------
DROP TABLE IF EXISTS `dessert`;
CREATE TABLE `dessert` (
  `dessertID` int(11) NOT NULL,
  `dessertName` varchar(100) NOT NULL,
  PRIMARY KEY (`dessertID`),
  UNIQUE KEY `dessertName` (`dessertName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of dessert
-- ----------------------------

-- ----------------------------
-- Table structure for drink
-- ----------------------------
DROP TABLE IF EXISTS `drink`;
CREATE TABLE `drink` (
  `drinkID` int(11) NOT NULL,
  `drinkName` varchar(50) NOT NULL,
  PRIMARY KEY (`drinkID`),
  UNIQUE KEY `drinkName` (`drinkName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of drink
-- ----------------------------

-- ----------------------------
-- Table structure for food
-- ----------------------------
DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `foodID` int(11) NOT NULL,
  `foodName` varchar(100) NOT NULL,
  PRIMARY KEY (`foodID`),
  UNIQUE KEY `foodName` (`foodName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of food
-- ----------------------------

-- ----------------------------
-- Table structure for reservation
-- ----------------------------
DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `bookingID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `reservationDate` varchar(30) NOT NULL,
  `reservationTime` varchar(30) NOT NULL,
  `no_of_guest` int(50) NOT NULL,
  `orderedFood` varchar(150) NOT NULL,
  PRIMARY KEY (`bookingID`),
  KEY `fk_userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of reservation
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `birthDate` varchar(25) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'aa', 'aa@qq.com', '12345678911', 'aa', '2323-5-1', '11');
INSERT INTO `user` VALUES ('3', 'bb', '112@qq.com', null, 'bb', null, null);
INSERT INTO `user` VALUES ('4', 'cc', 'cc@qq.com', null, 'cc', null, null);
