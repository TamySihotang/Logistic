<?php
/* @var $this TbSnSpareController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Sn Spares',
);

$this->menu=array(
	array('label'=>'Create TbSnSpare', 'url'=>array('create')),
	array('label'=>'Manage TbSnSpare', 'url'=>array('admin')),
);
?>

<h1>Serial Number & Spare</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
