<?php
/* @var $this TbStatusSpareController */
/* @var $model TbStatusSpare */

$this->breadcrumbs=array(
	'Tb Status Spares'=>array('index'),
	$model->id_status_spare,
);

$this->menu=array(
	array('label'=>'List TbStatusSpare', 'url'=>array('index')),
	array('label'=>'Create TbStatusSpare', 'url'=>array('create')),
	array('label'=>'Update TbStatusSpare', 'url'=>array('update', 'id'=>$model->id_status_spare)),
	array('label'=>'Delete TbStatusSpare', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_status_spare),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbStatusSpare', 'url'=>array('admin')),
);
?>

<h1>View TbStatusSpare #<?php echo $model->id_status_spare; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_status_spare',
		'status',
	),
)); ?>
