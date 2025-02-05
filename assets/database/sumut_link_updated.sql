-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sumut_link
CREATE DATABASE IF NOT EXISTS `sumut_link` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sumut_link`;

-- Dumping structure for table sumut_link.nasabah
CREATE TABLE IF NOT EXISTS `nasabah` (
  `nik_ktp` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `no_CIF` int NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_bergabung` date NOT NULL,
  PRIMARY KEY (`nik_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sumut_link.nasabah: ~10 rows (approximately)
INSERT INTO `nasabah` (`nik_ktp`, `no_CIF`, `nama_lengkap`, `alamat`, `no_telepon`, `nama_ibu_kandung`, `jenis_kelamin`, `tgl_lahir`, `tgl_bergabung`) VALUES
	('1234567890123456', 100001, 'John Doe', 'Jl. Merdeka No. 1, Jakarta', '081234567890', 'Jane Doe', 'laki-laki', '1985-01-15', '2020-05-01'),
	('1234567898765431', 49684, 'bobby nst', 'Kisaran Timur, Asahan', '087656785432', 'test ibu', 'laki-laki', '2000-10-20', '2025-01-28'),
	('2345678901234567', 100006, 'Emily Davis', 'Jl. Imam Bonjol No. 8, Medan', '086789012345', 'Sophia Davis', 'perempuan', '1993-11-08', '2021-03-22'),
	('3456789012345678', 100005, 'David Wilson', 'Jl. Gatot Subroto No. 12, Semarang', '085678901234', 'Emma Wilson', 'laki-laki', '1988-12-30', '2020-09-05'),
	('4567890123456789', 100009, 'Robert Moore', 'Jl. Veteran No. 9, Palembang', '089012345678', 'Olivia Moore', 'laki-laki', '1989-10-22', '2020-12-01'),
	('5678901234567890', 100003, 'Michael Brown', 'Jl. Sudirman No. 10, Surabaya', '083456789012', 'Anna Brown', 'laki-laki', '1980-06-25', '2019-03-15'),
	('5678901234578901', 100010, 'Sophia Clark', 'Jl. Pahlawan No. 3, Malang', '081098765432', 'Ella Clark', 'perempuan', '1992-05-18', '2021-05-12'),
	('6789012345678901', 100004, 'Sarah Johnson', 'Jl. Diponegoro No. 77, Yogyakarta', '084567890123', 'Lisa Johnson', 'perempuan', '1995-09-12', '2022-01-18'),
	('7890123456789012', 100007, 'Chris Taylor', 'Jl. Ahmad Yani No. 21, Makassar', '087890123456', 'Grace Taylor', 'laki-laki', '1982-07-04', '2018-11-27'),
	('8901234567890123', 100008, 'Laura Anderson', 'Jl. Panglima Sudirman No. 5, Bali', '088901234567', 'Hannah Anderson', 'laki-laki', '1997-02-16', '2022-07-15'),
	('9876543210987654', 100002, 'Jane Smith', 'Jl. Kebon Sirih No. 45, Bandung', '082345678901', 'Maria Smith', 'perempuan', '1990-03-20', '2021-07-10');

-- Dumping structure for table sumut_link.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `transaksi_id` varchar(12) NOT NULL,
  `created_by` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nasabah_id` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_transaksi` enum('debit','kredit') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` bigint NOT NULL DEFAULT (0),
  `tgl_transaksi` date NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`transaksi_id`),
  KEY `FK_transaksi_nasabah` (`nasabah_id`),
  KEY `FK_transaksi_users` (`created_by`),
  CONSTRAINT `FK_transaksi_nasabah` FOREIGN KEY (`nasabah_id`) REFERENCES `nasabah` (`nik_ktp`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_transaksi_users` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sumut_link.transaksi: ~0 rows (approximately)
INSERT INTO `transaksi` (`transaksi_id`, `created_by`, `nasabah_id`, `jenis_transaksi`, `jumlah`, `tgl_transaksi`, `keterangan`) VALUES
	('TRXC1exMrQUX', 'USRGAOanZLXl', '1234567898765431', 'debit', 1000000, '2025-02-05', 'test');

-- Dumping structure for table sumut_link.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('cs','teller','admin') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `jabatan` enum('teller','customer_service','admin','pimpinan') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sumut_link.users: ~3 rows (approximately)
INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `created_at`, `jabatan`) VALUES
	('USRGAOanZLXl', 'admin', '$2y$10$bdZP3aTyTB03LjWhBOSDiufJAIAM4qDSBmjLyyitHybJOz1QoDUAq', 'admin', '2025-02-05 12:41:20', 'admin'),
	('USRIWD8DbDGs', 'customer_service', '$2y$10$aysF/QDDd6/Shot03p7wCOH21dYJJ99Fy9xyaNbmJqPQ8Gn6/UDGK', 'cs', '2025-02-05 12:43:35', 'customer_service'),
	('USRuAiPDAWnz', 'teller', '$2y$10$An9hMooaOQK5/4VTkhpliugeHK8u7eWMO/bglv/48EO3DBVFMJVo.', 'teller', '2025-02-05 12:43:10', 'teller');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
