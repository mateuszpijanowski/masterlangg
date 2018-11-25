-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 11:55 AM
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
-- Table structure for table `lang_easy`
--

CREATE TABLE `lang_easy` (
  `id_lang` int(11) NOT NULL,
  `lang_name` varchar(3) NOT NULL,
  `lang_fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lang_easy`
--

INSERT INTO `lang_easy` (`id_lang`, `lang_name`, `lang_fullname`) VALUES
(1, 'sq', 'Albanian'),
(2, 'ar', 'Arabic'),
(3, 'zh', 'Chinese'),
(4, 'cs', 'Czech'),
(5, 'en', 'English'),
(6, 'fr', 'French'),
(7, 'de', 'German'),
(8, 'el', 'Greek'),
(9, 'it', 'Italian'),
(10, 'ja', 'Japanese'),
(11, 'jv', 'Javanese'),
(12, 'no', 'Norwegian'),
(13, 'pl', 'Polish'),
(14, 'pt', 'Portuguese'),
(15, 'ru', 'Russian'),
(16, 'gd', 'Scottish'),
(17, 'es', 'Spanish'),
(18, 'sv', 'Swedish'),
(19, 'tr', 'Turkish'),
(20, 'uk', 'Ukrainian');

-- --------------------------------------------------------

--
-- Table structure for table `lang_hard`
--

CREATE TABLE `lang_hard` (
  `id_lang` int(11) NOT NULL,
  `lang_name` varchar(3) NOT NULL,
  `lang_fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lang_hard`
--

INSERT INTO `lang_hard` (`id_lang`, `lang_name`, `lang_fullname`) VALUES
(1, 'af', 'Afrikaans'),
(2, 'sq', 'Albanian'),
(3, 'am', 'Amharic'),
(4, 'ar', 'Arabic'),
(5, 'hy', 'Armenian'),
(6, 'az', 'Azerbaijan'),
(7, 'ba', 'Bashkir'),
(8, 'eu', 'Basque'),
(9, 'be', 'Belarusian'),
(10, 'bs', 'Bosnian'),
(11, 'bg', 'Bulgarian'),
(12, 'my', 'Burmese'),
(13, 'ca', 'Catalan'),
(14, 'ceb', 'Cebuano'),
(15, 'zh', 'Chinese'),
(16, 'hr', 'Croatian'),
(17, 'cs', 'Czech'),
(18, 'da', 'Danish'),
(19, 'nl', 'Dutch'),
(20, 'en', 'English'),
(21, 'eo', 'Esperanto'),
(22, 'et', 'Estonian'),
(23, 'fi', 'Finnish'),
(24, 'fr', 'French'),
(25, 'gl', 'Galician'),
(26, 'ka', 'Georgian'),
(27, 'de', 'German'),
(28, 'el', 'Greek'),
(29, 'ht', 'Haitian (Creole)'),
(30, 'he', 'Hebrew'),
(31, 'mrj', 'Hill Mari'),
(32, 'hu', 'Hungarian'),
(33, 'is', 'Icelandic'),
(34, 'id', 'Indonesian'),
(35, 'ga', 'Irish'),
(36, 'it', 'Italian'),
(37, 'ja', 'Japanese'),
(38, 'jv', 'Javanese'),
(39, 'kk', 'Kazakh'),
(40, 'ky', 'Kyrgyz'),
(41, 'lo', 'Laotian'),
(42, 'la', 'Latin'),
(43, 'lv', 'Latvian (Creole)'),
(44, 'lt', 'Lithuanian'),
(45, 'lb', 'Luxembourgish'),
(46, 'mk', 'Macedonian'),
(47, 'mg', 'Malagasy'),
(48, 'ms', 'Malay'),
(49, 'ml', 'Malayalam'),
(50, 'mt', 'Maltese'),
(51, 'mi', 'Maori'),
(52, 'mhr', 'Mari'),
(53, 'mn', 'Mongolian'),
(54, 'no', 'Norwegian'),
(55, 'pap', 'Papiamento'),
(56, 'fa', 'Persian'),
(57, 'pl', 'Polish'),
(58, 'pt', 'Portuguese'),
(59, 'ro', 'Romanian'),
(60, 'ru', 'Russian'),
(61, 'gd', 'Scottish'),
(62, 'sr', 'Serbian'),
(63, 'sk', 'Slovakian (Creole)'),
(64, 'sl', 'Slovenian'),
(65, 'es', 'Spanish'),
(66, 'su', 'Sundanese'),
(67, 'sw', 'Swahili'),
(68, 'sv', 'Swedish'),
(69, 'tl', 'Tagalog'),
(70, 'tg', 'Tajik'),
(71, 'tt', 'Tatar'),
(72, 'tr', 'Turkish'),
(73, 'udm', 'Udmurt'),
(74, 'uk', 'Ukrainian'),
(75, 'ur', 'Urdu'),
(76, 'uz', 'Uzbek'),
(77, 'vi', 'Vietnamese'),
(78, 'cy', 'Welsh'),
(79, 'xh', 'Xhosa'),
(80, 'yi', 'Yiddish');

-- --------------------------------------------------------

--
-- Table structure for table `lang_normal`
--

CREATE TABLE `lang_normal` (
  `id_lang` int(11) NOT NULL,
  `lang_name` varchar(3) NOT NULL,
  `lang_fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lang_normal`
--

INSERT INTO `lang_normal` (`id_lang`, `lang_name`, `lang_fullname`) VALUES
(1, 'sq', 'Albanian'),
(2, 'ar', 'Arabic'),
(3, 'hy', 'Armenian'),
(4, 'bg', 'Bulgarian'),
(5, 'my', 'Burmese'),
(6, 'zh', 'Chinese'),
(7, 'cs', 'Czech'),
(8, 'da', 'Danish'),
(9, 'nl', 'Dutch'),
(10, 'en', 'English'),
(11, 'et', 'Estonian'),
(12, 'fi', 'Finnish'),
(13, 'fr', 'French'),
(14, 'de', 'German'),
(15, 'el', 'Greek'),
(16, 'id', 'Indonesian'),
(17, 'it', 'Italian'),
(18, 'ja', 'Japanese'),
(19, 'jv', 'Javanese'),
(20, 'kk', 'Kazakh'),
(21, 'la', 'Latin'),
(22, 'mk', 'Macedonian'),
(23, 'ms', 'Malay'),
(24, 'ml', 'Malayalam'),
(25, 'no', 'Norwegian'),
(26, 'pl', 'Polish'),
(27, 'pt', 'Portuguese'),
(28, 'ro', 'Romanian'),
(29, 'ru', 'Russian'),
(30, 'gd', 'Scottish'),
(31, 'sr', 'Serbian'),
(32, 'sl', 'Slovenian'),
(33, 'es', 'Spanish'),
(34, 'su', 'Sundanese'),
(35, 'sv', 'Swedish'),
(36, 'tr', 'Turkish'),
(37, 'uk', 'Ukrainian'),
(38, 'ur', 'Urdu'),
(39, 'vi', 'Vietnamese'),
(40, 'cy', 'Welsh');

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
(1, 'admin', '$2y$10$35ub8PDQ0Vulk/y6OY/Y4OWr0TH6Bnw5lYZtXYycAVumyqz89L9Ee', 'test@admin.com', 'McRn6q7eNRqR9pgJNWG3MyoA1VeqVMtP', 1),
(2, 'tester1', '$2y$10$A1qWzPwaWlnGvW0XQvfGYeEPM2A/m.lNqxKesbRYyVHCXdiuKk3Oq', 'tester1@webstrong.pl', 'ByULLcVdzWGAkn0xVhC1JJfTkSG8Rn0M', 1),
(3, 'tester2', '$2y$10$SWjRXqYa9oqUJfPB1hF9V.DLv2HfvlK24/BLq0Vo6MoOSHXVX8Y62', 'tester2@webstrong.pl', 'EI13p08hkaPTtzFgSzqCJny4q8mIxDGv', 1),
(4, 'tester3', '$2y$10$eQj7sxFAk/OXOaK4YzOrZOf3Cdg8vQGb2ZyhrdmBqkzoWd4KLDKZ.', 'tester3@webstrong.pl', 'R2UFLJul8m3GhQaJ1y53iOAvCrwg0hbf', 1),
(5, 'tester4', '$2y$10$M3D0/pwZmurTCL/NRlsqpOJpWZYE2GASMoAtpH4IlBZduCMNJr1EG', 'tester4@webstrong.pl', 'RNjuTbNZNkwmlN1nThsVAbzlYOnq0eRr', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lang_easy`
--
ALTER TABLE `lang_easy`
  ADD PRIMARY KEY (`id_lang`);

--
-- Indexes for table `lang_hard`
--
ALTER TABLE `lang_hard`
  ADD PRIMARY KEY (`id_lang`);

--
-- Indexes for table `lang_normal`
--
ALTER TABLE `lang_normal`
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
-- AUTO_INCREMENT for table `lang_easy`
--
ALTER TABLE `lang_easy`
  MODIFY `id_lang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `lang_hard`
--
ALTER TABLE `lang_hard`
  MODIFY `id_lang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `lang_normal`
--
ALTER TABLE `lang_normal`
  MODIFY `id_lang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
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
