-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2023 pada 12.58
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `username`, `password`) VALUES
('amat', 'amat', '$2y$10$wxzVQLgaR.nwEXTBBxIv.eEuGVDr9Q5ssmp4y2iD6muf1wM4bXgcG'),
('hesty', 'itii', '$2y$10$T5lYu6LhOmMyg8VsTfGRremFt2gT35PJOWuNxT93YMLy9VSzM9llu'),
('putri', 'mba', '$2y$10$asy/2MCgRSC/.Zx0K6UNAuCvV47tP36/GepUvUFdFDWxAlG0Qy9Fm'),
('rara', 'yaya', '$2y$10$j1avyLaGSYumTCkzm6r.h.D2aWZLB4ikzwAB5CFrhJw3LwxCRM9q.'),
('thea', 'yaya', '$2y$10$kI2i6xUDhwEq4AvyTfc9S.GhcEoqah4azXIxt7CornNKwOcgy0uC2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
