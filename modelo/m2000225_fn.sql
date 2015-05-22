-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-05-2015 a las 00:15:28
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `m2000225_fn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acces`
--

CREATE TABLE IF NOT EXISTS `acces` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Clave` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `acces`
--

INSERT INTO `acces` (`Id`, `Clave`, `Usuario`) VALUES
(1, 'naveyra2121', 'naveyra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Ubicacion` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo1` varchar(50) NOT NULL,
  `Cuerpo1` varchar(254) NOT NULL,
  `Nota1` varchar(50) NOT NULL,
  `Nota2` varchar(50) NOT NULL,
  `Nota3` varchar(50) NOT NULL,
  `Nota4` varchar(50) NOT NULL,
  `Nota5` varchar(50) NOT NULL,
  `Titulo2` varchar(50) NOT NULL,
  `Cuerpo2` varchar(254) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`Id`, `Titulo1`, `Cuerpo1`, `Nota1`, `Nota2`, `Nota3`, `Nota4`, `Nota5`, `Titulo2`, `Cuerpo2`) VALUES
(9, '', '', '', '', '', '', '', '', ''),
(10, 'asd', '<pre>\r\nsdfsdfsdf</pre>\r\n', 'asd', 'asd', 'asdasd', 'asdasd', 'asdad', 'asd', '<p>asdasd</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
