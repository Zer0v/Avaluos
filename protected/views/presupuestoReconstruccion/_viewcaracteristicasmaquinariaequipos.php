<?php
if($model->caracteristicasMaquinariaEquipos!=null){
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>$model->caracteristicasMaquinariaEquipos->getAttributeLabel('descripcion'),
			'value'=>$model->caracteristicasMaquinariaEquipos->descripcion,
		),
		array(
			'label'=>$model->caracteristicasMaquinariaEquipos->getAttributeLabel('hojaVida'),
			'value'=>$model->caracteristicasMaquinariaEquipos->hojaVida,
		),
	),
)); 
}else{
	echo "No se ha ingresado Caracteristicas de la Maquinaria y Equipos";
}
?>