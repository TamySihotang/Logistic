<?php
/* @var $this TbSpareController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Spares',
);

$this->menu=array(
	array('label'=>'Create TbSpare', 'url'=>array('create')),
	array('label'=>'Manage TbSpare', 'url'=>array('admin')),
);
?>

<h1>Tb Spares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
