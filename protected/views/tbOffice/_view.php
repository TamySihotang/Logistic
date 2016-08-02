<?php
/* @var $this TbOfficeController */
/* @var $data TbOffice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_office')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_office), array('view', 'id'=>$data->id_office)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_office')); ?>:</b>
	<?php echo CHtml::encode($data->branch_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_office')); ?>:</b>
	<?php echo CHtml::encode($data->address_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_office')); ?>:</b>
	<?php echo CHtml::encode($data->email_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_office')); ?>:</b>
	<?php echo CHtml::encode($data->phone_office); ?>
	<br />


</div>