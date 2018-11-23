-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-11-2018 a las 01:19:42
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticias_rock`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banda`
--

CREATE TABLE `banda` (
  `id_banda` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estilo` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banda`
--

INSERT INTO `banda` (`id_banda`, `nombre`, `estilo`, `url`) VALUES
(10, 'sumo', 'rock', ''),
(11, 'Charly Garcia', 'Rock', ''),
(12, 'bigotete', 'aaa', ''),
(13, 'bigotete', 'modo diablo', ''),
(14, 'bigotete', 'aaa', 'descarga.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentarios` int(50) NOT NULL,
  `comentario` text NOT NULL,
  `puntaje` int(1) NOT NULL,
  `id_banda` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentarios`, `comentario`, `puntaje`, `id_banda`, `id_usuario`) VALUES
(4, 'algo1', 2, 10, 2),
(5, 'algo1', 2, 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `id_banda` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `id_banda`, `titulo`, `descripcion`) VALUES
(2, 10, 'asdasd', 'oooooooooo'),
(3, 10, '', ''),
(4, 10, 'asdasd', 'oooooooooooooooo'),
(5, 11, 'ahora si', 'estamos bien'),
(6, 11, 'ahora si', 'estamos bien');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(300) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `admin`) VALUES
(2, 'pepe', '$2y$12$2yTYRpCjHp6XhGsME1qr.eipnJV4PsNDlXXEsKexyxWVQ9TDsxi1q', 1),
(10, 'gonzalo123', '$2y$10$BThtVQfHfH7gmdQpCdvxne9J6P50g27aLANbYEV.w02rFZwQXqZj2', 1),
(11, 'pepito', '$2y$10$9KYsbvyzkWWQ7TunhJ.Cb.H.sVemD/becRuGjgE6nU1ucET9nB7Ce', 0),
(12, 'pepitos', '$2y$10$RkhmVHm.CJzaOdL1ikc81uul30UqXaTokV5x8imX.cNF0puoHwfz.', 0),
(13, 'tito', '$2y$10$SjtbBzQNQRL0oGgIYzu19.6f9o10B19w3ZliSocgwjECujZ.KU7DK', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banda`
--
ALTER TABLE `banda`
  ADD PRIMARY KEY (`id_banda`),
  ADD KEY `id_banda` (`id_banda`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentarios`),
  ADD KEY `id_banda` (`id_banda`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `id_banda` (`id_banda`),
  ADD KEY `id_banda_2` (`id_banda`),
  ADD KEY `id_noticia` (`id_noticia`),
  ADD KEY `id_banda_3` (`id_banda`),
  ADD KEY `id_noticia_2` (`id_noticia`),
  ADD KEY `id_noticia_3` (`id_noticia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banda`
--
ALTER TABLE `banda`
  MODIFY `id_banda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentarios` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_banda`) REFERENCES `banda` (`id_banda`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`id_banda`) REFERENCES `banda` (`id_banda`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
