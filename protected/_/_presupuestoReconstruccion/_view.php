<?php
/* @var $this PresupuestoReconstruccionController */
/* @var $data PresupuestoReconstruccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPresupuestoReconstruccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPresupuestoReconstruccion), array('view', 'id'=>$data->idPresupuestoReconstruccion)); ?>
	<br />


</div>