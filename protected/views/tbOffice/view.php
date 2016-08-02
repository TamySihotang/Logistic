<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */

$this->breadcrumbs=array(
	'Tb Offices'=>array('index'),
	$model->id_office,
);

$this->menu=array(
	//array('label'=>'List TbOffice', 'url'=>array('index')),
	array('label'=>'Create Office', 'url'=>array('create'),'visible'=> !Yii::app()->user->isGuest),
	array('label'=>'Update Office', 'url'=>array('update', 'id'=>$model->id_office),'visible'=> !Yii::app()->user->isGuest),
	//array('label'=>'Delete Office', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_office),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage TbOffice', 'url'=>array('admin')),
);
?>

<h1>Kantor <?php echo $model->branch_office; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_office',
		'branch_office',
		'address_office',
		'email_office',
		'phone_office',
	),
)); ?>
