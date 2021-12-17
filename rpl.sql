-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 09:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surats`
--

CREATE TABLE `jenis_surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_surat` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_surats`
--

INSERT INTO `jenis_surats` (`id`, `kode_surat`, `jenis`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Surat Personalia & SK', 'Untuk membuat surat yang berkaitan dengan personalia & SK', NULL, NULL),
(2, 'B', 'Surat Keterangan Kegiatan', 'Untuk membuat surat keterangan kegiatan mahasiswa & dosen', NULL, NULL),
(3, 'C', 'Surat Undangan & Daftar Hadir Kegiatan', 'Untuk membuat surat undangan, daftar hadir kegiatan', NULL, NULL),
(4, 'D', 'Surat Tugas & DP3', 'Untuk membuat surat tugas dan DP3', NULL, NULL),
(5, 'E', 'Berita Acara Kegiatan', 'Untuk membuat Berita Acara Kegiatan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_29_203324_create_pengajuan_surats_table', 1),
(6, '2021_11_29_204155_create_jenis_surats_table', 1),
(7, '2021_11_29_204345_create_pejabats_table', 1),
(8, '2021_11_29_205430_add_relationship_to_pengajuan_surat_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pejabats`
--

CREATE TABLE `pejabats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pejabats`
--

INSERT INTO `pejabats` (`id`, `name`, `posisi`, `nik`, `ttd`, `created_at`, `updated_at`) VALUES
(1, 'Restyandito, S.Kom., MSIS, Ph.D.', 'Dekan', '3000800020210001', 'ttd_qrcode.png', NULL, NULL),
(2, 'Gloria Virginia, S.Kom., MAI, Ph.D.', 'Wakil Dekan I  Bidang Akademik', '3000800020210002', 'ttd_qrcode.png', NULL, NULL),
(3, 'Drs. Jong Jek Siang, M.Sc.', 'Wakil Dekan I Bidang Akademik ', '3000800020210003', 'ttd_qrcode.png', NULL, NULL),
(4, 'Widi Hapsari, Dra., M.T.', 'Wakil Dekan II Bidang Keuangan', '3000800020210004', 'ttd_qrcode.png', NULL, NULL),
(5, 'Willy Sudiarto Raharjo, S.Kom., M.Cs.', 'Wakil Dekan III Bidang Kemahasiswaan', '3000800020210005', 'ttd_qrcode.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surats`
--

CREATE TABLE `pengajuan_surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_id` bigint(20) UNSIGNED NOT NULL,
  `pejabat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nomor_surat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `sebagai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mitra` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tema` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ni_ang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peserta` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktuml` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktusls` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menimbang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mengingat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menetapkan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_tolak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan_surats`
--

INSERT INTO `pengajuan_surats` (`id`, `user_id`, `jenis_id`, `pejabat_id`, `nomor_surat`, `tanggal`, `sebagai`, `nama_mitra`, `tema`, `lokasi`, `keterangan`, `status`, `validasi`, `ni_ang`, `nama_ang`, `peserta`, `waktuml`, `waktusls`, `menimbang`, `mengingat`, `menetapkan`, `ket_tolak`, `created_at`, `updated_at`) VALUES
(127, 4, 4, 1, '127/D/FTI/2021', '2021-12-17', 'Delegasi HMSI', 'IMSII', 'Webinar Teknologi', 'Jakarta', 'webinar aja sih', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 22:21:41', '2021-12-16 22:27:44'),
(128, 4, 4, 3, '128/D/FTI/2021', '2021-12-17', 'Volunteer', 'Bank Sampah', 'Go green', 'Kulon Progo', 'edukasi masyarakat tentang pengolahan limbah', '1', '1', '72190276,72190280,72190277', 'Rosalia Natasha,Christian Octavico,Veronica Verasita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 22:24:40', '2021-12-16 22:40:12'),
(130, 5, 1, 5, '130/A/FTI/2021', '2021-12-17', NULL, 'GKJ Sawo Kembar', NULL, 'Depan UKDW', 'P3DM', '1', '1', '72190276,72190278', 'Rosalia Natasha,Gracia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 22:33:45', '2021-12-16 22:40:59'),
(131, 5, 1, 1, '131/A/FTI/2021', '2021-12-17', NULL, NULL, 'Blended Learning', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, '<ol><li><span style=\"font-size: 1rem;\">Undang-undang Republik Indonesia Nomor 14 Tahun 2004 tentang Guru dan Dosen.</span></li><li>Peraturan Pemerintah RI Nomor 37 Tahun 2009 tentang Dosen (lembaran Negara Republik Indonesia dan tambahan Lembaran Negara Republik Indonesia Nomor 5007).</li><li>Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 17 Tahun 2013 tentang Jabatan Fungsional Dosen dan Angka Kreditnya.</li><li>Statuta Universitas Kristen Duta Wacana Yogyakarta tahun 2010 dengan nomor QADW-110-SU-10.01.001 Bab 4 Pasal 33.</li><li>Kebijakan Akademik Universitas Kristen Duta Wacana Yogyakarta tahun 2008-2013.</li><li>Peraturan Akademik Universitas Kristen Duta Wacana tahun 2009-2014 Bab 3 pasal 5.</li></ol>', '<ol><li>Bahwa untuk kelancaran perkuliahan dan dukungan penuh pelaksanaan penelitian dosen dan mahasiswa pada fasilitas Laboratorium, dipandang perlu adanya koordinator laboratorium Fakultas Teknologi Informasi (FTI) Universitas Kristen Duta Wacana (UKDW) Yogyakarta;</li><li>Bahwa tugas sebagai koordinator laboratorium adalah tugas penunjang yang meliputi pengembangan laboratorium, mendukung komunitas penelitian dosen dan mahasiswa, dan pengaturan penggunaan laboratorium bagi dosen dan mahasiswa;</li></ol>', '<p>Pertama : Terhitung mulai tanggal 31 Desember 2018 membebas tugaskan Umi Proboyekti, S.Kom., MLIS. sebagai Koordinator Laboratorium FTI UKDW, serta kepada beliau disampaikan penghargaan dan ucapan terimakasih atas jasa-jasanya selama menjalankan tugas tersebut.</p><p>Kedua : Terhitung mulai tanggal 1 Januari 2019 - 31 Desember 2019 mengangkat Umi Proboyekti, S.Kom., MLIS. sebagai Koordinator Pengelolaan Tenaga Volunteer Laboratorium FTI UKDW.</p><p>&nbsp;Ketiga : Berkaitan dengan beban kerja yang ditugaskan, kepada Koordinator Laboratorium FTI UKDW diberikan penghargaan sebesar 1 sks per semester.</p><p>Keempat : Apabila di kemudian hari ternyata terdapat kekeliruan dalam surat keputusan ini, maka akan dilakukan perbaikan sebagaimana mestinya.</p>', NULL, '2021-12-16 22:39:34', '2021-12-16 22:39:52'),
(132, 5, 5, 2, '132/E/FTI/2021', '2021-12-17', NULL, NULL, 'Natal', 'ukdw', 'natal', '1', '1', NULL, NULL, '171', NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 22:43:15', '2021-12-16 22:45:27'),
(133, 2, 2, 5, '133/B/FTI/2021', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 22:43:37', '2021-12-16 22:45:36'),
(134, 5, 3, 4, '134/C/FTI/2021', '2021-12-17', NULL, 'saya', 'cara membunuh', 'Yogya', NULL, '1', '1', '72190289,72190276', 'Steven Singging,Rosalia Natasha', NULL, '12:45', NULL, NULL, NULL, NULL, NULL, '2021-12-16 22:44:49', '2021-12-16 22:45:50'),
(135, 5, 3, 5, '135/C/FTI/2021', '2021-12-17', NULL, 'saya', 'cara membunuh', 'Yogya', NULL, '1', '1', '72190289,72190276', 'Steven Singging,Rosalia Natasha', NULL, '12:45', NULL, NULL, NULL, NULL, NULL, '2021-12-16 22:44:50', '2021-12-16 22:46:21'),
(136, 5, 3, 4, '136/C/FTI/2021', '2021-12-17', 'Volunteer', 'HMSI', 'How to become a pro player', 'Kulon Progo', NULL, '1', '1', NULL, NULL, NULL, '12:54', '12:54', NULL, NULL, NULL, NULL, '2021-12-16 22:51:02', '2021-12-16 22:51:20'),
(137, 6, 2, 3, '137/B/FTI/2021', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rosa aswa', '2021-12-16 22:57:03', '2021-12-17 01:12:36'),
(138, 5, 1, 4, '138/A/FTI/2021', '2021-12-17', NULL, 'HMSI', NULL, 'Kulon Progo', 'Workshop', '1', '1', '72190289,72190288', 'Steven Singging Setiawan,Steven Singging', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-17 00:44:54', '2021-12-17 00:46:30'),
(139, 5, 1, 2, '139/A/FTI/2021', '2021-12-24', NULL, 'Bethari Ndaru', NULL, 'Denggung, Sleman', 'Workshop Sabun 1', '1', '1', '3000800020210006', 'Steven Singging Setiawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-17 01:00:31', '2021-12-17 01:01:00'),
(140, 5, 1, 1, '140/A/FTI/2021', '2021-12-24', NULL, NULL, 'How to become a pro player', NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, '<p>---------</p>', '<p>----------------</p>', '<p>------------</p>', NULL, '2021-12-17 01:06:15', '2021-12-17 01:06:28'),
(141, 5, 3, 2, '141/C/FTI/2021', '2021-12-24', 'Pembicara', 'HMSI', 'How to become a pro player', 'Jakarta', NULL, '1', '1', NULL, NULL, NULL, '15:09', '15:10', NULL, NULL, NULL, NULL, '2021-12-17 01:07:43', '2021-12-17 01:07:57'),
(142, 6, 4, NULL, NULL, '2021-12-24', 'Pembicara', 'HMSI', 'How to become a pro player', 'Jakarta', 'webinar aja sih', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-17 01:09:41', '2021-12-17 01:23:36'),
(143, 6, 4, 2, '143/D/FTI/2021', '2021-12-24', 'Pembicara', 'Rosa', 'How to become a pro player', 'Kulon Progo', 'webinar aja sih', '1', '1', '72190289', 'Steven Singging Setiawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-17 01:10:11', '2021-12-17 01:12:14'),
(144, 6, 2, 2, '144/B/FTI/2021', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-17 01:10:19', '2021-12-17 01:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `niuser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `niuser`, `name`, `level`, `prodi`, `semester`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '72190339', 'William Theodorus', 'mahasiswa', 'Sistem Informasi', '5 (Lima)', 'william@gmail.com', NULL, '$2y$10$bH7fjDTe8c1/rTySiE0l9.u9VO9jT.mZ3uvFFkldDWGX42xnlP9k6', NULL, '2021-12-02 12:33:03', '2021-12-02 12:33:03'),
(2, '72190289', 'Steven Singging Setiawan', 'mahasiswa', 'Sistem Informasi', '5 (Lima)', 'steven@gmail.com', NULL, '$2y$10$00BoBAH4eszboHABLi0efeFb3kdMUJrtOmYsMs/jKRR1XkSqZFAw2', NULL, '2021-12-05 10:14:25', '2021-12-05 10:14:25'),
(3, '301', 'Magdalena Evelyn Halim', 'admin', NULL, NULL, 'magdalena@gmail.com', NULL, '$2y$10$kBVL3Rx4/CnKw23BUUWKguOS2fpJDpbwmwe1oA9oSs8ZNXdGNFnK2', NULL, '2021-12-05 22:24:02', '2021-12-05 22:24:02'),
(4, '72190278', 'Arsyadhelsing', 'mahasiswa', 'Sistem Informasi', '5 (Lima)', 'stevensingging@gmail.com', NULL, '$2y$10$WuOcSfJ5zBNR.wXxI2iEAe51V3riX1cEojFehzI6HyFZVTpJbG8ES', NULL, '2021-12-06 09:28:30', '2021-12-06 09:28:30'),
(5, '2009017502', 'Zerlinda', 'admin', NULL, NULL, 'zerlinda@gmail.com', NULL, '$2y$10$MoiKiP1RX5gkPQxiY7R2i.SQ9f6DTlGr2eXft27K8BTGcUxty1NWy', NULL, '2021-12-06 10:22:49', '2021-12-06 10:22:49'),
(6, '2009017502', 'Paijo', 'dosen', 'Sistem Informasi', '5 (Lima)', 'paijo@gmail.com', NULL, '$2y$10$STtAGWrQiwkFfMmAnY9hLelTtRDZTlewugJ9F78fjDeJiiy9usHgu', NULL, '2021-12-06 11:17:02', '2021-12-06 11:17:02'),
(7, '000008', 'Baka', '', NULL, NULL, '', NULL, '', NULL, NULL, NULL);

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
-- Indexes for table `jenis_surats`
--
ALTER TABLE `jenis_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pejabats`
--
ALTER TABLE `pejabats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_surats`
--
ALTER TABLE `pengajuan_surats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajuan_surats_user_id_foreign` (`user_id`),
  ADD KEY `pengajuan_surats_jenis_id_foreign` (`jenis_id`),
  ADD KEY `pengajuan_surats_pejabat_id_foreign` (`pejabat_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_surats`
--
ALTER TABLE `jenis_surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pejabats`
--
ALTER TABLE `pejabats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengajuan_surats`
--
ALTER TABLE `pengajuan_surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuan_surats`
--
ALTER TABLE `pengajuan_surats`
  ADD CONSTRAINT `pengajuan_surats_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_surats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_surats_pejabat_id_foreign` FOREIGN KEY (`pejabat_id`) REFERENCES `pejabats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_surats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
