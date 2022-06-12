-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 06:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruitshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `desc_top` varchar(500) NOT NULL,
  `desc_btm` varchar(500) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `price`, `desc_top`, `desc_btm`, `image`) VALUES
(1, 'Mangga', 25000, 'Mangga atau mempelam adalah nama sejenis buah, demikian pula nama pohonnya. Mangga termasuk ke dalam marga Mangifera, yang terdiri dari 35-40 anggota dari suku Anacardiaceae.', 'Toko kami menyediakan macam jenis mangga, seperti mangga Madu, mangga Dodol, mangga Kuini dan mangga Gole.', 'mangga.jpg'),
(2, 'Jeruk', 45000, 'Jeruk atau limau adalah semua tumbuhan berbunga anggota marga Citrus dari suku Rutaceae (suku jeruk-jerukan). Anggotanya rasa buahnya masam dan segar.', 'Toko kami menyediakan macam jenis jeruk, seperti jeruk Mandarin, jeruk Bali, jeruk Sunkist dan jeruk Medan.', 'jeruk.jpg'),
(3, 'Rambutan', 10000, 'Rambutan adalah tanaman tropis yang tergolong ke dalam suku lerak-lerakan atau Sapindaceae, berasal dari daerah kepulauan di Asia Tenggara. Rambutan banyak terdapat di daerah tropis', 'Toko kami menyediakan macam jenis rambutan, seperti rambutan Binjai, rambutan Rafia, rambutan Aceh dan rambutan Lebak Bulus.', 'rambutan.jpg'),
(4, 'Manggis', 45000, 'Manggis adalah sejenis pohon hijau abadi dari daerah tropika yang diyakini berasal dari Semenanjung Malaya dan menyebar ke Kepulauan Nusantara.', 'Toko kami menyediakan jenis jeruk, seperti jeruk Mandarin, jeruk Bali, jeruk Sunkist dan jeruk Medan.', 'manggis.jpg'),
(5, 'Salak', 30000, 'Salak adalah sejenis palma dengan buah yang biasa dimakan. Ia dikenal juga sebagai sala. Dalam bahasa Inggris disebut salak atau snake fruit.', 'Toko kami menyediakan macam jenis manggis, seperti manggis Bali, manggis Kaligesing, manggis Ratu Tembilahan, manggis Wanayasa.', 'Salak.jpg'),
(6, 'Durian', 50000, 'Durian adalah nama tumbuhan tropis yang berasal dari wilayah Asia Tenggara, sekaligus nama buahnya yang bisa dimakan. Nama ini diambil dari ciri khas kulit buahnya yang menyerupai duri.', 'Toko kami menyediakan macam jenis durian, seperti durian Montong, durian Musang King, durian Mentega dan durian Bawor.', 'durian.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'lidia', 'lidiasendinelwan@gmail.com', '$2y$10$m2HSq3j6MOMbIYJB8hf4HO3/sAAVUZepQZPNxTRK7EkQz.filUO.K'),
(3, 'sendi', 'kimtatakukiswan@gmail.com', '$2y$10$KI/HTEH6hJeUqQ51ALSWo.mWz8VqnQPOdKxsq4TBUpL/IhhsJFAk2'),
(4, 'michelle', 'kimtatakukiswan@gmail.com', '$2y$10$4AIwTqS4VMkA9AdzF/U9vueHhDM1YQb.XxOR9CAdDzcUJykqOGDu.'),
(5, 'naya', 'demimasdep@gmail.com', '$2y$10$H4aaqDGQ3S8j8B45mD3ktO.JfJkoaRz5WNstZhW24XHaTIgPNoOcS'),
(14, 'rain', 'rain@gmail.com', '$2y$10$intcgCVxykcqiJ9Iihvg1uVA.SMH/wGJOw2WprIGpcNQsNfRR2RUK'),
(15, 'yaya', 'yaya@gmail.com', '$2y$10$Y7hfJEjgtHz2Ly.d.sIqHOxCwSgaphIcJAQ1DN0GlHViiDe6XjVNK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
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
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
