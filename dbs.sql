/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbs
Target Host: localhost
Target Database: dbs
Date: 9/5/2016 7:39:41 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbl_msg
-- ----------------------------
DROP TABLE IF EXISTS `tbl_msg`;
CREATE TABLE `tbl_msg` (
  `subject` varchar(255) default NULL,
  `sender` varchar(255) default NULL,
  `receiver` varchar(255) default NULL,
  `msg` varchar(255) default NULL,
  `view` varchar(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_names
-- ----------------------------
DROP TABLE IF EXISTS `tbl_names`;
CREATE TABLE `tbl_names` (
  `fullname` varchar(80) default NULL,
  `uname` varchar(80) default NULL,
  `pword` varchar(80) default NULL,
  `birthday` varchar(80) default NULL,
  `sex` varchar(80) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbl_msg` VALUES (null, 'Mico', 'Thea', 'Hi! :)', null);
INSERT INTO `tbl_msg` VALUES (null, 'Mico', 'Glenn Christiane', 'Hello', null);
INSERT INTO `tbl_msg` VALUES ('', 'Mico', '', '', '');
INSERT INTO `tbl_msg` VALUES ('asdsa', 'Mico', 'asdasd', 'sadasd', '');
INSERT INTO `tbl_msg` VALUES ('IT8', 'Mico', 'Thea', 'may project.', '');
INSERT INTO `tbl_msg` VALUES ('asdas', 'Mico', 'Thea', 'dasdsadsa', '');
INSERT INTO `tbl_msg` VALUES ('asdas', 'Thea', 'Mico', 'asdsad', '');
INSERT INTO `tbl_names` VALUES ('Glenn Christiane Ramos', 'Glenn', 'Glenn', 'December 19, 1990', 'Male');
INSERT INTO `tbl_names` VALUES ('Michael Oliver Huertas', 'Mico', 'Mico', 'October 28, 1997', 'Male');
INSERT INTO `tbl_names` VALUES ('Kristien Dyanne Sicat', 'Dyanne', 'Dyanne', 'June 27, 1997', 'Female');
INSERT INTO `tbl_names` VALUES ('Marc Owen Huertas', 'Owen', 'Owen', 'February 11, 2000', 'Male');
INSERT INTO `tbl_names` VALUES ('Princess Jaymie Ramos', 'Piting', 'Piting', 'December 13, 2003', 'Female');
INSERT INTO `tbl_names` VALUES ('Katrina Mae Ramos', 'Katrina', 'Katrina', 'September 30, 1997', 'Female');
INSERT INTO `tbl_names` VALUES ('Thea Valerie Asuncion', 'Thea', 'Thea', 'May 16, 2000', 'Female');
INSERT INTO `tbl_names` VALUES ('Jasmin Joyce Mique', 'JJ', 'JJ', 'January 18, 2000', 'Female');
