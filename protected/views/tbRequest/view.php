<?php
/* @var $this TbRequestController */
/* @var $model TbRequest */

$this->breadcrumbs=array(
	'Tb Requests'=>array('index'),
	$model->id_request,
);

$this->menu=array(
	array('label'=>'List TbRequest', 'url'=>array('index')),
	array('label'=>'Create TbRequest', 'url'=>array('create')),
	array('label'=>'Update TbRequest', 'url'=>array('update', 'id'=>$model->id_request)),
	array('label'=>'Delete TbRequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_request),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbRequest', 'url'=>array('admin')),
);
?>

<h1>View TbRequest #<?php echo $model->id_request; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_request',
		'order_number',
		'id_sn',
		'id_spare',
		'id_origin',
		'id_destiny',
		'id_author',
		'start_date',
		'end_date',
		'status_request',
	),
)); ?>
