-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2022 a las 23:28:21
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
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `archivote` longtext NOT NULL,
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
  `gestion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_docente` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombreC`, `nombreL`, `integrantes`, `representante`, `correo`, `telefono`, `direccion`, `gestion`, `id_docente`) VALUES
(1, 'A&D', '', '', '', '', '', '', '', NULL),
(2, 'ActionSoft', 'ActionSoft  S.R.L.', '', '', '', '', '', '1-2020', 4),
(3, 'ABC', '', '', '', '', '', '', '', NULL),
(4, 'Addsoft', '', '', '', '', '', '', '', NULL),
(5, 'AGAAK development SRL', 'AGAAK', '', '', '', '', '', '1-2020', 3),
(6, 'ADSysCorp', 'ADSystem Corporation', '', '', '', '', '', '', NULL),
(7, 'Agile Action', '', '', '', '', '', '', '1-2010', NULL),
(8, 'AiraSoft', 'AiraSoft SRL', '', '', '', '', '', '', NULL),
(9, 'Akira soft', 'Akira soft', '', '', '', '', '', '', NULL),
(10, 'Altec SRL', 'Experiencia y alta tecnologia SRL', '', '', '', '', '', '', NULL),
(11, 'ANDESOFT', 'ANDESOFT', '', '', '', '', '', '', NULL),
(12, 'Angel Fire', 'Angel Fire', '', '', '', '', '', '', NULL),
(13, 'ANKA SOFT', 'ANKA SOFT SRL', '', '', '', '', '', '1-2014', NULL),
(14, 'Ant Work', 'Ant Work SRL', '', '', '', '', '', '2-2018', 3),
(15, 'Answer', '', '', '', '', '', '', '', NULL),
(16, 'ARES', 'ARES S.R.L.', '', '', '', '', '', '2-2019', 4),
(17, 'Aracorp', '', '', '', '', '', '', '', NULL),
(18, 'ARGOS', '', '', '', '', '', '', '', NULL),
(19, 'Arkano', 'Arkano', '', '', '', '', '', '', NULL),
(20, 'Aska', '', '', '', '', '', '', '1-2009', NULL),
(21, 'ASSI', 'ASSI', '', '', '', '', '', '', NULL),
(22, 'AT&P', 'AT&P SRL', '', '', '', '', '', '1-2011', NULL),
(23, 'ATIS SRL', 'ATIS SRL', '', '', '', '', '', '', NULL),
(24, 'Atiysoft', '', '', '', '', '', '', '', NULL),
(25, 'Atom', 'Atom Software SRL', '', '', '', '', '', '2-2016', NULL),
(26, 'Authentic Soft', '', '', '', '', '', '', '2-2010', NULL),
(27, 'BeDevs S.R.L.', 'BeDevs S-R-L.', '', '', '', '', '', '2-2019', 2),
(28, 'BERSASOFT', '', '', '', '', '', '', '1-2019', 5),
(29, 'B&B', '', '', '', '', '', '', '', NULL),
(30, 'Bastet S.R.L.', '', '', '', '', '', '', '2-2020', 2),
(31, 'BH Soft', 'Bit Hunter Soft SRL', '', '', '', '', '', '1-2017', NULL),
(32, 'Binary', '', '', '', '', '', '', '2-2014', NULL),
(33, 'Binarysoft', 'Binarysoft', '', '', '', '', '', '', NULL),
(34, 'Bit SRL', '', '', '', '', '', '', '2-2009', NULL),
(35, 'Bittle SRL', 'Bittle SRL', '', '', '', '', '', '2-2014', NULL),
(36, 'Blue Marlin S.R.L.', 'Blue Marlin S.R.L.', '', '', '', '', '', '', NULL),
(37, 'Bolivia soft', 'Bolivia soft', '', '', '', '', '', '', NULL),
(38, 'Boost Soft', 'Boost Soft', '', '', '', '', '', '1-2015', NULL),
(39, 'BOS SA', 'Build Of System S.A', '', '', '', '', '', '', NULL),
(40, 'Boy\'s Code', 'Boy\'s Code SRL', '', '', '', '', '', '1-2018', NULL),
(41, 'BRAIN SOFT', 'BRAIN SOFT SRL', '', '', '', '', '', '1-2014', NULL),
(42, 'Brave Soft', 'Brave software solutions', '', '', '', '', '', '2-2013', NULL),
(43, 'Burgos Soft', 'BURGOS SOFT S.R.L.', '', '', '', '', '', '2-2019', 4),
(44, 'Building Soft', 'Building Soft', '', '', '', '', '', '2-2020', 4),
(45, 'BUSSINESOFT', '', '', '', '', '', '', '2-2010', NULL),
(46, 'C@DSOFT SRL', 'C@DSOFT SRL', '', '', '', '', '', '', NULL),
(47, 'Caesar asociados', 'Caesar asociados', '', '', '', '', '', '', NULL),
(48, 'CaniSoft SRL', 'CaniSoft SRL', '', '', '', '', '', '1-2020', 2),
(49, 'Canguro soft srl', 'Canguro soft srl', '', '', '', '', '', '', NULL),
(50, 'CAS S.R.L.', 'Cochabamba Autom?tica Soft S.R.L.', '', '', '', '', '', '1-2019', 4),
(51, 'Capsule', 'Capsule SRL', '', '', '', '', '', '1-2018', NULL),
(52, 'Cassiopeia', 'Cassiopeia', '', '', '', '', '', '2-2013', NULL),
(53, 'Cativos', '', '', '', '', '', '', '', NULL),
(54, 'CDSA SRL', 'Consultora de desarrollo de software', '', '', '', '', '', '', NULL),
(55, 'CEDSI', 'CEDSI', '', '', '', '', '', '', NULL),
(56, 'Cemdesoft', '', '', '', '', '', '', '1-2009', NULL),
(57, 'CENTAURO', '', '', '', '', '', '', '2-2010', NULL),
(58, 'Chameleon Code', 'Chameleon Code Software S.R.L', '', '', '', '', '', '1-2019', 3),
(59, 'Centersoft', '', '', '', '', '', '', '', NULL),
(60, 'CHR SRL', 'Compumundo Hipermega Red SRL', '', '', '', '', '', '2-2017', NULL),
(61, 'Cis sa', 'Cis sa', '', '', '', '', '', '', NULL),
(62, 'CISOFT', 'CISOFT SRL', '', '', '', '', '', '1-2011', NULL),
(63, 'CLASSSOFT SRL', 'CLASSSOFT SRL', '', '', '', '', '', '1-2015', NULL),
(64, 'Click', 'Click Soluciones Inform?ticas', '', '', '', '', '', '', NULL),
(65, 'CODEBREAKER', '', '', '', '', '', '', '2-2018', 5),
(66, 'Clicknet', '', '', '', '', '', '', '', NULL),
(67, 'Cochala-Soft', '', '', '', '', '', '', '1-2021', 4),
(68, 'Codemaster', '', '', '', '', '', '', '1-2017', NULL),
(69, 'CODESOFT', '', '', '', '', '', '', '1-2009', NULL),
(70, 'Codigo Enigma S.R.L.', 'Codigo Enigma S.R.L.', '', '', '', '', '', '2-2019', 2),
(71, 'Codesoft_srl', 'Codesoft_srl', '', '', '', '', '', '', NULL),
(72, 'Codigo Fuerte S.R.L.', '', '', '', '', '', '', '2-2020', 2),
(73, 'COLECTIVO', 'COLECTIVO VIRTUAL SRL', '', '', '', '', '', '1-2014', NULL),
(74, 'Colmena SRL', 'Colmena SRL', '', '', '', '', '', '', NULL),
(75, 'comotusoft', 'Como Tu Soft SRL', '', '', '', '', '', '', NULL),
(76, 'Compusoft', '', '', '', '', '', '', '', NULL),
(77, 'CondeVela Soft', '', '', '', '', '', '', '2-2014', NULL),
(78, 'ControlZ', 'ControlZ', '', '', '', '', '', '2-2019', 5),
(79, 'Conseinf', 'Conseinf', '', '', '', '', '', '', NULL),
(80, 'Cosinf', 'Consultora de Servicios Inform?ticos', '', '', '', '', '', '', NULL),
(81, 'Creasser SRL', 'Creasser SRL', '', '', '', '', '', '', NULL),
(82, 'CREATIVE.SOFT777 S.R.L.', '', '', '', '', '', '', '1-2011', NULL),
(83, 'CREATIVESOFT', 'SOFTWARE CREATIVO', '', '', '', '', '', '2-2010', NULL),
(84, 'Cripher', '', '', '', '', '', '', '', NULL),
(85, 'Crovz', 'Crovz', '', '', '', '', '', '', NULL),
(86, 'CSI', '', '', '', '', '', '', '1-2009', NULL),
(87, 'Csi', '', '', '', '', '', '', '', NULL),
(88, 'Csisi', 'Csisi', '', '', '', '', '', '', NULL),
(89, 'Csiv', 'Csiv', '', '', '', '', '', '', NULL),
(90, 'Cstidas', 'Cstidas', '', '', '', '', '', '', NULL),
(91, 'Corporaci?n de Software y Tecnolog?a SRL', 'CST', '', '', '', '', '', '1-2021', 2),
(92, 'S.R.L.', 'Consultora de Tecnologias de Ingenieria de Software', '', '', '', '', '', '', NULL),
(93, 'CTRLS SRL', 'Controlled Solutions SRL', '', '', '', '', '', '2-2019', 3),
(94, 'ctrl_alt_soft', 'ctrl_alt_soft', '', '', '', '', '', '', NULL),
(95, 'Cusco_system', 'Cusco_system', '', '', '', '', '', '', NULL),
(96, 'Cyber Systems', 'Cyber Systems', '', '', '', '', '', '', NULL),
(97, 'D.A.C. S.A', 'Dream Act Create S.A.', '', '', '', '', '', '1-2019', 4),
(98, 'Cyborg Solutions LTD.', '', '', '', '', '', '', '', NULL),
(99, 'D&D', 'Design & Development software', '', '', '', '', '', '', NULL),
(100, 'DAD software', 'DAD software', '', '', '', '', '', '', NULL),
(101, 'Dastech', 'Dastech', '', '', '', '', '', '', NULL),
(102, 'DDS', 'Digital Development Soft', '', '', '', '', '', '2-2020', 5),
(103, 'DEBUG', '', '', '', '', '', '', '2-2010', NULL),
(104, 'Delfos SRL', 'Delfos Soft SRL', '', '', '', '', '', '2-2019', 3),
(105, 'DecSoft', 'DecSoft SRL', '', '', '', '', '', '2-2016', NULL),
(106, 'DelfiNet', 'DelfiNet', '', '', '', '', '', '', NULL),
(107, 'Demonnet', 'Demonnet', '', '', '', '', '', '', NULL),
(108, 'DEPSOFT', '', '', '', '', '', '', '2-2010', NULL),
(109, 'DESIGNTEC', '', '', '', '', '', '', '1-2011', NULL),
(110, 'Desofin', '', '', '', '', '', '', '1-2014', NULL),
(111, 'DESOFT SRL', 'DESOFT SRL', '', '', '', '', '', '', NULL),
(112, 'DESOInf', '', '', '', '', '', '', '2-2012', NULL),
(113, 'Dessa', 'Desarrolladora de Software Aplicado', '', '', '', '', '', '', NULL),
(114, 'Dessoft ORION', 'Dessoft ORION', '', '', '', '', '', '', NULL),
(115, 'Developer in open source', 'Developer in open source', '', '', '', '', '', '', NULL),
(116, 'DEVS', 'DEVS GROUP SRL', '', '', '', '', '', '1-2015', NULL),
(117, 'DEVSOFT SRL.', 'Developer Software SRL', '', '', '', '', '', '1-2016', NULL),
(118, 'DevSol.SRL', 'DevSol.SRL', '', '', '', '', '', '2-2017', NULL),
(119, 'DevSZ', 'Development Software Z', '', '', '', '', '', '2-2020', 5),
(120, 'DFS SRL', 'Desarrollo de Fuertes Soluciones S.R.L.', '', '', '', '', '', '2-2020', 3),
(121, 'DICOSOFT', 'dise?o y consultoria de software', '', '', '', '', '', '', NULL),
(122, 'Digital City', 'Digital City S.R.L.', '', '', '', '', '', '2-2020', 3),
(123, 'DIGITAL SYSTEMS', '', '', '', '', '', '', '1-2011', NULL),
(124, 'DigitalSoft', 'DigitalSoft SA', '', '', '', '', '', '', NULL),
(125, 'Dim_soft', 'Dim_soft', '', '', '', '', '', '', NULL),
(126, 'Dinasoft', '', '', '', '', '', '', '1-2012', NULL),
(127, 'Dios', '', '', '', '', '', '', '', NULL),
(128, 'DIS', 'DIS', '', '', '', '', '', '', NULL),
(129, 'DiverNet', 'DiverNert', '', '', '', '', '', '', NULL),
(130, 'DKS', 'DKS', '', '', '', '', '', '1-2011', NULL),
(131, 'DOMINOSOFT SRL', 'DOMINOSOFT SRL', '', '', '', '', '', '', NULL),
(132, 'Dotpoint Soft.Srl', '', '', '', '', '', '', '2-2012', NULL),
(133, 'Dows', '', '', '', '', '', '', '1-2009', NULL),
(134, 'Drakko', 'Drakko srl', '', '', '', '', '', '', NULL),
(135, 'Dreams SRL', 'Dreams SRL', '', '', '', '', '', '', NULL),
(136, 'Drsif', '', '', '', '', '', '', '', NULL),
(137, 'DS', 'Digital Strategies', '', '', '', '', '', '2-2020', 5),
(138, 'DSA', 'DSA', '', '', '', '', '', '', NULL),
(139, 'DSAN', '', '', '', '', '', '', '', NULL),
(140, 'DSI', 'DSI', '', '', '', '', '', '', NULL),
(141, 'Dsisoft', '', '', '', '', '', '', '', NULL),
(142, 'Dsp', '', '', '', '', '', '', '', NULL),
(143, 'DTS', 'DTS', '', '', '', '', '', '', NULL),
(144, 'DYANSOFT', '', '', '', '', '', '', '1-2009', NULL),
(145, 'e & s SRL', 'e & s SRL', '', '', '', '', '', '', NULL),
(146, 'EAGLESOFT', '', '', '', '', '', '', '1-2021', 4),
(147, 'EDAS', 'EDAS', '', '', '', '', '', '', NULL),
(148, 'EDESSI', 'Empresa de Desarrollo de Sistemas y Servicios Informaticos', '', '', '', '', '', '1-2010', NULL),
(149, 'Editsoft', '', '', '', '', '', '', '', NULL),
(150, 'EDS SA', 'Empresa de Desarrollo de Software SA', '', '', '', '', '', '', NULL),
(151, 'EDSI', 'Empresa de Desarrollo de Sistemas Inform?ticos', '', '', '', '', '', '2-2016', NULL),
(152, 'EDSIN', 'Elite en Desarrollo Soluciones Informaticas', '', '', '', '', '', '', NULL),
(153, 'Edsj', '', '', '', '', '', '', '', NULL),
(154, 'EKEKO', '', '', '', '', '', '', '2-2018', 5),
(155, 'EDSL', 'EDSL', '', '', '', '', '', '', NULL),
(156, 'EDSODIA SRL', 'Empresa de Desarrollo de Software de Implementaci?n Actual SRL', '', '', '', '', '', '', NULL),
(157, 'Edti', '', '', '', '', '', '', '', NULL),
(158, 'Eficient', 'Eficient', '', '', '', '', '', '', NULL),
(159, 'Egroup', 'e-group srl', '', '', '', '', '', '', NULL),
(160, 'EIDS', 'EIDS', '', '', '', '', '', '', NULL),
(161, 'Emagic', '', '', '', '', '', '', '', NULL),
(162, 'ENC', 'E.N.C. ( New Computational Empire ) S.R.L.', '', '', '', '', '', '2-2018', 4),
(163, 'Emcosis', 'emcosis srl', '', '', '', '', '', '', NULL),
(164, 'emcosoft', 'Empresa Comercial de Software', '', '', '', '', '', '', NULL),
(165, 'emdesoft', 'emdesoft', '', '', '', '', '', '', NULL),
(166, 'Emesoft', '', '', '', '', '', '', '1-2012', NULL),
(167, 'EMIS SRL', 'EMIS SRL', '', '', '', '', '', '', NULL),
(168, 'EmprendeSOFT.SRL', '', '', '', '', '', '', '1-2012', NULL),
(169, 'Enterprise-esc', 'Enterprise Software Construction SA', '', '', '', '', '', '', NULL),
(170, 'EPIC', 'EPIC SRL', '', '', '', '', '', '1-2018', NULL),
(171, 'ES3', '', '', '', '', '', '', '1-2009', NULL),
(172, 'ESA', 'ESA', '', '', '', '', '', '', NULL),
(173, 'ESSI', 'ESSI SRL', '', '', '', '', '', '1-2011', NULL),
(174, 'ETIS', 'ETIS', '', '', '', '', '', '', NULL),
(175, 'ETSI', 'ETSI', '', '', '', '', '', '', NULL),
(176, 'Evolutionsoft', '', '', '', '', '', '', '', NULL),
(177, 'Ewebshop', '', '', '', '', '', '', '', NULL),
(178, 'eXistenZ', 'eXistenZ', '', '', '', '', '', '', NULL),
(179, 'Extreme System', '', '', '', '', '', '', '2-2011', NULL),
(180, 'F01 emdes', '', '', '', '', '', '', '', NULL),
(181, 'Falcon', 'Falcon Soft', '', '', '', '', '', '1-2017', NULL),
(182, 'Faro Systems', 'Faro Systems', '', '', '', '', '', '', NULL),
(183, 'FDS', '', '', '', '', '', '', '2-2010', NULL),
(184, 'Fenix', 'Fenix', '', '', '', '', '', '', NULL),
(185, 'FenrirSulven Sistems. Ingenieria y Reingenieria', 'FenrirSulven Sistems. Ingenieria y Reingenieria', '', '', '', '', '', '', NULL),
(186, 'Feral Consultores.SRL', '', '', '', '', '', '', '2-2013', NULL),
(187, 'Filia', '', '', '', '', '', '', '', NULL),
(188, 'FJSOFT', 'FJSOFT SRL', '', '', '', '', '', '1-2011', NULL),
(189, 'Flare Soft S.R.L.', 'Flare Soft S.R.L.', '', '', '', '', '', '2-2017', NULL),
(190, 'Flash', 'Flash', '', '', '', '', '', '', NULL),
(191, 'Formato X S.A.', 'Formato X S.A.', '', '', '', '', '', '', NULL),
(192, 'FUTESOFT', '', '', '', '', '', '', '1-2019', 5),
(193, 'Fox-Soft', 'Fox-Soft SRL', '', '', '', '', '', '1-2011', NULL),
(194, 'FRAMTIS', 'FRAMTIS SRL', '', '', '', '', '', '1-2011', NULL),
(195, 'FreeSOFT.SRL', '', '', '', '', '', '', '1-2012', NULL),
(196, 'FREEVALU', 'FreeValue SRL', '', '', '', '', '', '1-2014', NULL),
(197, 'FRIENDSOFT', '', '', '', '', '', '', '2-2010', NULL),
(198, 'Full Soft', '', '', '', '', '', '', '1-2009', NULL),
(199, 'G & G Soft', 'G & G Soft', '', '', '', '', '', '', NULL),
(200, 'G Kaisoft', 'Group Knowledge Advanced In Innovation Of Software', '', '', '', '', '', '', NULL),
(201, 'GDESIS', '', '', '', '', '', '', '1-2009', NULL),
(202, 'Gdesis', '', '', '', '', '', '', '', NULL),
(203, 'Genesis Soft', 'Genesis Soft', '', '', '', '', '', '2-2019', 5),
(204, 'GDSOFT', '', '', '', '', '', '', '2-2010', NULL),
(205, 'GEDSIS', 'GEDSIS', '', '', '', '', '', '', NULL),
(206, 'GEDSOFT SA', 'Grupo de Desarrollo de Software Sociedad An?nima', '', '', '', '', '', '1-2012', NULL),
(207, 'Gen Soft', 'Generadores de software', '', '', '', '', '', '', NULL),
(208, 'Generic software', 'Generic software', '', '', '', '', '', '', NULL),
(209, 'Genesis', 'Genesis', '', '', '', '', '', '', NULL),
(210, 'Genesis Code', 'Genesis Code', '', '', '', '', '', '1-2021', 2),
(211, 'Ghost SRL', 'Ghost SRL', '', '', '', '', '', '', NULL),
(212, 'Girasolmax', 'Girasolmax', '', '', '', '', '', '', NULL),
(213, 'Global Soft', 'Global soft', '', '', '', '', '', '', NULL),
(214, 'Global Systems S.R.L.', 'Global Systems S.R.L.', '', '', '', '', '', '1-2016', NULL),
(215, 'Gos', 'Gos', '', '', '', '', '', '', NULL),
(216, 'GRED Soft', 'GRED Soft', '', '', '', '', '', '', NULL),
(217, 'Grusoft_necs', 'Grusoft_necs', '', '', '', '', '', '', NULL),
(218, 'GTI Soft', '', '', '', '', '', '', '2-2012', NULL),
(219, 'Guess Soft', 'Guess Soft', '', '', '', '', '', '', NULL),
(220, 'Huayra Soft', 'Huayra', '', '', '', '', '', '1-2020', 3),
(221, 'Guss', '', '', '', '', '', '', '', NULL),
(222, 'HadesSoft', 'HadesSoft', '', '', '', '', '', '', NULL),
(223, 'Hellsoft', 'HELLSOFT SRL', '', '', '', '', '', '', NULL),
(224, 'High Bits', '', '', '', '', '', '', '2-2014', NULL),
(225, 'House Soft.SRL', '', '', '', '', '', '', '2-2013', NULL),
(226, 'Hsd', '', '', '', '', '', '', '', NULL),
(227, 'Hypersoft', '', '', '', '', '', '', '', NULL),
(228, 'IART', 'Informatica Adelantos Responsables en Tecnologia', '', '', '', '', '', '1-2010', NULL),
(229, 'Iarte', '', '', '', '', '', '', '', NULL),
(230, 'Icarus SRL', 'Icarus Soft SRL', '', '', '', '', '', '2-2017', NULL),
(231, 'Icon', 'icon soft', '', '', '', '', '', '', NULL),
(232, 'ICOS', 'Ingenieria de Computaci?n y Software', '', '', '', '', '', '1-2013', NULL),
(233, 'ID Soft SRL', 'ID Soft SRL', '', '', '', '', '', '', NULL),
(234, 'ide@', 'ide@', '', '', '', '', '', '', NULL),
(235, 'IKKITOUSEN SRL', 'IKKITOUSEN SRL', '', '', '', '', '', '', NULL),
(236, 'Illimani', '', '', '', '', '', '', '', NULL),
(237, 'ILLUSION', 'ILLUSION SRL', '', '', '', '', '', '1-2014', NULL),
(238, 'Imagsoft', '', '', '', '', '', '', '', NULL),
(239, 'INCA', 'INCA', '', '', '', '', '', '', NULL),
(240, 'INDESOFT', '', '', '', '', '', '', '2-2010', NULL),
(241, 'Indesoft', '', '', '', '', '', '', '', NULL),
(242, 'INDEX SRL', '', '', '', '', '', '', '', NULL),
(243, 'INFIDES SRL', '', '', '', '', '', '', '', NULL),
(244, 'Infotec', 'Infotec', '', '', '', '', '', '', NULL),
(245, 'Infsis', 'Infsis', '', '', '', '', '', '', NULL),
(246, 'Innovatek', 'Innovatek SRL', '', '', '', '', '', '1-2019', 3),
(247, 'Infsol', '', '', '', '', '', '', '', NULL),
(248, 'Ingesof', 'Ingesof', '', '', '', '', '', '', NULL),
(249, 'INNER Soft', 'INNER Soft', '', '', '', '', '', '1-2015', NULL),
(250, 'INNOSIS', 'Innovaciones en Sistemas Inform?ticos', '', '', '', '', '', '', NULL),
(251, 'INNOVA TECHNOLOGY SRL', '', '', '', '', '', '', '2-2016', NULL),
(252, 'INNOVATE SRL', 'INNOVATE SOFTWARE SOLUTION SRL', '', '', '', '', '', '1-2015', NULL),
(253, 'INNOVATION SOFT', '', '', '', '', '', '', '1-2011', NULL),
(254, 'INNSER', '', '', '', '', '', '', '', NULL),
(255, 'INsoft', 'INsoft', '', '', '', '', '', '', NULL),
(256, 'InterfaceMultimedia', 'Interface Multimedia', '', '', '', '', '', '', NULL),
(257, 'ITEC', 'ITEC Innovaci?n Tecnol?gica', '', '', '', '', '', '1-2019', 4),
(258, 'Inti SRL', 'Inti SRL', '', '', '', '', '', '', NULL),
(259, 'IRDB', '', '', '', '', '', '', '', NULL),
(260, 'Iron', '', '', '', '', '', '', '', NULL),
(261, 'ISIS cia', 'ISIS cia', '', '', '', '', '', '', NULL),
(262, 'iSoft SRL', 'iSOFT SRL', '', '', '', '', '', '1-2013', NULL),
(263, 'ISSI', 'ISSI', '', '', '', '', '', '', NULL),
(264, 'ITG SRL', 'ITG SRL', '', '', '', '', '', '', NULL),
(265, 'JAM', 'JAM Soft S.R.L.', '', '', '', '', '', '1-2019', 3),
(266, 'ITTEAM Ltda', 'Equipo de Tecnologias de informaci?n', '', '', '', '', '', '', NULL),
(267, 'ITTERASOFT', '', '', '', '', '', '', '1-2010', NULL),
(268, 'JetSoft', 'JetSoft SRL', '', '', '', '', '', '1-2019', 2),
(269, 'Izzysoft', '', '', '', '', '', '', '1-2017', NULL),
(270, 'JAC', 'JAC', '', '', '', '', '', '', NULL),
(271, 'Jadesoft', '', '', '', '', '', '', '2-2012', NULL),
(272, 'Jaguar Soft. SRL', 'Jaguar Soft. SRL', '', '', '', '', '', '1-2015', NULL),
(273, 'JAVAS Soft', '', '', '', '', '', '', '1-2021', 4),
(274, 'JAZC Development', '', '', '', '', '', '', '2-2012', NULL),
(275, 'JCSOFT', 'JCSOFT SRL', '', '', '', '', '', '1-2011', NULL),
(276, 'jexasoft', 'jexasoft SRL', '', '', '', '', '', '', NULL),
(277, 'JH3', '', '', '', '', '', '', '2-2010', NULL),
(278, 'Jugs', '', '', '', '', '', '', '', NULL),
(279, 'JUKUMARI', '', '', '', '', '', '', '2-2012', NULL),
(280, 'Knowledge Overload', 'Knowledge Overload', '', '', '', '', '', '1-2019', 4),
(281, 'Koliita developers SRL', 'Kollita SRL', '', '', '', '', '', '1-2020', 3),
(282, 'K-Lite Srl', '', '', '', '', '', '', '2-2010', NULL),
(283, 'KAHE', 'KAHE', '', '', '', '', '', '', NULL),
(284, 'KANE SRL', 'Informatic?s System?s Development KANE SRL', '', '', '', '', '', '', NULL),
(285, 'Kdes', '', '', '', '', '', '', '', NULL),
(286, 'KERNELOGICS', 'KERNELOGICS SOFTWARE SRL', '', '', '', '', '', '1-2016', NULL),
(287, 'Kiwi', 'Kiwi is web investigation S.A.', '', '', '', '', '', '', NULL),
(288, 'Konoha Srl', '', '', '', '', '', '', '', NULL),
(289, 'Linfocitos SRL.', 'Linfocitos SRL', '', '', '', '', '', '1-2020', 2),
(290, 'Lirium SRL', 'Lirium Software Engineering Services SRL', '', '', '', '', '', '2-2019', 3),
(291, 'Lanv Solutions', '', '', '', '', '', '', '2-2011', NULL),
(292, 'LiveCorp SRL', 'LiveCorp SRL', '', '', '', '', '', '1-2020', 2),
(293, 'Lemaxsoft', 'lemaxsoft', '', '', '', '', '', '', NULL),
(294, 'LETIS SRL', 'Lideres emprendedores en trabajos de ingenieria de software', '', '', '', '', '', '2-2011', NULL),
(295, 'LEVEL SOFT', '', '', '', '', '', '', '1-2009', NULL),
(296, 'Lid systems', 'Lid systems', '', '', '', '', '', '', NULL),
(297, 'Lidere Soft', '', '', '', '', '', '', '', NULL),
(298, 'LITTLE SOLUTIONS', '', '', '', '', '', '', '1-2011', NULL),
(299, 'LJSE', 'LJSE', '', '', '', '', '', '', NULL),
(300, 'Llajta Soft', 'Llajta Soft', '', '', '', '', '', '1-2016', NULL),
(301, 'Lobel', 'Lobel', '', '', '', '', '', '', NULL),
(302, 'Logitech', '', '', '', '', '', '', '', NULL),
(303, 'Magio', 'MagioSoft SRL', '', '', '', '', '', '2-2018', 4),
(304, 'Lynx', '', '', '', '', '', '', '', NULL),
(305, 'MAISOFT', 'MAISOFT S.R.L.', '', '', '', '', '', '1-2019', 3),
(306, 'MachineSoft SRL', 'MachineSoft SRL', '', '', '', '', '', '1-2021', 2),
(307, 'S.R.L.', '', '', '', '', '', '', '1-2012', NULL),
(308, 'Manzanares', 'Manzanares SRL', '', '', '', '', '', '2-2018', 3),
(309, 'MACROSOFT', 'MACROSOFT', '', '', '', '', '', '', NULL),
(310, 'Macross', '', '', '', '', '', '', '', NULL),
(311, 'MAD SRL', 'MAD SOFT', '', '', '', '', '', '1-2015', NULL),
(312, 'MBKM Soft', 'MBKM Soft', '', '', '', '', '', '2-2019', 5),
(313, 'MAGIC', 'Manejo Global de Informaci?n Computarizada', '', '', '', '', '', '1-2012', NULL),
(314, 'MagoSoft', 'MagoSoft SRL', '', '', '', '', '', '1-2016', NULL),
(315, 'MANAGERSOFT', '', '', '', '', '', '', '2-2010', NULL),
(316, 'Mercury SRL', '', '', '', '', '', '', '2-2019', 2),
(317, 'Marfil SRL', '', '', '', '', '', '', '1-2010', NULL),
(318, 'MingSoft SRL', 'MingSoft SRL', '', '', '', '', '', '2-2019', 3),
(319, 'Marte', '', '', '', '', '', '', '1-2009', NULL),
(320, 'Maveric', 'maveric system', '', '', '', '', '', '', NULL),
(321, 'MindCoding SRL', 'MindCoding SRL', '', '', '', '', '', '1-2021', 2),
(322, 'McCorvi SRL', 'McCorvi SRL', '', '', '', '', '', '', NULL),
(323, 'MD Futuro Soft', '', '', '', '', '', '', '2-2012', NULL),
(324, 'Monkey developers SRL', 'Monkey', '', '', '', '', '', '1-2020', 3),
(325, 'Moonsoft', 'Moonsoft', '', '', '', '', '', '2-2019', 5),
(326, 'Mega_Soft', 'Mega_Soft', '', '', '', '', '', '', NULL),
(327, 'NaviSoft', 'NaviSoft SRL', '', '', '', '', '', '1-2019', 2),
(328, 'Milenium SC', 'Milenium SC', '', '', '', '', '', '', NULL),
(329, 'NeoSoft SRL', 'NeoSoft SRL', '', '', '', '', '', '1-2020', 2),
(330, 'MindSoft S.R.L.', '', '', '', '', '', '', '2-2020', 2),
(331, 'Mirasoft', 'Mirasoft', '', '', '', '', '', '', NULL),
(332, 'NetSoft', 'NetSoft SRL', '', '', '', '', '', '1-2019', 2),
(333, 'Miski Devs', 'Miski Devs', '', '', '', '', '', '1-2017', NULL),
(334, 'Molecular Soft', 'Molecular Soft', '', '', '', '', '', '1-2016', NULL),
(335, 'Mundo Soft SRL', 'Empresa de Desarrollo de Sistemas Inform?ticos Mundo Soft SRL', '', '', '', '', '', '', NULL),
(336, 'Nemesis', 'Nemesis SRL', '', '', '', '', '', '', NULL),
(337, 'Neptuno soft', 'Neptuno soft', '', '', '', '', '', '', NULL),
(338, 'NETSKY', 'NETSKY SRL', '', '', '', '', '', '1-2015', NULL),
(339, 'Network', '', '', '', '', '', '', '', NULL),
(340, 'Neurolink SRL', 'Neurolink SRL', '', '', '', '', '', '', NULL),
(341, 'Nexsis', '', '', '', '', '', '', '', NULL),
(342, 'Nexus', '', '', '', '', '', '', '1-2009', NULL),
(343, 'NFS', 'NFS SRL', '', '', '', '', '', '1-2011', NULL),
(344, 'Novasoft', 'Novasoft', '', '', '', '', '', '', NULL),
(345, 'NSB_Soft', '', '', '', '', '', '', '', NULL),
(346, 'Oasis', '', '', '', '', '', '', '1-2014', NULL),
(347, 'Oreosoft', 'OREOSOFT S.R.L.', '', '', '', '', '', '2-2018', 4),
(348, 'Olimpos', 'Olimpo?s Software System Designer', '', '', '', '', '', '', NULL),
(349, 'OMEGA SD', 'OMEGA Software Development', '', '', '', '', '', '1-2012', NULL),
(350, 'ON SOFT', 'Camaleon Software SRL', '', '', '', '', '', '1-2014', NULL),
(351, 'OnBuilding Soft', '', '', '', '', '', '', '1-2012', NULL),
(352, 'OpenMind Soft', '', '', '', '', '', '', '1-2012', NULL),
(353, 'Orange Soft SRL', 'Orange Soft SRL', '', '', '', '', '', '2-2016', NULL),
(354, 'Oriansoft', 'oriansoft', '', '', '', '', '', '', NULL),
(355, 'ORION SOFT', 'ORION SOFTWARE SOLUTIONS', '', '', '', '', '', '1-2013', NULL),
(356, 'Osiris', '', '', '', '', '', '', '', NULL),
(357, 'Oversoft', 'oversoft desarrollando soluciones', '', '', '', '', '', '', NULL),
(358, 'Padsoft', '', '', '', '', '', '', '', NULL),
(359, 'Paradise', '', '', '', '', '', '', '2-2014', NULL),
(360, 'Pathfinder', 'Pathfinder', '', '', '', '', '', '', NULL),
(361, 'Pentamix', 'Pentamix', '', '', '', '', '', '', NULL),
(362, 'Pentasoft', 'Pentasoft SRL', '', '', '', '', '', '1-2011', NULL),
(363, 'PEOPLE XTREME SOFT-PXP S.R.L.', '', '', '', '', '', '', '1-2011', NULL),
(364, 'Phalcondev', '', '', '', '', '', '', '1-2017', NULL),
(365, 'Phoenix SRL.', 'Phoenix SRL.', '', '', '', '', '', '1-2015', NULL),
(366, 'Phpsoft', '', '', '', '', '', '', '1-2009', NULL),
(367, 'Pied S.R.L.', '', '', '', '', '', '', '2-2020', 2),
(368, 'Pirasoft', '', '', '', '', '', '', '', NULL),
(369, 'Programadores sin l?mites.Srl', '', '', '', '', '', '', '2-2012', NULL),
(370, 'Propersoft', '', '', '', '', '', '', '', NULL),
(371, 'Prosoft', '', '', '', '', '', '', '', NULL),
(372, 'QuickSoftware S.R.L.', 'QuickSoftware S.R.L.', '', '', '', '', '', '2-2019', 2),
(373, 'PUNTO CLICK SRL', '', '', '', '', '', '', '', NULL),
(374, 'Puriskiri', '', '', '', '', '', '', '2-2012', NULL),
(375, 'PYXIDIS', 'pyxidis solutions SRL', '', '', '', '', '', '', NULL),
(376, 'Qbetagroup', '', '', '', '', '', '', '', NULL),
(377, 'Quality', 'Quality', '', '', '', '', '', '1-2016', NULL),
(378, 'QueIdeas Soft', '', '', '', '', '', '', '1-2012', NULL),
(379, 'QUIRKYSOFT SRL', 'QUIRKYSOFT SRL', '', '', '', '', '', '1-2013', NULL),
(380, 'Ragosoft', 'Ragosoft', '', '', '', '', '', '', NULL),
(381, 'Ramon Soft', '', '', '', '', '', '', '1-2012', NULL),
(382, 'Reactive Solutions.SRL', 'Reactive Solutions.SRL', '', '', '', '', '', '2-2017', NULL),
(383, 'Resource Technology', '', '', '', '', '', '', '2-2010', NULL),
(384, 'Revolution Software', '', '', '', '', '', '', '', NULL),
(385, 'Ric_tis', 'Ric_tis', '', '', '', '', '', '', NULL),
(386, 'Ruasun_soft', 'Ruasun_soft', '', '', '', '', '', '', NULL),
(387, 'S-XTREMES', '', '', '', '', '', '', '2-2010', NULL),
(388, 'ScrumTroopers S.C.', 'ScrumTroopers Sociedad Colectiva', '', '', '', '', '', '1-2019', 3),
(389, 'SAADS SRL', 'SAADS SRL', '', '', '', '', '', '1-2015', NULL),
(390, 'Sac', '', '', '', '', '', '', '', NULL),
(391, 'Sadi', 'Servicios de Automatizacion y desarrollo industrial', '', '', '', '', '', '', NULL),
(392, 'Sajom Soft', '', '', '', '', '', '', '2-2010', NULL),
(393, 'SAT', 'SAT', '', '', '', '', '', '', NULL),
(394, 'SCAYNET', '', '', '', '', '', '', '1-2011', NULL),
(395, 'SDC SRL', '', '', '', '', '', '', '', NULL),
(396, 'SDSC', 'Sociedad de Desarrollo de Software de Calidad', '', '', '', '', '', '', NULL),
(397, 'Sed', '', '', '', '', '', '', '2-2009', NULL),
(398, 'SEE', '', '', '', '', '', '', '2-2010', NULL),
(399, 'SEGINFA', 'Seguridad Inform?tica ALIENS', '', '', '', '', '', '', NULL),
(400, 'Semael', '', '', '', '', '', '', '', NULL),
(401, 'SETIC', 'SETIC', '', '', '', '', '', '', NULL),
(402, 'Sewbs SRL', 'Sewbs SRL', '', '', '', '', '', '2-2014', NULL),
(403, 'SEWS', 'Software Engineering Work Shop', '', '', '', '', '', '', NULL),
(404, 'SHB', 'Software Hecho en Bolivia', '', '', '', '', '', '', NULL),
(405, 'SHIFT SRL', '', '', '', '', '', '', '', NULL),
(406, 'SHYAB', 'SHYAB', '', '', '', '', '', '1-2015', NULL),
(407, 'SIAN SRL', 'SIAN SRL', '', '', '', '', '', '', NULL),
(408, 'Sibosoft', '', '', '', '', '', '', '', NULL),
(409, 'SICC', 'SICC', '', '', '', '', '', '', NULL),
(410, 'Sicomp', 'Sicomp', '', '', '', '', '', '', NULL),
(411, 'SID SRL', 'SID SRL', '', '', '', '', '', '', NULL),
(412, 'SIDA', 'SIDA', '', '', '', '', '', '', NULL),
(413, 'SIDESOFT', '', '', '', '', '', '', '1-2009', NULL),
(414, 'Sigma', '', '', '', '', '', '', '1-2014', NULL),
(415, 'SimCom', 'SimCom', '', '', '', '', '', '', NULL),
(416, 'Simplicity', 'Simplicity', '', '', '', '', '', '', NULL),
(417, 'Simus', '', '', '', '', '', '', '', NULL),
(418, 'SING', '', '', '', '', '', '', '', NULL),
(419, 'SINGECORP', 'Sistemas Informaticos de Gestion Corporativa', '', '', '', '', '', '1-2010', NULL),
(420, 'SISCO', '', '', '', '', '', '', '', NULL),
(421, 'SISNET', 'Sistemas Inform?ticos Seguros en Internet,', '', '', '', '', '', '', NULL),
(422, 'Sispreco SRL', 'Sispreco SRL', '', '', '', '', '', '', NULL),
(423, 'SISU', 'Sistemas de SOftware Unidos', '', '', '', '', '', '1-2013', NULL),
(424, 'Smart Solution', 'Smart Solution S.R.L.', '', '', '', '', '', '2-2019', 4),
(425, 'SITEC', 'SIstemas de Informacion Tecnologica', '', '', '', '', '', '1-2010', NULL),
(426, 'SIWEB', '', '', '', '', '', '', '1-2011', NULL),
(427, 'Sky Brians', 'Sky Brians SRL', '', '', '', '', '', '1-2018', NULL),
(428, 'SKYNET', 'SKYNET', '', '', '', '', '', '', NULL),
(429, 'SKYSOFT', 'SKYSOFT SRL', '', '', '', '', '', '1-2011', NULL),
(430, 'SLOW CODE', 'SLOW CODE SRL', '', '', '', '', '', '1-2015', NULL),
(431, 'Smartsoft', '', '', '', '', '', '', '', NULL),
(432, 'SnoopySoft', 'SnoopySoft', '', '', '', '', '', '', NULL),
(433, 'SODES SRL', 'Software Development Enterprise SRL', '', '', '', '', '', '', NULL),
(434, 'SOFT_LAB S.R.L.', '', '', '', '', '', '', '2-2019', 2),
(435, 'SODESI SRL', 'SODESI SRL', '', '', '', '', '', '', NULL),
(436, 'Soft Llajta', '', '', '', '', '', '', '2-2010', NULL),
(437, 'SOFT MAGIC TOUCH', 'SOFTWARE MAGIC TOUCH', '', '', '', '', '', '1-2013', NULL),
(438, 'Soft Master', 'Soft Master', '', '', '', '', '', '', NULL),
(439, 'SOFT NET Ltda.', 'Empresa de desarrollo de software', '', '', '', '', '', '', NULL),
(440, 'Softcreme', 'Softcreme SRL', '', '', '', '', '', '1-2019', 3),
(441, 'Soft Source', '', '', '', '', '', '', '2-2011', NULL),
(442, 'SOFT_SOURCE', '', '', '', '', '', '', '2-2011', NULL),
(443, 'SoftART', '', '', '', '', '', '', '', NULL),
(444, 'SoftLab S.R.L.', 'SoftLab S.R.L.', '', '', '', '', '', '2-2019', 5),
(445, 'SoftBar', '', '', '', '', '', '', '1-2010', NULL),
(446, 'Softbol', 'Softbol', '', '', '', '', '', '', NULL),
(447, 'SoftBox Soluciones', '', '', '', '', '', '', '', NULL),
(448, 'SoftSolutions', 'SoftSolutions SRL', '', '', '', '', '', '1-2019', 2),
(449, 'Software Development Innovation SRL', 'SDI SRL', '', '', '', '', '', '1-2020', 2),
(450, 'SOFTDEITEL', '', '', '', '', '', '', '1-2012', NULL),
(451, 'Softelligent', 'SOFTWARE INTELIGENTE', '', '', '', '', '', '2-2012', NULL),
(452, 'SOFTG', '', '', '', '', '', '', '2-2010', NULL),
(453, 'SOFTIS', 'Software TIS', '', '', '', '', '', '2-2020', 5),
(454, 'Solidev', 'Solidev S.R.L.', '', '', '', '', '', '1-2019', NULL),
(455, 'SoftMakers', '', '', '', '', '', '', '1-2012', NULL),
(456, 'SOLVWARE', '', '', '', '', '', '', '1-2019', 5),
(457, 'SOTEA SRL', 'SOTEA SRL', '', '', '', '', '', '1-2020', 2),
(458, 'Softop', 'Softop', '', '', '', '', '', '', NULL),
(459, 'Softquina', '', '', '', '', '', '', '1-2012', NULL),
(460, ' SoftVision', 'The Software Vision Company', '', '', '', '', '', '2-2020', 3),
(461, 'Softwaredesigners', 'software designers SRL', '', '', '', '', '', '', NULL),
(462, 'SoftWib', '', '', '', '', '', '', '', NULL),
(463, 'StardustSoft', 'StardustSoft SRL', '', '', '', '', '', '1-2019', 2),
(464, 'Soinco', '', '', '', '', '', '', '', NULL),
(465, 'Solid Developers SRL', '', '', '', '', '', '', '2-2016', NULL),
(466, 'SOLUSOFT', '', '', '', '', '', '', '1-2009', NULL),
(467, 'Source Code', 'Source Code', '', '', '', '', '', '', NULL),
(468, 'SPG srl', 'Software Para Ganadores', '', '', '', '', '', '', NULL),
(469, 'SPYD Software', 'Sociedad de Planificaci?n Y Desarrollo de Software', '', '', '', '', '', '', NULL),
(470, 'Sss', '', '', '', '', '', '', '', NULL),
(471, 'Sublime SRL', 'Sublime Projects SRL', '', '', '', '', '', '2-2019', 3),
(472, 'STARTSOFT', 'Empresa de Desarrollo Informatico STARTSOFT', '', '', '', '', '', '1-2010', NULL),
(473, 'STARTTIS', '', '', '', '', '', '', '2-2010', NULL),
(474, 'Sting Soft SRL', '', '', '', '', '', '', '2-2016', NULL),
(475, 'Storm', 'StormSoft SRL', '', '', '', '', '', '1-2016', NULL),
(476, 'Stragos', 'Stragos soft srl', '', '', '', '', '', '', NULL),
(477, 'STS', '', '', '', '', '', '', '1-2017', NULL),
(478, 'StudSoft', 'StudSoft SRL', '', '', '', '', '', '1-2016', NULL),
(479, 'Summit', 'Summit SRL', '', '', '', '', '', '1-2011', NULL),
(480, 'Swlink', 'Swlink', '', '', '', '', '', '', NULL),
(481, 'Symphony Soft', 'Symphony Software', '', '', '', '', '', '2-2013', NULL),
(482, 'Synapsis', 'Synapsis', '', '', '', '', '', '', NULL),
(483, 'Synchro SRL', 'Synchro SRL', '', '', '', '', '', '1-2017', NULL),
(484, 'Team Soft', 'Team Soft S.R.L.', '', '', '', '', '', '2-2019', 4),
(485, 'Sysdecom', '', '', '', '', '', '', '', NULL),
(486, 'SystemBolDevSoft Srl', 'SystemBolDevSoft Srl', '', '', '', '', '', '1-2013', NULL),
(487, 'SystemWorks', 'SystemWorks SRL', '', '', '', '', '', '', NULL),
(488, 'T-SYS', '', '', '', '', '', '', '2-2010', NULL),
(489, 'The Code Tellers', 'The Code Tellers SRL', '', '', '', '', '', '1-2019', 2),
(490, 'TALOS Dev', 'Talos Development S.R.L.', '', '', '', '', '', '2-2020', 4),
(491, 'TBS', '', '', '', '', '', '', '1-2009', NULL),
(492, 'TDsoft', 'TDsoft', '', '', '', '', '', '', NULL),
(493, 'TEC', 'TEC', '', '', '', '', '', '', NULL),
(494, 'TECASOFT', '', '', '', '', '', '', '2-2010', NULL),
(495, 'TISOFT', '', '', '', '', '', '', '2-2018', 5),
(496, 'TIZEN', '', '', '', '', '', '', '1-2019', 5),
(497, 'Tecnology', 'Tecnology soft ltda', '', '', '', '', '', '', NULL),
(498, 'TeleTran', 'TeleTran', '', '', '', '', '', '', NULL),
(499, 'TeraSoft', '', '', '', '', '', '', '1-2021', 4),
(500, 'ThinkDSoft SRL', 'ThinkDSoft SRL', '', '', '', '', '', '2-2014', NULL),
(501, 'THREEFORCE DEVELOPMENT', '', '', '', '', '', '', '1-2011', NULL),
(502, 'ThunderSoft', 'Thunder Software S.R.L.', '', '', '', '', '', '2-2020', 4),
(503, 'TI SOLUTUONS', '', '', '', '', '', '', '1-2012', NULL),
(504, 'TIM.SRL', '', '', '', '', '', '', '', NULL),
(505, 'TopCoDev.SRL', 'TopCoDev.SRL', '', '', '', '', '', '2-2017', NULL),
(506, 'TopSoft', 'Top Software SRL', '', '', '', '', '', '2-2015', NULL),
(507, 'Unlocking Software', 'Unlocking SRL', '', '', '', '', '', '1-2020', 3),
(508, 'Totality', 'Totality', '', '', '', '', '', '', NULL),
(509, 'Trojan Soft', 'Trojan Soft', '', '', '', '', '', '2-2014', NULL),
(510, 'Tunari.com', 'Tunari.com', '', '', '', '', '', '', NULL),
(511, 'Valle Soft', 'Valle Soft  S.R.L.', '', '', '', '', '', '1-2020', 4),
(512, 'TuringSoft.S.R.L', '', '', '', '', '', '', '2-2012', NULL),
(513, 'ULTIMATE', 'ULTIMATE', '', '', '', '', '', '', NULL),
(514, 'Umbrella', 'Umbrella CORP SRL', '', '', '', '', '', '', NULL),
(515, 'Unisoft', '', '', '', '', '', '', '2-2014', NULL),
(516, 'Urban Soft SRL', '', '', '', '', '', '', '2-2016', NULL),
(517, 'Usoft', '', '', '', '', '', '', '', NULL),
(518, 'V@gos soft SRL', 'V@gos soft SRL', '', '', '', '', '', '', NULL),
(519, 'venturesome', 'venturesome', '', '', '', '', '', '', NULL),
(520, 'VenSoft SRL', 'VenSoft SRL', '', '', '', '', '', '1-2021', 2),
(521, 'Viba', 'Viba', '', '', '', '', '', '', NULL),
(522, 'VIDA SRL', 'VIDA SRL', '', '', '', '', '', '2-2014', NULL),
(523, 'Virtu@l soft', 'Virtu@l soft', '', '', '', '', '', '', NULL),
(524, 'WieselSoft SRL', 'WieselSoft SRL', '', '', '', '', '', '1-2020', 2),
(525, 'Winesoft', 'Winesoft', '', '', '', '', '', '2-2019', 5),
(526, 'WinnSoft', 'WinnSoft SRL', '', '', '', '', '', '1-2019', 2),
(527, 'Waarp', '', '', '', '', '', '', '', NULL),
(528, 'Wayra', '', '', '', '', '', '', '', NULL),
(529, 'WebJets', 'WebJets Soluciones informaticas', '', '', '', '', '', '2-2013', NULL),
(530, 'WEBSOLUTIONS', 'WEBSOLUTIONS SRL', '', '', '', '', '', '1-2011', NULL),
(531, 'WEsoft', 'WEsoft', '', '', '', '', '', '', NULL),
(532, 'Whitehatsoft', '', '', '', '', '', '', '1-2014', NULL),
(533, 'WHS SRL', 'Work at Home Soft SRL', '', '', '', '', '', '2-2014', NULL),
(534, 'Winsmart Soft.SRL', '', '', '', '', '', '', '2-2013', NULL),
(535, 'WOLF', '', '', '', '', '', '', '2-2010', NULL),
(536, 'X-SOFT', '', '', '', '', '', '', '2-2011', NULL),
(537, 'XINTHEWORLD', '', '', '', '', '', '', '1-2011', NULL),
(538, 'YELADEVEL', '', '', '', '', '', '', '1-2019', 5),
(539, 'Yenci Soft', 'Yenci Soft S.R.L.', '', '', '', '', '', '2-2019', 4),
(540, 'XPARSA', 'EXPANDIENDO SOFTWARE', '', '', '', '', '', '2-2010', NULL),
(541, 'XPDEV', '', '', '', '', '', '', '', NULL),
(542, 'Xpro', '', '', '', '', '', '', '2-2009', NULL),
(543, 'Xsoft', '', '', '', '', '', '', '2-2011', NULL),
(544, 'Xtreme SB SRL', 'Xtreme StormBrain SRL', '', '', '', '', '', '', NULL),
(545, 'XtremeSoft', '', '', '', '', '', '', '1-2021', 4),
(546, 'YAC', 'Yac ingenieria de calidad', '', '', '', '', '', '', NULL),
(547, 'Yantana Soft', 'Yantana Soft', '', '', '', '', '', '2-2014', NULL),
(548, 'YUME', '', '', '', '', '', '', '2-2012', 3),
(549, 'ZEIKO', 'ZEIKO SRL', '', '', '', '', '', '1-2014', NULL),
(550, 'Zeros & Ones SRL', 'Zeros & Ones SRL', '', '', '', '', '', '', NULL),
(551, 'Zeus', 'ZEUS SRL', '', '', '', '', '', '', NULL),
(552, 'Zion', 'Zion', '', '', '', '', '', '1-2013', NULL),
(553, 'SICESOFT SRL.', 'SOLUTIONS ICE SOFTWARE SRL', '', '', '', '', '', '1-2021', 3),
(554, 'PF', 'Programando el Futuro', '', '', '', '', '', '1-2021', 3),
(555, 'Notepad', 'Notepad Coders S.R.L.', '', '', '', '', '', '1-2021', 3),
(556, 'LevitaSoft S.R.L.', 'Levita Software Development Technology Company S.R.L.', '', '', '', '', '', '1-2021', 3),
(557, 'DevSociety', 'Developer\'s Society S.R.L', '', '', '', '', '', '1-2021', 3),
(558, 'RVGC Soft', 'Roman Vargas Gonzales Chipana Soft', '', '', '', '', '', '1-2021', 5),
(559, 'THNS SRL', 'Technohookup Newsystems SRL', '', '', '', '', '', '1-2021', 5),
(560, 'TH', 'Transhumant', '', '', '', '', '', '1-2021', 5),
(561, 'TS SRL', 'Team Soft SRL', '', '', '', '', '', '1-2021', 5),
(562, 'TecnoAvance', 'TecnoAvance', '', '', '', '', '', '1-2021', 5),
(563, 'SER SRL', 'Software Engineering Revolution SRL', '', '', '', '', '', '1-2021', 5),
(564, 'lion', 'liontech', '', 'demby', 'alejandrorai_ch@outlook.com', '4573815', 'prueba', '', 2);

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

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `mensaje_notificacion`, `recibe_id`, `envia_id`, `created_at`, `updated_at`) VALUES
(1, 'buenas buenas', 0, 2, '2022-01-06 20:22:53', '2022-01-06 20:22:53'),
(2, '123456', 0, 2, '2022-01-07 20:49:10', '2022-01-07 20:49:10'),
(3, 'hi', 0, 2, '2022-01-07 23:17:40', '2022-01-07 23:17:40');

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

--
-- Volcado de datos para la tabla `notificaciones_de_usuarios`
--

INSERT INTO `notificaciones_de_usuarios` (`id`, `id_notificacion`, `id_recibido`, `leido`) VALUES
(1, 1, 6, 0),
(2, 1, 7, 0),
(3, 1, 8, 0),
(4, 1, 9, 1),
(5, 1, 10, 0),
(6, 2, 6, 0),
(7, 2, 7, 0),
(8, 2, 8, 0),
(9, 2, 9, 1),
(10, 2, 10, 0),
(11, 3, 6, 0),
(12, 3, 7, 0),
(13, 3, 8, 0),
(14, 3, 9, 1),
(15, 3, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado_del_proyecto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entregable` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_de_entrega` date DEFAULT NULL,
  `porcentaje` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `costo` decimal(22,2) DEFAULT 0.00,
  `id_empresa` int(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_docente` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `pass`, `nombre`, `tipo`, `id_docente`) VALUES
(1, 'administradorTIS@gmail.com', 'Admin%22', 'LEONEL GUTIERREZ VILLARROEL', '1', 0),
(2, 'corinaflores.v@fcyt.umss.edu.bo', 'Floresco%21', 'Corina Justina Flores Villarroel', '2', NULL),
(3, 'leticiablanco.c@fcyt.umss.edu.bo', 'Leticia*3', 'Maria Leticia Blanco Coca', '2', NULL),
(4, 'd.escalera@fcyt.umss.edu.bo', 'David05*', 'David Escalera Fernandez', '2', NULL),
(5, 'akirebilbao@fcyt.umss.edu.bo', 'Patybilbao#', 'Erika Patricia Rodriguez Bilbao', '2', NULL),
(6, '201606617@est.umss.edu', '201606617', 'CALCINA BERNAL HANYINSON ALEX', '3', 2),
(7, '201401040@est.umss.edu', '201401040', 'CAMACHO MENDIETA FRANCISCO ANTONIO', '3', 2),
(8, '201400887@est.umss.edu', '201400887', 'CµRDENAS LàPEZ CARLOS ALBERTO', '3', 2),
(9, '201604480@est.umss.edu', '201604480', 'CARRE¥O HUAIPARA ALEJANDRO RAI', '3', 2),
(10, '201300024@est.umss.edu', '201300024', 'CASTELLON GALLARDO DEMBY', '3', 2),
(11, '201705961@est.umss.edu', '201705961', 'CHOQUE ESCOBAR JOSUE DAVID', '3', 2),
(12, '200507244@est.umss.edu', '200507244', 'CHOQUE ZURITA JESUS GONZALO', '3', 2),
(13, '201604426@est.umss.edu', '201604426', 'CONDORI COLQUE JESUS JHONATAN', '3', 2),
(14, '201801257@est.umss.edu', '201801257', 'CRESPO BAZOALTO ADRIAN RICARDO', '3', 2),
(15, '201803516@est.umss.edu', '201803516', 'DELGADO LOPEZ FRANKLIN', '3', 2),
(16, '201604495@est.umss.edu', '201604495', 'ESCOBAR ROCHA LUIS ESTEBAN', '3', 2),
(17, '201408617@est.umss.edu', '201408617', 'FLORES ASERICO NOEMI', '3', 2),
(18, '201407488@est.umss.edu', '201407488', 'GALINDO VARGAS FLABIO CESAR', '3', 2),
(19, '201800008@est.umss.edu', '201800008', 'IPORRE MEDRANO ANDRES ELOY', '3', 2),
(20, '201703357@est.umss.edu', '201703357', 'JAILLITA PADILLA MARIO BRAYAN', '3', 2),
(21, '201701812@est.umss.edu', '201701812', 'LAZARTE JIMENEZ ALEX FABRICIO', '3', 2),
(22, '201612367@est.umss.edu', '201612367', 'MAMANI NAVARRO JAIME', '3', 2),
(23, '201800180@est.umss.edu', '201800180', 'MERCADO PEREZ ALEJANDRO', '3', 2),
(24, '201800181@est.umss.edu', '201800181', 'NOGALES VILLARROEL RAFAEL', '3', 2),
(25, '201308176@est.umss.edu', '201308176', '¥UCRA VICENTE JHILMER', '3', 2),
(26, '201606355@est.umss.edu', '201606355', 'ORTIZ MERIDA MIGUEL ANGEL', '3', 2),
(27, '201201047@est.umss.edu', '201201047', 'PACO GAMARRA KAREN PATRICIA', '3', 2),
(28, '201400060@est.umss.edu', '201400060', 'PARDO BARRIENTOS CESAR JHOVANNY', '3', 2),
(29, '201702061@est.umss.edu', '201702061', 'PARICAGUA VARGAS ARIEL FERNANDO', '3', 2),
(30, '201507144@est.umss.edu', '201507144', 'REQUE ZEBALLOS JENNY', '3', 2),
(31, '201604549@est.umss.edu', '201604549', 'ROCHA HUACOTA REMY JOSUE', '3', 2),
(32, '201201054@est.umss.edu', '201201054', 'ROCHA VIDAURRE JORGE', '3', 2),
(33, '201309803@est.umss.edu', '201309803', 'ROMAN MARCA ANGEL ANTONIO', '3', 2),
(34, '201709689@est.umss.edu', '201709689', 'TEJERINA CALIZAYA MARIO FABRICIO', '3', 2),
(35, '201008141@est.umss.edu', '201008141', 'TORRES BALDERRAMA HENRRY', '3', 2),
(36, '201800190@est.umss.edu', '201800190', 'VARGAS CRUZ JOSE MANUEL', '3', 2),
(37, '201608168@est.umss.edu', '201608168', 'VARGAS HUANACO RINA DENISSE', '3', 2),
(38, '201907693@est.umss.edu', '201907693', 'VILLCA CORAITE LIMBERG', '3', 2),
(39, '201501023@est.umss.edu', '201501023', 'GUTIERREZ SANCHEZ GABRIELA', '3', 3),
(40, '201501024@est.umss.edu', '201501024', 'MORALES POZO TERESA', '3', 3),
(41, '201501025@est.umss.edu', '201501025', 'MU¥OZ FLORES PABLO', '3', 3),
(42, '201501026@est.umss.edu', '201501026', 'FUENTES LOPEZ MAEVA', '3', 3),
(43, '201501027@est.umss.edu', '201501027', 'MAIRANA SAN JULIA', '3', 3),
(44, '201501028@est.umss.edu', '201501028', 'MELGAREJO LUZ PAULA', '3', 3);

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
(1, 6, 564),
(2, 7, 564),
(3, 8, 564),
(4, 9, 564),
(5, 10, 564);

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
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `documentos_empresa`
--
ALTER TABLE `documentos_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=565;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `notificaciones_de_usuarios`
--
ALTER TABLE `notificaciones_de_usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plantrabajos`
--
ALTER TABLE `plantrabajos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `usuario_empresa`
--
ALTER TABLE `usuario_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
