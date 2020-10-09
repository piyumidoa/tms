-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 04:43 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `unit_list_2019`
--

CREATE TABLE `unit_list_2019` (
  `A` int(3) DEFAULT NULL,
  `B` varchar(68) DEFAULT NULL,
  `C` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit_list_2019`
--

INSERT INTO `unit_list_2019` (`A`, `B`, `C`) VALUES
(1, 'කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් කාර්යාලය‍‍‍', 1),
(2, 'අතිරේක කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් ( පර්යේෂණ) කාර්යාලය, පේරාදෙණිය', 1),
(3, 'අතිරේක කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් (සංවර්ධන) කාර්යාලය, පේරාදෙණිය', 1),
(4, 'අතිරේක අධ්‍යක්ෂ ජනරාල් (පාලන) කාර්යාලය', 2),
(5, 'පා -01 ශාඛාව', 2),
(6, 'පා -02 ශාඛාව', 2),
(7, 'පා -03 ශාඛාව', 2),
(8, 'පා -04 ශාඛාව', 2),
(9, 'පා -05(තැපෑල) ශාඛාව', 2),
(10, 'පා -06 ශාඛාව', 2),
(11, 'පා -07 (සුභසාධක) ශාඛාව', 2),
(12, 'ආ -01 ශාඛාව', 2),
(13, 'ආ -02 ශාඛාව', 2),
(14, 'ආ -03 ශාඛාව', 2),
(15, 'ආ -04 ශාඛාව', 2),
(16, 'ආ -05 ශාඛාව', 2),
(17, 'ආ -06 ශාඛාව', 2),
(18, 'ආ -07 ශාඛාව', 2),
(19, 'ආ -08 ශාඛාව', 2),
(20, 'ආ -09 ශාඛාව', 2),
(21, 'ආ -10 ශාඛාව', 2),
(22, 'ප්‍රධාන ගණකාධිකාරි කාර්යාලය', 3),
(23, 'පොදු ආකාතිපත්‍ර ගබඩාව, කුණ්ඩසාලේ', 3),
(24, 'භාණ්ඩ සමීක්ෂණ අංශය', 3),
(25, 'සංවර්ධන ගිණුම් අංශය', 3),
(26, 'මූල්‍ය කළමනාකරණ', 3),
(27, 'වැටුප් 1 ශාඛාව', 3),
(28, 'වැටුප් II ශාඛාව', 3),
(29, 'රජයේ නිලධාරීන්ගේ අත්තිකාරම් ගිණුම් ශාඛාව', 3),
(30, 'ඉංජිනේරු ගිණුම්', 3),
(31, 'වෙනත් ගෙවිම්', 3),
(32, 'ගොවිපල් ගිණුම්', 3),
(33, 'ව්‍යාපෘති ගිණුම්', 3),
(34, 'සමාජ ආර්ථික සැලසුම් මධ්‍යස්ථානය', 4),
(35, 'උද්‍යාන බෝග පර්යේෂණ හා සංවර්ධන ආයතනය, ගන්නෝරුව‍', 5),
(36, 'උද්‍යාන බෝග පර්යේෂණ ගොවිපල ගන්නෝරුව', 5),
(37, 'උපයෝගිතා පර්යේෂණ ඒකකය, තිබ්බටුමුල්ල', 5),
(38, 'උපයෝගිතා පර්යේෂණ ඒකකය, වාගොල්ල, රඹුක්කන', 5),
(39, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, තෙලිජ්ජවිල', 5),
(40, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, බණ්ඩාරවෙල', 5),
(41, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, රහංගල, බොරලන්ද', 5),
(42, 'උද්‍යාන බෝග පර්යේෂණ ස්ථානය, කල්පිටිය', 5),
(43, 'උපයෝගිතා පර්යේෂණ ඒකකය, තබ්බෝව', 5),
(44, 'උපයෝගිතා පර්යේෂණ ඒකකය, වාරිය‍පොල', 5),
(45, 'උද්‍යාන බෝග පර්යේෂණ ගොවිපල, පස්යාල', 5),
(46, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, ගිරාඳුරුකෝට්ටේ', 5),
(47, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, සීතාඑළිය, නුවරඑළිය', 5),
(48, 'ආහාර පර්යේෂණ ඒකකය, ගන්නෝරුව', 5),
(49, 'වි පර්යේෂණ හා සංවර්ධන ආයතනය, බතලගොඩ, ඉබ්බාගමුව', 6),
(50, 'වි පර්යේෂණ ස්ථානය, අම්බලන්තොට', 6),
(51, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, සමන්‍තුරේ', 6),
(52, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, බෝඹුවල', 6),
(53, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, බෙන්තොට', 6),
(54, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, ‍ලබුදූව, ගාල්ල', 6),
(55, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, පරන්තන්', 6),
(56, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, මුරුන්කන්', 6),
(57, 'ක්ෂේත්‍ර බෝග පර්යේෂණ හා සංවර්ධන ආයතනය, මහඉලුප්පල්ලම', 7),
(58, 'මාෂ සහ තෙල් බෝග පර්යේෂණ හා සංවර්ධන මධ්‍යස්ථානය, අඟුණ‍කොළපැලැස්ස', 7),
(59, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, විරවිල‍', 7),
(60, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, කිලිනොච්චිය', 7),
(61, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, වවුනියාව', 7),
(62, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, තිරුනල්වේලි', 7),
(63, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, අරලගන්විල', 7),
(64, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, කරදියන්ආරු', 7),
(65, 'ව්‍යාප්ති හා පුහුණු මධ්‍යස්ථානය පේරාදෙණිය', 8),
(66, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, හසලක', 8),
(67, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, අම්පාර', 8),
(68, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, වාවින්න‍', 8),
(69, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, අඩ්ඩාලච්චේන', 8),
(70, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, මොණරාගල', 8),
(71, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, පොළොන්නරුව', 8),
(72, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, පොළොන්නරුව', 8),
(73, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, අනුරාධපුරය', 8),
(74, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, හම්බන්තොට', 8),
(75, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, වීරවිල', 8),
(76, 'කෘෂි ව්‍යාපාර සංවර්ධන හා තොරතුරු මධ්‍යස්ථානය, පේරාදෙණිය', 8),
(77, 'තරුණ ගොවි සමාජ මූලසථානය, පේරාදෙණිය', 8),
(78, 'උද්‍යාන බෝග පුහුණු හා සංවර්ධන ආයතනය, බිබිල', 8),
(79, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, කුණ්ඩසාලේ', 8),
(80, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, පැල්වෙහෙර', 8),
(81, 'ආර්ථික මධ්‍යස්ථානය, දඹුල්ල', 8),
(82, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, වවුනියාව', 8),
(83, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, අඟුණකොලපැලැස්ස', 8),
(84, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, කරපිංච', 8),
(85, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, ලබුදූව', 8),
(86, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, වාරියපොල', 8),
(87, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, අනුරාධපුරය', 8),
(88, 'සේවා සංස්කරණ අභ්‍යාස ආයතනය, ගන්නෝරුව', 8),
(89, 'සේවා සංස්කරණ අභ්‍යාස ආයතනය, අඟුණකොලපැලැස්ස', 8),
(90, 'සේවා සංස්කරණ අභ්‍යාස ආයතනය, හංසයාපාලම', 8),
(91, 'ගොවිපල් යාන්ත්‍රික අභ්‍යාස මධ්‍යස්ථානය, අනුරාධපුරය', 8),
(92, 'මි මැසි සංවර්ධන ව්‍යාපාතිය, බිඳුණුවැව, බණ්ඩාරවෙල', 8),
(93, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, පරන්තන්,කිළිනොච්චිය', 8),
(94, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, පාලමුනේ', 8),
(95, 'බිජ සහතික කිරිම් හා පැලෑටි සංරක්ෂණ මධ්‍යස්ථානය, ගන්නෝරුව', 9),
(96, 'බිජ සහතික කිරිමේ සේවය, ගන්නෝරුව', 9),
(97, 'බිජ සහතික කිරිමේ සේවය, අළුත්තරම', 9),
(98, 'බිජ සහතික කිරිමේ සේවය, බට-අත', 9),
(99, 'බිජ සහතික කිරිමේ සේවය, මහඉළුප්පල්ලම', 9),
(100, 'බිජ සහතික කිරිමේ සේවය, නිකරවැරටිය', 9),
(101, 'බිජ සහතික කිරිමේ සේවය, පැල්වෙහෙර', 9),
(102, 'බිජ සහතික කිරිමේ සේවය, පොළොන්නරුව', 9),
(103, 'බිජ සහතික කිරිමේ සේවය, බිබිල', 9),
(104, 'බිජ සහතික කිරිමේ සේවය, හිඟුරක්ගොඩ', 9),
(105, 'බිජ සහතික කිරිමේ සේවය, කන්තලේ', 9),
(106, 'බිජ සහතික කිරිමේ සේවය, කුණ්ඩසාලේ‍', 9),
(107, 'බිජ සහතික කිරිමේ සේවය, සීතාඑලිය', 9),
(108, 'බිජ සහතික කිරිමේ සේවය, අම්පාර', 9),
(109, 'බිජ සහතික කිරිමේ සේවය, බතලගොඩ', 9),
(110, 'බිජ සහතික කිරිමේ සේවය, මඩකලපුව', 9),
(111, 'බිජ සහතික කිරිමේ සේවය, කොළඹ', 9),
(112, 'බිජ සහතික කිරිමේ සේවය, ලබුදූව', 9),
(113, 'බිජ සහතික කිරිමේ සේවය, මුරුන්කන්', 9),
(114, 'බිජ සහතික කිරිමේ සේවය, පැල්මඩුල්ල', 9),
(115, 'බිජ සහතික කිරිමේ සේවය, රිකිල්ලගස්කඩ', 9),
(116, 'බිජ සහතික කිරිමේ සේවය, වවුනියාව', 9),
(117, 'බීජ පරීක්ෂණාගාරය, පේරාදෙණිය', 9),
(118, 'බීජ පරීක්ෂණාගාරය, මහඉළුප්පල්ලම', 9),
(119, 'බීජ පරීක්ෂණාගාරය, අළුත්තරම', 9),
(120, 'බීජ පරීක්ෂණාගාරය, බට-අත', 9),
(121, 'පශ්චාත් පාලන ක්ෂේත්‍රය I , ගන්නෝරුව', 9),
(122, 'පශ්චාත් පාලන ක්ෂේත්‍රය, සිතාඑලිය', 9),
(123, 'පශ්චාත් පාලන ක්ෂේත්‍රය, මහඉළුප්පල්ලම', 9),
(124, 'පැලෑටි සංරක්ෂණ සේවය, ගන්නෝරුව, පේරාදෙණිය', 9),
(125, 'පැලෑටි සංරක්ෂණ සේවය, මහඉළුප්පල්ලම', 9),
(126, 'පැලෑටි සංරක්ෂණ සේවය, බෝඹුවල, කළුතර', 9),
(127, 'පැලෑටි ජාන සම්පත් මධ්‍යස්ථානය, ගන්නෝරුව', 9),
(128, 'පළිබෝධනාශක රෙජිස්ට්‍රාර් කාර්යාලය, පේරාදෙණිය', 9),
(129, 'ජාතික පැලෑටි නිරෝධායන සේවය, කැනඩා මිත්‍රත්ව මාවත, කටුනායක', 9),
(130, 'පැලෑටි නිරෝධායන ඒකකය, ගුවන්තොටුපොල, කටුනායක', 9),
(131, 'පැලෑටි නිරෝධායන ඒකකය, බැගඩෑඩ් දොරටුව, කොළඹ වරාය', 9),
(132, 'බිජ සහතික කිරිමේ සේවය, මාතර‍', 9),
(133, 'බිජ සහතික කිරිමේ සේවය, මතුගම', 9),
(134, 'බිජ සහතික කිරිමේ සේවය, මුලතිව්', 9),
(135, 'පශ්චාත් පාලන ක්ෂේත්‍රය හා බීජ කෞතුකාගාරය, බට-අත', 9),
(136, 'බිජ සහතික කිරිමේ සේවය, යාපනය', 9),
(137, 'බිජ සහතික කිරිමේ සේවය, පරන්තන්', 9),
(138, 'පැලෑටි නිරෝධායන ඒකකය, ගන්නොරුව', 9),
(139, 'බීජ පරීක්ෂණාගාරය, පරන්තන්', 9),
(140, 'පැලෑටි නිරෝධායන ඒකකය, ගුවන්තොටුපොල, මත්තල', 9),
(141, 'පැලෑටි නිරෝධායන ඒකකය, හම්බන්තොට වරාය', 9),
(142, 'පශ්චාත් පාලන ක්ෂේත්‍ර අංක II, ගන්නෝරුව', 9),
(143, 'පශ්චාත් පාලන ක්ෂේත්‍ර , කරදියන්ආරු', 9),
(144, 'බීජ සෞඛ්‍ය ඒකකය, ගන්නෝරුව', 9),
(145, 'පැලෑටි නිරෝධායන ඒකකය, ගුවන්තොටුපොල, යාපනය', 9),
(146, 'රජයේ බීජ ගොවිපල, උල්පතගම', 10),
(147, 'රජයේ බීජ ගොවිපල, බණ්ඩාරගම', 10),
(148, 'රජයේ බීජ නිෂ්පාදන ගොවිපල, වීරපාන', 10),
(149, 'රජයේ බිජ ගොවිපල, එළුවන්කුලම, වනාතවිල්ලුව‍', 10),
(150, 'රජයේ ගොවිපල, ඉඟිනිමිටිය', 10),
(151, 'රජයේ බිජ ගොවිපල, වල්පිට', 10),
(152, 'බිජ, රෝපණ ද්‍රව්‍ය හා ගොවිපල් සංවර්ධන මධ්‍යස්ථානය පේරාදෙණිය', 10),
(153, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, සීතාඑළිය', 10),
(154, 'රජයේ බිජ ගොවිපල, සිතාඑළිය', 10),
(155, 'රජයේ බිජ ගොවිපල, කඳපොල', 10),
(156, 'රජයේ බිජ ගොවිපල, මීපිලිමාන', 10),
(157, 'රජයේ බිජ ගොවිපල, උඩරදැල්ල', 10),
(158, 'රජයේ බිජ ගොවිපල, පිදුරුතලාගල', 10),
(159, 'බීජ නිෂ්පාදන ගොවිපල, රහංගල, බොරලන්ද', 10),
(160, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, අම්පාර', 10),
(161, 'රජයේ බිජ ගොවිපල, මල්වත්ත, අම්පාර', 10),
(162, 'රජයේ බිජ ගොවිපල, කරදියන්ආරු', 10),
(163, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, අළුත්තරම', 10),
(164, 'රජයේ බිජ ගොවිපල, අළුත්තරම', 10),
(165, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කන්තලේ', 10),
(166, 'රජයේ බිජ ගොවිපල, කන්තලේ', 10),
(167, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, පොළොන්නරුව', 10),
(168, 'රජයේ බිජ ගොවිපල, පොළොන්නරුව', 10),
(169, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, වවුනියාව', 10),
(170, 'රජයේ බිජ ගොවිපල, පරන්තන්', 10),
(171, 'රජයේ බිජ ගොවිපල, මුරුන්කන්', 10),
(172, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, නාරාහේන්පිට', 10),
(173, 'රජයේ බිජ ගොවිපල, අඹේපුස්ස', 10),
(174, 'කෘෂි බීජ අලෙවි සැල, කොළඹ 07', 10),
(175, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කුණ්ඩසාලේ', 10),
(176, 'රජයේ බිජ ගොවිපල, කුණ්ඩසාලේ', 10),
(177, 'එළවළු බිජ මධ්‍යස්ථානය, ගන්නෝරුව', 10),
(178, 'බීජ බෝංචි ඒකකය , රිකිල්ලගස්කඩ', 10),
(179, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, නිකවැරටිය', 10),
(180, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, පැල්වෙහෙ‍ර', 10),
(181, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, බට-අත', 10),
(182, 'රජයේ බිජ ගොවිපල, බට-අත', 10),
(183, 'රජයේ බිජ ‍ගොවිපල, අම්බලන්තොට', 10),
(184, 'රජයේ බිජ ගොවිපල, මිද්දෙනිය', 10),
(185, 'කෘෂි බීජ අලෙවි සැල, මාතර', 10),
(186, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, මහඉළුප්පල්ලම', 10),
(187, 'රජයේ බිජ ගොවිපල, මහඉළුප්පල්ලම', 10),
(188, 'කෘෂි බීජ අලෙවි සැල, මහඉළුප්පල්ලම', 10),
(189, 'කෘෂි බීජ අලෙවි සැල, අත්තනගල්ල', 10),
(190, 'සහකාර කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කරදියන්ආරු', 10),
(191, 'සහකාර කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, මුරුන්කන්', 10),
(192, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කිළිනොච්ච්ය', 10),
(193, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, තෙලිජ්ජවිල', 10),
(194, 'කෘෂි බීජ වෙළඳසැල, බතලගොඩ', 10),
(195, 'කෘෂි බීජ වෙළඳසැල, වාගොල්ල', 10),
(196, 'කෘෂි බීජ වෙළඳසැල, මදුරුකැටිය', 10),
(197, 'කෘෂි බීජ වෙළඳසැල, බණ්ඩාරවෙල', 10),
(198, 'කෘෂි බීජ වෙළඳසැල, පරන්තන්', 10),
(199, 'කෘෂි බීජ වෙළඳසැල, පොලොන්නරුව', 10),
(200, 'කෘෂි බීජ වෙළඳසැල, අළුත්තරම', 10),
(201, 'කෘෂි බීජ වෙළඳසැල, අම්බලන්තොට', 10),
(202, 'කෘෂි බීජ වෙළඳසැල, කුණ්ඩසාලේ', 10),
(203, 'කෘෂි බීජ වෙළඳසැල, නිකවැරටිය', 10),
(204, 'කෘෂි බීජ වෙළඳසැල, බටඅත', 10),
(205, 'කෘෂි බීජ වෙළඳසැල, ගන්නොරුව', 10),
(206, 'බීජ අර්තාපල් ගබඩාව, සීතාඑළිය', 10),
(207, 'බීජ නිශ්පාදන ගොවිපල, පැල්වෙහෙර', 10),
(208, 'රජයේ බීජ නිෂ්පාදන ගොවිපල, තෙලිජ්ජවිල', 10),
(209, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, අඹේපුස්ස', 10),
(210, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, වල්පිට', 10),
(211, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, කොළඹ 05', 10),
(212, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, පස්යාල', 10),
(213, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, බත්තරමුල්ල', 10),
(214, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, අම්පාර', 10),
(215, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, කරදියන්ආරු', 10),
(216, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, ඉඟිනිමිටිය', 10),
(217, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, යටියන', 10),
(218, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, පැල්වෙහෙර', 10),
(219, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, තෙලිජ්ජවිල', 10),
(220, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, කල්තොට', 10),
(221, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, වීරපාන', 10),
(222, 'අභ්‍යන්තර විගණන අංශය', 11),
(223, 'ප්‍රධාන ඉංජිනේරු කාර්යාලය පේරාදෙණිය', 12),
(224, 'ගොවිපල් යාන්ත්‍රික පර්යේෂණ මධ්‍යස්ථානය, මහඉළුප්පල්ලම', 12),
(225, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, කුණ්ඩසාලේ', 12),
(226, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, පොළොන්නරුව', 12),
(227, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, අඟුණකොලපැලැස්ස', 12),
(228, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, සීතාඑළිය', 12),
(229, 'ප්‍රගති මෙහෙයුම් හා ඇගයිම් ඒකකය', 13),
(230, 'ස්වභාවික සම්පත් කළමනාකරණ මධ්‍යස්ථානය, පේරාදෙණිය', 14),
(231, 'පාංශු සංරක්ෂණ දැනුම් කළමනාකරණ මධ්‍යස්ථානය,කුණ්ඩසාලේ', 14),
(232, 'ස්වාභාවික සම්පත් කළමනාකරණ හා පාංශු සංරක්ෂණආදර්ශ කේන්ද්‍රය, කුණ්ඩසාලේ', 14),
(233, 'පළතුරු බෝග පර්යේෂණ ස්ථානය ගන්නෝරුව', 15),
(234, 'පළතුරු බෝග පර්යේෂණ ගොවිපල, අඹතැන්න', 15),
(235, 'පළතුරු බෝග පර්යේෂණ ගොවිපල, එරමිණිගොල්ල', 15),
(236, 'පළතුරු බෝග පර්යේෂණ හා සංවර්ධන මධ්‍යස්ථානය, හොරණ', 15),
(237, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, මදුරුකැටිය, මොණරාගල', 15),
(238, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, මුතුකණ්ඩිය', 15),
(239, 'දොඩම් පර්යේෂණ ඒකකය, බිබිල', 15),
(240, 'තිරසාර කෘෂිකර්ම පර්යේෂණ හා සංවර්ධන මධ්‍යස්ථානය, මාකඳුර', 15),
(241, 'පැලෑටි වෛරස් හඳුනා ගැනිමේ මධ්‍යස්ථානය, ‍හෝමාගම', 15),
(242, 'ජාතික පළතුරු ප්‍රභේද සංරක්ෂණ මධ්‍යස්ථානය, කුණ්ඩසාලේ', 15),
(243, 'පරිසර හිතකාමි කෘෂි ඒකකය, දියගම', 15),
(244, 'ප්‍රකාශන ඒකකය, ගන්නෝරුව', 16),
(245, 'කෘෂි ප්‍රකාශන බෙදාහැරීමේ එකකය, පේරාදෙණිය', 16),
(246, 'ගුවන්විදුලි ගොවි සේවාව, කොළඹ 05', 16),
(247, 'කඳුරට ගුවන්විදුලි ගොවි සේවාව, මහනුවර', 16),
(248, 'රුහුණු ගුවන්විදුලි ගොවි සේවාව, මාතර', 16),
(249, 'රජරට ගුවන්විදුලි ගොවි සේවාව, අනුරාධපුරය', 16),
(250, 'චමල් රාජපක්ෂ කෘෂි තාක්ෂණ හා සංචාරක උද්‍යානය, බට-අත', 16),
(251, 'මධ්‍යම පුස්ථකාලය, ගන්නෝරුව', 16),
(252, 'කෘෂි තාක්ෂණ උද්‍යානය, ගන්නෝරුව', 16),
(253, 'ජාතික තොරතුරු හා සන්නිවේදන මධ්‍යස්ථානය, ගන්නොරුව', 16),
(254, 'ගුවන්විදුලි ගොවි සේවාව, උතුරු ඒකකය,යාපනය', 16),
(1, 'කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් කාර්යාලය‍‍‍', 1),
(2, 'අතිරේක කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් ( පර්යේෂණ) කාර්යාලය, පේරාදෙණිය', 1),
(3, 'අතිරේක කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් (සංවර්ධන) කාර්යාලය, පේරාදෙණිය', 1),
(4, 'අතිරේක අධ්‍යක්ෂ ජනරාල් (පාලන) කාර්යාලය', 2),
(5, 'පා -01 ශාඛාව', 2),
(6, 'පා -02 ශාඛාව', 2),
(7, 'පා -03 ශාඛාව', 2),
(8, 'පා -04 ශාඛාව', 2),
(9, 'පා -05(තැපෑල) ශාඛාව', 2),
(10, 'පා -06 ශාඛාව', 2),
(11, 'පා -07 (සුභසාධක) ශාඛාව', 2),
(12, 'ආ -01 ශාඛාව', 2),
(13, 'ආ -02 ශාඛාව', 2),
(14, 'ආ -03 ශාඛාව', 2),
(15, 'ආ -04 ශාඛාව', 2),
(16, 'ආ -05 ශාඛාව', 2),
(17, 'ආ -06 ශාඛාව', 2),
(18, 'ආ -07 ශාඛාව', 2),
(19, 'ආ -08 ශාඛාව', 2),
(20, 'ආ -09 ශාඛාව', 2),
(21, 'ආ -10 ශාඛාව', 2),
(22, 'ප්‍රධාන ගණකාධිකාරි කාර්යාලය', 3),
(23, 'පොදු ආකාතිපත්‍ර ගබඩාව, කුණ්ඩසාලේ', 3),
(24, 'භාණ්ඩ සමීක්ෂණ අංශය', 3),
(25, 'සංවර්ධන ගිණුම් අංශය', 3),
(26, 'මූල්‍ය කළමනාකරණ', 3),
(27, 'වැටුප් 1 ශාඛාව', 3),
(28, 'වැටුප් II ශාඛාව', 3),
(29, 'රජයේ නිලධාරීන්ගේ අත්තිකාරම් ගිණුම් ශාඛාව', 3),
(30, 'ඉංජිනේරු ගිණුම්', 3),
(31, 'වෙනත් ගෙවිම්', 3),
(32, 'ගොවිපල් ගිණුම්', 3),
(33, 'ව්‍යාපෘති ගිණුම්', 3),
(34, 'සමාජ ආර්ථික සැලසුම් මධ්‍යස්ථානය', 4),
(35, 'උද්‍යාන බෝග පර්යේෂණ හා සංවර්ධන ආයතනය, ගන්නෝරුව‍', 5),
(36, 'උද්‍යාන බෝග පර්යේෂණ ගොවිපල ගන්නෝරුව', 5),
(37, 'උපයෝගිතා පර්යේෂණ ඒකකය, තිබ්බටුමුල්ල', 5),
(38, 'උපයෝගිතා පර්යේෂණ ඒකකය, වාගොල්ල, රඹුක්කන', 5),
(39, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, තෙලිජ්ජවිල', 5),
(40, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, බණ්ඩාරවෙල', 5),
(41, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, රහංගල, බොරලන්ද', 5),
(42, 'උද්‍යාන බෝග පර්යේෂණ ස්ථානය, කල්පිටිය', 5),
(43, 'උපයෝගිතා පර්යේෂණ ඒකකය, තබ්බෝව', 5),
(44, 'උපයෝගිතා පර්යේෂණ ඒකකය, වාරිය‍පොල', 5),
(45, 'උද්‍යාන බෝග පර්යේෂණ ගොවිපල, පස්යාල', 5),
(46, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, ගිරාඳුරුකෝට්ටේ', 5),
(47, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, සීතාඑළිය, නුවරඑළිය', 5),
(48, 'ආහාර පර්යේෂණ ඒකකය, ගන්නෝරුව', 5),
(49, 'වි පර්යේෂණ හා සංවර්ධන ආයතනය, බතලගොඩ, ඉබ්බාගමුව', 6),
(50, 'වි පර්යේෂණ ස්ථානය, අම්බලන්තොට', 6),
(51, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, සමන්‍තුරේ', 6),
(52, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, බෝඹුවල', 6),
(53, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, බෙන්තොට', 6),
(54, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, ‍ලබුදූව, ගාල්ල', 6),
(55, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, පරන්තන්', 6),
(56, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, මුරුන්කන්', 6),
(57, 'ක්ෂේත්‍ර බෝග පර්යේෂණ හා සංවර්ධන ආයතනය, මහඉලුප්පල්ලම', 7),
(58, 'මාෂ සහ තෙල් බෝග පර්යේෂණ හා සංවර්ධන මධ්‍යස්ථානය, අඟුණ‍කොළපැලැස්ස', 7),
(59, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, විරවිල‍', 7),
(60, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, කිලිනොච්චිය', 7),
(61, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, වවුනියාව', 7),
(62, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, තිරුනල්වේලි', 7),
(63, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, අරලගන්විල', 7),
(64, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, කරදියන්ආරු', 7),
(65, 'ව්‍යාප්ති හා පුහුණු මධ්‍යස්ථානය පේරාදෙණිය', 8),
(66, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, හසලක', 8),
(67, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, අම්පාර', 8),
(68, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, වාවින්න‍', 8),
(69, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, අඩ්ඩාලච්චේන', 8),
(70, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, මොණරාගල', 8),
(71, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, පොළොන්නරුව', 8),
(72, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, පොළොන්නරුව', 8),
(73, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, අනුරාධපුරය', 8),
(74, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, හම්බන්තොට', 8),
(75, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, වීරවිල', 8),
(76, 'කෘෂි ව්‍යාපාර සංවර්ධන හා තොරතුරු මධ්‍යස්ථානය, පේරාදෙණිය', 8),
(77, 'තරුණ ගොවි සමාජ මූලසථානය, පේරාදෙණිය', 8),
(78, 'උද්‍යාන බෝග පුහුණු හා සංවර්ධන ආයතනය, බිබිල', 8),
(79, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, කුණ්ඩසාලේ', 8),
(80, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, පැල්වෙහෙර', 8),
(81, 'ආර්ථික මධ්‍යස්ථානය, දඹුල්ල', 8),
(82, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, වවුනියාව', 8),
(83, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, අඟුණකොලපැලැස්ස', 8),
(84, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, කරපිංච', 8),
(85, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, ලබුදූව', 8),
(86, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, වාරියපොල', 8),
(87, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, අනුරාධපුරය', 8),
(88, 'සේවා සංස්කරණ අභ්‍යාස ආයතනය, ගන්නෝරුව', 8),
(89, 'සේවා සංස්කරණ අභ්‍යාස ආයතනය, අඟුණකොලපැලැස්ස', 8),
(90, 'සේවා සංස්කරණ අභ්‍යාස ආයතනය, හංසයාපාලම', 8),
(91, 'ගොවිපල් යාන්ත්‍රික අභ්‍යාස මධ්‍යස්ථානය, අනුරාධපුරය', 8),
(92, 'මි මැසි සංවර්ධන ව්‍යාපාතිය, බිඳුණුවැව, බණ්ඩාරවෙල', 8),
(93, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, පරන්තන්,කිළිනොච්චිය', 8),
(94, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, පාලමුනේ', 8),
(95, 'බිජ සහතික කිරිම් හා පැලෑටි සංරක්ෂණ මධ්‍යස්ථානය, ගන්නෝරුව', 9),
(96, 'බිජ සහතික කිරිමේ සේවය, ගන්නෝරුව', 9),
(97, 'බිජ සහතික කිරිමේ සේවය, අළුත්තරම', 9),
(98, 'බිජ සහතික කිරිමේ සේවය, බට-අත', 9),
(99, 'බිජ සහතික කිරිමේ සේවය, මහඉළුප්පල්ලම', 9),
(100, 'බිජ සහතික කිරිමේ සේවය, නිකරවැරටිය', 9),
(101, 'බිජ සහතික කිරිමේ සේවය, පැල්වෙහෙර', 9),
(102, 'බිජ සහතික කිරිමේ සේවය, පොළොන්නරුව', 9),
(103, 'බිජ සහතික කිරිමේ සේවය, බිබිල', 9),
(104, 'බිජ සහතික කිරිමේ සේවය, හිඟුරක්ගොඩ', 9),
(105, 'බිජ සහතික කිරිමේ සේවය, කන්තලේ', 9),
(106, 'බිජ සහතික කිරිමේ සේවය, කුණ්ඩසාලේ‍', 9),
(107, 'බිජ සහතික කිරිමේ සේවය, සීතාඑලිය', 9),
(108, 'බිජ සහතික කිරිමේ සේවය, අම්පාර', 9),
(109, 'බිජ සහතික කිරිමේ සේවය, බතලගොඩ', 9),
(110, 'බිජ සහතික කිරිමේ සේවය, මඩකලපුව', 9),
(111, 'බිජ සහතික කිරිමේ සේවය, කොළඹ', 9),
(112, 'බිජ සහතික කිරිමේ සේවය, ලබුදූව', 9),
(113, 'බිජ සහතික කිරිමේ සේවය, මුරුන්කන්', 9),
(114, 'බිජ සහතික කිරිමේ සේවය, පැල්මඩුල්ල', 9),
(115, 'බිජ සහතික කිරිමේ සේවය, රිකිල්ලගස්කඩ', 9),
(116, 'බිජ සහතික කිරිමේ සේවය, වවුනියාව', 9),
(117, 'බීජ පරීක්ෂණාගාරය, පේරාදෙණිය', 9),
(118, 'බීජ පරීක්ෂණාගාරය, මහඉළුප්පල්ලම', 9),
(119, 'බීජ පරීක්ෂණාගාරය, අළුත්තරම', 9),
(120, 'බීජ පරීක්ෂණාගාරය, බට-අත', 9),
(121, 'පශ්චාත් පාලන ක්ෂේත්‍රය I , ගන්නෝරුව', 9),
(122, 'පශ්චාත් පාලන ක්ෂේත්‍රය, සිතාඑලිය', 9),
(123, 'පශ්චාත් පාලන ක්ෂේත්‍රය, මහඉළුප්පල්ලම', 9),
(124, 'පැලෑටි සංරක්ෂණ සේවය, ගන්නෝරුව, පේරාදෙණිය', 9),
(125, 'පැලෑටි සංරක්ෂණ සේවය, මහඉළුප්පල්ලම', 9),
(126, 'පැලෑටි සංරක්ෂණ සේවය, බෝඹුවල, කළුතර', 9),
(127, 'පැලෑටි ජාන සම්පත් මධ්‍යස්ථානය, ගන්නෝරුව', 9),
(128, 'පළිබෝධනාශක රෙජිස්ට්‍රාර් කාර්යාලය, පේරාදෙණිය', 9),
(129, 'ජාතික පැලෑටි නිරෝධායන සේවය, කැනඩා මිත්‍රත්ව මාවත, කටුනායක', 9),
(130, 'පැලෑටි නිරෝධායන ඒකකය, ගුවන්තොටුපොල, කටුනායක', 9),
(131, 'පැලෑටි නිරෝධායන ඒකකය, බැගඩෑඩ් දොරටුව, කොළඹ වරාය', 9),
(132, 'බිජ සහතික කිරිමේ සේවය, මාතර‍', 9),
(133, 'බිජ සහතික කිරිමේ සේවය, මතුගම', 9),
(134, 'බිජ සහතික කිරිමේ සේවය, මුලතිව්', 9),
(135, 'පශ්චාත් පාලන ක්ෂේත්‍රය හා බීජ කෞතුකාගාරය, බට-අත', 9),
(136, 'බිජ සහතික කිරිමේ සේවය, යාපනය', 9),
(137, 'බිජ සහතික කිරිමේ සේවය, පරන්තන්', 9),
(138, 'පැලෑටි නිරෝධායන ඒකකය, ගන්නොරුව', 9),
(139, 'බීජ පරීක්ෂණාගාරය, පරන්තන්', 9),
(140, 'පැලෑටි නිරෝධායන ඒකකය, ගුවන්තොටුපොල, මත්තල', 9),
(141, 'පැලෑටි නිරෝධායන ඒකකය, හම්බන්තොට වරාය', 9),
(142, 'පශ්චාත් පාලන ක්ෂේත්‍ර අංක II, ගන්නෝරුව', 9),
(143, 'පශ්චාත් පාලන ක්ෂේත්‍ර , කරදියන්ආරු', 9),
(144, 'බීජ සෞඛ්‍ය ඒකකය, ගන්නෝරුව', 9),
(145, 'පැලෑටි නිරෝධායන ඒකකය, ගුවන්තොටුපොල, යාපනය', 9),
(146, 'රජයේ බීජ ගොවිපල, උල්පතගම', 10),
(147, 'රජයේ බීජ ගොවිපල, බණ්ඩාරගම', 10),
(148, 'රජයේ බීජ නිෂ්පාදන ගොවිපල, වීරපාන', 10),
(149, 'රජයේ බිජ ගොවිපල, එළුවන්කුලම, වනාතවිල්ලුව‍', 10),
(150, 'රජයේ ගොවිපල, ඉඟිනිමිටිය', 10),
(151, 'රජයේ බිජ ගොවිපල, වල්පිට', 10),
(152, 'බිජ, රෝපණ ද්‍රව්‍ය හා ගොවිපල් සංවර්ධන මධ්‍යස්ථානය පේරාදෙණිය', 10),
(153, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, සීතාඑළිය', 10),
(154, 'රජයේ බිජ ගොවිපල, සිතාඑළිය', 10),
(155, 'රජයේ බිජ ගොවිපල, කඳපොල', 10),
(156, 'රජයේ බිජ ගොවිපල, මීපිලිමාන', 10),
(157, 'රජයේ බිජ ගොවිපල, උඩරදැල්ල', 10),
(158, 'රජයේ බිජ ගොවිපල, පිදුරුතලාගල', 10),
(159, 'බීජ නිෂ්පාදන ගොවිපල, රහංගල, බොරලන්ද', 10),
(160, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, අම්පාර', 10),
(161, 'රජයේ බිජ ගොවිපල, මල්වත්ත, අම්පාර', 10),
(162, 'රජයේ බිජ ගොවිපල, කරදියන්ආරු', 10),
(163, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, අළුත්තරම', 10),
(164, 'රජයේ බිජ ගොවිපල, අළුත්තරම', 10),
(165, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කන්තලේ', 10),
(166, 'රජයේ බිජ ගොවිපල, කන්තලේ', 10),
(167, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, පොළොන්නරුව', 10),
(168, 'රජයේ බිජ ගොවිපල, පොළොන්නරුව', 10),
(169, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, වවුනියාව', 10),
(170, 'රජයේ බිජ ගොවිපල, පරන්තන්', 10),
(171, 'රජයේ බිජ ගොවිපල, මුරුන්කන්', 10),
(172, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, නාරාහේන්පිට', 10),
(173, 'රජයේ බිජ ගොවිපල, අඹේපුස්ස', 10),
(174, 'කෘෂි බීජ අලෙවි සැල, කොළඹ 07', 10),
(175, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කුණ්ඩසාලේ', 10),
(176, 'රජයේ බිජ ගොවිපල, කුණ්ඩසාලේ', 10),
(177, 'එළවළු බිජ මධ්‍යස්ථානය, ගන්නෝරුව', 10),
(178, 'බීජ බෝංචි ඒකකය , රිකිල්ලගස්කඩ', 10),
(179, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, නිකවැරටිය', 10),
(180, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, පැල්වෙහෙ‍ර', 10),
(181, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, බට-අත', 10),
(182, 'රජයේ බිජ ගොවිපල, බට-අත', 10),
(183, 'රජයේ බිජ ‍ගොවිපල, අම්බලන්තොට', 10),
(184, 'රජයේ බිජ ගොවිපල, මිද්දෙනිය', 10),
(185, 'කෘෂි බීජ අලෙවි සැල, මාතර', 10),
(186, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, මහඉළුප්පල්ලම', 10),
(187, 'රජයේ බිජ ගොවිපල, මහඉළුප්පල්ලම', 10),
(188, 'කෘෂි බීජ අලෙවි සැල, මහඉළුප්පල්ලම', 10),
(189, 'කෘෂි බීජ අලෙවි සැල, අත්තනගල්ල', 10),
(190, 'සහකාර කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කරදියන්ආරු', 10),
(191, 'සහකාර කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, මුරුන්කන්', 10),
(192, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කිළිනොච්ච්ය', 10),
(193, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, තෙලිජ්ජවිල', 10),
(194, 'කෘෂි බීජ වෙළඳසැල, බතලගොඩ', 10),
(195, 'කෘෂි බීජ වෙළඳසැල, වාගොල්ල', 10),
(196, 'කෘෂි බීජ වෙළඳසැල, මදුරුකැටිය', 10),
(197, 'කෘෂි බීජ වෙළඳසැල, බණ්ඩාරවෙල', 10),
(198, 'කෘෂි බීජ වෙළඳසැල, පරන්තන්', 10),
(199, 'කෘෂි බීජ වෙළඳසැල, පොලොන්නරුව', 10),
(200, 'කෘෂි බීජ වෙළඳසැල, අළුත්තරම', 10),
(201, 'කෘෂි බීජ වෙළඳසැල, අම්බලන්තොට', 10),
(202, 'කෘෂි බීජ වෙළඳසැල, කුණ්ඩසාලේ', 10),
(203, 'කෘෂි බීජ වෙළඳසැල, නිකවැරටිය', 10),
(204, 'කෘෂි බීජ වෙළඳසැල, බටඅත', 10),
(205, 'කෘෂි බීජ වෙළඳසැල, ගන්නොරුව', 10),
(206, 'බීජ අර්තාපල් ගබඩාව, සීතාඑළිය', 10),
(207, 'බීජ නිශ්පාදන ගොවිපල, පැල්වෙහෙර', 10),
(208, 'රජයේ බීජ නිෂ්පාදන ගොවිපල, තෙලිජ්ජවිල', 10),
(209, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, අඹේපුස්ස', 10),
(210, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, වල්පිට', 10),
(211, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, කොළඹ 05', 10),
(212, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, පස්යාල', 10),
(213, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, බත්තරමුල්ල', 10),
(214, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, අම්පාර', 10),
(215, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, කරදියන්ආරු', 10),
(216, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, ඉඟිනිමිටිය', 10),
(217, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, යටියන', 10),
(218, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, පැල්වෙහෙර', 10),
(219, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, තෙලිජ්ජවිල', 10),
(220, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, කල්තොට', 10),
(221, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, වීරපාන', 10),
(222, 'අභ්‍යන්තර විගණන අංශය', 11),
(223, 'ප්‍රධාන ඉංජිනේරු කාර්යාලය පේරාදෙණිය', 12),
(224, 'ගොවිපල් යාන්ත්‍රික පර්යේෂණ මධ්‍යස්ථානය, මහඉළුප්පල්ලම', 12),
(225, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, කුණ්ඩසාලේ', 12),
(226, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, පොළොන්නරුව', 12),
(227, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, අඟුණකොලපැලැස්ස', 12),
(228, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, සීතාඑළිය', 12),
(229, 'ප්‍රගති මෙහෙයුම් හා ඇගයිම් ඒකකය', 13),
(230, 'ස්වභාවික සම්පත් කළමනාකරණ මධ්‍යස්ථානය, පේරාදෙණිය', 14),
(231, 'පාංශු සංරක්ෂණ දැනුම් කළමනාකරණ මධ්‍යස්ථානය,කුණ්ඩසාලේ', 14),
(232, 'ස්වාභාවික සම්පත් කළමනාකරණ හා පාංශු සංරක්ෂණආදර්ශ කේන්ද්‍රය, කුණ්ඩසාලේ', 14),
(233, 'පළතුරු බෝග පර්යේෂණ ස්ථානය ගන්නෝරුව', 15),
(234, 'පළතුරු බෝග පර්යේෂණ ගොවිපල, අඹතැන්න', 15),
(235, 'පළතුරු බෝග පර්යේෂණ ගොවිපල, එරමිණිගොල්ල', 15),
(236, 'පළතුරු බෝග පර්යේෂණ හා සංවර්ධන මධ්‍යස්ථානය, හොරණ', 15),
(237, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, මදුරුකැටිය, මොණරාගල', 15),
(238, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, මුතුකණ්ඩිය', 15),
(239, 'දොඩම් පර්යේෂණ ඒකකය, බිබිල', 15),
(240, 'තිරසාර කෘෂිකර්ම පර්යේෂණ හා සංවර්ධන මධ්‍යස්ථානය, මාකඳුර', 15),
(241, 'පැලෑටි වෛරස් හඳුනා ගැනිමේ මධ්‍යස්ථානය, ‍හෝමාගම', 15),
(242, 'ජාතික පළතුරු ප්‍රභේද සංරක්ෂණ මධ්‍යස්ථානය, කුණ්ඩසාලේ', 15),
(243, 'පරිසර හිතකාමි කෘෂි ඒකකය, දියගම', 15),
(244, 'ප්‍රකාශන ඒකකය, ගන්නෝරුව', 16),
(245, 'කෘෂි ප්‍රකාශන බෙදාහැරීමේ එකකය, පේරාදෙණිය', 16),
(246, 'ගුවන්විදුලි ගොවි සේවාව, කොළඹ 05', 16),
(247, 'කඳුරට ගුවන්විදුලි ගොවි සේවාව, මහනුවර', 16),
(248, 'රුහුණු ගුවන්විදුලි ගොවි සේවාව, මාතර', 16),
(249, 'රජරට ගුවන්විදුලි ගොවි සේවාව, අනුරාධපුරය', 16),
(250, 'චමල් රාජපක්ෂ කෘෂි තාක්ෂණ හා සංචාරක උද්‍යානය, බට-අත', 16),
(251, 'මධ්‍යම පුස්ථකාලය, ගන්නෝරුව', 16),
(252, 'කෘෂි තාක්ෂණ උද්‍යානය, ගන්නෝරුව', 16),
(253, 'ජාතික තොරතුරු හා සන්නිවේදන මධ්‍යස්ථානය, ගන්නොරුව', 16),
(254, 'ගුවන්විදුලි ගොවි සේවාව, උතුරු ඒකකය,යාපනය', 16),
(1, 'කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් කාර්යාලය‍‍‍', 1),
(2, 'අතිරේක කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් ( පර්යේෂණ) කාර්යාලය, පේරාදෙණිය', 1),
(3, 'අතිරේක කෘෂිකර්ම අධ්‍යක්ෂ ජනරාල් (සංවර්ධන) කාර්යාලය, පේරාදෙණිය', 1),
(4, 'අතිරේක අධ්‍යක්ෂ ජනරාල් (පාලන) කාර්යාලය', 2),
(5, 'පා -01 ශාඛාව', 2),
(6, 'පා -02 ශාඛාව', 2),
(7, 'පා -03 ශාඛාව', 2),
(8, 'පා -04 ශාඛාව', 2),
(9, 'පා -05(තැපෑල) ශාඛාව', 2),
(10, 'පා -06 ශාඛාව', 2),
(11, 'පා -07 (සුභසාධක) ශාඛාව', 2),
(12, 'ආ -01 ශාඛාව', 2),
(13, 'ආ -02 ශාඛාව', 2),
(14, 'ආ -03 ශාඛාව', 2),
(15, 'ආ -04 ශාඛාව', 2),
(16, 'ආ -05 ශාඛාව', 2),
(17, 'ආ -06 ශාඛාව', 2),
(18, 'ආ -07 ශාඛාව', 2),
(19, 'ආ -08 ශාඛාව', 2),
(20, 'ආ -09 ශාඛාව', 2),
(21, 'ආ -10 ශාඛාව', 2),
(22, 'ප්‍රධාන ගණකාධිකාරි කාර්යාලය', 3),
(23, 'පොදු ආකාතිපත්‍ර ගබඩාව, කුණ්ඩසාලේ', 3),
(24, 'භාණ්ඩ සමීක්ෂණ අංශය', 3),
(25, 'සංවර්ධන ගිණුම් අංශය', 3),
(26, 'මූල්‍ය කළමනාකරණ', 3),
(27, 'වැටුප් 1 ශාඛාව', 3),
(28, 'වැටුප් II ශාඛාව', 3),
(29, 'රජයේ නිලධාරීන්ගේ අත්තිකාරම් ගිණුම් ශාඛාව', 3),
(30, 'ඉංජිනේරු ගිණුම්', 3),
(31, 'වෙනත් ගෙවිම්', 3),
(32, 'ගොවිපල් ගිණුම්', 3),
(33, 'ව්‍යාපෘති ගිණුම්', 3),
(34, 'සමාජ ආර්ථික සැලසුම් මධ්‍යස්ථානය', 4),
(35, 'උද්‍යාන බෝග පර්යේෂණ හා සංවර්ධන ආයතනය, ගන්නෝරුව‍', 5),
(36, 'උද්‍යාන බෝග පර්යේෂණ ගොවිපල ගන්නෝරුව', 5),
(37, 'උපයෝගිතා පර්යේෂණ ඒකකය, තිබ්බටුමුල්ල', 5),
(38, 'උපයෝගිතා පර්යේෂණ ඒකකය, වාගොල්ල, රඹුක්කන', 5),
(39, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, තෙලිජ්ජවිල', 5),
(40, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, බණ්ඩාරවෙල', 5),
(41, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, රහංගල, බොරලන්ද', 5),
(42, 'උද්‍යාන බෝග පර්යේෂණ ස්ථානය, කල්පිටිය', 5),
(43, 'උපයෝගිතා පර්යේෂණ ඒකකය, තබ්බෝව', 5),
(44, 'උපයෝගිතා පර්යේෂණ ඒකකය, වාරිය‍පොල', 5),
(45, 'උද්‍යාන බෝග පර්යේෂණ ගොවිපල, පස්යාල', 5),
(46, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, ගිරාඳුරුකෝට්ටේ', 5),
(47, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, සීතාඑළිය, නුවරඑළිය', 5),
(48, 'ආහාර පර්යේෂණ ඒකකය, ගන්නෝරුව', 5),
(49, 'වි පර්යේෂණ හා සංවර්ධන ආයතනය, බතලගොඩ, ඉබ්බාගමුව', 6),
(50, 'වි පර්යේෂණ ස්ථානය, අම්බලන්තොට', 6),
(51, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, සමන්‍තුරේ', 6),
(52, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, බෝඹුවල', 6),
(53, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, බෙන්තොට', 6),
(54, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, ‍ලබුදූව, ගාල්ල', 6),
(55, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, පරන්තන්', 6),
(56, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, මුරුන්කන්', 6),
(57, 'ක්ෂේත්‍ර බෝග පර්යේෂණ හා සංවර්ධන ආයතනය, මහඉලුප්පල්ලම', 7),
(58, 'මාෂ සහ තෙල් බෝග පර්යේෂණ හා සංවර්ධන මධ්‍යස්ථානය, අඟුණ‍කොළපැලැස්ස', 7),
(59, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, විරවිල‍', 7),
(60, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, කිලිනොච්චිය', 7),
(61, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, වවුනියාව', 7),
(62, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, තිරුනල්වේලි', 7),
(63, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, අරලගන්විල', 7),
(64, 'ප්‍රාදේශීය කෘෂිකර්ම පර්යේෂණ මධ්‍යස්ථානය, කරදියන්ආරු', 7),
(65, 'ව්‍යාප්ති හා පුහුණු මධ්‍යස්ථානය පේරාදෙණිය', 8),
(66, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, හසලක', 8),
(67, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, අම්පාර', 8),
(68, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, වාවින්න‍', 8),
(69, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, අඩ්ඩාලච්චේන', 8),
(70, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, මොණරාගල', 8),
(71, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, පොළොන්නරුව', 8),
(72, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, පොළොන්නරුව', 8),
(73, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, අනුරාධපුරය', 8),
(74, 'නියෝජ්‍ය අධ්‍යක්ෂ (අන්තර් පළාත්) කාර්යාලය, හම්බන්තොට', 8),
(75, 'දිස්ත්‍රීක් ගොවි පුහුණු මධ්‍යස්ථානය, වීරවිල', 8),
(76, 'කෘෂි ව්‍යාපාර සංවර්ධන හා තොරතුරු මධ්‍යස්ථානය, පේරාදෙණිය', 8),
(77, 'තරුණ ගොවි සමාජ මූලසථානය, පේරාදෙණිය', 8),
(78, 'උද්‍යාන බෝග පුහුණු හා සංවර්ධන ආයතනය, බිබිල', 8),
(79, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, කුණ්ඩසාලේ', 8),
(80, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, පැල්වෙහෙර', 8),
(81, 'ආර්ථික මධ්‍යස්ථානය, දඹුල්ල', 8),
(82, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, වවුනියාව', 8),
(83, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, අඟුණකොලපැලැස්ස', 8),
(84, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, කරපිංච', 8),
(85, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, ලබුදූව', 8),
(86, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, වාරියපොල', 8),
(87, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, අනුරාධපුරය', 8),
(88, 'සේවා සංස්කරණ අභ්‍යාස ආයතනය, ගන්නෝරුව', 8),
(89, 'සේවා සංස්කරණ අභ්‍යාස ආයතනය, අඟුණකොලපැලැස්ස', 8),
(90, 'සේවා සංස්කරණ අභ්‍යාස ආයතනය, හංසයාපාලම', 8),
(91, 'ගොවිපල් යාන්ත්‍රික අභ්‍යාස මධ්‍යස්ථානය, අනුරාධපුරය', 8),
(92, 'මි මැසි සංවර්ධන ව්‍යාපාතිය, බිඳුණුවැව, බණ්ඩාරවෙල', 8),
(93, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, පරන්තන්,කිළිනොච්චිය', 8),
(94, 'ශ්‍රි ලංකා කාෂිකර්ම විද්‍යාලය, පාලමුනේ', 8),
(95, 'බිජ සහතික කිරිම් හා පැලෑටි සංරක්ෂණ මධ්‍යස්ථානය, ගන්නෝරුව', 9),
(96, 'බිජ සහතික කිරිමේ සේවය, ගන්නෝරුව', 9),
(97, 'බිජ සහතික කිරිමේ සේවය, අළුත්තරම', 9),
(98, 'බිජ සහතික කිරිමේ සේවය, බට-අත', 9),
(99, 'බිජ සහතික කිරිමේ සේවය, මහඉළුප්පල්ලම', 9),
(100, 'බිජ සහතික කිරිමේ සේවය, නිකරවැරටිය', 9),
(101, 'බිජ සහතික කිරිමේ සේවය, පැල්වෙහෙර', 9),
(102, 'බිජ සහතික කිරිමේ සේවය, පොළොන්නරුව', 9),
(103, 'බිජ සහතික කිරිමේ සේවය, බිබිල', 9),
(104, 'බිජ සහතික කිරිමේ සේවය, හිඟුරක්ගොඩ', 9),
(105, 'බිජ සහතික කිරිමේ සේවය, කන්තලේ', 9),
(106, 'බිජ සහතික කිරිමේ සේවය, කුණ්ඩසාලේ‍', 9),
(107, 'බිජ සහතික කිරිමේ සේවය, සීතාඑලිය', 9),
(108, 'බිජ සහතික කිරිමේ සේවය, අම්පාර', 9),
(109, 'බිජ සහතික කිරිමේ සේවය, බතලගොඩ', 9),
(110, 'බිජ සහතික කිරිමේ සේවය, මඩකලපුව', 9),
(111, 'බිජ සහතික කිරිමේ සේවය, කොළඹ', 9),
(112, 'බිජ සහතික කිරිමේ සේවය, ලබුදූව', 9),
(113, 'බිජ සහතික කිරිමේ සේවය, මුරුන්කන්', 9),
(114, 'බිජ සහතික කිරිමේ සේවය, පැල්මඩුල්ල', 9),
(115, 'බිජ සහතික කිරිමේ සේවය, රිකිල්ලගස්කඩ', 9),
(116, 'බිජ සහතික කිරිමේ සේවය, වවුනියාව', 9),
(117, 'බීජ පරීක්ෂණාගාරය, පේරාදෙණිය', 9),
(118, 'බීජ පරීක්ෂණාගාරය, මහඉළුප්පල්ලම', 9),
(119, 'බීජ පරීක්ෂණාගාරය, අළුත්තරම', 9),
(120, 'බීජ පරීක්ෂණාගාරය, බට-අත', 9),
(121, 'පශ්චාත් පාලන ක්ෂේත්‍රය I , ගන්නෝරුව', 9),
(122, 'පශ්චාත් පාලන ක්ෂේත්‍රය, සිතාඑලිය', 9),
(123, 'පශ්චාත් පාලන ක්ෂේත්‍රය, මහඉළුප්පල්ලම', 9),
(124, 'පැලෑටි සංරක්ෂණ සේවය, ගන්නෝරුව, පේරාදෙණිය', 9),
(125, 'පැලෑටි සංරක්ෂණ සේවය, මහඉළුප්පල්ලම', 9),
(126, 'පැලෑටි සංරක්ෂණ සේවය, බෝඹුවල, කළුතර', 9),
(127, 'පැලෑටි ජාන සම්පත් මධ්‍යස්ථානය, ගන්නෝරුව', 9),
(128, 'පළිබෝධනාශක රෙජිස්ට්‍රාර් කාර්යාලය, පේරාදෙණිය', 9),
(129, 'ජාතික පැලෑටි නිරෝධායන සේවය, කැනඩා මිත්‍රත්ව මාවත, කටුනායක', 9),
(130, 'පැලෑටි නිරෝධායන ඒකකය, ගුවන්තොටුපොල, කටුනායක', 9),
(131, 'පැලෑටි නිරෝධායන ඒකකය, බැගඩෑඩ් දොරටුව, කොළඹ වරාය', 9),
(132, 'බිජ සහතික කිරිමේ සේවය, මාතර‍', 9),
(133, 'බිජ සහතික කිරිමේ සේවය, මතුගම', 9),
(134, 'බිජ සහතික කිරිමේ සේවය, මුලතිව්', 9),
(135, 'පශ්චාත් පාලන ක්ෂේත්‍රය හා බීජ කෞතුකාගාරය, බට-අත', 9),
(136, 'බිජ සහතික කිරිමේ සේවය, යාපනය', 9),
(137, 'බිජ සහතික කිරිමේ සේවය, පරන්තන්', 9),
(138, 'පැලෑටි නිරෝධායන ඒකකය, ගන්නොරුව', 9),
(139, 'බීජ පරීක්ෂණාගාරය, පරන්තන්', 9),
(140, 'පැලෑටි නිරෝධායන ඒකකය, ගුවන්තොටුපොල, මත්තල', 9),
(141, 'පැලෑටි නිරෝධායන ඒකකය, හම්බන්තොට වරාය', 9),
(142, 'පශ්චාත් පාලන ක්ෂේත්‍ර අංක II, ගන්නෝරුව', 9),
(143, 'පශ්චාත් පාලන ක්ෂේත්‍ර , කරදියන්ආරු', 9),
(144, 'බීජ සෞඛ්‍ය ඒකකය, ගන්නෝරුව', 9),
(145, 'පැලෑටි නිරෝධායන ඒකකය, ගුවන්තොටුපොල, යාපනය', 9),
(146, 'රජයේ බීජ ගොවිපල, උල්පතගම', 10),
(147, 'රජයේ බීජ ගොවිපල, බණ්ඩාරගම', 10),
(148, 'රජයේ බීජ නිෂ්පාදන ගොවිපල, වීරපාන', 10),
(149, 'රජයේ බිජ ගොවිපල, එළුවන්කුලම, වනාතවිල්ලුව‍', 10),
(150, 'රජයේ ගොවිපල, ඉඟිනිමිටිය', 10),
(151, 'රජයේ බිජ ගොවිපල, වල්පිට', 10),
(152, 'බිජ, රෝපණ ද්‍රව්‍ය හා ගොවිපල් සංවර්ධන මධ්‍යස්ථානය පේරාදෙණිය', 10),
(153, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, සීතාඑළිය', 10),
(154, 'රජයේ බිජ ගොවිපල, සිතාඑළිය', 10),
(155, 'රජයේ බිජ ගොවිපල, කඳපොල', 10),
(156, 'රජයේ බිජ ගොවිපල, මීපිලිමාන', 10),
(157, 'රජයේ බිජ ගොවිපල, උඩරදැල්ල', 10),
(158, 'රජයේ බිජ ගොවිපල, පිදුරුතලාගල', 10),
(159, 'බීජ නිෂ්පාදන ගොවිපල, රහංගල, බොරලන්ද', 10),
(160, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, අම්පාර', 10),
(161, 'රජයේ බිජ ගොවිපල, මල්වත්ත, අම්පාර', 10),
(162, 'රජයේ බිජ ගොවිපල, කරදියන්ආරු', 10),
(163, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, අළුත්තරම', 10),
(164, 'රජයේ බිජ ගොවිපල, අළුත්තරම', 10),
(165, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කන්තලේ', 10),
(166, 'රජයේ බිජ ගොවිපල, කන්තලේ', 10),
(167, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, පොළොන්නරුව', 10),
(168, 'රජයේ බිජ ගොවිපල, පොළොන්නරුව', 10),
(169, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, වවුනියාව', 10),
(170, 'රජයේ බිජ ගොවිපල, පරන්තන්', 10),
(171, 'රජයේ බිජ ගොවිපල, මුරුන්කන්', 10),
(172, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, නාරාහේන්පිට', 10),
(173, 'රජයේ බිජ ගොවිපල, අඹේපුස්ස', 10),
(174, 'කෘෂි බීජ අලෙවි සැල, කොළඹ 07', 10),
(175, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කුණ්ඩසාලේ', 10),
(176, 'රජයේ බිජ ගොවිපල, කුණ්ඩසාලේ', 10),
(177, 'එළවළු බිජ මධ්‍යස්ථානය, ගන්නෝරුව', 10),
(178, 'බීජ බෝංචි ඒකකය , රිකිල්ලගස්කඩ', 10),
(179, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, නිකවැරටිය', 10),
(180, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, පැල්වෙහෙ‍ර', 10),
(181, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, බට-අත', 10),
(182, 'රජයේ බිජ ගොවිපල, බට-අත', 10),
(183, 'රජයේ බිජ ‍ගොවිපල, අම්බලන්තොට', 10),
(184, 'රජයේ බිජ ගොවිපල, මිද්දෙනිය', 10),
(185, 'කෘෂි බීජ අලෙවි සැල, මාතර', 10),
(186, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, මහඉළුප්පල්ලම', 10),
(187, 'රජයේ බිජ ගොවිපල, මහඉළුප්පල්ලම', 10),
(188, 'කෘෂි බීජ අලෙවි සැල, මහඉළුප්පල්ලම', 10),
(189, 'කෘෂි බීජ අලෙවි සැල, අත්තනගල්ල', 10),
(190, 'සහකාර කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කරදියන්ආරු', 10),
(191, 'සහකාර කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, මුරුන්කන්', 10),
(192, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, කිළිනොච්ච්ය', 10),
(193, 'නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ (බී. රෝ. ද්‍ර.) කාර්යාලය, තෙලිජ්ජවිල', 10),
(194, 'කෘෂි බීජ වෙළඳසැල, බතලගොඩ', 10),
(195, 'කෘෂි බීජ වෙළඳසැල, වාගොල්ල', 10),
(196, 'කෘෂි බීජ වෙළඳසැල, මදුරුකැටිය', 10),
(197, 'කෘෂි බීජ වෙළඳසැල, බණ්ඩාරවෙල', 10),
(198, 'කෘෂි බීජ වෙළඳසැල, පරන්තන්', 10),
(199, 'කෘෂි බීජ වෙළඳසැල, පොලොන්නරුව', 10),
(200, 'කෘෂි බීජ වෙළඳසැල, අළුත්තරම', 10),
(201, 'කෘෂි බීජ වෙළඳසැල, අම්බලන්තොට', 10),
(202, 'කෘෂි බීජ වෙළඳසැල, කුණ්ඩසාලේ', 10),
(203, 'කෘෂි බීජ වෙළඳසැල, නිකවැරටිය', 10),
(204, 'කෘෂි බීජ වෙළඳසැල, බටඅත', 10),
(205, 'කෘෂි බීජ වෙළඳසැල, ගන්නොරුව', 10),
(206, 'බීජ අර්තාපල් ගබඩාව, සීතාඑළිය', 10),
(207, 'බීජ නිශ්පාදන ගොවිපල, පැල්වෙහෙර', 10),
(208, 'රජයේ බීජ නිෂ්පාදන ගොවිපල, තෙලිජ්ජවිල', 10),
(209, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, අඹේපුස්ස', 10),
(210, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, වල්පිට', 10),
(211, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, කොළඹ 05', 10),
(212, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, පස්යාල', 10),
(213, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, බත්තරමුල්ල', 10),
(214, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, අම්පාර', 10),
(215, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, කරදියන්ආරු', 10),
(216, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, ඉඟිනිමිටිය', 10),
(217, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, යටියන', 10),
(218, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, පැල්වෙහෙර', 10),
(219, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, තෙලිජ්ජවිල', 10),
(220, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, කල්තොට', 10),
(221, 'බීජ හා රෝපණ ද්‍රව්‍ය අළලවිසැල, වීරපාන', 10),
(222, 'අභ්‍යන්තර විගණන අංශය', 11),
(223, 'ප්‍රධාන ඉංජිනේරු කාර්යාලය පේරාදෙණිය', 12),
(224, 'ගොවිපල් යාන්ත්‍රික පර්යේෂණ මධ්‍යස්ථානය, මහඉළුප්පල්ලම', 12),
(225, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, කුණ්ඩසාලේ', 12),
(226, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, පොළොන්නරුව', 12),
(227, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, අඟුණකොලපැලැස්ස', 12),
(228, 'ප්‍රාදේශීය ඉංජිනේරු වැඩපල, සීතාඑළිය', 12),
(229, 'ප්‍රගති මෙහෙයුම් හා ඇගයිම් ඒකකය', 13),
(230, 'ස්වභාවික සම්පත් කළමනාකරණ මධ්‍යස්ථානය, පේරාදෙණිය', 14),
(231, 'පාංශු සංරක්ෂණ දැනුම් කළමනාකරණ මධ්‍යස්ථානය,කුණ්ඩසාලේ', 14),
(232, 'ස්වාභාවික සම්පත් කළමනාකරණ හා පාංශු සංරක්ෂණආදර්ශ කේන්ද්‍රය, කුණ්ඩසාලේ', 14),
(233, 'පළතුරු බෝග පර්යේෂණ ස්ථානය ගන්නෝරුව', 15),
(234, 'පළතුරු බෝග පර්යේෂණ ගොවිපල, අඹතැන්න', 15),
(235, 'පළතුරු බෝග පර්යේෂණ ගොවිපල, එරමිණිගොල්ල', 15),
(236, 'පළතුරු බෝග පර්යේෂණ හා සංවර්ධන මධ්‍යස්ථානය, හොරණ', 15),
(237, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, මදුරුකැටිය, මොණරාගල', 15),
(238, 'කෘෂිකර්ම පර්යේෂණ ස්ථානය, මුතුකණ්ඩිය', 15),
(239, 'දොඩම් පර්යේෂණ ඒකකය, බිබිල', 15),
(240, 'තිරසාර කෘෂිකර්ම පර්යේෂණ හා සංවර්ධන මධ්‍යස්ථානය, මාකඳුර', 15),
(241, 'පැලෑටි වෛරස් හඳුනා ගැනිමේ මධ්‍යස්ථානය, ‍හෝමාගම', 15),
(242, 'ජාතික පළතුරු ප්‍රභේද සංරක්ෂණ මධ්‍යස්ථානය, කුණ්ඩසාලේ', 15),
(243, 'පරිසර හිතකාමි කෘෂි ඒකකය, දියගම', 15),
(244, 'ප්‍රකාශන ඒකකය, ගන්නෝරුව', 16),
(245, 'කෘෂි ප්‍රකාශන බෙදාහැරීමේ එකකය, පේරාදෙණිය', 16),
(246, 'ගුවන්විදුලි ගොවි සේවාව, කොළඹ 05', 16),
(247, 'කඳුරට ගුවන්විදුලි ගොවි සේවාව, මහනුවර', 16),
(248, 'රුහුණු ගුවන්විදුලි ගොවි සේවාව, මාතර', 16),
(249, 'රජරට ගුවන්විදුලි ගොවි සේවාව, අනුරාධපුරය', 16),
(250, 'චමල් රාජපක්ෂ කෘෂි තාක්ෂණ හා සංචාරක උද්‍යානය, බට-අත', 16),
(251, 'මධ්‍යම පුස්ථකාලය, ගන්නෝරුව', 16),
(252, 'කෘෂි තාක්ෂණ උද්‍යානය, ගන්නෝරුව', 16),
(253, 'ජාතික තොරතුරු හා සන්නිවේදන මධ්‍යස්ථානය, ගන්නොරුව', 16),
(254, 'ගුවන්විදුලි ගොවි සේවාව, උතුරු ඒකකය,යාපනය', 16);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;