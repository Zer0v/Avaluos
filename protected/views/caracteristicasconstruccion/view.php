<?php
/* @var $this CaracteristicasconstruccionController */
/* @var $model CaracteristicasConstruccion */

$this->breadcrumbs=array(
	'Caracteristicas Construccions'=>array('index'),
	$model->idCaracteristicasConstruccion,
);

$this->menu=array(
	array('label'=>'List CaracteristicasConstruccion', 'url'=>array('index')),
	array('label'=>'Create CaracteristicasConstruccion', 'url'=>array('create')),
	array('label'=>'Update CaracteristicasConstruccion', 'url'=>array('update', 'id'=>$model->idCaracteristicasConstruccion)),
	array('label'=>'Delete CaracteristicasConstruccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCaracteristicasConstruccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CaracteristicasConstruccion', 'url'=>array('admin')),
);
?>

<h1>View CaracteristicasConstruccion #<?php echo $model->idCaracteristicasConstruccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCaracteristicasConstruccion',
		'idPresupuestoReconstruccion',
		'NPisos',
		'NSotanos',
		'existeMezanine',
		'pisoRiesgo',
		'areaRiesgo',
		'mamposteriaReforzada',
		'mamposteriaConfinada',
		'sistemaReticularCelulado',
		'SistemaPorticoConcreto',
		'unaDireccionC',
		'dosDireccionesC',
		'sistemaPorticoAcero',
		'unaDireccionA',
		'dosDireccionesA',
		'sistemaDualConcreto',
		'sistemaMurosEstructurales',
		'maderaTejaBarro',
		'cerchaMetalicaTejaLiviana',
		'losaConcreto',
		'otro',
		'cual',
		'deterioro',
		'observaciones',
	),
)); ?>
