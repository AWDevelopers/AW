-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2016 a las 12:55:18
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `incommong`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idProducto` int(10) NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `DNIUsuario` varchar(9) NOT NULL,
  `numProductos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `donaciones_id` bigint(20) NOT NULL,
  `DNIUsuario` varchar(9) NOT NULL,
  `idProyecto` int(10) NOT NULL,
  `donacion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `donaciones`
--

INSERT INTO `donaciones` (`donaciones_id`, `DNIUsuario`, `idProyecto`, `donacion`) VALUES
(2, '01234567A', 123456, 3),
(3, '01234567A', 123456, 5),
(4, '01234567A', 123456, 456),
(5, '01234567A', 123456, 54),
(6, '01234567A', 123456, 46),
(7, '01234567A', 123456, 34),
(8, '01234567A', 123456, 65),
(9, '01234567A', 123456, 65),
(10, '01234567A', 123456, 65),
(11, '01234567A', 123456, 65),
(12, '01234567A', 123456, 56),
(13, '01234567A', 123456, 56),
(14, '01234567A', 123456, 56),
(15, '01234567A', 123456, 56),
(16, '01234567A', 123456, 54),
(18, '01234567A', 123456, 345),
(19, '01234567A', 123456, 654),
(20, '01234567A', 123456, 654),
(21, '01234567A', 123456, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(10) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `tipo` enum('primaria','secundaria','terciaria','otra') NOT NULL,
  `descripcionCorta` text,
  `descripcionLarga` text NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ong`
--

CREATE TABLE `ong` (
  `CIF` varchar(9) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ong`
--

INSERT INTO `ong` (`CIF`, `nombre`, `direccion`, `email`, `usuario`, `pass`, `telefono`) VALUES
('000000000', ' World Wildlife Fund (WWF)', 'Gran Vía de San Francisco, 8', 'info@wwf.es', 'wwfSpain', 'wwfSpain', 913540578),
('000000001', 'Cruz Roja', 'Avenida Reina Victoria, 26', 'informa@cruzroja.es', 'CruzRoja', 'CruzRojaEspaña', 902222292),
('000000002', 'Save the Children', 'Calle Doctor Esquerdo, 138', 'online@savethechildren.es', 'SaveTheChildren', 'savethechildrenSpain', 915130500),
('000000003', 'Aldeas Infantiles', 'Calle Angelita Cavero, 9', 'mpardal@aldeasinfantiles.es', 'AldeasInfantiles', 'aldeasInfantSpain', 902332222),
('000000004', 'Amnistia Internacional', 'Fernando VI, 8', 'info@es.amnesty.org', 'AmnistiaInterSpain', 'amnistiaInterSpain', 913101277),
('000000005', 'Caritas', 'San Bernardo, 99', 'correo@caritas.es', 'CaritasEspaña', 'caritasEspaña', 914441000),
('123456789', 'nuevo', 'c/Juan de la Rosa, 1', 'prueba@prueba.com', 'newuser', 'hoola', 98765432);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcionCorta` mediumtext NOT NULL,
  `descripcionLarga` longtext NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `idProyecto` int(10) NOT NULL,
  `CIFOng` varchar(9) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dineroNecesario` int(11) NOT NULL,
  `dineroAcumulado` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(50) NOT NULL,
  `descripcionCorta` mediumtext NOT NULL,
  `descripcionLarga` longtext NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `numVoluntarios` int(11) NOT NULL,
  `fechaFin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idProyecto`, `CIFOng`, `fechaCreacion`, `dineroNecesario`, `dineroAcumulado`, `nombre`, `descripcionCorta`, `descripcionLarga`, `imagen`, `numVoluntarios`, `fechaFin`) VALUES
(9, '000000003', '2016-06-16 19:32:12', 8000, 0, 'prueba3', 'Introduce descripcion corta...', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(10, '000000001', '2016-06-16 19:36:48', 300000, 0, 'prueba4', 'Introduce descripcion corta...', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(11, '000000002', '2016-06-16 19:41:59', 300000, 0, 'ayuda', 'amnistia', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(12, '000000002', '2016-06-16 19:42:55', 300000, 0, 'comprar', 'comprar', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(13, '000000002', '2016-06-16 19:43:23', 300000, 0, 'comprar', 'comprar', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(14, '000000002', '2016-06-16 19:44:16', 300000, 0, 'comprar', 'comprar', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(15, '000000002', '2016-06-16 19:44:51', 300000, 0, 'comprar', 'comprar', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(16, '000000002', '2016-06-16 19:45:25', 300000, 0, 'comprar', 'comprar', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(17, '000000002', '2016-06-16 19:46:08', 300000, 0, 'comprar', 'comprar', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(18, '000000002', '2016-06-16 19:46:27', 300000, 0, 'comprar', 'comprar', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(19, '000000002', '2016-06-16 19:47:43', 300000, 0, 'comprar', 'comprar', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(20, '000000002', '2016-06-16 19:50:28', 300000, 0, 'comprar', 'comprar', 'Introduce descripcion larga...', 'img/imagen.png', 50, '2016-06-17 17:09:24'),
(23, '000000001', '2016-06-16 20:23:27', 3000000, 0, 'ThankYou', 'Introduce descripcion corta...', 'Introduce descripcion larga...', 'img/Thankyou.png', 50, '2016-06-17 17:09:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` varchar(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `cp` int(10) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `avatar` tinytext,
  `sexo` enum('Masculino','Femenino','','') NOT NULL,
  `telefono` int(11) NOT NULL,
  `tipo` enum('Admin','User','','') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`DNI`, `nombre`, `apellidos`, `direccion`, `cp`, `usuario`, `pass`, `email`, `fechaNacimiento`, `avatar`, `sexo`, `telefono`, `tipo`) VALUES
('000000000', 'WWF España', '', 'Gran Vía de San Francisco, 8', NULL, 'wwfSpain', 'wwfSpain', 'info@wwf.es', '0000-00-00', 'img/panda.png', '', 913540578, 'User'),
('000000001', 'Cruz Roja', '', 'Avenida Reina Victoria, 26', NULL, 'CruzRoja', 'CruzRojaEspaña', 'informa@cruzroja.es', '0000-00-00', 'img/layout_set_logo.png', '', 902222292, 'User'),
('000000002', 'Save the Children', '', 'Calle Doctor Esquerdo, 138', NULL, 'SaveTheChildren', 'savethechildrenSpain', 'online@savethechildren.es', '0000-00-00', 'img/STC.png', '', 915130500, 'User'),
('000000003', 'Aldeas Infantiles', '', 'Calle Angelita Cavero, 9', NULL, 'AldeasInfantiles', 'aldeasInfantSpain', 'mpardal@aldeasinfantiles.es', '0000-00-00', 'img/Logo_AldeasInfantilesSOS.jpg', '', 902332222, 'User'),
('000000004', 'Amnistia Internacion', '', 'Fernando VI, 8', NULL, 'AmnistiaInterSpain', 'amnistiaInterSpain', 'info@es.amnesty.org', '0000-00-00', 'img/Logo Amnistía Internacional_2.jpg', '', 913101277, 'User'),
('000000005', 'Caritas', '', 'San Bernardo, 99', NULL, 'CaritasEspaña', 'caritasEspaña', 'correo@caritas.es', '0000-00-00', 'img/09e48e4c.jpg', '', 914441000, 'User'),
('01234567A', 'pepe', 'pepe', 'c/holacaracola nÂº1', 12345, 'pepe', 'pepe', 'pepe@pepe.com', '1978-03-12', '', 'Masculino', 123456789, 'User'),
('123456789', 'nuevo', '', 'c/Juan de la Rosa, 1', NULL, 'newuser', 'hoola', 'prueba@prueba.com', '0000-00-00', NULL, '', 98765432, 'User'),
('3456789', 'dewfew', '', 'fregteh', NULL, 'wwfAdmin', 'holita', 'gregre@fegre,com', '0000-00-00', NULL, '', 987654321, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntarios`
--

CREATE TABLE `voluntarios` (
  `idVoluntariado` int(10) NOT NULL,
  `idProyecto` int(10) NOT NULL,
  `DNIUsuario` varchar(9) NOT NULL,
  `dia` date NOT NULL,
  `horaEntrada` int(4) NOT NULL,
  `horaSalida` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idProducto`,`CIFOng`,`DNIUsuario`),
  ADD KEY `DNIUsuario` (`DNIUsuario`),
  ADD KEY `CIFOng` (`CIFOng`);

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`donaciones_id`),
  ADD KEY `idProyecto` (`idProyecto`),
  ADD KEY `DNIUsuario` (`DNIUsuario`,`idProyecto`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`CIF`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `CIF` (`CIF`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD UNIQUE KEY `idProducto` (`idProducto`,`CIFOng`),
  ADD KEY `CIFOng` (`CIFOng`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idProyecto`),
  ADD UNIQUE KEY `idProyecto` (`idProyecto`,`CIFOng`),
  ADD KEY `CIFOng` (`CIFOng`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`DNI`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indices de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD PRIMARY KEY (`idVoluntariado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `donaciones_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idProyecto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  MODIFY `idVoluntariado` int(10) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`DNIUsuario`) REFERENCES `usuario` (`DNI`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`CIFOng`) REFERENCES `ong` (`CIF`),
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD CONSTRAINT `Donaciones_ibfk_1` FOREIGN KEY (`DNIUsuario`) REFERENCES `usuario` (`DNI`),
  ADD CONSTRAINT `Donaciones_ibfk_2` FOREIGN KEY (`idProyecto`) REFERENCES `proyecto` (`idProyecto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`CIFOng`) REFERENCES `ong` (`CIF`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`CIFOng`) REFERENCES `ong` (`CIF`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
