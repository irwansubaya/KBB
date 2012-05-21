/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : kbb

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2012-05-21 14:24:38
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
  `call_date` datetime DEFAULT NULL,
  `call_konfirm` varchar(16) DEFAULT NULL,
  `call_cp_lain` varchar(64) DEFAULT NULL,
  `call_telp_lain` varchar(64) DEFAULT NULL,
  `call_keterangan` text,
  PRIMARY KEY (`call_idx`),
  KEY `tb_call_sched_idx_fk` (`sched_idx`),
  CONSTRAINT `tb_call_sched_idx_fk` FOREIGN KEY (`sched_idx`) REFERENCES `tb_schedule` (`sched_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_call
-- ----------------------------
INSERT INTO `tb_call` VALUES ('44', '71', null, '2012-05-21 00:00:00', 'Nasabah Sulit Di', '', '', '');
INSERT INTO `tb_call` VALUES ('45', '72', null, '2012-05-21 00:00:00', 'Di Jadwalkan', '', '', '');
INSERT INTO `tb_call` VALUES ('46', '73', null, '2012-05-21 00:00:00', 'Di Jadwalkan', '', '', '');
INSERT INTO `tb_call` VALUES ('47', '74', null, '2012-05-21 00:00:00', 'Komputer Rusak', '', '', '');

-- ----------------------------
-- Table structure for `tb_customer`
-- ----------------------------
DROP TABLE IF EXISTS `tb_customer`;
CREATE TABLE `tb_customer` (
  `cus_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_no_sp` int(11) NOT NULL,
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
  `cus_status` varchar(255) NOT NULL,
  PRIMARY KEY (`cus_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=54087 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES ('54065', '0', 'IBSMAKJAEX', 'Makmur Jaya Express CV', '', '1982928272', 'Toko Keramik', 'Ruko Taman Palem Lestari Blok A-30 No.15 Cengkareng  Jakarta Barat', 'Yuliana Tandu', 'Bekasi Selatan', '', '', '', '0812987876765', '', 'KCU DAAN MOGOT', '0198', 'makmurjaya_xpdc@yahoo.com', '2012-05-21', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54068', '0', 'IBSSURYPER', 'Surya Perdana Abadi PT', '', '', '', 'Jl. Kapuk Utara II/8 Rt003/Rw001 Penjaringan Jakarta Barat', 'Suhai Wiraya', 'Jakarta Barat', '', ',', '', '0813 1877 8156 (Dewi)', '', 'KCU DAAN MOGOT', '0198', '', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54069', '0', 'IBSTRIANKU', 'Trianto Kuswita', '', '', '', 'Jl. Cempaka Putih Tengah 27 No.6A Cempaka Putih Jakarta Pusat', 'Imelda', 'Jakarta Pusat', '', '021- 8690 6112', '', '', '', 'KCU DAAN MOGOT', '0198', 'triantokuswita@gmail.com', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54070', '0', 'IBSGLOBSUC', 'Global Success International PT', '', '3213123213', 'Toko Keramik', 'Gedung Rifa Lt.2 Jl.Prof Dr.Satrio Blok C4 Kav.6-7 Kuningan Jakarta Pusat', 'Jefri Oktavian Indroe', 'Jakarta Selatan', '', '0215260781', '', '', '', 'KCU DAAN MOGOT', '0198', '', '2012-05-21', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54071', '0', 'IBSSAMSIMJ', 'Samsim Jaya', '', '', '', 'Jl. Kapuk Raya No.12 E & F Kel.Kapuk Muara Kec.Penjaringan Jakarta', '', 'Jakarta', '', '0812 9411 300; 7059 3159; 5439 4635', '', '', '', 'KCU DAAN MOGOT', '0198', 'samsinjaya@yahoo.com', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54072', '0', 'IBSYYSDHAS', 'Yay Dharmasagara', '', '5345353543', 'Toko Keramik', 'Jln. Taman Sari Raya No.78 Jakarta Barat', 'Elizaris P', 'Jakarta Barat', '11150', '0216492254', '', '08176999511', '', 'KCU DAAN MOGOT', '0198', '', '2012-05-21', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54073', '0', 'IBSALIANOO', 'Alianto', '', '1321323132', 'Toko Keramik', 'Jl. Komplek TSS Indah No.815 Blok B Jakarta', 'Alianto', 'Jakarta Selatan', '', '02163859181', '', '08121052052', '', 'KCU DAAN MOGOT', '0001', '', '2012-05-21', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54074', '0', 'IBSPUNDIPT', 'Pundi Kalia Mandiri PT', '', '', 'Perdagangan Umum', 'Jl. Tarumanegara No.100A, Cirendeu Tangerang', '', 'Tangerang', '15419', '021- 7470 2842', '', '', '', 'KCU DAAN MOGOT', '0198', 'pundikm@yahoo.com', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54075', '0', 'IBSTJHINPK', 'Tjhin Pauw Kim Bangunan Jaya', '327.101.440.958.0002', '0953200845', 'toko keramik', 'Jl.Siliwangi No.28 Kel.Bondongan Rt01 Rw.13 Bogor Bogor', '', 'Bogor', '16131', '0251- 832 6082; 832 4992', '', '0878 7080 8123', '0251-8324992', 'KCU DAAN MOGOT', '0198', 'U43DY@yahoo.com', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54076', '0', 'IBSHINTADW', 'Shinta Dewi', '', '5345353453', 'Toko Keramik', 'Jl. Sunter Kirana Raya Blok ND2 No.11 Sunter Jaya, Tanjung Priok Jakarta', 'Shinta Dewi', 'Jakarta Selatan', '', '', '', '0811999889', '', 'KCU DAAN MOGOT', '0198', '', '2012-05-21', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54077', '0', 'IBSWIGIYAN', 'Wigiyanto Soleman', '', '', '', 'Jl. Kayu Putih Raya B4 / 8  Sebelah kolam Renang Jakarta Timur', '', 'Jakarta Timur', '', '', '', '0812 8137 896', '', 'KCU DAAN MOGOT', '0198', 'wigianto@gmail.com', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54078', '0', 'IBSMARKAUW', 'Martin Kauw', '', '', '', 'Poglar Ex Pool PPD Blok B 27 Jakarta', '', 'Jakarta', '', '021- 5437 8002; 5437 8003', '', '', '', 'KCU DAAN MOGOT', '0198', '', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54079', '0', 'IBSINGCUAA', 'Ing Cuan', '', '5450706789', 'Toko Keramik', 'Jl.Perdana Raya Indah Blok A/3 Rt10 Rw04 Wijaya Kusuma, Grogol Petamburan Jakarta Barat', 'Ing Cuan', 'Jakarta Barat', '11460', '02163858150', '', '0811933111', '', 'KCU DAAN MOGOT', '0198', 'as8888@indosat.net.id', '2012-05-21', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54080', '0', 'IBSPTHAKAS', 'Hakasima Inti PT', '', '', 'Peralatan Rumah Tangga', 'Jl. Kembangan Baru Raya Blok AA No.3 Kembangan Jakarta Barat', 'Tjhin Anthony', 'Jakarta Barat', '11610', '021- 581 3345', '', '', '', 'KCU DAAN MOGOT', '0198', '', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54081', '0', 'IBSPTPUSAK', 'Pusaka Banten Sakti PT', '', '', 'Jasa Angkutan', 'Jl. Raya Serang - Cilegon Km.122 Kramat watu Cilegon', '', 'Cilegon', '42161', '0254- 7000622; 7001168', '', '0812 1200091', '0254-233170', 'KCU DAAN MOGOT', '0198', 'pbs_one@yahoo.com', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54082', '0', 'IBSRUDIPAW', 'Rudianto Paw', '09.5003.111173.2013', '', '', 'Pademangan II  Gg II No.49  TK Borneo el Jl.Hayam Wuruk , Pademangan Jakarta', '', 'Jakarta', '', '629 5658', '', '0812 8132 897', '', 'KCU DAAN MOGOT', '0198', 'rudianto@yahoo.com', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54083', '0', 'IBSPTWATAN', 'Wahana Tani Organik Lestari PT', '', '', 'Produksi Pupuk', 'Jl.Gatot Subroto Rt04/Rw01 Sangiang Jaya Periuk Tangerang', '', 'Tangerang', '15132', '021- 4788 2599592 7148', '', '', '', 'KCU DAAN MOGOT', '0198', 'peterhartono@live.com', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54084', '0', 'IBSPTINDOC', 'Indocore Perkasa PT', '', '', 'Alat Kesehatan', 'Graha Mas Pemuda Blok AB No.19 Kel.Jati Kec.Pulo Gadung Jakarta Timur', 'O Lee', 'Jakarta Timur', '', '021- 4788 2599', '', '', '', 'KCU DAAN MOGOT', '0198', 'sunflower58@homail.net', '2012-05-01', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54085', '0', 'IBSGUNWIDJ', 'Gunadi Widjanarko', '', '2543535354', 'Bahan Bangunan', 'Jl.Gelang Baru Barat 1/38 Rt.01 Rw.003 Tomang, Grogol Petamburan (Alamat Lama) Jakarta Barat', 'Gunadi Widjanarko', 'Jakarta Barat', '', '', '', '', '', 'KCU DAAN MOGOT', '0198', 'batarex.indo@yahoo.com', '2012-05-21', 'irwan', '');
INSERT INTO `tb_customer` VALUES ('54086', '0', 'IBSKARUMEL', 'Karunia Mekar Sarana PT', '0951072301560147', '2413002877', 'Jasa Angkutan', 'Jl Rajawali selatan I No.18 Mangga dua', 'Mervyn Komandalika', 'Jakarta Barat', '10720', '02164700888', '', '02195740554', '', 'KCU DAAN MOGOT', '0198', 'kms888@centrin.net.id', '2012-05-21', 'irwan', '');

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
  PRIMARY KEY (`key_idx`,`key_id`),
  KEY `tb_key_cus_idx_fk` (`cus_idx`),
  KEY `tb_key_pkt_idx_fk` (`pkt_idx`),
  CONSTRAINT `tb_key_cus_idx_fk` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_key_pkt_idx_fk` FOREIGN KEY (`pkt_idx`) REFERENCES `tb_paket` (`pkt_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=374 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_key
-- ----------------------------
INSERT INTO `tb_key` VALUES ('354', '37', '54065', '2131312313', 'ARIO BIMO', '0000-00-00');
INSERT INTO `tb_key` VALUES ('355', '37', '54065', '7363726272', 'MIKAIL', '0000-00-00');
INSERT INTO `tb_key` VALUES ('360', '36', '54065', '1233918191', 'ANDIKA', '0000-00-00');
INSERT INTO `tb_key` VALUES ('363', '38', '54065', '1323124134', 'ADRIAN', '0000-00-00');
INSERT INTO `tb_key` VALUES ('365', '41', '54070', '5345353453', 'Andri', '0000-00-00');
INSERT INTO `tb_key` VALUES ('366', '41', '54070', '3542342423', 'Eko', '0000-00-00');
INSERT INTO `tb_key` VALUES ('367', '56', '54085', '5252425425', 'Sendi', '0000-00-00');
INSERT INTO `tb_key` VALUES ('368', '47', '54076', '5435645657', 'Iko', '0000-00-00');
INSERT INTO `tb_key` VALUES ('369', '50', '54079', '5435345345', 'Sandra', '0000-00-00');
INSERT INTO `tb_key` VALUES ('370', '57', '54086', '3543535353', 'Sedarti', '0000-00-00');
INSERT INTO `tb_key` VALUES ('371', '43', '54072', '5542353453', 'Arianti', '0000-00-00');
INSERT INTO `tb_key` VALUES ('372', '44', '54073', '2313213213', 'Alianto', '0000-00-00');
INSERT INTO `tb_key` VALUES ('373', '58', '54073', '4234353453', 'Adiaksa', '0000-00-00');

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
  `pkt_konfirm` text NOT NULL,
  PRIMARY KEY (`pkt_idx`),
  KEY `tb_paket_cus_idx_fk` (`cus_idx`),
  CONSTRAINT `tb_paket_cus_idx_fk` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_paket
-- ----------------------------
INSERT INTO `tb_paket` VALUES ('36', '54065', 'single_otorisasi', 'gold', 'new', '1', '2012-05-01', '2012-05-02', '2012-05-07', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('37', '54065', 'single_otorisasi', 'gold', 'new', '2', '2012-05-02', '2012-05-10', '2012-05-15', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('38', '54065', 'single_otorisasi', 'gold', 'new', '1', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('39', '54068', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('40', '54069', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('41', '54070', 'single_otorisasi', 'gold', 'new', '2', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('42', '54071', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('43', '54072', 'single_otorisasi', 'gold', 'new', '1', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('44', '54073', 'multi_otorisasi', 'gold', 'new', '1', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('45', '54074', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('46', '54075', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('47', '54076', 'single_otorisasi', 'gold', 'new', '1', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('48', '54077', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('49', '54078', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('50', '54079', 'single_otorisasi', 'gold', 'new', '1', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('51', '54080', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('52', '54081', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('53', '54082', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('54', '54083', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('55', '54084', 'single_otorisasi', 'gold', 'new', '0', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('56', '54085', 'single_otorisasi', 'gold', 'new', '1', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('57', '54086', 'single_otorisasi', 'gold', 'new', '1', '2012-04-07', '2012-05-03', '2012-05-08', '2021-05-12', 'irwan', 'Folow UP');
INSERT INTO `tb_paket` VALUES ('58', '54073', 'single_otorisasi', 'gold', 'new', '1', '2012-05-01', '2012-05-02', '2012-05-07', '2021-05-12', 'irwan', 'Folow UP');

-- ----------------------------
-- Table structure for `tb_schedule`
-- ----------------------------
DROP TABLE IF EXISTS `tb_schedule`;
CREATE TABLE `tb_schedule` (
  `sched_idx` int(11) NOT NULL AUTO_INCREMENT,
  `cus_idx` int(11) NOT NULL,
  `pkt_idx` int(11) NOT NULL,
  `sched_date_time` text NOT NULL,
  `sched_visit` text NOT NULL,
  `sched_agenda_kunjungan` text NOT NULL,
  `sched_fitur` text NOT NULL,
  `sched_alamat_kirim` text NOT NULL,
  PRIMARY KEY (`sched_idx`),
  KEY `pkt_idx` (`pkt_idx`),
  KEY `cus_idx` (`cus_idx`),
  CONSTRAINT `cus_idx` FOREIGN KEY (`cus_idx`) REFERENCES `tb_customer` (`cus_idx`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pkt_idx` FOREIGN KEY (`pkt_idx`) REFERENCES `tb_paket` (`pkt_idx`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_schedule
-- ----------------------------
INSERT INTO `tb_schedule` VALUES ('71', '54065', '36', '', 'New', '0', '', '');
INSERT INTO `tb_schedule` VALUES ('72', '54073', '44', '22-May-2012 Tuesday 11:00', 'New', '0', '', '');
INSERT INTO `tb_schedule` VALUES ('73', '54073', '44', '', 'New', '0', '', '');
INSERT INTO `tb_schedule` VALUES ('74', '54073', '44', '', 'New', '0', '', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_visit_drop
-- ----------------------------
INSERT INTO `tb_visit_drop` VALUES ('1', '');
INSERT INTO `tb_visit_drop` VALUES ('2', 'New');
INSERT INTO `tb_visit_drop` VALUES ('3', 'Adhoc');
INSERT INTO `tb_visit_drop` VALUES ('4', 'Upgrade');
