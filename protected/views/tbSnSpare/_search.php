<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'id_sn'); ?>
		<?php echo $form->textField($model,'id_sn'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'id_spare'); ?>
            <div><?php 
                $aliasname = CHtml::listData(TbSpare::model()->findAll(array('order'=>'id_spare')),'id_spare','aliasname');
                echo $form->dropDownList($model,'id_spare', $aliasname,array('empty' => 'Choose Sparepart')); ?></div>
	</div>
    
    <div class="row">
		<?php echo $form->label($model,'id_office'); ?>
        <div><?php 
                $office = Chtml::listData(TbOffice::model()->findAll(array('order' => 'id_office')), 'id_office', 'branch_office');    
                echo $form->dropDownList($model,'id_office',$office,array('empty' => 'Choose Office')); ?></div>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'id_status_spare'); ?>
            <div><?php echo $form->textField($model,'id_status_spare'); ?></div>
	</div>-->

	<!--<div class="row">
		<?php echo $form->label($model,'serial_number'); ?>
		<?php echo $form->textField($model,'serial_number',array('size'=>60,'maxlength'=>64)); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->