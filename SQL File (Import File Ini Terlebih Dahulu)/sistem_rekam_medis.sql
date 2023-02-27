-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2023 at 07:49 PM
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
  `subnama` varchar(10) DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icd10s`
--

INSERT INTO `icd10s` (`id`, `nama`, `subnama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Z00', '', 'Pemeriksaan dan penyelidikan umum pada orang-orang tanpa keluhan a', NULL, NULL),
(2, 'Z01', '', 'Pemeriksaan dan penyelidikan khusus lain pada orang-orang tanpa keluh', NULL, NULL),
(3, 'Z02', '', 'Pemeriksaan dan pertemuan untuk tujuan administratif', NULL, NULL),
(4, 'Z03', '', 'Observasi dan evaluasi medis untuk penyaki-penyakit dan kondisi-kondis', NULL, NULL),
(5, 'Z04', '', 'Pemeriksaan dan observasi untuk alasan-alasan lain', NULL, NULL),
(6, 'Z08', '', 'Pemeriksaan lanjutan sesudah pengobatan untuk neoplasma ganas', NULL, NULL),
(7, 'Z09', '', 'Pemeriksaan lanjutan sesudah pengobatan untuk kondisi-kondisi lain sel', NULL, NULL),
(8, 'Z10', '', 'Pemeriksaan kesehatan umum rutin pada suatu subpopulasi', NULL, NULL),
(9, 'Z11', '', 'Pemeriksaan skrining khusus untuk penyakit infeksi dan parasit', NULL, NULL),
(10, 'Z12', '', 'Pemeriksaan skrining khusus untuk neoplasma', NULL, NULL),
(11, 'Z13', '', 'Pemeriksaan skrining khusus untuk penyakit dan kelainan-kelainan lain', NULL, NULL),
(12, 'Z20', '', 'Kontak dengan dan terpapar oleh penyakit menular', NULL, NULL),
(13, 'Z21', '', 'Status infeksi asimptomatik virus yang melemahkan kekebalan tubuh ma', NULL, NULL),
(14, 'Z22', '', ' Pembawa penyakit infeksi', NULL, NULL),
(15, 'Z23', '', 'Perlu imunisasi untuk melawan penyakit bakteri tunggal', NULL, NULL),
(16, 'Z24', '', 'Perlu imunisasi untuk melawan penyakit virus tunggal pasti', NULL, NULL),
(17, 'Z25', '', 'Perlu imunisasi untuk melawan penyakit virus tunggal lain', NULL, NULL),
(18, 'Z26', '', 'Perlu imunisasi untuk melawan penyakit infeksi tunggal lainnya', NULL, NULL),
(19, 'Z27', '', 'Perlu imunisasi untuk melawan kombinasi-kombinasi penyakit infeksi', NULL, NULL),
(20, 'A00', '', 'Kolera', NULL, NULL),
(21, 'A00', '0', 'Kolera yang disebabkan oleh Vibrio cholerae 01, biovar cholerae', NULL, NULL),
(22, 'A00', '1', 'Kolera yang disebabkan oleh Vibrio cholerae 01, biovar el tor', NULL, NULL),
(23, 'A00', '9', 'Kolera, tidak terspesifikasi', NULL, NULL),
(24, 'A01', '', 'Demam tifoid dan paratifoid', NULL, NULL),
(25, 'A01', '0', 'Demam tifoid', NULL, NULL),
(26, 'A01', '1', 'Demam paratifoid A', NULL, NULL),
(27, 'A01', '2', 'Demam paratifoid B', NULL, NULL),
(28, 'A01', '3', 'Demam paratifoid C', NULL, NULL),
(29, 'A01', '4', 'Demam paratifoid, tidak terspesifikasi', NULL, NULL),
(30, 'A02', '', 'Infeksi salmonella lainnya', NULL, NULL),
(31, 'A02', '0', 'Salmonella gastroenteritis', NULL, NULL),
(32, 'A02', '1', 'Salmonella septikemia', NULL, NULL),
(33, 'A02', '2', 'Infeksi salmonella lokal', NULL, NULL),
(34, 'A02', '8', 'Infeksi salmonella spesifik lainnya', NULL, NULL),
(35, 'A02', '9', 'Infeksi salmonella, tidak terspesifikasi', NULL, NULL),
(36, 'A03', '', 'Shigellosis', NULL, NULL),
(37, 'A03', '0', 'Shigellosis yang disebabkan oleh Shigella dysentriae', NULL, NULL),
(38, 'A03', '1', 'Shigellosis yang disebabkan oleh Shigella flexneri', NULL, NULL),
(39, 'A03', '2', 'Shigellosis yang disebabkan oleh Shigella boydii', NULL, NULL),
(40, 'A03', '3', 'Shigellosis yang disebabkan oleh Shigella sonnei', NULL, NULL),
(41, 'A03', '8', 'Shigellosis lainnya', NULL, NULL),
(42, 'A03', '9', 'Shigellosis, tidak terspesifikasi', NULL, NULL),
(43, 'A04', '', 'Infeksi bakteri usus lainnya', NULL, NULL),
(44, 'A04', '0', 'Infeksi Escherichia coli enteropatogenik', NULL, NULL),
(45, 'A04', '1', 'Infeksi Escherichia coli enterotoksigenik', NULL, NULL),
(46, 'A04', '2', 'Infeksi Escherichia coli enteroinvasif', NULL, NULL),
(47, 'A04', '3', 'Infeksi Escherichia coli enterohemoragik', NULL, NULL),
(48, 'A04', '4', 'Infeksi Escherichia coli lain', NULL, NULL),
(49, 'A04', '5', 'Kampilobakter enteritis', NULL, NULL),
(50, 'A04', '6', 'Enteritis yang disebabkan oleh Yersinia enterocolitica', NULL, NULL),
(51, 'A04', '7', 'Enterokolitis yang disebabkan oleh Clostridium difficile', NULL, NULL),
(52, 'A04', '8', 'Infeksi bakteri usus spesifik lainnya', NULL, NULL),
(53, 'A04', '9', 'Infeksi bakteri usus, tidak terspesifikasi', NULL, NULL),
(54, 'A05', '', 'Intoksikasi (keracunan) bakteri (yang ditularkan lewat) makanan lainnya', NULL, NULL),
(55, 'A05', '0', 'Intoksikasi (keracunan) stafilokokus melalui makanan', NULL, NULL),
(56, 'A05', '1', 'Botulism', NULL, NULL),
(57, 'A05', '2', 'Intoksikasi (keracunan) Clostridium perfringens [Clostridium welchii] mela', NULL, NULL),
(58, 'A05', '3', 'Intoksikasi (keracunan) Vibrio parahemolyticus melalui makanan', NULL, NULL),
(59, 'A05', '4', 'Intoksikasi (keracunan) Bacillus cereus melalui makanan', NULL, NULL),
(60, 'A05', '8', 'Intoksikasi (keracunan) bakteri spesifik lainnya melalui makanan', NULL, NULL),
(61, 'A05', '9', 'Intoksikasi (keracunan) bakteri melalui makanan, tidak terspesifikasi', NULL, NULL),
(62, 'A06', '', 'Amubiasis', NULL, NULL),
(63, 'A06', '0', 'Disenteri amuba akut', NULL, NULL),
(64, 'A06', '1', 'Amebiasis (amubiasis) usus kronik', NULL, NULL),
(65, 'A06', '2', 'Kolitis nondisenteri amuba', NULL, NULL),
(66, 'A06', '3', 'Ameboma usus', NULL, NULL),
(67, 'B00', '', 'Infeksi virus herpes [herpes simpleks]', NULL, NULL),
(68, 'B00', '0', 'Eczema herpeticum', NULL, NULL),
(69, 'B00', '1', 'Dermatitis vesikular yang disebabkan oleh virus herpes', NULL, NULL),
(70, 'B00', '2', 'Gingivostomatitis dan faringotonsilitis yang disebabkan oleh virus herpes', NULL, NULL),
(71, 'B00', '3', 'Meningitis yang disebabkan oleh virus herpes', NULL, NULL),
(72, 'B00', '4', 'Ensefalitis yang disebabkan oleh virus herpes', NULL, NULL),
(73, 'B00', '5', 'Penyakit mata (okular) yang disebabkan oleh virus herpes', NULL, NULL),
(74, 'B00', '7', 'Penyakit yang disebabkan oleh virus herpes menyebar', NULL, NULL),
(75, 'B00', '8', 'Bentuk-bentuk lain dari infeksi virus herpes', NULL, NULL),
(76, 'B00', '9', 'Infeksi herpes virus, tidak terspesifikasi', NULL, NULL),
(77, 'B01', '', 'Cacar air', NULL, NULL),
(78, 'B01', '0', 'Meningitis cacar air', NULL, NULL),
(79, 'B01', '1', 'Ensefalitis cacar air', NULL, NULL),
(80, 'B01', '2', 'Pneumonia cacar air', NULL, NULL),
(81, 'B01', '8', 'Cacar air dengan komplikasi lain', NULL, NULL),
(82, 'B01', '9', 'Cacar air tanpa komplikasi', NULL, NULL),
(83, 'B02', '', 'Zoster [herpes zoster]', NULL, NULL),
(84, 'B02', '0', 'Ensefalitis zoster', NULL, NULL),
(85, 'B02', '1', 'Meningitis zoster', NULL, NULL),
(86, 'B02', '2', 'Zoster dengan keterlibatan sistem saraf lain', NULL, NULL),
(87, 'B02', '3', 'Penyakit mata (okular) zoster', NULL, NULL),
(88, 'B02', '7', 'Zoster yang meluas', NULL, NULL),
(89, 'B02', '8', 'Zoster dengan komplikasi lain', NULL, NULL),
(90, 'B02', '9', 'Zoster tanpa komplikasi', NULL, NULL),
(91, 'B03', '', 'Cacar', NULL, NULL),
(92, 'B04', '', 'Cacar monyet', NULL, NULL),
(93, 'B05', '', 'Campak', NULL, NULL),
(94, 'B05', '0', 'Campak dengan komplikasi ensefalitis', NULL, NULL),
(95, 'B05', '1', 'Campak dengan komplikasi meningitis', NULL, NULL),
(96, 'C00', '', 'Neoplasma ganas pada bibir', NULL, NULL),
(97, 'C00', '0', 'Neoplasma ganas pada bibir atas', NULL, NULL),
(98, 'C00', '1', 'Neoplasma ganas pada bibir bawah', NULL, NULL),
(99, 'C00', '2', 'Neoplasma ganas pada bibir luar, tidak terspesifikasi', NULL, NULL),
(100, 'C00', '3', 'Neoplasma ganas pada bibir atas, aspek dalam', NULL, NULL),
(101, 'C00', '4', 'Neoplasma ganas pada bibir bawah, aspek dalam', NULL, NULL),
(102, 'C00', '5', 'Neoplasma ganas pada bibir, tidak terspesifikasi, aspek dalam', NULL, NULL),
(103, 'C00', '6', 'Neoplasma ganas pada komisura bibir', NULL, NULL),
(104, 'C00', '8', 'Neoplasma ganas dengan lesi bertumpuk (overlap) pada bibir', NULL, NULL),
(105, 'C00', '9', 'Neoplasma ganas pada bibir, tidak terspesifikasi', NULL, NULL),
(106, 'C01', '', 'Neoplasma ganas di bawah lidah', NULL, NULL),
(107, 'C02', '', 'Neoplasma ganas pada bagian lain dan tidak terspesifikasi dari lidah', NULL, NULL),
(108, 'C02', '0', 'Neoplasma ganas pada permukaan bawah lidah', NULL, NULL),
(109, 'C02', '1', 'Neoplasma ganas pada pinggir lidah', NULL, NULL),
(110, 'C02', '2', 'Neoplasma ganas pada permukaan ventral lidah', NULL, NULL),
(111, 'C02', '3', 'Neoplasma ganas pada dua per tiga depan lidah, bagian tidak terspesifik', NULL, NULL),
(112, 'C02', '4', '? Neoplasma ganas pada tonsil bagian lidah', NULL, NULL),
(113, 'C02', '8', 'Neoplasma ganas dengan lesi bertumpuk (overlap) pada lidah', NULL, NULL),
(114, 'C02', '9', 'Neoplasma ganas pada lidah, tidak terspesifikasi', NULL, NULL),
(115, 'C03', '', 'Neoplasma ganas pada gusi', NULL, NULL),
(116, 'C03', '0', 'Neoplasma ganas pada gusi atas', NULL, NULL),
(117, 'C03', '1', 'Neoplasma ganas pada gusi bawah', NULL, NULL),
(118, 'C03', '9', 'Neoplasma ganas pada gusi, tidak terspesifikasi', NULL, NULL),
(119, 'C04', '', 'Neoplasma ganas pada dasar mulut', NULL, NULL),
(120, 'C04', '0', 'Neoplasma ganas pada bagian depan dasar mulut', NULL, NULL),
(121, 'C04', '1', 'Neoplasma ganas pada bagian tepi dasar mulut', NULL, NULL),
(122, 'C04', '8', 'Neoplasma ganas dengan lesi bertumpuk (overlap) pada dasar mulut', NULL, NULL),
(123, 'C04', '9', 'Neoplasma ganas pada dasar mulut, tidak terspesifikasi', NULL, NULL),
(124, 'C05', '', 'Neoplasma ganas pada palate', NULL, NULL),
(125, 'C05', '0', 'Neoplasma ganas pada palate keras', NULL, NULL),
(126, 'C05', '1', 'Neoplasma ganas pada palate lunak', NULL, NULL),
(127, 'C05', '2', 'Neoplasma ganas pada uvula', NULL, NULL),
(128, 'C05', '8', 'Neoplasma ganas dengan lesi bertumpuk (overlap) pada palate', NULL, NULL),
(129, 'C05', '9', 'Neoplasma ganas pada palate, tidak terspesifikasi', NULL, NULL),
(130, 'D00', '', 'Karsinoma in situ pada rongga mulut, esofagus dan lambung', NULL, NULL),
(131, 'D00', '0', 'Karsinoma pada bibir, rongga mulut dan faring', NULL, NULL),
(132, 'D00', '1', 'Karsinoma pada esofagus', NULL, NULL),
(133, 'D00', '2', 'Karsinoma pada lambung', NULL, NULL),
(134, 'D01', '', 'Karsinoma in situ pada organ pencernaan lain dan tidak terspesifikasi', NULL, NULL),
(135, 'D01', '0', 'Karsinoma pada usus besar', NULL, NULL),
(136, 'D01', '1', 'Karsinoma pada hubungan rektosigmoid', NULL, NULL),
(137, 'D01', '2', 'Karsinoma pada rektum', NULL, NULL),
(138, 'D01', '3', 'Karsinoma pada anus dan saluran anus', NULL, NULL),
(139, 'D01', '4', 'Karsinoma pada bagian lain dan tidak terspesikasi dari usus', NULL, NULL),
(140, 'D01', '5', 'Karsinoma pada hati, kandung empedu dan saluran empedu', NULL, NULL),
(141, 'D01', '7', 'Karsinoma pada organ pencernaan spesifik lain', NULL, NULL),
(142, 'D01', '9', 'Karsinoma pada organ pencernaan, tidak terspesifikasi', NULL, NULL),
(143, 'D02', '', 'Karsinoma in situ telinga tengah dan sistem pernafasan', NULL, NULL),
(144, 'D02', '0', 'Karsinoma in situ laring', NULL, NULL),
(145, 'D02', '1', 'Karsinoma in situ trakea', NULL, NULL),
(146, 'D02', '2', 'Karsinoma in situ bronkus dan paru', NULL, NULL),
(147, 'D02', '3', 'Karsinoma in situ pada bagian lain sistem pernafasan', NULL, NULL),
(148, 'D02', '4', 'Karsinoma in situ sistem pernafasan, tidak terspesifikasi', NULL, NULL),
(149, 'D03', '', 'Melanoma in situ', NULL, NULL),
(150, 'D03', '0', 'Melanoma in situ bibir', NULL, NULL),
(151, 'D03', '1', 'Melanoma in situ kelopak mata, termasuk kantus', NULL, NULL),
(152, 'D03', '2', 'Melanoma in situ telinga dan saluran telinga luar', NULL, NULL),
(153, 'D03', '3', 'Melanoma in situ pada bagian lain dan tidak terspesifikasi dari wajah', NULL, NULL),
(154, 'D03', '4', 'Melanoma in situ kulit kepala dan leher', NULL, NULL),
(155, 'D03', '5', 'Melanoma in situ tubuh', NULL, NULL),
(156, 'D03', '6', 'Melanoma in situ alat gerak atas, termasuk pundak', NULL, NULL),
(157, 'D03', '7', 'Melanoma in situ alat gerak bawah, termasuk pinggang', NULL, NULL),
(158, 'D03', '8', 'Melanoma in situ di tempat lain', NULL, NULL),
(159, 'D03', '9', 'Melanoma in situ, tidak terspesifikasi', NULL, NULL),
(160, 'E00', '', 'Sindrom defisiensi iodin kongenital', NULL, NULL),
(161, 'E00', '0', 'Sindrom defisiensi iodin kongenital, tipe neurologis', NULL, NULL),
(162, 'E00', '1', 'Sindrom defisiensi iodin kongenital, tipe miksedem', NULL, NULL),
(163, 'E00', '2', 'Sindrom defisiensi iodin kongenital, tipe campuran', NULL, NULL),
(164, 'E00', '9', 'Sindrom defisiensi iodin kongenital, tidak terspesifikasi', NULL, NULL),
(165, 'E01', '', 'Defisiensi iodin terkait kelainan tiroid dan kondisi-kondisi yang berhubung', NULL, NULL),
(166, 'E01', '0', 'Defisiensi iodin terkait gondok (endemik) difus', NULL, NULL),
(167, 'E01', '1', 'Defisiensi iodin terkait gondok (endemik) multinodular', NULL, NULL),
(168, 'E01', '2', 'Defisiensi iodin terkait gondok (endemik), tidak terspesifikasi', NULL, NULL),
(169, 'E01', '8', 'conDefisiensi iodin lain terkait kelainan tiroid dan kondisi-kondisi yang berhu', NULL, NULL),
(170, 'E02', '', 'Hipotiroidisme defisiensi iodin subklinis', NULL, NULL),
(171, 'E03', '', 'Hipotiroidisme lain', NULL, NULL),
(172, 'E03', '0', 'Hipotiroidisme kongenital dengan gondok difus', NULL, NULL),
(173, 'E03', '1', 'Hipotiroidisme kongenital tanpa gondok', NULL, NULL),
(174, 'E03', '2', 'subHipotiroidisme akibat medikamentosa atau substansi luar lainnya', NULL, NULL),
(175, 'E03', '3', 'Hipotiroidisme pasca infeksi', NULL, NULL),
(176, 'E03', '4', 'Atropi tiroid (dapatan)', NULL, NULL),
(177, 'E03', '5', 'Koma miksedema', NULL, NULL),
(178, 'E03', '8', 'Hipotiroidisme spesifik lain', NULL, NULL),
(179, 'E03', '9', 'Hipotiroidisme, tidak terspesifikasi', NULL, NULL),
(180, 'E04', '', 'Gondok nontoksik lain', NULL, NULL),
(181, 'E04', '0', 'Gondok difus nontoksik', NULL, NULL),
(182, 'E04', '1', 'Nodul tunggal tiroid nontoksik', NULL, NULL),
(183, 'E04', '2', 'Gondok multinodular nontoksik', NULL, NULL),
(184, 'E04', '8', 'Gondok nontoksik spesifik lainnya', NULL, NULL),
(185, 'E04', '9', 'Gondok nontoksik, tidak terspesifikasi', NULL, NULL),
(186, 'E05', '', 'Tirotoksikosis [hipertiroidisme]', NULL, NULL),
(187, 'E05', '0', 'Tirotoksikosis dengan gondok difus', NULL, NULL),
(188, 'E05', '1', 'Tirotoksikosis dengan nodul tunggal tiroid toksik', NULL, NULL),
(189, 'E05', '2', 'Tirotoksikosis dengan gondok multinodular toksik', NULL, NULL),
(190, 'E05', '3', 'Tirotoksikosis dari jaringan tiroid ektopik', NULL, NULL),
(191, 'E05', '4', 'Tirotoksikosis faktisia', NULL, NULL),
(192, 'F01', '', 'Demensia vaskular', NULL, NULL),
(193, 'F01', '0', 'Demensia vaskular onset akut', NULL, NULL),
(194, 'F01', '1', 'Demensia multi infark', NULL, NULL),
(195, 'F01', '2', 'Demensia vaskular subkortikal', NULL, NULL),
(196, 'F01', '3', 'Demensia vaskular campuran kortikal dan subkortikal', NULL, NULL),
(197, 'F01', '8', 'Demensia vaskular lainnya', NULL, NULL),
(198, 'F01', '9', 'Demensia vaskular, tidak terspesifikasi', NULL, NULL),
(199, 'F03', '', 'Demensia, tidak terspesifikasi', NULL, NULL),
(200, 'F04', '', 'Sindrom amnesik organik, tidak diinduksi alkohol dan substansi-substans', NULL, NULL),
(201, 'F05', '', 'Delirium, tidak diinduksi alkohol dan substansi-substansi psikoaktif lainny', NULL, NULL),
(202, 'F05', '0', 'Delirium tidak muncul bersama demensia', NULL, NULL),
(203, 'F05', '1', 'Delirium muncul bersama dengan demensia', NULL, NULL),
(204, 'F05', '8', 'Delirium lainnya', NULL, NULL),
(205, 'F05', '9', 'Delirium, tidak terspesifikasi', NULL, NULL),
(206, 'F06', '', 'Kelainan-kelainan mental lain disebabkan oleh kerusakan dan disfungsi o', NULL, NULL),
(207, 'F06', '0', 'Hallusinosis organik', NULL, NULL),
(208, 'F06', '1', 'Kelainan katatonik organik', NULL, NULL),
(209, 'F06', '2', 'Kelainan delusional [menyerupai skizofrenia] organik', NULL, NULL),
(210, 'F06', '3', 'Kelainan-kelainan mood [afektif] organik', NULL, NULL),
(211, 'F06', '4', 'Kelainan ansietas organik', NULL, NULL),
(212, 'F06', '5', 'Kelainan dissosiatif organik', NULL, NULL),
(213, 'F06', '6', 'Kelainan emosional labil [astenik] organik', NULL, NULL),
(214, 'F06', '7', 'Kelainan kognitif ringan', NULL, NULL),
(215, 'F06', '8', 'Kelainan-kelainan mental spesifik lain disebabkan oleh kerusakan dan dis', NULL, NULL),
(216, 'F06', '9', 'and dysfuncKelainan mental spesifik tidak terspesifikasi yang disebabkan oleh kerus', NULL, NULL),
(217, 'F07', '', 'disease, damKelainan-kelainan kepribadian dan tingkah laku yang disebabkan oleh pe', NULL, NULL),
(218, 'F07', '0', 'Kelainan kepribadian organik', NULL, NULL),
(219, 'F07', '1', 'Sindrom pasca ensefalitif', NULL, NULL),
(220, 'F07', '2', 'Sindrom pasca konkussi', NULL, NULL),
(221, 'F07', '8', 'Kelainan-kelainan kepribadian dan tingkah laku lain yang disebabkan ole', NULL, NULL),
(222, 'F07', '9', 'Kelainan-kelainan kepribadian dan tingkah laku tidak terspesifikasi yang d', NULL, NULL),
(223, 'F09', '', 'Kelainan mental organik dan simptomatik tidak terspesifikasi', NULL, NULL),
(224, 'F10', '', 'Kelainan-kelainan mental dan tingkah laku yang disebabkan oleh penggu', NULL, NULL),
(225, 'F10', '0', 'Intoksikasi akut yang disebabkan oleh penggunaan alkohol', NULL, NULL),
(226, 'F10', '1', 'Penggunaan berbahaya yang disebabkan oleh penggunaan alkohol', NULL, NULL),
(227, 'F10', '2', 'Sindrom dependensi yang disebabkan oleh penggunaan alkohol', NULL, NULL),
(228, 'F10', '3', 'Keadaan sakau yang disebabkan oleh penggunaan alkohol', NULL, NULL),
(229, 'F10', '4', 'Keadaan sakau disertai delirium yang disebabkan oleh penggunaan alko', NULL, NULL),
(230, 'F10', '5', 'Kelainan psikotik yang disebabkan oleh penggunaan alkohol', NULL, NULL),
(231, 'F10', '6', 'Sindrom amnesik yang disebabkan oleh penggunaan alkohol', NULL, NULL),
(232, 'F10', '7', 'Kelainan psikotik residual dan onset lambat yang disebabkan oleh pengg', NULL, NULL),
(233, 'F10', '8', 'Kelainan-kelainan mental dan tingkah laku lainnya yang disebabkan oleh', NULL, NULL),
(234, 'F10', '9', 'Kelainan mental dan tingkah laku yang tidak terspesifikasi yang disebabk', NULL, NULL),
(235, 'G00', '0', 'Meningitis hemofilus', NULL, NULL),
(236, 'G00', '1', 'Meningitis pneumokokkus', NULL, NULL),
(237, 'G00', '2', 'Meningitis streptokokkus', NULL, NULL),
(238, 'G00', '3', 'Meningitis stafilokokkus', NULL, NULL),
(239, 'G00', '8', 'Meningitis bakterial lainnya', NULL, NULL),
(240, 'G00', '9', 'Meningitis bakterial, tidak terspesifikasi', NULL, NULL),
(241, 'G03', '', 'Meningitis yang diakibatkan oleh penyebab-penyebab lain dan tidak ters', NULL, NULL),
(242, 'G03', '0', 'Meningitis nonpiogenik', NULL, NULL),
(243, 'G03', '1', 'Meningitis kronik', NULL, NULL),
(244, 'G03', '2', 'Meningitis berulang jinak [Mollaret]', NULL, NULL),
(245, 'G03', '8', 'Meningitis yang diakibatkan oleh penyebab-penyebab spesifik lainnya', NULL, NULL),
(246, 'G03', '9', 'Meningitis, tidak terspesifikasi', NULL, NULL),
(247, 'G04', '', 'Ensefalitis, mielitis dan encefalomielitis', NULL, NULL),
(248, 'G04', '0', 'Ensefalitis meluas akut', NULL, NULL),
(249, 'G04', '1', 'Paraplegia spastik tropis', NULL, NULL),
(250, 'G04', '2', 'Meningoensefalitis dan meningomielitis bakteri, tidak terklasifikasi ditemp', NULL, NULL),
(251, 'G04', '8', 'Ensefalitis, mielitis dan ensefalomielitis', NULL, NULL),
(252, 'G04', '9', 'Ensefalitis, mielitis dan ensefalomielitis, tidak terspesifikasi', NULL, NULL),
(253, 'G06', '', 'Abses dan granuloma intrakranial dan intraspinal', NULL, NULL),
(254, 'G06', '0', 'Abses dan granuloma intrakranial', NULL, NULL),
(255, 'G06', '1', 'Abses dan granuloma intraspinal', NULL, NULL),
(256, 'G06', '2', 'Abses ekstradural dan subdural, tidak terspesifikasi', NULL, NULL),
(257, 'G08', '', 'Feblitis dan tromboflebitis intrakranial dan intraspinal', NULL, NULL),
(258, 'G09', '', 'Sekuele penyakit inflamasi pada sistem saraf pusat', NULL, NULL),
(259, 'G10', '', 'Penyakit Huntington', NULL, NULL),
(260, 'G11', '', 'Ataksia herediter', NULL, NULL),
(261, 'G11', '0', 'Ataksia nonprogresif kongenital', NULL, NULL),
(262, 'G11', '1', 'Ataksia serebellum onset cepat', NULL, NULL),
(263, 'G11', '2', 'Ataksia serebellum onset lambat', NULL, NULL),
(264, 'G11', '3', 'Ataksia serebellar dengan perbaikan defek DNA', NULL, NULL),
(265, 'G11', '4', 'Paraplegia spastik herediter', NULL, NULL),
(266, 'G11', '8', 'Ataksia herediter lainnya', NULL, NULL),
(267, 'G11', '9', 'Ataksia herediter, tidak terspesifikasi', NULL, NULL),
(268, 'G12', '', 'Atrofi otot spinal dan sindrom-sindrom terkait', NULL, NULL),
(269, 'G12', '0', 'Atrofi otot spinal infantil, tipe I [Werdnig-Hoffman]', NULL, NULL),
(270, 'G12', '1', 'Atrofi otot spinal yang diturunkan lainnya', NULL, NULL),
(271, 'H04', '1', 'Kelainan-kelainan lain kelenjar lakrimal', NULL, NULL),
(272, 'H04', '2', 'Epifora', NULL, NULL),
(273, 'H04', '3', 'Inflamasi akut dan tidak terspesifikasi dari saluran lakrimal', NULL, NULL),
(274, 'H04', '4', 'Inflamasi kronik saluran lakrimal', NULL, NULL),
(275, 'H04', '5', 'Stenosis dan insufisiensi saluran lakrimal', NULL, NULL),
(276, 'H04', '6', 'Perubahan-perubahan lain pada saluran lakrimal', NULL, NULL),
(277, 'H04', '8', 'Kelainan-kelainan lain pada sistem lakrimal', NULL, NULL),
(278, 'H04', '9', 'Kelainan sistem lakrimal, tidak terspesifikasi', NULL, NULL),
(279, 'H05', '', 'Kelainan-kelainan orbita', NULL, NULL),
(280, 'H05', '0', 'Inflamasi akut orbita', NULL, NULL),
(281, 'H05', '1', 'Kelainan-kelainan inflamasi kronik pada orbita', NULL, NULL),
(282, 'H05', '2', 'Kondisi-kondisi eksoftalmik', NULL, NULL),
(283, 'H05', '3', 'Deformitas orbita', NULL, NULL),
(284, 'H05', '4', 'Enoptalmos', NULL, NULL),
(285, 'H05', '5', 'orbTertinggalnya benda asing (lama) yang mengikuti luka penetrasi pada or', NULL, NULL),
(286, 'H05', '8', 'Kelainan-kelainan orbita lainnya', NULL, NULL),
(287, 'H05', '9', 'Kelainan orbita, tidak terspesifikasi', NULL, NULL),
(288, 'H10', '', 'Konjungtivitis', NULL, NULL),
(289, 'H10', '0', 'Konjungtivitis mukopurulen', NULL, NULL),
(290, 'H10', '1', 'Konjungtivitis atopik akut', NULL, NULL),
(291, 'H10', '2', 'Konjungtivitis akut lainnya', NULL, NULL),
(292, 'H10', '3', 'Konjungtivitis akut, tidak terspesifikasi', NULL, NULL),
(293, 'H10', '4', 'Konjungtivitis kronik', NULL, NULL),
(294, 'H10', '5', 'Blefarokonjungtivitis', NULL, NULL),
(295, 'H10', '8', 'Konjungtivitis lainnya', NULL, NULL),
(296, 'H10', '9', 'Konjungtivitis, tidak terspesifikasi', NULL, NULL),
(297, 'H11', '', 'Kelainan-kelainan lain konjungtiva', NULL, NULL),
(298, 'I00', '', 'Demam reumatik tanpa menyebutkan keterlibatan jantung', NULL, NULL),
(299, 'I01', '', 'Demam reumatik dengan keterlibatan jantung', NULL, NULL),
(300, 'I01', '0', 'Perikarditis reumatik akut', NULL, NULL),
(301, 'I01', '1', 'Endokarditis reumatik akut', NULL, NULL),
(302, 'I01', '2', 'Miokarditis reumatik akut', NULL, NULL),
(303, 'I01', '8', 'Penyakit jantung reumatik akut lainnya', NULL, NULL),
(304, 'I01', '9', 'Penyakit jantung reumatik akut, tidak terspesifikasi', NULL, NULL),
(305, 'I02', '', 'Korea reumatik', NULL, NULL),
(306, 'I02', '0', 'Korea reumatik dengan keterlibatan jantung', NULL, NULL),
(307, 'I02', '9', 'Korea reumatik tanpa keterlibatan jantung', NULL, NULL),
(308, 'I05', '', 'Penyakit-penyakit reumatik katup mitral', NULL, NULL),
(309, 'I05', '0', 'Stenosis mitral', NULL, NULL),
(310, 'I05', '1', 'Insufisiensi mitral reumatik', NULL, NULL),
(311, 'I05', '2', 'Stenosis mitral dengan insufisiensi', NULL, NULL),
(312, 'I05', '8', 'Penyakit-penyakit lain katup mitral', NULL, NULL),
(313, 'I05', '9', 'Penyakit katup mitral, tidak terspesifikasi', NULL, NULL),
(314, 'I06', '', 'Penyakit-penyakit reumatik katup aorta', NULL, NULL),
(315, 'I06', '0', 'Stenosis aorta reumatik', NULL, NULL),
(316, 'I06', '1', 'Insufisiensi aorta reumatik', NULL, NULL),
(317, 'I06', '2', 'Stenosis aorta reumatik dengan insufisiensi', NULL, NULL),
(318, 'I06', '8', 'Penyakit-penyakit lain katup aorta reumatik', NULL, NULL),
(319, 'I06', '9', 'Penyakit katup aorta reumatik, tidak terspesifikasi', NULL, NULL),
(320, 'I07', '', 'Penyakit-penyakit reumatik katup trikuspid', NULL, NULL),
(321, 'I07', '0', 'Stenosis trikuspid', NULL, NULL),
(322, 'I07', '1', 'Insufisiensi trikuspid', NULL, NULL),
(323, 'I07', '2', 'Stenosis trikuspid dengan insufisiensi', NULL, NULL),
(324, 'I07', '8', 'Penyakit-penyakit katup trikuspid lainnya', NULL, NULL),
(325, 'I07', '9', 'Penyakit katup trikuspid, tidak terspesifikasi', NULL, NULL),
(326, 'I08', '', 'Penyakit-penyakit katup multipel', NULL, NULL),
(327, 'I08', '0', 'Kelainan-kelainan katup mitral dan aorta', NULL, NULL),
(328, 'I08', '1', 'Kelainan-kelainan katup mitral dan trikuspid', NULL, NULL),
(329, 'I08', '2', 'Kelainan-kelainan katup aorta dan trikuspid', NULL, NULL),
(330, 'I08', '3', 'Kelainan-kelainan gabungan katup mitral, aorta dan trikuspid', NULL, NULL),
(331, 'I08', '8', 'Penyakit-penyakit katup multipel lainnya', NULL, NULL),
(332, 'I08', '9', 'Penyakit katup multipel, tidak terspesifikasi', NULL, NULL),
(333, 'I09', '', 'Penyakit-penyakit jantung reumatik lainnya', NULL, NULL),
(334, 'I09', '0', 'Miokarditis reumatik', NULL, NULL);

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
(1, 1, 2, 4, 1, 'Sakit Kepala', 'Berikan Obat', '2023-02-18 02:13:00', '2023-02-27 10:26:25'),
(4, 3, 4, 2, 3, 'Diare', 'asd', '2023-02-18 02:30:08', '2023-02-27 08:17:07'),
(5, 1, NULL, 4, 1, 'Sakit Perut', NULL, '2023-02-27 10:22:02', '2023-02-27 10:22:02');

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
(1, 'admin', 'admin@gmail.com', '$2y$10$hJXM1VX4m/OgW8vmnHqrs.oB0g4VKzh1TeAe41mEuiyNd6zziq1ty', 'admin', NULL, NULL, '2023-02-27 02:40:46'),
(2, 'Dr. Dasril', 'dasril@gmail.com', '$2y$10$S0yXEzAX7/u9uKfv7tQx0Ou/N19EJuD7Ig9qkwa8SF51bp2gSPtCC', 'dokter', 3, '2023-02-18 02:09:51', '2023-02-18 02:09:51'),
(3, 'Drg. Heri', 'heri@gmail.com', '$2y$10$7GnfhVApGShUXEiOPciAy.xJlhU63fbiXLHmfMguu80xpkrMT/K4C', 'dokter', 2, '2023-02-18 02:10:05', '2023-02-18 02:10:05'),
(4, 'Dr. Toto', 'toto@gmail.com', '$2y$10$gIQdRUm0drnce9XNdDHZ4.B9eXukXmgucZhSGkRrS.hqNlKME/sw.', 'dokter', 1, '2023-02-18 02:10:39', '2023-02-18 02:10:39');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT for table `keluhans`
--
ALTER TABLE `keluhans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keluhan_obat`
--
ALTER TABLE `keluhan_obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
