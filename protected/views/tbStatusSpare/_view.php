<?php
/* @var $this TbStatusSpareController */
/* @var $data TbStatusSpare */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status_spare')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_status_spare), array('view', 'id'=>$data->id_status_spare)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>