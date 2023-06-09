-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2023 a las 05:50:03
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_automotriz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `direccion` varchar(256) NOT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `dui` varchar(9) DEFAULT NULL,
  `n_licencia` varchar(15) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nit` int(15) DEFAULT NULL,
  `reg_iva` int(15) DEFAULT NULL,
  `genero` varchar(2) NOT NULL,
  `tel_fijo` varchar(10) DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `giro_fiscal` varchar(256) DEFAULT NULL,
  `cumpleaños` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `name`, `direccion`, `telefono`, `dui`, `n_licencia`, `active`, `correo`, `nit`, `reg_iva`, `genero`, `tel_fijo`, `edad`, `giro_fiscal`, `cumpleaños`) VALUES
(1, '', 'colsasd sadoas kjaskld lorem epsilon', '12345678', '012345678', '', 0, 'asdasd@gmail.com', 2147483647, 135156542, 'M', '87456321', 31, 'prueba de si funciona', '1991-09-18'),
(2, 'sergio javier hernandez moreno', 'colsasd sadoas kjaskld lorem epsilon', '12345678', '012345678', '521658161321321', 0, 'asdasd@gmail.com', 2147483647, 135156542, 'M', '87456321', 31, 'prueba de si funciona', '1991-09-18'),
(3, 'sergio javier hernandez morenoa', 'colsasd sadoas kjaskld lorem epsilon', '12345678', '012345678', '521658161321321', 0, 'asdasd@gmail.com', 2147483647, 135156542, 'M', '87456321', 31, 'prueba de si funcionaa', '1991-09-18'),
(4, 'sergio', 'asdasdasd', '156456', '231321321', '213451321321321', 0, 'asd@12.com', 2147483647, 2147483647, 'M', '4165465', 10, 'asdadadasd', '2023-05-10'),
(5, 'sergio sa', 'asdasdasd', '156456', '231321321', '213451321321321', 0, 'asd@12.com', 2147483647, 0, 'M', '4165465', 10, 'NULL', '2023-05-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja_recepcion`
--

CREATE TABLE `hoja_recepcion` (
  `id` int(11) NOT NULL,
  `asesor` varchar(256) NOT NULL,
  `date_in` timestamp NULL DEFAULT NULL,
  `date_out` datetime DEFAULT NULL,
  `date_pro` datetime DEFAULT NULL,
  `manguera_cricos` varchar(75) DEFAULT NULL,
  `antena` varchar(75) DEFAULT NULL,
  `parlantes` varchar(75) DEFAULT NULL,
  `llanta_repuesto` varchar(75) DEFAULT NULL,
  `lanza_agua` varchar(75) DEFAULT NULL,
  `molduras` varchar(75) DEFAULT NULL,
  `encendedor` varchar(75) DEFAULT NULL,
  `seguro_llanta` varchar(75) DEFAULT NULL,
  `limpia_parabrisas` varchar(75) DEFAULT NULL,
  `copas` varchar(75) DEFAULT NULL,
  `cenicero` varchar(75) DEFAULT NULL,
  `llave_cruz` varchar(75) DEFAULT NULL,
  `bateria` varchar(75) DEFAULT NULL,
  `loderas` varchar(75) DEFAULT NULL,
  `regilla_ac` varchar(75) DEFAULT NULL,
  `herramientas` varchar(75) DEFAULT NULL,
  `hules_regulad_capo` varchar(75) DEFAULT NULL,
  `placas` varchar(75) DEFAULT NULL,
  `tapasol` varchar(75) DEFAULT NULL,
  `gata` varchar(75) DEFAULT NULL,
  `protec_hule_capo` varchar(75) DEFAULT NULL,
  `tapon_gas` varchar(75) DEFAULT NULL,
  `alfombras` varchar(75) DEFAULT NULL,
  `triangu_seg` varchar(75) DEFAULT NULL,
  `grapa_barilla_capo` varchar(75) DEFAULT NULL,
  `espejos` varchar(75) DEFAULT NULL,
  `llaves` varchar(75) DEFAULT NULL,
  `extintor` varchar(75) DEFAULT NULL,
  `tapadera_tapones` varchar(75) DEFAULT NULL,
  `tapiceria` varchar(75) DEFAULT NULL,
  `llavero` varchar(75) DEFAULT NULL,
  `lampara` varchar(75) DEFAULT NULL,
  `baul` varchar(75) DEFAULT NULL,
  `lamp_halogeno` varchar(75) DEFAULT NULL,
  `estado_vidrios` varchar(75) DEFAULT NULL,
  `control_alarma` varchar(75) DEFAULT NULL,
  `hule_soporte_baul` varchar(75) DEFAULT NULL,
  `emblemas` varchar(75) DEFAULT NULL,
  `radio` varchar(75) DEFAULT NULL,
  `tarjeta` varchar(75) DEFAULT NULL,
  `protec_baul` varchar(75) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `id_vehiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas_vehiculos`
--

CREATE TABLE `marcas_vehiculos` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas_vehiculos`
--

INSERT INTO `marcas_vehiculos` (`id_marca`, `marca`) VALUES
(1, 'ABARTH'),
(2, 'ALFA ROMEO'),
(3, 'ARO'),
(4, 'ASIA'),
(5, 'ASIA MOTORS'),
(6, 'ASTON MARTIN'),
(7, 'AUDI'),
(8, 'AUSTIN'),
(9, 'AUVERLAND'),
(10, 'BENTLEY'),
(11, 'BERTONE'),
(12, 'BMW'),
(13, 'CADILLAC'),
(14, 'CHEVROLET'),
(15, 'CHRYSLER'),
(16, 'CITROEN'),
(17, 'CORVETTE'),
(18, 'DACIA'),
(19, 'DAEWOO'),
(20, 'DAF'),
(21, 'DAIHATSU'),
(22, 'DAIMLER'),
(23, 'DODGE'),
(24, 'FERRARI'),
(25, 'FIAT'),
(26, 'FORD'),
(27, 'GALLOPER'),
(28, 'GMC'),
(29, 'HONDA'),
(30, 'HUMMER'),
(31, 'HYUNDAI'),
(32, 'INFINITI'),
(33, 'INNOCENTI'),
(34, 'ISUZU'),
(35, 'IVECO'),
(36, 'IVECO-PEGASO'),
(37, 'JAGUAR'),
(38, 'JEEP'),
(39, 'KIA'),
(40, 'LADA'),
(41, 'LAMBORGHINI'),
(42, 'LANCIA'),
(43, 'LAND-ROVER'),
(44, 'LDV'),
(45, 'LEXUS'),
(46, 'LOTUS'),
(47, 'MAHINDRA'),
(48, 'MASERATI'),
(49, 'MAYBACH'),
(50, 'MAZDA'),
(51, 'MERCEDES-BENZ'),
(52, 'MG'),
(53, 'MINI'),
(54, 'MITSUBISHI'),
(55, 'MORGAN'),
(56, 'NISSAN'),
(57, 'OPEL'),
(58, 'PEUGEOT'),
(59, 'PONTIAC'),
(60, 'PORSCHE'),
(61, 'RENAULT'),
(62, 'ROLLS-ROYCE'),
(63, 'ROVER'),
(64, 'SAAB'),
(65, 'SANTANA'),
(66, 'SEAT'),
(67, 'SKODA'),
(68, 'SMART'),
(69, 'SSANGYONG'),
(70, 'SUBARU'),
(71, 'SUZUKI'),
(72, 'TALBOT'),
(73, 'TATA'),
(74, 'TOYOTA'),
(75, 'UMM'),
(76, 'VAZ'),
(77, 'VOLKSWAGEN'),
(78, 'VOLVO'),
(79, 'WARTBURG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo_vehiculo`
--

CREATE TABLE `modelo_vehiculo` (
  `id_modelo` int(3) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `modelo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modelo_vehiculo`
--

INSERT INTO `modelo_vehiculo` (`id_modelo`, `id_marca`, `modelo`) VALUES
(1, 1, '500'),
(2, 1, 'GRANDE PUNTO'),
(3, 1, 'PUNTO EVO'),
(4, 1, '500C'),
(5, 1, '695'),
(6, 1, 'PUNTO'),
(7, 2, '155'),
(8, 2, '156'),
(9, 2, '159'),
(10, 2, '164'),
(11, 2, '145'),
(12, 2, '147'),
(13, 2, '146'),
(14, 2, 'GTV'),
(15, 2, 'SPIDER'),
(16, 2, '166'),
(17, 2, 'GT'),
(18, 2, 'CROSSWAGON'),
(19, 2, 'BRERA'),
(20, 2, '90'),
(21, 2, '75'),
(22, 2, '33'),
(23, 2, 'GIULIETTA'),
(24, 2, 'SPRINT'),
(25, 2, 'MITO'),
(26, 3, 'EXPANDER'),
(27, 3, '10'),
(28, 3, '24'),
(29, 3, 'DACIA'),
(30, 4, 'ROCSTA'),
(31, 5, 'ROCSTA'),
(32, 6, 'DB7'),
(33, 6, 'V8'),
(34, 6, 'DB9'),
(35, 6, 'VANQUISH'),
(36, 6, 'V8 VANTAGE'),
(37, 6, 'VANTAGE'),
(38, 6, 'DBS'),
(39, 6, 'VOLANTE'),
(40, 6, 'VIRAGE'),
(41, 6, 'VANTAGE V8'),
(42, 6, 'VANTAGE V12'),
(43, 6, 'RAPIDE'),
(44, 6, 'CYGNET'),
(45, 7, '80'),
(46, 7, 'A4'),
(47, 7, 'A6'),
(48, 7, 'S6'),
(49, 7, 'COUPE'),
(50, 7, 'S2'),
(51, 7, 'RS2'),
(52, 7, 'A8'),
(53, 7, 'CABRIOLET'),
(54, 7, 'S8'),
(55, 7, 'A3'),
(56, 7, 'S4'),
(57, 7, 'TT'),
(58, 7, 'S3'),
(59, 7, 'ALLROAD QUATTRO'),
(60, 7, 'RS4'),
(61, 7, 'A2'),
(62, 7, 'RS6'),
(63, 7, 'Q7'),
(64, 7, 'R8'),
(65, 7, 'A5'),
(66, 7, 'S5'),
(67, 7, 'V8'),
(68, 7, '200'),
(69, 7, '100'),
(70, 7, '90'),
(71, 7, 'TTS'),
(72, 7, 'Q5'),
(73, 7, 'A4 ALLROAD QUATTRO'),
(74, 7, 'TT RS'),
(75, 7, 'RS5'),
(76, 7, 'A1'),
(77, 7, 'A7'),
(78, 7, 'RS3'),
(79, 7, 'Q3'),
(80, 7, 'A6 ALLROAD QUATTRO'),
(81, 7, 'S7'),
(82, 7, 'SQ5'),
(83, 8, 'MINI'),
(84, 8, 'MONTEGO'),
(85, 8, 'MAESTRO'),
(86, 8, 'METRO'),
(87, 8, 'MINI MOKE'),
(88, 9, 'DIESEL'),
(89, 10, 'BROOKLANDS'),
(90, 10, 'TURBO'),
(91, 10, 'CONTINENTAL'),
(92, 10, 'AZURE'),
(93, 10, 'ARNAGE'),
(94, 10, 'CONTINENTAL GT'),
(95, 10, 'CONTINENTAL FLYING SPUR'),
(96, 10, 'TURBO R'),
(97, 10, 'MULSANNE'),
(98, 10, 'EIGHT'),
(99, 10, 'CONTINENTAL GTC'),
(100, 10, 'CONTINENTAL SUPERSPORTS'),
(101, 11, 'FREECLIMBER DIESEL'),
(102, 12, 'SERIE 3'),
(103, 12, 'SERIE 5'),
(104, 12, 'COMPACT'),
(105, 12, 'SERIE 7'),
(106, 12, 'SERIE 8'),
(107, 12, 'Z3'),
(108, 12, 'Z4'),
(109, 12, 'Z8'),
(110, 12, 'X5'),
(111, 12, 'SERIE 6'),
(112, 12, 'X3'),
(113, 12, 'SERIE 1'),
(114, 12, 'Z1'),
(115, 12, 'X6'),
(116, 12, 'X1'),
(117, 13, 'SEVILLE'),
(118, 13, 'STS'),
(119, 13, 'EL DORADO'),
(120, 13, 'CTS'),
(121, 13, 'XLR'),
(122, 13, 'SRX'),
(123, 13, 'ESCALADE'),
(124, 13, 'BLS'),
(125, 14, 'CORVETTE'),
(126, 14, 'BLAZER'),
(127, 14, 'ASTRO'),
(128, 14, 'NUBIRA'),
(129, 14, 'EVANDA'),
(130, 14, 'TRANS SPORT'),
(131, 14, 'CAMARO'),
(132, 14, 'MATIZ'),
(133, 14, 'ALERO'),
(134, 14, 'TAHOE'),
(135, 14, 'TACUMA'),
(136, 14, 'TRAILBLAZER'),
(137, 14, 'KALOS'),
(138, 14, 'AVEO'),
(139, 14, 'LACETTI'),
(140, 14, 'EPICA'),
(141, 14, 'CAPTIVA'),
(142, 14, 'HHR'),
(143, 14, 'CRUZE'),
(144, 14, 'SPARK'),
(145, 14, 'ORLANDO'),
(146, 14, 'VOLT'),
(147, 14, 'MALIBU'),
(148, 15, 'VISION'),
(149, 15, '300M'),
(150, 15, 'GRAND VOYAGER'),
(151, 15, 'VIPER'),
(152, 15, 'NEON'),
(153, 15, 'VOYAGER'),
(154, 15, 'STRATUS'),
(155, 15, 'SEBRING'),
(156, 15, 'SEBRING 200C'),
(157, 15, 'NEW YORKER'),
(158, 15, 'PT CRUISER'),
(159, 15, 'CROSSFIRE'),
(160, 15, '300C'),
(161, 15, 'LE BARON'),
(162, 15, 'SARATOGA'),
(163, 16, 'XANTIA'),
(164, 16, 'XM'),
(165, 16, 'AX'),
(166, 16, 'ZX'),
(167, 16, 'EVASION'),
(168, 16, 'C8'),
(169, 16, 'SAXO'),
(170, 16, 'C2'),
(171, 16, 'XSARA'),
(172, 16, 'C4'),
(173, 16, 'XSARA PICASSO'),
(174, 16, 'C5'),
(175, 16, 'C3'),
(176, 16, 'C3 PLURIEL'),
(177, 16, 'C1'),
(178, 16, 'C6'),
(179, 16, 'GRAND C4 PICASSO'),
(180, 16, 'C4 PICASSO'),
(181, 16, 'CCROSSER'),
(182, 16, 'C15'),
(183, 16, 'JUMPER'),
(184, 16, 'JUMPY'),
(185, 16, 'BERLINGO'),
(186, 16, 'BX'),
(187, 16, 'C25'),
(188, 16, 'CX'),
(189, 16, 'GSA'),
(190, 16, 'VISA'),
(191, 16, 'LNA'),
(192, 16, '2CV'),
(193, 16, 'NEMO'),
(194, 16, 'C4 SEDAN'),
(195, 16, 'BERLINGO FIRST'),
(196, 16, 'C3 PICASSO'),
(197, 16, 'DS3'),
(198, 16, 'CZERO'),
(199, 16, 'DS4'),
(200, 16, 'DS5'),
(201, 16, 'C4 AIRCROSS'),
(202, 16, 'CELYSEE'),
(203, 17, 'CORVETTE'),
(204, 18, 'CONTAC'),
(205, 18, 'LOGAN'),
(206, 18, 'SANDERO'),
(207, 18, 'DUSTER'),
(208, 18, 'LODGY'),
(209, 19, 'NEXIA'),
(210, 19, 'ARANOS'),
(211, 19, 'LANOS'),
(212, 19, 'NUBIRA'),
(213, 19, 'COMPACT'),
(214, 19, 'NUBIRA COMPACT'),
(215, 19, 'LEGANZA'),
(216, 19, 'EVANDA'),
(217, 19, 'MATIZ'),
(218, 19, 'TACUMA'),
(219, 19, 'KALOS'),
(220, 19, 'LACETTI'),
(221, 21, 'APPLAUSE'),
(222, 21, 'CHARADE'),
(223, 21, 'ROCKY'),
(224, 21, 'FEROZA'),
(225, 21, 'TERIOS'),
(226, 21, 'SIRION'),
(227, 22, 'SERIE XJ'),
(228, 22, 'XJ'),
(229, 22, 'DOUBLE SIX'),
(230, 22, 'SIX'),
(231, 22, 'SERIES III'),
(232, 23, 'VIPER'),
(233, 23, 'CALIBER'),
(234, 23, 'NITRO'),
(235, 23, 'AVENGER'),
(236, 23, 'JOURNEY'),
(237, 24, 'F355'),
(238, 24, '360'),
(239, 24, 'F430'),
(240, 24, 'F512 M'),
(241, 24, '550 MARANELLO'),
(242, 24, '575M MARANELLO'),
(243, 24, '599'),
(244, 24, '456'),
(245, 24, '456M'),
(246, 24, '612'),
(247, 24, 'F50'),
(248, 24, 'ENZO'),
(249, 24, 'SUPERAMERICA'),
(250, 24, '430'),
(251, 24, '348'),
(252, 24, 'TESTAROSSA'),
(253, 24, '512'),
(254, 24, '355'),
(255, 24, 'F40'),
(256, 24, '412'),
(257, 24, 'MONDIAL'),
(258, 24, '328'),
(259, 24, 'CALIFORNIA'),
(260, 24, '458'),
(261, 24, 'FF'),
(262, 25, 'CROMA'),
(263, 25, 'CINQUECENTO'),
(264, 25, 'SEICENTO'),
(265, 25, 'PUNTO'),
(266, 25, 'GRANDE PUNTO'),
(267, 25, 'PANDA'),
(268, 25, 'TIPO'),
(269, 25, 'COUPE'),
(270, 25, 'UNO'),
(271, 25, 'ULYSSE'),
(272, 25, 'TEMPRA'),
(273, 25, 'MAREA'),
(274, 25, 'BARCHETTA'),
(275, 25, 'BRAVO'),
(276, 25, 'STILO'),
(277, 25, 'BRAVA'),
(278, 25, 'PALIO WEEKEND'),
(279, 25, '600'),
(280, 25, 'MULTIPLA'),
(281, 25, 'IDEA'),
(282, 25, 'SEDICI'),
(283, 25, 'LINEA'),
(284, 25, '500'),
(285, 25, 'FIORINO'),
(286, 25, 'DUCATO'),
(287, 25, 'DOBLO CARGO'),
(288, 25, 'DOBLO'),
(289, 25, 'STRADA'),
(290, 25, 'REGATA'),
(291, 25, 'TALENTO'),
(292, 25, 'ARGENTA'),
(293, 25, 'RITMO'),
(294, 25, 'PUNTO CLASSIC'),
(295, 25, 'QUBO'),
(296, 25, 'PUNTO EVO'),
(297, 25, '500C'),
(298, 25, 'FREEMONT'),
(299, 25, 'PANDA CLASSIC'),
(300, 25, '500L'),
(301, 26, 'MAVERICK'),
(302, 26, 'ESCORT'),
(303, 26, 'FOCUS'),
(304, 26, 'MONDEO'),
(305, 26, 'SCORPIO'),
(306, 26, 'FIESTA'),
(307, 26, 'PROBE'),
(308, 26, 'EXPLORER'),
(309, 26, 'GALAXY'),
(310, 26, 'KA'),
(311, 26, 'PUMA'),
(312, 26, 'COUGAR'),
(313, 26, 'FOCUS CMAX'),
(314, 26, 'FUSION'),
(315, 26, 'STREETKA'),
(316, 26, 'CMAX'),
(317, 26, 'SMAX'),
(318, 26, 'TRANSIT'),
(319, 26, 'COURIER'),
(320, 26, 'RANGER'),
(321, 26, 'SIERRA'),
(322, 26, 'ORION'),
(323, 26, 'PICK UP'),
(324, 26, 'CAPRI'),
(325, 26, 'GRANADA'),
(326, 26, 'KUGA'),
(327, 26, 'GRAND CMAX'),
(328, 26, 'BMAX'),
(329, 26, 'TOURNEO CUSTOM'),
(330, 28, 'TERRAIN'),
(331, 28, 'ACADIA'),
(332, 28, 'YUKON'),
(333, 28, 'SIERRA'),
(334, 27, 'EXCEED'),
(335, 27, 'SANTAMO'),
(336, 27, 'SUPER EXCEED'),
(337, 29, 'ACCORD'),
(338, 29, 'CIVIC'),
(339, 29, 'CRX'),
(340, 29, 'PRELUDE'),
(341, 29, 'NSX'),
(342, 29, 'LEGEND'),
(343, 29, 'CRV'),
(344, 29, 'HRV'),
(345, 29, 'LOGO'),
(346, 29, 'S2000'),
(347, 29, 'STREAM'),
(348, 29, 'JAZZ'),
(349, 29, 'FRV'),
(350, 29, 'CONCERTO'),
(351, 29, 'INSIGHT'),
(352, 29, 'CRZ'),
(353, 30, 'H2'),
(354, 30, 'H3'),
(355, 30, 'H3T'),
(356, 31, 'LANTRA'),
(357, 31, 'SONATA'),
(358, 31, 'ELANTRA'),
(359, 31, 'ACCENT'),
(360, 31, 'SCOUPE'),
(361, 31, 'COUPE'),
(362, 31, 'ATOS'),
(363, 31, 'H1'),
(364, 31, 'ATOS PRIME'),
(365, 31, 'XG'),
(366, 31, 'TRAJET'),
(367, 31, 'SANTA FE'),
(368, 31, 'TERRACAN'),
(369, 31, 'MATRIX'),
(370, 31, 'GETZ'),
(371, 31, 'TUCSON'),
(372, 31, 'I30'),
(373, 31, 'PONY'),
(374, 31, 'GRANDEUR'),
(375, 31, 'I10'),
(376, 31, 'I800'),
(377, 31, 'SONATA FL'),
(378, 31, 'IX55'),
(379, 31, 'I20'),
(380, 31, 'IX35'),
(381, 31, 'IX20'),
(382, 31, 'GENESIS'),
(383, 31, 'I40'),
(384, 31, 'VELOSTER'),
(385, 32, 'G'),
(386, 32, 'EX'),
(387, 32, 'FX'),
(388, 32, 'M'),
(389, 33, 'ELBA'),
(390, 33, 'MINITRE'),
(391, 34, 'TROOPER'),
(392, 34, 'PICK UP'),
(393, 34, 'D MAX'),
(394, 34, 'RODEO'),
(395, 34, 'DMAX'),
(396, 34, 'TRROPER'),
(397, 35, 'DAILY'),
(398, 35, 'MASSIF'),
(399, 36, 'DAILY'),
(400, 36, 'DUTY'),
(401, 37, 'SERIE XJ'),
(402, 37, 'SERIE XK'),
(403, 37, 'XJ'),
(404, 37, 'STYPE'),
(405, 37, 'XF'),
(406, 37, 'XTYPE'),
(407, 38, 'WRANGLER'),
(408, 38, 'CHEROKEE'),
(409, 38, 'GRAND CHEROKEE'),
(410, 38, 'COMMANDER'),
(411, 38, 'COMPASS'),
(412, 38, 'WRANGLER UNLIMITED'),
(413, 38, 'PATRIOT'),
(414, 39, 'SPORTAGE'),
(415, 39, 'SEPHIA'),
(416, 39, 'SEPHIA II'),
(417, 39, 'PRIDE'),
(418, 39, 'CLARUS'),
(419, 39, 'SHUMA'),
(420, 39, 'CARNIVAL'),
(421, 39, 'JOICE'),
(422, 39, 'MAGENTIS'),
(423, 39, 'CARENS'),
(424, 39, 'RIO'),
(425, 39, 'CERATO'),
(426, 39, 'SORENTO'),
(427, 39, 'OPIRUS'),
(428, 39, 'PICANTO'),
(429, 39, 'CEED'),
(430, 39, 'CEED SPORTY WAGON'),
(431, 39, 'PROCEED'),
(432, 39, 'K2500 FRONTIER'),
(433, 39, 'K2500'),
(434, 39, 'SOUL'),
(435, 39, 'VENGA'),
(436, 39, 'OPTIMA'),
(437, 39, 'CEED SPORTSWAGON'),
(438, 40, 'SAMARA'),
(439, 40, 'NIVA'),
(440, 40, 'SAGONA'),
(441, 40, 'STAWRA 2110'),
(442, 40, '214'),
(443, 40, 'KALINA'),
(444, 40, 'SERIE 2100'),
(445, 40, 'PRIORA'),
(446, 41, 'GALLARDO'),
(447, 41, 'MURCIELAGO'),
(448, 41, 'AVENTADOR'),
(449, 42, 'DELTA'),
(450, 42, 'K'),
(451, 42, 'Y10'),
(452, 42, 'DEDRA'),
(453, 42, 'LYBRA'),
(454, 42, 'Z'),
(455, 42, 'Y'),
(456, 42, 'YPSILON'),
(457, 42, 'THESIS'),
(458, 42, 'PHEDRA'),
(459, 42, 'MUSA'),
(460, 42, 'THEMA'),
(461, 42, 'ZETA'),
(462, 42, 'KAPPA'),
(463, 42, 'TREVI'),
(464, 42, 'PRISMA'),
(465, 42, 'A112'),
(466, 42, 'YPSILON ELEFANTINO'),
(467, 42, 'VOYAGER'),
(468, 43, 'RANGE ROVER'),
(469, 43, 'DEFENDER'),
(470, 43, 'DISCOVERY'),
(471, 43, 'FREELANDER'),
(472, 43, 'RANGE ROVER SPORT'),
(473, 43, 'DISCOVERY 4'),
(474, 43, 'RANGE ROVER EVOQUE'),
(475, 44, 'MAXUS'),
(476, 45, 'LS400'),
(477, 45, 'LS430'),
(478, 45, 'GS300'),
(479, 45, 'IS200'),
(480, 45, 'RX300'),
(481, 45, 'GS430'),
(482, 45, 'GS460'),
(483, 45, 'SC430'),
(484, 45, 'IS300'),
(485, 45, 'IS250'),
(486, 45, 'RX400H'),
(487, 45, 'IS220D'),
(488, 45, 'RX350'),
(489, 45, 'GS450H'),
(490, 45, 'LS460'),
(491, 45, 'LS600H'),
(492, 45, 'LS'),
(493, 45, 'GS'),
(494, 45, 'IS'),
(495, 45, 'SC'),
(496, 45, 'RX'),
(497, 45, 'CT'),
(498, 46, 'ELISE'),
(499, 46, 'EXIGE'),
(500, 47, 'BOLERO PICKUP'),
(501, 47, 'GOA PICKUP'),
(502, 47, 'GOA'),
(503, 47, 'CJ'),
(504, 47, 'PIKUP'),
(505, 47, 'THAR'),
(506, 48, 'GHIBLI'),
(507, 48, 'SHAMAL'),
(508, 48, 'QUATTROPORTE'),
(509, 48, '3200 GT'),
(510, 48, 'COUPE'),
(511, 48, 'SPYDER'),
(512, 48, 'GRANSPORT'),
(513, 48, 'GRANTURISMO'),
(514, 48, '430'),
(515, 48, 'BITURBO'),
(516, 48, '228'),
(517, 48, '224'),
(518, 48, 'GRANCABRIO'),
(519, 49, 'MAYBACH'),
(520, 50, 'XEDOS 6'),
(521, 50, '626'),
(522, 50, '121'),
(523, 50, 'XEDOS 9'),
(524, 50, '323'),
(525, 50, 'MX3'),
(526, 50, 'RX7'),
(527, 50, 'MX5'),
(528, 50, 'MAZDA3'),
(529, 50, 'MPV'),
(530, 50, 'DEMIO'),
(531, 50, 'PREMACY'),
(532, 50, 'TRIBUTE'),
(533, 50, 'MAZDA6'),
(534, 50, 'MAZDA2'),
(535, 50, 'RX8'),
(536, 50, 'MAZDA5'),
(537, 50, 'CX7'),
(538, 50, 'SERIE B'),
(539, 50, 'B2500'),
(540, 50, 'BT50'),
(541, 50, 'MX6'),
(542, 50, '929'),
(543, 50, 'CX5'),
(544, 51, 'CLASE C'),
(545, 51, 'CLASE E'),
(546, 51, 'CLASE SL'),
(547, 51, 'CLASE S'),
(548, 51, 'CLASE CL'),
(549, 51, 'CLASE G'),
(550, 51, 'CLASE SLK'),
(551, 51, 'CLASE V'),
(552, 51, 'VIANO'),
(553, 51, 'CLASE CLK'),
(554, 51, 'CLASE A'),
(555, 51, 'CLASE M'),
(556, 51, 'VANEO'),
(557, 51, 'SLKLASSE'),
(558, 51, 'SLR MCLAREN'),
(559, 51, 'CLASE CLS'),
(560, 51, 'CLASE R'),
(561, 51, 'CLASE GL'),
(562, 51, 'CLASE B'),
(563, 51, '100D'),
(564, 51, '140D'),
(565, 51, '180D'),
(566, 51, 'SPRINTER'),
(567, 51, 'VITO'),
(568, 51, 'TRANSPORTER'),
(569, 51, '280'),
(570, 51, '220'),
(571, 51, '200'),
(572, 51, '190'),
(573, 51, '600'),
(574, 51, '400'),
(575, 51, 'CLASE SL R129'),
(576, 51, '300'),
(577, 51, '500'),
(578, 51, '420'),
(579, 51, '260'),
(580, 51, '230'),
(581, 51, 'CLASE CLC'),
(582, 51, 'CLASE GLK'),
(583, 51, 'SLS AMG'),
(584, 52, 'MGF'),
(585, 52, 'TF'),
(586, 52, 'ZR'),
(587, 52, 'ZS'),
(588, 52, 'ZT'),
(589, 52, 'ZTT'),
(590, 52, 'MINI'),
(591, 52, 'COUNTRYMAN'),
(592, 52, 'PACEMAN'),
(593, 54, 'MONTERO'),
(594, 54, 'GALANT'),
(595, 54, 'COLT'),
(596, 54, 'SPACE WAGON'),
(597, 54, 'SPACE RUNNER'),
(598, 54, 'SPACE GEAR'),
(599, 54, '3000 GT'),
(600, 54, 'CARISMA'),
(601, 54, 'ECLIPSE'),
(602, 54, 'SPACE STAR'),
(603, 54, 'MONTERO SPORT'),
(604, 54, 'MONTERO IO'),
(605, 54, 'OUTLANDER'),
(606, 54, 'LANCER'),
(607, 54, 'GRANDIS'),
(608, 54, 'L200'),
(609, 54, 'CANTER'),
(610, 54, '300 GT'),
(611, 54, 'ASX'),
(612, 54, 'IMIEV'),
(613, 55, '44'),
(614, 55, 'PLUS 8'),
(615, 55, 'AERO 8'),
(616, 55, 'V6'),
(617, 55, 'ROADSTER'),
(618, 55, '4'),
(619, 55, 'PLUS 4'),
(620, 56, 'TERRANO II'),
(621, 56, 'TERRANO'),
(622, 56, 'MICRA'),
(623, 56, 'SUNNY'),
(624, 56, 'PRIMERA'),
(625, 56, 'SERENA'),
(626, 56, 'PATROL'),
(627, 56, 'MAXIMA QX'),
(628, 56, '200 SX'),
(629, 56, '300 ZX'),
(630, 56, 'PATROL GR'),
(631, 56, '100 NX'),
(632, 56, 'ALMERA'),
(633, 56, 'PATHFINDER'),
(634, 56, 'ALMERA TINO'),
(635, 56, 'XTRAIL'),
(636, 56, '350Z'),
(637, 56, 'MURANO'),
(638, 56, 'NOTE'),
(639, 56, 'QASHQAI'),
(640, 56, 'TIIDA'),
(641, 56, 'VANETTE'),
(642, 56, 'TRADE'),
(643, 56, 'VANETTE CARGO'),
(644, 56, 'PICKUP'),
(645, 56, 'NAVARA'),
(646, 56, 'CABSTAR E'),
(647, 56, 'CABSTAR'),
(648, 56, 'MAXIMA'),
(649, 56, 'CAMION'),
(650, 56, 'PRAIRIE'),
(651, 56, 'BLUEBIRD'),
(652, 56, 'NP300 PICK UP'),
(653, 56, 'QASHQAI2'),
(654, 56, 'PIXO'),
(655, 56, 'GTR'),
(656, 56, '370Z'),
(657, 56, 'CUBE'),
(658, 56, 'JUKE'),
(659, 56, 'LEAF'),
(660, 56, 'EVALIA'),
(661, 57, 'ASTRA'),
(662, 57, 'VECTRA'),
(663, 57, 'CALIBRA'),
(664, 57, 'CORSA'),
(665, 57, 'OMEGA'),
(666, 57, 'FRONTERA'),
(667, 57, 'TIGRA'),
(668, 57, 'MONTEREY'),
(669, 57, 'SINTRA'),
(670, 57, 'ZAFIRA'),
(671, 57, 'AGILA'),
(672, 57, 'SPEEDSTER'),
(673, 57, 'SIGNUM'),
(674, 57, 'MERIVA'),
(675, 57, 'ANTARA'),
(676, 57, 'GT'),
(677, 57, 'COMBO'),
(678, 57, 'MOVANO'),
(679, 57, 'VIVARO'),
(680, 57, 'KADETT'),
(681, 57, 'MONZA'),
(682, 57, 'SENATOR'),
(683, 57, 'REKORD'),
(684, 57, 'MANTA'),
(685, 57, 'ASCONA'),
(686, 57, 'INSIGNIA'),
(687, 57, 'ZAFIRA TOURER'),
(688, 57, 'AMPERA'),
(689, 57, 'MOKKA'),
(690, 57, 'ADAM'),
(691, 58, '306'),
(692, 58, '605'),
(693, 58, '106'),
(694, 58, '205'),
(695, 58, '405'),
(696, 58, '406'),
(697, 58, '806'),
(698, 58, '807'),
(699, 58, '407'),
(700, 58, '307'),
(701, 58, '206'),
(702, 58, '607'),
(703, 58, '308'),
(704, 58, '307 SW'),
(705, 58, '206 SW'),
(706, 58, '407 SW'),
(707, 58, '1007'),
(708, 58, '107'),
(709, 58, '207'),
(710, 58, '4007'),
(711, 58, 'BOXER'),
(712, 58, 'PARTNER'),
(713, 58, 'J5'),
(714, 58, '604'),
(715, 58, '505'),
(716, 58, '309'),
(717, 58, 'BIPPER'),
(718, 58, 'PARTNER ORIGIN'),
(719, 58, '3008'),
(720, 58, '5008'),
(721, 58, 'RCZ'),
(722, 58, '508'),
(723, 58, 'ION'),
(724, 58, '208'),
(725, 58, '4008'),
(726, 59, 'TRANS SPORT'),
(727, 59, 'FIREBIRD'),
(728, 59, 'TRANS AM'),
(729, 60, '911'),
(730, 60, 'BOXSTER'),
(731, 60, 'CAYENNE'),
(732, 60, 'CARRERA GT'),
(733, 60, 'CAYMAN'),
(734, 60, '928'),
(735, 60, '968'),
(736, 60, '944'),
(737, 60, '924'),
(738, 60, 'PANAMERA'),
(739, 60, '918'),
(740, 61, 'MEGANE'),
(741, 61, 'SAFRANE'),
(742, 61, 'LAGUNA'),
(743, 61, 'CLIO'),
(744, 61, 'TWINGO'),
(745, 61, 'NEVADA'),
(746, 61, 'ESPACE'),
(747, 61, 'SPIDER'),
(748, 61, 'SCENIC'),
(749, 61, 'GRAND ESPACE'),
(750, 61, 'AVANTIME'),
(751, 61, 'VEL SATIS'),
(752, 61, 'GRAND SCENIC'),
(753, 61, 'CLIO CAMPUS'),
(754, 61, 'MODUS'),
(755, 61, 'EXPRESS'),
(756, 61, 'TRAFIC'),
(757, 61, 'MASTER'),
(758, 61, 'KANGOO'),
(759, 61, 'MASCOTT'),
(760, 61, 'MASTER PROPULSION'),
(761, 61, 'MAXITY'),
(762, 61, 'R19'),
(763, 61, 'R25'),
(764, 61, 'R5'),
(765, 61, 'R21'),
(766, 61, 'R4'),
(767, 61, 'ALPINE'),
(768, 61, 'FUEGO'),
(769, 61, 'R18'),
(770, 61, 'R11'),
(771, 61, 'R9'),
(772, 61, 'R6'),
(773, 61, 'GRAND MODUS'),
(774, 61, 'KANGOO COMBI'),
(775, 61, 'KOLEOS'),
(776, 61, 'FLUENCE'),
(777, 61, 'WIND'),
(778, 61, 'LATITUDE'),
(779, 61, 'GRAND KANGOO COMBI'),
(780, 62, 'SIVER DAWN'),
(781, 62, 'SILVER SPUR'),
(782, 62, 'PARK WARD'),
(783, 62, 'SILVER SERAPH'),
(784, 62, 'CORNICHE'),
(785, 62, 'PHANTOM'),
(786, 62, 'TOURING'),
(787, 62, 'SILVIER'),
(788, 63, '800'),
(789, 63, '600'),
(790, 63, '100'),
(791, 63, '200'),
(792, 63, 'COUPE'),
(793, 63, '400'),
(794, 63, '45'),
(795, 63, 'CABRIOLET'),
(796, 63, '25'),
(797, 63, 'MINI'),
(798, 63, '75'),
(799, 63, 'STREETWISE'),
(800, 63, 'SD'),
(801, 64, '900'),
(802, 64, '93'),
(803, 64, '9000'),
(804, 64, '95'),
(805, 64, '93X'),
(806, 64, '94X'),
(807, 65, '300'),
(808, 65, '350'),
(809, 65, 'ANIBAL'),
(810, 65, 'ANIBAL PICK UP'),
(811, 66, 'IBIZA'),
(812, 66, 'CORDOBA'),
(813, 66, 'TOLEDO'),
(814, 66, 'MARBELLA'),
(815, 66, 'ALHAMBRA'),
(816, 66, 'AROSA'),
(817, 66, 'LEON'),
(818, 66, 'ALTEA'),
(819, 66, 'ALTEA XL'),
(820, 66, 'ALTEA FREETRACK'),
(821, 66, 'TERRA'),
(822, 66, 'INCA'),
(823, 66, 'MALAGA'),
(824, 66, 'RONDA'),
(825, 66, 'EXEO'),
(826, 66, 'MII'),
(827, 67, 'FELICIA'),
(828, 67, 'FORMAN'),
(829, 67, 'OCTAVIA'),
(830, 67, 'OCTAVIA TOUR'),
(831, 67, 'FABIA'),
(832, 67, 'SUPERB'),
(833, 67, 'ROOMSTER'),
(834, 67, 'SCOUT'),
(835, 67, 'PICKUP'),
(836, 67, 'FAVORIT'),
(837, 67, '130'),
(838, 67, 'S'),
(839, 67, 'YETI'),
(840, 67, 'CITIGO'),
(841, 67, 'RAPID'),
(842, 68, 'SMART'),
(843, 68, 'CITYCOUPE'),
(844, 68, 'FORTWO'),
(845, 68, 'CABRIO'),
(846, 68, 'CROSSBLADE'),
(847, 68, 'ROADSTER'),
(848, 68, 'FORFOUR'),
(849, 69, 'KORANDO'),
(850, 69, 'FAMILY'),
(851, 69, 'K4D'),
(852, 69, 'MUSSO'),
(853, 69, 'KORANDO KJ'),
(854, 69, 'REXTON'),
(855, 69, 'REXTON II'),
(856, 69, 'RODIUS'),
(857, 69, 'KYRON'),
(858, 69, 'ACTYON'),
(859, 69, 'SPORTS PICK UP'),
(860, 69, 'ACTYON SPORTS PICK UP'),
(861, 69, 'KODANDO'),
(862, 70, 'LEGACY'),
(863, 70, 'IMPREZA'),
(864, 70, 'SVX'),
(865, 70, 'JUSTY'),
(866, 70, 'OUTBACK'),
(867, 70, 'FORESTER'),
(868, 70, 'G3X JUSTY'),
(869, 70, 'B9 TRIBECA'),
(870, 70, 'XT'),
(871, 70, '1800'),
(872, 70, 'TRIBECA'),
(873, 70, 'WRX STI'),
(874, 70, 'TREZIA'),
(875, 70, 'XV'),
(876, 70, 'BRZ'),
(877, 71, 'MARUTI'),
(878, 71, 'SWIFT'),
(879, 71, 'VITARA'),
(880, 71, 'BALENO'),
(881, 71, 'SAMURAI'),
(882, 71, 'ALTO'),
(883, 71, 'WAGON R'),
(884, 71, 'JIMNY'),
(885, 71, 'GRAND VITARA'),
(886, 71, 'IGNIS'),
(887, 71, 'LIANA'),
(888, 71, 'GRAND VITARA XL7'),
(889, 71, 'SX4'),
(890, 71, 'SPLASH'),
(891, 71, 'KIZASHI'),
(892, 72, 'SAMBA'),
(893, 72, 'TAGORA'),
(894, 72, 'SOLARA'),
(895, 72, 'HORIZON'),
(896, 73, 'TELCOSPORT'),
(897, 73, 'TELCO'),
(898, 73, 'SUMO'),
(899, 73, 'SAFARI'),
(900, 73, 'INDICA'),
(901, 73, 'INDIGO'),
(902, 73, 'GRAND SAFARI'),
(903, 73, 'TL PICK UP'),
(904, 73, 'XENON PICK UP'),
(905, 73, 'VISTA'),
(906, 73, 'XENON'),
(907, 73, 'ARIA'),
(908, 74, 'CARINA E'),
(909, 74, '4RUNNER'),
(910, 74, 'CAMRY'),
(911, 74, 'RAV4'),
(912, 74, 'CELICA'),
(913, 74, 'SUPRA'),
(914, 74, 'PASEO'),
(915, 74, 'LAND CRUISER 80'),
(916, 74, 'LAND CRUISER 100'),
(917, 74, 'LAND CRUISER'),
(918, 74, 'LAND CRUISER 90'),
(919, 74, 'COROLLA'),
(920, 74, 'AURIS'),
(921, 74, 'AVENSIS'),
(922, 74, 'PICNIC'),
(923, 74, 'YARIS'),
(924, 74, 'YARIS VERSO'),
(925, 74, 'MR2'),
(926, 74, 'PREVIA'),
(927, 74, 'PRIUS'),
(928, 74, 'AVENSIS VERSO'),
(929, 74, 'COROLLA VERSO'),
(930, 74, 'COROLLA SEDAN'),
(931, 74, 'AYGO'),
(932, 74, 'HILUX'),
(933, 74, 'DYNA'),
(934, 74, 'LAND CRUISER 200'),
(935, 74, 'VERSO'),
(936, 74, 'IQ'),
(937, 74, 'URBAN CRUISER'),
(938, 74, 'GT86'),
(939, 75, '100'),
(940, 75, '121'),
(941, 76, '214'),
(942, 76, '110 STAWRA'),
(943, 76, '111 STAWRA'),
(944, 76, '215'),
(945, 76, '112 STAWRA'),
(946, 77, 'PASSAT'),
(947, 77, 'GOLF'),
(948, 77, 'VENTO'),
(949, 77, 'POLO'),
(950, 77, 'CORRADO'),
(951, 77, 'SHARAN'),
(952, 77, 'LUPO'),
(953, 77, 'BORA'),
(954, 77, 'JETTA'),
(955, 77, 'NEW BEETLE'),
(956, 77, 'PHAETON'),
(957, 77, 'TOUAREG'),
(958, 77, 'TOURAN'),
(959, 77, 'MULTIVAN'),
(960, 77, 'CADDY'),
(961, 77, 'GOLF PLUS'),
(962, 77, 'FOX'),
(963, 77, 'EOS'),
(964, 77, 'CARAVELLE'),
(965, 77, 'TIGUAN'),
(966, 77, 'TRANSPORTER'),
(967, 77, 'LT'),
(968, 77, 'TARO'),
(969, 77, 'CRAFTER'),
(970, 77, 'CALIFORNIA'),
(971, 77, 'SANTANA'),
(972, 77, 'SCIROCCO'),
(973, 77, 'PASSAT CC'),
(974, 77, 'AMAROK'),
(975, 77, 'BEETLE'),
(976, 77, 'UP'),
(977, 77, 'CC'),
(978, 78, '440'),
(979, 78, '850'),
(980, 78, 'S70'),
(981, 78, 'V70'),
(982, 78, 'V70 CLASSIC'),
(983, 78, '940'),
(984, 78, '480'),
(985, 78, '460'),
(986, 78, '960'),
(987, 78, 'S90'),
(988, 78, 'V90'),
(989, 78, 'CLASSIC'),
(990, 78, 'S40'),
(991, 78, 'V40'),
(992, 78, 'V50'),
(993, 78, 'V70 XC'),
(994, 78, 'XC70'),
(995, 78, 'C70'),
(996, 78, 'S80'),
(997, 78, 'S60'),
(998, 78, 'XC90'),
(999, 78, 'C30'),
(1000, 78, '780'),
(1001, 78, '760'),
(1002, 78, '740'),
(1003, 78, '240'),
(1004, 78, '360'),
(1005, 78, '340'),
(1006, 78, 'XC60'),
(1007, 78, 'V60'),
(1008, 78, 'V40 CROSS COUNTRY'),
(1009, 79, '353'),
(1010, 53, 'MINI'),
(1011, 53, 'COUNTRYMAN'),
(1012, 53, 'PACEMAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `name`, `active`) VALUES
(1, 'Administrador', 0),
(2, 'Supervisor', 1),
(3, 'Mecanico', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `user` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `name`, `user`, `pass`, `active`, `id_tipo_usuario`) VALUES
(1, 'Administrador', 'admin', '', 0, 1),
(2, 'Supervisor', 'mottor', '', 0, 2),
(3, 'Mecanico', 'rodriguezl', '', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(11) NOT NULL,
  `marca` varchar(256) NOT NULL,
  `modelo` varchar(256) NOT NULL,
  `color` varchar(256) NOT NULL,
  `aseguradora` varchar(256) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_contacto` int(11) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `año` int(4) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `chasis_n` varchar(20) NOT NULL,
  `motor_n` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `marca`, `modelo`, `color`, `aseguradora`, `active`, `id_contacto`, `placa`, `año`, `tipo`, `chasis_n`, `motor_n`) VALUES
(1, '39', '424', 'gris', 'qualitas', 1, 3, 'p456asd', 2023, 'sedan', '11223313223', '12321332123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `hoja_recepcion`
--
ALTER TABLE `hoja_recepcion`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_vehiculo` (`id_vehiculo`) USING BTREE;

--
-- Indices de la tabla `marcas_vehiculos`
--
ALTER TABLE `marcas_vehiculos`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `modelo_vehiculo`
--
ALTER TABLE `modelo_vehiculo`
  ADD PRIMARY KEY (`id_modelo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`) USING BTREE;

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_contacto` (`id_contacto`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `hoja_recepcion`
--
ALTER TABLE `hoja_recepcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas_vehiculos`
--
ALTER TABLE `marcas_vehiculos`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `modelo_vehiculo`
--
ALTER TABLE `modelo_vehiculo`
  MODIFY `id_modelo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hoja_recepcion`
--
ALTER TABLE `hoja_recepcion`
  ADD CONSTRAINT `hoja_recepcion_ibfk_1` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`id_contacto`) REFERENCES `contacto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
