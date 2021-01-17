
--estructura de base de datos para cruddeber
CREATE DATABASE IF NOT EXISTS `cruddeber`;
USE `cruddeber`;

-- estructura para tabla cruddeber.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- datos para la tabla cruddeber.persona: ~4 rows (aproximadamente)

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `direccion`) VALUES
	(3, 'Fernado ', 'Medina', 'Loja'),
	(4, 'Thyago', 'Medina', 'Zamora Ch'),

