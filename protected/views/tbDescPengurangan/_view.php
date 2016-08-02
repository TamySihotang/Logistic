<?php
/* @var $this TbDescPenguranganController */
/* @var $data TbDescPengurangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_desc_kurang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_desc_kurang), array('view', 'id'=>$data->id_desc_kurang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sn')); ?>:</b>
	<?php echo CHtml::encode($data->id_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>