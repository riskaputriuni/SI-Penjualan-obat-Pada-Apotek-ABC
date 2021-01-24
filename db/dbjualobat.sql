-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 01:33 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbjualobat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE IF NOT EXISTS `tb_pembelian` (
`id` int(11) NOT NULL,
  `jenis_pembelian` varchar(255) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `kode_obat` varchar(255) NOT NULL,
  `harga_beli` varchar(255) NOT NULL,
  `jumlah_pembelian` varchar(255) NOT NULL,
  `tanggal_pembelian` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id`, `jenis_pembelian`, `nama_pembeli`, `kode_obat`, `harga_beli`, `jumlah_pembelian`, `tanggal_pembelian`) VALUES
(2, 'Tunai', 'Dina', 'B002', '15000', '7', '2021-12-31'),
(3, 'Tunai', 'Riska', 'B003', '3500', '8', '2021-12-31'),
(10, 'Tunai', 'Sika', 'B003', '12000', '5', '2021-12-31'),
(16, 'cash', 'Tya', 'B006', '15000', '1', '2021-12-31'),
(17, 'Tunai', 'Riski', 'B004', '24000', '5', '2021-12-31'),
(18, 'Tunai', 'Kirana', 'B005', '8500', '1', '2021-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produkobat`
--

CREATE TABLE IF NOT EXISTS `tb_produkobat` (
`id` int(5) NOT NULL,
  `kode_obat` varchar(25) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `harga_obat` varchar(255) NOT NULL,
  `jumlah_obat` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tb_produkobat`
--

INSERT INTO `tb_produkobat` (`id`, `kode_obat`, `nama_obat`, `harga_obat`, `jumlah_obat`) VALUES
(11, 'B001', 'Bodrex', '20000', '5'),
(15, 'B002', 'Paramex', '15000', '1'),
(16, 'B003', 'Komix', '3500', '2'),
(17, 'B004', 'Microlax', '24000', '5'),
(18, 'B005', 'Dulcolax', '8500', '1'),
(19, 'B006', 'mixagrip flu & batuk', '1500', '1'),
(20, 'B007', 'Bodrex', '15000', '5'),
(21, 'B008', 'Rohto', '22000', '1'),
(22, 'B009', 'Insto', '20000', '1'),
(23, 'B0010', 'Mylanta', '27000', '2'),
(24, 'B0011', 'Vicks', '26000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'apotekgmail.com', 'Dina', 1, 'pemilik apotik '),
('sales', '827ccb0eea8a706c4c34a16891f84e7b', 'apotekgmail.com', 'Sasa', 2, 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produkobat`
--
ALTER TABLE `tb_produkobat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_produkobat`
--
ALTER TABLE `tb_produkobat`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
