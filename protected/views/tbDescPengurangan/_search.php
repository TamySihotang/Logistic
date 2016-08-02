<?php
/* @var $this TbDescPenguranganController */
/* @var $model TbDescPengurangan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_desc_kurang'); ?>
		<?php echo $form->textField($model,'id_desc_kurang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sn'); ?>
		<?php echo $form->textField($model,'id_sn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->