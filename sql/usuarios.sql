SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- -------------------------------------------------
-- Estructura de tabla para la tabla `usuarios`
-- -------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  --`nombre` varchar(255)  NOT NULL,
  --`apellidos` varchar(255)  NOT NULL,
  `email` varchar(255)  NOT NULL,
  `contraseña` varchar(255)  NOT NULL,
  --`municipio` varchar(255)  NOT NULL,
  --`provincia` varchar(255)  NOT NULL,
  --`club` varchar(255)  NOT NULL DEFAULT '--',
  --`equipo` varchar(255)  NOT NULL DEFAULT '--',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Registros `usuarios`
-- ----------------------------

INSERT INTO `usuarios` VALUES ('1', 'alvaro@gmail.com', 'alvaro'),
('2', 'gonzalo@hotmail.com', '123456'),
('3','alberto@msn.com', '1234'),
('4', 'guille@gmail.com', 'abcdef');




