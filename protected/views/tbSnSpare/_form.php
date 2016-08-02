<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */
/* @var $form CActiveForm */
?>
<div class="form">
    
    <?php
   $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    	'type' => 'horizontal',
        'htmlOptions' => array('class' => 'well'), // for inset effect
    )
);
    
//    $form = $this->beginWidget('CActiveForm', array(
//'id' => 'registration-form',
//'enableAjaxValidation' => true
//            ));
//    ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
        <div class="row">
		<?php
// echo $form->labelEx($model,'Spare Part'); ?>
	        <?php
//                $id=  TbSpare::model()->findByAttributes(array('id_spare'=>$model->id_spare));
////                echo $id;
////                die();
//                echo $form->textField($model,'id_spare', array('readonly'=>'true','size'=>50,'maxlength'=>50,'value'=>Yii::app()->user->id,'disabled'=>'disabled'));
//                //echo $form->textFieldGroup($model,'id_spare',array('size'=>60,'maxlength'=>64,'value'=>'custom value')); ?>
            <?php
        
            echo $form->textFieldGroup(
			$model,
			'id_spare',
      
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'htmlOptions' => array(
                                           // 'disabled' => true,
                                            //'readonly'=>true,
                                   //      'value'=>Yii::app()->controller->actiongetId()->id,
                                            )
				)
			)
		); ?>
		
	</div>
        
        <div class="row">
		<?php // echo $form->labelEx($model,'serial_number'); ?>
	        <?php 
                  $sp = CHtml::listData(TbOffice::model()->findAll(array('order'=>'id_office')),'id_office','branch_office');
                     echo $form->select2Group(
			$model,
			'id_office',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
                                        
				),
				'widgetOptions' => array(
					'asDropDownList' => true,
                                        'data' => $sp,
					'options' => array(
						
						'placeholder' => '--Select Office--',
						/* 'width' => '40%', */
						'tokenSeparators' => array(',', ' ')
					)
				)
			)
		); 
                
                ?>
		
	</div>
        
        <div class="row">
		<?php // echo $form->labelEx($model,'serial_number'); ?>
		<?php 
               $sp = CHtml::listData(TbStatusSpare::model()->findAll(array('order'=>'id_status_spare')),'id_status_spare','status');
                     echo $form->select2Group(
			$model,
			'id_status_spare',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
                                        
				),
				'widgetOptions' => array(
					'asDropDownList' => true,
                                        'data' => $sp,
					'options' => array(
						
						'placeholder' => '--Select Status Spare--',
						/* 'width' => '40%', */
						'tokenSeparators' => array(',', ' ')
					)
				)
			)
		);
                     ?>
		
	</div>
        
        <div class="row">
        
	    <?php $this->widget('application.extensions.appendo.JAppendo',array(
        	'id' => 'repeateEnum',        
        	'model' => $model,
        	'viewName' => 'sn',
        	'labelDel' => 'Remove Row',
       		// 'cssFile' => 'css/jquery.appendo2.css'
    	)); ?>
    </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
        
        
        
<?php $this->endWidget(); ?>
</div><!-- form -->