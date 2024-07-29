-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2024 a las 20:14:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_06_29_230404_create_servicios_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2024_06_30_142529_create_servicios_table', 3),
(4, '2024_07_27_052617_add_image_field_to_servicios_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `image`, `titulo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'images/Rf5Ejan5l3aFnkFhReITOPGR7ry8oBN7Pu7RIN7j.jpg', 'Mantenimiento', 'Descripción del servicio de Mantenimiento', '2024-06-08 15:05:42', '2024-07-29 22:57:59'),
(2, 'images/nvqArd32yz12YUJZKN9lNwFLmSOhqHVNt5d4fZxp.jpg', 'Afinamiento', 'Descripción del servicio de Afinamiento', '2024-06-08 15:05:42', '2024-07-29 23:12:19'),
(3, 'images/bLbZq7F6NRVL2dNZG5Z1eSqzXv4VyQMH7baHgSyw.jpg', 'Cambio de Aceite', 'Descripción del servicio de Cambio de Aceite', '2024-06-07 15:07:15', '2024-07-29 23:02:34'),
(4, 'images/uI5dvR4eg7xV4kRNY5C0WI4qQqJBpT84rxyC7GX5.jpg', 'Lavado tipo salón', 'Descripción del servicio de Lavado tipo salón', '2024-06-07 15:07:15', '2024-07-29 23:07:50'),
(5, NULL, 'Servicio 5', 'Dscp. 5', '2024-06-30 14:09:00', '2024-06-30 17:54:23'),
(6, NULL, 'Servicio 6', 'Dscrp. 6', '2024-06-30 17:54:51', '2024-06-30 17:54:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Franco', 't512700120@unitru.edu.pe', '$2y$12$JBQyOG63c.kNyZt0H041aeIr9YklTHM74vEJ22CGwHx7dWKchH5AK', '2024-07-20 21:49:45', '2024-07-20 21:49:45'),
(2, 'Franco 2', 'a@a.com', '$2y$12$lljiWbJTxKkOnl5PVrQM4.u40akH4XwVinrWz.0GAAS9uOSSh/dmS', '2024-07-20 22:30:29', '2024-07-20 22:30:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
