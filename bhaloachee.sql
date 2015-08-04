/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : bhaloachee

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-08-04 18:06:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_description` text,
  `blog_category` int(11) DEFAULT NULL,
  `blog_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`blog_id`),
  KEY `fk_blog_category` (`blog_category`),
  CONSTRAINT `fk_blog_category` FOREIGN KEY (`blog_category`) REFERENCES `blog_category` (`blog_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('3', 'A look back at Medicare’s 50 years', 'On Friday, KQED’s Forum offered a look at Medicare and Medicaid to mark the programs’ 50-year anniversary. Stanford health policy researcher Laurence Baker, PhD, participated in the discussion, which covered issues such as how the programs drive the way prices for care are negotiated with medical providers, how the large population of Baby Boomers will affect the system, and how reimbursement rates affect the kind of care Medicare and Medicaid patients receive.\r\n\r\nThe panel also discussed the gaps in coverage — services like dental care are not covered by Medicare — and the challenges they create. Medicare coverage has grown from the narrow set of conditions it first covered, and Baker thinks the conditions are right to begin a new national conversation about expanding coverage:\r\n\r\n    One of the things that’s really ripe for discussion is how this country is going to handle the long-term care issues. Medicare’s got to be at the center of that. And it almost feels like the time is coming that we’re going to have to think about that much more seriously.\r\n\r\nAnd when host Mina Kim asked Baker the question that’s on a lot of people’s mind — Is Medicare sustainable for the long term? — Baker noted:\r\n- See more at: http://scopeblog.stanford.edu/#sthash.Q1qsDzzJ.dpuf', '4', '2015-08-04 15:51:57');
INSERT INTO `blog` VALUES ('4', 'werwer', 'werwerewrewr', '3', '2015-08-04 16:28:16');
INSERT INTO `blog` VALUES ('5', 'Blog This is', 'this is text', '4', '2015-08-04 16:28:51');
INSERT INTO `blog` VALUES ('6', 'this is blog', 'Enter dddhere...', '4', '2015-08-04 16:30:22');
INSERT INTO `blog` VALUES ('7', 'This is new Blog ', 'This is news Enter text here...', '3', '2015-08-04 16:30:42');

-- ----------------------------
-- Table structure for blog_category
-- ----------------------------
DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category` (
  `blog_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`blog_category_id`),
  KEY `blog_category_name` (`blog_category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blog_category
-- ----------------------------
INSERT INTO `blog_category` VALUES ('5', 'Discount');
INSERT INTO `blog_category` VALUES ('3', 'Doctors');
INSERT INTO `blog_category` VALUES ('4', 'Hospital');

-- ----------------------------
-- Table structure for brand
-- ----------------------------
DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) DEFAULT NULL,
  `brand_generic` int(11) DEFAULT NULL,
  `brand_manufacturer` int(11) DEFAULT NULL,
  `brand_use` text,
  PRIMARY KEY (`brand_id`),
  KEY `fk_brand_generic` (`brand_generic`),
  KEY `fk_brand_manufacturer` (`brand_manufacturer`),
  CONSTRAINT `fk_brand_generic` FOREIGN KEY (`brand_generic`) REFERENCES `brand_generic` (`brand_generic_id`),
  CONSTRAINT `fk_brand_manufacturer` FOREIGN KEY (`brand_manufacturer`) REFERENCES `brand_manufacturer` (`manufacturer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of brand
-- ----------------------------
INSERT INTO `brand` VALUES ('1', 'Mesacol\r\n', '1', '1', 'Blank Right Now');
INSERT INTO `brand` VALUES ('2', '5-Fu\r\n', '2', '2', 'No Use Right Now');
INSERT INTO `brand` VALUES ('3', 'Tivizid\r\n', '3', '3', 'No Use Right Now');

-- ----------------------------
-- Table structure for brand_dosage_amount
-- ----------------------------
DROP TABLE IF EXISTS `brand_dosage_amount`;
CREATE TABLE `brand_dosage_amount` (
  `brand_dosage_amount_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_dosage_amount` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`brand_dosage_amount_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of brand_dosage_amount
-- ----------------------------
INSERT INTO `brand_dosage_amount` VALUES ('1', '5ml\r\n');
INSERT INTO `brand_dosage_amount` VALUES ('2', '10ml\r\n');
INSERT INTO `brand_dosage_amount` VALUES ('3', '3gm\r\n');
INSERT INTO `brand_dosage_amount` VALUES ('4', '5gm\r\n');
INSERT INTO `brand_dosage_amount` VALUES ('5', '70ml\r\n');

-- ----------------------------
-- Table structure for brand_dosage_form
-- ----------------------------
DROP TABLE IF EXISTS `brand_dosage_form`;
CREATE TABLE `brand_dosage_form` (
  `brand_dosage_form_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_dosage_form_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`brand_dosage_form_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of brand_dosage_form
-- ----------------------------
INSERT INTO `brand_dosage_form` VALUES ('1', 'tablet\r\n');
INSERT INTO `brand_dosage_form` VALUES ('2', 'injection\r\n');
INSERT INTO `brand_dosage_form` VALUES ('3', 'capsule\r\n');
INSERT INTO `brand_dosage_form` VALUES ('4', 'solution\r\n');
INSERT INTO `brand_dosage_form` VALUES ('5', 'granules\r\n');
INSERT INTO `brand_dosage_form` VALUES ('6', 'ointment\r\n');
INSERT INTO `brand_dosage_form` VALUES ('7', 'cream\r\n');

-- ----------------------------
-- Table structure for brand_generic
-- ----------------------------
DROP TABLE IF EXISTS `brand_generic`;
CREATE TABLE `brand_generic` (
  `brand_generic_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_generic_gid` varchar(255) DEFAULT NULL,
  `brand_generic_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`brand_generic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of brand_generic
-- ----------------------------
INSERT INTO `brand_generic` VALUES ('1', 'G1\r\n', '[5 Aminosalicylic Acid]\r\n');
INSERT INTO `brand_generic` VALUES ('2', 'G1084\r\n', '[5-Fluorouracil]\r\n');
INSERT INTO `brand_generic` VALUES ('3', 'G2\r\n', '[Abacavir ; Lamivudine ; Zidovudine]\r\n');
INSERT INTO `brand_generic` VALUES ('4', 'G3\r\n', '[Acarbose]\r\n');
INSERT INTO `brand_generic` VALUES ('5', 'G4\r\n', '[Aceclofenac]\r\n');

-- ----------------------------
-- Table structure for brand_manufacturer
-- ----------------------------
DROP TABLE IF EXISTS `brand_manufacturer`;
CREATE TABLE `brand_manufacturer` (
  `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_name_short` varchar(255) DEFAULT NULL,
  `manufacturer_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of brand_manufacturer
-- ----------------------------
INSERT INTO `brand_manufacturer` VALUES ('1', 'Sun\r\n', 'Sun Pharmaceutical\r\n');
INSERT INTO `brand_manufacturer` VALUES ('2', 'Choongwae\r\n', 'Choongwae Pharma Corporation Korea\r\n');
INSERT INTO `brand_manufacturer` VALUES ('3', 'Square\r\n', 'Square Pharmaceuticals \r\n');
INSERT INTO `brand_manufacturer` VALUES ('4', 'White\r\n', 'White Horse Pharma\r\n');

-- ----------------------------
-- Table structure for brand_strength
-- ----------------------------
DROP TABLE IF EXISTS `brand_strength`;
CREATE TABLE `brand_strength` (
  `brand_strength_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_strength_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`brand_strength_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of brand_strength
-- ----------------------------
INSERT INTO `brand_strength` VALUES ('1', '400mg\r\n');
INSERT INTO `brand_strength` VALUES ('2', '250mg\r\n');
INSERT INTO `brand_strength` VALUES ('3', '500mg\r\n');
INSERT INTO `brand_strength` VALUES ('4', '50mg\r\n');
INSERT INTO `brand_strength` VALUES ('5', '100mg\r\n');

-- ----------------------------
-- Table structure for brand_strength_from_price
-- ----------------------------
DROP TABLE IF EXISTS `brand_strength_from_price`;
CREATE TABLE `brand_strength_from_price` (
  `brand_strength_form_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` int(11) DEFAULT NULL,
  `brand_dosage_form` int(11) DEFAULT NULL,
  `brand_dosage_amount` int(11) DEFAULT NULL,
  `brand_strength` int(11) DEFAULT NULL,
  `brand_quantity` int(11) DEFAULT NULL,
  `brand_price` decimal(11,0) DEFAULT NULL,
  `brand_price_ppp` decimal(11,0) DEFAULT NULL,
  PRIMARY KEY (`brand_strength_form_price_id`),
  KEY `fk_brand_dosage_form` (`brand_dosage_form`),
  KEY `fk_brand_dosage_amount` (`brand_dosage_amount`),
  KEY `fk_brand_strength` (`brand_strength`),
  KEY `fk_brand_name` (`brand_name`),
  CONSTRAINT `fk_brand_dosage_amount` FOREIGN KEY (`brand_dosage_amount`) REFERENCES `brand_dosage_amount` (`brand_dosage_amount_id`),
  CONSTRAINT `fk_brand_dosage_form` FOREIGN KEY (`brand_dosage_form`) REFERENCES `brand_dosage_form` (`brand_dosage_form_id`),
  CONSTRAINT `fk_brand_name` FOREIGN KEY (`brand_name`) REFERENCES `brand` (`brand_id`),
  CONSTRAINT `fk_brand_strength` FOREIGN KEY (`brand_strength`) REFERENCES `brand_strength` (`brand_strength_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of brand_strength_from_price
-- ----------------------------
INSERT INTO `brand_strength_from_price` VALUES ('1', '1', '1', '1', '1', '50', '378', '8');

-- ----------------------------
-- Table structure for ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `company_name_short` varchar(255) DEFAULT NULL,
  `company_old_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `compnay_mobile` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_business_type` int(11) DEFAULT NULL,
  `company_user_name` int(11) unsigned NOT NULL,
  PRIMARY KEY (`company_id`),
  KEY `company_name` (`company_name`),
  KEY `fk_company_cat` (`company_business_type`),
  KEY `fk_user_name` (`company_user_name`),
  CONSTRAINT `fk_company_cat` FOREIGN KEY (`company_business_type`) REFERENCES `company_category` (`company_cat_id`),
  CONSTRAINT `fk_company_user` FOREIGN KEY (`company_user_name`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES ('1', 'Al-Raji Hospital Ltd.', null, null, '12, Farmgate?', '29186, 326033, 8119229', null, '1', '1');
INSERT INTO `company` VALUES ('2', 'Apollo Hospitals', null, null, 'Plot: 81, Block: E, Bashundhara R/A', '880 2 9891661-2', null, '1', '2');
INSERT INTO `company` VALUES ('6', 'Bangladesh Eye Hospital', null, null, 'House # 19/1, Road # 6, Dhanmondi, Dhaka - 1205', null, null, '4', '2');
INSERT INTO `company` VALUES ('8', 'CMH (Combined Military Hospital)', null, null, 'Dhaka Cantonment', null, null, '1', '1');
INSERT INTO `company` VALUES ('9', 'Bangladesh Railway Hospital', null, null, 'Barisal Medical College Hospital\r\nBarisal.BDR (Bangladesh Rifles) Hospital\r\nDhaka.', '502220', null, '1', '2');
INSERT INTO `company` VALUES ('10', 'CENTRAL HOSPITAL LTD', null, null, 'House # 2, Road # 5, Green Road, Dhanmondi', '+880-2-9660015-19, 017523400', null, '1', '2');
INSERT INTO `company` VALUES ('12', 'Center for the rehabilitation of the paralysed(CRF)', null, null, 'Post CRP Chapin, Savar\r\nDhaka', ' +880-2-7710464-5, 7711766', null, '1', '2');
INSERT INTO `company` VALUES ('13', 'DHAKA GENERAL HOSPITAL (PVT) LTD.', null, null, '17,Hatkhola Lane, Swamibagh New Road\r\nDhaka', '235351, 246708', null, '4', '2');
INSERT INTO `company` VALUES ('14', 'Jalalabad Ragib-Rabeya Medical College', null, null, 'Sunamgonj Road, Sylhet - 3100\r\nBangladesh', null, null, '2', '1');
INSERT INTO `company` VALUES ('15', 'Medinova Hospital', null, null, 'House # 71/A Road # 5/A, Dhanmondi R/A\r\nDhaka', '+880-2-8620353-7, 8624907-10', null, '1', '2');
INSERT INTO `company` VALUES ('16', 'Monowara Hospital (Pvt) Ltd.', null, null, '54, Siddheswari Road\r\nDhaka.', ' +880-2-8318135, 8318529', null, '1', '2');
INSERT INTO `company` VALUES ('17', 'Al-Raji Hospital Ltd.', null, null, '12, Farmgate?', '29186, 326033, 8119229', null, '1', '1');
INSERT INTO `company` VALUES ('18', 'Apollo Hospitals', null, null, 'Plot: 81, Block: E, Bashundhara R/A', '880 2 9891661-2', null, '1', '2');
INSERT INTO `company` VALUES ('19', 'Bangladesh Eye Hospital', null, null, 'House # 19/1, Road # 6, Dhanmondi, Dhaka - 1205', null, null, '4', '2');
INSERT INTO `company` VALUES ('20', 'CMH (Combined Military Hospital)', null, null, 'Dhaka Cantonment', null, null, '1', '1');
INSERT INTO `company` VALUES ('21', 'Bangladesh Railway Hospital', null, null, 'Barisal Medical College Hospital\r\nBarisal.BDR (Bangladesh Rifles) Hospital\r\nDhaka.', '502220', null, '1', '2');
INSERT INTO `company` VALUES ('22', 'CENTRAL HOSPITAL LTD', null, null, 'House # 2, Road # 5, Green Road, Dhanmondi', '+880-2-9660015-19, 017523400', null, '1', '2');
INSERT INTO `company` VALUES ('23', 'Center for the rehabilitation of the paralysed(CRF)', null, null, 'Post CRP Chapin, Savar\r\nDhaka', ' +880-2-7710464-5, 7711766', null, '1', '2');
INSERT INTO `company` VALUES ('24', 'DHAKA GENERAL HOSPITAL (PVT) LTD.', null, null, '17,Hatkhola Lane, Swamibagh New Road\r\nDhaka', '235351, 246708', null, '4', '2');
INSERT INTO `company` VALUES ('25', 'Jalalabad Ragib-Rabeya Medical College', null, null, 'Sunamgonj Road, Sylhet - 3100\r\nBangladesh', null, null, '2', '1');
INSERT INTO `company` VALUES ('26', 'Medinova Hospital', null, null, 'House # 71/A Road # 5/A, Dhanmondi R/A\r\nDhaka', '+880-2-8620353-7, 8624907-10', null, '1', '2');
INSERT INTO `company` VALUES ('27', 'Monowara Hospital (Pvt) Ltd.', null, null, '54, Siddheswari Road\r\nDhaka.', ' +880-2-8318135, 8318529', null, '1', '2');

-- ----------------------------
-- Table structure for company_category
-- ----------------------------
DROP TABLE IF EXISTS `company_category`;
CREATE TABLE `company_category` (
  `company_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_cat_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`company_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of company_category
-- ----------------------------
INSERT INTO `company_category` VALUES ('1', 'Hospital');
INSERT INTO `company_category` VALUES ('2', 'Clinic');
INSERT INTO `company_category` VALUES ('3', 'Pharmaceutical Company');
INSERT INTO `company_category` VALUES ('4', 'Medicine Shop');
INSERT INTO `company_category` VALUES ('5', 'Fitness Center');
INSERT INTO `company_category` VALUES ('6', 'Therapy Center');
INSERT INTO `company_category` VALUES ('7', 'Medical Diagnostic Center');
INSERT INTO `company_category` VALUES ('8', 'Pharmacist ');
INSERT INTO `company_category` VALUES ('9', 'Dentist');
INSERT INTO `company_category` VALUES ('10', 'Dietician');
INSERT INTO `company_category` VALUES ('11', 'Doctor');
INSERT INTO `company_category` VALUES ('12', 'Others');

-- ----------------------------
-- Table structure for company_discount
-- ----------------------------
DROP TABLE IF EXISTS `company_discount`;
CREATE TABLE `company_discount` (
  `company_discount_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_discount_discount` int(255) DEFAULT NULL,
  `company_discount_company` int(255) DEFAULT NULL,
  PRIMARY KEY (`company_discount_id`),
  KEY `fk_comapny_id` (`company_discount_company`),
  KEY `fk_discount` (`company_discount_discount`),
  CONSTRAINT `fk_comapny_id` FOREIGN KEY (`company_discount_company`) REFERENCES `company` (`company_id`),
  CONSTRAINT `fk_discount` FOREIGN KEY (`company_discount_discount`) REFERENCES `discount` (`discount_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of company_discount
-- ----------------------------
INSERT INTO `company_discount` VALUES ('1', '325', '6');

-- ----------------------------
-- Table structure for discount
-- ----------------------------
DROP TABLE IF EXISTS `discount`;
CREATE TABLE `discount` (
  `discount_id` int(11) NOT NULL AUTO_INCREMENT,
  `discount_name` varchar(255) DEFAULT NULL,
  `discount_time_start` datetime DEFAULT NULL,
  `dicount_time_end` datetime DEFAULT NULL,
  PRIMARY KEY (`discount_id`)
) ENGINE=InnoDB AUTO_INCREMENT=327 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of discount
-- ----------------------------
INSERT INTO `discount` VALUES ('1', 'No discount found for discount one', '2015-07-21 06:05:02', '2015-07-22 06:12:19');
INSERT INTO `discount` VALUES ('325', 'No discount found for discount one', '2015-07-13 06:09:58', '2015-08-27 06:12:22');
INSERT INTO `discount` VALUES ('326', 'No discount found for discount one', '2015-07-28 06:10:01', '2015-07-27 06:12:26');

-- ----------------------------
-- Table structure for district
-- ----------------------------
DROP TABLE IF EXISTS `district`;
CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `division` int(11) DEFAULT NULL,
  PRIMARY KEY (`district_name`),
  KEY `fk_division` (`division`),
  KEY `district_id` (`district_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of district
-- ----------------------------
INSERT INTO `district` VALUES ('34', 'Bagerhat', '4');
INSERT INTO `district` VALUES ('7', 'Bandarban', '2');
INSERT INTO `district` VALUES ('1', 'Barguna', '1');
INSERT INTO `district` VALUES ('2', 'Barisal', '1');
INSERT INTO `district` VALUES ('3', 'Bhola', '1');
INSERT INTO `district` VALUES ('44', 'Bogra', '5');
INSERT INTO `district` VALUES ('8', 'Brahmanbaria', '2');
INSERT INTO `district` VALUES ('9', 'Chandpur', '2');
INSERT INTO `district` VALUES ('45', 'Chapai Nawabganj', '5');
INSERT INTO `district` VALUES ('10', 'Chittagong', '2');
INSERT INTO `district` VALUES ('35', 'Chuadanga', '4');
INSERT INTO `district` VALUES ('11', 'Comilla', '2');
INSERT INTO `district` VALUES ('12', 'Cox\'s Bazar', '2');
INSERT INTO `district` VALUES ('17', 'Dhaka', '3');
INSERT INTO `district` VALUES ('52', 'Dinajpur', '6');
INSERT INTO `district` VALUES ('18', 'Faridpur', '3');
INSERT INTO `district` VALUES ('13', 'Feni', '2');
INSERT INTO `district` VALUES ('53', 'Gaibandha', '6');
INSERT INTO `district` VALUES ('19', 'Gazipur', '3');
INSERT INTO `district` VALUES ('20', 'Gopalganj', '3');
INSERT INTO `district` VALUES ('60', 'Habiganj', '7');
INSERT INTO `district` VALUES ('21', 'Jamalpur', '3');
INSERT INTO `district` VALUES ('36', 'Jessore', '4');
INSERT INTO `district` VALUES ('4', 'Jhalokati', '1');
INSERT INTO `district` VALUES ('37', 'Jhenaidah', '4');
INSERT INTO `district` VALUES ('46', 'Joypurhat', '5');
INSERT INTO `district` VALUES ('14', 'Khagrachhari', '2');
INSERT INTO `district` VALUES ('38', 'Khulna', '4');
INSERT INTO `district` VALUES ('22', 'Kishoregonj', '3');
INSERT INTO `district` VALUES ('54', 'Kurigram', '6');
INSERT INTO `district` VALUES ('39', 'Kushtia', '4');
INSERT INTO `district` VALUES ('55', 'Lalmonirhat', '6');
INSERT INTO `district` VALUES ('23', 'Madaripur', '3');
INSERT INTO `district` VALUES ('40', 'Magura', '4');
INSERT INTO `district` VALUES ('24', 'Manikganj', '3');
INSERT INTO `district` VALUES ('61', 'Maulvibazar', '7');
INSERT INTO `district` VALUES ('41', 'Meherpur', '4');
INSERT INTO `district` VALUES ('25', 'Munshiganj', '3');
INSERT INTO `district` VALUES ('26', 'Mymensingh', '3');
INSERT INTO `district` VALUES ('47', 'Naogaon', '5');
INSERT INTO `district` VALUES ('42', 'Narail', '4');
INSERT INTO `district` VALUES ('27', 'Narayanganj', '3');
INSERT INTO `district` VALUES ('28', 'Narsingdi', '3');
INSERT INTO `district` VALUES ('48', 'Natore', '5');
INSERT INTO `district` VALUES ('29', 'Netrakona', '3');
INSERT INTO `district` VALUES ('56', 'Nilphamari', '6');
INSERT INTO `district` VALUES ('15', 'Noakhali', '2');
INSERT INTO `district` VALUES ('49', 'Pabna', '5');
INSERT INTO `district` VALUES ('57', 'Panchagarh', '6');
INSERT INTO `district` VALUES ('5', 'Patuakhali', '1');
INSERT INTO `district` VALUES ('6', 'Pirojpur', '1');
INSERT INTO `district` VALUES ('30', 'Rajbari', '3');
INSERT INTO `district` VALUES ('50', 'Rajshahi', '5');
INSERT INTO `district` VALUES ('16', 'Rangamati', '2');
INSERT INTO `district` VALUES ('58', 'Rangpur', '6');
INSERT INTO `district` VALUES ('43', 'Satkhira', '4');
INSERT INTO `district` VALUES ('33', 'Shariatpur', '3');
INSERT INTO `district` VALUES ('31', 'Sherpur', '3');
INSERT INTO `district` VALUES ('51', 'Sirajganj', '5');
INSERT INTO `district` VALUES ('62', 'Sunamganj', '7');
INSERT INTO `district` VALUES ('63', 'Sylhet', '7');
INSERT INTO `district` VALUES ('32', 'Tangail', '3');
INSERT INTO `district` VALUES ('59', 'Thakurgaon', '6');

-- ----------------------------
-- Table structure for division
-- ----------------------------
DROP TABLE IF EXISTS `division`;
CREATE TABLE `division` (
  `division_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`division_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of division
-- ----------------------------
INSERT INTO `division` VALUES ('1', 'Barisal');
INSERT INTO `division` VALUES ('2', 'Chittagong');
INSERT INTO `division` VALUES ('3', 'Dhaka');
INSERT INTO `division` VALUES ('4', 'Khulna');
INSERT INTO `division` VALUES ('5', 'Rajshahi');
INSERT INTO `division` VALUES ('6', 'Rangpur');
INSERT INTO `division` VALUES ('7', 'Sylhet');

-- ----------------------------
-- Table structure for doctors
-- ----------------------------
DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(255) DEFAULT NULL,
  `doctor_title` varchar(255) DEFAULT NULL,
  `doctor_gender` varchar(255) DEFAULT NULL,
  `doctor_bmdc_no` varchar(255) DEFAULT NULL,
  `doctor_email` varchar(255) DEFAULT NULL,
  `doctor_phone` varchar(255) DEFAULT NULL,
  `doctor_specialist` int(11) DEFAULT NULL,
  `doctor_address_1` varchar(255) DEFAULT NULL,
  `doctor_address_2` varchar(255) DEFAULT NULL,
  `doctor_address_3` varchar(255) DEFAULT NULL,
  `doctor_address_4` varchar(255) DEFAULT NULL,
  `doctor_district` int(11) DEFAULT NULL,
  `doctor_user_name` int(11) NOT NULL,
  PRIMARY KEY (`doctor_id`),
  KEY `fk_doctor_specialist` (`doctor_specialist`),
  KEY `fk_doctor_district` (`doctor_district`),
  KEY `fk_doctor_user` (`doctor_user_name`),
  CONSTRAINT `fk_doc_user_name` FOREIGN KEY (`doctor_user_name`) REFERENCES `user_login` (`id`),
  CONSTRAINT `fk_doctor_district` FOREIGN KEY (`doctor_district`) REFERENCES `district` (`district_id`),
  CONSTRAINT `fk_doctor_specialist` FOREIGN KEY (`doctor_specialist`) REFERENCES `doctors_category` (`doctor_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of doctors
-- ----------------------------
INSERT INTO `doctors` VALUES ('3', 'Ziauddin ', 'MBBS', 'Male', 'FAGED', 'ziauddin.sarker@gmail.com', '01720223388', '2', 'Khilgaon, Dhaka', null, null, null, '3', '3');
INSERT INTO `doctors` VALUES ('4', 'ziauddin', 'MBBS', 'male', 'ABDG', 'ziauddin@siz.com', '01720223388', '4', 'Hakajlsdjf salfkjslf sdaflkj', null, null, null, null, '4');
INSERT INTO `doctors` VALUES ('5', 'ziauddin', 'MBBS', 'male', 'ABDG', 'ziauddin@siz.com', '01720223388', '7', 'Hakajlsdjf salfkjslf sdaflkj', null, null, null, null, '5');
INSERT INTO `doctors` VALUES ('6', 'ziauddin sarker', 'MBBS FCPS', 'male', 'AGVVAE', 'ziauddisn@siz.com', '01720223388', '4', 'Djakak', null, null, null, null, '6');
INSERT INTO `doctors` VALUES ('7', 'ziauddin sarker', 'MBBS FCPS', 'female', 'AGVVAE', 'ziauddin@siz.com', '01720223388', '6', 'Djakak', null, null, null, '15', '7');
INSERT INTO `doctors` VALUES ('8', 'ziauddin sarker', '', null, '', 'ziauddin@siz.com', '01720223388', '3', 'Hakajlsdjf salfkjslf sdaflkj', null, null, null, '7', '8');

-- ----------------------------
-- Table structure for doctors_category
-- ----------------------------
DROP TABLE IF EXISTS `doctors_category`;
CREATE TABLE `doctors_category` (
  `doctor_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_category_name` varchar(255) DEFAULT NULL,
  `doctor_category_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`doctor_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of doctors_category
-- ----------------------------
INSERT INTO `doctors_category` VALUES ('1', 'Allergist  \r\n', '(For allergy, hey fever or asthma problems)\r\n');
INSERT INTO `doctors_category` VALUES ('2', 'Andrologists  \r\n', '(For males reproductive system disorders)\r\n');
INSERT INTO `doctors_category` VALUES ('3', 'Anesthesiologist  \r\n', '(For anesthesia and related complications)\r\n');
INSERT INTO `doctors_category` VALUES ('4', 'Audiologist  \r\n', '(For hearing problems)\r\n');
INSERT INTO `doctors_category` VALUES ('5', 'Cardiologist  \r\n', '(For heart and cardiovascular diseases)\r\n');
INSERT INTO `doctors_category` VALUES ('6', 'Clinical Neurophysiologist  \r\n', '(For nervous system) \r\n');
INSERT INTO `doctors_category` VALUES ('7', 'Dentist  \r\n', '(For dental problems)\r\n');
INSERT INTO `doctors_category` VALUES ('8', 'Dermatologist  \r\n', '(For skin, hair and nails )\r\n');

-- ----------------------------
-- Table structure for doctors_chamber
-- ----------------------------
DROP TABLE IF EXISTS `doctors_chamber`;
CREATE TABLE `doctors_chamber` (
  `doctors_chambers_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctors_chambers_doctor_name` int(11) DEFAULT NULL,
  `doctors_chambers_name` varchar(255) DEFAULT NULL,
  `doctors_chambers_address` varchar(255) DEFAULT NULL,
  `doctors_chambers_day` varchar(255) DEFAULT NULL,
  `doctors_chembers_time` time DEFAULT NULL,
  `doctors_chambers_fee` int(255) DEFAULT NULL,
  `doctors_chambers_new_visit` int(11) DEFAULT NULL,
  `doctors_chambers_re_visit` int(11) DEFAULT NULL,
  `doctors_chambers_phone` varchar(255) DEFAULT NULL,
  `doctors_chambers_email` varchar(255) DEFAULT NULL,
  `doctors_chambers_call_for_apointment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`doctors_chambers_id`),
  KEY `fk_doctors_name` (`doctors_chambers_doctor_name`),
  CONSTRAINT `fk_doctors_name` FOREIGN KEY (`doctors_chambers_doctor_name`) REFERENCES `doctors` (`doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of doctors_chamber
-- ----------------------------

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `events_id` int(11) NOT NULL AUTO_INCREMENT,
  `events_name` varchar(255) DEFAULT NULL,
  `events_time` date DEFAULT NULL,
  `events_address` varchar(255) DEFAULT NULL,
  `events_phone` varchar(255) DEFAULT NULL,
  `events_contact_time` varchar(255) DEFAULT NULL,
  `events_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`events_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('1', 'Nothing Events', '2015-08-01', '258 Nabinbagh, Khilgaon , Dhaka', '01720223388', '12:90', 'ziauddin.sarker@gmail.com');
INSERT INTO `events` VALUES ('2', 'Another Nothing Events', '2015-07-30', 'Khilgaon Badda Kustia', '7211434', '3:20', 'info@simkam.com');

-- ----------------------------
-- Table structure for rating
-- ----------------------------
DROP TABLE IF EXISTS `rating`;
CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `rating_value` varchar(255) DEFAULT NULL,
  `rating_date` datetime DEFAULT NULL,
  `rating_update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rating
-- ----------------------------

-- ----------------------------
-- Table structure for shop
-- ----------------------------
DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) DEFAULT NULL,
  `shop_address` varchar(255) DEFAULT NULL,
  `twenty_four_hours` varchar(255) DEFAULT NULL,
  `call` varchar(255) DEFAULT NULL,
  `home_delivery` varchar(255) DEFAULT NULL,
  `shop_thana` int(11) DEFAULT NULL,
  PRIMARY KEY (`shop_id`),
  KEY `fk_shop_thana` (`shop_thana`),
  CONSTRAINT `fk_shop_thana` FOREIGN KEY (`shop_thana`) REFERENCES `thana` (`thana_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop
-- ----------------------------
INSERT INTO `shop` VALUES ('1', 'M/S Zia traders ', 'Khilgaon Dhaka', '1', '01720223388', 'yes', '3');

-- ----------------------------
-- Table structure for thana
-- ----------------------------
DROP TABLE IF EXISTS `thana`;
CREATE TABLE `thana` (
  `thana_id` int(11) DEFAULT NULL,
  `thana_name` varchar(255) NOT NULL,
  `district_name` int(11) DEFAULT NULL,
  PRIMARY KEY (`thana_name`),
  KEY `fk_district` (`district_name`),
  KEY `thana_id` (`thana_id`),
  CONSTRAINT `fk_district` FOREIGN KEY (`district_name`) REFERENCES `district` (`district_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of thana
-- ----------------------------
INSERT INTO `thana` VALUES ('1', 'Abhay Nagar', '36');
INSERT INTO `thana` VALUES ('2', 'Adabar', '17');
INSERT INTO `thana` VALUES ('3', 'Adamdighi', '44');
INSERT INTO `thana` VALUES ('4', 'Aditmari', '55');
INSERT INTO `thana` VALUES ('5', 'Agailjhara', '2');
INSERT INTO `thana` VALUES ('6', 'Ajmiriganj', '60');
INSERT INTO `thana` VALUES ('7', 'Akhaura', '8');
INSERT INTO `thana` VALUES ('8', 'Akkelpur', '46');
INSERT INTO `thana` VALUES ('9', 'Alamdanga', '35');
INSERT INTO `thana` VALUES ('10', 'Alikadam', '7');
INSERT INTO `thana` VALUES ('11', 'Alphadanga', '18');
INSERT INTO `thana` VALUES ('12', 'Amtali', '1');
INSERT INTO `thana` VALUES ('13', 'Araihazar', '27');
INSERT INTO `thana` VALUES ('14', 'Ashuganj', '8');
INSERT INTO `thana` VALUES ('15', 'Assasuni', '43');
INSERT INTO `thana` VALUES ('16', 'Asulia', '17');
INSERT INTO `thana` VALUES ('17', 'Atghoria', '49');
INSERT INTO `thana` VALUES ('18', 'Atpara', '29');
INSERT INTO `thana` VALUES ('19', 'Atrai', '47');
INSERT INTO `thana` VALUES ('20', 'Atwari', '57');
INSERT INTO `thana` VALUES ('21', 'Austagram', '22');
INSERT INTO `thana` VALUES ('22', 'Babuganj', '2');
INSERT INTO `thana` VALUES ('23', 'Badalgachi', '47');
INSERT INTO `thana` VALUES ('24', 'Badarganj', '53');
INSERT INTO `thana` VALUES ('25', 'Badda', '17');
INSERT INTO `thana` VALUES ('26', 'Bagaichhari', '16');
INSERT INTO `thana` VALUES ('27', 'Bagatipara', '48');
INSERT INTO `thana` VALUES ('28', 'Bagerhat Sadar', '34');
INSERT INTO `thana` VALUES ('29', 'Bagerpara', '36');
INSERT INTO `thana` VALUES ('30', 'Bagha', '50');
INSERT INTO `thana` VALUES ('31', 'Bagmara', '50');
INSERT INTO `thana` VALUES ('32', 'Bahubal', '60');
INSERT INTO `thana` VALUES ('33', 'Bajitpur', '22');
INSERT INTO `thana` VALUES ('34', 'Bakerganj', '2');
INSERT INTO `thana` VALUES ('35', 'Bakshiganj', '21');
INSERT INTO `thana` VALUES ('36', 'Balaganj', '63');
INSERT INTO `thana` VALUES ('37', 'Baliadangi', '59');
INSERT INTO `thana` VALUES ('38', 'Baliakandi', '30');
INSERT INTO `thana` VALUES ('39', 'Bamna', '1');
INSERT INTO `thana` VALUES ('40', 'Banani', '17');
INSERT INTO `thana` VALUES ('41', 'Banaripara', '2');
INSERT INTO `thana` VALUES ('42', 'Bancharampur', '8');
INSERT INTO `thana` VALUES ('43', 'Bandar', '27');
INSERT INTO `thana` VALUES ('44', 'Bandarban Sadar', '7');
INSERT INTO `thana` VALUES ('45', 'Baniyachang', '60');
INSERT INTO `thana` VALUES ('46', 'Barguna Sadar', '1');
INSERT INTO `thana` VALUES ('47', 'Barhatta', '29');
INSERT INTO `thana` VALUES ('48', 'Barigram', '48');
INSERT INTO `thana` VALUES ('49', 'Barisal Sadar', '2');
INSERT INTO `thana` VALUES ('50', 'Barkal', '16');
INSERT INTO `thana` VALUES ('51', 'Barlekha', '61');
INSERT INTO `thana` VALUES ('52', 'Barura', '11');
INSERT INTO `thana` VALUES ('53', 'Basail', '32');
INSERT INTO `thana` VALUES ('54', 'Batiaghata', '38');
INSERT INTO `thana` VALUES ('55', 'Bauphal', '5');
INSERT INTO `thana` VALUES ('56', 'Beani bazar', '63');
INSERT INTO `thana` VALUES ('57', 'Begumganj', '15');
INSERT INTO `thana` VALUES ('58', 'Belabo', '28');
INSERT INTO `thana` VALUES ('59', 'Belaichari', '16');
INSERT INTO `thana` VALUES ('60', 'Belkuchi', '51');
INSERT INTO `thana` VALUES ('61', 'Bera', '49');
INSERT INTO `thana` VALUES ('62', 'Betagi', '1');
INSERT INTO `thana` VALUES ('63', 'Bhairab', '22');
INSERT INTO `thana` VALUES ('64', 'Bhaluka', '26');
INSERT INTO `thana` VALUES ('65', 'Bhandaria', '6');
INSERT INTO `thana` VALUES ('66', 'Bhanga', '18');
INSERT INTO `thana` VALUES ('67', 'Bhangura', '49');
INSERT INTO `thana` VALUES ('68', 'Bhedarganj', '33');
INSERT INTO `thana` VALUES ('69', 'Bheramara', '39');
INSERT INTO `thana` VALUES ('70', 'Bhola Sadar', '3');
INSERT INTO `thana` VALUES ('71', 'Bholahat', '45');
INSERT INTO `thana` VALUES ('72', 'Bhuapur', '32');
INSERT INTO `thana` VALUES ('73', 'Bhurangamari', '54');
INSERT INTO `thana` VALUES ('74', 'Bijoynagar', '8');
INSERT INTO `thana` VALUES ('75', 'Biman Bandar', '17');
INSERT INTO `thana` VALUES ('76', 'Birampur', '52');
INSERT INTO `thana` VALUES ('77', 'Birgonj', '52');
INSERT INTO `thana` VALUES ('78', 'Birol', '52');
INSERT INTO `thana` VALUES ('79', 'Bishwamvarpur', '62');
INSERT INTO `thana` VALUES ('80', 'Biswanath', '63');
INSERT INTO `thana` VALUES ('81', 'Boalia', '50');
INSERT INTO `thana` VALUES ('82', 'Boalmari', '18');
INSERT INTO `thana` VALUES ('83', 'Bochagonj', '52');
INSERT INTO `thana` VALUES ('84', 'Boda', '57');
INSERT INTO `thana` VALUES ('85', 'Bogra Sadar', '44');
INSERT INTO `thana` VALUES ('86', 'Brahmanbaria Sadar', '8');
INSERT INTO `thana` VALUES ('87', 'Brahmanpara', '11');
INSERT INTO `thana` VALUES ('88', 'Burhanuddin', '3');
INSERT INTO `thana` VALUES ('89', 'Burichang', '11');
INSERT INTO `thana` VALUES ('90', 'Cantonment', '17');
INSERT INTO `thana` VALUES ('91', 'Chakaria', '12');
INSERT INTO `thana` VALUES ('92', 'Chandgaon', '10');
INSERT INTO `thana` VALUES ('93', 'Chandina', '11');
INSERT INTO `thana` VALUES ('94', 'Chandpur Sadar', '9');
INSERT INTO `thana` VALUES ('95', 'Chapai Nawabganj Sadar', '45');
INSERT INTO `thana` VALUES ('96', 'Char Fesson', '3');
INSERT INTO `thana` VALUES ('97', 'Char Rajibpur', '54');
INSERT INTO `thana` VALUES ('98', 'Charbhadrasan', '18');
INSERT INTO `thana` VALUES ('99', 'Charghat', '50');
INSERT INTO `thana` VALUES ('100', 'Chatkhil', '15');
INSERT INTO `thana` VALUES ('101', 'Chatmohor', '49');
INSERT INTO `thana` VALUES ('102', 'Chhagalnaiya', '13');
INSERT INTO `thana` VALUES ('103', 'Chhatak', '62');
INSERT INTO `thana` VALUES ('104', 'Chilmari', '54');
INSERT INTO `thana` VALUES ('105', 'Chirirbandar', '52');
INSERT INTO `thana` VALUES ('106', 'Chitalmari', '34');
INSERT INTO `thana` VALUES ('107', 'Chittagong Port', '10');
INSERT INTO `thana` VALUES ('108', 'Chouddagram', '11');
INSERT INTO `thana` VALUES ('109', 'Chouhali', '51');
INSERT INTO `thana` VALUES ('110', 'Chowgacha', '36');
INSERT INTO `thana` VALUES ('111', 'Chuadanga Sadar', '35');
INSERT INTO `thana` VALUES ('112', 'Chunarughat', '60');
INSERT INTO `thana` VALUES ('113', 'Comilla Adarsha Sadar', '11');
INSERT INTO `thana` VALUES ('114', 'Comilla Sadar Dakshin', '11');
INSERT INTO `thana` VALUES ('115', 'Companiganj', '15');
INSERT INTO `thana` VALUES ('116', 'Cox\'s Bazar Sadar', '12');
INSERT INTO `thana` VALUES ('117', 'Dacope', '38');
INSERT INTO `thana` VALUES ('118', 'Daganbhuiyan', '13');
INSERT INTO `thana` VALUES ('119', 'Dakshinkhan', '17');
INSERT INTO `thana` VALUES ('120', 'Damudya', '33');
INSERT INTO `thana` VALUES ('121', 'Damurhuda', '35');
INSERT INTO `thana` VALUES ('122', 'Darus Salam', '17');
INSERT INTO `thana` VALUES ('123', 'Dashmina', '5');
INSERT INTO `thana` VALUES ('124', 'Daudkandi', '11');
INSERT INTO `thana` VALUES ('125', 'Daulatkhan', '3');
INSERT INTO `thana` VALUES ('126', 'Daulatpur', '24');
INSERT INTO `thana` VALUES ('127', 'Debhata', '43');
INSERT INTO `thana` VALUES ('128', 'Debidwar', '11');
INSERT INTO `thana` VALUES ('129', 'Debigonj', '57');
INSERT INTO `thana` VALUES ('130', 'Delduar', '32');
INSERT INTO `thana` VALUES ('131', 'Demra', '17');
INSERT INTO `thana` VALUES ('132', 'Derai', '62');
INSERT INTO `thana` VALUES ('133', 'Dewanganj', '21');
INSERT INTO `thana` VALUES ('134', 'Dhamoirhat', '47');
INSERT INTO `thana` VALUES ('135', 'Dhamrai', '17');
INSERT INTO `thana` VALUES ('136', 'Dhanbari', '32');
INSERT INTO `thana` VALUES ('137', 'Dhanmondi', '17');
INSERT INTO `thana` VALUES ('138', 'Dharmapasha', '62');
INSERT INTO `thana` VALUES ('139', 'Dhobaura', '26');
INSERT INTO `thana` VALUES ('140', 'Dhunat', '44');
INSERT INTO `thana` VALUES ('141', 'Dhupchachia', '44');
INSERT INTO `thana` VALUES ('142', 'Dighinala', '14');
INSERT INTO `thana` VALUES ('143', 'Dimla', '56');
INSERT INTO `thana` VALUES ('144', 'Dinajpur Sadar', '52');
INSERT INTO `thana` VALUES ('145', 'Domar', '56');
INSERT INTO `thana` VALUES ('146', 'Double Mooring', '10');
INSERT INTO `thana` VALUES ('147', 'Dumaria', '38');
INSERT INTO `thana` VALUES ('148', 'Dumki', '5');
INSERT INTO `thana` VALUES ('149', 'Durgapur', '29');
INSERT INTO `thana` VALUES ('150', 'Dwarabazar', '62');
INSERT INTO `thana` VALUES ('151', 'Fakirhat', '34');
INSERT INTO `thana` VALUES ('152', 'Faridganj', '9');
INSERT INTO `thana` VALUES ('153', 'Faridpur', '18');
INSERT INTO `thana` VALUES ('154', 'Fatikchari', '10');
INSERT INTO `thana` VALUES ('155', 'Fenchuganj', '63');
INSERT INTO `thana` VALUES ('156', 'Feni', '13');
INSERT INTO `thana` VALUES ('157', 'Fulbari', '52');
INSERT INTO `thana` VALUES ('158', 'Fulgazi', '13');
INSERT INTO `thana` VALUES ('159', 'Gabtali', '44');
INSERT INTO `thana` VALUES ('160', 'Gaffargoan', '26');
INSERT INTO `thana` VALUES ('161', 'Gaibandha', '53');
INSERT INTO `thana` VALUES ('162', 'Galachipa', '5');
INSERT INTO `thana` VALUES ('163', 'Gangachara', '53');
INSERT INTO `thana` VALUES ('164', 'Gangni', '41');
INSERT INTO `thana` VALUES ('165', 'Gazaria', '25');
INSERT INTO `thana` VALUES ('166', 'Gazipur Sadar', '19');
INSERT INTO `thana` VALUES ('167', 'Ghatail', '32');
INSERT INTO `thana` VALUES ('168', 'Ghior', '24');
INSERT INTO `thana` VALUES ('169', 'Ghoraghat', '52');
INSERT INTO `thana` VALUES ('170', 'Goalandaghat', '30');
INSERT INTO `thana` VALUES ('171', 'Gobindaganj', '53');
INSERT INTO `thana` VALUES ('172', 'Godagari', '50');
INSERT INTO `thana` VALUES ('173', 'Golapganj', '63');
INSERT INTO `thana` VALUES ('174', 'Gomastapur', '45');
INSERT INTO `thana` VALUES ('175', 'Gopalganj Sadar', '20');
INSERT INTO `thana` VALUES ('176', 'Gopalpur', '32');
INSERT INTO `thana` VALUES ('177', 'Gosairhat', '33');
INSERT INTO `thana` VALUES ('178', 'Gouripur', '26');
INSERT INTO `thana` VALUES ('179', 'Gournadi', '2');
INSERT INTO `thana` VALUES ('180', 'Gowainghat', '63');
INSERT INTO `thana` VALUES ('181', 'Gulshan', '17');
INSERT INTO `thana` VALUES ('182', 'Gurudashpur', '48');
INSERT INTO `thana` VALUES ('183', 'Habiganj', '60');
INSERT INTO `thana` VALUES ('184', 'Haimchar', '9');
INSERT INTO `thana` VALUES ('185', 'Hajiganj', '9');
INSERT INTO `thana` VALUES ('186', 'Hakimpur', '52');
INSERT INTO `thana` VALUES ('187', 'Halishahar', '10');
INSERT INTO `thana` VALUES ('188', 'Haluaghat', '26');
INSERT INTO `thana` VALUES ('189', 'Harinakunda', '37');
INSERT INTO `thana` VALUES ('190', 'Haripur', '59');
INSERT INTO `thana` VALUES ('191', 'Harirampur', '24');
INSERT INTO `thana` VALUES ('192', 'Hathazari', '10');
INSERT INTO `thana` VALUES ('193', 'Hatibandha', '55');
INSERT INTO `thana` VALUES ('194', 'Hatiya', '15');
INSERT INTO `thana` VALUES ('195', 'Hazaribagh', '17');
INSERT INTO `thana` VALUES ('196', 'Hizla', '2');
INSERT INTO `thana` VALUES ('197', 'Homna', '11');
INSERT INTO `thana` VALUES ('198', 'Hossainpur', '22');
INSERT INTO `thana` VALUES ('199', 'Ishwardi', '49');
INSERT INTO `thana` VALUES ('200', 'Islampur', '21');
INSERT INTO `thana` VALUES ('201', 'Iswarganj', '26');
INSERT INTO `thana` VALUES ('202', 'Itna', '22');
INSERT INTO `thana` VALUES ('203', 'Jagannathpur', '62');
INSERT INTO `thana` VALUES ('204', 'Jaldhaka', '56');
INSERT INTO `thana` VALUES ('205', 'Jamalganj', '62');
INSERT INTO `thana` VALUES ('206', 'Jamalpur', '21');
INSERT INTO `thana` VALUES ('207', 'Jessore Sadar', '36');
INSERT INTO `thana` VALUES ('208', 'Jhalokati', '4');
INSERT INTO `thana` VALUES ('209', 'Jhenaidah', '37');
INSERT INTO `thana` VALUES ('210', 'Jhenaigati', '31');
INSERT INTO `thana` VALUES ('211', 'Jhikargacha', '36');
INSERT INTO `thana` VALUES ('212', 'Jibannagar', '35');
INSERT INTO `thana` VALUES ('213', 'Joydevpur', '19');
INSERT INTO `thana` VALUES ('214', 'Joypurhat Sadar', '46');
INSERT INTO `thana` VALUES ('215', 'Juraichhari', '16');
INSERT INTO `thana` VALUES ('216', 'Juri', '61');
INSERT INTO `thana` VALUES ('217', 'Kabirhat', '15');
INSERT INTO `thana` VALUES ('218', 'Kachua', '9');
INSERT INTO `thana` VALUES ('219', 'Kafrul', '17');
INSERT INTO `thana` VALUES ('220', 'Kahaloo', '44');
INSERT INTO `thana` VALUES ('221', 'Kaharole', '52');
INSERT INTO `thana` VALUES ('222', 'Kajipur', '51');
INSERT INTO `thana` VALUES ('223', 'Kalabagan', '17');
INSERT INTO `thana` VALUES ('224', 'Kalai', '46');
INSERT INTO `thana` VALUES ('225', 'Kalapara', '5');
INSERT INTO `thana` VALUES ('226', 'Kalarua', '43');
INSERT INTO `thana` VALUES ('227', 'Kalia', '42');
INSERT INTO `thana` VALUES ('228', 'Kaliajuri', '29');
INSERT INTO `thana` VALUES ('229', 'Kaliakair', '19');
INSERT INTO `thana` VALUES ('230', 'Kaliganj', '19');
INSERT INTO `thana` VALUES ('231', 'Kalihati', '32');
INSERT INTO `thana` VALUES ('232', 'Kalkini', '23');
INSERT INTO `thana` VALUES ('233', 'Kalmakanda', '29');
INSERT INTO `thana` VALUES ('234', 'Kalukhali', '30');
INSERT INTO `thana` VALUES ('235', 'Kamalganj', '61');
INSERT INTO `thana` VALUES ('236', 'Kamarkandi', '51');
INSERT INTO `thana` VALUES ('237', 'Kamrangir Char', '17');
INSERT INTO `thana` VALUES ('238', 'Kapasia', '19');
INSERT INTO `thana` VALUES ('239', 'Kaptai', '16');
INSERT INTO `thana` VALUES ('240', 'karimganj', '22');
INSERT INTO `thana` VALUES ('241', 'Karnafuli', '10');
INSERT INTO `thana` VALUES ('242', 'Kasba', '8');
INSERT INTO `thana` VALUES ('243', 'Kasiani', '20');
INSERT INTO `thana` VALUES ('244', 'Kathalia', '4');
INSERT INTO `thana` VALUES ('245', 'Katiadi', '22');
INSERT INTO `thana` VALUES ('246', 'Kaunia', '58');
INSERT INTO `thana` VALUES ('247', 'Kawkhali', '6');
INSERT INTO `thana` VALUES ('248', 'Kendua', '29');
INSERT INTO `thana` VALUES ('249', 'Keshabpur', '36');
INSERT INTO `thana` VALUES ('250', 'Khagrachhari Sadar', '14');
INSERT INTO `thana` VALUES ('251', 'Khansama', '52');
INSERT INTO `thana` VALUES ('252', 'Khetlal', '46');
INSERT INTO `thana` VALUES ('253', 'Khilkhet', '17');
INSERT INTO `thana` VALUES ('254', 'Khoksa', '39');
INSERT INTO `thana` VALUES ('255', 'Khulna', '38');
INSERT INTO `thana` VALUES ('256', 'Khulsi', '10');
INSERT INTO `thana` VALUES ('257', 'Kishoreganj', '56');
INSERT INTO `thana` VALUES ('258', 'Kishorganj Sadar', '22');
INSERT INTO `thana` VALUES ('259', 'Kotalipara', '20');
INSERT INTO `thana` VALUES ('260', 'Kotchandpur', '37');
INSERT INTO `thana` VALUES ('261', 'Kotowali', '17');
INSERT INTO `thana` VALUES ('262', 'Kotwali', '10');
INSERT INTO `thana` VALUES ('263', 'Koyra', '38');
INSERT INTO `thana` VALUES ('264', 'Kulaura', '61');
INSERT INTO `thana` VALUES ('265', 'Kuliarchar', '22');
INSERT INTO `thana` VALUES ('266', 'Kumarkhali', '39');
INSERT INTO `thana` VALUES ('267', 'Kurigram', '54');
INSERT INTO `thana` VALUES ('268', 'Kushtia', '39');
INSERT INTO `thana` VALUES ('269', 'Kutubdia', '12');
INSERT INTO `thana` VALUES ('270', 'Lakhai', '60');
INSERT INTO `thana` VALUES ('271', 'Laksam', '11');
INSERT INTO `thana` VALUES ('272', 'Lakshmichhari', '14');
INSERT INTO `thana` VALUES ('273', 'Lalmohan', '3');
INSERT INTO `thana` VALUES ('274', 'Lalmonirhat', '55');
INSERT INTO `thana` VALUES ('275', 'Lalpur', '48');
INSERT INTO `thana` VALUES ('276', 'Lama', '7');
INSERT INTO `thana` VALUES ('277', 'Langadu', '16');
INSERT INTO `thana` VALUES ('278', 'Lohagara', '10');
INSERT INTO `thana` VALUES ('279', 'Lohajang', '25');
INSERT INTO `thana` VALUES ('280', 'Madan', '29');
INSERT INTO `thana` VALUES ('281', 'Madarganj', '21');
INSERT INTO `thana` VALUES ('282', 'Madaripur', '23');
INSERT INTO `thana` VALUES ('283', 'Madhabpur', '60');
INSERT INTO `thana` VALUES ('284', 'Madhukhali', '18');
INSERT INTO `thana` VALUES ('285', 'Madhupur', '32');
INSERT INTO `thana` VALUES ('286', 'Magura', '40');
INSERT INTO `thana` VALUES ('287', 'Mahalchhari', '14');
INSERT INTO `thana` VALUES ('288', 'Maheshkhali', '12');
INSERT INTO `thana` VALUES ('289', 'Manda', '47');
INSERT INTO `thana` VALUES ('290', 'Manikchhari', '14');
INSERT INTO `thana` VALUES ('291', 'Manikganj', '24');
INSERT INTO `thana` VALUES ('292', 'Mathbaria', '6');
INSERT INTO `thana` VALUES ('293', 'Matihar', '50');
INSERT INTO `thana` VALUES ('294', 'Matiranga', '14');
INSERT INTO `thana` VALUES ('295', 'Matlab', '9');
INSERT INTO `thana` VALUES ('296', 'Maulvibazar Sadar', '61');
INSERT INTO `thana` VALUES ('297', 'Meghna', '11');
INSERT INTO `thana` VALUES ('298', 'Mehendiganj', '2');
INSERT INTO `thana` VALUES ('299', 'Meherpur', '41');
INSERT INTO `thana` VALUES ('300', 'Melandah', '21');
INSERT INTO `thana` VALUES ('301', 'Mirpur', '17');
INSERT INTO `thana` VALUES ('302', 'Mirsarai', '10');
INSERT INTO `thana` VALUES ('303', 'Mirzaganj', '5');
INSERT INTO `thana` VALUES ('304', 'Mirzapur', '32');
INSERT INTO `thana` VALUES ('305', 'Mithamain', '22');
INSERT INTO `thana` VALUES ('306', 'Mithapukur', '58');
INSERT INTO `thana` VALUES ('307', 'Mohadevpur', '47');
INSERT INTO `thana` VALUES ('308', 'Mohammadpur', '17');
INSERT INTO `thana` VALUES ('309', 'Mohanganj', '29');
INSERT INTO `thana` VALUES ('310', 'Moheshpur', '37');
INSERT INTO `thana` VALUES ('311', 'Mohonpur', '50');
INSERT INTO `thana` VALUES ('312', 'Mollahat', '34');
INSERT INTO `thana` VALUES ('313', 'Mongla', '34');
INSERT INTO `thana` VALUES ('314', 'Monirampur', '36');
INSERT INTO `thana` VALUES ('315', 'Monohardi', '28');
INSERT INTO `thana` VALUES ('316', 'Monohargonj', '11');
INSERT INTO `thana` VALUES ('317', 'Monpura', '3');
INSERT INTO `thana` VALUES ('318', 'Morrelgonj', '34');
INSERT INTO `thana` VALUES ('319', 'Motijheel', '17');
INSERT INTO `thana` VALUES ('320', 'MujibNagar', '41');
INSERT INTO `thana` VALUES ('321', 'Muksudpur', '20');
INSERT INTO `thana` VALUES ('322', 'Muktagacha', '26');
INSERT INTO `thana` VALUES ('323', 'Muladi', '2');
INSERT INTO `thana` VALUES ('324', 'Munshiganj', '25');
INSERT INTO `thana` VALUES ('325', 'Muradnagar', '11');
INSERT INTO `thana` VALUES ('326', 'Mymensingh', '26');
INSERT INTO `thana` VALUES ('327', 'Nabi Nagar', '8');
INSERT INTO `thana` VALUES ('328', 'Nabiganj', '60');
INSERT INTO `thana` VALUES ('329', 'Nachole', '45');
INSERT INTO `thana` VALUES ('330', 'Nagarkanda', '18');
INSERT INTO `thana` VALUES ('331', 'Nagarpur', '32');
INSERT INTO `thana` VALUES ('332', 'Nageshwari', '54');
INSERT INTO `thana` VALUES ('333', 'Naikhongchhari', '7');
INSERT INTO `thana` VALUES ('334', 'Nakhla', '31');
INSERT INTO `thana` VALUES ('335', 'Nalchity', '4');
INSERT INTO `thana` VALUES ('336', 'Nalitabari', '31');
INSERT INTO `thana` VALUES ('337', 'Nandail', '26');
INSERT INTO `thana` VALUES ('338', 'Nandigram', '44');
INSERT INTO `thana` VALUES ('339', 'Nangalkot', '11');
INSERT INTO `thana` VALUES ('340', 'Nannerchar', '16');
INSERT INTO `thana` VALUES ('341', 'Naogaon', '47');
INSERT INTO `thana` VALUES ('342', 'Narail', '42');
INSERT INTO `thana` VALUES ('343', 'Narayanganj', '27');
INSERT INTO `thana` VALUES ('344', 'Naria', '33');
INSERT INTO `thana` VALUES ('345', 'Narshingdi', '28');
INSERT INTO `thana` VALUES ('346', 'Nasir Nagar', '8');
INSERT INTO `thana` VALUES ('347', 'Natore', '48');
INSERT INTO `thana` VALUES ('348', 'Nawabganj', '17');
INSERT INTO `thana` VALUES ('349', 'Nawabgonj', '52');
INSERT INTO `thana` VALUES ('350', 'Nazirpur', '6');
INSERT INTO `thana` VALUES ('351', 'Netrokona', '29');
INSERT INTO `thana` VALUES ('352', 'Niamatpur', '47');
INSERT INTO `thana` VALUES ('353', 'Nikli', '22');
INSERT INTO `thana` VALUES ('354', 'Nilphamari', '56');
INSERT INTO `thana` VALUES ('355', 'Noakhali', '15');
INSERT INTO `thana` VALUES ('356', 'Pabna', '49');
INSERT INTO `thana` VALUES ('357', 'Pahartali', '10');
INSERT INTO `thana` VALUES ('358', 'Paikgacha', '38');
INSERT INTO `thana` VALUES ('359', 'Pakundia', '22');
INSERT INTO `thana` VALUES ('360', 'Palash', '28');
INSERT INTO `thana` VALUES ('361', 'Palashbari', '53');
INSERT INTO `thana` VALUES ('362', 'Pallabi', '17');
INSERT INTO `thana` VALUES ('363', 'Paltan', '17');
INSERT INTO `thana` VALUES ('364', 'Panchagarh Sadar', '57');
INSERT INTO `thana` VALUES ('365', 'Panchbibi', '46');
INSERT INTO `thana` VALUES ('366', 'Panchhari', '14');
INSERT INTO `thana` VALUES ('367', 'Panchlaish', '10');
INSERT INTO `thana` VALUES ('368', 'Pangsa', '30');
INSERT INTO `thana` VALUES ('369', 'Parbatipur', '52');
INSERT INTO `thana` VALUES ('370', 'Parshuram', '13');
INSERT INTO `thana` VALUES ('371', 'Patenga', '10');
INSERT INTO `thana` VALUES ('372', 'Patgram', '55');
INSERT INTO `thana` VALUES ('373', 'Patharghata', '1');
INSERT INTO `thana` VALUES ('374', 'Patnitola', '47');
INSERT INTO `thana` VALUES ('375', 'Patuakhali', '5');
INSERT INTO `thana` VALUES ('376', 'Pekua', '12');
INSERT INTO `thana` VALUES ('377', 'Perojpur', '6');
INSERT INTO `thana` VALUES ('378', 'Phulbaria', '26');
INSERT INTO `thana` VALUES ('379', 'Phulpur', '26');
INSERT INTO `thana` VALUES ('380', 'Phultala', '38');
INSERT INTO `thana` VALUES ('381', 'Pirgachha', '58');
INSERT INTO `thana` VALUES ('382', 'Pirganj', '58');
INSERT INTO `thana` VALUES ('383', 'Pirgonj', '59');
INSERT INTO `thana` VALUES ('384', 'Poba', '50');
INSERT INTO `thana` VALUES ('385', 'Porsha', '47');
INSERT INTO `thana` VALUES ('386', 'Purbadhala', '29');
INSERT INTO `thana` VALUES ('387', 'Puthia', '50');
INSERT INTO `thana` VALUES ('388', 'Raipura', '28');
INSERT INTO `thana` VALUES ('389', 'Rajapur', '4');
INSERT INTO `thana` VALUES ('390', 'Rajar Hat', '54');
INSERT INTO `thana` VALUES ('391', 'Rajasthali', '16');
INSERT INTO `thana` VALUES ('392', 'Rajbari', '30');
INSERT INTO `thana` VALUES ('393', 'Rajnagar', '61');
INSERT INTO `thana` VALUES ('394', 'Rajoir', '23');
INSERT INTO `thana` VALUES ('395', 'Rajpara', '50');
INSERT INTO `thana` VALUES ('396', 'Ramgarh', '14');
INSERT INTO `thana` VALUES ('397', 'Ramna', '17');
INSERT INTO `thana` VALUES ('398', 'Rampal', '34');
INSERT INTO `thana` VALUES ('399', 'Rampura', '17');
INSERT INTO `thana` VALUES ('400', 'Ramu', '12');
INSERT INTO `thana` VALUES ('401', 'Rangabali', '5');
INSERT INTO `thana` VALUES ('402', 'Rangamati', '16');
INSERT INTO `thana` VALUES ('403', 'Rangpur', '53');
INSERT INTO `thana` VALUES ('404', 'Rangunia', '10');
INSERT INTO `thana` VALUES ('405', 'Raninagar', '47');
INSERT INTO `thana` VALUES ('406', 'Ranisankail', '59');
INSERT INTO `thana` VALUES ('407', 'Raozan', '10');
INSERT INTO `thana` VALUES ('408', 'Rayganj', '51');
INSERT INTO `thana` VALUES ('409', 'Rowangchhari', '7');
INSERT INTO `thana` VALUES ('410', 'Rowmari', '54');
INSERT INTO `thana` VALUES ('411', 'Ruma', '7');
INSERT INTO `thana` VALUES ('412', 'Rupganj', '27');
INSERT INTO `thana` VALUES ('413', 'Rupsha', '38');
INSERT INTO `thana` VALUES ('414', 'SABUJBAGH', '17');
INSERT INTO `thana` VALUES ('415', 'Sadarpur', '18');
INSERT INTO `thana` VALUES ('416', 'Sadullapur', '53');
INSERT INTO `thana` VALUES ('417', 'Saghata', '53');
INSERT INTO `thana` VALUES ('418', 'Saidpur', '56');
INSERT INTO `thana` VALUES ('419', 'Sailkupa', '37');
INSERT INTO `thana` VALUES ('420', 'Salikha', '40');
INSERT INTO `thana` VALUES ('421', 'Saltha', '18');
INSERT INTO `thana` VALUES ('422', 'Sandwip', '10');
INSERT INTO `thana` VALUES ('423', 'Santhia', '49');
INSERT INTO `thana` VALUES ('424', 'Sarail', '8');
INSERT INTO `thana` VALUES ('425', 'Saran Khola', '34');
INSERT INTO `thana` VALUES ('426', 'Sariakandi', '44');
INSERT INTO `thana` VALUES ('427', 'Sarishabari', '21');
INSERT INTO `thana` VALUES ('428', 'Sarsha', '36');
INSERT INTO `thana` VALUES ('429', 'Satkania', '10');
INSERT INTO `thana` VALUES ('430', 'Satkhira', '43');
INSERT INTO `thana` VALUES ('431', 'Saturia', '24');
INSERT INTO `thana` VALUES ('432', 'Savar', '17');
INSERT INTO `thana` VALUES ('433', 'Senbug', '15');
INSERT INTO `thana` VALUES ('434', 'Serajdikhan', '25');
INSERT INTO `thana` VALUES ('435', 'Serajganj', '51');
INSERT INTO `thana` VALUES ('436', 'Shah Ali', '17');
INSERT INTO `thana` VALUES ('437', 'Shah Makhdum', '50');
INSERT INTO `thana` VALUES ('438', 'Shahbag', '17');
INSERT INTO `thana` VALUES ('439', 'Shahjadpur', '51');
INSERT INTO `thana` VALUES ('440', 'Shahjahanpur', '44');
INSERT INTO `thana` VALUES ('441', 'Shahrasti', '9');
INSERT INTO `thana` VALUES ('442', 'Shakhipur', '32');
INSERT INTO `thana` VALUES ('443', 'Shamoly', '17');
INSERT INTO `thana` VALUES ('444', 'Shapahar', '47');
INSERT INTO `thana` VALUES ('445', 'Shariatpur Sadar', '33');
INSERT INTO `thana` VALUES ('446', 'SHER-E-BANGLA NAGAR', '17');
INSERT INTO `thana` VALUES ('447', 'Sherpur', '31');
INSERT INTO `thana` VALUES ('448', 'Shibchar', '23');
INSERT INTO `thana` VALUES ('449', 'Shibganj', '44');
INSERT INTO `thana` VALUES ('450', 'Shibpur', '28');
INSERT INTO `thana` VALUES ('451', 'Shivalaya', '24');
INSERT INTO `thana` VALUES ('452', 'Shyamnagar', '43');
INSERT INTO `thana` VALUES ('453', 'Shyampur', '17');
INSERT INTO `thana` VALUES ('454', 'Singair', '24');
INSERT INTO `thana` VALUES ('455', 'Singra', '48');
INSERT INTO `thana` VALUES ('456', 'Sitakunda', '10');
INSERT INTO `thana` VALUES ('457', 'Sonagazi', '13');
INSERT INTO `thana` VALUES ('458', 'Sonaimuri', '15');
INSERT INTO `thana` VALUES ('459', 'Sonargaon', '27');
INSERT INTO `thana` VALUES ('460', 'Sonatala', '44');
INSERT INTO `thana` VALUES ('461', 'South Sunamganj', '62');
INSERT INTO `thana` VALUES ('462', 'Sreebardi', '31');
INSERT INTO `thana` VALUES ('463', 'Sreemangal', '61');
INSERT INTO `thana` VALUES ('464', 'Sreepur', '40');
INSERT INTO `thana` VALUES ('465', 'Srinagar', '25');
INSERT INTO `thana` VALUES ('466', 'Sripur', '19');
INSERT INTO `thana` VALUES ('467', 'Subornachar', '15');
INSERT INTO `thana` VALUES ('468', 'Sujanagar', '49');
INSERT INTO `thana` VALUES ('469', 'Sulla', '62');
INSERT INTO `thana` VALUES ('470', 'Sunamganj', '62');
INSERT INTO `thana` VALUES ('471', 'Sundarganj', '53');
INSERT INTO `thana` VALUES ('472', 'Sutrapur', '17');
INSERT INTO `thana` VALUES ('473', 'Swarupkati', '6');
INSERT INTO `thana` VALUES ('474', 'Tahirpur', '62');
INSERT INTO `thana` VALUES ('475', 'Tala', '43');
INSERT INTO `thana` VALUES ('476', 'Taltali', '1');
INSERT INTO `thana` VALUES ('477', 'Tangail', '32');
INSERT INTO `thana` VALUES ('478', 'Tanore', '50');
INSERT INTO `thana` VALUES ('479', 'Taraganj', '58');
INSERT INTO `thana` VALUES ('480', 'Tarail', '22');
INSERT INTO `thana` VALUES ('481', 'Tarash', '51');
INSERT INTO `thana` VALUES ('482', 'Tazumuddin', '3');
INSERT INTO `thana` VALUES ('483', 'Tejgaon', '17');
INSERT INTO `thana` VALUES ('484', 'Teknuf', '12');
INSERT INTO `thana` VALUES ('485', 'Terokhada', '38');
INSERT INTO `thana` VALUES ('486', 'Tetulia', '57');
INSERT INTO `thana` VALUES ('487', 'Thakurgaon Sadar', '59');
INSERT INTO `thana` VALUES ('488', 'Thanchi', '7');
INSERT INTO `thana` VALUES ('489', 'Titas', '11');
INSERT INTO `thana` VALUES ('490', 'Tongi', '19');
INSERT INTO `thana` VALUES ('491', 'Tongibari', '25');
INSERT INTO `thana` VALUES ('492', 'Trishal', '26');
INSERT INTO `thana` VALUES ('493', 'Tungipara', '20');
INSERT INTO `thana` VALUES ('494', 'Turag', '17');
INSERT INTO `thana` VALUES ('495', 'Ukhia', '12');
INSERT INTO `thana` VALUES ('496', 'Ulipur', '54');
INSERT INTO `thana` VALUES ('497', 'Ullapara', '51');
INSERT INTO `thana` VALUES ('498', 'Uttar Khan', '17');
INSERT INTO `thana` VALUES ('499', 'Uttara', '17');
INSERT INTO `thana` VALUES ('500', 'Wazirpur', '2');
INSERT INTO `thana` VALUES ('501', 'Zanjira', '33');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'ziauddin', 'ziauddin@gmail.com', '2918369981a1233871e87a452afe1f1a', 'default.jpg', '0000-00-00 00:00:00', '2015-08-02 00:45:15', '1', '1', '0');
INSERT INTO `users` VALUES ('2', 'arman', 'arman@gmail.com', '2918369981a1233871e87a452afe1f1a', 'default.jpg', '0000-00-00 00:00:00', null, '0', '0', '0');

-- ----------------------------
-- Table structure for user_login
-- ----------------------------
DROP TABLE IF EXISTS `user_login`;
CREATE TABLE `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_login
-- ----------------------------
INSERT INTO `user_login` VALUES ('1', 'ziauddin', 'ziauddin.sarker@gmail.com', 'ziauddin');
INSERT INTO `user_login` VALUES ('2', 'leemon', 'leemon@gmail.com', 'leemon');
INSERT INTO `user_login` VALUES ('3', 'arman', 'arman@gmail.com', 'arman');
INSERT INTO `user_login` VALUES ('4', 'bdzia', '', 'ziauddin');
INSERT INTO `user_login` VALUES ('5', 'bdzia', '', 'ziauddin');
INSERT INTO `user_login` VALUES ('6', 'google', '', 'ziauddin');
INSERT INTO `user_login` VALUES ('7', 'googlea', '', 'simuragroup');
INSERT INTO `user_login` VALUES ('8', 'bdzia', '', 'ziauddin');
