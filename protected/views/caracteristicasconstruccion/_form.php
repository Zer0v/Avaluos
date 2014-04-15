<?php
/* @var $this CaracteristicasconstruccionController */
/* @var $model CaracteristicasConstruccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caracteristicas-construccion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idCaracteristicasConstruccion'); ?>
		<?php echo $form->textField($model,'idCaracteristicasConstruccion'); ?>
		<?php echo $form->error($model,'idCaracteristicasConstruccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idPresupuestoReconstruccion'); ?>
		<?php echo $form->textField($model,'idPresupuestoReconstruccion'); ?>
		<?php echo $form->error($model,'idPresupuestoReconstruccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NPisos'); ?>
		<?php echo $form->textField($model,'NPisos'); ?>
		<?php echo $form->error($model,'NPisos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NSotanos'); ?>
		<?php echo $form->textField($model,'NSotanos'); ?>
		<?php echo $form->error($model,'NSotanos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'existeMezanine'); ?>
		<?php echo $form->textField($model,'existeMezanine',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'existeMezanine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pisoRiesgo'); ?>
		<?php echo $form->textField($model,'pisoRiesgo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'pisoRiesgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'areaRiesgo'); ?>
		<?php echo $form->textField($model,'areaRiesgo'); ?>
		<?php echo $form->error($model,'areaRiesgo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mamposteriaReforzada'); ?>
		<?php echo $form->textField($model,'mamposteriaReforzada',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'mamposteriaReforzada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mamposteriaConfinada'); ?>
		<?php echo $form->textField($model,'mamposteriaConfinada',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'mamposteriaConfinada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaReticularCelulado'); ?>
		<?php echo $form->textField($model,'sistemaReticularCelulado',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sistemaReticularCelulado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SistemaPorticoConcreto'); ?>
		<?php echo $form->textField($model,'SistemaPorticoConcreto',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'SistemaPorticoConcreto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unaDireccionC'); ?>
		<?php echo $form->textField($model,'unaDireccionC',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'unaDireccionC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dosDireccionesC'); ?>
		<?php echo $form->textField($model,'dosDireccionesC',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'dosDireccionesC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaPorticoAcero'); ?>
		<?php echo $form->textField($model,'sistemaPorticoAcero',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sistemaPorticoAcero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unaDireccionA'); ?>
		<?php echo $form->textField($model,'unaDireccionA',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'unaDireccionA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dosDireccionesA'); ?>
		<?php echo $form->textField($model,'dosDireccionesA',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'dosDireccionesA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaDualConcreto'); ?>
		<?php echo $form->textField($model,'sistemaDualConcreto',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sistemaDualConcreto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemaMurosEstructurales'); ?>
		<?php echo $form->textField($model,'sistemaMurosEstructurales',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'sistemaMurosEstructurales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maderaTejaBarro'); ?>
		<?php echo $form->textField($model,'maderaTejaBarro',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'maderaTejaBarro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cerchaMetalicaTejaLiviana'); ?>
		<?php echo $form->textField($model,'cerchaMetalicaTejaLiviana',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'cerchaMetalicaTejaLiviana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'losaConcreto'); ?>
		<?php echo $form->textField($model,'losaConcreto',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'losaConcreto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otro'); ?>
		<?php echo $form->textField($model,'otro',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'otro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cual'); ?>
		<?php echo $form->textField($model,'cual',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'cual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deterioro'); ?>
		<?php echo $form->textField($model,'deterioro',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'deterioro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->