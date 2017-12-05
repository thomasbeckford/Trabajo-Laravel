-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2017 a las 22:34:34
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lara`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `producto` varchar(50) NOT NULL,
  `precio` decimal(65,0) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(50) DEFAULT NULL,
  `imagen` text,
  `descripcion` text NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `producto`, `precio`, `updated_at`, `created_at`, `category`, `imagen`, `descripcion`, `user_id`) VALUES
(40, 'Sony Vaio', '6000', '2017-12-05 23:28:09', '2017-12-05 23:28:09', 'computadora', 'public/posters/2kxJkfGxg6ulFu7dewtVFBgFTFOruPwYMEkGX0uc.jpeg', 'Intel Core i5, 6gb ram, negra, pantalla 15\'', 1),
(41, 'Iphone XIII Usado - 79TB - Puertos HDMI', '90000', '2017-12-05 23:43:51', '2017-12-05 23:43:51', 'celular', 'public/posters/FBZrUtcdw4uAatc8AbaoIwjcAA6dlPbPDUJVcm03.jpeg', 'El mejor celular del mundo. Compra, compra, compra ya, compra!', 1),
(42, 'Asus Gamer Nueva Impecable', '9580', '2017-12-05 23:58:35', '2017-12-05 23:58:35', 'computadora', 'public/posters/FKBON54GCHTASeoiMTYM13fKoyBKnvi1DFcuRlGj.jpeg', 'Usada, me la regalo Digital House, la mejor academia de Full Stack Web.', 2),
(44, 'Samsung Galaxia 30005', '700000', '2017-12-06 00:20:54', '2017-12-06 00:20:54', 'celular', 'public/posters/o8UaOoyAWaeDSUTsq0Qlko5PAFodS3dipWOZLOWc.png', 'Celular, computadora, cortadora de pasto, y muchas cosas mas.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thomas', 'asd@asd.asd', '$2y$10$OiRnWLK.G.bMKemRbxjDC.xURZywWJoPWgSeimd5.VC6EUmtPk58q', '8eJk10OOlzujnN5JJIdC3PPnjboxlWdfMLA0hy1AjPOzJt3I8G0c0oTaTmJ7', '2017-11-29 19:35:48', '2017-11-29 19:35:48'),
(2, 'lala', 'lala@lala.lala', '$2y$10$2z/FB0N3KFoYjCEKTRu0SOcHZ5mxyFj3rBrNQhsYqyk2ZD3nruF7W', 'TeCXeh0tSjEfGTUGkM0sGNrMTRl6YOWBP2jkYuolSMVEE8rmI5Hv1x2U61su', '2017-12-05 04:38:16', '2017-12-05 04:38:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
