-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 05:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muslim`
--

-- --------------------------------------------------------

--
-- Table structure for table `sour`
--

CREATE TABLE `sour` (
  `id` int(3) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `url` varchar(400) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sour`
--

INSERT INTO `sour` (`id`, `name`, `url`) VALUES
(1, 'الفاتحة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/001.mp3'),
(2, 'البقرة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/002.mp3'),
(3, 'آل عمران', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/003.mp3'),
(4, 'النساء', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/004.mp3'),
(5, 'المائدة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/005.mp3'),
(6, 'الأنعام', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/006.mp3'),
(7, 'الأعراف', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/007.mp3'),
(8, 'الأنفال', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/008.mp3'),
(9, 'التوبة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/009.mp3'),
(10, 'يونس', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/010.mp3'),
(11, 'هود', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/011.mp3'),
(12, 'يوسف', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/012.mp3'),
(13, 'الرعد', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/013.mp3'),
(14, 'إبراهيم', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/014.mp3'),
(15, 'الحجر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/015.mp3'),
(16, 'النحل', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/016.mp3'),
(17, 'الإسراء', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/017.mp3'),
(18, 'الكهف', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/018.mp3'),
(19, 'مريم', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/019.mp3'),
(20, 'طه', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/020.mp3'),
(21, 'الأنبياء', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/021.mp3'),
(22, 'الحج', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/022.mp3'),
(23, 'المؤمنون', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/023.mp3'),
(24, 'النور', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/024.mp3'),
(25, 'الفرقان', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/025.mp3'),
(26, 'الشعراء', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/026.mp3'),
(27, 'النمل', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/027.mp3'),
(28, 'القصص', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/028.mp3'),
(29, 'العنكبوت', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/029.mp3'),
(30, 'الروم', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/030.mp3'),
(31, 'لقمان', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/031.mp3'),
(32, 'السجدة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/032.mp3'),
(33, 'الأحزاب', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/033.mp3'),
(34, 'سبأ', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/034.mp3'),
(35, 'فاطر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/035.mp3'),
(36, 'يس', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/036.mp3'),
(37, 'الصافات', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/037.mp3'),
(38, 'ص', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/038.mp3'),
(39, 'الزمر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/039.mp3'),
(40, 'غافر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/040.mp3'),
(41, 'فصلت', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/041.mp3'),
(42, 'الشورى', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/042.mp3'),
(43, 'الزخرف ', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/043.mp3'),
(44, 'الدخان', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/044.mp3'),
(45, 'الجاثية', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/045.mp3'),
(46, 'الأحقاف', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/046.mp3'),
(47, 'محمد', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/047.mp3'),
(48, 'الفتح', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/048.mp3'),
(49, 'الحجرات', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/049.mp3'),
(50, 'ق', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/050.mp3'),
(51, 'الذاريات', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/051.mp3'),
(52, 'الطور', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/052.mp3'),
(53, 'النجم', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/053.mp3'),
(54, 'القمر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/054.mp3'),
(55, 'الرحمن', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/055.mp3'),
(56, 'الواقعة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/056.mp3'),
(57, 'الحديد', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/057.mp3'),
(58, 'المجادلة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/058.mp3'),
(59, 'الحشر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/059.mp3'),
(60, 'الممتحنة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/060.mp3'),
(61, 'الصف', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/061.mp3'),
(62, 'الجمعة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/062.mp3'),
(63, 'المنافقون', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/063.mp3'),
(64, 'التغابن', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/064.mp3'),
(65, 'الطلاق', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/065.mp3'),
(66, 'التحريم', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/066.mp3'),
(67, 'الملك', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/067.mp3'),
(68, 'القلم', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/068.mp3'),
(69, 'الحاقة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/069.mp3'),
(70, 'المعارج', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/070.mp3'),
(71, 'نوح', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/071.mp3'),
(72, 'الجن', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/072.mp3'),
(73, 'المزمل', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/073.mp3'),
(74, 'المدثر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/074.mp3'),
(75, 'القيامة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/075.mp3'),
(76, 'الإنسان', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/076.mp3'),
(77, 'المرسلات', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/077.mp3'),
(78, 'النبأ', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/078.mp3'),
(79, 'النازعات', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/079.mp3'),
(80, 'عبس', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/080.mp3'),
(81, 'التكوير', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/081.mp3'),
(82, 'الانفطار', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/082.mp3'),
(83, 'المطففين', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/083.mp3'),
(84, 'الانشقاق', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/084.mp3'),
(85, 'البروج', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/085.mp3'),
(86, 'الطارق', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/086.mp3'),
(87, 'الأعلى', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/087.mp3'),
(88, 'الغاشية', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/088.mp3'),
(89, 'الفجر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/089.mp3'),
(90, 'البلد', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/090.mp3'),
(91, 'الشمس', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/091.mp3'),
(92, 'الليل', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/092.mp3'),
(93, 'الضحى', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/093.mp3'),
(94, 'الشرح', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/094.mp3'),
(95, 'التين', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/095.mp3'),
(96, 'العلق', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/096.mp3'),
(97, 'القدر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/097.mp3'),
(98, 'البينة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/098.mp3'),
(99, 'الزلزلة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/099.mp3'),
(100, 'العاديات', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/100.mp3'),
(101, 'القارعة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/101.mp3'),
(102, 'التكاثر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/102.mp3'),
(103, 'العصر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/103.mp3'),
(104, 'الهُمزة', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/104.mp3'),
(105, 'الفيل', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/105.mp3'),
(106, 'قريش', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/106.mp3'),
(107, 'الماعون', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/107.mp3'),
(108, 'الكوثر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/108.mp3'),
(109, 'الكافرون', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/109.mp3'),
(110, 'النصر', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/110.mp3'),
(111, 'المسد', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/111.mp3'),
(112, 'الإخلاص', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/112.mp3'),
(113, 'الفلق', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/113.mp3'),
(114, 'الناس', 'https://server12.mp3quran.net/maher/Almusshaf-Al-Mojawwad/114.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
