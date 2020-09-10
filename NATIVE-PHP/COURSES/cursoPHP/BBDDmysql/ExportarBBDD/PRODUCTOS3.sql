-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-04-2020 a las 11:45:13
-- Versión del servidor: 5.7.29-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `PRUEBAS`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRODUCTOS3`
--

CREATE TABLE `PRODUCTOS3` (
  `SECCION` varchar(20) DEFAULT NULL,
  `NOMBREARTICULO` varchar(20) DEFAULT NULL,
  `FECHA` varchar(20) DEFAULT NULL,
  `PAISDEORIGEN` varchar(20) DEFAULT NULL,
  `PRECIO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PRODUCTOS3`
--

INSERT INTO `PRODUCTOS3` (`SECCION`, `NOMBREARTICULO`, `FECHA`, `PAISDEORIGEN`, `PRECIO`) VALUES
('DEPORTE', 'Raqueta Wilson', '4/9/1998', 'Holanda', 340.5),
('JUGUETERÍA', 'Muñeca de princesas', '1/10/1998', 'China', 15.45);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
