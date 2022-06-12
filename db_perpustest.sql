/*
 Navicat Premium Data Transfer

 Source Server         : mykoneksi
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : db_perpustest

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 09/06/2022 20:42:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bibliografis
-- ----------------------------
DROP TABLE IF EXISTS `bibliografis`;
CREATE TABLE `bibliografis`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `edisi` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penulis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `penerbit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tahun` date NULL DEFAULT NULL,
  `sinopsis` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_halaman` int NULL DEFAULT NULL,
  `isbn` bigint NULL DEFAULT NULL,
  `lokasi_penyimpanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah_stock` int NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bibliografis
-- ----------------------------
INSERT INTO `bibliografis` VALUES (1, 'Mindset Mengubah Pola Berpikir untuk Perubahan Besar dalam Kehidupan Anda', 'Pertama', 'Carol S. Dweckm PH.D.', 'PT. Bentara Aksara Cahaya (baca)', '2022-01-16', 'Terbukti telah mengubah cara orang melihat dunia dan kesuksesan hidup di berbagai belahan dunia, Mindset bertengger jadi topseller di amazon.com sejak 13 tahun lalu hingga sekarang Paparan tentang kesuksesan dalam buku ini sangat mendasar dan langka. Lazimnya, buku-buku tentang kesuksesan lebih menawarkan sisi-sisi praktis. Namun, buku ini justru mengajak Anda menggarap inti masalah kesuksesan: pikiran', 'Bisnis', NULL, 2147483647, 'RAK-01', 3, 'mindset.png', NULL, NULL);
INSERT INTO `bibliografis` VALUES (3, 'Atomic Habits “Cara Mudah dan Terbukti Untuk Membentuk kebiasaan Baik dan Menghilangkan Kebiasaan Buruk”', 'Pertama', 'James Clear', 'Gramedia Pustaka Utama', '2019-09-16', 'Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara lain. Ia tahu bahwa perubahan nyata berasal dari efek gabungan ratusan keputusan kecil—dari mengerjakan dua push-up sehari, bangun lima menit lebih awal, sampai menahan sebentar hasrat untuk menelepon. Ia menyebut semua tadi atomic habits.', 'Self Improvement', 356, 2147483647, 'RAK-02', 2, 'atomic_1653398956.jpg', NULL, '2022-05-24 13:29:16');
INSERT INTO `bibliografis` VALUES (10, 'Jaringan Yahudi Internasional di nusantara', 'Kedua', 'Artawijaya', 'Pustaka Al-Kautsar', '2011-05-03', 'Pengarang buku ‘Jaringan Yahudi Internasional di Nusantara’, Artawijaya mempersoalkan kredibiliti pemerintah perihal buku pelajaran sejarah yang ada di sekolah-sekolah. Hal ini berkait mengenai fakta dan data keberadaan Yahudi dan Freemasonry di Indonesia yang tidak tercatat di buku-buku pelajaran tersebut.\r\n\r\n“Harus dipersoalkan ke pemerintah mengapa jaringan Freemasonry yang sudah mengakar ratusan tahun di negeri ini tidak masuk dalam buku buku sejarah.” Kata Artawijaya kepada Eramuslim.com, 16/05/2011.', 'Agama', 296, 6571238891, '12', 3, 'yahudi_1653393622.jpg', '2022-05-24 12:00:02', '2022-05-24 12:00:22');
INSERT INTO `bibliografis` VALUES (11, 'Berubah atau Punah: Bertransformasi di Tengah Disrupsi', 'Pertama', 'Pambudi Sunarsihanto', 'Penerbit Buku Kompas', '2021-05-11', 'Buku ini berisi berbagai pengalaman konkret dan luas yang dimiliki oleh para praktisi profesional sumber daya manusia. Paparan dalam bentuk story telling meliputi berbagai tahapan transformasi, serta mencakup juga variasi tantangan dan bagaimana mereka mengatasinya. Untuk itu, para penulis sepakat memberi judul buku ini ?Berubah atau Punah? yang menggambarkan sebuah ajakan untuk bertransformasi di tengah pelbagai disrupsi yang terjadi saat ini. Inilah sebuah panggilan nyata untuk membawa perubahan budaya di dalam organisasi atau perusahaan untuk menjadi lebih baik lagi.', 'Bisnis', 336, 9786233465, '123', 2, 'berubah_1653395744.webp', '2022-05-24 12:35:31', '2022-05-24 12:35:44');
INSERT INTO `bibliografis` VALUES (12, 'The Great Shifting: Menyikapi Perubahan Besar di Era Disrupsi', 'Keenam', 'Rhenald Kasali', 'PT Gramedia Pustaka Utama', '2018-07-12', 'Begitulah zaman kita hidup sekarang. Fenomena itu akrab disebut disrupsi. Di kamus, kata itu berarti tercerabut dari akar. Namun, kini di jagat bisnis maknanya diperluas menjadi perubahan fundamental atau mendasar.\r\n\r\nPersis digambarkan ungkapan di atas, yakni Uber, Grab, dan Gojek mendisrupsi bisnis transportasi, Facebook menguasai lanskap media, dan Airbnb menghempaskan jaringan hotel-hotel besar. Sekarang, hidup rasanya nikmat betul untuk naik angkutan umum, pesan makanan, pesan penginapan, hingga baca berita cukup klak-klik. Padahal, sampai sepuluh tahun lalu banyak dari hal itu baru sebatas angan-angan.', 'Bisnis', 517, 9786028760, '01', NULL, 'shifting_1653399204.jpg', '2022-05-24 13:33:24', '2022-05-24 13:33:24');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for koleksis
-- ----------------------------
DROP TABLE IF EXISTS `koleksis`;
CREATE TABLE `koleksis`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `jenis_koleksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bibliografi_id` int NOT NULL,
  `status_koleksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kondisi_koleksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `bibliografi_id`(`bibliografi_id` ASC) USING BTREE,
  CONSTRAINT `koleksis_ibfk_1` FOREIGN KEY (`bibliografi_id`) REFERENCES `bibliografis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 113 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of koleksis
-- ----------------------------
INSERT INTO `koleksis` VALUES (100, 'Buku Bisnis', 1, 'pinjam', 'baik', NULL, '2022-05-26 17:13:40');
INSERT INTO `koleksis` VALUES (101, 'Buku Bisnis', 1, 'ada', 'baik', NULL, '2022-05-30 10:06:52');
INSERT INTO `koleksis` VALUES (102, 'Buku Bisnis', 1, 'ada', 'jelek', NULL, NULL);
INSERT INTO `koleksis` VALUES (104, 'Buku Motivasi', 3, 'ada', 'baik', NULL, NULL);
INSERT INTO `koleksis` VALUES (105, 'Bebas', 1, 'pinjam', 'jelek', '2022-05-23 18:44:58', '2022-05-23 18:44:58');
INSERT INTO `koleksis` VALUES (106, 'Bebas', 1, 'pinjam', 'jelek', '2022-05-23 18:46:02', '2022-05-23 18:46:02');
INSERT INTO `koleksis` VALUES (108, 'Buku', 1, 'pinjam', 'jelek', '2022-05-24 08:06:01', '2022-05-24 08:07:58');
INSERT INTO `koleksis` VALUES (109, 'Buku Agama', 10, 'ada', 'baik', '2022-05-24 12:30:58', '2022-06-09 10:05:21');
INSERT INTO `koleksis` VALUES (110, 'Bebas', 11, 'pinjam', 'baik', '2022-05-25 10:34:43', '2022-05-26 17:21:51');

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_member` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email_member` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nohp_member` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 204 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES (200, 'Tatang', 'Suratang', 'Laki-laki', 'Umum', 'tatang@gmail.com', '085858123', NULL, NULL, NULL);
INSERT INTO `members` VALUES (202, 'Dummy', NULL, 'Laki-laki', 'Umum', 'dummy@gmail.com', '123', 'Jln GrandBlue', '2022-05-25 14:08:36', '2022-05-25 14:08:36');
INSERT INTO `members` VALUES (203, 'Yuki', 'Uzumaki', 'Perempuan', 'Pegawai', 'uzumaki@gmail.com', '094958123', 'Jln EastBlue', '2022-06-08 11:11:32', '2022-06-08 11:11:32');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pengembalians
-- ----------------------------
DROP TABLE IF EXISTS `pengembalians`;
CREATE TABLE `pengembalians`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `sirkulasi_id` int NOT NULL,
  `tanggal_pengembalian` date NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sirkulasi_id`(`sirkulasi_id` ASC) USING BTREE,
  CONSTRAINT `pengembalians_ibfk_1` FOREIGN KEY (`sirkulasi_id`) REFERENCES `sirkulasis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 410 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pengembalians
-- ----------------------------
INSERT INTO `pengembalians` VALUES (400, 304, '2022-05-29', NULL, NULL);
INSERT INTO `pengembalians` VALUES (401, 301, '2022-05-30', '2022-05-30 09:15:43', '2022-05-30 09:15:43');
INSERT INTO `pengembalians` VALUES (402, 302, '2022-05-30', '2022-05-30 10:06:52', '2022-05-30 10:06:52');
INSERT INTO `pengembalians` VALUES (408, 317, '2022-06-09', '2022-06-09 09:51:39', '2022-06-09 09:51:39');
INSERT INTO `pengembalians` VALUES (409, 319, '2022-06-09', '2022-06-09 10:05:21', '2022-06-09 10:05:21');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for sirkulasis
-- ----------------------------
DROP TABLE IF EXISTS `sirkulasis`;
CREATE TABLE `sirkulasis`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `koleksi_id` int NOT NULL,
  `member_id` int NOT NULL,
  `tanggal_pinjam` date NULL DEFAULT NULL,
  `lama_pinjam` int NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `koleksi_id`(`koleksi_id` ASC) USING BTREE,
  INDEX `member_id`(`member_id` ASC) USING BTREE,
  CONSTRAINT `sirkulasis_ibfk_1` FOREIGN KEY (`koleksi_id`) REFERENCES `koleksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sirkulasis_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 321 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sirkulasis
-- ----------------------------
INSERT INTO `sirkulasis` VALUES (301, 100, 200, '2022-04-13', 2, 'N', NULL, '2022-05-30 09:15:43');
INSERT INTO `sirkulasis` VALUES (302, 101, 200, '2022-05-26', 3, 'N', NULL, '2022-05-30 10:06:52');
INSERT INTO `sirkulasis` VALUES (303, 110, 202, '2022-05-01', 5, 'N', NULL, NULL);
INSERT INTO `sirkulasis` VALUES (304, 100, 200, '2022-05-27', 3, 'Y', '2022-05-26 17:12:37', '2022-05-26 17:12:37');
INSERT INTO `sirkulasis` VALUES (305, 100, 200, '2022-05-27', 3, 'N', '2022-05-26 17:12:57', '2022-05-26 17:12:57');
INSERT INTO `sirkulasis` VALUES (306, 100, 200, '2022-05-27', 3, 'N', '2022-05-26 17:13:40', '2022-05-26 17:13:40');
INSERT INTO `sirkulasis` VALUES (308, 110, 202, '2022-05-29', 7, NULL, '2022-05-26 17:21:51', '2022-05-26 17:21:51');
INSERT INTO `sirkulasis` VALUES (309, 109, 202, '2022-06-04', 4, 'N', '2022-06-06 06:38:48', '2022-06-06 06:39:57');
INSERT INTO `sirkulasis` VALUES (310, 109, 202, '2022-06-04', 4, NULL, '2022-06-06 06:38:48', '2022-06-06 06:38:48');
INSERT INTO `sirkulasis` VALUES (311, 109, 202, '2022-06-03', 1, 'N', '2022-06-06 06:40:36', '2022-06-06 06:41:04');
INSERT INTO `sirkulasis` VALUES (312, 109, 202, '2022-06-03', 1, NULL, '2022-06-06 06:40:36', '2022-06-06 06:40:36');
INSERT INTO `sirkulasis` VALUES (317, 109, 202, '2022-06-09', 2, 'N', '2022-06-09 09:51:16', '2022-06-09 09:51:39');
INSERT INTO `sirkulasis` VALUES (318, 109, 202, '2022-06-09', 2, NULL, '2022-06-09 09:51:16', '2022-06-09 09:51:16');
INSERT INTO `sirkulasis` VALUES (319, 109, 202, '2022-06-09', 2, 'N', '2022-06-09 10:04:33', '2022-06-09 10:05:21');
INSERT INTO `sirkulasis` VALUES (320, 109, 202, '2022-06-09', 2, NULL, '2022-06-09 10:04:33', '2022-06-09 10:04:33');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin Admin', 'admin@material.com', '2022-06-06 07:07:59', '$2y$10$ZP6WOeh.7tPGKtzj3flAH.hi1pkTGSFfohO7xkgpkWO2ePe92Y1rm', 'pzf53u7a0TcGhdSVLYS8mcP3ZPDl0lDf8D55dC0qHc43YiXKMEvn1Y1pITLA', '2022-06-06 07:07:59', '2022-06-06 07:07:59');

SET FOREIGN_KEY_CHECKS = 1;
