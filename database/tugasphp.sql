-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2019 pada 08.53
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasphp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `nopol` varchar(10) NOT NULL,
  `namamobil` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`nopol`, `namamobil`, `foto`, `harga`, `status`) VALUES
('B123C', 'avanza', 'avanza.jpg', 400000, 'ada'),
('A456X', 'CRV', 'crv.jpg', 700000, 'ada'),
('B111Z', 'kijang', 'kijang.jpg', 500000, 'ada'),
('B123X', 'ertiga', 'ertiga.jpg', 400000, 'disewa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkontak`
--

CREATE TABLE `tbkontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trankembali`
--

CREATE TABLE `trankembali` (
  `idtransaksi` varchar(12) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `denda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trankembali`
--

INSERT INTO `trankembali` (`idtransaksi`, `nopol`, `denda`) VALUES
('201812190001', 'A456X ', 400000),
('201812190002', 'B123C', 0),
('201901030001', 'B123C', 2000),
('201901040001', 'B123C', 0),
('201901040002', 'B123C', 0),
('201901040003', 'B123C', 0),
('201901040004', 'B123C', 0),
('201901040005', 'B123C', 0),
('201901040006', 'A456X ', 0),
('201901040007', 'A456X ', 0),
('201901050001', 'B123X', 0),
('201901050002', 'B123X', 0),
('201901050003', 'B123X', 0),
('201901050004', 'B123X', 0),
('201901050005', 'B123X', 0),
('201901050006', 'B123X', 0),
('201901050007', 'B123X', 0),
('201901050008', 'B123X', 0),
('201901050009', 'B123X', 0),
('201901050010', 'B123X', 0),
('201901050011', 'B123X', 0),
('201901050012', 'B123X', 0),
('201901050013', 'B123X', 0),
('201901050014', 'B123X', 0),
('201901050015', 'B123X', 0),
('201901050016', 'B123X', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` varchar(12) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `lama` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `nopol`, `lama`, `total`) VALUES
('201812100002', 'B123C', 5, 2000000),
('201812100001', 'A456X ', 6, 1800000),
('201812100003', 'A456X ', 2, 600000),
('201110110001', 'B123C', 5, 2000000),
('201812120001', 'A456X ', 7, 2100000),
('201812120002', 'A456X ', 5, 1500000),
('201812120003', 'A456X ', 2, 600000),
('201812150001', 'A456X ', 4, 1200000),
('201812150002', 'A456X ', 8, 2400000),
('201901030001', 'B123C', 0, 0),
('201901030002', 'A456X ', 0, 0),
('201901030003', 'A456X ', 0, 0),
('201901030004', 'a1234d', 0, 0),
('201901030005', 'a1234d', 0, 0),
('201901040001', 'B123C', 0, 0),
('201901040002', 'B123C', 0, 0),
('201901050001', 'B123X', 2, 800000),
('201901050002', 'B123X', 2, 800000),
('201901050003', 'B123X', 2, 800000),
('201901050004', 'B123X', 2, 800000),
('201901050005', 'B123X', 2, 800000),
('201901050006', 'B123X', 2, 800000),
('201901050007', 'B123X', 2, 800000),
('201901050008', 'B123X', 2, 800000),
('201901050009', 'B123X', 2, 800000),
('201901050010', 'B123X', 2, 800000),
('201901050011', 'B123X', 2, 800000),
('201901050012', 'B123X', 2, 800000),
('201901050013', 'B123X', 1, 400000),
('201901050014', 'B123X', 2, 800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'agus cahyadi', 'admin', 'admin', 'admin'),
(2, 'pujiyati', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbkontak`
--
ALTER TABLE `tbkontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbkontak`
--
ALTER TABLE `tbkontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
