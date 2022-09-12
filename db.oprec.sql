-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 16.19
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db.oprec`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `nim` varchar(18) NOT NULL,
  `nama` text NOT NULL,
  `angkatan` int(11) NOT NULL,
  `tempat_lahir` text,
  `tanggal_lahir` date DEFAULT NULL,
  `email` text,
  `id_program_studi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`nim`, `nama`, `angkatan`, `tempat_lahir`, `tanggal_lahir`, `email`, `id_program_studi`) VALUES
('0900', 'tiw', 2019, 'lampung', '2020-10-27', 'tiw@gmail.com', 102),
('09021181823010', 'Cindy Stefany', 2018, 'Bangka belitung', '2000-11-10', 'cindy@gmail.com', 101),
('09021181823019', 'Eka Triani', 2018, 'Tanjung Enim', '2000-10-31', 'eka31@gmail.com', 102),
('09021181823025', 'Nur Annisa Permata', 2018, 'Prabumulih', '2000-07-17', 'nap@gmail.com', 102);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(10) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `gender` varchar(15) NOT NULL,
  `id_program_studi` int(4) NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama`, `gender`, `id_program_studi`, `alamat`, `email`) VALUES
(5, '123456702', 'Rizki', 'Laki - Laki', 102, 'jl. a roni', 'rizki@gmail.com'),
(20, '09021181823025', 'Nur Annisa Permata', 'Perempuan', 103, 'jl. a roni', 'nurannisa07@gmail.com'),
(21, '09021181823024', 'Echa', 'Perempuan', 101, 'jl. semangka no.056 ', 'echanap17@gmail.com'),
(22, '09021181823026', 'tiw', 'Perempuan', 102, 'jl. semanggi no.08 ', 'widya@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id_program_studi` int(4) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`id_program_studi`, `nama`) VALUES
(101, 'Teknik Informatika'),
(102, 'Sistem Komputer'),
(103, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(100) DEFAULT NULL,
  `angkatan` int(4) DEFAULT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `timestamp`, `nama`, `angkatan`, `konten`) VALUES
(1, '2020-10-09 07:41:37', 'Annisa', 2017, 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.\r\n\r\n\r\n'),
(2, '2020-10-09 07:44:46', 'Permata', 2016, 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.\r\n\r\n\r\n'),
(3, '2020-10-09 07:46:03', 'Malik', 2015, 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.\r\n\r\n\r\n'),
(4, '2020-10-09 07:46:22', 'Azka', 2019, 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.\r\n\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_program_studi`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_program_studi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
