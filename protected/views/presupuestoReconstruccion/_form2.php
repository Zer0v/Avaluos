<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'presupuesto-reconstruccion-form',
    'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($modelig,$modelip,$modelpr)); ?>

	<div class="row">
		<?php echo $form->labelEx($modelpr,'copropiedad'); ?>
		<?php echo $form->textField($modelpr,'copropiedad',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($modelpr,'copropiedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelpr,'nitCc'); ?>
		<?php echo $form->textField($modelpr,'nitCc',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($modelpr,'nitCc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelpr,'direccion'); ?>
		<?php echo $form->textField($modelpr,'direccion',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($modelpr,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelpr,'fechaVisita'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $modelpr,
                    'language' => 'es',
                    'attribute' => 'fechaVisita',
                    'options' => array(
                        'showAnim' => 'fold',
                        'dateFormat' => 'dd/mm/yy',
                    ),
            ));?>
		<?php echo $form->error($modelpr,'fechaVisita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelpr,'intermediario'); ?>
		<?php echo $form->textField($modelpr,'intermediario',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($modelpr,'intermediario'); ?>
	</div>
	
	<?php
	$this->widget('zii.widgets.jui.CJuiAccordion',array(
		'panels'=>array(
			'1.INFORMACIÓN GENERAL'=>$this->renderPartial('_forminformaciongeneral',array('model'=>$modelig,'form'=>$form),true),
			'2. INFORMACIÓN DEL PREDIO'=>$this->renderPartial('_forminformacionpredio',array('model'=>$modelip,'form'=>$form),true),
			'3. CARACTERISTICAS DE LA CONSTRUCCION'=>$this->renderPartial('_formcaracteristicasconstruccion',array('model'=>$modelcc,'form'=>$form),true),
		),
		'options'=>array(
			'collapsible'=> true,
			//'animated'=>'bounceslide',
			'autoHeight'=>false,
			'active'=>13,
		),
	));
	?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Create'); ?>
	</div>


<?php $this->endWidget(); ?>
</div><!-- form -->