/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50621
Source Host           : 127.0.0.1:3306
Source Database       : bhaloachee

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-08-02 01:20:58
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
  `blog_category` varchar(255) DEFAULT NULL,
  `blog_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`blog_id`),
  KEY `fk_blog_category` (`blog_category`),
  CONSTRAINT `fk_blog_category` FOREIGN KEY (`blog_category`) REFERENCES `blog_category` (`blog_category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('1', 'This is about doctors', 'I have nothing to say about doctors', 'Doctors', '2015-07-05 19:44:28');
INSERT INTO `blog` VALUES ('2', 'This is only a test blog', 'This is a test blog but I have nothing to say about this blog', 'Doctors', '2015-07-06 19:44:28');

-- ----------------------------
-- Table structure for blog_category
-- ----------------------------
DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category` (
  `blog_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`blog_category_id`),
  KEY `blog_category_name` (`blog_category_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blog_category
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of company
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of company_discount
-- ----------------------------

-- ----------------------------
-- Table structure for district
-- ----------------------------
DROP TABLE IF EXISTS `district`;
CREATE TABLE `district` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(255) DEFAULT NULL,
  `division` int(11) DEFAULT NULL,
  PRIMARY KEY (`district_id`),
  KEY `fk_division` (`division`),
  CONSTRAINT `fk_division` FOREIGN KEY (`division`) REFERENCES `division` (`division_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of district
-- ----------------------------

-- ----------------------------
-- Table structure for division
-- ----------------------------
DROP TABLE IF EXISTS `division`;
CREATE TABLE `division` (
  `division_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`division_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of division
-- ----------------------------

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
  `doctor_user_name` int(11) unsigned NOT NULL,
  PRIMARY KEY (`doctor_id`),
  KEY `fk_doctor_specialist` (`doctor_specialist`),
  KEY `fk_doctor_district` (`doctor_district`),
  KEY `fk_doctor_user` (`doctor_user_name`),
  CONSTRAINT `fk_doctor_district` FOREIGN KEY (`doctor_district`) REFERENCES `district` (`district_id`),
  CONSTRAINT `fk_doctor_specialist` FOREIGN KEY (`doctor_specialist`) REFERENCES `doctors_category` (`doctor_category_id`),
  CONSTRAINT `fk_doctor_user` FOREIGN KEY (`doctor_user_name`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of doctors
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop
-- ----------------------------

-- ----------------------------
-- Table structure for thana
-- ----------------------------
DROP TABLE IF EXISTS `thana`;
CREATE TABLE `thana` (
  `thana_id` int(11) NOT NULL AUTO_INCREMENT,
  `thana_name` varchar(255) DEFAULT NULL,
  `district` int(255) DEFAULT NULL,
  PRIMARY KEY (`thana_id`),
  KEY `fk_district` (`district`),
  CONSTRAINT `fk_district` FOREIGN KEY (`district`) REFERENCES `district` (`district_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of thana
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'ziauddin', 'ziauddin@gmail.com', '2918369981a1233871e87a452afe1f1a', 'default.jpg', '0000-00-00 00:00:00', '2015-08-02 00:45:15', '1', '1', '0');
