<?php
/* @var $this TbSpareOfficeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Spare Offices',
);

$this->menu=array(
	array('label'=>'Create TbSpareOffice', 'url'=>array('create')),
	array('label'=>'Manage TbSpareOffice', 'url'=>array('admin')),
);
?>

<h1>Tb Spare Offices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
