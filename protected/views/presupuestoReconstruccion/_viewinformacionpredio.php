<?php
if($model->informacionGeneral!=null){
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->personaEntrevistada,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->telefono,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->personaEncargadaAdministracion,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->cargo,
		),
		array(
			'label'=>'Marca',
			'value'=>$model->informacionGeneral->ciudad,
		),
	),
)); 
}else{
	echo "No se ha ingresado Informaci�n General";
}
?>