-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 11:21 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `id` int(255) NOT NULL,
  `hobi` text NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`id`, `hobi`, `userid`) VALUES
(7, 'Sepeda', 8),
(8, 'Lari ', 8),
(11, 'Lari ', 9),
(12, 'Hiking', 9),
(23, 'Berenang', 10),
(24, 'Berenang', 11),
(25, 'Lari', 11),
(40, 'Sepeda', 12),
(41, 'Berenang', 12),
(42, 'Lari', 12),
(43, 'Hiking', 12),
(52, 'Sepeda', 13),
(53, 'Berenang', 13),
(54, 'Lari', 13),
(55, 'Sepeda', 14),
(56, 'Berenang', 14),
(57, 'Sepeda', 15),
(58, 'Berenang', 15);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(255) NOT NULL,
  `imagepath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `imagepath`) VALUES
(1, 'uploads/IMG_20170103_170958.jpg'),
(2, 'uploads/Donnar.jpg'),
(3, 'uploads/_DSC0989.JPG'),
(4, 'uploads/_DSC0989.JPG'),
(5, 'uploads/_DSC0871.JPG'),
(6, 'uploads/_DSC1045.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `jumbotron`
--

CREATE TABLE `jumbotron` (
  `id` int(255) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumbotron`
--

INSERT INTO `jumbotron` (`id`, `judul`, `isi`) VALUES
(1, 'Ini adalah judul jumbotron', 'Ini adalah isi konten dari jumbotron'),
(5, 'Judul ketiga', 'Isi jumbotron ketiga');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idkomentar` int(255) NOT NULL,
  `judul` text NOT NULL,
  `komentar` text NOT NULL,
  `idartikel` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idkomentar`, `judul`, `komentar`, `idartikel`) VALUES
(4, 'Judul komentar', 'Enaknya komentar apa ya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idmahasiswa` int(255) NOT NULL,
  `nama` text NOT NULL,
  `nim` text NOT NULL,
  `programstudi` text NOT NULL,
  `ipk` text NOT NULL,
  `foto` text NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`idmahasiswa`, `nama`, `nim`, `programstudi`, `ipk`, `foto`, `jenis_kelamin`) VALUES
(18, 'Maloney', '87877', 'd3if', '3.41', '', 'laki-laki'),
(19, 'Spiderman', '15890013', 'manajemen pemasaran', '3.79', '', 'laki-laki'),
(42, 'Led Zeppelin', '670116067', 'Metallica', '3.88', '', 'laki-laki'),
(72, 'Green Day', 'Coldplay', 'Nirvana', '1234', '', 'laki-laki'),
(136, 'after', 'fixing', 'url', 'troublesome', '', 'laki-laki'),
(138, 'asep', '7654321', 'TK', '3.42', '', 'laki-laki'),
(149, 'satu', '123213', 'dasdasd', '3.9', '', 'laki-laki'),
(157, 'Budi', '3,51', '', 'laki', '', 'laki-laki'),
(167, 'Adhi', '1234', 'terang', '6', '', 'perempuan'),
(168, 'Abu', '432', 'gelap', '4.55', '', ''),
(169, 'Aladin', '444', 'gelap', '5.0', '', 'perempuan'),
(170, 'fsfs', '234', 'gelap', '545', 'uploads/_DSC7572.jpg', ''),
(171, 'ewwe', 'erewr', 'terang', 'fsdfs', 'uploads/', ''),
(172, 'Patrick', 'Coldplay', 'gelap', '1234', 'uploads/_DSC4034.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `isi` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(255) NOT NULL,
  `buku` text NOT NULL,
  `tanggalkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `buku`, `tanggalkembali`) VALUES
(1, 'Lord of the ring', '2017-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `praktikum`
--

CREATE TABLE `praktikum` (
  `userid` int(255) NOT NULL,
  `nama` text NOT NULL,
  `nim` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `praktikum`
--

INSERT INTO `praktikum` (`userid`, `nama`, `nim`, `gambar`) VALUES
(2, 'Patrick', '15890013', 'gambar/_DSC0899.JPG'),
(3, 'Patrick', '15890013', 'gambar/_DSC0899.JPG'),
(4, 'Patrickadolf', '15890013', 'gambar/_DSC1029.JPG'),
(5, 'dasdas', 'dasdasd', 'gambar/_DSC1083.JPG'),
(6, 'satu', '1234', 'gambar/20150102_202624_LLS.jpg'),
(7, 'satu', '1234', 'gambar/20150102_202624_LLS.jpg'),
(8, 'satu', '1234', 'gambar/20150102_202624_LLS.jpg'),
(9, 'pti', '3189021', 'gambar/tapir-conservation-project.jpg'),
(10, 'sampurasun', '89418', 'gambar/Donnar.jpg'),
(11, 'Doseeennnn panic mode', '21830198', 'gambar/Pep.jpg'),
(12, 'Doseeennnn panic mode', '21830198', 'gambar/Pep.jpg'),
(13, 'PTI', '31801776ewqeqwe', 'gambar/IMG_20170103_181822.jpg'),
(14, 'PTI', 'rwer', 'gambar/Tiang Listrik.jpg'),
(15, 'PTI', 'rwer', 'gambar/Tiang Listrik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(255) NOT NULL,
  `username` text NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `akses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `nama`, `email`, `password`, `akses`) VALUES
(1, 'patrick', 'patrick', 'patrick@vsga.com', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `webdasar`
--

CREATE TABLE `webdasar` (
  `id` int(255) NOT NULL,
  `nama` text NOT NULL,
  `nim` text NOT NULL,
  `umur` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webdasar`
--

INSERT INTO `webdasar` (`id`, `nama`, `nim`, `umur`, `gambar`) VALUES
(20, 'Bryan ', 'Adams ', 'Duet', ''),
(21, 'Bryan ', 'Adams', 'Singer', ''),
(34, 'Patrick Telnoni', 'eqwe', 'eqweq', 'uploads/tapir-conservation-project.jpg'),
(41, 'Lannister', 'Stark', 'Targeryan', ''),
(42, 'PTI', '15890013', '3,51', ''),
(43, 'Patrick', '1234', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumbotron`
--
ALTER TABLE `jumbotron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idkomentar`),
  ADD KEY `idartikel` (`idartikel`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`idmahasiswa`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `webdasar`
--
ALTER TABLE `webdasar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jumbotron`
--
ALTER TABLE `jumbotron`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idkomentar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `idmahasiswa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `webdasar`
--
ALTER TABLE `webdasar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`idartikel`) REFERENCES `jumbotron` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
