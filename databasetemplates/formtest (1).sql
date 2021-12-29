-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 04:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `ukm` varchar(50) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alasan` text NOT NULL,
  `verified` int(1) NOT NULL DEFAULT 0,
  `vkey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `firstName`, `lastName`, `ukm`, `nim`, `email`, `fakultas`, `prodi`, `nohp`, `alasan`, `verified`, `vkey`) VALUES
(11, 'Doni', 'Febrian', 'FLAT', '11200910000048', 'doni.febrian20', 'FST', 'Agribisnis', '085811161511', 'very chill', 1, '52c838a48e85b8b734870d448e08908f');

-- --------------------------------------------------------

--
-- Table structure for table `ukmimg`
--

CREATE TABLE `ukmimg` (
  `id` int(10) NOT NULL,
  `imgid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukmimg`
--

INSERT INTO `ukmimg` (`id`, `imgid`, `image`) VALUES
(4, 3, './img/flat/245901510_379617447195641_3531033533205704977_n.jpg'),
(5, 3, './img/flat/246300035_302635274695707_8987968075863581925_n.jpg'),
(6, 4, './img/forsa/imgforsa1.jpg'),
(7, 4, './img/forsa/imgforsa2.jpg'),
(8, 5, './img/hiqma/imghiqma1.jpg'),
(9, 5, './img/hiqma/imghiqma2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ukms`
--

CREATE TABLE `ukms` (
  `id` int(11) NOT NULL,
  `ukmname` varchar(50) NOT NULL,
  `descripts` text NOT NULL,
  `cperson` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukms`
--

INSERT INTO `ukms` (`id`, `ukmname`, `descripts`, `cperson`, `alamat`) VALUES
(3, 'FLAT', 'Unit Kegiatan Mahasiswa Bahasa-Foreign Languages Association (UKM Bahasa-FLAT) is a student activity unit existing in UIN Syarif Hidayatullah Jakarta whose spotlight is, as the name suggests, on foreign languages. UKM Bahasa-FLAT is an association for people who have great interest on foreign languages especially those who want to learn and to share knowledge about them. We also focus on the realm of culture, both Indonesian and foreign cultures.', '081315022493(rapup)', 'Lt. 3 Gedung Student Center'),
(4, 'FORSA', 'FORSA merupakan lembaga yang bergerak di bidang olahraga kemahasiswaan di lingkup UIN Syarif Hidayatullah Jakarta. FORSA berdiri pada tanggal 6 Juni 1996 di Ciputat yang dipelopori oleh beberapa mahasiswa UIN Syarif Hidayatullah Jakarta yang peduli terhadap perkembangan olahraga yang berbasis intelektual muda dari kampus. FORSA bukan saja sebagai tempat penampungan bagi yang hobby olahraga tetapi juga sebagai tempat untuk mengasah kemampuan berorganisasi.', 'forsa@uinjkt.ac.id', 'Gd. Student Center Lt. 3 , UIN Syarif Hidayatullah'),
(5, 'HIQMA', 'HIQMA adalah Unit Kegiatam Mahasiswa (UKM) yang terdapat di UIN Syarif Hidayatullah Jakarta, yang menjadikan Al-Qur’an dan seni Islami sebagai ruh kegiatan dan orientasi aktivitasnya. Disamping itu juga nengedepankan menejemen organisasi yang harus dimiliki oleh setiap kader HIQMA. Dua puluh empat tahun yang lalu tepatnya tanggal 11 Oktober 1988, HIQMA didirikan oleh Syarifuddin Muhammad dan kawan-kawan.', '089503066825', 'Cempaka Putih, Ciputat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukmimg`
--
ALTER TABLE `ukmimg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ukmid` (`imgid`);

--
-- Indexes for table `ukms`
--
ALTER TABLE `ukms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ukmimg`
--
ALTER TABLE `ukmimg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ukms`
--
ALTER TABLE `ukms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ukmimg`
--
ALTER TABLE `ukmimg`
  ADD CONSTRAINT `ukmid` FOREIGN KEY (`imgid`) REFERENCES `ukms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
