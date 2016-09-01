-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2016 a las 23:09:42
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conacc`
--
CREATE DATABASE IF NOT EXISTS `conacc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `conacc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorio`
--

CREATE TABLE `accesorio` (
  `acce_cod` int(11) NOT NULL,
  `compo_cod` int(11) NOT NULL,
  `regi_cod` int(11) NOT NULL,
  `acce_col` varchar(20) NOT NULL,
  `acce_can` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componente`
--

CREATE TABLE `componente` (
  `compo_cod` int(11) NOT NULL,
  `compo_nombre` varchar(30) NOT NULL,
  `compo_cant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_salida`
--

CREATE TABLE `entrada_salida` (
  `entsal_cod` int(11) NOT NULL,
  `regi_cod` int(11) NOT NULL,
  `entsal_fechaent` varchar(10) NOT NULL,
  `entsal_fechasal` varchar(10) NOT NULL,
  `entsal_horaent` varchar(5) NOT NULL,
  `entsal_horasal` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `marca_cod` int(11) NOT NULL,
  `marca_nombre` varchar(40) NOT NULL,
  `marca_logo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`marca_cod`, `marca_nombre`, `marca_logo`) VALUES
(1, 'acer', 'a'),
(2, 'sd', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `modu_cod` varchar(30) NOT NULL,
  `modu_nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`modu_cod`, `modu_nom`) VALUES
('1', 'Adios'),
('2', ' Turun'),
('3', 'Taran');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `rol_cod` varchar(30) NOT NULL,
  `modu_cod` varchar(30) NOT NULL,
  `estado_permi` varchar(30) NOT NULL,
  `modulo_permi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`rol_cod`, `modu_cod`, `estado_permi`, `modulo_permi`) VALUES
('1', '1', 'sas', 'ss'),
('1', '2', 's', 'zs'),
('2', '2', 'activo', 'no se');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `produ_cod` int(11) NOT NULL,
  `tipopro_cod` int(11) NOT NULL,
  `marca_cod` int(11) NOT NULL,
  `produ_desc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`produ_cod`, `tipopro_cod`, `marca_cod`, `produ_desc`) VALUES
(1, 1, 1, 'as');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `prop_cod` int(11) NOT NULL,
  `prop_doc` varchar(20) NOT NULL,
  `prop_nom` varchar(60) NOT NULL,
  `prop_ape` varchar(50) NOT NULL,
  `prop_tel` varchar(15) DEFAULT NULL,
  `prop_dir` varchar(30) NOT NULL,
  `prop_ema` varchar(40) NOT NULL,
  `prop_cen` varchar(60) NOT NULL,
  `prop_car` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_producto`
--

CREATE TABLE `registro_producto` (
  `regi_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `produ_cod` int(11) NOT NULL,
  `prop_cod` int(11) NOT NULL,
  `regi_serial` varchar(30) NOT NULL,
  `regi_color` varchar(30) NOT NULL,
  `regi_fecha` varchar(10) NOT NULL,
  `regi_desc` varchar(100) NOT NULL,
  `regi_autoalterna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_cod` varchar(30) NOT NULL,
  `rol_nombre` varchar(50) NOT NULL,
  `rol_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_cod`, `rol_nombre`, `rol_desc`) VALUES
('1', ' Administrador', ' Puede hacer todo'),
('2', '      Vigilante', '      No puede hacer, todo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `segui_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `segui_modulo` varchar(70) NOT NULL,
  `segui_accion` varchar(20) NOT NULL,
  `segui_fecha` varchar(10) NOT NULL,
  `segui_hora` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `tipopro_cod` int(11) NOT NULL,
  `tipopro_nombre` varchar(30) NOT NULL,
  `tipopro_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`tipopro_cod`, `tipopro_nombre`, `tipopro_desc`) VALUES
(1, 'Tecnologia', 'Aparatos electronicos'),
(5, 'asha', 'parrasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_cod` int(11) NOT NULL,
  `rol_cod` varchar(20) NOT NULL,
  `usu_nom` varchar(50) NOT NULL,
  `usu_ape` varchar(50) NOT NULL,
  `usu_docu` varchar(12) NOT NULL,
  `usu_email` varchar(70) NOT NULL,
  `usu_tel` varchar(15) NOT NULL,
  `usu_nick` varchar(50) NOT NULL,
  `usu_pass` varchar(250) NOT NULL,
  `usu_estado` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_cod`, `rol_cod`, `usu_nom`, `usu_ape`, `usu_docu`, `usu_email`, `usu_tel`, `usu_nick`, `usu_pass`, `usu_estado`) VALUES
(13, '1', 'Jeison', 'Villada Calle', '123456789', 'a@a.com', '123456', 'primero', '$2y$10$pdyc1QjDopBz/QbWMszdUO29hWkFZmJWrZlMYkmoe.9c563WRvCG6', ''),
(14, '2', 'Jeison', 'Villada Calle', '123456789', 'a@a.com', '123456', 'segundo', '$2y$10$HH2iMZ/1a/nkqsOZUbCiY.js.RLzE.sqpgUJw0vmf.OK5hIdSU2hO', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorio`
--
ALTER TABLE `accesorio`
  ADD PRIMARY KEY (`acce_cod`),
  ADD KEY `compo_cod` (`compo_cod`),
  ADD KEY `regi_cod` (`regi_cod`);

--
-- Indices de la tabla `componente`
--
ALTER TABLE `componente`
  ADD PRIMARY KEY (`compo_cod`);

--
-- Indices de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  ADD PRIMARY KEY (`entsal_cod`),
  ADD KEY `regi_cod` (`regi_cod`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`marca_cod`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`modu_cod`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`rol_cod`,`modu_cod`),
  ADD KEY `permi_cod` (`modu_cod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`produ_cod`),
  ADD KEY `tipopro_cod` (`tipopro_cod`,`marca_cod`),
  ADD KEY `marca_cod` (`marca_cod`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`prop_cod`);

--
-- Indices de la tabla `registro_producto`
--
ALTER TABLE `registro_producto`
  ADD PRIMARY KEY (`regi_cod`),
  ADD KEY `usu_cod` (`usu_cod`),
  ADD KEY `produ_cod` (`produ_cod`),
  ADD KEY `propie_cod` (`prop_cod`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_cod`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`segui_cod`),
  ADD KEY `usu_cod` (`usu_cod`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`tipopro_cod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_cod`),
  ADD KEY `rol_cod` (`rol_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorio`
--
ALTER TABLE `accesorio`
  MODIFY `acce_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `componente`
--
ALTER TABLE `componente`
  MODIFY `compo_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  MODIFY `entsal_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `marca_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `produ_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `prop_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registro_producto`
--
ALTER TABLE `registro_producto`
  MODIFY `regi_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `segui_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `tipopro_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesorio`
--
ALTER TABLE `accesorio`
  ADD CONSTRAINT `accesorio_ibfk_2` FOREIGN KEY (`compo_cod`) REFERENCES `componente` (`compo_cod`),
  ADD CONSTRAINT `accesorio_ibfk_3` FOREIGN KEY (`regi_cod`) REFERENCES `registro_producto` (`regi_cod`);

--
-- Filtros para la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  ADD CONSTRAINT `entrada_salida_ibfk_1` FOREIGN KEY (`regi_cod`) REFERENCES `registro_producto` (`regi_cod`);

--
-- Filtros para la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD CONSTRAINT `permiso_ibfk_1` FOREIGN KEY (`rol_cod`) REFERENCES `rol` (`rol_cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permiso_ibfk_2` FOREIGN KEY (`modu_cod`) REFERENCES `modulo` (`modu_cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`marca_cod`) REFERENCES `marca` (`marca_cod`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`tipopro_cod`) REFERENCES `tipo_producto` (`tipopro_cod`);

--
-- Filtros para la tabla `registro_producto`
--
ALTER TABLE `registro_producto`
  ADD CONSTRAINT `registro_producto_ibfk_3` FOREIGN KEY (`prop_cod`) REFERENCES `propietario` (`prop_cod`),
  ADD CONSTRAINT `registro_producto_ibfk_4` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`),
  ADD CONSTRAINT `registro_producto_ibfk_5` FOREIGN KEY (`produ_cod`) REFERENCES `producto` (`produ_cod`);

--
-- Filtros para la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD CONSTRAINT `seguimiento_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_cod`) REFERENCES `rol` (`rol_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
