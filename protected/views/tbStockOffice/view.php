<?php
/* @var $this TbStockOfficeController */
/* @var $model TbStockOffice */

$this->breadcrumbs=array(
	'Tb Stock Offices'=>array('index'),
	$model->id_stock_office,
);

$this->menu=array(
	array('label'=>'List TbStockOffice', 'url'=>array('index')),
	array('label'=>'Create TbStockOffice', 'url'=>array('create')),
	array('label'=>'Update TbStockOffice', 'url'=>array('update', 'id'=>$model->id_stock_office)),
	array('label'=>'Delete TbStockOffice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_stock_office),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbStockOffice', 'url'=>array('admin')),
);
?>

<h1>View TbStockOffice #<?php echo $model->id_stock_office; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_stock_office',
		'id_office',
		'id_status_spare',
		'id_spare',
		'id_sn',
		'stock_total',
	),
)); ?>
