-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 08:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_mi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `foto` text NOT NULL,
  `judul` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`foto`, `judul`, `keterangan`) VALUES
('../../assets/img/about/IMG_20210303_082353.jpg', 'Kata Sambutan', 'Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas karunia dan hidayah-Nya, sehingga kita semua dapat membaktikan segala hal yang kita miliki untuk kemajuan dunia pendidikan. Apapun bentuk dan sumbangsih yang kita berikan, jika dilandasi niat yang tulus tanpa memandang imbalan apapun akan menghasilkan mahakarya yang agung untuk bekal kita dan generasi setelah kita. Pendidikan adalah harga mati untuk menjadi pondasi bangsa dan negara dalam menghadapi perkembangan zaman./n\r\nHal ini seiring dengan penguasaan teknologi untuk dimanfaatkan sebaik mungkin, sehingga menciptakan iklim kondusif dalam ranah keilmuan. Dengan konsep yang kontekstual dan efektif, kami mengejewantahkan nilai-nilai pendidikan yang tertuang dalam visi misi M-School, sebagai panduan hukum dalam menjabarkan tujuan hakiki pendidikan.');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(5) NOT NULL,
  `foto` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sub_judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `foto`, `judul`, `sub_judul`) VALUES
(1, '../../assets/img/carousel/pengajar - Copy.jpg', 'TENAGA PENGAJAR YANG BERKOMPETEN DI BIDANGNYA', 'Mendidik Murid Sesuai Syari`at Islam'),
(2, '../../assets/img/carousel/halaman-MINH.JPG', 'MADARASAH IBTIDAIYAH NURUL HIKMAH', 'Sekolah Berbasis Islam di Desa Selolembu'),
(3, '../../assets/img/carousel/prestasi.jpg', 'PRESTASI', 'Memenangkan Lomba Pidato Bahasa Arab'),
(4, '../../assets/img/carousel/KKN.jpg', 'Persembahan Dari Kami', ' Peserta KKN Posko 21 Tahun 2022');

-- --------------------------------------------------------

--
-- Table structure for table `data_minor`
--

CREATE TABLE `data_minor` (
  `logo` text NOT NULL,
  `telp` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_minor`
--

INSERT INTO `data_minor` (`logo`, `telp`, `email`, `alamat`) VALUES
('../../assets/img/logo/logo-mi.png', '085258183685', 'nurul.hikmah.cdm@gmail.com', 'Desa Selolembu, Kec. Curahdami, Kab. Bondowoso');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id`, `foto`, `ket`) VALUES
(1, '../../assets/img/dokumentasi/20181119_074309.jpg', 'Acara Maulid Nabi'),
(2, '../../assets/img/dokumentasi/IMG_20190827_064559_HHT.jpg', 'Kegiatan Pramuka'),
(3, '../../assets/img/dokumentasi/20181116_075634.jpg', 'Imunisasi Sekolah'),
(4, '../../assets/img/dokumentasi/juara 3 lomba kebersihan madrasah tingkat kabupaten bondowoso.jpg', 'Juara 3 Lomba Kebersihan'),
(5, '../../assets/img/dokumentasi/20181116_080333.jpg', 'Imunisasi'),
(6, '../../assets/img/dokumentasi/20181119_080713.jpg', 'Pesantren Kilat');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(5) NOT NULL,
  `foto` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `foto`, `nama`, `jabatan`) VALUES
(1, '../../assets/img/guru/nora, S.Pd, Wali Kls 6.JPG', 'Nora, S.Pd.', 'Wali Kelas 6'),
(2, '../../assets/img/guru/bandrio, S.Pd.SD, Kepala Madrasah.JPG', 'Bandrio, S.Pd.SD', 'Kepala Sekolah Madrasah'),
(3, '../../assets/img/guru/heriyanto, S.Pd.SD, Wali Kls 3.JPG', 'Heriyanto, S.Pd.', 'Wali Kelas 3'),
(4, '../../assets/img/guru/rizka hidayati, S.Pd.SD, Wali Kls 1.JPG', 'Rizka Hidayati, S.Pd.SD', 'Wali Kelas 1'),
(5, '../../assets/img/guru/Halima, S.Pd.I, Gr Bhs Arab.JPG', 'Halima, S.Pd.I.', 'Guru Bahasa Arab'),
(6, '../../assets/img/guru/Ponco Erwanoe, S.Pd.I, Wali Kls 4.jpg', 'Ponco Erwanoe, S.Pd.I.', 'Wali Kelas 4'),
(7, '../../assets/img/guru/ASTUTIK, S.Pd.I, gr Fiqih.JPG', 'Astutik, S.Pd.I', 'Guru Fiqih'),
(8, '../../assets/img/guru/EVI Herliyanti, S.Pd.I, Gr Qurdis.JPG', 'Evi Herliyanti, S.Pd.I', 'Guru Al-Qur`an Hadits'),
(9, '../../assets/img/guru/prili Utami Dewi Pramesty, Wali Kls 5.jpg', 'Prili Utami Dewi Pramesty', 'Wali Kelas 5');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jenis` enum('pengumuman','agenda') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `tanggal`, `jam_awal`, `jam_akhir`, `keterangan`, `jenis`) VALUES
(1, 'Perilisan Website Sekolah MI Nurul Hikmah Silolemb', '2022-09-10', '00:00:00', '00:00:00', 'Dengan adanya website sekolah, diharapkan dapat meningkatkan fasilitas pelayanan sekolah terhadap murid dan wali murid.', 'pengumuman'),
(2, 'Kunjungan Anak-Anak KKN Universitas Ibrahimy', '2022-08-26', '08:00:00', '11:59:00', 'Sosialiasi program kerja anak anak KKN', 'agenda'),
(3, 'Konsultasi Pembangunan Website Peserta KKN', '2022-09-01', '08:00:00', '11:40:00', 'Tim IT KKN membangun website sekolah', 'agenda'),
(5, 'Konsultasi Psikologi', '2022-09-03', '07:30:00', '10:30:00', 'Peserta KKN Unuiversitas Ibrahimy Melakukan Pelayanan Tentang Psikologi Siswa ', 'agenda');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `author` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `robots_index` enum('1','0') NOT NULL,
  `robots_follow` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`author`, `description`, `keywords`, `robots_index`, `robots_follow`) VALUES
('MI Nurul Hikmah Silolembu', 'Sekolah berlandaskan Syariat Islam yang di kelola oleh tenaga pengajar yang berkompeten di bidangnya. MI Nurul Hikmah Silolembu terletak di Kecamatan Curahdami, Desa Selolembu RT .. / RW ..', 'MI Nurul Hikmah,MI Nurul Hikmah Silolembu,Selolembu,Silolembu,Madrasah Selolembu,Curahdami', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ucapan`
--

CREATE TABLE `ucapan` (
  `id` int(5) NOT NULL,
  `foto` text NOT NULL,
  `judul` varchar(50) NOT NULL,
  `konten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ucapan`
--

INSERT INTO `ucapan` (`id`, `foto`, `judul`, `konten`) VALUES
(1, '../../assets/img/ucapan/bandrio, S.Pd.SD, Kepala Madrasah.JPG', 'Launching Website MI Nurul Hikmah', 'Kami Menyambut baik terbitnya Website MI Nurul Hikmah dengan harapan dipublikasinya website ini akan berdampak terhadap sekolah dalam hal peningkatan layanan pendidikan kepada Siswa, Orang Tua, dan Masyarakat pada umumnya.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`visi`, `misi`, `tujuan`) VALUES
('Semakin baiknya kehidupan beragama peserta didik,Kehidupan yang rukun antar peserta didik dalam pergaulannya di madrasah,Peserta didik memperoleh nilai akademis yang baik,Semakin rendahnya sifat ketergantungan terhadap keluarga dan orang lain,Lulusan MI Nurul Hikmah Silolembu dapat diterima di sekolah yang diinginkanya', 'Meningkatkan Kualitas kehidupan beragama peserta didik,Meningkatkan kualitas kerukunan antar peserta didik,Meningkatkan kualitas pendidikan dengan variasi metode dalam setiap pembelajaran yang berbasis K-13,Pembiasaan diri peserta didik untuk dapat mandiri dalam menyelesaikan permasalahan,Memberikan ekskul dan keterampilan berbahasa asing serta praktek kegiatan beragama pada setiap peserta didik', 'Mengembangkan budaya madrasah yang religius melalui peningkatan kegiatan keagamaan.,Madrasah melaksanakan pendidikan berkarakter pada setiap kelas.,Meningkatkan kualitas pendidikan dengan harapan nilai UAS meningkat tiap tahunnya.,Meningkatkan kegiatan Pembiasaan yang efektif.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucapan`
--
ALTER TABLE `ucapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ucapan`
--
ALTER TABLE `ucapan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
