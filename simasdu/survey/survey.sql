-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.39 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk survey


-- membuang struktur untuk table survey.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel survey.admin: ~1 rows (lebih kurang)
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- membuang struktur untuk table survey.jawaban
CREATE TABLE IF NOT EXISTS `jawaban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seksi` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `usia` int(11) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `disabilitas` varchar(20) NOT NULL,
  `jenis_disabilitas` varchar(100) DEFAULT NULL,
  `q1` text,
  `q2` text,
  `q3` text,
  `q4` text,
  `q5` text,
  `saran` text,
  `waktu_submit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel survey.jawaban: ~11 rows (lebih kurang)
INSERT INTO `jawaban` (`id`, `seksi`, `nama`, `nohp`, `usia`, `pekerjaan`, `jeniskelamin`, `agama`, `disabilitas`, `jenis_disabilitas`, `q1`, `q2`, `q3`, `q4`, `q5`, `saran`, `waktu_submit`) VALUES
	(1, 'umum', 'tester', '08123456789', 22, 'Mahasiswa', 'Laki-laki', 'Islam', 'Ya', 'Lainnya', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Semangat!', '2025-07-31 04:25:48'),
	(2, 'umum', 'testing', '9089234931284', 21, 'PNS', 'Laki-laki', 'Islam', 'Ya', 'Tunanetra', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'oke', '2025-07-31 04:29:05'),
	(3, 'umum', 'Wiantoro', '083892939150', 23, 'PNS', 'Laki-laki', 'Islam', 'Tidak', '', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Oke', '2025-08-04 07:34:00'),
	(4, 'umum', 'Wiantoro', '083892939150', 23, 'PNS', 'Laki-laki', 'Islam', 'Ya', 'Lainnya', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Oke', '2025-08-04 07:36:10'),
	(5, 'umum', 'qwewqe', '123123123123', 0, 'PNS', 'Laki-laki', 'Islam', 'Tidak', '', '', '', '', '', '', '', '2025-08-04 07:39:11'),
	(6, 'umum', 'testing', '9089234931284', 21, 'Pelajar/Mahasiswa', 'Laki-laki', 'Islam', 'Ya', 'Tunanetra', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', '', '2025-08-04 07:46:05'),
	(7, 'umum', 'testing', '123123123123', 21, 'Pelajar/Mahasiswa', 'Laki-laki', 'Islam', 'Ya', 'Tunanetra', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'oke', '2025-08-04 07:53:11'),
	(8, 'umum', 'testing', '9089234931284', 21, 'Pelajar/Mahasiswa', 'Laki-laki', 'Islam', 'Ya', 'Tunanetra', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'oke', '2025-08-07 03:59:57'),
	(9, 'pzw', 'Dw', '575858858888', 44, 'Wirausaha', 'Laki-laki', 'Hindu', 'Tidak', '', 'Sangat Puas', '', '', '', '', '', '2025-08-07 04:34:31'),
	(10, 'umum', 'sd', '123312123123231', 12, 'Pelajar/Mahasiswa', 'Laki-laki', 'Lainnya', 'Tidak', '', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'Tidak Puas', 'asd', '2025-08-07 04:39:11'),
	(11, 'pzw', 'dasdadsdsasd', '1231231231232', 21, 'Pelajar/Mahasiswa', 'Laki-laki', 'Hindu', 'Tidak', '', 'Tidak Puas', 'Tidak Puas', 'Kurang Puas', 'Kurang Puas', 'Kurang Puas', '', '2025-08-07 04:40:29');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
