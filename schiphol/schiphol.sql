/*
 Navicat Premium Data Transfer

 Source Server         : lokaal
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : schiphol

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 30/05/2021 23:06:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gebruiker
-- ----------------------------
DROP TABLE IF EXISTS `gebruiker`;
CREATE TABLE `gebruiker`  (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `naam` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `postcode` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `geslacht` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `geboortedatum` timestamp(6) NULL DEFAULT NULL,
  `email` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gebruiker
-- ----------------------------
INSERT INTO `gebruiker` VALUES (0, 'john van den', '1098LV', 'm', '2001-01-25 10:35:06.000000', 'jvdb@live.nl');
INSERT INTO `gebruiker` VALUES (2, 'celia hayna', '1999BB', 'v', '1986-05-24 00:00:00.000000', 'ch@gnail.com');
INSERT INTO `gebruiker` VALUES (3, 'justin boom', '2000AA', 'm', '1991-05-03 00:00:00.000000', 'jv@live.nl');
INSERT INTO `gebruiker` VALUES (4, 'roemer gallo', '1999BB', 'm', '0000-00-00 00:00:00.000000', 'rg@hotmail.c');

-- ----------------------------
-- Table structure for klacht
-- ----------------------------
DROP TABLE IF EXISTS `klacht`;
CREATE TABLE `klacht`  (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `id_gebruiker` smallint NULL DEFAULT NULL,
  `id_klachtsoort` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `postcode` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `datum` datetime(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of klacht
-- ----------------------------
INSERT INTO `klacht` VALUES (1, 1, '1', '1098lv', '2016-05-01 18:00:00.000000');
INSERT INTO `klacht` VALUES (2, 2, '2', '1999bb', '2021-05-30 18:31:39.044663');
INSERT INTO `klacht` VALUES (3, 3, '3', '2000aa', '2021-05-30 18:31:45.981909');
INSERT INTO `klacht` VALUES (4, 3, '3', '1999bb', '2021-05-30 18:31:56.577659');

-- ----------------------------
-- Table structure for klachtsoort
-- ----------------------------
DROP TABLE IF EXISTS `klachtsoort`;
CREATE TABLE `klachtsoort`  (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `klachtsoort` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of klachtsoort
-- ----------------------------
INSERT INTO `klachtsoort` VALUES (1, 'milieu');
INSERT INTO `klachtsoort` VALUES (2, 'veiligheid');
INSERT INTO `klachtsoort` VALUES (3, 'geluid');

-- ----------------------------
-- Table structure for postcode
-- ----------------------------
DROP TABLE IF EXISTS `postcode`;
CREATE TABLE `postcode`  (
  `postcode` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`postcode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of postcode
-- ----------------------------
INSERT INTO `postcode` VALUES ('1098lv');
INSERT INTO `postcode` VALUES ('1098lx');
INSERT INTO `postcode` VALUES ('1098xx');
INSERT INTO `postcode` VALUES ('1099tt');
INSERT INTO `postcode` VALUES ('1999bb');
INSERT INTO `postcode` VALUES ('2000aa');

SET FOREIGN_KEY_CHECKS = 1;
