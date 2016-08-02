<?php
/* @var $this TbStatusSpareController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Status Spares',
);

$this->menu=array(
	array('label'=>'Create TbStatusSpare', 'url'=>array('create')),
	array('label'=>'Manage TbStatusSpare', 'url'=>array('admin')),
);
?>

<h1>Tb Status Spares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
