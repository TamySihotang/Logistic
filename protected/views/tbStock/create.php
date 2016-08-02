<?php
/* @var $this TbStockController */
/* @var $model TbStock */

$this->breadcrumbs=array(
	'Tb Stocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbStock', 'url'=>array('index')),
	array('label'=>'Manage TbStock', 'url'=>array('admin')),
);
?>

<h1>Create TbStock</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>