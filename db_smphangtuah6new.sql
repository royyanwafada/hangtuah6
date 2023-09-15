-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 05:02 AM
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
  `id_artikel` varchar(16) NOT NULL,
  `judul` varchar(320) NOT NULL,
  `datetime` datetime NOT NULL,
  `gambar` varchar(320) NOT NULL,
  `p1` varchar(640) NOT NULL,
  `p2` varchar(640) NOT NULL,
  `p3` varchar(640) NOT NULL,
  `p4` varchar(640) NOT NULL,
  `p5` varchar(640) NOT NULL,
  `tag` varchar(16) NOT NULL,
  `quote_highlight` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `datetime`, `gambar`, `p1`, `p2`, `p3`, `p4`, `p5`, `tag`, `quote_highlight`) VALUES
('1', 'Google inks pact for new 35-storey office', '2022-08-16 15:56:59', '../assets/img/blog/single_blog_2.jpg', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying', '', '', '', '', 'Student', ''),
('2', 'Google inks pact for new 35-storey office', '2022-08-03 15:56:59', '../assets/img/blog/single_blog_3.jpg', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying', '', '', '', '', 'Extracurricular', ''),
('3', 'SMP Hang Tuah 6 Excellent Juanda menggelar penyembelihan hewan kurban, Senin (11/7)', '2022-08-24 08:21:07', '../assets/img/blog/qurban.jpeg', 'SIDOARJO – SMP Hang Tuah 6 Excellent Juanda menggelar penyembelihan hewan kurban, Senin (11/7). Sedikitnya ada lima hewan kurban yang disembelih sejak pukul 06.30. Yaitu satu ekor sapi dan empat ekor kambing.', 'Penyembelihan hewan kurban tetap mematuhi protokol kesehatan (prokes). Daging kurban didistribusikan kepada masyarakat sekitar hingga sejumlah panti asuhan yang berada di kawasan Juanda.\r\n', '“Kami berterimakasih kepada para donatur, wali murid serta dewan guru yang memilih menyerahkan hewan kurbannya ke sekolah kami,” ujar Kasatdik SMP Hang Tuah 6 Excellent, Irra Fatukawati, S.Si, M.Pd. Penyembelihan hewan kurban tersebut diharapkan dapat membawa berkah sendiri terhadap SMP Hang Tuah 6 Excellent Juanda. Sehingga ke depannya dapat terus membuat program yang bagus dan baik untuk dilaksanakan.', 'Di sisi lain, pembagian daging kurban dilakukan dengan cara diantarakan. Hal itu agar tak terjadi kerumunan massa. Uniknya, kegiatan tersebut tak hanya diikuti para dewan guru dan para staf, namun dibantu anggota OSIS, anggota Student Dicipline Commission (SDC) dan warga sekitar. “Kami bersyukur kegiatan ini berjalan dengan lancar dan pembagian dapat tersalurkan secara merata. Semoga bisa menambah ketaqwaan kita kepada Tuhan Yang Maha Esa,” jelasnya. (far/vga)', '', 'OSIS', '');

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
('WA', '6285163006904');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
