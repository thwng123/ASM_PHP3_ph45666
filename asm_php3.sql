-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 04, 2024 lúc 09:34 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(10) UNSIGNED NOT NULL DEFAULT 100,
  `quantity` int(11) NOT NULL DEFAULT 110
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `title`, `content`, `thumbnail`, `author`, `price`, `category_id`, `created_at`, `updated_at`, `views`, `quantity`) VALUES
(11, 'Simple way of piece life', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/GHvSejehafaYrHfkkEGt6iDxwcN5z1iC9p4brh4a.jpg', 'Armor Ramsey', 40, 3, '2024-10-09 22:58:26', '2024-10-09 22:58:26', 100, 110),
(12, 'Great travel at desert', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis', 'books/qKGrYKAoqXWzLRn6HB54Y2lTgf0IzPkfIBVkjZ5G.jpg', 'Sanchit Howdy', 40, 2, '2024-10-09 22:59:26', '2024-10-09 22:59:26', 100, 100),
(13, 'The lady beauty Scarlett', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/m3IP4iEsttoc5Ks73nIFZixTHnt2NqnFNpgKtBRl.jpg', 'Arthur Doyle', 45, 2, '2024-10-09 23:01:40', '2024-10-09 23:01:40', 100, 110),
(14, 'Once upon a time', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/S0gUD4K95bgNfYnh5HISSWjIkqsQKbEaLoyyS4XM.jpg', 'Klien Marry', 35, 5, '2024-10-09 23:03:05', '2024-10-09 23:03:05', 100, 110),
(15, 'Way of happiness', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/NpqwFPoZHVfL9rUmO4EHVmgLhHAlszWWZ7ctycgK.jpg', 'Ananda Kumar', 45, 1, '2024-10-09 23:06:09', '2024-10-09 23:06:09', 100, 110),
(16, 'Life Of Seacrits', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/y2V4dGQRsP11LqGHifnVyFtUUNyBubhxdDMNKdKU.jpg', 'Galista Marie', 50, 4, '2024-10-09 23:07:55', '2024-10-09 23:07:55', 100, 110),
(17, 'Fashion System', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/zZOcQZFVHBEqKJ8kO8eFAAb3kGLTQL4i21cOAyyf.jpg', 'Kevin Spear', 50, 2, '2024-10-09 23:09:56', '2024-10-09 23:09:56', 100, 110),
(18, 'MUSICAL', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/gyC8BRr5HnXFEasGPL9IXpSxTbmheY5VJf83i4Px.jpg', 'KARIM ACHARD', 48, 5, '2024-10-09 23:10:53', '2024-10-09 23:10:53', 100, 110),
(19, 'Portrait photography', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/ObPlWnAfBBz01gaVl2ksI5OwYu8NrGLGJaVEgc8r.jpg', 'Adam Silber', 40, 3, '2024-10-09 23:12:03', '2024-10-09 23:12:03', 100, 110),
(20, 'Tips of simple lifestyle', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/7cvpJIjUMuaU4QDcxv2BMhsXc7LgCvPb25WQvUMy.jpg', 'Bratt Smith', 40, 3, '2024-10-09 23:14:35', '2024-10-09 23:14:35', 100, 110),
(21, 'Life among the pirates', 'Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.', 'books/Igtv947inrJ9PvcG64nowHd7QRGkunUR6lAI1Oed.jpg', 'Armor Ramsey', 40, 2, '2024-10-09 23:15:54', '2024-10-09 23:15:54', 100, 110);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `book_id`, `quantity`, `created_at`, `updated_at`) VALUES
(18, 5, 20, 4, '2024-10-31 00:51:39', '2024-10-31 00:51:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Business', NULL, NULL),
(2, 'Technology', NULL, NULL),
(3, 'Romatic', NULL, NULL),
(4, 'Adventure', NULL, NULL),
(5, 'Fictionnal', NULL, NULL),
(6, '1223123213', '2024-10-13 20:51:10', '2024-10-13 20:54:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `avatar`, `phone`, `email`, `password`, `is_active`, `created_at`, `updated_at`, `role`) VALUES
(1, 'thuongnvph', 'BAC NINH', 'customers/fMmh60a6KTstrWF2NfMmbiPXEN2KFI6hB39ryVNq.png', '0335594204', 'hehe@gmail.com', '12345', 1, '2024-10-10 17:53:11', '2024-10-11 02:14:41', 'user'),
(2, 'admin', 'Ha Noi', 'customers/l9UPrJSt0unMHPQTMfOTvpSeC0qj0aSWe1pBLmtK.png', '123456789', 'haianh33yme@gmail.com', '12345', 1, '2024-10-11 02:14:32', '2024-10-11 02:14:49', 'admin'),
(3, 'thuongnvph', 'Ha Noi', NULL, '12', 'thuonghihi@gmail.com', '123456', 1, '2024-10-11 02:25:38', '2024-10-11 02:25:45', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_25_165816_create_categories_table', 1),
(6, '2024_09_25_165831_create_books_table', 1),
(11, '2024_10_10_052254_create_customers_table', 2),
(13, '2024_10_11_090842_add_role_to_customers_table', 3),
(14, '2024_10_11_094703_add_columns_to_users_table', 4),
(15, '2024_10_11_095646_add_avatar_to_users_table', 5),
(16, '2024_10_11_110118_add_views_to_books_table', 6),
(18, '2024_10_25_104156_create_carts_table', 7),
(20, '2024_10_25_161322_add_quantity_to_books_table', 8),
(21, '2024_10_28_154816_create_orders_table', 9),
(22, '2024_10_28_154828_create_order_items_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_bill` double(8,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_bill`, `status`, `user_name`, `user_email`, `user_phone`, `user_address`, `created_at`, `updated_at`) VALUES
(1, 5, 585.00, 'Từ chối', 'admin', 'thuong@gmail.com', '0335594204', 'Bắc Ninh', '2024-10-29 00:47:49', '2024-11-04 01:30:19'),
(2, 5, 120.00, 'Đang xử lý', '1122', 'thuong@gmail.com', '0335594204', '1111', '2024-10-29 00:49:27', '2024-11-04 01:27:49'),
(4, 5, 265.00, 'Đang chờ xử lý', 'thuong', 'thuong@gmail.com', '0335594204', 'Bắc Ninh', '2024-10-29 00:57:11', '2024-11-04 01:15:20'),
(5, 7, 420.00, 'Đã giao', 'thuong', 'thuong@gmail.com', '0335594204', 'Bắc Ninh', '2024-10-31 02:20:23', '2024-11-04 01:31:32'),
(6, 7, 500.00, 'Đang chờ xử lý', 'Nguyễn Văn Thưởng', 'thuonghihi88@gamail.com', '0335594204', 'Bắc Ninh', '2024-11-04 01:20:17', '2024-11-04 01:20:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `book_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 9, 50.00, '2024-10-29 00:47:49', '2024-10-29 00:47:49'),
(2, 1, 15, 3, 45.00, '2024-10-29 00:47:49', '2024-10-29 00:47:49'),
(3, 2, 20, 3, 40.00, '2024-10-29 00:49:27', '2024-10-29 00:49:27'),
(4, 4, 13, 5, 45.00, '2024-10-29 00:57:11', '2024-10-29 00:57:11'),
(5, 4, 20, 1, 40.00, '2024-10-29 00:57:11', '2024-10-29 00:57:11'),
(6, 5, 16, 6, 50.00, '2024-10-31 02:20:23', '2024-10-31 02:20:23'),
(7, 5, 19, 3, 40.00, '2024-10-31 02:20:23', '2024-10-31 02:20:23'),
(8, 6, 17, 10, 50.00, '2024-11-04 01:20:17', '2024-11-04 01:20:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `address`, `phone`, `role`, `is_active`, `avatar`) VALUES
(1, 'thuongnvph', 'haianhyme@gmail.com', NULL, '$2y$12$AvthQv2bEmqhoXMmx8XNQeeHvvuGHjVMwKTzMSbe5cjnUDM6OosOi', NULL, '2024-10-11 02:55:11', '2024-10-13 20:10:16', 'Ha Noi', '123456789', 'admin', 1, 'users/MFWgGZuRTqhskRdXEAm4JO1zR4vbl2DNNPDYQmhG.png'),
(5, 'thuongnvph222', 'thuong@gmail.com', NULL, '$2y$12$NrbOL64VlsfUTQIULGr7ZuLN6tl2lwmO/Q1new.GrtK3uAZ39.Wtq', 'szmFz9DeF4ntXXRXgvLePCeY990h4MWnj3qUuRA6rnAcyhiWsoaKgyRgWjxO', '2024-10-11 03:38:30', '2024-10-24 20:29:26', 'Ha Noi', '03344559988', 'user', 1, 'users/9GlK12nDehMh6jEQptXaXN6nkWDsvBeEJUQnDpIm.png'),
(6, 'Nguyễn Văn Thưởng', 'thuongnguyenvan020304@gmail.com', NULL, '$2y$12$iHr7Uwep1W3Og37CSHk6fOKGgW9FZXPjRt0T3LzFLLyTCNQ/G/Lqe', 'dfwUr1JtdgTgfTUfPQ8efKEjG3sfEZPuT6kOTGG5zl1RifCRyPz5vsE5wEGi', '2024-10-24 06:39:37', '2024-10-31 01:42:56', 'BN', '0123456789', 'user', 1, 'users/tkb6ZYWh9rg2RHfenx8kjxxid5DxCmh6TXPLppSq.png'),
(7, 'thuong thuong', 'thuonghihi88@gmail.com', NULL, '$2y$12$6CtGg9Hul5Gxv4Kq63R6lere6ciwq5ZHEOEglUrWGfQuF0z/oPYG6', 'oxY38KiJ1jEc9UlzfnpuSOR1ob2kHFBh7keCLBYN0p5bTh4Guze1TfwdvnM0', '2024-10-24 07:05:36', '2024-10-31 01:43:08', 'BN', '0123456789', 'admin', 1, 'users/pK5BfJZT1oV27t7gXqL75cGCjGoE4eyAeCvIYGn2.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_book_id_foreign` (`book_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_book_id_foreign` (`book_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
