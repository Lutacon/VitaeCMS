CREATE TABLE IF NOT EXISTS `configuracionmod` (
  `idconf` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(20) NOT NULL,
  `colorprincipal` varchar(6) NOT NULL,
  `colorsecundario` varchar(6) NOT NULL,
  PRIMARY KEY (`idconf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `estudios` (
  `idestudio` mediumint(9) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `nota` smallint(6) NOT NULL,
  `fechaacabados` date NOT NULL,
  `centro` text NOT NULL,
  PRIMARY KEY (`idestudio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `idiomas` (
  `ididioma` mediumint(9) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `nivel` varchar(40) NOT NULL,
  `codigo` text NOT NULL,
  PRIMARY KEY (`ididioma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `trabajos` (
  `idtrabajo` mediumint(9) NOT NULL AUTO_INCREMENT,
  `puesto` text NOT NULL,
  `empresa` text NOT NULL,
  `years` text NOT NULL,
  `descripcion` longtext NOT NULL,
  `imagen` text NOT NULL,
  `fechainicio` date NOT NULL,
  `actualidad` tinyint(1) NOT NULL,
  PRIMARY KEY (`idtrabajo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `claveusuario` CHAR(128) COLLATE utf8_spanish_ci NOT NULL,
  `salt` CHAR(128) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `lema` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `twitterid` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `facebookid` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `idvideoyt` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `imagenperfil1` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `imagenperfil2` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `biografia` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `intentoslogin` (
 `idusuario` INT(11) NOT NULL,
 `tiempo` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

 ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
