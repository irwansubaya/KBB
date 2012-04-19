/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : kbb

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2012-04-19 15:42:38
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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES ('2', 'IBSALIANOO', 'Alianto', 'fsdfs', '1231313121', 'fdsffsdfsfdsfds', 'Jl. Komplek TSS Indah No.815 Blok B Jakarta', 'Alianto', '1', '', '32131', '323131', '2313123', '', 'Reg.Tanah Abang', '', 'A@d.com', '2012-04-15', 'irwan');
INSERT INTO `tb_customer` VALUES ('3', 'IBSPUNDIPT', 'Pundi Kalia Mandiri PT', '', '', 'Perdagangan Umum', 'Jl. Tarumanegara No.100A, Cirendeu Tangerang', 'Yoerly Hana G', 'Jakarta Timur', '15419', '', '021- 7470 2842', '', '', 'Cinere', null, 'pundikm@yahoo.com', '0000-00-00', '');
INSERT INTO `tb_customer` VALUES ('4', 'IBSTJHINPK', 'Tjhin Pauw Kim Bangunan Jaya', '327.101.440.958.0002', '0953200845', 'toko keramik', 'Jl.Siliwangi No.28 Kel.Bondongan Rt01 Rw.13 Bogor Bogor', 'Luciawati', 'Jakarta Timur', '16131', '021-7364564', '0251- 832 6082; 832 4992', '0878 7080 8123', '0251-8324992', 'Bogor', null, 'U43DY@yahoo.com', '0000-00-00', '');
INSERT INTO `tb_customer` VALUES ('8', 'IBSINGCUA1', 'Ing Cuan', '', '5450706789', 'handphone', 'Jl.Perdana Raya Indah Blok A/3 Rt10 Rw04 Wijaya Kusuma, Grogol Petamburan Jakarta Barat', 'Ing Cuan', 'Jakarta Timur', '11460', '', '021- 6385 8150', '0811 933 111', '', 'ITC Roxy Mas', null, 'as8888@indosat.net.id', '0000-00-00', '');
INSERT INTO `tb_customer` VALUES ('13', 'IBSPTHAKAS', 'Hakasima Inti PT', '1', '1234567890', 'Peralatan Rumah Tangga', 'Jl. Kembangan Baru Raya Blok AA No.3 Kembangan Jakarta Barat', 'Nurjanti Widjaja,\r\nTjhin Anthony', 'Jakarta Barat', '11610', '021- 581 3345', '3123123', '-', '-', 'Puri Indah', null, 'a@a.com', '0000-00-00', '');
INSERT INTO `tb_customer` VALUES ('14', 'ibskodelll', 'kkkkmlsklfksdfkskflsdfksdlkflskflksdlfklsdkflsd', '8989', '9898989898', 'kkjkjkj', 'kkjk', 'jkjk', '2', '09090', '9', '988998', '9898', '989', 'jhj', '989', 'h@d.com', '2012-04-16', 'irwan');
INSERT INTO `tb_customer` VALUES ('16', 'wqeqeqwewq', 'eqweqweqw', '', '3213123131', '1', 'dfsfdsf', 'fdsfsfsf', '1', '', '', '', '', '', '1', '', 'w@w.com', '2012-04-17', 'irwan');
INSERT INTO `tb_customer` VALUES ('17', 'jjjjjjjjjj', 'wrwerwercvxvcvxvc', '23123123', '2131231231', '1', 'mnmnmnm', 'mmnmn', '1', '78787', '86878', '7878', '7878787', '7878', '1', '87878', 'h@h.com', '2012-04-17', 'irwan');
INSERT INTO `tb_customer` VALUES ('18', 'hkjhhjhjhj', 'mjjjhjhj', '31231', '9090909090', '1', 'kjkjkjkjk', 'jkjkjk', '1', '98989', '9989', '9898', '989', '898', '1', '98', 'j@j.com', '2012-04-16', 'irwan');
INSERT INTO `tb_customer` VALUES ('19', 'jhjhjhjhjh', 'jhjhjhjh', '9889898989', '9898989898', '1', 'hjjhjhj', 'hjhjhj', '1', '98989', '8989898', '98989', '898', '9898', '1', '9898', 'h@h.com', '2012-04-17', 'irwan');
INSERT INTO `tb_customer` VALUES ('20', 'wewqewqeew', 'jkjjkjk', '989898', '2131312312', '1', 'jkjkjkjkj', 'kjkjkjkjkj', '10', '89898', '89898', '98989', '898', '9898', '1', '989', 'h@h.com', '2012-04-18', 'irwan');
INSERT INTO `tb_customer` VALUES ('21', 'fsfdsfdsff', 'jkjkjkj', '989898', '8989898989', '1', 'jkjkjkjk', 'jkjkjkj', '1', '78787', '787878', '78787', '878', '7878', '1', '7878', 'h@s.com', '2012-04-18', 'irwan');
INSERT INTO `tb_customer` VALUES ('22', 'IBSALIANJJ', 'jdasjdbajbdsajbd', '7979797979', '8989898989', '4', 'fdsfsdsh', 'jkkjkjk', '8', '99898', '8989898', '9989', '9989', '898989', '1', '78787878989898989', 'h@h.com', '2012-04-18', 'irwan');
INSERT INTO `tb_customer` VALUES ('23', 'fdsfsdfsdf', 'fdsfsfdfs', '43242342', '3424234242', '1', 'fdfdgfgd', 'fdgdfgfdgdfg', '1', '', '', '', '', '', '1', '', null, '2012-04-18', 'irwan');
INSERT INTO `tb_customer` VALUES ('24', 'sadasdsadf', 'fdsfsfdfs', '43242342', '3424234242', '1', 'fdfdgfgd', 'fdgdfgfdgdfg', '1', '', '', '', '', '', '1', '', null, '2012-04-18', 'irwan');
INSERT INTO `tb_customer` VALUES ('25', 'fsdfsdsdfs', 'fdsfsff', '2434234', '3242342423', '1', 'dfdfdfd', 'gfdgd', '1', '43534', '435345', '543543', '54543', '5435435', '1', '5453', null, '2012-04-18', 'irwan');
INSERT INTO `tb_customer` VALUES ('26', 'dadasdadsd', 'fdsfsff', '2434234', '3242342423', '1', 'dfdfdfd', 'gfdgd', '1', '43534', '435345', '543543', '54543', '5435435', '1', '5453', null, '2012-04-18', 'irwan');
INSERT INTO `tb_customer` VALUES ('27', 'Coorporate', 'Nama', 'Nomor KTP', 'Nomor rekening', 'Bidang Usaha', 'Address', 'Contact Person 2', 'City', 'ZIP/Postal Code', 'Business Phone', 'Home Phone', 'Mobile Phone', 'Fax Number', 'Cabang', 'Code Cabang', 'E-mail Address', '0000-00-00', 'Admin Input');
INSERT INTO `tb_customer` VALUES ('28', 'IBSMAKJAEX', 'Makmur Jaya Express CV', '', '', '', 'Ruko Taman Palem Lestari Blok A-30 No.15 Cengkareng  Jakarta Barat', '', 'Jakarta Selatan', '', '', '', '0816 876 590 / 0878 8450 0595', '', 'Citra Garden II', '', 'makmurjaya_xpdc@yahoo.com', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('29', 'IBSSURYPER', 'Surya Perdana Abadi PT', '', '', '', 'Jl. Kapuk Utara II/8 Rt003/Rw001 Penjaringan Jakarta Barat', 'Suhai Wiraya', 'Jakarta Barat', '', ',', '', '0813 1877 8156 (Dewi)', '', 'Citra Garden II', '', '', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('30', 'IBSTRIANKU', 'Trianto Kuswita', '', '', '', 'Jl. Cempaka Putih Tengah 27 No.6A Cempaka Putih Jakarta Pusat', 'Imelda', 'Jakarta Pusat', '', '021- 8690 6112', '', '', '', 'Cempaka Putih Raya', '', 'triantokuswita@gmail.com', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('31', 'IBSGLOBSUC', 'Global Success International PT', '', '', '', 'Gedung Rifa Lt.2 Jl.Prof Dr.Satrio Blok C4 Kav.6-7 Kuningan Jakarta Pusat', 'Jefri Oktavian Indroe', 'Jakarta Pusat', '', '021- 526 0781', '', '', '', 'Setiabudi Atrium', '', '', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('32', 'IBSSAMSIMJ', 'Samsim Jaya', '', '', '', 'Jl. Kapuk Raya No.12 E & F Kel.Kapuk Muara Kec.Penjaringan Jakarta', '', 'Jakarta', '', '0812 9411 300; 7059 3159; 5439 4635', '', '', '', 'Kapuk Muara', '', 'samsinjaya@yahoo.com', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('33', 'IBSYYSDHAS', 'Yay Dharmasagara', '', '', '', 'Jln. Taman Sari Raya No.78 Jakarta Barat', 'Elizaris P', 'Jakarta Barat', '11150', '021- 649 2254; 662 0283', '', '0817 699 9511 (henny); 0812 8007685 (Elizaris)', '', 'Reg.Tanah Abang', '', '', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('34', 'IBSALIANOO', 'Alianto', '', '', '', 'Jl. Komplek TSS Indah No.815 Blok B Jakarta', '', 'Jakarta', '', '021- 6385 9181;', '', '0812 105 2052', '', 'Reg.Tanah Abang', '', '', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('35', 'IBSPUNDIPT', 'Pundi Kalia Mandiri PT', '', '', 'Perdagangan Umum', 'Jl. Tarumanegara No.100A, Cirendeu Tangerang', '', 'Tangerang', '15419', '021- 7470 2842', '', '', '', 'Cinere', '', 'pundikm@yahoo.com', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('36', 'IBSTJHINPK', 'Tjhin Pauw Kim Bangunan Jaya', '327.101.440.958.0002', '0953200845', 'toko keramik', 'Jl.Siliwangi No.28 Kel.Bondongan Rt01 Rw.13 Bogor Bogor', '', 'Bogor', '16131', '0251- 832 6082; 832 4992', '', '0878 7080 8123', '0251-8324992', 'Bogor', '', 'U43DY@yahoo.com', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('37', 'IBSHINTADW', 'Shinta Dewi', '', '', '', 'Jl. Sunter Kirana Raya Blok ND2 No.11 Sunter Jaya, Tanjung Priok Jakarta', '', 'Jakarta', '', '', '', '0811 999 889', '', 'Taman Sunter Indah', '', '', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('38', 'IBSWIGIYAN', 'Wigiyanto Soleman', '', '', '', 'Jl. Kayu Putih Raya B4 / 8  Sebelah kolam Renang Jakarta Timur', '', 'Jakarta Timur', '', '', '', '0812 8137 896', '', 'Grand Cempaka Mas', '', 'wigianto@gmail.com', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('39', 'IBSMARKAUW', 'Martin Kauw', '', '', '', 'Poglar Ex Pool PPD Blok B 27 Jakarta', '', 'Jakarta', '', '021- 5437 8002; 5437 8003', '', '', '', 'Setiabudi Atrium', '', '', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('40', 'IBSINGCUA1', 'Ing Cuan', '', '5450706789', 'handphone', 'Jl.Perdana Raya Indah Blok A/3 Rt10 Rw04 Wijaya Kusuma, Grogol Petamburan Jakarta Barat', '', 'Jakarta Barat', '11460', '021- 6385 8150', '', '0811 933 111', '', 'ITC Roxy Mas', '', 'as8888@indosat.net.id', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('41', 'IBSPTHAKAS', 'Hakasima Inti PT', '', '', 'Peralatan Rumah Tangga', 'Jl. Kembangan Baru Raya Blok AA No.3 Kembangan Jakarta Barat', 'Tjhin Anthony', 'Jakarta Barat', '11610', '021- 581 3345', '', '', '', 'Puri Indah', '', '', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('42', 'IBSPTPUSAK', 'Pusaka Banten Sakti PT', '', '', 'Jasa Angkutan', 'Jl. Raya Serang - Cilegon Km.122 Kramat watu Cilegon', '', 'Cilegon', '42161', '0254- 7000622; 7001168', '', '0812 1200091', '0254-233170', 'Serang', '', 'pbs_one@yahoo.com', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('43', 'IBSRUDIPAW', 'Rudianto Paw', '09.5003.111173.2013', '', '', 'Pademangan II  Gg II No.49  TK Borneo el Jl.Hayam Wuruk , Pademangan Jakarta', '', 'Jakarta', '', '629 5658', '', '0812 8132 897', '', 'Pademangan', '', 'rudianto@yahoo.com', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('44', 'IBSPTWATAN', 'Wahana Tani Organik Lestari PT', '', '', 'Produksi Pupuk', 'Jl.Gatot Subroto Rt04/Rw01 Sangiang Jaya Periuk Tangerang', '', 'Tangerang', '15132', '021- 4788 2599592 7148', '', '', '', 'Perum Cibodas', '', 'peterhartono@live.com', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('45', 'IBSPTINDOC', 'Indocore Perkasa PT', '', '', 'Alat Kesehatan', 'Graha Mas Pemuda Blok AB No.19 Kel.Jati Kec.Pulo Gadung Jakarta Timur', 'O Lee', 'Jakarta Timur', '', '021- 4788 2599', '', '', '', 'Wisma GKBI', '', 'sunflower58@homail.net', '2012-04-19', 'irwan');
INSERT INTO `tb_customer` VALUES ('46', 'IBSGUNWIDJ', 'Gunadi Widjanarko', '09.5202.071168.0129', '', 'Bahan Bangunan', 'Jl.Gelang Baru Barat 1/38 Rt.01 Rw.003 Tomang, Grogol Petamburan (Alamat Lama) Jakarta Barat', '', 'Jakarta Barat', '', '021- 345 1288; 595 4224', '', '', '', 'Duta Merlin', '', 'batarex.indo@yahoo.com', '2012-04-19', 'irwan');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_key
-- ----------------------------
INSERT INTO `tb_key` VALUES ('19', '26', '3', 'dsadasd', 'adssad', '0000-00-00');
INSERT INTO `tb_key` VALUES ('20', '26', '3', 'sadsadas', 'dssa', '0000-00-00');
INSERT INTO `tb_key` VALUES ('21', '27', '3', 'adsds', 'ds', '0000-00-00');
INSERT INTO `tb_key` VALUES ('22', '31', '3', 'dfsf', 'fdsfdsf', '0000-00-00');
INSERT INTO `tb_key` VALUES ('23', '31', '3', 'fdsfsd', 'fdsfds', '0000-00-00');
INSERT INTO `tb_key` VALUES ('24', '28', '2', 'dfsdf', 'fdsfds', '0000-00-00');
INSERT INTO `tb_key` VALUES ('27', '32', '20', 'a', 'b', '0000-00-00');

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
  `pkt_fitur` varchar(16) NOT NULL,
  `pkt_jumlah_key` smallint(6) NOT NULL DEFAULT '0',
  `pkt_tanggal_koneksi` date NOT NULL,
  `pkt_tanggal_terima` date NOT NULL,
  `pkt_jatuh_tempo` date NOT NULL,
  `pkt_tanggal_input` date NOT NULL,
  PRIMARY KEY (`pkt_idx`),
  KEY `tb_paket_cus_idx_fk` (`cus_idx`),
  CONSTRAINT `tb_paket_cus_idx_fk` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_paket
-- ----------------------------
INSERT INTO `tb_paket` VALUES ('26', '3', 'single_otorisasi', 'gold', 'va', '2', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');
INSERT INTO `tb_paket` VALUES ('27', '3', 'single_otorisasi', 'gold', 'va', '1', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');
INSERT INTO `tb_paket` VALUES ('28', '2', 'single_otorisasi', 'gold', 'va', '1', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');
INSERT INTO `tb_paket` VALUES ('29', '14', 'single_otorisasi', 'gold', 'va', '0', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');
INSERT INTO `tb_paket` VALUES ('30', '14', 'single_otorisasi', 'gold', 'va', '0', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');
INSERT INTO `tb_paket` VALUES ('31', '3', 'single_otorisasi', 'gold', 'va', '2', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');
INSERT INTO `tb_paket` VALUES ('32', '20', 'multi_otorisasi', 'gold_payroll', 'va', '1', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- ----------------------------
-- Table structure for `tb_schedule`
-- ----------------------------
DROP TABLE IF EXISTS `tb_schedule`;
CREATE TABLE `tb_schedule` (
  `sched_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_idx` int(11) NOT NULL,
  `pkt_idx` int(11) NOT NULL,
  `sched_status` varchar(255) NOT NULL,
  `sched_date` date DEFAULT NULL,
  `sched_time` time DEFAULT NULL,
  `sched_alamat_kirim` text,
  `sched_agenda_kunjungan` text NOT NULL,
  PRIMARY KEY (`sched_idx`),
  KEY `pkt_idx` (`pkt_idx`),
  KEY `cus_idx` (`cus_idx`),
  CONSTRAINT `cus_idx` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pkt_idx` FOREIGN KEY (`pkt_idx`) REFERENCES `tb_paket` (`pkt_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_schedule
-- ----------------------------

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
