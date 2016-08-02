<?php
/* @var $this TbStockSpareController */
/* @var $model TbStockSpare */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_stock_spare'); ?>
		<?php echo $form->textField($model,'id_stock_spare'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_spare'); ?>
		<?php echo $form->textField($model,'id_spare'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sn'); ?>
		<?php echo $form->textField($model,'id_sn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_status_spare'); ?>
		<?php echo $form->textField($model,'id_status_spare'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock_total'); ?>
		<?php echo $form->textField($model,'stock_total',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->