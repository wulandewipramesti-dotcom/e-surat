-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2025 at 01:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e-surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-10-30-095753', 'App\\Database\\Migrations\\SuratPRuang', 'default', 'App', 1761826426, 1),
(2, '2025-10-30-115334', 'App\\Database\\Migrations\\SuratSakit', 'default', 'App', 1761826427, 1),
(3, '2025-11-07-100638', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1762510034, 2);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan`
--

CREATE TABLE `surat_keterangan` (
  `id` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `nama_orangtua` varchar(100) NOT NULL,
  `pangkat` varchar(50) DEFAULT NULL,
  `status` enum('Pending','Diproses','Disetujui','Ditolak') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat_keterangan`
--

INSERT INTO `surat_keterangan` (`id`, `semester`, `tahun_ajaran`, `nama_orangtua`, `pangkat`, `status`) VALUES
(6, 'Ganjil', '2023/2024', 'Wiliam Stefan', 'Psi', 'Pending'),
(8, 'Genap', '2023/2024', 'Wiliam Stefan', 'Psi', 'Pending'),
(11, 'Ganjil', '2024/2025', 'Wiliam Stefan', 'Psi', 'Pending'),
(32, 'Genap', '2024/2025', 'Wiliam Stefan', 'Psi', 'Pending'),
(33, 'Ganjil', '2024/2025', 'Wiliam Stefan Winanta', 'Psi1', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','mahasiswa') NOT NULL DEFAULT 'mahasiswa',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin Sistem', 'admin@example.com', '$2y$10$1EAD4h2qCQ.OY2ISJXT.GOxRtyGEs89BkODebQfzdtURI8jaJ3awe', 'admin', NULL, NULL),
(2, 'Mahasiswa 1', 'mhs1@example.com', '$2y$10$En8uk3klk4y45UIWItgWWewltExJN2WWKg.qt828RDpPA4LNoIsL6', 'mahasiswa', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
