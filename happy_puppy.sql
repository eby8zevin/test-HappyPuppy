-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2022 pada 10.33
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happy_puppy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_artis`
--

CREATE TABLE `tabel_artis` (
  `id_artis` varchar(4) NOT NULL,
  `nama_artis` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `award` int(11) NOT NULL,
  `negara` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_artis`
--

INSERT INTO `tabel_artis` (`id_artis`, `nama_artis`, `gender`, `award`, `negara`) VALUES
('A001', 'ROBERT DOWNEY JR', 'L', 4, 'USA'),
('A002', 'JACKY CHAN', 'L', 4, 'CHN'),
('A003', 'ANGELINA JOLIE', 'P', 6, 'USA'),
('A004', 'JOE TASLIM', 'L', 3, 'INA'),
('A005', 'STEPHEN CHOW', 'L', 5, 'CHN'),
('A006', 'IKO UWAIS', 'L', 4, 'INA'),
('A007', 'YAYAN RUHIYAN', 'L', 2, 'INA'),
('A008', 'CHELSEA ISLAN', 'P', 0, 'INA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_film`
--

CREATE TABLE `tabel_film` (
  `id_film` varchar(4) NOT NULL,
  `nama_film` varchar(20) NOT NULL,
  `genre` varchar(4) NOT NULL,
  `artis` varchar(4) NOT NULL,
  `pendapatan` bigint(20) NOT NULL,
  `nominasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_film`
--

INSERT INTO `tabel_film` (`id_film`, `nama_film`, `genre`, `artis`, `pendapatan`, `nominasi`) VALUES
('F001', 'Iron Man', 'G001', 'A001', 2000000000, 5),
('F002', 'Iron Man 2', 'G001', 'A001', 2500000000, 4),
('F003', 'The Raid', 'G002', 'A006', 900000000, 2),
('F004', 'Fast Furios', 'G004', 'A004', 1000000000, 6),
('F005', 'Police Story', 'G003', 'A002', 1000000000, 4),
('F006', 'Kungfu Panda', 'G003', 'A005', 900000000, 5),
('F007', 'Rush Hour', 'G004', 'A002', 800000000, 2),
('F008', 'Avenger', 'G001', 'A003', 2300000000, 6),
('F009', 'Habibie Ainun', 'G002', 'A008', 3000000000, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL DEFAULT '0',
  `user_password` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user_id`, `user_password`) VALUES
(1, 'AIN', 'AI1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
