<?php
/* @var $this TbSpareController */
/* @var $model TbSpare */

$this->breadcrumbs=array(
	'Tb Spares'=>array('index'),
	$model->id_spare,
);

$this->menu=array(
	array('label'=>'List TbSpare', 'url'=>array('index')),
	array('label'=>'Create TbSpare', 'url'=>array('create')),
	array('label'=>'Update TbSpare', 'url'=>array('update', 'id'=>$model->id_spare)),
	array('label'=>'Delete TbSpare', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_spare),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbSpare', 'url'=>array('admin')),
);
?>

<h1>View TbSpare #<?php echo $model->id_spare; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_spare',
		'category',
		'series',
		'type',
		'model',
		'aliasname',
		'partno',
		'description',
		'suband',
		'hilo',
	),
)); ?>
