-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2018 a las 17:19:05
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoformativo`
--
CREATE DATABASE IF NOT EXISTS `proyectoformativo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `proyectoformativo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `idAprendiz` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `idFicha` int(11) NOT NULL,
  `aprDiscapacidad` varchar(100) DEFAULT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`idAprendiz`, `idPersona`, `idFicha`, `aprDiscapacidad`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 1, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(2, 2, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(3, 3, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(4, 4, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(5, 5, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(6, 6, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(7, 7, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(8, 8, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(9, 9, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(10, 10, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(11, 11, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(12, 12, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(13, 13, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(14, 14, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(15, 15, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(16, 16, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(17, 17, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1),
(18, 18, 1, NULL, 'A', '2018-10-19 08:33:00', '2018-10-19 08:33:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idArea` int(11) NOT NULL,
  `areNombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `estado` enum('A','I') CHARACTER SET utf8 NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idArea`, `areNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Administrativa', 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1),
(2, 'Deportiva', 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1),
(3, 'Gimnasio', 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistenciagimnasio`
--

CREATE TABLE `asistenciagimnasio` (
  `idAsistenciaGimansio` int(11) NOT NULL,
  `idAprendiz` int(11) NOT NULL,
  `asgFecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asistenciagimnasio`
--

INSERT INTO `asistenciagimnasio` (`idAsistenciaGimansio`, `idAprendiz`, `asgFecha`) VALUES
(1, 8, '2018-11-22'),
(2, 15, '2018-11-22'),
(3, 6, '2018-11-22'),
(4, 11, '2018-11-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienestar`
--

CREATE TABLE `bienestar` (
  `idBienestar` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `idArea` int(11) NOT NULL,
  `estado` enum('A','I') CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bienestar`
--

INSERT INTO `bienestar` (`idBienestar`, `idPersona`, `idArea`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 19, 1, 'A', '2018-10-19 09:00:00', '2018-10-19 09:00:00', -1, -1),
(2, 20, 2, 'A', '2018-10-19 09:00:00', '2018-10-19 09:00:00', -1, -1),
(3, 21, 2, 'A', '2018-10-19 09:00:00', '2018-10-19 09:00:00', -1, -1),
(4, 22, 3, 'A', '2018-10-19 09:00:00', '2018-10-19 09:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centroformacion`
--

CREATE TABLE `centroformacion` (
  `idCentroFormacion` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `idMunicipio` int(11) NOT NULL,
  `cefNombre` varchar(100) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `centroformacion`
--

INSERT INTO `centroformacion` (`idCentroFormacion`, `idDepartamento`, `idMunicipio`, `cefNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 17, 613, 'Centro de la industria de la empresa y los servicios', 'A', '2018-10-16 00:00:00', '2018-10-16 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacionmusculo`
--

CREATE TABLE `clasificacionmusculo` (
  `idClasificacionMusculo` int(11) NOT NULL,
  `clmNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clasificacionmusculo`
--

INSERT INTO `clasificacionmusculo` (`idClasificacionMusculo`, `clmNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Pecho', 'A', '2018-10-12 10:26:00', '2018-10-12 10:26:00', -1, -1),
(2, 'Espalda', 'A', '2018-10-12 10:26:00', '2018-10-12 10:26:00', -1, -1),
(3, 'Pierna', 'A', '2018-10-12 10:26:00', '2018-10-12 10:26:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacionrutina`
--

CREATE TABLE `clasificacionrutina` (
  `idClasificacionRutina` int(11) NOT NULL,
  `clrNombre` varchar(50) NOT NULL,
  `clrDescripcion` varchar(500) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clasificacionrutina`
--

INSERT INTO `clasificacionrutina` (`idClasificacionRutina`, `clrNombre`, `clrDescripcion`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'FullBody', 'Trabaja el cuerpo entero cada vez que entras en el gym. Puede ser el mismo entreno cada vez o variar en 2 entrenos.', 'A', '2018-10-16 00:00:00', '2018-10-16 00:00:00', -1, -1),
(2, 'Push/Pull', 'TSe basa en concentrar movimientos de empuje en una sesión y en la siguiente centrarse en movimentos de tirón.', 'A', '2018-10-16 00:00:00', '2018-10-16 00:00:00', -1, -1),
(3, 'Upper/Lower', 'En una sesión se entrena el Torso y en la siguiente se entrenan las piernas. Puede hacerse 2 entrenamientos de cada tipo o hacer dos veces el mismo de manera que puedes tener 4 entrenos diferentes ( 2 de torso y 2 de pierna ) o 2 únicamente ( 1 para cada parte )', 'A', '2018-10-16 00:00:00', '2018-10-16 00:00:00', -1, -1),
(4, 'Push/Pull/Legs', 'Parecida a una Push/Pull, pero dejando un día específico para piernas. Los días de Push se entrenarán ejercicios que impliquen Presses, incidiendo en Pectoral, Hombro y Tríceps y el día de Pull se harán básicamente jalones y remos , incidiendo en Dorsal, Hombro y Bíceps. Es una buena rutina para intermedios.', 'A', '2018-10-16 00:00:00', '2018-10-16 00:00:00', -1, -1),
(5, 'Weider', 'La de toda la vida. La de splits de varios días. La rutina de culturista. En este tipo de rutina puedes encontrar mil variantes ( las cuales no se pondrán aquí porque no acabaríamos nunca ) pero puedes encontrar rutinas desde 3 días organizados en Pecho/Bíceps – Dorsal/Tríceps – Hombro/Pierna a rutinas de 6 días con un grupo muscular por día.', 'A', '2018-10-16 00:00:00', '2018-10-16 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciontorneo`
--

CREATE TABLE `clasificaciontorneo` (
  `idClasificacionTorneo` int(11) NOT NULL,
  `claNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clasificaciontorneo`
--

INSERT INTO `clasificaciontorneo` (`idClasificacionTorneo`, `claNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Público', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1),
(2, 'Privado', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL,
  `idPais` int(11) NOT NULL,
  `depNombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` enum('A','I') CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `idPais`, `depNombre`, `estado`) VALUES
(1, 1, 'Amazonas', 'A'),
(2, 1, 'Antioquia', 'A'),
(3, 1, 'Arauca', 'A'),
(4, 1, 'Atlántico', 'A'),
(5, 1, 'Bolívar', 'A'),
(6, 1, 'Boyacá', 'A'),
(7, 1, 'Caldas', 'A'),
(8, 1, 'Caquetá', 'A'),
(9, 1, 'Casanare', 'A'),
(10, 1, 'Cauca', 'A'),
(11, 1, 'Cesar', 'A'),
(12, 1, 'Chocó', 'A'),
(13, 1, 'Córdoba', 'A'),
(14, 1, 'Cundinamarca', 'A'),
(15, 1, 'Guainía', 'A'),
(16, 1, 'Guaviare', 'A'),
(17, 1, 'Huila', 'A'),
(18, 1, 'La Guajira', 'A'),
(19, 1, 'Magdalena', 'A'),
(20, 1, 'Meta', 'A'),
(21, 1, 'Nariño', 'A'),
(22, 1, 'Norte de santander', 'A'),
(23, 1, 'Putumayo', 'A'),
(24, 1, 'Quindío', 'A'),
(25, 1, 'Risaralda', 'A'),
(26, 1, 'San Andrés y Providencia', 'A'),
(27, 1, 'Santander', 'A'),
(28, 1, 'Sucre', 'A'),
(29, 1, 'Tolima', 'A'),
(30, 1, 'Valle del Cauca', 'A'),
(31, 1, 'Vaupés', 'A'),
(32, 1, 'vichada', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE `dia` (
  `idDia` int(11) NOT NULL,
  `diaNombre` varchar(30) NOT NULL,
  `diaImagen` varchar(100) NOT NULL,
  `diaEstado` enum('A','I') NOT NULL,
  `diaFechaCreacion` datetime NOT NULL,
  `diaFechaModuficacion` datetime NOT NULL,
  `diaUsuarioCreacion` int(11) NOT NULL,
  `diaUsuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`idDia`, `diaNombre`, `diaImagen`, `diaEstado`, `diaFechaCreacion`, `diaFechaModuficacion`, `diaUsuarioCreacion`, `diaUsuarioModificacion`) VALUES
(1, 'Lunes', 'Lunes.png', 'A', '2018-10-12 10:09:00', '2018-10-12 10:09:00', -1, -1),
(2, 'Martes', 'Martes.png', 'A', '2018-10-12 10:09:00', '2018-10-12 10:09:00', -1, -1),
(3, 'Miercoles', 'Miercoles.png', 'A', '2018-10-12 10:09:00', '2018-10-12 10:09:00', -1, -1),
(4, 'Jueves', 'Jueves.png', 'A', '2018-10-12 10:09:00', '2018-10-12 10:09:00', -1, -1),
(5, 'Viernes', 'Viernes.png', 'A', '2018-10-12 10:09:00', '2018-10-12 10:09:00', -1, -1),
(6, 'Sábado', 'Sabado.png', 'A', '2018-10-12 10:09:00', '2018-10-12 10:09:00', -1, -1),
(7, 'Domingo', 'Domingo.png', 'A', '2018-10-12 10:09:00', '2018-10-12 10:09:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplina`
--

CREATE TABLE `disciplina` (
  `idDisciplina` int(11) NOT NULL,
  `idTipoDeporte` int(11) NOT NULL,
  `disNombre` varchar(50) NOT NULL,
  `disNumeroParticipantes` int(11) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `disciplina`
--

INSERT INTO `disciplina` (`idDisciplina`, `idTipoDeporte`, `disNombre`, `disNumeroParticipantes`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 1, 'Futsal', 12, 'A', '2018-12-03 00:00:00', '2018-12-03 00:00:00', 1, 1),
(2, 1, 'Baloncesto', 12, 'A', '2018-12-03 00:00:00', '2018-12-03 00:00:00', 1, 1),
(3, 1, 'Voleibol', 12, 'A', '2018-12-03 00:00:00', '2018-12-03 00:00:00', 1, 1),
(4, 2, 'Tennis de mesa', 1, 'A', '2018-12-03 00:00:00', '2018-12-03 00:00:00', 1, 1),
(5, 2, 'Ajedrez', 1, 'A', '2018-12-03 00:00:00', '2018-12-03 00:00:00', 1, 1),
(6, 2, 'Atletismo', 1, 'A', '2018-12-03 00:00:00', '2018-12-03 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `idEjercicio` int(11) NOT NULL,
  `idTipoEjercicio` int(11) NOT NULL,
  `ejeNombre` varchar(50) NOT NULL,
  `ejeDetalles` varchar(200) DEFAULT NULL,
  `ejeImagen` varchar(100) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioModificacion` int(11) NOT NULL,
  `usuarioCreacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`idEjercicio`, `idTipoEjercicio`, `ejeNombre`, `ejeDetalles`, `ejeImagen`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioModificacion`, `usuarioCreacion`) VALUES
(2, 4, 'Flexión de pecho', 'Ejercicio para trabajar los pectorales.', 'Flexión de pecho.jpg', 'A', '2018-11-14 14:39:24', '2018-11-14 14:39:24', 1, 1),
(3, 3, 'Sentadilla', 'Trabaja piernas, glúteos y abdomen.', 'Sentadilla.jpg', 'A', '2018-11-14 14:42:40', '2018-11-14 14:42:40', 1, 1),
(4, 2, 'Saltar lazo', 'Mejora el ritmo cardíaco. ', 'Saltar lazo.jpg', 'A', '2018-11-14 14:45:24', '2018-11-14 14:45:24', 1, 1),
(5, 4, 'Bicicleta', 'Fortalece piernas completas, mejora el ritmo cardí', 'Bicicleta.jpg', 'A', '2018-11-14 14:49:36', '2018-11-14 14:49:36', 1, 1),
(6, 4, 'Curl o flexión de bíceps', 'Detalle d la flexión de bíceps', 'sadas', 'A', '2018-10-19 00:00:00', '2018-10-02 00:00:00', -1, -1),
(7, 4, 'Press militar para hombros', 'Detalles del press militar', 'sadas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(8, 2, 'Torsión de espalda', 'Sentado en el suelo. Pierna derecha estirada. Dobl', 'casc', 'A', '2018-10-19 00:00:00', '0000-00-00 00:00:00', 1, -1),
(9, 2, 'Lumbares', ' Estira una pierna y encoge la otra cogiéndote de ', 'scsa', 'A', '2018-11-15 00:00:00', '2018-11-15 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejerciciomusculo`
--

CREATE TABLE `ejerciciomusculo` (
  `idEjercicioMusculo` int(11) NOT NULL,
  `idMusculo` int(11) NOT NULL,
  `idEjercicio` int(11) NOT NULL,
  `ejmDescripcion` varchar(100) NOT NULL,
  `ejmFoto` varchar(100) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejerciciomusculo`
--

INSERT INTO `ejerciciomusculo` (`idEjercicioMusculo`, `idMusculo`, `idEjercicio`, `ejmDescripcion`, `ejmFoto`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(2, 11, 2, 'Descripción para las flexiones de pecho ', 'foto.jpg', '', '2018-11-15 00:00:00', '0000-00-00 00:00:00', -1, -1),
(3, 5, 2, 'Descripcion para la flexión de pecho, ejercicio que trabaja la parte superior del pecho', 'foto2.jpg', 'A', '2018-10-19 00:00:00', '0000-00-00 00:00:00', -1, -1),
(4, 13, 3, 'Descripción para las sentadillas', 'fotoo.jpg', 'A', '2018-10-19 00:00:00', '0000-00-00 00:00:00', -1, -1),
(6, 14, 6, 'Descripción de las flexiones de bíceps', 'as', 'A', '2018-11-15 00:00:00', '0000-00-00 00:00:00', -1, 1),
(7, 5, 7, 'dsvbgdsvd', 'dvsd', 'A', '2018-11-15 00:00:00', '2018-11-15 00:00:00', 1, 1),
(8, 15, 8, 'zsxcvd', 'cscs', 'A', '2018-11-15 00:00:00', '2018-11-15 00:00:00', 1, 1),
(9, 13, 8, 'asdfsdafsd', 'cxzxcxz', 'A', '2018-11-15 00:00:00', '2018-11-22 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuentro`
--

CREATE TABLE `encuentro` (
  `idEncuentro` int(11) NOT NULL,
  `idLugar` int(11) NOT NULL,
  `encFechaEncuentro` date NOT NULL,
  `estado` enum('A','I') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamientodeportivo`
--

CREATE TABLE `entrenamientodeportivo` (
  `idEntrenamientoDeportivo` int(11) NOT NULL,
  `entNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `idEps` int(11) NOT NULL,
  `epsCodigo` varchar(50) DEFAULT NULL,
  `epsNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`idEps`, `epsCodigo`, `epsNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'EPS001', 'Salud coleman EPS S.A', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(2, 'EPS002', 'Salud total S.A E.P.S', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(3, 'EPS0044', 'Medimas', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(4, 'EPS004', 'Bonsalud', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(5, 'EPS006', 'Instituto de seguros sociales', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(6, 'EPS007', 'Unimec EPS S.A', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(7, 'EPS008', 'Compesar EPS S.A', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(8, 'EPS0011', 'Col seguros  E.P.S', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(9, 'EPS0013', 'E.P.S Saludcoop', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(10, 'EPS015', 'Salud colpatria E.P.S', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(11, 'EPS016', 'Coomeva E.P.S', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(12, 'RES001', 'Espin', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(13, 'EP5037', 'Nueva eps', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(14, 'ELR4505', 'Ponal', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(15, 'CCF024', 'Comfamiliar Huila', 'A', '2018-10-12 17:26:00', '2018-10-12 17:26:00', -1, -1),
(16, 'ESS133', 'Comparta', 'A', '2018-10-17 00:00:00', '2018-10-17 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idEquipo` int(11) NOT NULL,
  `idTorneo` int(11) NOT NULL,
  `equNombre` varchar(20) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idEquipo`, `idTorneo`, `equNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 2, 'Las pode', 'A', '2018-12-04 07:27:13', '2018-12-04 07:27:13', 1, 1),
(2, 2, 'mmm', 'I', '2018-12-04 07:19:55', '2018-12-04 07:19:55', -1, -1),
(3, 2, 'mmm', 'I', '2018-12-04 07:19:55', '2018-12-04 07:19:55', -1, -1),
(4, 2, 'PRUEBA2', 'A', '2018-12-04 07:20:20', '2018-12-04 07:20:20', -1, -1),
(5, 2, 'PRUEBA2', 'A', '2018-12-04 07:20:20', '2018-12-04 07:20:20', -1, -1),
(6, 2, 'PRUEBA1', 'A', '2018-12-04 07:20:42', '2018-12-04 07:20:42', -1, -1),
(7, 2, 'BIENJACH', 'A', '2018-12-04 07:21:35', '2018-12-04 07:21:35', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `idFicha` int(11) NOT NULL,
  `ficNumero` varchar(20) NOT NULL,
  `ficNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`idFicha`, `ficNumero`, `ficNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, '1466435', 'Análisis y desarrollo de sistemas de información.', 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganadorcolectivo`
--

CREATE TABLE `ganadorcolectivo` (
  `idGanadorColectivo` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL,
  `idTorneo` int(11) NOT NULL,
  `estado` enum('A','I') CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganadorindividual`
--

CREATE TABLE `ganadorindividual` (
  `idGanadorIndividual` int(11) NOT NULL,
  `idParticipante` int(11) NOT NULL,
  `estado` enum('A','I') CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(11) NOT NULL,
  `genNombre` varchar(10) NOT NULL,
  `estado` enum('A','I') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`idGenero`, `genNombre`, `estado`) VALUES
(1, 'Masculino', 'A'),
(2, 'Femenino', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generotorneo`
--

CREATE TABLE `generotorneo` (
  `idGeneroTorneo` int(11) NOT NULL,
  `getNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `generotorneo`
--

INSERT INTO `generotorneo` (`idGeneroTorneo`, `getNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Femenino', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1),
(2, 'Masculino', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1),
(3, 'Mixto', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gimnasio`
--

CREATE TABLE `gimnasio` (
  `idGimnasio` int(11) NOT NULL,
  `idSede` int(11) NOT NULL,
  `gimNombre` varchar(50) NOT NULL,
  `gimDescripcion` varchar(100) NOT NULL,
  `gimImagen` varchar(100) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gruposanguineo`
--

CREATE TABLE `gruposanguineo` (
  `idGrupoSanguineo` int(11) NOT NULL,
  `grsNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gruposanguineo`
--

INSERT INTO `gruposanguineo` (`idGrupoSanguineo`, `grsNombre`, `estado`) VALUES
(1, '\0\0\0A\0\0\0+', ''),
(2, '\0\0\0A\0\0\0-', ''),
(3, '\0\0\0O\0\0\0+', ''),
(4, '\0\0\0O\0\0\0-', ''),
(5, '\0\0\0B\0\0\0+', ''),
(6, '\0\0\0B\0\0\0-', ''),
(7, '\0\0\0A\0\0\0B\0\0\0+', ''),
(8, '\0\0\0A\0\0\0B\0\0\0-', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `idLugar` int(11) NOT NULL,
  `idMunicipio` int(11) NOT NULL,
  `lugNombre` varchar(50) NOT NULL,
  `lugDireccion` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`idLugar`, `idMunicipio`, `lugNombre`, `lugDireccion`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 633, 'Sena Industrial', 'fghfghfg', 'A', '2018-12-03 00:00:00', '2018-12-03 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE `maquina` (
  `idMaquina` int(11) NOT NULL,
  `maqNombre` varchar(50) NOT NULL,
  `maqCodigo` varchar(20) NOT NULL,
  `maqDescripcion` varchar(100) DEFAULT NULL,
  `maqObservacion` varchar(100) DEFAULT NULL,
  `maqImagen` varchar(100) DEFAULT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinaejercicio`
--

CREATE TABLE `maquinaejercicio` (
  `idMaquinaEjercicio` int(11) NOT NULL,
  `idMaquina` int(11) NOT NULL,
  `idEjercicio` int(11) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcador`
--

CREATE TABLE `marcador` (
  `idMarcador` int(11) NOT NULL,
  `idEncuentro` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL,
  `marPuntaje` int(11) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idMunicipio` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `munCodigoDane` varchar(50) NOT NULL,
  `munNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idMunicipio`, `idDepartamento`, `munCodigoDane`, `munNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 2, '5,002', 'Abejorral', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(2, 22, '54,003', 'Abrego', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(3, 2, '5,004', 'Abriaqui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(4, 20, '50,006', 'Acacias', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(5, 12, '27,006', 'Acandi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(6, 17, '41,006', 'Acevedo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(7, 5, '13,006', 'Achi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(8, 17, '41,013', 'Agrado', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(9, 14, '25,001', 'Agua de Dios', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, 0),
(10, 11, '20,011', 'Aguachica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(11, 27, '68,013', 'Aguada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(12, 7, '17,013', 'Aguadas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(13, 9, '85,01', 'Aguazul', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(14, 11, '20,013', 'Agustin Codazzi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(15, 17, '41,016', 'Aipe', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(16, 14, '25,019', 'Alban', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(17, 21, '52,019', 'Alban', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(18, 8, '18,029', 'Albania', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(19, 18, '44,035', 'Albania', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(20, 27, '68,02', 'Albania', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(21, 30, '76,02', 'Alcala', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(22, 21, '52,022', 'Aldana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(23, 2, '5,021', 'Alejandria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(24, 19, '47,03', 'Algarrobo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(25, 17, '41,02', 'Algeciras', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(26, 10, '19,022', 'Almaguer', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(27, 6, '15,022', 'Almeida', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(28, 29, '73,024', 'Alpujarra', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(29, 17, '41,026', 'Altamira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(30, 12, '27,025', 'Alto Baudo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(31, 5, '13,03', 'Altos del Rosario', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(32, 29, '73,026', 'Alvarado', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(33, 2, '5,03', 'Amaga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(34, 2, '5,031', 'Amalfi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(35, 29, '73,03', 'Ambalema', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(36, 14, '25,035', 'Anapoima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(37, 21, '52,036', 'Ancuya', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(38, 30, '76,036', 'Andalucia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(39, 2, '5,034', 'Andes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(40, 2, '5,036', 'Angelopolis', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(41, 2, '5,038', 'Angostura', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(42, 14, '25,04', 'Anolaima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(43, 2, '5,04', 'Anori', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(44, 7, '17,042', 'Anserma', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(45, 30, '76,041', 'Ansermanuevo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(46, 2, '5,044', 'Anza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(47, 29, '73,043', 'Anzoategui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(48, 2, '5,045', 'Apartado', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(49, 25, '66,045', 'Apia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(50, 14, '25,599', 'Apulo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(51, 6, '15,047', 'Aquitania', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(52, 19, '47,053', 'Aracataca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(53, 7, '17,05', 'Aranzazu', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(54, 27, '68,051', 'Aratoca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(55, 3, '81,001', '3', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(56, 3, '81,065', 'Arauquita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(57, 14, '25,053', 'Arbelaez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(58, 21, '52,051', 'Arboleda', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(59, 22, '54,051', 'Arboledas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(60, 2, '5,051', 'Arboletes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(61, 6, '15,051', 'Arcabuco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(62, 5, '13,042', 'Arenal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(63, 2, '5,055', 'Argelia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(64, 10, '19,05', 'Argelia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(65, 30, '76,054', 'Argelia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(66, 19, '47,058', 'Ariguani', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(67, 5, '13,052', 'Arjona', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(68, 2, '5,059', 'Armenia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(69, 24, '63,001', 'Armenia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(70, 29, '73,055', 'Armero', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(71, 5, '13,062', 'Arroyohondo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(72, 11, '20,032', 'Astrea', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(73, 29, '73,067', 'Ataco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(74, 12, '27,05', 'Atrato', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(75, 13, '23,068', 'Ayapel', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(76, 12, '27,073', 'Bagado', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(77, 12, '27,075', 'Bahia Solano', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(78, 12, '27,077', 'Bajo Baudo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(79, 10, '19,075', 'Balboa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(80, 25, '66,075', 'Balboa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(81, 4, '8,078', 'Baranoa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(82, 17, '41,078', 'Baraya', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(83, 21, '52,079', 'Barbacoas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(84, 2, '5,079', 'Barbosa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(85, 27, '68,077', 'Barbosa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(86, 27, '68,079', 'Barichara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(87, 20, '50,11', 'Barranca de Upia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(88, 27, '68,081', 'Barrancabermeja', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(89, 18, '44,078', 'Barrancas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(90, 5, '13,074', 'Barranco de Loba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(91, 15, '94,343', 'Barranco Minas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(92, 4, '8,001', 'Barranquilla', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(93, 11, '20,045', 'Becerril', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(94, 7, '17,088', 'Belalcazar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(95, 6, '15,087', 'Belen', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(96, 21, '52,083', 'Belen', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(97, 12, '27,086', 'Belen de Bajira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(98, 8, '18,094', 'Belen de Los Andaquies', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(99, 25, '66,088', 'Belen de Umbria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(100, 2, '5,088', 'Bello', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(101, 2, '5,086', 'Belmira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(102, 14, '25,086', 'Beltran', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(103, 6, '15,09', 'Berbeo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(104, 2, '5,091', 'Betania', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(105, 6, '15,092', 'Beteitiva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(106, 2, '5,093', 'Betulia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(107, 27, '68,092', 'Betulia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(108, 14, '25,095', 'Bituima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(109, 6, '15,097', 'Boavita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(110, 22, '54,099', 'Bochalema', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(111, 14, '11,001', 'Bogota D.C.', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(112, 14, '25,099', 'Bojaca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(113, 12, '27,099', 'Bojaya', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(114, 10, '19,1', '5', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(115, 27, '68,101', '5', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(116, 30, '76,1', '5', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(117, 11, '20,06', 'Bosconia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(118, 6, '15,104', '6', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(119, 2, '5,107', 'Briceno', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(120, 6, '15,106', 'Briceno', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(121, 27, '68,001', 'Bucaramanga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(122, 22, '54,109', 'Bucarasica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(123, 6, '15,109', 'Buena Vista', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(124, 30, '76,109', 'Buenaventura', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(125, 13, '23,079', 'Buenavista', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(126, 24, '63,111', 'Buenavista', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(127, 28, '70,11', 'Buenavista', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(128, 10, '19,11', 'Buenos Aires', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(129, 21, '52,11', 'Buesaco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(130, 30, '76,113', 'Bugalagrande', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(131, 2, '5,113', 'Buritica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(132, 6, '15,114', 'Busbanza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(133, 14, '25,12', 'Cabrera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(134, 27, '68,121', 'Cabrera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(135, 20, '50,124', 'Cabuyaro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(136, 15, '94,886', 'Cacahual', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(137, 2, '5,12', 'Caceres', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(138, 14, '25,123', 'Cachipay', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(139, 22, '54,128', 'Cachira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(140, 22, '54,125', 'Cacota', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(141, 2, '5,125', 'Caicedo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(142, 30, '76,122', 'Caicedonia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(143, 28, '70,124', 'Caimito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(144, 29, '73,124', 'Cajamarca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(145, 10, '19,13', 'Cajibio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(146, 14, '25,126', 'Cajica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(147, 5, '13,14', 'Calamar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(148, 16, '95,015', 'Calamar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(149, 24, '63,13', 'Calarca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(150, 2, '5,129', '7', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(151, 6, '15,131', '7', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(152, 10, '19,137', 'Caldono', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(153, 30, '76,001', 'Cali', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(154, 27, '68,132', 'California', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(155, 30, '76,126', 'Calima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(156, 10, '19,142', 'Caloto', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(157, 2, '5,134', 'Campamento', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(158, 4, '8,137', 'Campo de La Cruz', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(159, 17, '41,132', 'Campoalegre', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(160, 6, '15,135', 'Campohermoso', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(161, 13, '23,09', 'Canalete', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(162, 4, '8,141', 'Candelaria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(163, 30, '76,13', 'Candelaria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(164, 5, '13,16', 'Cantagallo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(165, 2, '5,138', 'Canasgordas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(166, 14, '25,148', 'Caparrapi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(167, 27, '68,147', 'Capitanejo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(168, 14, '25,151', 'Caqueza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(169, 2, '5,142', 'Caracoli', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(170, 2, '5,145', 'Caramanta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(171, 27, '68,152', 'Carcasi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(172, 2, '5,147', 'Carepa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(173, 29, '73,148', 'Carmen de Apicala', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(174, 14, '25,154', 'Carmen de Carupa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(175, 12, '27,15', 'Carmen del Darien', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(176, 2, '5,15', 'Carolina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(177, 5, '13,001', 'Cartagena', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(178, 8, '18,15', 'Cartagena del Chaira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(179, 30, '76,147', 'Cartago', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(180, 31, '97,161', 'Caruru', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(181, 29, '73,152', 'Casabianca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(182, 20, '50,15', 'Castilla la Nueva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(183, 2, '5,154', '10sia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(184, 27, '68,16', 'Cepita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(185, 13, '23,162', 'Cerete', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(186, 6, '15,162', 'Cerinza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(187, 27, '68,162', 'Cerrito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(188, 19, '47,161', 'Cerro San Antonio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(189, 12, '27,16', 'Certegui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(190, 21, '52,24', 'Chachagui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(191, 14, '25,168', 'Chaguani', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(192, 28, '70,23', 'Chalan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(193, 9, '85,015', 'Chameza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(194, 29, '73,168', 'Chaparral', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(195, 27, '68,167', 'Charala', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(196, 27, '68,169', 'Charta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(197, 14, '25,175', 'Chia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(198, 2, '5,172', 'Chigorodo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(199, 13, '23,168', 'Chima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(200, 27, '68,176', 'Chima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(201, 11, '20,175', 'Chimichagua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(202, 22, '54,172', 'Chinacota', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(203, 6, '15,172', 'Chinavita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(204, 7, '17,174', 'Chinchina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(205, 13, '23,182', 'Chinu', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(206, 14, '25,178', 'Chipaque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(207, 27, '68,179', 'Chipata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(208, 6, '15,176', 'Chiquinquira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(209, 6, '15,232', 'Chiquiza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(210, 11, '20,178', 'Chiriguana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(211, 6, '15,18', 'Chiscas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(212, 6, '15,183', 'Chita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(213, 22, '54,174', 'Chitaga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(214, 6, '15,185', 'Chitaraque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(215, 6, '15,187', 'Chivata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(216, 19, '47,17', 'Chivolo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(217, 6, '15,236', 'Chivor', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(218, 14, '25,181', 'Choachi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(219, 14, '25,183', 'Choconta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(220, 5, '13,188', 'Cicuco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(221, 19, '47,189', 'Cienaga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(222, 13, '23,189', 'Cienaga de Oro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(223, 6, '15,189', 'Cienega', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(224, 27, '68,19', 'Cimitarra', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(225, 24, '63,19', 'Circasia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(226, 2, '5,19', 'Cisneros', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(227, 2, '5,101', 'Ciudad 5', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(228, 5, '13,222', 'Clemencia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(229, 2, '5,197', 'Cocorna', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(230, 29, '73,2', 'Coello', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(231, 14, '25,2', 'Cogua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(232, 17, '41,206', 'Colombia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(233, 21, '52,203', 'Colon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(234, 23, '86,219', 'Colon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(235, 28, '70,204', 'Coloso', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(236, 6, '15,204', 'Combita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(237, 2, '5,206', 'Concepcion', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(238, 27, '68,207', 'Concepcion', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(239, 2, '5,209', 'Concordia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(240, 19, '47,205', 'Concordia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(241, 12, '27,205', 'Condoto', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(242, 27, '68,209', 'Confines', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(243, 21, '52,207', 'Consaca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(244, 21, '52,21', 'Contadero', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(245, 27, '68,211', 'Contratacion', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(246, 22, '54,206', 'Convencion', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(247, 2, '5,212', 'Copacabana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(248, 6, '15,212', 'Coper', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(249, 5, '13,212', '13', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(250, 21, '52,215', '13', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(251, 24, '63,212', '13', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(252, 10, '19,212', 'Corinto', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(253, 27, '68,217', 'Coromoro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(254, 28, '70,215', 'Corozal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(255, 6, '15,215', 'Corrales', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(256, 14, '25,214', 'Cota', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(257, 13, '23,3', 'Cotorra', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(258, 6, '15,218', 'Covarachia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(259, 28, '70,221', 'Covenas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(260, 29, '73,217', 'Coyaima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(261, 3, '81,22', 'Cravo Norte', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(262, 21, '52,224', 'Cuaspud', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(263, 6, '15,223', 'Cubara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(264, 20, '50,223', 'Cubarral', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(265, 6, '15,224', 'Cucaita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(266, 14, '25,224', 'Cucunuba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(267, 22, '54,001', 'Cucuta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(268, 22, '54,223', 'Cucutilla', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(269, 6, '15,226', 'Cuitiva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(270, 20, '50,226', 'Cumaral', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(271, 32, '99,773', 'Cumaribo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(272, 21, '52,227', 'Cumbal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(273, 21, '52,233', 'Cumbitara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(274, 29, '73,226', 'Cunday', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(275, 8, '18,205', 'Curillo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(276, 27, '68,229', 'Curiti', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(277, 11, '20,228', 'Curumani', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(278, 2, '5,234', 'Dabeiba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(279, 30, '76,233', 'Dagua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(280, 18, '44,09', 'Dibula', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(281, 18, '44,098', 'Distraccion', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(282, 29, '73,236', 'Dolores', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(283, 2, '5,237', 'Don Matias', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(284, 25, '66,17', 'Dosquebradas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(285, 6, '15,238', 'Duitama', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(286, 22, '54,239', 'Durania', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(287, 2, '5,24', 'Ebejico', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(288, 30, '76,243', 'El aguila', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(289, 2, '5,25', 'El Bagre', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(290, 19, '47,245', 'El Banco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(291, 30, '76,246', 'El Cairo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(292, 20, '50,245', 'El Calvario', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(293, 12, '27,135', 'El Canton del San Pablo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(294, 22, '54,245', 'El Carmen', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(295, 12, '27,245', 'El Carmen de Atrato', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(296, 5, '13,244', 'El Carmen de 5', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(297, 27, '68,235', 'El Carmen de Chucuri', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(298, 2, '5,148', 'El Carmen de Viboral', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(299, 20, '50,251', 'El Castillo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(300, 30, '76,248', 'El Cerrito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(301, 21, '52,25', 'El Charco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(302, 6, '15,244', 'El Cocuy', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(303, 14, '25,245', 'El Colegio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(304, 11, '20,238', 'El Copey', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(305, 8, '18,247', 'El Doncello', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(306, 20, '50,27', 'El Dorado', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(307, 30, '76,25', 'El Dovio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(308, 1, '91,263', 'El Encanto', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(309, 6, '15,248', 'El Espino', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(310, 27, '68,245', 'El Guacamayo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(311, 5, '13,248', 'El Guamo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(312, 12, '27,25', 'El Litoral del San Juan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(313, 18, '44,11', 'El Molino', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(314, 11, '20,25', 'El Paso', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(315, 8, '18,256', 'El Paujil', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(316, 21, '52,254', 'El Penol', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(317, 5, '13,268', 'El Penon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(318, 14, '25,258', 'El Penon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(319, 27, '68,25', 'El Penon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(320, 19, '47,258', 'El Pinon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(321, 27, '68,255', 'El Playon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(322, 19, '47,268', 'El Reten', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(323, 16, '95,025', 'El Retorno', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(324, 28, '70,233', 'El Roble', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(325, 14, '25,26', 'El Rosal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(326, 21, '52,256', 'El Rosario', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(327, 2, '5,697', 'El Santuario', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(328, 21, '52,258', 'El Tablon de Gomez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(329, 10, '19,256', 'El Tambo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(330, 21, '52,26', 'El Tambo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(331, 22, '54,25', 'El Tarra', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(332, 22, '54,261', 'El Zulia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(333, 17, '41,244', 'Elias', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(334, 27, '68,264', 'Encino', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(335, 27, '68,266', 'Enciso', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(336, 2, '5,264', 'Entrerrios', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(337, 2, '5,266', 'Envigado', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(338, 29, '73,268', 'Espinal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(339, 14, '25,269', 'Facatativa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(340, 29, '73,27', 'Falan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(341, 7, '17,272', 'Filadelfia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(342, 24, '63,272', 'Filandia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(343, 6, '15,272', 'Firavitoba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(344, 29, '73,275', 'Flandes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(345, 8, '18,001', 'Florencia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(346, 10, '19,29', 'Florencia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(347, 6, '15,276', 'Floresta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(348, 27, '68,271', 'Florian', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(349, 30, '76,275', 'Florida', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(350, 27, '68,276', 'Floridablanca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(351, 14, '25,279', 'Fomeque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(352, 18, '44,279', 'Fonseca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(353, 3, '81,3', 'Fortul', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(354, 14, '25,281', 'Fosca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(355, 21, '52,52', 'Francisco Pizarro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(356, 2, '5,282', 'Fredonia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(357, 29, '73,283', 'Fresno', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(358, 2, '5,284', 'Frontino', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(359, 20, '50,287', 'Fuente de Oro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(360, 19, '47,288', 'Fundacion', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(361, 21, '52,287', 'Funes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(362, 14, '25,286', 'Funza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(363, 14, '25,288', 'Fuquene', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(364, 14, '25,29', 'Fusagasuga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(365, 14, '25,293', 'Gachala', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(366, 14, '25,295', 'Gachancipa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(367, 6, '15,293', 'Gachantiva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(368, 14, '25,297', 'Gacheta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(369, 27, '68,296', 'Galan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(370, 4, '8,296', 'Galapa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(371, 28, '70,235', 'Galeras', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(372, 14, '25,299', 'Gama', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(373, 11, '20,295', 'Gamarra', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(374, 27, '68,298', 'Gambita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(375, 6, '15,296', 'Gameza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(376, 6, '15,299', 'Garagoa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(377, 17, '41,298', 'Garzon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(378, 24, '63,302', 'Genova', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(379, 17, '41,306', 'Gigante', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(380, 30, '76,306', 'Ginebra', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(381, 2, '5,306', 'Giraldo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(382, 14, '25,307', 'Girardot', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(383, 2, '5,308', 'Girardota', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(384, 27, '68,307', 'Giron', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(385, 2, '5,31', 'Gomez Plata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(386, 11, '20,31', 'Gonzalez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(387, 22, '54,313', 'Gramalote', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(388, 2, '5,313', 'Granada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(389, 14, '25,312', 'Granada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(390, 20, '50,313', 'Granada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(391, 27, '68,318', 'Guaca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(392, 6, '15,317', 'Guacamayas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(393, 30, '76,318', 'Guacari', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(394, 10, '19,3', 'Guachene', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(395, 14, '25,317', 'Guacheta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(396, 21, '52,317', 'Guachucal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(397, 30, '76,111', 'Guadalajara de Buga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(398, 2, '5,315', 'Guadalupe', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(399, 17, '41,319', 'Guadalupe', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(400, 27, '68,32', 'Guadalupe', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(401, 14, '25,32', 'Guaduas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(402, 21, '52,32', 'Guaitarilla', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(403, 21, '52,323', 'Gualmatan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(404, 19, '47,318', 'Guamal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(405, 20, '50,318', 'Guamal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(406, 29, '73,319', 'Guamo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(407, 10, '19,318', 'Guapi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(408, 27, '68,322', 'Guapota', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(409, 28, '70,265', 'Guaranda', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(410, 2, '5,318', 'Guarne', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(411, 14, '25,322', 'Guasca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(412, 2, '5,321', 'Guatape', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(413, 14, '25,324', 'Guataqui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(414, 14, '25,326', 'Guatavita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(415, 6, '15,322', 'Guateque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(416, 25, '66,318', 'Guatica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(417, 27, '68,324', 'Guavata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(418, 14, '25,328', 'Guayabal de Siquima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(419, 14, '25,335', 'Guayabetal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(420, 6, '15,325', 'Guayata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(421, 27, '68,327', 'Guepsa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(422, 6, '15,332', 'Guican', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(423, 14, '25,339', 'Gutierrez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(424, 22, '54,344', 'Hacari', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(425, 5, '13,3', 'Hatillo de Loba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(426, 27, '68,344', 'Hato', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(427, 9, '85,125', 'Hato Corozal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(428, 18, '44,378', 'Hatonuevo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(429, 2, '5,347', 'Heliconia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(430, 22, '54,347', 'Herran', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(431, 29, '73,347', 'Herveo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(432, 2, '5,353', 'Hispania', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(433, 17, '41,349', 'Hobo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(434, 29, '73,349', 'Honda', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(435, 29, '73,001', 'Ibague', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(436, 29, '73,352', 'Icononzo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(437, 21, '52,352', 'Iles', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(438, 21, '52,354', 'Imues', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(439, 15, '94,001', 'Inirida', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(440, 10, '19,355', 'Inza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(441, 21, '52,356', 'Ipiales', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(442, 17, '41,357', 'Iquira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(443, 17, '41,359', 'Isnos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(444, 12, '27,361', 'Istmina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(445, 2, '5,36', 'Itagui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(446, 2, '5,361', 'Ituango', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(447, 6, '15,362', 'Iza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(448, 10, '19,364', 'Jambalo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(449, 30, '76,364', 'Jamundi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(450, 2, '5,364', 'Jardin', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(451, 6, '15,367', 'Jenesano', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(452, 2, '5,368', 'Jerico', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(453, 6, '15,368', 'Jerico', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(454, 14, '25,368', 'Jerusalen', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(455, 27, '68,368', 'Jesus Maria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(456, 27, '68,37', 'Jordan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(457, 4, '8,372', 'Juan de Acosta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(458, 14, '25,372', 'Junin', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(459, 12, '27,372', 'Jurado', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(460, 13, '23,35', 'La Apartada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(461, 17, '41,378', 'La Argentina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(462, 27, '68,377', 'La Belleza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(463, 14, '25,377', 'La Calera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(464, 6, '15,38', 'La Capilla', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(465, 2, '5,376', 'La Ceja', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(466, 25, '66,383', 'La Celia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(467, 1, '91,405', 'La Chorrera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(468, 21, '52,378', 'La Cruz', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(469, 30, '76,377', 'La Cumbre', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(470, 7, '17,38', 'La Dorada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(471, 22, '54,385', 'La Esperanza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(472, 2, '5,38', 'La Estrella', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(473, 21, '52,381', 'La Florida', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(474, 11, '20,383', 'La Gloria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(475, 15, '94,885', 'La Guadalupe', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(476, 11, '20,4', 'La Jagua de Ibirico', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(477, 18, '44,42', 'La Jagua del Pilar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(478, 21, '52,385', 'La Llanada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(479, 20, '50,35', 'La Macarena', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(480, 7, '17,388', 'La Merced', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(481, 14, '25,386', 'La Mesa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(482, 8, '18,41', 'La Montanita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(483, 14, '25,394', 'La Palma', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(484, 11, '20,621', 'La Paz', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(485, 27, '68,397', 'La Paz', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(486, 1, '91,407', 'La Pedrera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(487, 14, '25,398', 'La Pena', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(488, 2, '5,39', 'La Pintada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(489, 17, '41,396', 'La Plata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(490, 22, '54,398', 'La Playa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(491, 32, '99,524', 'La Primavera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(492, 9, '85,136', 'La Salina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(493, 10, '19,392', 'La Sierra', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(494, 24, '63,401', 'La Tebaida', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(495, 21, '52,39', 'La Tola', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(496, 2, '5,4', 'La Union', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(497, 21, '52,399', 'La Union', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(498, 28, '70,4', 'La Union', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(499, 30, '76,4', 'La Union', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(500, 6, '15,403', 'La Uvita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(501, 10, '19,397', 'La Vega', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(502, 14, '25,402', 'La Vega', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(503, 6, '15,401', 'La Victoria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(504, 30, '76,403', 'La Victoria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(505, 1, '91,43', 'La Victoria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(506, 25, '66,4', 'La Virginia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(507, 22, '54,377', 'Labateca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(508, 6, '15,377', 'Labranzagrande', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(509, 27, '68,385', 'Landazuri', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(510, 27, '68,406', 'Lebrija', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(511, 23, '86,573', 'Leguizamo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(512, 21, '52,405', 'Leiva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(513, 20, '50,4', 'Lejanias', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(514, 14, '25,407', 'Lenguazaque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(515, 29, '73,408', 'Lerida', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(516, 1, '91,001', 'Leticia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(517, 29, '73,411', 'Libano', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(518, 2, '5,411', 'Liborina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(519, 21, '52,411', 'Linares', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(520, 12, '27,413', 'Lloro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(521, 10, '19,418', 'Lopez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(522, 13, '23,417', 'Lorica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(523, 21, '52,418', 'Los Andes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(524, 13, '23,419', 'Los 13s', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(525, 28, '70,418', 'Los Palmitos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(526, 22, '54,405', 'Los Patios', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(527, 27, '68,418', 'Los Santos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(528, 22, '54,418', 'Lourdes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(529, 4, '8,421', 'Luruaco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(530, 6, '15,425', 'Macanal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(531, 27, '68,425', 'Macaravita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(532, 2, '5,425', 'Maceo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(533, 14, '25,426', 'Macheta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(534, 14, '25,43', 'Madrid', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(535, 5, '13,43', 'Magangue', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(536, 21, '52,427', 'Magui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(537, 5, '13,433', 'Mahates', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(538, 18, '44,43', 'Maicao', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(539, 28, '70,429', 'Majagual', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(540, 27, '68,432', 'Malaga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(541, 4, '8,433', 'Malambo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(542, 21, '52,435', 'Mallama', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(543, 4, '8,436', 'Manati', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(544, 11, '20,443', 'Manaure', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(545, 18, '44,56', 'Manaure', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(546, 9, '85,139', 'Mani', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(547, 7, '17,001', 'Manizales', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(548, 14, '25,436', 'Manta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(549, 7, '17,433', 'Manzanares', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(550, 20, '50,325', 'Mapiripan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(551, 15, '94,663', 'Mapiripana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(552, 5, '13,44', 'Margarita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(553, 5, '13,442', 'Maria la Baja', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(554, 2, '5,44', 'Marinilla', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(555, 6, '15,442', 'Maripi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(556, 29, '73,443', 'Mariquita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(557, 7, '17,442', 'Marmato', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1);
INSERT INTO `municipio` (`idMunicipio`, `idDepartamento`, `munCodigoDane`, `munNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(558, 7, '17,444', 'Marquetalia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(559, 25, '66,44', 'Marsella', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(560, 7, '17,446', 'Marulanda', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(561, 27, '68,444', 'Matanza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(562, 2, '5,001', 'Medellin', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(563, 14, '25,438', 'Medina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(564, 12, '27,425', 'Medio Atrato', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(565, 12, '27,43', 'Medio Baudo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(566, 12, '27,45', 'Medio San Juan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(567, 29, '73,449', 'Melgar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(568, 10, '19,45', 'Mercaderes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(569, 20, '50,33', 'Mesetas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(570, 8, '18,46', 'Milan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(571, 6, '15,455', 'Miraflores', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(572, 16, '95,2', 'Miraflores', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(573, 10, '19,455', 'Miranda', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(574, 1, '91,46', 'Miriti Parana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(575, 25, '66,456', 'Mistrato', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(576, 31, '97,001', 'Mitu', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(577, 23, '86,001', 'Mocoa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(578, 27, '68,464', 'Mogotes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(579, 27, '68,468', 'Molagavita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(580, 13, '23,464', 'Momil', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(581, 5, '13,468', 'Mompos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(582, 6, '15,464', 'Mongua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(583, 6, '15,466', 'Mongui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(584, 6, '15,469', 'Moniquira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(585, 2, '5,467', 'Montebello', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(586, 5, '13,458', 'Montecristo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(587, 13, '23,466', 'Montelibano', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(588, 24, '63,47', 'Montenegro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(589, 13, '23,001', 'Monteria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(590, 9, '85,162', 'Monterrey', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(591, 13, '23,5', 'Monitos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(592, 5, '13,473', 'Morales', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(593, 10, '19,473', 'Morales', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(594, 8, '18,479', 'Morelia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(595, 15, '94,888', 'Morichal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(596, 28, '70,473', 'Morroa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(597, 14, '25,473', 'Mosquera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(598, 21, '52,473', 'Mosquera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(599, 6, '15,476', 'Motavita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(600, 29, '73,461', 'Murillo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(601, 2, '5,475', 'Murindo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(602, 2, '5,48', 'Mutata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(603, 22, '54,48', 'Mutiscua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(604, 6, '15,48', 'Muzo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(605, 2, '5,483', '21', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(606, 14, '25,483', '21', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(607, 21, '52,48', '21', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(608, 17, '41,483', 'Nataga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(609, 29, '73,483', 'Natagaima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(610, 2, '5,495', 'Nechi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(611, 2, '5,49', 'Necocli', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(612, 7, '17,486', 'Neira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(613, 17, '41,001', 'Neiva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(614, 14, '25,486', 'Nemocon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(615, 14, '25,488', 'Nilo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(616, 14, '25,489', 'Nimaima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(617, 6, '15,491', 'Nobsa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(618, 14, '25,491', 'Nocaima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(619, 7, '17,495', 'Norcasia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(620, 5, '13,49', 'Norosi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(621, 12, '27,491', 'Novita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(622, 19, '47,46', 'Nueva Granada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(623, 6, '15,494', 'Nuevo Colon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(624, 9, '85,225', 'Nunchia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(625, 12, '27,495', 'Nuqui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(626, 30, '76,497', 'Obando', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(627, 27, '68,498', 'Ocamonte', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(628, 22, '54,498', 'Ocana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(629, 27, '68,5', 'Oiba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(630, 6, '15,5', 'Oicata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(631, 2, '5,501', 'Olaya', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(632, 21, '52,49', 'Olaya Herrera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(633, 27, '68,502', 'Onzaga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(634, 17, '41,503', 'Oporapa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(635, 23, '86,32', 'Orito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(636, 9, '85,23', 'Orocue', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(637, 29, '73,504', 'Ortega', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(638, 21, '52,506', 'Ospina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(639, 6, '15,507', 'Otanche', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(640, 28, '70,508', 'Ovejas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(641, 6, '15,511', 'Pachavita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(642, 14, '25,513', 'Pacho', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(643, 31, '97,511', 'Pacoa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(644, 7, '17,513', 'Pacora', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(645, 10, '19,513', 'Padilla', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(646, 6, '15,514', 'Paez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(647, 10, '19,517', 'Paez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(648, 17, '41,518', 'Paicol', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(649, 11, '20,517', 'Pailitas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(650, 14, '25,518', 'Paime', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(651, 6, '15,516', 'Paipa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(652, 6, '15,518', 'Pajarito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(653, 17, '41,524', 'Palermo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(654, 7, '17,524', 'Palestina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(655, 17, '41,53', 'Palestina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(656, 27, '68,522', 'Palmar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(657, 4, '8,52', 'Palmar de Varela', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(658, 27, '68,524', 'Palmas del Socorro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(659, 30, '76,52', 'Palmira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(660, 28, '70,523', 'Palmito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(661, 29, '73,52', 'Palocabildo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(662, 22, '54,518', 'Pamplona', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(663, 22, '54,52', 'Pamplonita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(664, 15, '94,887', 'Pana Pana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(665, 14, '25,524', 'Pandi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(666, 6, '15,522', 'Panqueba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(667, 31, '97,777', 'Papunaua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(668, 27, '68,533', 'Paramo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(669, 14, '25,53', 'Paratebueno', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(670, 14, '25,535', 'Pasca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(671, 21, '52,001', 'Pasto', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(672, 10, '19,532', 'Patia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(673, 6, '15,531', 'Pauna', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(674, 6, '15,533', 'Paya', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(675, 9, '85,25', 'Paz de Ariporo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(676, 6, '15,537', 'Paz de Rio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(677, 19, '47,541', 'Pedraza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(678, 11, '20,55', 'Pelaya', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(679, 7, '17,541', 'Pensilvania', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(680, 2, '5,541', 'Penol', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(681, 2, '5,543', 'Peque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(682, 25, '66,001', 'Pereira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(683, 6, '15,542', 'Pesca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(684, 10, '19,533', 'Piamonte', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(685, 27, '68,547', 'Piedecuesta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(686, 29, '73,547', 'Piedras', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(687, 10, '19,548', 'Piendamo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(688, 24, '63,548', 'Pijao', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(689, 19, '47,545', 'Pijino del Carmen', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(690, 27, '68,549', 'Pinchote', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(691, 5, '13,549', 'Pinillos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(692, 4, '8,549', 'Piojo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(693, 6, '15,55', 'Pisba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(694, 17, '41,548', 'Pital', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(695, 17, '41,551', 'Pitalito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(696, 19, '47,551', 'Pivijay', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(697, 29, '73,555', 'Planadas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(698, 13, '23,555', 'Planeta Rica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(699, 19, '47,555', 'Plato', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(700, 21, '52,54', 'Policarpa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(701, 4, '8,558', 'Polonuevo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(702, 4, '8,56', 'Ponedera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(703, 10, '19,001', 'Popayan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(704, 9, '85,263', 'Pore', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(705, 21, '52,56', 'Potosi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(706, 30, '76,563', 'Pradera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(707, 29, '73,563', 'Prado', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(708, 21, '52,565', 'Providencia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(709, 26, '88,564', 'Providencia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(710, 11, '20,57', 'Pueblo Bello', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(711, 13, '23,57', 'Pueblo Nuevo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(712, 25, '66,572', 'Pueblo Rico', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(713, 19, '47,57', 'Pueblo Viejo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(714, 2, '5,576', 'Pueblorrico', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(715, 27, '68,572', 'Puente Nacional', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(716, 21, '52,573', 'Puerres', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(717, 1, '91,53', 'Puerto Alegria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(718, 1, '91,536', 'Puerto Arica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(719, 23, '86,568', 'Puerto Asis', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(720, 2, '5,579', 'Puerto Berrio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(721, 6, '15,572', 'Puerto 6', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(722, 23, '86,569', 'Puerto Caicedo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(723, 32, '99,001', 'Puerto Carreno', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(724, 4, '8,573', 'Puerto Colombia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(725, 15, '94,884', 'Puerto Colombia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(726, 20, '50,45', 'Puerto Concordia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(727, 13, '23,574', 'Puerto Escondido', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(728, 20, '50,568', 'Puerto Gaitan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(729, 23, '86,571', 'Puerto Guzman', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(730, 13, '23,58', 'Puerto Libertador', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(731, 20, '50,577', 'Puerto Lleras', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(732, 20, '50,573', 'Puerto Lopez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(733, 2, '5,585', 'Puerto Nare', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(734, 1, '91,54', 'Puerto 21', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(735, 27, '68,573', 'Puerto Parra', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(736, 8, '18,592', 'Puerto Rico', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(737, 20, '50,59', 'Puerto Rico', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(738, 3, '81,591', 'Puerto Rondon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(739, 14, '25,572', 'Puerto Salgar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(740, 22, '54,553', 'Puerto 27', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(741, 1, '91,669', 'Puerto 27', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(742, 10, '19,573', 'Puerto Tejada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(743, 2, '5,591', 'Puerto Triunfo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(744, 27, '68,575', 'Puerto Wilches', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(745, 14, '25,58', 'Puli', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(746, 21, '52,585', 'Pupiales', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(747, 10, '19,585', 'Purace', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(748, 29, '73,585', 'Purificacion', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(749, 13, '23,586', 'Purisima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(750, 14, '25,592', 'Quebradanegra', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(751, 14, '25,594', 'Quetame', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(752, 12, '27,001', 'Quibdo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(753, 24, '63,594', 'Quimbaya', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(754, 25, '66,594', 'Quinchia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(755, 6, '15,58', 'Quipama', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(756, 14, '25,596', 'Quipile', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(757, 22, '54,599', 'Ragonvalia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(758, 6, '15,599', 'Ramiriqui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(759, 6, '15,6', 'Raquira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(760, 9, '85,279', 'Recetor', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(761, 5, '13,58', 'Regidor', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(762, 2, '5,604', 'Remedios', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(763, 19, '47,605', 'Remolino', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(764, 4, '8,606', 'Repelon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(765, 20, '50,606', 'Restrepo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(766, 30, '76,606', 'Restrepo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(767, 2, '5,607', 'Retiro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(768, 14, '25,612', 'Ricaurte', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(769, 21, '52,612', 'Ricaurte', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(770, 29, '73,616', 'Rio Blanco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(771, 11, '20,614', 'Rio de Oro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(772, 12, '27,58', 'Rio Iro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(773, 12, '27,6', 'Rio Quito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(774, 5, '13,6', 'Rio Viejo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(775, 30, '76,616', 'Riofrio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(776, 18, '44,001', 'Riohacha', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(777, 2, '5,615', 'Rionegro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(778, 27, '68,615', 'Rionegro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(779, 7, '17,614', 'Riosucio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(780, 12, '27,615', 'Riosucio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(781, 7, '17,616', '25', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(782, 17, '41,615', 'Rivera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(783, 21, '52,621', 'Roberto Payan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(784, 30, '76,622', 'Roldanillo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(785, 29, '73,622', 'Roncesvalles', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(786, 6, '15,621', 'Rondon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(787, 10, '19,622', 'Rosas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(788, 29, '73,624', 'Rovira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(789, 27, '68,655', 'Sabana de Torres', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(790, 4, '8,634', 'Sabanagrande', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(791, 2, '5,628', 'Sabanalarga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(792, 4, '8,638', 'Sabanalarga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(793, 9, '85,3', 'Sabanalarga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(794, 19, '47,66', 'Sabanas de San Angel', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(795, 2, '5,631', 'Sabaneta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(796, 6, '15,632', 'Saboya', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(797, 9, '85,315', 'Sacama', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(798, 6, '15,638', 'Sachica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(799, 13, '23,66', 'Sahagun', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(800, 17, '41,66', 'Saladoblanco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(801, 7, '17,653', 'Salamina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(802, 19, '47,675', 'Salamina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(803, 22, '54,66', 'Salazar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(804, 29, '73,671', 'Saldana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(805, 24, '63,69', 'Salento', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(806, 2, '5,642', 'Salgar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(807, 6, '15,646', 'Samaca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(808, 7, '17,662', 'Samana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(809, 21, '52,678', 'Samaniego', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(810, 28, '70,67', 'Sampues', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(811, 17, '41,668', 'San Agustin', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(812, 11, '20,71', 'San Alberto', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(813, 27, '68,669', 'San Andres', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(814, 26, '88,001', 'San Andres', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(815, 2, '5,647', 'San Andres de Cuerquia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(816, 21, '52,835', 'San Andres de Tumaco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(817, 13, '23,67', 'San Andres Sotavento', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(818, 13, '23,672', 'San Antero', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(819, 29, '73,675', 'San Antonio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(820, 14, '25,645', 'San Antonio del Tequendama', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(821, 27, '68,673', 'San Benito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(822, 28, '70,678', 'San Benito Abad', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(823, 14, '25,649', 'San Bernardo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(824, 21, '52,685', 'San Bernardo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(825, 13, '23,675', 'San Bernardo del Viento', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(826, 22, '54,67', 'San Calixto', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(827, 2, '5,649', 'San Carlos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(828, 13, '23,678', 'San Carlos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(829, 20, '50,68', 'San Carlos de Guaroa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(830, 14, '25,653', 'San Cayetano', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(831, 22, '54,673', 'San Cayetano', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(832, 5, '13,62', 'San Cristobal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(833, 11, '20,75', 'San Diego', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(834, 6, '15,66', 'San Eduardo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(835, 5, '13,647', 'San Estanislao', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(836, 15, '94,883', 'San Felipe', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(837, 5, '13,65', 'San Fernando', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(838, 2, '5,652', 'San Francisco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(839, 14, '25,658', 'San Francisco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(840, 23, '86,755', 'San Francisco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(841, 27, '68,679', 'San Gil', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(842, 5, '13,654', 'San Jacinto', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(843, 5, '13,655', 'San Jacinto del 10', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(844, 2, '5,656', 'San Jeronimo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(845, 27, '68,682', 'San Joaquin', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(846, 7, '17,665', 'San Jose', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(847, 2, '5,658', 'San Jose de La Montana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(848, 27, '68,684', 'San Jose de Miranda', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(849, 6, '15,664', 'San Jose de Pare', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(850, 13, '23,682', 'San Jose de Ure', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(851, 8, '18,61', 'San Jose del Fragua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(852, 16, '95,001', 'San Jose del 16', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(853, 12, '27,66', 'San Jose del Palmar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(854, 20, '50,683', 'San Juan de Arama', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(855, 28, '70,702', 'San Juan de Betulia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(856, 14, '25,662', 'San Juan de Rio Seco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(857, 2, '5,659', 'San Juan de Uraba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(858, 18, '44,65', 'San Juan del 11', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(859, 5, '13,657', 'San Juan Nepomuceno', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(860, 20, '50,686', 'San Juanito', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(861, 21, '52,687', 'San Lorenzo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(862, 2, '5,66', 'San Luis', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(863, 29, '73,678', 'San Luis', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(864, 6, '15,667', 'San Luis de Gaceno', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(865, 9, '85,325', 'San Luis de Gaceno', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(866, 28, '70,742', 'San Luis de Since', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(867, 28, '70,708', 'San Marcos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(868, 11, '20,77', 'San Martin', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(869, 20, '50,689', 'San Martin', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(870, 5, '13,667', 'San Martin de Loba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(871, 6, '15,673', 'San Mateo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(872, 27, '68,686', 'San Miguel', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(873, 23, '86,757', 'San Miguel', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(874, 6, '15,676', 'San Miguel de Sema', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(875, 28, '70,713', 'San Onofre', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(876, 21, '52,693', 'San Pablo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(877, 5, '13,67', 'San Pablo de Borbur', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(878, 6, '15,681', 'San Pablo de Borbur', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(879, 2, '5,664', 'San Pedro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(880, 28, '70,717', 'San Pedro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(881, 30, '76,67', 'San Pedro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(882, 21, '52,694', 'San Pedro de Cartago', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(883, 2, '5,665', 'San Pedro de Uraba', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(884, 13, '23,686', 'San Pelayo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(885, 2, '5,667', 'San Rafael', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(886, 2, '5,67', 'San Roque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(887, 10, '19,693', 'San Sebastian', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(888, 19, '47,692', 'San Sebastian de Buenavista', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(889, 2, '5,674', 'San Vicente', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(890, 27, '68,689', 'San Vicente de Chucuri', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(891, 8, '18,753', 'San Vicente del Caguan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(892, 19, '47,703', 'San Zenon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(893, 21, '52,683', 'Sandona', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(894, 19, '47,707', 'Santa Ana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(895, 2, '5,679', 'Santa Barbara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(896, 21, '52,696', 'Santa Barbara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(897, 27, '68,705', 'Santa Barbara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(898, 19, '47,72', 'Santa Barbara de Pinto', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(899, 5, '13,673', 'Santa Catalina', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(900, 6, '15,757', 'Socha', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(901, 27, '68,72', 'Santa Helena del Opon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(902, 29, '73,686', 'Santa Isabel', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(903, 4, '8,675', 'Santa Lucia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(904, 6, '15,69', 'Santa Maria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(905, 17, '41,676', 'Santa Maria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(906, 19, '47,001', 'Santa Marta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(907, 5, '13,683', 'Santa Rosa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(908, 10, '19,701', 'Santa Rosa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(909, 25, '66,682', 'Santa Rosa de Cabal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(910, 2, '5,686', 'Santa Rosa de Osos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(911, 6, '15,693', 'Santa Rosa de Viterbo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(912, 5, '13,688', 'Santa Rosa del Sur', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(913, 32, '99,624', 'Santa Rosalia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(914, 6, '15,696', 'Santa Sofia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(915, 21, '52,699', 'Santacruz', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(916, 2, '5,042', 'Santafe de 2', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(917, 6, '15,686', 'Santana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(918, 10, '19,698', '27 de Quilichao', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(919, 22, '54,68', 'Santiago', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(920, 23, '86,76', 'Santiago', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(921, 28, '70,82', 'Santiago de Tolu', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(922, 2, '5,69', 'Santo Domingo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(923, 4, '8,685', 'Santo Tomas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(924, 25, '66,687', 'Santuario', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(925, 21, '52,72', 'Sapuyes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(926, 3, '81,736', 'Saravena', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(927, 22, '54,72', 'Sardinata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(928, 14, '25,718', 'Sasaima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(929, 6, '15,72', 'Sativanorte', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(930, 6, '15,723', 'Sativasur', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(931, 2, '5,736', 'Segovia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(932, 14, '25,736', 'Sesquile', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(933, 30, '76,736', 'Sevilla', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(934, 6, '15,74', 'Siachoque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(935, 14, '25,74', 'Sibate', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(936, 23, '86,749', 'Sibundoy', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(937, 22, '54,743', 'Silos', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(938, 14, '25,743', 'Silvania', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(939, 10, '19,743', 'Silvia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(940, 27, '68,745', 'Simacota', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(941, 14, '25,745', 'Simijaca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(942, 5, '13,744', 'Simiti', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(943, 28, '70,001', 'Sincelejo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(944, 12, '27,745', 'Sipi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(945, 19, '47,745', 'Sitionuevo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(946, 14, '25,754', 'Soacha', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(947, 6, '15,753', 'Soata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(948, 27, '68,755', 'Socorro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(949, 6, '15,755', 'Socota', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(950, 6, '15,759', 'Sogamoso', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(951, 8, '18,756', 'Solano', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(952, 4, '8,758', 'Soledad', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(953, 8, '18,785', 'Solita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(954, 6, '15,761', 'Somondoco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(955, 2, '5,756', 'Sonson', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(956, 2, '5,761', 'Sopetran', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(957, 5, '13,76', 'Soplaviento', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(958, 14, '25,758', 'Sopo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(959, 6, '15,762', 'Sora', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(960, 6, '15,764', 'Soraca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(961, 6, '15,763', 'Sotaquira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(962, 10, '19,76', 'Sotara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(963, 27, '68,77', 'Suaita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(964, 4, '8,77', 'Suan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(965, 10, '19,78', 'Suarez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(966, 29, '73,77', 'Suarez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(967, 17, '41,77', 'Suaza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(968, 14, '25,769', 'Subachoque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(969, 10, '19,785', '28', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(970, 27, '68,773', '28', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(971, 28, '70,771', '28', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(972, 14, '25,772', 'Suesca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(973, 14, '25,777', 'Supata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(974, 7, '17,777', 'Supia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(975, 27, '68,78', 'Surata', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(976, 14, '25,779', 'Susa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(977, 6, '15,774', 'Susacon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(978, 6, '15,776', 'Sutamarchan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(979, 14, '25,781', 'Sutatausa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(980, 6, '15,778', 'Sutatenza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(981, 14, '25,785', 'Tabio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(982, 12, '27,787', 'Tado', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(983, 5, '13,78', 'Talaigua Nuevo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(984, 11, '20,787', 'Tamalameque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(985, 9, '85,4', 'Tamara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(986, 3, '81,794', 'Tame', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(987, 2, '5,789', 'Tamesis', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(988, 21, '52,786', 'Taminango', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(989, 21, '52,788', 'Tangua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(990, 31, '97,666', 'Taraira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(991, 1, '91,798', 'Tarapaca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(992, 2, '5,79', 'Taraza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(993, 17, '41,791', 'Tarqui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(994, 2, '5,792', 'Tarso', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(995, 6, '15,79', 'Tasco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(996, 9, '85,41', 'Tauramena', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(997, 14, '25,793', 'Tausa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(998, 17, '41,799', 'Tello', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(999, 14, '25,797', 'Tena', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1000, 19, '47,798', 'Tenerife', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1001, 14, '25,799', 'Tenjo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1002, 6, '15,798', 'Tenza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1003, 22, '54,8', 'Teorama', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1004, 17, '41,801', 'Teruel', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1005, 17, '41,797', 'Tesalia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1006, 14, '25,805', 'Tibacuy', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1007, 6, '15,804', 'Tibana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1008, 6, '15,806', 'Tibasosa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1009, 14, '25,807', 'Tibirita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1010, 22, '54,81', 'Tibu', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1011, 13, '23,807', 'Tierralta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1012, 17, '41,807', 'Timana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1013, 10, '19,807', 'Timbio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1014, 10, '19,809', 'Timbiqui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1015, 6, '15,808', 'Tinjaca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1016, 6, '15,81', 'Tipacoque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1017, 5, '13,81', 'Tiquisio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1018, 2, '5,809', 'Titiribi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1019, 6, '15,814', 'Toca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1020, 14, '25,815', 'Tocaima', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1021, 14, '25,817', 'Tocancipa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1022, 6, '15,816', 'Togui', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1023, 2, '5,819', 'Toledo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1024, 22, '54,82', 'Toledo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1025, 28, '70,823', 'Tolu Viejo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1026, 27, '68,82', 'Tona', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1027, 6, '15,82', 'Topaga', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1028, 14, '25,823', 'Topaipi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1029, 10, '19,821', 'Toribio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1030, 30, '76,823', 'Toro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1031, 6, '15,822', 'Tota', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1032, 10, '19,824', 'Totoro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1033, 9, '85,43', 'Trinidad', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1034, 30, '76,828', 'Trujillo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1035, 4, '8,832', 'Tubara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1036, 13, '23,815', 'Tuchin', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1037, 30, '76,834', 'Tulua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1038, 6, '15,001', 'Tunja', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1039, 6, '15,832', 'Tunungua', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1040, 21, '52,838', 'Tuquerres', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1041, 5, '13,836', 'Turbaco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1042, 5, '13,838', 'Turbana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1043, 2, '5,837', 'Turbo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1044, 6, '15,835', 'Turmeque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1045, 6, '15,837', 'Tuta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1046, 6, '15,839', 'Tutaza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1047, 14, '25,839', 'Ubala', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1048, 14, '25,841', 'Ubaque', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1049, 30, '76,845', 'Ulloa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1050, 6, '15,842', 'Umbita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1051, 14, '25,845', 'Une', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1052, 12, '27,8', 'Unguia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1053, 12, '27,81', 'Union Panamericana', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1054, 2, '5,842', 'Uramita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1055, 20, '50,37', 'Uribe', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1056, 18, '44,847', 'Uribia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1057, 2, '5,847', 'Urrao', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1058, 18, '44,855', 'Urumita', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1059, 4, '8,849', 'Usiacuri', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1060, 14, '25,851', 'utica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1061, 2, '5,854', 'Valdivia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1062, 13, '23,855', 'Valencia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1063, 23, '86,865', 'Valle de Guamez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1064, 27, '68,855', 'Valle de San Jose', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1065, 29, '73,854', 'Valle de San Juan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1066, 11, '20,001', 'Valledupar', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1067, 2, '5,856', 'Valparaiso', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1068, 8, '18,86', 'Valparaiso', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1069, 2, '5,858', 'Vegachi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1070, 27, '68,861', 'Velez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1071, 29, '73,861', 'Venadillo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1072, 2, '5,861', 'Venecia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1073, 14, '25,506', 'Venecia', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1074, 6, '15,861', 'Ventaquemada', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1075, 14, '25,862', 'Vergara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1076, 30, '76,863', 'Versalles', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1077, 27, '68,867', 'Vetas', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1078, 14, '25,867', 'Viani', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1079, 7, '17,867', 'Victoria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1080, 2, '5,873', 'Vigia del Fuerte', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1081, 30, '76,869', 'Vijes', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1082, 22, '54,871', 'Villa Caro', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1083, 6, '15,407', 'Villa de Leyva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1084, 14, '25,843', 'Villa de San Diego de Ubate', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1085, 22, '54,874', 'Villa del Rosario', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1086, 10, '19,845', 'Villa Rica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1087, 23, '86,885', 'Villagarzon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1088, 14, '25,871', 'Villagomez', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1089, 29, '73,87', 'Villahermosa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1090, 7, '17,873', 'Villamaria', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1091, 5, '13,873', 'Villanueva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1092, 18, '44,874', 'Villanueva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1093, 27, '68,872', 'Villanueva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1094, 9, '85,44', 'Villanueva', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1095, 14, '25,873', 'Villapinzon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1096, 29, '73,873', 'Villarrica', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1097, 20, '50,001', 'Villavicencio', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1098, 17, '41,872', 'Villavieja', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1099, 14, '25,875', 'Villeta', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1100, 14, '25,878', 'Viota', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1101, 6, '15,879', 'Viracacha', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1102, 20, '50,711', 'Vista Hermosa', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1103, 7, '17,877', 'Viterbo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1104, 14, '25,885', 'Yacopi', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1105, 21, '52,885', 'Yacuanquer', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1106, 17, '41,885', 'Yaguara', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1);
INSERT INTO `municipio` (`idMunicipio`, `idDepartamento`, `munCodigoDane`, `munNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1107, 2, '5,885', 'Yali', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1108, 2, '5,887', 'Yarumal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1109, 31, '97,889', 'Yavarate', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1110, 2, '5,89', 'Yolombo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1111, 2, '5,893', 'Yondo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1112, 9, '85,001', 'Yopal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1113, 30, '76,89', 'Yotoco', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1114, 30, '76,892', 'Yumbo', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1115, 5, '13,894', 'Zambrano', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1116, 27, '68,895', 'Zapatoca', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1117, 19, '47,96', 'Zapayan', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1118, 2, '5,895', 'Zaragoza', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1119, 30, '76,895', 'Zarzal', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1120, 6, '15,897', 'Zetaquira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1121, 14, '25,898', 'Zipacon', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1122, 14, '25,899', 'Zipaquira', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(1123, 19, '47,98', 'Zona Bananera', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musculo`
--

CREATE TABLE `musculo` (
  `idMusculo` int(11) NOT NULL,
  `idClasificacionMusculo` int(11) NOT NULL,
  `musNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `musculo`
--

INSERT INTO `musculo` (`idMusculo`, `idClasificacionMusculo`, `musNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(2, 1, 'Triceps', 'A', '2018-11-14 14:58:21', '2018-11-14 14:58:21', -1, -1),
(5, 1, 'Pectoral superior', 'A', '2018-11-14 15:05:37', '2018-11-14 15:05:37', -1, -1),
(11, 1, 'Pectoral inferior', 'A', '2018-11-14 15:12:08', '2018-11-14 15:12:08', -1, -1),
(12, 3, 'Gluteo', 'I', '2018-11-15 09:24:52', '2018-11-15 09:24:52', -1, -1),
(13, 3, 'Muslos', 'I', '2018-11-15 09:25:40', '2018-11-15 09:25:40', -1, -1),
(14, 1, 'Bíceps', 'A', '2018-11-15 10:14:54', '2018-11-15 10:14:54', -1, -1),
(15, 2, 'Abdominales', 'A', '2018-11-15 11:05:18', '2018-11-15 11:05:18', -1, -1),
(16, 2, 'Torax', 'A', '2018-12-05 06:24:56', '2018-12-05 06:24:56', -1, -1),
(17, 3, 'Muslo', 'A', '2018-12-05 07:32:57', '2018-12-05 07:32:57', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `paiNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idPais`, `paiNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Colombia', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

CREATE TABLE `participante` (
  `idParticipante` int(11) NOT NULL,
  `idAprendiz` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participante`
--

INSERT INTO `participante` (`idParticipante`, `idAprendiz`, `idEquipo`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 6, 1, 'A', '2018-12-04 07:18:16', '2018-12-04 07:18:16', -1, -1),
(2, 9, 4, 'A', '2018-12-04 07:30:21', '2018-12-04 07:30:21', -1, -1),
(3, 9, 4, 'A', '2018-12-04 07:30:21', '2018-12-04 07:30:21', -1, -1),
(4, 2, 4, 'A', '2018-12-04 07:31:17', '2018-12-04 07:31:17', -1, -1),
(5, 9, 1, 'A', '2018-12-05 07:17:16', '2018-12-05 07:17:16', -1, -1),
(6, 3, 1, 'A', '2018-12-05 07:18:28', '2018-12-05 07:18:28', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `idMunicipioNacimiento` int(11) NOT NULL,
  `idMunicipioResidencia` int(11) NOT NULL,
  `idTipoDocumento` int(11) NOT NULL,
  `idGrupoSanguineo` int(11) NOT NULL,
  `idGenero` int(11) NOT NULL,
  `idSede` int(11) NOT NULL,
  `idEps` int(11) NOT NULL,
  `idRegimen` int(11) NOT NULL,
  `perNit` varchar(15) NOT NULL,
  `perPrimerNombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `perSegundoNombre` varchar(50) DEFAULT NULL,
  `perPrimerApellido` varchar(50) CHARACTER SET latin1 NOT NULL,
  `perSegundoApellido` varchar(50) DEFAULT NULL,
  `perFechaNacimiento` date NOT NULL,
  `perTelefono` varchar(20) DEFAULT NULL,
  `perCelular` varchar(15) NOT NULL,
  `perCorreoElectronico` varchar(50) NOT NULL,
  `perDireccion` varchar(40) NOT NULL,
  `perFoto` varchar(100) DEFAULT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para solicitar los datos básicos de todas las persona';

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `idMunicipioNacimiento`, `idMunicipioResidencia`, `idTipoDocumento`, `idGrupoSanguineo`, `idGenero`, `idSede`, `idEps`, `idRegimen`, `perNit`, `perPrimerNombre`, `perSegundoNombre`, `perPrimerApellido`, `perSegundoApellido`, `perFechaNacimiento`, `perTelefono`, `perCelular`, `perCorreoElectronico`, `perDireccion`, `perFoto`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 613, 613, 1, 1, 1, 1, 15, 1, '1075222635', 'Yenner', 'Alberto', 'Suarez', 'Murillo', '1999-06-21', NULL, '3213049684', 'yasuarez536@misena.edu.co', 'calle 8 #32-20', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(2, 613, 613, 1, 1, 2, 1, 12, 1, '1075318495', 'MarÃ­a', 'Valentina', 'Zapata', 'Herrera', '1999-05-24', NULL, '3506762186', 'mvzapata0@misena.edu.co', 'calle 3 # 27-39', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(3, 111, 613, 1, 3, 1, 1, 13, 4, '1001277248', 'Luigui', 'David', 'Ramirez', 'Ramirez', '2000-02-09', NULL, '3106664525', 'ldramirez842@misena.edu.co', 'cra 31A #G-34', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(4, 159, 159, 1, 3, 2, 1, 15, 4, '1079187124', 'Karen ', 'yulieth', 'Alvarez', 'Ferreira', '1999-08-18', NULL, '3152078452', 'kyalvarez09@misena.edu.co', 'calle 7 # 10A-03', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(5, 613, 613, 1, 3, 1, 1, 3, 4, '1075303895', 'David', NULL, 'Corredor', 'Tamayo', '1997-05-01', NULL, '3184939634', 'dcorredor59@misena.edu.co', 'calle 66 #1D34', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(6, 442, 613, 1, 1, 2, 1, 15, 1, '1004491130', 'Laura', 'Yisela', 'CedeÃ±o', 'Andrade', '1999-12-06', NULL, '3143219894', 'lycedeno@misena.edu.co', 'N-A', '', 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(7, 998, 998, 1, 1, 1, 1, 15, 1, '1082806433', 'Juan', 'pablo', 'VerÃ¹', 'Perdomo', '1996-12-30', NULL, '3209106057', 'jp74@misena.edu.co', 'Tello Barrio Centro', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(8, 653, 653, 1, 1, 2, 1, 15, 1, '1004156838', 'MÃ³nica', 'Alexandra', 'Celis', 'García', '1999-05-12', NULL, '3144684653', 'macelis83@misena.edu.co', 'calle 27 # 17-52', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(9, 267, 613, 1, 3, 1, 1, 14, 4, '1010095911', 'Jhon', 'Jairo', 'Sanchez', 'Fajardo', '2000-04-15', NULL, '3138538761', 'jjsanchez11@misena.edu.co', 'Calle 78 #2W64', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(10, 435, 613, 1, 4, 2, 1, 15, 1, '1075314099', 'Eliana', 'Lissett', 'PeÃ±a', 'Losada', '1998-09-06', NULL, '3112385721', 'elpena99@misena.edu.co', 'calle 2 B # 34-34', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(11, 613, 613, 1, 3, 1, 1, 3, 4, '1003813427', 'Duvan', 'Javier', 'Tovar', 'Valderrama', '2000-08-10', NULL, '3174167289', 'djtovar7@misena.edu.co', 'calle B sur #25', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(12, 159, 159, 1, 3, 2, 1, 13, 3, '1079186269', 'Maria', 'del Pilar', 'Perdomo', 'Rodriguez', '1998-09-26', NULL, '3024384152', 'mdperdomo59@misena.edu.co', 'cra 6 #20-49', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(13, 159, 159, 1, 1, 2, 1, 15, 4, '1079186913', 'Diana', 'Marcela', 'Barreiro', 'Fernandez', '1999-04-05', NULL, '3133327664', 'dmbareriro@misena.edu.co', 'calle 43 #14-46', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(14, 159, 159, 1, 1, 1, 1, 16, 1, '1007704871', 'Jhon', 'Stiven', 'Osorio', 'Burgos', '2000-07-31', NULL, '3022621753', 'jsosorio178@misena.edu.co', 'calle 24 #3-04', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(15, 442, 613, 1, 1, 2, 1, 3, 3, '1004491521', 'MarÃ­a', 'José', 'Carvajal', 'Polanía', '2000-01-07', NULL, '3224089225', 'mjcarvajal1@misena.edu.co', 'calle 37 # 7 AW-10', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(16, 613, 613, 1, 7, 1, 1, 3, 3, '1082216957', 'Carlos', 'Daniel', 'Cerquera', 'Gaona', '1998-06-06', NULL, '3219081846', 'cdcerquera0@misena.edu.co', 'calle 37 #7 AW-10', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(17, 159, 159, 1, 3, 2, 1, 15, 4, '1079186347', 'Loren', 'Dayana', 'Cruz', 'Calderon', '1999-09-24', NULL, '3223801840', 'ldcruz49@misena.edu.co', 'N-A', '', 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(18, 159, 159, 1, 3, 1, 1, 3, 3, '1079186941', 'Santiago', NULL, 'Cuellar', 'Figueroa', '1999-06-14', NULL, '3187686533', 'scuellar14@misena.edu.co', 'calle 32 B #12-63', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(19, 613, 613, 1, 3, 1, 1, 3, 3, '1075321220', 'Pablo', 'Emilio', 'Escobar', 'Ossa', '1999-10-06', NULL, '3123863012', 'peescobar7@misena.edu.co', 'calle 3 A #11-28', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(20, 613, 613, 1, 5, 1, 1, 11, 4, '1075299979', 'Luis ', 'Alberto', 'Guarnizo', 'Valderrama', '1996-10-11', '8715877', '318776490', 'laguarnizo9@misena.edu.co', 'calle 34 #11-65', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(21, 613, 613, 1, 3, 1, 1, 15, 1, '1007465577', 'Juan', 'Camilo', 'Escobar', 'Conde', '2000-01-21', '8663023', '3209902823', 'jcescobar775@misena.edu.co', 'calle 71A # 24-23', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1),
(22, 905, 613, 1, 1, 2, 1, 15, 2, '1010135781', 'Karen ', 'Yuliana', 'Palacio', 'Minú', '2000-07-26', NULL, '3103772493', 'kypalacio1@misena.edu.co', 'calle 77 #5-45', NULL, 'A', '2018-10-17 11:11:00', '2018-10-17 11:11:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangoimc`
--

CREATE TABLE `rangoimc` (
  `idRangoIMC` int(11) NOT NULL,
  `ranNombre` varchar(50) NOT NULL,
  `ranValorMinimo` float NOT NULL,
  `ranValorMaximo` float NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rangoimc`
--

INSERT INTO `rangoimc` (`idRangoIMC`, `ranNombre`, `ranValorMinimo`, `ranValorMaximo`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Bajo Peso', 0, 18.4, 'A', '2018-10-12 10:26:00', '2018-10-12 10:26:00', -1, -1),
(2, 'Saludable', 18.5, 24.9, 'A', '2018-10-12 10:26:00', '2018-10-12 10:26:00', -1, -1),
(3, 'Sobrepeso', 25, 29.9, 'A', '2018-10-12 10:26:00', '2018-10-12 10:26:00', -1, -1),
(4, 'Obesidad', 30, 100, 'A', '2018-10-12 10:26:00', '2018-10-12 10:26:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangorecomendacion`
--

CREATE TABLE `rangorecomendacion` (
  `idRangoRecomendacion` int(11) NOT NULL,
  `idRangoImc` int(11) NOT NULL,
  `idRecomendacion` int(11) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacionalimentaria`
--

CREATE TABLE `recomendacionalimentaria` (
  `idRecomendacionAlimentaria` int(11) NOT NULL,
  `reaNombre` varchar(50) NOT NULL,
  `reaDescripcion` varchar(300) DEFAULT NULL,
  `reaFoto` varchar(100) DEFAULT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regimen`
--

CREATE TABLE `regimen` (
  `idRegimen` int(11) NOT NULL,
  `regNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `regimen`
--

INSERT INTO `regimen` (`idRegimen`, `regNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Subsidiado', 'A', '2018-10-12 09:32:00', '2018-10-12 10:03:00', -1, -1),
(2, 'Contributivo', 'A', '2018-10-12 09:40:00', '2018-10-12 10:03:00', -1, -1),
(3, 'Beneficiado', 'A', '2018-10-12 09:46:00', '2018-10-12 10:03:00', -1, -1),
(4, 'Otro', 'A', '2018-10-17 00:00:00', '2018-10-17 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrogimnasio`
--

CREATE TABLE `registrogimnasio` (
  `idRegistroGimnasio` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrogimnasio`
--

INSERT INTO `registrogimnasio` (`idRegistroGimnasio`, `idUsuario`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 1, 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1),
(2, 2, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(3, 3, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(4, 4, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(5, 5, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(6, 6, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(7, 7, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(8, 8, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(9, 9, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(10, 10, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(11, 11, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(12, 12, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(13, 13, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(14, 14, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(15, 15, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(16, 16, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(17, 17, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(18, 18, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(19, 19, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(20, 2, 'A', '2018-11-16 17:56:02', '2018-11-16 17:56:02', -1, -1),
(28, 2, 'A', '2018-11-17 16:41:30', '2018-11-17 16:41:30', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `rolNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `rolNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Administrador', 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1),
(2, 'Profesional de apoyo deportivo', 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1),
(3, 'Profesional de apoyo de gimnasio', 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1),
(4, 'Aprendiz', 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE `rutina` (
  `idRutina` int(11) NOT NULL,
  `idClasificacionRutina` int(11) NOT NULL,
  `rutNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rutina`
--

INSERT INTO `rutina` (`idRutina`, `idClasificacionRutina`, `rutNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(19, 3, 'Rutina cuerpo completo', 'A', '2018-10-19 00:00:00', '2018-11-24 17:08:40', -1, -1),
(20, 3, 'Fortalecer piernas/brazos', 'A', '0000-00-00 00:00:00', '2018-11-24 17:08:47', -1, -1),
(21, 5, 'Rutina avanzada de cuerpo completo', 'A', '2018-11-15 00:00:00', '2018-11-24 17:08:52', 1, -1),
(22, 1, 'Rutina avanzada de brazos/piernas', 'A', '2018-11-15 00:00:00', '2018-11-23 07:24:32', 1, -1),
(23, 1, 'Ciclos', 'A', '2018-11-22 18:36:24', '2018-11-23 07:24:44', -1, -1),
(24, 1, 'Prueba', 'I', '2018-11-22 18:37:16', '2018-11-23 08:45:39', -1, -1),
(25, 1, 'Prueba 2', 'I', '2018-11-23 06:38:21', '2018-11-23 08:44:53', -1, -1),
(26, 1, 'Prueba 2', 'I', '2018-11-24 16:43:29', '2018-11-24 16:45:30', -1, -1),
(27, 5, 'Prueba 2', 'I', '2018-11-24 16:45:21', '2018-11-24 16:45:33', -1, -1),
(28, 4, 'Prueba 3', 'A', '2018-11-26 13:32:21', '2018-11-26 13:32:33', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutinaejercicio`
--

CREATE TABLE `rutinaejercicio` (
  `idRutinaEjercio` int(11) NOT NULL,
  `idRutina` int(11) NOT NULL,
  `idEjercicio` int(11) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rutinaejercicio`
--

INSERT INTO `rutinaejercicio` (`idRutinaEjercio`, `idRutina`, `idEjercicio`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 19, 2, 'A', '2018-10-19 00:00:00', '2018-10-02 00:00:00', -1, 1),
(2, 19, 4, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', -1, -1),
(5, 20, 3, 'A', '2018-10-19 00:00:00', '2018-10-02 00:00:00', -1, -1),
(10, 20, 7, 'A', '2018-11-15 00:00:00', '2018-11-15 00:00:00', 1, 1),
(11, 20, 8, 'A', '2018-11-15 00:00:00', '2018-11-15 00:00:00', 1, 1),
(12, 20, 9, 'A', '2018-11-15 00:00:00', '2018-11-15 00:00:00', 1, 1),
(13, 19, 9, 'A', '2018-11-15 00:00:00', '2018-11-15 00:00:00', 1, 1),
(14, 19, 6, 'A', '2018-11-15 00:00:00', '2018-11-15 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `idSede` int(11) NOT NULL,
  `idCentroFormacion` int(11) NOT NULL,
  `sedCodigo` varchar(50) DEFAULT NULL,
  `sedNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`idSede`, `idCentroFormacion`, `sedCodigo`, `sedNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 1, '9527', 'SENA INDUSTRIA', 'A', '2018-10-16 00:00:00', '2018-10-16 00:00:00', -1, -1),
(2, 1, '9527', 'SENA COMERCIO', 'A', '2018-10-16 00:00:00', '2018-10-16 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seriesrepeticiones`
--

CREATE TABLE `seriesrepeticiones` (
  `idSeriesRepeticiones` int(11) NOT NULL,
  `idValoracionRutina` int(11) NOT NULL,
  `idRutinaEjercicio` int(11) NOT NULL,
  `series` tinyint(4) DEFAULT NULL,
  `repeticiones` tinyint(4) DEFAULT NULL,
  `tiempo` int(11) DEFAULT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeporte`
--

CREATE TABLE `tipodeporte` (
  `idTipoDeporte` int(11) NOT NULL,
  `tipNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipodeporte`
--

INSERT INTO `tipodeporte` (`idTipoDeporte`, `tipNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Colectivo', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1),
(2, 'Individual', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idTipoDocumento` int(11) NOT NULL,
  `tidNombre` varchar(50) NOT NULL,
  `tidAbreviacion` varchar(10) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`idTipoDocumento`, `tidNombre`, `tidAbreviacion`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Cedula de Ciudadania', 'C.C', 'A', '2018-10-12 09:37:00', '2018-10-12 09:56:00', -1, -1),
(2, 'Tarjeta de Identidad', 'T.I', 'A', '2018-10-12 09:41:00', '2018-10-12 09:56:00', -1, -1),
(3, 'Registro Civil', 'R.C', 'A', '2018-10-12 09:46:00', '2018-10-12 09:56:00', -1, -1),
(4, 'Cedula de Extranjeria', 'C.E', 'A', '2018-10-12 09:48:00', '2018-10-12 09:56:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoejercicio`
--

CREATE TABLE `tipoejercicio` (
  `idTipoEjercicio` int(11) NOT NULL,
  `tieNombre` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoejercicio`
--

INSERT INTO `tipoejercicio` (`idTipoEjercicio`, `tieNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(2, 'Flexibilidad', 'A', '2018-11-14 00:00:00', '0000-00-00 00:00:00', -1, 1),
(3, 'Aeróbicos', 'A', '2018-11-14 00:00:00', '0000-00-00 00:00:00', -1, 1),
(4, 'Fuerza/Resistencia', 'A', '2018-11-14 00:00:00', '0000-00-00 00:00:00', -1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoeliminatoria`
--

CREATE TABLE `tipoeliminatoria` (
  `idTipoEliminatoria` int(11) NOT NULL,
  `idClasificacionTorneo` int(11) NOT NULL,
  `tieNombre` varchar(50) NOT NULL,
  `tieImagen` varchar(100) DEFAULT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoeliminatoria`
--

INSERT INTO `tipoeliminatoria` (`idTipoEliminatoria`, `idClasificacionTorneo`, `tieNombre`, `tieImagen`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(2, 1, 'Sencilla', 'NULL', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1),
(3, 1, 'Doble', 'NULL', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1),
(4, 1, 'Suizo', 'NULL', 'A', '2018-10-10 00:00:00', '2018-10-10 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovaloracion`
--

CREATE TABLE `tipovaloracion` (
  `idTipoValoracion` int(11) NOT NULL,
  `tipNombreValoracion` varchar(50) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipovaloracion`
--

INSERT INTO `tipovaloracion` (`idTipoValoracion`, `tipNombreValoracion`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 'Inicial', 'A', '2018-10-12 10:47:00', '2018-10-12 10:47:00', -1, -1),
(2, 'Periodica', 'A', '2018-10-12 10:47:00', '2018-10-12 10:47:00', -1, -1),
(3, 'Emergencia', 'A', '2018-10-12 10:47:00', '2018-10-12 10:47:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE `torneo` (
  `idTorneo` int(11) NOT NULL,
  `idClasificacionTorneo` int(11) NOT NULL,
  `idDisciplina` int(11) NOT NULL,
  `idLugar` int(11) NOT NULL,
  `idGeneroTorneo` int(11) NOT NULL,
  `idEncargado` int(11) NOT NULL,
  `idTipoEliminatoria` int(11) NOT NULL,
  `torNumeroEquipos` int(11) NOT NULL,
  `torNombre` varchar(50) NOT NULL,
  `torFechaInicio` date NOT NULL,
  `torFechaFin` date NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `torneo`
--

INSERT INTO `torneo` (`idTorneo`, `idClasificacionTorneo`, `idDisciplina`, `idLugar`, `idGeneroTorneo`, `idEncargado`, `idTipoEliminatoria`, `torNumeroEquipos`, `torNombre`, `torFechaInicio`, `torFechaFin`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(2, 1, 2, 1, 3, 9, 2, 2, 'Eliminatoria de basketball', '2018-12-01', '2018-12-07', 'A', '2018-12-03 00:00:00', '2018-12-03 00:00:00', 1, 1),
(3, 1, 6, 1, 3, 12, 4, 5, 'Prueba', '2018-12-10', '2018-12-19', 'A', '2018-12-31 00:00:00', '2018-12-31 00:00:00', -1, 0),
(4, 1, 6, 1, 3, 12, 4, 5, 'Prueba', '2018-12-10', '2018-12-19', 'I', '2018-12-31 00:00:00', '2018-12-31 00:00:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `usuUsuario` varchar(20) NOT NULL,
  `usuPassword` varchar(150) NOT NULL,
  `usuFechaActivacion` date NOT NULL,
  `usuFechaExpiracion` date NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `idPersona`, `usuUsuario`, `usuPassword`, `usuFechaActivacion`, `usuFechaExpiracion`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 19, '1075321220', '1075321220', '2018-10-19', '2019-10-19', 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1),
(2, 1, '1075222635', '1075222635', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(3, 2, '1075318495', '1075318495', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(4, 3, '1001277248', '1001277248', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(5, 4, '1079187124', '1079187124', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(6, 5, '1075303895', '1075303895', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(7, 6, '1004491130', '1004491130', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(8, 7, '1082806433', '1082806433', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(9, 8, '1004156838', '1004156838', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(10, 9, '1010095911', '1010095911', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(11, 10, '1075314099', '1075314099', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(12, 11, '1003813427', '1003813427', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(13, 12, '1079186269', '1079186269', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(14, 13, '1079186913', '1079186913', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(15, 14, '1007704871', '1007704871', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(16, 15, '1004491521', '1004491521', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(17, 16, '1082216957', '1082216957', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(18, 17, '1079186347', '1079186347', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(19, 18, '1079186941', '1079186941', '2018-10-19', '0000-00-00', 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariorol`
--

CREATE TABLE `usuariorol` (
  `idUsuarioRol` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuariorol`
--

INSERT INTO `usuariorol` (`idUsuarioRol`, `idUsuario`, `idRol`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(1, 1, 1, 'A', '2018-10-19 00:00:00', '2018-10-19 00:00:00', -1, -1),
(2, 2, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(3, 3, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(4, 4, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(5, 5, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(6, 6, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(7, 7, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(8, 8, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(9, 9, 1, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(10, 10, 3, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(11, 11, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(12, 12, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(13, 13, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(14, 14, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(15, 15, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(16, 16, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(17, 17, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(18, 18, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1),
(19, 19, 4, 'A', '2018-10-19 10:25:00', '2018-10-19 10:25:00', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `idValoracion` int(11) NOT NULL,
  `idTipoValoracion` int(11) NOT NULL,
  `idRangoImc` int(11) NOT NULL,
  `idRegistroGimnasio` int(11) NOT NULL,
  `valPeso` double NOT NULL,
  `valEstatura` double NOT NULL,
  `valIMC` double NOT NULL,
  `valEdad` tinyint(4) DEFAULT NULL,
  `valDescripcion` varchar(100) DEFAULT NULL,
  `valObservacion` varchar(100) DEFAULT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`idValoracion`, `idTipoValoracion`, `idRangoImc`, `idRegistroGimnasio`, `valPeso`, `valEstatura`, `valIMC`, `valEdad`, `valDescripcion`, `valObservacion`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES
(20, 1, 1, 1, 53, 1, 18, 17, NULL, NULL, 'A', '2012-10-19 10:59:00', '2012-10-19 10:59:00', -1, -1),
(21, 1, 2, 2, 65, 1, 24, 16, NULL, NULL, 'A', '2012-10-19 10:59:00', '2012-10-19 10:59:00', -1, -1),
(22, 1, 3, 3, 72, 1, 24, 18, NULL, NULL, 'A', '2012-10-19 10:59:00', '2012-10-19 10:59:00', -1, -1),
(23, 1, 4, 4, 115, 1, 37, 23, NULL, NULL, 'A', '2012-10-19 10:59:00', '2012-10-19 10:59:00', -1, -1),
(24, 1, 1, 5, 53, 1, 18, 21, NULL, NULL, 'A', '2013-10-19 10:59:00', '2013-10-19 10:59:00', -1, -1),
(25, 1, 2, 6, 65, 1, 24, 20, NULL, NULL, 'A', '2013-10-19 10:59:00', '2013-10-19 10:59:00', -1, -1),
(26, 1, 3, 7, 72, 1, 24, 16, NULL, NULL, 'A', '2013-10-19 10:59:00', '2013-10-19 10:59:00', -1, -1),
(27, 1, 4, 8, 115, 1, 37, 18, NULL, NULL, 'A', '2013-10-19 10:59:00', '2013-10-19 10:59:00', -1, -1),
(28, 1, 1, 9, 53, 1, 18, 18, NULL, NULL, 'A', '2014-10-19 10:59:00', '2014-10-19 10:59:00', -1, -1),
(29, 1, 2, 10, 65, 1, 24, 18, NULL, NULL, 'A', '2014-10-19 10:59:00', '2014-10-19 10:59:00', -1, -1),
(30, 1, 3, 11, 72, 1, 24, 19, NULL, NULL, 'A', '2014-10-19 10:59:00', '2014-10-19 10:59:00', -1, -1),
(31, 1, 4, 12, 115, 1, 37, 19, NULL, NULL, 'A', '2015-10-19 10:59:00', '2015-10-19 10:59:00', -1, -1),
(32, 1, 1, 13, 53, 1, 18, 17, NULL, NULL, 'A', '2015-10-19 10:59:00', '2015-10-19 10:59:00', -1, -1),
(33, 1, 2, 14, 65, 1, 24, 18, NULL, NULL, 'A', '2016-10-19 10:59:00', '2016-10-19 10:59:00', -1, -1),
(34, 1, 3, 15, 72, 1, 24, 17, NULL, NULL, 'A', '2016-10-19 10:59:00', '2016-10-19 10:59:00', -1, -1),
(35, 1, 4, 16, 115, 1, 37, 19, NULL, NULL, 'A', '2016-10-19 10:59:00', '2016-10-19 10:59:00', -1, -1),
(36, 1, 1, 17, 53, 1, 18, 20, NULL, NULL, 'A', '2017-10-19 10:59:00', '2017-10-19 10:59:00', -1, -1),
(37, 1, 2, 18, 65, 1, 24, 23, NULL, NULL, 'A', '2017-10-19 10:59:00', '2017-10-19 10:59:00', -1, -1),
(38, 1, 3, 19, 72, 1, 24, 21, NULL, NULL, 'A', '2017-10-19 10:59:00', '2017-10-19 10:59:00', -1, -1),
(39, 1, 2, 20, 60, 160, 23.4, 19, 'Ok', 'OK', 'A', '2018-11-16 17:56:02', '2018-11-16 17:56:02', -1, -1),
(47, 1, 3, 28, 68, 160, 26.6, 19, 'Bien', 'bien', 'A', '2018-11-17 16:41:30', '2018-11-17 16:41:30', -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracionrutina`
--

CREATE TABLE `valoracionrutina` (
  `idValoracionRutina` int(11) NOT NULL,
  `idValoracion` int(11) NOT NULL,
  `idRutina` int(11) NOT NULL,
  `idDia` int(11) NOT NULL,
  `estado` enum('A','I') NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `fechaModificacion` datetime NOT NULL,
  `usuarioCreacion` int(11) NOT NULL,
  `usuarioModificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`idAprendiz`),
  ADD UNIQUE KEY `idPersona` (`idPersona`),
  ADD KEY `idFicha` (`idFicha`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idArea`);

--
-- Indices de la tabla `asistenciagimnasio`
--
ALTER TABLE `asistenciagimnasio`
  ADD PRIMARY KEY (`idAsistenciaGimansio`),
  ADD KEY `idAprendiz` (`idAprendiz`);

--
-- Indices de la tabla `bienestar`
--
ALTER TABLE `bienestar`
  ADD PRIMARY KEY (`idBienestar`),
  ADD KEY `idPersona` (`idPersona`),
  ADD KEY `idArea` (`idArea`);

--
-- Indices de la tabla `centroformacion`
--
ALTER TABLE `centroformacion`
  ADD PRIMARY KEY (`idCentroFormacion`),
  ADD KEY `idDepartamento` (`idDepartamento`),
  ADD KEY `idMunicipio` (`idMunicipio`);

--
-- Indices de la tabla `clasificacionmusculo`
--
ALTER TABLE `clasificacionmusculo`
  ADD PRIMARY KEY (`idClasificacionMusculo`);

--
-- Indices de la tabla `clasificacionrutina`
--
ALTER TABLE `clasificacionrutina`
  ADD PRIMARY KEY (`idClasificacionRutina`);

--
-- Indices de la tabla `clasificaciontorneo`
--
ALTER TABLE `clasificaciontorneo`
  ADD PRIMARY KEY (`idClasificacionTorneo`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepartamento`),
  ADD KEY `idPais` (`idPais`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`idDia`);

--
-- Indices de la tabla `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`idDisciplina`),
  ADD KEY `idTipoDeporte` (`idTipoDeporte`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`idEjercicio`),
  ADD KEY `idTipoEjercicio` (`idTipoEjercicio`);

--
-- Indices de la tabla `ejerciciomusculo`
--
ALTER TABLE `ejerciciomusculo`
  ADD PRIMARY KEY (`idEjercicioMusculo`),
  ADD KEY `idMusculo` (`idMusculo`),
  ADD KEY `idEjercicio` (`idEjercicio`);

--
-- Indices de la tabla `encuentro`
--
ALTER TABLE `encuentro`
  ADD PRIMARY KEY (`idEncuentro`),
  ADD KEY `idLugar` (`idLugar`);

--
-- Indices de la tabla `entrenamientodeportivo`
--
ALTER TABLE `entrenamientodeportivo`
  ADD PRIMARY KEY (`idEntrenamientoDeportivo`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`idEps`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idEquipo`),
  ADD KEY `idTorneo` (`idTorneo`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`idFicha`);

--
-- Indices de la tabla `ganadorcolectivo`
--
ALTER TABLE `ganadorcolectivo`
  ADD PRIMARY KEY (`idGanadorColectivo`),
  ADD KEY `idEquipo` (`idEquipo`),
  ADD KEY `idTorneo` (`idTorneo`);

--
-- Indices de la tabla `ganadorindividual`
--
ALTER TABLE `ganadorindividual`
  ADD PRIMARY KEY (`idGanadorIndividual`),
  ADD KEY `idParticipante` (`idParticipante`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indices de la tabla `generotorneo`
--
ALTER TABLE `generotorneo`
  ADD PRIMARY KEY (`idGeneroTorneo`);

--
-- Indices de la tabla `gimnasio`
--
ALTER TABLE `gimnasio`
  ADD PRIMARY KEY (`idGimnasio`),
  ADD KEY `idSede` (`idSede`);

--
-- Indices de la tabla `gruposanguineo`
--
ALTER TABLE `gruposanguineo`
  ADD PRIMARY KEY (`idGrupoSanguineo`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`idLugar`),
  ADD KEY `idMunicipio` (`idMunicipio`);

--
-- Indices de la tabla `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`idMaquina`);

--
-- Indices de la tabla `maquinaejercicio`
--
ALTER TABLE `maquinaejercicio`
  ADD PRIMARY KEY (`idMaquinaEjercicio`),
  ADD KEY `idMaquina` (`idMaquina`),
  ADD KEY `idEjercicio` (`idEjercicio`);

--
-- Indices de la tabla `marcador`
--
ALTER TABLE `marcador`
  ADD PRIMARY KEY (`idMarcador`),
  ADD KEY `idEncuentro` (`idEncuentro`),
  ADD KEY `idEquipo` (`idEquipo`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`idMunicipio`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- Indices de la tabla `musculo`
--
ALTER TABLE `musculo`
  ADD PRIMARY KEY (`idMusculo`),
  ADD KEY `idClasificacionMusculo` (`idClasificacionMusculo`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`idParticipante`),
  ADD KEY `idAprendiz` (`idAprendiz`),
  ADD KEY `idEquipo` (`idEquipo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`),
  ADD KEY `idMunicipioNacimiento` (`idMunicipioNacimiento`),
  ADD KEY `idMunicipioResidencia` (`idMunicipioResidencia`),
  ADD KEY `idTipoDocumento` (`idTipoDocumento`),
  ADD KEY `idGrupoSanguineo` (`idGrupoSanguineo`),
  ADD KEY `idGenero` (`idGenero`),
  ADD KEY `idSede` (`idSede`),
  ADD KEY `idEps` (`idEps`),
  ADD KEY `idRegimen` (`idRegimen`);

--
-- Indices de la tabla `rangoimc`
--
ALTER TABLE `rangoimc`
  ADD PRIMARY KEY (`idRangoIMC`);

--
-- Indices de la tabla `rangorecomendacion`
--
ALTER TABLE `rangorecomendacion`
  ADD PRIMARY KEY (`idRangoRecomendacion`),
  ADD KEY `idRangoImc` (`idRangoImc`),
  ADD KEY `idRecomendacion` (`idRecomendacion`);

--
-- Indices de la tabla `recomendacionalimentaria`
--
ALTER TABLE `recomendacionalimentaria`
  ADD PRIMARY KEY (`idRecomendacionAlimentaria`);

--
-- Indices de la tabla `regimen`
--
ALTER TABLE `regimen`
  ADD PRIMARY KEY (`idRegimen`);

--
-- Indices de la tabla `registrogimnasio`
--
ALTER TABLE `registrogimnasio`
  ADD PRIMARY KEY (`idRegistroGimnasio`),
  ADD KEY `idAprendiz` (`idUsuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD PRIMARY KEY (`idRutina`),
  ADD KEY `idClasificacionRutina` (`idClasificacionRutina`);

--
-- Indices de la tabla `rutinaejercicio`
--
ALTER TABLE `rutinaejercicio`
  ADD PRIMARY KEY (`idRutinaEjercio`),
  ADD KEY `idRutina` (`idRutina`),
  ADD KEY `idEjercicioMusculo` (`idEjercicio`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`idSede`),
  ADD KEY `idCentroFormacion` (`idCentroFormacion`);

--
-- Indices de la tabla `seriesrepeticiones`
--
ALTER TABLE `seriesrepeticiones`
  ADD PRIMARY KEY (`idSeriesRepeticiones`),
  ADD KEY `idRutinaEjercicio` (`idRutinaEjercicio`),
  ADD KEY `idValoracionRutina` (`idValoracionRutina`);

--
-- Indices de la tabla `tipodeporte`
--
ALTER TABLE `tipodeporte`
  ADD PRIMARY KEY (`idTipoDeporte`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idTipoDocumento`);

--
-- Indices de la tabla `tipoejercicio`
--
ALTER TABLE `tipoejercicio`
  ADD PRIMARY KEY (`idTipoEjercicio`);

--
-- Indices de la tabla `tipoeliminatoria`
--
ALTER TABLE `tipoeliminatoria`
  ADD PRIMARY KEY (`idTipoEliminatoria`);

--
-- Indices de la tabla `tipovaloracion`
--
ALTER TABLE `tipovaloracion`
  ADD PRIMARY KEY (`idTipoValoracion`);

--
-- Indices de la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD PRIMARY KEY (`idTorneo`),
  ADD KEY `idClasificacionTorneo` (`idClasificacionTorneo`),
  ADD KEY `idDisciplina` (`idDisciplina`),
  ADD KEY `idLugar` (`idLugar`),
  ADD KEY `idGeneroTorneo` (`idGeneroTorneo`),
  ADD KEY `idUsuario` (`idEncargado`),
  ADD KEY `idTipoEliminatoria` (`idTipoEliminatoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `usuUsuario` (`usuUsuario`),
  ADD KEY `idPersona` (`idPersona`);

--
-- Indices de la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  ADD PRIMARY KEY (`idUsuarioRol`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`idValoracion`),
  ADD KEY `idTipoValoracion` (`idTipoValoracion`),
  ADD KEY `idRangoImc` (`idRangoImc`),
  ADD KEY `idRegistroGimnasio` (`idRegistroGimnasio`);

--
-- Indices de la tabla `valoracionrutina`
--
ALTER TABLE `valoracionrutina`
  ADD PRIMARY KEY (`idValoracionRutina`),
  ADD KEY `idValoracion` (`idValoracion`),
  ADD KEY `idRutina` (`idRutina`),
  ADD KEY `idDia` (`idDia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `idAprendiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `asistenciagimnasio`
--
ALTER TABLE `asistenciagimnasio`
  MODIFY `idAsistenciaGimansio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `bienestar`
--
ALTER TABLE `bienestar`
  MODIFY `idBienestar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `centroformacion`
--
ALTER TABLE `centroformacion`
  MODIFY `idCentroFormacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clasificacionmusculo`
--
ALTER TABLE `clasificacionmusculo`
  MODIFY `idClasificacionMusculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clasificacionrutina`
--
ALTER TABLE `clasificacionrutina`
  MODIFY `idClasificacionRutina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clasificaciontorneo`
--
ALTER TABLE `clasificaciontorneo`
  MODIFY `idClasificacionTorneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `dia`
--
ALTER TABLE `dia`
  MODIFY `idDia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `idDisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `idEjercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ejerciciomusculo`
--
ALTER TABLE `ejerciciomusculo`
  MODIFY `idEjercicioMusculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `encuentro`
--
ALTER TABLE `encuentro`
  MODIFY `idEncuentro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entrenamientodeportivo`
--
ALTER TABLE `entrenamientodeportivo`
  MODIFY `idEntrenamientoDeportivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
  MODIFY `idEps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `idFicha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ganadorcolectivo`
--
ALTER TABLE `ganadorcolectivo`
  MODIFY `idGanadorColectivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ganadorindividual`
--
ALTER TABLE `ganadorindividual`
  MODIFY `idGanadorIndividual` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `generotorneo`
--
ALTER TABLE `generotorneo`
  MODIFY `idGeneroTorneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `gimnasio`
--
ALTER TABLE `gimnasio`
  MODIFY `idGimnasio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gruposanguineo`
--
ALTER TABLE `gruposanguineo`
  MODIFY `idGrupoSanguineo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `idLugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `maquina`
--
ALTER TABLE `maquina`
  MODIFY `idMaquina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `maquinaejercicio`
--
ALTER TABLE `maquinaejercicio`
  MODIFY `idMaquinaEjercicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcador`
--
ALTER TABLE `marcador`
  MODIFY `idMarcador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1124;

--
-- AUTO_INCREMENT de la tabla `musculo`
--
ALTER TABLE `musculo`
  MODIFY `idMusculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `participante`
--
ALTER TABLE `participante`
  MODIFY `idParticipante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `rangoimc`
--
ALTER TABLE `rangoimc`
  MODIFY `idRangoIMC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rangorecomendacion`
--
ALTER TABLE `rangorecomendacion`
  MODIFY `idRangoRecomendacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recomendacionalimentaria`
--
ALTER TABLE `recomendacionalimentaria`
  MODIFY `idRecomendacionAlimentaria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `regimen`
--
ALTER TABLE `regimen`
  MODIFY `idRegimen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registrogimnasio`
--
ALTER TABLE `registrogimnasio`
  MODIFY `idRegistroGimnasio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rutina`
--
ALTER TABLE `rutina`
  MODIFY `idRutina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `rutinaejercicio`
--
ALTER TABLE `rutinaejercicio`
  MODIFY `idRutinaEjercio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `idSede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `seriesrepeticiones`
--
ALTER TABLE `seriesrepeticiones`
  MODIFY `idSeriesRepeticiones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipodeporte`
--
ALTER TABLE `tipodeporte`
  MODIFY `idTipoDeporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idTipoDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipoejercicio`
--
ALTER TABLE `tipoejercicio`
  MODIFY `idTipoEjercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipoeliminatoria`
--
ALTER TABLE `tipoeliminatoria`
  MODIFY `idTipoEliminatoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipovaloracion`
--
ALTER TABLE `tipovaloracion`
  MODIFY `idTipoValoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `torneo`
--
ALTER TABLE `torneo`
  MODIFY `idTorneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  MODIFY `idUsuarioRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `idValoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `valoracionrutina`
--
ALTER TABLE `valoracionrutina`
  MODIFY `idValoracionRutina` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `fk_idFichaAprendiz_idFicha` FOREIGN KEY (`idFicha`) REFERENCES `ficha` (`idFicha`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idPersonaAprendiz_idPersona` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `asistenciagimnasio`
--
ALTER TABLE `asistenciagimnasio`
  ADD CONSTRAINT `fk_idAprendizAsistenciaGimnasio_idAprendiz` FOREIGN KEY (`idAprendiz`) REFERENCES `aprendiz` (`idAprendiz`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `bienestar`
--
ALTER TABLE `bienestar`
  ADD CONSTRAINT `fk_idAreaBienestar_idArea` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idPersonaBienestar_idPersona` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `centroformacion`
--
ALTER TABLE `centroformacion`
  ADD CONSTRAINT `fk_idDepartamentoCentroFormacion_idDepartamento` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idMunicipioCentroFormacion_idMunicipio` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fk_idPaisDepartamento_idPais` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `fk_idTipoDeporteTipoDeporte_idTipoDeporteDiscplina` FOREIGN KEY (`idTipoDeporte`) REFERENCES `tipodeporte` (`idTipoDeporte`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD CONSTRAINT `fk_idEjercicioEjercicio_idEjercicioTipo` FOREIGN KEY (`idTipoEjercicio`) REFERENCES `tipoejercicio` (`idTipoEjercicio`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `ejerciciomusculo`
--
ALTER TABLE `ejerciciomusculo`
  ADD CONSTRAINT `fk_idEjercicioEjericio_idEjercicioEjercicioMusculo` FOREIGN KEY (`idEjercicio`) REFERENCES `ejercicio` (`idEjercicio`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idMusculoMusculo_idMusculoEjercicioMusculo` FOREIGN KEY (`idMusculo`) REFERENCES `musculo` (`idMusculo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `encuentro`
--
ALTER TABLE `encuentro`
  ADD CONSTRAINT `fk_idLugarLugar_idLugarEncuentro` FOREIGN KEY (`idLugar`) REFERENCES `lugar` (`idLugar`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_idTorneoEquipo_idTorneo` FOREIGN KEY (`idTorneo`) REFERENCES `torneo` (`idTorneo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `ganadorcolectivo`
--
ALTER TABLE `ganadorcolectivo`
  ADD CONSTRAINT `fk_idEquipoGanadorColectivo_idEquipo` FOREIGN KEY (`idEquipo`) REFERENCES `equipo` (`idEquipo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idTorneoGanadorColectivo_idTorneo` FOREIGN KEY (`idTorneo`) REFERENCES `torneo` (`idTorneo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `ganadorindividual`
--
ALTER TABLE `ganadorindividual`
  ADD CONSTRAINT `fk_idParticipanteParticipante_idParticipanteGanadorIndividual` FOREIGN KEY (`idParticipante`) REFERENCES `participante` (`idParticipante`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `gimnasio`
--
ALTER TABLE `gimnasio`
  ADD CONSTRAINT `fk_idSedeGimnasio_idSede` FOREIGN KEY (`idSede`) REFERENCES `sede` (`idSede`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD CONSTRAINT `fk_idMunicipioMunicipio_idMunicipioLugar` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `maquinaejercicio`
--
ALTER TABLE `maquinaejercicio`
  ADD CONSTRAINT `fk_idEjercicioEjercicio_idEjercicioMaquinaEjercicio` FOREIGN KEY (`idEjercicio`) REFERENCES `ejercicio` (`idEjercicio`),
  ADD CONSTRAINT `fk_idMaquinaMaquina_idMaquinaMaquinaEjercicio` FOREIGN KEY (`idMaquina`) REFERENCES `maquina` (`idMaquina`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `marcador`
--
ALTER TABLE `marcador`
  ADD CONSTRAINT `fk_idEncuentroEncuentro_idEncuentroMarcador` FOREIGN KEY (`idEncuentro`) REFERENCES `encuentro` (`idEncuentro`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idEquipoEquipo_idEquipoMarcador` FOREIGN KEY (`idMarcador`) REFERENCES `equipo` (`idEquipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fk_idDepartamentoMunicipio_idMunicipio` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `musculo`
--
ALTER TABLE `musculo`
  ADD CONSTRAINT `fk_idClasificacionMusculoMusculo_idClasificacionMusculo` FOREIGN KEY (`idClasificacionMusculo`) REFERENCES `clasificacionmusculo` (`idClasificacionMusculo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `participante`
--
ALTER TABLE `participante`
  ADD CONSTRAINT `fk_idAprendizParticipante_idAprendiz` FOREIGN KEY (`idAprendiz`) REFERENCES `aprendiz` (`idAprendiz`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idEquipoParticipante_idEquipoEquipo` FOREIGN KEY (`idEquipo`) REFERENCES `equipo` (`idEquipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_idEpsPersona_idEps` FOREIGN KEY (`idEps`) REFERENCES `eps` (`idEps`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idGeneroPersona_idGenero` FOREIGN KEY (`idGenero`) REFERENCES `genero` (`idGenero`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idGrupoSanguineoPErsona_idGrupoSanguineo` FOREIGN KEY (`idGrupoSanguineo`) REFERENCES `gruposanguineo` (`idGrupoSanguineo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idMunicipioNacimientoPersona_idMunicipio` FOREIGN KEY (`idMunicipioNacimiento`) REFERENCES `municipio` (`idMunicipio`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idMunicipioResidenciaPersona_idMunicipio` FOREIGN KEY (`idMunicipioResidencia`) REFERENCES `municipio` (`idMunicipio`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idRegimenPErsona_idRegimen` FOREIGN KEY (`idRegimen`) REFERENCES `regimen` (`idRegimen`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idSedePersona_idSede` FOREIGN KEY (`idSede`) REFERENCES `sede` (`idSede`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idTipoDocumentoPersona_idTipoDocumento` FOREIGN KEY (`idTipoDocumento`) REFERENCES `tipodocumento` (`idTipoDocumento`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `rangorecomendacion`
--
ALTER TABLE `rangorecomendacion`
  ADD CONSTRAINT `fk_idRangoImcRangoImc_idRangoImcRangoRecomendacion` FOREIGN KEY (`idRangoImc`) REFERENCES `rangoimc` (`idRangoIMC`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idRecomendacionRecomendacion_idRecomeRangoRecomendacion` FOREIGN KEY (`idRecomendacion`) REFERENCES `recomendacionalimentaria` (`idRecomendacionAlimentaria`);

--
-- Filtros para la tabla `registrogimnasio`
--
ALTER TABLE `registrogimnasio`
  ADD CONSTRAINT `fk_idAprendizRegistroGimnasio_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD CONSTRAINT `fk_idClasificacionRutinaRutina_idClasiRutinaClasiRutina` FOREIGN KEY (`idClasificacionRutina`) REFERENCES `clasificacionrutina` (`idClasificacionRutina`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `rutinaejercicio`
--
ALTER TABLE `rutinaejercicio`
  ADD CONSTRAINT `fk_idEjerMusEjerMus_idEjerMusEjerMus` FOREIGN KEY (`idEjercicio`) REFERENCES `ejerciciomusculo` (`idEjercicioMusculo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idRutinaRutina_idRutinaRutinaEjercicio` FOREIGN KEY (`idRutina`) REFERENCES `rutina` (`idRutina`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `fk_idCentroFormacionSede_idCentroFormacion` FOREIGN KEY (`idCentroFormacion`) REFERENCES `centroformacion` (`idCentroFormacion`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `seriesrepeticiones`
--
ALTER TABLE `seriesrepeticiones`
  ADD CONSTRAINT `fk_idRutEjerRutRep_idRutRepSeriesRepeticiones` FOREIGN KEY (`idRutinaEjercicio`) REFERENCES `rutinaejercicio` (`idRutinaEjercio`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idValRepSerRep_idValRepValRep` FOREIGN KEY (`idValoracionRutina`) REFERENCES `valoracionrutina` (`idValoracionRutina`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD CONSTRAINT `Fk_idClasificacionTorneoTorneo_idClasificacionTorneo` FOREIGN KEY (`idClasificacionTorneo`) REFERENCES `clasificaciontorneo` (`idClasificacionTorneo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idDisciplinaTorneo_idDisciplina` FOREIGN KEY (`idDisciplina`) REFERENCES `disciplina` (`idDisciplina`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idEncargadoUsuario_idUsuarioUsuario` FOREIGN KEY (`idEncargado`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idGeneroTorneoTorneo_idGeneroTorneo` FOREIGN KEY (`idGeneroTorneo`) REFERENCES `generotorneo` (`idGeneroTorneo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idLugarLugar_idLugarTorneo` FOREIGN KEY (`idLugar`) REFERENCES `lugar` (`idLugar`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idTipoEliminatoriaTipoEliminatoria_idTipoEliminatoriaTorneo` FOREIGN KEY (`idTipoEliminatoria`) REFERENCES `tipoeliminatoria` (`idTipoEliminatoria`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_idPersonaUsuario_idPersona` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  ADD CONSTRAINT `fk_idRolRol_idRolUsuarioRol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idUsuarioUsuario_idUsuarioUsuarioRol` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `fk_idRangoImcValoracion_idRangoImc` FOREIGN KEY (`idRangoImc`) REFERENCES `rangoimc` (`idRangoIMC`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idRegistroGimnasioValoracion_idRegistroGimnasio` FOREIGN KEY (`idRegistroGimnasio`) REFERENCES `registrogimnasio` (`idRegistroGimnasio`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idTipoValoracionValoracion_idTipoValoracion` FOREIGN KEY (`idTipoValoracion`) REFERENCES `tipovaloracion` (`idTipoValoracion`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoracionrutina`
--
ALTER TABLE `valoracionrutina`
  ADD CONSTRAINT `fk_idDiaDia_idDiaValoracionRutina` FOREIGN KEY (`idDia`) REFERENCES `dia` (`idDia`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idRutinaRutina_idRutinaValoracionRutina` FOREIGN KEY (`idRutina`) REFERENCES `rutina` (`idRutina`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idValoracioValoracion_idValoracionValoracionrut` FOREIGN KEY (`idValoracion`) REFERENCES `valoracion` (`idValoracion`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
