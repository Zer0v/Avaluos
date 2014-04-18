<?php
/* @var $this CaracteristicasInstalacionController */
/* @var $model CaracteristicasInstalacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caracteristicas-instalacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idPresupuestoReconstruccion'); ?>
		<?php echo $form->textField($model,'idPresupuestoReconstruccion'); ?>
		<?php echo $form->error($model,'idPresupuestoReconstruccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acueductoPropio'); ?>
		<?php echo $form->textField($model,'acueductoPropio',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'acueductoPropio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aRedPublica'); ?>
		<?php echo $form->textField($model,'aRedPublica',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'aRedPublica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aCual'); ?>
		<?php echo $form->textField($model,'aCual',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'aCual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoRejillas'); ?>
		<?php echo $form->textField($model,'estadoRejillas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estadoRejillas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoCanales'); ?>
		<?php echo $form->textField($model,'estadoCanales',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estadoCanales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoAlcantarillas'); ?>
		<?php echo $form->textField($model,'estadoAlcantarillas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estadoAlcantarillas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limpiezaTechos'); ?>
		<?php echo $form->textField($model,'limpiezaTechos',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'limpiezaTechos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoBajantes'); ?>
		<?php echo $form->textField($model,'estadoBajantes',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estadoBajantes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plantaElectrica'); ?>
		<?php echo $form->textField($model,'plantaElectrica',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'plantaElectrica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pEMarca'); ?>
		<?php echo $form->textField($model,'pEMarca',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'pEMarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pEAño'); ?>
		<?php echo $form->textField($model,'pEAño',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'pEAño'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pEPotencia'); ?>
		<?php echo $form->textField($model,'pEPotencia',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'pEPotencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pECombustible'); ?>
		<?php echo $form->textField($model,'pECombustible',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'pECombustible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pEUbicacionFisica'); ?>
		<?php echo $form->textField($model,'pEUbicacionFisica',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'pEUbicacionFisica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pEZonaAlimenta'); ?>
		<?php echo $form->textField($model,'pEZonaAlimenta',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'pEZonaAlimenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transformadorPropio'); ?>
		<?php echo $form->textField($model,'transformadorPropio',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'transformadorPropio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tPMarca'); ?>
		<?php echo $form->textField($model,'tPMarca',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tPMarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tPAño'); ?>
		<?php echo $form->textField($model,'tPAño',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'tPAño'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tPCapacidad'); ?>
		<?php echo $form->textField($model,'tPCapacidad',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'tPCapacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tPUbicacionFisica'); ?>
		<?php echo $form->textField($model,'tPUbicacionFisica',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tPUbicacionFisica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaGas'); ?>
		<?php echo $form->textField($model,'sistemaGas',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sistemaGas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sGRedPublica'); ?>
		<?php echo $form->textField($model,'sGRedPublica',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sGRedPublica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sGTanqueAlmacenamiento'); ?>
		<?php echo $form->textField($model,'sGTanqueAlmacenamiento',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sGTanqueAlmacenamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sGCapacidadTanque'); ?>
		<?php echo $form->textField($model,'sGCapacidadTanque',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'sGCapacidadTanque'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sGUtilizaCilindros'); ?>
		<?php echo $form->textField($model,'sGUtilizaCilindros',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sGUtilizaCilindros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sGCapacidad'); ?>
		<?php echo $form->textField($model,'sGCapacidad',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'sGCapacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaAireAcondicionado'); ?>
		<?php echo $form->textField($model,'sistemaAireAcondicionado',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sistemaAireAcondicionado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aATipoSistema'); ?>
		<?php echo $form->textField($model,'aATipoSistema',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'aATipoSistema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aACapacidad'); ?>
		<?php echo $form->textField($model,'aACapacidad',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'aACapacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aATorreEnfriamiento'); ?>
		<?php echo $form->textField($model,'aATorreEnfriamiento',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'aATorreEnfriamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aATECapacidad'); ?>
		<?php echo $form->textField($model,'aATECapacidad',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'aATECapacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aATECantidad'); ?>
		<?php echo $form->textField($model,'aATECantidad',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'aATECantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoInstalacionesFisicas'); ?>
		<?php echo $form->textField($model,'mantenimientoInstalacionesFisicas',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'mantenimientoInstalacionesFisicas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mIFPersonalACargo'); ?>
		<?php echo $form->textField($model,'mIFPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mIFPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoPlantaElectrica'); ?>
		<?php echo $form->textField($model,'mantenimientoPlantaElectrica',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'mantenimientoPlantaElectrica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mPEPersonalACargo'); ?>
		<?php echo $form->textField($model,'mPEPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mPEPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientosubestaciónElectrica'); ?>
		<?php echo $form->textField($model,'mantenimientosubestaciónElectrica',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'mantenimientosubestaciónElectrica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mSEPersonalACargo'); ?>
		<?php echo $form->textField($model,'mSEPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mSEPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoTransformadorPropio'); ?>
		<?php echo $form->textField($model,'mantenimientoTransformadorPropio',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'mantenimientoTransformadorPropio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mTPPersonalACargo'); ?>
		<?php echo $form->textField($model,'mTPPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mTPPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoSistemaGas'); ?>
		<?php echo $form->textField($model,'mantenimientoSistemaGas',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'mantenimientoSistemaGas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mSGPersonalACargo'); ?>
		<?php echo $form->textField($model,'mSGPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mSGPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoAscensores'); ?>
		<?php echo $form->textField($model,'mantenimientoAscensores',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'mantenimientoAscensores'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mAPersonalACargo'); ?>
		<?php echo $form->textField($model,'mAPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mAPersonalACargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mantenimientoDispositivosSeguridad'); ?>
		<?php echo $form->textField($model,'mantenimientoDispositivosSeguridad',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'mantenimientoDispositivosSeguridad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mDSPersonalACargo'); ?>
		<?php echo $form->textField($model,'mDSPersonalACargo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mDSPersonalACargo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->