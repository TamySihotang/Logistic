<?php
/* @var $this TbStockSpareController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Stock Spares',
);

$this->menu=array(
	array('label'=>'Create TbStockSpare', 'url'=>array('create')),
	array('label'=>'Manage TbStockSpare', 'url'=>array('admin')),
);
?>

<h1>Tb Stock Spares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
