-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th9 15, 2018 lúc 05:17 PM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `permission`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2018_09_11_081523_create_roles_table', 1),
(10, '2018_09_11_081532_create_permissions_table', 1),
(11, '2018_09_11_081552_create_user_roles_table', 1),
(12, '2018_09_11_081604_create_role_permissions_table', 1),
(13, '2018_09_11_142057_drop_user_roles_table', 1),
(14, '2018_09_11_142229_add_role_id_column_to_users_table', 1),
(16, '2018_09_12_062650_create_post_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `route_name`) VALUES
(1, NULL, 'admin.permission.list'),
(2, NULL, 'admin.permission.save'),
(3, NULL, 'admin.role.list'),
(4, NULL, 'admin.role.add'),
(5, NULL, 'admin.role.edit'),
(6, NULL, 'admin.role.save'),
(7, NULL, 'admin.role.delete'),
(9, NULL, 'admin.user.add'),
(10, NULL, 'admin.user.edit'),
(11, NULL, 'admin.user.save'),
(12, NULL, 'admin.user.delete'),
(13, NULL, 'admin.post.list'),
(14, NULL, 'admin.post.add'),
(17, NULL, 'admin.post.edit'),
(18, NULL, 'admin.post.save'),
(19, NULL, 'admin.user.list'),
(20, NULL, 'admin.post.delete');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Expedita harum atque earum.x', '2018-09-11 23:32:00', '2018-09-11 23:50:33'),
(2, 'Qui repudiandae ut et sit quos aut sit ut.', '2018-09-11 23:32:00', '2018-09-11 23:32:00'),
(3, 'Architecto quo in temporibus voluptatem nobis est laboriosam aliquid.', '2018-09-11 23:32:00', '2018-09-11 23:32:00'),
(4, 'Vero libero nemo officia qui voluptas quia.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(5, 'Atque consectetur nulla et earum.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(6, 'Eaque id molestias ea enim et.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(7, 'Excepturi ut itaque culpa odit accusamus.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(8, 'Quia quod ut dolor at.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(9, 'Veniam soluta est voluptatibus aut aliquam reprehenderit.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(10, 'Rerum deleniti ut sequi eum.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(11, 'Quaerat consequatur veniam porro aut suscipit fugit.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(12, 'Voluptas quae magni et et omnis et quaerat.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(13, 'Rerum quas quam nihil non.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(14, 'Assumenda itaque beatae nesciunt qui temporibus nobis in.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(15, 'Quidem officia nisi voluptates quia quis.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(16, 'Est tempore non quasi nam sunt eum.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(17, 'Aliquam explicabo laborum aspernatur consequatur.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(18, 'Quasi repellendus molestias minus eum.', '2018-09-11 23:32:01', '2018-09-11 23:32:01'),
(19, 'Corporis perspiciatis laboriosam quae aut possimus enim.', '2018-09-11 23:32:01', '2018-09-11 23:32:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2018-09-11 07:30:01', '2018-09-11 07:30:01'),
(2, 'Moderator', '2018-09-11 07:30:40', '2018-09-11 07:30:40'),
(4, 'User', '2018-09-11 07:30:59', '2018-09-11 07:30:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_permissions`
--

CREATE TABLE `role_permissions` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(2, 1),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(3, 13),
(4, 13),
(1, 17),
(1, 18),
(2, 19),
(1, 19),
(1, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Admin', 'admin@framgia.com', '$2y$10$WwQHVGPooWEHXNyHoN65UuTIyi5DqRZPNLCvJ/rRiVaiJurxTknOK', 'D1LgY7S08LAPLgqHlH3mDVUOlP4C34GIKKvLBKSXUlNHw1gzbfCCKUpwkJcP', '2018-09-11 07:28:06', '2018-09-11 07:28:06', 1),
(2, 'Moderator', 'moderator@framgia.com', '$2y$10$mUgBG2C61IPhLSUACnn8FOXXtycYQLaMG9fAi2nDdvRgiCF67eSoW', 'ltrQTPKwpzoWlB9Uake6BMPwjRF9sx44tvaLOjU7t6tvJnCd7E5ZohTP9WyL', '2018-09-11 07:28:24', '2018-09-11 07:28:24', 2),
(4, 'User', 'user@framgia.com', '$2y$10$SMmyruFFN1K3uGSrCYQj7OUcGqOF57JBr6JOkqR3uyECLLlhAchJy', 'O0QWt6aqL2dAGFDQ7KBQCIAURkCtIJXJYj3dYWjjwDZ9IZ8JmvevLZUGG8bS', '2018-09-11 07:29:01', '2018-09-11 23:07:34', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
