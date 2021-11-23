-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2021 a las 17:34:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liontech2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gestion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `semestre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id`, `name`, `descripcion`, `codigo`, `gestion`, `semestre`) VALUES
(109, 'Aviso Importante', 'La información de acceso (Código SIS, Contraseña, Fecha de Nacimiento) a la cuenta de Estudiantes es estrictamente privada, siendo responsabilidad del Estudiante su seguridad.\r\nNO DEBE COMPARTIR, ENTREGAR, NI ENVIAR (RE-ENVIAR) EL CORREO DE SU CONTRASEÑA A CENTROS DE ESTUDIANTES o TERCERAS PERSONAS. TAMPOCO DEBE ENTREGAR FOTOCOPIA (NI ORIGINAL) DE SU MATRICULA UNIVERSITARIA o CI-DOCUMENTO PERSONAL A CENTROS DE ESTUDIANTE. Su seguridad es su responsabidad y no de la Institución.', '123456', '2021', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `archivote` text NOT NULL,
  `codigo` text NOT NULL,
  `gestion` varchar(50) NOT NULL,
  `semestre` varchar(50) NOT NULL,
  `nombre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`id`, `name`, `archivote`, `codigo`, `gestion`, `semestre`, `nombre`) VALUES
(21, 'convocatoria 2021', 'C:\\xampp\\tmp\\php75DF.tmp', '123456', '2021', '2', 'PliegoEspecificaciones22021.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombreC` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreL` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `integrantes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `representante` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombreC`, `nombreL`, `integrantes`, `representante`, `correo`, `telefono`, `direccion`) VALUES
(1, 'lion', 'liontech', '', 'jhon', 'xxx@yy.com', '34874387', 'aca'),
(12, 'so', 'software', '', '', '', '', ''),
(13, 'hard', 'hardware', '', '', '', '', '');

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
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_10_16_200022_create_usuarios_table', 1),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(37, '2014_10_12_000000_create_users_table', 3),
(38, '2014_10_12_100000_create_password_resets_table', 3),
(39, '2019_08_19_000000_create_failed_jobs_table', 3),
(40, '2020_12_31_051631_create_admins_table', 3),
(41, '2021_11_07_184907_create_empresas_table', 3),
(42, '2021_11_16_011138_create_usuarios_table', 3);

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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `pass`, `nombre`, `tipo`) VALUES
(1, 'admin', 'admin', 'Administrador', '1'),
(2, 'docente', 'docente', 'Docente', '2'),
(24, 'estudiante', 'estudiante', 'Estudiante', '3'),
(25, '201606617@est.umss.edu', '201606617', 'CALCINA BERNAL HANYINSON ALEX', '3'),
(26, '201401040@est.umss.edu', '201401040', 'CAMACHO MENDIETA FRANCISCO ANTONIO', '3'),
(27, '201400887@est.umss.edu', '201400887', 'CÁRDENAS LÓPEZ CARLOS ALBERTO', '3'),
(28, '201604480@est.umss.edu', '201604480', 'CARREÑO HUAIPARA ALEJANDRO RAI', '3'),
(29, '201300024@est.umss.edu', '201300024', 'CASTELLON GALLARDO DEMBY', '3'),
(30, '201705961@est.umss.edu', '201705961', 'CHOQUE ESCOBAR JOSUE DAVID', '3'),
(31, '200507244@est.umss.edu', '200507244', 'CHOQUE ZURITA JESUS GONZALO', '3'),
(32, '201604426@est.umss.edu', '201604426', 'CONDORI COLQUE JESUS JHONATAN', '3'),
(33, '201801257@est.umss.edu', '201801257', 'CRESPO BAZOALTO ADRIAN RICARDO', '3'),
(34, '201803516@est.umss.edu', '201803516', 'DELGADO LOPEZ FRANKLIN', '3'),
(35, '201604495@est.umss.edu', '201604495', 'ESCOBAR ROCHA LUIS ESTEBAN', '3'),
(36, '201408617@est.umss.edu', '201408617', 'FLORES ASERICO NOEMI', '3'),
(37, '201407488@est.umss.edu', '201407488', 'GALINDO VARGAS FLABIO CESAR', '3'),
(38, '201800008@est.umss.edu', '201800008', 'IPORRE MEDRANO ANDRES ELOY', '3'),
(39, '201703357@est.umss.edu', '201703357', 'JAILLITA PADILLA MARIO BRAYAN', '3'),
(40, '201701812@est.umss.edu', '201701812', 'LAZARTE JIMENEZ ALEX FABRICIO', '3'),
(41, '201612367@est.umss.edu', '201612367', 'MAMANI NAVARRO JAIME', '3'),
(42, '201800180@est.umss.edu', '201800180', 'MERCADO PEREZ ALEJANDRO', '3'),
(43, '201800181@est.umss.edu', '201800181', 'NOGALES VILLARROEL RAFAEL', '3'),
(44, '201308176@est.umss.edu', '201308176', 'ÑUCRA VICENTE JHILMER', '3'),
(45, '201606355@est.umss.edu', '201606355', 'ORTIZ MERIDA MIGUEL ANGEL', '3'),
(46, '201201047@est.umss.edu', '201201047', 'PACO GAMARRA KAREN PATRICIA', '3'),
(47, '201400060@est.umss.edu', '201400060', 'PARDO BARRIENTOS CESAR JHOVANNY', '3'),
(48, '201702061@est.umss.edu', '201702061', 'PARICAGUA VARGAS ARIEL FERNANDO', '3'),
(49, '201507144@est.umss.edu', '201507144', 'REQUE ZEBALLOS JENNY', '3'),
(50, '201604549@est.umss.edu', '201604549', 'ROCHA HUACOTA REMY JOSUE', '3'),
(51, '201201054@est.umss.edu', '201201054', 'ROCHA VIDAURRE JORGE', '3'),
(52, '201309803@est.umss.edu', '201309803', 'ROMAN MARCA ANGEL ANTONIO', '3'),
(53, '201709689@est.umss.edu', '201709689', 'TEJERINA CALIZAYA MARIO FABRICIO', '3'),
(54, '201008141@est.umss.edu', '201008141', 'TORRES BALDERRAMA HENRRY', '3'),
(55, '201800190@est.umss.edu', '201800190', 'VARGAS CRUZ JOSE MANUEL', '3'),
(56, '201608168@est.umss.edu', '201608168', 'VARGAS HUANACO RINA DENISSE', '3'),
(57, '201907693@est.umss.edu', '201907693', 'VILLCA CORAITE LIMBERG', '3'),
(58, 'pedrito', '201400887', 'pedrit', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_empresa`
--

CREATE TABLE `usuario_empresa` (
  `id` int(11) NOT NULL,
  `usr` int(11) NOT NULL,
  `emp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_empresa`
--

INSERT INTO `usuario_empresa` (`id`, `usr`, `emp`) VALUES
(2, 24, 12),
(3, 29, 12),
(4, 38, 13),
(5, 39, 13),
(6, 40, 13),
(7, 41, 13),
(8, 42, 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indices de la tabla `usuario_empresa`
--
ALTER TABLE `usuario_empresa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `usuario_empresa`
--
ALTER TABLE `usuario_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
