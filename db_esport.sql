-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2022 pada 10.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_esport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `coach`
--

CREATE TABLE `coach` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_08_16_061031_create_players_table', 1),
(4, '2022_08_16_070721_create_dataplayers_table', 1),
(5, '2022_08_23_011913_create_teams_table', 1),
(6, '2022_08_24_092138_hasilpencarian', 1),
(7, '2022_08_24_142727_create_products_table', 1),
(8, '2022_08_27_230830_create_myteams_table', 1),
(9, '2022_08_30_050442_create_news_table', 1),
(10, '2022_08_31_062523_create_profiles_table', 1),
(11, '2022_09_13_041946_create_orders_table', 1),
(12, '2022_09_13_042204_create_order_details_table', 1),
(13, '2022_09_13_073246_create_posts_comments_table', 1),
(14, '2022_09_14_015350_contact_us', 1),
(15, '2022_09_19_091546_create__player_team_table', 1),
(16, '2022_09_20_063409_create_matches_table', 1),
(17, '2022_09_21_014344_create_gambar_table', 1),
(18, '2022_09_21_020213_create_kategoriwahyudin_table', 1),
(19, '2022_09_21_021312_create_produk_table', 1),
(20, '2022_09_21_074353_create_produk_images_table', 1),
(21, '2022_09_22_012006_create_coach_table', 1),
(22, '2022_09_22_030831_create_categories_table', 1),
(23, '2022_09_23_064639_tbl_previews', 2),
(24, '2022_09_26_014356_create_match_table', 3),
(25, '2022_09_28_042257_create_myteam2_table', 4),
(26, '2022_09_29_090337_create_tournaments_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Essential', '2022-09-22 00:26:38', '2022-09-22 00:26:38'),
(2, 'Lifestyle', '2022-09-22 01:53:13', '2022-09-22 01:53:13'),
(3, 'Performance', '2022-09-22 01:53:25', '2022-09-22 01:53:25'),
(4, 'Limited', '2022-09-22 01:53:33', '2022-09-22 01:53:33'),
(5, 'Highlight', '2022-09-25 21:28:50', '2022-09-25 21:28:50'),
(6, 'Championship', '2022-09-25 21:39:10', '2022-09-25 21:39:10'),
(7, 'Hot News', '2022-09-25 21:39:23', '2022-09-25 21:39:23'),
(8, 'Advertisement', '2022-09-25 21:39:38', '2022-09-25 21:39:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_coach`
--

CREATE TABLE `tbl_coach` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `kebangsaan` varchar(191) NOT NULL,
  `posisi` varchar(191) NOT NULL,
  `umur` varchar(191) NOT NULL,
  `seasons` varchar(191) NOT NULL,
  `about` text NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_coach`
--

INSERT INTO `tbl_coach` (`id`, `image`, `nama`, `kebangsaan`, `posisi`, `umur`, `seasons`, `about`, `team_id`, `created_at`, `updated_at`) VALUES
(2, '1664439983_aura-facehungger.png', 'kjdcuid', 'eijfie', 'knkjef', '22', 'idhuih3', 'kdhdufhdu', 2, '2022-09-29 01:26:23', '2022-09-29 01:26:23'),
(3, '1664441500_alter_leomurphy.png', 'vcvcv', 'vcvv', 'ytyty', '434', 'jhjjh', 'jhjhj', 1, '2022-09-29 01:51:40', '2022-09-29 01:51:40'),
(4, '1664441539_bigetron-kyy.png', 'fvfv', 'vfvv', 'fvfv', 'fvfv', 'fvfv', 'fvfvf', 3, '2022-09-29 01:52:19', '2022-09-29 01:52:19'),
(5, '1664441576_geek-adam.png', 'cvcv', 'cvcvc', 'dfdf', 'dfdf', 'dfdf', 'dfdfd', 4, '2022-09-29 01:52:56', '2022-09-29 01:52:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_contacts`
--

CREATE TABLE `tbl_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Fendy Setyawan', 'fendy@email.com', '087878400674', 'hilih', 'hilih', '2022-09-25 19:54:53', '2022-09-25 19:54:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dataplayers`
--

CREATE TABLE `tbl_dataplayers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matches`
--

CREATE TABLE `tbl_matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_team1` int(11) NOT NULL,
  `score1` int(10) UNSIGNED NOT NULL,
  `id_team2` int(11) NOT NULL,
  `score2` int(10) UNSIGNED NOT NULL,
  `point` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matchs`
--

CREATE TABLE `tbl_matchs` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id2` int(10) UNSIGNED NOT NULL,
  `score2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_matchs`
--

INSERT INTO `tbl_matchs` (`id`, `team_id`, `status`, `score1`, `team_id2`, `score2`, `tanggal`, `waktu`, `created_at`, `updated_at`) VALUES
(3, 4, 'lastgame', '1', 1, '0', '2022-09-28', '19:30:00', '2022-09-28 02:41:41', '2022-09-28 02:42:18'),
(4, 5, 'lastgame', '3', 6, '2', '2022-09-28', '18:30:00', '2022-09-28 02:43:05', '2022-09-28 02:43:05'),
(5, 7, 'lastgame', '3', 8, '2', '2022-09-28', '19:30:00', '2022-09-28 02:43:46', '2022-09-28 02:43:46'),
(6, 2, 'lastgame', '3', 3, '2', '2022-09-26', '19:30:00', '2022-09-28 02:44:26', '2022-09-28 02:44:26'),
(7, 3, 'lastgame', '2', 4, '0', '2022-09-25', '17:30:00', '2022-09-28 02:45:20', '2022-09-28 02:45:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_myteams`
--

CREATE TABLE `tbl_myteams` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `founded` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ground` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `president` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_coach` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `championship` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_myteams`
--

INSERT INTO `tbl_myteams` (`id`, `nama`, `image`, `country`, `founded`, `ground`, `president`, `head_coach`, `championship`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Alter Ego', '1663552248_logo-alterego.png', 'Indonesia', '2018', 'Salatiga Sport Center', 'Delwyn Sukamto', 'Coach Caesius', 'E-sport Pro Season 6', '2022-09-08', '07:00:00', '2022-09-18 11:50:48', '2022-09-18 11:50:48'),
(2, 'Aura Fire', '1663567824_logo-aura.png', 'Indonesia', '2018', 'Salatiga Sport Center', 'Daniel Santoso', 'Coach Tezet', 'E-sport Pro Season 6', '2022-09-14', '07:00:00', '2022-09-12 17:00:00', '2022-09-19 17:00:00'),
(3, 'Bigetron Alpha', '1663812529_1662630073_logo-bigetron.png', 'Indonesia', '28 March 2017\r\n', 'Salatiga Sport Center', 'Edwin Chia', 'Coach Vrendini', 'E-sport Pro Season 6', '2022-09-21', '09:09:00', '2022-09-21 12:08:49', '2022-09-21 12:08:49'),
(4, 'Evos Esport', '1663812598_1662629992_logo-evos.png', 'Indonesia', '1 September 2016\r\n', 'Salatiga Sport Center', 'Ivan Yeo', 'Coach Age', 'E-sport Pro Season 6', '2022-09-14', '11:09:00', '2022-09-21 12:09:58', '2022-09-21 12:09:58'),
(5, 'Geek Fam', '1663812636_1662630006_logo-geek.png', 'Indonesia', '2016\r\n', 'Salatiga Sport Center', 'Keat and Joseph', 'Coach Ruben', 'E-sport Pro Season 6', '2022-09-16', '09:12:00', '2022-09-21 12:10:36', '2022-09-21 12:10:36'),
(6, 'Onic Esport', '1663812680_1662630021_logo-onic.png', 'Indonesia', '26 Juli 2018\r\n', 'Salatiga Sport Center', 'Rob Clinton Kardinal', 'Coach Aldo', 'E-sport Pro Season 6', '2022-09-16', '09:13:00', '2022-09-21 12:11:20', '2022-09-21 12:11:20'),
(7, 'Rebellion Zion', '1663812722_1662630037_logo-rebellion.png', 'Indonesia', 'December 2019\r\n', 'Salatiga Sport Center', 'Red Bull Rebellion', 'Coach Cikoo', 'E-sport Pro Season 6', '2022-09-23', '09:15:00', '2022-09-21 12:12:02', '2022-09-21 12:12:02'),
(8, 'RRQ Hoshi', '1663812756_1662630049_logo-rrq.png', 'Indonesia', '2017\r\n', 'Salatiga Sport Center', 'Andrian Pauline', 'Coach Arcadia', 'E-sport Pro Season 6', '2022-09-22', '09:13:00', '2022-09-21 12:12:36', '2022-09-21 12:12:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_myteams2`
--

CREATE TABLE `tbl_myteams2` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `founded` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ground` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `president` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_coach` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `championship` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_myteams2`
--

INSERT INTO `tbl_myteams2` (`id`, `nama`, `image`, `country`, `founded`, `ground`, `president`, `head_coach`, `championship`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Alter Ego', '1663552248_logo-alterego.png', 'Indonesia', '2018', 'Salatiga Sport Center', 'Delwyn Sukamto', 'Coach Caesius', 'E-sport Pro Season 6', '2022-09-08', '07:00:00', '2022-09-18 11:50:48', '2022-09-18 11:50:48'),
(2, 'Aura Fire', '1663567824_logo-aura.png', 'Indonesia', '2018', 'Salatiga Sport Center', 'Daniel Santoso', 'Coach Tezet', 'E-sport Pro Season 6', '2022-09-14', '07:00:00', '2022-09-12 17:00:00', '2022-09-19 17:00:00'),
(3, 'Bigetron Alpha', '1663812529_1662630073_logo-bigetron.png', 'Indonesia', '28 March 2017\r\n', 'Salatiga Sport Center', 'Edwin Chia', 'Coach Vrendini', 'E-sport Pro Season 6', '2022-09-21', '09:09:00', '2022-09-21 12:08:49', '2022-09-21 12:08:49'),
(4, 'Evos Esport', '1663812598_1662629992_logo-evos.png', 'Indonesia', '1 September 2016\r\n', 'Salatiga Sport Center', 'Ivan Yeo', 'Coach Age', 'E-sport Pro Season 6', '2022-09-14', '11:09:00', '2022-09-21 12:09:58', '2022-09-21 12:09:58'),
(5, 'Geek Fam', '1663812636_1662630006_logo-geek.png', 'Indonesia', '2016\r\n', 'Salatiga Sport Center', 'Keat and Joseph', 'Coach Ruben', 'E-sport Pro Season 6', '2022-09-16', '09:12:00', '2022-09-21 12:10:36', '2022-09-21 12:10:36'),
(6, 'Onic Esport', '1663812680_1662630021_logo-onic.png', 'Indonesia', '26 Juli 2018\r\n', 'Salatiga Sport Center', 'Rob Clinton Kardinal', 'Coach Aldo', 'E-sport Pro Season 6', '2022-09-16', '09:13:00', '2022-09-21 12:11:20', '2022-09-21 12:11:20'),
(7, 'Rebellion Zion', '1663812722_1662630037_logo-rebellion.png', 'Indonesia', 'December 2019\r\n', 'Salatiga Sport Center', 'Red Bull Rebellion', 'Coach Cikoo', 'E-sport Pro Season 6', '2022-09-23', '09:15:00', '2022-09-21 12:12:02', '2022-09-21 12:12:02'),
(8, 'RRQ Hoshi', '1663812756_1662630049_logo-rrq.png', 'Indonesia', '2017\r\n', 'Salatiga Sport Center', 'Andrian Pauline', 'Coach Arcadia', 'E-sport Pro Season 6', '2022-09-22', '09:13:00', '2022-09-21 12:12:36', '2022-09-21 12:12:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `deskripsi` varchar(900) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `judul`, `date`, `author`, `category_id`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(2, 'RRQ MIKA DOMINASI KLASEMEN REGULAR SEASON WSL DENGAN 100% MATCH RATE', '22 Sep 2022', 'Wahyudin', 5, 'RRQ Mika yang tengah berjuang di Woman Star League (WSL) Season 5 bermain konsisten dengan selalu meraih kemenangan sejak awal hingga laga terakhir Regular Season. Hasilnya, RRQ Lelepinkan dan kawan-kawan lolos ke babak play-off dengan 23 point dan 100% match rate.\r\n\r\nFinish di peringkat keempat pada WSL edisi sebelumnya membuat RRQ Mika berbenah untuk mengarungi kompetisi MLBB ladies di Indonesia. Salah satu di antaranya adalah mendatangkan dua pemain baru, yaitu RRQ Enjii yang berposisi sebagai roamer dan RRQ Bill sebagai stand-in yang mengisi role Exp lane.\r\n\r\nDi Week 1 WSL Season 5, RRQ Mika langsung bermain di dua laga menghadapi Evos Lynx dan Dewa United Eve. RRQ Ash dan kawan-kawan pun berhasil meraih kemenangan dengan skor 2-0 di masing-masing pertandingan.', '1664167014.jpg', '2022-09-25 21:30:44', '2022-09-25 21:36:54'),
(3, 'YOU ARE WHAT YOU WEAR, RRQ DAN 3SECOND GABUNGKAN GAMER DAN FASHION ENTHUASIAST', '20 Sep 2022', 'Fendy Setya', 8, 'Industri esports di Indonesia yang terus bertumbuh telah membuka banyak peluang bagi brand untuk menjangkau audience yang lebih luas. Data dari Vero ASEAN mengungkapkan bahwa ada lebih dari 52 juta orang di Indonesia yang kini memainkan game esports. Di dalamnya termasuk para professional player dan juga Key Opinion Leaders yang membangun karakter unik mereka untuk menjangkau audience yang lebih luas.', '1664167261_news-5.jpg', '2022-09-25 21:41:01', '2022-09-25 21:41:01'),
(4, 'TAKLUKKAN TIM TUAN RUMAH, RRQ AKIRA JADI JUARA LIGA LATAM SEASON 2', '20 Sep 2022', 'Sandy Permana', 7, 'Bertemu Malvinas Gaming asal Peru di Grand Final Liga LATAM Season 2, RRQ Akira tampil percaya diri sejak game pertama. Berbekal permainan taktis dan disiplin, RRQ Kiing dan kawan-kawan terus mendominasi. Mendapatkan momentum untuk menang setelah menumbangkan Lord pada menit ke-15, RRQ Akira meraih poin game pertama satu menit setelahnya. Di game kali ini, RRQ Kiing yang menggunakan Baxia jungler menjadi MVP dengan 2 kill, 7 assist, tanpa tumbang.\r\n\r\nPada game kedua, RRQ Akira menguasai early hingga mid game. Namun, terjadi pertukaran yang mahal saat set-up Lord di menit ke-16. Tim lawan mampu menumbangkan 4 player RRQ Akira sebelum akhirnya merebut kemenangan game kedua. Skor pun berubah menjadi 1-1.', '1664172250_news-6.jpg', '2022-09-25 23:04:10', '2022-09-25 23:04:10'),
(5, 'FOES BJB RAIH GELAR JUARA PROMATCH KINGS CHAMPIONSHIP 2022', '23 Sep 2022', 'Wahyudin', 6, 'Gelaran Promatch Kings Championship 2022 menyita perhatian banyak tim amatir Mobile Legends: Bang Bang (MLBB). Ini terbukti dari target awal 256 slot tim yang dibuka, ada sebanyak 512 tim yang mendaftar pada Promatch Kings Championship 2022.\r\n\r\nBanyaknya tim amatir yang mendaftar tidak terlepas dari total hadiah yang ditawarkan dalam turnamen Promatch Kings Championship 2022, yaitu uang tunai Rp30 juta, trophy, medali, serta 1 buah Xiaomi 11 Ultra untuk MVP.\r\n\r\nIni merupakan salah satu keseriusan dari Promag untuk ikut mengembangkan industri esports yang tengah memiliki banyak penggemar. Promag hadir dan membuat turnamen Promatch Kings Championship 2022 bukan tanpa alasan, melainkan sebagai hobi yang sedang digandrungi oleh anak muda, terlebih setelah esports diresmikan sebagai cabang olahraga pada Asian Games 2021.', '1664172319_news-7.jpg', '2022-09-25 23:05:19', '2022-09-25 23:05:19'),
(6, '5 HAL YANG PALING SERING DITANYAKAN PEMULA YANG BARU BELAJAR CRYPTO', '22 Sep 2022', 'Fendy Setya', 8, 'Zilliqa memberikan solusi blockchain yang berperforma tinggi, aman, dan berskalibilitas untuk penggunaan  disentrilisasi dan usaha. Didirikan pada tahun 2017, Zilliqa dikembangkan oleh sebuah tim bisnis global dan pakar industri, ilmuwan, teknisi, spesialis finansial, serta venture creators. Berkomitmen untuk mengembangkan sebuah solusi blockchain yang inovatif dan berskala dengan pendekaran user-centric, Zilliqa terpacu oleh misi untuk memulai dan mengubah infrastruktur digital secara global. Teknologi Zilliqa telah menjadi tulang punggung dari pengamanan, ekonomi kreator konten dan influencer, desentralisasi dan open finance, digital advertising, financial services, incentivised marketing, dan olahraga.', '1664172478_news-8.jpg', '2022-09-25 23:07:58', '2022-09-25 23:07:58'),
(7, 'RRQ GANDENG RAK SEBELAH UNTUK PERKENALKAN SNACK LOKAL TERBAIK UNTUK GAMER', '22 Sep 2022', 'Sandy Permana', 8, 'Terbentuk dari 2019, Rak Sebelah adalah toko kumpulan produk makanan dan minuman lokal berkualitas dari UMKM & UKM yang telah di kurasi, berlokasi di Gedung Accelerice, Jakarta Selatan. Kategori produk tersebut meliputi makanan siap saji, makanan beku, snack, bumbu, minuman, dan lainnya. Rak Sebelah juga membantu para UMKM dalam program seperti konsultasi perizinan BPOM, program kementerian, kelas bisnis, komunitas, export, dan lainnya.', '1664172565_news-9.jpg', '2022-09-25 23:09:25', '2022-09-25 23:09:25'),
(8, 'TIM ASAL KALIMANTAN UTARA BERHASIL JADI JUARA RCC KULO SERIES', '22 Sep 2022', 'Wahyudin', 6, 'ada game pertama, Orccircle D.W berhasil menunjukkan kapasitasnya sebagai salah satu tim kuat di turnamen RRQ Community Championship. Berhasil mengamankan beberapa hero META, seperti Roger, Clint, dan Esmeralda, Orccircle D.W memenangkan game pertama. Sukses menumbangkan Lord di menit ke-14, para pemain Orccircle D.W menyerang bottom lane dan sukses menghabisi 4 pemain Fisher Esports serta menang dengan skor kill 14-6.\r\n\r\nDi game kedua, Fisher Esports pun sukses memberikan perlawanan dan menang sehingga menjadikan skor imbang 1-1. Dforceee yang menggunakan Clint bagi Fisher Esports tampil apik di game kedua. Performa bagusnya di Land of Dawn berhasil mengantarkan timnya meraih kemenangan dan memaksakan laga berlanjut di game ketiga. Atas performa apiknya, Dforceee berhasil menjadi MVP dengan 5 kill, 4 assist, dan hanya satu kali tumbang.', '1664172637_news-10.jpg', '2022-09-25 23:10:37', '2022-09-25 23:10:37'),
(9, 'TIMNAS MLBB INDONESIA RAIH MEDALI PERAK DI SEA GAMES 2021', '22 Sep 2022', 'Sandy Permana', 6, 'Timnas Mobile Legends: Bang-Bang (MLBB) Indonesia harus mengakui keunggulan Filipina di partai Grand Final SEA Games 2021, Jumat, 20 Mei 2022. Tim yang terdiri dari INA Alberttt, INA Vyn, INA R7, INA Sanz, INA CW, INA Kiboy, dan INA Luminaire membawa pulang medali perak setelah menyerah 3-1 di partai puncak.\r\n\r\nTergabung dalam Grup B, Timnas MLBB Indonesia bersaing dengan tuan rumah Vietnam dan Singapura untuk lolos ke babak berikutnya. Bermain dengan format Best of 2 (Bo2), Timnas MLBB Indonesia berhasil mengoleksi poin sempurna, yaitu 6, dan dipastikan lolos ke Semifinal.\r\n\r\nDi babak Semifinal, Timnas MLBB Indonesia bertemu dengan Malaysia yang diisi oleh para pemain Todak dan Geek Fam. Pada laga tersebut, Timnas MLBB Indonesia bermain dengan taktis dan disiplin. Hasilnya, INA R7 dan kawan-kawan sukses menekuk perlawanan Malaysia dengan skor telak, 2-0.', '1664172710_news-3.jpg', '2022-09-25 23:11:50', '2022-09-25 23:11:50'),
(10, 'MENANG 4-1, RRQ HOSHI RAIH GELAR KEEMPAT MPL ID', '22 Sep 2022', 'Wahyudin', 7, 'RRQ Hoshi berhasil menjadi juara MLBB Professional League (MPL) ID Season 9 setelah mengalahkan Onic Esports, dengan skor 4-1, Minggu, 24 April 2022. Ini menjadi gelar keempat RRQ Hoshi di sepanjang turnamen MPL ID berlangsung. Tak hanya sampai di situ, Midlaner RRQ Hoshi, RRQ Clayyy pun terpilih menjadi MVP di Grand Final.\r\n\r\nMenang di Game Pertama, RRQ Hoshi Diimbangi Onic Esports di Game Kedua\r\n\r\nPada game pertama, RRQ Hoshi kembali mengeluarkan karakter gameplay yang rapi, ofensif, tapi tetap disiplin. Di game ini, RRQ Alberttt yang berhasil mendapatkan Ling bermain dengan sangat baik.\r\n\r\nRRQ Hoshi berhasil mengamankan game pertama setelah berhasil menumbangkan lord yang sudah enhance di menit ke-19. Melakukan one straight push bersama lord, RRQ R7 dan kawan-kawan sukses menyudahi perlawanan Onic Esports di game pertama.', '1664172865_news-11.jpg', '2022-09-25 23:14:25', '2022-09-25 23:14:25'),
(11, 'RCC BIZNET KEMBALI HADIR, JADI AJANG PEMBUKTIAN KOMUNITAS AMATIR', '22 Sep 2022', 'Wahyudin', 5, 'Sukses dengan RRQ Community Championship (RCC) tahun lalu, RRQ kembali menggelar RCC untuk komunitas esports tanah air. Kali ini, disponsori oleh Biznet, RRC Biznet menawarkan prize pool sebesar Rp5 juta.\r\n\r\nSama seperti edisi sebelumnya, RCC Biznet kali ini juga masih akan mempertandingkan game Mobile Legends: Bang Bang (MLBB). Dengan target peserta yang mendaftar sebanyak 512 tim, RCC Biznet diharapkan dapat mewadahi antusiasme komunitas game MLBB untuk menjajal sengitnya pertandingan di dunia esports.', '1664172999_news-12.jpg', '2022-09-25 23:16:39', '2022-09-25 23:16:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_orders`
--

INSERT INTO `tbl_orders` (`id`, `user_id`, `tanggal`, `status`, `kode`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(6, 1, '2022-09-23', '1', 310, 699, '2022-09-23 00:00:22', '2022-09-23 00:00:29'),
(7, 2, '2022-09-23', '0', 323, 0, '2022-09-23 01:36:21', '2022-09-23 02:04:14'),
(8, 1, '2022-09-26', '1', 869, 789, '2022-09-25 18:52:10', '2022-09-25 19:50:34'),
(9, 3, '2022-09-27', '0', 781, 0, '2022-09-26 21:55:37', '2022-09-26 21:55:41'),
(10, 4, '2022-09-28', '0', 736, 2020, '2022-09-27 19:20:16', '2022-09-27 19:20:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `product_id`, `order_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(11, 16, 6, 1, 699, '2022-09-23 00:00:22', '2022-09-23 00:00:22'),
(13, 11, 8, 1, 789, '2022-09-25 19:50:18', '2022-09-25 19:50:18'),
(14, 2, 10, 2, 910, '2022-09-27 19:20:16', '2022-09-27 19:20:16'),
(15, 3, 10, 2, 1110, '2022-09-27 19:20:39', '2022-09-27 19:20:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_players`
--

CREATE TABLE `tbl_players` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebangsaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seasons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `games` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_players`
--

INSERT INTO `tbl_players` (`id`, `image`, `nama`, `kebangsaan`, `posisi`, `umur`, `seasons`, `games`, `points`, `about`, `team_id`, `created_at`, `updated_at`) VALUES
(1, '1664241607_alter-ahmad.png', 'Alter Ahmad', 'Indonesia', 'Goldlane', '20', '2021/2022', '3', 5, 'Alter Ego Goldlane roaster in E-sport Pro Season 6, Salatiga Sport Center 2022.', 1, '2022-09-26 18:20:07', '2022-09-26 18:20:07'),
(2, '1664241857_alter-celiboy.png', 'Alter Celiboy', 'Indonesia', 'Jungler', '21', '2021/2022', '3', 5, 'Alter Ego Jungler line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 1, '2022-09-26 18:24:17', '2022-09-26 18:24:17'),
(3, '1664241932_alter-devkoch.png', 'Alter Devkoch', 'Indonesia', 'Tank', '19', '2021/2022', '3', 5, 'Alter Ego Tank line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 1, '2022-09-26 18:25:32', '2022-09-26 18:25:32'),
(5, '1664242040_alter_leomurphy.png', 'Alter Leomurphy', 'Indonesia', 'Roam', '22', '2021/2022', '3', 5, 'Alter Ego Roam line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 1, '2022-09-26 18:27:20', '2022-09-26 18:27:20'),
(6, '1664242190_aura-caid.png', 'Aura Caid', 'Indonesia', 'Goldlane', '21', '2021/2022', '3', 4, 'Aura Fire Goldlane line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 2, '2022-09-26 18:29:50', '2022-09-26 18:29:50'),
(7, '1664242241_aura-facehungger.png', 'Aura Facehungger', 'Indonesia', 'Midlaner', '21', '2021/2022', '3', 4, 'Aura Fire Midlane line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 2, '2022-09-26 18:30:41', '2022-09-26 18:30:41'),
(8, '1664242286_aura-fluffy.png', 'Aura Fluffy', 'Indonesia', 'Explaner', '21', '2021/2022', '3', 4, 'Aura Fire Explaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 2, '2022-09-26 18:31:26', '2022-09-26 18:31:26'),
(9, '1664242336_aura-god1va.png', 'Aura God1va', 'Indonesia', 'Roamer', '22', '2021/2022', '3', 4, 'Aura Fire Roamer line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 2, '2022-09-26 18:32:16', '2022-09-26 18:32:16'),
(10, '1664242379_aura-kabuki.png', 'Aura Kabuki', 'Indonesia', 'Goldlane', '20', '2021/2022', '3', 4, 'Aura Fire Goldlane line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 2, '2022-09-26 18:32:59', '2022-09-26 18:32:59'),
(11, '1664242511_bigetron-falah.png', 'Bigetron Falah', 'Indonesia', 'Midlaner', '21', '2021/2022', '3', 3, 'Bigetron Aplha Midlane line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 3, '2022-09-26 18:35:11', '2022-09-26 18:35:11'),
(12, '1664242633_bigetron-kyy.png', 'Bigetron Kyy', 'Indonesia', 'Roamer', '20', '2021/2022', '3', 6, 'Bigetron Alpha Roamer line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 3, '2022-09-26 18:37:13', '2022-09-26 18:37:13'),
(13, '1664242846_bigetron-markyyy.png', 'Bigetron Markyyy', 'Indonesia', 'Goldlane', '22', '2021/2022', '3', 6, 'Bigetron Aplha Goldlane line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 3, '2022-09-26 18:40:46', '2022-09-26 18:40:46'),
(14, '1664242916_bigetron-maxx.png', 'Bigetron Maxxx', 'Indonesia', 'Jungler', '20', '2021/2022', '3', 6, 'Bigetron Aplha Jungler line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 3, '2022-09-26 18:41:56', '2022-09-26 18:41:56'),
(15, '1664242973_bigetron-xorizo.png', 'Bigetron Xorizo', 'Indonesia', 'Explaner', '21', '2021/2022', '3', 6, 'Bigetron Aplha Explaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 3, '2022-09-26 18:42:53', '2022-09-26 18:42:53'),
(16, '1664243065_evos-clover.png', 'Evos Clover', 'Indonesia', 'Goldlane', '20', '2021/2022', '3', 4, 'Evos Esport Goldlane line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 4, '2022-09-26 18:44:25', '2022-09-26 18:44:25'),
(17, '1664243151_evos-cr1te.png', 'Evos Cr1te', 'Indonesia', 'Midlaner', '22', '2021/2022', '3', 4, 'Evos Esport Midlaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 4, '2022-09-26 18:45:51', '2022-09-26 18:45:51'),
(18, '1664243206_evos-pendragon.png', 'Evos Pendragon', 'Indonesia', 'Explaner', '20', '2021/2022', '3', 4, 'Evos Esport Explaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 4, '2022-09-26 18:46:46', '2022-09-26 18:46:46'),
(19, '1664243296_evos-dreams.png', 'Evos Dreams', 'Indonesia', 'Roam', '20', '2021/2022', '3', 4, 'Evos Esport Roam line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 4, '2022-09-26 18:48:16', '2022-09-26 18:48:16'),
(20, '1664243340_evos-sutsujin.png', 'Evos Sutsujin', 'Indonesia', 'Jungle', '22', '2021/2022', '3', 4, 'Evos Esport Jungle line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 4, '2022-09-26 18:49:00', '2022-09-26 18:49:00'),
(21, '1664243450_geek-baloyskie.png', 'Geek Baloyskie', 'Indonesia', 'Roamer', '20', '2021/2022', '3', 5, 'Geek Fam Roamer line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 5, '2022-09-26 18:50:50', '2022-09-26 18:50:50'),
(22, '1664243500_geek-janaaqt.png', 'Geek Janaaqt', 'Indonesia', 'Jungler', '22', '2021/2022', '3', 5, 'Geek Fam Jungle line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 5, '2022-09-26 18:51:40', '2022-09-26 18:51:40'),
(23, '1664243542_geek-luke.png', 'Geek Luke', 'Indonesia', 'Explaner', '22', '2021/2022', '3', 5, 'Geek Fam Explaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 5, '2022-09-26 18:52:22', '2022-09-26 18:52:22'),
(24, '1664243586_geek-rupture.png', 'Geek Rupture', 'Indonesia', 'Tank', '22', '2021/2022', '3', 5, 'Geek Fam Tank line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 5, '2022-09-26 18:53:06', '2022-09-26 18:53:06'),
(25, '1664243665_geek-renesmee.png', 'Geek Renesmee', 'Indonesia', 'Goldlane', '21', '2021/2022', '3', 5, 'Geek Fam Goldlane line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 5, '2022-09-26 18:54:25', '2022-09-26 18:54:25'),
(26, '1664243754_onic-cw.png', 'Onic CW', 'Indonesia', 'Goldlane', '21', '2021/2022', '4', 8, 'Onic Esport Goldlaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 6, '2022-09-26 18:55:54', '2022-09-26 18:55:54'),
(27, '1664243797_onic-drian.png', 'Onic Drian', 'Indonesia', 'All Role', '22', '2021/2022', '4', 8, 'Onic Esport All Role line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 6, '2022-09-26 18:56:37', '2022-09-26 18:56:37'),
(28, '1664243837_onic-kiboy.png', 'Onic Kiboy', 'Indonesia', 'Roamer', '22', '2021/2022', '4', 8, 'Onic Esport Roamer line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 6, '2022-09-26 18:57:17', '2022-09-26 18:57:17'),
(29, '1664243907_onic-samoht.png', 'Onic Samoht', 'Indonesia', 'Roamer/Midlaner', '22', '2021/2022', '4', 8, 'Onic Esport Roamer/Midlaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 6, '2022-09-26 18:58:27', '2022-09-26 18:58:27'),
(30, '1664243970_onic-kairi.png', 'Onic Kairi', 'Indonesia', 'Jungler/Core', '22', '2021/2022', '4', 8, 'Onic Esport Jungler/Core line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 6, '2022-09-26 18:59:30', '2022-09-26 18:59:30'),
(31, '1664244048_rebellion-haizz.png', 'Rebellion Haizz', 'Indonesia', 'Goldlane', '22', '2021/2022', '4', 6, 'Rebellion Zion Goldlaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 7, '2022-09-26 19:00:48', '2022-09-26 19:00:48'),
(32, '1664244103_rebellion-swaylow.png', 'Rebellion Swaylow', 'Indonesia', 'All Role', '21', '2021/2022', '4', 6, 'Rebellion Zion All Role line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 7, '2022-09-26 19:01:43', '2022-09-26 19:01:43'),
(33, '1664244154_rebellion-vall.png', 'Rebellion Vall', 'Indonesia', 'Roam/Support', '22', '2021/2022', '4', 6, 'Rebellion Zion Roam/Support line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 7, '2022-09-26 19:02:34', '2022-09-26 19:02:34'),
(34, '1664244200_rebellion-widjanarko.png', 'Rebellion Widjanarko', 'Indonesia', 'Roamer', '22', '2021/2022', '4', 6, 'Rebellion Zion Roamer line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 7, '2022-09-26 19:03:20', '2022-09-26 19:03:20'),
(35, '1664244285_rebellion-dyernnn.png', 'Rebellion Dyrennn', 'Indonesia', 'Ofllaner', '22', '2021/2022', '4', 6, 'Rebellion Zion Ofllaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 7, '2022-09-26 19:04:45', '2022-09-26 19:04:45'),
(36, '1664244365_rrq-alberttt.png', 'RRQ Albert', 'Indonesia', 'Jungler', '20', '2021/2022', '4', 8, 'RRQ Hoshi Jungler line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 8, '2022-09-26 19:06:05', '2022-09-26 19:06:05'),
(37, '1664244432_rrq-lemon.png', 'RRQ Lemon', 'Indonesia', 'Midlane/Goldlane', '22', '2021/2022', '4', 8, 'RRQ Hoshi Midlane/Goldlane line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 8, '2022-09-26 19:07:12', '2022-09-26 19:07:12'),
(38, '1664244471_rrq-skylar.png', 'RRQ Skylar', 'Indonesia', 'Goldlane', '21', '2021/2022', '4', 8, 'RRQ Hoshi Goldlane line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 8, '2022-09-26 19:07:51', '2022-09-26 19:07:51'),
(39, '1664244556_rrq-clay.png', 'RRQ Clayyy', 'Indonesia', 'Midlaner', '20', '2021/2022', '4', 8, 'RRQ Hoshi Midlaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 8, '2022-09-26 19:09:16', '2022-09-26 19:09:16'),
(40, '1664244592_rrq-r7.png', 'RRQ R7', 'Indonesia', 'Ofllaner', '22', '2021/2022', '4', 8, 'RRQ Hoshi Ofllaner line up in E-sport Pro Season 6, Salatiga Sport Center 2022.', 8, '2022-09-26 19:09:52', '2022-09-26 19:09:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_player_teams`
--

CREATE TABLE `tbl_player_teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_player` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `seasons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `games` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_previews`
--

CREATE TABLE `tbl_previews` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `created_at`, `updated_at`, `category_id`, `nama`, `stok`, `harga`, `deskripsi`, `image`) VALUES
(2, '2022-09-22 00:31:15', '2022-09-22 21:30:26', 1, 'CHAMPION HOODIE (WHITE)', 227, 455, '*Very Limited Quantities* Our hype collab with Champion is now available for a limited time! This is the hoodie of choice for many of our streamers, influencers, and professional players alike - taking the best very from Champion, and imbuing our Secret style.', 'CHAMPION-HOODIE-(WHITE)_img.webp'),
(3, '2022-09-22 00:38:46', '2022-09-22 22:57:36', 1, 'CLASSIC TEE 2 BUNDLE', 228, 555, 'El Classico, the Tee that carries our iconic logo and embodies our brand – a fresh, clean design that can be worn casually, but will always turn heads.  This Tee comes in a 2-Pack of inverse Black and White styles, so you have an option for any mood.', 'CLASSIC-TEE-2-PACK-BUNDLE_img.webp'),
(4, '2022-09-22 00:51:24', '2022-09-22 00:51:24', 1, 'ESSENTIAL PULLOVER (BLACK)', 230, 699, 'The best Pullover in esports.  A half-zip design provides flexibility in wear while allowing for the convenience of traditional hoodie pockets in front.  Plush blended cotton construction buttery to the touch, a brushed cotton interior with just the right amount of stretch, molded zipper for adjustability, finished with clean logo branding to represent the #SecretFam.', 'ESSENTIAL-PULLOVER-(BLACK)_img.webp'),
(5, '2022-09-22 00:52:17', '2022-09-22 00:52:17', 1, 'ESSENTIAL PULLOVER (WHITE)', 111, 988, 'The best Pullover in esports.  A half-zip design provides flexibility in wear while allowing for the convenience of traditional hoodie pockets in front.  Plush blended cotton construction buttery to the touch, a brushed cotton interior with just the right amount of stretch, molded zipper for adjustability, finished with clean logo branding to represent the #SecretFam.', 'ESSENTIAL-PULLOVER-(WHITE)_img.webp'),
(6, '2022-09-22 00:54:01', '2022-09-22 00:54:01', 2, 'ESSENTIAL SWEETS', 230, 111, 'Whether grinding for hours or out and about, these amazingly comfortable sweats will get you through the day no matter the activity.  Plush blended cotton construction buttery to the touch, a brushed cotton interior with just the right amount of stretch, zippered pockets for the ultimate convenience, finished with clean logo branding down the sides to represent the #SecretFam.', 'ESSENTIAL-SWEETS_img.webp'),
(7, '2022-09-22 00:55:32', '2022-09-22 00:55:32', 2, 'EVOLUTION OVERSIZED TEE', 230, 988, 'Update your look with the Evolution of our first lifestyle collection.  In fresh white colourway, this OVERSIZED ultra comfortable tee is crafted from soft blended cotton in a loose fitting design that embodies the spirit force of Team Secret, unrelenting and forever striving for a greater future.', 'EVOLUTION-OVERSIZED-TEE_img.webp'),
(8, '2022-09-22 00:57:36', '2022-09-22 00:57:36', 2, 'NXTLVL OVERSIZED TEE', 230, 999, 'Take on the Next Level with us in the final edition of our debut lifestyle collection.  Featuring our iconic Logo in an OVERSIZED ultra comfortable tee, this design pays homage to our rich legacy in esports, while signaling that the Next Level is coming -- and we are ready to take it on!', 'NXTLVL-OVERSIZED-TEE_img.webp'),
(9, '2022-09-22 00:58:44', '2022-09-22 00:58:44', 2, 'ORIGIN OVERSIZED TEE', 230, 988, 'The first drop in our bold lifestyle collection, the Origin tee recalls the remarkable journey of Team Secret from an exciting homegrown team, to now a global esports brand.  Just like the architectural elements suggest, we have built much but we are only partially done.  Come join us and get a front row seat to action!', 'ORIGIN-OVERSIZED-TEE_img.webp'),
(10, '2022-09-22 00:59:45', '2022-09-22 00:59:45', 3, 'SECRET FACE MASK', 110, 295, 'Stay safe AND fashionable with our stylish Secret face masks that provide extended comfort for all-day use. Share with a friend, or switch designs every time you step outside with TWO masks included in every kit. Mask up and let\'s fight COVID-19 together!', 'SECRET-FACE-MASK_img.webp'),
(11, '2022-09-22 01:00:37', '2022-09-25 19:50:34', 3, 'SECRET FAN JERSEY', 254, 789, 'The original replica of our popular Pro Jersey, made accessible for Team Secret fans worldwide. Created with the same high quality athletic mesh fabric found on traditional sports jerseys, fans will experience complete comfort on game day or any other day.', 'SECRET-FAN-JERSEY_img.webp'),
(12, '2022-09-22 01:01:57', '2022-09-22 01:01:57', 3, 'SECRET PRO HOODIE (WHITE)', 230, 699, 'Rep our professional team kit with the Team Secret Full Zip hoodie. Precision embroidered logos that show off our full array of sponsors, custom cast hoodie pullers, and a molded Team Secret zipper round out all the intricate details that make this hoodie stage-ready for you and our pros.', 'SECRET-PRO-HOODIE-(WHITE)_img.webp'),
(13, '2022-09-22 01:02:45', '2022-09-22 01:02:45', 3, 'SPORT TEE (BLACK)', 788, 877, 'The Reverso version of our top selling Sport Tee!  Soft, comfortable, and breathable - our Sport Tee can be worn while relaxing on the couch during a tournament broadcast or sweating it out in an intense, hours-long ranked session. A truly versatile shirt that you\'ll never want to take off.', 'SPORT-TEE-(BLACK)_img.webp'),
(14, '2022-09-22 01:05:13', '2022-09-22 01:05:13', 4, 'SPORT TEE (WHITE)', 666, 699, 'Soft, comfortable, and breathable - our Sport Tee can be worn while relaxing on the couch during a tournament broadcast, or sweating it out in an intense, hours-long ranked session. A truly versatile shirt that you\'ll never want to take off.', 'SPORT-TEE-(WHITE)_img.webp'),
(16, '2022-09-22 01:09:53', '2022-09-23 00:00:29', 4, 'CLASSIC SUMMER CAP', 544, 699, 'Complete your look with our stunning logo cap! In a black durable fabric, this cap features our boldly designed fully embroidered stitched logo, with subtle TEAM SECRET edging on the brim for an elegant finish.  With breathable construction and adjustable straps for a custom fit, the Classic Summer Cap is made for your comfort and everyday wear.', 'CLASSIC-SUMMER-CAP_img.webp'),
(17, '2022-09-22 01:12:10', '2022-09-22 01:12:10', 4, 'SECRET FLUX BEANIE', 111, 499, 'Whether White on Black or Black on White, this ultra-warm reversible beanie may be worn either way to give you twice the look. With precision embroidered Secret logos on lightweight stretch construction, you\'ll always stay stylish in the deep of winter with the Flux Beanie.', 'FLUX-BEANIE_img.webp'),
(19, '2022-09-22 01:16:18', '2022-09-22 01:16:18', 4, 'SECRET TEE', 111, 677, 'Bold SECRET branding that proudly displays your allegiances, yet subtly stylish for everyday wear. Premium heavyweight cotton construction makes this the perfect Tee for any situation, with just the right amount of stretch comfort to make this the perfect Tee for every situation.', 'SECRET-TEE_img.webp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profiles`
--

CREATE TABLE `tbl_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebangsaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `negara` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` int(11) NOT NULL,
  `game` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_searchresults`
--

CREATE TABLE `tbl_searchresults` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` blob NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tournaments`
--

CREATE TABLE `tbl_tournaments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prizepool` int(11) NOT NULL,
  `seats` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_tournaments`
--

INSERT INTO `tbl_tournaments` (`id`, `title`, `image`, `prizepool`, `seats`, `date`, `place`, `created_at`, `updated_at`) VALUES
(1, 'E-sport Pro', '7gbOFmA5CwxmTYyK9AeZB28P9ZtVSS.png', 1000000, '1980', '23 - 27 Oct', 'Salatiga Sport Center', '2022-09-29 18:19:53', '2022-09-29 18:19:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nasionality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `born` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `fullname`, `nasionality`, `born`, `language`, `phone`, `hobi`, `about`, `level`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'noimage.png', 'YWN_GANS', 'Yawan Dowski', 'Indonesian', '21 Jan 2077', 'English', '087878400674', 'Eat ice cream', NULL, 'admin', 'fendy@email.com', '$2y$10$ARRLQeuu2MoLBzkLE4FL4.koZNNxROwEV7gAjvV4wh5AVml5i41rO', 'TvnpOYUnN3GMWOCOBYdYCeseZK12qD24ZfgJY4ZWZXA0fQ3Ng1L9BN37jqf0', '2022-09-22 00:25:25', '2022-09-29 18:54:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_coach`
--
ALTER TABLE `tbl_coach`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_dataplayers`
--
ALTER TABLE `tbl_dataplayers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_gambar_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `tbl_matches`
--
ALTER TABLE `tbl_matches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_matchs`
--
ALTER TABLE `tbl_matchs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_id` (`team_id`),
  ADD UNIQUE KEY `team_id2` (`team_id2`);

--
-- Indeks untuk tabel `tbl_myteams`
--
ALTER TABLE `tbl_myteams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_myteams2`
--
ALTER TABLE `tbl_myteams2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_players`
--
ALTER TABLE `tbl_players`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_player_teams`
--
ALTER TABLE `tbl_player_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_previews`
--
ALTER TABLE `tbl_previews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_searchresults`
--
ALTER TABLE `tbl_searchresults`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tournaments`
--
ALTER TABLE `tbl_tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_coach`
--
ALTER TABLE `tbl_coach`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_dataplayers`
--
ALTER TABLE `tbl_dataplayers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_matches`
--
ALTER TABLE `tbl_matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_matchs`
--
ALTER TABLE `tbl_matchs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_myteams`
--
ALTER TABLE `tbl_myteams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_myteams2`
--
ALTER TABLE `tbl_myteams2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_players`
--
ALTER TABLE `tbl_players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tbl_player_teams`
--
ALTER TABLE `tbl_player_teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_previews`
--
ALTER TABLE `tbl_previews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_searchresults`
--
ALTER TABLE `tbl_searchresults`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_tournaments`
--
ALTER TABLE `tbl_tournaments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD CONSTRAINT `tbl_gambar_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tbl_matchs`
--
ALTER TABLE `tbl_matchs`
  ADD CONSTRAINT `tbl_matchs_ibfk_1` FOREIGN KEY (`team_id2`) REFERENCES `tbl_myteams2` (`id`),
  ADD CONSTRAINT `tbl_matchs_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `tbl_myteams` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
