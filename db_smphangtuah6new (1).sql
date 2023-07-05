-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 10:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smphangtuah6new`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(16) NOT NULL,
  `judul` varchar(320) NOT NULL,
  `datetime` datetime NOT NULL,
  `gambar` varchar(320) NOT NULL,
  `paragraf` mediumtext NOT NULL,
  `status` varchar(640) NOT NULL,
  `tag` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `datetime`, `gambar`, `paragraf`, `status`, `tag`) VALUES
(1, 'Google inks pact for new 35-storey office', '2022-08-16 15:56:59', 'single_blog_2.jpg', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying', '', 'Student'),
(2, 'Google inks pact for new 35-storey office', '2022-08-03 15:56:59', 'single_blog_3.jpg', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying', '', 'Extracurricular'),
(3, 'SMP Hang Tuah 6 Excellent Juanda menggelar penyembelihan hewan kurban, Senin (11/7)', '2022-08-24 08:21:07', 'qurban.jpeg', 'SIDOARJO – SMP Hang Tuah 6 Excellent Juanda menggelar penyembelihan hewan kurban, Senin (11/7). Sedikitnya ada lima hewan kurban yang disembelih sejak pukul 06.30. Yaitu satu ekor sapi dan empat ekor kambing.', '', 'OSIS'),
(4, 'Tes Judul Artikel', '0000-00-00 00:00:00', '20230705050052.JPG', '<p>dddd okeh</p>', '', 'OSIS'),
(5, 'Febrianti', '0000-00-00 00:00:00', '20230705052714.jpg', '<p>ddd</p>', '', 'OSIS'),
(6, 'Febrianti', '2023-07-04 22:43:00', '20230705095156.jpg', '<p>dafsdf</p>', 'checked', 'Extracurricular'),
(7, 'bbbbbbb', '2023-07-05 23:42:00', '20230705095248.jpg', '<p>SSS</p>', 'checked', 'Extracurricular');

-- --------------------------------------------------------

--
-- Table structure for table `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id` varchar(60) NOT NULL,
  `component` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosial_media`
--

INSERT INTO `sosial_media` (`id`, `component`) VALUES
('FB', 'https://www.facebook.com/smphangtuah6excellent/'),
('GRUPWA', 'https://chat.whatsapp.com/JkUojZGuTKF8sZjyRqqRoI'),
('TELP', '8964821'),
('TWITTER', 'https://twitter.com/smphangtuah6exc'),
('WA', '6285163006904'),
('YOUTUBE', 'https://youtube.com/channel/UCre1rjdTOA0GycySQCLloTg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(3) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `displayname` varchar(60) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(3) NOT NULL,
  `hak_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `displayname`, `cdate`, `status`, `hak_akses`) VALUES
('A02', 'alma', 'alma', 'Athiya Alma', '2022-01-25 04:08:01', 'ON', 2),
('U01', 'root', 'root', 'Admin Root', '2022-01-25 04:08:01', 'ON', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `sosial_media`
--
ALTER TABLE `sosial_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
