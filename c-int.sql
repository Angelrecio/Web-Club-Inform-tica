-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 17-01-2023 a las 05:21:35
-- Versión del servidor: 5.7.34
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c-int`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacknet`
--

CREATE TABLE `hacknet` (
  `id` int(5) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `descripcion` varchar(2048) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hacknet`
--

INSERT INTO `hacknet` (`id`, `titulo`, `descripcion`, `link`) VALUES
(1, 'HPE', 'A lo largo de esta aventura, irás conociendo los objetivos de HPE GreenLake para con la sostenibilidad y la tecnología que contribuye a mejorar la vida de las personas en todo el mundo.', 'https://cdstechchallenge.com'),
(2, 'Test', 'Esto es una prueba', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
(3, 'Hack the box', 'Pownea un server', 'https://www.hackthebox.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` int(9) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `nexp` int(8) NOT NULL,
  `email` varchar(128) NOT NULL,
  `razon` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `nombre`, `nexp`, `email`, `razon`) VALUES
(2, 'Turi turi turi', 0, 'Losdelalinea@losdelalinea.Es', 'Soy guay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proponerproyecto`
--

CREATE TABLE `proponerproyecto` (
  `id` int(9) NOT NULL,
  `id_usuario` int(9) DEFAULT NULL,
  `nombre` varchar(25) NOT NULL,
  `ideaproyecto` varchar(1024) NOT NULL,
  `materiales` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proponerproyecto`
--

INSERT INTO `proponerproyecto` (`id`, `id_usuario`, `nombre`, `ideaproyecto`, `materiales`) VALUES
(1, 1, 'test', 'esto es una prueba', 'arduino'),
(2, 1, 'test', 'esto es una prueba', 'arduino'),
(3, 5, 'test123', 'cosas', 'cosas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(5) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `descripcion` varchar(2048) NOT NULL,
  `lenguajes` varchar(100) NOT NULL,
  `capacidad` int(4) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `titulo`, `descripcion`, `lenguajes`, `capacidad`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 'La luz del camino', 'Farolas para autopistas inteligentes', 'C++ python', 5, '2023-01-17 03:17:16', '2023-01-17'),
(2, 'Drone fpv', 'Hacer un dron para volar en primera persona', 'Python', 10, '2023-01-17 04:03:10', '2023-01-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranked`
--

CREATE TABLE `ranked` (
  `id` int(5) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `descripcion` varchar(2048) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ranked`
--

INSERT INTO `ranked` (`id`, `titulo`, `descripcion`, `link`) VALUES
(1, 'Test', 'Esto es un test', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
(2, 'Ada-byron', 'Adabyron es un concurso universitario de programación promovido por distintas universidades españolas. Es un concurso en dos niveles: los regionales que cubren una o varias provincias/comunidades autónomas y el concurso nacional para los mejores clasificados de cada regional.', 'https://ada-byron.es/2023/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE `talleres` (
  `id` int(5) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `descripcion` varchar(256) NOT NULL,
  `Fecha-publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecharealizacion` datetime NOT NULL,
  `seccion` int(1) NOT NULL,
  `capacidad` int(4) NOT NULL,
  `Aula` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`id`, `titulo`, `descripcion`, `Fecha-publicacion`, `fecharealizacion`, `seccion`, `capacidad`, `Aula`) VALUES
(1, 'Java principiantes', 'Un taller de java empezando desde cero', '2023-01-04 03:57:39', '2022-11-13 16:30:00', 0, 20, 'C333'),
(2, 'Pruebas en php', 'Vamos a realizar pruebas en php', '2023-01-17 02:49:42', '2023-02-10 10:30:00', 0, 15, 'C218'),
(3, 'Python', 'Aprende python en 2h', '2023-01-17 02:51:03', '2023-01-27 05:30:00', 2, 10, 'Online'),
(5, 'Sql', 'Sentencias sql para principiantes', '2023-01-17 03:52:00', '2023-01-31 12:30:00', 0, 25, 'C333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleresusuarios`
--

CREATE TABLE `talleresusuarios` (
  `id` int(9) NOT NULL,
  `id_usuario` int(9) DEFAULT NULL,
  `id_taller` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `talleresusuarios`
--

INSERT INTO `talleresusuarios` (`id`, `id_usuario`, `id_taller`) VALUES
(1, 5, 1),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(9) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(25) NOT NULL,
  `nexp` int(8) NOT NULL,
  `email` varchar(99) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido1`, `apellido2`, `nexp`, `email`, `pass`, `rol`) VALUES
(1, 'David', 'Partal', 'Gomez', 22000600, 'dpartalg@gmail.com', 'd89bd736362c7c98a435f866db6f93f0', 1),
(5, 'La', 'La', 'Land', 12345678, 'Lalaland@meloinvento.Yo', '25d55ad283aa400af464c76d713c07ad', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hacknet`
--
ALTER TABLE `hacknet`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`nexp`,`email`) USING BTREE;

--
-- Indices de la tabla `proponerproyecto`
--
ALTER TABLE `proponerproyecto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `ranked`
--
ALTER TABLE `ranked`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `talleresusuarios`
--
ALTER TABLE `talleresusuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_taller` (`id_taller`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`nexp`,`email`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hacknet`
--
ALTER TABLE `hacknet`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proponerproyecto`
--
ALTER TABLE `proponerproyecto`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ranked`
--
ALTER TABLE `ranked`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `talleresusuarios`
--
ALTER TABLE `talleresusuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proponerproyecto`
--
ALTER TABLE `proponerproyecto`
  ADD CONSTRAINT `proponerproyecto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `talleresusuarios`
--
ALTER TABLE `talleresusuarios`
  ADD CONSTRAINT `talleresusuarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `talleresusuarios_ibfk_2` FOREIGN KEY (`id_taller`) REFERENCES `talleres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
