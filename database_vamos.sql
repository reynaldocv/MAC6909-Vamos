-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2018 a las 02:31:06
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id6942128_vamos`
--
CREATE DATABASE IF NOT EXISTS `id6942128_vamos` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id6942128_vamos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_hobbie` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `data_evento` datetime NOT NULL,
  `max_` int(11) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `data_public` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `id_usuario`, `id_hobbie`, `id_lugar`, `data_evento`, `max_`, `comentario`, `data_public`) VALUES
(25, 48, 1, 1, '2018-10-22 13:54:20', 0, 'vamos bailar???\r\n\r\n                ', '2018-10-22 13:54:20'),
(26, 49, 1, 1, '2018-10-22 14:01:46', 0, '\r\n\r\n                la vida es un kaos', '2018-10-22 14:01:46'),
(27, 49, 1, 1, '2018-10-22 14:02:02', 0, '\r\n\r\n            Vamos pular aulas...    ', '2018-10-22 14:02:02'),
(28, 50, 1, 1, '2018-10-22 14:03:29', 0, '\r\n\r\n                Opa, vamos jogar sinuca!!!', '2018-10-22 14:03:29'),
(29, 52, 1, 1, '2018-10-22 14:24:02', 0, 'Corrida de 5 km...\r\n\r\n                ', '2018-10-22 14:24:02'),
(30, 51, 1, 1, '2018-10-22 14:30:41', 0, '\r\n\r\n               Corrida de 10 KM, parque Ibitapuera...\r\n13 de janeiro do 2019...', '2018-10-22 14:30:41'),
(31, 49, 1, 1, '2018-10-22 16:51:44', 0, '\r\n\r\n      Vamos correr....???          ', '2018-10-22 16:51:44'),
(32, 53, 1, 1, '2018-10-22 16:55:28', 0, 'Vamos bailar???\r\n', '2018-10-22 16:55:28'),
(33, 53, 1, 1, '2018-10-22 16:55:42', 0, '\r\nVamos nadar!!!\r\n                ', '2018-10-22 16:55:42'),
(34, 54, 1, 1, '2018-10-22 17:21:44', 0, '\r\n\r\n           Vamos fazer uma trilha????     ', '2018-10-22 17:21:44'),
(35, 52, 1, 1, '2018-10-22 17:22:25', 0, 'Marathon 42 km\r\n\r\n                ', '2018-10-22 17:22:25'),
(36, 52, 1, 1, '2018-10-22 17:22:50', 0, '\r\n\r\n                Marathon 21 KM, Parque Villa Lobos', '2018-10-22 17:22:50'),
(37, 52, 1, 1, '2018-10-22 17:39:41', 0, 'Corrida 5/10 km.\r\n\r\n                ', '2018-10-22 17:39:41'),
(38, 52, 1, 1, '2018-10-22 17:39:42', 0, '\r\nCorrida 10/20 km...\r\n                ', '2018-10-22 17:39:42'),
(39, 15, 1, 1, '2018-10-23 00:33:14', 0, '\r\n\r\n                vamos jogar sinuca', '2018-10-23 00:33:14'),
(40, 53, 1, 1, '2018-10-23 00:41:46', 0, '\r\nJugaremos\r\n                ', '2018-10-23 00:41:46'),
(41, 53, 1, 1, '2018-10-23 00:42:31', 0, '\r\nJugaremos amanha\r\n                ', '2018-10-23 00:42:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hobbie`
--

CREATE TABLE `hobbie` (
  `id_hobbie` int(11) NOT NULL,
  `tipohobbie` int(11) NOT NULL,
  `hobbie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hobbie`
--

INSERT INTO `hobbie` (`id_hobbie`, `tipohobbie`, `hobbie`) VALUES
(1, 1, 'Runnning'),
(2, 1, 'Biking'),
(3, 1, 'Caminhada'),
(4, 3, 'Xadrez'),
(5, 2, 'Videogames'),
(6, 2, 'Movies'),
(7, 2, 'Food/snacks'),
(8, 2, 'Pets'),
(9, 1, 'Swimming'),
(10, 0, 'Floricultura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id_lugar` int(11) NOT NULL,
  `lugar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id_lugar`, `lugar`) VALUES
(1, 'Parque Ibirapuera'),
(2, 'Parque Villalobos'),
(3, 'Parque Carmo'),
(4, ''),
(5, 'Parque da Luz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_hobbie`
--

CREATE TABLE `tipo_hobbie` (
  `id_tipohobbie` int(11) NOT NULL,
  `desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_hobbie`
--

INSERT INTO `tipo_hobbie` (`id_tipohobbie`, `desc`) VALUES
(1, 'esporte'),
(2, 'Hobbies con animais'),
(3, 'Food'),
(4, 'arte'),
(5, 'tableiro'),
(6, 'indoor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_facebook` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `apodo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `foto` varchar(300) NOT NULL,
  `empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_facebook`, `email`, `nombre`, `apellidos`, `sexo`, `fecha_nac`, `apodo`, `descripcion`, `password`, `foto`, `empresa`) VALUES
(15, '', '1@1.1', 'Reynaldo', 'cv', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(17, NULL, '1@1.2', 'Juan', '321', 'M', NULL, NULL, NULL, '3', 'M.png', 0),
(18, NULL, '1@1.3', 'Luis', 'Marcos', 'M', NULL, NULL, NULL, '3', 'M.png', 0),
(19, NULL, '1@1.4', 'Marcos', 'Marcos', 'M', NULL, NULL, NULL, '5', 'M.png', 0),
(20, NULL, '1@1.5', 'Luis', 'Marcos', 'M', NULL, NULL, NULL, '5', 'M.png', 0),
(21, NULL, '1@1.6', 'Jose', '321', 'M', NULL, NULL, NULL, '21321', 'M.png', 0),
(22, NULL, '1@1.8', 'Marcelo', 'qweqwe', 'F', NULL, NULL, NULL, '2', 'F.png', 0),
(23, NULL, '1@1.12', 'Maria', 'qweqwe', 'F', NULL, NULL, NULL, '32', 'F.png', 0),
(24, NULL, '1@1.21', 'Sheila', '321', 'F', NULL, NULL, NULL, '23', 'F.png', 0),
(25, NULL, '1@1.23', 'Ricardo', '321', 'M', NULL, NULL, NULL, '3', 'M.png', 0),
(26, NULL, '1@1.334', 'Cain', '321', 'M', NULL, NULL, NULL, '34', 'M.png', 0),
(27, NULL, '2@2.2', 'Adan', '321', 'X', NULL, NULL, NULL, '2', 'M.png', 0),
(28, '', 'r2@2.2', '123', '321', 'X', NULL, NULL, NULL, 'r', 'X.png', 0),
(29, NULL, '1@1.13', '123', 'qweqwe', 'M', NULL, NULL, NULL, '32', 'M.png', 0),
(30, NULL, '1@1.232', '132131', '123123', 'F', NULL, NULL, NULL, '213', 'F.png', 0),
(31, NULL, '1@1.2322', '132131', '123123', 'F', NULL, NULL, NULL, '2312', 'F.png', 0),
(32, NULL, '1@1.111', '12wqeqw', 'qweqwe', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(33, NULL, '1@1.1111', '12wqeqw', 'qweqwe', 'M', NULL, NULL, NULL, '23', 'M.png', 0),
(34, NULL, '1@1.22', '123', '213', 'M', NULL, NULL, NULL, '2313', 'M.png', 0),
(35, NULL, 'miguel@1.1', 'Miguel', 'Catro', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(36, NULL, '1@1.11111', '12wqeqw', '123', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(37, NULL, '1@1.1111111', '12wqeqw', '321', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(38, NULL, '1@1.32323', '12wqeqw', '321', 'M', NULL, NULL, NULL, '123', 'M.png', 0),
(39, NULL, '1@1.32323232', '12wqeqw', '321', 'M', NULL, NULL, NULL, 'daasd', 'M.png', 0),
(40, NULL, '1@1.323232321', '12wqeqw', '321', 'M', NULL, NULL, NULL, '123123', 'M.png', 0),
(41, NULL, '1@1.3232323214', '12wqeqw', '321', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(42, NULL, '1@1.3232323214e', '12wqeqw', '321', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(43, NULL, '1@1.3232323214ee', '12wqeqw', '321', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(44, NULL, '1@1.3232323214ee3', '12wqeqw', '321', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(45, NULL, '1@1.3232323214ee3e', '12wqeqw', '321', 'M', NULL, NULL, NULL, '12', 'M.png', 0),
(46, NULL, '1@1.3232323214ee3e1', '12wqeqw', '321', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(47, NULL, '1@1.32ww', '12wqeqw', '321', 'M', NULL, NULL, NULL, '1', 'M.png', 0),
(48, NULL, '3@3.3', 'Lucia', 'Castro', 'F', NULL, NULL, NULL, '3', 'F.png', 0),
(49, NULL, '4@4.4', 'Cain', 'Castro', 'X', NULL, NULL, NULL, '4', 'X.png', 0),
(50, NULL, '5@5.5', 'Leoncio', 'Castro', 'M', NULL, NULL, NULL, '5', 'M.png', 0),
(51, NULL, 'ADIDAS@ADIDAS.ADIDAS', 'ADIDAS', ':', 'M', NULL, NULL, NULL, 'ADIDAS', 'adidas.png', 1),
(52, NULL, 'NIKE@NIKE.NIKE', 'NIKE', ':', 'M', NULL, NULL, NULL, 'NIKE', 'nike.png', 1),
(53, NULL, '6@6.6', 'Josefa', '.P', 'F', NULL, NULL, NULL, '6', 'F.png', 0),
(54, NULL, '7@7.7', 'Seven', '.P', 'F', NULL, NULL, NULL, '7', 'F.png', 0),
(55, NULL, 'J@J.J', 'Jesus', '.P', 'X', NULL, NULL, NULL, 'J', 'X.png', 0),
(56, NULL, 'NIKE@NIKE.NIKE1', 'Jesus', '21', 'X', NULL, NULL, NULL, '123', 'X.png', 0),
(57, NULL, 'J@J.J1', 'Josue', ':', 'X', NULL, NULL, NULL, 'J', 'X.png', 0),
(58, NULL, '8@8.8', 'Eight', 'E', 'M', NULL, NULL, NULL, '8', 'M.png', 0),
(59, NULL, 'M@M.M', 'Maria', 'Maria', 'F', NULL, NULL, NULL, 'M', 'F.png', 0),
(60, NULL, 'user@user.com', 'user', 'User', 'M', NULL, NULL, NULL, 'user', 'M.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariohobbie`
--

CREATE TABLE `usuariohobbie` (
  `email` varchar(50) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `h1` int(11) NOT NULL,
  `h2` int(11) NOT NULL,
  `h3` int(11) NOT NULL,
  `h4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariohobbie`
--

INSERT INTO `usuariohobbie` (`email`, `desc`, `h1`, `h2`, `h3`, `h4`) VALUES
('1@1.32ww', '', 1, 2, 4, 5),
('1@1.32ww', '', 1, 2, 4, 5),
('1@1.32ww', '', 1, 3, 5, 7),
('1@1.32ww', '', 1, 3, 5, 7),
('1@1.32ww', '', 1, 3, 5, 7),
('3@3.3', '', 3, 1, 5, 8),
('3', '', 3, 1, 5, 8),
('3@3.3', '', 3, 1, 5, 8),
('3@3.3', '', 1, 2, 6, 7),
('3@3.3', '', 1, 3, 6, 6),
('3@3.3', '', 1, 2, 4, 5),
('4@4.4', '', 3, 9, 5, 10),
('4@4.4', '', 3, 9, 5, 10),
('5@5.5', '', 1, 3, 6, 6),
('E', '', 1, 3, 6, 5),
('E', '', 1, 2, 4, 6),
('E', '', 2, 3, 5, 6),
('E', '', 1, 2, 5, 6),
('ADIDAS@ADIDAS.ADIDAS', '', 1, 2, 5, 6),
('NIKE@NIKE.NIKE', '', 2, 3, 5, 7),
('6@6.6', '', 1, 3, 6, 6),
('7@7.7', '', 2, 3, 7, 8),
('8@8.8', '', 2, 2, 5, 6),
('8@8.8', '', 2, 2, 5, 6),
('8@8.8', '', 3, 9, 6, 5),
('M@M.M', '', 1, 2, 5, 6),
('user@user.com', '', 1, 3, 4, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `hobbie`
--
ALTER TABLE `hobbie`
  ADD PRIMARY KEY (`id_hobbie`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id_lugar`);

--
-- Indices de la tabla `tipo_hobbie`
--
ALTER TABLE `tipo_hobbie`
  ADD PRIMARY KEY (`id_tipohobbie`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `hobbie`
--
ALTER TABLE `hobbie`
  MODIFY `id_hobbie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id_lugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_hobbie`
--
ALTER TABLE `tipo_hobbie`
  MODIFY `id_tipohobbie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
