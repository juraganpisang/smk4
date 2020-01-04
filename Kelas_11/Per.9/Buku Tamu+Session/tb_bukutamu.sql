-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Sep 2015 pada 06.21
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buku_tamu_session`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bukutamu`
--

CREATE TABLE IF NOT EXISTS `tb_bukutamu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tb_bukutamu`
--

INSERT INTO `tb_bukutamu` (`id`, `nama`, `email`, `komentar`) VALUES
(4, 'Ronald', 'wahyu@gmail.com', 'vv'),
(5, 'Fada', 'rs@gfami', 'JYUIA'),
(6, 'RONALD ARRIVAL F', 'ronald@gmail.com', 'KULO'),
(7, 'RONALD ARRIVAL F', 'ronald@gmail.com', 'assdasd'),
(8, 'Ronald', 'sad@gmail.c', 'ronas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
