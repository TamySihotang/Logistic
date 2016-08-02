<?php
/* @var $this TbStockController */
/* @var $data TbStock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_stock')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_stock), array('view', 'id'=>$data->id_stock)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_office')); ?>:</b>
	<?php echo CHtml::encode($data->id_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />


</div>