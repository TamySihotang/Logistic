<?php
/* @var $this TbSnSpareController */
/* @var $data TbSnSpare */
?>

<div class="view">

	<!--<b><?php //echo CHtml::encode($data->getAttributeLabel('id_sn')); ?></b>
	<?php //echo CHtml::link(CHtml::encode($data->id_sn), array('view', 'id'=>$data->id_sn)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spare')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSpare->aliasname),array('view','id'=>$data->id_sn)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status_spare')); ?>:</b>
	<?php echo CHtml::encode($data->idStatusSpare->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial_number')); ?>:</b>
	<?php echo CHtml::encode($data->serial_number); ?>
	<br /><br />


</div>