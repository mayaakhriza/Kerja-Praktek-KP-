-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 02:50 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmel.com', 'e99a18c428cb38d5f260853678922e03'),
(2, 'maya cantik', 'imkunila@gmail.com', 'a3aca2964e72000eea4c56cb341002a4'),
(3, 'pdt', 'pdt@gmail.com', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`) VALUES
(1, 'tae', 'd8bd79cc131920d5de426f914d17405a');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `sinopsis` text,
  `file` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `waktu-post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `tahun`, `sinopsis`, `file`, `cover`, `genre`, `waktu-post`) VALUES
(1, 'Radikus Makankakus: Bukan Binatang Biasa', 'Raditya Dika', 2007, 'Bukan Binatang Biasa adalah buku ketiga Raditya Dika (setelah Kambingjantan dan Cinta Brontosaurus) berisi pengalaman-pengalaman pribadi Raditya Dika sendiri yang bego, tolol, dan cenderung ajaib. Simak kisah Raditya Dika jadi badut Monas sehari, ngajar bimbingan belajar, dikira hantu penunggu WC, sampai kena kutuk orang NTB. Penulis Indonesia, tidak pernah segoblok ini.', 'Raditya Dika - Radikus makan kakus.pdf', 'Raditya Dika - Radikus makan kakus.jpg', 'komedi', '2018-07-06 16:42:42'),
(18, 'Ayahku (Bukan) Pembohong', 'Tere Liye', 2012, 'Sebuah novel karya Darwis Tere-Liye yang mengisahkan tentang seorang ayah yang menjujung tinggi kesederhanaan. Seorang ayah yang membesarkan anaknya dengan nilai luhur kesederhanaan dan cerita-cerita sarat makna. Sebuah novel bertema keluarga yang layak untuk dibaca oleh siapa pun yang merasa bahwa ayah adalah sosok yang luar biasa.', 'Tere Liye - Ayahku (Bukan) Pembohong.pdf', 'cover-ayahku-bukan-pembohong.jpg', 'fiksi', '2018-07-08 00:16:22'),
(21, 'Negeri Para Bedebah', 'Tere Liye', 2012, 'Di negeri para bedebah, kisah fiksi kalah seru dibandingkan kisah nyata. Di negeri para bedebah, musang berbulu domba berkeliaran di halaman rumah. Tetapi setidaknya, kawan, di negeri para bedebah, petarung sejati tidak akan pernah berkhianat.', 'Tere Liye - Negeri Para Bedebah.pdf', 'Tere Liye - Negeri Para Bedebah.jpg', 'fiksi', '2018-07-08 01:08:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
