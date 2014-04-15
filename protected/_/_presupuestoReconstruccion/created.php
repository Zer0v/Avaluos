<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $model PresupuestoReconstruccion */

$this->breadcrumbs=array(
	'Presupuesto Reconstruccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PresupuestoReconstruccion', 'url'=>array('index')),
	array('label'=>'Manage PresupuestoReconstruccion', 'url'=>array('admin')),
);
?>

<h1>Create Información de Presupuesto de Reconstrucción</h1>

<?php $this->renderPartial('_formd', array('model'=>$model)); ?>