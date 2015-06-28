-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2015 at 10:03 AM
-- Server version: 5.6.24
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproc`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL,
  `title_berita` varchar(100) NOT NULL,
  `description_berita` text NOT NULL,
  `date_publish_berita` varchar(25) NOT NULL,
  `time_publish_berita` time NOT NULL,
  `image_berita` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `title_berita`, `description_berita`, `date_publish_berita`, `time_publish_berita`, `image_berita`) VALUES
(213, 'berita 12', '', '2015-06-13', '01:00:00', 'berita 122015-06-13admin-lib1.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id_contact`, `nama`, `email`, `subject`, `pesan`) VALUES
(2, 'q', 'q', 'q', 'q'),
(3, 'q', 'q', 'q', 'q'),
(4, 'vasva', '2015-05-08', 'dsasdv', ''),
(5, 'ASD', '', 'qwd', ''),
(6, 'ASDA', 'asd2afg@sdfa', 'bisnis', 'ASD'),
(7, 'asd', 'asd2afg@sdfa', 'bisnis', 'ASd'),
(8, 'WQDQWJIRJIR', 'QWD@SADF', 'komplen', 'WDQ'),
(9, 'SETTAN', 'SETTA@FAG', 'komplen', 'SETTAN'),
(10, 'sistim', 'ssistim@gmail', 'komplen', 'aduh cape'),
(11, '181', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eproc`
--

CREATE TABLE IF NOT EXISTS `eproc` (
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `id_eproc` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eproc`
--

INSERT INTO `eproc` (`title`, `description`, `id_eproc`) VALUES
('eProcurement', '<p>This prototype eProcurement&nbsp;PLN aplication</p>\r\n\r\n<p>This prototype eProcurement&nbsp;PLN aplication</p>\r\n\r\n<p>This prototype eProcurement&nbsp;PLN aplication</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `description` text NOT NULL,
  `id_faqs` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`description`, `id_faqs`) VALUES
('<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya sebagai berikut</p>\r\n\r\n<p>Pada saat tertentu pln belum memerlukan komoditi tertentu, sehingga calon rekanan dengan bidang usaha yang bersangkutan belum dipertimbangkan untuk menjadi rekanan</p>\r\n\r\n<p>Jumlah rekanan yang terdaftar di pln pada saat tertentu sudah mencukupi untuk memenuhi kebutuhan pln Persyaratan untuk menjadi rekanan pln belum dapat dipenuhi atau oleh calon rekanan Tidak sesuai dengan kebijakan pengadaan Pernah dan atau sedang ada permasalahan yang menyangkut kinerja yang tidak memuaskan dengan pengadaan pln sebelumnya Berdasarkan penilaian (assessment) atau referensi, bahwa calon rekanan yang bersangkutan mempunyai kinerja yang tidak baik atau masih perlu dipertimbangkan untuk dapat menjadi rekanan.</p>\r\n\r\n<p>Pada saat tertentu pln belum memerlukan komoditi tertentu, sehingga calon rekanan dengan bidang usaha yang bersangkutan belum dipertimbangkan untuk menjadi rekanan Jumlah rekanan yang terdaftar di pln pada saat tertentu sudah mencukupi untuk memenuhi kebutuhan pln Persyaratan untuk menjadi rekanan pln belum dapat dipenuhi atau oleh calon rekanan Tidak sesuai dengan kebijakan pengadaan Pernah dan atau sedang ada permasalahan yang menyangkut kinerja yang tidak memuaskan dengan pengadaan pln sebelumnya Berdasarkan penilaian (assessment) atau referensi, bahwa calon rekanan yang bersangkutan mempunyai kinerja yang tidak baik atau masih perlu dipertimbangkan untuk dapat menjadi rekanan.</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya sebagai berikut</p>\r\n\r\n<p>Pada saat tertentu pln belum memerlukan komoditi tertentu, sehingga calon rekanan dengan bidang usaha yang bersangkutan belum dipertimbangkan untuk menjadi rekanan</p>\r\n\r\n<p>Jumlah rekanan yang terdaftar di pln pada saat tertentu sudah mencukupi untuk memenuhi kebutuhan pln Persyaratan untuk menjadi rekanan pln belum dapat dipenuhi atau oleh calon rekanan Tidak sesuai dengan kebijakan pengadaan Pernah dan atau sedang ada permasalahan yang menyangkut kinerja yang tidak memuaskan dengan pengadaan pln sebelumnya Berdasarkan penilaian (assessment) atau referensi, bahwa calon rekanan yang bersangkutan mempunyai kinerja yang tidak baik atau masih perlu dipertimbangkan untuk dapat menjadi rekanan. Pada saat tertentu pln belum memerlukan komoditi tertentu, sehingga calon rekanan dengan bidang usaha yang bersangkutan belum dipertimbangkan untuk menjadi rekanan Jumlah rekanan yang terdaftar di pln pada saat tertentu sudah mencukupi untuk memenuhi kebutuhan pln Persyaratan untuk menjadi rekanan pln belum dapat dipenuhi atau oleh calon rekanan Tidak sesuai dengan kebijakan pengadaan Pernah dan atau sedang ada permasalahan yang menyangkut kinerja yang tidak memuaskan dengan pengadaan pln sebelumnya Berdasarkan penilaian (assessment) atau referensi, bahwa calon rekanan yang bersangkutan mempunyai kinerja yang tidak baik atau masih perlu dipertimbangkan untuk dapat menjadi rekanan.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
('', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lelang`
--

CREATE TABLE IF NOT EXISTS `lelang` (
  `id_lelang` int(11) NOT NULL,
  `title_lelang` varchar(100) NOT NULL,
  `description_lelang` text NOT NULL,
  `date_publish_lelang` varchar(50) NOT NULL,
  `time_publish_lelang` time NOT NULL,
  `image_lelang` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lelang`
--

INSERT INTO `lelang` (`id_lelang`, `title_lelang`, `description_lelang`, `date_publish_lelang`, `time_publish_lelang`, `image_lelang`) VALUES
(10, 'lelang 12', '', '2015-06-05', '01:00:00', 'lelang 122015-06-05front-lib2.png');

-- --------------------------------------------------------

--
-- Table structure for table `pakta_integritas`
--

CREATE TABLE IF NOT EXISTS `pakta_integritas` (
  `name_file` varchar(100) NOT NULL,
  `type_file` varchar(100) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file` varchar(500) NOT NULL,
  `date_publish` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakta_integritas`
--

INSERT INTO `pakta_integritas` (`name_file`, `type_file`, `file_size`, `file`, `date_publish`) VALUES
('DVSD', 'rar', '125247', '../assets/files/DVSD.rar', '2015-05-24'),
('DFSDF', 'rar', '125247', '../assets/files/DFSDF.rar', '2015-05-24'),
('babin', 'rar', '1416', '../assets/files/babin.rar', '2015-05-24'),
('TEST', 'rar', '125247', '../assets/files/TEST.rar', '2015-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `pemenang`
--

CREATE TABLE IF NOT EXISTS `pemenang` (
  `id_pemenang` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pengadaan_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemenang`
--

INSERT INTO `pemenang` (`id_pemenang`, `user_id`, `pengadaan_id`) VALUES
(3, 15, 25),
(5, 15, 25);

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE IF NOT EXISTS `pengadaan` (
  `id_pengadaan` int(11) NOT NULL,
  `title_pengadaan` varchar(100) NOT NULL,
  `description_pengadaan` text NOT NULL,
  `date_publish_pengadaan` varchar(50) NOT NULL,
  `time_publish_pengadaan` time NOT NULL,
  `image_pengadaan` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`id_pengadaan`, `title_pengadaan`, `description_pengadaan`, `date_publish_pengadaan`, `time_publish_pengadaan`, `image_pengadaan`) VALUES
(25, 'testing23', '<p>ad</p>\r\n', '2015-06-06', '01:00:00', 'testing232015-06-06admin-lib2.png'),
(26, 'pengadaan 2', '', '', '01:00:00', 'pengadaan 2cs.png');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_perusahaan_penyedia` varchar(100) NOT NULL,
  `no_pkp` varchar(100) NOT NULL,
  `bentuk_usaha` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `password`, `nama_perusahaan_penyedia`, `no_pkp`, `bentuk_usaha`, `npwp`, `status`) VALUES
(2, 'sada', '1saFa', 'ZmFm', '1dsfa', '1awefa', '1ewf', '1ewaf', 'non-aktif'),
(3, 'pln', 'pln', 'cGxu', 'pln', 'pln', 'pln', 'pln', 'non-aktif'),
(4, 'pln', 'pln', 'cGxu', 'pln', 'pln', 'pln', 'pln', 'aktif'),
(5, 'israj', 'asd', 'MDI2', 'asd', 'asd', 'asd', 'asd', 'aktif'),
(6, 'pln', 'pln', 'cGxu', 'pln', 'pln', 'pln', 'pln', 'aktif'),
(7, 'ihin', 'ihin', 'aWhpbg==', 'ihin', 'ihin', 'ihin', 'ihin', 'non-aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `level`, `image`) VALUES
(15, 'israj', 'MDI2', 'israj.haliri@gmail.com', 'admin', 'israjisraj.haliri@gmail.comisrajisraj.haliri@gmail.com165138_173677932673237_4498017_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `eproc`
--
ALTER TABLE `eproc`
  ADD PRIMARY KEY (`id_eproc`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id_faqs`);

--
-- Indexes for table `lelang`
--
ALTER TABLE `lelang`
  ADD PRIMARY KEY (`id_lelang`);

--
-- Indexes for table `pemenang`
--
ALTER TABLE `pemenang`
  ADD PRIMARY KEY (`id_pemenang`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `id_pengaadaan` (`pengadaan_id`),
  ADD KEY `id_user_2` (`user_id`),
  ADD KEY `id_pengaadaan_2` (`pengadaan_id`);

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`id_pengadaan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=214;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `eproc`
--
ALTER TABLE `eproc`
  MODIFY `id_eproc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id_faqs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lelang`
--
ALTER TABLE `lelang`
  MODIFY `id_lelang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pemenang`
--
ALTER TABLE `pemenang`
  MODIFY `id_pemenang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengadaan`
--
ALTER TABLE `pengadaan`
  MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemenang`
--
ALTER TABLE `pemenang`
  ADD CONSTRAINT `pemenang_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemenang_ibfk_2` FOREIGN KEY (`pengadaan_id`) REFERENCES `pengadaan` (`id_pengadaan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
