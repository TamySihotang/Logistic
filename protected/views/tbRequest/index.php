<?php
/* @var $this TbRequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Requests',
);

$this->menu=array(
	array('label'=>'Create TbRequest', 'url'=>array('create')),
	array('label'=>'Manage TbRequest', 'url'=>array('admin')),
);
?>

<h1>Tb Requests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
