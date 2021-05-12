-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-05-2021 a las 13:28:50
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_gs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `categoria`) VALUES
(1, 'Movilidad'),
(2, 'Zapatillas'),
(3, 'Ropa'),
(4, 'Fitness');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `Id_envio` int(11) NOT NULL,
  `ID_us` int(11) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `CP` int(11) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`Id_envio`, `ID_us`, `Direccion`, `localidad`, `CP`, `telefono`) VALUES
(1, 1, 'c/ colon', 'Valencia', 46030, 153265489),
(8, 41, 'c/colon', 'valencia', 46001, 2424525);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `ID` int(7) UNSIGNED NOT NULL,
  `autor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `respuestas` int(11) NOT NULL DEFAULT 0,
  `identificador` int(7) NOT NULL DEFAULT 0,
  `ult_respuesta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`ID`, `autor`, `titulo`, `mensaje`, `fecha`, `respuestas`, `identificador`, `ult_respuesta`) VALUES
(12, 'paco', '', 'calienta bien antes de la carrera, seguro que ganas', '2008-06-20', 0, 11, '2008-06-20'),
(13, 'marcos', 'como mejorar en el gimnasio', 'llevo muchos meses sin avanzar en mis rutinas', '2009-06-20', 0, 0, '2009-06-20'),
(14, 'lucas', 'entrena fuerte', 'sube pesos poco a poco,y dale duro ', '2009-06-20', 0, 13, '2009-06-20'),
(24, 'Vicente', 'zapatillas para correr', 'estoy buscando unas zapatillas para salir a correr, &iquest;cu&aacute;les me recomendais?', '2011-07-20', 0, 0, '2011-07-20'),
(31, 'Paco', 'Hola', 'hola', '2028-04-21', 0, 13, '2028-04-21'),
(32, 'Paco', 'hola', 'hola', '2006-05-21', 0, 0, '2006-05-21'),
(33, 'Paco', '', 'hola', '2006-05-21', 0, 32, '2006-05-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `ID_us` int(11) NOT NULL,
  `Total` float NOT NULL,
  `Nombre_com` varchar(255) NOT NULL,
  `Direccion_1` varchar(255) NOT NULL,
  `Direccion_2` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Provincia` varchar(255) NOT NULL,
  `CP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `ID_us`, `Total`, `Nombre_com`, `Direccion_1`, `Direccion_2`, `Ciudad`, `Provincia`, `CP`) VALUES
(1, 1, 0, '', '', '', '', '', 0),
(2, 1, 0, '', '', '', '', '', 0),
(3, 1, 390, '', '', '', '', '', 0),
(4, 1, 390, '', '', '', '', '', 0),
(36, 1, 46, '', '', '', '', '', 0),
(37, 1, 46, '', '', '', '', '', 0),
(38, 1, 150, '', '', '', '', '', 0),
(39, 1, 150, '', '', '', '', '', 0),
(40, 1, 25.95, 'Paco', 'C/ Colon', '', 'Valencia', 'Valencia', 46005);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `id_cat`) VALUES
(1, 'Bicicleta', 'bici.png', 120.00, 1),
(2, 'Zapatillas halterofilia', 'zapatillas.jpg', 150.00, 2),
(3, 'Camiseta', 'camiseta.jpg', 30.00, 3),
(10, 'Mancuernas', 'mancuernas.png', 79.95, 4),
(11, 'Mallas', 'mallas.jpg', 20.00, 3),
(12, 'Bandas elásticas', 'bandas.png', 25.95, 4),
(13, 'Nike metcon', 'metcon.png', 85.00, 2),
(14, 'Longboard', 'longboard.png', 59.95, 1),
(15, 'Pantalón', 'pantalon.jpg', 29.99, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_us` int(11) NOT NULL,
  `Nombre_us` varchar(255) NOT NULL,
  `Correo_us` varchar(255) NOT NULL,
  `Edad_us` int(11) NOT NULL,
  `Contrasena_us` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_us`, `Nombre_us`, `Correo_us`, `Edad_us`, `Contrasena_us`) VALUES
(1, 'Paco', 'paco@gmail.com', 23, '$2y$10$2J.QcuHkYhJQPjc7AxJcne0wLoUIpCE2PMu4/ryS4UgPXoLyp2A2q'),
(2, 'Sara', 'sara@gmail.com', 24, '$2y$10$nQx5lxGalCQSsMxinnxsAu0o65aR9wXbxk5CAUunShh70fEkfYlpK'),
(3, 'Lola', 'lola@gmail.com', 23, '$2y$10$mtSo2AjnWb5wmd1TB/DxW.17cyyfsTAaRyfmNVQqVmIcsBsy9f7U2'),
(22, 'maria', 'maria@gmail.com', 23, '$2y$10$XF2.8Nu2sMEY3Yk4BZjXceg.khTKBew1erZ6w420xCQEjOMtvNxD6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`Id_envio`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `ID_us` (`ID_us`);

--
-- Indices de la tabla `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_us`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `Id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`ID_us`) REFERENCES `usuarios` (`ID_us`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
