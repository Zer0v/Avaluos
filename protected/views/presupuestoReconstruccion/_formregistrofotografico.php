    <div class="row">
        <?php $this->widget('CMultiFileUpload',array(
            'model'=>$model,    
            'name'=>'imagen',
            'attribute'=>'imagen',
            'accept'=>'jpg|gif|png',
            'denied'=>'no es permitido',
            'max'=>10,
            'duplicate'=>'Archivo duplicado',
        )); ?>
        <?php echo $form->error($model,'imagen'); ?>
    </div>