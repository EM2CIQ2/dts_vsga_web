/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : penjualanbarang

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-11-13 15:47:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `KodeBarang` int(6) NOT NULL,
  `NamaBarang` varchar(25) NOT NULL DEFAULT '',
  `HargaBarang` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`KodeBarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('1', 'Pensil 2B Edit', '1500');
INSERT INTO `barang` VALUES ('3', 'Pensil Lagi', '5000');

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `NoPelanggan` int(6) NOT NULL,
  `NamaPelanggan` varchar(25) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  PRIMARY KEY (`NoPelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('1', 'unero', 'Unero');
INSERT INTO `pelanggan` VALUES ('2', 'Ardan', 'Jalan Sumpil 12');

-- ----------------------------
-- Table structure for penjualan
-- ----------------------------
DROP TABLE IF EXISTS `penjualan`;
CREATE TABLE `penjualan` (
  `faktur` int(6) NOT NULL,
  `NoPelanggan` int(6) NOT NULL,
  `TanggalPenjualan` varchar(25) NOT NULL,
  PRIMARY KEY (`faktur`),
  KEY `Pelanggan` (`NoPelanggan`),
  CONSTRAINT `Pelanggan` FOREIGN KEY (`NoPelanggan`) REFERENCES `pelanggan` (`NoPelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of penjualan
-- ----------------------------
INSERT INTO `penjualan` VALUES ('1', '2', '2020-11-09');
INSERT INTO `penjualan` VALUES ('3', '1', '2020-11-10');
