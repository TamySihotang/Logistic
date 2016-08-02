<?php
//$this->pageTitle = Yii::app()->name_office . ' - Register';
$this->breadcrumbs = array(
    'Register',
);
?>
<h1>Registration Author of Office</h1>
<p>Please fill out the following form to register:</p>
<!-- form -->
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
    ?>
    <p class="note">Fields with <span class="required">*</span> are 
        required.</p>
    <?php echo $form->errorSummary($model); ?>
    
    <div class="row">
        <?php // echo $form->labelEx($model, 'id_office'); ?>
        <?php
        $list = Chtml::listData(TbOffice::model()->findAll(array('order' => 'id_office')), 'id_office', 'branch_office');
        
        echo $form->dropDownListGroup(
			$model,
			'id_office',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => $list,
					'htmlOptions' => array(),
				)
			)
		);
        
//        echo Chtml::activeDropDownList($model, 'id_office', $list, array('empty' => '--Choose Branch Office--'));
        ?>
        <?php echo $form->error($model, 'id_office'); ?>

    </div>
    <div class="row">
        <?php // echo $form->labelEx($model, 'author_name'); ?>
        <?php echo $form->textFieldGroup($model, 'author_name'); ?>
        <?php echo $form->error($model, 'author_name'); ?>
    </div>
    <div class="row">
        <?php // echo $form->labelEx($model, 'email_author'); ?>
        <?php echo $form->textFieldGroup($model, 'email_author'); ?> 
        <?php echo $form->error($model, 'email_author'); ?>
    </div>
    <div class="row">
        <?php // echo $form->labelEx($model, 'phone_author'); ?>
        <?php echo $form->textFieldGroup($model, 'phone_author'); ?> 
        <?php echo $form->error($model, 'phone_author'); ?>
    </div>
    <div class="row">
        <?php // echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textFieldGroup($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>
    <div class="row">
        <?php // echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordFieldGroup($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>
    <div class="row">
        <?php // echo $form->labelEx($model, 'repassword'); ?>
        <?php echo $form->passwordFieldGroup($model, 'repassword'); ?>
        <?php echo $form->error($model, 'repassword'); ?>
    </div>
    <div class="row buttons">
        <?php $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'submit',
				'context' => 'primary',
				'label' => 'Register'
			)
		);  ?>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- form -->