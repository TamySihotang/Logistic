<?php
/* @var $this TbRequestController */
/* @var $model TbRequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', 
        array(
	'id'=>'verticalForm',
            'type' => 'horizontal',
            'htmlOptions' => array('class' => 'well'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"style="margin-top:-10px;">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="margin-left: 150px;
                                margin-top:-10px;">
		<?php echo $form->labelEx($model,'order_number'); ?>
		<div style="margin-left: -20px;"><?php //echo $form->textFieldGroup($model,'order_number'); ?>
                    &emsp;
                    <?php     $this->widget('booster.widgets.TbLabel',
                    array(
                        'context' => 'default',
                    // 'default', 'primary', 'success', 'info', 'warning', 'danger'
                       'label' => 'Generated',
        )
    ); ?></div>
		<?php echo $form->error($model,'order_number'); ?>
	</div><br>
        
        
	<div class="row">
		<?php //echo $form->labelEx($model,'id_destiny'); ?>
		<?php 
                //$origin = CHtml::listData(TbOffice::model()->findAll(array('order'=>'id_office')),'id_office','branch_office');
                //echo $form->textField($model,'id_destiny'); 
                
                
                
//                echo $form->dropDownListGroup(
//			$model,
//			'id_origin',
//			array(
//				'wrapperHtmlOptions' => array(
//					'class' => 'col-sm-5',
//				),
//				'widgetOptions' => array(
//                                        
//                                        'data' => $origin,
//					'htmlOptions' => array('empty'=>'--Choose Origin--'),
//				),  
//			)
//		);
                
                ?>
		<?php //echo $form->error($model,'id_destiny'); ?>
	</div>

        

        <div class="row" style="margin-left:150px;
                                margin-top:-10px;">
		<?php echo $form->labelEx($model,'id_origin'); ?>

		<div style="
                     display:block;
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
                     transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                     ">
                    
                    <?php echo $form->dropDownList($model,'id_origin',CHtml::listData(TbOffice::model()->findAll(array('order'=>'id_office')),'id_office','branch_office'),
                        array(
                            'ajax'=>array(
                                'type'=>'POST',
                                'url'=>CController::CreateUrl('TbRequest/Selectspare'),
                                'update'=>'#'.CHtml::activeId($model,'id_spare'),
                                'beforeSend'=> 'function(){
                                    $("#Request_id_spare").find("option").remove();
                                    $("#Request_id_sn").find("option").remove();
                                    }',
                            ),
                            'prompt'=>'Choose Origin'));?></div>
		<?php echo $form->error($model,'id_origin'); ?>
	</div>
        <br>

	<div class="row" style="margin-left:150px;margin-top:-10px;">
		<?php echo $form->labelEx($model,'id_spare'); ?>
		<div style="
                     display:block;
                     width:20%;
                     height:34px;
                     padding:6px 35px;
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
                     transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                     "><?php //echo $form->textField($model,'id_spare'); 
                //$spare = CHtml::listData(TbSpare::model()->findAll(array('order'=>'id_spare')),'id_spare','aliasname');
//                echo $form->dropDownListGroup(
//			$model,
//			'id_spare',
//			array(
//				'wrapperHtmlOptions' => array(
//					'class' => 'col-sm-5',
//				),
//				'widgetOptions' => array(
//                                        
//                                        'data' => $spare,
//					'htmlOptions' => array('empty'=>'--Choose Spare--'),
//				),  
//			)
//		);
                
                
                //$spare = CHtml::listData(TbSpare::model()->findAll(),'id_spare','aliasname');
                //echo $form->dropDownList($model,'id_spare',array());
                 echo $form->dropDownList($model,'id_spare',array(),
         array(
   'prompt'=>'Choose Spare',
   'ajax' => array(
     'type'=>'POST',
     'url'=>CController::createUrl('TbRequest/Selectsn'), //selectjur adalah actionSelectjur di ProfilController.
     'update'=>'#'.CHtml::activeId($model,'id_sn'), //jurusan_id = field jurusan_id
     'beforeSend'=>'function() { 
       $("#Request_id_sn").find("option").remove();
     }', //Bila tidak menggunakan ini, maka yg terupdate hanya jurusan (bawaan 'update').
   )
 )
 );
                 ?></div>
		<?php echo $form->error($model,'id_spare'); ?>
	</div>
        <br>
        <div class="row" style="margin-left:150px;
                                margin-top:-10px;">
		<?php echo $form->labelEx($model,'id_sn'); ?>
            <div style="
                     display:block;
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
                     transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                     "><?php echo $form->dropDownList($model,'id_sn',array(),array('prompt'=>'Choose Serial Number')); ?></div>
		<?php echo $form->error($model,'id_sn'); ?>
	</div>
	<br>
	<div class="row">
		<?php //echo $form->labelEx($model,'id_author'); ?>
		<?php //echo $form->textField($model,'id_author'); ?>
		<?php //echo $form->error($model,'id_author'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'start_date'); ?>
		<?php //echo $form->textField($model,'start_date'); 
                        
                         echo $form->datePickerGroup(
			$model,
			'start_date',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'es',
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
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'end_date'); ?>
		<?php //echo $form->textField($model,'end_date'); 
                
                         echo $form->datePickerGroup(
			$model,
			'end_date',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'es',
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
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'status_request'); ?>
		<?php //echo $form->textField($model,'status_request',array('size'=>60,'maxlength'=>64)); ?>
		<?php //echo $form->error($model,'status_request'); ?>
	</div>

	<div class="row buttons">
            
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->