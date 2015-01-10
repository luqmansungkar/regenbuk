-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2015 at 04:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `regenbuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'BUKU AGAMA'),
(2, 'BUKU ANAK'),
(3, 'BUKU BAHASA'),
(4, 'BUKU SEKOLAH'),
(5, 'EKONOMI'),
(6, 'HOBI '),
(7, 'HUKUM'),
(8, 'IMPORT'),
(9, 'KEDOKTERAN'),
(10, 'KESEHATAN'),
(11, 'KESEKRETARIATAN'),
(12, 'KOMPUTER'),
(13, 'KOMIK'),
(14, 'MAJALAH'),
(15, 'MANAJEMEN DAN BISNIS'),
(16, 'NOVEL'),
(17, 'PETA & PARIWISATA'),
(18, 'PERTANIAN'),
(19, 'PSIKOLOGI & PENDIDIKAN KELUARGA'),
(20, 'ENSIKLOPEDIA & REFERENSI'),
(21, 'SASTRA'),
(22, 'SOSIAL POLITIK'),
(23, 'TEKNIK');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `konten` longtext NOT NULL,
  `foto` text NOT NULL,
  `provinsi` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `sub_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE IF NOT EXISTS `sub_kategori` (
`id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`id`, `id_kategori`, `nama`) VALUES
(1, 1, 'BUDHA'),
(2, 1, 'HINDU'),
(3, 1, 'ISLAM'),
(4, 1, 'KRISTEN & KATOLIK'),
(5, 1, 'KHONG HU CU'),
(6, 1, 'LAIN-LAIN'),
(7, 2, 'CERITA ANAK'),
(8, 2, 'CERITA SERIAL'),
(9, 2, 'DUNIA PENGETAHUAN'),
(10, 3, 'KAMUS BAHASA INDONESIA'),
(11, 3, 'KAMUS BAHASA INGGRIS'),
(12, 3, 'KAMUS BAHASA ILMIAH'),
(13, 3, 'KAMUS BAHASA MANDARIN'),
(14, 3, 'LAIN – LAIN'),
(15, 4, 'BUKU SD KELAS 1'),
(16, 4, 'BUKU SD KELAS 2'),
(17, 4, 'BUKU SD KELAS 3'),
(18, 4, 'BUKU SD KELAS 4'),
(19, 4, 'BUKU SD KELAS 5'),
(20, 4, 'BUKU SD KELAS 6'),
(21, 4, 'BUKU SMP KELAS 1'),
(22, 4, 'BUKU SMP KELAS 2'),
(23, 4, 'BUKU SMP KELAS 3'),
(24, 4, 'BUKU SMA KELAS 1'),
(25, 4, 'BUKU SMA KELAS 2'),
(26, 4, 'BUKU SMA KELAS 3'),
(27, 5, 'AKUNTANSI & AUDITING'),
(28, 5, 'EKONOMI MAKRO'),
(29, 5, 'EKONOMI MIKRO'),
(30, 5, 'KOPERASI'),
(31, 5, 'MONETER'),
(32, 5, 'PERBANKAN'),
(33, 5, 'SOSIAL EKONOMI'),
(34, 5, 'LAIN-LAIN'),
(35, 6, 'FOTOGRAFI'),
(36, 6, 'HEWAN PIARAAN'),
(37, 6, 'DISAIN INTERIOR'),
(38, 6, 'KOMEDI'),
(39, 6, 'KEMILITERAN'),
(40, 6, 'KETRAMPILAN'),
(41, 6, 'MUSIK DAN LAGU'),
(42, 6, 'OLAH RAGA'),
(43, 6, 'GAME'),
(44, 6, 'RESEP MASAKAN & MINUMAN'),
(45, 6, 'SENI'),
(46, 6, 'TANAMAN HIAS'),
(47, 7, 'HUKUM'),
(48, 7, 'PERATURAN PEMERINTAH'),
(49, 7, 'PERPAJAKAN'),
(50, 7, 'PERUNDANG-UNDANGAN'),
(51, 8, 'IMPORT'),
(52, 9, 'FARMASI'),
(53, 9, 'SPESIALIS'),
(54, 9, 'UMUM'),
(55, 9, 'KESEHATAN'),
(56, 9, 'PSIKIATRI'),
(57, 10, 'DAFTAR OBAT'),
(58, 10, 'DIET'),
(59, 10, 'KESEHATAN IBU & ANAK'),
(60, 10, 'PENYEMBUHAN ALTERNATIF'),
(61, 10, 'TANAMAN OBAT'),
(62, 11, 'ADMINISTRASI'),
(63, 11, 'KESEKRETARIATAN'),
(64, 11, 'PERJANJIAN'),
(65, 11, 'LAIN-LAIN'),
(66, 12, 'DATABASE'),
(67, 12, 'DESIGN GRAPHICS'),
(68, 12, 'HARDWARE'),
(69, 12, 'INTERNET & WEB'),
(70, 12, 'MICROSOFT OFFICE'),
(71, 12, 'MOBILE & GADGET'),
(72, 12, 'PROGRAMING'),
(73, 12, 'SISTEM OPERASI'),
(74, 12, 'SOCIAL MEDIA'),
(75, 13, 'ONE PIECE'),
(76, 13, 'NARUTO'),
(77, 13, 'LAIN-LAIN'),
(78, 14, 'FASHION'),
(79, 14, 'OTOMOTIF'),
(80, 14, 'SPORT'),
(81, 14, 'LAIN-LAIN'),
(82, 15, 'BISNIS & ENTREPRENEURSHIP'),
(83, 15, 'KEUANGAN & INVESTASI'),
(84, 15, 'MANAJEMEN UMUM'),
(85, 15, 'MARKETING & SALES'),
(86, 15, 'SUMBER DAYA MANUSIA'),
(87, 16, 'ANAK'),
(88, 16, 'REMAJA'),
(89, 16, 'DEWASA'),
(90, 16, 'TERJEMAHAN'),
(91, 17, 'PETA & BOLA DUNIA'),
(92, 17, 'PERHOTELAN'),
(93, 17, 'PARIWISATA'),
(94, 17, 'LAIN-LAIN'),
(95, 18, 'PERIKANAN'),
(96, 18, 'PERKEBUNAN'),
(97, 18, 'PERTANIAN'),
(98, 18, 'PETERNAKAN'),
(99, 19, 'PENDIDIKAN KELUARGA'),
(100, 19, 'PENDIDIKAN SEKOLAH'),
(101, 19, 'PSIKOLOGI'),
(102, 19, 'SPIRITUAL'),
(103, 20, 'ENSIKLOPEDIA'),
(104, 20, 'REFERNSI'),
(105, 20, 'LAIN-LAIN'),
(106, 21, 'CERITA NYATA'),
(107, 21, 'SASTRA'),
(108, 21, 'LAIN-LAIN'),
(109, 22, 'BIOGRAFI'),
(110, 22, 'KOMUNIKASI & PUBLIK RELATION'),
(111, 22, 'LINGKUNGAN HIDUP'),
(112, 22, 'POLITIK'),
(113, 22, 'SOSIAL'),
(114, 22, 'KEBUDAYAAN'),
(115, 22, 'SEJARAH'),
(116, 22, 'SOSIOLOGI'),
(117, 23, 'ARSITEKTUR'),
(118, 23, 'ELEKTRO & ELEKTRONIK'),
(119, 23, 'MESIN'),
(120, 23, 'SIPIL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `provinsi` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `bb` varchar(10) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `ig` varchar(100) DEFAULT NULL,
  `bio` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
