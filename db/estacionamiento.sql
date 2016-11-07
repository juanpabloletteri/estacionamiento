-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2016 a las 07:32:10
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `patente` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `ingreso` datetime NOT NULL,
  `esta` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `patente`, `ingreso`, `esta`) VALUES
(1, 'ajr453', '2016-11-06 07:50:31', 1),
(2, 'pef544', '2016-11-06 07:50:55', 1),
(6, 'asd1', '2016-11-07 05:07:33', 1),
(14, 'asdf', '2016-11-07 07:12:17', 1),
(16, 'asd111', '2016-11-07 07:16:44', 1),
(24, 'asd', '2016-11-07 07:29:23', 1),
(25, '12', '2016-11-07 07:29:53', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `patente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tiempo` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `dia` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `patente`, `tiempo`, `monto`, `dia`) VALUES
(1, 'asd', 1, 20, '2016-11-07 05:34:44'),
(2, 'ajr453', 22, 100, '2016-11-07 05:35:13'),
(3, 'asd1', 0, 10, '2016-11-07 05:35:36'),
(4, 'asd', 2, 20, '2016-11-07 05:40:36'),
(5, 'asd', 0, 10, '2016-11-07 07:00:41'),
(6, 'asd', 0, 10, '2016-11-07 07:11:22'),
(7, 'asd', 0, 10, '2016-11-07 07:11:31'),
(8, 'asd', 0, 10, '2016-11-07 07:13:39'),
(9, 'asd111', 0, 10, '2016-11-07 07:16:40'),
(10, '12', 0, 10, '2016-11-07 07:19:39'),
(11, '12', 0, 10, '2016-11-07 07:21:20'),
(12, '21', 0, 10, '2016-11-07 07:28:33'),
(13, 'asd', 0, 10, '2016-11-07 07:29:20'),
(14, '12', 0, 10, '2016-11-07 07:29:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `pass`, `mail`, `admin`) VALUES
(1, '1', '1', '', 0),
(2, '2', '22', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patente` (`patente`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
