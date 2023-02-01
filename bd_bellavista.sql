-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2023 at 04:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_bellavista`
--

-- --------------------------------------------------------

--
-- Table structure for table `carguedescarguehorno`
--

CREATE TABLE `carguedescarguehorno` (
  `idCargueHeader` int NOT NULL,
  `responsableCargue` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `fechaCargue` date NOT NULL,
  `nave` int DEFAULT NULL,
  `quema` int NOT NULL,
  `paquete` int DEFAULT NULL,
  `linea` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `carguedescarguehorno`
--

INSERT INTO `carguedescarguehorno` (`idCargueHeader`, `responsableCargue`, `fechaCargue`, `nave`, `quema`, `paquete`, `linea`) VALUES
(1, 'Edward Zuleta', '2022-11-01', 1, 1, 1, 1),
(25, 'Hernan Ortíz', '2022-11-25', 3, 2, 3, 2),
(26, 'Edward Zuleta', '2022-11-25', 2, 3, 3, 3),
(27, 'Edward Zuleta', '2022-11-25', 2, 3, 3, 3),
(28, 'Yeison Durango', '2022-11-25', 1, 2, 3, 1),
(29, 'Andres González', '2022-11-29', 5, 5, 5, 1),
(30, 'Andres González', '2022-12-02', 7, 7, 7, 7),
(31, 'Edward Zuleta', '2023-01-04', 1, 1, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `carguedescarguehornofooter`
--

CREATE TABLE `carguedescarguehornofooter` (
  `idCargueFooter` int NOT NULL,
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `medidas` varchar(255) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `rendimiento` varchar(255) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `peso` varchar(255) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `referencia` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `cantidad` int DEFAULT NULL,
  `idCargueHeader` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `carguedescarguehornofooter`
--

INSERT INTO `carguedescarguehornofooter` (`idCargueFooter`, `id`, `nombre`, `medidas`, `rendimiento`, `peso`, `referencia`, `cantidad`, `idCargueHeader`) VALUES
(1, 0, 'Farol Rayado', '10x20x30', '15.5 U/M2', '4.4 kg Aprox.', '10 R', 358, 1),
(2, 4, 'Farol Liso', '12x20x30', '15.5 U/M2', '5 kg Aprox.', '12 L', 15200, 27),
(3, 10, 'Estructural', '12x20x30', '15.5 U/M2', '6.2 kg Aprox.', '12 Vertical', 6000, 28),
(4, 3, 'Farol Liso', '10x20x30', '15.5 U/M2', '4.4 kg Aprox.', '10 L', 4500, 29),
(5, 3, 'Farol Liso', '10x20x30', '15.5 U/M2', '4.4 kg Aprox.', '10 L', 5500, 30),
(6, 2, 'Farol Rayado', '12x20x30', '15.5 U/M2', '5 kg Aprox.', '12 R', 5000, 31),
(7, 5, 'Farol División', '7x20x30', '15.5 U/M2', '3.3 kg Aprox.', '7 DV', 3000, 31),
(8, 7, 'Caravista Estructural', '6x12x24', '57 U/M2', '1.8 kg Aprox.', '6 CV', 10000, 31);

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `id` int NOT NULL,
  `numero` varchar(200) COLLATE utf32_spanish2_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf32_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id`, `numero`, `descripcion`) VALUES
(1, '320 797 1327', 'Número de contacto de ventas y despachos');

-- --------------------------------------------------------

--
-- Table structure for table `controldiariodespachos`
--

CREATE TABLE `controldiariodespachos` (
  `idCtrDesp` int NOT NULL,
  `responsableCargue` varchar(255) CHARACTER SET utf32 COLLATE utf32_spanish2_ci DEFAULT NULL,
  `fechaDiario` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `controldiariodespachos`
--

INSERT INTO `controldiariodespachos` (`idCtrDesp`, `responsableCargue`, `fechaDiario`) VALUES
(191, 'Edward Zuleta', '2022-12-29'),
(254, 'Edward Zuleta', '2022-12-30'),
(259, 'Edward Zuleta', '2023-01-02'),
(263, 'DeibyMosquera', '2023-01-03'),
(284, 'AndresGonzález', '2023-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `controldiariodespachosfooter`
--

CREATE TABLE `controldiariodespachosfooter` (
  `idCrtlDespFoot` int NOT NULL,
  `codigo` int DEFAULT NULL,
  `referencia` varchar(255) COLLATE utf32_spanish2_ci DEFAULT NULL,
  `primera` int DEFAULT NULL,
  `segunda` int DEFAULT NULL,
  `rotura` int DEFAULT NULL,
  `idcontroldiariodespachos` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `controldiariodespachosfooter`
--

INSERT INTO `controldiariodespachosfooter` (`idCrtlDespFoot`, `codigo`, `referencia`, `primera`, `segunda`, `rotura`, `idcontroldiariodespachos`) VALUES
(6, NULL, '10 R', 0, 0, 0, 191),
(14, NULL, '10 R', 0, 0, 0, 254),
(15, NULL, '10 L', 0, 0, 0, 259),
(16, NULL, '10 R', 0, 0, 0, 259),
(17, NULL, '10 CT', 0, 0, 0, 259),
(18, NULL, '10 L', 0, 0, 0, 263),
(19, NULL, '10 R', 0, 0, 0, 263),
(20, NULL, '10 CT', 0, 0, 0, 263),
(25, NULL, '10 L', 4000, 4000, 11, 284),
(26, NULL, '10 CT', 2501, 1500, 230, 284),
(27, NULL, '10 R', 1100, 1100, 8, 284);

-- --------------------------------------------------------

--
-- Table structure for table `descarguehorno`
--

CREATE TABLE `descarguehorno` (
  `id` int NOT NULL,
  `responsableHornos` varchar(350) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `responsablePatios` varchar(350) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `referencia` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `descargueEstimado` int DEFAULT NULL,
  `diferencia` varchar(100) COLLATE utf32_spanish2_ci DEFAULT NULL,
  `cantPrimera` int DEFAULT NULL,
  `cantSegunda` int DEFAULT NULL,
  `roturaHorno` int DEFAULT NULL,
  `porcentaje` int DEFAULT NULL,
  `crudos` varchar(255) COLLATE utf32_spanish2_ci DEFAULT NULL,
  `totalDescargue` int DEFAULT NULL,
  `totalRoturaDia` int DEFAULT NULL,
  `PorcentajeRoturaDia` int DEFAULT NULL,
  `fecha` varchar(500) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `descarguehorno`
--

INSERT INTO `descarguehorno` (`id`, `responsableHornos`, `responsablePatios`, `referencia`, `descargueEstimado`, `diferencia`, `cantPrimera`, `cantSegunda`, `roturaHorno`, `porcentaje`, `crudos`, `totalDescargue`, `totalRoturaDia`, `PorcentajeRoturaDia`, `fecha`) VALUES
(182, 'Edward Zuleta', 'LuisZuleta', '10 L', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 04:01:49 PM'),
(183, 'Edward Zuleta', 'LuisZuleta', '10 L', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 04:05:30 PM'),
(184, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 04:06:03 PM'),
(185, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 04:08:26 PM'),
(186, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 04:25:13 PM'),
(187, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 04:43:45 PM'),
(188, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 04:46:33 PM'),
(189, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 04:49:22 PM'),
(190, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 04:49:32 PM'),
(191, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 05:04:44 PM'),
(192, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 05:32:45 PM'),
(193, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 05:45:09 PM'),
(194, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 05:49:11 PM'),
(195, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 05:50:33 PM'),
(196, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 05:51:21 PM'),
(197, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 05:54:00 PM'),
(198, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:10:50 PM'),
(199, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:12:00 PM'),
(200, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:13:49 PM'),
(201, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:15:42 PM'),
(202, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:15:54 PM'),
(203, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:16:51 PM'),
(204, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:17:21 PM'),
(205, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:20:26 PM'),
(206, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:20:39 PM'),
(207, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:24:30 PM'),
(208, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:25:09 PM'),
(209, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:26:21 PM'),
(210, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:26:55 PM'),
(211, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:27:21 PM'),
(212, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:28:04 PM'),
(213, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:28:47 PM'),
(214, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:39:30 PM'),
(215, 'Edward Zuleta', 'LuisZuleta', '10 R', 0, '', 2000, 1500, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:40:08 PM'),
(216, 'Edward Zuleta', 'LuisZuleta', '10 CT', 0, '', 0, 0, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:41:00 PM'),
(217, 'Edward Zuleta', 'LuisZuleta', '10 CT', 0, '', 0, 0, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:54:39 PM'),
(218, 'Edward Zuleta', 'LuisZuleta', '10 CT', 0, '', 0, 0, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 06:58:11 PM'),
(219, 'Edward Zuleta', 'LuisZuleta', '10 CT', 0, '', 0, 0, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 07:00:47 PM'),
(220, 'Edward Zuleta', 'LuisZuleta', '10 CT', 0, '', 0, 0, 15, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 07:01:26 PM'),
(221, 'Edward Zuleta', 'LuisZuleta', '10 CT', 0, '', 1200, 0, 0, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 07:02:09 PM'),
(222, 'Edward Zuleta', 'LuisZuleta', '10 CT', 0, '', 1200, 0, 0, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 07:04:37 PM'),
(223, 'Edward Zuleta', 'LuisZuleta', '10 CT', 0, '', 1200, 0, 0, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 07:09:22 PM'),
(224, 'Edward Zuleta', 'LuisZuleta', '10 CT', 0, '', 0, 500, 0, 0, 'ningún valor', 0, 0, 0, 'Monday 2nd of January 2023 07:09:40 PM'),
(225, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 0, 2500, 0, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 04:43:24 PM'),
(226, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 0, 2500, 0, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 04:44:20 PM'),
(227, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 0, 2500, 0, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 04:44:59 PM'),
(228, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 0, 2500, 0, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 04:46:14 PM'),
(229, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 04:47:29 PM'),
(230, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:23:21 PM'),
(231, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:26:24 PM'),
(232, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:27:13 PM'),
(233, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:30:00 PM'),
(234, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:31:17 PM'),
(235, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:31:56 PM'),
(236, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:34:08 PM'),
(237, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:37:27 PM'),
(238, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:38:26 PM'),
(239, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:54:44 PM'),
(240, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 05:55:34 PM'),
(241, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:09:15 PM'),
(242, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:09:59 PM'),
(243, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:26:54 PM'),
(244, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:27:16 PM'),
(245, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:28:08 PM'),
(246, 'DeibyMosquera', 'DeibyMosquera', '10 L', 0, '', 1000, 0, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:29:27 PM'),
(247, 'DeibyMosquera', 'DeibyMosquera', '10 R', 0, '', 0, 1000, 0, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:30:44 PM'),
(248, 'DeibyMosquera', 'DeibyMosquera', '10 R', 0, '', 0, 1000, 0, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:31:30 PM'),
(249, 'DeibyMosquera', 'DeibyMosquera', '10 R', 0, '', 1000, 0, 5, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:32:02 PM'),
(250, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 5, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:33:04 PM'),
(251, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 5, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:35:06 PM'),
(252, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 5, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:35:31 PM'),
(253, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 5, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:40:03 PM'),
(254, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 5, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:41:11 PM'),
(255, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 5, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:54:11 PM'),
(256, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 5, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:55:15 PM'),
(257, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 5, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 06:56:02 PM'),
(258, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 1, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 07:00:15 PM'),
(259, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 1, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 07:17:46 PM'),
(260, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 1, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 07:20:10 PM'),
(261, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 1000, 0, 1, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 07:35:21 PM'),
(262, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 0, 1000, 0, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 07:48:27 PM'),
(263, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 0, 1000, 0, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 07:50:37 PM'),
(264, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 0, 1000, 0, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 07:56:14 PM'),
(265, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 100, 100, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 08:00:29 PM'),
(266, 'DeibyMosquera', 'DeibyMosquera', '10 CT', 0, '', 100, 100, 10, 0, 'ningún valor', 0, 0, 0, 'Tuesday 3rd of January 2023 08:02:51 PM'),
(267, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 12:50:34 PM'),
(268, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 12:52:41 PM'),
(269, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 12:53:20 PM'),
(270, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 12:55:59 PM'),
(271, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 01:00:32 PM'),
(272, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 01:01:59 PM'),
(273, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 04:10:18 PM'),
(274, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 04:12:07 PM'),
(275, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 04:13:49 PM'),
(276, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 05:47:23 PM'),
(277, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 05:48:05 PM'),
(278, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 05:51:09 PM'),
(279, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 05:51:44 PM'),
(280, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:01:09 PM'),
(281, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:02:01 PM'),
(282, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:02:25 PM'),
(283, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:04:31 PM'),
(284, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:40:26 PM'),
(285, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:41:27 PM'),
(286, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:42:12 PM'),
(287, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:42:37 PM'),
(288, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:43:11 PM'),
(289, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:46:58 PM'),
(290, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 1000, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:50:36 PM'),
(291, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 0, 1000, 5, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:51:20 PM'),
(292, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 100, 100, 0, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:51:53 PM'),
(293, 'AndresGonzález', 'AndresGonzález', '10 L', 0, '', 0, 0, 1, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:53:01 PM'),
(294, 'AndresGonzález', 'AndresGonzález', '10 CT', 0, '', 0, 0, 3, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:53:51 PM'),
(295, 'AndresGonzález', 'AndresGonzález', '10 CT', 0, '', 0, 0, 3, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:58:59 PM'),
(296, 'AndresGonzález', 'AndresGonzález', '10 CT', 0, '', 0, 0, 3, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 06:59:30 PM'),
(297, 'AndresGonzález', 'AndresGonzález', '10 CT', 0, '', 100, 100, 0, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 07:00:00 PM'),
(298, 'AndresGonzález', 'AndresGonzález', '10 R', 0, '', 100, 100, 3, 0, 'ningún valor', 0, 0, 0, 'Wednesday 4th of January 2023 07:00:37 PM');

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

CREATE TABLE `horarios` (
  `id` int NOT NULL,
  `dia` varchar(200) COLLATE utf32_spanish2_ci DEFAULT NULL,
  `horarioApertura` time DEFAULT NULL,
  `horarioCierre` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `horarios`
--

INSERT INTO `horarios` (`id`, `dia`, `horarioApertura`, `horarioCierre`) VALUES
(1, 'Lunes', '07:00:00', '17:00:00'),
(5, 'Sabado', '07:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `operarios`
--

CREATE TABLE `operarios` (
  `id` int NOT NULL,
  `nombres` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `operarios`
--

INSERT INTO `operarios` (`id`, `nombres`, `apellidos`) VALUES
(1, 'Edward ', 'Zuleta'),
(2, 'Luis', 'Zuleta'),
(3, 'Deiby', 'Mosquera'),
(4, 'Andres', 'González'),
(5, 'Hernan', 'Ortíz'),
(6, 'Yeison', 'Durango'),
(7, 'Yeison', 'Capera'),
(9, 'Luis', 'Capera');

-- --------------------------------------------------------

--
-- Table structure for table `primeradespacho`
--

CREATE TABLE `primeradespacho` (
  `idPrimera` int NOT NULL,
  `referencia` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `unidades` int NOT NULL,
  `totalKg` int DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `primeradespacho`
--

INSERT INTO `primeradespacho` (`idPrimera`, `referencia`, `unidades`, `totalKg`, `fecha`) VALUES
(231, '10 L', 100, NULL, '2023-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `referenciasladrillo`
--

CREATE TABLE `referenciasladrillo` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf32_spanish2_ci DEFAULT NULL,
  `medidas` varchar(255) COLLATE utf32_spanish2_ci DEFAULT NULL,
  `rendimiento` varchar(255) CHARACTER SET utf32 COLLATE utf32_spanish2_ci DEFAULT NULL,
  `peso` varchar(255) CHARACTER SET utf32 COLLATE utf32_spanish2_ci DEFAULT NULL,
  `referencia` varchar(255) COLLATE utf32_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `referenciasladrillo`
--

INSERT INTO `referenciasladrillo` (`id`, `nombre`, `medidas`, `rendimiento`, `peso`, `referencia`) VALUES
(1, 'Farol Rayado', '10x20x30', '15.5 U/M2', '4.2 kg Aprox.', '10 R'),
(2, 'Farol Rayado', '12x20x30', '15.5 U/M2', '5 kg Aprox.', '12 R'),
(3, 'Farol Liso', '10x20x30', '15.5 U/M2', '4.4 kg Aprox.', '10 L'),
(4, 'Farol Liso', '12x20x30', '15.5 U/M2', '5 kg Aprox.', '12 L\r\n'),
(5, 'Farol División', '7x20x30', '15.5 U/M2', '3.3 kg Aprox.', '7 DV'),
(6, 'Catalán', '10x12x30', '29 U/M2 ', '3.2 kg Aprox.', '10 CT'),
(7, 'Caravista Estructural', '6x12x24', '57 U/M2', '1.8 kg Aprox.', '6 CV'),
(8, 'Esquinero Estructural', '10x12x30', '29 U/M2', '3.2 kg Aprox.', '10 E'),
(9, 'Caravista', '10x7x24', '50 U/M2', '1.5 kg Aprox.', '10 CV'),
(10, 'Estructural', '12x20x30', '15.5 U/M2', '6.2 kg Aprox.', '12 Vertical'),
(11, 'Estructural', '12x21x29', '16 U/M2', '6.5 kg Aprox.', 'V 21'),
(12, 'Estructural', '11.5x23x33', '12.5 U/M2', '7.7 kg Aprox.', '11.5 E'),
(13, 'Farol Rayado Medio', '10x20x15', '31 U/M2', '2.1 kg Aprox.', '10 RM'),
(14, 'Farol Rayado Medio', '12x20x15', '31 U/M2', '2.5 kg Aprox.', '12 RM');

-- --------------------------------------------------------

--
-- Table structure for table `roturadespacho`
--

CREATE TABLE `roturadespacho` (
  `id` int NOT NULL,
  `referencia` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `unidades` int NOT NULL,
  `totalUnidades` int DEFAULT NULL,
  `totalKg` int DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `roturadespacho`
--

INSERT INTO `roturadespacho` (`id`, `referencia`, `unidades`, `totalUnidades`, `totalKg`, `fecha`) VALUES
(1, '10 R', 12, NULL, NULL, '2022-12-07'),
(2, '10 CT', 12, NULL, NULL, '2022-12-07'),
(3, '10 R', 25, NULL, NULL, '2022-12-20'),
(4, '6 CV', 12, NULL, NULL, '2022-12-20'),
(5, '7 DV', 3569, NULL, NULL, '2022-12-21'),
(6, '7 DV', 3569, NULL, NULL, '2022-12-21'),
(7, '10 L', 10, NULL, NULL, '2023-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `segundadespacho`
--

CREATE TABLE `segundadespacho` (
  `idSegunda` int NOT NULL,
  `referencia` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `unidades` int NOT NULL,
  `totalUnidades` int DEFAULT NULL,
  `totalKg` int DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `segundadespacho`
--

INSERT INTO `segundadespacho` (`idSegunda`, `referencia`, `unidades`, `totalUnidades`, `totalKg`, `fecha`) VALUES
(1, '12 R', 457, NULL, NULL, '2022-12-07'),
(2, '12 R', 457, NULL, NULL, '2022-12-07'),
(3, '10 CT', 851, NULL, NULL, '2022-12-07'),
(4, '10 R', 25, NULL, NULL, '2022-12-07'),
(5, '15.5 U/M2', 0, NULL, NULL, '2022-12-13'),
(6, '10 L', 100, NULL, NULL, '2023-01-06'),
(7, '10 L', 100, NULL, NULL, '2023-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `telefonos`
--

CREATE TABLE `telefonos` (
  `id` int NOT NULL,
  `numero` varchar(200) COLLATE utf32_spanish2_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf32_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `telefonos`
--

INSERT INTO `telefonos` (`id`, `numero`, `descripcion`) VALUES
(1, '320 797 1327', 'número de contacto ventas'),
(2, '320 797 1318', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuariosbellavista`
--

CREATE TABLE `usuariosbellavista` (
  `id` int NOT NULL,
  `nombres` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `documentoID` int NOT NULL,
  `passUsuario` varchar(255) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Dumping data for table `usuariosbellavista`
--

INSERT INTO `usuariosbellavista` (`id`, `nombres`, `apellidos`, `documentoID`, `passUsuario`) VALUES
(1, 'Camila', 'Lozano', 1006322009, '12345'),
(2, 'Juan Manuel', 'Ortíz', 1112759632, '6789'),
(3, 'Irma Yaneth', 'Lopez Medina', 1112569369, '1112569369'),
(4, 'Juan Pablo', 'Díaz Pacheco', 1008652342, '1008652342'),
(5, 'lina', 'caicedo', 11515, '11515'),
(6, 'liliana', 'Romaña', 131512, '131512'),
(7, 'katerine', 'Ospina', 464646464, '464646464'),
(9, 'mónica', 'gutiérrez méndez', 12121212, '12121212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carguedescarguehorno`
--
ALTER TABLE `carguedescarguehorno`
  ADD PRIMARY KEY (`idCargueHeader`);

--
-- Indexes for table `carguedescarguehornofooter`
--
ALTER TABLE `carguedescarguehornofooter`
  ADD PRIMARY KEY (`idCargueFooter`),
  ADD KEY `idCargueHeader` (`idCargueHeader`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controldiariodespachos`
--
ALTER TABLE `controldiariodespachos`
  ADD PRIMARY KEY (`idCtrDesp`);

--
-- Indexes for table `controldiariodespachosfooter`
--
ALTER TABLE `controldiariodespachosfooter`
  ADD PRIMARY KEY (`idCrtlDespFoot`),
  ADD KEY `idcontroldiariodespachos` (`idcontroldiariodespachos`);

--
-- Indexes for table `descarguehorno`
--
ALTER TABLE `descarguehorno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operarios`
--
ALTER TABLE `operarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `primeradespacho`
--
ALTER TABLE `primeradespacho`
  ADD PRIMARY KEY (`idPrimera`);

--
-- Indexes for table `referenciasladrillo`
--
ALTER TABLE `referenciasladrillo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roturadespacho`
--
ALTER TABLE `roturadespacho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `segundadespacho`
--
ALTER TABLE `segundadespacho`
  ADD PRIMARY KEY (`idSegunda`);

--
-- Indexes for table `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuariosbellavista`
--
ALTER TABLE `usuariosbellavista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carguedescarguehorno`
--
ALTER TABLE `carguedescarguehorno`
  MODIFY `idCargueHeader` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `carguedescarguehornofooter`
--
ALTER TABLE `carguedescarguehornofooter`
  MODIFY `idCargueFooter` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `controldiariodespachos`
--
ALTER TABLE `controldiariodespachos`
  MODIFY `idCtrDesp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `controldiariodespachosfooter`
--
ALTER TABLE `controldiariodespachosfooter`
  MODIFY `idCrtlDespFoot` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `descarguehorno`
--
ALTER TABLE `descarguehorno`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `operarios`
--
ALTER TABLE `operarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `primeradespacho`
--
ALTER TABLE `primeradespacho`
  MODIFY `idPrimera` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `referenciasladrillo`
--
ALTER TABLE `referenciasladrillo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roturadespacho`
--
ALTER TABLE `roturadespacho`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `segundadespacho`
--
ALTER TABLE `segundadespacho`
  MODIFY `idSegunda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuariosbellavista`
--
ALTER TABLE `usuariosbellavista`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carguedescarguehornofooter`
--
ALTER TABLE `carguedescarguehornofooter`
  ADD CONSTRAINT `carguedescarguehornofooter_ibfk_1` FOREIGN KEY (`idCargueHeader`) REFERENCES `carguedescarguehorno` (`idCargueHeader`);

--
-- Constraints for table `controldiariodespachosfooter`
--
ALTER TABLE `controldiariodespachosfooter`
  ADD CONSTRAINT `controldiariodespachosfooter_ibfk_1` FOREIGN KEY (`idcontroldiariodespachos`) REFERENCES `controldiariodespachos` (`idCtrDesp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
