-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-11-2021 a las 04:41:46
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `minutos`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_insertar_informacion`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_informacion` (IN `_NOMBRE` VARCHAR(500), IN `_EDAD` INT, IN `_TEL` VARCHAR(20), IN `_EST` INT, IN `_PESO` INT, IN `_FC` INT, IN `_TA` INT, IN `_TAD` INT, IN `_SAT` INT, OUT `_ID` INT)  BEGIN
INSERT INTO tbl_pacientes(nombre_pac,edad_pac,tel_pac,estatura,
peso,FC,TA,TAD,sat)
VALUES(_NOMBRE,_EDAD,_TEL,_EST,_PESO,_FC,_TA,_TAD,_SAT);
SET @ID = @@IDENTITY;
SET _ID = @ID;
END$$

DROP PROCEDURE IF EXISTS `sp_insertar_informacion_final`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_informacion_final` (IN `_TAs` INT, IN `_TADs` INT, IN `_FCs` INT, IN `_sats` INT, IN `_peso` INT, IN `_id` INT)  BEGIN
INSERT INTO tbl_signos(FC_s,sat_s,TA_s,TAD_s,id_pac)
VALUES(_FCs,_sats,_TAs,_TADs,_id);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pacientes`
--

DROP TABLE IF EXISTS `tbl_pacientes`;
CREATE TABLE IF NOT EXISTS `tbl_pacientes` (
  `id_pac` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_pac` varchar(50) NOT NULL,
  `edad_pac` int(11) NOT NULL,
  `tel_pac` varchar(10) NOT NULL,
  `estatura` int(3) NOT NULL,
  `peso` int(3) NOT NULL,
  `FC` int(3) NOT NULL,
  `TA` int(3) NOT NULL,
  `TAD` int(3) NOT NULL,
  `sat` int(3) NOT NULL,
  PRIMARY KEY (`id_pac`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_signos`
--

DROP TABLE IF EXISTS `tbl_signos`;
CREATE TABLE IF NOT EXISTS `tbl_signos` (
  `id_signo` bigint(20) NOT NULL AUTO_INCREMENT,
  `FC_s` int(11) NOT NULL,
  `sat_s` int(11) NOT NULL,
  `TA_s` int(11) NOT NULL,
  `TAD_s` int(11) NOT NULL,
  `id_pac` bigint(20) NOT NULL,
  PRIMARY KEY (`id_signo`),
  KEY `fx_signos_pac` (`id_pac`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
