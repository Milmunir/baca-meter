/*
 Navicat Premium Data Transfer

 Source Server         : PDAM SQL
 Source Server Type    : MySQL
 Source Server Version : 100132 (10.1.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : sidoarjo

 Target Server Type    : MySQL
 Target Server Version : 100132 (10.1.32-MariaDB)
 File Encoding         : 65001

 Date: 01/11/2024 13:13:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for jadwalbaca
-- ----------------------------
DROP TABLE IF EXISTS `jadwalbaca`;
CREATE TABLE `jadwalbaca`  (
  `bulan` int NOT NULL DEFAULT 0,
  `tahun` int NOT NULL DEFAULT 0,
  `harike` tinyint NOT NULL DEFAULT 0,
  `tanggal` date NULL DEFAULT NULL,
  PRIMARY KEY (`bulan`, `tahun`, `harike`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jadwalbaca
-- ----------------------------
INSERT INTO `jadwalbaca` VALUES (10, 2024, 9, '2024-10-09');
INSERT INTO `jadwalbaca` VALUES (10, 2024, 10, '2024-10-10');
INSERT INTO `jadwalbaca` VALUES (10, 2024, 11, '2024-10-11');
INSERT INTO `jadwalbaca` VALUES (10, 2024, 12, '2024-10-12');
INSERT INTO `jadwalbaca` VALUES (10, 2024, 13, '2024-10-13');
INSERT INTO `jadwalbaca` VALUES (10, 2024, 14, '2024-10-14');
INSERT INTO `jadwalbaca` VALUES (10, 2024, 15, '2024-10-15');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2019_08_19_000000_create_failed_jobs_table', 1);

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan`  (
  `nosambungan` varchar(18) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idpelanggan` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nopelanggan` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `noalamat` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nourut` int NULL DEFAULT 0,
  `idwilayah` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `idjalan` int NULL DEFAULT 0,
  `idtarif` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tglmasuk` datetime NULL DEFAULT NULL,
  `cabut` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `dmeter` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pa` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telp` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hp` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ktp` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bank` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `aktif` tinyint(1) NULL DEFAULT 1,
  `merkmeter` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nometer` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meterzoning` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `retkebersihan` int NULL DEFAULT 0,
  `Long` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Lat` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Altitude` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Range` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Tilt` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Heading` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `LongCoordinate` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `LatCoordinate` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Desa` varchar(75) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Kecamatan` varchar(75) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Program` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `idzoning` int NULL DEFAULT 0,
  `PLN` int UNSIGNED NULL DEFAULT 0,
  `Umbulan2` tinyint UNSIGNED NOT NULL DEFAULT 0,
  `idpembaca` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `temp` int NULL DEFAULT 0,
  `idtarif_temp` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cmr` tinyint UNSIGNED NOT NULL DEFAULT 0,
  `tglperingatan` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tglbaca` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jadwalperingatan` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jadwalbaca` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nosambungan_temp` varchar(18) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cashback` int NULL DEFAULT 0,
  `tglmeter` datetime NULL DEFAULT NULL,
  `sumberair` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `umur_wm` int NULL DEFAULT 0,
  `tglgm` datetime NULL DEFAULT NULL,
  `urutbaca` tinyint NULL DEFAULT 0,
  `minim_pakai` tinyint NULL DEFAULT 0,
  `minim_durasi` tinyint NULL DEFAULT 0,
  `segelmeter` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `noregistrasi` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`nosambungan`) USING BTREE,
  INDEX `idpelanggan`(`idpelanggan`) USING BTREE,
  INDEX `idwilayah`(`idwilayah`) USING BTREE,
  INDEX `idjalan`(`idjalan`) USING BTREE,
  INDEX `idtarif`(`idtarif`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('04/IV/78/103', '19', '12345670', 'Sari Dewi', 'Jalan Diponegoro', '21', 103, 'IV', 75, '4', NULL, NULL, NULL, NULL, NULL, '081234567808', '1234567890123456', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.735264', '-7.484932', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '10', 0, NULL, 0, '2024-11-28 00:00:00', '2024-10-15 00:00:00', '2024-11-04 00:00:00', '2024-10-15 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 15, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('02/II/28/53', '17', '89012346', 'Qori Setiawan', 'Jalan Sudirman', '67', 53, 'II', 25, '2', NULL, NULL, NULL, NULL, NULL, '081234567806', '8901234567890123', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.733204', '-7.480897', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '8', 0, NULL, 0, '2024-11-26 00:00:00', '2024-10-11 00:00:00', '2024-11-02 00:00:00', '2024-10-11 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 11, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('03/III/53/78', '18', '90123457', 'Rina Wulandari', 'Jalan Gatot Subroto', '89', 78, 'III', 50, '3', NULL, NULL, NULL, NULL, NULL, '081234567807', '9012345678901234', NULL, NULL, 1, NULL, NULL, NULL, 0, '111', '-7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '1', 0, NULL, 0, '2024-11-27 00:00:00', '2024-10-13 00:00:00', '2024-11-03 00:00:00', '2024-10-13 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 13, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('05/V/12/22', '15', '67890124', 'Oka Puspita', 'Jalan Imam Bonjol', '12', 22, 'V', 10, '5', NULL, NULL, NULL, NULL, NULL, '081234567804', '6789012345678901', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.731144', '-7.477080', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '7', 0, NULL, 0, '2024-11-24 00:00:00', '2024-10-11 00:00:00', '2024-10-31 00:00:00', '2024-10-11 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 11, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('01/I/4/5', '16', '78901235', 'Putu Wijaya', 'Jalan Merdeka', '45', 5, 'I', 1, '1', NULL, NULL, NULL, NULL, NULL, '081234567805', '7890123456789012', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.732174', '-7.478948', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '7', 0, NULL, 0, '2024-11-25 00:00:00', '2024-10-10 00:00:00', '2024-11-01 00:00:00', '2024-10-10 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 10, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('03/III/52/77', '13', '45678902', 'Maya Anggraini', 'Jalan Gatot Subroto', '76', 77, 'III', 50, '3', NULL, NULL, NULL, NULL, NULL, '081234567802', '4567890123456789', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.729084', '-7.473564', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '3', 0, NULL, 0, '2024-11-22 00:00:00', '2024-10-11 00:00:00', '2024-10-29 00:00:00', '2024-10-11 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 11, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('04/IV/77/102', '14', '56789013', 'Nita Sari', 'Jalan Diponegoro', '98', 102, 'IV', 75, '4', NULL, NULL, NULL, NULL, NULL, '081234567803', '5678901234567890', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.730114', '-7.475292', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '2', 0, NULL, 0, '2024-11-23 00:00:00', '2024-10-09 00:00:00', '2024-10-30 00:00:00', '2024-10-09 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 9, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('01/I/3/4', '11', '23456780', 'Kiki Andika', 'Jalan Merdeka', '32', 4, 'I', 1, '1', NULL, NULL, NULL, NULL, NULL, '081234567800', '2345678901234567', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.727034', '-7.470100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '6', 0, NULL, 0, '2024-11-20 00:00:00', '2024-10-15 00:00:00', '2024-10-27 00:00:00', '2024-10-15 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 15, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('02/II/27/52', '12', '34567891', 'Lina Kartini', 'Jalan Sudirman', '54', 52, 'II', 25, '2', NULL, NULL, NULL, NULL, NULL, '081234567801', '3456789012345678', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.728054', '-7.471889', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '6', 0, NULL, 0, '2024-11-21 00:00:00', '2024-10-14 00:00:00', '2024-10-28 00:00:00', '2024-10-14 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 14, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('04/IV/76/101', '9', '90123456', 'Indra Kusuma', 'Jalan Diponegoro', '89', 101, 'IV', 75, '4', NULL, NULL, NULL, NULL, NULL, '081234567898', '9012345678901234', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.725217', '-7.466894', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '5', 0, NULL, 0, '2024-11-18 00:00:00', '2024-10-13 00:00:00', '2024-10-25 00:00:00', '2024-10-13 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 13, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('05/V/11/21', '10', '12345679', 'Joko Susilo', 'Jalan Imam Bonjol', '10', 21, 'V', 10, '5', NULL, NULL, NULL, NULL, NULL, '081234567899', '1234567890123456', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.726124', '-7.468392', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '10', 0, NULL, 0, '2024-11-19 00:00:00', '2024-10-11 00:00:00', '2024-10-26 00:00:00', '2024-10-11 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 11, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('02/II/26/51', '7', '78901234', 'Gita Sari', 'Jalan Sudirman', '45', 51, 'II', 25, '2', NULL, NULL, NULL, NULL, NULL, '081234567896', '7890123456789012', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.723541', '-7.462364', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '1', 0, NULL, 0, '2024-11-16 00:00:00', '2024-10-15 00:00:00', '2024-10-23 00:00:00', '2024-10-15 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 15, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('03/III/51/76', '8', '89012345', 'Hendra Wijaya', 'Jalan Gatot Subroto', '67', 76, 'III', 50, '3', NULL, NULL, NULL, NULL, NULL, '081234567897', '8901234567890123', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.724392', '-7.464587', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '10', 0, NULL, 0, '2024-11-17 00:00:00', '2024-10-10 00:00:00', '2024-10-24 00:00:00', '2024-10-10 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 10, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('05/V/10/20', '5', '56789012', 'Eka Purnama', 'Jalan Imam Bonjol', '90', 20, 'V', 10, '5', NULL, NULL, NULL, NULL, NULL, '081234567894', '5678901234567890', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.721833', '-7.459132', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '10', 0, NULL, 0, '2024-11-14 00:00:00', '2024-10-13 00:00:00', '2024-10-21 00:00:00', '2024-10-13 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 13, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('01/I/2/3', '6', '67890123', 'Fajar Putra', 'Jalan Merdeka', '23', 3, 'I', 1, '1', NULL, NULL, NULL, NULL, NULL, '081234567895', '6789012345678901', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.722678', '-7.460201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '9', 0, NULL, 0, '2024-11-15 00:00:00', '2024-10-14 00:00:00', '2024-10-22 00:00:00', '2024-10-14 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 14, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('03/III/50/75', '3', '34567890', 'Citra Maharani', 'Jalan Gatot Subroto', '56', 75, 'III', 50, '3', NULL, NULL, NULL, NULL, NULL, '081234567892', '3456789012345678', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.719824', '-7.454563', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '10', 0, NULL, 0, '2024-11-12 00:00:00', '2024-10-11 00:00:00', '2024-10-19 00:00:00', '2024-10-11 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 11, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('04/IV/75/100', '4', '45678901', 'Dian Kartika', 'Jalan Diponegoro', '78', 100, 'IV', 75, '4', NULL, NULL, NULL, NULL, NULL, '081234567893', '4567890123456789', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.720782', '-7.456849', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '9', 0, NULL, 0, '2024-11-13 00:00:00', '2024-10-12 00:00:00', '2024-10-20 00:00:00', '2024-10-12 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 12, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('01/I/1/1', '1', '12345678', 'Agus Santoso', 'Jalan Merdeka', '12', 1, 'I', 1, '1', NULL, NULL, NULL, NULL, NULL, '081234567890', '1234567890123456', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.717617', '-7.446838', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '4', 0, NULL, 0, '2024-11-10 00:00:00', '2024-10-09 00:00:00', '2024-10-17 00:00:00', '2024-10-09 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 9, 0, 0, NULL, '');
INSERT INTO `pelanggan` VALUES ('02/II/25/50', '2', '23456789', 'Budi Pratama', 'Jalan Sudirman', '34', 50, 'II', 25, '2', NULL, NULL, NULL, NULL, NULL, '081234567891', '2345678901234567', NULL, NULL, 1, NULL, NULL, NULL, 0, '112.718785', '-7.452541', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '4', 0, NULL, 0, '2024-11-11 00:00:00', '2024-10-10 00:00:00', '2024-10-18 00:00:00', '2024-10-10 00:00:00', NULL, 0, NULL, NULL, 0, NULL, 10, 0, 0, NULL, '');

-- ----------------------------
-- Table structure for pembacameter
-- ----------------------------
DROP TABLE IF EXISTS `pembacameter`;
CREATE TABLE `pembacameter`  (
  `id` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telp` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `idpembacameter` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pembacameter
-- ----------------------------
INSERT INTO `pembacameter` VALUES ('1', 'Adi Putra', 'Jl. Kenanga No. 10, Jakarta', '081234567890', NULL, '1');
INSERT INTO `pembacameter` VALUES ('2', 'Budi Santoso', 'Jl. Melati No. 22, Bandung', '081234567891', NULL, '2');
INSERT INTO `pembacameter` VALUES ('3', 'Citra Dewi', 'Jl. Mawar No. 5, Surabaya', '081234567892', NULL, '3');
INSERT INTO `pembacameter` VALUES ('4', 'Dian Puspita', 'Jl. Dahlia No. 8, Yogyakarta', '081234567893', NULL, '4');
INSERT INTO `pembacameter` VALUES ('5', 'Eka Prasetyo', 'Jl. Anggrek No. 15, Medan', '081234567894', NULL, '5');
INSERT INTO `pembacameter` VALUES ('6', 'Fajar Setiawan', 'Jl. Seruni No. 3, Semarang', '081234567895', NULL, '6');
INSERT INTO `pembacameter` VALUES ('7', 'Gita Rahma', 'Jl. Bougenville No. 7, Bali', '081234567896', NULL, '7');
INSERT INTO `pembacameter` VALUES ('8', 'Hendra Wijaya', 'Jl. Teratai No. 19, Makassar', '081234567897', NULL, '8');
INSERT INTO `pembacameter` VALUES ('9', 'Indra Kusuma', 'Jl. Kamboja No. 4, Palembang', '081234567898', NULL, '9');
INSERT INTO `pembacameter` VALUES ('10', 'Joko Susilo', 'Jl. Cempaka No. 12, Balikpapan', '081234567899', NULL, '10');

-- ----------------------------
-- Table structure for stanmeter
-- ----------------------------
DROP TABLE IF EXISTS `stanmeter`;
CREATE TABLE `stanmeter`  (
  `bulan` tinyint NOT NULL DEFAULT 0,
  `tahun` int NOT NULL DEFAULT 0,
  `nosambungan` varchar(18) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tglbaca` datetime NULL DEFAULT NULL,
  `idtarif` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `idwilayah` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `idjalan` int NULL DEFAULT 0,
  `stan` bigint NULL DEFAULT -1,
  `pakai` bigint NULL DEFAULT 0,
  `pakairata` bigint NULL DEFAULT 0,
  `korstanlalu` bigint NULL DEFAULT -1,
  `isaccepted` tinyint(1) NULL DEFAULT 0,
  `isunread` tinyint(1) NULL DEFAULT 0,
  `isread` tinyint(1) NULL DEFAULT 0,
  `isnormal` tinyint(1) NULL DEFAULT 0,
  `isback` tinyint(1) NULL DEFAULT 0,
  `iszero` tinyint(1) NULL DEFAULT 0,
  `isminim` tinyint(1) NULL DEFAULT 0,
  `isup` tinyint(1) NULL DEFAULT 0,
  `isdown` tinyint(1) NULL DEFAULT 0,
  `isuprata` tinyint(1) NULL DEFAULT 0,
  `isdownrata` tinyint(1) NULL DEFAULT 0,
  `isblok1` tinyint(1) NULL DEFAULT 0,
  `isblok2` tinyint(1) NULL DEFAULT 0,
  `isblok3` tinyint(1) NULL DEFAULT 0,
  `isblok4` tinyint(1) NULL DEFAULT 0,
  `idcatatan` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `iduser` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lon` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `path_foto` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tgllapangan` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`bulan`, `tahun`, `nosambungan`) USING BTREE,
  INDEX `isaccepted`(`isaccepted`) USING BTREE,
  INDEX `isread`(`isread`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of stanmeter
-- ----------------------------
INSERT INTO `stanmeter` VALUES (11, 2024, '05/V/13/23', '2024-10-10 00:00:00', '5', 'V', 10, -1, 1000, 10000, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', '1', '176.9922', '311.1123', 'C:xampp7.2	mpphpB137.tmp', 'public/img', NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '04/IV/78/103', '2024-10-28 00:00:00', '4', 'IV', 75, -1, 2700, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3', NULL, '-7.484932', '112.735264', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '03/III/53/78', '2024-10-21 00:00:00', '3', 'III', 50, -1, 3000, 6000, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2', '1', '-7.2974336', '112.7284736', 'public/img/N0lf7jn7biUHuYW5W3hTcgIOJDFf8ZxOmydFQxm8.png', 'public/img', NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '02/II/28/53', '2024-10-26 00:00:00', '2', 'II', 25, -1, 4200, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', NULL, '-7.480897', '112.733204', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '01/I/4/5', '2024-10-25 00:00:00', '1', 'I', 1, -1, 3900, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '16', NULL, '-7.478948', '112.732174', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '05/V/12/22', '2024-10-24 00:00:00', '5', 'V', 10, -1, 3400, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '15', NULL, '-7.477080', '112.731144', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '04/IV/77/102', '2024-10-23 00:00:00', '4', 'IV', 75, -1, 2600, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '14', NULL, '-7.475292', '112.730114', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '03/III/52/77', '2024-10-22 00:00:00', '3', 'III', 50, -1, 4100, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '13', NULL, '-7.473564', '112.729084', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '01/I/3/4', '2024-10-20 00:00:00', '1', 'I', 1, -1, 1900, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '11', NULL, '-7.470100', '112.727034', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '02/II/27/52', '2024-10-21 00:00:00', '2', 'II', 25, -1, 3200, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '12', NULL, '-7.471889', '112.728054', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '04/IV/76/101', '2024-10-18 00:00:00', '4', 'IV', 75, -1, 4300, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '9', NULL, '-7.466894', '112.725217', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '05/V/11/21', '2024-10-19 00:00:00', '5', 'V', 10, -1, 2800, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '10', NULL, '-7.468392', '112.726124', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '03/III/51/76', '2024-10-17 00:00:00', '3', 'III', 50, -1, 2200, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '8', NULL, '-7.464587', '112.724392', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '02/II/26/51', '2024-10-16 00:00:00', '2', 'II', 25, -1, 4100, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '7', NULL, '-7.462364', '112.723541', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '01/I/2/3', '2024-10-15 00:00:00', '1', 'I', 1, -1, 3200, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '6', NULL, '-7.460201', '112.722678', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '05/V/10/20', '2024-10-14 00:00:00', '5', 'V', 10, -1, 2500, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5', NULL, '-7.459132', '112.721833', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '04/IV/75/100', '2024-10-13 00:00:00', '4', 'IV', 75, -1, 4000, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4', NULL, '-7.456849', '112.720782', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '01/I/1/1', '2024-10-10 00:00:00', '1', 'I', 1, -1, 2000, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', NULL, '-7.446838', '112.717617', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '02/II/25/50', '2024-10-11 00:00:00', '2', 'II', 25, -1, 3000, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2', NULL, '-7.452541', '112.718785', NULL, NULL, NULL);
INSERT INTO `stanmeter` VALUES (11, 2024, '03/III/50/75', '2024-10-12 00:00:00', '3', 'III', 50, -1, 1500, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3', NULL, '-7.454563', '112.719824', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
