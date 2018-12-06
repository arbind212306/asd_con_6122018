/*
SQLyog - Free MySQL GUI v5.15
Host - 5.6.22 : Database - console
*********************************************************************
Server version : 5.6.22
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `console`;

USE `console`;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `business_unit` */

DROP TABLE IF EXISTS `business_unit`;

CREATE TABLE `business_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bu_name` varchar(50) DEFAULT NULL,
  `bu_desc` text,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `business_unit` */

insert into `business_unit` (`id`,`bu_name`,`bu_desc`,`status`) values (1,'Quatrro FPO Solutions Pvt Ltd.','this is bu1',1);
insert into `business_unit` (`id`,`bu_name`,`bu_desc`,`status`) values (3,'Quatrro Global Service Pvt Ltd.','this is bu2',1);
insert into `business_unit` (`id`,`bu_name`,`bu_desc`,`status`) values (4,'Quatrro Mortgage Solutions','this is bu3',1);

/*Table structure for table `client_service_aggrement` */

DROP TABLE IF EXISTS `client_service_aggrement`;

CREATE TABLE `client_service_aggrement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bu_id` int(11) DEFAULT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `temination_fee_clause` text,
  `escalation_terms` text,
  `company_code` varchar(40) DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `contract_create_date` datetime NOT NULL,
  `contract_expiry_date` datetime NOT NULL,
  `mode_of_payment` int(11) DEFAULT NULL,
  `billing_frequency` int(11) DEFAULT NULL,
  `upload_image` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1' COMMENT '1 = Approved; 2 = Rejected; 3 = New ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

/*Data for the table `client_service_aggrement` */

insert into `client_service_aggrement` (`id`,`bu_id`,`industry_id`,`client_id`,`temination_fee_clause`,`escalation_terms`,`company_code`,`service`,`contract_create_date`,`contract_expiry_date`,`mode_of_payment`,`billing_frequency`,`upload_image`,`status`) values (153,1,2,53,'no','yes','',NULL,'2018-10-31 00:00:00','0000-00-00 00:00:00',1,4,NULL,2);
insert into `client_service_aggrement` (`id`,`bu_id`,`industry_id`,`client_id`,`temination_fee_clause`,`escalation_terms`,`company_code`,`service`,`contract_create_date`,`contract_expiry_date`,`mode_of_payment`,`billing_frequency`,`upload_image`,`status`) values (157,1,2,52,'no','no','ni002',NULL,'2018-11-18 00:00:00','2018-11-30 00:00:00',4,1,NULL,1);
insert into `client_service_aggrement` (`id`,`bu_id`,`industry_id`,`client_id`,`temination_fee_clause`,`escalation_terms`,`company_code`,`service`,`contract_create_date`,`contract_expiry_date`,`mode_of_payment`,`billing_frequency`,`upload_image`,`status`) values (158,1,1,55,'no','no','p-ni002',NULL,'2018-11-18 00:00:00','2018-11-30 00:00:00',1,2,NULL,1);
insert into `client_service_aggrement` (`id`,`bu_id`,`industry_id`,`client_id`,`temination_fee_clause`,`escalation_terms`,`company_code`,`service`,`contract_create_date`,`contract_expiry_date`,`mode_of_payment`,`billing_frequency`,`upload_image`,`status`) values (159,1,1,51,'','','W34',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,NULL,1);
insert into `client_service_aggrement` (`id`,`bu_id`,`industry_id`,`client_id`,`temination_fee_clause`,`escalation_terms`,`company_code`,`service`,`contract_create_date`,`contract_expiry_date`,`mode_of_payment`,`billing_frequency`,`upload_image`,`status`) values (167,1,1,51,'no','no','W34',NULL,'2018-11-13 00:00:00','2018-11-30 00:00:00',2,1,NULL,1);
insert into `client_service_aggrement` (`id`,`bu_id`,`industry_id`,`client_id`,`temination_fee_clause`,`escalation_terms`,`company_code`,`service`,`contract_create_date`,`contract_expiry_date`,`mode_of_payment`,`billing_frequency`,`upload_image`,`status`) values (168,1,1,51,'','','W34',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,NULL,1);
insert into `client_service_aggrement` (`id`,`bu_id`,`industry_id`,`client_id`,`temination_fee_clause`,`escalation_terms`,`company_code`,`service`,`contract_create_date`,`contract_expiry_date`,`mode_of_payment`,`billing_frequency`,`upload_image`,`status`) values (169,4,4,130,'demo','demo','Qua',NULL,'2018-12-05 00:00:00','2018-12-27 00:00:00',3,1,NULL,1);

/*Table structure for table `clientmaster` */

DROP TABLE IF EXISTS `clientmaster`;

CREATE TABLE `clientmaster` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_type` varchar(50) DEFAULT NULL,
  `bu` int(4) DEFAULT NULL,
  `industry_name` int(11) DEFAULT NULL,
  `client_code` varchar(255) DEFAULT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zip` int(6) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `fax` varchar(16) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `cp_name` varchar(100) DEFAULT NULL,
  `cp_email_id` varchar(100) DEFAULT NULL,
  `cp_mobile` varchar(16) DEFAULT NULL,
  `created_by` int(4) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `activation_date` datetime DEFAULT NULL,
  `deactivation_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `service_needed` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `header` varchar(150) DEFAULT NULL,
  `footer` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

/*Data for the table `clientmaster` */

insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`,`password`,`username`,`header`,`footer`) values (51,'External',1,1,'W34','wipro','Gurgaon','','Gurgaon',NULL,'India',123001,'wipro.contract@gmail.com','+0124589698','6985741452','987658','www.wipro.com','NA','1542173600_Chrysanthemum.jpg','Rahul Yadav','rahul.yadav@gmail.com','9685741425',0,'2018-10-26 10:47:35','2018-10-26 00:00:00','2018-10-30 00:00:00',1,'3',NULL,NULL,'logo-quatrro.png','springboard-logo.png');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`,`password`,`username`,`header`,`footer`) values (52,'External',1,2,'ni002','Nityo','Gurgaon','','delhi','delhi','india',110070,'n@gmail.com','7503275011','9685741425','1242452','nityo','it is nice','1543901129_Desert.jpg','deepika','a@m.com','24525233',0,'2018-10-26 10:48:52','2018-10-26 00:00:00','2018-10-31 00:00:00',1,'3',NULL,NULL,'1543901129_Desert.jpg','1543901129_Desert.jpg');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`,`password`,`username`,`header`,`footer`) values (54,'External',1,2,'kotak','kotak','new gurgaon','','Allahabad','delhi','India',110070,'c@b.com','341423','9416478958','13124123','tetsing','it is nice','1543913341_Chrysanthemum.jpg','Abhishek','c@b.com','3142542435',0,'2018-12-04 14:19:01','2018-12-04 00:00:00','2018-12-31 00:00:00',1,'3,4,5',NULL,NULL,'1543913341_Chrysanthemum.jpg','1543913341_Chrysanthemum.jpg');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`,`password`,`username`,`header`,`footer`) values (55,'External',1,1,'p-ni002','Pcsolution','dwarka','','newdelhi',NULL,'india',110070,'pc@quatrro.com','7503275011','9548125692','4235345363','pcsolution','its is testing','1541157210_debug.png','Abhi','a@mail.com','2353646',0,'2018-11-02 16:43:30','2018-11-02 00:00:00','2018-11-30 00:00:00',1,'3,4',NULL,NULL,NULL,NULL);
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`,`password`,`username`,`header`,`footer`) values (129,'External',3,3,'hcl','satyam','new gurgaon','','Allahabad','delhi','India',110070,'c@b.com','341423',NULL,'',NULL,'cszdvs','1544005539_Lighthouse.jpg','Abhishek','c@b.com','3142542435',0,'2018-12-05 15:55:39',NULL,NULL,1,NULL,NULL,NULL,'its','nice');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`,`password`,`username`,`header`,`footer`) values (130,'Internal',4,4,'Qua','Quatrro','new gurgaon','','Gurgaon','delhi','India',110070,'quatrro@m.com','341423',NULL,'asdaf',NULL,'this is bpo company','1544007730_StratemisFevicon.png','Abhishek','c@b.com','3142542435',0,'2018-12-05 16:32:10',NULL,NULL,1,NULL,NULL,NULL,'Qua header','Qua footer');

/*Table structure for table `console_billing_frequency` */

DROP TABLE IF EXISTS `console_billing_frequency`;

CREATE TABLE `console_billing_frequency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `console_billing_frequency` */

insert into `console_billing_frequency` (`id`,`name`,`status`) values (1,'Monthly',1);
insert into `console_billing_frequency` (`id`,`name`,`status`) values (2,'Per Quater',1);
insert into `console_billing_frequency` (`id`,`name`,`status`) values (3,'Half Yearly',1);
insert into `console_billing_frequency` (`id`,`name`,`status`) values (4,'Annual',1);
insert into `console_billing_frequency` (`id`,`name`,`status`) values (5,'Weekly',1);
insert into `console_billing_frequency` (`id`,`name`,`status`) values (6,'Bi Weekly',1);

/*Table structure for table `console_client_service` */

DROP TABLE IF EXISTS `console_client_service`;

CREATE TABLE `console_client_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` varchar(10) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `payment_option` tinyint(2) DEFAULT NULL,
  `invoice_frequency` int(10) DEFAULT NULL,
  `sale_price` varchar(10) DEFAULT NULL,
  `no_of_users` varchar(30) DEFAULT NULL,
  `effective_date` datetime DEFAULT NULL,
  `bill_start_date` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `invoice_cycle` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

/*Data for the table `console_client_service` */

insert into `console_client_service` (`id`,`service_type`,`client_id`,`payment_option`,`invoice_frequency`,`sale_price`,`no_of_users`,`effective_date`,`bill_start_date`,`expiry_date`,`status`,`service_id`,`invoice_cycle`) values (59,'Trial',55,1,2,'100','1','2018-11-30 00:00:00','0000-00-00 00:00:00','2018-11-30 00:00:00',1,3,NULL);
insert into `console_client_service` (`id`,`service_type`,`client_id`,`payment_option`,`invoice_frequency`,`sale_price`,`no_of_users`,`effective_date`,`bill_start_date`,`expiry_date`,`status`,`service_id`,`invoice_cycle`) values (60,'Trial',53,1,3,'50','1','2018-11-01 00:00:00','0000-00-00 00:00:00','2018-11-30 00:00:00',1,5,NULL);
insert into `console_client_service` (`id`,`service_type`,`client_id`,`payment_option`,`invoice_frequency`,`sale_price`,`no_of_users`,`effective_date`,`bill_start_date`,`expiry_date`,`status`,`service_id`,`invoice_cycle`) values (61,'Trial',52,1,1,'100','2','2018-11-27 00:00:00','2018-11-26 00:00:00','2018-11-28 00:00:00',1,5,NULL);
insert into `console_client_service` (`id`,`service_type`,`client_id`,`payment_option`,`invoice_frequency`,`sale_price`,`no_of_users`,`effective_date`,`bill_start_date`,`expiry_date`,`status`,`service_id`,`invoice_cycle`) values (63,'Trial',51,1,3,'100','1','2018-11-13 00:00:00','0000-00-00 00:00:00','2018-11-30 00:00:00',1,3,NULL);
insert into `console_client_service` (`id`,`service_type`,`client_id`,`payment_option`,`invoice_frequency`,`sale_price`,`no_of_users`,`effective_date`,`bill_start_date`,`expiry_date`,`status`,`service_id`,`invoice_cycle`) values (64,'',51,NULL,NULL,'','','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',1,5,NULL);
insert into `console_client_service` (`id`,`service_type`,`client_id`,`payment_option`,`invoice_frequency`,`sale_price`,`no_of_users`,`effective_date`,`bill_start_date`,`expiry_date`,`status`,`service_id`,`invoice_cycle`) values (65,'Trial',130,1,1,'100','1','2018-12-05 00:00:00','2018-12-06 00:00:00','2018-12-27 00:00:00',1,3,NULL);
insert into `console_client_service` (`id`,`service_type`,`client_id`,`payment_option`,`invoice_frequency`,`sale_price`,`no_of_users`,`effective_date`,`bill_start_date`,`expiry_date`,`status`,`service_id`,`invoice_cycle`) values (66,'',130,1,7,'100','2','2018-12-05 00:00:00','2018-12-06 00:00:00','2018-12-27 00:00:00',1,4,NULL);
insert into `console_client_service` (`id`,`service_type`,`client_id`,`payment_option`,`invoice_frequency`,`sale_price`,`no_of_users`,`effective_date`,`bill_start_date`,`expiry_date`,`status`,`service_id`,`invoice_cycle`) values (67,'',130,2,5,'100','1','2018-12-05 00:00:00','2018-12-05 00:00:00','2018-12-27 00:00:00',1,5,NULL);

/*Table structure for table `console_invoice_cycles` */

DROP TABLE IF EXISTS `console_invoice_cycles`;

CREATE TABLE `console_invoice_cycles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_cycle_name` varchar(30) DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `console_invoice_cycles` */

insert into `console_invoice_cycles` (`id`,`invoice_cycle_name`,`status`) values (1,'In Advance',1);
insert into `console_invoice_cycles` (`id`,`invoice_cycle_name`,`status`) values (2,'Post Month End',1);

/*Table structure for table `console_invoice_frequenies` */

DROP TABLE IF EXISTS `console_invoice_frequenies`;

CREATE TABLE `console_invoice_frequenies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_frequency_name` varchar(30) DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `console_invoice_frequenies` */

insert into `console_invoice_frequenies` (`id`,`invoice_frequency_name`,`status`) values (1,'Setup Cost',1);
insert into `console_invoice_frequenies` (`id`,`invoice_frequency_name`,`status`) values (2,'Per Period',1);
insert into `console_invoice_frequenies` (`id`,`invoice_frequency_name`,`status`) values (3,'Monthly',1);
insert into `console_invoice_frequenies` (`id`,`invoice_frequency_name`,`status`) values (4,'Per Transaction',1);
insert into `console_invoice_frequenies` (`id`,`invoice_frequency_name`,`status`) values (5,'Per Cycle',1);
insert into `console_invoice_frequenies` (`id`,`invoice_frequency_name`,`status`) values (6,'Per Quarter',1);
insert into `console_invoice_frequenies` (`id`,`invoice_frequency_name`,`status`) values (7,'Annual',1);
insert into `console_invoice_frequenies` (`id`,`invoice_frequency_name`,`status`) values (8,'Weekly',1);
insert into `console_invoice_frequenies` (`id`,`invoice_frequency_name`,`status`) values (9,'Bi Weekly',1);

/*Table structure for table `console_mode_of_payment` */

DROP TABLE IF EXISTS `console_mode_of_payment`;

CREATE TABLE `console_mode_of_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `console_mode_of_payment` */

insert into `console_mode_of_payment` (`id`,`name`,`status`) values (1,'EFT',0);
insert into `console_mode_of_payment` (`id`,`name`,`status`) values (2,'Bill Pay',1);
insert into `console_mode_of_payment` (`id`,`name`,`status`) values (3,'Cheque',1);
insert into `console_mode_of_payment` (`id`,`name`,`status`) values (4,'Credit Card',1);
insert into `console_mode_of_payment` (`id`,`name`,`status`) values (5,'Other',1);

/*Table structure for table `console_no_of_user` */

DROP TABLE IF EXISTS `console_no_of_user`;

CREATE TABLE `console_no_of_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `console_no_of_user` */

insert into `console_no_of_user` (`id`,`name`,`status`) values (1,'01 - 50',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (2,'50 - 100',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (3,'100 - 150',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (4,'150 - 200',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (5,'200 - 250 ',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (6,'250 - 300 ',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (7,'300 - 350 ',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (8,'350 - 400 ',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (9,'400 - 450',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (10,'450 - 500',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (11,'500 - 550',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (12,'550 - 600 ',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (13,'600 -650 ',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (14,'650 - 700',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (15,'700 - 750 ',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (16,'750 - 800',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (17,'800 - 850',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (18,'850 - 900',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (19,'900 - 950',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (21,'1000 - 1500',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (22,'1500 - 2000',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (23,'2000 - 2500',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (24,'Above 2500',1);
insert into `console_no_of_user` (`id`,`name`,`status`) values (27,'1`3134',1);

/*Table structure for table `console_payments` */

DROP TABLE IF EXISTS `console_payments`;

CREATE TABLE `console_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_mode` varchar(20) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `console_payments` */

insert into `console_payments` (`id`,`payment_mode`,`status`) values (1,'One Time',1);
insert into `console_payments` (`id`,`payment_mode`,`status`) values (2,'Recurring',1);

/*Table structure for table `dbconfiguration` */

DROP TABLE IF EXISTS `dbconfiguration`;

CREATE TABLE `dbconfiguration` (
  `db_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `host_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `db_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `db_auth` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`db_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `dbconfiguration` */

insert into `dbconfiguration` (`db_id`,`service_id`,`client_id`,`host_name`,`db_name`,`username`,`db_auth`) values (1,'MV236',51,'127.0.0.123','springboardtest','pappuser123','12345');
insert into `dbconfiguration` (`db_id`,`service_id`,`client_id`,`host_name`,`db_name`,`username`,`db_auth`) values (2,'SB598',52,'10.100.8.61','springboardtest1','futuresoft_sb','987564');
insert into `dbconfiguration` (`db_id`,`service_id`,`client_id`,`host_name`,`db_name`,`username`,`db_auth`) values (3,'SB598',53,'10.100.8.61','springboardv3','vipro','01234');
insert into `dbconfiguration` (`db_id`,`service_id`,`client_id`,`host_name`,`db_name`,`username`,`db_auth`) values (4,'SB598',54,'10.100.8.61','springboardv2','Quatrro','12345');

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '0',
  `client_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `images` */

insert into `images` (`id`,`image`,`status`,`client_id`) values (4,'def',1,153);
insert into `images` (`id`,`image`,`status`,`client_id`) values (6,'1541157837_myvoice.png',0,154);
insert into `images` (`id`,`image`,`status`,`client_id`) values (7,'1541158270_consoledb.PNG',0,158);
insert into `images` (`id`,`image`,`status`,`client_id`) values (21,'1543408015_Penguins.jpg',0,159);
insert into `images` (`id`,`image`,`status`,`client_id`) values (22,'1543483950_',0,160);
insert into `images` (`id`,`image`,`status`,`client_id`) values (23,'1543483965_',0,161);
insert into `images` (`id`,`image`,`status`,`client_id`) values (24,'1543484056_',0,162);
insert into `images` (`id`,`image`,`status`,`client_id`) values (25,'1543484128_',0,163);
insert into `images` (`id`,`image`,`status`,`client_id`) values (26,'1543484169_',0,164);
insert into `images` (`id`,`image`,`status`,`client_id`) values (27,'1543484208_',0,165);
insert into `images` (`id`,`image`,`status`,`client_id`) values (28,'1543484467_',0,166);
insert into `images` (`id`,`image`,`status`,`client_id`) values (29,'1543485764_error.png',0,167);
insert into `images` (`id`,`image`,`status`,`client_id`) values (30,'1544007130_',0,168);
insert into `images` (`id`,`image`,`status`,`client_id`) values (31,'1544008869_audio.txt',0,169);
insert into `images` (`id`,`image`,`status`,`client_id`) values (32,'1544008869_',0,169);

/*Table structure for table `industry` */

DROP TABLE IF EXISTS `industry`;

CREATE TABLE `industry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bu_id` int(4) NOT NULL,
  `industry_name` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `industry` */

insert into `industry` (`id`,`bu_id`,`industry_name`,`status`) values (1,1,'ITES Bpo',1);
insert into `industry` (`id`,`bu_id`,`industry_name`,`status`) values (2,1,'Technology',1);
insert into `industry` (`id`,`bu_id`,`industry_name`,`status`) values (3,3,'Automative',1);
insert into `industry` (`id`,`bu_id`,`industry_name`,`status`) values (4,4,'Health Care',1);

/*Table structure for table `invoice` */

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `bu_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `frequency` varchar(200) DEFAULT NULL,
  `billing_month` date DEFAULT NULL,
  `invoice_note` text,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `invoice` */

insert into `invoice` (`invoice_id`,`bu_id`,`industry_id`,`client_id`,`created`,`frequency`,`billing_month`,`invoice_note`) values (0,1,1,51,'2018-12-06 11:58:37','1','2018-12-06','na');
insert into `invoice` (`invoice_id`,`bu_id`,`industry_id`,`client_id`,`created`,`frequency`,`billing_month`,`invoice_note`) values (11,1,1,51,'2018-12-06 11:31:39','4','2018-12-28','PK2');

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 = Inactive  1= Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert into `services` (`id`,`product_id`,`product_name`,`status`) values (1,'WCS365','Wizcafe',1);
insert into `services` (`id`,`product_id`,`product_name`,`status`) values (2,'HRMS587','HRMS',1);
insert into `services` (`id`,`product_id`,`product_name`,`status`) values (3,'MV254','MyVoice',1);
insert into `services` (`id`,`product_id`,`product_name`,`status`) values (4,'QS698','Qskip',1);
insert into `services` (`id`,`product_id`,`product_name`,`status`) values (5,'SB658','Spring Board',1);
insert into `services` (`id`,`product_id`,`product_name`,`status`) values (6,'QS965','Q-Stride',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `city` varchar(126) DEFAULT NULL,
  `state` varchar(126) DEFAULT NULL,
  `country` varchar(150) DEFAULT NULL,
  `businees_unit` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `sub_department` varchar(100) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `band` varchar(15) DEFAULT NULL,
  `manager_emp_id` varchar(50) DEFAULT NULL,
  `bhr_emp_id` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `status` int(20) NOT NULL DEFAULT '1' COMMENT '0=inactive;1=active;2=confirmed;3=rejected;4=extended;',
  `extend_till` date DEFAULT NULL,
  `auth_type` varchar(30) NOT NULL,
  `fp_code` varchar(200) DEFAULT NULL,
  `supervisor_name` varchar(50) DEFAULT NULL,
  `ob_status` int(1) DEFAULT NULL,
  `manager_name` varchar(50) DEFAULT NULL,
  `manager_email` varchar(150) DEFAULT NULL,
  `bhr_name` varchar(50) DEFAULT NULL,
  `bhr_email` varchar(150) DEFAULT NULL,
  `footer` varchar(150) DEFAULT NULL,
  `header` varchar(150) DEFAULT NULL,
  `client_id` varchar(150) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (1,'tss00065','$2y$10$Q.4cud8.FRMZyMaKepog0eAH.gPWUYYBXcDCyHOWVVBDeCeWQdydu','QGS-001','Aditya','Jain','2018-08-15','tss00065@internal.quatrro.com',NULL,NULL,NULL,NULL,'1','1','7','PHP Developer',NULL,'QGS-002',NULL,'2018-08-29 00:00:00',NULL,NULL,1,NULL,'Manual','',NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (25,'admin','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','QGS-025','Admin','Stratemis1','2018-08-24','admin@quatrro.com','','Thane',NULL,'Select','1','4','7','PHP Developer','','QGS-002','','0000-00-00 00:00:00',NULL,NULL,1,NULL,'Manual',NULL,NULL,1,NULL,NULL,NULL,NULL,'springboard-logo.png','logo-quatrro.png','54',NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (26,'rina','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','QGS-026','rina','','2018-08-30','','9874563215','Delhi',NULL,'India','2','1','9','PHP Developer','B1','QGS-002','QUA78549','0000-00-00 00:00:00',NULL,NULL,1,NULL,'Manual',NULL,NULL,1,NULL,NULL,NULL,NULL,'','',NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (28,'supervisor','$2y$10$Cfg7k3jTMgJKfecpJO51lO0mhYsupZn0lLx.c5h1ZaktnYUEpl/0e','QGS-028','Supervisor','Spring','2018-08-28','supervisor@quatrro.com','7845784512','Delhi',NULL,'India','1','1','7','Team Lead','4','QGS-002','BHR','2018-08-28 06:54:50','2018-08-28 06:54:50',NULL,1,NULL,'Manual',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (34,'kundan','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','QGS-034','Kundan','Singh','2018-08-30','kundan@gmail.com','8287057800','Delhi',NULL,'India','1','3','7','SSE','B','QGS-002','BHR','2018-08-31 10:29:08','2018-09-07 07:52:13',NULL,1,NULL,'Manual',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (35,'Rajiv','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','QGS-336','Rajiv','Sukhla','2018-09-05','rajiv@gmail.com','9337180770','Delhi',NULL,'India','1','1','7','Engineer','2','QGS-002','QMA0024','2018-07-04 09:33:49','2018-09-05 09:33:49',NULL,2,NULL,'Manual',NULL,NULL,1,'Sanjeev','Sanjeev@gmail.com','Shiv','shiv@gmail.com',NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (48,'Abhishek','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','QUA021R','Abhishek','Gupta','2018-06-20','p-ni002@internal.quatrro.com','','Delhi',NULL,'USA','1','4','95','Developer','2','QGS-028','QMA0024','2018-07-09 13:25:30','2018-09-10 13:25:30',NULL,4,NULL,'Manual',NULL,'Sanjeev',1,'Sanjeev','Sanjeev@gmail.com','Shiv','shiv@gmail.com',NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (54,'Rajeev2','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','QUA021R','Rajeev','','2018-09-10','rajiv1@gmail.com','pass','Thane',NULL,'India','2','80','','Developer','1','QGS-028','QMA0024','2018-08-09 13:38:47','2018-09-11 06:02:41',NULL,1,NULL,'Manual',NULL,'Siddharth',1,'Sanjeev','Sanjeev@gmail.com','Shiv','shiv@gmail.com',NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (58,'Rahul','$2y$10$irR5d6762PP1pkudWNYie.U5sbfkMBhGZisrLUGSan5GpLiFzKq4e','QPS001','Rahul','','2018-09-04','rahul@gmail.com','9337180770','Delhi',NULL,'India','2','29','53','Developer','4','QGS-028','QMS005','2018-08-13 06:01:12','2018-09-13 06:46:11',NULL,1,NULL,'Manual',NULL,'Sanjeev',1,'Sanjeev','sanjeev@gmail.com','Rajat','rajat@gnmail.com',NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (59,'sourabh','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','QUA021R','Sourabh','','2018-06-13','sourabh@gmail.com','8090025343','Delhi',NULL,'India','3','31','69','Developer','2','QTA0247','QMA0024','2018-09-01 06:02:28','2018-09-13 06:46:39',NULL,4,NULL,'Manual',NULL,'Siddharth',1,'Sanjeev','Sanjeev@gmail.com','Shiv','shiv@gmail.com',NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (62,'Ankit','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','QUA021R','Ankit','','2018-06-13','ankit@gmail.com','9337180770','Chennai',NULL,'India','2','80','','Developer','5','QTA0247','QMA0024','2018-09-08 06:07:15','2018-09-13 06:07:15',NULL,2,NULL,'Manual',NULL,'Sanjeev',1,'Sanjeev','Sanjeev@gmail.com','Shiv','shiv@gmail.com',NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (63,'Akash','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','QUA021R','Akash','','2018-06-13','akash@gmail.com','8090025343','Thane',NULL,'India','2','80','','Developer','7','QGS-028','QMA0024','2018-09-12 06:14:50','2018-09-19 06:14:51',NULL,2,'2018-10-19','Manual',NULL,'Siddharth',1,'Sanjeev','Sanjeev@gmail.com','Shiv','shiv@gmail.com',NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (92,'hrspoc','$2y$10$SZec/Ozk2Dj9Vg1GX1E4w.3Y6yyEkcsrgOOJfYQOSLb5uu.k/G2HG','QUA22069','HR','Spoc','2018-09-17','hrspoc@quatrro.com','9685745986','Delhi',NULL,'India','1','3','94','Hr Spoc','B1','QUA58965','QUA97315','2018-09-21 14:11:02','2018-09-17 14:11:02',NULL,1,NULL,'ADServer',NULL,'Siddharth',1,'Siddharth','siddharth.quatrro.com','Pooja chopra','pooja@quatrro.com',NULL,NULL,NULL,NULL);
insert into `users` (`id`,`username`,`password`,`emp_id`,`first_name`,`last_name`,`doj`,`email`,`mobile`,`city`,`state`,`country`,`businees_unit`,`department`,`sub_department`,`designation`,`band`,`manager_emp_id`,`bhr_emp_id`,`created`,`modified`,`last_login`,`status`,`extend_till`,`auth_type`,`fp_code`,`supervisor_name`,`ob_status`,`manager_name`,`manager_email`,`bhr_name`,`bhr_email`,`footer`,`header`,`client_id`,`pass`) values (111,'Bhr','$2y$10$X3GedJoXaX4jkxVrOaBiJeHww3ddkxDiZHlSy3hSEAjOVPh2j5tRO','bhr123','BHR','','2018-09-20','b@mail.com','','Delhi',NULL,'India','1','3','','software developer','','QGS-002','qua69875','2018-09-20 06:58:54','2018-09-20 06:58:54',NULL,1,NULL,'Manual',NULL,'Siddharth',1,'Admin','admin@mail.com','Bhr','bhr@mail.com',NULL,NULL,NULL,NULL);

SET SQL_MODE=@OLD_SQL_MODE;