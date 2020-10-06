-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 05:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stores`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `name`, `description`) VALUES
('01_A3', 'A3 Paper', 'One bunlde=500 sheets'),
('02_A4', 'A4 Paper', 'One bunlde=500 sheets'),
('03_A4(Colour)', 'A4(Colour)', 'One bunlde=500 sheets'),
('04_Half_Sheets', 'Half_Sheets', 'One bunlde=500 sheets'),
('05_Iti Kadadaasi', 'Iti Kadadaasi', 'Iti Kadadhaasi'),
('06_Envelop_6x3', 'Envelop_6x3', 'Envelop_6x3'),
('07_Envelop_9x4\r\n', 'Envelop_9x4', 'Envelop_9x4'),
('08_Envelop_10x8', 'Envelop_10x8', 'Envelop_10x8'),
('09_10x15_Envelop', '10x15_Envelop', '10x15_Envelop'),
('10_Tipex', 'Tipex', 'Tippex'),
('11_Highlight_Pen', 'Highlight Pen', 'Highlight Pen'),
('12_Carbon_Pen(Blue)', 'Carbon Pen(Blue)', 'Carbon Pen(Blue)'),
('13_Carbon_Pen(Red)', 'Carbon Pen(Red)', 'Carbon Pen(Red)'),
('14_Carbon_Pen(Black)', 'Carbon Pen(Black)', 'Carbon Pen(Black)'),
('15_Red_Tipex', 'Red Tippex', 'Red Tippex'),
('16_Platignam_Pen', 'Platignum Pen', 'Platignum Pen'),
('17_Pencil', 'Pencil', 'Pencil'),
('19_Tags', 'Tags', 'Tags'),
('20_Clip_Pct', 'Clip Packet', 'Clip Packet'),
('21_Office_Pin', 'Office Pins (Alpenethi)', 'Office Pins (Alpenethi)'),
('22_Stapler_Pin', 'Stapler Pin', 'Stapler Pin'),
('23_Carbon_Paper', 'Carbon Paper', 'Carbon Paper'),
('24_Brown_Paper', 'Brown Paper', 'Brown Paper'),
('25_Binder_Glue', 'Binder Glue', 'Binder Glue'),
('26_File_Covers(Normal)', 'File Covers(Normal)', 'File Covers(Normal)'),
('27_File_Covers(Solid)', 'File Covers(Solid)', 'File Covers(Solid)'),
('28_File_Covers(Plastic)', 'File Covers(Plastic)', 'File Covers(Plastic)'),
('29_Sellotape (1 inch)', 'Sellotape (1 inch)', 'Sellotape (1 inch)'),
('30_Sellotape (2 inch)', 'Sellotape (2 inch)', 'Sellotape (2 inch)'),
('31_Two_vine_thread', 'Two vine thread', 'Two vine thread'),
('32_Log_Books', 'Log Books', 'Log Books'),
('33_CR_Book_01', 'CR Book 01', 'CR Book 01'),
('34_CR Book_02', 'CR Book 02', 'CR Book 02'),
('35_CR_Book_03', 'CR Book 03', 'CR Book 03'),
('36_CR_Book_04', 'CR Book 04', 'CR Book 04'),
('37_Signing_Pen', 'Signing Pen', 'Signing Pen'),
('38_Transparent_Sheet', 'Transparent Sheet', 'Transparent Sheet'),
('39_Field_Book', 'Field Book', 'Field Book'),
('40_Wrapping_Paper', 'Wrapping Paper', 'Wrapping Paper'),
('41_Glue_Bottle(Normal)', 'Glue Bottle(Normal)', 'Glue Bottle(Normal)'),
('42_CD_Drive', 'CD Drive', 'CD Drive'),
('43_DVD_Drive', 'DVD Drive', 'DVD Drive'),
('44_Post_It', 'Post It', 'Post It (Packet)'),
('45_Marker_Pen(Permanent)', 'Marker Pen(Permanent)', 'Marker Pen(Permanent)'),
('46_Whiteboard _Marker', 'Whiteboard Marker', 'Whiteboard Marker'),
('47_Eraser', 'Eraser', 'Eraser'),
('48_Binding_Tape (2 inch)', 'Binding Tape', 'Binding Tape'),
('49_Demai_Paper', 'Demai Paper', 'Demai Paper'),
('50_Polythene', 'Polythene', 'Polythene'),
('51_Candle', 'Candle', 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `refe_used_stock`
--

CREATE TABLE `refe_used_stock` (
  `ref_id` int(11) NOT NULL,
  `location_id` int(100) NOT NULL,
  `proId` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refe_used_stock`
--

INSERT INTO `refe_used_stock` (`ref_id`, `location_id`, `proId`, `qty`) VALUES
(1, 5, '01_A4', 463),
(2, 5, '02_A3', 10),
(3, 5, '03_A4(Colour)', 160);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `prodId` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`prodId`, `qty`) VALUES
('01_A3', 2000),
('03_A4(Colour)', 1000),
('11_Highlight_Pen', 100),
('17_Pencil', 550),
('33_CR_Book_01', 100),
('34_CR Book_02', 100),
('35_CR_Book_03', 100),
('49_Demai_Paper', 40);

-- --------------------------------------------------------

--
-- Table structure for table `training_areas`
--

CREATE TABLE `training_areas` (
  `tra_id` int(11) NOT NULL,
  `tra_area_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_areas`
--

INSERT INTO `training_areas` (`tra_id`, `tra_area_name`, `location`) VALUES
(1, 'Agunakolapalassa', 'Hambanthota'),
(2, 'Bandarawela', 'Bandarawela'),
(3, 'Ampara', 'Ampara'),
(4, 'Gannoruwa', 'Gannoruwa'),
(5, 'Homagama', 'Homagama'),
(6, 'Kilinochchi', 'Kilinochchi'),
(7, 'Anuradhapura', 'Anuradhapura'),
(8, 'Bathalegoda', 'Bathalegoda District,  All Island'),
(9, 'Makandura', 'Makandura');

-- --------------------------------------------------------

--
-- Table structure for table `updatedusedstock`
--

CREATE TABLE `updatedusedstock` (
  `tra_id` varchar(100) NOT NULL,
  `pro_Name` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `nop` int(11) NOT NULL,
  `A4` int(11) NOT NULL,
  `A3` int(11) NOT NULL,
  `A4(color)` int(11) NOT NULL,
  `FC` int(11) NOT NULL,
  `Pen(Blue)` int(11) NOT NULL,
  `Pen(Red)` int(11) NOT NULL,
  `halfSheet` int(11) NOT NULL,
  `env6x3` int(11) NOT NULL,
  `env9x4` int(11) NOT NULL,
  `coco_oil` int(11) NOT NULL,
  `oil_thira` int(11) NOT NULL,
  `kapuru` int(11) NOT NULL,
  `tofee` int(11) NOT NULL,
  `batt_AAA` int(11) NOT NULL,
  `AA` int(11) NOT NULL,
  `9V` int(11) NOT NULL,
  `dimPa` int(11) NOT NULL,
  `platignum` int(11) NOT NULL,
  `step_pin` int(11) NOT NULL,
  `Mar_pen` int(11) NOT NULL,
  `alpenethi` int(11) NOT NULL,
  `hig_pen` int(11) NOT NULL,
  `pencil` int(11) NOT NULL,
  `eraser` int(11) NOT NULL,
  `bind_glue` int(11) NOT NULL,
  `glue_bot` int(11) NOT NULL,
  `sellotape_1"` int(11) NOT NULL,
  `sellotape_2"` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `used_stock`
--

CREATE TABLE `used_stock` (
  `tra_id` int(11) NOT NULL,
  `proName` varchar(100) NOT NULL,
  `tra_area_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `noPart` int(100) NOT NULL,
  `nop` int(100) NOT NULL,
  `FC` int(100) NOT NULL,
  `pen(Bl/Bla)` int(100) NOT NULL,
  `halfSh` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used_stock`
--

INSERT INTO `used_stock` (`tra_id`, `proName`, `tra_area_name`, `date`, `noPart`, `nop`, `FC`, `pen(Bl/Bla)`, `halfSh`) VALUES
(27, 'Procument', 'Agunakolapalassa', '2019-09-01', 5, 0, 0, 0, 0),
(29, 'Procurement', 'Agunakolapalassa', '2019-09-01', 100, 0, 0, 0, 0),
(31, 'Procurement', 'Agunakolapalassa', '2019-09-01', 10, 0, 0, 0, 0),
(32, 'Procurement', 'Agunakolapalassa', '2019-09-01', 10, 0, 0, 0, 0),
(33, 'Procurement', 'Agunakolapalassa', '2019-09-01', 100, 0, 0, 0, 0),
(34, 'Procurement', 'Agunakolapalassa', '2019-09-01', 50, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `psw`, `type`, `status`) VALUES
(1, 'dilini', '1234', 'Admin', 'Active'),
(16, 'sameera', '1234', 'Admin', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `refe_used_stock`
--
ALTER TABLE `refe_used_stock`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `training_areas`
--
ALTER TABLE `training_areas`
  ADD PRIMARY KEY (`tra_id`);

--
-- Indexes for table `used_stock`
--
ALTER TABLE `used_stock`
  ADD PRIMARY KEY (`tra_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `refe_used_stock`
--
ALTER TABLE `refe_used_stock`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_areas`
--
ALTER TABLE `training_areas`
  MODIFY `tra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `used_stock`
--
ALTER TABLE `used_stock`
  MODIFY `tra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
