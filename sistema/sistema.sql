-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 06-07-2020 a las 18:14:18
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `sistema`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalleusuarios`
-- 

CREATE TABLE `detalleusuarios` (
  `login` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `detalleusuarios`
-- 

INSERT INTO `detalleusuarios` VALUES ('gato', 1);
INSERT INTO `detalleusuarios` VALUES ('gato', 2);
INSERT INTO `detalleusuarios` VALUES ('gato', 3);
INSERT INTO `detalleusuarios` VALUES ('gato', 4);
INSERT INTO `detalleusuarios` VALUES ('perro', 2);
INSERT INTO `detalleusuarios` VALUES ('perro', 4);
INSERT INTO `detalleusuarios` VALUES ('rata', 1);
INSERT INTO `detalleusuarios` VALUES ('rata', 3);
INSERT INTO `detalleusuarios` VALUES ('loro', 1);
INSERT INTO `detalleusuarios` VALUES ('loro', 4);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `privilegios`
-- 

CREATE TABLE `privilegios` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL,
  `icono` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `privilegios`
-- 

INSERT INTO `privilegios` VALUES (1, 'emitir proforma', '../salesModule/indexEmitirProforma.php', 'emitirProforma.png');
INSERT INTO `privilegios` VALUES (2, 'emitir boleta', '../salesModule/indexEmitirBoleta.php', 'emitirBoleta.png');
INSERT INTO `privilegios` VALUES (3, 'registrar despacho', '../salesModule/indexregistrarDespacho.php', 'registrarDespacho.png');
INSERT INTO `privilegios` VALUES (4, 'registrar envio', '../productionModule/indexregistrarEnvio.php', 'registrarEnvio.png');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY  (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES ('gato', '12345', 'gato@email.com', 1);
INSERT INTO `usuarios` VALUES ('perro', '98765', 'perro@email.com', 0);
INSERT INTO `usuarios` VALUES ('rata', '0246', 'rata@email.com', 1);
INSERT INTO `usuarios` VALUES ('loro', '1357', 'loro@email.com', 1);
