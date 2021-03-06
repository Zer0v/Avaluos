<?php
if($model->informacionPredio!=null){
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('predioCopropiedad'),
			'value'=>$model->informacionPredio->predioCopropiedad,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('conjuntoCerrado'),
			'value'=>$model->informacionPredio->conjuntoCerrado,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('conjuntoCerradoOtro'),
			'value'=>$model->informacionPredio->conjuntoCerradoOtro,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('ciudad'),
			'value'=>$model->informacionPredio->ciudad,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('barrio'),
			'value'=>$model->informacionPredio->barrio,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('sector'),
			'value'=>$model->informacionPredio->sector,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('estrato'),
			'value'=>$model->informacionPredio->estrato,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('fechaFundacion'),
			'value'=>$model->informacionPredio->fechaFundacion,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('numeroEmpleados'),
			'value'=>$model->informacionPredio->numeroEmpleados,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('horarioTrabajo'),
			'value'=>$model->informacionPredio->horarioTrabajo,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('linderoNorte'),
			'value'=>$model->informacionPredio->linderoNorte,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('linderoNorteOcupado'),
			'value'=>$model->informacionPredio->linderoNorteOcupado,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('linderoSur'),
			'value'=>$model->informacionPredio->linderoSur,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('linderoSurOcupado'),
			'value'=>$model->informacionPredio->linderoSurOcupado,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('linderoOriente'),
			'value'=>$model->informacionPredio->linderoOriente,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('linderoOrienteOcupado'),
			'value'=>$model->informacionPredio->linderoOrienteOcupado,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('linderoOccidente'),
			'value'=>$model->informacionPredio->linderoOccidente,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('linderoOccidenteOcupado'),
			'value'=>$model->informacionPredio->linderoOccidenteOcupado,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('entidadesOficiales'),
			'value'=>$model->informacionPredio->entidadesOficiales,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('poliductosMineras'),
			'value'=>$model->informacionPredio->poliductosMineras,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('aguasFallas'),
			'value'=>$model->informacionPredio->aguasFallas,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('vias'),
			'value'=>$model->informacionPredio->vias,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('amenazasComunidad'),
			'value'=>$model->informacionPredio->amenazasComunidad,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('informacionRelacionesComunidad'),
			'value'=>$model->informacionPredio->informacionRelacionesComunidad,
		),
		array(
			'label'=>$model->informacionPredio->getAttributeLabel('relacionesComunidadBuenas'),
			'value'=>$model->informacionPredio->relacionesComunidadBuenas,
		),
	),
)); 
}else{
	echo "No se ha ingresado Información General";
}
?>