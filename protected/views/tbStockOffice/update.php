<?php
/* @var $this TbStockOfficeController */
/* @var $model TbStockOffice */

$this->breadcrumbs=array(
	'Tb Stock Offices'=>array('index'),
	$model->id_stock_office=>array('view','id'=>$model->id_stock_office),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbStockOffice', 'url'=>array('index')),
	array('label'=>'Create TbStockOffice', 'url'=>array('create')),
	array('label'=>'View TbStockOffice', 'url'=>array('view', 'id'=>$model->id_stock_office)),
	array('label'=>'Manage TbStockOffice', 'url'=>array('admin')),
);
?>

<h1>Update TbStockOffice <?php echo $model->id_stock_office; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>