-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 04:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_invsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kd_barang` varchar(5) NOT NULL,
  `nm_barang` varchar(25) NOT NULL,
  `spesifikasi` varchar(25) NOT NULL,
  `lokasi` varchar(25) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `sumber_dana` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `jns_barang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`kd_barang`, `nm_barang`, `spesifikasi`, `lokasi`, `kondisi`, `stok`, `sumber_dana`, `keterangan`, `jns_barang`) VALUES
('BR001', 'Papan Tulis', 'Papan Plastik', 'Kelas X IPA 1', 'Baru', 19, 'BOS', 'Di Beli Baru', 'Sarana'),
('BR002', 'Bola Basket', 'Karet', 'Ruang Olahraga', 'Baru', 22, 'Uang Sumbangan', 'Sumbangan DISPORA', 'Sarana'),
('BR003', 'Laboratorium Komputer', 'Beton', 'Samping Ruang Guru', 'Bagus', 2, 'Sekolah', '-', 'Prasarana'),
('BR004', 'Buku Tulis', 'Kertas', 'Perpustakaan', 'Baru', 16, 'Sekolah', 'Di Beli Baru', 'Sarana'),
('BR005', 'Spidol', 'Tinta', 'Kelas X IPA 6', 'Baru', 6, 'BOS', 'Di Beli Baru', 'Sarana'),
('BR006', 'Pulpen', 'Tinta', 'Kelas XII IPS 1', 'Baru', 20, 'BOS', 'Di Beli Baru', 'Sarana'),
('BR007', 'Kursi', 'Kayu', 'Kelas XI IPS 3', 'Baru', 43, 'BOS', 'Di Beli Baru', 'Sarana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_brgkeluar`
--

CREATE TABLE `tb_brgkeluar` (
  `id_brgkeluar` int(4) NOT NULL,
  `kd_barang` varchar(5) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah` int(4) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_brgkeluar`
--

INSERT INTO `tb_brgkeluar` (`id_brgkeluar`, `kd_barang`, `tgl_keluar`, `jumlah`, `lokasi`, `penerima`, `keterangan`) VALUES
(1, 'BR002', '2019-08-19', 3, 'Ruang Olahraga', 'Gudang', 'Bocor'),
(2, 'BR001', '2019-08-19', 1, 'Kelas X IPA 1', 'Gudang', 'Retak');

--
-- Triggers `tb_brgkeluar`
--
DELIMITER $$
CREATE TRIGGER `barang_keluar` AFTER INSERT ON `tb_brgkeluar` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE kd_barang = NEW.kd_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_brgmasuk`
--

CREATE TABLE `tb_brgmasuk` (
  `id_brgmasuk` int(4) NOT NULL,
  `kd_barang` varchar(5) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jumlah` int(4) NOT NULL,
  `kd_supplier` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_brgmasuk`
--

INSERT INTO `tb_brgmasuk` (`id_brgmasuk`, `kd_barang`, `tgl_masuk`, `jumlah`, `kd_supplier`) VALUES
(1, 'BR004', '2019-08-14', 3, 'SL002'),
(2, 'BR005', '2019-08-17', 2, 'SL001');

--
-- Triggers `tb_brgmasuk`
--
DELIMITER $$
CREATE TRIGGER `barang_masuk` AFTER INSERT ON `tb_brgmasuk` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok+NEW.jumlah
    WHERE kd_barang = NEW.kd_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `kd_peminjaman` varchar(5) NOT NULL,
  `nm_peminjam` varchar(25) NOT NULL,
  `kd_barang` varchar(5) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`kd_peminjaman`, `nm_peminjam`, `kd_barang`, `jumlah`, `kondisi`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
('PM001', 'Tiya', 'BR005', 2, 'Bagus', '2019-11-17', '2019-11-21', 'Telah Dikembalikan'),
('PM002', 'Sinta', 'BR002', 2, 'Bagus', '2019-11-20', '2019-11-25', 'Belum Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `kd_supplier` varchar(5) NOT NULL,
  `nm_supplier` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`kd_supplier`, `nm_supplier`, `alamat`, `no_telp`) VALUES
('SL001', 'PT. Snowman Spidol', 'Tanah Patah', '08127825646'),
('SL002', 'PT. Sinar Dunia', 'Kampung Bali', '087816005424');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tb_brgkeluar`
--
ALTER TABLE `tb_brgkeluar`
  ADD PRIMARY KEY (`id_brgkeluar`),
  ADD KEY `kd_barang` (`kd_barang`);

--
-- Indexes for table `tb_brgmasuk`
--
ALTER TABLE `tb_brgmasuk`
  ADD PRIMARY KEY (`id_brgmasuk`),
  ADD KEY `kd_barang` (`kd_barang`),
  ADD KEY `kd_supplier` (`kd_supplier`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`kd_peminjaman`),
  ADD KEY `kd_barang` (`kd_barang`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`kd_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_brgkeluar`
--
ALTER TABLE `tb_brgkeluar`
  MODIFY `id_brgkeluar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_brgmasuk`
--
ALTER TABLE `tb_brgmasuk`
  MODIFY `id_brgmasuk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_brgkeluar`
--
ALTER TABLE `tb_brgkeluar`
  ADD CONSTRAINT `tb_brgkeluar_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `tb_barang` (`kd_barang`);

--
-- Constraints for table `tb_brgmasuk`
--
ALTER TABLE `tb_brgmasuk`
  ADD CONSTRAINT `tb_brgmasuk_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `tb_barang` (`kd_barang`),
  ADD CONSTRAINT `tb_brgmasuk_ibfk_2` FOREIGN KEY (`kd_supplier`) REFERENCES `tb_supplier` (`kd_supplier`);

--
-- Constraints for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `tb_barang` (`kd_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
