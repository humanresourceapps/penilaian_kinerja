/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : penilaian_karyawan

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-04-05 17:02:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tab_jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `tab_jabatan`;
CREATE TABLE `tab_jabatan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(50) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_jabatan
-- ----------------------------
INSERT INTO `tab_jabatan` VALUES ('1', 'Manager', null, null, null, null);
INSERT INTO `tab_jabatan` VALUES ('2', 'Supervisor', null, null, null, null);
INSERT INTO `tab_jabatan` VALUES ('3', 'operator call servis', null, null, null, null);
INSERT INTO `tab_jabatan` VALUES ('4', 'Supervisor', null, null, null, null);

-- ----------------------------
-- Table structure for `tab_kinerja`
-- ----------------------------
DROP TABLE IF EXISTS `tab_kinerja`;
CREATE TABLE `tab_kinerja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(10) DEFAULT NULL,
  `periode_penilaian_from` date DEFAULT NULL,
  `priode_penilaian_to` date DEFAULT NULL,
  `target` int(10) DEFAULT NULL,
  `realisasi` int(10) DEFAULT NULL,
  `keterangan` text,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL,
  `user_delete` varchar(50) DEFAULT NULL,
  `date_delete` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_kinerja
-- ----------------------------
INSERT INTO `tab_kinerja` VALUES ('4', '1234', '2015-03-10', '2016-03-10', '10', '100', 'pegawai bagus', 'aan', '2016-04-04 19:25:52', 'abdulgopar', '2016-04-04 20:10:31', '', '');
INSERT INTO `tab_kinerja` VALUES ('5', '1234', '2015-04-20', '2016-04-20', '10', '100', 'pegawai bagus', 'aan', '2016-04-04 20:07:32', '', '', '', '');

-- ----------------------------
-- Table structure for `tab_komponen_penilaian`
-- ----------------------------
DROP TABLE IF EXISTS `tab_komponen_penilaian`;
CREATE TABLE `tab_komponen_penilaian` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_aspek_penilaian` varchar(50) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL,
  `user_delete` varchar(50) DEFAULT NULL,
  `date_delete` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_komponen_penilaian
-- ----------------------------

-- ----------------------------
-- Table structure for `tab_pegawai`
-- ----------------------------
DROP TABLE IF EXISTS `tab_pegawai`;
CREATE TABLE `tab_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `gender` text,
  `alamat` text,
  `id_jabatan` int(11) DEFAULT NULL,
  `email` text,
  `no_telp` text,
  `data_available` varchar(5) DEFAULT NULL,
  `user_insert` varchar(255) DEFAULT NULL,
  `date_insert` varchar(255) DEFAULT NULL,
  `user_update` varchar(255) DEFAULT NULL,
  `date_update` varchar(255) DEFAULT NULL,
  `user_delete` varchar(255) DEFAULT NULL,
  `date_delete` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_pegawai
-- ----------------------------
INSERT INTO `tab_pegawai` VALUES ('1', 'Okki Setyawan', '2016-01-20', 'Jakarta', '1993-10-01', 'L', 'kp.rawa badung', '1', 'okkisetyawan@gmail.com', '089610595064', 'Y', 'okki', '2016-04-04 17:46:10', '', '', '', '');
INSERT INTO `tab_pegawai` VALUES ('2', 'andi purtomo', '2015-02-09', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `tab_pegawai` VALUES ('7', 'andipurnomo', '2015-08-10', 'jawa barat', '1990-08-20', 'L', 'JL.Rawa badak iv no.26', '2', 'andipurnomo@gmail.com', '083878941489', 'y', 'abdulgopar', '2016-04-04 18:11:54', 'reni', '', '', '');

-- ----------------------------
-- Table structure for `tab_user`
-- ----------------------------
DROP TABLE IF EXISTS `tab_user`;
CREATE TABLE `tab_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(3) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL,
  `user_delete` varchar(50) DEFAULT NULL,
  `date_delete` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_user
-- ----------------------------
INSERT INTO `tab_user` VALUES ('1', '1', 'majid', '0cc175b9c0f1b6a831c399e269772661', '1', null, null, null, null, null, null);
