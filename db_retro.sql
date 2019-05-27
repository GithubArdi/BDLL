-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 09:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_retro`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(2, 'kelompok', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukti`
--

CREATE TABLE `tb_bukti` (
  `id_transfer` int(11) NOT NULL,
  `id_bayar` int(11) DEFAULT NULL,
  `total_transfer` double NOT NULL,
  `gambar_transfer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `notlp_customer` varchar(13) NOT NULL,
  `alamat_customer` varchar(255) NOT NULL,
  `status` enum('customer','mitra resto','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `username`, `password`, `notlp_customer`, `alamat_customer`, `status`) VALUES
(1, 'anggita', '202cb962ac59075b964b07152d234b70', '0895370008969', 'denpasar', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `jenis_menu` varchar(50) NOT NULL,
  `harga_menu` double NOT NULL,
  `id_resto` int(11) NOT NULL,
  `gambar_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `jenis_menu`, `harga_menu`, `id_resto`, `gambar_menu`) VALUES
(1, 'Goprek1', 'appetizer', 13000, 1, 'uploads/agency1.jpg'),
(2, 'Panas 1', 'maincourse', 15000, 1, 'uploads/agency1.jpg'),
(3, 'Es Krim', 'dessert', 5000, 1, 'uploads/agency1.jpg'),
(4, 'Nasi Bu Pon', 'Main Course', 13000, 1, 'uploads/agency1.jpg'),
(5, 'Nasi Bu Pon', 'Main Course', 13000, 1, 'uploads/anggita.jpg'),
(6, 'Nasi Bu Pon', 'dessert', 1233, 1, 'uploads/agency4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mitraresto`
--

CREATE TABLE `tb_mitraresto` (
  `id_owner` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_mitra` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` enum('customer','mitra resto','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mitraresto`
--

INSERT INTO `tb_mitraresto` (`id_owner`, `username`, `password`, `nama_mitra`, `no_telp`, `status`) VALUES
(0, 'Wejani', '123', 'Wejani', '0867761', ''),
(1, 'Gogo', '202cb962ac59075b964b07152d234b70', '', '', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `nama_order` varchar(255) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_reservasi` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_resto` int(11) NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `harga_paket` double NOT NULL,
  `gambar_paket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `harga_paket`, `gambar_paket`) VALUES
(1, 'Paket A', 1000000, 'ap1.jpg'),
(2, 'Gogo', 10000, ''),
(3, 'Paket B', 1000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` double NOT NULL,
  `status` enum('lunas','belum lunas','','') NOT NULL,
  `id_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_pesanmenu` int(11) DEFAULT NULL,
  `total_jumlah` int(11) NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanmenu`
--

CREATE TABLE `tb_pesanmenu` (
  `id_pesanmenu` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumblah_pesan` int(11) NOT NULL,
  `harga_pesan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nama_reservasi` varchar(255) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `jam_reservasi` time NOT NULL,
  `jam_out` time NOT NULL,
  `jml_reservasi` int(11) NOT NULL,
  `status` enum('full','kosong','','') NOT NULL,
  `Total_harga` double NOT NULL,
  `id_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_resto`
--

CREATE TABLE `tb_resto` (
  `id_resto` int(11) NOT NULL,
  `nama_restoran` varchar(255) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `alamat_resto` varchar(255) NOT NULL,
  `jadwal_buka` time NOT NULL,
  `jadwal_tutup` time NOT NULL,
  `gambar_resto` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resto`
--

INSERT INTO `tb_resto` (`id_resto`, `nama_restoran`, `jenis`, `alamat_resto`, `jadwal_buka`, `jadwal_tutup`, `gambar_resto`, `deskripsi`, `id_owner`) VALUES
(0, 'Samicos', 'Indonesian', 'Bali', '00:00:10', '00:00:20', 'uploads/agency1.jpg', 'BAGUS', 1),
(1, 'Ayam Gogo Friedchiken', 'indonesian', 'denpasar', '09:00:00', '22:00:00', 'uploads/agency1.jpg', 'ini data restoran', 1),
(2, 'Wejani', 'Indonesian', 'Bali', '00:00:10', '00:00:12', 'uploads/agency1.jpg', 'BAgus', 0),
(3, 'Samicos Restaurant', 'Indonesian', 'Bali', '00:00:10', '00:00:20', 'uploads/agency1.jpg', '', 0),
(4, 'Ilkom Restaurant', 'Chinese', 'Bukit', '00:00:10', '00:00:20', 'public/uploads/agency4.jpg', 'ENAK LEZAT BERKUALITAS', 0),
(5, 'Bali', 'Indonesian', 'Bali', '00:00:10', '00:00:20', 'public/uploads/anggita.jpg', 'ENAK LEZAT BERKUALITAS', 0),
(6, 'Samicos Restaurant', 'Indonesian', 'Bangli, Bali', '00:00:10', '00:00:12', 'uploads/agency1.jpg', 'ENAK LEZAT BERKUALITAS', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_bukti`
--
ALTER TABLE `tb_bukti`
  ADD PRIMARY KEY (`id_transfer`),
  ADD KEY `id_bayar` (`id_bayar`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_resto` (`id_resto`);

--
-- Indexes for table `tb_mitraresto`
--
ALTER TABLE `tb_mitraresto`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_reservasi` (`id_reservasi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_resto` (`id_resto`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_pesanmenu` (`id_pesanmenu`);

--
-- Indexes for table `tb_pesanmenu`
--
ALTER TABLE `tb_pesanmenu`
  ADD PRIMARY KEY (`id_pesanmenu`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `tb_resto`
--
ALTER TABLE `tb_resto`
  ADD PRIMARY KEY (`id_resto`),
  ADD KEY `id_owner` (`id_owner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesanmenu`
--
ALTER TABLE `tb_pesanmenu`
  MODIFY `id_pesanmenu` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_bukti`
--
ALTER TABLE `tb_bukti`
  ADD CONSTRAINT `tb_bukti_ibfk_1` FOREIGN KEY (`id_bayar`) REFERENCES `tb_pembayaran` (`id_bayar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD CONSTRAINT `tb_menu_ibfk_1` FOREIGN KEY (`id_resto`) REFERENCES `tb_resto` (`id_resto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `tb_pesan` (`id_pesan`),
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`),
  ADD CONSTRAINT `tb_order_ibfk_3` FOREIGN KEY (`id_reservasi`) REFERENCES `tb_reservasi` (`id_reservasi`),
  ADD CONSTRAINT `tb_order_ibfk_4` FOREIGN KEY (`id_resto`) REFERENCES `tb_resto` (`id_resto`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `tb_order` (`id_order`);

--
-- Constraints for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `tb_pesan_ibfk_1` FOREIGN KEY (`id_pesanmenu`) REFERENCES `tb_pesanmenu` (`id_pesanmenu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pesanmenu`
--
ALTER TABLE `tb_pesanmenu`
  ADD CONSTRAINT `tb_pesanmenu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD CONSTRAINT `tb_reservasi_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_resto`
--
ALTER TABLE `tb_resto`
  ADD CONSTRAINT `tb_resto_ibfk_1` FOREIGN KEY (`id_owner`) REFERENCES `tb_mitraresto` (`id_owner`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
