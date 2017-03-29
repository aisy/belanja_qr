-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mar 2017 pada 08.48
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belanjaqr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(40) NOT NULL,
  `distributor` varchar(50) NOT NULL,
  `masa_berlaku` date NOT NULL,
  `tanggal_masuk_barang` date NOT NULL,
  `berat` varchar(10) NOT NULL,
  `harga` int(30) NOT NULL,
  `stok` int(100) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `distributor`, `masa_berlaku`, `tanggal_masuk_barang`, `berat`, `harga`, `stok`) VALUES
(0, 'Biskuit Roma Abon', 'PT. Mayora Indah', '2018-01-01', '2017-01-01', '300', 12000, 10),
(2, 'Blue band', 'PT.Unilever', '2018-03-10', '2017-01-16', '20 gram', 6000, 10),
(3, 'Energen Kacang Hijau Pouch (Isi 10)', 'PT.Torabika Eka Semesta', '2018-06-13', '2016-12-14', '30 gram', 14000, 10),
(4, 'Nestle Carnation', 'PT.Nestle Indonesia', '2018-07-18', '2017-02-13', '450 gram', 10000, 10),
(5, 'Rinso Molto', 'PT.Unilever Indonesia', '2018-07-25', '2016-11-22', '1000 gram', 15000, 10),
(6, 'Downy Parfum Collection Mystique', 'PT.Procter & Gamble Home', '2018-04-19', '2017-03-27', '650 gram', 9000, 10),
(7, 'Mitu Baby ', 'PT.Megasari Makmur', '2018-05-19', '2017-03-21', '500 gram', 12000, 10),
(8, 'Teh Sariwangi', 'PT.Unilever Indonesia', '2018-06-08', '2017-03-12', '47 gram', 7000, 10),
(9, 'GULAKU', 'PT.Sweet INDOLAMPUNG', '2018-07-20', '2016-12-10', '200 gram', 6000, 10),
(10, 'Biore Body Foam Pleasure Peony', 'PT.Kao Indonesia', '2019-01-10', '2017-03-09', '450 ml', 17000, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga_barang` int(20) NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE IF NOT EXISTS `kasir` (
  `id_kasir` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(40) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kasir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama`, `ttl`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'siti', 'Malang,01-03-1993', 'malang', 12345678, 'siti', '123456'),
(2, 'desi', 'lumajang', 'lawang', 857955578, 'desi10', 'desidesi'),
(3, 'ratna', 'mojokerto', 'sawojajar', 823769100, 'ratna', 'ratnaratna'),
(4, 'dhini', 'sidoarjo', 'kembangturi', 837676800, 'dhini', 'dhinidhini\r\n'),
(5, 'vicky', 'lumajang', 'semanggibarat', 827575000, 'vicky', 'vickyvicky');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `ttl` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_user`, `nama`, `alamat`, `ttl`, `no_hp`, `no_ktp`, `username`, `password`) VALUES
(1, 'Yesika Siti Nurhayati', 'qwertyuiopasdfghjkl', '1998-03-19', 1234567890, 1234567890, '', ''),
(2, 'Yesika Siti Nurhayati', 'qwertyuiopasdfghjkl', '1998-03-19', 1234567890, 1234567890, 'yesikasi', '19980319YE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(20) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `id_kasir` int(30) NOT NULL,
  `status_transaksi` varchar(30) NOT NULL,
  `total_harga` int(10) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tanggal_transaksi`, `no_antrian`, `id_kasir`, `status_transaksi`, `total_harga`) VALUES
(1, 3, '2017-03-07', 0, 2, 'belum', 700000),
(2, 1, '2017-03-07', 0, 4, 'belum', 450000),
(3, 3, '2017-03-05', 0, 2, 'belum', 360000),
(4, 5, '2017-03-01', 0, 3, 'sukses', 694500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
