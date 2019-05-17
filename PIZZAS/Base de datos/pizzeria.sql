-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2019 a las 20:50:21
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `numero` int(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `colonia`, `calle`, `numero`) VALUES
(1, 'Altavista', 'colon', 4),
(2, 'centro', 'Trujano', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ingredientes` varchar(100) NOT NULL DEFAULT 'Sin descripción',
  `fk_tamaño` int(11) DEFAULT NULL,
  `fk_pizzeria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pizzas`
--

INSERT INTO `pizzas` (`id`, `nombre`, `ingredientes`, `fk_tamaño`, `fk_pizzeria`) VALUES
(1, 'hawayana', 'piña', 1, 2),
(2, 'mexicana', 'Sin descripción', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizzeria`
--

CREATE TABLE `pizzeria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pizzeria`
--

INSERT INTO `pizzeria` (`id`, `nombre`) VALUES
(1, ''),
(2, 'Atlantc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamaño`
--

CREATE TABLE `tamaño` (
  `id` int(11) NOT NULL,
  `tamaño` varchar(25) NOT NULL,
  `precio` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tamaño`
--

INSERT INTO `tamaño` (`id`, `tamaño`, `precio`) VALUES
(1, 'chica', 80),
(2, 'mediana', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipou`
--

CREATE TABLE `tipou` (
  `id` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipou`
--

INSERT INTO `tipou` (`id`, `tipo`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `user_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(250) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT '0',
  `edad` int(10) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `fk_pizzeria` int(11) DEFAULT NULL,
  `fk_direccion` int(11) DEFAULT NULL,
  `fk_tipo` int(11) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user_id`, `email`, `password`, `nombre`, `apellido`, `telefono`, `edad`, `sexo`, `direccion`, `ciudad`, `estado`, `fk_pizzeria`, `fk_direccion`, `fk_tipo`, `fecha_registro`) VALUES
(38, 'chantysanzs@gmail.com', '$2y$10$KOELn0eWQYmGbNmP0taI8u4gCk9MR17nHi7jynllVGQWi1zs7wzqS', 'VICENTE', 'PEREZ SANTIAGO ', '9531268423', 20, 'M', 'CALLE: GIRASOL N°4 COL LINDA VISTA ', 'HEROICA CUIDAD  DE TLAXIACO', 'OAXACA', NULL, NULL, 2, '2019-04-26 03:59:34'),
(39, 'virgo@gmail.com', '$2y$10$qAgJTmjQoiY6II.FLHv0vuVX/eAjtZvwXwgW2ddKz.rVn3jvJYiYa', 'CHANTY', 'PEREZ SANTIAGO ', '9531268423', 32, 'M', 'CALLE: GIRASOL N°4 COL LINDA VISTA ', 'HEROICA CUIDAD  DE TLAXIACO', 'OAXACA', NULL, NULL, 1, '2019-04-27 03:32:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tamaño` (`fk_tamaño`),
  ADD KEY `fk_pizzeria` (`fk_pizzeria`);

--
-- Indices de la tabla `pizzeria`
--
ALTER TABLE `pizzeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tamaño`
--
ALTER TABLE `tamaño`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipou`
--
ALTER TABLE `tipou`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_pizzeria` (`fk_pizzeria`),
  ADD KEY `fk_direccion` (`fk_direccion`),
  ADD KEY `fk_tipo` (`fk_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pizzeria`
--
ALTER TABLE `pizzeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tamaño`
--
ALTER TABLE `tamaño`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipou`
--
ALTER TABLE `tipou`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pizzas`
--
ALTER TABLE `pizzas`
  ADD CONSTRAINT `pizzas_ibfk_1` FOREIGN KEY (`fk_tamaño`) REFERENCES `tamaño` (`id`),
  ADD CONSTRAINT `pizzas_ibfk_2` FOREIGN KEY (`fk_pizzeria`) REFERENCES `pizzeria` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_tipo` FOREIGN KEY (`fk_tipo`) REFERENCES `tipou` (`id`),
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fk_pizzeria`) REFERENCES `pizzeria` (`id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`fk_direccion`) REFERENCES `direccion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
