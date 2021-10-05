-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 06:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mineria`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `idequipo` int(11) NOT NULL,
  `nombreEquipo` varchar(255) DEFAULT NULL,
  `codigo` bigint(15) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipo`
--

INSERT INTO `equipo` (`idequipo`, `nombreEquipo`, `codigo`, `fecha`, `estado`, `usuario_idusuario`) VALUES
(1, 'rodillo', 112, NULL, 'nuevo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordentrabajo`
--

CREATE TABLE `ordentrabajo` (
  `idordenTrabajo` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fechaInicio` date NOT NULL,
  `detalledetrabajo` varchar(255) DEFAULT NULL,
  `fechaCierre` date DEFAULT NULL,
  `tipoOrden_idtipoOrden` int(11) NOT NULL,
  `equipo_idequipo` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombreRol` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`idrol`, `nombreRol`) VALUES
(1, 'Adminis'),
(2, 'Tecni'),
(3, 'Geren');

-- --------------------------------------------------------

--
-- Table structure for table `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idtipoDocumento` int(11) NOT NULL,
  `nombreTipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipodocumento`
--

INSERT INTO `tipodocumento` (`idtipoDocumento`, `nombreTipo`) VALUES
(1, 'CC'),
(2, 'CE'),
(3, 'Pasaporte');

-- --------------------------------------------------------

--
-- Table structure for table `tipoempleado`
--

CREATE TABLE `tipoempleado` (
  `idtipoEmpleado` int(11) NOT NULL,
  `tipoEmpleadocol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipoempleado`
--

INSERT INTO `tipoempleado` (`idtipoEmpleado`, `tipoEmpleadocol`) VALUES
(1, 'Planta'),
(2, 'Contratista');

-- --------------------------------------------------------

--
-- Table structure for table `tipoorden`
--

CREATE TABLE `tipoorden` (
  `idtipoOrden` int(11) NOT NULL,
  `nombreOrden` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `numDocumento` bigint(20) DEFAULT NULL,
  `nombres` varchar(60) DEFAULT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `correo` varchar(95) DEFAULT NULL,
  `nombUsuario` varchar(65) DEFAULT NULL,
  `clave` varchar(65) DEFAULT NULL,
  `tipoDocumento_idtipoDocumento` int(11) NOT NULL,
  `rol_idrol` int(11) NOT NULL,
  `tipoEmpleado_idtipoEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idusuario`, `numDocumento`, `nombres`, `apellidos`, `correo`, `nombUsuario`, `clave`, `tipoDocumento_idtipoDocumento`, `rol_idrol`, `tipoEmpleado_idtipoEmpleado`) VALUES
(1, 1011, 'david', 'reinoso', 'david@gmail.com', 'dreino', '12345', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idequipo`),
  ADD KEY `fk_equipo_usuario1_idx` (`usuario_idusuario`);

--
-- Indexes for table `ordentrabajo`
--
ALTER TABLE `ordentrabajo`
  ADD PRIMARY KEY (`idordenTrabajo`),
  ADD KEY `fk_ordenTrabajo_tipoOrden1_idx` (`tipoOrden_idtipoOrden`),
  ADD KEY `fk_ordenTrabajo_equipo1_idx` (`equipo_idequipo`),
  ADD KEY `fk_ordenTrabajo_usuario1_idx` (`usuario_idusuario`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indexes for table `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idtipoDocumento`);

--
-- Indexes for table `tipoempleado`
--
ALTER TABLE `tipoempleado`
  ADD PRIMARY KEY (`idtipoEmpleado`);

--
-- Indexes for table `tipoorden`
--
ALTER TABLE `tipoorden`
  ADD PRIMARY KEY (`idtipoOrden`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_tipoDocumento1_idx` (`tipoDocumento_idtipoDocumento`),
  ADD KEY `fk_usuario_rol1_idx` (`rol_idrol`),
  ADD KEY `fk_usuario_tipoEmpleado1_idx` (`tipoEmpleado_idtipoEmpleado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordentrabajo`
--
ALTER TABLE `ordentrabajo`
  MODIFY `idordenTrabajo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idtipoDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipoempleado`
--
ALTER TABLE `tipoempleado`
  MODIFY `idtipoEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipoorden`
--
ALTER TABLE `tipoorden`
  MODIFY `idtipoOrden` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_equipo_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ordentrabajo`
--
ALTER TABLE `ordentrabajo`
  ADD CONSTRAINT `fk_ordenTrabajo_equipo1` FOREIGN KEY (`equipo_idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ordenTrabajo_tipoOrden1` FOREIGN KEY (`tipoOrden_idtipoOrden`) REFERENCES `tipoorden` (`idtipoOrden`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ordenTrabajo_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`rol_idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipoDocumento1` FOREIGN KEY (`tipoDocumento_idtipoDocumento`) REFERENCES `tipodocumento` (`idtipoDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipoEmpleado1` FOREIGN KEY (`tipoEmpleado_idtipoEmpleado`) REFERENCES `tipoempleado` (`idtipoEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
