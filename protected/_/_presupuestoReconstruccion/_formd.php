<?php
/* @var $this InformacionPresupuestoReconstruccionController */
/* @var $model InformacionPresupuestoReconstruccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacion-presupuesto-reconstruccion-form',
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
		<?php echo $form->labelEx($model,'copropidad'); ?>
		<?php echo $form->textField($model,'copropidad',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'copropidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nitCc'); ?>
		<?php echo $form->textField($model,'nitCc',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nitCc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intermediario'); ?>
		<?php echo $form->textField($model,'intermediario',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'intermediario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->