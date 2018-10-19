-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2018 a las 05:29:38
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
  `estilo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banda`
--

INSERT INTO `banda` (`id_banda`, `nombre`, `estilo`) VALUES
(9, 'Sumo', 'Rock'),
(10, 'Los Pericos', 'Reggae'),
(11, 'Charly Garcia', 'Rock');

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
(9, 9, 'Se cumplen 30 años de la muerte de Luca Prodan', 'Rebelde, polémico, frontal, talentoso y tantas otras cosas más… Si hay personas que marcan un antes y un después, Luca Prodan es sin dudas una de esas personas para nuestro rock. Hace 30 años su voz se apagaba para siempre, pero nacía la leyenda.'),
(10, 9, 'PUBLICARON FOTO INÉDITA DE SUMO', 'UNA PERSONA COMPARTIÓ EN FACEBOOK UNA IMAGEN DE UN SHOW DEL GRUPO EN UNA DISCO DE BERISSO.\r\n'),
(12, 11, 'Charly García, en el  Rex no hay mas entradas ', 'Nuevamente, como si se tratase de un ritual, las entradas para ver a Charly García y su Torre de Tesla se agotaron hoy en cuestión de minutos -tanto las que se vendían por Internet como las que estaban disponibles en la boletería del Gran Rex, donde tocará el martes. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`) VALUES
(2, 'pepe', '$2y$12$2yTYRpCjHp6XhGsME1qr.eipnJV4PsNDlXXEsKexyxWVQ9TDsxi1q');

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
  MODIFY `id_banda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`id_banda`) REFERENCES `banda` (`id_banda`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
