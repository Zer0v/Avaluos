	<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/js/general.js', CClientScript::POS_END); ?>
	
	<?php $SN = array('Si'=>'Si', 'No'=>'No'); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'tanques'); ?>
		<?php echo $form->radioButtonList($model,'tanques',$SN,array('onclick'=>'muestratanques("tanquesmostrar",this.value)','labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;&nbsp;&nbsp;')); ?>
		<?php echo $form->error($model,'tanques'); ?>
	</div>

	<?php $model->tanques=='Si' ? $tanquesmostrar='block' : $tanquesmostrar='none' ?>
	<div id="tanquesmostrar" style="display:<?php echo $tanquesmostrar; ?>">
		<div class="row">
			<?php echo $form->labelEx($model,'cantidad'); ?>
			<?php echo $form->textField($model,'cantidad'); ?>
			<?php echo $form->error($model,'cantidad'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'ubicacionFisica'); ?>
			<?php echo $form->textField($model,'ubicacionFisica'); ?>
			<?php echo $form->error($model,'ubicacionFisica'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'contenido'); ?>
			<?php echo $form->textField($model,'contenido'); ?>
			<?php echo $form->error($model,'contenido'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'capacidad'); ?>
			<?php echo $form->textField($model,'capacidad'); ?>
			<?php echo $form->error($model,'capacidad'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'materialConstruccion'); ?>
			<?php echo $form->textField($model,'materialConstruccion'); ?>
			<?php echo $form->error($model,'materialConstruccion'); ?>
		</div>
	</div>

	