-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2022 at 04:10 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `topik`, `tanggal`, `penulis`, `isi`, `gambar`) VALUES
(2, 'Sejarah Buku', 'Kamis, 04 Agustus 2022, 23:07:08 WIB', 'Marthin Alfreinsco Salakory', 'Cara membaca intensif â€“ Minat baca di Indonesia masih terbilang rendah. Tidak heran jika pemerintah sangat mendukung kesadaran membaca sejak dini. Padahal, salah satu kunci keberhasilan sebuah Negara yang maju ditentukan oleh kesadaran membaca. \r\n\r\nPentingnya membaca bagi setiap orang maka akan memberikan ilmu pengetahuan. Ilmu pengetahuan inilah yang dapat dijadikan sebagai bekal, pada cara berfikir yang matang dan dewasa. Sayangnya budaya membaca masih sebatas isapan jempol saja. \r\n\r\nBerbicara tentang membaca, lantas apa sih yang dimaksud dengan membaca intensif? Nah pada kesempatan kali ini kita akan fokus mengulas pengertian, tujuan, jenis dan cara membaca secara intensif. Langsung saja kita simak ulasannya sebagai berikut.\r\nPengertian Membaca Intensif\r\nPengertian secara umum membaca intensif adalah sebagai kegiatan membaca secara cermat, teliti dan saksama. Model membaca model intensif ini digunakan dengan tujuan mencari informasi yang ada di dalam sebuah bacaan.\r\n\r\nMembaca ini dapat pula diartikan sebagai proses membaca yang dilakukan secara mendalami persoalan dan upaya pembaca untuk memahami ide naskah dari ide pokok hingga ide penjelas. \r\n\r\n1. Lalremruati \r\nMenurut Lalremruati, membaca intensif adalah jenis bacaan yang menuntut seseorang untuk membaca informasi secara spesifik. Dimana bacaan tersebut dapat dibandingkan dengan bacaan yang luas. Ketika membaca teknik intensif tidak hanya mendapatkan informasi tetapi juga juga akan mendapatkan kesenangan dan hiburan dari pesan yang dibaca. \r\n\r\n2. Tarigan \r\nSementara menurut tarigan mendefinisikan membaca menggunakan teknik intensif termasuk kegiatan membaca yang tingkatannya lebih tinggi, karena dia tidak sekedar membaca. Melainkan memahami dan membutuhkan retensi waktu yang lebih lama.\r\n\r\nTarigan pun membagi membaca intensif ke dalam dua bentuk, yaitu membaca telaah isi dan membaca telaah bahasa. Dikatakan membaca telaah isi karena menekankan pada isi bacaan secara mendalam. Sementara membaca telaah bahasa adalah upaya menuntut pemahaman terhadap bahasa yang digunakan. \r\n\r\n3. Brown \r\nBerbeda pandangan dengan brown yang mendefinisikan membaca intensif adalah membaca yang membutuhkan konsentrasi tinggi. Dimana membaca secara intensif dapat digunakan untuk membaca sastra (telaah bahasa) ataupun membaca telaah isi yang dilakukan secara kritis, membaca kreatif dan dan membaca teliti.', '62ebeeac5c303.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `terakhir_login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `nim`, `username`, `password`, `terakhir_login`) VALUES
(3, 'Marthin Alfreinsco Salakory', '201971060', '201971060', '201971060', 'Kamis, 04 Agustus 2022, 22:13:33 WIB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
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
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
