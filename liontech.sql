-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-01-2022 a las 02:34:40
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liontech`
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
(3, 'test', 'Buenos dias a tod@s Les dejo para consideracion de ustedes las especificaciones técnicas del nuevo servidor de nuestro laboratorio que administracion nos envio hoy BASES DE DATOS mariadb Versión 15.1 psql (PostgreSQL) 12.7 BACKEND Laravel 8 Php 7.4.22 Apache/2.4.38L FRONTEND Platillas propias de Laravel Boopstrap Angular React Recomendaciones: En el caso que se use para el frontend Angular o React, su proceso de build es un poco distinto, debido a que deben apuntar a su backend de distinta manera.', '15092021', '2021', '1');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` bigint(100) NOT NULL,
  `name` text DEFAULT NULL,
  `archivote` longtext NOT NULL,
  `codigo` text NOT NULL,
  `gestion` varchar(50) NOT NULL,
  `semestre` varchar(50) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_empresa`
--

CREATE TABLE `documentos_empresa` (
  `id` int(11) NOT NULL,
  `emp` int(11) NOT NULL,
  `parteA` longtext DEFAULT NULL,
  `parteB` longtext DEFAULT NULL,
  `trabajo` longtext DEFAULT NULL,
  `pagos` longtext DEFAULT NULL,
  `orden` longtext DEFAULT NULL,
  `contrato` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gestion` year(4) DEFAULT NULL,
  `semestre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_docente` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `mensaje_notificacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recibe_id` int(100) DEFAULT NULL,
  `envia_id` int(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones_de_usuarios`
--

CREATE TABLE `notificaciones_de_usuarios` (
  `id` int(100) NOT NULL,
  `id_notificacion` int(100) DEFAULT NULL,
  `id_recibido` int(100) DEFAULT NULL,
  `leido` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado_del_proyecto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entregable` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_de_entrega` date DEFAULT NULL,
  `porcentaje` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `costo` decimal(22,2) DEFAULT 0.00,
  `id_empresa` int(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `estado_del_proyecto`, `entregable`, `fecha_de_entrega`, `porcentaje`, `costo`, `id_empresa`, `created_at`, `updated_at`) VALUES
(1, 'Inicio del proyecto', '-product backlog.<br>\r\n- Sprint 0.<br>\r\n- Informe<br>', '2022-01-07', '12%', '5000.00', 565, '2022-01-07 01:20:06', '2022-01-07 01:59:57'),
(6, '234', 'Buenos dias a tod@s Les dejo para consideracion de - ustedes las especificaciones técnicas del nuevo - - - - servidor de nuestro laboratorio que administracion - nos envio hoy BASES DE DATOS mariadb Versión - 15.1 psql (PostgreSQL) 12.7 BACKEND Laravel 8 Php - 7.4.22 Apache/2.4.38L FRONTEND Platillas propias de - Laravel Boopstrap Angular React Recomendaciones: - En el caso que se use para el frontend Angular o React, su proceso de build es un poco distinto, debido a que deben apuntar a su backend de distinta manera.', '2022-01-08', '12%', '243434.00', 724, '2022-01-07 20:34:18', '2022-01-08 00:21:20'),
(9, '12', '•	Funcionalidades de listar las empresas registradas en fundempresa de TIS con sus\r\n•	datos respectivos, obtener mayor información de estas y realizar la publicación de una convocatoria.\r\n•	Documentación técnica de las funcionalidades implementadas\r\n•	La funcionalidad de listar empresas registradas\r\n•	La funcionalidad de mostrar toda la información disponible de las empresas dependiendo del rol del usuario.\r\n•	Dentro de la interfaz de usuarios consultores se implementará la funcionalidad de publicar una invitación pública', '2022-01-08', '12%', '12234.00', 724, '2022-01-08 00:22:24', '2022-01-08 02:03:45'),
(11, 'prueba', 'hola como estas estoy bien y tu comote fue en tu trabajo me fue bien fue un dia caluros', '2022-01-21', '15%', '13234.00', 724, '2022-01-08 02:24:57', '2022-01-08 02:24:57');

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
-- Estructura de tabla para la tabla `plantrabajos`
--

CREATE TABLE `plantrabajos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sprint` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultado` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duración` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `id_empresa` int(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `ape` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`id`, `name`, `ape`) VALUES
(3, 'ana', 'NULL\''),
(4, 'pepe', 'NULL\''),
(5, 'ana', '\''),
(6, 'pepe', '\''),
(7, 'ana', ''),
(8, 'pepe', '');

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
  `username` text CHARACTER SET utf8 NOT NULL,
  `pass` text CHARACTER SET utf8 NOT NULL,
  `nombre` text CHARACTER SET utf8 NOT NULL,
  `tipo` text CHARACTER SET utf8 NOT NULL,
  `grupo` int(50) NOT NULL,
  `id_docente` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `pass`, `nombre`, `tipo`, `grupo`, `id_docente`) VALUES
(1, 'administradorTIS@gmail.com', 'Admin1234', 'LEONEL GUTIERREZ VILLARROEL', '1', 0, 0),
(2, 'corinaflores.v@fcyt.umss.edu.bo', 'Docente123', 'Corina Justina Flores Villarroel', '2', 0, NULL),
(3, 'leticiablanco.c@fcyt.umss.edu.bo', 'Leticia*3', 'Maria Leticia Blanco Coca', '2', 0, NULL),
(4, 'd.escalera@fcyt.umss.edu.bo', 'David05*', 'David Escalera Fernandez', '2', 0, NULL),
(5, 'akirebilbao@fcyt.umss.edu.bo', 'Patybilbao#', 'Erika Patricia Rodriguez Bilbao', '2', 0, NULL),
(138, '201606617@est.umss.edu', '201606617', 'CALCINA BERNAL HANYINSON ALEX', '3', 0, 2),
(139, '201401040@est.umss.edu', '201401040', 'CAMACHO MENDIETA FRANCISCO ANTONIO', '3', 0, 2),
(140, '201400887@est.umss.edu', '201400887', 'CÃRDENAS LÃPEZ CARLOS ALBERTO', '3', 0, 2),
(141, '201604480@est.umss.edu', '201604480', 'CARREÃO HUAIPARA ALEJANDRO RAI', '3', 0, 2),
(142, '201300024@est.umss.edu', '201300024', 'CASTELLON GALLARDO DEMBY', '3', 0, 2),
(143, '201705961@est.umss.edu', '201705961', 'CHOQUE ESCOBAR JOSUE DAVID', '3', 0, 2),
(144, '200507244@est.umss.edu', '200507244', 'CHOQUE ZURITA JESUS GONZALO', '3', 0, 2),
(145, '201604426@est.umss.edu', '201604426', 'CONDORI COLQUE JESUS JHONATAN', '3', 0, 2),
(146, '201801257@est.umss.edu', '201801257', 'CRESPO BAZOALTO ADRIAN RICARDO', '3', 0, 2),
(147, '201803516@est.umss.edu', '201803516', 'DELGADO LOPEZ FRANKLIN', '3', 0, 2),
(148, '201604495@est.umss.edu', '201604495', 'ESCOBAR ROCHA LUIS ESTEBAN', '3', 0, 2),
(149, '201408617@est.umss.edu', '201408617', 'FLORES ASERICO NOEMI', '3', 0, 2),
(150, '201407488@est.umss.edu', '201407488', 'GALINDO VARGAS FLABIO CESAR', '3', 0, 2),
(151, '201800008@est.umss.edu', '201800008', 'IPORRE MEDRANO ANDRES ELOY', '3', 0, 2),
(152, '201703357@est.umss.edu', '201703357', 'JAILLITA PADILLA MARIO BRAYAN', '3', 0, 2),
(153, '201701812@est.umss.edu', '201701812', 'LAZARTE JIMENEZ ALEX FABRICIO', '3', 0, 2),
(154, '201612367@est.umss.edu', '201612367', 'MAMANI NAVARRO JAIME', '3', 0, 2),
(155, '201800180@est.umss.edu', '201800180', 'MERCADO PEREZ ALEJANDRO', '3', 0, 2),
(156, '201800181@est.umss.edu', '201800181', 'NOGALES VILLARROEL RAFAEL', '3', 0, 2),
(157, '201308176@est.umss.edu', '201308176', 'ÃUCRA VICENTE JHILMER', '3', 0, 2),
(158, '201606355@est.umss.edu', '201606355', 'ORTIZ MERIDA MIGUEL ANGEL', '3', 0, 2),
(159, '201201047@est.umss.edu', '201201047', 'PACO GAMARRA KAREN PATRICIA', '3', 0, 2),
(160, '201400060@est.umss.edu', '201400060', 'PARDO BARRIENTOS CESAR JHOVANNY', '3', 0, 2),
(161, '201702061@est.umss.edu', '201702061', 'PARICAGUA VARGAS ARIEL FERNANDO', '3', 0, 2),
(162, '201507144@est.umss.edu', '201507144', 'REQUE ZEBALLOS JENNY', '3', 0, 2),
(163, '201604549@est.umss.edu', '201604549', 'ROCHA HUACOTA REMY JOSUE', '3', 0, 2),
(164, '201201054@est.umss.edu', '201201054', 'ROCHA VIDAURRE JORGE', '3', 0, 2),
(165, '201309803@est.umss.edu', '201309803', 'ROMAN MARCA ANGEL ANTONIO', '3', 0, 2),
(166, '201709689@est.umss.edu', '201709689', 'TEJERINA CALIZAYA MARIO FABRICIO', '3', 0, 2),
(167, '201008141@est.umss.edu', '201008141', 'TORRES BALDERRAMA HENRRY', '3', 0, 2),
(168, '201800190@est.umss.edu', '201800190', 'VARGAS CRUZ JOSE MANUEL', '3', 0, 2),
(169, '201608168@est.umss.edu', '201608168', 'VARGAS HUANACO RINA DENISSE', '3', 0, 2),
(170, '201907693@est.umss.edu', '201907693', 'VILLCA CORAITE LIMBERG', '3', 0, 2),
(171, 'noemi@gmail.com', '123456', 'Noemi', '2', 0, NULL),
(172, '1234567@gmail.com', '1234567', 'ana lopez ', '3', 0, 171),
(173, '20200101@gmail.com', '20200101', 'Lupita Gomez', '3', 0, 171),
(174, '20200202@gmail.com', '20200202', 'Fernanda Castillo', '3', 0, 171),
(175, '20200203@gmail.com', '20200203', 'Yeimy Montoya', '3', 0, 171),
(176, '20200204@gmail.com', '20200204', 'Charly Flo', '3', 0, 171),
(177, '20200205@gmail.com', '20200205', 'Gaviota Suarez', '3', 0, 171),
(178, '20200206@gmail.com', '20200206', 'Sebastian Vallejo', '3', 0, 171);

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
(4, 138, 724),
(5, 139, 724),
(6, 140, 724);

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
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos_empresa`
--
ALTER TABLE `documentos_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
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
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificaciones_de_usuarios`
--
ALTER TABLE `notificaciones_de_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
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
-- Indices de la tabla `plantrabajos`
--
ALTER TABLE `plantrabajos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos_empresa`
--
ALTER TABLE `documentos_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificaciones_de_usuarios`
--
ALTER TABLE `notificaciones_de_usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plantrabajos`
--
ALTER TABLE `plantrabajos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT de la tabla `usuario_empresa`
--
ALTER TABLE `usuario_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
