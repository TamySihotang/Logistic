<?php
/* @var $this TbDescKerusakanController */
/* @var $data TbDescKerusakan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_desc_rusak')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_desc_rusak), array('view', 'id'=>$data->id_desc_rusak)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sn')); ?>:</b>
	<?php echo CHtml::encode($data->id_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>