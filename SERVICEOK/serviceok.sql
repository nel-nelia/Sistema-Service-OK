SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `Establecimiento` (
  `EstablecimientoID` int NOT NULL PRIMARY KEY,
  `Nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Telefono` int not null,
  `WhatsappURL` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Delivery` int not null,
  `Permiso` int not null,
  `RUC` int not null,
  `CoordenadaX` VARCHAR(250) NOT NULL,
  `CoordenadaY` VARCHAR(250) NOT NULL,
  `FlagActivo` int not null DEFAULT 1,
  `ActividadID` int not null,
  `RepresentanteID`  int not null,

) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcado de datos para la tabla `Establecimiento`
--

INSERT INTO `Establecimiento` (`EstablecimientoID`, `Nombre`, `Telefono`, `WhatsappURL`, `Delivery`, `Permiso`, `RUC`, `CoordenadaX`, `CoordenadaY`, `FlagActivo`, `ActividadID`, `RepresentanteID`) VALUES
(1, 'dfhfgh', 052242525, '',1,1,1231456, '-12.119', '-77.0352', 1, 1, 1;),
(2,  'dfhfgh', 052242525, '',1,1,1231456, '-12.119', '-77.0352', 1, 1, 1;),
(3, 'Direcci&oacute;n 3', 052242525, 'sdf',1,1,123456789, '-12.1135', '-77.0261', 1, 1, 1;),
(4, 'Direcci&oacute;n 4', 052242525, 'sdf',1,1,123456789, '-12.1305', '-77.0225', 1, 1, 1;),
(5, 'Direcci&oacute;n 5', 052242525, 'sdf',1,1,123456789, '-12.1197', '-77.0232', 1, 1, 1;),
(6, 'Direcci&oacute;n 6', 052242525, 'sdf',1,1,123456789, '-12.1245', '-77.0329', 1, 1, 1;);

ALTER TABLE `Establecimiento`
  MODIFY `EstablecimientoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

