<?php
/* @var $this TbStockOfficeController */
/* @var $model TbStockOffice */

$this->breadcrumbs=array(
	'Tb Stock Offices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbStockOffice', 'url'=>array('index')),
	array('label'=>'Manage TbStockOffice', 'url'=>array('admin')),
);
?>

<h1>Create TbStockOffice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>