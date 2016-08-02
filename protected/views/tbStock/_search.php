<?php
/* @var $this TbStockController */
/* @var $model TbStock */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_stock'); ?>
		<?php echo $form->textField($model,'id_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_office'); ?>
		<?php echo $form->textField($model,'id_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->