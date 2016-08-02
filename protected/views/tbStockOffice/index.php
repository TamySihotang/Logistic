<?php
/* @var $this TbStockOfficeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Stock Offices',
);

$this->menu=array(
	array('label'=>'Create TbStockOffice', 'url'=>array('create')),
	array('label'=>'Manage TbStockOffice', 'url'=>array('admin')),
);
?>

<h1>Tb Stock Offices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
