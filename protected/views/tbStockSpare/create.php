<?php
/* @var $this TbStockSpareController */
/* @var $model TbStockSpare */

$this->breadcrumbs=array(
	'Tb Stock Spares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbStockSpare', 'url'=>array('index')),
	array('label'=>'Manage TbStockSpare', 'url'=>array('admin')),
);
?>

<h1>Create TbStockSpare</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>