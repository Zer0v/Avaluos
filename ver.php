<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $model PresupuestoReconstruccion */

$this->breadcrumbs=array(
	'Presupuesto Reconstrucción'=>array('index'),
	$model->idPresupuestoReconstruccion,
);

$this->menu=array(
	array('label'=>'Listar Presupuesto Reconstrucción', 'url'=>array('index')),
	array('label'=>'Insertar Presupuesto Reconstrucción', 'url'=>array('ingresar')),
	array('label'=>'Actualizar Presupuesto Reconstrucción', 'url'=>array('actualizar', 'id'=>$model->idPresupuestoReconstruccion)),
	array('label'=>'Eliminar Presupuesto Reconstrucción', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPresupuestoReconstruccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Presupuesto Reconstrucción', 'url'=>array('admin')),
);
?>

<h1>Ver Presupuesto Reconstrucción #<?php echo $model->idPresupuestoReconstruccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'copropiedad',
		'nitCc',
		'direccion',
		'fechaVisita',
		'intermediario',
	),
)); ?>

	<?php
	$this->widget('zii.widgets.jui.CJuiAccordion',array(
		'panels'=>array(
			'Información General'=>$this->renderPartial('_viewformaciongeneral',array('model'=>$model),true),
			'Información Predio'=>$this->renderPartial('_viewinformacionpredio',array('model'=>$model),true),
		),
		// additional javascript options for the accordion plugin
		'options'=>array(
			'collapsible'=> true,
			//'animated'=>'bounceslide',
			'autoHeight'=>false,
			'active'=>2,
		),
	));
	?>
