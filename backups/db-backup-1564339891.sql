DROP TABLE tbl_applied_transfer;

CREATE TABLE `tbl_applied_transfer` (
  `apply_id` int(11) NOT NULL AUTO_INCREMENT,
  `apply_office` varchar(100) COLLATE utf32_sinhala_ci NOT NULL,
  `apply_office_town` varchar(50) COLLATE utf32_sinhala_ci NOT NULL,
  `apply_office_director` varchar(50) COLLATE utf32_sinhala_ci NOT NULL,
  `emp_id` bigint(12) NOT NULL,
  PRIMARY KEY (`apply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_sinhala_ci;




DROP TABLE tbl_city;

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) COLLATE utf32_sinhala_ci NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_sinhala_ci;




DROP TABLE tbl_department;

CREATE TABLE `tbl_department` (
  `dep_id` varchar(50) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `dep_head` varchar(50) NOT NULL,
  `dep_phone` varchar(10) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE tbl_dependant;

CREATE TABLE `tbl_dependant` (
  `depen_id` int(11) NOT NULL AUTO_INCREMENT,
  `depen_name` varchar(50) NOT NULL,
  `depen_dob` date NOT NULL,
  `depen_school` varchar(100) DEFAULT NULL,
  `emp_id` bigint(12) NOT NULL,
  PRIMARY KEY (`depen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO tbl_dependant VALUES("2","Shashini","2013-07-06","","199012304567");
INSERT INTO tbl_dependant VALUES("3","Dilshani","2013-08-06","","199012304567");
INSERT INTO tbl_dependant VALUES("4","Dayani Pererra","2014-05-04","","0");
INSERT INTO tbl_dependant VALUES("5","Dayani","2014-05-04","","0");
INSERT INTO tbl_dependant VALUES("6","Saleem","2013-07-06","","0");
INSERT INTO tbl_dependant VALUES("7","Suranga Perera","2000-07-06","","0");
INSERT INTO tbl_dependant VALUES("8","Sonakshie","1997-08-19","","0");
INSERT INTO tbl_dependant VALUES("9","Amit Wanigasekara","2004-08-12","","0");
INSERT INTO tbl_dependant VALUES("10","Shriyani","2006-08-21","","0");
INSERT INTO tbl_dependant VALUES("12","Sudarika","2014-11-09","","0");
INSERT INTO tbl_dependant VALUES("13","Malik","2015-05-04","","0");
INSERT INTO tbl_dependant VALUES("14","Sheela","2014-11-09","","0");
INSERT INTO tbl_dependant VALUES("20","Madhumitha","2004-05-04","","0");
INSERT INTO tbl_dependant VALUES("21","Madhushani","2006-09-18","","0");
INSERT INTO tbl_dependant VALUES("22","Nirasha","1991-08-10","","0");
INSERT INTO tbl_dependant VALUES("23","Amit ","1990-08-03","","0");
INSERT INTO tbl_dependant VALUES("24","Dinushi","1995-10-10","","0");
INSERT INTO tbl_dependant VALUES("25","T.Chandrasena","1960-08-17","","0");
INSERT INTO tbl_dependant VALUES("26","Eranga","1972-08-03","","0");
INSERT INTO tbl_dependant VALUES("27","Pradeep","2006-08-03","","0");
INSERT INTO tbl_dependant VALUES("28","Maneesha","2005-08-10","","0");
INSERT INTO tbl_dependant VALUES("29","Sunil","2008-08-11","","0");
INSERT INTO tbl_dependant VALUES("30","Amila","2006-08-03","","0");
INSERT INTO tbl_dependant VALUES("31","Shanika","2009-08-12","","0");
INSERT INTO tbl_dependant VALUES("32","Thilini","2012-08-03","","0");
INSERT INTO tbl_dependant VALUES("33","Nishantha","2000-08-23","","0");
INSERT INTO tbl_dependant VALUES("34","Nissanka","2004-10-15","","0");



DROP TABLE tbl_directoral_division;

CREATE TABLE `tbl_directoral_division` (
  `dd_id` int(11) NOT NULL,
  `dd_name` varchar(100) COLLATE utf32_sinhala_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_sinhala_ci;




DROP TABLE tbl_employee;

CREATE TABLE `tbl_employee` (
  `emp_id` bigint(12) NOT NULL,
  `emp_name` varchar(100) CHARACTER SET utf32 COLLATE utf32_sinhala_ci NOT NULL,
  `emp_initials` varchar(200) CHARACTER SET utf32 COLLATE utf32_sinhala_ci NOT NULL,
  `emp_gender` tinyint(4) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_nic` varchar(11) NOT NULL,
  `emp_marit_status` tinyint(4) NOT NULL,
  `dep_id` varchar(11) CHARACTER SET utf32 COLLATE utf32_sinhala_ci NOT NULL,
  `emp_inc_date` date NOT NULL,
  `job_id` varchar(50) CHARACTER SET utf32 COLLATE utf32_sinhala_ci NOT NULL,
  `emp_appoint_status` varchar(20) CHARACTER SET utf8 COLLATE utf8_sinhala_ci NOT NULL,
  `emp_appoint_date` date NOT NULL,
  `job_grade` varchar(10) CHARACTER SET utf8 COLLATE utf8_sinhala_ci NOT NULL,
  `emp_status` varchar(12) CHARACTER SET utf8 COLLATE utf8_sinhala_ci NOT NULL,
  `emp_address` varchar(150) CHARACTER SET utf8 COLLATE utf8_sinhala_ci NOT NULL,
  `emp_home_phone` int(12) DEFAULT NULL,
  `emp_mobile` int(12) NOT NULL,
  `emp_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_sinhala_ci DEFAULT NULL,
  `emp_title` varchar(5) CHARACTER SET utf8 COLLATE utf8_sinhala_ci NOT NULL,
  `emp_trans_app1` int(11) DEFAULT NULL,
  `emp_trans_app2` int(11) DEFAULT NULL,
  `emp_trans_app3` int(11) DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `emp_nic` (`emp_nic`),
  KEY `job_id` (`job_id`),
  KEY `dep_id` (`dep_id`),
  KEY `dep_id_2` (`dep_id`),
  KEY `job_id_2` (`job_id`),
  KEY `dep_id_3` (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_employee VALUES("2594","K.Jayapathma","Kasuni Jayapathma","1","1985-07-16","857458252V","0","D15","2016-08-07","Engineer Civil ","Permanent","2009-12-11","3-I","Employed","                                                                No.87, Peradeniya Rd,\nKandy","817453690","778945635","andr@gmail.com","Mrs.","","","");
INSERT INTO tbl_employee VALUES("3264","D.Gamage","Dharmasena Gamage","0","1963-08-13","632202547V","0","D09","2015-08-14","Translator ","Permanent","1990-08-14","2-I","Employed","                        No.43/11, Peradeniya Road, Kandy","817896254","723489657","gamage@gmail.com","Mr.","","","");
INSERT INTO tbl_employee VALUES("3339","B.Dissanayake","Boomika Dissanayake","1","1986-06-02","861456987V","0","D04","2016-08-07","Chief Fire Brigade Officer ","Permanent","2015-08-07","2-I","Employed","                                        No.21,Katugastota Road,Kandy","814569823","756984125","boomi@yahoo.com","Miss.","","","");
INSERT INTO tbl_employee VALUES("199012304567","S.T.Jayasuriya","Siyaneris Titus Jayasuriya","0","1990-01-01","901234567V","1","D01","2016-07-28","Medical Officer Of Health","Permanent","2015-07-28","3-II","Employed","                                                        No.100,Uggalla,\nKandy","815684505","772331223","jayasuriya@gmail.com","Mr.","","","");



DROP TABLE tbl_job;

CREATE TABLE `tbl_job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(45) DEFAULT NULL,
  `job_desc` varchar(45) DEFAULT NULL,
  `job_no_emp` int(11) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tbl_job VALUES("1","Technical Assistant","","0");
INSERT INTO tbl_job VALUES("2","Agricultural Instructor","","0");
INSERT INTO tbl_job VALUES("3","Engineering Assistant","","0");
INSERT INTO tbl_job VALUES("4","Agricultural Service","","0");



DROP TABLE tbl_reason;

CREATE TABLE `tbl_reason` (
  `reason_id` int(11) NOT NULL,
  `reason_name` varchar(100) COLLATE utf32_sinhala_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_sinhala_ci;




DROP TABLE tbl_service;

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(100) COLLATE utf32_sinhala_ci NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_sinhala_ci;




DROP TABLE tbl_service_history;

CREATE TABLE `tbl_service_history` (
  `service_hist_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_hist_place` int(11) NOT NULL,
  `service_hist_from` date NOT NULL,
  `service_hist_to` date NOT NULL,
  `service_hist_dir_division` int(11) NOT NULL,
  `service_hist_office` int(11) NOT NULL,
  `emp_id` bigint(12) NOT NULL,
  PRIMARY KEY (`service_hist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_sinhala_ci;




DROP TABLE tbl_user;

CREATE TABLE `tbl_user` (
  `user_id` bigint(12) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_role` int(2) NOT NULL,
  `user_status` int(2) NOT NULL,
  `user_last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `user_role` (`user_role`)
) ENGINE=InnoDB AUTO_INCREMENT=199012304568 DEFAULT CHARSET=latin1;

INSERT INTO tbl_user VALUES("2145","jayasuriya","0f5cb7b56b8c9a15ab4a1f9cb0b170de","2","1","");
INSERT INTO tbl_user VALUES("2396","kasun","a7ec7f64c1a11102a16ed9ba938d20a8","1","1","");
INSERT INTO tbl_user VALUES("2594","Jaya","e6072364bb65eca8a14d7c912f23d8cf","1","1","");
INSERT INTO tbl_user VALUES("3212","user111","0c534ed3fff7d2bfd32ee19d84644e3f","3","1","0000-00-00 00:00:00");
INSERT INTO tbl_user VALUES("3264","gamage","996863f1ea9363700631332014f051f5","1","0","");
INSERT INTO tbl_user VALUES("3333","Chandrasena","9a3b711aeb11a9e6fbf3393f5353afbf","2","1","");
INSERT INTO tbl_user VALUES("3444","Perera","6ff776400acab21780ab646de757ebba","3","1","");
INSERT INTO tbl_user VALUES("3634","Nalin","7f6e76a9cde1849d566239e15c334aab","3","0","0000-00-00 00:00:00");
INSERT INTO tbl_user VALUES("3896","Kamal","aa63b0d5d950361c05012235ab520512","1","1","0000-00-00 00:00:00");
INSERT INTO tbl_user VALUES("199012304567","admin123","0192023a7bbd73250516f069df18b500","1","1","");



DROP TABLE tbl_usrlog;

CREATE TABLE `tbl_usrlog` (
  `logId` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(12) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`logId`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

INSERT INTO tbl_usrlog VALUES("2","2594","2015-03-22 23:49:23");
INSERT INTO tbl_usrlog VALUES("4","3083","2015-07-03 07:29:38");
INSERT INTO tbl_usrlog VALUES("6","2594","2015-03-25 01:36:54");
INSERT INTO tbl_usrlog VALUES("8","2594","2015-03-24 20:46:02");
INSERT INTO tbl_usrlog VALUES("10","2594","2015-03-26 02:27:28");
INSERT INTO tbl_usrlog VALUES("12","2594","2015-03-25 20:46:07");
INSERT INTO tbl_usrlog VALUES("14","2594","2015-03-25 23:30:09");
INSERT INTO tbl_usrlog VALUES("16","2594","2015-03-25 23:51:21");
INSERT INTO tbl_usrlog VALUES("18","2594","2015-03-26 00:15:23");
INSERT INTO tbl_usrlog VALUES("20","2594","2015-03-26 00:29:52");
INSERT INTO tbl_usrlog VALUES("22","2594","2015-03-27 17:13:37");
INSERT INTO tbl_usrlog VALUES("24","2594","2015-03-29 00:52:35");
INSERT INTO tbl_usrlog VALUES("26","2594","2015-03-30 14:40:36");
INSERT INTO tbl_usrlog VALUES("28","2594","2007-01-01 22:35:53");
INSERT INTO tbl_usrlog VALUES("30","2594","2015-04-02 22:38:55");
INSERT INTO tbl_usrlog VALUES("32","2594","2015-04-02 23:17:23");
INSERT INTO tbl_usrlog VALUES("34","2594","2015-04-03 19:03:11");
INSERT INTO tbl_usrlog VALUES("36","2594","2015-04-03 22:34:00");
INSERT INTO tbl_usrlog VALUES("38","2594","2015-04-07 21:24:03");
INSERT INTO tbl_usrlog VALUES("40","2594","2015-04-07 13:48:01");
INSERT INTO tbl_usrlog VALUES("42","2594","2015-04-08 21:36:55");
INSERT INTO tbl_usrlog VALUES("44","2594","2015-04-10 22:41:24");
INSERT INTO tbl_usrlog VALUES("46","2594","2007-01-01 21:57:54");
INSERT INTO tbl_usrlog VALUES("48","2594","2015-05-02 00:34:20");
INSERT INTO tbl_usrlog VALUES("50","2594","2015-05-21 15:22:03");
INSERT INTO tbl_usrlog VALUES("52","2594","2007-01-01 23:14:55");
INSERT INTO tbl_usrlog VALUES("54","2594","2015-06-09 23:02:36");
INSERT INTO tbl_usrlog VALUES("56","2594","2015-06-12 14:52:09");
INSERT INTO tbl_usrlog VALUES("58","2594","2015-06-12 15:18:42");
INSERT INTO tbl_usrlog VALUES("60","2594","2015-06-15 00:42:50");
INSERT INTO tbl_usrlog VALUES("62","2594","2015-06-14 23:10:21");
INSERT INTO tbl_usrlog VALUES("64","2594","2015-06-15 18:52:19");
INSERT INTO tbl_usrlog VALUES("66","2594","2015-06-15 19:05:56");
INSERT INTO tbl_usrlog VALUES("68","2594","2015-06-15 22:55:20");
INSERT INTO tbl_usrlog VALUES("70","2594","2015-06-19 16:51:30");
INSERT INTO tbl_usrlog VALUES("72","2594","2015-06-22 16:37:34");
INSERT INTO tbl_usrlog VALUES("74","2594","2015-06-23 23:03:41");
INSERT INTO tbl_usrlog VALUES("76","2594","2015-06-24 13:59:45");
INSERT INTO tbl_usrlog VALUES("78","2594","2015-06-27 21:33:55");
INSERT INTO tbl_usrlog VALUES("80","2594","2015-07-02 16:20:09");
INSERT INTO tbl_usrlog VALUES("82","3083","2015-07-03 16:24:09");
INSERT INTO tbl_usrlog VALUES("84","3896","2015-07-03 16:34:58");
INSERT INTO tbl_usrlog VALUES("86","2594","2015-07-03 17:46:40");
INSERT INTO tbl_usrlog VALUES("88","3896","2015-07-07 01:24:24");
INSERT INTO tbl_usrlog VALUES("90","2594","2015-07-07 16:06:53");
INSERT INTO tbl_usrlog VALUES("92","3896","2015-07-09 15:53:18");
INSERT INTO tbl_usrlog VALUES("94","3896","2015-07-10 21:32:56");
INSERT INTO tbl_usrlog VALUES("96","3896","2015-07-13 01:11:13");
INSERT INTO tbl_usrlog VALUES("97","3896","2015-07-13 16:09:22");
INSERT INTO tbl_usrlog VALUES("98","3896","2015-07-13 18:41:53");
INSERT INTO tbl_usrlog VALUES("99","3896","2015-07-14 15:40:46");
INSERT INTO tbl_usrlog VALUES("100","3896","2015-07-16 19:25:31");
INSERT INTO tbl_usrlog VALUES("101","2594","2015-07-16 19:34:43");
INSERT INTO tbl_usrlog VALUES("102","2594","2015-07-16 21:29:18");
INSERT INTO tbl_usrlog VALUES("103","2594","2015-07-16 21:33:32");
INSERT INTO tbl_usrlog VALUES("104","2594","2015-07-16 22:30:53");
INSERT INTO tbl_usrlog VALUES("105","2594","2015-07-17 14:50:18");
INSERT INTO tbl_usrlog VALUES("106","2594","2015-07-19 23:39:41");
INSERT INTO tbl_usrlog VALUES("107","3212","2015-07-19 23:42:08");
INSERT INTO tbl_usrlog VALUES("108","2594","2015-07-19 14:15:26");
INSERT INTO tbl_usrlog VALUES("109","2594","2015-07-23 18:49:41");
INSERT INTO tbl_usrlog VALUES("110","3212","2015-07-23 22:39:31");
INSERT INTO tbl_usrlog VALUES("111","2594","2015-07-23 22:39:42");
INSERT INTO tbl_usrlog VALUES("112","2594","2015-07-26 17:13:15");
INSERT INTO tbl_usrlog VALUES("113","2594","2015-07-28 00:38:54");
INSERT INTO tbl_usrlog VALUES("114","2594","2015-07-27 22:41:51");
INSERT INTO tbl_usrlog VALUES("115","2594","2015-07-27 23:11:34");
INSERT INTO tbl_usrlog VALUES("116","2594","2015-07-28 13:55:53");
INSERT INTO tbl_usrlog VALUES("117","3896","2015-07-30 00:33:18");
INSERT INTO tbl_usrlog VALUES("118","2594","2015-07-30 00:31:56");
INSERT INTO tbl_usrlog VALUES("119","3896","2015-07-30 14:40:35");
INSERT INTO tbl_usrlog VALUES("120","2594","2015-08-02 14:40:17");
INSERT INTO tbl_usrlog VALUES("121","2594","2015-08-02 14:50:30");
INSERT INTO tbl_usrlog VALUES("122","2594","2015-08-06 01:20:08");
INSERT INTO tbl_usrlog VALUES("123","2594","2015-08-05 15:02:22");
INSERT INTO tbl_usrlog VALUES("124","3896","2015-08-05 15:02:35");
INSERT INTO tbl_usrlog VALUES("125","2594","2015-08-05 20:42:05");
INSERT INTO tbl_usrlog VALUES("126","2594","2015-08-05 23:13:32");
INSERT INTO tbl_usrlog VALUES("127","2594","2015-08-08 21:46:37");
INSERT INTO tbl_usrlog VALUES("128","2594","2015-08-10 22:09:13");
INSERT INTO tbl_usrlog VALUES("129","2594","2015-08-13 23:01:06");
INSERT INTO tbl_usrlog VALUES("130","3896","2015-08-14 21:23:35");
INSERT INTO tbl_usrlog VALUES("131","2594","2015-08-15 00:03:43");
INSERT INTO tbl_usrlog VALUES("132","3264","2015-08-15 00:11:49");
INSERT INTO tbl_usrlog VALUES("133","2145","2015-08-14 13:32:32");
INSERT INTO tbl_usrlog VALUES("134","2145","2015-08-15 23:31:12");
INSERT INTO tbl_usrlog VALUES("135","2145","2015-08-15 23:38:26");
INSERT INTO tbl_usrlog VALUES("136","2145","2015-08-15 23:39:17");
INSERT INTO tbl_usrlog VALUES("137","2145","2015-08-15 23:49:01");
INSERT INTO tbl_usrlog VALUES("138","2145","2015-08-19 23:43:44");
INSERT INTO tbl_usrlog VALUES("139","3896","2015-08-19 23:52:10");
INSERT INTO tbl_usrlog VALUES("140","3896","2015-08-19 23:58:23");
INSERT INTO tbl_usrlog VALUES("141","2145","2015-08-20 00:00:32");
INSERT INTO tbl_usrlog VALUES("142","2145","2015-08-19 14:31:12");
INSERT INTO tbl_usrlog VALUES("143","3212","2015-08-19 14:31:46");
INSERT INTO tbl_usrlog VALUES("144","2594","2015-08-21 21:30:11");
INSERT INTO tbl_usrlog VALUES("145","2594","2015-08-21 16:02:11");
INSERT INTO tbl_usrlog VALUES("146","2145","2015-08-22 15:28:05");
INSERT INTO tbl_usrlog VALUES("147","2145","2015-08-22 18:02:30");
INSERT INTO tbl_usrlog VALUES("148","2145","2015-08-22 21:37:16");
INSERT INTO tbl_usrlog VALUES("149","2145","2015-08-23 18:10:08");
INSERT INTO tbl_usrlog VALUES("150","2145","2015-08-24 15:03:46");
INSERT INTO tbl_usrlog VALUES("151","2145","2015-08-24 22:06:20");
INSERT INTO tbl_usrlog VALUES("152","2145","2015-08-24 13:42:27");
INSERT INTO tbl_usrlog VALUES("153","2145","2015-08-25 15:26:24");
INSERT INTO tbl_usrlog VALUES("154","2145","2015-08-25 21:16:43");
INSERT INTO tbl_usrlog VALUES("155","3212","2015-08-25 22:29:03");
INSERT INTO tbl_usrlog VALUES("156","2594","2015-08-25 22:34:39");
INSERT INTO tbl_usrlog VALUES("157","2145","2015-08-25 22:52:23");
INSERT INTO tbl_usrlog VALUES("158","2145","2015-08-26 15:22:00");
INSERT INTO tbl_usrlog VALUES("159","3333","2015-08-26 15:23:47");
INSERT INTO tbl_usrlog VALUES("160","3212","2015-08-26 16:20:16");
INSERT INTO tbl_usrlog VALUES("161","3333","2015-08-26 16:28:53");
INSERT INTO tbl_usrlog VALUES("162","3896","2015-08-26 16:29:24");
INSERT INTO tbl_usrlog VALUES("163","3896","2015-08-26 22:52:40");
INSERT INTO tbl_usrlog VALUES("164","3896","2015-08-27 22:03:16");
INSERT INTO tbl_usrlog VALUES("165","3896","2015-08-28 21:42:31");
INSERT INTO tbl_usrlog VALUES("166","3896","2015-08-29 17:07:52");
INSERT INTO tbl_usrlog VALUES("167","3896","2015-08-29 17:08:36");
INSERT INTO tbl_usrlog VALUES("168","3333","2015-08-29 17:09:24");
INSERT INTO tbl_usrlog VALUES("169","2594","2015-08-29 17:09:43");
INSERT INTO tbl_usrlog VALUES("170","3333","2015-08-29 17:12:02");
INSERT INTO tbl_usrlog VALUES("171","2145","2015-08-29 17:14:43");
INSERT INTO tbl_usrlog VALUES("172","2594","2015-08-29 17:22:32");
INSERT INTO tbl_usrlog VALUES("173","2594","2015-08-29 22:09:54");
INSERT INTO tbl_usrlog VALUES("174","2396","2015-08-29 23:48:53");
INSERT INTO tbl_usrlog VALUES("175","2396","2015-08-30 00:46:12");
INSERT INTO tbl_usrlog VALUES("176","2396","2019-04-04 10:18:31");
INSERT INTO tbl_usrlog VALUES("177","2396","2019-04-04 10:37:45");
INSERT INTO tbl_usrlog VALUES("178","2396","2019-04-05 12:02:14");
INSERT INTO tbl_usrlog VALUES("179","2396","2019-07-23 10:23:44");
INSERT INTO tbl_usrlog VALUES("180","2396","2019-07-23 10:24:20");
INSERT INTO tbl_usrlog VALUES("181","2396","2019-07-23 03:01:16");
INSERT INTO tbl_usrlog VALUES("182","2396","2019-07-23 06:09:14");
INSERT INTO tbl_usrlog VALUES("183","2396","2019-07-23 06:12:23");
INSERT INTO tbl_usrlog VALUES("184","2594","2019-07-23 10:13:15");
INSERT INTO tbl_usrlog VALUES("185","2396","2019-07-23 10:21:57");
INSERT INTO tbl_usrlog VALUES("186","2396","2019-07-25 02:50:11");
INSERT INTO tbl_usrlog VALUES("187","2396","2019-07-25 04:01:36");
INSERT INTO tbl_usrlog VALUES("188","2594","2019-07-25 04:48:54");
INSERT INTO tbl_usrlog VALUES("189","2594","2019-07-25 06:43:05");
INSERT INTO tbl_usrlog VALUES("190","2594","2019-07-25 08:01:06");
INSERT INTO tbl_usrlog VALUES("191","199012304567","2019-07-28 08:48:37");
INSERT INTO tbl_usrlog VALUES("192","199012304567","2019-07-28 11:09:17");
INSERT INTO tbl_usrlog VALUES("193","199012304567","2019-07-28 12:24:46");
INSERT INTO tbl_usrlog VALUES("194","199012304567","2019-07-28 02:08:23");
INSERT INTO tbl_usrlog VALUES("195","199012304567","2019-07-28 04:03:14");
INSERT INTO tbl_usrlog VALUES("196","199012304567","2019-07-28 05:26:35");
INSERT INTO tbl_usrlog VALUES("197","199012304567","2019-07-28 05:45:43");
INSERT INTO tbl_usrlog VALUES("198","199012304567","2019-07-28 06:08:42");
INSERT INTO tbl_usrlog VALUES("199","199012304567","2019-07-28 07:39:16");
INSERT INTO tbl_usrlog VALUES("200","199012304567","2019-07-28 08:14:01");



