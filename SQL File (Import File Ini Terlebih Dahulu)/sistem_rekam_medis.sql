-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2023 at 08:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `icd10s`
--

CREATE TABLE `icd10s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icd10s`
--

INSERT INTO `icd10s` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'A00', 'Kolera', '2023-02-18 02:07:47', '2023-02-18 02:07:47'),
(2, 'A01', 'Demam Tifus', '2023-02-18 02:08:02', '2023-02-18 02:08:02'),
(3, 'A15', 'Tuberkulosis respirasi', '2023-02-18 02:08:32', '2023-02-18 02:08:32'),
(4, 'A22', 'Anthrax', '2023-02-18 02:08:55', '2023-02-18 02:08:55'),
(5, 'A35', 'Tetanus', '2023-02-18 02:09:13', '2023-02-18 02:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `keluhans`
--

CREATE TABLE `keluhans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `icd10_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `poli_id` bigint(20) UNSIGNED NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tindakan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluhans`
--

INSERT INTO `keluhans` (`id`, `pasien_id`, `icd10_id`, `dokter_id`, `poli_id`, `keluhan`, `tindakan`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 4, 1, 'Sakit Kepala', NULL, '2023-02-18 02:13:00', '2023-02-18 02:13:00'),
(2, 2, 2, 3, 2, 'Sakit Gigi', 'Beri Obat', '2023-02-18 02:14:05', '2023-02-18 02:16:33'),
(3, 3, NULL, 2, 3, 'Demam', NULL, '2023-02-18 02:29:53', '2023-02-18 02:29:53'),
(4, 3, NULL, 2, 3, 'Diare', NULL, '2023-02-18 02:30:08', '2023-02-18 02:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan_obat`
--

CREATE TABLE `keluhan_obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keluhan_id` bigint(20) UNSIGNED NOT NULL,
  `obat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluhan_obat`
--

INSERT INTO `keluhan_obat` (`id`, `keluhan_id`, `obat_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_02_14_101442_pasien', 1),
(5, '2023_02_14_102424_poli', 1),
(6, '2023_02_14_102530_icd10', 1),
(7, '2023_02_14_102724_obat', 1),
(8, '2023_02_14_122533_user', 1),
(9, '2023_02_14_122912_keluhan', 1),
(10, '2023_02_16_065222_obat_keluhan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obats`
--

CREATE TABLE `obats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_obat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obats`
--

INSERT INTO `obats` (`id`, `nama`, `jenis_obat`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Acarbose', 'Antidiabetes', 'Mengontrol kadar gula dalam darah pada penderita diabetes tipe 2', '2023-02-18 01:56:46', '2023-02-18 01:56:46'),
(2, 'Acetazolamide', 'Diuretik', 'Mengobati glaukoma, edema, epilepsi, dan altitude sickness', '2023-02-18 02:04:35', '2023-02-18 02:04:35'),
(3, 'Aclidinium', 'Bronkodilator', 'Meredakan gejala PPOK', '2023-02-18 02:05:05', '2023-02-18 02:05:05'),
(4, 'Adalimumab', 'DMARDs', 'Meredakan gejala peradangan pada penyakit rheumatoid arthritis', '2023-02-18 02:06:00', '2023-02-18 02:06:24'),
(5, 'Alprazolam', 'Benzodiazepine', 'Mengatasi gangguan kecemasan dan gangguan panik', '2023-02-18 02:07:04', '2023-02-18 02:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nKepalaKeluarga` varchar(255) NOT NULL,
  `nIbuKandung` varchar(255) NOT NULL,
  `kode_desa` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `tglLahir` date NOT NULL,
  `jk` char(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `noTelp` varchar(255) NOT NULL,
  `jenis_asuransi` varchar(255) NOT NULL,
  `no_kartu` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id`, `nama`, `nKepalaKeluarga`, `nIbuKandung`, `kode_desa`, `nik`, `agama`, `tglLahir`, `jk`, `status`, `pekerjaan`, `alamat`, `noTelp`, `jenis_asuransi`, `no_kartu`, `created_at`, `updated_at`) VALUES
(1, 'Ari Medina S.', 'Sangkala', 'Mumang', '001', '0000000000000000', 'Islam', '2003-05-10', 'l', 'Belum Menikah', 'Mahasiswa', 'Hertasning', '0000000000', 'Umum', NULL, '2023-02-18 01:57:22', '2023-02-18 02:02:27'),
(2, 'Melinda', 'Mamat', 'Liska', '002', '0000000000000001', 'Kristen', '2002-10-05', 'p', 'Belum Menikah', 'Mahasiswa', 'BTP', '0000000000', 'BPJS', '0000000000000', '2023-02-18 02:01:58', '2023-02-18 02:01:58'),
(3, 'Alisya', 'Dedi Mahendra', 'Natasya', '001', '0000000000000003', 'Islam', '2010-04-10', 'p', 'Belum Menikah', 'Pelajar', 'Hartaco', '0000000000', 'BPJS', '000000000000', '2023-02-18 02:29:39', '2023-02-18 02:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polis`
--

CREATE TABLE `polis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polis`
--

INSERT INTO `polis` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Umum', '2023-02-18 02:03:29', '2023-02-18 02:03:29'),
(2, 'Gigi', '2023-02-18 02:03:36', '2023-02-18 02:03:36'),
(3, 'MTBS/Anak', '2023-02-18 02:03:50', '2023-02-18 02:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `poli_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `jabatan`, `poli_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admpuskesmaswp@gmail.com', '$2y$10$hJXM1VX4m/OgW8vmnHqrs.oB0g4VKzh1TeAe41mEuiyNd6zziq1ty', 'admin', NULL, NULL, NULL),
(2, 'Dr. Dasril', 'dasriltribula@gmail.com', '$2y$10$S0yXEzAX7/u9uKfv7tQx0Ou/N19EJuD7Ig9qkwa8SF51bp2gSPtCC', 'dokter', 3, '2023-02-18 02:09:51', '2023-02-18 02:09:51'),
(3, 'Drg. Heri', 'herikinanjar10@gmail.com', '$2y$10$7GnfhVApGShUXEiOPciAy.xJlhU63fbiXLHmfMguu80xpkrMT/K4C', 'dokter', 2, '2023-02-18 02:10:05', '2023-02-18 02:10:05'),
(4, 'Dr. Toto', 'totomusharif@gmail.com', '$2y$10$gIQdRUm0drnce9XNdDHZ4.B9eXukXmgucZhSGkRrS.hqNlKME/sw.', 'dokter', 1, '2023-02-18 02:10:39', '2023-02-18 02:10:39');

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
-- Indexes for table `icd10s`
--
ALTER TABLE `icd10s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhans`
--
ALTER TABLE `keluhans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keluhans_poli_id_foreign` (`poli_id`),
  ADD KEY `keluhans_pasien_id_foreign` (`pasien_id`),
  ADD KEY `keluhans_icd10_id_foreign` (`icd10_id`),
  ADD KEY `keluhans_dokter_id_foreign` (`dokter_id`);

--
-- Indexes for table `keluhan_obat`
--
ALTER TABLE `keluhan_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keluhan_obat_keluhan_id_foreign` (`keluhan_id`),
  ADD KEY `keluhan_obat_obat_id_foreign` (`obat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pasiens_nik_unique` (`nik`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `polis`
--
ALTER TABLE `polis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_poli_id_foreign` (`poli_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `icd10s`
--
ALTER TABLE `icd10s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keluhans`
--
ALTER TABLE `keluhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keluhan_obat`
--
ALTER TABLE `keluhan_obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `obats`
--
ALTER TABLE `obats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polis`
--
ALTER TABLE `polis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluhans`
--
ALTER TABLE `keluhans`
  ADD CONSTRAINT `keluhans_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `keluhans_icd10_id_foreign` FOREIGN KEY (`icd10_id`) REFERENCES `icd10s` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `keluhans_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `pasiens` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `keluhans_poli_id_foreign` FOREIGN KEY (`poli_id`) REFERENCES `polis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `keluhan_obat`
--
ALTER TABLE `keluhan_obat`
  ADD CONSTRAINT `keluhan_obat_keluhan_id_foreign` FOREIGN KEY (`keluhan_id`) REFERENCES `keluhans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `keluhan_obat_obat_id_foreign` FOREIGN KEY (`obat_id`) REFERENCES `obats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_poli_id_foreign` FOREIGN KEY (`poli_id`) REFERENCES `polis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
