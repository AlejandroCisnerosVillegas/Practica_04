-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2025 a las 20:02:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `general`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poject_17_usuarios`
--

CREATE TABLE `poject_17_usuarios` (
  `cod` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `poject_17_usuarios`
--

INSERT INTO `poject_17_usuarios` (`cod`, `nom`, `correo`, `tel`) VALUES
(32412, 'Usuario Inventado 01', 'inventado01@imaginario.com', 123456789),
(32413, 'Usuario Inventado 02', 'inventado02@imaginario.com', 342568124),
(32414, 'Usuario Inventado 03', 'inventado03@imaginario.com', 134653246),
(32425, 'Usuario Inventado 04', 'inventado04@imaginario.com', 2147483647),
(32447, 'Usuario Inventado 05', 'inventado05@imaginario.com', 9124578);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `poject_17_usuarios`
--
ALTER TABLE `poject_17_usuarios`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `poject_17_usuarios`
--
ALTER TABLE `poject_17_usuarios`
  MODIFY `cod` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32450;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
