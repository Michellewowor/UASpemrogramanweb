-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 01:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(300) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(20, 'Mangga', 25000, 'mangga.jpg', 3),
(21, 'Jeruk', 45000, 'jeruk.jpg', 1),
(22, 'Rambutan', 10000, 'rambutan.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `price`, `image`) VALUES
(1, 'Mangga', 25000, 'mangga.jpg'),
(2, 'Jeruk', 45000, 'jeruk.jpg'),
(3, 'Rambutan', 10000, 'rambutan.jpg'),
(4, 'Manggis', 45000, 'manggis.jpg'),
(11, 'Salak', 30000, 'Salak.jpg'),
(12, 'Langsat', 25000, 'lengkeng.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `street`, `city`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(6, 'Kanaya Tumade', '111', 'nayatumade@gmail.com', 'credit card', 'JL. Kampus Unsrat Bahu, Kleak, Malalayang, Kota Manado, Sulawesi Utara', 'Manado', 'Indonesia', 95115, 0, 130000);

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `name`, `email`, `address`, `contact`, `deskripsi`, `price`, `img`) VALUES
(1, 'Michelle Wahyuni Gretha Wowor', 'michellewowor026@student.unsrat.ac.id', 'Batukota', '081340426209', 'Mangga (1kg)', '25000', '1 profil.jpg'),
(2, 'Clau', 'clau@gmail.com', 'Amurang', '081363227721', 'Jeruk (2kg)', '60000', '1 profil.jpg'),
(3, 'Michelle ', 'yuyunwowor02@gmail.com', 'Ongkaw', '081340426209', 'Rambutan (3kg)', '15000', '1 profil.jpg'),
(4, 'Michelle ', 'yuyunwowor02@gmail.com', 'Ongkaw', '081340426209', 'Rambutan (3kg)', '15000', '1 profil.jpg'),
(5, 'Michelle Wahyuni Gretha Wowor', 'michellewowor026@student.unsrat.ac.id', 'Batukota', '081340426209', 'Manggis (1kg)', '45000', '1 profil.jpg'),
(6, 'Michelle Wahyuni Gretha Wowor', 'michellewowor026@student.unsrat.ac.id', 'Batukota', '081340426209', 'Manggis (1kg)', '45000', '1 profil.jpg'),
(7, 'Michelle Wahyuni Gretha Wowor', 'michellewowor026@student.unsrat.ac.id', 'Batukota', '081340426209', 'Mangga', '10000', '1 profil.jpg'),
(8, 'lidia', 'lidiasendinelwan@gmail.com', 'jl. mangga no 2', '0867326328', 'Mangga', '500000', 'mangga.jpg'),
(10, 'lidia', 'lidiasendinelwan@gmail.com', 'jl. mangga no 2', '0867326328', 'rambutan', '500000', 'rambutan.jpg'),
(11, 'lidia', 'lidiasendinelwan@gmail.com', 'jl. mangga no 2', '0867326328', 'mangga', '500000', 'mangga.jpg'),
(12, 'lidia', 'lidiasendinelwan@gmail.com', 'jl. mangga no 2', '0867326328', 'Mangga', '500000', 'mangga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(2, 'lidia', 'lidiasendinelwan@gmail.com', '$2y$10$m2HSq3j6MOMbIYJB8hf4HO3/sAAVUZepQZPNxTRK7EkQz.filUO.K', 'user'),
(3, 'sendi', 'kimtatakukiswan@gmail.com', '$2y$10$KI/HTEH6hJeUqQ51ALSWo.mWz8VqnQPOdKxsq4TBUpL/IhhsJFAk2', 'user'),
(4, 'michelle', 'kimtatakukiswan@gmail.com', '$2y$10$4AIwTqS4VMkA9AdzF/U9vueHhDM1YQb.XxOR9CAdDzcUJykqOGDu.', 'user'),
(5, 'naya', 'demimasdep@gmail.com', '$2y$10$H4aaqDGQ3S8j8B45mD3ktO.JfJkoaRz5WNstZhW24XHaTIgPNoOcS', 'user'),
(6, 'admin', 'admin12@gmail.com', '$2y$10$.StuVJ0kjL0xLmk2TwHfGewPZTdKwXo3XzC2hgca1GPTabxJE9yxi', 'admin'),
(7, 'chelle', 'michelle@gmail.com', '$2y$10$uMYKMWDxaZG0K.AstUr1NeipXR/hgrmcNok98G8an4UiADrKuRtty', 'user'),
(8, 'naya1', 'naya1@gmail.com', '$2y$10$JrUR04B0/Z4PGuUm8JTsueKW9GiFxFe5ZYoyyi92.FA3A8t10HcbC', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
