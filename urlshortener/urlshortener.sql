-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-04-2014 a las 19:58:28
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `urlshortener`
--

DELIMITER $$
--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `contadorUri`(pag VARCHAR(300)) RETURNS int(4)
    DETERMINISTIC
BEGIN
	DECLARE cont INT DEFAULT 0;
	SELECT IFNULL(MAX(contador),0) INTO cont FROM uris WHERE url_nueva=pag GROUP BY url_nueva;
	SET cont = cont + 1;
	RETURN cont;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uris`
--

CREATE TABLE IF NOT EXISTS `uris` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `url_original` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_nueva` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contador` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `uris`
--

INSERT INTO `uris` (`id`, `url_original`, `url_nueva`, `contador`) VALUES
(1, 'http://www.amazon.com/Kindle-Wireless-Re ading-Display-Globa lly/dp/B003FSUDM4/re f=amb_link_353259562_2?pf_rd_m=ATVPDKIK X0DER&pf_rd_s=center-10&pf_rd_r=11EYKTN6 82A79T370AM3&pf_rd_ t=201&pf_rd_p=127098 5982&pf_rd_i=B002Y27P3M', '-1614863374', 1),
(2, 'http://www.google.com', '2134879332', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
