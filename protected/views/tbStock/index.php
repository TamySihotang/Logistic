<?php
/* @var $this TbStockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Stocks',
);

$this->menu=array(
	array('label'=>'Create TbStock', 'url'=>array('create')),
	array('label'=>'Manage TbStock', 'url'=>array('admin')),
);
?>

<h1>Tb Stocks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
