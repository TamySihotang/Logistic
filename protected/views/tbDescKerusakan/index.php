<?php
/* @var $this TbDescKerusakanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Desc Kerusakans',
);

$this->menu=array(
	array('label'=>'Create TbDescKerusakan', 'url'=>array('create')),
	array('label'=>'Manage TbDescKerusakan', 'url'=>array('admin')),
);
?>

<h1>Tb Desc Kerusakans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
