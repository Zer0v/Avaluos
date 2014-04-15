<?php
/* @var $this InformacionPredioController */
/* @var $model InformacionPredio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacion-predio-form',
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
		<?php echo $form->labelEx($model,'predioCopropiedad'); ?>
		<?php echo $form->textField($model,'predioCopropiedad',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'predioCopropiedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conjuntoCerrado'); ?>
		<?php echo $form->textField($model,'conjuntoCerrado',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'conjuntoCerrado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conjuntoCerradoOtro'); ?>
		<?php echo $form->textField($model,'conjuntoCerradoOtro',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'conjuntoCerradoOtro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sector'); ?>
		<?php echo $form->textField($model,'sector',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'sector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estrato'); ?>
		<?php echo $form->textField($model,'estrato',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'estrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaFundacion'); ?>
		<?php echo $form->textField($model,'fechaFundacion',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'fechaFundacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroEmpleados'); ?>
		<?php echo $form->textField($model,'numeroEmpleados',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'numeroEmpleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horarioTrabajo'); ?>
		<?php echo $form->textField($model,'horarioTrabajo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'horarioTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoNorte'); ?>
		<?php echo $form->textField($model,'linderoNorte',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'linderoNorte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoNorteOcupado'); ?>
		<?php echo $form->textField($model,'linderoNorteOcupado',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'linderoNorteOcupado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoSur'); ?>
		<?php echo $form->textField($model,'linderoSur',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'linderoSur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoSurOcupado'); ?>
		<?php echo $form->textField($model,'linderoSurOcupado',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'linderoSurOcupado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoOriente'); ?>
		<?php echo $form->textField($model,'linderoOriente',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'linderoOriente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoOrienteOcupado'); ?>
		<?php echo $form->textField($model,'linderoOrienteOcupado',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'linderoOrienteOcupado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoOccidente'); ?>
		<?php echo $form->textField($model,'linderoOccidente',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'linderoOccidente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linderoOccidenteOcupado'); ?>
		<?php echo $form->textField($model,'linderoOccidenteOcupado',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'linderoOccidenteOcupado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidadesOficiales'); ?>
		<?php echo $form->textField($model,'entidadesOficiales',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'entidadesOficiales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poliductosMineras'); ?>
		<?php echo $form->textField($model,'poliductosMineras',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'poliductosMineras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aguasFallas'); ?>
		<?php echo $form->textField($model,'aguasFallas',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'aguasFallas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vias'); ?>
		<?php echo $form->textField($model,'vias',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'vias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amenazasComunidad'); ?>
		<?php echo $form->textField($model,'amenazasComunidad',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'amenazasComunidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacionRelacionesComunidad'); ?>
		<?php echo $form->textField($model,'informacionRelacionesComunidad',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'informacionRelacionesComunidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relacionesComunidadBuenas'); ?>
		<?php echo $form->textField($model,'relacionesComunidadBuenas',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'relacionesComunidadBuenas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->