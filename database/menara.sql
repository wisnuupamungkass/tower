-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 07:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `menara`
--

-- --------------------------------------------------------

--
-- Table structure for table `batas_kota`
--

CREATE TABLE IF NOT EXISTS `batas_kota` (
`id_batas` int(11) NOT NULL,
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batas_kota`
--

INSERT INTO `batas_kota` (`id_batas`, `latitude`, `longitude`) VALUES
(1, -7.550778, 110.710779),
(2, -7.55318, 110.722415),
(3, -7.556063, 110.717082),
(4, -7.568075, 110.716112),
(5, -7.574801, 110.711749),
(6, -7.585372, 110.703992),
(7, -7.593059, 110.697689),
(8, -7.599786, 110.710779),
(9, -7.602188, 110.731141),
(10, -7.602668, 110.739868),
(11, -7.607473, 110.739868),
(12, -7.615641, 110.739868),
(13, -7.623328, 110.751503),
(14, -7.62477, 110.763139),
(15, -7.633418, 110.763139),
(16, -7.634379, 110.762169),
(17, -7.639184, 110.761685),
(18, -7.643988, 110.771866),
(19, -7.639184, 110.776714),
(20, -7.641586, 110.785925),
(21, -7.644888, 110.787622),
(22, -7.651375, 110.791016),
(23, -7.653417, 110.788956),
(24, -7.655459, 110.785683),
(25, -7.658102, 110.785198),
(26, -7.659904, 110.782047),
(27, -7.663748, 110.776472),
(28, -7.669994, 110.776229),
(29, -7.676721, 110.775138),
(30, -7.679724, 110.772714),
(31, -7.680325, 110.770533),
(32, -7.687533, 110.763745),
(33, -7.691737, 110.763866),
(34, -7.69498, 110.77029),
(35, -7.699665, 110.767745),
(36, -7.70447, 110.765442),
(37, -7.711198, 110.766169),
(38, -7.714922, 110.763503),
(39, -7.720087, 110.7612),
(40, -7.733301, 110.755382),
(41, -7.739067, 110.749928),
(42, -7.752761, 110.740111),
(43, -7.759488, 110.733808),
(44, -7.761651, 110.728596),
(45, -7.769459, 110.724718),
(46, -7.774864, 110.722294),
(47, -7.779549, 110.719142),
(48, -7.788198, 110.712961),
(49, -7.791562, 110.709325),
(50, -7.794685, 110.710416),
(51, -7.795286, 110.715143),
(52, -7.796847, 110.722778),
(53, -7.803454, 110.729202),
(54, -7.806217, 110.735262),
(55, -7.807058, 110.740232),
(56, -7.812944, 110.745807),
(57, -7.81859, 110.750049),
(58, -7.826518, 110.750534),
(59, -7.826278, 110.758412),
(60, -7.824836, 110.765685),
(61, -7.814385, 110.765927),
(62, -7.811502, 110.766291),
(63, -7.810421, 110.770533),
(64, -7.813064, 110.773563),
(65, -7.817629, 110.778168),
(66, -7.818229, 110.784592),
(67, -7.817028, 110.788107),
(68, -7.810662, 110.785683),
(69, -7.805136, 110.785077),
(70, -7.800931, 110.787016),
(71, -7.798048, 110.794289),
(72, -7.796246, 110.80144),
(73, -7.793964, 110.803742),
(74, -7.792763, 110.807621),
(75, -7.794204, 110.811015),
(76, -7.795285, 110.818287),
(77, -7.796847, 110.824105),
(78, -7.797568, 110.831134),
(79, -7.798168, 110.834407),
(80, -7.800811, 110.837437),
(81, -7.805016, 110.839497),
(82, -7.813184, 110.844346),
(83, -7.816307, 110.848224),
(84, -7.814506, 110.854406),
(85, -7.812824, 110.856951),
(86, -7.810061, 110.858648),
(87, -7.805136, 110.858648),
(88, -7.802373, 110.858527),
(89, -7.797928, 110.861678),
(90, -7.792042, 110.861678),
(91, -7.784594, 110.856951),
(92, -7.781591, 110.859496),
(93, -7.771621, 110.860708),
(94, -7.766576, 110.864708),
(95, -7.760449, 110.86289),
(96, -7.755764, 110.866526),
(97, -7.753122, 110.872586),
(98, -7.754803, 110.878646),
(99, -7.752401, 110.880828),
(100, -7.750118, 110.87998),
(101, -7.749998, 110.882646),
(102, -7.753602, 110.882525),
(103, -7.755164, 110.88107),
(104, -7.756485, 110.882282),
(105, -7.755524, 110.885919),
(106, -7.753482, 110.890403),
(107, -7.753362, 110.896342),
(108, -7.753842, 110.900463),
(109, -7.755764, 110.904705),
(110, -7.757686, 110.907614),
(111, -7.76093, 110.912826),
(112, -7.775825, 110.925431),
(113, -7.781591, 110.93743),
(114, -7.78051, 110.939854),
(115, -7.777387, 110.941551),
(116, -7.77078, 110.941672),
(117, -7.758167, 110.942036),
(118, -7.746395, 110.942278),
(119, -7.734983, 110.944096),
(120, -7.71324, 110.947126),
(121, -7.709036, 110.949066),
(122, -7.705792, 110.950035),
(123, -7.688013, 110.954399),
(124, -7.686571, 110.959368),
(125, -7.68513, 110.961307),
(126, -7.681286, 110.961307),
(127, -7.678883, 110.957186),
(128, -7.678043, 110.953914),
(129, -7.668192, 110.950399),
(130, -7.659543, 110.948945),
(131, -7.655699, 110.949308),
(132, -7.653297, 110.94846),
(133, -7.652095, 110.94749),
(134, -7.647651, 110.947248),
(135, -7.639002, 110.946278),
(136, -7.634557, 110.948702),
(137, -7.625668, 110.950399),
(138, -7.617379, 110.948096),
(139, -7.616058, 110.94652),
(140, -7.610532, 110.917674),
(141, -7.612214, 110.906402),
(142, -7.605607, 110.909553),
(143, -7.595877, 110.911614),
(144, -7.584585, 110.915492),
(145, -7.565605, 110.871011),
(146, -7.566446, 110.858405),
(147, -7.569209, 110.853921),
(148, -7.57017, 110.848103),
(149, -7.574735, 110.842649),
(150, -7.581822, 110.839619),
(151, -7.586147, 110.838528),
(152, -7.590111, 110.833922),
(153, -7.589991, 110.82871),
(154, -7.592033, 110.820469),
(155, -7.587228, 110.820226),
(156, -7.583985, 110.815014),
(157, -7.578099, 110.810288),
(158, -7.57029, 110.802288),
(159, -7.568849, 110.795986),
(160, -7.570891, 110.790047),
(161, -7.568609, 110.786774),
(162, -7.562963, 110.786895),
(163, -7.554793, 110.779502),
(164, -7.552391, 110.771502),
(165, -7.544943, 110.772229),
(166, -7.538937, 110.761079),
(167, -7.544583, 110.757685),
(168, -7.54206, 110.753322),
(169, -7.538937, 110.744716),
(170, -7.537135, 110.732111),
(171, -7.536054, 110.725081),
(172, -7.536654, 110.716355),
(173, -7.541099, 110.710537),
(174, -7.550778, 110.710779);

-- --------------------------------------------------------

--
-- Table structure for table `fokus_peta`
--

CREATE TABLE IF NOT EXISTS `fokus_peta` (
`id_fokus` int(11) NOT NULL,
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  `zoom` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fokus_peta`
--

INSERT INTO `fokus_peta` (`id_fokus`, `latitude`, `longitude`, `zoom`) VALUES
(1, -7.681543, 110.835936, 12);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` varchar(20) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
('33.11.01', 'Baki'),
('33.11.02', 'Bendosari'),
('33.11.03', 'Bulu'),
('33.11.04', 'Gatak'),
('33.11.05', 'Grogol'),
('33.11.06', 'Kartasura'),
('33.11.07', 'Mojolaban'),
('33.11.08', 'Nguter'),
('33.11.09', 'Polokarto'),
('33.11.10', 'Sukoharjo'),
('33.11.11', 'Tawangsari'),
('33.11.12', 'Weru');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id_kelurahan` varchar(20) NOT NULL,
  `id_kecamatan` varchar(20) NOT NULL,
  `nama_kelurahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `id_kecamatan`, `nama_kelurahan`) VALUES
('33.11.01.01', '33.11.01', 'Kudu'),
('33.11.05.01', '33.11.05', 'Cemani'),
('33.11.10.01', '33.11.10', 'Gayam'),
('33.11.10.02', '33.11.01', 'Jetis');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE IF NOT EXISTS `penyewa` (
  `id_penyewa` varchar(10) NOT NULL,
  `id_site` varchar(50) NOT NULL,
  `penyewa_1` varchar(50) DEFAULT NULL,
  `penyewa_2` varchar(50) DEFAULT NULL,
  `penyewa_3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id_penyewa`, `id_site`, `penyewa_1`, `penyewa_2`, `penyewa_3`) VALUES
('SEWA0001', 'TELKOMSEL01', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Solusi Menara Indonesia'),
('SEWA0002', 'TELKOMSEL02', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Solusindo Kreasi Pratama'),
('SEWA0003', 'TELKOMSEL03', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Solusi Tunas Pratama'),
('SEWA0004', 'TELKOMSEL04', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Inti Bangun Sejahtera'),
('SEWA0005', 'TELKOMSEL05', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Retower Asia'),
('SEWA0006', 'TELKOMSEL06', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Centratama Menara Indonesia'),
('SEWA0007', 'TELKOMSEL07', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Linggarjati Al Manshurin'),
('SEWA0008', 'TELKOMSEL08', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0009', 'TELKOMSEL09', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Infrasys Persada'),
('SEWA0010', 'TELKOMSEL10', 'PT Telekomunikasi Selular', 'PT Solusi Tunas Pratama', 'PT Solusi Menara Indonesia'),
('SEWA0011', 'TELKOMSEL11', 'PT Telekomunikasi Selular', 'PT Solusi Menara Indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0012', 'TELKOMSEL12', 'PT Telekomunikasi Selular', 'PT Solusi Menara Indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0013', 'TELKOMSEL13', 'PT Telekomunikasi Selular', 'PT Solusi Menara Indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0014', 'TELKOMSEL14', 'PT Telekomunikasi Selular', 'PT Solusi Menara Indonesia', 'PT Retower Asia'),
('SEWA0015', 'TELKOMSEL15', 'PT Telekomunikasi Selular', 'PT Solusi Menara Indonesia', 'PT Centratama Menara Indonesia'),
('SEWA0016', 'TELKOMSEL16', 'PT Telekomunikasi Selular', 'PT Solusi Menara Indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0017', 'TELKOMSEL17', 'PT Telekomunikasi Selular', 'PT Solusi Menara Indonesia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0018', 'TELKOMSEL18', 'PT Telekomunikasi Selular', 'PT Solusi Menara Indonesia', 'PT Infrasys Persada'),
('SEWA0019', 'TELKOMSEL19', 'PT Telekomunikasi Selular', 'PT Solusi Menara Indonesia', 'PT Solusi Menara Indonesia'),
('SEWA0020', 'TELKOMSEL20', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0021', 'TELKOMSEL21', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0022', 'TELKOMSEL22', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0023', 'TELKOMSEL23', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Retower Asia'),
('SEWA0024', 'TELKOMSEL24', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Centratama Menara Indonesia'),
('SEWA0025', 'TELKOMSEL25', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0026', 'TELKOMSEL26', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0027', 'TELKOMSEL27', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Infrasys Persada'),
('SEWA0028', 'TELKOMSEL28', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Solusi Menara Indonesia'),
('SEWA0029', 'TELKOMSEL29', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0030', 'TELKOMSEL30', 'PT Telekomunikasi Selular', 'PT Centratama Menara Indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0031', 'INDOSAT01', 'PT Indosat', 'PT Centratama Menara Indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0032', 'INDOSAT02', 'PT Indosat', 'PT Centratama Menara Indonesia', 'PT Retower Asia'),
('SEWA0033', 'INDOSAT03', 'PT Indosat', 'PT Linggarjati Al Manshurin', 'PT Centratama Menara Indonesia'),
('SEWA0034', 'INDOSAT04', 'PT Indosat', 'PT Sampoerna Telekomunikasi indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0035', 'INDOSAT05', 'PT Indosat', 'PT Infrasys Persada', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0036', 'INDOSAT06', 'PT Indosat', 'PT Solusi Menara Indonesia', 'PT Infrasys Persada'),
('SEWA0037', 'INDOSAT07', 'PT Indosat', 'PT Solusindo Kreasi Pratama', 'PT Solusi Menara Indonesia'),
('SEWA0038', 'INDOSAT08', 'PT Indosat', 'PT Solusi Tunas Pratama', 'PT Solusindo Kreasi Pratama'),
('SEWA0039', 'INDOSAT09', 'PT Indosat', 'PT Inti Bangun Sejahtera', 'PT Solusi Tunas Pratama'),
('SEWA0040', 'INDOSAT10', 'PT Indosat', 'PT Solusi Menara Indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0041', 'INDOSAT11', 'PT Indosat', 'PT Solusindo Kreasi Pratama', 'PT Retower Asia'),
('SEWA0042', 'INDOSAT12', 'PT Indosat', 'PT Solusi Tunas Pratama', 'PT Centratama Menara Indonesia'),
('SEWA0043', 'INDOSAT13', 'PT Indosat', 'PT Inti Bangun Sejahtera', 'PT Linggarjati Al Manshurin'),
('SEWA0044', 'INDOSAT14', 'PT Indosat', 'PT Retower Asia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0045', 'INDOSAT15', 'PT Indosat', 'PT Centratama Menara Indonesia', 'PT Infrasys Persada'),
('SEWA0046', 'INDOSAT16', 'PT Indosat', 'PT Linggarjati Al Manshurin', 'PT Solusi Menara Indonesia'),
('SEWA0047', 'INDOSAT17', 'PT Indosat', 'PT Sampoerna Telekomunikasi indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0048', 'INDOSAT18', 'PT Indosat', 'PT Infrasys Persada', 'PT Solusi Tunas Pratama'),
('SEWA0049', 'INDOSAT19', 'PT Indosat', 'PT Solusi Menara Indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0050', 'INDOSAT20', 'PT Indosat', 'PT Solusindo Kreasi Pratama', 'PT Retower Asia'),
('SEWA0051', 'INDOSAT21', 'PT Indosat', 'PT Solusi Tunas Pratama', 'PT Centratama Menara Indonesia'),
('SEWA0052', 'INDOSAT22', 'PT Indosat', 'PT Inti Bangun Sejahtera', 'PT Linggarjati Al Manshurin'),
('SEWA0053', 'INDOSAT23', 'PT Indosat', 'PT Solusi Menara Indonesia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0054', 'INDOSAT24', 'PT Indosat', 'PT Solusindo Kreasi Pratama', 'PT Infrasys Persada'),
('SEWA0055', 'INDOSAT25', 'PT Indosat', 'PT Solusi Tunas Pratama', 'PT Solusi Menara Indonesia'),
('SEWA0056', 'INDOSAT26', 'PT Indosat', 'PT Inti Bangun Sejahtera', 'PT Solusindo Kreasi Pratama'),
('SEWA0057', 'INDOSAT27', 'PT Indosat', 'PT Retower Asia', 'PT Solusi Tunas Pratama'),
('SEWA0058', 'INDOSAT28', 'PT Indosat', 'PT Centratama Menara Indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0059', 'XL01', 'PT XL Axiata', 'PT Linggarjati Al Manshurin', 'PT Retower Asia'),
('SEWA0060', 'XL02', 'PT XL Axiata', 'PT Sampoerna Telekomunikasi indonesia', 'PT Centratama Menara Indonesia'),
('SEWA0061', 'XL03', 'PT XL Axiata', 'PT Infrasys Persada', 'PT Linggarjati Al Manshurin'),
('SEWA0062', 'XL04', 'PT XL Axiata', 'PT Solusi Menara Indonesia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0063', 'XL05', 'PT XL Axiata', 'PT Solusindo Kreasi Pratama', 'PT Infrasys Persada'),
('SEWA0064', 'XL06', 'PT XL Axiata', 'PT Solusi Tunas Pratama', 'PT Solusi Menara Indonesia'),
('SEWA0065', 'XL07', 'PT XL Axiata', 'PT Inti Bangun Sejahtera', 'PT Solusindo Kreasi Pratama'),
('SEWA0066', 'XL08', 'PT XL Axiata', 'PT Solusi Menara Indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0067', 'XL09', 'PT XL Axiata', 'PT Solusindo Kreasi Pratama', 'PT Inti Bangun Sejahtera'),
('SEWA0068', 'XL10', 'PT XL Axiata', 'PT Solusi Tunas Pratama', 'PT Retower Asia'),
('SEWA0069', 'XL11', 'PT XL Axiata', 'PT Inti Bangun Sejahtera', 'PT Centratama Menara Indonesia'),
('SEWA0070', 'XL12', 'PT XL Axiata', 'PT Retower Asia', 'PT Linggarjati Al Manshurin'),
('SEWA0071', 'XL13', 'PT XL Axiata', 'PT Centratama Menara Indonesia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0072', 'XL14', 'PT XL Axiata', 'PT Linggarjati Al Manshurin', 'PT Infrasys Persada'),
('SEWA0073', 'XL15', 'PT XL Axiata', 'PT Sampoerna Telekomunikasi indonesia', 'PT Solusi Menara Indonesia'),
('SEWA0074', 'XL16', 'PT XL Axiata', 'PT Infrasys Persada', 'PT Solusindo Kreasi Pratama'),
('SEWA0075', 'XL17', 'PT XL Axiata', 'PT Solusi Menara Indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0076', 'XL18', 'PT XL Axiata', 'PT Solusindo Kreasi Pratama', 'PT Inti Bangun Sejahtera'),
('SEWA0077', 'XL19', 'PT XL Axiata', 'PT Solusi Tunas Pratama', 'PT Retower Asia'),
('SEWA0078', 'AXIS01', 'PT Axis Telekom Indonesia', 'PT Inti Bangun Sejahtera', 'PT Centratama Menara Indonesia'),
('SEWA0079', 'AXIS02', 'PT Axis Telekom Indonesia', 'PT Solusi Menara Indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0080', 'AXIS03', 'PT Axis Telekom Indonesia', 'PT Solusindo Kreasi Pratama', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0081', 'AXIS04', 'PT Axis Telekom Indonesia', 'PT Solusi Tunas Pratama', 'PT Infrasys Persada'),
('SEWA0082', 'AXIS05', 'PT Axis Telekom Indonesia', 'PT Inti Bangun Sejahtera', 'PT Solusi Menara Indonesia'),
('SEWA0083', 'AXIS06', 'PT Axis Telekom Indonesia', 'PT Retower Asia', 'PT Solusindo Kreasi Pratama'),
('SEWA0084', 'AXIS07', 'PT Axis Telekom Indonesia', 'PT Centratama Menara Indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0085', 'AXIS08', 'PT Axis Telekom Indonesia', 'PT Linggarjati Al Manshurin', 'PT Inti Bangun Sejahtera'),
('SEWA0086', 'AXIS09', 'PT Axis Telekom Indonesia', 'PT Sampoerna Telekomunikasi indonesia', 'PT Retower Asia'),
('SEWA0087', 'AXIS10', 'PT Axis Telekom Indonesia', 'PT Infrasys Persada', 'PT Centratama Menara Indonesia'),
('SEWA0088', 'AXIS11', 'PT Axis Telekom Indonesia', 'PT Solusi Menara Indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0089', 'TBG01', 'PT Tower Bersama Group', 'PT Solusindo Kreasi Pratama', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0090', 'TBG02', 'PT Tower Bersama Group', 'PT Solusi Tunas Pratama', 'PT Infrasys Persada'),
('SEWA0091', 'TBG03', 'PT Tower Bersama Group', 'PT Inti Bangun Sejahtera', 'PT Solusi Menara Indonesia'),
('SEWA0092', 'TBG04', 'PT Tower Bersama Group', 'PT Solusi Menara Indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0093', 'TBG05', 'PT Tower Bersama Group', 'PT Solusindo Kreasi Pratama', 'PT Solusi Tunas Pratama'),
('SEWA0094', 'TBG06', 'PT Tower Bersama Group', 'PT Solusi Tunas Pratama', 'PT Inti Bangun Sejahtera'),
('SEWA0095', 'TBG07', 'PT Tower Bersama Group', 'PT Inti Bangun Sejahtera', 'PT Retower Asia'),
('SEWA0096', 'TBG08', 'PT Tower Bersama Group', 'PT Retower Asia', 'PT Centratama Menara Indonesia'),
('SEWA0097', 'TBG09', 'PT Tower Bersama Group', 'PT Centratama Menara Indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0098', 'TBG10', 'PT Tower Bersama Group', 'PT Linggarjati Al Manshurin', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0099', 'TBG11', 'PT Tower Bersama Group', 'PT Sampoerna Telekomunikasi indonesia', 'PT Infrasys Persada'),
('SEWA0100', 'SMI01', 'PT Solusi Menara Indonesia', 'PT Infrasys Persada', 'PT Solusi Menara Indonesia'),
('SEWA0101', 'SMI02', 'PT Solusi Menara Indonesia', 'PT Solusi Menara Indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0102', 'SMI03', 'PT Solusi Menara Indonesia', 'PT Solusindo Kreasi Pratama', 'PT Solusi Tunas Pratama'),
('SEWA0103', 'SMI04', 'PT Solusi Menara Indonesia', 'PT Solusi Tunas Pratama', 'PT Inti Bangun Sejahtera'),
('SEWA0104', 'SMI05', 'PT Solusi Menara Indonesia', 'PT Inti Bangun Sejahtera', 'PT Retower Asia'),
('SEWA0105', 'SMI06', 'PT Solusi Menara Indonesia', 'PT Solusi Menara Indonesia', 'PT Centratama Menara Indonesia'),
('SEWA0106', 'SMI07', 'PT Solusi Menara Indonesia', 'PT Solusindo Kreasi Pratama', 'PT Linggarjati Al Manshurin'),
('SEWA0107', 'SMI08', 'PT Solusi Menara Indonesia', 'PT Solusi Tunas Pratama', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0108', 'SMI09', 'PT Solusi Menara Indonesia', 'PT Inti Bangun Sejahtera', 'PT Infrasys Persada'),
('SEWA0109', 'SMI10', 'PT Solusi Menara Indonesia', 'PT Retower Asia', 'PT Solusi Menara Indonesia'),
('SEWA0110', 'SMI11', 'PT Solusi Menara Indonesia', 'PT Centratama Menara Indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0111', 'SKP01', 'PT Solusindo Kreasi Pratama', 'PT Linggarjati Al Manshurin', 'PT Solusi Tunas Pratama'),
('SEWA0112', 'SKP02', 'PT Solusindo Kreasi Pratama', 'PT Sampoerna Telekomunikasi indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0113', 'SKP03', 'PT Solusindo Kreasi Pratama', 'PT Infrasys Persada', 'PT Retower Asia'),
('SEWA0114', 'SKP04', 'PT Solusindo Kreasi Pratama', 'PT Solusi Menara Indonesia', 'PT Centratama Menara Indonesia'),
('SEWA0115', 'SKP05', 'PT Solusindo Kreasi Pratama', 'PT Solusindo Kreasi Pratama', 'PT Linggarjati Al Manshurin'),
('SEWA0116', 'SKP06', 'PT Solusindo Kreasi Pratama', 'PT Solusi Tunas Pratama', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0117', 'SKP07', 'PT Solusindo Kreasi Pratama', 'PT Inti Bangun Sejahtera', 'PT Infrasys Persada'),
('SEWA0118', 'SKP08', 'PT Solusindo Kreasi Pratama', 'PT Solusi Menara Indonesia', 'PT Solusi Menara Indonesia'),
('SEWA0119', 'MITRATEL01', 'PT Dayamitra Telekomunikasi', 'PT Solusindo Kreasi Pratama', 'PT Solusindo Kreasi Pratama'),
('SEWA0120', 'MITRATEL02', 'PT Dayamitra Telekomunikasi', 'PT Solusi Tunas Pratama', 'PT Solusi Tunas Pratama'),
('SEWA0121', 'MITRATEL03', 'PT Dayamitra Telekomunikasi', 'PT Inti Bangun Sejahtera', 'PT Inti Bangun Sejahtera'),
('SEWA0122', 'MITRATEL04', 'PT Dayamitra Telekomunikasi', 'PT Retower Asia', 'PT Retower Asia'),
('SEWA0123', 'MITRATEL05', 'PT Dayamitra Telekomunikasi', 'PT Centratama Menara Indonesia', 'PT Centratama Menara Indonesia'),
('SEWA0124', 'MITRATEL06', 'PT Dayamitra Telekomunikasi', 'PT Linggarjati Al Manshurin', 'PT Linggarjati Al Manshurin'),
('SEWA0125', 'MITRATEL07', 'PT Dayamitra Telekomunikasi', 'PT Sampoerna Telekomunikasi indonesia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0126', 'MITRATEL08', 'PT Dayamitra Telekomunikasi', 'PT Infrasys Persada', 'PT Infrasys Persada'),
('SEWA0127', 'MITRATEL09', 'PT Dayamitra Telekomunikasi', 'PT Solusi Menara Indonesia', 'PT Solusi Menara Indonesia'),
('SEWA0128', 'MITRATEL10', 'PT Dayamitra Telekomunikasi', 'PT Solusindo Kreasi Pratama', 'PT Solusindo Kreasi Pratama'),
('SEWA0129', 'MITRATEL11', 'PT Dayamitra Telekomunikasi', 'PT Solusi Tunas Pratama', 'PT Solusi Tunas Pratama'),
('SEWA0130', 'STP01', 'PT Solusi Tunas Pratama', 'PT Inti Bangun Sejahtera', 'PT Inti Bangun Sejahtera'),
('SEWA0131', 'STP02', 'PT Solusi Tunas Pratama', 'PT Solusi Menara Indonesia', 'PT Retower Asia'),
('SEWA0132', 'STP03', 'PT Solusi Tunas Pratama', 'PT Solusindo Kreasi Pratama', 'PT Centratama Menara Indonesia'),
('SEWA0133', 'STP04', 'PT Solusi Tunas Pratama', 'PT Solusi Tunas Pratama', 'PT Linggarjati Al Manshurin'),
('SEWA0134', 'STP05', 'PT Solusi Tunas Pratama', 'PT Inti Bangun Sejahtera', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0135', 'STP06', 'PT Solusi Tunas Pratama', 'PT Retower Asia', 'PT Infrasys Persada'),
('SEWA0136', 'STP07', 'PT Solusi Tunas Pratama', 'PT Centratama Menara Indonesia', 'PT Solusi Menara Indonesia'),
('SEWA0137', 'STP08', 'PT Solusi Tunas Pratama', 'PT Linggarjati Al Manshurin', 'PT Solusindo Kreasi Pratama'),
('SEWA0138', 'STP09', 'PT Solusi Tunas Pratama', 'PT Sampoerna Telekomunikasi indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0139', 'STP10', 'PT Solusi Tunas Pratama', 'PT Infrasys Persada', 'PT Inti Bangun Sejahtera'),
('SEWA0140', 'STP11', 'PT Solusi Tunas Pratama', 'PT Solusi Menara Indonesia', 'PT Retower Asia'),
('SEWA0141', 'STP12', 'PT Solusi Tunas Pratama', 'PT Solusindo Kreasi Pratama', 'PT Centratama Menara Indonesia'),
('SEWA0142', 'STP13', 'PT Solusi Tunas Pratama', 'PT Solusi Tunas Pratama', 'PT Linggarjati Al Manshurin'),
('SEWA0143', 'STP14', 'PT Solusi Tunas Pratama', 'PT Inti Bangun Sejahtera', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0144', 'STP15', 'PT Solusi Tunas Pratama', 'PT Solusi Menara Indonesia', 'PT Infrasys Persada'),
('SEWA0145', 'STP16', 'PT Solusi Tunas Pratama', 'PT Solusindo Kreasi Pratama', 'PT Solusi Menara Indonesia'),
('SEWA0146', 'STP17', 'PT Solusi Tunas Pratama', 'PT Solusi Tunas Pratama', 'PT Solusindo Kreasi Pratama'),
('SEWA0147', 'IBS01', 'PT Inti Bangun Sejahtera', 'PT Inti Bangun Sejahtera', 'PT Solusi Tunas Pratama'),
('SEWA0148', 'IBS02', 'PT Inti Bangun Sejahtera', 'PT Retower Asia', 'PT Inti Bangun Sejahtera'),
('SEWA0149', 'IBS03', 'PT Inti Bangun Sejahtera', 'PT Centratama Menara Indonesia', 'PT Retower Asia'),
('SEWA0150', 'IBS04', 'PT Inti Bangun Sejahtera', 'PT Linggarjati Al Manshurin', 'PT Centratama Menara Indonesia'),
('SEWA0151', 'IBS05', 'PT Inti Bangun Sejahtera', 'PT Sampoerna Telekomunikasi indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0152', 'IBS06', 'PT Inti Bangun Sejahtera', 'PT Infrasys Persada', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0153', 'IBS07', 'PT Inti Bangun Sejahtera', 'PT Solusi Menara Indonesia', 'PT Infrasys Persada'),
('SEWA0154', 'IBS08', 'PT Inti Bangun Sejahtera', 'PT Solusindo Kreasi Pratama', 'PT Solusi Menara Indonesia'),
('SEWA0155', 'IBS09', 'PT Inti Bangun Sejahtera', 'PT Solusi Tunas Pratama', 'PT Solusindo Kreasi Pratama'),
('SEWA0156', 'IBS10', 'PT Inti Bangun Sejahtera', 'PT Inti Bangun Sejahtera', 'PT Solusi Tunas Pratama'),
('SEWA0157', 'IBS11', 'PT Inti Bangun Sejahtera', 'PT Solusi Menara Indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0158', 'IBS12', 'PT Inti Bangun Sejahtera', 'PT Solusindo Kreasi Pratama', 'PT Retower Asia'),
('SEWA0159', 'RETOWER01', 'PT Retower Asia', 'PT Solusi Tunas Pratama', 'PT Centratama Menara Indonesia'),
('SEWA0160', 'RETOWER02', 'PT Retower Asia', 'PT Inti Bangun Sejahtera', 'PT Linggarjati Al Manshurin'),
('SEWA0161', 'RETOWER03', 'PT Retower Asia', 'PT Retower Asia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0162', 'RETOWER04', 'PT Retower Asia', 'PT Centratama Menara Indonesia', 'PT Infrasys Persada'),
('SEWA0163', 'RETOWER05', 'PT Retower Asia', 'PT Linggarjati Al Manshurin', 'PT Solusi Menara Indonesia'),
('SEWA0164', 'RETOWER06', 'PT Retower Asia', 'PT Sampoerna Telekomunikasi indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0165', 'RETOWER07', 'PT Retower Asia', 'PT Infrasys Persada', 'PT Solusi Tunas Pratama'),
('SEWA0166', 'RETOWER08', 'PT Retower Asia', 'PT Solusi Menara Indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0167', 'RETOWER09', 'PT Retower Asia', 'PT Solusindo Kreasi Pratama', 'PT Retower Asia'),
('SEWA0168', 'RETOWER10', 'PT Retower Asia', 'PT Solusi Tunas Pratama', 'PT Centratama Menara Indonesia'),
('SEWA0169', 'LINGGARJATI01', 'PT Linggarjati Al Manshurin', 'PT Inti Bangun Sejahtera', 'PT Linggarjati Al Manshurin'),
('SEWA0170', 'LINGGARJATI02', 'PT Linggarjati Al Manshurin', 'PT Solusi Menara Indonesia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0171', 'STI01', 'PT Sampoerna Telekomunikasi indonesia', 'PT Solusindo Kreasi Pratama', 'PT Infrasys Persada'),
('SEWA0172', 'H3INDONESIA01', 'PT Hutchison 3 Indonesia', 'PT Solusi Tunas Pratama', 'PT Solusi Menara Indonesia'),
('SEWA0173', 'H3INDONESIA02', 'PT Hutchison 3 Indonesia', 'PT Inti Bangun Sejahtera', 'PT Solusindo Kreasi Pratama'),
('SEWA0174', 'H3INDONESIA03', 'PT Hutchison 3 Indonesia', 'PT Retower Asia', 'PT Solusi Tunas Pratama'),
('SEWA0175', 'H3INDONESIA04', 'PT Hutchison 3 Indonesia', 'PT Centratama Menara Indonesia', 'PT Inti Bangun Sejahtera'),
('SEWA0176', 'H3INDONESIA05', 'PT Hutchison 3 Indonesia', 'PT Linggarjati Al Manshurin', 'PT Retower Asia'),
('SEWA0177', 'H3INDONESIA06', 'PT Hutchison 3 Indonesia', 'PT Sampoerna Telekomunikasi indonesia', 'PT Centratama Menara Indonesia'),
('SEWA0178', 'H3INDONESIA07', 'PT Hutchison 3 Indonesia', 'PT Infrasys Persada', 'PT Linggarjati Al Manshurin'),
('SEWA0179', 'H3INDONESIA08', 'PT Hutchison 3 Indonesia', 'PT Solusi Menara Indonesia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0180', 'H3INDONESIA09', 'PT Hutchison 3 Indonesia', 'PT Solusindo Kreasi Pratama', 'PT Infrasys Persada'),
('SEWA0181', 'H3INDONESIA10', 'PT Hutchison 3 Indonesia', 'PT Solusi Tunas Pratama', 'PT Solusi Menara Indonesia'),
('SEWA0182', 'H3INDONESIA11', 'PT Hutchison 3 Indonesia', 'PT Inti Bangun Sejahtera', 'PT Solusindo Kreasi Pratama'),
('SEWA0183', 'H3INDONESIA12', 'PT Hutchison 3 Indonesia', 'PT Solusi Menara Indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0184', 'H3INDONESIA13', 'PT Hutchison 3 Indonesia', 'PT Solusindo Kreasi Pratama', 'PT Inti Bangun Sejahtera'),
('SEWA0185', 'H3INDONESIA14', 'PT Hutchison 3 Indonesia', 'PT Solusi Tunas Pratama', 'PT Retower Asia'),
('SEWA0186', 'H3INDONESIA15', 'PT Hutchison 3 Indonesia', 'PT Inti Bangun Sejahtera', 'PT Centratama Menara Indonesia'),
('SEWA0187', 'H3INDONESIA16', 'PT Hutchison 3 Indonesia', 'PT Retower Asia', 'PT Linggarjati Al Manshurin'),
('SEWA0188', 'H3INDONESIA17', 'PT Hutchison 3 Indonesia', 'PT Centratama Menara Indonesia', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0189', 'H3INDONESIA18', 'PT Hutchison 3 Indonesia', 'PT Linggarjati Al Manshurin', 'PT Infrasys Persada'),
('SEWA0190', 'H3INDONESIA19', 'PT Hutchison 3 Indonesia', 'PT Sampoerna Telekomunikasi indonesia', 'PT Solusi Menara Indonesia'),
('SEWA0191', 'H3INDONESIA20', 'PT Hutchison 3 Indonesia', 'PT Infrasys Persada', 'PT Solusindo Kreasi Pratama'),
('SEWA0192', 'H3INDONESIA21', 'PT Hutchison 3 Indonesia', 'PT Solusi Menara Indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0193', 'H3INDONESIA22', 'PT Hutchison 3 Indonesia', 'PT Solusindo Kreasi Pratama', 'PT Inti Bangun Sejahtera'),
('SEWA0194', 'H3INDONESIA23', 'PT Hutchison 3 Indonesia', 'PT Solusi Tunas Pratama', 'PT Retower Asia'),
('SEWA0195', 'H3INDONESIA24', 'PT Hutchison 3 Indonesia', 'PT Inti Bangun Sejahtera', 'PT Centratama Menara Indonesia'),
('SEWA0196', 'H3INDONESIA25', 'PT Hutchison 3 Indonesia', 'PT Solusi Menara Indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0197', 'H3INDONESIA26', 'PT Hutchison 3 Indonesia', 'PT Solusindo Kreasi Pratama', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0198', 'H3INDONESIA27', 'PT Hutchison 3 Indonesia', 'PT Solusi Tunas Pratama', 'PT Infrasys Persada'),
('SEWA0199', 'PROTELINDO01', 'PT Protelindo', 'PT Inti Bangun Sejahtera', 'PT Solusi Menara Indonesia'),
('SEWA0200', 'PROTELINDO02', 'PT Protelindo', 'PT Retower Asia', 'PT Solusindo Kreasi Pratama'),
('SEWA0201', 'PROTELINDO03', 'PT Protelindo', 'PT Centratama Menara Indonesia', 'PT Solusi Tunas Pratama'),
('SEWA0202', 'PROTELINDO04', 'PT Protelindo', 'PT Linggarjati Al Manshurin', 'PT Inti Bangun Sejahtera'),
('SEWA0203', 'PROTELINDO05', 'PT Protelindo', 'PT Sampoerna Telekomunikasi indonesia', 'PT Retower Asia'),
('SEWA0204', 'PROTELINDO06', 'PT Protelindo', 'PT Infrasys Persada', 'PT Centratama Menara Indonesia'),
('SEWA0205', 'PROTELINDO07', 'PT Protelindo', 'PT Solusi Menara Indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0206', 'PROTELINDO08', 'PT Protelindo', 'PT Solusindo Kreasi Pratama', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0207', 'PROTELINDO09', 'PT Protelindo', 'PT Solusi Tunas Pratama', 'PT Infrasys Persada'),
('SEWA0208', 'PROTELINDO10', 'PT Protelindo', 'PT Inti Bangun Sejahtera', 'PT Solusi Menara Indonesia'),
('SEWA0209', 'PROTELINDO11', 'PT Protelindo', 'PT Solusi Menara Indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0210', 'PROTELINDO12', 'PT Protelindo', 'PT Solusindo Kreasi Pratama', 'PT Solusi Tunas Pratama'),
('SEWA0211', 'PROTELINDO13', 'PT Protelindo', 'PT Solusi Tunas Pratama', 'PT Inti Bangun Sejahtera'),
('SEWA0212', 'PROTELINDO14', 'PT Protelindo', 'PT Inti Bangun Sejahtera', 'PT Retower Asia'),
('SEWA0213', 'PROTELINDO15', 'PT Protelindo', 'PT Retower Asia', 'PT Centratama Menara Indonesia'),
('SEWA0214', 'PROTELINDO16', 'PT Protelindo', 'PT Centratama Menara Indonesia', 'PT Linggarjati Al Manshurin'),
('SEWA0215', 'PROTELINDO17', 'PT Protelindo', 'PT Linggarjati Al Manshurin', 'PT Sampoerna Telekomunikasi indonesia'),
('SEWA0216', 'PROTELINDO18', 'PT Protelindo', 'PT Sampoerna Telekomunikasi indonesia', 'PT Infrasys Persada'),
('SEWA0217', 'PROTELINDO19', 'PT Protelindo', 'PT Infrasys Persada', 'PT Solusi Menara Indonesia'),
('SEWA0218', 'IMPRAYSPERSADA01', 'PT Infrasys Persada', 'PT Solusi Menara Indonesia', 'PT Solusindo Kreasi Pratama'),
('SEWA0219', 'NARAGITA01', 'PT Naragita', 'PT Solusindo Kreasi Pratama', 'PT Solusi Tunas Pratama'),
('SEWA0220', 'ISP01', 'PT Internet Seluler Provider', 'PT Solusi Tunas Pratama', 'PT Inti Bangun Sejahtera'),
('SEWA0221', 'ISP02', 'PT Internet Seluler Provider', 'PT Inti Bangun Sejahtera', 'PT Retower Asia');

-- --------------------------------------------------------

--
-- Stand-in structure for view `peta`
--
CREATE TABLE IF NOT EXISTS `peta` (
`id_site` varchar(30)
,`singkatan` varchar(30)
,`kecamatan` varchar(50)
,`kelurahan` varchar(50)
,`pemilik` varchar(50)
,`penyewa1` varchar(50)
,`penyewa2` varchar(50)
,`penyewa3` varchar(50)
,`latitude` double
,`longitude` double
,`foto` varchar(60)
);
-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE IF NOT EXISTS `provider` (
  `id_provider` varchar(5) NOT NULL,
  `nama_provider` varchar(50) NOT NULL,
  `alias_provider` varchar(30) NOT NULL,
  `alamat_provider` varchar(150) DEFAULT NULL,
  `telepon_provider` varchar(20) DEFAULT NULL,
  `fax_provider` varchar(20) DEFAULT NULL,
  `email_provider` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`id_provider`, `nama_provider`, `alias_provider`, `alamat_provider`, `telepon_provider`, `fax_provider`, `email_provider`) VALUES
('PRO01', 'PT Axis Telekom Indonesia', 'AXIS', 'Menara AXIS (DEA Tower Complex) Kawasan Mega Kuningan Jl. Mega Kuningan Barat Kav.E4.3 No.2 Jakarta 12950', '(021) 5760880', '(021) 5760809', 'cs@axisworld.co.id'),
('PRO02', 'PT Dayamitra Telekomunikasi', 'MITRATEL', 'Gedung Graha Pratama - Lantai 5 Jl. MT Haryono Kav-15 Jakarta 12810', '(021) 83709592', '(021) 83709591', 'mitratel@mitratel.co.id'),
('PRO03', 'PT Hutchison 3 Indonesia', 'H3INDONESIA', 'Gedung Menara Mulia, 10/F. Jl. Jend. Gatot Subroto Kav. 9 No 11. Jakarta Selatan 12930- Indonesia', '(021) 5290 6800', '(021) 5290 6900', '3care@three.co.id'),
('PRO04', 'PT Indosat', 'INDOSAT', 'Gedung Indosat, Jalan Medan Merdeka Barat, No. 21, Jakarta 10110', '(021) 54388888', '(021) 30003000', 'customer@indosat.com'),
('PRO05', 'PT Protelindo', 'PROTELINDO', 'Jl. Senjaya V no 90 Kebayoran Baru Jakarta Selatan 12110', '(021)7267237', '(021)7234052', 'admin@protelindo.com'),
('PRO06', 'PT Smartfren', 'SMARTFREN', 'Jl.Haji Agus Salim No. 45, Sabang, Jakarta Pusat', '08811223344', NULL, 'corporate@telkom.co.id'),
('PRO07', 'PT Telekomunikasi Selular', 'TELKOMSEL', 'Wisma Mulia, Lt. Mezzanine , Jl. Jend Gatot Subroto No 42. Jakarta 12710, DKI Jakarta', '(021) 5240811', '(021) 52906121', 'telkomsel@net.id'),
('PRO08', 'PT XL Axiata', 'XL', 'Graha XL Jl. Mega Kuningan Lot. E4-7 No. 1 Kawasan Mega Kuningan Jakarta 12950 - Indonesia', '(021) 579 59 817', '(021) 579 59808', 'xl.axiata@co.id'),
('PRO09', 'PT Tower Bersama Group', 'TBG', 'Jl. Jend. Sudirman Kav 22-23 Jakarta 12920, Indonesia', '(021) 29248900', '(021) 571 2344', NULL),
('PRO10', 'PT Solusi Menara Indonesia', 'SMI', NULL, NULL, NULL, NULL),
('PRO11', 'PT Solusindo Kreasi Pratama', 'SKP', NULL, NULL, NULL, NULL),
('PRO12', 'PT Solusi Tunas Pratama', 'STP', NULL, NULL, NULL, 'customer@telecom.com'),
('PRO13', 'PT Inti Bangun Sejahtera', 'IBS', NULL, NULL, NULL, NULL),
('PRO14', 'PT Retower Asia', 'RETOWER', NULL, NULL, NULL, NULL),
('PRO15', 'PT Centratama Menara Indonesia', 'CMI', NULL, NULL, NULL, NULL),
('PRO16', 'PT Linggarjati Al Manshurin', 'LINGGARJATI', NULL, NULL, NULL, NULL),
('PRO17', 'PT Sampoerna Telekomunikasi indonesia', 'STI', NULL, NULL, NULL, NULL),
('PRO18', 'PT Infrasys Persada', 'IMPRAYSPERSADA', NULL, NULL, NULL, NULL),
('PRO19', 'PT Naragita', 'NARAGITA', 'Jalan Kyai Haji Agus Salim Jakarta Utara', '(0271) 232132', '(0271) 232132', 'naragita@naragita.com'),
('PRO20', 'PT Internet Seluler Provider', 'ISP', 'Jl Jendral Sudirman No 45 Bandung Jawa Barat', '(021) 3434343', '(021) 3434343', 'isp@inet.com');

-- --------------------------------------------------------

--
-- Table structure for table `site_informasi`
--

CREATE TABLE IF NOT EXISTS `site_informasi` (
`id_detail` int(11) NOT NULL,
  `id_site` varchar(30) NOT NULL,
  `pemilik_menara` varchar(50) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  `lahan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=623 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_informasi`
--

INSERT INTO `site_informasi` (`id_detail`, `id_site`, `pemilik_menara`, `alamat`, `kelurahan`, `kecamatan`, `latitude`, `longitude`, `lahan`) VALUES
(402, 'TELKOMSEL01', 'PRO07', 'Godog RT 01/09', 'Mertan', 'Bendosari', -7.68919, 110.887, 'Pemukiman'),
(403, 'TELKOMSEL02', 'PRO07', 'Wonosari', 'Polokarto', 'Polokarto', -7.64956, 110.945, 'Persawahan'),
(404, 'TELKOMSEL03', 'PRO07', 'Tempukrejo RT 01/04', 'Mojorejo', 'Bendosari', -7.70058, 110.915, 'Perkantoran'),
(405, 'TELKOMSEL04', 'PRO07', 'Soronanggan rt 02/V', 'Bulu', ' Bulu', -7.76742, 110.833, 'Fasilitas Publik'),
(406, 'TELKOMSEL05', 'PRO07', 'Kedungsono RT 02/XI', 'Kedungsono', 'Bulu', -7.78764, 110.857, 'Pemukiman'),
(407, 'TELKOMSEL06', 'PRO07', 'Jlantran RT 01/04 ', 'Ngrombo', 'Baki', -7.63797, 110.793, 'Persawahan'),
(408, 'TELKOMSEL07', 'PRO07', 'Sambirejo RT 02/V', 'Tepisari', 'Polokarto', -7.66594, 110.897, 'Perkantoran'),
(409, 'TELKOMSEL08', 'PRO07', 'Tanah milik Sunardi', 'Kenep ', 'Sukoharjo', -7.69067, 110.81, 'Fasilitas Publik'),
(410, 'TELKOMSEL09', 'PRO07', 'Tanah milik Samto ', 'Kateguhan', 'Tawangsari', -7.73636, 110.798, 'Pemukiman'),
(411, 'TELKOMSEL10', 'PRO07', 'Bulakrejo RT 02/07', 'Bulakrejo', ' Bulakrejo', -7.64269, 110.829, 'Persawahan'),
(412, 'TELKOMSEL11', 'PRO07', 'Kesongo', 'Kepuh', 'Nguter', -7.70819, 110.857, 'Perkantoran'),
(413, 'TELKOMSEL12', 'PRO07', 'Ponoragan RT 03/IV', 'Gonilan', 'Kartasura', -7.548445, 110.759503, 'Fasilitas Publik'),
(414, 'TELKOMSEL13', 'PRO07', 'Sendangrejo RT 02/04', 'Serut', 'Nguter', -7.74647, 110.929, 'Pemukiman'),
(415, 'TELKOMSEL14', 'PRO07', 'Karangwuni RT 01/II', 'Karangwuni', 'Polokarto', -7.62856, 110.852, 'Persawahan'),
(416, 'TELKOMSEL15', 'PRO07', 'Pundungsari RT 03/II', 'Mranggen', 'Polokarto', -7.62739, 110.891, 'Perkantoran'),
(417, 'TELKOMSEL16', 'PRO07', 'Jatimalang RT 04/II', 'Joho', 'Mojolaban', -7.58731, 110.88, 'Fasilitas Publik'),
(418, 'TELKOMSEL17', 'PRO07', 'Pengin RT 04/11', 'Cangkol', ' Mojolaban', -7.60706, 110.876, 'Pemukiman'),
(419, 'TELKOMSEL18', 'PRO07', 'Kadilangu RT 01/01', 'Kadilangu', 'Baki', -7.60461, 110.79, 'Persawahan'),
(420, 'TELKOMSEL19', 'PRO07', 'Gentan RT 1/04', 'Gentan', 'Baki', -7.58411, 110.782, 'Perkantoran'),
(421, 'TELKOMSEL20', 'PRO07', 'Jlopo RT 04/04 ', 'Gedangan', 'Grogol', -7.604749, 110.796613, 'Fasilitas Publik'),
(422, 'TELKOMSEL21', 'PRO07', 'Tempel RT 01/V', 'Blimbing', 'Gatak', -7.59081, 110.746, 'Pemukiman'),
(423, 'TELKOMSEL22', 'PRO07', '. Babalan RT 02/03', 'Tawang', 'Weru', -7.75456, 110.763, 'Persawahan'),
(424, 'TELKOMSEL23', 'PRO07', 'Waringinrejo RT 01/19', 'Cemani', 'Grogoll', -7.58847, 110.817, 'Perkantoran'),
(425, 'TELKOMSEL24', 'PRO07', 'Kijilan RT 03/01', 'Madegondo', 'Grogol', -7.60983, 110.811, 'Fasilitas Publik'),
(426, 'TELKOMSEL25', 'PRO07', 'Dk. Bende RT 02/01', 'Alasombo', 'Weru', -7.79044, 110.8, 'Pemukiman'),
(427, 'TELKOMSEL26', 'PRO07', 'Dk. Margiono', 'Jatingarang', ' Weru', -7.80608, 110.776, 'Persawahan'),
(428, 'TELKOMSEL27', 'PRO07', 'Nolodutan RT 03/XXII', 'Makamhaji', 'Kartasura', -7.569, 110.775, 'Perkantoran'),
(429, 'TELKOMSEL28', 'PRO07', 'Ngabeyan RT 01/IV', 'Ngabeyan', 'Kartasura', -7.54372, 110.744, 'Fasilitas Publik'),
(430, 'TELKOMSEL29', 'PRO07', 'Larangan RT 03/02', 'Gayam', 'Sukoharjo', -7.68039, 110.843, 'Pemukiman'),
(431, 'TELKOMSEL30', 'PRO07', 'Ngentak RT 04/III', 'Gumpang', 'Kartasura', -7.56456, 110.76, 'Persawahan'),
(432, 'INDOSAT01', 'PRO04', 'Karangmojo RT 01/01 ', 'Karangmojo', 'Weru', -7.77781, 110.775, 'Perkantoran'),
(433, 'INDOSAT02', 'PRO04', 'Tawang', 'Tawang', 'Weru', -7.75625, 110.76, 'Fasilitas Publik'),
(434, 'INDOSAT03', 'PRO04', 'Gampingan RT 01/09', 'Ngasinan', 'Bulu', -7.74312, 110.83995, 'Pemukiman'),
(435, 'INDOSAT04', 'PRO04', 'Tegalan RT 01/04', 'Kateguhan', 'Tawangsari', -7.73661, 110.798, 'Persawahan'),
(436, 'INDOSAT05', 'PRO04', 'Ngirirejo RT 01/07', 'Bulakrejo', 'Sukoharjo', -7.6426, 110.83015, 'Perkantoran'),
(437, 'INDOSAT06', 'PRO04', 'Jalakan RT 02/03', 'Begajah', 'Sukoharjo', -7.70217, 110.849, 'Fasilitas Publik'),
(438, 'INDOSAT07', 'PRO04', 'Banmati RT 02/01', 'Banmati', 'Sukoharjo', -7.71396, 110.811, 'Pemukiman'),
(439, 'INDOSAT08', 'PRO04', 'Nguter RT 02/05', 'Nguter', 'Nguter', -7.74397, 110.877, 'Persawahan'),
(440, 'INDOSAT09', 'PRO04', 'Jayan RT 03/01', 'Celep', 'Nguter', -7.72719, 110.906, 'Perkantoran'),
(441, 'INDOSAT10', 'PRO04', 'Mojorejo RT 02/01', 'Mojorejo', 'Bendosari', -7.70098, 110.91264, 'Fasilitas Publik'),
(442, 'INDOSAT11', 'PRO04', 'Kerten RT 02/IV ', 'Ngombakan', 'Polokarto', -7.62931, 110.859, 'Pemukiman'),
(443, 'INDOSAT12', 'PRO04', 'Tegalrejo RT 05/3', 'Pranan', 'Polokarto', -7.625003, 110.832685, 'Persawahan'),
(444, 'INDOSAT13', 'PRO04', 'Ngambaklipuro RT 03/05 ', 'Bekonang', 'Mojolaban', -7.60797, 110.875, 'Perkantoran'),
(445, 'INDOSAT14', 'PRO04', 'Mojorejo RT 03/03', 'Laban', 'Mojolaban', -7.59172, 110.84408, 'Fasilitas Publik'),
(446, 'INDOSAT15', 'PRO04', 'Tangkil RT 01/07 ', 'Manang', 'Grogol', -7.59082, 110.7938, 'Pemukiman'),
(447, 'INDOSAT16', 'PRO04', 'Waringinrejo RT 03/21', 'Cemani', 'Grogol', -7.58697, 110.812, 'Persawahan'),
(448, 'INDOSAT17', 'PRO04', 'Banaran RT 02/04', 'Banaran', 'Grogol', -7.57608, 110.795, 'Perkantoran'),
(449, 'INDOSAT18', 'PRO04', 'Jl. Raya Solo Permai AC 28', 'Solo baru', 'Grogol', -7.60975, 110.811, 'Fasilitas Publik'),
(450, 'INDOSAT19', 'PRO04', 'Tinggen RT 01/04', 'Bentakan', 'Baki', -7.61786, 110.782, 'Pemukiman'),
(451, 'INDOSAT20', 'PRO04', 'Serongan RT 01/02 ', 'Mayang', 'Gatak', -7.578627, 110.761684, 'Persawahan'),
(452, 'INDOSAT21', 'PRO04', 'Ponoragan RT 03/04', 'Gonilan', 'Kartasura', -7.54921, 110.76131, 'Perkantoran'),
(453, 'INDOSAT22', 'PRO04', 'Kemasan RT 04/IX ', 'Ngadirejo', 'Kartasura', -7.56428, 110.741, 'Fasilitas Publik'),
(454, 'INDOSAT23', 'PRO04', 'Ngentak RT 04/III', 'Gumpang', 'Kartasura', -7.56442, 110.759, 'Pemukiman'),
(455, 'INDOSAT24', 'PRO04', 'Jl. A Yani No. 254 ', 'Ngadirejo, ', 'Kartasura', -7.55778, 110.753, 'Persawahan'),
(456, 'INDOSAT25', 'PRO04', 'Kranggan RT 02/03 ', 'Wirogunan', 'Kartasura', -7.546807, 110.734756, 'Perkantoran'),
(457, 'INDOSAT26', 'PRO04', 'Sumbulan Kidul', 'Makamhaji', 'Kartasura', -7.56772, 110.77778, 'Fasilitas Publik'),
(458, 'INDOSAT27', 'PRO04', 'Kranggan wetan RT 3 / 1 ', 'Wirogunan', 'Kartasura', -7.54683, 110.7347, 'Pemukiman'),
(459, 'INDOSAT28', 'PRO04', 'Jl. Veteran No. 58 01/03?', 'Jetis', 'Sukoharjo', -7.59067, 110.81, 'Persawahan'),
(460, 'XL01', 'PRO08', 'Dukuh RT 03/06 ', 'Sapen', ' Mojolaban', -7.58165, 110.903, 'Perkantoran'),
(461, 'XL02', 'PRO08', 'Tegalan RT 01/4 ', 'Kateguhan', 'Tawangsari', -7.73711, 110.798, 'Fasilitas Publik'),
(462, 'XL03', 'PRO08', 'Dk. Kesongo RT 02/01', 'Kepuh', 'Nguter', -7.70858, 110.855, 'Pemukiman'),
(463, 'XL04', 'PRO08', 'Ngasem RT 02/01', 'Kemasan', 'Polokarto', -7.65294, 110.887, 'Persawahan'),
(464, 'XL05', 'PRO08', 'Sumber Agung RT 02/06', 'Celep', 'Nguter', -7.73219, 110.915, 'Perkantoran'),
(465, 'XL06', 'PRO08', 'Dk. Babalan RT 01/03 ', 'Tawang', 'Weru', -7.75628, 110.764, 'Fasilitas Publik'),
(466, 'XL07', 'PRO08', 'Sawahan RT 03/07 ', 'Purbayan', 'Baki', -7.572111, 110.771537, 'Pemukiman'),
(467, 'XL08', 'PRO08', 'Nguter RT 02/07', 'Nguter', 'Nguter', -7.74614, 110.875, 'Persawahan'),
(468, 'XL09', 'PRO08', 'Dk. Ngirirejo RT 01/07', 'Bulakrejo', 'Sukoharjo', -7.63922, 110.828, 'Perkantoran'),
(469, 'XL10', 'PRO08', 'Dk. Kepuh RT 02/I', 'Bulu', 'Polokarto', -7.66875, 110.944, 'Fasilitas Publik'),
(470, 'XL11', 'PRO08', 'Hypermarket Goro Assalam', 'Pabelan', 'Kartasura', -7.55911, 110.764, 'Pemukiman'),
(471, 'XL12', 'PRO08', 'Dk. Tempukrejo RT 01/04 ', 'Mojorejo', 'Bendosari', -7.70106, 110.915, 'Persawahan'),
(472, 'XL13', 'PRO08', 'Ngambaklipuro RT 02/05', 'Bekonang', 'Mojolaban', -7.60803, 110.875, 'Perkantoran'),
(473, 'XL14', 'PRO08', 'Gunungsaren RT 01/17 ', 'Palur', 'Mojolaban', -7.577, 110.859, 'Fasilitas Publik'),
(474, 'XL15', 'PRO08', 'Jl. Tengger RT 05/04', 'Banaran', 'Grogol', -7.574, 110.794, 'Pemukiman'),
(475, 'XL16', 'PRO08', 'Bokan RT 02/04', 'Kudu', 'Baki', -7.614006, 110.784577, 'Persawahan'),
(476, 'XL17', 'PRO08', 'Tanah milik Toko Laris', 'Kartasura', 'Kartasura', -7.550874, 110.737913, 'Perkantoran'),
(477, 'XL18', 'PRO08', 'Jl. Songgolangit No.4 Ngebrak RT 01/11 ', 'Gentan', 'Baki', -7.58058, 110.789, 'Fasilitas Publik'),
(478, 'XL19', 'PRO08', 'Kijilan RT 1/4', 'Madegondo', 'Grogol', -7.48058, 110.8, 'Pemukiman'),
(479, 'AXIS01', 'PRO01', 'Sumberrejo RT 04/04', 'Mranggen', 'Polokarto', -7.63231, 110.895, 'Persawahan'),
(480, 'AXIS02', 'PRO01', 'Mlangen RT 01/08', 'Bakalan', 'Polokarto', -7.64067, 110.861, 'Perkantoran'),
(481, 'AXIS03', 'PRO01', 'Ngebrak RT 03/01', 'Plumbon', 'Mojolaban', -7.59164, 110.846, 'Fasilitas Publik'),
(482, 'AXIS04', 'PRO01', 'Tegal RT 02/II', 'Triyagan', 'Mojolaban', -7.57764, 110.893, 'Pemukiman'),
(483, 'AXIS05', 'PRO01', 'Tejomoyo RT 02/XIII', 'Telukan', 'Grogol', -7.61136, 110.824, 'Persawahan'),
(484, 'AXIS06', 'PRO01', 'Bodronoyo RT 01/12', 'Cemani', ' Grogol', -7.58058, 110.8, 'Perkantoran'),
(485, 'AXIS07', 'PRO01', 'Krecekan RT 02/05', 'Geneng', 'Gatak', -7.606, 110.754, 'Fasilitas Publik'),
(486, 'AXIS08', 'PRO01', 'Jogahan RT 01/09', 'Trangsan', 'Gatak', -7.580937, 110.740719, 'Pemukiman'),
(487, 'AXIS09', 'PRO01', 'Kudu RT 03/02', 'Kudu', 'Baki', -7.61039, 110.791, 'Persawahan'),
(488, 'AXIS10', 'PRO01', 'Krecekan RT 02/06', 'Wirogunan', 'Kartasura', -7.54472, 110.73, 'Perkantoran'),
(489, 'AXIS11', 'PRO01', 'Jogahan RT 01/10', 'Pucangan RT 1/12', 'Kartasura', -7.55582, 110.83, 'Fasilitas Publik'),
(490, 'TBG01', 'PRO09', 'Jl. Sidoluhur, Waringinrejo', 'Waringinrejo', 'Grogol', -7.58783, 110.812, 'Pemukiman'),
(491, 'TBG02', 'PRO09', 'Pulosari RT 02/04 ', 'Gayam', 'Sukoharjo', -7.67872, 110.846, 'Persawahan'),
(492, 'TBG03', 'PRO09', 'Tengklik RT 01/II ', 'Telukan,', 'Grogol', -7.62649, 110.82315, 'Perkantoran'),
(493, 'TBG04', 'PRO09', 'Tanjung RT 01. RW 04', 'Tanjung ', 'Nguter', -7.72039, 110.82429, 'Fasilitas Publik'),
(494, 'TBG05', 'PRO09', 'Walang RT 001 RW 002', 'Jombor ', 'Bendosari', -7.66117, 110.8326, 'Pemukiman'),
(495, 'TBG06', 'PRO09', 'Kedung Kris  RT 02 RW 05', 'Pengkol', 'Nguter', -7.74602, 110.91287, 'Persawahan'),
(496, 'TBG07', 'PRO09', 'Gembung RT.02/RW.04', 'Begajah', 'Sukoharjo', -7.76602, 110.90487, 'Perkantoran'),
(497, 'TBG08', 'PRO09', 'Dukuh Karang Mojo Rt.01/RW.01', 'Karang Mojo ', 'Weru', -7.77807, 110.77412, 'Fasilitas Publik'),
(498, 'TBG09', 'PRO09', 'Majasto RT 001 RW 003', 'Majasto', 'Tawangsari', -7.70733, 110.77312, 'Pemukiman'),
(499, 'TBG10', 'PRO09', 'Pangin 02/07', 'Joho ', ' Sukoharjo', -7.63659, 110.77212, 'Persawahan'),
(500, 'TBG11', 'PRO09', 'Bangen 01/03?', 'Kedungwinong', 'Nguter', -7.56585, 110.77112, 'Perkantoran'),
(501, 'SMI01', 'PRO10', 'Gangin Kuwiran RT 01/06 ', 'Karangtengah', 'Weru', -7.79646, 110.73791, 'Fasilitas Publik'),
(502, 'SMI02', 'PRO10', 'Bedodo RT 01/06', 'Blimbing', 'Gatak', -7.59221, 110.74362, 'Pemukiman'),
(503, 'SMI03', 'PRO10', 'Dk. Gesingan RT 02/01', 'Bulakan', 'Sukoharjo', -7.67672, 110.795, 'Persawahan'),
(504, 'SMI04', 'PRO10', 'Dsn. Badran RT 02/01', 'Kamal', 'Bulu', -7.76756, 110.80905, 'Perkantoran'),
(505, 'SMI05', 'PRO10', 'Tiyaran RT 01/08 Desa Tiyaran', 'Tiyaran', 'Bulu', -7.76805, 110.83991, 'Fasilitas Publik'),
(506, 'SMI06', 'PRO10', 'Badran RT 06/08 ', 'Mertan', 'Bendosari', -7.68456, 110.881, 'Pemukiman'),
(507, 'SMI07', 'PRO10', 'Sanggung RT 01/01', 'sanggung', 'Gatak', -7.59025, 110.707, 'Persawahan'),
(508, 'SMI08', 'PRO10', 'Jatimalang RT 04/II ', 'Joho', 'Mojolaban', -7.58757, 110.88061, 'Perkantoran'),
(509, 'SMI09', 'PRO10', 'Sanggrahan RT 05/01', 'Grogol', 'Grogol', -7.60356, 110.81947, 'Fasilitas Publik'),
(510, 'SMI10', 'PRO10', 'Kaliniti RT 03/03', 'Siwal', 'Baki', -7.58928, 110.774, 'Pemukiman'),
(511, 'SMI11', 'PRO10', 'Jatirejo RT 05/II ', 'Mranggen', 'Polokarto', -7.62792, 110.897, 'Persawahan'),
(512, 'SKP01', 'PRO11', 'Keden RT 01/07 ', 'Gentan', 'Baki', -7.58442, 110.78742, 'Perkantoran'),
(513, 'SKP02', 'PRO11', 'Turibaru 01/09', 'Cemani', 'Grogol', -7.58047, 110.80506, 'Fasilitas Publik'),
(514, 'SKP03', 'PRO11', 'Samin RT 01/02 ', 'Sanggang', 'Bulu', -7.79186, 110.81453, 'Pemukiman'),
(515, 'SKP04', 'PRO11', 'Berebes RT.02/05', 'Kedung Jambal', 'Tawangsari', -7.733912, 110.761505, 'Persawahan'),
(516, 'SKP05', 'PRO11', 'Tempel RT 03 RW 01', 'Gadingan', 'Mojolaban ', -7.57907, 110.8538, 'Perkantoran'),
(517, 'SKP06', 'PRO11', 'Jombor baru 02/03 ', 'Jombor ', 'Bendosari', -7.488824, 110.849215, 'Fasilitas Publik'),
(518, 'SKP07', 'PRO11', 'Gonilan 02/04', 'Gonilan ', ' Kartasura', -7.382429, 110.86885, 'Pemukiman'),
(519, 'SKP08', 'PRO11', 'Ngarak - arak 05/13 ', 'Telukan ', 'Grogol', -7.276034, 110.888485, 'Persawahan'),
(520, 'MITRATEL01', 'PRO02', 'Pokakan 01/04 ', 'Karangtengah', 'Weru', -7.79711, 110.734, 'Perkantoran'),
(521, 'MITRATEL02', 'PRO02', 'Bedug Kidul RT 01/08', 'Sanggang', ' Bulu', -7.77842, 110.8, 'Fasilitas Publik'),
(522, 'MITRATEL03', 'PRO02', 'Kepuh RT 02/II ', 'Bulu', 'Polokarto', -7.67197, 110.949, 'Pemukiman'),
(523, 'MITRATEL04', 'PRO02', 'Kalisongo RT 01/06', 'Plesan', 'Nguter', -7.71614, 110.892, 'Persawahan'),
(524, 'MITRATEL05', 'PRO02', 'Kragilan RT 03/04 ', 'Kragilan', 'Mojolaban', -7.60656, 110.901, 'Perkantoran'),
(525, 'MITRATEL06', 'PRO02', 'Tepisari RT 01/01', 'Tepisari', 'Polokarto', -7.66194, 110.911, 'Fasilitas Publik'),
(526, 'MITRATEL07', 'PRO02', 'Laban RT 01/02 ', 'Laban', ' Mojolaban', -7.61081, 110.848, 'Pemukiman'),
(527, 'MITRATEL08', 'PRO02', '''Jengkangan RT. 02 RW. 04', 'Parangjoro', 'Grogol', -7.63163, 110.80231, 'Persawahan'),
(528, 'MITRATEL09', 'PRO02', '''Kriyan RT 01/06 ', 'Joho', 'Mojolaban', -7.58816, 110.80231, 'Perkantoran'),
(529, 'MITRATEL10', 'PRO02', 'Bedug Kidul 01/08', 'Sanggang', 'Bulu', -7.58755, 110.77185, 'Fasilitas Publik'),
(530, 'MITRATEL11', 'PRO02', 'Jogobondo 02/21?', 'Palur', 'Mojolaban', -7.576225, 110.749005, 'Pemukiman'),
(531, 'STP01', 'PRO12', 'Pucangan RT 03/12', 'Pucangan,', 'Kartasura', -7.55681, 110.73659, 'Persawahan'),
(532, 'STP02', 'PRO12', 'Ngentak RT 04/III', 'Gumpang', 'Kartasura', -7.5645, 110.76092, 'Perkantoran'),
(533, 'STP03', 'PRO12', 'Ngambaklipuro RT 01/08', 'Bekonang', 'Mojolaban', -7.60619, 110.87517, 'Fasilitas Publik'),
(534, 'STP04', 'PRO12', 'Sanggung RT 001 RW 001', 'Sanggung ', 'Gatak', -7.6252133333333, 110.8811275, 'Pemukiman'),
(535, 'STP05', 'PRO12', 'Majasto RT 01/01', 'Majasto', ' Tawangsari', -7.70967, 110.782, 'Persawahan'),
(536, 'STP06', 'PRO12', 'Beneng RT 02/02', 'Ngrombo', 'Baki', -7.63731, 110.793, 'Perkantoran'),
(537, 'STP07', 'PRO12', 'Jarak RT 03/01', 'Tanjung', 'Tanjung', -7.72456, 110.829, 'Fasilitas Publik'),
(538, 'STP08', 'PRO12', 'Ngemplak RT 01/06', 'Kayuapak', 'Polokarto', -7.61664, 110.93, 'Pemukiman'),
(539, 'STP09', 'PRO12', 'Randusari RT 01/18 ', 'Palur', 'Mojolaban', -7.56986, 110.872, 'Persawahan'),
(540, 'STP10', 'PRO12', 'Kedunggandu RT 04/II', 'Mranggen', 'Polokarto', -7.62606, 110.894, 'Perkantoran'),
(541, 'STP11', 'PRO12', 'Dk. Tegalsari RT 04/03', 'Tegalsari', 'Weru', -7.76983, 110.735, 'Fasilitas Publik'),
(542, 'STP12', 'PRO12', 'Watukelir RT 03/05', 'Jatingarang', 'Weru', -7.80606, 110.775, 'Pemukiman'),
(543, 'STP13', 'PRO12', 'Dk. Gempol RT 05/08', 'Mertan', 'Bendosari', -7.68483, 110.884, 'Persawahan'),
(544, 'STP14', 'PRO12', 'Sumber Mulyo RT 02/06', 'Puron', ' Bulu', -7.75608, 110.806, 'Perkantoran'),
(545, 'STP15', 'PRO12', 'Sukoharjo RT 04/02 ', 'Sukoharjo', 'Sukoharjo', -7.6785, 110.838, 'Fasilitas Publik'),
(546, 'STP16', 'PRO12', 'Dk. Pule RT 01/02', 'Alasombo', 'Weru', -7.78978, 110.796, 'Pemukiman'),
(547, 'STP17', 'PRO12', 'Badran RT 02/V', 'Bulu', 'Bulu', -7.76475, 110.834, 'Persawahan'),
(548, 'IBS01', 'PRO13', 'Kertonatan RT 02/II ', 'Kertonatan', 'Kartasura', -7.54583, 110.729, 'Perkantoran'),
(549, 'IBS02', 'PRO13', 'Ponoragan RT 03/04', 'Gonilan', 'Kartasura', -7.55628, 110.762, 'Fasilitas Publik'),
(550, 'IBS03', 'PRO13', 'Jogobondo RT 01/22 ', 'Palur', 'Mojolaban', -7.57953, 110.88, 'Pemukiman'),
(551, 'IBS04', 'PRO13', 'Ngombol RT 01/02', 'Gadingan', 'Mojolaban', -7.57781, 110.853, 'Persawahan'),
(552, 'IBS05', 'PRO13', 'Jogobayan RT 02/01', 'Gayam', 'Sukoharjo', -7.68222, 110.847, 'Perkantoran'),
(553, 'IBS06', 'PRO13', 'Dukuh Ngadiboyo RT 02/03', 'Kepuh', 'Nguter', -7.71, 110.855, 'Fasilitas Publik'),
(554, 'IBS07', 'PRO13', 'Dukuh Cluringan RT 01/X', 'Telukan', 'Grogol', -7.628159, 110.826638, 'Pemukiman'),
(555, 'IBS08', 'PRO13', 'Karanganyar RT 03/II ', 'Palur', 'Mojolaban', -7.56772, 110.867, 'Persawahan'),
(556, 'IBS09', 'PRO13', 'Gedangan RT 04/01', 'Gedangan', 'Grogol', -7.600747, 110.806442, 'Perkantoran'),
(557, 'IBS10', 'PRO13', 'Jl. Songgolangit No.4 Ngebrak RT 01/11 ', 'Gentan', 'Baki', -7.57931, 110.784, 'Fasilitas Publik'),
(558, 'IBS11', 'PRO13', 'Jl. Adisumarmo No. 110 Notosuman RT 02/06', 'Singopuran', 'Kartasura', -7.548209, 110.743789, 'Pemukiman'),
(559, 'IBS12', 'PRO13', 'Banmati 01/01?', 'Banmati', 'Sukoharjo', -7.554004, 110.7309644, 'Persawahan'),
(560, 'RETOWER01', 'PRO14', 'Dk. Walang RT 03 RW 02', 'Jombor', 'Bendosari', -7.66557, 110.8348, 'Perkantoran'),
(561, 'RETOWER02', 'PRO14', 'Jl. Solo-Tawangmangu Km 8 triyagan RT 02 RW 02 ', 'Tegal Triyagan', 'Mojolaban', -7.578127, 110.892975, 'Fasilitas Publik'),
(562, 'RETOWER03', 'PRO14', 'Kp. Terok RT 01 RW 06 ', 'Begajah ', 'Sukoharjo', -7.70006, 110.85941, 'Pemukiman'),
(563, 'RETOWER04', 'PRO14', 'Jarakan RT 02 RW 03 ', 'Mandan ', 'Sukoharjo', -7.70708, 110.83248, 'Persawahan'),
(564, 'RETOWER05', 'PRO14', 'Mojorejo RT 003/004 ', 'Kepuh ', 'Nguter', -7.7907086666667, 110.80112666667, 'Perkantoran'),
(565, 'RETOWER06', 'PRO14', 'Jimbun RT 02 Rw 04 ', 'Pondok ', 'Nguter', -7.8551851666667, 110.77087916667, 'Fasilitas Publik'),
(566, 'RETOWER07', 'PRO14', 'Karang Joho RT 03 Rw 03 ', 'Daleman ', 'Nguter', -7.9196616666667, 110.74063166667, 'Pemukiman'),
(567, 'RETOWER08', 'PRO14', 'Gatakrejo RT 02 Rw 01 ', 'Nguter ', 'Nguter', -7.9841381666667, 110.71038416667, 'Persawahan'),
(568, 'RETOWER09', 'PRO14', 'Timur Pasar Nguter, RT.1 Rw 05', 'Nguter ', 'Nguter', -8.0486146666667, 110.68013666667, 'Perkantoran'),
(569, 'RETOWER10', 'PRO14', 'Makam Haji, RT 01 Rw 10 ', 'Makam Haji', 'Kartasura', -8.1130911666667, 110.64988916667, 'Fasilitas Publik'),
(570, 'LINGGARJATI01', 'PRO16', 'Gemblung RT 04/III ', 'Karangwuni', ' Polokarto', -7.62567, 110.851, 'Pemukiman'),
(571, 'LINGGARJATI02', 'PRO16', 'Kajen RT 02/02 ', 'Sraten', ' Gatak', -7.57336, 110.721, 'Persawahan'),
(572, 'STI01', 'PRO17', 'Windan RT 01/06', 'Makam Haji', 'Kartasura', -7.56336, 110.772323, 'Perkantoran'),
(573, 'H3INDONESIA01', 'PRO03', 'Ledok 01/06?', 'Ngemplak', 'Kartasura', -7.5251533333333, 110.80787841667, 'Fasilitas Publik'),
(574, 'H3INDONESIA02', 'PRO03', 'Tuwak 01/02?', 'Gonilan', 'Kartasura', -7.547701, 110.766421, 'Pemukiman'),
(575, 'H3INDONESIA03', 'PRO03', 'Tejomoyo 02/13?', 'Telukan', 'Grogol', -7.61202, 110.74872, 'Persawahan'),
(576, 'H3INDONESIA04', 'PRO03', 'Dukuh Ngawen 05/01?', 'Purbayan', 'Baki', -7.5782, 110.76939, 'Perkantoran'),
(577, 'H3INDONESIA05', 'PRO03', 'Singopuran 01/02?', 'Singopuran', 'Kartasura', -7.55171, 110.74872, 'Fasilitas Publik'),
(578, 'H3INDONESIA06', 'PRO03', 'Gadingan 03/11?', 'Jombor', 'Bendosari', -7.5795449555556, 110.74379061111, 'Pemukiman'),
(579, 'H3INDONESIA07', 'PRO03', 'Ngemplak 03/03?', 'Gedangan', 'Grogol', -7.5842652126984, 110.73661400397, 'Persawahan'),
(580, 'H3INDONESIA08', 'PRO03', 'Krapyak 01/07?', 'Pucangan', 'Kartasura', -7.5889854698413, 110.72943739683, 'Perkantoran'),
(581, 'H3INDONESIA09', 'PRO03', 'Gadingan 03/11?', 'Jombor', 'Bendosari', -7.5937057269841, 110.72226078968, 'Fasilitas Publik'),
(582, 'H3INDONESIA10', 'PRO03', 'Ngemplak 03/03?', 'Gedangan', 'Grogol', -7.598425984127, 110.71508418254, 'Pemukiman'),
(583, 'H3INDONESIA11', 'PRO03', 'Krapyak 01/07?', 'Pucangan', 'Kartasura', -7.6031462412698, 110.7079075754, 'Persawahan'),
(584, 'H3INDONESIA12', 'PRO03', 'Jl. Kidul Warung 02/06?', 'Pabelan', 'Kartasura', -7.6078664984127, 110.70073096825, 'Perkantoran'),
(585, 'H3INDONESIA13', 'PRO03', 'Jogobondo 03/21?', 'Palur', 'Mojolaban', -7.6125867555556, 110.69355436111, 'Fasilitas Publik'),
(586, 'H3INDONESIA14', 'PRO03', 'Blimbing 02/07?', 'Luwang', 'Gatak', -7.6173070126984, 110.68637775397, 'Pemukiman'),
(587, 'H3INDONESIA15', 'PRO03', 'Tambak Rejo 05/06?', 'Jetis', 'Sukoharjo', -7.6220272698413, 110.67920114682, 'Persawahan'),
(588, 'H3INDONESIA16', 'PRO03', 'Kebon Baru 02/09?', 'Pucangan', 'Kartasura', -7.6267475269841, 110.67202453968, 'Perkantoran'),
(589, 'H3INDONESIA17', 'PRO03', 'Tuwak 01/02', 'Gonilan', 'Kartasura', -7.547701, 110.766421, 'Fasilitas Publik'),
(590, 'H3INDONESIA18', 'PRO03', 'Tejomoyo 02/13', 'Telukan', 'Grogol', -7.61202, 110.74872, 'Pemukiman'),
(591, 'H3INDONESIA19', 'PRO03', 'Ngawen 05/01', 'Purbayan', 'Baki', -7.5782, 110.76939, 'Persawahan'),
(592, 'H3INDONESIA20', 'PRO03', 'Singopuran 01/02', 'Singopuran', 'Kartasura', -7.55171, 110.74872, 'Perkantoran'),
(593, 'H3INDONESIA21', 'PRO03', 'Gadingan RT 03/11', 'Jombor', 'Bendosari', -7.672159, 110.849021, 'Fasilitas Publik'),
(594, 'H3INDONESIA22', 'PRO03', 'Ngemplak RT 03/03', 'Gedangan', 'Grogol', -7.60491, 110.80141, 'Pemukiman'),
(595, 'H3INDONESIA23', 'PRO03', 'Krapkyak 01/07', 'Pucangan', 'Kartasura', -7.334871, 110.431629, 'Persawahan'),
(596, 'H3INDONESIA24', 'PRO03', 'Jl Kidul Warung 02/06', 'Pabelan', 'Kartasura', -7.55514, 110.76007, 'Perkantoran'),
(597, 'H3INDONESIA25', 'PRO03', 'Jogobondo 03/21', 'Palur', 'Mojolaban', -7.448537, 110.551374, 'Fasilitas Publik'),
(598, 'H3INDONESIA26', 'PRO03', 'Blimbing 02/07', 'Luwang ', 'Gatak', -7.352915, 110.441888, 'Pemukiman'),
(599, 'H3INDONESIA27', 'PRO03', 'Tambak Rejo 05/06', 'Jetis', 'Sukoharjo', -7.69063, 110.8301, 'Persawahan'),
(600, 'PROTELINDO01', 'PRO05', 'Tempel RT 02/VI', 'Blimbing', 'Gatak', -7.59188, 110.74584, 'Perkantoran'),
(601, 'PROTELINDO02', 'PRO05', 'Bulakrejo RT 02/07 ', 'Bulakrejo', 'Sukoharjo', -7.64234, 110.82858, 'Fasilitas Publik'),
(602, 'PROTELINDO03', 'PRO05', 'Danirejo RT 04/04 ', 'Pandeyan', 'Grogol', -7.64269, 110.83012, 'Pemukiman'),
(603, 'PROTELINDO04', 'PRO05', 'Ngronggah RT 02/08', 'Sanggrahan', 'Grogol', -7.611873, 110.824494, 'Persawahan'),
(604, 'PROTELINDO05', 'PRO05', 'Mojotegalan RT 02/02', 'Joho', 'Sukoharjo', -7.69272, 110.845, 'Perkantoran'),
(605, 'PROTELINDO06', 'PRO05', 'Tegalsari Lor RT 01/04', 'Kartasura', ' Kartasura', -7.55214, 110.74229, 'Fasilitas Publik'),
(606, 'PROTELINDO07', 'PRO05', 'Plosorejo RT 02/04', 'Gentan', 'Bendosari', -7.584679, 110.781757, 'Pemukiman'),
(607, 'PROTELINDO08', 'PRO05', 'Sambilawang RT 01/11', 'Demakan', 'Mojolaban', -7.59536, 110.86988, 'Persawahan'),
(608, 'PROTELINDO09', 'PRO05', 'Gangang RT 01/08', 'Gadingan', 'Mojolaban', -7.58184, 110.84365, 'Perkantoran'),
(609, 'PROTELINDO10', 'PRO05', 'Dukuh Gambiran RT 06/02', 'Cemani', 'Grogol', -7.57539, 110.80166, 'Fasilitas Publik'),
(610, 'PROTELINDO11', 'PRO05', 'Pantirejo RT 06/03', 'Grogol', 'Grogol', -7.60572, 110.81981, 'Pemukiman'),
(611, 'PROTELINDO12', 'PRO05', 'Kudu RT 03/01', 'Kudu', 'Baki', -7.6125, 110.79083, 'Persawahan'),
(612, 'PROTELINDO13', 'PRO05', 'Tegalrejo RT 02/05', 'Purbayan', 'Baki', -7.57469, 110.76681, 'Perkantoran'),
(613, 'PROTELINDO14', 'PRO05', 'Makamhaji RT 01/10', 'Makamhaji', 'Kartasura', -7.56148, 110.77449, 'Fasilitas Publik'),
(614, 'PROTELINDO15', 'PRO05', 'Kranggan Kulon RT 01/02', 'Wirogunan', 'Kartasura', -7.54631, 110.7305, 'Pemukiman'),
(615, 'PROTELINDO16', 'PRO05', 'Jahidan RT 02/II', 'Ngadirejo', 'Kartasura', -7.55783, 110.75267, 'Persawahan'),
(616, 'PROTELINDO17', 'PRO05', 'Planlan RT 02 RW 04', 'Kadokan', 'Kecamatan Grogol', -7.59925, 110.825694, 'Perkantoran'),
(617, 'PROTELINDO18', 'PRO05', 'Kartasura', 'Kartasura', 'Kartasura', -7.55079, 110.73747, 'Fasilitas Publik'),
(618, 'PROTELINDO19', 'PRO05', 'Alun-Alun 01/06', 'Kartasura', 'Kartasura', -7.5555, 110.7425, 'Pemukiman'),
(619, 'IMPRAYSPERSADA01', 'PRO18', 'Dompilan 3/1', 'Jombor', 'Bendosari', -7.39366, 110.495517, 'Persawahan'),
(620, 'NARAGITA01', 'PRO19', 'Nguter RT 02/07 ', 'Nguter', ' Nguter', -7.39366, 110.839, 'Perkantoran'),
(621, 'ISP01', 'PRO20', 'Brante 02/02', 'Trosemi', 'Gatak', -7.58961, -110.7549, 'Fasilitas Publik'),
(622, 'ISP02', 'PRO20', 'Watulumbung', 'Watubonang', 'Tawangsari', -7.74623, -110.78291, 'Pemukiman');

-- --------------------------------------------------------

--
-- Table structure for table `tower`
--

CREATE TABLE IF NOT EXISTS `tower` (
  `id_site` varchar(30) NOT NULL DEFAULT '',
  `tipe_menara` varchar(20) DEFAULT NULL,
  `tinggi_menara` int(11) DEFAULT NULL,
  `eksisting_antena` int(5) DEFAULT NULL,
  `tinggi_antena` int(11) DEFAULT NULL,
  `foto_menara` varchar(60) DEFAULT NULL,
  `thumb` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tower`
--

INSERT INTO `tower` (`id_site`, `tipe_menara`, `tinggi_menara`, `eksisting_antena`, `tinggi_antena`, `foto_menara`, `thumb`) VALUES
('AXIS01', 'Green Field', 42, 3, 10, 'Menara_Axis.jpg', 'Menara_Axis_thumb.jpg'),
('AXIS02', 'Green Field', 42, 3, 10, 'Menara_Axis1.jpg', 'Menara_Axis1_thumb.jpg'),
('AXIS03', 'Green Field', 42, 3, 10, NULL, NULL),
('AXIS04', 'Green Field', 52, 3, 10, NULL, NULL),
('AXIS05', 'Green Field', 52, 3, 10, NULL, NULL),
('AXIS06', 'Green Field', 52, 3, 10, NULL, NULL),
('AXIS07', 'Green Field', 42, 3, 10, NULL, NULL),
('AXIS08', 'Green Field', 42, 3, 10, NULL, NULL),
('AXIS09', 'Green Field', 72, 3, 10, NULL, NULL),
('AXIS10', 'Green Field', 42, 3, 10, NULL, NULL),
('AXIS11', 'Green Field', 42, 3, 10, NULL, NULL),
('AXIS40', 'Green Field', 12, 3, 13, 'Menara_Axis2.jpg', 'Menara_Axis2_thumb.jpg'),
('CMI01', 'Green Field', 42, 3, 10, NULL, NULL),
('CMI02', 'Green Field', 42, 3, 10, NULL, NULL),
('CMI03', 'Green Field', 42, 3, 10, NULL, NULL),
('CMI04', 'Green Field', 42, 3, 10, NULL, NULL),
('H3INDONESIA01', 'Green Field', 42, 3, 10, NULL, NULL),
('H3INDONESIA02', 'Green Field', 42, 3, 10, NULL, NULL),
('H3INDONESIA03', 'Green Field', 32, 3, 10, NULL, NULL),
('H3INDONESIA04', 'Green Field', 32, 3, 10, NULL, NULL),
('H3INDONESIA05', 'Green Field', 36, 3, 10, NULL, NULL),
('H3INDONESIA06', 'Green Field', 36, 3, 10, NULL, NULL),
('H3INDONESIA07', 'Green Field', 42, 3, 10, NULL, NULL),
('H3INDONESIA08', 'Green Field', 42, 3, 10, NULL, NULL),
('H3INDONESIA09', 'Green Field', 62, 3, 10, NULL, NULL),
('H3INDONESIA10', 'Green Field', 45, 3, 10, NULL, NULL),
('H3INDONESIA11', 'Green Field', 53, 3, 10, NULL, NULL),
('H3INDONESIA12', 'Green Field', 30, 3, 10, NULL, NULL),
('H3INDONESIA13', 'Green Field', 52, 3, 10, NULL, NULL),
('H3INDONESIA14', 'Green Field', 12, 3, 10, NULL, NULL),
('H3INDONESIA15', 'Green Field', 60, 3, 10, NULL, NULL),
('H3INDONESIA16', 'Green Field', 50, 3, 10, NULL, NULL),
('H3INDONESIA17', 'Green Field', 45, 3, 10, NULL, NULL),
('H3INDONESIA18', 'Green Field', 25, 3, 10, NULL, NULL),
('H3INDONESIA19', 'Green Field', 45, 3, 10, NULL, NULL),
('H3INDONESIA20', 'Green Field', 50, 3, 10, NULL, NULL),
('H3INDONESIA21', 'Green Field', 45, 3, 10, NULL, NULL),
('H3INDONESIA22', 'Green Field', 35, 3, 10, NULL, NULL),
('H3INDONESIA23', 'Green Field', 32, 3, 10, NULL, NULL),
('H3INDONESIA24', 'Green Field', 20, 3, 10, NULL, NULL),
('H3INDONESIA25', 'Green Field', 52, 3, 10, NULL, NULL),
('H3INDONESIA26', 'Green Field', 25, 3, 10, NULL, NULL),
('H3INDONESIA27', 'Green Field', 25, 3, 10, NULL, NULL),
('IBS01', 'Green Field', 70, 3, 10, NULL, NULL),
('IBS02', 'Green Field', 70, 3, 10, NULL, NULL),
('IBS03', 'Green Field', 70, 3, 10, NULL, NULL),
('IBS04', 'Green Field', 50, 3, 10, NULL, NULL),
('IBS05', 'Green Field', 40, 3, 10, NULL, NULL),
('IBS06', 'Green Field', 50, 3, 10, NULL, NULL),
('IBS07', 'Green Field', 62, 3, 10, NULL, NULL),
('IBS08', 'Green Field', 62, 3, 10, NULL, NULL),
('IBS09', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS10', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS11', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS12', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS13', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS14', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS15', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS16', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS17', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS18', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS19', 'Green Field', 62, 3, 10, NULL, NULL),
('IBS20', 'Green Field', 62, 3, 10, NULL, NULL),
('IBS21', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS22', 'Green Field', 42, 3, 10, NULL, NULL),
('IBS23', 'Green Field', 42, 3, 10, NULL, NULL),
('IMPRAYSPERSADA01', 'Green Field', 42, 3, 10, NULL, NULL),
('INDOSAT01', 'Green Field', 70, 3, 10, 'Menara_Indosat.jpg', 'Menara_Indosat_thumb.jpg'),
('INDOSAT02', 'Green Field', 52, 3, 10, NULL, NULL),
('INDOSAT03', 'Green Field', 52, 3, 10, NULL, NULL),
('INDOSAT04', 'Green Field', 70, 3, 10, NULL, NULL),
('INDOSAT05', 'Green Field', 52, 3, 10, NULL, NULL),
('INDOSAT06', 'Green Field', 52, 3, 10, NULL, NULL),
('INDOSAT07', 'Green Field', 72, 3, 10, NULL, NULL),
('INDOSAT08', 'Green Field', 70, 3, 10, NULL, NULL),
('INDOSAT09', 'Green Field', 70, 3, 10, NULL, NULL),
('INDOSAT10', 'Green Field', 32, 3, 10, NULL, NULL),
('INDOSAT11', 'Green Field', 55, 3, 10, NULL, NULL),
('INDOSAT12', 'Green Field', 52, 3, 10, NULL, NULL),
('INDOSAT13', 'Green Field', 55, 3, 10, NULL, NULL),
('INDOSAT14', 'Green Field', 52, 3, 10, NULL, NULL),
('INDOSAT15', 'Green Field', 42, 3, 10, NULL, NULL),
('INDOSAT16', 'Green Field', 40, 3, 10, NULL, NULL),
('INDOSAT17', 'Green Field', 40, 3, 10, NULL, NULL),
('INDOSAT18', 'Combat', 55, 3, 10, NULL, NULL),
('INDOSAT19', 'Combat', 55, 3, 10, NULL, NULL),
('INDOSAT20', 'Combat', 52, 3, 10, NULL, NULL),
('INDOSAT21', 'Combat', 42, 3, 10, NULL, NULL),
('INDOSAT22', 'Combat', 42, 3, 10, NULL, NULL),
('INDOSAT23', 'Combat', 62, 3, 10, NULL, NULL),
('INDOSAT24', 'Combat', 35, 3, 10, NULL, NULL),
('INDOSAT25', 'Combat', 42, 3, 10, NULL, NULL),
('INDOSAT26', 'Combat', 42, 3, 10, NULL, NULL),
('INDOSAT27', 'Roof Top', 42, 3, 10, NULL, NULL),
('INDOSAT28', 'Roof Top', 42, 3, 10, NULL, NULL),
('ISP01', 'Green Field', 42, 3, 10, NULL, NULL),
('ISP02', 'Green Field', 42, 3, 10, NULL, NULL),
('LINGGARJATI01', 'Green Field', 42, 3, 10, NULL, NULL),
('LINGGARJATI02', 'Green Field', 42, 3, 10, NULL, NULL),
('MITRATEL01', 'Green Field', 72, 3, 10, NULL, NULL),
('MITRATEL02', 'Green Field', 72, 3, 10, NULL, NULL),
('MITRATEL03', 'Green Field', 62, 3, 10, NULL, NULL),
('MITRATEL04', 'Green Field', 72, 3, 10, NULL, NULL),
('MITRATEL05', 'Green Field', 42, 3, 10, NULL, NULL),
('MITRATEL06', 'Green Field', 72, 3, 10, NULL, NULL),
('MITRATEL07', 'Green Field', 52, 3, 10, NULL, NULL),
('MITRATEL08', 'Green Field', 62, 3, 10, NULL, NULL),
('MITRATEL09', 'Green Field', 52, 3, 10, NULL, NULL),
('MITRATEL10', 'Green Field', 52, 3, 10, NULL, NULL),
('MITRATEL11', 'Green Field', 52, 3, 10, NULL, NULL),
('NARAGITA01', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO01', 'Green Field', 36, 3, 10, NULL, NULL),
('PROTELINDO02', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO03', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO04', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO05', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO06', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO07', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO08', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO09', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO10', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO11', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO12', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO13', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO14', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO15', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO16', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO17', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO18', 'Green Field', 42, 3, 10, NULL, NULL),
('PROTELINDO19', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER01', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER02', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER03', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER04', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER05', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER06', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER07', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER08', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER09', 'Green Field', 42, 3, 10, NULL, NULL),
('RETOWER10', 'Green Field', 42, 3, 10, NULL, NULL),
('SKP01', 'Green Field', 52, 3, 10, NULL, NULL),
('SKP02', 'Green Field', 62, 3, 10, NULL, NULL),
('SKP03', 'Green Field', 72, 3, 10, NULL, NULL),
('SKP04', 'Green Field', 52, 3, 10, NULL, NULL),
('SKP05', 'Green Field', 52, 3, 10, NULL, NULL),
('SKP06', 'Green Field', 52, 3, 10, NULL, NULL),
('SKP07', 'Green Field', 52, 3, 10, NULL, NULL),
('SKP08', 'Green Field', 52, 3, 10, NULL, NULL),
('SMI01', 'Green Field', 52, 3, 10, NULL, NULL),
('SMI02', 'Green Field', 52, 3, 10, NULL, NULL),
('SMI03', 'Green Field', 52, 3, 10, NULL, NULL),
('SMI04', 'Green Field', 52, 3, 10, NULL, NULL),
('SMI05', 'Green Field', 55, 3, 10, NULL, NULL),
('SMI06', 'Green Field', 55, 3, 10, NULL, NULL),
('SMI07', 'Green Field', 55, 3, 10, NULL, NULL),
('SMI08', 'Green Field', 52, 3, 10, NULL, NULL),
('SMI09', 'Green Field', 42, 3, 10, NULL, NULL),
('SMI10', 'Green Field', 55, 3, 10, NULL, NULL),
('SMI11', 'Green Field', 55, 3, 10, NULL, NULL),
('STI01', 'Green Field', 42, 3, 10, NULL, NULL),
('STP01', 'Green Field', 45, 3, 10, NULL, NULL),
('STP02', 'Green Field', 51, 3, 10, NULL, NULL),
('STP03', 'Green Field', 53, 3, 10, NULL, NULL),
('STP04', 'Green Field', 72, 3, 10, NULL, NULL),
('STP05', 'Green Field', 50, 3, 10, NULL, NULL),
('STP06', 'Green Field', 51, 3, 10, NULL, NULL),
('STP07', 'Green Field', 51, 3, 10, NULL, NULL),
('STP08', 'Green Field', 51, 3, 10, NULL, NULL),
('STP09', 'Green Field', 50, 3, 10, NULL, NULL),
('STP10', 'Green Field', 50, 3, 10, NULL, NULL),
('STP11', 'Green Field', 50, 3, 10, NULL, NULL),
('STP12', 'Green Field', 70, 3, 10, NULL, NULL),
('STP13', 'Green Field', 50, 3, 10, NULL, NULL),
('STP14', 'Green Field', 50, 3, 10, NULL, NULL),
('STP15', 'Green Field', 70, 3, 10, NULL, NULL),
('STP16', 'Green Field', 50, 3, 10, NULL, NULL),
('STP17', 'Green Field', 42, 3, 10, NULL, NULL),
('STP18', 'Green Field', 38, 3, 10, NULL, NULL),
('STP19', 'Green Field', 50, 3, 10, NULL, NULL),
('STP20', 'Green Field', 40, 3, 10, NULL, NULL),
('STP21', 'Green Field', 40, 3, 10, NULL, NULL),
('TBG01', 'Green Field', 42, 3, 10, NULL, NULL),
('TBG02', 'Green Field', 62, 3, 10, NULL, NULL),
('TBG03', 'Green Field', 62, 3, 10, NULL, NULL),
('TBG04', 'Green Field', 62, 3, 10, NULL, NULL),
('TBG05', 'Green Field', 62, 3, 10, NULL, NULL),
('TBG06', 'Green Field', 62, 3, 10, NULL, NULL),
('TBG07', 'Green Field', 62, 3, 10, NULL, NULL),
('TBG08', 'Green Field', 62, 3, 10, NULL, NULL),
('TBG09', 'Green Field', 62, 3, 10, NULL, NULL),
('TBG10', 'Green Field', 62, 3, 10, NULL, NULL),
('TBG11', 'Green Field', 62, 3, 10, NULL, NULL),
('TELKOM01', 'Combat', 12, 12, 15, 'Menara_Telkomsel1.jpg', 'Menara_Telkomsel1_thumb.jpg'),
('TELKOM02', 'Roof Top', 10, 10, 10, 'Menara_Bakrie.jpg', 'Menara_Bakrie_thumb.jpg'),
('TELKOMSEL01', 'Green Field', 72, 3, 10, 'Menara_Telkomsel.jpg', 'Menara_Telkomsel_thumb.jpg'),
('TELKOMSEL02', 'Green Field', 62, 3, 10, NULL, NULL),
('TELKOMSEL03', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL04', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL05', 'Green Field', 62, 3, 10, NULL, NULL),
('TELKOMSEL06', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL07', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL08', 'Green Field', 62, 3, 10, NULL, NULL),
('TELKOMSEL09', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL10', 'Green Field', 42, 3, 10, NULL, NULL),
('TELKOMSEL11', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL12', 'Green Field', 52, 3, 10, NULL, NULL),
('TELKOMSEL13', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL14', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL15', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL16', 'Green Field', 62, 3, 10, NULL, NULL),
('TELKOMSEL17', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL18', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL19', 'Green Field', 62, 3, 10, NULL, NULL),
('TELKOMSEL20', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL21', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL22', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL23', 'Green Field', 42, 3, 10, NULL, NULL),
('TELKOMSEL24', 'Green Field', 42, 3, 10, NULL, NULL),
('TELKOMSEL25', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL26', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL27', 'Green Field', 42, 3, 10, NULL, NULL),
('TELKOMSEL28', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL29', 'Green Field', 72, 3, 10, NULL, NULL),
('TELKOMSEL30', 'Green Field', 62, 3, 10, NULL, NULL),
('XL01', 'Roof Top', 50, 3, 10, NULL, NULL),
('XL02', 'Roof Top', 50, 3, 10, NULL, NULL),
('XL03', 'Roof Top', 50, 3, 10, NULL, NULL),
('XL04', 'Roof Top', 51, 3, 10, NULL, NULL),
('XL05', 'Roof Top', 51, 3, 10, NULL, NULL),
('XL06', 'Roof Top', 50, 3, 10, NULL, NULL),
('XL07', 'Roof Top', 51, 3, 10, NULL, NULL),
('XL08', 'Roof Top', 70, 3, 10, NULL, NULL),
('XL09', 'Roof Top', 50, 3, 10, NULL, NULL),
('XL10', 'Roof Top', 70, 3, 10, NULL, NULL),
('XL11', 'Green Field', 50, 3, 10, NULL, NULL),
('XL12', 'Green Field', 42, 3, 10, NULL, NULL),
('XL13', 'Green Field', 42, 3, 10, NULL, NULL),
('XL14', 'Green Field', 52, 3, 10, NULL, NULL),
('XL15', 'Green Field', 32, 3, 10, NULL, NULL),
('XL16', 'Green Field', 72, 3, 10, NULL, NULL),
('XL17', 'Green Field', 12, 3, 10, NULL, NULL),
('XL18', 'Green Field', 72, 3, 10, NULL, NULL),
('XL19', 'Green Field', 72, 3, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `thumb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `foto`, `thumb`) VALUES
(1, 'Wisnu Pamungkas', 'wisnupamungkas@student.uns.ac.id', 'wisnu_pamungkas', '12345', 'Biru.jpg', 'Biru_thumb.jpg'),
(2, 'Eko Agus Nur Purnomo', 'ekoagusnur@gmail.com', 'agus_infokom', '54321', 'Merah.jpg', 'Merah_thumb.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_grafik`
--
CREATE TABLE IF NOT EXISTS `v_grafik` (
`pemilik_menara` varchar(50)
,`singkatan` varchar(30)
,`jumlah` bigint(21)
);
-- --------------------------------------------------------

--
-- Structure for view `peta`
--
DROP TABLE IF EXISTS `peta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `peta` AS select `site_informasi`.`id_site` AS `id_site`,`provider`.`alias_provider` AS `singkatan`,`site_informasi`.`kecamatan` AS `kecamatan`,`site_informasi`.`kelurahan` AS `kelurahan`,`provider`.`nama_provider` AS `pemilik`,`penyewa`.`penyewa_1` AS `penyewa1`,`penyewa`.`penyewa_2` AS `penyewa2`,`penyewa`.`penyewa_3` AS `penyewa3`,`site_informasi`.`latitude` AS `latitude`,`site_informasi`.`longitude` AS `longitude`,`tower`.`foto_menara` AS `foto` from (((`tower` join `site_informasi` on((`tower`.`id_site` = `site_informasi`.`id_site`))) join `provider` on((`provider`.`id_provider` = `site_informasi`.`pemilik_menara`))) join `penyewa` on((`penyewa`.`id_site` = `site_informasi`.`id_site`))) order by `site_informasi`.`id_site`;

-- --------------------------------------------------------

--
-- Structure for view `v_grafik`
--
DROP TABLE IF EXISTS `v_grafik`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_grafik` AS select `provider`.`nama_provider` AS `pemilik_menara`,`provider`.`alias_provider` AS `singkatan`,count(`site_informasi`.`pemilik_menara`) AS `jumlah` from (`provider` join `site_informasi` on((`site_informasi`.`pemilik_menara` = `provider`.`id_provider`))) group by `site_informasi`.`pemilik_menara`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batas_kota`
--
ALTER TABLE `batas_kota`
 ADD PRIMARY KEY (`id_batas`);

--
-- Indexes for table `fokus_peta`
--
ALTER TABLE `fokus_peta`
 ADD PRIMARY KEY (`id_fokus`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
 ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
 ADD PRIMARY KEY (`id_kelurahan`), ADD KEY `kelurahan_ibfk_1` (`id_kecamatan`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
 ADD PRIMARY KEY (`id_penyewa`), ADD KEY `id_site` (`id_site`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
 ADD PRIMARY KEY (`id_provider`);

--
-- Indexes for table `site_informasi`
--
ALTER TABLE `site_informasi`
 ADD PRIMARY KEY (`id_detail`), ADD KEY `id_site` (`id_site`), ADD KEY `pemilik_menara` (`pemilik_menara`);

--
-- Indexes for table `tower`
--
ALTER TABLE `tower`
 ADD PRIMARY KEY (`id_site`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batas_kota`
--
ALTER TABLE `batas_kota`
MODIFY `id_batas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=175;
--
-- AUTO_INCREMENT for table `fokus_peta`
--
ALTER TABLE `fokus_peta`
MODIFY `id_fokus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_informasi`
--
ALTER TABLE `site_informasi`
MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=623;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
ADD CONSTRAINT `kelurahan_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penyewa`
--
ALTER TABLE `penyewa`
ADD CONSTRAINT `penyewa_ibfk_1` FOREIGN KEY (`id_site`) REFERENCES `tower` (`id_site`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `site_informasi`
--
ALTER TABLE `site_informasi`
ADD CONSTRAINT `site_informasi_ibfk_3` FOREIGN KEY (`id_site`) REFERENCES `tower` (`id_site`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `site_informasi_ibfk_4` FOREIGN KEY (`pemilik_menara`) REFERENCES `provider` (`id_provider`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
