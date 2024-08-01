-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2024 pada 10.47
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
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_seluler` varchar(15) DEFAULT NULL,
  `status_nikah` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jenis_kelamin`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `nomor_seluler`, `status_nikah`) VALUES
(1, 'abcd', 'Laki-Laki', 'Jl Raya bogor', 'Jakarta Selatan', '2000-12-01', '1234567890', 'Belum Menikah'),
(3, 'efgh', 'Laki-Laki', 'Jl Raya efgh', 'Jakarta', '2024-07-01', NULL, 'Belum Menikah'),
(4, 'ijkl', 'Laki-Laki', 'Jl Raya ijkl', 'Jakarta', '2024-07-02', NULL, 'Belum Menikah'),
(10, 'asdf', 'Laki-Laki', 'jl asdf', 'bekasi', '2024-01-09', '4567', 'Belum Menikah'),
(11, 'Putri Ayu Lestari', 'Perempuan', 'Jl. Melati No. 12, Bandung', 'Bandung', '1995-03-25', '081234567890', 'Sudah Menikah'),
(12, 'Budiman Santoso', 'Laki-laki', 'Perumahan Harmoni Blok B No. 5, Tangerang', 'Jakarta', '1998-11-18', '085790123456', 'Belum Menikah'),
(20, 'Hendra Wijaya', 'Laki-laki', 'Perumahan Taman Asri, Batam', 'Batam', '1998-04-23', '085512345678', 'Belum Menikah'),
(21, 'Rani Wijaya', 'Perempuan', 'Komplek Griya Asri, Semarang', 'Semarang', '1992-07-04', '082156789012', 'Cerai'),
(22, 'Dwi Putra Pratama', 'Laki-laki', 'Desa Makmur, Yogyakarta', 'Yogyakarta', '2000-05-15', '083812345678', 'Belum Menikah'),
(23, 'Siti Nurhaliza', 'Perempuan', 'Jl. Sultan Agung, Surabaya', 'Surabaya', '1997-12-28', '087890123456', 'Sudah Menikah'),
(24, 'Ahmad Fauzi', 'Laki-laki', 'Perumahan Taman Harapan, Bekasi', 'Bekasi', '1999-09-07', '081356789012', 'Belum Menikah'),
(25, 'Wulan Sari', 'Perempuan', 'Komplek Permata Hijau, Medan', 'Medan', '1994-02-14', '085912345678', 'Janda'),
(26, 'Iqbal Ramadhan', 'Laki-laki', 'Desa Makmur, Bogor', 'Bogor', '2001-08-29', '083156789012', 'Belum Menikah'),
(27, 'Intan Permata', 'Perempuan', 'Jl. Diponegoro, Palembang', 'Palembang', '1996-06-11', '087790123456', 'Sudah Menikah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
