-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2023 a las 22:25:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleos_peru`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_asistencia` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `dni`, `nombre`, `fecha_asistencia`) VALUES
(1, '71242786', 'mayeli', '2023-12-17 00:00:00'),
(2, '71242786', 'Mayely', '2023-12-17 00:00:00'),
(3, '71349728', 'paolo', '2023-12-18 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `dni` varchar(8) NOT NULL,
  `Nombres` varchar(20) DEFAULT NULL,
  `Apellidos` varchar(20) DEFAULT NULL,
  `Contraseña` varchar(15) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Estado` varchar(15) DEFAULT NULL,
  `Correoelectronico` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`dni`, `Nombres`, `Apellidos`, `Contraseña`, `Direccion`, `Telefono`, `Estado`, `Correoelectronico`) VALUES
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('70981765', 'Cinthia', 'De la cruz barreto', '123456789', 'AV.INDEPEND.NO. 1065', '928416720', 'activo', '2022141036@unh.edu.pe'),
('71242786', 'mayeli', 'huaman quispe', 'mayeli12', 'av.centenario', '987654321', 'no activo', '2022141017@unh.edu.pe'),
('71273765', 'JHAN', 'APARI RIVAS', 'jhanjc', 'av.centenario132', '987654321', NULL, '2022141003@unh.edu.pe'),
('71349728', 'paolo', 'aponte', 'paolo04', 'av.centenario23', '934345123', NULL, '2022141004@unh.edu.pe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `Id_contrato` varchar(20) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `Fecha_inicio` date DEFAULT NULL,
  `Fecha_fin` date DEFAULT NULL,
  `Duracion` varchar(10) DEFAULT NULL,
  `Actividad` varchar(20) DEFAULT NULL,
  `Salario` varchar(10) DEFAULT NULL,
  `nombre_empresa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`Id_contrato`, `dni`, `Fecha_inicio`, `Fecha_fin`, `Duracion`, `Actividad`, `Salario`, `nombre_empresa`) VALUES
('001', '71242786', '2023-12-02', '2023-12-31', '1 mes', 'Analizar', '150.00', 'empresa SAC'),
('002', '70981765', '2023-12-02', '2023-12-31', '1 mes', 'Analizar', '150.00', 'empresa SAC'),
('2', '71242786', '2022-12-01', '2022-09-12', '2 meses', 'HDIUWEIHUK', '2.000', 'empresaA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `RUC` varchar(11) NOT NULL,
  `nombre_empresa` varchar(50) NOT NULL,
  `Nom_encargado` varchar(20) DEFAULT NULL,
  `DNI` varchar(8) DEFAULT NULL,
  `Contraseña` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`RUC`, `nombre_empresa`, `Nom_encargado`, `DNI`, `Contraseña`) VALUES
('10233683231', 'empresa C', 'ANA JULIA', '71344688', 'empresa C'),
('10236583231', 'empresa B', 'LEONARDO', '70981721', 'empresa B'),
('10236583237', 'empresa A ', 'HELENA', '73134531', 'empresa A '),
('10236583238', 'empresa SAC', 'SANTIAGO ', '78654321', '1234567'),
('12345678811', 'empresa D', 'JHAN', '71242786', 'jhanjc'),
('12345678823', 'empresa E', 'PAOLO', '71349728', 'PAOLO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas_de_empleo`
--

CREATE TABLE `ofertas_de_empleo` (
  `Id_codigo` varchar(15) NOT NULL,
  `Nombre_empresa` varchar(20) DEFAULT NULL,
  `Actividad` varchar(20) DEFAULT NULL,
  `Duracion` varchar(20) DEFAULT NULL,
  `Fecha_publicacion` date DEFAULT NULL,
  `Estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ofertas_de_empleo`
--

INSERT INTO `ofertas_de_empleo` (`Id_codigo`, `Nombre_empresa`, `Actividad`, `Duracion`, `Fecha_publicacion`, `Estado`) VALUES
('', 'Emoresa E', 'Reconocer', '2 meses', '2023-12-18', 'activa'),
('0001', 'empresa SAC', 'Analizar', '1 mes', '2023-09-28', 'no activo'),
('0002', 'empresa SAC', 'Revisar', '1 mes', '2023-12-02', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` varchar(3) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `motivo` varchar(50) DEFAULT NULL,
  `archivo` varchar(50) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `dni`, `nombre_empresa`, `motivo`, `archivo`, `telefono`, `fecha`) VALUES
('1', '71242786', 'maye', 'lifyhmvgnb', 'PARTICIPACION ANIVERSARIO EPIS IV.xlsx', '928416720', '2023-12-17'),
('2', '71242786', 'maye', 'lifyhmvgnb', 'PARTICIPACION ANIVERSARIO EPIS IV.xlsx', '928416720', '2023-12-17'),
('3', '71242786', 'mayeli', 'lifyhmvgnb', 'PARTICIPACION ANIVERSARIO EPIS IV.xlsx', '928416720', '2023-12-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`Id_contrato`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`RUC`);

--
-- Indices de la tabla `ofertas_de_empleo`
--
ALTER TABLE `ofertas_de_empleo`
  ADD PRIMARY KEY (`Id_codigo`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
