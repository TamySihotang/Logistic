<?php
/* @var $this TbSpareOfficeController */
/* @var $model TbSpareOffice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_spare_office'); ?>
		<?php echo $form->textField($model,'id_spare_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_office'); ?>
		<?php echo $form->textField($model,'id_office'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->