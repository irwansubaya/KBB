/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : kbb

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2012-05-03 12:14:12
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
  `cab_code` text NOT NULL,
  `cab_name` varchar(64) NOT NULL,
  PRIMARY KEY (`cab_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_cabang
-- ----------------------------
INSERT INTO `tb_cabang` VALUES ('1', '0298', 'joyoboyo');
INSERT INTO `tb_cabang` VALUES ('2', '0448', 'sukun');
INSERT INTO `tb_cabang` VALUES ('3', '1188', 'darmo');
INSERT INTO `tb_cabang` VALUES ('4', '1111', 'rungkut mapan');
INSERT INTO `tb_cabang` VALUES ('5', '5110', 'rich palace');
INSERT INTO `tb_cabang` VALUES ('6', '1323', 'muara karang');

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
) ENGINE=InnoDB AUTO_INCREMENT=54043 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES ('54039', 'IBSAAAAAAA', 'BBBBBBBBBBaadsadfdsfsfdfsd', '787327183', '7878787878', 'Toko Keramik', 'HJHJJHJHJ', 'HJHJHJHJ', 'Jakarta Selatan', '87878', '878787878', '787878', '78787', '87878', 'joyoboyo', '0298', 'A@JADIN.COM', '2012-05-02', 'irwan');
INSERT INTO `tb_customer` VALUES ('54040', 'IBSAAAABBB', 'DKAJKDAJSKAKD', '88989898', '9898989898', 'Toko Keramik', 'KKJJKJK', 'JKJKJKJK', 'Jakarta Selatan', '32131', '7878787', '87878', '7878', '7878', 'joyoboyo', '0298', 'JKJKJK@JKJK.COM', '2012-05-02', 'irwan');
INSERT INTO `tb_customer` VALUES ('54041', 'IBSCCCCDCD', 'KIKI', '90909009', '9090909090', 'Toko Keramik', 'JJKJDKJAKJDSAJJ', 'KJKJKJDKAJKDSJAKDJK', 'Jakarta Selatan', '32132', '89898989', '898989', '89898', '9898', 'joyoboyo', '0298', 'JIK@S.COM', '2012-05-03', 'irwan');
INSERT INTO `tb_customer` VALUES ('54042', 'IBSDADADAD', 'AAAAAAAAAAAAAA', '9090909090909', '9090909090', 'Toko Keramik', 'HHJHJHJHJHJ', 'HJHJHJHJ', 'Jakarta Selatan', '89989', '3213123213', '8989898989', '313213123', '9898989', 'sukun', '0448', '', '2012-05-03', 'irwan');

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
  `kat_status` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`kat_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kategori
-- ----------------------------
INSERT INTO `tb_kategori` VALUES ('6', 'Dijadwalkan', 'Active');
INSERT INTO `tb_kategori` VALUES ('7', 'Belum Dijadwalkan', 'Follow Up');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_key
-- ----------------------------
INSERT INTO `tb_key` VALUES ('37', '9', '54039', '123455', 'fsdfsfsdfsf', '0000-00-00');
INSERT INTO `tb_key` VALUES ('38', '9', '54039', '3231231312', 'sfdfsdfdsf', '0000-00-00');
INSERT INTO `tb_key` VALUES ('39', '10', '54040', '3123121312', 'SDFSDFSDFSDF', '0000-00-00');
INSERT INTO `tb_key` VALUES ('44', '11', '54041', '2313213131', 'DSFSFDFSDFSDFDSFFSDFS', '0000-00-00');
INSERT INTO `tb_key` VALUES ('45', '11', '54041', '2313123131', 'SDFDFSDFSDFDSF', '0000-00-00');
INSERT INTO `tb_key` VALUES ('46', '12', '54042', '3213123131', 'RWRWRWERWERWE', '0000-00-00');
INSERT INTO `tb_key` VALUES ('47', '12', '54042', '2423432432', 'VDFGFDGDFGG', '0000-00-00');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_paket
-- ----------------------------
INSERT INTO `tb_paket` VALUES ('9', '54039', 'multi_otorisasi', 'gold_payroll', 'upgrade', '2', '2012-04-03', '2012-05-03', '2012-05-08', '2002-05-12', 'irwan');
INSERT INTO `tb_paket` VALUES ('10', '54040', 'multi_otorisasi', 'gold_payroll', 'upgrade', '1', '2012-05-01', '2012-05-02', '2012-05-07', '2002-05-12', 'irwan');
INSERT INTO `tb_paket` VALUES ('11', '54041', 'multi_otorisasi', 'gold_payroll', 'upgrade', '2', '2012-05-03', '2012-05-11', '2012-05-16', '2003-05-12', 'irwan');
INSERT INTO `tb_paket` VALUES ('12', '54042', 'single_otorisasi', 'gold', 'upgrade', '2', '2012-05-01', '2012-05-04', '2012-05-09', '2003-05-12', 'irwan');

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
