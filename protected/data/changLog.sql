ALTER TABLE `presupuesto_reconstruccion` ADD `campo` VARCHAR(23) NULL AFTER `idPresupuestoReconstruccion`; 
ALTER TABLE `caracteristicas_construccion` CHANGE `mamposteriacConfinada` `mamposteriaConfinada` VARCHAR(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `caracteristicas_construccion` CHANGE `cual` `cual` VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;
ALTER TABLE `caracteristicas_construccion` CHANGE `observaciones` `observaciones` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;