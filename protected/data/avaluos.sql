-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2014 a las 03:53:44
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `avaluos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_construccion`
--

CREATE TABLE IF NOT EXISTS `caracteristicas_construccion` (
  `idCaracteristicasConstruccion` int(11) NOT NULL DEFAULT '0',
  `idPresupuestoReconstruccion` int(11) NOT NULL,
  `NPisos` int(11) NOT NULL,
  `NSotanos` int(11) NOT NULL,
  `existeMezanine` varchar(5) NOT NULL,
  `pisoRiesgo` varchar(25) NOT NULL,
  `areaRiesgo` double NOT NULL,
  `mamposteriaReforzada` varchar(5) NOT NULL,
  `mamposteriacConfinada` varchar(5) NOT NULL,
  `sistemaReticularCelulado` varchar(5) NOT NULL,
  `SistemaPorticoConcreto` varchar(5) NOT NULL,
  `unaDireccionC` varchar(5) NOT NULL,
  `dosDireccionesC` varchar(5) NOT NULL,
  `sistemaPorticoAcero` varchar(5) NOT NULL,
  `unaDireccionA` varchar(5) NOT NULL,
  `dosDireccionesA` varchar(5) NOT NULL,
  `sistemaDualConcreto` varchar(5) NOT NULL,
  `sistemaMurosEstructurales` varchar(5) NOT NULL,
  `maderaTejaBarro` varchar(5) NOT NULL,
  `cerchaMetalicaTejaLiviana` varchar(5) NOT NULL,
  `losaConcreto` varchar(5) NOT NULL,
  `otro` varchar(5) NOT NULL,
  `cual` varchar(250) NOT NULL,
  `deterioro` varchar(5) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`idCaracteristicasConstruccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authassignment`
--

CREATE TABLE IF NOT EXISTS `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL,
  PRIMARY KEY (`userid`,`itemname`),
  KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  KEY `fk_cruge_authassignment_user` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authassignment`
--

INSERT INTO `cruge_authassignment` (`userid`, `bizrule`, `data`, `itemname`) VALUES
(3, NULL, 'N;', 'car');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitem`
--

CREATE TABLE IF NOT EXISTS `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_informaciongeneral_admin', 0, '', NULL, 'N;'),
('action_informaciongeneral_create', 0, '', NULL, 'N;'),
('action_informaciongeneral_delete', 0, '', NULL, 'N;'),
('action_informaciongeneral_index', 0, '', NULL, 'N;'),
('action_informaciongeneral_update', 0, '', NULL, 'N;'),
('action_informaciongeneral_view', 0, '', NULL, 'N;'),
('action_informacionpredio_admin', 0, '', NULL, 'N;'),
('action_informacionpredio_create', 0, '', NULL, 'N;'),
('action_informacionpredio_delete', 0, '', NULL, 'N;'),
('action_informacionpredio_index', 0, '', NULL, 'N;'),
('action_informacionpredio_update', 0, '', NULL, 'N;'),
('action_informacionpredio_view', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_admin', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_create', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_delete', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_index', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_update', 0, '', NULL, 'N;'),
('action_informacionpresupuestoreconstruccion_view', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_actualizar', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_admin', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_create', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_delete', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_index', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_ingresar', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_update', 0, '', NULL, 'N;'),
('action_presupuestoreconstruccion_view', 0, '', NULL, 'N;'),
('action_site_contact', 0, '', NULL, 'N;'),
('action_site_error', 0, '', NULL, 'N;'),
('action_site_index', 0, '', NULL, 'N;'),
('action_site_login', 0, '', NULL, 'N;'),
('action_site_logout', 0, '', NULL, 'N;'),
('action_ui_rbacajaxsetchilditem', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemchilditems', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemdelete', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemupdate', 0, '', NULL, 'N;'),
('action_ui_rbaclistops', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
('action_ui_rbacusersassignments', 0, '', NULL, 'N;'),
('action_ui_sessionadmin', 0, '', NULL, 'N;'),
('action_ui_systemupdate', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('car', 2, '', '', 'N;'),
('controller_informaciongeneral', 0, '', NULL, 'N;'),
('controller_informacionpredio', 0, '', NULL, 'N;'),
('controller_informacionpresupuestoreconstruccion', 0, '', NULL, 'N;'),
('controller_presupuestoreconstruccion', 0, '', NULL, 'N;'),
('controller_site', 0, '', NULL, 'N;'),
('controller__presupuestoreconstruccion', 0, '', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitemchild`
--

CREATE TABLE IF NOT EXISTS `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitemchild`
--

INSERT INTO `cruge_authitemchild` (`parent`, `child`) VALUES
('car', 'action_informaciongeneral_admin'),
('car', 'action_informaciongeneral_create'),
('car', 'action_informaciongeneral_delete'),
('car', 'action_informaciongeneral_index'),
('car', 'action_informaciongeneral_update'),
('car', 'action_informaciongeneral_view'),
('car', 'action_informacionpredio_admin'),
('car', 'action_informacionpredio_create'),
('car', 'action_informacionpredio_delete'),
('car', 'action_informacionpredio_index'),
('car', 'action_informacionpredio_update'),
('car', 'action_informacionpredio_view'),
('car', 'action_informacionpresupuestoreconstruccion_admin'),
('car', 'action_informacionpresupuestoreconstruccion_create'),
('car', 'action_informacionpresupuestoreconstruccion_delete'),
('car', 'action_informacionpresupuestoreconstruccion_index'),
('car', 'action_informacionpresupuestoreconstruccion_update'),
('car', 'action_informacionpresupuestoreconstruccion_view'),
('car', 'action_presupuestoreconstruccion_admin'),
('car', 'action_presupuestoreconstruccion_create'),
('car', 'action_presupuestoreconstruccion_delete'),
('car', 'action_presupuestoreconstruccion_index'),
('car', 'action_presupuestoreconstruccion_update'),
('car', 'action_presupuestoreconstruccion_view'),
('car', 'action_site_contact'),
('car', 'action_site_error'),
('car', 'action_site_index'),
('car', 'action_site_login'),
('car', 'action_site_logout'),
('car', 'admin'),
('car', 'controller_informaciongeneral'),
('car', 'controller_informacionpredio'),
('car', 'controller_informacionpresupuestoreconstruccion'),
('car', 'controller_presupuestoreconstruccion'),
('car', 'controller_site');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_field`
--

CREATE TABLE IF NOT EXISTS `cruge_field` (
  `idfield` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob,
  PRIMARY KEY (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_fieldvalue`
--

CREATE TABLE IF NOT EXISTS `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob,
  PRIMARY KEY (`idfieldvalue`),
  KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_session`
--

CREATE TABLE IF NOT EXISTS `cruge_session` (
  `idsession` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  KEY `crugesession_iduser` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(1, 1, 1396017066, 1396018866, 0, '::1', 1, 1396017066, 1396017080, '::1'),
(2, 1, 1396017170, 1396018970, 0, '::1', 1, 1396017170, 1396017203, '::1'),
(3, 1, 1396017211, 1396019011, 0, '::1', 1, 1396017211, 1396017232, '::1'),
(4, 1, 1396242046, 1396243846, 0, '::1', 1, 1396242046, 1396242275, '::1'),
(5, 1, 1396242314, 1396244114, 0, '::1', 1, 1396242314, 1396242586, '::1'),
(6, 1, 1396849066, 1396850866, 0, '::1', 1, 1396849066, NULL, NULL),
(7, 1, 1396850960, 1396852760, 0, '::1', 1, 1396850960, 1396851860, '::1'),
(8, 1, 1396851867, 1396853667, 0, '::1', 1, 1396851867, 1396853248, '::1'),
(9, 3, 1396853255, 1396855055, 0, '::1', 1, 1396853255, 1396853305, '::1'),
(10, 1, 1396853316, 1396855116, 0, '::1', 1, 1396853316, NULL, NULL),
(11, 1, 1396874720, 1396876520, 0, '::1', 1, 1396874720, NULL, NULL),
(12, 1, 1396876812, 1396878612, 0, '::1', 1, 1396876812, NULL, NULL),
(13, 1, 1396919206, 1396921006, 0, '::1', 1, 1396919206, NULL, NULL),
(14, 1, 1396923161, 1396924961, 1, '::1', 1, 1396923161, NULL, NULL),
(15, 1, 1397016515, 1397018315, 1, '::1', 1, 1397016515, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_system`
--

CREATE TABLE IF NOT EXISTS `cruge_system` (
  `idsystem` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1',
  PRIMARY KEY (`idsystem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 30, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_user`
--

CREATE TABLE IF NOT EXISTS `cruge_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1397016515, 'admin', 'admin@tucorreo.com', 'avaluospass', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0),
(3, 1396853132, NULL, 1396853255, 'carlos', 'carlos@hotmail.com', 'carlos123', '74a145e1d91d6a85b680ed120e43bcc4', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_general`
--

CREATE TABLE IF NOT EXISTS `informacion_general` (
  `idInformacionGeneral` int(11) NOT NULL AUTO_INCREMENT,
  `idPresupuestoReconstruccion` int(11) NOT NULL,
  `personaEntrevistada` varchar(250) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `personaEncargadaAdministracion` varchar(250) DEFAULT NULL,
  `cargo` varchar(250) DEFAULT NULL,
  `ciudad` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idInformacionGeneral`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `informacion_general`
--

INSERT INTO `informacion_general` (`idInformacionGeneral`, `idPresupuestoReconstruccion`, `personaEntrevistada`, `telefono`, `personaEncargadaAdministracion`, `cargo`, `ciudad`) VALUES
(1, 1, 'Dagoberto', '3111037', 'Dolly Yepes', 'Oficios Varios', 'Medellin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_predio`
--

CREATE TABLE IF NOT EXISTS `informacion_predio` (
  `idInformacionPredio` int(11) NOT NULL AUTO_INCREMENT,
  `idPresupuestoReconstruccion` int(11) NOT NULL,
  `predioCopropiedad` varchar(5) DEFAULT NULL,
  `conjuntoCerrado` varchar(5) DEFAULT NULL,
  `conjuntoCerradoOtro` varchar(250) DEFAULT NULL,
  `ciudad` varchar(250) DEFAULT NULL,
  `barrio` varchar(250) DEFAULT NULL,
  `sector` varchar(250) DEFAULT NULL,
  `estrato` varchar(25) DEFAULT NULL,
  `fechaFundacion` varchar(15) DEFAULT NULL,
  `numeroEmpleados` varchar(10) DEFAULT NULL,
  `horarioTrabajo` varchar(250) DEFAULT NULL,
  `linderoNorte` varchar(250) DEFAULT NULL,
  `linderoNorteOcupado` varchar(5) DEFAULT NULL,
  `linderoSur` varchar(250) DEFAULT NULL,
  `linderoSurOcupado` varchar(5) DEFAULT NULL,
  `linderoOriente` varchar(250) DEFAULT NULL,
  `linderoOrienteOcupado` varchar(5) DEFAULT NULL,
  `linderoOccidente` varchar(250) DEFAULT NULL,
  `linderoOccidenteOcupado` varchar(5) DEFAULT NULL,
  `entidadesOficiales` varchar(5) DEFAULT NULL,
  `poliductosMineras` varchar(5) DEFAULT NULL,
  `aguasFallas` varchar(5) DEFAULT NULL,
  `vias` varchar(5) DEFAULT NULL,
  `amenazasComunidad` varchar(5) DEFAULT NULL,
  `informacionRelacionesComunidad` varchar(5) DEFAULT NULL,
  `relacionesComunidadBuenas` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idInformacionPredio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `informacion_predio`
--

INSERT INTO `informacion_predio` (`idInformacionPredio`, `idPresupuestoReconstruccion`, `predioCopropiedad`, `conjuntoCerrado`, `conjuntoCerradoOtro`, `ciudad`, `barrio`, `sector`, `estrato`, `fechaFundacion`, `numeroEmpleados`, `horarioTrabajo`, `linderoNorte`, `linderoNorteOcupado`, `linderoSur`, `linderoSurOcupado`, `linderoOriente`, `linderoOrienteOcupado`, `linderoOccidente`, `linderoOccidenteOcupado`, `entidadesOficiales`, `poliductosMineras`, `aguasFallas`, `vias`, `amenazasComunidad`, `informacionRelacionesComunidad`, `relacionesComunidadBuenas`) VALUES
(1, 1, 'Si', 'No', 'Edificio residencial', 'Medellin', 'Poblado', 'Milla De Oro', '6', '', '4', '3 Vigilantes y 1 de Oficios varios', 'Via Publica', 'No', 'Edificio Estelar', 'Si', 'Edificio Sudameris', 'Si', 'Hotel Leblon', 'Si', 'No', 'No', 'No', 'No', 'No', 'Si', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto_reconstruccion`
--

CREATE TABLE IF NOT EXISTS `presupuesto_reconstruccion` (
  `idPresupuestoReconstruccion` int(11) NOT NULL AUTO_INCREMENT,
  `copropiedad` varchar(250) DEFAULT NULL,
  `nitCc` varchar(25) DEFAULT NULL,
  `direccion` varchar(25) DEFAULT NULL,
  `fechaVisita` varchar(25) DEFAULT NULL,
  `intermediario` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idPresupuestoReconstruccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `presupuesto_reconstruccion`
--

INSERT INTO `presupuesto_reconstruccion` (`idPresupuestoReconstruccion`, `copropiedad`, `nitCc`, `direccion`, `fechaVisita`, `intermediario`) VALUES
(1, 'Edificio Combeima', '800001581-4', 'Carrera 42 # 1 Sur - 48', '26/02/2014', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_authassignment_user` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
