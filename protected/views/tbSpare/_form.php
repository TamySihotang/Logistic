<?php
/* @var $this TbSpareController */
/* @var $model TbSpare */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-spare-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'series'); ?>
		<?php echo $form->textField($model,'series',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'series'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aliasname'); ?>
		<?php echo $form->textField($model,'aliasname',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'aliasname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partno'); ?>
		<?php echo $form->textField($model,'partno',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'partno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suband'); ?>
		<?php echo $form->textField($model,'suband',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'suband'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hilo'); ?>
		<?php echo $form->textField($model,'hilo',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'hilo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->