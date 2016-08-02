<?php
/* @var $this TbDescPenambahanController */
/* @var $data TbDescPenambahan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_desc_tambah')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_desc_tambah), array('view', 'id'=>$data->id_desc_tambah)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sn')); ?>:</b>
	<?php echo CHtml::encode($data->id_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>