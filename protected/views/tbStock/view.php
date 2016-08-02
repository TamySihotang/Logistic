<?php
/* @var $this TbStockController */
/* @var $model TbStock */

$this->breadcrumbs=array(
	'Tb Stocks'=>array('index'),
	$model->id_stock,
);

$this->menu=array(
	array('label'=>'List TbStock', 'url'=>array('index')),
	array('label'=>'Create TbStock', 'url'=>array('create')),
	array('label'=>'Update TbStock', 'url'=>array('update', 'id'=>$model->id_stock)),
	array('label'=>'Delete TbStock', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_stock),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbStock', 'url'=>array('admin')),
);
?>

<h1>View TbStock #<?php echo $model->id_stock; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_stock',
		'id_office',
		'stock',
	),
)); ?>
