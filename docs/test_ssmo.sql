-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2022 a las 16:15:32
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_ssmo`
--
CREATE DATABASE IF NOT EXISTS `test_ssmo` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `test_ssmo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionarios`
--

CREATE TABLE `funcionarios` (
  `rut_funcionario` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_funcionario` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_funcionario` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento_funcionario` date NOT NULL,
  `estado_funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `funcionarios`
--

INSERT INTO `funcionarios` (`rut_funcionario`, `nombre_funcionario`, `direccion_funcionario`, `fecha_nacimiento_funcionario`, `estado_funcionario`) VALUES
('17530766-4', 'Montague Breckinridge', 'Calle Serrano N°8', '1950-05-06', 1),
('29687581-3', 'Kentucky Murdoch', 'Bernardo O’Higgins N°656', '1991-03-06', 0),
('33295369-9', 'Tobias Wentworth', 'Av. Independencia N°777', '1982-09-09', 0),
('47532736-5', 'Oklahoma Sanderson', 'Calle Eusebio Lillo N°11', '2002-06-02', 1),
('82492817-7', 'Clark Sanderson', 'Av. Santa María N°1161', '2004-02-02', 1),
('97796261-7', 'John Doe', 'Almte. Manuel Señoret N°524', '1945-03-03', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`rut_funcionario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
