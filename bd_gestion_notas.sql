-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2020 a las 17:36:27
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_gestion_notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_administrador`
--

CREATE TABLE `tbl_administrador` (
  `id_administrador` int(11) NOT NULL,
  `email_administrador` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_administrador` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_administrador`
--

INSERT INTO `tbl_administrador` (`id_administrador`, `email_administrador`, `password_administrador`) VALUES
(1, 'admin@admin.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre_alumno` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `apellidop_alumno` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `apellidom_alumno` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `grupo_alumno` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email_alumno` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `passwd_alumno` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`id_alumno`, `nombre_alumno`, `apellidop_alumno`, `apellidom_alumno`, `grupo_alumno`, `email_alumno`, `passwd_alumno`) VALUES
(1, 'xavi', 'barrios', 'rodriguez', '1', 'xavi@gmail.com', '1234'),
(4, 'alex', 'rodriguez', 'padilla', 'daw', 'alex@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'xavi', 'jara', 'noseque', 'daw', 'xavija@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'manel', 'portillo', 'martines', 'daw', 'manel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_nota`
--

CREATE TABLE `tbl_nota` (
  `id_nota` int(11) NOT NULL,
  `nombre_asignatura_nota` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `nota_nota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `tbl_nota`
--
ALTER TABLE `tbl_nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD UNIQUE KEY `id_alumno` (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_nota`
--
ALTER TABLE `tbl_nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_nota`
--
ALTER TABLE `tbl_nota`
  ADD CONSTRAINT `tbl_nota_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `tbl_alumno` (`id_alumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
