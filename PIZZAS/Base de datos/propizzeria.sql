-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2019 a las 22:14:10
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
-- Base de datos: `propizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `id_detalle_venta` int(11) NOT NULL,
  `fk_venta` int(11) NOT NULL,
  `fk_pizza` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta_pizza` decimal(11,2) NOT NULL,
  `descuento` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalleventa`
--

INSERT INTO `detalleventa` (`id_detalle_venta`, `fk_venta`, `fk_pizza`, `cantidad`, `precio_venta_pizza`, `descuento`) VALUES
(1, 1, 3, 3, '120.00', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preciopizza`
--

CREATE TABLE `preciopizza` (
  `id_precio` int(11) NOT NULL,
  `precio` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `preciopizza`
--

INSERT INTO `preciopizza` (`id_precio`, `precio`) VALUES
(1, 85),
(2, 120),
(3, 160),
(4, 210),
(5, 280);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamañopizza`
--

CREATE TABLE `tamañopizza` (
  `id_tamaño` int(11) NOT NULL,
  `tamaño` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tamañopizza`
--

INSERT INTO `tamañopizza` (`id_tamaño`, `tamaño`) VALUES
(1, 'pequeña'),
(2, 'mediana'),
(3, 'grande'),
(4, 'extragrande'),
(5, 'familiar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopizza`
--

CREATE TABLE `tipopizza` (
  `id_pizza` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `ingredientes` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `fk_tamaño` int(11) NOT NULL,
  `fk_precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipopizza`
--

INSERT INTO `tipopizza` (`id_pizza`, `nombre`, `imagen`, `ingredientes`, `descripcion`, `fk_tamaño`, `fk_precio`) VALUES
(1, 'peperoni', 'urlll', 'peperoni, queso, masa', 'excelente sabor en cuanto a pizza peperoni se trata orilla rellena de queso con ajonjoli', 3, 3),
(3, 'hawaina', 'urrrl1', 'piña, queso, masa', 'excelente calidad y sabor en pizza hawaina \r\ncon orilla rellena de queso manchego', 5, 5),
(4, 'mexicana', 'ggag', 'jitomate, etc', 'excelente paladar en pizzas al estilo mexicana', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipou`
--

CREATE TABLE `tipou` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipou`
--

INSERT INTO `tipou` (`id`, `tipo`) VALUES
(1, 'administrador'),
(3, 'cliente'),
(2, 'vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `sexo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fk_tipo` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user_id`, `email`, `password`, `nombre`, `apellidos`, `telefono`, `edad`, `sexo`, `direccion`, `ciudad`, `estado`, `fk_tipo`, `fecha_registro`) VALUES
(1, 'cha@gmail.com', '123', 'aa', 'aaa', 'aaaaaaa', 33, '', 'sssssssssssssssss', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', 3, '2019-05-19 03:25:39'),
(2, 'jua@gmail.com', '11111111111111111', '1111111111111', '111111111111111111', '11111', 12, '', '11111111111111111111111', '111111111111111111111111111111111', '11111111111111111111111111', 2, '2019-05-19 03:25:39'),
(3, 'virgo1@gmail.com', '$2y$10$8l0S1dGVj8G.yuazgBQfFuH/M8x3MtOlLVPV45/rFhUX22sN4EfQa', 'VICENTE', 'PEREZ SANTIAGO', '9531268423', 21, 'F', 'COL FLORES MAGON S/N ', 'TLAXIACO', 'OAXACA', 1, '2019-05-19 19:54:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `fk_cliente` int(11) NOT NULL,
  `fk_vendedor` int(11) NOT NULL,
  `tipo_comprobante` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `num_comprobante` int(11) NOT NULL,
  `impuesto` decimal(4,2) NOT NULL,
  `total_venta` decimal(11,2) NOT NULL,
  `fecha_venta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fk_cliente`, `fk_vendedor`, `tipo_comprobante`, `num_comprobante`, `impuesto`, `total_venta`, `fecha_venta`) VALUES
(1, 1, 2, 'ticket', 11, '12.20', '500.00', '2019-05-19 03:27:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`id_detalle_venta`),
  ADD KEY `fk_tipopizza` (`fk_pizza`),
  ADD KEY `fk_detalleventa_venta` (`fk_venta`);

--
-- Indices de la tabla `preciopizza`
--
ALTER TABLE `preciopizza`
  ADD PRIMARY KEY (`id_precio`);

--
-- Indices de la tabla `tamañopizza`
--
ALTER TABLE `tamañopizza`
  ADD PRIMARY KEY (`id_tamaño`);

--
-- Indices de la tabla `tipopizza`
--
ALTER TABLE `tipopizza`
  ADD PRIMARY KEY (`id_pizza`),
  ADD KEY `fk_tamañop` (`fk_tamaño`),
  ADD KEY `fk_preciop` (`fk_precio`);

--
-- Indices de la tabla `tipou`
--
ALTER TABLE `tipou`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uniquetelefono` (`telefono`),
  ADD KEY `fk_usuario_tipou` (`fk_tipo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_venta_usuariocliente` (`fk_cliente`),
  ADD KEY `fk_venta_usuariovendedor` (`fk_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `id_detalle_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `preciopizza`
--
ALTER TABLE `preciopizza`
  MODIFY `id_precio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tamañopizza`
--
ALTER TABLE `tamañopizza`
  MODIFY `id_tamaño` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipopizza`
--
ALTER TABLE `tipopizza`
  MODIFY `id_pizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipou`
--
ALTER TABLE `tipou`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `fk_detalleventa_venta` FOREIGN KEY (`fk_venta`) REFERENCES `venta` (`id_venta`),
  ADD CONSTRAINT `fk_tipopizza` FOREIGN KEY (`fk_pizza`) REFERENCES `tipopizza` (`id_pizza`);

--
-- Filtros para la tabla `tipopizza`
--
ALTER TABLE `tipopizza`
  ADD CONSTRAINT `fk_preciop` FOREIGN KEY (`fk_precio`) REFERENCES `preciopizza` (`id_precio`),
  ADD CONSTRAINT `fk_tamañop` FOREIGN KEY (`fk_tamaño`) REFERENCES `tamañopizza` (`id_tamaño`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_tipou` FOREIGN KEY (`fk_tipo`) REFERENCES `tipou` (`id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_usuariocliente` FOREIGN KEY (`fk_cliente`) REFERENCES `usuario` (`user_id`),
  ADD CONSTRAINT `fk_venta_usuariovendedor` FOREIGN KEY (`fk_vendedor`) REFERENCES `usuario` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
