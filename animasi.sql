-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 06:12 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dftr_animasi`
--

CREATE TABLE `dftr_animasi` (
  `id` int(11) NOT NULL,
  `nama_animasi` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `url_animasi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dftr_animasi`
--

INSERT INTO `dftr_animasi` (`id`, `nama_animasi`, `tanggal`, `jam`, `url_animasi`) VALUES
(1, 'Apple', '2020-04-07', '00:00:00', 'apel.gif'),
(2, 'Basketball', '2020-04-07', '11:23:00', 'basket.gif'),
(3, 'Memancing', '2020-04-08', '09:07:00', 'mancing.gif'),
(4, 'Balmond', '2020-04-09', '10:53:12', 'balmond.gif'),
(5, 'Galau', '2020-04-09', '11:10:36', 'hujan_sedih_taman.gif'),
(6, 'Jalan Ke Depan', '2020-04-09', '11:11:24', 'jalan_depan.gif'),
(7, 'Jalan Ke Samping', '2020-04-09', '11:16:31', 'jalan_samping.gif'),
(8, 'Birthday', '2020-04-09', '11:17:54', 'birthday.gif'),
(9, 'Sepeda', '2020-04-09', '11:18:17', 'sepeda.gif'),
(10, 'Slime', '2020-04-09', '11:18:42', 'slime.gif'),
(11, 'Angin Topan', '2020-04-09', '11:19:37', 'topan.gif'),
(12, 'Wrrry', '2020-04-09', '11:19:55', 'wrrry.gif'),
(13, 'Pedang-pedang ML', '2020-04-09', '11:20:26', 'gabungan pedangan ML.png'),
(14, 'Zoro', '2020-04-09', '11:20:43', 'zoro.png'),
(15, 'Opening', '2020-04-09', '11:20:57', 'opening.gif'),
(16, 'Turret', '2020-04-09', '11:21:11', 'turret.gif');

-- --------------------------------------------------------

--
-- Table structure for table `dftr_sound`
--

CREATE TABLE `dftr_sound` (
  `id` int(11) NOT NULL,
  `nama_sound` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `url_sound` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dftr_sound`
--

INSERT INTO `dftr_sound` (`id`, `nama_sound`, `tanggal`, `jam`, `url_sound`) VALUES
(1, 'Air', '2020-04-08', '09:15:00', 'air.wav'),
(2, 'Bunuh-Dia', '2020-04-08', '09:15:00', 'bunuh dia.wav'),
(3, 'Chou', '2020-04-10', '08:44:07', 'chou.wav'),
(4, 'Chou [2]', '2020-04-10', '08:44:35', 'chou2.wav'),
(5, 'Chou [3]', '2020-04-10', '08:44:53', 'chou3.wav'),
(6, 'Suara Pintu', '2020-04-10', '08:45:11', 'door.wav'),
(7, 'Cricket', '2020-04-10', '08:45:45', 'jangkrik.wav'),
(8, 'Exploison', '2020-04-10', '08:46:05', 'ledakan.wav'),
(9, 'Goco', '2020-04-10', '08:46:38', 'goco3.wav'),
(10, 'Goco [1]', '2020-04-10', '08:47:13', 'goco1.wav'),
(11, 'Kipas Angin', '2020-04-10', '22:31:31', 'kipasangin.wav');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `username`, `password`) VALUES
(2, 'muadzbayu', '99ae049fcc359f6cd19477b639fbd31b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dftr_animasi`
--
ALTER TABLE `dftr_animasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dftr_sound`
--
ALTER TABLE `dftr_sound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dftr_animasi`
--
ALTER TABLE `dftr_animasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dftr_sound`
--
ALTER TABLE `dftr_sound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
