<?php
if($model->informacionGeneral!=null){
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Persona Entrevistada',
			'value'=>$model->informacionGeneral->personaEntrevistada,
		),
		array(
			'label'=>'Teléno',
			'value'=>$model->informacionGeneral->telefono,
		),
		array(
			'label'=>'Persona encargada de la Administración',
			'value'=>$model->informacionGeneral->personaEncargadaAdministracion,
		),
		array(
			'label'=>'Cargo',
			'value'=>$model->informacionGeneral->cargo,
		),
		array(
			'label'=>'Ciudad',
			'value'=>$model->informacionGeneral->ciudad,
		),
	),
)); 
}else{
	echo "No se ha ingresado Información General";
}
?>