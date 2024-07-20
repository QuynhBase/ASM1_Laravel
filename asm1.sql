-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2024 at 02:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm1`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Clotilde Cremin', '2024-07-16 03:55:15', '2024-07-16 03:55:15'),
(3, 'Ms. Kira Kris DDS', '2024-07-16 03:55:15', '2024-07-16 03:55:15'),
(4, 'Karley Lockman', '2024-07-16 03:55:15', '2024-07-16 03:55:15'),
(5, 'Bette Cummings', '2024-07-16 03:55:15', '2024-07-16 03:55:15'),
(6, 'Margot Jenkins', '2024-07-16 03:55:15', '2024-07-16 03:55:15'),
(7, 'Jacques Schamberger II', '2024-07-16 03:55:15', '2024-07-16 03:55:15'),
(8, 'Myah Kling PhD', '2024-07-16 03:55:15', '2024-07-16 03:55:15'),
(9, 'Anastacio Wunsch MD', '2024-07-16 03:55:15', '2024-07-16 03:55:15'),
(10, 'Mrs. Leta Walsh III', '2024-07-16 03:55:15', '2024-07-16 03:55:15'),
(11, 'Alek Koch', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(12, 'Myrtis Harber', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(13, 'Chelsie Dietrich', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(14, 'Viola Lowe', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(15, 'Jessica Predovic', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(16, 'Margarete Farrell DDS', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(17, 'Miss Dawn Graham', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(18, 'Tristian Gleichner', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(19, 'Monica Mayer MD', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(20, 'Dalton Bauch MD', '2024-07-16 04:11:10', '2024-07-16 04:11:10'),
(21, 'Orion Jones Sr.', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(22, 'Prof. Florencio Greenholt', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(23, 'Mr. Sage Frami', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(24, 'Jackie Murphy', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(25, 'Randall Metz', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(26, 'Wilton Haley', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(27, 'Millie Gleichner I', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(28, 'Destinee Goodwin', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(29, 'Gabe Considine', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(30, 'Clay Collins', '2024-07-16 06:56:43', '2024-07-16 06:56:43'),
(31, 'Claudine Purdy', '2024-07-16 06:56:45', '2024-07-16 06:56:45'),
(32, 'Webster Stamm', '2024-07-16 06:56:45', '2024-07-16 06:56:45'),
(33, 'Thelma Ortiz', '2024-07-16 06:56:45', '2024-07-16 06:56:45'),
(34, 'Wendy Bauch', '2024-07-16 06:56:45', '2024-07-16 06:56:45'),
(35, 'Dr. Rhiannon Littel', '2024-07-16 06:56:45', '2024-07-16 06:56:45'),
(36, 'Mittie Strosin', '2024-07-16 06:56:45', '2024-07-16 06:56:45'),
(37, 'Prof. Collin Kihn PhD', '2024-07-16 06:56:45', '2024-07-16 06:56:45'),
(38, 'Miss Leonora Will', '2024-07-16 06:56:45', '2024-07-16 06:56:45'),
(39, 'Derek Zboncak', '2024-07-16 06:56:45', '2024-07-16 06:56:45'),
(51, 'Trần Văn Quỳnh', '2024-07-17 07:49:36', '2024-07-17 07:49:36'),
(56, 'Chăm sóc tóc', '2024-07-20 06:39:20', '2024-07-20 06:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_16_081737_create_categories_table', 1),
(6, '2024_07_18_090949_create_products_table', 2),
(7, '2024_07_19_024517_create_product_pages_table', 3),
(8, '2024_07_20_041151_create_carts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `price`, `category_id`, `description`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 'products/4YdjK6DLC3hARZNeZJ7TAP6qr14GxCxPpHKTWpn2.jpg', 'Arden Legros', 100000.00, 51, 'Sed ut perferendis occaecati esse cupiditate. Ab dolor ipsam totam laboriosam voluptas minima quos.', 149, '2024-07-18 02:55:49', '2024-07-18 20:04:37'),
(3, 'products/SbENvgU0pPwpN8AqlOFrN3s9Fo8jtec4SKeTX0ga.jpg', 'Prof. Dakota Bartell PhD', 100000.00, 36, 'Et ut ea laudantium. Et beatae ut assumenda saepe odit repellat.', 125, '2024-07-18 02:55:49', '2024-07-18 20:29:26'),
(4, 'products/BV8dAAvoG3fDb75mTltRg0U5xEmwlzicx8WiZrZb.jpg', 'Jo Walter', 100000.00, 30, 'Sed laborum asperiores quis. Libero inventore quidem voluptate commodi.', 148, '2024-07-18 02:55:49', '2024-07-19 19:30:05'),
(5, 'products/7FKDB2T2xPjfxoyibDbGISoRpau6nKJ65kp6GogF.jpg', 'Roxanne McClure MD', 100000.00, 51, 'Odit deserunt quidem est nobis. Consequatur optio distinctio repellendus ex enim.', 165, '2024-07-18 02:55:49', '2024-07-18 09:56:37'),
(7, 'products/Uq9UgL18KhCYYQcJvih15UYcbpCDpu53FrYYBqjf.jpg', 'Tracey Okuneva', 100000.00, 51, 'Dolorum molestias est et sed est aut iste. Iste itaque cumque numquam veniam libero et.', 158, '2024-07-18 02:55:49', '2024-07-18 09:56:45'),
(8, 'products/pXyJ7sdqB2upZ7SMQeXfEcsRZea1H2pObNrpYuWK.jpg', 'Nayeli Fisher', 100000.00, 51, 'Est eligendi qui perspiciatis optio id velit. Odit minima veniam doloribus.', 185, '2024-07-18 02:55:49', '2024-07-18 09:56:52'),
(9, 'products/UNpTcxWnc4ctKqfcoRF8R2T0rD2X1zOxSVnRjYcD.jpg', 'Breana Rogahn', 100000.00, 51, 'Cumque hic hic eius. Inventore eveniet eius praesentium ex voluptate in. Nemo nisi quas magnam.', 153, '2024-07-18 02:55:49', '2024-07-18 09:56:59'),
(10, 'products/XNBux4NpnCYJpvQxjHBLW6ryrWb5Z4ro6ueU7abh.jpg', 'Krystel Turcotte', 100000.00, 51, 'Quibusdam voluptatum ut iure ratione. Repudiandae esse harum odit eum autem.', 127, '2024-07-18 02:55:49', '2024-07-18 09:57:07'),
(11, 'products/IAvFc1kVQW0qZ0CQNOckndMoqXUcwGiWDWsJKzhY.jpg', 'Tad Mante', 100000.00, 51, 'Numquam et aut minus et. Dolorem consequuntur rerum iste et.', 128, '2024-07-18 02:55:49', '2024-07-18 09:57:15'),
(12, 'products/p0AwcfaxcksM1ow9D6P47SYQA6THT69gl0m968kc.jpg', 'Jared Zieme IV', 100000.00, 51, 'Deleniti sed quidem et consequatur. Mollitia in similique eum et delectus aut enim quod.', 164, '2024-07-18 02:55:49', '2024-07-18 09:57:26'),
(13, 'products/URosgckrcckofVcCtDlQ4zuF5GX37a2GoATFjr8y.jpg', 'Miss Therese White', 100000.00, 51, 'Repellat ut id dicta facere. Eum nam et aut amet perferendis sequi quo sit.', 120, '2024-07-18 02:55:49', '2024-07-18 09:57:37'),
(14, 'products/J2KBZUbxzD2HpUdRmrqRz1mgSRq5nLKkJb6TKpTA.jpg', 'Eunice Kling', 100000.00, 9, 'Quis sint nihil optio vel soluta. Repudiandae sequi ut deserunt omnis aliquam quis.', 152, '2024-07-18 02:55:49', '2024-07-18 09:58:19'),
(15, 'products/7ivezsjD4pstw6WTAlSTGbLSjb6cNm8ONnFA0AeI.jpg', 'Roosevelt Hudson', 100000.00, 39, 'Repudiandae eum voluptatem corporis impedit laborum et nemo. Quia error delectus sint aliquam.', 128, '2024-07-18 02:55:49', '2024-07-18 09:58:36'),
(16, 'products/YtJaiT2Cs1kcqASGtOfXNupXHmH4waQf8PaHyUv0.jpg', 'Mckayla Larson', 100000.00, 27, 'Cupiditate non dolores quia error. Iste architecto ut placeat ratione.', 123, '2024-07-18 02:55:49', '2024-07-18 21:18:56'),
(17, 'products/bXHV8WDoTBsObuSMXIcNCbbRWqK2UIrF7WtgWUyE.jpg', 'Martina Bode', 100000.00, 38, 'Unde quisquam velit nemo. Et ex libero eius sed. Velit omnis autem consequatur necessitatibus.', 159, '2024-07-18 02:55:49', '2024-07-18 21:19:14'),
(18, 'products/RVw6qK4AfADtX6A3jXFSdXRNUhiohIVsLJqQsXMi.jpg', 'Miss Jade Goodwin', 100000.00, 51, 'Nobis nam vitae sit non ut. Dolorem esse tempora modi ex. Cupiditate voluptates mollitia et.', 152, '2024-07-18 02:55:49', '2024-07-18 21:19:56'),
(19, 'products/uJjoGx1093ZKoWDJXoz9pB3sf3XJs8KTslZbnGrf.jpg', 'Telly Miller', 100000.00, 33, 'Iste voluptatem eum et. Sit ex sequi delectus. Magnam neque velit explicabo ea minus sit.', 133, '2024-07-18 02:55:49', '2024-07-18 21:19:38'),
(20, 'products/9DA90nxxnQ4QlGhL75gTugOuOWH2FIkbd1WTW1bn.jpg', 'Colton Rolfson', 499.00, 51, 'Velit placeat maxime velit pariatur voluptate qui eum expedita. Saepe qui quo eos voluptatem.', 106, '2024-07-18 02:55:49', '2024-07-18 21:20:24'),
(21, 'products/qObetljourAEF5Aw6D8ODM6Mb4V6m4u49uKMKE3w.jpg', 'Dr. Kathryne Kilback', 27999.00, 51, 'Et sit inventore voluptatem ipsa. Et officia cumque rem dolore suscipit et.', 162, '2024-07-18 02:55:49', '2024-07-18 21:21:07'),
(22, 'products/xcicMa9xlrUGR3JIXZuGRzzMV2KAKvrWR2Zyo34E.jpg', 'Prof. Ethel Kutch III', 399.00, 51, 'Similique culpa ut quis sunt. Esse sit nisi vel.', 114, '2024-07-18 02:55:49', '2024-07-18 21:21:22'),
(23, 'products/4nqQX2wrJYIvt5yFndPiV7lYzMAk7jAPD1BLDnjq.jpg', 'Kristin Hilpert', 7999.00, 51, 'Repellat et quia unde consectetur. Et omnis fuga minus nostrum. Iure laudantium et fugiat.', 132, '2024-07-18 02:55:49', '2024-07-18 21:21:45'),
(24, 'products/NtHOPk677qx4eRoQe9LelpufAh0XK4qEjARbGemx.jpg', 'Ms. Alba Hahn Jr.', 6999.00, 51, 'Accusamus exercitationem minima et repellat. Quia id eligendi nostrum. Non quia illum eos ipsum.', 167, '2024-07-18 02:55:49', '2024-07-18 21:22:12'),
(25, 'products/yMtOfoBDc0CEOVFwhW3EClitYbkDKP5dtwQGOwi3.jpg', 'Mr. Cale Stroman MD', 123444.00, 51, 'Animi sed aliquid dolorum. Vero sequi quas non tempora. Maiores ipsam harum enim.', 122, '2024-07-18 02:55:49', '2024-07-18 21:22:39'),
(26, 'products/Bcnsy6ueeo36Ftj27gIJejJpEX45jbKUrjmpfR1D.jpg', 'Ruben Monahan Jr.', 100000.00, 51, 'Porro qui et doloremque ut non et. Quidem officia dolorem non non.', 170, '2024-07-18 02:55:49', '2024-07-18 21:22:52'),
(27, 'products/caflWRxBNhtkEhsa4TEVnWs8jinlCkWd42VFDKQx.jpg', 'Martin Herman', 499000.00, 51, 'Praesentium odit et facere deserunt sed pariatur. Qui unde hic nesciunt placeat corporis.', 172, '2024-07-18 02:55:49', '2024-07-18 21:23:08'),
(28, 'products/qShOrMzt0nGhZd90VPmcqFUMqJTevZheoO6bUZuP.jpg', 'Armand Champlin', 599000.00, 51, 'Ab esse voluptatem error voluptas. Architecto sed et odit ut cum modi.', 145, '2024-07-18 02:55:49', '2024-07-18 21:23:29'),
(29, 'products/vfrj8I4ngKWIOLXrp33wIpb9A2y02jm3k14DTH7y.jpg', 'Kade Bartell', 499000.00, 51, 'Quam sapiente doloremque adipisci eligendi totam. Ad vel assumenda aut sint. Autem qui hic qui.', 166, '2024-07-18 02:55:49', '2024-07-18 21:23:54'),
(30, 'products/P5tqlz5Z7V69HJYYw8NGxMLkVd6zQ84eRtBmR3Jo.jpg', 'Jaylin Mohr', 399000.00, 51, 'Aut voluptas nobis eum iste. Reprehenderit quam tempora quia rerum vitae cumque molestiae eos.', 142, '2024-07-18 02:55:49', '2024-07-18 21:24:15'),
(31, 'products/wAWbuub2C1pe1BpDdPEvOc0a0DOOL7K7OSsr36Ar.jpg', 'Mrs. Irma Kautzer', 799000.00, 51, 'Eum omnis et ex placeat vitae vel. Nesciunt et nemo quia sunt et. Non in voluptas aut dolor ex.', 161, '2024-07-18 02:55:49', '2024-07-18 21:25:19'),
(32, 'products/6mE00ANwDpaGs01GYgpVcuQ2DeYv7q6cXX4CnUul.jpg', 'Prof. Yesenia Schuppe', 899000.00, 51, 'Voluptates placeat dignissimos ipsa qui. Occaecati natus debitis et dolor sunt autem.', 129, '2024-07-18 02:55:49', '2024-07-18 21:25:36'),
(46, 'products/I9MxChQyx1jLfaDK7ZMWxYB4uWmHgTeFWIyNqGXD.jpg', 'Kem chống nắng', 799000.00, 56, 'Kem chống nắng giúp chúng ta bảo vệ làn da của mình và tránh cách tia UV, bụi bẩn ngoài đường', 600, '2024-07-20 06:41:17', '2024-07-20 06:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_pages`
--

CREATE TABLE `product_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_pages`
--
ALTER TABLE `product_pages`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product_pages`
--
ALTER TABLE `product_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
