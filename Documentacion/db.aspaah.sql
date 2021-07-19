-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2021 a las 21:04:41
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db.aspaah`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `idactividades` int(11) NOT NULL,
  `nombre_actividad` varchar(20) NOT NULL,
  `idsocios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_socio`
--

CREATE TABLE `categoria_socio` (
  `id_categoria_socio` int(11) NOT NULL,
  `categoria_nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_socio`
--

INSERT INTO `categoria_socio` (`id_categoria_socio`, `categoria_nombre`) VALUES
(1, 'Principiante'),
(2, 'Medio'),
(3, 'Avanzado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `idequipos` int(11) NOT NULL,
  `nombre_equipo` varchar(100) NOT NULL,
  `marca_equipo` varchar(50) NOT NULL,
  `descripcion_equipo` varchar(500) NOT NULL,
  `idsocios` int(11) NOT NULL,
  `condicion_equipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `id_familia` int(11) NOT NULL,
  `parentesco` varchar(50) NOT NULL,
  `nombres_familiar` varchar(50) NOT NULL,
  `apellido_paterno_familiar` varchar(50) NOT NULL,
  `apellido_materno_familiar` varchar(50) NOT NULL,
  `idsocios` int(11) NOT NULL,
  `dni_familiar` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_control`
--

CREATE TABLE `ficha_control` (
  `id_ficha_control` int(11) NOT NULL,
  `ficha_fecha_inicio` date NOT NULL,
  `ficha_fecha_fin` date NOT NULL,
  `dicha_descripcion` varchar(500) NOT NULL,
  `idsocios` int(11) NOT NULL,
  `idoperador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinarias`
--

CREATE TABLE `maquinarias` (
  `idmaquinaria` int(11) NOT NULL,
  `modelo_maquinaria` varchar(100) NOT NULL,
  `potencia_maquinaria` decimal(50,0) NOT NULL,
  `descripcion_maquinaria` varchar(500) NOT NULL,
  `cilindro_maquinaria` decimal(50,0) NOT NULL,
  `tipo_maquinaria` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maquinarias`
--

INSERT INTO `maquinarias` (`idmaquinaria`, `modelo_maquinaria`, `potencia_maquinaria`, `descripcion_maquinaria`, `cilindro_maquinaria`, `tipo_maquinaria`, `estado`) VALUES
(1, 'inyección directa', '145', 'Este tractor posee una tracción especialmente diseñada para solucionar las necesidades de los Agricultores familiares.', '8', 'Cosechadoraaaaa', '2'),
(2, 'perkin en linea', '135', 'La máquina comienza su trabajo conformando un lomo de tierra el cual servirá luego como lugar de siembra.', '7', 'Cosechadora', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinariasu`
--

CREATE TABLE `maquinariasu` (
  `id_maquinariau` int(11) NOT NULL,
  `idsocios` int(11) NOT NULL,
  `idmaquinaria` int(11) NOT NULL,
  `idoperador` int(11) NOT NULL,
  `fecha_uso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maquinariasu`
--

INSERT INTO `maquinariasu` (`id_maquinariau`, `idsocios`, `idmaquinaria`, `idoperador`, `fecha_uso`) VALUES
(1, 1, 1, 1, '12-07-2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE `operador` (
  `idoperador` int(11) NOT NULL,
  `nombre_operador` varchar(20) NOT NULL,
  `apellido_paterno_operador` varchar(20) NOT NULL,
  `apellido_materno_operador` varchar(20) NOT NULL,
  `fnacimiento_operador` date NOT NULL,
  `dni_operador` varchar(8) NOT NULL,
  `email_operador` varchar(50) NOT NULL,
  `direccion_operador` varchar(100) NOT NULL,
  `celular_operador` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `operador`
--

INSERT INTO `operador` (`idoperador`, `nombre_operador`, `apellido_paterno_operador`, `apellido_materno_operador`, `fnacimiento_operador`, `dni_operador`, `email_operador`, `direccion_operador`, `celular_operador`) VALUES
(1, 'julioOO', 'Nuñes', 'Apaza', '2021-07-13', '23456785', 'julio@gmail.com', 'av.la mar', '987654456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_forraje`
--

CREATE TABLE `produccion_forraje` (
  `id_produccion_forraje` int(11) NOT NULL,
  `cantidad_metros_cultivados` varchar(20) NOT NULL,
  `fecha_sembrado` date NOT NULL,
  `fecha_cosecha` date NOT NULL,
  `id_terreno_socio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_leche`
--

CREATE TABLE `produccion_leche` (
  `id_produccion_leche` int(11) NOT NULL,
  `idvacuno` int(11) NOT NULL,
  `cantidad_leche_diaria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `idsocios` int(11) NOT NULL,
  `nombres_socios` varchar(50) NOT NULL,
  `apellidos_materno_socio` varchar(50) NOT NULL,
  `apellido_paterno_socio` varchar(50) NOT NULL,
  `estado_socio` varchar(50) NOT NULL,
  `dni_socios` varchar(8) NOT NULL,
  `fnacimiento_socios` date NOT NULL,
  `email_socios` varchar(60) NOT NULL,
  `pasword_socio` varchar(50) NOT NULL,
  `direccion_socios` varchar(100) NOT NULL,
  `celular_socios` varchar(15) NOT NULL,
  `id_categoria_socio` int(11) NOT NULL,
  `distrito` varchar(30) NOT NULL,
  `logo_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`idsocios`, `nombres_socios`, `apellidos_materno_socio`, `apellido_paterno_socio`, `estado_socio`, `dni_socios`, `fnacimiento_socios`, `email_socios`, `pasword_socio`, `direccion_socios`, `celular_socios`, `id_categoria_socio`, `distrito`, `logo_url`) VALUES
(1, 'Alberto Maxxx', 'Gonzalo', 'Mamani', '2', '12344242', '1987-07-02', 'socio@gmail.com', '12345', 'Av circunvalación', '964553535', 2, 'Azangaro', '/aspaah/admin/fotocheck/img/1626718718_carnet.jpg'),
(2, 'Soci', 'asdfghhgfds', 'holaaaaaaaaa', '1', '12345677', '2021-07-02', 'yomaar@gmail.com', '12345', 'jr.palomar', '984747474', 2, 'caracoto', '/aspaah/admin/fotocheck/img/1626718718_carnet.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terreno`
--

CREATE TABLE `terreno` (
  `id_terreno_socio` int(11) NOT NULL,
  `metroscuadrados_terreno` varchar(50) NOT NULL,
  `ubicacion_terreno` varchar(100) NOT NULL,
  `idsocios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `clave`) VALUES
(1, 'JhobanyETG', 'jhobanyticona@gmail.com', '$2y$10$YPhwv4I4vuSj6bN29rAs4e03Cu4eDLwL4xP5Xau3CyOGFNmg/kCW.'),
(2, 'Jhon', 'jhonatan@gmail.com', 'lliu99n1'),
(3, 'henry', 'jhonatan@hotmail.com', 'jjiu99n1'),
(4, 'henry', 'henry@hotmail.com', '12345'),
(5, 'hey', 'jhona@hotmail.com', 'upeu2020'),
(6, 'hen', 'hen@gmail.com', '$2y$10$lntIz2EfkPmjA738neLQjODWLQma77uas5s5eBNL9nPn7wTdL1cr6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunos`
--

CREATE TABLE `vacunos` (
  `idvacuno` int(11) NOT NULL,
  `nombre_vacuno` varchar(20) NOT NULL,
  `peso_vacuno` varchar(50) NOT NULL,
  `raza_vacuno` varchar(20) NOT NULL,
  `nacimiento_vacuno` date NOT NULL,
  `idsocios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`idactividades`),
  ADD KEY `socios_actividades_fk` (`idsocios`);

--
-- Indices de la tabla `categoria_socio`
--
ALTER TABLE `categoria_socio`
  ADD PRIMARY KEY (`id_categoria_socio`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idequipos`),
  ADD KEY `socios_equipos_fk` (`idsocios`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id_familia`),
  ADD KEY `socios_familia_fk` (`idsocios`);

--
-- Indices de la tabla `ficha_control`
--
ALTER TABLE `ficha_control`
  ADD PRIMARY KEY (`id_ficha_control`),
  ADD KEY `operador_ficha_control_fk` (`idoperador`),
  ADD KEY `socios_ficha_control_fk` (`idsocios`);

--
-- Indices de la tabla `maquinarias`
--
ALTER TABLE `maquinarias`
  ADD PRIMARY KEY (`idmaquinaria`);

--
-- Indices de la tabla `maquinariasu`
--
ALTER TABLE `maquinariasu`
  ADD PRIMARY KEY (`id_maquinariau`);

--
-- Indices de la tabla `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`idoperador`);

--
-- Indices de la tabla `produccion_forraje`
--
ALTER TABLE `produccion_forraje`
  ADD PRIMARY KEY (`id_produccion_forraje`),
  ADD KEY `terreno_produccion_forraje_fk` (`id_terreno_socio`);

--
-- Indices de la tabla `produccion_leche`
--
ALTER TABLE `produccion_leche`
  ADD PRIMARY KEY (`id_produccion_leche`),
  ADD KEY `vacunos_produccion_leche_fk` (`idvacuno`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`idsocios`),
  ADD KEY `categoria_socio_socios_fk` (`id_categoria_socio`);

--
-- Indices de la tabla `terreno`
--
ALTER TABLE `terreno`
  ADD PRIMARY KEY (`id_terreno_socio`),
  ADD KEY `socios_terreno_fk` (`idsocios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vacunos`
--
ALTER TABLE `vacunos`
  ADD PRIMARY KEY (`idvacuno`),
  ADD KEY `socios_vacunos_fk` (`idsocios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `idactividades` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria_socio`
--
ALTER TABLE `categoria_socio`
  MODIFY `id_categoria_socio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idequipos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `familia`
--
ALTER TABLE `familia`
  MODIFY `id_familia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ficha_control`
--
ALTER TABLE `ficha_control`
  MODIFY `id_ficha_control` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `maquinarias`
--
ALTER TABLE `maquinarias`
  MODIFY `idmaquinaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `maquinariasu`
--
ALTER TABLE `maquinariasu`
  MODIFY `id_maquinariau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `operador`
--
ALTER TABLE `operador`
  MODIFY `idoperador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `produccion_forraje`
--
ALTER TABLE `produccion_forraje`
  MODIFY `id_produccion_forraje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `produccion_leche`
--
ALTER TABLE `produccion_leche`
  MODIFY `id_produccion_leche` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `idsocios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `terreno`
--
ALTER TABLE `terreno`
  MODIFY `id_terreno_socio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vacunos`
--
ALTER TABLE `vacunos`
  MODIFY `idvacuno` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `socios_actividades_fk` FOREIGN KEY (`idsocios`) REFERENCES `socios` (`idsocios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `socios_equipos_fk` FOREIGN KEY (`idsocios`) REFERENCES `socios` (`idsocios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `familia`
--
ALTER TABLE `familia`
  ADD CONSTRAINT `socios_familia_fk` FOREIGN KEY (`idsocios`) REFERENCES `socios` (`idsocios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ficha_control`
--
ALTER TABLE `ficha_control`
  ADD CONSTRAINT `operador_ficha_control_fk` FOREIGN KEY (`idoperador`) REFERENCES `operador` (`idoperador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `socios_ficha_control_fk` FOREIGN KEY (`idsocios`) REFERENCES `socios` (`idsocios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `produccion_forraje`
--
ALTER TABLE `produccion_forraje`
  ADD CONSTRAINT `terreno_produccion_forraje_fk` FOREIGN KEY (`id_terreno_socio`) REFERENCES `terreno` (`id_terreno_socio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `produccion_leche`
--
ALTER TABLE `produccion_leche`
  ADD CONSTRAINT `vacunos_produccion_leche_fk` FOREIGN KEY (`idvacuno`) REFERENCES `vacunos` (`idvacuno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `socios`
--
ALTER TABLE `socios`
  ADD CONSTRAINT `categoria_socio_socios_fk` FOREIGN KEY (`id_categoria_socio`) REFERENCES `categoria_socio` (`id_categoria_socio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `terreno`
--
ALTER TABLE `terreno`
  ADD CONSTRAINT `socios_terreno_fk` FOREIGN KEY (`idsocios`) REFERENCES `socios` (`idsocios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vacunos`
--
ALTER TABLE `vacunos`
  ADD CONSTRAINT `socios_vacunos_fk` FOREIGN KEY (`idsocios`) REFERENCES `socios` (`idsocios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
