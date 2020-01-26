-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jan 2020 pada 06.04
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `naver`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`idcust` int(11) NOT NULL,
  `namacust` varchar(100) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `nopasspor` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`idcust`, `namacust`, `tlp`, `email`, `alamat`, `kota`, `negara`, `nopasspor`) VALUES
(1, 'Abimana Daneswara', '089191919199', 'abimanadaneswara@gma', 'Jalan Kepundung', 'Pyongyang', 'Korea Utara', '128738323'),
(2, 'Irma Krisna', '08712617273', 'irmakrisna@gmail.com', 'Jalan Drupadi', 'Denpasar', 'Indonesia', '98765432123'),
(3, 'Sandiaga Uno', '089191919199', 'unomero@gmail.com', 'Jalan Pemelisan', 'Denpasar', 'Indonesia', '123456789'),
(4, 'David Lee', '081234567890', 'david@gmail.com', 'Hawaian Street', 'Luxemburg', 'Europe', '1234567890'),
(5, 'Chris Sandes', '08919191911', 'chrislala@gmail.com', 'Cappadocia', 'Nasvi', 'Turki', '12389'),
(6, 'Kim Jae Wook', '08919191911', 'jaxxvv1239@gmail.com', 'Gangnam', 'Seoul', 'Korea Selatan', '1234567'),
(7, 'Chris Sandes', '08919191911', 'chrislala@gmail.com', 'Cappadocia', 'Nasvi', 'Turki', '12389'),
(8, 'J.K. Rolling', '08919191911', 'rtrlala@gmail.com', 'London', 'Nasvi', 'UK', '12389'),
(9, 'Niki', '08919191911', 'nikilow@gmail.com', 'Lalada', 'Mumbai', 'India', '12389'),
(10, 'Sam Jon', '08919191911', 'samajon@gmail.com', 'Jalan Mawar', 'Tabanan', 'Indonesia', '12389'),
(11, 'Suparman', '08919191911', 'suparmansuper@gmail.', 'Jalan Drupadi', 'Denpasar', 'Indonesia', '12389');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jeniskamar`
--

CREATE TABLE IF NOT EXISTS `jeniskamar` (
`idjenis` int(11) NOT NULL,
  `namajenis` varchar(200) NOT NULL,
  `hargakamar` double NOT NULL,
  `stokkamar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
`idkamar` int(11) NOT NULL,
  `idjenis` int(11) NOT NULL,
  `namakamar` varchar(50) NOT NULL,
  `fotokamar` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `idpaket` int(11) NOT NULL,
  `namapaket` varchar(100) NOT NULL,
  `hargapaket` varchar(100) NOT NULL,
  `fotopaket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
`idtrans` int(11) NOT NULL,
  `tgl_trans` varchar(50) NOT NULL,
  `idreservasi` int(10) NOT NULL,
  `namacust` varchar(50) NOT NULL,
  `buktibayar` varchar(100) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_admin`, `username`, `password`, `last_login`) VALUES
(1, 'admin', 'admin', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
`idreservasi` int(11) NOT NULL,
  `tglreservasi` date NOT NULL,
  `namacust` varchar(100) NOT NULL,
  `idkamar` int(11) NOT NULL,
  `namakamar` varchar(100) NOT NULL,
  `lama` int(11) NOT NULL,
  `idpaket` int(11) NOT NULL,
  `totalbayar` double NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`idcust`);

--
-- Indexes for table `jeniskamar`
--
ALTER TABLE `jeniskamar`
 ADD PRIMARY KEY (`idjenis`), ADD KEY `StokKamar` (`stokkamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
 ADD PRIMARY KEY (`idkamar`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
 ADD PRIMARY KEY (`idpaket`), ADD KEY `Id_Paket` (`idpaket`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`idtrans`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
 ADD PRIMARY KEY (`idreservasi`), ADD KEY `idpaket` (`namakamar`), ADD KEY `idpembayaran` (`idpaket`), ADD KEY `idmetode` (`lama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `idcust` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `jeniskamar`
--
ALTER TABLE `jeniskamar`
MODIFY `idjenis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
MODIFY `idkamar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
MODIFY `idtrans` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
MODIFY `idreservasi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
