-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 02:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idpgw` varchar(16) NOT NULL,
  `namapgw` varchar(16) NOT NULL,
  `shift` varchar(16) NOT NULL,
  `absensi_rn` varchar(36) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idpgw`, `namapgw`, `shift`, `absensi_rn`) VALUES
('1', 'morgan', 'PAGI', 'BEKERJA');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `idqna` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `msg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`idqna`, `fname`, `email`, `msg`) VALUES
(1, 'mrrgggdd', 'tellmesomething.morgan@gmail.com', '434543rfef'),
(2, 'mrrgggdd', 'tellmesomething.morgan@gmail.com', '434543rfef'),
(3, 'mrrgggdd', 'tellmesomething.morgan@gmail.com', '434543rfef'),
(4, 'mrrgggdd', 'tellmesomething.morgan@gmail.com', '434543rfef'),
(5, 'mrrgggdd', 'tellmesomething.morgan@gmail.com', '434543rfef');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `idrsv` int(11) NOT NULL,
  `unit` varchar(36) DEFAULT NULL,
  `cidate` date DEFAULT NULL,
  `codate` date DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`idrsv`, `unit`, `cidate`, `codate`, `rooms`, `adults`, `children`) VALUES
(4, 'unit2', '2023-11-01', '2023-11-02', 1, 1, 0),
(5, 'REGULAR', '2023-11-01', '2023-11-04', 1, 1, 0),
(6, 'REGULAR', '2023-11-01', '2023-11-02', 1, 1, 0),
(7, 'REGULAR', '2023-11-02', '2023-11-03', 1, 1, 0),
(8, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(9, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(10, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(11, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(12, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(13, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(14, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(15, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(16, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(17, 'REGULAR', '2023-11-01', '2023-11-16', 1, 1, 0),
(18, 'REGULAR', '2023-11-01', '2023-11-03', 1, 1, 0),
(19, 'REGULAR', '2023-11-09', '2023-11-11', 1, 1, 0),
(20, 'REGULAR', '2023-11-09', '2023-11-11', 1, 1, 0),
(21, 'REGULAR', '2023-11-09', '2023-11-11', 1, 1, 0),
(22, 'REGULAR', '2023-11-09', '2023-11-11', 1, 1, 0),
(23, 'REGULAR', '2023-11-14', '2023-11-21', 1, 1, 0),
(24, 'DELUXE', '2023-10-30', '2023-11-01', 1, 1, 0),
(25, 'DELUXE', '2023-10-30', '2023-11-29', 1, 1, 0),
(26, 'REGULAR', '2023-11-19', '2023-11-25', 1, 1, 0),
(27, 'REGULAR', '2023-11-01', '2023-11-05', 1, 1, 0),
(28, 'REGULAR', '2023-11-05', '2023-11-06', 3, 1, 0),
(29, 'DELUXE', '2023-11-05', '2023-11-06', 3, 1, 0),
(30, 'REGULAR', '2023-11-01', '2023-11-02', 1, 1, 0),
(31, 'REGULAR', '2023-11-01', '2023-11-03', 1, 1, 0),
(32, 'REGULAR', '2023-11-27', '2023-11-29', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `idkamar` varchar(16) NOT NULL,
  `tipekamar` varchar(36) NOT NULL,
  `harga` varchar(36) NOT NULL,
  `ketersediaan` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`idkamar`, `tipekamar`, `harga`, `ketersediaan`) VALUES
('1', 'DELUXE', 'Rp750.000', 'TERSEDIA'),
('2', 'DELUXE', '750000', 'TERSEDIA'),
('3', 'DELUXE', 'Rp750.000', 'TERSEDIA'),
('4', 'DELUXE', 'Rp750.000', 'TERSEDIA'),
('5', 'DELUXE', 'Rp750.000', 'TERSEDIA'),
('6', 'DELUXE', 'Rp750.000', 'TERSEDIA'),
('7', 'REGULAR', 'Rp250.000', 'TERSEDIA'),
('8', 'REGULAR', 'Rp250.000', 'TERSEDIA'),
('9', 'REGULAR', 'Rp250.000', 'TERSEDIA'),
('10', 'REGULAR', 'Rp250.000', 'TERSEDIA'),
('11', 'REGULAR', 'Rp250.000', 'TERSEDIA'),
('21', 'REGULAR', 'Rp250.000', 'TERSEDIA');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `idorder` int(16) NOT NULL,
  `ordertime` datetime DEFAULT NULL,
  `idpgw` varchar(36) NOT NULL,
  `namatamu` varchar(36) DEFAULT NULL,
  `idkamar` varchar(16) DEFAULT NULL,
  `harga` int(36) DEFAULT NULL,
  `nights` int(16) DEFAULT NULL,
  `checkin` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `totalharga` int(36) NOT NULL,
  `status` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`idorder`, `ordertime`, `idpgw`, `namatamu`, `idkamar`, `harga`, `nights`, `checkin`, `checkout`, `totalharga`, `status`) VALUES
(1, '2023-11-01 00:00:00', '', 'morgan', '1', 250000, 3, '2023-11-02 00:00:00', '2023-11-04 00:00:00', 750000, 'CHECK-OUT'),
(2, '2023-11-02 00:00:00', '', 'kiwehi', '3', 300000, 2, '2023-11-08 00:00:00', '2023-11-15 00:00:00', 600000, 'CHECK-OUT'),
(3, '2023-11-22 00:00:00', '', 'MOT6YSARY6FD', '3', 45, 2, '2023-11-28 00:00:00', '2023-11-15 00:00:00', 90, 'CHECK-OUT'),
(4, '2023-11-08 08:50:00', '', 'n', '3', 434, 0, '2023-11-17 08:50:00', '2023-11-30 08:50:00', 0, 'CHECK-OUT'),
(5, '2023-11-01 08:52:00', '', 'morrrg', '77', 877, 0, '2023-11-13 00:00:00', '2023-11-15 00:00:00', 0, 'CHECK-OUT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'MORGAN', 'morgan', 'lalala123', 'admin'),
(2, 'helo', 'hillo', 'lalala0123', 'user'),
(3, 'Morgan', '2345t', 'sdty12', 'user'),
(4, 'Morgan', '2345t', 'sdty12', 'user'),
(5, 'Morgan', '2345t', 'sdty12', 'user'),
(6, 'Morgan', '2345t', 'sdty12', 'user'),
(7, 'Morgan', '2345t', 'sdty12', 'user'),
(8, 'Muhammad Ikhsan Morgan Nurfiantoro', 'nrfntr', 'hellyeah', 'user'),
(9, 'RAY JEISAN AJISAKA', 'rays', 'raysw', 'user'),
(10, 'Muhammad Ikhsan Morgan Nurfiantoro', 'nrfntr', 'sdrtwyn123', 'user'),
(11, 'Muhammad Ikhsan Morgan Nurfiantoro', 'morganyes', 'morganyes', 'user'),
(12, '2', '35r', '3ete', 'user'),
(13, 'Muhammad Ikhsan Morgan Nurfiantoro', 'tellmesomething.morgan@gmail.com', 'hagygaygaygay', 'user'),
(14, 'Muhammad Ikhsan Morgan Nurfiantoro', '12ews', 'fff', 'user'),
(15, 'RAY JEISAN AJISAKA', 'hayray', 'ray11', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idpgw`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`idqna`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`idrsv`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`idkamar`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`idorder`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `idqna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `idrsv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `idorder` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
