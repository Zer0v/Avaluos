<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $model PresupuestoReconstruccion */

$this->breadcrumbs=array(
	'Presupuesto Reconstruccions'=>array('index'),
	$model->idPresupuestoReconstruccion,
);

$this->menu=array(
	array('label'=>'List PresupuestoReconstruccion', 'url'=>array('index')),
	array('label'=>'Create PresupuestoReconstruccion', 'url'=>array('create')),
	array('label'=>'Update PresupuestoReconstruccion', 'url'=>array('update', 'id'=>$model->idPresupuestoReconstruccion)),
	array('label'=>'Delete PresupuestoReconstruccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPresupuestoReconstruccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PresupuestoReconstruccion', 'url'=>array('admin')),
);
?>

<h1>View PresupuestoReconstruccion #<?php echo $model->idPresupuestoReconstruccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPresupuestoReconstruccion',
	),
)); ?>
