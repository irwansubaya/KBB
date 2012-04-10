/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : db_kbb

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2012-04-02 21:59:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `adm_id` int(5) NOT NULL AUTO_INCREMENT,
  `adm_name` varchar(64) NOT NULL,
  `adm_username` varchar(16) NOT NULL,
  `adm_password` varchar(32) NOT NULL,
  `adm_status` varchar(32) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', 'irwan', 'irwan subaya', 'irwan', 'adminstrator');
INSERT INTO `tb_admin` VALUES ('2', 'yugi', 'yugi', 'yugi', 'adminstrator');

-- ----------------------------
-- Table structure for `tb_call`
-- ----------------------------
DROP TABLE IF EXISTS `tb_call`;
CREATE TABLE `tb_call` (
  `call_idx` int(11) NOT NULL AUTO_INCREMENT,
  `adm_username` varchar(16) NOT NULL,
  `call_date` datetime NOT NULL,
  `call_keterangan` text NOT NULL,
  `call_kategori` varchar(32) NOT NULL,
  PRIMARY KEY (`call_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_call
-- ----------------------------
INSERT INTO `tb_call` VALUES ('1', 'yugi', '2012-04-02 16:16:33', 'pending', 'nasabah susah di hubungi');
INSERT INTO `tb_call` VALUES ('2', 'yugi', '2012-04-10 16:17:03', 'dsad', 'dsadasdasds');

-- ----------------------------
-- Table structure for `tb_customer`
-- ----------------------------
DROP TABLE IF EXISTS `tb_customer`;
CREATE TABLE `tb_customer` (
  `cus_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_nama_perusahaan` varchar(64) NOT NULL,
  `cus_corporate_id` varchar(255) NOT NULL,
  `cus_bidang_usaha` varchar(255) DEFAULT NULL,
  `cus_no_rekening` varchar(255) NOT NULL,
  `cus_no_ktp` varchar(255) NOT NULL,
  `cus_cp` varchar(255) NOT NULL,
  `cus_cabang` varchar(255) NOT NULL,
  `cus_wilayah` varchar(255) NOT NULL,
  `cus_email` varchar(255) DEFAULT NULL,
  `cus_alamat` text NOT NULL,
  `cus_kota` varchar(255) DEFAULT NULL,
  `cus_negara` varchar(255) DEFAULT NULL,
  `cus_kodepos` varchar(255) DEFAULT NULL,
  `cus_telepon_kantor` varchar(255) DEFAULT NULL,
  `cus_telepon_rumah` varchar(255) DEFAULT NULL,
  `cus_handphone` varchar(255) DEFAULT NULL,
  `cus_no_fax` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cus_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES ('1', 'irwan', 'ibsirwa', 'rental', '1234567', '987656', 'irwan', 'kebun jeruk', 'jakarta barat', 'irwan@jadinpratama.com', 'jl. meruya ilir', 'kebun jeruk', 'indonesi', '872626', '989898', '98989', '9898', '9899');

-- ----------------------------
-- Table structure for `tb_engineer`
-- ----------------------------
DROP TABLE IF EXISTS `tb_engineer`;
CREATE TABLE `tb_engineer` (
  `se_id` int(11) NOT NULL AUTO_INCREMENT,
  `se_nama` varchar(64) NOT NULL,
  `se_alamat` text NOT NULL,
  `se_no_ktp` varchar(64) NOT NULL,
  `se_telepon_rumah` varchar(64) NOT NULL,
  `se_handphone` varchar(64) NOT NULL,
  PRIMARY KEY (`se_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_engineer
-- ----------------------------
INSERT INTO `tb_engineer` VALUES ('1', 'irwan', 'jljljl', '1638', '6876876', '6786');
INSERT INTO `tb_engineer` VALUES ('2', 'hjdhjashd', 'jjkds', 'jjhsjkdfh', 'hjkhjkhj', 'hkjhhkjh');
INSERT INTO `tb_engineer` VALUES ('3', 'ddsjhkj', 'hkjhkjhk', 'jhkjh', 'jkhkj', 'hjkhj');
INSERT INTO `tb_engineer` VALUES ('4', 'knk', 'kljkj', 'kjk', 'jk', 'jkjkjk');
INSERT INTO `tb_engineer` VALUES ('5', 'jk', 'jk', 'jk', 'jk', 'jk');
INSERT INTO `tb_engineer` VALUES ('6', 'kj', 'k', 'jk', 'jk', 'jk');
INSERT INTO `tb_engineer` VALUES ('7', 'kj', 'kj', 'kjkj', 'kj', 'kj');
INSERT INTO `tb_engineer` VALUES ('8', 'kj', 'k', 'kj', 'kj', 'kj');
INSERT INTO `tb_engineer` VALUES ('9', 'jk', 'jkj', 'kj', 'kjkj', 'k');
INSERT INTO `tb_engineer` VALUES ('10', 'jk', 'jk', 'jk', 'jk', 'jkjk');

-- ----------------------------
-- Table structure for `tb_key`
-- ----------------------------
DROP TABLE IF EXISTS `tb_key`;
CREATE TABLE `tb_key` (
  `key_idx` int(11) NOT NULL AUTO_INCREMENT,
  `pkt_idx` int(11) NOT NULL,
  `cus_idx` int(11) NOT NULL,
  `key_id` varchar(10) NOT NULL,
  `key_nama_user` varchar(64) NOT NULL,
  PRIMARY KEY (`key_idx`),
  KEY `tb_key_cus_idx_fk` (`cus_idx`),
  KEY `tb_key_pkt_idx_fk` (`pkt_idx`),
  CONSTRAINT `tb_key_cus_idx_fk` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON UPDATE CASCADE,
  CONSTRAINT `tb_key_pkt_idx_fk` FOREIGN KEY (`pkt_idx`) REFERENCES `tb_paket` (`pkt_idx`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_key
-- ----------------------------
INSERT INTO `tb_key` VALUES ('1', '1', '1', '123', 'sadasd');
INSERT INTO `tb_key` VALUES ('2', '1', '1', '2321312', 'dsadasdd');

-- ----------------------------
-- Table structure for `tb_paket`
-- ----------------------------
DROP TABLE IF EXISTS `tb_paket`;
CREATE TABLE `tb_paket` (
  `pkt_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_idx` int(11) NOT NULL,
  `pkt_jenis` varchar(16) NOT NULL,
  `pkt_tipe` varchar(16) NOT NULL,
  `pkt_fitur` varchar(16) NOT NULL,
  `pkt_jumlah_key` smallint(6) NOT NULL,
  `pkt_tanggal_koneksi` date NOT NULL,
  `pkt_tanggal_terima` date NOT NULL,
  `pkt_jatuh_tempo` date NOT NULL,
  PRIMARY KEY (`pkt_idx`),
  KEY `tb_paket_cus_idx_fk` (`cus_idx`),
  CONSTRAINT `tb_paket_cus_idx_fk` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_paket
-- ----------------------------
INSERT INTO `tb_paket` VALUES ('1', '1', 'gold payroll', 'single otorisi', 'VA', '3', '2012-04-02', '2012-04-02', '2012-04-02');

-- ----------------------------
-- Table structure for `tb_schedule`
-- ----------------------------
DROP TABLE IF EXISTS `tb_schedule`;
CREATE TABLE `tb_schedule` (
  `sched_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_idx` int(11) NOT NULL,
  `pkt_idx` int(11) NOT NULL,
  `sched_date` date DEFAULT NULL,
  `sched_time` time DEFAULT NULL,
  `sched_alamat_kirim` text,
  `sched_agenda_kunjungan` text NOT NULL,
  PRIMARY KEY (`sched_idx`),
  KEY `pkt_idx` (`pkt_idx`),
  KEY `cus_idx` (`cus_idx`),
  CONSTRAINT `cus_idx` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON UPDATE CASCADE,
  CONSTRAINT `pkt_idx` FOREIGN KEY (`pkt_idx`) REFERENCES `tb_paket` (`pkt_idx`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_schedule
-- ----------------------------
INSERT INTO `tb_schedule` VALUES ('1', '1', '1', '2012-04-02', '16:25:43', 'hsahdjshj', 'hdsajhdkjsahdkjahskjdh');

-- ----------------------------
-- Table structure for `tb_visit`
-- ----------------------------
DROP TABLE IF EXISTS `tb_visit`;
CREATE TABLE `tb_visit` (
  `vis_idx` int(11) NOT NULL AUTO_INCREMENT,
  `sched_idx` int(11) NOT NULL,
  `se_idx` int(11) NOT NULL,
  `cus_idx` int(11) NOT NULL,
  `pkt_idx` int(11) NOT NULL,
  `vis_status` varchar(16) NOT NULL,
  `vis_kunjungan_ke` smallint(6) NOT NULL,
  `vis_hasil_kunjungan` text,
  PRIMARY KEY (`vis_idx`),
  KEY `sched_idx` (`sched_idx`),
  KEY `se_idx` (`se_idx`),
  CONSTRAINT `sched_idx` FOREIGN KEY (`sched_idx`) REFERENCES `tb_schedule` (`sched_idx`) ON UPDATE CASCADE,
  CONSTRAINT `se_idx` FOREIGN KEY (`se_idx`) REFERENCES `tb_engineer` (`se_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_visit
-- ----------------------------
