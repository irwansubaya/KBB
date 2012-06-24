/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : kbb

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2012-06-24 08:25:50
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
) ENGINE=MyISAM AUTO_INCREMENT=12378 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_bidang_usaha
-- ----------------------------
INSERT INTO `tb_bidang_usaha` VALUES ('15', 'perdagangan burung');
INSERT INTO `tb_bidang_usaha` VALUES ('14', 'perdagangan alat-alat terapi');
INSERT INTO `tb_bidang_usaha` VALUES ('13', 'perdagangan besar alat tehnik');
INSERT INTO `tb_bidang_usaha` VALUES ('12', 'Perdagangan & Service AC');
INSERT INTO `tb_bidang_usaha` VALUES ('11', 'Perdagangan Elektronik');
INSERT INTO `tb_bidang_usaha` VALUES ('10', 'Perdagangan Bahan Bakar Umum & Gas');
INSERT INTO `tb_bidang_usaha` VALUES ('9', 'Perdagangan Penjernihan Air');
INSERT INTO `tb_bidang_usaha` VALUES ('8', 'Perdagangan Besar Textile');
INSERT INTO `tb_bidang_usaha` VALUES ('7', 'Perdagangan Barang');
INSERT INTO `tb_bidang_usaha` VALUES ('6', 'Perdagangan Batu Bara');
INSERT INTO `tb_bidang_usaha` VALUES ('5', 'Perdagangan besar mesin-mesin,suku cadang');
INSERT INTO `tb_bidang_usaha` VALUES ('4', 'Perdagangan Barang & Jasa');
INSERT INTO `tb_bidang_usaha` VALUES ('3', 'Perdagangan Otomotif');
INSERT INTO `tb_bidang_usaha` VALUES ('2', 'Perdagangan & Penjualan Serat Fiber');
INSERT INTO `tb_bidang_usaha` VALUES ('1', 'Perdagangan Umum');
INSERT INTO `tb_bidang_usaha` VALUES ('117', 'Apotik');
INSERT INTO `tb_bidang_usaha` VALUES ('116', 'Promotional Merchandise');
INSERT INTO `tb_bidang_usaha` VALUES ('115', 'Jasa Konstruksi & Konsultasi');
INSERT INTO `tb_bidang_usaha` VALUES ('114', 'Bengkel');
INSERT INTO `tb_bidang_usaha` VALUES ('113', 'Importir');
INSERT INTO `tb_bidang_usaha` VALUES ('112', 'Pabrik');
INSERT INTO `tb_bidang_usaha` VALUES ('111', 'Tour & travel');
INSERT INTO `tb_bidang_usaha` VALUES ('110', 'salon');
INSERT INTO `tb_bidang_usaha` VALUES ('109', 'Fashion');
INSERT INTO `tb_bidang_usaha` VALUES ('108', 'Retail');
INSERT INTO `tb_bidang_usaha` VALUES ('107', 'Security system');
INSERT INTO `tb_bidang_usaha` VALUES ('106', 'Distributor');
INSERT INTO `tb_bidang_usaha` VALUES ('105', 'Restoran');
INSERT INTO `tb_bidang_usaha` VALUES ('104', 'Showroom Motor');
INSERT INTO `tb_bidang_usaha` VALUES ('103', 'Showroom Mobil');
INSERT INTO `tb_bidang_usaha` VALUES ('102', 'Furniture & interior');
INSERT INTO `tb_bidang_usaha` VALUES ('101', 'Suplier');
INSERT INTO `tb_bidang_usaha` VALUES ('100', 'Sparepart');
INSERT INTO `tb_bidang_usaha` VALUES ('99', 'trading');
INSERT INTO `tb_bidang_usaha` VALUES ('98', 'Business & Management');
INSERT INTO `tb_bidang_usaha` VALUES ('97', 'Mebel & Peralatan Kantor');
INSERT INTO `tb_bidang_usaha` VALUES ('96', 'Minimarket');
INSERT INTO `tb_bidang_usaha` VALUES ('95', 'Produksi Mainan');
INSERT INTO `tb_bidang_usaha` VALUES ('94', 'Produksi Karpet');
INSERT INTO `tb_bidang_usaha` VALUES ('93', 'Produksi Minyak Angin');
INSERT INTO `tb_bidang_usaha` VALUES ('92', 'Produksi Kosmetik');
INSERT INTO `tb_bidang_usaha` VALUES ('91', 'Produksi Spare part');
INSERT INTO `tb_bidang_usaha` VALUES ('90', 'Produksi Besi Baja');
INSERT INTO `tb_bidang_usaha` VALUES ('89', 'Produksi Helm');
INSERT INTO `tb_bidang_usaha` VALUES ('88', 'Produksi Film');
INSERT INTO `tb_bidang_usaha` VALUES ('87', 'Produksi Peralatan Pengujian Kelistrikan');
INSERT INTO `tb_bidang_usaha` VALUES ('86', 'Produksi CD Recorder');
INSERT INTO `tb_bidang_usaha` VALUES ('85', 'Produksi Keramik');
INSERT INTO `tb_bidang_usaha` VALUES ('84', 'Produksi Lampu');
INSERT INTO `tb_bidang_usaha` VALUES ('83', 'produksi kabel');
INSERT INTO `tb_bidang_usaha` VALUES ('82', 'produksi snack');
INSERT INTO `tb_bidang_usaha` VALUES ('81', 'Produksi Deterjen Dll');
INSERT INTO `tb_bidang_usaha` VALUES ('80', 'Produksi Pupuk');
INSERT INTO `tb_bidang_usaha` VALUES ('79', 'Ekspedisi');
INSERT INTO `tb_bidang_usaha` VALUES ('78', 'Toko Mebel');
INSERT INTO `tb_bidang_usaha` VALUES ('77', 'Toko Retail');
INSERT INTO `tb_bidang_usaha` VALUES ('76', 'toko alat musik');
INSERT INTO `tb_bidang_usaha` VALUES ('75', 'Toko Kertas');
INSERT INTO `tb_bidang_usaha` VALUES ('74', 'Toko Parfum');
INSERT INTO `tb_bidang_usaha` VALUES ('73', 'Toko Baju');
INSERT INTO `tb_bidang_usaha` VALUES ('72', 'Toko Susu');
INSERT INTO `tb_bidang_usaha` VALUES ('71', 'Toko Makanan');
INSERT INTO `tb_bidang_usaha` VALUES ('70', 'Toko Obat');
INSERT INTO `tb_bidang_usaha` VALUES ('69', 'Toko Buku');
INSERT INTO `tb_bidang_usaha` VALUES ('68', 'toko jam');
INSERT INTO `tb_bidang_usaha` VALUES ('67', 'Toko Furniture');
INSERT INTO `tb_bidang_usaha` VALUES ('66', 'Toko ATK');
INSERT INTO `tb_bidang_usaha` VALUES ('65', 'Toko Tas');
INSERT INTO `tb_bidang_usaha` VALUES ('64', 'toko arloji');
INSERT INTO `tb_bidang_usaha` VALUES ('63', 'Toko HP');
INSERT INTO `tb_bidang_usaha` VALUES ('62', 'toko sepeda');
INSERT INTO `tb_bidang_usaha` VALUES ('61', 'toko buah');
INSERT INTO `tb_bidang_usaha` VALUES ('60', 'toko komputer');
INSERT INTO `tb_bidang_usaha` VALUES ('59', 'toko perlengkapan bayi');
INSERT INTO `tb_bidang_usaha` VALUES ('58', 'Toko Elektronik');
INSERT INTO `tb_bidang_usaha` VALUES ('57', 'Toko Elektronik');
INSERT INTO `tb_bidang_usaha` VALUES ('56', 'Perdagangan Alat Berat');
INSERT INTO `tb_bidang_usaha` VALUES ('55', 'Perdagangan Multi Vitamin');
INSERT INTO `tb_bidang_usaha` VALUES ('54', 'Perdagangan Cohveya Belt');
INSERT INTO `tb_bidang_usaha` VALUES ('53', 'Perdagangan Alat Rumah Tangga');
INSERT INTO `tb_bidang_usaha` VALUES ('52', 'Perdagangan Peralatan  Cleaning');
INSERT INTO `tb_bidang_usaha` VALUES ('51', 'Perdagangan Sepeda');
INSERT INTO `tb_bidang_usaha` VALUES ('50', 'Perdagangan Material Bangunan');
INSERT INTO `tb_bidang_usaha` VALUES ('49', 'Perdagangan Emas');
INSERT INTO `tb_bidang_usaha` VALUES ('48', 'Perdagangan Cat');
INSERT INTO `tb_bidang_usaha` VALUES ('47', 'Perdagangan Marmer');
INSERT INTO `tb_bidang_usaha` VALUES ('46', 'Perdagangan Logam');
INSERT INTO `tb_bidang_usaha` VALUES ('45', 'Perdagangan/Garment');
INSERT INTO `tb_bidang_usaha` VALUES ('44', 'Perdagangan Furniture');
INSERT INTO `tb_bidang_usaha` VALUES ('43', 'Perdagangan Pipa');
INSERT INTO `tb_bidang_usaha` VALUES ('42', 'Perdagangan ATK');
INSERT INTO `tb_bidang_usaha` VALUES ('41', 'Perdagangan & Produksi Pakan Ternak dan Ikan');
INSERT INTO `tb_bidang_usaha` VALUES ('40', 'Perdagangan Export Import');
INSERT INTO `tb_bidang_usaha` VALUES ('39', 'Perdagangan Alat Kesehatan');
INSERT INTO `tb_bidang_usaha` VALUES ('38', 'Perdagangan Kimia');
INSERT INTO `tb_bidang_usaha` VALUES ('37', 'Perdagangan Audio');
INSERT INTO `tb_bidang_usaha` VALUES ('36', 'Perdagangan Kain Sprei dan Bantal');
INSERT INTO `tb_bidang_usaha` VALUES ('35', 'Perdagangan Mainan Anak-Anak');
INSERT INTO `tb_bidang_usaha` VALUES ('34', 'Perdagangan Keramik');
INSERT INTO `tb_bidang_usaha` VALUES ('33', 'Perdagangan Bebas');
INSERT INTO `tb_bidang_usaha` VALUES ('32', 'perdagangan besi beton & kawat baja');
INSERT INTO `tb_bidang_usaha` VALUES ('31', 'perdagangan voucher & aksesoris HP');
INSERT INTO `tb_bidang_usaha` VALUES ('30', 'perdagangan restaurant');
INSERT INTO `tb_bidang_usaha` VALUES ('29', 'Perdagangan/Dealer Motor Yamaha');
INSERT INTO `tb_bidang_usaha` VALUES ('28', 'Perdagangan Berjangka Komoditi');
INSERT INTO `tb_bidang_usaha` VALUES ('27', 'Perdagangan Handphone');
INSERT INTO `tb_bidang_usaha` VALUES ('26', 'Perdagangan stationary');
INSERT INTO `tb_bidang_usaha` VALUES ('25', 'Perdagangan Besar Makanan/Minuman');
INSERT INTO `tb_bidang_usaha` VALUES ('24', 'perdagangan & property');
INSERT INTO `tb_bidang_usaha` VALUES ('23', 'perdagangan perhiasan');
INSERT INTO `tb_bidang_usaha` VALUES ('22', 'perdagangan sembako');
INSERT INTO `tb_bidang_usaha` VALUES ('21', 'perdagangan gingseng');
INSERT INTO `tb_bidang_usaha` VALUES ('20', 'Perdagangan Laptop & Komputer');
INSERT INTO `tb_bidang_usaha` VALUES ('19', 'perdagangan dan pengangkutan');
INSERT INTO `tb_bidang_usaha` VALUES ('18', 'perdagangan eceran');
INSERT INTO `tb_bidang_usaha` VALUES ('17', 'perdagangan sapi');
INSERT INTO `tb_bidang_usaha` VALUES ('16', 'perdagangan besar bahan baku hasil pertanian');

-- ----------------------------
-- Table structure for `tb_cabang`
-- ----------------------------
DROP TABLE IF EXISTS `tb_cabang`;
CREATE TABLE `tb_cabang` (
  `cab_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cab_code` text NOT NULL,
  `cab_name` varchar(64) NOT NULL,
  PRIMARY KEY (`cab_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=643 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_cabang
-- ----------------------------
INSERT INTO `tb_cabang` VALUES ('325', '6550', 'KCP Abdul Muis ');
INSERT INTO `tb_cabang` VALUES ('326', '5040', 'KCP Adhi Graha ');
INSERT INTO `tb_cabang` VALUES ('327', '7460', 'KCP Agung Sedayu II ');
INSERT INTO `tb_cabang` VALUES ('328', '0494', 'KCP Alaydrus ');
INSERT INTO `tb_cabang` VALUES ('329', '5870', 'KCP AM Sangaji ');
INSERT INTO `tb_cabang` VALUES ('330', '0211', 'KCP Ancol ');
INSERT INTO `tb_cabang` VALUES ('331', '5850', 'KCP Angke ');
INSERT INTO `tb_cabang` VALUES ('332', '6010', 'KCP Arjuna ');
INSERT INTO `tb_cabang` VALUES ('333', '5405', 'KCP Arkadia ');
INSERT INTO `tb_cabang` VALUES ('334', '8400', 'KCP Artha Gading ');
INSERT INTO `tb_cabang` VALUES ('335', '0001', 'KCU ASEMKA ');
INSERT INTO `tb_cabang` VALUES ('336', '6850', 'KCP Atrium ');
INSERT INTO `tb_cabang` VALUES ('337', '8810', 'KCP Balai Pustaka ');
INSERT INTO `tb_cabang` VALUES ('338', '5830', 'KCP Bandengan Utara Raya ');
INSERT INTO `tb_cabang` VALUES ('339', '0224', 'KCP Batu Ceper ');
INSERT INTO `tb_cabang` VALUES ('340', '0301', 'KCP Bendungan Hilir ');
INSERT INTO `tb_cabang` VALUES ('341', '5440', 'KCP Biak ');
INSERT INTO `tb_cabang` VALUES ('342', '5270', 'KCP Bina Nusantara ');
INSERT INTO `tb_cabang` VALUES ('343', '5010', 'KCP Bintaro ');
INSERT INTO `tb_cabang` VALUES ('344', '6030', 'KCP Bintaro Utama ');
INSERT INTO `tb_cabang` VALUES ('345', '0218', 'KCU BLOK A CIPETE ');
INSERT INTO `tb_cabang` VALUES ('346', '0479', 'KCP Bojong Indah ');
INSERT INTO `tb_cabang` VALUES ('347', '6080', 'KCP Bona Indah ');
INSERT INTO `tb_cabang` VALUES ('348', '6600', 'KCP Boulevard Timur ');
INSERT INTO `tb_cabang` VALUES ('349', '6330', 'KCP Buaran Raya ');
INSERT INTO `tb_cabang` VALUES ('350', '0391', 'KCP Bungur ');
INSERT INTO `tb_cabang` VALUES ('351', '0458', 'KCP Bursa Efek Jakarta ');
INSERT INTO `tb_cabang` VALUES ('352', '6560', 'KCP Business Park ');
INSERT INTO `tb_cabang` VALUES ('353', '5730', 'KCP C\' One Plaza ');
INSERT INTO `tb_cabang` VALUES ('354', '8060', 'KCP CBD Pluit ');
INSERT INTO `tb_cabang` VALUES ('355', '0276', 'KCP Cempaka Putih ');
INSERT INTO `tb_cabang` VALUES ('356', '7060', 'KCP Cempaka Putih Raya ');
INSERT INTO `tb_cabang` VALUES ('357', '0240', 'KCP Cengkeh ');
INSERT INTO `tb_cabang` VALUES ('358', '5485', 'KCP Central Park ');
INSERT INTO `tb_cabang` VALUES ('359', '6280', 'KCP Cibubur ');
INSERT INTO `tb_cabang` VALUES ('360', '8340', 'KCP Cibubur Junction ');
INSERT INTO `tb_cabang` VALUES ('361', '0397', 'KCP Cideng Barat ');
INSERT INTO `tb_cabang` VALUES ('362', '5980', 'KCP Cideng Timur ');
INSERT INTO `tb_cabang` VALUES ('363', '7330', 'KCP Cilandak KKO I ');
INSERT INTO `tb_cabang` VALUES ('364', '0475', 'KCP Ciputat 2 ');
INSERT INTO `tb_cabang` VALUES ('365', '5445', 'KCP Citra 2 Ext ');
INSERT INTO `tb_cabang` VALUES ('366', '0399', 'KCP Citra Garden ');
INSERT INTO `tb_cabang` VALUES ('367', '5390', 'KCP Citra Garden II ');
INSERT INTO `tb_cabang` VALUES ('368', '7015', 'KCP City Resort ');
INSERT INTO `tb_cabang` VALUES ('369', '0319', 'KCU CITY TOWER ');
INSERT INTO `tb_cabang` VALUES ('370', '6070', 'KCP Cyber 2 ');
INSERT INTO `tb_cabang` VALUES ('371', '0198', 'KCU DAAN MOGOT ');
INSERT INTO `tb_cabang` VALUES ('372', '8660', 'KCP Daan Mogot Baru ');
INSERT INTO `tb_cabang` VALUES ('373', '8350', 'KCP Daan Mogot Dua ');
INSERT INTO `tb_cabang` VALUES ('374', '0273', 'KCP Dewi Sartika ');
INSERT INTO `tb_cabang` VALUES ('375', '6920', 'KCP Duri Raya ');
INSERT INTO `tb_cabang` VALUES ('376', '7300', 'KCP Duta Mas Fatmawati ');
INSERT INTO `tb_cabang` VALUES ('377', '0308', 'KCP Duta Merlin ');
INSERT INTO `tb_cabang` VALUES ('378', '5255', 'KCP Empat Enam ');
INSERT INTO `tb_cabang` VALUES ('379', '5055', 'KCP Epicentrum Walk ');
INSERT INTO `tb_cabang` VALUES ('380', '0071', 'KCP Fatmawati ');
INSERT INTO `tb_cabang` VALUES ('381', '7480', 'KCP Gading Bukit Indah ');
INSERT INTO `tb_cabang` VALUES ('382', '8710', 'KCP Gading Riviera ');
INSERT INTO `tb_cabang` VALUES ('383', '8700', 'KCP Gading Square ');
INSERT INTO `tb_cabang` VALUES ('384', '0012', 'KCU GAJAH MADA ');
INSERT INTO `tb_cabang` VALUES ('385', '0145', 'KCP Gatot Subroto ');
INSERT INTO `tb_cabang` VALUES ('386', '0498', 'KCP Gedung Hijau ');
INSERT INTO `tb_cabang` VALUES ('387', '6805', 'KCP Gedung Jaya ');
INSERT INTO `tb_cabang` VALUES ('388', '0082', 'KCP Glodok Plaza ');
INSERT INTO `tb_cabang` VALUES ('389', '0455', 'KCP Gondongdia Lama ');
INSERT INTO `tb_cabang` VALUES ('390', '0375', 'KCP Graha Inti Fauzi ');
INSERT INTO `tb_cabang` VALUES ('391', '6380', 'KCP Graha Kirana ');
INSERT INTO `tb_cabang` VALUES ('392', '5020', 'KCP Graha Paramita ');
INSERT INTO `tb_cabang` VALUES ('393', '8770', 'KCP Grand Cempaka Mas ');
INSERT INTO `tb_cabang` VALUES ('394', '0253', 'KCU GREEN GARDEN ');
INSERT INTO `tb_cabang` VALUES ('395', '7040', 'KCP Green Ville ');
INSERT INTO `tb_cabang` VALUES ('396', '5025', 'KCP Grha Surya ');
INSERT INTO `tb_cabang` VALUES ('397', '6460', 'KCP Griya Utama ');
INSERT INTO `tb_cabang` VALUES ('398', '0268', 'KCP Grogol Muwardi ');
INSERT INTO `tb_cabang` VALUES ('399', '0260', 'KCP Grogol Permai ');
INSERT INTO `tb_cabang` VALUES ('400', '0272', 'KCP Gudang Peluru ');
INSERT INTO `tb_cabang` VALUES ('401', '0003', 'KCU GUNSA 45 ');
INSERT INTO `tb_cabang` VALUES ('402', '0212', 'KCP Gunung Sahari ');
INSERT INTO `tb_cabang` VALUES ('403', '6530', 'KCP Harmoni Plaza ');
INSERT INTO `tb_cabang` VALUES ('404', '5230', 'KCP Hasanudin ');
INSERT INTO `tb_cabang` VALUES ('405', '0262', 'KCP Hasyim Ashari ');
INSERT INTO `tb_cabang` VALUES ('406', '0350', 'KCP Hayam Wuruk ');
INSERT INTO `tb_cabang` VALUES ('407', '5700', 'KCP HR. Rasuna Said ');
INSERT INTO `tb_cabang` VALUES ('408', '6250', 'KCP Intercon Megah ');
INSERT INTO `tb_cabang` VALUES ('409', '7140', 'KCP Iskandar Muda ');
INSERT INTO `tb_cabang` VALUES ('410', '5315', 'KCP Iskandar Muda II ');
INSERT INTO `tb_cabang` VALUES ('411', '6640', 'KCP ITC Kuningan ');
INSERT INTO `tb_cabang` VALUES ('412', '5050', 'KCP ITC Permata Hijau ');
INSERT INTO `tb_cabang` VALUES ('413', '5450', 'KCP ITC Roxi Mas ');
INSERT INTO `tb_cabang` VALUES ('414', '5330', 'KCP ITC Roxy Mas II ');
INSERT INTO `tb_cabang` VALUES ('415', '7550', 'KCP Jalan Panjang ');
INSERT INTO `tb_cabang` VALUES ('416', '5990', 'KCP Jamblang ');
INSERT INTO `tb_cabang` VALUES ('417', '7600', 'KCP Jatinegara Barat ');
INSERT INTO `tb_cabang` VALUES ('418', '0496', 'KCP Jatinegara Timur ');
INSERT INTO `tb_cabang` VALUES ('419', '0083', 'KCP Jayakarta ');
INSERT INTO `tb_cabang` VALUES ('420', '0488', 'KCP Jelambar ');
INSERT INTO `tb_cabang` VALUES ('421', '5280', 'KCP Jelambar Baru Raya ');
INSERT INTO `tb_cabang` VALUES ('422', '0074', 'KCP Jembatan Dua ');
INSERT INTO `tb_cabang` VALUES ('423', '0105', 'KCP Jembatan Lima ');
INSERT INTO `tb_cabang` VALUES ('424', '0241', 'KCP Jembatan Merah ');
INSERT INTO `tb_cabang` VALUES ('425', '5350', 'KCP Juanda III ');
INSERT INTO `tb_cabang` VALUES ('426', '0164', 'KCP Kalimalang ');
INSERT INTO `tb_cabang` VALUES ('427', '0230', 'KCU KALIMALANG ');
INSERT INTO `tb_cabang` VALUES ('428', '0313', 'KCP Kapuk Kamal ');
INSERT INTO `tb_cabang` VALUES ('429', '0408', 'KCP Kapuk Muara ');
INSERT INTO `tb_cabang` VALUES ('430', '0370', 'KCP Karang Anyar ');
INSERT INTO `tb_cabang` VALUES ('431', '6970', 'KCP Kartini ');
INSERT INTO `tb_cabang` VALUES ('432', '5920', 'KCP Kaveling Polri ');
INSERT INTO `tb_cabang` VALUES ('433', '0484', 'KCP Keamanan ');
INSERT INTO `tb_cabang` VALUES ('434', '6790', 'KCP Kebayoran Blok M ');
INSERT INTO `tb_cabang` VALUES ('435', '0287', 'KCP Kebon Jeruk ');
INSERT INTO `tb_cabang` VALUES ('436', '0309', 'KCP Kedoya Baru ');
INSERT INTO `tb_cabang` VALUES ('437', '0372', 'KCU KEDOYA PERMAI ');
INSERT INTO `tb_cabang` VALUES ('438', '0065', 'KCU KELAPA GADING ');
INSERT INTO `tb_cabang` VALUES ('439', '0227', 'KCP Kelapa Gading ');
INSERT INTO `tb_cabang` VALUES ('440', '6300', 'KCP Kelapa Gading Hibrida ');
INSERT INTO `tb_cabang` VALUES ('441', '0413', 'KCP Kelapa Gading Villa ');
INSERT INTO `tb_cabang` VALUES ('442', '6840', 'KCP KEM Tower ');
INSERT INTO `tb_cabang` VALUES ('443', '0286', 'KCP Kemang ');
INSERT INTO `tb_cabang` VALUES ('444', '6220', 'KCP Kemang Mansion ');
INSERT INTO `tb_cabang` VALUES ('445', '5500', 'KCP Kemanggisan ');
INSERT INTO `tb_cabang` VALUES ('446', '0127', 'KCP Kepa Duri ');
INSERT INTO `tb_cabang` VALUES ('447', '0401', 'KCP Ketapang ');
INSERT INTO `tb_cabang` VALUES ('448', '0179', 'KCP KHM Mansyur ');
INSERT INTO `tb_cabang` VALUES ('449', '5860', 'KCP KHM Mansyur II ');
INSERT INTO `tb_cabang` VALUES ('450', '0412', 'KCP Klender ');
INSERT INTO `tb_cabang` VALUES ('451', '7560', 'KCP Komp. Taman Kota ');
INSERT INTO `tb_cabang` VALUES ('452', '5930', 'KCP Kosambi ');
INSERT INTO `tb_cabang` VALUES ('453', '0165', 'KCP Kramat Jati ');
INSERT INTO `tb_cabang` VALUES ('454', '0414', 'KCP Kramat Jaya ');
INSERT INTO `tb_cabang` VALUES ('455', '7000', 'KCP Kramat Jaya Baru ');
INSERT INTO `tb_cabang` VALUES ('456', '7520', 'KCP Krekot Bunder ');
INSERT INTO `tb_cabang` VALUES ('457', '5260', 'KCP KS Tubun ');
INSERT INTO `tb_cabang` VALUES ('458', '0217', 'KCU KUNINGAN ');
INSERT INTO `tb_cabang` VALUES ('459', '6860', 'KCP Kwitang ');
INSERT INTO `tb_cabang` VALUES ('460', '5710', 'KCP Kyai Caringin ');
INSERT INTO `tb_cabang` VALUES ('461', '0311', 'KCP Latumenten ');
INSERT INTO `tb_cabang` VALUES ('462', '6450', 'KCP Lindeteves ');
INSERT INTO `tb_cabang` VALUES ('463', '5885', 'KCP Lindeteves Trade Center ');
INSERT INTO `tb_cabang` VALUES ('464', '5285', 'KCP Lodan Center ');
INSERT INTO `tb_cabang` VALUES ('465', '0485', 'KCP Lokasari ');
INSERT INTO `tb_cabang` VALUES ('466', '5295', 'KCP Mahkota Ancol ');
INSERT INTO `tb_cabang` VALUES ('467', '8310', 'KCP Mal Artha Gading ');
INSERT INTO `tb_cabang` VALUES ('468', '0466', 'KCP Mal Ciputra ');
INSERT INTO `tb_cabang` VALUES ('469', '6320', 'KCP Mal Kelapa Gading ');
INSERT INTO `tb_cabang` VALUES ('470', '8705', 'KCP Mal Kelapa Gading III ');
INSERT INTO `tb_cabang` VALUES ('471', '7310', 'KCP Mal Pondok Indah ');
INSERT INTO `tb_cabang` VALUES ('472', '0467', 'KCP Mal Taman Anggrek ');
INSERT INTO `tb_cabang` VALUES ('473', '5415', 'KCP Mall Grand Indonesia ');
INSERT INTO `tb_cabang` VALUES ('474', '0307', 'KCP Mandala ');
INSERT INTO `tb_cabang` VALUES ('475', '0398', 'KCP Mandala Raya ');
INSERT INTO `tb_cabang` VALUES ('476', '0161', 'KCP Mangga Besar ');
INSERT INTO `tb_cabang` VALUES ('477', '5880', 'KCP Mangga Besar Raya ');
INSERT INTO `tb_cabang` VALUES ('478', '6980', 'KCP Mangga Besar VIII ');
INSERT INTO `tb_cabang` VALUES ('479', '0160', 'KCP Mangga Dua ');
INSERT INTO `tb_cabang` VALUES ('480', '0480', 'KCP Mangga Dua ITC ');
INSERT INTO `tb_cabang` VALUES ('481', '6930', 'KCP Mangga Dua Mal ');
INSERT INTO `tb_cabang` VALUES ('482', '0335', 'KCU MANGGA DUA RAYA ');
INSERT INTO `tb_cabang` VALUES ('483', '5910', 'KCP Mangga Dua Square ');
INSERT INTO `tb_cabang` VALUES ('484', '6275', 'KCP Manyar ');
INSERT INTO `tb_cabang` VALUES ('485', '0342', 'KCU MATRAMAN ');
INSERT INTO `tb_cabang` VALUES ('486', '0228', 'KCP Mayestik ');
INSERT INTO `tb_cabang` VALUES ('487', '5015', 'KCP Mega Kuningan ');
INSERT INTO `tb_cabang` VALUES ('488', '0070', 'KCP Melawai ');
INSERT INTO `tb_cabang` VALUES ('489', '6350', 'KCP Menara Ancol ');
INSERT INTO `tb_cabang` VALUES ('490', '5460', 'KCP Menara Batavia ');
INSERT INTO `tb_cabang` VALUES ('491', '0205', 'KCU MENARA BCA ');
INSERT INTO `tb_cabang` VALUES ('492', '0450', 'KCU MENARA BIDAKARA ');
INSERT INTO `tb_cabang` VALUES ('493', '5045', 'KCP Menara Gracia ');
INSERT INTO `tb_cabang` VALUES ('494', '0221', 'KCP Menara Imperium ');
INSERT INTO `tb_cabang` VALUES ('495', '0255', 'KCP Menara Mulia ');
INSERT INTO `tb_cabang` VALUES ('496', '5425', 'KCP Menara Palma ');
INSERT INTO `tb_cabang` VALUES ('497', '7350', 'KCP Menteng ');
INSERT INTO `tb_cabang` VALUES ('498', '8870', 'KCP Meruya Selatan ');
INSERT INTO `tb_cabang` VALUES ('499', '5360', 'KCP Metro Pasar Baru ');
INSERT INTO `tb_cabang` VALUES ('500', '6260', 'KCP Metro Tanah Abang ');
INSERT INTO `tb_cabang` VALUES ('501', '6815', 'KCP MNC Plaza ');
INSERT INTO `tb_cabang` VALUES ('502', '0210', 'KCP Monginsidi ');
INSERT INTO `tb_cabang` VALUES ('503', '7160', 'KCP MT Haryono Cawang ');
INSERT INTO `tb_cabang` VALUES ('504', '0069', 'KCU MUARA KARANG ');
INSERT INTO `tb_cabang` VALUES ('505', '6370', 'KCP Muara Karang 2 ');
INSERT INTO `tb_cabang` VALUES ('506', '0407', 'KCP Muara Karang 3 ');
INSERT INTO `tb_cabang` VALUES ('507', '8040', 'KCP Muara Karang Utara ');
INSERT INTO `tb_cabang` VALUES ('508', '5785', 'KCP Niaga Grisenda ');
INSERT INTO `tb_cabang` VALUES ('509', '5530', 'KCP Otista ');
INSERT INTO `tb_cabang` VALUES ('510', '5375', 'KCP Pacific Place ');
INSERT INTO `tb_cabang` VALUES ('511', '0487', 'KCP Pademangan ');
INSERT INTO `tb_cabang` VALUES ('512', '0229', 'KCP Palmerah ');
INSERT INTO `tb_cabang` VALUES ('513', '0194', 'KCU PANGERAN JAYAKARTA ');
INSERT INTO `tb_cabang` VALUES ('514', '5660', 'KCP Panglima Polim Raya ');
INSERT INTO `tb_cabang` VALUES ('515', '8740', 'KCP Pantai Indah Kapuk ');
INSERT INTO `tb_cabang` VALUES ('516', '8650', 'KCP Pantai Indah Kapuk II ');
INSERT INTO `tb_cabang` VALUES ('517', '0002', 'KCU PASAR BARU ');
INSERT INTO `tb_cabang` VALUES ('518', '0305', 'KCP Pasar Cikini ');
INSERT INTO `tb_cabang` VALUES ('519', '0476', 'KCP Pasar Cipulir ');
INSERT INTO `tb_cabang` VALUES ('520', '6825', 'KCP Pasar Induk Kramat Jati ');
INSERT INTO `tb_cabang` VALUES ('521', '5740', 'KCP Pasar Jatinegara ');
INSERT INTO `tb_cabang` VALUES ('522', '0248', 'KCP Pasar Kebayoran Lama ');
INSERT INTO `tb_cabang` VALUES ('523', '0068', 'KCP Pasar Kenari ');
INSERT INTO `tb_cabang` VALUES ('524', '0128', 'KCP Pasar Minggu ');
INSERT INTO `tb_cabang` VALUES ('525', '5470', 'KCP Pasar Minggu Center ');
INSERT INTO `tb_cabang` VALUES ('526', '6360', 'KCP Pasar Pagi Mangga Dua ');
INSERT INTO `tb_cabang` VALUES ('527', '0369', 'KCP Pasar Tanah Abang ');
INSERT INTO `tb_cabang` VALUES ('528', '5890', 'KCP Pecenongan ');
INSERT INTO `tb_cabang` VALUES ('529', '6310', 'KCP Pegambiran ');
INSERT INTO `tb_cabang` VALUES ('530', '5290', 'KCP Pejagalan ');
INSERT INTO `tb_cabang` VALUES ('531', '7180', 'KCP Pejaten ');
INSERT INTO `tb_cabang` VALUES ('532', '6900', 'KCP Pelabuhan Tanjung Priok ');
INSERT INTO `tb_cabang` VALUES ('533', '0111', 'KCP Penjernihan ');
INSERT INTO `tb_cabang` VALUES ('534', '7420', 'KCP Percetakan Negara ');
INSERT INTO `tb_cabang` VALUES ('535', '0178', 'KCP Permata Hijau ');
INSERT INTO `tb_cabang` VALUES ('536', '5215', 'KCP Permata Kota ');
INSERT INTO `tb_cabang` VALUES ('537', '6240', 'KCP Permata Ujung Menteng ');
INSERT INTO `tb_cabang` VALUES ('538', '5300', 'KCP Perniagaan Timur ');
INSERT INTO `tb_cabang` VALUES ('539', '5340', 'KCP Pinangsia ');
INSERT INTO `tb_cabang` VALUES ('540', '0106', 'KCP Pintu Air ');
INSERT INTO `tb_cabang` VALUES ('541', '0441', 'KCP Plaza Sentral ');
INSERT INTO `tb_cabang` VALUES ('542', '0168', 'KCU PLUIT ');
INSERT INTO `tb_cabang` VALUES ('543', '5815', 'KCP Pluit Junction ');
INSERT INTO `tb_cabang` VALUES ('544', '0244', 'KCP Pluit Kencana ');
INSERT INTO `tb_cabang` VALUES ('545', '5810', 'KCP Pluit Mega Mal ');
INSERT INTO `tb_cabang` VALUES ('546', '6020', 'KCP Pluit Samudra ');
INSERT INTO `tb_cabang` VALUES ('547', '0386', 'KCP Pluit Timur ');
INSERT INTO `tb_cabang` VALUES ('548', '0274', 'KCP Pondok Bambu ');
INSERT INTO `tb_cabang` VALUES ('549', '0237', 'KCP Pondok Indah ');
INSERT INTO `tb_cabang` VALUES ('550', '0291', 'KCU PONDOK INDAH ');
INSERT INTO `tb_cabang` VALUES ('551', '6590', 'KCP Prima Sunter ');
INSERT INTO `tb_cabang` VALUES ('552', '7530', 'KCP PRJ Kemayoran ');
INSERT INTO `tb_cabang` VALUES ('553', '0275', 'KCP Pulogadung ');
INSERT INTO `tb_cabang` VALUES ('554', '7080', 'KCP Pulogadung Trade Center ');
INSERT INTO `tb_cabang` VALUES ('555', '6430', 'KCP Puri Deltamas ');
INSERT INTO `tb_cabang` VALUES ('556', '0288', 'KCU PURI INDAH ');
INSERT INTO `tb_cabang` VALUES ('557', '7030', 'KCP Puri Kembangan ');
INSERT INTO `tb_cabang` VALUES ('558', '5495', 'KCP Puri Mansion ');
INSERT INTO `tb_cabang` VALUES ('559', '6340', 'KCP Raden Saleh ');
INSERT INTO `tb_cabang` VALUES ('560', '0219', 'KCP Radio Dalam ');
INSERT INTO `tb_cabang` VALUES ('561', '7090', 'KCP Rantai Mulia Kencana ');
INSERT INTO `tb_cabang` VALUES ('562', '5250', 'KCP Ratu Plaza ');
INSERT INTO `tb_cabang` VALUES ('563', '0094', 'KCU RAWAMANGUN ');
INSERT INTO `tb_cabang` VALUES ('564', '5790', 'KCP Rawasari ');
INSERT INTO `tb_cabang` VALUES ('565', '0004', 'KCP Regional Tanah Abang ');
INSERT INTO `tb_cabang` VALUES ('566', '6440', 'KCP Ricci ');
INSERT INTO `tb_cabang` VALUES ('567', '0270', 'KCP Roxi Mas ');
INSERT INTO `tb_cabang` VALUES ('568', '0373', 'KCP Roxy Square ');
INSERT INTO `tb_cabang` VALUES ('569', '0075', 'KCP Sabang ');
INSERT INTO `tb_cabang` VALUES ('570', '5750', 'KCP Saharjo ');
INSERT INTO `tb_cabang` VALUES ('571', '5265', 'KCP Sahid Sudirman Residence ');
INSERT INTO `tb_cabang` VALUES ('572', '0477', 'KCP Samanhudi ');
INSERT INTO `tb_cabang` VALUES ('573', '5235', 'KCP Sampoerna Strategic Square ');
INSERT INTO `tb_cabang` VALUES ('574', '0284', 'KCP Sawah Besar ');
INSERT INTO `tb_cabang` VALUES ('575', '5370', 'KCP Seasons City ');
INSERT INTO `tb_cabang` VALUES ('576', '5540', 'KCP Sejati Mulia ');
INSERT INTO `tb_cabang` VALUES ('577', '5345', 'KCP Semanggi ');
INSERT INTO `tb_cabang` VALUES ('578', '5005', 'KCP Senayan City ');
INSERT INTO `tb_cabang` VALUES ('579', '0091', 'KCP Senen ');
INSERT INTO `tb_cabang` VALUES ('580', '7540', 'KCP Sentra Puri Indah ');
INSERT INTO `tb_cabang` VALUES ('581', '8780', 'KCP Sentral Cikini ');
INSERT INTO `tb_cabang` VALUES ('582', '7660', 'KCP Setiabudi Atrium ');
INSERT INTO `tb_cabang` VALUES ('583', '6000', 'KCP Soepomo ');
INSERT INTO `tb_cabang` VALUES ('584', '0035', 'KCU SUDIRMAN ');
INSERT INTO `tb_cabang` VALUES ('585', '5245', 'KCP Sudirman Park ');
INSERT INTO `tb_cabang` VALUES ('586', '5385', 'KCP Summitmas ');
INSERT INTO `tb_cabang` VALUES ('587', '6500', 'KCP Sunrise Garden ');
INSERT INTO `tb_cabang` VALUES ('588', '0093', 'KCP Sunter ');
INSERT INTO `tb_cabang` VALUES ('589', '5820', 'KCP Sunter Bisma ');
INSERT INTO `tb_cabang` VALUES ('590', '0419', 'KCP Sunter Danau ');
INSERT INTO `tb_cabang` VALUES ('591', '0428', 'KCU SUNTER MALL ');
INSERT INTO `tb_cabang` VALUES ('592', '0261', 'KCU SURYOPRANOTO ');
INSERT INTO `tb_cabang` VALUES ('593', '5225', 'KCP Talavera ');
INSERT INTO `tb_cabang` VALUES ('594', '0489', 'KCP Taman Aries ');
INSERT INTO `tb_cabang` VALUES ('595', '0277', 'KCU TAMAN DUTA MAS ');
INSERT INTO `tb_cabang` VALUES ('596', '5380', 'KCP Taman Harapan Indah ');
INSERT INTO `tb_cabang` VALUES ('597', '5310', 'KCP Taman Kencana ');
INSERT INTO `tb_cabang` VALUES ('598', '7570', 'KCP Taman Palem Lestari ');
INSERT INTO `tb_cabang` VALUES ('599', '0490', 'KCP Taman Permata Buana ');
INSERT INTO `tb_cabang` VALUES ('600', '7630', 'KCP Taman Permata Indah II ');
INSERT INTO `tb_cabang` VALUES ('601', '0162', 'KCP Taman Ratu ');
INSERT INTO `tb_cabang` VALUES ('602', '0285', 'KCP Taman Sari ');
INSERT INTO `tb_cabang` VALUES ('603', '5490', 'KCP Taman Semanan Indah ');
INSERT INTO `tb_cabang` VALUES ('604', '5000', 'KCP Taman Sunter Indah ');
INSERT INTO `tb_cabang` VALUES ('605', '6540', 'KCP Tanah Abang 2 ');
INSERT INTO `tb_cabang` VALUES ('606', '8390', 'KCP Tanah Abang Blok A ');
INSERT INTO `tb_cabang` VALUES ('607', '5335', 'KCP Tanah Abang Blok B ');
INSERT INTO `tb_cabang` VALUES ('608', '0336', 'KCP Tanah Abang Zona 3 ');
INSERT INTO `tb_cabang` VALUES ('609', '0076', 'KCP Tanjung Duren ');
INSERT INTO `tb_cabang` VALUES ('610', '7050', 'KCP Tanjung Duren 2 ');
INSERT INTO `tb_cabang` VALUES ('611', '0007', 'KCU TANJUNG PRIOK ');
INSERT INTO `tb_cabang` VALUES ('612', '0092', 'KCP Tebet ');
INSERT INTO `tb_cabang` VALUES ('613', '0436', 'KCP Tebet Barat ');
INSERT INTO `tb_cabang` VALUES ('614', '6270', 'KCP Tebet Barat 2 ');
INSERT INTO `tb_cabang` VALUES ('615', '6290', 'KCP Tebet Timur ');
INSERT INTO `tb_cabang` VALUES ('616', '5320', 'KCP Telepon Kota ');
INSERT INTO `tb_cabang` VALUES ('617', '0481', 'KCP Teluk Mas ');
INSERT INTO `tb_cabang` VALUES ('618', '0206', 'KCU THAMRIN ');
INSERT INTO `tb_cabang` VALUES ('619', '5395', 'KCP Thamrin Nine ');
INSERT INTO `tb_cabang` VALUES ('620', '7100', 'KCP Tiang Bendera ');
INSERT INTO `tb_cabang` VALUES ('621', '0310', 'KCP Tomang Raya ');
INSERT INTO `tb_cabang` VALUES ('622', '0073', 'KCP Tomang Tol ');
INSERT INTO `tb_cabang` VALUES ('623', '0482', 'KCP Untar I ');
INSERT INTO `tb_cabang` VALUES ('624', '0483', 'KCP Untar II ');
INSERT INTO `tb_cabang` VALUES ('625', '6470', 'KCP Utama Raya ');
INSERT INTO `tb_cabang` VALUES ('626', '5800', 'KCP Utan Kayu ');
INSERT INTO `tb_cabang` VALUES ('627', '0028', 'KCU WAHID HASYIM ');
INSERT INTO `tb_cabang` VALUES ('628', '0478', 'KCP Wahid Hasyim ');
INSERT INTO `tb_cabang` VALUES ('629', '5520', 'KCP Warung Buncit ');
INSERT INTO `tb_cabang` VALUES ('630', '0084', 'KCU WISMA ASIA ');
INSERT INTO `tb_cabang` VALUES ('631', '5435', 'KCP Wisma Barito ');
INSERT INTO `tb_cabang` VALUES ('632', '0006', 'KCU WISMA GKBI ');
INSERT INTO `tb_cabang` VALUES ('633', '0459', 'KCP Wisma Indocement ');
INSERT INTO `tb_cabang` VALUES ('634', '0005', 'KCU WISMA MILLENIA ');
INSERT INTO `tb_cabang` VALUES ('635', '5035', 'KCP Wisma Mulia ');
INSERT INTO `tb_cabang` VALUES ('636', '7340', 'KCP Wisma Nusantara ');
INSERT INTO `tb_cabang` VALUES ('637', '5325', 'KCP Wisma Pondok Indah II ');
INSERT INTO `tb_cabang` VALUES ('638', '0491', 'KCP Wisma Relasi ');
INSERT INTO `tb_cabang` VALUES ('639', '5240', 'KCP Wolter Mongisidi ');
INSERT INTO `tb_cabang` VALUES ('640', '8790', 'KCP WTC Mangga Dua ');
INSERT INTO `tb_cabang` VALUES ('641', '5455', 'KCP WTC Sudirman ');
INSERT INTO `tb_cabang` VALUES ('642', '6910', 'KCP Yos Sudarso ');

-- ----------------------------
-- Table structure for `tb_call`
-- ----------------------------
DROP TABLE IF EXISTS `tb_call`;
CREATE TABLE `tb_call` (
  `call_idx` int(11) NOT NULL AUTO_INCREMENT,
  `sched_idx` int(11) NOT NULL DEFAULT '0',
  `call_nama_admin` varchar(16) DEFAULT NULL,
  `call_date` date NOT NULL,
  `call_konfirm` varchar(16) NOT NULL,
  `call_cp_lain` varchar(64) NOT NULL,
  `call_telp_lain` varchar(64) NOT NULL,
  `call_keterangan` text NOT NULL,
  `call_status` text,
  PRIMARY KEY (`call_idx`),
  KEY `tb_call_sched_idx_fk` (`sched_idx`),
  CONSTRAINT `tb_call_sched_idx_fk` FOREIGN KEY (`sched_idx`) REFERENCES `tb_schedule` (`sched_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_call
-- ----------------------------
INSERT INTO `tb_call` VALUES ('10', '6', 'Irwan', '2012-06-25', 'Nasabah Sulit Di', '', '', '', '');
INSERT INTO `tb_call` VALUES ('11', '6', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('12', '7', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('13', '8', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('14', '9', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('17', '12', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('18', '13', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('19', '10', 'Irwan', '2012-06-26', 'Nasabah Sulit Di', '', '', '', '');
INSERT INTO `tb_call` VALUES ('20', '10', 'Irwan', '2012-06-26', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('21', '11', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('22', '11', 'Irwan', '2012-06-26', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('23', '14', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('25', '16', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('26', '17', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('27', '18', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('28', '19', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('31', '22', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('32', '23', 'Irwan', '2012-06-25', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('33', '24', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('34', '15', 'Irwan', '2012-06-25', 'Komputer Rusak', '', '', '', '');
INSERT INTO `tb_call` VALUES ('35', '15', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('36', '20', 'Irwan', '2012-06-25', 'PIN Belum Diteri', '', '', '', '');
INSERT INTO `tb_call` VALUES ('37', '20', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('38', '21', 'Irwan', '2012-06-25', 'Nasabah Sulit Di', '', '', '', '');
INSERT INTO `tb_call` VALUES ('39', '21', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('40', '25', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('41', '26', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('42', '27', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('43', '28', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('44', '29', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('45', '30', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('47', '32', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('48', '31', 'Irwan', '2012-06-22', 'Nasabah Sulit Di', '', '', '', '');
INSERT INTO `tb_call` VALUES ('49', '31', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('51', '33', 'Irwan', '2012-06-22', 'Di Jadwalkan', 'Lily', '0878676532323', 'Nasabah request bahasa Inggris', '');
INSERT INTO `tb_call` VALUES ('52', '33', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('53', '34', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('54', '35', 'Irwan', '2012-06-22', 'Di Jadwalkan', 'Wenny', '081317695705', 'Jl Kelapa Dua - Depok', '');
INSERT INTO `tb_call` VALUES ('55', '36', 'Irwan', '2012-06-22', 'Di Jadwalkan', '', '', '', '');
INSERT INTO `tb_call` VALUES ('57', '37', 'Irwan', '2012-06-22', 'Di Jadwalkan', 'Ebie', '7967867867686', 'Urgent', '');
INSERT INTO `tb_call` VALUES ('58', '37', 'Irwan', '2012-06-22', 'Nasabah Sibuk', '', '', '', '');

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
  `cus_kel` varchar(255) DEFAULT NULL,
  `cus_kec` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES ('42', 'IBSSIOENGS', 'Sioengs Group PT', '', '0033098879', 'Toko Keramik', 'Jl Gunung Sahari XI No 23', 'Vivi', 'Jakarta  Pusat', 'Gunung Sahari Utara', 'Sawah Besar', '10720', '6221- 626 8822', '', '6221- 6263 982', '', 'KCP Ancol', '0211', '', '2012-06-22', 'irwan');
INSERT INTO `tb_customer` VALUES ('43', 'IBSBIBODIP', 'Bina Bodi Prima PT', '', '5890131788', '', 'Gd Bursa Efek Indonesia Tower I, Lt I Suite 110 Jl Jend Sudirman Kav 52-53', 'Ilma Muryani / Michelle T / ', 'Jakarta Selatan', '', '', '12190', '021- 5151 458', '', '021- 5151459', '', 'Pecenongan', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('44', 'IBSCAKRABS', 'Cakra Buana Satria PT', '', '7401047666', '', 'Tubagus M Juhadi N 6 Perum Permai Jl Garuda G No 01 Blok AP 7 Jati Purna', 'Tubagus M J', 'Bekasi Barat', '', '', '17433', '0813 1033 4427', '', '', '', 'Time Square Cibubur', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('45', 'IBSGERBETH', 'Gereja Bethel Indonesia', '', '5210359585', '', 'Jl HBQ Selatan Blok A Komp Gereja No 3 Perum Harapan Baru Regency', 'Andreas Setiawan ', 'Bekasi', '', '', '17133', '021- 480 2605', '', '0877 8078 4866/ 0816 4866 498', '', 'Bulevar Hijau', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('46', 'IBSSUKATMA', 'Sukatman Bin Darmo', '', '1093000246', '', 'PD TB Agung DS Sukamanah', 'Sukatman / Vita Komalasari / ', 'Karawang', '', '', '41361', '0267- 642 904', '', '', '', 'Karawang', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('47', 'IBSSGCKPIN', 'SGCKP Indonesia PT', '', '8760581233', '', 'Jl Jababeka Raya F 34 Cikarang Industrial Estate', 'Sri lestari ', 'Bekasi', '', '', '17530', '021- 8936 786', '', '021- 8936 788', '', 'Ruko Jababeka', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('48', 'IBSPETERKW', 'Peter Kent Winata', '', '3353035939', '', 'Ruko Textile Blok C 1 No 1 Jl Mangga Dua Raya', 'Peter Kent Winata', 'Jakarta Utara', 'Ancol', 'Pademangan', '14430', '021- 6288 585', '', '021- 6288 656', '', 'Mangga Dua Raya', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('49', 'IBSRUDIA54', 'Rudianto', '', '5280276300', '', 'Jl Jelambar Ilir Rt 09/10', 'Rudianto', 'Jakarta Barat', 'Jelambar', 'Grogol Petamburan', '11460', '021- 6344 757', '', '021- 638 655 10', '', 'Jelambar Baru Raya', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('50', 'IBSFRENRUS', 'Frengky Rusli', '', '1683084810', '', 'Jl Pademangan III Gg 18 Rt 07/07 Pedemangan Timur Kec Pademangan', 'Frengky Rusli / Hansen M / Selvi Amelia', 'Jakarta Utara', 'Pademangan Timur', 'Pademangan', '14410', '021- 6471 0899', '', '', '', 'Pluit', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('51', 'IBSLIMINAT', 'Liliyanti Winata', '', '2183644556', '', 'Jl Taman Sari VI No 40 Rt OB Rt 07 Taman Sari', 'Liliyanti Winata ', 'Jakarta Barat', '', '', '', '0811 1507 81', '', '', '', 'Blok A Cipete', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('52', 'IBSINSOEBA', 'Indriyati Soebandi', '', '7610629266', '', 'Jl Gunung Ahank No 12 Rt 04/08', 'Indriyati Soebandi ', 'Tangerang', '', '', '15811', '021- 5468 582', '', '021- 5420 2428', '', 'Supermal Karawaci', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('53', 'IBSINJACAP', 'Indo Jaya Capital PT', '', '6860237588', '', 'Jl Kembang Raya No 16', 'David ', 'Jakarta Pusat', '', '', '10420', '6221- 9420 0261', '', '0812 9192 045', '', 'Kwitang', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('54', 'IBSSISJEND', 'Sistem Jendelaindo PT', '', '6840255300', '', 'Rukan Palaza Jl Benyamin Sueb Kav A 5 blok B 21-23', 'Vera Okthaviani ', 'Jakarta Barat', '', '', '10630', '021- 6570 1640', '', '021- 6570 1641/ 0878 8000 1125', '', 'KEM Tower', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('55', 'IBSBIMMANU', 'Berkat Immanuel Properti PT', '', '7015111879', '', 'Komp City Resort Rukan Malibu Blok J No 21 Cengkareng Timur', 'Liem Siu Lie ', 'Jakarta Barat', '', '', '11730', '021- 2940 5899/ 021- 8026 2659', '', '021-2940 5890/ 0818 76 0043', '', 'City resort', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('56', 'IBSEDDYS17', 'Eddy Suharto/UD Isanva', '', '2603016238', '', 'Jl Latumenten Barat Raya No 6 Grogol', 'Eddy Suharto ', 'Jakarta Barat', '', '', '11460', '021- 5696 1328', '', '0811 177 1138', '', 'Grogol Permai', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('57', 'IBSHADHARA', 'Hadi Rahardja', '', '2772997788', '', 'Kebun Jeruk, Kedoya utara Taman Ratu AA1 No 26', 'Hadi Rahardja', 'Jakarta Barat', 'Kedoya Selatan', 'Kebon Jeruk', '11520', '0816 911 608', '', '', '', 'Taman Duta Mas', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('58', 'IBSHENDICH', 'Hendi Chandi', '', '2770355888', '', 'Kav Polri Blok B 1 No 606 Rt 06/10 Kec Jembar Kec Grogol Petamburan', 'Hendi Chandi', 'Jakarta Barat', '', '', '11460', '0821 6634 8708', '', '', '', 'Taman Duta Mas', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('59', 'IBSKWEEKIA', 'Kwee Kian Bin', '', '6050052425', '', 'Jl Sutera Jelita VI/25 Rt 05/06 Pd Jagungt Timur Serpong Utara', 'Kwee Kian Bin', 'Tangerang', '', '', '15320', '021- 5397 207', '', '0817 7011 207', '', 'Villa Melati Mas', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('60', 'IBSBUSUBUR', 'Buana Subur Lestari PT', '', '4970718180', '', 'Kavling Ocean Walk Blok CBG Lot 6 Lengkong Gudang, Serpong', 'Livia', 'Tangerang', '', '', '15321', '021- 2940 4955', '', '021- 2940 4966', '', 'Serpong', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('61', 'IBSFAMAKMU', 'Fajar Makmur Perkasa PT', '', '6050302464', '', 'Villa Melati Mas Blok G IX/16', 'Agus', 'Tangerang', '', '', '', '021 -5370 855', '', '021- 5384 023', '', 'Villa Melati Mas', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('62', 'IBSTKENLES', 'Tahana Kencana Lestari PT', '', '4970720605', '', 'RGB Boulevard Blok U 8 BSD City', 'Lydiana Santoso', 'Tangerang', '', '', '15310', '021- 531 634 02', '', '021- 5316 3403/0816 193 1121', '', 'Serpong', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('63', 'IBPPTCCSIN', 'CCS Indonesia PT', '', '', '', 'Wisma Millenia Lt 4 Jl MT Haryono', 'Sri ', 'Jakarta Selatan', '', '', '', '0813 150 806 88', '', '0813 2248 5188/ 0857 2210 5998', '', '', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('71', 'IBPFRARIKA', 'Fransisca Rika Andriani', '', '5260339585', '', 'Jl Tanah Abang II /76 Rt 02/05 Petoto Selatan Gambir', 'Eddyanto Hadisurjo / Wihadi', 'Jakarta Selatan', '', '', '', '021-530 6956', '', '021- 5367 965/ 0812 9195 228', '', 'KS Tubun', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('72', 'IBSZYREXIN', 'Zyrexindo Mandiri Buana PT', '', '1382337474', '', 'Jl Daan Mogot No 69', 'Tony / Tony', 'Jakarta Barat', 'Tanjung Duren Selatan', 'Grogol Petamburan', '11470', '021- 565 3311', '', '', '', 'Daan Mogot', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('73', 'IBSGALIPRA', 'Galilea Pratama PT', '', '5345037800', '', 'Podomoro City Grand Shopping Arcade Blok B 8Dh Rt 00/00 Kel Tanjung Duren Selatan Kec Petamburan', 'Haryanto / Sony Lauren /', 'Jakarta Barat', 'Tanjung Duren Selatan', 'Grogol Petamburan', '11470', '0821 2285 8107', '', '', '', 'Semanggi', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('74', 'IBSHARPASE', 'Harpa Sekawan PT', '', '7150726888', '', 'Cipinang Muara No.47 Jakarta Timur', 'A Susetya', 'Jakarta Selatan', 'Menteng Dalam', 'Tebet', '12870', '021- 819 2263', '', '', '', 'Menara Bidakara', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('75', 'IBSROCKETA', 'Rockit Aldeway PT', '', '4503077879', '', 'Komp Royal Parade Blok C1', 'Harry S / Mira Y', 'Jakarta Utara', '', '', '', '021- 831 6247', '', '', '', 'Nusantara', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('76', 'IBSLAUWHOK', 'Lauw Hok Tjiang', '', '8690955955', '', 'Jl Siliwangi No 10 G5 Flamboyan Pnacoran Mas Rt 03/07', 'Lauw Hok Tjiang', 'Depok', '', '', '16431', '0812 8299 7171', '', '0818 550 99', '', 'Margonda', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('77', 'IBSCASPUTR', 'Cahaya Surya Putra Abadi PT', '', '5285036833', '', 'Jl Lodan Raya Blok B No 18-19 Komp lodan Center', 'Djiauw Frenky', 'Jakarta Utara', 'Ancol', 'Pademangan', '14430', '021- 691 8899', '', '021- 6983 3388', '', 'Lodan Center', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('78', 'IBSBRISSKO', 'Briss & Skots Indonesia PT', '', '2863017190', '', 'Graha Mustika Ratu Lt 10 Jl Jend Gatot Subroto 74-45', 'Mb AlmaR Rini S', 'Jakarta Selatan', 'Menteng Dalam', 'Tebet', '12870', '021- 8370 7100', '', '021- 8370 7101/ 0815 102 854 79', '', 'Menara Bidakara', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('79', 'IBSASTIKAI', 'Astika Indonesia PT', '', '4503064408', '', 'Jl Lamandau IV No 18 Kramat Pela Keb Baru', 'Dita Susanti', 'Jakarta Selatan', 'Kramat Pela', 'Kebayoran Baru', '12130', '021- 7222 225', '', '021- 7245 350/ 0816 1386 030', '', 'Kemang', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('80', 'IBSUSGALAN', 'Usaha Galang Bersama CV', '', '5210315588', '', 'Pondok Ungu Permai Blok B 20 Utara Kalibalang Tengah,', 'Ismantoro', 'Bekasi', '', '', '17125', '021- 8888 1028', '', '0813 9885 5855', '', 'Bulevard Hijau', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('81', 'IBSACHMADT', 'Achmad Taufik', '', '5745033811', '', 'Bumi Teluk Jember  W no 23 Rt 01/12 Karawang', 'Achmad Taufik', 'Karawang', '', '', '41361', '0813 1530 8311', '', '6267- 643 325', '', 'Karawang Teparev', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('82', 'IBSCATRAPI', 'Catra Pilar Persada PT', '', '5210322339', '', 'Harapan Indah Komp Ruko Garaha Blok H No 8 Kel Pusakarakyat Kec Taruma Jaya', 'Bambang Setia Budi', 'Bekasi', '', '', '17214', '021- 292 837 66', '', '0813 1872 8723', '', 'Bulevard Hijau', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('83', 'IBSDAWANAA', 'Karya Dawana Jaya PT', '', '4583040881', '', 'Jl Jend Sudirman Kav 52-53 Gd BEJ Tower 2 Lt 17', 'Tata Taswana / David /', 'Jakarta Selatan', 'Senayan', 'Kebayoran Baru', '12190', '021- 5157 603', '', '', '', 'Bursa Efek Jakarta', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('84', 'IBSMUNCHYI', 'Munchy Indonesia PT', '', '6890255939', '', 'Jl Mh Thamrin No 9 Cikokol', 'Raphael L', 'Jakarta Selatan', '', '', '15117', '021- 5548 103', '', '021- 5481 04', '', 'Mh Thamrin Tangerang', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('85', 'IBSRRMINTE', 'RRM International PT', '', '7660288044', '', 'Jl Jend Sudirman Kav 75 Wisma Bumiputera Lt 17', 'Iriatna Dewi', 'Jakarta Selatan', 'Setiabudi', 'Setia Budi', '12910', '021- 5271 325', '', '021- 5271 083', '', 'Setiabudi Atrium', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('86', 'IBSANTARRI', 'Antar Indo Tour PT', '', '5045041945', '', 'Jl H Samali No 31, Pancoran Kali Bata Rt 04/04', 'Anne Rusdini', 'Jakarta Selatan', 'Kalibata', 'Pancoran', '12740', '021- 794 0806', '', '', '', 'Menara Gracia', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('87', 'IBPMULNUSA', 'Multi Royal Nusajaya PT', '', '2414132342', '', 'Jl Aditya Warman No 38A Keb Baru JAkartA Selatan', 'Tia', 'Jakarta Selatan', '', '', '', '0816 161 2594', '', '0815 1355 3353', '', 'KCP Ancol', '0211', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('88', 'IBPDUSINTI', 'Duta Suara Inti Prima PT', '', '0753002861', '', 'Jl H Agus Salim No 26F', 'Felisa Wijaya / Betty Herawati /', 'Jakarta Selatan', 'Kebon Sirih', 'Menteng', '10340', '021- 310 1011', '', '021- 3192 7095', '', 'Sabang', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('89', 'IBPSEJAHSU', 'Sejahtera Sahabat Utama PT', '', '5475047777', '', 'Jl Artenatif Cikeas Nagrak Rt 02/02 Gunung Sahari', 'Tjoa Han Hwa', 'Bogor', '', '', '16967', '081 362 370', '', '021- 8234 678 salah sambung', '', 'Graha Raya Bintaro', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('90', 'IBPAGROJAY', 'Agro Jaya Mandiri PT', '', '0933062888', '', 'Rukan Sunter Permai Jl Agung Perkasa 10 Blok B No 17 Rt 14 Kel Sunter Agung', 'Paulus', 'Jakarta Utara', 'Sunter Agung', 'Tanjung Priok', '14350', '021- 65151 40', '', '021- 6515 140', '', 'Sunter', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('91', 'IBPGRAWIBA', 'Grahaagung Wibawa PT', '', '7380422888', '', 'Jl Achmad Yoni No 1 Lt Basement Plaza Jambu Dua', 'Caroline; Levin Kwee / Landjarwati / Kwee Suo Chie', 'Bogor', '', '', '16153', '0251- 833 7492', '', '0251- 833 4464', '', 'Pajajaran', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('92', 'IBSPTRAMAN', 'Raya Mandiri PT', '', '6080400088', '', 'Jati Bunder Rt 14/14 Kebun Melati Tanah Abang', 'M Nurrohman / Yulianti Chandra / ', 'Jakarta Pusat', '', '', '', '021- 4167 6006', '', '0812 80 884 885', '', 'Bona Indah', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('93', 'IBSSURIASS', 'Suria Sukses Sempurna PT', '', '7350311500', '', 'Gd Teja Buana Lt Jl Petang Raya No 29', 'Abuzzal Abusaeri / Shanty', 'Jakarta Selatan', 'Kebon Sirih', 'Menteng', '10340', '021- 5785 3763', '', '', '', 'Menteng', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('94', 'IBSVISIOUS', 'Visious Indonesia PT', '', '2913065557', '', 'Ruko Bana Indah Plaza Blok A2/C1 Lt U Jl Karang Tengah Raya, Lebak Bulus', 'Rendy Agung / Sagoro Dharmawan / Rege Luhur; Tri Rahmat Gunadi; Sutra Oktaviani', 'Jakarta Selatan', 'Kebayoran Lama Selatan', 'Kebayoran Lama', '12240', '021- 7090 232', '', '', '', 'Pondok Indah', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('95', 'IBSMULIAGU', 'Muliadi Gunawan', '', '6840019266', '', 'Jl Krekot Jaya Blok B III No 20 Rt 03/07', 'W Anggarwati L K / Susanti Goenawan / Muliadi Gunawan', 'Jakarta Pusat', '', '', '', '021- 654 0023', '', '0815 995 2710', '', 'Kem Tower', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('96', 'IBSANGSUIU', 'Ang Sui Un', '', '5215020298', '', 'Gang Mesjid I Dalam No 12 A Rt 03/05', 'Ang Sui Un', 'Jakarta Barat', 'Angke', 'Tambora', '11330', '0838 9229 8472', '', '', '', 'Permata Kota', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('97', 'IBSERWIN04', 'Erwin', '', '8390059168', '', 'Blok A Lt L 05 No 36 C Pasar Tanah Abang Blok A', 'Erwin', 'Jakarta  Pusat', 'Kampung Bali', 'Tanah Abang', '10250', '0815 872 8808', '', '', '', 'Tanah Abang Blok A', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('98', 'IBSUPRIYAN', 'Supriyanto Drh', '', '8720143322', '', 'Billabong Blok J/19 Rt 03/08 Kel/DS Cimanggis Kec Bojong Gede', 'Supriyanto Drh / Febe Athalia Agnar', 'Bogor', '', '', '16320', '0811 366 580/ 0251- 753 8082', '', '', '', 'Raya Baru Bogor', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('99', 'IBSTANHEBE', 'Tan Henry Benyamin', '', '5880232969', '', 'Jl Mh Thamrin Km 7 Komp Pergudangan Multiguna Blok C /1', 'Tan Henry Benyamin', 'Tangerang', '', '', '', '021- 5399 321', '', '021- 539 7051/ 0818 11 0909', '', 'Mangga Besar Raya', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('100', 'IBSSHOHAND', 'Sho Mario Handoko', '', '3691140642', '', 'Jl Mangga Besar XI /26B rt 11/01 Kel Tongki Kec Taman Sari', 'Sho Mario Handoko', 'Jakarta Barat', 'Tangki', 'Taman Sari', '11170', '021- 649 4634', '', '', '', 'Pasar Tanah Abang', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('101', 'IBSKARTONO', 'Kartono', '', '1513598883', '', 'Jl Ucadi I No 8 Rt 04/04', 'Kartono', 'Jakarta Barat', '', '', '', '021- 6499 369', '', '0856 9152 4668', '', 'Mangga Besar', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('102', 'IBSBONGFON', 'Bong Tjoan Fong', '', '5885139199', '', 'Pancoran Jayakarta komp Ruko 129 Blok C 45', 'Bong Tjoan Fong', 'Jakarta Selatan', '', '', '10780', '0816 994 793', '', '021- 624 5937', '', 'Lintedeves Trade Center', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('103', 'IBSZHONGYI', 'Zhong Yi', '', '1941265877', '', 'Apt Cemp Mas Blok F', 'Zhong Yi', 'Jakarta  Pusat', 'Mangga Dua Selatan', 'Sawah Besar', '10730', '0813 98888 988', '', '021- 6240 468/ 021 6220 3244', '', 'Pangeran Jayakarta', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('104', 'IBSCVBIGLO', 'Bina Glorindo CV', '', '4975669999', '', 'Villa Melati Mas Blok 1 No 10 No 27 Serpong', 'Budi Bintoro W', 'Tangerang', '', '', '15326', '021- 531 535 11', '', '0813 8683 3888', '', 'Serpong', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('105', 'IBSJANUDAR', 'Januar K Darmawan IR', '', '5890181009', '', 'Jl Raya Babakan Madang No 29 Sentul', 'Dr IR Januar K D', 'Bogor', '', '', '16810', '021- 8795 1806', '', '021- 8795 0425', '', 'Pecenongan', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('106', 'IBSCVOMEMO', 'Omega Motor CV', '', '0953062990', '', 'Jl Pulo Empang 39', 'Rukanda', 'Bogor', '', '', '', '0251- 835 1439', '', '0251- 835 1439', '', 'Bogor', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('107', 'IBSPTSEJAL', 'Sejahtera Alam Hijau PT', '', '5735055833', '', 'Komp IPB Baranagsiang IV Blok C 62 Tanah Baru', 'Jany / Fatimah / ', 'Bogor', '', '', '16154', '0251- 8310 657', '', '0251- 8310 657/ 0816 1414 956', '', 'Puri Begawan', '', '', '2012-06-25', '');
INSERT INTO `tb_customer` VALUES ('108', 'IBSDUAKARY', 'Duamitra Karya Gemilang PT', '', '6560730720', '', 'Jl Meruya Ilir Raya No 88 Komp Bussines Park Blok C 1-10 Meruya utara Kembangan', 'Kisnadi', 'Jakarta Barat', 'Meruya Utara (Ilir)', 'Kembangan', '11620', '021- 3006 7806', '', '021- 5890 8334', '', 'Bussines Park', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('109', 'IBSYIPWING', 'Yip Chuen Wing', '', '1941871688', '', 'Jl P Jayakarta No 19 Kel Pinagsia rt 08/04', 'Yip Chuen Wing', 'Jakarta Barat', 'Pinangsia', 'Taman Sari', '11110', '021- 624 522', '', '0815 1133 16880', '', 'Pangeran Jayakarta', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('110', 'IBSDIATKUR', 'Diat Kurnia Djasa', '', '2103033110', '', 'Jl Bangka II B Pela Mampang, Mampang Prapatan', 'Diat Kurnia D / Agus Minhadi /', 'Jakarta Selatan', 'Pela Mampang', 'Mampang Prapatan', '12720', '021- 7179 4570', '', '', '', 'Mongosidi', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('111', 'IBSSUPDOOR', 'Super Door PT', '', '5380311170', '', 'Jl Jelambar Selatan II No 39 Kel Jelambar Baru', 'Oei Ivana', 'Jakarta Barat', 'Jelambar', 'Grogol Petamburan', '11460', '0818 938 881', '', '021- 566 3707/ 21- 5675 846', '', 'Taman Harapan Indah', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('112', 'IBSDAIKIAI', 'Daikin Airconditioning Indo PT', '', '5810488788', '', 'Jl Pangeran Jayakarta No 137 Kel Mangga Dua Selatan Kec Sawah Besar', 'Margareth Andriani', 'Jakarta Selatan', '', '', '', '021- 65920 055/ 021- 623 079 977', '', '021- 623 07 975', '', 'Pluit Mega Mal', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('113', 'IBSTHODWIO', 'Thomas Dwiono H', '', '3212131231', '', 'Bukit Rinaria B4/7 Rt 02/13 Kel Bedahan', 'Thomas Dwiono H', 'Jakarta Selatan', '', '', '', '0812 1200 106', '', '', '', 'Cilegon II', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('114', 'IBSSUS2803', 'Susanti', '', '6520278000', '', 'Lim Jombang wetan Jl A Yani No 32', 'Susanti', 'Cilegon', '', '', '42411', '', '', '', '', 'Cilegon II', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('115', 'IBSALTARIN', 'AltArindo Durya Kastara PT', '', '5315051115', '', 'Jl Sultan Iskandar Muda Gandaria 8 Office tower Lt 10 unit c', 'Sinforianus Diego S', 'Jakarta Selatan', '', '', '', '021- 2930 3602 tlp salah sambung', '', '021- 8379 6496', '', 'Iskandar Muda II', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('116', 'IBSTANSAN1', 'Tan San I', '', '2881663131', '', 'Taman Alfa Indah Blok I IV/G', 'Tan San I', 'Jakarta Selatan', 'Petukangan Utara', 'Pesanggrahan', '12260', '0816 75 8888', '', '0819 759 8888', '', 'Puri Indah', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('117', 'IBSTARICAR', 'Tan Richard', '', '2883337778', '', 'Jl Tulip Rt 07/04 Wijaya Kusuma Grogol Petamburan', 'Tan Richard', 'Jakarta Utara', '', '', '', '0812 1947 777', '', '021- 5890 3456', '', 'Puri Indah', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('118', 'IBSBSUHEND', 'Budihasin Suhanda', '', '8630481988', '', 'Jl Tanjung Biru No 9 Villa duta', 'Sheila Suhanda', 'Bogor', '', '', '16143', '0813 8159 3477', '', '', '', 'Margonda', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('119', 'IBSBPWEUNI', 'Biro P Wisata Eunice PT', '', '5050305530', '', 'The Bellezza Shopping Arcade Unit 1,05 Jl Let Jend Soepomo No 34', 'Wiwin Widaningsih / Kukuh Karyantoro', 'Jakarta Selatan', 'Grogol Utara', 'Kebayoran Lama', '12210', '021- 3048 5516/ 0821 1119 6200', '', '021- 3048 5517/ 0813 8214 7773', '', 'ITC Permata Hijau', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('120', 'IBSYUSGUNA', 'Yusuf Gunawan', '', '4783022179', '', 'Tanjung Durin utara No 7', 'Yusuf Gunawan', 'Jakarta Barat', '', '', '', '021- 5696 6148/ 021- 7075 7444', '', '021- 5698 0711/ 0816 1147 730', '', 'Wahid Hasyim', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('121', 'IBSCVMETKE', 'Metro Kencana Abadi CV', '', '8800388342', '', 'Jl Raya Villa Pamulang Blok CH7/8 Pamulang', 'Anang Suratman', 'Tangerang', '', '', '', '021- 2923 7282', '', '', '', 'Pondok Cabe Mutiara', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('122', 'IBPTSMATTA', 'TSM Attacment PT', '', '2183812009', '', 'Jl Pluit Selatan Raya No 52', 'Darian Djohan / Suheri /', 'Jakarta Utara', 'Pejagalan', 'Penjaringan', '14450', '021- 661 6288', '', '', '', 'Blok A Cipete', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('123', 'IBPBUDINUG', 'S Budi Nugraha Se', '', '6040859959', '', 'PT Graha Harapan Auto Service Jl Bhayangkara Raya No 46', 'Nur Ayeni A / S Budi Nugh', 'Tangerang', '', '', '15324', '021-  5396 311', '', '021- 531 22 603', '', 'Alam Sutra', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('124', 'IBPGUNHUSE', 'Gunawan husen', '', '4900299180', '', 'Jl Rubi Blok B 1 No 8 Rt 02/01 Puri Media, kembangan', 'Gunawan husen', 'Jakarta Barat', 'Kembangan Selatan', 'Kembangan', '11610', '0816 1969 588', '', '', '', 'Taman Permata Buana', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('125', 'IBPLAMIASY', 'Lamia Sylvanie', '', '0953050002', '', 'Jl Pangrango No 16', 'Lamia Sylvanie', 'Bogor', '', '', '16151', '0251- 8338 909/ 0811 1182 01', '', '0251- 833 8908', '', 'Bogor', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('126', 'IBSVALENTE', 'Valentinus Tedjasukmana', '', '6380333919', '', 'Citra 2 Ext Blok B 1 3/17 Rt 11/02 Kel Pegandungan Kec Kalideres', 'Valentinus Tedjasukmana / Iwan Firmanto S', 'Jakarta Barat', '', '', '', '0818 125 811', '', '', '', 'Graha Kirana', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('127', 'IBSMUVELLI', 'Muvell Inti Media PT', '', '5225034050', '', 'Talavera Office Park Lt 28 Jl TB Simatupang Kav 22-26', 'Aristya Perdana / Brasta Juan S /', 'Jakarta Selatan', 'Cilandak Barat', 'Cilandak', '12430', '021-  7179 0569', '', '021- 7179 0569', '', 'Talavera', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('128', 'IBSWARKEUT', 'Wahana Kreasi Utama PT', '', '4593070011', '', 'Wisma Indosemen Lt 11 Jl Jend Sudirman Kav 70-71', 'Toar Christopher A Palit / Sugianto Santoso /', 'Jakarta Selatan', 'Setiabudi', 'Setia Budi', '12910', '021- 450 8551', '', '0817 0237 77', '', 'Wisma Indocement', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('129', 'IBSCVCHIKA', 'ChikaraCV', '', '6830236889', '', 'Jl Raya Cibinong No 26 Rt 04/07 Kel Pabuaran Kec Cibinong, Kabupaten Bogor', 'Lie Eliawati S', 'Cibinong', '', '', '', '021- 8791 5749', '', '021- 8750 541/ 0838 9868 4571', '', 'Pasar Cibinong', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('130', 'IBSRICKYKD', 'Ricky Karyanata Dianto', '', '3353031330', '', 'Kav Polri Blok E II/1303 Rt 02/02 Jelambar, Grogol Petamburan', 'Ricky Karyanata D', 'Jakarta Barat', 'Jelambar Baru', 'Grogol Petamburan', '11460', '021- 3200 2220', '', '0815 1010 9070', '', 'Mangga Dua Raya', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('131', 'IBSANDISA1', 'Andi Santoso', '', '7460081801', '', 'Agung Sedayu Blok J No 8', 'Siek Wan Chin', 'Jakarta Barat', '', '', '', '021- 6128 755', '', '0811 827 509', '', 'Agung Sedayu II', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('132', 'IBSGUNAWI6', 'Gunadi Widjaja', '', '2703020607', '', 'Jl Ciujung No 3 Cideng Barat', 'Syamsiah / Gunadi Widjaja / Stefanie S', 'Jakarta Selatan', 'Cideng', 'Gambir', '10150', '0812 1026 2888', '', '0878 7820 0688', '', 'Roxi Mas', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('133', 'IBSJONNYJS', 'Jonny Justan Setiawan', '', '5910722231', '', 'Raja Bursa Mobil Mangga Dua Square LG DD Lot L 10 Jl Gunung Sahri Raya No 1', 'Jonny Justan S', 'Jakarta Utara', 'Pademangan Barat', 'Pademangan', '14420', '021- 6231 3422', '', '0815 8802 581', '', 'Mangga Dua Square', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('134', 'IBSGLOANGE', 'Global Angel Indonesia PT', '', '4185017884', '', 'GD Wisma Metropolitan II Lt 6 Jl Jend Sudirman Kav 29-31', 'Pommy H / Lim Po Sen', 'Jakarta Selatan', 'Gandaria Selatan', 'Cilandak', '12420', '0817 1890 0583', '', '', '', 'Central Park', '', '', '2012-06-26', 'irwan');
INSERT INTO `tb_customer` VALUES ('135', 'IBSNISAOKk', 'IRWAN', '0989827267262762', '9732189788', '', 'Jl.Meruya Ilir', 'Irwan', 'Jakarta Utara', 'Kebon Bawang', 'Tanjung Priok', '14320', '021-7329765', '', '02191348395', '', 'KCP Ancol', '0211', 'irwan@jadin.com', '2012-06-22', 'irwan');
INSERT INTO `tb_customer` VALUES ('136', 'IBSFRANSIS', 'Pesta Impian', '986675674566546465464646464646', '3245465757', 'Fashion', 'Jl Nanas I No 36, Utan Kayu utara', 'Tanti / Sisca', 'Jakarta Timur', 'Utan Kayu Selatan', 'Matraman', '13120', '021 8562162', '021 8562162', '08174845715', '021 8562162', 'KCP Gunung Sahari', '0212', 'sisca@jadinpratama.com', '2012-06-22', 'irwan');
INSERT INTO `tb_customer` VALUES ('137', 'IBSFITAAAA', 'Indomobil', '638269573976072046ui', '9320609868', 'Perdagangan Otomotif', 'Jl Kedoya Utara', 'Fita', 'Jakarta Utara', 'Kebon Bawang', 'Tanjung Priok', '14320', '4675768686', '58687979', '69697008080', '', 'KCP Bandengan Utara Raya', '5830', 'fita@jadinpratama.com', '2012-06-22', 'irwan');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_engineer
-- ----------------------------
INSERT INTO `tb_engineer` VALUES ('10', 'Irwan Subaya', '1988-12-26', 'Jl. Rawa Bunga VII No.28 Rt. 05/02 Pondok Kacang Barat Ciledug Tangerang Selatan', '1234567890', '021-7329765', '021-28763637');
INSERT INTO `tb_engineer` VALUES ('11', 'yugi', '1988-01-05', 'Jl. maju Mundur 3 X depan belakang kena', '12345', '021-73156354', '08567826536542');
INSERT INTO `tb_engineer` VALUES ('12', 'Adrian', '1988-06-16', 'Jl. Maju', '2147483647', '', '');
INSERT INTO `tb_engineer` VALUES ('13', 'Andi', '1988-06-16', 'Jl. Mundur', '2147483647', '', '');
INSERT INTO `tb_engineer` VALUES ('14', 'Badri', '1988-06-16', 'Jl. Meteran', '2147483647', '', '');
INSERT INTO `tb_engineer` VALUES ('15', 'Hanggoro', '1987-06-11', 'Jl. Bekasi Barat', '2147483647', '', '');
INSERT INTO `tb_engineer` VALUES ('16', 'Eko', '1987-06-11', 'Jl. Bekasi timur', '2147483647', '', '');
INSERT INTO `tb_engineer` VALUES ('17', 'Sigit', '1987-06-25', 'Jl. Bekasi Barat', '2147483647', '', '');
INSERT INTO `tb_engineer` VALUES ('18', 'Tirta', '1988-06-23', 'Jl. Rawa Bunga', '2147483647', '', '');
INSERT INTO `tb_engineer` VALUES ('19', 'Dudi', '1987-06-02', 'Jl. Jangkrik', '2147483647', '', '');
INSERT INTO `tb_engineer` VALUES ('20', 'Andi K', '1988-06-09', 'Jl. H.basir', '2147483647', '', '');
INSERT INTO `tb_engineer` VALUES ('21', 'Ricki', '1989-06-16', 'Jl. Regensi raya', '42425435', '', '');

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
  PRIMARY KEY (`key_idx`,`key_id`),
  KEY `tb_key_cus_idx_fk` (`cus_idx`),
  KEY `tb_key_pkt_idx_fk` (`pkt_idx`),
  CONSTRAINT `tb_key_cus_idx_fk` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_key_pkt_idx_fk` FOREIGN KEY (`pkt_idx`) REFERENCES `tb_paket` (`pkt_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_key
-- ----------------------------
INSERT INTO `tb_key` VALUES ('1', '74', '42', '1565504538', 'Vivi Liemowa', '0000-00-00');
INSERT INTO `tb_key` VALUES ('2', '76', '44', '1567944233', 'Tubagus M J', '0000-00-00');
INSERT INTO `tb_key` VALUES ('3', '75', '43', '1567944240', 'Ilma Muryani', '0000-00-00');
INSERT INTO `tb_key` VALUES ('4', '75', '43', '1567944257', 'Michelle T', '0000-00-00');
INSERT INTO `tb_key` VALUES ('5', '105', '73', '1567876510', 'Haryanto', '0000-00-00');
INSERT INTO `tb_key` VALUES ('6', '105', '73', '1567876527', 'Sony Lauren', '0000-00-00');
INSERT INTO `tb_key` VALUES ('7', '106', '74', '1567876749', 'A Susetya', '0000-00-00');
INSERT INTO `tb_key` VALUES ('8', '107', '75', '1567876701', 'Harry S', '0000-00-00');
INSERT INTO `tb_key` VALUES ('9', '107', '75', '1567876718', 'Mira Y', '0000-00-00');
INSERT INTO `tb_key` VALUES ('10', '113', '81', '1567876565', 'Achmad Taufik', '0000-00-00');
INSERT INTO `tb_key` VALUES ('11', '115', '83', '1567876534', 'Tata Taswana', '0000-00-00');
INSERT INTO `tb_key` VALUES ('12', '115', '83', '1567876541', 'David', '0000-00-00');
INSERT INTO `tb_key` VALUES ('13', '116', '84', '1567876497', 'Raphael L', '0000-00-00');
INSERT INTO `tb_key` VALUES ('14', '117', '85', '1567876480', 'Iriatna Dewi', '0000-00-00');
INSERT INTO `tb_key` VALUES ('15', '118', '86', '1567876473', 'Anne Rusdini', '0000-00-00');
INSERT INTO `tb_key` VALUES ('16', '121', '89', '1567929858', 'Tjoa Han Hwa', '0000-00-00');
INSERT INTO `tb_key` VALUES ('17', '122', '90', '1567930045', 'Paulus', '0000-00-00');
INSERT INTO `tb_key` VALUES ('18', '123', '91', '1567928448', 'Caroline;', '0000-00-00');
INSERT INTO `tb_key` VALUES ('19', '123', '91', '1567928455', 'Levin Kwee', '0000-00-00');
INSERT INTO `tb_key` VALUES ('20', '123', '91', '1567928479', 'Landjarwati', '0000-00-00');
INSERT INTO `tb_key` VALUES ('21', '124', '92', '1567942864', 'M Nurrohman', '0000-00-00');
INSERT INTO `tb_key` VALUES ('22', '124', '92', '1567942871', 'Yulianti Chandra', '0000-00-00');
INSERT INTO `tb_key` VALUES ('23', '125', '93', '1567929469', 'Abuzzal Abusaeri', '0000-00-00');
INSERT INTO `tb_key` VALUES ('24', '125', '93', '1567929476', 'Shanty', '0000-00-00');
INSERT INTO `tb_key` VALUES ('25', '126', '94', '1567390083', 'Rendy Agung', '0000-00-00');
INSERT INTO `tb_key` VALUES ('26', '126', '94', '1567930090', 'Sagoro Dharmawan', '0000-00-00');
INSERT INTO `tb_key` VALUES ('27', '126', '94', '1567930106', 'Rege Luhur', '0000-00-00');
INSERT INTO `tb_key` VALUES ('28', '126', '94', '156793144', 'Tri Rahmat Gunadi', '0000-00-00');
INSERT INTO `tb_key` VALUES ('29', '126', '94', '1567930151', 'Sutra Oktaviani', '0000-00-00');
INSERT INTO `tb_key` VALUES ('30', '131', '99', '1567929902', 'Tan Henry Benyamin', '0000-00-00');
INSERT INTO `tb_key` VALUES ('31', '133', '101', '1567929889', 'Kartono', '0000-00-00');
INSERT INTO `tb_key` VALUES ('32', '135', '103', '1567929865', 'Zhong Yi', '0000-00-00');
INSERT INTO `tb_key` VALUES ('33', '137', '105', '1567929834', 'Dr IR Januar K D', '0000-00-00');
INSERT INTO `tb_key` VALUES ('34', '138', '106', '1567929643', 'Rukanda', '0000-00-00');
INSERT INTO `tb_key` VALUES ('35', '141', '109', '1567929599', 'Yip Chuen Wing', '0000-00-00');
INSERT INTO `tb_key` VALUES ('36', '142', '110', '1567929575', 'Diat Kurnia D', '0000-00-00');
INSERT INTO `tb_key` VALUES ('37', '142', '110', '1567929582', 'Agus Minhadi', '0000-00-00');
INSERT INTO `tb_key` VALUES ('38', '143', '111', '1567929568', 'Oei Ivana', '0000-00-00');
INSERT INTO `tb_key` VALUES ('39', '144', '112', '1567929551', 'Margareth Andriani', '0000-00-00');
INSERT INTO `tb_key` VALUES ('40', '152', '120', '1567929360', 'Yusuf Gunawan', '0000-00-00');
INSERT INTO `tb_key` VALUES ('41', '153', '121', '1567942857', 'Anang Suratman', '0000-00-00');
INSERT INTO `tb_key` VALUES ('42', '77', '45', '1567944226', 'Andreas Setiawan', '0000-00-00');
INSERT INTO `tb_key` VALUES ('43', '89', '57', '1567943281', 'Hadi Rahardja', '0000-00-00');
INSERT INTO `tb_key` VALUES ('44', '94', '62', '1567943205', 'Lydiana Santoso', '0000-00-00');
INSERT INTO `tb_key` VALUES ('45', '154', '122', '1567943144', 'Darian Djohan', '0000-00-00');
INSERT INTO `tb_key` VALUES ('46', '154', '122', '1567943151', 'Suheri', '0000-00-00');
INSERT INTO `tb_key` VALUES ('47', '156', '124', '1567943915', 'Gunawan husen', '0000-00-00');
INSERT INTO `tb_key` VALUES ('48', '161', '129', '1567951705', 'Lie Eliawati S', '0000-00-00');
INSERT INTO `tb_key` VALUES ('49', '162', '130', '1567967850', 'Ricky Karyanata D', '0000-00-00');
INSERT INTO `tb_key` VALUES ('50', '163', '131', '1567967843', 'Siek Wan Chin', '0000-00-00');
INSERT INTO `tb_key` VALUES ('51', '164', '132', '1567944301', 'Syamsiah', '0000-00-00');
INSERT INTO `tb_key` VALUES ('52', '164', '132', '1567967812', 'Gunadi Widjaja', '0000-00-00');
INSERT INTO `tb_key` VALUES ('53', '164', '132', '1567967829', 'Stefanie S', '0000-00-00');
INSERT INTO `tb_key` VALUES ('54', '92', '60', '1567943236', 'Livia', '0000-00-00');
INSERT INTO `tb_key` VALUES ('55', '93', '61', '1567943229', 'Agus', '0000-00-00');
INSERT INTO `tb_key` VALUES ('56', '155', '123', '1567943182', 'Nur Ayeni A', '0000-00-00');
INSERT INTO `tb_key` VALUES ('57', '155', '123', '1567943199', 'S Budi Nugh', '0000-00-00');
INSERT INTO `tb_key` VALUES ('58', '157', '125', '1142132432', 'Lamia Sylvanie', '0000-00-00');
INSERT INTO `tb_key` VALUES ('59', '158', '126', '1567943090', 'Valentinus Tedjasukmana', '0000-00-00');
INSERT INTO `tb_key` VALUES ('60', '158', '126', '1567943106', 'Iwan Firmanto S', '0000-00-00');
INSERT INTO `tb_key` VALUES ('61', '159', '127', '1567943168', 'Aristya Perdana', '0000-00-00');
INSERT INTO `tb_key` VALUES ('62', '159', '127', '1567943175', 'Brasta Juan S', '0000-00-00');
INSERT INTO `tb_key` VALUES ('63', '160', '128', '1567934250', 'Toar Christopher A Palit', '0000-00-00');
INSERT INTO `tb_key` VALUES ('64', '160', '128', '1567943267', 'Sugianto Santoso', '0000-00-00');
INSERT INTO `tb_key` VALUES ('65', '110', '78', '1567876596', 'Mb AlmaR Rini S', '0000-00-00');
INSERT INTO `tb_key` VALUES ('66', '108', '76', '1567876695', 'Lauw Hok Tjiang', '0000-00-00');
INSERT INTO `tb_key` VALUES ('67', '104', '72', '1567876275', 'Tony', '0000-00-00');
INSERT INTO `tb_key` VALUES ('68', '104', '72', '1567876828', 'Tony', '0000-00-00');
INSERT INTO `tb_key` VALUES ('69', '103', '71', '1567876725', 'Eddyanto Hadisurjo', '0000-00-00');
INSERT INTO `tb_key` VALUES ('70', '103', '71', '1567876723', 'Wihadi', '0000-00-00');
INSERT INTO `tb_key` VALUES ('71', '95', '63', '1414234234', 'Sri', '0000-00-00');
INSERT INTO `tb_key` VALUES ('72', '114', '82', '1567876558', 'Bambang Setia Budi', '0000-00-00');
INSERT INTO `tb_key` VALUES ('74', '109', '77', '1567876688', 'Djiauw Frenky', '0000-00-00');
INSERT INTO `tb_key` VALUES ('75', '119', '87', '2314324343', 'Irwan', '0000-00-00');
INSERT INTO `tb_key` VALUES ('76', '166', '134', '1567944271', 'Pommy H', '0000-00-00');
INSERT INTO `tb_key` VALUES ('77', '166', '134', '1567944288', 'Lim Po Sen', '0000-00-00');
INSERT INTO `tb_key` VALUES ('78', '165', '133', '1567944295', 'Jonny Justan S', '0000-00-00');
INSERT INTO `tb_key` VALUES ('79', '83', '51', '1567944127', 'Liliyanti Winata', '0000-00-00');
INSERT INTO `tb_key` VALUES ('80', '82', '50', '1567944134', 'Frengky Rusli', '0000-00-00');
INSERT INTO `tb_key` VALUES ('81', '82', '50', '1567944141', 'Hansen M', '0000-00-00');
INSERT INTO `tb_key` VALUES ('82', '82', '50', '1567944127', 'Selvi Amelia', '0000-00-00');
INSERT INTO `tb_key` VALUES ('83', '81', '49', '1567944172', 'Rudianto', '0000-00-00');
INSERT INTO `tb_key` VALUES ('84', '80', '48', '1567944189', 'Peter Kent Winata', '0000-00-00');
INSERT INTO `tb_key` VALUES ('85', '79', '47', '1567944196', 'Sri lestari', '0000-00-00');
INSERT INTO `tb_key` VALUES ('86', '78', '46', '1567944202', 'Sukatman', '0000-00-00');
INSERT INTO `tb_key` VALUES ('87', '78', '46', '1567944219', 'Vita Komalasari', '0000-00-00');
INSERT INTO `tb_key` VALUES ('88', '150', '118', '1567929391', 'Sheila Suhanda', '0000-00-00');
INSERT INTO `tb_key` VALUES ('89', '149', '117', '1567929421', 'Tan Richard', '0000-00-00');
INSERT INTO `tb_key` VALUES ('90', '148', '116', '1567929438', 'Tan San I', '0000-00-00');
INSERT INTO `tb_key` VALUES ('91', '147', '115', '1567929483', 'Sinforianus Diego S', '0000-00-00');
INSERT INTO `tb_key` VALUES ('92', '146', '114', '1567929490', 'Susanti', '0000-00-00');
INSERT INTO `tb_key` VALUES ('93', '145', '113', '1567929520', 'Thomas Dwiono H', '0000-00-00');
INSERT INTO `tb_key` VALUES ('94', '112', '80', '1567876572', 'Ismantoro', '0000-00-00');
INSERT INTO `tb_key` VALUES ('95', '127', '95', '1567929964', 'W Anggarwati L K', '0000-00-00');
INSERT INTO `tb_key` VALUES ('96', '127', '95', '1567929971', 'Susanti Goenawan', '0000-00-00');
INSERT INTO `tb_key` VALUES ('97', '127', '95', '1567929988', 'Muliadi Gunawan', '0000-00-00');
INSERT INTO `tb_key` VALUES ('98', '128', '96', '1567929957', 'Ang Sui Un', '0000-00-00');
INSERT INTO `tb_key` VALUES ('99', '120', '88', '1567929445', 'Felisa Wijaya', '0000-00-00');
INSERT INTO `tb_key` VALUES ('100', '120', '88', '1567983452', 'Betty Herawati', '0000-00-00');
INSERT INTO `tb_key` VALUES ('101', '129', '97', '1567929933', 'Erwin', '0000-00-00');
INSERT INTO `tb_key` VALUES ('102', '130', '98', '1567929919', 'Supriyanto Drh', '0000-00-00');
INSERT INTO `tb_key` VALUES ('103', '130', '98', '1567929926', 'Febe Athalia Agnar', '0000-00-00');
INSERT INTO `tb_key` VALUES ('104', '132', '100', '1567929896', 'Sho Mario Handoko', '0000-00-00');
INSERT INTO `tb_key` VALUES ('105', '134', '102', '1567929872', 'Bong Tjoan Fong', '0000-00-00');
INSERT INTO `tb_key` VALUES ('106', '136', '104', '1567929841', 'Budi Bintoro W', '0000-00-00');
INSERT INTO `tb_key` VALUES ('107', '140', '108', '1567929605', 'Kisnadi', '0000-00-00');
INSERT INTO `tb_key` VALUES ('108', '151', '119', '1567929377', 'Wiwin Widaningsih', '0000-00-00');
INSERT INTO `tb_key` VALUES ('109', '151', '119', '1567929384', 'Kukuh Karyantoro', '0000-00-00');
INSERT INTO `tb_key` VALUES ('110', '91', '59', '1567943243', 'Kwee Kian Bin', '0000-00-00');
INSERT INTO `tb_key` VALUES ('111', '167', '135', '2142141241', 'irwan', '0000-00-00');
INSERT INTO `tb_key` VALUES ('112', '111', '135', '1567876589', 'Dita Susanti', '0000-00-00');
INSERT INTO `tb_key` VALUES ('113', '168', '136', '3254656577', 'Sisca Wahyudiana', '0000-00-00');
INSERT INTO `tb_key` VALUES ('114', '169', '137', '6465757767', 'fita', '0000-00-00');

-- ----------------------------
-- Table structure for `tb_kodepos`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kodepos`;
CREATE TABLE `tb_kodepos` (
  `kodepos_idx` int(11) NOT NULL AUTO_INCREMENT,
  `kodepos_no` int(11) NOT NULL,
  `kodepos_kel` varchar(255) NOT NULL,
  `kodepos_kec` varchar(255) NOT NULL,
  `kodepos_kota` varchar(255) NOT NULL,
  PRIMARY KEY (`kodepos_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=537 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kodepos
-- ----------------------------
INSERT INTO `tb_kodepos` VALUES ('269', '12840', 'Bukit Duri', 'Tebet', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('270', '12830', 'Kebon Baru', 'Tebet', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('271', '12850', 'Manggarai', 'Tebet', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('272', '12860', 'Manggarai Selatan', 'Tebet', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('273', '12870', 'Menteng Dalam', 'Tebet', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('274', '12810', 'Tebet Barat', 'Tebet', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('275', '12820', 'Tebet Timur', 'Tebet', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('276', '14320', 'Kebon Bawang', 'Tanjung Priok', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('277', '14340', 'Papanggo', 'Tanjung Priok', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('278', '14330', 'Sungai Bambu', 'Tanjung Priok', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('279', '14350', 'Sunter Agung', 'Tanjung Priok', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('280', '14360', 'Sunter Jaya', 'Tanjung Priok', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('281', '14310', 'Tanjung Priok', 'Tanjung Priok', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('282', '14370', 'Warakas', 'Tanjung Priok', 'Jakarta Utara ');
INSERT INTO `tb_kodepos` VALUES ('283', '10210', 'Bendungan Hilir', 'Tanah Abang', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('284', '10270', 'Gelora', 'Tanah Abang', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('285', '10250', 'Kampung Bali', 'Tanah Abang', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('286', '10220', 'Karet Tengsin', 'Tanah Abang', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('287', '10240', 'Kebon Kacang', 'Tanah Abang', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('288', '10230', 'Kebon Melati', 'Tanah Abang', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('289', '10260', 'Petamburan', 'Tanah Abang', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('290', '11330', 'Angke', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('291', '11270', 'Duri Selatan', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('292', '11270', 'Duri Utara', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('293', '11320', 'Jembatan Besi', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('294', '11250', 'Jembatan Lima', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('295', '11310', 'Kali Anyar', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('296', '11260', 'Krendang', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('297', '11240', 'Pekojan', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('298', '11230', 'Roa Malaka', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('299', '11220', 'Tambora', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('300', '11210', 'Tanah Sereal', 'Tambora', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('301', '11120', 'Glodok', 'Taman Sari', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('302', '11130', 'Keagungan', 'Taman Sari', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('303', '11140', 'Krukut', 'Taman Sari', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('304', '11180', 'Mangga Besar', 'Taman Sari', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('305', '11160', 'Maphar', 'Taman Sari', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('306', '11110', 'Pinangsia', 'Taman Sari', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('307', '11150', 'Taman Sari', 'Taman Sari', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('308', '11170', 'Tangki', 'Taman Sari', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('309', '12980', 'Guntur', 'Setia Budi', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('310', '12920', 'Karet', 'Setia Budi', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('311', '12940', 'Karet Kuningan', 'Setia Budi', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('312', '12930', 'Karet Semanggi', 'Setia Budi', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('313', '12950', 'Kuningan Timur', 'Setia Budi', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('314', '12960', 'Menteng Atas', 'Setia Budi', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('315', '12970', 'Pasar Manggis', 'Setia Budi', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('316', '12910', 'Setiabudi', 'Setia Budi', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('317', '10460', 'Bungur', 'Senen', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('318', '10430', 'Kenari', 'Senen', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('319', '10450', 'Kramat', 'Senen', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('320', '10420', 'Kwitang', 'Senen', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('321', '10440', 'Paseban', 'Senen', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('322', '10410', 'Senen', 'Senen', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('323', '10720', 'Gunung Sahari Utara', 'Sawah Besar', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('324', '10740', 'Karang Anyar', 'Sawah Besar', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('325', '10750', 'Kartini', 'Sawah Besar', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('326', '10730', 'Mangga Dua Selatan', 'Sawah Besar', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('327', '10710', 'Pasar Baru', 'Sawah Besar', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('328', '13240', 'Cipinang', 'Pulo Gadung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('329', '13220', 'Jati', 'Pulo Gadung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('330', '13250', 'Jatinegara Kaum', 'Pulo Gadung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('331', '13210', 'Kayu Putih', 'Pulo Gadung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('332', '13230', 'Pisangan Timur', 'Pulo Gadung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('333', '13260', 'Pulo Gadung', 'Pulo Gadung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('334', '13220', 'Rawamangun', 'Pulo Gadung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('335', '12330', 'Bintaro', 'Pesanggrahan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('336', '12320', 'Pesanggrahan', 'Pesanggrahan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('337', '12270', 'Petukangan Selatan', 'Pesanggrahan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('338', '12260', 'Petukangan Utara', 'Pesanggrahan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('339', '12250', 'Ulujami', 'Pesanggrahan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('340', '14470', 'Kamal Muara', 'Penjaringan', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('341', '14460', 'Kapuk Muara', 'Penjaringan', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('342', '14450', 'Pejagalan', 'Penjaringan', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('343', '14440', 'Penjaringan', 'Penjaringan', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('344', '14450', 'Pluit', 'Penjaringan', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('345', '13780', 'Baru', 'Pasar Rebo', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('346', '13770', 'Cijantung', 'Pasar Rebo', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('347', '13760', 'Gedong', 'Pasar Rebo', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('348', '13790', 'Kalisari', 'Pasar Rebo', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('349', '13710', 'Pekayon', 'Pasar Rebo', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('350', '12560', 'Cilandak Timur', 'Pasar Minggu', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('351', '12540', 'Jati Padang', 'Pasar Minggu', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('352', '12520', 'Kebagusan', 'Pasar Minggu', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('353', '12520', 'Pasar Minggu', 'Pasar Minggu', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('354', '12510', 'Pejaten Barat', 'Pasar Minggu', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('355', '12510', 'Pejaten Timur', 'Pasar Minggu', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('356', '12550', 'Ragunan', 'Pasar Minggu', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('357', '12770', 'Cikoko', 'Pancoran', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('358', '12760', 'Duren Tiga', 'Pancoran', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('359', '12740', 'Kalibata', 'Pancoran', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('360', '12780', 'Pancoran', 'Pancoran', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('361', '12770', 'Pengadegan', 'Pancoran', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('362', '12750', 'Rawa Jati', 'Pancoran', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('363', '11430', 'Jatipulo', 'Palmerah', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('364', '11480', 'Kemanggisan', 'Palmerah', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('365', '11420', 'Kota Bambu Selatan', 'Palmerah', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('366', '11420', 'Kota Bambu Utara', 'Palmerah', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('367', '11480', 'Palmerah', 'Palmerah', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('368', '11410', 'Slipi', 'Palmerah', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('369', '14430', 'Ancol', 'Pademangan', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('370', '14420', 'Pademangan Barat', 'Pademangan', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('371', '14410', 'Pademangan Timur', 'Pademangan', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('372', '10330', 'Cikini', 'Menteng', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('373', '10350', 'Gondangdia', 'Menteng', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('374', '10340', 'Kebon Sirih', 'Menteng', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('375', '10310', 'Menteng', 'Menteng', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('376', '10320', 'Pegangsaan', 'Menteng', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('377', '13130', 'Kayu Manis', 'Matraman', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('378', '13150', 'Kebon Manggis', 'Matraman', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('379', '13140', 'Pal Meriam', 'Matraman', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('380', '13110', 'Pisangan Baru', 'Matraman', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('381', '13120', 'Utan Kayu Selatan', 'Matraman', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('382', '13120', 'Utan Kayu Utara', 'Matraman', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('383', '12730', 'Bangka', 'Mampang Prapatan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('384', '12710', 'Kuningan Barat', 'Mampang Prapatan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('385', '12790', 'Mampang Prapatan', 'Mampang Prapatan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('386', '12720', 'Pela Mampang', 'Mampang Prapatan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('387', '12790', 'Tegal Parang', 'Mampang Prapatan', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('388', '13620', 'Cipinang Melayu', 'Makasar', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('389', '13610', 'Halim Perdana Kusumah', 'Makasar', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('390', '13650', 'Kebon Pala', 'Makasar', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('391', '13570', 'Makasar', 'Makasar', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('392', '13560', 'Pinang Ranti', 'Makasar', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('393', '13530', 'Balekambang', 'Kramat Jati', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('394', '13520', 'Batuampar', 'Kramat Jati', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('395', '13630', 'Cawang', 'Kramat Jati', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('396', '13640', 'Cililitan', 'Kramat Jati', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('397', '13550', 'Dukuh', 'Kramat Jati', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('398', '13540', 'Kampung Tengah', 'Kramat Jati', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('399', '13510', 'Kramat Jati', 'Kramat Jati', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('400', '14220', 'Koja Selatan', 'Koja', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('401', '14210', 'Koja Utara', 'Koja', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('402', '14270', 'Lagoa', 'Koja', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('403', '14230', 'Rawa Badak Selatan', 'Koja', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('404', '14230', 'Rawa Badak Utara', 'Koja', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('405', '14260', 'Tugu Selatan', 'Koja', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('406', '14260', 'Tugu Utara', 'Koja', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('407', '14540', 'Pulau Harapan', 'Kepulauan Seribu Utara', 'Kepulauan Seribu');
INSERT INTO `tb_kodepos` VALUES ('408', '14540', 'Pulau Kelapa', 'Kepulauan Seribu Utara', 'Kepulauan Seribu');
INSERT INTO `tb_kodepos` VALUES ('409', '14530', 'Pulau Panggang', 'Kepulauan Seribu Utara', 'Kepulauan Seribu');
INSERT INTO `tb_kodepos` VALUES ('410', '14520', 'Pulau Pari', 'Kepulauan Seribu Selatan', 'Kepulauan Seribu');
INSERT INTO `tb_kodepos` VALUES ('411', '14520', 'Pulau Tidung', 'Kepulauan Seribu Selatan', 'Kepulauan Seribu');
INSERT INTO `tb_kodepos` VALUES ('412', '14510', 'Pulau Untung Jawa', 'Kepulauan Seribu Selatan', 'Kepulauan Seribu');
INSERT INTO `tb_kodepos` VALUES ('413', '11640', 'Joglo', 'Kembangan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('414', '11610', 'Kembangan Selatan', 'Kembangan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('415', '11610', 'Kembangan Utara', 'Kembangan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('416', '11650', 'Meruya Selatan (Udik)', 'Kembangan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('417', '11620', 'Meruya Utara (Ilir)', 'Kembangan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('418', '11630', 'Srengseng', 'Kembangan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('419', '10640', 'Cempaka Baru', 'Kemayoran', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('420', '10610', 'Gunung Sahari Selatan', 'Kemayoran', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('421', '10640', 'Harapan Mulya', 'Kemayoran', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('422', '10630', 'Kebon Kosong', 'Kemayoran', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('423', '10620', 'Kemayoran', 'Kemayoran', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('424', '10650', 'Serdang', 'Kemayoran', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('425', '10640', 'Sumur Batu', 'Kemayoran', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('426', '10650', 'Utan Panjang', 'Kemayoran', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('427', '14240', 'Kelapa Gading Barat', 'Kelapa Gading', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('428', '14240', 'Kelapa Gading Timur', 'Kelapa Gading', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('429', '14250', 'Pegangsaan Dua', 'Kelapa Gading', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('430', '11510', 'Duri Kepa', 'Kebon Jeruk', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('431', '11530', 'Kebon Jeruk', 'Kebon Jeruk', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('432', '11520', 'Kedoya Selatan', 'Kebon Jeruk', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('433', '11520', 'Kedoya Utara', 'Kebon Jeruk', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('434', '11550', 'Kelapa Dua', 'Kebon Jeruk', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('435', '11560', 'Sukabumi Selatan (Udik)', 'Kebon Jeruk', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('436', '11540', 'Sukabumi Utara (Ilir)', 'Kebon Jeruk', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('437', '12230', 'Cipulir', 'Kebayoran Lama', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('438', '12220', 'Grogol Selatan', 'Kebayoran Lama', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('439', '12210', 'Grogol Utara', 'Kebayoran Lama', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('440', '12240', 'Kebayoran Lama Selatan', 'Kebayoran Lama', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('441', '12240', 'Kebayoran Lama Utara', 'Kebayoran Lama', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('442', '12310', 'Pondok Pinang', 'Kebayoran Lama', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('443', '12150', 'Cipete Utara', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('444', '12140', 'Gandaria Utara', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('445', '12120', 'Gunung', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('446', '12130', 'Kramat Pela', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('447', '12160', 'Melawai', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('448', '12170', 'Petogogan', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('449', '12160', 'Pulo', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('450', '12180', 'Rawa Barat', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('451', '12110', 'Selong', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('452', '12190', 'Senayan', 'Kebayoran Baru', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('453', '11840', 'Kalideres', 'Kalideres', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('454', '11810', 'Kamal', 'Kalideres', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('455', '11830', 'Pegadungan', 'Kalideres', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('456', '11850', 'Semanan', 'Kalideres', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('457', '11820', 'Tegal Alur', 'Kalideres', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('458', '10530', 'Galur', 'Johar Baru', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('459', '10560', 'Johar Baru', 'Johar Baru', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('460', '10550', 'Kampung Rawa', 'Johar Baru', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('461', '10540', 'Tanah Tinggi', 'Johar Baru', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('462', '13310', 'Bali Mester', 'Jatinegara', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('463', '13330', 'Bidaracina', 'Jatinegara', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('464', '13410', 'Cipinang Besar Selatan', 'Jatinegara', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('465', '13410', 'Cipinang Besar Utara', 'Jatinegara', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('466', '13340', 'Cipinang Cempedak', 'Jatinegara', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('467', '13420', 'Cipinang Muara', 'Jatinegara', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('468', '13320', 'Kampung Melayu', 'Jatinegara', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('469', '13350', 'Rawa Bunga', 'Jatinegara', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('470', '12630', 'Ciganjur', 'Jagakarsa', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('471', '12630', 'Cipedak', 'Jagakarsa', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('472', '12620', 'Jagakarsa', 'Jagakarsa', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('473', '12630', 'Lenteng Agung', 'Jagakarsa', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('474', '12640', 'Srengseng Sawah', 'Jagakarsa', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('475', '12530', 'Tanjung Barat', 'Jagakarsa', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('476', '11450', 'Grogol', 'Grogol Petamburan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('477', '11460', 'Jelambar', 'Grogol Petamburan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('478', '11460', 'Jelambar Baru', 'Grogol Petamburan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('479', '11470', 'Tanjung Duren Selatan', 'Grogol Petamburan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('480', '11470', 'Tanjung Duren Utara', 'Grogol Petamburan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('481', '11440', 'Tomang', 'Grogol Petamburan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('482', '11460', 'Wijaya Kusuma', 'Grogol Petamburan', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('483', '10150', 'Cideng', 'Gambir', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('484', '10140', 'Duri Pulo', 'Gambir', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('485', '10110', 'Gambir', 'Gambir', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('486', '10120', 'Kebon Kelapa', 'Gambir', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('487', '10160', 'Petojo Selatan', 'Gambir', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('488', '10130', 'Petojo Utara', 'Gambir', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('489', '13440', 'Duren Sawit', 'Duren Sawit', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('490', '13470', 'Klender', 'Duren Sawit', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('491', '13460', 'Malaka Jaya', 'Duren Sawit', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('492', '13460', 'Malaka Sari', 'Duren Sawit', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('493', '13430', 'Pondok Bambu', 'Duren Sawit', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('494', '13450', 'Pondok Kelapa', 'Duren Sawit', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('495', '13460', 'Pondok Kopi', 'Duren Sawit', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('496', '13720', 'Cibubur', 'Ciracas', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('497', '13740', 'Ciracas', 'Ciracas', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('498', '13730', 'Kelapa Dua Wetan', 'Ciracas', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('499', '13830', 'Rambutan', 'Ciracas', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('500', '13750', 'Susukan', 'Ciracas', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('501', '13890', 'Bambu Apus', 'Cipayung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('502', '13820', 'Ceger', 'Cipayung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('503', '13870', 'Cilangkap', 'Cipayung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('504', '13840', 'Cipayung', 'Cipayung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('505', '13810', 'Lubang Buaya', 'Cipayung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('506', '13850', 'Munjul', 'Cipayung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('507', '13860', 'Pondok Rangon', 'Cipayung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('508', '13880', 'Setu', 'Cipayung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('509', '14120', 'Cilincing', 'Cilincing', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('510', '14110', 'Kali Baru', 'Cilincing', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('511', '14150', 'Marunda', 'Cilincing', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('512', '14140', 'Rorotan', 'Cilincing', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('513', '14130', 'Semper Barat', 'Cilincing', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('514', '14130', 'Semper Timur', 'Cilincing', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('515', '14140', 'Sukapura', 'Cilincing', 'Jakarta Utara');
INSERT INTO `tb_kodepos` VALUES ('516', '12430', 'Cilandak Barat', 'Cilandak', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('517', '12410', 'Cipete Selatan', 'Cilandak', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('518', '12420', 'Gandaria Selatan', 'Cilandak', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('519', '12440', 'Lebak Bulus', 'Cilandak', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('520', '12450', 'Pondok Labu', 'Cilandak', 'Jakarta Selatan');
INSERT INTO `tb_kodepos` VALUES ('521', '11730', 'Cengkareng Barat', 'Cengkareng', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('522', '11730', 'Cengkareng Timur', 'Cengkareng', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('523', '11750', 'Duri Kosambi', 'Cengkareng', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('524', '11720', 'Kapuk', 'Cengkareng', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('525', '11710', 'Kedaung Kali Angke', 'Cengkareng', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('526', '11740', 'Rawa Buaya', 'Cengkareng', 'Jakarta Barat');
INSERT INTO `tb_kodepos` VALUES ('527', '10520', 'Cempaka Putih Barat', 'Cempaka Putih', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('528', '10510', 'Cempaka Putih Timur', 'Cempaka Putih', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('529', '10570', 'Rawasari', 'Cempaka Putih', 'Jakarta Pusat');
INSERT INTO `tb_kodepos` VALUES ('530', '13910', 'Cakung Barat', 'Cakung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('531', '13910', 'Cakung Timur', 'Cakung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('532', '13930', 'Jatinegara', 'Cakung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('533', '13940', 'Penggilingan', 'Cakung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('534', '13950', 'Pulo Gebang', 'Cakung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('535', '13920', 'Rawa Terate', 'Cakung', 'Jakarta Timur');
INSERT INTO `tb_kodepos` VALUES ('536', '13960', 'Ujung Menteng', 'Cakung', 'Jakarta Timur');

-- ----------------------------
-- Table structure for `tb_konfirm`
-- ----------------------------
DROP TABLE IF EXISTS `tb_konfirm`;
CREATE TABLE `tb_konfirm` (
  `konfirm_idx` int(11) NOT NULL AUTO_INCREMENT,
  `konfirm_nama` text NOT NULL,
  PRIMARY KEY (`konfirm_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_konfirm
-- ----------------------------
INSERT INTO `tb_konfirm` VALUES ('1', '');
INSERT INTO `tb_konfirm` VALUES ('2', 'Nasabah Sibuk');
INSERT INTO `tb_konfirm` VALUES ('3', 'Komputer Rusak');
INSERT INTO `tb_konfirm` VALUES ('4', 'Nasabah Sulit Dihubungi');
INSERT INTO `tb_konfirm` VALUES ('5', 'PIN Belum Diterima');
INSERT INTO `tb_konfirm` VALUES ('6', 'Di Jadwalkan');

-- ----------------------------
-- Table structure for `tb_kota`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kota`;
CREATE TABLE `tb_kota` (
  `kota_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(255) NOT NULL,
  PRIMARY KEY (`kota_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
INSERT INTO `tb_kota` VALUES ('16', 'Depok');
INSERT INTO `tb_kota` VALUES ('17', 'Bekasi');

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
  `pkt_konfirm` text NOT NULL,
  PRIMARY KEY (`pkt_idx`),
  KEY `tb_paket_cus_idx_fk` (`cus_idx`),
  CONSTRAINT `tb_paket_cus_idx_fk` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_paket
-- ----------------------------
INSERT INTO `tb_paket` VALUES ('74', '42', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Reschedule');
INSERT INTO `tb_paket` VALUES ('75', '43', 'single_otorisasi', 'gold', 'new', '2', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Pending');
INSERT INTO `tb_paket` VALUES ('76', '44', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Pending');
INSERT INTO `tb_paket` VALUES ('77', '45', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('78', '46', 'single_otorisasi', 'gold', 'new', '2', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('79', '47', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('80', '48', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('81', '49', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('82', '50', 'single_otorisasi', 'gold', 'new', '3', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('83', '51', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('84', '52', 'Single Otorisasi', 'Single Otorisasi', '', '1', '2012-06-21', '2012-06-22', '0000-00-00', '2012-06-25', '', 'Follow Up');
INSERT INTO `tb_paket` VALUES ('85', '53', 'Single Otorisasi', 'Single Otorisasi', '', '1', '2012-06-21', '2012-06-22', '0000-00-00', '2012-06-25', '', 'Follow Up');
INSERT INTO `tb_paket` VALUES ('86', '54', 'Single Otorisasi', 'Single Otorisasi', '', '1', '2012-06-21', '2012-06-22', '0000-00-00', '2012-06-25', '', 'Follow Up');
INSERT INTO `tb_paket` VALUES ('87', '55', 'Single Otorisasi', 'Single Otorisasi', '', '1', '2012-06-21', '2012-06-22', '0000-00-00', '2012-06-25', '', 'Follow Up');
INSERT INTO `tb_paket` VALUES ('88', '56', 'Single Otorisasi', 'Single Otorisasi', '', '1', '2012-06-21', '2012-06-22', '0000-00-00', '2012-06-25', '', 'Follow Up');
INSERT INTO `tb_paket` VALUES ('89', '57', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('90', '58', 'Single Otorisasi', 'Single Otorisasi', '', '1', '2012-06-21', '2012-06-22', '0000-00-00', '2012-06-25', '', 'Follow Up');
INSERT INTO `tb_paket` VALUES ('91', '59', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Pending');
INSERT INTO `tb_paket` VALUES ('92', '60', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('93', '61', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('94', '62', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('95', '63', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('103', '71', 'multi_otorisasi', 'gold_payroll', 'new', '2', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('104', '72', 'multi_otorisasi', 'gold', 'new', '2', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('105', '73', 'single_otorisasi', 'gold', 'new', '2', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('106', '74', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('107', '75', 'single_otorisasi', 'gold', 'new', '2', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('108', '76', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('109', '77', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('110', '78', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Pending');
INSERT INTO `tb_paket` VALUES ('111', '135', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2022-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('112', '80', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('113', '81', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('114', '82', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('115', '83', 'single_otorisasi', 'gold', 'new', '2', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('116', '84', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('117', '85', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('118', '86', 'single_otorisasi', 'gold', 'new', '1', '2012-06-19', '2012-06-20', '2012-06-25', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('119', '87', 'single_otorisasi', 'gold', 'info_bca', '1', '2012-06-25', '2012-06-25', '2012-06-28', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('120', '88', 'single_otorisasi', 'gold_payroll', 'new', '2', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('121', '89', 'single_otorisasi', 'gold_payroll', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('122', '90', 'single_otorisasi', 'gold_payroll', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('123', '91', 'single_otorisasi', 'gold_payroll', 'amplop', '3', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('124', '92', 'multi_otorisasi', 'gold', 'new', '2', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('125', '93', 'multi_otorisasi', 'gold', 'new', '2', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('126', '94', 'single_otorisasi', 'gold', 'new', '5', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('127', '95', 'single_otorisasi', 'gold', 'new', '3', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('128', '96', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('129', '97', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('130', '98', 'single_otorisasi', 'gold', 'new', '2', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('131', '99', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('132', '100', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('133', '101', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('134', '102', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('135', '103', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('136', '104', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('137', '105', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('138', '106', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('139', '107', 'Gold Single', 'Gold Single', '', '2', '2012-06-20', '2012-06-21', '0000-00-00', '2012-06-25', '', 'Follow Up');
INSERT INTO `tb_paket` VALUES ('140', '108', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('141', '109', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('142', '110', 'single_otorisasi', 'gold', 'new', '2', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('143', '111', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('144', '112', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('145', '113', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('146', '114', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('147', '115', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('148', '116', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('149', '117', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('150', '118', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('151', '119', 'single_otorisasi', 'gold', 'new', '2', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('152', '120', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('153', '121', 'single_otorisasi', 'gold', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('154', '122', 'multi_otorisasi', 'gold_payroll', 'new', '2', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('155', '123', 'single_otorisasi', 'gold_payroll', 'new', '2', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('156', '124', 'single_otorisasi', 'gold_payroll', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('157', '125', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('158', '126', 'single_otorisasi', 'gold', 'new', '2', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('159', '127', 'multi_otorisasi', 'gold', 'new', '2', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('160', '128', 'multi_otorisasi', 'gold', 'new', '2', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('161', '129', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('162', '130', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('163', '131', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('164', '132', 'single_otorisasi', 'gold', 'new', '3', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('165', '133', 'single_otorisasi', 'gold', 'new', '1', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Follow UP');
INSERT INTO `tb_paket` VALUES ('166', '134', 'single_otorisasi', 'gold', 'new', '2', '2012-06-21', '2012-06-22', '2012-06-27', '2026-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('167', '135', 'multi_otorisasi', 'gold_payroll', 'new', '1', '2012-06-20', '2012-06-21', '2012-06-26', '2022-06-12', 'irwan', 'Active');
INSERT INTO `tb_paket` VALUES ('168', '136', 'multi_otorisasi', 'platinum', 'new', '1', '2012-06-18', '2012-06-19', '2012-06-22', '2022-06-12', 'irwan', 'Done');
INSERT INTO `tb_paket` VALUES ('169', '137', 'multi_otorisasi', 'gold_payroll', 'info_bca', '1', '2012-06-25', '2012-06-26', '2012-06-29', '2022-06-12', 'irwan', 'Folow Up');

-- ----------------------------
-- Table structure for `tb_schedule`
-- ----------------------------
DROP TABLE IF EXISTS `tb_schedule`;
CREATE TABLE `tb_schedule` (
  `sched_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_idx` int(11) NOT NULL,
  `pkt_idx` int(11) NOT NULL,
  `sched_date` date DEFAULT NULL,
  `sched_time` time NOT NULL,
  `sched_visit` text NOT NULL,
  `sched_agenda_kunjungan` text,
  `sched_fitur` text,
  `sched_alamat_kirim` text,
  `sched_status` text,
  `sched_resolve_date` date DEFAULT NULL,
  `sched_engineer` text,
  `sched_keterangan` text,
  PRIMARY KEY (`sched_idx`),
  UNIQUE KEY `sched_idx` (`sched_idx`),
  KEY `pkt_idx` (`pkt_idx`),
  KEY `cus_idx` (`cus_idx`),
  CONSTRAINT `cus_idx` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pkt_idx` FOREIGN KEY (`pkt_idx`) REFERENCES `tb_paket` (`pkt_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_schedule
-- ----------------------------
INSERT INTO `tb_schedule` VALUES ('6', '45', '77', '2012-06-26', '10:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl HBQ Selatan Blok A Komp Gereja No 3 Perum Harapan Baru Regency', 'Done', '2012-06-26', 'Irwan Subaya', 'Delivery, Instal dan Training');
INSERT INTO `tb_schedule` VALUES ('7', '57', '89', '2012-06-26', '13:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Kebun Jeruk, Kedoya utara Taman Ratu AA1 No 26', 'Done', '2012-06-26', 'yugi', 'Delivery, Instal dan training KBB');
INSERT INTO `tb_schedule` VALUES ('8', '62', '94', '2012-06-26', '14:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'RGB Boulevard Blok U 8 BSD City', 'Done', '2012-06-26', 'yugi', 'Delivery, Instal dan Training');
INSERT INTO `tb_schedule` VALUES ('9', '63', '95', '2012-06-25', '11:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Wisma Millenia Lt 4 Jl MT Haryono', 'Done', '2012-06-25', 'Hanggoro', 'Delivery, Instal dan Training KBB');
INSERT INTO `tb_schedule` VALUES ('10', '59', '91', '2012-06-25', '116:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl Sutera Jelita VI/25 Rt 05/06 Pd Jagungt Timur Serpong Utara', 'Pending', '2012-06-25', 'Irwan Subaya', 'Komputer Nasabah Bermasalah ');
INSERT INTO `tb_schedule` VALUES ('11', '43', '75', '2012-06-25', '13:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Gd Bursa Efek Indonesia Tower I, Lt I Suite 110 Jl Jend Sudirman Kav 52-53', 'Pending', '2012-06-25', 'Hanggoro', 'Komputer nasabah bermasalah');
INSERT INTO `tb_schedule` VALUES ('12', '42', '74', '2012-06-25', '16:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl Gunung Sahari XI No 23', 'Reschedule', '1970-01-01', 'Irwan Subaya', 'Reschedule karena nasabah sedang keluar kota');
INSERT INTO `tb_schedule` VALUES ('13', '44', '76', '2012-06-25', '10:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Tubagus M Juhadi N 6 Perum Permai Jl Garuda G No 01 Blok AP 7 Jati Purna', 'Pending', '1970-01-01', 'Irwan Subaya', 'Karena Komputer Nasabah Bermasalah ');
INSERT INTO `tb_schedule` VALUES ('14', '71', '103', '2012-06-26', '10:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Sysadmin', 'Training KBB', 'Jl Tanah Abang II /76 Rt 02/05 Petoto Selatan Gambir', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('15', '72', '104', '2012-06-22', '11:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Sysadmin', 'Training KBB', 'Jl Daan Mogot No 69', 'Done', '2012-06-22', 'Andi K', 'deliver, Instal dan training');
INSERT INTO `tb_schedule` VALUES ('16', '73', '105', '2012-06-26', '11:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Podomoro City Grand Shopping Arcade Blok B 8Dh Rt 00/00 Kel Tanjung Duren', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('17', '74', '106', '2012-06-26', '13:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Cipinang Muara No.47 Jakarta Timur', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('18', '75', '107', '2012-06-26', '14:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', '', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('19', '76', '108', '2012-06-26', '15:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl Siliwangi No 10 G5 Flamboyan Pnacoran Mas Rt 03/07', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('20', '77', '109', '2012-06-22', '14:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl Lodan Raya Blok B No 18-19 Komp lodan Center', 'Done', '2012-06-22', 'Badri', 'deliver, Instal dan training');
INSERT INTO `tb_schedule` VALUES ('21', '78', '110', '2012-06-22', '14:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', '', 'Pending', '1970-01-01', 'Irwan Subaya', 'Internet bermasalah');
INSERT INTO `tb_schedule` VALUES ('22', '79', '111', '2012-06-26', '16:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl Lamandau IV No 18 Kramat Pela Keb Baru', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('23', '80', '112', '2012-06-26', '10:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Pondok Ungu Permai Blok B 20 Utara Kalibalang Tengah,', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('24', '134', '166', '2012-06-22', '10:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'GD Wisma Metropolitan II Lt 6 Jl Jend Sudirman Kav 29-31', 'Done', '2012-06-22', 'Irwan Subaya', 'Delivery, Instal dan Training');
INSERT INTO `tb_schedule` VALUES ('25', '81', '113', '2012-06-22', '10:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Bumi Teluk Jember  W no 23 Rt 01/12 Karawang', 'Done', '2012-06-22', 'Adrian', 'Delivery, Instal dan training');
INSERT INTO `tb_schedule` VALUES ('26', '82', '114', '2012-06-25', '10:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', '', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('27', '83', '115', '2012-06-25', '11:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl Jend Sudirman Kav 52-53 Gd BEJ Tower 2 Lt 17', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('28', '84', '116', '2012-06-25', '11:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl Mh Thamrin No 9 Cikokol', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('29', '85', '117', '2012-06-25', '14:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl Jend Sudirman Kav 75 Wisma Bumiputera Lt 17', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('30', '86', '118', '2012-06-25', '15:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Jl H Samali No 31, Pancoran Kali Bata Rt 04/04', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('31', '88', '120', '2012-06-22', '14:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training Payroll,Training KBB', 'Jl H Agus Salim No 26F', 'Done', '2012-06-22', 'Eko', 'deliver, Instal dan training');
INSERT INTO `tb_schedule` VALUES ('32', '96', '128', '2012-06-25', '16:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training KBB', 'Gang Mesjid I Dalam No 12 A Rt 03/05', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('33', '136', '168', '2012-06-20', '11:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian,Training Sysadmin', 'Training Payroll,Training Auto Credit,Training Auto Colection', 'Jl Nanas I N0 36', 'Done', '2012-06-20', 'Tirta', 'Delivery, Instal & Training');
INSERT INTO `tb_schedule` VALUES ('34', '135', '167', '2012-06-22', '11:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian,Training Sysadmin', 'Training Payroll,Training KBB', '', 'Done', '2012-06-22', 'Irwan Subaya', '');
INSERT INTO `tb_schedule` VALUES ('35', '135', '167', '2012-06-26', '13:00:00', 'Adhoc', 'Key BCA Delivery,Training Pemakaian', 'Training BCA VA,Training VA', 'Jl. Raya Matraman 127', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('36', '89', '121', '2012-06-20', '13:00:00', 'New', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training Payroll', 'gjahkdhkahk', 'Active', '0000-00-00', '0', '0');
INSERT INTO `tb_schedule` VALUES ('37', '137', '169', '2012-06-26', '14:00:00', 'Adhoc', 'Key BCA Delivery,VPN Setting & Instalation,Training Pemakaian', 'Training BCA VA', 'Jl Meruya Ilir', 'Folow Up', '0000-00-00', '0', '0');

-- ----------------------------
-- Table structure for `tb_status`
-- ----------------------------
DROP TABLE IF EXISTS `tb_status`;
CREATE TABLE `tb_status` (
  `stat_idx` int(11) NOT NULL AUTO_INCREMENT,
  `stat_nama` varchar(255) NOT NULL,
  `stat_tahap` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`stat_idx`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_status
-- ----------------------------
INSERT INTO `tb_status` VALUES ('1', 'Done', '1');
INSERT INTO `tb_status` VALUES ('2', 'Reschedule', '1');
INSERT INTO `tb_status` VALUES ('7', 'Retur', '1');
INSERT INTO `tb_status` VALUES ('8', 'Pending', '1');

-- ----------------------------
-- Table structure for `tb_statusafdfdsf`
-- ----------------------------
DROP TABLE IF EXISTS `tb_statusafdfdsf`;
CREATE TABLE `tb_statusafdfdsf` (
  `status_idx` int(11) NOT NULL DEFAULT '0',
  `status_nama` text,
  PRIMARY KEY (`status_idx`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_statusafdfdsf
-- ----------------------------
INSERT INTO `tb_statusafdfdsf` VALUES ('1', 'Done');
INSERT INTO `tb_statusafdfdsf` VALUES ('2', 'Reschedule');
INSERT INTO `tb_statusafdfdsf` VALUES ('3', 'Retur');
INSERT INTO `tb_statusafdfdsf` VALUES ('4', 'Pending');

-- ----------------------------
-- Table structure for `tb_tanggal`
-- ----------------------------
DROP TABLE IF EXISTS `tb_tanggal`;
CREATE TABLE `tb_tanggal` (
  `id_tgl` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tgl`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_tanggal
-- ----------------------------
INSERT INTO `tb_tanggal` VALUES ('1', '2012-06-07', '');
INSERT INTO `tb_tanggal` VALUES ('2', '2012-06-09', '');
INSERT INTO `tb_tanggal` VALUES ('3', '2012-06-10', '');
INSERT INTO `tb_tanggal` VALUES ('4', '2012-06-16', '');
INSERT INTO `tb_tanggal` VALUES ('5', '2012-06-17', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_visit_drop
-- ----------------------------
INSERT INTO `tb_visit_drop` VALUES ('1', '');
INSERT INTO `tb_visit_drop` VALUES ('2', 'New');
INSERT INTO `tb_visit_drop` VALUES ('3', 'Adhoc');
INSERT INTO `tb_visit_drop` VALUES ('4', 'Upgrade');
