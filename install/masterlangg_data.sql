-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2018 at 05:13 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.12-1+0~20181112102304.11+stretch~1.gbp55f215

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
(1, 'zh', 'Chinese'),
(2, 'es', 'Spanish'),
(3, 'en', 'English'),
(4, 'hi', 'Hindi'),
(5, 'ar', 'Arabic'),
(6, 'pt', 'Portuguese'),
(7, 'bn', 'Bengali'),
(8, 'ru', 'Russian'),
(9, 'ja', 'Japanese'),
(10, 'pa', 'Punjabi'),
(11, 'de', 'German'),
(12, 'jv', 'Javanese'),
(13, 'ms', 'Malay'),
(14, 'te', 'Telugu'),
(15, 'vi', 'Vietnamese'),
(16, 'ko', 'Korean'),
(17, 'fr', 'French'),
(18, 'mr', 'Marathi'),
(19, 'ta', 'Tamil'),
(20, 'ur', 'Urdu'),
(21, 'tr', 'Turkish'),
(22, 'it', 'Italian'),
(23, 'th', 'Thai'),
(24, 'gu', 'Gujarati'),
(25, 'fa', 'Persian'),
(26, 'pl', 'Polish'),
(27, 'kn', 'Kannada'),
(28, 'ml', 'Malayalam'),
(29, 'su', 'Sundanese'),
(30, 'my', 'Burmese'),
(31, 'uk', 'Ukrainian'),
(32, 'tl', 'Tagalog'),
(33, 'la', 'Latin'),
(34, 'uz', 'Uzbek'),
(35, 'si', 'Sinhala'),
(36, 'am', 'Amharic'),
(37, 'ro', 'Romanian'),
(38, 'az', 'Azerbaijan'),
(39, 'ceb', 'Cebuano'),
(40, 'nl', 'Dutch'),
(41, 'sr', 'Serbian'),
(42, 'mg', 'Malagasy'),
(43, 'ne', 'Nepali'),
(44, 'km', 'Khmer'),
(45, 'el', 'Greek'),
(46, 'sq', 'Albanian'),
(47, 'hy', 'Armenian'),
(48, 'af', 'Afrikaans'),
(49, 'eu', 'Basque'),
(50, 'ba', 'Bashkir'),
(51, 'be', 'Belarusian'),
(52, 'bg', 'Bulgarian'),
(53, 'bs', 'Bosnian'),
(54, 'cy', 'Welsh'),
(55, 'hu', 'Hungarian'),
(56, 'ht', 'Haitian (Creole)'),
(57, 'gl', 'Galician'),
(58, 'mrj', 'Hill Mari'),
(59, 'ka', 'Georgian'),
(60, 'da', 'Danish'),
(61, 'he', 'Hebrew'),
(62, 'yi', 'Yiddish'),
(63, 'id', 'Indonesian'),
(64, 'ga', 'Irish'),
(65, 'is', 'Icelandic'),
(66, 'kk', 'Kazakh'),
(67, 'ca', 'Catalan'),
(68, 'ky', 'Kyrgyz'),
(69, 'xh', 'Xhosa'),
(70, 'lo', 'Laotian'),
(71, 'lv', 'Latvian'),
(72, 'lt', 'Lithuanian'),
(73, 'lb', 'Luxembourgish'),
(74, 'mt', 'Maltese'),
(75, 'mk', 'Macedonian'),
(76, 'mi', 'Maori'),
(77, 'mhr', 'Mari'),
(78, 'mn', 'Mongolian'),
(79, 'no', 'Norwegian'),
(80, 'pap', 'Papiamento'),
(81, 'sk', 'Slovakian (Creole)'),
(82, 'sl', 'Slovenian'),
(83, 'sw', 'Swahili'),
(84, 'tg', 'Tajik'),
(85, 'tt', 'Tatar'),
(86, 'udm', 'Udmurt'),
(87, 'fi', 'Finnish'),
(88, 'hr', 'Croatian'),
(89, 'cs', 'Czech'),
(90, 'sv', 'Swedish'),
(91, 'gd', 'Scottish'),
(92, 'et', 'Estonian'),
(93, 'eo', 'Esperanto');

-- --------------------------------------------------------

--
-- Table structure for table `user_cache`
--

CREATE TABLE `user_cache` (
  `id_cache` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `difficulty` text NOT NULL,
  `time` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_cache`
--

INSERT INTO `user_cache` (`id_cache`, `id_user`, `difficulty`, `time`, `score`) VALUES
(6, 6, 'EASY', 60, 1000000),
(7, 7, 'EASY', 60, 5000),
(8, 8, 'EASY', 60, 2000),
(9, 9, 'EASY', 60, 10000),
(10, 10, 'EASY', 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id_user` int(11) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL,
  `access_code` text,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id_user`, `nick`, `pass`, `email`, `access_code`, `active`) VALUES
(6, 'admin', '$2y$10$BF8v2NCqBzOBmT/YkDQRxOr9OhkoqiQcGI2Bor4alHzzf//TN1XFu', 'admin@webstrong.pl', 'McRn6q7eNRqR9pgJNWG3MyoA1VeqVMtP', 1),
(7, 'tester1', '$2y$10$A1qWzPwaWlnGvW0XQvfGYeEPM2A/m.lNqxKesbRYyVHCXdiuKk3Oq', 'tester1@webstrong.pl', 'ByULLcVdzWGAkn0xVhC1JJfTkSG8Rn0M', 1),
(8, 'tester2', '$2y$10$SWjRXqYa9oqUJfPB1hF9V.DLv2HfvlK24/BLq0Vo6MoOSHXVX8Y62', 'tester2@webstrong.pl', 'EI13p08hkaPTtzFgSzqCJny4q8mIxDGv', 1),
(9, 'tester3', '$2y$10$eQj7sxFAk/OXOaK4YzOrZOf3Cdg8vQGb2ZyhrdmBqkzoWd4KLDKZ.', 'tester3@webstrong.pl', 'R2UFLJul8m3GhQaJ1y53iOAvCrwg0hbf', 1),
(10, 'tester4', '$2y$10$M3D0/pwZmurTCL/NRlsqpOJpWZYE2GASMoAtpH4IlBZduCMNJr1EG', 'tester4@webstrong.pl', 'RNjuTbNZNkwmlN1nThsVAbzlYOnq0eRr', 0);

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
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nick_2` (`nick`);
ALTER TABLE `user_data` ADD FULLTEXT KEY `nick` (`nick`);

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
  MODIFY `id_cache` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
