-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2020 at 11:37 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.0.33-14+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bagan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bagan`
--

CREATE TABLE `tb_bagan` (
  `id` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bagan`
--

INSERT INTO `tb_bagan` (`id`, `pid`, `tags`, `name`, `title`, `img`) VALUES
(1, 0, 'pasutri1', 'Billy Moore', 'bapak', 'boy.png'),
(2, 0, 'pasutri1', 'Marley Wilson', 'ibu', 'boy.png'),
(4, 1, '0', 'Billie Rose', 'Anak', 'boy.png\r\n'),
(5, 1, 'pasutri2', 'Glen Bell', 'Anak', 'boy.png'),
(6, 2, 'pasutri2', 'Blair Francis', 'Anak', 'boy.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_doc_foto`
--

CREATE TABLE `tb_doc_foto` (
  `id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(255) NOT NULL,
  `post_slug` varchar(150) NOT NULL,
  `caption` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_type` varchar(255) NOT NULL,
  `image_size_str` varchar(255) NOT NULL,
  `google_photo_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_doc_foto`
--

INSERT INTO `tb_doc_foto` (`id`, `date`, `judul`, `post_slug`, `caption`, `image_name`, `image_type`, `image_size_str`, `google_photo_link`) VALUES
(1, '2020-01-22 01:49:11', 'Pergi ke Malioboro tanggal 1 Januari 2020', 'peringatan-pemkot-kota-pekalongan', 'Peringati BBGRM dan HKG PKK, Pemkot Bangkitkan Semangat Gotong Royong..', 'malioboro.jpg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.app.goo.gl/qWiZ9uQF2s4L544FA'),
(2, '2020-01-29 01:48:55', 'Berlibur ke Jogja pada tahun 20201', '0', 'Lomba HKG Tingkat Provinsi, PKK Kota Pekalongan Capai Banyak Prestasi\r\n', 'jogja.jpg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.app.goo.gl/HNHr5NaTX88jTksCA'),
(3, '2020-01-22 01:49:35', 'Pergi ke hutan Mangunan Jogjakarta', '0', 'Serangkaian Rakernas Apeksi, ICE 2019 Dibuka', 'mangunan.jpg', 'jpeg', 'width=\"500\" height=\"667\"', 'https://photos.app.goo.gl/HNHr5NaTX88jTksCA'),
(4, '2020-01-22 01:51:04', 'Berlibur Ke pantai Kidul Jogja', '0', 'Pekalongan- Pemerintah Kota Pekalongan kembali meraih penghargaan Sistem Akuntabilitas Kinerja Instansi Pemerintah (SAKIP), dan pada tahun 2018 ini mengalami peningkatan predikat menjadi BB. Penghargaan tersebut diserahkan langsung oleh Menteri PAN-RB Sya', 'pantaikidul.png', 'jpeg', '-', 'https://photos.app.goo.gl/QRjDcxGtGhjozfgi8'),
(5, '2020-01-22 01:50:21', 'Berlibur ke Hutan pinus yang sejuk', '0', 'Kota Pekalongan - Walikota Pekalongan H.M Saelany Machfudz, SE membuka pesta siaga tahun 2019 , Ahad (24/2) di SMP 4 Pekalongan.', 'pinus.jpg', 'jpg', '-', 'https://photos.app.goo.gl/xQ2jd9cbYVhgPNZcA'),
(6, '2020-01-22 01:50:13', 'Ke Candi Prambanan bersama keluarga', '0', 'Kota Pekalongan- Persatuan Sepakbola Seluruh Indonesia (PSSI) Kota Pekalongan menggelar kongres tahunan, Minggu (24/2) di hotel Pesona.', 'prambanan.jpg', 'jpg', '-', 'https://photos.app.goo.gl/sCTaVZVf6FmnheSQ8'),
(15, '2020-01-30 06:54:01', 'gg', '', 'gghhhhhhh', 'boy.png', 'png', 'width=\"512\" height=\"512\"', 'gg'),
(22, '2020-01-30 06:53:45', 'uuuuuuuuuu', '', 'uuuuuuuuuu', 'boy4.png', 'png', 'width=\"512\" height=\"512\"', 'uuu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` varchar(20) NOT NULL,
  `bagian` varchar(20) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `privilege`, `bagian`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'superadmin', 'superadmin'),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bagan`
--
ALTER TABLE `tb_bagan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_doc_foto`
--
ALTER TABLE `tb_doc_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bagan`
--
ALTER TABLE `tb_bagan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_doc_foto`
--
ALTER TABLE `tb_doc_foto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
