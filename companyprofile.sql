-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 12:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `asesor`
--

CREATE TABLE `asesor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` decimal(20,0) NOT NULL,
  `lpjk` tinyint(1) NOT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_klasifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asesor`
--

INSERT INTO `asesor` (`id`, `nama`, `nik`, `lpjk`, `sertifikat`, `sub_klasifikasi`, `kualifikasi`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(5, 'SANDIRI, ST', '1171040712760000', 1, 'MET.000.004748.2020', 'K3 KONSTRUKSI', 'MADYA', 'Desa BIrem Rayeuk, Kecamatan Birem Bayeun, Kabupaten Aceh Timur, Provinsi Aceh', 'TETAP', '2021-08-09 19:16:05', '2021-08-09 19:16:29'),
(6, 'Drs. Hisar, M.Pd', '1171090305600000', 1, 'MET.000.004746.2020', 'M.KONSTRUKSI', 'MADYA', 'Jl. Tgk. Adee 5 Desa Doy Ulee Kareng Banda Aceh', 'TETAP', '2021-08-09 19:17:15', '2021-08-09 19:17:15'),
(7, 'Ir. I WAYAN SUKERAYASA, MT', '5171010311640000', 1, 'MET.000.006656.2018', 'K3 KONSTRUKSI', 'MADYA', 'PERM. PADANG GALERIA, LINK PADANG SUMBU KAJA, KEL PADANGSAMBIAN KELOD DENPASAR BARAT', 'TETAP', '2021-08-09 19:49:47', '2021-08-09 19:49:47'),
(8, 'DEWA GEDE ARSANA, ST', '5104032102680000', 1, 'MET.000.004894.2020', 'GEDUNG', 'MADYA', 'Jl Ratna Br Triwangsa RT:000 RW:000 KEL. Tegal Tugu KEC. Gianyar', 'TETAP', '2021-08-09 19:51:09', '2021-08-09 19:51:09'),
(9, 'SYAIFULLAH, ST', '1971051202730000', 1, 'MET.000.004954.2020', 'K3 KONSTRUKSI', 'MADYA', 'Jalan Sumedang No. 42 RT 03 RW 02 Kel Kejaksan Kec taman sari Kota Pangkalpinang, Provinsi Kep. Bangka Belitung', 'TETAP', '2021-08-09 19:51:47', '2021-08-09 19:51:47'),
(10, 'WINADI TARIZA AMKA, ST', '3275023004680014', 1, 'MET.000.004237 2019', 'GEDUNG', 'MADYA', 'VILA DAGO NUSA DUA B-19/5 RT. 006/020 BENDA BARU - PAMULANG', 'TETAP', '2021-08-09 19:53:34', '2021-08-09 19:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'public/uploads/carousel/1629344754architect-3979490_1920.jpg', NULL, '2021-08-18 20:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Prosedur', 'Kategori Prosedur', '2021-08-04 23:50:55', '2021-08-04 23:50:55'),
(5, 'Legalitas', 'Kategori untuk artikel yang berkaitan dengan legalitas', '2021-08-09 20:29:45', '2021-08-09 20:29:45'),
(6, 'Peraturan PUPR', 'Informasi Peraturan PUPR', '2021-08-18 21:00:42', '2021-08-18 21:00:42'),
(7, 'Peraturan BNSP', 'Informasi Peraturan BNSP', '2021-08-18 21:01:02', '2021-08-18 21:01:02');

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
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `gambar7`, `gambar8`, `created_at`, `updated_at`) VALUES
(1, 'public/uploads/gambar/1628565074GALER14.jpg', 'public/uploads/gambar/16280745001627970827GALERI3.png', 'public/uploads/gambar/16280745071627970832GALERI4.png', 'public/uploads/gambar/16280745211627970844GALERI7.png', 'public/uploads/gambar/16280745301627970857GALERI8.png', 'public/uploads/gambar/16280745381627970864GALERI9.png', 'public/uploads/gambar/16280745481627972276GALERI11.png', 'public/uploads/gambar/16280745561627972283GALERI12.png', NULL, '2021-08-09 20:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_informasi`
--

CREATE TABLE `galeri_informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_informasi`
--

INSERT INTO `galeri_informasi` (`id`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `created_at`, `updated_at`) VALUES
(1, 'public/uploads/gambar/162807458816280745561627972283GALERI12.png', 'public/uploads/gambar/1628565374GALERI7.png', 'public/uploads/gambar/162807459516280745381627970864GALERI9.png', 'public/uploads/gambar/16280746011627960623outrun-vaporwave-hd-wallpaper-preview.jpg', NULL, '2021-08-09 20:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `imgres`
--

CREATE TABLE `imgres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imgres`
--

INSERT INTO `imgres` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'telur.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjudul` varchar(595) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selengkapnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id`, `judul`, `subjudul`, `selengkapnya`, `created_at`, `updated_at`) VALUES
(1, 'LSPK ASTTATINDO', 'Lembaga Sertifikasi Profesi Konstruksi ASTTATINDO', 'telur.pngtelur.pngtelur.pngtelur.png', NULL, '2021-08-05 23:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `kebijakan`
--

CREATE TABLE `kebijakan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kebijakan1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebijakan2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kebijakan`
--

INSERT INTO `kebijakan` (`id`, `kebijakan1`, `kebijakan2`, `created_at`, `updated_at`) VALUES
(1, 'LSP Pihak 3 Konstruksi Asttatindo bertekad menerapkan dan memelihara mutu sesuai dengan pedoman BNSP 201 dan 202', 'Seluruh personil LSP-P3 KONSTRUKSI ASTTATINDO berkomitmen untuk menyelenggarakan Uji kompetensi di bidang Teknik', NULL, '2021-08-04 20:38:42');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_29_021442_kategori', 1),
(5, '2021_07_29_072325_post', 1),
(6, '2021_07_30_031812_softdelete', 1),
(7, '2021_07_30_063803_user_post', 1),
(8, '2021_07_30_073513_tipeuser', 1),
(9, '2021_08_02_013725_carousel', 1),
(10, '2021_08_02_082608_judul', 1),
(11, '2021_08_02_100939_visimisi', 1),
(12, '2021_08_03_015620_kebijakan', 1),
(13, '2021_08_03_022615_galeri', 1),
(14, '2021_08_03_033036_sasaran', 1),
(15, '2021_08_03_060906_galeri_informasi', 1),
(16, '2021_08_09_104713_asesor', 2),
(17, '2021_08_12_015939_imgres', 3),
(18, '2021_10_19_035629_request_account', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjudul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategorid` decimal(65,0) DEFAULT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul`, `subjudul`, `gambar`, `kategorid`, `konten`, `slug`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(8, 'Tahapan Pelaksanaan Sertifikasi', 'Tahapan Pelaksanaan Sertifikasi sesuai Prosedur LSP Konstruksi Asttatindo', 'public/uploads/posts/1628146416alur.jpeg', '2', '<p>I. Pendaftaran peserta uji kompetensi di LSP KONSTRUKSI ASTTATINDO secara online melalui&nbsp;<a href=\"https://lspkonstruksiasttatindo.co.id/\">https://lspkonstruksiasttatindo.co.id</a></p>\r\n\r\n<p>II. Semua kelengkapan dokumentasi dan administrasi peserta uji kompetensi diverifikasi oleh tim verifikasi LSP KONSTRUKSI ASTTATINDO via system aplikasi . Bagi peserta uji kompetensi yang memenuhi persyaratan administrasi akan mendapatkan nomer registrasi.</p>\r\n\r\n<p>III. Hasil verifikasi Tim LSP KONSTRUKSI ASTTATINDO menentukan apakah asesi layak untuk melanjutkan proses sertifikasi yaitu dengan melaksanakan uji mandiri atau pra asesmen.</p>\r\n\r\n<p>IV. Evaluasi Asesor dilakukan setelah uji mandiri atau pra asesmen dilaksanakan oleh peserta uji.</p>\r\n\r\n<p>V. Dari evaluasi asesor, maka peserta uji akan diinformasi apakah dapat melaksanakan asesmen atau disarankan untuk mengikuti pelatihan terlebih dahulu.</p>\r\n\r\n<p>VI. Asesmen yang dilaksanakan LSP KONSTRUKSI ASTTATINDO terdiri dari uji tulis, uji lisan, dan uji praktek (demonstrasi).</p>\r\n\r\n<p>VII. Setelah pelaksanaan asesmen, maka Asesor memberikan rekomendasi kepada asesi, apakah asesi tersebut kompeten atau belum kompeten.</p>\r\n\r\n<p>VIII. Rekomendasi Asesor dilaporkan kepada Tim Verifikasi LSP KONSTRUKSI ASTTATINDO .</p>\r\n\r\n<p>IX. Berdasarkan rekomendasi Asesor, maka Tim Pemutus LSP KONSTRUKSI ASTTATINDO&nbsp; akan mengadakan rapat pleno untuk melakukan penilaian/kaji ulang terhadap rekomendasi Asesor dan hasil uji kompetensi.</p>\r\n\r\n<p>X. Hasil rapat pleno memutuskan apakah asesi tersebut dinyatakan kompeten yang mana keputusan tersebut dituangkan dalam Surat Keputusan dan Berita Acara.</p>\r\n\r\n<p>XI. Berdasarkan surat keputusan Tim Verifikasi LSP KONSTRUKSI ASTTATINDO , maka Sekretariat LSP KONSTRUKSI ASTTATINDO&nbsp; akan menerbitkan Sertifikasi Kompetensi bagi asesi yang bersangkutan.<br />\r\n&nbsp;</p>\r\n\r\n<p>&bull;<strong>SELESAI</strong></p>', 'tahapan-pelaksanaan-sertifikasi', '2021-08-04 23:52:06', '2021-08-05 00:33:20', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_account`
--

CREATE TABLE `request_account` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebangsaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` decimal(20,0) NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rumah_pribadi` decimal(20,0) NOT NULL,
  `no_hp_pribadi` decimal(20,0) NOT NULL,
  `no_kantor_pribadi` decimal(20,0) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos_perusahaan` decimal(20,0) NOT NULL,
  `no_telepon_perusahaan` decimal(20,0) NOT NULL,
  `fax_perusahaan` decimal(20,0) NOT NULL,
  `email_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_asesmen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_lain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_account`
--

INSERT INTO `request_account` (`id`, `nama_lengkap`, `ttl`, `gender`, `kebangsaan`, `negara`, `alamat`, `kode_pos`, `pendidikan`, `no_rumah_pribadi`, `no_hp_pribadi`, `no_kantor_pribadi`, `email`, `nama_perusahaan`, `jabatan`, `alamat_perusahaan`, `kode_pos_perusahaan`, `no_telepon_perusahaan`, `fax_perusahaan`, `email_perusahaan`, `tujuan_asesmen`, `tujuan_lain`, `skema`, `created_at`, `updated_at`) VALUES
(3, 'Erlangga Riansyah', 'Bogor, 2021-10-05', 'wanita', 'WNI', 'Afghanistan', 'Jl. Falmboyan', '16820', 'Akademi / Politeknik / Sekolah Tinggi / Universitas', '1212', '1212', '1212', 'erlanggariansyah0@gmail.com', 'LSPK ATTATTAT', 'Backend Developer', 'Jl. Falmboyan', '16820', '2732873287', '1212', 'WQWQWQWQW', 'lainnya', 'dandelion', 'Pelaksana Lapangan Pekerjaan Saluran Irigasi', '2021-10-18 23:02:15', '2021-10-18 23:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `sasaran`
--

CREATE TABLE `sasaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sasaranmisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sasaran`
--

INSERT INTO `sasaran` (`id`, `sasaranmisi`, `created_at`, `updated_at`) VALUES
(1, 'Tercapainya standarisasi kompetensi sumber daya manusia bagi Masyarakat Jasa Konstruksi di bidang Teknik', NULL, '2021-08-04 03:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tipe`) VALUES
(2, 'Wilhelm Keitel', 'wkeitel@gmail.com', NULL, '$2y$10$aT02MsiE6Ycl09y.hTvWKuEFvLQKOdpBNsgbhdN7d.PoKdVXTtEXq', 'rNaO4WYHBOmfDpJW7drJEncfidsVk9qafru50J6zzHJNco7qjRyF3fayAp5H', '2021-08-05 00:24:36', '2021-08-05 00:33:44', 1),
(3, 'Erwin Rommel', 'erwinrommel@gmail.com', NULL, '$2y$10$zVzvwjb2mIts3gDM/iWNtucrRJqQKP.8dwvsc.NESZWgJtP3sW8E6', NULL, '2021-08-06 00:50:35', '2021-08-06 00:50:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi1`, `misi2`, `misi3`, `created_at`, `updated_at`) VALUES
(1, 'Menjadi lembaga sertifikasi profesi yang profesional untuk menghasilkan tenaga kerja yang berdaya saing global, unggul, terpercaya dan berakhlak mulia serta berwawasan lingkungan tahun 2024', 'Menyelenggarakan sertifikasi kompetensi tenaga kerja sektor Teknik yang independen dan profesional', 'Menjamin mutu dengan menjaga proses sertifikasi sesuai dengan standar yang berlaku dan melakukan inovasi-inovasi', 'Menetapkan kompetensi sumber daya manusia melalui prosedur sertifikasi profesi kompetensi di bidang Komunikasi, Teknik', NULL, '2021-08-04 03:54:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_informasi`
--
ALTER TABLE `galeri_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgres`
--
ALTER TABLE `imgres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebijakan`
--
ALTER TABLE `kebijakan`
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
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_account`
--
ALTER TABLE `request_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sasaran`
--
ALTER TABLE `sasaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri_informasi`
--
ALTER TABLE `galeri_informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imgres`
--
ALTER TABLE `imgres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kebijakan`
--
ALTER TABLE `kebijakan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `request_account`
--
ALTER TABLE `request_account`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sasaran`
--
ALTER TABLE `sasaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
