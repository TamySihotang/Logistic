<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */
/* @var $model TbSnSpare */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'verticalForm',
        'type' => 'horizontal',
        'htmlOptions'=>array('class'=>'well'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($model,$modelRequest)); ?>
	<div class="row" style="margin-left:150px;
                                margin-top:-10px;">
		<?php echo $form->labelEx($model,'id_spare'); ?>
		<?php echo $form->textField($model,'id_spare',array('style'=>'margin-left:72px;
                     width:20%;
                     height:34px;
                     padding:6px 14px;
                     font-size: 14px;
                     line-height: 1.42857143;
                     color: #555;
                     background-color: #fff;
                     background-image: none;
                     border: 1px solid #ccc;
                     border-radius: 4px;
                     -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                     box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                     -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                     transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;','value'=>$model->idSpare->aliasname,'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'id_spare'); ?>
	</div><br/>

        <div class="row" style="margin-left:150px;
                                margin-top:-10px;">
		<?php echo $form->labelEx($model,'id_office'); ?>
		<?php echo $form->textField($model,'id_office',array('style'=>'margin-left:72px;
                     width:20%;
                     height:34px;
                     padding:6px 14px;
                     font-size: 14px;
                     line-height: 1.42857143;
                     color: #555;
                     background-color: #fff;
                     background-image: none;
                     border: 1px solid #ccc;
                     border-radius: 4px;
                     -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                     box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                     -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                     transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;','value'=>$model->idOffice->branch_office,'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'id_office'); ?>
	</div><br/>
        
	<div class="row" style="margin-left:150px;
                                margin-top:-10px;">
		<?php echo $form->labelEx($model,'id_status_spare'); ?>
		<?php echo $form->textField($model,'id_status_spare',array('style'=>'margin-left:25px;
                     width:20%;
                     height:34px;
                     padding:6px 14px;
                     font-size: 14px;
                     line-height: 1.42857143;
                     color: #555;
                     background-color: #fff;
                     background-image: none;
                     border: 1px solid #ccc;
                     border-radius: 4px;
                     -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                     box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                     -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                     transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;','value'=>$model->idStatusSpare->status,'disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'id_status_spare'); ?>
	</div><br/>

	<div class="row" style="margin-left:150px;
                                margin-top:-10px;">
		<?php echo $form->labelEx($model,'serial_number'); ?>
		<?php echo $form->textField($model,'serial_number',array('style'=>'margin-left:15px;
                     width:20%;
                     height:34px;
                     padding:6px 14px;
                     font-size: 14px;
                     line-height: 1.42857143;
                     color: #555;
                     background-color: #fff;
                     background-image: none;
                     border: 1px solid #ccc;
                     border-radius: 4px;
                     -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                     box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                     -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                     transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;','size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'serial_number'); ?>
	</div><br/>
        
        <div class="row" >
            <?php //echo $form->labelEx($modelRequest,'start_date'); ?>
            <?php //echo $form->textField($modelRequest,'start_date'); 
                echo $form->datePickerGroup(
			$modelRequest,
			'start_date',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'en',
                                            'format'=>'yyyy-mm-dd ',
					),
                                    
				),
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'hint' => 'Select Start Date',
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		);
            ?>
            <?php echo $form->error($modelRequest,'start_date'); ?>
            
        </div>
<div class="row">
            <?php //echo $form->labelEx($modelRequest,'start_date'); ?>
            <?php //echo $form->textField($modelRequest,'start_date'); 
                echo $form->datePickerGroup(
			$modelRequest,
			'end_date',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'en',
                                            'format'=>'yyyy-mm-dd ',
					),
				),
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'hint' => 'Select Start Date',
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		);
            ?>
            <?php echo $form->error($modelRequest,'end_date'); ?>
            
        </div>
        
        
            
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->