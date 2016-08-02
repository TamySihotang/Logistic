<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-office-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'branch_office'); ?>
		<?php echo $form->textField($model,'branch_office',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'branch_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_office'); ?>
		<?php echo $form->textField($model,'address_office',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'address_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_office'); ?>
		<?php echo $form->textField($model,'email_office',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'email_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_office'); ?>
		<?php echo $form->textField($model,'phone_office',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'phone_office'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->