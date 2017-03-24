-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `seva_trust_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `seva_trust_db`;

DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_no` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `age` tinyint(4) NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `contact_no` varchar(100) NOT NULL,
  `aadhar_no` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `remarks` varchar(10000) NOT NULL,
  `mtime` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `patients` (`patient_id`, `patient_no`, `first_name`, `last_name`, `dob`, `age`, `sex`, `address1`, `address2`, `contact_no`, `aadhar_no`, `city`, `remarks`, `mtime`, `doctor_id`) VALUES
(1,	1,	'SHANMUGA',	'PALANISAMY',	'0000-00-00',	29,	'male',	'Greenheart, Manyata Embassy Business Park, Nagavara, Bengaluru, Karnataka 560045',	'',	'7899995489',	'',	'BANGALORE',	'- General checkup',	1488454814,	0),
(2,	2,	'SHANMUGA',	'PALANISAMY',	'0000-00-00',	29,	'male',	'Greenheart, Manyata Embassy Business Park, Nagavara, Bengaluru, Karnataka 560045',	'',	'7899995489',	'',	'BANGALORE',	'- General checkup',	1488454862,	0),
(3,	3,	'SHANMUGA',	'PALANISAMY',	'0000-00-00',	29,	'male',	'Greenheart, Manyata Embassy Business Park, Nagavara, Bengaluru, Karnataka 560045',	'',	'7899995489',	'',	'BANGALORE',	'- General checkup',	1488455037,	0),
(4,	4,	'SHANMUGA',	'PALANISAMY',	'0000-00-00',	29,	'male',	'BTM',	'',	'7899995489',	'',	'BANGALORE',	'testing',	1488455079,	0),
(5,	5,	'SHANMUGA',	'PALANISAMY',	'0000-00-00',	29,	'male',	'BTM',	'',	'7899995489',	'',	'BANGALORE',	'testing',	1488455160,	0),
(6,	6,	'SHANMUGA',	'PALANISAMY',	'0000-00-00',	29,	'male',	'Greenheart, Manyata Embassy Business Park, Nagavara, Bengaluru, Karnataka 560045',	'',	'7899995489',	'',	'BANGALORE',	'- General checkup',	1488455204,	0),
(7,	7,	'SHANMUGA',	'PALANISAMY',	'1988-12-04',	29,	'male',	'Greenheart, Manyata Embassy Business Park, Nagavara, Bengaluru, Karnataka 560045',	'',	'7899995489',	'',	'BANGALORE',	'- General checkup',	1488455271,	0);

-- 2017-03-24 09:51:50
