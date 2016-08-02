<?php
/* @var $this TbSpareOfficeController */
/* @var $data TbSpareOffice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spare_office')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_spare_office), array('view', 'id'=>$data->id_spare_office)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_office')); ?>:</b>
	<?php echo CHtml::encode($data->id_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spare')); ?>:</b>
	<?php echo CHtml::encode($data->id_spare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sn')); ?>:</b>
	<?php echo CHtml::encode($data->id_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status_spare')); ?>:</b>
	<?php echo CHtml::encode($data->id_status_spare); ?>
	<br />


</div>