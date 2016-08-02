<?php
/* @var $this TbRequestController */
/* @var $data TbRequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_request')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_request), array('view', 'id'=>$data->id_request)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_number')); ?>:</b>
	<?php echo CHtml::encode($data->order_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sn')); ?>:</b>
	<?php echo CHtml::encode($data->id_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spare')); ?>:</b>
	<?php echo CHtml::encode($data->id_spare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_origin')); ?>:</b>
	<?php echo CHtml::encode($data->id_origin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_destiny')); ?>:</b>
	<?php echo CHtml::encode($data->id_destiny); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_author')); ?>:</b>
	<?php echo CHtml::encode($data->id_author); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_request')); ?>:</b>
	<?php echo CHtml::encode($data->status_request); ?>
	<br />

	*/ ?>

</div>