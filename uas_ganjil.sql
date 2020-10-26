-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2020 pada 15.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_ganjil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ganjil`
--

CREATE TABLE `tabel_ganjil` (
  `Id_009` int(11) NOT NULL,
  `NIM_009` varchar(10) NOT NULL,
  `Nama_009` varchar(50) NOT NULL,
  `Alamat_009` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_ganjil`
--

INSERT INTO `tabel_ganjil` (`Id_009`, `NIM_009`, `Nama_009`, `Alamat_009`) VALUES
(123, '1810330009', 'Lalu Ramdhani Yusri', 'BTN Mavilla Rengganis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Status` enum('Admin','User','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `Status`) VALUES
(23, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin'),
(24, 'dhani', '94d778f0a26d5888fe1100d385ea8ad38f8fe660', 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_ganjil`
--
ALTER TABLE `tabel_ganjil`
  ADD PRIMARY KEY (`Id_009`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_ganjil`
--
ALTER TABLE `tabel_ganjil`
  MODIFY `Id_009` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234322;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
