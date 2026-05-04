-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2026 a las 17:36:17
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
-- Base de datos: `corralapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentacion`
--

CREATE TABLE `alimentacion` (
  `id_alimentacion` int(11) NOT NULL,
  `id_lote` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `libras` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alimentacion`
--

INSERT INTO `alimentacion` (`id_alimentacion`, `id_lote`, `fecha`, `libras`) VALUES
(5, 4, '2026-02-12', 8.00),
(6, 5, '2026-03-06', 2.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_sesion`
--

CREATE TABLE `inicio_sesion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inicio_sesion`
--

INSERT INTO `inicio_sesion` (`id`, `nombre`, `apellido`, `usuario`, `contraseña`) VALUES
(1, 'Ulises ', 'Gonzalez', 'Ulises15', 'ulises1520'),
(1, 'Ulises ', 'Gonzalez', 'Ulises15', 'ulises1520');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes`
--

CREATE TABLE `lotes` (
  `id_lote` int(11) NOT NULL,
  `parcela` varchar(10) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `cantidad_cerdos` int(11) NOT NULL,
  `estado` enum('activo','cerrado') DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lotes`
--

INSERT INTO `lotes` (`id_lote`, `parcela`, `fecha_inicio`, `fecha_fin`, `cantidad_cerdos`, `estado`) VALUES
(4, 'Parcela1', '2026-02-11', '2026-02-11', 6, 'cerrado'),
(5, 'Parcela1', '2026-03-06', '2026-03-06', 2, 'cerrado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  ADD PRIMARY KEY (`id_alimentacion`),
  ADD KEY `id_lote` (`id_lote`);

--
-- Indices de la tabla `lotes`
--
ALTER TABLE `lotes`
  ADD PRIMARY KEY (`id_lote`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  MODIFY `id_alimentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `lotes`
--
ALTER TABLE `lotes`
  MODIFY `id_lote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  ADD CONSTRAINT `alimentacion_ibfk_1` FOREIGN KEY (`id_lote`) REFERENCES `lotes` (`id_lote`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
