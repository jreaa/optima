-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2021 a las 22:21:28
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `optima_intranet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `fecha_hora_edicion` datetime NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre_cliente`, `fecha_hora_edicion`, `estado`, `created_at`, `updated_at`) VALUES
(6, 'Demo', '2020-12-06 22:12:14', 0, NULL, '2021-04-12 06:00:16'),
(13, 'NinoUrrutia Lt', '2021-02-15 22:23:59', 0, NULL, '2021-04-06 19:56:26'),
(15, 'William SA LTDAS11', '2021-03-05 03:25:27', 1, NULL, '2021-04-12 06:00:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id` int(11) NOT NULL,
  `nombre_dispositivo` varchar(50) NOT NULL,
  `version` varchar(50) DEFAULT NULL,
  `nombre_bd` varchar(50) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_hora_edicion` datetime NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`id`, `nombre_dispositivo`, `version`, `nombre_bd`, `id_cliente`, `fecha_hora_edicion`, `estado`, `created_at`, `updated_at`) VALUES
(6, 'Parametros1', NULL, 'apr_llaveria', 13, '2020-12-19 22:33:21', 1, NULL, '2021-04-12 19:11:01'),
(13, 'Sondaje 1', '20', 'apr_llaveria', 6, '2020-12-06 22:13:30', 0, NULL, '2021-04-06 20:27:45'),
(16, 'Gases', '', 'gases', 6, '2021-03-08 03:58:27', 0, NULL, '2021-04-06 20:37:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre_estado` varchar(50) NOT NULL,
  `estado_mostrar` varchar(60) NOT NULL,
  `id_mostrar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre_estado`, `estado_mostrar`, `id_mostrar`, `created_at`) VALUES
(1, 'ESTADO_GENERAL', 'Activo', 0, NULL),
(2, 'ESTADO_GENERAL', 'Inactivo', 1, NULL),
(3, 'TIPO_USUARIO', 'Administrador', 1, NULL),
(4, 'TIPO_USUARIO', 'Cliente nivel 1 (solo tablas)', 2, NULL),
(13, 'TIPO_USUARIO', 'Cliente nivel 2 (tablas + graficos)', 3, NULL),
(14, 'TIPO_USUARIO', 'Cliente nivel 3 (tablas + graficos + garfico especial)', 4, NULL),
(15, 'TIPO_DATO', 'Digital', 0, NULL),
(16, 'TIPO_DATO', 'Analógico', 1, NULL),
(17, 'TIPO_DATO_DIGITAL', 'Activo', 1, NULL),
(18, 'TIPO_DATO_DIGITAL', 'Inactivo', 0, NULL),
(19, 'GRAFICO_ESPECIAL', 'Estanque', 1, NULL),
(20, 'TIPO_GRAFICO', 'Vela', 1, NULL),
(21, 'TIPO_GRAFICO', 'Splain', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `mediciones`
--

CREATE TABLE `mediciones` (
  `id` int(11) NOT NULL,
  `id_dispositivo` int(11) NOT NULL,
  `nombre_medicion` varchar(100) NOT NULL,
  `valor_ingenieria` varchar(40) DEFAULT NULL,
  `divisor` int(11) NOT NULL DEFAULT 1,
  `tipo_dato` int(11) NOT NULL,
  `id_activacion` int(11) NOT NULL DEFAULT 1,
  `nombre_activacion_bd` varchar(50) DEFAULT NULL,
  `nombre_dato_bd` varchar(200) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `grafico_especial` int(11) NOT NULL DEFAULT 1,
  `id_grafico_especial` int(11) NOT NULL DEFAULT 0,
  `cant_maxima` int(11) NOT NULL DEFAULT 0,
  `fecha_hora_edicion` datetime NOT NULL DEFAULT current_timestamp(),
  `tipo_grafico` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mediciones`
--

INSERT INTO `mediciones` (`id`, `id_dispositivo`, `nombre_medicion`, `valor_ingenieria`, `divisor`, `tipo_dato`, `id_activacion`, `nombre_activacion_bd`, `nombre_dato_bd`, `orden`, `grafico_especial`, `id_grafico_especial`, `cant_maxima`, `fecha_hora_edicion`, `tipo_grafico`, `estado`, `created_at`, `updated_at`) VALUES
(9, 13, 'L1N', 'Volts', 10, 15, 1, NULL, 'BOMBA_LLAVERIA--slave.L1N', 1, 1, 0, 0, '2020-12-06 22:14:28', 20, 1, NULL, '2021-04-06 21:12:39'),
(10, 13, 'L2N', 'Volts', 10, 1, 1, '', 'BOMBA_LLAVERIA--slave.L2N', 0, 1, 0, 0, '2020-12-06 22:17:09', 1, 0, NULL, NULL),
(28, 13, 'Automático', 'M3', 1, 1, 1, '', 'BOMBA_LLAVERIA--slave.automatico', 3, 1, 999999, 0, '2020-12-18 18:27:56', 2, 0, NULL, NULL),
(29, 13, 'Bomba', '0', 1, 0, 1, '', 'BOMBA_LLAVERIA--slave.bomba', 2, 1, 999999, 0, '2020-12-18 18:28:38', NULL, 0, NULL, NULL),
(60, 16, 'Gases ppm', 'ppm', 1, 1, 0, '', 'gases--slave.voc,gases--slave.h2s,gases--slave.nh3,gases--slave.temp', 3, 1, 999999, 0, '2021-03-08 03:59:34', 2, 0, NULL, NULL),
(61, 13, 'Corrientes', 'A', 1000, 1, 0, '', 'BOMBA_LLAVERIA--slave.IL1,BOMBA_LLAVERIA--slave.IL2,BOMBA_LLAVERIA--slave.IL3', 2, 1, 999999, 0, '2021-03-09 01:55:20', 2, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2021_03_29_192045_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AMqsxOXI3YDur33y0IEz0NOx9nBHASD2TPtJuTGq', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWmUyUTNmMkpHcXZ4eEthVzA5RU1aU09xODg0MFp3c1U2Y3RXWEJ4YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ncmFmaWNvcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRMTGhrdlhiQ1E5QVpsd295WUlXSDl1RVNkZVFJS01xb0plLjF5SG45V2czZlBKR3R1SzgxcSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkTExoa3ZYYkNROUFabHdveVlJV0g5dUVTZGVRSUtNcW9KZS4xeUhuOVdnM2ZQSkd0dUs4MXEiO30=', 1618241075),
('q2trcoOsIEwtXnA4AIZPb4Rp3s7axQtrH2UFcbil', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic3lDRmR5WUhLMU1tZ2VqN2lieGlVY3ppTUZDUXJDRDN5UTdUZVlFMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1618251881);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_perfil` bigint(20) NOT NULL DEFAULT 1,
  `id_cliente` bigint(20) NOT NULL DEFAULT 0,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `id_perfil`, `id_cliente`, `phone`, `status`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'alejandro', 'Era', 'jorfgf', 1, 13, '9999999', 0, 'jorfgfe@gmail.com', '2021-04-06 21:44:36', '$2y$10$LLhkvXbCQ9AZlwoyYIWH9uESdeQIKMqoJe.1yHn9Wg3fPJGtuK81q', NULL, NULL, 'fIBMPjNVN9AkmOOYNIJvubCU1794Yn4FBmbTZODnwT4gl46BD2gvm4A4TOET', NULL, NULL, '2021-04-06 21:44:36', '2021-04-12 06:02:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `mail` varchar(35) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` text NOT NULL,
  `clave_escrita` text NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha_hora_edicion` datetime NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `mail`, `telefono`, `usuario`, `clave`, `clave_escrita`, `id_perfil`, `id_cliente`, `fecha_hora_edicion`, `estado`) VALUES
(1, 'Administrador', 'Web', 'leal.wil19@gmail.com', '981377355', 'wleal', '5b51f39649d5014b9069d5d12e76ea66', 'wleal', 1, 0, '2020-11-28 15:37:10', 0),
(31, 'Miriam', 'Urrutia', 'ninoo.ur@gmail.com', '9947854452', 'nurrutia', '43a6cb7d39a30d5329372e4cafd0fad5', 'nurrutia', 2, 6, '2021-02-15 21:44:45', 0),
(32, 'Optima', 'Telemetria', 'mgodoy@optimatelemetria.cl', '981355874', 'otelemetria', '9f85684652868a4e59757e4f8024d381', 'otelemetria', 1, 0, '2021-02-16 23:12:11', 0),
(33, 'Williams', 'Leales', 'wleal@angular.cl', '981322594', 'aleal', '27b271d21e438af570dc5a51c63b24ed', 'aleal', 1, 0, '2021-03-03 04:01:37', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `mediciones`
--
ALTER TABLE `mediciones`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mediciones`
--
ALTER TABLE `mediciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
