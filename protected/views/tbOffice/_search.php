<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_office'); ?>
		<?php echo $form->textField($model,'id_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'branch_office'); ?>
		<?php echo $form->textField($model,'branch_office',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address_office'); ?>
		<?php echo $form->textField($model,'address_office',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_office'); ?>
		<?php echo $form->textField($model,'email_office',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone_office'); ?>
		<?php echo $form->textField($model,'phone_office',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->