-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 06:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmpmarhas`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_06_19_070924_create_tbl_guru_table', 1),
(4, '2021_08_15_081027_create_tbl_waktu', 1),
(5, '2021_08_29_040143_create_tbl_hari', 1),
(6, '2021_08_29_130822_create_tbl_timedays', 1),
(7, '2021_10_04_100555_create_tbl_timenotavailable', 1),
(8, '2021_10_12_141721_create_tbl_tingkat', 1),
(9, '2021_10_12_141742_create_tbl_semester', 1),
(10, '2021_10_12_141750_create_tbl_jenis_mapel', 1),
(11, '2021_10_24_093030_create_tbl_setting', 1),
(12, '2021_11_27_144335_create_tbl_mapel', 1),
(13, '2021_11_27_145121_create_tbl_kelas', 1),
(14, '2021_11_27_145138_create_tbl_lab', 1),
(15, '2021_11_28_115752_create_tbl_level', 1),
(16, '2021_11_28_120447_create_tbl_users', 1),
(17, '2021_12_12_015613_create_tbl_teach', 1),
(18, '2021_12_12_015731_create_tbl_jadwal', 1),
(19, '2021_12_12_100555_create_tbl_timenotavailable', 2),
(20, '2021_12_14_102522_create_tbl_upload_jadwal', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` bigint(20) NOT NULL,
  `kode_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nip`, `kode_guru`, `nama_lengkap`, `alamat`, `no_hp`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'GURU01', 'Ramdani, S.Kom', 'SMK Marhas', '+62-838-555-898', 'ramdani@gmail.com', NULL, NULL),
(2, 2, 'GURU02', 'Fitrianingsih, S.Kom', 'SMK Marhas', '+62-878-555-113', 'fitri@gmail.com', NULL, NULL),
(3, 3, 'GURU03', 'Rinny Nuraeni, S.Kom', 'SMK Marhas', '+62-899-555-439', 'rinny@gmail.com', NULL, NULL),
(4, 4, 'GURU04', 'M Taufik Azhari S.T', 'SMK Marhas', '+62-878-555-034', 'mtaufik@gmail.com', NULL, NULL),
(5, 5, 'GURU05', 'Yeti', 'SMK Marhas', '+62-878-555-963', 'yeti@gmail.com', NULL, NULL),
(6, 6, 'GURU06', 'Kusmiadi, ST', 'SMK Marhas', '+62-898-555-295', 'kusmiadi@gmail.com', NULL, NULL),
(7, 7, 'GURU07', 'Mochamad Sidik, Amd.Kom', 'SMK Marhas', '+62-838-555-004', 'mochsidik@gmail.com', NULL, NULL),
(8, 8, 'GURU08', 'Endi', 'SMK Marhas', '+62-897-555-041', 'endi@gmail.com', NULL, NULL),
(9, 9, 'GURU09', 'Riska', 'SMK Marhas', '+62-897-555-241', 'riska@gmail.com', NULL, NULL),
(10, 10, 'GURU10', 'Roni', 'SMK Marhas', '+62-897-245-241', 'roni@gmail.com', NULL, NULL),
(11, 11, 'GURU11', 'H. Didin S, S.T\r\n', 'SMK Marhas', '+62-897-245-241', 'didin@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hari`
--

CREATE TABLE `tbl_hari` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_hari`
--

INSERT INTO `tbl_hari` (`id`, `kode_hari`, `nama_hari`, `created_at`, `updated_at`) VALUES
(1, 'Hari01', 'Senin', NULL, NULL),
(2, 'Hari02', 'Selasa', NULL, NULL),
(3, 'Hari03', 'Rabu', NULL, NULL),
(4, 'Hari04', 'Kamis', NULL, NULL),
(5, 'Hari05', 'Jumat', NULL, NULL),
(6, 'Hari06', 'Sabtu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teach_id` bigint(20) UNSIGNED NOT NULL,
  `hari_id` bigint(20) UNSIGNED NOT NULL,
  `waktu_id` bigint(20) UNSIGNED NOT NULL,
  `lab_id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `value` double DEFAULT NULL,
  `value_process` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id`, `teach_id`, `hari_id`, `waktu_id`, `lab_id`, `type`, `value`, `value_process`, `created_at`, `updated_at`) VALUES
(1, 31, 1, 15, 4, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(2, 11, 5, 19, 5, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(3, 17, 6, 10, 4, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(4, 15, 2, 8, 6, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(5, 35, 4, 18, 3, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(6, 9, 3, 21, 5, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(7, 25, 4, 10, 2, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(8, 20, 6, 10, 1, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(9, 12, 1, 7, 5, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(10, 34, 2, 11, 4, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(11, 91, 4, 22, 3, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(12, 13, 5, 16, 6, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(13, 89, 2, 22, 1, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(14, 26, 2, 4, 2, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(15, 27, 4, 15, 3, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(16, 30, 4, 10, 4, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(17, 33, 1, 18, 1, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(18, 19, 2, 10, 4, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(19, 88, 6, 22, 2, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(20, 8, 2, 21, 5, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(21, 21, 5, 4, 2, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(22, 90, 1, 22, 1, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(23, 23, 4, 18, 1, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(24, 24, 2, 10, 3, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(25, 14, 5, 5, 5, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(26, 22, 6, 15, 4, 1, 1, NULL, '2022-01-31 12:47:16', '2022-01-31 12:47:29'),
(27, 32, 5, 15, 1, 1, 1, NULL, '2022-01-31 12:47:17', '2022-01-31 12:47:29'),
(28, 28, 6, 4, 4, 1, 1, NULL, '2022-01-31 12:47:17', '2022-01-31 12:47:29'),
(29, 10, 1, 2, 5, 1, 1, NULL, '2022-01-31 12:47:17', '2022-01-31 12:47:29'),
(30, 18, 4, 10, 1, 1, 1, NULL, '2022-01-31 12:47:17', '2022-01-31 12:47:29'),
(31, 16, 3, 11, 2, 1, 1, NULL, '2022-01-31 12:47:17', '2022-01-31 12:47:29'),
(32, 29, 2, 4, 1, 1, 1, NULL, '2022-01-31 12:47:17', '2022-01-31 12:47:29'),
(33, 19, 3, 10, 3, 2, 1, NULL, '2022-01-31 12:47:17', '2022-01-31 12:47:29'),
(34, 91, 5, 22, 3, 2, 1, NULL, '2022-01-31 12:47:17', '2022-01-31 12:47:29'),
(35, 15, 5, 2, 6, 2, 1, NULL, '2022-01-31 12:47:17', '2022-01-31 12:47:29'),
(36, 17, 2, 18, 3, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(37, 13, 5, 13, 5, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(38, 27, 3, 15, 4, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(39, 26, 5, 15, 4, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(40, 22, 1, 11, 1, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(41, 90, 4, 22, 4, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(42, 18, 4, 15, 3, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(43, 89, 6, 22, 3, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(44, 28, 6, 10, 4, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(45, 33, 3, 15, 3, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(46, 32, 1, 4, 4, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(47, 20, 2, 10, 4, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(48, 34, 4, 15, 2, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(49, 9, 4, 16, 5, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(50, 12, 6, 8, 6, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:29'),
(51, 23, 5, 15, 3, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:30'),
(52, 31, 2, 4, 4, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:30'),
(53, 11, 4, 7, 6, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:30'),
(54, 14, 6, 16, 5, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:30'),
(55, 21, 3, 11, 3, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:30'),
(56, 35, 5, 4, 1, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:30'),
(57, 29, 1, 10, 1, 2, 1, NULL, '2022-01-31 12:47:18', '2022-01-31 12:47:30'),
(58, 10, 5, 8, 6, 2, 1, NULL, '2022-01-31 12:47:19', '2022-01-31 12:47:30'),
(59, 25, 2, 4, 3, 2, 1, NULL, '2022-01-31 12:47:19', '2022-01-31 12:47:30'),
(60, 8, 1, 7, 6, 2, 1, NULL, '2022-01-31 12:47:19', '2022-01-31 12:47:30'),
(61, 88, 4, 22, 1, 2, 1, NULL, '2022-01-31 12:47:19', '2022-01-31 12:47:30'),
(62, 30, 6, 4, 1, 2, 1, NULL, '2022-01-31 12:47:19', '2022-01-31 12:47:30'),
(63, 24, 2, 15, 4, 2, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(64, 16, 1, 18, 4, 2, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(65, 11, 3, 19, 5, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(66, 28, 6, 15, 2, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(67, 89, 1, 22, 3, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(68, 30, 5, 18, 2, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(69, 31, 1, 4, 4, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(70, 8, 2, 16, 6, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(71, 14, 4, 5, 6, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(72, 91, 3, 22, 4, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(73, 34, 3, 10, 3, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(74, 17, 6, 11, 3, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(75, 18, 2, 18, 2, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(76, 9, 6, 8, 6, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(77, 19, 6, 4, 3, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(78, 23, 2, 15, 1, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(79, 22, 1, 11, 3, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(80, 10, 6, 16, 6, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(81, 13, 5, 16, 5, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(82, 15, 3, 7, 6, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(83, 27, 5, 11, 2, 3, 0.5, '+ 1 ', '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(84, 16, 1, 18, 1, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(85, 24, 4, 15, 3, 3, 1, NULL, '2022-01-31 12:47:20', '2022-01-31 12:47:30'),
(86, 25, 6, 18, 4, 3, 1, NULL, '2022-01-31 12:47:21', '2022-01-31 12:47:30'),
(87, 33, 1, 15, 2, 3, 1, NULL, '2022-01-31 12:47:21', '2022-01-31 12:47:30'),
(88, 21, 4, 10, 2, 3, 1, NULL, '2022-01-31 12:47:21', '2022-01-31 12:47:30'),
(89, 12, 4, 2, 6, 3, 1, NULL, '2022-01-31 12:47:21', '2022-01-31 12:47:30'),
(90, 90, 1, 22, 2, 3, 1, NULL, '2022-01-31 12:47:21', '2022-01-31 12:47:30'),
(91, 88, 4, 22, 1, 3, 1, NULL, '2022-01-31 12:47:21', '2022-01-31 12:47:30'),
(92, 35, 2, 4, 1, 3, 1, NULL, '2022-01-31 12:47:21', '2022-01-31 12:47:30'),
(93, 26, 5, 15, 1, 3, 1, NULL, '2022-01-31 12:47:21', '2022-01-31 12:47:30'),
(94, 20, 4, 11, 4, 3, 1, NULL, '2022-01-31 12:47:21', '2022-01-31 12:47:30'),
(95, 29, 4, 11, 1, 3, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(96, 32, 3, 18, 3, 3, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(97, 28, 3, 15, 4, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(98, 24, 1, 4, 4, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(99, 14, 4, 21, 6, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(100, 18, 5, 15, 1, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(101, 23, 6, 11, 2, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(102, 21, 5, 18, 1, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(103, 25, 3, 10, 1, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(104, 90, 1, 22, 2, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(105, 8, 4, 8, 6, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(106, 15, 5, 19, 5, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(107, 20, 5, 4, 3, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(108, 19, 4, 11, 4, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(109, 88, 4, 22, 2, 4, 1, NULL, '2022-01-31 12:47:22', '2022-01-31 12:47:30'),
(110, 31, 5, 10, 2, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(111, 91, 2, 22, 1, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(112, 22, 6, 18, 3, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(113, 33, 6, 18, 1, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(114, 13, 4, 19, 6, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(115, 10, 4, 21, 5, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(116, 16, 3, 4, 3, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(117, 27, 4, 15, 3, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(118, 29, 1, 4, 1, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(119, 30, 2, 15, 1, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(120, 9, 5, 2, 6, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(121, 34, 1, 10, 2, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(122, 17, 4, 18, 3, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(123, 32, 6, 4, 4, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(124, 11, 2, 16, 5, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(125, 26, 5, 4, 2, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(126, 12, 3, 21, 5, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(127, 89, 5, 22, 4, 4, 1, NULL, '2022-01-31 12:47:23', '2022-01-31 12:47:30'),
(128, 35, 4, 4, 1, 4, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(129, 14, 1, 16, 5, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(130, 31, 1, 15, 2, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(131, 16, 2, 11, 4, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(132, 11, 4, 8, 5, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(133, 32, 4, 11, 4, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(134, 26, 1, 4, 3, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(135, 25, 1, 10, 3, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(136, 24, 4, 15, 3, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(137, 9, 6, 16, 5, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(138, 10, 3, 5, 6, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(139, 20, 2, 4, 3, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(140, 27, 6, 18, 4, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(141, 23, 3, 18, 3, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(142, 21, 6, 15, 1, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(143, 8, 2, 19, 5, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(144, 30, 4, 15, 1, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(145, 18, 1, 15, 3, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(146, 34, 5, 11, 4, 5, 0.5, '+ 1 ', '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(147, 19, 6, 10, 2, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(148, 35, 2, 4, 4, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(149, 22, 4, 11, 3, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(150, 91, 1, 22, 1, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(151, 15, 3, 19, 6, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(152, 33, 6, 11, 2, 5, 1, NULL, '2022-01-31 12:47:24', '2022-01-31 12:47:30'),
(153, 17, 3, 11, 2, 5, 1, NULL, '2022-01-31 12:47:25', '2022-01-31 12:47:30'),
(154, 90, 2, 22, 1, 5, 1, NULL, '2022-01-31 12:47:25', '2022-01-31 12:47:30'),
(155, 13, 2, 7, 6, 5, 1, NULL, '2022-01-31 12:47:25', '2022-01-31 12:47:30'),
(156, 12, 3, 8, 5, 5, 1, NULL, '2022-01-31 12:47:25', '2022-01-31 12:47:30'),
(157, 89, 2, 22, 2, 5, 1, NULL, '2022-01-31 12:47:25', '2022-01-31 12:47:30'),
(158, 29, 5, 18, 2, 5, 1, NULL, '2022-01-31 12:47:25', '2022-01-31 12:47:30'),
(159, 88, 3, 22, 4, 5, 1, NULL, '2022-01-31 12:47:25', '2022-01-31 12:47:30'),
(160, 28, 2, 10, 1, 5, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(161, 26, 1, 15, 2, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(162, 29, 3, 10, 3, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(163, 90, 4, 22, 4, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(164, 15, 4, 13, 6, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(165, 14, 4, 19, 6, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(166, 18, 3, 11, 3, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(167, 19, 5, 11, 3, 6, 0.5, '+ 1 ', '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(168, 23, 2, 18, 4, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(169, 20, 3, 18, 4, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(170, 8, 5, 7, 5, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(171, 21, 4, 4, 1, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(172, 16, 4, 10, 2, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(173, 35, 5, 4, 2, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(174, 28, 6, 18, 4, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(175, 24, 2, 11, 2, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(176, 30, 1, 15, 1, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(177, 9, 3, 19, 5, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(178, 91, 2, 22, 1, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(179, 10, 1, 21, 6, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(180, 32, 3, 4, 1, 6, 1, NULL, '2022-01-31 12:47:26', '2022-01-31 12:47:30'),
(181, 25, 5, 18, 2, 6, 1, NULL, '2022-01-31 12:47:27', '2022-01-31 12:47:30'),
(182, 12, 4, 2, 5, 6, 1, NULL, '2022-01-31 12:47:27', '2022-01-31 12:47:30'),
(183, 17, 2, 11, 1, 6, 1, NULL, '2022-01-31 12:47:27', '2022-01-31 12:47:30'),
(184, 27, 1, 10, 2, 6, 1, NULL, '2022-01-31 12:47:27', '2022-01-31 12:47:30'),
(185, 13, 4, 16, 5, 6, 1, NULL, '2022-01-31 12:47:27', '2022-01-31 12:47:30'),
(186, 88, 4, 22, 1, 6, 1, NULL, '2022-01-31 12:47:27', '2022-01-31 12:47:30'),
(187, 31, 3, 11, 1, 6, 1, NULL, '2022-01-31 12:47:27', '2022-01-31 12:47:30'),
(188, 22, 2, 4, 3, 6, 1, NULL, '2022-01-31 12:47:27', '2022-01-31 12:47:30'),
(189, 33, 2, 10, 2, 6, 1, NULL, '2022-01-31 12:47:28', '2022-01-31 12:47:30'),
(190, 34, 5, 11, 2, 6, 0.5, '+ 1 ', '2022-01-31 12:47:28', '2022-01-31 12:47:30'),
(191, 11, 2, 21, 5, 6, 1, NULL, '2022-01-31 12:47:29', '2022-01-31 12:47:30'),
(192, 89, 2, 22, 3, 6, 1, NULL, '2022-01-31 12:47:29', '2022-01-31 12:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_mapel`
--

CREATE TABLE `tbl_jenis_mapel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_jenis_mapel`
--

INSERT INTO `tbl_jenis_mapel` (`id`, `jenis_mapel`, `created_at`, `updated_at`) VALUES
(1, 'TEORI', '2021-12-11 19:12:08', '2021-12-11 19:12:08'),
(2, 'PRAKTEK', '2021-12-11 19:12:08', '2021-12-11 19:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kelas` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `kode_kelas`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(25, 1, 'X RPL 1', NULL, NULL),
(26, 1, 'X RPL 2', NULL, NULL),
(27, 1, 'X RPL 3', NULL, NULL),
(28, 1, 'X RPL 4', NULL, NULL),
(29, 2, 'XI RPL 1', NULL, NULL),
(30, 2, 'XI RPL 2', NULL, NULL),
(31, 2, 'XI RPL 3', NULL, NULL),
(32, 2, 'XI RPL 4', NULL, NULL),
(33, 3, 'XII RPL 1', NULL, NULL),
(34, 3, 'XII RPL 2', NULL, NULL),
(35, 3, 'XII RPL 3', NULL, NULL),
(36, 3, 'XII RPL 4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lab`
--

CREATE TABLE `tbl_lab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_lab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jenis_lab_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_lab`
--

INSERT INTO `tbl_lab` (`id`, `kode_lab`, `nama_lab`, `kapasitas`, `jenis_lab_id`, `created_at`, `updated_at`) VALUES
(1, 'Lab02', 'R.Lab02', 30, 2, NULL, NULL),
(2, 'Lab03', 'R.Lab03', 30, 2, NULL, NULL),
(3, 'Lab04', 'R.Lab04', 30, 2, NULL, NULL),
(4, 'Lab05', 'R.Lab05', 30, 2, NULL, NULL),
(5, 'R01', 'R01', 35, 1, NULL, NULL),
(6, 'R02', 'R02', 35, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Guru', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` bigint(20) UNSIGNED NOT NULL,
  `kode_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_mapel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah_jam` int(10) UNSIGNED DEFAULT NULL,
  `jenis_mapel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `kode_mapel`, `nama_mapel`, `tingkat_mapel_id`, `semester_id`, `jumlah_jam`, `jenis_mapel_id`, `created_at`, `updated_at`) VALUES
(18, 'MP01', 'Fisika', 1, 1, 2, 1, NULL, '2022-01-04 02:57:49'),
(19, 'MP02', 'Kimia', 1, 1, 2, 1, NULL, NULL),
(20, 'MP03', 'Siskomdig', 1, 1, 4, 2, NULL, NULL),
(21, 'MP04', 'Sistem Komputer', 1, 1, 4, 2, NULL, NULL),
(22, 'MP05', 'Komputer & Jaringan Dasar', 1, 1, 4, 2, NULL, NULL),
(23, 'MP06', 'Pemrograman Dasar', 1, 1, 4, 2, NULL, NULL),
(24, 'MP07', 'Pemodelan Perangkat Lunak', 2, 1, 4, 2, NULL, NULL),
(25, 'MP08', 'Basis Data I', 2, 1, 4, 2, NULL, NULL),
(26, 'MP09', 'Pemrograman Web & Bergerak I', 2, 1, 8, 2, NULL, NULL),
(27, 'MP10', 'PBO I', 2, 1, 8, 2, NULL, NULL),
(28, 'MP11', 'Produk Kreatif Kewirausahaan I (Teori)', 2, 1, 3, 1, NULL, NULL),
(29, 'MP12', 'Blender I', 2, 1, 2, 2, NULL, NULL),
(30, 'MP13', 'PBO II', 3, 1, 8, 2, NULL, NULL),
(31, 'MP14', 'Basis Data II', 3, 1, 4, 2, NULL, NULL),
(32, 'MP15', 'Pemrograman Web & Bergerak II', 3, 1, 10, 2, NULL, '2022-01-03 11:54:06'),
(33, 'MP16', 'Produk Kreatif Kewirausahaan II (Teori)', 3, 1, 4, 1, NULL, NULL),
(34, 'MP17', 'Blender II', 3, 1, 2, 2, NULL, NULL),
(36, 'MP18', 'Dasar Desain Grafis', 1, 1, 4, 2, '2021-12-13 14:04:42', '2021-12-13 14:05:42'),
(37, 'MP19', 'Produk Kreatif Kewirausahaan I (Praktek)', 2, 1, 4, 2, NULL, NULL),
(38, 'MP20', 'Produk Kreatif Kewirausahaan II (Praktek)', 3, 1, 4, 2, NULL, NULL),
(41, 'MP-Contoh', 'Test Input edit', 1, 1, 2, 2, '2022-01-31 12:43:23', '2022-01-31 12:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`id`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'GANJIL', '2021-12-11 19:06:20', '2021-12-11 19:06:20'),
(2, 'GENAP', '2021-12-11 19:06:20', '2021-12-11 19:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `key`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'total_gen', 'Total Gen', '9', '2021-12-12 07:23:39', '2022-01-31 12:18:36'),
(2, 'mutasi', 'Mutasi', '576', '2021-12-12 07:23:39', '2022-01-31 12:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teach`
--

CREATE TABLE `tbl_teach` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mapel` bigint(20) UNSIGNED DEFAULT NULL,
  `id_guru` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kelas` bigint(20) UNSIGNED DEFAULT NULL,
  `tahun_ajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tingkat` int(10) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_teach`
--

INSERT INTO `tbl_teach` (`id`, `id_mapel`, `id_guru`, `id_kelas`, `tahun_ajaran`, `id_tingkat`, `id_user`, `created_at`, `updated_at`) VALUES
(8, 18, 9, 25, '2021-2022', 1, 2, '2021-12-17 08:27:34', '2021-12-17 08:27:34'),
(9, 18, 9, 26, '2021-2022', 1, 2, '2021-12-17 08:27:34', '2021-12-17 08:27:34'),
(10, 18, 9, 27, '2021-2022', 1, 2, '2021-12-17 08:27:34', '2021-12-17 08:27:34'),
(11, 18, 9, 28, '2021-2022', 1, 2, '2021-12-17 08:27:34', '2021-12-17 08:27:34'),
(12, 19, 10, 25, '2021-2022', 1, 2, '2021-12-17 08:28:53', '2021-12-17 08:28:53'),
(13, 19, 10, 26, '2021-2022', 1, 2, '2021-12-17 08:28:53', '2021-12-17 08:28:53'),
(14, 19, 10, 27, '2021-2022', 1, 2, '2021-12-17 08:28:53', '2021-12-17 08:28:53'),
(15, 19, 10, 28, '2021-2022', 1, 2, '2021-12-17 08:28:53', '2021-12-17 08:28:53'),
(16, 20, 11, 25, '2021-2022', 1, 2, '2021-12-17 08:30:45', '2021-12-17 08:30:45'),
(17, 20, 11, 26, '2021-2022', 1, 2, '2021-12-17 08:30:45', '2021-12-17 08:30:45'),
(18, 20, 11, 27, '2021-2022', 1, 2, '2021-12-17 08:30:45', '2021-12-17 08:30:45'),
(19, 20, 11, 28, '2021-2022', 1, 2, '2021-12-17 08:30:45', '2021-12-17 08:30:45'),
(20, 21, 2, 25, '2021-2022', 1, 2, '2021-12-17 08:32:47', '2021-12-17 08:32:47'),
(21, 21, 2, 26, '2021-2022', 1, 2, '2021-12-17 08:32:47', '2021-12-17 08:32:47'),
(22, 21, 2, 27, '2021-2022', 1, 2, '2021-12-17 08:32:47', '2021-12-17 08:32:47'),
(23, 21, 2, 28, '2021-2022', 1, 2, '2021-12-17 08:32:47', '2021-12-17 08:32:47'),
(24, 22, 4, 25, '2021-2022', 1, 2, '2021-12-17 08:33:37', '2021-12-17 08:33:37'),
(25, 22, 4, 26, '2021-2022', 1, 2, '2021-12-17 08:33:37', '2021-12-17 08:33:37'),
(26, 22, 4, 27, '2021-2022', 1, 2, '2021-12-17 08:33:37', '2021-12-17 08:33:37'),
(27, 22, 4, 28, '2021-2022', 1, 2, '2021-12-17 08:33:37', '2021-12-17 08:33:37'),
(28, 23, 6, 25, '2021-2022', 1, 2, '2021-12-17 08:35:35', '2021-12-17 08:35:35'),
(29, 23, 6, 26, '2021-2022', 1, 2, '2021-12-17 08:35:35', '2021-12-17 08:35:35'),
(30, 23, 6, 27, '2021-2022', 1, 2, '2021-12-17 08:35:35', '2021-12-17 08:35:35'),
(31, 23, 6, 28, '2021-2022', 1, 2, '2021-12-17 08:35:35', '2021-12-17 08:35:35'),
(32, 36, 6, 25, '2021-2022', 1, 2, '2021-12-17 08:36:53', '2021-12-17 08:36:53'),
(33, 36, 6, 26, '2021-2022', 1, 2, '2021-12-17 08:36:53', '2021-12-17 08:36:53'),
(34, 36, 6, 27, '2021-2022', 1, 2, '2021-12-17 08:36:53', '2021-12-17 08:36:53'),
(35, 36, 6, 28, '2021-2022', 1, 2, '2021-12-17 08:36:53', '2021-12-17 08:36:53'),
(88, 32, 4, 33, '2021-2022', 3, 2, '2022-01-03 11:54:29', '2022-01-03 11:54:29'),
(89, 32, 4, 34, '2021-2022', 3, 2, '2022-01-03 11:54:50', '2022-01-03 11:55:26'),
(90, 32, 1, 35, '2021-2022', 3, 2, '2022-01-03 11:55:56', '2022-01-03 11:55:56'),
(91, 32, 1, 36, '2021-2022', 3, 2, '2022-01-03 11:56:10', '2022-01-03 11:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timedays`
--

CREATE TABLE `tbl_timedays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_timedays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_id` bigint(20) UNSIGNED DEFAULT NULL,
  `waktu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timenotavailable`
--

CREATE TABLE `tbl_timenotavailable` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hari_id` bigint(20) UNSIGNED DEFAULT NULL,
  `waktu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_timenotavailable`
--

INSERT INTO `tbl_timenotavailable` (`id`, `guru_id`, `hari_id`, `waktu_id`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 1, 2, '2021-12-12 03:07:24', '2021-12-12 03:07:24'),
(2, 8, 5, 12, 4, '2021-12-12 07:36:26', '2021-12-12 07:36:26'),
(3, 7, 1, 15, 2, '2021-12-13 06:57:16', '2021-12-13 06:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tingkat`
--

CREATE TABLE `tbl_tingkat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tingkat_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tingkat`
--

INSERT INTO `tbl_tingkat` (`id`, `tingkat_mapel`, `created_at`, `updated_at`) VALUES
(1, 'X RPL', '2021-12-11 19:07:48', '2021-12-11 19:07:48'),
(2, 'XI RPL', '2021-12-11 19:08:33', '2021-12-11 19:08:33'),
(3, 'XII RPL', '2021-12-11 19:08:33', '2021-12-11 19:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload_jadwal`
--

CREATE TABLE `tbl_upload_jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mata_pelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_upload_jadwal`
--

INSERT INTO `tbl_upload_jadwal` (`id`, `hari`, `waktu`, `pengajar`, `mata_pelajaran`, `kelas`, `ruangan`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Senin', '07:15 - 08:05', 'Riska', 'Fisika', 'X RPL 3', 'R01', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(2, 'Senin', '08:05 - 08:55', 'Roni', 'Kimia', 'X RPL 1', 'R01', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(3, 'Senin', '13:50 - 14:15', 'Kusmiadi, ST', 'Pemrograman Dasar', 'X RPL 4', 'R.Lab05', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(4, 'Senin', '13:25 - 15:05', 'Kusmiadi, ST', 'Dasar Desain Grafis', 'X RPL 2', 'R.Lab02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(5, 'Senin', '07:15 - 12:15', 'Ramdani, S.Kom', 'Pemrograman Web & Bergerak II', 'XII RPL 3', 'R.Lab02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(6, 'Selasa', '07:15 - 08:55', 'M Taufik Azhari S.T', 'Komputer & Jaringan Dasar', 'X RPL 3', 'R.Lab03', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(7, 'Selasa', '07:15 - 08:55', 'Kusmiadi, ST', 'Pemrograman Dasar', 'X RPL 2', 'R.Lab02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(8, 'Selasa', '09:20 - 10:10', 'Roni', 'Kimia', 'X RPL 4', 'R02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(9, 'Selasa', '09:20 - 11:00', 'H. Didin S, S.T\n', 'Siskomdig', 'X RPL 4', 'R.Lab05', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(10, 'Selasa', '09:20 - 11:00', 'M Taufik Azhari S.T', 'Komputer & Jaringan Dasar', 'X RPL 1', 'R.Lab04', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(11, 'Selasa', '11:00 - 12:40', 'Kusmiadi, ST', 'Dasar Desain Grafis', 'X RPL 3', 'R.Lab05', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(12, 'Selasa', '14:15 - 15:05', 'Riska', 'Fisika', 'X RPL 1', 'R01', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(13, 'Selasa', '07:15 - 12:15', 'M Taufik Azhari S.T', 'Pemrograman Web & Bergerak II', 'XII RPL 2', 'R.Lab02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(14, 'Rabu', '11:00 - 12:40', 'H. Didin S, S.T\n', 'Siskomdig', 'X RPL 1', 'R.Lab03', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(15, 'Rabu', '14:15 - 15:05', 'Riska', 'Fisika', 'X RPL 2', 'R01', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(16, 'Kamis', '09:20 - 11:00', 'M Taufik Azhari S.T', 'Komputer & Jaringan Dasar', 'X RPL 2', 'R.Lab03', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(17, 'Kamis', '09:20 - 11:00', 'Kusmiadi, ST', 'Pemrograman Dasar', 'X RPL 3', 'R.Lab05', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(18, 'Kamis', '09:20 - 11:00', 'H. Didin S, S.T\n', 'Siskomdig', 'X RPL 3', 'R.Lab02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(19, 'Kamis', '13:50 - 14:15', 'M Taufik Azhari S.T', 'Komputer & Jaringan Dasar', 'X RPL 4', 'R.Lab04', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(20, 'Kamis', '13:25 - 15:05', 'Kusmiadi, ST', 'Dasar Desain Grafis', 'X RPL 4', 'R.Lab04', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(21, 'Kamis', '13:25 - 15:05', 'Fitrianingsih, S.Kom', 'Sistem Komputer', 'X RPL 4', 'R.Lab02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(22, 'Kamis', '07:15 - 12:15', 'Ramdani, S.Kom', 'Pemrograman Web & Bergerak II', 'XII RPL 4', 'R.Lab04', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(23, 'Jumat', '07:15 - 08:55', 'Fitrianingsih, S.Kom', 'Sistem Komputer', 'X RPL 2', 'R.Lab03', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(24, 'Jumat', '07:40 - 08:30', 'Roni', 'Kimia', 'X RPL 3', 'R01', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(25, 'Jumat', '13:50 - 14:15', 'Kusmiadi, ST', 'Dasar Desain Grafis', 'X RPL 1', 'R.Lab02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(26, 'Jumat', '13:25 - 14:15', 'Roni', 'Kimia', 'X RPL 2', 'R02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(27, 'Jumat', '13:50 - 14:40', 'Riska', 'Fisika', 'X RPL 4', 'R01', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(28, 'Sabtu', '07:15 - 08:55', 'Kusmiadi, ST', 'Pemrograman Dasar', 'X RPL 1', 'R.Lab05', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(29, 'Sabtu', '09:20 - 11:00', 'H. Didin S, S.T\n', 'Siskomdig', 'X RPL 2', 'R.Lab05', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(30, 'Sabtu', '09:20 - 11:00', 'Fitrianingsih, S.Kom', 'Sistem Komputer', 'X RPL 1', 'R.Lab02', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(31, 'Sabtu', '13:50 - 14:15', 'Fitrianingsih, S.Kom', 'Sistem Komputer', 'X RPL 3', 'R.Lab05', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06'),
(32, 'Sabtu', '07:15 - 12:15', 'M Taufik Azhari S.T', 'Pemrograman Web & Bergerak II', 'XII RPL 1', 'R.Lab03', '1', '2022-01-31 12:50:06', '2022-01-31 12:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `alamat`, `no_hp`, `email_verified_at`, `password`, `level_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Akun Admin', 'admin@mail.com', 'SMK Marhas', '+62-897-555-041', NULL, '$2y$10$mT3L6Tg/pAtTTMvO/ewytOndF7y/Eyc6f0UHvAKbSmUhp4ha9XWW.', 1, NULL, '2021-11-29 09:27:26', '2021-11-29 09:27:26'),
(4, 'Endi', 'endi@gmail.com', 'SMK Marhas', '+62-897-555-041', NULL, '$2y$10$cB8zbaB3fLZ9xhtNmxiXnuUQ0OxhbnLXCLqyBNvaWqYvM71cOjJ1i', 2, NULL, '2021-12-11 14:16:41', '2021-12-11 14:16:41'),
(5, 'Mochamad Sidik, Amd.Kom', 'mochsidik@gmail.com', 'SMK Marhas', '+62-838-555-004', NULL, '$2y$10$dP7mctze4OGJiu40fyf.S.UpB2adrKN6jGXbMGRCtiB.M2sbRF6hm', 2, NULL, '2021-12-11 16:54:06', '2021-12-11 16:54:06'),
(6, 'Fitrianingsih, S.Kom', 'fitri@gmail.com', 'SMK Marhas', '+62-878-555-113', NULL, '$2y$10$fStEoFBwVXVOjtxWjZ7Hh.qP.EmNQmCB/jSlpmSpozi2BF4jQn0tC', 2, NULL, '2022-01-02 10:35:05', '2022-01-02 10:35:05'),
(8, 'Kusmiadi, ST', 'kusmiadi@gmail.com', 'SMK Marhas', '+62-898-555-295', NULL, '$2y$10$gzi8JCqLrMvKwjb2XvxnXO/vqLbqBWown0vP.nD.22Cqv1j4O1GMq', 1, NULL, '2022-01-25 03:18:14', '2022-01-25 03:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_waktu`
--

CREATE TABLE `tbl_waktu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_waktu`
--

INSERT INTO `tbl_waktu` (`id`, `kode_waktu`, `waktu_mulai`, `waktu_selesai`, `range`, `jumlah_jam`, `created_at`, `updated_at`) VALUES
(1, 'Waktu01', '07:15', '07:40', '07:15 - 07:40', 1, NULL, NULL),
(2, 'Waktu02', '07:15', '08:05', '07:15 - 08:05', 2, NULL, NULL),
(3, 'Waktu03', '07:15', '08:30', '07:15 - 08:30', 3, NULL, NULL),
(4, 'Waktu04', '07:15', '08:55', '07:15 - 08:55', 4, NULL, NULL),
(5, 'Waktu05', '07:40', '08:30', '07:40 - 08:30', 2, NULL, NULL),
(6, 'Waktu06', '07:40', '08:55', '07:40 - 08:55', 3, NULL, NULL),
(7, 'Waktu07', '08:05', '08:55', '08:05 - 08:55', 2, NULL, NULL),
(8, 'Waktu08', '09:20', '10:10', '09:20 - 10:10', 2, NULL, NULL),
(9, 'Waktu09', '09:20', '10:35', '09:20 - 10:35', 3, NULL, NULL),
(10, 'Waktu10', '09:20', '11:00', '09:20 - 11:00', 4, NULL, NULL),
(11, 'Waktu11', '11:00', '12:40', '11:00 - 12:40', 4, NULL, NULL),
(12, 'Waktu12', '09:20', '12:40', '09:20 - 12:40', 8, NULL, NULL),
(13, 'Waktu13', '13:00', '13:50', '13:00 - 13:50', 2, NULL, NULL),
(14, 'Waktu14', '13:00', '14:15', '13:00 - 14:15', 3, NULL, NULL),
(15, 'Waktu15', '13:00', '14:40', '13:50 - 14:15', 4, NULL, NULL),
(16, 'Waktu16', '13:25', '14:15', '13:25 - 14:15', 2, NULL, NULL),
(17, 'Waktu17', '13:25', '14:40', '13:25 - 14:40', 3, NULL, NULL),
(18, 'Waktu18', '13:25', '15:05', '13:25 - 15:05', 4, NULL, NULL),
(19, 'Waktu19', '13:50', '14:40', '13:50 - 14:40', 2, NULL, NULL),
(20, 'Waktu20', '13:50', '15:05', '13:50 - 15:05', 3, NULL, NULL),
(21, 'Waktu21', '14:15', '15:05', '14:15 - 15:05', 2, NULL, NULL),
(22, 'Waktu22', '07:15', '12:15', '07:15 - 12:15', 10, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hari`
--
ALTER TABLE `tbl_hari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_jadwal_teach_id_foreign` (`teach_id`),
  ADD KEY `tbl_jadwal_hari_id_foreign` (`hari_id`),
  ADD KEY `tbl_jadwal_waktu_id_foreign` (`waktu_id`),
  ADD KEY `tbl_jadwal_lab_id_foreign` (`lab_id`);

--
-- Indexes for table `tbl_jenis_mapel`
--
ALTER TABLE `tbl_jenis_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_kelas_kode_kelas_foreign` (`kode_kelas`);

--
-- Indexes for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_lab_jenis_lab_id_foreign` (`jenis_lab_id`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `tbl_mapel_tingkat_mapel_id_foreign` (`tingkat_mapel_id`),
  ADD KEY `tbl_mapel_semester_id_foreign` (`semester_id`),
  ADD KEY `tbl_mapel_jenis_mapel_id_foreign` (`jenis_mapel_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teach`
--
ALTER TABLE `tbl_teach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_teach_id_mapel_foreign` (`id_mapel`),
  ADD KEY `tbl_teach_id_guru_foreign` (`id_guru`),
  ADD KEY `tbl_teach_id_kelas_foreign` (`id_kelas`),
  ADD KEY `tbl_teach_id_user_foreign` (`id_user`);

--
-- Indexes for table `tbl_timedays`
--
ALTER TABLE `tbl_timedays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_timedays_hari_id_foreign` (`hari_id`),
  ADD KEY `tbl_timedays_waktu_id_foreign` (`waktu_id`);

--
-- Indexes for table `tbl_timenotavailable`
--
ALTER TABLE `tbl_timenotavailable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_timenotavailable_guru_id_foreign` (`guru_id`),
  ADD KEY `tbl_timenotavailable_hari_id_foreign` (`hari_id`),
  ADD KEY `tbl_timenotavailable_waktu_id_foreign` (`waktu_id`),
  ADD KEY `tbl_timenotavailable_id_user_foreign` (`id_user`);

--
-- Indexes for table `tbl_tingkat`
--
ALTER TABLE `tbl_tingkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upload_jadwal`
--
ALTER TABLE `tbl_upload_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_users_email_unique` (`email`),
  ADD KEY `tbl_users_level_id_foreign` (`level_id`);

--
-- Indexes for table `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_hari`
--
ALTER TABLE `tbl_hari`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `tbl_jenis_mapel`
--
ALTER TABLE `tbl_jenis_mapel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_teach`
--
ALTER TABLE `tbl_teach`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_timedays`
--
ALTER TABLE `tbl_timedays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_timenotavailable`
--
ALTER TABLE `tbl_timenotavailable`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_tingkat`
--
ALTER TABLE `tbl_tingkat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_upload_jadwal`
--
ALTER TABLE `tbl_upload_jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD CONSTRAINT `tbl_jadwal_hari_id_foreign` FOREIGN KEY (`hari_id`) REFERENCES `tbl_hari` (`id`),
  ADD CONSTRAINT `tbl_jadwal_lab_id_foreign` FOREIGN KEY (`lab_id`) REFERENCES `tbl_lab` (`id`),
  ADD CONSTRAINT `tbl_jadwal_teach_id_foreign` FOREIGN KEY (`teach_id`) REFERENCES `tbl_teach` (`id`),
  ADD CONSTRAINT `tbl_jadwal_waktu_id_foreign` FOREIGN KEY (`waktu_id`) REFERENCES `tbl_waktu` (`id`);

--
-- Constraints for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD CONSTRAINT `tbl_kelas_kode_kelas_foreign` FOREIGN KEY (`kode_kelas`) REFERENCES `tbl_tingkat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  ADD CONSTRAINT `tbl_lab_jenis_lab_id_foreign` FOREIGN KEY (`jenis_lab_id`) REFERENCES `tbl_jenis_mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD CONSTRAINT `tbl_mapel_jenis_mapel_id_foreign` FOREIGN KEY (`jenis_mapel_id`) REFERENCES `tbl_jenis_mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_mapel_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `tbl_semester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_mapel_tingkat_mapel_id_foreign` FOREIGN KEY (`tingkat_mapel_id`) REFERENCES `tbl_tingkat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_teach`
--
ALTER TABLE `tbl_teach`
  ADD CONSTRAINT `tbl_teach_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `tbl_guru` (`id`),
  ADD CONSTRAINT `tbl_teach_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id`),
  ADD CONSTRAINT `tbl_teach_id_mapel_foreign` FOREIGN KEY (`id_mapel`) REFERENCES `tbl_mapel` (`id_mapel`),
  ADD CONSTRAINT `tbl_teach_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_timedays`
--
ALTER TABLE `tbl_timedays`
  ADD CONSTRAINT `tbl_timedays_hari_id_foreign` FOREIGN KEY (`hari_id`) REFERENCES `tbl_hari` (`id`),
  ADD CONSTRAINT `tbl_timedays_waktu_id_foreign` FOREIGN KEY (`waktu_id`) REFERENCES `tbl_waktu` (`id`);

--
-- Constraints for table `tbl_timenotavailable`
--
ALTER TABLE `tbl_timenotavailable`
  ADD CONSTRAINT `tbl_timenotavailable_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `tbl_guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_timenotavailable_hari_id_foreign` FOREIGN KEY (`hari_id`) REFERENCES `tbl_hari` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_timenotavailable_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_timenotavailable_waktu_id_foreign` FOREIGN KEY (`waktu_id`) REFERENCES `tbl_waktu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `tbl_level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
