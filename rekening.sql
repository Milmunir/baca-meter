/*
 Navicat Premium Data Transfer

 Source Server         : PDAM SQL
 Source Server Type    : MySQL
 Source Server Version : 100132 (10.1.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : rekening

 Target Server Type    : MySQL
 Target Server Version : 100132 (10.1.32-MariaDB)
 File Encoding         : 65001

 Date: 01/11/2024 13:14:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for catatanmeter
-- ----------------------------
DROP TABLE IF EXISTS `catatanmeter`;
CREATE TABLE `catatanmeter`  (
  `idcatatan` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `keterangan` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idcatatan`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of catatanmeter
-- ----------------------------
INSERT INTO `catatanmeter` VALUES ('00', 'Normal');
INSERT INTO `catatanmeter` VALUES ('01', 'Tutup/Terkunci');
INSERT INTO `catatanmeter` VALUES ('02', 'Rumah Kosong');
INSERT INTO `catatanmeter` VALUES ('03', 'Ganti Meter');
INSERT INTO `catatanmeter` VALUES ('04', 'Buka Kembali');
INSERT INTO `catatanmeter` VALUES ('05', 'Cabut');
INSERT INTO `catatanmeter` VALUES ('06', 'Meter Macet');
INSERT INTO `catatanmeter` VALUES ('07', 'Meter Buram');
INSERT INTO `catatanmeter` VALUES ('08', 'Segel Meter Terbuka');
INSERT INTO `catatanmeter` VALUES ('09', 'TKA/Target O?');
INSERT INTO `catatanmeter` VALUES ('10', 'Salah Baca');
INSERT INTO `catatanmeter` VALUES ('11', 'Salah Entry Data');
INSERT INTO `catatanmeter` VALUES ('12', 'Usulan Ganti Meter');
INSERT INTO `catatanmeter` VALUES ('13', 'Kembali Kecil');
INSERT INTO `catatanmeter` VALUES ('14', 'Pasang Baru');
INSERT INTO `catatanmeter` VALUES ('15', 'Stan Meter M?');
INSERT INTO `catatanmeter` VALUES ('16', 'Meter Rusak');

-- ----------------------------
-- Table structure for jalan
-- ----------------------------
DROP TABLE IF EXISTS `jalan`;
CREATE TABLE `jalan`  (
  `idjalan` int NOT NULL DEFAULT 0,
  `idwilayah` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namajalan` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jumlah` int NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `idcabang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`idjalan`, `idwilayah`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jalan
-- ----------------------------
INSERT INTO `jalan` VALUES (65, 'X', 'Jalan Sisingamangaraja', 95, 'Jalan Sisingamangaraja', '02');
INSERT INTO `jalan` VALUES (12, 'IX', 'Jalan Pahlawan', 130, 'Jalan Pahlawan', '01');
INSERT INTO `jalan` VALUES (99, 'VII', 'Jalan MH Thamrin', 105, 'Jalan MH Thamrin', '01');
INSERT INTO `jalan` VALUES (45, 'VII', 'Jalan Ahmad Yani', 190, 'Jalan Ahmad Yani', '02');
INSERT INTO `jalan` VALUES (90, 'VI', 'Jalan Thamrin', 60, 'Jalan Thamrin', '04');
INSERT INTO `jalan` VALUES (10, 'V', 'Jalan Imam Bonjol', 80, 'Jalan Imam Bonjol', '05');
INSERT INTO `jalan` VALUES (75, 'IV', 'Jalan Diponegoro', 175, 'Jalan Diponegoro', '04');
INSERT INTO `jalan` VALUES (50, 'III', 'Jalan Gatot Subroto', 120, 'Jalan Gatot Subroto', '02');
INSERT INTO `jalan` VALUES (25, 'II', 'Jalan Sudirman', 150, 'Jalan Sudirman', '03');
INSERT INTO `jalan` VALUES (1, 'I', 'Jalan Merdeka', 100, 'Jalan Merdeka', '01');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `iduser` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namauser` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `password` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '1111111111',
  `password2` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password3` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `level` tinyint(1) NULL DEFAULT 0,
  `idgroup` tinyint(1) NULL DEFAULT 0,
  `keterangan` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `foto` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `idpembacameter` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`iduser`, `namauser`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'herman', '11111111', '11111111', '11111111', 0, 0, NULL, NULL, '1');
INSERT INTO `user` VALUES ('10', 'joko', '12345678', '12345678', '12345678', 0, 0, NULL, NULL, '10');

SET FOREIGN_KEY_CHECKS = 1;
