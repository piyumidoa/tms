DROP TABLE tbl_apply_leave;

CREATE TABLE `tbl_apply_leave` (
  `apply_leav_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `apply_date` date NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `leave_type` varchar(10) NOT NULL,
  `leave_days` double NOT NULL,
  `leave_approve` tinyint(1) NOT NULL,
  `leav_approv_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`apply_leav_id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

INSERT INTO tbl_apply_leave VALUES("10","3083","2014-08-30","2014-09-02","2014-09-04","Casual","2","1","Mrs K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("12","2309","2014-08-29","2014-09-01","2015-03-02","Casual","1","1","Mrs K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("15","3620","2015-03-05","2015-03-06","2015-03-09","Sick","1","1","Mrs K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("17","2594","2015-03-05","2015-03-09","2015-03-11","Casual","2","1","Mrs K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("19","3620","2015-03-07","2015-03-16","2015-03-17","Sick","1","0","Mr. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("20","3213","2015-06-30","2015-07-01","2015-07-02","Casual","0.5","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("24","5755","2015-07-01","2015-07-13","2015-07-14","Casual","1","1","Mr. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("26","0","2015-07-26","0000-00-00","0000-00-00","","0","0","");
INSERT INTO tbl_apply_leave VALUES("27","0","2015-07-26","0000-00-00","0000-00-00","","0","0","");
INSERT INTO tbl_apply_leave VALUES("28","0","2015-07-26","0000-00-00","0000-00-00","","0","0","");
INSERT INTO tbl_apply_leave VALUES("29","3091","2015-07-26","2015-07-01","2015-07-02","Casual","1","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("30","3213","2015-07-26","2015-07-07","2015-07-08","Sick","1","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("32","2111","2015-08-14","2015-08-17","2015-08-19","Casual","1","1","Mr. S.T.Jayasuriya");
INSERT INTO tbl_apply_leave VALUES("33","3339","2015-08-14","2015-08-18","2015-08-20","Casual","2","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("34","3624","2015-08-15","2015-08-19","2015-08-20","Duty","0.5","0","");
INSERT INTO tbl_apply_leave VALUES("35","2111","2015-08-21","2015-09-02","2015-09-03","Duty","1","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("36","2145","2015-08-21","2015-09-07","2015-09-09","Casual","2","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("37","3213","2015-08-21","2015-09-01","2015-09-02","Sick","1","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("39","3091","2015-08-21","2015-08-26","2015-08-28","Casual","2","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("40","2222","2015-08-21","2015-09-09","2015-09-09","Casual","0.5","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("41","2396","2015-08-29","2015-08-31","2015-09-01","Sick","1","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("42","2396","2015-08-29","2015-09-21","2015-09-23","Sick","2","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("43","2111","2015-08-29","2015-10-01","2015-10-01","Sick","0.5","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("44","2247","2015-08-29","2015-09-03","2015-09-04","Sick","1","0","");
INSERT INTO tbl_apply_leave VALUES("45","3213","2015-08-29","2015-09-14","2015-09-15","Casual","1","0","");
INSERT INTO tbl_apply_leave VALUES("46","2222","2015-08-29","2015-10-05","2015-10-07","Sick","2","0","");
INSERT INTO tbl_apply_leave VALUES("48","3091","2015-08-29","2015-09-16","2015-09-16","Casual","0.5","0","");
INSERT INTO tbl_apply_leave VALUES("49","2248","2015-08-29","2015-09-21","2015-09-23","Casual","2","1","Miss. K.Jayapathma");
INSERT INTO tbl_apply_leave VALUES("51","2248","2015-08-29","2015-10-19","2015-10-21","Sick","2","0","");
INSERT INTO tbl_apply_leave VALUES("53","3339","2015-08-29","2015-08-31","2015-09-01","Sick","1","0","");
INSERT INTO tbl_apply_leave VALUES("54","2594","2015-08-29","2015-09-30","2015-12-31","Maternity","84","0","");
INSERT INTO tbl_apply_leave VALUES("55","2396","2015-08-29","2015-09-23","2015-09-24","Sick","1","0","");
INSERT INTO tbl_apply_leave VALUES("56","2567","2015-08-29","2015-08-31","2015-09-09","Sick","7","0","");
INSERT INTO tbl_apply_leave VALUES("57","2187","2015-08-29","2015-10-01","2015-10-02","Sick","1","0","");
INSERT INTO tbl_apply_leave VALUES("58","2879","2015-08-29","2015-10-14","2015-10-15","Casual","1","0","");
INSERT INTO tbl_apply_leave VALUES("59","3444","2015-08-29","2015-10-05","2015-10-05","Sick","0.5","0","");



DROP TABLE tbl_department;

CREATE TABLE `tbl_department` (
  `dep_id` varchar(50) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `dep_head` varchar(50) NOT NULL,
  `dep_phone` varchar(10) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_department VALUES("D01","Personal Department","Deputy Commissioner","0812222578");
INSERT INTO tbl_department VALUES("D02","Revenue Department","Chief Municipal Accountant","0812229807");
INSERT INTO tbl_department VALUES("D03","Salary Department","Chief Municipal Accountant","0816589458");
INSERT INTO tbl_department VALUES("D04","Fire Department","Deputy Commissioner","0812222275");
INSERT INTO tbl_department VALUES("D05","Internal Audit","Commissioner","0812222234");
INSERT INTO tbl_department VALUES("D06","Salary Department","Chief Municipal Accountant","0812223475");
INSERT INTO tbl_department VALUES("D07","Book Keeping Department","Chief Municipal Accountant","0812222556");
INSERT INTO tbl_department VALUES("D08","Works Department ","Chief Engineer","0812227896");
INSERT INTO tbl_department VALUES("D09","Planning Department","Deputy Commissioner","0812222785");
INSERT INTO tbl_department VALUES("D10","Finance Department","Chief Municipal Accountant","0812223421");
INSERT INTO tbl_department VALUES("D11","Flying Squad","Commissioner","0812222234");
INSERT INTO tbl_department VALUES("D12","Book keeping department","Chief Municipal Accountant","0812224356");
INSERT INTO tbl_department VALUES("D13","Solid Wastage Service ","Medical Officer of Health","0812222934");
INSERT INTO tbl_department VALUES("D14","Health Department","Medical Officer of Health","0812222576");
INSERT INTO tbl_department VALUES("D15","Land Department","Deputy Commissioner","0812220967");
INSERT INTO tbl_department VALUES("D16","Library Services Department","Deputy Commissioner","0816579235");



DROP TABLE tbl_dependant;

CREATE TABLE `tbl_dependant` (
  `depen_id` int(11) NOT NULL AUTO_INCREMENT,
  `depen_name` varchar(50) NOT NULL,
  `depen_gender` tinyint(1) NOT NULL,
  `depen_dob` date NOT NULL,
  `relation_name` varchar(15) NOT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`depen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO tbl_dependant VALUES("2","Shashini","1","2013-07-06","Daughter","3213");
INSERT INTO tbl_dependant VALUES("3","Dilshani","1","2013-08-06","Daughter","2594");
INSERT INTO tbl_dependant VALUES("4","Dayani Pererra","0","2014-05-04","Daughter","3634");
INSERT INTO tbl_dependant VALUES("5","Dayani","1","2014-05-04","Sister","3634");
INSERT INTO tbl_dependant VALUES("6","Saleem","0","2013-07-06","Son","3896");
INSERT INTO tbl_dependant VALUES("7","Suranga Perera","0","2000-07-06","Son","3444");
INSERT INTO tbl_dependant VALUES("8","Sonakshi","1","1997-08-19","Daughter","2222");
INSERT INTO tbl_dependant VALUES("9","Amit Wanigasekara","0","2004-08-12","Son","2222");
INSERT INTO tbl_dependant VALUES("10","Shriyani","0","2006-08-21","Daughter","2222");
INSERT INTO tbl_dependant VALUES("12","Sudarika","1","2014-08-27","Daughter","2145");
INSERT INTO tbl_dependant VALUES("13","Malik","0","2015-05-04","Son","3896");
INSERT INTO tbl_dependant VALUES("14","Sheela","0","2006-11-09","Daughter","2145");
INSERT INTO tbl_dependant VALUES("20","Madhumitha","1","2004-05-04","Daughter","2154");
INSERT INTO tbl_dependant VALUES("21","Madhushani","0","2006-09-18","Daughter","2154");
INSERT INTO tbl_dependant VALUES("22","Nirasha","1","1991-08-10","Daughter","3333");
INSERT INTO tbl_dependant VALUES("23","Amit ","0","1990-08-03","Son","3333");
INSERT INTO tbl_dependant VALUES("24","Dinushi","0","1995-10-10","Daughter","3333");
INSERT INTO tbl_dependant VALUES("25","T.Chandrasena","1","1960-08-17","Wife","3333");
INSERT INTO tbl_dependant VALUES("26","Eranga","0","1972-08-03","Husband","3212");
INSERT INTO tbl_dependant VALUES("27","Pradeep","0","2006-08-03","Son","2247");
INSERT INTO tbl_dependant VALUES("28","Maneesha","1","2005-08-10","Daughter","2248");
INSERT INTO tbl_dependant VALUES("29","Sunil","1","2008-08-11","Son","2248");
INSERT INTO tbl_dependant VALUES("30","Amila","1","2006-08-03","Daughter","2396");
INSERT INTO tbl_dependant VALUES("31","Shanika","1","2009-08-12","Daughter","2396");
INSERT INTO tbl_dependant VALUES("32","Thilini","1","2012-08-03","Daughter","2187");
INSERT INTO tbl_dependant VALUES("33","Nishantha","0","2000-08-23","Son","2879");
INSERT INTO tbl_dependant VALUES("34","Nissanka","0","2004-10-15","Son","2879");



DROP TABLE tbl_emp_img;

CREATE TABLE `tbl_emp_img` (
  `emp_id` int(11) NOT NULL,
  `emp_img_path` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_emp_img VALUES("2111","2111.jpg");
INSERT INTO tbl_emp_img VALUES("2145","2145.jpg");
INSERT INTO tbl_emp_img VALUES("2187","2187.jpg");
INSERT INTO tbl_emp_img VALUES("2222","2222.jpg");
INSERT INTO tbl_emp_img VALUES("2247","2247.jpg");
INSERT INTO tbl_emp_img VALUES("2248","2248.jpg");
INSERT INTO tbl_emp_img VALUES("2345","2345.jpg");
INSERT INTO tbl_emp_img VALUES("2396","2396.jpg");
INSERT INTO tbl_emp_img VALUES("2567","2567.jpg");
INSERT INTO tbl_emp_img VALUES("2594","2594.jpg");
INSERT INTO tbl_emp_img VALUES("2879","2879.jpg");
INSERT INTO tbl_emp_img VALUES("3083","3083.jpg");
INSERT INTO tbl_emp_img VALUES("3091","3091.jpg");
INSERT INTO tbl_emp_img VALUES("3212","3212.jpg");
INSERT INTO tbl_emp_img VALUES("3213","3213.jpg");
INSERT INTO tbl_emp_img VALUES("3264","3264.jpg");
INSERT INTO tbl_emp_img VALUES("3333","3333.jpg");
INSERT INTO tbl_emp_img VALUES("3339","3339.jpg");
INSERT INTO tbl_emp_img VALUES("3425","3425.jpg");
INSERT INTO tbl_emp_img VALUES("3444","3444.jpg");
INSERT INTO tbl_emp_img VALUES("3634","3634.jpg");
INSERT INTO tbl_emp_img VALUES("3896","3896.jpg");



DROP TABLE tbl_employee;

CREATE TABLE `tbl_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_initials` varchar(200) NOT NULL,
  `emp_gender` tinyint(4) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_nic` varchar(11) NOT NULL,
  `emp_marit_status` tinyint(4) NOT NULL,
  `dep_id` varchar(11) NOT NULL,
  `emp_inc_date` date NOT NULL,
  `job_id` varchar(50) NOT NULL,
  `emp_appoint_status` varchar(20) NOT NULL,
  `emp_appoint_date` date NOT NULL,
  `job_grade` varchar(10) NOT NULL,
  `emp_status` varchar(12) NOT NULL,
  `emp_status_date` date NOT NULL,
  `emp_address` varchar(150) NOT NULL,
  `emp_home_phone` int(12) DEFAULT NULL,
  `emp_mobile` int(12) NOT NULL,
  `emp_email` varchar(50) DEFAULT NULL,
  `emp_title` varchar(5) NOT NULL,
  `emp_epf_no` varchar(10) NOT NULL,
  `emp_waop_no` varchar(10) NOT NULL,
  `emp_appdate_kmc` date NOT NULL,
  `emp_pfno` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`,`emp_status_date`),
  UNIQUE KEY `emp_nic` (`emp_nic`),
  KEY `job_id` (`job_id`),
  KEY `dep_id` (`dep_id`),
  KEY `dep_id_2` (`dep_id`),
  KEY `job_id_2` (`job_id`),
  KEY `dep_id_3` (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_employee VALUES("2111","T.Fernando","Tia Fernando","1","1988-08-14","881254369V","0","D03","2016-08-13","Sri Lanka Administrative Service ","Permanent","2010-08-13","3-I","Employed","2010-08-13","        No.12/1, Galaha Road,\nKandy","812223487","771234523","tia123@gmail.com","Miss.","","","2010-08-13","CPC/KMC/D/01/10/08/123");
INSERT INTO tbl_employee VALUES("2145","S.T.Jayasuriya","Siyaneris Titus Jayasuriya","0","1990-01-01","901234567V","1","D01","2016-07-28","Medical Officer Of Health","Permanent","2015-07-28","3-II","Employed","2015-07-28","                                No.100,Uggalla,\nKandy","815684505","772331223","jayasuriya@gmail.com","Mr.","","M/345625","2015-07-28","CPC/KMC/D/10/09/1234");
INSERT INTO tbl_employee VALUES("2154","C.K.Hapuaracchchi","Chandani Kumari Hapuarachchi","1","1978-08-10","781245658V","1","D14","2015-09-15","Food Inspector","Permanent","2000-09-15","2-II","Employed","2009-09-15","No.56/1, Madawala Road,\nKatugastota","814579632","772549863","chandanik@hotmail.com","Mrs.","","F/321112","2009-09-15","CPC/KMC/D/10/23/09/2010");
INSERT INTO tbl_employee VALUES("2187","C.N.Perera","Chaturika Nipuni Perera","1","1984-12-11","848246892V","1","D16","2015-12-12","Librarian ","Permanent","2005-12-12","2-II","Employed","2005-12-12","No.26/6, Ranawana Road,\nKandy","815684507","789648632","chathunp@hotmail.com","Mrs.","","F/359756","2005-12-12","CPC/KMC/D/10/24/12/2005");
INSERT INTO tbl_employee VALUES("2222","P. Wanigasekara","Padma Wanigasekara","1","1960-08-12","606523982V","1","D14","2015-12-12","Pharmacist","Permanent","1990-12-12","2-I","Employed","1990-12-12","                No.48,Katugastota Road,\nKandy","812547893","723697842","padma@yahoo.com","Mrs.","","F/325203","1990-12-12","CPC/KMC/D/06/44/03/1990");
INSERT INTO tbl_employee VALUES("2247","N.Herath","Nishantha Herath","0","1983-09-16","831286924V","1","D02","2016-10-25","Revenue Inspector","Permanent","2010-10-25","3-I","Employed","2010-10-25","        No.28, Kandy","816597532","779863511","herth@yahoo.com","Mr.","","","2010-10-25","CPC/KMC/D/15/41/10/2010");
INSERT INTO tbl_employee VALUES("2248","T.Kekulandala","Thilini Kekulandala","1","1974-10-25","748479315V","1","D02","2015-12-15","Statistics Officer","Permanent","2005-12-15","2-I","Employed","2005-12-15","No.49, Peradeniya Road,\nKandy        ","816894527","729876589","thili@rocketmail.com","Mrs.","","","2010-10-15","CPC/KMC/D/11/65/12/2010");
INSERT INTO tbl_employee VALUES("2396","K.Fernando","Kasun Fernando","0","1975-08-10","751249763V","1","D08","2015-10-08","Chief Engineer","Permanent","1999-10-08","2-I","Employed","1999-10-08","        No.27, Kandy","816597324","723257271","kzfer@gmail.com","Mr.","","M/345624","1999-10-08","CPC/KMC/D/15/62/10/1999");
INSERT INTO tbl_employee VALUES("2567","N.Kumara","Nalin Kumara","0","1980-08-10","803431259V","0","D05","2015-10-06","Computer Data Analyst","Permanent","2005-10-06","3-I","Employed","2005-10-06","No.326,Kurunegala Road,\nKatugastota","815684505","781249632","kumara.n@gmail.com","Mr.","","M/345659","2005-10-06","CPC/KMC/D/05/12/10/2005");
INSERT INTO tbl_employee VALUES("2594","K.Jayapathma","Kasuni Jayapathma","1","1985-07-16","857458252V","0","D15","2016-08-07","Engineer Civil ","Permanent","2009-12-11","3-I","Employed","2009-12-11","                                                                No.87, Peradeniya Rd,\nKandy","817453690","778945635","andr@gmail.com","Mrs.","","F/112025","2009-12-11","CPC/KMC/D/09/10/12/2009");
INSERT INTO tbl_employee VALUES("2879","N.Weerasooriya","Nuwan Weerasooriya","0","1970-08-10","702148693V","1","D07","2015-09-14","Chief Municipal Accountant","Permanent","1990-09-14","I-III","Employed","1990-09-14","        No.43, Wattaranthenna Road,\nKatugastota","816597891","719863257","nuwan@gmail.com","Mr.","","M/342577","1990-09-14","CPC/KMC/D/07/26/09/1990");
INSERT INTO tbl_employee VALUES("3091","A.Ziyad","Ahamad Ziyad","0","1980-08-05","803431234V","0","D06","2016-08-07","Sri Lanka Administrative Service ","Substitute","2006-01-03","2-I","Employed","2006-01-03","                                                                                No:71/1,Mahakubura,\nNawalapitiya. ","815429075","773896124","ziyad00@gmail.com","Mr.","","","2006-01-03","CPC/KMC/D/06/44/01/2006");
INSERT INTO tbl_employee VALUES("3212","E.Silva","Erangani De Silva","1","1976-08-03","761248931V","1","D10","2016-08-04","Technical Officer Mechanic","Permanent","2000-08-04","2-II","Employed","2000-08-04","No.91/A, Halloluwa","813597624","789453219","era.sil@gmail.com","Mrs.","","F/325120","2002-08-05","CPC/KMC/D/15/46/08/2000");
INSERT INTO tbl_employee VALUES("3213","M.Arunasalam","Murugesu Arunasalam","0","1988-04-03","881256878V","1","D13","2016-08-07","Chief Municipal Accountant","Permanent","2009-10-25","3-I","Employed","2009-09-25","                                No.23,Galaha Road,kandy","817453690","778945635","murug@gmail.com","Mr.","","M/345627","2009-09-25","CPC/KMC/D/12/25/09/2009");
INSERT INTO tbl_employee VALUES("3264","D.Gamage","Dharmasena Gamage","0","1963-08-13","632202547V","0","D09","2015-08-14","Translator ","Permanent","1990-08-14","2-I","Employed","1990-08-14","                        No.43/11, Peradeniya Road, Kandy","817896254","723489657","gamage@gmail.com","Mr.","","M/345127","1990-08-14","CPC/KMC/D12/25/08/1990");
INSERT INTO tbl_employee VALUES("3333","N.H.Chandrasena","Nalin Hapuarachchige Chandrasena","0","1959-08-04","594783512V","1","D11","2015-12-06","Sri Lanka Administrative Service ","Permanent","1984-12-06","I-","Employed","1984-12-06","No.67/A, Weerakon Garden, Kandy","813259732","772357891","nhchandra@rocketmail.com","Mr.","","M/346327","1984-12-06","CPC/KMC/D/11/65/12/1984");
INSERT INTO tbl_employee VALUES("3339","B.Dissanayake","Boomika Dissanayake","1","1986-06-02","861456987V","0","D04","2016-08-07","Chief Fire Brigade Officer ","Permanent","2015-08-07","2-I","Employed","2015-06-07","                                No.21,Katugastota Road,Kandy","814569823","756984125","boomi@yahoo.com","Miss.","","","2015-06-07","CPC/KMC/D/10/06/15/1458");
INSERT INTO tbl_employee VALUES("3444","A.Perera","Athula Perera","0","1963-09-16","632604977V","1","D12","2016-08-07","Management Assistant Service","Permanent","2014-04-16","3-II","Employed","2014-04-04","        No.123,Kandy                                             ","815692148","778953317","aperera@hotmail.com","Mr.","","","2014-07-29","CPC/KMC/D/11/65/12/2014");
INSERT INTO tbl_employee VALUES("3634","D.N.Perera","Dhasun Nalin Perera","0","1983-06-04","834529076V","1","D07","2016-08-07","Management Assistant service","Casual","2015-08-07","2-II","Transferred","2007-01-05","                No:453,Katugastota,\nKandy","813427643","764387623","Nalin9@gmail.com","Mr","","","2007-01-05","CPC/KMC/D/08/66/01/2007");
INSERT INTO tbl_employee VALUES("3896","M.Kamal","Mohamed  Kamal","0","1981-06-06","816529856V","1","D10","2016-08-07","Management Assistant Service","Permanent","2006-01-03","2-I","Employed","2006-01-03","        No:234,Deegavapitiya,\nAmpara","813876327","725631897","kamal11@gmail.com","Mr.","","","2006-01-03","CPC/KMC/D 08/88/01/2006");



DROP TABLE tbl_holiday;

CREATE TABLE `tbl_holiday` (
  `holy_id` int(11) NOT NULL AUTO_INCREMENT,
  `holy_date` date NOT NULL,
  `holy_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`holy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

INSERT INTO tbl_holiday VALUES("1","2014-01-14","Thai Pongal");
INSERT INTO tbl_holiday VALUES("3","2014-01-15","Duruthu Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("5","2014-02-14","Navam Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("7","2014-03-16","Medin Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("9","2014-04-14","Sinhala And Tamil New Year Day");
INSERT INTO tbl_holiday VALUES("11","2014-04-18","Good Friday");
INSERT INTO tbl_holiday VALUES("13","2014-05-14","Vesak Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("15","2014-06-12","Poson Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("17","2014-06-12","Poson Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("19","2014-07-29","Id-Ul-Fithr- Ramazan day");
INSERT INTO tbl_holiday VALUES("27","2015-02-03","Navam Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("29","2015-12-25","Christmas Day");
INSERT INTO tbl_holiday VALUES("31","2015-07-18","Eid-Ul-Fithr");
INSERT INTO tbl_holiday VALUES("32","2015-08-29","Nikini Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("33","2015-09-24","Eid-Ul-Fithr");
INSERT INTO tbl_holiday VALUES("34","2015-01-15","Thai Pongal");
INSERT INTO tbl_holiday VALUES("35","2015-04-14","Sinhala Tamil New Year");
INSERT INTO tbl_holiday VALUES("36","2015-09-27","Binara Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("37","2015-10-27","Vap Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("38","2015-10-25","Il Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("39","2015-12-24","Uduvap Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("40","2015-11-25","Il Full Moon Poya Day");
INSERT INTO tbl_holiday VALUES("41","2015-02-04","Independance Day");



DROP TABLE tbl_holiday_type;

CREATE TABLE `tbl_holiday_type` (
  `holiday_id` int(11) NOT NULL AUTO_INCREMENT,
  `holiday_name` varchar(50) NOT NULL,
  PRIMARY KEY (`holiday_id`),
  UNIQUE KEY `holiday_name` (`holiday_name`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO tbl_holiday_type VALUES("5","Bak Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("10","Binara Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("21","Deepavali");
INSERT INTO tbl_holiday_type VALUES("2","Duruthu Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("15","Eid-Ul-Alha");
INSERT INTO tbl_holiday_type VALUES("14","Eid-Ul-Fithr");
INSERT INTO tbl_holiday_type VALUES("8","Esala Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("12","Il Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("22","Independance Day");
INSERT INTO tbl_holiday_type VALUES("16","Maha Shivarathri Day");
INSERT INTO tbl_holiday_type VALUES("4","Medin Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("3","Navam Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("9","Nikini Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("7","Poson Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("18","Sinhala Tamil New Year");
INSERT INTO tbl_holiday_type VALUES("1","Thai Pongal");
INSERT INTO tbl_holiday_type VALUES("13","Uduvap Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("11","Vap Full Moon Poya Day");
INSERT INTO tbl_holiday_type VALUES("6","Vesak Full Moon Poya Day");



DROP TABLE tbl_job;

CREATE TABLE `tbl_job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(45) DEFAULT NULL,
  `job_desc` varchar(45) DEFAULT NULL,
  `job_no_emp` int(11) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

INSERT INTO tbl_job VALUES("11","Sri Lanka Administrative Service ","","4");
INSERT INTO tbl_job VALUES("19","Engineer Civil ","","2");
INSERT INTO tbl_job VALUES("22","Medical Officer Of Health","","1");
INSERT INTO tbl_job VALUES("25","Chief Fire Brigade Officer ","","1");
INSERT INTO tbl_job VALUES("27","City Analyst","","1");
INSERT INTO tbl_job VALUES("30","Chief Management Assistant ","","19");
INSERT INTO tbl_job VALUES("32","Translator ","","1");
INSERT INTO tbl_job VALUES("34","Revenue Inspector","","1");
INSERT INTO tbl_job VALUES("36","Revenue Inspector","","9");
INSERT INTO tbl_job VALUES("41","Technical Officer Mechanic","","2");
INSERT INTO tbl_job VALUES("43","Pharmacist","","1");
INSERT INTO tbl_job VALUES("45","Technical Officer Draughtsman","","5");
INSERT INTO tbl_job VALUES("47","Public Health Inspector","","2");
INSERT INTO tbl_job VALUES("49","Food Inspector","","2");
INSERT INTO tbl_job VALUES("51","Computer Data Analyst","","2");
INSERT INTO tbl_job VALUES("53","Market Superintendent","","1");
INSERT INTO tbl_job VALUES("55","Statistics Officer","","1");
INSERT INTO tbl_job VALUES("57","Ayurvedic Medical Officer","","7");
INSERT INTO tbl_job VALUES("59","Public Health Nurse","","4");
INSERT INTO tbl_job VALUES("62","Librarian ","","3");
INSERT INTO tbl_job VALUES("64","Fireman","","3");
INSERT INTO tbl_job VALUES("66","Mechanical Fireman","","6");
INSERT INTO tbl_job VALUES("69","Market Inspector","","1");
INSERT INTO tbl_job VALUES("71","Relief Officer","","3");
INSERT INTO tbl_job VALUES("73","Architect","","2");
INSERT INTO tbl_job VALUES("75","Market Supervisior","","2");
INSERT INTO tbl_job VALUES("82","Land Officer","","1");
INSERT INTO tbl_job VALUES("83","Commissioner","","1");
INSERT INTO tbl_job VALUES("84","Deputy Commissioner","","1");
INSERT INTO tbl_job VALUES("85","Chief Municipal Accountant","","1");
INSERT INTO tbl_job VALUES("87","Chief Engineer","","1");
INSERT INTO tbl_job VALUES("88","Management Assistant Service","","5");
INSERT INTO tbl_job VALUES("89","Management Assistant Service","","5");



DROP TABLE tbl_leav_type;

CREATE TABLE `tbl_leav_type` (
  `leave_type_casual` double DEFAULT NULL,
  `leave_type_sick` double DEFAULT NULL,
  `leave_type_maternity` double DEFAULT NULL,
  `leave_type_other` double DEFAULT NULL,
  `leave_type_year` year(4) NOT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `emp_id_3` (`emp_id`),
  KEY `emp_id` (`emp_id`),
  KEY `emp_id_2` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","2111");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","2145");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","2154");
INSERT INTO tbl_leav_type VALUES("21","24","84","0","0000","2187");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","2222");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","2247");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","2248");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","2396");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","2567");
INSERT INTO tbl_leav_type VALUES("21","24","84","0","0000","2594");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","2879");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","3091");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","3212");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","3213");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","3264");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","3333");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","3339");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","3444");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","0000","3634");
INSERT INTO tbl_leav_type VALUES("21","24","0","0","2013","3896");



DROP TABLE tbl_qual_type;

CREATE TABLE `tbl_qual_type` (
  `qual_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `qual_type_name` varchar(50) NOT NULL,
  `qual_type_desc` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`qual_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO tbl_qual_type VALUES("4","G.C.E Advanced Level","Pass all subjects");
INSERT INTO tbl_qual_type VALUES("11","H.N.D","Higher National Diploma");
INSERT INTO tbl_qual_type VALUES("12","G.C.E.Ordinary Level","Pass 6 subjects with Language and Mathematics");
INSERT INTO tbl_qual_type VALUES("13","Diploma","");
INSERT INTO tbl_qual_type VALUES("18","Degree","3 years degree approved by the UGC");
INSERT INTO tbl_qual_type VALUES("19","Excellency Level I","");
INSERT INTO tbl_qual_type VALUES("20","Excellency Level II","");
INSERT INTO tbl_qual_type VALUES("21","Excellency Level III","");



DROP TABLE tbl_qualification;

CREATE TABLE `tbl_qualification` (
  `qual_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(4) NOT NULL,
  `qual_name` varchar(45) NOT NULL,
  `qual_date` date NOT NULL,
  `qual_lang` varchar(45) NOT NULL,
  `qual_desc` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`qual_id`),
  KEY `emp_id_idx` (`emp_id`),
  CONSTRAINT `emp_id` FOREIGN KEY (`emp_id`) REFERENCES `tbl_employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

INSERT INTO tbl_qualification VALUES("14","3634","G.C.E.Ordinary Level","2010-12-01","Sinhala","");
INSERT INTO tbl_qualification VALUES("15","3213","G.C.E.Ordinary Level","1982-12-03","Tamil","");
INSERT INTO tbl_qualification VALUES("16","3896","G.C.E.Ordinary Level","2000-12-12","Tamil","");
INSERT INTO tbl_qualification VALUES("17","3896","G.C.E Advanced Level","2003-04-04","Tamil","");
INSERT INTO tbl_qualification VALUES("18","3444","G.C.E.Ordinary Level","2000-12-12","Sinhala","");
INSERT INTO tbl_qualification VALUES("19","3444","G.C.E Advanced Level","2003-04-04","Sinhala","");
INSERT INTO tbl_qualification VALUES("20","3444","H.N.D","2008-04-04","English","English");
INSERT INTO tbl_qualification VALUES("21","2145","G.C.E.Ordinary Level","1998-12-04","Sinhala","");
INSERT INTO tbl_qualification VALUES("22","2594","G.C.E.Ordinary Level","2000-12-12","Sinhala","");
INSERT INTO tbl_qualification VALUES("23","2145","Diploma","2003-05-06","English","English Diploma");
INSERT INTO tbl_qualification VALUES("24","2594","Diploma","2005-04-04","English","Computer Science");
INSERT INTO tbl_qualification VALUES("41","2145","G.C.E Advanced Level","2015-08-30","Sinhala","");
INSERT INTO tbl_qualification VALUES("42","2594","Diploma","2015-04-06","Tamil","Tamil");
INSERT INTO tbl_qualification VALUES("43","3213","G.C.E Advanced Level","2008-04-04","Sinhala","");
INSERT INTO tbl_qualification VALUES("44","2154","G.C.E.Ordinary Level","1996-12-10","Sinhala","");
INSERT INTO tbl_qualification VALUES("45","2154","G.C.E Advanced Level","1998-08-04","Sinhala","");
INSERT INTO tbl_qualification VALUES("46","3333","G.C.E.Ordinary Level","1975-12-04","Sinhala","");
INSERT INTO tbl_qualification VALUES("47","3333","G.C.E Advanced Level","1978-08-03","Sinhala","");
INSERT INTO tbl_qualification VALUES("48","3333","Degree","1983-08-16","Sinhala","BA(Hons)");
INSERT INTO tbl_qualification VALUES("49","3333","Diploma","1986-08-11","Tamil","");
INSERT INTO tbl_qualification VALUES("50","3212","G.C.E.Ordinary Level","1984-12-05","Sinhala","");
INSERT INTO tbl_qualification VALUES("51","2247","G.C.E.Ordinary Level","1999-12-20","Sinhala","");
INSERT INTO tbl_qualification VALUES("52","2247","G.C.E Advanced Level","2002-08-05","Sinhala","");
INSERT INTO tbl_qualification VALUES("53","2247","Excellency Level I","2012-08-03","Tamil","");
INSERT INTO tbl_qualification VALUES("54","2248","G.C.E.Ordinary Level","1990-12-04","Sinhala","");
INSERT INTO tbl_qualification VALUES("55","2248","G.C.E Advanced Level","1993-08-04","Sinhala","");
INSERT INTO tbl_qualification VALUES("56","2248","Excellency Level I","2015-08-03","Tamil","");
INSERT INTO tbl_qualification VALUES("57","2248","Diploma","2012-08-17","English","");
INSERT INTO tbl_qualification VALUES("58","2396","G.C.E.Ordinary Level","1990-12-03","Sinhala","");
INSERT INTO tbl_qualification VALUES("59","2396","Diploma","1992-08-10","Tamil","");
INSERT INTO tbl_qualification VALUES("60","2396","G.C.E Advanced Level","1994-08-11","Sinhala","");
INSERT INTO tbl_qualification VALUES("61","2396","Excellency Level I","2008-08-10","English","");
INSERT INTO tbl_qualification VALUES("62","2187","G.C.E.Ordinary Level","1992-12-03","Sinhala","");
INSERT INTO tbl_qualification VALUES("63","2187","Diploma","2000-08-03","English","Library Management");
INSERT INTO tbl_qualification VALUES("64","2187","G.C.E Advanced Level","1994-08-30","Sinhala","");
INSERT INTO tbl_qualification VALUES("65","2879","G.C.E.Ordinary Level","1986-12-11","Sinhala","");
INSERT INTO tbl_qualification VALUES("66","2879","G.C.E Advanced Level","1989-08-10","Sinhala","");
INSERT INTO tbl_qualification VALUES("67","2879","Degree","1995-08-19","Sinhala","Bsc in Management");
INSERT INTO tbl_qualification VALUES("68","3264","G.C.E.Ordinary Level","1979-08-10","Sinhala","");
INSERT INTO tbl_qualification VALUES("69","3264","Excellency Level II","1992-12-03","Tamil","");
INSERT INTO tbl_qualification VALUES("70","3264","Excellency Level I","1996-08-12","English","");



DROP TABLE tbl_relationship;

CREATE TABLE `tbl_relationship` (
  `relation_id` int(11) NOT NULL AUTO_INCREMENT,
  `relation_name` varchar(20) NOT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO tbl_relationship VALUES("1","Son");
INSERT INTO tbl_relationship VALUES("2","Brother");
INSERT INTO tbl_relationship VALUES("3","Father");
INSERT INTO tbl_relationship VALUES("4","Husband");
INSERT INTO tbl_relationship VALUES("5","Mother");
INSERT INTO tbl_relationship VALUES("6","Sister");
INSERT INTO tbl_relationship VALUES("7","Wife");
INSERT INTO tbl_relationship VALUES("8","Daughter");



DROP TABLE tbl_sal_type;

CREATE TABLE `tbl_sal_type` (
  `sal_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `sal_type_code` varchar(11) NOT NULL,
  `sal_initial` double NOT NULL,
  `sal_ini_yrs` int(11) NOT NULL,
  `sal_slab_fst` double NOT NULL,
  `sal_fst_yrs` int(11) NOT NULL,
  `sal_slab_snd` double NOT NULL,
  `sal_snd_yrs` int(11) NOT NULL,
  `sal_slab_trd` double NOT NULL,
  `sal_trd_yrs` int(11) NOT NULL,
  `sal_slab_forth` double NOT NULL,
  `sal_forth_yrs` int(11) NOT NULL,
  `sal_slab_fifth` double NOT NULL,
  `sal_maximum` double NOT NULL,
  PRIMARY KEY (`sal_type_id`),
  UNIQUE KEY `sal_type_code` (`sal_type_code`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO tbl_sal_type VALUES("3","PL 1-2006-A","11730","10","120","10","130","10","145","12","160","0","0","17600");
INSERT INTO tbl_sal_type VALUES("4","MN 1-2006-A","13120","10","145","11","170","10","240","10","320","0","0","22040");
INSERT INTO tbl_sal_type VALUES("5","MN 2-2006-A","13990","10","145","11","170","6","240","14","320","0","0","23230");
INSERT INTO tbl_sal_type VALUES("6","MT 1-2006-A","14425","10","145","11","170","6","240","14","320","0","0","23665");
INSERT INTO tbl_sal_type VALUES("7","MN 7-2006-A","20030","11","365","18","500","0","0","0","0","0","0","33045");
INSERT INTO tbl_sal_type VALUES("9","TS 1-2006-A","13120","10","145","5","180","0","0","0","0","0","0","15470");
INSERT INTO tbl_sal_type VALUES("10","MP 1-2006-A","16820","12","320","13","360","10","550","0","0","0","0","30840");
INSERT INTO tbl_sal_type VALUES("11","RS 1-2006-A","14280","7","145","10","180","17","240","0","0","0","0","21175");
INSERT INTO tbl_sal_type VALUES("12","RS 2-2006-A","15850","7","180","2","240","8","320","17","375","0","0","26525");
INSERT INTO tbl_sal_type VALUES("13","MP 2-2006-A","26990","9","650","9","790","0","0","0","0","0","0","39950");
INSERT INTO tbl_sal_type VALUES("14","PL 2-2006-A","12210","10","130","10","145","10","160","10","170","0","0","18600");



DROP TABLE tbl_salary;

CREATE TABLE `tbl_salary` (
  `salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `salary_basic` double NOT NULL,
  `salary_epf_cont` double NOT NULL,
  `salary_inc` double NOT NULL,
  `salary_waop` double NOT NULL,
  `salary_marital` double NOT NULL,
  `salary_agra` double NOT NULL,
  `salary_col` double NOT NULL,
  `salary_spec_allow` double NOT NULL,
  `salary_alwother` double NOT NULL,
  `salary_code` varchar(20) NOT NULL,
  `salary_loan_dist` double NOT NULL,
  `salary_loan_hous` double NOT NULL,
  `salary_loan_other` double NOT NULL,
  `sal_mith` double NOT NULL,
  `sal_ounion` double NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `emp_id_2` (`emp_id`),
  KEY `emp_id` (`emp_id`),
  KEY `salary_id` (`salary_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

INSERT INTO tbl_salary VALUES("94","2111","14200","0","145","0","1136","125","7200","2130","10000","MP 1-2006-A","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("98","2154","27000","0","640","2160","2160","125","7200","5400","10000","PL 1-2006-A","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("105","2187","22040","0","240","1763.2","1763.2","125","7200","4408","10000","PL 2-2006-A","0","0","0","225","350");
INSERT INTO tbl_salary VALUES("96","2222","28020","0","540","650","2000","120","7200","10000","0","","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("103","2247","18400","0","240","0","1472","125","7200","3680","10000","RS 1-2006-A","0","0","0","225","350");
INSERT INTO tbl_salary VALUES("102","2248","18200","0","240","1456","1456","125","7200","3640","10000","PL 1-2006-A","0","0","0","225","325");
INSERT INTO tbl_salary VALUES("104","2396","42250","0","650","3380","0","125","7200","8450","10000","RS 1-2006-A","0","0","0","225","350");
INSERT INTO tbl_salary VALUES("99","2567","18000","0","240","1440","0","125","7200","3600","10000","MN 2-2006-A","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("67","2594","14000","0","100","1120","0","125","8000","2100","5000","MN 7-2006-A","0","0","0","225","350");
INSERT INTO tbl_salary VALUES("106","2879","27460","0","750","2196.8","2196.8","125","7200","5492","10000","MP 2-2006-A","0","0","0","225","350");
INSERT INTO tbl_salary VALUES("44","3091","15000","1200","100","1200","1200","125","7200","3000","0","MN 3-2006-A","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("101","3212","19000","0","240","1520","1520","125","7200","3800","10000","MT 1-2006-A","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("82","3213","21160","0","100","1692.8","1692.8","125","7200","4232","10000","MT 1-2006-A","0","14000","0","0","0");
INSERT INTO tbl_salary VALUES("97","3264","28460","0","640","2276.8","2276.8","125","7200","5692","10000","RS 2-2006-A","0","0","0","260","400");
INSERT INTO tbl_salary VALUES("46","3309","15","0","100","0","0","0","0","0","0","MN 3-2006-A","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("100","3333","53060","0","1050","4244.8","4244.8","125","7200","10612","10000","MN 7-2006-A","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("92","3339","14200","0","100","0","0","125","0","2130","0","RS 1-2006-A","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("55","3444","12780","0","100","0","0","125","7200","1917","10000","MN 1-2006-A","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("86","3634","14620","0","100","0","0","0","0","0","0","","0","0","0","0","0");
INSERT INTO tbl_salary VALUES("42","3896","15100","0","100","0","0","0","0","0","0","MN 3-2006-A","0","0","0","0","0");



DROP TABLE tbl_user;

CREATE TABLE `tbl_user` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_role` int(2) NOT NULL,
  `user_status` int(2) NOT NULL,
  `user_last_login` datetime DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `user_role` (`user_role`),
  KEY `emp_id` (`emp_id`),
  KEY `emp_id_2` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_user VALUES("2145","jayasuriya","0f5cb7b56b8c9a15ab4a1f9cb0b170de","2","1","","2145");
INSERT INTO tbl_user VALUES("2396","kasun","a7ec7f64c1a11102a16ed9ba938d20a8","1","1","","2396");
INSERT INTO tbl_user VALUES("2594","Jaya","43f464b84d40094858ca9e0a77bf7cb8","1","1","","2594");
INSERT INTO tbl_user VALUES("3212","user111","0c534ed3fff7d2bfd32ee19d84644e3f","3","1","0000-00-00 00:00:00","3212");
INSERT INTO tbl_user VALUES("3264","gamage","996863f1ea9363700631332014f051f5","1","0","","3264");
INSERT INTO tbl_user VALUES("3333","Chandrasena","9a3b711aeb11a9e6fbf3393f5353afbf","2","1","","3333");
INSERT INTO tbl_user VALUES("3444","Perera","6ff776400acab21780ab646de757ebba","3","1","","3444");
INSERT INTO tbl_user VALUES("3634","Nalin","7f6e76a9cde1849d566239e15c334aab","3","0","0000-00-00 00:00:00","3634");
INSERT INTO tbl_user VALUES("3896","Kamal","aa63b0d5d950361c05012235ab520512","1","1","0000-00-00 00:00:00","3896");



DROP TABLE tbl_usrlog;

CREATE TABLE `tbl_usrlog` (
  `logId` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`logId`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=latin1;

INSERT INTO tbl_usrlog VALUES("2","2594","2015-03-22 11:19:23");
INSERT INTO tbl_usrlog VALUES("4","3083","2015-07-02 18:59:38");
INSERT INTO tbl_usrlog VALUES("6","2594","2015-03-24 13:06:54");
INSERT INTO tbl_usrlog VALUES("8","2594","2015-03-24 08:16:02");
INSERT INTO tbl_usrlog VALUES("10","2594","2015-03-25 13:57:28");
INSERT INTO tbl_usrlog VALUES("12","2594","2015-03-25 08:16:07");
INSERT INTO tbl_usrlog VALUES("14","2594","2015-03-25 11:00:09");
INSERT INTO tbl_usrlog VALUES("16","2594","2015-03-25 11:21:21");
INSERT INTO tbl_usrlog VALUES("18","2594","2015-03-25 11:45:23");
INSERT INTO tbl_usrlog VALUES("20","2594","2015-03-25 11:59:52");
INSERT INTO tbl_usrlog VALUES("22","2594","2015-03-27 04:43:37");
INSERT INTO tbl_usrlog VALUES("24","2594","2015-03-28 12:22:35");
INSERT INTO tbl_usrlog VALUES("26","2594","2015-03-30 02:10:36");
INSERT INTO tbl_usrlog VALUES("28","2594","2007-01-01 09:05:53");
INSERT INTO tbl_usrlog VALUES("30","2594","2015-04-02 10:08:55");
INSERT INTO tbl_usrlog VALUES("32","2594","2015-04-02 10:47:23");
INSERT INTO tbl_usrlog VALUES("34","2594","2015-04-03 06:33:11");
INSERT INTO tbl_usrlog VALUES("36","2594","2015-04-03 10:04:00");
INSERT INTO tbl_usrlog VALUES("38","2594","2015-04-07 08:54:03");
INSERT INTO tbl_usrlog VALUES("40","2594","2015-04-07 01:18:01");
INSERT INTO tbl_usrlog VALUES("42","2594","2015-04-08 09:06:55");
INSERT INTO tbl_usrlog VALUES("44","2594","2015-04-10 10:11:24");
INSERT INTO tbl_usrlog VALUES("46","2594","2007-01-01 08:27:54");
INSERT INTO tbl_usrlog VALUES("48","2594","2015-05-01 12:04:20");
INSERT INTO tbl_usrlog VALUES("50","2594","2015-05-21 02:52:03");
INSERT INTO tbl_usrlog VALUES("52","2594","2007-01-01 09:44:55");
INSERT INTO tbl_usrlog VALUES("54","2594","2015-06-09 10:32:36");
INSERT INTO tbl_usrlog VALUES("56","2594","2015-06-12 02:22:09");
INSERT INTO tbl_usrlog VALUES("58","2594","2015-06-12 02:48:42");
INSERT INTO tbl_usrlog VALUES("60","2594","2015-06-14 12:12:50");
INSERT INTO tbl_usrlog VALUES("62","2594","2015-06-14 10:40:21");
INSERT INTO tbl_usrlog VALUES("64","2594","2015-06-15 06:22:19");
INSERT INTO tbl_usrlog VALUES("66","2594","2015-06-15 06:35:56");
INSERT INTO tbl_usrlog VALUES("68","2594","2015-06-15 10:25:20");
INSERT INTO tbl_usrlog VALUES("70","2594","2015-06-19 04:21:30");
INSERT INTO tbl_usrlog VALUES("72","2594","2015-06-22 04:07:34");
INSERT INTO tbl_usrlog VALUES("74","2594","2015-06-23 10:33:41");
INSERT INTO tbl_usrlog VALUES("76","2594","2015-06-24 01:29:45");
INSERT INTO tbl_usrlog VALUES("78","2594","2015-06-27 09:03:55");
INSERT INTO tbl_usrlog VALUES("80","2594","2015-07-02 03:50:09");
INSERT INTO tbl_usrlog VALUES("82","3083","2015-07-03 03:54:09");
INSERT INTO tbl_usrlog VALUES("84","3896","2015-07-03 04:04:58");
INSERT INTO tbl_usrlog VALUES("86","2594","2015-07-03 05:16:40");
INSERT INTO tbl_usrlog VALUES("88","3896","2015-07-06 12:54:24");
INSERT INTO tbl_usrlog VALUES("90","2594","2015-07-07 03:36:53");
INSERT INTO tbl_usrlog VALUES("92","3896","2015-07-09 03:23:18");
INSERT INTO tbl_usrlog VALUES("94","3896","2015-07-10 09:02:56");
INSERT INTO tbl_usrlog VALUES("96","3896","2015-07-12 12:41:13");
INSERT INTO tbl_usrlog VALUES("97","3896","2015-07-13 03:39:22");
INSERT INTO tbl_usrlog VALUES("98","3896","2015-07-13 06:11:53");
INSERT INTO tbl_usrlog VALUES("99","3896","2015-07-14 03:10:46");
INSERT INTO tbl_usrlog VALUES("100","3896","2015-07-16 06:55:31");
INSERT INTO tbl_usrlog VALUES("101","2594","2015-07-16 07:04:43");
INSERT INTO tbl_usrlog VALUES("102","2594","2015-07-16 08:59:18");
INSERT INTO tbl_usrlog VALUES("103","2594","2015-07-16 09:03:32");
INSERT INTO tbl_usrlog VALUES("104","2594","2015-07-16 10:00:53");
INSERT INTO tbl_usrlog VALUES("105","2594","2015-07-17 02:20:18");
INSERT INTO tbl_usrlog VALUES("106","2594","2015-07-19 11:09:41");
INSERT INTO tbl_usrlog VALUES("107","3212","2015-07-19 11:12:08");
INSERT INTO tbl_usrlog VALUES("108","2594","2015-07-19 01:45:26");
INSERT INTO tbl_usrlog VALUES("109","2594","2015-07-23 06:19:41");
INSERT INTO tbl_usrlog VALUES("110","3212","2015-07-23 10:09:31");
INSERT INTO tbl_usrlog VALUES("111","2594","2015-07-23 10:09:42");
INSERT INTO tbl_usrlog VALUES("112","2594","2015-07-26 04:43:15");
INSERT INTO tbl_usrlog VALUES("113","2594","2015-07-27 12:08:54");
INSERT INTO tbl_usrlog VALUES("114","2594","2015-07-27 10:11:51");
INSERT INTO tbl_usrlog VALUES("115","2594","2015-07-27 10:41:34");
INSERT INTO tbl_usrlog VALUES("116","2594","2015-07-28 01:25:53");
INSERT INTO tbl_usrlog VALUES("117","3896","2015-07-29 12:03:18");
INSERT INTO tbl_usrlog VALUES("118","2594","2015-07-29 12:01:56");
INSERT INTO tbl_usrlog VALUES("119","3896","2015-07-30 02:10:35");
INSERT INTO tbl_usrlog VALUES("120","2594","2015-08-02 02:10:17");
INSERT INTO tbl_usrlog VALUES("121","2594","2015-08-02 02:20:30");
INSERT INTO tbl_usrlog VALUES("122","2594","2015-08-05 12:50:08");
INSERT INTO tbl_usrlog VALUES("123","2594","2015-08-05 02:32:22");
INSERT INTO tbl_usrlog VALUES("124","3896","2015-08-05 02:32:35");
INSERT INTO tbl_usrlog VALUES("125","2594","2015-08-05 08:12:05");
INSERT INTO tbl_usrlog VALUES("126","2594","2015-08-05 10:43:32");
INSERT INTO tbl_usrlog VALUES("127","2594","2015-08-08 09:16:37");
INSERT INTO tbl_usrlog VALUES("128","2594","2015-08-10 09:39:13");
INSERT INTO tbl_usrlog VALUES("129","2594","2015-08-13 10:31:06");
INSERT INTO tbl_usrlog VALUES("130","3896","2015-08-14 08:53:35");
INSERT INTO tbl_usrlog VALUES("131","2594","2015-08-14 11:33:43");
INSERT INTO tbl_usrlog VALUES("132","3264","2015-08-14 11:41:49");
INSERT INTO tbl_usrlog VALUES("133","2145","2015-08-14 01:02:32");
INSERT INTO tbl_usrlog VALUES("134","2145","2015-08-15 11:01:12");
INSERT INTO tbl_usrlog VALUES("135","2145","2015-08-15 11:08:26");
INSERT INTO tbl_usrlog VALUES("136","2145","2015-08-15 11:09:17");
INSERT INTO tbl_usrlog VALUES("137","2145","2015-08-15 11:19:01");
INSERT INTO tbl_usrlog VALUES("138","2145","2015-08-19 11:13:44");
INSERT INTO tbl_usrlog VALUES("139","3896","2015-08-19 11:22:10");
INSERT INTO tbl_usrlog VALUES("140","3896","2015-08-19 11:28:23");
INSERT INTO tbl_usrlog VALUES("141","2145","2015-08-19 11:30:32");
INSERT INTO tbl_usrlog VALUES("142","2145","2015-08-19 02:01:12");
INSERT INTO tbl_usrlog VALUES("143","3212","2015-08-19 02:01:46");
INSERT INTO tbl_usrlog VALUES("144","2594","2015-08-21 09:00:11");
INSERT INTO tbl_usrlog VALUES("145","2594","2015-08-21 03:32:11");
INSERT INTO tbl_usrlog VALUES("146","2145","2015-08-22 02:58:05");
INSERT INTO tbl_usrlog VALUES("147","2145","2015-08-22 05:32:30");
INSERT INTO tbl_usrlog VALUES("148","2145","2015-08-22 09:07:16");
INSERT INTO tbl_usrlog VALUES("149","2145","2015-08-23 05:40:08");
INSERT INTO tbl_usrlog VALUES("150","2145","2015-08-24 02:33:46");
INSERT INTO tbl_usrlog VALUES("151","2145","2015-08-24 09:36:20");
INSERT INTO tbl_usrlog VALUES("152","2145","2015-08-24 01:12:27");
INSERT INTO tbl_usrlog VALUES("153","2145","2015-08-25 02:56:24");
INSERT INTO tbl_usrlog VALUES("154","2145","2015-08-25 08:46:43");
INSERT INTO tbl_usrlog VALUES("155","3212","2015-08-25 09:59:03");
INSERT INTO tbl_usrlog VALUES("156","2594","2015-08-25 10:04:39");
INSERT INTO tbl_usrlog VALUES("157","2145","2015-08-25 10:22:23");
INSERT INTO tbl_usrlog VALUES("158","2145","2015-08-26 02:52:00");
INSERT INTO tbl_usrlog VALUES("159","3333","2015-08-26 02:53:47");
INSERT INTO tbl_usrlog VALUES("160","3212","2015-08-26 03:50:16");
INSERT INTO tbl_usrlog VALUES("161","3333","2015-08-26 03:58:53");
INSERT INTO tbl_usrlog VALUES("162","3896","2015-08-26 03:59:24");
INSERT INTO tbl_usrlog VALUES("163","3896","2015-08-26 10:22:40");
INSERT INTO tbl_usrlog VALUES("164","3896","2015-08-27 09:33:16");
INSERT INTO tbl_usrlog VALUES("165","3896","2015-08-28 09:12:31");
INSERT INTO tbl_usrlog VALUES("166","3896","2015-08-29 04:37:52");
INSERT INTO tbl_usrlog VALUES("167","3896","2015-08-29 04:38:36");
INSERT INTO tbl_usrlog VALUES("168","3333","2015-08-29 04:39:24");
INSERT INTO tbl_usrlog VALUES("169","2594","2015-08-29 04:39:43");
INSERT INTO tbl_usrlog VALUES("170","3333","2015-08-29 04:42:02");
INSERT INTO tbl_usrlog VALUES("171","2145","2015-08-29 04:44:43");
INSERT INTO tbl_usrlog VALUES("172","2594","2015-08-29 04:52:32");
INSERT INTO tbl_usrlog VALUES("173","2594","2015-08-29 09:39:54");
INSERT INTO tbl_usrlog VALUES("174","2396","2015-08-29 11:18:53");
INSERT INTO tbl_usrlog VALUES("175","2396","2015-08-29 12:16:12");



