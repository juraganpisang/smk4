-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Sep 2015 pada 03.32
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bukutamu`
--

CREATE TABLE IF NOT EXISTS `tb_bukutamu` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `komentar` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `tb_bukutamu`
--

INSERT INTO `tb_bukutamu` (`id`, `nama`, `email`, `komentar`) VALUES
(5, 'sadda', 'asdf@gmaisdlk', 'jsap'),
(9, '', 'o@hasm', ' Kilsnndjkj ncvnvkckn  cj'),
(10, 'awrQ', 'AS@H', ' SS'),
(13, 'Aku', 'Email@gami', 's'),
(18, 'Ronald', 'eronas@gasi', 'Kadsiu'),
(20, 'dsd', 'sd@gmadsi', 'LOLO'),
(21, 'Ruiq', 'ere@gsjio.comn', 'Jukdov');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
