DROP TABLE tbl_children;

CREATE TABLE `tbl_children` (
  `child_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_name` varchar(100) COLLATE utf8_sinhala_ci NOT NULL,
  `child_school` varchar(50) COLLATE utf8_sinhala_ci DEFAULT NULL,
  `child_dob` date NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;




DROP TABLE tbl_dir_div;

CREATE TABLE `tbl_dir_div` (
  `dir_div_id` int(11) NOT NULL AUTO_INCREMENT,
  `dir_div_name` varchar(100) COLLATE utf8_sinhala_ci NOT NULL,
  PRIMARY KEY (`dir_div_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;

INSERT INTO tbl_dir_div VALUES("1","Director General");
INSERT INTO tbl_dir_div VALUES("2","Administration");
INSERT INTO tbl_dir_div VALUES("3","Finance");
INSERT INTO tbl_dir_div VALUES("4","Socio Economic Planning");
INSERT INTO tbl_dir_div VALUES("5","Horticulture Research & Development");
INSERT INTO tbl_dir_div VALUES("6","Rice Research & Development");
INSERT INTO tbl_dir_div VALUES("7","Field Crops Research & Development");
INSERT INTO tbl_dir_div VALUES("8","Extension & Training");
INSERT INTO tbl_dir_div VALUES("9","Seed Certification & Plant Protection");
INSERT INTO tbl_dir_div VALUES("10","Seed & Planting Material Development");
INSERT INTO tbl_dir_div VALUES("11","Internal Audit");
INSERT INTO tbl_dir_div VALUES("12","Engineering");
INSERT INTO tbl_dir_div VALUES("13","Progress Monitoring and Evaluation");
INSERT INTO tbl_dir_div VALUES("14","Natural Resources Management");
INSERT INTO tbl_dir_div VALUES("15","Fruit crops Research & Development");
INSERT INTO tbl_dir_div VALUES("16","Information and Communication  Centre");



DROP TABLE tbl_dsd;

CREATE TABLE `tbl_dsd` (
  `dsd_id` int(11) NOT NULL,
  `dsd_name` varchar(200) COLLATE utf8_sinhala_ci NOT NULL,
  PRIMARY KEY (`dsd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;

INSERT INTO tbl_dsd VALUES("1","Akurana");
INSERT INTO tbl_dsd VALUES("2","Delthota");
INSERT INTO tbl_dsd VALUES("3","Doluwa");
INSERT INTO tbl_dsd VALUES("4","Ganga Ihala Korale");
INSERT INTO tbl_dsd VALUES("5","Harispattuwa");
INSERT INTO tbl_dsd VALUES("6","Hatharaliyadda");
INSERT INTO tbl_dsd VALUES("7","Kandy");
INSERT INTO tbl_dsd VALUES("8","Kundasale");
INSERT INTO tbl_dsd VALUES("9","Medadumbara");
INSERT INTO tbl_dsd VALUES("10","Minipe");
INSERT INTO tbl_dsd VALUES("11","Panvila");
INSERT INTO tbl_dsd VALUES("12","Pasbage Korale");
INSERT INTO tbl_dsd VALUES("13","Pathadumbara");
INSERT INTO tbl_dsd VALUES("14","Pathahewaheta");
INSERT INTO tbl_dsd VALUES("15","Poojapitiya");
INSERT INTO tbl_dsd VALUES("16","Thumpane");
INSERT INTO tbl_dsd VALUES("17","Udadumbara");
INSERT INTO tbl_dsd VALUES("18","Udapalatha");
INSERT INTO tbl_dsd VALUES("19","Udunuwara");
INSERT INTO tbl_dsd VALUES("20","Yatinuwara");
INSERT INTO tbl_dsd VALUES("21","Ambanganga Korale");
INSERT INTO tbl_dsd VALUES("22","Dambulla");
INSERT INTO tbl_dsd VALUES("23","Galewela");
INSERT INTO tbl_dsd VALUES("24","Laggala-Pallegama");
INSERT INTO tbl_dsd VALUES("25","Matale");
INSERT INTO tbl_dsd VALUES("26","Naula");
INSERT INTO tbl_dsd VALUES("27","Pallepola");
INSERT INTO tbl_dsd VALUES("28","Rattota");
INSERT INTO tbl_dsd VALUES("29","Ukuwela");
INSERT INTO tbl_dsd VALUES("30","Wilgamuwa");
INSERT INTO tbl_dsd VALUES("31","Yatawatta");
INSERT INTO tbl_dsd VALUES("32","Ambagamuwa");
INSERT INTO tbl_dsd VALUES("33","Hanguranketha");
INSERT INTO tbl_dsd VALUES("34","Kothmale");
INSERT INTO tbl_dsd VALUES("35","Nuwara Eliya");
INSERT INTO tbl_dsd VALUES("36","Walapane");
INSERT INTO tbl_dsd VALUES("37","Addalachchenai");
INSERT INTO tbl_dsd VALUES("38","Akkaraipattu");
INSERT INTO tbl_dsd VALUES("39","Alayadiwembu");
INSERT INTO tbl_dsd VALUES("40","Ampara");
INSERT INTO tbl_dsd VALUES("41","Damana");
INSERT INTO tbl_dsd VALUES("42","Dehiattakandiya");
INSERT INTO tbl_dsd VALUES("43","Eragama");
INSERT INTO tbl_dsd VALUES("44","Kalmunai Muslim");
INSERT INTO tbl_dsd VALUES("45","Kalmunai Tamil");
INSERT INTO tbl_dsd VALUES("46","Karaitivu");
INSERT INTO tbl_dsd VALUES("47","Lahugala");
INSERT INTO tbl_dsd VALUES("48","Mahaoya");
INSERT INTO tbl_dsd VALUES("49","Navithanveli");
INSERT INTO tbl_dsd VALUES("50","Ninthavur");
INSERT INTO tbl_dsd VALUES("51","Padiyathalawa");
INSERT INTO tbl_dsd VALUES("52","Pothuvil");
INSERT INTO tbl_dsd VALUES("53","Sainthamarathu");
INSERT INTO tbl_dsd VALUES("54","Samanthurai");
INSERT INTO tbl_dsd VALUES("55","Thirukkovil");
INSERT INTO tbl_dsd VALUES("56","Uhana");
INSERT INTO tbl_dsd VALUES("57","Eravur Pattu");
INSERT INTO tbl_dsd VALUES("58","Eravur Town");
INSERT INTO tbl_dsd VALUES("59","Kattankudy");
INSERT INTO tbl_dsd VALUES("60","Koralai Pattu");
INSERT INTO tbl_dsd VALUES("61","Koralai Pattu Central");
INSERT INTO tbl_dsd VALUES("62","Koralai Pattu North");
INSERT INTO tbl_dsd VALUES("63","Koralai Pattu South");
INSERT INTO tbl_dsd VALUES("64","Koralai Pattu West");
INSERT INTO tbl_dsd VALUES("65","Manmunai North");
INSERT INTO tbl_dsd VALUES("66","Manmunai Pattu");
INSERT INTO tbl_dsd VALUES("67","Manmunai S. and Eruvil Pattu");
INSERT INTO tbl_dsd VALUES("68","Manmunai South West");
INSERT INTO tbl_dsd VALUES("69","Manmunai West");
INSERT INTO tbl_dsd VALUES("70","Porativu Pattu");
INSERT INTO tbl_dsd VALUES("71","Gomarankadawala");
INSERT INTO tbl_dsd VALUES("72","Kantalai");
INSERT INTO tbl_dsd VALUES("73","Kinniya");
INSERT INTO tbl_dsd VALUES("74","Kuchchaveli");
INSERT INTO tbl_dsd VALUES("75","Morawewa");
INSERT INTO tbl_dsd VALUES("76","Muttur");
INSERT INTO tbl_dsd VALUES("77","Padavi Sri Pura");
INSERT INTO tbl_dsd VALUES("78","Seruvila");
INSERT INTO tbl_dsd VALUES("79","Thambalagamuwa");
INSERT INTO tbl_dsd VALUES("80","Trincomalee");
INSERT INTO tbl_dsd VALUES("81","Verugal");
INSERT INTO tbl_dsd VALUES("82","Galnewa");
INSERT INTO tbl_dsd VALUES("83","Galenbindunuwewa");
INSERT INTO tbl_dsd VALUES("84","Horowpothana");
INSERT INTO tbl_dsd VALUES("85","Ipalogama");
INSERT INTO tbl_dsd VALUES("86","Kahatagasdigiliya");
INSERT INTO tbl_dsd VALUES("87","Kebithigollewa");
INSERT INTO tbl_dsd VALUES("88","Kekirawa");
INSERT INTO tbl_dsd VALUES("89","Mahavilachchiya");
INSERT INTO tbl_dsd VALUES("90","Medawachchiya");
INSERT INTO tbl_dsd VALUES("91","Mihinthale");
INSERT INTO tbl_dsd VALUES("92","Nachchadoowa");
INSERT INTO tbl_dsd VALUES("93","Nochchiyagama");
INSERT INTO tbl_dsd VALUES("94","Nuwaragam Palatha Central");
INSERT INTO tbl_dsd VALUES("95","Nuwaragam Palatha East");
INSERT INTO tbl_dsd VALUES("96","Padaviya");
INSERT INTO tbl_dsd VALUES("97","Palagala");
INSERT INTO tbl_dsd VALUES("98","Palugaswewa");
INSERT INTO tbl_dsd VALUES("99","Rajanganaya");
INSERT INTO tbl_dsd VALUES("100","Rambewa");
INSERT INTO tbl_dsd VALUES("101","Thalawa");
INSERT INTO tbl_dsd VALUES("102","Thambuttegama");
INSERT INTO tbl_dsd VALUES("103","Thirappane");
INSERT INTO tbl_dsd VALUES("104","Dimbulagala");
INSERT INTO tbl_dsd VALUES("105","Elahera");
INSERT INTO tbl_dsd VALUES("106","Hingurakgoda");
INSERT INTO tbl_dsd VALUES("107","Lankapura");
INSERT INTO tbl_dsd VALUES("108","Medirigiriya");
INSERT INTO tbl_dsd VALUES("109","Thamankaduwa");
INSERT INTO tbl_dsd VALUES("110","Welikanda");
INSERT INTO tbl_dsd VALUES("111","Delft");
INSERT INTO tbl_dsd VALUES("112","Island North");
INSERT INTO tbl_dsd VALUES("113","Island South");
INSERT INTO tbl_dsd VALUES("114","Jaffna");
INSERT INTO tbl_dsd VALUES("115","Karainagar");
INSERT INTO tbl_dsd VALUES("116","Nallur");
INSERT INTO tbl_dsd VALUES("117","Thenmaradchi");
INSERT INTO tbl_dsd VALUES("118","Vadamaradchi East");
INSERT INTO tbl_dsd VALUES("119","Vadamaradchi North");
INSERT INTO tbl_dsd VALUES("120","Vadamaradchi South-West");
INSERT INTO tbl_dsd VALUES("121","Valikamam East");
INSERT INTO tbl_dsd VALUES("122","Valikamam North");
INSERT INTO tbl_dsd VALUES("123","Valikamam South");
INSERT INTO tbl_dsd VALUES("124","Valikamam South-West");
INSERT INTO tbl_dsd VALUES("125","Valikamam West");
INSERT INTO tbl_dsd VALUES("126","Kandavalai");
INSERT INTO tbl_dsd VALUES("127","Karachchi");
INSERT INTO tbl_dsd VALUES("128","Pachchilaipalli");
INSERT INTO tbl_dsd VALUES("129","Poonakary");
INSERT INTO tbl_dsd VALUES("130","Madhu");
INSERT INTO tbl_dsd VALUES("131","Mannar");
INSERT INTO tbl_dsd VALUES("132","Manthai West");
INSERT INTO tbl_dsd VALUES("133","Musalai");
INSERT INTO tbl_dsd VALUES("134","Nanaddan");
INSERT INTO tbl_dsd VALUES("135","Manthai East");
INSERT INTO tbl_dsd VALUES("136","Maritimepattu");
INSERT INTO tbl_dsd VALUES("137","Oddusuddan");
INSERT INTO tbl_dsd VALUES("138","Puthukudiyiruppu");
INSERT INTO tbl_dsd VALUES("139","Thunukkai");
INSERT INTO tbl_dsd VALUES("140","Welioya");
INSERT INTO tbl_dsd VALUES("141","Vavuniya");
INSERT INTO tbl_dsd VALUES("142","Vavuniya North");
INSERT INTO tbl_dsd VALUES("143","Vavuniya South");
INSERT INTO tbl_dsd VALUES("144","Vengalacheddikulam");
INSERT INTO tbl_dsd VALUES("145","Alawwa");
INSERT INTO tbl_dsd VALUES("146","Ambanpola");
INSERT INTO tbl_dsd VALUES("147","Bamunakotuwa");
INSERT INTO tbl_dsd VALUES("148","Bingiriya");
INSERT INTO tbl_dsd VALUES("149","Ehetuwewa");
INSERT INTO tbl_dsd VALUES("150","Galgamuwa");
INSERT INTO tbl_dsd VALUES("151","Ganewatta");
INSERT INTO tbl_dsd VALUES("152","Giribawa");
INSERT INTO tbl_dsd VALUES("153","Ibbagamuwa");
INSERT INTO tbl_dsd VALUES("154","Katupotha");
INSERT INTO tbl_dsd VALUES("155","Kobeigane");
INSERT INTO tbl_dsd VALUES("156","Kotavehera");
INSERT INTO tbl_dsd VALUES("157","Kuliyapitiya East");
INSERT INTO tbl_dsd VALUES("158","Kuliyapitiya West");
INSERT INTO tbl_dsd VALUES("159","Kurunegala");
INSERT INTO tbl_dsd VALUES("160","Mahawa");
INSERT INTO tbl_dsd VALUES("161","Mallawapitiya");
INSERT INTO tbl_dsd VALUES("162","Maspotha");
INSERT INTO tbl_dsd VALUES("163","Mawathagama");
INSERT INTO tbl_dsd VALUES("164","Narammala");
INSERT INTO tbl_dsd VALUES("165","Nikaweratiya");
INSERT INTO tbl_dsd VALUES("166","Panduwasnuwara");
INSERT INTO tbl_dsd VALUES("167","Pannala");
INSERT INTO tbl_dsd VALUES("168","Polgahawela");
INSERT INTO tbl_dsd VALUES("169","Polpithigama");
INSERT INTO tbl_dsd VALUES("170","Rasnayakapura");
INSERT INTO tbl_dsd VALUES("171","Rideegama");
INSERT INTO tbl_dsd VALUES("172","Udubaddawa");
INSERT INTO tbl_dsd VALUES("173","Wariyapola");
INSERT INTO tbl_dsd VALUES("174","Weerambugedara");
INSERT INTO tbl_dsd VALUES("175","Anamaduwa");
INSERT INTO tbl_dsd VALUES("176","Arachchikattuwa");
INSERT INTO tbl_dsd VALUES("177","Chilaw");
INSERT INTO tbl_dsd VALUES("178","Dankotuwa");
INSERT INTO tbl_dsd VALUES("179","Kalpitiya");
INSERT INTO tbl_dsd VALUES("180","Karuwalagaswewa");
INSERT INTO tbl_dsd VALUES("181","Madampe");
INSERT INTO tbl_dsd VALUES("182","Mahakumbukkadawala");
INSERT INTO tbl_dsd VALUES("183","Mahawewa");
INSERT INTO tbl_dsd VALUES("184","Mundalama");
INSERT INTO tbl_dsd VALUES("185","Nattandiya");
INSERT INTO tbl_dsd VALUES("186","Nawagattegama");
INSERT INTO tbl_dsd VALUES("187","Pallama");
INSERT INTO tbl_dsd VALUES("188","Puttalam");
INSERT INTO tbl_dsd VALUES("189","Vanathavilluwa");
INSERT INTO tbl_dsd VALUES("190","Wennappuwa");
INSERT INTO tbl_dsd VALUES("191","Aranayaka");
INSERT INTO tbl_dsd VALUES("192","Bulathkohupitiya");
INSERT INTO tbl_dsd VALUES("193","Dehiovita");
INSERT INTO tbl_dsd VALUES("194","Deraniyagala");
INSERT INTO tbl_dsd VALUES("195","Galigamuwa");
INSERT INTO tbl_dsd VALUES("196","Kegalle");
INSERT INTO tbl_dsd VALUES("197","Mawanella");
INSERT INTO tbl_dsd VALUES("198","Rambukkana");
INSERT INTO tbl_dsd VALUES("199","Ruwanwella");
INSERT INTO tbl_dsd VALUES("200","Warakapola");
INSERT INTO tbl_dsd VALUES("201","Yatiyanthota");
INSERT INTO tbl_dsd VALUES("202","Ayagama");
INSERT INTO tbl_dsd VALUES("203","Balangoda");
INSERT INTO tbl_dsd VALUES("204","Eheliyagoda");
INSERT INTO tbl_dsd VALUES("205","Elapattha");
INSERT INTO tbl_dsd VALUES("206","Embilipitiya");
INSERT INTO tbl_dsd VALUES("207","Godakawela");
INSERT INTO tbl_dsd VALUES("208","Imbulpe");
INSERT INTO tbl_dsd VALUES("209","Kahawatta");
INSERT INTO tbl_dsd VALUES("210","Kalawana");
INSERT INTO tbl_dsd VALUES("211","Kiriella");
INSERT INTO tbl_dsd VALUES("212","Kolonna");
INSERT INTO tbl_dsd VALUES("213","Kuruvita");
INSERT INTO tbl_dsd VALUES("214","Nivithigala");
INSERT INTO tbl_dsd VALUES("215","Opanayaka");
INSERT INTO tbl_dsd VALUES("216","Pelmadulla");
INSERT INTO tbl_dsd VALUES("217","Ratnapura");
INSERT INTO tbl_dsd VALUES("218","Weligepola");
INSERT INTO tbl_dsd VALUES("219","Akmeemana");
INSERT INTO tbl_dsd VALUES("220","Ambalangoda");
INSERT INTO tbl_dsd VALUES("221","Baddegama");
INSERT INTO tbl_dsd VALUES("222","Balapitiya");
INSERT INTO tbl_dsd VALUES("223","Benthota");
INSERT INTO tbl_dsd VALUES("224","Bope-Poddala");
INSERT INTO tbl_dsd VALUES("225","Elpitiya");
INSERT INTO tbl_dsd VALUES("226","Galle");
INSERT INTO tbl_dsd VALUES("227","Gonapinuwala");
INSERT INTO tbl_dsd VALUES("228","Habaraduwa");
INSERT INTO tbl_dsd VALUES("229","Hikkaduwa");
INSERT INTO tbl_dsd VALUES("230","Imaduwa");
INSERT INTO tbl_dsd VALUES("231","Karandeniya");
INSERT INTO tbl_dsd VALUES("232","Nagoda");
INSERT INTO tbl_dsd VALUES("233","Neluwa");
INSERT INTO tbl_dsd VALUES("234","Niyagama");
INSERT INTO tbl_dsd VALUES("235","Thawalama");
INSERT INTO tbl_dsd VALUES("236","Welivitiya-Divithura");
INSERT INTO tbl_dsd VALUES("237","Yakkalamulla");
INSERT INTO tbl_dsd VALUES("238","Ambalantota");
INSERT INTO tbl_dsd VALUES("239","Angunakolapelessa");
INSERT INTO tbl_dsd VALUES("240","Beliatta");
INSERT INTO tbl_dsd VALUES("241","Hambantota");
INSERT INTO tbl_dsd VALUES("242","Katuwana");
INSERT INTO tbl_dsd VALUES("243","Lunugamvehera");
INSERT INTO tbl_dsd VALUES("244","Okewela");
INSERT INTO tbl_dsd VALUES("245","Sooriyawewa");
INSERT INTO tbl_dsd VALUES("246","Tangalle");
INSERT INTO tbl_dsd VALUES("247","Thissamaharama");
INSERT INTO tbl_dsd VALUES("248","Walasmulla");
INSERT INTO tbl_dsd VALUES("249","Weeraketiya");
INSERT INTO tbl_dsd VALUES("250","Akuressa");
INSERT INTO tbl_dsd VALUES("251","Athuraliya");
INSERT INTO tbl_dsd VALUES("252","Devinuwara");
INSERT INTO tbl_dsd VALUES("253","Dickwella");
INSERT INTO tbl_dsd VALUES("254","Hakmana");
INSERT INTO tbl_dsd VALUES("255","Kamburupitiya");
INSERT INTO tbl_dsd VALUES("256","Kirinda Puhulwella");
INSERT INTO tbl_dsd VALUES("257","Kotapola");
INSERT INTO tbl_dsd VALUES("258","Malimbada");
INSERT INTO tbl_dsd VALUES("259","Matara");
INSERT INTO tbl_dsd VALUES("260","Mulatiyana");
INSERT INTO tbl_dsd VALUES("261","Pasgoda");
INSERT INTO tbl_dsd VALUES("262","Pitabeddara");
INSERT INTO tbl_dsd VALUES("263","Thihagoda");
INSERT INTO tbl_dsd VALUES("264","Weligama");
INSERT INTO tbl_dsd VALUES("265","Welipitiya");
INSERT INTO tbl_dsd VALUES("266","Badulla");
INSERT INTO tbl_dsd VALUES("267","Bandarawela");
INSERT INTO tbl_dsd VALUES("268","Ella");
INSERT INTO tbl_dsd VALUES("269","Haldummulla");
INSERT INTO tbl_dsd VALUES("270","Hali-Ela");
INSERT INTO tbl_dsd VALUES("271","Haputale");
INSERT INTO tbl_dsd VALUES("272","Kandaketiya");
INSERT INTO tbl_dsd VALUES("273","Lunugala");
INSERT INTO tbl_dsd VALUES("274","Mahiyanganaya");
INSERT INTO tbl_dsd VALUES("275","Meegahakivula");
INSERT INTO tbl_dsd VALUES("276","Passara");
INSERT INTO tbl_dsd VALUES("277","Rideemaliyadda");
INSERT INTO tbl_dsd VALUES("278","Soranathota");
INSERT INTO tbl_dsd VALUES("279","Uva-Paranagama");
INSERT INTO tbl_dsd VALUES("280","Welimada");
INSERT INTO tbl_dsd VALUES("281","Badalkumbura");
INSERT INTO tbl_dsd VALUES("282","Bibile");
INSERT INTO tbl_dsd VALUES("283","Buttala");
INSERT INTO tbl_dsd VALUES("284","Katharagama");
INSERT INTO tbl_dsd VALUES("285","Madulla");
INSERT INTO tbl_dsd VALUES("286","Medagama");
INSERT INTO tbl_dsd VALUES("287","Moneragala");
INSERT INTO tbl_dsd VALUES("288","Sevanagala");
INSERT INTO tbl_dsd VALUES("289","Siyambalanduwa");
INSERT INTO tbl_dsd VALUES("290","Thanamalvila");
INSERT INTO tbl_dsd VALUES("291","Wellawaya");
INSERT INTO tbl_dsd VALUES("292","Colombo");
INSERT INTO tbl_dsd VALUES("293","Dehiwala");
INSERT INTO tbl_dsd VALUES("294","Homagama");
INSERT INTO tbl_dsd VALUES("295","Kaduwela");
INSERT INTO tbl_dsd VALUES("296","Kesbewa");
INSERT INTO tbl_dsd VALUES("297","Kolonnawa");
INSERT INTO tbl_dsd VALUES("298","Kotte");
INSERT INTO tbl_dsd VALUES("299","Maharagama");
INSERT INTO tbl_dsd VALUES("300","Moratuwa");
INSERT INTO tbl_dsd VALUES("301","Padukka");
INSERT INTO tbl_dsd VALUES("302","Ratmalana");
INSERT INTO tbl_dsd VALUES("303","Seethawaka");
INSERT INTO tbl_dsd VALUES("304","Thimbirigasyaya");
INSERT INTO tbl_dsd VALUES("305","Attanagalla");
INSERT INTO tbl_dsd VALUES("306","Biyagama");
INSERT INTO tbl_dsd VALUES("307","Divulapitiya");
INSERT INTO tbl_dsd VALUES("308","Dompe");
INSERT INTO tbl_dsd VALUES("309","Gampaha");
INSERT INTO tbl_dsd VALUES("310","Ja-Ela");
INSERT INTO tbl_dsd VALUES("311","Katana");
INSERT INTO tbl_dsd VALUES("312","Kelaniya");
INSERT INTO tbl_dsd VALUES("313","Mahara");
INSERT INTO tbl_dsd VALUES("314","Minuwangoda");
INSERT INTO tbl_dsd VALUES("315","Mirigama");
INSERT INTO tbl_dsd VALUES("316","Negombo");
INSERT INTO tbl_dsd VALUES("317","Wattala");
INSERT INTO tbl_dsd VALUES("318","Agalawatta");
INSERT INTO tbl_dsd VALUES("319","Bandaragama");
INSERT INTO tbl_dsd VALUES("320","Beruwala");
INSERT INTO tbl_dsd VALUES("321","Bulathsinhala");
INSERT INTO tbl_dsd VALUES("322","Dodangoda");
INSERT INTO tbl_dsd VALUES("323","Horana");
INSERT INTO tbl_dsd VALUES("324","Ingiriya");
INSERT INTO tbl_dsd VALUES("325","Kalutara");
INSERT INTO tbl_dsd VALUES("326","Madurawela");
INSERT INTO tbl_dsd VALUES("327","Mathugama");
INSERT INTO tbl_dsd VALUES("328","Millaniya");
INSERT INTO tbl_dsd VALUES("329","Palindanuwara");
INSERT INTO tbl_dsd VALUES("330","Panadura");
INSERT INTO tbl_dsd VALUES("331","Walallavita");



DROP TABLE tbl_employee;

CREATE TABLE `tbl_employee` (
  `emp_id` bigint(20) NOT NULL,
  `emp_nic` varchar(12) COLLATE utf8_sinhala_ci NOT NULL,
  `quart_type` int(11) NOT NULL,
  `emp_title` varchar(10) COLLATE utf8_sinhala_ci NOT NULL,
  `emp_name` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `emp_initials` varchar(150) COLLATE utf8_sinhala_ci NOT NULL,
  `emp_post` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `emp_service` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `emp_grade` varchar(8) COLLATE utf8_sinhala_ci NOT NULL,
  `dir_div_id` varchar(100) COLLATE utf8_sinhala_ci NOT NULL,
  `unit_id` varchar(250) COLLATE utf8_sinhala_ci NOT NULL,
  `emp_job_status` tinyint(1) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_gender` tinyint(1) NOT NULL,
  `emp_marital_status` tinyint(1) NOT NULL,
  `emp_address` varchar(200) COLLATE utf8_sinhala_ci NOT NULL,
  `emp_resi_nature` int(2) NOT NULL,
  `emp_resi_10km` tinyint(1) NOT NULL,
  `dsd_id` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `gnd_id` varchar(100) COLLATE utf8_sinhala_ci NOT NULL,
  `emp_diffi_service_year` varchar(11) COLLATE utf8_sinhala_ci DEFAULT NULL,
  `emp_salary_code` varchar(10) COLLATE utf8_sinhala_ci NOT NULL,
  `emp_salary_scale` int(11) NOT NULL,
  `spouse_name` varchar(50) COLLATE utf8_sinhala_ci DEFAULT NULL,
  `spou_occup` varchar(100) COLLATE utf8_sinhala_ci DEFAULT NULL,
  `spouse_office` varchar(100) COLLATE utf8_sinhala_ci DEFAULT NULL,
  `spose_office_address` varchar(200) COLLATE utf8_sinhala_ci DEFAULT NULL,
  `spouse_salary_code` varchar(10) COLLATE utf8_sinhala_ci DEFAULT NULL,
  `spouse_quarter_entitle` tinyint(1) DEFAULT NULL,
  `spoquart_usage` varchar(50) COLLATE utf8_sinhala_ci DEFAULT NULL,
  `emp_quarter_usage` int(11) NOT NULL,
  `emp_home_phone` int(11) DEFAULT NULL,
  `emp_mobile` int(11) DEFAULT NULL,
  `emp_email` varchar(50) COLLATE utf8_sinhala_ci DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;




DROP TABLE tbl_gnd;

CREATE TABLE `tbl_gnd` (
  `gnd_id` int(11) NOT NULL AUTO_INCREMENT,
  `gnd_name` varchar(50) COLLATE utf8_sinhala_ci NOT NULL,
  `dsd_id` int(11) NOT NULL,
  PRIMARY KEY (`gnd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;




DROP TABLE tbl_post;

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(100) COLLATE utf8_sinhala_ci NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;

INSERT INTO tbl_post VALUES("1","Director General of Agriculture");
INSERT INTO tbl_post VALUES("2","Addltional Director General of Agriculture (Research)");
INSERT INTO tbl_post VALUES("3","Addltional Director General of Agriculture (Development)");
INSERT INTO tbl_post VALUES("4","Addltional Director General (Administration)");
INSERT INTO tbl_post VALUES("5","Director");
INSERT INTO tbl_post VALUES("6","Director (Administration)");
INSERT INTO tbl_post VALUES("7","Director (Establishment)");
INSERT INTO tbl_post VALUES("8","Chief Accountant");
INSERT INTO tbl_post VALUES("9","Chief Engineer");
INSERT INTO tbl_post VALUES("10","Chief Internal Auditor");
INSERT INTO tbl_post VALUES("11","Registrar of Pesticides");
INSERT INTO tbl_post VALUES("12","Principal Agriculture Scientist ");
INSERT INTO tbl_post VALUES("13","Principal Agriculturist");
INSERT INTO tbl_post VALUES("14","Additional Director");
INSERT INTO tbl_post VALUES("15","Accountant (S.L.Ac.S. Class I)");
INSERT INTO tbl_post VALUES("16","Engineer (civil/Electrical/Mechanic)");
INSERT INTO tbl_post VALUES("17","Engineer (Mechanic Research)");
INSERT INTO tbl_post VALUES("18","Assistant Director/Deputy Director(Establishment)");
INSERT INTO tbl_post VALUES("19","Assistant Director/Deputy Director(Administration)");
INSERT INTO tbl_post VALUES("20","Deputy Director");
INSERT INTO tbl_post VALUES("21","Deputy Registrar of Pesticides");
INSERT INTO tbl_post VALUES("22","Assistant Director of Agriculture ( Agricultural Development)");
INSERT INTO tbl_post VALUES("23","Assistant Director of Agriculture ( Agricultural Research)");
INSERT INTO tbl_post VALUES("24","Assistant Director of Agriculture ( Agricultural Economic)");
INSERT INTO tbl_post VALUES("25","Accountant (SLAcS II/III)");
INSERT INTO tbl_post VALUES("26","Engineer(Civil )");
INSERT INTO tbl_post VALUES("27","Engineer(mechanic )");
INSERT INTO tbl_post VALUES("28","Engineer(Electrical)");
INSERT INTO tbl_post VALUES("29","Legal Officer");
INSERT INTO tbl_post VALUES("30","Assistant Director ( Information & communication Technology   )");
INSERT INTO tbl_post VALUES("31","Lecturer (Tamil Medium) -contract");
INSERT INTO tbl_post VALUES("32","Lecturer (English Medium) -contract");
INSERT INTO tbl_post VALUES("33","Administrative  Officer");
INSERT INTO tbl_post VALUES("34","Senior Librarian");
INSERT INTO tbl_post VALUES("35","Agriculture Instructor (Special)");
INSERT INTO tbl_post VALUES("36","Research Assistant (Special)");
INSERT INTO tbl_post VALUES("37","Economic Assistant");
INSERT INTO tbl_post VALUES("38","Translator(English/Tamil)");
INSERT INTO tbl_post VALUES("39","Information and Technology Officer");
INSERT INTO tbl_post VALUES("40","Agriculture Monitoring Officer");
INSERT INTO tbl_post VALUES("41","Programme Assistant( Agriculture)");
INSERT INTO tbl_post VALUES("42","Media Assistant");
INSERT INTO tbl_post VALUES("43","Audio Visual Assistant");
INSERT INTO tbl_post VALUES("44","Development Officer");
INSERT INTO tbl_post VALUES("45","Librarian (I/II/III)");
INSERT INTO tbl_post VALUES("46","Soil Surveyor");
INSERT INTO tbl_post VALUES("47","Agriculture Instructor");
INSERT INTO tbl_post VALUES("48","Research Assistant");
INSERT INTO tbl_post VALUES("49","Engineer Assistant (civil)");
INSERT INTO tbl_post VALUES("50","Engineer Assistant (Machinery)");
INSERT INTO tbl_post VALUES("51","Engineer Assistant (Electrical)");
INSERT INTO tbl_post VALUES("52","Technical Officer (FMTC)");
INSERT INTO tbl_post VALUES("53","Public Management Assistant");
INSERT INTO tbl_post VALUES("54","Technical Assistant (Extention)");
INSERT INTO tbl_post VALUES("55","Technical Assistant (Research)");
INSERT INTO tbl_post VALUES("56","Technical Assistant (Engineering-Civil)");
INSERT INTO tbl_post VALUES("57","Technical Assistant (Engineering Mechinery)");
INSERT INTO tbl_post VALUES("58","Technical Assistant (Engineering Electrical)");
INSERT INTO tbl_post VALUES("59","Information and Technology Assistant");
INSERT INTO tbl_post VALUES("60","Audio Visual Technician");
INSERT INTO tbl_post VALUES("61","Foreman");
INSERT INTO tbl_post VALUES("62","Agriculture Extension Officer");
INSERT INTO tbl_post VALUES("63","Photographer");
INSERT INTO tbl_post VALUES("64","Bee Demonstrator");
INSERT INTO tbl_post VALUES("65","Farm Clerk");
INSERT INTO tbl_post VALUES("66","Male Warden");
INSERT INTO tbl_post VALUES("67","Female Warden");
INSERT INTO tbl_post VALUES("68","Seed Technician");
INSERT INTO tbl_post VALUES("69","Artist");
INSERT INTO tbl_post VALUES("70","Driver");
INSERT INTO tbl_post VALUES("71","Cinema Operator");
INSERT INTO tbl_post VALUES("72","Tractor Operator");
INSERT INTO tbl_post VALUES("73","Storeman");
INSERT INTO tbl_post VALUES("74","Plant Yard Attendant");
INSERT INTO tbl_post VALUES("75","Mechanic");
INSERT INTO tbl_post VALUES("76","Machinist");
INSERT INTO tbl_post VALUES("77","Carpenter");
INSERT INTO tbl_post VALUES("78","Mason");
INSERT INTO tbl_post VALUES("79","Electrician");
INSERT INTO tbl_post VALUES("80","Machine Minder");
INSERT INTO tbl_post VALUES("81","Video Editor");
INSERT INTO tbl_post VALUES("82","Audio Recorder");
INSERT INTO tbl_post VALUES("83","Technician");
INSERT INTO tbl_post VALUES("84","Video Lighting/Electrical Assistant");
INSERT INTO tbl_post VALUES("85","Compositor");
INSERT INTO tbl_post VALUES("86","Research Sub Assistant");
INSERT INTO tbl_post VALUES("87","Book Binder (Press)");
INSERT INTO tbl_post VALUES("88","Bee Keeper");
INSERT INTO tbl_post VALUES("89","Budder");
INSERT INTO tbl_post VALUES("90","Steward");
INSERT INTO tbl_post VALUES("91","Cook");
INSERT INTO tbl_post VALUES("92","Seed Man");
INSERT INTO tbl_post VALUES("93","Circuit  Bungalow Keeper");
INSERT INTO tbl_post VALUES("94","Lorry Cleaner");
INSERT INTO tbl_post VALUES("95","Office Employee Service");
INSERT INTO tbl_post VALUES("96","Video Lighting/Electrical Assistant");
INSERT INTO tbl_post VALUES("97","video Editing Assistant/video Assitant/Demonstration Assistant");
INSERT INTO tbl_post VALUES("98","Waiter");
INSERT INTO tbl_post VALUES("99","Watcher");
INSERT INTO tbl_post VALUES("100"," Labourer");
INSERT INTO tbl_post VALUES("101"," Labourer(According to 25/2014 circular)");
INSERT INTO tbl_post VALUES("102","Sanitary Labourer");
INSERT INTO tbl_post VALUES("103","Contract Labourer ");



DROP TABLE tbl_qualification;

CREATE TABLE `tbl_qualification` (
  `emp_id` bigint(20) NOT NULL,
  `no_child` int(11) NOT NULL,
  `no_child_marks` float NOT NULL,
  `no_dischild` int(11) NOT NULL,
  `no_dischild_marks` float NOT NULL,
  `distance_km` float NOT NULL,
  `distance_marks` float NOT NULL,
  `rent_resi_marks` float NOT NULL,
  `dif_walk` float NOT NULL,
  `no_work_spouse` float NOT NULL,
  `serv_req` float NOT NULL,
  `added_date` date NOT NULL,
  `total_marks` float NOT NULL,
  `true_detals` tinyint(1) NOT NULL,
  `quarter_assignable` tinyint(1) NOT NULL,
  `spouse_listed` tinyint(1) NOT NULL,
  `home_loan` tinyint(1) NOT NULL,
  `have_house` tinyint(1) NOT NULL,
  `emp_listed` tinyint(1) NOT NULL,
  `quart_assigned` tinyint(1) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;




DROP TABLE tbl_quarters;

CREATE TABLE `tbl_quarters` (
  `quarter_id` int(3) NOT NULL,
  `quarter_nature` int(1) NOT NULL,
  `quarter_address` varchar(200) CHARACTER SET utf32 COLLATE utf32_sinhala_ci NOT NULL,
  `quarter_phone` int(10) DEFAULT NULL,
  `quarter_area` int(8) NOT NULL,
  `quarter_rent` float NOT NULL,
  PRIMARY KEY (`quarter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;

INSERT INTO tbl_quarters VALUES("1","1","No. 1092, Sirimawo Bandaranayake Mawatha, Peradeniya","","2700","10");
INSERT INTO tbl_quarters VALUES("2","2","No.17 B, Old Galaha Road, Peradeniya","","2650","12.5");
INSERT INTO tbl_quarters VALUES("3","2","No.19 B, Sarasavi Mawatha, Peradeniya","","2650","12.5");
INSERT INTO tbl_quarters VALUES("4","1","No.2 A, Sarasavi Mawatha, Peradeniya","","2650","10");
INSERT INTO tbl_quarters VALUES("5","1","No.32,Old Galaha Road, Peradeniya ","","3092","5");
INSERT INTO tbl_quarters VALUES("6","1","No.28,Old Galaha Road, Peradeniya ","","2748","10");
INSERT INTO tbl_quarters VALUES("7","1","No.03, Sarasavi Mawatha, Peradeniya","","3614","12.5");
INSERT INTO tbl_quarters VALUES("8","1","No.04, Sarasavi Mawatha, Peradeniya","","5300","0");
INSERT INTO tbl_quarters VALUES("9","1","No.06, Sarasavi Mawatha, Peradeniya","","5300","10");
INSERT INTO tbl_quarters VALUES("10","1","No.07, Sarasavi Mawatha, Peradeniya","","2042","10");
INSERT INTO tbl_quarters VALUES("11","2","No.11/4, Sarasavi Mawatha, Peradeniya","","1859","12.5");
INSERT INTO tbl_quarters VALUES("12","2","No.11/2, Sarasavi Mawatha, Peradeniya","","1727","12.5");
INSERT INTO tbl_quarters VALUES("20","1","No.5/7, Sarasavi Mawatha, Peradeniya ","","1806","10");
INSERT INTO tbl_quarters VALUES("21","2","No.539/1,  Gannoruwa Road, Peradeniya","","1571","12.5");
INSERT INTO tbl_quarters VALUES("22","2","No.7/1 A, Sarasavi Mawatha, Peradeniya ","","1590","10");
INSERT INTO tbl_quarters VALUES("23","2","No.3 D, Gannoruwa Road, Peradeniya","","1571","12.5");
INSERT INTO tbl_quarters VALUES("24","1","No.12/5, Sarasavi Mawatha, Peradeniya","","1480","10");
INSERT INTO tbl_quarters VALUES("25","1","No.11/5, Sarasavi Mawatha, Peradeniya","","1454","10");
INSERT INTO tbl_quarters VALUES("26","1","No.7/9 A, Sarasavi Mawatha, Peradeniya ","","1524","10");
INSERT INTO tbl_quarters VALUES("27","3","No.11/1, Sarasavi Mawatha, Peradeniya","","1524","12.5");
INSERT INTO tbl_quarters VALUES("58","3","No.2 B 2, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("59","3","No.3 A 3, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("60","3","No.3 B 3, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("61","3","No.4 A 4, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("62","3","No.4 B 4, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("63","3","No.5 A 5, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("64","3","No.5 B 5, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("65","5","No.6 B 6, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("66","3","No.7 A 7, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("67","3","No.7 B 7, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("68","3","No.8 A 8, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("69","3","No.8 B 8, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("70","3","No.9 A 9, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("71","3","No.9 B 9, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("72","3","No.10 A 10, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("73","3","No.10 B 10, Gannoruwa Road, Peradeniya","","1069","12.5");
INSERT INTO tbl_quarters VALUES("74","1","No.5/5,Sarasavi Mawatha,Peradeniya","","1165","10");
INSERT INTO tbl_quarters VALUES("76","4","No.9/3 A, Sarasavi Mawatha, Peradeniya ","","650","12.5");
INSERT INTO tbl_quarters VALUES("77","1","No.9/3 B, Sarasavi Mawatha, Peradeniya ","","650","10");
INSERT INTO tbl_quarters VALUES("78","4","No.10/5, Sarasavi Mawatha, Peradeniya ","","504","12.5");
INSERT INTO tbl_quarters VALUES("79","1","No.8/5 A, Sarasavi Mawatha, Peradeniya ","","504","12.5");
INSERT INTO tbl_quarters VALUES("80","4","No.8/5 B, Sarasavi Mawatha, Peradeniya ","","504","12.5");
INSERT INTO tbl_quarters VALUES("81","4","No.10/5 A, Sarasavi Mawatha, Peradeniya","","504","12.5");
INSERT INTO tbl_quarters VALUES("82","0","No.19 A, Sarasavi Mawatha, Peradeniya","","0","0");
INSERT INTO tbl_quarters VALUES("83","0","No.1/1, New Galaha Road, Peradeniya","","6565","0");
INSERT INTO tbl_quarters VALUES("84","1","No.09, Sarasavi Mawatha, Peradeniya","","2623","10");
INSERT INTO tbl_quarters VALUES("85","0","No.7/1, Sarasavi Mawatha, Peradeniya","","2731","12.5");
INSERT INTO tbl_quarters VALUES("86","2","No.7/2 ,Sarasavi Mawatha, Peradeniya","","1727","12.5");



DROP TABLE tbl_quarters_assigned;

CREATE TABLE `tbl_quarters_assigned` (
  `quarter_assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `quarter_id` int(11) NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  `quart_assin_from` date NOT NULL,
  `quart_assin_to` date NOT NULL,
  `quart_assign_remark` varchar(200) COLLATE utf8_sinhala_ci DEFAULT NULL,
  PRIMARY KEY (`quarter_assign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;




DROP TABLE tbl_salary;

CREATE TABLE `tbl_salary` (
  `sal_code` varchar(10) COLLATE utf8_sinhala_ci NOT NULL,
  PRIMARY KEY (`sal_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;

INSERT INTO tbl_salary VALUES("MN - 1");
INSERT INTO tbl_salary VALUES("MN - 2");
INSERT INTO tbl_salary VALUES("MN - 3");
INSERT INTO tbl_salary VALUES("MN - 4");
INSERT INTO tbl_salary VALUES("MN - 5");
INSERT INTO tbl_salary VALUES("MN - 6");
INSERT INTO tbl_salary VALUES("MN - 7");
INSERT INTO tbl_salary VALUES("MT-1");
INSERT INTO tbl_salary VALUES("PL-1");
INSERT INTO tbl_salary VALUES("PL-2");
INSERT INTO tbl_salary VALUES("PL-3");
INSERT INTO tbl_salary VALUES("SL - 01");
INSERT INTO tbl_salary VALUES("SL - 02");
INSERT INTO tbl_salary VALUES("SL - 03");



DROP TABLE tbl_service;

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(100) COLLATE utf8_sinhala_ci NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;

INSERT INTO tbl_service VALUES("1","Office Employee Service\n");
INSERT INTO tbl_service VALUES("2","Combined Driver Service\n");
INSERT INTO tbl_service VALUES("3","Sri Lanka Information & Communication Technology Services\n");
INSERT INTO tbl_service VALUES("4","Public Management Assistant Service\n");
INSERT INTO tbl_service VALUES("5","Sri Lanka Library Service\n");
INSERT INTO tbl_service VALUES("6","Sri Lanka Technical Service\n");
INSERT INTO tbl_service VALUES("7","Public Management Assistant Service - Supra\n");
INSERT INTO tbl_service VALUES("8","SLTS\n");
INSERT INTO tbl_service VALUES("9","Departmental Primary Level Services\n");
INSERT INTO tbl_service VALUES("10","Sri Lanka Administrative Service\n");
INSERT INTO tbl_service VALUES("11","Sri Lanka Agricultural Service\n");
INSERT INTO tbl_service VALUES("12","Sri Lanka Accountants Service\n");
INSERT INTO tbl_service VALUES("13","Sri Lanka Engineering Service\n");
INSERT INTO tbl_service VALUES("14","Departmental Secondary Level Services");
INSERT INTO tbl_service VALUES("15","Departmental Graduate Services");
INSERT INTO tbl_service VALUES("16","Translator Service");



DROP TABLE tbl_unit;

CREATE TABLE `tbl_unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(200) COLLATE utf8_sinhala_ci NOT NULL,
  `dir_div_id` int(11) NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_sinhala_ci;

INSERT INTO tbl_unit VALUES("1","Director General Office","1");
INSERT INTO tbl_unit VALUES("2","Office Of the Additional Director Genaral Of Agriculture (Research ), Peradeniya","1");
INSERT INTO tbl_unit VALUES("3","Office Of the Additional Director Genaral Of Agriculture (Development ), Peradeniya","1");
INSERT INTO tbl_unit VALUES("4","Office of the Additional Director General (Administration)","2");
INSERT INTO tbl_unit VALUES("5","Ad - 01 Branch","2");
INSERT INTO tbl_unit VALUES("6","Ad - 02 Branch","2");
INSERT INTO tbl_unit VALUES("7","Ad - 03 Branch","2");
INSERT INTO tbl_unit VALUES("8","Ad - 04 Branch","2");
INSERT INTO tbl_unit VALUES("9","Ad - 05 (Post) Branch","2");
INSERT INTO tbl_unit VALUES("10","Ad - 06 Branch","2");
INSERT INTO tbl_unit VALUES("11","Ad - 07 (Welfare) Branch","2");
INSERT INTO tbl_unit VALUES("12","Es - 01 Branch","2");
INSERT INTO tbl_unit VALUES("13","Es - 02 Branch","2");
INSERT INTO tbl_unit VALUES("14","Es - 03 Branch","2");
INSERT INTO tbl_unit VALUES("15","Es - 04 Branch","2");
INSERT INTO tbl_unit VALUES("16","Es - 05 Branch","2");
INSERT INTO tbl_unit VALUES("17","Es - 06 Branch","2");
INSERT INTO tbl_unit VALUES("18","Es - 07 Branch","2");
INSERT INTO tbl_unit VALUES("19","Es - 08 Branch","2");
INSERT INTO tbl_unit VALUES("20","Es - 09 Branch","2");
INSERT INTO tbl_unit VALUES("21","Es - 10 Branch","2");
INSERT INTO tbl_unit VALUES("22","Chief Accountant Office","3");
INSERT INTO tbl_unit VALUES("23","General Forms Store, Kundasale","3");
INSERT INTO tbl_unit VALUES("24","Survey Division","3");
INSERT INTO tbl_unit VALUES("25","Development Division","3");
INSERT INTO tbl_unit VALUES("26","Financial Managing","3");
INSERT INTO tbl_unit VALUES("27","Salary 1 Branch","3");
INSERT INTO tbl_unit VALUES("28","Salary II Branch","3");
INSERT INTO tbl_unit VALUES("29","Government Officers Advance Accunts","3");
INSERT INTO tbl_unit VALUES("30","Engineering Accounts","3");
INSERT INTO tbl_unit VALUES("31","Other Payments","3");
INSERT INTO tbl_unit VALUES("32","Farms Accounts","3");
INSERT INTO tbl_unit VALUES("33","Projects Accounts","3");
INSERT INTO tbl_unit VALUES("34","Socio Economic Division","4");
INSERT INTO tbl_unit VALUES("35","Horticulture Research and Development Institute, Gannoruwa","5");
INSERT INTO tbl_unit VALUES("36","Horticulture Research Farm, Gannoruwa","5");
INSERT INTO tbl_unit VALUES("37","Adaptive Research Unit, Thibbatumulla","5");
INSERT INTO tbl_unit VALUES("38","Adaptive Research Unit,Wagolla, Rambukkana","5");
INSERT INTO tbl_unit VALUES("39","Agriculture Research Station, Thelijjawila","5");
INSERT INTO tbl_unit VALUES("40","Regional Agriculture Research Centre, Bandarawela","5");
INSERT INTO tbl_unit VALUES("41","Agriculture Research Station, Rahangala, Boralanda","5");
INSERT INTO tbl_unit VALUES("42","Horticulture Research Centre, Kalpitiya","5");
INSERT INTO tbl_unit VALUES("43","Adaptive Research Unit, Thabbowa","5");
INSERT INTO tbl_unit VALUES("44","Adaptive Research Unit, Wariyapola","5");
INSERT INTO tbl_unit VALUES("45","Horticulture Research Farm, Pasyala","5");
INSERT INTO tbl_unit VALUES("46","Horticulture Research Centre, Girandurukotte","5");
INSERT INTO tbl_unit VALUES("47","Agriculture Research Centre, Seethaeliya, Nuwaraeliya","5");
INSERT INTO tbl_unit VALUES("48","Food Research Unit, Gannoruwa","5");
INSERT INTO tbl_unit VALUES("49","Rice Research and Development Institute, Bathalagoda, Ibbagamuwa","6");
INSERT INTO tbl_unit VALUES("50","Rice Research Station, Ambalanthota","6");
INSERT INTO tbl_unit VALUES("51","Rice Research Station, Samanthurei","6");
INSERT INTO tbl_unit VALUES("52","Regional Agriculture Reserch Centre, Bombuwala, Kaluthara.","6");
INSERT INTO tbl_unit VALUES("53","Agriculture Reserch Centre, Benthota.","6");
INSERT INTO tbl_unit VALUES("54","Agriculture Reserch Centre, Labuduwa, Galle","6");
INSERT INTO tbl_unit VALUES("55","Agriculture Reserch Centre, Paranthan","6");
INSERT INTO tbl_unit VALUES("56","Agriculture Reserch Centre, Murunkan","6");
INSERT INTO tbl_unit VALUES("57","Field Crops Reserch and Development Institute, Mahailuppallama","7");
INSERT INTO tbl_unit VALUES("58","Grain Legume Research and Developing Institution, Angunakolapelessa.","7");
INSERT INTO tbl_unit VALUES("59","Adaptive Research Unit, Weerawila","7");
INSERT INTO tbl_unit VALUES("60","Regional Agriculture Reserch Centre, Kilinochchi.","7");
INSERT INTO tbl_unit VALUES("61","Agriculture Reserch Centre, Vavniya","7");
INSERT INTO tbl_unit VALUES("62","Agriculture Reserch Centre, Thirunalweli","7");
INSERT INTO tbl_unit VALUES("63","Regional Agriculture Reserch Centre, Aralaganwila.","7");
INSERT INTO tbl_unit VALUES("64","Regional Agriculture Reserch Centre, Karadiyan-aru","7");
INSERT INTO tbl_unit VALUES("65","Extention and Training Division, Peradeniya.","8");
INSERT INTO tbl_unit VALUES("66","Deputy Director (IP), Hasalaka","8");
INSERT INTO tbl_unit VALUES("67","Deputy Director (IP), Ampara","8");
INSERT INTO tbl_unit VALUES("68","District Farmer Training Centre, Wavinna","8");
INSERT INTO tbl_unit VALUES("69","District Farmer Training Centre, Addalachchenai","8");
INSERT INTO tbl_unit VALUES("70","Deputy Director (IP), Monaragala","8");
INSERT INTO tbl_unit VALUES("71","Deputy Director (IP), Pollonaruwa","8");
INSERT INTO tbl_unit VALUES("72","District Farmer Training Centre, Pollonaruwa","8");
INSERT INTO tbl_unit VALUES("73","Deputy Director (IP), Anuradhapura","8");
INSERT INTO tbl_unit VALUES("74","Deputy Director (IP), Hambanthota","8");
INSERT INTO tbl_unit VALUES("75","District Farmer Training Centre, Weerawila.","8");
INSERT INTO tbl_unit VALUES("76","Agririclture Enterprises Development and Information Centre, Peradeniya","8");
INSERT INTO tbl_unit VALUES("77","Young Farmer Societies HQ, Peradeniya","8");
INSERT INTO tbl_unit VALUES("78","Horticulture Training and Development Institute, Bibile","8");
INSERT INTO tbl_unit VALUES("79","Sri Lanka School of Agricultre, Kundasale","8");
INSERT INTO tbl_unit VALUES("80","Sri Lanka School of Agricultre, Pelwehera","8");
INSERT INTO tbl_unit VALUES("81","Economic Centre, Dambulla","8");
INSERT INTO tbl_unit VALUES("82","Sri Lanka School of Agricultre, Vavuniya","8");
INSERT INTO tbl_unit VALUES("83","Sri Lanka School of Agricultre, Angunakolapelessa","8");
INSERT INTO tbl_unit VALUES("84","Sri Lanka School of Agricultre, Karapincha","8");
INSERT INTO tbl_unit VALUES("85","Sri Lanka School of Agricultre, Labuduwa.","8");
INSERT INTO tbl_unit VALUES("86","Sri Lanka School of Agricultre, Wariyapola","8");
INSERT INTO tbl_unit VALUES("87","Sri Lanka School of Agricultre, Anuradhapura","8");
INSERT INTO tbl_unit VALUES("88","In Service Training Institute, Gannoruwa","8");
INSERT INTO tbl_unit VALUES("89","In Service Training Institute, Angunakolapelessa","8");
INSERT INTO tbl_unit VALUES("90","In Service Training Institute, Hansayapalama","8");
INSERT INTO tbl_unit VALUES("91","Farm Machinary Traing Centre, Anuradhapura.","8");
INSERT INTO tbl_unit VALUES("92","Bee Development Project, Bindunuwewa, Bandarawela","8");
INSERT INTO tbl_unit VALUES("93","Sri Lanka School of Agricultre, paranthan, Kilinochchiya","8");
INSERT INTO tbl_unit VALUES("94","Sri Lanka School of Agricultre, palamunai","8");
INSERT INTO tbl_unit VALUES("95","Seed Certification Service and Plant Protection Centre, Peradeniya","9");
INSERT INTO tbl_unit VALUES("96","Seed Certification Service, Gannoruwa","9");
INSERT INTO tbl_unit VALUES("97","Seed Certification Service, Aluththarama","9");
INSERT INTO tbl_unit VALUES("98","Seed Certification Service, Bata-atha","9");
INSERT INTO tbl_unit VALUES("99","Seed Certification Service, Mahailuppallama","9");
INSERT INTO tbl_unit VALUES("100","Seed Certification Service, Nikaweratiya","9");
INSERT INTO tbl_unit VALUES("101","Seed Certification Service, Pelwehera Dambulla","9");
INSERT INTO tbl_unit VALUES("102","Seed Certification Service, Polonnaruwa","9");
INSERT INTO tbl_unit VALUES("103","Seed Certification Service, Bibile","9");
INSERT INTO tbl_unit VALUES("104","Seed Certification Service, Hingurakgoda","9");
INSERT INTO tbl_unit VALUES("105","Seed Certification Service, Kantale","9");
INSERT INTO tbl_unit VALUES("106","Seed Certification Service, Kundasale","9");
INSERT INTO tbl_unit VALUES("107","Seed Certification Service, Seeth-aeliya","9");
INSERT INTO tbl_unit VALUES("108","Seed Certification Service, Ampara","9");
INSERT INTO tbl_unit VALUES("109","Seed Certification Service, Bathalagoda, Ibbagamuwa","9");
INSERT INTO tbl_unit VALUES("110","Seed Certification Service, Batticaloa","9");
INSERT INTO tbl_unit VALUES("111","Seed Certification Service, Colombo","9");
INSERT INTO tbl_unit VALUES("112","Seed Certification Service, Labuduwa","9");
INSERT INTO tbl_unit VALUES("113","Seed Certification Service, Murunkan","9");
INSERT INTO tbl_unit VALUES("114","Seed Certification Service, Pelmadulla","9");
INSERT INTO tbl_unit VALUES("115","Seed Certification Service, Rikillagaskada","9");
INSERT INTO tbl_unit VALUES("116","Seed Certification Service, Vavuniya","9");
INSERT INTO tbl_unit VALUES("117","Seed Lab, Peradeniya","9");
INSERT INTO tbl_unit VALUES("118","Seed Lab, Mahailuppallama","9");
INSERT INTO tbl_unit VALUES("119","Seed Lab, Aluththarama","9");
INSERT INTO tbl_unit VALUES("120","Seed Lab, Bata-atha","9");
INSERT INTO tbl_unit VALUES("121","Post Control Field, Gannruwa","9");
INSERT INTO tbl_unit VALUES("122","Post Control Field, Seetha-eliya","9");
INSERT INTO tbl_unit VALUES("123","Post Control Field, Mahailuppallama","9");
INSERT INTO tbl_unit VALUES("124","Plant Protection Service, Gannoruwa","9");
INSERT INTO tbl_unit VALUES("125","Plant Protection Service, Mahailuppallama","9");
INSERT INTO tbl_unit VALUES("126","Plant Protection Service, Bombuwala, Kalutara","9");
INSERT INTO tbl_unit VALUES("127","Plant Genetic Resources Centre, Gannoruwa","9");
INSERT INTO tbl_unit VALUES("128","Office of Registrar of Pesticide, Getambe Peradeniya","9");
INSERT INTO tbl_unit VALUES("129","National Plant Quarantine Service, Canada Friendship Mw, Katunayake","9");
INSERT INTO tbl_unit VALUES("130","Plant Quarantine Unit, Airport, Katunayake","9");
INSERT INTO tbl_unit VALUES("131","Plant Quarantine Unit, Seaport, Colombo","9");
INSERT INTO tbl_unit VALUES("132","Seed Certification Service, Matara","9");
INSERT INTO tbl_unit VALUES("133","Seed Certification Service, Mathugama","9");
INSERT INTO tbl_unit VALUES("134","Post Control Field and Seed Museum, bata-atha","9");
INSERT INTO tbl_unit VALUES("135","Seed Certification Service, Jaffna","9");
INSERT INTO tbl_unit VALUES("136","Seed Certification Service, Paranthan","9");
INSERT INTO tbl_unit VALUES("137","Plant Quarantine Unit, Gannoruwa","9");
INSERT INTO tbl_unit VALUES("138","Seed Lab, Paranthan","9");
INSERT INTO tbl_unit VALUES("139","Plant Quarantine Unit, Air port Mattala","9");
INSERT INTO tbl_unit VALUES("140","Plant Quarantine Unit, Seaport, Hambantota","9");
INSERT INTO tbl_unit VALUES("141","Post Control Field  NO 2 , Gannoruwa","9");
INSERT INTO tbl_unit VALUES("142","Post Control Field  ,karadiyanaru","9");
INSERT INTO tbl_unit VALUES("143","Seeed Health Unit, Gannoruwa","9");
INSERT INTO tbl_unit VALUES("144","Seed Farm, Ulpathagama","10");
INSERT INTO tbl_unit VALUES("145","Seed Farm, Bandaragama","10");
INSERT INTO tbl_unit VALUES("146","Seed Farm, Weerapana","10");
INSERT INTO tbl_unit VALUES("147","Seed  Farm, Eluwankulama, Wanathavillu","10");
INSERT INTO tbl_unit VALUES("148","Adaptive Research Unit, Inginimitiya","10");
INSERT INTO tbl_unit VALUES("149","Seed  Farm, Walpita","10");
INSERT INTO tbl_unit VALUES("150","Seed, Planting Material and Farms Development Centre, Peradeniya","10");
INSERT INTO tbl_unit VALUES("151","DDA (Seed) Office, Seetha-eliya","10");
INSERT INTO tbl_unit VALUES("152","Seed Farm, Seetha-eliya","10");
INSERT INTO tbl_unit VALUES("153","Seed Farm, Kandapola","10");
INSERT INTO tbl_unit VALUES("154","Seed Farm, Meepilimana","10");
INSERT INTO tbl_unit VALUES("155","Seed Farm, Udaradella","10");
INSERT INTO tbl_unit VALUES("156","Seed Farm, Piduruthalagala","10");
INSERT INTO tbl_unit VALUES("157","Seed Potatto Store, Rahangala, Boralanda","10");
INSERT INTO tbl_unit VALUES("158","DDA (Seed) Office, Malwaththa, Ampara","10");
INSERT INTO tbl_unit VALUES("159","Seed Farm, Malwaththa Ampara","10");
INSERT INTO tbl_unit VALUES("160","Seed Farm, Karadiyan-aru","10");
INSERT INTO tbl_unit VALUES("161","DDA (Seed) Office, Aluththarama","10");
INSERT INTO tbl_unit VALUES("162","Seed Farm, Aluththarama","10");
INSERT INTO tbl_unit VALUES("163","DDA (Seed) Office, Kantale","10");
INSERT INTO tbl_unit VALUES("164","Seed Farm, Kantale","10");
INSERT INTO tbl_unit VALUES("165","DDA (Seed) Office, Polonnaruwa","10");
INSERT INTO tbl_unit VALUES("166","Seed Farm, Polonnaruwa","10");
INSERT INTO tbl_unit VALUES("167","DDA (Seed) Office, Vavuniya","10");
INSERT INTO tbl_unit VALUES("168","Government Seed Farm, Paranthan","10");
INSERT INTO tbl_unit VALUES("169","Seed Farm, Murunkan","10");
INSERT INTO tbl_unit VALUES("170","DDA (Seed) Office, Colombo 05","10");
INSERT INTO tbl_unit VALUES("171","Seed Farm, Ambepussa","10");
INSERT INTO tbl_unit VALUES("172","Sales Centre, Colombo 07","10");
INSERT INTO tbl_unit VALUES("173","DDA (Seed) Office, Kundasasle","10");
INSERT INTO tbl_unit VALUES("174","Seed Farm, Kundasale","10");
INSERT INTO tbl_unit VALUES("175","Vegetable Seed Centre, Gannoruwa","10");
INSERT INTO tbl_unit VALUES("176","Seed Been Unit, Rikillagaskada","10");
INSERT INTO tbl_unit VALUES("177","DDA (Seed) Office, Nikaweratiya","10");
INSERT INTO tbl_unit VALUES("178","DDA (Seed) Office, Pelwehera","10");
INSERT INTO tbl_unit VALUES("179","DDA (Seed) Office, Bata-atha","10");
INSERT INTO tbl_unit VALUES("180","Seed Farm, Bata-atha","10");
INSERT INTO tbl_unit VALUES("181","Seed Farm, Ambalanthota","10");
INSERT INTO tbl_unit VALUES("182","Seed Farm, Middenniya","10");
INSERT INTO tbl_unit VALUES("183","Sales Centre, Matara","10");
INSERT INTO tbl_unit VALUES("184","DDA (Seed) Office, Mahailuppallama","10");
INSERT INTO tbl_unit VALUES("185","Seed Farm, Mahailuppallama","10");
INSERT INTO tbl_unit VALUES("186","Sales Centre, Mahailuppallama","10");
INSERT INTO tbl_unit VALUES("187","Sales Centre, Aththanagalla","10");
INSERT INTO tbl_unit VALUES("188","ADA (Seed) Office, Karadiyan-aru","10");
INSERT INTO tbl_unit VALUES("189","ADA (Seed) Office, Murunkan","10");
INSERT INTO tbl_unit VALUES("190","DDA (Seed) Office, Kilinochchi","10");
INSERT INTO tbl_unit VALUES("191","DDA (Seed) Office,Telijjawila","10");
INSERT INTO tbl_unit VALUES("192","Sales Centre, Batalagoda","10");
INSERT INTO tbl_unit VALUES("193","Sales Centre, Wagolla","10");
INSERT INTO tbl_unit VALUES("194","Sales Centre, Maduruketiya","10");
INSERT INTO tbl_unit VALUES("195","Sales Centre, Bandarawela","10");
INSERT INTO tbl_unit VALUES("196","Seed Sales Centre, Paranthan","10");
INSERT INTO tbl_unit VALUES("197","Sales Centre, Polonnaruwa","10");
INSERT INTO tbl_unit VALUES("198","Sales Centre, Aluttharama","10");
INSERT INTO tbl_unit VALUES("199","Sales Centre, Ambalantota","10");
INSERT INTO tbl_unit VALUES("200","Sales Centre, Kundasale","10");
INSERT INTO tbl_unit VALUES("201","Sales Centre, Nikaweratiya","10");
INSERT INTO tbl_unit VALUES("202","Sales Centre, Bata Atha","10");
INSERT INTO tbl_unit VALUES("203","Sales Centre, Gannoruwa","10");
INSERT INTO tbl_unit VALUES("204","Seed Potatto Store, Seetha Eliya","10");
INSERT INTO tbl_unit VALUES("205","Seed Farm, Pelwehera","10");
INSERT INTO tbl_unit VALUES("206","Seed Farm, Thelijjavila","10");
INSERT INTO tbl_unit VALUES("207","Sales Centre, Ambepussa","10");
INSERT INTO tbl_unit VALUES("208","Sales Centre, walpita","10");
INSERT INTO tbl_unit VALUES("209","Sales Centre, colombo 05","10");
INSERT INTO tbl_unit VALUES("210","Sales Centre, pasyala","10");
INSERT INTO tbl_unit VALUES("211","Sales Centre, Battaramulla","10");
INSERT INTO tbl_unit VALUES("212","Sales Centre, Ampara","10");
INSERT INTO tbl_unit VALUES("213","Sales Centre, karadiyanaru","10");
INSERT INTO tbl_unit VALUES("214","Sales Centre, iginimitiya","10");
INSERT INTO tbl_unit VALUES("215","Sales Centre, yatiyana","10");
INSERT INTO tbl_unit VALUES("216","Sales Centre, pelwehera","10");
INSERT INTO tbl_unit VALUES("217","Sales Centre, Thelijjawila","10");
INSERT INTO tbl_unit VALUES("218","Internal Audit","11");
INSERT INTO tbl_unit VALUES("219","Chief Engineer\'s Office","12");
INSERT INTO tbl_unit VALUES("220","Farm Mechanization Research Centre, Mahailuppallama.","12");
INSERT INTO tbl_unit VALUES("221","Regional Engineering Workshop, Kundasale","12");
INSERT INTO tbl_unit VALUES("222","Regional Engineering Workshop, Polonnaruwa","12");
INSERT INTO tbl_unit VALUES("223","Regional Engineering Workshop, Angunakolapelessa","12");
INSERT INTO tbl_unit VALUES("224","Regional Engineering Workshop, Seetha- eliya","12");
INSERT INTO tbl_unit VALUES("225","Progress Monitoring And Evaluation Center","13");
INSERT INTO tbl_unit VALUES("226","Natural Resources Management Centre, Peradeniya","14");
INSERT INTO tbl_unit VALUES("227","Soil Conservation and Knowledge Management Unit","14");
INSERT INTO tbl_unit VALUES("228","hiou","14");
INSERT INTO tbl_unit VALUES("229","Fruit Reseach  Unit , Gannoruwa","15");
INSERT INTO tbl_unit VALUES("230","Fruit Reseach Farm, Ambathenna","15");
INSERT INTO tbl_unit VALUES("231","Fruit Reseach Farm, Eraminigolla","15");
INSERT INTO tbl_unit VALUES("232","Fruit Crop Research and Development Centre, Horana","15");
INSERT INTO tbl_unit VALUES("233","Agriculture Research Station, Maduruketiya, Monaragala","15");
INSERT INTO tbl_unit VALUES("234","Agriculture Research Station, Muthukandiaya","15");
INSERT INTO tbl_unit VALUES("235","Orange Research Unit, Bibile","15");
INSERT INTO tbl_unit VALUES("236","Plant Virus Indexing Centre, Homagama","15");
INSERT INTO tbl_unit VALUES("237","National Centre for Fruit Variety Conservation, Kundasale","15");
INSERT INTO tbl_unit VALUES("238","Unit for Echo Friendly Agriculture","15");
INSERT INTO tbl_unit VALUES("239","Sustainable Agriculture Research & Development Centre, Makandura","15");
INSERT INTO tbl_unit VALUES("240","Publication Unit, Gannoruwa","16");
INSERT INTO tbl_unit VALUES("241","Agriculture Publication Sales centre, Peradeniya","16");
INSERT INTO tbl_unit VALUES("242","Farm Broadcasting Service, Narahenpita, Colombo","16");
INSERT INTO tbl_unit VALUES("243","Kandurata Farm Broadcasting Service, Gannoruwa, Kandy","16");
INSERT INTO tbl_unit VALUES("244","Ruhunu Farm Broadcasting Service, Matara","16");
INSERT INTO tbl_unit VALUES("245"," Farm Broadcasting Service,North Unit ,Thirunalveli","16");
INSERT INTO tbl_unit VALUES("246","Rajarata Farm Broadcasting Service, Anuradhapura","16");
INSERT INTO tbl_unit VALUES("247","Chamal Rajapakse Agro Techno and Tourist Park, Bat-atha","16");
INSERT INTO tbl_unit VALUES("248","Central Library, Gannoruwa","16");
INSERT INTO tbl_unit VALUES("249","AgroTechno Park, Gannoruwa","16");
INSERT INTO tbl_unit VALUES("250","National Agriculture Information and Communication Centre, Gannoruwa","16");



DROP TABLE tbl_user;

CREATE TABLE `tbl_user` (
  `user_id` bigint(12) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_role` int(2) NOT NULL,
  `user_status` int(2) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `user_role` (`user_role`)
) ENGINE=InnoDB AUTO_INCREMENT=199460700964 DEFAULT CHARSET=latin1;

INSERT INTO tbl_user VALUES("199012304561","admin_test","21232f297a57a5a743894a0e4a801fc3","1","1");
INSERT INTO tbl_user VALUES("199012304567","admin123","0192023a7bbd73250516f069df18b500","1","1");



DROP TABLE tbl_usrlog;

CREATE TABLE `tbl_usrlog` (
  `logId` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(12) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`logId`)
) ENGINE=InnoDB AUTO_INCREMENT=269 DEFAULT CHARSET=latin1;

INSERT INTO tbl_usrlog VALUES("212","199012304567","2019-07-29 08:20:48");
INSERT INTO tbl_usrlog VALUES("213","199012304567","2019-07-29 09:36:34");
INSERT INTO tbl_usrlog VALUES("214","199012304567","2019-08-05 10:44:14");
INSERT INTO tbl_usrlog VALUES("215","199012304567","2019-08-05 10:54:41");
INSERT INTO tbl_usrlog VALUES("216","199012304567","2019-08-07 03:58:14");
INSERT INTO tbl_usrlog VALUES("217","199012304567","2019-08-07 05:55:36");
INSERT INTO tbl_usrlog VALUES("218","199012304567","2019-08-07 09:12:29");
INSERT INTO tbl_usrlog VALUES("219","199012304567","2019-08-07 09:55:47");
INSERT INTO tbl_usrlog VALUES("220","199012304567","2019-08-08 12:14:33");
INSERT INTO tbl_usrlog VALUES("221","199012304567","2019-08-08 05:07:37");
INSERT INTO tbl_usrlog VALUES("222","199012304567","2019-08-08 09:03:55");
INSERT INTO tbl_usrlog VALUES("223","199012304567","2019-08-08 10:14:18");
INSERT INTO tbl_usrlog VALUES("224","199012304567","2019-08-08 11:57:30");
INSERT INTO tbl_usrlog VALUES("225","199012304567","2019-08-08 02:08:55");
INSERT INTO tbl_usrlog VALUES("226","199012304567","2019-08-08 03:53:33");
INSERT INTO tbl_usrlog VALUES("227","199012304567","2019-08-08 06:45:12");
INSERT INTO tbl_usrlog VALUES("228","199012304567","2019-08-08 09:23:43");
INSERT INTO tbl_usrlog VALUES("229","199012304567","2019-08-08 11:07:51");
INSERT INTO tbl_usrlog VALUES("230","199012304567","2019-08-09 12:17:30");
INSERT INTO tbl_usrlog VALUES("231","199012304567","2019-08-09 02:15:04");
INSERT INTO tbl_usrlog VALUES("232","199012304567","2019-08-09 03:53:29");
INSERT INTO tbl_usrlog VALUES("233","199012304567","2019-08-09 06:22:38");
INSERT INTO tbl_usrlog VALUES("234","199012304567","2019-08-09 06:36:23");
INSERT INTO tbl_usrlog VALUES("235","199012304567","2019-08-09 06:42:51");
INSERT INTO tbl_usrlog VALUES("236","199012304567","2019-08-09 08:27:30");
INSERT INTO tbl_usrlog VALUES("237","199012304567","2019-08-20 10:11:27");
INSERT INTO tbl_usrlog VALUES("238","199012304567","2019-08-20 10:23:37");
INSERT INTO tbl_usrlog VALUES("239","199012304567","2019-08-20 12:04:31");
INSERT INTO tbl_usrlog VALUES("240","199012304567","2019-08-20 01:54:47");
INSERT INTO tbl_usrlog VALUES("241","199012304567","2019-08-20 02:02:30");
INSERT INTO tbl_usrlog VALUES("242","199012304567","2019-08-20 03:47:38");
INSERT INTO tbl_usrlog VALUES("243","199012304567","2019-08-20 05:29:16");
INSERT INTO tbl_usrlog VALUES("244","199012304567","2019-08-20 06:15:36");
INSERT INTO tbl_usrlog VALUES("245","199012304567","2019-08-20 08:02:39");
INSERT INTO tbl_usrlog VALUES("246","199012304567","2019-08-20 08:42:24");
INSERT INTO tbl_usrlog VALUES("247","199012304567","2019-08-20 09:20:18");
INSERT INTO tbl_usrlog VALUES("248","199012304567","2019-08-20 09:33:26");
INSERT INTO tbl_usrlog VALUES("249","199012304567","2019-08-20 09:44:30");
INSERT INTO tbl_usrlog VALUES("250","199012304567","2019-08-20 10:12:20");
INSERT INTO tbl_usrlog VALUES("251","199012304567","2019-08-20 10:21:30");
INSERT INTO tbl_usrlog VALUES("252","199012304567","2019-08-21 12:35:05");
INSERT INTO tbl_usrlog VALUES("253","199012304567","2019-08-21 02:59:57");
INSERT INTO tbl_usrlog VALUES("254","199012304567","2019-08-21 03:08:02");
INSERT INTO tbl_usrlog VALUES("255","199012304567","2019-08-21 04:12:01");
INSERT INTO tbl_usrlog VALUES("256","199012304567","2019-08-21 04:12:21");
INSERT INTO tbl_usrlog VALUES("257","199012304567","2019-08-21 06:05:08");
INSERT INTO tbl_usrlog VALUES("258","199012304567","2019-08-21 07:40:24");
INSERT INTO tbl_usrlog VALUES("259","199012304567","2019-08-21 07:45:01");
INSERT INTO tbl_usrlog VALUES("260","199012304567","2019-08-21 08:38:16");
INSERT INTO tbl_usrlog VALUES("261","199012304567","2019-08-21 11:26:55");
INSERT INTO tbl_usrlog VALUES("262","199012304567","2019-08-21 12:59:59");
INSERT INTO tbl_usrlog VALUES("263","199012304567","2019-08-21 02:42:54");
INSERT INTO tbl_usrlog VALUES("264","199012304567","2019-08-21 05:42:44");
INSERT INTO tbl_usrlog VALUES("265","199012304567","2019-08-21 06:21:13");
INSERT INTO tbl_usrlog VALUES("266","199012304567","2019-08-21 07:16:15");
INSERT INTO tbl_usrlog VALUES("267","199012304567","2019-08-21 09:11:43");
INSERT INTO tbl_usrlog VALUES("268","199012304567","2019-08-21 09:58:42");



