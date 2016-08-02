<?php
/* @var $this TbStockSpareController */
/* @var $model TbStockSpare */

$this->breadcrumbs=array(
	'Tb Stock Spares'=>array('index'),
	$model->id_stock_spare,
);

$this->menu=array(
	array('label'=>'List TbStockSpare', 'url'=>array('index')),
	array('label'=>'Create TbStockSpare', 'url'=>array('create')),
	array('label'=>'Update TbStockSpare', 'url'=>array('update', 'id'=>$model->id_stock_spare)),
	array('label'=>'Delete TbStockSpare', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_stock_spare),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbStockSpare', 'url'=>array('admin')),
);
?>

<h1>View TbStockSpare #<?php echo $model->id_stock_spare; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_stock_spare',
		'id_spare',
		'id_sn',
		'id_status_spare',
		'stock_total',
	),
)); ?>
