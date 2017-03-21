-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 02:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` int(5) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NULL DEFAULT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `level`, `tanggal_create`, `tanggal_update`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'a', 1, '2017-03-15 01:06:19', '0000-00-00 00:00:00', 1),
(12, 'super_admin', 'ed49c3fed75a513a79cb8bd1d4715d57', 'Hariririski', 2, '2017-03-15 01:06:16', NULL, 1),
(13, 'a', 'e10adc3949ba59abbe56e057f20f883e', 'a', 1, '2017-03-05 11:56:42', '2017-02-24 04:41:49', 1),
(14, 'aaa', 'e10adc3949ba59abbe56e057f20f883e', 'aaa', 2, '2017-02-24 10:41:36', '2017-02-24 04:41:36', 0),
(15, 'root', '63a9f0ea7bb98050796b649e85481845', 'Hariririski', 2, '2017-03-14 13:57:58', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `volume` int(100) NOT NULL,
  `tanggal_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NULL DEFAULT NULL,
  `id_admin` int(100) NOT NULL,
  `id_admin_update` int(100) DEFAULT NULL,
  `id_tipe_barang` int(100) NOT NULL,
  `id_satuan_barang` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `merek`, `volume`, `tanggal_create`, `tanggal_update`, `id_admin`, `id_admin_update`, `id_tipe_barang`, `id_satuan_barang`) VALUES
('8992761002015', 'Cola cola', 'cola"', 350, '2017-03-17 11:50:45', NULL, 12, NULL, 37, 7);

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` int(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `id_admin` int(100) NOT NULL,
  `jumlah_keluar` int(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NULL DEFAULT NULL,
  `id_penerima_barang_keluar` int(100) NOT NULL,
  `id_admin_update` int(100) DEFAULT NULL,
  `status_barang_keluar` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `id_barang`, `id_admin`, `jumlah_keluar`, `tanggal_create`, `tanggal_update`, `id_penerima_barang_keluar`, `id_admin_update`, `status_barang_keluar`) VALUES
(11, '8992761002015', 12, 9, '2017-03-17 13:14:22', NULL, 8, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `id_admin` int(100) NOT NULL,
  `id_admin_update` int(100) DEFAULT NULL,
  `jumlah_masuk` int(100) NOT NULL,
  `harga_satuan` int(255) NOT NULL,
  `id_faktur` int(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_barang_masuk` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `id_barang`, `id_admin`, `id_admin_update`, `jumlah_masuk`, `harga_satuan`, `id_faktur`, `tanggal_create`, `tanggal_update`, `status_barang_masuk`) VALUES
(11119, '8992761002015', 12, NULL, 10, 123456, 111117, '2017-03-17 13:13:46', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_detail_penerima_barang`
--

CREATE TABLE `data_detail_penerima_barang` (
  `id_data_detail_penerima_barang` int(100) NOT NULL,
  `nama_data_detail_penerima_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_detail_penerima_barang`
--

INSERT INTO `data_detail_penerima_barang` (`id_data_detail_penerima_barang`, `nama_data_detail_penerima_barang`) VALUES
(1, 'ADM(Administrator)'),
(4, 'j'),
(2, 'Laboraturium'),
(3, 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penerima_barang`
--

CREATE TABLE `detail_penerima_barang` (
  `id_detail_penerima_barang` int(100) NOT NULL,
  `id_penerima_barang` int(100) NOT NULL,
  `id_data_detail_penerima_barang` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penerima_barang`
--

INSERT INTO `detail_penerima_barang` (`id_detail_penerima_barang`, `id_penerima_barang`, `id_data_detail_penerima_barang`) VALUES
(1, 24, 1),
(2, 24, 2),
(3, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE `faktur` (
  `id_faktur` int(100) NOT NULL,
  `nomor_faktur` varchar(100) NOT NULL,
  `bast` varchar(100) NOT NULL,
  `mak` varchar(100) NOT NULL,
  `pelaksana` varchar(100) NOT NULL,
  `tahun_anggaran` year(4) NOT NULL,
  `nominal` bigint(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_admin` int(100) NOT NULL,
  `id_tipe_faktur` int(100) NOT NULL,
  `id_sumber_dana` int(100) NOT NULL,
  `id_admin_update` int(100) DEFAULT NULL,
  `status_faktur` int(3) NOT NULL,
  `tanggal_finalisasi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`id_faktur`, `nomor_faktur`, `bast`, `mak`, `pelaksana`, `tahun_anggaran`, `nominal`, `tanggal_create`, `tanggal_update`, `id_admin`, `id_tipe_faktur`, `id_sumber_dana`, `id_admin_update`, `status_faktur`, `tanggal_finalisasi`) VALUES
(111117, '1111`', '111', '111', 'Unsyiah', 0000, 1234567, '2017-03-17 13:13:46', '0000-00-00 00:00:00', 12, 4, 3, NULL, 1, '2017-03-17 14:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penerima`
--

CREATE TABLE `jenis_penerima` (
  `id_jenis_penerima` int(100) NOT NULL,
  `nama_jenis_penerima` varchar(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_penerima`
--

INSERT INTO `jenis_penerima` (`id_jenis_penerima`, `nama_jenis_penerima`, `tanggal_create`, `tanggal_update`) VALUES
(10, 'FAKULTAS', '2017-03-17 09:03:28', NULL),
(11, 'JURUSAN/PRODI', '2017-03-17 09:03:42', NULL),
(12, 'DOSEN', '2017-03-17 09:03:52', NULL),
(13, 'MUSALLA', '2017-03-17 09:04:01', NULL),
(14, 'UNIT LAINNYA', '2017-03-17 09:04:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penerima_barang`
--

CREATE TABLE `penerima_barang` (
  `id_penerima_barang` int(100) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NULL DEFAULT NULL,
  `id_jenis_penerima` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerima_barang`
--

INSERT INTO `penerima_barang` (`id_penerima_barang`, `nama_penerima`, `tanggal_create`, `tanggal_update`, `id_jenis_penerima`) VALUES
(6, 'DEKAN', '2017-03-17 09:04:25', NULL, 10),
(7, 'WAKIL DEKAN I', '2017-03-17 09:04:40', NULL, 10),
(8, 'WAKIL DEKAN II', '2017-03-17 09:04:52', NULL, 10),
(9, 'WAKIL DEKAN III', '2017-03-17 09:05:00', NULL, 10),
(10, 'KTU', '2017-03-17 09:05:07', NULL, 10),
(11, 'SBP - Sub. Bag. Pendidikan + Adm', '2017-03-17 09:05:23', NULL, 10),
(12, 'Kasub.Bag Keuangan dan Kepegawaian', '2017-03-17 09:05:33', NULL, 10),
(13, 'Kasub.Bag Kemahasiswaan', '2017-03-17 09:05:49', NULL, 10),
(14, 'SBP - Komputer SBP (KRS Online ) dan Administrasi', '2017-03-17 09:06:02', NULL, 10),
(15, 'Kasub.Bag umum dan BMN Kebersihan', '2017-03-17 09:06:27', NULL, 10),
(16, 'Kasub.Bag umum dan BMN Teknisi', '2017-03-17 09:06:41', NULL, 10),
(17, 'Kasub.Bag umum dan BMN Satpam', '2017-03-17 09:06:57', NULL, 10),
(18, 'SBKK - Kepegawaian - Administrasi Kepegawaian', '2017-03-17 09:07:11', NULL, 10),
(19, 'Sekretariat', '2017-03-17 09:07:25', NULL, 10),
(20, 'Perpustakaan', '2017-03-17 09:07:36', NULL, 10),
(21, 'Teknik sipil', '2017-03-17 09:07:57', NULL, 11),
(22, 'Teknik kimia', '2017-03-17 09:08:08', NULL, 11),
(23, 'Arsitektur', '2017-03-17 09:08:18', NULL, 11),
(24, 'Teknik mesin', '2017-03-17 09:08:30', NULL, 11),
(25, 'Teknik elektro', '2017-03-17 09:08:47', NULL, 11),
(26, 'Teknik industri', '2017-03-17 09:08:59', NULL, 11),
(27, 'Teknik geofisika', '2017-03-17 09:11:17', NULL, 11),
(28, 'Teknik pertambangan', '2017-03-17 09:11:36', NULL, 11),
(29, 'Teknik geologi', '2017-03-17 09:11:49', NULL, 11),
(30, 'Teknik PWK (perencanaan wilayah dan kota)', '2017-03-17 09:12:03', NULL, 11),
(31, 'Teknik komputer', '2017-03-17 09:12:18', NULL, 11),
(32, 'Prodi MTS', '2017-03-17 09:12:28', NULL, 11),
(33, 'Prodi MTI', '2017-03-17 09:12:39', NULL, 11),
(34, 'Prodi MTE', '2017-03-17 09:12:52', NULL, 11),
(111111736, 'qwertyu', '2017-03-17 10:17:36', NULL, 11);

-- --------------------------------------------------------

--
-- Table structure for table `penerima_barang_keluar`
--

CREATE TABLE `penerima_barang_keluar` (
  `id_penerima_barang_keluar` int(255) NOT NULL,
  `id_detail_penerima_barang` int(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime DEFAULT NULL,
  `id_admin` int(100) NOT NULL,
  `id_admin_update` int(100) DEFAULT NULL,
  `tanggal_finalisasi` datetime DEFAULT NULL,
  `status_penerima_barang_keluar` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerima_barang_keluar`
--

INSERT INTO `penerima_barang_keluar` (`id_penerima_barang_keluar`, `id_detail_penerima_barang`, `tanggal_create`, `tanggal_update`, `id_admin`, `id_admin_update`, `tanggal_finalisasi`, `status_penerima_barang_keluar`) VALUES
(8, 3, '2017-03-17 13:14:22', NULL, 12, NULL, '2017-03-17 14:14:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `satuan_barang`
--

CREATE TABLE `satuan_barang` (
  `id_satuan_barang` int(100) NOT NULL,
  `nama_satuan` varchar(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan_barang`
--

INSERT INTO `satuan_barang` (`id_satuan_barang`, `nama_satuan`, `tanggal_create`, `tanggal_update`) VALUES
(7, 'LUSIN', '2017-03-17 09:19:27', NULL),
(8, 'KOTAK', '2017-03-17 09:19:30', NULL),
(9, 'BUAH', '2017-03-17 09:19:32', NULL),
(10, 'RIM', '2017-03-17 09:19:35', NULL),
(11, 'KODI', '2017-03-17 09:19:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sumber_dana`
--

CREATE TABLE `sumber_dana` (
  `id_sumber_dana` int(100) NOT NULL,
  `nama_sumber` varchar(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber_dana`
--

INSERT INTO `sumber_dana` (`id_sumber_dana`, `nama_sumber`, `tanggal_create`, `tanggal_update`) VALUES
(3, 'APBA', '2017-03-17 09:13:22', NULL),
(4, 'ABBD', '2017-03-17 09:13:27', NULL),
(5, '7 in 1', '2017-03-17 09:13:35', NULL),
(6, 'DIPA', '2017-03-17 09:13:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_barang`
--

CREATE TABLE `tipe_barang` (
  `id_tipe_barang` int(100) NOT NULL,
  `nama_tipe` varchar(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_barang`
--

INSERT INTO `tipe_barang` (`id_tipe_barang`, `nama_tipe`, `tanggal_create`, `tanggal_update`) VALUES
(36, 'ATK (Alat Tulis Kantor)', '2017-03-17 09:03:03', NULL),
(37, 'LABORATURIUM', '2017-03-17 09:03:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_faktur`
--

CREATE TABLE `tipe_faktur` (
  `id_tipe_faktur` int(100) NOT NULL,
  `nama_faktur` varchar(100) NOT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_faktur`
--

INSERT INTO `tipe_faktur` (`id_tipe_faktur`, `nama_faktur`, `tanggal_create`, `tanggal_update`) VALUES
(4, 'KONTRAK', '2017-03-17 09:00:58', NULL),
(5, 'HIBAH', '2017-03-17 09:02:21', NULL),
(6, 'KWITANSI', '2017-03-17 09:02:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ttd`
--

CREATE TABLE `ttd` (
  `id_ttd` int(100) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttd`
--

INSERT INTO `ttd` (`id_ttd`, `jabatan`, `nama`, `nip`, `status`) VALUES
(1, 'Kasubag Peralatan', 'Darmawan.S.kom', '12345678', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `nama_barang` (`nama_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indexes for table `data_detail_penerima_barang`
--
ALTER TABLE `data_detail_penerima_barang`
  ADD PRIMARY KEY (`id_data_detail_penerima_barang`),
  ADD UNIQUE KEY `nama_data_detail_penerima_barang` (`nama_data_detail_penerima_barang`);

--
-- Indexes for table `detail_penerima_barang`
--
ALTER TABLE `detail_penerima_barang`
  ADD PRIMARY KEY (`id_detail_penerima_barang`);

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`id_faktur`),
  ADD UNIQUE KEY `nomor_faktur` (`nomor_faktur`);

--
-- Indexes for table `jenis_penerima`
--
ALTER TABLE `jenis_penerima`
  ADD PRIMARY KEY (`id_jenis_penerima`),
  ADD UNIQUE KEY `nama_jenis` (`nama_jenis_penerima`);

--
-- Indexes for table `penerima_barang`
--
ALTER TABLE `penerima_barang`
  ADD PRIMARY KEY (`id_penerima_barang`),
  ADD UNIQUE KEY `nama_penerima` (`nama_penerima`);

--
-- Indexes for table `penerima_barang_keluar`
--
ALTER TABLE `penerima_barang_keluar`
  ADD PRIMARY KEY (`id_penerima_barang_keluar`);

--
-- Indexes for table `satuan_barang`
--
ALTER TABLE `satuan_barang`
  ADD PRIMARY KEY (`id_satuan_barang`),
  ADD UNIQUE KEY `nama_satuan` (`nama_satuan`);

--
-- Indexes for table `sumber_dana`
--
ALTER TABLE `sumber_dana`
  ADD PRIMARY KEY (`id_sumber_dana`),
  ADD UNIQUE KEY `nama_sumber` (`nama_sumber`);

--
-- Indexes for table `tipe_barang`
--
ALTER TABLE `tipe_barang`
  ADD PRIMARY KEY (`id_tipe_barang`),
  ADD UNIQUE KEY `nama_tipe` (`nama_tipe`);

--
-- Indexes for table `tipe_faktur`
--
ALTER TABLE `tipe_faktur`
  ADD PRIMARY KEY (`id_tipe_faktur`),
  ADD UNIQUE KEY `nama_faktur` (`nama_faktur`);

--
-- Indexes for table `ttd`
--
ALTER TABLE `ttd`
  ADD PRIMARY KEY (`id_ttd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barang_keluar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11120;
--
-- AUTO_INCREMENT for table `data_detail_penerima_barang`
--
ALTER TABLE `data_detail_penerima_barang`
  MODIFY `id_data_detail_penerima_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `detail_penerima_barang`
--
ALTER TABLE `detail_penerima_barang`
  MODIFY `id_detail_penerima_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faktur`
--
ALTER TABLE `faktur`
  MODIFY `id_faktur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111118;
--
-- AUTO_INCREMENT for table `jenis_penerima`
--
ALTER TABLE `jenis_penerima`
  MODIFY `id_jenis_penerima` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `penerima_barang`
--
ALTER TABLE `penerima_barang`
  MODIFY `id_penerima_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111111737;
--
-- AUTO_INCREMENT for table `penerima_barang_keluar`
--
ALTER TABLE `penerima_barang_keluar`
  MODIFY `id_penerima_barang_keluar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `satuan_barang`
--
ALTER TABLE `satuan_barang`
  MODIFY `id_satuan_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sumber_dana`
--
ALTER TABLE `sumber_dana`
  MODIFY `id_sumber_dana` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tipe_barang`
--
ALTER TABLE `tipe_barang`
  MODIFY `id_tipe_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tipe_faktur`
--
ALTER TABLE `tipe_faktur`
  MODIFY `id_tipe_faktur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ttd`
--
ALTER TABLE `ttd`
  MODIFY `id_ttd` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
