/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : kbb

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2012-05-01 12:57:40
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('9', 'yugi', 'yugi', 'yugi', 'Operator');
INSERT INTO `tb_admin` VALUES ('10', 'rizka', 'rizka', 'rizka', 'Operator');
INSERT INTO `tb_admin` VALUES ('19', 'irwan', 'irwan', '12324', 'Administrator');

-- ----------------------------
-- Table structure for `tb_bidang_usaha`
-- ----------------------------
DROP TABLE IF EXISTS `tb_bidang_usaha`;
CREATE TABLE `tb_bidang_usaha` (
  `bid_idx` int(5) NOT NULL AUTO_INCREMENT,
  `bid_name` varchar(64) NOT NULL,
  PRIMARY KEY (`bid_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_bidang_usaha
-- ----------------------------
INSERT INTO `tb_bidang_usaha` VALUES ('1', 'Toko Keramik');
INSERT INTO `tb_bidang_usaha` VALUES ('2', 'Handphone');
INSERT INTO `tb_bidang_usaha` VALUES ('3', 'Peralatan Rumah Tangga');
INSERT INTO `tb_bidang_usaha` VALUES ('4', 'Jasa Angkutan');
INSERT INTO `tb_bidang_usaha` VALUES ('5', 'Produksi Pupuk');
INSERT INTO `tb_bidang_usaha` VALUES ('6', 'Alat Kesehatan');
INSERT INTO `tb_bidang_usaha` VALUES ('7', 'Bahan Bangunan');
INSERT INTO `tb_bidang_usaha` VALUES ('8', 'Minimarket');
INSERT INTO `tb_bidang_usaha` VALUES ('9', 'Sparepart');
INSERT INTO `tb_bidang_usaha` VALUES ('10', 'Jasa Konsultasi Bisnis Management');
INSERT INTO `tb_bidang_usaha` VALUES ('11', 'Trading Perhiasan');
INSERT INTO `tb_bidang_usaha` VALUES ('12', 'Expedisi');
INSERT INTO `tb_bidang_usaha` VALUES ('13', 'Furniture & interior');
INSERT INTO `tb_bidang_usaha` VALUES ('14', 'Desain & Percetakan');
INSERT INTO `tb_bidang_usaha` VALUES ('15', 'Showroom Mobil');
INSERT INTO `tb_bidang_usaha` VALUES ('16', 'Restoran');
INSERT INTO `tb_bidang_usaha` VALUES ('17', 'Dealer motor yamaha');

-- ----------------------------
-- Table structure for `tb_cabang`
-- ----------------------------
DROP TABLE IF EXISTS `tb_cabang`;
CREATE TABLE `tb_cabang` (
  `cab_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cab_code` int(11) NOT NULL,
  `cab_name` varchar(64) NOT NULL,
  PRIMARY KEY (`cab_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_cabang
-- ----------------------------
INSERT INTO `tb_cabang` VALUES ('1', '298', 'joyoboyo');
INSERT INTO `tb_cabang` VALUES ('2', '448', 'sukun');
INSERT INTO `tb_cabang` VALUES ('3', '88', 'darmo');
INSERT INTO `tb_cabang` VALUES ('4', '6750', 'rungkut mapan');
INSERT INTO `tb_cabang` VALUES ('5', '5110', 'rich palace');
INSERT INTO `tb_cabang` VALUES ('6', '407', 'muara karang');

-- ----------------------------
-- Table structure for `tb_call`
-- ----------------------------
DROP TABLE IF EXISTS `tb_call`;
CREATE TABLE `tb_call` (
  `call_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_idx` int(11) NOT NULL,
  `adm_id` int(11) NOT NULL,
  `adm_username` varchar(16) NOT NULL,
  `call_date` datetime NOT NULL,
  `call_status` varchar(32) NOT NULL,
  `call_kategori` varchar(32) NOT NULL,
  `call_cp_lain` text NOT NULL,
  `Call_telp_lain` int(11) NOT NULL,
  `call_keterangan` text NOT NULL,
  PRIMARY KEY (`call_idx`),
  KEY `tb_call_cus_idx` (`cus_idx`),
  CONSTRAINT `tb_call_cus_idx` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_call
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_customer`
-- ----------------------------
DROP TABLE IF EXISTS `tb_customer`;
CREATE TABLE `tb_customer` (
  `cus_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_corporate_id` varchar(10) NOT NULL,
  `cus_nama_perusahaan` varchar(64) NOT NULL,
  `cus_no_ktp` varchar(255) DEFAULT NULL,
  `cus_no_rekening` varchar(255) NOT NULL,
  `cus_bidang_usaha` varchar(255) DEFAULT NULL,
  `cus_alamat` text NOT NULL,
  `cus_cp` varchar(255) NOT NULL,
  `cus_kota` varchar(255) DEFAULT NULL,
  `cus_kodepos` varchar(255) DEFAULT NULL,
  `cus_telepon_kantor` varchar(255) DEFAULT NULL,
  `cus_telepon_rumah` varchar(255) DEFAULT NULL,
  `cus_handphone` varchar(255) DEFAULT NULL,
  `cus_no_fax` varchar(255) DEFAULT NULL,
  `cus_cabang` varchar(255) NOT NULL,
  `cus_kode_cabang` varchar(255) DEFAULT NULL,
  `cus_email` varchar(255) DEFAULT NULL,
  `cus_tanggal_input` date NOT NULL,
  `cus_admin_input` varchar(255) NOT NULL,
  PRIMARY KEY (`cus_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=54015 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES ('54007', 'IBSALIANOO', 'IBS', '6767', '6767676766', '1', 'GJGJGJHGGJH', 'GJJKJHJHJKH', '1', '21212', '4343433', '454454', '434434', '544545', '1', '6566', 'A@B.COM', '2012-04-22', 'irwan');
INSERT INTO `tb_customer` VALUES ('54008', 'IBSKULDKDK', 'JKJKJKJKKJ', '989088989', '8989898989', '1', 'HJHJHJHJ', 'HJJHJHJH', '1', '99898', '99898', '98989', '89898', '98989', '1', '8989', 'G@H.COM', '2012-04-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('54009', 'dsmfnsfdjs', 'hjhjhjhjhj', '898989', '8989899898', '1', 'iuiuiuiuiuiu', 'iuiuiuiui', '1', '98989', '9898', '9898', '9898', '98989', '1', '8989', 'hjhjh@h.com', '2012-04-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('54010', 'ibsjdkdjdj', 'kjkjkjkj', '89898989', '8989898989', '1', 'jkkjkjkj', 'kjkjkjkj', '10', '89898', '898989', '89898', '98989', '8989', '1', '8989', '', '2012-04-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('54011', 'adsadasdas', 'dsadsadsad', '3423424', '4234324245', '1', 'fgdfggdff', 'dgfhfghgf', '1', '42342', '32423', '4324324', '432432', '432432', '1', '4324', '', '2012-04-27', 'irwan');
INSERT INTO `tb_customer` VALUES ('54012', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', '423424', '4324242343', '1', 'fgdgfdgdg', 'dfgdgfdg', '1', '35353', '543534', '543534', '534535', '54353453', '1', '5345', '', '2012-04-29', 'irwan');
INSERT INTO `tb_customer` VALUES ('54013', 'bbbbbbbbbb', 'cccccccccccccccccc', '432423424242342', '4324242343', '1', 'fgdgdgdf', 'gdfgfdgdfg', '1', '35543', '543534543', '5435345', '5435345', '3543535', '1', '5435', '', '2012-04-29', 'irwan');
INSERT INTO `tb_customer` VALUES ('54014', 'cccccccccc', 'dddddddddddddd', '432423424', '3242342342', '1', 'fdgdfgfdg', 'fdgfdgfdg', '1', '35353', '5435345', '3453534', '5345345', '534534534', '1', '5435', '', '2012-04-29', 'irwan');

-- ----------------------------
-- Table structure for `tb_engineer`
-- ----------------------------
DROP TABLE IF EXISTS `tb_engineer`;
CREATE TABLE `tb_engineer` (
  `se_id` int(11) NOT NULL AUTO_INCREMENT,
  `se_nama` varchar(64) NOT NULL,
  `se_tgl_lahir` date NOT NULL,
  `se_alamat` text NOT NULL,
  `se_no_ktp` int(64) NOT NULL,
  `se_telepon_rumah` varchar(64) NOT NULL,
  `se_handphone` varchar(64) NOT NULL,
  PRIMARY KEY (`se_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_engineer
-- ----------------------------
INSERT INTO `tb_engineer` VALUES ('10', 'Irwan Subaya', '1988-12-26', 'Jl. Rawa Bunga VII No.28 Rt. 05/02 Pondok Kacang Barat Ciledug Tangerang Selatan', '1234567890', '021-7329765', '021-28763637');
INSERT INTO `tb_engineer` VALUES ('11', 'yugi', '1988-01-05', 'Jl. maju Mundur 3 X depan belakang kena', '12345', '021-73156354', '08567826536542');

-- ----------------------------
-- Table structure for `tb_kategori`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kategori`;
CREATE TABLE `tb_kategori` (
  `kat_idx` int(11) NOT NULL AUTO_INCREMENT,
  `kat_nama` text,
  PRIMARY KEY (`kat_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kategori
-- ----------------------------
INSERT INTO `tb_kategori` VALUES ('1', 'NN');
INSERT INTO `tb_kategori` VALUES ('2', 'Telp Tidak Di angkat');
INSERT INTO `tb_kategori` VALUES ('3', 'Telp Tidak Aktif');
INSERT INTO `tb_kategori` VALUES ('4', 'Nasabaha Sulit Ditemui');
INSERT INTO `tb_kategori` VALUES ('5', 'Pin Belum Diterima');

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
  `key_tanggal_input` date NOT NULL,
  PRIMARY KEY (`key_idx`),
  KEY `tb_key_cus_idx_fk` (`cus_idx`),
  KEY `tb_key_pkt_idx_fk` (`pkt_idx`),
  CONSTRAINT `tb_key_cus_idx_fk` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_key_pkt_idx_fk` FOREIGN KEY (`pkt_idx`) REFERENCES `tb_paket` (`pkt_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_key
-- ----------------------------
INSERT INTO `tb_key` VALUES ('1', '1', '54007', '121121', 'RTRTRTRT', '0000-00-00');
INSERT INTO `tb_key` VALUES ('18', '2', '54008', '23243', 'FDJFJSKJDKSJF', '0000-00-00');
INSERT INTO `tb_key` VALUES ('21', '3', '54009', '3123123', 'nbsnbnbvbnxcbn', '0000-00-00');
INSERT INTO `tb_key` VALUES ('22', '3', '54009', '3324234', 'smnmfnmds', '0000-00-00');
INSERT INTO `tb_key` VALUES ('23', '4', '54010', '323123', 'fdsfdsfdsf', '0000-00-00');
INSERT INTO `tb_key` VALUES ('24', '5', '54011', '3423423', 'fdgfdgdfg', '0000-00-00');

-- ----------------------------
-- Table structure for `tb_kota`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kota`;
CREATE TABLE `tb_kota` (
  `kota_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(255) NOT NULL,
  PRIMARY KEY (`kota_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kota
-- ----------------------------
INSERT INTO `tb_kota` VALUES ('1', 'Jakarta Selatan');
INSERT INTO `tb_kota` VALUES ('2', 'Jakarta Barat');
INSERT INTO `tb_kota` VALUES ('3', 'Jakarta Timur');
INSERT INTO `tb_kota` VALUES ('4', 'Jakarta Utara');
INSERT INTO `tb_kota` VALUES ('5', 'Jakarta  Pusat');
INSERT INTO `tb_kota` VALUES ('6', 'Tangerang');
INSERT INTO `tb_kota` VALUES ('7', 'Bekasi Selatan');
INSERT INTO `tb_kota` VALUES ('8', 'Bekasi Timur');
INSERT INTO `tb_kota` VALUES ('9', 'Bekasi Barat');
INSERT INTO `tb_kota` VALUES ('10', 'Karawang');
INSERT INTO `tb_kota` VALUES ('11', 'Bogor');
INSERT INTO `tb_kota` VALUES ('12', 'Cibinong');
INSERT INTO `tb_kota` VALUES ('13', 'Cikarang');
INSERT INTO `tb_kota` VALUES ('14', 'Cilegon');
INSERT INTO `tb_kota` VALUES ('15', 'Cibubur');

-- ----------------------------
-- Table structure for `tb_paket`
-- ----------------------------
DROP TABLE IF EXISTS `tb_paket`;
CREATE TABLE `tb_paket` (
  `pkt_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_idx` int(11) NOT NULL,
  `pkt_jenis` varchar(16) NOT NULL,
  `pkt_tipe` varchar(16) NOT NULL,
  `pkt_status` varchar(16) NOT NULL,
  `pkt_jumlah_key` smallint(6) NOT NULL DEFAULT '0',
  `pkt_tanggal_koneksi` date NOT NULL,
  `pkt_tanggal_terima` date NOT NULL,
  `pkt_jatuh_tempo` date NOT NULL,
  `pkt_tanggal_input` date NOT NULL,
  `pkt_admin_input` varchar(255) NOT NULL,
  PRIMARY KEY (`pkt_idx`),
  KEY `tb_paket_cus_idx_fk` (`cus_idx`),
  CONSTRAINT `tb_paket_cus_idx_fk` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_paket
-- ----------------------------
INSERT INTO `tb_paket` VALUES ('1', '54007', 'multi_otorisasi', 'gold_payroll', 'Virtual Account,', '1', '2012-04-03', '2012-04-04', '2012-04-07', '0000-00-00', '');
INSERT INTO `tb_paket` VALUES ('2', '54008', 'multi_otorisasi', 'platinum', 'amplop', '1', '2012-04-02', '2012-04-12', '2012-04-15', '2026-04-12', 'irwan');
INSERT INTO `tb_paket` VALUES ('3', '54009', 'multi_otorisasi', 'platinum', 'new', '2', '2012-04-03', '2012-04-26', '2012-04-29', '0000-00-00', 'irwan');
INSERT INTO `tb_paket` VALUES ('4', '54010', 'multi_otorisasi', 'gold_payroll', 'amplop', '1', '2012-04-11', '2012-04-13', '2012-04-16', '2026-04-12', 'irwan');
INSERT INTO `tb_paket` VALUES ('5', '54011', 'single_otorisasi', 'gold', 'new', '1', '2012-04-02', '2012-04-03', '2012-04-06', '2027-04-12', 'irwan');

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
  `sched__visit` text,
  `sched_alamat_kirim` text,
  `sched_agenda_kunjungan` text NOT NULL,
  PRIMARY KEY (`sched_idx`),
  KEY `pkt_idx` (`pkt_idx`),
  KEY `cus_idx` (`cus_idx`),
  CONSTRAINT `cus_idx` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pkt_idx` FOREIGN KEY (`pkt_idx`) REFERENCES `tb_paket` (`pkt_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_schedule
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_status`
-- ----------------------------
DROP TABLE IF EXISTS `tb_status`;
CREATE TABLE `tb_status` (
  `stat_idx` int(11) NOT NULL AUTO_INCREMENT,
  `stat_nama` varchar(255) NOT NULL,
  `stat_tahap` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`stat_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_status
-- ----------------------------
INSERT INTO `tb_status` VALUES ('1', 'Follow Up', '1');
INSERT INTO `tb_status` VALUES ('2', 'Active', '1');

-- ----------------------------
-- Table structure for `tb_status_akhir`
-- ----------------------------
DROP TABLE IF EXISTS `tb_status_akhir`;
CREATE TABLE `tb_status_akhir` (
  `status_idx` int(11) NOT NULL DEFAULT '0',
  `status_nama` text,
  PRIMARY KEY (`status_idx`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_status_akhir
-- ----------------------------
INSERT INTO `tb_status_akhir` VALUES ('1', 'Done');
INSERT INTO `tb_status_akhir` VALUES ('2', 'Reschedule');
INSERT INTO `tb_status_akhir` VALUES ('3', 'Retur');
INSERT INTO `tb_status_akhir` VALUES ('4', 'Pending');

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

-- ----------------------------
-- Table structure for `tb_visit_drop`
-- ----------------------------
DROP TABLE IF EXISTS `tb_visit_drop`;
CREATE TABLE `tb_visit_drop` (
  `visit_idx` int(11) NOT NULL AUTO_INCREMENT,
  `visit_nama` varchar(255) NOT NULL,
  PRIMARY KEY (`visit_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_visit_drop
-- ----------------------------
INSERT INTO `tb_visit_drop` VALUES ('1', 'New');
INSERT INTO `tb_visit_drop` VALUES ('2', 'Adhoc');
INSERT INTO `tb_visit_drop` VALUES ('3', 'Upgrade');
