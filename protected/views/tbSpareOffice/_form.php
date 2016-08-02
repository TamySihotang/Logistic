<?php
/* @var $this TbSpareOfficeController */
/* @var $model TbSpareOffice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-spare-office-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_office'); ?>
		<?php echo $form->textField($model,'id_office'); ?>
		<?php echo $form->error($model,'id_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_spare'); ?>
		<?php echo $form->textField($model,'id_spare'); ?>
		<?php echo $form->error($model,'id_spare'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sn'); ?>
		<?php echo $form->textField($model,'id_sn'); ?>
		<?php echo $form->error($model,'id_sn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status_spare'); ?>
		<?php echo $form->textField($model,'id_status_spare'); ?>
		<?php echo $form->error($model,'id_status_spare'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->