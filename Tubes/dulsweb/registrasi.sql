-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 02:09 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `kutipan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `judul`, `gambar`, `kutipan`) VALUES
(12, 'Sword Art Onlline', '64831c28661f6.jpg', ' seri anime yang berlatar di dunia virtual reality yang canggih. Ceritanya mengikuti petualangan utama Kirito, seorang pemain game yang terjebak di dalam game SAO tanpa kemampuan untuk keluar.  Dalam SAO, para pemain menggunakan perangkat bernama NerveGear untuk terhubung langsung dengan dunia virtual. Namun, mereka terkejut saat mengetahui bahwa mereka tidak dapat keluar dari permainan kecuali jika mereka berhasil menyelesaikan semua tingkatnya.'),
(13, 'Otonari No Thensi Sama', '648324035d353.webp', 'Otonari no Tenshi-sama ni Itsunomanika Dame Ningen ni Sareteita&quot; atau dalam bahasa Inggris dikenal sebagai &quot;The Angel Next Door Spoiled Me Rotten&quot; adalah sebuah seri anime yang didasarkan pada novel ringan karya Koji Matsumoto. Anime ini merupakan adaptasi dari novel yang berjudul sama.'),
(14, 'Tensei Shitara Slime Datta Ken', '64842db7400d7.webp', 'Cerita anime ini mengisahkan tentang seorang pria biasa yang terbunuh dalam kehidupan sebelumnya dan bereinkarnasi sebagai lendir (slime) di dunia fantasi. Ia diberi nama Rimuru Tempest dan dengan kekuatan baru yang dimilikinya, ia mulai menjelajahi dunia yang penuh dengan makhluk supernatural.'),
(16, 'Eromanga Sensei.', '64843c1f32a95.jpg', 'anime yang mengisahkan tentang seorang penulis novel ringan berbakat bernama Masamune Izumi yang secara rahasia bekerja sama dengan seorang ilustrator misterius bernama Eromanga Sensei. Ternyata, Eromanga Sensei adalah seorang gadis yang tak lain adalah adik perempuan Masamune, yaitu Sagiri Izumi.'),
(19, 'Tokyo ghoul', '6484d26c7f371.webp', 'seri anime yang didasarkan pada seri manga dengan judul yang sama karya Sui Ishida. Ceritanya berlatar di Tokyo, di mana manusia hidup berdampingan dengan makhluk pemakan daging manusia yang disebut &quot;ghoul.&quot; Protagonis utama adalah Ken Kaneki, seorang mahasiswa yang secara tidak sengaja berubah menjadi setengah ghoul setelah bertemu dengan seorang ghoul yang misterius.  Anime ini menggambarkan perjuangan Kaneki untuk beradaptasi dengan kehidupan barunya sebagai setengah ghoul dan menavigasi konflik antara manusia dan ghoul. Tokyo Ghoul menghadirkan pertempuran seru, pertanyaan moral, dan eksplorasi tema tentang identitas, penerimaan diri, dan konflik dalam diri seseorang.'),
(21, 'Kimi no Nawa', '6484d36c6aced.webp', 'film anime Jepang yang disutradarai oleh Makoto Shinkai. Film ini mengikuti cerita dua remaja, Mitsuha dan Taki, yang secara ajaib bertukar tubuh mereka saat mereka tidur.  Kimi no Nawa menggambarkan perjalanan emosional dan romantis mereka saat mereka belajar lebih banyak tentang kehidupan satu sama lain melalui pertukaran tubuh ini. Mereka berusaha untuk bertemu secara langsung dan mengatasi hambatan-hambatan yang menghalangi mereka, termasuk perbedaan waktu dan ruang.'),
(22, 'Oshi no Ko', '6484d3f531693.webp', 'sebuah seri anime yang diadaptasi dari manga dengan judul yang sama karya mangaka Aka Akasaka. Ceritanya berfokus pada dunia hiburan idola populer di mana seorang penggemar bernama Nagisa bersumpah untuk membuat seorang idola muda bernama Ichika menjadi yang terbaik.  Namun, Nagisa tiba-tiba terbangun dalam tubuh Ichika dan menemukan dirinya hidup dalam dunia yang diatur oleh aturan misterius yang dikenal sebagai &quot;Skala&quot;. Dia harus berjuang untuk memahami dan menghadapi berbagai konspirasi dan persaingan dalam dunia idola yang penuh dengan intrik.'),
(24, 'Kimetsu no Yaiba ', '6485b488a4274.webp', 'Cerita berlatar di era Taisho di Jepang, di mana Tanjiro bergabung dengan Korps Pembasmi Iblis untuk memburu dan menghancurkan iblis yang bertanggung jawab atas tragedi keluarganya. Dia bertemu dengan berbagai teman seperjalanan, termasuk sahabat baiknya, Zenitsu, dan pria berkepala babi yang kuat bernama Inosuke.  Anime ini menonjol dengan visual yang indah, pertarungan yang seru, dan karakter yang kuat. Di samping itu, Kimetsu no Yaiba juga mengeksplorasi tema persaudaraan, kesetiaan, dan keberanian dalam menghadapi kegelapan. Anime ini telah mendapatkan pujian luas dari penonton dan kritikus, terutama karena animasinya yang memukau dan narasi yang mengaduk-emosi.'),
(25, 'The Eminence in Shadow', '6485b52c55db9.webp', 'anime yang didasarkan pada seri light novel yang ditulis oleh Daisuke Aizawa dan diilustrasikan oleh Touzai. Cerita ini mengikuti seorang remaja bernama Cid Kagenou yang, dalam usahanya untuk hidup dalam bayangan dan menjadi &quot;kepala bayangan,&quot; membentuk kelompok rahasia untuk membasmi monster dan melindungi dunia.  Cid, yang percaya bahwa dia adalah seorang jenius yang berada di balik layar, merencanakan skenario dan mempekerjakan teman masa kecilnya, yang merupakan agen rahasia sejati, serta gadis-gadis cantik yang tertarik padanya. Bersama-sama, mereka mengejar petualangan penuh kekacauan dan kebingungan, mencoba menjaga identitas Cid tetap tersembunyi dan menjadi pahlawan di balik layar.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`) VALUES
(7, 'duls', '$2y$10$3CmNyUngarcnT3h5C.p9A.vUY/dzFjF9DkJmx.YVlITFkynMrHkmu'),
(8, 'coba', '$2y$10$V.81DJvXdvr.whRnmOAGDueaekCMzqYR7We07GQ1VHkGQPAHVIgwy'),
(12, 'user', '$2y$10$2Ukuzo7z6ROzdGZWKUfplOr.Dfn.ojpQVcXO8Iax6Y/NQUJ.hBPi.'),
(13, 'coba2', '$2y$10$UWe0mo/ijJRnRrKKUzNs.u9GNtXvXpgdxuzMS5S3GiXcgLtgLhZmi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
