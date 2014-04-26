ALTER TABLE `presupuesto_reconstruccion` ADD `campo` VARCHAR(23) NULL AFTER `idPresupuestoReconstruccion`; 
ALTER TABLE `caracteristicas_construccion` CHANGE `mamposteriacConfinada` `mamposteriaConfinada` VARCHAR(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `caracteristicas_construccion` CHANGE `cual` `cual` VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;
ALTER TABLE `caracteristicas_construccion` CHANGE `observaciones` `observaciones` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;

CREATE TABLE IF NOT EXISTS `caracteristicas_almacenamiento` (
  `idCaracteristicasAlmacenamiento` int(11) NOT NULL AUTO_INCREMENT,
  `idPresupuestoReconstruccion` int(11) DEFAULT NULL,
  `tanques` varchar(5) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `ubicacionFisica` varchar(250) DEFAULT NULL,
  `contenido` varchar(250) DEFAULT NULL,
  `capacidad` varchar(25) DEFAULT NULL,
  `materialConstruccion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idCaracteristicasAlmacenamiento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `caracteristicas_almacenamiento` (`idCaracteristicasAlmacenamiento`, `idPresupuestoReconstruccion`, `tanques`, `cantidad`, `ubicacionFisica`, `contenido`, `capacidad`, `materialConstruccion`) VALUES
(1, 1, 'Si', 1, 'Cubierta', 'Agua', '8000 Litros', 'Fibra de vidrio');



INSERT INTO `caracteristicas_construccion` (`idCaracteristicasConstruccion`, `idPresupuestoReconstruccion`, `NPisos`, `NSotanos`, `existeMezanine`, `pisoRiesgo`, `areaRiesgo`, `mamposteriaReforzada`, `mamposteriaConfinada`, `sistemaReticularCelulado`, `SistemaPorticoConcreto`, `unaDireccionC`, `dosDireccionesC`, `sistemaPorticoAcero`, `unaDireccionA`, `dosDireccionesA`, `sistemaDualConcreto`, `sistemaMurosEstructurales`, `maderaTejaBarro`, `cerchaMetalicaTejaLiviana`, `losaConcreto`, `otro`, `cual`, `deterioro`, `observaciones`) VALUES
(1, 1, 12, 2, 'No', 'Todos', 2932.5, 'No', 'No', 'Si', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', '', 'No', NULL),



INSERT INTO `avaluos`.`caracteristicas_construccion` (`idCaracteristicasConstruccion`, `idPresupuestoReconstruccion`, `NPisos`, `NSotanos`, `existeMezanine`, `pisoRiesgo`, `areaRiesgo`, `mamposteriaReforzada`, `mamposteriaConfinada`, `sistemaReticularCelulado`, `SistemaPorticoConcreto`, `unaDireccionC`, `dosDireccionesC`, `sistemaPorticoAcero`, `unaDireccionA`, `dosDireccionesA`, `sistemaDualConcreto`, `sistemaMurosEstructurales`, `maderaTejaBarro`, `cerchaMetalicaTejaLiviana`, `losaConcreto`, `otro`, `cual`, `deterioro`, `observaciones`) VALUES ('1', '1', '12', '2', 'No', 'Todos', '2932.5', 'No', 'No', 'Si', 'No', 'No', 'Si', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Si', 'No', NULL, 'No', NULL);


CREATE TABLE IF NOT EXISTS `caracteristicas_instalacion` (
  `idCaracteristicasInstalacion` int(11) NOT NULL AUTO_INCREMENT,
  `idPresupuestoReconstruccion` int(11) NOT NULL,
  `acueductoPropio` varchar(5) NOT NULL,
  `aRedPublica` varchar(5) NOT NULL,
  `aCual` varchar(250) DEFAULT NULL,
  `estadoRejillas` varchar(10) NOT NULL,
  `estadoCanales` varchar(10) NOT NULL,
  `estadoAlcantarillas` varchar(10) NOT NULL,
  `limpiezaTechos` varchar(10) NOT NULL,
  `estadoBajantes` varchar(10) NOT NULL,
  `plantaElectrica` varchar(5) NOT NULL,
  `pEMarca` varchar(250) DEFAULT NULL,
  `pEAño` varchar(25) DEFAULT NULL,
  `pEPotencia` varchar(25) DEFAULT NULL,
  `pECombustible` varchar(250) DEFAULT NULL,
  `pEUbicacionFisica` varchar(250) DEFAULT NULL,
  `pEZonaAlimenta` varchar(250) DEFAULT NULL,
  `transformadorPropio` varchar(5) NOT NULL,
  `tPMarca` varchar(250) DEFAULT NULL,
  `tPAño` varchar(25) DEFAULT NULL,
  `tPCapacidad` varchar(25) DEFAULT NULL,
  `tPUbicacionFisica` varchar(250) DEFAULT NULL,
  `sistemaGas` varchar(5) NOT NULL,
  `sGRedPublica` varchar(5) NOT NULL,
  `sGTanqueAlmacenamiento` varchar(5) NOT NULL,
  `sGCapacidadTanque` varchar(250) DEFAULT NULL,
  `sGUtilizaCilindros` varchar(5) NOT NULL,
  `sGCapacidad` varchar(250) DEFAULT NULL,
  `sistemaAireAcondicionado` varchar(5) NOT NULL,
  `aATipoSistema` varchar(250) DEFAULT NULL,
  `aACapacidad` varchar(25) DEFAULT NULL,
  `aATorreEnfriamiento` varchar(5) NOT NULL,
  `aATECapacidad` varchar(25) DEFAULT NULL,
  `aATECantidad` varchar(25) DEFAULT NULL,
  `mantenimientoInstalacionesFisicas` varchar(15) DEFAULT NULL,
  `mIFPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoPlantaElectrica` varchar(15) DEFAULT NULL,
  `mPEPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientosubestaciónElectrica` varchar(15) DEFAULT NULL,
  `mSEPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoTransformadorPropio` varchar(15) DEFAULT NULL,
  `mTPPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoSistemaGas` varchar(15) DEFAULT NULL,
  `mSGPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoAscensores` varchar(15) DEFAULT NULL,
  `mAPersonalACargo` varchar(250) DEFAULT NULL,
  `mantenimientoDispositivosSeguridad` varchar(15) DEFAULT NULL,
  `mDSPersonalACargo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idCaracteristicasInstalacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `caracteristicas_instalacion` (`idCaracteristicasInstalacion`, `idPresupuestoReconstruccion`, `acueductoPropio`, `aRedPublica`, `aCual`, `estadoRejillas`, `estadoCanales`, `estadoAlcantarillas`, `limpiezaTechos`, `estadoBajantes`, `plantaElectrica`, `pEMarca`, `pEAño`, `pEPotencia`, `pECombustible`, `pEUbicacionFisica`, `pEZonaAlimenta`, `transformadorPropio`, `tPMarca`, `tPAño`, `tPCapacidad`, `tPUbicacionFisica`, `sistemaGas`, `sGRedPublica`, `sGTanqueAlmacenamiento`, `sGCapacidadTanque`, `sGUtilizaCilindros`, `sGCapacidad`, `sistemaAireAcondicionado`, `aATipoSistema`, `aACapacidad`, `aATorreEnfriamiento`, `aATECapacidad`, `aATECantidad`, `mantenimientoInstalacionesFisicas`, `mIFPersonalACargo`, `mantenimientoPlantaElectrica`, `mPEPersonalACargo`, `mantenimientosubestaciónElectrica`, `mSEPersonalACargo`, `mantenimientoTransformadorPropio`, `mTPPersonalACargo`, `mantenimientoSistemaGas`, `mSGPersonalACargo`, `mantenimientoAscensores`, `mAPersonalACargo`, `mantenimientoDispositivosSeguridad`, `mDSPersonalACargo`) VALUES
(1, 1, 'No', 'Si', 'Epm', 'Bueno', 'Bueno', 'Bueno', 'Bueno', 'Bueno', 'Si', 'Kohler', '', '', 'Acpm', 'Sotano', '', 'Si', '', '', '30 kva', 'sotano', 'Si', 'Si', 'No', '', 'No', '', 'No', '', '', 'No', '', '', 'Preventivo', 'Contrato a terceros', 'Preventivo', 'Epm', 'Preventivo', 'Epm', '', '', 'Preventivo', 'Epm', 'Preventivo', 'Mitsubishi', '', '');


CREATE TABLE IF NOT EXISTS `caracteristicas_maquinaria_equipos` (
  `idCaracteristicasMaquinariaEquipos` int(11) NOT NULL AUTO_INCREMENT,
  `idPresupuestoReconstruccion` int(11) DEFAULT NULL,
  `descripcion` text,
  `hojaVida` varchar(5) NOT NULL,
  PRIMARY KEY (`idCaracteristicasMaquinariaEquipos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



INSERT INTO `caracteristicas_maquinaria_equipos` (`idCaracteristicasMaquinariaEquipos`, `idPresupuestoReconstruccion`, `descripcion`, `hojaVida`) VALUES
(1, 1, 'Sostema de bombeo, motor puerta cantonera de acceso vehicular, motor puerta electrica de acceso vehicular, planta electrica, transformador, subestacion electrica, 1 ascensor mitsubishi, guadaña.', 'Si');

CREATE TABLE IF NOT EXISTS `registro_fotografico` (
  `idRegistroFotografico` int(11) NOT NULL AUTO_INCREMENT,
  `idPresupuestoReconstruccion` int(11) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idRegistroFotografico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `registro_fotografico` (`idRegistroFotografico`, `idPresupuestoReconstruccion`, `imagen`) VALUES
(1, 1, '504351-1.jpg');