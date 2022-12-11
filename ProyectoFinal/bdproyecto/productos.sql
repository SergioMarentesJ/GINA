-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2022 a las 05:14:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idp` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `des` varchar(100) NOT NULL,
  `exi` int(11) NOT NULL,
  `pre` float NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idp`, `nom`, `cat`, `des`, `exi`, `pre`, `image`) VALUES
(20, 'Vestido Negro', 'Dama', 'Vestido Negro formal para dama', 100, 800, 'vNegro.jpeg'),
(21, 'Pantalón negro', 'Dama', 'Pantalón Negro de cuero para dama', 50, 350, 'pNegro.jpeg'),
(22, 'Short Blanco', 'Dama', 'Short blanco modern para el verano', 180, 200, 'sBlanco.jpeg'),
(23, 'Top café', 'Dama', 'Top moderno color café ', 40, 150, 'tCafe.jpeg'),
(24, 'Chamarra de cuero negra', 'Dama', 'Chamarra moderna de cuero', 200, 900, 'cNegra.jpeg'),
(25, 'Botas negras', 'Dama', 'Botas negras para cualquier ocasión', 420, 570, 'bNegra.jpeg'),
(10, 'Chamarra negra', 'Caballero', 'Chamarra deportiva para caballero', 270, 560, 'cNegraC.jpeg'),
(11, 'Playera Negra', 'Caballero', 'Playera de verano', 46, 150, 'pNegra.jpeg'),
(12, 'Zapatos blancos', 'Caballero', 'Zapatos para toda ocasión', 10, 480, 'zBlanco.jpeg'),
(13, 'Tenis negros', 'Caballero', 'Tenis para toda ocasión', 600, 800, 'tNegro.jpeg'),
(14, 'Chamarra verde', 'Caballero', 'Chamarra verde deportiva', 300, 1200, 'cVerde.jpeg'),
(15, 'Short verde', 'Caballero', 'Short verde moderno para caballero', 45, 200, 'sVerde.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
