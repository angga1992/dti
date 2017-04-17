-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2014 at 06:57 AM
-- Server version: 5.5.29-log
-- PHP Version: 5.3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_dti`
--

-- --------------------------------------------------------

--
-- Table structure for table `kepanitian`
--

CREATE TABLE IF NOT EXISTS `kepanitian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tugas` varchar(30) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kepanitian`
--

INSERT INTO `kepanitian` (`id`, `id_event`, `nama`, `tugas`, `tanggal_mulai`, `tanggal_akhir`) VALUES
(3, 2, 'Yunus Alfarisi', 'Program Officer', '2013-05-06', '2013-05-08'),
(4, 3, 'Sukirno', 'Program Officer', '2013-05-17', '2013-05-19'),
(5, 4, 'Yunus Alfarisi', 'Program Officer', '2013-05-13', '2013-05-17'),
(6, 1, 'Agus Setiawan', 'class leader', '2014-10-01', '2014-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE IF NOT EXISTS `keuangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `nilai_proyek` decimal(10,0) NOT NULL,
  `total_biaya` decimal(10,0) NOT NULL,
  `proyeksi_laba` decimal(10,0) NOT NULL,
  `hpp_event` decimal(10,0) NOT NULL,
  `ev_pelaksanaan` varchar(6) NOT NULL,
  `ev_panitia` varchar(6) NOT NULL,
  `ev_pemateri` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `id_event`, `nilai_proyek`, `total_biaya`, `proyeksi_laba`, `hpp_event`, `ev_pelaksanaan`, `ev_panitia`, `ev_pemateri`) VALUES
(2, 1, '10000000', '8000000', '2000000', '80', '-', '-', '-'),
(3, 2, '9300000', '7600000', '1700000', '82', '78', '86', '88');

-- --------------------------------------------------------

--
-- Table structure for table `tb_amanah`
--

CREATE TABLE IF NOT EXISTS `tb_amanah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amanah` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_amanah`
--

INSERT INTO `tb_amanah` (`id`, `amanah`) VALUES
(1, 'Program Officer'),
(2, 'class leader'),
(3, 'Content Program'),
(4, 'Fasilitator'),
(5, 'Adm/keu'),
(6, 'Support'),
(7, 'Evaluator'),
(8, 'Desain Multimedia'),
(9, 'FotoGrafer'),
(10, 'Medis'),
(11, 'Bankir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE IF NOT EXISTS `tb_event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(100) NOT NULL,
  `nama_klien` varchar(30) NOT NULL,
  `segmen` varchar(10) NOT NULL,
  `katagori` varchar(50) NOT NULL,
  `tgl_mulai` varchar(30) NOT NULL,
  `tgl_akhir` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `jum_peserta` int(250) NOT NULL,
  `fasilitas` varchar(500) NOT NULL,
  PRIMARY KEY (`id_event`),
  UNIQUE KEY `id_event` (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `nama_event`, `nama_klien`, `segmen`, `katagori`, `tgl_mulai`, `tgl_akhir`, `tempat`, `kota`, `jum_peserta`, `fasilitas`) VALUES
(1, '5 AS Bank BRI Makasar', 'Bank BRI', 'Dewasa', 'Talim Corporate', '2013-05-01', '2013-05-30', 'Hotel Makasar', 'Makasar', 130, ''),
(2, 'MPP PT Pembangunan Jaya Ancol 1/2013', 'PT. Pembangunan Jaya Ancol', 'Dewasa', 'MPP Sofskill', '2013-05-06', '2013-05-08', 'Puteri duyung ancol', 'Jakarta', 61, ''),
(3, 'outbond BPPK 1/2013', 'BPPK', 'Dewasa', 'Outbond Training', '2013-05-17', '2013-05-19', 'Panjang Jiwo', 'Bogor', 40, ''),
(4, 'MPP BPK 1/2013', 'Badan Pemeriksa Keuangan RI', 'Dewasa', 'MPP Sofskill', '2013-05-13', '2013-05-17', 'VEDCA dan Hotel Isola', 'Cianjur dan Bandung', 30, 'kaos / modul');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_materi`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_materi` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `judul_materi` varchar(30) NOT NULL,
  `nama_pemateri` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_jadwal_materi`
--

INSERT INTO `tb_jadwal_materi` (`id_jadwal`, `id_event`, `tanggal`, `jam_mulai`, `jam_akhir`, `judul_materi`, `nama_pemateri`) VALUES
(2, 1, '2014-10-01', '08:00:00', '16:00:00', 'Lima 5 As', 'Tia Setiadarma,S.Kom'),
(3, 2, '2013-05-06', '08:00:00', '08:30:00', 'Pembukaan', 'Tomy Satyagraha,ST.MM'),
(4, 2, '2013-05-06', '10:00:00', '12:00:00', 'Leadership By Hearth', 'Abdurrahman Yuri, H.'),
(5, 2, '2013-05-06', '13:00:00', '15:00:00', 'Quadrant Character', 'Abdurrahman Yuri, H.'),
(6, 3, '2013-05-17', '09:00:00', '17:00:00', 'Outbond', 'Tia Setiadarma,S.Kom'),
(7, 4, '2013-05-13', '08:00:00', '09:00:00', 'Pembukaan', 'Tomy Satyagraha,ST.MM'),
(8, 4, '2013-05-13', '15:00:00', '17:00:00', 'Hidup dengan Bening Hati', 'Lili Chumedi M.Ag'),
(9, 1, '2014-10-01', '09:00:00', '10:00:00', 'Lima As', 'Roni Abdul Fatah,H.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_katagori`
--

CREATE TABLE IF NOT EXISTS `tb_katagori` (
  `id_katagori` int(11) NOT NULL AUTO_INCREMENT,
  `katagori` varchar(25) NOT NULL,
  PRIMARY KEY (`id_katagori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_katagori`
--

INSERT INTO `tb_katagori` (`id_katagori`, `katagori`) VALUES
(1, 'Talim Corporate'),
(2, 'MPP Sofskill'),
(3, 'MPP Teknis'),
(4, 'Character Building'),
(6, 'Leadership'),
(7, 'Spiritual'),
(8, 'Enterpreneurship'),
(9, 'Outbond Training'),
(10, 'Sanlat MQ'),
(11, 'Event Organizer'),
(12, 'Seminar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klien`
--

CREATE TABLE IF NOT EXISTS `tb_klien` (
  `id_klien` int(11) NOT NULL AUTO_INCREMENT,
  `nama_klien` varchar(30) NOT NULL,
  `alamat_klien` varchar(150) NOT NULL,
  `telp_klien` varchar(12) NOT NULL,
  `fax_klien` varchar(12) NOT NULL,
  PRIMARY KEY (`id_klien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `tb_klien`
--

INSERT INTO `tb_klien` (`id_klien`, `nama_klien`, `alamat_klien`, `telp_klien`, `fax_klien`) VALUES
(1, 'Bank BRI', 'Jakarta', '022', ''),
(2, 'PT. Pembangunan Jaya Ancol', '', '', ''),
(3, 'BPPK', '', '', ''),
(4, 'Badan Pemeriksa Keuangan RI', '', '', ''),
(5, 'PT Timah', '', '', ''),
(6, 'BDK Medan', 'Jl. Ekawarni no. 30 Johor Medan', '', ''),
(7, 'PT.Newmont', '', '', ''),
(8, 'PT Askrindo', '', '', ''),
(9, 'Pemkot Dumai', '', '', ''),
(10, 'PDAM Bogor', '', '', ''),
(11, 'Kementrian BUMN', '', '', ''),
(12, 'SD Al-Maruf', '', '', ''),
(13, 'PT AERTA', '', '', ''),
(14, 'PT Pindad', '', '', ''),
(15, 'SMA 71 Jakarta', '', '', ''),
(16, 'SMA Labschool Jakarta', '', '', ''),
(17, 'PT Adira Multifinance', '', '', ''),
(18, 'RS Pelni', '', '', ''),
(19, 'Sari Ater', '', '', ''),
(20, 'Capsugel', '', '', ''),
(21, 'Umum', '', '', ''),
(22, 'SD Mutiara Sahara', '', '', ''),
(23, 'SMAN 11 Bandung', '', '', ''),
(24, 'SMAN 1 Ciawi', '', '', ''),
(25, 'SMP Dian Didaktika', '', '', ''),
(26, 'SMPN 1 Cimahi', '', '', ''),
(27, 'SMAN 10 Bandung', '', '', ''),
(28, 'SMA Labschool Rawamangun', '', '', ''),
(29, 'SMA Labschool Kebayoran', '', '', ''),
(30, 'SMA Labschool Cibubur', '', '', ''),
(31, 'SMAN 3 Cimahi', '', '', ''),
(32, 'QATAR', '', '', ''),
(33, 'SMA FARMASI ANNISA', '', '', ''),
(34, 'SMAN 24 Bandung', '', '', ''),
(35, 'SMAN 6 CIMAHI', '', '', ''),
(36, 'SMAN 6 Palembang', '', '', ''),
(37, 'PT Hino Motors', '', '', ''),
(38, 'PT IKPT', '', '', ''),
(39, 'ITENAS', '', '', ''),
(40, 'PT Sarihusada', '', '', ''),
(41, 'PT Bank Mandiri', '', '', ''),
(42, 'Lembaga Pinjaman Simpanan', '', '', ''),
(43, 'Bank BNI Syariah', '', '', ''),
(44, 'Pemprov DKI', '', '', ''),
(45, 'BKD Bekasi', '', '', ''),
(46, 'Pemkab Siak', '', '', ''),
(47, 'PT PALYJA', '', '', ''),
(48, 'PT Unilever', '', '', ''),
(49, 'PT Pegadaian', '', '', ''),
(50, 'PT Sucofindo', '', '', ''),
(51, 'Kementrian Agama', '', '', ''),
(52, 'PT Tirta Investama', '', '', ''),
(53, 'SMP Nurul Fikri', '', '', ''),
(54, 'PT Astra Agro Lestari', '', '', ''),
(55, 'PT GMP', '', '', ''),
(56, 'Pemprov KalSel', '', '', ''),
(57, 'VEDCA', '', '', ''),
(58, 'PT Adaro', '', '', ''),
(59, 'Yayasan Syamsi Dhuha', '', '', ''),
(60, 'BDK Cimahi', 'Cimahi', '081578821118', ''),
(61, 'Dinas Perindustrian dan Energi', 'jl.Taman Jatibaru No.1(komp.Perkantoran dinas teknisi DKI Jakarta) Jakarta pusat 10150', '021-3480438,', '021-3480439'),
(62, 'PT Pertamina Prabumulih', 'Palembang', '', ''),
(63, 'SMPIT Islamic Village', 'Tangerang', '', ''),
(64, 'SMAIT Raudhatul Jannah', '', '', ''),
(65, 'UD Hisana Gizi Cemerlang', '', '', ''),
(66, 'PT Pelindo II', '', '', ''),
(67, 'BDK Balikpapan', 'Jl MT Haryono dalam No 39 A, Gunung Bahagia Balikpapan', '', ''),
(68, 'Pemkot Bukittinggi', '', '', ''),
(69, 'Pabrik Gula Jatitujuh', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_panitia`
--

CREATE TABLE IF NOT EXISTS `tb_panitia` (
  `id_panitia` int(11) NOT NULL AUTO_INCREMENT,
  `nama_panitia` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `Tgl` date NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int(11) NOT NULL,
  `hp` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pend_akhir` varchar(10) NOT NULL,
  `riw_pend` text NOT NULL,
  `aktivitas` varchar(30) NOT NULL,
  `aktivitas_asal` varchar(30) NOT NULL,
  `gender` char(6) NOT NULL,
  `status` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `ukuran` int(12) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id_panitia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_panitia`
--

INSERT INTO `tb_panitia` (`id_panitia`, `nama_panitia`, `tempat_lahir`, `Tgl`, `alamat`, `telepon`, `hp`, `email`, `pend_akhir`, `riw_pend`, `aktivitas`, `aktivitas_asal`, `gender`, `status`, `photo`, `ukuran`, `type`) VALUES
(1, 'Tomy Satyagraha', 'Bandung', '1977-09-03', 'Jl. Dago Asri I B 18 A Bandung', 22, 2147483647, 'tomysgraha1@gmail.com', 'S-2', '', 'Internal PT DTI', 'Santri DT', 'Ikhwan', 'Aktif', '', 0, ''),
(2, 'Abdul Rohim', '', '0000-00-00', '', 0, 0, '', '', '', 'Internal PT DTI', 'Santri Karya', '', '', '', 0, ''),
(3, 'Doddy ekapriades Topan', '', '0000-00-00', '', 0, 0, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Ikhwan', 'Aktif', '', 0, ''),
(4, 'Ahmad Haris Mufti', '', '0000-00-00', '', 0, 2147483647, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Ikhwan', 'Aktif', '', 0, ''),
(5, 'Budi Permana', '', '0000-00-00', '', 0, 2147483647, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Ikhwan', 'Aktif', '', 0, ''),
(6, 'Sulestiono', '', '0000-00-00', '', 0, 0, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Ikhwan', 'Aktif', '', 0, ''),
(7, 'Nurhayati', '', '0000-00-00', '', 0, 0, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Akhwat', 'Aktif', '', 0, ''),
(8, 'Sukirno', '', '0000-00-00', '', 0, 2147483647, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Ikhwan', 'Aktif', '', 0, ''),
(9, 'Yunus Alfarisi', '', '0000-00-00', '', 0, 0, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Ikhwan', 'Aktif', '', 0, ''),
(10, 'Marhaban Syaiful Hamid', '', '0000-00-00', '', 0, 2147483647, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Ikhwan', 'Aktif', '', 0, ''),
(11, 'Agus Setiawan', '', '0000-00-00', '', 0, 0, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Ikhwan', 'Aktif', '', 0, ''),
(12, 'bagja dani magribi', '', '0000-00-00', '', 0, 0, '', '', '', 'Internal PT DTI', 'Santri Karya', 'Ikhwan', 'Aktif', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemateri`
--

CREATE TABLE IF NOT EXISTS `tb_pemateri` (
  `id_pemateri` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemateri` varchar(30) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `Tgl` date NOT NULL,
  `Bln` varchar(15) NOT NULL,
  `Thn` varchar(4) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pend_akhir` varchar(4) NOT NULL,
  `riw_pend` text NOT NULL,
  `instansi_profesi` varchar(15) NOT NULL,
  `no_ktp` int(16) NOT NULL,
  `no_rek` int(16) NOT NULL,
  `npwp` int(15) NOT NULL,
  `spesi_materi` char(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `ukuran` int(12) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pemateri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `tb_pemateri`
--

INSERT INTO `tb_pemateri` (`id_pemateri`, `nama_pemateri`, `tempat_lahir`, `Tgl`, `Bln`, `Thn`, `alamat`, `telepon`, `hp`, `email`, `pend_akhir`, `riw_pend`, `instansi_profesi`, `no_ktp`, `no_rek`, `npwp`, `spesi_materi`, `photo`, `ukuran`, `type`) VALUES
(1, '57 1', 'Bandung', '1962-01-19', '', '', 'Jl Gegerkalong Girang No. 30 Bandung', '', '', 'suhumq@yahoo.com', 'S-1', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(2, 'Abdurrahman Yuri, H.', 'Bandung', '0000-00-00', '', '', '', '', '', '', 'DIPL', 'PAAP Unpad', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(3, 'Ninih Mutmainah, Hj', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(4, 'Mulyadi al-Fadhil, S.Sos, M.Pd', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(5, 'Lili Chumedi M.Ag', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(6, 'Fuad Muhsin,S.Ag', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(7, 'Mumuh Abdul Muhyi, M.Pd', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(8, 'Mulyana,S.Ag', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(9, 'Fakhrudin,S.Ag', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(10, 'Roni Abdul Fatah,H.', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(11, 'Masrukul Amri', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Trainer', 0, 0, 0, '', '', 0, ''),
(12, 'Budi Prayitno', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Miraj Tour & Tr', 0, 0, 0, '', '', 0, ''),
(13, 'Tanto Abdurrahman', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Yogyakarta', 0, 0, 0, '', '', 0, ''),
(14, 'Yono Budiono, Drs.MBA', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Psikolog / Trai', 0, 0, 0, '', '', 0, ''),
(15, 'Diana Harding, Prof.Dr.M.Psi', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Fak. Psikologi ', 0, 0, 0, '', '', 0, ''),
(16, 'Hary Setyowibowo, M.Psi', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Fak. Psikologi ', 0, 0, 0, '', '', 0, ''),
(17, 'Puty Rita Liswari, Dr', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Integrated Heal', 0, 0, 0, '', '', 0, ''),
(18, 'Tauhid Nur Azhar, Dr', '', '0000-00-00', '', '', '', '', '', '', '', '', 'UNISBA', 0, 0, 0, '', '', 0, ''),
(19, 'Dodi Nugraha,Dr', '', '0000-00-00', '', '', '', '', '', '', '', '', 'RS. Hasan Sadik', 0, 0, 0, '', '', 0, ''),
(20, 'Kristianto', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Dayang Sumbi', 0, 0, 0, '', '', 0, ''),
(21, 'Gatot Kunta Kumara,ST', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(22, 'Budi Djatmiko,Dr.M.Si', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Bandung Busines', 0, 0, 0, '', '', 0, ''),
(23, 'Ujang Karim', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(24, 'Feri Susanto', 'Sungailiat', '1970-12-28', '', '', 'jl. Gegerkalong Tengah IV No.11', '022-70163231', '081321501345', 'aferi99@gmail.com', 'S-1', 'S-1 Manajemen Universitas Terbuka', 'Daarut Tauhiid', 0, 0, 0, 'Diniyah Spiritual', '', 0, ''),
(25, 'Iwan Hartawan', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Enterpreneur', 0, 0, 0, '', '', 0, ''),
(26, 'Akhmad Syaikhu', '', '0000-00-00', '', '', '', '', '', '', '', '', 'VEDCA', 0, 0, 0, '', '', 0, ''),
(27, 'Ahmad Badawi', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Sate Ponorogo -', 0, 0, 0, '', '', 0, ''),
(28, 'Sanusi', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Cintek - Owner', 0, 0, 0, '', '', 0, ''),
(29, 'Patoni', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Patani - Owner', 0, 0, 0, '', '', 0, ''),
(30, 'Inna Wiyandini', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Inna Cookies - ', 0, 0, 0, '', '', 0, ''),
(31, 'Doyo Mulyo', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Mekar Tani Jaya', 0, 0, 0, '', '', 0, ''),
(32, 'Ade Rachmad', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Bogasari Baking', 0, 0, 0, '', '', 0, ''),
(33, 'Cak Eko', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Baso Malang Cak', 0, 0, 0, '', '', 0, ''),
(34, 'Eman Sulaeman', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarul Jannah C', 0, 0, 0, '', '', 0, ''),
(35, 'Dudung Abdul Gani, M.Pd', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(36, 'Jakaria Goro,H', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(37, 'Rama Royani,Ir', '', '0000-00-00', '', '', '', '', '', '', '', '', 'LeadPro', 0, 0, 0, '', '', 0, ''),
(38, 'Teno Eko Sugiantoro', '', '0000-00-00', '', '', '', '', '', '', '', '', 'ELTAPS', 0, 0, 0, '', '', 0, ''),
(39, 'Tia Setiadarma,S.Kom', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Dosen FIKOM Unp', 0, 0, 0, '', '', 0, ''),
(40, 'Nurhadi', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(41, 'Tomy Satyagraha,ST.MM', 'Bandung', '1977-09-03', '', '', 'Jl. Dago Asri I B 18 A Bandung', '022-2534669', '081573201977', '', 'S-2', 'SMA Negeri 3 Bandung\r\nS-1 Teknik Elektro ITB\r\nS-2 Manajemen Bisnis UPI', 'Daarut Tauhiid', 0, 0, 0, 'Enterpreneurship', '', 0, ''),
(42, 'Adriyanto', '', '0000-00-00', '', '', '', '', '', '', 'S-1', '', 'STEC', 0, 0, 0, '', '', 0, ''),
(43, 'Nugie Al-Afgani', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(44, 'Ali Nugraha,ST', '', '0000-00-00', '', '', '', '', '', '', '', '', 'PT PINDAD', 0, 0, 0, '', '', 0, ''),
(45, 'Usman Hadi,S.Pd', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(46, 'Acu Syamsudin, S.Pd', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(47, 'Kemas Mahmud,S.Pd', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(48, 'Kunkun Kurniawan, S.Pd', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(49, 'Doddy Ekapriadis Topan, ST', '', '0000-00-00', '', '', '', '', '', '', 'S-1', 'S-1 Teknik Elektro Unjani Bandung', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(50, 'Abdul Rohim,S.Si', '', '0000-00-00', '', '', '', '', '', '', 'S-1', 'S-1 Bahasa Indonesia Unpad', 'Daarut Tauhiid', 0, 0, 0, '', '', 0, ''),
(51, 'Andri Permata Surya', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(52, 'Palgunadi T Setyawan', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(53, 'Ingeu Catering', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(54, 'Tahu Cihanjuang', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(55, 'Tahu Lembang', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(56, 'Bank BRI', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(57, 'Kopontren DT', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(58, 'Jamur Lembang, IP Farm', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(59, 'Bandrek Cihanjuang', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(60, 'Astoto Slamet Bank Mandiri', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(61, 'Akhmad Bartanamal Palappa', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, 'Lainnya', '', 0, ''),
(62, 'Ruslan Sulaeman', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, ''),
(63, 'Sayekti Pribadiningtyas', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(5, 'Dayat', '1234'),
(7, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
