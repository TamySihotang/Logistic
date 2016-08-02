<?php
/* @var $this TbOfficeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Offices',
);

$this->menu=array(
	array('label'=>'Create TbOffice', 'url'=>array('create')),
	array('label'=>'Manage TbOffice', 'url'=>array('admin')),
);
?>

<h1>Tb Offices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
