-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2018 at 06:48 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.11-2+0~20181015120801.9+stretch~1.gbp8105e0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masterlangg_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `lang_list`
--

CREATE TABLE `lang_list` (
  `id_lang` int(11) NOT NULL,
  `lang_name` varchar(3) NOT NULL,
  `lang_fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lang_list`
--

INSERT INTO `lang_list` (`id_lang`, `lang_name`, `lang_fullname`) VALUES
(1, 'az', 'Azerbaijan'),
(2, 'sq', 'Albanian'),
(3, 'am', 'Amharic'),
(4, 'en', 'English'),
(5, 'ar', 'Arabic'),
(6, 'hy', 'Armenian'),
(7, 'af', 'Afrikaans'),
(8, 'eu', 'Basque'),
(9, 'ba', 'Bashkir'),
(10, 'be', 'Belarusian'),
(11, 'bn', 'Bengali'),
(12, 'my', 'Burmese'),
(13, 'bg', 'Bulgarian'),
(14, 'bs', 'Bosnian'),
(15, 'cy', 'Welsh'),
(16, 'hu', 'Hungarian'),
(17, 'vi', 'Vietnamese'),
(18, 'ht', 'Haitian (Creole)'),
(19, 'gl', 'Galician'),
(20, 'nl', 'Dutch'),
(21, 'mrj', 'Hill Mari'),
(22, 'el', 'Greek'),
(23, 'ka', 'Georgian'),
(24, 'gu', 'Gujarati'),
(25, 'da', 'Danish'),
(26, 'he', 'Hebrew'),
(27, 'yi', 'Yiddish'),
(28, 'id', 'Indonesian'),
(29, 'ga', 'Irish'),
(30, 'it', 'Italian'),
(31, 'is', 'Icelandic'),
(32, 'es', 'Spanish'),
(33, 'kk', 'Kazakh'),
(34, 'kn', 'Kannada'),
(35, 'ca', 'Catalan'),
(36, 'ky', 'Kyrgyz'),
(37, 'zh', 'Chinese'),
(38, 'ko', 'Korean'),
(39, 'xh', 'Xhosa'),
(40, 'km', 'Khmer'),
(41, 'lo', 'Laotian'),
(42, 'la', 'Latin'),
(43, 'lv', 'Latvian'),
(44, 'lt', 'Lithuanian'),
(45, 'lb', 'Luxembourgish'),
(46, 'mg', 'Malagasy'),
(47, 'ms', 'Malay'),
(48, 'ml', 'Malayalam'),
(49, 'mt', 'Maltese'),
(50, 'mk', 'Macedonian'),
(51, 'mi', 'Maori'),
(52, 'mr', 'Marathi'),
(53, 'mhr', 'Mari'),
(54, 'mn', 'Mongolian'),
(55, 'de', 'German'),
(56, 'ne', 'Nepali'),
(57, 'no', 'Norwegian'),
(58, 'pa', 'Punjabi'),
(59, 'pap', 'Papiamento'),
(60, 'fa', 'Persian'),
(61, 'pl', 'Polish'),
(62, 'pt', 'Portuguese'),
(63, 'ro', 'Romanian'),
(64, 'ru', 'Russian'),
(65, 'ceb', 'Cebuano'),
(66, 'sr', 'Serbian'),
(67, 'si', 'Sinhala'),
(68, 'sk', 'Slovakian'),
(69, 'sl', 'Slovenian'),
(70, 'sw', 'Swahili'),
(71, 'su', 'Sundanese'),
(72, 'tg', 'Tajik'),
(73, 'th', 'Thai'),
(74, 'tl', 'Tagalog'),
(75, 'ta', 'Tamil'),
(76, 'tt', 'Tatar'),
(77, 'te', 'Telugu'),
(78, 'tr', 'Turkish'),
(79, 'udm', 'Udmurt'),
(80, 'uz', 'Uzbek'),
(81, 'uk', 'Ukrainian'),
(82, 'ur', 'Urdu'),
(83, 'fi', 'Finnish'),
(84, 'fr', 'French'),
(85, 'hi', 'Hindi'),
(86, 'hr', 'Croatian'),
(87, 'cs', 'Czech'),
(88, 'sv', 'Swedish'),
(89, 'gd', 'Scottish'),
(90, 'et', 'Estonian'),
(91, 'eo', 'Esperanto'),
(92, 'jv', 'Javanese'),
(93, 'ja', 'Japanese');

-- --------------------------------------------------------

--
-- Table structure for table `user_cache`
--

CREATE TABLE `user_cache` (
  `id_cache` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `difficulty` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_cache`
--

INSERT INTO `user_cache` (`id_cache`, `id_user`, `score`, `difficulty`, `time`) VALUES
(1, 1, 128, 'easy', 180);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id_user` int(11) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id_user`, `nick`, `pass`, `email`) VALUES
(1, 'admin123', '1234', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_ranking`
--

CREATE TABLE `user_ranking` (
  `id_ranking` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_ranking`
--

INSERT INTO `user_ranking` (`id_ranking`, `id_user`, `nick`, `score`) VALUES
(1, 1, 'admin123', 128);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lang_list`
--
ALTER TABLE `lang_list`
  ADD PRIMARY KEY (`id_lang`);

--
-- Indexes for table `user_cache`
--
ALTER TABLE `user_cache`
  ADD PRIMARY KEY (`id_cache`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `score` (`score`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nick_2` (`nick`);
ALTER TABLE `user_data` ADD FULLTEXT KEY `nick` (`nick`);

--
-- Indexes for table `user_ranking`
--
ALTER TABLE `user_ranking`
  ADD PRIMARY KEY (`id_ranking`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `score` (`score`),
  ADD UNIQUE KEY `nick_2` (`nick`);
ALTER TABLE `user_ranking` ADD FULLTEXT KEY `nick` (`nick`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lang_list`
--
ALTER TABLE `lang_list`
  MODIFY `id_lang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `user_cache`
--
ALTER TABLE `user_cache`
  MODIFY `id_cache` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_ranking`
--
ALTER TABLE `user_ranking`
  MODIFY `id_ranking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_cache`
--
ALTER TABLE `user_cache`
  ADD CONSTRAINT `user_cache_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_data` (`id_user`) ON UPDATE CASCADE;

--
-- Constraints for table `user_ranking`
--
ALTER TABLE `user_ranking`
  ADD CONSTRAINT `user_ranking_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_data` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ranking_ibfk_2` FOREIGN KEY (`score`) REFERENCES `user_cache` (`score`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ranking_ibfk_3` FOREIGN KEY (`nick`) REFERENCES `user_data` (`nick`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
