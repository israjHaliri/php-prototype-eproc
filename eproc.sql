-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2015 pada 04.18
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eproc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_publish` varchar(25) NOT NULL,
  `time_publish` time NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `title`, `description`, `date_publish`, `time_publish`, `image`) VALUES
(125, 'This prototype eProcurement PLN aplication', '<p><span style="background-color:rgb(249, 249, 249); color:rgb(121, 121, 121); font-family:ruda,sans-serif">This prototype eProcurement PLN aplication</span></p>\r\n', '2015-05-22', '01:00:00', 'This prototype eProcurement PLN aplication2015-05-221.png'),
(126, 'This prototype eProcurement PLN aplication', '<p>This prototype eProcurement PLN aplication</p>\r\n', '2015-05-23', '01:00:00', 'This prototype eProcurement PLN aplication2015-05-231.png'),
(127, 'This prototype eProcurement PLN aplication', '<p>This prototype eProcurement PLN aplication</p>\r\n', '2015-05-13', '01:00:00', 'This prototype eProcurement PLN aplication2015-05-13165138_173677932673237_4498017_n.jpg'),
(129, 'This prototype eProcurement PLN aplication', '<p>This prototype eProcurement PLN aplication</p>\r\n', '2015-05-09', '16:20:00', 'This prototype eProcurement PLN aplication2015-05-091.png'),
(130, 'berita', '<p>berita</p>\r\n', '2015-05-07', '01:05:00', 'berita2015-05-071.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
`id_catalog` int(11) NOT NULL,
  `lelang_id` int(11) NOT NULL,
  `berita_id` int(11) NOT NULL,
  `pengadaan_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `lelang_id`, `berita_id`, `pengadaan_id`) VALUES
(1, 23, 126, 2),
(2, 23, 126, 3),
(3, 28, 130, 6),
(4, 27, 127, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
`id_contact` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact_us`
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
(10, 'sistim', 'ssistim@gmail', 'komplen', 'aduh cape');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eproc`
--

CREATE TABLE IF NOT EXISTS `eproc` (
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
`id_eproc` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `eproc`
--

INSERT INTO `eproc` (`title`, `description`, `id_eproc`) VALUES
('eProcurement', '<p>This prototype eProcurement&nbsp;PLN aplication</p>\r\n\r\n<p>This prototype eProcurement&nbsp;PLN aplication</p>\r\n\r\n<p>This prototype eProcurement&nbsp;PLN aplication</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `description` text NOT NULL,
`id_faqs` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faqs`
--

INSERT INTO `faqs` (`description`, `id_faqs`) VALUES
('<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya sebagai berikut</p>\r\n\r\n<p>Pada saat tertentu pln belum memerlukan komoditi tertentu, sehingga calon rekanan dengan bidang usaha yang bersangkutan belum dipertimbangkan untuk menjadi rekanan</p>\r\n\r\n<p>Jumlah rekanan yang terdaftar di pln pada saat tertentu sudah mencukupi untuk memenuhi kebutuhan pln Persyaratan untuk menjadi rekanan pln belum dapat dipenuhi atau oleh calon rekanan Tidak sesuai dengan kebijakan pengadaan Pernah dan atau sedang ada permasalahan yang menyangkut kinerja yang tidak memuaskan dengan pengadaan pln sebelumnya Berdasarkan penilaian (assessment) atau referensi, bahwa calon rekanan yang bersangkutan mempunyai kinerja yang tidak baik atau masih perlu dipertimbangkan untuk dapat menjadi rekanan.</p>\r\n\r\n<p>Pada saat tertentu pln belum memerlukan komoditi tertentu, sehingga calon rekanan dengan bidang usaha yang bersangkutan belum dipertimbangkan untuk menjadi rekanan Jumlah rekanan yang terdaftar di pln pada saat tertentu sudah mencukupi untuk memenuhi kebutuhan pln Persyaratan untuk menjadi rekanan pln belum dapat dipenuhi atau oleh calon rekanan Tidak sesuai dengan kebijakan pengadaan Pernah dan atau sedang ada permasalahan yang menyangkut kinerja yang tidak memuaskan dengan pengadaan pln sebelumnya Berdasarkan penilaian (assessment) atau referensi, bahwa calon rekanan yang bersangkutan mempunyai kinerja yang tidak baik atau masih perlu dipertimbangkan untuk dapat menjadi rekanan.</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya</p>\r\n\r\n<p>registrasi terlebih dahulu dengan mengirimkan data profile perusahaan dan kelengkapan bukti dokumen sesuai dengan bidang usahanya sebagai berikut</p>\r\n\r\n<p>Pada saat tertentu pln belum memerlukan komoditi tertentu, sehingga calon rekanan dengan bidang usaha yang bersangkutan belum dipertimbangkan untuk menjadi rekanan</p>\r\n\r\n<p>Jumlah rekanan yang terdaftar di pln pada saat tertentu sudah mencukupi untuk memenuhi kebutuhan pln Persyaratan untuk menjadi rekanan pln belum dapat dipenuhi atau oleh calon rekanan Tidak sesuai dengan kebijakan pengadaan Pernah dan atau sedang ada permasalahan yang menyangkut kinerja yang tidak memuaskan dengan pengadaan pln sebelumnya Berdasarkan penilaian (assessment) atau referensi, bahwa calon rekanan yang bersangkutan mempunyai kinerja yang tidak baik atau masih perlu dipertimbangkan untuk dapat menjadi rekanan. Pada saat tertentu pln belum memerlukan komoditi tertentu, sehingga calon rekanan dengan bidang usaha yang bersangkutan belum dipertimbangkan untuk menjadi rekanan Jumlah rekanan yang terdaftar di pln pada saat tertentu sudah mencukupi untuk memenuhi kebutuhan pln Persyaratan untuk menjadi rekanan pln belum dapat dipenuhi atau oleh calon rekanan Tidak sesuai dengan kebijakan pengadaan Pernah dan atau sedang ada permasalahan yang menyangkut kinerja yang tidak memuaskan dengan pengadaan pln sebelumnya Berdasarkan penilaian (assessment) atau referensi, bahwa calon rekanan yang bersangkutan mempunyai kinerja yang tidak baik atau masih perlu dipertimbangkan untuk dapat menjadi rekanan.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
('', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lelang`
--

CREATE TABLE IF NOT EXISTS `lelang` (
`id_lelang` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_publish` varchar(50) NOT NULL,
  `time_publish` time NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lelang`
--

INSERT INTO `lelang` (`id_lelang`, `title`, `description`, `date_publish`, `time_publish`, `image`) VALUES
(23, 'This prototype eProcurement PLN aplication', '<p><span style="color:rgb(119, 119, 119); font-family:times new roman,times,serif; font-size:14px">This prototype eProcurement&nbsp;PLN aplication</span></p>\r\n', '2015-05-05', '01:05:00', 'This prototype eProcurement PLN aplication2015-05-051.png'),
(24, '1This prototype eProcurement PLN aplication', '<p><span style="color:rgb(119, 119, 119); font-family:times new roman,times,serif; font-size:14px">This prototype eProcurement&nbsp;PLN aplication</span></p>\r\n', '2015-05-15', '18:00:00', '1This prototype eProcurement PLN aplication2015-05-15165138_173677932673237_4498017_n.jpg'),
(25, 'This prototype eProcurement PLN aplication', '<p><span style="color:rgb(119, 119, 119); font-family:times new roman,times,serif; font-size:14px">This prototype eProcurement&nbsp;PLN aplication</span></p>\r\n', '2015-05-10', '16:20:00', 'This prototype eProcurement PLN aplication2015-05-10dttbl.png'),
(26, 'This prototype eProcurement PLN aplication', '<p>This prototype eProcurement PLN aplication&nbsp;This prototype eProcurement PLN aplication&nbsp;This prototype eProcurement PLN aplication&nbsp;This prototype eProcurement PLN aplication&nbsp;This prototype eProcurement PLN aplication</p>\r\n', '2015-05-13', '06:30:00', 'This prototype eProcurement PLN aplication2015-05-131.png'),
(27, 'This prototype eProcurement PLN aplication', '<p><span style="color:rgb(119, 119, 119); font-family:times new roman,times,serif; font-size:14px">This prototype eProcurement&nbsp;PLN aplication</span></p>\r\n', '2015-05-16', '06:20:00', 'This prototype eProcurement PLN aplication2015-05-161.png'),
(28, 'This prototype eProcurement PLN aplication', '<p><span style="color:rgb(119, 119, 119); font-family:times new roman,times,serif; font-size:14px">This prototype eProcurement&nbsp;PLN aplication</span></p>\r\n', '2015-05-06', '06:36:00', 'This prototype eProcurement PLN aplication2015-05-06dttbl.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakta_integritas`
--

CREATE TABLE IF NOT EXISTS `pakta_integritas` (
  `name_file` varchar(100) NOT NULL,
  `type_file` varchar(100) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file` varchar(500) NOT NULL,
  `date_publish` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakta_integritas`
--

INSERT INTO `pakta_integritas` (`name_file`, `type_file`, `file_size`, `file`, `date_publish`) VALUES
('DVSD', 'rar', '125247', '../assets/files/DVSD.rar', '2015-05-24'),
('DFSDF', 'rar', '125247', '../assets/files/DFSDF.rar', '2015-05-24'),
('babin', 'rar', '1416', '../assets/files/babin.rar', '2015-05-24'),
('TEST', 'rar', '125247', '../assets/files/TEST.rar', '2015-05-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaan`
--

CREATE TABLE IF NOT EXISTS `pengadaan` (
`id_pengadaan` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_publish` varchar(50) NOT NULL,
  `time_publish` time NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengadaan`
--

INSERT INTO `pengadaan` (`id_pengadaan`, `title`, `description`, `date_publish`, `time_publish`, `image`) VALUES
(1, 'sunir', '<p>sunir</p>\r\n', '2015-05-17', '02:00:00', 'sunir2015-05-171.png'),
(2, 'This prototype eProcurement PLN aplication', '<p>This prototype eProcurement PLN aplication</p>\r\n', '2015-05-01', '05:25:00', 'This prototype eProcurement PLN aplication2015-05-011.png'),
(3, 'This prototype eProcurement PLN aplication', '<p>This prototype eProcurement PLN aplication</p>\r\n', '2015-05-12', '17:25:00', 'This prototype eProcurement PLN aplication2015-05-12dttbl.png'),
(4, 'This prototype eProcurement PLN aplication', '<p>This prototype eProcurement PLN aplication</p>\r\n', '2015-05-07', '17:24:00', 'This prototype eProcurement PLN aplication2015-05-07dttbl.png'),
(5, 'This prototype eProcurement PLN aplication', '<p>This prototype eProcurement PLN aplication</p>\r\n', '2015-04-30', '01:00:00', 'This prototype eProcurement PLN aplication2015-04-30165138_173677932673237_4498017_n.jpg'),
(6, 'This prototype eProcurement PLN aplication', '<p>This prototype eProcurement PLN aplication</p>\r\n', '2015-05-24', '06:30:00', 'This prototype eProcurement PLN aplication2015-05-24165138_173677932673237_4498017_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
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
-- Dumping data untuk tabel `supplier`
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
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `level`, `image`) VALUES
(14, 'israj', 'MDI2', 'israj.haliri@gmail.com', 'admin', 'israjisraj.haliri@gmail.com1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
 ADD PRIMARY KEY (`id_catalog`), ADD KEY `id_lelang` (`lelang_id`), ADD KEY `id_berita` (`berita_id`), ADD KEY `lelang_id` (`lelang_id`), ADD KEY `berita_id` (`berita_id`), ADD KEY `pengadaan_id` (`pengadaan_id`);

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
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
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
MODIFY `id_lelang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pengadaan`
--
ALTER TABLE `pengadaan`
MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `catalog`
--
ALTER TABLE `catalog`
ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`lelang_id`) REFERENCES `lelang` (`id_lelang`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `catalog_ibfk_2` FOREIGN KEY (`berita_id`) REFERENCES `berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `catalog_ibfk_3` FOREIGN KEY (`pengadaan_id`) REFERENCES `pengadaan` (`id_pengadaan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
