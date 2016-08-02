<?php
/* @var $this TbAuthorBranchOfficeController */
/* @var $data TbAuthorBranchOffice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_author')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_author), array('view', 'id'=>$data->id_author)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_office')); ?>:</b>
	<?php echo CHtml::encode($data->id_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author_name')); ?>:</b>
	<?php echo CHtml::encode($data->author_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_author')); ?>:</b>
	<?php echo CHtml::encode($data->email_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_author')); ?>:</b>
	<?php echo CHtml::encode($data->phone_author); ?>
	<br />


</div>