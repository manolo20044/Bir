-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 00:49:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `telefono1` int(150) NOT NULL,
  `mensaje` varchar(150) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `apellido`, `correo`, `telefono1`, `mensaje`) VALUES
('fffff', 'hggfx', 'fffff@kais.com', 0, 'dsdds'),
('fffff', 'hggfx', 'fffff@kais.com', 0, 'dsdds'),
('wdsd', 'hggfx', 'fffff@kais.com', 0, 'hgfggffg'),
('fffff', 'hggfx', 'fffff@kais.com', 0, 'huhiojo'),
('fffff', 'hggfx', 'manolo@hmmaj.com', 0, '51454655'),
('jajajjaxd', 'hggfx', 'manolo@hmmaj.xn--co-0ja', 0, '123456789'),
('jajajjaxd', 'hggfx', 'fffff@kais.com', 0, '1234567879'),
('jajajjaxd', 'hggfx', 'fffff@kais.com', 0, 'hjola'),
('jose', 'posada', 'manolo@hmmaj.com', 2147483647, 'holaaaaaaaa'),
('monica', 'restrepo', 'manolo@hmmaj.com', 213355226, 'hola'),
('jose', 'posada', 'manolo@hmmaj.com', 2147483647, 'hola'),
('hola', 'pos', 'manolo@gmail.com', 2147483647, 'sswsdd'),
('jajajjaxd', 'hggfx', 'fffff@kais.com', 2147483647, 'xff'),
('fffff', 'hggfx', 'fffff@kais.com', 0, '212'),
('sofia ', 'restrepo', 'sofia@gmail.com', 123, 'hola xd'),
('jajajjaxd', 'posada', 'manolo@gmail.com', 0, '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
