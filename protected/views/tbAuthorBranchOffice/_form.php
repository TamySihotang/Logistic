<?php
/* @var $this TbAuthorBranchOfficeController */
/* @var $model TbAuthorBranchOffice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-author-branch-office-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_office'); ?>
		<?php echo $form->textField($model,'id_office'); ?>
		<?php echo $form->error($model,'id_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author_name'); ?>
		<?php echo $form->textField($model,'author_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'author_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_author'); ?>
		<?php echo $form->textField($model,'email_author',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'email_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_author'); ?>
		<?php echo $form->textField($model,'phone_author',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'phone_author'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->