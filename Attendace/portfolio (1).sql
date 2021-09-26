-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 04:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Secondary` varchar(255) NOT NULL,
  `H_Secondary` varchar(255) NOT NULL,
  `O_qualification` varchar(255) NOT NULL,
  `About` varchar(255) NOT NULL,
  `Skills` varchar(255) NOT NULL,
  `Hobbies` varchar(255) NOT NULL,
  `Domain` varchar(255) NOT NULL,
  `Facebook` varchar(255) NOT NULL,
  `Instagram` varchar(255) NOT NULL,
  `Linkedin` varchar(255) NOT NULL,
  `Github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `Name`, `Email`, `Secondary`, `H_Secondary`, `O_qualification`, `About`, `Skills`, `Hobbies`, `Domain`, `Facebook`, `Instagram`, `Linkedin`, `Github`) VALUES
(1, 'Motu', 'motu@gmail.com', '93.8% , ICSE, 2018, DPS', '93.8% , ICSE, 2018, DPS', 'martial art trainee', 'My name is Motu . I live in Furfuri nagar. I love to eat Samosa ', 'html ,css ,js ,php ,nodejs ,mysql, python', 'cricket, cycling , reading books ', 'Python Development', 'https://facebook.com/', 'https://instagram.com/', 'https://linkedin.com/', 'https://githubk.com/'),
(2, 'Sam', 'sam@gmail.com', '95.8% , ICSE, 2018, DPS', '95.8% , ICSE, 2020, DPS', 'PRMO qualified', 'My name is Sam . I am a nature loving person . I have deep interest in space science also', 'html ,css ,js ,php ,nodejs ,mysql, python', 'cricket, cycling , reading books ', 'DS/ML', 'https://facebook.com/', 'https://instagram.com/', 'https://linkedin.com/', 'https://github.com/'),
(3, '', '', '', '', '', '', '', '', 'Choose...', '', '', '', ''),
(4, 'Ram', 'ram@gmail.com', '93.8%, CBSE, 2018, DAV Public School', '94.2%, CBSE, 2018, DAV Public School', 'JEE qualified, Prmo qualified', 'My name is Ram I am from Kanpur Badamba Odisha . I have completed my schooling from DAV Public School', 'html ,css ,js ,php ,nodejs ,mysql, python', 'cricket, cycling , reading books ', 'Python Development', 'https://facebook.com/', 'https://instagram.com/', 'https://linkedin.com/', 'https://github.com/'),
(5, 'Amrit Kumar Moharana', 'amritmoharana@gmail.com', '98%, CBSE 2024 KendraVidyalaya', '98% CBSE 2026 KendraVidyalaya', 'NTSE qualified', 'My name is Amrit Kumar Moharana . I study in Kendrya Vidyalaya earlier I used to study in New Stewart School. I am a passionate learner.', 'App development , Game development', 'watching Little Singham , Playing cricket', 'App Development', 'https://facebook.com/', 'https://instagram.com/', 'https://linkedin.com/', 'https://github.com/'),
(6, 'Anisha Mohanty', 'anishamohanty96@gmail.com', 'CGPA 10', '91%', 'BTech in Computer Science', 'I worked in PwC as a Cyber Security Consultant, currently pursuing Master\'s in the same domain', 'Python, Malware Analysis, Cloud, Networking', 'Music', 'Python Development', '', '', '', ''),
(7, 'Ananda Charan Hembram', 'anandcharana@gmail.com', '85%, CBSE 2017 KV,Khordha road', '75% CBSE 2019 Kv, Khordha Road', 'NTSE qualified', 'My name is Ananda i love Badminton I love eating chowmein rolls ', 'html css js c c++', 'cycling badminton swimming ', 'Web Development', 'https://facebook.com/', 'https://instagram.com/', 'https://linkedin.com/', 'https://github.com/'),
(8, 'Sam Motu Kaal Singham Aatish   Quan', 'teacher@gmail.com', '7 C++ 67', '90 DAV PUBLIC School', '6 star coder in code chef', 'Basics of C++ ', 'C++ Pointers, Arrays ', 'Do practice from code chef', '7', 'https://facebook.com/', 'https://instagram.com/', 'https://linkedin.com/', 'https://github.com/'),
(9, 'Sam Motu Kaal Singham Aatish   Quan Waqt Sai ', 'teacher2@gmail.com', '9, Python, 60', '90, Kv', '6 star coder in code chef', 'we will learn python advance', 'Python- Ml, Data science', 'Do practice from code chef', '9', 'https://facebook.com/', 'https://instagram.com/', 'https://linkedin.com/', 'https://github.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
