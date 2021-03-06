-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 12:14 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_smart_tni`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(11) NOT NULL,
  `judul` varchar(1024) NOT NULL,
  `gambar` varchar(512) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_At` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `gambar`, `isi`, `created_at`, `updated_At`) VALUES
(12, 'olahraga', 'logo.png', '', '2018-07-18 13:45:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id` int(2) NOT NULL,
  `kriteria` varchar(32) NOT NULL,
  `bobot` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kriteria`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'Moral', 100, '2018-05-24 14:29:15', '2018-05-24 14:29:15'),
(2, 'Perilaku Disiplin', 90, '2018-04-27 12:29:14', '0000-00-00 00:00:00'),
(3, 'Sikap Militer', 80, '2018-04-27 12:29:17', '0000-00-00 00:00:00'),
(4, 'Loyalitas', 40, '2018-04-27 12:29:29', '0000-00-00 00:00:00'),
(5, 'Prakarsa', 30, '2018-04-27 12:29:32', '0000-00-00 00:00:00'),
(6, 'Kemauan Bekerja', 40, '2018-04-27 12:29:35', '0000-00-00 00:00:00'),
(7, 'Kerja Sama', 50, '2018-04-27 12:29:44', '0000-00-00 00:00:00'),
(8, 'Ketabahan', 20, '2018-04-27 12:29:47', '0000-00-00 00:00:00'),
(9, 'Prestasi Kerja ', 10, '2018-06-02 09:01:36', '2018-06-02 09:01:36'),
(10, 'Kemauan Melakuan Tugas', 20, '2018-04-27 12:32:53', '0000-00-00 00:00:00'),
(11, 'Kemauan Untuk Maju ', 20, '2018-04-27 12:32:57', '0000-00-00 00:00:00'),
(12, 'Kewibawaan', 30, '2018-04-27 12:33:07', '0000-00-00 00:00:00'),
(13, 'Daya Tangkap', 70, '2018-04-27 12:33:20', '0000-00-00 00:00:00'),
(14, 'Kemauan Sosialisasi', 80, '2018-04-27 12:33:35', '0000-00-00 00:00:00'),
(15, 'Tanggung Jawab  ', 90, '2018-04-27 12:33:44', '0000-00-00 00:00:00'),
(16, 'Jasmani dan Postur', 75, '2018-04-27 12:33:51', '0000-00-00 00:00:00'),
(17, ' Kesehatan', 100, '2018-06-02 09:03:46', '2018-06-02 09:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_sub`
--

CREATE TABLE IF NOT EXISTS `kriteria_sub` (
  `id` int(2) NOT NULL,
  `kriteria_id` int(2) NOT NULL,
  `kriteria_sub` varchar(128) NOT NULL,
  `bobot` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_sub`
--

INSERT INTO `kriteria_sub` (`id`, `kriteria_id`, `kriteria_sub`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 16, 'Lari', 100, '2018-05-26 07:33:24', '2018-05-26 07:33:25'),
(2, 16, 'Pull Up', 90, '2018-07-08 05:22:01', '2018-05-24 14:25:25'),
(3, 16, 'Sit Up', 80, '2018-07-08 05:22:14', '2018-05-24 14:25:36'),
(4, 16, 'Push Up', 70, '2018-05-20 03:06:06', '0000-00-00 00:00:00'),
(5, 16, 'Shuttle Run', 60, '2018-05-20 03:06:10', '0000-00-00 00:00:00'),
(6, 16, 'Renang', 40, '2018-05-20 03:06:13', '0000-00-00 00:00:00'),
(7, 16, 'Tinggi', 50, '2018-05-20 06:27:01', '0000-00-00 00:00:00'),
(8, 16, 'Berat', 50, '2018-05-20 06:27:07', '0000-00-00 00:00:00'),
(9, 17, 'Kepala, Kulit Kepala, Muka dan Leher', 100, '2018-05-20 06:25:31', '0000-00-00 00:00:00'),
(10, 17, 'Hidung', 90, '2018-05-20 06:25:27', '2018-05-10 09:33:19'),
(11, 17, 'Sinur - Sins', 80, '2018-05-20 06:25:22', '0000-00-00 00:00:00'),
(12, 17, 'Mulut, Tenggorokan, Tonsil', 80, '2018-05-20 06:25:19', '0000-00-00 00:00:00'),
(13, 17, 'Telinga', 100, '2018-05-20 06:25:14', '0000-00-00 00:00:00'),
(14, 17, 'Membrana Tympani', 90, '2018-05-20 06:25:11', '0000-00-00 00:00:00'),
(15, 17, 'Mata', 80, '2018-05-20 06:25:07', '0000-00-00 00:00:00'),
(16, 17, 'Optalmoscopi', 70, '2018-05-20 06:25:04', '0000-00-00 00:00:00'),
(17, 17, 'Pupil (Bentuk Reaksi)', 60, '2018-05-20 06:24:56', '0000-00-00 00:00:00'),
(18, 17, 'Gerakan Mata Bidang Lihat', 50, '2018-05-20 06:24:52', '0000-00-00 00:00:00'),
(19, 17, 'Dada dan Paru-Paru', 70, '2018-05-20 06:24:49', '0000-00-00 00:00:00'),
(20, 17, 'Jantung', 80, '2018-05-20 06:24:46', '0000-00-00 00:00:00'),
(21, 17, 'Abdomen dan Visceria (Hernia)', 70, '2018-05-20 06:24:43', '0000-00-00 00:00:00'),
(22, 17, 'Anus dan Rectrum', 80, '2018-05-20 06:24:40', '0000-00-00 00:00:00'),
(23, 17, 'Sistem Endrokin', 50, '2018-05-20 06:24:36', '0000-00-00 00:00:00'),
(24, 17, 'Sistem Genito Urinaria\r\n', 90, '2018-05-20 06:24:33', '0000-00-00 00:00:00'),
(25, 17, 'Ekstremitas Atas(Keadaan Otot)', 80, '2018-05-20 06:24:30', '0000-00-00 00:00:00'),
(26, 17, 'Ekstremitas Bawah (Idem)', 70, '2018-05-20 06:24:24', '0000-00-00 00:00:00'),
(27, 17, 'Kaki', 60, '2018-05-20 06:24:21', '0000-00-00 00:00:00'),
(28, 17, 'Kulit (Kelenjar Limphe)', 50, '2018-05-20 06:24:17', '0000-00-00 00:00:00'),
(29, 17, 'Verteblaris dan Pelvis', 60, '2018-05-20 06:24:14', '0000-00-00 00:00:00'),
(30, 17, 'Neurologi (Keseimbangan)', 50, '2018-05-20 06:24:10', '0000-00-00 00:00:00'),
(31, 17, 'Gigi', 50, '2018-05-20 06:24:08', '0000-00-00 00:00:00'),
(32, 17, 'Tensi', 55, '2018-05-20 06:24:05', '0000-00-00 00:00:00'),
(33, 17, 'Nadi', 40, '2018-05-20 06:24:00', '0000-00-00 00:00:00'),
(34, 17, 'Lingkar Dada', 45, '2018-05-20 06:23:58', '0000-00-00 00:00:00'),
(35, 17, 'Lingkar Perut', 45, '2018-05-20 06:23:55', '0000-00-00 00:00:00'),
(36, 17, 'Warna Kulit', 30, '2018-05-20 06:23:50', '0000-00-00 00:00:00'),
(37, 17, 'Warna Mata', 30, '2018-05-20 06:23:39', '0000-00-00 00:00:00'),
(38, 17, 'Urine', 20, '2018-06-02 09:04:15', '2018-06-02 09:04:15'),
(39, 17, 'Faeces', 30, '2018-05-20 06:23:36', '2018-04-23 07:05:14'),
(40, 17, 'Darah', 40, '2018-05-20 06:23:27', '0000-00-00 00:00:00'),
(41, 17, 'Serologis', 30, '2018-05-20 06:23:11', '2018-04-15 14:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
`id` int(11) NOT NULL,
  `personel_id` varchar(8) NOT NULL,
  `kriteria` text NOT NULL,
  `kriteria_sub` text NOT NULL,
  `kriteria_kv` text NOT NULL,
  `kriteria_sub_kv` text NOT NULL,
  `skor` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `personel_id`, `kriteria`, `kriteria_sub`, `kriteria_kv`, `kriteria_sub_kv`, `skor`, `created_at`, `updated_at`) VALUES
(3, '19047-p', '{"1":"3","2":"1","3":"1","4":"2","5":"2","6":"2","7":"1","8":"2","9":"2","10":"2","11":"2","12":"2","13":"1","14":"2","15":"2"}', '{"1":"2400","2":"8","3":"38","4":"35","5":"8","6":"30","7":"167","8":"70","9":"1","10":"1","11":"2","12":"1","13":"2","14":"1","15":"2","16":"1","17":"1","18":"1","19":"1","20":"1","21":"1","22":"1","23":"1","24":"1","25":"1","26":"1","27":"1","28":"1","29":"1","30":"1","31":"1","32":"1","33":"1","34":"1","35":"1","36":"1","37":"1","38":"1","39":"1","40":"1","41":"1"}', '{"1":40,"2":80,"3":80,"4":60,"5":60,"6":60,"7":80,"8":60,"9":60,"10":60,"11":60,"12":60,"13":80,"14":60,"15":60}', '{"1":100,"2":20,"3":80,"4":60,"5":60,"6":20,"7":75,"8":25,"9":75,"10":75,"11":25,"12":75,"13":25,"14":75,"15":25,"16":75,"17":75,"18":75,"19":75,"20":75,"21":75,"22":75,"23":75,"24":75,"25":75,"26":75,"27":75,"28":75,"29":75,"30":75,"31":75,"32":75,"33":75,"34":75,"35":75,"36":75,"37":75,"38":75,"39":75,"40":75,"41":75}', 64.8409, '2018-07-26 04:48:15', '2018-07-26 04:48:15'),
(4, '19093-p', '{"1":"2","2":"3","3":"2","4":"1","5":"3","6":"2","7":"1","8":"2","9":"2","10":"2","11":"3","12":"3","13":"2","14":"1","15":"1"}', '{"1":"2500","2":"8","3":"44","4":"42","5":"7","6":"29","7":"170","8":"68","9":"1","10":"1","11":"2","12":"2","13":"1","14":"2","15":"1","16":"1","17":"1","18":"1","19":"1","20":"1","21":"1","22":"1","23":"1","24":"1","25":"1","26":"1","27":"1","28":"1","29":"1","30":"1","31":"2","32":"1","33":"1","34":"1","35":"1","36":"1","37":"1","38":"1","39":"1","40":"1","41":"1"}', '{"1":60,"2":40,"3":60,"4":80,"5":40,"6":60,"7":80,"8":60,"9":60,"10":60,"11":40,"12":40,"13":60,"14":80,"15":80}', '{"1":100,"2":20,"3":100,"4":100,"5":60,"6":20,"7":75,"8":25,"9":75,"10":75,"11":25,"12":25,"13":75,"14":25,"15":75,"16":75,"17":75,"18":75,"19":75,"20":75,"21":75,"22":75,"23":75,"24":75,"25":75,"26":75,"27":75,"28":75,"29":75,"30":75,"31":25,"32":75,"33":75,"34":75,"35":75,"36":75,"37":75,"38":75,"39":75,"40":75,"41":75}', 63.2667, '2018-07-26 04:50:40', '2018-07-26 04:50:40'),
(5, '19389-p', '{"1":"1","2":"2","3":"2","4":"3","5":"2","6":"2","7":"2","8":"2","9":"2","10":"2","11":"2","12":"3","13":"1","14":"3","15":"2"}', '{"1":"2150","2":"4","3":"35","4":"33","5":"5","6":"33","7":"168","8":"70","9":"2","10":"2","11":"2","12":"1","13":"1","14":"1","15":"1","16":"2","17":"1","18":"1","19":"2","20":"2","21":"2","22":"2","23":"2","24":"1","25":"1","26":"1","27":"1","28":"1","29":"1","30":"1","31":"1","32":"1","33":"1","34":"1","35":"1","36":"1","37":"1","38":"1","39":"1","40":"1","41":"1"}', '{"1":80,"2":60,"3":60,"4":40,"5":60,"6":60,"7":60,"8":60,"9":60,"10":60,"11":60,"12":40,"13":80,"14":40,"15":60}', '{"1":60,"2":20,"3":60,"4":60,"5":40,"6":20,"7":75,"8":25,"9":25,"10":25,"11":25,"12":75,"13":75,"14":75,"15":75,"16":25,"17":75,"18":75,"19":25,"20":25,"21":25,"22":25,"23":25,"24":75,"25":75,"26":75,"27":75,"28":75,"29":75,"30":75,"31":75,"32":75,"33":75,"34":75,"35":75,"36":75,"37":75,"38":75,"39":75,"40":75,"41":75}', 59.1201, '2018-07-26 08:24:19', '2018-07-26 08:24:19'),
(6, '20588-P', '{"1":"3","2":"1","3":"1","4":"2","5":"2","6":"2","7":"2","8":"2","9":"2","10":"2","11":"2","12":"2","13":"1","14":"2","15":"2"}', '{"1":"2400","2":"8","3":"38","4":"35","5":"8","6":"30","7":"167","8":"70","9":"1","10":"1","11":"1","12":"1","13":"1","14":"2","15":"1","16":"1","17":"1","18":"1","19":"1","20":"1","21":"1","22":"1","23":"1","24":"2","25":"1","26":"1","27":"1","28":"1","29":"1","30":"2","31":"2","32":"1","33":"1","34":"1","35":"1","36":"1","37":"1","38":"1","39":"1","40":"1","41":"1"}', '{"1":40,"2":80,"3":80,"4":60,"5":60,"6":60,"7":60,"8":60,"9":60,"10":60,"11":60,"12":60,"13":80,"14":60,"15":60}', '{"1":100,"2":20,"3":80,"4":60,"5":60,"6":20,"7":75,"8":25,"9":75,"10":75,"11":75,"12":75,"13":75,"14":25,"15":75,"16":75,"17":75,"18":75,"19":75,"20":75,"21":75,"22":75,"23":75,"24":25,"25":75,"26":75,"27":75,"28":75,"29":75,"30":25,"31":25,"32":75,"33":75,"34":75,"35":75,"36":75,"37":75,"38":75,"39":75,"40":75,"41":75}', 63.7305, '2018-07-26 15:14:01', '2018-07-26 15:14:01'),
(7, '20829-p', '{"1":"2","2":"3","3":"2","4":"1","5":"3","6":"2","7":"1","8":"2","9":"2","10":"2","11":"3","12":"3","13":"2","14":"2","15":"2"}', '{"1":"2500","2":"8","3":"44","4":"42","5":"7","6":"29","7":"170","8":"68","9":"1","10":"1","11":"1","12":"1","13":"1","14":"2","15":"1","16":"1","17":"1","18":"1","19":"1","20":"1","21":"1","22":"1","23":"1","24":"2","25":"2","26":"1","27":"1","28":"1","29":"1","30":"1","31":"2","32":"1","33":"1","34":"1","35":"1","36":"1","37":"1","38":"1","39":"1","40":"1","41":"1"}', '{"1":60,"2":40,"3":60,"4":80,"5":40,"6":60,"7":80,"8":60,"9":60,"10":60,"11":40,"12":40,"13":60,"14":60,"15":60}', '{"1":100,"2":20,"3":100,"4":100,"5":60,"6":20,"7":75,"8":25,"9":75,"10":75,"11":75,"12":75,"13":75,"14":25,"15":75,"16":75,"17":75,"18":75,"19":75,"20":75,"21":75,"22":75,"23":75,"24":25,"25":25,"26":75,"27":75,"28":75,"29":75,"30":75,"31":25,"32":75,"33":75,"34":75,"35":75,"36":75,"37":75,"38":75,"39":75,"40":75,"41":75}', 59.6427, '2018-07-26 15:19:25', '2018-07-26 15:19:25'),
(8, '62583', '{"1":"3","2":"2","3":"2","4":"3","5":"2","6":"2","7":"3","8":"2","9":"4","10":"3","11":"3","12":"1","13":"2","14":"3","15":"2"}', '{"1":"2100","2":"4","3":"37","4":"35","5":"6","6":"34","7":"167","8":"70","9":"1","10":"1","11":"1","12":"1","13":"1","14":"2","15":"1","16":"1","17":"1","18":"1","19":"1","20":"1","21":"1","22":"1","23":"1","24":"2","25":"2","26":"1","27":"1","28":"1","29":"1","30":"2","31":"1","32":"1","33":"1","34":"1","35":"1","36":"1","37":"1","38":"1","39":"1","40":"1","41":"1"}', '{"1":40,"2":60,"3":60,"4":40,"5":60,"6":60,"7":40,"8":60,"9":20,"10":40,"11":40,"12":80,"13":60,"14":40,"15":60}', '{"1":60,"2":20,"3":80,"4":60,"5":40,"6":20,"7":75,"8":25,"9":75,"10":75,"11":75,"12":75,"13":75,"14":25,"15":75,"16":75,"17":75,"18":75,"19":75,"20":75,"21":75,"22":75,"23":75,"24":25,"25":25,"26":75,"27":75,"28":75,"29":75,"30":25,"31":75,"32":75,"33":75,"34":75,"35":75,"36":75,"37":75,"38":75,"39":75,"40":75,"41":75}', 53.5757, '2018-07-26 15:23:44', '2018-07-26 15:23:44'),
(9, '63086', '{"1":"2","2":"1","3":"2","4":"3","5":"2","6":"2","7":"2","8":"2","9":"3","10":"2","11":"2","12":"3","13":"2","14":"2","15":"2"}', '{"1":"2250","2":"7","3":"41","4":"40","5":"7","6":"30","7":"168","8":"69","9":"1","10":"1","11":"1","12":"1","13":"1","14":"2","15":"1","16":"2","17":"2","18":"1","19":"2","20":"2","21":"2","22":"2","23":"2","24":"2","25":"2","26":"2","27":"1","28":"1","29":"1","30":"2","31":"2","32":"1","33":"1","34":"1","35":"1","36":"2","37":"1","38":"1","39":"1","40":"1","41":"1"}', '{"1":60,"2":80,"3":60,"4":40,"5":60,"6":60,"7":60,"8":60,"9":40,"10":60,"11":60,"12":40,"13":60,"14":60,"15":60}', '{"1":80,"2":20,"3":100,"4":80,"5":60,"6":20,"7":75,"8":25,"9":75,"10":75,"11":75,"12":75,"13":75,"14":25,"15":75,"16":25,"17":25,"18":75,"19":25,"20":25,"21":25,"22":25,"23":25,"24":25,"25":25,"26":25,"27":75,"28":75,"29":75,"30":25,"31":25,"32":75,"33":75,"34":75,"35":75,"36":25,"37":75,"38":75,"39":75,"40":75,"41":75}', 59.4017, '2018-07-26 15:29:57', '2018-07-26 15:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE IF NOT EXISTS `personel` (
  `id` varchar(8) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `pangkat` varchar(32) NOT NULL,
  `keterangan` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personel`
--

INSERT INTO `personel` (`id`, `nama`, `pangkat`, `keterangan`, `created_at`, `updated_at`) VALUES
('13818-p', 'teguh wibowo,M.Tr.hanla', 'letkol laut', 'Komandan', '2018-07-08 05:11:38', '2018-07-08 05:11:38'),
('19047-p', 'Samudi Dariyanto. S.H', 'Kapten Laut(S)', 'Anggota', '2018-07-26 04:41:14', '0000-00-00 00:00:00'),
('19093-p', 'Agus Hartono', 'Kapten Mar', 'Anggota', '2018-07-26 04:42:04', '0000-00-00 00:00:00'),
('19389-p', 'Litherman Zalukhu', 'Lettu Laut(P)', 'Anggota', '2018-07-26 04:42:50', '0000-00-00 00:00:00'),
('20588-P', 'sulaiman', 'Lettu laut(S)', 'Anggota', '2018-07-26 14:43:07', '2018-07-26 14:43:07'),
('20829-p', 'dr.Asty Nursanti', 'Lettu Laut (K-W)', 'Anggota', '2018-07-26 14:44:25', '0000-00-00 00:00:00'),
('59713', 'Rosidi', 'Serma Sba', 'Anggota', '2018-07-26 14:49:13', '0000-00-00 00:00:00'),
('62583', 'Trisno Wardono', 'Pelda Lis', 'Anggota', '2018-07-26 14:45:22', '0000-00-00 00:00:00'),
('63086', 'Karnyoto', 'Pelda Sba', 'Anggota', '2018-07-26 14:46:03', '0000-00-00 00:00:00'),
('64156', 'Dwi Sutrisna', 'Serma Sba', 'Anggota', '2018-07-26 14:50:03', '0000-00-00 00:00:00'),
('68255', 'Slamet', 'Serka Apk', 'Anggota', '2018-07-26 14:52:39', '0000-00-00 00:00:00'),
('6834', 'Suprapto', 'Serka Saa', 'Anggota', '2018-07-26 14:53:28', '0000-00-00 00:00:00'),
('69561', 'Muhammad Tito', 'Serma Ttu', 'Anggota', '2018-07-26 14:50:47', '0000-00-00 00:00:00'),
('70418', 'Heru Sartono', 'Serka Nav', 'Anggota', '2018-07-26 14:54:22', '0000-00-00 00:00:00'),
('70476', 'Heri Supriyanto', 'Serka Pom', 'Anggota', '2018-07-26 14:55:04', '0000-00-00 00:00:00'),
('70497', 'Talim Muhamad Ali', 'Serka Saa', 'Anggota', '2018-07-26 14:55:44', '0000-00-00 00:00:00'),
('70796', 'M.Minardi', 'Serma Ttu', 'Anggota', '2018-07-26 14:51:21', '0000-00-00 00:00:00'),
('79702', 'Edi Supriyono', 'Pelda Mes', 'Anggota', '2018-07-26 14:46:46', '0000-00-00 00:00:00'),
('88993', 'Agus Jayadi Bahri', 'Pelda Saa', 'Anggota', '2018-07-26 14:47:45', '0000-00-00 00:00:00'),
('89153', 'Malijanto', 'Pelda Mes', 'Anggota', '2018-07-26 15:04:25', '0000-00-00 00:00:00'),
('89297', 'Achmad Sarifudin', 'Pelda Bek', 'Anggota', '2018-07-26 15:03:37', '0000-00-00 00:00:00'),
('98473', 'Nanang Fajarianto', 'Serma Nav', 'Anggota', '2018-07-26 14:52:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(5) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `level` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'Administrator', 'Admin', '2018-07-06 00:50:40', '2018-07-06 00:50:40'),
(14, '13818-p', 'ndan13', 'teguh wibowo,M.Tr.hanla', 'Komandan', '2018-07-17 17:16:15', '2018-07-17 17:16:15'),
(33, '19047-p', '19047-p', 'Samudi Dariyanto. S.H', 'Anggota', '2018-07-26 04:41:14', '0000-00-00 00:00:00'),
(34, '19093-p', '19093-p', 'Agus Hartono', 'Anggota', '2018-07-26 04:42:04', '0000-00-00 00:00:00'),
(35, '19389-p', '19389-p', 'Litherman Zalukhu', 'Anggota', '2018-07-26 04:42:50', '0000-00-00 00:00:00'),
(37, '20588-P', '20588-P', 'sulaiman', 'Anggota', '2018-07-26 14:43:07', '2018-07-26 14:43:07'),
(38, '20829-p', '20829-p', 'dr.Asty Nursanti', 'Anggota', '2018-07-26 14:44:25', '0000-00-00 00:00:00'),
(39, '62583', '62583', 'Trisno Wardono', 'Anggota', '2018-07-26 14:45:22', '0000-00-00 00:00:00'),
(40, '63086', '63086', 'Karnyoto', 'Anggota', '2018-07-26 14:46:03', '0000-00-00 00:00:00'),
(41, '79702', '79702', 'Edi Supriyono', 'Anggota', '2018-07-26 14:46:46', '0000-00-00 00:00:00'),
(42, '88993', '88993', 'Agus Jayadi Bahri', 'Anggota', '2018-07-26 14:47:44', '0000-00-00 00:00:00'),
(44, '59713', '59713', 'Rosidi', 'Anggota', '2018-07-26 14:49:13', '0000-00-00 00:00:00'),
(45, '64156', '64156', 'Dwi Sutrisna', 'Anggota', '2018-07-26 14:50:03', '0000-00-00 00:00:00'),
(46, '69561', '69561', 'Muhammad Tito', 'Anggota', '2018-07-26 14:50:47', '0000-00-00 00:00:00'),
(47, '70796', '70796', 'M.Minardi', 'Anggota', '2018-07-26 14:51:21', '0000-00-00 00:00:00'),
(48, '98473', '98473', 'Nanang Fajarianto', 'Anggota', '2018-07-26 14:52:08', '0000-00-00 00:00:00'),
(49, '68255', '68255', 'Slamet', 'Anggota', '2018-07-26 14:52:39', '0000-00-00 00:00:00'),
(50, '6834', '6834', 'Suprapto', 'Anggota', '2018-07-26 14:53:28', '0000-00-00 00:00:00'),
(51, '70418', '70418', 'Heru Sartono', 'Anggota', '2018-07-26 14:54:22', '0000-00-00 00:00:00'),
(52, '70476', '70476', 'Heri Supriyanto', 'Anggota', '2018-07-26 14:55:04', '0000-00-00 00:00:00'),
(53, '70497', '70497', 'Talim Muhamad Ali', 'Anggota', '2018-07-26 14:55:44', '0000-00-00 00:00:00'),
(54, '89297', '89297', 'Achmad Sarifudin', 'Anggota', '2018-07-26 15:03:37', '0000-00-00 00:00:00'),
(55, '89153', '89153', 'Malijanto', 'Anggota', '2018-07-26 15:04:25', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria_sub`
--
ALTER TABLE `kriteria_sub`
 ADD PRIMARY KEY (`id`), ADD KEY `kriteria_id` (`kriteria_id`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personel`
--
ALTER TABLE `personel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
