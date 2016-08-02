<?php
/* @var $this TbAuthorBranchOfficeController */
/* @var $model TbAuthorBranchOffice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_author'); ?>
		<?php echo $form->textField($model,'id_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_office'); ?>
		<?php echo $form->textField($model,'id_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'author_name'); ?>
		<?php echo $form->textField($model,'author_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_author'); ?>
		<?php echo $form->textField($model,'email_author',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone_author'); ?>
		<?php echo $form->textField($model,'phone_author',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->