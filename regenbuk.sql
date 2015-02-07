-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2015 at 05:23 PM
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
  `nama` varchar(255) NOT NULL,
  `id_provinsi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=507 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `id_provinsi`) VALUES
(1, 'Kab. Aceh Barat', 1),
(2, 'Kab. Aceh Barat Daya', 1),
(3, 'Kab. Aceh Besar', 1),
(4, 'Kab. Aceh Jaya', 1),
(5, 'Kab. Aceh Selatan', 1),
(6, 'Kab. Aceh Singkil', 1),
(7, 'Kab Aceh Tamiang', 1),
(8, 'Kab. Aceh Tengah', 1),
(9, 'Kab. Aceh Tenggara', 1),
(10, 'Kab. Aceh Timur', 1),
(11, 'Kab. Aceh Utara', 1),
(12, 'Kab. Bener Meriah', 1),
(13, 'Kab. Bireun', 1),
(14, 'Kab. Gayo Lues', 1),
(15, 'Kab. Nagan Raya', 1),
(16, 'Kab. Pidie', 1),
(17, 'Kab. Pidie Jaya', 1),
(18, 'Kab. Simeulue', 1),
(19, 'Kota Banda Aceh', 1),
(20, 'Kota Subulussalam', 1),
(21, 'Kota Langsa', 1),
(22, 'Kota Lhokseumawe', 1),
(23, 'Kota Saban', 1),
(24, 'Kab. Asahan', 2),
(25, 'Kab. Batubara', 2),
(26, 'Kab. Dairi', 2),
(27, 'Kab. Deliserdang', 2),
(28, 'Kab. Humban Hasundutan', 2),
(29, 'Kab. Karo', 2),
(30, 'Kab. Labuhanbatu', 2),
(31, 'Kab. Langkat', 2),
(32, 'Kab. Mandating Natal', 2),
(33, 'Kab. Nias', 2),
(34, 'Kab. Nias Selatan', 2),
(35, 'Kab. PakakBharat', 2),
(36, 'Kab. Samosir', 2),
(37, 'Kab. Serdan Bedagai', 2),
(38, 'Kab. Simalungun', 2),
(39, 'Kab. Tapanuli Selatan', 2),
(40, 'Kab. Tapanuli Tengah', 2),
(41, 'Kab. Tapanuli Utara', 2),
(42, 'Kab. Toba Samosir', 2),
(43, 'Kab. Padang Lawas Utara', 2),
(44, 'Kab. Padan Lawas', 2),
(45, 'Kab. Labuhanbatu Utara', 2),
(46, 'Kab. Labuhanbatu Selatan', 2),
(47, 'Kab. Nias Barat', 2),
(48, 'Kab. Nias Utara', 2),
(49, 'Kota Medan', 2),
(50, 'Kota Binjai', 2),
(51, 'Kota Padang Sidempuan', 2),
(52, 'Kota Pematan Siantar', 2),
(53, 'Kota Sibolga', 2),
(54, 'Kota Tanjung Balai', 2),
(55, 'Kota TebingTinggi', 2),
(56, 'Kota Gunung Sitoli', 2),
(57, 'Kab. Agam', 3),
(58, 'Kab. Dharmasraya', 3),
(59, 'Kab. Limapuluhkota', 3),
(60, 'Kab. Kep. Mentawai', 3),
(61, 'Kab. Padang Pariaman', 3),
(62, 'Kab. Pasaman', 3),
(63, 'Kab. Pasaman Barat', 3),
(64, 'Kab. Pesisir Selatan', 3),
(65, 'Kab. Sawahlunto Sijunjung', 3),
(66, 'Kab. Solok', 3),
(67, 'Kab. Solok Selatan', 3),
(68, 'Kab. Tanah Datar', 3),
(69, 'Kota Padang', 3),
(70, 'Kota BukitTinggi', 3),
(71, 'Kota Pandang Panjang', 3),
(72, 'Kota Pariaman', 3),
(73, 'Kota Payakumbuh', 3),
(74, 'Kota Sawahlunto', 3),
(75, 'Kota Solok', 3),
(76, 'Kab. Bengkalis', 4),
(77, 'Kab. Indragiri Hilir ', 4),
(78, 'Kab. Indragiri Hulu', 4),
(79, 'Kab. Kampar', 4),
(80, 'Kab. Kuantan Singingi', 4),
(81, 'Kab. Pelalawan', 4),
(82, 'Kab. Rokan Hulu', 4),
(83, 'Kab. Rokan Hilir', 4),
(84, 'Kab. Siak', 4),
(85, 'Kab. Kep. Meranti', 4),
(86, 'Kota Pekanbaru', 4),
(87, 'Kota Dumai', 4),
(88, 'Kab. Batanghari', 5),
(89, 'Kab. Bungo', 5),
(90, 'Kab. Kerinci', 5),
(91, 'Kab. Merangin', 5),
(92, 'Kab. Muaro Jambi', 5),
(93, 'Kab. Sarolangun', 5),
(94, 'Kab. Tanjung Jabung Barat', 5),
(95, 'Kab. Tanjung Jabung Timur', 5),
(96, 'Kab. Tebo', 5),
(97, 'Kota Jambi', 5),
(98, 'Kota Sungai Penuh', 5),
(99, 'Kab. Banyuasin', 6),
(100, 'Kota Palembang', 6),
(101, 'Kab. Lahat', 6),
(102, 'Kota Lubuk Linggau', 6),
(103, 'Kab. Empat Lawang', 6),
(104, 'Kota Pagar Alam', 6),
(105, 'Kab. Muara Enim ', 6),
(106, 'Kota Prabumulih', 6),
(107, 'Kab. Musi Banyuasin', 6),
(108, 'Kab. Musi Rawas', 6),
(109, 'Kab. Ogan Ilir', 6),
(110, 'Kab. Ogan Komering Ilir', 6),
(111, 'Kab. Ogan Komering Ulu', 6),
(112, 'Kab. OKU Selatan', 6),
(113, 'Kab. OKU Timur', 6),
(114, 'Kab. Penukal Abab Lematang Ilir', 6),
(115, 'Kab. Bengkulu Selatan', 7),
(116, 'Kab. Bengkulu Utara', 7),
(117, 'Kab. Kaur', 7),
(118, 'Kab. Kepahiang', 7),
(119, 'Kab. Lebong', 7),
(120, 'Kab. Muko-Muko', 7),
(121, 'Kab. Rejang Lebong', 7),
(122, 'Kab. Seluma', 7),
(123, 'Kab. Bengkulu Tengah', 7),
(124, 'Kota Bengkulu', 7),
(125, 'Kab. Lampung Barat', 8),
(126, 'Kab. Lampung Selatan', 8),
(127, 'Kab. Lampung Tengah', 8),
(128, 'Kab. Lampung Timur', 8),
(129, 'Kab. Lampung Utara', 8),
(130, 'Kab. Tanggamus', 8),
(131, 'Kab. Tulang Bawang', 8),
(132, 'Kab. Way Kanan', 8),
(133, 'Kab. Pesawaran', 8),
(134, 'Kab. Pringsewu', 8),
(135, 'Kab. Mesuji', 8),
(136, 'Kab. Tulang Bawang Barat', 8),
(137, 'Kab. Pesisir Barat', 8),
(138, 'Kota Bandarlampung', 8),
(139, 'Kota Metro', 8),
(140, 'Kab. Bangka ', 9),
(141, 'Kab. Bangka Barat', 9),
(142, 'Kab. Bangka Selatan', 9),
(143, 'Kab. Bangka Tengah', 9),
(144, 'Kab. Belitung', 9),
(145, 'Kab. Belitung Timur', 9),
(146, 'Kota Pangkalpinang', 9),
(147, 'Kab. Karimun', 10),
(148, 'Kab. Bintan (Kep. Riau)', 10),
(149, 'Kab. Lingga', 10),
(150, 'Kab. Natuna', 10),
(151, 'Kab. Kep. Anambas', 10),
(152, 'Kota Tanjungpinang', 10),
(153, 'Kota Batam', 10),
(154, 'Kab. Kepulauan Seribu ', 11),
(155, 'Jakarta Barat', 11),
(156, 'Jakarta Pusat', 11),
(157, 'Jakarta Selatan', 11),
(158, 'Jakarta Timur', 11),
(159, 'Kab. Bandung', 12),
(160, 'Kab. Bandung Barat', 12),
(161, 'Kab. Bekasi', 12),
(162, 'Kab. Bogor', 12),
(163, 'Kab. Ciamis', 12),
(164, 'Kab. Cianjur', 12),
(165, 'Kab. Cirebon', 12),
(166, 'Kab. Garut', 12),
(167, 'Kab. Indramayu', 12),
(168, 'Kab. Karawang', 12),
(169, 'Kab. Kuningan', 12),
(170, 'Kab. Majalengka', 12),
(171, 'Kab. Purwakarta', 12),
(172, 'Kab. Subang', 12),
(173, 'Kab. Sukabumi', 12),
(174, 'Kab. Sumedang', 12),
(175, 'Kab. Tasikmalaya', 12),
(176, 'Kab. Pangandaran', 12),
(177, 'Kota Bandung', 12),
(178, 'Kota Banjar', 12),
(179, 'Kota Bekasi', 12),
(180, 'Kota Bogor', 12),
(181, 'Kota Cimahi', 12),
(182, 'Kota Cirebon', 12),
(183, 'Kota Depok', 12),
(184, 'Kota Sukabumi', 12),
(185, 'Kota Tasikmalaya', 12),
(186, 'Kab. Banjarnegara', 13),
(187, 'Kab. Banyumas', 13),
(188, 'Kab. Batang', 13),
(189, 'Kab. Blora', 13),
(190, 'Kab. Boyolali', 13),
(191, 'Kab. Brebes', 13),
(192, 'Kab. Cilacap', 13),
(193, 'Kab. Demak', 13),
(194, 'Kab. Grobogan', 13),
(195, 'Kab. Jepara', 13),
(196, 'Kab. Karanganyar', 13),
(197, 'Kab. Kebumen', 13),
(198, 'Kab. Kendal', 13),
(199, 'Kab. Klaten', 13),
(200, 'Kab. Kudus', 13),
(201, 'Kab. Magelang', 13),
(202, 'Kab. Pati', 13),
(203, 'Kab. Pekalongan', 13),
(204, 'Kab. Pemalang', 13),
(205, 'Kab. Purbalingga', 13),
(206, 'Kab. Purworejo', 13),
(207, 'Kab. Rembang', 13),
(208, 'Kab. Semarang', 13),
(209, 'Kab. Sragen', 13),
(210, 'Kab. Sukoharjo', 13),
(211, 'Kab. Tegal', 13),
(212, 'Kab. Temanggung', 13),
(213, 'Kab. Wonogiri', 13),
(214, 'Kab. Wonosobo', 13),
(215, 'Kota Semarang', 13),
(216, 'Kota Magelang', 13),
(217, 'Kota Pekalongan', 13),
(218, 'Kota Salatiga', 13),
(219, 'Kota Surakarta', 13),
(220, 'Kota Tegal', 13),
(221, 'Kab. Lebak ', 14),
(222, 'Kab. Pandeglang ', 14),
(223, 'Kab. Serang ', 14),
(224, 'Kab. Tangerang ', 14),
(225, 'Kota Cilegon', 14),
(226, 'Kota Serang', 14),
(227, 'Kota Tangerang', 14),
(228, 'Kota Tangerang Selatan', 14),
(229, 'Kab. Bangkalan ', 15),
(230, 'Kab. Banyuwangi ', 15),
(231, 'Kab. Blitar ', 15),
(232, 'Kab. Bojonegoro ', 15),
(233, 'Kab. Bondowoso ', 15),
(234, 'Kab. Gresik ', 15),
(235, 'Kab. Jember ', 15),
(236, 'Kab. Jombang ', 15),
(237, 'Kab. Kediri ', 15),
(238, 'Kab. Lamongan', 15),
(239, 'Kab. Lumajang', 15),
(240, 'Kab. Madiun', 15),
(241, 'Kab. Magetan', 15),
(242, 'Kab. Malang', 15),
(243, 'Kab. Mojokerto', 15),
(244, 'Kab. Nganjuk', 15),
(245, 'Kab. Ngawi', 15),
(246, 'Kab. Pacitan', 15),
(247, 'Kab. Pamekasan', 15),
(248, 'Kab. Pasuruan', 15),
(249, 'Kab. Ponorogo', 15),
(250, 'Kab. Probolinggo', 15),
(251, 'Kab. Sampang', 15),
(252, 'Kab. Sidoarjo', 15),
(253, 'Kab. Situbondo', 15),
(254, 'Kab. Sumenep', 15),
(255, 'Kab. Trenggalek', 15),
(256, 'Kab. Tulungagung', 15),
(257, 'Kab. Tuban', 15),
(258, 'Kota Surabaya', 15),
(259, 'Kota Batu', 15),
(260, 'Kota Blitar', 15),
(261, 'Kota Kediri', 15),
(262, 'Kota Madiun', 15),
(263, 'Kota Malang', 15),
(264, 'Kota Mojokerto', 15),
(265, 'Kota Pasuruan', 15),
(266, 'Kota Probolinggo', 15),
(267, 'Kab. Bantul ', 16),
(268, 'Kab. Gunung Kidul', 16),
(269, 'Kab. Kulon Progo', 16),
(270, 'Kab. Sleman', 16),
(271, 'Kota Yogyakarta', 16),
(272, 'Kab. Badung ', 17),
(273, 'Kab. Bangli', 17),
(274, 'Kab. Buleleng', 17),
(275, 'Kab. Gianyar', 17),
(276, 'Kab. Jembrana', 17),
(277, 'Kab. Karang Asem', 17),
(278, 'Kab. Klungkung', 17),
(279, 'Kab. Tabanan', 17),
(280, 'Kota Denpasar', 17),
(281, 'Kab. Bima ', 18),
(282, 'Kab. Dompu ', 18),
(283, 'Kab. Lombok Barat', 18),
(284, 'Kab. Lombok Tengah', 18),
(285, 'Kab. Lombok Timur', 18),
(286, 'Kab. Sumbawa', 18),
(287, 'Kab. Sumbawa Barat', 18),
(288, 'Kab. Lombok Utara', 18),
(289, 'Kota Mataram', 18),
(290, 'Kota Bima', 18),
(291, 'Kab. Alor ', 19),
(292, 'Kab. Belu', 19),
(293, 'Kab. Ende', 19),
(294, 'Kab. Flores Timur', 19),
(295, 'Kab. Kupang', 19),
(296, 'Kab. Lembata', 19),
(297, 'Kab. Manggarai', 19),
(298, 'Kab. Manggarai Barat', 19),
(299, 'Kab. Ngada', 19),
(300, 'Kab. Nagekeo', 19),
(301, 'Kab. Rote Ndao', 19),
(302, 'Kab. Slkka ', 19),
(303, 'Kab. Sumba Barat', 19),
(304, 'Kab. Sumba Barat Daya', 19),
(305, 'Kab. Sumba Tengah', 19),
(306, 'Kab. Manggarai Timur', 19),
(307, 'Kab. Sumba Timur', 19),
(308, 'Kab. Timor Tengah Selatan', 19),
(309, 'Kab. Timor Tengah Utara', 19),
(310, 'Kab. Sabu Raijua', 19),
(311, 'Kab. Malaka', 19),
(312, 'Kota Kupang', 19),
(313, 'Kab. Bengkayang ', 20),
(314, 'Kab. Kapuas Hulu ', 20),
(315, 'Kab. Ketapang', 20),
(316, 'Kab. Kayong Utara', 20),
(317, 'Kab. Kubu Raya', 20),
(318, 'Kab. Landak', 20),
(319, 'Kab. Melawi ', 20),
(320, 'Kab. Pontianak', 20),
(321, 'Kab. Sambas', 20),
(322, 'Kab. Sanggau', 20),
(323, 'Kab. Sintang', 20),
(324, 'Kab. Sekadau', 20),
(325, 'Kota Pontianak', 20),
(326, 'Kota Singkawang', 20),
(327, 'Kab. Barito Selatan ', 21),
(328, 'Kab. Barito Timur', 21),
(329, 'Kab. Barito Utara', 21),
(330, 'Kab. Gunung Mas', 21),
(331, 'Kab. Kapuas', 21),
(332, 'Kab. Katingan', 21),
(333, 'Kab. Kotawaringin Barat', 21),
(334, 'Kab. Kotawaringin Timur', 21),
(335, 'Kab. Lamandau', 21),
(336, 'Kab. Murung Raya', 21),
(337, 'Kab. Pulang Pisau', 21),
(338, 'Kab. Seruyan', 21),
(339, 'Kab. Sukamara', 21),
(340, 'Kota Palangkaraya', 21),
(341, 'Kab. Balangan ', 22),
(342, 'Kab. Banjar ', 22),
(343, 'Kab. Barito Kuala', 22),
(344, 'Kab. Hulu Sungai Selatan', 22),
(345, 'Kab. Hulu Sungai Tengah', 22),
(346, 'Kab. Hulu Sungai Utara', 22),
(347, 'Kab. Kotabaru', 22),
(348, 'Kab. Tabalong', 22),
(349, 'Kab. Tanah Bumbu', 22),
(350, 'Kab. Tanah Laut', 22),
(351, 'Kab. Tapin', 22),
(352, 'Kota Banjarmasin', 22),
(353, 'Kota Banjar Baru', 22),
(354, 'Kab. Berau ', 23),
(355, 'Kab. Bulungan ', 23),
(356, 'Kab. Kutai Barat ', 23),
(357, 'Kab. Kutai Kertanegara ', 23),
(358, 'Kab. Kutai Timur', 23),
(359, 'Kab. Penajam Paser Utara', 23),
(360, 'Kab. Pasir', 23),
(361, 'Kab. Mahakam Ulu', 23),
(362, 'Kota Samarinda', 23),
(363, 'Kota Balikpapan', 23),
(364, 'Kota Bontang', 23),
(365, 'Kota Tarakan', 23),
(366, 'Kab Malinau', 24),
(367, 'Kab. Nunukan', 24),
(368, 'Kab. Tana Tidung', 24),
(369, 'Kab. Bolaang Mongondow ', 25),
(370, 'Kab. Bolaang Mongondow Utara ', 25),
(371, 'Kab. Minahasa ', 25),
(372, 'Kab. Minahasa Tenggara ', 25),
(373, 'Kab. Minahasa Selatan', 25),
(374, 'Kab. Minahasa Utara', 25),
(375, 'Kab. Sangihe Talaud', 25),
(376, 'Kab. Kep. Talaud', 25),
(377, 'Kab. Kep. Siau Tagulandang Biaro', 25),
(378, 'Kab. Bolaang Mongondow Timur', 25),
(379, 'Kab. Bolaang Mongondow Selatan', 25),
(380, 'Kota Manado', 25),
(381, 'Kota Kotamobagu', 25),
(382, 'Kota Bitung', 25),
(383, 'Kota Tomohon', 25),
(384, 'Kab. Banggai ', 26),
(385, 'Kab. Banggai Kepulauan', 26),
(386, 'Kab. Buol', 26),
(387, 'Kab. Donggala', 26),
(388, 'Kab. Morowali', 26),
(389, 'Kab. Parigi Mountong', 26),
(390, 'Kab. Poso', 26),
(391, 'Kab. Tojo Una-Una', 26),
(392, 'Kab. Toli-Toli', 26),
(393, 'Kab. Sigi', 26),
(394, 'Kab. Banggai Laut', 26),
(395, 'Kota Palu', 26),
(396, 'Kab. Selayar ', 27),
(397, 'Kab. Bantaeng ', 27),
(398, 'Kab. Barru ', 27),
(399, 'Kab. Bone', 27),
(400, 'Kab. Bulukumba', 27),
(401, 'Kab. Enrekang', 27),
(402, 'Kab. Gowa', 27),
(403, 'Kab. Jeneponto', 27),
(404, 'Kab. Luwu', 27),
(405, 'Kab. Luwu Timur', 27),
(406, 'Kab. Luwu Utara', 27),
(407, 'Kab. Maros', 27),
(408, 'Kab. Pangkep', 27),
(409, 'Kab. Pinrang', 27),
(410, 'Kab. Sidenreng Rappang', 27),
(411, 'Kab. Sinjai', 27),
(412, 'Kab. Soppeng', 27),
(413, 'Kab. Takalar', 27),
(414, 'Kab. Tanatoraja', 27),
(415, 'Kab. Wajo', 27),
(416, 'Kab. Toraja Utara', 27),
(417, 'Kota Makasar', 27),
(418, 'Kota Pare-Pare', 27),
(419, 'Kota Palopo', 27),
(420, 'Kab. Bombana ', 28),
(421, 'Kab. Buton ', 28),
(422, 'Kab. Konawe (dulu: Kab. Kendari)', 28),
(423, 'Kab. Kolaka', 28),
(424, 'Kab. Kolaka Utara', 28),
(425, 'Kab. Konawe Selatan', 28),
(426, 'Kab. Muna', 28),
(427, 'Kab. Wakatobi', 28),
(428, 'Kab. Konawe Utara', 28),
(429, 'Kab. Buton Utara', 28),
(430, 'Kab. Kolaka Timur', 28),
(431, 'Kota Kendari', 28),
(432, 'Kota Bau-Bau', 28),
(433, 'Kab. Boalemo ', 29),
(434, 'Kab. Bone Bolango', 29),
(435, 'Kab. Gorontalo', 29),
(436, 'Kab. Gorontalo Utara', 29),
(437, 'Kab. Pohuwato', 29),
(438, 'Kota Gorontalo', 29),
(439, 'Kab. Mamuju', 30),
(440, 'Kab. Majene', 30),
(441, 'Kab. Mamuju Utara', 30),
(442, 'Kab. Mamasa', 30),
(443, 'Kab. Polewali Mamasa', 30),
(444, 'Kab. Buru ', 31),
(445, 'Kab. Kepulauan Aru ', 31),
(446, 'Kab. Seram Bagian Barat', 31),
(447, 'Kab. Seram Bagian Timur', 31),
(448, 'Kab. Maluku Tengah', 31),
(449, 'Kab. Maluku Tenggara', 31),
(450, 'Kab. Maluku Tenggara Barat', 31),
(451, 'Kab. Maluku Barat Daya', 31),
(452, 'Kab. Buru Selatan', 31),
(453, 'Kota Ambon', 31),
(454, 'Kota Tual', 31),
(455, 'Kab. Halmahera Barat ', 32),
(456, 'Kab. Halmahera Selatan ', 32),
(457, 'Kab. Halmahera Tengah ', 32),
(458, 'Kab. Halmahera Tirnur', 32),
(459, 'Kab Halmahera Utara', 32),
(460, 'Kab. Kepulauan Sula', 32),
(461, 'Kab. Morotai', 32),
(462, 'Kab. Pulau Taliabu', 32),
(463, 'Kota Ternate', 32),
(464, 'Kota Tidore Kepulauan', 32),
(465, 'Kab. Asmat ', 33),
(466, 'Kab. Biak Numfor', 33),
(467, 'Kab. Boven Digoel', 33),
(468, 'Kab. Jayapura', 33),
(469, 'Kab. Jayawijaya', 33),
(470, 'Kab. Keerom', 33),
(471, 'Kab. Mappi', 33),
(472, 'Kab. Merauke', 33),
(473, 'Kab. Mimika', 33),
(474, 'Kab. Paniai', 33),
(475, 'Kab. Pegunungan Bintang', 33),
(476, 'Kab. Puncak Jaya', 33),
(477, 'Kab. Sarmi', 33),
(478, 'Kab. Mamberamo Raya', 33),
(479, 'Kab. Supiori', 33),
(480, 'Kab. Tolikara', 33),
(481, 'Kab. Yahukimo', 33),
(482, 'Kab. Yapen Waropen', 33),
(483, 'Kab. Waropen', 33),
(484, 'Kab. Nabire', 33),
(485, 'Kab. Mamberamo Tengah', 33),
(486, 'Kab. Yalimo', 33),
(487, 'Kab. Lanny Jaya', 33),
(488, 'Kab. Nduga', 33),
(489, 'Kab. Puncak', 33),
(490, 'Kab. Dogiyai', 33),
(491, 'Kab. Deiyai', 33),
(492, 'Kab. Intan Jaya', 33),
(493, 'Kota Jayapura', 33),
(494, 'Kab. Fak-Fak ', 34),
(495, 'Kab. Kaimana', 34),
(496, 'Kab. Kepulauan Raja Ampat', 34),
(497, 'Kab. Manokwari', 34),
(498, 'Kab. Sorong Selatan', 34),
(499, 'Kab. Teluk Bintuni', 34),
(500, 'Kab. Sorong', 34),
(501, 'Kab. Teluk Wondama', 34),
(502, 'Kab. Tambrauw', 34),
(503, 'Kab. Maybrat', 34),
(504, 'Kab. Manokwari Selatan', 34),
(505, 'Kab. Pegunungan Arfak', 34),
(506, 'Kota Sorong', 34);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `konten` longtext NOT NULL,
  `foto` text NOT NULL,
  `provinsi` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `sub_kategori` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `id_user`, `judul`, `harga`, `konten`, `foto`, `provinsi`, `kota`, `kategori`, `sub_kategori`) VALUES
(17, 2, 'Dongeng anak gaul', '230000', 'Buku anak anak gaul keren', '6881-CONGRADUATIONS.png;1843-IMG-20150119-00096.jpg;', 8, 138, 2, 7),
(18, 2, 'Belajar Sholat', '500000', 'Buat belajar cara-cara sholat', '7528-AM.png;', 12, 161, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(1, 'Nanggroe Aceh Darusalam'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat '),
(4, 'Riau'),
(5, 'Jambi'),
(6, 'Sumatera Selatan '),
(7, 'Bengkulu'),
(8, 'Lampung'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Kepulauan Riau'),
(11, 'DKI Jakarta '),
(12, 'Jawa Barat'),
(13, 'Jawa Tengah'),
(14, 'Banten '),
(15, 'Jawa Timur '),
(16, 'Dl Yogyakarta '),
(17, 'Bali '),
(18, 'Nusa Tenggara Barat '),
(19, 'Nusa Tenggara Timur '),
(20, 'Kalimantan Barat '),
(21, 'Kalimantan Tengah '),
(22, 'Kalimantan Selatan '),
(23, 'Kalimantan Timur '),
(24, 'Kalimantan Utara '),
(25, 'Sulawesi Utara '),
(26, 'Sulawesi Tengah '),
(27, 'Sulawesi Selatan '),
(28, 'Sulawesi Tenggara '),
(29, 'Gorontalo '),
(30, 'Sulawesi Barat '),
(31, 'Maluku '),
(32, 'Maluku Utara '),
(33, 'Papua'),
(34, 'Papua Barat ');

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
  `bio` longtext,
  `foto` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `provinsi`, `kota`, `telepon`, `pendidikan`, `bb`, `fb`, `twitter`, `ig`, `bio`, `foto`, `alamat`) VALUES
(2, 'Luqman', 'loekmansungkar', 'aa@aa.com', '87a80cf1e0c1a9109b65fc852a209473', 1, 1, '123456789', 'SMA', NULL, 'Luqman Sungkar', '@LuqmanSungkar', '-', 'keren', '44839-pp-auricular6.png', 'bekasi'),
(5, 'luqman', 'luqman', 'aaa@aa.com', '87a80cf1e0c1a9109b65fc852a209473', 4, 76, '123123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=507;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
